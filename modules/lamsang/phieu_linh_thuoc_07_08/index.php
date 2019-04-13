<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style>
	#n_bottom{
		height:35px;
		border-radius:4px;
		border:1px solid #ccc;
		margin-left:5px;
		margin-right:5px;
		text-align:right;
		padding-top:5px;
		padding-right:5px;
	}
	#i_themmoi,#i_sua{
		border:none !important;
	}
</style>
</head>
<body>
<div id="dialog_themmoi" title="Thêm mới" style="display:none">
 <iframe id="i_themmoi" src="" width="100%" height="100%"></iframe>
</div>
<div id="dialog_sua" title="Sửa" style="display:none">
 <iframe id="i_sua" src="" width="100%" height="100%"></iframe>
</div>
    <div id="main_content">
    	<div class="ui-layout-north n_tren"> 
            <table id="rowed3" ></table>
        </div>
        <div class="ui-layout-center n_duoi"> 
            <div class="left_col ui-widget-content ui-layout-center left_col">
             <table id="rowed4" ></table>
            </div>
            <div class="ui-layout-east ui-widget-content right_col"> 
            <table id="rowed5" ></table>
            </div>
        </div>
    </div>
    <div id="n_bottom">
    	<button id="themmoi">Thêm mới</button>
        <button id="sua">Sửa</button>
        <button id="timkiem">Tìm kiếm</button>
        <button id="inphieulinh">In phiếu lĩnh</button>
        <button id="inphieutonghopylenh">In phiếu tổng hợp y lệnh</button>
    </div>
