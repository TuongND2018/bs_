<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style type="text/css" >

tr.noBorder td {border: 0!important; }
 thead
     {
                border-bottom:2px solid #000;
                display: table-header-group!important;
               border-left:2px solid #000;
    }
  table { page-break-inside:auto  ;page-break-after:auto}
  tr    { page-break-inside:avoid; page-break-after:auto }

table {
	width:100%;
	cellpadding:0; cellspacing:0;
	font-size:13px;
	}
input[type=checkbox].css-checkbox {
							position:absolute; z-index:-1000; left:-1000px; overflow: hidden; clip: rect(0 0 0 0); height:1px; width:1px; margin:-1px; padding:0; border:0;
						}

						input[type=checkbox].css-checkbox + label.css-label {
							padding-left:25px;
							height:20px; 
							display:inline-block;
							line-height:20px;
							background-repeat:no-repeat;
							background-position: 0 0;
							font-size:20px;
							vertical-align:middle;
							cursor:pointer;

						}

						input[type=checkbox].css-checkbox:checked + label.css-label {
							background-position: 0 -20px;
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

		$store_name1="{call GD2_Thongtin_benhnhan_bhyt (?)}";
		$params1 = array($_GET['idthutrano']);

		$get_thongtinnv=$data->query( $store_name1,$params1);//Goi 
		$excute1= new SQLServerResult($get_thongtinnv);//Ket noi lop 
		$thongtinbhyt= $excute1->get_as_array();//Tra ve mang toan bo 

		$params2 = array($_GET['idthutrano']);
		$store_name2="{call GD2_BHYT_noitru_print_tam_ext(?)}";
		$get_thongtin2=$data->query( $store_name2,$params2);
		$excute2= new SQLServerResult($get_thongtin2);
		$bhyt= $excute2->get_as_array();
		

?>
<body>
	<table cellpadding="0" cellspacing="0" border="0" style="font-size:14px;" >
    <tr>
    	<td style=" width:70%; text-align:left;"><strong>Bộ Y tế/Sở Y tế/Y tế ngành: SỞ Y TẾ THÀNH PHỐ ĐÀ NẴNG</strong></td>
        <td style=" width:30%; text-align:center;"><strong>Mẫu số: 01/BV</strong></td>
    </tr>
     <tr>
    	<td style=" width:70%; text-align:left;"><strong>Cở sở khám,chữa bệnh: Bệnh Viện Đa Khoa Gia Đình</strong></td>
        <td style=" width:30%; text-align:center;"><strong>Số khám bệnh</strong></td>
    </tr>
      <tr>
    	<td style=" width:70%; text-align:left;"><strong><?php if($thongtinbhyt[0]['ID_PhanLoaiKham']==24){echo 'Khoa Hồi sức cấp cứu';}else{echo 'Khoa Khám Bệnh';} ?></strong></td>
        <td style=" width:30%; text-align:center;"><strong>Mã số người bệnh: <?= $thongtinbhyt[0]['MaBenhNhan'] ?> </strong></td>
    </tr>
    </table>
    <table cellpadding="0" cellspacing="0" border="0" style="width:100%;">
     <tr>
    	<td style="text-align:center;"><strong>BẢNG KÊ CHI PHÍ KHÁM BỆNH,CHỮA BỆNH NGOẠI TRÚ</strong></td>       
    </tr>
    </table>

<table><tr><td style="text-align:left;"><strong>I. Hành chính</strong></td></tr></table>
<table style="width:100%">
<tr><td style="text-align:left;">(1) Họ tên người bệnh:<te style="text-transform: uppercase;"> <?= $thongtinbhyt[0]['HoLotBenhNhan'].' '.$thongtinbhyt[0]['TenBenhNhan']?></te></td>
<td style="text-align:right;">Ngày sinh: <?=$thongtinbhyt[0]['NamSinh'] ?></td>
<td style="text-align:right;">Giới tính: <?= $thongtinbhyt[0]['gioi']?></td>
</tr>
</table>

<table style="width:100%">
<tr><td style="text-align:left;">(2) Địa chỉ: <?= $thongtinbhyt[0]['DiaChiTheBHYT']?></td></tr>
</table>
<table style="width:100%">
<td style="text-align:left;">(3) Có BHYT <input type="checkbox" name="ckkdt" id="ckkdt" checked class="css-checkbox"/><label class="css-label" for="ckkdt"></label></td><td style="text-align:left;">Mã thẻ BHYT: <?= $thongtinbhyt[0]['SoThe'].''.$thongtinbhyt[0]['Ma_KCB_BanDau']?></td><td style="text-align:right;">Giá trị từ: <?= $thongtinbhyt[0]['HanSD_TuNgay']->format('d/m/Y')?> đến <?=$thongtinbhyt[0]['HanSD_DenNgay']->format('d/m/Y')?></td></tr>
</table>
<table>
<tr><td style="text-align:left;">(4) Không có BHYT <input type="checkbox" name="gioi" class="css-checkbox" id="gioi"/><label class="css-label" for="gioi"></label></td></tr>
</table>

<table>
<tr><td style="text-align:left;">(5) Cơ sở đăng ký KCB BHYT ban đầu: <?=$thongtinbhyt[0]['Ten_KCB_BanDau']?></td></tr>
</table>

<table>
<tr><td style="text-align:left;">(6) Mã số của cơ sở đăng ký KCB BHYT ban đầu: <?=$thongtinbhyt[0]['Ma_KCB_BanDau']?></td></tr>
</table>

<table>
<tr><td style="text-align:left;">(7) Đến khám:  <?=$thongtinbhyt[0]['ThoiGianVaoKham']->format('H').' giờ '.$thongtinbhyt[0]['ThoiGianVaoKham']->format('i').' ngày '.$thongtinbhyt[0]['ThoiGianVaoKham']->format('d/m/Y')?></td></tr>
</table>

<table>
<tr><td style="text-align:left;">(8) Kết thúc đợt điều trị ngoại trú: <?php if($thongtinbhyt[0]['ThoiGianKetThucKham']!=''){
	echo $thongtinbhyt[0]['ThoiGianKetThucKham']->format('H').' giờ '.$thongtinbhyt[0]['ThoiGianKetThucKham']->format('i').' ngày '.$thongtinbhyt[0]['ThoiGianKetThucKham']->format('d/m/Y');}?></td><td style="text-align:right;">Tổng số ngày điều trị: 1</td></tr>
</table>

<table>
<tr><td style="text-align:left;">(9) Cấp cứu: <input type="checkbox" name="capcuu" id="capcuu" <?php
if($thongtinbhyt[0]['TrangThaiKham']==4){
 echo 'checked'	;
}
 ?> class="css-checkbox"/><label class="css-label" for="capcuu"></label></td><td style="text-align:left;"> Đúng tuyến: <input type="checkbox" name="dungtuyen" id="dungtuyen" <?php
if($thongtinbhyt[0]['TrangThaiKham']==1){
 echo 'checked'	;
}
 ?> class="css-checkbox"/><label class="css-label" for="dungtuyen"></label></td><td style="text-align:left;">Nơi chuyển đến: </td><td style="text-align:right;">(10) Trái tuyến:  <input type="checkbox" name="traituyen" id="traituyen" <?php
if($thongtinbhyt[0]['TrangThaiKham']==3){
 echo 'checked'	;
}
 ?> class="css-checkbox"/><label class="css-label" for="traituyen"></label></td></tr>
</table>
<table>
<tr><td style="text-align:left;">(11) Chẩn đoán:<te style="text-transform: uppercase;"> <?=$thongtinbhyt[0]['ChanDoan']?></te></td><td style="text-align:left;">(12) Mã bệnh (ICD-10): <?=$thongtinbhyt[0]['MaICD10']?></td></tr>
</table>
<table>
<tr><td style="text-align:left;"><b>II. Chi phí khám,chữa bệnh</b></td></tr>
</table>
<table cellpadding="0" cellspacing="0" style="font-size:15px;">
	   <thead >
             <tr style="border:solid 1px #000000 !important;border-top-color:solid 1px #000000">
                <td style="border:solid 1px #000000 !important;width:40%;" rowspan="2"  align="center" ><b>Nội dung</b></td>
                <td style="border:solid 1px #000000 !important;width:5%;"  rowspan="2"  align="center" ><b>Đơn vị tính</b></td>
                <td style="border:solid 1px #000000 !important;width:5%;"  rowspan="2"  align="center" ><b>Số lượng</b></td>
                <td style="border:solid 1px #000000 !important;width:10%;" rowspan="2"  align="center" ><b>Đơn giá</b><br />(đồng)</td>
                <td style="border:solid 1px #000000 !important;width:10%;" rowspan="2"  align="center" ><b>Thành tiền</b><br />(đồng)</td>
                <td style="border:solid 1px #000000 !important;width:30%;" colspan="3"  align="center" ><b>Nguồn thanh toán</b>(đồng)</td>
             </tr>
              <tr >
              	<td style="border:solid 1px #000000 !important;" align="center"><b >Quỹ BHYT</b><br />(đồng)</td>
                <td style="border:solid 1px #000000 !important;" align="center"><b >Khác</b><br />(đồng)</td>
                <td style="border:solid 1px #000000 !important;" align="center"><b >Người bệnh</b><br />(đồng)</td>
              </tr>
               <tr style="font-size:12px">
              	<td style="border:solid 1px #000000 !important;" align="center">(1)</td>
                <td style="border:solid 1px #000000 !important;" align="center">(2)</td>
                <td style="border:solid 1px #000000 !important;" align="center">(3)</td>
                <td style="border:solid 1px #000000 !important;" align="center">(4)</td>
                <td style="border:solid 1px #000000 !important;" align="center">(5)</td>
                <td style="border:solid 1px #000000 !important;" align="center">(6)</td>
                <td style="border:solid 1px #000000 !important;" align="center">(7)</td>
                <td style="border:solid 1px #000000 !important;" align="center">(8) = (5)-(6)-(7)</td>                
              </tr>
              </thead>
              <tbody>
              <?php
			  	for($i=0;$i<count($bhyt)-1;$i++){
					
					if($bhyt[$i]['rn']==null){
						$bhyt[$i]['rn']=$bhyt[$i-1]['rn'];
					}
					echo '<tr style=" border:1px solid #000;">';
					if($bhyt[$i]['id_loai']==null){
						
						echo '<td  style="border:solid 1px #000000 !important;" colspan=8 ><strong>'.$bhyt[$i]['rn'].'. '.$bhyt[$i]['ten'].'</strong></td>';
					
					}else{
						if($bhyt[$i]['bhyt']==-1){						
						   echo '<td  colspan=4 bgcolor="#CCCCCC" style="border:solid 1px #000000 !important;border:solid 1px #000000 !important;text-align:right;"><strong>'.$bhyt[$i]['ten'].'</strong></td>';
						   echo '<td style="border:solid 1px #000000 !important;text-align:right;">'.number_format($bhyt[$i]['thanhtien'],"0",",",".").'</td>';
						   echo '<td style="border:solid 1px #000000 !important;text-align:right;">'.number_format($bhyt[$i]['ThanhTienBaoHiem'],"0",",",".").'</td>';
						   echo '<td style="border:solid 1px #000000 !important;text-align:right;">0</td>';
						   echo '<td style="border:solid 1px #000000 !important;text-align:right;">'.number_format($bhyt[$i]['nguoibenh'],"0",",",".").'</td>'; 
						}else{						
						   echo '<td style="border:solid 1px #000000 !important;text-align:left;">'.$bhyt[$i]['ten'].'</td>';
						   echo '<td style="border:solid 1px #000000 !important;text-align:left;">'.$bhyt[$i]['TenDonViTinh'].'</td>';
						   echo '<td style="border:solid 1px #000000 !important;text-align:center;">'.number_format($bhyt[$i]['soluong'],"0",",",".").'</td>';
						   echo '<td style="border:solid 1px #000000 !important;text-align:right;">'.number_format($bhyt[$i]['dongia'],"0",",",".").'</td>';
						   echo '<td style="border:solid 1px #000000 !important;text-align:right;">'.number_format($bhyt[$i]['thanhtien'],"0",",",".").'</td>';
						   echo '<td style="border:solid 1px #000000 !important;text-align:right;">'.number_format($bhyt[$i]['ThanhTienBaoHiem'],"0",",",".").'</td>';
						   echo '<td style="border:solid 1px #000000 !important;text-align:right;">0</td>';
						   echo '<td style="border:solid 1px #000000 !important;text-align:right;">'.number_format($bhyt[$i]['nguoibenh'],"0",",",".").'</td>';   
						}
					}
					
				        
				  echo '</tr>';
				}
				
				   echo '<tr style=" border:1px solid #000;">';
				   		   echo '<td colspan=4 bgcolor="#CCCCCC" style="border:solid 1px #000000 !important;text-align:center;"><strong>Tổng cộng</strong></td>';
						   echo '<td style="border:solid 1px #000000 !important;text-align:right;">'.number_format($bhyt[count($bhyt)-1]['thanhtien'],"0",",",".").'</td>';
						   echo '<td style="border:solid 1px #000000 !important;text-align:right;">'.number_format($bhyt[count($bhyt)-1]['ThanhTienBaoHiem'],"0",",",".").'</td>';
						   echo '<td style="border:solid 1px #000000 !important;text-align:right;">0</td>';
						   echo '<td style="border:solid 1px #000000 !important;text-align:right;">'.number_format($bhyt[count($bhyt)-1]['nguoibenh'],"0",",",".").'</td>'; 
				  echo '</tr>';
			  ?>
              </tbody>
        

<tr style="border:none"><td colspan="8" style="text-align:left;border:none"><strong>Số tiền ghi bằng chữ: <span id="sotien"></span></strong><br />
Tổng chi phí đợt điều trị: <?=number_format($bhyt[count($bhyt)-1]['thanhtien'],"0",",",".")?><br />
Số tiền Quỹ BHYT thanh toán: <?=number_format($bhyt[count($bhyt)-1]['ThanhTienBaoHiem'],"0",",",".")?><br />
Số tiền người bệnh trả: <?=number_format($bhyt[count($bhyt)-1]['nguoibenh'],"0",",",".")?><br />
Nguồn khác:0</td></tr>


<tr style="border:none" style="font-size:12px;">	
	<td colspan="4" style="text-align:center;border:none"><br />
NGƯỜI LẬP BẢNG KÊ<br />
    (ký,ghi rõ họ tên)<br /><br /><br /><br />
<strong><?=$thongtinbhyt[0]['nv']?></strong><br />

     XÁC NHẬN CỦA NGƯỜI BỆNH<br />
    (ký,ghi rõ họ tên)<br /><br /><br /><br /></td>
    <td colspan="4" style="text-align:center;border:none"><br />
KẾ TOÁN VIỆN PHÍ<br />
    (ký,ghi rõ họ tên)<br /><br /><br /><br />
<strong><?=$thongtinbhyt[0]['nv']?></strong><br />
Ngày.....tháng.....năm.....<br />
GIÁM ĐỊNH BHYT<br /><br /><br /><br />
</td>
   


</table>
</body>
<script type="text/javascript">
	$(document).ready(function(e) { //180

	
	$('#sotien').html(toWords((<?=$bhyt[count($bhyt)-1]['nguoibenh']?>).toString())+"đồng");
	 print_preview();
	});
</script>
</html>
