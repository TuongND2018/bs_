<html>
<head>
<title>ShotDev.Com Tutorial</title>
</head>
<body>
<?
	
	//*** Get Document Path ***//
	$strPath = realpath(basename(getenv($_SERVER["SCRIPT_NAME"]))); // C:/AppServ/www/myphp

	$xlEdgeLeft = 7;
	$xlEdgeTop = 8;
	$xlEdgeBottom = 9;
	$xlEdgeRight = 10;

	//*** Excel Document Root ***//
	$strFileName = "MyXls/MyExcel.xls";

	//*** Connect to Excel.Application ***//
	$xlApp = new COM("Excel.Application");
	$xlBook = $xlApp->Workbooks->Add();
	$xlSheet1 = $xlBook->Worksheets(1);
	$xlApp->Application->Visible = False;	


	//*** Sheet 1 ***//
	$xlSheet1->Name = "My Sheet1";

	//*** Write text to Row 1 Column 1 ***//		
	$xlApp->ActiveSheet->Cells(1,1)->Value = "ShotDev.Com";
	
	//*** Insert Picture (1) ***//
	$xlApp->Range("B3")->Select();
	$xlApp->ActiveSheet->Pictures->Insert($strPath."/logo.gif")->Select();


	//*** Insert Picture (2) ***//
	$xlApp->Range("I3")->Select();
	$Pic = $xlApp->ActiveSheet->Pictures->Insert($strPath."/logo.gif");
	$Pic->Width = 300;
	$Pic->Height = 150;
	
	@unlink($strFileName); //*** Delete old files ***//	

	$xlBook->SaveAs($strPath."/".$strFileName); //*** Save to Path ***//

	//*** Close & Quit ***//
	$xlApp->Application->Quit();
	$xlApp = null;
	$xlBook = null;
	$xlSheet1 = null;
?>
Excel Created <a href="<?=$strFileName?>">Click here</a> to Download.
</body>
</html>
<!--- This file download from www.shotdev.com -->