<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" href="/css/print.css" type="text/css" media="print">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Report</title>
<style >
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
body,td,th {
	color: #000;
	font-size: 13px!important;
}
 thead { display: table-header-group; }
tfoot { display: table-footer-group; }
/*@page {
    size:  740px 506px;
    margin: 0;
}*/

  @page {
    size: 134mm 196mm;
  }


 
@media print {
	 @page {
       size: 134mm 196mm;
    }
    .page {
        margin: 0;
	size: 134mm 196mm;
        page-break-after: always;
    }
}
</style>
</head>
 
<body>
	<?php
        $data= new SQLServer;//tao lop ket noi SQL
       $params1 = array($_GET["id_luotkham"]);//tao param cho store 
        $store_name1="{call GD2_DSTT_DonThuocCT_ToaThuoc(?)}";//tao bien khai bao store
        $get_thongtinluotkham=$data->query( $store_name1,$params1);//Goi store
        $excute1= new SQLServerResult($get_thongtinluotkham);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
        $thongtinluotkham= $excute1->get_as_array();//Tra ve mang toan bo data lay duoc
		//print_r($thongtinluotkham[0]["NgayKeDon"]);	   
		if($thongtinluotkham[0]["NgayKeDon"]!=''){
			$thongtinluotkham[0]["NgayKeDon"]=$thongtinluotkham[0]["NgayKeDon"]->format($_SESSION["config_system"]["ngaythang"]);}
	else $thongtinluotkham[0]["NgayKeDon"]='';
    ?>
    
    <table cellpadding="0" cellspacing="0" border="0" width="100%" style="height:208px;margin:0px;">
   <thead><?php echo('
    
	
  <tr  cellpadding="0" cellspacing="0" border="0" width="100%" >
    <td  rowspan="2" >&nbsp;</td>
    <td width="400.6px" height="70px!important">&nbsp;</td>
  </tr>
  <tr>
    <td align="right" height="17px!important" style="font-weight:500"><em>Bn: 
      '.$thongtinluotkham[0]["tenbenhnhan"].' , 
      '.($thongtinluotkham[0]["tuoi"]) .'
    tuổi, ID:   '.($thongtinluotkham[0]["MaBenhNhan"]).'. '.count($thongtinluotkham).'. Ngày: '.$thongtinluotkham[0]["NgayKeDon"].' </em></td>
  </tr>
  <tr>
  
  
    <td  style="padding-left:10px!important" ></td>
    <td align="right" height="17px!important" style="max-width: 548px" ><em>CĐ: 
    '. str_replace(array("", "\n", "chr(13)",  "\t", "\0", "\x0B"),"/",$thongtinluotkham[0]["ChanDoan"]) .' </em></td>
	
    </tr>
	');?></thead>
 <tbody>

	
    
<?php 
	$pieces = explode(",", $_GET["check"]);
	$y=1;
	$z=0;
	for($i=0;$i<=count($thongtinluotkham)-1;$i++){
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
	


}if($thongtinluotkham[0]["GhiChu"]!=''){
 echo('<table width="100%" border="0">
 
  <tr  cellpadding="0" cellspacing="0" border="0" width="100%" style="height:95px!important;margin:0px;">
    <td width="80%" align="left" valign="bottom"><strong>Lời dặn dò:</strong><pre>'.$thongtinluotkham[0]["GhiChu"].'</pre></td>
    <td width="20%" align="center" valign="bottom">
		 <img id="bs_chandoan" width="100"/></td>
  </tr>
  <tr>
  	<td align="right" valign="bottom">
                	
                 <b style="color:red">'.$thongtinluotkham[0]["BsChanDoan"].'
                </td>
  </tr>
  </table>');
}
  else{
	  echo('<table width="100%" border="0">
 
  <tr  cellpadding="0" cellspacing="0" border="0" width="100%" style="height:95px!important;margin:0px;">
    
    <td width="20%!important" align="right" valign="bottom">
		 <img id="bs_chandoan" width="100"/></td>
  </tr>
  <tr>
  	<td align="right" valign="bottom">
                	
                 <b style="color:red">'.$thongtinluotkham[0]["BsChanDoan"].'
                </td>
  </tr>
  </table>');
  }
?>

  </tbody>

    
</table>
    <script type="application/javascript">
		$(document).ready(function() {
			load_sign('<?=$thongtinluotkham[0]["chuky_nhanvien"]?>',"bs_chandoan");
			 print_preview();
			
		});
	</script>
</body>
</html>
 