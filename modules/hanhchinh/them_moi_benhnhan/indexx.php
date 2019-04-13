<!--<link rel="stylesheet" href="../../../css/form_css.css" type="text/css" media="screen"/>-->
<style>
#luotkhamnoitrutontai{
	height:40px !important;
}
input[type="radio"]:focus {
-webkit-box-shadow: 0px 0px 1px 1px #0463B4!important;
  box-shadow:  0px 0px 1px 1px #208AC8 !important;
}
#save_data:hover:enabled,#save_data:focus:enabled, #clear_all:hover:enabled, #clear_all:focus:enabled, #bndk:hover:enabled, #bndk:focus:enabled{
    background: url("js/grid/themes/south-street/images/ui-bg_highlight-soft_25_67b021_1x100.png") repeat-x scroll 50% 50% #67B021;
    border: 1px solid #327E04;
    color: #FFFFFF;
    font-weight: bold;
}
.ui-jqgrid-titlebar{
	padding-top: 0px!important;
	padding-bottom: 0px!important;
	border-bottom-width: 0px!important;
	margin-top: -6px!important;
}
#rowed3 .ui-corner-all,#rowed3  .ui-corner-top,#rowed3  .ui-corner-left,#rowed3  .ui-corner-tl {
    border-top-left-radius: 17px!important;
}
.ui-widget-overlay {
		opacity:0.01;
		filter: alpha(opacity=1);
		-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=1)";
		/*overlay trong suot*/
	 }
	#holot,#tenbn,#sonha,#nlh{
		text-transform:capitalize
	}


input:focus::-webkit-input-placeholder
{
    color: transparent;
}
.ui-icon.ui-icon-info
{
    background-image: url("js/grid/themes/le-frog/images/ui-icons_cd0a0a_256x240.png")!important;
}
#thongtinchinh{
	margin-top: 0px
}
input:focus::-moz-placeholder { color:transparent; }
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
	input[type=radio]{
   border: 1px solid #327E04!important;
}
	.custom-combobox-input {
		width:103px !important;

	}
	div.form_row input[type=text]{

	text-align:left;

}
	#ui-id-2.ui-menu {
  	width: 800px!important; display:none; position:absolute;
	box-shadow:0px 0px 3px #333;
   }
   #ui-id-3.ui-menu {
  	width: 300px!important; display:none; position:absolute;
	box-shadow:0px 0px 3px #333;
   }
   #nghenghiep1{
   margin-left:5px;
   width: 163px !important;
   }
   #quoctich1{
	width: 113px !important;
	}
    .thongtinchinh{
		 display:inline-block;
		 margin-right:5px;
		 margin-bottom:1px;
		 vertical-align:top;
		 margin-top:1px;
	 }
	 a.ui-button, a.fm-button {
    visibility: visible!important;
}
</style>
<body>
<div id="luotkhamnoitrutontai" style="display:none;">
 Bệnh nhân đã có một lượt khám nội trú đang chờ,bạn không thể tạo lượt khám mới
</div>
<div id="luotkhamtontai" style="display:none">
 Bệnh nhân đã có một lượt khám đang chờ,bạn không thể tạo lượt khám mới
</div>
 <div  class="DM_xaphuong">
    <table id="DM_xaphuong">
    </table>
    <div id="prowed_DM_xaphuong"></div>
  </div>
<div >
<?php
if(isset($_GET['oper']) && $_GET['oper']=='edit'){

	$data= new SQLServer;
	$store_name="{call GD2_GetThongTinBenhNhan (?)}";
	$params = array(	$_GET["idbenhnhan"]		);



	$query=$data->query( $store_name, $params);//Goi store
	$excute= new SQLServerResult($query);
	$thongtinbenhnhan= $excute->get_as_array();

	$store_name1="{call GD2_nocu_get (?)}";
	$params1 = array(	$_GET["idbenhnhan"]		);



	$query1=$data->query( $store_name1, $params1);//Goi store
	$excute= new SQLServerResult($query1);
	$nocu= $excute->get_as_array();


	//$ten =$tam[0]["HoLotBenhNhan"]." ".$tam[0]["TenBenhNhan"];
	$tam["idbenhnhan"]=$thongtinbenhnhan[0]["ID_BenhNhan"];
	$tam["MaBenhNhan"]=$thongtinbenhnhan[0]["MaBenhNhan"];
	$tam["NamSinh"]=$thongtinbenhnhan[0]["NamSinh"];
	$tam["SoThangTuoi"]=$thongtinbenhnhan[0]["SoThangTuoi"];
	 if($thongtinbenhnhan[0]["NgayThangNamSinh"]!=""){
			$tam["NgayThangNamSinh"]=$thongtinbenhnhan[0]["NgayThangNamSinh"]->format('d-m-Y');
		 }else{
			 $tam["NgayThangNamSinh"]="";
		 };

	$idhenkham=$_GET['idhenkham'];
	$tam["DienThoai2"]=$thongtinbenhnhan[0]["DienThoai2"];
	$tam["ID_CongTy"]=$thongtinbenhnhan[0]["ID_CongTy"];
	$tam["ID_QuanHuyen"]=$thongtinbenhnhan[0]["ID_QuanHuyen"];
	$tam["ID_QuocTich"]=$thongtinbenhnhan[0]["ID_QuocTich"];
	$tam["ID_DanToc"]=$thongtinbenhnhan[0]["ID_DanToc"];
	$tam["ID_NgheNghiep"]=$thongtinbenhnhan[0]["ID_NgheNghiep"];
	$tam["TenNguoiLienHe"]=$thongtinbenhnhan[0]["TenNguoiLienHe"];
	$tam["QuanHeVoiBN"]=$thongtinbenhnhan[0]["QuanHeVoiBN"];
	$tam["DienThoaiNguoiLienHe"]=$thongtinbenhnhan[0]["DienThoaiNguoiLienHe"];
	$tam["ID_XaPhuong"]=$thongtinbenhnhan[0]["ID_XaPhuong"];
	$tam["QuanHeVoiBenhVien"]=$thongtinbenhnhan[0]["QuanHeVoiBenhVien"];
	$tam["GioiTinh"]=$thongtinbenhnhan[0]["GioiTinh"];
    $tam["HoLotBenhNhan"]= $thongtinbenhnhan[0]["HoLotBenhNhan"];
	$tam["TenBenhNhan"]=$thongtinbenhnhan[0]["TenBenhNhan"];
	$tam["ID_BenhNhan"]=$thongtinbenhnhan[0]["ID_BenhNhan"];
	$tam["NamSinh"]=$thongtinbenhnhan[0]["NamSinh"];
	$tam["diachi"]=$thongtinbenhnhan[0]["DiaChi"];
	$tam["dienthoai1"]=$thongtinbenhnhan[0]["DienThoai1"];

}else{
	$idhenkham=0;
	$tam["MaBenhNhan"]="";
	$tam["NamSinh"]="";
	$tam["SoThangTuoi"]="";
	$tam["NgayThangNamSinh"]="";
	$tam["DienThoai2"]="";
	$tam["ID_CongTy"]="";
	$tam["ID_QuanHuyen"]="";
	$tam["ID_QuocTich"]="";
	$tam["ID_DanToc"]="";
	$tam["ID_NgheNghiep"]="";
	$tam["TenNguoiLienHe"]="";
	$tam["QuanHeVoiBN"]="";
	$tam["DienThoaiNguoiLienHe"]="";
	$tam["ID_XaPhuong"]="";
	$tam["QuanHeVoiBenhVien"]="";
	$tam["GioiTinh"]="";
    $tam["HoLotBenhNhan"]="";
	$tam["TenBenhNhan"]="";
	$tam["ID_BenhNhan"]="";
	$tam["NamSinh"]="";
	$tam["diachi"]="";
	$tam["dienthoai1"]="";
	$tam["idbenhnhan"]='';

}

