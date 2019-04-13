<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
	<style type="text/css"  media="print">
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
	#grv{
		text-align:center!important;
	}
	#soBHYT2,#soBHYT3,#soBHYT4{
		 width:15px;
		 text-align:left;
		}#soBHYT1,#soBHYT5{
		 width:35px;
		 text-align:left;
		}
	#pp_dtri,#loidan{
		display:inline-block;
		width:80%!important;
	}
	body{
		font:Arial, Helvetica, sans-serif!important;
		background:url(img/quang%202.png)!important;
	}
	#chucdanh{
		font-size:12px;
	}.input_style{
		border: 1px solid #000;
		border-top:  1px solid #000;
		
		}
		
.td{
width:100%;
background:url(images/dotted.png) repeat;
border:none;
line-height:18px;
background-attachment:local!important;
box-shadow:none!important;
	
}#hoten {text-transform:uppercase;}
#bang .td{
	padding-left:5px;
	margin-top:5px !important;
	background:url(images/dotted.png) repeat;
	line-height:18px;
	width:150px!important;
	
}
</style>
</head>
<div>
<body>
	<?php
		//echo '<pre>' . print_r($_SESSION, TRUE) . '</pre>';
        $data= new SQLServer;//tao lop ket noi SQL
		//$params = array('258707');
        $params = array($_GET["idluotkham"]);//tao param cho store 
        $store_name="{call GD2_Select_BenhanNoiTru_report(?)}";//tao bien khai bao store
        $get_thongtinbenhnhan=$data->query( $store_name,$params);//Goi store
        $excute= new SQLServerResult($get_thongtinbenhnhan);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
        $thongtinbenhnhan= $excute->get_as_array();//Tra ve mang toan bo data lay duoc  
		
		// print_r($_GET["idluotkham"]);
		
		
		
		
		if($thongtinbenhnhan[0]["TenNgheNghiep"]==''){
			
		}
		 if($thongtinbenhnhan[0]["NgayThangNamSinh"]!=""){
            	 $thongtinbenhnhan[0]["NgayThangNamSinh"]->format($_SESSION["config_system"]["ngaythang"]);
			}
		 
		if($thongtinbenhnhan[0]["NgayThangNamSinh"]!='')
			{
                $thongtinbenhnhan[0]["NgayThangNamSinh"]=$thongtinbenhnhan[0]["NgayThangNamSinh"]->format('d/m/Y');
            } 
        if($thongtinbenhnhan[0]["HanSD_DenNgay"]!='')
            {
                $thongtinbenhnhan[0]["HanSD_DenNgay"]=$thongtinbenhnhan[0]["HanSD_DenNgay"]->format('d/m/Y');
            }
            if($thongtinbenhnhan[0]["thangsinh"]<72&&$thongtinbenhnhan[0]["thangsinh"]!=0)
            {
                $thangtuoi=$thongtinbenhnhan[0]["thangsinh"].' tháng';
            }
            else{
                $thangtuoi=$thongtinbenhnhan[0]["Tuoi"];
            }
            
            
            if($thongtinbenhnhan[0]["Gioi"]=="Nam"){
                $Nam=1;
                
            }else{
                 $Nam=0;			
            }
             $rest = substr("abcdef", -1);    // returns "f"
            $rest = substr("abcdef", -2);    // returns "ef"
            $rest = substr("abcdef", -3, 1); // returns "d"
            //echo $thongtinbenhnhan[0]["NgayThangNamSinh"];
            $aa = $thongtinbenhnhan[0]["NgayThangNamSinh"];
            $ngay0= substr($aa,0,1);
            $ngay1= substr($aa,1,1);
            $ngay3= substr($aa,3,1);
            $ngay4= substr($aa,4,1);
            $ngay6= substr($aa,6,1);
            $ngay7= substr($aa,7,1);
            $ngay8= substr($aa,8,1);
            $ngay9= substr($aa,9,1);
            
            $bb=trim($thongtinbenhnhan[0]["SoThe"]);
            $tbh1=  substr($bb,0,3);
            $tbh2=  substr($bb,3,3);
            $tbh3=  substr($bb,6,3);
            $tbh4=  substr($bb,9,3);
            $tbh5=  substr($bb,12,7);
            //echo $tbh4;
			
            if($thongtinbenhnhan[0]["HanSD_TuNgay"]!=""){
            	$thongtinbenhnhan[0]["HanSD_TuNgay"]= $thongtinbenhnhan[0]["HanSD_TuNgay"]->format('d/m/Y');
			}
			
			
			
			/*if($thongtinbenhnhan[0]["HanSD_DenNgay"]!=""){
            	 $thongtinbenhnhan[0]["HanSD_DenNgay"]->format($_SESSION["config_system"]["ngaythang"]);
			}*/
			
            
            $thongtinbenhnhan[0]["LoaiDoiTuongKham"]=trim($thongtinbenhnhan[0]["LoaiDoiTuongKham"]);
            if($thongtinbenhnhan[0]["LoaiDoiTuongKham"]=='Viện phí'){
                $dtkham=1;			
            }else{
                $dtkham=0;
            }
            
            
            //thong tin quan ly nguoi benh
            $params1 = array($_GET["idluotkham"]);//tao param cho store 
            $store_name1="{call GD2_SelectAll_BenhAnNoiTru_report(?)}";//tao bien khai bao store
            $get_quanlynguoibenh=$data->query( $store_name1,$params1);//Goi store
            $excute1= new SQLServerResult($get_quanlynguoibenh);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
            $quanlynguoibenh= $excute1->get_as_array();//Tra ve mang toan bo data lay duoc
            //print_r($thongtinluotkham);
            if($quanlynguoibenh[0]["NgayGioVaoVien"]!='')
            {
                $giovaovien=$quanlynguoibenh[0]["NgayGioVaoVien"]->format("H:i");
             $ngayvaovien=$quanlynguoibenh[0]["NgayGioVaoVien"]->format($_SESSION["config_system"]["ngaythang"]);
			  $gvv = $giovaovien;
			  $nrv = $ngayvaovien;
				$gio= substr($gvv,0,2);
				$phut= substr($gvv,3,2);
				$ngay= substr($nrv,0,2);
				$thang= substr($nrv,3,2);
				$nam= substr($nrv,6,2);
            }else{
                $giovaovien='';
                $ngayvaovien='';
				$gio= "";
				$phut= "";
				$ngay= "";
				$thang= "";
				$nam= "";
            }
            
           
           if($quanlynguoibenh[0]["ID_VaoKhoa"]==313){
			   $tkhoa='BS.Bùi Quy Cương' ;
		   }else if($quanlynguoibenh[0]["ID_VaoKhoa"]==312){
			   $tkhoa='BS.Nguyễn Văn Vy Hậu';
		   }else if($quanlynguoibenh[0]["ID_VaoKhoa"]==314){
			   $tkhoa='';
		   }else if($quanlynguoibenh[0]["ID_VaoKhoa"]==315){
			   $tkhoa='';
		   }else if($quanlynguoibenh[0]["ID_VaoKhoa"]==316){
			   $tkhoa='BS. Phan Ngọc Quốc';
		   }else if($quanlynguoibenh[0]["ID_VaoKhoa"]==317){
			   $tkhoa='BS. Lưu Văn Huân';
		   }else if($quanlynguoibenh[0]["ID_VaoKhoa"]==318){
			   $tkhoa='BS. Trương Thị Chánh';
		   }
		   
		   
            $vaokhoa1=trim($quanlynguoibenh[0]["tenvaokhoa"]);
            $vaokhoa=explode(' ',$vaokhoa1);
            
           
    if($quanlynguoibenh[0]["NgayGioRaVien"]!='')
            {
                $gioravien=$quanlynguoibenh[0]["NgayGioRaVien"]->format("H:i");
             $ngayravien=$quanlynguoibenh[0]["NgayGioRaVien"]->format($_SESSION["config_system"]["ngaythang"]);
			 $grv = $gioravien;
			  $nrv2 = $ngayravien;
				$gio1= substr($grv,0,2);
				$phut1= substr($grv,3,2);
				$ngay1= substr($nrv2,0,2);
				$thang1= substr($nrv2,3,2);
				$nam1= substr($nrv2,6,2);
            }
    else{
        $gioravien='';
         $ngayravien='';
		 $gio1= "";
				$phut1= "";
				$ngay1= "";
				$thang1= "";
				$nam1= "";
    }
	
	$ngay_1=  substr($ngayravien,0,2);
	$ngay_2=  substr($ngayravien,3,2);
	$ngay_3=  substr($ngayravien,6,2);
	
    if($quanlynguoibenh[0]["TongKetBenhAn"]!=''){
		$tkbenhan=explode('|||',$quanlynguoibenh[0]["TongKetBenhAn"]);
		
		for($t=0;$t<=42;$t++){
			if($tkbenhan[$t]==''){
				$tkbenhan[$t]='';
			}
		}
		}else{
			for($t=0;$t<=42;$t++){
			
				$tkbenhan[$t]='';
			}
			
	}
       
        ?>
