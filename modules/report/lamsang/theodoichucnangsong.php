<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Report</title>
<style >
body{
	overflow:auto;
	padding-left:10px;
	line-height:25px!important;
	font-size:14px !important;
	font-family:Arial, Helvetica, sans-serif;
}
pre {
 white-space: pre-wrap;       /* css-3 */
 white-space: -moz-pre-wrap;  /* Mozilla, since 1999 */
 white-space: -pre-wrap;      /* Opera 4-6 */
 white-space: -o-pre-wrap;    /* Opera 7 */
 word-wrap: break-word;       /* Internet Explorer 5.5+ */
 font-family:Arial, Helvetica, sans-serif;
 font-size:14px;
/*	margin-top:-45px;*/
margin-top: 0px;
margin-bottom: 0px;
}
.textinput{
	border:none !important;
	border-bottom:dotted 2px #000  !important;
	box-shadow:none  !important;
	padding:0px !important;
	margin-left:0px !important;
	padding-left:5px  !important;
	font-size:13px !important;
	font-family:Arial, Helvetica, sans-serif !important;
	
}
input[type="text"]{
	font-size:14px !important;
	font-family:Arial, Helvetica, sans-serif !important;
}
#tieuderp{
	font-weight:bold;
	font-size:18px;
	
}
#tb_ttct{
	line-height:20px !important;
}
.giodo{
	font-size:11px !important;
	text-align:center;
}
	 .diengiai_sinhton ,.diengiai_thetrang {		 
		 font-size:10px;		 		
	 }
	 .diengiai_sinhton div,.diengiai_thetrang div{
		 display:inline-block;	 		 		
	 }
	 #ps{
		 background-color:red;
		 border-radius: 7px;
		 width:7px;
		 height:7px;
		 margin-right:4px;
	 }
	 #pd{
		 background-color:#ff8a00;
		 border-radius: 7px;
		 width:7px;
		 height:7px;
		 margin-right:4px;
		 margin-left:4px;		 
	 }
	 #hr{
		 background-color:#00c6ff;
		 border-radius: 7px;
		 width:7px;
		 height:7px;
		 margin-right:4px;
		 margin-left:4px;		 
	 }	
	 .diengiai_sinhton{
		 margin-left:-15px !important;
		  margin-bottom:-29px !important;
	}
	  .dauhieusinhton{
		  position:relative;
		  
	 }
.n_chuky{
}
._chuky{
	font-size:14px;
	
	-moz-transform: rotate(90deg);
	 -webkit-transform: rotate(90deg);
	 -o-transform: rotate(90deg);
	 -ms-transform: rotate(90deg);
	 transform: rotate(90deg);
word-wrap:normal!important;
		white-space:nowrap;
		width:25px;
}
.n_mach{
	height:50px!important;
}
</style>
<!--<script src="../giaidoan2/js/dojo/dojo/dojo.js" type="text/javascript"></script>-->
</head>
 
<body>
<div id="n_add_page" style="page-break-after: always;">
	<?php
