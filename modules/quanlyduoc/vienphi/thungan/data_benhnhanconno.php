<?php
//echo $_GET['id_tang'];
$data= new SQLServer;
$store_name="{call GD2_ThanhToanTong_CongNoTuNgayDenNgayNhieuBN(?)}";
$params = array($_GET['denngay']);
$get_lich=$data->query( $store_name, $params);
$excute= new SQLServerResult($get_lich);
$tam= $excute->get_as_array();
$responce = new stdClass;
$i=0;
foreach ($tam as $row) {

    $responce->rows[$i]['id']=$row["MaBenhNhan"];
    $responce->rows[$i]['cell']=array(
        $row["MaBenhNhan"],
        $row["TenBenhNhan"],
        $row["DiaChi"],
        $row["DienThoai1"],
        $row["NoCuoiKy"],
        $row["ID_BenhNhan"],
            );
     
    $i++; 
}  
echo json_encode($responce);
?>