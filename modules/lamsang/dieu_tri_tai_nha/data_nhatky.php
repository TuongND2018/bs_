<?php

$store_name="{call GD2_NhatKyDieuTriTaiNha_SelectAllByID_Kham(?)}";//tao bien khai bao store
$data= new SQLServer;//tao lop ket noi SQL
$params = array(($_GET['ID_Kham']));//tao param cho store 

$get_danh_muc_phong_ban=$data->query( $store_name,$params);//Goi store
$excute= new SQLServerResult($get_danh_muc_phong_ban);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 
//print_r($tam);
$responce = new stdClass;
$i=0;
foreach ($tam as $row) {//duyet toan bo mang tra ve
if($row["NgayGioKham"]!='')
			$row["NgayGioKham"]=$row["NgayGioKham"]->format("H:i ".$_SESSION["config_system"]["ngaythang"]);
	else $row["NgayGioKham"]='';

    $responce->rows[$i]['id']=$row["ID_NhatKyDieuTriTaiNha"];
    $responce->rows[$i]['cell']=array($row["ID_NhatKyDieuTriTaiNha"],$row["NgayGioKham"],$row["NickName"],$row["GhiChu"]);
    $i++; 
}
echo json_encode($responce);
?>
