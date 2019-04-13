<?php

$data= new SQLServer;
$store_name="{call GD2_GetID_NhapKhoTiepTheo ()}";
$params = array();
$get_lich=$data->query( $store_name, $params);
$excute= new SQLServerResult($get_lich);
$tam= $excute->get_as_array();

echo $tam[0]['NhapKhoTiepTheo'];
?>