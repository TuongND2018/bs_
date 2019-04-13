<!--<link rel="stylesheet" href="../../../css/form_css.css" type="text/css" media="screen"/>-->
<body> 
	<div id="grid_phong_ban">      	 
          <table id="rowed3" ></table>
            <div id="prowed3"></div>   
            <table id="list10_d"></table>
<div id="pager10_d"></div>
    </div>    
</body>
</html> 

<script type="text/javascript">
jQuery(document).ready(function() {
			/*$("body").bind("contextmenu",function(e){
			   return false;
			});*/ 	
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			eventer(messageEvent,function(e) {			 
			  if(e.data=='table'){
				 alert("chinh")
			  }			  
			},false);

	//dialog_none_button("Test",400,400)
	//dialog_none_button("Test1",400,400)
	//parent.postMessage("traodoi","http://192.168.1.24:81/giaidoan2/"); 
	var lastsel; 	
	load_phong_ban(false); 
	create_grid();			 
	shortcut_key();		
	jQuery(window).resize(function() {		 
	 $("#rowed3").setGridWidth($(window).width()-10);
	 $("#rowed3").setGridHeight($(window).height()-$("#form_danh_muc_phong_ban").height()-400);
	  $("#rowed3").setGridWidth($(window).width()-10);
	 $("#rowed3").setGridHeight($(window).height()-$("#form_danh_muc_phong_ban").height()-480);
	}); 
		
		//$('#prowed3_center table tr').append("<td>Phis</td>");
		
		 
		
})
 //$("#@Model.Id").trigger('reloadGrid', [{page:1}]);
	
 
 
 
