<!--<link rel="stylesheet" href="../../../css/form_css.css" type="text/css" media="screen"/>-->
<body> 
	<div id="grid_phong_ban">      
    <div id="masterdetail">	 
          <table id="rowed3" ></table>
            <div id="prowed3" ></div>  
            </div>
            
             <div id="detail" style="margin-top:20px">
            <table id="rowed4" ></table>
            <div id="prowed4"></div>  
            </div>
          
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
	create_detail_grid()		 
	shortcut_key1();		
	jQuery(window).resize(function() {		 
	 $("#rowed3").setGridWidth($(window).width()-10);
	 $("#rowed3").setGridHeight($(window).height()-$("#form_danh_muc_phong_ban").height()-130);
	}); 
		
		//$('#prowed3_center table tr').append("<td>Phis</td>");
		
		 
		
})
 //$("#@Model.Id").trigger('reloadGrid', [{page:1}]);
	
 
 
 
function create_grid(){	
 


		 $("#rowed3").jqGrid({
		url:'resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_dutruthuoc',
		datatype: "json",	
		colNames:['Id','Sô Phiếu Dự Trù'],
		colModel:[
			{name:'Id',index:'ID_PhongBan',search:false, width:"2%", editable:false,align:'right',hidden:false}, 
			{name:'SoPhieuDuTru',index:'SoPhieuDuTru',search:false, width:"10%", editable:false,align:'center',hidden:false,edittype:"text",formoptions:{}}		
			 			 	 	 
		],
		loadonce: false,
		scroll: false,		 
		modal:true,	 	 
		rowNum: 30,
		rowList:[30,50,70],
		pager: '#prowed3',
		sortname: 'NgayDuTru',
		height:100,
		width: 100,
		viewrecords: true,	
		ignoreCase:true,
		shrinkToFit:true,
		
		
	//hoverrows:false,
	//jsonReader:{repeatitems:true,subgrid:{repeatitems:false}},	
		sortorder: "desc",
		serializeRowData: function (postdata) { 		 	
			//$("#rowed3").trigger("reloadGrid");		
			//return postdata;
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
			//$("#rowed3").setColProp('ID_PhongBanCha', { editoptions: { value: ""} });				 
		},	  
		caption: "Danh mục thuốc"
	});	
	$("#rowed3").jqGrid('navGrid',"#prowed3",{add:permission["add"]
    , edit: permission["edit"], del: permission["delete"], search: permission["search"],closeAfterEdit: true,clearAfterAdd :true,closeOnEscape : true, addfunc: function() {dialog_sub_grid_dutru('aaaa',1000,500)}}, //options						 
								  
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
		{reloadAfterSubmit:true,height:250,width:600,sopt: ["cn"],url:'resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_benh_nhan&q=2',closeOnEscape : true,
				/*beforeShowSearch:function(formid){				
				}*/ // search options		
		} // search options						 
							  
	)	;
	
	
					  
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
		
}
function load_phong_ban(status){
	window.idnhanvien = $.ajax({url: 'resource.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=0&tables=DM_NhanVien&id=ID_NhanVien&name=NickName', async: false, success: function(data, result) {if (!result) alert('Không load được danh mục phòng ban');}}).responseText;
	
	if(status==true){
		$("#rowed3").setColProp('Id_NguoiDuTru', { editoptions: { value: idnhanvien} });
	
	}	
}

