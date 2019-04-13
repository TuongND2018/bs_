<style>
#gbox_rowed7,#gbox_rowed8 {
    border: 1px solid #919191;
    box-shadow: 0 0 10px #A0A0A0;
    margin-left: 4px;
    margin-top: 5px;
}
#rowed3 td {	 
		word-wrap:normal!important;
		white-space:nowrap;
	}
.ui-jqgrid-labels th.ui-th-column div{
        word-wrap: break-word; /* IE 5.5+ and CSS3 */
        white-space: pre-wrap; /* CSS3 */
        white-space: -moz-pre-wrap; /* Mozilla, since 1999 */
        white-space: -pre-wrap; /* Opera 4-6 */
        white-space: -o-pre-wrap; /* Opera 7 */
        overflow: hidden;
        height: auto !important;
        vertical-align: middle;
    }
#panel_main{
	display:block !important;
	background:#F5F3E5!important;
}#main_top{
	background:#F5F3E5;
	height:35px;
	width:1355px;
	float:left;
	border-radius:3px;
	border:#D8CEBE solid 1px;
	margin:5px;
}
#main_bottom{
	height:600px;
	width:1355px;
	float:left;
	margin-left:5px;
	border:#D8CEBE solid 1px;
	background:#F5F3E5;
	
}select{
	width:120px;
}#sub_main_top{
	margin-left:15px;
	margin-top:5px;
}#tabs .ui-tabs-nav li {
    font-size: 90%;
	margin-top: 0.1em;	
}#tabs .ui-tabs-nav li.ui-tabs-selected, #tabs .ui-tabs-nav li.ui-state-active {
  background: none repeat scroll 0 0 #F5F3E5;
    border-top:solid  #D8CEBE 1px;
	border-left:solid  #D8CEBE 1px;
	border-right:solid  #D8CEBE 1px;;
    box-shadow: none;
    font-size: 90%;
    margin-top: 0.1em;	
}#tabs-1,#tabs-2,#tabs-3{
	background:#F5F3E5!important;
	border:solid  #CCC 1px!important;
	border-radius:3px;
	
}#xemtheo1{
	width:80px!important;
}#sub_main_top2{
	 margin-left: 5px;
   	 margin-top: 5px;
}#xemdanhsach{
	margin-left:5px;
	margin-top: -2px;
}#tabs .ui-tabs-nav li.ui-tabs-selected, #tabs .ui-tabs-nav li.ui-state-active {
z-index: 1;
}#tabs-1,#tabs-2 ,#tabs-3{
	padding:0!important;
}

#gview_rowed8 div.ui-state-default{
	border-radius: 6px 6px 0 0!important;
	height:25px;
	
}.ui-jqgrid-htable{
	height:25px;
}#gs_Xong1{
	display:none;
}.ntext{
	text-align:center;
}#sodongbn,#sodongbn2,#sodongbn3,#sodongthuoc,#sodongthuoc2,#sodongthuoc3,#thanhtienvon,#thanhtienban{
	box-shadow:none!important;	
	padding: 0px!important;
}#pg_prowed3,#pg_prowed4,#pg_prowed5,#pg_prowed6,#pg_prowed7,#pg_prowed8{
	display:none;
}
.modal112111{
	height:415px;
}
</style>
<body> 
<input type="hidden" id="_ntab" value="">
<div id="dialog-max" title="Thông báo" style="display:none">
  <p><span class="ui-icon ui-icon-alert" style="float:left; margin:0 7px 20px 0;"></span>Số thuốc không được vượt quá thuốc bác sỹ kê!</p>
</div>
<div id="dialog-thongbao" title="Thông báo" style="display:none">
  <p><span class="ui-icon ui-icon-alert" style="float:left; margin:0 7px 20px 0;"></span>Đơn thuốc này đã được trả lại trước đó nên không thể thực hiện tiếp!</p>
</div>
<div id="dialog-confirm" title="Thông báo" style="display:none">
<input type="hidden" name="nrowid" id="nrowid" value="" >
<input type="hidden" name="ntenthuoc" id="ntenthuoc" value="" >
  <p><span class="ui-icon ui-icon-alert" style="float:left; margin:0 7px 20px 0;"></span>Bạn có muốn xóa nhật ký không?</p>
</div>
<div id="dialog-confirm2" title="Thông báo" style="display:none">
<input type="hidden" name="nrowid2" id="nrowid2" value="" >
  <p><span class="ui-icon ui-icon-alert" style="float:left; margin:0 7px 20px 0;"></span>Bạn có muốn xóa nhật ký không?</p>
</div>
<div id="dialog-error" title="Thông báo" style="display:none">
  <p><span class="ui-icon ui-icon-alert" style="float:left; margin:0 7px 20px 0;"></span>Số thuốc không được vượt quá thuốc bác sỹ kê!</p>
