<style>
#panel_main{
	display:block !important;
}
#formmoi,#formhoantra,#form_xem_linh{
	border:none !important;
}
#xuat_chonngay,#tra_chonngay{
	margin-left:30px;
	display:none;
}
#xuat_chonngay input,#tra_chonngay input{
	width:80px;
	height:12px;
	text-align:center;
}
button span.ui-button-text{
	padding:0.3em 1em !important;
}
.ui-jqgrid-titlebar{
	height:27px;
}
#tabs{
	margin-top:0px;
}
#xuat_in,#xuat_xem,#tra_xem,#mo_phieu,#tailai,#tra_tailai{
	height:24px;
}
.grid1{
	position:absolute;
	top:5px;
	left:265px;
}
.chuachot{
	background:#FF6347;
}
</style>
<body> 
<div id="dialog-mochot" title="Thông báo" style="display:none">
  <p><span class="ui-icon ui-icon-alert" style="float:left; margin:0 7px 20px 0;"></span>Bạn chắc chắn muốn mở chốt phiếu này</p>
</div>
<div id="dialog-chuachot" title="Thông báo" style="display:none">
  <p><span class="ui-icon ui-icon-alert" style="float:left; margin:0 7px 20px 0;"></span>Phiếu lĩnh này chưa chốt</p>
</div>
<div id="dialog_linh" title="Xuất thuốc" style="display:none">
 	<iframe id="formmoi" src=""  width="100%" height="100%"> </iframe>
</div>
<div id="dialog_xem_linh" style="display:none">
 	<iframe id="form_xem_linh" src=""  width="100%" height="100%"> </iframe>
</div>
<div id="dialog_tra" title="Trả thuốc" style="display:none">
 	<iframe id="formhoantra" src=""  width="100%" height="100%"> </iframe>
</div>
<div id="panel_main" >        
  	<div id="tabs">
        <ul style="margin-left:10px;">
            <li><a href="#tabs-1" >Cấp phát thuốc</a></li>
            <li><a href="#tabs-2" >Hoàn trả thuốc</a></li>
        </ul>
        <div id="tabs-1">
            <table id="rowed3">
            </table>
            <div id="prowed3"></div>
        </div><!-- AND tabs-1-->
        <div id="tabs-2">
       		<table id="rowed4">
            </table>
            <div id="prowed4"></div>
        </div><!-- AND tabs-2-->
    </div>
