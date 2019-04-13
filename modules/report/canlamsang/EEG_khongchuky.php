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
		 //print_r($thongtinbenhnhan);
		
		$params1 = array($_GET["id_kham"]);//tao param cho store 
		//echo ($_GET["id_kham"]);
        $store_name1="{call GD2_GetKhamById_Kham(?)}";//tao bien khai bao store
        $get_thongtinluotkham=$data->query( $store_name1,$params1);//Goi store
        $excute1= new SQLServerResult($get_thongtinluotkham);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
        $thongtinluotkham= $excute1->get_as_array();//Tra ve mang toan bo data lay duoc
		//print_r($thongtinluotkham);		 
    ?>

	<?php if($_GET["header"]=="left"){ ?>
		<div style="font-size:14px;font-family:Tahoma, Geneva, sans-serif;-webkit-transform: rotate(270deg);-moz-transform: rotate(270deg);-o-transform: rotate(270deg);writing-mode: rl-tb;position:absolute;top:550px;left:-362px">  <span style="letter-spacing: 0.5px;font-weight:bold;color:#00b3a0"">FAMILY</span> <img src="images/logo_mau.png" />  <span style="letter-spacing: 0.5px;text-transform:uppercase"><?php echo $_SESSION["com"]["TenBenhVien"]?></span> - <?php echo $_SESSION["com"]["DiaChi"]?> * T: <?php echo $_SESSION["com"]["SoDT"]?></div>
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
                Đà Nẵng
                <br />
                SĐT: <?php echo $_SESSION["com"]["SoDT"]?>
             </td>
         </tr>               
     </table>     
     <?php	} ?>
     <?php if($_GET["header"]=="left"){ ?>
    	<div style=" margin-left:55px;margin-top:0px">
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
     <table cellpadding="0" cellspacing="0" border="0" style="color:#036;font-size:13px; width:100%;font-family:Tahoma, Geneva, sans-serif; border-top:1px solid #000; border-bottom:1px solid #000; padding:5px 0px">         
         <tr style="height:25px">
            <td> Họ tên: <b><?=$thongtinbenhnhan[0]["HoLotBenhNhan"]." ".$thongtinbenhnhan[0]["TenBenhNhan"];?></b></td> 
            <td>Tuổi: <?=$thongtinbenhnhan[0]["Tuoi"];?></td>
            <td>G.tính: <?=$thongtinbenhnhan[0]["Gioi"];?></td>
            <td>ID: <?=$thongtinbenhnhan[0]["MaBenhNhan"]."_".date("dmyHi");?></td>
         </tr>
         <tr style="height:25px">
            <td  style="width:57%">Địa chỉ: <?=$thongtinbenhnhan[0]["DiaChi"];?></td> 
            <td colspan="3">Ngày khám:  <?php
			if($thongtinluotkham[0]["NgayGioChanDoan"]!=""){
            	echo $thongtinluotkham[0]["NgayGioChanDoan"]->format("H:i ".$_SESSION["config_system"]["ngaythang"]);
			}
			?></td>            
         </tr>  
          <tr style="height:25px">
            <td colspan="4">HA:  <?=$thongtinbenhnhan[0]["Ps"];?>/<?=$thongtinbenhnhan[0]["Pd"];?> mmHg - Mạch: <?=$thongtinbenhnhan[0]["Mach"];?> lần/phút - Nặng: <?=$thongtinbenhnhan[0]["CanNang"];?> kg - Cao: <?=$thongtinbenhnhan[0]["ChieuCao"];?> cm - BMI: 
            <?php
				if($thongtinbenhnhan[0]["CanNang"]!=0&&$thongtinbenhnhan[0]["ChieuCao"]!=0){
					$BMI= $thongtinbenhnhan[0]["CanNang"]/($thongtinbenhnhan[0]["ChieuCao"]*$thongtinbenhnhan[0]["ChieuCao"])*10000;
					echo round($BMI,1);			
					if($BMI<18.5 ){
						echo " (Gầy)";                 
					}else if(($BMI>=18.5)&&($BMI<23)){
						echo " (Bình thường)";                
					}else if(($BMI>=23)&&($BMI<25)){
						echo " (Thừa cân)";                 
					}else if(($BMI>=25)&&($BMI<30)){
						echo " (Béo phì độ I)";                 
					}else if(($BMI>=30)&&($BMI<35)){
						echo " (Béo phì độ II)";               
					}else if($BMI>=35){
						echo " (Béo phì độ III)";                
					}
				}
				else echo "";
			?>
              </td>       
         </tr>     
     </table>
     <table cellpadding="0" cellspacing="0" border="0" style="font-size:13px; width:100%;font-family:Tahoma, Geneva, sans-serif;padding:0px 0px"> 
     	<tr>
        	
        	<td width="75%">
            	<div style="margin-top:5px">
            	<label style=" font:11px Tahoma, Geneva, sans-serif;font-weight:bold;color:#00b38b;">NEUROMAP(Tỷ lệ - Abs và biên dộ - Rel của các loại sóng ở từng khu vực não)</label></div>
            	<div style="height:110px" id="images_container"></div>
                <div style="margin-top:5px">
                	<label style=" font:11px Tahoma, Geneva, sans-serif;font-weight:bold;color:#00b38b">HISTOGRAM(Biên độ - Microvol của các loại sóng ở từng khu vực não)</label></div>
                <div style="height:250px" id="images_container_2"></div>
            </td>
            <td  width="25%" align="center" style="font:11px Tahoma, Geneva, sans-serif;font-weight:500">
            	<img src="./modules/report/canlamsang/eeg.JPG" width="200px" height="220px"><br /><br />
            	<label style="color:blue;letter-spacing:0px"> Sóng Delta(0,5 - 3 Hz): Màu xanh dương</label><br /><br />
                <label style="color:green;letter-spacing:0px"> Sóng Theta(4 - 7 Hz): Màu xanh lục</label><br /><br />
                <label style="color:#F0C"> Sóng Alpha(8 - 12 Hz): Màu hồng</label><br /><br />
                <label style="color:red"> Sóng Beta(13 - 25 Hz): Màu đỏ</label>
            </td>
        </tr>	        
         <tr>
            <td valign="top" colspan="2" style="width:100%;padding-top:7px">
            	<b style="font-size:15px;color:#00b38b">MÔ TẢ</b>
                <br />
                <pre><i><?=$thongtinluotkham[0]["MoTa"] ?></i></pre>
          		
                <b style="font-size:15px;color:#00b38b">KẾT LUẬN</b><br />
                <pre><b><?=$thongtinluotkham[0]["KetLuan"] ?></b></pre>
			</td> 
            
            
         </tr>  
       </table>
        <table cellpadding="0" cellspacing="0" border="0" style="font-size:13px; width:100%;font-family:Tahoma, Geneva, sans-serif;padding:0px 0px"> 
         <tr>
         	<td width="50%" style="padding-top:0px; text-align:center" valign="top" >
            </td>
         	 <td width="50%" style="padding-top:0px; text-align:center" valign="top">
                 
             	 
                 <i>
                 	In từ dữ liệu gốc, Ngày <?php echo $thongtinluotkham[0]["NgayGioChanDoan"]->format("d")." tháng " . $thongtinluotkham[0]["NgayGioChanDoan"]->format("m")." năm " .  $thongtinluotkham[0]["NgayGioChanDoan"]->format("Y"); ?>
                 </i>
                 <br />
                <b>
                 	<?php echo $_GET["chucdanh"]?>
                 </b>
                  <div style="height:80px"></div>
                  	
					 <b style="color:red"><?=$thongtinluotkham[0]["BsChanDoan"];?></b>
                
                  
                 
            </td>  
                       
         </tr>          
     </table>
    <?php if($_GET["header"]=="left"){ ?>
    	</div>
    <?php	} ?>
    
    <script type="application/javascript">
		$(document).ready(function() {
			<?php 
				echo "var _links='".$_GET['links']."';";
			?>
			_split_link= _links.split(":::");
			text=["HISTOGRAM(Biên độ - Microvol của các loại sóng ở từng khu vực não)",""]; 
				$("#images_container").append(' <img width="445px" height="110px" src="'+_split_link[0]+'"  />');
				$("#images_container_2").append(' <img width="445px" height="250px" src="'+_split_link[1]+'"  />');
			print_preview();
		});
	</script>
</body>
</html>
 