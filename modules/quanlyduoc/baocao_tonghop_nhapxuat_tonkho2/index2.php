<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<style>
.ui-menu {
	width: 180px;
	display:none;
	position:absolute;
	box-shadow:0px 0px 3px #333;
	z-index:100000;
}
#menu_toggle{
	font-size:12px;
	padding:5px 0px;
	background:url("js/grid/themes/south-street/images/ui-bg_highlight-hard_15_459e00_1x100.png") repeat-x scroll #459E00;
	border:#CCC 1px dashed;
}
#rowed6_frozen tr.rowed6ghead_0 td,
#rowed6_frozen tr.rowed6ghead_1 td{
	font-weight:bold !important;
}
 .dialog_dm_thuoc,.dialog_dm_duongdung{
 					position:absolute;
					z-index:1000000;
					display:none;
					box-shadow:0px 0px 6px #333
					 }
	 th.ui-th-column div{
        word-wrap: break-word; /* IE 5.5+ and CSS3 */
        white-space: pre-wrap; /* CSS3 */
        white-space: -moz-pre-wrap; /* Mozilla, since 1999 */
        white-space: -pre-wrap; /* Opera 4-6 */
        white-space: -o-pre-wrap; /* Opera 7 */
        overflow: hidden;
        height: auto !important;
        vertical-align: middle;
}
.frozen-div table.ui-jqgrid-htable{
	height:54px;

}
.frozen-div table.ui-jqgrid-htable tr.ui-jqgrid-labels{
	height:31px;
}
div.frozen-div{
	height:54px!important;
}
#rowed6_frozen{
	margin-top:-1px;
}
</style>
</head>
<body>
<div id="dialog-confirm" title="Thông báo">
  <p><span class="ui-icon ui-icon-alert" style="float:left; margin:0 7px 20px 0;"></span>Vui lòng chọn kho trước khi thực hiện chức năng này</p>
</div>
<ul id="menu" >
    <li><a id="taophieuxuatdieuchinh" href="#"><span class="ui-icon ui-icon-document"></span>Tạo phiếu xuất điều chỉnh</a></li>
    <li><a id="uutienxuat" href="#"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>Ưu tiên xuất</a></li>
    <li><a id="xemphieunhap" href="#"><span class="ui-icon ui-icon-document-b"></span>Xem phiếu nhập</a></li>
</ul>
	<div  class="dialog_dm_thuoc" style="display:none">
    <table id="DM_thuoc">
    </table>

 </div>

 <div id="panel_main1">
		<div id="grid_phong_ban" style="display:inline-block">
			<label for="from_day" style=" margin-left:15px;">Từ ngày:</label><input type="text" style="width:70px;" name="from_day" id='from_day'  value="<?php echo date($_SESSION["config_system"]["ngaythang"]) ?>">
			<label for="to_day"  style=" margin-left:5px;">Đến ngày:</label><input type="text" style="width:70px" name="to_day" id='to_day' value="<?php echo date($_SESSION["config_system"]["ngaythang"]) ?>">
           <label for="makho" style="margin-left:20px;">Tên kho:</label>
            <span class="custom-combobox">
           	  <input id='makho' class='makho'style="width:160px; height:20px" >
           </span>
              <input id='makho1' class='makho1'  style="width:200px;display:none">
           <label for="com_nhacungcap" style="margin-left:35px;">Nhà cung cấp:</label>
           <span class="custom-combobox">
           	  <input id='com_nhacungcap' class='com_nhacungcap'style="width:160px; height:20px" >
           </span>
              <input id='com_nhacungcap1' class='com_nhacungcap1'  style="width:200px;display:none">
               <a href="#" id="in" class=" ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="margin-left:5px;width:45px; margin-left:40px; margin-top:-4px; ">In<span class="ui-icon ui-icon-print"></span></a>
                <a href="#" id="xuatexcel" class=" ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="margin-left:15px;width:80px; margin-top:-4px; ">Xuất excel<span class="ui-icon ui-icon-document"></span></a>
                 <a href="#" id="xem" class=" ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="margin-left:15px; margin-top:-4px; ">Xem<span class="ui-icon ui-icon-refresh"></span></a>
		</div>
	</div>
	<div id="grid_phong_ban" style="width:2500px;">
          <table id="rowed6" ></table>
            <div id="prowed6"></div>

    </div>
</body>
</html>

