<?php

switch ($_GET["oper"]) {
    case "add":
        add();
        break;
    case "edit":
        edit();
        break;
    break;
}

function add(){
	$data= new SQLServer;//tao lop ket noi SQL
	$begin_tran=$data->begin_tran();
	//print_r($_POST);
	$check1="";
	$check2="";
	$i=0;
	if(isset($_POST['id'])){
		$params=array(
			$_GET['nhanvien'],	
			$_GET['kho'],
			$_GET['ghichu'],
			$_SESSION["user"]["id_user"],
			array($check1, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT)
		);
		
		$store_name="{call GD2_PhieuNhapTB_VT_Insert (?,?,?,?,?)}";//tao bien khai bao store
		$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store	
		if( !$get_danh_muc_phong_ban ){
			$data->rollback();
			return;
		}
	
		foreach ($_POST['id'] as $key => $value) {
			if($value['SoLuong']>0){
				$params2=array(
					$check1,
					$value['ID_Loai'],
					convert_comma_dot_insert($value['SoLuong']),
					convert_comma_dot_insert($value['DonGia']),
					$_SESSION["user"]["id_user"],
					array($check2, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT)
				);
				$store_name2="{call GD2_PhieuNhapChiTiet_TB_VT_Insert (?,?,?,?,?,?)}";//tao bien khai bao store
				$get_danh_muc_phong_ban2=$data->query( $store_name2, $params2);//Goi store	
				if( !$get_danh_muc_phong_ban2 ){
					$data->rollback();
					return;
				}
			}
		}
	}
	$data->commit();
}
function edit(){
	$check1='';
	$check2='';
	$data= new SQLServer;//tao lop ket noi SQL
	$begin_tran=$data->begin_tran();
	$params=array(
			$_GET['id'],	
			$_GET['nhanvien'],	
			$_GET['kho'],
			$_GET['ghichu'],
			$_SESSION["user"]["id_user"]
		);
		
		$store_name="{call GD2_PhieuNhapTB_VT_Update (?,?,?,?,?)}";//tao bien khai bao store
		$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store	
		if( !$get_danh_muc_phong_ban ){
			$data->rollback();
			return;
		}
	if(isset($_POST['id'])){
		foreach ($_POST['id'] as $key => $value) {
			if($value['Luu']>0){
				$params2=array(
					$value['id'],
					convert_comma_dot_insert($value['SoLuong']),
					convert_comma_dot_insert($value['DonGia']),
					$_SESSION["user"]["id_user"]
				);
				//print_r($params2);
				$store_name2="{call GD2_PhieuNhapChiTiet_TB_VT_Update (?,?,?,?)}";//tao bien khai bao store
				$get_danh_muc_phong_ban2=$data->query( $store_name2, $params2);//Goi store	
				if( !$get_danh_muc_phong_ban2 ){
					$data->rollback();
					return;
				}
			}elseif($value['SoLuong']>0){
				$params2=array(
					$_GET['id'],
					$value['ID_Loai'],
					convert_comma_dot_insert($value['SoLuong']),
					convert_comma_dot_insert($value['DonGia']),
					$_SESSION["user"]["id_user"],
					array($check2, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT)
				);
				//print_r($params2);
				$store_name2="{call GD2_PhieuNhapChiTiet_TB_VT_Insert (?,?,?,?,?,?)}";//tao bien khai bao store
				$get_danh_muc_phong_ban2=$data->query( $store_name2, $params2);//Goi store	
				if( !$get_danh_muc_phong_ban2 ){
					$data->rollback();
					return;
				}
			}
		}
	}
	
	if($_GET['xoa']){
		$_xoa=$_GET['xoa'];
		$_del=explode(",",$_xoa);
		$_dem=count($_del);
		for($ii=0;$ii<$_dem;$ii++){
			if($_del[$ii]>0){
				$params_del = array ($_del[$ii],$_SESSION["user"]["id_user"]);
				$store_name_del="{call GD2_PhieuNhapChiTiet_TB_VT_Delete(?,?)}";
				$del=$data->query( $store_name_del, $params_del);
			}
		}
	}
 	$data->commit();
}
?>

