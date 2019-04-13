<?php
	$check1='';
	$data= new SQLServer;//tao lop ket noi SQL
	//print_r($_GET);
	if($_GET['ac']==1){
		$params=  array($_GET['idthuoc'],
				$_GET['idkho'],
				$_GET['min'],
				$_GET['max'],
				$_SESSION["user"]["id_user"],
				array($check1, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT)
		);
			//print_r($params);
		$store_name="{call GD2_DuTruKho_Soluong_Insert(?,?,?,?,?,?)}";//tao bien khai bao store
		$check=$data->query( $store_name, $params);
		echo ";;".$check1;
	}elseif($_GET['ac']==2){
		$params=  array($_GET['iddutru'],
				$_GET['idthuoc'],
				$_GET['idkho'],
				$_GET['min'],
				$_GET['max'],
				$_SESSION["user"]["id_user"]);
		$store_name="{call GD2_DuTruKho_Soluong_update(?,?,?,?,?,?)}";//tao bien khai bao store
		$check=$data->query( $store_name, $params);
	}else{
		$params=  array($_GET['iddutru'],
				$_SESSION["user"]["id_user"]);
		$store_name="{call GD2_DuTruKho_Soluong_del(?,?)}";//tao bien khai bao store
		$check=$data->query( $store_name, $params);
	}
	
?>