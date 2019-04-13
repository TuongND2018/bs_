<?php
$data= new SQLServer;//tao lop ket noi SQL
$params = array($_GET['iddonthuoc'],$_SESSION['user']['id_user']);//tao param cho store 
$store_name="{call GD2_DM_LoaiKham_SelectAllAndID_DonThuocMau(?,?)}";//tao bien khai bao store
$get_danh_muc_phong_ban=$data->query( $store_name,$params);//Goi store
$excute= new SQLServerResult($get_danh_muc_phong_ban);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 

$responce = new stdClass;
$i=0;
foreach ($tam as $row) {//duyet toan bo mang tra ve
    $responce->rows[$i]['id']=$row["ID_LoaiKham"];
    $responce->rows[$i]['cell']=array($row["ID_NhomCLS"],
								$row["ID_auto"],
								0,
								0,
								$row["ID_NhomCLS"],
								$row["ID_LoaiKham"],
								$row["BS"],
								$row["TenLoaiKham"],
								$row["Chon"],
								1
								);
    $i++; 
}
echo json_encode($responce);
?>