</div>

    
</body>
</html> 
<script type="text/javascript">
    jQuery(document).ready(function() {
		openform_shortcutkey();	
		window.n_action_linh=1;
		$("#panel_main").css("height",$(window).height()+"px");			 
		$("#panel_main").fadeIn(1000);
		var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
		var eventer = window[eventMethod];
		var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
		eventer(messageEvent,function(e) { 
			tam=e.data;
			if(tam=='dongdialog'){
				$("#dialog_linh").dialog('close');
				$("#dalinh").click();
				tooltip_message("Lưu thành công");
				chualinh();
			}
			if(tam=='dongdialogtra'){
				$("#dialog_tra").dialog('close');
				$("#datra").click();
				tooltip_message("Lưu thành công");
				chuatra();
			}
		});
		
	   create_grid(); 
	   create_grid2(); 
		$("#rowed3").setGridWidth($("#panel_main").width()-30);
		$("#rowed3").setGridHeight($("#panel_main").height()-150);
		$("#rowed4").setGridWidth($("#panel_main").width()-30);
		$("#rowed4").setGridHeight($("#panel_main").height()-150);
		$(function() {
		$( "#dialog-chuachot" ).dialog({
		  resizable: false,
		  autoOpen:false,
		  height:160,
		  modal: true,
		  buttons: {
			"Ok": function() {
			  $( this ).dialog( "close" );
			}
		  }
		});
	  });
	  $(function() {
		$( "#dialog-mochot" ).dialog({
		  resizable: false,
		  autoOpen:false,
		  height:160,
		  modal: true,
		  buttons: {
			"YES": function() {
				 $.post('resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=huychot&id_phieu='+window.idphieulinh).done(function(data){
					chualinh();
				 });
			  $( this ).dialog( "close" );
			},"NO": function() {
			  $( this ).dialog( "close" );
			}
		  }
		});
	  });
		$("#dalinh").click(function(e) {
			if($("#dalinh").is(":checked")){
				$("#chualinh").prop('checked',false);
				dalinh();
			}else{
				$("#chualinh").prop('checked',true);
				chualinh();
			}
		});
		
		$("#chualinh").click(function(e) {
			if($("#chualinh").is(":checked")){
				$("#dalinh").prop('checked',false);
				chualinh();
			}else{
				$("#dalinh").prop('checked',true);	
				dalinh();
			}
		});
		
		$("#datra").click(function(e) {
			if($("#datra").is(":checked")){
				$("#chuatra").prop('checked',false);
				datra();
			}else{
				$("#chuatra").prop('checked',true);
				chuatra();
			}
		});
		
		$("#chuatra").click(function(e) {
			if($("#chuatra").is(":checked")){
				$("#datra").prop('checked',false);
				chuatra();
			}else{
				$("#datra").prop('checked',true);	
				datra();
			}
		});
		
	$("#xuat_in").click(function(e) {
		 $.cookie("in_status", "print_preview");
		var rowData = jQuery('#rowed3').jqGrid ('getRowData',window.idphieulinh);
		dialog_report("Xem trước khi in",90,90,"u78787878975f","resource.php?module=report&view=lamsang&action=phieulinhthuoc_vattuyte&idphieulinh="+window.idphieulinh+"&idphanloai="+window.idphanloai+"&thuocthongthuong="+rowData['ThuocThongThuong']+"&vattuyte="+rowData['VatTuYTe']+"&thuochuongthan="+rowData['ThuocHuongThan']+"&type=report&id_form=10",'PhieuLinhThuoc');
	});
	$("#mo_phieu").click(function(e) {
		$( "#dialog-mochot" ).dialog('open');
    });
	$("#tailai").click(function(e) {
		chualinh();
	});
	$("#tra_tailai").click(function(e) {
		chuatra();
	});
	
	//tra_tailai
	$("#mo_phieu").button();
	$("#mo_phieu").button('disable');	
	phanquyen();
	$("#xuat_xem,#tra_xem,#xuat_in,#mo_phieu,#tailai,#tra_tailai").button();
	
	$("#xuat_in").button('disable');
})//and ready
	$(function() {
    $( "#tabs" ).tabs();
  });
$(window).resize(function() {		 
	$("#panel_main").css("height",$(window).height()+"px");			 
	$("#panel_main").fadeIn(1000); 
	$("#rowed3").setGridWidth($("#panel_main").width()-30);
	$("#rowed3").setGridHeight($("#panel_main").height()-150);
	$("#rowed4").setGridWidth($("#panel_main").width()-30);
	$("#rowed4").setGridHeight($("#panel_main").height()-150);
});

