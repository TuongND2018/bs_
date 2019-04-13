<?php
$data= new SQLServer;//tao lop ket noi SQL
$store_name="{call GD2_GetAllPhieuXuatDieuChinh(?,?)}";//tao bien khai bao store
$params = array(convert_date($_GET['tungay'])." 00:00:00",convert_date($_GET['denngay'])." 23:59:59");
$get=$data->query( $store_name,$params);//Goi store
$excute= new SQLServerResult($get);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 
$responce = new stdClass;
$i=0;
foreach ($tam as $row) {//duyet toan bo mang tra ve
	if($row["NgayNhapKho"]!='')
			$row["NgayNhapKho"]=$row["NgayNhapKho"]->format("H:i ".$_SESSION["config_system"]["ngaythang"]);
	else $row["NgayNhapKho"]='';
	
	if($row["NgayDuyetNhap"]!='')
			$row["NgayDuyetNhap"]=$row["NgayDuyetNhap"]->format("H:i ".$_SESSION["config_system"]["ngaythang"]);
	else $row["NgayDuyetNhap"]='';
	
	if($row["NgayDuyetXuat"]!='')
			$row["NgayDuyetXuat"]=$row["NgayDuyetXuat"]->format("H:i ".$_SESSION["config_system"]["ngaythang"]);
	else $row["NgayDuyetXuat"]='';
	
    $responce->rows[$i]['id']=$row['ID_NhapKho'];
    $responce->rows[$i]['cell']=array($row["KhoXuat"],
	$row["KhoNhap"],
	$row["NickNameNguoiTao"],
	$row["NgayNhapKho"],
	$row["NickNameNguoiDuyetXuat"],
	$row["NgayDuyetXuat"],
	$row["NickNameNguoiDuyetNhap"],
	$row["NgayDuyetNhap"]	
	);
    $i++; 
}   
echo json_encode($responce);
?>