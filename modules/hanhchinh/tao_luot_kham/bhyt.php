<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style type="text/css" media="print">

input[type=checkbox].css-checkbox {
							display:none;
}

input[type=checkbox].css-checkbox + label.css-label {
							padding-left:20px;
							height:15px; 
							display:inline-block;
							line-height:15px;
							background-repeat:no-repeat;
							background-position: 0 0;
							font-size:15px;
							vertical-align:middle;
							cursor:pointer;

}

input[type=checkbox].css-checkbox:checked + label.css-label {
							background-position: 0 -15px;
}
label.css-label {
				background-image:url(images/csscheckbox_cbedf8fc34fc83a015128029efb1c1d4.png);
				-webkit-touch-callout: none;
				-webkit-user-select: none;
				-khtml-user-select: none;
				-moz-user-select: none;
				-ms-user-select: none;
				user-select: none;
			
}

</style>
</head>
<?php




	$data= new SQLServer;//tao lop ket noi SQL
/*
		$store_name1="{call GD2_LayThongTinHoaDon (?,?,?)}";
		$params1 = array($ID_ThuTraNo, $phanloaiHD, $IDHoaDonThueDiary);

		$get_thongtinnv=$data->query( $store_name1,$params1);//Goi 
		$excute1= new SQLServerResult($get_thongtinnv);//Ket noi lop 
		$thongtinnv= $excute1->get_as_array();//Tra ve mang toan bo 

		$params2 = array($_GET['id_ttno']);
		$store_name2="{call Gd2_BangKeHoaDonThuocNoiTru(?)}";
		$get_thongtin2=$data->query( $store_name2,$params2);
		$excute2= new SQLServerResult($get_thongtin2);
		$thuoc= $excute2->get_as_array();*/

?>
<body>
	<table cellpadding="0" cellspacing="0" border="0" >
    <tr>
    	<td style=" width:70%; text-align:left;"><strong>Bộ Y tế/Sở Y tế/Y tế ngành SỞ Y TẾ THÀNH PHỐ ĐÀ NẴNG</strong></td>
        <td style=" width:30%; text-align:center;"><strong>Mẫu số01/BV</strong></td>
    </tr>
     <tr>
    	<td style=" width:70%; text-align:left;"><strong>Cở sở khám,chữa bệnh Bệnh Viện Đa Khoa Gia Đình</strong></td>
        <td style=" width:30%; text-align:center;"><strong>Số khám bệnh</strong></td>
    </tr>
      <tr>
    	<td style=" width:70%; text-align:left;""><strong>Khoa Khám Bệnh</strong></td>
        <td style=" width:30%; text-align:center;"><strong>Mã số người bệnh </strong></td>
    </tr>
    </table>
    <table cellpadding="0" cellspacing="0" border="0" style="width:100%;">
     <tr>
    	<td style="text-align:center;"><strong>BẢNG KÊ CHI PHÍ KHÁM BỆNH,CHỮA BỆNH NGOẠI TRÚ</strong></td>       
    </tr>
    </table>

<table><tr><td style="text-align:right;"><strong>I. Hành chính</strong></td></tr></table>
<table>
<tr><td style="text-align:right;">(1) Họ tên người bệnh</td>
<td style="text-align:right;">Ngày sinh</td>
<td style="text-align:right;">Giới tính</td>
</tr>
</table>

<table>
<tr><td style="text-align:right;">(2) Địa chỉ</td></tr>
</table>

<table>
<tr><td style="text-align:right;">(3) Có BHYT <input type="checkbox" name="ckkdt" id="ckkdt" checked class="css-checkbox"/><label class="css-label" for="ckkdt"></label></td><td style="text-align:right;">Mã thẻ BHYT</td><td style="text-align:right;">Giá trị từ</td></tr>
</table>


</body>
<script type="text/javascript">
	$(document).ready(function(e) { //180

	

	 print_preview();
	});
</script>
</html>
