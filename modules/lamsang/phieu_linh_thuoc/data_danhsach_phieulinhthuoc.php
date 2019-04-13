<?php
$data= new SQLServer;//tao lop ket noi SQL
$store_name="{call GD2_GetPhieuLinhThuoc_NoiTru(?,?,?)}";//tao bien khai bao store
$params = array($_GET['idkhoa'],convert_date($_GET['tungay'])." 00:00:00",convert_date($_GET['denngay'])." 23:59:59");
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
	
    $responce->rows[$i]['id']=$row['ID_PhieuLinhThuoc'];
    $responce->rows[$i]['cell']=array($row["SoPhieu"],
	$row["NickNameNguoiTao"],
	$row["NgaygioTao"],
	$row["NickNameNguoiLinh"],
	$row["NgayLinh"],
	$row["ID_PhongBan"],
	$row["TenPhongBan"],
	$row["LoaiDoiTuongKham"],
	$row["DaLinh"],
	$row["ThuocThongThuong"],
	$row["VatTuYTe"],
	$row["ThuocHuongThan"],
	$row["ChotPhieu"]
	);
    $i++; 
}   
echo json_encode($responce);
?>