<?php
//print_r($_SESSION["user"]["id_phongban"]);
if($_SESSION["user"]["id_phongban"]!=""){
	echo "<script type='text/javascript'>";
	echo "window.id_phongban='".$_SESSION["user"]["id_phongban"]."';";
	echo "</script>";
}

if($_SESSION["cauhinh"]["ID_Kho"]!=""){
	echo "<script type='text/javascript'>";
	echo "window.khocauhinh='".$_SESSION["cauhinh"]["ID_Kho"]."';";
	echo "</script>";
}else{
	echo "<script type='text/javascript'>";
	echo "window.khocauhinh=''";
	echo "</script>";
}
?>
<style type="text/css">
/*.ui-datepicker-calendar {
    display: none;
}​
.ui-datepicker .ui-datepicker-buttonpane button.ui-datepicker-current{
	display:none !important;
}*/
.MonthDatePicker
{
    display:none;   
}
.HideTodayButton .ui-datepicker-buttonpane .ui-datepicker-current
{
    visibility:hidden;

}

.hide-calendar .ui-datepicker-calendar
{
	display:none!important;
	visibility:hidden!important
}
.input_number input{
	text-align:right;
}
.input_text input{
	text-align:left;
}
#thang{
	text-align:center;
	width:100px;
}
</style>
<body>

<div id="dialog-luu" title="Thông báo" style="display:none">
  <p><span class="ui-icon ui-icon-alert" style="float:left; margin:0 7px 20px 0;"></span>Bạn có chắc chắn muốn xuất điều chuyển từ kho <span id="dialogtukho" style="font-weight:bold"></span> đến kho <span id="dialogdenkho" style="font-weight:bold"></span>?</p>
</div>
 
	<div id="dialog-form" title="Lưu ý" style="display:none">
 		<label style="font-size:15px!important">Bạn có muốn xóa bản ghi này?</label>
	</div>
    <div id="control" style="height:30px; margin-top:10px; padding-left:20px; padding-top:5px; margin-left:5px; border-radius:4px; background:#F5F3E5; margin-right:5px; border: 1px solid #919191;box-shadow: 0 0 10px #A0A0A0;">
       <div id="div_xuatdieuchuyen" style="float:left;">
            Từ kho: <span style="margin-left:0px;"><input id='kho' class='kho' placeholder="--Chọn kho--" ></span>
           <span style="margin-left:40px;"> Tồn tháng : <input id='thang' class='thang'  placeholder="--Chọn tháng--" ></span> 
           <button id="chon" style="margin-left:10px;margin-top: -2px;">Xem</button>
       </div>
        
    </div>
	<table id="rowed3" >
  </table>
  <div id="grid_footer" ></div>
