<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Report</title>
<style >
body{
	overflow:auto;
	/*background-image:url("./modules/report/canlamsang/bckgrnd.jpg");
	background-size:1123px 794px;
	background-repeat:no-repeat;
	overflow:scroll;*/
	height:1123px;
	width:794px;
	font-family:Arial, Helvetica, sans-serif;
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
			
			$params1 = array($_GET['id_kham']);//tao param cho store 
			$store_name1="{call GD2_GetKL_StressECGby_idkham(?)}";//tao bien khai bao store
			$get=$data->query( $store_name1,$params1);//Goi store
			$excute1= new SQLServerResult($get);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
			$ketluan= $excute1->get_as_array();//Tra ve mang toan bo data lay duoc
			//print_r($code15);
		?>
		<table  style="background:transparent">
        	<tr>
            	<td width="480" >&nbsp;
                </td>
                
                <td align="center" height="900" valign="bottom"><p>&nbsp;</p>
                  <p>&nbsp;</p>
					
              </td>
            </tr>
            <tr>
            	<td>&nbsp;
                </td>
                <td align="center">
               <strong> KẾT LUẬN</strong><br />
                    <?=  $ketluan[0]["KetLuan"]?><br />
                    <div style="height:70px"><img class="chuky" name="bs_chandoan" width="100"id="bs_chandoan"/></div>
                            <strong> <?=  $thongtinluotkham[0]["BsChanDoan"]?></strong><br />
                </td>
            </tr>

        </table>
        <script>
        $(document).ready(function() {
			if(1==<?php echo($_GET["chuky"])?>)
			{
				load_sign('<?=$thongtinluotkham[0]["chuky_bacsy"]?>',"bs_chandoan");
			}		
			//if($.cookie("in_status")=="print_preview")
			print_preview();
		});
	</script>
</body>
</html>
 