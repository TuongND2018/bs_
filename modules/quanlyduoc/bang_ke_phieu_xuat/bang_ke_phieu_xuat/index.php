<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Bảng kê phiếu xuất</title>
<style>
.form_row label {
	text-align: right!important;
}

#search_border{
 	border:1px dotted #327E04;
	padding:8px 0px;
	margin:6px 0px 0px 0px;	
}
</style>
</head>	
<body>
  <table id="rowed3" >
  </table>
  <div id="prowed3" ></div>
 <table id="rowed4" >
  </table>
<div id="form_search" style="display:none;" title="Tìm kiếm">
        <div class="form_row" style="vertical-align:top;width:100%"  >
          <div>
            <label for="tungay" style="width:90px;" >Từ ngày</label>
            <input id="tungay"   name="tungay" style="width:70px;" value="<?php echo date($_SESSION["config_system"]["ngaythang"]) ?>" type="text">
            <label for="denngay" style="width:273px;">Đến ngày</label>
            <input id="denngay"  name="denngay" style="width:70px;" value="<?php echo date($_SESSION["config_system"]["ngaythang"]) ?>" type="text">          	 
          </div>
          <div>
            <label for="tuso" style="width:90px;">Từ số</label>
            <input id="tuso" name="tuso" style="width:70px;" type="text">
            <label for="denso" style="width:273px;">Đến số</label>
            <input id="denso" name="denso" style="width:70px;" type="text">
          </div>
           <div>
            <label for="tenkhachhang" style="width:90px;">Tên khách hàng</label>
            <input id="tenkhachhang" lang="maKH_check" name="tenkhachhang" style="width:428px;" type="text">
                     
          </div>
          <div style="display:none">
            <label for="maKH" style="width:90px;">Mã NCC</label>
            <input id="maKH" lang="maKH_check" name="maKH" style="width:70px;" type="text">
            <input id='maKH_1'  style="display:none">
            <label class="hienthi" id="TenKH" style="width:324px;margin-left:26px"></label>            
          </div>
         
          <div>
            <label for="maKHO" style="width:90px;">Mã kho</label>
            <input id="maKHO" name="maKHO" style="width:70px;" type="text">
            <input id='maKHO_1' class='com_thuocnhomcls1'  style="display:none">
            <label class="hienthi" id="maKHO1" style="width:324px;margin-left:26px"></label>            
          </div>
             <div style="display:none">
            <label for="maThuoc" style="width:90px;">Mã thuốc</label>
            <input id="maThuoc_get" name="maThuoc_get" style="width:70px;" type="text">
            <input id='maThuoc_hide' class='maThuoc_hide'  style="display:none">
            <label class="hienthi" id="tenThuoc" style="width:324px;margin-left:26px;"></label>          
          </div>
          <div>
            <label for="ghichu" style="width:90px;">Ghi chú</label>
            <input id="ghichu"  name="ghichu" style="width:429px;" type="text">           
            <input id="ID_LoaiNhapXuat"  name="ID_LoaiNhapXuat" value="" type="hidden">                 
          </div>
        
         
 		</div>
</div> 
</body>
</html>
<script type="text/javascript">
var cur_year = (new Date).getFullYear();
var id_thuoc;
var tungay;
var denngay;
var tuso;
var denso;
var id_khachhang;
var id_thuoc;
var id_kho;
var ghichu;
var _string;
jQuery(document).ready(function() {	
	phanquyen();
	openform_shortcutkey();
	load_select();
	create_grid();
	create_sub_grid();
	jQuery(window).resize(function() {		 
	$("#rowed3").setGridWidth($(window).width()-10);
	$("#rowed3").setGridHeight($(window).height()/100*55);
	});
	$("#rowed3").setGridWidth($(window).width()-10);
	$("#rowed3").setGridHeight($(window).height()/100*55);
			
	//$.get('resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_phieu_xuat&hienmaloi=1&oper=phieuxuat&tungay=01/01/14&denngay=31/12/14&maKHO=1&namhethong='+cur_year);
	
})//DOM ready

