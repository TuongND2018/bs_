<?php
	$data= new SQLServer;//tao lop ket noi SQL
	$params2 = array($_GET['id_phieulinh'],$_GET['id_phanloaithuoc']);//tao param cho store 
	$store_name2="{call GD2_GetLinhThuocByID_PhieuLinhThuoc(?,?)}";//tao bien khai bao store
	$get_thongtin2=$data->query( $store_name2,$params2);//Goi store
	$excute2= new SQLServerResult($get_thongtin2);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
	$thuoc= $excute2->get_as_array();//Tra ve mang toan bo data lay
	$responce = new stdClass;
	$i=0;
	foreach ($thuoc as $row) {//duyet toan bo mang tra ve
		$responce->rows[$i]['id']='n_'.$i;
		$responce->rows[$i]['cell']=array($row["ID_Thuoc"],$row["MaThuoc"],$row["TenGoc"],$row["TenDonViTinh"],$row["SoThuocThucXuat"],$row["PhanTramThue"],$row["DonGia"]);
		$i++; 
	}
	echo json_encode($responce);
?>