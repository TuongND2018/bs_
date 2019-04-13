<?php


$page = $_GET['page']; // get the requested page
$limit = $_GET['rows']; // get how many rows we want to have into the grid
$sidx = $_GET['sidx']; // get index row - i.e. user click to sort
$sord = $_GET['sord']; // get the direction
$count=0;
$data= new SQLServer;//tao lop ket noi SQL
$store_name="{call GD2_DM_ThuocGet(?)}";//tao bien khai bao store
$params =array( array($count, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));//tao param cho store 	

$get_danh_muc=$data->query( $store_name, $params);//Goi store
$excute= new SQLServerResult($get_danh_muc);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 


//$responce->userdata["ids"] = $ids;
$responce = new stdClass;
$responce->page = 1;
$responce->total = 1;
$responce->records = $count;
$i=0;
foreach ($tam as $row) {//duyet toan bo mang tra ve
    $responce->rows[$i]['id']=$row["ID_Thuoc"];
    $responce->rows[$i]['cell']=array($row["ID_Thuoc"],$row["MaThuoc"],$row["TenBietDuoc"],$row["Barcode"],$row["TenGoc"],$row["TenHoaDon"],$row["TenKhac"],$row["HoatChatChinh"],$row["HamLuong"],$row["ID_NuocSanXuat"],$row["ID_NhomThuoc"],$row["ID_NhomBenh"],$row["ID_DonViTinhQuyDoi"],$row["ID_DuongDung"],$row["SoLuongQuyDoi"],$row["ID_DonViTinh"],$row["TonKhoToiThieu"],$row["GhiChu"],$row["LaThuoc"],$row["Active"],$row["DoUuTien"],$row["ThuocBHYT"],$row["BHYTNoiTruOrNgTru"],$row["IsHide4GPP"]);
    $i++; 
}   
echo json_encode($responce);
?>