<?php
$tungay= convert_date($_GET['tungay'])." 00:00:00";
$denngay= convert_date($_GET['denngay'])." 23:59:59";
$data= new SQLServer;//tao lop ket noi SQL
$store_name="{call GD2_CapThuocBenhNhan_DaLinh(?,?)}";//tao bien khai bao store
$params = array($tungay,$denngay);
//print_r($params);
$get=$data->query( $store_name,$params);//Goi store
$excute= new SQLServerResult($get);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 
$responce = new stdClass;
$i=0;
foreach ($tam as $row) {//duyet toan bo mang tra ve
	if($row["NgayLinh"]!='')
			$row["NgayLinh"]=$row["NgayLinh"]->format($_SESSION["config_system"]["ngaythang"]);
	else $row["NgayLinh"]='';
	if($row["NgaygioTao"]!='')
			$row["NgaygioTao"]=$row["NgaygioTao"]->format("H:i ".$_SESSION["config_system"]["ngaythang"]);
	else $row["NgaygioTao"]='';
	if($row["NgayXuat"]!='')
			$row["NgayXuat"]=$row["NgayXuat"]->format("H:i ".$_SESSION["config_system"]["ngaythang"]);
	else $row["NgayXuat"]='';
	
    $responce->rows[$i]['id']=$row['ID_PhieuLinhThuoc'];
    $responce->rows[$i]['cell']=array($row["TenPhongBan"],
	$row["HoTenNguoiTao"],
	$row["NgaygioTao"],
	$row["HoTenNguoilinh"],
	$row["NgayLinh"],
	$row["NgayXuat"],
	$row["TenNhom"],
	$row["LoaiDoiTuongKham"],
	$row["SoPhieu"],
	$row["Id_NhomphanLoaiThuoc"],
	1,
	$row["ThuocThongThuong"],
	$row["VatTuYTe"],
	$row["ThuocHuongThan"]
	);
    $i++; 
}   
echo json_encode($responce);
?>