
<?php
switch ($_GET["oper"]) {
    case "phieuxuat":
        phieunhap();
        break;
    case "phieuxuat_sub":
		phieunhap_sub();        
        break;    
}
function phieunhap(){ 
	$search="";
	if(isset($_GET["tungay"]) && isset($_GET["denngay"])){
		 $tungay=convert_date($_GET["tungay"]);
		 $dengay=convert_date($_GET["denngay"])." 23:59:59";
	}else{
		 $tungay=date("Y-m-d");
		 $dengay=date("Y-m-d");		 
	}
	if(isset($_GET["tuso"]) && isset($_GET["denso"])){
		$search .=" AND (MaPhieu BETWEEN $_GET[tuso] AND $_GET[denso] )";
	}
	if(isset($_GET["maKH"])){
		$search .=" AND ID_NCC = $_GET[maKH]";
	}
	if(isset($_GET["tenkhachhang"])){
		$search .=" AND TenKhachHang like N'%$_GET[tenkhachhang]%'";
	}
	if(isset($_GET["maKHO"])){
		$search .=" AND ID_Kho = $_GET[maKHO]";
	}
	//print_r($search);
	if(isset($_GET["ghichu"])){
		$search .=" AND Gd2_PhieuNhap_".$_GET["namhethong"].".GhiChu like N'%$_GET[ghichu]%'";
	}
	if(isset($_GET["idThuoc"])){
		$search .=" AND ID_Thuoc = $_GET[idThuoc]";
	}    
	if(isset($_GET["ID_LoaiNhapXuat"])){
		$search .=" AND ID_LoaiNhapXuat = $_GET[ID_LoaiNhapXuat]";
	} 
    $data= new SQLServer;//tao lop ket noi SQL 
	$store_name="{call Gd2_PhieuXuat_SelectByDateAndYear (?,?,?,?)}";//tao bien khai bao store
	$params = array($tungay,$dengay,$_GET["namhethong"],$search);//tao param cho store 

	$get_lich=$data->query( $store_name, $params);//Goi store
	$excute= new SQLServerResult($get_lich);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
	$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 	 
	$responce = new stdClass;	 
	$kiemtra=true;	
	$i=0;
	foreach ($tam as $row) {//duyet toan bo mang tra ve
		 $responce->rows[$i]['id']=$row["ID_XuatKho"];
		 if($row["NgayDuyet"]!=""){
			$row["NgayDuyet"]=$row["NgayDuyet"]->format($_SESSION["config_system"]["ngaythang"]);
		 } 	 
		 if($row["NgayLapPhieu"]!=""){
			$row["NgayLapPhieu"]=$row["NgayLapPhieu"]->format($_SESSION["config_system"]["ngaythang"]);
		 } 
		 if($row["NgayXuat"]!=""){
			$row["NgayXuat"]=$row["NgayXuat"]->format($_SESSION["config_system"]["ngaythang"]);
		 }
		 $responce->rows[$i]['cell']=array($row["ID_XuatKho"],$row["MaPhieu"],$row["ID_NhanVien"],$row["NgayLapPhieu"],$row["NgayXuat"],$row["ID_NguoiDuyet"],$row["NgayDuyet"],$row["ID_NCC"],$row["ID_Kho"],$row["ID_LoaiNhapXuat"],$row["PercentVAT"],$row["TienVAT"],$row["ThanhTien"],$row["IDDonThuoc"],$row["DaThanhToan"],$row["TenKhachHang"],$row["IsXuatChoToaTam"],$row["DaThanhToan"]);
		 $i++; 
	}  
	echo json_encode($responce);
}
function phieunhap_sub(){ 
    $data= new SQLServer;//tao lop ket noi SQL 
	$store_name="{call Gd2_PhieuXuatChiTiet_SelectByIdAndYear (?,?)}";//tao bien khai bao store
	//echo $_GET["ids"];
	$params = array($_GET["ids"],$_GET["namhethong"]);//tao param cho store 
	//print_r($params) ;
	$get_lich=$data->query( $store_name, $params);//Goi store
	$excute= new SQLServerResult($get_lich);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
	$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 	 
	//echo $count;	
	$responce = new stdClass;	 
	$kiemtra=true;	
	$i=0;
	//print_r($tam);
	foreach ($tam as $row) {//duyet toan bo mang tra ve
		 $responce->rows[$i]['id']=$row["ID_XuatKhoChiTiet"];		 
		 $responce->rows[$i]['cell']=array($row["ID_XuatKho"],$row["ID_Thuoc"],$row["MaThuoc"],$row["TenBietDuoc"],$row["TenDonViTinh"],$row["SoLo"],$row["SoLuong"],$row["DonGia"],$row["TienVAT"], $row["ThanhTien"],$row["DonGiaVon"],$row["TienVon"],$row["ChietKhau"]);
		 $i++; 
	}  
	echo json_encode($responce);
}
function search_main(){
	
	
}
?>