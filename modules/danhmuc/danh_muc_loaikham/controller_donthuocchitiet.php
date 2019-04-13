<?php
$data= new SQLServer;

if($_GET['donthuocxoa']){
	$_xoa=$_GET['donthuocxoa'];
	$_del=explode(",",$_xoa);
	$_dem=count($_del);
	for($ii=0;$ii<$_dem;$ii++){
		if($_del[$ii]>0){
			$params22 = array ($_del[$ii],$_SESSION["user"]["id_user"]);
			$store_name22="{call GD2_DonThuocMauChiTiet_Delete(?,?)}";
			$del=$data->query( $store_name22, $params22);
		}
	}
}
if(isset($_POST['id'])){	
	foreach ($_POST['id'] as $key => $value) {
		if($value['luu']!=1 && $value['ID_Thuoc']>0){
			$check1='';
			$store_name1="{call GD2_DonThuocMauChiTiet_Ins(?,?,?,?,?, ?)}";
			$params1 = array ($value['ID_Thuoc'],
					$value['LieuDungHangNgay'],
					$value['CachDung'],
					$_GET['iddonthuocmau'],
					$_SESSION["user"]["id_user"],
					array($check1, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT)
			);
			$insert=$data->query( $store_name1, $params1);
			//echo $insert;
		}else if($value['luu']==1){
			$store_name2="{call GD2_DonThuocMauChiTiet_Update(?,?,?,?,?)}";
			$params2 = array ($value['ID_TTMChiTiet'],
							$value['ID_Thuoc'],
							$value['LieuDungHangNgay'],
							$value['CachDung'],
							$_SESSION["user"]["id_user"]
			);
			$data->query( $store_name2, $params2);
		}
	}
}
$check3='';
$store_name3="{call GD2_LoaiKham_DonThuoc_VTYH_Insert(?,?,?,?)}";
$params3 = array ($_GET['id_loaikham'],
		$_GET['iddonthuocmau'],
		$_SESSION["user"]["id_user"],
		array($check3, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT)
);
$data->query( $store_name3, $params3);
?>

