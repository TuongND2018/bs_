<?php
$data= new SQLServer;//tao lop ket noi SQL
$params = array ($_GET['id_phieu'],$_SESSION['user']['id_user']);
$store_name="{call GD2_HuyChotPhieuLinhThuocNoiTru(?,?)}";
$data->query( $store_name, $params);

?>