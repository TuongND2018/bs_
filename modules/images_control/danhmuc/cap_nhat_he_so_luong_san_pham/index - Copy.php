<style type="text/css">
/*Nháy row  */
 	#jqg1 td.loai_kham,#jqg2 td.loai_kham,#jqg3 td.loai_kham,#jqg4 td.loai_kham,#jqg5 td.loai_kham,#jqg6 td.loai_kham,#jqg7 td.loai_kham,#jqg8 td.loai_kham,#jqg9 td.loai_kham,#jqg10 td.loai_kham,#jqg11 td.loai_kham,#jqg12 td.loai_kham,#jqg13 td.loai_kham,#jqg14 td.loai_kham,#jqg15 td.loai_kham,#jqg16 td.loai_kham,  #jqg17 td.loai_kham,#jqg18 td.loai_kham,#jqg19 td.loai_kham,#jqg20 td.loai_kham,#jqg21 td.loai_kham,#jqg22 td.loai_kham,#jqg23 td.loai_kham,#jqg24 td.loai_kham{
		 animation: blink 1s steps(5, start) infinite;			  
	 }
	 @keyframes blink{
		to {
			visibility: hidden;
		}
	 }
/*Kết thúc Nháy row */

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
#rowed3 td,#rowed4 td,#rowed5 td{

	font-size:11px!important;	   
}

.ui-menu { 
	width: 150px;
	display:none;
	position:absolute;  	 
	box-shadow:0px 0px 3px #333;
	z-index:100000;  
}
.grid1
{
	width:180px;
	display:inline-block;
}
#menu_toggle{
	font-size:12px;
	padding:5px 0px;
	background:url("js/grid/themes/south-street/images/ui-bg_highlight-hard_15_459e00_1x100.png") repeat-x scroll   #459E00;
	border:#CCC 1px dashed;	
}
#gbox_rowed3, #gbox_rowed4, #gbox_rowed5, #gbox_rowed6, #gbox_rowed7{
	margin-left:4px;
	margin-top:5px;
	box-shadow:0px 0px 10px #a0a0a0;
	border:1px solid #919191; 
}#n_menu{
	border-radius: 6px 6px 6px 6px;
	border: 1px solid #d4ccb0;
	height:40px;
	margin: 5px;
}#n_bt{
	border-radius: 6px 6px 6px 6px;
	border: 1px solid #d4ccb0;
	height:30px;
	margin: 3px;
	display:none;			
	}
#bottom{
	position:absolute;  
  	bottom:0px;  
	width:98%;  
	height:20px;   /* Height of the footer */  	
	border-radius: 6px 6px 6px 6px;
	border: 1px solid #d4ccb0;
	padding: 10px;
	margin-left:2px;
	margin-top:5px;
	background:#FBFBF5;
}
#n_top{
	border-radius: 6px 6px 6px 6px;
	border: 1px solid #d4ccb0;
	height:65px;
	margin: 5px 0px -5px 0px;
	background:#FBFBF5;
}

</style>
<body> 
    <div id="panel_main" style="margin-top:10px;" >  
	<div class="ui-layout-west ui-widget-content left_col">   <table id="rowed3" ></table></div>
        <div class="center_col ui-widget-content ui-layout-center">  <table id="rowed4" ></table> </div>
        <div class="ui-layout-east ui-widget-content right_col">
        <table id="rowed5" ></table> 
        <div id="prowed5"></div> 
		<div id='n_bt'> </div>
		</div>
    </div>
    <div id='bottom' >

	</div>	
 </body>
</html> 

