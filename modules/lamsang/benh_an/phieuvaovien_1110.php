<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Report</title>
<style >
body{
    overflow: auto;
   
}
pre {
 white-space: pre-wrap;       /* css-3 */
 white-space: -moz-pre-wrap;  /* Mozilla, since 1999 */
 white-space: -pre-wrap;      /* Opera 4-6 */
 white-space: -o-pre-wrap;    /* Opera 7 */
 word-wrap: break-word;       /* Internet Explorer 5.5+ */
 font:13px Tahoma, Geneva, sans-serif;
}
input[type="text"]:hover, input[type="text"]:focus, select:hover, select:focus, textarea:hover, textarea:focus {
    border: 0 0 1px 0 solid!important;
    box-shadow: 0 1px 0 0 blue!important;
}
input[type="text"], textarea, select {
   
    font-size: 13px !important;
}
.text_1{
    border-top-width: 0px!important;
    border-left-width: 0px!important;
    border-right-width: 0px!important;
    
    box-shadow: 0px 0px 0px 0px!important ;
   
    /*border-style:dotted!important;*/
}

</style>
</head>
 
<body id="wrapper">
    <?php
        $data= new SQLServer;//tao lop ket noi SQL
        $params = array($_GET["id_benhnhan"]);//tao param cho store 
        $store_name="{call GD2_GetThongTinBenhNhan_phieuvaovien(?)}";//tao bien khai bao store
        
        $get_thongtinbenhnhan=$data->query( $store_name,$params);//Goi store
        $excute= new SQLServerResult($get_thongtinbenhnhan);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
        $thongtinbenhnhan= $excute->get_as_array();//Tra ve mang toan bo data lay duoc  
		
		 $params2 = array($_GET["id_luotkham"]);//tao param cho store 
        $store_name2="{call GD2_PhieuVaoVien_SelectAll(?)}";//tao bien khai bao store
        $get_thongtinbenhnhan2=$data->query( $store_name2,$params2);//Goi store
        $excute2= new SQLServerResult($get_thongtinbenhnhan2);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
        $thongtinbenhnhan2= $excute2->get_as_array();//Tra ve mang toan bo data lay duoc  
		
		$params3 = array($_GET["id_luotkham"]);//tao param cho store 
        $store_name3="{call GD2_DauHieuSinhTon_SelectByID_LuotKham(?)}";//tao bien khai bao store
        $get_thongtinbenhnhan3=$data->query( $store_name3,$params3);//Goi store
        $excute3= new SQLServerResult($get_thongtinbenhnhan3);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
        $thongtinbenhnhan3= $excute3->get_as_array();//Tra ve mang toan bo data lay duoc
		//print_r($_GET["id_luotkham"]);
        $params4 = array($_GET["id_luotkham"]);//tao param cho store 
        $store_name4="{call GD2_getmathe_sothe(?)}";//tao bien khai bao store
        $get_thongtinbenhnhan4=$data->query( $store_name4,$params4);//Goi store
        $excute4= new SQLServerResult($get_thongtinbenhnhan4);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
        $thongtinbenhnhan4= $excute4->get_as_array();//Tra ve mang toan bo data lay duoc
        //print_r($thongtinbenhnhan4[0]["SoThe"]);

        echo "<script type='text/javascript'>";
        echo "window.id_benhnhan='".$_GET["id_benhnhan"]."';";
		echo "window.id_kham='".$_GET["id_kham"]."';";
		echo "window.id_luotkham='".$_GET["id_luotkham"]."';";
        echo "window.sothe='".$thongtinbenhnhan4[0]["SoThe"]."';";
        echo "</script>";
		
         if($thongtinbenhnhan[0]["NgayThangNamSinh"]!=''){
            $thongtinbenhnhan[0]["NgayThangNamSinh"]=$thongtinbenhnhan[0]["NgayThangNamSinh"]->format("d-m-Y");
            $data=$thongtinbenhnhan[0]["NgayThangNamSinh"];
            list($day, $month, $year) = explode("-", $data);
        }
        else{
            $day="";
            $month="";
            $year= $thongtinbenhnhan[0]["NamSinh"];

        }
		
		if(empty( $thongtinbenhnhan2 ) ){
		$thongtinbenhnhan2[0]["LoaiDoiTuongKham"]="";
		$thongtinbenhnhan2[0]["HanSD_TuNgay"]="";
		$thongtinbenhnhan2[0]["HanSD_DenNgay"]="";
		$thongtinbenhnhan2[0]["Ten_KCB_BanDau"]="";
		$thongtinbenhnhan2[0]["Ma_KCB_BanDau"]="";
		echo "<script type='text/javascript'>";
		echo "window.bhyt='';";
		 echo "</script>";
		}
		else{
			$thongtinbenhnhan2[0]["LoaiDoiTuongKham"]=$thongtinbenhnhan2[0]["LoaiDoiTuongKham"];
		$thongtinbenhnhan2[0]["Ten_KCB_BanDau"]=$thongtinbenhnhan2[0]["Ten_KCB_BanDau"];
		$thongtinbenhnhan2[0]["Ma_KCB_BanDau"]=$thongtinbenhnhan2[0]["Ma_KCB_BanDau"];
		echo "<script type='text/javascript'>";
		echo "window.bhyt='".$thongtinbenhnhan2[0]["SoThe"]."';";
		 echo "</script>";
		 if($thongtinbenhnhan2[0]["HanSD_TuNgay"]==""){
			$thongtinbenhnhan2[0]["HanSD_TuNgay"]="";
			}
			else{
				$thongtinbenhnhan2[0]["HanSD_TuNgay"]=$thongtinbenhnhan2[0]["HanSD_TuNgay"]->format($_SESSION["config_system"]["ngaythang"]);
				}
		if($thongtinbenhnhan2[0]["HanSD_DenNgay"]==""){
			$thongtinbenhnhan2[0]["HanSD_DenNgay"]="";
			}
			else{
				$thongtinbenhnhan2[0]["HanSD_DenNgay"]=$thongtinbenhnhan2[0]["HanSD_DenNgay"]->format($_SESSION["config_system"]["ngaythang"]);
				}
		}
		if(empty( $thongtinbenhnhan3 ) ){
			//echo("1");
		$mach="";
		$nhietdo="";
		$huyetap="";
		$huyetap2="";
		$nhiptho="";
		$cannang="";
		}
		else{
			$mach=$thongtinbenhnhan3[0]["Mach"];
			$nhietdo=$thongtinbenhnhan3[0]["ThanNhiet"];
			$huyetap=$thongtinbenhnhan3[0]["Ps"];
			$huyetap2=$thongtinbenhnhan3[0]["Pd"];
			$nhiptho=$thongtinbenhnhan3[0]["NhipTho"];
			$cannang=$thongtinbenhnhan3[0]["CanNang"];
		}
        if(!isset($thongtinbenhnhan2[0]["DiaChiBaoTin"])){    
            $thongtinbenhnhan2[0]["DiaChiBaoTin"]='';
        }else{    
            $thongtinbenhnhan2[0]["DiaChiBaoTin"]=$thongtinbenhnhan2[0]["DiaChiBaoTin"];
         }
         if(!isset($thongtinbenhnhan2[0]["ChanDoanNoiGioiThieu"])){    
            $thongtinbenhnhan2[0]["ChanDoanNoiGioiThieu"]="";
        }else{    
           $thongtinbenhnhan2[0]["ChanDoanNoiGioiThieu"]=$thongtinbenhnhan2[0]["ChanDoanNoiGioiThieu"];
         }
         if(!isset($thongtinbenhnhan2[0]["LyDoVaoVien"])){    
            $thongtinbenhnhan2[0]["LyDoVaoVien"]="";
        }else{    
           $thongtinbenhnhan2[0]["LyDoVaoVien"]=$thongtinbenhnhan2[0]["LyDoVaoVien"];
         }
         if(!isset($thongtinbenhnhan2[0]["QuaTrinhBenhLy"])){    
            $thongtinbenhnhan2[0]["QuaTrinhBenhLy"]="";
        }else{    
           $thongtinbenhnhan2[0]["QuaTrinhBenhLy"]=$thongtinbenhnhan2[0]["QuaTrinhBenhLy"];
         }
         if(!isset($thongtinbenhnhan2[0]["TienSuBenhBanThan"])){    
            $thongtinbenhnhan2[0]["TienSuBenhBanThan"]="";
        }else{    
           $thongtinbenhnhan2[0]["TienSuBenhBanThan"]=$thongtinbenhnhan2[0]["TienSuBenhBanThan"];
         }
         if(!isset($thongtinbenhnhan2[0]["TienSuBenhGiaDinh"])){    
            $thongtinbenhnhan2[0]["TienSuBenhGiaDinh"]="";
        }else{    
           $thongtinbenhnhan2[0]["TienSuBenhGiaDinh"]=$thongtinbenhnhan2[0]["TienSuBenhGiaDinh"];
         }
         if(!isset($thongtinbenhnhan2[0]["KhamXetToanThan"])){    
            $thongtinbenhnhan2[0]["KhamXetToanThan"]="";
        }else{    
           $thongtinbenhnhan2[0]["KhamXetToanThan"]=$thongtinbenhnhan2[0]["KhamXetToanThan"];
         }
         if(!isset($thongtinbenhnhan2[0]["KhamXetCacBoPhan"])){    
            $thongtinbenhnhan2[0]["KhamXetCacBoPhan"]="";
        }else{    
           $thongtinbenhnhan2[0]["KhamXetCacBoPhan"]=$thongtinbenhnhan2[0]["KhamXetCacBoPhan"];
         }
         if(!isset($thongtinbenhnhan2[0]["TomTatKQCLS"])){    
            $thongtinbenhnhan2[0]["TomTatKQCLS"]="";
        }else{    
           $thongtinbenhnhan2[0]["TomTatKQCLS"]=$thongtinbenhnhan2[0]["TomTatKQCLS"];
         }
         if(!isset($thongtinbenhnhan2[0]["DaXuLy"])){    
            $thongtinbenhnhan2[0]["DaXuLy"]="";
        }else{    
           $thongtinbenhnhan2[0]["DaXuLy"]=$thongtinbenhnhan2[0]["DaXuLy"];
         }
         if(!isset($thongtinbenhnhan2[0]["ChuY"])){    
            $thongtinbenhnhan2[0]["ChuY"]="";
        }else{    
           $thongtinbenhnhan2[0]["ChuY"]=$thongtinbenhnhan2[0]["ChuY"];
         }
         if(!isset($thongtinbenhnhan2[0]["ChanDoanVaoVien"])){    
            $thongtinbenhnhan2[0]["ChanDoanVaoVien"]="";
        }else{    
           $thongtinbenhnhan2[0]["ChanDoanVaoVien"]=$thongtinbenhnhan2[0]["ChanDoanVaoVien"];
         }
         if(!isset($thongtinbenhnhan2[0]["ID_PhongBan"])){    
            $thongtinbenhnhan2[0]["ID_PhongBan"]="0";
        }else{    
           $thongtinbenhnhan2[0]["ID_PhongBan"]=$thongtinbenhnhan2[0]["ID_PhongBan"];
         }
         if(!isset($thongtinbenhnhan2[0]["ID_BacSiDieuTri"])){    
            $thongtinbenhnhan2[0]["ID_BacSiDieuTri"]="0";
        }else{    
           $thongtinbenhnhan2[0]["ID_BacSiDieuTri"]=$thongtinbenhnhan2[0]["ID_BacSiDieuTri"];
         }
         //else $thongtinbenhnhan[0]["NgayThangNamSinh"]='';
       // print_r($thongtinbenhnhan2[0]["LoaiDoiTuongKham"])
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
             <br /><br />
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
        <tr>
             <td style="text-align:center">
                <span style="letter-spacing: 0.5px;font-weight:bold;font-size:26px;">PHIẾU KHÁM BỆNH VÀO VIỆN</span>
                <br />
                <span style="font-weight:bold;font-size:20px;">Phòng khám:</span>
                
             </td>
         
         </tr>    
     </table>
    <table class="container"cellpadding="0" cellspacing="0" border="0" style="width:100%;font-family:Tahoma, Geneva, sans-serif;color:#036;;font-size:13px">        
         <tr>
            <td colspan="2"><b>I.HÀNH CHÍNH:</b></td>
            <td style="padding-left: 11px;">Tuổi</td>
         </tr>
         <tr>
            <td>1.Họ và tên(in hoa):<b style="margin-left: 10px;"><?=$thongtinbenhnhan[0]["HoLotBenhNhan"]." ".$thongtinbenhnhan[0]["TenBenhNhan"];?></b></td>
            <td>2.Sinh ngày:
                            <input style="width:18px;text-align:center;" type="text" id="ngay1" name="ngay1" value="<?php echo substr($day, 0,1)?>"   maxlength="1" > 
                            <input style="width:18px;text-align:center;" type="text" id="ngay2" name="ngay2" value="<?php echo substr($day, 1,1)?>" maxlength="1" > 
                            <input style="width:18px;text-align:center;" type="text" id="thang1" name="thang1" value="<?php echo substr($month, 0,1)?>" maxlength="1" > 
                            <input style="width:18px;text-align:center;" type="text" id="thang2" name="thang2" value="<?php echo substr($month, 1,1)?>" maxlength="1" > 
                            <input style="width:18px;text-align:center" type="text" id="nam1" name="nam1" value="<?php echo substr($year, 0,1)?>" maxlength="1" > 
                            <input style="width:18px;text-align:center;" type="text" id="nam2" name="nam2" value="<?php echo substr($year, 1,1)?>" maxlength="1" > 
                            <input style="width:18px;text-align:center;" type="text" id="nam3" name="nam3" value="<?php echo substr($year, 2,1)?>" maxlength="1" > 
                            <input style="width:18px;text-align:center;" type="text" id="nam4" name="nam4" value="<?php echo substr($year, 3,1)?>" maxlength="1" > 
            </td>
           
            <td>
                <input style="width:18px;text-align:center;" type="text" id="tuoi1" name="tuoi1" value="<?php echo substr($thongtinbenhnhan[0]["Tuoi"], 0,1)?>"  maxlength="1" > 
                <input style="width:18px;text-align:center;" type="text" id="tuoi2" name="tuoi2" value="<?php echo substr($thongtinbenhnhan[0]["Tuoi"], 1,1)?>"  maxlength="1" > 

            </td>
         </tr>
         <tr>
            <td>3.Giới tính: &nbsp;&nbsp;&nbsp;&nbsp;   <?php
                                    if($thongtinbenhnhan[0]["GioiTinh"]=="0"){
                                       /* $("#nam").prop('checked', true);*/
                                      $male_status = 'checked';
                                      $female_status = 'unchecked';
                                    }
                                    else{
                                        $male_status = 'unchecked';
                                        $female_status = 'checked';
                                    }

                                ?>
                                a. Nam <input id="nam" style="vertical-align: middle;width:10px" lang="nam" type="radio" name="sex" <?PHP print $male_status; ?> value="male" > 
                                b. Nữ  <input id="nu"  style="vertical-align: middle;width:10px" lang="nu" type="radio" name="sex" <?PHP print $female_status; ?> value="female">
                                
            </td>
            <td>4.Nghề nghiệp: <b><?= $thongtinbenhnhan[0]["TenNgheNghiep"]?></b></td>
            <td>
                <input style="width:18px;text-align:center;" type="text" id="nghe1" name="nghe1" maxlength="1" > 
                <input style="width:18px;text-align:center;" type="text" id="nghe2" name="nghe2" maxlength="1" > 
            </td>
         </tr>
         <tr>
            <td>5.Dân tộc:    <b><?= $thongtinbenhnhan[0]["TenDanToc"]?></b>
                              <input style="width:18px;text-align:center;float:right;margin-right:10px" type="text"  id="dantoc1" name="dantoc1" maxlength="1" > 
                              <input style="width:18px;text-align:center;float:right" type="text"  id="dantoc2" name="dantoc2" maxlength="1" > 
            </td>
            <td>6.Quốc tịch: <b><?= $thongtinbenhnhan[0]["TenQuocTich"]?></b></td>
            <td>
                <input style="width:18px;text-align:center;" type="text" id="quoctich1" name="quoctich1" maxlength="1" > 
                <input style="width:18px;text-align:center;" type="text" id="quoctich2" name="quoctich2" maxlength="1" >
            </td>
         </tr>
         <tr>
            <td>7.Địa chỉ: <b><?php echo $thongtinbenhnhan[0]["DiaChi"]?></b></td>
            <td>Xã,phường: <b><?= $thongtinbenhnhan[0]["TenXaPhuong"]?></b></td>
             <td>
                <input style="width:18px;text-align:center;" type="text" id="xa1" name="xa1" maxlength="1" > 
                <input style="width:18px;text-align:center;" type="text" id="xa2" name="xa2" maxlength="1" >
            </td>
         </tr>
         <tr>
            <td>
                Quận,Huyện:  <b><?= $thongtinbenhnhan[0]["TenQuanHuyen"]?></b>
                             <input style="width:18px;text-align:center;float:right;margin-right:10px" type="text" id="quan1" name="quan1" maxlength="1" > 
                             <input style="width:18px;text-align:center;float:right" type="text" id="quan2" name="quan2" maxlength="1" >
            </td>
            <td>Tỉnh,thành phố <b><?= $thongtinbenhnhan[0]["TenTinhThanhPho"]?></b></td>
            <td>
                <input style="width:18px;text-align:center;" type="text" id="tinh1" name="tinh1" maxlength="1" > 
                <input style="width:18px;text-align:center;" type="text" id="tinh2" name="tinh2" maxlength="1" >
            </td>
         </tr>
         <tr>
            <td>8.Nơi làm việc:<b><?= $thongtinbenhnhan[0]["TenCty"]?></b></td>
            <td>9.Đối tượng:<b><?= $thongtinbenhnhan4[0]["LoaiDoiTuongKham"]?></b></td>
            <td></td>
         </tr>
         <tr>
            <td>10.Số thẻ BHYT: <input style="width:40px;text-align:center;" type="text" id="bhyt1" name="bhyt1"  > 
                                <input style="width:40px;text-align:center" type="text" id="bhyt2" name="bhyt2"  > 
                                <input style="width:40px;text-align:center;" type="text" id="bhyt3" name="bhyt3"  > 
                                <input style="width:40px;text-align:center;" type="text" id="bhyt4" name="bhyt4"  > 
                                <input style="width:70px;text-align:center;" type="text" id="bhyt5" name="bhyt5" > 
            </td>
         </tr>
         </table>
          <table  class="container" cellpadding="0" cellspacing="0" border="0" style="width:100%;font-family:Tahoma, Geneva, sans-serif;color:#036;;font-size:13px">
            <tr>
                <td>BHYT có giá trị từ:</td>
                <td><input name="bhyttu"id="bhyttu"type="text" value="<?= $thongtinbenhnhan2[0]["HanSD_TuNgay"]?>" class="text_1"style="width:90%;text-align:center"></td>
                <td colspan="2">Đến:</td>
                <td><input name="bhytden" id="bhytden"type="text" value="<?= $thongtinbenhnhan2[0]["HanSD_DenNgay"]?>" class="text_1" style="width:53%;text-align:center"></td>
            </tr>
             <tr>
                <td style="width:200px">Nơi khám chữa bệnh ban đầu:</td>
                <td><input type="text" name="noikhambandau" value="<?= $thongtinbenhnhan2[0]["Ten_KCB_BanDau"]?>"id="noikhambandau"class="text_1" style="width:90%;text-align:center"></td>
                <td colspan="2">Mã KCBBĐ:</td>
                <td><input type="text" name="makcbbd" value="<?= $thongtinbenhnhan2[0]["Ma_KCB_BanDau"]?>" class="text_1"style="width:53%;text-align:center"></td>
             </tr>
       
         <tr>
            <td colspan="3"><b><i>11.Họ tên,địa chỉ người nhà khi cần báo tin:<i></b></td>
         </tr>
         <tr>
            <td colspan="5"><textarea name="nguoicanbaotin"  tabindex="1"id="nguoicanbaotin" style="width:97%;height:40px"><?= $thongtinbenhnhan2[0]["DiaChiBaoTin"]?></textarea></td>
         </tr>
         <tr>
            <td>12.Đến khám lúc </td>
            <td><input maxlength="2" type="text" name="gio"  tabindex="2"id="gio" value="<?php echo date("H") ?>" class="text_1"style="width:23%;text-align:center">
            Giờ
            <input type="text"maxlength="2" name="phut" id="phut" tabindex="3" value="<?php echo date("i") ?>" class="text_1"style="width:23%;text-align:center">
            Phút</td>
            <td >ngày </td>
            <td><input type="text" id="ngay" name="ngay"  tabindex="4"value="<?php echo date($_SESSION["config_system"]["ngaythang"]) ?>" class="text_1"style="width:53%;text-align:center"></td>
         </tr>
         <tr>
            <td colspan="2">13.Chẩn đoán của nơi giới thiệu:</td>
         </tr>
         <tr>
            <td colspan="5"><textarea name="noigioithieu" id="noigioithieu" tabindex="5" style="width:97%;height:20px"><?= $thongtinbenhnhan2[0]["ChanDoanNoiGioiThieu"] ?></textarea></td>
        </tr>
         <tr>
            <td colspan="3"><b>II.LÝ DO VÀO VIỆN:</b></td>
            
         </tr>
         <tr>
            <td colspan="5"><textarea  name="lydovaovien"  tabindex="6"style="width:97%;height:40px"><?= $thongtinbenhnhan2[0]["LyDoVaoVien"]?></textarea></td>
        </tr>
        </tr>
        
        <tr>
            <td><b>III.HỎI BỆNH:</b></td>
        </tr>
        <tr>
            <td colspan="3">1.Quá trình bệnh lý:</td>
           
         </tr>
         <tr>
             <td colspan="5"><textarea name="quatrinhbenhly"  tabindex="7"style="width:97%;height:40px"><?= $thongtinbenhnhan2[0]["QuaTrinhBenhLy"]?></textarea></td>
         </tr>
        </tr>
        
        <tr>
            <td>2.Tiền sử bệnh:</td>
        </tr>
        <tr>    
            <td colspan="4">- Bản thân:</td>
        </tr>
        <tr>
            <td colspan="5"><textarea  name="banthan" tabindex="8" style="width:97%;height:40px"><?= $thongtinbenhnhan2[0]["TienSuBenhBanThan"]?></textarea></td>
        </tr>
        <tr>    
            <td colspan="4">- Gia đình:</td>
        </tr>
        <tr>
            <td colspan="5"><textarea name="giadinh" tabindex="9" style="width:97%;height:40px"><?= $thongtinbenhnhan2[0]["TienSuBenhGiaDinh"]?></textarea></td>
        </tr>
        <tr>
            <td><b>IV.KHÁM XÉT:</b></td>
        </tr>
        <tr>
            <td colspan="4">1.Toàn thân:</td>
            <TH ROWSPAN="4" style="padding-right: 16px;">
                <fieldset style="width:185px;height:120px;">
                    <div>
                        <div ><label>Mạch:</label><input maxlength="3"  tabindex="12"value="<?=$mach?>"type="text" name="mach" id="mach"class="text_1"style="width:44%;text-align:center">lần/phút</div>
                        <div ><label>Nhiệt độ:</label><input maxlength="2"  tabindex="13" value="<?=$nhietdo?>" type="text" name="nhietdo" id="nhietdo"class="text_1"style="width:56%;text-align:center">°C</div> 
                         <div ><label>Huyết áp:</label><input type="text"  tabindex="14"value="<?=$huyetap?>" name="huyetap"id="huyetap" class="text_1"style="width:17%;text-align:center">/<input type="text" name="huyetap2"id="huyetap2"value="<?=$huyetap2?>" tabindex="15"class="text_1"style="width:16%;text-align:center">mmHg</div> 
                          <div ><label>Nhịp thở:</label><input maxlength="3"  tabindex="16"value="<?=$nhiptho?>" type="text" name="nhiptho"id="nhiptho" class="text_1"style="width:34%;text-align:center">lần/phút</div> 
                           <div ><label>Cân nặng:</label><input maxlength="4"  tabindex="17"value="<?=$cannang?>" type="text" name="cannang"id="cannang" class="text_1"style="width:52%;text-align:center">Kg</div> 
                    </div>
                   
               </fieldset>
           </TH>
        </tr>
        <tr>
            <td colspan="4"><textarea name="toanthan"  tabindex="10"style="width:97%;height:40px"><?= $thongtinbenhnhan2[0]["KhamXetToanThan"]?></textarea></td>
            
        </tr>
        <tr>
            <td colspan="4">2.Các bộ phận:</td>
        </tr>
        <tr>
            <td colspan="4"><textarea name="cacbophan"  tabindex="11"style="width:97%;height:40px"><?= $thongtinbenhnhan2[0]["KhamXetCacBoPhan"]?></textarea></td>
        </tr>
        <tr>
            <td colspan="3">3.Tóm tắt kết quả cận lâm sàng:</td>
        </tr>
        <tr>
            <td colspan="5"><textarea name="tomtat"  tabindex="18"style="width:97%;height:20px"><?= $thongtinbenhnhan2[0]["TomTatKQCLS"]?></textarea></td>
        </tr>
        <tr>
            <td colspan="3">4.Chẩn đoán vào viện:</td>
        </tr>
        <tr>
            <td colspan="5"><textarea name="chuandoanvaovien" tabindex="19" style="width:97%;height:20px"><?= $thongtinbenhnhan2[0]["ChanDoanVaoVien"]?></textarea></td>
        </tr>
        <tr>
            <td colspan="3">5.Đã xử lý (thuốc,chăm sóc...):</td>
        </tr>
        <tr>
            <td colspan="5"><textarea name="daxuly" tabindex="20" style="width:97%;height:20px"><?= $thongtinbenhnhan2[0]["DaXuLy"]?></textarea></td>
        </tr>
        <tr>
            <td colspan="1">6.Cho vào điều trị tại khoa:</td>
        
            <td colspan="1"><span class="custom-combobox">
                   				 <input id="phongban" name="phongban"  tabindex="21" type="text_checkbox" style="width:170px;">
                            </span> 
                            
            </td>
        </tr>
        <tr>
            <td colspan="1">7.Bác sĩ điều trị:</td>
        
            <td colspan="1"><span class="custom-combobox">
                                 <input id="bsdieutri" name="bsdieutri"  tabindex="22" type="text_checkbox" style="width:170px;">
                            </span> 
                            
            </td>
        </tr>
        <tr>
            <td colspan="3">8.Chú ý:</td>
        </tr>
        <tr>
            <td colspan="5"><textarea name="chuy" tabindex="23"id="chuy"lang="end"style="width:97%;height:20px"><?= $thongtinbenhnhan2[0]["ChuY"]?></textarea></td>
        </tr>
     </table>
      <table cellpadding="0" cellspacing="0" border="0" style="color:#036;font-size:13px; width:100%;font-family:Tahoma, Geneva, sans-serif; border-top:0px solid #000;  padding:5px 0px">           
         <tr>
              <td><button type="button" id="luuphieu">Lưu phiếu khám</button>
                    <button type="button" id="taobenhannoitru">Tạo bệnh án nội trú</button>
                     <button type="button" id="inphieu">In Phiếu</button>
              </td>
             <td style="width:35%;text-align:right;padding-right:20px" valign="top">
                 <i>
                    
                   Đà Nẵng, Ngày <?php echo date("d")." tháng " . date("m")." năm " .  date("Y"); ?>
                 </i>
                 
                    <h3 style="margin-top:0px;padding-right:30px">BÁC SĨ KHÁM BỆNH</h3>
                
                 
            </td>             
         </tr>            
     </table>
     <br><br><br>
