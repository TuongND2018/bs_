<?php
//print_r($_GET);
	$data= new SQLServer;//tao lop ket noi SQL -------"Y-m-d H:i"
	$param1=$_GET["ID_LuotKham"];
	$params = array($param1);//tao param cho store 
	//print_r($params);
	$store_name="{call GD2_DS_Huy_XepHang_ReQueue(?)}";//tao bien khai bao store
	$data->query( $store_name,$params);//Goi store
?>

