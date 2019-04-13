<?php
switch ($_GET["oper"]) {
    case "add":
        add("GD2_spDM_LoaiKham_Insert");
        break;
    case "edit":
        edit("GD2_spDM_LoaiKham_Update");
        break;
    case "del":
        del("GD2_spDM_LoaiKham_Delete");
        break;
}	 		 

function add($store_name){	
	$check1='';
       
        if(!isset($_POST['XetNghiem'])){    
            $XetNghiem=0;
        }else{    
            $XetNghiem=$_POST['XetNghiem'];
         }
        if(!isset($_POST['CLS'])){    
            $CLS=0;
        }else{    
            $CLS=$_POST['CLS'];
         }
        if(!isset($_POST['CoLuuKQInRieng'])){    
            $CoLuuKQInRieng=0;
        }else{    
            $CoLuuKQInRieng=$_POST['CoLuuKQInRieng'];
         }
        if(!isset($_POST['DieuTriTaiNha'])){    
            $DieuTriTaiNha=0;
        }else{    
                $DieuTriTaiNha=$_POST['DieuTriTaiNha'];
        }
        if(!isset($_POST['CoMauNhapKQ'])){    
            $CoMauNhapKQ=0;
        }else{    
                $CoMauNhapKQ=$_POST['CoMauNhapKQ'];
        }
        if(!isset($_POST['CoTheKeToa'])){    
            $CoTheKeToa=0;
        }else{    
                $CoTheKeToa=$_POST['CoTheKeToa'];
        }
        if(!isset($_POST['ThuocNhomXepHangCLS'])){    
            $ThuocNhomXepHangCLS=0;
        }else{    
                $ThuocNhomXepHangCLS=$_POST['ThuocNhomXepHangCLS'];
        }
        if(!isset($_POST['GiaTaiNhaDieuChinhTheoNhom'])){    
            $GiaTaiNhaDieuChinhTheoNhom=0;
        }else{    
                $GiaTaiNhaDieuChinhTheoNhom=$_POST['GiaTaiNhaDieuChinhTheoNhom'];
        }
        if(!isset($_POST['CoFormChucNangRieng'])){    
            $CoFormChucNangRieng=0;
        }else{    
                $CoFormChucNangRieng=$_POST['CoFormChucNangRieng'];
        }
        if(!isset($_POST['TuyenHuyen'])){    
            $TuyenHuyen=0;
        }else{    
                $TuyenHuyen=$_POST['TuyenHuyen'];
        }
        if(!isset($_POST['TuyenTinh'])){    
            $TuyenTinh=0;
        }else{    
                $TuyenTinh=$_POST['TuyenTinh'];
        }
        if(!isset($_POST['TuyenTrungUong'])){    
            $TuyenTrungUong=0;
        }else{    
                $TuyenTrungUong=$_POST['TuyenTrungUong'];
        }
        if(!isset($_POST['Active'])){    
            $Active=0;
        }else{    
                $Active=$_POST['Active'];
        }
		
		if($_POST['GiaPhuThuBenhVien']==''){    
            $_POST['GiaPhuThuBenhVien']=null;
        }else{    
                $_POST['GiaPhuThuBenhVien']=trim($_POST['GiaPhuThuBenhVien']," ");
        }
        $data= new SQLServer;//tao lop ket noi SQL
        $store_name="{call GD2_spDM_LoaiKham_Insert(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)}";//tao bien khai bao store
        $params = array(
           trim($_POST['TenLoaiKham']," "),
           trim($_POST['ID_NhomCLS']," "),
           trim($_POST['MaVietTat']," "),
           trim($_POST['MaVietTat_BN']," "),
           trim($_POST['GiaBaoChoBN']," "),
           trim($_POST['STT']," "),
           trim($_POST['PathToTemplateFile']," "),
           trim($_POST['MoTa']," "),
           trim($_POST['GhiChu']," "),
           trim($_POST['TenLoaiKham_EN']," "),
           trim($_POST['ReportName']," "),
           trim($_POST['SoPhimLonTieuHao']," "),
           trim($_POST['SoPhimNhoTieuHao']," "),
           trim($_POST['SoPhimNhuAnhTieuHao']," "),
           trim($_POST['GiaBaoHiem']," "),
		   trim($_POST['TenBaoHiem']," "),
           trim($_POST['ID_Nhom_BHYT']," "),
           trim($_POST['LoiKhuyen']," "),     
           $XetNghiem,
           $CLS,
           $CoLuuKQInRieng,
           $DieuTriTaiNha,
           $CoMauNhapKQ,
           $CoTheKeToa,
           $ThuocNhomXepHangCLS,
           $GiaTaiNhaDieuChinhTheoNhom,
           $CoFormChucNangRieng,
           $Active,
           $_SESSION['user']['id_user'],
            
           array($check1, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT)
            
        );
		print_r($params);
       $get=$data->query( $store_name, $params);
      /* if(isset($_POST['pb'])){  
       foreach ($_POST['pb'] as $key => $value) {
           // unset($params1);
            //print_r($_POST['id']);
            $params1=array($value['ID_PhongBan'],$check1,$value['GhiChu'],$value['IsUsing'],$_SESSION['user']['id_user']);
            //print_r($params1);
            $store_name1="{call GD2_PhongBan_LoaiKham_Insert (?,?,?,?,?)}";
            //print_r($params1);
           $get2=$data->query( $store_name1, $params1);
      }};
       if(isset($_POST['ts'])){  
       foreach ($_POST['ts'] as $key => $value) {
            //unset($params1);
            //print_r($_POST['id']);
            $params2=array($check1,$value['TenXetNghiem'],$value['MoTa'],$value['DonGia'],$value['GhiChu'],$value['CanNam1'],$value['CanNam2'],$value['CanNam3'],$value['CanNam4'],$value['CanNu1'],$value['CanNu2'],$value['CanNu3'],
                $value['CanNu4'],$value['Red'],$value['Blue'],$value['Yellow'],$value['HeSoChuyenDoi'],$value['GiaTriBinhThuong1'],$value['GiaTriBinhThuong2'],$value['CoKQInRieng'],$value['CoTemplate'],$value['STT'],$value['ID_DonViTinh'],$_SESSION['user']['id_user'],);
            //print_r($params1);
            $store_name2="{call GD2_Xetnghiem_insert(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)}";
           // print_r($params1);
           $get3=$data->query( $store_name2, $params2);
      }};*/
       echo ';'.$check1;
}
function edit($store_name){
	       $check1='';
        
        if(!isset($_POST['XetNghiem'])){    
            $XetNghiem=0;
        }else{    
            $XetNghiem=$_POST['XetNghiem'];
         }
        if(!isset($_POST['CLS'])){    
            $CLS=0;
        }else{    
            $CLS=$_POST['CLS'];
         }
        if(!isset($_POST['CoLuuKQInRieng'])){    
            $CoLuuKQInRieng=0;
        }else{    
            $CoLuuKQInRieng=$_POST['CoLuuKQInRieng'];
         }
        if(!isset($_POST['DieuTriTaiNha'])){    
            $DieuTriTaiNha=0;
        }else{    
                $DieuTriTaiNha=$_POST['DieuTriTaiNha'];
        }
        if(!isset($_POST['CoMauNhapKQ'])){    
            $CoMauNhapKQ=0;
        }else{    
                $CoMauNhapKQ=$_POST['CoMauNhapKQ'];
        }
        if(!isset($_POST['CoTheKeToa'])){    
            $CoTheKeToa=0;
        }else{    
                $CoTheKeToa=$_POST['CoTheKeToa'];
        }
        if(!isset($_POST['ThuocNhomXepHangCLS'])){    
            $ThuocNhomXepHangCLS=0;
        }else{    
                $ThuocNhomXepHangCLS=$_POST['ThuocNhomXepHangCLS'];
        }
        if(!isset($_POST['GiaTaiNhaDieuChinhTheoNhom'])){    
            $GiaTaiNhaDieuChinhTheoNhom=0;
        }else{    
                $GiaTaiNhaDieuChinhTheoNhom=$_POST['GiaTaiNhaDieuChinhTheoNhom'];
        }
        if(!isset($_POST['CoFormChucNangRieng'])){    
            $CoFormChucNangRieng=0;
        }else{    
                $CoFormChucNangRieng=$_POST['CoFormChucNangRieng'];
        }
        if(!isset($_POST['TuyenHuyen'])){    
            $TuyenHuyen=0;
        }else{    
                $TuyenHuyen=$_POST['TuyenHuyen'];
        }
        if(!isset($_POST['TuyenTinh'])){    
            $TuyenTinh=0;
        }else{    
                $TuyenTinh=$_POST['TuyenTinh'];
        }
        if(!isset($_POST['TuyenTrungUong'])){    
            $TuyenTrungUong=0;
        }else{    
                $TuyenTrungUong=$_POST['TuyenTrungUong'];
        }
        if(!isset($_POST['Active'])){    
            $Active=0;
        }else{    
                $Active=$_POST['Active'];
        }
		if($_POST['GiaPhuThuBenhVien']==''){    
            $_POST['GiaPhuThuBenhVien']=null;
        }else{    
                $_POST['GiaPhuThuBenhVien']=trim($_POST['GiaPhuThuBenhVien']," ");
        }
        $data= new SQLServer;//tao lop ket noi SQL
        $store_name="{call GD2_spDM_LoaiKham_Update(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)}";//tao bien khai bao store
        $params = array(
            $_GET['id'],
           trim($_POST['TenLoaiKham']," "),
           trim($_POST['ID_NhomCLS']," "),
           trim($_POST['MaVietTat']," "),
           trim($_POST['MaVietTat_BN']," "),
           trim($_POST['GiaBaoChoBN']," "),
           0,
           0,
          0,
           trim($_POST['STT']," "),
           trim($_POST['PathToTemplateFile']," "),
           trim($_POST['MoTa']," "),
           trim($_POST['GhiChu']," "),
           trim($_POST['TenLoaiKham_EN']," "),
           trim($_POST['ReportName']," "),
           trim($_POST['PhanTramDieuChinhGiaTaiNha']," "),
           trim($_POST['PhuThuThucHienTaiNha']," "),
           trim($_POST['SoPhimLonTieuHao']," "),
           trim($_POST['SoPhimNhoTieuHao']," "),
           trim($_POST['SoPhimNhuAnhTieuHao']," "),
           0,
            $_POST['GiaPhuThuBenhVien'],
		   trim($_POST['MauBaoHiem']," "),
		   trim($_POST['TenBaoHiem']," "),
           trim($_POST['ID_Nhom_BHYT']," "),
            trim($_POST['LoiKhuyen']," "),     
           $XetNghiem,
           $CLS,
           $CoLuuKQInRieng,
           $DieuTriTaiNha,
           $CoMauNhapKQ,
           $CoTheKeToa,
           $ThuocNhomXepHangCLS,
           $GiaTaiNhaDieuChinhTheoNhom,
           $CoFormChucNangRieng,
           $TuyenHuyen,
           $TuyenTinh,
           $TuyenTrungUong,
           $Active,
           $_SESSION['user']['id_user'],
           array($check1, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT)   
        );
         
         echo ';'.$check1;
       $get=$data->query( $store_name, $params);
	   
      /* $params1=array($_GET['id']);
      // print_r($params1);
       $get1=$data->query( "{call GD2_PhongBan_LoaiKham_SelectAllByID_LoaiKham(?)}", $params1);
       $excute= new SQLServerResult($get1);
        $tam= $excute->get_as_array();
         foreach ($tam as $row) {//duyet toan bo mang tra ve
            $params2=array($row["ID_PhongBan_LoaiKham"],$_SESSION['user']['id_user']);
            $get_del=$data->query( "{call GD2_PhongBan_LoaiKham_Delete(?,?)}", $params2);
       }
        $get3=$data->query( "{call GD2_xetnghiem_selectAllby_ID_LuotKham(?)}", $params1);
       $excute2= new SQLServerResult($get3);
        $tam2= $excute2->get_as_array();
        print_r($params1);
         foreach ($tam2 as $row) {//duyet toan bo mang tra ve
            $params3=array($row["ID_LoaiKham"],$_SESSION['user']['id_user']);
            $get_del2=$data->query( "{call GD2_XetNghiem_DeleteAllByID_LoaiKham(?)}", $params3);
       }
       
       //print_r($params2);
      // print_r($params3);
       if(isset($_POST['pb'])){  
       foreach ($_POST['pb'] as $key => $value) {
            unset($params1);
            //print_r($_POST['id']);
            $params1=array($value['ID_PhongBan'],$_GET['id'],$value['GhiChu'],$value['IsUsing'],$_SESSION['user']['id_user']);
           
            $store_name1="{call GD2_PhongBan_LoaiKham_Insert (?,?,?,?,?)}";
            //print_r($params1);
           $get2=$data->query( $store_name1, $params1);
      }};*/
     
      
    /*    if(isset($_POST['ts'])){  
       foreach ($_POST['ts'] as $key => $value) {
            unset($params1);
            //print_r($_POST['id']);
            $params4=array($_GET['id'],$value['TenXetNghiem'],$value['MoTa'],$value['DonGia'],$value['GhiChu'],$value['CanNam1'],$value['CanNam2'],$value['CanNam3'],$value['CanNam4'],$value['CanNu1'],$value['CanNu2'],$value['CanNu3'],
                $value['CanNu4'],$value['Red'],$value['Blue'],$value['Yellow'],$value['HeSoChuyenDoi'],$value['GiaTriBinhThuong1'],$value['GiaTriBinhThuong2'],$value['CoKQInRieng'],$value['CoTemplate'],$value['STT'],$value['ID_DonViTinh'],$_SESSION['user']['id_user'],);
           // print_r($params1);
            $store_name2="{call GD2_Xetnghiem_insert(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)}";
            //print_r($params1);
           $get4=$data->query( $store_name2, $params4);
      }};*/
     
}
function del($store_name){
	//print_r($_POST);
	$check1="";
	$data= new SQLServer;//tao lop ket noi SQL
	$store_name="{call $store_name (?,?,?)}";//tao bien khai bao store
	$params = array( 
                 array($_POST["id"], SQLSRV_PARAM_IN),
				 array($_SESSION["user"]["id_user"],SQLSRV_PARAM_IN),
                 array($check1, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT)
               );	
	$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store	
}
?>