</div>
<input type="hidden" name="_nrowid" id="_nrowid" value="" >
<input type="hidden" name="_nrowid2" id="_nrowid2" value="" >
<input type="hidden" id="daxem" >
<input type="hidden" id="daxem2" >
    <div id="panel_main" >  
		<div id="main_top">
        	<div id="sub_main_top">
           <!-- <button id="homnay" type="button" onClick="Code">Hôm nay</button>	-->
            <label for="from_day"> Từ ngày:</label>
            <input type="text" id="from_day" name="from_day"  class="ntext" size="10px" value="<?php echo date($_SESSION["config_system"]["ngaythang"]) ?>"/>
            <label for="to_day"> Đến ngày:</label>
           <input type="text" id="to_day" name="to_day"  class="ntext" size="10px"  value="<?php echo date($_SESSION["config_system"]["ngaythang"]) ?>"/>
			<input type="hidden" name="from_day_mask" id='from_day_mask'  value="<?php echo date("Y/m/d")?>">
			<input type="hidden" name="to_day_mask" id='to_day_mask' value="<?php echo date("Y/m/d")?>">
            <label for="mabenhnhan">Tìm theo mã bệnh nhân </label>
            <input type="text" id="mabenhnhan" name="mabenhnhan" class="ntext" size="10px"> 
            <input type="button" id="xemdanhsach" name="xemdanhsach" value="Xem danh sách" />
            <label style="float:right; margin-right:20px;color: #0000FF;margin-top: 5px;"> Kích đúp vào 1 dòng trên lưới "Danh sách toa thuốc đã xuất" để lập phiếu hoàn trả thuốc</label>
            </div><!--sub_main_top-->
        
        </div><!--main_top-->
        <div id="main_bottom">
        	<div id="tabs">
  <ul style="margin-left:10px;">
    <li><a href="#tabs-1" onClick="_fuc_tabs(1)" >Danh sách toa thuốc đã xuất</a></li>
    <li><a href="#tabs-2" onClick="_fuc_tabs(2)" >Danh sách toa thuốc bác sỹ cho phép trả lại</a></li>
    <li><a href="#tabs-3" onClick="_fuc_tabs(3)" >Các đơn thuốc đã trả lại</a></li>
  </ul>
  <div id="tabs-1">
       	<table id="rowed3" ></table>
        <div id="prowed3"><div class="sodong"><input type="text" style="margin-left: 32px; margin-top: 4px; width: 70px;;background:#4CA109;border:1px solid #327E04; color: #FFFFFF;font-weight: bold; text-align:right;" disabled="" readonly value="0" class="disable" id="sodongbn"></div></div> 
        <table id="rowed4" ></table>
        <div id="prowed4"><div class="sodong"><input type="text" style="margin-left: 32px; margin-top: 4px; width: 280px;background:#4CA109;border:1px solid #327E04; color: #FFFFFF;font-weight: bold; text-align:right;" disabled="" readonly value="Số dòng = 0" class="disable" id="sodongthuoc">
      </div></div> 
  </div><!-- AND tabs-1-->
  <div id="tabs-2">
   <table id="rowed5" ></table>
     <div id="prowed5" style=" display:none;"><div class="sodong"><input type="text" style="margin-left: 32px; margin-top: 4px; width: 70px;;background:#4CA109;border:1px solid #327E04; color: #FFFFFF;font-weight: bold; text-align:right;" disabled="" readonly value="0" class="disable" id="sodongbn2"></div></div> 

    <table id="rowed6" ></table>
      <div id="prowed6" style=" display:none;"><div class="sodong"><input type="text" style="margin-left: 32px; margin-top: 4px; width: 70px;;background:#4CA109;border:1px solid #327E04; color: #FFFFFF;font-weight: bold; text-align:right;" disabled="" readonly value="0" class="disable" id="sodongthuoc2"></div></div> 

  </div><!-- AND tabs-2-->
   <div id="tabs-3">
    <table id="rowed7" ></table>
    <div id="prowed7"><div class="sodong"><input type="text" style="margin-left: 32px; margin-top: 4px; width: 120px;background:#4CA109;border:1px solid #327E04; color: #FFFFFF;font-weight: bold; text-align:right;" disabled="" readonly value="0" class="disable" id="sodongbn3"></div></div> 
    <table id="rowed8" ></table>
    <div id="prowed8"><div class="sodong"><input type="text" style="margin-left: 32px; margin-top: 3px; width: 170px;background:#4CA109;border:1px solid #327E04; color: #FFFFFF;font-weight: bold; text-align:right;" disabled="" readonly value="Số dòng = 0" class="disable" id="sodongthuoc3">
    <input type="text" style="margin-left: 377px; margin-top: 3px; width: 115px;background:#4CA109;border:1px solid #327E04; color: #FFFFFF;font-weight: bold; text-align:right;" disabled="" readonly value="" class="disable" id="thanhtienban">
    <input type="text" style="margin-left: 246px; margin-top: 3px; width: 115px;background:#4CA109;border:1px solid #327E04; color: #FFFFFF;font-weight: bold; text-align:right;" disabled="" readonly value="" class="disable" id="thanhtienvon"></div></div> 

  </div><!-- AND tabs-3-->
