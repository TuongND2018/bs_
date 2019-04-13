<!DOCTYPE html>
<html>
  <head>
  <style>
  body{
    margin:0px;
    padding:0px;
  }
  
  </style> 
  <meta charset="utf-8">
</head>
<body> 
  <?php
        $data= new SQLServer;//tao lop ket noi SQL
        $params = array($_GET["id_benhnhan"]);//tao param cho store 
        $store_name="{call GD2_GetThongTinBenhNhan(?)}";//tao bien khai bao store
        $get_thongtinbenhnhan=$data->query( $store_name,$params);//Goi store
        $excute= new SQLServerResult($get_thongtinbenhnhan);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
        $thongtinbenhnhan= $excute->get_as_array();//Tra ve mang toan bo data lay duoc  

        $params2 = array($_GET["id_kham"]);//tao param cho store 
        $store_name2="{call GD2_GetTuoiThai_SieuAm4D_ByID_Kham(?)}";//tao bien khai bao store
        $get_khamthai=$data->query( $store_name2,$params2);//Goi store
        $excute2= new SQLServerResult($get_khamthai);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
        $khamthai= $excute2->get_as_array();//Tra ve mang toan bo data lay duoc
    
    //print_r($khamthai);

     ?>
     
<?php
     $sotuanthai=round($khamthai[0]["SoNgayThai"]/7);
     $date=$khamthai[0]['NgayGioTao']->format('Y-m-d');
     $ngaythai=$khamthai[0]["SoNgayThai"];
     if($sotuanthai<="24"){
       $tedi="40";
          for($i=0;$i<=3;$i++){
                  echo('<table cellpadding="0" cellspacing="0"  width="95%" style="height:100px;page-break-after:always"><br<tr>
                    <td colspan="2"><img height="40px" style="margin-top:15px" src="images/logo_print.png" /><b  style="margin-left: 45px;">PHIẾU GIẢM GIÁ '.get_system_one_config("MucGiamGiaSieuAmThai").' VND</b></td>
                  </tr>  
                  <tr>
                    <td><b>'.$thongtinbenhnhan[0]["HoLotBenhNhan"]." ".$thongtinbenhnhan[0]["TenBenhNhan"].'</b></td>
                    <td style="text-align:right">'.$thongtinbenhnhan[0]["MaBenhNhan"].'</td>
                  </tr>
                  <tr>
                    <td colspan="2" style="font-size:13px" >Sử dụng để siêu âm thai khi '.$tedi.' tuần tuổi ( '.date($_SESSION["config_system"]["ngaythang"], strtotime(" +".($tedi * 7-$ngaythai)." days", strtotime($date))).' - '.date($_SESSION["config_system"]["ngaythang"], strtotime(" +".($tedi * 7-$ngaythai+6)." days", strtotime($date))).' )</td>
                  </tr></table> ');
                 $tedi=$tedi-"4";
                 }
     }
     else if($sotuanthai>"24" && $sotuanthai<="28"){
       $tedi="40";
          for($i=0;$i<=2;$i++){
                  echo('<table cellpadding="0" cellspacing="0"  width="95%" style="height:100px;page-break-after:always"><tr>
                    <td colspan="2"><img height="40px" style="margin-top:15px" src="images/logo_print.png" /><b  style="margin-left: 45px;">PHIẾU GIẢM GIÁ '.get_system_one_config("MucGiamGiaSieuAmThai").' VND</b></td>
                  </tr>  
                  <tr>
                    <td><b>'.$thongtinbenhnhan[0]["HoLotBenhNhan"]." ".$thongtinbenhnhan[0]["TenBenhNhan"].'</b></td>
                    <td style="text-align:right">'.$thongtinbenhnhan[0]["MaBenhNhan"].'</td>
                  </tr>
                  <tr>
                    <td colspan="2" style="font-size:13px" >Sử dụng để siêu âm thai khi '.$tedi.' tuần tuổi ( '.date($_SESSION["config_system"]["ngaythang"], strtotime(" +".($tedi * 7-$ngaythai)." days", strtotime($date))).' - '.date($_SESSION["config_system"]["ngaythang"], strtotime(" +".($tedi * 7-$ngaythai+6)." days", strtotime($date))).' )</td>
                  </tr></table> ');
                 $tedi=$tedi-"4";
                 }
     }
     else {
      $tedi="40";
          for($i=0;$i<=1;$i++){
                  echo('<table cellpadding="0" cellspacing="0"  width="95%" style="height:100px;page-break-after:always"><tr>
                    <td colspan="2"><img height="40px" style="margin-top:15px" src="images/logo_print.png" /><b  style="margin-left: 45px;">PHIẾU GIẢM GIÁ '.get_system_one_config("MucGiamGiaSieuAmThai").' VND</b></td>
                  </tr>  
                  <tr>
                    <td><b>'.$thongtinbenhnhan[0]["HoLotBenhNhan"]." ".$thongtinbenhnhan[0]["TenBenhNhan"].'</b></td>
                    <td style="text-align:right">'.$thongtinbenhnhan[0]["MaBenhNhan"].'</td>
                  </tr>
                  <tr>
                    <td colspan="2" style="font-size:13px" >Sử dụng để siêu âm thai khi '.$tedi.' tuần tuổi ( '.date($_SESSION["config_system"]["ngaythang"], strtotime(" +".($tedi * 7-$ngaythai)." days", strtotime($date))).' - '.date($_SESSION["config_system"]["ngaythang"], strtotime(" +".($tedi * 7-$ngaythai+6)." days", strtotime($date))).' )</td>
                  </tr></table> ');
                 $tedi=$tedi-"4";
                 }
     }
    
     ?>


    
   
</body>
</html>  
  <script type="text/javascript">
    $(document).ready(function() {
       
           print_preview();
    });
</script>