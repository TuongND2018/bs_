<?php
$tungay= convert_date($_GET['tungay'])." 00:00:00";
$denngay= convert_date($_GET['denngay'])." 23:59:59";
$data= new SQLServer;//tao lop ket noi SQL
$store_name="{call GD2_TraThuocBenhNhan_DaTra(?,?)}";//tao bien khai bao store
$params = array($tungay,$denngay);
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
	if($row["NgayNhan"]!='')
		$row["NgayNhan"]=$row["NgayNhan"]->format("H:i ".$_SESSION["config_system"]["ngaythang"]);
	else $row["NgayNhan"]='';
	
    $responce->rows[$i]['id']=$row['ID_PhieuTraThuoc'];
    $responce->rows[$i]['cell']=array(	$row["SoPhieu"],
	$row["TenPhongBan"],
	$row["HoTenNguoiTao"],
	$row["NgaygioTao"],
	$row["HoTenNguoiTra"],
	$row["NgayTra"],
	$row["NgayNhan"],
	$row["TenNhom"],
	$row["LoaiDoiTuongKham"],
	$row["Id_NhomphanLoaiThuoc"],
	1
	);
    $i++; 
}   
echo json_encode($responce);
?>