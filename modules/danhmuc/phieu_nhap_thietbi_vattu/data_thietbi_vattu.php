<?php
$data= new SQLServer;
$store_name="{call GD2_DM_ThietBi_VatTuSelectBySuDung()}";
$params = array();
$get_danh_muc=$data->query( $store_name, $params);
$excute= new SQLServerResult($get_danh_muc);
$tam= $excute->get_as_array();
$responce = new stdClass;
$i=0;
foreach ($tam as $row) {
    $responce->rows[$i]['id']=$row["ID_Loai"];
    $responce->rows[$i]['cell']=array($row["TenLoai"],$row["TenNhom"]);
    $i++; 
}   
echo json_encode($responce);
?>