<script type="text/javascript">
jQuery(document).ready(function() {
	var kiemtra=0;
	$("#xem,#in,#xuatexcel").button();
	create_grid();
	shortcut_key();
	 $( "#dialog-confirm" ).dialog({
      resizable: false,
	  autoOpen:false,
      height:165,
      modal: true,
      buttons: {
        "OK": function() {
          $( this ).dialog( "close" );
		  $("#makho").focus();
        },
      }
    });

	$("#xuatexcel").click(function(e) {
      //  jQuery("#rowed6").excelExport();
	  if(window.n_action==1){
		  window.open("resource.php?module=report&view=quanlyduoc&action=xuat_excel_baocaotonghopxuatnhapton&type=excel&theonhacungcap=false&from_day="+$("#from_day").val()+"&to_day="+$("#to_day").val()+"&tenkho="+$("#makho1").val()+"&ten_kho="+$("#makho").val()+"&n_order= ORDER BY TenBietDuoc");
	  }else{
		  window.open("resource.php?module=report&view=quanlyduoc&action=xuat_excel_baocaotonghopxuatnhapton&type=excel&theonhacungcap=true&from_day="+$("#from_day").val()+"&to_day="+$("#to_day").val()+"&tenkho="+$("#makho1").val()+"&ten_kho="+$("#makho").val()+"&idncc="+window.idncc+"&n_order=");
	  }
    });

	$("#in").click(function(e) {
     $.cookie("in_status", "print_preview");
	  if(window.n_action==1){
		  $.cookie("in_status", "print_preview");
dialog_report("Xem trước khi in",90,90,"u78787878975f","resource.php?module=report&view=<?=$modules?>&action=TongHopNhapXuatTonKhoHangHoa&header=left&type=report&id_form=10&theonhacungcap=false&from_day="+$("#from_day").val()+"&to_day="+$("#to_day").val()+"&tenkho="+$("#makho1").val()+"&ten_kho="+$("#makho").val()+"&n_order= ORDER BY TenBietDuoc",'TongHopNhapXuatTonKhoHangHoa');
	  }else{
		   $.cookie("in_status", "print_preview");
dialog_report("Xem trước khi in",90,90,"u78787878975f","resource.php?module=report&view=<?=$modules?>&action=TongHopNhapXuatTonKhoHangHoa&header=left&type=report&id_form=10&theonhacungcap=true&from_day="+$("#from_day").val()+"&to_day="+$("#to_day").val()+"&tenkho="+$("#makho1").val()+"&ten_kho="+$("#makho").val()+"&idncc="+window.idncc+"&n_order=",'TongHopNhapXuatTonKhoHangHoa');
	  }
    });

	//$("#menu").menu();
	$(document).bind("mouseup", function(e) {
		$("#menu,#menu2,#menu3").hide();
	});
create_combobox('#com_nhacungcap','#com_nhacungcap1',".data_phanloaikham","#data_phanloaikham",create_nhacungcap,500,300,'Nhà cung cấp','data_nhacungcap','');
create_combobox('#makho','#makho1',".data_phanloaikham2","#data_phanloaikham2",create_kho,500,300,'Kho','data_kho','');

$("#from_day").datepicker({
            showWeek: true,
            defaultDate: "+1w",
            changeMonth: true,
            changeYear: true,
            numberOfMonths: 1,
             showButtonPanel: true,
            dateFormat: $.cookie("ngayJqueryUi"),
			maxDate: new Date(<?php echo date("Y")?>, <?php echo date("m")?>-1, <?php echo date("d")?>),
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
            minDate: new Date(<?php echo date("Y")?>, <?php echo date("m")?>-1, <?php echo date("d")?>),
            onClose: function(selectedDate) {
                $("#from_day").datepicker("option", "maxDate", selectedDate);
            },
            onSelect: function(dat, inst) {
            }
        });
         $.dateEntry.setDefaults({spinnerImage: ''});
	 $("#from_day, #to_day").dateEntry({dateFormat: $.cookie("ngayDateEntry")});
	resize_control();


	$("#xem").click(function(){
		$("#com_nhacungcap").val('');
		if($("#makho").val()!=''){
			$('#rowed6').jqGrid('groupingGroupBy',['TenNhaCungCap'], {
			//grouping:true,
             groupingView : {
             groupField : ['TenNhaCungCap','TenThuoc'],
             groupDataSorted : true ,
             groupCollapse : false,
             groupColumnShow :false,
			//groupOrder: ['DESC'],
			groupText : ['<b>{0}</b>'],
			 },
        	});
			$("#rowed6").jqGrid('setGridParam',{datatype: 'json',url:"resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_baocao_tonghop_theonhacungcap&from_day="+$("#from_day").val()+"&to_day="+$("#to_day").val()+"&tenkho="+$("#makho1").val()+"&idncc="+window.idncc+"&n_order= ORDER BY TenNCC,TenBietDuoc"}).trigger('reloadGrid');
		}else{
			 $( "#dialog-confirm" ).dialog('open');
		}

	});

	$("#tenthuoc").change(function(event) {
		$("#nhacungcap").prop("checked",false);
		$("#grouptatca").prop("checked",false);
      if($("#tenthuoc").is(':checked')==true){
		  if(window.n_action==1){
			  window.n_group=1;
			  $('#rowed6').jqGrid('groupingGroupBy', 'TenThuoc', {
			//grouping:true,
             groupingView : {
             groupField : ['TenThuoc'],
             groupDataSorted : true ,
             groupCollapse : false,
             groupColumnShow :false,

			//groupOrder: ['DESC'],
			groupText : ['<b>{0}</b> Total Amount: {GiaVon}'],
			 },
        	});
		  $("#rowed6").jqGrid('setGridParam',{datatype: 'json',url:"resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_baocao_tonghop&from_day="+$("#from_day").val()+"&to_day="+$("#to_day").val()+"&tenkho="+$("#makho1").val()+"&n_order= ORDER BY TenBietDuoc"}).trigger('reloadGrid');
		  }
		  if(window.n_action==2){
			  window.n_group=1;
			  $('#rowed6').jqGrid('groupingGroupBy', 'TenThuoc', {
			//grouping:true,
             groupingView : {
             groupField : ['TenThuoc'],
             groupDataSorted : true ,
             groupCollapse : false,
             groupColumnShow :false,
			//groupOrder: ['DESC'],
			groupText : ['<b>{0}</b>'],
			 },
        	});
			$("#rowed6").jqGrid('setGridParam',{datatype: 'json',url:"resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_baocao_tonghop_theonhacungcap&from_day="+$("#from_day").val()+"&to_day="+$("#to_day").val()+"&tenkho="+$("#makho1").val()+"&idncc="+window.idncc+"&n_order= ORDER BY TenBietDuoc"}).trigger('reloadGrid');
		  }
      }else{
        $("#rowed6").jqGrid('groupingRemove');
		 if(window.n_action==1){
		 $("#rowed6").jqGrid('setGridParam',{datatype: 'json',url:"resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_baocao_tonghop&from_day="+$("#from_day").val()+"&to_day="+$("#to_day").val()+"&tenkho="+$("#makho1").val()+"&n_order= ORDER BY TenBietDuoc"}).trigger('reloadGrid');
		 }
		 if(window.n_action==2){
			$("#rowed6").jqGrid('setGridParam',{datatype: 'json',url:"resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_baocao_tonghop_theonhacungcap&from_day="+$("#from_day").val()+"&to_day="+$("#to_day").val()+"&tenkho="+$("#makho1").val()+"&idncc="+window.idncc+"&n_order= ORDER BY TenBietDuoc"}).trigger('reloadGrid');
		 }
      }
    });

	$("#nhacungcap").change(function(event) {
		$("#tenthuoc").prop("checked",false);
		$("#grouptatca").prop("checked",false);
      if($("#nhacungcap").is(':checked')==true){
		  if(window.n_action==1){
			  window.n_group=1;
			  $('#rowed6').jqGrid('groupingGroupBy', 'TenNhaCungCap', {
			//grouping:true,
             groupingView : {
             groupField : ['TenNhaCungCap'],
             groupDataSorted : true ,
             groupCollapse : false,
             groupColumnShow :false,
			//groupOrder: ['DESC'],
			groupText : ['<b>{0}</b>'],
			 },
        	});
		  $("#rowed6").jqGrid('setGridParam',{datatype: 'json',url:"resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_baocao_tonghop&from_day="+$("#from_day").val()+"&to_day="+$("#to_day").val()+"&tenkho="+$("#makho1").val()+"&n_order= ORDER BY TenNCC"}).trigger('reloadGrid');
		  }
		   if(window.n_action==2){
			  window.n_group=1;
			  $('#rowed6').jqGrid('groupingGroupBy', 'TenNhaCungCap', {
			//grouping:true,
             groupingView : {
             groupField : ['TenNhaCungCap'],
             groupDataSorted : true ,
             groupCollapse : false,
             groupColumnShow :false,
			//groupOrder: ['DESC'],
			groupText : ['<b>{0}</b>'],
			 },
        	});
			$("#rowed6").jqGrid('setGridParam',{datatype: 'json',url:"resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_baocao_tonghop_theonhacungcap&from_day="+$("#from_day").val()+"&to_day="+$("#to_day").val()+"&tenkho="+$("#makho1").val()+"&idncc="+window.idncc+"&n_order= ORDER BY TenNCC"}).trigger('reloadGrid');
		  }
      }else{
        $("#rowed6").jqGrid('groupingRemove');
		if(window.n_action==1){
		 $("#rowed6").jqGrid('setGridParam',{datatype: 'json',url:"resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_baocao_tonghop&from_day="+$("#from_day").val()+"&to_day="+$("#to_day").val()+"&tenkho="+$("#makho1").val()+"&n_order= ORDER BY TenNCC"}).trigger('reloadGrid');
		}
		if(window.n_action==2){
			$("#rowed6").jqGrid('setGridParam',{datatype: 'json',url:"resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_baocao_tonghop_theonhacungcap&from_day="+$("#from_day").val()+"&to_day="+$("#to_day").val()+"&tenkho="+$("#makho1").val()+"&idncc="+window.idncc+"&n_order= ORDER BY TenNCC"}).trigger('reloadGrid');
		}
      }
    });

	$("#grouptatca").change(function(event) {
		$("#tenthuoc").prop("checked",false);
		$("#nhacungcap").prop("checked",false);
      if($("#grouptatca").is(':checked')==true){
		  if(window.n_action==1){
			  window.n_group=1;
			$('#rowed6').jqGrid('groupingGroupBy', ['TenNhaCungCap','TenThuoc'], {
			//grouping:true,
             groupingView : {
             groupField : ['TenNhaCungCap','TenThuoc'],
             groupDataSorted : true ,
             groupCollapse : false,
             groupColumnShow :false,
			//groupOrder: ['DESC'],
			groupText : ['<b>{0}</b>'],
			 },
        	});
		  $("#rowed6").jqGrid('setGridParam',{datatype: 'json',url:"resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_baocao_tonghop&from_day="+$("#from_day").val()+"&to_day="+$("#to_day").val()+"&tenkho="+$("#makho1").val()+"&n_order= ORDER BY TenNCC,TenBietDuoc"}).trigger('reloadGrid');
		  }
		   if(window.n_action==2){
			  window.n_group=1;
			$('#rowed6').jqGrid('groupingGroupBy',['TenNhaCungCap','TenThuoc'], {
			//grouping:true,
             groupingView : {
             groupField : ['TenNhaCungCap','TenThuoc'],
             groupDataSorted : true ,
             groupCollapse : false,
             groupColumnShow :false,
			//groupOrder: ['DESC'],
			groupText : ['<b>{0}</b>'],
			 },
        	});
			$("#rowed6").jqGrid('setGridParam',{datatype: 'json',url:"resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_baocao_tonghop_theonhacungcap&from_day="+$("#from_day").val()+"&to_day="+$("#to_day").val()+"&tenkho="+$("#makho1").val()+"&idncc="+window.idncc+"&n_order= ORDER BY TenNCC,TenBietDuoc"}).trigger('reloadGrid');
		  }
      }else{
        $("#rowed6").jqGrid('groupingRemove');
		if(window.n_action==1){
		 $("#rowed6").jqGrid('setGridParam',{datatype: 'json',url:"resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_baocao_tonghop&from_day="+$("#from_day").val()+"&to_day="+$("#to_day").val()+"&tenkho="+$("#makho1").val()+"&n_order= ORDER BY TenNCC,TenBietDuoc"}).trigger('reloadGrid');
		}
		if(window.n_action==2){
			$("#rowed6").jqGrid('setGridParam',{datatype: 'json',url:"resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_baocao_tonghop_theonhacungcap&from_day="+$("#from_day").val()+"&to_day="+$("#to_day").val()+"&tenkho="+$("#makho1").val()+"&idncc="+window.idncc+"&n_order= ORDER BY TenNCC,TenBietDuoc"}).trigger('reloadGrid');
		}
      }
    });

	$("#xemtc").click(function(){
		//$("#rowed6").jqGrid('setGridParam',{datatype: 'json',url:"resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_xaphuong&from_day="+$("#from_day").val()+"&to_day="+$("#to_day").val()+'&kiemtra=0'}).trigger('reloadGrid');

	})
			phanquyen();

})
jQuery(window).resize(function() {
	 resize_control()
});
var rowed6_curentsel;
function create_grid(){
	 myTemplate = {width:80, align:'right', formatter:'integer', sorttype:'integer', summaryType:'sum'};
	 $("#rowed6").jqGrid({
		//url:"resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_baocao_tonghop&from_day="+$("#from_day").val()+"&to_day="+$("#to_day").val()+"&tenkho="+$("#makho1").val()+"&n_order= ORDER BY TenNCC,TenBietDuoc",
		url:'',
		datatype: "json",
		colNames:['ID thuốc','Tên thuốc',"ĐVT","Số lô HT","Số lô NSX", "Giá vốn",'Giá bán', "SL tồn đầu","TT tồn đầu","SL nhập trong kỳ",'TT nhập trong kỳ','SL xuất trong kỳ','TT xuất trong kỳ','SL tồn','TT tồn','Hạn sử dụng','ID nhà cung cấp','Nhà cung cấp','Ưu tiên xuất','Chỉnh sửa'],
		colModel:[

			{name:'MaThuoc',index:'MaThuoc', width:"60",align:'left',hidden:false, editable: false},
			{name:'TenThuoc',index:'TenThuoc', width:"200",align:'left', editable: false, frozen : true},
			{name:'TenDonViTinh',index:'TenDonViTinh',width:"50",align:'center',hidden:false, editable: false},
			{name:'SoLoHeThong',index:'SoLoHeThong', width:"70",align:'left', editable: false},
			{name:'SoLoNSX',index:'SoLoNSX', width:"70",align:'left', editable: false},
			{name:'GiaVon',index:'GiaVon', width:"70",formatter:'number', formatoptions:{decimalPlaces: 0},align:'right',hidden:false, editable: false,  summaryType:'sum'},
			{name:'GiaBan',index:'GiaBan', width:"70",formatter:'number', formatoptions:{decimalPlaces: 0},align:'right',hidden:false, editable: false,  summaryType:'sum'},
			{name:'SoLuongTonDau',index:'SoLuongTonDau', width:"60",align:'right', editable: false},
			{name:'ThanhTienTonDau',index:'ThanhTienTonDau', width:"70",formatter:'number', formatoptions:{decimalPlaces: 0},align:'right',hidden:false, editable: false,  summaryType:'sum'},
			{name:'SoLuongNhapTrongKy',index:'SoLuongNhapTrongKy', width:"50",align:'right', editable: false},
			{name:'ThanhTienNhapTrongKy',index:'ThanhTienNhapTrongKy', width:"70",formatter:'number', formatoptions:{decimalPlaces: 0},align:'right',hidden:false, editable: false,  summaryType:'sum'},
			{name:'SoLuongXuatTrongKy',index:'SoLuongXuatTrongKy', width:"50",align:'right', editable: false},
			{name:'ThanhTienXuatTrongKy',index:'ThanhTienXuatTrongKy', width:"70",formatter:'number', formatoptions:{decimalPlaces: 0},align:'right',hidden:false, editable: false,  summaryType:'sum'},
			{name:'SoLuongTon',index:'SoLuongTon', width:"50",align:'right', editable: false},
			{name:'ThanhTienTon',index:'ThanhTienTon', width:"70",formatter:'number', formatoptions:{decimalPlaces: 0},align:'right',hidden:false, editable: false,  summaryType:'sum'},
			{name:'HanSuDung',index:'HanSuDung',width:"80", align:'center', sorttype:'date',formatter:'date', formatoptions: {newformat:'d/m/y'}, editable:true, datefmt: 'd/m/y',},
			{name:'ID_NhaCungCap',index:'ID_NhaCungCap', width:"50",align:'left',hidden:true, editable: true},
			{name:'TenNhaCungCap',index:'TenNhaCungCap', width:"1200",align:'left', editable: false},
			{name:'UuTienXuat',index:'UuTienXuat', width:"50",align:'center', editable: false},
			{name:'ChinhSua',index:'ChinhSua',search:false, width:"50",align:'center', editable: false,hidden:true, formatter: function(cellvalue, options, rowObject) {
        return '<span class="ui-icon ui-icon-pencil" title="click to open" onclick="clickme('+options.rowId+');"></span>'; }},
		],

		rownumbers: false,
		treeGrid: false,
		gridview: true,
		ignoreCase:true,
		footerrow: true,
        userDataOnFooter: true,
		loadonce: true,
		local:true,
		forceFit:false,
		scroll: false,
		modal:true,
        shrinkToFit: false,
		rowNum: 1000000,
		rowList:[],
		pager: '#prowed6',
		multiSort: true,
		height:100,
		width:'auto',
		viewrecords: false,
		ignoreCase:true,
		sortorder: "asc",
	    grouping:false,
          groupingView : {
             groupField : ['TenNhaCungCap','TenThuoc'],
             groupDataSorted : true ,
             groupCollapse : false,
             groupColumnShow :false,
			groupSummary : [true],
			groupText : ['<b>{0}</b>']
       },

		pgbuttons: false, // disable page control like next, back button
        pgtext: null, // disable pager text like 'Page 0 of 10'
		serializeRowData: function (postdata) {


                return postdata;
		},
		onSelectRow: function(id){

		},
		onRightClickRow: function(rowid, iRow, iCol, e) {
			if ($("#menu").width() + e.pageX > $(document).width()) {
				$("#menu").css('left', e.pageX - $("#menu").width() + "px");
			} else {
				$("#menu").css('left', e.pageX + "px");
			}
			if ($("#menu").height() + e.pageY + 30 > $(document).height()) {
				$("#menu").css('top', e.pageY  - $("#menu").height() + "px");
			} else {
				$("#menu").css('top', e.pageY + "px");
			}
			$("#menu").show(300);
			$(document).bind("contextmenu", function(e) {
				return false;
			});
        },
		ondblClickRow: function (rowId, rowIndex, columnIndex) {

 		},
		loadComplete: function(data) {
			grid_filter_enter("#rowed6");
		var GiaVon = $("#rowed6").jqGrid('getCol', 'GiaVon', false, 'sum');
        $("#rowed6").jqGrid('footerData', 'set', { 'GiaVon': GiaVon });
		var GiaBan = $("#rowed6").jqGrid('getCol', 'GiaBan', false, 'sum');
        $("#rowed6").jqGrid('footerData', 'set', { 'GiaBan': GiaBan });
		var ThanhTienTonDau = $("#rowed6").jqGrid('getCol', 'ThanhTienTonDau', false, 'sum');
        $("#rowed6").jqGrid('footerData', 'set', { 'ThanhTienTonDau': ThanhTienTonDau });
		var ThanhTienNhapTrongKy = $("#rowed6").jqGrid('getCol', 'ThanhTienNhapTrongKy', false, 'sum');
        $("#rowed6").jqGrid('footerData', 'set', { 'ThanhTienNhapTrongKy': ThanhTienNhapTrongKy });
		var ThanhTienXuatTrongKy = $("#rowed6").jqGrid('getCol', 'ThanhTienXuatTrongKy', false, 'sum');
        $("#rowed6").jqGrid('footerData', 'set', { 'ThanhTienXuatTrongKy': ThanhTienXuatTrongKy });
		var ThanhTienTon = $("#rowed6").jqGrid('getCol', 'ThanhTienTon', false, 'sum');
        $("#rowed6").jqGrid('footerData', 'set', { 'ThanhTienTon': ThanhTienTon });
		/*setTimeout(function(){
			var tmp1 = $("#rowed6").jqGrid('getDataIDs');
			for(var i=0;i < tmp1.length;i++){
				//var rowData = $("#rowed6").getRowData(tmp1[i]);
				chinhsua = "<input class='custom_button xanh' style='height:22px;width:50px;' type='button' value='button' onclick=\"thuchien('"+tmp1[i]+"');\" />";

				$("#rowed6").jqGrid('setRowData',tmp1[i],{ChinhSua:chinhsua});
			}
		},1000);*/


		},
		caption: "Danh sách thuốc",
		//editurl:'resource.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=add',

	});
$("#rowed6").jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn",  stringResult: true});
	$("#rowed6").jqGrid('bindKeys', {"onEnter":function( rowid ) {
					$("#prowed6 .ui-icon-pencil").click();
			} } );
	$("#rowed6").jqGrid('navGrid',"#prowed6",{add: false, edit: false, del: true, search: false, refresh: true,closeAfterEdit: true,clearAfterAdd :true,navkeys : [ true, 38, 40 ]});
	$("#rowed6").jqGrid('inlineNav', '#prowed6', {add: true, addtext: '', edittext: '', edit: false,save:true,
            addParams: {
				keys:true,
                position: "last",
                addRowParams: {
					keys:true,
                    aftersavefunc: function(rowId, response,lastsel) {
						$('.ui-datepicker').hide();
						$('#'+rowId+'_ID_Thuoc1,.dialog_dm_thuoc .ui-jqgrid-hbox').unbind("keyup");
						$('#'+rowId+'_ID_Thuoc1,.dialog_dm_thuoc .ui-jqgrid-hbox').unbind("click");
						$('body').unbind("click");
					    $("#rowed6").jqGrid('bindKeys', {"onEnter":function( rowid ) {
							$("#prowed6 .ui-icon-pencil").click();
						} } );
						 $('#rowed6').focus();

						 $('#'+rowId).removeClass("ui-state-highlight").attr({"aria-selected":"false", "tabindex" : "-1"})

						 $('#'+rowId).removeClass("ui-state-highlight");
                    },
					oneditfunc: function(rowId) {
						number_textbox('#'+rowId+'_Giaban')
						//=========
						 $('#'+rowId+'_Giaban,#'+rowId+'_Ngayapdung').css({
						 	'text-align':'right'

  							});

						 $('#'+rowId+'_Giaban').val(0);

						 $('#'+rowId+'_Active').prop('checked', true);
						$('#rowed6').jqGrid("setCell", rowId, "User_CapNhat","<?php echo $_SESSION["user"]["nickname"]?>");
						$('#'+rowId+'_Ngayapdung').datetimeEntry({datetimeFormat: 'D/O/y H:M',spinnerImage: ''});
						var currentdate = new Date();
						$('#'+rowId+'_Ngayapdung').val(<?= date("d")?>+'/'+<?= date("m")?>+'/'+<?= date("y")?>+' '+currentdate.getHours()+':'+currentdate.getMinutes());
					//==========
						$("#rowed6").jqGrid('unbindKeys');

						window.id_rowed6_edit=rowId;
						var with_idthuoc=parseFloat($('#jqgh_rowed6_ID_Thuoc').width())-32;
						$('#rowed6 #'+rowId+'_ID_Thuoc').hide();
						$('#rowed6 #'+rowId+'_ID_Thuoc').before( '<input id="'+rowId+'_ID_Thuoc1" class="editable" type="text" name="Gia" style="width:'+with_idthuoc+'px" role="textbox">' );
						create_combobox_inline('#'+rowId+'_ID_Thuoc1','#'+rowId+'_ID_Thuoc','.dialog_dm_thuoc','#DM_thuoc');

						$('#'+rowId+'_ID_Thuoc1').val('Vui lòng chọn thuốc');
						$('#'+rowId+'_ID_Thuoc1').focus();
						$('#'+rowId+'_ID_Thuoc1').select();
						inline_enter(rowId)
					},
                    afterrestorefunc: function(rowId) {
					$('.ui-datepicker').hide();
					$('#'+rowId+'_ID_Thuoc1,.dialog_dm_thuoc .ui-jqgrid-hbox').unbind("keyup");
					$('#'+rowId+'_ID_Thuoc1,.dialog_dm_thuoc .ui-jqgrid-hbox').unbind("click");
					$('body').unbind("click");
						$("#rowed6").jqGrid('bindKeys', {"onEnter":function( rowid ) {
							$("#prowed6 .ui-icon-pencil").click();
						} } );
						 $('#rowed6').focus();
                    },
                }
            	},
            editParams: {
				keys:true,
				 	aftersavefunc: function(rowId, response,lastsel) {
						$('#'+rowId+'_ID_Thuoc1,.dialog_dm_thuoc .ui-jqgrid-hbox').unbind("keyup");
						$('#'+rowId+'_ID_Thuoc1,.dialog_dm_thuoc .ui-jqgrid-hbox').unbind("click");
						$('body').unbind("click");
					 	$("#rowed6").jqGrid('bindKeys', {"onEnter":function( rowid ) {
							$("#prowed6 .ui-icon-pencil").click();
						} } );
						 $('#rowed6').focus();


                    },
                	oneditfunc: function(rowId) {
					//=========

						$('#'+rowId+'_Ngayapdung').datepicker({
					        showWeek: true,
					        defaultDate: "+1w",
					        changeMonth: true,
					        changeYear: true,
					        numberOfMonths: 1,

					        dateFormat: $.cookie("ngayJqueryUi"),

					        onClose: function(selectedDate) {

					        },
					        onSelect: function(dat, inst) {

					        }
					    });
					//==========
						window.id_rowed6_edit=rowId;
						var with_idthuoc=parseFloat($('#jqgh_rowed6_ID_Thuoc').width())-32;
						$('#rowed6 #'+rowId+'_ID_Thuoc').hide();
						$('#rowed6 #'+rowId+'_ID_Thuoc').before( '<input id="'+rowId+'_ID_Thuoc1" class="editable" type="text" name="Gia" style="width:'+with_idthuoc+'px" role="textbox">' );
						create_combobox_inline('#'+rowId+'_ID_Thuoc1','#'+rowId+'_ID_Thuoc','.dialog_dm_thuoc','#DM_thuoc',$('#rowed6 #'+rowId+'_ID_Thuoc').val());


					 	$("#rowed6").jqGrid('unbindKeys');
						$('#'+rowId+'_ID_Thuoc1').focus();
						$('#'+rowId+'_ID_Thuoc1').select();
						inline_enter(rowId)

					},
                    afterrestorefunc: function(rowId) {
					$('#'+rowId+'_ID_Thuoc1,.dialog_dm_thuoc .ui-jqgrid-hbox').unbind("keyup");
					$('#'+rowId+'_ID_Thuoc1,.dialog_dm_thuoc .ui-jqgrid-hbox').unbind("click");
					$('body').unbind("click");
						$("#rowed6").jqGrid('bindKeys', {"onEnter":function( rowid ) {
							$("#prowed6 .ui-icon-pencil").click();
						} } );

						 $('#rowed6').focus();

					},
                    afterrestorefunc: function(rowId) {
					$('#'+rowId+'_ID_Thuoc1,.dialog_dm_thuoc .ui-jqgrid-hbox').unbind("keyup");
					$('#'+rowId+'_ID_Thuoc1,.dialog_dm_thuoc .ui-jqgrid-hbox').unbind("click");
					$('body').unbind("click");
						$("#rowed6").jqGrid('bindKeys', {"onEnter":function( rowid ) {
							$("#prowed6 .ui-icon-pencil").click();
						} } );
						 $('#rowed6').focus();
                    },
					beforeSaveRow: function(options, rowId) {

					},

			}

       	 });
		//jQuery("#rowed6").jqGrid('setFrozenColumns');
}

