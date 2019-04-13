<?php

$data= new SQLServer;
$store_name="{call GD2_GetPhieuXuatCHiTietBy_ID_XuatKho (?)}";
//$params = array( $tu_ngay,$den_ngay,"HuyBo","Cancel");
$params = array($_GET['idxuatkho']);
//print_r($params);
$get_lich=$data->query( $store_name, $params);
$excute= new SQLServerResult($get_lich);
$tam= $excute->get_as_array();
$responce = new stdClass;

$i=0;
foreach ($tam as $row) {
	if($row["NgaySanXuat"]!='')
			$row["NgaySanXuat"]=$row["NgaySanXuat"]->format($_SESSION["config_system"]["ngaythang"]);
	else $row["NgaySanXuat"]='';
	
	if($row["NgayHetHan"]!='')
			$row["NgayHetHan"]=$row["NgayHetHan"]->format($_SESSION["config_system"]["ngaythang"]);
	else $row["NgayHetHan"]='';
	
	if($row["ThanhTienTraLai"])
		$row["ThanhTienTraLai"]=$row["ThanhTienTraLai"];
		else
			$row["ThanhTienTraLai"]=0;
	if($row["SoLuongTraLai"])
		$row["SoLuongTraLai"]=$row["SoLuongTraLai"];
		else
			$row["SoLuongTraLai"]=0;
	$ttv=0;
	$ttv=$row["SoLuongTraLai"]*$row["DonGiaVon"];
	
	$nsx='';
	$nhh='';
	
	$nsx=$row["NgaySanXuat"];
	
	$nhh=$row["NgayHetHan"];
	
    $responce->rows[$i]['id']=$row["ID_XuatKhoChiTiet"];
    $responce->rows[$i]['cell']=array($row["TenBietDuoc"],
		$row["SoLo"],
        $row["SoLuong"],
        $row["DonGia"],
        $row["ThanhTien"],
		 $row["SoLuongTraLai"],
		$row["DonGiaVon"],
		$ttv,
		 $row["DonGia"],
		 $row["ThanhTienTraLai"]* $row["SoLuong"],
		 $nsx,
		 $nhh,
		 $row["ID_Thuoc"],
		 '',
		 $row["SoLo"],
		 $row["SoLoNhaSanXuat"],//$row["SoLoNhaSanXuat"]  co so lo nha san xuat de loc du lieu trung lap thuoc. Tamj thoi bo do du lieu nguoi khac lam form nhap kho nen du lieu k dung tam thoi bo,neu sai thi sua lai proc lai
		 $row["ID_DonThuocCT"]
        );
     
    $i++; 
}  
echo json_encode($responce);
?>