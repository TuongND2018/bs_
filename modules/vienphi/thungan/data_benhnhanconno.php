<?php
//echo $_GET['id_tang'];
$data= new SQLServer;
$store_name="{call GD2_DsCongNoBN(?,?)}";
$params = array(convert_date($_GET['tunngay']),convert_date($_GET['denngay']));
$get_lich=$data->query( $store_name, $params);
$excute= new SQLServerResult($get_lich);
$tam= $excute->get_as_array();
$responce = new stdClass;
$i=0;
foreach ($tam as $row) {

    $responce->rows[$i]['id']=$row["MaBenhNhan"];
    $responce->rows[$i]['cell']=array(
        $row["MaBenhNhan"],
        $row["TenBenhNhan"],
        $row["DiaChi"],
        $row["DienThoai"],
        $row["No"],
        $row["ID_BenhNhan"],
        $row["TenCty"],
        $row["TenDotKham"],
         $row["MaPhieu"],
         $row["DoiTuong"],
          $row["ID_PhanLoaiKham"], $row["TenPhanLoaiKham"]

            );
     
    $i++; 
}  
echo json_encode($responce);
?>