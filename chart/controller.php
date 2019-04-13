<?php

include("class.sqlserver.php");


if (isset($_GET["id_benhnhan"])){
	$mabenhnhan=$_GET["id_benhnhan"];
}else{
	$mabenhnhan="";	
}

$data= new SQLServer;//tao lop ket noi SQL
	//echo "{call $store $available}";
	
	$store_name="{call GD2_GET_AUTOCOMPLETETEXTBOX (?,?,?,?)}";//tao bien khai bao store	
	$params = array("DM_BenhNhan","gioitinh","mabenhnhan",$mabenhnhan);
	//print_r($params); 	 
	$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store
	$excute= new SQLServerResult($get_danh_muc_phong_ban);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
	$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 
	$tam[0]['gioitinh']

?>
