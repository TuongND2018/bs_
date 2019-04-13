<?php ob_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">     
<?php  

//$table = "DM_QuocTich";
$data= new SQLServer;//tao lop ket noi SQL
$params = array();//tao param cho store 
$store_name="{call spDM_ChucDanh_SelectAll()}";//tao bien khai bao store
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
	<div style="text-align:center; font-size:18px; font-weight:bold">DANH MỤC CHỨC DANH</div>
    <table border="1" cellpadding="0" cellspacing="0" style="width:1000px;margin-top:5px">
    	<tr>
            <th>
        		STT
        	</th>
            <th>
        		Tên chức danh
        	</th>
            <th>
        		Viết tắt
        	</th>
            <th>
        		Mô tả
        	</th>
            <th>
        		Bác sỹ
        	</th>
            <th>
        		Điều dưỡng
        	</th>
            <th>
        		Y sỹ
        	</th>
            <th>
        		Y tá
        	</th>
            <th>
        		Nữ hộ sinh
        	</th>
            <th>
        		KTV
        	</th>
             <th>
        		Lễ Tân
        	</th>
             <th>
        		Dược sỹ
        	</th>
             <th>
        		Sử dụng
        	</th>
            
        </tr>
        <?php
		$stt=1;
        foreach ($tam as $row) {//duyet toan bo mang tra ve
		if ($row["IsDoctor"]?$row["IsDoctor"]="Có":$row["IsDoctor"]="Không");
		if ($row["IsDieuDuong"]?$row["IsDieuDuong"]="Có":$row["IsDieuDuong"]="Không");
		if ($row["IsYSy"]?$row["IsYSy"]="Có":$row["IsYSy"]="Không");
		if ($row["IsYTa"]?$row["IsYTa"]="Có":$row["IsYTa"]="Không");
		if ($row["IsNuHoSinh"]?$row["IsNuHoSinh"]="Có":$row["IsNuHoSinh"]="Không");
		if ($row["IsKTV"]?$row["IsKTV"]="Có":$row["IsKTV"]="Không");
		if ($row["IsLeTan"]?$row["IsLeTan"]="Có":$row["IsLeTan"]="Không");
		if ($row["IsDuocSy"]?$row["IsDuocSy"]="Có":$row["IsDuocSy"]="Không");
		if ($row["Active"]?$row["Active"]="Có":$row["Active"]="Không");
		echo "<tr>";
		echo '<td align="center" >'.$stt.'</td>';
		echo '<td>'.$row["TenChucDanh"].'</td>';
		echo '<td>'.$row["VietTat"].'</td>';
		echo '<td>'.$row["MoTa"].'</td>';
		echo '<td align="center" >'.$row["IsDoctor"]."</td>";
		echo '<td align="center" >'.$row["IsDieuDuong"]."</td>";
		echo '<td align="center" >'.$row["IsYSy"]."</td>";
		echo '<td align="center" >'.$row["IsYTa"]."</td>";
		echo '<td align="center" >'.$row["IsNuHoSinh"]."</td>";
		echo '<td align="center" >'.$row["IsKTV"]."</td>";
		echo '<td align="center" >'.$row["IsLeTan"]."</td>";
		echo '<td align="center" >'.$row["IsDuocSy"]."</td>";
		echo '<td align="center" >'.$row["Active"]."</td>";
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
			$exp->exportWithPage("excel/temp.html","danhmuc_dinh_muc_chuc_danh.xls");
		}
?>