</div>
        </div><!--main_bottom-->
    </div>

    
</body>
</html> 
<script type="text/javascript">
    jQuery(document).ready(function() {
		window.n_tam=0;
	$("#panel_main").css("height",$(window).height()+"px");			 
	$("#panel_main").fadeIn(1000);
	load_nguoithuchien();
		create_grid();
		create_grid2();
		create_grid3();
		create_grid4();
		create_grid5();
		create_grid6();
		resize_control();
		
		$( "#dialog-thongbao" ).dialog({
		  resizable: false,
		  autoOpen: false,
		  width:330,
		 // height:140,
		  modal: true,
		  buttons: {
			"OK": function() {
			  $( this ).dialog( "close" );
			}
		  }
		});
		
		

	$("#xemdanhsach").click(function() {
		if($('#_ntab').val()==1){
			if($('#mabenhnhan').val()>0){
			$("#rowed3").jqGrid('setGridParam',{url:'resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_dstoathuoc_toadaxuat_mabenhnhan&tu_ngay='+ $( '#from_day' ).val()+'&den_ngay='+$( '#to_day' ).val()+'&mabenhnhan='+$( '#mabenhnhan' ).val(),datatype:'json'}).trigger('reloadGrid');
			}else{
				$("#rowed3").jqGrid('setGridParam',{url:'resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_dstoathuoc_toadaxuatn_mabenhnhan_none&tu_ngay='+ $( '#from_day' ).val()+'&den_ngay='+$( '#to_day' ).val(),datatype:'json'}).trigger('reloadGrid');
				}
		}else if($('#_ntab').val()==2){
			if($('#mabenhnhan').val()>0){
			$("#rowed5").jqGrid('setGridParam',{url:'resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_dstoathuoc_bacsychopheptralai_mabenhnhan_none&tu_ngay='+ $( '#from_day' ).val()+'&den_ngay='+$( '#to_day' ).val()+'&mabenhnhan='+$( '#mabenhnhan' ).val(),datatype:'json'}).trigger('reloadGrid');
			}else{
				$("#rowed5").jqGrid('setGridParam',{url:'resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_dstoathuoc_bacsychopheptralai_mabenhnhan_none&tu_ngay='+ $( '#from_day' ).val()+'&den_ngay='+$( '#to_day' ).val(),datatype:'json'}).trigger('reloadGrid');
				}
		}else{
			if($('#mabenhnhan').val()>0){
			$("#rowed7").jqGrid('setGridParam',{url:'resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_dstoathuoc_tralai_mabenhnhan&tu_ngay='+ $( '#from_day' ).val()+'&den_ngay='+$( '#to_day' ).val()+'&mabenhnhan='+$( '#mabenhnhan' ).val(),datatype:'json'}).trigger('reloadGrid');
			}else{
				$("#rowed7").jqGrid('setGridParam',{url:'resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_dstoathuoc_tralai&tu_ngay='+ $( '#from_day' ).val()+'&den_ngay='+$( '#to_day' ).val(),datatype:'json'}).trigger('reloadGrid');
				}
			
			}
		
	});//end xemdanhsach
		
		$(function() {
			$( "#tabs" ).tabs();
		});
  //	autocompleted_combobox('#xemtheo');

	
	$("#_ntab").val(1);
	var d = new Date();
	var curr_date = d.getDate();
    var curr_month = d.getMonth() + 1; //Months are zero based
    var curr_year = d.getFullYear();
    var curr =(curr_date + "-" + curr_month + "-" + curr_year);
 	
		var fromday=$.datepicker.formatDate($.cookie("ngayJqueryUi"), new Date(<?php echo date("Y")?>, <?php echo date("m")?>-1, <?php echo date("d")?>));
		var today=$.datepicker.formatDate($.cookie("ngayJqueryUi"), new Date(<?php echo date("Y")?>, <?php echo date("m")?>-1, <?php echo date("d")?>));
		$("#from_day").datepicker({
            showWeek: true,
            defaultDate: "+1w",
            changeMonth: true,
            changeYear: true,
            numberOfMonths: 1,
             showButtonPanel: true,
            dateFormat: $.cookie("ngayJqueryUi"),  
			//maxDate: new Date(<?php echo date("Y")?>, <?php echo date("m")?>-1, <?php echo date("d")?>),
            onClose: function(selectedDate) {
            $("#to_day").datepicker("option", "minDate", selectedDate);
            },
            onSelect: function(dat, inst) {
            }
        });
        $("#to_day").datepicker({
            showWeek: true,
            defaultDate: "+1w",
            changeMonth: true,
            changeYear: true,
            numberOfMonths: 1,
            	showButtonPanel: true,
            	gotoCurrent:true,
            dateFormat: $.cookie("ngayJqueryUi"),   
		  //	maxDate: new Date(<?php echo date("Y")?>, <?php echo date("m")?>-1, <?php echo date("d")?>),     
            onClose: function(selectedDate) {
            },
            onSelect: function(dat, inst) {

            }
        });

	 $.dateEntry.setDefaults({spinnerImage: ''});		 
	 $("#from_day, #to_day").dateEntry({dateFormat: $.cookie("ngayDateEntry")});
	 
	
// end ngay
	$( "#xemdanhsach" ).button();
	
	
	
/*	document.onkeydown = function(e) {
			if (e.keyCode === 121) {
				if($("#_ntab").val()==1){
					$("#luudieuduong").click();
				}
				if($("#_ntab").val()==2){
					$("#luuchidinhdieutri").click();
				}
				return false;
			}
		};*/

  	phanquyen();
	})//and ready