var lastsel;
function create_grid(){
 $("#rowed3").jqGrid({
		//url:'resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_phieu_xuat&oper=phieuxuat',
		url:'',//resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_phieu_xuat&hienmaloi=1&oper=phieuxuat&tungay=01/01/14&denngay=31/12/14&namhethong='+cur_year,
		datatype: "json",	
		colNames:['Id','Mã','Người lập','Ngày lập','Ngày xuất','Người duyệt','Ngày duyệt','NCC','Kho','Loại xuất','%VAT','VAT','Thành tiền','Đơn thuốc','Thanh toán','Khách hàng','Toa tạm','IsPercent','Ghi chú'],
		colModel:[
			{name:'ID_XuatKho',index:'ID_XuatKho',search:false, width:"2%", editable:false,align:'right',hidden:true}, 
			{name:'MaPhieu',index:'MaPhieu', width:"5%", editable:false,align:'center',hidden:false,editrules: {required:true},edittype:"text"},
			{name:'ID_NhanVien',index:'ID_NhanVien', width:"5%", editable:true,align:'center',hidden:false,editrules: {required:true},edittype:"select",editoptions: {value: window.nickname}, formatter: "select"},
			{name:'NgayLapPhieu',index:'NgayLapPhieu',search:false, width:"5%", editable:false,align:'center',hidden:false,edittype:"text",editoptions: {	  
			  dataInit: function(element) {
				$(element).datepicker({dateFormat: 'dd-mm-yy'})
			  }
			}}, 
			{name:'NgayXuat',index:'NgayXuat',search:false, width:"5%", editable:false,align:'center',hidden:false,edittype:"text",editoptions: {	  
			  dataInit: function(element) {
				$(element).datepicker({dateFormat: 'dd-mm-yy'})
			  }
			}}, 	
			 
			{name: 'ID_NguoiDuyet',accept:false, index: 'ID_NguoiDuyet', width: "7%",editable:false, align: 'center', formatter: "select", edittype: "select", hidden: false, editoptions: {value: window.nickname			 
			   }, formoptions: {}},
			{name:'NgayDuyet',index:'NgayDuyet',search:false, width:"7%", editable:false,align:'center',hidden:false,edittype:"text",editoptions: {	  
			  dataInit: function(element) {
				$(element).datepicker({dateFormat: 'yy-mm-dd'})
			  }
			}}, 		 
			{name:'ID_NCC',index:'ID_NCC', width:"10%", editable:false,align:'center',edittype:"select",formatter: "select",hidden:false, editoptions: {value: window.nhacungcap			 
			   }}, 
			{name:'ID_Kho',index:'ID_Kho', width:"7%", editable:false,align:'center',edittype:"select",hidden:false,formatter: "select", editoptions: {value: window.kho			 
			   }}, 
			{name:'ID_LoaiNhapXuat',index:'ID_LoaiNhapXuat', width:"10%", editable:false,align:'center',edittype:"text",hidden:false,formatter: "select", editoptions: {value: window.loainhapxuat			 
			   }}, 
			{name:'PercentVAT',index:'PercentVAT', width:"3%", editable:false,align:'right',edittype:"text",hidden:false,formatter:'number',formatoptions:{decimalSeparator:" ", thousandsSeparator: "", decimalPlaces: 0,  defaultValue: '0'}},
			{name:'TienVAT',index:'TienVAT', width:"2%", editable:false,align:'right',edittype:"text",hidden:false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: "", defaultValue: '0'}},
			{name:'ThanhTien',index:'ThanhTien', width:"5%", editable:false,align:'right',edittype:"text",hidden:false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: "", defaultValue: '0'}},
			{name:'IDDonThuoc',index:'IDDonThuoc', width:"6%", editable:false,align:'center',edittype:"text",hidden:false},
			{name:'DaThanhToan',index:'DaThanhToan', width:"7%", editable:false,align:'center',edittype:"text",hidden:false},
			{name:'TenKhachHang',index:'TenKhachHang', width:"6%", editable:false,align:'center',edittype:"text",hidden:false},
			{name:'IsXuatChoToaTam',index:'IsXuatChoToaTam', width:"6%", editable:false,align:'center',edittype:"text",hidden:false},
			{name:'IsPercent',index:'IsPercent', width:"10%", editable:false,align:'left',edittype:"text",hidden:false}, 
			{name:'GhiChu',index:'GhiChu', width:"10%", editable:false,align:'left',edittype:"text",hidden:false}, 			 
						 	 	 
		],
		multiselect :false,
		loadonce: false,
		scroll: false,		 
		modal:true,	 	 
		rowNum: 1000000,		 
		rowList: [], // disable page size dropdown
                    pgbuttons: false, // disable page control like next, back button
            pgtext: null, // disable pager text like 'Page 0 of 10'
		pager: '#prowed3',
		sortname: 'ID_NhapKho',
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
		onSelectRow: function(id) {
			window.ids=id;
			//alert('resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_phieu_xuat&oper=phieuxuat_sub&ids='+id)
			//jQuery("#rowed4").jqGrid().setGridParam({url:'modules/opening_stock/data1_sub.php?id='+lastsel}).trigger("reloadGrid");		
			jQuery("#rowed4").jqGrid().setGridParam({url:'resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_phieu_xuat&oper=phieuxuat_sub&ids='+id+'&namhethong='+cur_year}).trigger("reloadGrid");
			
			 if( $("#rowed3").jqGrid('getCell', id, 'ID_NguoiDuyet')==0){
				$("#edit_rowed3").removeClass('ui-state-disabled');
				$("#confirm_rowed3").removeClass('ui-state-disabled');
			 }else{
				 $("#edit_rowed3").addClass('ui-state-disabled');
				 $("#confirm_rowed3").addClass('ui-state-disabled');
			 }
			 
			//  $("#rowed3").jqGrid('getCell', id, 'NgayDuyet');
			  
		},
		ondblClickRow: function (rowId, rowIndex, columnIndex) {
			$("#prowed3 .ui-icon-pencil").trigger('click'); 
 		},
		loadComplete: function(data) {	
		//$("#rowed3 #"+window.ids).focus();	
		//$("#rowed3").jqGrid("setSelection",window.ids, true);
		/*ids=$('#rowed3').jqGrid('getDataIDs');				
			for(i=0;i<ids.length;i++){		
				var rowData = jQuery('#rowed3').getRowData(ids[i]);					 			 
					if(rowData['ID_NguoiDuyet']!=""){
						 //$('#rowed3').jqGrid('setRowData', ids[i], false, {background:'#e0e0e0'});
						$('#rowed3').jqGrid('setCell',ids[i],"ID_NguoiDuyet","",{background:'red'});
						$('#rowed3').jqGrid('setCell',ids[i],"NgayDuyet","",{background:'red'});
					}					   
		 	}	*/
			//$("#rowed3").setColProp('ID_PhongBanCha', { editoptions: { value: ""} });				 
		},	  
		caption: "Phiếu xuất"
	});	
	
	$( "#form_search" ).dialog({
      autoOpen: false,
      height: 270,
      width: 637,
      modal: true,
      buttons :  { 
	  'Hủy':{  text: "Xóa",
         id: "Clear",
		 click:function(){
			 $("#tungay,#denngay").val("<?php echo date($_SESSION["config_system"]["ngaythang"]) ?>");
			 $("#tuso,#denso,#tenkhachhang,#ghichu").val('');
			 $("#tungay") .focus();
			  
			 }
		 
		 },
     "MyButton" : {
         text: "Tìm kiếm",
         id: "tim_kiem",
         click: function(){
			 phancach='&';
			 string=''
			 tungay=$("#tungay").val();
			 string+=phancach+'tungay='+tungay;
			 denngay=$("#denngay").val();
			  string+=phancach+'denngay='+denngay;
			 if($("#tuso").val()!=''){
				 tuso=$("#tuso").val();
				  string+=phancach+'tuso='+tuso;
				 }
			 if($("#tenkhachhang").val()!=''){
				tenkhachhang=$("#tenkhachhang").val();
				  string+=phancach+'tenkhachhang='+tenkhachhang;
				 }
			  if($("#denso").val()!=''){
				 denso=$("#denso").val();
				  string+=phancach+'denso='+denso;
				 }
			if($("#maKH").val()!=''){
				 id_khachhang=$("#maKH").val();
				  string+=phancach+'maKH='+id_khachhang;
				 }
			if($("#maKHO").val()!=''){
				id_kho=$("#maKHO").val();
				 string+=phancach+"maKHO="+id_kho;
				}
			if($("#maThuoc_get").val()!=''){
				id_thuoc=$("#maThuoc_hide").val();
				 string+=phancach+"idThuoc="+id_thuoc;
				}
			if($("#ghichu").val()!=''){
				ghichu=$("#ghichu").val();
				 string+=phancach+"idThuoc="+ghichu;
				}
			//alert(string);
			_string=string;
			jQuery("#rowed3").jqGrid().setGridParam({url:'resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_phieu_xuat&hienmaloi=1&oper=phieuxuat&namhethong='+cur_year+string}).trigger("reloadGrid");
             $( "#form_search" ).dialog('close');
         }   
      } 
   }
    });
	
	$("#rowed3").jqGrid('navGrid',"#prowed3",{add: false,del:false,edit:false,search:false},
	{},
	{}
	);
	
	$("#rowed3").jqGrid('navButtonAdd', '#prowed3', {caption: "Tìm kiếm", buttonicon: 'ui-icon-search', id : 'search_rowed3',
            onClickButton: function() {			 
				$('#form_search').dialog('open');
				init_dialog();
            },
            title: "Tìm kiếm",
            position: "last"
    });
	$("#rowed3").jqGrid('navButtonAdd', '#prowed3', {caption: "In", buttonicon: 'ui-icon-print',id:'printer',
            onClickButton: function() {				 
			//alert(_string);
			$.cookie("in_status", "print_preview"); 
				dialog_report("Xem trước khi in",90,90,"u78787878975f","resource.php?module=report&view=<?=$modules?>&action=bang_ke_phieu_xuat&type=report&id_form=&type=test"+_string,'BangKePhieuXuat');
			//$.get('resource.php?module=report&view=quanlyduoc&action=bang_ke_phieu_xuat&type=test&id_form='+_string);
            },
            title: "In",
            position: "last"
    }); 
			  
	$("#rowed3").setGridWidth($(window).width()-10);
	$("#rowed3").setGridHeight($(window).height()/100*50);
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
		url:"",
		datatype: "json",	
		colNames:['id_main','id_thuoc','Mã thuốc','Tên biệt dược','Đơn vị tính','Số lô nội bộ','Số lượng','Đơn giá','Thành tiền','Đơn giá vốn','Tiền vốn','Chiết khấu'],
		colModel:[
		
			{name:'ID_XuatKho',index:'ID_XuatKho', width:"5%", editable:true,align:'left',hidden:true,edittype:"text",editoptions: {defaultValue: window.ids}},		
			{name:'ID_Thuoc',index:'ID_Thuoc', width:"8%", editable:false,align:'center',edittype:"text",hidden:true},
			{name:'MaThuoc',index:'MaThuoc', width:"8%", editable:true,align:'center',edittype:"text",editrules: {required: false},hidden:false,newgrid:true,func_grid:"luoi_MaThuoc"},
			{name:'TenBietDuoc',index:'TenBietDuoc', width:"20%", editable:false,align:'left',editrules: {required: true},edittype:"text",hidden:false},
			{name:'TenDonViTinh',index:'TenDonViTinh',search:false, width:"5%", editable:false,align:'center',hidden:false,edittype:"text"}, 			
			{name:'SoLoHeThong',index:'SoLo', width:"7%", editable:false,align:'center',edittype:"text",hidden:false,editrules: {required: false}},			 
			{name:'SoLuong',index:'SoLuong', width:"5%", editable:true,align:'right',edittype:"text",hidden:false,editrules: { number: true, required: false},formatter:'integer',formatoptions:{defaultValue: '0'}}, 
			{name:'DonGia',index:'DonGia', width:"5%", editable:true,align:'right',edittype:"text",editrules: { number: true, required: false},hidden:false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: "", defaultValue: '0'}},
			{name:'ThanhTien',index:'ThanhTien', width:"7%", editable:true,align:'right',edittype:"text",hidden:false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: "", defaultValue: '0'}},
			{name:'DonGiaVon',index:'DonGiaVon', width:"7%", editable:true,align:'right',edittype:"text",hidden:false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: "", defaultValue: '0'}},
			{name:'TienVon',index:'TienVon', width:"7%", editable:true,align:'right',edittype:"text",hidden:false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: "", defaultValue: '0'}},
			{name:'ChietKhau',index:'ChietKhau', width:"7%", editable:true,align:'right',edittype:"text",hidden:false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: "", defaultValue: '0'}},
			 			 
		],
		loadonce: false,
		scroll: false,		 
		modal:true,	 	 
		rowNum: 1000000,
		column:["TenBietDuoc"],
		func_column:["luoi_TenBietDuoc"],		 
		rowList: [], // disable page size dropdown
        pgbuttons: false, // disable page control like next, back button
        pgtext: null, // disable pager text like 'Page 0 of 10'
		pager: null,
		sortname: 'ID_XuatKho',
		height:100,
		width: 100,
		viewrecords: true,	
		ignoreCase:true,
		shrinkToFit:true,
		
		
	//hoverrows:false,
	//jsonReader:{repeatitems:true,subgrid:{repeatitems:false}},	
		sortorder: "desc",
		serializeRowData: function (postdata) { 		 	
			//$(elem).trigger("reloadGrid");		
			//return postdata;
		},
		onSelectRow: function(id) {
				
		},
		ondblClickRow: function (rowId, rowIndex, columnIndex) {	
				//$("#prowed5 .ui-icon-pencil").click();			
 		},
		loadComplete: function(data) {	
			
				$('#rowed4').setGridParam({loadonce: false});
		},	  
		caption: "Chi tiết xuất"
	});	
	
	$("#rowed4").setGridWidth($(window).width()-10);
	$("#rowed4").setGridHeight($(window).height()-$("#rowed3").height()-480+"px");
	 
}

