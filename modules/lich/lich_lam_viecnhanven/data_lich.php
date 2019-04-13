<?php
if (isset($_GET["searchString"])){
	$search_string=$_GET["searchString"];
}else{
	$search_string="";	
}

$page = $_GET['page']; // get the requested page
$limit = $_GET['rows']; // get how many rows we want to have into the grid
$sidx = $_GET['sidx']; // get index row - i.e. user click to sort
$sord = $_GET['sord']; // get the direction
$idnhanvien = $_GET['idnhanvien'];
$from = '2013-7-31';
$data= new SQLServer;//tao lop ket noi SQL 
/*if( $count >0 ){
	$total_pages = ceil($count/$limit);
} else {
	$total_pages = 0;
}*/
$store_name="{call GD2_LichLamViec_SelectByIDNhanVienAndDate (?,?,?)}";//tao bien khai bao store
$params = array($idnhanvien,$from,$from);//tao param cho store 
//print_r($params) ;
$get_lich=$data->query( $store_name, $params);//Goi store
$excute= new SQLServerResult($get_lich);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 
$responce = new stdClass;
$responce->page = 1;
$responce->total = 1; 
$kiemtra=true;


$i=0;
foreach ($tam as $row) {//duyet toan bo mang tra ve
    $responce->rows[$i]['id']=$row["ID_NhanVien"];
    $responce->rows[$i]['cell']=array($row["ID_NhanVien"],$row["NickName"],$row["ID_LichLamViec"],$row["GioBatDau"]->format('H:i:s'),$row["GioKetThuc"]->format('H:i:s'));
    $i++; 
}   
echo json_encode($responce);
?>