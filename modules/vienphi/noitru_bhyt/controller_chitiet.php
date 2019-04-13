<?php

	//print_r($_POST);
	$data= new SQLServer;	
	$begin_tran=$data->begin_tran();	
	if($_POST["lydothieu"]!=''){
		$diendai=$_POST["lydothieu"];
	}else{
		$diendai=$_POST["diengiai"];	
	}
	$dichvu=0;
	$id_return_dv='';	
	$store_name_nocu="{call GD2_nocu_get (?)}";
	$params_nocu = array($_POST["idbenhnhan"]);	
	$nocu_tam=$data->query( $store_name_nocu, $params_nocu);
	$excute= new SQLServerResult($nocu_tam);
	$nocu= $excute->get_as_array();
	
	//thanh toan dichvu
	/*if($_POST["dichvu"]>0)
	{
		
		if(($nocu[0][0]+$_POST["dichvu"])<0){
			$dichvu=0;
		}else{
			
			$dichvu=$nocu[0][0]+$_POST["dichvu"];
			
		}
	
		
		$store="{call Gd2_demsophieu_getby_machucnang (?)}";
		$param = array('FormatThanhToanDichVu');
		$get=$data->query( $store, $param);
		$excute = new SQLServerResult($get);
		$tam = $excute->get_as_array();	
			
		
		//thanh toan vien phi
		$store_name="{call GD2_thu_trano_insert (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)}";
		$params = array(
		$_POST["idbenhnhan"],
		'',
		$dichvu,
		$_POST["nguoigd"],
		$_POST["diachi"],
		$diendai,
		$_SESSION["user"]["id_user"],
		1,
		'ThanhToanDichVu',
		1,
		1,
		0,
		'TTDV_'.($tam[0][0]+1),
		$_POST["ID_LuotKham"],
		array($id_return_dv, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT)
		);
		$get_danh_muc_phong_ban=$data->query( $store_name, $params);
		if( !$get_danh_muc_phong_ban ){		
			$data->rollback();
			return;
		}
		
		$store_name1="{call GD2_ThanhToanTong_insert_bhyt (?,?,?,?,?,?,?,?,?,?,?,?,?,?)}";
		$params1 = array(
		$_POST["idbenhnhan"],
		$id_return_dv,
		'TTDV_'.($tam[0][0]+1),
		$_POST["dichvu"],
		0,
		$dichvu,
		$dichvu,
		'',
		$diendai,
		0,
		0,
		$_POST["ID_LuotKham"],
		$_POST["bhyt"],
		);
		$get_danh_muc_phong_ban=$data->query( $store_name1, $params1);
		if( !$get_danh_muc_phong_ban ){		
			$data->rollback();
			return;
		}
		$store_name2="{call GD2_demsophieu_upd (?)}";
		$params2 = array(
		'FormatThanhToanDichVu'	
		);
		$get_danh_muc_phong_ban=$data->query( $store_name2, $params2);
		if( !$get_danh_muc_phong_ban ){		
			$data->rollback();
			return;
		}
	}*/
