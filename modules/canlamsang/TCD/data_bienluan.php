<?php
$data= new SQLServer;//tao lop ket noi SQL 
$store_name="{call GD2_GetBienLuanTCD(?,?,?,?,?,?)}";
$params = array($_GET["LMCA"],$_GET["RMCA"],$_GET["LACA"],$_GET["RACA"],$_GET["LPCA"],$_GET["RPCA"]); 
$get_lich=$data->query( $store_name, $params);
$excute= new SQLServerResult($get_lich);

$tam= $excute->get_as_array();

$responce = new stdClass;
$i=0;
foreach ($tam as $row) {//duyet toan bo mang tra ve
    $responce->rows[$i]['id']='';
    $responce->rows[$i]['cell']=array($row["mota"],$row["ketluan"]);
     
    $i++; 
}  
echo json_encode($responce);
?>