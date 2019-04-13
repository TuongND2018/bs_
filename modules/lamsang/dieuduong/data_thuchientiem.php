<?php
$data= new SQLServer;//tao lop ket noi SQL
$params = array($_GET["id_kham"]);//tao param cho store 
$store_name="{call GD2_DieuDuong_GhiChuDonThuoc_SelectAllByID_Kham(?)}";//tao bien khai bao store
$get=$data->query( $store_name,$params);//Goi store
$excute= new SQLServerResult($get);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 
$responce = new stdClass;
$i=0;
foreach ($tam as $row) {//duyet toan bo mang tra ve
		if($row["NgayGioTiemTruyen"]!=''){
				$ngay=$row["NgayGioTiemTruyen"]->format($_SESSION["config_system"]["ngaythang"]);
				$gio=$row["NgayGioTiemTruyen"]->format('H:i');
		}
		else 
		{
			$ngay='';
			$gio='';
		
		}
		$responce->rows[$i]['id']=$row["ID_Infusion"];
		$responce->rows[$i]['cell']=array("",$row["TenBietDuoc"],$gio,$ngay,$row["SoLuongTiemTruyen"],$row["TenDuongDung"],$row["GhiChu"],$row["ID_NguoiTiem"],"","",1,"","",$row["ID_Infusion"]);
		$i++; 
}
echo json_encode($responce);
?>
