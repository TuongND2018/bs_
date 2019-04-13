<!--<link rel="stylesheet" href="../../../css/form_css.css" type="text/css" media="screen"/>-->

<!DOCTYPE html>
<style type="text/css">

input[id*="SoLuong"],input[id*="DonGia"],input[id*="ThanhTien"] {
  text-align:right;
}

	#rowed3 td,#rowed6 td ,#DM_thuoc td  {	 
		word-wrap:normal!important;
		white-space:nowrap;
	}
#rowed3 td, #rowed4 td,#rowed6 td ,#DM_thuoc td {
	line-height: 25px!important;
	font-size: 11px!important;
	/*text-wrap:break-word!important;*/
	word-wrap:normal!important;
	 
}
.form_row label {
	text-align: right!important;
}
.ui-menu {
	width: 150px;
	display: none;
	position: absolute;
	box-shadow: 0px 0px 3px #333;
	z-index: 100000;
}
#ID_NCC1, #SoHopDong, #SoDonDatHang {
	width: 140px!important;
}
#ID_Kho1 {
	width: 70px!important;
}
#search_border{
 	border:1px dotted #327E04;
	padding:8px 0px;
	margin:6px 0px 0px 0px;	
}
#ID_NCC_combobox{
	margin-top:1px;	
}
.error_null{
	background-color:#FF0;
}
#tu_ngay,#den_ngay{
	margin-top:4px;
}
</style>
<body>
<div id="dialog-themmoi" title="Thêm mới" style="display:none;">
  <div style="height:30px; width:100%; border:solid 1px #CCC; border-radius:4px; padding-left:3px; padding-top:3px;">
  	<label for="kho">Kho:</label> <input type="text" id="kho">
    <label for="nhanvien" style="margin-left:30px">Nhân viên:</label><input type="text" id="nhanvien">
    <label for="ghichu" style="margin-left:30px">Ghi chú:</label> <input id="ghichu" type="text" style="width:250px;" >
  </div>
  <table id="rowed_themmoi" >
    </table>
<div id="grid_footer" ></div>
</div>

<div id="dialog-form" title="Thông báo" style="display:none;">
  Bạn chắc chắn muốn xóa dòng này?
</div>
<div style="border:1px solid #CCC; border-radius:4px; height:30px; margin-left: 5px; margin-top: 5px; padding-left: 5px; width: 98.7%; padding-left:5px;">
<label style="font-weight:bold">Từ ngày: </label> <input id="tu_ngay"  value="<?php echo date("d/m/y") ?>"><label style="font-weight:bold"> đến ngày: </label> <input id="den_ngay" value="<?php echo date("d/m/y") ?>"><button style="margin-left:10px; margin-top:-4.5px" id="timkiem">Tìm kiếm</button>
</div>
    <table id="rowed3" >
    </table>
<div id="prowed3" ></div>
<div style="height:3px;"></div>
    <table id="rowed4" >
    </table>