function create_grid(){
		$("#rowed3").jqGrid({
		url: 'resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_danhsach_chualinh',
        datatype: "json",
		colNames:['Số phiếu lĩnh','Khoa','Người tạo phiếu lĩnh','Ngày giờ tạo','Người lĩnh','Ngày đề nghị','Ngày xuất','Loại phiếu lĩnh','Đối tượng','ID nhóm phân loại thuốc','DaLinh','','','',''],
		colModel:[
			{name:'SoPhieuLinh',index:'SoPhieuLinh',search:true, width:"10%", editable:false,align:'left',edittype:"text",hidden:false},
			{name:'Khoa',index:'Khoa',search:true, width:"25%", editable:false,align:'left',edittype:"text",hidden:false},		
			{name:'NguoiTao',index:'NguoiTao',search:true, width:"25%", editable:false,align:'left',edittype:"text",hidden:false},
			{name:'NgayTao',index:'NgayTao',search:true, width:"15%", editable:true,align:'center',edittype:"text",hidden:false},
			{name:'NguoiLinh',index:'NguoiLinh',search:true, width:"25%", editable:false,align:'left',edittype:"text",hidden:false},
			{name:'NgayDeNghi',index:'NgayDeNghi',search:true, width:"15%", editable:true,align:'center',edittype:"text",hidden:false},
			{name:'NgayXuat',index:'NgayXuat',search:true, width:"15%", editable:true,align:'center',edittype:"text",hidden:false},
			{name:'LoaiPhieuLinh',index:'LoaiPhieuLinh',search:true, width:"20%", editable:false,align:'left',edittype:"text",hidden:false},
			{name:'DoiTuong',index:'DoiTuong',search:true, width:"10%", editable:false,align:'left',edittype:"text",hidden:false}, 
			{name:'ID_NhomPhanLoaiThuoc',index:'ID_NhomPhanLoaiThuoc',search:true, width:"5%", editable:false,align:'left',edittype:"text",hidden:true}, 
			{name:'DaLinh',index:'DaLinh',search:true, width:"5%", editable:false,align:'left',edittype:"text",hidden:true}, 	
			{name: 'ThuocThongThuong', index: 'ThuocThongThuong', search: true, width: "10%", editable: false, align: 'left', hidden: true},
			{name: 'VatTuYTe', index: 'VatTuYTe', search: true, width: "10%", editable: false, align: 'left', hidden: true},
			{name: 'ThuocHuongThan', index: 'ThuocHuongThan', search: true, width: "10%", editable: false, align: 'left', hidden: true},
			{name: 'ChotPhieu', index: 'ChotPhieu', search: true, width: "5%", editable: false, align: 'left', hidden: true},		
		],
		loadonce: true,
		scroll: false,		 
		modal:true,	 	 
		rowNum: 1000000, 
		rowList: [], // disable page size dropdown
        pgbuttons: false, // disable page control like next, back button
        pgtext: null, // disable pager text like 'Page 0 of 10'
		pager: null,
		sortname: 'Khoa',
		height:100,
		width: 100,
		viewrecords: true,	
		ignoreCase:true,
		shrinkToFit:true,
		hidegrid:false,
		sortorder: "desc",
		serializeRowData: function (postdata) { 		 	
		
		},
		onSelectRow: function(id) {
			window.idphieulinh=id;
			var rowData_in = jQuery('#rowed3').jqGrid ('getRowData', id); //mo_phieu
			$.post('resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=checkchot&id_phieu='+id).done(function(data){
				if(data=='true'){
					$("#xuat_in").button('enable');	
					$("#mo_phieu").button('enable');	
					$("#xuat_in span.ui-button-text").html('In phiếu lĩnh số '+rowData_in['SoPhieuLinh']);
					$("#mo_phieu span.ui-button-text").html('Hủy chốt phiếu số '+rowData_in['SoPhieuLinh']);
				}else{
					$("#xuat_in").button('disable');
					$("#mo_phieu").button('disable');	
					$("#xuat_in span.ui-button-text").html('In phiếu lĩnh');
				}
			});
			
		},
		ondblClickRow: function (rowId, rowIndex, columnIndex) {
			  var rowData = jQuery('#rowed3').jqGrid ('getRowData', rowId);
			  if(rowData['DaLinh']==0){
				  $.post('resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=checkchot&id_phieu='+rowId).done(function(data){
					if(data=='true'){
							$("#formmoi").attr('src','resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=form_chi_tiet&type=test&id_form=<?=$_GET["id_form"]?>&id_phieulinh='+rowId+'&sophieu='+rowData['SoPhieuLinh']+'&id_phanloaithuoc='+rowData['ID_NhomPhanLoaiThuoc']+'&doituong='+rowData['DoiTuong']+'&nguoilinh='+rowData['NguoiLinh']);
							$( "#dialog_linh" ).dialog({
							  title:'Xuất thuốc '+rowData['Khoa']+' - Số phiếu lĩnh: '+rowData['SoPhieuLinh'],
							  resizable: false,
							  height:$(window).height()-10,
							  width:$(window).width()-10,
							  modal: true,
							  open: function() {
								//  $(".ui-dialog-title").html('Xuất thuốc '+rowData['Khoa']+' - Số phiếu lĩnh: '+rowData['SoPhieuLinh']);
								}
							});
					}else{
						$( "#dialog-chuachot" ).dialog('open');
					}
				  });
			  }else{//dialog_xem_linh
				  $("#form_xem_linh").attr('src','resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=form_chi_tiet_daxuat&type=test&id_form=<?=$_GET["id_form"]?>&id_phieulinh='+rowId+'&sophieu='+rowData['SoPhieuLinh']+'&id_phanloaithuoc='+rowData['ID_NhomPhanLoaiThuoc']+'&doituong='+rowData['DoiTuong']+'&nguoilinh='+rowData['NguoiLinh']);
				$( "#dialog_xem_linh" ).dialog({
					title:'Thuốc đã xuất '+rowData['Khoa']+' - Người lĩnh: '+rowData['NguoiLinh']+' - Ngày xuất: '+rowData['NgayXuat'],
				  resizable: false,
				  height:$(window).height()-10,
				  width:$(window).width()-10,
				  modal: true,
				  open: function() {
					 // $(".ui-dialog-title").html('Thuốc đã xuất '+rowData['Khoa']+' - Người lĩnh: '+rowData['NguoiLinh']+' - Ngày xuất: '+rowData['NgayXuat']);
					}
				});
			  }
			//  $(".ui-dialog-title").html('Thuốc đã xuất '+rowData['Khoa']+' - Người lĩnh: '+rowData['NguoiLinh']+' - Ngày xuất: '+rowData['NgayXuat']);
 		},
		loadComplete: function(data) {	
			//alert(window.n_action_linh);
			if(window.n_action_linh==1){
				var tmp1 = $("#rowed3").jqGrid('getDataIDs'); 
				for(var i=0;i < tmp1.length;i++){
					var rowData = $("#rowed3").getRowData(tmp1[i]);	
					if(rowData["ChotPhieu"]!=1){
						jQuery("#rowed3").jqGrid('setCell', tmp1[i], 'SoPhieuLinh', '', {'background': '#FF6347'});
					}
				}
			}
		},	  
		caption: 'Danh sách cấp phát thuốc bệnh nhân nội trú <div class="grid1 "><div class="hinhvuong chuachot"></div><label class="diengiai">Chưa chốt</label></div><span style="margin-left:115px"><input type="checkbox" id="chualinh"  checked="checked" /><label for="chualinh">Chưa lĩnh</label>  <input type="checkbox" id="dalinh"  /><label for="dalinh"> Đã lĩnh</label></span> <span id="xuat_chonngay">Từ ngày: <input type="text" id="xuat_tungay" value="<?php echo date("d/m/".$_SESSION["config_system"]["namUI"])?>" >  Đến ngày: <input type="text" id="xuat_denngay" value="<?php echo date("d/m/".$_SESSION["config_system"]["namUI"])?>">  <span style="margin-left:10px"><button id="xuat_xem">Xem</button></span></span> <span ><button id="tailai" style="margin-left:10px">Tải lại dữ liệu</button><button id="mo_phieu" style="margin-left:10px">Hủy chốt</button></span><span style="margin-left:10px"><button id="xuat_in">In phiếu lĩnh</button></span> '
	});	
	  $("#rowed3").jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false,defaultSearch:"cn"});
	  $("#rowed3").jqGrid('navGrid', "#prowed3", {add: false, edit: false, del: false, search: true, refresh: true, closeAfterEdit: true, clearAfterAdd: true, navkeys: [true, 38, 40], closeOnEscape: true});
	$("#rowed3").jqGrid('bindKeys', {});
	$("#xuat_tungay").datepicker({
		changeMonth: true,
		changeYear: true,
		dateFormat: $.cookie("ngayJqueryUi")
	});
	$("#xuat_denngay").datepicker({
		changeMonth: true,
		changeYear: true,
		dateFormat: $.cookie("ngayJqueryUi")
	});
	$("#xuat_xem").click(function(e) {
         dalinh();
    });
}

