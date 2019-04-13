<?php

$data = new SQLServer;


	
		$store_name = "{call GD2_chitietdichvunoitru_tamung (?)}";
		$params = array($_GET["ID_LuotKham"]);



$get_lich = $data->query($store_name, $params);
//print_r($params);
$excute = new SQLServerResult($get_lich);
$tam = $excute->get_as_array();
$responce = new stdClass;
$i = 0;
foreach ($tam as $row) {
if($row["NgayGioTao"]!=''){
	$row["NgayGioTao"]= $row["NgayGioTao"]->format("H:i " . $_SESSION["config_system"]["ngaythang"]);
}
    $responce->rows[$i]['id'] = $i;
    $responce->rows[$i]['cell'] = array(
       // $row["ID_LoaiKham"],
        $row["ID_Kham"],
       // $row["ID_LuotKham"],
       // $row["MaBenhNhan"],
       // $row["TenBenhNhan"],
        $row["NgayGioTao"],
        $row["TenLoaiKham"],
      //  $row["TenTrangThaiCLSCuaBenhNhan"],
        $row["PhiThucHien"],
        $row["TenNhom"],
        $row["GiaThueNgoaiThucHien"],
      //  $row["GiamGia"],
      //  $row["TongPhuThu"]
    );

    $i++;
}
echo json_encode($responce);
?>