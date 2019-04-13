

<?php
 $fd=$_GET["fromdate"];
 $td=$_GET["todate"];
 $ID_NhanVien=$_GET["ID_NhanVien"];

$params2 = array($fd,$td,$ID_NhanVien);


$data= new SQLServer;//tao lop ket noi SQL
$store_name="{call GD2_LayTongHopChamCongByNhanVien(?,?,?)}";
$params = array();
$get_lich=$data->query( $store_name, $params2);
//print_r($params2);
$excute= new SQLServerResult($get_lich);
$tam= $excute->get_as_array();
$responce = new stdClass;
$i=0;
foreach ($tam as $row) {//duyet toan bo mang tra ve
    $responce->rows[$i]['id']=$row["ID_Nhanvien"];
    $responce->rows[$i]['cell']=array($row["ID_Nhanvien"],$row["TongGio"]);

    $i++;
}
  echo json_encode($responce);
?>
