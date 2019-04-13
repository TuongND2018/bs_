<?php
if(isset($_GET['from_day'])){

	$from_day1=convert_date($_GET['from_day']).' 0:00:00'; ;
}
if(isset($_GET['to_day'])){
	$to_day1=convert_date($_GET['to_day']).' 23:59:59' ;
}
$param1=$from_day1;
$param2=$to_day1;

$store_name="{call GD2_LaySuatAnTheoNgay(?,?)}";//tao bien khai bao store
$data= new SQLServer;//tao lop ket noi SQL
$params = array($param1,$param2);//tao param cho store 
//print_r($params);
$get_danh_muc_phong_ban=$data->query( $store_name,$params);//Goi store
$excute= new SQLServerResult($get_danh_muc_phong_ban);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 
$responce = new stdClass;
$i=0;
foreach ($tam as $row) {//duyet toan bo mang tra ve
	if($row["Ngay"]!=''){
	$row["Ngay"]=$row["Ngay"]->format($_SESSION["config_system"]["ngaythang"]);
	
	}
	if($row["NgayGioDat"]!=''){
	$row["NgayGioDat"]=$row["NgayGioDat"]->format("H:i ".$_SESSION["config_system"]["ngaythang"]);
	
	}
	if($row["NgayGioSua"]!=''){
	$row["NgayGioSua"]=$row["NgayGioSua"]->format("H:i ".$_SESSION["config_system"]["ngaythang"]);
	
	}
	if($row["NgayGioHuy"]!=''){
	$row["NgayGioHuy"]=$row["NgayGioHuy"]->format("H:i ".$_SESSION["config_system"]["ngaythang"]);
	
	}
	if($row["HopLe"]!=0){
		$row["HopLe"]='Hợp lệ';
	}else{$row["HopLe"]='Không hợp lệ';}
	
    $responce->rows[$i]['id']=$row["ID_SuatAn"];
    $responce->rows[$i]['cell']=array($row["ID_SuatAn"],$row["Ngay"],$row["TenPhongBan"],$row["NguoiChiuTien"],$row["TenThucDon"],$row["SoLuong"],$row["DonGia"],$row["ThanhTien"],$row["TrangThai2"],$row["NguoiDat"],$row["NguoiSua"],$row["NgayGioSua"],$row["NguoiHuy"],$row["NgayGioHuy"],$row["KieuBuoi"],$row["Id_Tang"],$row["HopLe"] ); 
    $i++; 
}
echo json_encode($responce);
?>
