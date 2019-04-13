<?php
$data= new SQLServer;//tao lop ket noi SQL

$ngaybd=$_GET["from_day"];
$ngaykt=$_GET["to_day"]; //04/30/2014  //1/4/14
$ngaybatdau= convert_date($ngaybd);
$ngayketthuc= convert_date($ngaykt);
$store_name="{call GD2_RPT_TONGHOP_XUATNHAP_TON(?,?,?,?,?)}";//tao bien khai bao store
$params = array($ngaybatdau,$ngayketthuc,$_GET["tenkho"],'',$_GET["n_order"]);
//print_r($params);
//$params = array($ngaybatdau,$ngayketthuc,$_GET["tenkho"],'',$_GET["n_order"]);
$get=$data->query( $store_name,$params);//Goi store
$excute= new SQLServerResult($get);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 
$responce = new stdClass;
$i=0;
foreach ($tam as $row) {//duyet toan bo mang tra ve
if($row["NgayHetHan"]!=''){
	$row["NgayHetHan"]=$row["NgayHetHan"]->format($_SESSION["config_system"]["ngaythang"]);
}
    $responce->rows[$i]['id']=$i;
    $responce->rows[$i]['cell']=array($row["MaThuoc"],
	$row["TenBietDuoc"],
	$row["TenDonViTinh"],
	$row["SoLo"],
	$row["SoLoNhaSanXuat"],
	$row["DonGia"],
	$row["GiaBan"],
	$row["SL_TD"],
	$row["TT_TD"],
	$row["SL_N"],
	$row["TT_N"],
	$row["SL_X"],
	$row["TT_X"],
	$row["SL_TON"],
	$row["TT_TON"],
	$row["NgayHetHan"],
	$row["ID_NCC"],
	$row["TenNCC"],
	$row["STT_UUTIEN"],
	'');
    $i++; 
}   
echo json_encode($responce);
?>