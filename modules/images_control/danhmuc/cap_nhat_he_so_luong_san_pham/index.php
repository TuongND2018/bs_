<style type="text/css">


th.ui-th-column div{
	word-wrap: break-word; /* IE 5.5+ and CSS3 */
	white-space: pre-wrap; /* CSS3 */
	white-space: -moz-pre-wrap;  Mozilla, since 1999 
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
/*#panel_main{
	display:none!important;
}*/
#main{
	
	 height: 98%;
	  display: block;
	   overflow: hidden; 
	   position: relative;
}
</style>
<body> 
    <div id="panel_main" >  
	<div class="ui-layout-west ui-widget-content left_col">   <table id="rowed3" ></table></div>
        <div class="center_col ui-widget-content ui-layout-center">  <table id="rowed4" ></table> </div>
        <div class="ui-layout-east ui-widget-content right_col">
        <table id="rowed5" ></table> 
        <div id="prowed5"></div> 
		<div id='n_bt'> </div>
		</div>
    </div>
    <div id="main">
    	<div class="ui-layout-west ui-widget-content left_col2">   <table id="rowed6" ></table></div>
        <div class=" ui-widget-content ui-layout-center center_col2">  <table id="rowed7" ></table><div id="prowed7"></div>  </div>	
    </div>
    
 </body>	
</html> 

<script type="text/javascript">
jQuery(document).ready(function() {
	//openform_shortcutkey();	
	window.id_bacsi="0";
	 temp = jQuery(window).height() - 55;
	$("#panel_main").css("height", temp + "px");
	$("#panel_main").fadeIn(1000);
	
	window.phongban = $.ajax({url: 'resource.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=0&tables=DM_PhongBan &id=ID_PhongBan&name=TenPhongBan', async: false, success: function(data, result) {if (!result) alert('Không load được danh mục phòng ban');}}).responseText;
	window.bacsi = $.ajax({url: 'resource.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=0&tables=DM_NhanVien &id=ID_NhanVien&name=NickName', async: false, success: function(data, result) {if (!result) alert('Không load được danh mục phòng ban');}}).responseText;
	window.loaikham = $.ajax({url: 'resource.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=0&tables=DM_LoaiKham &id=ID_LoaiKham&name=TenLoaiKham', async: false, success: function(data, result) {if (!result) alert('Không load được danh mục phòng ban');}}).responseText;
	window.tennhomcha = $.ajax({url: "resource.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=2&tables=NhomCLS&id=ID_NhomCLS&name=TenNhom", async: false, success: function(data, result) {if (!result) alert('Không load được danh mục NhomCLS');}}).responseText;	
	 window.bacsi1=":;"+window.bacsi;	
	  window.loaikham1=":;"+window.loaikham;	
	create_layout2();
	create_grid();
	create_grid2();
	create_grid3();
	create_grid4();
	create_grid5();
	resize_control();
	//$("#rowed4").jqGrid('setGridParam',{datatype: 'json',url:"resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_hangmucloaikham_all"}).trigger('reloadGrid');
	$(window).resize(function() {
		temp = jQuery(window).height() - 55;
		$("#panel_main").css("height", temp + "px");
		resize_control();
	})
	//$('#rowed3').jqGrid('setGridParam', {url: 'resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_bacsi',datatype:'json'}) .trigger('reloadGrid');
	$("#xemchitiet").change(function(event) {
      if($("#xemchitiet").is(':checked')==true){
        $("#rowed3").jqGrid('setGridParam',{groupingView: { groupCollapse : false} }).trigger('reloadGrid');

      }else{
        $("#rowed3").jqGrid('setGridParam',{groupingView: { groupCollapse : true} }).trigger('reloadGrid');
      }
    });
    $("#xemchitiet2").change(function(event) {
      if($("#xemchitiet2").is(':checked')==true){
        $("#rowed4").jqGrid('setGridParam',{groupingView: { groupCollapse : false} }).trigger('reloadGrid');

      }else{
        $("#rowed4").jqGrid('setGridParam',{groupingView: { groupCollapse : true} }).trigger('reloadGrid');
      }
    });
	phanquyen();
	
})//end ready

var lastsel;
function create_grid() {
	$("#rowed3").jqGrid({
		url: 'resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_bacsi',
		datatype: "json",
		colNames: ['id ','Tên nhân viên','Phòng ban'],
		colModel: [
			{name: 'id', index: 'id', width: "0%", editable: false, align: 'left', hidden: true},
			{name: 'hoten', index: 'hoten', search: true, width: "1%", editable: false, align: 'left', hidden: false},
			{name:'phongban',index:'phongban',search:false, width:"100%", editable:true,align:'center',formatter:"select",edittype:"select",hidden:false,editoptions:{value:phongban},summaryType: 'avg'},
		],
	   loadonce: true,
		scroll: 1,	
		//rownum = false,
		//treeGrid = false,	 
		modal:true,	 	
		pager: '#prowed3',	
		rowNum: 100,
		gridview: true,
		pginput:false,
		pgbuttons:false,
		rowList:[],
		sortname: 'nickname',
		height:500,
		width: 120,
		viewrecords: true,	
		ignoreCase:true,
		shrinkToFit:true,
		stringResult:true,
		sortorder: "asc",
		multiselect: true,
		  grouping:true,
                groupingView : {
                        groupField : ['phongban'],
                        groupColumnShow : [false],
                        groupCollapse : true,
                        groupText : ['<b>{0}  </b><input type="checkbox" name="pb"  onclick="check2({phongban},{1});">']
                       
                },

		
		
		afterShowForm : function (formid) {
			
		},
		onSelectRow: function(id) {
			window.id_bacsi=id;
			
		},
		ondblClickRow: function(rowId, rowIndex, columnIndex) {
			$("#rowed5").jqGrid('setGridParam',{datatype: 'json',url:"resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_cauhinhbsloaikham2&id_bacsi="+id_bacsi}).trigger('reloadGrid');
		},
		onselect: function(rowId, rowIndex, columnIndex) {
			
		},
		loadComplete: function(data) {
			
		},
		caption: "Bác sĩ <div id='xct' style='float:left; margin-top: -20px; margin-left: 40%;'><input type='checkbox' id='xemchitiet'   /> Xem chi tiết</div>"
	});
	$("#rowed3").jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false,defaultSearch:"cn"});
    $("#rowed3").jqGrid('navGrid', "#prowed3", {add: false, edit: false, del: false, search: false, refresh: true, closeAfterEdit: true, clearAfterAdd: true, navkeys: [true, 38, 40], closeOnEscape: true});
	$("#rowed3").jqGrid('bindKeys', {});
    }
