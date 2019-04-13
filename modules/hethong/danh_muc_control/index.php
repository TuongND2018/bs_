<!--<link rel="stylesheet" href="../../../css/form_css.css" type="text/css" media="screen"/>-->

<style type="text/css">
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
#tree-grid .cell-wrapper
{
    font-weight: bold;
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

	 function get_level(level){
		 
	 }
	load_select();
	load_select_ID_form();
	var lastsel; 	
	window.dm_control=":;"+window.dm_control;	
			 
	shortcut_key();		
	jQuery(window).resize(function() {		 
	 $("#rowed3").setGridWidth($(window).width()- 20);
	 $("#rowed3").setGridHeight($(window).height()-$("#form_danh_muc_loai_lich").height()-100);
	});
	
		$.post('resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_control').done(function(data)
		{
			create_grid(data);	
								
		})
		
})
function create_grid(datalocal){ 
	 datalocal=jQuery.parseJSON(datalocal);  
	//  alertObject(datalocal)
	   $("#rowed3").jqGrid({
	  datastr:datalocal,	
	
	  datatype: "jsonstring" ,	
	//	colNames:['ID_Control','Tên Control','Menu Cha','Caption','ID_Form','Kiểu Nút','Kiểu Control','Icon','Active','STT','Đường dẫn Folder','Kiểu mở','Mở nhiều Tab','Phím Tắt'],
		colNames:['ID_Control','Caption','ID_Parent','TenControl','ID_Form','Kiểu Nút','Kiểu Control','Icon','Active','STT','Đường dẫn Folder','Kiểu mở','Mở nhiều Tab','Phím Tắt'],
    	colModel:[
		{name:'ID_Control',index:'ID_Control', width:"1%", align:'left',hidden:true,formatter:"select",edittype:"select",key:true,search: true,},		
		{name:'Caption',index:'Caption', width:"3%",editrules: {required:true}, editable:true,align:'left',hidden:false,search: true,},		
		{name:'ID_Parent',index:'ID_Parent', width:"2%",editrules: {required:true}, editable:true,align:'left',hidden:false,formatter:"select",edittype:"select",editoptions:{ value: dm_control},search: true,}, 				
		{name:'TenControl',index:'TenControl', editrules: {required:true},width:"3%", editable:true,align:'left',hidden:false,search: true,}, 		
		{name:'ID_Form',index:'ID_Form',width:"1%",editrules: {required:true}, editable:true,align:'left',hidden:false,formatter:"select",edittype:"select",editoptions:{ value: dm_ID_Form},search: true,}, 		 
		{name:'IsBarButton',index:'IsBarButton', width:"1%",editrules: {required:true}, editable:true,align:'left',hidden:false,editrules:{required:true},edittype:"select",editoptions:{ value: '0:0;1:1'},align:'left',search: true,},
		{name:'KieuControl',index:'KieuControl', width:"2%",editrules: {required:true}, editable:true,align:'left',editrules: {required:true},edittype:"select",editoptions:{ value: 'MenuCap1:MenuCap1;MenuCap2:MenuCap2;Button:Button;Rmenu:Rmenu'},index:'OpenType', width:"1%", editable:true,align:'left',hidden:false,search: true,},		
		{name:'Icon',index:'Icon', width:"1%", editable:true,align:'left',hidden:false,search: true,},
		{name:'Active',index:'Active', width:"1%",editrules: {required:true}, editable:true,align:'left',hidden:false,editrules:{required:true},edittype:"select",editoptions:{ value: '1:True;0:False'},align:'left',hidden:false,search: true,},
		{name:'STT',index:'STT', width:"1%", editable:true,align:'left',hidden:false,search: true,},
		{name:'PageOpen',index:'PageOpen', width:"2%", editable:true,align:'left',hidden:false,search: true,},
		{name:'OpenType',index:'OpenType', formatter:"select",edittype:"select",editoptions:{ value: '0:Mở tab;1:Mở popup'},width:"1%", editable:true,align:'left',hidden:false,search: true,},	
		{name:'ChoPhepMoNhieuTab',index:'ChoPhepMoNhieuTab', width:"1%",editrules: {required:true}, editable:true,align:'left',hidden:false,editrules:{required:true},edittype:"select",editoptions:{ value: '0:0;1:1'},align:'left',search: true,}, 
		{name:'PhimTat',index:'PhimTat', width:"1%", editable:true,align:'left',hidden:false,search: true,},
   	],	
		loadonce: false,
		scroll: false,		 
		modal:true,	 	 
		rowNum: 1000,
		rowList:[],
		pginput:false,
		pgbuttons:false,
		pager: '#prowed3',
		sortname: 'ID_Control',
		gridview: true,
		treeGrid: true,
   		treeGridModel: 'adjacency',         
 		ExpandColumn: 'Caption',	
		
	
				
		   jsonReader: {
                    repeatitems: false,
                    root: function (obj) { return obj; },
                    page: function (obj) { return 1; },
                    total: function (obj) { return 1; },
                    records: function (obj) { return obj.length; }
                },		
	
		
		serializeRowData: function (postdata) { 		 	
			
		},
		onSelectRow: function(id){		  
		
		
		},
		ondblClickRow: function (rowId, rowIndex, columnIndex) {
			$(".ui-icon-pencil").trigger('click'); 
 		},
	
   		loadComplete: function(data) {			
		/*alertObject(data)	
						*/	
						
							
				$("#rowed3").parents("tree-grid");	
					
		var ids = $('#rowed3').jqGrid('getDataIDs');			
			for (i = 0; i < data.length; i++) {		
				item = data[i];				
					if (item.level === 0) {								
						
						$('#rowed3').jqGrid('setCell',ids[i],"Caption","",{background:'#7be75a'});						
						$('#rowed3').jqGrid('setCell',ids[i],"ID_Parent","",{background:'#7be75a'});
						$('#rowed3').jqGrid('setCell',ids[i],"TenControl","",{background:'#7be75a'});
						$('#rowed3').jqGrid('setCell',ids[i],"ID_Form","",{background:'#7be75a'});
						$('#rowed3').jqGrid('setCell',ids[i],"IsBarButton","",{background:'#7be75a'});
						$('#rowed3').jqGrid('setCell',ids[i],"KieuControl","",{background:'#7be75a'});
						$('#rowed3').jqGrid('setCell',ids[i],"Icon","",{background:'#7be75a'});
						$('#rowed3').jqGrid('setCell',ids[i],"Active","",{background:'#7be75a'});
						$('#rowed3').jqGrid('setCell',ids[i],"STT","",{background:'#7be75a'});
						$('#rowed3').jqGrid('setCell',ids[i],"PageOpen","",{background:'#7be75a'});
						$('#rowed3').jqGrid('setCell',ids[i],"OpenType","",{background:'#7be75a'});
						$('#rowed3').jqGrid('setCell',ids[i],"ChoPhepMoNhieuTab","",{background:'#7be75a'});
						$('#rowed3').jqGrid('setCell',ids[i],"PhimTat","",{background:'#7be75a'});
						}
					else if (item.level === 1 ){								
						
						$('#rowed3').jqGrid('setCell',ids[i],"Caption","",{background:'#DDDDDD'});
						$('#rowed3').jqGrid('setCell',ids[i],"ID_Parent","",{background:'#DDDDDD'});
						$('#rowed3').jqGrid('setCell',ids[i],"TenControl","",{background:'#DDDDDD'});
						$('#rowed3').jqGrid('setCell',ids[i],"ID_Form","",{background:'#DDDDDD'});
						$('#rowed3').jqGrid('setCell',ids[i],"IsBarButton","",{background:'#DDDDDD'});
						$('#rowed3').jqGrid('setCell',ids[i],"KieuControl","",{background:'#DDDDDD'});
						$('#rowed3').jqGrid('setCell',ids[i],"Icon","",{background:'#DDDDDD'});
						$('#rowed3').jqGrid('setCell',ids[i],"Active","",{background:'#DDDDDD'});
						$('#rowed3').jqGrid('setCell',ids[i],"STT","",{background:'#DDDDDD'});
						$('#rowed3').jqGrid('setCell',ids[i],"PageOpen","",{background:'#DDDDDD'});
						$('#rowed3').jqGrid('setCell',ids[i],"OpenType","",{background:'#DDDDDD'});
						$('#rowed3').jqGrid('setCell',ids[i],"ChoPhepMoNhieuTab","",{background:'#DDDDDD'});
						$('#rowed3').jqGrid('setCell',ids[i],"PhimTat","",{background:'#DDDDDD'});
						}
					}		
					
		},
	  
		caption: "Danh mục Control"
	});
	
	$("#rowed3").jqGrid('navGrid',"#prowed3",{add: permission["add"],addtext: 'Thêm mới (F6)',edittext: 'Sửa (F7)',
    deltext: 'Xóa (F8)',searchtext: 'Tìm kiếm (F9)',refreshtext: 'Tải lại (F10)', edit: permission["edit"], del: permission["delete"], search: permission["search"],closeAfterEdit: true,clearAfterAdd :true,navkeys : [ true, 38, 40 ],closeOnEscape : true,}, //options						 
		{recreateForm:true,height:'auto',width:'auto',reloadAfterSubmit:false,url:'resource.php?module=<?=$modules?>&view=<?=$view?>&action=controller&hienmaloi=1&oper=edit',closeOnEscape : true,modal: true,recreateForm: true,
			   afterSubmit : function(response, postdata) { 
				  	if(response.responseText==1){
						var success=false;
						var new_id="<?php get_text1("sua_khongthanhcong") ?>";													
					}else{
						tooltip_message("<?php get_text1("sua_thanhcong") ?>");
						var success=true;	
						var new_id="<?php get_text1("sua_thanhcong") ?>";								
					};						
					return [success,new_id] ;					   
				},
				beforeShowForm: function(formid){					 
					canhgiua(formid);							  
				},
				afterShowForm : function (formid) {
					autocompleted_combobox("#ID_Parent");	
					xuongdong(formid);
					lendong(formid);					
					//$("#add_new").click(function(e){					  
					//  links='resource.php?module=danhmuc&view=danh_muc_thuoc&id_form=47&id_loai=undefined';
					//  elem=1 + Math.floor(Math.random() * 1000000000); 
					//  width=90;
					// height=90;     					
					// dialog_add_dm("Danh mục loại khám",width,height,elem,links,load_select1);   
					//}) 
				},
				onClose : function(formid){
					$("#editmodrowed3").css("box-shadow","");										
				}
							  
		}, // edit options
		
		 		
		{height:'auto',width:'auto',reloadAfterSubmit:false,url:'resource.php?module=<?=$modules?>&view=<?=$view?>&action=controller&hienmaloi=1&&oper=add',closeOnEscape : true,closeAfterAdd:false,modal: true,addedrow: "first",recreateForm:true
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
						 window.id_rowed3=2;
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
								autocompleted_combobox("#ID_Parent");	 							
								autocompleted_combobox("#ID_Form");
								autocompleted_combobox("#OpenType");
								
							var id = jQuery("#rowed3").jqGrid('getGridParam', 'selrow');
							if(id!==null)
							{
								$('#ID_Parent')	.val(id);
								$('#ID_Parent1').val($( "#ID_Parent option:selected" ).text());
							}
								
												
					$('#KieuControl').change(function () {
					
						var check = $('#KieuControl').val();										
						if(check == "Button")
						{							
							document.getElementById('PageOpen').disabled = true;
						    jQuery("#rowed3").jqGrid('getColProp', 'PageOpen').editrules = {required:false};
						}
						else
						{
							document.getElementById('PageOpen').disabled = false;
							jQuery("#rowed3").jqGrid('getColProp', 'PageOpen').editrules = {required:true};
						}
						
						
					})
			 	},
			
				
				onClose : function(formid){
					$("#editmodrowed3").css("box-shadow","");
					
				}
		}, // add options							  
		{reloadAfterSubmit:false,url:'resource.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=del',navkeys : [ true, 38, 40 ],closeOnEscape : true,	
				beforeShowForm : function(formid) {}	,
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
	
//	$("#rowed3").jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false,defaultSearch:"cn"});					  
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
		 		
}
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

function load_select(){
	window.dm_control = $.ajax({url: 'resource.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=2&tables=GD2_DM_Control&id=ID_Control&name=Caption', async: false, success: function(data, result) {if (!result) alert('Không load được danh mục phòng ban');}}).responseText;	
	$("#rowed3").setColProp('ID_Parent', { editoptions: { value: dm_control} });
	$('#ID_Parent').empty();
	create_select("#ID_Parent",dm_control);
	
}

	
function load_select_ID_form(){
	window.dm_ID_Form = $.ajax({url: 'resource.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=0&tables=GD2_DM_Form&id=ID_Form&name=TenDienGiai', async: false, success: function(data, result) {if (!result) alert('Không load được danh mục phòng ban');}}).responseText;	
	$("#rowed3").setColProp('ID_Form', { editoptions: { value: dm_ID_Form} });
	$('#ID_Form').empty();
	create_select("#ID_Form",dm_ID_Form);

	
}
 
</script>