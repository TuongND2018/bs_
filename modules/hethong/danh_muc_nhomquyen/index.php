<!--<link rel="stylesheet" href="../../../css/form_css.css" type="text/css" media="screen"/>-->

<style>
#parent1,#OpenType1, #TenControl1,#ID_Form1{
	max-width: 266px;

}

#dialog_dm_nhomnguoidung {
			/*
			 *	THIS HACK FIXES A DIALOG BOX POSITIONING BUG
			 *	prevents incorrect top/left values that are applied from taking effect
			 *	This page now uses a patched version of UI 1.8.1, so this hack no longer required
			 *	SEE UI Ticket #5662 - http://dev.jqueryui.com/ticket/5662#comment:3 
			top:		0 !important;
			left:		0 !important;
			 */
			/* background:	#AFA; DEBUGGING */
			position:	relative;
			}

</style>
<body> 
	<div id="grid_phong_ban">      	 
      <div id="prowed3"></div>   
     <table id="rowed3" ></table>
    
    </div>         

    <div id="dialog_dm_nhomnguoidung"  >

             <div style="display:table-cell">
                    <table id="rowed4"></table>        
                    <div id="prowed4"></div>
            </div>
            <div id='center' style="display:table-cell;vertical-align: middle" >
            <a style="margin-left:0px;width:58px;   margin-bottom:1px;" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only fm-button-icon-left" id="coquyen" href="#">Thêm<span  class="ui-icon ui-icon-circle-arrow-e"></span></a>
            <a style="margin-left:0px;width:58px;   margin-bottom:1px;" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only fm-button-icon-left" id="kocoquyen" href="#">Xóa<span  class="ui-icon ui-icon-circle-arrow-w"></span></a>
            </div>
            
            
            <div style="display:table-cell">
                    <table id="rowed5" >	</table>
                   <!--/* <div id="prowed5"></div>*/-->
            </div>
            <div >
             <a style=" margin-left:598px;width:58px;   margin-bottom:-35px;" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only fm-button-icon-left" id="luu" href="#">Lưu  <span  class="ui-icon  ui-icon-circle-check"></span></a>
            </div>												
        </div>

  
</body>
</html> 

