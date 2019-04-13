<?php
$data= new SQLServer;//tao lop ket noi SQL 
$store_name="{call GD2_NhanVien_SelectAll_ByID_NhanVien(?)}";
$params = array($_GET["id_nhanvien"]); 
$get_lich=$data->query( $store_name, $params);
$excute= new SQLServerResult($get_lich);

$tam= $excute->get_as_array();

$responce = new stdClass;
$i=0;
foreach ($tam as $row) {//duyet toan bo mang tra ve
    $responce->rows[$i]['id']=$row["ID_NhanVien"];
    $responce->rows[$i]['cell']=array($row["ID_NhanVien"],$row["TenNhanVien"],$row["HinhChuKy"]);
     
    $i++; 
}  
echo json_encode($responce);
?>