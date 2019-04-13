<?php
if(isset($_POST['id'])){
	$sum=0;
	$sumvat=0;
	$id_xuatkho='';
	$ngaythuclinh= convert_date($_GET['ngaythuclinh'])." 00:00:00";
	if($_GET['doituong']=='Viện phí'){
		$ID_LoaiNhapXuat=93; //vienphi
		$ghichu='Xuất thuốc cho bệnh nhân tự nguyện nội trú - '.$_GET['tenkhoa'];
	}else{
		$ID_LoaiNhapXuat=94;
		$ghichu='Xuất thuốc cho bệnh nhân bảo hiểm nội trú - '.$_GET['tenkhoa'];
	}
	$data= new SQLServer;	
	for($i=0;$i<=count($_POST['id'])-1;$i++){		
		$sum=$sum+($_POST['id'][$i]['soluong']*$_POST['id'][$i]['dongia']);
		$sumvat=$sumvat+($_POST['id'][$i]['soluong']*$_POST['id'][$i]['dongia']*$_POST['id'][$i]['phantramvat']/100);	
	}
	$begin_tran=$data->begin_tran();
	
	 $date = date('Y-m-d H:i:s');
		
		$params4 = array(
		'',//  @MaPhieu nvarchar(50),
		$date,//   @NgayLapPhieu datetime,
		$ngaythuclinh,//   @NgayXuat datetime,
		-1,//   @ID_NCC int,
		$_SESSION["user"]["id_user"],//   @ID_NhanVien int,
		$_GET["nguoilinh"],//   @TenKhachHang nvarchar(50),
		0,//   @PercentVAT int,
		$sumvat,//   @TienVAT decimal(18,1),
		0,//   @ChietKhau decimal(18,0),
		0,//   @IsPercent bit,
		$sum,//   @ThanhTien decimal(18,0),
		$ghichu,//   @GhiChu nvarchar(200),
		$_GET["kho"],//   @ID_Kho int,
		$ID_LoaiNhapXuat,//   @ID_LoaiNhapXuat int,
		-1,//   @IDDonThuoc int,
		1,//   @DaThanhToan bit,
		$_SESSION["user"]["id_user"],//   @ID_NguoiDuyet int,
		$date,//   @NgayDuyet smalldatetime,
		0,//   @IsXuatChoToaTam bit,
		2014,//   @Year int,
		-1,//   @ID_NhapKho int,
		$_GET["id_phieulinh"],// @ID_PhieuLinh
		array($id_xuatkho, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT)//   @ID_XUATKHO int out
		);
	//print_r ($params4);
	$store_name4="{call Gd2_PhieuXuat_NoiTru_Add (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)}";
	$get_danh_muc_phong_ban=$data->query( $store_name4, $params4);
	if( !$get_danh_muc_phong_ban ){		
		$data->rollback();
		return;
	}
	$error='';
	for($i=0;$i<count($_POST['id']);$i++){
		if($_POST['id'][$i]['soluong']!=0){
			$params5 = array(
				$id_xuatkho,//		  @ID_XuatKho as int,
				$_POST['id'][$i]['idthuoc'],//   @ID_Thuoc as  int,
				$_POST['id'][$i]['soluong'],//   @SoLuong as decimal(18,0),
				0,//   @DonGia as  decimal(18,0),
				0,//   @ChietKhau as  decimal(18,0),
				1,//   @InLabel as  bit,
				$_GET["kho"],//   @ID_KHo as int,
				$ngaythuclinh,//   @NgayXuat as Date,
				array($error, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT),//   @Number_ERR as Bit output,
				0,//   @PT_VAT as int, $_POST['id'][$i]['phantramvat']
				0,//   @ThanhTien decimal(18,0), 
				0,//round ($_POST['id'][$i]['soluong']*$_POST['id'][$i]['dongia']*$_POST['id'][$i]['phantramvat']/100)//   @Tien_Vat as int
				$_GET["id_phieulinh"]
			);
			$store_name5="{call GD2_PhieuXuat_CT_CapPhatNoiTru_Add (?,?,?,?,?,?,?,?,?,?,?,?,?)}";
			//print_r($params5);		
			$get_danh_muc_phong_ban=$data->query( $store_name5, $params5);
			 if( !$get_danh_muc_phong_ban ){			 			
				$data->rollback();
				return;
			}
			if($error==1){
				$data->rollback();
				return;
			}
		}
	}
	$params_dalinh = array($_GET["id_phieulinh"]);
	$store_dalinh="{call GD2_UpdatePhieuThuoc_NoiTruDalinh (?)}";	
	$get_dalinh=$data->query( $store_dalinh, $params_dalinh);
	if( !$get_dalinh ){			 			
		$data->rollback();
		return;
	}
//	print_r($params_dalinh);
	
$data->commit();
	echo "||".$id_xuatkho."||";
}
?>

