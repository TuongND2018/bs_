<?php
	$data= new SQLServer;//tao lop ket noi SQL
	$params2 = array($_GET['id_phieutra'],$_GET['id_phanloaithuoc']);//tao param cho store 
	$store_name2="{call GD2_GetHoanTraThuocByID_PhieuTraThuoc(?,?)}";//tao bien khai bao store
	$get_thongtin2=$data->query( $store_name2,$params2);//Goi store
	$excute2= new SQLServerResult($get_thongtin2);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
	$thuoc= $excute2->get_as_array();//Tra ve mang toan bo data lay
	$responce = new stdClass;
	$i=0;
	foreach ($thuoc as $row) {//duyet toan bo mang tra ve
		if($row["NgayHetHan"]!=''){
			$row["NgayHetHan"]=$row["NgayHetHan"]->format($_SESSION["config_system"]["ngaythang"]);	
		}else{
			$row["NgayHetHan"]=NULL;
		}
			
		$responce->rows[$i]['id']='n_'.$i;
		$responce->rows[$i]['cell']=array($row["ID_Thuoc"],$row["MaThuoc"],$row["TenGoc"],$row["TenDonViTinh"],$row["SoLuongTraLai"],$row["DonGia"],$row["DonGiaBan"],$row["SoLoNhaSanXuat"],$row["NgayHetHan"]);
		$i++; 
	}
	echo json_encode($responce);
?>