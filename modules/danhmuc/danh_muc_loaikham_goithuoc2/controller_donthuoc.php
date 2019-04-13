<?php
switch ($_GET["oper"]) {
    case "add":
        add("GD2_DM_DonThuocMau_Insert");
        break;
    case "edit":
        edit("GD2_DMDonThuocMau_Update");
        break;
    case "del":
        del("GD2_DMDonThuocMau_Del");
        break;
}	 		 

function add($store_name){	
	$check1='';
	$data= new SQLServer;//tao lop ket noi SQL
	$store_name="{call $store_name(?,?,?,?,?)}";//tao bien khai bao store
	$params = array(
	   trim($_GET['tendonthuoc']," "),
	   trim($_GET['ghichu']," "),
	   $_GET['bstao_hidden'],
	   $_SESSION['user']['id_user'],
	   array($check1, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT)
	);
	$get=$data->query( $store_name, $params);
	echo ';'.$check1;
}
function edit($store_name){
	$data= new SQLServer;//tao lop ket noi SQL
	$store_name="{call $store_name (?,?,?,?,?)}";//tao bien khai bao store
	$params = array(
	   $_GET['id'],
	   trim($_GET['tendonthuoc']," "),
	   trim($_GET['ghichu']," "),
	   $_GET['bstao_hidden'],
	   $_SESSION['user']['id_user']
	);
$get=$data->query( $store_name, $params);
}
function del($store_name){
	$check1="";
	$data= new SQLServer;//tao lop ket noi SQL
	$store_name="{call $store_name (?,?)}";//tao bien khai bao store
	$params = array( 
                 array($_POST["id"]),
				 array($_SESSION["user"]["id_user"]),
                 );	
	$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store	
}
?>