</body>
<script type="text/javascript">
var reload_aftersave=0;
$(document).ready(function() {

	create_combobox_new('#kho',create_kho,'bw','','data_kho',0);
	//$('#thang').dateEntry({dateFormat: 'dy -'});
	$('#thang').datepicker( {
        changeMonth: true,
        changeYear: true,
        showButtonPanel: true,
        dateFormat: 'mm/yy',
        onClose: function(dateText, inst) { 
            var month = $("#ui-datepicker-div .ui-datepicker-month :selected").val();
            var year = $("#ui-datepicker-div .ui-datepicker-year :selected").val();
            $(this).datepicker('setDate', new Date(year, month, 1));
        },
   		beforeShow: function() {
			$(this).datepicker("hide");
            $("#ui-datepicker-div").addClass("hide-calendar");
			$("#ui-datepicker-div").addClass('MonthDatePicker');
			$("#ui-datepicker-div").addClass('HideTodayButton');
			setTimeout(function () {
				$(".HideTodayButton .ui-datepicker-buttonpane .ui-datepicker-close").html('Chọn');
				$('.ui-datepicker-month').change(function(e) {
					$(".HideTodayButton .ui-datepicker-buttonpane .ui-datepicker-close").html('Chọn');
				});
				$('.ui-datepicker-year').change(function(e) {
					$(".HideTodayButton .ui-datepicker-buttonpane .ui-datepicker-close").html('Chọn');
				});
			},1);
		},
		onChangeMonthYear: function(year, month, inst) { 
  			setTimeout(function () {
				$(".HideTodayButton .ui-datepicker-buttonpane .ui-datepicker-close").html('Chọn');
			},1);
   		}
    });
	var date = new Date();
	date.setMonth(date.getMonth(), 1);	
	$('#thang').datepicker('setDate', new Date(date.getFullYear(), date.getMonth(), 0));
	
	$("#chon").click(function(e) {
		var tonthang=$('#thang').val().split('/');
		var thang=tonthang[0];
		var nam=tonthang[1];
		var kho = $('#kho_hidden').val();
        $("#rowed3").jqGrid('setGridParam',{datatype: 'json',url:"resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_danhsach&kho="+kho+"&thang="+thang+"&nam="+nam}).trigger('reloadGrid');
    });
	
	window.ds_thuocxoa='';
	$.dateEntry.setDefaults({spinnerImage: ''});
	jwerty.key('F3', false);
	jwerty.key('F10', false);
	jwerty.key('ESC', false);

	window.thuoc=  $.ajax({                       
		url: "resource.php?module=web_services&function=get_auto_edit_option_byid&action=index&term=&status=0&tables=DM_Thuoc&id=ID_Thuoc&name=TenGoc",
		async:false                       
	}).responseText;
	$.get('resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_DMthuoc').done(function(data) {
		window.data_thuoc=data;
	})
	
	$(document).keydown(function(e) {
        if(jwerty.is("f3",e)){
			$("#rowed3_iladd").click();
		}
		if(jwerty.is("f10",e)){
			$("#rowed3_luu").click();
		}
		if(jwerty.is("esc",e)){
			$("#rowed3_ilcancel").click();
		}
    });
	create_grid();
	
	$("#rowed3_themphieu").addClass('ui-state-disabled');
	$("#rowed3_in").addClass('ui-state-disabled');
	$("#rowed3_chot").addClass('ui-state-disabled');
	$("#rowed3_ilcancel").hide();
	//phanquyen();
	$("#chon").button();
	$("#rowed3").setGridWidth($(window).width()-10);
	$("#rowed3").setGridHeight($(window).height()-170);
	jQuery(window).resize(function() {		 
		$("#rowed3").setGridWidth($(window).width()-10);
		$("#rowed3").setGridHeight($(window).height()-170);
	});
})
	
