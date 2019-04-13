<?php
//print_r($_POST);
$data= new SQLServer;
$id_return='';
if($_POST["dhsinhton"]=='false'){
	$dhsinhton=0;
}else{
	$dhsinhton=1;
}

$comat=1;
$nhanthan=1;

$trangthai=	'DangCho';



//$ngay=$_POST["ngay"].explode('/');
//$ngay=$ngay[2].'-'.$ngay[1].'-'.$ngay[0];
//$ngay_gio=$ngay.' '.$_POST["gio"];
if($_POST["phanloai"]==''){
	 $_POST["phanloai"]=0;
  }
  if($_POST["goikham"]==''){
	 $_POST["goikham"]=0;
  }
  
if($_POST["phanloai"]!=25){
	 $_POST["goikham"]=0;
  }  
  
  
// print_r($_POST); 


if($_GET['oper']=='add'){
	//print_r($params);
	
	$params = array(	
					$_POST["pbvatly"],
					$_GET['id_benhnhan'],
					$_POST["doituong"],
					$_POST["goikham"],
					1,
					//$ngay_gio,					
					$_POST["bsyeucau"],
					$_POST["nguoichidinh"],					
					$_POST["nguoigioithieu"],
					0,
					$_POST["trangthai"],
					$trangthai,	
					$nhanthan,
					$comat,
					$dhsinhton,
					$_POST["lamsang"],					
					$_POST["nguoilapphieu"],
					$_POST["id_thebhyt"],
					$_SESSION['user']['id_user'],
					array($id_return, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT)
					);
					
	$del=$data->query( "{call Gd2_ThongTinLuotKham_Insert(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)}", $params);//Goi store
	echo ';'.$id_return;
}else {
	
	$params = array(	$_POST["pbvatly"],
						$_GET['id_ttluotkham'],
						$_POST["doituong"],
						$_POST["goikham"],
						$_POST["phanloai"],
						//$ngay_gio,					
						$_POST["bsyeucau"],
						$_POST["nguoichidinh"],					
						$_POST["nguoigioithieu"],
						$_POST["hinhthuc"],
						$_POST["trangthai"],
						$trangthai,	
						$nhanthan,
						$comat,
						$dhsinhton,
						$_POST["lamsang"],					
						$_POST["nguoilapphieu"],
						$_SESSION['user']['id_user']
						,$_POST['id_thebhyt']
						);

	$del=$data->query( "{call Gd2_ThongTinLuotKham_Upd(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)}", $params);//Goi store
	
}





 
?>

