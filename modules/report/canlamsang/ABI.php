<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Report</title>
<style >
body{
	overflow:auto;
}
pre {
 white-space: pre-wrap;       /* css-3 */
 white-space: -moz-pre-wrap;  /* Mozilla, since 1999 */
 white-space: -pre-wrap;      /* Opera 4-6 */
 white-space: -o-pre-wrap;    /* Opera 7 */
 word-wrap: break-word;       /* Internet Explorer 5.5+ */
 font:13px Tahoma, Geneva, sans-serif;
 font-weight:;
} 

</style>
</head>
 
<body>
	
		<?php
			$data= new SQLServer;//tao lop ket noi SQL
			$params1 = array($_GET['id_kham']);//tao param cho store 
			$store_name1="{call GD2_GetKhamById_Kham(?)}";//tao bien khai bao store
			$get_thongtinluotkham=$data->query( $store_name1,$params1);//Goi store
			$excute1= new SQLServerResult($get_thongtinluotkham);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
			$thongtinluotkham= $excute1->get_as_array();//Tra ve mang toan bo data lay duoc
			//print_r($thongtinluotkham);	
			
		
		?>
		
        	<b><pre style="font-size:13px; margin-left:560px;margin-top:65px;font-weight:500!important;word-spacing:0px;font-weight:bold!important"><?= $thongtinluotkham[0]["BsChanDoan"]?></pre></b>
            <pre style="font-size:13px;margin-left:560px;margin-top:-1px;font-weight:500!important;word-spacing:0px""><?= $thongtinluotkham[0]["NguoiThucHien"]?></pre>
            <pre style="width:207px;height:76px;vertical-align:middle;margin-left:520px;margin-top:660px;font-size:14px!important ;font-weight:500!important"><?= $thongtinluotkham[0]["MoTa"]."\n".$thongtinluotkham[0]["KetLuan"]?></pre>
<script type="application/javascript">
		$(document).ready(function() {
			
						print_preview();
			
			
		});
</script>
</body>
</html>
 