function create_detail_grid(){	
		 $("#rowed4").jqGrid({
		url:'resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_dutruthuocchitiet&id=0',
		datatype: "json",	
		colNames:['Id','Tên Thuốc','Sô Lượng Dự Trù','ID_DuTru'],
		colModel:[
			{name:'Id',index:'ID_DuTruThuocChiTiet',search:false, width:"2%", editable:false,align:'right',hidden:true}, 
			{name:'ID_Thuoc',index:'ID_Thuoc', width:"17%", editable:true,align:'left',hidden:false,editrules: {required:true},edittype:"select",formatter:"select",editoptions:{value:idnhanvien,defaultValue:"<?= $_SESSION["user"]["id_user"]?>", readonly: true},},
			{name:'SoLuongDuTru',index:'SoLuongDuTru',search:false, width:"20%", editable:false,align:'center',hidden:false,edittype:"text",formoptions:{}}, 			
			{name:'ID_DuTru',index:'ID_DuTru', width:"5%", editable:true,align:'center',edittype:"textarea",hidden:true,}, 			 	 	 
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
		
		
	//hoverrows:false,
	//jsonReader:{repeatitems:true,subgrid:{repeatitems:false}},	
		sortorder: "desc",
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
	$("#rowed4").jqGrid('navGrid',"#prowed4",{add: false, edit: false, del: false, search: false,closeAfterEdit: true,clearAfterAdd :true,closeOnEscape : true }),				 
							  
		 					  
	$("#rowed4").setGridWidth($(window).width()-10);
	$("#rowed4").setGridHeight($(window).height()-$("#form_danh_muc_phong_ban").height()-550);
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
 
 function creat_sub_grid_XemLog(){	
  grid = $("#rowed_subdetail");
  lastsel =-1;           
     $("#sendAll").click(function(){
                var localGridData = $("#rowed_subdetail").jqGrid('getGridParam','data');			
                sendData(localGridData);
            });
  sendData = function(data) {
                    var dataToSend = JSON.stringify(data);
                    var dataToSend = '{"Id":'+dataToSend+'}';
					dataToSend = jQuery.parseJSON(dataToSend)
				
                    $.ajax({
                        type: "POST",
                        url: "resource.php?module=<?=$modules?>&view=<?=$view?>&action=controller",
                        dataType:"json",
                        data: dataToSend,
                        
                        success: function(response, textStatus, jqXHR) {
                            // remove error div if exist
                            $('#' + grid[0].id + '_err').remove();
                            alert("success");
                        },
                       
                    });
                }; 
				 
           
		 $("#rowed_subdetail").jqGrid({
		url:'resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_dutruthuocchitiet&id=1',
		datatype: "json",	
		colNames:['Id','Tên Thuốc','Sô Lượng Dự Trù','Số Lượng nhập'],
		colModel:[
			{name:'Id',index:'ID_DuTruThuocChiTiet',search:false, width:"2%", editable:false,align:'right',hidden:true}, 
			{name:'ID_Thuoc',index:'ID_Thuoc', width:"17%", editable:true,align:'left',hidden:false,editrules: {required:true},edittype:"select",formatter:"select",editoptions:{value:idnhanvien,defaultValue:"<?= $_SESSION["user"]["id_user"]?>", readonly: true},},
			{name:'SoLuongDuTru',index:'SoLuongDuTru',search:false, width:"20%", editable:true,align:'center',hidden:false,edittype:"text",formoptions:{}}, 			
			{name:'SoLuongNhapThucTe',index:'SoLuongNhapThucTe', width:"5%", editable:true,align:'center',edittype:"textarea",hidden:false,}, 			 	 	 
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
	//hoverrows:false,
	//jsonReader:{repeatitems:true,subgrid:{repeatitems:false}},	
		sortorder: "desc",
		serializeRowData: function (postdata) { 		 	
			//$("#rowed3").trigger("reloadGrid");		
			//return postdata;
		},
		onSelectRow: function(id){		  
		  //$("#rowed4").jqGrid().setGridParam({url:'data2_tam.php?id='+lastsel}).trigger("reloadGrid");	   
		},
		ondblClickRow: function (id) {
			jQuery('#rowed_subdetail').jqGrid('restoreRow', lastsel);
                    jQuery('#rowed_subdetail').jqGrid('editRow', id, true);
                    $('.sub_grid .ui-icon-pencil').trigger("click");
                    lastsel = id;
			$(".sub_grid .ui-icon-pencil").trigger('click'); 
 		},
		loadComplete: function(data) {	
			//$("#rowed3").setColProp('ID_PhongBanCha', { editoptions: { value: ""} });				 
		},	  
		caption: "Danh mục thuốc"
		
	});	
	$("#rowed_subdetail").jqGrid('navGrid','#prowed_subdetail',{add: false, edit : false,search : false , refresh:false}),

					    $("#rowed_subdetail").jqGrid('inlineNav', '#prowed_subdetail', {add: true, edit: true, closeOnEscape: true,
            addParams: {
                position: "first",
                mtype: 'post',
                afterComplete: function(response, postdata, formid) {
                   
                },
                addRowParams: {
                    oneditfunc: function() {
						
                        updateButtonState($(this));
                    },
                    aftersavefunc: function(rowId, response) {
                        updateButtonState($(this));
                       
                    },
                    afterrestorefunc: function() {
                        updateButtonState($(this));
                    },
                }

            },
            editParams: {
                oneditfunc: function() {
                    updateButtonState($(this));
                },
                aftersavefunc: function(rowId, response) {
                        updateButtonState($(this));
                        },
                afterrestorefunc: function() {
                    updateButtonState($(this));
                }}

        });
				
							  
		 					  
	$("#rowed_subdetail").setGridWidth($(window).width()-500);
	$("#rowed_subdetail").setGridHeight($(window).height()-$("#form_danh_muc_phong_ban").height()-150);
	$("#rowed_subdetail").jqGrid('bindKeys', {"onEnter":function( rowid ) {
		} } );	
		$("#gbox_rowed_subdetail").attr("tabindex","1");
		//$("#gbox_rowed3").focus();	
		$("#gbox_rowed_subdetail").bind('keydown', function(e) {			
			if((jwerty.is("ctrl+m",e))){		 
				 $("#rowed_subdetail").jqGrid('restoreRow', lastsel);
				 $("#rowed_subdetail").jqGrid('editRow', rowid, true);
				 lastsel = rowid;
			}
		}) 	 
		
		
}
 function dialog_sub_grid_dutru(title,width,height){
	    $("body").append('<div class="sub_grid"></div>');
		
		$(".sub_grid").append('<input class="name">');
		$(".sub_grid").append('<input class="date">');
		$(".sub_grid").append('<input class="ghichu">');
		$(".sub_grid").append('<table id="rowed_subdetail" style="width:100%" ></table><div id="prowed_subdetail"></div>');
		 $(".sub_grid").append('  <button id="sendAll">Send selected rows</button>');

		//loadphongban();
		creat_sub_grid_XemLog();	
		//shortcut_key();
		

		$(".sub_grid").dialog({
				height:height,
				width:width,
				modal:true,
				title:title,
				stack: true,				
				open: function(event, ui){					
					$('.ui-draggable').css({"box-shadow": "0px 0px 10px rgb(136, 136, 136)"});		 			 
			  	},
				close: function(event, ui) {					
					$("#rowed_xLog").trigger("reloadGrid"); 					
					$("body").remove(".ui-jqdialog");
					$(this).remove();						
				}											 			
		});	
                 $("#rowed_xLog").setGridWidth(width - 25);
            $("#rowed_xLog").setGridHeight(height- $("#form_danh_muc_phong_ban").height() - 500);
            $(window).resize(function() {
                $("#rowed_xLog").setGridWidth(width - 25);
                $("#rowed_xLog").setGridHeight(height - $("#form_danh_muc_phong_ban").height() - 500);
            });
}
 updateButtonState = function(grid) {
        var isNonEditable, isEditing, $row, selectedId = grid.jqGrid('getGridParam', 'selrow'),
                rid = $.jgrid.jqID(selectedId), rowSelector = 'tr#' + rid;
        if (selectedId === null) {
            // no rows in grid - no View, no Edit, no Delete, but Add
            $("#add_list, #add_list_top, #list_iladd").removeClass('ui-state-disabled');
            $("#view_list_top, #del_list, #del_list_top, #edit_list, #edit_list_top, #list_iledit, #list_ilsave, list_ilcancel").addClass('ui-state-disabled');
        } else {
            $row = $(rowSelector);
            isEditing = $row.attr('editable') || '0';
            isNonEditable = $row.hasClass('not-editable-row');
            // no row selected or selected row has - no View, no Delete
            $("#view_list_top").removeClass('ui-state-disabled');
            if (isNonEditable) {
                $("#del_list, #del_list_top, #edit_list, #edit_list_top, #list_iledit").addClass('ui-state-disabled');
            } else if (isEditing === '1') {
                $("#list_ilsave, list_ilcancel").removeClass('ui-state-disabled');
                $("#add_list, #add_list_top, #list_iladd, #del_list, #del_list_top, #edit_list, #edit_list_top, #list_iledit").addClass('ui-state-disabled');
            } else {
                $("#list_ilsave, #list_ilcancel").addClass('ui-state-disabled');
                $("#add_list, #add_list_top, #list_iladd, #del_list, #del_list_top, #edit_list, #edit_list_top, #list_iledit").removeClass('ui-state-disabled');
                $(rowSelector + " div.ui-inline-edit, " + rowSelector+" div.ui-inline-del,"+rowSelector+ ".ui-jqgrid-btable:first").hide();
                $(rowSelector + " div.ui-inline-save, " + rowSelector+" div.ui-inline-cancel,"+rowSelector+ ".ui-jqgrid-btable:first").show();
            }
        }
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
</script>