$(window).resize(function() {		 
	$("#panel_main").css("height",$(window).height()+"px");			 
	$("#panel_main").fadeIn(1000); 
	resize_control();	 
});
 function create_grid()
    {
		mydata=[];
        $("#rowed3").jqGrid({
            data: mydata,
            datatype: "local",
            colNames: ['Mã BN','Họ tên BN','Ngày xuất','Người xuất','BS kê đơn','Ngày kê đơn','Số ngày thuốc','Ghi chú toa','BS cho phép trả thuốc','ID_NhapKho'],
            colModel: [
                {name: 'MaBenhNhan', index: 'MaBenhNhan', search: true, width: "5%", editable: false, align: 'left', hidden: false},
				{name: 'HoTen', index: 'HoTen', search: true, width: "15%", editable: false, align: 'left', hidden: false},
				{name: 'NgayXuat', index: 'NgayXuat', search: true, width: "10%", editable: false, align: 'center', hidden: false},
				{name: 'NguoiXuat', index: 'NguoiXuat', search: true, width: "10%",  align: 'center', hidden: false,formatter:"select",edittype:"select",editoptions: { value: nguoithuchien}, edittype: "text"},
				{name: 'BSKeDon', index: 'BSKeDon', search: true, width: "10%", editable: false, align: 'left', hidden: false},
				//{name: 'BSKeDon', index: 'BSKeDon', search: true, width: "10%",  align: 'center', hidden: false,formatter:"select",edittype:"select",editoptions: { value: nguoithuchien}, edittype: "text"},
				{name: 'NgayKeDon', index: 'NgayKeDon', search: true, width: "10%", editable: false, align: 'center', hidden: false},
				{name: 'SoNgayThuoc', index: 'SoNgayThuoc', search: true, width: "10%", editable: false, align: 'center', hidden: false},
				{name: 'GhiChuToa', index: 'GhiChuToa', search: true, width: "10%", editable: false, align: 'left', hidden: false},
				 {name:'BSChoPhepTraThuoc',index:'BSChoPhepTraThuoc', width:"10%",stype: 'select',searchoptions: { sopt: ['eq', 'ne'],value:':;1:Có;0:Không'}, editable:false,align:'center',hidden:false,edittype:"checkbox",formatter:"checkbox",formoptions:{ rowpos:13, colpos:1},editoptions: {value:"1:0"}},	
				{name: 'ID_NhapKho', index: 'ID_NhapKho', search: false, width: "10%", editable: false, align: 'center', hidden: true},
				
            ],
          loadonce: true,
            scroll: false,
            modal: true,
			rownumbers: true,
            shrinkToFit: true,
			grid_save_option: "",
            cmTemplate: {sortable: false},
            rowNum: 10000000,
			pginput:false,
			pgbuttons:false,
            rowList: [],
            pager: '#prowed3',
            sortname: 'ThoiGianVaoKham',
            height: 100,
            width: 100,
            viewrecords: true,
            ignoreCase: true,
            sortorder: "desc",
			afterShowForm : function (formid) {
				xuongdong(formid);
				lendong(formid);
			},
           ondblClickRow: function(rowId) {
			 var rowData = jQuery('#rowed3').getRowData(rowId);
			 if(rowData['ID_NhapKho']!=''){
			 	//phieutrathuoc(rowId);
				$( "#dialog-thongbao" ).dialog('open');
			 }else{
				 phieutrathuoc(rowId);
				 }
		
            },
           onSelectRow: function(id) {
				//alert(id);
         var rowData = jQuery('#rowed3').getRowData(id);
		 
			$("#rowed4").jqGrid('setGridParam',{url:'resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_chitietthuocdaxuat_cuabenhnhan&idxuatkho='+id,datatype:'json'}).trigger('reloadGrid');
			
			$("#rowed4").jqGrid('setCaption', ' Chi tiết toa thuốc đã xuất của BN: '+rowData['HoTen']);
			
            },
            loadComplete: function(data) {
				grid_filter_enter("#rowed3");
				var tmp1 = $("#rowed3").jqGrid('getDataIDs'); 
				$("#rowed3").jqGrid("setSelection",tmp1[0], true);
				$('#sodongbn').val(tmp1.length);
			
            },
            caption: " Danh sách toa thuốc đã xuất"
			
        });

       $("#rowed3").jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false,defaultSearch:"cn"});