?>
<div class="thongtinchinh" style="width:100%;margin-top:5px;display:inline-block!important;overflow-y:scroll!important">
      <div id="main_top" class="ui-dialog ui-widget ui-widget-content ui-corner-all ui-resizable" style="width:99%;  box-shadow:none!important;  display: block!important;z-index: 1 !important;" >
   	   <div class="ui-dialog-titlebar ui-widget-header ui-corner-all ui-helper-clearfix"> <span id="ui-id-5" class="ui-dialog-title">Thông tin bệnh nhân</span> </div>
  		<div class="ui-dialog-content ui-widget-content" style="display: block; width: auto; min-height: none; max-height: none; height: 100%; ">
     	 <div id="container" >
        <div class="form_row" style="vertical-align:top"  >
            <label for="mabn" style="width:120px;  ">Mã bệnh nhân:</label><br>
         	<label id="mabn1" name="mabn1"  class="hienthi" style="width:120px;height:20px" type="text"><?=$tam["MaBenhNhan"]?></label><br>
            <img id="hinh_benhnhan" class="non_image" style="border-style:solid;border-color:green;width:120px;height:150px" src=""/>
           <!-- <iframe id="hinh_benhnhan" style="border:1px solid;width:120px;height:152px;"src=""></iframe>   -->

        </div>
         <div class="form_row" style="vertical-align:top"  >
           <div> <label for="holot" style="width:110px; color:red;text-align:right ">Họ lót bệnh nhân</label>
           		 <input id="holot" name="holot" type="text" value="<?=$tam["HoLotBenhNhan"]?>" lang="holot" style="width:190px;margin-left:5px">
           </div>
           <div>
           <label for="ngaysinh"  style="width:110px;text-align:right">Ngày </label>
              	 <input type="text" name="ngaysinh"  maxlength="2" lang="ngaysinh" id="ngaysinh" style="width:20px;margin-left:5px">
                 <label for="thangsinh"  style="width:30px; "  >Tháng </label>
              	 <input type="text" maxlength="2" name="thangsinh" lang="thangsinh" id="thangsinh" style="width:20px;margin-left:5px">
          	     <label  for="namsinh" style="width:55px; color:red;text-align:right ">Năm sinh</label>
                 <input id="namsinh"  maxlength="4" value="<?=$tam["NamSinh"]?>" name="namsinh"  lang="namsinh" style="width:32px;" type="text">
           </div>
           <div> <label for="sonha" style="width:110px;text-align:right ">Số nhà-đường phố</label>
           <input id="sonha" type="text" value="<?=$tam["diachi"]?>" lang="sonha" name="sonha" style="width:190px;margin-left:5px">
           </div>
           <div> <label for="quanhuyen" style="width:110px;text-align:right ">Quận huyện</label>
               <span class="custom-combobox" >
                   <input id="quanhuyen" name="quanhuyen" type="text" style="width:190px;margin-left:5px" disabled>

               </span>
           </div>
           <div> <label for="dienthoai1"  style="width:110px;text-align:right ">Điện thoại</label>
          		 <input id="dienthoai1" value="<?=$tam["dienthoai1"]?>" name="dienthoai1" lang="dienthoai1" type="text" style="width:190px;margin-left:5px">
           </div>
           <div> <label for="nghenghiep" style="width:110px;text-align:right ">Nghề nghiệp</label>
                 <select id="nghenghiep" name="nghenghiep"  type="text" style="width:190px;margin-left:5px"></select>
           </div>
           <div>
           		 <label for="congty" style="width:110px;text-align:right ">Nơi Công tác</label>
            	<span class="custom-combobox" >
                <input id="congty" name="congty" type="text" style="width:163px;margin-left:5px">
                <input id="congty1" name="congty1"  type="hidden" >
           	    </span>
           </div>
           <div> <label for="quanhe" style="width:110px;text-align:right ">Quan hệ</label>
           		 <input id="quanhe" name="quanhe" value="<?=$tam["QuanHeVoiBenhVien"]?>" type="text" style="width:190px;margin-left:5px">
           </div>
        </div>
        <div class="form_row" style="vertical-align:top;width:20px"  >
            <div><span style= "margin-top: 3px;display:none" class="ui-icon ui-icon-info icon_holot"></span> </div>
            <div><span style= "margin-top: 3px;display:none" class="ui-icon ui-icon-info icon_namsinh"></span> </div>
        </div>
        <div class="form_row" style="vertical-align:top"  >
           <div> <input id="tenbn" value="<?=$tam["TenBenhNhan"]?>" name="tenbn" lang="tenbn" type="text" style="width:140px;"><label for="tenbn" style="width:50px; color:red;text-align:left;margin-left:5px ">Tên BN</label></div>
           <div> <label for="sotuoi" style="width:40px;text-align:right">Số tuổi</label><input name="sotuoi" type="text"  maxlength="3" id="sotuoi" style="width:40px;margin-left:5px!important"> <input "<?=$tam["SoThangTuoi"]?>"  id="thangtuoi" maxlength="2" name="thangtuoi"  style="width:44px;" type="text"><label id="thangtuoi"  for="thangtuoi" style="width:100px;text-align:left;margin-left:5px ">Số tháng tuổi</label></div>
           <div> <span class="custom-combobox" ><input   id="xaphuong" name="xaphuong" type="text" style="width:113px;"><input  name="xaphuong1"  id="xaphuong1" type="hidden" style="width:140px;"></span><label for="xaphuong" style="width:100px;text-align:left;margin-left:32px ">Xã phường</label></div>
           <div> <input id="tinhthanh" name="tinhthanh"  disabled type="text" style="width:140px;"><label for="tinhthanh" style="width:100px;text-align:left;margin-left:5px ">Tỉnh thành</label></div>
           <div> <input id="dienthoai2" value="<?=$tam["DienThoai2"]?>" name="dienthoai2" type="text" style="width:140px;"><label for="dienthoai2" style="width:100px;text-align:left;margin-left:5px ">Điện thoại(khác)</label></div>
           <div> <select id="quoctich" name="quoctich" type="text" style="width:140px;"></select><label for="quoctich" style="width:100px;text-align:left;margin-left:38px; ">Quốc tịch</label></div>
           <div> <input id="diembn" disabled name="diembn" type="text" style="width:140px;"><label for="diembn" style="width:100px;text-align:left;margin-left:5px ">Điểm BN</label></div>
<!--           <div> <label for="nocuoi" name="nocuoi" style="width:120px;text-align:left;margin-left:5px ">Nợ cuối: <?php /*?> <?php if(isset($_GET['oper']) && $_GET['oper']=='edit'){echo $nocu[0][0];}else{echo 0;}?><?php */?></label><label></div>-->
        </div>
           <div class="form_row" style="vertical-align:top;width:0px"  >
             <span style= "display:none;margin-top:4px;margin-left:-50px" class="ui-icon ui-icon-info icon_tenbn"></span>
           </div>
        <div id="colum3" class="form_row" style="vertical-align:top;"  >

        <label for="gioitinh" style="width:60px;text-align:right; color:red">Giới tính</label>
        <div id="radio_hover" style="display:inline-block">
        <input id="nam"   style="vertical-align: middle" lang="nam" type="radio" name="sex" value="0">Nam
        <input id="nu"   style="vertical-align: middle" lang="nu" type="radio" name="sex" value="1">Nữ
        </div>

        <div class="ui-dialog-titlebar ui-widget-header ui-corner-all ui-helper-clearfix" style="font-size:12px">Thông tin bệnh nhân </div>
        <div class="ui-dialog-content ui-widget-content" style=" border:1px solid #D4CCB0;border-top:none ;display: block; width: auto; min-height: 120px; max-height: none; height: 100%;border-bottom-left-radius: 6px;border-bottom-right-radius: 6px;">

        <div > <label for="nlh" style="width:100px;text-align:right ">Họ tên NLH</label><input value="<?=$tam["TenNguoiLienHe"]?>"   name="nlh" id="nlh" type="text" style="width:120px;margin-left:5px"></input></div>
        <div style="padding-top:5px "> <label for="dt_nguoilh" style="width:100px;text-align:right ">Điện thoại</label><input value="<?=$tam["DienThoaiNguoiLienHe"]?>" id="dt_nguoilh" name="dt_nguoilh" type="text" style="width:120px;margin-left:5px"></input></div>
        <div style="padding-top:5px "> <label for="quanhebn" style="width:100px;text-align:right ">Quan hệ với BN</label><input value="<?=$tam["QuanHeVoiBN"]?>" id="quanhebn" name="quanhebn" type="text" style="width:120px;margin-left:5px"></input></div>

        </div>

                   <div>
             <a style="margin-left:0px;   margin-bottom:1px;" class="fm-button-icon-left" id="ghichu" href="#">Ghi chú<span  class="ui-icon ui-icon-search"></span></a>
             <a style="margin-left:0px;  margin-bottom:1px;" class="fm-button-icon-left" id="save_data" href="#">Lưu[Ctrl-S]<span class="ui-icon ui-icon-cancel
 "></span></a>

  			 <a style="margin-left:0px;  margin-bottom:1px;" class=" " id="sua" href="#">Sửa[F2]</a>
          </div>
        </div>
        <div class="form_row" style="vertical-align:top;width:20px"  >
             <span style= "display:none;margin-top:4px;margin-left:-90px" class="ui-icon ui-icon-info icon_sex"></span>
         </div>

      </div>
    </div>
  </div>
 </div>
 <div>
   <table id="rowed3" ></table>
 </div>
  <div>
    <table id="rowed4"></table>
    <div id="prowed4"></div>
  </div>
