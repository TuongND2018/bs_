<?php


$page = $_GET['page']; // get the requested page
$limit = $_GET['rows']; // get how many rows we want to have into the grid
$sidx = $_GET['sidx']; // get index row - i.e. user click to sort
$sord = $_GET['sord']; // get the direction

$data= new SQLServer;//tao lop ket noi SQL
$store_name="{call GD2_Dutruthuoc_get(?,?)}";//tao bien khai bao store
$Year=$_SESSION["user"]["year_work"];
$Search="";
$params = array($Year,$Search);
$get_danh_muc=$data->query( $store_name, $params);//Goi store
$excute= new SQLServerResult($get_danh_muc);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 

//$responce->userdata["ids"] = $ids;
$responce = new stdClass;
$responce->page = 1;
$responce->total = 1;
$responce->records = count($tam);
$i=0;
foreach ($tam as $row) {//duyet toan bo mang tra ve
    $responce->rows[$i]['id']=$row["ID_DuTru"];
    $responce->rows[$i]['cell']=array($row["ID_DuTru"],$row["SoPhieuDuTru"],$row["NgayDuTru"]->format('Y-m-d'),$row["Id_NguoiDuTru"],$row["ID_DonHang"],$row["GhiChu"]);
    $i++; 
}   
echo json_encode($responce);
?>