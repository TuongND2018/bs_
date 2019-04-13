<?php

$data= new SQLServer;
//print_r($_GET);

$store_name="{call GD2_isbasching_upd(?,?,?)}";	
$params    = array ($_GET['id_luotkham'],$_GET['id_kham'],$_GET["id_donthuoc"]);

$upd=$data->query( $store_name, $params);


?>
