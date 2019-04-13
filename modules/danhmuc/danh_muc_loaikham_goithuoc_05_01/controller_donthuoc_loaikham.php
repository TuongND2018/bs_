<?php
$data= new SQLServer;//tao lop ket noi SQL
if(isset($_POST['id'])){ 
	foreach ($_POST['id'] as $key => $value) {
		if(($value['luu']==0) && ($value['events']==1)){
			unset($store_name3);
			$check3='';
			$store_name3="{call GD2_LoaiKham_DonThuoc_VTYH_Insert(?,?,?,?)}";
			$params3 = array ($value['ID_LoaiKham'],
					$_GET['iddonthuoc'],
					$_SESSION["user"]["id_user"],
					array($check3, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT)
			);
			$data->query( $store_name3, $params3);
		}
		if(($value['luu']==2) && ($value['events']==0)){
			$params = array ($value['ID_Auto'],$_SESSION["user"]["id_user"]);
			$store_name="{call GD2_LoaiKham_DonThuoc_VTTH_Del_New(?,?)}";
			$del=$data->query( $store_name, $params);
		}
	}
}
?>