$("#rowed3").jqGrid('navGrid', "#prowed3", {add: false, edit: false, del: false, search: false, refresh: false,prmView: false, closeAfterEdit: true, clearAfterAdd: true, navkeys: [true, 38, 40], closeOnEscape: true});
$("#rowed3").jqGrid('bindKeys', {});
    }
 function create_grid2()
    {
		mydata=[];
        $("#rowed4").jqGrid({
            data: mydata,
            datatype: "local",
            colNames: ['Thuốc/Vật tư','Số lô','SL thực xuất','Đơn giá bán','Thành tiền bán','Đơn giá vốn'],
            colModel: [
                {name: 'Thuoc_VatTu', index: 'Thuoc_VatTu', search: false, width: "15%", editable: false, align: 'left', hidden: false},
				{name: 'SoLo', index: 'SoLo', search: false, width: "10%", editable: false, align: 'left', hidden: false},
				{name: 'SLThucXuat', index: 'SLThucXuat', search: false, width: "10%", editable: false, align: 'right', hidden: false},
				{name: 'DonGiaBan', index: 'DonGiaBan', search: false, width: "10%", editable: false, align: 'right', hidden: false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: "", defaultValue: '0'}},
				{name: 'ThanhTienBan', index: 'ThanhTienBan', search: false, width: "10%", editable: false, align: 'right', hidden: false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: "", defaultValue: '0'}},
				{name: 'DonGiaVon', index: 'DonGiaVon', search: false, width: "10%", editable: false, align: 'right', hidden: false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: "", defaultValue: '0'}},
				
            ],
          loadonce: false,
            scroll: false,
            modal: true,
			rownumbers: true,
            shrinkToFit: true,
			grid_save_option: "",
            cmTemplate: {sortable: false},
            rowNum: 10000000,
			pginput:false,
			pgbuttons:false,
            rowList: [],
            pager: '#prowed4',
            sortname: 'ThoiGianVaoKham',
            height: 100,
            width: 100,
            viewrecords: true,
            ignoreCase: true,
            sortorder: "desc",
			afterShowForm : function (formid) {
				xuongdong(formid);
				lendong(formid);
			},
            loadComplete: function(data) {
				var tmp1 = $("#rowed4").jqGrid('getDataIDs'); 
				$("#rowed4").jqGrid("setSelection",tmp1[0], true);
				$('#sodongthuoc').val('Số dòng = '+tmp1.length);
			
            },
            caption: " Chi tiết toa thuốc đã xuất của BN: "
        });

       $("#rowed4").jqGrid('navGrid', "#prowed4", {add: false, edit: false, del: false, search: false, refresh: false,prmView: false, closeAfterEdit: true, clearAfterAdd: true, navkeys: [true, 38, 40], closeOnEscape: true});


		$("#rowed4").jqGrid('bindKeys', {});
    }
 function create_grid3()
    {
		mydata=[];
        $("#rowed5").jqGrid({
            data: mydata,
            datatype: "local",
            colNames: ['Họ tên BN','Ngày xuất','Người xuất','Ngày kê đơn','Ngày thuốc','Ghi chú toa','Đã thanh toán'],
            colModel: [
				{name: 'HoTen', index: 'HoTen', search: false, width: "15%", editable: false, align: 'left', hidden: false},
				{name: 'NgayXuat', index: 'NgayXuat', search: false, width: "10%", editable: false, align: 'center', hidden: false},
				{name: 'NguoiXuat', index: 'NguoiXuat', search: true, width: "10%",  align: 'center', hidden: false,formatter:"select",edittype:"select",editoptions: { value: nguoithuchien}, edittype: "text"},
				{name: 'NgayKeDon', index: 'NgayKeDon', search: false, width: "10%", editable: false, align: 'center', hidden: false},
				{name: 'NgayThuoc', index: 'NgayThuoc', search: false, width: "10%", editable: false, align: 'center', hidden: false},
				{name: 'GhiChuToa', index: 'GhiChuToa', search: false, width: "10%", editable: false, align: 'left', hidden: false},
				{name:'DaThanhToan',index:'DaThanhToan', width:"10%",stype: 'select',searchoptions: { sopt: ['eq', 'ne'],value:':;1:Có;0:Không'}, editable:false,align:'center',hidden:false,edittype:"checkbox",formatter:"checkbox",formoptions:{ rowpos:13, colpos:1},editoptions: {value:"1:0"}},	
				
            ],
          loadonce: false,
            scroll: false,
            modal: true,
			rownumbers: true,
            shrinkToFit: true,
			grid_save_option: "",
            cmTemplate: {sortable: false},
            rowNum: 10000000,
			pginput:false,
			pgbuttons:false,
            rowList: [],
            pager: '#prowed5',
            sortname: 'ThoiGianVaoKham',
            height: 100,
            width: 100,
            viewrecords: true,
            ignoreCase: true,
            sortorder: "desc",
			afterShowForm : function (formid) {
				xuongdong(formid);
				lendong(formid);
			},
			ondblClickRow: function(rowId) {
		
            },
           onSelectRow: function(id) {
				//alert(id);
         var rowData = jQuery('#rowed3').getRowData(id);
		 
			$("#rowed6").jqGrid('setGridParam',{url:'resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_chitietthuocdaxuat_cuabenhnhan_bschopheptralai&idxuatkho='+id,datatype:'json'}).trigger('reloadGrid');
			
			
            },
            loadComplete: function(data) {
				var tmp1 = $("#rowed5").jqGrid('getDataIDs'); 
				$("#rowed5").jqGrid("setSelection",tmp1[0], true);
			
            },
            caption: " Danh sách toa thuốc"
        });

       $("#rowed5").jqGrid('navGrid', "#prowed5", {add: false, edit: false, del: false, search: false, refresh: false,prmView: false, closeAfterEdit: true, clearAfterAdd: true, navkeys: [true, 38, 40], closeOnEscape: true});


		$("#rowed5").jqGrid('bindKeys', {});
    }
 function create_grid4()
    {
		mydata=[];
        $("#rowed6").jqGrid({
            data: mydata,
            datatype: "local",
            colNames: ['Thuốc/Vật tư','Số lô','Giá bán','Số thuốc thực xuất','Trả lại','Ghi chú'],
            colModel: [
                {name: 'Thuoc_VatTu', index: 'Thuoc_VatTu', search: false, width: "15%", editable: false, align: 'left', hidden: false},
				{name: 'SoLo', index: 'SoLo', search: false, width: "10%", editable: false, align: 'left', hidden: false},
			//	{name: 'GiaBan', index: 'GiaBan', search: false, width: "10%", editable: false, align: 'left', hidden: false},
				{name: 'GiaBan', index: 'GiaBan', search: false, width: "10%", editable: false, align: 'right', hidden: false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: "", defaultValue: '0'}},
				{name: 'SoThuocThucXuat', index: 'SoThuocThucXuat', search: false, width: "10%", editable: false, align: 'center', hidden: false},
				{name: 'TraLai', index: 'TraLai', search: false, width: "10%", editable: false, align: 'center', hidden: false},
				{name: 'GhiChu', index: 'GhiChu', search: false, width: "10%", editable: false, align: 'left', hidden: false},
				
            ],
          loadonce: false,
            scroll: false,
            modal: true,
			rownumbers: true,
            shrinkToFit: true,
			grid_save_option: "",
            cmTemplate: {sortable: false},
            rowNum: 10000000,
			pginput:false,
			pgbuttons:false,
            rowList: [],
            pager: '#prowed6',
            sortname: 'ThoiGianVaoKham',
            height: 100,
            width: 100,
            viewrecords: true,
            ignoreCase: true,
            sortorder: "desc",
			afterShowForm : function (formid) {
				xuongdong(formid);
				lendong(formid);
			},
            loadComplete: function(data) {
			
            },
            caption: " Chi tiết toa thuốc"
        });

       $("#rowed6").jqGrid('navGrid', "#prowed6", {add: false, edit: false, del: false, search: false, refresh: false,prmView: false, closeAfterEdit: true, clearAfterAdd: true, navkeys: [true, 38, 40], closeOnEscape: true});


		$("#rowed6").jqGrid('bindKeys', {});
    }	