<div id="prowed4" ></div>
</body>
</html>
<script type="text/javascript">
jQuery(document).ready(function() {	
	window.ds_xoa='';
 	 $.dateEntry.setDefaults({spinnerImage: ''});
	 $("#den_ngay,#tu_ngay").dateEntry({dateFormat:$.cookie("ngayDateEntry")});
	 $("#den_ngay,#tu_ngay").datepicker({
		showWeek: true,
		defaultDate: "+1w",
		changeMonth: true,
		changeYear: true,
		numberOfMonths: 1,
		dateFormat:  $.cookie("ngayJqueryUi"),
		onClose: function(selectedDate) {
		   
		},
		onSelect: function(dat, inst) {
			 
		}
	});
	create_combobox_new('#nhom',create_nhomcha,'bw','','data_nhomcha',0);
	create_combobox_new('#nhanvien',create_nhanvien,'bw','','data_nhanvien',<?=$_SESSION['user']['id_user']?>);
	create_combobox_new('#kho',create_kho,'bw','','data_kho_thietbi_vattu',0);
	
	window.thietbi_vattu=  $.ajax({                       
		url: "resource.php?module=web_services&function=get_auto_edit_option_byid&action=index&term=&status=0&tables=GD2_DM_ThietBi_VatTu&id=ID_Loai&name=TenLoai",
		async:false                       
	}).responseText;
	$.get('resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_thietbi_vattu').done(function(data) {
		window.data_thietbi_vattu=data;
	})
	
	
	$("#timkiem").click(function(e) {
        $("#rowed3").jqGrid('setGridParam',{datatype: 'json',url:"resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_nhapkho&tungay="+$("#tu_ngay").val()+"&denngay="+$("#den_ngay").val()}).trigger('reloadGrid');	
    });
	
	create_sub_grid();
	window.ids=0;
	create_grid(); 
	
	$("#timkiem").click();	
	$( "#dialog-form" ).dialog({
      autoOpen: false,
      height: 150,
      width: 350,
      modal: true,
      buttons: {
		"Ok": function() {
			$( this ).dialog( "close" );
			$('#rowed_themmoi').jqGrid('delRowData',window.row_id_delete);
			$("#rowed_themmoi_iladd").removeClass('ui-state-disabled');
			if(window.ds_xoa==''){
				window.ds_xoa=window.row_id_delete;
			}else{
				window.ds_xoa=window.ds_xoa+','+window.row_id_delete;
			}
		},
		Cancel: function() {
			$( this ).dialog( "close" );
		}
	  }
    });
	
	phanquyen();
	create_themmoi();
	$("#rowed_themmoi_iladd").removeClass('ui-state-disabled');
	
	$( "#dialog-themmoi" ).dialog({
      resizable: false,
	   autoOpen: false,
      height:550,
	  width:775,
      modal: true,
      buttons: {
        "Lưu": function() {
          $( this ).dialog( "close" );
		  	var ids = $('#rowed_themmoi').jqGrid('getDataIDs');
			var phancach = "";
			var dataToSend='[';
			for(var i=0;i<=ids.length-1;i++){
				dataToSend += phancach+'{';
				var rowData = $('#rowed_themmoi').jqGrid ('getRowData', ids[i]);
				dataToSend += '"id":' + JSON.stringify(ids[i])+',';
				dataToSend += '"ID_Loai":' + JSON.stringify(rowData['ID_Loai'])+',';
				dataToSend += '"SoLuong":' + JSON.stringify(rowData['SoLuong'])+',';
				dataToSend += '"DonGia":' + JSON.stringify(rowData['DonGia'])+',';
				dataToSend += '"Luu":' + JSON.stringify(rowData['Luu'])+',';
				dataToSend += '"Sua":' + JSON.stringify(rowData['Sua']);
				dataToSend += '}';
				phancach=',';
			}
			dataToSend+=']';
			//alert(dataToSend);
			postData='{"id":'+dataToSend+'}';
			postData=$.parseJSON(postData);
			
			$.post('resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=controller&oper='+window.oper+'&hienmaloi=0&nhanvien='+$('#nhanvien_hidden').val()+'&kho='+$('#kho_hidden').val()+'&id='+window.id_edit+'&xoa='+window.ds_xoa+'&ghichu='+$("#ghichu").val(),postData).done(function(data){
				$("#timkiem").click();
				tooltip_message("Lưu thành công");
			});
        },
        'Thoát': function() {
          $( this ).dialog( "close" );
        }
      }
    });
	
	$('#timkiem').button();
})
$(window).resize(function(e) {
    $("#rowed3").setGridWidth($(window).width()-10);
	$("#rowed3").setGridHeight($(window).height()/100*30);
	$("#rowed4").setGridWidth($(window).width()-10);
	$("#rowed4").setGridHeight($(window).height()/100*34);
});
var lastsel;
function create_grid(){
 $("#rowed3").jqGrid({
		data:[],		
		datatype: "local",		
		colNames:['Mã phiếu','Người nhập','Ngày nhập','K.Toán duyệt','Ngày K.Toán duyệt','Q.Lý duyệt','Q.Lý duyệt lúc','Kho','Ghi chú','',''],
		colModel:[
			{name:'MaPhieu',index:'MaPhieu', width:"7%", editable:true,align:'left',hidden:false,editrules: {required:true},edittype:"text"},
			{name:'NguoiNhap',index:'NguoiNhap', width:"10%", editable:true,align:'left',hidden:false},
			{name:'NgayNhap',index:'NgayNhap', width:"10%", editable:true,align:'left',hidden:false},
			{name:'KeToan',index:'KeToan', width:"10%", editable:true,align:'left',hidden:false},
			{name:'KeToanDuyetLuc',index:'KeToanDuyetLuc', width:"10%", editable:true,align:'left',hidden:false},
			{name:'NguoiQuanLy',index:'NguoiQuanLy', width:"10%", editable:true,align:'left',hidden:false},
			{name:'NguoiQuanLyDuyetLuc',index:'NguoiQuanLyDuyetLuc', width:"10%", editable:true,align:'left',hidden:false},
			{name:'Kho',index:'Kho', width:"18%", editable:true,align:'left',hidden:false},
			{name:'GhiChu',index:'GhiChu', width:"10%", editable:true,align:'left',hidden:false},	 
			{name:'ID_NguoiNhap',index:'ID_NguoiNhap', width:"10%", editable:true,align:'left',hidden:true},	 
			{name:'ID_Kho',index:'ID_Kho', width:"10%", editable:true,align:'left',hidden:true},	 	 	 
		],
		multiselect :false,
		loadonce: true,
		scroll: false,		 
		modal:true,	 	 
		rowNum: 1000000,		 
		rowList: [], // disable page size dropdown
        pgbuttons: false, // disable page control like next, back button
        pgtext: null, // disable pager text like 'Page 0 of 10'
		pager: '#prowed3',
		sortname: 'NgayNhap',
		height:100,
		width: 100,
		viewrecords: true,	
		ignoreCase:true,
		shrinkToFit:true,
		sortorder: "desc",
		serializeRowData: function (postdata) { 		 	
			
		},
		onSelectRow: function(id) {
			window.id_edit=id;
			  $("#rowed4").jqGrid('setGridParam',{datatype: 'json',url:"resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_nhapkho_chitiet&id="+id}).trigger('reloadGrid');	
		},
		ondblClickRow: function (rowId, rowIndex, columnIndex) {
			$("#prowed3 .ui-icon-pencil").trigger('click'); 
 		},
		loadComplete: function(data) {
			grid_filter_enter("#rowed3") ;
			ids = $('#rowed3').jqGrid('getDataIDs');				 
			$("#rowed3").jqGrid("setSelection",ids[0], true);
		},	  
		caption: "Phiếu nhập Thiết bị - Vật tư"
	});	
	$("#rowed3").jqGrid('navGrid',"#prowed3",{add: false,del:true,edit:false,search:false},
	{},
	{},
	{reloadAfterSubmit: true, url: 'resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=controller&oper=del'}	
	);
	
	$("#rowed3").jqGrid('navButtonAdd', '#prowed3', {caption: "Thêm mới", buttonicon: 'ui-icon-document',id : 'add_rowed3',
            onClickButton: function() {
				window.oper='add';
				$('#rowed_themmoi').jqGrid('clearGridData');
				$( "#dialog-themmoi" ).dialog('open');         
            },
            title: "Thêm mới",
            position: "last"
    });
	$("#rowed3").jqGrid('navButtonAdd', '#prowed3', {caption: "Sửa", buttonicon: 'ui-icon-pencil',id : 'edit_rowed3',
            onClickButton: function() {
				window.oper='edit';
				$('#rowed_themmoi').jqGrid('clearGridData');
				$("#rowed_themmoi").jqGrid('setGridParam',{datatype: 'json',url:"resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_ds_nhapkho&id="+window.id_edit}).trigger('reloadGrid');
				var rowData = $("#rowed3").getRowData(window.id_edit);	
				setval_new('#kho',rowData['ID_Kho']);
				setval_new('#nhanvien',rowData['ID_NguoiNhap']);
				$('#ghichu').val(rowData['GhiChu']);
				
				$( "#dialog-themmoi" ).dialog('open');
				
				
            },
            title: "Sửa",
            position: "last"
    });
	$("#rowed3").jqGrid('navButtonAdd', '#prowed3', {caption: "Kế toán duyệt", buttonicon: 'ui-icon-check',id : 'ktduyet_rowed3',
            onClickButton: function() {
				$.post('resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=controller_duyet&oper=1&id='+window.id_edit).done(function(data){
					$("#timkiem").click();
					tooltip_message("Lưu thành công");
				});
            },
            title: "Kế toán duyệt",
            position: "last"
    });
	$("#rowed3").jqGrid('navButtonAdd', '#prowed3', {caption: "Quản lý duyệt", buttonicon: 'ui-icon-check',id : 'qlduyet_rowed3',
            onClickButton: function() {
				$.post('resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=controller_duyet&oper=2&id='+window.id_edit).done(function(data){
					$("#timkiem").click();
					tooltip_message("Lưu thành công");
				});
            },
            title: "Quản lý duyệt",
            position: "last"
    });
		
	$("#rowed3").jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});
	$("#rowed3").setGridWidth($(window).width()-10);
	$("#rowed3").setGridHeight($(window).height()/100*30);
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

