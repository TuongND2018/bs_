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
 font:13px arial, Geneva, sans-serif;
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
        $store_name2="{call GD2_GetTuoiThai_SieuAm4D_ByID_Kham(?)}";//tao bien khai bao store
        $get_khamthai=$data->query( $store_name2,$params2);//Goi store
        $excute2= new SQLServerResult($get_khamthai);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
        $khamthai= $excute2->get_as_array();//Tra ve mang toan bo data lay duoc
	   //print_r($_GET["id_kham"]);	   
    ?>

	<?php if($_GET["header"]=="left"){ ?>
		<div style="font-size:14px;font-family:arial, Geneva, sans-serif;-webkit-transform: rotate(270deg);-moz-transform: rotate(270deg);-o-transform: rotate(270deg);writing-mode: rl-tb;position:absolute;top:550px;left:-380px">  <span style="letter-spacing: 0.5px;font-weight:bold">FAMILY</span> <img src="images/logo_print.png" />  <span style="letter-spacing: 0.5px;text-transform:uppercase"><?php echo $_SESSION["com"]["TenBenhVien"]?></span> - <?php echo $_SESSION["com"]["DiaChi"]?> * T: <?php echo $_SESSION["com"]["SoDT"]?></div>
	<?php } ?>
	<?php if($_GET["header"]=="top"){ ?>   
    <table cellpadding="0" cellspacing="0" border="0" style="width:100%;font-family:arial, Geneva, sans-serif;">
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
    	<div style=" margin-left:70px;margin-top:20px">
     <?php	} ?>
     <table cellpadding="0" cellspacing="0" border="0" style="width:100%;font-family:arial, Geneva, sans-serif;color:#00b38b">
     	<tr>
             <td style="text-align:center">
                <span style="letter-spacing: 0.5px;font-weight:bold;font-size:26px;">LỊCH HẸN KHÁM THAI</span>
                <br />
                <span style="font-weight:bold;font-size:20px;">(PREGNANCY EXAMINITION SCHEDULE)</span>
                <br />
                <span style="font-weight:bold;font-size:20px;">*******</span>
                <div style="height:10px;">
                </div>
             </td>
         
         </tr>    
     </table>
     <table cellpadding="0" cellspacing="0" border="0" style="color:#036;font-size:13px; width:100%;font-family:arial, Geneva, sans-serif; border-top:1px solid #000; border-bottom:1px solid #000; padding:5px 0px">         
         <tr>
            <td> Họ tên: <b><?=$thongtinbenhnhan[0]["HoLotBenhNhan"]." ".$thongtinbenhnhan[0]["TenBenhNhan"];?></b></td> 
            <td colspan="2" width="25%">Tuổi: <strong>
            <?=$thongtinbenhnhan[0]["Tuoi"];?>
            </strong></td>
            <td width="25%">ID: <strong>
            <?=$thongtinbenhnhan[0]["MaBenhNhan"];?>
            </strong></td>
         </tr>
         <tr>
            <td colspan="4"  style="width:65%">Địa chỉ: <?=$thongtinbenhnhan[0]["DiaChi"];?></td> 
         </tr>  
          <tr>
            <td colspan="4">Ngày khám:
            <?php
			if($thongtinluotkham[0]["NgayGioChanDoan"]!=""){
            	echo $thongtinluotkham[0]["NgayGioChanDoan"]->format($_SESSION["config_system"]["ngaythang"]);
			}
			?></td>       
         </tr> 
         <tr>
         	<td colspan="1" width="50%">Tuổi thai: &nbsp; 
       	    <?php
			 echo (int)($khamthai[0]["SoNgayThai"]/7)
			?> &nbsp;&nbsp;tuần &nbsp;&nbsp;<?php
			 echo $khamthai[0]["SoNgayThai"]%7
			?> &nbsp;&nbsp;ngày</td>
            <td colspan="3"  width="50%">Ngày sinh dự kiến: <?php
                    $ngaythai=$khamthai[0]["SoNgayThai"];
                    $date=$khamthai[0]['NgayGioTao']->format('Y-m-d');
			       echo " ".date($_SESSION["config_system"]["ngaythang"], strtotime(" +".(40 * 7-$ngaythai)." days",strtotime($date)));
			?></td>
         </tr>   
     </table>
     <br />
     <p align="center" style="font-weight:bold; font-size:16px;">Để theo dõi sức khỏe của thai và sản phụ, hãy tái khám và siêu âm theo lịch sau:</p>
     <br />
     <table cellpadding="0" cellspacing="0" border="0" style="font-size:13px; width:100%;font-family:arial, Geneva, sans-serif;padding:5px 0px">         
         <tr>
            <td valign="top" style="width:65%;padding-top:10px; font-size:16px; text-transform:uppercase; line-height:30px;">
            <?php
             $sotuanthai=(int)($khamthai[0]["SoNgayThai"]/7);
             $songaythai=$khamthai[0]["SoNgayThai"]%7;
			if($sotuanthai<1)
			{
				$sotuanthai=0;
				
			}else{
				$sotuanthai=$sotuanthai;
				}
				
			if($songaythai<1)
			{
				$songaythai=0;
				
			}else{
				$songaythai=$songaythai;
				}
			$ngaythai=($sotuanthai*7)+$songaythai;
			
			//echo $ngaythai;
				$date=$khamthai[0]['NgayGioTao']->format('Y-m-d');
             if($sotuanthai< 11) {
				  echo "Ngày Khám: ".date($_SESSION["config_system"]["ngaythang"], strtotime ( '+'.(12 * 7-$ngaythai).' days' , strtotime($date)) )." - khi thai 12 tuần (siêu âm)<br>";
				 
			 }
            
             if($sotuanthai< 17)  {
				 echo "Ngày Khám: ".date($_SESSION["config_system"]["ngaythang"], strtotime(" +".(18 * 7-$ngaythai)." days", strtotime($date)))." - khi thai 18 tuần (siêu âm)<br>";
			 }
             if($sotuanthai< 21)  {
				echo  "Ngày Khám: ".date($_SESSION["config_system"]["ngaythang"], strtotime(" +".(22 * 7-$ngaythai)." days", strtotime($date)))." - khi thai 22 tuần (siêu âm)<br>";
			 }
             if($sotuanthai< 25)  {
				echo  "Ngày Khám: ".date($_SESSION["config_system"]["ngaythang"], strtotime(" +".(28 * 7-$ngaythai)." days", strtotime($date)))." - khi thai 28 tuần (siêu âm)<br>";
			 }
			  if($sotuanthai< 29)  {
				 echo "Ngày Khám: ".date($_SESSION["config_system"]["ngaythang"], strtotime(" +".(30 * 7-$ngaythai)." days", strtotime($date)))." - khi thai 30 tuần<br>";
			 }
             if($sotuanthai< 31)  {
				 echo "Ngày Khám: ".date($_SESSION["config_system"]["ngaythang"], strtotime(" +".(32 * 7-$ngaythai)." days", strtotime($date)))." - khi thai 32 tuần (siêu âm)<br>";
			 }
			  if($sotuanthai< 33)  {
				echo "Ngày Khám: ".date($_SESSION["config_system"]["ngaythang"], strtotime(" +".(34 * 7-$ngaythai)." days", strtotime($date)))." - khi thai 34 tuần<br>";
			 }
             if($sotuanthai< 35)  {
				echo "Ngày Khám: ".date($_SESSION["config_system"]["ngaythang"], strtotime(" +".(36 * 7-$ngaythai)." days", strtotime($date)))." - khi thai 36 tuần<br>";
			 }
			 if($sotuanthai< 37)  {
				echo "Ngày Khám: ".date($_SESSION["config_system"]["ngaythang"], strtotime(" +".(38 * 7-$ngaythai)." days", strtotime($date)))." - khi thai 38 tuần<br>";
			 }
             if($sotuanthai< 39)  {
				 echo "Ngày Khám: ".date($_SESSION["config_system"]["ngaythang"], strtotime(" +".(40 * 7-$ngaythai)." days", strtotime($date)))." - khi thai 40 tuần (siêu âm)<br>";
				 
			 }
			
			?>
            </td> 
             <td style="width:35%;padding-top:10px; text-align:center" valign="top">
                 <div id="images_container">
                 <img src="./modules/report/lamsang/img/khamthai/img1.png" /><br /><br /><br />
                 <img src="./modules/report/lamsang/img/khamthai/img2.png" />
               </div>
             	 <br /><br />
                 <i>
                 	In từ dữ liệu gốc<br />
                 	Ngày <?php echo date("d")." tháng " . date("m")." năm " .  date("Y"); ?>
                 </i>
                 <br />
                 <b>
                 	BÁC SỸ
               </b>
                 <br /> <img id="bs_chandoan" width="100"/><br />
                 <b style="color:red"><?=$thongtinluotkham[0]['BsChanDoan'];?></b>
            </td>             
         </tr>            
     </table>
     <p style="font-size:13px;">
     <?php
	 if($sotuanthai< 11) {
		 ?>
		*Thời điểm siêu âm lúc thai 12 tuần tuổi là rất quan trọng vì nếu đi trễ, Bác sỹ không đo được độ mờ da gáy, không tiên lượng được bệnh Down và các rối loạn nhiễm sắc thể khác.<br />
        <?php
	 }
	 if($sotuanthai< 21) {
	 ?>
     *Thời điểm siêu âm lúc thai 22 tuần tuổi là rất cần thiết để khảo sát các dị tật, bất thường của thai nhi.
    <?php 
	 }
	 ?>
	 </p>
	 <?php
	if($_GET["header"]=="left"){ ?>
    	</div>
    <?php	} ?>
</body>
</html>
 <script type="text/javascript">
	$(document).ready(function() {
		load_sign('<?=$thongtinluotkham[0]["chuky_bacsy"]?>',"bs_chandoan");
         /*ngayhenkham2= convert_to_datejs("current").addDays(ngayhenkham+1);
         ngayhenkham2=$.datepicker.formatDate('dd/mm/yy', new Date(ngayhenkham2));  */
       
		   print_preview();
	});
</script>