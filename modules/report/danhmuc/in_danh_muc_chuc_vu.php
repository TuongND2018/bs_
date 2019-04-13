<?php ob_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">     
<?php  
$table = "DM_chucvu";
$data= new SQLServer;//tao lop ket noi SQL
$store_name="{call GD2_DM_GET_Nopaging(?)}";//tao bien khai bao store
$params = array($table);//tao param cho store 	
$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store
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
	<div style="text-align:center; font-size:18px; font-weight:bold">DANH MỤC CHỨC VỤ</div>
    <table border="1" cellpadding="0" cellspacing="0" style="width:1000px;margin-top:5px">
    	<tr>
            <th>
        		STT
        	</th>
            <th>
        		Tên chức vụ
        	</th>
            <th>
        		Mô Tả
        	</th>
            <th>
        		Sử dụng
        	</th>
            <th>
        		STT
        	</th>
            
        </tr>
        <?php
		$stt=1;
        foreach ($tam as $row) {//duyet toan bo mang tra ve
		if ($row["Active"]?$row["Active"]="Có":$row["Active"]="Không");
		echo "<tr>";
		echo '<td align="center" >'.$stt.'</td>';
		echo '<td>'.$row["TenChucVu"].'</td>';
		echo '<td>'.$row["MoTa"].'</td>';
		echo '<td align="center" >'.$row["Active"].'</td>';
		echo '<td align="center" >'.$row["STT"]."</td>";
		
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
			$exp->exportWithPage("excel/temp.html","danhmuc_dinh_muc_chuc_vu.xls");
		}
?>