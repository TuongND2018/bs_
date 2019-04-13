<?php
/*
$tu_ngay='';
$den_ngay='';
if(isset($_GET["tu_ngay"]))
{
   $tu_ngay= convert_date($_GET["tu_ngay"]).' 0:00:00';
}
else
{
    $tu_ngay=date("Y-m-d").' 0:00:00';
}
if(isset($_GET["den_ngay"]))
{
$den_ngay= convert_date($_GET["den_ngay"]).' 23:59:59';
}
else
{
     $den_ngay=date("Y-m-d").' 23:59:59';
}
*/
$data= new SQLServer;
$store_name="{call GD2_GetDonThuocTraLaiMaBenhNhan (?)}";
$params = array($_GET["mabenhnhan"]);

/*$store_name="{call GD2_GetDonThuocTraLaiByMaBenhNhan (?,?,?)}";
$params = array($tu_ngay,$den_ngay,$_GET["mabenhnhan"]);*/
//print_r($params);
$get_lich=$data->query( $store_name, $params);
$excute= new SQLServerResult($get_lich);
$tam= $excute->get_as_array();
$responce = new stdClass;

$i=0;
foreach ($tam as $row) {
	if($row["NgayLapPhieu"]!='')
			$row["NgayLapPhieu"]=$row["NgayLapPhieu"]->format($_SESSION["config_system"]["ngaythang"]);
	else $row["NgayLapPhieu"]='';
	
	if($row["NgayDuyet"]!='')
			$row["NgayDuyet"]=$row["NgayDuyet"]->format($_SESSION["config_system"]["ngaythang"]);
	else $row["NgayDuyet"]='';
	
    $responce->rows[$i]['id']=$row["ID_NhapKho"];
    $responce->rows[$i]['cell']=array($row["MaPhieu"],
		$row["NgayLapPhieu"],
        $row["ID_NhanVien"],
        $row["NgayDuyet"],
        $row["ID_NguoiDuyet"],
		$row["MaBenhNhan"],
        $row["HoTenBN"],
		$row["GhiChu"]
        );
     
    $i++; 
}  
echo json_encode($responce);
?>