function create_sub_grid(){	 
 $("#rowed4").jqGrid({
		data:[],		
		datatype: "local",	
		colNames:['ID_Loai','ID_NhapKho','Tên','Số lượng','Đơn giá'],
		colModel:[		
			{name:'ID_Loai',index:'ID_Loai', width:"10%", editable:false,align:'left',edittype:"text",hidden:true},
			{name:'ID_NhapKho',index:'ID_NhapKho', width:"10%", editable:false,align:'left',edittype:"text",hidden:true},
			{name:'TenLoai',index:'TenLoai', width:"50%", editable:false,align:'left',edittype:"text",hidden:false},
			{name:'SoLuong',index:'SoLuong', width:"20%", editable:false,align:'right',edittype:"text",hidden:false},
			{name:'DonGia',index:'DonGia', width:"20%", editable:false,formatter:currency_convert2,align:'right',edittype:"text",hidden:false},
			
		],
		loadonce: false,
		scroll: false,		 
		modal:true,	 	 
		rowNum: 1000000,		
		rowList: [], // disable page size dropdown
        pgbuttons: false, // disable page control like next, back button
        pgtext: null, // disable pager text like 'Page 0 of 10'		
		sortname: 'ID_Loai',
		height:100,
		width: 100,
		viewrecords: true,	
		ignoreCase:true,
		shrinkToFit:true,
		sortorder: "desc",
		serializeRowData: function (postdata) { 		
		},
		onSelectRow: function(id) {		 
		},
		ondblClickRow: function (rowId, rowIndex, columnIndex) {
			$("#prowed3 .ui-icon-pencil").trigger('click'); 
					
 		},
		loadComplete: function(data) {
				
		},	  
		caption: "Phiếu nhập Thiết bị - Vật tư chi tiết"
	});	
	 
	$("#rowed4").setGridWidth($(window).width()-10);
	$("#rowed4").setGridHeight($(window).height()/100*34);
				
}
function create_themmoi(){	
 var searhicon = '<span class="ui-state-error ui-state-hover  " style="border:0"><span class="ui-icon  ui-icon-closethick" style="float: left; margin-right: .3em;"></span></span>';			
	 $("#rowed_themmoi").jqGrid({				 
		data:[],		
		datatype: "local",	
		colNames:['','Tên loại','Số lượng', "Đơn giá",'',''],
		colModel:[	
			{name:'xoa',index:'xoa',width:"1%",align:'center',hidden:false, editable: false}  ,	
			{name:'ID_Loai',index:'ID_Loai', width:"15%", editable:true,align:'left',edittype:"text",hidden:false,edittype:"select",editoptions:{value:window.thietbi_vattu},formatter: "select",editrules:{custom: true, custom_func: function(value, colName) {
                           return check_null(value,colName);
                        }}},
			{name:'SoLuong',index:'SoLuong',width:"8%",formatter:currency_convert2,align:'right',hidden:false, editable: true
			,editrules:{custom: true,required:true, custom_func: function(value, colName) {
                           var id_row = $('#rowed_themmoi').jqGrid('getGridParam', 'selrow')
                           return check_soluong(value,colName,id_row);
                        }},editoptions: { dataEvents:  [{ type: 'keyup', fn: function(e) { 
					if(jwerty.is("enter",e)||jwerty.is("tab",e)){
						if($.isNumeric($("#"+$("#rowed_themmoi").jqGrid('getGridParam', 'selrow')+"_SoLuong").val())==true && $("#"+$("#rowed_themmoi").jqGrid('getGridParam', 'selrow')+"_SoLuong").val()>0){
							setTimeout(function(){
								$("#"+$(e.target).attr('id').split('_')[0]+"_DonGia").focus();
								$("#"+$(e.target).attr('id').split('_')[0]+"_DonGia").select();
							},200);
						}else{
							tooltip_message("Số lượng phải lớn hơn 0");	
						}
					}
                 } }]}},
			//{name:'DonGia',index:'DonGia', width:"20%", editable:false,align:'right',edittype:"text",hidden:false},
			{name:'DonGia',index:'DonGia',width:"8%",formatter:currency_convert,align:'right',hidden:false, editable: true
			,editrules:{custom: true,required:true, custom_func: function(value, colName) {
                           var id_row = $('#rowed_themmoi').jqGrid('getGridParam', 'selrow')
                           return check_soluong(value,colName,id_row);
                        }},editoptions: { dataEvents:  [{ type: 'keyup', fn: function(e) { 
					if(jwerty.is("enter",e)||jwerty.is("tab",e)){
						if($.isNumeric($("#"+$("#rowed_themmoi").jqGrid('getGridParam', 'selrow')+"_DonGia").val())==true && $("#"+$("#rowed_themmoi").jqGrid('getGridParam', 'selrow')+"_DonGia").val()>0){
							$('#rowed_themmoi_ilsave').click();
							be = '<span class="ui-state-error ui-state-hover  " style="border:0"><span class="ui-icon  ui-icon-closethick" style="float: left; margin-right: .3em;"></span></span>';
							$("#rowed_themmoi").jqGrid('setRowData',$("#rowed_themmoi").jqGrid('getGridParam', 'selrow'),{xoa:be});
							$('#rowed_themmoi_iladd').click();
						}else{
							tooltip_message("Đơn giá phải lớn hơn 0");	
						}
					}
                 } }]}},								
				{name:'Luu',index:'Luu',search:false, width:"8%",editrules: {required: false}, editable:false,align:'left',hidden:true,edittype:"text"}, 	          
				{name:'Sua',index:'Sua',search:false, width:"8%",editrules: {required: false}, editable:false,align:'left',hidden:true,edittype:"text"}, 	                      
		],
		inline_esc:false,
		grid_mode:'',
		grid_move:"",	
		loadonce: true,	
		scroll: false,		 
		modal:true,
        shrinkToFit: true,
		rowNum: 10000000,
		rowList:[],
		pager: '#grid_footer',
		sortname: 'ID_Loai',
		height:100,
		width:100,
		viewrecords: false,	
		ignoreCase:true,	
		sortorder: "asc",
		pgbuttons: false, 
        pgtext: null, 
		onCellSelect: function (rowid,iCol,cellcontent,e) {
			if(iCol==0){
				//alert(iCol)
        		window.row_id_delete=rowid;
				$('#dialog-form').dialog('open');  
			}
        }, 
		onSelectRow: function(id){	

		},
		ondblClickRow: function (rowId, rowIndex, columnIndex) {
			$("#grid_footer .ui-icon-pencil").click();	
 		},
		loadComplete: function(data) {	 	
			var ids = jQuery("#rowed_themmoi").jqGrid('getDataIDs');
			for(var i=0;i < ids.length;i++){	
				var cl = ids[i];
				be = '<span class="ui-state-error ui-state-hover  " style="border:0"><span class="ui-icon  ui-icon-closethick" style="float: left; margin-right: .3em;"></span></span>';
				$("#rowed_themmoi").jqGrid('setRowData',ids[i],{xoa:be});
			}	
			/*if(reload_data_thietbi_vattu==1){
				$("#rowed_themmoi").jqGrid("setSelection",rowed_themmoi_id, true);	
				reload_data_thietbi_vattu=0;
			}*/
			/*if(ids.length>0){
				if(window.chotphieu==1){
					$("#rowed_themmoi_in").removeClass('ui-state-disabled');
					$("#rowed_themmoi_chot").addClass('ui-state-disabled');
				}else{
					$("#rowed_themmoi_in").addClass('ui-state-disabled');
					$("#rowed_themmoi_chot").removeClass('ui-state-disabled');
				}
				
			}*/
		},
		caption: "<span id='tieude'>Phiếu nhập chi tiết</span>",
	});
	
	$("#rowed_themmoi").jqGrid('navGrid',"#grid_footer",{add: false, edit: false, del: false, search: false, refresh: false,closeAfterEdit: true,clearAfterAdd :true,navkeys : [ true, 38, 40 ]});
	
	$("#rowed_themmoi").jqGrid('inlineNav', '#grid_footer', {add: true, addtext: '', edittext: '', edit: false, save:true,
            addParams: {
				keys:true,
                position: "last",
                addRowParams: {
					keys:true,                  
                    data_thietbi_vattufunc: function(rowId, response,lastsel) {
					//	destroy_combobox_inline('ID_Loai',rowId,'rowed_themmoi','#dialog_dm_thuoc_'+rowId,'#DM_thuoc_'+rowId);
						destroy_combobox_inline_new('ID_Loai',rowId,'rowed_themmoi');	
						/*reload_data_thietbi_vattu=1;
						window.rowed_themmoi_id=response.responseText;
						$('#rowed_themmoi').jqGrid('setGridParam', { datatype: "json"}).trigger("reloadGrid");
						tooltip_message("Thêm mới thành công")*/
						
                    },
					oneditfunc: function(rowId) {	
						//create_combobox_inline('ID_Loai',rowId,'rowed_themmoi','#dialog_dm_thuoc_'+rowId,'#DM_thuoc_'+rowId,create_dm_thietbi_vattu,data_thietbi_vattu,0,inline_enter,'ID_Loai_combobox');
						combobox_inline_new('ID_Loai',rowId,'rowed_themmoi',create_dm_thietbi_vattu,window.data_thietbi_vattu,0,1,cb_callback)//new
						inline_enter(rowId);
					},	
                    afterrestorefunc: function(rowId) {	
					//	destroy_combobox_inline('ID_Loai',rowId,'rowed_themmoi','#dialog_dm_thuoc_'+rowId,'#DM_thuoc_'+rowId)		
						destroy_combobox_inline_new('ID_Loai',rowId,'rowed_themmoi');				
						$("#rowed_themmoi").jqGrid('bindKeys');
						$('#rowed_themmoi').focus();						
                    }				 
                }
            	},	
            editParams: {
				keys:true,				 
				 	data_thietbi_vattufunc: function(rowId, response,lastsel) {
						destroy_combobox_inline('ID_Loai',rowId,'rowed_themmoi','#dialog_dm_thuoc_'+rowId,'#DM_thuoc_'+rowId)	
						$('#rowed_themmoi').focus();
						tooltip_message("Cập nhật thành công");
                    },					 	
                	oneditfunc: function(rowId) {	
						combobox_inline_new('ID_Loai',rowId,'rowed_themmoi',create_dm_thietbi_vattu,window.data_thietbi_vattu,0,1,cb_callback)//new
						inline_enter(rowId);
						var rowData = $('#rowed_themmoi').getRowData(rowId);	
						SoLoNhaSanXuat  =rowData["SoLoNhaSanXuat"];
					},	
                    afterrestorefunc: function(rowId) {	
					$("#rowed_themmoi").jqGrid('bindKeys');
					destroy_combobox_inline_new('ID_Loai',rowId,'rowed_themmoi');							   
					},	 
			}
       	 });
		/* $("#rowed_themmoi").jqGrid('navButtonAdd', '#grid_footer', {caption: "Lưu [F10]", buttonicon: 'ui-icon-disk',id:'rowed_themmoi_luu',
            onClickButton: function() {	

            },
            title: "Lưu [F10]",
            position: "last"
    }); */
		/* $("#rowed_themmoi").jqGrid('navButtonAdd', '#grid_footer', {caption: "In phiếu", buttonicon: 'ui-icon-print',id:'rowed_themmoi_in',
            onClickButton: function() {	

            },
            title: "In phiếu",
            position: "last"
    	}); */
		 
	$("#rowed_themmoi_ilsave").hide();  
	setTimeout(function(){
		$("#rowed_themmoi_iladd").click();	
	},700)
	$("#rowed_themmoi").setGridWidth(749);
	$("#rowed_themmoi").setGridHeight(330);
} 
function create_dm_thietbi_vattu(elem,datalocal){	
	datalocal=jQuery.parseJSON(datalocal);	 
	$(elem).jqGrid({
	datastr:datalocal,	
	datatype: "jsonstring" ,
	colNames:['Tên','Nhóm'],
	colModel:[			
		{name:'TenGoc',index:'TenGoc'},	
		{name:'Nhom',index:'Nhom'},		
	],
	hidegrid: false,
	gridview: true,
	loadonce: true,
	scroll: true,		 
	modal:true,	 
	rowNum: 200,
	rowList:[],
	height:($("#dialog-themmoi").height() / 100 * parseFloat(40)).toFixed(0),
	width: (($("#dialog-themmoi").width() / 100 * parseFloat(58)).toFixed(0)),
	viewrecords: true,	
	ignoreCase:true,
	shrinkToFit:true,
	cmTemplate: {sortable:false},		
	sortorder: "desc",
	serializeRowData: function (postdata) { 
	},
	onSelectRow: function(id){	
	
	},
	ondblClickRow: function (id, rowIndex, columnIndex) {
			
	},
	loadComplete: function(data) {				
		
	},	  		
});	
	 $(elem).jqGrid('navGrid',"#prowed_dm_thietbi_vattu",{add: false, edit: false, del: false, search: false,closeAfterEdit: true,clearAfterAdd :true,closeOnEscape : true });				 
	 $(elem).jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false,defaultSearch:"bw"});
	 $(elem).jqGrid('bindKeys', {} );		
}
function inline_enter(rowid){
	$('#rowed_themmoi #'+rowid+'_ID_Loai_combobox').bind('keydown',function(e){
		if(jwerty.is("enter",e)||jwerty.is("tab",e)){
			setTimeout(function(){
				$("#"+$(e.target).attr('id').split('_')[0]+"_SoLuong").focus();
				$("#"+$(e.target).attr('id').split('_')[0]+"_SoLuong").select();
			},200);
		}
	});
	$('#rowed_themmoi #'+rowid+'_SoLuong').bind('keydown',function(e){
		if(jwerty.is("enter",e)||jwerty.is("tab",e)){
			setTimeout(function(){
				$("#"+$(e.target).attr('id').split('_')[0]+"_DonGia").focus();
				$("#"+$(e.target).attr('id').split('_')[0]+"_DonGia").select();
			},200);
		}
	});
}
function cb_callback(){
	
}
function currency_convert (cellvalue, options, rowObject){
   return parseFloat(convert_comma_dot_cacl(cellvalue)).formatMoney(1, ',', '.');
}
function currency_convert2 (cellvalue, options, rowObject){
   return parseFloat(convert_comma_dot_cacl(cellvalue)).formatMoney(0, ',', '.');
}
function check_null(value,colname){	
	if($.trim(value)==''){			 
		return [false,'Tên gốc bắt buộc phải có','ID_Loai_combobox']
	}else{
		return[true,'','SoLuong']
	}
}

