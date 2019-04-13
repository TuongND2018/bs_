<?php
if(isset($_GET['ngay_tdon'])){

	$ngay_tdon2=convert_date($_GET['ngay_tdon']) ;
}

$param1=$ngay_tdon2;
$param2=$_GET['buoi_tdon'];

$store_name="{call [GD2_DM_ThucDonBuoiVaNgay_select](?,?)}";//tao bien khai bao store
$data= new SQLServer;//tao lop ket noi SQL
$params = array($param1,$param2);//tao param cho store 
//print_r($params);
$get_danh_muc_phong_ban=$data->query( $store_name,$params);//Goi store
$excute= new SQLServerResult($get_danh_muc_phong_ban);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 
$responce = new stdClass;
$i=0;
foreach ($tam as $row) {//duyet toan bo mang tra ve
	
	
    $responce->rows[$i]['id']=$row["ID_ThucDon"];
    $responce->rows[$i]['cell']=array($row["TenThucDon"]);
    $i++; 
}
echo json_encode($responce);
?>
