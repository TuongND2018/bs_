<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Report</title>
<style >
body{
	overflow:auto;
	margin:0 !important;
	font-family:Arial, Helvetica, sans-serif!important;
}.frame_u78787878975f{
	width:300px!important;
	}

</style>
</head>
 
<body>

</div>
	<?php
        $data= new SQLServer;//tao lop ket noi SQL
        $params = array($_GET["idthutrano"]);//tao param cho store 
        $store_name="{call Gd2_thu_trano_select_byidthutrano(?)}";//tao bien khai bao store
        $get_thutrano=$data->query( $store_name,$params);//Goi store
        $excute= new SQLServerResult($get_thutrano);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
        $thutrano= $excute->get_as_array();//Tra ve mang toan bo data lay duoc  
		//$thutrano[0]['NgayGio']->format($_SESSION["config_system"]["ngaythang"." H:i"]);
		

    ?>

    
    
    <?php 
	   $giohentrakq='';
	    $tenbn='';
	   $diachi='';
	 
	 if($thutrano[0]["NguoiGiaoDich"]==''){
		 $tenbn=$thutrano[0]['HoLotBenhNhan'].' '.$thutrano[0]['TenBenhNhan'];
	 }else{
		 $tenbn=$thutrano[0]["NguoiGiaoDich"];
	 }
	 
	 if($thutrano[0]["ExtField1"]==''){
		 $diachi=$thutrano[0]['DiaChi'];
	 }else{
		 $diachi=$thutrano[0]["ExtField1"];
	 }
	 
	if($thutrano[0]['NgayGioHenTraKQ']!=''){
		//(strtotime($thutrano[0]['NgayGioHenTraKQ']->format("H:i ".$_SESSION["config_system"]["ngaythang"]))<strtotime($thutrano[0]['NgayGio']->format("H:i ".$_SESSION["config_system"]["ngaythang"]))){
			$giohentrakq='<tr><td colspan="2" style="border-top:solid 1px #000000 !important;padding-top:10px"><strong>Giờ hẹn trả KQ:  '.$thutrano[0]['NgayGioHenTraKQ']->format("H:i ".$_SESSION["config_system"]["ngaythang"]).'</strong></td></tr>';
		//}
	 }
	$lien1=' <table cellpadding="0" cellspacing="0" border="0" style="width:100%;font-family:Arial, Helvetica, sans-serif;">
         <tr style="font-size:10px;">
             <td style=" width:35%">
                <span style="letter-spacing: 0.5px;font-weight:bold">FAMILY</span> <img src="images/logo_print.png" /> 
             </td>
             <td style=" width:65%; text-align:right">
                '. $_SESSION["com"]["DiaChi"].'
                <br />
                SĐT: '.$_SESSION["com"]["SoDT"].'
             </td>
         </tr>
         <td colspan="2">
         	<span style=" font-size:10px; letter-spacing: 0.5px;text-transform:uppercase">'.$_SESSION["com"]["TenBenhVien"].'</span>
         </td>           
     </table>    
	<h2 style="text-align:center; font-family:Arial, Helvetica, sans-serif;">PHIẾU TẠM THU</h2>
    <table  cellpadding="0" cellspacing="0" border="0" style="width:100%;font-family:Arial, Helvetica, sans-serif; font-size:12px;">
      
        <tr>
            <td style=" width:70%; font-weight:bold;  padding-top: 1px;font-size:15px;  padding-bottom: 1px;">'.$tenbn.' </td>
        	<td style=" width:30%; text-align:right;font-weight:bold;font-size:15px;  padding-top: 1px;  padding-bottom: 1px;">'.$thutrano[0]["MaBenhNhan"].' </td>
        </tr>
		</table>
	    <table  cellpadding="0" cellspacing="0" border="0" style="width:100%;font-family:Arial, Helvetica, sans-serif; font-size:12px;">
        <tr>
            <td style=" width:50%;  padding-top: 1px;font-weight:bold;font-size:12px;  padding-bottom: 1px;" colspan="2">'.$diachi.'</td>        	
        </tr>
        <tr>
            <td style=" width:50%;  padding-top: 1px;font-weight:bold;font-size:15px;  padding-bottom: 1px;">'.$thutrano[0]["MaPhieu"].'</td> 
            <td style=" width:50%; text-align:right;font-weight:bold;font-size:15px;  padding-top: 1px;  padding-bottom: 1px;">'.$thutrano[0]['NgayGio']->format($_SESSION["config_system"]["ngaythang"]." H:i").'</td>         	
        </tr>
    </table>
    <br />

    <table cellpadding="0" cellspacing="0" style="width:100%;font-family:Arial, Helvetica, sans-serif; font-size:12px;">
		'.$giohentrakq.'
        <tr>
        	<td  style="padding-top:10px;width:30%;" >
            Diễn giải:
            </td >
            <td  style="padding-top:10px" >
            '.$thutrano[0]['GhiChu'].'
            </td>
           	
        </tr>   
        
         <tr >
        <td style="width:30%;padding-top:10px;">
            Số tiền:
            </td>  
            <td style="width:30%;padding-top:10px;font-weight:bold;font-size:15px;">
            '.number_format($thutrano[0]['SoTien'],"0",",",".").'<sup>đ </sup>
            </td>
             </tr>  
    </table>
    <br />
    <table  cellpadding="0" cellspacing="0" style="width:100%;font-family:Arial, Helvetica, sans-serif; font-size:12px;page-break-after:always;">
        <tr>
            <td id="tongtien" style=" width:100%; text-align:right;" colspan="2">
           
            </td>      
               
        </tr>
         <tr>
            <td style=" width:50%; text-align:center;">
           <strong>BỆNH NHÂN</strong>
            </td>   
            <td style=" width:50%; text-align:center;">
           <strong>THU NGÂN</strong>
            </td>   
               
        </tr>
       <tr  >
            <td  style=" width:50%; text-align:center; padding-top:5px; padding-bottom:10px;height:10px;"><strong></strong></td>
            <td  style=" width:50%; text-align:center; padding-top:5px; padding-bottom:10px;max-height:38px; "><img id="bs_chandoan1" style="max-height:38px"/>
        </tr>
		 <tr  >
            <td  style=" width:50%; text-align:center; padding-top:5px; padding-bottom:10px;"><strong></strong></td>
            <td  style=" width:50%; text-align:center; padding-top:5px; padding-bottom:10px; "><strong>'.  $thutrano[0]['VietTat'].''.$thutrano[0]['tennv'].'</strong></td>
        </tr>
		<tr>
        <td colspan="2" width="100%" style="text-align:center; font-size:13px; font-family:Arial, Helvetica, sans-serif; font-style:italic; background:#F5F5F5;">Quý khách có nhu cầu lấy HĐGTGT vui lòng liên hệ quầy thu ngân tầng 1 trong ngày</td>
        </tr>
        <tr>
        <td colspan="2" width="100%" style="text-align:center; font-size:18px; font-family:Arial, Helvetica, sans-serif; font-style:italic; background:#F5F5F5;">Thân thiết như người nhà</td>
        </tr>
    </table>';
	
	$lien2=' <table cellpadding="0" cellspacing="0" border="0" style="width:100%;font-family:Arial, Helvetica, sans-serif;">
             <tr style="font-size:10px;">
             <td style=" width:35%">
                <span style="letter-spacing: 0.5px;font-weight:bold">FAMILY</span> <img src="images/logo_print.png" /> 
             </td>
             <td style=" width:65%; text-align:right">
                '. $_SESSION["com"]["DiaChi"].'
                <br />
                SĐT: '.$_SESSION["com"]["SoDT"].'
             </td>
         </tr>
         <td colspan="2">
         	<span style=" font-size:10px; letter-spacing: 0.5px;text-transform:uppercase">'.$_SESSION["com"]["TenBenhVien"].'</span>
         </td>           
     </table>    
	<h2 style="text-align:center; font-family:Arial, Helvetica, sans-serif;">PHIẾU TẠM THU</h2>
    <table  cellpadding="0" cellspacing="0" border="0" style="width:100%;font-family:Arial, Helvetica, sans-serif; font-size:12px;">
      
        <tr>
            <td style=" width:70%; font-weight:bold;  padding-top: 1px;font-size:15px;  padding-bottom: 1px;">'.$tenbn.' </td>
        	<td style=" width:30%; text-align:right;font-weight:bold;font-size:15px;  padding-top: 1px;  padding-bottom: 1px;">'.$thutrano[0]["MaBenhNhan"].' </td>
        </tr>
		</table>
		<table  cellpadding="0" cellspacing="0" border="0" style="width:100%;font-family:Arial, Helvetica, sans-serif; font-size:12px;">
        <tr>
            <td style=" width:50%;  padding-top: 1px;font-weight:bold;font-size:12px;  padding-bottom: 1px;" colspan="2">'.$diachi.'</td>        	
        </tr>
        <tr>
            <td style=" width:50%;  padding-top: 1px;font-weight:bold;font-size:15px;  padding-bottom: 1px;">'.$thutrano[0]["MaPhieu"].'</td> 
            <td style=" width:50%; text-align:right;font-weight:bold;font-size:15px;  padding-top: 1px;  padding-bottom: 1px;">'.$thutrano[0]['NgayGio']->format($_SESSION["config_system"]["ngaythang"]." H:i").'</td>         	
        </tr>
    </table>
    <br />

    <table cellpadding="0" cellspacing="0" style="width:100%;font-family:Arial, Helvetica, sans-serif; font-size:12px;">
		'.$giohentrakq.'
        <tr>
        	<td  style="padding-top:10px;width:30%;" >
            Diễn giải:
            </td >
            <td  style="padding-top:10px" >
            '.$thutrano[0]['GhiChu'].'
            </td>
           	
        </tr>   
        
         <tr >
        <td style="width:30%;padding-top:10px">
            Số tiền:
            </td>  
            <td style="width:30%;padding-top:10px;font-weight:bold;font-size:15px;">
            '.number_format($thutrano[0]['SoTien'],"0",",",".").'<sup>đ </sup>
            </td>
             </tr>  
    </table>
    <br />
    <table  cellpadding="0" cellspacing="0" style="width:100%;font-family:Arial, Helvetica, sans-serif; font-size:12px;page-break-after:always;">
        <tr>
            <td id="tongtien" style=" width:100%; text-align:right;" colspan="2">
           
            </td>      
               
        </tr>
         <tr>
            <td style=" width:50%; text-align:center;">
           <strong>BỆNH NHÂN</strong>
            </td>   
            <td style=" width:50%; text-align:center;">
           <strong>THU NGÂN</strong>
            </td>   
               
        </tr>
       <tr  >
            <td  style=" width:50%; text-align:center; padding-top:5px; padding-bottom:10px;height:10px;"><strong></strong></td>
            <td  style=" width:50%; text-align:center; padding-top:5px; padding-bottom:10px;max-height:38px; "><img id="bs_chandoan" style="max-height:38px"/>
        </tr>
		 <tr  >
            <td  style=" width:50%; text-align:center; padding-top:5px; padding-bottom:10px;"><strong></strong></td>
            <td  style=" width:50%; text-align:center; padding-top:5px; padding-bottom:10px; "><strong>'.  $thutrano[0]['VietTat'].''.$thutrano[0]['tennv'].'</strong></td>
        </tr>
       
    </table>';
	
    if($_GET['lien']==2){
			
			echo($lien1);
		}else if($_GET['lien']==3){
			
			echo($lien2);
			
		}else if($_GET['lien']==1){
			
			echo($lien1);
			echo($lien2);
		}
    ?>
</body>
</html>
 <script type="text/javascript">
$(document).ready(function() { 
	$('#tongtien').html('('+toWords((<?=$thutrano[0]["SoTien"]?>).toString())+"đồng"+')');
	
	
 	if($.cookie("in_status")=="print_preview"){
		print_preview();
	}else if($.cookie("in_status")=="print_direct"){
		print_direct(10,10);
	}
});

</script>
