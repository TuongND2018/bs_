<?php

$data= new SQLServer;
$store_name="{call GD2_DSChiTietToaThuocTralaiByID_NhapKho (?)}";
//$params = array( $tu_ngay,$den_ngay,"HuyBo","Cancel");
$params = array($_GET['idnhapkho']);
//print_r($params);
$get_lich=$data->query( $store_name, $params);
$excute= new SQLServerResult($get_lich);
$tam= $excute->get_as_array();
$responce = new stdClass;

$i=0;
foreach ($tam as $row) {
    $responce->rows[$i]['id']=$row["ID_Thuoc"];
    $responce->rows[$i]['cell']=array($row["TenBietDuoc"],
        $row["TenDonViTinh"],
        $row["SoLuongXuat"],
        $row["DonGia"],
		$row["ThanhTien"],
		$row["SoluongTraLai"],
		$row["DonGiaVon"],
		'',
		$row["DonGiaTraLai"],
		$row["ThanhTienTraLai"],
        );
     
    $i++; 
}  
echo json_encode($responce);
?>