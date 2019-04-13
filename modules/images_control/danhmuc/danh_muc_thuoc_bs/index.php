<head>
  
 
    <script src="js/SlickGrid-master/lib/jquery.event.drag-2.2.js"></script>
    <script src="js/SlickGrid-master/plugins/slick.cellrangedecorator.js"></script>
	<script src="js/SlickGrid-master/plugins/slick.cellrangeselector.js"></script>
    <script src="js/SlickGrid-master/plugins/slick.cellselectionmodel.js"></script>
    <script src="js/SlickGrid-master/slick.core.js"></script>
    <script src="js/SlickGrid-master/slick.formatters.js"></script>
    <script src="js/SlickGrid-master/slick.editors.js"></script>
    <script src="js/SlickGrid-master/plugins/slick.rowselectionmodel.js"></script>
    <script src="js/SlickGrid-master/slick.grid.js"></script>
    <script src="js/SlickGrid-master/slick.dataview.js"></script>
    <script src="js/SlickGrid-master/controls/slick.pager.js"></script>
    <script src="js/SlickGrid-master/controls/slick.columnpicker.js"></script>
    <script src="js/SlickGrid-master/slick.groupitemmetadataprovider.js"></script>
    <script src="js/SlickGrid-master/plugins/slick.autotooltips.js"></script>
    <link rel="stylesheet" href="js/SlickGrid-master/slick.grid.css" type="text/css"/>
      
  
 


     
    <style type="text/css">
	

	
.slick-cell.selected {
  background: none repeat scroll 0 0 #76C4EB;
}

/*.ui-widget-header .ui-state-focus {
	border: 1px solid #006cab;
	background: #67b021 url(images/ui-bg_highlight-soft_25_67b021_1x100.png) 50% 50% repeat-x;
	font-weight: bold;
	color: #ffffff;
	background:#008ddf;
}*/

.slick-row:hover {
   background:#008ddf;
 }

 .slick-headerrow-column {
      background: #87ceeb;
      text-overflow: clip;
      -moz-box-sizing: border-box;
      box-sizing: border-box;
    }

    .slick-headerrow-column input {
      margin: 0;   
      width: 100%;
      height: 100%;
      -moz-box-sizing: border-box;
      box-sizing: border-box;
    }
    #dialog-form{     
    }
    .error{
        border:1px solid  orangered;
    }
    #rowed4{
       height:500px;
       text-align:left;
    }
    #rowed4 .textarea{
        text-align:right;
    }
    #text{
        width: 290px!important;
    }
    div.form_row{
        vertical-align:top;margin-left:40px!important;outline:#327E04;padding: 0.3em;    
    }
    .form_row textarea{
        font-size: 12px;
    }
    div.form_row input[type="text"] {
    border: 1px solid #327E04;
    padding: 0.3em;
    text-align: center;
    width: 230px;
    font: 12px Tahoma,Geneva,sans-serif !important;
    }
    .ui-button-text{
        padding-left: 3px!important;
        padding-top: 3px!important
    }
/*    .custom-combobox-input ui-widget ui-widget-content ui-state-default ui-corner-left ui-autocomplete-input{
        width: 290px!important;
    }*/
    .select2-container-multi .select2-choices{
    min-height: 55px;
    max-height: 55px;
    overflow-y: auto; 
    }
    .input_s{
        background-color:#F4FA58!important;
    }
   
</style>
</head>

<body style="font:12px Tahoma,Geneva,sans-serif !important"> 
    <div id="dialog-form2" title="Thêm thuốc và hoạt chất">
        <table id="list10_d"></table>
         <div id="pager10_d"></div>
    </div> 
    <div id="dialog-form3" title="Thêm nhóm phân loại thuốc">
        <table id="rowed5"></table>
         <div id="prowed5"></div>
    </div> 
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
<!--	<div id="grid_phong_ban">      	 
          <table id="rowed3" ></table>
            <div id="prowed3"></div>  
        </div>-->
        
          <div style="width:1300px;" id="slickgrid">
            <div id="myGrid" style="width:100%;height:650px;margin-bottom:4px"></div>
          
          </div>
</body>