<div>
<table width="100%" border="0" style="font-size:13px!important">
  <tr>
    <td width="5%" rowspan="3" valign="top"><img width="40px" height="70px" src="./modules/report/lamsang/img/theodoichucnangsong/logo_den.png"  /></td>
    <td style="width:23%;"> <?php echo $_SESSION["com"]["TenCoQuanTrucThuoc"]?></td>
     <td align="center" style="width:35%"><label>Cộng Hòa Xã Hội Chủ Nghĩa Việt Nam</label>
      &nbsp;</td>
    <td style="width:20%">MS: <b> 01/BV-01</b></td>
  </tr>
  <tr>
    <td ><?php echo $_SESSION["com"]["TenBenhVien"]?></td>
    <td align="center">Độc lập-Tự do-Hạnh phúc</td>
    <td>Số lưu trữ:<b>
      <?= $quanlynguoibenh[0]["SoLuuTru"]?></b></td>
  </tr>
  <tr>
    <td >Khoa:&nbsp;
      <?php echo $vaokhoa[1]?></td>
    <td align="center" valign="top">-----------------------------------------------</td>
    <td>Mã Y tế: <b>501/153/14/ 
<?php
	if($thongtinbenhnhan[0]["SoVaoVien"] !=''){
			$str = $thongtinbenhnhan[0]["SoVaoVien"];
echo str_pad($str,6,"0",STR_PAD_LEFT); 			
		} else{
			echo 000000;
		} 
