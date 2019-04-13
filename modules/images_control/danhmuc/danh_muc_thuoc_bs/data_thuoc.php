<?php
$data= new SQLServer;//tao lop ket noi SQL
$store_name="{call Gd2_dm_Thuoc_new()}";//tao bien khai bao store
$params = array();//tao param cho store 	
$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store
$excute= new SQLServerResult($get_danh_muc_phong_ban);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 
global $responce;

$i=0;
foreach ($tam as $row) {
  $responce[] = array( 
  'id'               => $row["ID_Thuoc"], 
  'TenBietDuoc' 	 => $row["TenBietDuoc"], 
  'TenGoc'      	 => $row["TenGoc"], 
  'HoatChatChinh'    => $row["HoatChatChinh"],
  'HamLuong'  		 => $row["HamLuong"],

  'QuyCach'    		 => $row["QuyCach"],

  'TenNhomThuoc'     => $row["TenNhomThuoc"],	
	);
  
    $i++; 
}   
echo json_encode($responce);
?>