<?php

$data= new SQLServer;
$id_return='';
 //$_POST['ngaycap']=convert_date($_POST['ngaycap']);	
 $_POST['hsdtu']=convert_date($_POST['hsdtu']);	
 $_POST['hsdden']=convert_date($_POST['hsdden']);	
if($_GET['oper']=='add'){
	$params = array($_POST['mabh'],$_POST['noidkbd'],$_POST['diachibh'],$_POST['hsdtu'],$_POST['hsdden'],null,$_GET['id_benhnhan']
	
	,array($id_return, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT)
	);
	
	$get=$data->query( "{call GD2_BHYT_insert(?,?,?,?,?,?,?,?)}", $params);//Goi store
	echo ';'.$id_return;
}else{

	$params = array($_POST['idbh'],$_POST['mabh'],$_POST['noidkbd'],$_POST['diachibh'],$_POST['hsdtu'],$_POST['hsdden'],null,$_GET['id_benhnhan']);

	$get=$data->query( "{call GD2_bhyt_upd(?,?,?,?,?,?,?,?)}", $params);//Goi store
	
}

 
?>

