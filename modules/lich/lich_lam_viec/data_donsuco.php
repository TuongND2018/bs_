<?php
$_fromDate = 0;
$_toDate =0;
$_id_nhanvien=0;
if(isset($_GET["fromdate"]))
{
    $_fromDate = $_GET["fromdate"]; // get the directio
  }
  else
  {
    $_fromDate=0;
  }

  if(isset($_GET["todate"]))
  {
    $_toDate = $_GET["todate"]; // get the directio
  }
  else
  {
    $_fromDate=0;
  }


  if (isset($_GET["id_nhanvien"])) {
    $_id_nhanvien = $_GET["id_nhanvien"];

    xemtheonhanvien($_id_nhanvien);
  } else {
    $_id_nhanvien = 0;
    xemAllnhanvien($_fromDate,$_toDate);

  }
  function xemtheonhanvien($id_nhanvien){
$data = new SQLServer; //tao lop ket noi SQL
$store_name = "{call gd2_CC_Modify_SelByIdNhanvien(?)}";
$params = array($id_nhanvien);


$get_lich = $data->query($store_name, $params);
$excute = new SQLServerResult($get_lich);
$tam = $excute->get_as_array();
$responce = new stdClass;
$i = 0;


foreach ($tam as $row) {//duyet toan bo mang tra ve
  $responce->rows[$i]['id'] = $row["IndexId"];
  $Ngayxayrasuco = $row["Ngayxayrasuco"]->format('Y/m/d');
  $Ngaygui = $row["Ngaygui"]->format('Y/m/d H:i');

 $responce->rows[$i]['id']=$row["IndexId"];
  $responce->rows[$i]['cell'] = array($row["IndexId"],
    $Ngayxayrasuco
    , $Ngaygui,
    $row["Mavuviec"],
    $row["Noidung"],
    $row["ChiTietCong"],
   $row["LogkhongHopLe"],
    $row["TreSomChiTiet"],
    $row["DenghiCongthem"],
    $row["Sent"],
    $row["TinhDitre"],
    $row["TinhRasom"],
    $row["TBPOK"],
    $row["GSCMOK"],
    $row["GSHCOK"],
    $row["Finished"],
    $row["Id_nhanvien"],
    $row["TongCong"], $row["MauDon"],

    );

  $i++;
}

echo json_encode($responce);
}
function xemAllnhanvien($pfromDate,$ptoDate){
$data = new SQLServer; //tao lop ket noi SQL
$store_name = "{call gd2_CC_Modify_SelectByTime(?,?)}";
$params = array($pfromDate,$ptoDate);
//print_r($params);

$get_lich = $data->query($store_name, $params);
$excute = new SQLServerResult($get_lich);
$tam = $excute->get_as_array();
$responce = new stdClass;
$i = 0;

foreach ($tam as $row) {//duyet toan bo mang tra ve
  $responce->rows[$i]['id'] = $row["IndexId"];
  $Ngayxayrasuco = $row["Ngayxayrasuco"]->format('Y/m/d');
  $Ngaygui = $row["Ngaygui"]->format('Y/m/d H:i');
  $responce->rows[$i]['id']=$row["IndexId"];
  $responce->rows[$i]['cell'] = array($row["IndexId"],
    $Ngayxayrasuco
    , $Ngaygui,
    $row["ID_PhongBan"],
    $row["Id_nhanvien"],
    $row["ChiTietCong"],
       $row["LogkhongHopLe"],
        $row["TreSomChiTiet"],
    $row["Mavuviec"],
    $row["Noidung"],
    $row["DenghiCongthem"],
    $row["TinhDitre"],
    $row["TinhRasom"],
    $row["TongCong"],
    $row["ccDiTre"],
    $row["ccRasom"],
    $row["TBPOK"],
    $row["GSCMOK"],
    $row["GSHCOK"],
    $row["Finished"],
    $row["Sent"],
    $row["ID_ChamCong"],  $row["MauDon"],  $row["TongCong"]


    );

  $i++;
}

echo json_encode($responce);
}

?>
