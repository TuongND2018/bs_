<?php

$data= new SQLServer;


$store_name="{call GD2_tiensubenh_upd_(?,?,?,?,?,?)}";	

$params    = array ($_POST['ID_TienSuBenh'],
					$_POST['ID_BenhNhan'],
					$_POST['TienSu'],
					$_POST['TienSuNguoiThan'],
					$_POST['DiUng'],
					$_SESSION['user']['id_user']);
$del=$data->query( $store_name, $params);

$store_name1="{call GD2_donthuoc_upd_ghichu(?,?,?)}";
$params1    = array ($_POST['ghichu'],$_POST['ID_Donthuoc'],$_SESSION['user']['id_user']);
//print_r($params1);
$tam=$data->query( $store_name1, $params1);
?>