function create_grid4() {
	$("#rowed6").jqGrid({
		url: 'resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_bacsi',
		datatype: "json",
		colNames: ['id ','Tên nhân viên','Phòng ban'],
		colModel: [
			{name: 'id', index: 'id', width: "0%", editable: false, align: 'left', hidden: true},
			{name: 'hoten', index: 'hoten', search: true, width: "1%", editable: false, align: 'left', hidden: false},
			{name:'phongban',index:'phongban',search:false, width:"1%", editable:true,align:'center',formatter:"select",edittype:"select",hidden:false,editoptions:{value:phongban},summaryType: 'avg',},
		],
	   loadonce: true,
		scroll: 1,	
		//rownum = false,
		//treeGrid = false,	 
		modal:true,	 	
		pager: '#prowed6',	
		rowNum: 100,
		gridview: true,
		pginput:false,
		pgbuttons:false,
		rowList:[],
		sortname: 'nickname',
		height:500,
		width: 120,
		viewrecords: true,	
		ignoreCase:true,
		shrinkToFit:true,
		stringResult:true,
		sortorder: "asc",
		 grouping:true,
                groupingView : {
                        groupField : ['phongban'],
                        groupColumnShow : [false],
                        groupCollapse : true,
                        groupText : ['<b>{0}  </b><input type="radio" name="pb"  onclick="check({phongban},{1});">']
                       
                },
		
		
		afterShowForm : function (formid) {
			
		},
		onSelectRow: function(id) {
			window.id_bacsi=id;

			$("#rowed7").jqGrid('setGridParam',{datatype: 'json',url:"resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_cauhinhbsloaikham&id_bacsi="+id_bacsi}).trigger('reloadGrid');
		},
		ondblClickRow: function(rowId, rowIndex, columnIndex) {

		},
		onselect: function(rowId, rowIndex, columnIndex) {
			
		},
		loadComplete: function(data) {
		
		},
		caption: "DS Bác sĩ"
	});
	$("#rowed6").jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false,defaultSearch:"cn"});
    $("#rowed6").jqGrid('navGrid', "#prowed6", {add: false, edit: false, del: false, search: false, refresh: true, closeAfterEdit: true, clearAfterAdd: true, navkeys: [true, 38, 40], closeOnEscape: true});
	$("#rowed6").jqGrid('bindKeys', {});
    }