function load_select(){
	window.nickname = $.ajax({url: 'resource.php?module=web_services&function=get_auto_edit_option_byid&action=index&term=&status=2&tables=DM_NhanVien&id=ID_NhanVien&name=NickName', async: false, success: function(data, result) {
                    if (!result)
                        alert('Không load được tên');
            }}).responseText;
			window.nhacungcap = $.ajax({url: 'resource.php?module=web_services&function=get_auto_edit_option_byid&action=index&term=&status=2&tables=DM_NhaCungCap&id=ID_NCC&name=TenNCC', async: false, success: function(data, result) {
                    if (!result)
                        alert('Không load được nhà cung cấp');
            }}).responseText;
			window.kho = $.ajax({url: 'resource.php?module=web_services&function=get_auto_edit_option_byid&action=index&term=&status=2&tables=DM_Kho&id=ID_Kho&name=TenKho', async: false, success: function(data, result) {
                    if (!result)
                        alert('Không load được kho');
            }}).responseText;
			window.loainhapxuat = $.ajax({url: 'resource.php?module=web_services&function=get_auto_edit_option_byid&action=index&term=&status=2&tables=GD2_DM_Nhapxuat&id=ID_NhapXuat&name=Ma_NhapXuat', async: false, success: function(data, result) {
                    if (!result)
                        alert('Không load được tên');
            }}).responseText;	
}