//	echo '<pre>' . print_r($_SESSION, TRUE) . '</pre>';
        $data= new SQLServer;
		
        $params11 = array($_GET["idluotkham"],$_GET["tungay"]." 00:00:00",$_GET["denngay"]." 23:59:59");
        $store_name11="{call GD2_DauHieuSinhTon_SelectByID_LuotKham_Time_NoiTru(?,?,?)}";
        $get_thongso11=$data->query( $store_name11,$params11);
        $excute11= new SQLServerResult($get_thongso11);
        $thongso= $excute11->get_as_array();
		$demthongso=count($thongso);
		//print_r($params11);
		//echo $demthongso;
		
		$params2 = array($_GET["idluotkham"]);//tao param cho store 
		$store_name2="{call GD2_Select_BenhanNoiTru2(?)}";	//214079 null  3907
		$get_danh_muc_phong_ban2=$data->query( $store_name2,$params2);//Goi store
		$excute2= new SQLServerResult($get_danh_muc_phong_ban2);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
		$thongtinbn= $excute2->get_as_array();//Tra ve mang toan bo data lay duoc 
		
		$params3 = array($_GET["idbenhannoitru"]);//tao param cho store 
		$store_name3="{call GD2_GetTenKhoaByID_BenhAnNoiTru(?)}";	//214079 null  3907
		$get_danh_muc_phong_ban3=$data->query( $store_name3,$params3);//Goi store
		$excute3= new SQLServerResult($get_danh_muc_phong_ban3);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
		$khoa= $excute3->get_as_array();//Tra ve mang toan bo data lay duoc 
		
		$params4 = array($_GET["idluotkham"],$_GET["tungay"]." 00:00:00",$_GET["denngay"]." 23:59:59");//tao param cho store 
		$store_name4="{call GD2_TheTrang_SelectByID_LuotKham_Time_NoiTru(?,?,?)}";//tao bien khai bao store
		$get_danh_muc_phong_ban4=$data->query( $store_name4,$params4);//Goi store
		$excute4= new SQLServerResult($get_danh_muc_phong_ban4);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
		$thongso2= $excute4->get_as_array();
		
		//print_r($params3);
		
		
		$ngay_1='';
		$ngay_2='';
		$ngay_3='';
		$ngay_4='';
		$ngay_5='';
		$ngay_6='';
		$ngay_7='';
		$ngay_8='';
		$ngay_9='';
		$ngay_10='';
		$ngay_11='';
		$ngay_12='';
		$ngay_13='';
		$ngay_14='';
		$ngay_15='';
		$ngay_16='';
		$ngay_17='';
		$ngay_18='';
		
		$gio_1='';
		$gio_2='';
		$gio_3='';
		$gio_4='';
		$gio_5='';
		$gio_6='';
		$gio_7='';
		$gio_8='';
		$gio_9='';
		$gio_10='';
		$gio_11='';
		$gio_12='';
		$gio_13='';
		$gio_14='';
		$gio_15='';
		$gio_16='';
		$gio_17='';
		$gio_18='';
		
		$ps_1='';
		$ps_2='';
		$ps_3='';
		$ps_4='';
		$ps_5='';
		$ps_6='';
		$ps_7='';
		$ps_8='';
		$ps_9='';
		$ps_10='';
		$ps_11='';
		$ps_12='';
		$ps_13='';
		$ps_14='';
		$ps_15='';
		$ps_16='';
		$ps_17='';
		$ps_18='';
		
		$pd_1='';
		$pd_2='';
		$pd_3='';
		$pd_4='';
		$pd_5='';
		$pd_6='';
		$pd_7='';
		$pd_8='';
		$pd_9='';
		$pd_10='';
		$pd_11='';
		$pd_12='';
		$pd_13='';
		$pd_14='';
		$pd_15='';
		$pd_16='';
		$pd_17='';
		$pd_18='';
		
		$nhiptho_1='';
		$nhiptho_2='';
		$nhiptho_3='';
		$nhiptho_4='';
		$nhiptho_5='';
		$nhiptho_6='';
		$nhiptho_7='';
		$nhiptho_8='';
		$nhiptho_9='';
		$nhiptho_10='';
		$nhiptho_11='';
		$nhiptho_12='';
		$nhiptho_13='';
		$nhiptho_14='';
		$nhiptho_15='';
		$nhiptho_16='';
		$nhiptho_17='';
		$nhiptho_18='';
		
		$nhanvien_1='';
		$nhanvien_2='';
		$nhanvien_3='';
		$nhanvien_4='';
		$nhanvien_5='';
		$nhanvien_6='';
		$nhanvien_7='';
		$nhanvien_8='';
		$nhanvien_9='';
		$nhanvien_10='';
		$nhanvien_11='';
		$nhanvien_12='';
		$nhanvien_13='';
		$nhanvien_14='';
		$nhanvien_15='';
		$nhanvien_16='';
		$nhanvien_17='';
		$nhanvien_18='';
		
		$n_mach_1='';
		$n_mach_2='';
		$n_mach_3='';
		$n_mach_4='';
		$n_mach_5='';
		$n_mach_6='';
		$n_mach_7='';
		$n_mach_8='';
		$n_mach_9='';
		$n_mach_10='';
		$n_mach_11='';
		$n_mach_12='';
		$n_mach_13='';
		$n_mach_14='';
		$n_mach_15='';
		$n_mach_16='';
		$n_mach_17='';
		$n_mach_18='';
		
		$n_nhiet_1='';
		$n_nhiet_2='';
		$n_nhiet_3='';
		$n_nhiet_4='';
		$n_nhiet_5='';
		$n_nhiet_6='';
		$n_nhiet_7='';
		$n_nhiet_8='';
		$n_nhiet_9='';
		$n_nhiet_10='';
		$n_nhiet_11='';
		$n_nhiet_12='';
		$n_nhiet_13='';
		$n_nhiet_14='';
		$n_nhiet_15='';
		$n_nhiet_16='';
		$n_nhiet_17='';
		$n_nhiet_18='';
		
		$sotrang= $_GET['trang'];
		if($sotrang<=1){
			$vitri_i=0;
		}else{
			$vitri_i=(18*($sotrang-1));
		}
		$j=0;
		//echo "n_".$demthongso;
		for($i=$vitri_i;$i<count($thongso);$i++){
			$giotam=$thongso[$i]['NgayGioDo']->format('H:i');
			if($j==0){
				$gio_1=$giotam;
				$ps_1=$thongso[$i]['Ps'];
				$pd_1=$thongso[$i]['Pd'];
				$nhiptho_1=$thongso[$i]['NhipTho'];
				$nhanvien_1=$thongso[$i]['NickName'];
				$ngay_1=$thongso[$i]['NgayGioDo']->format('d/m');
				$n_mach_1=$thongso[$i]['Mach'];
				$n_nhiet_1=$thongso[$i]['ThanNhiet'];
			}elseif($j==1){
					$gio_2=$giotam;
					$ps_2=$thongso[$i]['Ps'];
					$pd_2=$thongso[$i]['Pd'];
					$nhiptho_2=$thongso[$i]['NhipTho'];
					$nhanvien_2=$thongso[$i]['NickName'];
					$ngay_2=$thongso[$i]['NgayGioDo']->format('d/m');
					$n_mach_2=$thongso[$i]['Mach'];
					$n_nhiet_2=$thongso[$i]['ThanNhiet'];
			}elseif($j==2){
					$gio_3=$giotam;
					$ps_3=$thongso[$i]['Ps'];
					$pd_3=$thongso[$i]['Pd'];
					$nhiptho_3=$thongso[$i]['NhipTho'];
					$nhanvien_3=$thongso[$i]['NickName'];
					$ngay_3=$thongso[$i]['NgayGioDo']->format('d/m');
					$n_mach_3=$thongso[$i]['Mach'];
					$n_nhiet_3=$thongso[$i]['ThanNhiet'];
			}elseif($j==3){
					$gio_4=$giotam;
					$ps_4=$thongso[$i]['Ps'];
					$pd_4=$thongso[$i]['Pd'];
					$nhiptho_4=$thongso[$i]['NhipTho'];
					$nhanvien_4=$thongso[$i]['NickName'];
					$ngay_4=$thongso[$i]['NgayGioDo']->format('d/m');
					$n_mach_4=$thongso[$i]['Mach'];
					$n_nhiet_4=$thongso[$i]['ThanNhiet'];
			}elseif($j==4){
					$gio_5=$giotam;
					$ps_5=$thongso[$i]['Ps'];
					$pd_5=$thongso[$i]['Pd'];
					$nhiptho_5=$thongso[$i]['NhipTho'];
					$nhanvien_5=$thongso[$i]['NickName'];
					$ngay_5=$thongso[$i]['NgayGioDo']->format('d/m');
					$n_mach_5=$thongso[$i]['Mach'];
					$n_nhiet_5=$thongso[$i]['ThanNhiet'];
			}elseif($j==5){
					$gio_6=$giotam;
					$ps_6=$thongso[$i]['Ps'];
					$pd_6=$thongso[$i]['Pd'];
					$nhiptho_6=$thongso[$i]['NhipTho'];
					$nhanvien_6=$thongso[$i]['NickName'];
					$ngay_6=$thongso[$i]['NgayGioDo']->format('d/m');
					$n_mach_6=$thongso[$i]['Mach'];
					$n_nhiet_6=$thongso[$i]['ThanNhiet'];
			}elseif($j==6){
					$gio_7=$giotam;
					$ps_7=$thongso[$i]['Ps'];
					$pd_7=$thongso[$i]['Pd'];
					$nhiptho_7=$thongso[$i]['NhipTho'];
					$nhanvien_7=$thongso[$i]['NickName'];
					$ngay_7=$thongso[$i]['NgayGioDo']->format('d/m');
					$n_mach_7=$thongso[$i]['Mach'];
					$n_nhiet_7=$thongso[$i]['ThanNhiet'];
			}elseif($j==7){
					$gio_8=$giotam;
					$ps_8=$thongso[$i]['Ps'];
					$pd_8=$thongso[$i]['Pd'];
					$nhiptho_8=$thongso[$i]['NhipTho'];
					$nhanvien_8=$thongso[$i]['NickName'];
					$ngay_8=$thongso[$i]['NgayGioDo']->format('d/m');
					$n_mach_8=$thongso[$i]['Mach'];
					$n_nhiet_8=$thongso[$i]['ThanNhiet'];
			}elseif($j==8){
					$gio_9=$giotam;
					$ps_9=$thongso[$i]['Ps'];
					$pd_9=$thongso[$i]['Pd'];
					$nhiptho_9=$thongso[$i]['NhipTho'];
					$nhanvien_9=$thongso[$i]['NickName'];
					$ngay_9=$thongso[$i]['NgayGioDo']->format('d/m');
					$n_mach_9=$thongso[$i]['Mach'];
					$n_nhiet_9=$thongso[$i]['ThanNhiet'];
			}elseif($j==9){
					$gio_10=$giotam;
					$ps_10=$thongso[$i]['Ps'];
					$pd_10=$thongso[$i]['Pd'];
					$nhiptho_10=$thongso[$i]['NhipTho'];
					$nhanvien_10=$thongso[$i]['NickName'];
					$ngay_10=$thongso[$i]['NgayGioDo']->format('d/m');
					$n_mach_10=$thongso[$i]['Mach'];
					$n_nhiet_10=$thongso[$i]['ThanNhiet'];
			}elseif($j==10){
					$gio_11=$giotam;
					$ps_11=$thongso[$i]['Ps'];
					$pd_11=$thongso[$i]['Pd'];
					$nhiptho_11=$thongso[$i]['NhipTho'];
					$nhanvien_11=$thongso[$i]['NickName'];
					$ngay_11=$thongso[$i]['NgayGioDo']->format('d/m');
					$n_mach_11=$thongso[$i]['Mach'];
					$n_nhiet_11=$thongso[$i]['ThanNhiet'];
			}elseif($j==11){
					$gio_12=$giotam;
					$ps_12=$thongso[$i]['Ps'];
					$pd_12=$thongso[$i]['Pd'];
					$nhiptho_12=$thongso[$i]['NhipTho'];
					$nhanvien_12=$thongso[$i]['NickName'];
					$ngay_12=$thongso[$i]['NgayGioDo']->format('d/m');
					$n_mach_12=$thongso[$i]['Mach'];
					$n_nhiet_12=$thongso[$i]['ThanNhiet'];
			}elseif($j==12){
					$gio_13=$giotam;
					$ps_13=$thongso[$i]['Ps'];
					$pd_13=$thongso[$i]['Pd'];
					$nhiptho_13=$thongso[$i]['NhipTho'];
					$nhanvien_13=$thongso[$i]['NickName'];
					$ngay_13=$thongso[$i]['NgayGioDo']->format('d/m');
					$n_mach_13=$thongso[$i]['Mach'];
					$n_nhiet_13=$thongso[$i]['ThanNhiet'];
			}elseif($j==13){
					$gio_14=$giotam;
					$ps_14=$thongso[$i]['Ps'];
					$pd_14=$thongso[$i]['Pd'];
					$nhiptho_14=$thongso[$i]['NhipTho'];
					$nhanvien_14=$thongso[$i]['NickName'];
					$ngay_14=$thongso[$i]['NgayGioDo']->format('d/m');
					$n_mach_14=$thongso[$i]['Mach'];
					$n_nhiet_14=$thongso[$i]['ThanNhiet'];
			}elseif($j==14){
					$gio_15=$giotam;
					$ps_15=$thongso[$i]['Ps'];
					$pd_15=$thongso[$i]['Pd'];
					$nhiptho_15=$thongso[$i]['NhipTho'];
					$nhanvien_15=$thongso[$i]['NickName'];
					$ngay_15=$thongso[$i]['NgayGioDo']->format('d/m');
					$n_mach_15=$thongso[$i]['Mach'];
					$n_nhiet_15=$thongso[$i]['ThanNhiet'];
			}elseif($j==15){
					$gio_16=$giotam;
					$ps_16=$thongso[$i]['Ps'];
					$pd_16=$thongso[$i]['Pd'];
					$nhiptho_16=$thongso[$i]['NhipTho'];
					$nhanvien_16=$thongso[$i]['NickName'];
					$ngay_16=$thongso[$i]['NgayGioDo']->format('d/m');
					$n_mach_16=$thongso[$i]['Mach'];
					$n_nhiet_16=$thongso[$i]['ThanNhiet'];
			}elseif($j==16){
					$gio_17=$giotam;
					$ps_17=$thongso[$i]['Ps'];
					$pd_17=$thongso[$i]['Pd'];
					$nhiptho_17=$thongso[$i]['NhipTho'];
					$nhanvien_17=$thongso[$i]['NickName'];
					$ngay_17=$thongso[$i]['NgayGioDo']->format('d/m');
					$n_mach_17=$thongso[$i]['Mach'];
					$n_nhiet_17=$thongso[$i]['ThanNhiet'];
			}elseif($j==17){
					$gio_18=$giotam;
					$ps_18=$thongso[$i]['Ps'];
					$pd_18=$thongso[$i]['Pd'];
					$nhiptho_18=$thongso[$i]['NhipTho'];
					$nhanvien_18=$thongso[$i]['NickName'];
					$ngay_18=$thongso[$i]['NgayGioDo']->format('d/m');
					$n_mach_18=$thongso[$i]['Mach'];
					$n_nhiet_18=$thongso[$i]['ThanNhiet'];
			}			
			$j++;
		}
		//echo $ngay_2;
		$cannang_1='';
		$cannang_2='';
		$cannang_3='';
		$cannang_4='';
		$cannang_5='';
		$cannang_6='';
		$cannang_7='';
		$cannang_8='';
		$cannang_9='';
		$cannang_10='';
		$cannang_11='';
		$cannang_12='';
		$cannang_13='';
		$cannang_14='';
		$cannang_15='';
		$cannang_16='';
		$cannang_17='';
		$cannang_18='';
		
		$j=0;
		for($i=$vitri_i;$i<count($thongso2);$i++){
			
			if($j==0){
				$cannang_1=$thongso2[$i]['CanNang'];
			}elseif($j==1){
					$cannang_2=$thongso2[$i]['CanNang'];
			}elseif($j==2){
					$cannang_3=$thongso2[$i]['CanNang'];
			}elseif($j==3){
					$cannang_4=$thongso2[$i]['CanNang'];
			}elseif($j==4){
					$cannang_5=$thongso2[$i]['CanNang'];
			}elseif($j==5){
					$cannang_6=$thongso2[$i]['CanNang'];
			}elseif($j==6){
					$cannang_7=$thongso2[$i]['CanNang'];
			}elseif($j==7){
					$cannang_8=$thongso2[$i]['CanNang'];
			}elseif($j==8){
					$cannang_9=$thongso2[$i]['CanNang'];
			}elseif($j==9){
					$cannang_10=$thongso2[$i]['CanNang'];
			}elseif($j==10){
					$cannang_11=$thongso2[$i]['CanNang'];
			}elseif($j==11){
					$cannang_12=$thongso2[$i]['CanNang'];
			}elseif($j==12){
					$cannang_13=$thongso2[$i]['CanNang'];
			}elseif($j==13){
					$cannang_14=$thongso2[$i]['CanNang'];
			}elseif($j==14){
					$cannang_15=$thongso2[$i]['CanNang'];
			}elseif($j==15){
					$cannang_16=$thongso2[$i]['CanNang'];
			}elseif($j==16){
					$cannang_17=$thongso2[$i]['CanNang'];
			}elseif($j==17){
					$cannang_18=$thongso2[$i]['CanNang'];
			}
			$j++;
		}
		
		
		
    ?>
