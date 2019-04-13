<?php

 
if (isset($_GET["searchString"])){
	$search_string=$_GET["searchString"];
}else{
	$search_string="";	
}
if(isset($_GET['from_day'])){

	$from_day1=convert_date($_GET['from_day']) ;
}
if(isset($_GET['to_day'])){
	$to_day1=convert_date($_GET['to_day']) ;
}
$param1=$from_day1;
$param2=$to_day1;

$store_name="{call spLichHenKham_SelectAll_ByKhoangThoiGian(?,?)}";//tao bien khai bao store
$data= new SQLServer;//tao lop ket noi SQL
$params = array($param1,$param2);//tao param cho store 
//print_r($params);
$get_danh_muc_phong_ban=$data->query( $store_name,$params);//Goi store
$excute= new SQLServerResult($get_danh_muc_phong_ban);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 
$responce = new stdClass;
$i=0;
foreach ($tam as $row) {//duyet toan bo mang tra ve
if($row["GioHenKham"]!=''){
$row["GioHenKham"]=$row["GioHenKham"]->format('d-m-Y H:i:s');

}
    $responce->rows[$i]['id']=$row["ID_HenKham"];
    $responce->rows[$i]['cell']=array($row["ID_HenKham"],$row["ID_BenhNhan"],$row["HoLotBenhNhan"],$row["TenBenhNhan"],$row["TrangThai"],$row["DienThoai1"],$row["NguoiDatHen"],$row["DienThoaiLienHe"],$row["GioHenKham"],$row["TenNhanVien"],$row["GhiChu"],$row["TenNhanVienDatLich"]);
    $i++; 
}
echo json_encode($responce);
?>