function init_dialog(){
	/*$("#tungay").datepicker({
            showWeek: true,
            defaultDate: "+1w",
            changeMonth: true,
            changeYear: true,
            numberOfMonths: 1,
            dateFormat:  $.cookie("ngayJqueryUi"),
          
        });	
		$("#denngay").datepicker({
            showWeek: true,
            defaultDate: "+1w",
            changeMonth: true,
            changeYear: true,
            numberOfMonths: 1,
            dateFormat:  $.cookie("ngayJqueryUi"),
          
        });	*/
	$.dateEntry.setDefaults({spinnerImage: ''});
		$("#tungay").dateEntry({dateFormat:$.cookie("ngayDateEntry")});
		 $("#denngay").dateEntry({dateFormat:$.cookie("ngayDateEntry")});
		number_textbox("#tuso");
		number_textbox("#denso");
		create_combobox('#maKH','#maKH_1',".table_ncc","#table_ncc",create_Dm_ncc,500,100,'Danh mục khách hàng','data_DMncc',0);
		create_combobox('#maKHO','#maKHO_1',".makho","#makho",create_Dm_kho,500,300,'Kho','data_DMkho',1);
		create_combobox('#maThuoc_get','#maThuoc_hide',".table_thuoc","#table_thuoc",create_Dm_thuoc,500,300,'Danh mục thuốc','data_DMthuoc',0);
		change_focus("#tungay","#denngay");
		change_focus("#denngay","#tuso");
		change_focus("#tuso","#denso");
		change_focus("#denso","#tenkhachhang");
		change_focus("#tenkhachhang","#maKHO");
		//change_focus("#maKH","#maKHO");
		change_focus("#maKHO","#ghichu");
		//change_focus("#maThuoc_get","#ghichu");
		change_focus("#ghichu","#tim_kiem");
}

