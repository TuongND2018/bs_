<style>
textarea[name=ghichu] {
    resize: none;
}
.form_row label {
	text-align: right!important;
}
.ui-menu { 
  	width: 500px!important; display:none; position:absolute;  	 
	box-shadow:0px 0px 3px #333;	 	
   }   
</style>
<body> 
	<div id="grid_phong_ban">      
    <div id="masterdetail">	 
          <table id="rowed3" ></table>
          <div  id="prowed3" ></div>  
    </div>            
    <div id="detail" style="margin-top:20px">
            <table id="rowed4" ></table>
            <div  id="prowed4"></div>  
    </div>          
    </div>   

 <div  class="dialog_dm_thuoc"><table id="DM_thuoc"></table><div id="prowed_DM_thuoc"></div></div>
  </div>
   <div id="grid_phong_ban " class="hidden_form" style="display:none;">
   <div class="ui-dialog ui-widget ui-widget-content ui-corner-all ui-resizable thongtinchinh" style="width:99.5%;  box-shadow:none!important;  display: block; overflow-x:auto;" >
    <div class="ui-dialog-titlebar ui-widget-header ui-corner-all ui-helper-clearfix"> <span id="ui-id-5" class="ui-dialog-title">Thông tin phiếu nhập</span> </div>
    <div class="ui-dialog-content ui-widget-content"style="display: block; width: auto; min-height: 80px; max-height: none; height: 100%">
      <div id="container">
      <div id="container ">
        <div class="form_row" style="vertical-align:top;width:25%"  >
          <div>
            <label for="SoPhieuDuTru" style="width:90px;  ">Số phiếu</label>
            <input id="SoPhieuDuTru" name="SoPhieuDuTru" style="width:130px;" type="text">
          </div>
          <div>
            <label for="NgayDuTru" style="width:90px; ">Ngày lập phiếu</label>
            <input id="NgayDuTru" style="width:130px;"  alt="date" value="<?php echo date("d-m-Y") ?>" name="NgayDuTru" type="text">
          </div>        
        </div>
        <div class="form_row" style="vertical-align:top;width:25%"  >
        <div>
            <label for="ID_Nguoilapphieu" style="width:90px; ">Người Lập Phiếu</label>
            <input id="ID_Nguoilapphieu" type="text" style="width:130px;" name="ID_Nguoilapphieu">
            <input id="ID_Nguoilapphieu1" style="width:135px;" name="ID_Nguoilapphieu1" type="hidden">
          </div>
         <div>
            <label for="ID_DonHang" style="width:90px; ">Đơn Hàng</label>
            <label id="ID_DonHang1" class="hienthi" style="width:130px!important; margin-top:3px; text-align:left!important;"> </label>     
          </div>
        </div>
        <div class="form_row" style="vertical-align:top;width:40%"  >
          <div>           
            <label for="GhiChu" style="width:50px; vertical-align:top; margin-top:30px;">Ghi chú</label>
            <textarea id="GhiChu" name="GhiChu" style="height:63px; width:250px;" lang="end" ></textarea>
          </div>
        </div>
          <div class="form_row" style="vertical-align:top;width:4%;line-height:15px!important;"  >
          <div>
             <a style="margin-left:0px;   margin-bottom:1px;width:30px; vertical-align:top" class="fm-button ui-state-default ui-corner-all fm-button-icon-left" id="save_data" href="#">Lưu<span class="ui-icon ui-icon-disk"></span></a>
             <a style="margin-left:0px;  margin-bottom:1px; width:30px" class="fm-button ui-state-default ui-corner-all fm-button-icon-left" id="sCal" href="#">Đóng<span class="ui-icon ui-icon-cancel
 "></span></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  
 <div style="height:3px;">
  <table id="rowed_subdetail" >
  </table>
  <div id="prowed_subdetail" ></div>
