<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<style>
#rowed3 td {	 
	word-wrap:normal!important;
	white-space:nowrap;
}
#top_info{
	height:70px;
	width:100%;
	border:1px solid #CCC;
	margin-left:5px;
	border-radius:4px;
}
#top_content{
	margin-left:5px;
	margin-top:5px;
}
#top_content input.number{
	width:50px;	
}
</style>
</head>
<body>
    <div id="del-confirm" title="Thông báo!" style="display:none">
      <p><span class="ui-icon ui-icon-alert" style="float:left; margin:0 7px 20px 0;"></span>Bạn có chắc chắn muốn xóa dòng đang chọn?</p>
    </div>
	<div id="grid_phong_ban">
    	<div id="top_info">
        	<div id="top_content">
                <label for="id_thuoc">Thuốc: </label><input type="text" id="id_thuoc" tabindex="1"/>
                <label for="id_kho" style="margin-left:40px">Kho: </label><input type="text" id="id_kho" tabindex="2" />
                <label for="min" style="margin-left:40px">SL Min: </label> <input type="text" id="min" class="number" tabindex="3" />
                <label for="max" style="margin-left:10px">SL Max: </label><input type="text" id="max"  class="number" tabindex="4" /><br />
                <div style="margin-left:34px; margin-top:7px;">
                	 <button id="themmoi"  tabindex="6" >Thêm mới</button> <button id="luu" tabindex="5" >Lưu</button> <button id="xoa">Xóa</button>
                </div>
            </div>
        </div>
          <table id="rowed3" ></table>
    </div>
</body>
</html>

<script type="text/javascript">
jQuery(document).ready(function() {
	openform_shortcutkey(); //mở bằng phím tắt được thiết lập trong DB data_thuoc
	window.ac=1;
	window.iddutru=0;
	create_combobox_new('#id_kho',create_kho,'bw','','data_kho',0);
	create_combobox_new('#id_thuoc',create_thuoc,'bw','','data_thuoc',0);
	number_textbox('#min');
	number_textbox('#max');
	$("#themmoi,#luu,#xoa").button();
	$("#themmoi,#xoa").button('disable');
	$("#themmoi").click(function(e) {
		window.ac=1;
        $("#id_thuoc").val('');
		$("#id_kho").val('');
		$("#min").val('');
		$("#max").val('');
		$("#themmoi").button('disable');
		$("#luu").button('enable');
    });
	
	 $( "#del-confirm" ).dialog({
      resizable: false,
	  autoOpen:false,
      modal: true,
      buttons: {
        "YES": function() {
          $( this ).dialog( "close" );
		  $.post( "resource.php?module=<?=$modules?>&view=<?=$view?>&action=controller&ac="+window.ac+"&iddutru="+window.iddutru+"&hienmaloi=a").done(function(data) {
			$("#themmoi").button('enable');
			$("#themmoi").click();
			$("#xoa").button('disable');
			tooltip_message("Đã xóa");	
			$("#rowed3").jqGrid('setGridParam',{datatype: 'json',url:'resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_danhsach'}).trigger('reloadGrid');
		});
        },
        "NO": function() {
          $( this ).dialog( "close" );
        }
      }
    });
	
	$("#luu").click(function(e) {
		if($("#id_thuoc").val()=='' || $("#id_kho").val()=='' || $("#min").val()=='' || $("#max").val()==''){
			 tooltip_message("Vui lòng nhập đầy đủ thông tin");	
		}else{
			$.post( "resource.php?module=<?=$modules?>&view=<?=$view?>&action=controller&ac="+window.ac+"&idthuoc="+$("#id_thuoc_hidden").val()+"&idkho="+$("#id_kho_hidden").val()+"&min="+$("#min").val()+"&max="+$("#max").val()+"&iddutru="+window.iddutru+"&hienmaloi=a").done(function(data) {
			$("#rowed3").jqGrid('setGridParam',{datatype: 'json',url:'resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_danhsach'}).trigger('reloadGrid');
			tooltip_message("Đã lưu");	
			$("#themmoi").button('enable');
			$("#themmoi").click();
			$("#xoa").button('disable');
			
			 });
		}
	});
	
	$("#xoa").click(function(e) {
		window.ac=3;
		$("#del-confirm").dialog("open");
	});
	
	create_grid();
	resize_control();
	
	jwerty.key('tab', false);
	jwerty.key('shift+tab', false);			  
	jwerty.key('shift+enter', false);
	$('input[type=text], input[type=button]').bind("keydown", function(e) {	
		if ($("input[type=text], input[type=button]").is(":focus")){	
			 if (jwerty.is("enter",e)||jwerty.is("tab",e)) { 
				var tabindex = $(e.target).attr('tabindex');
				window.tabindex_null=tabindex;
				move_tabindex('next',tabindex,e)
			 }else if(jwerty.is("shift+tab",e)){
				var tabindex = $(e.target).attr('tabindex');
				window.tabindex_null=tabindex;
				move_tabindex('pre',tabindex,e)
				return false;
			 }
		 }
	})
	phanquyen();
})	
jQuery(window).resize(function() {
	resize_control()
});
var rowed3_curentsel;
function create_grid(){
	 $("#rowed3").jqGrid({
		url:"resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_danhsach",
		datatype: "json",
		colNames:['Tên Biệt Dược','Tên Gốc',"Kho","Số Lượng Min","Số Lượng Max",'',''],
		colModel:[
			{name:'TenBietDuoc',index:'TenBietDuoc', width:"10%", editable:false,align:'left',hidden:false},
			{name:'TenGoc',index:'TenGoc', width:"10%", editable:false,align:'left',hidden:false},
			{name:'Kho',index:'Kho', width:"10%", editable:false,align:'left',hidden:false},
			{name:'SLMin',index:'SLMin', width:"4%", editable:false,align:'left',hidden:false},
			{name:'SLMax',index:'SLMax', width:"4%", editable:false,align:'left',hidden:false},
			{name:'ID_Thuoc',index:'ID_Thuoc', width:"10%", editable:false,align:'left',hidden:true},
			{name:'ID_Kho',index:'ID_Kho', width:"10%", editable:false,align:'left',hidden:true},
		],

		loadonce: true,
		scroll: false,
		modal:true,	 	
		pager: '#prowed3',	
		rowNum: 100000,
		gridview: true,
		pginput:false,
		pgbuttons:false,
		rowList:[],
		height:100,
		width: 100,
		viewrecords: false,	
		ignoreCase:true,
		shrinkToFit:true,
		grouping: false,
		stringResult:true,		
		onSelectRow: function(id){
			window.rowselect=id;
		},
		onRightClickRow: function(rowid, iRow, iCol, e) {
			
		},
		ondblClickRow: function (rowId, rowIndex, columnIndex) {
			$("#xoa").button('enable');
			//$("#themmoi").button('enable');
			window.ac=2;
			window.iddutru=rowId;
			var rowData = jQuery('#rowed3').jqGrid ('getRowData', rowId);
			setval_new('#id_thuoc',rowData['ID_Thuoc']);
			setval_new('#id_kho',rowData['ID_Kho']);
			$("#min").val(rowData['SLMin']);
			$("#max").val(rowData['SLMax']);
			$("#id_thuoc").focus();
			
 		},
		loadComplete: function(data) {
			
		},
		caption: "Danh sách dự trù",

	});
 $("#rowed3").jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn",  stringResult: true});
 $("#rowed3").jqGrid('navGrid', "#prowed3", {add: false, edit: false, del: false, search: false, refresh: false,prmView: false, closeAfterEdit: true, clearAfterAdd: true, navkeys: [true, 38, 40], closeOnEscape: true});
 $("#rowed3").jqGrid('bindKeys', {});
	
}

