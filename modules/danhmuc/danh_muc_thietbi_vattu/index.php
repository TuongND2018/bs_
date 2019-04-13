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
    	<div style="width:100%; height:30px; padding-left:15px;">
        <label for="idnhomcha">Nhóm: </label><input type="text" id="idnhomcha">
        </div>    	 
          <table id="rowed3" ></table>
            <div id="prowed3"></div>  
            
    </div>    
</body>
</html> 

<script type="text/javascript">
jQuery(document).ready(function() {
	window.id_rs=0;
	 load_select();
	 window.nhom=":Tất cả;"+window.nhom;
	var lastsel; 	
	
	create_grid();
	$.post('resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_nhom_nhanvien').done(function(data){
		data=data.split(';;');
		create_combobox_new('#idnhomcha',create_nhomcha,'bw','','data_nhomcha',data[1]);
	});
	
	shortcut_key();
	jQuery(window).resize(function() {		 
	 $("#rowed3").setGridWidth($(window).width()-20);
	 $("#rowed3").setGridHeight($(window).height()-$("#form_danh_muc_loai_lich").height()-155);
	}); 
	phanquyen();
})

function create_grid(){	
	 $("#rowed3").jqGrid({
		url:'',
		datatype: "json",	
		colNames:['Tên loại','Mã loại','Nhóm','STT','Sử dụng','Có khấu hao',''],
		colModel:[
			{name:'TenLoai',index:'TenLoai',search:true, width:"25%", editable:true,align:'left',hidden:false,editrules: {required:true},formoptions:{ rowpos:1, colpos:1}}, 
			{name:'MaLoai',index:'MaLoai', width:"15%", editable:true,align:'left',hidden:false,editrules: {required:true},edittype:"text",formoptions:{ rowpos:2, colpos:1}}, 
			{name:'Nhom',index:'Nhom', width:"15%", editable:true,align:'left',hidden:false,editrules: {required:true},formatter:"select",edittype:"select",editoptions: { value: window.nhom},stype: 'select',searchoptions: { sopt: ['eq', 'ne'],value:window.nhom},formoptions:{ rowpos:3, colpos:1}}, 
			{name:'STT',index:'STT', width:"4%", editable:true,align:'left',hidden:false,edittype:"text",formoptions:{ rowpos:5, colpos:1}}, 
			{name:'SuDung',index:'SuDung', width:"4%", editable:true,align:'center',hidden:false,edittype:"checkbox",formatter:"checkbox",formoptions:{ rowpos:6, colpos:1},editoptions: {value:"1:0"},stype: 'select',searchoptions: { sopt: ['eq', 'ne'],value:':Tất cả;1:Có;0:Không'}},	
			{name:'CoKhauHao',index:'CoKhauHao', width:"4%", editable:true,align:'center',hidden:false,edittype:"checkbox",formatter:"checkbox",formoptions:{ rowpos:7, colpos:1},editoptions: {value:"1:0"},stype: 'select',searchoptions: { sopt: ['eq', 'ne'],value:':Tất cả;1:Có;0:Không'}},	
			{name:'New',index:'New', width:"20%", editable:false,align:'left',hidden:true,edittype:"text",formoptions:{ rowpos:8, colpos:1}},			
		],

		loadonce: true,
		scroll: 1,	
		//rownum = false,
		//treeGrid = false,	 
		modal:true,	 	
		pager: '#prowed3',	
		rowNum: 100000000,
		gridview: false,
		pginput:false,
		pgbuttons:false,
		rowList:[],
		sortname: 'Nhom',
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
			groupField : ['Nhom'],
			groupText : ['<b>{0}</b>'],
			groupColumnShow : [true],
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
		caption: "Danh mục Thiết bị - Vật tư"
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
						$("#rowed3").jqGrid('setGridParam',{datatype: 'json',url:"resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_thietbi_vattu&idnew="+temp[1]+'&idnhomcha='+window.idnhomcha}).trigger('reloadGrid');							
					};						
					return [success,new_id] ;					   
				},
				beforeShowForm: function(formid){					 
					canhgiua(formid);
				},
				afterShowForm : function (formid) {					
					autocompleted_combobox("#Nhom");
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
						$("#rowed3").jqGrid('setGridParam',{datatype: 'json',url:"resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_thietbi_vattu&idnew="+temp[1]+'&idnhomcha='+window.idnhomcha}).trigger('reloadGrid');													
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
					autocompleted_combobox("#Nhom");
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
								$("#rowed3").jqGrid('setGridParam',{datatype: 'json',url:"resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_thietbi_vattu&idnew=0&idnhomcha="+window.idnhomcha}).trigger('reloadGrid');
															
							};						
							return [success,new_id] ;
				}		
		}, // del options
		{reloadAfterSubmit:true,height:250,width:600,sopt: ["cn"],url:'resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_thietbi_vattu&idnew=0&idnhomcha='+window.idnhomcha,closeOnEscape : true,
				/*beforeShowSearch:function(formid){				
				}*/ // search options		
		} // search options						 
							  
	);	 					  
	$("#rowed3").setGridWidth($(window).width()-20);
	$("#rowed3").setGridHeight($(window).height()-$("#form_danh_muc_loai_lich").height()-155);
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
 function create_nhomcha(elem, datalocal) {
        datalocal = jQuery.parseJSON(datalocal);
        $(elem).jqGrid({
            datastr: datalocal,
            datatype: "jsonstring",
            colNames: ['Nhóm',''],
            colModel: [
                {name: 'nhom', index: 'nhom', hidden: false,width:1},
				{name: 'idnhanvien', index: 'idnhanvien', hidden: true,width:1},
			],
            hidegrid: false,
            gridview: true,
            loadonce: true,
            scroll: false,
            modal: true,
            rowNum: 300,
            rowList: [],
            height: 200,
            width: 300,
            viewrecords: true,
            ignoreCase: true,
            shrinkToFit: true,
            cmTemplate: {sortable: false},
            sortorder: "desc",
            serializeRowData: function(postdata) {
            },
            onSelectRow: function(id) {
			window.idnhomcha=id;
              var rowData = $(this).getRowData(id);
              $("#rowed3").jqGrid('setGridParam',{datatype: 'json',url:"resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_thietbi_vattu&idnew="+0+'&idnhomcha='+window.idnhomcha}).trigger('reloadGrid');		

            },
            ondblClickRow: function(id, rowIndex, columnIndex) {
            },
            loadComplete: function(data) {
				/*var tmp = $(this).jqGrid('getDataIDs'); 
				for(var j=0;j < tmp.length;j++){
					var rowData = $(this).getRowData(tmp[j]);	
					if(rowData["idnhanvien"]==<?=$_SESSION['user']['id_user']?>){
						$(this).jqGrid('setSelection', tmp[j], true);
					}
				}*/
            },
        });
        $(elem).jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});
        $(elem).jqGrid('bindKeys', {});
    }

function load_select(){
	window.nhom = $.ajax({url: 'resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_nhom', async: false, success: function(data, result) {if (!result) alert('Không load được danh mục');}}).responseText;	
	
}
</script>