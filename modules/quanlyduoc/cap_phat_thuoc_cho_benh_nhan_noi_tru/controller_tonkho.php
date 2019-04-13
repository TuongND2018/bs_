<?php
	//print_r($_POST);
	$data= new SQLServer;
	$dskho="{call GD2_Dm_kho_selectby_dskho(?)}";
	$paramdskho = array($_GET['kho']);
	$ds=$data->query( $dskho, $paramdskho);	
	$excute= new SQLServerResult($ds);
	$ds_kho= $excute->get_as_array();	
	$tenthuoc='';
	$flag=0;
	$date = date('Y-m-d H:i:s');
	$tenthuoc='<tr><th>Tên thuốc</th><th>SL xuất</th>';
	for($k=0;$k<count($ds_kho);$k++){
		$tenthuoc=$tenthuoc.'<th>'.$ds_kho[$k]['TenKho'].'</th>';
	}
	$tenthuoc=$tenthuoc.'</tr>';
	
	$params_ds = array($_GET['id_phieulinh']);
	$store_name_ds="{call GD2_GetThuocByID_PhieuLinhThuoc(?)}";
	$get_thongtin_ds=$data->query( $store_name_ds,$params_ds);
	$excute_ds= new SQLServerResult($get_thongtin_ds);
	$thuoc= $excute_ds->get_as_array();
	$i=0;
	foreach ($thuoc as $row) {
		$i++;
	//for($i=0;$i<count($_POST['id']);$i++){
		$d=0;
		for($j=0;$j<count($ds_kho);$j++){
			$SL_Ton='';	
			$TT_Ton='';	
			$params5 = array(
						$date,//@DenNgay as date,
						$ds_kho[$j]['ID_Kho'],//@ID_KHO as int,
						$row['ID_Thuoc'],//@ID_THuoc as int,
						array($SL_Ton, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT),//@SL_Ton as int out,
						array($TT_Ton, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT)//@TT_Ton as int out		
						);
					//	print_r($params5);
			$store_name5="{call GD2_TINHTONTUCTHOI (?,?,?,?,?)}";
			$get_data=$data->query( $store_name5, $params5);
			if($j==0){
				if($SL_Ton<$row['SoThuocThucXuat']){
					$d=1;
					$flag=1;
					if($j==0){
						$tenthuoc=$tenthuoc.'<tr><td>'.$row['TenGoc'].'</td><td>'.$row['SoThuocThucXuat'].'</td><td>'.$SL_Ton.'</td>';
					}
				}
			}else{
				if($d==1)
					$tenthuoc=$tenthuoc.'<td>'.$SL_Ton.'</td>';
				if($j==count($ds_kho)-1){
					$tenthuoc=$tenthuoc.'</tr>';
					}	
			}
		}
	}
	echo $tenthuoc."||".$flag;
?>