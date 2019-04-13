<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Report</title>
<!--<style media="print">
	textarea{
		width:100%;
		background:url(images/dotted.png) repeat;
		border:none; 
		height:100%;
		line-height:18px;
		background-attachment:local!important
	}
</style>-->
<style>
#dotted{
	width:100%;
	background:url(images/dotted.png) repeat;
	border:none;
	line-height:18px;
	background-attachment:local!important;
	box-shadow:none!important;
	
}
body{
    overflow: auto;
	font-size:14px;
	font-family:Arial, Helvetica, sans-serif;
   
}

pre {
 white-space: pre-wrap;       /* css-3 */
 white-space: -moz-pre-wrap;  /* Mozilla, since 1999 */
 white-space: -pre-wrap;      /* Opera 4-6 */
 white-space: -o-pre-wrap;    /* Opera 7 */
 word-wrap: break-word;       /* Internet Explorer 5.5+ */
 font:13px Tahoma, Geneva, sans-serif;
}
.text_1{
    border-top-width: 0px!important;
    border-left-width: 0px!important;
    border-right-width: 0px!important;
    
    box-shadow: none!important ;
   
    border-style:none!important;
	background:url(images/dotted.png) repeat;
}
input[type="text"]
{
border: 1px solid black;

}
.th{
	padding:5px;
}
.td{
	padding:5px;
	
}
.kyten{
	bottom: 1px;
    float: right;
    position: relative;
    right: 30px;
	font-weight:bold;
}
	
</style>
</head>
 
<body>
    <?php
//	echo htmlspecialchars_decode('&lt;br&gt; zCannesten X 1.0 Tiêm. Sáng 1 Viên, 30 phút  &lt;br&gt; zSurgestone X 2.0 Uống - theo hướng dẫn');
	//echo '<pre>' . print_r($_SESSION, TRUE) . '</pre>';
        $data= new SQLServer;//tao lop ket noi SQL
		
        $params = array($_GET["idluotkham"]);//tao param cho store 
        $store_name="{call GD2_Select_BenhanNoiTru2(?)}";   //214079 null  3907
        $get_danh_muc_phong_ban=$data->query( $store_name,$params);//Goi store
        $excute= new SQLServerResult($get_danh_muc_phong_ban);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
        $patient_info= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 
        //print_r($patient_info);
		
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
		
		$params4 = array($_GET['idtodieutri']);//tao param cho store 
		$store_name4="{call GD2_Report_GetAllToDieuTriByID_ToDieuTri (?)}";//tao bien khai bao store
		$get_danh_muc_phong_ban4=$data->query( $store_name4,$params4);//Goi store
		$excute4= new SQLServerResult($get_danh_muc_phong_ban4);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
		$tam4= $excute4->get_as_array();//Tra ve mang toan bo data lay duoc  
		
/*		$params5 = array($_GET['idtodieutri']);//tao param cho store 
		$store_name5="{call GD2_GetDonThuocByID_ToDieuTri(?)}";//tao bien khai bao store
		$get_danh_muc_phong_ban5=$data->query( $store_name5,$params5);//Goi store
		$excute5= new SQLServerResult($get_danh_muc_phong_ban5);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
		$tam5= $excute5->get_as_array();//Tra ve mang toan bo data lay duoc  
		$donthuoc='';
		foreach ($tam5 as $row5) {
			if($donthuoc==''){
				$donthuoc=$row5['TenBietDuoc'];
			}else{
				$donthuoc=$donthuoc.', '.$row5['TenBietDuoc'];
				}
			
		}*/
		
		$params6 = array($_GET['idtodieutri']);//tao param cho store 
		$store_name6="{call GD2_GetDonThuocTraLaiByID_ToDieuTri(?)}";//tao bien khai bao store
		$get_danh_muc_phong_ban6=$data->query( $store_name6,$params6);//Goi store
		$excute6= new SQLServerResult($get_danh_muc_phong_ban6);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
		$tam6= $excute6->get_as_array();//Tra ve mang toan bo data lay duoc  
		$thuoctralai='';
		foreach ($tam6 as $row6) {
			if($thuoctralai==''){
				$thuoctralai=$row6['TenBietDuoc'];
			}else{
				$thuoctralai=$thuoctralai.', '.$row6['TenBietDuoc'];
				}
			
		}
		
        
    ?>

<table width="99%" cellpadding="0" cellspacing="0">
  <tr>
  <td width="7%">
  <img width="40px" height="55px" src="./modules/report/lamsang/img/theodoichucnangsong/logo_den.png"  />
  </td>
    <td width="42%" style="vertical-align:top; text-transform:uppercase; font-weight:bold"><?php echo $_SESSION["com"]["TenCoQuanTrucThuoc"]?><br /><?php echo $_SESSION["com"]["TenBenhVien"]?>
    </td>
    <td  width="25%" style="text-align:left; font-size:24px; vertical-align:top; padding-top:7px;"><label id="tieuderp"><strong>TỜ ĐIỀU TRỊ</strong></label></td>
    <td  width="10%" style="text-align:left; font-size:14px;vertical-align:top; padding-top:17px; font-style:italic"><strong>&nbsp;Số: <?=$_GET['so']?></strong></td>
    <td width="20%" style="vertical-align:top; "><strong>MS: 39/BV-01</strong><br />
    	<strong>Số vào viện:
