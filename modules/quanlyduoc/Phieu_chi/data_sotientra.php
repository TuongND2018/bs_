<?php
$data= new SQLServer;
$store_name="{call GD2_phieunhap_select_byidncc (?)}";
$params = array($_GET["ID_NCC"]);
//print_r($params);
$get_lich=$data->query( $store_name, $params);
$excute= new SQLServerResult($get_lich);
$tam= $excute->get_as_array();
$responce = new stdClass;

$i=0;
foreach ($tam as $row) {//duyet toan bo mang tra ve
	if($row["NgayDuyet"]!='')
			$row["NgayDuyet"]=$row["NgayDuyet"]->format("H:i ".$_SESSION["config_system"]["ngaythang"]);
	else $row["NgayDuyet"]='';
    $responce->rows[$i]['id']=$row["ID_NhapKho"];
    $responce->rows[$i]['cell']=array($row["MaPhieu"],$row["NgayDuyet"],$row["GhiChu"],$row["TienThanhToan"],
					$row["TienDaThanhToan"],$row["SoTienConLai"],$row["ID_NhapKho"]);
     
    $i++; 
}  
echo json_encode($responce);
?>