function create_grid(){	
	 $("#rowed3").jqGrid({
		url:'resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_thuoc&q=2',
		datatype: "json",	
		colNames:['Id','Mã Thuốc','Tên Biệt Dược','Barcode','Tên Gốc','Tên Hóa Đơn','Tên Khác','Hoạt Chất Chính','Hàm Lượng','Nước Sản Xuất','Nhóm Thuốc','Nhóm Bệnh','Đơn vi tính qui đổi','Đường Dùng','Số Lượng Qui Đổi','Đơn Vị Tính','Tồn Kho Tối Thiểu','Ghi Chú','Là Thuốc','Sử Dụng','Độ Ưu Tiên','Thuốc BHYT','BHYT Nội Trú','IsHide4GPP'],
		colModel:[
			{name:'ID_Thuoc',index:'ID_Thuoc',search:false, width:"2%", editable:false,align:'right',hidden:true}, 
			{name:'MaThuoc',index:'MaThuoc', width:"100%", editable:true,align:'left',hidden:false,editrules: {required:true},edittype:"text",formoptions:{ rowpos:1, colpos:1}},
			{name:'TenBietDuoc',index:'TenBietDuoc', width:"200%", editable:true,align:'left',hidden:false,edittype:"text",formoptions:{ rowpos:2, colpos:1}},	 
			{name:'Barcode',index:'Barcode', width:"100%", editable:true,align:'left',hidden:false,edittype:"text",formoptions:{ rowpos:1, colpos:2}},	 
			{name:'TenGoc',index:'TenGoc', width:"200%", editable:true,align:'left',hidden:false,edittype:"text",formoptions:{ rowpos:2, colpos:2}},	
			{name:'TenHoaDon',index:'TenHoaDon', width:"200%", editable:true,align:'left',hidden:false,edittype:"text",formoptions:{ rowpos:3, colpos:1}},	
			{name:'TenKhac',index:'TenKhac', width:"100%", editable:true,align:'left',hidden:false,edittype:"text",formoptions:{ rowpos:3, colpos:2}},	
			{name:'HoatChatChinh',index:'HoatChatChinh', width:"100%", editable:true,align:'left',hidden:false,edittype:"text"},	
			{name:'HamLuong',index:'HamLuong', width:"100%", editable:true,align:'left',hidden:false,edittype:"text"},	
			{name:'ID_NuocSanXuat',index:'ID_NuocSanXuat',search:false, width:"100%", editable:true,align:'center',formatter:"select",edittype:"select",hidden:false,editoptions:{value:nuocsanxuat}},
			{name:'ID_NhomThuoc',index:'ID_NhomThuoc',search:false, width:"100%", editable:true,align:'center',formatter:"select",edittype:"select",hidden:false,editoptions:{value:nhomthuoc},},
			{name:'ID_NhomBenh',index:'ID_NhomBenh',search:false, width:"100%", editable:true,align:'center',formatter:"select",edittype:"select",hidden:false,editoptions:{value:nhombenh}},
			{name:'ID_DonViTinhQuyDoi',index:'ID_DonViTinhQuyDoi',search:false, width:"100%", editable:true,align:'center',formatter:"select",edittype:"select",hidden:false,editoptions:{value:donviquitinh}},
			{name:'ID_DuongDung',index:'ID_DuongDung', width:"100%", editable:true,align:'left',hidden:false,edittype:"text"},	
			{name:'SoLuongQuyDoi',index:'SoLuongQuyDoi', width:"100%", editable:true,align:'left',hidden:false,edittype:"text",editrules: {number:true}},
			{name:'ID_DonViTinh',index:'ID_DonViTinh', width:"100%", editable:true,align:'left',hidden:false,edittype:"text",editrules: {number:true}}, 
			{name:'TonKhoToiThieu',index:'TonKhoToiThieu', width:"100%", editable:true,align:'left',hidden:false,edittype:"text",editrules: {number:true}},
			{name:'GhiChu',index:'GhiChu',search:false, width:"100%", editable:true,align:'center',hidden:false,edittype:"textarea"},
			{name:'LaThuoc',index:'LaThuoc',search:false, width:"100%",editable: true,align:'center',hidden:false,edittype:"checkbox",editoptions: {value:"1:0"},formatter:"checkbox",formatoptions:{"disabled":true}}, 
			{name:'Active',index:'Active',search:false, width:"100%",editable: true,align:'center',hidden:false,edittype:"checkbox",editoptions: {value:"1:0"},formatter:"checkbox",formatoptions:{"disabled":true}}, 
			{name:'DoUuTien',index:'DoUuTien', width:"100%", editable:true,align:'left',hidden:false,edittype:"text",editrules: {number:true}},
			{name:'ThuocBHYT',index:'ThuocBHYT',search:false, width:"100%",editable: true,align:'center',hidden:false,edittype:"checkbox",editoptions: {value:"1:0"},formatter:"checkbox",formatoptions:{"disabled":true}},
			{name:'BHYTNoiTruOrNgTru',index:'BHYTNoiTruOrNgTru',search:false, width:"100%",editable: true,align:'center',hidden:false,edittype:"checkbox",editoptions: {value:"1:0"},formatter:"checkbox",formatoptions:{"disabled":true}},
			{name:'IsHide4GPP',index:'IsHide4GPP',search:false, width:"100%",editable: true,align:'center',hidden:false,edittype:"checkbox",editoptions: {value:"1:0"},formatter:"checkbox",formatoptions:{"disabled":true}},
		],
	
		loadonce: true,
		scroll: false,	
		//rownum = false,
		//treeGrid = false,	 
		modal:true,	 	
		pager: '#prowed3',	
		rowNum: 100000,
		gridview: true,
		sortname: 'ID_NhomThuoc',
		height:100,
		width: 100,
		viewrecords: true,	
		ignoreCase:true,
		shrinkToFit:false,
		grouping: true,
		stringResult:true,
        groupingView : { 
                groupField : ['ID_NhomThuoc'], 
            groupColumnShow : [false], 
            groupText : ['<b>{0} - {1} Item(s)</b>'], 
            groupCollapse : true, 
            groupOrder: ['asc'], 
            groupDataSorted : true ,
			
            },
		
		
	//hoverrows:false,
	//jsonReader:{repeatitems:true,subgrid:{repeatitems:false}},	
		
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
		caption: "Danh mục thuốc"
		
	});	
	$("#rowed3").jqGrid('filterToolbar',{stringResult: true});
	$("#rowed3").jqGrid('navGrid',"#prowed3",{add: permission["add"],addtext: 'Thêm mới (F6)',edittext: 'Sửa (F7)',
    deltext: 'Xóa (F8)',searchtext: 'Tìm kiếm (F9)',refreshtext: 'Tải lại (F11)', edit: permission["edit"], del: permission["delete"], search: false,closeAfterEdit: true,clearAfterAdd :true,closeOnEscape : true, bSubmit: "Submit",
     bCancel: "Cancel"}, //options						 
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
					canhgiua(formid);
					autocompleted_combobox("#ID_KhuVuc");
					autocompleted_combobox("#ID_CongTy");
					autocompleted_combobox("#ID_PhongBanCha");								  
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
					$("#sKhuvuc").click(function(e){		 
						//temp=($(this).attr("role")).split(":");
						links="resource.php?module=danhmuc&view=danh_muc_thuoc&id_form=12"
						elem=1 + Math.floor(Math.random() * 1000000000); 
						width=80;
						height=80;		
						dialog_main("Danh mục khu vực",width,height,elem,links);				 
					})
				},
				onClose : function(formid){
					$("#editmodrowed3").css("box-shadow","");										
				}
							  
		}, // edit options
		{height:'auto',width:'auto',reloadAfterSubmit:false,url:'resource.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=add',closeOnEscape : true,closeAfterAdd:false,modal: true,addedrow: "first",recreateForm:true,savekey: [true,121]
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
					autocompleted_combobox("#ID_NuocSanXuat");
					autocompleted_combobox("#ID_NhomThuoc");
					autocompleted_combobox("#ID_NhomBenh");
					utocompleted_combobox("#ID_DonViTinhQuyDoi");
					xuongdong(formid);
					lendong(formid);			  
			 	},
				onClose : function(formid){
					$("#editmodrowed3").css("box-shadow","");					
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
		{reloadAfterSubmit:true,height:250,width:600,sopt: ["cn"],url:'resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_thuoc&q=2',closeOnEscape : true,
				/*beforeShowSearch:function(formid){				
				}*/ // search options		
		} // search options						 
							  
	);	 					  
	$("#rowed3").setGridWidth($(window).width()-10);
	$("#rowed3").setGridHeight($(window).height()-$("#form_danh_muc_phong_ban").height()-400);
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
		
		
		
		
		
		
		
		
jQuery("#list10_d").jqGrid({
	height: 100,
   	url:'resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_thuoc1&q=2&id=0',
	datatype: "json",
   	colNames:['Ten nhom thuoc','so luong',],
   	colModel:[
   		{name:'num',index:'num', width:55},
   		{name:'item',index:'item', width:180},
   		
   	],
   	rowNum:20,
   	rowList:[5,10,20],
   	pager: '#pager10_d',
   	sortname: 'ID_NhomThuoc',
    viewrecords: true,
    sortorder: "asc",
	multiselect: true,
	caption:"Invoice Detail"
}).navGrid('#pager10_d',{add:false,edit:false,del:false});

});
		$("#list10_d").setGridWidth($(window).width()-10);
	$("#list10_d").setGridHeight($(window).height()-$("#form_danh_muc_phong_ban").height()-480);
}














