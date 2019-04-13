<!--author:khatm--
Form: xếp hàng lâm sàng-->
<style type="text/css">
    #rowed3 td,#rowed4 td,#rowed5 td{
        font-size:11px!important;
    }
    input[type=button].custom_button:focus{
        outline:  none;
    }
    :focus {outline:none;}
    ::-moz-focus-inner {border:0;}
	#n_top_menu{
		height:30px;
		border-radius:4px;
		border: solid 1px #999999;
		width:99%;
		margin-left:3px;
	}
</style>


<body>
 <div id="dialog-confirm" title="Thông báo" style="display:none">
  <p>Bạn chắc chắn muốn duyệt phiếu xuất nội bộ đã chọn?</p>
</div>
<div id="dialog-loithuoc" title="Thông báo" style="display:none">
  <p><span id="tenthuoc_ton" style="font-weight:bold"></span> số lượng tồn không đủ để xuất</p>
</div>
    <div id="panel_main" >
        <div class="left_col ui-widget-content ui-layout-center">
            <div id='n_top_menu' style="margin-top:5px;display:inline-block; padding-top:5px;">
           	<span style='margin-left:10px'> Từ ngày <input type='text' id='tungay' value='<?php echo date("d/m/".$_SESSION["config_system"]["namUI"])?>'  style=' width:85px; text-align:center'> đến ngày <input type='text' id='denngay' value='<?php echo date("d/m/".$_SESSION["config_system"]["namUI"])?>'  style=' width:85px; text-align:center'> <button id='xem' style='margin-left:5px;0.2em 1em !important; margin-top: -4px;'> Xem</button></span>
            <button id="xemin" style='margin-left:5px;0.2em 1em !important; margin-top: -4px;'>In Phiếu</button>
       		</div>

      <div id="luoitrai" style="">
         <div class="ui-layout-north n_tren">
        
            <table id="rowed3" ></table>
            <div id="prowed3" ></div> 
        </div>
        <div class="ui-layout-center n_duoi">
            <table id="rowed4" ></table>
        </div>
     </div>
        </div>

        <div class="ui-layout-east ui-widget-content right_col">
         <table id="rowed5" ></table>
   	 </div>
</body>
</html>