</body>
</html>

<script type="text/javascript">
window.dem=0;
jQuery(document).ready(function() {
		image_message();
		$("#sua,#ghichu,#save_data").button();
		$('body').bind('keydown', function (e) {
			if (jwerty.is('f12',e)) {
				 $(".ui-icon-document-b").trigger("click");
			}
		});

	<?php
	if(isset($_GET['holot']) && $_GET['holot']!='' && $_GET['ten']!='undefined'){
		$hbn=$_GET['holot'];
	?>
		$('#holot').val('<?=$hbn?>');
	<?php }
	if(isset($_GET['ten']) && $_GET['ten']!='' && $_GET['ten']!='undefined'){
		$tbn=$_GET['ten'];

	?>
		$('#tenbn').val('<?=$tbn?>');
	<?php	} ?>

	<?php
	if(isset($_GET['namsinh']) && $_GET['namsinh']!='' && $_GET['namsinh']!='undefined'){
		if(strlen($_GET['namsinh'])==4){

			echo "$('#namsinh').val('".$_GET['namsinh']."');";
		}else{
			$time = strtotime("-".$_GET['namsinh']." year", time());
 			 $date = date("Y", $time);
			echo "$('#sotuoi').val('".$_GET['namsinh']."');";
			echo "$('#namsinh').val('".$date."');";
		}
	}
	if(isset($_GET['diachi']) && $_GET['diachi']!='' && $_GET['diachi']!='undefined'){
		echo "$('#sonha').val('".$_GET['diachi']."');";
	}
	if(isset($_GET['quanhe']) && $_GET['quanhe']!='' && $_GET['quanhe']!='undefined'){
		echo "$('#quanhe').val('".$_GET['quanhe']."');";
	}


	?>

<?php
if(isset($_GET['oper'])){
		echo " window.oper='edit';";
		if($tam["ID_CongTy"]!=''){
			echo "var ID_CongTy=".$tam["ID_CongTy"].";";
		}else{
			echo "var ID_CongTy='';";
		}
		if($tam["idbenhnhan"]!=''){
			echo " window.idbenhnhan=".$_GET["idbenhnhan"].";";
		}else{
			echo " window.idbenhnhan='';";
		}
		if($tam["ID_QuanHuyen"]!=''){
		echo "var ID_QuanHuyen=".$tam["ID_QuanHuyen"].";";
		}
		else{
			echo "var ID_QuanHuyen='';";
		}
		if($tam["NgayThangNamSinh"]!=''){
		echo "var NgayThangNamSinh='".$tam["NgayThangNamSinh"]."';";
		}
		else{
			echo "var NgayThangNamSinh='';";
		}

		if($tam["ID_QuocTich"]!=''){
		echo "var ID_QuocTich=".$tam["ID_QuocTich"].";";
		}
		else{
			echo "var ID_QuocTich='';";
		}
		if($tam["ID_DanToc"]!=''){
		echo "var ID_DanToc=".$tam["ID_DanToc"].";";
		}
		else{
			echo "var ID_DanToc='';";
		}
		if($tam["ID_NgheNghiep"]!=''){
		echo "var ID_NgheNghiep=".$tam["ID_NgheNghiep"].";";
		}
		else{
			echo "var ID_NgheNghiep='';";
		}
		if($tam["ID_XaPhuong"]!=''){
		echo "var ID_XaPhuong=".$tam["ID_XaPhuong"].";";
		}
		else{
			echo "var ID_XaPhuong='';";
		}
		if($tam["GioiTinh"]!=''){
			echo "var GioiTinh=".$tam["GioiTinh"].";";
		}
		else{
			echo "var GioiTinh='';";
		}
		echo 'create_combobox("#xaphuong","#xaphuong1",".DM_xaphuong","#DM_xaphuong",create_Dm_thuoc_grid,500,300,"Xã phường","data_dm_xaphuong",ID_XaPhuong);';
		echo 'create_combobox("#congty", "#congty1", ".data_combo_congty", "#data_combo_congty", create_congty, 500, 400, "Công ty", "data_congty",ID_CongTy);';

}else{
	echo " window.oper='add';";
	echo 'create_combobox("#xaphuong","#xaphuong1",".DM_xaphuong","#DM_xaphuong",create_Dm_thuoc_grid,500,300,"Xã phường","data_dm_xaphuong",0);';
	echo 'create_combobox("#congty", "#congty1", ".data_combo_congty", "#data_combo_congty", create_congty, 500, 400, "Công ty", "data_congty","");';
}
	?>

	if(window.oper=="edit"){
			window.ma_benhnhan=$("#mabn1").text();
		//_folder_name="HinhBenhNhan"+"//"+ma_benhnhan;
		//search_string=ma_benhnhan+"_"+new Date().toString("dd" +"MM"+"_"+"yyyy");
		//check_folder_exist();
		//refresh_images();
			}

	window.kiemtra_popup=false;
	window.sta=true;
	//create_Dm_thuoc_grid();
	 $("#luotkhamtontai").dialog({
		autoOpen:false,
        height: ($(window).height() / 100 * parseFloat(30)).toFixed(0),
        width: ($(window).width() / 100 * parseFloat(50)).toFixed(0),
        modal: true,
        title: 'Thông báo',
		draggable: true,
		resizable: false,
        stack: false,
		buttons: {
			"Ok": function() {

			  $( this ).dialog( "close" );
			},
		},
		beforeClose: function( event, ui ) {

		},
        close: function(event, ui) {
			parent.postMessage("editluotkham;"+luotkham+";"+tenbn, "*");
        },

    });

	 $("#luotkhamnoitrutontai").dialog({
		autoOpen:false,
        height:100,
        width: 400,
        modal: true,
        title: 'Thông báo',
		draggable: true,
		resizable: false,
        stack: false,
		buttons: {
			"Ok": function() {
			  $( this ).dialog( "close" );
			},
		},
		beforeClose: function( event, ui ) {

		},
        close: function(event, ui) {
			var selr = jQuery('#rowed3').jqGrid('getGridParam','selrow');
			var rowData = jQuery('#rowed3').getRowData(selr);
			//parent.postMessage("editluotkham;"+luotkham+";"+tenbn, "*");
			parent.postMessage('open_idbenhnhan;tao_benh_an_noi_tru;'+window.n_luotkham+';'+window.idbenhnhan+';;;'+window.n_tenbn+'&oper=edit&id_ttluotkham='+window.n_luotkham+'&fromsearch=true&doituong=','*');
        },

    });



	window.loaikham=$.ajax({
                        url: "resource.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=0&tables=DM_LoaiKham&id=ID_LoaiKham&name=TenLoaiKham",
                        async:false
                    }).responseText;


	window.quoctich= $.ajax({
                        url: "resource.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=0&tables=DM_QuocTich&id=ID_QuocTich&name=TenQuocTich",
                        async:false
                    }).responseText;
/*	window.congty=	 $.ajax({
                        url: "resource.php?module=web_services&function=get_auto_complete2&action=index&store=GD2_congty_autocomplex",
                        dataType:"json",
                        async:false
                    }).responseText;
	window.congty=jQuery.parseJSON(window.congty);	*/
	window.nghenghiep = $.ajax({url: 'resource.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=0&tables=DM_NgheNghiep&id=ID_NgheNghiep&name=TenNgheNghiep', async: false, success: function(data, result) {
                    if (!result)
                        alert('Không load được tên');
            }}).responseText;





	init_data();
	create_rowed3();
	create_rowed4();
	jQuery(window).resize(function() {
	 	$("#rowed3").setGridHeight(150);
		$("#rowed3").setGridWidth((($(window).width()) / 100 * parseFloat(99)).toFixed(0));
		$("#rowed4").setGridHeight($(window).height()-$("#main_top").height()-280);
		$("#rowed4").setGridWidth((($(window).width()) / 100 * parseFloat(99)).toFixed(0));


	});

	setTimeout(function(){$("#holot").focus()},500); ;
	//alert(top);
//	create_grid();
//	$(".ui-jqgrid-titlebar").hide();
//	jQuery(window).resize(function() {
//	 	$("#rowed3").setGridWidth($(window).width());
//	$("#rowed3").setGridHeight($(window).height()-$("#form_danh_muc_phong_ban").height()-300);
//	 });
shortcut_key();
		if(oper=='edit'){
			$.post('resource.php?module=web_services&function=get_one_row&action=index&store=spThongTinLuotKham_TBChamDiem&id='+window.idbenhnhan).done(function(data) {
						if($.trim(data)!=''){
				$('#diembn').val(data)
						}
				});

			if (NgayThangNamSinh!=''){
				var ngaythang=NgayThangNamSinh.split('-');

				$("#ngaysinh").val(ngaythang[0]);
				$("#thangsinh").val(ngaythang[1]);
			}
			$("#ghichu").removeClass('ui-state-disabled');
			$("#sua").removeClass('ui-state-disabled');
			$("#save_data").addClass('ui-state-disabled');
			$("#quoctich").val(ID_QuocTich);
			$("#nghenghiep").val(ID_NgheNghiep);
			//$("#congty1").val(ID_CongTy);

			var nghenghiep_edit=	$( "#nghenghiep option:selected" ).text();
			var quoctich_edit=	$( "#quoctich option:selected" ).text();
			$("#quoctich1").val(quoctich_edit);
			$("#nghenghiep1").val(nghenghiep_edit);
			if (GioiTinh==0){
				$("#nam").prop('checked', true);
			}else{
				$("#nu").prop('checked', true);
			}
			$("#xaphuong1").val(ID_XaPhuong);
			$("#xaphuong1").val(ID_XaPhuong);
			if(ID_XaPhuong!=''){
							var Ten_xaphuong_edit = $("#DM_xaphuong").jqGrid('getCell', ID_XaPhuong, 'label');
							var Ten_quanhuyen_edit = $("#DM_xaphuong").jqGrid('getCell', ID_XaPhuong, 'TenQuanHuyen');
							var Ten_thanhpho_edit = $("#DM_xaphuong").jqGrid('getCell', ID_XaPhuong, 'TenTinhThanhPho');
							$("#xaphuong").val(Ten_xaphuong_edit);
							$("#quanhuyen").val(Ten_quanhuyen_edit);
							$("#tinhthanh").val(Ten_thanhpho_edit);
			}
			if(ID_CongTy!=''){
							//alert(ID_CongTy);
							//$("#congty").val(congty[ID_CongTy]['label']);

			}

		}else{
			$("#ghichu").addClass('ui-state-disabled');
			$("#sua").addClass('ui-state-disabled');
			$("#save_data").removeClass('ui-state-disabled');


		}
	})

