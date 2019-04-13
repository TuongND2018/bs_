<?php
$data= new SQLServer;//tao lop ket noi SQL 
 

 $param1=$_GET["id"];

$store_name="{call GD2_SelectBenhNhanByID_LuotKham(?)}";//tao bien khai bao store
//$params = array("ID_NhapKho",$start,$end,$sidx,$sord,"Gd2_PhieuNhap_2013","","*");//tao param cho store 
$params = array($param1);//tao param cho store 
//print_r($params) ;
$get=$data->query( $store_name, $params);//Goi store
$excute= new SQLServerResult($get);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 
$count=  count($tam);


$kiemtra=true;


$i=0;
if($_GET['ac']=='hoten'){
	foreach ($tam as $row) {//duyet toan bo mang tra ve
			
		   $responce=$row["HoLotBenhNhan"]." ".$row["TenBenhNhan"];
			 
			$i++; 
	} 
}
if($_GET['ac']=='id'){
	foreach ($tam as $row) {//duyet toan bo mang tra ve
			
		   $responce=$row["ID_BenhNhan"];
			 
			$i++; 
	} 
}
if($_GET['ac']=='ma'){
	foreach ($tam as $row) {//duyet toan bo mang tra ve
			
		   $responce=$row["MaBenhNhan"];
			 
			$i++; 
	} 
}
echo $responce;
?>