function create_kho(elem, datalocal) {
	datalocal = jQuery.parseJSON(datalocal);
	$(elem).jqGrid({
		datastr: datalocal,
		datatype: "jsonstring",
		colNames: ['Tên kho'],
		colModel: [
			{name: 'tenkho', index: 'tenkho', hidden: false,width:7},
		],
		hidegrid: false,
		gridview: true,
		loadonce: true,
		scroll: false,
		modal: true,
		rowNum: 200000,
		rowList: [],
		height: 200,
		width: 200,
		viewrecords: true,
		ignoreCase: true,
		shrinkToFit: true,
		cmTemplate: {sortable: false},
		sortorder: "desc",
		serializeRowData: function(postdata) {
		},
		onSelectRow: function(id) {
			

		},
		ondblClickRow: function(id, rowIndex, columnIndex) {
		},
		loadComplete: function(data) {
		},
	});
	$(elem).jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});
	$(elem).jqGrid('bindKeys', {});
}
function create_thuoc(elem, datalocal) {
	datalocal = jQuery.parseJSON(datalocal);
	$(elem).jqGrid({
		datastr: datalocal,
		datatype: "jsonstring",
		colNames: ['Tên Gốc','Tên Biệt Dược'],
		colModel: [
			{name: 'tengoc', index: 'tengoc', hidden: false,width:7},
			{name: 'tenbietduoc', index: 'tenbietduoc', hidden: false,width:7},
		],
		hidegrid: false,
		gridview: true,
		loadonce: true,
		scroll: false,
		modal: true,
		rowNum: 200000,
		rowList: [],
		height: 200,
		width: 350,
		viewrecords: true,
		ignoreCase: true,
		shrinkToFit: true,
		cmTemplate: {sortable: false},
		sortorder: "desc",
		serializeRowData: function(postdata) {
		},
		onSelectRow: function(id) {
			

		},
		ondblClickRow: function(id, rowIndex, columnIndex) {
		},
		loadComplete: function(data) {
		},
	});
	$(elem).jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});
	$(elem).jqGrid('bindKeys', {});
}
function resize_control(){
	$("#grid_phong_ban").css('width',$(window).width()-22);
	$("#rowed3").setGridWidth($("#grid_phong_ban").width());
	$("#rowed3").setGridHeight($(window).height()-$("#form_danh_muc_phong_ban").height()-$("#panel_main1").height()-170);
}
   
</script>