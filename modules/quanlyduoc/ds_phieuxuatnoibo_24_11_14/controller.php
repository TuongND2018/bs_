<?php
//print_r($_POST);
$loi=0;
$data= new SQLServer;//tao lop ket noi SQL
$begin_tran=$data->begin_tran();
//if(isset($_POST['id'])){
	$id_xuatkho='';
	//if(count($_POST['id'])>0){
	$date = date('Y-m-d H:i:s');
	$id_xuatkho='';
		$params4 = array(
		'',//  @MaPhieu nvarchar(50),
		$date,//   @NgayLapPhieu datetime,
		$date,//   @NgayXuat datetime,
		-1,//   @ID_NCC int,
		$_SESSION["user"]["id_user"],//   @ID_NhanVien int,
		'',//   @TenKhachHang nvarchar(50),
		0,//   @PercentVAT int,
		0,//   @TienVAT decimal(18,1),
		0,//   @ChietKhau decimal(18,0),
		0,//   @IsPercent bit,
		0,//   @ThanhTien decimal(18,0),
		'',//   @GhiChu nvarchar(200),
		1,//   @ID_Kho int,
		86,//   @ID_LoaiNhapXuat int,
		'',//   @IDDonThuoc int,
		0,//   @DaThanhToan bit,
		$_SESSION["user"]["id_user"],//   @ID_NguoiDuyet int,
		$date,//   @NgayDuyet smalldatetime,
		0,//   @IsXuatChoToaTam bit,
		2014,//   @Year int,
		-3,//   @ID_NhapKho int,
		array($id_xuatkho, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT)//   @ID_XUATKHO int out
		);
		//print_r ($params4);
		
		$store_name4="{call Gd2_PhieuXuat_Add (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)}";
		$get_danh_muc_phong_ban=$data->query( $store_name4, $params4);
		if( !$get_danh_muc_phong_ban ){		
			$data->rollback();
			$loi=1;
			return;
		}
		echo ";".$id_xuatkho.";";
	//}
	$error='';
	$params22 = array($_GET['idxuatnoibo']);//tao param cho store 
	$store_name22="{call GD2_SelectDsThuocByID_PhieuXuatNoiBo(?)}";//tao bien khai bao store
	$get_danh_muc_phong_ban22=$data->query( $store_name22,$params22);//Goi store
	$excute22= new SQLServerResult($get_danh_muc_phong_ban22);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
	$tam= $excute22->get_as_array();//Tra ve mang toan bo data lay duoc 
	foreach ($tam as $row){
		if($row['ID_Thuoc']!=''){
			$params5 = array(
				$id_xuatkho,//		  @ID_XuatKho as int,
				$row['ID_Thuoc'],//   @ID_Thuoc as  int,
				convert_comma_dot_insert($row['SoLuong']),//   @SoLuong as decimal(18,0),
				0,//$value['dongia'],//   @DonGia as  decimal(18,0),
				0,//   @ChietKhau as  decimal(18,0),
				0,//   @InLabel as  bit,
				1,//   @ID_KHo as int,
				$date,//   @NgayXuat as Date,
				array($error, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT),//   @Number_ERR as Bit output,
				0,//   @PT_VAT as int,
				0,//   @ThanhTien decimal(18,0), 
				0//   @Tien_Vat as int
				);
			//print_r($params5);
			$store_name5="{call GD2_PhieuXuat_CT_Add (?,?,?,?,?,?,?,?,?,?,?,?)}";	 
			$get_danh_muc_phong_ban=$data->query( $store_name5, $params5);	
			if( !$get_danh_muc_phong_ban ){		 	
				$data->rollback();
				$loi=1;
				return;
			}
			if($error==1){
				$data->rollback();
				$loi=1;
				echo "1;".$row['TenGoc'],';';
				return;
			}
		}	
	}
	$params6 = array($_GET['idxuatnoibo'],$id_xuatkho,NULL);
	//print_r($params5);
	$store_name6="{call GD2_PhieuXuatNoiBo_Update_XuatKho (?,?,?)}";	 
	$get_update=$data->query( $store_name6, $params6);	
	if( !$get_update ){		 	
		$data->rollback();
		$loi=1;
		return;
	}
//}
$data->commit();
return;
?>