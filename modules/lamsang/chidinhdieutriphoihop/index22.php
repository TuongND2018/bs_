<!--author: Phan Nam-->
<style type="text/css">
.bongmo{
	background: #aaaaaa;
	opacity: .3;	
}
#n_dangluu{
	position:relative;
	top: -48%;
	left: 45%;
	width: auto;
	z-index:999;
	padding: 3px;
	margin: 5px;
	height:22px;
	width:100px;
	text-align: center;
	font-weight: bold;
	display: block;
	border:solid 2px #DFD9C3;
	font-size:13px;
	background:#FBFAF5;
	color:#55A616;
	box-shadow: 2px #919191;
}
.tooltips{
	left:900px !important;
}
.frame_u78787878975f,.frame_u78787878975f2,.frame_u78787878975f3,.frame_u78787878975f4{
	width:300px !important;
}
.nam-hover:hover{
	color:#000;
	background:#008DDF!important;
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
	#n_menu_left{
		margin:10px;
		}
	#chongoikham{
	margin-top: -28px;
	vertical-align: top;
	width: 100px;
	height: 15px;
	float: right;
	margin-right: 10px;	
}
#xemtoathuoc{
	margin-top: -23px;
	vertical-align: top;
	width: 100px;
	height: 15px;
	float: right;
	margin-right: 120px;	
}
#botton{
	position:absolute;  
  	botton:0px;  
	width:98%;  
	height:20px;   /* Height of the footer */  	
	border-radius: 6px 6px 6px 6px;
	border: 1px solid #d4ccb0;
	padding: 10px;
	margin-left:2px;
	margin-top:3px;
	background:#FBFBF5;
}#hentrakq{
	float: left;
	margin-left: 4%;
	margin-top: -2px;
	
}#bt_left{
	float: left;
	min-width: 450px;
	margin-top: 6px;	
}#bt_right{
	float: left;
	margin-top: -2px;
	width: 800px;	
	
}
#patient_info{
	margin-top: 5px;
	margin-left: 10px;
	}
#n_top{
	border-radius: 6px 6px 6px 6px;
	border: 1px solid #d4ccb0;
	height:78px;
	margin: 5px 0px -5px 0px;
	background:#FBFBF5;
}#n_top_right{
	float: right;
	margin-top: -30px;
	margin-right: 10px;
	}
input.custom_button_n[type="button"] {
    background: none repeat scroll 0 0 rgba(0, 0, 0, 0);
    border: medium none;
    font-size: 11px;
    height: 17px !important;
    outline: medium none;
    text-decoration: underline;
    text-shadow: 0 1px 0 rgba(255, 255, 255, 0.6);
    width: 50px !important;
	color:#00F;
}input.custom_button_n[type="button"]:hover{
	color:red;
	}

select.editable{
	width:100px!important;
	height: 20px!important;
}#tongtien{
	margin-left:237px;
	margin-top:4px;
}.slmoingay input[type="text"].editable,.songay input[type="text"].editable{
	width:70%!important;
	text-align:center;
	
	}
select.editable {
    height: 20px !important;
    width: 80px !important;
	padding:0px!important; 
}#n_top_right{
	display:none;
	}#patient_info{
		width:100%;
}#gbox_xemtoathuoc_right{
	left: 508px;
    position: absolute;
    top: 6px;
	
}
#btn_cddatra,#btn_cdmoi{
		width: 2%;
}#thanhtien,#phithuchien{
	box-shadow:none!important;	
	padding: 0px!important;
	}.no-close .ui-dialog-titlebar-close {
    display: none;
}.ui-button-text{
	padding:0em  !important;
}.ui-dialog .ui-dialog-buttonpane button {
	width:40px;
	height:30px;
}.data_chongoikham{
	width:1306px!important;
	height:346px !important;
}
</style>
<!--$("#data_goikham ").setGridWidth($(".data_chongoikham").width() - 300); 1306_846
		$("#data_goikham").setGridHeight($(".data_chongoikham").height() - 500);
		$("#data_loaikham ").setGridWidth($(".data_chongoikham").width() - 300);
		$("#data_loaikham").setGridHeight($(".data_chongoikham").height() - 230);-->

<body> 
<input type="hidden" id="dialog_report" name="dialog_report" value="">
<input type="hidden" id="xemtruockhiin" name="xemtruockhiin" value="1">

<div id="dialog" title="Lý do hủy bỏ" style="display:none">
  <textarea id="lydohuybo" style="width:375px; height:100px;" ></textarea>
  <input type="hidden" id="idk" value="" />
</div>
<div id="dialog2" title="Thông báo" style="display:none">
	Bạn có chắc chắn muốn hủy chỉ định này?
  <input type="hidden" id="idk2" value="" />
</div>
<div id="dialog_loi" title="Thông báo" style="display:none">
Vui lòng chọn một lượt khám để thực hiện chức năng này!!!
</div>
 <div  class="data_chongoikham" title="Chọn gói khám">
    <table id="data_goikham">
    </table>   
    <br />
	<table id="data_loaikham">
    </table>   
  </div>
  <div  class="xemtoathuoc" title="Xem toa thuốc">
     <table id="xemtoathuoc_left">
     </table>   
     <table id="xemtoathuoc_right">
      </table>   
   </div>
 
	<div id='n_top' >
	<div class="patient_info"> </div>
	<div id='n_top_right' >
	    <a  id="ghichu" style="margin-left: 5px;" href="#" > Ghi chú</a>
        
        <a  id="thongtinbn" style="margin-left: 5px;"  href="#" > Thông tin bệnh nhân </a>

	</div>
	</div>
    <div id="panel_main" style="margin-top:10px;" >  
     <!-- <input type="hidden" id="idluotkham" value="257659" /> -->
   <input type="hidden" id="idluotkham" value="<?php if(isset($_GET['idluotkham'])){ echo $_GET['idluotkham'];} ?>" /> 
    <input type="hidden" id="idphongbanchuyenmon"  value="1" />
    
	<input type="hidden" id="idbenhnhan" value="" />
    <input type="hidden" id="mabenhnhan" value="" />
    <input type="hidden" id="hotenbenhnhan"  value="" />

	<div class="ui-layout-west ui-widget-content left_col">   <table id="rowed3" ></table></div>
        <div class="center_col ui-widget-content ui-layout-center">  <table id="rowed4" ></table> </div>
        <div class="ui-layout-east ui-widget-content right_col">
        <div id='n_menu'>
        <div id='n_menu_left'>
        <a  id="chitietquota" style="margin-left: 5px;" href="#" > Chi tiết quota</a>
        <a  id="miengiam" style="margin-left: 5px;"  href="#" > Miễn giảm </a>
		<span id="thongbao" style="margin-left: 30px; font-weight:bold; color:#FF0000;"> </span>
        </div>
        <a  id="xemtoathuoc" style="margin-left: 5px;"  href="#" > Xem toa thuốc </a>
        <a  id="chongoikham" class="fm-button ui-state-default ui-corner-all "  > Chọn gói khám</a>

   		</div>
        <table id="rowed5" ></table> 
       <!-- <div id="prowed5"><div id="tongtien">Tổng tiền: <span id="tien"><input id="thanhtien" class="disable" type="text" value="0" readonly disabled style="width:73px;background:#4CA109;border:1px solid #327E04; color: #FFFFFF;font-weight: bold;  margin-left: 34px; text-align:right"   /> <input id="phithuchien" class="disable" type="text" value="0" readonly disabled style="width:73px;background:#4CA109;border:1px solid #327E04; color: #FFFFFF;font-weight: bold; margin-left: 64px; text-align:right" /></span></div></div> -->
            <div id='n_bt'> </div>
            <div id="n_dangluu" style="display:none">
                 Đang lưu...
            </div>
		</div>
    </div>
    <div id='botton' >
    	<div id="bt_left" style=" min-width: 450px; ">
			<div id='dukiencokq'  style=" float: left; margin-left: 1%; ">
				Giờ dự kiến có KQ: <span id="hienthidukiencokq"> </span>
			  </div>
			 <div id='hentrakqmoi' style=" float: left; margin-left: 7%; ">
				Giờ hẹn trả KQ mới nhất: <span id="hienthihentrakqmoi"> </span>
			  </div>
           </div>
           <div id="bt_right">
				<a  id="hentrakq" class="fm-button ui-state-default ui-corner-all "  > <span class="ui-button-text">Hẹn trả KQ </span></a>
                <input type="checkbox" id="btn_cddatra" style=" margin-left: 6%; " checked /><label for="btn_cddatra">Hiện chỉ định đã hủy bỏ</label>
                <input type="checkbox" id="btn_cdmoi" style=" margin-left: 1%; " /><label for="btn_cdmoi">Chỉ in chỉ định mới</label>
				<a  id="btn_inphieucd" class="fm-button ui-state-default ui-corner-all " style=" margin-left: 1%;  margin-top: -6px;"  > In phiếu CĐ</a>
				<a  id="btn_luu" class="fm-button ui-widget ui-state-default ui-corner-all fm-button-icon-left ui-button-text-only " style=" margin-left: 1%;margin-top: -3px; "  > <span class="ui-button-text">Lưu [Ctrl+S]<span class="ui-icon ui-icon-disk nam"></span></span></a>
				<a  id="btn_chidinh"class="fm-button ui-state-default ui-corner-all" style="margin-left: 1%;margin-top: -6px; "  >Chỉ định [F12]</a>
        	</div>
		</div>	
</body>
</html> 

