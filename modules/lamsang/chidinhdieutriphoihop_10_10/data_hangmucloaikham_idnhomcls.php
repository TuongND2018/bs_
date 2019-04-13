<?php
$id=$_GET['id'];
//$table = "DM_QuocTich";
$data= new SQLServer;//tao lop ket noi SQL
$params = array($id);//tao param cho store 
$store_name="{call GD2_DM_SelectLoaiKhamByID_NhomCLS(?)}";//tao bien khai bao store
$get=$data->query( $store_name,$params);//Goi store
$excute= new SQLServerResult($get);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 
//$responce->userdata["ids"] = $ids;
$responce = new stdClass;
$i=0;
$phantram=$_GET['phantram'];
$baohiemchitra=0;
$benhnhanchitra=0;
foreach ($tam as $row) {//duyet toan bo mang tra ve
	$baohiemchitra=$row["GiaBaoHiem"]-(($row["GiaBaoHiem"]*$phantram)/100); //Color
    $responce->rows[$i]['id']=$row["ID_LoaiKham"];
    $responce->rows[$i]['cell']=array($row["GiaThueNgoaiThucHien"],$row["ThoiGianTrungBinhThucHien"],$row["ID_LoaiKham"],$row["TenLoaiKham"],$row["GiaBaoChoBN"],$row["GiaBaoHiem"],$row["GiaPhuThuBenhVien"],$row["PhuThuThucHienTaiNha"],$row["HeSoNuocNgoai"],$baohiemchitra,$row["Color"]);
    $i++; 
}
echo json_encode($responce);
?>