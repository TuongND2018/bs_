<?php
$data= new SQLServer;
$store_name="{call GD2_GetDsBenhNhanDaNhapVienNoiTruByID_PhongBan (?)}";
$params = array($_GET['id_phongban']);
$get_lich=$data->query( $store_name, $params);
$excute= new SQLServerResult($get_lich);
$tam= $excute->get_as_array();
$responce = new stdClass;
$i=0;
foreach ($tam as $row) {
    if($row["ThoiGianVaoKham"]!='')
			$row["ThoiGianVaoKham"]=$row["ThoiGianVaoKham"]->format($_SESSION["config_system"]["ngaythang"]);
	else $row["ThoiGianVaoKham"]='';
	
    $responce->rows[$i]['id']=$row["MaBenhNhan"];
    $responce->rows[$i]['cell']=array($row["MaBenhNhan"],
	$row["HoTenBN"],
	$row["Tuoi"],
	$row["Gioi"],
	$row["LoaiDoiTuongKham"],
	$row["Khoa"]
        );
     
    $i++; 
}  
echo json_encode($responce);
?>
