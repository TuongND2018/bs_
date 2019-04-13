<?php
//echo $_GET['id_tang'];
$data= new SQLServer;
$store_name="{call GD2_VienPhi_SelectTongDichVuThucThuCuaThuNgan (?,?,?,?)}";
$params = array($_GET['tungay'],$_GET['denngay'],"ThanhToanLuotKham","1000");
$get_lich=$data->query( $store_name, $params);
$excute= new SQLServerResult($get_lich);
$tam= $excute->get_as_array();
$responce = new stdClass;
$i=0;
foreach ($tam as $row) {

    $responce->rows[$i]['id']=$row["MaBenhNhan"];
    $responce->rows[$i]['cell']=array(
        $row["MaBenhNhan"],
        $row["HoLotBenhNhan"],
        $row["TenBenhNhan"],
        $row["Tuoi"],
        $row["DienThoai1"],
        $row["DiaChi"],
        $row["TongTienPhaiTra"],
        $row["GiamGia"],
        $row["TienHuyChiDinh"],
        $row["NoCu"],
        '',
        $row["SoTienThanhToan"],
        $row["NoCuoi"],
        
            );
     
    $i++; 
}  
echo json_encode($responce);
?>