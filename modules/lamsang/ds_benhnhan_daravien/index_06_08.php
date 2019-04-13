<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<style>
#rowed3 td {	 
		word-wrap:normal!important;
		white-space:nowrap;
	}
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
#rowed3_frozen tr.rowed3ghead_0 td,
#rowed3_frozen tr.rowed3ghead_1 td{
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
#rowed3_frozen{
	margin-top:-1px;
}
#tongcong{
	box-shadow:none!important;	
	padding: 0px!important;
	margin-left: 3px;
    margin-top: 4px;
	text-align:right;
}.n_menu2{
display:none;
}
#tailai>span.ui-button-text,#capnhatchucnangsong>span.ui-button-text,#phieulinhthuoc>span.ui-button-text{
padding:0px !important;
}
#xemtatca{
	margin-left:40px;
	height: 24px;
	padding:0px !important;
	width: 85px;
	margin-top:-4px;
}
#tailai{
	margin-left:10px;
	height: 24px;
	padding:0px !important;
	width: 85px;
	margin-top:-4px;
}
#capnhatchucnangsong{
	margin-left:10px;
	height: 24px;
	padding:0px !important;
	width: 230px;
	margin-top:-4px;
}
#phieulinhthuoc{
	margin-left:10px;
	height: 24px;
	padding:0px !important;
	width: 100px;
	margin-top:-4px;
}
#phieuhoantrathuoc{
	margin-left:10px;
	height: 24px;
	padding:0px !important;
	width: 120px;
	margin-top:-4px;	
}
#com_khoa,.com_khoa_button{
	margin-top:10px;
}
#grid_phong_ban{
	padding-top:0px !important;
}
.grid1{
	position:absolute;
	top:3px;
	left:450px;
}
.bnchuataobenhan{
	background:#FF6347;
}
#gs_NgayTao{
	text-align:center;
}
</style>
</head>
<body>
	<div style="height:40px; margin-top:10px; padding-left:20px; margin-left:15px; border-radius:4px; background:#F5F3E5; margin-right:5px; border: 1px solid #919191;box-shadow: 0 0 10px #A0A0A0;">
		Khoa: <input id='com_khoa' class='com_khoa'  placeholder="--Chọn khoa--"  >
        <input type="button" id="xemtatca" value="Xem tất cả" />
		<input type="button" id="tailai" value="Tải lại dữ liệu" />
        
    </div>
	<div id="grid_phong_ban">
          <table id="rowed3" ></table>
    </div>
</body>
</html>

