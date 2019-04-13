<?php

$data = new SQLServer;

//$ID_LuotKham = $_GET["ID_LuotKham"];


	$store_name = "{call GD2_thanhtoannoitru_donthuocchitiet(?)}";
	$params = array($_GET["ID_DonThuoc"]);

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
		if(isset($row["NgayHetHan"])){
			$NgayHetHan=$row['NgayHetHan']->format($_SESSION["config_system"]["ngaythang"]);
		}
		
		
    $responce->rows[$i]['id'] = $row["ID_DonThuocCT"];
    $responce->rows[$i]['cell'] = array(      
        $row["TenGoc"],
        $row["TenDonViTinh"],
        $row["Gia"],
        $row["SoThuocDeNghiTheoDon"],
        $row["SoThuocThucXuat"]-$row["SoLuongTraLai"],
        $row["Gia"]*($row["SoThuocThucXuat"]-$row["SoLuongTraLai"]),  
		($row["GiaCungChiTra"])*($row["SoThuocThucXuat"]-$row["SoLuongTraLai"]),  		
    );

    $i++;
}
echo json_encode($responce);
?>