function create_nhacungcap(elem,datalocal){
 datalocal=jQuery.parseJSON(datalocal);
   $(elem).jqGrid({
  datastr:datalocal,
  datatype: "jsonstring" ,
		colNames:['Nhà cung cấp'],
		colModel:[
			{name:'NhaCungCap',index:'NhaCungCap',hidden :false},
		],
		hidegrid: false,
		gridview: true,
		loadonce: true,
		scroll: false,
		modal:true,
		rowNum: 200000,
		rowList:[],
		sortname: 'Id_Tang',
		height:200,
		width: 300,
		viewrecords: true,
		ignoreCase:true,
		shrinkToFit:true,
		cmTemplate: {sortable:false},
		sortorder: "desc",
		serializeRowData: function (postdata) {
		},
		onSelectRow: function(id){
			window.n_action=2;
			window.idncc=id;
		var selr = jQuery(elem).jqGrid('getGridParam','selrow');
			$("#rowed6").jqGrid('setGridParam',{datatype: 'json',url:"resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_baocao_tonghop_theonhacungcap&from_day="+$("#from_day").val()+"&to_day="+$("#to_day").val()+"&tenkho="+$("#makho1").val()+"&idncc="+id+"&n_order="}).trigger('reloadGrid');

		},
		ondblClickRow: function (id, rowIndex, columnIndex) {

 		},
		loadComplete: function(data) {
		grid_filter_enter(elem) ;

		},

	});

	 $(elem).jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false,defaultSearch:"cn"});
	 $(elem).jqGrid('bindKeys', {} );

}
function create_kho(elem,datalocal){
 datalocal=jQuery.parseJSON(datalocal);
   $(elem).jqGrid({
  datastr:datalocal,
  datatype: "jsonstring" ,
		colNames:['Kho'],
		colModel:[
			{name:'kho',index:'kho',hidden :false},
		],
		hidegrid: false,
		gridview: true,
		loadonce: true,
		scroll: false,
		modal:true,
		rowNum: 200000,
		rowList:[],
		sortname: 'Id_Tang',
		height:200,
		width: 300,
		viewrecords: true,
		ignoreCase:true,
		shrinkToFit:true,
		cmTemplate: {sortable:false},
		sortorder: "desc",
		serializeRowData: function (postdata) {
		},
		onSelectRow: function(id){
			window.idncc=id;
		var selr = jQuery(elem).jqGrid('getGridParam','selrow');

		},
		ondblClickRow: function (id, rowIndex, columnIndex) {

 		},
		loadComplete: function(data) {
		grid_filter_enter(elem) ;

		},

	});

	 $(elem).jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false,defaultSearch:"cn"});
	 $(elem).jqGrid('bindKeys', {} );

}
$("#menu").menu();
function resize_control(){
	$("#rowed6").setGridWidth($("#grid_phong_ban").width());
	// $("#rowed6").setGridHeight($(window).height()-$("#form_danh_muc_phong_ban").height()-$("#panel_main1").height()-160);
	$("#rowed6").setGridHeight($(window).height()-$("#form_danh_muc_phong_ban").height()-$("#panel_main1").height()-140);
	}
