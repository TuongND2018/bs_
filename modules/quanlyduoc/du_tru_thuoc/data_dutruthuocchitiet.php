<?php

$id_DuTru = $_GET['id'];
if($id_DuTru == 0){
$responce = new stdClass;
$responce->page = 1;
$responce->total = 1;
$responce->records = 0;
echo json_encode($responce);
	}
else{
$data= new SQLServer;//tao lop ket noi SQL
$store_name="{call GD2_Dutruthuocchitiet_get(?,?)}";//tao bien khai bao store
$year = $_SESSION["user"]["year_work"];
$params = array($year,$id_DuTru);
$get_danh_muc=$data->query( $store_name, $params);//Goi store
$excute= new SQLServerResult($get_danh_muc);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 

$count = count($tam);

//$responce->userdata["ids"] = $ids;
$responce = new stdClass;
$responce->page = 1;
$responce->total = 1;
$responce->records = $count;
$i=0;
foreach ($tam as $row) {//duyet toan bo mang tra ve
    $responce->rows[$i]['id']=$row["ID_DuTruThuocChiTiet"];
    $responce->rows[$i]['cell']=array($row["ID_DuTruThuocChiTiet"],$row["ID_Thuoc"],$row["MaThuoc"],$row["TenBietDuoc"],$row["TenDonViTinh"],$row["SoLuongDuTru"]);
    $i++; 
}   
echo json_encode($responce);
}
?>