<script type="text/javascript">
var report_code=["PhieuChiDinhDieuTri"];
var report_name=["Phiếu chỉ định điều trị"];
    jQuery(document).ready(function() {
		jwerty.key('ctrl+s', false);
	 <?php 
		$data= new SQLServer;
		$params2 = array($_GET['idluotkham']);
		$store_name2="{call Gd2_ThongTinLuotKham_GetAllByID_LuotKham_New(?)}";
		$get2=$data->query( $store_name2,$params2);
		$excute2= new SQLServerResult($get2);
		$tam= $excute2->get_as_array();
		echo 'window.idluotkham='.$_GET['idluotkham'].';';
		echo 'window.n_idtrangthai="'.$tam[0]['ID_TrangThai'].'";';
		echo 'window.loaidoituongkham="'.$tam[0]['LoaiDoiTuongKham'].'";';
		echo 'window.idbenhnhan='.$tam[0]['ID_BenhNhan'].';';
		echo 'window.n_idtrangthai="'.$tam[0]['ID_TrangThai'].'";';
		echo 'window.n_dathanhtoanbill="'.$tam[0]['DaThanhToanBill'].'";';
		echo 'window.n_id_quoctich="'.$tam[0]['ID_QuocTich'].'";';
		echo 'window.n_hesotheoquoctich="'.$tam[0]['HeSoVienPhi'].'";';
		echo 'window.id_phanloaikham="'.$tam[0]['ID_PhanLoaiKham'].'";';
		echo 'window.n_ngayvaokham="'.$tam[0]['ThoiGianVaoKham']->format($_SESSION["config_system"]["ngaythang"]).'";';
		echo 'window.n_ngayhientai="'.$tam[0]['NgayHienTai']->format($_SESSION["config_system"]["ngaythang"]).'";';
		echo 'window.n_maloaidt="'.$tam[0]['MaLoaiDT'].'";';
		echo 'window.n_songaythe="'.$tam[0]['SoNgayThe'].'";';
		echo 'window.n_trangthaikham="'.$tam[0]['TrangThaiKham'].'";';
		echo 'window.n_quangay="'.$tam[0]['QuaNgay'].'";';
		
		if($tam[0]['PhanTram']=='.00'){
			echo 'window.phantram="0";';
		}else{
			echo 'window.phantram="'.$tam[0]['PhanTram'].'";';
		}
	?>
	
		window.phantram=window.phantram.split('.');
		window.phantram=window.phantram[0];
		//alert(window.id_phanloaikham);
		if(window.id_phanloaikham==46){
			window.n_khoachidinh=1;	
		}else{
			if(window.id_phanloaikham==24){
				if(window.n_quangay==0 || window.n_quangay==1){
					window.n_khoachidinh=0;
				}else{
					window.n_khoachidinh=1;	
				}
			}else{
				if(window.n_ngayvaokham==window.n_ngayhientai){
					window.n_khoachidinh=0;
				}else{
					window.n_khoachidinh=1;	
				}
			}
		}
		if(window.n_id_quoctich==138 || window.n_id_quoctich==142 || window.n_id_quoctich==143){
			window.n_nguoinuocngoai=0;	
		}else{
			window.n_nguoinuocngoai=1;	
		}
		if(window.id_phanloaikham==46){ //
			$("#thongbao").html("Thông báo: Lượt khám này là lượt khám nội trú");
			$("#btn_luu").prop("disabled",true);
			$("#btn_chidinh").prop("disabled",true);
		}else if(window.n_dathanhtoanbill==1){ //
			$("#thongbao").html("Thông báo: Lượt khám này đã thanh toán");
			$("#btn_luu").prop("disabled",true);
			$("#btn_chidinh").prop("disabled",true);
		}else if(window.n_khoachidinh==1){ //
			$("#thongbao").html("Thông báo: Lượt khám này đã qua ngày");
			$("#btn_luu").prop("disabled",true);
			$("#btn_chidinh").prop("disabled",true);
		}
		
		openform_shortcutkey();	
		temp = jQuery(window).height() - 135;
        $("#panel_main").css("height", temp + "px");
        $("#panel_main").fadeIn(1000);	
			
		$.ajax({
		  url: 'resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_benhnhanby_idluotkham&id='+window.idluotkham,
		  context: document.body
		}).done(function(data) {
			//alert(data);
			var rs=data.split(';;');
			$("#idbenhnhan").val(rs[1]);
			$("#mabenhnhan").val(rs[2]);
			$("#hotenbenhnhan").val(rs[3]);
			parent.postMessage('changetitle;dieutriphoihop_'+window.idluotkham+';Chỉ định điều trị phối hợp - '+rs[3]+';', '*');
			//alert('<?=$view?>_'+window.idluotkham);
		});
	
		$.get( "resource.php?module=web_services&function=create_panel1&action=index&id_benhnhan="+window.idbenhnhan, function( data ) {
		  $( ".patient_info" ).html( data );
		  $( ".patient_info" ).css("width", $( "#patient_info" ).width()+"css");		  
		});
		
		$.post('resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_PhuThuThucHienTaiNha&idluotkham='+window.idluotkham).done(function(data) {
		 	window.phuthu=jQuery.parseJSON(data);
		});
		window.luot=0;
		$("#btn_chidinh,#btn_luu").button();
		load_select_hotennv();
		window.hotennv2=":Chọn nhân viên;"+window.hotennv;
		load_select_nguoichidinh();
		load_select_trangthai();
		load_select_tennhomcha();
		load_select_tenloaikham();
        create_layout();
        create_grid();
        create_grid2();
        create_grid3();
		create_xemtoathuoc_left();
		create_xemtoathuoc_right();
		create_goikham();
		create_loaikham();
        resize_control();
		
		$("#rowed4").jqGrid('setGridParam',{datatype: 'json',url:"resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_hangmucloaikham_all&phantram="+window.phantram+'&trangthaikham='+window.n_trangthaikham+'&idluotkham='+window.idluotkham+'&nguoinuocngoai='+window.n_nguoinuocngoai+'&doituong='+window.loaidoituongkham}).trigger('reloadGrid');
		$("#xemtatca").change(function(event) {
			if($("#xemtatca").is(':checked')==true){
				$("#gs_TenLoaiKham").focus();
				$("#gs_TenLoaiKham").val("");
				$("#rowed4").jqGrid('setGridParam',{datatype: 'json',url:"resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_hangmucloaikham_all&phantram="+window.phantram+'&trangthaikham='+window.n_trangthaikham+'&idluotkham='+window.idluotkham+'&nguoinuocngoai='+window.n_nguoinuocngoai+'&doituong='+window.loaidoituongkham}).trigger('reloadGrid');
			}else{
				var ids = $('#rowed3').jqGrid('getDataIDs');				 
				$("#rowed3").jqGrid("setSelection",ids[0], true);
				var id = $('#rowed3').jqGrid ('getGridParam', 'selrow');	
				console.log('N:'+id);
				$("#rowed4").jqGrid('setGridParam',{datatype: 'json',url:"resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_hangmucloaikham_idnhomcls&id="+id+'&trangthaikham='+window.n_trangthaikham+'&idluotkham='+window.idluotkham+'&phantram='+window.phantram+'&nguoinuocngoai='+window.n_nguoinuocngoai+'&doituong='+window.loaidoituongkham}).trigger('reloadGrid');
				$("#gs_TenLoaiKham").val("");
				$('#rowed3 #'+id).focus();				 
			//	$("#rowed3").jqGrid("setSelection",id, true);
				
			}
		});
		
		$('#btn_inphieucd, #btn_luu,#chongoikham,#hentrakq,#btn_chidinh').button();
		$("#rowed5").jqGrid('setGridParam',{datatype: 'json',url:"resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_khamby_idluotkham&id="+$("#idluotkham").val()}).trigger('reloadGrid');
	
		$("#hentrakq").click(function(e){
			links='resource.php?module=canlamsang&view=ds_xephang_canlamsang&action=ds_hentraKQ3&type=test&id_form=123&idluotkham='+$("#idluotkham").val();
			elem=1 + Math.floor(Math.random() * 1000000000); 
			width=90;
			height=80;   
			dialog_add_dm("",width,height,elem,links); 
		})
		$("#ghichu").click(function(e){
			elem = 1 + Math.floor(Math.random() * 1000000000);
    		dialog_main("Ghi chú của bệnh nhân: "+ $("#hotenbenhnhan").val(), 95, 70, elem, 'resource.php?module=hanhchinh&view=ghi_chu&id_form=230&idbenhnhan=' + $("#idbenhnhan").val());
			
		})
		
        $(window).resize(function() {
            temp = jQuery(window).height() - 155;
            $("#panel_main").css("height", temp + "px");
            resize_control();
        })
		
		/*$.ajax({
		  url: 'resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_hentrakq_by_idbenhnhan&ac=cokq&id='+ $("#idbenhnhan").val(),
		  context: document.body
		}).done(function(data) {
		  $("#hienthidukiencokq").html(data);
		});
		
		$.ajax({
		  url: 'resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_hentrakq_by_idbenhnhan&ac=henkq&id='+ $("#idbenhnhan").val(),
		  context: document.body
		}).done(function(data) {
		  $("#hienthihentrakqmoi").html(data);
		});*/
		
		$("input#btn_cdmoi").attr("disabled", true);
		//$( "#btn_chidinh" ).addClass( "ui-state-disabled" );
//f10 luu
document.onkeydown = function(e) {
	if (e.keyCode === 123) {
		$("#btn_chidinh").click();
		return false;
	}
};
$(document).keyup(function(e) {
    if(jwerty.is("ctrl+s",e)){
		$("#btn_luu").click();
		return false;
	}
});
window.inchidinh=0;
$("#btn_inphieucd").click(function(){
	window.inchidinh=1;
	//alert(window.inchidinh);
	$('#btn_inphieucd').button('disable');
	if(window.n_dathanhtoanbill==1 || window.n_khoachidinh==1){
		fun_inchidinh();
	}else{
	 	$("#btn_luu").click();
	}
});
window.dangluu=0;
$("#btn_luu").click(function(){
	//alert(window.inchidinh);
 if(window.dangluu==0){
	 window.dangluu=1;
	 $("#n_dangluu" ).show();
	 $("#rowed5 tbody").addClass('bongmo');
	$.post('resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=check_thanhtoan&idluotkham=<?=$_GET['idluotkham']?>').done(function(data){
		if(data=='false'){
			
				$('#btn_luu').button('disable');	
				if($("#idluotkham").val()==""){
						alert("Vui lòng chọn lượt khám để thực hiện chức năng này");	
				}else{
					$("#btn_cdmoi").removeAttr("disabled");
					/*ids = $('#rowed5').jqGrid('getDataIDs');
					for(var i=0;i<=ids.length-1;i++){
						jQuery("#rowed5").jqGrid('saveRow',ids[i]);
					}
				   var gridData = jQuery("#rowed5").getRowData();
				   var postData = JSON.stringify(gridData);
				   postData='{"id":'+postData+'}';
				   postData=$.parseJSON(postData);*/
				   
				    var ids = $('#rowed5').jqGrid('getDataIDs');
					var phancach = "";
					var dataToSend='[';
					for(var i=0;i<=ids.length-1;i++){
						//console.log(i)
						dataToSend += phancach+'{';
						var rowData = $('#rowed5').jqGrid ('getRowData', ids[i]);
						if(rowData['TrangThai']!="HuyBo"){
							var _thuchien=$("#"+ids[i]+"_ThucHien").val();
						}else{
							var _thuchien=0;
						}
						if(rowData['TrangThai']!="HuyBo"){
							var _songay=$("#"+ids[i]+"_SoNgay").val();
						}else{
							var _songay=1;
						}
						if(rowData['TrangThai']!="HuyBo"){
							var _slmoingay=$("#"+ids[i]+"_SLMoiNgay").val();
						}else{
							var _slmoingay=1;
						}
						dataToSend += '"IDLuotKham":' + JSON.stringify(rowData['IDLuotKham'])+',';// 
						dataToSend += '"IDKham":' + JSON.stringify(rowData['IDKham'])+',';
						dataToSend += '"Id_phy_dtph":' + JSON.stringify(rowData['Id_phy_dtph'])+',';
						dataToSend += '"IDLoaiKham":' + JSON.stringify(rowData['IDLoaiKham'])+',';
						dataToSend += '"IDPhongChuyenMon":' + JSON.stringify(rowData['IDPhongChuyenMon'])+',';
						dataToSend += '"NguoiChiDinh":' + JSON.stringify(rowData['NguoiChiDinh'])+',';
						dataToSend += '"TrangThai":' + JSON.stringify(rowData['TrangThai'])+',';
						dataToSend += '"PhiThucHien":' + JSON.stringify(rowData['PhiThucHien'])+',';
						dataToSend += '"ThanhTien":' + JSON.stringify(rowData['ThanhTien'])+',';
						dataToSend += '"SLMoiNgay":' + JSON.stringify(_slmoingay)+',';
						dataToSend += '"SoNgay":' + JSON.stringify(_songay)+',';
						dataToSend += '"GiaThueNgoaiThucHien":' + JSON.stringify(rowData['GiaThueNgoaiThucHien'])+',';
						dataToSend += '"ThucHien":' + JSON.stringify(_thuchien)+','; //-sfsfsfsf
						dataToSend += '"ThoiGianTrungBinhThucHien":' + JSON.stringify(rowData['ThoiGianTrungBinhThucHien'])+',';
						dataToSend += '"MaBenhNhan":' + JSON.stringify(rowData['MaBenhNhan'])+',';
						dataToSend += '"DonGiaBHYT":' + JSON.stringify(rowData['DonGiaBHYT'])+',';
						dataToSend += '"PhanTramCungChiTra":' + JSON.stringify(rowData['PhanTramCungChiTra'])+',';
						dataToSend += '"ThanhTienCungChiTra":' + JSON.stringify(rowData['ThanhTienCungChiTra'])+',';
						dataToSend += '"PhuThuBV":' + JSON.stringify(rowData['PhuThuBV'])+',';
						dataToSend += '"ThanhTienBaoHiem":' + JSON.stringify(rowData['ThanhTienBaoHiem'])+','; 
						dataToSend += '"IDNhomCLS":' + JSON.stringify(rowData['IDNhomCLS'])+',';
						dataToSend += '"Luu":' + JSON.stringify(rowData['Luu'])+',';
						dataToSend += '"Sua":' + JSON.stringify(rowData['Sua'])+',';
						dataToSend += '"Huy":' + JSON.stringify(rowData['Huy'])+',';
						dataToSend += '"LanChiDinh":' + JSON.stringify(rowData['LanChiDinh'])+',';
						dataToSend += '"LyDoHuyBo":' + JSON.stringify(rowData['LyDoHuyBo']);
						dataToSend += '}';
						phancach=',';
					//alert(dataToSend);
					}
					dataToSend+=']';
					//	window.datalocalToSend = jQuery.parseJSON(dataToSend);
					//alert(dataToSend);
					postData='{"id":'+dataToSend+'}';
					postData=$.parseJSON(postData);
				   
					 $.post('resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=controller&oper=add&hienmaloi=3',postData).done(function(data){
							$("#rowed5 tbody").removeClass('bongmo');
							$("#n_dangluu" ).hide();
							$("#btn_cddatra").prop( "checked", true );
							$("#rowed5").jqGrid('setGridParam',{datatype: 'json',url:"resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_khamby_idluotkham&id="+$("#idluotkham").val()}).trigger('reloadGrid');
							tooltip_message("Đã lưu");
							$('#btn_luu').button('enable');	
							window.dangluu=0;
							$('#gs_TenLoaiKham').focus();
							//alert(window.inchidinh);
							if(window.inchidinh==1){
								window.inchidinh=0;
								//alert('222');
								fun_inchidinh();
							}
					  })//$.post
				}//if idluotkham
			
		}else{
			$("#rowed5 tbody").removeClass('bongmo');
			$("#n_dangluu" ).hide();
			$("#thongbao").html("Thông báo: Lượt khám này đã thanh toán");
			tooltip_message(" Lượt khám này đã thanh toán");
			if(window.inchidinh==1){
				window.inchidinh=0;
				fun_inchidinh();
			}
		}
	});
}//window.dangluu
})//$("#btn_luu")

$("#btn_chidinh").click(function(){
if(window.dangluu==0){
window.dangluu=1;
	$.post('resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=check_thanhtoan&idluotkham=<?=$_GET['idluotkham']?>').done(function(data){
		if(data=='false'){
			$('#btn_chidinh').button('disable');	
			if($("#idluotkham").val()==""){
				alert("Vui lòng chọn lượt khám để thực hiện chức năng này");	
			}else{
				$("#btn_cdmoi").removeAttr("disabled");
				ids = $('#rowed5').jqGrid('getDataIDs');
				for(var i=0;i<=ids.length-1;i++){
					jQuery("#rowed5").jqGrid('saveRow',ids[i]);
				}
				var gridData = jQuery("#rowed5").getRowData();
				var postData = JSON.stringify(gridData);
				postData='{"id":'+postData+'}';
				postData=$.parseJSON(postData);
				$.post('resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=controller&oper=add&hienmaloi=3',postData).done(function(data){
					$("#btn_cddatra").prop( "checked", true );
					$("#rowed5").jqGrid('setGridParam',{datatype: 'json',url:"resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_khamby_idluotkham&id="+$("#idluotkham").val()}).trigger('reloadGrid');
					tooltip_message("Lưu dữ liệu thành công");	
					window.dangluu=0;
					setTimeout(function(){
						fun_inchidinh();	
					},1000);		 
					//$('#btn_inphieucd').trigger("focusin");
					$('#gs_TenLoaiKham').focus();
				})//$.post
			}//if idluotkham
		}
	});
}//window.dangluu
})//$("#btn_chidinh")

		$('#dialog').dialog({
                autoOpen: false,
                width: 400,
				width: 400,
                modal: true,
                resizable: false,
                buttons: {
                    "Ok": function() {
                        $("#rowed5").jqGrid('setRowData',$("#idk").val(),{ThanhTien:0});
						$("#rowed5").jqGrid('setRowData',$("#idk").val(),{PhiThucHien:0});
						$("#rowed5").jqGrid('setRowData',$("#idk").val(),{TrangThai:"HuyBo"});
						$("#rowed5").jqGrid('setRowData',$("#idk").val(),{LyDoHuyBo:$("#lydohuybo").val()});
						$("#rowed5").jqGrid('setRowData',$("#idk").val(),{Huy:1});
						$("#rowed5").jqGrid('setRowData',$("#idk").val() , '', { background: '#A9A9AA' });
						jQuery("#rowed5").jqGrid('saveRow',$("#idk").val());
						var tmp5 = $("#rowed5").jqGrid('getDataIDs'); 
						  var tongtien =0;
						  var phithuchien =0;
							for(var i=0;i < tmp5.length;i++){ 
								var rowData = $("#rowed5").getRowData(tmp5[i]);
								xoa = "<input class='custom_button_n' style='height:22px;width:50px;margin-left: -14px; box-shadow:none!important;cursor:pointer;' type='button' value='Xóa' onclick=\"n_xoa('"+tmp5[i]+"');\" />"; 
								$("#rowed5").jqGrid('setRowData',tmp5[i],{Xoa:xoa});	
							}
							
							tinhtongtien();
							//tinhtien theo nhom loai kham
							var tongtien_vatlytrilieu=0;
							var tongtien_tthuat_pthuat=0;
							var tongtien_family_flanning=0;
							var tongtien_dieuduong=0;
							for(var i=0;i < tmp5.length;i++){ 
								var rowData = $("#rowed5").getRowData(tmp5[i]);
								if(rowData["IDNhomCLS"]==25){
									tongtien_vatlytrilieu=parseInt(tongtien_vatlytrilieu) + parseInt(rowData["PhiThucHien"]);
									$('#rowed5').jqGrid('setCell',tmp5[i],'TongTienTheoNhom',tongtien_vatlytrilieu);
								}else if(rowData["IDNhomCLS"]==23){
									tongtien_tthuat_pthuat=parseInt(tongtien_tthuat_pthuat) + parseInt(rowData["PhiThucHien"]);
									$('#rowed5').jqGrid('setCell',tmp5[i],'TongTienTheoNhom',tongtien_tthuat_pthuat);
								}else if(rowData["IDNhomCLS"]==52){
									tongtien_family_flanning=parseInt(tongtien_family_flanning) + parseInt(rowData["PhiThucHien"]);
									$('#rowed5').jqGrid('setCell',tmp5[i],'TongTienTheoNhom',tongtien_family_flanning);
								}else if(rowData["IDNhomCLS"]==26){
									tongtien_dieuduong=parseInt(tongtien_dieuduong) + parseInt(rowData["PhiThucHien"]);
									$('#rowed5').jqGrid('setCell',tmp5[i],'TongTienTheoNhom',tongtien_dieuduong);
								}

						}//end for
						for(var i=0;i < tmp5.length;i++){ 
							var rowData = $("#rowed5").getRowData(tmp5[i]);
							if(rowData["IDNhomCLS"]==25){
									$('#rowed5').jqGrid('setCell',tmp5[i],'TongTienTheoNhom',tongtien_vatlytrilieu);
								}else if(rowData["IDNhomCLS"]==23){
									$('#rowed5').jqGrid('setCell',tmp5[i],'TongTienTheoNhom',tongtien_tthuat_pthuat);
								}else if(rowData["IDNhomCLS"]==52){
									$('#rowed5').jqGrid('setCell',tmp5[i],'TongTienTheoNhom',tongtien_family_flanning);
								}else if(rowData["IDNhomCLS"]==26){
									$('#rowed5').jqGrid('setCell',tmp5[i],'TongTienTheoNhom',tongtien_dieuduong);
									}
						}//end for
						
						//end tong tien nhom
                        $(this).dialog("close");
                    },
                    "Cancel": function() {
                        $(this).dialog("close");
                    }
                }
            });
			
			$('#dialog2').dialog({
                autoOpen: false,
                width: 150,
				width: 300,
                modal: true,
                resizable: false,
                buttons: {
                    "Ok": function() {
                        $("#rowed5").jqGrid('setRowData',$("#idk2").val(),{ThanhTien:0});
						$("#rowed5").jqGrid('setRowData',$("#idk2").val(),{PhiThucHien:0});
						$("#rowed5").jqGrid('setRowData',$("#idk2").val(),{TrangThai:"HuyBo"});
						$("#rowed5").jqGrid('setRowData',$("#idk2").val(),{LyDoHuyBo:$("#lydohuybo").val()});
						$("#rowed5").jqGrid('setRowData',$("#idk2").val(),{Huy:1});
						$("#rowed5").jqGrid('setRowData',$("#idk2").val() , '', { background: '#A9A9AA' });
						jQuery("#rowed5").jqGrid('saveRow',$("#idk2").val());
						var tmp5 = $("#rowed5").jqGrid('getDataIDs'); 
						var tongtien =0;
						var phithuchien =0;
						for(var i=0;i < tmp5.length;i++){ 
							var rowData = $("#rowed5").getRowData(tmp5[i]);
							xoa = "<input class='custom_button_n' style='height:22px;width:50px;margin-left: -14px; box-shadow:none!important;cursor:pointer;' type='button' value='Xóa' onclick=\"n_xoa('"+tmp5[i]+"');\" />"; 
							$("#rowed5").jqGrid('setRowData',tmp5[i],{Xoa:xoa});
						}
							
							tinhtongtien();
							//tinhtien theo nhom loai kham
							var tongtien_vatlytrilieu=0;
							var tongtien_tthuat_pthuat=0;
							var tongtien_family_flanning=0;
							var tongtien_dieuduong=0;
							for(var i=0;i < tmp5.length;i++){ 
								var rowData = $("#rowed5").getRowData(tmp5[i]);
								if(rowData["IDNhomCLS"]==25){
									tongtien_vatlytrilieu=parseInt(tongtien_vatlytrilieu) + parseInt(rowData["PhiThucHien"]);
									$('#rowed5').jqGrid('setCell',tmp5[i],'TongTienTheoNhom',tongtien_vatlytrilieu);
								}else if(rowData["IDNhomCLS"]==23){
									tongtien_tthuat_pthuat=parseInt(tongtien_tthuat_pthuat) + parseInt(rowData["PhiThucHien"]);
									$('#rowed5').jqGrid('setCell',tmp5[i],'TongTienTheoNhom',tongtien_tthuat_pthuat);
								}else if(rowData["IDNhomCLS"]==52){
									tongtien_family_flanning=parseInt(tongtien_family_flanning) + parseInt(rowData["PhiThucHien"]);
									$('#rowed5').jqGrid('setCell',tmp5[i],'TongTienTheoNhom',tongtien_family_flanning);
								}else if(rowData["IDNhomCLS"]==26){
									tongtien_dieuduong=parseInt(tongtien_dieuduong) + parseInt(rowData["PhiThucHien"]);
									$('#rowed5').jqGrid('setCell',tmp5[i],'TongTienTheoNhom',tongtien_dieuduong);
								}

						}//end for
						
						for(var i=0;i < tmp5.length;i++){ 
							var rowData = $("#rowed5").getRowData(tmp5[i]);
							if(rowData["IDNhomCLS"]==25){
									$('#rowed5').jqGrid('setCell',tmp5[i],'TongTienTheoNhom',tongtien_vatlytrilieu);
								}else if(rowData["IDNhomCLS"]==23){
									$('#rowed5').jqGrid('setCell',tmp5[i],'TongTienTheoNhom',tongtien_tthuat_pthuat);
								}else if(rowData["IDNhomCLS"]==52){
									$('#rowed5').jqGrid('setCell',tmp5[i],'TongTienTheoNhom',tongtien_family_flanning);
								}else if(rowData["IDNhomCLS"]==26){
									$('#rowed5').jqGrid('setCell',tmp5[i],'TongTienTheoNhom',tongtien_dieuduong);
									}
						}//end for
						//end tong tien nhom
                        $(this).dialog("close");
                    },
                    "Cancel": function() {
						
                        $(this).dialog("close");
                    }
                }
            });
		
		$('#dialog_loi').dialog({
               autoOpen: false,
                width: 350,
				height:150,
                modal: true,
                resizable: false,
				closeOnEscape: true,
				buttons: {
				"Ok": function() {
					$( this ).dialog( "close" );
				}
				}
            });
			
		if($("#idluotkham").val()==""){
			$( "#dialog_loi" ).dialog('open');
		}

			$( ".xemtoathuoc" ).dialog({
			  autoOpen: false,
			  height: 500,
			  width: 1110,
			  modal: true,
			  buttons: {
				"Ok": function() {
					$( this ).dialog( "close" );
				}
			  }
			})	
		
			$(".data_chongoikham" ).dialog({
			  autoOpen: false,
			  height: 500,
			  width: 1035,
			  modal: true,
			  buttons: {
				"Chọn": function() {
					$( this ).dialog( "close" );
					if(window.n_dathanhtoanbill!=1 && window.n_khoachidinh!=1){
						var i,tmp,tmp1;
						tmp = jQuery("#data_loaikham").jqGrid('getGridParam','selarrrow');
						for(i=0;i<tmp.length;i++){
						   tmp1=tmp[i].split(",");
						   var tmp2 = $("#rowed5").jqGrid('getDataIDs');
						   var rowData = jQuery('#data_loaikham').jqGrid ('getRowData', tmp1);

						   if((window.loaidoituongkham=="BHYT") && (rowData["GiaTheoBaoHiem"]>0 )){
							    window.phantrammoi=rowData["PhanTramCungChiTra"].split('.');
								window.phantrammoi=window.phantrammoi[0];
								 if(window.n_trangthaikham==3){
									 if(window.phantrammoi==100){
										/*if(window.n_id_quoctich==138 || window.n_id_quoctich==142 || window.n_id_quoctich==143){
											var thanhtien_vienphi=rowData["BaoGiaChoBN"];
											var thanhtien_bhyt=0;
											var phithuchien=rowData["BaoGiaChoBN"];
										}else{
											//alert(rowData["HeSoNuocNgoai"]);
											var thanhtien_vienphi=rowData["BaoGiaChoBN"]*rowData["HeSoNuocNgoai"];
											var thanhtien_bhyt=0;
											var phithuchien=rowData["BaoGiaChoBN"]*rowData["HeSoNuocNgoai"];
										}*/
										var thanhtien_vienphi=rowData["GiaHienThi"];
										var thanhtien_bhyt=0;
										var phithuchien=rowData["GiaHienThi"];
										var bnchitrabh=0;
									 }else{
										var thanhtien_vienphi=rowData["BaoGiaChoBN"];
										var thanhtien_bhyt=parseInt(rowData["GiaTheoBaoHiem"]);
										//var phithuchien=parseInt(thanhtien_bhyt)+parseInt(rowData["GiaPhuThu"]);
										var phithuchien=rowData["GiaHienThi"];
										
										var bnchitrabh=((parseInt(rowData["GiaTheoBaoHiem"])*window.phantrammoi)/100);
										//var bn_chitra=((parseInt(rowData["GiaTheoBaoHiem"])*window.phantrammoi)/100)+parseInt(rowData["GiaPhuThu"]);
										var bh_chitra=parseInt(rowData["GiaTheoBaoHiem"])-bnchitrabh;
										var bn_chitra=(parseInt(rowData["GiaHienThi"])-bh_chitra);
									 }
								 }else{
									var thanhtien_vienphi=rowData["BaoGiaChoBN"];
									var thanhtien_bhyt=parseInt(rowData["GiaTheoBaoHiem"]);
									//var phithuchien=parseInt(thanhtien_bhyt)+parseInt(rowData["GiaPhuThu"]);
									var phithuchien=rowData["GiaHienThi"];
									
									var bnchitrabh=((parseInt(rowData["GiaTheoBaoHiem"])*window.phantram)/100);
									//var bn_chitra=((parseInt(rowData["GiaTheoBaoHiem"])*window.phantram)/100)+parseInt(rowData["GiaPhuThu"]);
									var bh_chitra=parseInt(rowData["GiaTheoBaoHiem"])-bnchitrabh;
									var bn_chitra=(parseInt(rowData["GiaHienThi"])-bh_chitra);
									window.phantrammoi=window.phantram;
								 }
							}else{
								/*if(window.n_id_quoctich==138 || window.n_id_quoctich==142 || window.n_id_quoctich==143){
									var thanhtien_vienphi=rowData["BaoGiaChoBN"];
									var thanhtien_bhyt=0;
									var phithuchien=rowData["BaoGiaChoBN"];
								}else{
									//alert(rowData["HeSoNuocNgoai"]);
									var thanhtien_vienphi=rowData["BaoGiaChoBN"]*rowData["HeSoNuocNgoai"];
									var thanhtien_bhyt=0;
									var phithuchien=rowData["BaoGiaChoBN"]*rowData["HeSoNuocNgoai"];
								}*/
								var thanhtien_vienphi=rowData["GiaHienThi"];
								var thanhtien_bhyt=0;
								var phithuchien=rowData["GiaHienThi"];
								var bnchitrabh=0;
							}
						   
						   parameters =
							{
								initdata : {IDLoaiKham:rowData["ID_LoaiKham"],Xoa:"Xóa",LoaiKham:rowData["ID_LoaiKham"],ThanhTien:thanhtien_vienphi,PhiThucHien:phithuchien,TrangThai:"DangCho",ThucHien: "0",NguoiChiDinh:"<?=$_SESSION["user"]["id_user"] ?>",NhanVienDuocChiDinhTH:"",NguoiThucHien:"",GiaThueNgoaiThucHien:rowData["GiaThueNgoaiThucHien"],ThoiGianTrungBinhThucHien:rowData["ThoiGianTrungBinhThucHien"],IDLuotKham:$("#idluotkham").val(),IDPhongChuyenMon:$("#idphongbanchuyenmon").val(),MaBenhNhan:$("#mabenhnhan").val(),IDNhomCLS:rowData["ID_NhomCLS"],DonGiaBHYT:rowData['GiaTheoBaoHiem'],PhuThuBV:rowData["GiaPhuThu"],ThanhTienBaoHiem:bh_chitra,BNChiTra:bn_chitra,PhanTramCungChiTra:window.phantrammoi,ThanhTienCungChiTra:bnchitrabh,Color:rowData["Color"]},

								position :"last",
								useDefValues : false,
								useFormatter : false,
								addRowParams : {extraparam:{}}
							}
							//--------
							var tmp4 = $("#rowed5").jqGrid('getDataIDs'); 
							var dem=0;
							var tontai=0;
							if(tmp4.length==0)
								dem=1;
							for(var j=0;j < tmp4.length;j++){
								var rowData2 = $("#rowed5").getRowData(tmp4[j]);	
								if(rowData["ID_LoaiKham"]==rowData2["IDLoaiKham"]){
									tontai=1;
								var strconfirm = confirm("Loại khám: "+rowData["TenLoaiKham"]+" đã tồn tại, bạn có muốn chỉ định thêm không?", "Cảnh báo");
									if (strconfirm == true){
										dem=1;
									}else{
										dem=0;
									}
									break;
								}else{
									if(tontai==0){
										dem=1;
									}
								}
							} //end for
							if(dem==1){
								jQuery("#rowed5").jqGrid('addRow',parameters);
							}							
						} //end for(i=0;i<tmp.length;i++)
						  var tmp3 = $("#rowed5").jqGrid('getDataIDs'); 
						  var tongtien=0;
						  var phithuchien=0;
							for(var i=0;i < tmp3.length;i++){ 
								var rowData = $("#rowed5").getRowData(tmp3[i]);	
								xoa = "<input class='custom_button_n' style='height:22px;width:50px;margin-left: -14px; box-shadow:none!important;cursor:pointer;' type='button' value='Xóa' onclick=\"n_xoa('"+tmp3[i]+"');\" />"; 
								$("#rowed5").jqGrid('setRowData',tmp3[i],{Xoa:xoa});
								number_textbox("#"+tmp3[i]+"_SLMoiNgay");
								number_textbox("#"+tmp3[i]+"_SoNgay");
								if(window.loaidoituongkham=="BHYT"){
									if(rowData["Color"]=="X"){
										$("#rowed5").jqGrid('setRowData', tmp3[i], false, { background: '#C5F7C1',border:'1px solid #dfd9c3' });
									}else if(rowData["Color"]=="V"){
										$("#rowed5").jqGrid('setRowData', tmp3[i], false, { background: '#FDFCC2',border:'1px solid #dfd9c3' });
									}
								}
								if(rowData["IDNhomCLS"]==25 || rowData["IDNhomCLS"]==26 ){
						
								}else{
									$("#"+tmp3[i]+"_SLMoiNgay").prop('disabled', true);
									$("#"+tmp3[i]+"_SoNgay").prop('disabled', true);
								}
							}
							
							tinhtongtien();
					}//end if trang thai
				  },
				
				Cancel: function() {
				  $( this ).dialog( "close" );
				}
			  },	
			  close: function() {
			  }
			});
		
		$( "#xemtoathuoc" ).click(function() {
		  //alert( "Bạn đã click." );
		  $('.xemtoathuoc').dialog('open');	
		});
		
		$( "#chongoikham" ).click(function() {
		  //alert( "Bạn đã click." );
		  $('.data_chongoikham').dialog('open');	
		});
	
	$("#btn_cddatra").change(function() {
		if($(this).is(':checked')==true){
		var tmp = $("#rowed5").jqGrid('getDataIDs');
				for (var i = 0; i < tmp.length; i++){
					var rowData = jQuery('#rowed5').jqGrid ('getRowData', tmp[i]);
					if(rowData['TrangThai']=='HuyBo'){
						$("#"+tmp[i]).show();
						}
				}
		}else{
			var tmp = $("#rowed5").jqGrid('getDataIDs'); 
				for (var i = 0; i < tmp.length; i++) 
				{
					var rowData = jQuery('#rowed5').jqGrid ('getRowData', tmp[i]);
					if(rowData['TrangThai']=='HuyBo'){
						$("#"+tmp[i]).hide();
						}
				}
			}
	})
	
	$("#btn_cdmoi").change(function() {
		
		if($(this).is(':checked')==true){
		$("#btn_cddatra").attr("disabled", true);
		var tmp = $("#rowed5").jqGrid('getDataIDs');
				for (var i = 0; i < tmp.length; i++) 
				{
					var rowData = jQuery('#rowed5').jqGrid ('getRowData', tmp[i]);
					if(rowData['Luu']==1){
						$("#"+tmp[i]).hide();
						}
				}
		}else{
			$("#btn_cddatra").removeAttr("disabled");
			var tmp = $("#rowed5").jqGrid('getDataIDs'); 
				for (var i = 0; i < tmp.length; i++) 
				{
					var rowData = jQuery('#rowed5').jqGrid ('getRowData', tmp[i]);
					if(rowData['Luu']==1){
						$("#"+tmp[i]).show();
						}
				}
			}
	})
	
phanquyen();
    })