function load_phong_ban(status){
	window.phongban = $.ajax({url: 'resource.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=0&tables=DM_NhomThuoc&id=ID_NhomThuoc&name=TenNhomThuoc', async: false, success: function(data, result) {if (!result) alert('Không load được danh mục phòng ban');}}).responseText;

	if(status==true){
		$("#rowed3").setColProp('TenPhongBan', { editoptions: { value: phongban} });

	}
}
function shortcut_key(){
	jwerty.key('ctrl+s', false);jwerty.key('f2', false);jwerty.key('f8', false);jwerty.key('f9', false);jwerty.key('f10', false);jwerty.key('f12', false);jwerty.key('f6', false);
		$('body').bind('keydown', function (e) {
			if (jwerty.is('f6',e)) {
				 $(".ui-icon-note").trigger("click");
			}
		});
		$('body').bind('keydown', function (e) {
			if (jwerty.is('ctrl+s',e)) {
				 $("#save_data").trigger("click");
			}
		});
		$('body').bind('keydown', function (e) {
			if (jwerty.is('f2',e)) {
				 $("#sua").trigger("click");
			}
		});
		$('body').bind('keydown', function (e) {
			if (jwerty.is('f12',e)) {
				 $(".ui-icon-document-b").trigger("click");
			}
		});
		$('body').bind('keydown', function (e) {
			if (jwerty.is('f8',e)) {
				 $(".ui-icon-trash").trigger("click");
			}
		});
		$('body').bind('keydown', function (e) {
			if (jwerty.is('f9',e)) {
				 $(".ui-icon-search").trigger("click");
			}
		});
		$('body').bind('keydown', function (e) {
			if (jwerty.is('f11',e)) {
				 $(".ui-icon-refresh").trigger("click");
			}
		});
}
function init_data(){
$("#save_data").bind('click',function() {
   		 check_bn()	;
		if(window.kiemtra===true&&window.sta===true){
			trangthai('disable');
			if(window.oper=='edit'){
				edit_bn();
			}else{
				setTimeout(save_bn,500)
			}

		}


});

	$("#ghichu").click(function(){
	 elem=1 + Math.floor(Math.random() * 1000000000);
		 dialog_add_dm("Ghi Chú Của Bệnh Nhân",100,70,elem,'resource.php?module=<?=$modules?>&view=ghi_chu&id_form=53&idbenhnhan='+window.idbenhnhan,callback)

	})

	$("#sua").click(function(){
		trangthai('enable');
	})


	create_select("#nghenghiep",window.nghenghiep);
	create_select("#quoctich",window.quoctich);
	//create_select("#quanhe",window.quanhe);
	autocompleted_combobox("#quoctich");
	autocompleted_combobox("#nghenghiep");
	//autocompleted_combobox("#loaikham");
	//autocomplex_mutil("#congty",congty,"#congty1");


	//autocomplex_mutil2("#quanhuyen",quanhuyen,"#quanhuyen1");
 	  $("#holot").focus();


	  $("#hinh_benhnhan").click(function() {
		if(oper=="edit"){
			window.ma_benhnhan=$("#mabn1").text();
			search_string=ma_benhnhan+"_"+new Date().toString("dd"+"MM"+"_"+"yyyy");
			_folder_name="HinhBenhNhan"+"//"+ma_benhnhan;
				//dialog_add_dm('Chỉnh sửa hình ảnh',95,95,6754353898787675,'resource.php?module=images_control&view=images_edit&id_form=49&tenthumuc='+_folder_name+'&search_string='+search_string,refresh_images);
			}
		 else{
		}
		});


	  $("#namsinh").focusout(function(){

		var namsinh =  $("#namsinh").val();
		var thangsinh =  $("#thangsinh").val();
		var ngaysinh =  $("#ngaysinh").val();
			 if(!isNaN(namsinh) && $.trim(namsinh)!='' && namsinh.length==4 )	{
				var d = new Date();
				$("#sotuoi").val(d.getFullYear()-namsinh)
				if(ngaysinh.length>0&&thangsinh.length>0 &&$.trim(thangsinh)!=''&&$.trim(ngaysinh)!=''){
				var lastDay = new Date(namsinh, thangsinh , 0);
				 if(ngaysinh>lastDay.getDate()){
					 $("#ngaysinh").val(lastDay.getDate());
				 }

				}
			}


	  });
	   $("#ngaysinh").focusout(function(){
		var namsinh =  $("#namsinh").val();
		var thangsinh =  $("#thangsinh").val();
		var ngaysinh =  $("#ngaysinh").val();
			 if(!isNaN(namsinh) && $.trim(namsinh)!='' && namsinh.length==4 )	{
				var d = new Date();
				if(ngaysinh.length>0&&thangsinh.length>0 &&$.trim(thangsinh)!=''&&$.trim(ngaysinh)!=''){
				var lastDay = new Date(namsinh, thangsinh , 0);
				 if(ngaysinh>lastDay.getDate()){
					 $("#ngaysinh").val(lastDay.getDate());
				 }

				}
			}


	  });
	   $("#thangsinh").focusout(function(){
		var namsinh =  $("#namsinh").val();
		var thangsinh =  $("#thangsinh").val();
		var ngaysinh =  $("#ngaysinh").val();
			 if(!isNaN(namsinh) && $.trim(namsinh)!='' && namsinh.length==4 )	{
				var d = new Date();
				if(ngaysinh.length>0&&thangsinh.length>0 &&$.trim(thangsinh)!=''&&$.trim(ngaysinh)!=''){
				var lastDay = new Date(namsinh, thangsinh , 0);
				 if(ngaysinh>lastDay.getDate()){
					 $("#ngaysinh").val(lastDay.getDate());
				 }

				}
			}


	  });
	  $("#sotuoi").focusout(function(){
		 if(!isNaN($("#sotuoi").val()) && $.trim($("#sotuoi").val())!='' )	{
				var d = new Date();
				$("#namsinh").val(d.getFullYear()-$("#sotuoi").val())
		}
	  });
	  $("#thangtuoi").focusout(function(){
		 if((!isNaN($("#thangtuoi").val()))&& $.trim($("#thangtuoi").val())!='' )	{
				var d = new Date();
				var thangtuoi=$("#thangtuoi").val()-(d.getMonth()+1);
				$("#namsinh").val(d.getFullYear()-Math.ceil(thangtuoi/12))
				$("#sotuoi").val(d.getFullYear()-(d.getFullYear()-(Math.ceil($("#thangtuoi").val()/12))))
			}
	  })
	   jwerty.key('tab', false);
	   jwerty.key('shift+tab', false);
	   jwerty.key('shift+enter', false);
	   $('#container input[type=text],#container textarea,#container input[type=radio],#container a#save_data,#container a#clear_all,#container a#bndk').bind("keyup", function(e) {
		//nhay focus nut bam
		    var charCode = (e.which) ? e.which : e.keyCode
		if ($("#container a#save_data,#container a#clear_all,#container a#bndk").is(":focus")){
			//nut xuong , tab
				 if (jwerty.is("↓",e)||jwerty.is("tab",e)) {
					 var inputs = $(this).parents("#container").eq(0).find("a#save_data,a#clear_all,a#bndk");
					 var idx = inputs.index(this);
					 //nut cuoi cung focus ve dau
						  if (idx == inputs.length - 1) {
							$("#holot").focus();
						  } else {inputs[idx + 1].focus();}
				//shift+tab,len
				 }else if(jwerty.is("shift+tab",e)||jwerty.is("↑",e)){
						var inputs = $(this).parents("#container").eq(0).find("a#save_data,a#clear_all,a#bndk");
						var idx = inputs.index(this);

					 if (idx >=0) {
					 //nut bam dau tien
						if(idx==0){
						 $("#quanhebn").focus();
						 $("#quanhebn").select();
						}else{inputs[idx -1].focus();
						  inputs[idx - 1].focus();
						}
					}
			    }else if(jwerty.is("shift+enter",e)){
					search_bn();
				}
			}


		//nhay focus cac input
		else if ($("#container input[type=text],#container textarea,#container input[type=radio]").is(":focus")){
			//enter va tab
             if (jwerty.is("enter",e)||jwerty.is("tab",e)) {
                var inputs = $(this).parents("#container").eq(0).find(":input[type=text], textarea,input[type=radio]");
                var idx = inputs.index(this);
				//alert(inputs[idx + 1].nodeName)
                if (idx == inputs.length - 1) {
                    	$("#save_data").focus();
				}else {
					if(inputs[idx].id=="holot"){
						$("#tenbn").focus();
						$("#tenbn").select();
					}else if(inputs[idx].id=="tenbn"){
						$("#nam").focus();
						$("#nam").select();
					}else if(inputs[idx].id=="nu"){
						$("#ngaysinh").focus();
						$("#ngaysinh").select();
					}else if(inputs[idx].id=="ngaysinh"){
						$("#thangsinh").focus();
						$("#thangsinh").select();
					}else if(inputs[idx].id=="thangsinh"){
						$("#namsinh").focus();
						$("#namsinh").select();
					}else if(inputs[idx].id=="namsinh"){
						$("#sotuoi").focus();
						$("#sotuoi").select();
						if(oper=='add'){
							check_bn();
							 if(window.kiemtra===true&&window.sta===true){
								setTimeout(save_bn,300);
							 }
						}

					}else if(inputs[idx].id=="sotuoi"){
						$("#thangtuoi").focus();
						$("#thangtuoi").select();
					}else if(inputs[idx].id=="thangtuoi"){

						$("#sonha").focus();
						$("#sonha").select();
					}else if(inputs[idx].id=="sonha"){
						$("#xaphuong").focus();
						$("#xaphuong").select();
					}else if(inputs[idx].id=="xaphuong"){
						if(window.count<=0){
							$("#xaphuong1").val("");
							$("#xaphuong").val("");

						}else{

						}


						$("#dienthoai1").focus();
						$("#dienthoai1").select();
					}else if(inputs[idx].id=="dienthoai1"){
						$("#dienthoai2").focus();
						$("#dienthoai2").select();
					}else if(inputs[idx].id=="dienthoai2"){
						$("#nghenghiep1").focus();
						$("#nghenghiep1").select();
					}else if(inputs[idx].id=="nghenghiep1"){
						$("#quoctich1").focus();
						$("#quoctich1").select();
					}else if(inputs[idx].id=="quoctich1"){
						$("#congty").focus();
						$("#congty").select();
					}else if(inputs[idx].id=="congty"){
						$("#quanhe").focus();
						$("#quanhe").select();
					}else if(inputs[idx].id=="quanhe"){
						$("#nlh").focus();
						$("#nlh").select();
					}else if(inputs[idx].id=="quanhebn"){
						$("#save_data").focus();
					}else
					{
							inputs[idx + 1].focus();
							inputs[idx + 1].select();
					}
				}
					return false;

             }

			 else if(jwerty.is("shift+tab",e)){
				var inputs = $(this).parents("#container").eq(0).find(":input[type=text], textarea,input[type=radio]");
                var idx = inputs.index(this);
				 if (idx >0) {
					if(inputs[idx].id=="tenbn"){
						$("#holot").focus();
						$("#holot").select();
					}else if(inputs[idx].id=="nam"){
						$("#tenbn").focus();
						$("#tenbn").select();
					}else if(inputs[idx].id=="ngaysinh"){
						$("#nu").focus();
						$("#nu").select();
					}else if(inputs[idx].id=="thangsinh"){
						$("#ngaysinh").focus();
						$("#ngaysinh").select();
					}else if(inputs[idx].id=="namsinh"){
						$("#thangsinh").focus();
						$("#thangsinh").select();
					}else if(inputs[idx].id=="sotuoi"){
						$("#namsinh").focus();
						$("#namsinh").select();
					}else if(inputs[idx].id=="sonha"){
						$("#thangtuoi").focus();
						$("#thangtuoi").select();
					}else if(inputs[idx].id=="thangtuoi"){
						$("#sotuoi").focus();
						$("#sotuoi").select();
					}else if(inputs[idx].id=="xaphuong"){
						$("#sonha").focus();
						$("#sonha").select();
					}else if(inputs[idx].id=="dienthoai1"){
						$("#xaphuong").focus();
						$("#xaphuong").select();
					}else if(inputs[idx].id=="dienthoai2"){
						$("#dienthoai1").focus();
						$("#dienthoai1").select();
					}else if(inputs[idx].id=="nghenghiep1"){
						$("#dienthoai2").focus();
						$("#dienthoai2").select();
					}else if(inputs[idx].id=="quoctich1"){
						$("#nghenghiep1").focus();
						$("#nghenghiep1").select();
					}else if(inputs[idx].id=="congty"){
						$("#quoctich1").focus();
						$("#quoctich1").select();
					}else if(inputs[idx].id=="quanhe"){
						$("#congty").focus();
						$("#congty").select();
					}else if(inputs[idx].id=="nlh"){
						$("#quanhe").focus();
						$("#quanhe").select();
					}else
					{
							inputs[idx - 1].focus();
							inputs[idx - 1].select();
					}
                 }
			}//chi nhap so la gioi han leght
			else {
				if($("#ngaysinh,#thangsinh,#namsinh,#sotuoi,#thangtuoi").is(":focus")){
					$("#ngaysinh,#thangsinh,#namsinh,#sotuoi,#thangtuoi").keydown(function(e) {
						if ( $.inArray(e.keyCode,[46,8,9,27,13,190]) !== -1 ||
							(e.keyCode == 65 && e.ctrlKey === true) ||
							(e.keyCode >= 35 && e.keyCode <= 39)) {
								 return;
						}
						else {
							if (e.shiftKey || (e.keyCode < 48 || e.keyCode > 57) && (e.keyCode < 96 || e.keyCode > 105 )) {
								e.preventDefault();
							}
						}
					})
					var d = new Date();
					//alert(minmax($("#ngaysinh").val(),0,31))
					$("#ngaysinh").val(minmax($("#ngaysinh").val(),0,31));
					$("#thangsinh").val(minmax($("#thangsinh").val(),0,12));
					if($("#namsinh").val().length==4){
					$("#namsinh").val(minmax($("#namsinh").val(),1900,d.getFullYear()));
					}
					$("#sotuoi").val(minmax($("#sotuoi").val(),1,200));
					$("#thangtuoi").val(minmax($("#thangtuoi").val(),1,72));
				}


				else if($("#xaphuong").is(":focus")){
					//alert("2");

					//nam
					/*grid = $("#DM_xaphuong");
                var searchFiler = $("#xaphuong").val(), f;

                if (searchFiler.length === 0) {
                    grid[0].p.search = false;
                    $.extend(grid[0].p.postData,{filters:""});
                }
                f = {groupOp:"OR",rules:[]};
                f.rules.push({field:"label",op:"cn",data:searchFiler});
                grid[0].p.search = true;
                $.extend(grid[0].p.postData,{filters:JSON.stringify(f)});
				grid.trigger("reloadGrid",[{page:1,current:true}])
					$(".dialog_dm").dialog( "open" );		*/

				}
			}

		}
        });


}

	function save_bn(){
	window.sta=false;
	window.oper='edit';
	if(window.dem==0){
		window.dem++;
			$.post('resource.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=add',dataToSend).done(function(data) {

				var mabenhnhan =data.split(';')
				if(mabenhnhan[0]==''){
					parent.postMessage("themmoibn_thanhcong;"+mabenhnhan[2]+";"+$("#holot").val()+" "+$("#tenbn").val(), "*");
					tooltip_message("Lưu thành công");

					window.idbenhnhan=mabenhnhan[2];

				setTimeout(function(){

					window.ma_benhnhan=$("#mabn1").text();
					//alert(ma_benhnhan);
				_folder_name="HinhBenhNhan"+"//"+ma_benhnhan;
				search_string=ma_benhnhan+"_"+new Date().toString("dd" +"MM"+"_"+"yyyy");
				check_folder_exist();
				//refresh_images();
					},1000);
					$("#mabn1").text(mabenhnhan[1])
					$("#ghichu").removeClass('ui-state-disabled');


					$("#ghichu").click(function(){
					  $.post('resource.php?module=web_services&function=get_link&action=index&folder=ghi_chu:').done(function(data) {
					  elem=1 + Math.floor(Math.random() * 1000000000);
					  var folder= data.split(';');
					  var duong_dan='resource.php?module='+folder[0]+'&view='+folder[1]+'&id_form='+folder[2]+'&idbenhnhan='+window.idbenhnhan;
					   dialog_add_dm("Ghi Chú Của Bệnh Nhân "+hovaten,90,70,elem,duong_dan,callback)
					  })

					})
				}
				setTimeout(function(){window.sta=true},500);

				});
		}

	}
