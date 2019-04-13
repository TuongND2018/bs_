<?php
$data= new SQLServer;//tao lop ket noi SQL
$params = array($_GET['kho'],$_GET['thang'],$_GET['nam']);//tao param cho store 
$store_name="{call GD2_TonKhoFixSelectByKho(?,?,?)}";//tao bien khai bao store
$get_danh_muc_phong_ban=$data->query( $store_name,$params);//Goi store
$excute= new SQLServerResult($get_danh_muc_phong_ban);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 
$responce = new stdClass;

$i=0;
foreach ($tam as $row) {//duyet toan bo mang tra ve
	if($row["NgayHetHan"]!=''){
		$row["NgayHetHan"]=$row["NgayHetHan"]->format($_SESSION["config_system"]["ngaythang"]);
	}
    $responce->rows[$i]['id']=$row["ID_TonKho"];
    $responce->rows[$i]['cell']=array('',
								$row["ID_TonKho"],
								$row["DonGia"],
								$row["ID_Thuoc"],
								'',
								$row["SoLuong"],
								$row["ThanhTien"],
								$row["NgayHetHan"],
								$row["SoLoNhaSanXuat"],
								1
							);
    $i++; 
}
echo json_encode($responce);
?>