function create_grid5()
    {
		mydata=[];
        $("#rowed7").jqGrid({
            data: mydata,
            datatype: "local",
            colNames: ['Mã phiếu','Ngày lập phiếu','Người lập phiếu','Ngày duyệt','Người duyệt','Mã BN','Họ tên BN','Ghi chú'],
            colModel: [
                {name: 'MaPhieu', index: 'MaPhieu', search: false, width: "10%", editable: false, align: 'left', hidden: false},
				{name: 'NgayLapPhieu', index: 'NgayLapPhieu', search: false, width: "10%", editable: false, align: 'center', hidden: false},
				{name: 'NguoiLapPhieu', index: 'NguoiLapPhieu', search: true, width: "10%",  align: 'center', hidden: false,formatter:"select",edittype:"select",editoptions: { value: nguoithuchien}, edittype: "text"},
			//	{name: 'NguoiLapPhieu', index: 'NguoiLapPhieu', search: false, width: "10%", editable: false, align: 'center', hidden: false},
				{name: 'NgayDuyet', index: 'NgayDuyet', search: false, width: "10%", editable: false, align: 'center', hidden: false},
					{name: 'NguoiDuyet', index: 'NguoiDuyet', search: true, width: "10%",  align: 'center', hidden: false,formatter:"select",edittype:"select",editoptions: { value: nguoithuchien}, edittype: "text"},
				//{name: 'NguoiDuyet', index: 'NguoiDuyet', search: false, width: "10%", editable: false, align: 'center', hidden: false},
				{name: 'MaBenhNhan', index: 'MaBenhNhan', search: false, width: "10%", editable: false, align: 'left', hidden: false},
				{name: 'HoTenBN', index: 'HoTenBN', search: false, width: "20%", editable: false, align: 'left', hidden: false},
				{name: 'GhiChu', index: 'GhiChu', search: false, width: "20%", editable: false, align: 'left', hidden: false},
				
            ],
          loadonce: false,
            scroll: false,
            modal: true,
			rownumbers: true,
            shrinkToFit: true,
			grid_save_option: "",
            cmTemplate: {sortable: false},
            rowNum: 10000000,
			pginput:false,
			pgbuttons:false,
            rowList: [],
            pager: '#prowed7',
            sortname: 'ThoiGianVaoKham',
            height: 100,
            width: 100,
            viewrecords: true,
            ignoreCase: true,
            sortorder: "desc",
			afterShowForm : function (formid) {
				xuongdong(formid);
				lendong(formid);
			},
			ondblClickRow: function(rowId) {
		
            },
           onSelectRow: function(id) {
				//alert(id);
         var rowData = jQuery('#rowed8').getRowData(id);
		 
			$("#rowed8").jqGrid('setGridParam',{url:'resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_chitietthuoc_tralai&idnhapkho='+id,datatype:'json'}).trigger('reloadGrid');
			
			
            },
            loadComplete: function(data) {
				var tmp1 = $("#rowed7").jqGrid('getDataIDs'); 
				$("#rowed7").jqGrid("setSelection",tmp1[0], true);
				$('#sodongbn3').val(tmp1.length);
            },
            caption: " Danh sách toa thuốc đã trở lại"
        });

       $("#rowed7").jqGrid('navGrid', "#prowed7", {add: false, edit: false, del: false, search: false, refresh: false,prmView: false, closeAfterEdit: true, clearAfterAdd: true, navkeys: [true, 38, 40], closeOnEscape: true});


		$("#rowed7").jqGrid('bindKeys', {});
    }	
