<?php
$data= new SQLServer;//tao lop ket noi SQL 
 
if($_GET['ac']==1){// la bao hiem
	$store_name="{call GD2_Kham_FixGiaBHYT_New (?,?,?,?)}";//tao bien khai bao store
	$params = array($_GET['id_kham'],
					1,
					1,
					$_SESSION['user']['id_user']
					);
	$get=$data->query( $store_name, $params);
}else{// la vien phi
	$store_name="{call GD2_Kham_FixGiaBHYT_New (?,?,?,?)}";//tao bien khai bao store
	$params = array($_GET['id_kham'],
					1,
					2,
					$_SESSION['user']['id_user']
					);
	$get=$data->query( $store_name, $params);
}
	$store_name="{call GD2_GetTienBHKhamByID_Kham(?)}";//tao bien khai bao store
	$params = array($_GET['id_kham']);
	$get_danh_muc=$data->query( $store_name, $params);//Goi store
	$excute= new SQLServerResult($get_danh_muc);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
	$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 
	echo ";;".$tam[0]['PhiThucHien'].";;".$tam[0]['PhanTramCungChiTra'].";;".$tam[0]['ThanhTienCungChiTra'].";;".$tam[0]['ThanhTienBaoHiem'].";;".$tam[0]['Isbhyt'].";;";
?>