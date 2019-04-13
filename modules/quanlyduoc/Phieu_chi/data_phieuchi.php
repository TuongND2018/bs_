<?php

$tu_ngay='';
$den_ngay='';
$daduyet=0;
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
$store_name="{call [GD2_ThuTraNo_PhieuChiDuoc] (?,?,?)}";
$params = array($tu_ngay,$den_ngay,'PhieuChiDuoc');
//print_r($params);
$get_lich=$data->query( $store_name, $params);
$excute= new SQLServerResult($get_lich);
$tam= $excute->get_as_array();
$responce = new stdClass;

$i=0;
foreach ($tam as $row) {
if($row["NgayGio"]!='')
			$row["NgayGio"]=$row["NgayGio"]->format("H:i ".$_SESSION["config_system"]["ngaythang"]);
	else $row["NgayGio"]='';
if($row["ID_NguoiDuyet"]!='')
			 $daduyet=1;
	else $daduyet=0;
	
   $responce->rows[$i]['id']=$row["ID_ThuTraNo"];
    $responce->rows[$i]['cell']=array(
		$row["ID_ThuTraNo"],
		$row["MaPhieu"],
        $row["TenNCC"],
		$row["TenNCC"],
        $row["NgayGio"],
        $row["phieunhapkho"],
		$row["SoTien"],
        $row["NguoiChi"],
		$row["NguoiGiaoDich"],
        $row["GhiChu"],
        $daduyet,
        $row["nguoiduyet"],
		$row["ExtField1"],
		$row["ID_NhanVien"],
		$row["ID_NCC"],
		$row["ID_NhapKho"]
            );
     
    $i++; 
}  
echo json_encode($responce);
?>