<script type="text/javascript">
jQuery(document).ready(function() {	

	$('#coquyen,#kocoquyen,#luu').button({
		});

window.coquyen=new Array;
window.kocoquyen=new Array;
window.mangcheck=new Array;
function get_parent(parent){
	danhdau=0;
	var rowData = jQuery('#rowed4').getRowData(parent);	
	
	
	if((rowData['parent']!="NULL")){
		tam=jQuery('#rowed4').jqGrid('getNodeParent', rowData);
		rowData1 = jQuery('#rowed4').getRowData(tam['ID_Control']);	
		rowData1['check']="No";		
			for(var i=0;i<coquyen.length;i++) {
				danhdau=0
				 if (coquyen[i]['ID_Control'] == rowData1['ID_Control']){				
					 danhdau=1
					 break;
				 }
				
			}	
			 if(danhdau==0){
					 coquyen.push(rowData1);	
			 }	
		get_parent(rowData['parent'])
	}
}


function get_parent1(parent){
	
	var rowData = jQuery('#rowed4').getRowData(parent);	
	
	
	if((rowData['parent']!="NULL")){
		tam=jQuery('#rowed4').jqGrid('getNodeParent', rowData);
		rowData1 = jQuery('#rowed4').getRowData(tam['ID_Control']);	
		rowData1['check']="No";		
			
					 mangcheck.push(rowData1);	
				
		get_parent(rowData['parent'])
	}
}





$('#coquyen').click(function(e){
	id_parent=-1;
	coquyen = [];
	 ids=$('#rowed4').jqGrid('getDataIDs');		
	
				 for(i=0;i<ids.length;i++){		
				 var rowData = jQuery('#rowed4').getRowData(ids[i]);	
					if(rowData['check']=='Yes'){	
					rowData['check']='No';
					coquyen.push(rowData);	
					get_parent(ids[i])	
					}					   
				}
		coquyen = coquyen.sort(function(a,b) {
  return a['level'] < b['level'];
});
	
    for(i=0;i<coquyen.length;i++){	
	  for(var y=0;y<data_rowed5.length;y++) {
				danhdau=0
				 if (coquyen[i]['ID_Control'] == data_rowed5[y]['ID_Control']){				
					 danhdau=1
					 break;
				 }
			}	
			 if(danhdau==0){
					 data_rowed5.push(coquyen[i]);	
					//alertObject( data_rowed5)
			 }	
	 }
    $("#rowed5").jqGrid('setGridParam',{datatype: "jsonstring" ,datastr:data_rowed5}).trigger('reloadGrid');
	$("#rowed5").SortTree(-1);
 for(i=0;i<coquyen.length;i++){	
for(var y=0;y<data_rowed4.length;y++) {
				 if ((coquyen[i]['ID_Control'] == data_rowed4[y]['ID_Control'])){	
					 rowData2=$('#rowed4').jqGrid('getLocalRow', data_rowed4[y]['ID_Control']),
					 //Check tree có phần tử con không
	 				 tam2=jQuery('#rowed4').jqGrid('getNodeChildren', rowData2);
					 //Nếu trống thì xóa phần tử cha
					if(tam2==''){
					$('#rowed4').jqGrid('delTreeNode', data_rowed4[y]['ID_Control']);
					}
				 }
			}				 
	 }
	 $("#rowed4").trigger('reloadGrid');
	})



$('#kocoquyen').click(function(e){
	mangcheck=[];
	kocoquyen=[];
	var  ids=$('#rowed5').jqGrid('getDataIDs');	
	  for(var i=0;i<ids.length;i++){		
				 var rowData = jQuery('#rowed5').getRowData(ids[i]);	
					if(rowData['check']=='Yes'){	
					rowData['check']='No';
					kocoquyen.push(rowData);					
					}					   
		}
		kocoquyen = kocoquyen.sort(function(a,b) {
		  return a['level'] > b['level'];
		});		
		 for(var i=0;i<kocoquyen.length;i++){			 
		 	 rowData1=$('#rowed5').jqGrid('getLocalRow', kocoquyen[i]['ID_Control']),	
		 	 mangcheck.push(rowData1); 	  	 		
			 get_children(kocoquyen[i]['ID_Control']);
		 }
		  for(var y=0;y<mangcheck.length;y++){	
		  $('#rowed5').jqGrid('delTreeNode', mangcheck[y]['ID_Control']);
		  }
	})

//Lưu bảng có quyền------------------------

$('#luu').click(function(e){	
var tam=jQuery("#rowed5").jqGrid('getRowData');
tam=JSON.stringify(tam) ;
tam='{"id":'+tam+'}';
tam=jQuery.parseJSON(tam)
	  $.post('resource.php?module=<?=$modules?>&view=<?=$view?>&action=save_quyen&id='+id_sel,tam);	  
	  tooltip_message("Lưu dữ liệu thành công");  
	 
	})

//-------------------------------------------------------------
					$("#dialog_dm_nhomnguoidung").dialog({
					//	var myGrid = $('#rowed3'),
					//	var selRowId = myGrid.jqGrid ('getGridParam', 'selrow'),
					//	var celValue = myGrid.jqGrid ('getCell', selRowId, 'TenNhomQuyen');
						//celValue = "Danh sách quyền nhân viên: " + celValue;					
						//$('#rowed3').jqGrid('setCaption', celValue);
						
						
						
					autoOpen:false,
					height:Math.floor($('body').height()  * .80),
					width:Math.floor($('body').width() * .95),
					modal:false,
					title:'Phân quyền nhóm người dùng:',
					stack: true,
					open: function(event, ui){
								
					},
					
					});	
	
	
	//load_phong_ban();
	create_nhomquyennhanvien('[]');
	create_nhomquyencontrol('[]');

	var lastsel; 	
	window.dm_control=":;"+window.dm_control;	
	create_grid();			 
	shortcut_key();		
	jQuery(window).resize(function() {		 
	 $("#rowed3").setGridWidth($(window).width()-20);
	 $("#rowed3").setGridHeight($(window).height()-$("#form_danh_muc_loai_lich").height()-105);
	});
	
		phanquyen();
		
})
function create_grid(){	
	 $("#rowed3").jqGrid({
		url:'resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_control',
		datatype: "json",	
		colNames:['Nhóm Người Dùng','Mô Tả'],
    	colModel:[
		//{name:'ID_NhomQuyen',index:'ID_NhomQuyen', width:"1%",editrules: {required:true}, editable:true,align:'left',hidden:true,}, 
  		{name:'TenNhomQuyen',index:'TenNhomQuyen', width:"1%",editrules: {required:true}, editable:true,align:'left',hidden:false,search: false}, 		
		{name:'MoTa',index:'MoTa', editrules: {required:true},width:"3%", editable:true,align:'left',hidden:false,search: false}, 		
				 
   	],	
		loadonce: false,
		scroll: false,		 
		modal:true,	 	 
		rowNum: 1000,
		rowList:[],
		pginput:false,
		pgbuttons:false,
		pager: '#prowed3',
		sortname: 'ID_NhomQuyen',
		height:100,
		width:100,
		viewrecords: false,	
		ignoreCase:true,
		

	//hoverrows:false,
	//jsonReader:{repeatitems:true,subgrid:{repeatitems:false}},	
	//	sortorder: "asc",
		serializeRowData: function (postdata) { 		 	
			//$("#rowed3").trigger("reloadGrid");		
			//return postdata;
		},
		onSelectRow: function(id){		  
		  //$("#rowed4").jqGrid().setGridParam({url:'data2_tam.php?id='+lastsel}).trigger("reloadGrid");	
		
		},
		ondblClickRow: function (rowId, rowIndex, columnIndex) {
			$(".ui-icon-pencil").trigger('click'); 
 		},
		loadComplete: function(data) {	
					
			if(typeof(window.parent11)!="undefined"){			 
				tam=$('tr.rowed3ghead_0:has(td:contains("'+window.parent11+'"))').attr("id");			 
				jQuery('#rowed3').jqGrid('groupingToggle',tam)	
				jQuery('#rowed3').jqGrid("setSelection",window.id_return, true);	
				jQuery('#rowed3 #'+window.id_return).focus();
				
				 
			}
		},
	  
		caption: "Danh mục nhóm quyền"
	});
	
					
	$("#rowed3").jqGrid('navGrid',"#prowed3",{add: permission["add"],addtext: 'Thêm mới (F6)',edittext: 'Sửa (F7)',
    deltext: 'Xóa (F8)', edit: permission["edit"], del: permission["delete"], search: permission["search"],search:false, refresh: false,closeAfterEdit: true,clearAfterAdd :true,closeOnEscape : true,},	
	
	//Sửa
		{recreateForm:true,height:'auto',width:'auto',reloadAfterSubmit:false,url:'resource.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=edit',closeOnEscape : true,modal: true,recreateForm: true,
			   afterSubmit : function(response, postdata) { 
				  	if(response.responseText==1){
						var success=false;
						var new_id="Sửa dữ liệu không thành công";													
					}else{
						tooltip_message("Sửa dữ liệu thành công");
						var success=true;	
						var new_id="Sửa dữ liệu thành công";								
					};						
					return [success,new_id] ;					   
				},
				beforeShowForm: function(formid){					 
					canhgiua(formid)								  
				},
				afterShowForm : function (formid) {
					xuongdong(formid);
					lendong(formid);	
					autocompleted_combobox("#parent");					
					autocompleted_combobox("#ID_Form");
					autocompleted_combobox("#OpenType");							 
				},
				onClose : function(formid){
					$("#editmodrowed3").css("box-shadow","");										
				}
							  
		}, // edit options
		{height:'auto',width:'auto',reloadAfterSubmit:false,url:'resource.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=add',closeOnEscape : true,closeAfterAdd:false,modal: true,addedrow: "first",recreateForm:true
				,afterSubmit : function(response, postdata){
					temp = String(response.responseText).split(";");				 
					if(temp[0]==1){
						var success=false;
						var new_id="Lưu dữ liệu không thành công";													
					}else{
						tooltip_message("Lưu dữ liệu thành công");						
						var success=true;	
						var new_id="Lưu dữ liệu thành công";
						//load_phongban_cha()
													
					};						
					return [success,new_id];
				},
				afterComplete : function (response, postdata, formid) {
					temp = String(response.responseText).split(";");					 					
					$("#jqg"+window.id_rowed3).attr("id",$.trim(temp[1]));					
					$("#"+$.trim(temp[1])).trigger("click");					
					window.id_rowed3++; 
					window.id_return=$.trim(temp[1])
					window.parent11=$("#parent1").val();
					$("#rowed3").trigger("reloadGrid");						
					
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
								xuongdong(formid)
								lendong(formid)	
								autocompleted_combobox("#parent");	 							
								autocompleted_combobox("#ID_Form");
								autocompleted_combobox("#OpenType");
												
					
			 	},
			
				
				onClose : function(formid){
					$("#editmodrowed3").css("box-shadow","");
					
				}
		}, // add options		
	
				  
		{reloadAfterSubmit:false,url:'resource.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=del',navkeys : [ true, 38, 40 ],
		closeOnEscape : true,	
				beforeShowForm : function(formid) {canhgiua_del(formid);}	,
				afterSubmit : function(response, postdata) { 				
							if(response.responseText==1){
								var success=false;
								var new_id="Xóa liệu không thành công";													
							}else{
								tooltip_message("Xóa dữ liệu thành công");
								var success=true;	
								var new_id="Xóa dữ liệu thành công";
																
							};						
							return [success,new_id] ;
				},
				
				
		}, // del options
		
		{reloadAfterSubmit:true,height:250,width:600,sopt: ["cn"],url:'resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_control',navkeys : [ true, 38, 40 ],closeOnEscape : true,
					
		} // search options						 
							  
	);	 	
	$("#rowed3").jqGrid('navButtonAdd', '#prowed3', {caption: "Phân chia người dùng cho nhóm", buttonicon: 'ui-icon-document',
            onClickButton: function() {
					
				if ($("#dialog_dm_nhomnguoidung").dialog( "isOpen" )===false)
				{
			        id_sel=$('#rowed3').jqGrid('getGridParam', 'selrow')
					//ids=$('#rowed5').jqGrid('getDataIDs')
					$("#dialog_dm_nhomnguoidung").dialog( "open" );
					$.post('resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_nhom_khongcoquyen&id='+id_sel).done(function(data)
							{
								if($.trim(data)=='null'){
									data='[]';
								}
								//alert(data);
								window.data_rowed4=jQuery.parseJSON(data); 
								
								$("#rowed4").jqGrid('setGridParam',{datatype: "jsonstring" ,datastr:data}).trigger('reloadGrid');	
							})

					$.post('resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_nhom_coquyen&id='+id_sel).done(function(data){
						if($.trim(data)=='null'){
									data='[]';
								}
								//alert(data);
								window.data_rowed5=jQuery.parseJSON(data); 
								//data=jQuery.parseJSON(data);
								
								$("#rowed5").jqGrid('setGridParam',{datatype: "jsonstring" ,datastr: data}).trigger('reloadGrid');	
								$("#rowed5").SortTree(-1);
							}
					)
										
				}
									
				if(id_sel==null)
				{				
					 tooltip_message("Bạn chưa chọn nhóm quyền.");
					$("#dialog_dm_nhomnguoidung").dialog( "close" );
				}
					      
            },
           
    });
					  
	$("#rowed3").setGridWidth($(window).width()-20);
	$("#rowed3").setGridHeight($(window).height()-$("#form_danh_muc_loai_lich").height()-105);
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
		 
		 
		
};
function shortcut_key(){
	jwerty.key('f6', false);jwerty.key('f7', false);jwerty.key('f8', false);jwerty.key('f9', false);jwerty.key('f10', false);
		$('body').bind('keydown', function (e) {		
			if (jwerty.is('f6',e)) {
				 $(".ui-icon-plus").trigger("click");				 
			}
		});
		$('body').bind('keydown', function (e) {		
			if (jwerty.is('f7',e)) {
				 $(".ui-icon-pencil").trigger("click");				 
			}
		});
		$('body').bind('keydown', function (e) {		
			if (jwerty.is('f8',e)) {
				 $(".ui-icon-trash").trigger("click");				 
			}
		});
		$('body').bind('keydown', function (e) {		 
			if (jwerty.is('f9',e)) {
				 $(".ui-icon-search").trigger("click");				 
			}
		});
		$('body').bind('keydown', function (e) {		 
			if (jwerty.is('f10',e)) {
				 $(".ui-icon-refresh").trigger("click");				 
			}
		});
}

