<?php
    $data= new SQLServer;
	$store_name="{call GD2_PhieuNhapTB_VT_SelectByTuNgayDenNgay (?,?)}";
	$params = array(convert_date($_GET['tungay']).' 00:00:00',convert_date($_GET['denngay']).' 23:59:59');
	$get=$data->query( $store_name, $params);
	$excute= new SQLServerResult($get);
	$tam= $excute->get_as_array();
	$responce = new stdClass;	
	//print_r($params); 
	$i=0;
	foreach ($tam as $row) {
		 if($row["NgayNhap"]==""){
			$row["NgayNhap"]=$row["NgayNhap"]; 
		 }else{
			$row["NgayNhap"]=$row["NgayNhap"]->format($_SESSION["config_system"]["ngaythang"]);
		 }
		 if($row["KeToanDuyetLuc"]==""){
			$row["KeToanDuyetLuc"]=$row["KeToanDuyetLuc"]; 
		 }else{
			$row["KeToanDuyetLuc"]=$row["KeToanDuyetLuc"]->format($_SESSION["config_system"]["ngaythang"]);
		 }
		 if($row["NguoiQuanLyDuyetLuc"]==""){
			$row["NguoiQuanLyDuyetLuc"]=$row["NguoiQuanLyDuyetLuc"]; 
		 }else{
			$row["NguoiQuanLyDuyetLuc"]=$row["NguoiQuanLyDuyetLuc"]->format($_SESSION["config_system"]["ngaythang"]);
		 }
		 $responce->rows[$i]['id']=$row["ID_PhieuNhap"];
		 $responce->rows[$i]['cell']=array($row["MaPhieu"],
		 							$row["TenNguoiNhap"],
									$row["NgayNhap"],
									$row["TenKeToan"],
									$row["KeToanDuyetLuc"],
									$row["TenQuanLy"],
									$row["NguoiQuanLyDuyetLuc"],
									$row["TenKho"],
									$row["GhiChu"],
									$row["NguoiNhap"],
									$row["ID_Kho"]
									);
		 $i++; 
	}  
	echo json_encode($responce);

?>