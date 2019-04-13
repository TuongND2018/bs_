<body> 
	<div id="grid_dangnhap">      	 
          <table id="rowed3" ></table>
          <div id="prowed3"></div>   
    </div>    
</body>
</html> 
<script type="text/javascript">
jQuery(document).ready(function()
 {	
	var lastsel; 	
	
	create_grid();			 
	//shortcut_key();		
	jQuery(window).resize(function() {		 
	 $("#rowed3").setGridWidth($(window).width()-20);
	 $("#rowed3").setGridHeight($(window).height()-$("#form_dangnhap").height()-130);
	});
		
})
function create_grid(){	
	 $("#rowed3").jqGrid({
		url:'resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_login',
		datatype: "json",	
		colNames:["UserName","PassWord"],
colModel:[
            {name:'UserName',index:'UserName',search:false, width:"100%",editrules: {required:true}, editable:false,align:'left',},		   	 	 
			{name:'PassWord',index:'PassWord',search:false, width:"100%", editable:true,align:'left',hidden:false},		
                       
		],
		loadonce: false,
		scroll: false,		 
		modal:true,
                shrinkToFit: false,
		rowNum: 30,
		rowList:[30,50,70],
		pager: '#prowed3',
		sortname: 'UserName',
		height:100,
		width:100,
		viewrecords: true,	
		ignoreCase:true,	
		sortorder: "asc",
		serializeRowData: function (postdata) { 				
		},
		onSelectRow: function(id){				
		},
		ondblClickRow: function (rowId, rowIndex, columnIndex) {
			$(".ui-icon-pencil").trigger('click'); 
 		},
		loadComplete: function(data) {					 
		},
	  
		caption: "",
	});
	$("#rowed3").setGridWidth($(window).width()-20);
	$("#rowed3").setGridHeight($(window).height()-$("#form_dangnhap").height()-130);
	$("#rowed3").jqGrid('bindKeys', {"onEnter":function( rowid ) {
		} } );	
		$("#gbox_rowed3").attr("tabindex","1");		
		$("#gbox_rowed3").bind('keydown', function(e) {			
			if((jwerty.is("ctrl+m",e))){		 
				 $("#rowed3").jqGrid('restoreRow', lastsel);
				 $("#rowed3").jqGrid('editRow', rowid, true);
				 lastsel = rowid;
			}
		}) 	 		


</script>