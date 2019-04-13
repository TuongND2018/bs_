<?php
$isNew=true;
$ID_HuyChiDinhP=0;
foreach ($_POST['id'] as $key => $value) {

if($value['ID_HuyChiDinh']!="")
{
	$ID_HuyChiDinhP=$value['ID_HuyChiDinh'];
	//echo('***********'.$value['ID_HuyChiDinh'].'<br>');
$isNew=false;//Nếu có ID_HuyChiDinh  thì là trường hợp update thêm
 break;
}


/*echo $TenLoaiKham.'    ID_Kham:'.$ID_Kham.'-SoTienThucTra: '.$SoTienThucTra.
' ID_DieuTriPhoiHop: '.$ID_DieuTriPhoiHop.
' ID_PhysioTherapy: '.$ID_PhysioTherapy.
' GhiChu: '.$GhiChu.
'ID_HuyChiDinh'.$ID_HuyChiDinh.'<br>';*/
}
//kiem tra ID_HuyChiDinh null hoan toan thi tao moi
//echo($ID_HuyChiDinhP.'<br>');
switch ($_GET['thaotac']) {
	case 'luu':
	if($isNew==true)
		{
		//	echo('insert');
			insertPhieuHuy_ChiTiet();

	   	}
	   else
	   	{
	   //	 echo('update');
	   	 UpDate_PhieuHuy_ChiTiet($ID_HuyChiDinhP);

		}

		break;
	case 'xoa':
		Delete_PhieuHuy($ID_HuyChiDinhP);
		break;
	case 'hoantien':

	break;
	default:
		# code...
		break;
}
function Delete_PhieuHuy($ID_PhieuHuy)
{

	$data= new SQLServer;
	$store_name="{call [Gd2_HuyChiDinh_Delete] (?)}";
	$params = array(
	$ID_PhieuHuy
	);

$get=$data->query( $store_name, $params);//Goi store
}
function insertPhieuHuy_ChiTiet()
{

	$out="";
	$data= new SQLServer;
	$store_name="{call GD2_HuyChiDinh_Insert (?,?,?,?,?,?,?)}";
	$params = array(

	$_POST["lydoHuy"],
	$_SESSION["user"]["id_user"],//nnguoi lap phieu
	$_SESSION["user"]["id_user"],//nguoi duyet
	0,
	$_POST["ID_BenhNhan"],
	$_POST["LoaiChiDinh"],
	array($out, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT)
	);

$get=$data->query( $store_name, $params);//Goi store
print_r($out);

if(is_numeric($out))//có  id ròi thì insert chi tiết
{
$data= new SQLServer;
$store_name="{call [spHuyChiDinhChiTiet_Insert] (?,?,?,?,?,?,?,?)}";

foreach ($_POST['id'] as $key => $value) {
		$TenLoaiKham=$value['TenLoaiKham'];
		$ID_LoaiKham=$value['ID_LoaiKham'];
		$ID_Kham=$value['ID_Kham'];
		$ID_DieuTriPhoiHop=$value['ID_DieuTriPhoiHop'];
		$ID_PhysioTherapy=$value['ID_PhysioTherapy'];
		$SoNgayTraLai=$value['SoNgayTraLai'];
		$SoLanTraLai=$value['SoLanTraLai'];
		$SoTienThucTra=$value['SoTienThucTra'];
		$GhiChu=$value['GhiChu'];
		$ID_HuyChiDinh=$value['ID_HuyChiDinh'];

						if($value['SoTienThucTra']=="")
						{
							$SoTienThucTra=0;
						}
						if($value['SoNgayTraLai']=="")
						{
							$SoNgayTraLai=0;
						}
						if($value['SoLanTraLai']=="")
						{
							$SoLanTraLai=0;
						}

				$params2 = array(
					$out,
					$value['ID_Kham'],
					$SoTienThucTra,
					$value['GhiChu'],
					$value['ID_PhysioTherapy'],$value['ID_DieuTriPhoiHop'],
					$SoLanTraLai,$SoNgayTraLai,
				);
					$get=$data->query( $store_name, $params2);//Goi store
		}

}else
{
	echo "Insert Failed";
}

}


function UpDate_PhieuHuy_ChiTiet($ID_HChiDinhP)
{
	/*@ID_HuyChiDinh int,
	@LyDoHuy nvarchar(150),
	@ID_NguoiLapPhieu int,
	@ID_NguoiQuyetDinh int,
	@DaHoanTien bit,
	@ID_BenhNhan int,
	@LoaiHoanTra smallint*/

	$data= new SQLServer;
	$store_name="{call [Gd2_HuyChiDinh_Update] (?,?,?,?,?,?,?)}";
	$params = array(
    $ID_HChiDinhP,
	$_POST["lydoHuy"],
	$_SESSION["user"]["id_user"],//nnguoi lap phieu
	$_SESSION["user"]["id_user"],//nguoi duyet
	0,
	$_POST["ID_BenhNhan"],
	$_POST["LoaiChiDinh"],
	
	);

$get=$data->query( $store_name, $params);//Goi store



$data= new SQLServer;
$store_name="{call [spHuyChiDinhChiTiet_Insert] (?,?,?,?,?,?,?,?)}";

foreach ($_POST['id'] as $key => $value) {
		$TenLoaiKham=$value['TenLoaiKham'];
		$ID_LoaiKham=$value['ID_LoaiKham'];
		$ID_Kham=$value['ID_Kham'];
		$ID_DieuTriPhoiHop=$value['ID_DieuTriPhoiHop'];
		$ID_PhysioTherapy=$value['ID_PhysioTherapy'];
		$SoNgayTraLai=$value['SoNgayTraLai'];
		$SoLanTraLai=$value['SoLanTraLai'];
		$SoTienThucTra=$value['SoTienThucTra'];
		$GhiChu=$value['GhiChu'];
		$ID_HuyChiDinh=$value['ID_HuyChiDinh'];

						if($value['SoTienThucTra']=="")
						{
							$SoTienThucTra=0;
						}
						if($value['SoNgayTraLai']=="")
						{
							$SoNgayTraLai=0;
						}
						if($value['SoLanTraLai']=="")
						{
							$SoLanTraLai=0;
						}

				$params2 = array(
					$ID_HChiDinhP,
					$value['ID_Kham'],
					$SoTienThucTra,
					$value['GhiChu'],
					$value['ID_PhysioTherapy'],$value['ID_DieuTriPhoiHop'],
					$SoLanTraLai,$SoNgayTraLai,
				);
					$get=$data->query( $store_name, $params2);//Goi store
		}



}



?>

