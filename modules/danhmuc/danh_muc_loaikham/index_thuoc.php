<!--author:khatm--
Form: xếp hàng lâm sàng-->
<style type="text/css">
    #rowed3 td,#rowed4 td,#rowed5 td{

        font-size:11px!important;
    }
    #gbox_rowed3, #gbox_rowed4, #gbox_rowed5, #gbox_rowed6, #gbox_rowed7{
        margin-left:0px;
        margin-top:0px;
        box-shadow:0px 0px 10px #a0a0a0;
        border:1px solid #919191;
    }
#dialog-themdon table td{
	padding:2px !important;	
}
#dialog-suadon table td{
	padding:2px !important;	
}
#prowed4_center{
	display:none !important;
}
.left_col,.right_col{
	padding-left:3px;
}
</style>

<body id="subbody" style="width:100%">
<div id="dialog-themdon" title="Thêm đơn" style="display:none">
 	<table cellpadding="0" cellspacing="0">
    	<tr>
        	<td>BS tạo: </td>
            <td><input type="text" id="bstao" style="width:242px;"></td>
        </tr>
        <tr>
        	<td>Tên đơn thuốc: </td>
            <td><input type="text" id="tendon" style="width:270px;"></td>
        </tr>
        <tr>
        	<td style="vertical-align:top">Ghi chú: </td>
            <td><textarea id="ghichu" rows="3" cols="20" style="width:270px;"></textarea></td>
        </tr>
    </table>
</div>
<div id="dialog-suadon" title="Sửa đơn" style="display:none">
 	<table cellpadding="0" cellspacing="0">
    	<tr>
        	<td>BS tạo: </td>
            <td><input type="text" id="bstao_edit" style="width:242px;"></td>
        </tr>
        <tr>
        	<td>Tên đơn thuốc: </td>
            <td><input type="text" id="tendon_edit" style="width:270px;"></td>
        </tr>
        <tr>
        	<td style="vertical-align:top">Ghi chú: </td>
            <td><textarea id="ghichu_edit" rows="3" cols="20" style="width:270px;"></textarea></td>
        </tr>
    </table>
</div>
    <div id="panel_main" >
        <div class="left_col ui-widget-content ui-layout-center">
			<table id="rowed3" ></table>
            <div id="prowed3"></div>
        </div>
        <div class="ui-layout-east ui-widget-content right_col">
        	<table id="rowed4" ></table>
             <div id="prowed4"></div>
        </div>
    </div>
    <div style="width:100%; height:30px; text-align:right; padding-top:5px; padding-right:20px;">
        	<button id="luu">Lưu</button>
            <button id="huy">Hủy</button>
            <button id="thoat">Thoát</button>
    </div>
</body>
</html>