</body>
<script type="text/javascript">
var report_code=["PhieuLinhThuoc"];
var report_name=["Phiếu lĩnh thuốc"];
$(document).ready(function(e) {
	openform_shortcutkey();
	window.n_sua=false;
	window.n_idkhoa=<?=$_GET['idkhoa']?>;
	parent.postMessage('changetitle;<?=$view?>-tab;Phiếu lĩnh thuốc - <?=$_GET['tenkhoa']?>;', '*');
	
	var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
	var eventer = window[eventMethod];
	var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
	eventer(messageEvent,function(e) { 
	tam=e.data;
	if(tam=='dongdialog'){
		$("#dialog_themmoi").dialog('close');
		$("#rowed3").jqGrid('setGridParam',{datatype: 'json',url:"resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_danhsach_phieulinhthuoc&idkhoa="+window.n_idkhoa+"&tungay="+$("#tungay").val()+"&denngay="+$("#denngay").val()}).trigger('reloadGrid');
	}
	if(tam=='dongdialogsua'){
		$("#dialog_sua").dialog('close');
		$("#rowed3").jqGrid('setGridParam',{datatype: 'json',url:"resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_danhsach_phieulinhthuoc&idkhoa="+window.n_idkhoa+"&tungay="+$("#tungay").val()+"&denngay="+$("#denngay").val()}).trigger('reloadGrid');
	}
	});
	$("#inphieulinh").click(function(e) {
        $.cookie("in_status", "print_preview");
		dialog_report("Xem trước khi in",90,90,"u78787878975f","resource.php?module=report&view=<?=$modules?>&action=phieulinhthuoc_vattuyte&idphieulinh="+window.idphieulinh+"&idphanloai="+window.idphanloai+"&type=report&id_form=10",'PhieuLinhThuoc');
    });
	
	
	$("#themmoi,#sua,#timkiem,#inphieulinh,#inphieutonghopylenh,#xem").button();
	$("#sua,#inphieulinh").button('disable');
	$("#main_content").css("height",$(window).height()-45+"px");			 
	$("#main_content").fadeIn(1000); 
    create_layout();
	create_layout2();
	create_grid();
	create_grid2();
	create_grid3();
	resize_control();
	$("#themmoi").click(function(e) {
		them();	
    });
	$("#sua").click(function(e) {
		//alert(window.idphieulinh)
		window.n_sua=true;
		sua();	
    });
	$("#xem").click(function(e) {
        $("#rowed3").jqGrid('setGridParam',{datatype: 'json',url:"resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_danhsach_phieulinhthuoc&idkhoa="+window.n_idkhoa+"&tungay="+$("#tungay").val()+"&denngay="+$("#denngay").val()}).trigger('reloadGrid');
    });
	
	phanquyen();
	
});
$(window).resize(function() {
	
	$("#main_content").css("height",$(window).height()-45+"px");			 
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
function create_grid() {
        $("#rowed3").jqGrid({
             url: 'resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_danhsach_phieulinhthuoc&idkhoa='+window.n_idkhoa+'&tungay='+$('#tungay').val()+'&denngay='+$('#denngay').val(),
   			datatype: "json",
            colNames: ['Mã phiếu','Người tạo','Ngày tạo','Người lĩnh','Ngày lĩnh', 'Mã khoa', 'Tên khoa', 'Mã đối tượng', 'Đã lĩnh'],
            colModel: [
                {name: 'SoPhieu', index: 'SoPhieu', search: true, width: "5%", editable: false, align: 'left', hidden: false,classes:'r3_mabenhnhan'},
				{name: 'NguoiTao', index: 'NguoiTao', search: true, width: "10%", editable: false, align: 'center', hidden: false},
				{name: 'NgayTao', index: 'NgayTao', search: true, width: "10%", editable: false, align: 'center', hidden: false},
				{name: 'NguoiLinh', index: 'NguoiLinh', search: true, width: "10%", editable: false, align: 'center', hidden: false},
				{name: 'NgayLinh', index: 'NgayLinh', search: true, width: "10%", editable: false, align: 'center', hidden: false},
				{name: 'MaKhoa', index: 'MaKhoa', search: true, width: "10%", editable: false, align: 'left', hidden: false},
				{name: 'TenKhoa', index: 'TenKhoa', search: true, width: "20%", editable: false, align: 'left', hidden: false},
				{name: 'MaDoiTuong', index: 'MaDoiTuong', search: true, width: "10%", editable: false, align: 'left', hidden: false},
				{name:'Dalinh',index:'Dalinh', width:"5%", editable:true,stype: 'text',search:false,searchoptions: { sopt: ['eq', 'ne'],value:':;1:Có;0:Không'}, editable:true,align:'center',hidden:false,edittype:"checkbox",formatter:"checkbox",formatoptions:{disabled: true},formoptions:{ rowpos:13, colpos:1}
			,editoptions: { value:"1:0",dataEvents:  [{ type: 'click', fn: function(e) { 
				//alert($("#"+$(e.target).attr('id')).is(':checked'));

				if($("#"+$(e.target).attr('id')).is(':checked')){
   					var tthai=1;
   				}
				else{
  					var tthai=0;
  				}
				var row = $(e.target).closest('tr.jqgrow');
                var tam = row.attr('id');
               rowId= $('#rowed3').getCell(tam, 'id');
/*                window.selectedVal = "";
				window.selected = $("input[type='radio'][name='action']:checked");
				if (selected.length > 0) {
					window.selectedVal = selected.val();
				}*/

                 } }]}}, 
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
				var rowData = jQuery('#rowed3').jqGrid ('getRowData',id);
				if(rowData['Dalinh']==0){
					$("#sua").button('enable');
					}else{
						$("#sua").button('disable');
					}
			$("#inphieulinh").button('enable');
			window.idphieulinh=id;
			$("#rowed4").jqGrid('setGridParam',{datatype: 'json',url:"resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_danhsach_phieulinhthuoc_chitiet&idphieulinhthuoc="+window.idphieulinh+"&idphanloai="+window.idphanloai}).trigger('reloadGrid');
            },
            ondblClickRow: function(rowId, rowIndex, columnIndex) {
            
            },
            onselect: function(rowId, rowIndex, columnIndex) {
				
            },
            loadComplete: function(data) {
				grid_filter_enter("#rowed3");
				ids = $('#rowed3').jqGrid('getDataIDs');	
					if(window.n_sua==true){
						var s=0;
						for(var i=0;i<ids.length;i++){
							//alert(ids[i]+'=='+window.idphieulinh)
							if(ids[i]==window.idphieulinh){
								$("#rowed3").jqGrid("setSelection",ids[i], true);
								window.n_sua=false;
								s=1;	
							}else if(i==ids.length-1 && s==0){
								$("#rowed3").jqGrid("setSelection",ids[0], true);
								window.n_sua=false;
							}
						}
					}else{
						$("#rowed3").jqGrid("setSelection",ids[0], true);
						window.n_sua=false;
					}
			
			create_combobox_new('#phanloai',create_phanloai,'bw','','data_phanloai');
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
			$("#xem").button();
						 
			},
            caption: "Phiếu lĩnh thuốc chi tiết <span style='margin-left:50px'>- Phân loại: <input type='text' id='phanloai' style='width: 105px;'/><span style='margin-left:40px'>- Từ ngày: <input type='text' id='tungay' style='width: 65px; text-align:center'  value='<?php echo date("d/m/".$_SESSION["config_system"]["namUI"])?>'/> Đến ngày: <input type='text' id='denngay' style='width: 65px;text-align:center' value='<?php echo date("d/m/".$_SESSION["config_system"]["namUI"])?>'/><button id='xem' style='margin-left:5px;0.2em 1em !important; height:25px'>Xem</button></span></span>"
        });
		$("#rowed3").jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false,defaultSearch:"cn"});
		$("#rowed3").jqGrid('bindKeys', {});
		create_combobox_new('#phanloai',create_phanloai,'bw','','data_phanloai');
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
			$("#xem").button();
}