</div>			
</body>
</html> 
<script type="text/javascript">
jQuery(document).ready(function() {		
create_Dm_thuoc_grid();
		
		$(".dialog_dm_thuoc").dialog({
				autoOpen:false,
				width : ($(window).width() / 100 * parseFloat(80)).toFixed(0),
    			height : ($(window).height() / 100 * parseFloat(80)).toFixed(0),
				modal:false,
				title:'Danh Mục Thuốc Vật Tư Y Tế',
				stack: true,	
				position: { my: "top", at: "top" },			
				open: function(event, ui){					
					$('.ui-draggable').css({"box-shadow": "0px 0px 10px rgb(136, 136, 136)"});		 			 
			  	},
				close: function(event, ui) {					
					$(".overlay_child").fadeOut(300);					
					$("body").remove(".ui-jqdialog");
					$(this).remove();						
				}											 			
		});		
	var lastsel; 	
	load_phong_ban(false); 
	create_grid();	
	create_detail_grid()		 
	shortcut_key1();		
})
function create_grid(){	
		 $("#rowed3").jqGrid({
		url:'resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_dutruthuoc',
		datatype: "json",	
		colNames:['Id','Sô Phiếu Dự Trù','Ngày Dự Trù','Người Dự Trù','Đơn Hàng','Ghí Chú'],
		colModel:[
			{name:'Id',index:'ID',search:true, width:"2%", editable:false,align:'right',hidden:true}, 
			{name:'SoPhieuDuTru',index:'SoPhieuDuTru',search:true, width:"15%", editable:false,align:'center',hidden:false,edittype:"text",formoptions:{}},			
			{name:'NgayDuTru',index:'NgayDuTru',search:true, width:"20%", editable:false,align:'center',hidden:false,sorttype: 'date',  formatter: 'date', formatoptions:{srcformat:"Y-m-d",newformat:"d-m-Y"}}, 
			{name:'Id_NguoiDuTru',index:'Id_NguoiDuTru', width:"20%", editable:true,align:'left',hidden:false,editrules: {required:true},edittype:"select",formatter:"select",editoptions:{value:idnhanvien,defaultValue:"<?= $_SESSION["user"]["id_user"]?>", readonly: true},},	
			{name:'ID_DonHang',index:'ID_DonHang',search:true, width:"10%", editable:false,align:'center',hidden:false,edittype:"text",formoptions:{}},			
			{name:'GhiChu',index:'GhiChu', width:"35%", editable:true,align:'center',edittype:"textarea",hidden:false,}, 			 	 	 
		],
		loadonce: true,
		scroll: false,		 
		modal:true,	 	 
		rowNum: -1,
		pginput:false,
		pgbuttons:false,
		rowList:[],
		pager: '#prowed3',
		sortname: 'NgayDuTru',
		height:100,
		width: 100,
		viewrecords: true,	
		ignoreCase:true,
		shrinkToFit:true,
		sortorder: "desc",
		serializeRowData: function (postdata) { 		 
		},
		onSelectRow: function(ids) {
		if(ids == null) {
			ids=0;
			if($("#rowed4").jqGrid('getGridParam','records') >0 )
			{
				$("#rowed4").jqGrid('setGridParam',{url:"resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_dutruthuocchitiet&id="+ids,page:1});
				$("#rowed4").jqGrid('setCaption',"Invoice Detail: "+ids)
				.trigger('reloadGrid');
			}
		} else {
			$("#rowed4").jqGrid('setGridParam',{url:"resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_dutruthuocchitiet&id="+ids,page:1});
			$("#rowed4").jqGrid('setCaption',"Invoice Detail: "+ids)
			.trigger('reloadGrid');			
		}
	},
		ondblClickRow: function (rowId, rowIndex, columnIndex) {
			$(".ui-icon-pencil").trigger('click'); 
 		},
		loadComplete: function(data) {		 
		},	  
		caption: "Danh mục thuốc"
	});	
	$("#rowed3").jqGrid('navGrid',"#prowed3",{add:permission["add"]
    , edit: permission["edit"], del: permission["delete"], search: permission["search"],closeAfterEdit: true,clearAfterAdd :true,closeOnEscape : true,
	
	 addfunc: function() {
		 var id=0;
		 var oper ="add";
		 dialog_main_callback("Phiếu nhập", 95, 95, "4732478", "",".hidden_form");
		 create_main("add",init_main);  
		},
	 editfunc: function(id) {		
	 	window.ids = id
		dialog_main_callback("Phiếu nhập", 95, 95, "4732478", "",".hidden_form");
		create_main("edit",init_main);  
		},
		},
	
	{},{}	,				 
								  
		{reloadAfterSubmit:false,url:'resource.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=del',	navkeys : [ true, 38, 40 ],closeOnEscape : true,	
				afterSubmit : function(response, postdata) { 				
							if(response.responseText==1){
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
		{reloadAfterSubmit:true,height:600,width:600,url:'resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_benh_nhan&q=2',closeOnEscape : true, multipleSearch: true, multipleGroup:false,showQuery: true,
			
			onSearch: function () {
        var $filter = $("#" + $.jgrid.jqID("fbox_" + this.id)),
            sql = $filter.jqFilter('toSQLString');
        
    },
	 afterRedraw: function($p) {  }				
		} // search options							  
	);					  
	$("#rowed3").setGridWidth($(window).width()-10);
	$("#rowed3").setGridHeight($(window).height()/100*40);
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
}
function load_phong_ban(status){
	window.idnhanvien = $.ajax({url: 'resource.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=0&tables=DM_NhanVien&id=ID_NhanVien&name=NickName', async: false, success: function(data, result) {if (!result) alert('Không load được danh mục phòng ban');}}).responseText;
	
	window.idnhanvienmorong=	 $.ajax({                       
                        url: "resource.php?module=web_services&function=get_auto_complete&action=index",
                        dataType:"json",                       
                        async:false                       
                    }).responseText;
					
		 window.idnhanvienmorong =	jQuery.parseJSON( window.idnhanvienmorong);	
	if(status==true){
		$("#rowed3").setColProp('Id_NguoiDuTru', { editoptions: { value: idnhanvien} });
		
	}	
}
function create_detail_grid(){	
		$("#rowed4").jqGrid({
		url:'resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_dutruthuocchitiet&id=0',
		datatype: "json",	
		colNames:['Id','Id_thuoc','Mã Thuốc','Tên Biệt Dược','Tên Đơn Vị Tính','Số Lượng Dự Trù'],
		colModel:[
			{name:'Id',index:'ID_DuTruThuocChiTiet',search:false, width:"2%", editable:false,align:'right',hidden:true}, 
			{name:'ID_Thuoc',index:'ID_Thuoc', width:"17%", editable:true,align:'left',hidden:true,},
			{name:'MaThuoc',index:'MaThuoc',search:false, width:"20%", editable:false,align:'center',hidden:false,edittype:"text",formoptions:{}},
			{name:'TenBietDuoc',index:'TenBietDuoc',search:false, width:"20%", editable:false,align:'center',hidden:false,edittype:"text",formoptions:{}},
			{name:'TenDonViTinh',index:'TenDonViTinh',search:false, width:"20%", editable:false,align:'center',hidden:false,edittype:"text",formoptions:{}}	,
			{name:'SoLuongDuTru',index:'SoLuongDuTru',search:false, width:"20%", editable:false,align:'center',hidden:false,edittype:"text",formoptions:{}}			 	 	 
		],
		loadonce: false,
		scroll: false,		 
		modal:true,
		pginput: false,
		pgbuttons: false,	
		pgselbox:false, 	 
		rowNum: 30,
		rowList:[],
		pager: '#prowed4',
		sortname: 'ID_Thuoc',
		height:100,
		width: 100,
		viewrecords: true,	
		ignoreCase:true,
		shrinkToFit:true,
		sortorder: "desc",
		serializeRowData: function (postdata) { 
		},
		onSelectRow: function(id){		  
		},
		ondblClickRow: function (rowId, rowIndex, columnIndex) {
			$(".ui-icon-pencil").trigger('click'); 
 		},
		loadComplete: function(data) {	
		},	  
		caption: "Danh mục thuốc"
	});	
	$("#rowed4").jqGrid('navGrid',"#prowed4",{add: false, edit: false, del: false, search: false,closeAfterEdit: true,clearAfterAdd :true,closeOnEscape : true }),	
	$("#rowed4").setGridWidth($(window).width()-10);
	$("#rowed4").setGridHeight($(window).height()-$("#gbox_rowed3").height()-150);
	$("#rowed4").jqGrid('bindKeys', {"onEnter":function( rowid ) {
		} } );	
		$("#gbox_rowed3").attr("tabindex","1");
		//$("#gbox_rowed3").focus();	
		$("#gbox_rowed3").bind('keydown', function(e) {			
			if((jwerty.is("ctrl+m",e))){		 
				 $("#rowed4").jqGrid('restoreRow', lastsel);
				 $("#rowed4").jqGrid('editRow', rowid, true);
				 lastsel = rowid;
			}
		}) 	 
}
var kiemtra = false;

function luoi_MaThuoc(){	
	 	 window.id_dong = $("#rowed_subdetail").jqGrid('getGridParam', 'selrow');
	 	 var MaThuoc = $("#"+id_dong+"_MaThuoc").val();
		 //alert (MaThuoc);
		 dataToSend ='{"MaThuoc":"'+MaThuoc+'"}';
		 dataToSend = jQuery.parseJSON(dataToSend);
		 check_mathuoc=	 $.ajax({
                        type: "POST",
                        url: "resource.php?module=<?=$modules?>&view=<?=$view?>&action=controller_mathuoc_check",
                        dataType:"json",
                        data: dataToSend,
                        async:false ,
                        success: function(response, textStatus, jqXHR) {			   
                        },
                    }).responseText;
			if (check_mathuoc ==1){
						
				if ($(".dialog_dm_thuoc").dialog( "isOpen" )===false){
					$("body").append("<div class='overlay_child' style='width:100%;height:100%;position: absolute; z-index:1000;background:#000;top:0; opacity:0.9;filter:alpha(opacity=90);'></div>  ");	
					$(".overlay_child").click(function(){
						$(".dialog_dm_thuoc").dialog( "close" );			 
						$(".overlay_child").fadeOut(300);		
					})
					$(".dialog_dm_thuoc").dialog( "open" )
				}
			}else{					
				tam = check_mathuoc.split(";");
				ID_Thuoc = tam[1];
				TenBietDuoc = tam[2];
				TenDonViTinh =  tam[3];
				check_product_available(MaThuoc,TenBietDuoc,ID_Thuoc,TenDonViTinh)			
				
			}
}
 function creat_sub_grid_XemLog(oper,id){	
	 grid = $("#rowed_subdetail");
	lastsel =-1;           
     
		 $("#rowed_subdetail").jqGrid({
		url:'resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_dutruthuocchitiet&id='+id,
		datatype: "json",	
		colNames:['Id','Id_thuoc','Mã Thuốc','Tên Biệt Dược','Tên Đơn Vị Tính','Số Lượng Dự Trù'],
		colModel:[
			{name:'Id',index:'ID_DuTruThuocChiTiet',search:false, width:"2%", editable:false,align:'right',hidden:true}, 
			{name:'ID_Thuoc',index:'ID_Thuoc', width:"17%", editable:true,align:'left',hidden:true,},
			{name:'MaThuoc',index:'MaThuoc',search:false, width:"20%", editable:true,align:'center',hidden:false,edittype:"text",newgrid:true,func_grid:"luoi_MaThuoc"},
			{name:'TenBietDuoc',index:'TenBietDuoc',search:false, width:"20%", editable:false,align:'center',hidden:false,edittype:"text",formoptions:{}},
			{name:'TenDonViTinh',index:'TenDonViTinh',search:false, width:"20%", editable:false,align:'center',hidden:false,edittype:"text",formoptions:{}},
			{name:'SoLuongDuTru',index:'SoLuongDuTru',search:false, width:"20%", editable:true,align:'center',hidden:false,edittype:"text",formoptions:{}}			 	 		
						 	 	 
		],
		loadonce: true,
		scroll: false,		 
		modal:true,
		pginput: false,
		pgbuttons: false,	
		pgselbox:false, 	 
		rowNum: 30,
		rowList:[],
		pager: '#prowed_subdetail',
		sortname: 'ID_Thuoc',
		height:100,
		width: 100,
		viewrecords: true,	
		ignoreCase:true,
		shrinkToFit:true,		
		editurl:'clientArray',	
		sortorder: "desc",
		serializeRowData: function (postdata) {
		},
		onSelectRow: function(id){		  
		},
		ondblClickRow: function (id) {		
				$("#prowed_subdetail .ui-icon-pencil").click();					
 		},
		loadComplete: function () { 		
		},	  
		caption: "Danh mục thuốc"		
	});	
	$("#rowed_subdetail").jqGrid('bindKeys', {"onEnter":function( rowid ) {				
					$("#prowed_subdetail .ui-icon-pencil").click();				
			} } );	
			
	$("#rowed_subdetail").setGridWidth($(".thongtinchinh").width()+5);
	$("#rowed_subdetail").setGridHeight($(window).height()-$(".thongtinchinh").height()-180);
	$("#rowed_subdetail").jqGrid('navGrid','#prowed_subdetail',{add: false, edit : false,search : false , refresh:false}),

			 $("#rowed_subdetail").jqGrid('inlineNav', '#prowed_subdetail', {add: true, addtext: '', edittext: '', edit: true, closeOnEscape: true,
            addParams: {
				keys:true,
                position: "first",
                mtype: 'post',
                afterComplete: function(response, postdata, formid) {			
                },								
                addRowParams: {
					keys:true,				
                    oneditfunc: function(rowId) {
						jwerty.key('tab', false);						
						$("#"+rowId+"_MaThuoc").focus();
                    },
                    aftersavefunc: function(rowId, response,lastsel) {    
						$('#rowed_subdetail').focus();
                    },
                    afterrestorefunc: function() {
						$('#rowed_subdetail').focus();
                    },
                }

            },
            editParams: {
				keys:true,			
                oneditfunc: function(rowId) {      
					jwerty.key('tab', false);						
					$("#"+rowId+"_MaThuoc").focus();           
                },
                aftersavefunc: function(rowId, response) {
					$('#rowed_subdetail').focus();
                },
                afterrestorefunc: function() {
					$('#rowed_subdetail').focus();
                }}
        });
    }
 function dialog_sub_grid_dutru(title,width,height,oper,id){
	    $("body").append('<div class="sub_grid"></div>');
		$(".sub_grid").append('<label >Người Dự Trù :</label>');
		$(".sub_grid").append('<label><?php echo $_SESSION["user"]["nickname"] ?></label><br>');
		$(".sub_grid").append('<label style="top:0px;" >Ghi chú :</label>');
		$(".sub_grid").append('<textarea name="ghichu"  class="ghichu">');
		
		$(".sub_grid").append('<table id="rowed_subdetail" style="width:100%" ></table><div id="prowed_subdetail"></div>');
		 $(".sub_grid").append('  <button id="sendAll">Send selected rows</button>');

		creat_sub_grid_XemLog(oper,id);	
		//shortcut_key();
		
		width = ($(window).width() / 100 * parseFloat(width)).toFixed(0);
    	height = ($(window).height() / 100 * parseFloat(height)).toFixed(0);
		$(".sub_grid").dialog({
				height:height,
				width:width,
				modal:true,
				title:title,
				stack: true,	
				position: { my: "top", at: "top" },			
				open: function(event, ui){					
					$('.ui-draggable').css({"box-shadow": "0px 0px 10px rgb(136, 136, 136)"});		 			 
			  	},
				close: function(event, ui) {					
					 					
					$("body").remove(".ui-jqdialog");
					$(this).remove();						
				}											 			
		});	
             
}
 	
	
	function shortcut_key1() {
    jwerty.key('f3', false);
    jwerty.key('f4', false);
    jwerty.key('f8', false);
    jwerty.key('f9', false);
    jwerty.key('f11', false);
    $('body #grid_phong_ban').bind('keydown', function(e) {
        if (jwerty.is('f3', e)) {
            $("#prowed3 .ui-icon-plus").trigger("click");
        }
    });
    $('.rowed3,.rowed4,.prowed3,.prowed4').bind('keydown', function(e) {
        if (jwerty.is('f4', e)) {
            $(".ui-icon-pencil").trigger("click");
        }
    });
    $('body').bind('keydown', function(e) {
        if (jwerty.is('f8', e)) {
            $(".ui-icon-trash").trigger("click");
        }
    });
    $('body').bind('keydown', function(e) {
        if (jwerty.is('f9', e)) {
            $(".ui-icon-search").trigger("click");
        }
    });
    $('body').bind('keydown', function(e) {
        if (jwerty.is('f11', e)) {
            $(".ui-icon-refresh").trigger("click");
        }
    });
	
}


function create_Dm_thuoc_grid(){	
		 $("#DM_thuoc").jqGrid({
		url:'resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_DMthuoc',
		datatype: "json",	
		colNames:['mã thuốc', 'Tên Đơn Vị Tính','Tên Biệt Dược', 'Tên Nhóm Thuốc'],
		colModel:[			
			{name:'MaThuoc',index:'MaThuoc',hidden :true},
			{name:'TenDonViTinh',index:'TenDonViTinh',hidden :true},
			{name:'TenBietDuoc',index:'TenBietDuoc'}, 			
			{name:'TenNhomThuoc',index:'TenNhomThuoc'}, 
				 	 	 
		],
		hidegrid: false,
		gridview: true,
		loadonce: false,
		scroll: false,		 
		modal:true,	 
		rowNum: -1,
		rowList:[],
		pager: '#prowed_DM_thuoc',
		sortname: 'ID_Thuoc',
		height:450,
		width: 700,
		viewrecords: true,	
		ignoreCase:true,
		shrinkToFit:true,
		cmTemplate: {sortable:false},
		sortorder: "desc",
		serializeRowData: function (postdata) {
		},
		onSelectRow: function(id){		  
		var sel_id = $("#DM_thuoc").jqGrid('getGridParam', 'selrow');
		var myCellData = $("#DM_thuoc").jqGrid('getCell', sel_id, 'TenGoc');		  	   
		},
		ondblClickRow: function (rowId, rowIndex, columnIndex) {			
 		},
		loadComplete: function(data) {	
		var col_name = $('#DM_thuoc').jqGrid('getGridParam', 'colModel')		
			$('.ui-search-toolbar').bind('keydown', function(e) {
       				 if (jwerty.is('enter', e)) {
						 e.preventDefault();						 	
					 var tam=e.target.id.replace("gs_","");								
						var ii=0;																					 
						for(var i=0;i<=col_name.length-1;i++){								 	
							 if(col_name[i]["name"]==tam){							
							 ii=i+1;
							// alert(ii)
							 }
						}if(ii<=col_name.length-1){
							var colName = col_name[ii]["name"];								
							var input = $('#gs_' + colName);
							input.get(0).focus();		
						}
						else if(ii>col_name.length-1){
							$('#'+$("#DM_thuoc").getDataIDs()[0]).focus();
							$("#DM_thuoc").jqGrid("setSelection",$("#DM_thuoc").getDataIDs()[0], true);								
						}												 
        			}
   			});	 
			$('#DM_thuoc').bind('keydown', function(e) {				
				if (jwerty.is('enter', e)) {
						var sel_id = $("#DM_thuoc").jqGrid('getGridParam', 'selrow');						
						var MaThuoc = $("#DM_thuoc").jqGrid('getCell', sel_id, 'MaThuoc');
						var ID_Thuoc = $("#DM_thuoc").jqGrid('getCell', sel_id, 'ID_Thuoc');
						var TenBietDuoc = $("#DM_thuoc").jqGrid('getCell', sel_id, 'TenBietDuoc');
						var TenDonViTinh = $("#DM_thuoc").jqGrid('getCell', sel_id, 'TenDonViTinh');
						$("#"+id_dong+"_TenBietDuoc").val(TenBietDuoc);
						$("#"+id_dong+"_MaThuoc").val(MaThuoc);
						$("#"+id_dong+"_SoLoNhaSanXuat").focus();		 
 						//check_product_available(MaThuoc,TenBietDuoc);	 	
						$("#rowed_subdetail").jqGrid("setCell", id_dong, 'ID_Thuoc', ID_Thuoc); 
						$("#rowed_subdetail").jqGrid("setCell", id_dong, 'TenBietDuoc', TenBietDuoc); 
						$("#rowed_subdetail").jqGrid("setCell", id_dong, 'TenDonViTinh', TenDonViTinh);
						$("#"+sel_id+"_MaThuoc").val(MaThuoc);
						$(".dialog_dm_thuoc").dialog( "close" );
						$("#"+sel_id+"_SoLuongDuTru").focus();	
				}
			});	
		},	  
		caption: "Danh mục thuốc"
	});	
	 $("#DM_thuoc").jqGrid('navGrid',"#prowed_DM_thuoc",{add: false, edit: false, del: false, search: false,closeAfterEdit: true,clearAfterAdd :true,closeOnEscape : true });				 
	 $("#DM_thuoc").jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false});
	 $("#DM_thuoc").jqGrid('bindKeys', {onEnter: function() {	} } );		
}  

	 
	 
function check_product_available(mathuoc,tenthuoc){	
	kiemtra=false;	
	id_rowed5=$('#rowed5').jqGrid('getDataIDs');			
	for(i=0;i<id_rowed5.length;i++){		
		var rowData = jQuery('#rowed5').getRowData(id_rowed5[i]);	 			 
			if(rowData['MaThuoc']==mathuoc){
				 tooltip_message(tenthuoc+" đã có trên phiếu nhập này");
				 kiemtra=true;
				 $("#"+id_dong+"_TenBietDuoc").val("");
				 $("#"+id_dong+"_TenDonViTinh").val("");
				 break;
			}			   
	}	 
	if(kiemtra==false){
		if ($(".dialog_dm_thuoc").dialog( "isOpen" )===true){
			$(".dialog_dm_thuoc").dialog( "close" )
		}	
		//alert(ID_Thuoc[1])	
		$("#rowed5").jqGrid("setCell", id_dong, 'ID_Thuoc', ID_Thuoc[1]); 
		$("#rowed5").jqGrid("setCell", id_dong, 'TenDonViTinh', TenDonViTinh[1]); 
		$("#rowed5").jqGrid("setCell", id_dong, 'TenBietDuoc', TenBietDuoc[1]); 
		//$("#"+id_dong+"_ID_Thuoc").val(ID_Thuoc[1]);
		$("#"+id_dong+"_TenBietDuoc").val(TenBietDuoc[1]);
		$("#"+id_dong+"_ID_Thuoc").val(ID_Thuoc[1]);
		$("#"+id_dong+"_TenDonViTinh").val(TenDonViTinh[1]);		
	    $("#prowed5 .ui-icon-disk").click();
	    $("#prowed5 .ui-icon-pencil").click();	
	    $("#"+id_dong+"_SoLoNhaSanXuat").focus();			
	}	
}
function init_main(action){
	$("#save_data").click(function(){		
		save_data(action);
	})
	 var tam=0;  
	 $('.form_row').each(function() {		   
		tam+=$(this).width();
     });	
	 var currentTime = new Date();
	 tam = parseInt(currentTime.getFullYear()) + 1;        
     year_range = '2013:' + tam; 
	  $("#NgayLapPhieu").datepicker({
            showWeek: true,
            defaultDate: "+1w",
            changeMonth: true,
            changeYear: true,
            numberOfMonths: 4,
            dateFormat: "dd-mm-yy",
            yearRange: year_range,
            onClose: function(selectedDate) {
               
            },
            onSelect: function(dat, inst) {
                 
            }
        });
		$(".modal4732478").click(function(){			
			 $(".ui-jqdialog_button").dialog( "close" );
			 $(".ui-jqdialog_button").remove();
			 $("body").remove(".ui-jqdialog_button");
		})	
		autocomplex_mutil('#ID_Nguoilapphieu',window.idnhanvienmorong,'#ID_Nguoilapphieu1')	
	 var colModel = $("#rowed3").getGridParam('colModel'); 
	 var rowData = jQuery('#rowed3').getRowData(window.ids);
	 if(action=="edit"){		
		for(var i=0;i<colModel.length;i++){
			$("#"+colModel[i].name).val(rowData[colModel[i].name]);
			if(colModel[i].edittype=="select"){				 
				if(colModel[i].accept!=false){					  
				}
			}		 
		}		  
		 creat_sub_grid_XemLog('edit',window.ids);	 	 
	 }else{
		 creat_sub_grid_XemLog('add',0);	 
		var colModel = $("#rowed3").getGridParam('colModel'); 
		var rowData = jQuery('#rowed3').getRowData(window.ids);		
		for(var i=0;i<colModel.length;i++){			 
			if(colModel[i].edittype=="select"){				 
				if(colModel[i].accept!=false){						 
				}
			}
		}
	 }	 
	 $("#SoPhieuDuTru").focus();	 
	   jwerty.key('tab', false);
	   jwerty.key('shift+tab', false);			  
	   $('#container input[type=text],#container textarea,#container select').bind("keydown", function(e) {		   		 
             if (jwerty.is("enter",e)||jwerty.is("tab",e)) {            
                /* FOCUS ELEMENT */
                var inputs = $(this).parents("#container").eq(0).find(":input[type=text], textarea,select");
                var idx = inputs.index(this);
				//alert(idx)
                if (idx == inputs.length - 1) {					 
					if(inputs[0].nodeName!="SELECT"){;
                    	inputs[0].select();
					}else{
						inputs[0].focus();
					}
                } else {		
					 $(".ui-datepicker").hide();  			
                    
					if(inputs[idx].lang=="new_grid"){
						MaNCC_check("ID_NCC","ID_NCC1")
					}else{
						inputs[idx + 1].focus(); //  handles submit buttons
					}
					if(inputs[idx + 1].nodeName!="SELECT"){;
                   	 	inputs[idx + 1].select();
					}
                }
				if(inputs[idx].lang=="end"){					 
					if($("#rowed_subdetail").getDataIDs().length>0){	
						$("#rowed_subdetail").jqGrid("setSelection",$("#rowed_subdetail").getDataIDs()[0], true);						 
						$("#prowed_subdetail .ui-icon-pencil").click();           
					}else{
						$("#prowed5_subdetail  .ui-icon-plus").click();
						//action="edit";
					}
				}
                return false;
             }else if(jwerty.is("shift+tab",e)){
				var inputs = $(this).parents("#container").eq(0).find(":input[type=text], textarea,select");
                var idx = inputs.index(this);
				 if (idx >0) {					 
                    inputs[idx -1].focus(); //  handles submit buttons				 
                } 
			}
        });
		$(':input[type=text]').focusout(function(e) {		   	
		     if( $(this).attr("lang")=="new_grid"){
				 MaNCC_check("ID_NCC","ID_NCC1")
			 }
		})
	  $.dateEntry.setDefaults({spinnerImage: ''});	
	 $("#NgayLapPhieu, #NgayNhapKho, #NgayHoaDon").dateEntry({dateFormat: 'dmy-'});
	 //check_main_form_change_func();	
}
function create_main(action,callback){
	$(".modal4732478").append($(".hidden_form").html());
	window.hidden_form=$(".hidden_form").html();	 
	$(".hidden_form").html(""); 
	callback(arguments[0]);
}
function dialog_main_callback(title, width, height, elem, links,form) {     
	if(links!=""){
		$("body").append("<div class='ui-jqdialog modal" + elem + "'><div class='loading'><div id='loading'></div></div><iframe id='frame1' class='frame_" + elem + "' src=''></iframe></div>");
	}else{
		$("body").append("<div class='ui-jqdialog modal" + elem + "'> </div>");
	}
	 
	if (String(width).match(/px/g)==null){
		 width = ($(window).width() / 100 * parseFloat(width)).toFixed(0);		
	}else{		
		width=String(width).replace("px","")
	};
	if (String(height).match(/px/g)==null){
		 height = ($(window).height() / 100 * parseFloat(height)).toFixed(0);
	}else{		
		 height=String(height).replace("px","")
	};
    $(".modal" + elem).dialog({
        height: height,
        width: width,
        modal: true,
        title: title,
		draggable: false,
		resizable: false,
        stack: false,
		beforeClose: function( event, ui ) {
			if(window.check_sub_form_change==true){							
				if ($(".ui-jqdialog_button").dialog( "isOpen" )===true){					 					
					 $(".ui-jqdialog_button").dialog( "close" );
					 $(".ui-jqdialog_button").remove();
					 //$("body").remove(".ui-jqdialog_button");		 	  
					 dialog_button("Cảnh báo","Bạn đã thay đổi nội dung, bạn có muốn lưu lại dữ liệu trước khi thoát hay không?",30,23);
					 return false;					
				}else{
					 dialog_button("Cảnh báo","Bạn đã thay đổi nội dung, bạn có muốn lưu lại dữ liệu trước khi thoát hay không?",30,23);
					 return false;	
				}
			}
		},
        close: function(event, ui) {		 
			$(form).html(window.hidden_form);			
            //$("body").remove(".modal" + elem);
			$(this).dialog( "close" );
            $(this).remove();			
        },
        hide: {
            effect: "fadeOut",
            duration: 1000,
        },
        open: function(event, ui) {			 
			//callIframe(links, hide_loader, elem);			 
            //$('.ui-draggable').css({"box-shadow": "0px 0px 30px #333"});
        },
		

    });
}
function create_select(elem,value){
	 tam = value.split(";");	
	 for (i = 0; i <= tam.length - 1; i++) {		 
            temp = tam[i].split(":");
			//alert( temp[0])
            $(elem).append($('<option>', {
                value: temp[0],
                text: temp[1]
            }));
     }
	
}

</script>