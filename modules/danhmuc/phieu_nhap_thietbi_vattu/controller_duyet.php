<?php
$data= new SQLServer;//tao lop ket noi SQL
$begin_tran=$data->begin_tran();
	$params=array(
		$_GET['id'],	
		$_GET["oper"],
		$_SESSION["user"]["id_user"]
	);
	
	$store_name="{call GD2_PhieuNhapTB_VT_Duyet (?,?,?)}";//tao bien khai bao store
	$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store	
	if( !$get_danh_muc_phong_ban ){
		$data->rollback();
		return;
	}

$data->commit();
?>

