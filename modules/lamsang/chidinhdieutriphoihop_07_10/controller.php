<?php
switch ($_GET["oper"]) {
    case "add":
        add();
        break;
		
}
function add(){
	$max=0;
	$ktra_vltl=0;
	$idkham_vltl=0;
	$ktra_dtph=0;
	$idkham_dtph=0;
	
	foreach ($_POST['id'] as $key => $value) {
		if($value["LanChiDinh"]!=''){
			if($value["LanChiDinh"] >$max){
				$max=$value["LanChiDinh"];
				}
			}
		if($value["IDKham"]!='' && $value["IDNhomCLS"]==25){
			$ktra_vltl=1;
			$idkham_vltl=$value["IDKham"];
			}
		if($value["IDKham"]!='' && $value["IDNhomCLS"]==26){
			$ktra_dtph=1;
			$idkham_dtph=$value["IDKham"];
			}
		//echo $value["LanChiDinh"]."<br>";
	}// and for
	
	//echo $idkham_vltl.'<br>';
	//echo $idkham_dtph.'<br>';
	$max=$max+1;
	
        $check1='';
		$check7='';
		$check8='';
		$check_25='';
		$check_con_25='';
		$check_26='';
		$check_con_26='';
        $data= new SQLServer;//tao lop ket noi SQL
	if(isset($_POST['id'])){
		$stt=0;
		$dem25=0;
		$dem26=0;
		foreach ($_POST['id'] as $key => $value) {
		$stt+=1;
		
			if($value['TrangThai']=="HuyBo"){
				if($value['IDNhomCLS']==25){
				unset($params1);
				$store_name1="{call GD2_Kham_DTPhoiHop_PHYSIOTHERAPY_UpdateTrangThaiHuyBo (?,?,?,?,?)}";//tao bien khai bao store
				$params1 = array($value['Id_phy_dtph'],$value['TrangThai'],$value['PhiThucHien'],$value['ThanhTien'],$_SESSION['user']['id_user'] );
				$data->query( $store_name1, $params1);
				
				unset($params3);
				$store_name3="{call GD2_Kham_TheoNhom_Update (?,?,?,?)}";//tao bien khai bao store
				$params3 = array($value['IDKham'],$value['TongTienTheoNhom'],$value['TongTienTheoNhom'],$_SESSION['user']['id_user'] );
				$data->query( $store_name3, $params3);
				
				}elseif($value['IDNhomCLS']==26){
					unset($param1);
					$store_name1="{call GD2_Kham_DTPhoiHop_DieuTriphoiHop_UpdateTrangThaiHuyBo (?,?,?,?,?)}";//tao bien khai bao store
					$params1 = array($value['Id_phy_dtph'],$value['TrangThai'],$value['PhiThucHien'],$value['ThanhTien'],$_SESSION['user']['id_user'] );
					$data->query( $store_name1, $params1);
					
					unset($params3);
					$store_name3="{call GD2_Kham_TheoNhom_Update (?,?,?,?)}";//tao bien khai bao store
					$params3 = array($value['IDKham'],$value['TongTienTheoNhom'],$value['TongTienTheoNhom'],$_SESSION['user']['id_user'] );
					$data->query( $store_name3, $params3);
					
					}else{
						unset($params1);
						$store_name1="{call GD2_KhamUpdateTrangThaiHuyBo (?,?,?,?,?,?)}";//tao bien khai bao store
						$params1 = array($value['IDKham'],$value['TrangThai'],$value['PhiThucHien'],$value['ThanhTien'],$value['LyDoHuyBo'],$_SESSION['user']['id_user'] );
						$data->query( $store_name1, $params1);
						}
			
			}else if($value['Luu']==1){
				if($value['IDNhomCLS']==25){
				
					unset($params2);
					$store_name2="{call GD2_TheoNhom_PHYSIOTHERAPY_Update (?,?,?,?,?,?,?)}";//tao bien khai bao store
					$params2 = array($value['Id_phy_dtph'],$value['PhiThucHien'],$value['ThanhTien'],$value['SLMoiNgay'],$value['SoNgay'],$value['ThucHien'],$_SESSION['user']['id_user'] );
					$data->query( $store_name2, $params2);
					
					unset($params3);
					$store_name3="{call GD2_Kham_TheoNhom_Update (?,?,?,?)}";//tao bien khai bao store
					$params3 = array($value['IDKham'],$value['TongTienTheoNhom'],$value['TongTienTheoNhom'],$_SESSION['user']['id_user'] );
					$data->query( $store_name3, $params3);
					
					
				}elseif($value['IDNhomCLS']==26){
					unset($params2);
					$store_name2="{call GD2_TheoNhom_DieuTriPhoiHop_Update (?,?,?,?,?,?,?)}";//tao bien khai bao store
					$params2 = array($value['Id_phy_dtph'],$value['PhiThucHien'],$value['ThanhTien'],$value['SLMoiNgay'],$value['SoNgay'],$value['ThucHien'],$_SESSION['user']['id_user'] );
					$data->query( $store_name2, $params2);
					
					unset($params3);
					$store_name3="{call GD2_Kham_TheoNhom_Update (?,?,?,?)}";//tao bien khai bao store
					$params3 = array($value['IDKham'],$value['TongTienTheoNhom'],$value['TongTienTheoNhom'],$_SESSION['user']['id_user'] );
					$data->query( $store_name3, $params3);
					
				}else{
				unset($params2);
				$store_name2="{call GD2_KhamUpdate (?,?,?,?,?)}";//tao bien khai bao store
				$params2 = array($value['IDKham'],$value['PhiThucHien'],$value['ThanhTien'],$value['ThucHien'],$_SESSION['user']['id_user'] );
				$data->query( $store_name2, $params2);
				}
		
			}else if($value['Luu']!=1){
				if($value['IDNhomCLS']==25 || $value['IDNhomCLS']==26 ){
					
					
					if($value['IDNhomCLS']==25){
					
						if($ktra_vltl==0){
							if($dem25==0){
								$dem25+=1;
								unset($params3);
								if($value['ThanhTien']==''){
									$value['ThanhTien']=NULL;
								}
								if($value['TongTienTheoNhom']==''){
									$value['TongTienTheoNhom']=NULL;
								}
								$store_name3="{call GD2_Kham_DTPhoiHop_TheoNhom_Insert (?,?,?,?,?,?,?,?,?,?,?,?,?,?)}";//tao bien khai bao store
								$params3 = array($value['IDLuotKham'],$value['IDNhomCLS'],$value['IDPhongChuyenMon'],$value['NguoiChiDinh'],$value['TrangThai'],$value['ThanhTien'],$value['TongTienTheoNhom'],$stt,$value['MaBenhNhan'],$value['ThucHien'],"PHYSIO",$max,$_SESSION['user']['id_user'],array($check_25, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT) );
								 $data->query( $store_name3, $params3);
							}
								unset($params4);
								if($value['PhiThucHien']==''){
									$value['PhiThucHien']=NULL;
								}
								if($value['ThanhTien']==''){
									$value['ThanhTien']=NULL;
								}
								if($value['GiaThueNgoaiThucHien']==''){
									$value['GiaThueNgoaiThucHien']=NULL;
								}
								$store_name4="{call GD2_Kham_PHYSIOTHERAPY_Insert (?,?,?,?,?,?,?,?,?,?,?,?,?)}";//tao bien khai bao store
								$params4 = array($check_25,$value['IDLoaiKham'],$value['NguoiChiDinh'],$value['TrangThai'],$value['PhiThucHien'],$value['ThanhTien'],$value['MaBenhNhan'],$value['ThucHien'],$value['GiaThueNgoaiThucHien'],$value['SLMoiNgay'],$value['SoNgay'],$_SESSION['user']['id_user'],array($check_con_25, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT) );
								 $data->query( $store_name4, $params4);	
								
						}else{ //neu co chi dinh vltl roi thi chi insert vao PHYSIOTHERAPY 
							unset($params4);
								if($value['PhiThucHien']==''){
									$value['PhiThucHien']=NULL;
								}
								if($value['ThanhTien']==''){
									$value['ThanhTien']=NULL;
								}
								if($value['GiaThueNgoaiThucHien']==''){
									$value['GiaThueNgoaiThucHien']=NULL;
								}
								$store_name4="{call GD2_Kham_PHYSIOTHERAPY_Insert (?,?,?,?,?,?,?,?,?,?,?,?,?)}";//tao bien khai bao store
								$params4 = array($idkham_vltl,$value['IDLoaiKham'],$value['NguoiChiDinh'],$value['TrangThai'],$value['PhiThucHien'],$value['ThanhTien'],$value['MaBenhNhan'],$value['ThucHien'],$value['GiaThueNgoaiThucHien'],$value['SLMoiNgay'],$value['SoNgay'],$_SESSION['user']['id_user'],array($check_con_25, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT) );
								 $data->query( $store_name4, $params4);	
						
						} 
							 
							 
						
					}else if($value['IDNhomCLS']==26){
					
					if($ktra_dtph==0){
						if($dem26==0){
							$dem26+=1;
							unset($params5);
							if($value['ThanhTien']==''){
								$value['ThanhTien']=NULL;
							}
							if($value['TongTienTheoNhom']==''){
								$value['TongTienTheoNhom']=NULL;
							}
							$store_name5="{call GD2_Kham_DTPhoiHop_TheoNhom_Insert (?,?,?,?,?,?,?,?,?,?,?,?,?,?)}";//tao bien khai bao store
							$params5 = array($value['IDLuotKham'],$value['IDNhomCLS'],$value['IDPhongChuyenMon'],$value['NguoiChiDinh'],$value['TrangThai'],$value['ThanhTien'],$value['TongTienTheoNhom'],$stt,$value['MaBenhNhan'],$value['ThucHien'],"DieuTriPhoiHop",$max,$_SESSION['user']['id_user'],array($check_26, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT) );
							 $data->query( $store_name5, $params5);	
							// echo "----".$check_26."----";
							
							}
						
							unset($params6);
							if($value['PhiThucHien']==''){
								$value['PhiThucHien']=NULL;
							}
							if($value['ThanhTien']==''){
								$value['ThanhTien']=NULL;
							}
							if($value['GiaThueNgoaiThucHien']==''){
								$value['GiaThueNgoaiThucHien']=NULL;
							}
							$store_name6="{call GD2_Kham_DieuTriphoiHop_Insert (?,?,?,?,?,?,?,?,?,?,?,?,?)}";//tao bien khai bao store
							$params6 = array($check_26,$value['IDLoaiKham'],$value['NguoiChiDinh'],$value['TrangThai'],$value['PhiThucHien'],$value['ThanhTien'],$value['MaBenhNhan'],$value['ThucHien'],$value['GiaThueNgoaiThucHien'],$value['SLMoiNgay'],$value['SoNgay'],$_SESSION['user']['id_user'],array($check_con_26, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT) );
							 $data->query( $store_name6, $params6);	
						}else{//neu co chi dinh vltl roi thi chi insert vao DieuTriphoiHop 
							unset($params6);
							if($value['PhiThucHien']==''){
								$value['PhiThucHien']=NULL;
							}
							if($value['ThanhTien']==''){
								$value['ThanhTien']=NULL;
							}
							if($value['GiaThueNgoaiThucHien']==''){
								$value['GiaThueNgoaiThucHien']=NULL;
							}
							$store_name6="{call GD2_Kham_DieuTriphoiHop_Insert (?,?,?,?,?,?,?,?,?,?,?,?,?)}";//tao bien khai bao store
							$params6 = array($idkham_dtph,$value['IDLoaiKham'],$value['NguoiChiDinh'],$value['TrangThai'],$value['PhiThucHien'],$value['ThanhTien'],$value['MaBenhNhan'],$value['ThucHien'],$value['GiaThueNgoaiThucHien'],$value['SLMoiNgay'],$value['SoNgay'],$_SESSION['user']['id_user'],array($check_con_26, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT) );
							$data->query( $store_name6, $params6);	
						}
					}
					
				}else if($value['IDNhomCLS']==23){	
					unset($params);
					if($value['PhiThucHien']==''){
						$value['PhiThucHien']=NULL;
					}
					if($value['ThanhTien']==''){
						$value['ThanhTien']=NULL;
					}
					if($value['GiaThueNgoaiThucHien']==''){
						$value['GiaThueNgoaiThucHien']=NULL;
					}
					if($value['ThoiGianTrungBinhThucHien']==''){
						$value['ThoiGianTrungBinhThucHien']=NULL;
					}
					$store_name7="{call GD2_DTPH_Kham_Insert (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)}";//tao bien khai bao store
					$params7 = array($value['IDLuotKham'],$value['IDLoaiKham'],$value['IDPhongChuyenMon'],$value['NguoiChiDinh'],$value['TrangThai'],$value['PhiThucHien'],$value['ThanhTien'],$stt,$value['ThucHien'],$value['GiaThueNgoaiThucHien'],$value['ThoiGianTrungBinhThucHien'],"PhauThuat",$value['MaBenhNhan'],$max,$_SESSION['user']['id_user'],array($check7, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT) );
					$data->query( $store_name7, $params7);
				
				}else if($value['IDNhomCLS']==52){	
					unset($params);
					if($value['PhiThucHien']==''){
						$value['PhiThucHien']=NULL;
					}
					if($value['ThanhTien']==''){
						$value['ThanhTien']=NULL;
					}
					if($value['GiaThueNgoaiThucHien']==''){
						$value['GiaThueNgoaiThucHien']=NULL;
					}
					if($value['ThoiGianTrungBinhThucHien']==''){
						$value['ThoiGianTrungBinhThucHien']=NULL;
					}
					$store_name8="{call GD2_DTPH_Kham_Insert (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)}";//tao bien khai bao store
					$params8 = array($value['IDLuotKham'],$value['IDLoaiKham'],$value['IDPhongChuyenMon'],$value['NguoiChiDinh'],$value['TrangThai'],$value['PhiThucHien'],$value['ThanhTien'],$stt,$value['ThucHien'],$value['GiaThueNgoaiThucHien'],$value['ThoiGianTrungBinhThucHien'],"KHHGD",$value['MaBenhNhan'],$max,$_SESSION['user']['id_user'],array($check8, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT) );
					$data->query( $store_name8, $params8);
				}else{
				unset($params);
				if($value['PhiThucHien']==''){
					$value['PhiThucHien']=NULL;
				}
				if($value['ThanhTien']==''){
					$value['ThanhTien']=NULL;
				}
				if($value['GiaThueNgoaiThucHien']==''){
					$value['GiaThueNgoaiThucHien']=NULL;
				}
				if($value['ThoiGianTrungBinhThucHien']==''){
					$value['ThoiGianTrungBinhThucHien']=NULL;
				}
				$store_name="{call GD2_DTPH_Kham_Insert (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)}";//tao bien khai bao store
				$params = array($value['IDLuotKham'],$value['IDLoaiKham'],$value['IDPhongChuyenMon'],$value['NguoiChiDinh'],$value['TrangThai'],$value['PhiThucHien'],$value['ThanhTien'],$stt,$value['ThucHien'],$value['GiaThueNgoaiThucHien'],$value['ThoiGianTrungBinhThucHien'],NULL,$value['MaBenhNhan'],$max,$_SESSION['user']['id_user'],array($check1, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT) );
				$data->query( $store_name, $params);
				}
		   }// end else if($value['Luu']!=1){
		}
		echo "id;".$check1; 
	   }   
}


?>