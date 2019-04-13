<?php
include("../../class/class.sqlserver.php");
if(isset($_GET["function"])){$function = $_GET["function"];};
if(isset($_GET["term"])){$term = $_GET["term"];};
if(isset($_POST["search"])){$search = $_POST["search"];};
//echo $term;
if(isset($_GET["status"])){$status = $_GET["status"];};
if(isset($_GET["tables"])){$tables = $_GET["tables"];};
if(isset($_GET["id"])){$id = $_GET["id"];};
if(isset($_GET["name"])){$name = $_GET["name"];};
switch ($function) {
    case "get_auto_complete":
        get_auto_complete();
        break;
    case "get_auto_edit_option":
        get_auto_edit_option($tables,$id,$name,$term,"GD2_GET_AUTOCOMPLETETEXTBOX",$status);
        break;
	 case "get_auto_edit_option_byid":
        get_auto_edit_option_byid($tables,$id,$name,$term,"GD2_GET_AUTOCOMPLETETEXTBOXbyid",$status);
     break;	
	 case "get_print":
        get_print($search);
     break;	
	  case "get_hovatenchucdanh":
        get_hovatenchucdanh($id,"GD2_HovaTen_ChucDanh_GET",$status);
     break;	
    case "del":
        del("GD2_Del_DM_PhongBan");
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
function get_auto_edit_option($tables,$id,$name,$term,$store_name,$status){
	$params = array($tables,$id,$name,$term);//tao param cho store
	 $tam=connect_data($store_name,"(?,?,?,?)",$params);	 
	$i=0;
	if($status==0){	
		echo " : ;";
	}elseif($status==1){
		echo "all:Tất cả;";
	}
	foreach ($tam as $v) {//duyet toan bo mang tra ve
		if(trim($v[1])!=""){
			if($i!=count($tam)-1){				
				$phancach=";";
			}else{
				$phancach="";
			}
			echo $v[0].":".$v[1].$phancach;	
			$i++;
		}
	}     
	 
}
function get_auto_edit_option_byid($tables,$id,$name,$term,$store_name,$status){
	//$term= "(TenMay = 'Dell' ) and TenReport = 'Lich_lam_viec' and  UserWindowName = 'kha' ";
	//print_r($term);
	//$name ="TenMayIn,TenReport";
	$params = array($tables,$id,$name,$term);//tao param cho store
	 $tam=connect_data($store_name,"(?,?,?,?)",$params);	 
	 
	$i=0;
	if($status==0){	
		echo " : ;";
	}elseif($status==1){
		echo "all:Tất cả;";
	}
	foreach ($tam as $v) {//duyet toan bo mang tra ve
		if(trim($v[1])!=""){
			if($i!=count($tam)-1){				
				$phancach=";";
			}else{
				$phancach="";
			}
			echo $v[0].":".$v[1].$phancach;	
			$i++;	
		}
	}     
	 
}
function get_print($search){
	//$term= "(TenMay = 'Dell' ) and TenReport = 'Lich_lam_viec' and  UserWindowName = 'kha' ";
	//print_r($term);
	//$name ="TenMayIn,TenReport";
	//$search = $_POST["search"];
	$params = array("GD2_PrinterConfig","ID_auto","TenMayIn,KieuIn,SoluongBanIn,margin",$search);//tao param cho store
	$tam=connect_data("GD2_GET_AUTOCOMPLETETEXTBOXbyid","(?,?,?,?)",$params);	 
		if (count($tam)>0){
			echo $tam[0][1].";".$tam[0][2].";".$tam[0][3].";".$tam[0][4];	
		}else{
			echo 1;
		}
}
function get_hovatenchucdanh($id,$store_name){	

	$params = array($id);//tao param cho store
	$tam=connect_data($store_name,"(?)",$params);	
	//print_r($params)  ;
	foreach ($tam as $v) {//duyet toan bo mang tra ve
		echo $v[0];
	}     
	 
}


function connect_data($store,$available,$params){	
	$data= new SQLServer;//tao lop ket noi SQL
	//echo "{call $store $available}";
	//print_r($params);
	$store_name="{call $store $available}";//tao bien khai bao store	 	 
	$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store
	$excute= new SQLServerResult($get_danh_muc_phong_ban);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
	$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 
	return $tam;
}

?>