<table width="100%" cellpadding="0" cellspacing="0">
  <tr>
  <td width="7%">
  <img width="40px" height="70px" src="./modules/report/lamsang/img/theodoichucnangsong/logo_den.png"  />
  </td>
    <td width="36%" style="vertical-align:top">BV:<?php echo $_SESSION["com"]["TenBenhVien"]?><br />
    Khoa: <?=$khoa[0]['TenPhongBan']?>
    </td>
    <td  width="51%" style="text-align:center;"><label id="tieuderp">PHIẾU THEO DÕI CHỨC NĂNG SỐNG</label></td>
    <td width="13%">MS:10/BV-01<br />
    	Số vào viện:<br />
        <input type="text" value="<?=$thongtinbn[0]['SoVaoVien']?>" id="sovaovien" class="textinput" style="width:70px" />
   	  </td>
  </tr>
</table>
<br />
<table width="100%"  cellpadding="0" cellspacing="0" border="0">
  <tr>
    <td>- Họ tên người bệnh:<input type="text" id="hoten" value="<?=$thongtinbn[0]['tenbenhnhan']?>" class="textinput" style="width:350px" /> Tuổi:<input type="text" id="tuoi"value="<?=$thongtinbn[0]['Tuoi']?>" class="textinput" style="width:75px" /> Giới:<input type="text" id="gioi" value="<?=$thongtinbn[0]['Gioi']?>" class="textinput" style="width:75px" /></td>
  </tr>
  <tr>
    <td>- Số giường:<input type="text" id="sogiuong" value="<?=$thongtinbn[0]['TenGiuong']?>" class="textinput" style="width:249px" /> Buồng:<input type="text" value="<?=$thongtinbn[0]['TenBuong']?>" id="buong" class="textinput" style="width:326px" /></td>
  </tr>
  <tr>
    <td>- Chẩn đoán:<input type="text" id="chandoan" value="<?=$thongtinbn[0]['CD_RaVienBenhChinh']?>" class="textinput" style="width:625px" /></td>
  </tr>