<script type="text/javascript">
jQuery(document).ready(function() {
	 $.dateEntry.setDefaults({spinnerImage: ''});
	window.idphongban=<?=$_SESSION['user']['id_phongban']?>;
	window.rowselect='';
	 openform_shortcutkey(); //mở bằng phím tắt được thiết lập trong DB
	  create_combobox_new('#com_khoa',create_khoa,'bw','','data_khoa',window.idphongban);
	var kiemtra=0;
	window.url_load='resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_danhsach&idphongban='+window.idphongban;
	setTimeout(function(){
		create_grid();
		resize_control();
	},100);
	shortcut_key();

	$("#xemtatca").click(function(e) {
		$("#com_khoa").val('');
		window.url_load='resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_danhsachall';
		$("#rowed3").jqGrid('setGridParam',{datatype: 'json',url:window.url_load}).trigger('reloadGrid');
    });
	$("#tailai").click(function(){
		$("#rowed3").jqGrid('setGridParam',{datatype: 'json',url:window.url_load}).trigger('reloadGrid');
	});
	

	$("#tailai,#xemtatca").button();
	phanquyen();
})	
jQuery(window).resize(function() {
	 resize_control()
});
var rowed3_curentsel;
function create_grid(){
	//window.kiemtrasearch = true;
	 $("#rowed3").jqGrid({
		url:window.url_load,
		//url:'',
		datatype: "json",
		colNames:['Mã BN',"Họ lót BN","Tên BN","Tuổi","Giới","Đối tượng", 'Địa chỉ','Người tạo','Giờ tạo','Ngày tạo','Tên loại bệnh án','Chẩn đoán nơi chuyển đến','Chẩn đoán Khoa điều trị','Giờ ra','Ngày ra','BS. Điều trị','ID_LuotKham','ID_LoaiBenhAnNoiTru','ID_BenhNhan','ID_PhongBan','NgayTaoBenhAn'],
		colModel:[
			{name:'MaBenhNhan',index:'MaBenhNhan', width:"4%", editable:false,align:'left',hidden:false},
			{name:'HoLotBenhNhan',index:'HoLotBenhNhan', width:"10%", editable:false,align:'left',hidden:false},
			{name:'TenBenhNhan',index:'TenBenhNhan', width:"5%", editable:false,align:'left',hidden:false},
			{name:'Tuoi',index:'Tuoi', width:"4%", editable:false,align:'center',hidden:false},
			{name:'GioiTinh',index:'GioiTinh', width:"5%", editable:false,align:'center',hidden:false},
			{name:'DoiTuong',index:'DoiTuong', width:"5%", editable:false,align:'center',hidden:false},
			{name:'DiaChi',index:'DiaChi', width:"10%", editable:false,align:'left',hidden:true},
			{name:'NguoiTao',index:'NguoiTao', width:"5%", editable:false,align:'center',hidden:false},
			{name:'GioTao',index:'GioTao', width:"4%", editable:false,align:'center',hidden:false},
			{name:'NgayTao',index:'NgayTao', width:"5%", editable:false,align:'center', searchrules: {date: true}, sorttype: "date", searchoptions: {dataInit: function(el) {
                                $(el).dateEntry({dateFormat:$.cookie("ngayDateEntry")})
								
	
								$(el).datepicker({   
									dateFormat: $.cookie("ngayJqueryUi"),
									onSelect: function() {
										if (this.id.substr(0, 3) === "gs_") {
										  
											setTimeout(function() {
												$("#rowed3")[0].triggerToolbar();
											}, 100);
										}
									}
								});
                            }},  formatter: "date", formatoptions: {srcformat: 'd/m/y', newformat: 'd/m/y'}, hidden: false, },
							
			{name:'Ten_LoaiBenhAnNoiTru',index:'Ten_LoaiBenhAnNoiTru', width:"12%", editable:false,align:'left',hidden:false},
			{name:'CD_NoiChuyenDen',index:'CD_NoiChuyenDen', width:"15%", editable:false,align:'left',hidden:true},
			{name:'CD_KhoaDieuTri',index:'CD_KhoaDieuTri', width:"15%", editable:false,align:'left',hidden:false},
			{name:'GioRaVien',index:'GioRaVien', width:"4%", editable:false,align:'center',hidden:false},
			{name:'NgayRaVien',index:'NgayRaVien', width:"5%", editable:false,align:'center', searchrules: {date: true}, sorttype: "date", searchoptions: {dataInit: function(el) {
                                $(el).dateEntry({dateFormat:$.cookie("ngayDateEntry")})
								
	
								$(el).datepicker({   
									dateFormat: $.cookie("ngayJqueryUi"),
									onSelect: function() {
										if (this.id.substr(0, 3) === "gs_") {
										  
											setTimeout(function() {
												$("#rowed3")[0].triggerToolbar();
											}, 100);
										}
									}
								});
                            }},  formatter: "date", formatoptions: {srcformat: 'd/m/y', newformat: 'd/m/y'}, hidden: false, },
							
			{name:'BSDieuTri',index:'BSDieuTri', width:"5%", editable:false,align:'center',hidden:false},
			{name:'ID_LuotKham',index:'ID_LuotKham', width:"40%", editable:false,align:'left',hidden:true},
			{name:'ID_LoaiBenhAnNoiTru',index:'ID_LoaiBenhAnNoiTru', width:"40%", editable:false,align:'left',hidden:true},
			{name:'ID_BenhNhan',index:'ID_BenhNhan', width:"40%", editable:false,align:'left',hidden:true},
			{name:'ID_PhongBan',index:'ID_PhongBan', width:"40%", editable:false,align:'left',hidden:true},
			{name:'NgayTaoBenhAn',index:'NgayTaoBenhAn', width:"40%", editable:false,align:'left',hidden:true},
			
		],

		loadonce: true,
		scroll: false,
		//rownum = false,
		//treeGrid = false,	 
		modal:true,	 	
		pager: '#prowed3',	
		rowNum: 100,
		gridview: true,
		pginput:false,
		pgbuttons:false,
		rowList:[],
		height:100,
		width: 100,
		viewrecords: false,	
		ignoreCase:true,
		shrinkToFit:true,
		grouping: false,
		stringResult:true,		
		onSelectRow: function(id){
			window.rowselect=id;
		},
		onRightClickRow: function(rowid, iRow, iCol, e) {
			
		},
		ondblClickRow: function (rowId, rowIndex, columnIndex) {
			//var selr = jQuery('#rowed3').jqGrid('getGridParam','selrow');
			var rowData = jQuery('#rowed3').getRowData(window.rowselect);
			if(rowData["ID_LoaiBenhAnNoiTru"]==1){
				parent.postMessage('open_idluotkham;benh_an_noi_khoa;'+rowData['ID_LuotKham']+';'+rowData['ID_BenhNhan']+';;;&id_benhannoitru='+window.rowselect+'&idloaibenhan=1&tenbenhnhan='+rowData["HoLotBenhNhan"]+' '+rowData["TenBenhNhan"]+'&ngaytaobenhan='+rowData["NgayTaoBenhAn"]+'&ngaytaobenhan='+rowData["NgayTaoBenhAn"]+'&idkhoa='+window.idphongban,'*');
			}else if(rowData["ID_LoaiBenhAnNoiTru"]==2){
				parent.postMessage('open_idluotkham;benh_an_ngoai_khoa;'+rowData['ID_LuotKham']+';'+rowData['ID_BenhNhan']+';;;&id_benhannoitru='+window.rowselect+'&idloaibenhan=2&tenbenhnhan='+rowData["HoLotBenhNhan"]+' '+rowData["TenBenhNhan"]+'&ngaytaobenhan='+rowData["NgayTaoBenhAn"]+'&idkhoa='+window.idphongban,'*');
			}else if(rowData["ID_LoaiBenhAnNoiTru"]==3){
				parent.postMessage('open_idluotkham;benh_an_san_khoa;'+rowData['ID_LuotKham']+';'+rowData['ID_BenhNhan']+';;;&id_benhannoitru='+window.rowselect+'&idloaibenhan=3&tenbenhnhan='+rowData["HoLotBenhNhan"]+' '+rowData["TenBenhNhan"]+'&ngaytaobenhan='+rowData["NgayTaoBenhAn"]+'&idkhoa='+window.idphongban,'*');
			}else if(rowData["ID_LoaiBenhAnNoiTru"]==4){
				parent.postMessage('open_idluotkham;benh_an_san_phu_khoa;'+rowData['ID_LuotKham']+';'+rowData['ID_BenhNhan']+';;;&id_benhannoitru='+window.rowselect+'&idloaibenhan=4&tenbenhnhan='+rowData["HoLotBenhNhan"]+' '+rowData["TenBenhNhan"]+'&ngaytaobenhan='+rowData["NgayTaoBenhAn"]+'&idkhoa='+window.idphongban,'*');
			}else if(rowData["ID_LoaiBenhAnNoiTru"]==5){
				parent.postMessage('open_idluotkham;benh_an_rang_ham_mat;'+rowData['ID_LuotKham']+';'+rowData['ID_BenhNhan']+';;;&id_benhannoitru='+window.rowselect+'&idloaibenhan=5&tenbenhnhan='+rowData["HoLotBenhNhan"]+' '+rowData["TenBenhNhan"]+'&ngaytaobenhan='+rowData["NgayTaoBenhAn"]+'&idkhoa='+window.idphongban,'*');
			}else if(rowData["ID_LoaiBenhAnNoiTru"]==6){
				parent.postMessage('open_idluotkham;benh_an_nhi_khoa;'+rowData['ID_LuotKham']+';'+rowData['ID_BenhNhan']+';;;&id_benhannoitru='+window.rowselect+'&idloaibenhan=6&tenbenhnhan='+rowData["HoLotBenhNhan"]+' '+rowData["TenBenhNhan"]+'&ngaytaobenhan='+rowData["NgayTaoBenhAn"]+'&idkhoa='+window.idphongban,'*');
			}else if(rowData["ID_LoaiBenhAnNoiTru"]==7){
				parent.postMessage('open_idluotkham;benh_an_tai_mui_hong;'+rowData['ID_LuotKham']+';'+rowData['ID_BenhNhan']+';;;&id_benhannoitru='+window.rowselect+'&idloaibenhan=7&tenbenhnhan='+rowData["HoLotBenhNhan"]+' '+rowData["TenBenhNhan"]+'&ngaytaobenhan='+rowData["NgayTaoBenhAn"]+'&idkhoa='+window.idphongban,'*');
			}else if(rowData["ID_LoaiBenhAnNoiTru"]==8){
				parent.postMessage('open_idluotkham;benh_an_mat_lacvannhan;'+rowData['ID_LuotKham']+';'+rowData['ID_BenhNhan']+';;;&id_benhannoitru='+window.rowselect+'&idloaibenhan=8&tenbenhnhan='+rowData["HoLotBenhNhan"]+' '+rowData["TenBenhNhan"]+'&ngaytaobenhan='+rowData["NgayTaoBenhAn"]+'&idkhoa='+window.idphongban,'*');
			}
			else if(rowData["ID_LoaiBenhAnNoiTru"]==9){
				parent.postMessage('open_idluotkham;benh_an_mat_glocom;'+rowData['ID_LuotKham']+';'+rowData['ID_BenhNhan']+';;;&id_benhannoitru='+window.rowselect+'&idloaibenhan=9&tenbenhnhan='+rowData["HoLotBenhNhan"]+' '+rowData["TenBenhNhan"]+'&ngaytaobenhan='+rowData["NgayTaoBenhAn"]+'&idkhoa='+window.idphongban,'*');
			}
			else if(rowData["ID_LoaiBenhAnNoiTru"]==10){
				parent.postMessage('open_idluotkham;benh_an_mat_streem;'+rowData['ID_LuotKham']+';'+rowData['ID_BenhNhan']+';;;&id_benhannoitru='+window.rowselect+'&idloaibenhan=10&tenbenhnhan='+rowData["HoLotBenhNhan"]+' '+rowData["TenBenhNhan"]+'&ngaytaobenhan='+rowData["NgayTaoBenhAn"]+'&idkhoa='+window.idphongban,'*');
			}
			else if(rowData["ID_LoaiBenhAnNoiTru"]==11){
				parent.postMessage('open_idluotkham;benh_an_sosinh;'+rowData['ID_LuotKham']+';'+rowData['ID_BenhNhan']+';;;&id_benhannoitru='+window.rowselect+'&idloaibenhan=11&tenbenhnhan='+rowData["HoLotBenhNhan"]+' '+rowData["TenBenhNhan"]+'&ngaytaobenhan='+rowData["NgayTaoBenhAn"]+'&idkhoa='+window.idphongban,'*');
			}else{
				$( "#dialog-chuataobenhan" ).dialog('open');
				//tooltip_message("Bệnh nhân chưa tạo bệnh án chính thức, vui lòng kích chuột phải chọn bệnh án cần tạo");
			}
			

 		},
		loadComplete: function(data) {
			var tmp1 = $("#rowed3").jqGrid('getDataIDs'); 
			for(var i=0;i < tmp1.length;i++){
				var rowData = $("#rowed3").getRowData(tmp1[i]);	
				if(rowData["ID_LoaiBenhAnNoiTru"]==""){
					//$("#rowed3").jqGrid('setRowData', tmp1[i], false, { color: 'red',border:'1px solid #BBBBBB' });
					jQuery("#rowed3").jqGrid('setCell', tmp1[i], 'MaBenhNhan', '', {'background': '#FF6347'});
				}
			}
			if(window.rowselect!=''){
				jQuery('#rowed3').jqGrid('setSelection',window.rowselect); 
			}
			timer_title_danhsach("stop");
				//timer_danhsach("start");
			timer_title_danhsach("start");
		},
		caption: "<span class='demgio' style='display:block;'>Danh sách Bệnh nhân đã ra viện [0] ( Tải lại sau " + reload_luoi_danhsach + " giây)</span>",

	});
 $("#rowed3").jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn",  stringResult: true});
 $("#rowed3").jqGrid('navGrid', "#prowed3", {add: false, edit: false, del: false, search: false, refresh: false,prmView: false, closeAfterEdit: true, clearAfterAdd: true, navkeys: [true, 38, 40], closeOnEscape: true});
 $("#rowed3").jqGrid('bindKeys', {});
 
	
}
 var reload_luoi_danhsach =<?php echo (get_system_config_("ThoiGianRefreshHangDoiDSBNTaoBenhAnNoiTru")) ?>;