function create_nhomquyennhanvien(datalocal){ 
	 datalocal=jQuery.parseJSON(datalocal);  
	   $("#rowed4").jqGrid({
	  datastr:datalocal,	
	  datatype: "jsonstring" ,
		colNames:['','Tên nhóm quyền','Parent','','Kieu Control'],
    	colModel:[
		{name:'check',index:'check', width:"4%",formatter:'checkbox',formatoptions:{disabled: false}}, 
  		{name:'Caption',index:'Caption', width:"50%",editrules: {required:true}, editable:true,align:'left',hidden:false,search: false,parent: "null"}, 		
		{name:'ID_Parent',index:'ID_Parent', editrules: {required:true},width:"20%", editable:true,align:'left',hidden:false,search: false},
		{name:'ID_Control',index:'TenControl', editrules: {required:true},width:"3%", editable:true,align:'left',hidden:true,search: false,key:true}, 		
		{name:'KieuControl',index:'KieuControl', editrules: {required:true},width:"20%", editable:true,align:'left',hidden:false,search: false}, 		 
   	],	
		 height: 'auto',
		 loadonce: true,
                gridview: true,
                rowNum: 10000,
                sortname: 'ID_Control',
                treeGrid: true,
                treeGridModel: 'adjacency',
               // treedatatype: "local",
                ExpandColumn: 'Caption',

				
                caption: "Danh sách nhóm chưa có quyền",
                jsonReader: {
                    repeatitems: false,
                    root: function (obj) { return obj; },
                    page: function (obj) { return 1; },
                    total: function (obj) { return 1; },
                    records: function (obj) { return obj.length; }
                },
				loadComplete: function(data) {	
					
					ids=$('#rowed4').jqGrid('getDataIDs');	
					for(var i=0;i<=ids.length-1;i++){
						$('#rowed4 #'+ids[i]+' input').bind('click',function(e){
							if($(e.target).is(':checked')){
								var tthai4=true;
							}
							else{
								var tthai4=false;
							}
							var id_tam=$(e.target).closest('tr.jqgrow').attr('id');
							get_children_check(id_tam,'#rowed4',tthai4)
							})
					}
				},

		
	});
		

						  
	$("#rowed4").setGridWidth( (($( "#dialog_dm_nhomnguoidung" ).dialog( "option", "width" ))/2)-60);
	$("#rowed4").setGridHeight($( "#dialog_dm_nhomnguoidung" ).dialog( "option", "height" )-150);
	$("#rowed4").jqGrid('bindKeys', {"onEnter":function( rowid ) {
		} } );	
	
		 
		 
		
};

