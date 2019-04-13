<?php
switch ($_GET["oper"]) {
    case "dathuchientiemtruyen":
        dathuchientiemtruyen($_GET["iddonthuoc"],$_GET["nval"]);
        break; 
	case "luudieuduong":
		luudieuduong();
		break;   
	case "luughichu":
		luughichu();
		break; 
	case "dtph_dathuchien": 
		dtph_dathuchien($_GET["iddtph"],$_GET["nval"]);
		break;  
	case "luuchidinhdieutri":
		luuchidinhdieutri();
		break;    
}	 		 

function luughichu(){
	//print_r($_POST);
	$iddonthuoc= $_POST["iddonthuoc"];
	$ghichu= $_POST["ghichu"];
	$data= new SQLServer;//tao lop ket noi SQL
	$chuoi='(?,?,?)';
	$params=  array( $iddonthuoc,$ghichu,$_SESSION["user"]["id_user"]);
	$store_name="{call GD2_DonThuocUpdateGhiChuChoDieuDuongByID_DonThuoc $chuoi}";//tao bien khai bao store
	$check=$data->query( $store_name, $params);
	echo $check;
	}
function dathuchientiemtruyen($iddonthuoc,$val){
	//echo $iddonthuoc."---".$val;
	$data= new SQLServer;//tao lop ket noi SQL
	$chuoi='(?,?,?)';
	$params=  array( $iddonthuoc,$val,$_SESSION["user"]["id_user"]);
	$store_name="{call GD2_DonThuoc_DaThucHienTiemTruyen_updateByID_DonThuoc $chuoi}";//tao bien khai bao store
	$check=$data->query( $store_name, $params);
	echo $check;
}
function dtph_dathuchien($id_dtph,$val){
	//echo $iddonthuoc."---".$val;
	if($val==1){
		$val="Xong";
	}else{
		$val="DangCho";
	}
	echo $id_dtph."---".$val;
	$data= new SQLServer;//tao lop ket noi SQL
	$chuoi='(?,?,?)';
	$params=  array( $id_dtph,$val,$_SESSION["user"]["id_user"]);
	$store_name="{call GD2_DieuTriPhoiHopUpdateID_TrangThaiByID_DieuTriPhoiHop $chuoi}";//tao bien khai bao store
	$check=$data->query( $store_name, $params);
	echo $check;
}
function luudieuduong(){
	$check1='';
    $data= new SQLServer;//tao lop ket noi SQL
	
	if($_GET["del"]!=""){
		$tam=explode("_",$_GET["del"]);
		for($i=0;$i<count($tam);$i++){
			$store_name3="{call GD2_INFUSION_delete (?,?)}";//tao bien khai bao store 
			$params3 = array($tam[$i],$_SESSION['user']['id_user']);
			$get=$data->query( $store_name3, $params3);
		}
	}
	
	if(isset($_POST['id'])){ 
		$stt=0;
		foreach ($_POST['id'] as $key => $value) {
		$stt+=1;
			if($value['DaLuu']==""){
				$ngay=convert_date($value['NgayThucHien'])." ".$value['GioThucHien'];
				$store_name="{call GD2_INFUSION_insert (?,?,?,?,?,?,?,?)}";//tao bien khai bao store 
				$params = array($value['ID_Kham'],$value['ID_Thuoc'],$value['SoLuong'],$value['ID_DuongDung'],$value['GhiChu'],$ngay,$_SESSION['user']['id_user'],array($check1, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT) );
				$get=$data->query( $store_name, $params);
				echo $check1;
				
				
			}//if 
			else if($value['DaLuu']==1 && $value['Sua']==2){
				$store_name2="{call GD2_INFUSION_update (?,?,?,?)}";//tao bien khai bao store 
				$params2 = array($value['ID_Ifusion'],$value['SoLuong'],$value['GhiChu'],$_SESSION['user']['id_user']);
				$get=$data->query( $store_name2, $params2);
			
			}//else if
		
		}//for
		
	}

}

function luuchidinhdieutri(){
	$check1='';
    $data= new SQLServer;//tao lop ket noi SQL
	
	if($_GET["del"]!=""){
		$tam=explode("_",$_GET["del"]);
		for($i=0;$i<count($tam);$i++){
			echo $tam[$i]."+++";
			$store_name3="{call GD2_INFUSION_delete (?,?)}";//tao bien khai bao store 
			$params3 = array($tam[$i],$_SESSION['user']['id_user']);
			$get=$data->query( $store_name3, $params3);
		}
	}
	
	if(isset($_POST['id'])){ 
		$stt=0;
		foreach ($_POST['id'] as $key => $value) {
		$stt+=1;
			if($value['DaLuu']==""){
				$ngay=convert_date($value['NgayThucHien'])." ".$value['GioThucHien'];
				$store_name="{call GD2_DTPH_INFUSION_insert (?,?,?,?,?,?)}";//tao bien khai bao store 
				$params = array($value['ID_Kham'],$value['ID_DieuTriPhoiHop'],$value['GhiChu'],$ngay,$_SESSION['user']['id_user'],array($check1, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT) );
				$get=$data->query( $store_name, $params);
				echo $check1;
				
				
			}//if 
			else if($value['DaLuu']==1 && $value['Sua']==2){
				$store_name2="{call GD2_INFUSION_update (?,?,?,?)}";//tao bien khai bao store 
				$params2 = array($value['ID_Ifusion'],'',$value['GhiChu'],$_SESSION['user']['id_user']);
				$get=$data->query( $store_name2, $params2);
			
			}//else if
		
		}//for
		
	}

}
?>