<script type="text/javascript">
var loadlandau=0;
jQuery(document).ready(function() {
	window.donthuocxoa='';
    $("#panel_main").css("height",$("#subbody").height()-40+"px");
	$("#panel_main").fadeIn(1000);
	$(".left_col").css('height',$("#panel_main").height());
	$(".right_col").css('height',$("#panel_main").height());
    openform_shortcutkey(); //mở bằng phím tắt được thiết lập trong DB
	<?php 
		$data= new SQLServer;
		$params = array($_GET['id_loaikham']);
		$store_name="{call GD2_SelectID_DonThuocMau_ByID_LoaiKham(?)}";
		$get=$data->query( $store_name,$params);
		$excute= new SQLServerResult($get);
		$tam= $excute->get_as_array();
		if(count($tam)>0){
			echo 'window.select_iddonthuocmau='.$tam[0]['ID_DonThuocMau'].';';
			echo "parent.postMessage('dialog|||changetitle|||".$tam[0]['TenDonThuoc']."','*');";
		}else{
			echo 'window.select_iddonthuocmau=0;';	
			echo "parent.postMessage('dialog|||changetitle|||','*');";
		}
		
	?>
	
	window.thuoc=  $.ajax({                       
		url: "resource.php?module=web_services&function=get_auto_edit_option_byid&action=index&term=&status=0&tables=DM_Thuoc&id=ID_Thuoc&name=TenGoc",
		async:false                       
	}).responseText;
	
	$.get('resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_DMthuoc').done(function(data) {
		window.data_thuoc=data;
	});
	load_phong_ban(false); 
	//alert(window.thuoc);
	create_layout();
	create_grid();
	create_detail_grid();
	resize_control();
	
	$("#luu,#thoat,#huy").button();
	create_combobox_new('#bstao',create_bacsi,'bw','','data_bacsi',<?=$_SESSION['user']['id_user']?>);
	create_combobox_new('#bstao_edit',create_bacsi,'bw','','data_bacsi',0);
	window.huy=0;
	$("#luu").click(function(e) {
		var savedRow = $('#rowed4').jqGrid("getGridParam", "savedRow");		
		if (savedRow && savedRow.length > 0) {
			if($('#'+savedRow[0].id+'_ID_Thuoc_combobox').val()!=''){
				jQuery("#rowed4").jqGrid('saveRow',savedRow[0].id);
			}else{
				$('#rowed4').jqGrid('delRowData',savedRow[0].id);
			}
		}
        var gridData3 = jQuery("#rowed4").getRowData();
		var postData3 = JSON.stringify(gridData3);
		postData3='{"id":'+postData3+'}';
		postData3=$.parseJSON(postData3);
		$.post('resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=controller_donthuocchitiet&id_loaikham=<?=$_GET['id_loaikham']?>&iddonthuocmau='+window.n_iddonthuocmau+'&donthuocxoa='+window.donthuocxoa,postData3).done(function(data){
			tooltip_message("Lưu thành công");
			$("#rowed4").jqGrid('setGridParam',{datatype: 'json',url:"resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_donthuocmauchitiet&id="+n_iddonthuocmau}).trigger('reloadGrid');
			parent.postMessage('dongdialog|||luu|||'+window.tendonthuocmau,'*');
		});
    });
	$("#thoat").click(function(e) {
		parent.postMessage('dongdialog|||thoat','*');
	});
	$("#huy").click(function(e) {
		$.post('resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=controller_huy&id_loaikham=<?=$_GET['id_loaikham']?>').done(function(data){
		tooltip_message("Lưu thành công");
		window.huy=1;
		parent.postMessage('dialog|||huy','*');
		parent.postMessage('dialog|||changetitle|||','*');
		$("#rowed3").jqGrid('setGridParam',{datatype: 'json',url:"resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_donthuocmau"}).trigger('reloadGrid');
		$('#rowed4').jqGrid('clearGridData');
		});
	});
	
	$( "#dialog-themdon" ).dialog({
      resizable: false,
	  autoOpen:false,
      height:250,
	  width:400,
      modal: true,
      buttons: {
        "Lưu": function() {
			$.post('resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=controller_donthuoc&oper=add&bstao_hidden='+$("#bstao_hidden").val()+'&tendonthuoc='+$("#tendon").val()+"&ghichu="+$("#ghichu").val()+'&hienmaloi=a').done(function(data){
				tooltip_message("Lưu thành công");
				$("#rowed3").jqGrid('setGridParam',{datatype: 'json',url:"resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_donthuocmau"}).trigger('reloadGrid');
			});
          $( this ).dialog( "close" );
        },
        "Hủy": function() {
          $( this ).dialog( "close" );
        }
      }
    });
	
	$( "#dialog-suadon" ).dialog({
      resizable: false,
	  autoOpen:false,
      height:250,
	  width:400,
      modal: true,
      buttons: {
        "Lưu": function() {
			$.post('resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=controller_donthuoc&oper=edit&id='+window.id_edit+'&bstao_hidden='+$("#bstao_edit_hidden").val()+'&tendonthuoc='+$("#tendon_edit").val()+"&ghichu="+$("#ghichu_edit").val()+'&hienmaloi=a').done(function(data){
				tooltip_message("Lưu thành công");
				$("#rowed3").jqGrid('setGridParam',{datatype: 'json',url:"resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_donthuocmau"}).trigger('reloadGrid');
			});
          $( this ).dialog( "close" );
        },
        "Hủy": function() {
          $( this ).dialog( "close" );
        }
      }
    });

	$(window).resize(function() {
		$("#panel_main").css("height",$("#subbody").height()-40+"px");
		$("#panel_main").fadeIn(1000);
		$(".left_col").css('height',$("#panel_main").height());
		$(".right_col").css('height',$("#panel_main").height());
		resize_control();
	})
})//end ready


