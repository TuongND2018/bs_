<?php
$data= new SQLServer;//tao lop ket noi SQL
$check1="";
foreach ($_POST['id'] as $key => $value) {
	$tam=explode(' ',$value['NgayGioDo']);
	$gio=$tam[0];
	$ngay=$tam[1];
	$ngaygio=convert_date($ngay).' '.$gio;
	if($value['Luu']==1){
		$store_name="{call GD2_SoTheoDoiNhietDo_Insert (?,?,?,?,?,?,?,?)}";//tao bien khai bao store 
		$params = array($ngaygio,$value['NhietDo'],$value['DoAm'],$_SESSION['user']['id_user'],$value['GhiChu'],$ngay,$_SESSION['user']['id_user'],array($check1, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT) );
		$get=$data->query( $store_name, $params);
	}else if($value['Sua']==2){
		$store_name2="{call GD2_SoTheoDoiNhietDo_Update (?,?,?,?,?,?,?,?)}";//tao bien khai bao store 
		$params2 = array($value['ID_TheoDoiNhietDo'],$ngaygio,$value['NhietDo'],$value['DoAm'],$_SESSION['user']['id_user'],$value['GhiChu'],$ngay,$_SESSION['user']['id_user']);
		$get2=$data->query( $store_name2, $params2);
		}
	}	
if($_GET['xoa']){
	$x=explode('_',$_GET['xoa']);
	for ($i=0;$i<count($x);$i++){
		$store_name3="{call GD2_SoTheoDoiNhietDo_Delete (?,?)}";//tao bien khai bao store 
		$params3 = array($x[$i],$_SESSION['user']['id_user']);
		$data->query( $store_name3, $params3);
	}
}