function create_grid(){	
 var searhicon = '<span class="ui-state-error ui-state-hover  " style="border:0"><span class="ui-icon  ui-icon-closethick" style="float: left; margin-right: .3em;"></span></span>';			
	 $("#rowed3").jqGrid({				 
	//	url:"resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_chitietphieuxuat&id_phieuxuatnoibo="+window.id_phieuxuatnoibo,
		url:'',
		datatype: "json",		
		colNames:['','','','Tên gốc','ĐVT','Số lượng','Thành tiền','Ngày hết hạn','Số lô NSX', "luu"],
		colModel:[	
			{name:'xoa',index:'xoa',width:"1%",align:'center',hidden:false, editable: false},
			{name:'ID_TonKho',index:'ID_TonKho',search:false, width:"8%",editrules: {required: false}, editable:false,align:'center',hidden:true,edittype:"text"},
			{name:'DonGia',index:'DonGia',search:false, width:"8%",editrules: {required: false}, editable:false,align:'center',hidden:true,edittype:"text"},
			{name:'ID_Thuoc',index:'ID_Thuoc',search:true, width:"15%", editable:true,align:'left',edittype:"text",hidden:false,edittype:"select",editoptions:{value:window.thuoc},formatter: "select",editrules:{custom: true, custom_func: function(value, colName) {
				return check_null(value,colName);
			}}},
			{name:'DonViTinh',index:'DonViTinh',search:false, width:"8%",editrules: {required: false}, editable:false,align:'center',hidden:true,edittype:"text"},
			{name:'SoLuong',index:'SoLuong',search:true,width:"8%",align:'right',hidden:false, editable: true
			,editrules:{custom: true,required:true, custom_func: function(value, colName) {
                           var id_row = $('#rowed3').jqGrid('getGridParam', 'selrow');
                           return check_soluong(value,colName,id_row);
                    }},editoptions: { dataEvents:  [{ type: 'keyup', fn: function(e) { 
						var id_row=$("#rowed3").jqGrid('getGridParam', 'selrow');
						if($("#"+id_row+'_SoLuong').val()){
							var _soluong=$("#"+id_row+'_SoLuong').val();
						}else{
							var _soluong=$(this).val();
							id_row= $(this).closest('tr').attr('id');
						}
						//alert($(this).val());
						var rowData = $('#rowed3').jqGrid('getRowData', id_row);
						var _tt=rowData['DonGia']*_soluong;
						if($("#"+id_row+'_ThanhTien').val()){
							$("#"+id_row+'_ThanhTien').val(_tt);
						}else{
							$("#rowed3").jqGrid('setCell',id_row,'ThanhTien', _tt);
						}
					if(jwerty.is("enter",e)||jwerty.is("tab",e)){
						
					}
                 }}]},classes:'input_number'},
			{name:'ThanhTien',index:'ThanhTien',width:"8%",formatter:"integer",sorttype:"number", summaryType: 'sum',align:'right',hidden:false, editable: true
			,editrules:{custom: true,required:true, custom_func: function(value, colName) {
                           var id_row = $('#rowed3').jqGrid('getGridParam', 'selrow')
                           return check_soluong(value,colName,id_row);
                        }},editoptions: { dataEvents:  [{ type: 'keyup', fn: function(e) { 
					if(jwerty.is("enter",e)||jwerty.is("tab",e)){
					}
                 } }]},classes:'input_number'},	
				 {name:'NgayHetHan',index:'NgayHetHan',search:false, width:"5%", editable:true,align:'center',hidden:false,edittype:"text",formatter: 'date' ,formatoptions: {newformat: "d/m/y", srcformat: 'd/m/y',},editoptions: {	  
			  dataInit: function(element) {
				$(element).datepicker({
									 dateFormat: 'dd/mm/y',
									 beforeShow: function() {
											//$(element).datepicker("show");
											$("#ui-datepicker-div").removeClass("hide-calendar");
											$("#ui-datepicker-div").removeClass('MonthDatePicker');
											$("#ui-datepicker-div").removeClass('HideTodayButton');

										}
									 })
			  }}}, 
			  {name:'SoLoNhaSanXuat',index:'SoLoNhaSanXuat', width:"7%", editable:true,align:'center',edittype:"text",hidden:false,editrules: {required: false},editrules:{custom: true,required:false, custom_func: function(value, colName) {
                           var id_row = $('#rowed3').jqGrid('getGridParam', 'selrow')
                           return check_soluong(value,colName,id_row);
                        }},editoptions: { dataEvents:  [{ type: 'keyup', fn: function(e) { 
					if(jwerty.is("enter",e)||jwerty.is("tab",e)){
							$('#rowed3_ilsave').click();
							be = '<span class="ui-state-error ui-state-hover  " style="border:0"><span class="ui-icon  ui-icon-closethick" style="float: left; margin-right: .3em;"></span></span>';
							$("#rowed3").jqGrid('setRowData',$("#rowed3").jqGrid('getGridParam', 'selrow'),{xoa:be});
							$('#rowed3_iladd').click();
					}
                 } }]},classes:'input_text'},							
				 {name:'Luu',index:'Luu',search:false, width:"8%",editrules: {required: false}, editable:false,align:'center',hidden:true,edittype:"text"}, 	                      
				 // {name:'TaoLuc',index:'TaoLuc',search:false, width:"5%", editable:true,align:'center',hidden:false},
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
		sortname: 'ID_LoaiKham',
		height:100,
		width:100,
		viewrecords: false,	
		ignoreCase:true,	
		sortorder: "asc",
		pgbuttons: false, 
        pgtext: null, 
		
		inline_editrule:true,
		inline_esc:true,
		cellEdit: true,
		cellsubmit: 'clientArray',
		cell_move_enter:true,
		afterSaveCell : function ( rowid, cellname, value, iRow, iCol){	
			$('#'+iRow+'_ID_Thuoc_combobox,.dialog_dm_thuoc .ui-jqgrid-hbox').unbind("keyup");
			$('#'+iRow+'_ID_Thuoc_combobox,.dialog_dm_thuoc .ui-jqgrid-hbox').unbind("click");
			$('body').unbind("click");			
			return [true,'']
		},
		afterInsertRow: function(rowid, aData){
    	},
		pgbuttons: false, // disable page control like next, back button
        pgtext: null, // disable pager text like 'Page 0 of 10'	 
		serializeRowData: function (postdata) { 	
			
		},
		afterEditCell: function (rowid, celname, value, iRow, iCol) {	// them cái này nữa
					window.cell_rowed6=celname;
					rowed6_select=rowid;	
					if((iCol==7)){
						var with_idthuoc=parseFloat($('#jqgh_rowed3_ID_Thuoc').width())-32;			
						$('#rowed3 #'+iRow+'_ID_Thuoc1').hide(); 
						combobox_inline_new('ID_Thuoc',iRow,'rowed3',create_Dm_thuoc_grid,window.grid_datathuoc,iRow,iRow,donthuoc_callback)
						
						$('#'+iRow+'_ID_Thuoc_combobox').keyup(function(e){					
							if (jwerty.is('enter',e)){
								$('#rowed3').jqGrid("nextCell",iRow,iCol);
							}
						})
						setTimeout(function(){
							$('#'+iRow+'_ID_Thuoc_combobox').focus();
							$('#'+iRow+'_ID_Thuoc_combobox').select();
						},10)
					}
					$("#"+iRow+"_"+celname).focusout(function(e) {
						setTimeout(function(){
							$("#rowed3").saveCell(iRow,iCol);
						},100);
					});
		
		}, 
		
		onCellSelect: function (rowid,iCol,cellcontent,e) {
			if(iCol==0){
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
			var ids = jQuery("#rowed3").jqGrid('getDataIDs');
			for(var i=0;i < ids.length;i++){	
				var cl = ids[i];
				be = '<span class="ui-state-error ui-state-hover  " style="border:0"><span class="ui-icon  ui-icon-closethick" style="float: left; margin-right: .3em;"></span></span>';
				$("#rowed3").jqGrid('setRowData',ids[i],{xoa:be});
			}	
			if(reload_aftersave==1){
				$("#rowed3").jqGrid("setSelection",rowed3_id, true);	
				reload_aftersave=0;
			}
			if(ids.length>0){
				if(window.chotphieu==1){
					$("#rowed3_in").removeClass('ui-state-disabled');
					$("#rowed3_chot").addClass('ui-state-disabled');
				}else{
					$("#rowed3_in").addClass('ui-state-disabled');
					$("#rowed3_chot").removeClass('ui-state-disabled');
				}
				
			}
		},
		caption: "<span id='tieude'>Chi tiết</span>",
	});
		$("#rowed3").jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false,defaultSearch:"cn"});
	$("#rowed3").jqGrid('navGrid',"#grid_footer",{add: false, edit: false, del: false, search: false, refresh: false,closeAfterEdit: true,clearAfterAdd :true,navkeys : [ true, 38, 40 ]});
	
$( "#dialog-form" ).dialog({
      autoOpen: false,
      height: 150,
      width: 250,
      modal: true,
      buttons: {
         "YES": function() {
				$( this ).dialog( "close" );
				$('#rowed3').jqGrid('delRowData',window.row_id_delete);
				$("#rowed3_iladd").removeClass('ui-state-disabled');
				if(window.ds_thuocxoa==''){
					window.ds_thuocxoa=window.row_id_delete;
				}else{
					window.ds_thuocxoa=window.ds_thuocxoa+','+window.row_id_delete;
				}
		},
		"NO": function() {
          $( this ).dialog( "close" );
		}
	  }
    });
	
	$("#rowed3").jqGrid('inlineNav', '#grid_footer', {add: true, addtext: '', edittext: '', edit: false, save:true,
            addParams: {
				keys:true,
                position: "last",
                addRowParams: {
					keys:true,                  
                    aftersavefunc: function(rowId, response,lastsel) {
						destroy_combobox_inline_new('ID_Thuoc',rowId,'rowed3');	
						
                    },
					oneditfunc: function(rowId) {	
						combobox_inline_new('ID_Thuoc',rowId,'rowed3',create_Dm_thuoc_grid,window.data_thuoc,0,1,donthuoc_callback)//new
						inline_enter(rowId);
					},	
                    afterrestorefunc: function(rowId) {	
						destroy_combobox_inline_new('ID_Thuoc',rowId,'rowed3');				
						$("#rowed3").jqGrid('bindKeys');
						$('#rowed3').focus();						
                    }				 
                }
            	},	
            editParams: {
				keys:true,				 
				 	aftersavefunc: function(rowId, response,lastsel) {
						destroy_combobox_inline('ID_Thuoc',rowId,'rowed3','#dialog_dm_thuoc_'+rowId,'#DM_thuoc_'+rowId)	
						$('#rowed3').focus();
						tooltip_message("Cập nhật thành công");
                    },					 	
                	oneditfunc: function(rowId) {
						combobox_inline_new('ID_Thuoc',rowId,'rowed3',create_Dm_thuoc_grid,window.data_thuoc,0,1,donthuoc_callback)//new
						inline_enter(rowId);
						var rowData = $('#rowed3').getRowData(rowId);	
						SoLoNhaSanXuat  =rowData["SoLoNhaSanXuat"];
					},	
                    afterrestorefunc: function(rowId) {	
					$("#rowed3").jqGrid('bindKeys');
					destroy_combobox_inline_new('ID_Thuoc',rowId,'rowed3');							   
					},	 
			}
       	 });
		 $("#rowed3").jqGrid('navButtonAdd', '#grid_footer', {caption: "Lưu [F10]", buttonicon: 'ui-icon-disk',id:'rowed3_luu',
            onClickButton: function() {	
				var savedRow = $('#rowed3').jqGrid("getGridParam", "savedRow");		
				if (savedRow && savedRow.length > 0) {
					if($('#'+savedRow[0].id+'_ID_Thuoc_combobox').val()!=''){
						jQuery("#rowed3").jqGrid('saveRow',savedRow[0].id);
					}else{
						$('#rowed3').jqGrid('delRowData',savedRow[0].id);
					}
				}
				var gridData = jQuery("#rowed3").getRowData();
				var postData = JSON.stringify(gridData);
				postData='{"id":'+postData+'}';
				postData=$.parseJSON(postData);
				var tonthang=$('#thang').val().split('/');
				var thang=tonthang[0];
				var nam=tonthang[1];
				var kho = $('#kho_hidden').val();
				$.post('resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=controller&oper=add&hienmaloi=a&thang='+thang+'&nam='+nam+'&kho='+kho+'&xoa='+window.ds_thuocxoa,postData).done(function(data){
					tooltip_message("Đã lưu");
					$("#chon").click();
				});
            },
            title: "Lưu [F10]",
            position: "last"
    }); 
/*		 $("#rowed3").jqGrid('navButtonAdd', '#grid_footer', {caption: "In phiếu", buttonicon: 'ui-icon-print',id:'rowed3_in',
            onClickButton: function() {	
				$.cookie("in_status", "print_preview");
				if(window.n_action==1){
					dialog_report("Xem trước khi in",90,90,"u78787878975f","resource.php?module=report&view=<?=$modules?>&action=phieuxuatthuocnoibo&idphieu="+window.id_phieuxuatnoibo+"&type=report&id_form=10",'PhieuLinhThuoc');
				}else{
					dialog_report("Xem trước khi in",90,90,"u78787878975f","resource.php?module=report&view=<?=$modules?>&action=phieuxuatdieuchuyen_new&idphieu="+window.id_phieuxuatnoibo+"&type=report&id_form=10",'PhieuLinhThuoc');
				}
            },
            title: "In phiếu",
            position: "last"
    	}); */
		 
	$("#rowed3_ilsave").hide();  
	setTimeout(function(){
		$("#rowed3_iladd").click();	
	},700)
	
} 
	
