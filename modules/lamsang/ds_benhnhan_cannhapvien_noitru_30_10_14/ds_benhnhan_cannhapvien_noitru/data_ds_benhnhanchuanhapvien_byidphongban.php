<?php
$data= new SQLServer;
$store_name2="{call GD2_TABLEWITHPAGE_GETBY(?,?,?,?,?,?,?,?)}";//tao bien khai bao store
$params2 = array('VarName','0','1000000','VarName','ASC','SysVars'," VarName='GD2_SoNgayMacDinhDsBnNhapVien'",'*');//tao param cho store
$get_lich2=$data->query( $store_name2, $params2);
$excute2= new SQLServerResult($get_lich2);
$tam2= $excute2->get_as_array();

$store_name="{call GD2_GetDsBenhNhanChuaNhapVienNoiTruByID_PhongBan (?,?)}";
$params = array($_GET['id_phongban'],$tam2[0]['DefaultValue']);
$get_lich=$data->query( $store_name, $params);
$excute= new SQLServerResult($get_lich);
$tam= $excute->get_as_array();
$responce = new stdClass;
$i=0;
foreach ($tam as $row) {
    if($row["ThoiGianVaoKham"]!='')
			$row["ThoiGianVaoKham"]=$row["ThoiGianVaoKham"]->format($_SESSION["config_system"]["ngaythang"]);
	else $row["ThoiGianVaoKham"]='';
	
    $responce->rows[$i]['id']=$row["ID_BenhNhan"];
    $responce->rows[$i]['cell']=array($row["MaBenhNhan"],
		$row["HoTenBN"],
        $row["Tuoi"],
        $row["Gioi"],
        $row["LoaiDoiTuongKham"],
        $row["TenPhongBan"],
        $row["ThoiGianVaoKham"],
		$row["ChanDoanNoiGioiThieu"],
		$row["ID_Khoa"],
		$row["Khoa"],
		$row["ID_LuotKham"],
        $row["DiaChiBaoTin"],
		$row["ID_BacSiDieuTri"]
        );
     
    $i++; 
}  
echo json_encode($responce);
?>
