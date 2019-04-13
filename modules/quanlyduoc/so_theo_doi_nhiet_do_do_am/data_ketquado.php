<?php

$tu_ngay='';
$den_ngay='';
if(isset($_GET["tu_ngay"]))
{
   $tu_ngay= convert_date($_GET["tu_ngay"]).' 0:00:00';
}
else
{
    $tu_ngay=date("Y-m-d").' 0:00:00';
}
if(isset($_GET["den_ngay"]))
{
$den_ngay= convert_date($_GET["den_ngay"]).' 23:59:59';
}
else
{
     $den_ngay=date("Y-m-d").' 23:59:59';
}

$data= new SQLServer;
$store_name="{call GD2_SoTheoDoiNhietDo_SelectAll_FromDate_ToDate (?,?)}";
$params = array($tu_ngay,$den_ngay);
$get_lich=$data->query( $store_name, $params);
$excute= new SQLServerResult($get_lich);
$tam= $excute->get_as_array();
$responce = new stdClass;

$i=0;
foreach ($tam as $row) {
	if($row["NgayGioDo"]!='')
			$row["NgayGioDo"]=$row["NgayGioDo"]->format('H:i '.$_SESSION["config_system"]["ngaythang"]);
	else $row["NgayGioDo"]='';
	
	$nd=explode('.',$row["NhietDo"]);
	
    $responce->rows[$i]['id']=$row["ID_TheoDoiNhietDo"];
    $responce->rows[$i]['cell']=array($row["NgayGioDo"],
		$row["ID_NhanVien"],
		$nd[0],
        $row["DoAm"],
        $row["GhiChu"],
		'',
		'',
		$row["ID_TheoDoiNhietDo"],
		$row["TBNhietDo"],
		$row["TBDoAm"]
        );
     
    $i++; 
}  
echo json_encode($responce);
?>