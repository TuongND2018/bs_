<?php
if (isset($_GET["searchString"])){
	$search_string=$_GET["searchString"];
}else{
	$search_string="";	
}
$table = "DM_LoaiKham";
$data= new SQLServer;//tao lop ket noi SQL
$params = array();//tao param cho store 
$store_name="{call GD2_DM_LoaiKham_SelectAll()}";//tao bien khai bao store
$get_danh_muc_phong_ban=$data->query( $store_name,$params);//Goi store
$excute= new SQLServerResult($get_danh_muc_phong_ban);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 
//$responce->userdata["ids"] = $ids;
$responce = new stdClass;
$i=0;
foreach ($tam as $row) {//duyet toan bo mang tra ve
    $responce->rows[$i]['id']=$row["ID_LoaiKham"];
    $responce->rows[$i]['cell']=array($row["ID_LoaiKham"],$row["TenLoaiKham"],$row["MaVietTat"],$row["MaVietTat_BN"],$row["ID_NhomCLS"],$row["MoTa"],$row["GiaBaoChoBN"],$row["GiaThueNgoaiThucHien"],$row["ThoiGianTrungBinhThucHien"],$row["ThoiGianCoKetQua"],$row["GhiChu"],$row["LoiKhuyen"],$row["Active"],$row["STT"],$row["CLS"],$row["XetNghiem"],$row["CoLuuKQInRieng"],$row["DieuTriTaiNha"],$row["CoMauNhapKQ"],$row["PathToTemplateFile"],$row["TenLoaiKham_EN"],$row["ReportName"],$row["CoTheKeToa"],$row["ThuocNhomXepHangCLS"],$row["PhanTramDieuChinhGiaTaiNha"],$row["PhuThuThucHienTaiNha"],$row["GiaTaiNhaDieuChinhTheoNhom"],$row["CoFormChucNangRieng"],$row["SoPhimLonTieuHao"],$row["SoPhimNhoTieuHao"],$row["SoPhimNhuAnhTieuHao"],$row["TuyenHuyen"],$row["TuyenTinh"],$row["TuyenTrungUong"],$row["GiaBaoHiem"],$row["GiaPhuThuBenhVien"],$row["ID_Nhom_BHYT"],$row["TenBHYT"],$row["Color"],$row["ID_auto"]);
    $i++; 
}
echo json_encode($responce);
?>