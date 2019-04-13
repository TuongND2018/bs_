<?php ob_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">     
<?php  
//include("../../../class/class.sqlserver.php");
//include("../../../class/ExportToExcel.class.php");
$id_key="ID_NuocSanXuat";
$search_string="";
$sidx = "ID_NuocSanXuat"; // get index row - i.e. user click to sort
$sord = "ASC"; // get the direction
$table = "DM_nuocsanxuat";
$data= new SQLServer;//tao lop ket noi SQL
	
$start = 0;
$end = 1000000;
$store_name="{call GD2_TABLEWITHPAGE_GETBY(?,?,?,?,?,?,?,?)}";//tao bien khai bao store

$params = array($id_key,$start,$end,$sidx,$sord,$table,$search_string,'*');//tao param cho store 	

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
		border-top:1px solid #000;
		border-right:1px solid #000;
		width:750px;
		
	}
	table td{
		border-left:1px solid #000;
		border-bottom:1px solid #000;
		padding:2px 2px;
		 
	}
	table th{
		border-left:1px solid #000;
		border-bottom:1px solid #000;
		padding:2px 2px;
		}
	#wrapper{
		width:1000px;
		margin:0 auto;
		}
	 
</style>
</head>
<body>
<div id="wrapper">

<?php
	$strPath = realpath(basename(getenv($_SERVER["SCRIPT_NAME"]))); // C:/AppServ/www/myphp
	$xlEdgeLeft = 7;
	$xlEdgeTop = 8;
	$xlEdgeBottom = 9;
	$xlEdgeRight = 10;

	//*** Excel Document Root ***//
	$strFileName = "excel/danhmuc_nuocsanxuat.xls";

	//*** Connect to Excel.Application ***//
	$xlApp = new COM("Excel.Application", NULL, CP_UTF8);
	$xlBook = $xlApp->Workbooks->Add();
	$xlSheet1 = $xlBook->Worksheets(1);
	$xlApp->Application->Visible = False;	


	//*** Sheet 1 ***//
	$xlSheet1->Name = "danh muc nuoc san xuat";
	$xlApp->ActiveSheet->Cells(1,5)->Value =  "DANH MỤC NƯỚC SẢN XUẤT";
	$xlApp->ActiveSheet->Cells(2,1)->Value =  "ID NSX";
	$xlApp->ActiveSheet->Cells(2,2)->Value =  "Tên đầy đủ";
	$xlApp->ActiveSheet->Cells(2,3)->Value =  "Tên viết tắt";
	$xlApp->ActiveSheet->Cells(2,4)->Value =  "Ghi chú";
	$xlApp->ActiveSheet->Cells(2,5)->Value =  "Sử dụng";
	$xlApp->ActiveSheet->Cells(2,6)->Value =  "STT";
	$i=3;
	foreach($tam as $row)
	{
		if ($row["Active"]?$row["Active"]="Có":$row["Active"]="Không");
		$xlApp->ActiveSheet->Cells($i,1)->Value =  $row["ID_NuocSanXuat"];
		$xlApp->ActiveSheet->Cells($i,2)->Value =  $row["TenDayDu"];
		$xlApp->ActiveSheet->Cells($i,3)->Value = $row["TenVietTat"];
		$xlApp->ActiveSheet->Cells($i,4)->Value =  $row["GhiChu"];
		$xlApp->ActiveSheet->Cells($i,5)->Value =  $row["Active"];
		$xlApp->ActiveSheet->Cells($i,6)->Value = $row["STT"];
		$i++;
	}
	
	
	@unlink($strFileName); //*** Delete old files ***//	

	$xlBook->SaveAs($strPath."/".$strFileName); //*** Save to Path ***//

	//*** Close & Quit ***//
	$xlApp->Application->Quit();
	$xlApp = null;
	$xlBook = null;
	$xlSheet1 = null;

?>
	<div style="margin-left:250px; font-size:18px; font-weight:bold">DANH MỤC NƯỚC SẢN XUẤT</div>
    <table border="0" cellpadding="0" cellspacing="0" >
    	<tr>
            <th align="center">
        		ID NSX
        	</th>
            <th>
        		Tên đầy đủ
        	</th>
            <th>
        		Tên V/Tắt
        	</th>
            <th align="center">
        		Ghi chú
        	</th>
            <th  align="center">
        		Sử dụng
        	</th>
            <th align="center">
        		STT
        	</th>
        </tr>
        <?php
        foreach ($tam as $row) {//duyet toan bo mang tra ve
		if ($row["Active"]?$row["Active"]="Có":$row["Active"]="Không");
            echo "<tr>";
            echo "<td align=" . '"'. "center".'"'.">".$row["ID_NuocSanXuat"]."</td>";
			echo "<td>".$row["TenDayDu"]."</td>";
			echo "<td align=" . '"'. "center".'"'.">".$row["TenVietTat"]."</td>";
			echo "<td>".$row["GhiChu"]."</td>";
			echo "<td align=" . '"'. "center".'"'.">".$row["Active"]."</td>";
			echo "<td align=" . '"'. "center".'"'.">".$row["STT"]."</td>";
			echo "</tr>";
        }  
		?> 
    </table>
    </div>
</body>
</html>
<?php
		if($types=="excel"){
		    /*file_put_contents('../../../excel/temp.html', ob_get_contents());
			$exp=new ExportToExcel();
			$exp->exportWithPage("../../../excel/temp.html","danhmucphongban.xls");
			file_put_contents('excel/temp.html', ob_get_contents());
			$exp=new ExportToExcel();
			$exp->exportWithPage("excel/temp.html","danhmuc_nuocsanxuat.xls");*/
		}
	?>