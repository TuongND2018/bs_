<?php ob_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">     
<?php  
//include("../../../class/class.sqlserver.php");
//include("../../../class/ExportToExcel.class.php");
$param="";
$data= new SQLServer;//tao lop ket noi SQL
$store_name="{call GD2_Thuoc_SelectAll()}";//tao bien khai bao store
$params = array($param);//tao param cho store 	
$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store
$excute= new SQLServerResult($get_danh_muc_phong_ban);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 

$i=0;


?>
<style type="text/css">
	body{
		width: 100%;
		margin-top: 5px;
		overflow:scroll;
		 
		}
	table{
		margin-top: 5px;
		width:1500px;

		
	}
	
	#wrapper{
		width:100%;
		margin:0 auto;
		}
</style>
</head>
<body>
<div id="wrapper">
	<div style="text-align:center;font-size:18px; font-weight:bold">DANH MỤC THUỐC</div>
    <table id="rowed3" border="1" cellpadding="0" cellspacing="0" >
    	<tr>
            <th align="center">
        		Mã
        	</th>
            <th>
        		Tên b/dược
        	</th>
            <th>
        		barcode
        	</th>
            <th>
        		Tên gốc
        	</th>
            <th align="center">
        		Tên h/đơn
        	</th>
            <th align="center">
        		Tên khác
        	</th>
             <th align="center">
        		HC chính
        	</th>
            <th align="center">
        		Hàm lượng
        	</th>
            <th align="center">
        		NSX
        	</th>
             <th align="center">
        		N/Bệnh
        	</th>
            <th align="center">
        		ĐVT q/đổi
        	</th>
             <th align="center">
        		Đ/dùng
        	</th>
             <th align="center">
        		SL q/đổi
        	</th>
            <th align="center">
        		ĐVT
        	</th>
            <th align="center">
        		T/kho t/thiểu
        	</th>
            <th align="center">
        		Ghi chú
        	</th>
            <th align="center">
        		Là thuốc
        	</th>
             <th align="center">
        		Sử dụng
        	</th>
            <th align="center">
        		Độ ƯT
        	</th>
            <th align="center">
        		Thuốc BHYT
        	</th>
            <th align="center">
        		BHYT nội trú
        	</th>
        </tr>
        
        <?php
		$compare=0;
        foreach ($tam as $row) {//duyet toan bo mang tra ve
		if ($row["Active"]?$row["Active"]="Có":$row["Active"]="Không");
		if ($row["ThuocBHYT"]?$row["ThuocBHYT"]="Có":$row["ThuocBHYT"]="Không");
		if ($row["LaThuoc"]?$row["LaThuoc"]="Có":$row["LaThuoc"]="Không");
		if ($row["BHYTNoiTruOrNgTru"]?$row["BHYTNoiTruOrNgTru"]="Nội trú":$row["BHYTNoiTruOrNgTru"]="Ngoại trú");
		if($compare!=$row["ID_NhomThuoc"]){
			echo '<tr><th class="count" align="left" colspan="21" style="background-color:#CCC">Nhóm thuốc '.$row["ID_NhomThuoc"].'</th></tr>';	
			echo "<tr>";
            echo "<td align=" . '"'. "center".'"'.">".$row["MaThuoc"]."</td>";
			echo "<td>".$row["TenBietDuoc"]."</td>";
			echo "<td align=" . '"'. "center".'"'.">".$row["Barcode"]."</td>";
			echo "<td>".$row["TenGoc"]."</td>";
			echo "<td>".$row["TenHoaDon"]."</td>";
			echo "<td>".$row["TenKhac"]."</td>";
			echo "<td>".$row["HoatChatChinh"]."</td>";
			echo "<td align=" . '"'. "center".'"'.">".$row["HamLuong"]."</td>";
			echo "<td align=" . '"'. "center".'"'.">".$row["ID_NuocSanXuat"]."</td>";
			echo "<td align=" . '"'. "center".'"'.">".$row["ID_NhomBenh"]."</td>";
			echo "<td align=" . '"'. "center".'"'.">".$row["ID_DonViTinhQuyDoi"]."</td>";
			echo "<td align=" . '"'. "center".'"'.">".$row["ID_DuongDung"]."</td>";
			echo "<td align=" . '"'. "center".'"'.">".$row["SoLuongQuyDoi"]."</td>";
			echo "<td>".$row["ID_DonViTinh"]."</td>";
			echo "<td align=" . '"'. "center".'"'.">".$row["TonKhoToiThieu"]."</td>";
			echo "<td>".$row["GhiChu"]."</td>";
			echo "<td align=" . '"'. "center".'"'.">".$row["LaThuoc"]."</td>";
			echo "<td align=" . '"'. "center".'"'.">".$row["Active"]."</td>";
			echo "<td align=" . '"'. "center".'"'.">".$row["DoUuTien"]."</td>";
			echo "<td align=" . '"'. "center".'"'.">".$row["ThuocBHYT"]."</td>";
			echo "<td align=" . '"'. "center".'"'.">".$row["BHYTNoiTruOrNgTru"]."</td>";
			echo "</tr>";
		}
		else{
            echo "<tr>";
            echo "<td align=" . '"'. "center".'"'.">".$row["MaThuoc"]."</td>";
			echo "<td>".$row["TenBietDuoc"]."</td>";
			echo "<td align=" . '"'. "center".'"'.">".$row["Barcode"]."</td>";
			echo "<td>".$row["TenGoc"]."</td>";
			echo "<td>".$row["TenHoaDon"]."</td>";
			echo "<td>".$row["TenKhac"]."</td>";
			echo "<td>".$row["HoatChatChinh"]."</td>";
			echo "<td align=" . '"'. "center".'"'.">".$row["HamLuong"]."</td>";
			echo "<td align=" . '"'. "center".'"'.">".$row["ID_NuocSanXuat"]."</td>";
			echo "<td align=" . '"'. "center".'"'.">".$row["ID_NhomBenh"]."</td>";
			echo "<td align=" . '"'. "center".'"'.">".$row["ID_DonViTinhQuyDoi"]."</td>";
			echo "<td align=" . '"'. "center".'"'.">".$row["ID_DuongDung"]."</td>";
			echo "<td align=" . '"'. "center".'"'.">".$row["SoLuongQuyDoi"]."</td>";
			echo "<td>".$row["ID_DonViTinh"]."</td>";
			echo "<td align=" . '"'. "center".'"'.">".$row["TonKhoToiThieu"]."</td>";
			echo "<td>".$row["GhiChu"]."</td>";
			echo "<td align=" . '"'. "center".'"'.">".$row["LaThuoc"]."</td>";
			echo "<td align=" . '"'. "center".'"'.">".$row["Active"]."</td>";
			echo "<td align=" . '"'. "center".'"'.">".$row["DoUuTien"]."</td>";
			echo "<td align=" . '"'. "center".'"'.">".$row["ThuocBHYT"]."</td>";
			echo "<td align=" . '"'. "center".'"'.">".$row["BHYTNoiTruOrNgTru"]."</td>";
			echo "</tr>";
		}
		$compare=$row["ID_NhomThuoc"];
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
			$exp->exportWithPage("excel/temp.html","danhmucthuoc.xls");
		}
	?>