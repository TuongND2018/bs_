<?php
$data= new SQLServer;
$store_name="{call GD2_DM_nhanvien_get_nhanvien()}";
$params = array();
$get=$data->query( $store_name, $params);
$excute= new SQLServerResult($get);
$tam= $excute->get_as_array(); 
$responce = new stdClass;
$i=0;
foreach ($tam as $row) {//duyet toan bo mang tra ve
    $responce->rows[$i]['id']=$row["id"];
    $responce->rows[$i]['cell']=array($row["label"],$row["hoten"],$row["TenPhongBan"]);
     
    $i++; 
}  
echo json_encode($responce);

?>