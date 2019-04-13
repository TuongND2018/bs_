<?php

$data= new SQLServer;
if(isset($_GET["id_benhnhan"])){
$check1='';
$params = array($_GET["id_benhnhan"]);
$store_name="{call GD2_TTlk_getby(?)}";
$get=$data->query( $store_name,$params);
$excute= new SQLServerResult($get);
$tam= $excute->get_as_array();
$params1 = array( 
$tam[0]['ID_LuotKham'],
$tam[0]['ID_LoaiKhamLSMacDinh'],
$tam[0]['ID_PhongKhamVatLy'],
$_SESSION["user"]["id_user"],
$_SESSION["user"]["id_user"],
$_SESSION["user"]["id_user"],
$_SESSION["user"]["id_user"],
'DangKham',
$tam[0]['GiaBaoChoBN'],
$tam[0]['GiaBaoChoBN'],
0,
$tam[0]['GiaBaoChoBN'],
0,
0,
$tam[0]['MaBenhNhan'],
0,
1,
0,
0,
0,
array($check1, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT)
);
$store_name1="{call GD2_kham_insert(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)}";
$get_danh_muc_phong_ban=$data->query( $store_name1,$params1);
echo $check1;
$params2 = array( 
$check1,
$tam[0]['ID_LuotKham'],
$_GET["id_benhnhan"],
$_SESSION["user"]["id_user"],
'',
'',
2,
1,
''
);
//print_r($params2);
$store_name2="{call Gd2_donthuoc_insert(?,?,?,?,?,?,?,?,?)}";
$get=$data->query( $store_name2,$params2);
}elseif(isset($_GET["id_kham"])){
	$params = array($_GET["id_kham"]);
	$store_name="{call GD2_Kham_UpdateTrangThai(?)}";
	$get=$data->query( $store_name,$params);	
}
//print_r($params1);
?>
