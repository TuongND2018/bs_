<?php
$data= new SQLServer;
$store_name="{call GD2_Get_DM_PhongBan_DsBenhNhanNoiTru()}";
$params = array();
$get_lich=$data->query( $store_name, $params);
$excute= new SQLServerResult($get_lich);
$tam= $excute->get_as_array();
//print_r($tam);
$responce = new stdClass;
$i=0;
foreach ($tam as $row) {
  $responce->rows[$i]['id']=$row["ID_PhongBan"];
   $responce->rows[$i]['cell']=array($row["TenPhongBan"],
        $row["TenTang"],
        $row["MoTa"],
       
            );
    $i++; 
} 

echo json_encode($responce);
?>
