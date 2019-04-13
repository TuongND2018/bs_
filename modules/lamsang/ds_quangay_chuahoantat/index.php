<!--<link rel="stylesheet" href="../../../css/form_css.css" type="text/css" media="screen"/>-->
<style>
input[type=button].custom_button{
	/*	border:1px solid #000;*/
	border:none;
	background:none;
	/*border-radius:10px; -moz-border-radius:10px; -webkit-border-radius:10px;*/
	outline:  none;
	text-shadow:0 1px 0 rgba(255, 255, 255, 0.6);
	font-size:11px;
	height:17px!important;
	width:50px!important;
	text-decoration:underline;

	/*box-shadow:0px 0px 2px 1px #a0a0a0;*/
}
input[type=button].custom_button:hover{
	cursor:pointer;
	color:#FFF;
}
input[type=button].custom_button:focus{	 
	outline:  none;
	}
</style>
<body> 
	<div id="grid_phong_ban">      	 
          <table id="rowed3" ></table>
            <div id="prowed3"></div>   
    </div>    
</body>
</html> 

<script type="text/javascript">
jQuery(document).ready(function() {
	create_grid();			 
	shortcut_key();	
	$("#rowed3").setGridWidth($(window).width()-20);
	 $("#rowed3").setGridHeight($(window).height()-$("#form_danh_muc_phong_ban").height()-100);	
	
		
})
 jQuery(window).resize(function() {		 
	 $("#rowed3").setGridWidth($(window).width()-20);
	 $("#rowed3").setGridHeight($(window).height()-$("#form_danh_muc_phong_ban").height()-100);
	}); 
 
function create_grid(){	
		//window.kiemtrasearch = true;
		 $("#rowed3").jqGrid({
		url:'resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_danhsach',
		datatype: "json",	
		colNames:['Ngày giờ khám','Mã BN','ID Bệnh nhân','Họ tên BN','Tuổi','Giới','Loại khám','Bệnh án'],
		colModel:[
			{name:'NgayGioKham',index:'NgayGioKham',search:false, width:"10%", editable:false,align:'left',hidden:false}, 
			{name:'MaBenhNhan',index:'MaBenhNhan',search:false, width:"10%", editable:false,align:'left',hidden:false}, 
			{name:'ID_BenhNhan',index:'ID_BenhNhan',search:false, width:"10%", editable:false,align:'left',hidden:true}, 
			{name:'HoTenBenhNhan',index:'HoTenBenhNhan',search:false, width:"30%", editable:false,align:'left',hidden:false}, 
			{name:'Tuoi',index:'Tuoi',search:false, width:"10%", editable:false,align:'center',hidden:false}, 
			{name:'Gioi',index:'Gioi',search:false, width:"10%", editable:false,align:'center',hidden:false}, 
			{name:'LoaiKham',index:'LoaiKham',search:false, width:"30%", editable:false,align:'left',hidden:false}, 
			{name:'BenhAn',index:'BenhAn',search:false, width:"10%",align:'center', editable: false,hidden:false},

		],
			loadonce: true,
            scroll: false,
            modal: true,
            shrinkToFit: true,
            rowNum: 10000000,
			pginput:false,
			pgbuttons:false,
            rowList: [],
            pager: '#prowed3',
            height: 100,
            width: 100,
            viewrecords: true,
            ignoreCase: true,
            sortorder: "desc",
			closeAfterEdit: true,
			
	
		
		serializeRowData: function (postdata) { 		 	
			
		},
		onSelectRow: function(id){		  
		 
		},
		ondblClickRow: function (rowId, rowIndex, columnIndex) {
			thuchien(rowId)
 		},
		loadComplete: function(data) {	
				//grid_filter_enter(rowed3);
			var tmp1 = $("#rowed3").jqGrid('getDataIDs');
			for(var i=0;i < tmp1.length;i++){
				//var rowData = $("#rowed6").getRowData(tmp1[i]);
				benhan = "<input class='custom_button xanh' style='height:22px;width:50px;' type='button' value='Bệnh án' onclick=\"thuchien('"+tmp1[i]+"');\" />";
				$("#rowed3").jqGrid('setRowData',tmp1[i],{BenhAn:benhan});
			}	 
		},	  
		caption: "Ds Khám lâm sàng chưa hoàn tất của BS. <?= $_SESSION["user"]["nickname"]?>"
	});		 
	$("#rowed3").jqGrid('bindKeys', {"onEnter":function( rowid ) {} } );
}
function thuchien(id){
	var rowData =  $('#rowed3').getRowData(id);
	parent.postMessage('benhan_luotkham;benh_an;undefined;'+rowData['ID_BenhNhan']+';'+rowData["HoTenBenhNhan"], "*");
}
</script>