<?php
$data= new SQLServer;//tao lop ket noi SQL

$params = array( $_GET["idbenhnhan"],0,'HuyBo',$_SESSION["user"]["id_user"]);//tao param cho store 
$store_name="{call Gd2_Kham_SelectKhamLS_BenhNhan_OrderFollow_UserLogin(?,?,?,?)}";//tao bien khai bao store
$get_danh_muc_phong_ban=$data->query( $store_name,$params);//Goi store
$excute= new SQLServerResult($get_danh_muc_phong_ban);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 
//$responce->userdata["ids"] = $ids;
$responce = new stdClass;
$khamchinh=0;
$ID_LuotKham=0;
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
	
	if($row["NgayHenTaiKham"]!=""){		 
		$NgayHenTaiKham=$row["NgayHenTaiKham"]->format($_SESSION["config_system"]["ngaythang"]);
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
		if($_GET["kieudulieu"]=="full"){
			if($ID_LuotKham==$row["ID_LuotKham"]&&$row["IsBacSyChinh"]==1){
				$khamchinh=3;//LuotKham chính
			}elseif($ID_LuotKham==$row["ID_LuotKham"]&&$row["IsBacSyChinh"]==0){
				$khamchinh=2;//LuotKham phụ
			}else{
				$khamchinh=1;//không co lươt kham phụ
			}
			$ID_LuotKham=$row["ID_LuotKham"];
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
				$khamchinh,
				$homnay
			);
		}else if($_GET["kieudulieu"]=="dienbienbenh"){
			$responce->rows[$i]['cell']=
			array(		
				$row["MoTa"]			 
			);
		}else if($_GET["kieudulieu"]=="chandoan"){
			$responce->rows[$i]['cell']=
			array(		
				$row["ChanDoan"]
				,''			 
			);
		}
    $i++; 
}
echo json_encode($responce);
?>
