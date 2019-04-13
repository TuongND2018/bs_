<?php
$data= new SQLServer;//tao lop ket noi SQL
$store_name="{call GD2_LoaiKham_DonThuoc_VTTH_Del(?,?)}";//tao bien khai bao store
$params = array( 
			 array($_GET["id_loaikham"]),
			 array($_SESSION["user"]["id_user"]),
			 );	
$data->query( $store_name, $params);//Goi store	

?>

