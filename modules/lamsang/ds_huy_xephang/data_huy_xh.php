<?php
$data= new SQLServer;//tao lop ket noi SQL
$params = array();//tao param cho store 
$store_name="{call GD2_DS_Huy_xephangLS()}";//tao bien khai bao store
$get_danh_muc_phong_ban=$data->query( $store_name,$params);//Goi store
$excute= new SQLServerResult($get_danh_muc_phong_ban);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 
//$responce->userdata["ids"] = $ids;
$responce = new stdClass;
$i=0;
foreach ($tam as $row) {//duyet toan bo mang tra ve
    if($row["ThoiGianVaoKham"]!='')
		$row["ThoiGianVaoKham"]=$row["ThoiGianVaoKham"]->format('H:i');
	if($row["GioiTinh"]==0) 
		$row["GioiTinh"]='Nam';
	else 
		$row["GioiTinh"]='Nữ';
	$responce->rows[$i]['id']=$row["ID_LuotKham"];
    $responce->rows[$i]['cell']=array($row["ID_LuotKham"],$row["MaBenhNhan"],$row["HoTen"],$row["Tuoi"],$row["GioiTinh"],$row["TenPhanLoaiKham"],$row["ThoiGianVaoKham"]);
    $i++; 
}
echo json_encode($responce);
?>