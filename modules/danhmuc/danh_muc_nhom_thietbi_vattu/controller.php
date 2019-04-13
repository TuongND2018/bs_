<?php

switch ($_GET["oper"]) {
    case "add":
        add("GD2_DM_Nhom_ThietBi_VatTu_Insert");
        break;
    case "edit":
        edit("GD2_DM_Nhom_ThietBi_VatTu_Update");
        break;
    case "del":
        del("GD2_DM_Nhom_ThietBi_VatTu_Delete");
        break;
}	 		 

function add($store_name){	
	$data= new SQLServer;//tao lop ket noi SQL
	$check1='';
	if($_POST['NhomCha']=='')
		$_POST['NhomCha']=NULL;		
	$store_name1="{call $store_name (?,?,?,?,?, ?)}";//tao bien khai bao store
	$params1 = array($_POST['TenNhom'],
					$_POST['MaNhom'],
					$_POST['NhomCha'],
					$_POST['GhiChu'],
					$_SESSION['user']['id_user'],
					array($check1, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT)
				);
	$get1=$data->query( $store_name1, $params1);
	echo ';;'.$check1;
}
function edit($store_name){
	$data= new SQLServer;//tao lop ket noi SQL
	if($_POST['NhomCha']=='')
		$_POST['NhomCha']=NULL;	
	$store_name1="{call $store_name (?,?,?,?,?, ?)}";//tao bien khai bao store
	$params1 = array($_POST['id'],
					$_POST['TenNhom'],
					$_POST['MaNhom'],
					$_POST['NhomCha'],
					$_POST['GhiChu'],
					$_SESSION['user']['id_user']
				);
	$get1=$data->query( $store_name1, $params1);
	echo ';;'.$_POST['id'];
}
function del($store_name){
	$data= new SQLServer;//tao lop ket noi SQL
	$store_name1="{call $store_name (?,?)}";//tao bien khai bao store
	$params1 = array($_POST['id'],
					$_SESSION['user']['id_user']
				);
	$get1=$data->query( $store_name1, $params1);
}
?>

