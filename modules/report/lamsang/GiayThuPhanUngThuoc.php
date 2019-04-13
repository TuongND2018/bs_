<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Report</title>
<style type="text/css" media="print">
html,body{
	overflow: auto;
	font-family:Arial, Helvetica, sans-serif!important;
	font-size:13px;
}
#bang{
		margin-top: 5px;
		border-top:1px solid #000;
		border-right:1px solid #000;		
	}
	.td{
		height:30px;
		border-left:1px solid #000;
		border-bottom:1px solid #000;
		padding:2px 2px;		 
	}
	.th{
		border-left:1px solid #000;
		border-bottom:1px solid #000;
		padding:2px 2px;
		}
</style>
</head>
 
<body style="width:100%">
	<?php
		$data= new SQLServer;//tao lop ket noi SQL
		$params = array($_GET["id_benhannoitru"]);//tao param cho store 
		$store_name="{call Gd2_Giay_thu_phan_ung_thuoc_get_data(?)}";//tao bien khai bao store
		$get_danh_muc_phong_ban=$data->query( $store_name,$params);//Goi store
		$excute= new SQLServerResult($get_danh_muc_phong_ban);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
		$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 
		//print_r($tam);
		$data= new SQLServer;//tao lop ket noi SQL
		$params = array($_GET["id_luotkham"]);//tao param cho store 
		$store_name="{call GD2_Select_BenhanNoiTru2(?)}";	//214079 null  3907
		$get_danh_muc_phong_ban=$data->query( $store_name,$params);//Goi store
		$excute= new SQLServerResult($get_danh_muc_phong_ban);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
		$patient_info= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 
		//print_r($patient_info);
		
    ?>
    
    <table width="100%" style="font:Arial, Helvetica, sans-serif">
    	<tr>
        	<td width="32%">
            	<div style="text-transform:uppercase;font-weight:bold;font-size:12px"><?=$_SESSION["com"]["TenBenhVien"] ?></div>
            	<div><?=$patient_info[0]["TenPhongBan"] ?> </div>
            </td>
            <td width="36%" align="center">
            	<div>CỘNG HÒA XÃ HỘI CHỦ NGHĨA VIỆT NAM</div>
        		<div>Độc lập - Tự do - Hạnh phúc</div>
      		</td>
        	<td align="center" width="32%">Số vào viện: <?=$patient_info[0]["SoVaoVien"] ?></td>
        </tr>
    </table>
    <div style="width:100%;text-align:center;font-size:25px;font-weight:bold;margin-top:5px">GIẤY THỬ PHẢN ỨNG THUỐC</div>
    <table width="100%" style="margin-top:5px">
    <tr>
    	<td width="60%">
        	Họ tên người bệnh: <span  style="text-transform:uppercase"><b><?=$patient_info[0]["tenbenhnhan"] ?></b></span>
        </td>
        <td width="20%">
        	Tuổi: <?=$patient_info[0]["Tuoi"] ?>
        </td>
        <td width="20%">
        	Giới tính: <?=$patient_info[0]["Gioi"] ?>
        </td>
    </tr>
     <tr>
    	<td colspan="3">
        	Địa chỉ: <?=$patient_info[0]["diachibn"] ?>
        </td>
    </tr>
     <tr>
    	<td width="60%">
        	<?= $patient_info[0]["TenPhongBan"] ?>
        </td>
        <td width="20%">
        	Số buồng: <?=$patient_info[0]["TenBuong"] ?>
        </td>
        <td width="20%">
        	Giường: <?=$patient_info[0]["TenGiuong"] ?>
        </td>
    </tr>
    <tr>
    	<td colspan="3">
        	Chẩn đoán: <?=$patient_info[0]["CD_KhoaDieuTri"] ?>
        </td>
    </tr>
    </table>
    
    <table id="bang" cellpadding="0" cellspacing="0" border="0" width="97%">
    	<tr>
        	<th class="th">Bắt đầu thử Giờ/phút, Ngày,tháng</th>
            <th class="th">Tên thuốc, NSX, lô, số SX, hàm lượng, đơn vị</th>
            <th class="th">Phương pháp thử</th>
            <th class="th">Bác sĩ chỉ định<br />(ký, ghi rõ họ tên)</th>
            <th class="th">Người thử<br />(ký, ghi rõ họ tên)</th>
            <th class="th">Bác sĩ đọc và kiểm tra<br />(ký, ghi rõ họ tên)</th>
            <th class="th">Giờ phút đọc <br /> và kết quả</th>
        </tr>
        <?php
			$i=0;
		foreach($tam as $row){
			if($tam[$i]["GioPhutDoc"]!=''){$tam[$i]["GioPhutDoc"]=$tam[$i]["GioPhutDoc"]->format("H:i");}
			echo ('<tr>');
			echo('<td align="center" class="td">'.$tam[$i]["NgayGioBatDauThu"]->format("H:i"." ".$_SESSION["config_system"]["ngaythang"]).'</td>');
			echo('<td class="td">'.$tam[$i]["TenThuoc"].'</td>');
			echo('<td class="td" align="center">'.$tam[$i]["TenPhuongPhapThu"].'</td>');
			echo('<td class="td"></td>');
			echo('<td class="td"></td>');
			echo('<td class="td"></td>');
			echo('<td align="center" class="td">'.$tam[$i]["GioPhutDoc"]."<br />".$tam[$i]["KetQua"].'</td>');
			echo ('</tr>');
			$i++;
			}
       // <tr>
//        	
//            <td></td>
//            <td></td>
//            <td></td>
//            <td></td>
//            <td></td>
//            <td align="center"></td>
//        </tr>
		?>
       
    </table>
  
</body>
<script>
    	$(document).ready(function() {
			print_preview();
		});
</script>
</html>
 