var lastsel;

    function create_grid() {
        $("#rowed3").jqGrid({
            url: 'resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_nhomloaikham',
            datatype: "json",
            colNames: ['id nhóm cha','id nhóm', 'Khám lâm sàn', 'Tên nhóm cha'],
            colModel: [
                {name: 'IDNhomCha', index: 'IDNhomCha', width: "0%", editable: false, align: 'left', hidden: true,edittype:"select",formatter:'select',editoptions:{value: tennhomcha}},
				{name: 'ID_NhomCLS', index: 'ID_NhomCLS', width: "10%", editable: false, align: 'left', hidden: true},
                {name: 'TenNhom', index: 'TenNhom', search: false, width: "30%", editable: false, align: 'left', hidden: false},
				{name: 'TenNhomCha', index: 'TenNhomCha', width: "10%", editable: false, align: 'left', hidden: true},
				//{name: 'STT', index: 'STT', width: "0%", editable: false, align: 'left', hidden: true},
            ],
           loadonce: false,
            scroll: 1,
            modal: true,
            rowNum: 100,
            rowList: [30, 50, 70],
            pager: '#prowed3',
            //sortname: 'NgayGioKetThuc',
            height: 100,
            width: 100,
            viewrecords: true,
            ignoreCase: true,
            shrinkToFit: true,
			//grid_save_option: "",
			grouping:true, 
		  	groupingView : { 
			groupField : ['IDNhomCha'],
			groupDataSorted : true ,
			groupCollapse : false,
			groupColumnShow :false,
			//groupOrder: ['DESC'],
			groupText : ['<b>{0}</b>']
		 	 }, 
			afterShowForm : function (formid) {

			},
            onSelectRow: function(id) {
				
				if(window.luot==1){
					document.getElementById("xemtatca").checked=false;
				}
				window.luot=1;
				var rowData = jQuery(this).getRowData(id); 
				var ID_NhomCLS = rowData['ID_NhomCLS'];// alert(ID_LuotKham);	
				window.id_nhomcls=	ID_NhomCLS;		
				$("#rowed4").jqGrid('setGridParam',{datatype: 'json',url:"resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_hangmucloaikham_idnhomcls&id="+id+'&trangthaikham='+window.n_trangthaikham+'&idluotkham='+window.idluotkham+'&phantram='+window.phantram+'&nguoinuocngoai='+window.n_nguoinuocngoai+'&doituong='+window.loaidoituongkham}).trigger('reloadGrid');
            },
            ondblClickRow: function(rowId, rowIndex, columnIndex) {
				/*var tmp = $("#rowed4").jqGrid('getDataIDs'); 
				for (var i = 0; i < tmp.length; i++){
					var id = tmp[i];
					var rowData = jQuery('#rowed4').jqGrid ('getRowData', id);
				}
				if(tmp.length==1){
					var tmp1 = $("#rowed5").jqGrid('getDataIDs'); 
					var tam,ln=0;
					var dem=tmp1+1;
					var selRowId = $("#rowed3").jqGrid ('getGridParam', 'selrow');
					var celValue = $("#rowed3").getRowData(selRowId);
					parameters =
					{
						initdata : {IDLoaiKham:rowData["ID_LoaiKham"],Xoa:"Xóa",LoaiKham:rowData["TenLoaiKham"],ThanhTien:rowData["GiaBaoChoBN"]*window.n_hesotheoquoctich,PhiThucHien:rowData["GiaBaoChoBN"]*window.n_hesotheoquoctich,TrangThai:"DangCho",ThucHien: "0",NguoiChiDinh:"<?=$_SESSION["user"]["id_user"] ?>",NhanVienDuocChiDinhTH:"",NguoiThucHien:"",GiaThueNgoaiThucHien:rowData["GiaThueNgoaiThucHien"],ThoiGianTrungBinhThucHien:rowData["ThoiGianTrungBinhThucHien"],IDLuotKham:$("#idluotkham").val(),IDPhongChuyenMon:$("#idphongbanchuyenmon").val(),MaBenhNhan:$("#mabenhnhan").val(),IDNhomCLS:celValue["ID_NhomCLS"]},
						position :"last",
						useDefValues : false,
						useFormatter : false,
						addRowParams : {extraparam:{}}
					}
					var tmp2 = $("#rowed5").jqGrid('getDataIDs'); 
					var dem=0;
					var tontai=0;
					if(tmp2.length==0)
						dem=1;
					for(var i=0;i < tmp2.length;i++){
						var rowData2 = $("#rowed5").getRowData(tmp2[i]);	
						if(rowData["ID_LoaiKham"]==rowData2["IDLoaiKham"]){
							tontai=1;
							var strconfirm = confirm("Loại khám: "+rowData["TenLoaiKham"]+" đã tồn tại, bạn có muốn chỉ định thêm không?", "Cảnh báo");
							if (strconfirm == true){
								dem=1;
							}else{
								dem=0;
							}
							break;
						}else{
							if(tontai==0){
								dem=1;
							}
						}
					} //end for
					if(dem==1){
						jQuery("#rowed5").jqGrid('addRow',parameters);
					}
					var tmp1 = $("#rowed5").jqGrid('getDataIDs'); 
					var tongtien =0;
					var phithuchien =0;
					for(var i=0;i < tmp1.length;i++){ 
						var rowData = $("#rowed5").getRowData(tmp1[i]);	
						xoa = "<input class='custom_button_n' style='height:22px;width:50px;margin-left: -14px; box-shadow:none!important;cursor:pointer;' type='button' value='Xóa' onclick=\"n_xoa('"+tmp1[i]+"');\" />"; 
						$("#rowed5").jqGrid('setRowData',tmp1[i],{Xoa:xoa});
						number_textbox("#"+tmp1[i]+"_SLMoiNgay");
						number_textbox("#"+tmp1[i]+"_SoNgay");
					
					}
					
					tinhtongtien();
						
				}// end if(tmp.length==1)*/
            
            },
            onselect: function(rowId, rowIndex, columnIndex) {
              
            },
            loadComplete: function(data) {
				ids = $('#rowed3').jqGrid('getDataIDs');				 
				 var i, groups = $(this).jqGrid("getGridParam", "groupingView").groups,
				 l = groups.length,
				 idSelectorPrefix = "#" + this.id + "ghead_0_";
				 for (i = 0; i < l; i++) {
					 if (groups[i].cnt === 1) {
						 $(idSelectorPrefix + i).hide();
					 }
				 }
				 $("#"+ids[0]).focus();
				   $("#rowed3").unbind("keydown")
				   $("#rowed3").jqGrid('bindKeys', {});
				   $("#rowed3").bind("keydown",function(event) {	
						 var keycode = (event.keyCode ? event.keyCode : event.which);
						 if(keycode == '13'){
							var tmp = $("#rowed4").jqGrid('getDataIDs'); 
							if(tmp.length==1){
								var id = $("#rowed3").jqGrid ('getGridParam', 'selrow');
								$("#rowed3 #"+id).dblclick();
							}else{
								$("#gs_TenLoaiKham").focus();
							}
						 }
				  })
			 
			},
            caption: "Nhóm loại khám"
        });
        $("#rowed3").jqGrid('navGrid', "#prowed3", {add: false, edit: false, del: false, search: false, refresh: true, closeAfterEdit: true, clearAfterAdd: true, navkeys: [true, 38, 40], closeOnEscape: true});
	$("#rowed3").jqGrid('bindKeys', {});
    }
    function create_grid2(){
		mydata=[];
        $("#rowed4").jqGrid({
            data: mydata,
            datatype: "local",
            colNames: ['GiaThueNgoaiThucHien', 'ThoiGianTrungBinhThucHien', 'ID_LoaiKham', 'Tên loại khám', 'Đ.Giá Viện phí', 'Đ.Giá Viện phí','Đ.Giá BHYT','P.Thu BV','P.Thu tại nhà','Hệ số người nước ngoài','BH trả','','ID_NhomCLS','',''],
            colModel: [
                {name: 'GiaThueNgoaiThucHien', index: 'GiaThueNgoaiThucHien', search: false, width: "30%", editable: false, align: 'left', hidden: true},
				{name: 'ThoiGianTrungBinhThucHien', index: 'ThoiGianTrungBinhThucHien', search: false, width: "30%", editable: false, align: 'left', hidden: true},
				{name: 'ID_LoaiKham', index: 'ID_LoaiKham', search: false, width: "0%", editable: false, align: 'left', hidden: true},
                {name: 'TenLoaiKham', index: 'TenLoaiKham', search: true, width: "70%", editable: false, align: 'left', hidden: false},
				{name:'GiaBaoChoBN',index:'GiaBaoChoBN', width:"33%", editable:true,align:'right',edittype:"text",hidden:true,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: "", defaultValue: '0'}},	
				{name:'GiaHienThi',index:'GiaHienThi', width:"33%", editable:true,align:'right',edittype:"text",hidden:false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: "", defaultValue: '0'}},	
				{name:'GiaTheoBaoHiem',index:'GiaTheoBaoHiem', width:"30%", editable:true,align:'right',edittype:"text",hidden:false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: "", defaultValue: '0'}},
				{name:'GiaPhuThu',index:'GiaPhuThu', width:"28%", editable:true,align:'right',edittype:"text",hidden:true,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: "", defaultValue: '0'}},
				{name:'GiaPhuThuTaiNha',index:'GiaPhuThuTaiNha', width:"30%", editable:true,align:'right',edittype:"text",hidden:false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: "", defaultValue: '0'}},	 
				{name:'HeSoNuocNgoai',index:'HeSoNuocNgoai', width:"30%", editable:true,align:'right',edittype:"text",hidden:true,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: "", defaultValue: '0'}},
				{name:'GiaBaoHiemChiTra',index:'GiaBaoHiemChiTra', width:"30%", editable:true,align:'right',edittype:"text",hidden:false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: "", defaultValue: '0'}},	
				{name: 'Color', index: 'Color', search: false, width: "20%", editable: false, align: 'left', hidden: true},    
				{name: 'ID_NhomCLS', index: 'ID_NhomCLS', search: false, width: "20%", editable: false, align: 'left', hidden: true}, 
				{name: 'NhomBHYT', index: 'NhomBHYT', search: false, width: "20%", editable: false, align: 'left', hidden: true},    
				{name: 'PhanTramCungChiTra', index: 'PhanTramCungChiTra', search: false, width: "20%", editable: false, align: 'left', hidden: true},             
				],
            loadonce: true,
            scroll: 1,
            modal: true,
            shrinkToFit: true,
			grid_save_option: "",
            cmTemplate: {sortable: false},
            rowNum: 100,
            rowList: [],
            pager: '#prowed4',
            //sortname: 'ID_LoaiKham',
            height: 100,
            width: 100,
            viewrecords: true,
            ignoreCase: true,
            sortorder: "desc",
			afterShowForm : function (formid) {

			},
			ondblClickRow: function(rowId, rowIndex, columnIndex) {
			  if(window.n_dathanhtoanbill!=1 && window.n_khoachidinh!=1){
				 var tmp1 = $("#rowed5").jqGrid('getDataIDs'); 
				 var tam,ln=0;
				 var dem=tmp1+1;
				 var rowData = jQuery(this).getRowData(rowId);
				 var selRowId = $("#rowed3").jqGrid ('getGridParam', 'selrow');
   				 var celValue = $("#rowed3").getRowData(selRowId);
				 
				 if((window.loaidoituongkham=="BHYT") && (rowData["GiaTheoBaoHiem"]>0 )){
					window.phantrammoi=rowData["PhanTramCungChiTra"].split('.');
					window.phantrammoi=window.phantrammoi[0];
					 if(window.n_trangthaikham==3){
						if(window.phantrammoi==100){
							/*if(window.n_id_quoctich==138 || window.n_id_quoctich==142 || window.n_id_quoctich==143){
								var thanhtien_vienphi=rowData["GiaBaoChoBN"];
								var thanhtien_bhyt=0;
								var phi_thuchien=rowData["GiaBaoChoBN"];
								var bn_chitra=rowData["GiaBaoChoBN"];
								console.log('vn');
							}else{
								var thanhtien_vienphi=rowData["GiaBaoChoBN"];
								var thanhtien_bhyt=0;
								var phi_thuchien=rowData["GiaBaoChoBN"]*rowData["HeSoNuocNgoai"];
								var bn_chitra=phi_thuchien;
								console.log('nn');
							}*/
							var thanhtien_vienphi=rowData["GiaHienThi"];
							var thanhtien_bhyt=0;
							var phi_thuchien=rowData["GiaHienThi"];
							var bn_chitra=rowData["GiaHienThi"];
							var bnchitrabh=0;
							window.phantrammoi=100;
						}else{
							var thanhtien_vienphi=rowData["GiaBaoChoBN"];
							var thanhtien_bhyt=parseInt(rowData["GiaTheoBaoHiem"]);
							//var phi_thuchien=parseInt(thanhtien_bhyt)+parseInt(rowData["GiaPhuThu"]);
							var phi_thuchien=rowData["GiaHienThi"];
							
							var bnchitrabh=((parseInt(rowData["GiaTheoBaoHiem"])*window.phantrammoi)/100);
							//var bn_chitra=((parseInt(rowData["GiaTheoBaoHiem"])*window.phantrammoi)/100)+parseInt(rowData["GiaPhuThu"]);
							var bh_chitra=parseInt(rowData["GiaTheoBaoHiem"])-bnchitrabh;
							var bn_chitra=(parseInt(rowData["GiaHienThi"])-bh_chitra);
						}
					 }else{
						var thanhtien_vienphi=rowData["GiaBaoChoBN"];
						var thanhtien_bhyt=parseInt(rowData["GiaTheoBaoHiem"]);
						//var phi_thuchien=parseInt(thanhtien_bhyt)+parseInt(rowData["GiaPhuThu"]);
						var phi_thuchien=rowData["GiaHienThi"];
						
						var bnchitrabh=((parseInt(rowData["GiaTheoBaoHiem"])*window.phantram)/100);
						//var bn_chitra=((parseInt(rowData["GiaTheoBaoHiem"])*window.phantram)/100)+parseInt(rowData["GiaPhuThu"]);
						var bh_chitra=parseInt(rowData["GiaTheoBaoHiem"])-bnchitrabh;
						var bn_chitra=(parseInt(rowData["GiaHienThi"])-bh_chitra);
						window.phantrammoi=window.phantram;
					 }
				}else{
					i/*f(window.n_id_quoctich==138 || window.n_id_quoctich==142 || window.n_id_quoctich==143){
						var thanhtien_vienphi=rowData["GiaBaoChoBN"];
						var thanhtien_bhyt=0;
						var phi_thuchien=rowData["GiaBaoChoBN"];
						var bn_chitra=rowData["GiaBaoChoBN"];
						console.log('vn');
					}else{
						var thanhtien_vienphi=rowData["GiaBaoChoBN"];
						var thanhtien_bhyt=0;
						var phi_thuchien=rowData["GiaBaoChoBN"]*rowData["HeSoNuocNgoai"];
						var bn_chitra=phi_thuchien;
						console.log('nn');
					}*/
					var thanhtien_vienphi=rowData["GiaHienThi"];
					var thanhtien_bhyt=0;
					var phi_thuchien=rowData["GiaHienThi"];
					var bn_chitra=rowData["GiaHienThi"];
					var bnchitrabh=0;
					window.phantrammoi=100;
				}
					parameters =
							{
								initdata : {IDLoaiKham:rowData["ID_LoaiKham"],Xoa:"Xóa",LoaiKham:rowData["ID_LoaiKham"],ThanhTien:thanhtien_vienphi,PhiThucHien:phi_thuchien,TrangThai:"DangCho",ThucHien: "0",NguoiChiDinh:"<?=$_SESSION["user"]["id_user"] ?>",NhanVienDuocChiDinhTH:"",NguoiThucHien:"",GiaThueNgoaiThucHien:rowData["GiaThueNgoaiThucHien"],ThoiGianTrungBinhThucHien:rowData["ThoiGianTrungBinhThucHien"],IDLuotKham:$("#idluotkham").val(),IDPhongChuyenMon:$("#idphongbanchuyenmon").val(),MaBenhNhan:$("#mabenhnhan").val(),IDNhomCLS:rowData["ID_NhomCLS"],DonGiaBHYT:rowData['GiaTheoBaoHiem'],PhuThuBV:rowData["GiaPhuThu"],ThanhTienBaoHiem:bh_chitra,BNChiTra:bn_chitra,PhanTramCungChiTra:window.phantrammoi,ThanhTienCungChiTra:bnchitrabh,Color:rowData["Color"]},
								position :"last",
								useDefValues : false,
								useFormatter : false,
								addRowParams : {extraparam:{}}
							}
				var tmp2 = $("#rowed5").jqGrid('getDataIDs'); 
				var dem=0;
				var tontai=0;
				if(tmp2.length==0)
					dem=1;
				for(var i=0;i < tmp2.length;i++){
					var rowData2 = $("#rowed5").getRowData(tmp2[i]);	
					if(rowData["ID_LoaiKham"]==rowData2["IDLoaiKham"]){
						tontai=1;
					}else{
						if(tontai==0){
							dem=1;
						}
					}
				} //end for
				
				if(tontai==1){
					var strconfirm = confirm("Loại khám: "+rowData["TenLoaiKham"]+" đã tồn tại, bạn có muốn chỉ định thêm không?", "Cảnh báo");
					if (strconfirm == true){
						dem=1;
					}else{
						dem=0;
					}
				}
				if(dem==1){
					if(rowData["NhomBHYT"]==8 && window.loaidoituongkham=="BHYT" && window.n_maloaidt=="GD" && window.n_songaythe<150){
						var strconfirm_gd = confirm("Lưu ý: Loại khám này Bảo hiểm không chi trả vì thời gian cấp của thẻ này chưa được 150 ngày!","Thông báo");
						if(strconfirm_gd == true){
							var thanhtien_vienphi=rowData["GiaHienThi"];
							var thanhtien_bhyt=0;
							var phi_thuchien=rowData["GiaHienThi"];
							var bn_chitra=rowData["GiaHienThi"];
							var bnchitrabh=0;
							var bh_chitra=0;
							window.phantrammoi2=100;
							parameters2 =
							{
								initdata : {IDLoaiKham:rowData["ID_LoaiKham"],Xoa:"Xóa",LoaiKham:rowData["ID_LoaiKham"],ThanhTien:thanhtien_vienphi,PhiThucHien:phi_thuchien,TrangThai:"DangCho",ThucHien: "0",NguoiChiDinh:"<?=$_SESSION["user"]["id_user"] ?>",NhanVienDuocChiDinhTH:"",NguoiThucHien:"",GiaThueNgoaiThucHien:rowData["GiaThueNgoaiThucHien"],ThoiGianTrungBinhThucHien:rowData["ThoiGianTrungBinhThucHien"],IDLuotKham:$("#idluotkham").val(),IDPhongChuyenMon:$("#idphongbanchuyenmon").val(),MaBenhNhan:$("#mabenhnhan").val(),IDNhomCLS:rowData["ID_NhomCLS"],DonGiaBHYT:rowData['GiaTheoBaoHiem'],PhuThuBV:rowData["GiaPhuThu"],ThanhTienBaoHiem:bh_chitra,BNChiTra:bn_chitra,PhanTramCungChiTra:window.phantrammoi2,ThanhTienCungChiTra:bnchitrabh,Color:rowData["Color"]},
								position :"last",
								useDefValues : false,
								useFormatter : false,
								addRowParams : {extraparam:{}}
							}
							jQuery("#rowed5").jqGrid('addRow',parameters2);
						}else{
							// nguoc lai
						}
					}else{
						jQuery("#rowed5").jqGrid('addRow',parameters);
					}
					//jQuery("#rowed5").jqGrid('addRow',parameters);
				}
				var tmp3= $("#rowed5").jqGrid('getDataIDs'); 
				var tongtien =0;
				var phithuchien =0;
				var y=0;
				var x=0;
				for(var i=0;i < tmp3.length;i++){ 
					//console.log(tmp3[i]);
					var rowData = $("#rowed5").getRowData(tmp3[i]);	
					xoa = "<input class='custom_button_n' style='height:22px;width:50px;margin-left: -14px; box-shadow:none!important;cursor:pointer;' type='button' value='Xóa' onclick=\"n_xoa('"+tmp3[i]+"');\" />"; 
					$("#rowed5").jqGrid('setRowData',tmp3[i],{Xoa:xoa});
					number_textbox("#"+tmp3[i]+"_SLMoiNgay");
					number_textbox("#"+tmp3[i]+"_SoNgay");					
					if((rowData["IDNhomCLS"]==17)&&(y==0)&&($('#'+tmp3[i]+'_ThucHien').val()==1)){
						window.id_rowcls=tmp3[i];
						y++;
					}
					if((rowData["IDNhomCLS"]==17)&&(x==0)){
						window.id_rowcls2=tmp3[i];
						x++;
					}
					if(window.loaidoituongkham=="BHYT"){
						if(rowData["Color"]=="X"){
							$("#rowed5").jqGrid('setRowData', tmp3[i], false, { background: '#C5F7C1',border:'1px solid #dfd9c3' });
						}else if(rowData["Color"]=="V"){
							$("#rowed5").jqGrid('setRowData', tmp3[i], false, { background: '#FDFCC2',border:'1px solid #dfd9c3' });
						}
					}
					if(rowData["IDNhomCLS"]==25 || rowData["IDNhomCLS"]==26 ){
						
					}else{
						$("#"+tmp3[i]+"_SLMoiNgay").prop('disabled', true);
						$("#"+tmp3[i]+"_SoNgay").prop('disabled', true);
					}
				}
				
				tinhtongtien();
			  }//end if
			},
            onRightClickRow: function(rowid, iRow, iCol, e) {

            },
            loadComplete: function(data) {
				grid_filter_enter("#rowed4");
				$("#rowed4").unbind("keydown")
				$("#rowed4").jqGrid('bindKeys', {});
				$("#rowed4").bind("keydown",function(event) {	
				var keycode = (event.keyCode ? event.keyCode : event.which);
				if(keycode == '13'){
					var id = $("#rowed4").jqGrid ('getGridParam', 'selrow');
					$("#rowed4 #"+id).dblclick();
					$("#gs_TenLoaiKham").focus();
				}
			 })
			 var tmp3 = $("#rowed4").jqGrid('getDataIDs'); 
			 for(var i=0;i < tmp3.length;i++){ 
				var rowData = $("#rowed4").getRowData(tmp3[i]);	
			 	if(rowData["Color"]=="X"){
					$("#rowed4").jqGrid('setRowData', tmp3[i], false, { background: '#C5F7C1',border:'1px solid #dfd9c3' });
				}else if(rowData["Color"]=="V"){
					$("#rowed4").jqGrid('setRowData', tmp3[i], false, { background: '#FDFCC2',border:'1px solid #dfd9c3' });
				}
			 }

            },
            caption: " Hạng mục loại khám  <div id='xtc' style='float:right; margin-left: 50px;'><input type='checkbox' id='xemtatca'  /> Xem tất cả</div>"

        });
		$("#rowed4").jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false,defaultSearch:"cn"});
        $("#rowed4").jqGrid('navGrid', "#prowed4", {add: false, edit: false, del: false, search: false, refresh: true, closeAfterEdit: true, clearAfterAdd: true, navkeys: [true, 38, 40], closeOnEscape: true});
		$("#rowed4").jqGrid('bindKeys', {});
		//document.getElementById("xemtatca").checked=true;
		$("#xemtatca").prop('checked',true);
		add_namclass();
   }

