<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Report</title>
<style type="text/css" media="print">
html,body{
	overflow: auto;
	font-family:Arial, Helvetica, sans-serif!important;
	font-size:13px;
}

.hr {
		display: block;
		margin-before: 0.5em;
		margin-after: 0.5em;
		margin-start: auto;
		margin-end: auto;
		border-style: inset;
		border-width: 1px; 
	}
#bang{
		margin-top: 5px;
		border-top:1px solid #000;
		border-right:1px solid #000;		
	}
.td{
	height:30px;
	border-left:1px solid #000;
	border-bottom:1px solid #000;
	padding:2px 2px;		 
}

.tabs
{
	border-bottom:1px dotted #000;
	border-left:none;	
	border-right:none;	
	border-top:none;	
	height:10px;
}

	
</style>
</head>
 
<body style="width:95%;">
	<?php
			
		$data= new SQLServer;//tao lop ket noi SQL
		$params = array($_GET["id_luotkham"]);//tao param cho store 
		$store_name="{call GD2_Select_BenhanNoiTru2(?)}";	//214079 null  3907
		$get_danh_muc_phong_ban=$data->query( $store_name,$params);//Goi store
		$excute= new SQLServerResult($get_danh_muc_phong_ban);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
		$patient_info= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 
		
    ?>
    
    <table width="100%" style="font:Arial, Helvetica, sans-serif; margin-left:35px">
    	<tr>
        	<td width="35%" style=" margin-left:30px">
            <span style="letter-spacing: 0.5px;font-weight:bold;color:#00b3a0">FAMILY</span> <img src="images/logo_mau.png" /><br />
            	<div style="text-transform:uppercase;font-weight:bold;font-size:12px"><?=$_SESSION["com"]["TenBenhVien"] ?></div>
            
            </td>
            <td width="40%" align="center">
            	<div>CỘNG HÒA XÃ HỘI CHỦ NGHĨA VIỆT NAM</div>
        		<div>Độc lập - Tự do - Hạnh phúc</div>
      		</td>
        	<td align="center" width="32%">Số vào viện: <?=$patient_info[0]["SoVaoVien"] ?></td>
        </tr>
    </table>
    <div style="width:100%;text-align:center;font-size:25px;font-weight:bold;margin-top:5px">
      <p>GIẤY CAM ĐOAN CHẤP NHẬN </p>
      PHẪU THUẬT, THỦ THUẬT VÀ GÂY MÊ HỒI SỨC
    </div>
    <table width="100%" style="margin-top:5px; margin-left:35px">
    <tr>
    	<td width="58%" >
        	Tôi tên là: <input type="text" class="tabs" style="width:650px"/>
        </td>       
    </tr>
    <tr style="margin-top:5px; text-align:left">
     <td colspan="2" >
        	Tuổi:<input type="text" class="tabs" style="width:330px"/>
       	 Giới tính:<input type="text" class="tabs" style="width:100px"/>
       </td>
      </tr>
     <tr>
    	<td colspan="3">Dân tộc:<input type="text" class="tabs" style="width:650px"/>
        </td>
      
        
    </tr>
    <tr>
      <td colspan="3">Nghề nghiệp:<input type="text" class="tabs" style="width:650px"/>
        </td>
    </tr>
     <tr>
      <td colspan="3">Nơi làm việc:<input type="text" class="tabs" style="width:650px"/>
        </td>
    </tr>
     <tr>
      <td colspan="3">Địa chỉ:<input type="text" class="tabs" style="width:650px"/>
        </td>
    </tr>
     <tr>
      <td colspan="3">1. Là người bệnh (họ và tên): <input type="text" class="tabs" style="width:600px"/>
      </td>
    </tr>
     </tr>
     <tr>
      <td colspan="3">2. Là đại diện gia đình của bệnh nhân: <span  style="text-transform:uppercase"><b><?=$patient_info[0]["tenbenhnhan"] ?></b></span>
 
      </td>
    </tr>
    <tr>
   	  <td colspan="3">        
       	<p>- Sau khi nghe bác sỹ cho biết tình trạng bệnh của bệnh nhân (<em>Ghi rõ họ và tên bệnh nhân</em>)</p>
        <input type="text" class="tabs" style="width:800px; height:18px"/>
       	<p>Và những nguy hiểm của bệnh, nếu không thực hiện phẩu thuật, thủ thuật, gây mê hồi sức. Đồng thời các bác sỹ <br />
          cũng đã cho biết những rủi ro có thể xảy ra do bệnh tật trong và sau thực hiện phẩu thuật, thủ thuật, gây mê hồi sức.
        </p>
       	<p>*<strong> Nếu đồng ý:</strong></p>
       	<p>Tôi đồng ý xin phẫu thuật, thủ thuật, gây mê hồi sức và chấp thuận những rủi ro có thể xảy ra trong và sau khi thực <br />
        hiện phẩu thuật, thủ thuật gây mê hồi sức. Tôi tự nguyện viết giấy cam đoan này.</p>         
        <input type="text" class="tabs" style="width:800px; height:18px"/>
        <input type="text" class="tabs" style="width:800px; height:18px"/>
        <input type="text" class="tabs" style="width:800px; height:18px"/>
       	<p><strong>*Nếu không đồng ý:</strong></p>
       	<p>Tôi không đồng ý phẫu thuật, thủ thuật, gây mê hồi sức và cam đoan sẽ hoàn toàn chịu trách nhiệm về những diễn  <br />
         biến bệnh tật tiếp theo của bệnh nhân. Tôi tự nguyện viết giấy cam đoan này.</p>         
         <input type="text" class="tabs" style="width:800px; height:18px" />
         <input type="text" class="tabs" style="width:800px; height:18px"/>
         <input type="text" class="tabs" style="width:800px; height:18px"/>
       	<p style="margin-left:420px"> Ngày <?=$patient_info[0]["Ngay"]->format("d") ?> Tháng <?=$patient_info[0]["Ngay"]->format("m") ?> Năm <?=$patient_info[0]["Ngay"]->format("20y") ?> </p>
       	<p style="margin-left:350px "><strong>Bệnh nhân hoặc đại diện gia đình của bệnh nhân</strong></p>
       	<p style="margin-left:440px">   (<em>Ký, ghi rõ họ tên</em>)</p>
       </td>
       
    </tr>
    </table>
  <script type="application/javascript">
		$(document).ready(function() {
			
			 print_preview();
		});
	</script>
</body>

</html>
 