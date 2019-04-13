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
	margin-left:40px;
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
#dsdaravien{
	margin-left:10px;
	height: 24px;
	padding:0px !important;
	width: 140px;
	margin-top:-4px;
}
#sualuotkham{
	margin-left:10px;
	height: 24px;
	padding:0px !important;
	width: 135px;
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
<div id="dialog-chuataobenhan" title="Thông báo" style="display:none">
  Bệnh nhân chưa tạo bệnh án chính thức, vui lòng kích chuột phải chọn bệnh án cần tạo ?</p>
</div>
<div id="dialog-chucnangsong" title="Thông báo" style="display:none">
  Bạn có muốn cập nhật chức năng sống cho các bệnh nhân <span id="chucnangsong_tenkhoa" style="font-weight:bold"></span> không ?</p>
</div>
<div id="dialog-phieulinh" title="Thông báo" style="display:none">
  Bạn có muốn tạo phiếu lĩnh cho các bệnh nhân <span id="phieulinh_tenkhoa" style="font-weight:bold;"></span> không ?</p>
</div>
<div id="dialog-phieuxuat" title="Thông báo" style="display:none">
  Bạn có muốn tạo phiếu hoàn trả cho các bệnh nhân <span id="phieuxuat_tenkhoa" style="font-weight:bold"></span> không ?</p>
</div>
<ul id="menu" style="display:none" > 
    <li><a id="benhannoikhoa" href="#"><span class="ui-icon ui-icon-note"></span><span class="menu_text">Bệnh án nội khoa</span></a></li>
    <li><a id="benhanngoaikhoa" href="#"><span class="ui-icon ui-icon-note"></span><span class="menu_text">Bệnh án ngoại khoa</span></a></li>
    <li><a id="benhansankhoa" href="#"><span class="ui-icon ui-icon-note"></span><span class="menu_text">Bệnh án sản khoa</span></a></li>
    <li><a id="benhansanphukhoa" href="#"><span class="ui-icon ui-icon-note"></span><span class="menu_text">Bệnh án sản phụ khoa</span></a></li>
    <li><a id="benhanranghammat" href="#"><span class="ui-icon ui-icon-note"></span><span class="menu_text">Bệnh án răng hàm mặt</span></a></li>
    <li><a id="benhannhikhoa" href="#"><span class="ui-icon ui-icon-note"></span><span class="menu_text">Bệnh án nhi khoa</span></a></li>
    <li><a id="benhantaimuihong" href="#"><span class="ui-icon ui-icon-note"></span><span class="menu_text">Bệnh án tai mũi họng</span></a></li>
    <li><a id="benhanmat_lacvannhan" href="#"><span class="ui-icon ui-icon-note"></span><span class="menu_text">Bệnh án mắt(lạc vận nhãn)</span></a></li>
    <li><a id="benhanmat_glocom" href="#"><span class="ui-icon ui-icon-note"></span><span class="menu_text">Bệnh án mắt (glocom)</span></a></li>
    <li><a id="benhanmat_streem" href="#"><span class="ui-icon ui-icon-note"></span><span class="menu_text">Bệnh án mắt(streem)</span></a></li>
    <li><a id="benhansosinh" href="#"><span class="ui-icon ui-icon-note"></span><span class="menu_text">Bệnh án sơ sinh</span></a></li>
    <li><a id="benhandieuduongvaphuchoichucnang" href="#"><span class="ui-icon ui-icon-note"></span><span class="menu_text">Bệnh án điều dưỡng và phục hồi chức năng</span></a></li>
