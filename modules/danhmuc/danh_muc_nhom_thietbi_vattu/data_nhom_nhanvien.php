<?php
$data= new SQLServer;
$store_name="{call GD2_DM_Nhom_ThietBi_VatTuSelectByID_ParentIsNullAndID_NhanVien(?)}";
$params = array($_SESSION['user']['id_user']);
$get=$data->query( $store_name, $params);
$excute= new SQLServerResult($get);
$tam= $excute->get_as_array(); 
if(count($tam)>0){
 echo ';;'.$tam[0]['ID_Nhom'];	
}else{
 echo ';;0';	
}

?>