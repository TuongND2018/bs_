<?php
$data= new SQLServer;
$store_name="{call GD2_LoaiKham_PhuThuThucHienTaiNha_get()}";
$params = array();
$get=$data->query( $store_name, $params);
$excute= new SQLServerResult($get);
$tam= $excute->get_as_array(); 

$i=0;


 foreach ($tam as $row) {
 $responce[$i] = array('id' => $row["ID_LoaiKham"], 'DieuTriTaiNha' => $row["DieuTriTaiNha"], 'PhuThuThucHienTaiNha' => $row["PhuThuThucHienTaiNha"], 'GiaBaoChoBN' => $row["GiaBaoChoBN"], 'ID_NhomCLS' => $row["ID_NhomCLS"]);  
  $i++; 
 }   
 echo json_encode($responce);

?>