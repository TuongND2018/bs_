<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style>

</style>
</head>
<body>
<div id="dialog-confirm" title="Thông báo" style="display:none">
  <p>Bạn chắc chắn muốn duyệt phiếu nhập đã chọn?</p>
</div>
 
    <div id="main_content">
         <div class="ui-layout-north n_tren"> 
            <table id="rowed3" ></table>
            <div id="prowed3" ></div> 
        </div>
        <div class="ui-layout-center n_duoi"> 
            <table id="rowed4" ></table>
        </div>
    </div>
</body>
<script type="text/javascript">
$(document).ready(function(e) {
	openform_shortcutkey();
	window.daduyetnhap=0;
	$("#main_content").css("height",$(window).height()-5+"px");			 
	$("#main_content").fadeIn(1000); 
	create_layout();
	create_grid();
	create_grid2();
	resize_control();
	$("#xem").button();
	setTimeout(function(){
		$("#xem").click();	
	},500)
	
	$("#xem").click(function(e) {
        $("#rowed3").jqGrid('setGridParam',{datatype: 'json',url:"resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_danhsach_phieuxuatdieuchuyen&tungay="+$("#tungay").val()+"&denngay="+$("#denngay").val()}).trigger('reloadGrid');
    });
	$( "#dialog-confirm" ).dialog({
      resizable: false,
	  autoOpen:false,
      height:160,
      modal: true,
      buttons: {
        "YES": function() {
          $( this ).dialog( "close" );
		   $.post('resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=update_duyet&idnhapkho='+window.idnhapkho).done(function(data){
				tooltip_message("Duyệt thành công");
				window.daduyetnhap=1;
				$("#rowed3").jqGrid('setGridParam',{datatype: 'json',url:"resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_danhsach_phieuxuatdieuchuyen&tungay="+$("#tungay").val()+"&denngay="+$("#denngay").val()}).trigger('reloadGrid');
			});
        },
        "NO": function() {
          $( this ).dialog( "close" );
        }
      },open: function () {
		  $(this).closest('.ui-dialog').find('.ui-dialog-buttonpane button:eq(0)').focus();
		  $(this).closest('.ui-dialog').find('.ui-dialog-buttonpane button:eq(0)').addClass('n_btn1');
		   $(this).closest('.ui-dialog').find('.ui-dialog-buttonpane button:eq(1)').addClass('n_btn2');
		 //var hasFocus = $('.n_btn1').is(':focus');
			  $('.ui-dialog').keyup(function(e) {
				  if (e.keyCode === 37){
					  $('.n_btn1').focus();
					  $('.n_btn2').focusout();
				  }
				  if (e.keyCode === 39){
					  $('.n_btn2').focus();
					  $('.n_btn1').focusout();
				  }
				})
		}
    });
	
	phanquyen();
	$("#rowed3_duyet").addClass('ui-state-disabled');
});
$(window).resize(function() {
	$("#main_content").css("height",$(window).height()-5+"px");			 
	$("#main_content").fadeIn(1000);
	resize_control();
})
function create_layout(){
	$('#main_content').layout({
            resizerClass: 'ui-state-default'
                    , north: {
                resizable: true
                        , size: "50%"
                        , resizerDblClickToggle: false
                        , onresize_end: function() {
                   resize_control();
                }
                , onopen_end: function() {
						resize_control();
                }
                , onclose_end: function() {
					resize_control();
                }

            }
            , center: {
                resizable: true
                        , size: "50%"
                        , resizerDblClickToggle: false
                        , onresize_end: function() {
                    resize_control();
                }
                , onopen_end: function() {
					resize_control();
                }
                , onclose_end: function() {
					resize_control();	
                }
            }
          
        });
	}
