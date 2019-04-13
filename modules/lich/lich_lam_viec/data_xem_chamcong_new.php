<?php

/*$page = $_GET['page']; // get the requested page
$limit = $_GET['rows']; // get how many rows we want to have into the grid
$sidx = $_GET['sidx']; // get index row - i.e. user click to sort
$sord = $_GET['sord']; // get the directio*/
$fromDate = $_GET['from'] . ' 0:00:00'; // get the directio
$toDate = $_GET['to'] . ' 23:59:59'; // get the directio

$id_nhanvien = $_GET['ID_NhanVien'];







if (strpos($_GET['from'],'/') !== false) {

    list($day, $month, $year) = explode('/', $_GET['from']);
    $fromDate= $year.'-'.$month.'-'.$day.' 0:00:00';
    $toDate= $year.'-'.$month.'-'.$day.' 23:59:59';

}

$data = new SQLServer; //tao lop ket noi SQL

$store_name = "{call GD2_GetChamCongByIdNhanVien_New (?,?,?)}"; //tao bien khai bao store
$params = array($id_nhanvien, $fromDate, $toDate);

$get_lich = $data->query($store_name, $params); //Goi store
$excute = new SQLServerResult($get_lich); //Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
$tam = $excute->get_as_array(); //Tra ve mang toan bo data lay duoc

$responce = new stdClass;
$tt=1;
$i = 0;

foreach ($tam as $row) {
   $ngaygoc=$row["Ngay"]->format('d/m/Y');
   $responce->rows[$i]['id'] = $row["ID_ChamCong"];
   $responce->rows[$i]['cell'] = array(
     $row["ID_ChamCong"],
     $row["ID_NhanVien"],
     $row["Thang"],
     $row["Tuan"],
     $row["NickName"],
     $row["Ngay"]->format('d/m/Y'),
     $ngaygoc,
     $row["TongCong"],
     $row["TC"],
      $row["ThoiLuongNghiGiuaCa"],
     $row["ChiTietCong"],
     $row["SoLanDiNgoaiVien"],
     $row["LogkhongHopLe"],
     $row["TreSom"],
     $row["TreSomChiTiet"],
     $row["TGCB"],
     $row["dayweek"],
     $row["GChu"],
     $row["Nam"],
     $row["Id_Donchamcong"],
    $tt,
     $row["NgayGioSua"]->format('d/m/y H:i'),
   //  $row["NgayGioSua"],
     $row["NName"],
          $row["NgayGioTaoLich"],

       );
   $i++;
}
echo json_encode($responce);
?>