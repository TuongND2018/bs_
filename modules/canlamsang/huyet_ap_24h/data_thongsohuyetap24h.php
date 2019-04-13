<?php
$data= new SQLServer;//tao lop ket noi SQL
$params = array($_GET["idkham"]);//tao param cho store 
$store_name="{call spHuyetAp24h_SelectAllByID_Kham(?)}";//tao bien khai bao store
$get=$data->query( $store_name,$params);//Goi store
$excute= new SQLServerResult($get);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 
$responce = new stdClass;
$i=0;
foreach ($tam as $row) {//duyet toan bo mang tra ve
    $responce->rows[$i]['id']=$row["ID_HA24h"];
    $responce->rows[$i]['cell']=array(
	$row["ID_HA24h"],
	$row["ExtField2"],
	$row["Ps"],
	$row["Pd"],
	$row["HR"],
	1
	);
    $i++; 
}
echo json_encode($responce);
?>
