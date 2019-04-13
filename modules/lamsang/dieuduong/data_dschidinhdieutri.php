<?php
$data= new SQLServer;//tao lop ket noi SQL
$ac=$_GET["ac"];
if($ac==1)
	$trangthai='Xong';
	else
		$trangthai='DangCho';
$ngaybatdau=convert_date($_GET["ngaybatdau"]).' 0:00:00';
$ngayketthuc=convert_date($_GET["ngayketthuc"]).' 23:59:59';
$params = array($trangthai,$ngaybatdau,$ngayketthuc);//tao param cho store 
$store_name="{call GD2_SelectBenhNhanByDieuTriPhoiHopAndDate(?,?,?)}";//tao bien khai bao store
$get=$data->query( $store_name,$params);//Goi store
$excute= new SQLServerResult($get);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 
$responce = new stdClass;
$i=0;
foreach ($tam as $row) {//duyet toan bo mang tra ve
		$responce->rows[$i]['id']=$row["MaBenhNhan"];
		$responce->rows[$i]['cell']=array(
		$row["MaBenhNhan"],
		$row["HoTenBN"],
		$row["NamSinh"],
		$row["Gioitinh"]
		);
		$i++; 
}
echo json_encode($responce);
?>
