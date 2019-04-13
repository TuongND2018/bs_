<?php

$data= new SQLServer;
$store_name="{call GD2_GetPhieuXuatChiTietByBSChophepTraLaiAndID_XuatKho (?)}";
//$params = array( $tu_ngay,$den_ngay,"HuyBo","Cancel");
$params = array($_GET['idxuatkho']);
//print_r($params);
$get_lich=$data->query( $store_name, $params);
$excute= new SQLServerResult($get_lich);
$tam= $excute->get_as_array();
$responce = new stdClass;

$i=0;
foreach ($tam as $row) {
    $responce->rows[$i]['id']=$row["ID_XuatKhoChiTiet"];
    $responce->rows[$i]['cell']=array($row["TenBietDuoc"],
		$row["SoLo"],
		$row["DonGia"],
        $row["SoLuong"],
        $row["SoLuongTraLai"],
		$row["GhiChu"]
        );
     
    $i++; 
}  
echo json_encode($responce);
?>