</body>
 <script type="application/javascript">
        $(document).ready(function() {
            $("#inphieu").button();
            $("#luuphieu").button();
            $("#taobenhannoitru").button({disabled:true});
			$("#ngay").datepicker({dateFormat: $.cookie("ngayJqueryUi")});
			number_textbox("#gio");	
			number_textbox("#phut");	
			number_textbox("#mach");	
			number_textbox("#nhietdo");	
			number_textbox("#huyetap");	
			number_textbox("#huyetap2");
			number_textbox("#nhiptho");	
			number_textbox("#cannang");	
            
           
			if(sothe!=''){
							
							var rs=sothe.split("");
							$("#bhyt1").val(rs[0]+rs[1]+rs[2]);
							$("#bhyt2").val(rs[3]+rs[4]);
							$("#bhyt3").val(rs[5]+rs[6]);
							$("#bhyt4").val(rs[7]+rs[8]+rs[9]);
							$("#bhyt5").val(rs[10]+rs[11]+rs[12]+rs[13]+rs[14]);
						}else{
							$("#bhyt1").val('');
							$("#bhyt2").val('');
							$("#bhyt3").val('');
							$("#bhyt4").val('');
							$("#bhyt5").val('');
							}                    
			//create_combobox('#phongban', '#phongban1', ".phong_ban", "#phong_ban", create_phongban, 200, 400, 'Phòng ban', 'data_phongban');
           
                create_combobox_new('#phongban',create_phongban,'bw','','data_phongban',<?=$thongtinbenhnhan2[0]["ID_PhongBan"]?>);
             create_combobox_new('#bsdieutri',create_bacsi,'bw','','data_bacsi&id_khoa=0',<?=$thongtinbenhnhan2[0]["ID_BacSiDieuTri"]?>);
          
            
          
            setTimeout(function(){
               $("#nguoicanbaotin").focus();
			   },200);
               jwerty.key('tab', false);
       jwerty.key('shift+tab', false);            
       jwerty.key('shift+enter', false);
         $('input[type=text],input[type=text_checkbox],#wrapper textarea,#wrapper input[type=checkbox],#wrapper span input, input[type=button]').bind("keyup", function(e) {  
            if ($("input[type=text],#wrapper textarea,#wrapper input[type=checkbox],#wrapper span input , input[type=button]").is(":focus")){   
                    
                  if(jwerty.is("shift+tab",e)){
					
                     var tabindex = $(e.target).attr('tabindex');
                   
                     isdisable('pre',tabindex,e)
                     return false;
                 }else if(jwerty.is("shift+enter",e)){					
			  		 e.stopPropagation();		
		 		 }
             }
        })
         
			 $('input[type=text],input[type=text_checkbox],#wrapper textarea,#wrapper input[type=checkbox],#wrapper span input, input[type=button]').bind("keypress", function(e) {  
            if ($("input[type=text],#wrapper textarea,#wrapper input[type=checkbox],#wrapper span input , input[type=button]").is(":focus")){   
                    
                   if (jwerty.is("enter",e)||jwerty.is("tab",e)) { 
                        var tabindex = $(e.target).attr('tabindex');
                      
                        isdisable('next',tabindex,e)
                        //alert(tabindex);
                    
                 }
             }
        })
         
           
        });
		
		$("#taobenhannoitru").click(function(){
             $.post('resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_thongtinluotkham_check&id_benhnhan='+id_benhnhan).done(function(data){
                 data = $.trim(data);
                    data = data.split(';');
                    if(data[1]=='KetThucKham'){
                        parent.postMessage('taobenhannoitru;tao_benh_an_noi_tru;'+id_luotkham+';'+id_benhnhan+';;'+id_khoa+'__'+tenkhoa+';'+<?="'".$thongtinbenhnhan[0]["HoLotBenhNhan"]." ".$thongtinbenhnhan[0]["TenBenhNhan"]."'"?>+';'+<?= "'".$thongtinbenhnhan4[0]["LoaiDoiTuongKham"]."'"?>+';'+id_bacsi+';add','*');
                    }
                    else{
                        alert("Bệnh nhân đang có lượt khám nội trú,Đề nghị kết thúc khám mới được tạo bệnh án mới");
                    }

             })
			
            // parent.postMessage('open_idbenhnhan;tao_benh_an_noi_tru;'+id_luotkham+';'+id_benhnhan+';;'+id_khoa+'__'+tenkhoa+';'+<?="'".$thongtinbenhnhan[0]["HoLotBenhNhan"]." ".$thongtinbenhnhan[0]["TenBenhNhan"]."'"?>+'&doituong='+<?= "'".$thongtinbenhnhan4[0]["LoaiDoiTuongKham"]."'"?>+'&bacsydieutri='+id_bacsi+'&oper=add','*');

        })
        $("#inphieu").click(function(){
             
              $.cookie("in_status", "print_preview"); 
                                                            dialog_report("Xem trước khi in",90,90,"u78787878975f","resource.php?module=report&view=<?=$modules?>&action=phieuvaovien&header=top&id_benhnhan="+id_benhnhan+"&id_luotkham="+id_luotkham+"&id_kham="+id_kham+"&type=report&id_form=10",'PhieuVaoVien');
                                                            $(".frame_u78787878975f").css("width","793px");

        })
        $("#luuphieu").click(function(){
			//$("#luuphieu").button( {disabled:true});
              $("#taobenhannoitru").button({disabled:false});
             phancach="";
            dataToSend ='{';
            key1='';
            i=0;
           
            /*$('#container').find(':input[type=text],select,textarea,input[type=hidden],input[type=checkbox]:checked').each(function(){ 
                if(i>0){
                phancach=","; 
                        }
              dataToSend += phancach + '"'+ this.name + '":"' + this.value +'"' ;
              i++;
                })*/
				ngay= convert_to_datejs($("#ngay").val())
	             ngay=$.datepicker.formatDate('yy-mm-dd', new Date(ngay)); 
				 //alert(ngay);
             $('.container').find(':input[type=text],select,textarea,input[type=hidden],input[type=checkbox]:checked').each(function(){ 
                if(i>0){
                phancach=","; 
                        } 
              dataToSend += phancach + '"'+ this.name + '":' + JSON.stringify(this.value);
              i++;
                })
             dataToSend += phancach + '"id_luotkham":"' + id_luotkham + '"';
			 dataToSend += phancach + '"id_kham":"' + id_kham + '"';
			 dataToSend += phancach + '"id_benhnhan":"' + id_benhnhan + '"';
			 dataToSend += phancach + '"noilamviec":"' + '<?= $thongtinbenhnhan[0]["TenCty"]?>' + '"';
			 dataToSend += phancach + '"ngayvaovien":"' + ngay+" "+$("#gio").val()+":"+$("#phut").val() + '"';
              dataToSend += phancach + '"vaokhoa":"' + $("#phongban_hidden").val() + '"';
               dataToSend += phancach + '"bsdieutri":"' + $("#bsdieutri_hidden").val() + '"';
             dataToSend +='}'; 
              //alert(dataToSend);
			 
             dataToSend = jQuery.parseJSON(dataToSend);
              alertObject(dataToSend);
			  $.post('resource.php?module=<?=$modules?>&view=<?=$view?>&action=controller_phieuvaovien&hienmaloi=3',dataToSend)
			                        .done(function( gridData ) {	
			                                             tooltip_message("Đã lưu");	 
			                                           	/*setTimeout(function(){
														    $.cookie("in_status", "print_preview"); 
															dialog_report("Xem trước khi in",90,90,"u78787878975f","resource.php?module=report&view=<?=$modules?>&action=phieuvaovien&header=top&id_benhnhan="+id_benhnhan+"&id_luotkham="+id_luotkham+"&id_kham="+id_kham+"&type=report&id_form=10",'PhieuVaoVien');
															$(".frame_u78787878975f").css("width","793px");
															},500);*/
														 })
			                                            .fail(function() {
			                                            tooltip_message( "Có lỗi trong quá trình cập nhật" );
			                                            });
				
             //alert(window.id_benhnhan);
            /* $.cookie("in_status", "print_preview"); 
            dialog_report("Xem trước khi in",90,90,"u78787878975f","resource.php?module=report&view=<?=$modules?>&action=phieuvaovien&header=top&id_benhnhan="+id_benhnhan+"&id_luotkham="+id_luotkham+"&id_kham="+id_kham+"&type=report&id_form=10",'PhieuVaoVien');
            $(".frame_u78787878975f").css("width","793px");*/
        })
	
