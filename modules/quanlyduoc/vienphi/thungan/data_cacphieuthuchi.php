<?php
//echo $_GET['id_tang'];
$data= new SQLServer;
$store_name="{call GD2_Thu_TraNo_SelectAllTuNgayDenNgay (?,?)}";
$params = array($_GET['tungay'],$_GET['denngay']);
$get_lich=$data->query( $store_name, $params);
$excute= new SQLServerResult($get_lich);
$tam= $excute->get_as_array();
$responce = new stdClass;
$i=0;
//print_r($tam);
foreach ($tam as $row) {

    $responce->rows[$i]['id']=$row["ID_ThuTraNo"];
    $responce->rows[$i]['cell']=array(
        $row["MaPhieu"],
        $row["NgayGio"]->format("H:i ".$_SESSION["config_system"]["ngaythang"]),
        $row["MaBenhNhan"],
        $row["HoLotBenhNhan"],
        $row["TenBenhNhan"],
        $row["GhiChu"],
        $row["TenNhanVien"],
        $row["TienThuVao"],
        $row["TienChiRa"],
		$row["ID_BenhNhan"],
		$row["LoaiThanhToan"],
        
            );
     
    $i++; 
}  
echo json_encode($responce);
?>