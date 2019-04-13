<?php
$data= new SQLServer;//tao lop ket noi SQL
$store_name="{call GD2_GetDonThuocBenhAnNoiTru(?)}";//tao bien khai bao store
$params = array($_SESSION["user"]["id_phongban"]);
$get=$data->query( $store_name,$params);//Goi store
$excute= new SQLServerResult($get);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 
$responce = new stdClass;
$i=0;
foreach ($tam as $row) {//duyet toan bo mang tra ve
	if($row["NgayKeDon"]!='')
			$row["NgayKeDon"]=$row["NgayKeDon"]->format($_SESSION["config_system"]["ngaythang"]);
	else $row["NgayKeDon"]='';
	
    $responce->rows[$i]['id']=$row['ID_DonThuoc'];
    $responce->rows[$i]['cell']=array($row["ID_DonThuoc"],
	$row["NgayKeDon"],
	$row["HoTenBenhNhan"],
	$row["Tuoi"],
	$row["DiaChi"],
	$row["TenBuong"],
	$row["TenGiuong"]
	);
    $i++; 
}   
echo json_encode($responce);
?>