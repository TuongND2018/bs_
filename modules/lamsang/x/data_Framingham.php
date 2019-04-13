<?php
$data= new SQLServer;//tao lop ket noi SQL
$params = array($_GET["idbenhnhan"]);//tao param cho store 
$store_name="{call GD2_Framingham_ById_BenhNhan(?)}";//tao bien khai bao store
$get_danh_muc_phong_ban=$data->query( $store_name,$params);//Goi store
$excute= new SQLServerResult($get_danh_muc_phong_ban);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 
//$responce->userdata["ids"] = $ids;
$responce = new stdClass;
$i=0;
foreach ($tam as $row) {//duyet toan bo mang tra ve

    $MaVietTat='FRAMINGHAM';
    
    $ngaygiothuchien = "";
    if (isset($row["NgayGioThucHien"])) {
        $ngaygiothuchien = $row["NgayGioThucHien"]->format("H:i ".$_SESSION["config_system"]["ngaythang"]);
    }
    
    $ngaygiochandoan = "";
    if (isset($row["NgayGioChanDoan"])) {
        $ngaygiochandoan = $row["NgayGioChanDoan"]->format("H:i ".$_SESSION["config_system"]["ngaythang"]);
    }
    if (isset($row["NgayGioThucHien"])) {
        $NgayGioThucHien = $row["NgayGioThucHien"]->format("H:i ".$_SESSION["config_system"]["ngaythang"]);
    }
    $NgayGioHenTraKQ = "";
    if (isset($row["NgayGioHenTraKQ"])) {
        $NgayGioHenTraKQ = $row["NgayGioHenTraKQ"]->format("H:i ".$_SESSION["config_system"]["ngaythang"]);
    }
    
    $responce->rows[$i]['id']=$row["ID_Kham"];
    $responce->rows[$i]['cell']=array(
       $MaVietTat,
       "FRAMINGHAM",
       $row["NgayGioTao"]->format("H:i ".$_SESSION["config_system"]["ngaythang"]),
       $row["NguoiChiDinh"],
       $row["ID_LuotKham"],
       $row["MoTa"],
       $row["KetLuan"],
       $row["ID_TrangThai"],
       $row["BSChanDoan"],
       $row["NguoiDoc"],
       $ngaygiothuchien,
       $row["NguoiThucHien"],
       $ngaygiochandoan,
       $row["ID_LuotKham"],
       $row["ID_LoaiKham"],
       $NgayGioHenTraKQ ,


          $row["Smoker"],//16
              $row["CigsOnDate"],//17
                  $row["CHOL_Total"],//18
                      $row["CHOMol"],//19
                          $row["HDLMol"],//20
                              $row["LDLMol"],//21
                                  $row["CHOL_HDL"],//22
                                      $row["CHOL_LDL"],//23
                                          $row["TG"],//24
                                              $row["SBP"],//25
                                                  $row["HRate"],//26
                                                      $row["AF"],//27
                                                          $row["CVD"],//28
               $row["Valve"],//29
                    $row["HF"],//30
                         $row["CHD"],//31
                              $row["LVH"],//32
                                   $row["DBP"],//33
                                        $row["DIABET"],//34
                                             $row["Treated"],//35
                                                  $row["Murmur"],//36
                                                       $row["Murmur"],//37
                                                            $row["PR"],//38
                $row["RMS"],//39
                 $row["IC"],//40
                  $row["GlucoSerumMol"],//41
                   $row["PR"],//42                                             
  $row["High"],//43                                             
  $row["Weight"],//44 
   $row["Gioi"],//45
    $row["Tuoi"],//46    
    $row["BMI"],//47                                            
 // $row["Ps"],//47                                             




       );
    $i++; 
}
echo json_encode($responce);
?>