function create_nhomquyencontrol(datalocal){ 
	 datalocal=jQuery.parseJSON(datalocal);  
	   $("#rowed5").jqGrid({
	  datastr:datalocal,	
	  loadonce: true,
	  datatype: "jsonstring" ,
		colNames:['','Tên nhóm quyền','Parent','','Kieu Control'],
    	colModel:[
		//{name:'ID_NhomQuyen',index:'ID_NhomQuyen', width:"1%",editrules: {required:true}, editable:true,align:'left',hidden:true,}, 
		{name:'check',index:'check', width:"4%",formatter:'checkbox',formatoptions:{disabled: false}}, 
  		{name:'Caption',index:'Caption', width:"50%",editrules: {required:true}, editable:true,align:'left',hidden:false,search: false,parent: "null"}, 		
		{name:'ID_Parent',index:'ID_Parent', editrules: {required:true},width:"20%", editable:true,align:'left',hidden:false,search: false},
		{name:'ID_Control',index:'TenControl', editrules: {required:true},width:"3%", editable:true,align:'left',hidden:true,search: false,key:true}, 		
		{name:'KieuControl',index:'KieuControl', editrules: {required:true},width:"20%", editable:true,align:'left',hidden:false,search: false}, 		
				 
   	],	
		 height: 'auto',
		 loadonce: true,
                gridview: true,
                rowNum: 10000,
                sortname: 'ID_Control',
                treeGrid: true,
                treeGridModel: 'adjacency',
              //  treedatatype: "local",
                ExpandColumn: 'Caption',			
                caption: "Danh sách nhóm đã có quyền",
				pager: '#prowed5',
              

		
		serializeRowData: function (postdata) { 		 	
			//$("#rowed3").trigger("reloadGrid");		
			//return postdata;
			
		},
		
		onSelectRow: function(id){		  
		  //$("#rowed4").jqGrid().setGridParam({url:'data2_tam.php?id='+lastsel}).trigger("reloadGrid");	
		
		},
		ondblClickRow: function (rowId, rowIndex, columnIndex) {
			$(".ui-icon-pencil").trigger('click'); 
 		},	
		loadComplete: function(data) {	
			ids5=$('#rowed5').jqGrid('getDataIDs');						
			for(var i=0;i<=ids5.length-1;i++){
				$('#rowed5 #'+ids5[i]+' input').bind('click',function(e){		
						if($(e.target).is(':checked')){
							var tthai=true;
						}
						else{
							var tthai=false;
						}
					var id_tam5=$(e.target).closest('tr.jqgrow').attr('id');					
					get_children_check(id_tam5,'#rowed5',tthai)
				})
			}
		},	
		  
		caption: "Danh sách nhóm đã có quyền",
	});
						
	$("#rowed5").jqGrid('navGrid',"#prowed5",{add: permission["add"],addtext: 'Thêm mới (F6)',edittext: 'Sửa (F7)',
    deltext: 'Xóa (F8)', edit: permission["edit"], del: permission["delete"], search: permission["search"], refresh: false,closeAfterEdit: true,clearAfterAdd :true,closeOnEscape : true,},	
	
	//Sửa
		{recreateForm:true,height:'auto',width:'auto',reloadAfterSubmit:false,url:'resource.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=edit',closeOnEscape : true,modal: true,recreateForm: true,
			   afterSubmit : function(response, postdata) { 
				  	if(response.responseText==1){
						var success=false;
						var new_id="Sửa dữ liệu không thành công";													
					}else{
						tooltip_message("Sửa dữ liệu thành công");
						var success=true;	
						var new_id="Sửa dữ liệu thành công";								
					};						
					return [success,new_id] ;					   
				},
				beforeShowForm: function(formid){					 
					canhgiua(formid)								  
				},
				afterShowForm : function (formid) {
					xuongdong(formid);
					lendong(formid);	
					autocompleted_combobox("#parent");					
					autocompleted_combobox("#ID_Form");
					autocompleted_combobox("#OpenType");							 
				},
				onClose : function(formid){
					$("#editmodrowed4").css("box-shadow","");										
				}
							  
		}, // edit options
				
		{reloadAfterSubmit:true,height:250,width:600,sopt: ["cn"],url:'resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_control',navkeys : [ true, 38, 40 ],closeOnEscape : true,
					
		} // search options						 
							  
	);	 	
						  
	$("#rowed5").setGridWidth((($( "#dialog_dm_nhomnguoidung" ).dialog( "option", "width" ))/2)-60);
	$("#rowed5").setGridHeight($( "#dialog_dm_nhomnguoidung" ).dialog( "option", "height" )-150);
	$("#rowed5").jqGrid('bindKeys', {"onEnter":function( rowid ) {
		} } );	
		$("#gbox_rowed5").attr("tabindex","1");
		//$("#gbox_rowed3").focus();	
		$("#gbox_rowed5").bind('keydown', function(e) {			
			if((jwerty.is("ctrl+m",e))){		 
				 $("#rowed5").jqGrid('restoreRow', lastsel);
				 $("#rowed5").jqGrid('editRow', rowid, true);
				 lastsel = rowid;
			}
		})
		 
		 
		
};

function get_children_check(parent,grid,tthai){

	var rowData=$(grid).jqGrid('getLocalRow', parent),
	tam=jQuery(grid).jqGrid('getNodeChildren', rowData);		
		for(var i=0;i<tam.length;i++) {		
		$(grid+' #'+tam[i]['ID_Control']+' input').prop('checked', tthai);		
		}
		for(var y = 0, count =tam.length; y < count; y++) {       
		get_children_check(tam[y]['ID_Control'],grid,tthai);	
		}
		
		
		
}
function get_children(parent){
	var rowData=$('#rowed5').jqGrid('getLocalRow', parent),
	tam=jQuery('#rowed5').jqGrid('getNodeChildren', rowData);
	//alertObject(tam);
		for(var i=0;i<tam.length;i++) {			
			mangcheck.push(tam[i]);			
		}
		for(var y=0;y<tam.length;y++) {
			get_children(tam[y]['ID_Control']);			
		}
}

</script>