</table><br />
<table id="tb_ttct" cellpadding="0" cellspacing="0" width="730" border="1">
  <tr style="font-size:13px;">
    <td colspan="2" style="font-size:14px;"><div align="center">Ngày, tháng</div></td>  
     <?php
	if(($ngay_2=='') || ($ngay_1==$ngay_2)){
	?>
    <td colspan="2" align="center"><?=$ngay_1?></td>
    <?php	
	}else{
		?>
        <td><?=$ngay_1?></td>
        <td><?=$ngay_2?></td>
        <?php
		}
	 ?>
     
    <?php
	if(($ngay_4=='') || ($ngay_3==$ngay_4)){
	?>
    <td colspan="2" align="center"><?=$ngay_3?></td>
    <?php	
	}else{
		?>
        <td><?=$ngay_3?></td>
        <td><?=$ngay_4?></td>
        <?php
		}
	 ?>
     
    <?php
	if(($ngay_6=='') || ($ngay_5==$ngay_6)){
	?>
    <td colspan="2" align="center"><?=$ngay_5?></td>
    <?php	
	}else{
		?>
        <td><?=$ngay_5?></td>
        <td><?=$ngay_6?></td>
        <?php
		}
	 ?>
     <?php
	if(($ngay_8=='') || ($ngay_7==$ngay_8)){
	?>
    <td colspan="2" align="center"><?=$ngay_7?></td>
    <?php	
	}else{
		?>
        <td><?=$ngay_7?></td>
        <td><?=$ngay_8?></td>
        <?php
		}
	 ?>
     
     <?php
	if(($ngay_10=='') || ($ngay_9==$ngay_10)){
	?>
    <td colspan="2" align="center"><?=$ngay_9?></td>
    <?php	
	}else{
		?>
        <td><?=$ngay_9?></td>
        <td><?=$ngay_10?></td>
        <?php
		}
	 ?>
    <?php
	if(($ngay_12=='') || ($ngay_11==$ngay_12)){
	?>
    <td colspan="2" align="center"><?=$ngay_11?></td>
    <?php	
	}else{
		?>
        <td><?=$ngay_11?></td>
        <td><?=$ngay_12?></td>
        <?php
		}
	 ?>
     <?php
	if(($ngay_14=='') || ($ngay_13==$ngay_14)){
	?>
    <td colspan="2" align="center"><?=$ngay_13?></td>
    <?php	
	}else{
		?>
        <td><?=$ngay_13?></td>
        <td><?=$ngay_14?></td>
        <?php
		}
	 ?>
    <?php
	if(($ngay_16=='') || ($ngay_15==$ngay_16)){
	?>
    <td colspan="2" align="center"><?=$ngay_15?></td>
    <?php	
	}else{
		?>
        <td><?=$ngay_15?></td>
        <td><?=$ngay_16?></td>
        <?php
		}
	 ?>
      <?php
	if(($ngay_18=='') || ($ngay_17==$ngay_18)){
	?>
    <td colspan="2" align="center"><?=$ngay_17?></td>
    <?php	
	}else{
		?>
        <td><?=$ngay_17?></td>
        <td><?=$ngay_18?></td>
        <?php
		}
	 ?>
  </tr>
  <tr>
    <td width="95"><div align="center">Mạch<br />L/ph</div></td>
    <td width="95"><div align="center">Nhiệt<br />độ C</div></td>
    <td width="33" class="giodo"><?=$gio_1?></td>
    <td width="33" class="giodo"><?=$gio_2?></td>
    <td width="33" class="giodo"><?=$gio_3?></td>
    <td width="33" class="giodo"><?=$gio_4?></td>
    <td width="33" class="giodo"><?=$gio_5?></td>
    <td width="33" class="giodo"><?=$gio_6?></td>
    <td width="33" class="giodo"><?=$gio_7?></td>
    <td width="33" class="giodo"><?=$gio_8?></td>
    <td width="33" class="giodo"><?=$gio_9?></td>
    <td width="33" class="giodo"><?=$gio_10?></td>
    <td width="33" class="giodo"><?=$gio_11?></td>
    <td width="33" class="giodo"><?=$gio_12?></td>
    <td width="33" class="giodo"><?=$gio_13?></td>
    <td width="33" class="giodo"><?=$gio_14?></td>
    <td width="33" class="giodo"><?=$gio_15?></td>
    <td width="33" class="giodo"><?=$gio_16?></td>
    <td width="33" class="giodo"><?=$gio_17?></td>
    <td width="33" class="giodo"><?=$gio_18?></td>
  </tr>
  <tr>
    <td height="50" class="n_mach"><div align="center">160</div></td>
    <td><div align="center">41</div></td>
    <td colspan="18" rowspan="7" id="bieudo<?=$_GET['trang']?>">&nbsp;</td>
  </tr>
  <tr>
    <td  height="50" class="n_mach"><div align="center">140</div></td>
    <td><div align="center">40</div></td>
  </tr>
  <tr>
    <td  height="50" class="n_mach"><div align="center">120</div></td>
    <td><div align="center">39</div></td>
  </tr>
  <tr>
    <td  height="50" class="n_mach"><div align="center">100</div></td>
    <td><div align="center">38</div></td>
  </tr>
  <tr>
    <td  height="50" class="n_mach"><div align="center">80</div></td>
    <td><div align="center">37</div></td>
  </tr>
  <tr>
    <td  height="50" class="n_mach"><div align="center">60</div></td>
    <td><div align="center">36</div></td>
  </tr>
  <tr>
    <td  height="50" class="n_mach"><div align="center">40</div></td>
    <td><div align="center">35</div></td>
  </tr>
  <tr>
    <td colspan="2"  height="10" style="padding-left:3px; text-align:center">Hr</td>
    <td align="center"><span class="giodo">
      <?=$n_mach_1?>
    </span></td>
    <td align="center"><span class="giodo">
      <?=$n_mach_2?>
    </span></td>
    <td align="center"><span class="giodo">
      <?=$n_mach_3?>
    </span></td>
    <td align="center"><span class="giodo">
      <?=$n_mach_4?>
    </span></td>
    <td align="center"><span class="giodo">
      <?=$n_mach_5?>
    </span></td>
    <td align="center"><span class="giodo">
      <?=$n_mach_6?>
    </span></td>
    <td align="center"><span class="giodo">
      <?=$n_mach_7?>
    </span></td>
    <td align="center"><span class="giodo">
      <?=$n_mach_8?>
    </span></td>
    <td align="center"><span class="giodo">
      <?=$n_mach_9?>
    </span></td>
    <td align="center"><span class="giodo">
      <?=$n_mach_10?>
    </span></td>
    <td align="center"><span class="giodo">
      <?=$n_mach_11?>
    </span></td>
    <td align="center"><span class="giodo">
      <?=$n_mach_12?>
    </span></td>
    <td align="center"><span class="giodo">
      <?=$n_mach_13?>
    </span></td>
    <td align="center"><span class="giodo">
      <?=$n_mach_14?>
    </span></td>
    <td align="center"><span class="giodo">
      <?=$n_mach_15?>
    </span></td>
    <td align="center"><span class="giodo">
      <?=$n_mach_16?>
    </span></td>
    <td align="center"><span class="giodo">
      <?=$n_mach_17?>
    </span></td>
    <td align="center"><span class="giodo">
      <?=$n_mach_18?>
    </span></td>
  </tr>
  <tr>
    <td colspan="2"  height="10" style="padding-left:3px; text-align:center">Temp</td>
    <td align="center"><span class="giodo">
      <?=$n_nhiet_1?>
    </span></td>
    <td align="center"><span class="giodo">
      <?=$n_nhiet_2?>
    </span></td>
    <td align="center"><span class="giodo">
      <?=$n_nhiet_3?>
    </span></td>
    <td align="center"><span class="giodo">
      <?=$n_nhiet_4?>
    </span></td>
    <td align="center"><span class="giodo">
      <?=$n_nhiet_5?>
    </span></td>
    <td align="center"><span class="giodo">
      <?=$n_nhiet_6?>
    </span></td>
    <td align="center"><span class="giodo">
      <?=$n_nhiet_7?>
    </span></td>
    <td align="center"><span class="giodo">
      <?=$n_nhiet_8?>
    </span></td>
    <td align="center"><span class="giodo">
      <?=$n_nhiet_9?>
    </span></td>
    <td align="center"><span class="giodo">
      <?=$n_nhiet_10?>
    </span></td>
    <td align="center"><span class="giodo">
      <?=$n_nhiet_11?>
    </span></td>
    <td align="center"><span class="giodo">
      <?=$n_nhiet_12?>
    </span></td>
    <td align="center"><span class="giodo">
      <?=$n_nhiet_13?>
    </span></td>
    <td align="center"><span class="giodo">
      <?=$n_nhiet_14?>
    </span></td>
    <td align="center"><span class="giodo">
      <?=$n_nhiet_15?>
    </span></td>
    <td align="center"><span class="giodo">
      <?=$n_nhiet_16?>
    </span></td>
    <td align="center"><span class="giodo">
      <?=$n_nhiet_17?>
    </span></td>
    <td align="center"><span class="giodo">
      <?=$n_nhiet_18?>
    </span></td>
  </tr>
  <tr>
    <td colspan="2"  height="50" style="padding-left:3px;">1. Huyết áp<br />&nbsp;&nbsp;&nbsp;&nbsp;(mmHg)</td>
    <td align="center"><?=$ps_1?><hr style="margin-top: 0px; margin-bottom: 0px;" /><?=$pd_1?></td>
    <td align="center"><?=$ps_2?><hr style="margin-top: 0px; margin-bottom: 0px;" /><?=$pd_2?></td>
    <td align="center"><?=$ps_3?><hr style="margin-top: 0px; margin-bottom: 0px;" /><?=$pd_3?></td>
    <td align="center"><?=$ps_4?><hr style="margin-top: 0px; margin-bottom: 0px;" /><?=$pd_4?></td>
    <td align="center"><?=$ps_5?><hr style="margin-top: 0px; margin-bottom: 0px;" /><?=$pd_5?></td>
    <td align="center"><?=$ps_6?><hr style="margin-top: 0px; margin-bottom: 0px;" /><?=$pd_6?></td>
    <td align="center"><?=$ps_7?><hr style="margin-top: 0px; margin-bottom: 0px;" /><?=$pd_7?></td>
    <td align="center"><?=$ps_8?><hr style="margin-top: 0px; margin-bottom: 0px;" /><?=$pd_8?></td>
    <td align="center"><?=$ps_9?><hr style="margin-top: 0px; margin-bottom: 0px;" /><?=$pd_9?></td>
    <td align="center"><?=$ps_10?><hr style="margin-top: 0px; margin-bottom: 0px;" /><?=$pd_10?></td>
    <td align="center"><?=$ps_11?><hr style="margin-top: 0px; margin-bottom: 0px;" /><?=$pd_11?></td>
    <td align="center"><?=$ps_12?><hr style="margin-top: 0px; margin-bottom: 0px;" /><?=$pd_12?></td>
    <td align="center"><?=$ps_13?><hr style="margin-top: 0px; margin-bottom: 0px;" /><?=$pd_13?></td>
    <td align="center"><?=$ps_14?><hr style="margin-top: 0px; margin-bottom: 0px;" /><?=$pd_14?></td>
    <td align="center"><?=$ps_15?><hr style="margin-top: 0px; margin-bottom: 0px;" /><?=$pd_15?></td>
    <td align="center"><?=$ps_16?><hr style="margin-top: 0px; margin-bottom: 0px;" /><?=$pd_16?></td>
    <td align="center"><?=$ps_17?><hr style="margin-top: 0px; margin-bottom: 0px;" /><?=$pd_17?></td>
    <td align="center"><?=$ps_18?><hr style="margin-top: 0px; margin-bottom: 0px;" /><?=$pd_18?></td>
  </tr>
  <tr>
    <td colspan="2"  height="50"  style="padding-left:3px;">2. Cân nặng<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(Kg)</td>
    <td align="center"><?=$cannang_1?></td>
    <td align="center"><?=$cannang_2?></td>
    <td align="center"><?=$cannang_3?></td>
    <td align="center"><?=$cannang_4?></td>
    <td align="center"><?=$cannang_5?></td>
    <td align="center"><?=$cannang_6?></td>
    <td align="center"><?=$cannang_7?></td>
    <td align="center"><?=$cannang_8?></td>
    <td align="center"><?=$cannang_9?></td>
    <td align="center"><?=$cannang_10?></td>
    <td align="center"><?=$cannang_11?></td>
    <td align="center"><?=$cannang_12?></td>
    <td align="center"><?=$cannang_13?></td>
    <td align="center"><?=$cannang_14?></td>
    <td align="center"><?=$cannang_15?></td>
    <td align="center"><?=$cannang_16?></td>
    <td align="center"><?=$cannang_17?></td>
    <td align="center"><?=$cannang_18?></td>
  </tr>
  <tr>
    <td colspan="2"  height="50"  style="padding-left:3px;">3. Nhịp thở<br />&nbsp;&nbsp;&nbsp;(lần/phút)</td>
    <td align="center"><?=$nhiptho_1?></td>
    <td align="center"><?=$nhiptho_2?></td>
    <td align="center"><?=$nhiptho_3?></td>
    <td align="center"><?=$nhiptho_4?></td>
    <td align="center"><?=$nhiptho_5?></td>
    <td align="center"><?=$nhiptho_6?></td>
    <td align="center"><?=$nhiptho_7?></td>
    <td align="center"><?=$nhiptho_8?></td>
    <td align="center"><?=$nhiptho_9?></td>
    <td align="center"><?=$nhiptho_10?></td>
    <td align="center"><?=$nhiptho_11?></td>
    <td align="center"><?=$nhiptho_12?></td>
    <td align="center"><?=$nhiptho_13?></td>
    <td align="center"><?=$nhiptho_14?></td>
    <td align="center"><?=$nhiptho_15?></td>
    <td align="center"><?=$nhiptho_16?></td>
    <td align="center"><?=$nhiptho_17?></td>
    <td align="center"><?=$nhiptho_18?></td>
  </tr>
  <tr>
    <td colspan="2"  height="50"  style="padding-left:3px;">4.</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2"  height="50"  style="padding-left:3px;">5.</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2"  height="100"  style="padding-left:3px;">Y tá - ĐD<br /><br />Ký và ghi tên</td>
    <td style="vertical-align:top; padding-top:10px; padding-left:5px;" ><div class="_chuky"><?=$nhanvien_1?><div></td>
    <td  style="vertical-align:top; padding-top:10px; padding-left:5px;"><div class="_chuky"><?=$nhanvien_2?><div></td>
    <td style="vertical-align:top; padding-top:10px; padding-left:5px;"><div class="_chuky"><?=$nhanvien_3?><div></td>
    <td style="vertical-align:top; padding-top:10px; padding-left:5px;"><div class="_chuky"><?=$nhanvien_4?><div></td>
    <td style="vertical-align:top; padding-top:10px; padding-left:5px;"><div class="_chuky"><?=$nhanvien_5?><div></td>
    <td style="vertical-align:top; padding-top:10px; padding-left:5px;"><div class="_chuky"><?=$nhanvien_6?><div></td>
    <td style="vertical-align:top; padding-top:10px; padding-left:5px;"><div class="_chuky"><?=$nhanvien_7?><div></td>
    <td style="vertical-align:top; padding-top:10px; padding-left:5px;"><div class="_chuky"><?=$nhanvien_8?><div></td>
    <td style="vertical-align:top; padding-top:10px; padding-left:5px;"><div class="_chuky"><?=$nhanvien_9?><div></td>
    <td style="vertical-align:top; padding-top:10px; padding-left:5px;"><div class="_chuky"><?=$nhanvien_10?><div></td>
    <td style="vertical-align:top; padding-top:10px; padding-left:5px;"><div class="_chuky"><?=$nhanvien_11?><div></td>
    <td style="vertical-align:top; padding-top:10px; padding-left:5px;"><div class="_chuky"><?=$nhanvien_12?><div></td>
    <td style="vertical-align:top; padding-top:10px; padding-left:5px;"><div class="_chuky"><?=$nhanvien_13?><div></td>
    <td style="vertical-align:top; padding-top:10px; padding-left:5px;"><div class="_chuky"><?=$nhanvien_14?><div></td>
    <td style="vertical-align:top; padding-top:10px; padding-left:5px;"><div class="_chuky"><?=$nhanvien_15?><div></td>
    <td style="vertical-align:top; padding-top:10px; padding-left:5px;"><div class="_chuky"><?=$nhanvien_16?><div></td>
    <td style="vertical-align:top; padding-top:10px; padding-left:5px;"><div class="_chuky"><?=$nhanvien_17?><div></td>
    <td style="vertical-align:top; padding-top:10px; padding-left:5px;"><div class="_chuky"><?=$nhanvien_18?><div></td>
  </tr>
