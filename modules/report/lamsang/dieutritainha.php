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
	<?php
        $data= new SQLServer;//tao lop ket noi SQL
		$_GET['tungay']=convert_date($_GET['tungay']) ;
		$_GET['denngay']=convert_date($_GET['denngay']) ;
        $params = array(1,$_GET['tungay'],$_GET['denngay'],$_GET["id_benhnhan"]);//tao param cho store 		
		 /*$params = array(1,'2014-01-01 00:00:00','2014-08-11 23:59:59',43283);//tao param cho store*/
        $store_name="{call GD2_DieuTriTaiNha_report(?,?,?,?)}";//tao bien khai bao store
        $get_thongtinbenhnhan=$data->query( $store_name,$params);//Goi store
        $excute= new SQLServerResult($get_thongtinbenhnhan);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
        $thongtinbenhnhan= $excute->get_as_array();//Tra ve mang toan bo data lay duoc  
		
		if($thongtinbenhnhan[0]["TenBenhNhan"]!=''){		
				$kt_null=0;	
				$holot=$thongtinbenhnhan[0]["HoLotBenhNhan"];
				$tenbn=$thongtinbenhnhan[0]["TenBenhNhan"];
				$mabn=$thongtinbenhnhan[0]["MaBenhNhan"];
				$gioitinh=$thongtinbenhnhan[0]["GioiTinh"];
				$tuoi=$thongtinbenhnhan[0]["Tuoi"];
				//$tenlk=$thongtinbenhnhan[$z]["TenLoaiKham"];
				//$phith=$thongtinbenhnhan[$z]["PhiThucHien"];
			
		}else{
			$kt_null=1;
			$tuoi='';
			$holot='';
			$tenbn='';
			$mabn='';
			$gioitinh='';
			$tenlk='';
			$phith='';
		}
		
    ?>
 <table cellpadding="0" cellspacing="0" border="0" style="width:100%;font-family:Arial, Helvetica, sans-serif;">
         <tr style="font-size:10px;">
             <td style=" width:35%">
                <span style="letter-spacing: 0.5px;font-weight:bold">FAMILY</span> <img src="file:///C|/Users/Win 8.1 VS8 X64/Desktop/images/logo_print.png" /> 
             </td>
             <td style=" width:65%; text-align:right">
                <?php echo $_SESSION["com"]["DiaChi"]?>
                <br />
                SĐT: <?php echo $_SESSION["com"]["SoDT"]?>
             </td>
         </tr>
         <td colspan="2">
         	<span style=" font-size:10px; letter-spacing: 0.5px;text-transform:uppercase"><?php echo $_SESSION["com"]["TenBenhVien"]?></span>
         </td>           
</table>    
<h2 style="text-align:center; font-family:Arial, Helvetica, sans-serif;">PHIẾU ĐIỀU TRỊ TẠI NHÀ</h2>
    <table  cellpadding="0" cellspacing="0" border="0" style="width:100%;font-family:Arial, Helvetica, sans-serif; font-size:12px;">
        <tr>
            <td style=" width:50%; font-weight:bold;  padding-top: 1px;  padding-bottom: 1px;"><?=$holot.' '.$tenbn; ?> </td>
        	<td style=" width:50%; text-align:right;font-weight:bold;  padding-top: 1px;  padding-bottom: 1px;"><?=$mabn;?> </td>
        </tr>
        <tr>
            <td colspan="2" style=" width:50%;  padding-top: 1px;  padding-bottom: 1px;"><?=$tuoi;?> tuổi, <?=$gioitinh;?> </td>
       	</tr>
    </table>
    <br />

    <table cellpadding="0" cellspacing="0" style="width:100%;font-family:Arial, Helvetica, sans-serif; font-size:12px;">
        <tr style="border-bottom:solid 1px #000000 !important; font-weight:bold;">
        	<td style=" width:50%; text-align:right; padding-right:40px; border-bottom:solid 1px #000000 !important;; border-top:solid 1px #000000 !important;  padding-top:2px; padding-bottom:2px;">
            Loại khám
            </td >
           	<td style=" width:50%; text-align:right; padding-right:10px; border-bottom:solid 1px #000000 !important;; border-top:solid 1px #000000 !important; padding-top:2px; padding-bottom:2px;">
            Tiền
            </td>
        </tr>
        
        <?php
		
			$i=0;
			$tong=0;
			foreach ($thongtinbenhnhan as $ttcd) {
						$i++;
						?>
					<tr>
						<td  style=" width:70%; text-align:left; padding-left:10px; padding-top:2px; padding-bottom:2px;">
					   <?=$i.' '.$ttcd["TenLoaiKham"]; ?>
						</td>
						<td  style=" width:30%; text-align:right; padding-right:10px;  padding-top:2px; padding-bottom:2px;">
					   <?=number_format($ttcd["PhiThucHien"]); ?>
						</td>
					   
					</tr>
				<?php
				$tong=$tong+$ttcd["PhiThucHien"];
				
			}
		
		?>
		
         <tr>
        	<td  style=" width:100%; border-bottom:solid 1px #000000 !important;" colspan="2">
            </td>
        </tr>
    </table>
    <br />
    <table  cellpadding="0" cellspacing="0" style="width:100%;font-family:Arial, Helvetica, sans-serif; font-size:12px;">
        <tr>
            <td  style=" width:60%; text-align:right;">
            Tổng tiền phải trả:
            </td>
            <td  style=" width:40%; text-align:right; font-weight:bold;">
            <?=number_format($tong);	?>
            </td>
        </tr>
        <tr style="font-style:italic; ">
            <td  style=" width:60%; text-align:right; padding-top:5px; padding-bottom:10px;">
            Giờ in:
            </td>
            <td  style=" width:40%; text-align:right; padding-top:5px; padding-bottom:10px; ">
   			<?php
            $date = date("H:i ".$_SESSION["config_system"]["ngaythang"]);
			echo $date;
			?>
            </td>
        </tr>
        <tr>
        <td colspan="2" width="100%" style="text-align:center; font-size:18px; font-family:Arial, Helvetica, sans-serif; font-style:italic; background:#F5F5F5; padding-top:2px; padding-bottom:2px;">
        Thân thiết như người nhà
        </td>
        </tr>
    </table>
    <div class="footer"></div>
     <script type="application/javascript">
		$(document).ready(function() {
			
		print_preview();
		});
	</script>
</body>
</html>
 