function clickme(id){
	alert(id);
}
 $("#taophieuxuatdieuchinh").bind( "click", function(e) {
   	alert("Tạo phiếu xuất điều chỉnh");
   });
   $("#uutienxuat").bind( "click", function(e) {
	   selectedRowId = $("#rowed6").jqGrid('getGridParam', 'selrow');
	   var rowData = $("#rowed6").getRowData(selectedRowId);
   		$.get('resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=update_uutienxuat&hienmaloi=a&idthuoc='+rowData['MaThuoc']+'&solohethong='+rowData['SoLoHeThong']).done(function(data) {
			 if(window.n_action==1){
			 	$("#rowed6").jqGrid('setGridParam',{datatype: 'json',url:"resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_baocao_tonghop&from_day="+$("#from_day").val()+"&to_day="+$("#to_day").val()+"&tenkho="+$("#makho1").val()+"&n_order= ORDER BY TenBietDuoc"}).trigger('reloadGrid');
			 }
			 if(window.n_action==2){
				$("#rowed6").jqGrid('setGridParam',{datatype: 'json',url:"resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_baocao_tonghop_theonhacungcap&from_day="+$("#from_day").val()+"&to_day="+$("#to_day").val()+"&tenkho="+$("#makho1").val()+"&idncc="+window.idncc+"&n_order= ORDER BY TenBietDuoc"}).trigger('reloadGrid');
			 }

		});
   });
   $("#xemphieunhap").bind( "click", function(e) {
   	alert("Xem phiếu nhập");
   });
   
</script>