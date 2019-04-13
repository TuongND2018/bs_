<!--<link rel="stylesheet" href="../../../css/form_css.css" type="text/css" media="screen"/>-->
<style>
	 th.ui-th-column div{
        word-wrap: break-word; /* IE 5.5+ and CSS3 */
        white-space: pre-wrap; /* CSS3 */
        white-space: -moz-pre-wrap; /* Mozilla, since 1999 */
        white-space: -pre-wrap; /* Opera 4-6 */
        white-space: -o-pre-wrap; /* Opera 7 */
        overflow: hidden;
        height: auto !important;
        vertical-align: middle;
    }
	#editmodrowed3{
		width:400px!important;
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
	load_select();
	window.nhom=":Tất cả;"+window.nhom;
	var lastsel; 	
	
	create_grid();	
	shortcut_key();
	jQuery(window).resize(function() {		 
	 $("#rowed3").setGridWidth($(window).width()-20);
	 $("#rowed3").setGridHeight($(window).height()-$("#form_danh_muc_loai_lich").height()-130);
	}); 
	phanquyen();
})

function create_grid(){	
	 $("#rowed3").jqGrid({
		url:"resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_nhom_thietbi_vattu&idnew=0",
		datatype: "json",	
		colNames:['Tên nhóm','Mã nhóm','Nhóm cha','Ghi chú',''],
		colModel:[
			{name:'TenNhom',index:'TenNhom',search:true, width:"20%", editable:true,align:'left',hidden:false,editrules: {required:true},formoptions:{ rowpos:1, colpos:1}}, 
			{name:'MaNhom',index:'MaNhom', width:"10%", editable:true,align:'left',hidden:false,editrules: {required:true},edittype:"text",formoptions:{ rowpos:2, colpos:1}}, 
			{name:'NhomCha',index:'NhomCha', width:"15%", editable:true,align:'left',hidden:false,formatter:"select",edittype:"select",editoptions: { value: window.nhom},stype: 'select',searchoptions: { sopt: ['eq', 'ne'],value:window.nhom},formoptions:{ rowpos:3, colpos:1}}, 
			{name:'GhiChu',index:'GhiChu', width:"15%", editable:true,align:'left',hidden:false,edittype:"text",formoptions:{ rowpos:4, colpos:1}}, 
			{name:'New',index:'New', width:"20%", editable:false,align:'left',hidden:true,edittype:"text",formoptions:{ rowpos:5, colpos:1}},			
		],

		loadonce: true,
		scroll: 1,	
		//rownum = false,
		//treeGrid = false,	 
		modal:true,	 	
		pager: '#prowed3',	
		rowNum: 10000000,
		gridview: false,
		pginput:false,
		pgbuttons:false,
		rowList:[],
		sortname: 'NhomCha',
		height:100,
		width: 100,
		viewrecords: true,	
		ignoreCase:true,
		shrinkToFit:true,
		grouping: false,
		stringResult:true,
		sortorder: "asc",
		grouping:true,
		groupingView : {
			groupField : ['NhomCha'],
			groupText : ['<b>{0}</b>'],
			groupColumnShow : [false],
			groupCollapse : false,
		}, 
		
	//hoverrows:false,
	//jsonReader:{repeatitems:true,subgrid:{repeatitems:false}},	
		
		serializeRowData: function (postdata) { 		 	

		},
		onSelectRow: function(id){		  
		},
		ondblClickRow: function (rowId, rowIndex, columnIndex) {
			$(".ui-icon-pencil").trigger('click'); 
 		},
		loadComplete: function(data) {	
			grid_filter_enter("#rowed3") //enter: chuyen con tro sang o tiếp theo	
			var tmp = $("#rowed3").jqGrid('getDataIDs'); 
			for(var j=0;j < tmp.length;j++){
				var rowData = $("#rowed3").getRowData(tmp[j]);	
				if(rowData["New"]==1){
					$("#rowed3").jqGrid('setSelection', tmp[j], true);
				}
			}
		},	  
		caption: "Danh mục nhóm Thiết bị - Vật tư"
	});	
	$("#rowed3").jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false,defaultSearch:"cn"});//bộ search
	$("#rowed3").jqGrid('navGrid',"#prowed3",{add: permission["add"], edit: permission["edit"], del: permission["delete"], search: false,closeAfterEdit: true,clearAfterAdd :true,closeOnEscape : true, bSubmit: "Submit",
     bCancel: "Cancel"}, //options						 
		{recreateForm:true,height:'auto',width:'auto',reloadAfterSubmit:false,url:'resource.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=edit',closeOnEscape : true,modal: true,recreateForm: true,
			   afterSubmit : function(response, postdata) { 
			   		var temp = String(response.responseText).split(";;");	
				  	if(temp[0]==1){
						var success=false;
						var new_id="<?php get_text1("sua_khongthanhcong") ?>";													
					}else{
						tooltip_message("<?php get_text1("sua_thanhcong") ?>");
						var success=true;	
						var new_id="<?php get_text1("sua_thanhcong") ?>";	
						$("#rowed3").jqGrid('setGridParam',{datatype: 'json',url:"resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_nhom_thietbi_vattu&idnew="+temp[1]+''}).trigger('reloadGrid');							
					};						
					return [success,new_id] ;					   
				},
				beforeShowForm: function(formid){					 
					canhgiua(formid);
				},
				afterShowForm : function (formid) {					
					autocompleted_combobox("#NhomCha");
					xuongdong(formid);
					lendong(formid);					
				},
				onClose : function(formid){
					$("#editmodrowed3").css("box-shadow","");										
				}
							  
		}, // edit options
		{height:'auto',width:'auto',reloadAfterSubmit:false,url:'resource.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=add',closeOnEscape : true,closeAfterAdd:false,modal: true,addedrow: "first",recreateForm:true,savekey: [true,121]
				,afterSubmit : function(response, postdata){
					var temp = String(response.responseText).split(";;");				 
					if(temp[0]==1){
						var success=false;
						var new_id="<?php get_text1("luu_khongthanhcong") ?>";													
					}else{
						$.cookie("idluu_vt", temp[1]); 
						tooltip_message("<?php get_text1("luu_thanhcong") ?>");
						var success=true;	
						var new_id="<?php get_text1("luu_thanhcong") ?>";	
						$("#rowed3").jqGrid('setGridParam',{datatype: 'json',url:"resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_nhom_thietbi_vattu&idnew="+temp[1]+''}).trigger('reloadGrid');													
					};						
					return [success,new_id];
				},
				afterComplete : function (response, postdata, formid) {
					var temp = String(response.responseText).split(";;");					 					
					$("#jqg"+window.id_rowed3).attr("id",$.trim(temp[1]));
					$("#"+$.trim(temp[1]+"> td")).trigger("click");					
					window.id_rowed3++; 
				
				},
				beforeSubmit : function(postdata, formid){
					if (typeof(window.id_rowed3)=='undefined'){
						 window.id_rowed3=1;
					}
					var success=true;
					var new_id="";
					return [success,new_id];					  
				},
				beforeShowForm: function(formid) {					 
					 canhgiua(formid);					 
				},									 
			 	afterShowForm : function (formid) {					
					autocompleted_combobox("#NhomCha");
					xuongdong(formid);
					lendong(formid);		
					
			 	},
				onClose : function(formid){
					$("#editmodrowed3").css("box-shadow","");					
				}
		}, // add options							  
		{reloadAfterSubmit:false,url:'resource.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=del',	navkeys : [ true, 38, 40 ],closeOnEscape : true,
		beforeShowForm : function(formid) {canhgiua_del(formid);},	
				afterSubmit : function(response, postdata) { 				
							if(response.responseText==1){
								var success=false;
								var new_id="<?php get_text1("xoa_khongthanhcong") ?>";													
								}else{
								tooltip_message("<?php get_text1("xoa_thanhcong") ?>");
								var success=true;	
								var new_id="<?php get_text1("xoa_thanhcong") ?>";
								$("#rowed3").jqGrid('setGridParam',{datatype: 'json',url:"resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_nhom_thietbi_vattu&idnew=0"}).trigger('reloadGrid');
															
							};						
							return [success,new_id] ;
				}		
		}, // del options
		{reloadAfterSubmit:true,height:250,width:600,sopt: ["cn"],url:'resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_nhom_thietbi_vattu&idnew=0',closeOnEscape : true,
				/*beforeShowSearch:function(formid){				
				}*/ // search options		
		} // search options						 
							  
	);	 					  
	$("#rowed3").setGridWidth($(window).width()-20);
	$("#rowed3").setGridHeight($(window).height()-$("#form_danh_muc_loai_lich").height()-130);
	$("#rowed3").jqGrid('bindKeys', {"onEnter":function( rowid ) {
		} } );	
		$("#gbox_rowed3").attr("tabindex","1");
		//$("#gbox_rowed3").focus();	
		$("#gbox_rowed3").bind('keydown', function(e) {			
			if((jwerty.is("ctrl+m",e))){		 
				 $("#rowed3").jqGrid('restoreRow', lastsel);
				 $("#rowed3").jqGrid('editRow', rowid, true);
				 lastsel = rowid;
			}
		}) 	 
		
}

function load_select(){
	window.nhom = $.ajax({url: 'resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_nhom', async: false, success: function(data, result) {if (!result) alert('Không load được danh mục');}}).responseText;
	
}
</script>