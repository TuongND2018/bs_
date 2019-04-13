<?php
if(count($_POST['id'])>0){
	$thanhtientralai=0;
	$thanhtienvon=0;
	$id_nhapkho='';
	$solo='';
	$check1='';
	$check2='';
	$ngaythuctra= convert_date($_GET['ngaythuctra'])." 00:00:00";
	$data= new SQLServer;	
	for($i=0;$i<=count($_POST['id'])-1;$i++){		
		$thanhtientralai=$thanhtientralai+($_POST['id'][$i]['soluong']*$_POST['id'][$i]['dongiatralai']);
		$thanhtienvon=$thanhtienvon+($_POST['id'][$i]['soluong']*$_POST['id'][$i]['dongiavon']);
	}
		//echo $thanhtienvon.'__'.$thanhtientralai;
	$begin_tran=$data->begin_tran();
	$store_name="{call GD2_HoanTra_PhieuNhap_Add_New (?,?,?,?,? ,?,?,?,?)}";//tao bien khai bao store 
	$params = array('',
			$_GET['kho'],
			0,
			$thanhtienvon,
			'',
			$_SESSION['user']['id_user'],
			NULL,//iddonthuoc
			$thanhtientralai,
			array($check1, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT)
	 );
	$get=$data->query( $store_name, $params);
	if( !$get ){
		$data->rollback();
		return;
	}
	$store_name_taolo="{call GD2_TaoLoHeThongPhieuNhapChitiet (?,?) }";//tao bien khai bao store
	$params_taolo = array(array($_SESSION["user"]["year_work"]),array($solo,SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_STRING (SQLSRV_ENC_CHAR),SQLSRV_SQLTYPE_VARCHAR(50)) );
	$get_solo=$data->query( $store_name_taolo, $params_taolo);
	foreach ($_POST['id'] as $key => $value) {
			if($value['soluong']>0){
				$ngaysx=NULL;
				$ngayhh='';
				if($value['ngayhethan']!=''){
					$ngayhh=convert_date($value['ngayhethan']);
				}else{
					$ngayhh=NULL;	
				}
				$store_name4="{call Gd2_PhieuNhapChiTiet_Add (?,?,?,?,? ,?,?,?,?,? ,?,?)}";//tao bien khai bao store 
				$params4 = array($value['idthuoc'],$value['solonsx'],nchuyen($value['soluong']),$value['dongiavon'],$value['dongiavon']*$value['soluong'],$ngaysx,$ngayhh,$solo,$check1,$_SESSION["user"]["year_work"],$_SESSION['user']['id_user'],array($check2, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT) );
				$get2=$data->query( $store_name4, $params4);
				//print_r($params4);
				if( !$get2 ){
					$data->rollback();
					return;
				}
			}
		}
		$store_name5="{call gd2_phieutrathuoc_datra(?)}";//tao bien khai bao store 
		$params5 = array($_GET['id_phieutra']);
		$get5=$data->query( $store_name5, $params5);
	//	print_r($params5 );
		if( !$get5 ){
			$data->rollback();
			return;
		}
	$data->commit();
	echo "||".$check1."||";
}
function nchuyen($tam){
	$tam1=explode(".",$tam);
	return $tam1[0];
}
?>