function create_grid2() {
      mydata=[];
        $("#rowed4").jqGrid({
            data: mydata,
            datatype: "local",
            colNames: ['ID đơn thuốc','Ngày kê đơn', 'Họ tên bệnh nhân', 'Tuổi', 'Địa chỉ', 'Số buồng', 'Số giường'],
            colModel: [
                {name: 'ID_DonThuoc', index: 'ID_DonThuoc', search: true, width: "8%", editable: false, align: 'left', hidden: false,classes:'r3_mabenhnhan'},
				{name: 'NgayKeDon', index: 'NgayKeDon', search: true, width: "10%", editable: false, align: 'left', hidden: false},
				{name: 'HoTen', index: 'HoTen', search: true, width: "25%", editable: false, align: 'left', hidden: false},
				{name: 'Tuoi', index: 'Tuoi', search: true, width: "5%", editable: false, align: 'center', hidden: false},
				{name: 'DiaChi', index: 'DiaChi', search: true, width: "27%", editable: false, align: 'left', hidden: true},
				{name: 'SoBuong', index: 'SoBuong', search: true, width: "10%", editable: false, align: 'left', hidden: false},
				{name: 'SoGiuong', index: 'SoGiuong', search: true, width: "10%", editable: false, align: 'left', hidden: false},
				
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
				var rowData = jQuery('#rowed4').getRowData(id);
				$("#hotenbenhnhan").html(rowData['HoTen']);
				$("#rowed5").jqGrid('setGridParam',{datatype: 'json',url:"resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_chitietthuocbyid_donthuoc&idphieulinhthuoc="+id+'&nhomphanloai='+$("#phanloai_hidden").val()}).trigger('reloadGrid');
            },
            ondblClickRow: function(rowId, rowIndex, columnIndex) {
            
            },
            onselect: function(rowId, rowIndex, columnIndex) {
				
            },
            loadComplete: function(data) {
			var ids = $('#rowed4').jqGrid('getDataIDs');				 
			$("#rowed4").jqGrid("setSelection",ids[0], true);
						 
			},
            caption: "Chi tiết phiếu lĩnh"
        });
		$("#rowed4").jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false,defaultSearch:"cn"});
		$("#rowed4").jqGrid('bindKeys', {});
    }
