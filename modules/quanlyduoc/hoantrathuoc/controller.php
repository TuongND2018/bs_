<?php
//print_r($_POST);
$data= new SQLServer;//tao lop ket noi SQL
$begin_tran=$data->begin_tran();
$check1="";
$solo ="";
$chuoimoi="";
$check2='';

//print_r($_POST);
$thanhtientralai=0;
$thanhtienvon=0;
foreach ($_POST['id'] as $key => $value) {
	if($value['SoLuongTraLai']>0){
		$thanhtientralai=$thanhtientralai+$value['ThanhTienTraLai'];
		$thanhtienvon=$thanhtienvon+$value['ThanhTienVon'];
	}
}
//echo $thanhtientralai;

if($_GET['hanhdong']=='luu'){
// id kho tam thoi de 1 sua sau. id ID_NCC chua biet tam thoi de 0. ID_NhapXuat=85
	if($_GET['idnhapkho']=='' || $_GET['idnhapkho']=='undefined' ){		
		$store_name="{call GD2_HoanTra_PhieuNhap_Add_New (?,?,?,?,? ,?,?,?,?)}";//tao bien khai bao store 
		$params = array('',
				1,
				0,
				$thanhtienvon,
				$_GET['ghichu'],
				$_SESSION['user']['id_user'],
				$_GET['iddonthuoc'],
				$thanhtientralai,
				array($check1, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT)
		 );
		$get=$data->query( $store_name, $params);
		if( !$get ){
			$data->rollback();
			return;
		}
		echo $check1;
		
		$store_name2="{call GD2_UpdateTrangThaiDonThuocIsReturn(?,?)}";//tao bien khai bao store 
		$params2 = array($_GET['iddonthuoc'],$_SESSION['user']['id_user']);
		$get2=$data->query( $store_name2, $params2);
		if( !$get2 ){
			$data->rollback();
			return;
		}
		
	}else{// update
		$store_name="{call GD2_HoanTra_PhieuNhap_Update_New (?,?,?,?,?)}";//tao bien khai bao store 
		$params = array($thanhtienvon,
						$_GET['ghichu'],
						$_SESSION['user']['id_user'],
						$thanhtientralai,
						$_GET['idnhapkho']
					);
		$get=$data->query( $store_name, $params);
		if( !$get ){
			$data->rollback();
			return;
		}
		$store_name2="{call GD2_UpdateTrangThaiDonThuocIsReturn(?,?)}";//tao bien khai bao store 
		$params2 = array($_GET['iddonthuoc'],$_SESSION['user']['id_user']);
		$get2=$data->query( $store_name2, $params2);
		if( !$get2 ){
			$data->rollback();
			return;
		}
	}
	//echo $get;

	// tao so lo he thong
	//if($_POST['id'][0]['ID_NhapKhoChiTiet']==''){
	if($_GET['idnhapkho']=='' || $_GET['idnhapkho']=='undefined' ){
		$store_name_taolo="{call GD2_TaoLoHeThongPhieuNhapChitiet (?,?) }";//tao bien khai bao store
		$params_taolo = array(array($_SESSION["user"]["year_work"]),array($solo,SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_STRING (SQLSRV_ENC_CHAR),SQLSRV_SQLTYPE_VARCHAR(50)) );
		$get_solo=$data->query( $store_name_taolo, $params_taolo);
	}else{
		$solo=$_POST['id'][0]['SoLoHeThong'];
	}
	if($check1){
		$check1=$check1;
	}else{
		$check1=$_GET['idnhapkho'];
	}
	foreach ($_POST['id'] as $key => $value) {
		if($value['SoLuongTraLai']>0){
			$ngaysx=NULL;
			$ngayhh='';
			$ngayhh=convert_date($value['NgayHetHan']);
			$store_name4="{call Gd2_PhieuNhapChiTiet_Add (?,?,?,?,? ,?,?,?,?,? ,?,?)}";//tao bien khai bao store 
			$params4 = array($value['ID_DonThuoc'],$value['SoLoNhaSanXuat'],$value['SoLuongTraLai'],$value['DonGiaVon'],$value['ThanhTienVon'],$ngaysx,$ngayhh,$solo,$check1,$_SESSION["user"]["year_work"],$_SESSION['user']['id_user'],array($check2, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT) );
			$get2=$data->query( $store_name4, $params4);
			if( !$get2 ){
					$data->rollback();
					return;
				}
			/*$store_name44="{call Gd2_Update_DonThuocChiTiet_SoThuocTralai (?,?)}";//tao bien khai bao store 
			$params44 = array($value['ID_DonThuocCT'],$value['SoLuongTraLai']);
			$get44=$data->query( $store_name44, $params44);
			if( !$get44 ){
				$data->rollback();
				return;
			}*/
			$store_name5="{call GD2_HoanTraThuoc_DMLoThuoc_UuTienXuat(?,?)}";
			$params5 = array($value['ID_DonThuoc'],$solo);
			//print_r($params5);
			$rs=$data->query( $store_name5, $params5);
		}
	}
//end luu
}else if($_GET['hanhdong']=='duyet'){
	// id kho tam thoi de 1 sua sau. id ID_NCC chua biet tam thoi de 0. ID_NhapXuat=85
	if($_GET['idnhapkho']=='' || $_GET['idnhapkho']=='undefined' ){
		
		$store_name="{call GD2_HoanTra_PhieuNhap_Add_New (?,?,?,?,? ,?,?,?,?)}";//tao bien khai bao store 
		$params = array('',
				1,
				0,
				$thanhtienvon,
				$_GET['ghichu'],
				$_SESSION['user']['id_user'],
				$_GET['iddonthuoc'],
				$thanhtientralai,
				array($check1, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT)
		 );
		$get=$data->query( $store_name, $params);
		if( !$get ){
			$data->rollback();
			return;
		}
		echo $check1;
		
		$store_name2="{call GD2_UpdateTrangThaiDonThuocIsReturn(?,?)}";//tao bien khai bao store 
		$params2 = array($_GET['iddonthuoc'],$_SESSION['user']['id_user']);
		$get2=$data->query( $store_name2, $params2);
		if( !$get2 ){
			$data->rollback();
			return;
		}
	}else{// update
		$store_name="{call GD2_HoanTra_PhieuNhap_Update_New (?,?,?,?,?)}";//tao bien khai bao store 
		$params = array($thanhtienvon,
						$_GET['ghichu'],
						$_SESSION['user']['id_user'],
						$thanhtientralai,
						$_GET['idnhapkho']
					);
		$get=$data->query( $store_name, $params);
		if( !$get ){
			$data->rollback();
			return;
		}
		$store_name2="{call GD2_UpdateTrangThaiDonThuocIsReturn(?,?)}";//tao bien khai bao store 
		$params2 = array($_GET['iddonthuoc'],$_SESSION['user']['id_user']);
		$get2=$data->query( $store_name2, $params2);
		if( !$get2 ){
			$data->rollback();
			return;
		}
	}
	
	// tao so lo he thong
	//if($_POST['id'][0]['ID_NhapKhoChiTiet']==''){
	if($_GET['idnhapkho']=='' || $_GET['idnhapkho']=='undefined' ){
		$store_name_taolo="{call GD2_TaoLoHeThongPhieuNhapChitiet (?,?) }";//tao bien khai bao store
		$params_taolo = array(array($_SESSION["user"]["year_work"]),array($solo,SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_STRING (SQLSRV_ENC_CHAR),SQLSRV_SQLTYPE_VARCHAR(50)) );
		$get_solo=$data->query( $store_name_taolo, $params_taolo);
	}else{
		$solo=$_POST['id'][0]['SoLoHeThong'];
	}
	if($check1)
		$check1=$check1;
		else
			$check1=$_GET['idnhapkho'];
	if($_GET['idnhapkho']=='' || $_GET['idnhapkho']=='undefined' ){		
		foreach ($_POST['id'] as $key => $value) {
			if($value['SoLuongTraLai']>0){
				//$ngaysx=convert_date($value['NgaySanXuat']);
				$ngaysx=NULL;
				$ngayhh='';
				$ngayhh=convert_date($value['NgayHetHan']);
				//$value['ID_DonThuoc'] là id thuoc ('-')
				$store_name4="{call Gd2_PhieuNhapChiTiet_Add (?,?,?,?,? ,?,?,?,?,? ,?,?)}";//tao bien khai bao store 
				$params4 = array($value['ID_DonThuoc'],$value['SoLoNhaSanXuat'],$value['SoLuongTraLai'],$value['DonGiaVon'],$value['ThanhTienVon'],$ngaysx,$ngayhh,$solo,$check1,$_SESSION["user"]["year_work"],$_SESSION['user']['id_user'],array($check2, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT) );
				$get2=$data->query( $store_name4, $params4);
				if( !$get2 ){
					$data->rollback();
					return;
				}
				/*$store_name44="{call Gd2_Update_DonThuocChiTiet_SoThuocTralai (?,?)}";//tao bien khai bao store 
				$params44 = array($value['ID_DonThuocCT'],$value['SoLuongTraLai']);
				$get44=$data->query( $store_name44, $params44);
				if( !$get44 ){
					$data->rollback();
					return;
				}*/
				$store_name5="{call GD2_HoanTraThuoc_DMLoThuoc_UuTienXuat(?,?)}";
				$params5 = array($value['ID_DonThuoc'],$solo);
				//print_r($params5);
				$rs=$data->query( $store_name5, $params5);
			}
		}
	}
}
$data->commit();
return;
?>