function create_grid(){	
		$("#rowed3").jqGrid({
			url: 'resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_donthuocmau',
			datatype: "json",
			colNames:['Id','Mã đơn','Tên đơn thuốc','Nhóm bệnh','Mô tả','Bác sĩ tạo','Là toa chuẩn','Áp dụng','Ghi chú'],
			colModel:[
			{name:'ID_DonThuocMau',index:'ID_DonThuocMau',search:false, width:"2%", editable:false,align:'right',hidden:true}, 
			{name:'MaDon',index:'MaDon', width:"4%", editable:true,align:'center',hidden:true,editrules: {required:true},edittype:"text"},
			{name:'TenDonThuoc',index:'TenDonThuoc', width:"14%", editable:true,align:'left',edittype:"text"},
			{name:'ID_NhomBenh',index:'ID_NhomBenh', width:"4%", editable:true,align:'left',hidden:true,editrules: {required:true},edittype:"select",formatter:"select",editoptions:{value:nhombenh}},
			{name:'MoTa',index:'MoTa', width:"10%", editable:true,align:'right',hidden:true,edittype:"text"},
			{name:'ID_BacSiTao',index:'ID_BacSiTao', width:"4%", editable:true,align:'left',hidden:false,editrules: {required:true},edittype:"select",formatter:"select",editoptions:{value:idnhanvien}},
			{name:'LaToaChuan',index:'LaToaChuan', width:"3%", editable:true,align:'center',hidden:true,edittype:"checkbox",formatter:"checkbox",formoptions:{ rowpos:3, colpos:1},editoptions: {value:"1:0"}},
			{name:'ApDung',index:'ApDung', width:"3%", editable:true,align:'center',edittype:"text",hidden:true,edittype:"checkbox",formatter:"checkbox",formoptions:{ rowpos:3, colpos:1},editoptions: {value:"1:0"}},
			{name:'GhiChu',index:'GhiChu', width:"10%", editable:true,align:'left',edittype:"text",hidden:false}, 	
                ],
		loadonce: true,
		scroll: false,		 
		modal:true,	 	 
		rowNum: 1000000000,
		pginput:false,
		pgbuttons:false,
		rowList:[],
		pager: '#prowed3',
		sortname: 'ID_DonThuocMau',
		height:100,
		width: 100,
		viewrecords: true,	
		ignoreCase:true,
		shrinkToFit:true,
		sortorder: "desc",
		serializeRowData: function (postdata) { 		 	
			//$("#rowed3").trigger("reloadGrid");		
			//return postdata;
		},
		onSelectRow: function(id) {
			window.n_iddonthuocmau = id;
			var rowData = jQuery(this).getRowData(id); 
			var ID_DonThuocMau = rowData['ID_DonThuocMau']; //alert(ID_DonThuocMau);	
			window.tendonthuocmau=rowData['TenDonThuoc'];
			$("#rowed4").jqGrid('setGridParam',{datatype: 'json',url:"resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_donthuocmauchitiet&id="+ID_DonThuocMau}).trigger('reloadGrid');
                        
            },
		ondblClickRow: function (rowId, rowIndex, columnIndex) {
			$(".ui-icon-pencil").trigger('click'); 
 		},
		loadComplete: function(data) {	
			var ids=$('#rowed3').jqGrid('getDataIDs');
			if(window.huy==0 || window.select_iddonthuocmau==0){
				setTimeout(function(){
					if(window.select_iddonthuocmau==0){
						jQuery('#rowed3').jqGrid("setSelection",ids[0], true);
						$("#rowed3 #"+ids[0]).click();
					}else{
						jQuery('#rowed3').jqGrid("setSelection",window.select_iddonthuocmau, true);
						$("#rowed3 #"+window.select_iddonthuocmau).click();
					}
				
				},200);
			}
			window.huy=0;
           /* if(typeof(window.donthuocmau1)!="undefined"){			 
				tam='rowed3ghead_0_'+window.donthuocmau1
				jQuery('#rowed3').jqGrid('groupingToggle',tam)	
				jQuery('#rowed3').jqGrid("setSelection",window.id_return, true);	
				jQuery('#rowed3'+window.id_return).focus(); 
			}*/
			
		},	  
		caption: "Danh mục đơn thuốc mẫu"
	});
    $("#rowed3").jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false,defaultSearch:"cn"});
	$("#rowed3").jqGrid('navGrid',"#prowed3",{add:permission["add"], edit: permission["edit"], del: permission["delete"],refresh: false,search: false,closeAfterEdit: true,clearAfterAdd :true,closeOnEscape : true,
	
	 addfunc: function() {
		$('#dialog-themdon').dialog('open');
        window.oper='add';
     },
	 editfunc: function(id) {		
				window.oper='edit';
				window.id_edit=id;
				var tendonthuoc = $("#rowed3").jqGrid('getCell', id, 'TenDonThuoc');
				var bacsitao = $("#rowed3").jqGrid('getCell', id, 'ID_BacSiTao');
				var ghichu = $("#rowed3").jqGrid('getCell', id, 'GhiChu');
				setval_new('#bstao_edit',bacsitao); 
				$('#tendon_edit').val(tendonthuoc);
				$('#ghichu_edit').val(ghichu);
				$('#rowed5').jqGrid('setGridParam', {url: 'resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_donthuocmauchitiet&id='+id,datatype:'json'}).trigger('reloadGrid');
				$('#dialog-suadon').dialog('open');
				
				
         },
     }, //options
	
	{},{}	,				 
								  
		{reloadAfterSubmit:false,url:'resource.php?module=<?=$modules?>&view=<?=$view?>&action=controller_donthuoc&oper=del&hienmaloi=a',	navkeys : [ true, 38, 40 ],closeOnEscape : true,	
		beforeShowForm : function(formid) {canhgiua_del(formid);},
		afterSubmit : function(response, postdata) { 				
			if(response.responseText==1){
				var success=false;
				var new_id="Xóa liệu không thành công";													
			}else{
				tooltip_message("Xóa dữ liệu thành công");
				var success=true;	
				var new_id="Xóa dữ liệu thành công";
				load_phong_ban(true);								
			}				
			return [success,new_id] ;
		}
		} // del options
       );
	
	
					  
	resize_control()
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
function create_detail_grid(){
	$("#rowed4").jqGrid({
			url:'resource.php?module=danhmuc&<?=$modules?>&view=<?=$view?>&action=data_donthuocmauchitiet&id=0',               
			datatype: "json",	
			colNames:['','','ID','Xóa','Tên thuốc','Liều dùng','Cách dùng'],
			colModel:[
			{name:'luu',index:'luu',width:"5%",align:'center',hidden:true, editable: false,align:'center'}  ,	
			{name:'sua',index:'sua',width:"5%",align:'center',hidden:true, editable: false,align:'center'}  ,	
			{name:'ID_TTMChiTiet',index:'ID_TTMChiTiet',search:false, width:"100%", editable:false,align:'right',hidden:true},
			{name:'xoa',index:'xoa',width:"5%",align:'center',hidden:false, editable: false,align:'center'}  ,	
			{name:'ID_Thuoc',index:'ID_Thuoc',width:"50%", align:'left',hidden:false, editable: true,edittype:"select", classes:'tenthuoc',editoptions:{value:window.thuoc},formatter: "select",editrules:{custom: true, custom_func: function(value, colName) {
                         return[true,''];
                        },formatter: function (cellValue, options, rowObject) {                    
                            return searhicon
                        }}
		    }, 
			{name:'LieuDungHangNgay',index:'LieuDungHangNgay',search:false, width:"10%",formatter:'integer',formatoptions:{defaultValue: '0'}, editable:true,align:'center',hidden:false,edittype:"text"},
			{name:'CachDung',index:'CachDung',search:false, width:"30%", editable:true,align:'center',hidden:false,edittype:"text"
			,editoptions: { dataEvents:  [{ type: 'keyup', fn: function(e) { 
					if(jwerty.is("enter",e)||jwerty.is("tab",e)){
					//	$('#rowed4_ilsave').click();
						be = '<span class="ui-state-error ui-state-hover  " style="border:0"><span class="ui-icon  ui-icon-closethick" style="margin-left:10px"></span></span>';
						$("#rowed4").jqGrid('setRowData',$("#rowed4").jqGrid('getGridParam', 'selrow'),{xoa:be});
						jQuery("#rowed4").jqGrid('saveRow',$("#rowed4").jqGrid('getGridParam', 'selrow'),null,null,{"extraparam" : {"oper":'add'} }, aftersave,null,null,null,"POST");
					$("#rowed4_iladd").removeClass('ui-state-disabled');
						//$('#rowed4_iladd').click();
					}
                 } }]}},	
          
            ],
		inline_esc:false,
		grid_mode:'',
		grid_move:"",
		grid_save_option:"",	
		column:["LieuDungHangNgay"],
		func_column:["luoi_LieuDungHangNgay"],	
		loadonce: false,
		local:false,
		scroll: false,		 
		modal:true,
        shrinkToFit: true,
		rowNum: 10000000,
		rowList:[],
		pager: '#prowed4',
		sortname: 'ID_Thuoc',
		height:100,
		width:100,
		viewrecords: false,	
		ignoreCase:true,	
		sortorder: "asc",
	    grouping: false,
		// moi them
		inline_editrule:true,
		inline_esc:true,
		cellEdit: true,
		cellsubmit: 'clientArray',
		cell_move_enter:true,
		onCellSelect: function (rowid,iCol,cellcontent,e) {
			if(iCol==3){
        		window.row_id_delete=rowid;
				var rowData = jQuery('#rowed4').jqGrid ('getRowData',rowid);
				if(rowData['ID_TTMChiTiet']!=''){
					if(window.donthuocxoa==''){
					  window.donthuocxoa=rowid;
					}else{
					  window.donthuocxoa=window.donthuocxoa+','+rowid;
					}
					$('#rowed4').jqGrid('delRowData',rowid);
				}else{
					$('#rowed4').jqGrid('delRowData',rowid);
				}
				$("#donthuoc_rowed3_ilcancel").click();
			}
        }, 
		afterSaveCell : function ( rowid, cellname, value, iRow, iCol){	
			$('#'+iRow+'_ID_Thuoc_combobox,.dialog_dm_thuoc .ui-jqgrid-hbox').unbind("keyup");
			$('#'+iRow+'_ID_Thuoc_combobox,.dialog_dm_thuoc .ui-jqgrid-hbox').unbind("click");
			$('body').unbind("click");			
			return [true,'']
		},
		afterEditCell: function (rowid, celname, value, iRow, iCol) {	// them cái này nữa
				window.cell_rowed6=celname;
				rowed6_select=rowid;	
				if((iCol==5)){
					var with_idthuoc=parseFloat($('#jqgh_rowed4_ID_Thuoc').width())-32;			
					$('#rowed4 #'+iRow+'_ID_Thuoc1').hide(); 
					combobox_inline_new('ID_Thuoc',iRow,'rowed4',create_Dm_thuoc_grid,window.data_thuoc,iRow,iRow,donthuoc_callback)
					$('#'+iRow+'_ID_Thuoc_combobox').keyup(function(e){					
						if (jwerty.is('enter',e)){
							$('#rowed4').jqGrid("nextCell",iRow,iCol);
						}
					})
					setTimeout(function(){
						$('#'+iRow+'_ID_Thuoc_combobox').focus();
						$('#'+iRow+'_ID_Thuoc_combobox').select();
					},10)
				}
				$("#"+iRow+"_"+celname).focusout(function(e) {
					$("#rowed4").saveCell(iRow,iCol);
				});
		
		}, 
		afterInsertRow: function(rowid, aData){
    	},
		pgbuttons: false, // disable page control like next, back button
        pgtext: null, // disable pager text like 'Page 0 of 10'	 
		serializeRowData: function (postdata) { 	
			
		},
		serializeRowData: function (postdata) { 		 	
		},
		onSelectRow: function(id){		
			$('#'+window.rowed6_select).removeClass("ui-state-highlight").attr({"aria-selected":"false", "tabindex" : "-1"});
			window.rowed6_select=id;    
		},
		ondblClickRow: function (rowId, rowIndex, columnIndex) {
 		},
		loadComplete: function(data) {	
			var ids = jQuery("#rowed4").jqGrid('getDataIDs');
			for(var i=0;i < ids.length;i++){	
				var cl = ids[i];
				be = '<span class="ui-state-error ui-state-hover  " style="border:0"><span class="ui-icon  ui-icon-closethick" style=" margin-left:10px"></span></span>';
				$("#rowed4").jqGrid('setRowData',ids[i],{xoa:be});
			}			 
		},	  
		caption: "Đơn thuốc mãu chi tiết",
		editurl:'clientArray',
	});	
	$("#rowed4").jqGrid('navGrid',"#prowed4",{add: false, edit: false, del: false, search: false, refresh: false,closeAfterEdit: true,clearAfterAdd :true,navkeys : [ true, 38, 40 ]});
	$("#rowed4").jqGrid('inlineNav', '#prowed4', {add: true, addtext: 'Thêm mới', edittext: 'Sửa', edit: true,save:false,
            addParams: {
				keys:true,
                position: "last",
                addRowParams: {
					keys:true,                  
                    aftersavefunc: function(rowId, response,lastsel) {
						destroy_combobox_inline_new('ID_Thuoc',rowId,'rowed4');	
						$('#rowed4').focus();	
						var current_rowed6=$('#rowed4').jqGrid('getCell',rowId, 'ID_Thuoc')
						
						$('#'+rowId).removeClass("ui-state-highlight").attr({"aria-selected":"false", "tabindex" : "-1"})
						$("#" + rowId).attr("id",current_rowed6);
						$('#'+current_rowed6).removeClass("ui-state-highlight");						
						be='<span class="ui-state-error ui-state-hover  " style="border:0"><span class="ui-icon  ui-icon-closethick" style="float: left; margin-left:10px;"></span></span>';
						$("#rowed4").jqGrid('setRowData',current_rowed6,{xoa:be});
						
						setTimeout(function(){							
						   $("#prowed4 .ui-icon-plus").click();	
						   var ids = jQuery("#rowed4").jqGrid('getDataIDs');	
						   $('#'+ids[ids.length-1]+'_ID_Thuoc1').focus();		
						},200);
						
                    },
					oneditfunc: function(rowId) {	
						combobox_inline_new('ID_Thuoc',rowId,'rowed4',create_Dm_thuoc_grid,window.data_thuoc,0,1,donthuoc_callback)//new
						inline_enter(rowId);
					},	
                    afterrestorefunc: function(rowId) {	
						destroy_combobox_inline_new('ID_Thuoc',rowId,'rowed4');					
						$("#rowed4").jqGrid('bindKeys');
						$('#rowed4').focus();						
                    }				 
                }
            	},	
            editParams: {
				keys:true,				 
				 	aftersavefunc: function(rowId, response,lastsel) {
						destroy_combobox_inline_new('ID_Thuoc',rowId,'rowed4');		
						$('#rowed4').focus();
						 setTimeout(function(){
							 $("#prowed4 .ui-icon-plus").click();
						},200);	
                    },					 	
                	oneditfunc: function(rowId) {
						alert(1);	
						combobox_inline_new('ID_Thuoc',rowId,'rowed4',create_Dm_thuoc_grid,window.data_thuoc,rowId,rowId,donthuoc_callback)//new	
						inline_enter(rowId);
					},	
                    afterrestorefunc: function(rowId) {	
					$("#rowed4").jqGrid('bindKeys');
					destroy_combobox_inline_new('ID_Thuoc',rowId,'rowed4');									   
					},	 
			}
       	 }); 		  
	resize_control()
}


 function create_bacsi(elem, datalocal) {
        datalocal = jQuery.parseJSON(datalocal);
        $(elem).jqGrid({
           datastr: datalocal,
            datatype: "jsonstring",
            colNames: ['Nickname', 'Họ tên','Phòng ban'],
            colModel: [
				{name: 'nick', index: 'nick', hidden: false,width:"15%"},
                {name: 'hovaten', index: 'hovaten', hidden: false,width:"45%"},				
				{name: 'phongban', index: 'phongban', hidden: false,width:"30%"},
                
            ],
            hidegrid: false,
            gridview: true,
            loadonce: true,
            scroll: 1,
            modal: true,
            rowNum: 100,
            rowList: [],
            height: 200,
            width: 500,
            viewrecords: true,
            ignoreCase: true,
            shrinkToFit: true,
            cmTemplate: {sortable: false},
            sortorder: "desc",
            serializeRowData: function(postdata) {
            },
            onSelectRow: function(id) {

              var rowData = $(this).getRowData(id);
              //alert(rowData);
            //  $("#tenbacsi").val(rowData["hovaten"]);

            },
            ondblClickRow: function(id, rowIndex, columnIndex) {
            },
            loadComplete: function(data) {
            },
        });
        $(elem).jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});
        $(elem).jqGrid('bindKeys', {});
    }