function edit_bn() {
	window.sta=false;

		$.post('resource.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=edit&hienmaloi=3&idbenhnhan='+window.idbenhnhan,dataToSend).done(function( data ) {
  			if($.trim(data)==''){
					tooltip_message("Sửa thành công");
				}
				window.sta=true;	;
 	 })

	};




function check_bn(){
	window.kiemtra=true;
	key1='';
	$(".icon_holot,.icon_tenbn,.icon_namsinh,.icon_sex").hide();
	i=0;
	phancach="";
	dataToSend ='{';
	$('#rowed3').setGridParam({postData: null});
	$('#container').find(':input[type=text],select,textarea,input[type=hidden],input[type=radio]:checked').each(function(){
			if(i>0){
			  phancach=",";
			}
			dataToSend += phancach + '"'+ this.name + '":"' + this.value +'"' ;
			i++;
		})
		dataToSend +='}';
		//alert($('#holot').val());
		window.dataToSend = jQuery.parseJSON(dataToSend);
		 var check_null = new Array();
		 check_null["holot"]=dataToSend["holot"];
		 check_null["tenbn"]=dataToSend["tenbn"];
		 check_null["namsinh"]=dataToSend["namsinh"];
		 y=0;
		 for (var key in check_null) {
		   if(y==2){
			 if( 'sex' in dataToSend ===false ){
				  window.kiemtra=false;
				 $(".icon_sex").show();
				 if(key1==''){
				  key1='nam';
				  }
				}
				if(check_null[key].length<4){
					 if(key1==''){
				 	 key1=key;
				 	 }
					 window.kiemtra=false;
					 $(".icon_"+key).show();
					 }
		 	 }

			  if(check_null[key]==""){
				 if(y==2){

				 }
				 $(".icon_"+key).show();
				  if(key1==''){
				  key1=key;
				  }
				  window.kiemtra=false;
			 }

			  y++;
		 }


		if(dataToSend['thangsinh']!=''&&dataToSend['ngaysinh']!='') {
			if(window.kiemtra==true){
				var d1 = new Date(); //"now"
				var d2 = new Date(dataToSend['namsinh'],dataToSend['thangsinh']-1,dataToSend['ngaysinh'])  // some date
				//
				 if(monthDiff(d2,d1)<=72){
					 $("#thangtuoi").val(monthDiff(d2,d1))

				 }else{

				 }
			}
		}else if(dataToSend['thangsinh']==''||dataToSend['ngaysinh']==''){
			if(window.kiemtra==true){
			var d1 = new Date(); //"now"
			var d2 = new Date(dataToSend['namsinh'],0,1)
			 if(yeatDiff(d2,d1)<=6){
				window.kiemtra=false;
				dialog_benhnhi("Thông báo:", "300px", "150px", "4732479", "",".thongbao");
			 }
			}
		}

	 if(window.kiemtra===false){
		 if(key1!=''){
		  $("#"+key1).focus();
	 }

}}



 function autocomplex_mutil(input,data,id) {
			 var isOpen = false;
			_init(input,data,id);
			afterInit(input,isOpen);
	};
 function afterInit(input,isOpen) {

			var button = $("<a>").attr("tabIndex", -1).attr("title", "Show all items").tooltip().insertAfter($(input)).button({
			icons: {
				primary: "ui-icon-triangle-1-s"
			},
			text: false
		}).removeClass("ui-corner-all").addClass("custom-combobox-toggle ui-corner-right").click(function(event) {
			$(input).focus();
			wasOpen = $(input).autocomplete("widget").is(":visible");

			if (isOpen) {
				$(input).autocomplete("close");
				isOpen = false;
			} else {
				isOpen = true;
				$(input).autocomplete("search", "");
				event.stopImmediatePropagation();
			}
		});
	 }
 function _init(input,data,id) {
		$(input).autocomplete({

			source: data,
			minLength: 0,
			select: function (event, ui) {
						$(id).val(ui.item.id);
       			 },
			open: function(event, ui) {
			}  ,
			autoFocus :true,
			}).data("uiAutocomplete")._renderItem = function (ul, item) {
			if($(input).val()==""){newid=item.label}
			else{
					var newid = String(item.label).replace(
					new RegExp(this.term, "gi"),
					"<strong style='color:#F60'>$&</strong>");}
					return $("<li ></li>")
				.data("item.autocomplete", item)
				.append("<a style='width:320px;display: inline-block!important;vertical-align:top'>" + newid + "</a> <a style='width:120px;display: inline-block!important;vertical-align:top'>"+ item.row2 +"</a> <a style='width:300px;display: inline-block!important;vertical-align:top'>"+ item.row3 +"</a> ")
				.appendTo(ul);
				};
			 }	;



	function create_Dm_thuoc_grid(elem,datalocal){
		 /*$("#DM_xaphuong").jqGrid({
		url:'resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_dm_xaphuong',
		datatype: "json",	*/

		datalocal=jQuery.parseJSON(datalocal);
		$(elem).jqGrid({
		datastr:datalocal,
		datatype: "jsonstring" ,
		colNames:['Tên Xã Phường', 'Quận huyện','Tỉnh thành'],
		colModel:[
			{name:'label',index:'label',hidden :false},
			{name:'TenQuanHuyen',index:'TenQuanHuyen',hidden :false},
			{name:'TenTinhThanhPho',index:'TenTinhThanhPho'},

		],
		hidegrid: false,
		gridview: true,
		loadonce: true,
		scroll: 1,
		modal:true,
		rowNum: 16,
		rowList:[],
		sortname: 'ID_Thuoc',
		height:($(window).height() / 100 * parseFloat(57)).toFixed(0),
		width: (($(window).width() / 100 * parseFloat(58)).toFixed(0)),
		viewrecords: true,
		ignoreCase:true,
		shrinkToFit:true,
		cmTemplate: {sortable:false},
		sortorder: "desc",
		serializeRowData: function (postdata) {
		},
		onSelectRow: function(id){
			var idxaphuong = $("#DM_xaphuong").jqGrid('getGridParam', 'selrow')
							$("#xaphuong1").val(idxaphuong);
							var Ten_xaphuong = $("#DM_xaphuong").jqGrid('getCell', idxaphuong, 'label');
							var Ten_quanhuyen = $("#DM_xaphuong").jqGrid('getCell', idxaphuong, 'TenQuanHuyen');
							var Ten_thanhpho = $("#DM_xaphuong").jqGrid('getCell', idxaphuong, 'TenTinhThanhPho');
							//$("#xaphuong").val(Ten_xaphuong);
							$("#quanhuyen").val(Ten_quanhuyen);
							$("#tinhthanh").val(Ten_thanhpho);
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
function minmax(value, min, max)
{
    if(parseInt(value) < min || isNaN(value))
        return min;
    else if(parseInt(value) > max)
        return max;
    else return value;
}

	function create_rowed3(){
		 $("#rowed3").jqGrid({
		url:'resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_luotkham&idbenhnhan='+window.idbenhnhan,
		datatype: "json",
		colNames:['Thời gian đến khám', 'Thời gian kết thúc','Phân loại khám', 'Bác sỹ lâm sàng','Ngày giờ hẹn trả kết quả','Đã trả kết quả'],
		colModel:[
			{name:'label',index:'label'},
			{name:'TenQuanHuyen',index:'TenQuanHuyen'},
			{name:'TenTinhThanhPho',index:'TenTinhThanhPho'},
			{name:'ngay',index:'ngay'},
			{name:'ten',index:'ten'},
			{name:'da',index:'da'},

		],
		hidegrid: false,
		gridview: true,
		loadonce: true,
		scroll: false,
		modal:true,
		rowNum: 500,
		rowList:[],
		sortname: 'ID_Thuoc',

		height: 150,
		width: (($(window).width() / 100 * parseFloat(99)).toFixed(0)),
		viewrecords: true,
		ignoreCase:true,
		shrinkToFit:true,
		cmTemplate: {sortable:false},
		sortorder: "desc",
		caption:"Lượt khám gần đây",
		serializeRowData: function (postdata) {
		},
		onSelectRow: function(id){
		},
		ondblClickRow: function (id, rowIndex, columnIndex) {

 		},
		loadComplete: function(data) {

		},

	});



}


	function create_rowed4(){
		 $("#rowed4").jqGrid({
		url:'resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_lichhenkham&idbenhnhan='+window.idbenhnhan,
		datatype: "json",
		colNames:['Giờ hẹn', 'Ngày hẹn','Nội dung khám','Bác sỹ yêu cầu','Trạng thái','Lịch Yêu cầu'],
		colModel:[
			{name:'giohen',index:'giohen',hidden :false},
			{name:'ngayhen',index:'ngayhen',hidden :false},
			{name:'noidungkham',index:'noidungkham'},
			{name:'bacsyyeucau',index:'bacsyyeucau',hidden :false},
			{name:'trangthai',index:'trangthai',hidden :false},
			{name:'lichyeucau',index:'lichyeucau'},

		],
		hidegrid: false,
		gridview: true,
		loadonce: true,
		scroll: 1,
		modal:true,
		rowNum: 16,
		rowList:[],
		sortname: 'ID_Thuoc',
		height:(($(window).height()-$("#main_top").height()-280)).toFixed(0),
		width: (($(window).width()) / 100 * parseFloat(99)).toFixed(0),
		viewrecords: true,
		ignoreCase:true,
		shrinkToFit:true,
		pager : '#prowed4',
		cmTemplate: {sortable:false},
		sortorder: "desc",
		caption:"Lịch hẹn khám",
		serializeRowData: function (postdata) {
		},
		onSelectRow: function(id){
		},
		ondblClickRow: function (id, rowIndex, columnIndex) {

 		},
		loadComplete: function(data) {
				var ids = $('#rowed4').jqGrid('getDataIDs');

				for(var i=0;i<ids.length;i++){
					var rowData = jQuery('#rowed4').getRowData(ids[i]);

					if(rowData["trangthai"]=="Đã đến hẹn"){

						$('#'+ids).addClass('quathoigian_max')

					}else if((rowData["trangthai"]=="Đã hủy")||(rowData["trangthai"]=="Quá hẹn 12h")){
						$('#'+ids).addClass('dahuy')

					}
				}

		},

	});
		$("#rowed4").jqGrid('navGrid',"#prowed4",{add: false, edit: false,addtext:'Thêm BN[F3]',edittext:"Sửa [F4]", del: false,refresh:false, search:false,closeAfterEdit: true,clearAfterAdd :true,closeOnEscape : true,
			});
		$("#rowed4").jqGrid('navButtonAdd', '#prowed4', {caption: "Tạo Lượt Khám[F12]", buttonicon: 'ui-icon-document-b',id : 'datlich_rowed3',
            onClickButton: function() {
				  var id_row = $('#rowed3').jqGrid('getGridParam', 'selrow');
				  var rowData =  $('#rowed3').getRowData(id_row);
				$.post('resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_thongtinluotkham_check&id_benhnhan='+window.idbenhnhan).done(function(data){
				    data = $.trim(data);
					data = data.split(';');
					if(data[1]=='KetThucKham'){

				  parent.postMessage("taoluotkham;"+window.idbenhnhan+";"+$("#holot").val()+' '+$("#tenbn").val()+";<?=$idhenkham?>", "*");
					}else{
						window.luotkham=data[0];
						window.tenbn=$("#holot").val()+' '+$("#tenbn").val();
						$('#luotkhamtontai').dialog('open');

					}
				})
            },
            title: "Tạo Lượt Khám[F12]",
            position: "last"
   		 });
		/* $("#rowed4").jqGrid('navButtonAdd', '#prowed4', {caption: "Tạo B.án nội trú", buttonicon: '',id : 'taobenhannoitru_rowed3',
            onClickButton: function() {
				 var id_row = $('#rowed3').jqGrid('getGridParam', 'selrow');
				 var rowData = jQuery('#rowed3').getRowData(id_row);
				$.post('resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_thongtinluotkham_check_noitru&id_benhnhan='+window.idbenhnhan).done(function(data){
				    data = $.trim(data);
					data = data.split(';');
					if(data[1]=='KetThucKham'){
						$.post('resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_getthongtinnoitrubyidbenhnhan&id_benhnhan='+window.idbenhnhan).done(function(data){
							data = $.trim(data);
							data = data.split('|||');
							var phieuvaovien=data[0];

							if(phieuvaovien=='null'){
								if(data[1]=='null' || data[1]==0){
									$("#quanhuyen_null").dialog('open');
									//tooltip_message("Thông tin xã phường không b");
									//$("#xaphuong").focus();
								}else{
								 parent.postMessage('open_idbenhnhan;tao_benh_an_noi_tru;;'+window.idbenhnhan+';;;'+$("#holot").val()+' '+$("#tenbn").val()+'&oper=add&fromsearch=true&doituong=','*');
								}
							}else{
								phieuvaovien=phieuvaovien.split(';');
								parent.postMessage('open_idbenhnhan;tao_benh_an_noi_tru;'+phieuvaovien[0]+';'+window.idbenhnhan+';;'+phieuvaovien[1]+';'+phieuvaovien[2]+'&doituong='+phieuvaovien[3]+'&diachibaotin='+phieuvaovien[4]+'&oper=add','*');
							}


						});


					}else{
						window.n_luotkham=data[0];
						window.n_tenbn=$("#holot").val()+' '+$("#tenbn").val();
						$('#luotkhamnoitrutontai').dialog('open');

					}
				})
            },
            title: "Tạo B.án nội trú",
            position: "last"
    });*/
		 $("#rowed4").jqGrid('navButtonAdd', '#prowed4', {caption: "Bệnh án[F6]", buttonicon: 'ui-icon-note',id : 'benhan_rowed3',
            onClickButton: function() {
				  var id_row = $('#rowed3').jqGrid('getGridParam', 'selrow')
				  var rowData =  $('#rowed3').getRowData(id_row);
				  parent.postMessage('benhan;'+window.idbenhnhan+';'+$("#holot").val()+' '+$("#tenbn").val(), "*");
            },
            title: "Bệnh án[F6]",
            position: "last"
   		 });
		 $("#rowed4").jqGrid('navButtonAdd', '#prowed4', {caption: "Đặt lịch hẹn", buttonicon: '',
            onClickButton: function() {
				   parent.postMessage("datlichhen;"+window.idbenhnhan+";"+$("#holot").val()+" "+$("#tenbn").val(), "*");
            },
            title: "Đặt lịch hẹn",
            position: "last"
   		 });
		 $("#rowed4").jqGrid('navButtonAdd', '#prowed4', {caption: "Lịch Bác sỹ", buttonicon: '',
            onClickButton: function() {
				    parent.postMessage("motab_chung;lich_lam_viec", "*");
            },
            title: "Lịch Bác sỹ",
            position: "last"
   		 });
		 $("#rowed4").jqGrid('navButtonAdd', '#prowed4', {caption: "Hoàn Trả Chỉ Định", buttonicon: '',
            onClickButton: function() {
            	var pto="resource.php?module=hanhchinh&view=them_moi_benhnhan&action=hoantrachidinh&type=test&id_form=11&ID_BenhNhan=<?=$tam["idbenhnhan"]?>";
dialog_main("Hoàn trả chỉ định", 95, 95, "56743265743657",pto );
//alert(pto);
            },
            title: "Hoàn Trả Chỉ Định",
            position: "last"
   		 });
		 $("#rowed4").jqGrid('navButtonAdd', '#prowed4', {caption: "Thu Tiền", buttonicon: '',
            onClickButton: function() {

            },
            title: "Thu Tiền",
            position: "last"
   		 });
		 $("#rowed4").jqGrid('navButtonAdd', '#prowed4', {caption: "Chi Tiền", buttonicon: '',
            onClickButton: function() {

            },
            title: "Chi Tiền",
            position: "last"
   		 });
		 $("#rowed4").jqGrid('navButtonAdd', '#prowed4', {caption: "Refesh[F5]", buttonicon: '',
            onClickButton: function() {
				   $.post("resource.php?module=web_services&function=create_bn&action=index&id_benhnhan="+window.idbenhnhan);
            },
            title: "Refesh[F5]",
            position: "last"
   		 });
		 $("#rowed4").jqGrid('navButtonAdd', '#prowed4', {caption: "Phiếu KSK mặt 1", buttonicon: '',
            onClickButton: function() {

            },
            title: "Phiếu KSK mặt 1",
            position: "last"
   		 });



}
function dialog_benhnhi(title, width, height, elem, links,form) {
	$("body").append("<div class='ui-jqdialog modal" + elem + "'>Bệnh nhi phải đầy đủ ngày tháng năm sinh </div>");
	if (String(width).match(/px/g)==null){
		 width = ($(window).width() / 100 * parseFloat(width)).toFixed(0);
	}else{
		width=String(width).replace("px","")
	};
	if (String(height).match(/px/g)==null){
		 height = ($(window).height() / 100 * parseFloat(height)).toFixed(0);
	}else{
		 height=String(height).replace("px","")
	};
    $(".modal" + elem).dialog({
        height: height,
        width: width,
        modal: true,
        title: title,
		draggable: true,
		resizable: false,
        stack: false,
		buttons: {
			"ok": function() {
			  $( this ).dialog( "close" );
			}
		},
		beforeClose: function( event, ui ) {

		},
        close: function(event, ui) {

			$(this).dialog( "close" );
            $(this).remove();
			window.kiemtra_popup=false;
			$('#ngaysinh').focus();
        },
        hide: {
            effect: "fadeOut",
            duration: 500,
        },
        open: function(event, ui) {
			window.kiemtra_popup=true;
        },


    });

}
function monthDiff(d1, d2) {
    var months;
    months = (d2.getFullYear() - d1.getFullYear()) * 12;
    months -= d1.getMonth() ;
    months += d2.getMonth()+1;
    return months <= 0 ? 0 : months;
}
function yeatDiff(d1, d2) {
    var months;
    months = (d2.getFullYear() - d1.getFullYear()) ;
    return months <= 0 ? 0 : months;
}
function callback (){
}
function create_congty(elem, datalocal) {
        datalocal = jQuery.parseJSON(datalocal);
        $(elem).jqGrid({
            datastr: datalocal,
            datatype: "jsonstring",
            colNames: ['Tên công ty', 'Mã viết tắt'],
            colModel: [
                {name: 'tencongty', index: 'tencongty', hidden: false},
                {name: 'maviettat', index: 'maviettat', hidden: false},

            ],
            hidegrid: false,
            gridview: true,
            loadonce: true,
            scroll: false,
            modal: true,
            rowNum: 200000,
            rowList: [],
            height: 250,
            width: 470,
            viewrecords: true,
            ignoreCase: true,
            shrinkToFit: true,
            cmTemplate: {sortable: false},
            sortorder: "desc",
            serializeRowData: function(postdata) {
            },
            onSelectRow: function(id) {

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
function refresh_images(){
		$.getJSON( 'file_manager/php/connector.php?answer=42&tenthumuc='+_folder_name+'&cmd=search&q='+search_string+'&_=1387364774212',
		function( data ) {
		if(data["files"].length==0){
			$("#total_images").val(data["files"].length);
			//alert("1");
		}else{
		 	//total_image=data["files"][data["files"].length-1]["name"].split("_");
			//total_image1=total_image[3].split(".");
		 	//$("#total_images").val(total_image1[0]);
			//alert(data["files"][data["files"].length-1]["name"]);
			total_image=data["files"][data["files"].length-1]["name"];
			$("#hinh_benhnhan").attr("src","<?=$_SESSION["config_system"]["URL"]?>file_manager/php/connector.php?answer=42&tenthumuc="+_folder_name+"&cmd=file&target=f1_" + encode64(total_image));
		}
	});
	}
function check_folder_exist(){
	var _tam=_folder_name.split("//");
	$.getJSON( 'file_manager/php/connector.php?answer=42&cmd=open&target=f1_XA&init=1&tree=1&_=1386694616800&tenthumuc='+_folder_name,
		function( data ){
				if (data["error"]=="errConf,errNoVolumes"){
					 $.get( 'file_manager/php/connector.php?answer=42&tenthumuc='+_tam[0]+'&cmd=mkdir&name='+_tam[1]+'&target=f1_XA&_=1387301727041',
						function( data ){
					 });
				}else{

				}
	});
}


function trangthai(trangthai){
	if(trangthai=='disable'){

		$("input").prop('disabled', true);
		$("#sua").button('enable');
		$("#save_data").button('disable');
		$('.custom-combobox-toggle').button('disable');
		$('#quanhuyen,#tinhthanh').prop('disabled', true);
	}else{

		$("input").prop('disabled', false);
		$("#sua").button('disable');
		$("#save_data").button('enable');
		$('.custom-combobox-toggle').button('enable');
		('#quanhuyen,#tinhthanh').prop('disabled', true);
	}
}
</script>