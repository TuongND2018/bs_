<head>
<style type="text/css">
   
</style>
</head>

<body style="font:12px arial,Geneva,sans-serif !important"> 
    <div id="dialog-form" title="Thêm bản ghi" style="display:none">
    <div id="container">
    <div class="form_row" >  
      <table id="rowed4" >   
          
                <tr>
                    <td>Mã Thuốc:*</td>
                    <td><input type=text id="mathuoc" name="mathuoc"  disabled style="width: 290px!important;"></td>
                    <td></td>
                    <td>Barcode</td>
                    <td><input type=text id="Barcode" name="Barcode" style="width: 290px!important"></td>
                </tr>
                <tr>
                    <td>Tên biệt dược:*</td>
                    <td><input type=text id="tenbietduoc" name="tenbietduoc"  style="width: 290px!important"> </td>
                    <td></td>
                    <td>Tên gốc:*</td>
                    <td><input type=text id="tengoc" name="tengoc"  style="width: 290px!important"></td>
                </tr>
                <tr>
                    <td>Tên hóa đơn:*</td>
                    <td><input type=text id="tenhoadon" name="tenhoadon" style="width: 290px!important"></td>
                    <td></td>
                    <td>Tên khác</td>
                    <td><input type=text id="tenkhac" name="tenkhac"style="width: 290px!important"></td>
                </tr>
                <tr>
                    <td>Hoạt chất chính</td>
                    <!--<td><select	 id="HoatChatChinh" style="width:300px;height:50px;margin-top:-5px!important" class="populate" multiple="multiple" ></td>-->
                    <td><a id="create-hc" name="ID_HoatChat"class="fm-button ui-state-default ui-corner-all " style="vertical-align:top;width:22px;height:22px;margin-right: 40px;"  ><span  class="ui-icon ui-icon-circle-plus"></span></a></td>
                    <td></td><td>Đường dùng</td>
                    <td><select	 id="ID_DuongDung" name="ID_DuongDung" style="width:300px;height:50px;margin-top:-5px!important" class="populate" multiple="multiple" >   
                        </select></td>
                </tr>
               
                <tr>
                    <td>Nước sản xuất:*</td>
                    <td><select type="text" id="ID_NuocSanXuat" name="ID_NuocSanXuat"  size="1" style="width: 300px!important;" >
                        </select>
                    </td>
                    <td></td>
                    <td>Nhóm thuốc:* </td>
                    <td><select required="true" type="text" style="width: 300px!important;"id="ID_NhomThuoc" name="ID_NhomThuoc" size="1" class="FormElement ui-widget-content ui-corner-all">
                        </select></td>
                </tr>
                <tr>
                    <td>Nhóm bệnh:*</td>
                    <td><select required="true" type="text" style="width: 300px!important;" id="ID_NhomBenh" name="ID_NhomBenh" size="1" class="FormElement ui-widget-content ui-corner-all">
                        </select></td>
                        <td></td>
                    <td>Đơn vị tính:*</td>
                    <td><select required="true" type="text" style="width: 300px!important;" id="ID_DonViTinh" name="ID_DonViTinh" size="1" class="FormElement ui-widget-content ui-corner-all">
                        </select></td>
                </tr>
                <tr>
                    <td>Hãng sản xuất:*</td>
                    <td><select required="true" type="text" style="width: 300px!important;" id="ID_HangSanXuat" name="ID_HangSanXuat" size="1" class="FormElement ui-widget-content ui-corner-all">
                        </select></td>
                        <td></td>
                    <td>Nhóm phân loại thuốc:*</td>
                    <td><a id="create-npl" name="Id_NhomphanLoaiThuoc"class="fm-button ui-state-default ui-corner-all " style="vertical-align:top;width:22px;height:22px;margin-right: 40px;"  ><span  class="ui-icon ui-icon-circle-plus" ></span></a></td>
                </tr>
                <tr>
                    <td>Hàm lượng:*</td>
                    <td><input  type=text id="hamluong" name="hamluong"style="width: 290px!important"></td>
                    <td></td>
                    <td>Hạn sử dụng:</td>
                    <td><input type=text id="hansudung" name="hansudung" style="width: 290px!important" ></td>
                </tr>
                <tr>
                    <td>Đơn Giá:*</td>
                     <td><input required type=text id="dongia" name="dongia" style="width: 290px!important"></td>
                     <td></td>
                    <td>Tồn kho tối thiểu</td>
                    <td><input type=text id="tonkhotoithieu" name="tonkhotoithieu" style="width: 290px!important"></td>
                </tr>
                
                <tr>
                    <td>Độ ưu tiên</td>
                    <td><input type=text id="douutien" name="douutien"style="width: 290px!important"></td>
                    <td></td>
                    <td>Ghi chú</td>
                    <td><input type=text id="ghichu" name="ghichu"style="width: 290px!important"></td>
                </tr>
                <tr>
                    <td>Hệ số điều chỉnh giá bán</td>
                    <td><input type=text id="hesogiaban" name="hesodieuchinhgiaban" style="width: 290px!important"></td>
                    <td></td>
                    <td>Hệ số điều chỉnh giá bán hóa đơn</td>
                    <td><input type=text id="hesogiabanhoadon" name="hesodieuchinhgiaban_hoadon"style="width: 290px!important"></td>
                </tr>
                <tr>
                    <td>Đơn giá hóa đơn</td>
                    <td><input type=text id="dongiahoadon" name="dongia_hoadon"style="width: 290px!important"></td>
                    <td></td>
                    <td>Phần trăm thuế</td>
                    <td><input type=text id="phantramthue"name="phantramthue" style="width: 290px!important"></td>
                </tr>
                <tr>
                    <td>Quy cách</td>
                    <td><input type=text id="quycach" name="quycach"style="width: 290px!important"></td>
                    <td></td>
                    <td>SignNumber:</td>
                    <td><input   type=text id="signnumber" name="signnumber"style="width: 290px!important"></td>
                </tr>
                <tr>
                    <td>Là thuốc</td>
                    <td><input type=checkbox id="lathuoc" value="1" name="lathuoc"></td>
                    <td></td>
                    
                </tr>
                <tr>
                    <td>BHYT nội trú hay ngoại trú</td>
                    <td><input type=checkbox id="bhyt" value="1" name="BHYTNoiTruOrNgTru"></td>
                    <td></td>
                    <td>Thuốc bảo hiểm y tế</td>
                    <td><input type=checkbox id="thuocbhyt" value="1" name="ThuocBHYT"></td>
                </tr>
                <tr>
                    <td>Ẩn đối với GPP</td>
                    <td><input type=checkbox id="angpp" value="1" name="IsHide4GPP"></td>
                    <td></td>
                    <td>Sử dụng</td>
                    <td><input type="checkbox" id='active' checked="checked" value="1" name="active"></td>
                </tr>         
            </table>
         </div>
    </div>
    </div>
	<div id="grid_phong_ban">      	 
          <table id="rowed3" ></table>
            <div id="prowed3"></div>  
        </div>