?> </b></td>
  </tr>
  <tr>
    
    <td align="center" valign="top"></td>
    
  </tr>
</table>
  <table id="bang" width="95%" border="0" style="margin-left:15px!important; margin-right:5px; font:Arial, Helvetica, sans-serif">
    <tr>
    <td colspan="2" style="text-align:center; "><label for="grv" style="font:Tahoma, Geneva, sans-serif; font-size:24px; text-align:center!important"><strong style="text-align:center;">GIẤY RA VIỆN</strong></label></td>
    
    </tr>
    <tr><td>&nbsp;</td><td></td></tr>
  <tr style="">
    <td style="width:70%!important; " >-Họ tên người bệnh: &nbsp;&nbsp;&nbsp;  
      <label id="hoten" > <b> <?=$thongtinbenhnhan[0]["tenbenhnhan"];?></b></label>
    </td>
    <td>Tuổi:&nbsp;&nbsp;&nbsp;<?=$thangtuoi;?>&nbsp;&nbsp; Giới tính:  <?php if($Nam==1){echo 'Nam';}?>  <?php if($Nam==0){echo 'Nữ';}?> 
    </td>
    </tr>
  <tr>
    <td >-Dân tộc:&nbsp;&nbsp;&nbsp; <?=$thongtinbenhnhan[0]["TenDanToc"]?>  </td>
    <td >Nghề nghiệp: &nbsp;&nbsp;<?=$thongtinbenhnhan[0]["TenNgheNghiep"]?> </td>
    </tr>
  <tr>
    <td colspan="2">-BHYT:&nbsp;&nbsp;&nbsp;giá trị từ:&nbsp;&nbsp;&nbsp;<?= $thongtinbenhnhan[0]["HanSD_TuNgay"]?>    đến   <?= $thongtinbenhnhan[0]["HanSD_DenNgay"]?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Số: <input class="input_style" type="text" name="soBHYT1" id="soBHYT1" value="<?=$tbh1;?>"/><input class="input_style" type="text" name="soBHYT2" id="soBHYT2" value="<?=$tbh2;?>"/><input class="input_style" type="text" name="soBHYT3" id="soBHYT3" value="<?=$tbh3;?>"/><input class="input_style" type="text" name="soBHYT4" id="soBHYT4" value="<?=$tbh4;?>"/><input class="input_style" type="text" name="soBHYT5" id="soBHYT5" value="<?=$tbh5;?>"/></td>
    </tr>
  <tr>
    <td colspan="2">-Địa chỉ:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?=$thongtinbenhnhan[0]["diachibn"] ?></td>
    </tr>
  <tr>
    <td colspan="2">-Vào viện lúc: &nbsp;<?=$gio?> giờ <?=$phut?> phút, ngày <?=$ngay?> tháng <?=$thang?> năm 20<?=$nam?></td>
    </tr>
  <tr>
    <td colspan="2">-Ra viện lúc:&nbsp;&nbsp;&nbsp;&nbsp;<?=$gio1?> giờ <?=$phut1?> phút, ngày <?=$ngay1?> tháng <?=$thang1?> năm 20<?=$nam1?></td>
    </tr>
  <tr>
    <td colspan="2">-Chẩn đoán:&nbsp;&nbsp;&nbsp; <b> <?= $quanlynguoibenh[0]["CD_RaVienBenhChinh"]?> </b></td>
    </tr>
  <tr>
    <td colspan="2">-Phương pháp điều trị: &nbsp;&nbsp;&nbsp;<?= $tkbenhan[2]?></td>
    </tr>
  <tr>
    <td colspan="2" style=" margin-right:5px!important">-Lời dặn của thầy thuốc:<?= $tkbenhan[20]?></td>
    </tr>
