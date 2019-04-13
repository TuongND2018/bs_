<?php
	$data= new SQLServer;
/*			
	$dskho="{call GD2_Dm_kho_selectby_dskho(?,?,?,?)}";
	$ds_kho=explode( ',', $_POST['ds_kho'] ) ;
	$paramdskho = array($ds_tang[0]);
	$ds=$data->query( $dskho, $paramdskho);	
	$excute= new SQLServerResult($ds);
	$tam= $excute->get_as_array();	
	$SL_Ton='';
	$TT_Ton='';
	$soluong='';
	$kiemtra=0;
	$date_curr = date('Y-m-d h:i:s');
	for($i=0;$i<=count($ds_kho);$i++){
		$SL_Ton='';
			$tinhton="{call GD2_TINHTONTUCTHOI(?,?,?,?,?)}";
			$tinhton1 = array ($date_curr,
							  $_POST['ID_Thuoc'],
							  $ds_kho[$i],
							  array($SL_Ton, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT),
							  array($TT_Ton, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT)
							  );
			$tinhton_tam=$data->query( $tinhton, $tinhton1);
			if($i==0){
				if($_POST['sl']<=$SL_Ton){
					$kiemtra=1;
					break;
				}else{
					$soluong=$soluong+$SL_Ton;
				}
			}else{
			$soluong=$soluong+$SL_Ton;
			
		}
	}
	
	if($soluong>=$_POST['sl']){
		$kiemtra=2;		
	}
	//print_r($tinhton1);
	//echo($SL_Ton);
	//echo($TT_Ton);
	*/
	if(isset($_GET['oper'])){
		$oper='del';
	}else{
		if($_POST['oper']=='add'){
		$oper='add';
		}else{
		$oper='edit';
		}
	}
	if($oper=='add'){
	//print_r($_POST);
	$Gia=$_POST['Gia'];
	$SoThuocThucXuat=convert_comma_dot($_POST['SoThuocThucXuat']);
	$store_name1="{call GD2_donthuocchitiet_insert(?,?,?,?,?,?,?,?,?,?,?,?,?)}";
	$params1 = array ($_POST['id_donthuoc'],$_POST['ID_Thuoc'],$Gia,$SoThuocThucXuat,$_POST['ThanhTien'],$_POST['ThanhTien'],$_POST['id_dvt'],$_POST['CachDungLieuDung'],$_POST['ID_DuongDungThuoc'],1,$_POST['lavattu'],$Gia*$SoThuocThucXuat,$_POST['PhuongThucThucHien']);
	$insert=$data->query( $store_name1, $params1);
	//echo ';'.$soluong;
	
	}elseif($oper=='del'){
	
	$store_name1="{call GD2_donthuocchitiet_del(?)}";
	$params1 = array ($_GET['id']);
	$insert=$data->query( $store_name1, $params1);
	}elseif($oper=='edit'){
		print_r($_POST);
		$Gia=$_POST['Gia'];
		$SoThuocThucXuat=convert_comma_dot($_POST['SoThuocThucXuat']);
		$store_name1="{call [GD2_donthuocchitiet_upd](?,?,?,?,?,?,?,?,?,?,?,?,?)}";
		$params1 = array ($_POST['id'],$_POST['ID_Thuoc'],$Gia,$SoThuocThucXuat,$_POST['ThanhTien'],$_POST['ThanhTien'],$_POST['id_dvt'],$_POST['CachDungLieuDung'],$_POST['ID_DuongDungThuoc'],1,$_POST['lavattu'],$Gia*$SoThuocThucXuat,$_POST['PhuongThucThucHien']);
		$insert=$data->query( $store_name1, $params1);
		//echo ';'.$soluong;
	}
?>
