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
#myImg0,#myImg1{
	width:320px!important;
	height:240px!important;
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
		<div style="font-size:14px;font-family:Tahoma, Geneva, sans-serif;-webkit-transform: rotate(270deg);-moz-transform: rotate(270deg);-o-transform: rotate(270deg);writing-mode: rl-tb;position:absolute;top:563px;left:-365px">  <span style="letter-spacing: 0.5px;font-weight:bold;color:#00b3a0">FAMILY</span> <img src="images/logo_mau.png" />  <span style="letter-spacing: 0.5px;text-transform:uppercase"><?php echo $_SESSION["com"]["TenBenhVien"]?></span> - <?php echo $_SESSION["com"]["DiaChi"]?> * T: <?php echo $_SESSION["com"]["SoDT"]?></div>
	<?php } ?>
	
     <?php if($_GET["header"]=="left"){ ?>
    	<div style=" margin-left:60px;margin-top:20px">
     <?php	} ?>
     <table cellpadding="0" cellspacing="0" border="0" style="width:100%;font-family:Tahoma, Geneva, sans-serif;color:#00b38b">
     	<tr>
             <td style="text-align:center">
                <span style="letter-spacing: 0.5px;font-weight:bold;font-size:26px;"><?php echo $_GET["tieude"]?></span>
                <br />
                <span style="font-weight:bold;font-size:20px;">(<?php echo $_GET["chucnang"]?>)</span>
                <br />
                <span style="font-weight:bold;font-size:20px;">*******</span>
                <div style="height:10px;">
                </div>
             </td>
         
         </tr>    
     </table>
     <table cellpadding="0" cellspacing="0" border="0" style="color:#036;line-height:1.7;font-size:13px; width:98%;font-family:Tahoma, Geneva, sans-serif; border-top:1px solid #000; border-bottom:1px solid #000; padding:5px 0px">         
         <tr>
            <td> Họ tên: <b><?=$thongtinbenhnhan[0]["HoLotBenhNhan"]." ".$thongtinbenhnhan[0]["TenBenhNhan"];?></b></td> 
            <td>Tuổi: <?=$thongtinbenhnhan[0]["Tuoi"];?></td>
            <td>G.tính: <?=$thongtinbenhnhan[0]["Gioi"];?></td>
            <td>ID: <?=$thongtinbenhnhan[0]["MaBenhNhan"]."_".date("dmyHi");?></td>
         </tr>
         <tr>
            <td  style="width:57%">Địa chỉ: <?=$thongtinbenhnhan[0]["DiaChi"];?></td> 
            <td colspan="3">Ngày soi:  <?php
			if($thongtinluotkham[0]["NgayGioChanDoan"]!=""){
            	echo $thongtinluotkham[0]["NgayGioChanDoan"]->format("H:i ".$_SESSION["config_system"]["ngaythang"]);
			}
			?></td>            
         </tr>  
             
     </table>
     <table cellpadding="0" cellspacing="0" border="0" style="font-size:13px; width:100%;font-family:Tahoma, Geneva, sans-serif;padding:5px 0px">         
         <tr>
         	<td colspan="2" style=" min-height:300px; width:100%;padding-top:10px; text-align:center" valign="top">
                 <div id="images_container"></div>
             	 
                 
           </td> 
         </tr>
         <tr style="margin-left:20px!important">
         
            <td width="100%" valign="top" style=" margin-left:20px;  font-size:15px!important; width:90%;padding-top:10px; min-height:300px;" colspan="2" >
             
                <b style="font-size:15px;">KẾT QUẢ PHÂN TÍCH DA</b><br />
               <pre><i style="font-size:14px"><?=$thongtinluotkham[0]["KetLuan"] ?></i></pre>
               
               <b style="font-size:15px;">LỜI KHUYÊN CỦA BÁC SỸ:</b><br />
                <pre><b style="font-size:14px"><?=$thongtinluotkham[0]["GhiChu"] ?></b></pre>
               
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
			<?php 
				echo "var _links='".$_GET['links']."';";
			?>
			
			_split_link= _links.split(":::");
			for(i=0;i<=_split_link.length-2;i++){			 
				$("#images_container").append(' <img id="myImg'+i+'" width="230px" height="180px" src="'+_split_link[i]+'"  /> ');
			}
			
	 		
			 	
			print_preview();
			
			
		});
	</script>
</body>
</html>
 