</table>
<table id="bang" width="100%" border="0" style="font:Arial, Helvetica, sans-serifj; font-size:13px;">
  <tr>
    <td align="center"><label id="ngthang"><em>Ngày  
      <?= $ngay_1?> tháng <?= $ngay_2?> năm 20<?= $ngay_3?> 
    </em></label></td>
    <td style="width:30%!important">&nbsp;</td>
    <td align="center"><label id="ngthang"><em>Ngày 
      <?= $ngay_1?> tháng <?= $ngay_2?> năm 20<?= $ngay_3?> 
    </em></label></td>
  </tr>
  <tr>
    <td align="center"><label id="chucdanh" style="width:35%"><strong>TRƯỞNG KHOA ĐIỀU TRỊ</strong></label></td>
    <td>&nbsp;</td>
    <td align="center"><label id="chucdanh" style="width:35%"><strong>GIÁM ĐỐC BỆNH VIỆN</strong></label></td>
  </tr>
  <tr >
    <td style=" min-height:150px!important">&nbsp;</td>
    <td>&nbsp;<br /><br /><br /><br /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="left"></td>
    <td>&nbsp;</td>
    <td  align="left"></td>
  </tr>
</table>

</div>
  <script type="application/javascript">
		$(document).ready(function() {
			
			print_preview();
		});
	</script>
</body>
</div>
</html>