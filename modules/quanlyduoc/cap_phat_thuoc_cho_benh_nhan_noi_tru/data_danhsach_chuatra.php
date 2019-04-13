<?php
$data= new SQLServer;//tao lop ket noi SQL
$store_name="{call GD2_HoanTraBenhNhan_ChuaTra()}";//tao bien khai bao store
$params = array();
$get=$data->query( $store_name,$params);//Goi store
$excute= new SQLServerResult($get);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 
$responce = new stdClass;
$i=0;
foreach ($tam as $row) {//duyet toan bo mang tra ve
	if($row["NgayTra"]!='')
			$row["NgayTra"]=$row["NgayTra"]->format($_SESSION["config_system"]["ngaythang"]);
	else $row["NgayTra"]='';
	if($row["NgaygioTao"]!='')
			$row["NgaygioTao"]=$row["NgaygioTao"]->format("H:i ".$_SESSION["config_system"]["ngaythang"]);
	else $row["NgaygioTao"]='';
    $responce->rows[$i]['id']=$row['ID_PhieuTraThuoc'];
    $responce->rows[$i]['cell']=array($row["SoPhieu"],
	$row["TenPhongBan"],
	$row["HoTenNguoiTao"],
	$row["NgaygioTao"],
	$row["HoTenNguoiTra"],
	$row["NgayTra"],
	'',
	$row["TenNhom"],
	$row["LoaiDoiTuongKham"],
	$row["Id_NhomphanLoaiThuoc"],
	0
	);
    $i++; 
}   
echo json_encode($responce);
?>