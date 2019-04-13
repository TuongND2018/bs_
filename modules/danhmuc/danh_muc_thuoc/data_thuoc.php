<?php
$data= new SQLServer;//tao lop ket noi SQL
$store_name="{call GD2_Thuoc_SelectAll()}";//tao bien khai bao store
$params = array();//tao param cho store 	
$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store
$excute= new SQLServerResult($get_danh_muc_phong_ban);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 
$responce = new stdClass;

$i=0;
foreach ($tam as $row) {//duyet toan bo mang tra ve
    $responce->rows[$i]['id']=$row["ID_Thuoc"];
    $responce->rows[$i]['cell']=array(
    	$row["ID_Thuoc"],
    	$row["MaThuoc"],
    	$row["TenBietDuoc"],
    	$row["Barcode"],
    	$row["TenGoc"],
    	$row["TenHoaDon"],
    	$row["TenKhac"],
    	$row["HoatChatChinh"],
    	$row["HamLuong"],
    	$row["DonGia"],
    	$row["ID_NuocSanXuat"],
    	$row["ID_NhomThuoc"],
    	$row["HanSuDung"],
    	$row["QuyCach"],
    	$row["ID_NhomBenh"],
    	$row["ID_DonViTinh"],
    	$row["ID_NSXThuoc"],
    	$row["SignNumber"],
    	$row["ID_DuongDung"],
    	$row["TonKhoToiThieu"],
    	$row["GhiChu"],
    	$row["HeSoDieuChinhGiaBan"],
    	$row["HeSoDieuChinhGiaBan_HoaDon"],
    	$row["DonGia_HoaDon"],
    	$row["PhanTramThue"],
    	$row["LaThuoc"],
    	$row["Active"],
    	$row["DoUuTien"],
    	$row["ThuocBHYT"],
    	$row["BHYTNoiTruOrNgTru"],
    	$row["IsHide4GPP"],
    	$row["ID_DuongDung"],
        $row["Id_NhomphanLoaiThuoc"]
        );
    $i++; 
}   
echo json_encode($responce);
?>