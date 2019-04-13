<?php
$data= new SQLServer;
$store_name="{call Gd2_demsophieu_getby_machucnang (?)}";
$params = array('FormatSoPhieuChiDuoc');
$get_lich=$data->query( $store_name, $params);
$excute= new SQLServerResult($get_lich);
$tam= $excute->get_as_array();

echo $tam[0][0];
?>