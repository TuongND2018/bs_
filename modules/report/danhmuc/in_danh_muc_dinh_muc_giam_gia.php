<?php ob_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">     
<?php  

//$table = "DM_QuocTich";
$data= new SQLServer;//tao lop ket noi SQL
$params = array();//tao param cho store 
$store_name="{call spQuotaGiamGia_SelectAll()}";//tao bien khai bao store
$get_danh_muc_phong_ban=$data->query( $store_name,$params);//Goi store
$excute= new SQLServerResult($get_danh_muc_phong_ban);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 
?>
<style type="text/css">
	body{
		width: 100%;
		margin-top: 5px;
		overflow:scroll;
		 
		}
	
	#wrapper{
		width:1000px;
		margin:0 auto;
		}
	 
</style>
</head>
<body>

<div id="wrapper">
	<div style="text-align:center; font-size:18px; font-weight:bold">DANH MỤC ĐỊNH MỨC GIẢM GIÁ</div>
    <table border="1" cellpadding="0" cellspacing="0" style="width:1000px;margin-top:5px">
    	<tr>
            <th>
        		STT
        	</th>
            <th>
        		Tên định mức g/giá
        	</th>
            <th>
        		Số tiền
        	</th>
            <th>
        		số tháng sd
        	</th>
            <th>
        		G/hạn 1 B/Nhân
        	</th>
            <th>
        		G/hạn 1 ngày
        	</th>
            <th>
        		G/hạn 1 tháng
        	</th>
            <th>
        		G/hạn 1 năm
        	</th>
            <th>
        		Ghi chú
        	</th>
            <th>
        		Sử dụng
        	</th>
            
        </tr>
        <?php
		$stt=1;
        foreach ($tam as $row) {//duyet toan bo mang tra ve
		if ($row["IsUsing"]?$row["IsUsing"]="Có":$row["IsUsing"]="Không");
            echo "<tr>";
            echo '<td align="center" >'.$stt.'</td>';
			echo '<td>'.$row["TenQuotaGiamGia"].'</td>';
			echo'<td align="right" >'.$row["SoTien"]=number_format($row["SoTien"]). '</td>';
			echo '<td align="center" >'.$row["SoThangSuDung"]."</td>";
			echo '<td align="right" >'.$row["Max1DayOfPatient"]=number_format($row["Max1DayOfPatient"])."</td>";
			echo '<td align="right" >'.$row["Max1Day"]=number_format($row["Max1Day"])."</td>";
			echo '<td align="right" >'.$row["Max1Month"]=number_format($row["Max1Month"])."</td>";
			echo '<td align="right" >'.$row["Max1Year"]=number_format($row["Max1Year"])."</td>";
			echo '<td>'.$row["GhiChu"]."</td>";
			echo '<td align="center">'.$row["IsUsing"]."</td>";
			echo "</tr>";
			$stt++;
        }  
		?> 
    </table>
</div>
</body>
</html>
<?php
		if($types=="excel"){
			file_put_contents('excel/temp.html', ob_get_contents());
			$exp=new ExportToExcel();
			$exp->exportWithPage("excel/temp.html","danhmuc_dinh_muc_giam_gia.xls");
		}
?>