</ul>
<ul id="menu2" style="display:none" > 
	<li><a id="benhannoikhoa2" class="n_menu2 ui-state-disabled" href="#"><span class="ui-icon ui-icon-note"></span><span class="menu_text">Bệnh án nội khoa</span></a></li>
	<li><a id="benhanngoaikhoa2" class="n_menu2 ui-state-disabled"  href="#"><span class="ui-icon ui-icon-note"></span><span class="menu_text">Bệnh án ngoại khoa</span></a></li>
	<li><a id="benhansankhoa2" class="n_menu2 ui-state-disabled"  href="#"><span class="ui-icon ui-icon-note"></span><span class="menu_text">Bệnh án sản khoa</span></a></li>
	<li><a id="benhansanphukhoa2" class="n_menu2 ui-state-disabled"  href="#"><span class="ui-icon ui-icon-note"></span><span class="menu_text">Bệnh án sản phụ khoa</span></a></li>
	<li><a id="benhanranghammat2" class="n_menu2 ui-state-disabled"  href="#"><span class="ui-icon ui-icon-note"></span><span class="menu_text">Bệnh án răng hàm mặt</span></a></li>
	<li><a id="benhannhikhoa2" class="n_menu2 ui-state-disabled"  href="#"><span class="ui-icon ui-icon-note"></span><span class="menu_text">Bệnh án nhi khoa</span></a></li>
	<li><a id="benhantaimuihong2" class="n_menu2 ui-state-disabled"  href="#"><span class="ui-icon ui-icon-note"></span><span class="menu_text">Bệnh án tai mũi họng</span></a></li>
    <li><a id="benhanmat_lacvannhan2" class="n_menu2 ui-state-disabled"  href="#"><span class="ui-icon ui-icon-note"></span><span class="menu_text">Bệnh án mắt (lạc vận nhãn)</span></a></li>
    <li><a id="benhanmat_glocom2" class="n_menu2 ui-state-disabled"  href="#"><span class="ui-icon ui-icon-note"></span><span class="menu_text">Bệnh án mắt (glocom)</span></a></li>
    <li><a id="benhanmat_streem2" class="n_menu2 ui-state-disabled"  href="#"><span class="ui-icon ui-icon-note"></span><span class="menu_text">Bệnh án mắt (streem)</span></a></li>
    <li><a id="benhansosinh2" class="n_menu2 ui-state-disabled"  href="#"><span class="ui-icon ui-icon-note"></span><span class="menu_text">Bệnh án sơ sinh</span></a></li>
    <li><a id="benhandieuduongvaphuchoichucnang2" class="n_menu2 ui-state-disabled"  href="#"><span class="ui-icon ui-icon-note"></span><span class="menu_text">Bệnh án điều dưỡng và phục hồi chức năng</span></a></li>
</ul>
	<div style="height:40px; margin-top:10px; padding-left:20px; margin-left:15px; border-radius:4px; background:#F5F3E5; margin-right:5px; border: 1px solid #919191;box-shadow: 0 0 10px #A0A0A0;">
		Khoa: <input id='com_khoa' class='com_khoa'  placeholder="--Chọn khoa--"  >
        <input type="button" id="xemtatca" style="display:none" value="Xem tất cả" />
		<input type="button" id="tailai" value="Tải lại dữ liệu" />
        <input type="button" id="capnhatchucnangsong" value="Cập nhật phiếu theo dõi chức năng sống" />
        <input type="button" id="phieulinhthuoc" value="Phiếu lĩnh thuốc" />
        <input type="button" id="phieuhoantrathuoc" value="Phiếu hoàn trả thuốc" />
        <input type="button" id="dsdaravien" value="DS bệnh nhân đã ra viện" />
        <input type="button" id="sualuotkham" value="Sửa thông tin lượt khám" />
        
    </div>
	<div id="grid_phong_ban">
          <table id="rowed3" ></table>
    </div>
</body>
</html>

