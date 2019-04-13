<?php
	$data= new SQLServer;
	$erro='';
	$id_xuatkho='';
	$begin_tran=$data->begin_tran();
	
	
	$params4 = array(
		'',//  @MaPhieu nvarchar(50),
		'2014/03/01',//   @NgayLapPhieu datetime,
		'2014/03/01',//   @NgayXuat datetime,
		-1,//   @ID_NCC int,
		1,
		1,//   @TenKhachHang nvarchar(50),
		0,//   @PercentVAT int,
		1,//   @TienVAT decimal(18,1),
		0,//   @ChietKhau decimal(18,0),
		0,//   @IsPercent bit,
		1,//   @ThanhTien decimal(18,0),
		'',//   @GhiChu nvarchar(200),
		1,//   @ID_Kho int,
		89,//   @ID_LoaiNhapXuat int,
		1,//   @IDDonThuoc int,
		1,//   @DaThanhToan bit,
		1,//   @ID_NguoiDuyet int,
		'2014/03/01',//   @NgayDuyet smalldatetime,
		0,//   @IsXuatChoToaTam bit,
		2014,//   @Year int,
		-1,//   @ID_NhapKho int,
		array($id_xuatkho, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT)//   @ID_XUATKHO int out

		);
		//print_r ($params4);
	$store_name4="{call Gd2_PhieuXuat_Add (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)}";
	$get1=$data->query( $store_name4, $params4);
	
	
	
	
	
	
	
	
	$params5 = array(
		1,//		  @ID_XuatKho as int,
		200,//   @ID_Thuoc as  int,
		200,//   @SoLuong as decimal(18,0),
		200,//   @DonGia as  decimal(18,0),
		0,//   @ChietKhau as  decimal(18,0),
		1,//   @InLabel as  bit,
		1,//   @ID_KHo as int,
		'2014/03/01',//   @NgayXuat as Date,
		array($erro, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT),//   @Number_ERR as Bit output,
		10,//   @PT_VAT as int,
		20,//   @ThanhTien decimal(18,0),
		20
		

		);
	$store_name5="{call GD2_PhieuXuat_CT_Add (?,?,?,?,?,?,?,?,?,?,?,?)}";
	$get2=$data->query( $store_name5, $params5);
	if($get2) {
     $data->commit();
     echo "Transaction committed.<br />";
	} else {
     $data->rollback();
     echo "Transaction rolled back.<br />";
	}
?>

