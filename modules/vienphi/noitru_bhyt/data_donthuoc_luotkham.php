<?php

$data = new SQLServer;


//spDonThuoc_SelectByID_BenhNhan 257961,'Cancel',0,'Xong'
if(isset($_GET["ID_LuotKham"])){
	$store_name = "{call Gd2_thanhtoannoitru_bhyt_donthuocselect (?)}";
	$params = array($_GET["ID_LuotKham"]);
}else{
		$store_name = "{call Gd2_thanhtoannoitru_bhyt_donthuocselect_thutrano (?)}";
		$params = array($_GET["ID_ThuTraNo"]);
}

if(isset($_GET["ko_hotro"])){	
		$ko_hotro = 1;	
}else{
		$ko_hotro = 0;	
}

$get_lich = $data->query($store_name, $params);
$excute = new SQLServerResult($get_lich);
$tam = $excute->get_as_array();
$responce = new stdClass;
$i = 0;
foreach ($tam as $row) {
 	if($row["NgayKeDon"]!=''){
       	$row["NgayKeDon"]= $row["NgayKeDon"]->format("H:i ".$_SESSION["config_system"]["ngaythang"]);
	}else{
	    $row["NgayKeDon"]='';
	}
	if($ko_hotro==1){
		$row["hotro"]=0;
	}
    $responce->rows[$i]['id'] = $row["ID_DonThuoc"];
    $responce->rows[$i]['cell'] = array( 
	$row["NickName"],
	$row["NgayKeDon"],    
	intval($row["tienthuoc"]),
 	intval($row["cungchitra"]),
	intval($row["hotro"]),
	intval($row["cungchitra"]-$row["hotro"]),
      
   

);
    $i++;
}
echo json_encode($responce);
?>