<script type="text/javascript">
jQuery(document).ready(function() {
    /*   
       $.post('resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_duongdung').done(function(data) {
           window.id_duongdung=$.parseJSON(data);
          })
        $.post('resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_hc').done(function(data) {
           window.hoatchatchinh2=$.parseJSON(data);
        
          })*/
	$("#them").button();
	$("#sua").button();
    $("#xoa").button();	 
  var dataView;
  window.grid;
  var data = [];
  var options = {
    enableCellNavigation: true,
    showHeaderRow: true,
    headerRowHeight: 30,
    explicitInitialization: true,
	forceFitColumns: false,
	
  };
  var columns = [  		
 		    
			{name:'Tên thương mại',id:'TenGoc',field: "TenGoc",width: 250},				
			{name:'Tên biệt dược',id:'TenBietDuoc',field: "TenBietDuoc",width: 250},	 		
			{name:'Hoạt chất chính',id:'HoatChatChinh',field: "HoatChatChinh",width: 500},
            {name:'Quy cách',id:'QuyCach',field: "QuyCach",width: 100}, 
		
			
			{name:'Hàm lượng',id:'HamLuong',field: "HamLuong",width: 100},
			
		
  
          
			
  
  
  ];



 window.columnFilters = {};

 function filter(item) {
     
        var patRegex_no = /^[$]?[-+]?[0-9.,]*[$%]?$/; 
        for (var columnId in columnFilters) {
            if (columnId !== undefined && columnFilters[columnId] !== "") {
                var c = grid.getColumns()[grid.getColumnIndex(columnId)];
                var filterVal = columnFilters[columnId].toLowerCase();
                var filterChar1 = filterVal.substring(0, 1); 

                if(item[c.field] == null)
                    return false;
                if( filterChar1 == '<' || filterChar1 == '>' || filterChar1 == '!' || filterChar1 == '=') {                  
                    var idxFilterSpace = filterVal.indexOf(" ");
                    if( idxFilterSpace > 0 ) {                        
                        var condition = filterVal.substring(0, idxFilterSpace);
                        filterNoCondVal = columnFilters[columnId].substring(idxFilterSpace+1);
                        if( patRegex_no.test(item[c.field]) ) {                             
                            if( testCondition(condition, parseFloat(item[c.field]), parseFloat(filterNoCondVal)) == false ) 
                                return false;                      
                        }else {                             
                            if ( testCondition(condition, item[c.field].toLowerCase(), filterNoCondVal.toLowerCase()) == false )
                                return false;
                        }
                    } 
                }else{
					if (item[c.field].toLowerCase().substring(0, columnFilters[columnId].length) != columnFilters[columnId].toLowerCase()) {
					 return false;
					}              
                }
            }
        }
        return true;
    }

    function testCondition(condition, value1, value2){
        switch(condition) {
            case '<':   var resultCond = (value1 < value2) ? true : false;
                        break;
            case '<=':  var resultCond = (value1 <= value2) ? true : false;
                        break;
            case '>':   var resultCond = (value1 > value2) ? true : false;
                        break;
            case '>=':  var resultCond = (value1 >= value2) ? true : false;
                        break;
            case '!=':  
            case '<>':  var resultCond = (value1 != value2) ? true : false;
                        break;
            case '=':   
            case '==':  var resultCond = (value1 == value2) ? true : false;
                        break;          
        }
        return resultCond;
    }
  $(function () {
	  var groupItemMetadataProvider = new Slick.Data.GroupItemMetadataProvider();
	  dataView = new Slick.Data.DataView({ groupItemMetadataProvider: groupItemMetadataProvider,inlineFilters: true});	
      grid = new Slick.Grid("#myGrid", dataView, columns, options);		
	  dataView.onRowCountChanged.subscribe(function (e, args) {
		grid.updateRowCount();			
		grid.render();
  	  });  
	  dataView.setGrouping({
		getter: "TenNhomThuoc",
		formatter: function (g) {return g.value + "  <span style='color:green'>(" + g.count + ")</span>";},	 
		aggregators :[new Slick.Data.Aggregators.Sum("Gia")],  
	    collapsed: false,
		lazyTotalsCalculation: true
	  });
		  grid.registerPlugin(groupItemMetadataProvider);
		  plugin = new Slick.AutoTooltips();
	   	  grid.registerPlugin(plugin);
		
	  grid.setSelectionModel(new Slick.CellSelectionModel());	
	  grid.setSelectionModel(new Slick.RowSelectionModel());
	  dataView.onRowsChanged.subscribe(function (e, args) {
		grid.invalidateRows(args.rows);
		grid.render();
	  });


  $(grid.getHeaderRow()).delegate(":input", "change keyup", function (e) {
      var columnId = $(this).data("columnId");
      if (columnId != null) {
        columnFilters[columnId] = $.trim($(this).val());
        dataView.refresh();
      }
    });		
	grid.onDblClick.subscribe(function (e, args){
		
		 var item = args.item;
		//alert(dataView.getItem(args.row).MaThuoc);
         $('#dialog-form').dialog('open');
         $("#mathuoc").val(dataView.getItem(args.row).MaThuoc);
        $("#Barcode").val(dataView.getItem(args.row).Barcode);
        $("#tenbietduoc").val(dataView.getItem(args.row).TenBietDuoc);
        $("#tengoc").val(dataView.getItem(args.row).TenGoc);
        $("#tenhoadon").val(dataView.getItem(args.row).TenHoaDon);
       // $("#tenkhac").val(dataView.getItem(args.row).tenkhac);
        $("#hamluong").val(dataView.getItem(args.row).hamluong);
       // $("#hansudung").val(dataView.getItem(args.row).hansudung);
        $("#dongia").val(dataView.getItem(args.row).DonGia);
        $("#tonkhotoithieu").val(dataView.getItem(args.row).TonKhoToiThieu);
        $("#douutien").val(dataView.getItem(args.row).DoUuTien);
        $("#ghichu").val(dataView.getItem(args.row).GhiChu);
        $("#hesogiaban").val(dataView.getItem(args.row).HeSoDieuChinhGiaBan);
        $("#hesogiabanhoadon").val(dataView.getItem(args.row).HeSoDieuChinhGiaBan_HoaDon);
        $("#dongiahoadon").val(dataView.getItem(args.row).DonGia_HoaDon);
        $("#phantramthue").val(dataView.getItem(args.row).PhanTramThue);
        $("#quycach").val(dataView.getItem(args.row).QuyCach);
        $("#signnumber").val(dataView.getItem(args.row).SignNumber);
	});	
	  grid.onHeaderRowCellRendered.subscribe(function(e, args) {
        $(args.node).empty();
        $("<input type='text'>")
           .data("columnId", args.column.id)
           .val(columnFilters[args.column.id])
           .appendTo(args.node);
      });	  
	grid.init();
    dataView.beginUpdate();
	$.post('resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_thuoc&q=2').done(function(data){
		data=$.parseJSON(data)
		dataView.setItems(data);
		dataView.setFilter(filter);		
 		dataView.endUpdate();		
	})
  })
 resize_control();
})

 	function resize_control(){
        var h=$(window).height();
         var w=$(window).width();
      $('#myGrid').css({'height':(h-35)+'px'});
      $('#myGrid').css({'width':(w-10)+'px'});
     
     }
 
</script>