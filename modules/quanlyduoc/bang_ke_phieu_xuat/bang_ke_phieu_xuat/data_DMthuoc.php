<?php

/*$page = $_GET['page']; // get the requested page
$limit = $_GET['rows']; // get how many rows we want to have into the grid
$sidx = $_GET['sidx']; // get index row - i.e. user click to sort
$sord = $_GET['sord']; // get the direction*/
if (isset($_GET["TenBietDuoc"])){
	$TenBietDuoc=$_GET["TenBietDuoc"];
}else{
	$TenBietDuoc="";	
}
if (isset($_GET["TenNhomThuoc"])){
	$TenNhomThuoc=$_GET["TenNhomThuoc"];
}else{
	$TenNhomThuoc="";	
}
$data= new SQLServer;//tao lop ket noi SQL
$store_name="{call GD2_DM_Thuoc_Autocomplex(?,?)}";//tao bien khai bao store
$params = array($TenBietDuoc,$TenNhomThuoc);
$get_danh_muc=$data->query( $store_name, $params);//Goi store
$excute= new SQLServerResult($get_danh_muc);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 
$responce = new stdClass;

$i=0;

foreach ($tam as $row) {//duyet toan bo mang tra ve
    $responce->rows[$i]['id']=$row["ID_Thuoc"];
    $responce->rows[$i]['cell']=array($row["MaThuoc"],$row["TenDonViTinh"],$row["TenBietDuoc"],$row["TenNhomThuoc"]);
    $i++; 
}   
echo json_encode($responce);
?>