function create_grid2()
    {
	mydata=[];
	$("#rowed4").jqGrid({
		data: mydata,
		datatype: "local",
		colNames: ['GiaThueNgoaiThucHien', 'ThoiGianTrungBinhThucHien', 'ID_DMLoaiKham_Phongban','ID_LoaiKham', 'Tên loại khám', 'DG VP','DG BHYT','Phụ thu','','','','',''],
		colModel: [
			{name: 'GiaThueNgoaiThucHien', index: 'GiaThueNgoaiThucHien', search: false, width: "30%", editable: false, align: 'left', hidden: true},
			{name: 'ThoiGianTrungBinhThucHien', index: 'ThoiGianTrungBinhThucHien', search: false, width: "30%", editable: false, align: 'left', hidden: true},
			{name: 'ID_DMLoaiKham_Phongban', index: 'ID_DMLoaiKham_Phongban', search: false, width: "30%", editable: false, align: 'left', hidden: true},
			{name: 'ID_LoaiKham', index: 'ID_LoaiKham', search: false, width: "0%", editable: false, align: 'left', hidden: true},
			{name: 'TenLoaiKham', index: 'TenLoaiKham', search: true, width: "70%", editable: false, align: 'left', hidden: false},
			{name:'GiaBaoChoBN',index:'GiaBaoChoBN', width:"40%", editable:true,align:'right',edittype:"text",hidden:false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: "", defaultValue: '0'}},
			{name:'GiaTheoBaoHiem',index:'GiaTheoBaoHiem', width:"30%", editable:true,align:'right',edittype:"text",hidden:false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: "", defaultValue: '0'}},
			{name:'GiaPhuThu',index:'GiaPhuThu', width:"30%", editable:true,align:'right',edittype:"text",hidden:false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: "", defaultValue: '0'}},	            
			{name: 'TenNhom', index: 'TenNhom', search: true, width: "70%", editable: false, align: 'left', hidden: false},
			{name: 'ID_NhomCha', index: 'ID_NhomCha', search: true, width: "70%", editable: false, align: 'left', hidden: false,edittype:"select",formatter:'select',editoptions:{value: tennhomcha}},
			{name: 'ID_NhomCLS', index: 'ID_NhomCLS', search: true, width: "70%", editable: false, align: 'left', hidden: true,summaryType: 'sum'},
			{name: 'ChiPhi', index: 'ChiPhi', search: true, width: "70%", editable: false, align: 'left', hidden: true},
			{name: 'conlai', index: 'conlai', search: true, width: "70%", editable: false, align: 'left', hidden: true},

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
		 grouping: true,
		 multiselect:true,
		   	groupingView : {
		   		groupField : ['ID_NhomCha', 'TenNhom'],
		   		groupColumnShow : [false, false],
		   		groupText : ['<b>{0}</b>', '<b>{0}</b>  <input type="checkbox" name="pb"  onClick="check3({ID_NhomCLS},{1});"> '],
		   		groupCollapse : true,
				groupOrder: ['asc', 'asc']
		   	},
		afterShowForm : function (formid) {

		},
		 onSelectRow: function(id) {
			 
		 }
		,ondblClickRow: function(rowId, rowIndex, columnIndex) {
			chonloaikham(rowId);
		},
		onRightClickRow: function(rowid, iRow, iCol, e) {

		},
		loadComplete: function(data) {
		 
		},
		caption: "Loại khám <div id='xct' style='float:left; margin-top: -20px; margin-left: 50%;'><input type='checkbox' id='xemchitiet2'   /> Xem chi tiết</div>"
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
            colNames: ['ID  bs Loại Khám','Xóa','BS','Loại khám','Giá báo BN','Chi phí','còn lại', '% cơ hữu', '% HSDC cơ hữu', '% hợp tác', '% HSDC hợp tác', '% Phụ tá', '% HSDC phụ tá', '% Vô cảm','% HSDC vô cảm', '% Hoàn tất cơ hữu',  '% HSDC Hoàn tất cơ hữu',  '% Hoàn tất hợp tác',  '% HSDC hoàn tất hợp tác','% KTV Thực hiện','% HSDC KTV Thực hiện'],
            colModel: [
                {name: 'ID_BSLoaiKham', index: 'ID_BSLoaiKham', search: false, width: "10%", editable: false, align: 'left', hidden: true},
                 {name: 'Xoa', index: 'Xoa', search: false, width: "10%", editable: false, align: 'left', hidden: false},
                {name: 'ID_BacSy', index: 'ID_BacSy', search: false, width: "20%", editable: false, align: 'left',formatter:"select",edittype:"select",hidden:false,editoptions:{value:bacsi}},
               	{name: 'LoaiKham', index: 'LoaiKham', search: false, width: "30%", editable: false, align: 'left', hidden: false,formatter:"select",edittype:"select",hidden:false,editoptions:{value:loaikham}},
                {name: 'GiaBaoChoBN', index: 'GiaBaoChoBN', search: true, width: "20%", editable: false, align: 'right', hidden: false},
                {name: 'ChiPhi', index: 'ChiPhi', search: true, width: "20%", editable: false, align: 'right', hidden: false},
                {name: 'conlai', index: 'conlai', search: true, width: "20%", editable: false, align: 'right', hidden: false},
                {name: 'ChiDinhCoHuu', index: 'ChiDinhCoHuu', search: false, width: "20%", editable: true, align: 'right', hidden: false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: "", defaultValue: '0'}
                ,editoptions: { maxlength: 3,dataEvents:  [{ type: 'keyup', fn: function(e) { 
					if(jwerty.is("enter",e)){
						$("#"+$(e.target).attr('id').split('_')[0]+"_HSDC_ChiDinhCoHuu").focus();
						$("#"+$(e.target).attr('id').split('_')[0]+"_HSDC_ChiDinhCoHuu").select();
					}
                 } }]},editrules:{number: true}
            	},
				{name: 'HSDC_ChiDinhCoHuu', index: 'HSDC_ChiDinhCoHuu', search: false, width: "20%", editable: true, align: 'right', hidden: false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: "", defaultValue: '0'}
				,editoptions: { maxlength: 3,dataEvents:  [{ type: 'keyup', fn: function(e) { 
					if(jwerty.is("enter",e)){
						$("#"+$(e.target).attr('id').split('_')[0]+"_ChiDinhHopTac").focus();
						$("#"+$(e.target).attr('id').split('_')[0]+"_ChiDinhHopTac").select();
					}
                 } }]}
				},
				{name: 'ChiDinhHopTac', index: 'ChiDinhHopTac', search: false, width: "20%", editable: true, align: 'right', hidden: false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: "", defaultValue: '0'}
				,editoptions: { maxlength: 3,dataEvents:  [{ type: 'keyup', fn: function(e) { 
					if(jwerty.is("enter",e)){
						$("#"+$(e.target).attr('id').split('_')[0]+"_HSDC_ChiDinhHopTac").focus();
						$("#"+$(e.target).attr('id').split('_')[0]+"_HSDC_ChiDinhHopTac").select();
					}
                 } }]}
				},
				{name: 'HSDC_ChiDinhHopTac', index: 'HSDC_ChiDinhHopTac', search: false, width: "20%", editable: true, align: 'right', hidden: false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: "", defaultValue: '0'}
				,editoptions: { maxlength: 3,dataEvents:  [{ type: 'keyup', fn: function(e) { 
					if(jwerty.is("enter",e)){
						$("#"+$(e.target).attr('id').split('_')[0]+"_PhuTa").focus();
						$("#"+$(e.target).attr('id').split('_')[0]+"_PhuTa").select();
					}
                 } }]}
				},
				{name: 'PhuTa', index: 'PhuTa', search: false, width: "20%", editable: true, align: 'right', hidden: false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: "", defaultValue: '0'}
				,editoptions: { maxlength: 3,dataEvents:  [{ type: 'keyup', fn: function(e) { 
					if(jwerty.is("enter",e)){
						$("#"+$(e.target).attr('id').split('_')[0]+"_HSDC_PhuTa").focus();
						$("#"+$(e.target).attr('id').split('_')[0]+"_HSDC_PhuTa").select();
					}
                 } }]}
				},
                {name: 'HSDC_PhuTa', index: 'HSDC_PhuTa', search: false, width: "20%", editable: true, align: 'right', hidden: false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: "", defaultValue: '0'}
                ,editoptions: { maxlength: 3,dataEvents:  [{ type: 'keyup', fn: function(e) { 
					if(jwerty.is("enter",e)){
						$("#"+$(e.target).attr('id').split('_')[0]+"_VoCam").focus();
						$("#"+$(e.target).attr('id').split('_')[0]+"_VoCam").select();
					}
                 } }]}
            	},
                {name: 'VoCam', index: 'VoCam', search: false, width: "20%", editable: true, align: 'right', hidden: false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: "", defaultValue: '0'}
                ,editoptions: { maxlength: 3,dataEvents:  [{ type: 'keyup', fn: function(e) { 
					if(jwerty.is("enter",e)){
						$("#"+$(e.target).attr('id').split('_')[0]+"_HSDC_VoCam").focus();
						$("#"+$(e.target).attr('id').split('_')[0]+"_HSDC_VoCam").select();
					}
                 } }]}
            	},
  				{name: 'HSDC_VoCam', index: 'HSDC_VoCam', search: false, width: "20%", editable: true, align: 'right', hidden: false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: "", defaultValue: '0'}
  				,editoptions: { maxlength: 3,dataEvents:  [{ type: 'keyup', fn: function(e) { 
					if(jwerty.is("enter",e)){
						$("#"+$(e.target).attr('id').split('_')[0]+"_HoanTatCoHuu").focus();
						$("#"+$(e.target).attr('id').split('_')[0]+"_HoanTatCoHuu").select();
					}
                 } }]}
  				},
				{name: 'HoanTatCoHuu', index: 'HoanTatCoHuu', search: false, width: "20%", editable: true, align: 'right', hidden: false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: "", defaultValue: '0'}
				,editoptions: { maxlength: 3,dataEvents:  [{ type: 'keyup', fn: function(e) { 
					if(jwerty.is("enter",e)){
						$("#"+$(e.target).attr('id').split('_')[0]+"_HSDC_HoanTatCoHuu").focus();
						$("#"+$(e.target).attr('id').split('_')[0]+"_HSDC_HoanTatCoHuu").select();
					}
                 } }]}
				},
				{name: 'HSDC_HoanTatCoHuu', index: 'HSDC_HoanTatCoHuu', search: false, width: "20%", editable: true, align: 'right', hidden: false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: "", defaultValue: '0'}
				,editoptions: { maxlength: 3,dataEvents:  [{ type: 'keyup', fn: function(e) { 
					if(jwerty.is("enter",e)){
						$("#"+$(e.target).attr('id').split('_')[0]+"_HoanTatHopTac").focus();
						$("#"+$(e.target).attr('id').split('_')[0]+"_HoanTatHopTac").select();
					}
                 } }]}
				},
				{name: 'HoanTatHopTac', index: 'HoanTatHopTac', search: false, width: "20%", editable: true, align: 'right', hidden: false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: "", defaultValue: '0'}
				,editoptions: { maxlength: 3,dataEvents:  [{ type: 'keyup', fn: function(e) { 
					if(jwerty.is("enter",e)){
						$("#"+$(e.target).attr('id').split('_')[0]+"_HSDC_HoanTatHopTac").focus();
						$("#"+$(e.target).attr('id').split('_')[0]+"_HSDC_HoanTatHopTac").select();
					}
                 } }]}
				},
				{name: 'HSDC_HoanTatHopTac', index: 'HSDC_HoanTatHopTac', search: false, width: "20%", editable: true, align: 'right', hidden: false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: "", defaultValue: '0'}
				,editoptions: { maxlength: 3,dataEvents:  [{ type: 'keyup', fn: function(e) { 
					if(jwerty.is("enter",e)){
						$("#"+$(e.target).attr('id').split('_')[0]+"_KTVThucHien").focus();
						$("#"+$(e.target).attr('id').split('_')[0]+"_KTVThucHien").select();
					}
                 } }]}
				},
				{name: 'KTVThucHien', index: 'KTVThucHien', search: false, width: "20%", editable: true, align: 'right', hidden: false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: "", defaultValue: '0'}
				,editoptions: { maxlength: 3,dataEvents:  [{ type: 'keyup', fn: function(e) { 
					if(jwerty.is("enter",e)){
						$("#"+$(e.target).attr('id').split('_')[0]+"_HSDC_KTVThucHien").focus();
						$("#"+$(e.target).attr('id').split('_')[0]+"_HSDC_KTVThucHien").select();
					}
                 } }]}
				},
				{name: 'HSDC_KTVThucHien', index: 'HSDC_KTVThucHien', search: false, width: "20%", editable: true, align: 'right', hidden: false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: "", defaultValue: '0'}
				,editoptions: { maxlength: 3,dataEvents:  [{ type: 'keyup', fn: function(e) { 
					if(jwerty.is("enter",e)){

						var ids = $("#rowed5").getDataIDs();
		            	for(i=0;i<ids.length;i++){
		            		if(ids[i]==danhdau){
		            			$("#rowed5").jqGrid('setSelection',ids[i+1]);

		            			$("#"+ids[i+1]+"_ChiDinhCoHuu").focus();
		            			$("#"+ids[i+1]+"_ChiDinhCoHuu").select();
		            			break;	

		            		}
		            		
		            	}
					}
                 } }]}
				},
				
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
			onSelectRow: function(id){		
				window.danhdau=id;
			 	/*$('#'+id+'_ChiDinhCoHuu').focus();
				 $( '#'+id+'_ChiDinhCoHuu').keyup(function(e) {
			            if( e.keyCode == 13){
			           		$('#'+id+'_HSDC_ChiDinhCoHuu').focus();
			            }
			    });
				 $( '#'+id+'_HSDC_ChiDinhCoHuu').keyup(function(e) {
			            if( e.keyCode == 13){
			           		$('#'+id+'_ChiDinhHopTac').focus();
			            }
			    });
				 $( '#'+id+'_ChiDinhHopTac').keyup(function(e) {
			            if( e.keyCode == 13){
			           		$('#'+id+'_HSDC_ChiDinhHopTac').focus();
			            }
			    });
				 $( '#'+id+'_HSDC_ChiDinhHopTac').keyup(function(e) {
			            if( e.keyCode == 13){
			           		$('#'+id+'_PhuTa').focus();
			            }
			    });
				 $( '#'+id+'_PhuTa').keyup(function(e) {
			            if( e.keyCode == 13){
			           		$('#'+id+'_HSDC_PhuTa').focus();
			            }
			    });
				 $( '#'+id+'_HSDC_PhuTa').keyup(function(e) {
			            if( e.keyCode == 13){
			           		$('#'+id+'_VoCam').focus();
			            }
			    });
				 $( '#'+id+'_VoCam').keyup(function(e) {
			            if( e.keyCode == 13){
			           		$('#'+id+'_HSDC_VoCam').focus();
			            }
			    });
				 $( '#'+id+'_HSDC_VoCam').keyup(function(e) {
			            if( e.keyCode == 13){
			           		$('#'+id+'_HoanTatCoHuu').focus();
			            }
			    });
				 $( '#'+id+'_HoanTatCoHuu').keyup(function(e) {
			            if( e.keyCode == 13){
			           		$('#'+id+'_HSDC_HoanTatCoHuu').focus();
			            }
			    });
				 $( '#'+id+'_HSDC_HoanTatCoHuu').keyup(function(e) {
			            if( e.keyCode == 13){
			           		$('#'+id+'_HoanTatHopTac').focus();
			            }
			    });
				 $( '#'+id+'_HoanTatHopTac').keyup(function(e) {
			            if( e.keyCode == 13){
			           		$('#'+id+'_HSDC_HoanTatHopTac').focus();
			            }
			    });
				 $( '#'+id+'_HSDC_HoanTatHopTac').keyup(function(e) {
			            if( e.keyCode == 13){
			           		$("#rowed5").jqGrid('saveRow', id);
			            }
			    });
				 */

			},
			
			ondblClickRow: function (rowId, rowIndex, columnIndex) {
				jQuery('#rowed5').jqGrid('editRow', rowId, true);  
				 var ids = $("#rowed5").getDataIDs();
            	for(i=0;i<ids.length;i++){
            		//jQuery("#rowed5").jqGrid('setSelection',ids[0]);
            		number_textbox("#"+ids[i]+"_ChiDinhCoHuu");
            		number_textbox("#"+ids[i]+"_HSDC_ChiDinhCoHuu");
            		number_textbox("#"+ids[i]+"_ChiDinhHopTac");
            		number_textbox("#"+ids[i]+"_HSDC_ChiDinhHopTac");
            		number_textbox("#"+ids[i]+"_PhuTa");
            		number_textbox("#"+ids[i]+"_HSDC_PhuTa");
            		number_textbox("#"+ids[i]+"_VoCam");
            		number_textbox("#"+ids[i]+"_HSDC_VoCam");
            		number_textbox("#"+ids[i]+"_HoanTatCoHuu");
            		number_textbox("#"+ids[i]+"_HSDC_HoanTatCoHuu");
            		number_textbox("#"+ids[i]+"_HoanTatHopTac");
            		number_textbox("#"+ids[i]+"_HSDC_HoanTatHopTac");
            		

            	}
	 		},
            loadComplete: function(data) {
				
            },
            caption: " Hạng mục loại khám được chọn "
        });

       $("#rowed5").jqGrid('navGrid', "#prowed5", {add: false, edit: false, del: false, search: false, refresh: false,prmView: false, closeAfterEdit: true, clearAfterAdd: true, navkeys: [true, 38, 40], closeOnEscape: true});
		$("#rowed5").jqGrid('bindKeys', {});
		$("#rowed5").jqGrid('navButtonAdd', '#prowed5', {caption: "Xóa tất cả", buttonicon: 'ui-icon-trash',id : 'xoa_rowed5',

            onClickButton: function() {
            	var ids = $("#rowed5").getDataIDs();
            	for(i=0;i<ids.length;i++){
					$('#rowed5').jqGrid('delRowData',ids[i]);
            	}
            	
				
            }
        })	
		$("#rowed5").jqGrid('navButtonAdd', '#prowed5', {caption: "Áp phần trăm hàng loạt", buttonicon: 'ui-icon-star',id : 'chon_rowed5',

            onClickButton: function() {
            	 var ids = $("#rowed5").getDataIDs();
            	for(i=0;i<ids.length;i++){
            		$("#"+ids[i]+"_ChiDinhCoHuu").val($("#"+ids[0]+"_ChiDinhCoHuu").val());
            		$("#"+ids[i]+"_HSDC_ChiDinhCoHuu").val($("#"+ids[0]+"_HSDC_ChiDinhCoHuu").val());
            		$("#"+ids[i]+"_ChiDinhHopTac").val($("#"+ids[0]+"_ChiDinhHopTac").val());
            		$("#"+ids[i]+"_HSDC_ChiDinhHopTac").val($("#"+ids[0]+"_HSDC_ChiDinhHopTac").val());
            		$("#"+ids[i]+"_PhuTa").val($("#"+ids[0]+"_PhuTa").val());
            		$("#"+ids[i]+"_HSDC_PhuTa").val($("#"+ids[0]+"_HSDC_PhuTa").val());
            		$("#"+ids[i]+"_VoCam").val($("#"+ids[0]+"_VoCam").val());
            		$("#"+ids[i]+"_HSDC_VoCam").val($("#"+ids[0]+"_HSDC_VoCam").val());
            		$("#"+ids[i]+"_HoanTatCoHuu").val($("#"+ids[0]+"_HoanTatCoHuu").val());
            		$("#"+ids[i]+"_HSDC_HoanTatCoHuu").val($("#"+ids[0]+"_HSDC_HoanTatCoHuu").val());
            		$("#"+ids[i]+"_HoanTatHopTac").val($("#"+ids[0]+"_HoanTatHopTac").val());
            		$("#"+ids[i]+"_HSDC_HoanTatHopTac").val($("#"+ids[0]+"_HSDC_HoanTatHopTac").val());
            		

            	}
            }
        })	
		$("#rowed5").jqGrid('navButtonAdd', '#prowed5', {caption: "Lưu", buttonicon: 'ui-icon-locked',id : 'luu_rowed5',

            onClickButton: function() {
            	var ids = $("#rowed5").getDataIDs();
            	for(i=0;i<ids.length;i++){
            		$("#rowed5").jqGrid('saveRow', ids[i]);
            	}
            	var gridData = jQuery("#rowed5").getRowData();
				var postData = JSON.stringify(gridData);
				postData='{"id":'+postData+'}';
				postData=$.parseJSON(postData);
				$.post('resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=controller&oper=add',postData).done(function(data){
				
					tooltip_message("Đã lưu");
					
				})//$.post
            }
        })	
    }

