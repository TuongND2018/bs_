<?php
 
	$data= new SQLServer;//tao lop ket noi SQL
	$params = array($_GET["idkho"]);//tao param cho store 
	$store_name="{call KHODUOC_TONHIENTAI(?)}";//tao bien khai bao store
	$get_danh_muc_phong_ban=$data->query( $store_name,$params);//Goi store
	$excute= new SQLServerResult($get_danh_muc_phong_ban);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
	$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 
	$responce = new stdClass;
	//ID_Kho	id_thuoc	tengoc	SL_TonT12_2014	SL_N	SL_X	TonHienTai
//4	771	Ovestin 1mg	0	0	0	0
	//$responce->rows[0]['id']=$row["ID_NCC"];
   // $responce->rows[0]['cell']=array('Tất cả');
	$i=0;

	foreach ($tam as $row) {//duyet toan bo mang tra ve
    $responce->rows[$i]['id']=$row["id_thuoc"];
    $responce->rows[$i]['cell']=array($row["id_thuoc"],$row["tengoc"],$row["SL_TonT12_2014"],$row["SL_N"],$row["SL_X"],$row["TonHienTai"]);
    $i++; 
}   
	echo json_encode($responce);
?>