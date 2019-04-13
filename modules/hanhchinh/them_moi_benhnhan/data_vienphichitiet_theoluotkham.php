<?php

$data = new SQLServer;


if(isset($_GET["ID_LuotKham"])){
		$store_name = "{call GD2_chitietdichvunoitru_thanhtoan_Kha (?)}";
		$params = array($_GET["ID_LuotKham"]);
}/*else{
		$store_name = "{call GD2_vienphichitiet_byID_ThuTraNo (?)}";
		$params = array($_GET["ID_ThuTraNo"]);
}*/


$get_lich = $data->query($store_name, $params);
//print_r($params);
$excute = new SQLServerResult($get_lich);
$tam = $excute->get_as_array();
$responce = new stdClass;
$i = 0;
foreach ($tam as $row) {

    //$responce->rows[$i]['id'] = $row["id"];
    $responce->rows[$i]['cell'] = array(
        $row["ID_LoaiKham"],
        $row["ID_Kham"],
        $row["NgayGioTao"]->format("H:i " . $_SESSION["config_system"]["ngaythang"]),
        $row["TenLoaiKham"],
		$row["solan"],
		$row["songay"],
        $row["PhiThucHien"],
        $row["TenNhom"],
        $row["GiaThueNgoaiThucHien"],
		$row["ExtField1"],
		$row["id"],
		$row["IsVienPhiChinhThuc"],
		$row["nhomcha"],$row["BHCCTra"],
        $row["Isbhcc"],
    );

    $i++;
}
echo json_encode($responce);
?>