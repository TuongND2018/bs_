<?php
//print_r($_POST);
$max=0;
$check1='';
$data= new SQLServer;//tao lop ket noi SQL
if(isset($_POST['id'])){ 
	$stt=0;
	foreach ($_POST['id'] as $key => $value) {
		$stt+=1;
		if($value['TrangThai']=="HuyBo" && $value['Huy']==1){
			unset($params1);
			$store_name1="{call GD2_DM_KhamUpdateTrangThaiHuyBo (?,?,?,?,?, ?,?,?)}";//tao bien khai bao store
			$params1 = array($value['IDKham'],
							$value['TrangThai'],
							$value['ThanhTienVienPhi'],
							$value['ThanhTienVienPhi'],
							$value['ThanhTienBHYT'],
							$value['ThanhTienBHYT'],
							$value['LyDoHuyBo'],
							$_SESSION['user']['id_user'] 
						);
			$get1=$data->query( $store_name1, $params1);
			//print_r($params1);
		}elseif($value['Luu']==1 && $value['Sua']==1){
			unset($params2);
			if($value['ThanhTienBHYT']>0){
				$thanhtienbh=$value['PhiThucHien'];
			}else{
				$thanhtienbh=0;
			}
			if($value['ThanhTienCungChiTra']==''){
				$value['ThanhTienCungChiTra']=NULL;
			}
			$store_name2="{call GD2_DM_KhamUpdate_New (?,?,?,?,?, ?,?,?,?,?)}";//tao bien khai bao store
			$params2 = array($value['IDKham'],
							$value['PhiThucHien'],
							$value['ThanhTienVienPhi'],
							$value['BHChiTra'],
							$value['DonGiaBHYT'],
							$value['PhanTramCungChiTra'],
							$value['ThanhTienCungChiTra'],
							$value['ThucHien'],
							$value['NhomThucHien'],
							$_SESSION['user']['id_user'] 
						);
			$get2=$data->query( $store_name2, $params2);
			print_r ($params2);
		}elseif($value['Luu']!=1){	
			if($value['ThanhTienBHYT']>0){
				$thanhtienbh=$value['PhiThucHien'];
			}else{
				$thanhtienbh=0;
			}
			unset($params);
			if($value['ThoiGianTrungBinhThucHien']==''){
				$value['ThoiGianTrungBinhThucHien']=NULL;
			}
			if($value['GiaThueNgoaiThucHien']==''){
				$value['GiaThueNgoaiThucHien']=NULL;
			}
			if($value['ThoiGianTrungBinhThucHien']==''){
				$value['ThoiGianTrungBinhThucHien']=NULL;
			}
			$store_name="{call GD2_DM_Kham_Insert_New (?,?,?,?,?, ?,?,?,?,?, ?,?,?,?,?, ?,?,?,?,?, ?,?)}";//tao bien khai bao store
			$params = array($value['IDLuotKham'],
							$value['IDLoaiKham'],
							$value['NhomThucHien'],
							$value['NguoiChiDinh'],
							$value['TrangThai'],
							$value['PhiThucHien'],
							$value['ThanhTienVienPhi'],
							$stt,
							$value['MaBenhNhan'],
							$value['ThucHien'],
							$value['GiaThueNgoaiThucHien'],
							$value['ThoiGianTrungBinhThucHien'],
							"",
							$value['PhuThu'],
							$value['PhuThu'],
							$value['BHChiTra'],
							$value['DonGiaBHYT'],
							$value['PhanTramCungChiTra'],
							$value['ThanhTienCungChiTra'],
							$max,
							$_SESSION['user']['id_user'],
							array($check1, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT)
			 			);
			$get=$data->query( $store_name, $params);
			//print_r($params);
	   }
	}
	echo "id;".$check1; 
   }   

?>