function create_grid3(){
		mydata=[];
        $("#rowed5").jqGrid({
            data: mydata,
			editurl: 'clientArray',
            datatype: "local",
            colNames: ['BHYT','ID Loại Khám','Xóa','Loại khám', 'Đ.Giá V.Phí', 'Đ.Giá BHYT','Phụ thu','SL/ngày','Số ngày', 'BHYT trả','BN trả', 'Phí T.Hiện', 'Trạng thái', 'Thực hiện', 'Người CĐ', 'Nhân viên được chỉ định thực hiện',  'Người thực hiện',  'GiaThueNgoaiThucHien',  'ThoiGianTrungBinhThucHien',  'IDKham',  'IDPhongChuyenMon',  'MaBenhNhan','LyDoHuyBo','huy',  'IDLuotKham','Luu','IDNhomCLS','NgayGioTao','TongTienTheoNhom' ,'ID Nhom PHY va Nhom DieuTriPhoihop','lần chỉ định','% cùng chi trả','TT cùng chi trả','',''],
            colModel: [
				{name:'FixGiaBHYT',index:'FixGiaBHYT', width:"10%", editable:true,stype: 'text',search:true,searchoptions: { sopt: ['eq', 'ne'],value:':;1:Có;0:Không'}, editable:true,align:'center',hidden:false,edittype:"checkbox",formatter:"checkbox",formatoptions:{disabled: false},formoptions:{ rowpos:13, colpos:1}
			,editoptions: { value:"1:0",dataEvents:  [{ type: 'click', fn: function(e) { 
				//alert($("#"+$(e.target).attr('id')).is(':checked'));
				if($("#"+$(e.target).attr('id')).is(':checked')){
					var tthai=1;
				}else{
					var tthai=0;
				}
				var row = $(e.target).closest('tr.jqgrow');
				var tam = row.attr('id');//Id_phy_dtph
				var IDKham= $('#rowed5').getCell(tam, 'IDKham');
				var IDNhomCLS= $('#rowed5').getCell(tam, 'IDNhomCLS');
				var Id_phy_dtph= $('#rowed5').getCell(tam, 'Id_phy_dtph');
				if(IDNhomCLS==25 || IDNhomCLS==26){
					var n_idfix=Id_phy_dtph;
				}else{
					var n_idfix=IDKham;
				}
				if(IDKham==''){
				 //  alert('Hiện tại chức năng này chỉ thực hiện các chỉ định đã lưu');
				   tooltip_message("Chức năng này chỉ thực hiện trên các chỉ định đã được lưu");
				}else{
					$.post('resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=check_thanhtoan&idluotkham=<?=$_GET['idluotkham']?>').done(function(data){
					if(data=='false'){
						$.post('resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=controller_fix_bhyt&hienmaloi=a&id='+n_idfix+'&nhom='+IDNhomCLS+'&ac='+tthai).done(function(data) {
							var n_rs=data.split(';;');
							$("#rowed5").jqGrid('setCell',tam,'BNChiTra', parseInt(n_rs[1])-parseInt(n_rs[4]));
							$("#rowed5").jqGrid('setCell',tam,'ThanhTienBaoHiem', n_rs[4]);
							$("#rowed5").jqGrid('setCell',tam,'PhanTramCungChiTra ', n_rs[2]);
							$("#rowed5").jqGrid('setCell',tam,'ThanhTienCungChiTra', n_rs[3]);
							if(n_rs[5]==0){
								$("#"+tam+"_FixGiaBHYT").attr('checked', false);
							}
							tinhtongtien();
						});
					}else{
						tooltip_message("Lượt khám này đã thanh toán");
						$("#thongbao").html("Thông báo: Lượt khám này đã thanh toán");
					}
					});
				}

                 } }]}}, 
                {name: 'IDLoaiKham', index: 'IDLoaiKham', search: false, width: "10%", editable: false, align: 'left', hidden: true},
                {name: 'Xoa', index: 'Xoa', search: false, width: "8%", editable: false, align: 'left', hidden: false},
                {name: 'LoaiKham', index: 'LoaiKham', search: false, width: "40%", editable: false, align: 'left', hidden: false,edittype:"select",formatter:'select',editoptions:{value: tenloaikham},classes:'loai_kham'},
				{name: 'ThanhTien', index: 'ThanhTien', search: false, width: "15%", editable: false, align: 'right', hidden: true,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: "", defaultValue: '0'}},
				{name: 'DonGiaBHYT', index: 'DonGiaBHYT', search: false, width: "15%", editable: false, align: 'right', hidden: true,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: "", defaultValue: '0'}},
				{name: 'PhuThuBV', index: 'PhuThuBV', search: false, width: "15%", editable: false, align: 'right', hidden: true,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: "", defaultValue: '0'}},
				{name: 'SLMoiNgay', index: 'SLMoiNgay', search: false, width: "12%", editable: true,edittype:"text",formatter:'number',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: "", defaultValue: '1'},editoptions: { dataEvents: [{ type: 'keyup change', fn: function(e) {
					var row = $(e.target).closest('tr.jqgrow');
					var rowId = row.attr('id');
					var sl_moi_ngay=$('#'+rowId+'_SLMoiNgay').val();
					var thanh_tien=$('#rowed5').jqGrid('getCell',rowId,'ThanhTien');
					var so_ngay=$('#'+rowId+'_SoNgay').val();
					var ThanhTienBaoHiem=$('#rowed5').jqGrid('getCell',rowId,'ThanhTienBaoHiem');
					var IDLoaiKham=$('#rowed5').jqGrid('getCell',rowId,'IDLoaiKham');
					var DonGiaBHYT=$('#rowed5').jqGrid('getCell',rowId,'DonGiaBHYT');
					$("#rowed5").jqGrid('setCell',rowId,'Sua', '1');
					if(sl_moi_ngay==0){
						$('#'+rowId+'_SLMoiNgay').val("1");
						var sl_moi_ngay=$('#'+rowId+'_SLMoiNgay').val();
					}
					console.log($("#"+rowId+"_ThucHien").val());
					var n_thuchien=$("#"+rowId+"_ThucHien").val();
					var x1=0;
					var n1=0;
					for(var l1 = 0; l1 < phuthu.length; l1++) {	
						if((parseInt(phuthu[l1]['id'])==parseInt(IDLoaiKham))&& (x1==0)){
							n1=l1;
							x1++;
							break;
						}
					}
					setTimeout(function(){
						if((window.loaidoituongkham=="BHYT") && (parseInt(DonGiaBHYT)>0 )){
							var bnchitrabh=(parseInt(DonGiaBHYT)*window.phantram)/100;
							var bn_chitra=(parseInt(DonGiaBHYT)*window.phantram)/100;
							var bh_chitra=parseInt(DonGiaBHYT)-bnchitrabh;
							var thanhtienbh=(parseInt(bh_chitra)* parseInt(sl_moi_ngay)) * parseInt(so_ngay);
							if(n_thuchien==0){
								var phi_thuc_hien= ((parseInt(phuthu[n1]['Gia']) * parseInt(sl_moi_ngay)) * parseInt(so_ngay));
								var bn_chitra= (((parseInt(phuthu[n1]['Gia']) - parseInt(bh_chitra))*parseInt(sl_moi_ngay)) * parseInt(so_ngay));
							}else if(n_thuchien==1){
								var phi_thuc_hien= (((parseInt(phuthu[n1]['Gia'])+parseInt(phuthu[n1]['PhuThuThucHienTaiNha'])) * parseInt(sl_moi_ngay)) * parseInt(so_ngay));
								var bn_chitra= parseInt(phi_thuc_hien) - ((parseInt(bh_chitra)* parseInt(sl_moi_ngay)) * parseInt(so_ngay));
							}else{
								var phi_thuc_hien=0;
								var bn_chitra= 0;
							}
							$('#rowed5').jqGrid('setCell',rowId,'PhiThucHien',phi_thuc_hien,'');
							$('#rowed5').jqGrid('setCell',rowId,'BNChiTra',bn_chitra,'');
							$('#rowed5').jqGrid('setCell',rowId,'ThanhTienBaoHiem',thanhtienbh,'');
						}else{
							/*if(window.n_id_quoctich==138 || window.n_id_quoctich==142 || window.n_id_quoctich==143){
								var thanhtien_bhyt=0;
								if(n_thuchien==0){
									var phi_thuchien=phuthu[n1]['GiaBaoChoBN'];
									var thanhtien_vienphi=phuthu[n1]['GiaBaoChoBN'];
								}else if(n_thuchien==1){
									var phi_thuchien=parseInt(phuthu[n1]['GiaBaoChoBN'])+parseInt(phuthu[n1]['PhuThuThucHienTaiNha']);
									var thanhtien_vienphi=phuthu[n1]['GiaBaoChoBN'];
								}else{
									var phi_thuchien=0;
									var thanhtien_vienphi=0;
								}
							}else{
								if(n_thuchien==0){
									var thanhtien_vienphi=phuthu[n1]['GiaBaoChoBN'];
									var thanhtien_bhyt=0;
									var phi_thuchien=parseInt(phuthu[n1]['GiaBaoChoBN'])*parseInt(phuthu[n1]['HeSoNuocNgoai']);
								}else if(n_thuchien==1){
									var thanhtien_vienphi=phuthu[n1]['GiaBaoChoBN'];
									var thanhtien_bhyt=0;
									var phi_thuchien=(parseInt(phuthu[n1]['GiaBaoChoBN'])*parseInt(phuthu[n1]['HeSoNuocNgoai']))+parseInt(phuthu[n1]['PhuThuThucHienTaiNha']);
								}else{
									var thanhtien_vienphi=0;
									var thanhtien_bhyt=0;
									var phi_thuchien=0;											
								}
							}*/
							var thanhtien_bhyt=0;
							if(n_thuchien==0){
								var phi_thuchien=phuthu[n1]['Gia'];
								var thanhtien_vienphi=phuthu[n1]['Gia'];
							}else if(n_thuchien==1){
								var phi_thuchien=parseInt(phuthu[n1]['Gia'])+parseInt(phuthu[n1]['PhuThuThucHienTaiNha']);
								var thanhtien_vienphi=phuthu[n1]['Gia'];
							}else{
								var phi_thuchien=0;
								var thanhtien_vienphi=0;
							}
							//var bnchitrabh=0;
							var phi_thuc_hien= ((parseInt(phi_thuchien) * parseInt(sl_moi_ngay)) * parseInt(so_ngay));
							var bn_chitra= (((parseInt(phi_thuchien) - parseInt(thanhtien_bhyt))*parseInt(sl_moi_ngay)) * parseInt(so_ngay));
							$('#rowed5').jqGrid('setCell',rowId,'PhiThucHien',phi_thuc_hien,'');
							$('#rowed5').jqGrid('setCell',rowId,'BNChiTra',bn_chitra,'');
						}								
					},200);
					
					setTimeout(function(){
						tinhtongtien();
					},300);
					//tinhtien theo nhom loai kham
					/*var tmp = $("#rowed5").jqGrid('getDataIDs'); 
						var tongtien_vatlytrilieu=0;
						var tongtien_tthuat_pthuat=0;
						var tongtien_family_flanning=0;
						var tongtien_dieuduong=0;
						for(var i=0;i < tmp.length;i++){ 
							var rowData = $("#rowed5").getRowData(tmp[i]);
							if(rowData["IDNhomCLS"]==25){
								tongtien_vatlytrilieu=parseInt(tongtien_vatlytrilieu) + parseInt(rowData["PhiThucHien"]);
								$('#rowed5').jqGrid('setCell',tmp[i],'TongTienTheoNhom',tongtien_vatlytrilieu);
							}else if(rowData["IDNhomCLS"]==23){
								tongtien_tthuat_pthuat=parseInt(tongtien_tthuat_pthuat) + parseInt(rowData["PhiThucHien"]);
								$('#rowed5').jqGrid('setCell',tmp[i],'TongTienTheoNhom',tongtien_tthuat_pthuat);
							}else if(rowData["IDNhomCLS"]==52){
								tongtien_family_flanning=parseInt(tongtien_family_flanning) + parseInt(rowData["PhiThucHien"]);
								$('#rowed5').jqGrid('setCell',tmp[i],'TongTienTheoNhom',tongtien_family_flanning);
							}else if(rowData["IDNhomCLS"]==26){
								tongtien_dieuduong=parseInt(tongtien_dieuduong) + parseInt(rowData["PhiThucHien"]);
								$('#rowed5').jqGrid('setCell',tmp[i],'TongTienTheoNhom',tongtien_dieuduong);
							}

					}//end for
					for(var i=0;i < tmp.length;i++){ 
					//alert(tongtien_vatlytrilieu+"-"+tongtien_tthuat_pthuat+"-"+tongtien_family_flanning+"-"+tongtien_dieuduong);
					var rowData = $("#rowed5").getRowData(tmp[i]);
					if(rowData["IDNhomCLS"]==25){
							$('#rowed5').jqGrid('setCell',tmp[i],'TongTienTheoNhom',tongtien_vatlytrilieu);
						}else if(rowData["IDNhomCLS"]==23){
							$('#rowed5').jqGrid('setCell',tmp[i],'TongTienTheoNhom',tongtien_tthuat_pthuat);
						}else if(rowData["IDNhomCLS"]==52){
							$('#rowed5').jqGrid('setCell',tmp[i],'TongTienTheoNhom',tongtien_family_flanning);
						}else if(rowData["IDNhomCLS"]==26){
							$('#rowed5').jqGrid('setCell',tmp[i],'TongTienTheoNhom',tongtien_dieuduong);
						}
					}//end for
					//end tong tien nhom*/
	} },

]}
, align: 'center', hidden: false,classes:'slmoingay'},
				{name: 'SoNgay', index: 'SoNgay', search: false, width: "12%", editable: true,edittype:"text",formatter:'number',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: "", defaultValue: '1'},editoptions: { dataEvents: [{ type: 'keyup change', fn: function(e) {
						var row = $(e.target).closest('tr.jqgrow');
						var rowId = row.attr('id');
						var sl_moi_ngay=$('#'+rowId+'_SLMoiNgay').val();
						var thanh_tien=$('#rowed5').jqGrid('getCell',rowId,'ThanhTien');
						var ThanhTienBaoHiem=$('#rowed5').jqGrid('getCell',rowId,'ThanhTienBaoHiem');
						var IDLoaiKham=$('#rowed5').jqGrid('getCell',rowId,'IDLoaiKham');
						var DonGiaBHYT=$('#rowed5').jqGrid('getCell',rowId,'DonGiaBHYT');
						var so_ngay=$('#'+rowId+'_SoNgay').val();
						var n_thuchien=$("#"+rowId+"_ThucHien").val();
						$("#rowed5").jqGrid('setCell',rowId,'Sua', '1');
						
						var x1=0;
						var n1=0;
						for(var l1 = 0; l1 < phuthu.length; l1++) {	
							if((parseInt(phuthu[l1]['id'])==parseInt(IDLoaiKham))&& (x1==0)){
								n1=l1;
								x1++;
								break;
							}
						}
						if((so_ngay=="") || (so_ngay==0)){
							$('#'+rowId+'_SoNgay').val("1");
							setTimeout(function(){
								var phi_thuc_hien= ((parseInt(phuthu[n1]['Gia']) * parseInt(sl_moi_ngay)) * parseInt(so_ngay));
								var bn_chitra= (((parseInt(phuthu[n1]['Gia']) - parseInt(ThanhTienBaoHiem))*parseInt(sl_moi_ngay)) * parseInt(so_ngay));
								$('#rowed5').jqGrid('setCell',rowId,'PhiThucHien',phi_thuc_hien,'');
								$('#rowed5').jqGrid('setCell',rowId,'BNChiTra',bn_chitra,'');
							},200);
						}
						setTimeout(function(){
							if((window.loaidoituongkham=="BHYT") && (parseInt(DonGiaBHYT)>0 )){
								var bnchitrabh=(parseInt(DonGiaBHYT)*window.phantram)/100;
								var bn_chitra=(parseInt(DonGiaBHYT)*window.phantram)/100;
								var bh_chitra=parseInt(DonGiaBHYT)-bnchitrabh;
								var thanhtienbh=(parseInt(bh_chitra)* parseInt(sl_moi_ngay)) * parseInt(so_ngay);
								if(n_thuchien==0){
									var phi_thuc_hien= ((parseInt(phuthu[n1]['Gia']) * parseInt(sl_moi_ngay)) * parseInt(so_ngay));
									var bn_chitra= (((parseInt(phuthu[n1]['Gia']) - parseInt(bh_chitra))*parseInt(sl_moi_ngay)) * parseInt(so_ngay));
								}else if(n_thuchien==1){
									var phi_thuc_hien= (((parseInt(phuthu[n1]['Gia'])+parseInt(phuthu[n1]['PhuThuThucHienTaiNha'])) * parseInt(sl_moi_ngay)) * parseInt(so_ngay));
									var bn_chitra= parseInt(phi_thuc_hien) - ((parseInt(bh_chitra)* parseInt(sl_moi_ngay)) * parseInt(so_ngay));
								}else{
									var phi_thuc_hien=0;
									var bn_chitra= 0;
								}										
								$('#rowed5').jqGrid('setCell',rowId,'PhiThucHien',phi_thuc_hien,'');
								$('#rowed5').jqGrid('setCell',rowId,'BNChiTra',bn_chitra,'');
								$('#rowed5').jqGrid('setCell',rowId,'ThanhTienBaoHiem',thanhtienbh,'');
							}else{
								/*if(window.n_id_quoctich==138 || window.n_id_quoctich==142 || window.n_id_quoctich==143){
									var thanhtien_bhyt=0;
									if(n_thuchien==0){
										var phi_thuchien=phuthu[n1]['GiaBaoChoBN'];
										var thanhtien_vienphi=phuthu[n1]['GiaBaoChoBN'];
									}else if(n_thuchien==1){
										var phi_thuchien=parseInt(phuthu[n1]['GiaBaoChoBN'])+parseInt(phuthu[n1]['PhuThuThucHienTaiNha']);
										var thanhtien_vienphi=phuthu[n1]['GiaBaoChoBN'];
									}else{
										var phi_thuchien=0;
										var thanhtien_vienphi=0;
									}
								}else{
									if(n_thuchien==0){
										var thanhtien_vienphi=phuthu[n1]['GiaBaoChoBN'];
										var thanhtien_bhyt=0;
										var phi_thuchien=parseInt(phuthu[n1]['GiaBaoChoBN'])*parseInt(phuthu[n1]['HeSoNuocNgoai']);
									}else if(n_thuchien==1){
										var thanhtien_vienphi=phuthu[n1]['GiaBaoChoBN'];
										var thanhtien_bhyt=0;
										var phi_thuchien=(parseInt(phuthu[n1]['GiaBaoChoBN'])*parseInt(phuthu[n1]['HeSoNuocNgoai']))+parseInt(phuthu[n1]['PhuThuThucHienTaiNha']);
									}else{
										var thanhtien_vienphi=0;
										var thanhtien_bhyt=0;
										var phi_thuchien=0;											
									}
								}*/
								var thanhtien_bhyt=0;
								if(n_thuchien==0){
									var phi_thuchien=phuthu[n1]['Gia'];
									var thanhtien_vienphi=phuthu[n1]['Gia'];
								}else if(n_thuchien==1){
									var phi_thuchien=parseInt(phuthu[n1]['Gia'])+parseInt(phuthu[n1]['PhuThuThucHienTaiNha']);
									var thanhtien_vienphi=phuthu[n1]['Gia'];
								}else{
									var phi_thuchien=0;
									var thanhtien_vienphi=0;
								}
								//var bnchitrabh=0;
								var phi_thuc_hien= ((parseInt(phi_thuchien) * parseInt(sl_moi_ngay)) * parseInt(so_ngay));
								var bn_chitra= (((parseInt(phi_thuchien) - parseInt(thanhtien_bhyt))*parseInt(sl_moi_ngay)) * parseInt(so_ngay));
								$('#rowed5').jqGrid('setCell',rowId,'PhiThucHien',phi_thuc_hien,'');
								$('#rowed5').jqGrid('setCell',rowId,'BNChiTra',bn_chitra,'');
							}									
						},200);						
						
						setTimeout(function(){
							tinhtongtien();
						},300);
} },

]}, align: 'center', hidden: false,classes:'songay'},
				 {name: 'ThanhTienBaoHiem', index: 'ThanhTienBaoHiem', search: false, width: "15%", editable: false, align: 'right', hidden: false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: "", defaultValue: '0'}},
			     {name: 'BNChiTra', index: 'BNChiTra', search: false, width: "18%", editable: false, align: 'right', hidden: false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: "", defaultValue: '0'}},
                {name: 'PhiThucHien', index: 'PhiThucHien', search: false, width: "18%", editable: false, align: 'right', hidden: false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: "", defaultValue: '0'}},
                {name: 'TrangThai', index: 'TrangThai', search: false, width: "15%", editable: false, align: 'center', hidden: false,edittype:"select",formatter:'select',editoptions:{value: trangthai}},
                {name: 'ThucHien', index: 'ThucHien', search: false, width: "18%", editable: true, align: 'center', hidden: false,edittype:"select",formatter:'select',editoptions:{value:"0:Hospital;1:Home;2:Seft",dataEvents: [{ type: 'change keyup', fn: function(e) {
						var tmp5 = $("#rowed5").jqGrid('getDataIDs'); 
						var row = $(e.target).closest('tr.jqgrow');
						var rowId = row.attr('id');
						var id_loaikham =$('#rowed5').jqGrid('getCell',rowId,'IDLoaiKham');	
						var sl_moi_ngay=$('#'+rowId+'_SLMoiNgay').val();
						var so_ngay=$('#'+rowId+'_SoNgay').val();
						var thanh_tien=$('#rowed5').jqGrid('getCell',rowId,'ThanhTien');
						var ThanhTienBaoHiem=$('#rowed5').jqGrid('getCell',rowId,'ThanhTienBaoHiem');
						var DonGiaBHYT=$('#rowed5').jqGrid('getCell',rowId,'DonGiaBHYT');
						var id_ncls =$('#rowed5').jqGrid('getCell',rowId,'IDNhomCLS');	
						$("#rowed5").jqGrid('setCell',rowId,'Sua', '1');
						var y=0;
						var yy=0;
						var n=0;
						var x=0;
						var a="";
							for(var i = 0; i < phuthu.length; i++) {							
							if(phuthu[i]['id'] == id_loaikham) {											
								 y=i;
								 break;
							}
						}
						for(var k = 0; k < tmp5.length; k++){
							var rowData = $("#rowed5").getRowData(tmp5[k]);
							if((rowData["IDNhomCLS"]==17)&&(x==0)&&($('#'+tmp5[k]+'_ThucHien').val()==1)){
								window.id_rowcls2=tmp5[k];
								//window.id_rowcls=tmp5[k];
								x++;
							}
						}
						var x=0;
						for(var l = 0; l < phuthu.length; l++){	
							if((parseInt(phuthu[l]['id'])==parseInt(id_loaikham)) && (parseInt(phuthu[l]['ID_NhomCLS'])==17) && (x==0)){
								n=l;
								x++;
								break;
							}
						}
										
						var thuchien=$('#'+rowId+'_ThucHien').val();
						if((phuthu[i]['DieuTriTaiNha']!=1)&& (thuchien==1)){
							thuchien=0;
							$('#'+rowId+'_ThucHien').val(0);
							$('#'+rowId+'_ThucHien').change();
							var sl_moi_ngay=$('#'+rowId+'_SLMoiNgay').val();
							var thanh_tien=$('#rowed5').jqGrid('getCell',rowId,'ThanhTien');
							var so_ngay=$('#'+rowId+'_SoNgay').val();
							//var phi_thuc_hien= ((parseInt(thanh_tien) * parseInt(sl_moi_ngay)) * parseInt(so_ngay));
							
							var x1=0;
							var n1=0;
							for(var l1 = 0; l1 < phuthu.length; l1++) {	
								if((parseInt(phuthu[l1]['id'])==parseInt(id_loaikham))&& (x1==0)){
									n1=l1;
									x1++;
									break;
								}
							}
							setTimeout(function(){
								if((window.loaidoituongkham=="BHYT") && (parseInt(DonGiaBHYT)>0 )){
									var bnchitrabh=(parseInt(DonGiaBHYT)*window.phantram)/100;
									var bn_chitra=(parseInt(DonGiaBHYT)*window.phantram)/100;
									var bh_chitra=parseInt(DonGiaBHYT)-bnchitrabh;
									var thanhtienbh=(parseInt(bh_chitra)* parseInt(sl_moi_ngay)) * parseInt(so_ngay);
									if(thuchien==0){
										var phi_thuc_hien= ((parseInt(phuthu[n1]['Gia']) * parseInt(sl_moi_ngay)) * parseInt(so_ngay));
										var bn_chitra= (((parseInt(phuthu[n1]['Gia']) - parseInt(bh_chitra))*parseInt(sl_moi_ngay)) * parseInt(so_ngay));
									}else if(thuchien==1){
										var phi_thuc_hien= (((parseInt(phuthu[n1]['Gia'])+parseInt(phuthu[n1]['PhuThuThucHienTaiNha'])) * parseInt(sl_moi_ngay)) * parseInt(so_ngay));
										var bn_chitra= parseInt(phi_thuc_hien) - ((parseInt(bh_chitra)* parseInt(sl_moi_ngay)) * parseInt(so_ngay));
									}else{
										var phi_thuc_hien=0;
										var bn_chitra= 0;
									}
									
									$('#rowed5').jqGrid('setCell',rowId,'PhiThucHien',phi_thuc_hien,'');
									$('#rowed5').jqGrid('setCell',rowId,'BNChiTra',bn_chitra,'');
									$('#rowed5').jqGrid('setCell',rowId,'ThanhTienBaoHiem',thanhtienbh,'');
									
								}else{
									/*if(window.n_id_quoctich==138 || window.n_id_quoctich==142 || window.n_id_quoctich==143){
										var thanhtien_bhyt=0;
										if(thuchien==0){
											var phi_thuchien=phuthu[n1]['GiaBaoChoBN'];
											var thanhtien_vienphi=phuthu[n1]['GiaBaoChoBN'];
										}else if(thuchien==1){
											var phi_thuchien=parseInt(phuthu[n1]['GiaBaoChoBN'])+parseInt(phuthu[n1]['PhuThuThucHienTaiNha']);
											var thanhtien_vienphi=phuthu[n1]['GiaBaoChoBN'];
										}else{
											var phi_thuchien=0;
											var thanhtien_vienphi=0;
										}
										
									}else{
										if(thuchien==0){
											var thanhtien_vienphi=phuthu[n1]['GiaBaoChoBN'];
											var thanhtien_bhyt=0;
											var phi_thuchien=parseInt(phuthu[n1]['GiaBaoChoBN'])*parseInt(phuthu[n1]['HeSoNuocNgoai']);
										}else if(thuchien==1){
											var thanhtien_vienphi=phuthu[n1]['GiaBaoChoBN'];
											var thanhtien_bhyt=0;
											var phi_thuchien=(parseInt(phuthu[n1]['GiaBaoChoBN'])*parseInt(phuthu[n1]['HeSoNuocNgoai']))+parseInt(phuthu[n1]['PhuThuThucHienTaiNha']);
										}else{
											var thanhtien_vienphi=0;
											var thanhtien_bhyt=0;
											var phi_thuchien=0;											
										}
									}*/
									var thanhtien_bhyt=0;
									if(thuchien==0){
										var phi_thuchien=phuthu[n1]['Gia'];
										var thanhtien_vienphi=phuthu[n1]['Gia'];
									}else if(thuchien==1){
										var phi_thuchien=parseInt(phuthu[n1]['Gia'])+parseInt(phuthu[n1]['PhuThuThucHienTaiNha']);
										var thanhtien_vienphi=phuthu[n1]['Gia'];
									}else{
										var phi_thuchien=0;
										var thanhtien_vienphi=0;
									}
									//alert(thuchien);
									var phi_thuc_hien= ((parseInt(phi_thuchien) * parseInt(sl_moi_ngay)) * parseInt(so_ngay));
									var bn_chitra= (((parseInt(phi_thuchien) - parseInt(thanhtien_bhyt))*parseInt(sl_moi_ngay)) * parseInt(so_ngay));
									$('#rowed5').jqGrid('setCell',rowId,'PhiThucHien',phi_thuc_hien,'');
									$('#rowed5').jqGrid('setCell',rowId,'BNChiTra',bn_chitra,'');
								}									
							},200);
							
							//$('#rowed5').jqGrid('setCell',rowId,'PhiThucHien',phi_thuc_hien,'');
							setTimeout(function(){
								tinhtongtien();
							},300);
							alert("Hạng mục khám này không cho phép thực hiện tại nhà");
						}else{
						
						if(thuchien==0){
							//$('#rowed5').jqGrid("setCell", rowId, 'ThanhTien', phuthu[i]['GiaBaoChoBN']);
							var sl_moi_ngay=$('#'+rowId+'_SLMoiNgay').val();
							var thanh_tien=parseInt(phuthu[i]['GiaBaoChoBN'])
							var so_ngay=$('#'+rowId+'_SoNgay').val();
							var phi_thuc_hien= ( (parseInt(thanh_tien) * parseInt(sl_moi_ngay)) * parseInt(so_ngay));
							var id_loaikham =$('#rowed5').jqGrid('getCell',rowId,'IDLoaiKham');	
							var sl_moi_ngay=$('#'+rowId+'_SLMoiNgay').val();
							var so_ngay=$('#'+rowId+'_SoNgay').val();
							var thanh_tien=$('#rowed5').jqGrid('getCell',rowId,'ThanhTien');
							var ThanhTienBaoHiem=$('#rowed5').jqGrid('getCell',rowId,'ThanhTienBaoHiem');
							var DonGiaBHYT=$('#rowed5').jqGrid('getCell',rowId,'DonGiaBHYT');
							console.log(phi_thuc_hien);
								
							var x1=0;
							var n1=0;
							for(var l1 = 0; l1 < phuthu.length; l1++) {	
								if((parseInt(phuthu[l1]['id'])==parseInt(id_loaikham))&& (x1==0)){
									n1=l1;
									x1++;
									break;
								}
							}
							setTimeout(function(){
								if((window.loaidoituongkham=="BHYT") && (parseInt(DonGiaBHYT)>0 )){
									var bnchitrabh=(parseInt(DonGiaBHYT)*window.phantram)/100;
									var bn_chitra=(parseInt(DonGiaBHYT)*window.phantram)/100;
									var bh_chitra=parseInt(DonGiaBHYT)-bnchitrabh;
									var thanhtienbh=(parseInt(bh_chitra)* parseInt(sl_moi_ngay)) * parseInt(so_ngay);
									if(thuchien==0){
										var phi_thuc_hien= ((parseInt(phuthu[n1]['Gia']) * parseInt(sl_moi_ngay)) * parseInt(so_ngay));
										var bn_chitra= (((parseInt(phuthu[n1]['Gia']) - parseInt(bh_chitra))*parseInt(sl_moi_ngay)) * parseInt(so_ngay));
									}else if(thuchien==1){
										var phi_thuc_hien= (((parseInt(phuthu[n1]['Gia'])+parseInt(phuthu[n1]['PhuThuThucHienTaiNha'])) * parseInt(sl_moi_ngay)) * parseInt(so_ngay));
										var bn_chitra= parseInt(phi_thuc_hien) - ((parseInt(bh_chitra)* parseInt(sl_moi_ngay)) * parseInt(so_ngay));
									}else{
										var phi_thuc_hien=0;
										var bn_chitra= 0;
									}
									
									$('#rowed5').jqGrid('setCell',rowId,'PhiThucHien',phi_thuc_hien,'');
									$('#rowed5').jqGrid('setCell',rowId,'BNChiTra',bn_chitra,'');
									$('#rowed5').jqGrid('setCell',rowId,'ThanhTienBaoHiem',thanhtienbh,'');
									
								}else{
									/*if(window.n_id_quoctich==138 || window.n_id_quoctich==142 || window.n_id_quoctich==143){
										var thanhtien_bhyt=0;
										if(thuchien==0){
											var phi_thuchien=phuthu[n1]['GiaBaoChoBN'];
											var thanhtien_vienphi=phuthu[n1]['GiaBaoChoBN'];
										}else if(thuchien==1){
											var phi_thuchien=parseInt(phuthu[n1]['GiaBaoChoBN'])+parseInt(phuthu[n1]['PhuThuThucHienTaiNha']);
											var thanhtien_vienphi=phuthu[n1]['GiaBaoChoBN'];
										}else{
											var phi_thuchien=0;
											var thanhtien_vienphi=0;
										}
										
									}else{
										if(thuchien==0){
											var thanhtien_vienphi=phuthu[n1]['GiaBaoChoBN'];
											var thanhtien_bhyt=0;
											var phi_thuchien=parseInt(phuthu[n1]['GiaBaoChoBN'])*parseInt(phuthu[n1]['HeSoNuocNgoai']);
										}else if(thuchien==1){
											var thanhtien_vienphi=phuthu[n1]['GiaBaoChoBN'];
											var thanhtien_bhyt=0;
											var phi_thuchien=(parseInt(phuthu[n1]['GiaBaoChoBN'])*parseInt(phuthu[n1]['HeSoNuocNgoai']))+parseInt(phuthu[n1]['PhuThuThucHienTaiNha']);
										}else{
											var thanhtien_vienphi=0;
											var thanhtien_bhyt=0;
											var phi_thuchien=0;											
										}
									}*/
									var thanhtien_bhyt=0;
									if(thuchien==0){
										var phi_thuchien=phuthu[n1]['Gia'];
										var thanhtien_vienphi=phuthu[n1]['Gia'];
									}else if(thuchien==1){
										var phi_thuchien=parseInt(phuthu[n1]['Gia'])+parseInt(phuthu[n1]['PhuThuThucHienTaiNha']);
										var thanhtien_vienphi=phuthu[n1]['Gia'];
									}else{
										var phi_thuchien=0;
										var thanhtien_vienphi=0;
									}
									//var bnchitrabh=0;
									var phi_thuc_hien= ((parseInt(phi_thuchien) * parseInt(sl_moi_ngay)) * parseInt(so_ngay));
									var bn_chitra= (((parseInt(phi_thuchien) - parseInt(thanhtien_bhyt))*parseInt(sl_moi_ngay)) * parseInt(so_ngay));
									$('#rowed5').jqGrid('setCell',rowId,'PhiThucHien',phi_thuc_hien,'');
									$('#rowed5').jqGrid('setCell',rowId,'BNChiTra',bn_chitra,'');
								}									
							},200);
						}else if(thuchien==1){
							if (typeof id_rowcls2 === 'undefined'){
								if(phuthu[i]['PhuThuThucHienTaiNha']==null){
									var pthu=0;	
								}else{
									var pthu=phuthu[i]['PhuThuThucHienTaiNha'];	
								}
								//$('#rowed5').jqGrid("setCell", rowId, 'ThanhTien', parseInt(phuthu[i]['GiaBaoChoBN'])+parseInt(pthu));
								
								var sl_moi_ngay=$('#'+rowId+'_SLMoiNgay').val();
								var thanh_tien=$('#rowed5').jqGrid('getCell',rowId,'ThanhTien');
								var ThanhTienBaoHiem=$('#rowed5').jqGrid('getCell',rowId,'ThanhTienBaoHiem');
								var so_ngay=$('#'+rowId+'_SoNgay').val();
								var phi_thuc_hien= (((parseInt(thanh_tien)+parseInt(pthu)) * parseInt(sl_moi_ngay)) * parseInt(so_ngay));
								console.log(phi_thuc_hien);
								
								var x1=0;
								var n1=0;
								for(var l1 = 0; l1 < phuthu.length; l1++) {	
									if((parseInt(phuthu[l1]['id'])==parseInt(id_loaikham))&& (x1==0)){
										n1=l1;
										x1++;
										break;
									}
								}
								setTimeout(function(){
								 if((window.loaidoituongkham=="BHYT") && (parseInt(DonGiaBHYT)>0 )){
									var bnchitrabh=(parseInt(DonGiaBHYT)*window.phantram)/100;
									var bn_chitra=(parseInt(DonGiaBHYT)*window.phantram)/100;
									var bh_chitra=parseInt(DonGiaBHYT)-bnchitrabh;
									var thanhtienbh=(parseInt(bh_chitra)* parseInt(sl_moi_ngay)) * parseInt(so_ngay);
									if(thuchien==0){
										var phi_thuc_hien= ((parseInt(phuthu[n1]['Gia']) * parseInt(sl_moi_ngay)) * parseInt(so_ngay));
										var bn_chitra= (((parseInt(phuthu[n1]['Gia']) - parseInt(bh_chitra))*parseInt(sl_moi_ngay)) * parseInt(so_ngay));
									}else if(thuchien==1){
										var phi_thuc_hien= (((parseInt(phuthu[n1]['Gia'])+parseInt(phuthu[n1]['PhuThuThucHienTaiNha'])) * parseInt(sl_moi_ngay)) * parseInt(so_ngay));
										var bn_chitra= parseInt(phi_thuc_hien) - ((parseInt(bh_chitra)* parseInt(sl_moi_ngay)) * parseInt(so_ngay));
									}else{
										var phi_thuc_hien=0;
										var bn_chitra= 0;
									}
									
									
									$('#rowed5').jqGrid('setCell',rowId,'PhiThucHien',phi_thuc_hien,'');
									$('#rowed5').jqGrid('setCell',rowId,'BNChiTra',bn_chitra,'');
									$('#rowed5').jqGrid('setCell',rowId,'ThanhTienBaoHiem',thanhtienbh,'');
									
								}else{
									/*if(window.n_id_quoctich==138 || window.n_id_quoctich==142 || window.n_id_quoctich==143){
										var thanhtien_bhyt=0;
										if(thuchien==0){
											var phi_thuchien=phuthu[n1]['GiaBaoChoBN'];
											var thanhtien_vienphi=phuthu[n1]['GiaBaoChoBN'];
										}else if(thuchien==1){
											var phi_thuchien=parseInt(phuthu[n1]['GiaBaoChoBN'])+parseInt(phuthu[n1]['PhuThuThucHienTaiNha']);
											var thanhtien_vienphi=phuthu[n1]['GiaBaoChoBN'];
										}else{
											var phi_thuchien=0;
											var thanhtien_vienphi=0;
										}
										
									}else{
										if(thuchien==0){
											var thanhtien_vienphi=phuthu[n1]['GiaBaoChoBN'];
											var thanhtien_bhyt=0;
											var phi_thuchien=parseInt(phuthu[n1]['GiaBaoChoBN'])*parseInt(phuthu[n1]['HeSoNuocNgoai']);
										}else if(thuchien==1){
											var thanhtien_vienphi=phuthu[n1]['GiaBaoChoBN'];
											var thanhtien_bhyt=0;
											var phi_thuchien=(parseInt(phuthu[n1]['GiaBaoChoBN'])*parseInt(phuthu[n1]['HeSoNuocNgoai']))+parseInt(phuthu[n1]['PhuThuThucHienTaiNha']);
										}else{
											var thanhtien_vienphi=0;
											var thanhtien_bhyt=0;
											var phi_thuchien=0;											
										}
									}*/
									var thanhtien_bhyt=0;
									if(thuchien==0){
										var phi_thuchien=phuthu[n1]['Gia'];
										var thanhtien_vienphi=phuthu[n1]['Gia'];
									}else if(thuchien==1){
										var phi_thuchien=parseInt(phuthu[n1]['Gia'])+parseInt(phuthu[n1]['PhuThuThucHienTaiNha']);
										var thanhtien_vienphi=phuthu[n1]['Gia'];
									}else{
										var phi_thuchien=0;
										var thanhtien_vienphi=0;
									}
									//var bnchitrabh=0;
									var phi_thuc_hien= ((parseInt(phi_thuchien) * parseInt(sl_moi_ngay)) * parseInt(so_ngay));
									var bn_chitra= (((parseInt(phi_thuchien) - parseInt(thanhtien_bhyt))*parseInt(sl_moi_ngay)) * parseInt(so_ngay));
									$('#rowed5').jqGrid('setCell',rowId,'PhiThucHien',phi_thuc_hien,'');
									$('#rowed5').jqGrid('setCell',rowId,'BNChiTra',bn_chitra,'');
								}									
							},200);
								
								//$('#rowed5').jqGrid('setCell',rowId,'PhiThucHien',phi_thuc_hien);
								//$('#rowed5').jqGrid('setCell',rowId,'BNChiTra',phi_thuc_hien-parseInt(ThanhTienBaoHiem));
							}else if(id_rowcls2){ 
								for(var i = 0; i< tmp5.length; i++){
									var rowData = $("#rowed5").getRowData(tmp5[i]);
									if((rowData["IDNhomCLS"]==17)&& (tmp5[i]!=rowId) && (id_ncls==17) && ($('#'+tmp5[i]+'_ThucHien').val()!=2)){
										$('#'+tmp5[i]+'_ThucHien').val(0);
										$('#'+tmp5[i]+'_ThucHien').change();
									}
								}
								if(id_rowcls2==rowId){
									
								//	$('#rowed5').jqGrid("setCell", id_rowcls2, 'ThanhTien', parseInt(phuthu[n]['GiaBaoChoBN'])+parseInt(phuthu[n]['PhuThuThucHienTaiNha']));
									var sl_moi_ngay=$('#'+rowId+'_SLMoiNgay').val();
									var thanh_tien=$('#rowed5').jqGrid('getCell',rowId,'ThanhTien');
									var ThanhTienBaoHiem=$('#rowed5').jqGrid('getCell',rowId,'ThanhTienBaoHiem');
									var so_ngay=$('#'+rowId+'_SoNgay').val();
									
									var phi_thuc_hien= ((parseInt(phuthu[n1]['Gia']) * parseInt(sl_moi_ngay)) * parseInt(so_ngay));
									
									var x1=0;
							var n1=0;
							for(var l1 = 0; l1 < phuthu.length; l1++) {	
								if((parseInt(phuthu[l1]['id'])==parseInt(id_loaikham))&& (x1==0)){
									n1=l1;
									x1++;
									break;
								}
							}
							setTimeout(function(){
								if((window.loaidoituongkham=="BHYT") && (parseInt(DonGiaBHYT)>0 )){
									var bnchitrabh=(parseInt(DonGiaBHYT)*window.phantram)/100;
									var bn_chitra=(parseInt(DonGiaBHYT)*window.phantram)/100;
									var bh_chitra=parseInt(DonGiaBHYT)-bnchitrabh;
									var thanhtienbh=(parseInt(bh_chitra)* parseInt(sl_moi_ngay)) * parseInt(so_ngay);
									if(thuchien==0){
										var phi_thuc_hien= ((parseInt(phuthu[n1]['Gia']) * parseInt(sl_moi_ngay)) * parseInt(so_ngay));
										var bn_chitra= (((parseInt(phuthu[n1]['Gia']) - parseInt(bh_chitra))*parseInt(sl_moi_ngay)) * parseInt(so_ngay));
									}else if(thuchien==1){
										var phi_thuc_hien= (((parseInt(phuthu[n1]['Gia'])+parseInt(phuthu[n1]['PhuThuThucHienTaiNha'])) * parseInt(sl_moi_ngay)) * parseInt(so_ngay));
										var bn_chitra= parseInt(phi_thuc_hien) - ((parseInt(bh_chitra)* parseInt(sl_moi_ngay)) * parseInt(so_ngay));
									}else{
										var phi_thuc_hien=0;
										var bn_chitra= 0;
									}
									
									
									$('#rowed5').jqGrid('setCell',rowId,'PhiThucHien',phi_thuc_hien,'');
									$('#rowed5').jqGrid('setCell',rowId,'BNChiTra',bn_chitra,'');
									$('#rowed5').jqGrid('setCell',rowId,'ThanhTienBaoHiem',thanhtienbh,'');
									
								}else{
									/*if(window.n_id_quoctich==138 || window.n_id_quoctich==142 || window.n_id_quoctich==143){
										var thanhtien_bhyt=0;
										if(thuchien==0){
											var phi_thuchien=phuthu[n1]['GiaBaoChoBN'];
											var thanhtien_vienphi=phuthu[n1]['GiaBaoChoBN'];
										}else if(thuchien==1){
											var phi_thuchien=parseInt(phuthu[n1]['GiaBaoChoBN'])+parseInt(phuthu[n1]['PhuThuThucHienTaiNha']);
											var thanhtien_vienphi=phuthu[n1]['GiaBaoChoBN'];
										}else{
											var phi_thuchien=0;
											var thanhtien_vienphi=0;
										}
										
									}else{
										if(thuchien==0){
											var thanhtien_vienphi=phuthu[n1]['GiaBaoChoBN'];
											var thanhtien_bhyt=0;
											var phi_thuchien=parseInt(phuthu[n1]['GiaBaoChoBN'])*parseInt(phuthu[n1]['HeSoNuocNgoai']);
										}else if(thuchien==1){
											var thanhtien_vienphi=phuthu[n1]['GiaBaoChoBN'];
											var thanhtien_bhyt=0;
											var phi_thuchien=(parseInt(phuthu[n1]['GiaBaoChoBN'])*parseInt(phuthu[n1]['HeSoNuocNgoai']))+parseInt(phuthu[n1]['PhuThuThucHienTaiNha']);
										}else{
											var thanhtien_vienphi=0;
											var thanhtien_bhyt=0;
											var phi_thuchien=0;											
										}
									}*/
									var thanhtien_bhyt=0;
									if(thuchien==0){
										var phi_thuchien=phuthu[n1]['Gia'];
										var thanhtien_vienphi=phuthu[n1]['Gia'];
									}else if(thuchien==1){
										var phi_thuchien=parseInt(phuthu[n1]['Gia'])+parseInt(phuthu[n1]['PhuThuThucHienTaiNha']);
										var thanhtien_vienphi=phuthu[n1]['Gia'];
									}else{
										var phi_thuchien=0;
										var thanhtien_vienphi=0;
									}
									//var bnchitrabh=0;
									var phi_thuc_hien= ((parseInt(phi_thuchien) * parseInt(sl_moi_ngay)) * parseInt(so_ngay));
									var bn_chitra= (((parseInt(phi_thuchien) - parseInt(thanhtien_bhyt))*parseInt(sl_moi_ngay)) * parseInt(so_ngay));
									$('#rowed5').jqGrid('setCell',rowId,'PhiThucHien',phi_thuc_hien,'');
									$('#rowed5').jqGrid('setCell',rowId,'BNChiTra',bn_chitra,'');
								}									
							},200);
									
									//$('#rowed5').jqGrid('setCell',rowId,'PhiThucHien',phi_thuc_hien);
									//$('#rowed5').jqGrid('setCell',rowId,'BNChiTra',phi_thuc_hien-parseInt(ThanhTienBaoHiem));
								}
								else{
									
								//	$('#rowed5').jqGrid("setCell", rowId, 'ThanhTien', parseInt(phuthu[i]['GiaBaoChoBN']));
								
									var sl_moi_ngay=$('#'+rowId+'_SLMoiNgay').val();
									var thanh_tien=parseInt(phuthu[i]['GiaBaoChoBN']);
									var ThanhTienBaoHiem=$('#rowed5').jqGrid('getCell',rowId,'ThanhTienBaoHiem');
									var so_ngay=$('#'+rowId+'_SoNgay').val();
									
									var phi_thuc_hien= ((parseInt(phuthu[n1]['Gia']) * parseInt(sl_moi_ngay)) * parseInt(so_ngay));
									$('#rowed5').jqGrid('setCell',rowId,'PhiThucHien',phi_thuc_hien);
									$('#rowed5').jqGrid('setCell',rowId,'BNChiTra',phi_thuc_hien-parseInt(ThanhTienBaoHiem));
									
									//$('#rowed5').jqGrid("setCell", rowId, 'PhiThucHien', parseInt(phuthu[i]['GiaBaoChoBN']));
								}
							}
							else{
								//$('#rowed5').jqGrid("setCell", rowId, 'ThanhTien', parseInt(phuthu[i]['GiaBaoChoBN']));
								
								var sl_moi_ngay=$('#'+rowId+'_SLMoiNgay').val();
								var thanh_tien=parseInt(phuthu[i]['GiaBaoChoBN']);
								var ThanhTienBaoHiem=$('#rowed5').jqGrid('getCell',rowId,'ThanhTienBaoHiem');
								var so_ngay=$('#'+rowId+'_SoNgay').val();
								
								var phi_thuc_hien= ( (parseInt(thanh_tien) * parseInt(sl_moi_ngay)) * parseInt(so_ngay));
								
								var x1=0;
							var n1=0;
							for(var l1 = 0; l1 < phuthu.length; l1++) {	
								if((parseInt(phuthu[l1]['id'])==parseInt(id_loaikham))&& (x1==0)){
									n1=l1;
									x1++;
									break;
								}
							}
							setTimeout(function(){
								if((window.loaidoituongkham=="BHYT") && (parseInt(DonGiaBHYT)>0 )){
									var bnchitrabh=(parseInt(DonGiaBHYT)*window.phantram)/100;
									var bn_chitra=(parseInt(DonGiaBHYT)*window.phantram)/100;
									var bh_chitra=parseInt(DonGiaBHYT)-bnchitrabh;
									var thanhtienbh=(parseInt(bh_chitra)* parseInt(sl_moi_ngay)) * parseInt(so_ngay);
									if(thuchien==0){
										var phi_thuc_hien= ((parseInt(phuthu[n1]['Gia']) * parseInt(sl_moi_ngay)) * parseInt(so_ngay));
										var bn_chitra= (((parseInt(phuthu[n1]['Gia']) - parseInt(bh_chitra))*parseInt(sl_moi_ngay)) * parseInt(so_ngay));
									}else if(thuchien==1){
										var phi_thuc_hien= (((parseInt(phuthu[n1]['Gia'])+parseInt(phuthu[n1]['PhuThuThucHienTaiNha'])) * parseInt(sl_moi_ngay)) * parseInt(so_ngay));
										var bn_chitra= parseInt(phi_thuc_hien) - ((parseInt(bh_chitra)* parseInt(sl_moi_ngay)) * parseInt(so_ngay));
									}else{
										var phi_thuc_hien=0;
										var bn_chitra= 0;
									}
									
									$('#rowed5').jqGrid('setCell',rowId,'PhiThucHien',phi_thuc_hien,'');
									$('#rowed5').jqGrid('setCell',rowId,'BNChiTra',bn_chitra,'');
									$('#rowed5').jqGrid('setCell',rowId,'ThanhTienBaoHiem',thanhtienbh,'');
									
								}else{
/*									if(window.n_id_quoctich==138 || window.n_id_quoctich==142 || window.n_id_quoctich==143){
										var thanhtien_bhyt=0;
										if(thuchien==0){
											var phi_thuchien=phuthu[n1]['GiaBaoChoBN'];
											var thanhtien_vienphi=phuthu[n1]['GiaBaoChoBN'];
										}else if(thuchien==1){
											var phi_thuchien=parseInt(phuthu[n1]['GiaBaoChoBN'])+parseInt(phuthu[n1]['PhuThuThucHienTaiNha']);
											var thanhtien_vienphi=phuthu[n1]['GiaBaoChoBN'];
										}else{
											var phi_thuchien=0;
											var thanhtien_vienphi=0;
										}
										
									}else{
										if(thuchien==0){
											var thanhtien_vienphi=phuthu[n1]['GiaBaoChoBN'];
											var thanhtien_bhyt=0;
											var phi_thuchien=parseInt(phuthu[n1]['GiaBaoChoBN'])*parseInt(phuthu[n1]['HeSoNuocNgoai']);
										}else if(thuchien==1){
											var thanhtien_vienphi=phuthu[n1]['GiaBaoChoBN'];
											var thanhtien_bhyt=0;
											var phi_thuchien=(parseInt(phuthu[n1]['GiaBaoChoBN'])*parseInt(phuthu[n1]['HeSoNuocNgoai']))+parseInt(phuthu[n1]['PhuThuThucHienTaiNha']);
										}else{
											var thanhtien_vienphi=0;
											var thanhtien_bhyt=0;
											var phi_thuchien=0;											
										}
									}*/	
									var thanhtien_bhyt=0;
									if(thuchien==0){
										var phi_thuchien=phuthu[n1]['Gia'];
										var thanhtien_vienphi=phuthu[n1]['Gia'];
									}else if(thuchien==1){
										var phi_thuchien=parseInt(phuthu[n1]['Gia'])+parseInt(phuthu[n1]['PhuThuThucHienTaiNha']);
										var thanhtien_vienphi=phuthu[n1]['Gia'];
									}else{
										var phi_thuchien=0;
										var thanhtien_vienphi=0;
									}
									//var bnchitrabh=0;
									var phi_thuc_hien= ((parseInt(phi_thuchien) * parseInt(sl_moi_ngay)) * parseInt(so_ngay));
									var bn_chitra= (((parseInt(phi_thuchien) - parseInt(thanhtien_bhyt))*parseInt(sl_moi_ngay)) * parseInt(so_ngay));
									$('#rowed5').jqGrid('setCell',rowId,'PhiThucHien',phi_thuc_hien,'');
									$('#rowed5').jqGrid('setCell',rowId,'BNChiTra',bn_chitra,'');
								}									
							},200);
								//$('#rowed5').jqGrid('setCell',rowId,'PhiThucHien',phi_thuc_hien);
								//$('#rowed5').jqGrid('setCell',rowId,'BNChiTra',phi_thuc_hien-parseInt(ThanhTienBaoHiem));
							}
							
						}else{
						//	$('#rowed5').jqGrid("setCell", rowId, 'ThanhTien',0 );
							$('#rowed5').jqGrid("setCell", rowId, 'PhiThucHien',0 );
							$('#rowed5').jqGrid('setCell',rowId,'BNChiTra',0);
						 }
							
						}
						 
/*						var tongtien =0;
						var phithuchien =0;
						for(var i=0;i < tmp5.length;i++){ 
							var rowData = $("#rowed5").getRowData(tmp5[i]);
							tongtien =parseInt(tongtien) + parseInt(rowData["ThanhTien"]);
							phithuchien =parseInt(phithuchien) + parseInt(rowData["PhiThucHien"]);
						}*/
						setTimeout(function(){
							tinhtongtien();
						},300);
								
 } }]} },
				{name: 'NguoiChiDinh', index: 'NguoiChiDinh', search: false, width: "15%", editable: false, align: 'center', hidden: false,edittype:"select",formatter:'select',editoptions:{value: nguoichidinh} },
                {name: 'NhanVienDuocChiDinhTH', index: 'NhanVienDuocChiDinhTH', search: false, width: "25%", editable: true, align: 'center', hidden: true,edittype:"select",formatter:'select',editoptions:{value: hotennv2}},
                {name: 'NguoiThucHien', index: 'NguoiThucHien', search: false, width: "25%", editable: true, align: 'center', hidden: true,edittype:"select",formatter:'select',editoptions:{value: hotennv2} },
			{name: 'GiaThueNgoaiThucHien', index: 'GiaThueNgoaiThucHien', search: false, width: "30%", editable: false, align: 'left', hidden: true},
				{name: 'ThoiGianTrungBinhThucHien', index: 'ThoiGianTrungBinhThucHien', search: false, width: "30%", editable: false, align: 'left', hidden: true},
				{name: 'IDKham', index: 'IDKham', search: false, width: "30%", editable: false, align: 'left', hidden: true},
				{name: 'IDPhongChuyenMon', index: 'IDPhongChuyenMon', search: false, width: "30%", editable: false, align: 'left', hidden: true},
				{name: 'MaBenhNhan', index: 'MaBenhNhan', search: false, width: "30%", editable: false, align: 'left', hidden: true},
				{name: 'LyDoHuyBo', index: 'LyDoHuyBo', search: false, width: "30%", editable: false, align: 'left', hidden: true},
				{name: 'Huy', index: 'Huy', search: false, width: "30%", editable: false, align: 'left', hidden: true},
				{name: 'IDLuotKham', index: 'IDLuotKham', search: false, width: "30%", editable: false, align: 'left', hidden: true},
				{name: 'Luu', index: 'Luu', search: false, width: "30%", editable: false, align: 'left', hidden: true},
				{name: 'IDNhomCLS', index: 'IDNhomCLS', search: false, width: "10%", editable: false, align: 'left', hidden: true},
				{name: 'NgayGioTao', index: 'NgayGioTao', search: false, width: "10%", editable: false, align: 'left', hidden: true},
				{name: 'TongTienTheoNhom', index: 'TongTienTheoNhom', search: false, width: "10%", editable: false, align: 'left', hidden: true},
				{name: 'Id_phy_dtph', index: 'Id_phy_dtph', search: false, width: "10%", editable: false, align: 'left', hidden: true},
				{name: 'LanChiDinh', index: 'LanChiDinh', search: false, width: "10%", editable: false, align: 'left', hidden: true},
				{name: 'PhanTramCungChiTra', index: 'PhanTramCungChiTra', search: false, width: "10%", editable: false, align: 'left', hidden: true},
				{name: 'ThanhTienCungChiTra', index: 'ThanhTienCungChiTra', search: false, width: "10%", editable: false, align: 'left', hidden: true},
				{name: 'Color', index: 'Color', search: false, width: "20%", editable: false, align: 'left', hidden: true},
				{name: 'Sua', index: 'Sua', search: false, width: "20%", editable: false, align: 'left', hidden: true},
				// endrowed5
				
            ],
            loadonce: false,
            scroll: false,
            modal: true,
		//	rownumbers: true,
            shrinkToFit: true,
			grid_save_option: "",
            cmTemplate: {sortable: false},
            rowNum: 10000000,
			pginput:false,
			pgbuttons:false,
            rowList: [],
           // pager: '#prowed5',
            sortname: 'ThoiGianVaoKham',
            height: 100,
            width: 100,
            viewrecords: true,
            ignoreCase: true,
			footerrow:true,
            sortorder: "desc",
			afterShowForm : function (formid) {
				xuongdong(formid);
				lendong(formid);
			},beforeShowForm: function(formid){	
				//	number_textbox(".editable");
					number_textbox("#jqg4_SLMoiNgay");
										  
			},
            loadComplete: function(data) {
				var tmp1 = $("#rowed5").jqGrid('getDataIDs'); 
				var tongtien =0;
				var phithuchien =0;
				var x=0;
				if(tmp1.length>0){
					$("#btn_chidinh").button('disable');
					//$("#btn_luu").button('enable');		
				}else{
					//$("#btn_luu").button('disable');	
				}
				for(var i=0;i < tmp1.length;i++){ 
				//alert(tmp1[i]);
				jQuery("#rowed5").jqGrid('editRow',tmp1[i]);
					var rowData = $("#rowed5").getRowData(tmp1[i]);	
					xoa = "<input class='custom_button_n' style='height:22px;width:50px; margin-left: -14px; box-shadow:none!important;cursor:pointer;' type='button' value='Xóa' onclick=\"n_xoa('"+tmp1[i]+"');\" />"; 
					//alert(xoa);
					$("#rowed5").jqGrid('setRowData',tmp1[i],{Xoa:xoa});
					$("#rowed5").jqGrid('setRowData', tmp1[i], false, { background: '#D3D3D3' });
					  
					if(rowData["TrangThai"]=="HuyBo"){
						jQuery("#rowed5").jqGrid('saveRow',tmp1[i]);
						$("#rowed5").jqGrid('setRowData', tmp1[i], false, { background: '#A9A9AA',border:'1px solid #A9A9AA;' });
					}else if(window.loaidoituongkham=="BHYT"){
						if(rowData["Color"]=="X"){
							$("#rowed5").jqGrid('setRowData', tmp1[i], false, { background: '#C5F7C1',border:'1px solid #dfd9c3' });
						}else if(rowData["Color"]=="V"){
							$("#rowed5").jqGrid('setRowData', tmp1[i], false, { background: '#FDFCC2',border:'1px solid #dfd9c3' });
						}
					}
					if(rowData["IDNhomCLS"]==25 || rowData["IDNhomCLS"]==26 ){
						
					}else{
						$("#"+tmp1[i]+"_SLMoiNgay").prop('disabled', true);
						$("#"+tmp1[i]+"_SoNgay").prop('disabled', true);
					}
					//6_SLMoiNgay
				}
				
		  		//$("#btn_inphieucd").focus();
				setTimeout(function(){
					$('#chongoikham').focus();
				//$('#chongoikham').on("keydown", false);
				//$('#chongoikham').select();
				},4000);
				tinhtongtien();
			
            },
            caption: " Hạng mục loại khám được chọn <span id='luotkhamnoingoai'></span>"
        });

       $("#rowed5").jqGrid('navGrid', "#prowed5", {add: false, edit: false, del: false, search: false, refresh: false,prmView: false, closeAfterEdit: true, clearAfterAdd: true, navkeys: [true, 38, 40], closeOnEscape: true});
		$("#rowed5").jqGrid('bindKeys', {});
		if(window.loaidoituongkham=="BHYT"){
			$("#luotkhamnoingoai").html("( Bảo hiểm y tế - Số thẻ: <?=$tam[0]['SoThe']?> )");
		}else{
			$("#luotkhamnoingoai").html("( Viện phí )");	
		}
		add_namclass();
}
	
	function create_xemtoathuoc_left(){
			mydata=[];
        $("#xemtoathuoc_left").jqGrid({
            data: mydata,
            datatype: "local",
            colNames: ['Id Loại khám','Loại khám', 'Bác sỹ', 'Giờ khám',  'Ngày khám',  'Ngày thuốc'],
            colModel: [
				{name: 'ID_LoaiKham', index: 'ID_LoaiKham', width: "10%", editable: false, align: 'left', hidden: true},
                {name: 'TenLoaiKham', index: 'TenLoaiKham', search: false, width: "40%", editable: false, align: 'left', hidden: false},
				{name: 'BacSy', index: 'BacSy', width: "20%", editable: false, align: 'right', hidden: false},
				{name: 'GioKham', index: 'GioKham', search: false, width: "20%", editable: false, align: 'left', hidden: false},
				{name: 'NgayKham', index: 'NgayKham', search: false, width: "20%", editable: false, align: 'left', hidden: false},
				{name: 'NgayThuoc', index: 'NgayThuoc', search: false, width: "20%", editable: false, align: 'left', hidden: false},
				
            ],
           loadonce: false,
            scroll: 1,
            modal: true,
            rowNum: 100,
			//multiselect: true,
            rowList: [30, 50, 70],
            pager: '#pdata_goikham',
            height: 100,
            width: 100,
            viewrecords: true,
            ignoreCase: true,
            shrinkToFit: true,
			grid_save_option: "",
			cmTemplate: {
    sortable: false
},
			afterShowForm : function (formid) {

			},
            onSelectRow: function(id) {
				if (id !== lastsel) {
                    $("#data_goikham").jqGrid('restoreRow', lastsel);
                    $(data_goikham).jqGrid('editRow', id, true);
                    lastsel = id;
                } else {
                    $("#data_goikham").jqGrid('restoreRow', lastsel);
                    lastsel = "";
                    //alert(id)
                }
			

            },
            ondblClickRow: function(rowId, rowIndex, columnIndex) {
            
            },
            onselect: function(rowId, rowIndex, columnIndex) {
              
            },
        
            loadComplete: function(data) {
			grid_filter_enter("#data_loaikham");
			},
            caption: "&nbsp;"
        });
        $("#xemloaithuoc_left").jqGrid('navGrid', "#pxemloaithuoc_left", {add: false, edit: false, del: false, search: false, refresh: true, closeAfterEdit: true, clearAfterAdd: true, navkeys: [true, 38, 40], closeOnEscape: true});
	$("#xemloaithuoc_left").jqGrid('bindKeys', {});
    }
	
		function create_xemtoathuoc_right() {
			mydata=[];
        $("#xemtoathuoc_right").jqGrid({
            data: mydata,
            datatype: "local",
            colNames: ['id thuốc','Tên thuốc', 'Số lượng', 'Đơn vị tính',  'Đường dùng',  'Cách dùng'],
            colModel: [
				{name: 'ID_Thuoc', index: 'ID_Thuoc', width: "10%", editable: false, align: 'left', hidden: true},
                {name: 'TenThuoc', index: 'TenThuoc', search: false, width: "30%", editable: false, align: 'left', hidden: false},
				{name: 'SoLuong', index: 'SoLuong', width: "20%", editable: false, align: 'right', hidden: false},
				{name: 'DonViTinh', index: 'DonViTinh', search: false, width: "20%", editable: false, align: 'left', hidden: false},
				{name: 'DuonDung', index: 'DuonDung', search: false, width: "20%", editable: false, align: 'left', hidden: false},
				{name: 'CachDung', index: 'CachDung', search: false, width: "50%", editable: false, align: 'left', hidden: false},
	
            ],
           loadonce: false,
            scroll: 1,
            modal: true,
            rowNum: 100,
			//multiselect: true,
            rowList: [30, 50, 70],
            pager: '#pdata_goikham',
            height: 100,
            width: 100,
            viewrecords: true,
            ignoreCase: true,
            shrinkToFit: true,
			grid_save_option: "",
			cmTemplate: {
    sortable: false
},
			afterShowForm : function (formid) {

			},
            onSelectRow: function(id) {
				if (id !== lastsel) {
                    $("#data_goikham").jqGrid('restoreRow', lastsel);
                    $(data_goikham).jqGrid('editRow', id, true);
                    lastsel = id;
                } else {
                    $("#data_goikham").jqGrid('restoreRow', lastsel);
                    lastsel = "";
                    //alert(id)
                }
			
            },
            ondblClickRow: function(rowId, rowIndex, columnIndex) {
            
            },
            onselect: function(rowId, rowIndex, columnIndex) {
              
            },
        
            loadComplete: function(data) {
			grid_filter_enter("#data_loaikham");
			},
            caption: "&nbsp;"
        });
        $("#xemtoathuoc_right").jqGrid('navGrid', "#pxemtoathuoc_right", {add: false, edit: false, del: false, search: false, refresh: true, closeAfterEdit: true, clearAfterAdd: true, navkeys: [true, 38, 40], closeOnEscape: true});
	$("#xemtoathuoc_right").jqGrid('bindKeys', {});
    }

	function create_goikham() {
        $("#data_goikham").jqGrid({
            url: 'resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_goikham',
            datatype: "json",
            colNames: ['Id gói khám','Tên gói khám', 'Số tiền dự kiến', 'Mô tả', 'Ghi chú'],
            colModel: [
                {name: 'ID_GoiKham', index: 'ID_GoiKham', width: "0%", editable: false, align: 'left', hidden: true},
                {name: 'TenGoiKham', index: 'TenGoiKham', search: false, width: "20%", editable: false, align: 'left', hidden: false},
				{name: 'SoTienDuKien', index: 'SoTienDuKien', width: "7%", editable: false, align: 'right', hidden: false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: "", defaultValue: '0'}},
				{name: 'MoTa', index: 'MoTa', search: false, width: "10%", editable: false, align: 'left', hidden: false},
				{name: 'GhiChu', index: 'GhiChu', width: "30%", editable: false, align: 'left', hidden: false},
            ],
           		loadonce: true,
				scroll: 1,	 
				modal:true,	 	
				pager: '#pdata_goikham',	
				rowNum: 100,
				gridview: true,
				pginput:false,
				pgbuttons:false,
				rowList:[],
				sortname: 'ID_GoiKham',
				height:100,
				width: 100,
				viewrecords: true,	
				ignoreCase:true,
				shrinkToFit:true,
				grouping: false,
				stringResult:true,
				sortorder: "asc",
			
			afterShowForm : function (formid) {

			},
            onSelectRow: function(id) {
				if (id !== lastsel) {
                    $("#data_goikham").jqGrid('restoreRow', lastsel);
                    $(data_goikham).jqGrid('editRow', id, true);
                    lastsel = id;
                } else {
                    $("#data_goikham").jqGrid('restoreRow', lastsel);
                    lastsel = "";
                    //alert(id)
                }
			
			
			var rowData = jQuery(this).getRowData(id); 
			var ID_GoiKham = rowData['ID_GoiKham'];// alert(ID_LuotKham);				
			$("#data_loaikham").jqGrid('setGridParam',{datatype: 'json',url:"resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_loaikham_by_idgoikham&id="+ID_GoiKham+'&idluotkham='+window.idluotkham}).trigger('reloadGrid');
			
             
            },
            ondblClickRow: function(rowId, rowIndex, columnIndex) {
            
            },
            onselect: function(rowId, rowIndex, columnIndex) {
              
            },
        
            loadComplete: function(data) {
			ids = $('#data_goikham').jqGrid('getDataIDs');				 
			$("#data_goikham").jqGrid("setSelection",ids[0], true);
			},
            caption: "Gói khám"
        });
        $("#data_goikham").jqGrid('navGrid', "#pdata_goikham", {add: false, edit: false, del: false, search: false, refresh: true, closeAfterEdit: true, clearAfterAdd: true, navkeys: [true, 38, 40], closeOnEscape: true});
	$("#data_goikham").jqGrid('bindKeys', {});
    }

	function create_loaikham() {
			mydata=[];
        $("#data_loaikham").jqGrid({
            data: mydata,
            datatype: "local",
            colNames: ['Id gói khám','Tên loại khám','Giá báo cho Bệnh nhân', 'Giá báo cho Bệnh nhân','Đơn giá BHYT','Phụ thu', 'Mô tả',  'GiaThueNgoaiThucHien',  'ThoiGianTrungBinhThucHien',  'IDLuotKham',  'IDPhongChuyenMon',  'MaBenhNhan',  'ID_NhomCLS','',''],
            colModel: [
				{name: 'ID_LoaiKham', index: 'ID_LoaiKham', width: "10%", editable: false, align: 'left', hidden: true},
                {name: 'TenLoaiKham', index: 'TenLoaiKham', search: false, width: "20%", editable: false, align: 'left', hidden: false},
				{name: 'GiaHienThi', index: 'GiaHienThi', width: "10%", editable: false, align: 'right', hidden: false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: "", defaultValue: '0'}},
				{name: 'BaoGiaChoBN', index: 'BaoGiaChoBN', width: "10%", editable: false, align: 'right', hidden: true,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: "", defaultValue: '0'}},
				{name:'GiaTheoBaoHiem',index:'GiaTheoBaoHiem', width:"10%", editable:true,align:'right',edittype:"text",hidden:false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: "", defaultValue: '0'}},
				{name:'GiaPhuThu',index:'GiaPhuThu', width:"10%", editable:true,align:'right',edittype:"text",hidden:false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: "", defaultValue: '0'}},	
				{name: 'GhiChu', index: 'GhiChu', search: false, width: "30%", editable: false, align: 'left', hidden: false},
				{name: 'GiaThueNgoaiThucHien', index: 'GiaThueNgoaiThucHien', search: false, width: "30%", editable: false, align: 'left', hidden: true},
				{name: 'ThoiGianTrungBinhThucHien', index: 'ThoiGianTrungBinhThucHien', search: false, width: "30%", editable: false, align: 'left', hidden: true},
				{name: 'IDLuotKham', index: 'IDLuotKham', search: false, width: "30%", editable: false, align: 'left', hidden: true},
				{name: 'IDPhongChuyenMon', index: 'IDPhongChuyenMon', search: false, width: "30%", editable: false, align: 'left', hidden: true},
				{name: 'MaBenhNhan', index: 'MaBenhNhan', search: false, width: "30%", editable: false, align: 'left', hidden: true},
				{name: 'ID_NhomCLS', index: 'ID_NhomCLS', search: false, width: "30%", editable: false, align: 'left', hidden: true},
				{name: 'HeSoNuocNgoai', index: 'HeSoNuocNgoai', search: false, width: "10%", editable: false, align: 'left', hidden: true},
				{name: 'Color', index: 'Color', search: false, width: "30%", editable: false, align: 'left', hidden: true},

            ],
           loadonce: false,
            scroll: 1,
            modal: true,
            rowNum: 100,
			multiselect: true,
            rowList: [30, 50, 70],
            pager: '#pdata_goikham',
            height: 100,
            width: 100,
            viewrecords: true,
            ignoreCase: true,
            shrinkToFit: true,
			grid_save_option: "",
			cmTemplate: {
    sortable: false
},
			afterShowForm : function (formid) {

			},
            onSelectRow: function(id) {
				if (id !== lastsel) {
                    $("#data_goikham").jqGrid('restoreRow', lastsel);
                    $(data_goikham).jqGrid('editRow', id, true);
                    lastsel = id;
                } else {
                    $("#data_goikham").jqGrid('restoreRow', lastsel);
                    lastsel = "";
                    //alert(id)
                }

             
            },
            ondblClickRow: function(rowId, rowIndex, columnIndex) {
            
            },
            onselect: function(rowId, rowIndex, columnIndex) {
              
            },
        
            loadComplete: function(data) {
				grid_filter_enter("#data_loaikham");
				var tmp3 = $("#data_loaikham").jqGrid('getDataIDs'); 
				 for(var i=0;i < tmp3.length;i++){ 
					var rowData = $("#data_loaikham").getRowData(tmp3[i]);	
					if(rowData["Color"]=="X"){
						$("#data_loaikham").jqGrid('setRowData', tmp3[i], false, { background: '#C5F7C1',border:'1px solid #dfd9c3' });
					}else if(rowData["Color"]=="V"){
						$("#data_loaikham").jqGrid('setRowData', tmp3[i], false, { background: '#FDFCC2',border:'1px solid #dfd9c3' });
					}
				 }
			},
            caption: "Loại khám"
        });
        $("#data_goikham").jqGrid('navGrid', "#pdata_goikham", {add: false, edit: false, del: false, search: false, refresh: true, closeAfterEdit: true, clearAfterAdd: true, navkeys: [true, 38, 40], closeOnEscape: true});
	$("#data_loaikham").jqGrid('bindKeys', {});
    }

    function create_layout() {
        $('#panel_main').layout({
            resizerClass: 'ui-state-default'
                    , east: {
                resizable: true
                        , size: "60%"
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
                        , size: "28%"

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

   
function n_xoa(tam){
		if(window.n_dathanhtoanbill!=1 && window.n_khoachidinh!=1){
			var rowData_luu = $("#rowed5").getRowData(tam);
			if(rowData_luu["Luu"]!=1){
			$('#rowed5').jqGrid('delRowData',tam);
			var tmp5 = $("#rowed5").jqGrid('getDataIDs'); 
	
			  var tongtien =0;
			  var phithuchien =0;
				for(var i=0;i < tmp5.length;i++){ 
					var rowData = $("#rowed5").getRowData(tmp5[i]);
					xoa = "<input class='custom_button_n' style='height:22px;width:50px;margin-left: -14px; box-shadow:none!important; cursor:pointer;' type='button' value='Xóa' onclick=\"n_xoa('"+tmp5[i]+"');\" />"; 
					$("#rowed5").jqGrid('setRowData',tmp5[i],{Xoa:xoa});
				}
				tinhtongtien();
				
			}else{
				var rowData2 = $("#rowed5").getRowData(tam);
				if(rowData2["IDNhomCLS"]==25 || rowData2["IDNhomCLS"]==26){
					var _n_id=	rowData2["Id_phy_dtph"];
				}else{
					var _n_id=	rowData2["IDKham"];
				}
				$.post('resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=check_xoa_dtph&id='+_n_id+'&nhom='+rowData2["IDNhomCLS"]).done(function(data) {
						if(data=='true'){
							if(rowData2["IDNhomCLS"]==25 || rowData2["IDNhomCLS"]==26){
								$("#idk2").val(tam);
								$('#dialog2').dialog('open');
							}else{
								$("#idk").val(tam);
								$('#dialog').dialog('open');
								}
						}else{
							tooltip_message("Loại khám này không được phép xóa");
						}
				});
			}
			//tinhtien theo nhom loai kham
			var tongtien_vatlytrilieu=0;
			var tongtien_tthuat_pthuat=0;
			var tongtien_family_flanning=0;
			var tongtien_dieuduong=0;
			var tmp = $("#rowed5").jqGrid('getDataIDs'); 
			for(var i=0;i < tmp.length;i++){ 
				var rowData = $("#rowed5").getRowData(tmp[i]);
				
				if(rowData["IDNhomCLS"]==25){
					tongtien_vatlytrilieu=parseInt(tongtien_vatlytrilieu) + parseInt(rowData["PhiThucHien"]);
					$('#rowed5').jqGrid('setCell',tmp[i],'TongTienTheoNhom',tongtien_vatlytrilieu);
				}else if(rowData["IDNhomCLS"]==23){
					tongtien_tthuat_pthuat=parseInt(tongtien_tthuat_pthuat) + parseInt(rowData["PhiThucHien"]);
					$('#rowed5').jqGrid('setCell',tmp[i],'TongTienTheoNhom',tongtien_tthuat_pthuat);
				}else if(rowData["IDNhomCLS"]==52){
					tongtien_family_flanning=parseInt(tongtien_family_flanning) + parseInt(rowData["PhiThucHien"]);
					$('#rowed5').jqGrid('setCell',tmp[i],'TongTienTheoNhom',tongtien_family_flanning);
				}else if(rowData["IDNhomCLS"]==26){
					tongtien_dieuduong=parseInt(tongtien_dieuduong) + parseInt(rowData["PhiThucHien"]);
					$('#rowed5').jqGrid('setCell',tmp[i],'TongTienTheoNhom',tongtien_dieuduong);
				}	
			
		}//end for
		for(var i=0;i < tmp.length;i++){ 
		//alert(tongtien_vatlytrilieu+"-"+tongtien_tthuat_pthuat+"-"+tongtien_family_flanning+"-"+tongtien_dieuduong);
		var rowData = $("#rowed5").getRowData(tmp[i]);
		if(rowData["IDNhomCLS"]==25){
				$('#rowed5').jqGrid('setCell',tmp[i],'TongTienTheoNhom',tongtien_vatlytrilieu);
			}else if(rowData["IDNhomCLS"]==23){
				$('#rowed5').jqGrid('setCell',tmp[i],'TongTienTheoNhom',tongtien_tthuat_pthuat);
			}else if(rowData["IDNhomCLS"]==52){
				$('#rowed5').jqGrid('setCell',tmp[i],'TongTienTheoNhom',tongtien_family_flanning);
			}else if(rowData["IDNhomCLS"]==26){
				$('#rowed5').jqGrid('setCell',tmp[i],'TongTienTheoNhom',tongtien_dieuduong);
				}
				
		}//end for
		//end tong tien nhom
	}
}
	
	function load_select_hotennv(){
	window.hotennv = $.ajax({url: "resource.php?module=web_services&function=get_auto_edit_option_byid&action=index&term=ID_PhongBan<>21&status=2&tables=DM_NhanVien&id=ID_NhanVien&name=NickName", async: false, success: function(data, result) {if (!result) alert('Không load được danh mục nhân viên');}}).responseText;	
	
}
	function load_select_trangthai(){
	window.trangthai = $.ajax({url: "resource.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=2&tables=DM_TrangThaiCLSCuaBenhNhan&id=ID4Dev&name=TenTrangThaiCLSCuaBenhNhan", async: false, success: function(data, result) {if (!result) alert('Không load được danh mục trạng thái');}}).responseText;	
	
}
function load_select_tenloaikham(){
	window.tenloaikham = $.ajax({url: "resource.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=2&tables=DM_LoaiKham&id=ID_LoaiKham&name=TenLoaiKham", async: false, success: function(data, result) {if (!result) alert('Không load được danh mục loại khám');}}).responseText;	
	
}
function load_select_phy(){
	window.phy = jQuery.parseJSON($.ajax({url: "resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_nhomcon&ac=phy", async: false, success: function(data, result) {if (!result) alert('Không load được danh mục loại khám');}}).responseText);	
}

function load_select_nguoichidinh(){
	window.nguoichidinh = $.ajax({url: 'resource.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=2&tables=DM_NhanVien&id=ID_NhanVien&name=NickName', async: false, success: function(data, result) {if (!result) alert('Không load được danh mục nhân viên');}}).responseText;
	$("#rowed5").setColProp('#NguoiChiDinh', { editoptions: { value: nguoichidinh} });
	$('#NguoiChiDinh').empty();
	create_select("#NguoiChiDinh",nguoichidinh);
}

function load_select_tennhomcha(){
	window.tennhomcha = $.ajax({url: "resource.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=2&tables=NhomCLS&id=ID_NhomCLS&name=TenNhom", async: false, success: function(data, result) {if (!result) alert('Không load được danh mục NhomCLS');}}).responseText;	
}
function formatMoney(num) {
    var p = num.toFixed(2).split(".");
    return p[0].split("").reverse().reduce(function(acc, num, i, orig) {
        return  num + (i && !(i % 3) ? "," : "") + acc;
    }, "");
}
function fun_inchidinh(){
	$('#btn_inphieucd').button('enable');
	$.cookie("in_status", "print_preview"); 
	var tmp1 = $("#rowed5").jqGrid('getDataIDs'); 
	window.vatlytrilieu=0;
	window.dieuduong=0;
	window.phauthuatgiaithuat=0;
	window.family_planning=0;
	for(var i=0;i<tmp1.length;i++){
		var rowData = $("#rowed5").jqGrid ('getRowData', tmp1[i]);
		if(rowData['IDNhomCLS']==25 && rowData['TrangThai'] !='HuyBo'){
			window.vatlytrilieu=1;
		}else if(rowData['IDNhomCLS']==26 && rowData['TrangThai'] !='HuyBo'){
			window.dieuduong=1;
		}else if((rowData['IDNhomCLS']==23 || rowData['IDNhomCLS']==56 || rowData['IDNhomCLS']==57 || rowData['IDNhomCLS']==58 || rowData['IDNhomCLS']== 60 || rowData['IDNhomCLS']==64 || rowData['IDNhomCLS']==65 || rowData['IDNhomCLS']==66 || rowData['IDNhomCLS']==67 || rowData['IDNhomCLS']==68 || rowData['IDNhomCLS']==70 || rowData['IDNhomCLS']==71 || rowData['IDNhomCLS']==72 || rowData['IDNhomCLS']==73 || rowData['IDNhomCLS']==74 || rowData['IDNhomCLS']==75 || rowData['IDNhomCLS']==76 || rowData['IDNhomCLS']==77 || rowData['IDNhomCLS']==78 || rowData['IDNhomCLS']==79) && rowData['TrangThai'] !='HuyBo'){
			window.phauthuatgiaithuat=1;
		}else if(rowData['IDNhomCLS']==52 && rowData['TrangThai'] !='HuyBo'){
			window.family_planning=1;
		}
	}
	dialog_report("Xem trước khi in",90,90,"u78787878975f","resource.php?module=report&view=<?=$modules?>&action=phieuchidinhdtph_all&header=top&vatlytrilieu="+window.vatlytrilieu+"&dieuduong="+window.dieuduong+"&phauthuatgiaithuat="+window.phauthuatgiaithuat+"&family_planning="+window.family_planning+"&id_benhnhan="+$("#idbenhnhan").val()+"&id_luotkham="+$("#idluotkham").val()+"&type=report&id_form=10",'PhieuChiDinhDieuTri');
		
}
function add_namclass(){
	$("#rowed4").hover(function(){
		$(this).find("tr").addClass('nam-hover');
	});
	$("#rowed5").hover(function(){
		$(this).find("tr").addClass('nam-hover');
	});	
}

function tinhtongtien(){
	var  Sum_ThanhTienBaoHiem = $("#rowed5").jqGrid('getCol', 'ThanhTienBaoHiem', false, 'sum');
	var  Sum_BNChiTra = $("#rowed5").jqGrid('getCol', 'BNChiTra', false, 'sum');
	var  Sum_PhiThucHien = $("#rowed5").jqGrid('getCol', 'PhiThucHien', false, 'sum');
	$("#rowed5").jqGrid('footerData','set', {
		LoaiKham: 'Tổng tiền:', 
		ThanhTienBaoHiem: Sum_ThanhTienBaoHiem,
		BNChiTra: Sum_BNChiTra,
		PhiThucHien: Sum_PhiThucHien,
	});
}

function resize_control() {
	$("#rowed3 ").setGridWidth($(".left_col").width() - 11);
	$("#rowed3").setGridHeight($(".right_col").height() - 60);
	$("#rowed4").setGridWidth($(".center_col").width() - 11);
	$("#rowed4").setGridHeight($(".center_col").height() - 94);
	$("#rowed5").setGridWidth($(".right_col").width() - 11);
	$("#rowed5").setGridHeight($(".right_col").height() - 127);
	//alert($(".data_chongoikham").width()+"_"+$(".data_chongoikham").height());
	$("#data_goikham ").setGridWidth($(".data_chongoikham").width() - 300);
	$("#data_goikham").setGridHeight($(".data_chongoikham").height() - 220);
	$("#data_loaikham ").setGridWidth($(".data_chongoikham").width() - 300);
	$("#data_loaikham").setGridHeight($(".data_chongoikham").height() - 230);
	
	$("#xemtoathuoc_left ").setGridWidth($(".xemtoathuoc").width() - 880);
	$("#xemtoathuoc_left").setGridHeight($(".xemtoathuoc").height() - 500);
	$("#xemtoathuoc_right ").setGridWidth($(".xemtoathuoc").width() - 780);
	$("#xemtoathuoc_right").setGridHeight($(".xemtoathuoc").height() - 500);
	
}
</script>

