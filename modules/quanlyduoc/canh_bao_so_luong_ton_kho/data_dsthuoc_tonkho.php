<?php
$data= new SQLServer;
/*if($_GET['ac']==1){
	$store_name="{call GD2_GetThuocBySoLuongTonKho (?)}";
	$params = array($_GET['soluongton']);
	$get_lich=$data->query( $store_name, $params);
	$excute= new SQLServerResult($get_lich);
	$tam= $excute->get_as_array();
	$responce = new stdClass;
	
	
	$i=0;
	foreach ($tam as $row) {
	
		$responce->rows[$i]['id']=$i;
		$responce->rows[$i]['cell']=array($row["TenBietDuoc"],
			$row["TenDonViTinh"],
			$row["TonKhoToiThieu"],
			$row["SoluongConLai"],
			$row["TenNCC"],
			$row["DienThoai"]
			);
		 
		$i++; 
	}  
	echo json_encode($responce);
}else if($_GET['ac']==2){*/
	$store_name="{call GD2_GetThuocBySoLuongTonKhoAndTonThuocNhoHonTonKhoToiThieu (?,?,?)}";
	$params = array($_GET['idkho'],$_GET['soluongton'],$_GET['ac']);
	$get_lich=$data->query( $store_name, $params);
	$excute= new SQLServerResult($get_lich);
	$tam= $excute->get_as_array();
	$responce = new stdClass;
	
	$i=0;
	foreach ($tam as $row) {
	
		$responce->rows[$i]['id']=$i;
		$responce->rows[$i]['cell']=array($row["TenBietDuoc"],
			$row["TenDonViTinh"],
			$row["TonKhoToiThieu"],
			$row["SoluongConLai"],
			$row["TenNCC"],
			$row["DienThoai"]
			);
		 
		$i++; 
	}  
	echo json_encode($responce);
/*	
}*/
?>