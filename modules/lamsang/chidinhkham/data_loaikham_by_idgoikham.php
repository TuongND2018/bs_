<?php
$data= new SQLServer;//tao lop ket noi SQL 
$param1=$_GET["id"];
$store_name="{call GD2_DM_GoiKhamSelectAllByID_GoiKhamAndID_LuotKham_New(?,?)}";
$params = array($param1,$_GET["idluotkham"]);
$get=$data->query( $store_name, $params);
$excute= new SQLServerResult($get);
$tam= $excute->get_as_array();
$count=  count($tam);
$responce = new stdClass;
$i=0;
foreach ($tam as $row) {
  $responce->rows[$i]['id']=$row["ID_LoaiKham"];
  $responce->rows[$i]['cell']=array($row["ID_LoaiKham"],
        $row["TenLoaiKham"],
		$row["Gia"],
		$row["GiaBaoChoBN"],
		$row["GiaBaoHiem"],
		$row["GiaPhuThuBenhVien"],
        $row["GhiChu"],
		$row["GiaThueNgoaiThucHien"],
		$row["ThoiGianTrungBinhThucHien"],
		"",
		"",
		"",
		$row["ID_NhomCLS"],
		"",
		$row["HeSoNuocNgoai"],
		$row["Color"],
		$row["PhanTramCungChiTra"]
   );
 $i++; 
} 
echo json_encode($responce);
?>