<?php
$data= new SQLServer;//tao lop ket noi SQL 
$store_name="{call GD2_bhyt_getby_idbenhnhan (?)}";
$params = array($_GET['id_benhnhan']); 
$get_lich=$data->query( $store_name, $params);
$excute= new SQLServerResult($get_lich);
$tam= $excute->get_as_array();
$responce ='';
$i=0;

foreach ($tam as $row) {//duyet toan bo mang tra ve
    $responce->rows[$i]['id']=$row["ID_The"];
    $responce->rows[$i]['cell']=array($row["SoThe"]
									 							  
									  ,$row["DiaChiTheBHYT"]
									  ,$row["Ma_KCB_BanDau"]
									 
									  ,$row["HanSD_TuNgay"]->format($_SESSION["config_system"]["ngaythang"])
								      ,$row["HanSD_DenNgay"]->format($_SESSION["config_system"]["ngaythang"])
									  ,$row["NgayCap"]
	
	);     
    $i++; 
 
}  
echo json_encode($responce);
?>