<?php
switch ($_GET["oper"]) {
    case "add":
        add("GD2_LamSang_DieuTriTaiNha_Insert");
        break;
    case "edit":
        edit("GD2_LamSang_DieuTriTaiNha_Update");
        break;
    case "update":
        update();
        break;
    case "del":
        del("GD2_NhatKyDieuTriTaiNha_Delete");
        break;  
}	 		 

function add($store_name){	
	$check1="";	 
	$data= new SQLServer;//tao lop ket noi SQL
	$store_name="{call $store_name (?,?,?)}";//tao bien khai bao store
	$params = array($_SESSION["user"]["id_user"],$_GET["ID_Kham"], array($check1, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));//tao param cho store 
	$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store	
	
}
function edit($store_name){
	print_r(count($_POST['rows']));			 
	$data= new SQLServer;//tao lop ket noi SQL
	$store_name="{call $store_name (?,?,?)}";
	for ($i=0;$i<=count($_POST['rows'])-1;$i++){
		$params = array($_POST['rows'][$i]["ID_NhatKyDieuTriTaiNha"],$_POST['rows'][$i]["GhiChu"],$_SESSION["user"]["id_user"]);
		$get_danh_muc_phong_ban=$data->query( $store_name, $params);
	}	
	
}
function update(){
	//print_r(count($_POST['rows']));			 
	$data= new SQLServer;//tao lop ket noi SQL
	if($_GET['tenloaikham']==="Đơn thuốc"){
		$store_name="{call GD2_LamSang_DieuTriTaiNha_UpdateDonThuoc (?,?,?)}";
		$params = array($_GET["ID_Kham"],$_GET["trangthai"],$_SESSION["user"]["id_user"]);
		$get_danh_muc_phong_ban=$data->query( $store_name, $params);
	}
	else {
		$store_name="{call GD2_LamSang_DieuTriTaiNha_UpdateKhamDTTN (?,?,?)}";
		$params = array($_GET["ID_Kham"],$_GET["trangthai"],$_SESSION["user"]["id_user"]);
		$get_danh_muc_phong_ban=$data->query( $store_name, $params);
	}
	
		
	
}
function del($store_name){
	//print_r($_POST);
	$check1="";
	$data= new SQLServer;//tao lop ket noi SQL
	$store_name="{call $store_name (?,?)}";//tao bien khai bao store
	$params = array( 
                array($_GET["id"]),
				 array($_SESSION["user"]["id_user"])
               );	
	$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store	
	//echo $check1;
}
?>

