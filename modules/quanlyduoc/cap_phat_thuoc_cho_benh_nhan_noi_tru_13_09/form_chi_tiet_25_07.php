<style>
body{
	background-color:#FBFAF5;
}
#n_top{
	height:35px;
	background-color:#FBFAF5;
	border:1px solid #ccc;
	margin-left:5px;
	margin-right:5px;
	/*border-top-right-radius:4px;
	border-top-left-radius:4px;*/
	border-radius:4px;
	padding-top:5px;
	padding-left:5px;
}
#n_bottom{
	height:35px;
	border-radius:4px;
	border:1px solid #ccc;
	margin-left:5px;
	margin-right:5px;
	text-align:right;
	padding-top:5px;
	padding-right:5px;
	background-color:#FBFAF5;
	margin-top:5px;
}
#dialog_thuocloi table td{
	padding-left:5px;
}
</style>
<body>
<div id="dialog_thuocloi" title="Thông báo">
 <table border="1" cellpadding="0" cellspacing="0" width="100%">
    <tbody id="addthuoc"></tbody>
 </table>
</div>
<div id="n_top">
	Số phiếu lĩnh:<strong> <?=$_GET['sophieu']?></strong>
    <span style="margin-left:20px">Ngày thực lĩnh: <input type="text" id="ngaythuclinh"  value="<?php echo date("d/m/".$_SESSION["config_system"]["namUI"])?>"  style=" width:85px; text-align:center"  /></span>
    <span style="margin-left:20px">Kho xuất: <input type="text" id="khoxuat" /></span>
</div>
<table id="rowed3">
</table>
<div id="prowed3"></div>
 <div id="n_bottom">
    	<button id="xuatthuoc">Xuất thuốc</button>
    </div>
</body>
<script type="text/javascript">
$(document).ready(function(e) {
	$("#ngaythuclinh").datepicker({
		changeMonth: true,
		changeYear: true,
		dateFormat: $.cookie("ngayJqueryUi")
    });
	create_combobox_new('#khoxuat',create_khoxuat,'bw','','data_kho');
	create_grid(); 
	$("#xuatthuoc").button();
	$("#rowed3").setGridWidth($(window).width()-10);
	$("#rowed3").setGridHeight($(window).height()-150);
	phanquyen();
});
$(window).resize(function(e) {
	$("#rowed3").setGridWidth($(window).width()-10);
	$("#rowed3").setGridHeight($(window).height()-150);
});
$( "#dialog_thuocloi" ).dialog({
      resizable: false,
	  autoOpen:false,
	  width:400,
      modal: true,
      buttons: {
        "OK": function() {
          $( this ).dialog( "close" );
        },
      }
    });


$("#xuatthuoc").click(function(e) {
	var gridData = jQuery("#rowed3").getRowData();
	var postData = JSON.stringify(gridData);
	postData='{"id":'+postData+'}';
	postData=$.parseJSON(postData);
   $.post('resource.php?module=<?=$modules?>&view=<?=$view?>&action=controller_tonkho&hienmaloi=1&kho='+$("#khoxuat_hidden").val(),postData).done(function(data){
		data=data.split('||')
		if(data[1]==0){
			$.post('resource.php?module=<?=$modules?>&view=<?=$view?>&action=controller_xuatthuoc&oper=update&hienmaloi=3&kho='+$("#khoxuat_hidden").val()+'&doituong=<?=$_GET['doituong']?>&id_phieulinh=<?=$_GET['id_phieulinh']?>&nguoilinh=<?=$_GET['nguoilinh']?>&ngaythuclinh='+$("#ngaythuclinh").val(),postData)
					.done(function( gridData ) {
					 tooltip_message("Lưu thành công");
					 parent.postMessage('dongdialog','*');
					 })
					.fail(function() {tooltip_message( "error" );});
		}else{
			$("#addthuoc").empty();
			$("#addthuoc").append(data[0]);
			$( "#dialog_thuocloi" ).dialog('open');
		}
   });
});

function create_grid(){
		$("#rowed3").jqGrid({
		url: 'resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_danhsach_chitietthuoc_byid_phieulinh&id_phieulinh=<?=$_GET['id_phieulinh']?>&id_phanloaithuoc=<?=$_GET['id_phanloaithuoc']?>',
        datatype: "json",
		colNames:['ID thuốc','Mã thuốc','Tên thuốc - Vật tư y tế','Đơn vị tính','Số lượng','phantramvat','dongia'],
		colModel:[
			{name:'idthuoc',index:'idthuoc',search:true, width:"5%", editable:false,align:'left',edittype:"text",hidden:true},
			{name:'ma',index:'ma',search:true, width:"5%", editable:false,align:'left',edittype:"text",hidden:false},
			{name:'tenthuoc',index:'tenthuoc',search:true, width:"15%", editable:true,align:'left',edittype:"text",hidden:false},
			{name:'donvitinh',index:'donvitinh',search:true, width:"5%", editable:false,align:'left',edittype:"text",hidden:false},
			{name:'soluong',index:'soluong',search:true, width:"5%", editable:false,align:'left',edittype:"text",hidden:false,}, 
			{name:'phantramvat',index:'phantramvat',search:true, width:"5%", editable:false,align:'left',edittype:"text",hidden:true}, 	
			{name:'dongia',index:'dongia',search:true, width:"5%", editable:false,align:'left',edittype:"text",hidden:true}, 			
		],
		loadonce: false,
		scroll: false,		 
		modal:true,	 	 
		rowNum: 1000000,
		rownumbers: true, 
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

 		},
		loadComplete: function(data) {	
		},	  
		caption: 'Danh sách thuốc'
	});	
	 // $("#rowed3").jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false,defaultSearch:"cn"});
	  $("#rowed3").jqGrid('navGrid', "#prowed3", {add: false, edit: false, del: false, search: true, refresh: true, closeAfterEdit: true, clearAfterAdd: true, navkeys: [true, 38, 40], closeOnEscape: true});
	$("#rowed3").jqGrid('bindKeys', {});
}
function create_khoxuat(elem, datalocal) {
        datalocal = jQuery.parseJSON(datalocal);
        $(elem).jqGrid({
            datastr: datalocal,
            datatype: "jsonstring",
            colNames: ['Tên kho'],
            colModel: [
                {name: 'tenkho', index: 'tenkho', hidden: false,width:5},
            ],
            hidegrid: false,
            gridview: true,
            loadonce: true,
            scroll: 1,
            modal: true,
            rowNum: 100,
            rowList: [],
            height: 100,
            width: 300,
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
</script>