function create_Dm_thuoc_grid(elem,datalocal){	
	datalocal=jQuery.parseJSON(datalocal);	 
	$(elem).jqGrid({
	datastr:datalocal,	
	datatype: "jsonstring" ,
	colNames:['Tên thuốc','Nhóm thuốc','', 'Nước sản xuất','Nhà sản xuất','Hoạt chất','SignNumber',''],
	colModel:[			
		{name:'TenGoc',index:'TenGoc'},	
		{name:'TenNhomThuoc',index:'TenNhomThuoc'},		 
		{name:'MaThuoc',index:'MaThuoc',hidden :true},		
		{name:'TenDayDu',index:'TenDayDu',hidden :true},	
		{name:'TenNhaSanXuat',index:'TenNhaSanXuat',hidden :true},	 	 
		{name:'HoatChatChinh',index:'HoatChatChinh'},
		{name:'SignNumber',index:'SignNumber',hidden :true},
		{name:'TenDonViTinh',index:'TenDonViTinh',hidden :false}			
	],
	hidegrid: false,
	gridview: true,
	loadonce: true,
	scroll: true,		 
	modal:true,	 
	rowNum: 200,
	rowList:[],
	height:($(window).height() / 100 * parseFloat(40)).toFixed(0),
	width: (($(window).width() / 100 * parseFloat(58)).toFixed(0)),
	viewrecords: true,	
	ignoreCase:true,
	shrinkToFit:true,
	cmTemplate: {sortable:false},		
	sortorder: "desc",
	serializeRowData: function (postdata) { 
	},
	onSelectRow: function(id){	
		/*//$("#rowed3").jqGrid('getGridParam', 'selrow');
		$('#rowed3').jqGrid('setCell', $("#rowed3").jqGrid('getGridParam', 'selrow'), 'HangSX', '&nbsp;');
		$('#rowed3').jqGrid('setCell', $("#rowed3").jqGrid('getGridParam', 'selrow'), 'NuocSX', '&nbsp;');
		var rowData = $(elem).getRowData(id);
		$('#rowed3').jqGrid("setCell", $("#rowed3").jqGrid('getGridParam', 'selrow'), "HangSX",rowData['TenNhaSanXuat'] );
		$('#rowed3').jqGrid("setCell", $("#rowed3").jqGrid('getGridParam', 'selrow'), "NuocSX",rowData['TenDayDu'] );
		$('#rowed3').jqGrid("setCell", $("#rowed3").jqGrid('getGridParam', 'selrow'), "DonViTinh",rowData['TenDonViTinh'] );						
		//$('#rowed3').jqGrid("setCell", $("#rowed3").jqGrid('getGridParam', 'selrow'), "DonViTinh",rowData['TenDonViTinh'] );*/
		//alert(rowData['TenDonViTinh']);
		
	},
	ondblClickRow: function (id, rowIndex, columnIndex) {
			
	},
	loadComplete: function(data) {				
		
	},	  		
});	
	 $(elem).jqGrid('navGrid',"#prowed_DM_thuoc",{add: false, edit: false, del: false, search: false,closeAfterEdit: true,clearAfterAdd :true,closeOnEscape : true });				 
	 $(elem).jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false,defaultSearch:"bw"});
	 $(elem).jqGrid('bindKeys', {} );		
}

