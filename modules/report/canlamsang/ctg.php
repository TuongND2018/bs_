<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Report</title>
<style >
body{
    overflow:auto;
    margin:0;
}
pre {
 white-space: pre-wrap;       /* css-3 */
 white-space: -moz-pre-wrap;  /* Mozilla, since 1999 */
 white-space: -pre-wrap;      /* Opera 4-6 */
 white-space: -o-pre-wrap;    /* Opera 7 */
 word-wrap: break-word;       /* Internet Explorer 5.5+ */
 font:13px Tahoma, Geneva, sans-serif;
}

</style>
</head>
 
<body>
    <?php
        $data= new SQLServer;//tao lop ket noi SQL
        $params = array($_GET["id_benhnhan"]);//tao param cho store 
        $store_name="{call GD2_GetThongTinBenhNhan(?)}";//tao bien khai bao store
        $get_thongtinbenhnhan=$data->query( $store_name,$params);//Goi store
        $excute= new SQLServerResult($get_thongtinbenhnhan);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
        $thongtinbenhnhan= $excute->get_as_array();//Tra ve mang toan bo data lay duoc  
         
        
        $params1 = array($_GET["id_kham"]);//tao param cho store 
        $store_name1="{call GD2_GetKhamById_Kham(?)}";//tao bien khai bao store
        $get_thongtinluotkham=$data->query( $store_name1,$params1);//Goi store
        $excute1= new SQLServerResult($get_thongtinluotkham);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
        $thongtinluotkham= $excute1->get_as_array();//Tra ve mang toan bo data lay duoc
        //print_r($thongtinluotkham);        
    ?>

    <?php if($_GET["header"]=="left"){ ?>
        <div style="font-size:14px;font-family:Tahoma, Geneva, sans-serif;-webkit-transform: rotate(270deg);-moz-transform: rotate(270deg);-o-transform: rotate(270deg);writing-mode: rl-tb;position:absolute;top:563px;left:-354px">  <span style="letter-spacing: 0.5px;font-weight:bold;color:#00b3a0">FAMILY</span> <img src="images/logo_mau.png" />  <span style="letter-spacing: 0.5px;text-transform:uppercase"><?php echo $_SESSION["com"]["TenBenhVien"]?></span> - <?php echo $_SESSION["com"]["DiaChi"]?> * T: <?php echo $_SESSION["com"]["SoDT"]?></div>
    <?php } ?>
    <?php if($_GET["header"]=="top"){ ?>   
    <table cellpadding="0" cellspacing="0" border="0" style="width:100%;font-family:Tahoma, Geneva, sans-serif;">
         <tr style="font-size:14px;">
             <td style=" width:60%">
                <span style="letter-spacing: 0.5px;font-weight:bold;color:#00b3a0">FAMILY</span> <img src="images/logo_mau.png" /> 
                <br />
                <span style="letter-spacing: 0.5px;text-transform:uppercase"><?php echo $_SESSION["com"]["TenBenhVien"]?></span>
             </td>
             <td style=" width:40%; text-align:right">
                Địa chỉ: <?php echo $_SESSION["com"]["DiaChi"]?>
                <br />
                Đà Nẵng
                <br />
                SĐT: <?php echo $_SESSION["com"]["SoDT"]?>
             </td>
         </tr>               
     </table>     
     <?php  } ?>
     <?php if($_GET["header"]=="left"){ ?>
        <div style=" margin-left:65px;margin-top:20px">
     <?php  } ?>
     <table cellpadding="0" cellspacing="0" border="0" style="width:100%;font-family:Tahoma, Geneva, sans-serif;color:#00b38b">
        <tr>
             <td style="text-align:center">
                <span style="letter-spacing: 0.5px;font-weight:bold;font-size:26px;">ĐO NHỊP TIM THAI - CƠN GO TỬ CUNG</span>
                <br />
                <span style="font-weight:bold;font-size:20px;">(CARDIOTOCOGRAPHY REPORT)</span>
                <br />
                <span style="font-weight:bold;font-size:20px;">*******</span>
                <div style="height:10px;">
                </div>
             </td>
         
         </tr>    
     </table>
     <table cellpadding="0" cellspacing="0" border="0" style="color:#036;line-height:1.7;font-size:13px; width:100%;font-family:Tahoma, Geneva, sans-serif; border-top:1px solid #000; border-bottom:1px solid #000; padding:5px 0px">         
         <tr>
            <td> Họ tên: <b><?=$thongtinbenhnhan[0]["HoLotBenhNhan"]." ".$thongtinbenhnhan[0]["TenBenhNhan"];?></b></td> 
            <td>Tuổi: <?=$thongtinbenhnhan[0]["Tuoi"];?></td>
            <td>ID: <?=$thongtinbenhnhan[0]["MaBenhNhan"]."_".date("dmyHi");?></td>
         </tr>
         <tr>
            <td  style="width:57%">Địa chỉ: <?=$thongtinbenhnhan[0]["DiaChi"];?></td> 
            <td colspan="3">Ngày khám:  <?php
            if($thongtinluotkham[0]["NgayGioChanDoan"]!=""){
                echo $thongtinluotkham[0]["NgayGioChanDoan"]->format("H:i ".$_SESSION["config_system"]["ngaythang"]);
            }
            ?></td>            
         </tr>  
             
     </table>
     <table cellpadding="0" cellspacing="0" border="0" style="font-size:13px; width:100%;font-family:Tahoma, Geneva, sans-serif;padding:5px 0px">

         <tr>
            <td colspan="3">
                <img id="http://192.168.1.105:81/giaidoan2/file_manager/php/connector.php?tenthumuc=CTG&answer=42&cmd=file&target=f1_YW5oY3RnLnBuZw" width="689px" style="padding-top:10px" height="200px" src="http://192.168.1.105:81/giaidoan2/file_manager/php/connector.php?tenthumuc=CTG&answer=42&cmd=file&target=f1_YW5oY3RnLnBuZw"/>
            </td>
         </tr>         
         <tr>
            <td valign="top" style="width:65%;padding-top:10px;padding-left:10px">
                <b style="font-size:15px;color:#00b38b">MÔ TẢ</b>
                <br />
                <pre><i><?=$thongtinluotkham[0]["MoTa"] ?></i></pre>
                <br /><br />
                <b style="font-size:15px;color:#00b38b">KẾT LUẬN</b><br />
                <pre><b><?=$thongtinluotkham[0]["KetLuan"] ?></b></pre>
                <br /><br />
                <?php
                    if($thongtinluotkham[0]["GhiChu"]!=""){
                        echo("<b style='font-size:15px;color:#00b38b'>ĐỀ NGHỊ</b><br />
                <pre><b>".$thongtinluotkham[0]["GhiChu"]."</b></pre>");
                    }
                ?>
                
            </td> 
             <td style="width:35%;padding-top:350px; text-align:center" valign="top">
                 <div id="images_container"></div>
                 <br /><br />
                 <i>
                    In từ dữ liệu gốc<br />
                    Ngày <?php echo $thongtinluotkham[0]["NgayGioChanDoan"]->format("d")." tháng " . $thongtinluotkham[0]["NgayGioChanDoan"]->format("m")." năm " .  $thongtinluotkham[0]["NgayGioChanDoan"]->format("Y"); ?>
                 </i>
                 <br />
                 <b>
                    BÁC SỸ SẢN PHỤ KHOA
                 </b>
                 <br />
                 <div style="height:65px"><img class="chuky" id="bs_chandoan" width="159"/></div>
                 <br />                 
                 <b style="color:red"><?=$thongtinluotkham[0]["BsChanDoan"] ?></b>
            </td>             
         </tr>            
     </table>
    <?php if($_GET["header"]=="left"){ ?>
        </div>
    <?php   } ?>
    
    <script type="application/javascript">
        $(document).ready(function() {
			if(1==<?php echo($_GET["chuky"])?>)
			{
				load_sign('<?=$thongtinluotkham[0]["chuky_bacsy"]?>',"bs_chandoan");
			}	 
               // alert(encode64('anhctg.png'));
                print_preview();
            
             
        });
    </script>
</body>
</html>
 