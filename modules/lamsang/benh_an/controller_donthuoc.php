<?php
	$data= new SQLServer;
		
/*	if($_POST['isbhyt']=='Yes'){
		$_POST['isbhyt']=1;
	}else if($_POST['isbhyt']=='No'){
		$_POST['isbhyt']=0;
	}*/
	$check2='';	
	$check1='';
	$checktoatam='';
	if(isset($_GET['oper'])){
		$oper='del';
	}else{
		if(isset($_POST['extraparam'])){
			$oper='add';
		}else{
			if($_POST['oper']=='add'){
			$oper='add';
			}else{
			$oper='edit';
			}
		}
	}
	if($oper=='add'){
	
		if($_POST['id_donthuoc']==0)	
		{			
		$params2 = array( 
		$_POST['id_kham'],
		$_POST['ID_LuotKham'],
		$_POST["id_benhnhan"],
		$_SESSION["user"]["id_user"],
		'',
		'',
		2,
		$_POST["khamchinh"],
		'',
		array($check2, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT)
		);
		
		$store_name2="{call Gd2_donthuoc_insert(?,?,?,?,?,?,?,?,?,?,?)}";
		$get=$data->query( $store_name2,$params2);
		$Gia=$_POST['Gia'];
		$SoThuocThucXuat=convert_comma_donthuoc($_POST['SoThuocThucXuat']);
		$store_name1="{call GD2_donthuocchitiet_benhan_insert_new(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)}";
		$params1 = array ($check2,$_POST['ID_Thuoc'],$Gia,$SoThuocThucXuat,$_POST['ThanhTien'],$_POST['ThanhTien'],$_POST['id_dvt'],$_POST['CachDungLieuDung'],NULL,1,$_POST['lavattu'],$Gia*$_POST['ThanhTien'],$_POST['PhuongThucThucHien'],NULL,
		array($check1, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT)
		
		);
		$insert=$data->query( $store_name1, $params1);
		echo $check2.'|'.$check1;
	}else{
	
	$Gia=$_POST['Gia'];
	$SoThuocThucXuat=convert_comma_donthuoc($_POST['SoThuocThucXuat']);

	$store_name1="{call GD2_donthuocchitiet_benhan_insert_new(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)}";
	$params1 = array ($_POST['id_donthuoc'],$_POST['ID_Thuoc'],$Gia,$SoThuocThucXuat,$_POST['ThanhTien'],$_POST['ThanhTien'],$_POST['id_dvt'],$_POST['CachDungLieuDung'],NULL,1,$_POST['lavattu'],$Gia*$_POST['ThanhTien'],$_POST['PhuongThucThucHien'],NULL,
		array($check1, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
		//print_r($params1);
	$insert=$data->query( $store_name1, $params1);
		echo '|'.$check1;
	//echo ';'.$soluong;
	}
	}elseif($oper=='del'){
	
		$store_name1="{call GD2_donthuocchitiet_del_benhan(?,?)}";
		$params1 = array ($_GET['id'],array($checktoatam, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
		$insert=$data->query( $store_name1, $params1);
		echo '|'.$checktoatam;
	}elseif($oper=='edit'){
		
		$Gia=$_POST['Gia'];
		$SoThuocThucXuat=convert_comma_donthuoc($_POST['SoThuocThucXuat']);
		$store_name1="{call GD2_donthuocchitiet_upd_benhan_new(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)}";
		$params1 = array ($_POST['iddonthuocct'],$_POST['ID_Thuoc'],$Gia,$SoThuocThucXuat,$_POST['ThanhTien'],$_POST['ThanhTien'],$_POST['id_dvt'],$_POST['CachDungLieuDung'],NULL,1,$_POST['lavattu'],$Gia*$_POST['ThanhTien'],$_POST['PhuongThucThucHien'],NULL
		,array($checktoatam, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT)
		
		
		);
		$insert=$data->query( $store_name1, $params1);
		// $check1;
		echo '|'.$checktoatam;
	}
?>