<?=$thongtinbn[0]['SoVaoVien']?>
    </strong></td>
  </tr>
</table>
 
      <table width="100%" style="margin-top:5px">
    <tr>
      <td colspan="3">
          -Họ tên người bệnh: <span  style="text-transform:uppercase"><b><?=$patient_info[0]["tenbenhnhan"] ?></b></span>      </td>
        <td width="10%">
            Tuổi: <strong>
            <?=$patient_info[0]["Tuoi"] ?>
        </strong></td>
        <td width="10%">
            Giới tính: <strong>
            <?=$patient_info[0]["Gioi"] ?>
        </strong></td>
    </tr>
     
     <tr>
       <td width="20%"  style="vertical-align:top">-Khoa: <strong>
       <?=$khoa[0]['TenPhongBan']?>
       </strong></td>
       <td width="10%"  style="vertical-align:top">Buồng:<strong>
<?=$patient_info[0]["TenBuong"] ?>
       </strong></td>
       
        <td width="10%"  style="vertical-align:top">Giường:
          <strong>
          <?=$patient_info[0]["TenGiuong"] ?>
        </strong></td>
        <td colspan="2">
            Chẩn đoán: <strong>
            <?=$patient_info[0]["CD_NoiChuyenDen"] ?>        
            </strong></td>
        </tr>
    </table>
    <br>
    <table id="bang" cellpadding="0" cellspacing="0" border="1" width="99%">
        <tr>
            <th class="th" width="12%">NGÀY GIỜ</th>
            <th class="th" width="38%">DIỄN BIẾN BỆNH</th>
            <th class="th" width="50%">Y LỆNH</th>
        </tr>
        <?php
		foreach($tam4 as $row){
			if($row['NgayGioTao']!=''){
			$row['NgayGioTao']=$row['NgayGioTao']->format("H:i ".$_SESSION["config_system"]["ngaythang"]);
		  }
		 if($row['NgayGioChiDinh']!=''){
			$row['NgayGioChiDinh']=$row['NgayGioChiDinh']->format($_SESSION["config_system"]["ngaythang"]);
		  }
		 if($row['NgayGioHoanTat']!=''){
			$row['NgayGioHoanTat']=$row['NgayGioHoanTat']->format($_SESSION["config_system"]["ngaythang"]);
		  }
		if($row['canlamsang']!=''){
			$row['canlamsang']=	"<b>- Cận lâm sàng:</b> ".htmlspecialchars_decode($row['canlamsang'])."<br>";
		}
		if($row['dieutriphoihop']!=''){
			$row['dieutriphoihop']='<b>- Điều trị phối hợp:</b> '.htmlspecialchars_decode($row['dieutriphoihop'])."<br>";
		}
		if($row['NoiDungYLenhKhac']!=''){
			$row['NoiDungYLenhKhac']="<b>- Y lệnh khác:</b> ".$row['NoiDungYLenhKhac']."<br>";
		}
		if($row['donthuocct']!=''){
			$row['donthuocct']="<b>- Đơn thuốc:</b> ".htmlspecialchars_decode($row['donthuocct'])."<br>";
		}
		if($thuoctralai!=''){
			$thuoctralai2="<b>- Đơn thuốc trả lại:</b> ".$thuoctralai."<br>";
		}
		?>
       
        <tr>
          <td width="12%" rowspan="2" class="td" style="text-align:center; vertical-align:top"><?=$row['NgayGioTao']?></td>
          <td class="td" width="38%" style=" vertical-align:top; border-bottom:none !important"><?=$row['DienBien']?><br /><br /><br /><br /></td>
          <td class="td" width="50%" style=" vertical-align:top; border-bottom:none !important"><?=$row['canlamsang'].''.$row['dieutriphoihop'].''.$row['donthuocct'].''.$thuoctralai2.''.$row['NoiDungYLenhKhac']?><br /><br /><br /><br /></td>
        </tr>
         <tr>
          <td class="td" style=" vertical-align:top; border-top:none !important"><div class="kyten"><?php if($row['DienBien']){ echo $row['HoTenThuKy'];}?> </div></td>
          <td class="td" style=" vertical-align:top; border-top:none !important"><div class="kyten"><?=$row['HoTenThuKy']?> </div></td>
        </tr>
        <?php
		}
		?>
       
</table>
   
</body>
</html>
   <script type="application/javascript">
        $(document).ready(function() {
        	print_preview();
        });
    </script>