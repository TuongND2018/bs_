<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<div style="height: 100%">
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
	<table border="1" width="100%" cellpadding="0" cellspacing="0" height="500px" style="font-family:Tahoma, Geneva, sans-serif; ">
    	<tr style="vertical-align:top;">
        	<td width="50%">
        	  <table width="98%" height="100%" border="0" align="center">
        	    <tr>
        	      <td align="center" valign="middle"><strong>CÁCH THỨC PHẪU THUẬT</strong></td>
      	      </tr>
        	    <tr style="vertical-align:top;">
        	      <td><table width="99%" border="0" style="font-size:14px">
        	        <tr>
        	          <td colspan="2" valign="top" style="height:190px"><?=$phieuphauthuat[0]["TrinhTuPT"] ?></td>
       	            </tr>
        	        <tr>
        	          <td colspan="2">&nbsp;-Nhóm máu:</td>
       	            </tr>
        	        <tr>
        	          <td colspan="2">&nbsp;-Yếu tố Rh:</td>
       	            </tr>
        	        <tr>
        	          <td colspan="2">&nbsp;</td>
       	            </tr>
        	        <tr>
        	          <td colspan="2" align="right" style="margin-right:8px!important">Ngày <?php echo($patient_info[0]["NgayGioRaVien"]->format("d")) ?>/<?=$patient_info[0]["NgayGioRaVien"]->format("m"); ?>/<?=$patient_info[0]["NgayGioRaVien"]->format("Y"); ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
       	            </tr>
        	        <tr>
        	          <td width="50%" align="center">TRƯỞNG KHOA</td>
        	          <td align="center">GIÁM ĐỐC</td>
      	          </tr>
        	        <tr>
        	          <td>&nbsp;</td>
        	          <td>&nbsp;</td>
      	          </tr>
        	        <tr>
        	          <td>&nbsp;</td>
        	          <td>&nbsp;</td>
      	          </tr>
        	        <tr>
        	          <td colspan="2" align="right" valign="bottom">&nbsp;</td>
       	            </tr>
      	        </table></td>
      	      </tr>
      	    </table></td>
            <td width="50%" style="font-size:14px"><table width="99%" height="100%" cellpadding="0" cellspacing="0" border="1">
              <tr>
                  <td colspan="4" align="center" valign="middle"><strong>KHÁM LẠI</strong></td>
                </tr>
                <tr align="center" valign="middle">
                  <td>Ngày</td>
                  <td>Nơi khám</td>
                  <td>Kết quả</td>
                  <td>BS Khám</td>
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
                  <td colspan="4" align="right">&nbsp;</td>
                </tr>
            </table></td>
         </tr>
         <tr>
        	<td colspan="2" align="center" valign="middle"><strong>GIỮ GIẤY CHỨNG NHẬN PHẪU THUẬT VÀ XUẤT TRÌNH KHI TÁI KHÁM</strong></td>
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