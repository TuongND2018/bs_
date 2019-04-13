<?php
$data= new SQLServer;//tao lop ket noi SQL
$store_name="{call GD2_Thuoc_SelectAll_tam()}";//tao bien khai bao store
$params = array();//tao param cho store 	
$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store
$excute= new SQLServerResult($get_danh_muc_phong_ban);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 
global $responce;

$i=0;
foreach ($tam as $row) {//duyet toan bo mang tra ve
  //
  
  $responce[] = array(
  'id'               => $row["ID_Thuoc"],   
  'id_thuoc'    	 => $row["ID_Thuoc"],
  'TenBietDuoc' 	 => $row["TenBietDuoc"],
  'MaThuoc'               => $row["MaThuoc"],
 // 'Barcode'     	 => $row["TenBietDuoc"], 
  'TenGoc'      	 => $row["TenGoc"], 
 // 'TenHoaDon'   	 => $row["TenHoaDon"],  
  'HoatChatChinh'    => $row["HoatChatChinh"],
  'HamLuong'  		 => $row["HamLuong"],
  'DonGia'  		 => $row["DonGia"],
  'ID_NuocSanXuat'   => $row["ID_NuocSanXuat"],
  'parent' 	         => $row["ID_NhomThuoc"],
 /// 'HanSuDung'  		 => $row["HanSuDung"],
  'QuyCach'    		 => $row["QuyCach"],
  'ID_NhomBenh'      => $row["ID_NhomBenh"],
  'ID_DonViTinh'     => $row["ID_DonViTinh"],
  'ID_NSXThuoc'      => $row["ID_NSXThuoc"],
  'ID_DuongDung'     => $row["ID_DuongDung"],
  'TonKhoToiThieu'   => $row["TonKhoToiThieu"],
  'GhiChu'  		 => $row["GhiChu"],
  'HeSoDieuChinhGiaBan'  => $row["HeSoDieuChinhGiaBan"],
//  'HeSoDieuChinhGiaBan_HoaDon'  => $row["HeSoDieuChinhGiaBan_HoaDon"],
//  'DonGia_HoaDon'   => $row["DonGia_HoaDon"],
  'PhanTramThue'     => $row["PhanTramThue"],
  'LaThuoc'          => $row["LaThuoc"],
  'Active'           => $row["Active"],
  'DoUuTien'         => $row["DoUuTien"],
  'ThuocBHYT'        => $row["ThuocBHYT"],
  'BHYTNoiTruOrNgTru'=> $row["BHYTNoiTruOrNgTru"],
 // 'IsHide4GPP'      => $row["IsHide4GPP"],
  'ID_DuongDung'     => $row["ID_DuongDung"],
//  'Id_NhomphanLoaiThuoc'  => $row["Id_NhomphanLoaiThuoc"],
//	'TenNhomThuoc'  => $row["TenNhomThuoc"],
  'indent'           => $row["nLevel"],
  'Family'           => $row["Family"],
  'isleaf'           => $row["isleaf"],
  'NuocSanXuat'      => $row["TenDayDu"],
  'HangSanXuat'      => $row["TenNhaSanXuat"],
  'TenDonViTinh'     => $row["TenDonViTinh"],
  'DonGia_BHYT'      => $row["DonGia_BHYT"],
  'HideVienPhi'      => $row["HideVienPhi"],
  'HideBHYT'         => $row["HideBHYT"],
  'PhanHangBV'       => $row["PhanHangBV"],
  'SignNumber'       => $row["SignNumber"],
  'Giasauthue'       => intval($row["DonGia"]*(1+($row["PhanTramThue"]/100))),
	);
  
    $i++; 
}   
echo json_encode($responce);
?>