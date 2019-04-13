<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Report</title>
<style >
body{
	overflow: auto;
	
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
<div>
<body>
<?php
         $data= new SQLServer;//tao lop ket noi SQL
         $params = array($_GET["idluotkham"]);//tao param cho store 
        $store_name="{call GD2_Select_BenhanNoiTru2(?)}";   //214079 null  3907
        $get_danh_muc_phong_ban=$data->query( $store_name,$params);//Goi store
        $excute= new SQLServerResult($get_danh_muc_phong_ban);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
        $patient_info= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 
        //print_r($_GET["idluotkham"]);
        $params2 = array($_GET["phieuso"]);//tao param cho store 
        $store_name2="{call GD2_PhieuPhauThuat_ThuThuat_SelectAll(?)}";   //214079 null  3907
        $get_danh_muc_phong_ban2=$data->query( $store_name2,$params2);//Goi store
        $excute2= new SQLServerResult($get_danh_muc_phong_ban2);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
        $phieuphauthuat= $excute2->get_as_array();//Tra ve mang toan bo data lay duoc 
       // print_r($phieuphauthuat[0]["NgayCatChi"]->format($_SESSION["config_system"]["ngaythang"]));
        //print_r($phieuphauthuat[0]["NgayCatChi"]->format($_SESSION["config_system"]["ngaythang"]));

        $params3 = array($_GET["idbenhannoitru"]);//tao param cho store 
        $store_name3="{call GD2_GetTenKhoaByID_BenhAnNoiTru(?)}";   //214079 null  3907
        $get_danh_muc_phong_ban3=$data->query( $store_name3,$params3);//Goi store
        $excute3= new SQLServerResult($get_danh_muc_phong_ban3);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
        $khoa= $excute3->get_as_array();//Tra ve mang toan bo data lay duoc 

		//echo ($patient_info[0]["NgayGioVaoVien"]->format("d"));
        if($phieuphauthuat[0]["NgayRut"]==""){
            $phieuphauthuat[0]["NgayRut"]="";
        }
        else{
            $phieuphauthuat[0]["NgayRut"]=$phieuphauthuat[0]["NgayRut"]->format($_SESSION["config_system"]["ngaythang"]);
        }
        if($phieuphauthuat[0]["NgayCatChi"]==""){
            $phieuphauthuat[0]["NgayCatChi"]="";
        }
        else{
            $phieuphauthuat[0]["NgayCatChi"]=$phieuphauthuat[0]["NgayCatChi"]->format($_SESSION["config_system"]["ngaythang"]);
        }
		   
    ?>
	
<table width="100%" border="0" cellpadding="0" cellspacing="0" height="90!important">
  <tr style="vertical-align:top; "  height="100%!important" >
    <td style="width:50%; "  height="100%!important" ><table width="95%" height="500"  border="1" cellpadding="0" cellspacing="0" align="center" style="font-family:Tahoma, Geneva, sans-serif; font-size:13px; text-align:right; ">
      <tr>
        <td colspan="4" align="center" valign="middle" height="24px"><strong>NHỮNG LẦN VÀO VIỆN SAU</strong></td>
        </tr>
      <tr >
        <td height="24px" align="center" valign="middle">Vào ngày</td>
        <td align="center" valign="middle">Ra ngày</td>
        <td align="center" valign="middle">Bệnh viện</td>
        <td align="center" valign="middle">Ghi chú</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td align="right" valign="bottom">&nbsp;</td>
      </tr>
    </table></td>
    <td>
	  <table border="1" cellpadding="0" cellspacing="0" height="500" width="95%" style="float:right">
        <tr style="vertical-align:top; "><td align="right">
        	 <table width="95%" border="0" align="center">
    	<div style="border:#006">
      <tr style="font-size:12px">
        <td colspan="2" align="center" valign="middle"><p>CỘNG HÒA XÃ HỘI CHỦ NGHĨA VIỆT NAM
          <br />Độc lập - Tự do - Hạnh phúc</p><hr /></td>
        </tr>
        </div>
        
      <tr  style="font-size:12px;vertical-align:top">
        <td width="55" align="right"><img width="40px" height="70px" src="./modules/report/lamsang/img/theodoichucnangsong/logo_den.png"  /></td>
        <td align="center">SỞ Y TẾ THÀNH PHỐ ĐÀ NẴNG <br />
          <strong>BỆNH VIỆN ĐA KHOA GIA ĐÌNH</strong><BR />
        73 Nguyễn Hữu Thọ - Tp. Đà Nẵng <br />
        ĐT: 0511.3632111 *Fax: 0511.3632333</td>
      </tr>
      <tr>
        <td colspan="2" align="center" valign="middle" style="font-size:20px"><strong>GIẤY CHỨNG NHẬN PHẪU THUẬT</strong></td>
        </tr>
      <tr>
        <td colspan="2"><br />
      
        Chứng nhận 
		<?php 
		if($patient_info[0]["Gioi"]=='1'){
			echo ('bà');
		}  if($patient_info[0]["Gioi"]=='0'){
			 echo ('ông');}
		?>:&nbsp;<span  class="dotted"style="text-transform:uppercase"><b><?=$patient_info[0]["tenbenhnhan"] ?></b></span>  <br />
        				- Địa chỉ:&nbsp;<span ><?=$patient_info[0]["DiaChi"] ?></span>  <br /> 
                        - Vào viện ngày:&nbsp;  Ngày <?php echo($patient_info[0]["NgayGioVaoVien"]->format("d")) ?>/<?=$patient_info[0]["NgayGioVaoVien"]->format("m"); ?>/<?=$patient_info[0]["NgayGioVaoVien"]->format("Y"); ?><br />  
                        - Ra viện ngày:&nbsp;&nbsp;&nbsp; Ngày <?php echo($patient_info[0]["NgayGioRaVien"]->format("d")) ?>/<?=$patient_info[0]["NgayGioRaVien"]->format("m"); ?>/<?=$patient_info[0]["NgayGioRaVien"]->format("Y"); ?> <br />   
                        - Đã phẫu thuật (vị trí, phương thức...):&nbsp;  </td>
      </tr>
      
  
  <tr>
    <td align="right" valign="top" style="width:35%">+Phương pháp:</td>
    <td style="width:70%">&nbsp;<?=$phieuphauthuat[0]["PhuongPhapPT"] ?> </td>
  </tr>
  <tr>
    <td align="right">+Loại:</td>
    <td>&nbsp;<?=$phieuphauthuat[0]["LoaiPT"] ?></td>
  </tr>
  <tr>
    <td align="right">+Bác sĩ phẫu thuật:</td>
    <td>&nbsp;<?=$phieuphauthuat[0]["tennv"] ?></td>
  </tr>
  
</table>
        </td></tr>
        </table> 
   	
   </td>
  </tr>

</table>
<script type="application/javascript">
		$(document).ready(function() {
			
			print_preview();
		});
	</script>
</body>
</div>
</html>