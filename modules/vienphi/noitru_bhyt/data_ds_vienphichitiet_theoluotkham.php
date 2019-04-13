<?php

$data = new SQLServer;


if(isset($_GET["ID_LuotKham"])){	
		$store_name = "{call GD2_chitietdichvunoitru_bhyt_thanhtoan (?)}";
		$params = array($_GET["ID_LuotKham"]);
}else{
		$store_name = "{call GD2_chitietdichvunoitru_bhyt_thutrano (?)}";
		$params = array($_GET["ID_ThuTraNo"]);
	
}

if(isset($_GET["ko_hotro"])){	
		$ko_hotro = 1;	
}else{
		$ko_hotro = 0;	
}

$get_lich = $data->query($store_name, $params);
//print_r($params);
$excute = new SQLServerResult($get_lich);
$tam = $excute->get_as_array();
$responce = new stdClass;
$i = 0;
foreach ($tam as $row) {
if($row["ExtField1"]=='Giuongbenh'){
	if($row["ngaybh"]==0){
		$solan =	1;
	}
	else{
		$solan =	$row["ngaybh"];
	}
}else{
	$solan =	$row["solan"]*$row["songay"];
}

if($ko_hotro==1){
	$row["hotro"]=0;
}
    $responce->rows[$i]['id'] = $i;
    $responce->rows[$i]['cell'] = array(
        $row["ID_LoaiKham"],
		$row["ID_Kham"],       
        $row["TenLoaiKham"],  
        $row["PhiThucHien"],
		$row["GiaBaoHiem"],		
		$row["solan"],
		$row["songay"],
		$row["PhanTramCungChiTra"],
	   ($row["GiaBaoHiem"]*$solan)-$row["ThanhTienCungChiTra"],
		intval($row["ThanhTienCungChiTra"]),
		intval($row["hotro"]),
		$row["PhiThucHien"]-($row["GiaBaoHiem"]*$solan)+$row["ThanhTienCungChiTra"]-$row["hotro"],
        $row["TenNhom"],         
		$row["ExtField1"],
		$row["id"],
		$row["ngaybh"],
		$row["ngay"],
		$row["gio"],
		$row["GiaThueNgoaiThucHien"],
    );

    $i++;
}
echo json_encode($responce);
?>