<?php
$data= new SQLServer;
$params = array( $_GET["idbenhnhan"],0,'HuyBo',$_SESSION["user"]["id_user"]); 
$store_name="{call Gd2_Kham_SelectKhamLS_BenhNhan(?,?,?,?)}";
$get_danh_muc_phong_ban=$data->query( $store_name,$params);
$excute= new SQLServerResult($get_danh_muc_phong_ban);
$tam= $excute->get_as_array();
$responce = new stdClass;
$responce1 = new stdClass;
$responce2 = new stdClass;
$responce3 = new stdClass;
$i=0;
foreach ($tam as $row) {//duyet toan bo mang tra ve
	if($row["NgayGioTao"]!=""){
		$giotao=$row["NgayGioTao"]->format("H:i");
		$ngaytao=$row["NgayGioTao"]->format('d-m-Y');
	}else{
		$giotao="";
		$ngaytao="";
	}
	if($row["NgayHetThuoc"]!=""){		 
		$ngayhetthuoc=$row["NgayHetThuoc"]->format('d-m-Y');
	}else{		
		$ngayhetthuoc = new DateTime($row["NgayGioTao"]->format('Y-m-d'));
		$ngayhetthuoc=date_add($ngayhetthuoc,date_interval_create_from_date_string($row["SoNgayThuoc"]." days"))->format('d-m-Y');	
	}		
	if($row["NgayHenTaiKham"]!=""){		 
		$NgayHenTaiKham=$row["NgayHenTaiKham"]->format('d-m-Y');
	}else{		
		$NgayHenTaiKham ="";		
	}	
	$ngayhomnay = date("Y-m-d"); // Năm/Tháng/Ngày
	$ngaysosanh =$row["NgayGioTao"]->format('Y-m-d'); 
	$homnay=0;
	if (strtotime($ngayhomnay) == strtotime($ngaysosanh)) {
		$homnay=1;
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
				$row["GhiChu"],
				$row["NoiDungTaiKham"],
				$NgayHenTaiKham,
				$row["IsBacSyChinh"],
				$homnay,
				$row["dem_luotkham"],
				$row["bsbschinh"],
				$row["donthuocchinh"],
				$row["LayDauHieuSinhTon"],
				$row["SanSangGoiVaoKham"],
				$row["dhsinhton"],
				$row["phantram"]
				,$row["LoaiDoiTuongKham"]
			);
		$responce1->rows[$i]['id']=$row["ID_Kham"];
		$responce1->rows[$i]['cell']=
			array(		
				$row["MoTa"]			 
			);
		$responce2->rows[$i]['id']=$row["ID_Kham"];
			$responce2->rows[$i]['cell']=
			array(		
				$row["ChanDoan"]
				,''			 
			);
		$responce3->rows[$i]['id']=$row["ID_Kham"];
		$responce3->rows[$i]['cell']=
			array(		
				$row["MaICD10"]
				,NULL	 
			);
		
    $i++; 
}













echo json_encode($responce);
echo'|||';
echo json_encode($responce1);
echo'|||';
echo json_encode($responce2);
echo'|||';
echo json_encode($responce3);
?>
