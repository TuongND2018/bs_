<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Report</title>
<style type="text/css" media="print">
body{
    overflow:auto;
}
pre {
 white-space: pre-wrap;       /* css-3 */
 white-space: -moz-pre-wrap;  /* Mozilla, since 1999 */
 white-space: -pre-wrap;      /* Opera 4-6 */
 white-space: -o-pre-wrap;    /* Opera 7 */
 word-wrap: break-word;       /* Internet Explorer 5.5+ */
 font:12px Tahoma, Geneva, sans-serif;
}
 table { page-break-inside:auto }
 tr    { page-break-inside:avoid; page-break-after:auto }
/*#footer
{
    clear: both;
    color: Black;
    text-align: right;
    vertical-align: middle;
    line-height: normal;
    margin: 0;
    padding-right: 10px!important;
    position: fixed;
    bottom: 0px;
    width: 90%;
    font-size: 13px;
    border-top:1px solid #000;
    right: 5px;
     position: fixed;
            top: 1;

}*/


/*
 thead
     {
                border-bottom:2px solid #000;
                display: table-header-group!important;
               border-left:2px solid #000;
    }
  table { page-break-inside:auto }
  tr    { page-break-inside:avoid; page-break-after:auto }
*/

 <?php
 if($_GET['inrutgon']==0){

	 echo '#tb_center{
	 font-size:12px!important;

		 };';
 }else{
	  echo '#tb_center{
		 font-size:11px!important;
	 	line-height:1.5!important;
		 };';

 }


 ?>


</style>
</head>