//ket thuc thanh toan dichvu
	
	
	
	
	
	
	
	$id_return_hoanung='';
	$store="{call Gd2_demsophieu_getby_machucnang (?)}";
	$param = array('FormatThanhToanVienPhi');
	$get=$data->query( $store, $param);
	$excute = new SQLServerResult($get);
	$tam = $excute->get_as_array();	
	$id_return='';		
	
	//thanh toan vien phi
	$store_name="{call GD2_thu_trano_insert (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)}";
	$params = array(
	$_POST["idbenhnhan"],
	'',
	$_POST["tienthu"],
	$_POST["nguoigd"],
	$_POST["diachi"],
	$diendai,
	$_SESSION["user"]["id_user"],
	1,
	'ThanhToanLuotKham',
	1,
	1,
	0,
	'TTVP_'.($tam[0][0]+1),
	$_POST["ID_LuotKham"],
	array($id_return, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT)
	);
	$get_danh_muc_phong_ban=$data->query( $store_name, $params);
	if( !$get_danh_muc_phong_ban ){		
		$data->rollback();
		return;
	}
		
	$store_name1="{call GD2_ThanhToanTong_insert_bhyt (?,?,?,?,?,?,?,?,?,?,?,?,?,?)}";
	$params1 = array(
	$_POST["idbenhnhan"],
	$id_return,
	'TTVP_'.($tam[0][0]+1),
	$_POST["tongcong"],
	$_POST["giamgia"],
	-$_POST["tienthu"],
	$_POST["tienthu"],
	'',
	$diendai,
	0,
	0,
	$_POST["ID_LuotKham"],
	$_POST["bhyt"],
	$_POST["hotro_kham"]+$_POST["hotro_thuoc"],
	);
	$get_danh_muc_phong_ban=$data->query( $store_name1, $params1);
	if( !$get_danh_muc_phong_ban ){		
		$data->rollback();
		return;
	}
	$store_name2="{call GD2_demsophieu_upd (?)}";
	$params2 = array(
	'FormatThanhToanVienPhi'	
	);
	$get_danh_muc_phong_ban=$data->query( $store_name2, $params2);
	if( !$get_danh_muc_phong_ban ){		
		$data->rollback();
		return;
	}
	//ket thuc thanh toan vienphi

	


	

	//tao hoanung

	if(isset($_GET["hoanung"])){
		$store="{call Gd2_demsophieu_getby_machucnang (?)}";
		$param = array('FormatSoPhieuHoanUng');	
		$get=$data->query( $store, $param);
		$excute = new SQLServerResult($get);
		$tam = $excute->get_as_array();
	//echo $tam[0][0];
	
	
		$store_name="{call GD2_thu_trano_insert (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)}";
		$params = array(
		$_POST["idbenhnhan"],
		'',
		$_POST["tienthu_hoantra"],
		$_POST["nguoigd"],
		$_POST["diachi"],
		'Hoàn tiền sử dụng dịch vụ còn thừa cho bệnh nhân',
		$_SESSION["user"]["id_user"],
		0,
		'HoanUng',
		0,
		1,
		0,
		'PHU_'.($tam[0][0]+1),
		$_POST["ID_LuotKham"],
		array($id_return_hoanung, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT)
		);
		$get_danh_muc_phong_ban=$data->query( $store_name, $params);
		
		if( !$get_danh_muc_phong_ban ){		
			$data->rollback();
			return;
		}
		
		$store_name1="{call GD2_ThanhToanTong_insert_bhyt (?,?,?,?,?,?,?,?,?,?,?,?,?,?)}";
		$params1 = array(
		$_POST["idbenhnhan"],
		$id_return_hoanung,
		'PHU_'.($tam[0][0]+1),
		0,
		0,
		$_POST["tienthu_hoantra"],
		-$_POST["tienthu_hoantra"],
		'',
		'Hoàn tiền sử dụng dịch vụ còn thừa cho bệnh nhân',
		0,
		0,
		$_POST["ID_LuotKham"],
		0,
		0
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
		}
		///// ket yhuc taohoanung
	
	
		//tao id_ref cho tamung hoanung
		$store_name15="{call GD2_upd_thutrano_id_ref (?,?,?)}";
		$params15 = array(
			$id_return,
			1,
			$_POST["ID_LuotKham"]
			);
		
		$get=$data->query( $store_name15, $params15);	
		if( !$get ){	
					$data->rollback();
					return;
		}

	/////ketthuc


///----------------------------------------------------------------------------


	//print_r(count($_POST['kham']));
	if(isset($_POST['kham'])){
		for($i=0;$i<=count($_POST['kham'])-1;$i++){	
		
		
			if($_POST['kham'][$i]['ExtField1']=='DieuTriPhoiHop'){
				$store_name6="{call GD2_DieuTriPhoiHop_thanhtoan (?,?,?)}";
				$params6 = array(
					$_POST['kham'][$i]['id_thanhtoanbill'],		
					1,
					$_SESSION["user"]["id_user"]
				);				
				$params3 = array(
					$id_return,
					$_POST['kham'][$i]['ID_Kham'],
					$_POST['kham'][$i]['id_thanhtoanbill'],
					null,
					null,
					null,
					null,
					$_POST['kham'][$i]['PhiThucHien'],
					0,
					0,
					0,
					$_POST['kham'][$i]['hotro'],
					$_SESSION["user"]["id_user"]
				);
			
			
			$store_name7="{call GD2_kham_thanhtoan (?,?,?)}";
			$params7 = array(
				$_POST['kham'][$i]['ID_Kham'],	
				1,	
				$_SESSION["user"]["id_user"]
			);
			
			$get_danh_muc_phong_ban=$data->query( $store_name7, $params7);
			if( !$get_danh_muc_phong_ban ){		
				$data->rollback();
				return;
			}
	}else if($_POST['kham'][$i]['ExtField1']=='PHYSIO'){
		$store_name6="{call GD2_PHYSIOTHERAPY_thanhtoan (?,?,?)}";
		$params6 = array(
			$_POST['kham'][$i]['id_thanhtoanbill'],	
			1,	
			$_SESSION["user"]["id_user"]
		);		
		$params3 = array(
			$id_return,
			$_POST['kham'][$i]['ID_Kham'],
			null,
			$_POST['kham'][$i]['id_thanhtoanbill'],
			null,
			null,
			null,
			$_POST['kham'][$i]['PhiThucHien'],
			0,
			0,
			0,
			$_POST['kham'][$i]['hotro'],
			$_SESSION["user"]["id_user"]
		);
		
		
			$store_name7="{call GD2_kham_thanhtoan (?,?,?)}";
			$params7 = array(
			$_POST['kham'][$i]['ID_Kham'],	
			1,	
			$_SESSION["user"]["id_user"]
		);
		
		
		$get_danh_muc_phong_ban=$data->query( $store_name7, $params7);
		if( !$get_danh_muc_phong_ban ){		
				$data->rollback();
				return;
		}
	}else if($_POST['kham'][$i]['ExtField1']=='Dichvu'){
		if($_POST['kham'][$i]['Isthanhtoanvp']){
			$id_tam=$id_return;
		}else{
			$id_tam=$id_return_dv;
		}
		
		$store_name6="{call GD2_Dichvu_thanhtoan (?,?,?)}";
		$params6 = array(
			$_POST['kham'][$i]['id_thanhtoanbill'],	
			1,	
			$_SESSION["user"]["id_user"]
		);		
		$params3 = array(
			$id_tam,
			null,
			null,			
			null,
			null,
			null,
			$_POST['kham'][$i]['id_thanhtoanbill'],
			$_POST['kham'][$i]['PhiThucHien'],
			0,
			0,
			0,
			$_POST['kham'][$i]['hotro'],
			$_SESSION["user"]["id_user"]
		);
		
	}else if($_POST['kham'][$i]['ExtField1']=='Giuongbenh'){
		$store_name6="{call GD2_Giuongbenh_upd (?,?,?,?,?,?,?,?,?)}";
		$params6 = array(
			$_POST['kham'][$i]['id_thanhtoanbill'],	
			1,	
			$_POST['kham'][$i]['ngay'],
			$_POST['kham'][$i]['gio'],
			$_POST['kham'][$i]['ngaybh'],
			$_POST['kham'][$i]['bhyt'],
			$_POST['kham'][$i]['Cungchitra'],
			$_POST['kham'][$i]['Phantram'],
			$_SESSION["user"]["id_user"]
		);		
		$params3 = array(
			$id_return,
			null,
			null,			
			null,
			null,
			$_POST['kham'][$i]['id_thanhtoanbill'],
			null,			
			$_POST['kham'][$i]['PhiThucHien'],
			0,
			0,
			0,
			$_POST['kham'][$i]['hotro'],
			$_SESSION["user"]["id_user"]
		);
		
	}
	else {
		$store_name6="{call GD2_kham_thanhtoan (?,?,?)}";
		$params6 = array(
			$_POST['kham'][$i]['ID_Kham'],	
			1,	
			$_SESSION["user"]["id_user"]
		);
		$params3 = array(
							$_POST['kham'][$i]['ID_Kham'],		
							$_SESSION["user"]["id_user"]
							);
							$params3 = array(
							$id_return,
							$_POST['kham'][$i]['ID_Kham'],
							null,
							null,
							null,
							null,
							null,
							$_POST['kham'][$i]['PhiThucHien'],
							0,
							0,
							0,
							$_POST['kham'][$i]['hotro'],
							$_SESSION["user"]["id_user"]
			);
	}
	
	
		
		$get_danh_muc_phong_ban=$data->query( $store_name6, $params6);
		if( !$get_danh_muc_phong_ban ){		
			
				$data->rollback();
				return;
			}
		$store_name3="{call GD2_ThuTraNo_chitiet_insert_new (?,?,?,?,?,?,?,?,?,?,?,?,?)}";
		$get_danh_muc_phong_ban=$data->query( $store_name3, $params3);
		
		//print_r($_POST);
		if( !$get_danh_muc_phong_ban ){
			
				$data->rollback();
				return;
			}		
	}
	
	//-------------------------
	
	
	
	
	
	
	
		$store_name11="{call GD2_ThanhToan_ChiTietMienGiam_thanhtoan (?,?,?)}";
		$store_name10="{call GD2_ThanhToan_LoaiGiamGia_Insert (?,?,?,?,?)}";
	if($_POST["id_giam"]!=''){
		$giam_chidinh = explode(";", $_POST["id_giam"]);		
		for ($i = 0, $c = count($giam_chidinh); $i < $c; $i++) {
			$params10 = array(
			$_POST["ID_LuotKham"],//@ID_LuotKham int,
			$id_return,//@ID_ThuTraNo int,
			$giam_chidinh[$i],//@ID_ChiTietMienGiam int,
			null,//@GhiChu nchar(10),
			$_SESSION["user"]["id_user"]//@IdUser_login int
			);
			$get_danh_muc_phong_ban=$data->query( $store_name10, $params10);
			if( !$get_danh_muc_phong_ban ){		
				$data->rollback();
				return;
			}
			$params11 = array(
			$giam_chidinh[$i],//@ID_LuotKham int,
			1,//@ID_ThuTraNo int,			
			$_SESSION["user"]["id_user"]//@IdUser_login int
			);
			$get_danh_muc_phong_ban=$data->query( $store_name11, $params11);
			if( !$get_danh_muc_phong_ban ){		
				$data->rollback();
				return;
			}
		}
	}
	
	
		
	}


	
	if(isset($_POST["tien_miengiam"])){
		
		$id_chitietmiengiam='';
		$store_name12="{call GD2_ThanhToan_ChiTietMienGiam_add(?,?,?,?,?,?,?,?,?,?)}";	
		$params12 = array ($_POST["ID_LuotKham"],null,null,$_POST["tien_miengiam"],'ChuongTrinh',null,$_SESSION["user"]["id_user"],1,$_POST["id_miengiam"],
		array($id_chitietmiengiam, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
		$insert=$data->query( $store_name12, $params12);	
		if( !$insert ){		
			$data->rollback();
			return;
		}
			
		$params10 = array(
			$_POST["ID_LuotKham"],//@ID_LuotKham int,
			$id_return,//@ID_ThuTraNo int,
			$id_chitietmiengiam,//@ID_ChiTietMienGiam int,
			null,//@GhiChu nchar(10),
			$_SESSION["user"]["id_user"]//@IdUser_login int
		);
		$get_danh_muc_phong_ban=$data->query( $store_name10, $params10);
		if( !$get_danh_muc_phong_ban ){		
			$data->rollback();
			return;
		}
			
	}
	
	if(isset($_POST["thuoc"])){
	if(count($_POST["thuoc"])>0){
		
		for($i=0;$i<=count($_POST["thuoc"])-1;$i++){
			$store_name6="{call GD2_donthuoc_thanhtoan (?,?,?)}";
			$params6 = array(
				$_POST["thuoc"][$i]['_id_'],		
				1,
				$_SESSION["user"]["id_user"]
			);
			$get_danh_muc_phong_ban=$data->query( $store_name6, $params6);
			if( !$get_danh_muc_phong_ban ){		
				$data->rollback();
				return;
			}
			
			$params3 = array(
				$id_return,
				null,
				null,
				null,
				$_POST["thuoc"][$i]['_id_'],
				null,
				null,
				$_POST["thuoc"][$i]["ThanhTien"],
				0,
				0,
				0,
				$_POST['thuoc'][$i]['hotro'],
				$_SESSION["user"]["id_user"]		
			
			);
			
			
			$store_name3="{call GD2_ThuTraNo_chitiet_insert_new (?,?,?,?,?,?,?,?,?,?,?,?,?)}";
			
			$get_danh_muc_phong_ban=$data->query( $store_name3, $params3);
				if( !$get_danh_muc_phong_ban ){		
				$data->rollback();
				return;
			}
			
		}
			
				
	}
		
	}
	
	
	

	$store_name9="{call GD2_thongtinluotkham_upd_thanhtoan (?,?)}";
					$params9 = array(				
						$_POST["ID_LuotKham"],//   @ID_LuotKham int,
						1
						);
					$get=$data->query( $store_name9, $params9);	
					if( !$get ){		
								$data->rollback();
								return;
					}

	     //       $data->rollback();                                                                                                   
	$data->commit();
	
	echo $id_return.';'.$id_return_hoanung;
?>