function create_Dm_thuoc_grid(elem,datalocal){	
	datalocal=jQuery.parseJSON(datalocal);	 
	$(elem).jqGrid({
	datastr:datalocal,	
	datatype: "jsonstring" ,
	colNames:['Tên thuốc','Nhóm thuốc','', 'Nước sản xuất','Nhà sản xuất','Hoạt chất','SignNumber','','','',''],
	colModel:[			
		{name:'TenGoc',index:'TenGoc'},	
		{name:'TenNhomThuoc',index:'TenNhomThuoc'},		 
		{name:'MaThuoc',index:'MaThuoc',hidden :true},		
		{name:'TenDayDu',index:'TenDayDu'},	
		{name:'TenNhaSanXuat',index:'TenNhaSanXuat'},	 	 
		{name:'HoatChatChinh',index:'HoatChatChinh'},
		{name:'SignNumber',index:'SignNumber',hidden :true},
		{name:'TenDonViTinh',index:'TenDonViTinh',hidden :false},
		{name:'GiaBan',index:'GiaBan',hidden :false},
		{name:'SoLoNhaSanXuat',index:'SoLoNhaSanXuat',hidden :false},
		{name:'NgayHetHan',index:'NgayHetHan',hidden :false}
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
		var id_row=$("#rowed3").jqGrid('getGridParam', 'selrow');
		var rowData = $(elem).getRowData(id);
		$('#rowed3').jqGrid("setCell", id_row, "DonViTinh",rowData['TenDonViTinh'] );
		$('#rowed3').jqGrid("setCell", id_row, "DonGia",rowData['GiaBan'] );
		$("#"+id_row+"_SoLoNhaSanXuat").val(rowData['SoLoNhaSanXuat']);
		$("#"+id_row+"_NgayHetHan").val(rowData['NgayHetHan']);
/*		$('#rowed3').jqGrid("setCell", id_row, "SoLoNhaSanXuat",rowData['SoLoNhaSanXuat']);
		$('#rowed3').jqGrid("setCell", id_row, "NgayHetHan",rowData['NgayHetHan'] );*/
		//$('#rowed3').jqGrid("setCell", id_row, "NuocSX",rowData['TenDayDu']);
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
function inline_enter(rowid){
	$('#rowed3 #'+rowid+'_ID_Thuoc_combobox').bind('keydown',function(e){
		if(jwerty.is("enter",e)||jwerty.is("tab",e)){
			setTimeout(function(){
				$("#"+$(e.target).attr('id').split('_')[0]+"_SoLuong").focus();
				$("#"+$(e.target).attr('id').split('_')[0]+"_SoLuong").select();
			},200);
		}
	});
	$('#rowed3 #'+rowid+'_SoLuong').bind('keydown',function(e){
		if(jwerty.is("enter",e)||jwerty.is("tab",e)){
			setTimeout(function(){
				$("#"+$(e.target).attr('id').split('_')[0]+"_ThanhTien").focus();
				$("#"+$(e.target).attr('id').split('_')[0]+"_ThanhTien").select();
			},200);
		}
	});
	$('#rowed3 #'+rowid+'_ThanhTien').bind('keydown',function(e){
		if(jwerty.is("enter",e)||jwerty.is("tab",e)){
			setTimeout(function(){
				$("#"+$(e.target).attr('id').split('_')[0]+"_NgayHetHan").focus();
				$("#"+$(e.target).attr('id').split('_')[0]+"_NgayHetHan").select();
			},200);
		}
	});
	$('#rowed3 #'+rowid+'_NgayHetHan').bind('keydown',function(e){
		if(jwerty.is("enter",e)||jwerty.is("tab",e)){
			setTimeout(function(){
				$("#"+$(e.target).attr('id').split('_')[0]+"_SoLoNhaSanXuat").focus();
				$("#"+$(e.target).attr('id').split('_')[0]+"_SoLoNhaSanXuat").select();
			},200);
		}
	});
}

function get_date(){
	var d = new Date();
	var curr_hour = d.getHours();
	var curr_minute = (d.getMinutes()<10?'0':'') + d.getMinutes(); //phút trả về 1 chữ số nếu bé hơn mười nên phải ghép 0 vào
	var curr_time = curr_hour + ":" + curr_minute+ " ";	
	var dd = (d.getDate()<10?'0':'')+ d.getDate();
	var mm = d.getMonth()+1;//January is 0!`
	if(mm<10) mm="0"+mm; 
	var yy= d.getFullYear().toString().substr(2,2);
	//alert(yy);
	return dd+'<?php echo $_SESSION["config_system"]["phancachngay"]?>'+mm+'<?php echo $_SESSION["config_system"]["phancachngay"]?>'+yy;			
}

function update_row(e){
	if(jwerty.is("enter",e)||jwerty.is("tab",e)){
		$('#rowed3_ilsave').click();
	}
}

function check_null(value,colname){	
	if($.trim(value)==''){			 
		return [false,'Tên gốc bắt buộc phải có','ID_Thuoc_combobox']
	}else{
		return[true,'','SoLuong']
	}
}

function currency_convert (cellvalue, options, rowObject){
   return parseFloat(convert_comma_dot_cacl(cellvalue)).formatMoney(1, ',', '.');
}
function currency_convert2 (cellvalue, options, rowObject){
   return parseFloat(convert_comma_dot_cacl(cellvalue)).formatMoney(0, ',', '.');
}

function check_soluong(value,colName,id_row){
			window.tonkhokhongdu=0;
			return[true,'']
}

function  donthuoc_callback(e){
	if(jwerty.is("enter",e)||jwerty.is("tab",e)){
		$("#"+$(e.target).attr('id').split('_')[0]+"_SoLuong").focus();
		$("#"+$(e.target).attr('id').split('_')[0]+"_SoLuong").select();
	}
}
	
function create_kho(elem, datalocal) {
        datalocal = jQuery.parseJSON(datalocal);
        $(elem).jqGrid({
            datastr: datalocal,
            datatype: "jsonstring",
            colNames: ['Tên kho'],
            colModel: [
                {name: 'tenkho', index: 'tenkho', hidden: false,width:5},
            ],
            hidegrid: false,
            gridview: true,
            loadonce: true,
            scroll: 1,
            modal: true,
            rowNum: 100,
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
				//$("#denkho").val('');
					//$.post('resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_kho_not_isthis&id_kho='+id).done(function(data) {
				//	create_combobox_new('#denkho',create_denkho,'bw',data,'data_kho',0);
					//create_combobox_disable("#tukho");
				//});
            },
            ondblClickRow: function(id, rowIndex, columnIndex) {
            },
            loadComplete: function(data) {
            },
        });
        $(elem).jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "bw"});
        $(elem).jqGrid('bindKeys', {});
    }
</script>