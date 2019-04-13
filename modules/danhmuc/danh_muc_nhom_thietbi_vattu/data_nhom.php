<?php
$data= new SQLServer;
$store_name="{call GD2_DM_Nhom_ThietBi_VatTuSelectByID_ParentIsNull()}";
$params = array();
$get=$data->query( $store_name, $params);
$excute= new SQLServerResult($get);
$tam= $excute->get_as_array(); 
$i=0;
$responce='';
foreach ($tam as $row) {
	if($i==0){
		$tam='';
	}else{
		$tam=';';
	}
	
	$responce.= $tam.$row["ID_Nhom"].':'.$row["TenNhom"];  
	$i++;
}   
 echo $responce;

?>