function create_grid2(){
		$("#rowed4").jqGrid({
		url: 'resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_danhsach_chuatra',
        datatype: "json",
		colNames:['Số phiếu trả','Khoa','Người tạo phiếu trả','Ngày giờ tạo','Người trả','Ngày đề nghị','Ngày nhập','Loại phiếu trả','Đối tượng','ID nhóm phân loại thuốc','DaLinh'],
		colModel:[
			{name:'SoPhieuTra',index:'SoPhieuTra',search:true, width:"10%", editable:false,align:'left',edittype:"text",hidden:false},
			{name:'Khoa',index:'Khoa',search:true, width:"25%", editable:false,align:'left',edittype:"text",hidden:false},		
			{name:'NguoiTao',index:'NguoiTao',search:true, width:"25%", editable:false,align:'left',edittype:"text",hidden:false},
			{name:'NgayTao',index:'NgayTao',search:true, width:"15%", editable:true,align:'center',edittype:"text",hidden:false},
			{name:'NguoiTra',index:'NguoiTra',search:true, width:"25%", editable:false,align:'left',edittype:"text",hidden:false},
			{name:'NgayDeNghi',index:'NgayDeNghi',search:true, width:"15%", editable:true,align:'center',edittype:"text",hidden:false},
			{name:'NgayNhap',index:'NgayNhap',search:true, width:"15%", editable:true,align:'center',edittype:"text",hidden:false},
			{name:'LoaiPhieuTra',index:'LoaiPhieuTra',search:true, width:"20%", editable:false,align:'left',edittype:"text",hidden:false},
			{name:'DoiTuong',index:'DoiTuong',search:true, width:"10%", editable:false,align:'left',edittype:"text",hidden:false}, 
			{name:'ID_NhomPhanLoaiThuoc',index:'ID_NhomPhanLoaiThuoc',search:true, width:"5%", editable:false,align:'left',edittype:"text",hidden:true}, 
			{name:'DaTra',index:'DaTra',search:true, width:"5%", editable:false,align:'left',edittype:"text",hidden:true}, 			
		],
		loadonce: true,
		scroll: false,		 
		modal:true,	 	 
		rowNum: 1000000, 
		rowList: [], // disable page size dropdown
        pgbuttons: false, // disable page control like next, back button
        pgtext: null, // disable pager text like 'Page 0 of 10'
		pager: null,
		sortname: 'Khoa',
		height:100,
		width: 100,
		viewrecords: true,	
		ignoreCase:true,
		shrinkToFit:true,
		hidegrid:false,
		sortorder: "desc",
		serializeRowData: function (postdata) { 		 	
		
		},
		onSelectRow: function(id) {

		},
		ondblClickRow: function (rowId, rowIndex, columnIndex) {
			  var rowData = jQuery('#rowed4').jqGrid ('getRowData', rowId);
			  if(rowData['DaTra']==0){
				$("#formhoantra").attr('src','resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=form_chi_tiet_tra&type=test&id_form=<?=$_GET["id_form"]?>&id_phieutra='+rowId+'&sophieu='+rowData['SoPhieuTra']+'&id_phanloaithuoc='+rowData['ID_NhomPhanLoaiThuoc']+'&doituong='+rowData['DoiTuong']+'&nguoitra='+rowData['NguoiTra']);
				$( "#dialog_tra" ).dialog({
					title:'Trả thuốc '+rowData['Khoa']+' - Số phiếu trả: '+rowData['SoPhieuTra'],
				  resizable: false,
				  height:$(window).height()-10,
				  width:$(window).width()-10,
				  modal: true,
				});
			  }else{
				$("#formhoantra").attr('src','resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=form_chi_tiet_datra&type=test&id_form=<?=$_GET["id_form"]?>&id_phieutra='+rowId+'&sophieu='+rowData['SoPhieuTra']+'&id_phanloaithuoc='+rowData['ID_NhomPhanLoaiThuoc']+'&doituong='+rowData['DoiTuong']+'&nguoitra='+rowData['NguoiTra']);
				$( "#dialog_tra" ).dialog({
				  title:'Thuốc đã trả '+rowData['Khoa']+' - Người trả: '+rowData['NguoiTra']+' - Ngày trả: '+rowData['NgayNhap'],
				  resizable: false,
				  height:$(window).height()-10,
				  width:$(window).width()-10,
				  modal: true,
				});
			  }
 		},
		loadComplete: function(data) {
		},	  
		caption: 'Danh sách hoàn trả thuốc bệnh nhân nội trú <span style="margin-left:30px"><input type="checkbox" id="chuatra"  checked="checked" />Chưa trả  <input type="checkbox" id="datra"  /> Đã trả</span> <button id="tra_tailai" style="margin-left:10px">Tải lại dữ liệu</button> <span id="tra_chonngay">Từ ngày: <input type="text" id="tra_tungay" value="<?php echo date("d/m/".$_SESSION["config_system"]["namUI"])?>" >  Đến ngày: <input type="text" id="tra_denngay" value="<?php echo date("d/m/".$_SESSION["config_system"]["namUI"])?>">  <button id="tra_xem">Xem</button></span>'
	});	
	  $("#rowed4").jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false,defaultSearch:"cn"});
	  $("#rowed4").jqGrid('navGrid', "#prowed3", {add: false, edit: false, del: false, search: true, refresh: true, closeAfterEdit: true, clearAfterAdd: true, navkeys: [true, 38, 40], closeOnEscape: true});
	$("#rowed4").jqGrid('bindKeys', {});
	$("#tra_tungay").datepicker({
		changeMonth: true,
		changeYear: true,
		dateFormat: $.cookie("ngayJqueryUi")
	});
	$("#tra_denngay").datepicker({
		changeMonth: true,
		changeYear: true,
		dateFormat: $.cookie("ngayJqueryUi")
	});
	$("#tra_xem").click(function(e) {
		datra();
	});
}