function create_grid5()
    {
		mydata=[];
        $("#rowed7").jqGrid({
            data: mydata,
            datatype: "json",
            colNames: ['ID  bs Loại Khám','BS','Loại khám','Giá báo BN','Chi phí','còn lại',  '% cơ hữu', '% HSDC cơ hữu', '% hợp tác', '% HSDC hợp tác', '% Phụ tá', '% HSDC phụ tá', '% Vô cảm','% HSDC vô cảm', '% Hoàn tất cơ hữu',  '% HSDC Hoàn tất cơ hữu',  '% Hoàn tất hợp tác',  '% HSDC hoàn tất hợp tác','% KTV Thực hiện','% HSDC KTV Thực hiện'],
            colModel: [
                {name: 'ID_BSLoaiKham', index: 'ID_BSLoaiKham', search: true, width: "10%", editable: false, align: 'left', hidden: true},
                {name: 'ID_BacSy', index: 'ID_BacSy', search: true, width: "15%",searchoptions: { sopt: ['eq', 'ne'],value:bacsi1}, editable: false, align: 'left',stype: 'select',formatter:"select",editrules: {required:false},edittype:"select",hidden:false,editoptions:{value:bacsi}},
                {name: 'LoaiKham', index: 'LoaiKham', search: true, width: "30%",searchoptions: { sopt: ['eq', 'ne'],value:loaikham1}, editable: false, align: 'left',stype: 'select',formatter:"select",editrules: {required:false},edittype:"select",hidden:false,editoptions:{value:loaikham}},
                {name: 'GiaBaoChoBN', index: 'GiaBaoChoBN', search: true, width: "20%", editable: true, align: 'right', hidden: false},
                {name: 'ChiPhi', index: 'ChiPhi', search: true, width: "20%", editable: true, align: 'right', hidden: false},
                {name: 'conlai', index: 'conlai', search: true, width: "20%", editable: true, align: 'right', hidden: false},
                {name: 'ChiDinhCoHuu', index: 'ChiDinhCoHuu', search: true, width: "20%", editable: true, align: 'right', hidden: false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: "", defaultValue: '0'}},
				{name: 'HSDC_ChiDinhCoHuu', index: 'HSDC_ChiDinhCoHuu', search: true, width: "20%", editable: true, align: 'right', hidden: false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: "", defaultValue: '0'}},
				{name: 'ChiDinhHopTac', index: 'ChiDinhHopTac', search: true, width: "20%", editable: true, align: 'right', hidden: false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: "", defaultValue: '0'}},
				{name: 'HSDC_ChiDinhHopTac', index: 'HSDC_ChiDinhHopTac', search: true, width: "20%", editable: true, align: 'right', hidden: false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: "", defaultValue: '0'}},
				{name: 'PhuTa', index: 'PhuTa', search: true, width: "20%", editable: true, align: 'right', hidden: false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: "", defaultValue: '0'}},
                {name: 'HSDC_PhuTa', index: 'HSDC_PhuTa', search: true, width: "20%", editable: true, align: 'right', hidden: false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: "", defaultValue: '0'}},
                {name: 'VoCam', index: 'VoCam', search: true, width: "20%", editable: true, align: 'right', hidden: false},
  				{name: 'HSDC_VoCam', index: 'HSDC_VoCam', search: true, width: "20%", editable: true, align: 'right', hidden: false, classes:'colNhomThucHien'},
				{name: 'HoanTatCoHuu', index: 'HoanTatCoHuu', search: true, width: "20%", editable: true, align: 'right', hidden: false},
				{name: 'HSDC_HoanTatCoHuu', index: 'HSDC_HoanTatCoHuu', search: true, width: "20%", editable: true, align: 'right', hidden: false},
				{name: 'HoanTatHopTac', index: 'HoanTatHopTac', search: true, width: "20%", editable: true, align: 'right', hidden: false},
				{name: 'HSDC_HoanTatHopTac', index: 'HSDC_HoanTatHopTac', search: true, width: "20%", editable: true, align: 'right', hidden: false},
				{name: 'KTVThucHien', index: 'KTVThucHien', search: true, width: "20%", editable: true, align: 'right', hidden: false},
				{name: 'HSDC_KTVThucHien', index: 'HSDC_KTVThucHien', search: true, width: "20%", editable: true, align: 'right', hidden: false},
				
            ],
          loadonce: true,
		scroll: 1,	
		//rownum = false,
		//treeGrid = false,	 
		modal:true,	 	
		pager: '#prowed7',	
		rowNum: 100,
		gridview: true,
		pginput:false,
		pgbuttons:false,
		rowList:[],
		sortname: 'nickname',
		height:500,
		width: 1200,
		viewrecords: true,	
		ignoreCase:true,
		shrinkToFit:true,
		stringResult:true,
		sortorder: "asc",
			afterShowForm : function (formid) {

			},
            loadComplete: function(data) {
				
            },
            caption: " Hạng mục loại khám được chọn"
        });
		$("#rowed7").jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false,defaultSearch:"cn"});
       $("#rowed7").jqGrid('navGrid', "#prowed7", {add: false, edit: false, del: false, search: false, refresh: false,prmView: false, closeAfterEdit: true, clearAfterAdd: true, navkeys: [true, 38, 40], closeOnEscape: true});
		 $("#rowed7").jqGrid('navButtonAdd', '#prowed7', {caption: "Thêm", buttonicon: 'ui-icon-plus',id : 'them',
            onClickButton: function() {
            	$( "#panel_main" ).dialog( "open" );
            	$(".ui-dialog").css("height","98%");
            	//$(".ui-dialog").css("width","100%");
            	$(".ui-dialog").css("top","0px");
            	$("#rowed3").jqGrid('setGridParam',{datatype: 'json',url:"resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_bacsi"}).trigger('reloadGrid');
            	$("#rowed4").jqGrid('setGridParam',{datatype: 'json',url:"resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_hangmucloaikham_all"}).trigger('reloadGrid');
            	$("#rowed5").jqGrid('setGridParam',{datatype: 'json',url:"resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_cauhinhbsloaikham4&id_phongban=0"}).trigger('reloadGrid');
            	create_layout();
            	resize_control();
            }
        })
		$("#rowed7").jqGrid('bindKeys', {});
    }
