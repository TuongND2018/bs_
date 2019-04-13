<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Report</title>
<!--<style media="print">
	textarea{
		width:100%;
		background:url(images/dotted.png) repeat;
		border:none; 
		height:100%;
		line-height:18px;
		background-attachment:local!important
	}
</style>-->
<style>
#dotted{
	width:100%;
	background:url(images/dotted.png) repeat;
	border:none;
	line-height:18px;
	background-attachment:local!important;
	box-shadow:none!important;
	
}
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
.text_1{
    border-top-width: 0px!important;
    border-left-width: 0px!important;
    border-right-width: 0px!important;
    
    box-shadow: none!important ;
   
    border-style:none!important;
	background:url(images/dotted.png) repeat;
}
input[type="text"]
{
border: 1px solid black;

}
</style>
</head>
 
<body>
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
		 //print_r($thongtinbenhnhan2[0]["HanSD_TuNgay"]);
		 
		 if($thongtinbenhnhan2[0]["TenPhongKham"]==""){
			 $thongtinbenhnhan2[0]["TenPhongKham"]="";
		 }else{
			 //echo ($thongtinbenhnhan2[0]["TenPhongKham"]);
			 if($thongtinbenhnhan2[0]["TenPhongKham"]==2){
				 
				 $thongtinbenhnhan2[0]["TenPhongKham"]="Phòng cấp cứu";
			 }else{$thongtinbenhnhan2[0]["TenPhongKham"]="Phòng Khám";}
		}
		
		if(empty( $thongtinbenhnhan2 ) ){
			
		$thongtinbenhnhan2[0]["LoaiDoiTuongKham"]="";
		$thongtinbenhnhan2[0]["HanSD_TuNgay"]="";
		$thongtinbenhnhan2[0]["HanSD_DenNgay"]="";
		$thongtinbenhnhan2[0]["Ten_KCB_BanDau"]="";
		$thongtinbenhnhan2[0]["Ma_KCB_BanDau"]="";
        $thongtinbenhnhan2[0]["DiaChiBaoTin"]="";
		echo "<script type='text/javascript'>";
		echo "window.bhyt='';";
		 echo "</script>";
		}
		else{
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
			$thongtinbenhnhan2[0]["LoaiDoiTuongKham"]=$thongtinbenhnhan2[0]["LoaiDoiTuongKham"];
		$thongtinbenhnhan2[0]["Ten_KCB_BanDau"]=$thongtinbenhnhan2[0]["Ten_KCB_BanDau"];
		$thongtinbenhnhan2[0]["Ma_KCB_BanDau"]=$thongtinbenhnhan2[0]["Ma_KCB_BanDau"];
		echo "<script type='text/javascript'>";
		echo "window.bhyt='".$thongtinbenhnhan2[0]["SoThe"]."';";
		 echo "</script>";
		}
		
        if(empty( $thongtinbenhnhan3 ) ){
			//echo("1");
		$mach="";
		$nhietdo="";
		$huyetap="";
		$nhiptho="";
		$cannang="";
		}
		else{
			$mach=$thongtinbenhnhan3[0]["Mach"];
			$nhietdo=$thongtinbenhnhan3[0]["ThanNhiet"];
			$huyetap=$thongtinbenhnhan3[0]["Ps"]."/".$thongtinbenhnhan3[0]["Pd"];
			$nhiptho=$thongtinbenhnhan3[0]["NhipTho"];
			$cannang=$thongtinbenhnhan3[0]["CanNang"];
		}
		 echo "<script type='text/javascript'>";
        echo "window.id_benhnhan='".$_GET["id_benhnhan"]."';";
		echo "window.id_kham='".$_GET["id_kham"]."';";
		echo "window.id_luotkham='".$_GET["id_luotkham"]."';";
		echo "window.bhyt='".$thongtinbenhnhan2[0]["SoThe"]."';";
        echo "</script>";
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
     
     <table cellpadding="0" cellspacing="0" border="0" style="width:100%;font-family:Tahoma, Geneva, sans-serif;color:Black">
        <br>
        
        <tr>
             <td style="text-align:center">
                <span style="letter-spacing: 0.5px;font-weight:bold;font-size:23px;">PHIẾU KHÁM BỆNH VÀO VIỆN</span>
                <br />
                <span style="font-weight:bold;font-size:20px;"> <?=$thongtinbenhnhan2[0]["TenPhongKham"]?></span>
                
             </td>
         
         </tr>    
     </table>
     <table cellpadding="0" cellspacing="0" border="0" style="color:black;font-size:13px;line-height:1.5 em;font-family:Tahoma, Geneva, sans-serif; border-top:0px solid #000; border-bottom:0px solid #000;">         
         <tr>
            <td colspan="2"><b>I.HÀNH CHÍNH:</b></td>
            <td style="padding-left: 11px;">Tuổi</td>
         </tr>
         <tr>
            <td>1.Họ và tên(in hoa):<b style="margin-left: 10px; text-transform:uppercase"><?=$thongtinbenhnhan[0]["HoLotBenhNhan"]." ".$thongtinbenhnhan[0]["TenBenhNhan"];?></b></td>
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
            <td>3.Giới tính:  &nbsp;&nbsp;&nbsp;&nbsp;<?php
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
                                <label style="margin-left:20px;">ID: <?=$thongtinbenhnhan[0]["MaBenhNhan"];?></label>
                                
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
            <td>9.Đối tượng:<b><?= $thongtinbenhnhan2[0]["LoaiDoiTuongKham"]?></b></td>
            <td></td>
         </tr>
         <tr>
             <td colspan="4">10.Số thẻ BHYT: <input style="width:40px;text-align:center;" type="text" id="bhyt1" name="bhyt1"  > 
                                <input style="width:40px;text-align:center" type="text" id="bhyt2" name="bhyt2"  > 
                                <input style="width:40px;text-align:center;" type="text" id="bhyt3" name="bhyt3"  > 
                                <input style="width:40px;text-align:center;" type="text" id="bhyt4" name="bhyt4"  > 
                                <input style="width:70px;text-align:center;" type="text" id="bhyt5" name="bhyt5" > 
            </td>
         </tr>
         <tr>
            <td>BHYT có giá trị từ:<input type="text" value="<?= $thongtinbenhnhan2[0]["HanSD_TuNgay"]?>" class="text_1"style="width:240px;;text-align:center"></td>
            <td colspan="2">Đến:<input type="text" class="text_1"value="<?= $thongtinbenhnhan2[0]["HanSD_DenNgay"]?>" style="width:308px;;text-align:center"></td>
         </tr>
         <tr>
            <td>Nơi khám chữa bệnh ban đầu:<input type="text" class="text_1" value="<?= $thongtinbenhnhan2[0]["Ten_KCB_BanDau"]?>" style="width:160px;;text-align:center"></td>
            <td colspan="2">Mã KCBBĐ:<input type="text" class="text_1" value="<?= $thongtinbenhnhan2[0]["Ma_KCB_BanDau"]?>"style="width:282px;;text-align:center"></td>
         </tr>
         <tr>
            <td colspan="3"><div id="dotted" style="height:40px"><b><i>11.Họ tên,địa chỉ người nhà khi cần báo tin: </i></b>&nbsp;&nbsp;<?=$thongtinbenhnhan2[0]["DiaChiBaoTin"]?></div></td>
         </tr>
         
         <tr>
            <td><b>12.Đến khám lúc</b> <input type="text" class="text_1" value="<?=$thongtinbenhnhan2[0]["NgayVaoVien"]->format("H:i ")?>" style="width:64%;text-align:center"></td>
            <td colspan="2"><b>ngày</b> <input type="text" class="text_1"value="<?=$thongtinbenhnhan2[0]["NgayVaoVien"]->format($_SESSION["config_system"]["ngaythang"])?>" style="width:89%;text-align:center"></td>
         </tr>
         <tr>
            <td colspan="3"><div id="dotted" style="height:20px"><b>13.Chẩn đoán nới giới thiệu:</b>&nbsp;&nbsp;<?=$thongtinbenhnhan2[0]["ChanDoanNoiGioiThieu"]?></div></td>
         </tr>
         <tr>
            <td colspan="3"><b>II.LÝ DO VÀO VIỆN: &nbsp;&nbsp;</b><div id="dotted" style="height:40px"><?=$thongtinbenhnhan2[0]["LyDoVaoVien"]?></div></td>
        </tr>
       
        <tr>
            <td><b>III.HỎI BỆNH: </b></td>
        </tr>
        <tr>
            <td colspan="3"><div id="dotted" style="height:40px"><b>1.Quá trình bệnh lý:</b> &nbsp;&nbsp; <?=$thongtinbenhnhan2[0]["QuaTrinhBenhLy"]?></div></td>
        </tr>
        
        <tr>
            <td><b>2.Tiền sử bệnh:</b></td>
        </tr>
        <tr>
            <td colspan="3"><div id="dotted" style="height:20px"><b> - Bản thân:</b> &nbsp;&nbsp; <?=$thongtinbenhnhan2[0]["TienSuBenhBanThan"]?></div></td>
        </tr>
        <tr>
            <td colspan="3"><div id="dotted" style="height:20px"><b> - Gia đình:</b> &nbsp;&nbsp; <?=$thongtinbenhnhan2[0]["TienSuBenhGiaDinh"]?></div></td>
        </tr>
        <tr>
            <td><b>IV.KHÁM XÉT:</b></td>
        </tr>
        <tr>
            <td colspan="4">
            <div style="width:70%;float:left">
                <div id="dotted" style="height:60px;"><b>1.Toàn thân: </b> &nbsp;&nbsp;<?=$thongtinbenhnhan2[0]["KhamXetToanThan"]?></div>
                <div id="dotted" style="height:60px;"><b>2.Các bộ phận: </b> &nbsp;&nbsp;<?=$thongtinbenhnhan2[0]["KhamXetCacBoPhan"]?></div>
            </div>
            <div style="width:30%;float:left">
            
                <fieldset style="width:100;height:100px;">
                    <div style="padding-top:4px">
                        <div ><label>Mạch:</label><input type="text" name="ngay" value="<?=$mach?>" class="text_1"style="width:44%;text-align:center">lần/phút</div>
                        <div ><label>Nhiệt độ:</label><input type="text" name="ngay"value="<?=$nhietdo?>" class="text_1"style="width:56%;text-align:center">°C</div> 
                         <div ><label>Huyết áp:</label><input type="text" name="ngay" value="<?=$huyetap?>"class="text_1"style="width:40%;text-align:center">mmHg</div> 
                          <div ><label>Nhịp thở:</label><input type="text" name="ngay" value="<?=$nhiptho?>"class="text_1"style="width:34%;text-align:center">lần/phút</div> 
                           <div ><label>Cân nặng:</label><input type="text" name="ngay"value="<?=$cannang?>" class="text_1"style="width:52%;text-align:center">Kg</div> 
                    </div>
                   
               </fieldset>
            </div>
            </td>
        
        
        <tr>
            <td colspan="3"><div id="dotted" style="height:40px"><b>3.Tóm tắt kết quả cận lâm sàng:</b> &nbsp;&nbsp; <?=$thongtinbenhnhan2[0]["TomTatKQCLS"]?></div></td>
        </tr>
        
        <tr>
            <td colspan="3"><div id="dotted" style="height:40px"><b>4.Chẩn đoán vào viện:</b>&nbsp;&nbsp;  <?=$thongtinbenhnhan2[0]["ChanDoanVaoVien"]?></div></td>
        </tr>
        
        <tr>
            <td colspan="3"><div id="dotted" style="height:40px"><b>5.Đã xử lý (thuốc,chăm sóc...):</b> &nbsp;&nbsp; <?=$thongtinbenhnhan2[0]["DaXuLy"]?></div></td>
        </tr>
        
        <tr>
            <td colspan="3"><div id="dotted" style="height:20px"><b>6.Cho vào điều trị tại khoa:</b>&nbsp;&nbsp;  <?=$thongtinbenhnhan2[0]["TenPhongBan"]?>	</div></td>
        </tr>
        <tr>
            <td colspan="3"><div id="dotted" style="height:20px"><b>7.Bác sĩ điều trị:</b>&nbsp;&nbsp;  <?=$thongtinbenhnhan2[0]["tennv"]?> </div></td>
        </tr>
        <tr>
            <td colspan="3"><div id="dotted" style="height:20px"><b>8.Chú ý:</b>&nbsp;&nbsp;  <?=$thongtinbenhnhan2[0]["ChuY"]?></div></td>
        </tr>
     </table>
      <table cellpadding="0" cellspacing="0" border="0" style="margin-left:220px;color:black;font-size:13px; width:100%;font-family:Tahoma, Geneva, sans-serif; border-top:0px solid #000;  padding:5px 0px">           
        
         <tr>
             
             <td style="width:35%;text-align:center" valign="top">
                 <i>
                    In từ dữ liệu gốc<br />
                    Ngày <?php echo date("d")." tháng " . date("m")." năm " .  date("Y"); ?>
                 </i>
                 
                    <h3 style="margin-top: 0px; margin-bottom: 0px;">BS KHÁM BỆNH</h3>
                
                 <div id="aa" style="height:80px"><img id="bs_chandoan" width="100"/></div>
                 <b style="color:red"><?=$thongtinbenhnhan2[0]["VietTat"]."".$thongtinbenhnhan2[0]["tennv2"];?></b>
        </td>           
         </tr>            
     </table>
   
</body>
</html>
   <script type="application/javascript">
        $(document).ready(function() {
				if(1==<?=$_GET["chuky"]?>){
             		load_sign('<?=$thongtinbenhnhan2[0]["HinhChuKy"]?>',"bs_chandoan");
				}
             print_preview();
			 if(bhyt!=''){
							
							var rs=bhyt.split("");
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
            
        });
    </script>