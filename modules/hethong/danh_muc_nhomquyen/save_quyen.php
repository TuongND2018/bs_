<?php
//print_r($_POST);
$data= new SQLServer;
$params=array($_GET['id']);
$get=$data->query( "{call GD2_grouppermission_Del(?)}", $params);
foreach ($_POST['id'] as $row) { 	
			unset ($params1) ;
			$store_name1="{call GD2_Add_yes_grouppermission (?,?)}";
			$params1 = array($_GET['id'],$row['ID_Control']);
			$get1=$data->query( $store_name1, $params1);
}
?>