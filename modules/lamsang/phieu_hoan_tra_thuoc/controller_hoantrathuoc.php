<?php 
switch ($_GET["oper"]) {
    case "add":
        luu();
        break;
    case "edit":
    	sua();
    	break;
}
function luu(){	
	$data= new SQLServer;
	$check1='';
	$check2='';
	$store_name="{call Gd2_PhieuHoanTraThuoc_NoiTru_Insert(?,?,?,?,?,?,?,?)}";
	$params= array (
		$_GET['idkhoa'],
		$_GET['loaidoituong'],
		$_GET['nguoihoantra'],
		convert_date($_GET['ngayhoantra']),
		$_GET['ghichu'],
		$_GET['phanloaithuoc'],
		$_SESSION['user']['id_user'],
		array($check1, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT)
		);
	//print_r($params);
	$add=$data->query( $store_name, $params);
	
	$tamrs=explode(';;',$_GET['iddonthuoctralai']);
	for($i=0;$i<count($tamrs)-1;$i++){
		$store_name2="{call Gd2_PhieuHoanTraThuocChiTiet_Insert(?,?,?,?)}";
		$params2= array (
			$check1,
			$tamrs[$i],
			$_SESSION['user']['id_user'],
			array($check2, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT)
			);
		//print_r($params2);
		$add2=$data->query( $store_name2, $params2);
		/*
		$store_name3="{call Gd2_UpdateDaTaoPhieuLinh_DonThuoc_True(?)}";
		$params3= array ($tamrs[$i]);
		$data->query( $store_name3, $params3);*/
	}
	echo";".$check1;
}//end func
function sua(){
	$data= new SQLServer;
	$store_name="{call Gd2_PhieuTraThuoc_NoiTru_update(?,?,?,?,?,?,?)}";
	$params= array (
		$_GET['idphieuhoantra'],
		$_GET['loaidoituong'],
		$_GET['nguoitra'],
		convert_date($_GET['ngaytra']),
		$_GET['ghichu'],
		$_GET['phanloaithuoc'],
		$_SESSION['user']['id_user']
		);
	$add=$data->query( $store_name, $params);
	
	$tamrs=explode(';;',$_GET['id_phieuhoantrathuocchitiet']);
	//$tamdt=explode(';;',$_GET['iddonthuoctralai']);
	if(count($tamrs)>0){
		for($i=0;$i<count($tamrs)-1;$i++){
			$store_name3="{call Gd2_PhieuHoanTraThuocChiTiet_del(?,?)}";
			$params3= array ($tamrs[$i],$_SESSION['user']['id_user']);
			$data->query( $store_name3, $params3);
			
		/*	$store_name4="{call Gd2_UpdateDaTaoPhieuLinh_DonThuoc_false(?)}";
			$params4= array ($tamdt[$i]);
			$data->query( $store_name4, $params4);*/
		}
	}
	
}
?>