<script type="text/javascript">
var loadlandau=0;
    jQuery(document).ready(function() {
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

    $("#panel_main").css("height",$(window).height()+"px");
    $("#panel_main").fadeIn(1000);
    $(".left_col").css('height',$("#panel_main").height());
    $('#luoitrai').css('height',$(".left_col").height());
    openform_shortcutkey(); //mở bằng phím tắt được thiết lập trong DB
	create_layout();
	create_layout2();
	create_grid();
	create_grid2();
	create_grid3();
	resize_control();
	$("#xem").button();
	setTimeout(function(){
		$("#xem").click();	
	},500)
	
	$("#xem").click(function(e) {
        $("#rowed3").jqGrid('setGridParam',{datatype: 'json',url:"resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_danhsach_phieuxuatnoibo&tungay="+$("#tungay").val()+"&denngay="+$("#denngay").val()}).trigger('reloadGrid');
		$("#rowed4").jqGrid('setGridParam',{datatype: 'json',url:"resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_danhsach_phieuxuatnoibo_daduyet&tungay="+$("#tungay").val()+"&denngay="+$("#denngay").val()}).trigger('reloadGrid');
    });
	$("#xemin").click(function(e) {
             $.cookie("in_status", "print_preview");
			dialog_report("Xem trước khi in",90,90,"u78787878975f","resource.php?module=report&view=quanlyduoc&action=phieuxuatthuocnoibo&idphieu="+window.inphieuid+"&type=report&id_form=10",'PhieuLinhThuoc');
        });
	
	$( "#dialog-loithuoc" ).dialog({
      resizable: false,
	  autoOpen:false,
      height:160,
	  width:350,
      modal: true,
      buttons: {
        "YES": function() {
          $( this ).dialog( "close" );
        }
      }
    });
	
	$( "#dialog-confirm" ).dialog({
      resizable: false,
	  autoOpen:false,
      height:160,
	  width:350,
      modal: true,
      buttons: {
        "YES": function() {
          $( this ).dialog( "close" );
		   $.post('resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=controller&hienmaloi=a&idxuatnoibo='+window.idxuatnoibo).done(function(data){	
			    data=data.split(';');
				if(data[2]==1){
					$("#tenthuoc_ton").html(data[3]);
					$( "#dialog-loithuoc" ).dialog('open');
				}else{
					tooltip_message("Duyệt thành công");
					window.daduyetnhap=1;
					$("#xem").click();
				}
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
	$("#xemin").button();
	$("#rowed3_duyet").addClass('ui-state-disabled');
	$(window).resize(function() {
		$("#panel_main").css("height",$(window).height()+"px");
		$("#panel_main").fadeIn(1000);
		$(".left_col").css('height',$("#panel_main").height());
		$('#luoitrai').css('height',$(".left_col").height());
	})
})//end ready


function create_layout() {
	$('#panel_main').layout({
		resizerClass: 'ui-state-default'
				, east: {
			resizable: true
					, size: "40%"
					, spacing_closed: 27
					, togglerLength_closed: 85
					, togglerAlign_closed: "center"
					, togglerContent_closed: "<div id='menu_toggle'>X<BR>O<BR>N<BR>G</div>"
					, togglerTip_closed: "Open & Pin Menu"
					, sliderTip: "Slide Open Menu"
					, slideTrigger_open: "mouseover"
					, fxSettings_close: {easing: "easeOutQuint"}
					, initClosed:    false
			, onresize_end: function() {
				resize_control();

			}
			, onopen_end: function() {

				resize_control();
				//alert('c');
			}
			, onclose_end: function() {


			}

		}
		, center: {
			resizable: true
					, size: "60%"

					, fxName: "drop"		// none, slide, drop, scale
					, fxSpeed_open: 450
					, fxSpeed_close: 450
					, fxSettings_open: {easing: "easeInQuint"}
			, fxSettings_close: {easing: "easeOutQuint"}

			, onresize_end: function() {
				resize_control();
			}
			, onopen_end: function() {

			  //  resize_control();

			}
			, onclose_end: function() {



			}
		}
	});
}
   
function create_layout2(){
    $('#luoitrai').layout({
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
		colNames: ['Số phiếu','Khoa','Người tạo','Ngày tạo','','',''],
		colModel: [
			{name: 'SoPhieu', index: 'SoPhieu', search: true, width: "5%", editable: false, align: 'left', hidden: false},
			{name: 'Khoa', index: 'Khoa', search: true, width: "15%", editable: false, align: 'left', hidden: false},
			{name: 'NguoiTao', index: 'NguoiTao', search: true, width: "10%", editable: false, align: 'left', hidden: false},
			{name: 'NgayTao', index: 'NgayTao', search: true, width: "10%", editable: false, align: 'left', hidden: false,sorttype:'date'},
			{name: 'NguoiDuyet', index: 'NguoiDuyet', search: true, width: "10%", editable: false, align: 'left', hidden: true},
			{name: 'NgayDuyet', index: 'NgayDuyet', search: true, width: "10%", editable: false, align: 'left', hidden: true,sorttype:'date'},
			{name: 'ID_Khoa', index: 'ID_Khoa', search: true, width: "10%", editable: false, align: 'left', hidden: true,sorttype:'date'},
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
			window.idxuatnoibo=id;
			window.inphieuid=id;
			var dataRow = jQuery('#rowed3').jqGrid ('getRowData', id);
			if(dataRow['NguoiDuyet']==''){
				$("#rowed3_duyet").removeClass('ui-state-disabled');
			}else{
				$("#rowed3_duyet").addClass('ui-state-disabled');
			}
			$("#rowed5").jqGrid('setGridParam',{datatype: 'json',url:"resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_danhsach_phieuxuatnoibochitiet&id_phieuxuatnoibo="+id}).trigger('reloadGrid');
		},
		ondblClickRow: function(rowId, rowIndex, columnIndex) {
			var dataRow = jQuery('#rowed3').jqGrid ('getRowData', rowId);
			parent.postMessage('open_idluotkham;phieu_xuat_noibo;;;;;&idphieu='+rowId+'&idphongban='+dataRow['ID_Khoa'],'*');
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
		},
		caption: "Ds phiếu xuất nội bộ (Chưa duyệt)"
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
}

function create_grid2(){
	$("#rowed4").jqGrid({
		url:'',
		datatype: "json",
		colNames: ['Số phiếu','Khoa','Người tạo','Ngày tạo','Người duyệt','Ngày duyệt'],
		colModel: [
			{name: 'SoPhieu', index: 'SoPhieu', search: true, width: "7%", editable: false, align: 'left', hidden: false},
			{name: 'Khoa', index: 'Khoa', search: true, width: "20%", editable: false, align: 'left', hidden: false},
			{name: 'NguoiTao', index: 'NguoiTao', search: true, width: "7%", editable: false, align: 'left', hidden: false},
			{name: 'NgayTao', index: 'NgayTao', search: true, width: "7%", editable: false, align: 'left', hidden: false,sorttype:'date'},
			{name: 'NguoiDuyet', index: 'NguoiDuyet', search: true, width: "7%", editable: false, align: 'left', hidden: false},
			{name: 'NgayDuyet', index: 'NgayDuyet', search: true, width: "7%", editable: false, align: 'left', hidden: false,sorttype:'date'},
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
		window.inphieuid=id;
			
		$("#rowed5").jqGrid('setGridParam',{datatype: 'json',url:"resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_danhsach_phieuxuatnoibochitiet&id_phieuxuatnoibo="+id}).trigger('reloadGrid');
		},
		ondblClickRow: function(rowId, rowIndex, columnIndex) {
		
		},
		onselect: function(rowId, rowIndex, columnIndex) {
			
		},
		loadComplete: function(data) {
			grid_filter_enter("#rowed4");
			/*if(window.daduyetnhap==1){
				$("#rowed4").jqGrid('setSelection',window.idnhapkho)		
			}else{
				ids = $('#rowed4').jqGrid('getDataIDs');
				$("#rowed4").jqGrid('setSelection',ids[0])	
			}	*/			 
		},
		caption: "Ds phiếu xuất nội bộ (Đã duyệt)"
	});
	$("#rowed4").jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false,defaultSearch:"bw"});
	$("#rowed4").jqGrid('navGrid',"#prowed3",{add: false, edit: false, del: false, search: false,closeAfterEdit: true,clearAfterAdd :true,closeOnEscape : true });
	
	$("#rowed3").jqGrid('bindKeys', {});
	/*$("#tungay").datepicker({
		changeMonth: true,
		changeYear: true,
		dateFormat: $.cookie("ngayJqueryUi")
	});
	$("#denngay").datepicker({
		changeMonth: true,
		changeYear: true,
		dateFormat: $.cookie("ngayJqueryUi")
	});*/
}

function create_grid3() {
      mydata=[];
        $("#rowed5").jqGrid({
            data: mydata,
            datatype: "local",
            colNames: ['Tên gốc','ĐVT', 'Số lượng'],
            colModel: [
                {name: 'TenGoc', index: 'TenGoc', search: true, width: "20%", editable: false, align: 'left', hidden: false,classes:'r3_mabenhnhan'},
				{name: 'DonViTinh', index: 'DonViTinh', search: true, width: "10%", editable: false, align: 'left', hidden: false},
				{name: 'SoLuong', index: 'SoLuong', search: true, width: "10%", editable: false, align: 'left', hidden: false},
				
            ],
           loadonce: true,
            scroll: 1,
            modal: true,
            rowNum: 3000,
            rowList: [30, 50, 70],
            pager: '#prowed5',
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
            caption: "Chi tiết thuốc xuất nội bộ"
        });
		$("#rowed5").jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false,defaultSearch:"bw"});
		$("#rowed5").jqGrid('bindKeys', {});
    }	

function resize_control() {
	$("#rowed3").setGridWidth($(".n_tren").width()-10);
	$("#rowed3").setGridHeight($(".n_tren").height()-113);
	$("#rowed4").setGridWidth($(".n_duoi").width()-10);
	$("#rowed4").setGridHeight($(".n_duoi").height()-130);
	$("#rowed5").setGridWidth($(".right_col").width()-10);
	$("#rowed5").setGridHeight($(".right_col").height()-85);
}
</script>



