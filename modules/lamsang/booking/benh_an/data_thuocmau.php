<?php

$data= new SQLServer;
$store_name="{call Gd2_combobox_dialog(?,?,?,?)}";
$params = array('DonThuocMauChiTiet','ID_Thuoc,LieuDungHangNgay,CachDung','ID_DonThuocMau='.$_GET['id_donthuoc'],'');
$get_danh_muc=$data->query( $store_name, $params);
$excute= new SQLServerResult($get_danh_muc);
$tam= $excute->get_as_array();
$responce = new stdClass;

$i=0;

foreach ($tam as $row) {//duyet toan bo mang tra ve
    $responce->rows[$i]['id']=$row["ID_Thuoc"];
    $responce->rows[$i]['cell']=array($row["ID_Thuoc"],$row["LieuDungHangNgay"],$row["CachDung"]);
    $i++; 
}   
echo json_encode($responce);
?>