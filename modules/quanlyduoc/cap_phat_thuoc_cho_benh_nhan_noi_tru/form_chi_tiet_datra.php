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
<div id="n_top"  style="display:none">
	Số phiếu trả:<strong> <?=$_GET['sophieu']?></strong>
    <span style="margin-left:20px">Ngày thực trả: <input type="text" id="ngaythuctra"  value="<?php echo date("d/m/".$_SESSION["config_system"]["namUI"])?>"  style=" width:85px; text-align:center"  /></span>
    <span style="margin-left:20px">Kho nhận: <input type="text" id="khotra" /></span>
</div>
<table id="rowed3">
</table>
<div id="prowed3"></div>
</body>
<script type="text/javascript">
$(document).ready(function(e) {
	window.n_luu=0;
	$("#ngaythuctra").datepicker({
		changeMonth: true,
		changeYear: true,
		dateFormat: $.cookie("ngayJqueryUi")
    });
	create_combobox_new('#khotra',create_khotra,'bw','','data_kho');
	create_grid(); 
	$("#trathuoc").button();
	$("#rowed3").setGridWidth($(window).width()-10);
	$("#rowed3").setGridHeight($(window).height()-60);
	
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

	$("#trathuoc").click(function(e) {
		if(window.n_luu==0){
			 window.n_luu=1;
			var gridData = jQuery("#rowed3").getRowData();
			var postData = JSON.stringify(gridData);
			postData='{"id":'+postData+'}';
			postData=$.parseJSON(postData);
			$.post('resource.php?module=<?=$modules?>&view=<?=$view?>&action=controller_trathuoc&oper=update&hienmaloi=3&kho='+$("#khotra_hidden").val()+'&doituong=<?=$_GET['doituong']?>&id_phieutra=<?=$_GET['id_phieutra']?>&nguoitra=<?=$_GET['nguoitra']?>&ngaythuctra='+$("#ngaythuctra").val(),postData)
				.done(function( gridData ) {
				 tooltip_message("Lưu thành công");
				 window.n_luu=0;
				 parent.postMessage('dongdialogtra','*');
				 })
				.fail(function() {
					 window.n_luu=0;
					tooltip_message( "error" );
				});
		}
	});
	
	phanquyen();
});//end ready

$(window).resize(function(e) {
	$("#rowed3").setGridWidth($(window).width()-10);
	$("#rowed3").setGridHeight($(window).height()-150);
});

function create_grid(){
		$("#rowed3").jqGrid({
		url: 'resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_danhsach_chitietthuoc_byid_phieutra&id_phieutra=<?=$_GET['id_phieutra']?>&id_phanloaithuoc=<?=$_GET['id_phanloaithuoc']?>',
        datatype: "json",
		colNames:['ID thuốc','Mã thuốc','Tên thuốc - Vật tư y tế','Đơn vị tính','Số lượng','Đơn giá vốn','Đơn giá trả lại','Số lô NSX','Ngày hết hạn'],
		colModel:[
			{name:'idthuoc',index:'idthuoc',search:true, width:"5%", editable:false,align:'left',edittype:"text",hidden:true},
			{name:'ma',index:'ma',search:true, width:"5%", editable:false,align:'left',edittype:"text",hidden:false},
			{name:'tenthuoc',index:'tenthuoc',search:true, width:"15%", editable:true,align:'left',edittype:"text",hidden:false},
			{name:'donvitinh',index:'donvitinh',search:true, width:"5%", editable:false,align:'left',edittype:"text",hidden:false},
			{name:'soluong',index:'soluong',search:true, width:"5%", editable:false,align:'left',edittype:"text",hidden:false}, 
			{name:'dongiavon',index:'dongiavon',search:true, width:"5%", editable:false,align:'right',edittype:"text",hidden:false,formatter:"currency",formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: "", defaultValue: '0'}}, 
			{name:'dongiatralai',index:'dongiatralai',search:true, width:"5%", editable:false,align:'right',edittype:"text",hidden:false,formatter:"currency",formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: "", defaultValue: '0'}}, 	
			{name:'solonsx',index:'solonsx',search:true, width:"5%", editable:false,align:'left',edittype:"text",hidden:false}, 
			{name:'ngayhethan',index:'ngayhethan',search:true, width:"5%", editable:false,align:'left',edittype:"text",hidden:false}, 			
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
function create_khotra(elem, datalocal) {
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