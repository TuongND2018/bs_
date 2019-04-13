<?php ob_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php


$fromDate = $_GET['fromdate'] . ' 0:00:00';
$toDate = $_GET['todate'] . ' 23:59:59';

$data = new SQLServer; //tao lop ket noi SQL

$store_name = "{call GD2_LayTongHopChamCong (?,?)}"; //tao bien khai bao store
$params = array( $fromDate, $toDate);

$get_lich = $data->query($store_name, $params); //Goi store
$excute = new SQLServerResult($get_lich); //Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
$tam = $excute->get_as_array(); //Tra ve mang toan bo data lay duoc
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
	<div style="text-align:center;font-size:18px; font-weight:bold">BÁO CÁO TỔNG HỢP CÔNG</div>
    <?php
	//if($_GET['theonhacungcap']=='false'){
		/*echo '<div style="text-align:center;font-size:15px; font-weight:bold">'.$_GET["ten_kho"].' </div>';*/
		echo '<div style="text-align:center;font-size:15px; font-weight:bold">Từ ngày '.$_GET["fromdate"].' đến ngày '.$_GET["todate"].'</div>';
	//}
	//else{
	//	echo '<div style="text-align:center;font-size:15px; font-weight:bold">Kho '.$_GET["ten_kho"].'</div>';
	//	echo '<div style="text-align:center;font-size:15px; font-weight:bold">Từ ngày '.$_GET["from_day"].' đến ngày '.$_GET["to_day"].'</div>';
	//	}
	?>
    <table border="1" cellpadding="0" cellspacing="0" align="center" style="width:1500px;margin-top:5px"">
    	<tr height="30">
            <th>STT</th>
            <th>Họ tên</th>
            <th>NickName</th>
            <th bgcolor="orange">Tổng giờ</th>
            <th bgcolor="yellow">Số ngày</th>
            <th>Đi trễ</th>
            <th>Ra sớm</th>
            <th>TGCB</th>
            <th>Số lần ngoại viện</th>
            <th>Bộ phận</th>
            <th>ID_PhongBan</th>
      </tr>
         <?php
		$stt=1;
        foreach ($tam as $row) {//duyet toan bo mang tra ve

		?>
         <tr>
         	<td align="center"><?=$stt?></td>
            <td align="left"><?=$row['HoTen']?></td>
            <td><?=$row['NickName']?></td>
            <td bgcolor="orange"><?=$row['TongGio']?></td>
            <td bgcolor="yellow"><?=$row['SoNgay']?></td>
            <td align="left"><?=$row['DiTre']?></td>
            <td align="left"><?=$row['RaSom']?></td>
            <td align="right"><?=$row['TGCB']?></td>
            <td><?=$row['SLNV']?></td>
            <td><?=$row['TenPhongBan']?></td>
            <td><?=$row['ID_PhongBan']?></td>

          </tr>
        <?php
			$stt++;
		}
		?>
        <?php

		?>
    </table>
</div>
</body>
</html>
<?php
	if($types=="excel"){
		file_put_contents('excel/temp.html', ob_get_contents());
		$exp=new ExportToExcel();
		$exp->exportWithPage("excel/temp.html","baocaogiocong.xls");
	}
	?>