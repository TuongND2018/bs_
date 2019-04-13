<?php
$data= new SQLServer;//tao lop ket noi SQL
$store_name="{call GD2_GetThongTinLuotKhamNoiTruByID_LuotKham(?)}";//tao bien khai bao store
$params = array($_GET['idluotkham']);
$get=$data->query( $store_name,$params);//Goi store
$excute= new SQLServerResult($get);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 
echo ';;'.$tam[0]['ID_LuotKham'].';;'.$tam[0]['ID_BenhNhan'].';;'.$tam[0]['ID_PhongBan'].';;'.$tam[0]['TenPhongBan'].';;'.$tam[0]['HoTenBenhNhan'].';;'.$tam[0]['DaThanhToanBill'].';;';
?>