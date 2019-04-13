<?php
$data= new SQLServer;//tao lop ket noi SQL 
 if($_GET['nhom']==25){ // Phys
	 if($_GET['ac']==1){// la bao hiem
		$store_name="{call GD2_Kham_FixGiaBHYT2015 (?,?,?,?)}";//tao bien khai bao store
		$params = array($_GET['id'],
						2,
						1,
						$_SESSION['user']['id_user']
						);
		$get=$data->query( $store_name, $params);
	}else{// la vien phi
		$store_name="{call GD2_Kham_FixGiaBHYT2015 (?,?,?,?)}";//tao bien khai bao store
		$params = array($_GET['id'],
						2,
						2,
						$_SESSION['user']['id_user']
						);
		$get=$data->query( $store_name, $params);
	}
	$store_name="{call GD2_GetTienBHPhysiotherapyByID_Phy(?)}";//tao bien khai bao store
	$params = array($_GET['id']);
	$get_danh_muc=$data->query( $store_name, $params);//Goi store
	$excute= new SQLServerResult($get_danh_muc);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
	$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 
	echo ";;".$tam[0]['PhiThucHien'].";;".$tam[0]['PhanTramCungChiTra'].";;".$tam[0]['ThanhTienCungChiTra'].";;".$tam[0]['ThanhTienBaoHiem'].";;".$tam[0]['Isbhyt'].";;";
 }elseif($_GET['nhom']==26){// DieuTriPhoihop
	 if($_GET['ac']==1){// la bao hiem
		$store_name="{call GD2_Kham_FixGiaBHYT2015 (?,?,?,?)}";//tao bien khai bao store
		$params = array($_GET['id'],
						3,
						1,
						$_SESSION['user']['id_user']
						);
		$get=$data->query( $store_name, $params);
	}else{// la vien phi
		$store_name="{call GD2_Kham_FixGiaBHYT2015 (?,?,?,?)}";//tao bien khai bao store
		$params = array($_GET['id'],
						3,
						2,
						$_SESSION['user']['id_user']
						);
		$get=$data->query( $store_name, $params);
	}
	$store_name="{call GD2_GetTienBHDieuTriPhoiHopByID_DieuTriPhoiHop(?)}";//tao bien khai bao store
	$params = array($_GET['id']);
	$get_danh_muc=$data->query( $store_name, $params);//Goi store
	$excute= new SQLServerResult($get_danh_muc);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
	$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 
	echo ";;".$tam[0]['PhiThucHien'].";;".$tam[0]['PhanTramCungChiTra'].";;".$tam[0]['ThanhTienCungChiTra'].";;".$tam[0]['ThanhTienBaoHiem'].";;".$tam[0]['Isbhyt'].";;";
 }else{ // bang kham
	if($_GET['ac']==1){// la bao hiem
		$store_name="{call GD2_Kham_FixGiaBHYT2015 (?,?,?,?)}";//tao bien khai bao store
		$params = array($_GET['id'],
						1,
						1,
						$_SESSION['user']['id_user']
						);
		$get=$data->query( $store_name, $params);
	}else{// la vien phi
		$store_name="{call GD2_Kham_FixGiaBHYT2015 (?,?,?,?)}";//tao bien khai bao store
		$params = array($_GET['id'],
						1,
						2,
						$_SESSION['user']['id_user']
						);
		$get=$data->query( $store_name, $params);
	}
	$store_name="{call GD2_GetTienBHKhamByID_Kham(?)}";//tao bien khai bao store
	$params = array($_GET['id']);
	$get_danh_muc=$data->query( $store_name, $params);//Goi store
	$excute= new SQLServerResult($get_danh_muc);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
	$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 
	echo ";;".$tam[0]['PhiThucHien'].";;".$tam[0]['PhanTramCungChiTra'].";;".$tam[0]['ThanhTienCungChiTra'].";;".$tam[0]['ThanhTienBaoHiem'].";;".$tam[0]['Isbhyt'].";;";
 }

?>