<script type="text/javascript">
jQuery(document).ready(function() {
	openform_shortcutkey();	
	
	 temp = jQuery(window).height() - 55;
	$("#panel_main").css("height", temp + "px");
	$("#panel_main").fadeIn(1000);

	create_layout();
	create_grid();
	create_grid2();
	create_grid3();
	resize_control();
	
	$(window).resize(function() {
		temp = jQuery(window).height() - 55;
		$("#panel_main").css("height", temp + "px");
		resize_control();
	})
	phanquyen();
})//end ready
var lastsel;
function create_grid() {
	$("#rowed3").jqGrid({
		url: '',
		datatype: "json",
		colNames: ['id nhóm cha','id nhóm', 'Khám lâm sàn', 'Tên nhóm cha'],
		colModel: [
			{name: 'IDNhomCha', index: 'IDNhomCha', width: "0%", editable: false, align: 'left', hidden: true},
			{name: 'ID_NhomCLS', index: 'ID_NhomCLS', width: "0%", editable: false, align: 'left', hidden: true},
			{name: 'TenNhom', index: 'TenNhom', search: false, width: "1%", editable: false, align: 'left', hidden: false, classes:'rowed3_event'},
			{name: 'TenNhomCha', index: 'TenNhomCha', width: "2%", editable: false, align: 'left', hidden: true},
		],
	   loadonce: false,
		scroll: 1,
		modal: true,
		rowNum: 100,
		rowList: [30, 50, 70],
		pager: '#prowed3',
		height: 100,
		width: 100,
		viewrecords: true,
		ignoreCase: true,
		shrinkToFit: true,
		grouping:true, 
		groupingView : { 
		groupField : ['IDNhomCha'],
		groupDataSorted : true ,
		groupCollapse : false,
		groupColumnShow :false,

		groupText : ['<b>{0}</b>']
		 }, 
		afterShowForm : function (formid) {
			
		},
		onSelectRow: function(id) {
		
		},
		ondblClickRow: function(rowId, rowIndex, columnIndex) {

		},
		onselect: function(rowId, rowIndex, columnIndex) {
			
		},
		loadComplete: function(data) {
		
		},
		caption: "Nhóm loại khám"
	});
    $("#rowed3").jqGrid('navGrid', "#prowed3", {add: false, edit: false, del: false, search: false, refresh: true, closeAfterEdit: true, clearAfterAdd: true, navkeys: [true, 38, 40], closeOnEscape: true});
	$("#rowed3").jqGrid('bindKeys', {});
    }
function create_grid2()
    {
	mydata=[];
	$("#rowed4").jqGrid({
		data: mydata,
		datatype: "local",
		colNames: ['GiaThueNgoaiThucHien', 'ThoiGianTrungBinhThucHien', 'ID_DMLoaiKham_Phongban','ID_LoaiKham', 'Tên loại khám', 'Đơn giá Viện phí','Đơn giá BHYT','Phụ thu'],
		colModel: [
			{name: 'GiaThueNgoaiThucHien', index: 'GiaThueNgoaiThucHien', search: false, width: "30%", editable: false, align: 'left', hidden: true},
			{name: 'ThoiGianTrungBinhThucHien', index: 'ThoiGianTrungBinhThucHien', search: false, width: "30%", editable: false, align: 'left', hidden: true},
			{name: 'ID_DMLoaiKham_Phongban', index: 'ID_DMLoaiKham_Phongban', search: false, width: "30%", editable: false, align: 'left', hidden: true},
			{name: 'ID_LoaiKham', index: 'ID_LoaiKham', search: false, width: "0%", editable: false, align: 'left', hidden: true},
			{name: 'TenLoaiKham', index: 'TenLoaiKham', search: true, width: "70%", editable: false, align: 'left', hidden: false},
			{name:'GiaBaoChoBN',index:'GiaBaoChoBN', width:"30%", editable:true,align:'right',edittype:"text",hidden:false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: "", defaultValue: '0'}},
			{name:'GiaTheoBaoHiem',index:'GiaTheoBaoHiem', width:"30%", editable:true,align:'right',edittype:"text",hidden:false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: "", defaultValue: '0'}},
			{name:'GiaPhuThu',index:'GiaPhuThu', width:"30%", editable:true,align:'right',edittype:"text",hidden:false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: "", defaultValue: '0'}},	            
			],
		loadonce: true,
		scroll: false,
		modal: true,
		shrinkToFit: true,
		grid_save_option: "",
		cmTemplate: {sortable: false},
		rowNum: 10000000,
		rowList: [],
		pager: '#prowed3',
		height: 100,
		width: 100,
		viewrecords: true,
		ignoreCase: true,
		sortorder: "desc",
		afterShowForm : function (formid) {

		},
		 onSelectRow: function(id) {
			 
		 }
		,ondblClickRow: function(rowId, rowIndex, columnIndex) {

		},
		onRightClickRow: function(rowid, iRow, iCol, e) {

		},
		loadComplete: function(data) {
		 
		},
		caption: " Hạng mục loại khám"
	});
	$("#rowed4").jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false,defaultSearch:"cn"});
	$("#rowed4").jqGrid('navGrid', "#prowed4", {add: false, edit: false, del: false, search: false, refresh: true, closeAfterEdit: true, clearAfterAdd: true, navkeys: [true, 38, 40], closeOnEscape: true});
		$("#rowed4").jqGrid('bindKeys', {});
   }
