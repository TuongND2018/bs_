<?php
	$data= new SQLServer;
	
	$store="{call Gd2_demsophieu_getby_machucnang (?)}";
	$param = array('FormatSoPhieuHoanUng');
	$get=$data->query( $store, $param);
	$excute = new SQLServerResult($get);
	$tam = $excute->get_as_array();
	$begin_tran=$data->begin_tran();
	$id_return='';		
	$store_name="{call GD2_Thu_TraNo_trathuoc_insert(?,?,?,?,?,?,?,?,?,?)}";
	$params = array(
	$_POST["idbenhnhan"],	
	$_POST["tienthu"],
	$_POST["nguoigd"],
	$_POST["diachi"],
	$_POST["diengiai"],
	$_SESSION["user"]["id_user"],	
	'HoanUng',
	'PHU_'.($tam[0][0]+1),
	$_POST["id_nhapkho"],
	array($id_return, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT)
	);
	//print_r($_POST);
	$get_danh_muc_phong_ban=$data->query( $store_name, $params);
	if( !$get_danh_muc_phong_ban ){		
		$data->rollback();
		return;
	}
	$store_name1="{call GD2_ThanhToanTong_insert (?,?,?,?,?,?,?,?,?,?,?,?)}";
	$params1 = array(
	$_POST["idbenhnhan"],
	$id_return,
	'PHU_'.($tam[0][0]+1),
	0,
	0,
	$_POST["tienthu"],
	-$_POST["tienthu"],
	$_POST["NgayGio"],
	$_POST["diengiai"],
	0,
	$_POST["tienthuoc"],
	null
	);
	$get_danh_muc_phong_ban=$data->query( $store_name1, $params1);
	if( !$get_danh_muc_phong_ban ){		
		$data->rollback();
		return;
	}
	$store_name2="{call GD2_demsophieu_upd (?)}";
	$params2 = array(
	'FormatSoPhieuHoanUng'	
	);
	$get_danh_muc_phong_ban=$data->query($store_name2, $params2);
	if( !$get_danh_muc_phong_ban ){		
		$data->rollback();
		return;
	}
	$data->commit();
	echo($id_return);
?>

