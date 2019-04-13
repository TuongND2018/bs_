<?php
include("class.sqlserver.php");
if(isset($_GET["function"])){$function = $_GET["function"];};
if(isset($_GET["term"])){$term = $_GET["term"];};
if(isset($_GET["status"])){$status = $_GET["status"];};
if(isset($_GET["tables"])){$tables = $_GET["tables"];};
if(isset($_GET["id"])){$id = $_GET["id"];};
if(isset($_GET["name"])){$name = $_GET["name"];};
switch ($function) {
    case "get_auto_complete":
        get_auto_complete();
        break;
    case "get_auto_complete1":
        get_auto_complete1();
        break;
    case "del":
        del("GD2_Del_DM_PhongBan");
        break;
	case "get_auto_complete_aa":
        get_auto_complete("DM_BenhNhan","TenBenhNhan","mabenhnhan",$term,"GD2_GET_AUTOCOMPLETETEXTBOX");
        break;
		
}	 		

function get_auto_complete(){ 
	 $params = array();//tao param cho store	
	 $tam=connect_data("GD2_DM_nhanvien_get_hotenphongban","()",$params);	
		$i=0;
	foreach ($tam as $row) {//duyet toan bo mang tra ve
	$responce[$i] = array('id' => $row["id"], 'label' => $row["label"], 'hoten' => $row["2"], 'TenPhongBan' => $row["3"]);		
		$i++; 
	}   
	echo json_encode($responce);	
}
function get_auto_complete1(){ 
	 $params = array();//tao param cho store	
	 $tam=connect_data("GD2_DM_nhanvien_get_hotenphongban","()",$params);	




$responce[0] = array('id' => '0', 'NickName' => 'NickName', 'hoten' => 'Họ Và Tên', 'TenPhongBan' => 'Tên Phòng Ban');
		
		$i=1;
	foreach ($tam as $row) {//duyet toan bo mang tra ve
	$responce[$i] = array('id' => $row["ID_NhanVien"], 'NickName' => $row["NickName"], 'hoten' => $row["hoten"], 'TenPhongBan' => $row["TenPhongBan"]);
		
		$i++; 
	}   
	echo json_encode($responce);	
}
function connect_data($store,$available,$params){	
	$data= new SQLServer;//tao lop ket noi SQL
	//echo "{call $store $available}";
	
	$store_name="{call $store $available}";//tao bien khai bao store	
	//print_r($params); 	 
	$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store
	$excute= new SQLServerResult($get_danh_muc_phong_ban);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
	$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 
	return $tam;
}

?>