<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" href="/css/print.css" type="text/css" media="print">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Report</title>
<style type="text/css" media="print">
body{
	overflow: auto;
	margin-left: 0px;
}
pre {
 white-space: pre-wrap;       /* css-3 */
 white-space: -moz-pre-wrap;  /* Mozilla, since 1999 */
 white-space: -pre-wrap;      /* Opera 4-6 */
 white-space: -o-pre-wrap;    /* Opera 7 */
 word-wrap: break-word;       /* Internet Explorer 5.5+ */
 font:13px Tahoma, Geneva, sans-serif;
}
#background {
   position: absolute;
   top: 0;
   left: 0;
   bottom: 0;
   right: 0;
   z-index: -1;
   overflow: hidden;
} 
body,td,th {
	color: #000;
	font-size: 13px!important;
}




 thead
            {
				
                display: table-header-group!important;
            }
  table { page-break-inside:auto }
			tr    { page-break-inside:avoid; page-break-after:auto }

@media print {  
    @page {  
      size:5.3in 7.7in;  
    }  
}
@media print{@page {size: landscape}}
@page {
    size: 10cm 20cm;
    /* change the margins as you want them to be. */
}

</style>
</head>
 
<body >
	<?php
	//background="images/toatam.jpg">
        $data= new SQLServer;//tao lop ket noi SQL
       $params1 = array($_GET["id_donthuoc"]);//tao param cho store 
        $store_name1="{call GD2_Toathuoc_print(?)}";//tao bien khai bao store
        $get_thongtinluotkham=$data->query( $store_name1,$params1);//Goi store
        $excute1= new SQLServerResult($get_thongtinluotkham);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
        $thongtinluotkham= $excute1->get_as_array();//Tra ve mang toan bo data lay duoc
		//print_r($thongtinluotkham);
		//print_r($thongtinluotkham[0]["NgayKeDon"]);	   
		if($thongtinluotkham[0]["NgayKeDon"]!=''){
			$thongtinluotkham[0]["NgayKeDon"]=$thongtinluotkham[0]["NgayKeDon"]->format($_SESSION["config_system"]["ngaythang"]);}
	else $thongtinluotkham[0]["NgayKeDon"]='';
    ?>
    
    <table cellpadding="0" cellspacing="0" border="0" width="100%" style="height:208px;margin:0px" >
   <thead  style="page-break-inside: avoid;">

   
   <?php echo('
    
	

  <tr>
    <td align="right" height="90px!important" style="font-weight:500" colspan="2" valign="bottom"><em>Bn: 
      '.$thongtinluotkham[0]["tenbenhnhan"].' , 
      '.($thongtinluotkham[0]["tuoi"]) .'
    tuổi, ID:   '.($thongtinluotkham[0]["MaBenhNhan"]).'. '.count($thongtinluotkham).'. Ngày: '.$thongtinluotkham[0]["NgayKeDon"].' </em>&nbsp&nbsp</td>
  </tr>
  <tr>
    <td align="right" height="21px!important" style="max-width: 548px" colspan="2" ><em>CĐ: 
    '. str_replace(array("", "\n", "chr(13)",  "\t", "\0", "\x0B"),"/",$thongtinluotkham[0]["ChanDoan"]) .' </em>&nbsp&nbsp</td>
	
    </tr>
	');?></thead>
 <tbody>

	
    
<?php
	$vtyt=0;
	
	$y=1;
	$z=0;
	for($i=0;$i<=count($thongtinluotkham)-1;$i++){
		if($thongtinluotkham[$i]['ExtField2']==1){
			$vtyt=1;
		}
		if($thongtinluotkham[$i]['ExtField2']==0){
			if($z==0){
					echo('<tr height="38.8px" style=" margin-left:10px!important; padding-left:10px!important" >');
				}
			
				
				echo('<td width="50%" style=" margin-left:20px!important; padding-left:20px!important"><div><strong>' .($y) .' . '.$thongtinluotkham[$i][$_GET['tenin']].' </strong>
						<strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;x '.round($thongtinluotkham[0]["SoThuocThucXuat"]).' '.$thongtinluotkham[0]["TenDonViTinh"].' </strong>
					 </div>
					 <div>
					'.$thongtinluotkham[$i]["CachDung"].' 
					 </div></td>');
				$y++;
				$z++;
				
			if($z==2){
					echo('</tr>');
					$z=0;
			}
		}


}
$tam='';
if($thongtinluotkham[0]["GhiChu"]==''){
	$tam='';
}else{
	$tam='<strong>Lời dặn dò:</strong><pre>'.$thongtinluotkham[0]["GhiChu"].'</pre>';
}

 echo('
 
  <tr  cellpadding="0" cellspacing="0" border="0" width="100%" style="height:95px!important;margin:0px;">
     <td  align="left" valign="bottom" colspan="2">
	<div style="display:table-cell;width:500px" >
	
	'.$tam.'
	</div>
	<div  style="display:table-cell;width:240px;text-align:center; vertical-align:bottom" >
	<img id="bs_chandoan" width="100"/><br>
	 <b style="color:red">'.$thongtinluotkham[0]["BsChanDoan"].'
	</div>
	
	</td>
  </tr>

 ');

  
  if($vtyt==1){
	  $y=1;
	$z=0;
	   echo('<tr  width="100%" style="height:95px!important;margin:0px;"><td align="center" colspan="2">(Thực phẩm chức năng - Thuốc đông y -Vật tư y tế dùng phối hợp)</td></tr>');
  	for($i=0;$i<=count($thongtinluotkham)-1;$i++){
		
		if($thongtinluotkham[$i]['ExtField2']==1){
			if($z==0){
					echo('<tr height="38.8px" style=" margin-left:10px!important; padding-left:10px!important" >');
				}
				echo('<td width="50%" style=" margin-left:20px!important; padding-left:20px!important"><div><strong>' .($y) .' . '.$thongtinluotkham[$i][$_GET['tenin']].' </strong>
						<strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;x '.round($thongtinluotkham[0]["SoThuocThucXuat"]).' '.$thongtinluotkham[0]["TenDonViTinh"].' </strong>
					 </div>
					 <div>
					'.$thongtinluotkham[$i]["CachDung"].' 
					 </div></td>');
				$y++;
				$z++;
				
			if($z==2){
					echo('</tr>');
					$z=0;
			}
		}


}
  }
?>

  </tbody>

    
</table>
    <script type="application/javascript">
		$(document).ready(function() {
			load_sign('<?=$thongtinluotkham[0]["chuky_nhanvien"]?>',"bs_chandoan");
			
			 
			 var xemtruocin=<?=$_GET['xemtruocin']?>;
		   if(xemtruocin==0){
			   print_direct();
		
		   }else{
		   print_preview();
		   }
			
		});
	</script>
</body>
</html>
 