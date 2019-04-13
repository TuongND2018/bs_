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
 font-size:15px!important;
 font-family:Arial, Helvetica, sans-serif;
 margin-bottom: 0px !important;
 margin-top: 5px !important;
} 
div i{
	margin-left:0px;
	margin-top:40px!important;
	line-height:30px !important;
	font-style:normal !important;
	width:100%;
	 font-size:15px!important;
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
		
		$params2 = array($_GET["id_kham"]);//tao param cho store 
        $store_name2="{call GD2_Anus_SelectKQByID_Kham(?)}";//tao bien khai bao store
        $get_thongso=$data->query( $store_name2,$params2);//Goi store
        $excute2= new SQLServerResult($get_thongso);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
        $thongso= $excute2->get_as_array();//Tra ve mang toan bo data lay duoc
		
		
	//	print_r($thongtinluotkham);	   
    ?>

	<?php if($_GET["header"]=="left"){ ?>
		<div style="font-size:14px;font-family:Arial, Geneva, sans-serif;-webkit-transform: rotate(270deg);-moz-transform: rotate(270deg);-o-transform: rotate(270deg);writing-mode: rl-tb;position:absolute;top:513px;left:-385px">  <span style="letter-spacing: 0.5px;font-weight:bold;color:#00b3a0">FAMILY</span> <img src="images/logo_mau.png" />  <span style="letter-spacing: 0.5px;text-transform:uppercase"><?php echo $_SESSION["com"]["TenBenhVien"]?></span> - <?php echo $_SESSION["com"]["DiaChi"]?> * T: <?php echo $_SESSION["com"]["SoDT"]?></div>
	<?php } ?>
	<?php if($_GET["header"]=="top"){ ?>   
    <table cellpadding="0" cellspacing="0" border="0" style="width:100%;font-family:Arial, Geneva, sans-serif;">
         <tr style="font-size:14px;">
             <td style=" width:60%">
                <span style="letter-spacing: 0.5px;font-weight:bold;color:#00b3a0">FAMILY</span> <img src="images/logo_mau.png" /> 
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
     <table cellpadding="0" cellspacing="0" border="0" style="width:100%;font-family:Arial, Geneva, sans-serif;color:#00b38b">
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
     <table cellpadding="0" cellspacing="0" border="0" style="color:#036;font-size:15px; width:100%;font-family:Arial, Geneva, sans-serif; border-top:1px solid #000; border-bottom:1px solid #000; padding:5px 0px">         
         <tr height="30px">
            <td> Họ tên: <b><?=$thongtinbenhnhan[0]["HoLotBenhNhan"]." ".$thongtinbenhnhan[0]["TenBenhNhan"];?></b></td> 
            <td>Tuổi: <?=$thongtinbenhnhan[0]["Tuoi"];?></td>
            <td>G.tính: <?=$thongtinbenhnhan[0]["Gioi"];?></td>
            <td>ID: <?=$thongtinbenhnhan[0]["MaBenhNhan"];?></td>
         </tr>
         <tr>
            <td  style="width:65%">Địa chỉ: <?=$thongtinbenhnhan[0]["DiaChi"];?></td> 
            <td colspan="3">Ngày khám:  <?php
			if($thongtinluotkham[0]["NgayGioChanDoan"]!=""){
            	echo $thongtinluotkham[0]["NgayGioChanDoan"]->format($_SESSION["config_system"]["ngaythang"]);
			}
			?></td>            
         </tr>     
     </table>
     <table cellpadding="0" cellspacing="0" border="0" style="font-size:13px; width:100%;font-family:Arial, Geneva, sans-serif;padding:5px 0px">         
         <tr>
            <td valign="top" style="width:65%;padding-top:10px">
            	<b style="font-size:15px;color:#00b38b">BỆNH SỬ:</b>
                <div>
                <?php if($thongso[0]["ChiSo21"]){ ?><i>+ Bị bệnh đã <?=$thongso[0]["ChiSo21"] ?> năm<?php } if($thongso[0]["ChiSo22"]!='' && $thongso[0]["ChiSo21"]!=''){ ?>, đã điều trị <?=$thongso[0]["ChiSo22"] ?> lần<?php if($thongso[0]["ChiSo23"]!=''){ ?> bằng phương pháp: <?=$thongso[0]["ChiSo23"] ?> <?php }?></i> <br /><?php }elseif($thongso[0]["ChiSo21"]){ ?>.<br /> <?php }?>
                
                <i>+ <?php
				 if($thongso[0]["ChiSo28"]=='True'){
					  echo "Hay táo bón";
				 }else {
					 echo "Không táo bón";
				 } 
				 if($thongso[0]["ChiSo29"]=='True'){
					  echo ", và hay đi cầu ra máu.";
				 }else {
					 echo ", không đi cầu ra máu.";
				 } 
					 ?></i>
                <i><br />+ <?php
				 if($thongso[0]["ChiSo30"]=='True'){
					  echo "Bình thường hay đau";
				 }else {
					 echo "Bình thường không đau";
				 } 
				 if($thongso[0]["ChiSo31"]=='True'){
					  echo ", đau khi đi cầu.";
				 }else {
					 echo ", không đau khi đi cầu.";
				 }
				?>
                </i>
                <i><br />+ Tiền sử:<?php 
					if($thongso[0]["ChiSo24"]=='True'){
					  echo " Huyết áp cao.";
					}
					if($thongso[0]["ChiSo24"]=='True'){
					  echo " Huyết áp thấp.";
					}
					if($thongso[0]["ChiSo26"]=='True'){
					  echo " Bệnh tiểu đường.";
					}
					if($thongso[0]["ChiSo27"]=='True'){
					  echo " Bệnh tim mạch.";
					}
					  ?>
                </i>
                <?php 
					if($thongtinbenhnhan[0]["Ps"]!='' && $thongtinbenhnhan[0]["Pd"]!=''){
					  echo "<i><br />+ Huyết áp: ".$thongtinbenhnhan[0]["Ps"]."/".$thongtinbenhnhan[0]["Pd"]." mmHg. Mạch:".$thongtinbenhnhan[0]["Mach"]." nhịp/phút</i>";
					}
					  ?>
                
                </div>
                <b style="font-size:15px;color:#00b38b">NỘI SOI</b>: <i style="font-size:14px;font-family:Arial, Helvetica, sans-serif;">(Bệnh nhân nằm ngửa tư thế sản khoa)</i>
                <div>
                <i>+ Đặc điểm hậu môn: <?php 
				 if($thongso[0]["ChiSo32"]=='True'){
				  echo "Nứt";
				 }else {
					 echo "Không nứt";
				 } 
				  if($thongso[0]["ChiSo33"]=='True'){
				  echo ", có polyp";
				 }else {
					 echo ", không có polyp";
				 } 
				 if($thongso[0]["ChiSo34"]=='True'){
				  echo ", có nhủ gai";
				 }else {
					 echo ", không có nhủ gai";
				 }
				
				 if($thongso[0]["ChiSo35"]=='True'){
				  echo ", vành hậu môn giãn";
				 }else {
					 echo ", vành hậu môn không giãn";
				 } 
				 if($thongso[0]["ChiSo36"]=='True'){
					 echo " và co hồi tốt";
				 }else {
					 echo " và co hồi kém";
				 } 
				 if($thongso[0]["ChiSo37"]=='True'){
				  echo ". Niêm mạc hậu môn mềm mại";
				 }else {
					 echo ". Niêm mạc hậu môn không mềm mại";
				 } 
				?>.</i>
                <i><br />+ Hình ảnh trực tràng: <?php if($thongso[0]["ThongSoKyThuat"]){?><br /> <?php }?><?=$thongso[0]["ThongSoKyThuat"]?></i>
                <i><br />+ <?php
               	if($thongso[0]["ChiSo38"]>0){
				  echo "Đặc điểm búi trĩ: Có ".$thongso[0]["ChiSo38"]." búi trĩ vị trí ".$thongso[0]["ChiSo39"];	if($thongso[0]["ChiSo40"]=='True'){
					  echo ". Trĩ lồi ra ngoài"; 
					  if($thongso[0]["ChiSo41"]=='True'){
						  echo " phải đẩy lên mới được";
						  }else{
							  echo " không cần đẩy lên";
							  }
				  }else{
					  echo ". Trĩ không lồi ra ngoài";
					  }
					if($thongso[0]["ChiSo42"]=='True'){
						echo ". Búi trĩ xung huyết";
					}else{
						echo ". Búi trĩ không xung huyết";
					}
					if($thongso[0]["ChiSo43"]=='True'){
						echo ", có viêm";
					}else{
						echo ", không viêm";
					}
					if($thongso[0]["ChiSo44"]=='True'){
						echo ", và xơ chai";
					}else{
						echo ", và không xơ chai";
					}
				 }else {
					 echo "Không có trĩ";
				 } 
				?>.</i>
                <i><br />+ Các đặc điểm khác: <?=$thongso[0]["MoTa"]?></i>
                </div>


                <b style="font-size:15px;color:#00b38b">KẾT LUẬN</b><br />
                <div><b>+ Chẩn đoán: <?=$thongtinluotkham[0]["ChanDoan"] ?><br />+ Phương pháp điều trị: <?=$thongtinluotkham[0]["KetLuan"] ?><br />              
                </b></div>
			</td> 
             <td style="width:35%;padding-top:10px; text-align:center" valign="top">
                 <div id="images_container"></div>
             	 <br /><br />
                 <i>
                 	In từ dữ liệu gốc<br />
                 	Ngày <?php echo date("d")." tháng " . date("m")." năm " .  date("Y"); ?>
                 </i>
                 <br />
                 <b>
                 	<?php echo $_GET["chucdanh"]?>
                 </b>
                 <br /><img id="bs_chandoan" width="100"/><br />
                 <b style="color:red"><?=$thongtinluotkham[0]["BsChanDoan"];?></b>
            </td>             
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
			//alert(_links);
			_split_link= _links.split(":::");
			for(i=0;i<=_split_link.length-2;i++){			 
				$("#images_container").append(' <img width="200px" height="180px" src="'+_split_link[i]+'"  /><div style="height:7px"></div> ');
			}
			if(_split_link.length-1==2){
				$("#images_container").append(' <img width="200px" height="180px" src="./modules/report/lamsang/img/anus/anus.png"  /><div style="height:7px"></div> ');
				}
		print_preview();
			
		});
	</script>
</body>
</html>
 