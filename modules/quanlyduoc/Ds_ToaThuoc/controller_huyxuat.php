<?php
//if(count($_POST['rows'])>0){
	$sum=0;
	$sumvat=0;
	$data= new SQLServer;
	
	$params4 = array($_POST['id_xuatkho']);		
	$store_name4="{call GD2_phieuxuat_get_chitiet (?)}";
	$get_lich=$data->query( $store_name4, $params4);
	$excute= new SQLServerResult($get_lich);
	$tam= $excute->get_as_array();	
	
	$begin_tran=$data->begin_tran();	
	for($i=0;$i<=count($tam)-1;$i++){		
		$sum=$sum+($tam[$i]['SoLuong']*round($tam[$i]['DonGiaVon']));
		$sumvat=$sumvat+($tam[$i]['SoLuong']*round($tam[$i]['DonGiaVon'])*$tam[$i]['PhanTramVAT']/100);	
	}

	$check1='';
	$check2='';
	$date = date('Y-m-d H:i:s');
	
	$params4 = array(
		'',
		$date,		
		$tam[0]['ID_Kho'],
		'-1',
		$_SESSION["user"]["id_user"],		
		$date,
		91,
		$_SESSION["user"]["id_user"],		
		null,
		null,
		$sum,
		0,
		0,
		null,
		$date,
		null,
		$_POST['id_donthuoc'],
		$_SESSION["user"]["id_user"],    	  
    	array($check1, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT)
	
		);
		
	$store_name4="{call GD2_phieunhapsuabill_add (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)}";
	$get_danh_muc_phong_ban=$data->query( $store_name4, $params4);
	if( !$get_danh_muc_phong_ban ){		
				
				$data->rollback();
				return;
			}
	$solo ="";
	$store_name_taolo="{call GD2_TaoLoHeThongPhieuNhapChitiet (?,?) }";//tao bien khai bao store
	$params_taolo = array(2014,array($solo,SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_STRING (SQLSRV_ENC_CHAR),SQLSRV_SQLTYPE_VARCHAR(50)) );//tao param cho store 
	$get_solo=$data->query( $store_name_taolo, $params_taolo);
	$idphieuxuatct=0;
	
		for($y=0;$y<=count($tam)-1;$y++){
			
		/*	$params6 = array($tam[$y]['ID_Thuoc'],$solo);
			$store_name6="{call GD2_HoanTraThuoc_DMLoThuoc_UuTienXuat (?,?)}";	 
			$get_danh_muc_phong_ban=$data->query( $store_name6, $params6);	
			if( !$get_danh_muc_phong_ban ){				
					$data->rollback();
					return;
			}    */ 
		
			$params5 = array(
			
			$tam[$y]['ID_Thuoc'],
			$tam[$y]['SoLoNhaSanXuat'],
			$tam[$y]['SoLuong'],
			round($tam[$y]['DonGiaVon']),
			round($tam[$y]['DonGiaVon'])*$tam[$y]['SoLuong'],
			'',
			$tam[$y]['NgayHetHan']->format('Y/m/d'),
			$solo,
			$check1,
			2014,
			$_SESSION["user"]["id_user"],
			array($check2, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT)
			);
		
			$store_name5="{call Gd2_PhieuNhapChiTiet_Add (?,?,?,?,?,?,?,?,?,?,?,?)}";			 
			$get_danh_muc_phong_ban=$data->query( $store_name5, $params5);
				if( !$get_danh_muc_phong_ban ){					
							$data->rollback();
							return;
				}	
				$store_name5="{call GD2_HoanTraThuoc_DMLoThuoc_UuTienXuat(?,?)}";
				$params5 = array($tam[$y]['ID_Thuoc'],$solo);
				$rs=$data->query( $store_name5, $params5);	
				if( !$rs ){					
						$data->rollback();
						return;
				}	
			}
			
			
	
    	$params5 = array($_POST["id_xuatkho"]);
		$store_name5="{call GD2_upd_chiphithuoc_vtyt_huy (?)}";	 
		$get_danh_muc_phong_ban=$data->query( $store_name5, $params5);	
		if( !$get_danh_muc_phong_ban ){				
				$data->rollback();
				return;
		}        	
		
		$params5 = array($_POST["id_xuatkho"]);
		$store_name5="{call GD2_upd_phieuxuat_huy (?)}";	 
		$get_danh_muc_phong_ban=$data->query( $store_name5, $params5);	
		if( !$get_danh_muc_phong_ban ){				
				$data->rollback();
				return;
		}      
		$store_name9="{call GD2_donthuoc_upd_trangthai (?,?)}";
			$params9 = array(				
				$_POST['id_donthuoc'],//   @ID_LuotKham int,
				null,
			);
			$get=$data->query( $store_name9, $params9);	
			if( !$get ){		
				$data->rollback();
				return;
			}	
			$store_name9="{call GD2_donthuoc_upd_islock (?,?)}";
		$params9 = array(			
				$_POST['id_donthuoc'],//   @ID_PhieuXuat int,
				0
			);
		$get=$data->query( $store_name9, $params9);	
		if( !$get ){
					$data->rollback();
					return;
		}  
	$data->commit();
//}
?>