<body style=" margin-left:55px;">
    <?php
        $data= new SQLServer;//tao lop ket noi SQL
        $params = array($_GET["id_benhnhan"]);//tao param cho store
        $store_name="{call GD2_GetThongTinBenhNhan(?)}";//tao bien khai bao store
        $get_thongtinbenhnhan=$data->query( $store_name,$params);//Goi store
        $excute= new SQLServerResult($get_thongtinbenhnhan);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
        $thongtinbenhnhan= $excute->get_as_array();//Tra ve mang toan bo data lay duoc


        $params1 = array($_GET["id_benhnhan"],$_GET["id_luotkham"]);//tao param cho store
        $store_name1="{call GD2_Xetnghiem_Report(?,?)}";//tao bien khai bao store
        $get_thongtinluotkham=$data->query( $store_name1,$params1);//Goi store
        $excute1= new SQLServerResult($get_thongtinluotkham);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
        $thongtinluotkham= $excute1->get_as_array();//Tra ve mang toan bo data lay duoc

        /* $params2 = array(get_system_one_config("GD2_Bs_XetNghiem"));
        $store_name2="{call GD2_NhanVien_SelectAll_ByID_NhanVien(?)}";//tao bien khai bao store
        $get_thongtinluotkham2=$data->query( $store_name2,$params2);//Goi store
        $excute2= new SQLServerResult($get_thongtinluotkham2);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
        $thongtinluotkham2= $excute2->get_as_array();//Tra ve */
        //print_r($_GET["id_luotkham"])
          if($thongtinluotkham!=null){
                $ngay=$thongtinluotkham[0]["NgayGioTao"]->format("H:i ".$_SESSION["config_system"]["ngaythang"]);
                $nhanvien=$thongtinluotkham[0]["tennhanvien"];
                $viettat=$thongtinluotkham[0]["VietTat"];
                $hinhchuky=$thongtinluotkham[0]["HinhChuKy"];
          }
          else{
             $ngay="";
             $nhanvien="";
             $viettat="";
             $hinhchuky="";
          }

       // print_r($thongtinluotkham[0]['NguoiDuyet']);
    ?>

    <?php if($_GET["header"]=="left"){ ?>
        <div style="font-size:14px;font-family:Tahoma, Geneva, sans-serif;-webkit-transform: rotate(270deg);-moz-transform: rotate(270deg);-o-transform: rotate(270deg);writing-mode: rl-tb;position:absolute;top:550px;left:-340px">  <span style="letter-spacing: 0.5px;font-weight:bold">FAMILY</span> <img src="images/logo_print.png" />  <span style="letter-spacing: 0.5px;text-transform:uppercase"><?php echo $_SESSION["com"]["TenBenhVien"]?></span> - <?php echo $_SESSION["com"]["DiaChi"]?> * T: <?php echo $_SESSION["com"]["SoDT"]?></div>
    <?php } ?>
    <?php if($_GET["header"]=="top"){ ?>
    <table cellpadding="0" cellspacing="0" border="0" style="width:100%;font-family:Tahoma, Geneva, sans-serif;">
         <tr style="font-size:14px;">
             <td style=" width:60%">
                <span style="letter-spacing: 0.5px;font-weight:bold">FAMILY</span> <img src="images/logo_print.png" />
                <br />
                <span style="letter-spacing: 0.5px;text-transform:uppercase"><?php echo $_SESSION["com"]["TenBenhVien"]?></span>
             </td>
             <td style=" width:40%; text-align:right">
                Địa chỉ: <?php echo $_SESSION["com"]["DiaChi"]?>
                <br />

                SĐT: <?php echo $_SESSION["com"]["SoDT"]?>
             </td>
         </tr>
     </table>
     <?php  } ?>
     <?php if($_GET["header"]=="left"){ ?>
        <div style=" margin-left:55px;margin-top:20px">
     <?php  } ?>
     <table cellpadding="0" cellspacing="0" border="0" style="width:100%;font-family:Tahoma, Geneva, sans-serif;color:#00b38b">
        <br>
        <tr>
             <td style="text-align:center">
                <span style="letter-spacing: 0.5px;font-weight:bold;font-size:26px;">KẾT QUẢ XÉT NGHIỆM Y KHOA</span>
                <br />
                <span style="font-weight:bold;font-size:20px;">LABORATORY REPORT</span>
                <br />
                <span style="font-weight:bold;font-size:20px;">*******</span>
                <div style="height:10px;">
                </div>
             </td>

         </tr>
     </table>
     <table cellpadding="0" cellspacing="0" border="0" style="color:#036;font-size:13px;line-height: 1.7; width:100%;font-family:Tahoma, Geneva, sans-serif; border-top:1px solid #000; border-bottom:1px solid #000; padding:5px 0px">
         <tr>
            <td> Họ tên: <b><?=$thongtinbenhnhan[0]["HoLotBenhNhan"]." ".$thongtinbenhnhan[0]["TenBenhNhan"];?></b></td>
            <td>Tuổi: <?=$thongtinbenhnhan[0]["Tuoi"];?></td>
            <td>G.tính: <?=$thongtinbenhnhan[0]["Gioi"];?></td>
            <td>ID: <?=$thongtinbenhnhan[0]["MaBenhNhan"];?></td>
         </tr>
        <tr>
            <td  style="width:65%">Địa chỉ: <?=$thongtinbenhnhan[0]["DiaChi"];?></td>
            <td colspan="3">Ngày khám: <?=$ngay;?></td>
         </tr>
     </table>
     <table cellpadding="0" id="tb_center" cellspacing="0" border="0"  style="border-collapse: collapse;line-height:1.7;margin-top:10px;color:#036; width:100%;font-family:Tahoma, Geneva, sans-serif; border-top:2px solid #000; border-bottom:2px solid #000; padding:5px 0px">
          <thead  >
             <tr >
                <td align="center" style="width:27%"><b>TÊN XÉT NGHIỆM</b></td>
                <td align="center"style="width:13%"><b >KẾT QUẢ</b></td>
                <td align="center"style="width:25%"><b >GIÁ TRỊ BÌNH THƯỜNG<br>(Đơn vị hay dùng)</b></td>
                <td align="center"style="width:10%"><b >KẾT QUẢ</b></td>
                <td align="center"style="width:25%"><b >GIÁ TRỊ BÌNH THƯỜNG<br>(Đơn vị ít dùng)</b></td>
             </tr>
        </thead>
        <tbody>
           <?php
           $zo="0";
           $dem=0;
		   $pieces = explode(";", $_GET["ID_xetnghiem"]);
			for($i=0;$i<=count($thongtinluotkham)-1;$i++){
				if (in_array($thongtinluotkham[$i]['ID_KetQuaXN'], $pieces))
			{
				if($thongtinluotkham[$i]['NguoiDuyet']!=""){
                    if($zo=="0"){
                        if($thongtinluotkham[$i]['ID_LoaiKham']=="3746"){
                            $id_kham=$thongtinluotkham[$i]['ID_Kham'];
                            $dem=0;
                          for($j=0;$j<=count($thongtinluotkham)-1;$j++){
                            if($thongtinluotkham[$j]['ID_XetNghiem']=="22166" && $thongtinluotkham[$j]['ID_Kham']==$id_kham ){
                                 $RBC=$thongtinluotkham[$j]['KetQua'];
                                 $dem++;
                            }
                            else if($thongtinluotkham[$j]['ID_XetNghiem']=="22167" && $thongtinluotkham[$j]['ID_Kham']==$id_kham ){
                                 $HGB=$thongtinluotkham[$j]['KetQua'];
                                 $dem++;
                            }
                            else if($thongtinluotkham[$j]['ID_XetNghiem']=="22168" && $thongtinluotkham[$j]['ID_Kham']==$id_kham ){
                                 $HCT=$thongtinluotkham[$j]['KetQua'];
                                 $dem++;
                            }
                            else if($thongtinluotkham[$j]['ID_XetNghiem']=="22176" && $thongtinluotkham[$j]['ID_Kham']==$id_kham ){
                                 $RDW_CV=$thongtinluotkham[$j]['KetQua'];
                                 $dem++;
                            }



                          }
                         // echo $dem;
                          echo ('<tr style=" border-top:2px solid #000;"> <td width="240px" colspan="1"><b style="margin-left:10px">'.$thongtinluotkham[$i]['TenLoaiKham'].' ('.$thongtinluotkham[$i]['NgayGioTao']->format('H:i d/m/y').')</b></td>');
                          if($dem>="4"){
                           $MCV = Round($HCT / $RBC * 10, 1);
                           $MCH = Round($HGB / $RBC, 1);
                           $MCHC = Round($HGB / $HCT * 100, 1);
                           $MCV = Round($HCT / $RBC * 10, 1);
                           $MCH = Round($HGB / $RBC, 1);
                           $MCHC = Round($HGB / $HCT * 100, 1);

                               echo('<td colspan="4" style="font-size:11px;color:#00b38b"><i>');
                           if(($MCH < 28 Or $MCHC < 280) And $MCV < 80 And ($RDW_CV <= 14) And ($RBC < 3.5 Or $HGB < 100)){
                                echo("TM nhược sắc,Hồng cầu nhỏ , Kích thước HC đều.");
                                echo("(TD: Bệnh mạn tính; Thalassemia thể nhẹ không có tan máu).");
                                echo("MCV: " . $MCV . " (bt: 85-95 fl)  - MCH: " .$MCH. " (bt: 28-32 pg) - MCHC: " .$MCHC. " (bt: 320-360 g/l)");
                           }
                           else if(($MCH < 28 Or $MCHC < 280) And $MCV >= 80 And ($RDW_CV <= 14) And ($RBC < 3.5 Or $HGB < 100)){
                                echo("TM nhược sắc , Kích thước HC đều.");
                                echo("(TD: Bệnh mạn tính; Thalassemia thể nhẹ không có tan máu).");
                                echo("MCV: " . $MCV . " (bt: 85-95 fl)  - MCH: " .$MCH. " (bt: 28-32 pg) - MCHC: " .$MCHC. " (bt: 320-360 g/l)");
                           }
                            else if(($MCH < 28 Or $MCHC < 280) And $MCV < 80 And ($RDW_CV > 14) And ($RBC < 3.5 Or $HGB < 100)){
                                echo("TM nhược sắc ,Hồng cầu nhỏ , Kích thước HC đều.");
                                echo("(TD: Mất máu mạn,hấp thu kém kéo dài , nhu cầu tăng; Thalassemia nặng).");
                                echo("MCV: " . $MCV . " (bt: 85-95 fl)  - MCH: " .$MCH. " (bt: 28-32 pg) - MCHC: " .$MCHC. " (bt: 320-360 g/l)");
                           }
                            else if(($MCH < 28 Or $MCHC < 280) And $MCV >= 80 And ($RDW_CV > 14) And ($RBC < 3.5 Or $HGB < 100)){
                                echo("TM nhược sắc , Kích thước HC không đều.");
                                echo("(TD: Mất máu mạn,hấp thu kém kéo dài , nhu cầu tăng; Thalassemia nặng).");
                                echo("MCV: " . $MCV . " (bt: 85-95 fl)  - MCH: " .$MCH. " (bt: 28-32 pg) - MCHC: " .$MCHC. " (bt: 320-360 g/l)");
                           }
                           else if((28 <= $MCH And $MCH <= 34 And 280 <= $MCHC And $MCHC <= 380) And (80 <= $MCV And $MCV <= 100) And ($RDW_CV <= 14) And ($RBC < 3.5 Or $HGB < 100)){
                                echo("TM đằng sắc ,Hồng câu bình thường, kích thước đều.");
                                echo("(TD: Bệnh mạn tính; Mất máu cấp)");
                                echo("MCV: " . $MCV . " (bt: 85-95 fl)  - MCH: " .$MCH. " (bt: 28-32 pg) - MCHC: " .$MCHC. " (bt: 320-360 g/l)");
                           }
                           else if((28 <= $MCH And $MCH <= 34 And 280 <= $MCHC And $MCHC <= 380) And (80 <= $MCV And $MCV <= 100) And $RDW_CV > 14 And ($RBC < 3.5 Or $HGB < 100) ){
                                echo("TM đằng sắc, Hồng cầu bình thường, kích thước không đều.");
                                echo("TD:Giai đoạn sớm của thiếu mái dinh dưỡng;Xơ tủy;Rối loạn sinh tủy.");
                                 echo("MCV: " . $MCV . " (bt: 85-95 fl)  - MCH: " .$MCH. " (bt: 28-32 pg) - MCHC: " .$MCHC. " (bt: 320-360 g/l)");
                           }
                            else if((28 <= $MCH And $MCH <= 34 And 280 <= $MCHC And $MCHC <= 380) And ($MCV > 100) And ($RDW_CV <= 14) And ($RBC < 3.5 Or $HGB < 100)){
                                echo("TM đằng sắc,Hồng cầu to kích thước đều.");
                                echo("TD:Suy tủy xương.");
                                echo("MCV: " . $MCV . " (bt: 85-95 fl)  - MCH: " .$MCH. " (bt: 28-32 pg) - MCHC: " .$MCHC. " (bt: 320-360 g/l)");
                            }
                           else if((28 <= $MCH And $MCH <= 34 And 280 <= $MCHC And $MCHC <= 380) And ($MCV > 100) And $RDW_CV > 14 And ($RBC < 3.5 Or $HGB < 100)){
                                echo("TM đằng sắc, Hồng cầu to kích thước không đều.");
                                echo("TD: Thiếu B12 hoặc folic;Tan máu tự miễn; Ngưng kết lạnh;Trẻ sơ sinh.");
                                echo("MCV: " . $MCV . " (bt: 85-95 fl)  - MCH: " .$MCH. " (bt: 28-32 pg) - MCHC: " .$MCHC. " (bt: 320-360 g/l)");
                             }
                             else  if( $MCH > 34 Or $MCHC > 380) {
                                echo("Cần kiểm tra lại vì không có sắc tuyệt đối.");
                             }
                             else{
                                echo("MCV: " . $MCV . " (bt: 85-95 fl)  - MCH: " .$MCH. " (bt: 28-32 pg) - MCHC: " .$MCHC. " (bt: 320-360 g/l)");
                             }

                              echo('</i></td></tr><tr><td ><i style="margin-left:20px">'.$thongtinluotkham[$i]['TenXetNghiem'].'</i></td>');

                             if($thongtinluotkham[$i]['Color']=="Red"){
                                            echo('<td align="center" width="80px" style="margin-left: 65px;color:red"><strong>'.$thongtinluotkham[$i]['KetQua'].'</strong></td>');
                                        }
                                        else if($thongtinluotkham[$i]['Color']=="Blue"){
                                            echo('<td align="center" width="80px" style="margin-left: 65px;color:Blue"><strong>'.$thongtinluotkham[$i]['KetQua'].'</strong></td>');
                                        }
                                        else if($thongtinluotkham[$i]['Color']=="Orange"){
                                            echo('<td align="center" width="80px" style="margin-left: 65px;color:Orange"><strong>'.$thongtinluotkham[$i]['KetQua'].'</strong></td>');
                                        }
                                        else{
                                            echo('<td align="center" width="80px" style="margin-left: 65px;color:black"><strong>'.$thongtinluotkham[$i]['KetQua'].'</strong></td>');
                                        }
                                        echo ('<td align="center"><i style="width:200px">'.$thongtinluotkham[$i]['GiaTriBinhThuong1'].'</i></td><td width="80px" align="center"><strong>'.$thongtinluotkham[$i]['KQ2'].'</strong></td><td width="140px" align="center">'.$thongtinluotkham[$i]['GiaTriBinhThuong2'].'</td></tr>');

                          }

                        }
                        else{
                                    echo ('<tr style=" border-top:2px solid #000;"> <td  colspan="2" ><b style="margin-left:10px">'.$thongtinluotkham[$i]['TenLoaiKham'].' ('.$thongtinluotkham[$i]['NgayGioTao']->format('H:i d/m/y').')</b></td>');

                                 if($thongtinluotkham[$i]['ID_LoaiKham']!="3902"){
                                    echo('<td colspan="4" style="font-size:11px;color:#00b38b"><i>');

                                 if($thongtinluotkham[$i]['MoTa']!=""){
                                     $mota=str_replace("\n","<br>",$thongtinluotkham[$i]['MoTa']);
                                 list($ketqua, $ketluan) = explode('|||', $mota);
                                 if($ketqua!=""){
                                    echo('Kết quả:'.$ketqua.'<br>');

                                 }
                                 if($ketluan!=" "){
                                    echo('Kết luận:'.$ketluan);
                                 }

                                 }
                                echo('</td>');
                                 }

                                        echo ('</tr><tr><td><i style="margin-left:20px">'.$thongtinluotkham[$i]['TenXetNghiem'].'</i></td>');


                                        if($thongtinluotkham[$i]['Color']=="Red"){
                                            echo('<td align="center" width="80px" style="margin-left: 65px;color:red"><strong>'.$thongtinluotkham[$i]['KetQua'].'</strong></td>');
                                        }
                                        else if($thongtinluotkham[$i]['Color']=="Blue"){
                                            echo('<td  align="center" width="80px" style="margin-left: 65px;color:Blue"><strong>'.$thongtinluotkham[$i]['KetQua'].'</strong></td>');
                                        }
                                        else if($thongtinluotkham[$i]['Color']=="Orange"){
                                            echo('<td  align="center" width="80px" style="margin-left: 65px;color:Orange"><strong>'.$thongtinluotkham[$i]['KetQua'].'</strong></td>');
                                        }
                                        else{
                                            echo('<td align="center" width="80px" style="margin-left: 65px;color:black"><strong>'.$thongtinluotkham[$i]['KetQua'].'</strong></td>');
                                        }
                                        echo ('<td align="center"><i style="width:200px">'.$thongtinluotkham[$i]['GiaTriBinhThuong1'].'</i></td><td width="80px" align="center"><strong>'.$thongtinluotkham[$i]['KQ2'].'</strong></td><td width="140px" align="center">'.$thongtinluotkham[$i]['GiaTriBinhThuong2'].'</td></tr>');
                            }
                   }
                    else{

                        if($thongtinluotkham[$i]['ID_Kham']==$thongtinluotkham[$i-1]['ID_Kham']){

                            echo ('<tr ><td ><i style="margin-left:20px">'.$thongtinluotkham[$i]['TenXetNghiem'].'</i></td>');
                            if($thongtinluotkham[$i]['Color']=="Red"){
                                echo('<td align="center" width="80px" style="margin-left: 65px;color:red"><strong>'.$thongtinluotkham[$i]['KetQua'].'</strong></td>');
                            }
                            else if($thongtinluotkham[$i]['Color']=="Blue"){
                                echo('<td align="center" width="80px" style="margin-left: 65px;color:Blue"><strong>'.$thongtinluotkham[$i]['KetQua'].'</strong></td>');
                            }
                            else if($thongtinluotkham[$i]['Color']=="Orange"){
                                echo('<td align="center" width="80px" style="margin-left: 65px;color:Orange"><strong>'.$thongtinluotkham[$i]['KetQua'].'</strong></td>');
                            }
                            else{
                                echo('<td align="center" width="80px" style="margin-left: 65px;color:black"><strong>'.$thongtinluotkham[$i]['KetQua'].'</strong></td>');
                            }
                            echo ('<td align="center"><i style="width:200px">'.$thongtinluotkham[$i]['GiaTriBinhThuong1'].'</i></td><td width="80px" align="center"><strong>'.$thongtinluotkham[$i]['KQ2'].'<strong></td><td width="140px" align="center">'.$thongtinluotkham[$i]['GiaTriBinhThuong2'].'</td></tr>');
                        }
                        else{
                            echo ('<tr style=" border-top:2px solid #000;"> <td colspan="2" "><b style="margin-left:10px">'.$thongtinluotkham[$i]['TenLoaiKham'].' ('.$thongtinluotkham[$i]['NgayGioTao']->format('H:i d/m/y').')</b></td>');
                             if($thongtinluotkham[$i]['ID_LoaiKham']=="3746"){
                                $id_kham=$thongtinluotkham[$i]['ID_Kham'];
                                 for($j=0;$j<=count($thongtinluotkham)-1;$j++){
                            if($thongtinluotkham[$j]['ID_XetNghiem']=="22166" && $thongtinluotkham[$j]['ID_Kham']==$id_kham){
                                 $RBC=$thongtinluotkham[$j]['KetQua'];
                                 $dem++;
                            }
                            else if($thongtinluotkham[$j]['ID_XetNghiem']=="22167" && $thongtinluotkham[$j]['ID_Kham']==$id_kham){
                                 $HGB=$thongtinluotkham[$j]['KetQua'];
                                 $dem++;
                            }
                            else if($thongtinluotkham[$j]['ID_XetNghiem']=="22168" && $thongtinluotkham[$j]['ID_Kham']==$id_kham){
                                 $HCT=$thongtinluotkham[$j]['KetQua'];
                                 $dem++;
                            }
                            else if($thongtinluotkham[$j]['ID_XetNghiem']=="22176" && $thongtinluotkham[$j]['ID_Kham']==$id_kham){
                                 $RDW_CV=$thongtinluotkham[$j]['KetQua'];
                                 $dem++;
                            }
                             }
                             if($dem>="4"){
                                 $MCV = Round($HCT / $RBC * 10, 1);
                           $MCH = Round($HGB / $RBC, 1);
                           $MCHC = Round($HGB / $HCT * 100, 1);
                           $MCV = Round($HCT / $RBC * 10, 1);
                           $MCH = Round($HGB / $RBC, 1);
                           $MCHC = Round($HGB / $HCT * 100, 1);

                               echo('<td colspan="4" style="font-size:11px;color:#00b38b"><i>');
                           if(($MCH < 28 Or $MCHC < 280) And $MCV < 80 And ($RDW_CV <= 14) And ($RBC < 3.5 Or $HGB < 100)){
                                echo("TM nhược sắc,Hồng cầu nhỏ , Kích thước HC đều.");
                                echo("(TD: Bệnh mạn tính; Thalassemia thể nhẹ không có tan máu).");
                                echo("MCV: " . $MCV . " (bt: 85-95 fl)  - MCH: " .$MCH. " (bt: 28-32 pg) - MCHC: " .$MCHC. " (bt: 320-360 g/l)");
                           }
                           else if(($MCH < 28 Or $MCHC < 280) And $MCV >= 80 And ($RDW_CV <= 14) And ($RBC < 3.5 Or $HGB < 100)){
                                echo("TM nhược sắc , Kích thước HC đều.");
                                echo("(TD: Bệnh mạn tính; Thalassemia thể nhẹ không có tan máu).");
                                echo("MCV: " . $MCV . " (bt: 85-95 fl)  - MCH: " .$MCH. " (bt: 28-32 pg) - MCHC: " .$MCHC. " (bt: 320-360 g/l)");
                           }
                            else if(($MCH < 28 Or $MCHC < 280) And $MCV < 80 And ($RDW_CV > 14) And ($RBC < 3.5 Or $HGB < 100)){
                                echo("TM nhược sắc ,Hồng cầu nhỏ , Kích thước HC đều.");
                                echo("(TD: Mất máu mạn,hấp thu kém kéo dài , nhu cầu tăng; Thalassemia nặng).");
                                echo("MCV: " . $MCV . " (bt: 85-95 fl)  - MCH: " .$MCH. " (bt: 28-32 pg) - MCHC: " .$MCHC. " (bt: 320-360 g/l)");
                           }
                            else if(($MCH < 28 Or $MCHC < 280) And $MCV >= 80 And ($RDW_CV > 14) And ($RBC < 3.5 Or $HGB < 100)){
                                echo("TM nhược sắc , Kích thước HC không đều.");
                                echo("(TD: Mất máu mạn,hấp thu kém kéo dài , nhu cầu tăng; Thalassemia nặng).");
                                echo("MCV: " . $MCV . " (bt: 85-95 fl)  - MCH: " .$MCH. " (bt: 28-32 pg) - MCHC: " .$MCHC. " (bt: 320-360 g/l)");
                           }
                           else if((28 <= $MCH And $MCH <= 34 And 280 <= $MCHC And $MCHC <= 380) And (80 <= $MCV And $MCV <= 100) And ($RDW_CV <= 14) And ($RBC < 3.5 Or $HGB < 100)){
                                echo("TM đằng sắc ,Hồng câu bình thường, kích thước đều.");
                                echo("(TD: Bệnh mạn tính; Mất máu cấp)");
                                echo("MCV: " . $MCV . " (bt: 85-95 fl)  - MCH: " .$MCH. " (bt: 28-32 pg) - MCHC: " .$MCHC. " (bt: 320-360 g/l)");
                           }
                           else if((28 <= $MCH And $MCH <= 34 And 280 <= $MCHC And $MCHC <= 380) And (80 <= $MCV And $MCV <= 100) And $RDW_CV > 14 And ($RBC < 3.5 Or $HGB < 100) ){
                                echo("TM đằng sắc, Hồng cầu bình thường, kích thước không đều.");
                                echo("TD:Giai đoạn sớm của thiếu mái dinh dưỡng;Xơ tủy;Rối loạn sinh tủy.");
                                 echo("MCV: " . $MCV . " (bt: 85-95 fl)  - MCH: " .$MCH. " (bt: 28-32 pg) - MCHC: " .$MCHC. " (bt: 320-360 g/l)");
                           }
                            else if((28 <= $MCH And $MCH <= 34 And 280 <= $MCHC And $MCHC <= 380) And ($MCV > 100) And ($RDW_CV <= 14) And ($RBC < 3.5 Or $HGB < 100)){
                                echo("TM đằng sắc,Hồng cầu to kích thước đều.");
                                echo("TD:Suy tủy xương.");
                                echo("MCV: " . $MCV . " (bt: 85-95 fl)  - MCH: " .$MCH. " (bt: 28-32 pg) - MCHC: " .$MCHC. " (bt: 320-360 g/l)");
                            }
                           else if((28 <= $MCH And $MCH <= 34 And 280 <= $MCHC And $MCHC <= 380) And ($MCV > 100) And $RDW_CV > 14 And ($RBC < 3.5 Or $HGB < 100)){
                                echo("TM đằng sắc, Hồng cầu to kích thước không đều.");
                                echo("TD: Thiếu B12 hoặc folic;Tan máu tự miễn; Ngưng kết lạnh;Trẻ sơ sinh.");
                                echo("MCV: " . $MCV . " (bt: 85-95 fl)  - MCH: " .$MCH. " (bt: 28-32 pg) - MCHC: " .$MCHC. " (bt: 320-360 g/l)");
                             }
                             else  if( $MCH > 34 Or $MCHC > 380) {
                                echo("Cần kiểm tra lại vì không có sắc tuyệt đối.");
                             }
                             else{
                                echo("MCV: " . $MCV . " (bt: 85-95 fl)  - MCH: " .$MCH. " (bt: 28-32 pg) - MCHC: " .$MCHC. " (bt: 320-360 g/l)");
                             }
                                }
                             }
                            else{
                                if($thongtinluotkham[$i]['ID_LoaiKham']!="3902"){
                                    echo('<td colspan="4" style="font-size:11px;color:#00b38b"><i>');

                                 if($thongtinluotkham[$i]['MoTa']!=""){
                                     $mota=str_replace("\n","<br>",$thongtinluotkham[$i]['MoTa']);
                                 list($ketqua, $ketluan) = explode('|||', $mota);
                                 if($ketqua!=""){
                                    echo('Kết quả:'.$ketqua.'<br>');

                                 }
                                 if($ketluan!=" "){
                                    echo('Kết luận:'.$ketluan);
                                 }

                                 }
                                echo('</td>');
                                 }

                            }
                            echo('</tr><tr><td><i style="margin-left:20px">'.$thongtinluotkham[$i]['TenXetNghiem'].'</i></td>');
                            if($thongtinluotkham[$i]['Color']=="Red"){
                                echo('<td align="center" width="80px" style="margin-left: 65px;color:red"><strong>'.$thongtinluotkham[$i]['KetQua'].'</strong></td>');
                            }
                            else if($thongtinluotkham[$i]['Color']=="Blue"){
                                echo('<td align="center" width="80px" style="margin-left: 65px;color:Blue"><strong>'.$thongtinluotkham[$i]['KetQua'].'</strong></td>');
                            }
                            else if($thongtinluotkham[$i]['Color']=="Orange"){
                                echo('<td align="center" width="80px" style="margin-left: 65px;color:Orange"><strong>'.$thongtinluotkham[$i]['KetQua'].'</strong></td>');
                            }
                            else{
                                echo('<td align="center" width="80px" style="margin-left: 65px;color:black"><strong>'.$thongtinluotkham[$i]['KetQua'].'</strong></td>');
                            }
                            echo ('<td align="center" align="center"><i style="width:200px">'.$thongtinluotkham[$i]['GiaTriBinhThuong1'].'</i></td><td align="center" width="80px" align="center"><strong>'.$thongtinluotkham[$i]['KQ2'].'</strong></td><td align="center" width="140px" align="center">'.$thongtinluotkham[$i]['GiaTriBinhThuong2'].'</td></tr>');
                        }
                    }
                 $zo="1";
                }
			}
			}


			?>
        </tbody>
     </table>

     <table cellpadding="0" cellspacing="0" border="0" style="color:#036;font-size:13px; width:100%;font-family:Tahoma, Geneva, sans-serif; border-top:1px solid #000;  padding:5px 0px">
         <tr>
             <td></td>
             <td style="width:35%;text-align:center" valign="top">
                 <i>
                    In từ dữ liệu gốc<br />
                    Ngày <?php echo date("d")." tháng " . date("m")." năm " .  date("Y"); ?>
                 </i>


            </td>
         </tr>
         <tr>
                <td align="center">


                </td>
                <td align="center" >
                 <b>
                    KỸ THUẬT VIÊN
                 </b>
                </td>

            </tr>

            <tr>
                <td height="auto" style="min-height:95px" align="center" valign="top">





                </td>
                <td align="center" valign="top" ><img id="nv_chandoan" width="130"/></td>

         </tr>
          <tr>
                <td align="center" valign="bottom">


                </td>
                <td align="center" ><b style="color:red"><?= $viettat. " ".$nhanvien;?></b></td>

       </tr>
     </table>
    <?php if($_GET["header"]=="left"){ ?>
        </div>
    <?php   } ?>

    <script type="text/javascript">
        $(document).ready(function() {

            load_sign('<?=$hinhchuky?>',"nv_chandoan");

         // print_preview();

        });
    </script>
</body>
</html>
