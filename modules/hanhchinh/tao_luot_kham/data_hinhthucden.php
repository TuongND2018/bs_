<?php

$data= new SQLServer;
	
$params = array('DM_HinhThucBNDen','ID_HinhThucDen,TenHinhThucDen','','');
$get_lich=$data->query( '{call Gd2_combobox_dialog(?,?,?,?)}', $params);
$excute= new SQLServerResult($get_lich);
$tam= $excute->get_as_array();
$responce = new stdClass;
$i=1;
 $responce->rows[0]['id']=0;
 $responce->rows[0]['cell']=array('');
foreach ($tam as $row) {
    $responce->rows[$i]['id']=$row["ID_HinhThucDen"];
    $responce->rows[$i]['cell']=array($row["TenHinhThucDen"]);
     
    $i++; 
}  
echo json_encode($responce);
 
?>

