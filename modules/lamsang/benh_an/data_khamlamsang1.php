<?php
$data= new SQLServer;//tao lop ket noi SQL

$params = array( $_GET["idbenhnhan"],0,'HuyBo',$_SESSION["user"]["id_user"]);//tao param cho store 
$store_name="{call spKham_SelectKhamLS_BenhNhan_OrderFollow_UserLogin(?,?,?,?)}";//tao bien khai bao store
$get_danh_muc_phong_ban=$data->query( $store_name,$params);//Goi store
$excute= new SQLServerResult($get_danh_muc_phong_ban);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 
//$responce->userdata["ids"] = $ids;
$responce = new stdClass;
$i=0;
foreach ($tam as $row) {//duyet toan bo mang tra ve
	if($row["NgayGioTao"]!=""){
		$giotao=$row["NgayGioTao"]->format("H:i");
		$ngaytao=$row["NgayGioTao"]->format($_SESSION["config_system"]["ngaythang"]);
	}else{
		$giotao="";
		$ngaytao="";
	}
	if($row["NgayHetThuoc"]!=""){		 
		$ngayhetthuoc=$row["NgayHetThuoc"]->format($_SESSION["config_system"]["ngaythang"]);
	}else{		
		$ngayhetthuoc = new DateTime($row["NgayGioTao"]->format('Y-m-d'));
		$ngayhetthuoc=date_add($ngayhetthuoc,date_interval_create_from_date_string($row["SoNgayThuoc"]." days"))->format($_SESSION["config_system"]["ngaythang"]);	
	}	

    $responce->rows[$i]['id']=$row["ID_Kham"];	
			$responce->rows[$i]['cell']=
			array(		
				$row["ID_LoaiKham"],
				$row["BSChanDoan"],
				$giotao,
				$ngaytao,
				$row["SoNgayThuoc"],
				$ngayhetthuoc,
				$row["ID_DonThuoc"], 
				$row["ID_LuotKham"],
				$row["ID_TrangThai"],
				$row["MoTa"],
				$row["ChanDoan"],
				''
			);
		
    $i++; 
}
echo json_encode($responce);
?>
