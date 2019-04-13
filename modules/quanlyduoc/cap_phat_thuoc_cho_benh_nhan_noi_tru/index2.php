<style>
#formmoi{
	border:none !important;
}
</style>
<body>
<div id="dialog_linh" title="Xuất thuốc" style="display:none">
 	<iframe id="formmoi" src=""  width="100%" height="100%"> </iframe>
</div>
<table id="rowed3">
</table>
<div id="prowed3"></div>
</body>
<script type="text/javascript">
$(document).ready(function(e) {
	var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
	var eventer = window[eventMethod];
	var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
	eventer(messageEvent,function(e) { 
	tam=e.data;
	if(tam=='dongdialog'){
		$("#dialog_linh").dialog('close');
		tooltip_message("Lưu thành công");
		chualinh();
	}
});
	
   create_grid(); 
   $("#rowed3").setGridWidth($(window).width()-10);
	$("#rowed3").setGridHeight($(window).height()-100);
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
	
});
$(window).resize(function(e) {
   $("#rowed3").setGridWidth($(window).width()-10);
	$("#rowed3").setGridHeight($(window).height()-100);
});

function create_grid(){
		$("#rowed3").jqGrid({
		url: 'resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_danhsach_chualinh',
        datatype: "json",
		colNames:['Khoa','Người lĩnh','Ngày đề nghị','Loại phiếu lĩnh','Đối tượng','Số phiếu lĩnh','ID nhóm phân loại thuốc','DaLinh'],
		colModel:[
			{name:'Khoa',index:'Khoa',search:true, width:"8%", editable:false,align:'left',edittype:"text",hidden:false},		
			{name:'NguoiLinh',index:'NguoiLinh',search:true, width:"8%", editable:false,align:'left',edittype:"text",hidden:false},
			{name:'NgayDeNghi',index:'NgayDeNghi',search:true, width:"5%", editable:true,align:'center',edittype:"text",hidden:false},
			{name:'LoaiPhieuLinh',index:'LoaiPhieuLinh',search:true, width:"8%", editable:false,align:'left',edittype:"text",hidden:false},
			{name:'DoiTuong',index:'DoiTuong',search:true, width:"5%", editable:false,align:'left',edittype:"text",hidden:false}, 
			{name:'SoPhieuLinh',index:'SoPhieuLinh',search:true, width:"5%", editable:false,align:'left',edittype:"text",hidden:true},
			{name:'ID_NhomPhanLoaiThuoc',index:'ID_NhomPhanLoaiThuoc',search:true, width:"5%", editable:false,align:'left',edittype:"text",hidden:true}, 
			{name:'DaLinh',index:'DaLinh',search:true, width:"5%", editable:false,align:'left',edittype:"text",hidden:true}, 			
		],
		loadonce: false,
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
			  var rowData = jQuery('#rowed3').jqGrid ('getRowData', rowId);
			  if(rowData['DaLinh']==0){
				$("#formmoi").attr('src','resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=form_chi_tiet&type=test&id_form=<?=$_GET["id_form"]?>&id_phieulinh='+rowId+'&sophieu='+rowData['SoPhieuLinh']+'&id_phanloaithuoc='+rowData['ID_NhomPhanLoaiThuoc']+'&doituong='+rowData['DoiTuong']+'&nguoilinh='+rowData['NguoiLinh']);
				$( "#dialog_linh" ).dialog({
				  resizable: false,
				  height:$(window).height()-10,
				  width:$(window).width()-10,
				  modal: true,
				});
			  }
 		},
		loadComplete: function(data) {	
		},	  
		caption: 'Danh sách cấp phát thuốc bệnh nhân nội trú <span style="margin-left:30px"><input type="checkbox" id="chualinh"  checked="checked" />Chưa lĩnh  <input type="checkbox" id="dalinh"  /> Đã lĩnh</span>'
	});	
	  $("#rowed3").jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false,defaultSearch:"cn"});
	  $("#rowed3").jqGrid('navGrid', "#prowed3", {add: false, edit: false, del: false, search: true, refresh: true, closeAfterEdit: true, clearAfterAdd: true, navkeys: [true, 38, 40], closeOnEscape: true});
	$("#rowed3").jqGrid('bindKeys', {});
}

function dalinh(){
	$("#rowed3").jqGrid('setGridParam',{datatype: 'json',url:"resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_danhsach_dalinh"}).trigger('reloadGrid');	
}
function chualinh(){
	$("#rowed3").jqGrid('setGridParam',{datatype: 'json',url:"resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_danhsach_chualinh"}).trigger('reloadGrid');	
}
</script>