<?php

//$table = "DM_DanToc";
$data= new SQLServer;//tao lop ket noi SQL
$params = array($_GET["id_tang"]);//tao param cho store 
$store_name="{call GD2_Buong_Giuong_SelectAll_ByID_Tang(?)}";//tao bien khai bao store
$get_danh_muc_phong_ban=$data->query( $store_name,$params);//Goi store
$excute= new SQLServerResult($get_danh_muc_phong_ban);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 
//$responce->userdata["ids"] = $ids;
$responce = new stdClass;
$i=0;
foreach ($tam as $row) {//duyet toan bo mang tra ve
	 
    $responce->rows[$i]['id']=$row["ID_Buong_Giuong"];
    $responce->rows[$i]['cell']=array($row["ID_Buong_Giuong"],$row["TenBuong_Giuong"],$row["Mota"],$row["Ghichu"],$row["DVT"],$row["DonGia_QD"],$row["DonGia_YC"],$row["DongiaGio_QD"],
    	$row["DongiaGio_YC"],$row["Is_Buong"],$row["Path_Picture"],$row["ChiDuong"],$row["ID_Parent"],$row["ViTriCua"],$row["Ngang"],$row["ID_KieuPhong"],$row["Doc"],$row["Hang"],
    	$row["Cot"],$row["ID_Tang"]);
    $i++; 
}
echo json_encode($responce);
?>