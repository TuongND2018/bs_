<?php

$data= new SQLServer;


$store_name="{call GD2_tiensubenh_upd_(?,?,?,?,?,?)}";	

$params    = array ($_POST['ID_TienSuBenh'],
					$_POST['ID_BenhNhan'],
					$_POST['TienSu'],
					$_POST['TienSuNguoiThan'],
					$_POST['DiUng'],
					$_SESSION['user']['id_user']);
					
					if($_POST['thaydoi_tiensu']==1){
						$del=$data->query( $store_name, $params);
					}
//print_r($params);
$store_name1="{call GD2_donthuoc_upd_ghichu(?,?,?)}";
$params1    = array ($_POST['ghichu'],$_POST['ID_Donthuoc'],$_SESSION['user']['id_user']);

$tam=$data->query( $store_name1, $params1);


if($_POST['ngaytaikham']==''){
		$_POST['ngaytaikham']=null;
	}else{
		$_POST['ngaytaikham']=convert_date($_POST['ngaytaikham']);
	}
	//print_r($_POST);
$store_name2="{call GD2_thongtinluotkham_upd_ngayhentaikham(?,?,?,?)}";
$params2    = array ($_POST['ID_LuotKham'],$_POST['ngaytaikham'],$_POST['noidungtaikham'],$_SESSION['user']['id_user']);

$tam=$data->query( $store_name2, $params2);




$store_name3="{call GD2_kham_danhgia_upd(?,?,?,?,?,?)}";	
$params3    = array ($_POST['ID_LuotKham'],1,1,1,$_POST['ID_Kham'],$_POST['ID_Donthuoc']);

$upd3=$data->query( $store_name3, $params3);
?>
