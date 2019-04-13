<?php
$data= new SQLServer;//tao lop ket noi SQL
$params = array();//tao param cho store 
$store_name="{call GD2_DM_LoaiKHamSelectAllByChiDinh_hesoluong()}";//tao bien khai bao store
$get=$data->query( $store_name,$params);//Goi store
$excute= new SQLServerResult($get);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 
$responce = new stdClass;
$i=0;
foreach ($tam as $row) {//duyet toan bo mang tra ve

    $responce->rows[$i]['id']=$row["ID_LoaiKham"];
    $responce->rows[$i]['cell']=array($row["GiaThueNgoaiThucHien"],$row["ThoiGianTrungBinhThucHien"],"",$row["ID_LoaiKham"],$row["TenLoaiKham"],$row["GiaBaoChoBN"]/1000,$row["GiaBaoHiem"],$row["GiaPhuThuBenhVien"],$row["TenNhom"],$row["ID_NhomCha"],$row["ID_NhomCLS"]
    	,$row["ChiPhi"]/1000,$row["conlai"]/1000);
    $i++; 
}
echo json_encode($responce);
?>