<?php
if(isset($_GET['idnew'])){
	$id=$_GET['idnew'];	
}else{
	$id=0;	
}
$data= new SQLServer;//tao lop ket noi SQL
$store_name="{call GD2_DM_Kho_ThietBi_VatTu_SelectAll()}";//tao bien khai bao store
$params = array();//tao param cho store 	
$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store
$excute= new SQLServerResult($get_danh_muc_phong_ban);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 
$responce = new stdClass;

$i=0;
foreach ($tam as $row) {//duyet toan bo mang tra ve
	if($id!=0 && $id==$row["ID_Kho"]){	
		$tam=1;
	}else{
		$tam=0;
	}
    $responce->rows[$i]['id']=$row["ID_Kho"];
    $responce->rows[$i]['cell']=array(
    	$row["TenKho"],
    	$row["STT"],
		$row["GhiChu"],
    	$row["SuDung"],
		$tam
        );
    $i++; 
}   
echo json_encode($responce);
?>