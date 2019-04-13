<?php
    $data= new SQLServer;
	$store_name="{call GD2_DM_ThietBi_VatTuSelectByID_NhapKho (?)}";
	$params = array($_GET['id']);
	$get=$data->query( $store_name, $params);
	$excute= new SQLServerResult($get);
	$tam= $excute->get_as_array();
	$responce = new stdClass;	
	//print_r($params); 
	$i=0;
	foreach ($tam as $row) {
		 $responce->rows[$i]['id']=$row["ID_PhieuNhapChiTiet"];
		 $responce->rows[$i]['cell']=array($row["ID_Loai"],
		 							$row["ID_NhapKho"],
									$row["TenLoai"],
									$row["SoLuong"],
									$row["DonGia"]
									);
		 $i++; 
	}  
	echo json_encode($responce);

?>