</body>

<script type="text/javascript">
jQuery(document).ready(function() {
	create_grid();			
	//shortcut_key();		
	jQuery(window).resize(function() {		 
		 $("#rowed3").setGridWidth($(window).width()-20);
		 $("#rowed3").setGridHeight($(window).height()-$("#form_danh_muc_phong_ban").height()-130);
	}); 	
});
 
function create_grid(){	
	 $("#rowed3").jqGrid({
		url:'resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_thietbi_vattu',
		datatype: "json",	
		colNames:['Tên loại','Mã loại','Nhóm','Nhóm cha','STT','Sử dụng','Có khấu hao'],
		colModel:[
			{name:'TenLoai',index:'TenLoai',search:true, width:"30%", editable:false,align:'left',hidden:false}, 
			{name:'MaLoai',index:'MaLoai', width:"15%", editable:true,align:'left',hidden:false,edittype:"text"},
			{name:'Nhom',index:'Nhom', width:"20%", editable:true,align:'left',hidden:false,edittype:"text"},	 
			{name:'NhomCha',index:'NhomCha', width:"20%", editable:true,align:'left',hidden:false,edittype:"text"},	 
			{name:'STT',index:'STT', width:"5%", editable:true,align:'left',hidden:false,edittype:"text"},	
			{name:'SuDung',index:'SuDung', width:"5%", editable:true,align:'left',hidden:false,edittype:"text"},	
			{name:'CoKhauHao',index:'CoKhauHao', width:"5%", editable:true,align:'left',hidden:false,edittype:"text"},	
		],
		loadonce: false,
		scroll: 1,	
		modal:true,	 	
		pager: '#prowed3',	
		rowNum: 10000,
		gridview: true,
		pginput:false,
		pgbuttons:false,
		rowList:[],
		sortname: 'Nhom',
		height:100,
		width: 100,
		viewrecords: true,	
		ignoreCase:true,
		shrinkToFit:true,
		grouping: false,
		stringResult:true,
		sortorder: "asc",
		grouping:true,
		groupingView : {
			groupField : ['Nhom'],
			groupColumnShow : [true],
			groupCollapse : true,
			   
		},
		serializeRowData: function (postdata) { 		 	

		},
		onSelectRow: function(id){		  
  
		},
		ondblClickRow: function (id, rowIndex, columnIndex) {
                    
 		},
		loadComplete: function(data) {
                     
		},	  
		caption: "Danh mục Thiết bị - Vật tư"
	})
	$("#rowed3").jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false,defaultSearch:"cn"});
    $("#rowed3").jqGrid('navButtonAdd', '#prowed3', {caption: "Excel", buttonicon: 'ui-icon-calculator', id : 'excel',
            onClickButton: function() {			 
				
            },
            title: "Xuất ra file Excel",
            position: "last"
    });				  
	$("#rowed3").setGridWidth($(window).width()-20);
	$("#rowed3").setGridHeight($(window).height()-$("#form_danh_muc_phong_ban").height()-130);
}

</script>