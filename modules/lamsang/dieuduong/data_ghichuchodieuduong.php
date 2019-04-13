<?php
$data= new SQLServer;//tao lop ket noi SQL
$params = array($_GET["id_donthuoc"]);//tao param cho store 
$store_name="{call GD2_DonThuocSelectGhiChuDieuDuongByID_DonThuoc(?)}";//tao bien khai bao store
$get=$data->query( $store_name,$params);//Goi store
$excute= new SQLServerResult($get);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 

		$responce=$tam[0]["GhiChuChoDieuDuong"];
echo $responce;
?>
