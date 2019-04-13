<?php
//echo $_GET['id_tang'];
$data= new SQLServer;
$store_name="{call GD2_get_donthuoctralai (?,?,?)}";
$params = array($_GET['tungay'],$_GET['denngay'],null);
$get_lich=$data->query( $store_name, $params);
$excute= new SQLServerResult($get_lich);
$tam= $excute->get_as_array();
$responce = new stdClass;
$i=0;
foreach ($tam as $row) {

    $responce->rows[$i]['id']=$row["ID_NhapKho"];
    $responce->rows[$i]['cell']=array(
        $row["MaPhieu"],
        $row["NgayLapPhieu"]->format("H:i ".$_SESSION["config_system"]["ngaythang"]),
        '',
        $row["MaBenhNhan"],
        $row["HoLotBenhNhan"],
        $row["TenBenhNhan"],
        $row["GhiChu"],
        $row["TenNhanVien"],
        $row["TienThuVao"],
        $row["TienChiRa"],
        
            );
     
    $i++; 
}  
echo json_encode($responce);
?>