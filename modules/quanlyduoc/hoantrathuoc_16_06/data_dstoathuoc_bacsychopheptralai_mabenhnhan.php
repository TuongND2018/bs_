<?php

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

$data= new SQLServer;
$store_name="{call GD2_DSThuocBacSyChoPhepTraLaiByTuNgayDenNgayAndMaBenhNhan (?,?,?)}";
//$params = array( $tu_ngay,$den_ngay,"HuyBo","Cancel");
$params = array($tu_ngay,$den_ngay,$_GET["mabenhnhan"]);
//print_r($params);
$get_lich=$data->query( $store_name, $params);
$excute= new SQLServerResult($get_lich);
$tam= $excute->get_as_array();
$responce = new stdClass;

$i=0;
foreach ($tam as $row) {
	if($row["NgayXuat"]!='')
			$row["NgayXuat"]=$row["NgayXuat"]->format($_SESSION["config_system"]["ngaythang"]);
	else $row["NgayXuat"]='';
	
	if($row["NgayKeDon"]!='')
			$row["NgayKeDon"]=$row["NgayKeDon"]->format($_SESSION["config_system"]["ngaythang"]);
	else $row["NgayKeDon"]='';
	
    $responce->rows[$i]['id']=$row["ID_XuatKho"];
    $responce->rows[$i]['cell']=array(
		$row["HoTenBN"],
        $row["NgayXuat"],
        $row["NguoiXuat"],
		$row["NgayKeDon"],
        $row["SoNgayThuoc"],
		$row["GhiChu"],//bac si ke don
        $row["DaThanhToan"]
        );
     
    $i++; 
}  
echo json_encode($responce);
?>