function create_grid6()
    {
		mydata=[];
        $("#rowed8").jqGrid({
            data: mydata,
            datatype: "local",
            colNames: ['Thuốc/Vật tư','ĐVT','SL thực xuất','Đơn giá bán','Thành tiền bán','SL trả lại','Đơn giá vốn','Thành tiền vốn','Đơn giá trả lại','Thành tiền trả lại'],
            colModel: [
                {name: 'Thuoc_VatTu', index: 'Thuoc_VatTu', search: false, width: "15%", editable: false, align: 'left', hidden: false},
				{name: 'DonViTinh', index: 'DonViTinh', search: false, width: "10%", editable: false, align: 'left', hidden: false},
				{name: 'SLThucXuat', index: 'SLThucXuat', search: false, width: "10%", editable: false, align: 'left', hidden: false},
				//{name: 'DonGiaBan', index: 'DonGiaBan', search: false, width: "10%", editable: false, align: 'left', hidden: false},
				{name: 'DonGiaBan', index: 'DonGiaBan', search: false, width: "10%", editable: false, align: 'right', hidden: false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: "", defaultValue: '0'}},
				//{name: 'ThanhTienBan', index: 'ThanhTienBan', search: false, width: "10%", editable: false, align: 'left', hidden: false},
				{name: 'ThanhTienBan', index: 'ThanhTienBan', search: false, width: "10%", editable: false, align: 'right', hidden: false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: "", defaultValue: '0'}},
				{name: 'SLTraLai', index: 'SLTraLai', search: false, width: "10%", editable: false, align: 'left', hidden: false},
				//{name: 'DonGiaVon', index: 'DonGiaVon', search: false, width: "10%", editable: false, align: 'left', hidden: false},
				{name: 'DonGiaVon', index: 'DonGiaVon', search: false, width: "10%", editable: false, align: 'right', hidden: false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: "", defaultValue: '0'}},
				//{name: 'ThanhTienVon', index: 'ThanhTienVon', search: false, width: "10%", editable: false, align: 'left', hidden: false},
				{name: 'ThanhTienVon', index: 'ThanhTienVon', search: false, width: "10%", editable: false, align: 'right', hidden: false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: "", defaultValue: '0'}},
				//{name: 'DonGiaTraLai', index: 'DonGiaTraLai', search: false, width: "10%", editable: false, align: 'left', hidden: false},
				{name: 'DonGiaTraLai', index: 'DonGiaTraLai', search: false, width: "10%", editable: false, align: 'right', hidden: false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: "", defaultValue: '0'}},
				//{name: 'ThanhTienTraLai', index: 'ThanhTienTraLai', search: false, width: "10%", editable: false, align: 'left', hidden: false},
				{name: 'ThanhTienTraLai', index: 'ThanhTienTraLai', search: false, width: "10%", editable: false, align: 'right', hidden: false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: "", defaultValue: '0'}},
				
            ],
          loadonce: false,
            scroll: false,
            modal: true,
			rownumbers: true,
            shrinkToFit: true,
			grid_save_option: "",
            cmTemplate: {sortable: false},
            rowNum: 10000000,
			pginput:false,
			pgbuttons:false,
            rowList: [],
            pager: '#prowed8',
            sortname: 'ThoiGianVaoKham',
            height: 100,
            width: 100,
            viewrecords: true,
            ignoreCase: true,
            sortorder: "desc",
			afterShowForm : function (formid) {
				xuongdong(formid);
				lendong(formid);
			},
            loadComplete: function(data) {
			var tmp1 = $("#rowed8").jqGrid('getDataIDs'); 
			$("#rowed8").jqGrid("setSelection",tmp1[0], true);
			$('#sodongthuoc3').val(tmp1.length);
			var tongttvon=0;
			var tongttban=0;
			for(var i=0;i<tmp1.length;i++){
				var tt=0;
				var rowData = jQuery('#rowed8').getRowData(tmp1[i]);
				tt=parseInt(rowData['DonGiaVon'])* parseInt(rowData['SLTraLai']);
				tongttvon=tongttvon+tt;
				$("#rowed8").jqGrid('setCell',tmp1[i],'ThanhTienVon', tt);
				tongttban=tongttban+parseInt(rowData['ThanhTienBan'])
				
			}
			$('#thanhtienvon').val(formatMoney(tongttvon));
			$('#thanhtienban').val(formatMoney(tongttban));
            },
            caption: " Chi tiết toa thuốc đã trả lại"
        });

       $("#rowed8").jqGrid('navGrid', "#prowed8", {add: false, edit: false, del: false, search: false, refresh: false,prmView: false, closeAfterEdit: true, clearAfterAdd: true, navkeys: [true, 38, 40], closeOnEscape: true});


		$("#rowed8").jqGrid('bindKeys', {});
    }	
	
