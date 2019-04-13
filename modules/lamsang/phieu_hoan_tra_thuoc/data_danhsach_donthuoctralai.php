<?php
$data= new SQLServer;//tao lop ket noi SQL
$store_name="{call GD2_GetDonThuocTraLaiBenhAnNoiTru_New(?)}";//tao bien khai bao store
$params = array($_GET['idkhoa']);
$get=$data->query( $store_name,$params);//Goi store
$excute= new SQLServerResult($get);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 
$responce = new stdClass;
$i=0;
foreach ($tam as $row) {//duyet toan bo mang tra ve
	if($row["NgayGioTao"]!='')
			$row["NgayGioTao"]=$row["NgayGioTao"]->format($_SESSION["config_system"]["ngaythang"]);
	else $row["NgayGioTao"]='';
	
    $responce->rows[$i]['id']=$row['ID_DonThuocTraLai'];
    $responce->rows[$i]['cell']=array($row["ID_DonThuocTraLai"],
	$row["NgayGioTao"],
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