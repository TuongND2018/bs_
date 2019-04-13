<?php

$data = new SQLServer;

//$ID_LuotKham = $_GET["ID_LuotKham"];

if(isset($_GET["ID_LuotKham"])){
	$store_name = "{call GD2_DonThuocChiTiet_SelectDonThuocChiTietByID_luotkham(?)}";
	$params = array($_GET["ID_LuotKham"]);
}else{
	$store_name = "{call GD2_donthuoc_SelectByID_ThuTraNo (?)}";
	$params = array($_GET["ID_ThuTraNo"]);	
}
//spDonThuocChiTiet_SelectDonThuocChiTietByID_DonThuoc 242094
/*$store_name = "{call GD2_DonThuocChiTiet_SelectDonThuocChiTietByID_DonThuoc (?)}";
$params = array($_GET["ID_LuotKham"]);*/
$get_lich = $data->query($store_name, $params);
$excute = new SQLServerResult($get_lich);
$tam = $excute->get_as_array();
$responce = new stdClass;
$i = 0;

foreach ($tam as $row) {
	$SoLoNhaSanXuat='';
	$NgayHetHan='';
	$SoLuong='';
	$SoLuongXuatTam=0;
		if(isset($row["SoLoNhaSanXuat"])){
			$SoLoNhaSanXuat=$row['SoLoNhaSanXuat'];
		}
		if(isset($row["NgayHetHan"])){
			$NgayHetHan=$row['NgayHetHan']->format($_SESSION["config_system"]["ngaythang"]);
		}
		if(isset($row["SoLuong"])){
			$SoLuong=$row['SoLuong'];
		}
		if(isset($row["SoLuongXuatTam"])){
			$SoLuongXuatTam=$row['SoLuongXuatTam'];
		}
		
    $responce->rows[$i]['id'] = $row["ID_Thuoc"];
    $responce->rows[$i]['cell'] = array( 
        $row["ID_DonThuocCT"],
        $row["TenThuoc"],
        $row["TenDonViTinh"],
        $row["Gia"],
        $row["SoThuocDeNghiTheoDon"],
        $row["SoThuocThucXuat"],
        $row["Gia"]*$row["SoThuocThucXuat"],  
		$row["giavon"]*$row["SoThuocThucXuat"],  
		$row["ID_Thuoc"],  
		$SoLuong,
		$SoLuongXuatTam
		
    );

    $i++;
}
echo json_encode($responce);
?>