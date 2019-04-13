<?php
$data= new SQLServer;
$store_name="{call GD2_GetThuocSapHetHanSuDungBySoNgayConHieuLuc (?,?)}";
$params = array($_GET['idkho'],$_GET['ngayconlai']);
$get_lich=$data->query( $store_name, $params);
$excute= new SQLServerResult($get_lich);
$tam= $excute->get_as_array();
$responce = new stdClass;

$i=0;
foreach ($tam as $row) {
/*	if($row["NgayLapPhieu"]!='')
			$row["NgayLapPhieu"]=$row["NgayLapPhieu"]->format($_SESSION["config_system"]["ngaythang"]);
	else $row["NgayLapPhieu"]='';
	*/
	if($row["NgayHetHan"]!='')
			$row["NgayHetHan"]=$row["NgayHetHan"]->format($_SESSION["config_system"]["ngaythang"]);
	else $row["NgayHetHan"]='';
	
    $responce->rows[$i]['id']=$i;
    $responce->rows[$i]['cell']=array($row["TenBietDuoc"],
		$row["TenDonViTinh"],
        $row["SoLoNhaSanXuat"],
        $row["NgayHetHan"],
		$row["SoNgayConHieuLuc"],
        $row["SoluongConLai"]
        );
     
    $i++; 
}  
echo json_encode($responce);
?>