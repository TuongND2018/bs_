<?php
//print_r($_POST);
$data= new SQLServer;//tao lop ket noi SQL
$check1="";
$solo ="";
$chuoimoi="";
$ngay='';
$check2='';
$ngay=convert_date($_GET['ngaylapphieu']);
if($_GET['hanhdong']=='luu'){
// id kho tam thoi de 1 sua sau. id ID_NCC chua biet tam thoi de 0. ID_NhapXuat=85
	if($_GET['idnhapkho']=='' || $_GET['idnhapkho']=='undefined' ){
		//lay so phieu tiep theo
		$store_name2="{call GD2_GetID_NhapKhoTiepTheo()}";
		$params2 = array();
		$get_lich2=$data->query( $store_name2, $params2);
		$excute2= new SQLServerResult($get_lich2);
		$sophieukhotieptheo= $excute2->get_as_array();
		if(strlen($sophieukhotieptheo[0]['SoPhieuKhoTiep'])==1)
			$chuoimoi='0000'.$sophieukhotieptheo[0]['SoPhieuKhoTiep'];
			else if(strlen($sophieukhotieptheo[0]['SoPhieuKhoTiep'])==2)
				$chuoimoi='000'.$sophieukhotieptheo[0]['SoPhieuKhoTiep'];
				else if(strlen($sophieukhotieptheo[0]['SoPhieuKhoTiep'])==3)
					$chuoimoi='00'.$sophieukhotieptheo[0]['SoPhieuKhoTiep'];
					else if(strlen($sophieukhotieptheo[0]['SoPhieuKhoTiep'])==4)
						$chuoimoi='0'.$sophieukhotieptheo[0]['SoPhieuKhoTiep'];
							else if(strlen($sophieukhotieptheo[0]['SoPhieuKhoTiep'])==5)
								$chuoimoi=$sophieukhotieptheo[0]['SoPhieuKhoTiep'];
		//update lai so phieu
		$store_name3="{call GD2_demsophieu_update (?,?,?)}";
		$params3 = array('FormatSoPhieuNhapKho',$sophieukhotieptheo[0]['SoPhieuKhoTiep'],$chuoimoi);
		$get_lich3=$data->query( $store_name3, $params3);
	
		
		$store_name="{call Gd2_HoanTraThuoc_PhieuNhap_Add (?,?,?,?,? ,?,?,?,?,? ,?,?,?,?,? ,?,?,?,?,? ,?,?,?)}";//tao bien khai bao store 
		$params = array($chuoimoi,$ngay,$ngay,1,0,'','',85,$_GET['nguoilapphieu'],0,0 ,$_GET['thanhtienvon'],0,0,'','',$_GET['ghichu'],$_SESSION["user"]["year_work"],
		$_SESSION['user']['id_user'],$_GET['nguoilapphieu'],$_GET['iddonthuoc'],$_GET['thanhtientralai'],array($check1, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT) );
		$get=$data->query( $store_name, $params);
	//print_r($params);
		echo $check1;
		
		$store_name2="{call GD2_UpdateTrangThaiDonThuocIsReturn(?,?)}";//tao bien khai bao store 
		$params2 = array($_GET['iddonthuoc'],$_SESSION['user']['id_user']);
		$get2=$data->query( $store_name2, $params2);
		
	}else{// update
		$store_name="{call Gd2_HoaTraThuocPhieuNhap_Upd (?,?,?,?,? ,?,?,?,?,?,?)}";//tao bien khai bao store 
		$params = array($ngay,$ngay,'','',$_GET['thanhtienvon'],$_GET['thanhtientralai'],$_GET['ghichu'],$_GET['nguoilapphieu'],$_SESSION["user"]["year_work"],
		$_SESSION['user']['id_user'],$_GET['idnhapkho']);
		$get=$data->query( $store_name, $params);
		
		$store_name2="{call GD2_UpdateTrangThaiDonThuocIsReturn(?,?)}";//tao bien khai bao store 
		$params2 = array($_GET['iddonthuoc'],$_SESSION['user']['id_user']);
		$get2=$data->query( $store_name2, $params2);
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
	
	if($check1)
		$check1=$check1;
		else
			$check1=$_GET['idnhapkho'];
	foreach ($_POST['id'] as $key => $value) {
		if($value['SoLuongTraLai']>0){
			
			//$ngaysx=convert_date($value['NgaySanXuat']);
			$ngaysx=NULL;
			$ngayhh='';
			$ngayhh=convert_date($value['NgayHetHan']);
			
			$store_name4="{call Gd2_PhieuNhapChiTiet_Add (?,?,?,?,? ,?,?,?,?,? ,?,?)}";//tao bien khai bao store 
			$params4 = array($value['ID_DonThuoc'],$value['SoLoNhaSanXuat'],$value['SoLuongTraLai'],$value['DonGiaVon'],$value['ThanhTienVon'],$ngaysx,$ngayhh,$solo,$check1,$_SESSION["user"]["year_work"],$_SESSION['user']['id_user'],array($check2, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT) );
			$get2=$data->query( $store_name4, $params4);
			
			$store_name44="{call Gd2_Update_DonThuocChiTiet_SoThuocTralai (?,?)}";//tao bien khai bao store 
			$params44 = array($value['ID_DonThuocCT'],$value['SoLuongTraLai']);
			$get44=$data->query( $store_name44, $params44);
		}
	}
//end luu
}else if($_GET['hanhdong']=='duyet'){
	// id kho tam thoi de 1 sua sau. id ID_NCC chua biet tam thoi de 0. ID_NhapXuat=85
	if($_GET['idnhapkho']=='' || $_GET['idnhapkho']=='undefined' ){
		//lay so phieu tiep theo
		$store_name2="{call GD2_GetID_NhapKhoTiepTheo()}";
		$params2 = array();
		$get_lich2=$data->query( $store_name2, $params2);
		$excute2= new SQLServerResult($get_lich2);
		$sophieukhotieptheo= $excute2->get_as_array();
		if(strlen($sophieukhotieptheo[0]['SoPhieuKhoTiep'])==1)
			$chuoimoi='0000'.$sophieukhotieptheo[0]['SoPhieuKhoTiep'];
			else if(strlen($sophieukhotieptheo[0]['SoPhieuKhoTiep'])==2)
				$chuoimoi='000'.$sophieukhotieptheo[0]['SoPhieuKhoTiep'];
				else if(strlen($sophieukhotieptheo[0]['SoPhieuKhoTiep'])==3)
					$chuoimoi='00'.$sophieukhotieptheo[0]['SoPhieuKhoTiep'];
					else if(strlen($sophieukhotieptheo[0]['SoPhieuKhoTiep'])==4)
						$chuoimoi='0'.$sophieukhotieptheo[0]['SoPhieuKhoTiep'];
							else if(strlen($sophieukhotieptheo[0]['SoPhieuKhoTiep'])==5)
								$chuoimoi=$sophieukhotieptheo[0]['SoPhieuKhoTiep'];
		//update lai so phieu
		$store_name3="{call GD2_demsophieu_update (?,?,?)}";
		$params3 = array('FormatSoPhieuNhapKho',$sophieukhotieptheo[0]['SoPhieuKhoTiep'],$chuoimoi);
		$get_lich3=$data->query( $store_name3, $params3);
	
		
		$store_name="{call Gd2_HoanTraThuoc_PhieuNhap_Add (?,?,?,?,? ,?,?,?,?,? ,?,?,?,?,? ,?,?,?,?,? ,?,?,?)}";//tao bien khai bao store 
		$params = array($chuoimoi,$ngay,$ngay,1,0,$_GET['nguoinhapkho'],$ngay,85,$_GET['nguoilapphieu'],0,0 ,$_GET['thanhtienvon'],0,0,'','',$_GET['ghichu'],$_SESSION["user"]["year_work"],
		$_SESSION['user']['id_user'],$_GET['nguoilapphieu'],$_GET['iddonthuoc'],$_GET['thanhtientralai'],array($check1, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT) );
		$get=$data->query( $store_name, $params);
		echo $check1;
		
		$store_name2="{call GD2_UpdateTrangThaiDonThuocIsReturn(?,?)}";//tao bien khai bao store 
		$params2 = array($_GET['iddonthuoc'],$_SESSION['user']['id_user']);
		$get2=$data->query( $store_name2, $params2);
	}else{// update
		$store_name="{call Gd2_HoaTraThuocPhieuNhap_Upd (?,?,?,?,? ,?,?,?,?,?,?)}";//tao bien khai bao store 
		$params = array($ngay,$ngay,$_GET['nguoinhapkho'],$ngay,$_GET['thanhtienvon'],$_GET['thanhtientralai'],$_GET['ghichu'],$_GET['nguoilapphieu'],$_SESSION["user"]["year_work"],
		$_SESSION['user']['id_user'],$_GET['idnhapkho']);
		//print_r($params );
		$get=$data->query( $store_name, $params);
		
		$store_name2="{call GD2_UpdateTrangThaiDonThuocIsReturn(?,?)}";//tao bien khai bao store 
		$params2 = array($_GET['iddonthuoc'],$_SESSION['user']['id_user']);
		$get2=$data->query( $store_name2, $params2);
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
				
				$store_name44="{call Gd2_Update_DonThuocChiTiet_SoThuocTralai (?,?)}";//tao bien khai bao store 
				$params44 = array($value['ID_DonThuocCT'],$value['SoLuongTraLai']);
				$get44=$data->query( $store_name44, $params44);
			}
		}
	}

}