function load_phong_ban(status){
	window.nuocsanxuat = $.ajax({url: 'resource.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=0&tables=DM_nuocsanxuat&id=ID_NuocSanXuat&name=TenDayDu', async: false, success: function(data, result) {if (!result) alert('Không load được danh mục phòng ban');}}).responseText;
	window.nhombenh = $.ajax({url: 'resource.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=0&tables=DM_nhombenh &id=ID_NhomBenh&name=TenNhomBenh', async: false, success: function(data, result) {if (!result) alert('Không load được danh mục phòng ban');}}).responseText;
	window.nhomthuoc = $.ajax({url: 'resource.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=0&tables=DM_nhomthuoc &id=ID_NhomThuoc&name=TenNhomThuoc', async: false, success: function(data, result) {if (!result) alert('Không load được danh mục phòng ban');}}).responseText;
	window.donviquitinh = $.ajax({url: 'resource.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=0&tables=DM_DonViTinh &id=ID_DonViTinh&name=TenDonViTinh', async: false, success: function(data, result) {if (!result) alert('Không load được danh mục phòng ban');}}).responseText;
	if(status==true){
		$("#rowed3").setColProp('ID_NuocSanXuat', { editoptions: { value: nuocsanxuat} });
		$("#rowed3").setColProp('ID_NhomThuoc', { editoptions: { value: nhomthuoc} });
		$("#rowed3").setColProp('ID_NhomBenh', { editoptions: { value: nhombenh} });
		$("#rowed3").setColProp('ID_DonViTinhQuyDoi', { editoptions: { value: donviquitinh} });
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
			if (jwerty.is('f11',e)) {
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