var timer;
var timer1;	
 function timer_danhsach(_value) {
        if (_value != "stop") {
            timer = setInterval(function() {
			// if (window.kiemtrasearch == true) {
			//	$("#rowed3").jqGrid('setGridParam',{url:'resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_danhsach&idphongban='+$.cookie("phongbanclient")}).trigger('reloadGrid');
			//alert();
			//}
		   }, (reload_luoi_danhsach * 1000));
            powerXepHang_luoidangcho = 1;
        } else {
            clearInterval(timer);
            powerXepHang_luoidangcho = 0;
        }
    }
    function timer_title_danhsach(_value) {
        if (_value != "stop") {
            var bodem = 0;

            var tam = reload_luoi_danhsach;

            timer1 = setInterval(function() {
              //  if (window.kiemtrasearch == true) {
                    $('#gbox_rowed3 .ui-jqgrid-title span.demgio').html(" Danh sách Bệnh nhân đã ra viện [ "+$("#rowed3").getGridParam("reccount")+" ] (Tải lại sau " + tam + " giây)");
					if(tam==1){
						//$('#rowed3').jqGrid('clearGridData');
						$("#tailai").click();
					}
                    bodem += 1;
                    tam--;
                    if (reload_luoi_danhsach == bodem) {
                        bodem = 0;
                        tam = reload_luoi_danhsach;
                    }
              //  }
            }, (1000));
        } else
        {
           // $('#gbox_rowed3 .ui-jqgrid-title span.demgio').html("Danh sách Bệnh nhân chưa nhập viện (Đang dừng xếp hàng. Click vào đây để bật xếp hàng)");
            clearInterval(timer1);

        }
    }

function resize_control(){
	$("#grid_phong_ban").css('width',$(window).width()-22);
	$("#rowed3").setGridWidth($("#grid_phong_ban").width());
	$("#rowed3").setGridHeight($(window).height()-$("#form_danh_muc_phong_ban").height()-$("#panel_main1").height()-140);
}
 function create_khoa(elem, datalocal) {
        datalocal = jQuery.parseJSON(datalocal);
        $(elem).jqGrid({
            datastr: datalocal,
            datatype: "jsonstring",
            colNames: ['Tên khoa'],
            colModel: [
                {name: 'tenkhoa', index: 'tenkhoa', hidden: false,width:7},
                
            ],
            hidegrid: false,
            gridview: true,
            loadonce: true,
            scroll: false,
            modal: true,
            rowNum: 200000,
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
				window.idphongban=id;
				window.url_load='resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_danhsach&idphongban='+window.idphongban;
				$("#rowed3").jqGrid('setGridParam',{datatype: 'json',url:window.url_load}).trigger('reloadGrid');
             /// var rowData = $(this).getRowData(id);

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