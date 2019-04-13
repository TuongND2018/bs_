<?php
$data= new SQLServer;//tao lop ket noi SQL
$ngaybatdau=convert_date($_GET["ngaybatdau"]).' 0:00:00';
$ngayketthuc=convert_date($_GET["ngayketthuc"]).' 23:59:59';
$params = array($ngaybatdau,$ngayketthuc,0);//tao param cho store 
$store_name="{call GD2_GetDSDonThuoc_ByDateAndPhuongThuc(?,?,?)}";//tao bien khai bao store
$get=$data->query( $store_name,$params);//Goi store
$excute= new SQLServerResult($get);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 
$responce = new stdClass;
$i=0;
if($_GET["ac"]==0){
		foreach ($tam as $row) {//duyet toan bo mang tra ve
			if($row["DaThucHienTiemTruyen"]==0){
				if($row["NgayBatDauDungThuoc"]!='')
						$row["NgayBatDauDungThuoc"]=$row["NgayBatDauDungThuoc"]->format($_SESSION["config_system"]["ngaythang"]);
				else $row["NgayBatDauDungThuoc"]='';
				
				$responce->rows[$i]['id']=$row["ID_Kham"];
				$responce->rows[$i]['cell']=array(
				$row["MaBenhNhan"],
				$row["Hoten"],
				$row["NamSinh"],
				$row["Gioitinh"],
				$row["BSKeToa"],
				$row["NgayBatDauDungThuoc"],
				$row["SoNgayThuoc"],
				$row["DaThucHienTiemTruyen"],
				$row["ID_DonThuoc"],
				$row["ID_Kham"]
				);
				$i++; 
			}
		}
}else{
		foreach ($tam as $row) {//duyet toan bo mang tra ve
			if($row["DaThucHienTiemTruyen"]==1){
				if($row["NgayBatDauDungThuoc"]!='')
						$row["NgayBatDauDungThuoc"]=$row["NgayBatDauDungThuoc"]->format($_SESSION["config_system"]["ngaythang"]);
				else $row["NgayBatDauDungThuoc"]='';
				
				$responce->rows[$i]['id']=$row["ID_Kham"];
				$responce->rows[$i]['cell']=array(
				$row["MaBenhNhan"],
				$row["Hoten"],
				$row["NamSinh"],
				$row["Gioitinh"],
				$row["BSKeToa"],
				$row["NgayBatDauDungThuoc"],
				$row["SoNgayThuoc"],
				$row["DaThucHienTiemTruyen"],
				$row["ID_DonThuoc"],
				$row["ID_Kham"]
				);
				$i++; 
			}
		}
}


echo json_encode($responce);
?>
