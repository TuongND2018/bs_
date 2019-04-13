<?php


if(isset($_GET["ID_ThuTraNo"]))
{
   $ID_ThuTraNo= $_GET["ID_ThuTraNo"];
}
else
{
   $ID_ThuTraNo=0;
   // echo $tu_ngay;
}


$data= new SQLServer;
$store_name="{call GD2_HoaDonKham (?)}";
$params = array($ID_ThuTraNo);
$get_lich=$data->query( $store_name, $params);
$excute= new SQLServerResult($get_lich);
$tam= $excute->get_as_array();
$responce = new stdClass;
$i=0;

foreach ($tam as $row) {

$responce->rows[$i]['cell']=array(
	  $row["Ten_Nhom_BHYT"],
	$row["ThanhTien"],
  
    );

$i++;
}
echo json_encode($responce);
?>