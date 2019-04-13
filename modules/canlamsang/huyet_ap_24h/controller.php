<?php
switch ($_GET["oper"]) {
    case "dathuchien":
        dathuchien();
        break;
    case "luudathuchien":
        luudathuchien();
        break;
    case "hoantat":
        hoantat();
        break;
     case "luuhoantat":
        luuhoantat();
        break;
     case "luudangkham":
        luudangkham();
        break;    
}	 		 

function dathuchien(){	
$check1='';
$data= new SQLServer;//tao lop ket noi SQL
	if($_GET["del"]!=""){
		$tam=explode("_",$_GET["del"]);
		for($i=0;$i<count($tam);$i++){
			$store_name3="{call GD2_HuyetAp24H_Delete (?,?)}";//tao bien khai bao store 
			$params3 = array($tam[$i],$_SESSION['user']['id_user']);
			$get=$data->query( $store_name3, $params3);
		}
	}
	if(isset($_POST['id'])){ 
		$stt=0;
		foreach ($_POST['id'] as $key => $value) {
			//print_r($value);
		$stt+=1;
			if($value['DaLuu']==""){
				$today = date('Y-m-d');
				$giodo= $today.' '.$value['GioDo'].':00';
				$store_name="{call GD2_HuyetAp24h_Insert (?,?,?,?,?,?,?,?,?,?)}";//tao bien khai bao store 
				$params = array($_GET['idkham'],$value['Ps'],$value['Pd'],$value['Hr'],'',$giodo,0,$value['GioDo'],$_SESSION['user']['id_user'],array($check1, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT) );
				$get=$data->query( $store_name, $params);
				echo $check1;
				
				
			}//if 
			else if($value['DaLuu']==1 && $value['Sua']==2){
				$today = date('Y-m-d');
				$giodo= $today.' '.$value['GioDo'].':00';
				$store_name2="{call GD2_HuyetAp24h_Update (?,?,?,?,?,?,?,?,?)}";//tao bien khai bao store 
				$params2 = array($value['ID_HA24h'],$value['Ps'],$value['Pd'],$value['Hr'],'',$giodo,0,$value['GioDo'],$_SESSION['user']['id_user']);
				$get=$data->query( $store_name2, $params2);
			
			}//else if
		
		}//for
		
	}
	$store_name4="{call GD2_HuyetAp24h_Kham_DaThucHien_Update (?,?,?,?,?)}";//tao bien khai bao store 
	$params4 = array($_GET['idkham'],$_GET['ketluan'],$_GET['nguoithuchien'],0,$_SESSION['user']['id_user']);
	$data->query( $store_name4, $params4);
	
}
function luudangkham(){
$check1='';
$data= new SQLServer;//tao lop ket noi SQL
	if($_GET["del"]!=""){
		$tam=explode("_",$_GET["del"]);
		for($i=0;$i<count($tam);$i++){
			$store_name3="{call GD2_HuyetAp24H_Delete (?,?)}";//tao bien khai bao store 
			$params3 = array($tam[$i],$_SESSION['user']['id_user']);
			$get=$data->query( $store_name3, $params3);
		}
	}
	if(isset($_POST['id'])){ 
		$stt=0;
		foreach ($_POST['id'] as $key => $value) {
			//print_r($value);
		$stt+=1;
			if($value['DaLuu']==""){
				$today = date('Y-m-d');
				$giodo= $today.' '.$value['GioDo'].':00';
				$store_name="{call GD2_HuyetAp24h_Insert (?,?,?,?,?,?,?,?,?,?)}";//tao bien khai bao store 
				$params = array($_GET['idkham'],$value['Ps'],$value['Pd'],$value['Hr'],'',$giodo,0,$value['GioDo'],$_SESSION['user']['id_user'],array($check1, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT) );
				$get=$data->query( $store_name, $params);
				echo $check1;
				
				
			}//if 
			else if($value['DaLuu']==1 && $value['Sua']==2){
				$today = date('Y-m-d');
				$giodo= $today.' '.$value['GioDo'].':00';
				$store_name2="{call GD2_HuyetAp24h_Update (?,?,?,?,?,?,?,?,?,?)}";//tao bien khai bao store 
				$params2 = array($value['ID_HA24h'],$value['Ps'],$value['Pd'],$value['Hr'],'',$giodo,0,$value['GioDo'],$_SESSION['user']['id_user']);
				$get=$data->query( $store_name2, $params2);
			
			}//else if
		
		}//for
		
	}
	$store_name4="{call GD2_HuyetAp24h_Kham_LuuDangKham_Update (?,?,?,?)}";//tao bien khai bao store 
	$params4 = array($_GET['idkham'],$_GET['ketluan'],0,$_SESSION['user']['id_user']);
	$data->query( $store_name4, $params4);
}
function luudathuchien(){
$check1='';
$data= new SQLServer;//tao lop ket noi SQL
	if($_GET["del"]!=""){
		$tam=explode("_",$_GET["del"]);
		for($i=0;$i<count($tam);$i++){
			$store_name3="{call GD2_HuyetAp24H_Delete (?,?)}";//tao bien khai bao store 
			$params3 = array($tam[$i],$_SESSION['user']['id_user']);
			$get=$data->query( $store_name3, $params3);
		}
	}
	if(isset($_POST['id'])){ 
		$stt=0;
		foreach ($_POST['id'] as $key => $value) {
			//print_r($value);
		$stt+=1;
			if($value['DaLuu']==""){
				$today = date('Y-m-d');
				$giodo= $today.' '.$value['GioDo'].':00';
				$store_name="{call GD2_HuyetAp24h_Insert (?,?,?,?,?,?,?,?,?,?)}";//tao bien khai bao store 
				$params = array($_GET['idkham'],$value['Ps'],$value['Pd'],$value['Hr'],'',$giodo,0,$value['GioDo'],$_SESSION['user']['id_user'],array($check1, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT) );
				$get=$data->query( $store_name, $params);
				echo $check1;
				
				
			}//if 
			else if($value['DaLuu']==1 && $value['Sua']==2){
				$today = date('Y-m-d');
				$giodo= $today.' '.$value['GioDo'].':00';
				$store_name2="{call GD2_HuyetAp24h_Update (?,?,?,?,?,?,?,?,?)}";//tao bien khai bao store 
				$params2 = array($value['ID_HA24h'],$value['Ps'],$value['Pd'],$value['Hr'],'',$giodo,0,$value['GioDo'],$_SESSION['user']['id_user']);
				$get=$data->query( $store_name2, $params2);
				
				//print_r($params2);
			
			}//else if
		
		}//for
		
	}
	$store_name4="{call GD2_HuyetAp24h_Kham_LuuDaThucHien_Update (?,?,?,?,?)}";//tao bien khai bao store 
	$params4 = array($_GET['idkham'],$_GET['ketluan'],$_GET['nguoithuchien'],0,$_SESSION['user']['id_user']);
	$data->query( $store_name4, $params4);
}
function hoantat(){
$check1='';
$data= new SQLServer;//tao lop ket noi SQL
	if($_GET["del"]!=""){
		$tam=explode("_",$_GET["del"]);
		for($i=0;$i<count($tam);$i++){
			$store_name3="{call GD2_HuyetAp24H_Delete (?,?)}";//tao bien khai bao store 
			$params3 = array($tam[$i],$_SESSION['user']['id_user']);
			$get=$data->query( $store_name3, $params3);
		}
	}
	if(isset($_POST['id'])){ 
		$stt=0;
		foreach ($_POST['id'] as $key => $value) {
			//print_r($value);
		$stt+=1;
			if($value['DaLuu']==""){
				$today = date('Y-m-d');
				$giodo= $today.' '.$value['GioDo'].':00';
				$store_name="{call GD2_HuyetAp24h_Insert (?,?,?,?,?,?,?,?,?,?)}";//tao bien khai bao store 
				$params = array($_GET['idkham'],$value['Ps'],$value['Pd'],$value['Hr'],'',$giodo,0,$value['GioDo'],$_SESSION['user']['id_user'],array($check1, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT) );
				$get=$data->query( $store_name, $params);
				echo $check1;
				
				
			}//if 
			else if($value['DaLuu']==1 && $value['Sua']==2){
				$today = date('Y-m-d');
				$giodo= $today.' '.$value['GioDo'].':00';
				$store_name2="{call GD2_HuyetAp24h_Update (?,?,?,?,?,?,?,?,?)}";//tao bien khai bao store 
				$params2 = array($value['ID_HA24h'],$value['Ps'],$value['Pd'],$value['Hr'],'',$giodo,0,$value['GioDo'],$_SESSION['user']['id_user']);
				$get=$data->query( $store_name2, $params2);
			
			}//else if
		
		}//for
		
	}
	$store_name4="{call GD2_HuyetAp24h_Kham_HoanTat_Update (?,?,?,?,?,?)}";//tao bien khai bao store 
	$params4 = array($_GET['idkham'],$_GET['ketluan'],$_GET['nguoithuchien'],$_GET['nguoihoantat'],0,$_SESSION['user']['id_user']);
	$data->query( $store_name4, $params4);
}
function luuhoantat(){
$check1='';
$data= new SQLServer;//tao lop ket noi SQL
	if($_GET["del"]!=""){
		$tam=explode("_",$_GET["del"]);
		for($i=0;$i<count($tam);$i++){
			$store_name3="{call GD2_HuyetAp24H_Delete (?,?)}";//tao bien khai bao store 
			$params3 = array($tam[$i],$_SESSION['user']['id_user']);
			$get=$data->query( $store_name3, $params3);
		}
	}
	if(isset($_POST['id'])){ 
		$stt=0;
		foreach ($_POST['id'] as $key => $value) {
			//print_r($value);
		$stt+=1;
			if($value['DaLuu']==""){
				$today = date('Y-m-d');
				$giodo= $today.' '.$value['GioDo'].':00';
				$store_name="{call GD2_HuyetAp24h_Insert (?,?,?,?,?,?,?,?,?,?)}";//tao bien khai bao store 
				$params = array($_GET['idkham'],$value['Ps'],$value['Pd'],$value['Hr'],'',$giodo,0,$value['GioDo'],$_SESSION['user']['id_user'],array($check1, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT) );
				$get=$data->query( $store_name, $params);
				echo $check1;
				
				
			}//if 
			else if($value['DaLuu']==1 && $value['Sua']==2){
				$today = date('Y-m-d');
				$giodo= $today.' '.$value['GioDo'].':00';
				$store_name2="{call GD2_HuyetAp24h_Update (?,?,?,?,?,?,?,?,?)}";//tao bien khai bao store 
				$params2 = array($value['ID_HA24h'],$value['Ps'],$value['Pd'],$value['Hr'],'',$giodo,0,$value['GioDo'],$_SESSION['user']['id_user']);
				$get=$data->query( $store_name2, $params2);
				print_r($params2);
			
			}//else if
		
		}//for
		
	}
	$store_name4="{call GD2_HuyetAp24h_Kham_LuuHoanTat_Update (?,?,?,?,?,?)}";//tao bien khai bao store 
	$params4 = array($_GET['idkham'],$_GET['ketluan'],$_GET['nguoithuchien'],$_GET['nguoihoantat'],0,$_SESSION['user']['id_user']);
	$data->query( $store_name4, $params4);
}
?>

