<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Report</title>
<style type="text/css">
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
.images_container{
	display:inline-block;
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

	<?php if($_GET["header"]=="top"){ ?>
	<?php } ?>
	<?php if($_GET["header"]=="top"){ ?>   
    <br />
    <br />
    <table cellpadding="0" cellspacing="0" border="0" style=" padding-left:10px; width:100%;font-family:Tahoma, Geneva, sans-serif;">
         <tr style="font-size:14px;">
             <td style=" width:40%">
                <span style="letter-spacing: 0.5px;font-weight:bold">FAMILY</span> <img src="images/logo_print.png" /> 
                <br />
                <span style="letter-spacing: 0.5px;text-transform:uppercase"><?php echo $_SESSION["com"]["TenBenhVien"]?></span>
             </td>
             <td style=" width:50%; text-align:right; ">
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
     <table cellpadding="0" cellspacing="0" border="0" style=" width:100%;font-family:Tahoma, Geneva, sans-serif;">
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
     <table cellpadding="0" cellspacing="0" border="0" style=" margin-left:auto; margin-right:auto;font-size:15px; width:90%;font-family:Tahoma, Geneva, sans-serif; border-top:1px solid #000; border-bottom:1px solid #000; padding:5px 0px">         
       <tr height="30px">
            <td style=" width:45%"> Họ tên: <b><?=$thongtinbenhnhan[0]["HoLotBenhNhan"]." ".$thongtinbenhnhan[0]["TenBenhNhan"];?></b></td> 
            <td align="left" style=" width:15%">Tuổi: <?=$thongtinbenhnhan[0]["Tuoi"];?></td>
            <td align="left" style=" width:15%">Giới: <?=$thongtinbenhnhan[0]["Gioi"];?></td>
            <td align="right" style=" width:25%">ID: <?=$thongtinbenhnhan[0]["MaBenhNhan"]."_".date("dmyHi");?></td>
         </tr>
         <tr height="30px">
            <td colspan="2"  >Địa chỉ: <?=$thongtinbenhnhan[0]["DiaChi"];?></td> 
            <td colspan="2" align="left">Ngày chụp:  <?php
			if($thongtinluotkham[0]["NgayGioChanDoan"]!=""){
            	echo $thongtinluotkham[0]["NgayGioChanDoan"]->format("H:i ".$_SESSION["config_system"]["ngaythang"]);
			}
			?></td>            
         </tr>  
          <tr>
                
         </tr>     
     </table>
     <table cellpadding="0" cellspacing="0" border="0" style=" margin-left:auto; margin-right:auto; font-size:13px;  width:90%;font-family:Tahoma, Geneva, sans-serif;padding:5px 0px";>   
     	 <tr>
         	<td colspan="2" style=" min-height:300px; width:100%;padding-top:10px; text-align:center" valign="top">
                 <div id="images_container"></div>
             	 
                 
           </td> 
         </tr>
         <tr>
         
            <td width="100%" valign="top" style="  font-size:15px!important; width:90%;padding-top:10px; min-height:300px;" colspan="2" >
             
                <b style="font-size:15px;">KẾT QUẢ PHÂN TÍCH DA</b><br />
               <pre><i style="font-size:14px"><?=$thongtinluotkham[0]["MoTa"] ?></i></pre>
               
               <b style="font-size:15px;">LỜI KHUYÊN CỦA BÁC SỸ:</b><br />
                <pre><b style="font-size:14px"><?=$thongtinluotkham[0]["KetLuan"] ?></b></pre>
               
              </td>
       </tr>
             <tr>
            
       		   <td align="center" width="50%">
            	
                </td>
               <td height="auto" align="center" valign="bottom">
            	 <i>
                 	In từ dữ liệu gốc<br />
                 	Ngày <?php echo $thongtinluotkham[0]["NgayGioChanDoan"]->format("d")." tháng " . $thongtinluotkham[0]["NgayGioChanDoan"]->format("m")." năm " .  $thongtinluotkham[0]["NgayGioChanDoan"]->format("Y"); ?>
                 </i>
               </td>
             </tr>
             <tr>
            	<td align="center">
                	
                </td>
                <td align="center" >
                 <b>
                 	BÁC SỸ TƯ VẤN<br />
                 </b>
                
                </td>
                
            </tr>   
            <tr  >
            	<td height="85px" style="min-height:95px" align="center" valign="top">
                	<!-- <img class="chuky" id="nv_chandoan" width="159"/>-->
                </td>
                <td align="center" valign="top" ><img class="chuky" id="bs_chandoan" width="159"/></td>
                
      	 </tr>   
          <tr>
            	<td align="center" valign="bottom">
                </td>
                <td align="center" >
				<b style="color:red"><?=$thongtinluotkham[0]["BsChanDoan"] ?></b></td>
                
       </tr> 
                   
                     
     </table>
    <?php if($_GET["header"]=="left"){ ?>
    	</div>
    <?php	} ?>
    
    <script type="application/javascript">
		$(document).ready(function() {
			
				load_sign('<?=$thongtinluotkham[0]["chuky_bacsy"]?>',"bs_chandoan");
				//load_sign('<?=$thongtinluotkham[0]["chuky_nhanvien"]?>',"nv_chandoan");
			
			<?php 
				echo "var _links='".$_GET['links']."';";
			?>
			_split_link= _links.split(":::");
			for(i=0;i<=_split_link.length-2;i++){			 
				$("#images_container").append(' <img width="230px" height="180px" src="'+_split_link[i]+'"  /> ');
			}
			 print_preview();
		});
	</script>
</body>
</html>
 