function create_Dm_ncc(elem, datalocal) {
        datalocal = jQuery.parseJSON(datalocal);
        $(elem).jqGrid({
            datastr: datalocal,
            datatype: "jsonstring",
            colNames: ['ID','Tên nhà cung cấp', 'Người liên hệ'],
            colModel: [
                  {name: 'ID_NCC', index: 'ID_NCC', hidden:true},
				{name: 'TenNCC', index: 'TenNCC', hidden:false},
				
                {name: 'NguoiLienHe', index: 'NguoiLienHe', hidden: false},
                
            ],
            hidegrid: false,
            gridview: true,
            loadonce: true,
            scroll: false,
            modal: true,
            rowNum: 200000,
            rowList: [],
            height: 300,
            width: 470,
            viewrecords: true,
            ignoreCase: true,
            shrinkToFit: true,
            cmTemplate: {sortable: false},
            sortorder: "desc",
            serializeRowData: function(postdata) {
            },
            onSelectRow: function(id) {
				 var rowData = $('#table_ncc').getRowData(id);
				 $("#TenKH").text(rowData["TenNCC"]);
			     ID_Thuoc=rowData["MaThuoc"];
				//alert(ID_Thuoc);
            },
			
            ondblClickRow: function(id, rowIndex, columnIndex) {
            },
            loadComplete: function(data) {

                grid_filter_enter(elem);
            



            },
        });
        $(elem).jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});
        $(elem).jqGrid('bindKeys', {});
    }

