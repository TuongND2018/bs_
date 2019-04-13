<?php
$data= new SQLServer;//tao lop ket noi SQL
$store_name="{call GD2_LayDSKhamLamSangChuaHoanTat(?,?)}";//tao bien khai bao store
$params = array($_SESSION["user"]["id_user"],'Xong');//tao param cho store 
$get=$data->query( $store_name, $params);//Goi store
$excute= new SQLServerResult($get);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc
$responce = new stdClass;
$i=0;
foreach ($tam as $row) {//duyet toan bo mang tra ve
	if($row["NgayGioTao"]!='')
		$row["NgayGioTao"]=$row["NgayGioTao"]->format('H:i '.$_SESSION["config_system"]["ngaythang"]);
	else $row["NgayGioTao"]='';
    $responce->rows[$i]['id']=$row["ID_Kham"];
    $responce->rows[$i]['cell']=array($row["NgayGioTao"],$row["MaBenhNhan"],$row["ID_BenhNhan"],$row["TenBenhNhan"],$row["Tuoi"],$row["GioiTinh"],$row["TenLoaiKham"],$row["BenhAn"]);
    $i++; 
}   
echo json_encode($responce);
?>