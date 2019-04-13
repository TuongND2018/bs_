<?php

$data = new SQLServer;


//spDonThuoc_SelectByID_BenhNhan 257961,'Cancel',0,'Xong'
if(isset($_GET["ID_LuotKham"])){
	$store_name = "{call Gd2_thanhtoannoitru_donthuocselect (?)}";
	$params = array($_GET["ID_LuotKham"]);
}else{
		$store_name = "{call Gd2_vienphinoitru_donthuoc_byid_thutrano (?)}";
		$params = array($_GET["ID_ThuTraNo"]);
	
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
    $responce->rows[$i]['id'] = $row["ID_DonThuoc"];
    $responce->rows[$i]['cell'] = array(       
    $row["NickName"],
	$row["NgayKeDon"],
    //round($row["tienthuoc"]),
    //round($row["tienthuoctra"]),
	round($row["tienthuoc"])- round($row["tienthuoctra"]),
 	round($row["tienvon"]-$row["tienvontra"]),
      
   

);
    $i++;
}
echo json_encode($responce);
?>