function create_Dm_kho(elem, datalocal) {
        datalocal = jQuery.parseJSON(datalocal);
        $(elem).jqGrid({
            datastr: datalocal,
            datatype: "jsonstring",
            colNames: ['ID Kho', 'Tên kho','Vị trí','Ghi chú'],
            colModel: [
                {name: 'ID_Kho', index: 'ID_Kho', hidden:true},
                {name: 'TenKho', index: 'TenKho', hidden: false},
				{name: 'DiaChi', index: 'DiaChi', hidden: false},
				{name: 'GhiChu', index: 'GhiChu', hidden: false},
                
            ],
            hidegrid: false,
            gridview: true,
            loadonce: true,
            scroll: false,
            modal: true,
            rowNum: 200000,
            rowList: [],
            height: 200,
            width: 470,
            viewrecords: true,
            ignoreCase: true,
            shrinkToFit: true,
            cmTemplate: {sortable: false},
            sortorder: "desc",
            serializeRowData: function(postdata) {
            },
            onSelectRow: function(id) {
				 var rowData = $('#makho').getRowData(id);
				 $("#maKHO1").text(rowData["TenKho"]+" ("+rowData["DiaChi"]+")");
            },
			
            ondblClickRow: function(id, rowIndex, columnIndex) {
            },
            loadComplete: function(data) {

                grid_filter_enter(elem);
            



            },
        });
        $(elem).jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});
        $(elem).jqGrid('bindKeys', {});
    }
	
function create_Dm_thuoc(elem, datalocal) {
        datalocal = jQuery.parseJSON(datalocal);
        $(elem).jqGrid({
            datastr: datalocal,
            datatype: "jsonstring",
            colNames: ['Mã thuốc', 'Tên đơn vị tính','Tên biệt dược','Tên nhóm thuốc'],
            colModel: [
                 
				{name: 'MaThuoc', index: 'MaThuoc', hidden:true},
                {name: 'TenDonViTinh', index: 'TenDonViTinh', hidden: false},
				{name: 'TenBietDuoc', index: 'TenBietDuoc', hidden: false},
				{name: 'TenNhomThuoc', index: 'TenNhomThuoc', hidden: false},
                
            ],
            hidegrid: false,
            gridview: true,
            loadonce: true,
            scroll: false,
            modal: true,
            rowNum: 200000,
            rowList: [],
            height: 300,
            width: 470,
            viewrecords: true,
            ignoreCase: true,
            shrinkToFit: true,
            cmTemplate: {sortable: false},
            sortorder: "desc",
            serializeRowData: function(postdata) {
            },
            onSelectRow: function(id) {
				 var rowData = $('#table_thuoc').getRowData(id);
				 $("#tenThuoc").text(rowData["TenBietDuoc"]);
				$("#maThuoc_hide").val(id);
				//alert(ID_Thuoc);
            },
			
            ondblClickRow: function(id, rowIndex, columnIndex) {
            },
            loadComplete: function(data) {

                grid_filter_enter(elem);
            



            },
        });
        $(elem).jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});
        $(elem).jqGrid('bindKeys', {});
    }
	
function change_focus(source,dest){
	$(source).keyup(function(e){
				if(jwerty.is("enter",e)||jwerty.is("tab",e)){
					$(dest).focus();
				}
			})
	}
</script>