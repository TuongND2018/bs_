<?php
$data= new SQLServer;//tao lop ket noi SQL
$store_name="{call GD2_GetDSBenhNhanTaoBenhAnNoiTruAll()}";//tao bien khai bao store
$params = array();
$get=$data->query( $store_name,$params);//Goi store
$excute= new SQLServerResult($get);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 
$responce = new stdClass;
$i=0;
foreach ($tam as $row) {//duyet toan bo mang tra ve
$giotao='';
	if($row["NgayTaoBenhAn"]!=''){
			$ngaytao=$row["NgayTaoBenhAn"];
			$row["NgayTaoBenhAn"]=$row["NgayTaoBenhAn"]->format($_SESSION["config_system"]["ngaythang"]);
			$giotao=$ngaytao->format('H:i');
	}else{
		 $row["NgayTaoBenhAn"]='';
		 $giotao='';
	}
    $responce->rows[$i]['id']=$row['ID_BenhAnNoiTru'];
    $responce->rows[$i]['cell']=array($row["MaBenhNhan"],
	$row["HoLotBenhNhan"],
	$row["TenBenhNhan"],
	$row["Tuoi"],
	$row["Gioi"],
	$row["LoaiDoiTuongKham"],
	$row["DiaChi"],
	$row["NguoiTaoBenhAn"],
	$giotao,
	$row["NgayTaoBenhAn"],
	$row["Ten_LoaiBenhAnNoiTru"],
	$row["CD_NoiChuyenDen"],
	$row["CD_KhoaDieuTri"],
	$row["BSDieuTri"],
	$row["ID_LuotKham"],
	$row["ID_LoaiBenhAnNoiTru"],
	$row["ID_BenhNhan"],
	$row["ID_PhongBan"],
	$row["NgayTaoBenhAn"]
	);
    $i++; 
}   
echo json_encode($responce);
?>