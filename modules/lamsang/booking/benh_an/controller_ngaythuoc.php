<?php

$data= new SQLServer;

print_r($_POST);

if(isset($_POST['SoNgayThuoc'])){
$store_name="{call Gd2_donthuoc_upd(?,?)}";	
$params    = array ($_POST['id_donthuoc'],$_POST['SoNgayThuoc']);
$upd=$data->query( $store_name, $params);
}
else{
$store_name="{call Gd2_kham_upd_loaikham(?,?)}";	
$params    = array ($_POST['id'],$_POST['ID_LoaiKham']);
$upd=$data->query( $store_name, $params);	
}
?>
