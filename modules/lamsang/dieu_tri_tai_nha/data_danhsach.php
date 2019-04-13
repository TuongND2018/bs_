<?php

if(isset($_GET['from_day'])){

	$from_day1=convert_date($_GET['from_day']) ;
}
if(isset($_GET['to_day'])){
	$to_day1=convert_date($_GET['to_day']) ;
}
$param1=$from_day1.' 00:00:00' ;
$param2=$to_day1.' 23:59:59';
$kiemtra=$_GET['kiemtra'];
//$param1='2013/01/01';
//$param2='2014/02/01';
$store_name="{call [GD2_OutPatient_SelectAll](?,?,?,?)}";//tao bien khai bao store
$data= new SQLServer;//tao lop ket noi SQL
$params = array(1,$param1,$param2,$kiemtra);//tao param cho store 
//print_r($params);
$get_danh_muc_phong_ban=$data->query( $store_name,$params);//Goi store
$excute= new SQLServerResult($get_danh_muc_phong_ban);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 
$responce = new stdClass;
$i=0;
foreach ($tam as $row) {//duyet toan bo mang tra ve
if($row["NgayGioTao"]!='')
			$row["NgayGioTao"]=$row["NgayGioTao"]->format("H:i ".$_SESSION["config_system"]["ngaythang"]);
	else $row["NgayGioTao"]='';
if($row["NgayHetThuoc"]!='')
			$row["NgayHetThuoc"]=$row["NgayHetThuoc"]->format($_SESSION["config_system"]["ngaythang"]);
	else $row["NgayHetThuoc"]='';
if($row["KiHopDong"]=='')
			$row["KiHopDong"]=0;
	
	
    $responce->rows[$i]['id']=$i;
    $responce->rows[$i]['cell']=array($row["ID_Kham"],$row["MaBenhNhan"],$row["HoLotBenhNhan"],$row["TenBenhNhan"],$row["DiaChi"],$row["DienThoai1"],$row["Tuoi"],$row["GioiTinh"],$row["TenLoaiKham"],$row["NickName"],$row["NgayGioTao"],$row["SoNgayThuoc"],$row["NgayHetThuoc"],$row["ID_LuotKham"],$row["KiHopDong"],$row["KetThucDieuTriTaiNha"]);
    $i++; 
}
echo json_encode($responce);
?>
