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
		$params = array($_GET["id_luotkham"],$_GET["ID_PhieuDeNghiTamUng"]);//tao param cho store 
		//$params = 258882;
		$store_name="{call GD2_Select_tam_ung_report(?,?)}";	//214079 null  3907
		$get_danh_muc_phong_ban=$data->query( $store_name,$params);//Goi store
		$excute= new SQLServerResult($get_danh_muc_phong_ban);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
		$patient_info= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 
		
	//print_r($excute);
		
    ?>
    
    <table width="100%" style="font:Arial, Helvetica, sans-serif; margin-left:50px">
    	<tr>
        	<td width="35%" style=" margin-left:30px">
            <span style="letter-spacing: 0.5px;font-weight:bold;color:#00b3a0">FAMILY</span> <img src="images/logo_mau.png" /><br />
            	<div style="text-transform:uppercase;font-weight:bold;font-size:12px"><?=$_SESSION["com"]["TenBenhVien"] ?></div>
            
            </td>
            <td align="center"><p>73 Nguyễn Hữu Thọ, Tp Đà Nẵng</p>
            <p>SĐT: 05113 632 111 - Fax: 05113 631 333</p></td>
       	</tr>
    </table>
    <div style="width:100%;text-align:center;font-size:25px;font-weight:bold;margin-top:5px">
      <p>PHIẾU ĐỀ NGHỊ TẠM ỨNG VIỆN PHÍ</p>
    </div>
    <table width="100%" height="143" style="margin-top:5px; margin-left:50px">
    
      <tr>
        <td width="60%" height="27" > Tôi tên là: <span  style="text-transform:uppercase"><b>
          <?=$patient_info[0]["tenbenhnhan"] ?>
        </b></span></td>
        <td > Tuổi: <span  style="text-transform:uppercase"><b>
          <?=$patient_info[0]["Tuoi"] ?>
        </b></span></td>
      </tr>
      <tr>
        <td height="21" colspan="3">Buồng bệnh: <span  style="text-transform:uppercase"><b>
          <?=$patient_info[0]["TenBuong"] ?>
        </b></span></td>
      </tr>
      <tr>
        <td height="26" colspan="3">Giường bệnh: <span  style="text-transform:uppercase"><b>
          <?=$patient_info[0]["TenGiuong"] ?>
        </b></span></td>
      </tr>
      <tr>
        <td height="21" colspan="3">Lý do tạm ứng: <span  style="text-transform:uppercase"><b>
          <?=$patient_info[0]["DienGiai"] ?>
        </b></span></td>
      </tr>
      <tr>
      
        <td colspan="3">Số tiền đề nghị tạm ứng: <b><?php echo number_format($patient_info[0]["SoTienTamUng"])?></b> </br><br /> 
        
       ( <span class="thanhtien" style="text-transform:uppercase;font-weight: bold;"></span>)
      
      
      </td>
      </tr>
      <tr>
        <td colspan="3">
        <p style="margin-left:420px; font-style:italic;"> Ngày <?=$patient_info[0]["Ngay"]->format("d") ?> Tháng <?=$patient_info[0]["Ngay"]->format("m") ?> Năm <?=$patient_info[0]["Ngay"]->format("20y") ?></p>
        </td>
      </tr>
      <tr>
        <td >
    	  Bác sỹ chỉ định<br /><br /> <br /> <br /> <br /> 
          <span  style="text-transform:uppercase"><b>
          <?=$patient_info[0]["BacSy"] ?>
        </b></span></td>
         </td>
          
        <td> Người tạo <br /> <br /> <br /> <br /> <br />
                <span  style="text-transform:uppercase"><b>
          <?=$patient_info[0]["NguoiTao"] ?>
        </td>
      </tr>
  
    </table>
  <script type="application/javascript">
		$(document).ready(function() {
			$('.thanhtien').html(toWords((<?=$patient_info[0]["SoTienTamUng"]?>).toString())+"đồng");
			 print_preview();
		});
	</script>
   
</body>

</html>
 