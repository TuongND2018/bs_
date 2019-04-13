<?php ob_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php
	$tu_ngay='';
	$den_ngay='';
	$data= new SQLServer;//tao lop ket noi SQL

	if(isset($_GET["tu_ngay"]))
	{
	   $tu_ngay= convert_date($_GET["tu_ngay"]).' 0:00:00';
	}
	else
	{
		$tu_ngay=date("Y-m-d").' 0:00:00';
	}
	if(isset($_GET["den_ngay"]))
	{
	$den_ngay= convert_date($_GET["den_ngay"]).' 23:59:59';
	}
	else
	{
		 $den_ngay=date("Y-m-d").' 23:59:59';
	}
	
	$store_name="{call [GD2_TinhSuatAnTheoNgay] (?,?)}";
	$params = array($tu_ngay,$den_ngay);

	$get=$data->query( $store_name, $params);//Goi store
	$excute= new SQLServerResult($get);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
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
  <div style="text-align:center;font-size:18px; font-weight:bold">TỔNG HỢP SUẤT ĂN</div>
    <?php
	//if($_GET['theonhacungcap']=='false'){
		
		echo '<div style="text-align:center;font-size:15px; font-weight:bold">Từ ngày '.$_GET["tu_ngay"].' đến ngày '.$_GET["den_ngay"].'</div>';
	//}
	//else{
	//	echo '<div style="text-align:center;font-size:15px; font-weight:bold">Kho '.$_GET["ten_kho"].'</div>';
	//	echo '<div style="text-align:center;font-size:15px; font-weight:bold">Từ ngày '.$_GET["from_day"].' đến ngày '.$_GET["to_day"].'</div>';
	//	}
	?>
  <table border="1" cellpadding="0" cellspacing="0" align="center" style="width:2000px;margin-top:5px"">
    	<tr height="30">
            <th width="29">STT</th>
            <th width="250">Họ tên nhân viên</th>
            <th width="150">NickName</th>
            <th width="180">Phòng ban</th>
            <th width="100">Số lượng hỗ trợ</th>
            <th width="100">Tiền hỗ trợ</th>
            <th width="100">Số lượng tổng</th>
            <th width="100">Tổng tiền</th>
            <th width="100">Tiền phải trả</th>
      </tr>
         <?php
		$stt=1;
		$SoLuongHoTro=0;
		$TienHoTro=0;
		$SoLuongTong=0;
		$TongCong=0;
		$TienPhaiTra=0;
        foreach ($tam as $row) {//duyet toan bo mang tra ve
		$SoLuongHoTro=$SoLuongHoTro+$row['SoLuongHoTro'];
		$TienHoTro=$TienHoTro+$row['TienHoTro'];
		$SoLuongTong=$SoLuongTong+$row['SoLuongTong'];
		$TongCong=$TongCong+$row['TongCong'];
		$TienPhaiTra=$TienPhaiTra+$row['PhaiTra'];
		?>
    <tr>
         	<td align="center"><?=$stt?></td>
            <td align="left"><?=$row['tnv']?></td>
            <td align="left"><?=$row['Ten']?></td>
            <td align="left"><?=$row['tpb']?></td>
            <td align="right"><?=$row['SoLuongHoTro']?></td>
            <td align="right"><?=$row['TienHoTro']?></td>
            <td align="right"><?=$row['SoLuongTong']?></td>
            <td align="right"><?=$row['TongCong']?></td>
            <td align="right"><?=$row['PhaiTra']?></td>
      </tr>
      <?php
			$stt++;
		}
		
		?>
       <tr bgcolor="#999999">
       	  <td colspan="4" align="right"><strong>Tổng:</strong></td>
          <td align="right"><strong>
          <?=number_format($SoLuongHoTro,"0",",",".")?>
          </strong></td>
          <td align="right"><strong>
          <?=number_format($TienHoTro,"0",",",".")?>
          </strong></td>
          <td align="right"><strong><?=number_format($SoLuongTong,"0",",",".")?>
          </strong></td>
          <td align="right"><strong>
          <?=number_format($TongCong,"0",",",".")?>
          </strong></td>
          <td align="right"><strong>
          <?=number_format($TienPhaiTra,"0",",",".")?>
          </strong></td>
          
    </tr>
      <?php
		/*$stt=1;
        foreach ($tam as $row) {//duyet toan bo mang tra ve
		if ($row["Active"]?$row["Active"]="Có":$row["Active"]="Không");
            echo "<tr>";
            echo "<td align=" . '"'. "center".'"'.">".$stt."</td>";
			echo "<td align=" . '"'. "center".'"'.">".$row["Ma_NhapXuat"]."</td>";
			echo "<td>".$row["Ten_LoaiNhapXuat"]."</td>";
			echo "<td align=" . '"'. "center".'"'.">".$row["Active"]."</td>";
			echo "</tr>";
			$stt++;
        }  */
		?>
    </table>
</div>
</body>
</html>
<?php
	if($types=="excel"){
		file_put_contents('excel/temp.html', ob_get_contents());
		$exp=new ExportToExcel();
		$exp->exportWithPage("excel/temp.html","excel_nhabepsuatan.xls");
	}
	?>