function dalinh(){
	window.n_action_linh=2;
	$("#xuat_chonngay").show();
	$("#mo_phieu").hide();
	//$("#xuat_in").hide();
	$("#mo_phieu").button('disable');
	$("#tailai").hide();
	$("#rowed3").jqGrid('setGridParam',{datatype: 'json',url:"resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_danhsach_dalinh&tungay="+$("#xuat_tungay").val()+"&denngay="+$("#xuat_denngay").val()}).trigger('reloadGrid');	
}
function chualinh(){
	window.n_action_linh=1;
	$("#xuat_chonngay").hide();
	$("#xuat_in").show();
	$("#mo_phieu").show();
	$("#tailai").show();
	$("#xuat_in").button('disable');
	$("#mo_phieu").button('disable');
	$("#mo_phieu span.ui-button-text").html('Hủy chốt');
	$("#xuat_in span.ui-button-text").html('In phiếu lĩnh');
	$("#rowed3").jqGrid('setGridParam',{datatype: 'json',url:"resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_danhsach_chualinh"}).trigger('reloadGrid');	
}
//chuatra
function datra(){
	$("#tra_chonngay").show();
	$("#tra_tailai").hide();
	$("#rowed4").jqGrid('setGridParam',{datatype: 'json',url:"resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_danhsach_datra&tungay="+$("#tra_tungay").val()+"&denngay="+$("#tra_denngay").val()}).trigger('reloadGrid');	
}
function chuatra(){
	$("#tra_chonngay").hide();
	$("#tra_tailai").show();
	$("#rowed4").jqGrid('setGridParam',{datatype: 'json',url:"resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_danhsach_chuatra"}).trigger('reloadGrid');	
}
</script>