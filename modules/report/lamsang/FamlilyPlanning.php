<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Report</title>
<style >
body{
	overflow: auto;
	margin-left: 30px;
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
        $store_name1="{call GD2_GetKhamById_Kham_KHHGD(?)}";//tao bien khai bao store
        $get_thongtinluotkham=$data->query( $store_name1,$params1);//Goi store
        $excute1= new SQLServerResult($get_thongtinluotkham);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
        $thongtinluotkham= $excute1->get_as_array();//Tra ve mang toan bo data lay duoc
		//print_r($thongtinluotkham);	   
    ?>

	<?php if($_GET["header"]=="top"){ ?>
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
     <?php	} ?>
     <?php if($_GET["header"]=="left"){ ?>
    	<div style=" margin-left:55px;margin-top:20px">
     <?php	} ?>
     <table cellpadding="0" cellspacing="0" border="0" style="width:100%;font-family:Tahoma, Geneva, sans-serif;">
     	<tr>
             <td style="text-align:center"><br /><br />
                <span style="letter-spacing: 0.5px;font-weight:bold;font-size:26px;"><?=$thongtinluotkham[0]["ReportName"] ?></span>
                <br />
                <span style="font-weight:bold;font-size:20px;"><?=$thongtinluotkham[0]["TenLoaiKham_EN"] ?></span>
                <br />
                <span style="font-weight:bold;font-size:20px;">*******</span>
                <div style="height:10px;">
                </div>
             </td>
         
       </tr>    
     </table>
     <table cellpadding="0" cellspacing="0" border="0" style=" margin-left:auto; margin-right:auto;font-size:14px; width:90%;font-family:Tahoma, Geneva, sans-serif; border-top:1px solid #000; border-bottom:1px solid #000; padding:5px 0px">         
       <tr height="30px">
            <td style=" width:55%"> Họ tên: <b><?=$thongtinbenhnhan[0]["HoLotBenhNhan"]." ".$thongtinbenhnhan[0]["TenBenhNhan"];?></b></td> 
            <td align="left" style=" width:10%">Tuổi: <?=$thongtinbenhnhan[0]["Tuoi"];?></td>
            <td align="center" style=" width:10%">Giới: <?=$thongtinbenhnhan[0]["Gioi"];?></td>
            <td align="right" style=" width:25%">ID: <?=$thongtinbenhnhan[0]["MaBenhNhan"]."_".date("dmyHi");?></td>
         </tr>
         <tr>
            <td>Địa chỉ: <?=$thongtinbenhnhan[0]["DiaChi"];?></td> 
            <td colspan="3">Ngày làm thủ thuật:  <?php
			if($thongtinluotkham[0]["NgayGioChanDoan"]!=""){
            	echo $thongtinluotkham[0]["NgayGioChanDoan"]->format($_SESSION["config_system"]["ngaythang"]);
			}
			?></td>            
         </tr>  
          <tr>
            <td colspan="2" width="70%">Chẩn đoán:&nbsp;&nbsp;<?=$thongtinluotkham[0]["ChanDoan"] ?></td>   
             
             <td colspan="2"  width="30%">PARA:&nbsp;&nbsp;
             <?php 
  if(trim($thongtinluotkham[0]["PARA"],'')!=''){
	  echo '
         <i style="font-size:14px">'.$thongtinluotkham[0]["PARA"].'</i>
     ';
  }
  ?>
             </td>  
         </tr>     
     </table>
     <table border="0" cellpadding="0" cellspacing="0" style="font-size:13px; margin-left:35px; width:90%;font-family:Tahoma, Geneva, sans-serif">    
     	   
         <tr>
         
            <td width:90%; valign="top" style=" margin-left:20px;;padding-top:10px min-height:300px;" colspan="2" >
            
            <b style="font-size:15px;;">MÔ TẢ</b>
                <br />
                <pre><i style="font-size:14px"><?=$thongtinluotkham[0]["MoTa"] ?></i></pre>
                <br />
                <b style="font-size:15px;">LỜI DẶN</b><br />
                <pre style="font-size:14px"><?=$thongtinluotkham[0]["KetLuan"] ?></pre>
              </td>
       </tr>
             <tr>
            
       		   <td align="center">
            	
                </td>
               
             </tr>
             </table>
             <table cellpadding="0" cellspacing="0" border="0" style="font-size:14px; width:100%;font-family:Arial, Geneva, sans-serif;padding:5px 0px">
         <tr>
             <td>&nbsp;
             </td>
             <td align="center">
              <i>
                 	In từ dữ liệu gốc, Ngày <?php echo $thongtinluotkham[0]["NgayGioChanDoan"]->format("d")." tháng " . $thongtinluotkham[0]["NgayGioChanDoan"]->format("m")." năm " .  $thongtinluotkham[0]["NgayGioChanDoan"]->format("Y"); ?>
                 </i>
             </td>
         </tr>
         <tr>
     	<td width="50%" align="center"></td>
        <td width="50%" align="center">
        <b>
          BÁC SỸ
         </b>
        </td>
     </tr>
     <tr>
     	
        <td width="50%" align="center"></td>
        <td width="50%" align="center">
        
          <div style="height:80px"><img id="bs_chandoan" width="100"/></div>
        
                 <b style="color:red"><?=$thongtinluotkham[0]["BsChanDoan"];?></b>
        </td>
     </tr>
     </table>
    <?php if($_GET["header"]=="left"){ ?>
    	</div>
    <?php	} ?>
    </body>
    
    <script type="application/javascript">
		$(document).ready(function() {
			if(1==<?=$_GET['chuky']?>){
			load_sign('<?=$thongtinluotkham[0]["chuky_bacsy"]?>',"bs_chandoan");
			//load_sign('<?=$thongtinluotkham[0]["chuky_nhanvien"]?>',"nuhosinh");
			}
			 print_preview();
		});
	</script>
</body>
</html>
 