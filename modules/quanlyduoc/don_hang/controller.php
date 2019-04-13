<?php
$Year =$_SESSION["user"]["year_work"];
//print_r ($_POST);
$_POST["oper"]="add";
$_POST["ghichu"]="";
//foreach($_POST as $key => $value){
//print_r($value);	
//}
if ($_POST["oper"] ==="add") {
	$ID_return="";
	$data= new SQLServer;//tao lop ket noi SQL
	$store_name="{call GD2_Dutruthuoc_MaxSoPhieu (?)}";//tao bien khai bao store
	$params = (array ($Year));//tao param cho store 
	$get_max=$data->query( $store_name, $params);//Goi store
	$excute= new SQLServerResult($get_max);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
	$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 
 	$SoPhieuDuTru=$tam[0]["Max"]+1;
//	echo $SoPhieuDuTru;
	$GhiChu = $_POST["ghichu"];
	$IdUser_login =$_SESSION["user"]["id_user"];
	$store_name1="{call testdutru (?,?,?,?,?)}";//tao bien khai bao store	
	$params1 = (array (
						array($Year),
						array($SoPhieuDuTru),
						array($GhiChu),
						array($IdUser_login),
						array($ID_return,SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT)
	
	)); 
	$get=$data->query( $store_name1, $params1);//Goi store	
	
	$excute1= new SQLServerResult($get);
	//$tam1= $excute1->get_as_array();
	echo $ID_return;
	//print_r($get);
}

?>

