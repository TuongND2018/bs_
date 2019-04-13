<?php

$data = new SQLServer;

//$ID_LuotKham = $_GET["ID_LuotKham"];


	$store_name = "{call GD2_thanhtoannoitru_donthuocchitiet(?)}";
	$params = array($_GET["ID_DonThuoc"]);


$get_lich = $data->query($store_name, $params);
$excute = new SQLServerResult($get_lich);
$tam = $excute->get_as_array();
$responce = new stdClass;
$i = 0;

foreach ($tam as $row) {		
    $responce->rows[$i]['id'] = $row["ID_Thuoc"];
    $responce->rows[$i]['cell'] = array(       
        $row["TenGoc"],
        $row["TenDonViTinh"],
        $row["Gia"],
        $row["SoThuocDeNghiTheoDon"]-$row["SoLuongTraLai"],
        $row["SoThuocThucXuat"]-$row["SoLuongTraLai"],
        $row["Gia"]*($row["SoThuocThucXuat"]-$row["SoLuongTraLai"]),  
		$row["DonGiaVon"]*($row["SoThuocThucXuat"]-$row["SoLuongTraLai"]),  		
    );

    $i++;
}
echo json_encode($responce);
?>