function create_grid3(){
      mydata=[];
        $("#rowed5").jqGrid({
            data: mydata,
            datatype: "local",
            colNames: ['Mã thuốc','Tên thuốc','ĐVT', 'Số lượng'],
            colModel: [
				{name: 'MaThuoc', index: 'MaThuoc', search: true, width: "10%", editable: false, align: 'left', hidden: false},
				{name: 'TenThuoc', index: 'TenThuoc', search: true, width: "20%", editable: false, align: 'left', hidden: false},
				{name: 'DonViTinh', index: 'DonViTinh', search: true, width: "10%", editable: false, align: 'center', hidden: false},
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
            caption: "Chi tiết đơn thuốc của bệnh nhân : <span id='hotenbenhnhan'> </span>"
        });
		/*$("#rowed5").jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false,defaultSearch:"cn"});
		$("#rowed5").jqGrid('bindKeys', {});*/
		setTimeout(function(){
			$("#xem").click();
		},500);
    }
 
function them(){
	links='resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=formthemmoi&type=test&id_form=<?=$_GET["id_form"]?>&tenkhoa=<?=$_GET["tenkhoa"]?>&idkhoa='+window.n_idkhoa+'&ac=add';
	$("#i_themmoi").attr('src',links);
	$( "#dialog_themmoi" ).dialog({
      resizable: false,
      height:$("body").height()-10,
	  width:$("body").width()-10, 
      modal: true,
    }); 
}
function sua(){

	links='resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=formsua&type=test&id_form=<?=$_GET["id_form"]?>&tenkhoa=<?=$_GET["tenkhoa"]?>&idkhoa='+window.n_idkhoa+'&idphieulinh='+window.idphieulinh+'&ac=edit';
	$("#i_sua").attr('src',links);
	$( "#dialog_sua" ).dialog({
      resizable: false,
      height:$("body").height()-10,
	  width:$("body").width()-10, 
      modal: true,
    }); 
}
function callback(){
	
}

function create_phanloai(elem, datalocal) {
        datalocal = jQuery.parseJSON(datalocal);
        $(elem).jqGrid({
            datastr: datalocal,
            datatype: "jsonstring",
            colNames: ['Phân loại'],
            colModel: [
                {name: 'phanloai', index: 'phanloai', hidden: false,width:5},
            ],
            hidegrid: false,
            gridview: true,
            loadonce: true,
            scroll: 1,
            modal: true,
            rowNum: 100,
            rowList: [],
            height: 300,
            width: 300,
            viewrecords: true,
            ignoreCase: true,
            shrinkToFit: true,
            cmTemplate: {sortable: false},
            sortorder: "desc",
            serializeRowData: function(postdata) {
            },
            onSelectRow: function(id) {
		 	window.idphanloai=id;
			//setTimeout(function(){
			//$("#rowed4").jqGrid('setGridParam',{datatype: 'json',url:"resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_danhsach_phieulinhthuoc_chitiet&idphieulinhthuoc="+window.idphieulinh+"&idphanloai="+window.idphanloai}).trigger('reloadGrid');
			//},100);
            },
            ondblClickRow: function(id, rowIndex, columnIndex) {
            },
            loadComplete: function(data) {
            },
        });
        $(elem).jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});
        $(elem).jqGrid('bindKeys', {});
    }
 function create_layout2() {
        $('.n_duoi').layout({
            resizerClass: 'ui-state-default'
                    , east: {
                resizable: true
                        , size: "50%"
                        , spacing_closed: 27
                        , togglerLength_closed: 85
                        , togglerAlign_closed: "center"
                        , togglerContent_closed: "<div id='menu_toggle'>M<br>o</div>"
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
                        , size: "50%"

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
function resize_control(){
	$("#rowed3").setGridWidth($("#main_content").width()-11);
	$("#rowed3").setGridHeight($(".n_tren").height()-93);
	$("#rowed4").setGridWidth($(".left_col").width()-11);
	$("#rowed4").setGridHeight($(".n_duoi").height()-86);
	$("#rowed5").setGridWidth($(".right_col").width()-11);
	$("#rowed5").setGridHeight($(".n_duoi").height()-63);
}

</script>
</html>