</table>
 <?php
		$i=0;
		$mach=array();
		$nhietdo=array();
		$_mach=0;
		$_nhietdo=0;
		$nd=0;
		foreach($thongso as $ts){
			$mach[$i]=$ts['Mach'];
			if($ts['ThanNhiet']==35){
				$nd=40;	
			}elseif($ts['ThanNhiet']>35){
				$tam=($ts['ThanNhiet']-35)*20;
				$nd=40+$tam;
			}else{
				$nd=0;
			}
			$nhietdo[$i]=$nd;
			$i++;
		}
		$mach=implode(",",$mach); 
		$nhietdo=implode(",",$nhietdo); 
		echo "<input type='hidden' id='mach' rel='$mach'>";
		echo "<input type='hidden' id='nhietdo' rel='$nhietdo'>";
		?>
 </div>
</body>
</html>
 <!--<script type="text/javascript">
	$(document).ready(function() { 
		var mach=$("#mach").attr("rel"); 
		var nhietdo=$("#nhietdo").attr("rel"); 
		draw_chart_dauhieusinhton(mach,nhietdo);
		//print_preview();
	});//
	
	
function draw_chart_dauhieusinhton(mach,nhietdo){
	t=setTimeout(function(){
	$("#bieudo").empty();
	//$(".left_col").removeClass("dauhieusinhton");	
	$("#bieudo").append('<div class="diengiai_sinhton"><div class="dauhieusinhton" id="dauhieusinhton" style="width:85%;"></div>');	
    // alert($("#inner-top").height());
	//$(".diengiai").css("height",
	$(".dauhieusinhton").css("height",($("#bieudo").height())+30+"px");
	$(".dauhieusinhton").css("width",($("#bieudo").width())+50+"px");	
	$(".diengiai_sinhton").css("top","0px");
	$(".diengiai_sinhton").css("left",$(".dauhieusinhton").width()+"px");
		//alert($(".dauhieusinhton").height());	
		chart_sinhton(mach,nhietdo);		 
		clearTimeout(t);		 
	},50);		
}
	dojo.require("dijit.form.HorizontalSlider");	 
	dojo.require("dijit.form.HorizontalRule");
	dojo.require("dijit.form.HorizontalRuleLabels");
	dojo.require("dojox.charting.Chart2D");
	dojo.require("dojox.charting.plot2d.Lines");//charting/plot2d/Lines
	dojo.require("dojox.charting.plot2d.Markers");						
	dojo.require("dojox.charting.themes.Midwest");
	dojo.require("dojox.lang.functional.object");