function load_phong_ban(status){
	window.idnhanvien = $.ajax({url: 'resource.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=0&tables=DM_NhanVien&id=ID_NhanVien&name=NickName', async: false, success: function(data, result) {if (!result) alert('Không load được danh mục phòng ban');}}).responseText;
	window.nhombenh = $.ajax({url: 'resource.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=0&tables=DM_NhomBenh&id=ID_NhomBenh&name=TenNhomBenh', async: false, success: function(data, result) {if (!result) alert('Không load được danh mục nhóm bệnh');}}).responseText;
	window.idthuoc = $.ajax({url: 'resource.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=0&tables=DM_Thuoc&id=ID_Thuoc&name=TenGoc', async: false, success: function(data, result) {if (!result) alert('Không load được danh mục thuoc');}}).responseText;
        //window.nhombenh = $.ajax({url: 'resource.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=0&tables=DM_&id=ID_DonThuocMau&name=TenDonThuoc', async: false, success: function(data, result) {if (!result) alert('Không load được danh mục thuoc mau');}}).responseText;
       
}

function create_layout() {
	$('#panel_main').layout({
		resizerClass: 'ui-state-default'
				, east: {
			resizable: true
					, size: "60%"
					, spacing_closed: 27
					, togglerLength_closed: 85
					, togglerAlign_closed: "center"
					, togglerContent_closed: "<div id='menu_toggle'>X<BR>O<BR>N<BR>G</div>"
					, togglerTip_closed: "Open & Pin Menu"
					, sliderTip: "Slide Open Menu"
					, slideTrigger_open: "mouseover"
					, fxSettings_close: {easing: "easeOutQuint"}
					, initClosed:    false
			, onresize_end: function() {
				resize_control();

			}
			, onopen_end: function() {

				resize_control();
				//alert('c');
			}
			, onclose_end: function() {


			}

		}
		, center: {
			resizable: true
					, size: "40%"

					, fxName: "drop"		// none, slide, drop, scale
					, fxSpeed_open: 450
					, fxSpeed_close: 450
					, fxSettings_open: {easing: "easeInQuint"}
			, fxSettings_close: {easing: "easeOutQuint"}

			, onresize_end: function() {
				resize_control();
			}
			, onopen_end: function() {

			  //  resize_control();

			}
			, onclose_end: function() {



			}
		}
	});
}
function donthuoc_callback(tam){
	$("#"+tam).keydown(function(e) {
		if (jwerty.is("enter",e)||jwerty.is("tab",e)) {
			setTimeout(function(){
				$("#rowed4 #"+$("#rowed4").jqGrid('getGridParam', 'selrow')+"_LieuDungHangNgay").focus();
				$("#rowed4 #"+$("#rowed4").jqGrid('getGridParam', 'selrow')+"_LieuDungHangNgay").select();
			},100);
		}
	});

}
function inline_enter(rowid){
	$('#rowed4 #'+rowid+'_LieuDungHangNgay,#rowed4 #'+rowid+'_CachDung').unbind('keydown')
	$('#rowed4 #'+rowid+'_LieuDungHangNgay,#rowed4 #'+rowid+'_CachDung').bind('keydown',function(e){
		if ((jwerty.is('enter',e))||(jwerty.is('tab',e))){
			if($('#rowed4 #'+rowid+'_LieuDungHangNgay').is(":focus")){
				setTimeout(function(){
					$('#rowed4 #'+rowid+'_CachDung').focus();
					$('#rowed4 #'+rowid+'_CachDung').select();
				},500);			
			}
		}//if shift tab
	})
}
function aftersave(rowId, response,lastsel) {
	destroy_combobox_inline_new('ID_Thuoc',rowId,'rowed4');		
	var current_rowed6=$('#rowed4').jqGrid('getCell',rowId, 'ID_Thuoc')
	$('#rowed4').focus();	
	$('#'+rowId).removeClass("ui-state-highlight").attr({"aria-selected":"false", "tabindex" : "-1"})
	$("#" + rowId).attr("id",current_rowed6);
	$('#'+current_rowed6).removeClass("ui-state-highlight");						
	be='<span class="ui-state-error ui-state-hover  " style="border:0"><span class="ui-icon  ui-icon-closethick" style="float: left; margin-left:10px;"></span></span>';
	$("#rowed4").jqGrid('setRowData',current_rowed6,{xoa:be});

	setTimeout(function(){							
	   $("#prowed4 .ui-icon-plus").click();	
	   var ids = jQuery("#rowed4").jqGrid('getDataIDs');	
	   $('#'+ids[ids.length-1]+'_ID_Thuoc1').focus();		
	},200);
 }
function check_idthuoc(tam){
	
}
function resize_control() {
	$("#rowed3").setGridWidth($(".left_col").width()-6);
	$("#rowed3").setGridHeight($(".left_col").height()-104);
	$("#rowed4").setGridWidth($('.right_col').width()-6);
	$("#rowed4").setGridHeight($('.right_col').height()-80);	
}
</script>