function resize_control(){
	$("#main_top,#main_bottom").css("width",$("#panel_main").width()-10+"px");
	$("#main_bottom").css("height",$(window).height()-$("#main_top").height()+"px");
	$("#tabs-1,#tabs-2,#tabs-3").css("height",$("#main_bottom").height()-80+"px");
	$("#rowed3").setGridWidth($("#tabs-1").width()-11);
	$("#rowed4").setGridWidth($("#tabs-1").width()-11);
	$("#rowed3,#rowed4").setGridHeight($("#tabs-1").height()/2-80);
	
	$("#rowed5").setGridWidth($("#tabs-2").width()-11);
	$("#rowed6").setGridWidth($("#tabs-2").width()-11);
	$("#rowed5,#rowed6").setGridHeight($("#tabs-2").height()/2-45);
	
	$("#rowed7").setGridWidth($("#tabs-2").width()-11);
	$("#rowed8").setGridWidth($("#tabs-2").width()-11);
	$("#rowed7,#rowed8").setGridHeight($("#tabs-2").height()/2-70);

}

function _fuc_tabs(input){
	if(input==1)
		$("#_ntab").val(1);
	else if(input==2)
		$("#_ntab").val(2);	
		else
			$("#_ntab").val(3);	
}
function load_nguoithuchien(){
	
	window.nguoithuchien = $.ajax({url: "resource.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=2&tables=DM_NhanVien&id=ID_NhanVien&name=NickName", async: false, success: function(data, result) {if (!result) alert('Không load được danh mục nhân viên');}}).responseText;	
	//alert(window.trangthai);
}	
function phieutrathuoc(val){
		links='resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=form_hoan_tra_thuoc&idxuatkho='+val+'&type=test&id_form=123&idluotkham=123';
		//elem=1 + Math.floor(Math.random() * 1000000000); 
		elem=112111;
		width=98;
		height=95;   
		dialog_add_dm("Phiếu hoàn trả thuốc",width,height,elem,links,callback); 
	}
function formatMoney(num) {
    var p = num.toFixed(2).split(".");
    return p[0].split("").reverse().reduce(function(acc, num, i, orig) {
        return  num + (i && !(i % 3) ? "," : "") + acc;
    }, "");
}
function callback(){
	if($('#mabenhnhan').val()>0){
	$("#rowed3").jqGrid('setGridParam',{url:'resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_dstoathuoc_toadaxuat_mabenhnhan&tu_ngay='+ $( '#from_day' ).val()+'&den_ngay='+$( '#to_day' ).val()+'&mabenhnhan='+$( '#mabenhnhan' ).val(),datatype:'json'}).trigger('reloadGrid');
	}else{
		$("#rowed3").jqGrid('setGridParam',{url:'resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_dstoathuoc_toadaxuatn_mabenhnhan_none&tu_ngay='+ $( '#from_day' ).val()+'&den_ngay='+$( '#to_day' ).val(),datatype:'json'}).trigger('reloadGrid');
		}
	}
</script>