function create_grid3()
    {
		mydata=[];
        $("#rowed5").jqGrid({
            data: mydata,
            datatype: "local",
            colNames: ['ID Loại Khám','Xóa','Loại khám', 'Đơn giá Viện phí', 'Đơn giá BHYT', 'Phụ thu', 'Thành tiền Viện phí', 'Thành tiền BHYT', 'Phí thực hiện', 'Trạng thái','Bộ phận thực hiện', 'Người chỉ định',  'GiaThueNgoaiThucHien',  'ThoiGianTrungBinhThucHien',  'IDKham',  'MaBenhNhan','LyDoHuyBo','huy',  'IDLuotKham','Luu','IDNhomCLS','NgayGioTao','Lần chỉ định','XetNghiem'],
            colModel: [
                {name: 'IDLoaiKham', index: 'IDLoaiKham', search: false, width: "10%", editable: false, align: 'left', hidden: true},
                {name: 'Xoa', index: 'Xoa', search: false, width: "6%", editable: false, align: 'left', hidden: false},
                {name: 'LoaiKham', index: 'LoaiKham', search: false, width: "20%", editable: false, align: 'left', hidden: false,classes:'loai_kham'},
                {name: 'DonGiaVienPhi', index: 'DonGiaVienPhi', search: false, width: "10%", editable: false, align: 'right', hidden: false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: "", defaultValue: '0'}},
				{name: 'DonGiaBHYT', index: 'DonGiaBHYT', search: false, width: "10%", editable: false, align: 'right', hidden: false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: "", defaultValue: '0'}},
				{name: 'PhuThu', index: 'PhuThu', search: false, width: "8%", editable: false, align: 'right', hidden: false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: "", defaultValue: '0'}},
				{name: 'ThanhTienVienPhi', index: 'ThanhTienVienPhi', search: false, width: "11%", editable: false, align: 'right', hidden: false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: "", defaultValue: '0'}},
				{name: 'ThanhTienBHYT', index: 'ThanhTienBHYT', search: false, width: "11%", editable: false, align: 'right', hidden: false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: "", defaultValue: '0'}},
                {name: 'PhiThucHien', index: 'PhiThucHien', search: false, width: "11%", editable: false, align: 'right', hidden: false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: "", defaultValue: '0'}},
                {name: 'TrangThai', index: 'TrangThai', search: false, width: "10%", editable: false, align: 'center', hidden: false},
  				{name: 'NhomThucHien', index: 'NhomThucHien', search: false, width: "20%", editable: true, align: 'center', hidden: false, classes:'colNhomThucHien'},
				{name: 'NguoiChiDinh', index: 'NguoiChiDinh', search: false, width: "10%", editable: false, align: 'center', hidden: false},
			{name: 'GiaThueNgoaiThucHien', index: 'GiaThueNgoaiThucHien', search: false, width: "30%", editable: false, align: 'left', hidden: true},
				{name: 'ThoiGianTrungBinhThucHien', index: 'ThoiGianTrungBinhThucHien', search: false, width: "30%", editable: false, align: 'left', hidden: true},
				{name: 'IDKham', index: 'IDKham', search: false, width: "30%", editable: false, align: 'left', hidden: true},
				{name: 'MaBenhNhan', index: 'MaBenhNhan', search: false, width: "30%", editable: false, align: 'left', hidden: true},
				{name: 'LyDoHuyBo', index: 'LyDoHuyBo', search: false, width: "30%", editable: false, align: 'left', hidden: true},
				{name: 'Huy', index: 'Huy', search: false, width: "30%", editable: false, align: 'left', hidden: true},
				{name: 'IDLuotKham', index: 'IDLuotKham', search: false, width: "30%", editable: false, align: 'left', hidden: true},
				{name: 'Luu', index: 'Luu', search: false, width: "30%", editable: false, align: 'left', hidden: true},
				{name: 'IDNhomCLS', index: 'IDNhomCLS', search: false, width: "10%", editable: false, align: 'left', hidden: true},
				{name: 'NgayGioTao', index: 'NgayGioTao', search: false, width: "10%", editable: false, align: 'left', hidden: true},

				{name: 'LanChiDinh', index: 'LanChiDinh', search: false, width: "10%", editable: false, align: 'left', hidden: true},
				{name: 'XetNghiem', index: 'XetNghiem', search: false, width: "10%", editable: false, align: 'left', hidden: true},
				
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

			},
            loadComplete: function(data) {
				
            },
            caption: " Hạng mục loại khám được chọn"
        });

       $("#rowed5").jqGrid('navGrid', "#prowed5", {add: false, edit: false, del: false, search: false, refresh: false,prmView: false, closeAfterEdit: true, clearAfterAdd: true, navkeys: [true, 38, 40], closeOnEscape: true});
		$("#rowed5").jqGrid('bindKeys', {});
    }

