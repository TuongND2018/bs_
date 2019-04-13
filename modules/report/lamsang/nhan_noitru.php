<!DOCTYPE html>
<html>
  <head> 
  
  <style>
  body{
	  margin:0px;
	  padding:0px;
	  overflow:auto;
	  font:Arial, Helvetica, sans-serif!important;
  }
  html, body, div, span, applet, object, iframe,
h1, h2, h3, h4, h5, h6, p, blockquote, pre,
a, abbr, acronym, address, big, cite, code,
del, dfn, em, img, ins, kbd, q, s, samp,
small, strike, strong, sub, sup, tt, var,
b, u, i, center,
dl, dt, dd, ol, ul, li,
fieldset, form, label, legend,
table, caption, tbody, tfoot, thead, tr, th, td,
article, aside, canvas, details, embed, 
figure, figcaption, footer, header, hgroup, 
menu, nav, output, ruby, section, summary,
time, mark, audio, video {
	margin: 0;
	padding: 0;
	border: 0;
	font-size: 100%;
	font: inherit;
	
}
/* HTML5 display-role reset for older browsers */
article, aside, details, figcaption, figure, 
footer, header, hgroup, menu, nav, section {
	display: block;
}

ol, ul {
	list-style: none;
}
blockquote, q {
	quotes: none;
}
blockquote:before, blockquote:after,
q:before, q:after {
	content: '';
	content: none;
}
table {
	border-collapse: collapse;
	border-spacing: 0;
}
#ht,#bs,#dd,#phai,#trai,#ten2{
		font-weight:bold;
		}
#phai,#chuoi,#tent{
	font-weight:bold;
}
#trai2,#trai3,#bs,#dd{
		font-style: italic;
		}
/*#ten2{
	display:block; 
	width:55px 
}*/
#ten2,#ht {text-transform:uppercase;}
 thead {display: table-header-group!important;}

@page {
    size:  100mm 30mm;
    margin: 0;
}
@media print {
    .page {
        margin: 0;
		size:  100mm 30mm;
        page-break-after: always;
    }
	#ht{
		font-weight:bold;
		}
}
@media print
 {
   thead {display: table-header-group!important;}
 }
  </style> 
  <meta charset="utf-8">
</head>
<body> 
<?php
        $data= new SQLServer;//tao lop ket noi SQL
       $params1 = array($_GET["idluotkham"]);//tao param cho store 
        $store_name1="{call GD2_Select_BenhAnNoiTru_Nhan(?)}";//tao bien khai bao store
        $get_thongtinluotkham=$data->query( $store_name1,$params1);//Goi store
        $excute1= new SQLServerResult($get_thongtinluotkham);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
        $thongtinluotkham= $excute1->get_as_array();//Tra ve mang toan bo data lay duoc
		//print_r($thongtinluotkham);
		//echo $thongtinluotkham[0]["tenbenhnhan"];
		if($thongtinluotkham[0]["thangsinh"]<72 && $thongtinluotkham[0]["thangsinh"]!=0){
			$thangtuoi=$thongtinluotkham[0]["thangsinh"];
			$thangtuoi=$thangtuoi.' tháng';
		}else{
			$thangtuoi=$thongtinluotkham[0]["Tuoi"];
			$thangtuoi=$thangtuoi.' tuổi';
		}   
		$thao = explode(" ", $thongtinluotkham[0]["ho"]);
		//echo $thao[0];
		$chuoi='';
		for($i=0;$i<count($thao);$i++)
		{
			
			$chuoi1= substr($thao[$i],0,1);
			$chuoi=$chuoi.' '.$chuoi1;
			
		}
		//echo $chuoi;
    ?>
<table height="99px" cellpadding="0" cellspacing="0" border="1" width="95%" style="page-break-after:always; margin-left:8px; margin-right:18px; margin-top:5px">
  <tr style="font-size:25px;margin-top:3px">
    <td colspan="2" align="center">
      <label id="ht" ><?= $thongtinluotkham[0]["tenbenhnhan"]?>    </label>    </td>
  </tr>
  <tr style="font-size:18px; ">
    <td width="40%">B/sĩ (Doctor):<br>Đ/dưỡng (Nurse):</td>
    <td style="text-align:right">
      <label id="bs" ><?= $thongtinluotkham[0]["bsdieutri"]?>
    </label><br>
    <strong>
      <label id="dd" ><?= $_GET["dduong"]?></label>
    </strong></td>
  </tr>
  <!--<tr style="font-size:18px;">
    <td>Đ/dưỡng (Nurse):</td>
    <td style="text-align:right"><strong>
      <label id="dd" >< ?= $_GET["dduong"]?></label>
    </strong></td>
  </tr>-->
</table>
<!--<table height="99px" cellpadding="0" cellspacing="0" border="1" width="95%" style="page-break-after:always; margin-left:8px; margin-right:18px; margin-top:8px">
	<tr >
    	<td width="18%" style="font-size:14px; border-right:2px solid ">
        GIƯỜNG <br><label id="phai"><b>
        	< ?= $thongtinluotkham[0]["TenGiuong"]?>
             </label>
        </td>
        <td style="font-size:16px; padding-left:5px "><label id="ten2">
          < ?= $thongtinluotkham[0]["tenbenhnhan"]?></label><label id="trai"><br> < ?= $thangtuoi?>,&nbsp;ID:&nbsp;< ?= $thongtinluotkham[0]["MaBenhNhan"]?></label></td>
       
    </tr>
    <tr ><td style="font-size:16px; border-right:2px solid"><label id="chuoi">< ?php 
				echo $chuoi;
			?> </label>   </td>
          <td style="font-size:16px;padding-left:5px ">B.sỹ:&nbsp;<label id="trai2"><i>< ?= $thongtinluotkham[0]["bsdieutri"]?></i></label></td>
     </tr>
    <tr ><td style="font-size:20px;border-right:2px solid "> <label id="tent">< ?= $thongtinluotkham[0]["ten"]?>  </label>  </td>
    <td style="font-size:16px;padding-left:5px ">Đ.dưỡng:&nbsp;<label id="trai3"><i>< ?= $_GET["dduong"]?></i></label>
         </td></tr>
</table>-->

  <script type="application/javascript">
		$(document).ready(function() {
		 	print_preview();
		   
		});
	</script>
    
 


</body>
</html>  
 