<script type="text/javascript">
jQuery(document).ready(function() {
	 $.dateEntry.setDefaults({spinnerImage: ''});
	//window.idphongban=$.cookie("phongbanclient");
	window.idphongban=<?=$_SESSION['user']['id_phongban']?>;
	//alert($.cookie("phongbanclient"));
	window.rowselect='';
	 openform_shortcutkey(); //mở bằng phím tắt được thiết lập trong DB
	  create_combobox_new('#com_khoa',create_khoa,'bw','','data_khoa',window.idphongban);
	//  create_combobox_disable("#com_khoa");
	var kiemtra=0;
	window.url_load='resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_danhsach&idphongban='+window.idphongban;
	setTimeout(function(){
		create_grid();
		resize_control();
	},100);
	shortcut_key();
	
	$( "#dialog-chuataobenhan" ).dialog({
      resizable: false,
      autoOpen:false,
      height:170,
      modal: true,
      buttons: {
        "OK": function() {
          $( this ).dialog( "close" );
        }
      }
    });
	
	$( "#dialog-chucnangsong" ).dialog({
      resizable: false,
	  autoOpen:false,
      height:170,
      modal: true,
      buttons: {
        "YES": function() {
          $( this ).dialog( "close" );
		  parent.postMessage('open_idluotkham;dau_hieu_sinh_ton_noi_tru;;;;;&idkhoa='+window.idphongban,'*');
        },
        'NO': function() {
          $( this ).dialog( "close" );
        }
      },open: function () {
		  $(this).closest('.ui-dialog').find('.ui-dialog-buttonpane button:eq(0)').focus(); 
		  $(this).closest('.ui-dialog').find('.ui-dialog-buttonpane button:eq(0)').addClass('n_btn1');
		   $(this).closest('.ui-dialog').find('.ui-dialog-buttonpane button:eq(1)').addClass('n_btn2');
		 //var hasFocus = $('.n_btn1').is(':focus');
			  $('.ui-dialog').keyup(function(e) {
				  if (e.keyCode === 37){
					  $('.n_btn1').focus(); 
					  $('.n_btn2').focusout();
				  }
				  if (e.keyCode === 39){
					  $('.n_btn2').focus(); 
					  $('.n_btn1').focusout();
				  }
				})
		}
    });
	$( "#dialog-phieulinh" ).dialog({
      resizable: false,
	  autoOpen:false,
      height:170,
      modal: true,
      buttons: {
        "YES": function() {
          $( this ).dialog( "close" );
		  parent.postMessage('open_idluotkham;phieu_linh_thuoc;;;;;&idkhoa='+window.idphongban+'&tenkhoa='+$("#com_khoa").val(),'*');
        },
        'NO': function() {
          $( this ).dialog( "close" );
        }
      },open: function () {
		  $(this).closest('.ui-dialog').find('.ui-dialog-buttonpane button:eq(0)').focus(); 
		  $(this).closest('.ui-dialog').find('.ui-dialog-buttonpane button:eq(0)').addClass('n_btn1');
		   $(this).closest('.ui-dialog').find('.ui-dialog-buttonpane button:eq(1)').addClass('n_btn2');
		 //var hasFocus = $('.n_btn1').is(':focus');
			  $('.ui-dialog').keyup(function(e) {
				  if (e.keyCode === 37){
					  $('.n_btn1').focus(); 
					  $('.n_btn2').focusout();
				  }
				  if (e.keyCode === 39){
					  $('.n_btn2').focus(); 
					  $('.n_btn1').focusout();
				  }
			  })
		}
    });
	$( "#dialog-phieuxuat" ).dialog({
      resizable: false,
	  autoOpen:false,
      height:170,
      modal: true,
      buttons: {
        "YES": function() {
          $( this ).dialog( "close" );
		  parent.postMessage('open_idluotkham;phieu_hoan_tra_thuoc;;;;;&idkhoa='+window.idphongban+'&tenkhoa='+$("#com_khoa").val(),'*');
        },
        'NO': function() {
          $( this ).dialog( "close" );
        }
      },open: function () {
		  $(this).closest('.ui-dialog').find('.ui-dialog-buttonpane button:eq(0)').focus(); 
		  $(this).closest('.ui-dialog').find('.ui-dialog-buttonpane button:eq(0)').addClass('n_btn1');
		   $(this).closest('.ui-dialog').find('.ui-dialog-buttonpane button:eq(1)').addClass('n_btn2');
		 //var hasFocus = $('.n_btn1').is(':focus');
			  $('.ui-dialog').keyup(function(e) {
				  if (e.keyCode === 37){
					  $('.n_btn1').focus(); 
					  $('.n_btn2').focusout();
				  }
				  if (e.keyCode === 39){
					  $('.n_btn2').focus(); 
					  $('.n_btn1').focusout();
				  }
				})
		}
    });
	
	$("#menu").menu();
	$("#menu2").menu();
	$(document).bind("contextmenu", function(e) {
            return false;
	});
	$(document).bind("mouseup", function(e) {
		$("#menu").hide();
	});
	$(document).bind("mouseup", function(e) {
		$("#menu2").hide();
	});
	
	$("#sualuotkham").click(function(e) {
		if(window.idluotkham>0){
			$.post('resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_getthongtinluotkhamnoitru&idluotkham='+window.idluotkham).done(function(data){
				data = $.trim(data);
				data = data.split(';;');
				if(data[6]==0){
					parent.postMessage('open_idbenhnhan;tao_benh_an_noi_tru;'+data[1]+';'+data[2]+';;'+data[3]+'__'+data[4]+';'+data[5]+'&oper=edit&id_ttluotkham='+data[1],'*');
				}else{
					tooltip_message("Lượt khám đã thanh toán");
				}
			});
		}else{
			tooltip_message("Vui lòng chọn lượt khám");
		}
    });
	
	$("#xemtatca").click(function(e) {
		$("#com_khoa").val('');
		window.url_load='resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_danhsachall';
		$("#rowed3").jqGrid('setGridParam',{datatype: 'json',url:window.url_load}).trigger('reloadGrid');
    });
	$("#dsdaravien").click(function(e) {
		parent.postMessage('open_idluotkham;ds_benhnhan_daravien;;;;;','*');
    });
	$("#capnhatchucnangsong").click(function(e) {
		$("#chucnangsong_tenkhoa").html($("#com_khoa").val());
		$( "#dialog-chucnangsong" ).dialog('open');
		
    });
	$("#phieulinhthuoc").click(function(e) {
		$("#phieulinh_tenkhoa").html($("#com_khoa").val());
		$( "#dialog-phieulinh" ).dialog('open');
    });
	$("#phieuhoantrathuoc").click(function(e) {
		$("#phieuxuat_tenkhoa").html($("#com_khoa").val());
		$( "#dialog-phieuxuat" ).dialog('open');
		
		//parent.postMessage('open_idluotkham;phieu_linh_thuoc;;;;;&idkhoa='+window.idphongban+'&tenkhoa='+$("#com_khoa").val(),'*');
    });
	
	$("#benhannoikhoa").bind("click", function(e) {
		var selr = jQuery('#rowed3').jqGrid('getGridParam','selrow');
		var rowData = jQuery('#rowed3').getRowData(window.rowselect);
			parent.postMessage('open_idluotkham;benh_an_noi_khoa;'+rowData['ID_LuotKham']+';'+rowData['ID_BenhNhan']+';;;&id_benhannoitru='+window.rowselect+'&idloaibenhan=1&tenbenhnhan='+rowData["HoLotBenhNhan"]+' '+rowData["TenBenhNhan"]+'&ngaytaobenhan='+rowData["NgayTaoBenhAn"]+'&idkhoa='+window.idphongban,'*');
	});
	$("#benhanngoaikhoa").bind("click", function(e) {
		var selr = jQuery('#rowed3').jqGrid('getGridParam','selrow');
		var rowData = jQuery('#rowed3').getRowData(window.rowselect);
			parent.postMessage('open_idluotkham;benh_an_ngoai_khoa;'+rowData['ID_LuotKham']+';'+rowData['ID_BenhNhan']+';;;&id_benhannoitru='+window.rowselect+'&idloaibenhan=2&tenbenhnhan='+rowData["HoLotBenhNhan"]+' '+rowData["TenBenhNhan"]+'&ngaytaobenhan='+rowData["NgayTaoBenhAn"]+'&idkhoa='+window.idphongban,'*');
	});
	$("#benhansankhoa").bind("click", function(e) {
		var selr = jQuery('#rowed3').jqGrid('getGridParam','selrow');
		var rowData = jQuery('#rowed3').getRowData(window.rowselect);
			parent.postMessage('open_idluotkham;benh_an_san_khoa;'+rowData['ID_LuotKham']+';'+rowData['ID_BenhNhan']+';;;&id_benhannoitru='+window.rowselect+'&idloaibenhan=3&tenbenhnhan='+rowData["HoLotBenhNhan"]+' '+rowData["TenBenhNhan"]+'&ngaytaobenhan='+rowData["NgayTaoBenhAn"]+'&idkhoa='+window.idphongban,'*');
	});
	$("#benhansanphukhoa").bind("click", function(e) {
		var selr = jQuery('#rowed3').jqGrid('getGridParam','selrow');
		var rowData = jQuery('#rowed3').getRowData(window.rowselect);
			parent.postMessage('open_idluotkham;benh_an_san_phu_khoa;'+rowData['ID_LuotKham']+';'+rowData['ID_BenhNhan']+';;;&id_benhannoitru='+window.rowselect+'&idloaibenhan=4&tenbenhnhan='+rowData["HoLotBenhNhan"]+' '+rowData["TenBenhNhan"]+'&ngaytaobenhan='+rowData["NgayTaoBenhAn"]+'&idkhoa='+window.idphongban,'*');
	});
	$("#benhanranghammat").bind("click", function(e) {
		var selr = jQuery('#rowed3').jqGrid('getGridParam','selrow');
		var rowData = jQuery('#rowed3').getRowData(window.rowselect);
			parent.postMessage('open_idluotkham;benh_an_rang_ham_mat;'+rowData['ID_LuotKham']+';'+rowData['ID_BenhNhan']+';;;&id_benhannoitru='+window.rowselect+'&idloaibenhan=5&tenbenhnhan='+rowData["HoLotBenhNhan"]+' '+rowData["TenBenhNhan"]+'&ngaytaobenhan='+rowData["NgayTaoBenhAn"]+'&idkhoa='+window.idphongban,'*');
	});
	$("#benhannhikhoa").bind("click", function(e) {
		var selr = jQuery('#rowed3').jqGrid('getGridParam','selrow');
		var rowData = jQuery('#rowed3').getRowData(window.rowselect);
			parent.postMessage('open_idluotkham;benh_an_nhi_khoa;'+rowData['ID_LuotKham']+';'+rowData['ID_BenhNhan']+';;;&id_benhannoitru='+window.rowselect+'&idloaibenhan=6&tenbenhnhan='+rowData["HoLotBenhNhan"]+' '+rowData["TenBenhNhan"]+'&ngaytaobenhan='+rowData["NgayTaoBenhAn"]+'&idkhoa='+window.idphongban,'*');
	});
	$("#benhantaimuihong").bind("click", function(e) {
		var selr = jQuery('#rowed3').jqGrid('getGridParam','selrow');
		var rowData = jQuery('#rowed3').getRowData(window.rowselect);
			parent.postMessage('open_idluotkham;benh_an_tai_mui_hong;'+rowData['ID_LuotKham']+';'+rowData['ID_BenhNhan']+';;;&id_benhannoitru='+window.rowselect+'&idloaibenhan=7&tenbenhnhan='+rowData["HoLotBenhNhan"]+' '+rowData["TenBenhNhan"]+'&ngaytaobenhan='+rowData["NgayTaoBenhAn"]+'&idkhoa='+window.idphongban,'*');

	});
	$("#benhanmat_lacvannhan").bind("click", function(e) {
		var selr = jQuery('#rowed3').jqGrid('getGridParam','selrow');
		var rowData = jQuery('#rowed3').getRowData(window.rowselect);
			parent.postMessage('open_idluotkham;benh_an_mat_lacvannhan;'+rowData['ID_LuotKham']+';'+rowData['ID_BenhNhan']+';;;&id_benhannoitru='+window.rowselect+'&idloaibenhan=8&tenbenhnhan='+rowData["HoLotBenhNhan"]+' '+rowData["TenBenhNhan"]+'&ngaytaobenhan='+rowData["NgayTaoBenhAn"]+'&idkhoa='+window.idphongban,'*');

	});
	$("#benhanmat_glocom").bind("click", function(e) {
		var selr = jQuery('#rowed3').jqGrid('getGridParam','selrow');
		var rowData = jQuery('#rowed3').getRowData(window.rowselect);
			parent.postMessage('open_idluotkham;benh_an_mat_glocom;'+rowData['ID_LuotKham']+';'+rowData['ID_BenhNhan']+';;;&id_benhannoitru='+window.rowselect+'&idloaibenhan=9&tenbenhnhan='+rowData["HoLotBenhNhan"]+' '+rowData["TenBenhNhan"]+'&ngaytaobenhan='+rowData["NgayTaoBenhAn"]+'&idkhoa='+window.idphongban,'*');

	});
	$("#benhanmat_streem").bind("click", function(e) {
		var selr = jQuery('#rowed3').jqGrid('getGridParam','selrow');
		var rowData = jQuery('#rowed3').getRowData(window.rowselect);
			parent.postMessage('open_idluotkham;benh_an_mat_streem;'+rowData['ID_LuotKham']+';'+rowData['ID_BenhNhan']+';;;&id_benhannoitru='+window.rowselect+'&idloaibenhan=10&tenbenhnhan='+rowData["HoLotBenhNhan"]+' '+rowData["TenBenhNhan"]+'&ngaytaobenhan='+rowData["NgayTaoBenhAn"]+'&idkhoa='+window.idphongban,'*');

	});
	$("#benhansosinh").bind("click", function(e) {
		var selr = jQuery('#rowed3').jqGrid('getGridParam','selrow');
		var rowData = jQuery('#rowed3').getRowData(window.rowselect);
			parent.postMessage('open_idluotkham;benh_an_so_sinh;'+rowData['ID_LuotKham']+';'+rowData['ID_BenhNhan']+';;;&id_benhannoitru='+window.rowselect+'&idloaibenhan=11&tenbenhnhan='+rowData["HoLotBenhNhan"]+' '+rowData["TenBenhNhan"]+'&ngaytaobenhan='+rowData["NgayTaoBenhAn"]+'&idkhoa='+window.idphongban,'*');

	});
	$("#benhandieuduongvaphuchoichucnang").bind("click", function(e) {
		var selr = jQuery('#rowed3').jqGrid('getGridParam','selrow');
		var rowData = jQuery('#rowed3').getRowData(window.rowselect);
			parent.postMessage('open_idluotkham;benh_an_dieu_duong_phcn;'+rowData['ID_LuotKham']+';'+rowData['ID_BenhNhan']+';;;&id_benhannoitru='+window.rowselect+'&idloaibenhan=12&tenbenhnhan='+rowData["HoLotBenhNhan"]+' '+rowData["TenBenhNhan"]+'&ngaytaobenhan='+rowData["NgayTaoBenhAn"]+'&idkhoa='+window.idphongban,'*');

	}); //Bệnh án điều dưỡng và phục hồi chức năng
	
	$("#tailai").click(function(){
		$("#rowed3").jqGrid('setGridParam',{datatype: 'json',url:window.url_load}).trigger('reloadGrid');
		//$("#rowed3").jqGrid('setGridParam',{datatype: 'json',url:"resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_danhsach&idphongban="+window.idphongban}).trigger('reloadGrid');
	});
	
	
	$("#tailai,#capnhatchucnangsong,#phieulinhthuoc,#phieuhoantrathuoc,#xemtatca,#dsdaravien,#sualuotkham").button();
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
		colNames:['Mã BN',"Họ lót BN","Tên BN","Tuổi","Giới","Đối tượng", 'Địa chỉ','Người tạo','Giờ tạo','Ngày tạo','Tên loại bệnh án','Phòng','Chẩn đoán nơi chuyển đến','Chẩn đoán Khoa điều trị','BS. Điều trị','ID_LuotKham','ID_LoaiBenhAnNoiTru','ID_BenhNhan','ID_PhongBan','NgayTaoBenhAn'],
		colModel:[
			{name:'MaBenhNhan',index:'MaBenhNhan', width:"4%", editable:false,align:'left',hidden:false},
			{name:'HoLotBenhNhan',index:'HoLotBenhNhan', width:"10%", editable:false,align:'left',hidden:false},
			{name:'TenBenhNhan',index:'TenBenhNhan', width:"10%", editable:false,align:'left',hidden:false},
			{name:'Tuoi',index:'Tuoi', width:"4%", editable:false,align:'left',hidden:false},
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
			{name:'Buong',index:'Buong', width:"5%", editable:false,align:'left',hidden:false},
			{name:'CD_NoiChuyenDen',index:'CD_NoiChuyenDen', width:"12%", editable:false,align:'left',hidden:false},
			{name:'CD_KhoaDieuTri',index:'CD_KhoaDieuTri', width:"12%", editable:false,align:'left',hidden:false},
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
			var rowData = jQuery('#rowed3').getRowData(id);
			window.idluotkham=rowData['ID_LuotKham'];
		},
		onRightClickRow: function(rowid, iRow, iCol, e) {
			var rowData = jQuery('#rowed3').getRowData(rowid);
			var grid = jQuery('#rowed3');
			var colModel = grid.getGridParam('colModel');

			var colName = colModel[iCol].name;
			var colIndex = colModel[iCol].index;
			
			window.rowData_grdangcho = rowData;
			
			if(rowData["ID_LoaiBenhAnNoiTru"]==""){
				if ($.trim(rowData[colName]) != "") {
					window.rowid_danhcho = rowid;
					window.from = colModel[iCol].name;
					if ($("#menu").width() + e.pageX > $(document).width()) {
						$("#menu").css('left', e.pageX - $("#menu").width() + "px");
					} else {
						$("#menu").css('left', e.pageX + "px");
					}
					if ($("#menu").height() + 30 + e.pageY > $(document).height()) {
						$("#menu").css('top', e.pageY - $("#menu").height() + "px");
					} else {
						$("#menu").css('top', e.pageY + "px");
					}
					$("#menu").show(300);
				}				
				$("#benhannoikhoa2,#benhanngoaikhoa2,#benhansankhoa2,#benhansanphukhoa2,#benhanranghammat2,#benhannhikhoa2,#benhantaimuihong2,#benhanmat_lacvannhan2,#benhanmat_glocom2,#benhanmat_streem2,#benhansosinh2,#benhandieuduongvaphuchoichucnang").hide();
				$("#benhannoikhoa,#benhanngoaikhoa,#benhansankhoa,#benhansanphukhoa,#benhanranghammat,#benhannhikhoa,#benhantaimuihong,#benhanmat_lacvannhan,#benhanmat_glocom,#benhanmat_streem,#benhansosinh,#benhandieuduongvaphuchoichucnang").show();
			}else{
				if ($.trim(rowData[colName]) != "") {
					window.rowid_danhcho = rowid;
					window.from = colModel[iCol].name;
					if ($("#menu2").width() + e.pageX > $(document).width()) {
						$("#menu2").css('left', e.pageX - $("#menu2").width() + "px");
					} else {
						$("#menu2").css('left', e.pageX + "px");
					}
					if ($("#menu").height() + 30 + e.pageY > $(document).height()) {
						$("#menu2").css('top', e.pageY - $("#menu2").height() + "px");
					} else {
						$("#menu2").css('top', e.pageY + "px");
					}
					$("#menu2").show(300);
				}	
				$("#benhannoikhoa,#benhanngoaikhoa,#benhansankhoa,#benhansanphukhoa,#benhanranghammat,#benhannhikhoa,#benhantaimuihong,#benhanmat_lacvannhan,#benhanmat_glocom,#benhanmat_streem,#benhansosinh,#benhandieuduongvaphuchoichucnang").hide();
				$("#benhannoikhoa2,#benhanngoaikhoa2,#benhansankhoa2,#benhansanphukhoa2,#benhanranghammat2,#benhannhikhoa2,#benhantaimuihong2,#benhanmat_lacvannhan2,#benhanmat_glocom2,#benhanmat_streem2,#benhansosinh2,#benhandieuduongvaphuchoichucnang2").show();
				//$("#benhannoikhoa,#benhanngoaikhoa,#benhansankhoa,#benhansanphukhoa,#benhanranghammat,#benhannhikhoa,#benhantaimuihong").addClass("ui-state-disabled");
				//$("#benhannoikhoa,#benhanngoaikhoa,#benhansankhoa,#benhansanphukhoa,#benhanranghammat,#benhannhikhoa,#benhantaimuihong").unbind();
			}
			

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
				parent.postMessage('open_idluotkham;benh_an_so_sinh;'+rowData['ID_LuotKham']+';'+rowData['ID_BenhNhan']+';;;&id_benhannoitru='+window.rowselect+'&idloaibenhan=11&tenbenhnhan='+rowData["HoLotBenhNhan"]+' '+rowData["TenBenhNhan"]+'&ngaytaobenhan='+rowData["NgayTaoBenhAn"]+'&idkhoa='+window.idphongban,'*');
			}else if(rowData["ID_LoaiBenhAnNoiTru"]==12){
				parent.postMessage('open_idluotkham;benh_an_dieu_duong_phcn;'+rowData['ID_LuotKham']+';'+rowData['ID_BenhNhan']+';;;&id_benhannoitru='+window.rowselect+'&idloaibenhan=11&tenbenhnhan='+rowData["HoLotBenhNhan"]+' '+rowData["TenBenhNhan"]+'&ngaytaobenhan='+rowData["NgayTaoBenhAn"]+'&idkhoa='+window.idphongban,'*');
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
		caption: "<span class='demgio' style='display:block;'>Danh sách Bệnh nhân nhập viện nội trú [0] ( Tải lại sau " + reload_luoi_danhsach + " giây)</span> <div class='grid1 '><div class='hinhvuong bnchuataobenhan'></div><label class='diengiai'>Chưa tạo bệnh án</label></div>",

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
                    $('#gbox_rowed3 .ui-jqgrid-title span.demgio').html(" Danh sách Bệnh nhân nhập viện nội trú [ "+$("#rowed3").getGridParam("reccount")+" ] (Tải lại sau " + tam + " giây)");
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