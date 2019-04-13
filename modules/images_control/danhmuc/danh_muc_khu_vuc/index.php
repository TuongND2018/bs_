<!--<link rel="stylesheet" href="../../../css/form_css.css" type="text/css" media="screen"/>-->
<body> 
	<div id="grid_phong_ban">      	 
          <table id="rowed3" ></table>
            <div id="prowed3"></div>   
    </div>    
</body>
</html> 

<script type="text/javascript">
jQuery(document).ready(function() {	

	//dialog_button();	
	var lastsel; 	
	load_phong_ban(false); 
	create_grid();			 
	shortcut_key();		
	jQuery(window).resize(function() {		 
	 $("#rowed3").setGridWidth($(window).width()-20);
	 $("#rowed3").setGridHeight($(window).height()-$("#form_danh_muc_khu_vuc").height()-105);
	}); 
		
		//$('#prowed3_center table tr').append("<td>Phis</td>");
		
		 
		
})
 //$("#@Model.Id").trigger('reloadGrid', [{page:1}]);
	
 
 
 
function create_grid(){	
	 $("#rowed3").jqGrid({
		url:'resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_khu_vuc&q=2',
		datatype: "json",	
		colNames:['Id','Tên Khu vực','Mô tả','Sử dụng','STT','Tầng lầu'],
		colModel:[
			{name:'ID_PhongBan',index:'ID_PhongBan',search:false, width:"2%", editable:false,align:'right',hidden:true}, 
			{name:'TenKhuVuc',index:'TenKhuVuc', width:"17%", editable:true,align:'left',hidden:false,editrules: {required:true},edittype:"text",formoptions:{},sorttype:'text'},					 
			{name:'MoTa',index:'MoTa',search:false, width:"20%", editable:true,align:'center',hidden:false,edittype:"textarea",formoptions:{}}, 			
			{name:'Active',index:'Active',search:false, width:"5%", editable:true,align:'center',edittype:"checkbox",editoptions: {value:"1:0"},formatter:"checkbox",formatoptions:{"disabled":true},hidden:false,}, 
			{name:'STT',index:'STT', width:"17%", editable:true,align:'left',hidden:false,editrules: {required:true},edittype:"text",formoptions:{}},	
			{name:'TANGLAU',index:'TANGLAU', width:"17%", editable:true,align:'left',hidden:false,editrules: {required:true},edittype:"text",formoptions:{}},	 	 	 
		],
		loadonce: false,
		scroll: false,		 
		modal:true,	 	 
		rowNum: 30,
		rowList:[30,50,70],
		pager: '#prowed3',
		sortname: 'Tenkhuvuc',
		height:100,
		width:100,
		viewrecords: true,	
		ignoreCase:true,
	//hoverrows:false,
	//jsonReader:{repeatitems:true,subgrid:{repeatitems:false}},	
		sortorder: "asc",
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
			//$("#rowed3").setColProp('ID_PhongBanCha', { editoptions: { value: ""} });				 
		},
	  
		caption: "Danh mục phòng ban"
	});
	
	$("#rowed3").jqGrid('navGrid',"#prowed3",{add: permission["add"],addtext: 'Thêm mới (F6)',edittext: 'Sửa (F7)',
    deltext: 'Xóa (F8)',searchtext: 'Tìm kiếm (F9)',refreshtext: 'Tải lại (F10)', edit: permission["edit"], del: permission["delete"], search: permission["search"],closeAfterEdit: true,clearAfterAdd :true,navkeys : [ true, 38, 40 ],closeOnEscape : true,}, //options						 
		{recreateForm:true,height:'auto',width:'auto',reloadAfterSubmit:false,url:'resource.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=edit',navkeys : [ true, 38, 40 ],closeOnEscape : true,modal: true,
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
					/*var mota=$("#tr_MoTa").html();
					$("#tr_MoTa").html("");
					var congty=$("#tr_ID_CongTy").html();
					$("#tr_ID_CongTy").html("");
					$("#tr_ID_CongTy").html(mota);
					$("#tr_MoTa").html(congty);*/					
					xuongdong(formid);
					lendong(formid);							 
				},
				onClose : function(formid){
					$("#editmodrowed3").css("box-shadow","");										
				}
							  
		}, // edit options
		{recreateForm:true,height:'auto',width:'auto',reloadAfterSubmit:false,url:'resource.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=add',closeOnEscape : true,closeAfterAdd:false,modal: true,addedrow: "first"
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
						re_create_grid();								
					};						
					return [success,new_id];
				},
				afterComplete : function (response, postdata, formid) {
					temp = String(response.responseText).split(";");					 					
					$("#jqg"+window.id_rowed3).attr("id",$.trim(temp[1]));
					$("#"+$.trim(temp[1]+"> td")).trigger("click");					
					window.id_rowed3++; 
					load_phong_ban(true);
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
					xuongdong(formid);
					lendong(formid);	
					parent.postMessage("table","*"); 	 
			 	},
				onClose : function(formid){
					$("#editmodrowed3").css("box-shadow","");
					load_phong_ban(); 				 					
				}
		}, // add options							  
		{reloadAfterSubmit:false,url:'resource.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=del',	navkeys : [ true, 38, 40 ],closeOnEscape : true,	
				afterSubmit : function(response, postdata) { 				
							if(response.responseText==0){
								var success=false;
								var new_id="Xóa liệu không thành công";													
							}else{
								tooltip_message("Xóa dữ liệu thành công");
								var success=true;	
								var new_id="Xóa dữ liệu thành công";
								load_phong_ban(true);								
							};						
							return [success,new_id] ;
				}		
		}, // del options
		{reloadAfterSubmit:true,height:250,width:600,sopt: ["cn"],url:'resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_khu_vuc&q=2',navkeys : [ true, 38, 40 ],closeOnEscape : true,
				/*beforeShowSearch:function(formid){				
				}*/ // search options		
		} // search options						 
							  
	);	 					  
	$("#rowed3").setGridWidth($(window).width()-20);
	$("#rowed3").setGridHeight($(window).height()-$("#form_danh_muc_phong_ban").height()-105);
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
function load_phong_ban(status){
	window.phongban = $.ajax({url: 'resource.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=0&tables=DM_PhongBan&id=ID_PhongBan&name=TenPhongBan', async: false, success: function(data, result) {if (!result) alert('Không load được danh mục phòng ban');}}).responseText;
	window.khuvuc = $.ajax({url: 'resource.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=0&tables=DM_KhuVuc &id=ID_KhuVuc&name=TenKhuVuc', async: false, success: function(data, result) {if (!result) alert('Không load được danh mục phòng ban');}}).responseText;
	window.congty = $.ajax({url: 'resource.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=0&tables=DM_CongTy &id=ID_CongTy&name=TenCongTy', async: false, success: function(data, result) {if (!result) alert('Không load được danh mục phòng ban');}}).responseText;
	if(status==true){
		$("#rowed3").setColProp('ID_PhongBanCha', { editoptions: { value: phongban} });
		$("#rowed3").setColProp('ID_KhuVuc', { editoptions: { value: khuvuc} });
		$("#rowed3").setColProp('ID_CongTy', { editoptions: { value: congty} });
	}	
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
function re_create_grid(){
	//$("#rowed3").GridUnload();
	//$("#gbox_rowed3").remove();
	//$("#grid_phong_ban").append('<table id="rowed3" ></table><div id="prowed3"></div> ');
	//create_grid();	
}
 
</script>