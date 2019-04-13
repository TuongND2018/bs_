<?php
	$data= new SQLServer;//tao lop ket noi SQL
	$params=  array($_GET['idbenhannoitru'],$_GET['idloaibenhban'],$_SESSION["user"]["id_user"]);
	$store_name="{call GD2_UpdateID_LoaiBenhAnNoiTruOFGD2_BenhAnNoiTru(?,?,?)}";//tao bien khai bao store
	$check=$data->query( $store_name, $params);
	echo $check;
?>