function chart_sinhton  (mach,nhietdo){
	//alert(mach+'_'+nhietdo)
	var chartData =[];
	var chartData1 =[];
	var labelx=[];
	 var mach2=mach.split(",");
	  var nhietdo2=nhietdo.split(",");
	  
	  for (var i=0;i<mach2.length;i++)
		{
			 chartData.push(parseInt(mach2[i]));
			// console.log(ps2[i]);
		}
		for (var i = 0; i < nhietdo2.length; i++) {
			
			chartData1.push(parseInt(nhietdo2[i]));
		}	
	// Create the chart within it's "holding" node
	var theme = dojox.charting.themes.Midwest;
	var chart = new dojox.charting.Chart2D("dauhieusinhton");
	//theme.setMarkers({ "CIRCLE":  "m-5,-5 l0,10 10,0 0,-10 z",  });
	/*theme.setMarkers({ 
				SQUARE:   "m-5,-5 l0,10 10,0 0,-10 z", 
 
	   
	}); */
	// Set the theme
	chart.setTheme(theme);
	
	// Add the only/default plot
	chart.addPlot("default", {
		fill: "#ff8a00",
		stroke: {color:"#ff8a00"},
		
		type: "Lines",
		markers: true,
	});
	chart.addPlot("nhietdo", {
		type: "Lines",
		fill: "red",
		stroke: {color:"red"},
		type: "Lines",
		markers: true,
	});
	// Add axes
	
	var maxY =[chartData.max(),chartData1.max()];  	
	chart.addAxis("y", {
		 	min: 31,
			max: 164,
			vertical: true,
			htmlLabels: false 
			});   
	chart.addAxis("x", {            
			showTicks : true,
		//	htmlLabels: false,
			majorTickStep : 1, 
			//minorTickStep:20,
			min: 1,
			max: 18,
			from: 1,
			to: 18,
		}
			);
	 
	// Add the series of data
	chart.addSeries("mach",chartData);
	chart.addSeries("nhietdo", chartData1, {plot: "nhietdo"});
	// Render the chart!
	chart.render();
	remove_text();
};
function remove_text  (){
$( "text:contains('1.')" ).remove();
$( "text:contains('2.')" ).remove();
$( "text:contains('3.')" ).remove();
$( "text:contains('4.')" ).remove();
$( "text:contains('5.')" ).remove();
$( "text:contains('6.')" ).remove();
$( "text:contains('7.')" ).remove();
$( "text:contains('0')" ).remove();
$( "text:contains('1')" ).remove();
$( "text:contains('2')" ).remove();
$( "text:contains('3')" ).remove();
$( "text:contains('4')" ).remove();
$( "text:contains('5')" ).remove();
$( "text:contains('6')" ).remove();
$( "text:contains('7')" ).remove();
$( "text:contains('8')" ).remove();
$( "text:contains('9')" ).remove();
$( "#dauhieusinhton svg" ).find( "rect:first" ).remove();
$( "#dauhieusinhton svg" ).find( "g:nth-child(7)" ).remove();
$( "#dauhieusinhton svg" ).find( "g:nth-child(8)" ).remove();
$( "#dauhieusinhton svg" ).find( "g:nth-child(9)" ).remove();
$( "#dauhieusinhton svg" ).find( "g:last" ).remove();
//alert(a);
}
</script>-->
 