function check_soluong(value,colName,id_row){
	window.tonkhokhongdu=0;
	return[true,'']
}

function create_nhomcha(elem, datalocal) {
        datalocal = jQuery.parseJSON(datalocal);
        $(elem).jqGrid({
            datastr: datalocal,
            datatype: "jsonstring",
            colNames: ['Nhóm'],
            colModel: [
                {name: 'nhom', index: 'nhom', hidden: false,width:1}
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
             // $("#rowed3").jqGrid('setGridParam',{datatype: 'json',url:"resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_thietbi_vattu&idnew="+0+'&idnhomcha='+window.idnhomcha}).trigger('reloadGrid');		

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
	
function create_nhanvien(elem, datalocal) {
        datalocal = jQuery.parseJSON(datalocal);
        $(elem).jqGrid({
            datastr: datalocal,
            datatype: "jsonstring",
            colNames: ['NickName','Họ tên','Phòng ban'],
            colModel: [
                {name: 'NickName', index: 'NickName', hidden: false,width:'20%'},
				{name: 'HoTen', index: 'HoTen', hidden: false,width:'40%'},
				{name: 'PhongBan', index: 'PhongBan', hidden: false,width:'40%'},
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
				
            },
            ondblClickRow: function(id, rowIndex, columnIndex) {
            },
            loadComplete: function(data) {

            },
        });
        $(elem).jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});
        $(elem).jqGrid('bindKeys', {});
    }
function create_kho(elem, datalocal) {
        datalocal = jQuery.parseJSON(datalocal);
        $(elem).jqGrid({
            datastr: datalocal,
            datatype: "jsonstring",
            colNames: ['Kho','Ghi chú'],
            colModel: [
                {name: 'Kho', index: 'Kho', hidden: false,width:'50%'},
				{name: 'GhiChu', index: 'GhiChu', hidden: false,width:'50%'},
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
				
            },
            ondblClickRow: function(id, rowIndex, columnIndex) {
            },
            loadComplete: function(data) {

            },
        });
        $(elem).jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});
        $(elem).jqGrid('bindKeys', {});
    }
</script>