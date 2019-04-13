<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Report</title>
<style >
body{
    overflow:auto;
}
pre {
 white-space: pre-wrap;       /* css-3 */
 white-space: -moz-pre-wrap;  /* Mozilla, since 1999 */
 white-space: -pre-wrap;      /* Opera 4-6 */
 white-space: -o-pre-wrap;    /* Opera 7 */
 word-wrap: break-word;       /* Internet Explorer 5.5+ */
 font:12    px Tahoma, Geneva, sans-serif;
}

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
         
        
        $params1 = array($_GET["id_luotkham"]);//tao param cho store 
        $store_name1="{call GD2_SangLocTruocSinh_SelectAllByID_LuotKham(?)}";//tao bien khai bao store
        $get_thongtinluotkham=$data->query( $store_name1,$params1);//Goi store
        $excute1= new SQLServerResult($get_thongtinluotkham);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
        $thongtinluotkham= $excute1->get_as_array();//Tra ve mang toan bo data lay duoc
        /*
         $params2 = array(get_system_one_config("GD2_Bs_XetNghiem"));
        $store_name2="{call GD2_NhanVien_SelectAll_ByID_NhanVien(?)}";//tao bien khai bao store
        $get_thongtinluotkham2=$data->query( $store_name2,$params2);//Goi store
        $excute2= new SQLServerResult($get_thongtinluotkham2);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
        $thongtinluotkham2= $excute2->get_as_array();//Tra ve 
        */
        //print_r($thongtinluotkham[0]["NgayKinhCuoi"]);
		// echo  (float) $thongtinluotkham[0]["NT"];
        if($thongtinluotkham[0]["NgayKinhCuoi"]==""){
            $thongtinluotkham[0]["NgayKinhCuoi"]="";
        }
        else{
            $thongtinluotkham[0]["NgayKinhCuoi"]=$thongtinluotkham[0]["NgayKinhCuoi"]->format($_SESSION["config_system"]["ngaythang"]);;
        }
        if($thongtinbenhnhan[0]["NgayThangNamSinh"]!=''){
            $thongtinbenhnhan[0]["NgayThangNamSinh"]=$thongtinbenhnhan[0]["NgayThangNamSinh"]->format($_SESSION["config_system"]["ngaythang"]);
            
        }
        else{
           
            $thongtinbenhnhan[0]["NgayThangNamSinh"]= $thongtinbenhnhan[0]["NamSinh"];

        }
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
     <table cellpadding="0" cellspacing="0" border="0" style="width:100%;font-family:Tahoma, Geneva, sans-serif;color:black">
        <br>
        <tr>
             <td style="text-align:center">
                <span style="letter-spacing: 0.5px;font-weight:bold;font-size:26px;">PHIẾU SÀNG LỌC TRƯỚC SINH</span>
                <br />
                <span style="font-weight:bold;font-size:20px;">(Prenatal screening tests)</span>
                <br />
                <span style="font-weight:bold;font-size:20px;">ΩΩΩ</span>
                <div style="height:10px;">
                </div>
             </td>
         
         </tr>    
     </table>
     <table >
        <tr>
            <td>
                <label><i>Họ tên (Name of patient)</i></label>
            </td>
            <td>
                <label><?php echo  $thongtinbenhnhan[0]["HoLotBenhNhan"].' '.$thongtinbenhnhan[0]["TenBenhNhan"]?></label>
            </td>
        </tr>
        <tr>
            <td>
               <i> Ngày sinh (Day Birth) </i>
            </td>
            <td><?php echo  $thongtinbenhnhan[0]["NgayThangNamSinh"];?></td>
        </tr>
        <tr>
            <td>
                <i>Địa chỉ (Address) </i>
            </td>
            <td><?php echo  $thongtinbenhnhan[0]["DiaChi"]?></td>
        </tr>
        <tr>
            <td>
                <i>Điện thoại (Telephone) </i>
            </td>
            <td><?php echo  $thongtinbenhnhan[0]["DienThoai1"]?></td>
        </tr>
        <tr>
            <td>
                <i>Nghề nghiệp (Occupation) </i>
            </td>
            <td><?php echo  $thongtinbenhnhan[0]["ID_NgheNghiep"]?></td>
        </tr>
        <tr>
            <td>
                <i>Ngày lấy mẫu (Sample date) </i>
            </td>
            <td></td>
        </tr>
        <tr>
            <td>
                <i>Cân nặng (Weight) </i>
            </td>
            <td><?php echo  $thongtinluotkham[0]["CanNang"]?></td>
            <td>
                Para: <?php echo  $thongtinluotkham[0]["Para"]?> &nbsp;&nbsp;&nbsp;    <i>IVF </i>   <?php if($thongtinluotkham[0]["IVF"]=="0"){ echo '<input type="checkbox" >';} else{echo '<input type="checkbox" checked>';}?> 
            </td>

        </tr>
        <tr>
            <td>
                <i>Tiểu đường (Diabetes) </i>
            </td>
            <td><?php if($thongtinluotkham[0]["CoTieuDuong"]=="0"){ echo '<input type="checkbox" >';} else{echo '<input type="checkbox" checked>';}?></td>
            <td>
                <i>Hút thuốc lá (Smoking)</i>
            </td>
            <td><?php if($thongtinluotkham[0]["CoHutThuoc"]=="0"){ echo '<input type="checkbox">';} else{echo '<input type="checkbox" checked>';}?></td>
        </tr>
     </table>
    <table align="center">
        <tr>
            <td colspan="2" align="center">
                <b>Kết quả siêu âm (Result of Ultrasound)</b>
            </td>
        </tr>
        <tr>
            <td>
                Ngày kinh cuối (Last menstruation period)
            </td>
            <td>
                <?php echo  $thongtinluotkham[0]["NgayKinhCuoi"]?>
            </td>
        </tr>
        <tr>
            <td>
                Ngày siêu âm (Date of Ultrasound)
            </td>
            <td>
                <?php echo  $thongtinluotkham[0]["NgaySieuAm"]->format($_SESSION["config_system"]["ngaythang"]);?>
            </td>
        </tr>
        <tr>
            <td>
                Tuổi Thai (Gestational age) 
            </td>
            <td>
                <?php echo  $thongtinluotkham[0]["TuanThai"]?>  tuần  <?php echo  $thongtinluotkham[0]["NgayThai"]?>   ngày
            </td>
        </tr>
        <tr>
            <td>
                Song thai (Twins) 
            </td>
            <td>
                <?php if($thongtinluotkham[0]["SoLuongThai"]=="1"){ echo '<input type="checkbox">';} else{echo '<input type="checkbox" checked>';}?>
            </td>
        </tr>
        <tr>
            <td>
               Chiều dài đầu mông (CRL)  
            </td>
            <td>
                 <?php echo  (float) $thongtinluotkham[0]["CLR"]?> mm
            </td>
        </tr>
        <tr>
            <td>
               Độ mờ da gáy (NT)
            </td>
            <td>
                 <?php echo  (float) $thongtinluotkham[0]["NT"]?> mm
            </td>
        </tr>
        <tr>
            <td>
               Đường kính lưỡng đỉnh BPD (Biparietal) 
            </td>
            <td>
                <?php echo  (float) $thongtinluotkham[0]["Bipariental"]?>  mm
            </td>
        </tr>
        <tr>
            <td>
               Khác (Others) 
            </td>
            <td>
                <?php echo  $thongtinluotkham[0]["Khac"]?>
            </td>
        </tr>
        <tr>
            <td colspan="2"  align="center">
              <b>Chọn test xét nghiệm:</b>
            </td>
        </tr>
        <tr>
            <td>
               <?php if($thongtinluotkham[0]["CoDoubleTest"]=="0"){ echo '<input type="checkbox">';} else{echo '<input type="checkbox" checked>';}?> DoubleTest 
            </td>
            <td style="padding-left: 90px;">
                 <?php if($thongtinluotkham[0]["CoTripleTest"]=="0"){ echo '<input type="checkbox">';} else{echo '<input type="checkbox" checked>';}?> TripleTest 
            </td>
        </tr>
        <tr>
            <td colspan="2"  align="center">
              <b>Test xét nghiệm</b>
            </td>
            
        </tr>
        <tr>
            <td>
               Quý 1 (1st trimester) tuần thai 11-13 
            </td>
            <td>
                Quý 2 (2st trimester) tuần thai 15-20
            </td>
        </tr>
         <tr>
            <td>
               _ PAPP-A 
            </td>
            <td>
                _ AFP
            </td>
        </tr>
         <tr>
            <td>
               _ fhCG
            </td>
            <td>
               _ hCG
            </td>
        </tr>
         <tr>
            <td>
              
            </td>
            <td>
               _ uE3
            </td>
        </tr>
        <br>

    </table>
    <br>
    <div align="Center" style="padding-left: 350px;">
        Đà Nẵng, Ngày <?=date('d');?> tháng <?=date('m');?> năm <?=date('Y');?><br>
        BÁC SỸ ĐIỀU TRỊ <br>
          <img id="bs_chandoan" width="130"/>              <br>
         <?php echo  $thongtinluotkham[0]["nv"]?>
    </div>
    <script type="text/javascript">
        $(document).ready(function() {
           load_sign('<?=$thongtinluotkham[0]["HinhChuKy"]?>',"bs_chandoan");
          print_preview();
           
        });
    </script>
</body>
</html>
 