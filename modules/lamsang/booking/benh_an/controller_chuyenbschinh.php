<?php

$data= new SQLServer;


$store_name="{call GD2_isbasching_upd(?,?,?)}";	
$params    = array ($_GET['id_luotkham'],$_GET['id_kham'],$_SESSION["user"]["id_user"]);

$upd=$data->query( $store_name, $params);


?>