function create_layout() {
	$('#panel_main').layout({
		resizerClass: 'ui-state-default'
				, east: {
			resizable: true
					, size: "65%"
					, spacing_closed: 27
					, togglerLength_closed: 85
					, togglerAlign_closed: "center"
					, togglerContent_closed: "<div id='menu_toggle'>X<BR>O<BR>N<BR>G</div>"
					, togglerTip_closed: "Open & Pin Menu"
					, sliderTip: "Slide Open Menu"
					, slideTrigger_open: "mouseover"
					, fxSettings_close: {easing: "easeOutQuint"}
			, onresize_end: function() {
				resize_control();

			}
			, onopen_end: function() {


			}
			, onclose_end: function() {


			}

		}
		, center: {
			resizable: true
					, size: "23%"

					, fxName: "drop"		// none, slide, drop, scale
					, fxSpeed_open: 450
					, fxSpeed_close: 450
					, fxSettings_open: {easing: "easeInQuint"}
			, fxSettings_close: {easing: "easeOutQuint"}

			, onresize_end: function() {
				resize_control();
			}
			, onopen_end: function() {


			}
			, onclose_end: function() {

			}
		}
		 , west:  {
			resizable: true
					, size: "12%"
					, spacing_closed: 27
					, togglerLength_closed: 85
					, togglerAlign_closed: "center"
					, togglerContent_closed: "<div id='menu_toggle'>X<BR>O<BR>N<BR>G</div>"
					, togglerTip_closed: "Open & Pin Menu"
					, sliderTip: "Slide Open Menu"
					, slideTrigger_open: "mouseover"
					, fxSettings_close: {easing: "easeOutQuint"}
			, onresize_end: function() {
				resize_control();

			}
			, onopen_end: function() {


			}
			, onclose_end: function() {


			}

		}
	});
}
	
function resize_control() {
	$("#rowed3 ").setGridWidth($(".left_col").width() - 11);
	$("#rowed3").setGridHeight($(".right_col").height() - 60);
	$("#rowed4").setGridWidth($(".center_col").width() - 11);
	$("#rowed4").setGridHeight($(".center_col").height() - 93);
	$("#rowed5").setGridWidth($(".right_col").width() - 11);
	$("#rowed5").setGridHeight($(".right_col").height() - 96);
}

</script>