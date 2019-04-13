<?php
	if($_GET['trangthai']=='DangCho'){
		$data= new SQLServer;
		$store_name="{call spKham_UpdateTrangThai(?,?)}";
		$params = array($_GET['id_kham'],"DangCho");
		//print_r($params);
		$data->query( $store_name, $params);
	}

	if($_GET['trangthai']=='DangKham'){
		$data= new SQLServer;
		$store_name="{call spKham_UpdateTrangThai(?,?)}";
		$params = array($_GET['id_kham'],"DangKham");
		//print_r($params);
		$data->query( $store_name, $params);
	}
?>