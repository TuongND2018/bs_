<?php
$page = $_GET['page']; // get the requested page
$limit = $_GET['rows']; // get how many rows we want to have into the grid
$sidx = $_GET['sidx']; // get index row - i.e. user click to sort
$sord = $_GET['sord']; // get the directio
$data= new SQLServer;//tao lop ket noi SQL 

if($page==1){
	$start=$page-1;
}else{
	$start=$limit/$page;	
}
	$end=$limit;
 //Lấy ds bn hoàn tất khám 
$store_name="{call spLayDSBenhNhanLamSangTheoTrangThai_2 (?,?)}";//tao bien khai bao store
//spLayDSBenhNhanLamSangTheoTrangThai_2 KetThucKham,Xong

$params = array("KetThucKham","Xong");//tao param cho store 
//print_r($params) ;
$get_lich=$data->query( $store_name, $params);//Goi store
$excute= new SQLServerResult($get_lich);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 
$count=  count($tam);

if( $count >0 ){
	$total_pages = ceil($count/$limit);
} else {
	$total_pages = 0;
}


$responce = new stdClass;
$responce->page = $page;
$responce->total = $total_pages; 
$kiemtra=true;


$i=0;
foreach ($tam as $row) {//duyet toan bo mang tra ve
    $responce->rows[$i]['id']=$row["ID_LuotKham"];
    $responce->rows[$i]['cell']=array($row["ID_LuotKham"],
        $row["MaBenhNhan"],
        $row["TenPhanLoaiKham"],
        $row["TenBenhNhan"],
        $row["Tuoi"],
        $row["GioiTinh"],
        $row["ThoiGianVaoKham"]->format('H:i:s'));
     
    $i++; 
}  
echo json_encode($responce);
?>