function create_grid(){
	$("#rowed3").jqGrid({
		url:'',
		datatype: "json",
		colNames: ['Kho xuất','Kho nhận','Người tạo','Ngày tạo','Người duyệt xuất kho','Ngày duyệt xuất kho','Người duyệt nhập kho','Ngày duyệt nhập kho'],
		colModel: [
			{name: 'KhoXuat', index: 'KhoXuat', search: true, width: "10%", editable: false, align: 'left', hidden: false},
			{name: 'KhoNhap', index: 'KhoNhap', search: true, width: "10%", editable: false, align: 'left', hidden: false},
			{name: 'NguoiTao', index: 'NguoiTao', search: true, width: "10%", editable: false, align: 'left', hidden: false},
			{name: 'NgayTao', index: 'NgayTao', search: true, width: "10%", editable: false, align: 'left', hidden: false},
			{name: 'NguoiDuyetXuat', index: 'NguoiDuyetXuat', search: true, width: "10%", editable: false, align: 'left', hidden: false},
			{name: 'NgayDuyetXuat', index: 'NgayDuyetXuat', search: true, width: "10%", editable: false, align: 'left', hidden: false},
			{name: 'NguoiDuyetNhap', index: 'NguoiDuyetNhap', search: true, width: "10%", editable: false, align: 'left', hidden: false},
			{name: 'NgayDuyetNhap', index: 'NgayDuyetNhap', search: true, width: "10%", editable: false, align: 'left', hidden: false},
		],
	   loadonce: true,
		scroll: 1,
		modal: true,
		rowNum: 3000,
		rowList: [30, 50, 70],
		pager: '#prowed3',
		//sortname: 'NgayGioKetThuc',
		height: 100,
		width: 100,
		viewrecords: true,
		ignoreCase: true,
		shrinkToFit: true,
		
		afterShowForm : function (formid) {

		},
		onSelectRow: function(id) {
			window.idnhapkho=id;
			var dataRow = jQuery('#rowed3').jqGrid ('getRowData', id);
			if(dataRow['NguoiDuyetNhap']==''){
				$("#rowed3_duyet").removeClass('ui-state-disabled');
			}else{
				$("#rowed3_duyet").addClass('ui-state-disabled');
			}
			$("#rowed4").jqGrid('setGridParam',{datatype: 'json',url:"resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_danhsach_phieuxuatdieuchuyenchitiet&id_nhapkho="+id}).trigger('reloadGrid');
		},
		ondblClickRow: function(rowId, rowIndex, columnIndex) {
		
		},
		onselect: function(rowId, rowIndex, columnIndex) {
			
		},
		loadComplete: function(data) {
			grid_filter_enter("#rowed3");
			if(window.daduyetnhap==1){
				$("#rowed3").jqGrid('setSelection',window.idnhapkho)		
			}else{
				ids = $('#rowed3').jqGrid('getDataIDs');
				$("#rowed3").jqGrid('setSelection',ids[0])	
			}
			
				/*for(var i=0;i<ids.length;i++){

				}	*/					 
		},
		caption: "Ds phiếu xuất điều chuyển <span style='margin-left:50px'> Từ ngày <input type='text' id='tungay' value='<?php echo date("d/m/".$_SESSION["config_system"]["namUI"])?>'  style=' width:85px; text-align:center'> đến ngày <input type='text' id='denngay' value='<?php echo date("d/m/".$_SESSION["config_system"]["namUI"])?>'  style=' width:85px; text-align:center'> <button id='xem' style='margin-left:5px;0.2em 1em !important; height:25px'> Xem</button></span>"
	});
	$("#rowed3").jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false,defaultSearch:"bw"});
	$("#rowed3").jqGrid('navGrid',"#prowed3",{add: false, edit: false, del: false, search: false,closeAfterEdit: true,clearAfterAdd :true,closeOnEscape : true });
	$("#rowed3").jqGrid('navButtonAdd', '#prowed3', {caption: "Duyệt phiếu", buttonicon: 'ui-icon-check',id:'rowed3_duyet',
            onClickButton: function() {
				$( "#dialog-confirm" ).dialog('open');
            },
            title: "Duyệt phiếu",
            position: "last"
    }); 
	$("#rowed3").jqGrid('bindKeys', {});
	$("#tungay").datepicker({
		changeMonth: true,
		changeYear: true,
		dateFormat: $.cookie("ngayJqueryUi")
	});
	$("#denngay").datepicker({
		changeMonth: true,
		changeYear: true,
		dateFormat: $.cookie("ngayJqueryUi")
	});
}

function create_grid2() {
      mydata=[];
        $("#rowed4").jqGrid({
            data: mydata,
            datatype: "local",
            colNames: ['Tên gốc','ĐVT', 'Số lượng', 'Đơn giá', 'Thành tiền', 'Số lô HT', 'Số lô NSX','Ngày hết hạn'],
            colModel: [
                {name: 'TenGoc', index: 'TenGoc', search: true, width: "20%", editable: false, align: 'left', hidden: false,classes:'r3_mabenhnhan'},
				{name: 'DonViTinh', index: 'DonViTinh', search: true, width: "10%", editable: false, align: 'left', hidden: false},
				{name: 'SoLuong', index: 'SoLuong', search: true, width: "10%", editable: false, align: 'left', hidden: false},
				{name: 'DonGia', index: 'DonGia', search: true, width: "10%", editable: false, align: 'right', hidden: false,formatter:"currency",formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: "", defaultValue: '0'}},
				{name: 'ThanhTien', index: 'ThanhTien', search: true, width: "10%", editable: false, align: 'right', hidden: false,formatter:"currency",formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: "", defaultValue: '0'}},
				{name: 'SoLoHT', index: 'SoLoHT', search: true, width: "10%", editable: false, align: 'left', hidden: false},
				{name: 'SoLoNSX', index: 'SoLoNSX', search: true, width: "10%", editable: false, align: 'left', hidden: false},
				{name: 'NgayHH', index: 'NgayHH', search: true, width: "10%", editable: false, align: 'left', hidden: false},
				
            ],
           loadonce: true,
            scroll: 1,
            modal: true,
            rowNum: 3000,
            rowList: [30, 50, 70],
            pager: '#prowed4',
            //sortname: 'NgayGioKetThuc',
            height: 100,
            width: 100,
            viewrecords: true,
            ignoreCase: true,
            shrinkToFit: true,
			
			afterShowForm : function (formid) {

			},
            onSelectRow: function(id) {
				
            },
            ondblClickRow: function(rowId, rowIndex, columnIndex) {
            
            },
            onselect: function(rowId, rowIndex, columnIndex) {
				
            },
            loadComplete: function(data) {
			//ids = $('#rowed3').jqGrid('getDataIDs');				 
			//$("#rowed3").jqGrid("setSelection",ids[0], true);
						 
			},
            caption: "Chi tiết thuốc xuất điều chuyển"
        });
		$("#rowed4").jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false,defaultSearch:"bw"});
		$("#rowed4").jqGrid('bindKeys', {});
    }
function resize_control(){
	$("#rowed3").setGridWidth($("#main_content").width()-11);
	$("#rowed3").setGridHeight($(".n_tren").height()-118);
	$("#rowed4").setGridWidth($("#main_content").width()-11);
	$("#rowed4").setGridHeight($(".n_duoi").height()-85);
}
</script>
</html>