$( "#panel_main" ).dialog({
            autoOpen: false,
            height: ($(window).height()).toFixed(0),
            width: ($(window).width()-20).toFixed(0),
            modal: true,
            
            });
function create_layout() {
	$('#panel_main').layout({
		resizerClass: 'ui-state-default'
				, east: {
			resizable: true
					, size: "69%"
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
					, size: "16%"

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
					, size: "15%"
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
	$("#rowed3 ").setGridWidth($(".left_col").width() +3);
	$("#rowed3").setGridHeight($(".left_col").height() - 80);
	$("#rowed4").setGridWidth($(".center_col").width() - 11);
	$("#rowed4").setGridHeight($(".center_col").height() - 89);
	$("#rowed5").setGridWidth($(".right_col").width() - 11);
	$("#rowed5").setGridHeight($(".right_col").height() - 155);
	$("#rowed6").setGridWidth($(".left_col2").width() +2);
	$("#rowed6").setGridHeight($(".left_col2").height() - 80);
	$("#rowed7").setGridWidth($(".center_col2").width() - 11);
	$("#rowed7").setGridHeight($(".center_col2").height() - 167);
}
function create_layout2() {
$('#main').layout({
            resizerClass: 'ui-state-default'
              ,west: {
                resizable: true
                        , size: "15%"
                        , resizerDblClickToggle: false


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
                        , size: "85%"
                        , resizerDblClickToggle: false


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
function xoa(){
	
	var gr = jQuery("#rowed5").jqGrid('getGridParam','selrow');
	$('#rowed5').jqGrid('delRowData',gr);
}
function check(n,y){
	phongban=parseInt(n/y);
	$("#rowed7").jqGrid('setGridParam',{datatype: 'json',url:"resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_cauhinhbsloaikham3&id_phongban="+phongban}).trigger('reloadGrid');
	
}
function check2(n,y){
	phongban=parseInt(n/y);
	$("#rowed5").jqGrid('setGridParam',{datatype: 'json',url:"resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_cauhinhbsloaikham4&id_phongban="+phongban}).trigger('reloadGrid');
	var gridData = jQuery("#rowed3").getRowData();

	mang=[];

	for(i=0;i<gridData.length;i++){
		//alert(gridData[i]["phongban"]);
		if(gridData[i]["phongban"]==phongban){
			//alert();

			mang.push(gridData[i]["id"]);
		}
	}
	//alert(mang);
	for(j=0;j<mang.length;j++){

		jQuery("#rowed3").jqGrid('setSelection',mang[j]);
	}
	setTimeout(function(){	
		var ids = $("#rowed5").getDataIDs();
	            	for(i=0;i<ids.length;i++){
	            		$("#rowed5").jqGrid('editRow', ids[i]);
	            		jQuery("#rowed5").jqGrid('setSelection',ids[0]);
	            		$("#"+ids[0]+"_ChiDinhCoHuu").focus();
		            	$("#"+ids[0]+"_ChiDinhCoHuu").select();
	    }
    },500);
}
function check3(n,y){
	nhom=parseInt(n/y);
	var gridData = jQuery("#rowed4").getRowData();
	mang=[];
	for(var i=0;i<gridData.length;i++){
		//alert(gridData[i]["phongban"]);
		if(gridData[i]["ID_NhomCLS"]==nhom){
			mang.push(gridData[i]["ID_LoaiKham"]);
		}
	}
	//alert(mang);
	for(var j=0;j<mang.length;j++){
		jQuery("#rowed4").jqGrid('setSelection',mang[j]);
		//console.log(mang[j]);
		chonloaikham(mang[j]);
		//$("#"+mang[j]).dblclick();
	}
	
   }
function chonloaikham(rowId){
	if(window.id_bacsi=="0"){
				alert("Vui lòng chọn bác sĩ trước");
			}
			else{
				var gridData = jQuery("#rowed5").getRowData();
				if(gridData==""){
					s = jQuery("#rowed3").jqGrid('getGridParam','selarrrow');
					for(i=0;i<s.length;i++){
						var rowData = $("#rowed4").getRowData(rowId);   
			             window.ID_LoaiKham=rowData["ID_LoaiKham"];
			             window.GiaBaoChoBN=rowData["GiaBaoChoBN"];
			             window.ChiPhi=rowData["ChiPhi"];
			             window.conlai=rowData["conlai"];
			             be = '<span class="ui-state-error ui-state-hover "ondblclick=\"xoa();\" style="border:0"><span class="ui-icon  ui-icon-closethick" style="float: left; margin-right: .3em;"></span></span>';
						parameters =
										{
											
											initdata : {LoaiKham:ID_LoaiKham,ID_BacSy:s[i],Xoa:be,GiaBaoChoBN:GiaBaoChoBN,ChiPhi:ChiPhi,conlai:conlai},
											position :"last",
											useDefValues : false,
											useFormatter : false,
											addRowParams : {extraparam:{}}
										}
						jQuery("#rowed5").jqGrid('addRow',parameters);
					}
				}
				else{
					s = jQuery("#rowed3").jqGrid('getGridParam','selarrrow');
					var gridData = jQuery("#rowed5").getRowData();
					for(var i=0;i<s.length;i++){
						flag=0;
						for(var j=0;j<gridData.length;j++){
							//console.log(rowId+"=="+gridData[j]["LoaiKham"] +"&&"+ s[i]+"=="+gridData[j]["ID_BacSy"]);
							if(rowId==gridData[j]["LoaiKham"] && s[i]==gridData[j]["ID_BacSy"]){
									
									flag=1;
									
									break;
									
								}
								
							
							
						}

							if(flag==0){
								var ids = $("#rowed3").getDataIDs();
										
											var rowData = $("#rowed4").getRowData(rowId);   
								             window.ID_LoaiKham=rowData["ID_LoaiKham"];
								             window.GiaBaoChoBN=rowData["GiaBaoChoBN"];
								             window.ChiPhi=rowData["ChiPhi"];
								             window.conlai=rowData["conlai"];
								             be = '<span class="ui-state-error ui-state-hover "ondblclick=\"xoa();\" style="border:0"><span class="ui-icon  ui-icon-closethick" style="float: left; margin-right: .3em;"></span></span>';
											parameters =
															{
																
																initdata : {LoaiKham:ID_LoaiKham,ID_BacSy:s[i],Xoa:be,GiaBaoChoBN:GiaBaoChoBN,ChiPhi:ChiPhi,conlai:conlai},
																position :"last",
																useDefValues : false,
																useFormatter : false,
																addRowParams : {extraparam:{}}
															}
											jQuery("#rowed5").jqGrid('addRow',parameters);
										

							}
							else{
								//alert("Loại khám và bác sĩ này đã có rồi, không được thêm nữa!");
							}

					}
				}	
					
				
			}
			 var ids = $("#rowed5").getDataIDs();
            	for(i=0;i<ids.length;i++){
            		jQuery("#rowed5").jqGrid('setSelection',ids[0]);
	            		$("#"+ids[0]+"_ChiDinhCoHuu").focus();
		            	$("#"+ids[0]+"_ChiDinhCoHuu").select();
            		number_textbox("#"+ids[i]+"_ChiDinhCoHuu");
            		number_textbox("#"+ids[i]+"_HSDC_ChiDinhCoHuu");
            		number_textbox("#"+ids[i]+"_ChiDinhHopTac");
            		number_textbox("#"+ids[i]+"_HSDC_ChiDinhHopTac");
            		number_textbox("#"+ids[i]+"_PhuTa");
            		number_textbox("#"+ids[i]+"_HSDC_PhuTa");
            		number_textbox("#"+ids[i]+"_VoCam");
            		number_textbox("#"+ids[i]+"_HSDC_VoCam");
            		number_textbox("#"+ids[i]+"_HoanTatCoHuu");
            		number_textbox("#"+ids[i]+"_HSDC_HoanTatCoHuu");
            		number_textbox("#"+ids[i]+"_HoanTatHopTac");
            		number_textbox("#"+ids[i]+"_HSDC_HoanTatHopTac");


            	}
}
</script>