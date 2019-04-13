<?php
$data= new SQLServer;//tao lop ket noi SQL
$store_name="{call GD2_DuTruKho_Soluong_GetAll()}";//tao bien khai bao store
$params = array();
$get=$data->query( $store_name,$params);//Goi store
$excute= new SQLServerResult($get);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 
$responce = new stdClass;
$i=0;
foreach ($tam as $row) {//duyet toan bo mang tra ve
    $responce->rows[$i]['id']=$row['ID_auto'];
    $responce->rows[$i]['cell']=array($row["TenBietDuoc"],
	$row["TenGoc"],
	$row["TenKho"],
	$row["Min"],
	$row["Max"],
	$row["ID_Thuoc"],
	$row["ID_Kho"]);
    $i++; 
}   
echo json_encode($responce);
?>