function create_phongban(elem, datalocal) {
        datalocal = jQuery.parseJSON(datalocal);
        $(elem).jqGrid({
            datastr: datalocal,
            datatype: "jsonstring",
            colNames: ['Tên phòng ban'],
            colModel: [
                {name: 'TenPhongBan', index: 'TenPhongBan', hidden: false},
            ],
            hidegrid: false,
            gridview: true,
            loadonce: true,
            scroll: false,
            modal: true,
            rowNum: 200000,
            rowList: [],
            height: 70,
            width: 470,
            viewrecords: true,
            ignoreCase: true,
            shrinkToFit: true,
            cmTemplate: {sortable: false},
            sortorder: "desc",
            serializeRowData: function(postdata) {
            },
            onSelectRow: function(id) {
                window.id_khoa=id;
              var rowData = $("#phongban_grid").getRowData(id);   
            window.tenkhoa=rowData["TenPhongBan"];
             
            create_combobox_new('#bsdieutri',create_bacsi,'bw','','data_bacsi&id_khoa='+id,0);
				            },
            ondblClickRow: function(id, rowIndex, columnIndex) {
            },
            loadComplete: function(data) {
            },
        });
       /* $(elem).jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});*/
        $(elem).jqGrid('bindKeys', {});
    }
    function isdisable(tam,tabindex,e){
          if(tam=='next'){
              tabindex++;
             // alert(tabindex);
          }else{
              tabindex--;
          }
          if($('[tabindex=' +tabindex + ']').prop('disabled')){        
              isdisable(tam,tabindex,e)
          }else{     
                $('[tabindex=' +  tabindex + ']').focus();           
          		 return false;
          }
		   
  }
   function create_bacsi(elem, datalocal) {
        datalocal = jQuery.parseJSON(datalocal);
        $(elem).jqGrid({
            datastr: datalocal,
            datatype: "jsonstring",
            colNames: [ 'Họ và tên'],
            colModel: [
                
                {name: 'hovaten', index: 'hovaten', hidden: false,width:5},
                
            ],
            hidegrid: false,
            gridview: true,
            loadonce: true,
            scroll: 1,
            modal: true,
            rowNum: 100,
            rowList: [],
            height: 100,
            width: 300,
            viewrecords: true,
            ignoreCase: true,
            shrinkToFit: true,
            cmTemplate: {sortable: false},
            sortorder: "desc",
            serializeRowData: function(postdata) {
            },
            onSelectRow: function(id) {
                window.id_bacsi=id;

            },
            ondblClickRow: function(id, rowIndex, columnIndex) {
            },
            loadComplete: function(data) {
            },
        });
        $(elem).jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});
        $(elem).jqGrid('bindKeys', {});
    }
    </script>
</html>
 