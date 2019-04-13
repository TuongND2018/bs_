<?php
//print_r($_POST);
$loi=0;
$error='';
$flag=0;
$tengoc='';
$data= new SQLServer;//tao lop ket noi SQL
$begin_tran=$data->begin_tran();
	$date = date('Y-m-d H:i:s');
	if($_GET['maphieugop']>0){
		$params_select = array($_GET['maphieugop']);//tao param cho store 
		$store_name_select="{call GD2_GetPhieuXuatDieuChuyenByMaPhieuGop(?)}";//tao bien khai bao store
		$get_select=$data->query( $store_name_select,$params_select);//Goi store
		$excute_select= new SQLServerResult($get_select);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
		$tam_select= $excute_select->get_as_array();//Tra ve mang toan bo data lay duoc 
		foreach ($tam_select as $row_select){
			$params22 = array($row_select['ID_PhieuXuatNoiBo']);//tao param cho store 
			$store_name22="{call GD2_SelectDsThuocByID_PhieuXuatNoiBo(?)}";//tao bien khai bao store
			$get_danh_muc_phong_ban22=$data->query( $store_name22,$params22);//Goi store
			$excute22= new SQLServerResult($get_danh_muc_phong_ban22);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
			$tam= $excute22->get_as_array();//Tra ve mang toan bo data lay duoc 
			foreach ($tam as $row){
				if($row['ID_Thuoc']!=''){
					$SL_Ton='';	
					$TT_Ton='';	
					$params5 = array(
								$date,//@DenNgay as date,
								$row_select['TuKho'],//@ID_KHO as int,
								$row['ID_Thuoc'],//@ID_THuoc as int,
								array($SL_Ton, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT),//@SL_Ton as int out,
								array($TT_Ton, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT)//@TT_Ton as int out
							);
							//	print_r($params5);
					$store_name5="{call GD2_TINHTONTUCTHOI (?,?,?,?,?)}";
					$get_data=$data->query( $store_name5, $params5);
					if($SL_Ton<$row['SoLuong']){
						$flag=1;
						if($tengoc==''){
							$tengoc=$row['TenGoc'];	
						}else{
							$tengoc=$tengoc.', '.$row['TenGoc'];	
						}
					}
				}
			}
		}
	}else{
		$params= array($_GET['id_phieu']);//tao param cho store 
		$store_name="{call GD2_SelectDsThuocByID_PhieuXuatNoiBo(?)}";//tao bien khai bao store
		$get=$data->query( $store_name,$params);//Goi store
		$excute= new SQLServerResult($get);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
		$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 
		//$tukho=$_GET['idkho'];
		foreach ($tam as $row){
			$SL_Ton1='';	
			$TT_Ton1='';	
			$params1 = array(
						$date,//@DenNgay as date,
						$_GET['idkho'],//@ID_KHO as int,
						$row['ID_Thuoc'],//@ID_THuoc as int,
						array($SL_Ton1, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT),//@SL_Ton as int out,
						array($TT_Ton1, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT)//@TT_Ton as int out		
					);
					//	print_r($params5);
			$store_name1="{call GD2_TINHTONTUCTHOI (?,?,?,?,?)}";
			$data->query( $store_name1, $params1);
			
			if($SL_Ton1<$row['SoLuong']){
				//print_r($params1);
				//echo $SL_Ton1.'<'.$row['SoLuong'].'<br>----------------<br>';
				$flag=1;
				if($tengoc==''){
					$tengoc=$row['TenGoc'];	
				}else{
					$tengoc=$tengoc.', '.$row['TenGoc'];	
				}
			}
		}
	}
$loi=0;
if($flag==0){
	if($_GET['maphieugop']>0){
		$params6 = array($_GET['maphieugop'],$_SESSION["user"]["id_user"]);
		$store_name6="{call GD2_PhieuXuatDieuChuyenDuyetXuatByID_PhieuGop (?,?)}";	
	}else{
		$params6 = array($_GET['id_phieu'],$_SESSION["user"]["id_user"]);
		$store_name6="{call GD2_PhieuXuatDieuChuyenDuyetXuat (?,?)}";	
	}
	$get_update=$data->query( $store_name6, $params6);	
	if( !$get_update ){		 	
		$data->rollback();
		$loi=1;
		return;
	}
}
if($loi==0 && $flag==0){
	echo ";;1;;";
}else{
	echo ";;0;;Thuốc: ".$tengoc.". Số lượng tồn không đủ để xuất.";
}
$data->commit();
return;
?>