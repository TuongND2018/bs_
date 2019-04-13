<?php

$table = "DM_NhanVien";
$data= new SQLServer;//tao lop ket noi SQL
$params = array();//tao param cho store 
$store_name="{call GD2_NhanVien_SelectAll()}";//tao bien khai bao store
$get_danh_muc_phong_ban=$data->query( $store_name,$params);//Goi store
$excute= new SQLServerResult($get_danh_muc_phong_ban);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 
//$responce->userdata["ids"] = $ids;
$responce = new stdClass;
$i=0;
foreach ($tam as $row) {//duyet toan bo mang tra ve
    if($row["NgaySinh"]!=""){
    $row["NgaySinh"]=$row["NgaySinh"]->format('Y-m-d');
   }
   if
   ($row["NgayVaoLam"]!=""){
    $row["NgayVaoLam"]=$row["NgayVaoLam"]->format('Y-m-d');
   }
    $responce->rows[$i]['id']=$row["ID_NhanVien"];
    $responce->rows[$i]['cell']=array($row["ID_NhanVien"],$row["MaNV"],$row["CanhBao"],$row["ID_PhongBan"],$row["HoLotNhanVien"],$row["TenNhanVien"],$row["HinhNhanVien"],$row["GioiTinh"],$row["ID_DanToc"],$row["ID_QuocTich"],$row["CMND"],$row["HoChieu"],
        $row["ID_ChucVu"],$row["ID_ChucDanh"],$row["DiaChi"],$row["Mobile"],$row["HomePhone"],$row["Email"],$row["YahooID"],$row["SkypeID"],$row["NgaySinh"],$row["NgayVaoLam"],$row["ID_TrinhDo"],$row["ID_LoaiTinhLuong"],$row["ChamCongBangMay"],
        $row["TaiKhoanNH"],$row["ID_NganHang"],$row["MaSoThueCaNhan"],$row["SoBaoHiem"],$row["GhiChu"],$row["DaNghiViec"],$row["HinhChuKy"],$row["IsDoctor"],$row["IsCTVBenNgoai"],$row["AllowLogin"],$row["NickName"],$row["UserName"],$row["PassWord"],
        $row["Disable"]);
    $i++; 
}
echo json_encode($responce);
?>