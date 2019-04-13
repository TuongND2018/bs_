<?php	 
	$username=$_GET["username"];
	$password=$_GET["password"]; 	 
	setcookie("tendangnhap", $_GET["c_tendangnhap"],time() + (10 * 365 * 24 * 60 * 60));
	$data= new SQLServer;//tao lop ket noi SQL
	$store_name="{call GD2_DMNHANVIEN_VALIDATE(?,?)}";//tao bien khai bao store
	$params =array($username,$password);//tao param cho store 	
	$get_login=$data->select_store( $store_name, $params);//Goi store
	$excute= new SQLServerResult($get_login);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
	$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc
	if(count($tam)==0){
		echo "Thông tin đăng nhập không đúng, vui lòng thử lại!";
		return;
	}else{		 
	 	foreach ($tam as $v) {//duyet toan bo mang tra ve		
	  		$_SESSION["user"]["fullname"]= $v["HoLotNhanVien"]." ".$v["TenNhanVien"]; 
			$_SESSION["user"]["id_user"]= $v["ID_NhanVien"]; 
			$_SESSION["user"]["id_phongban"]= $v["ID_PhongBan"];
			$_SESSION["user"]["year_work"]= date("Y");//năm làm việc
			$_SESSION["user"]["nickname"]= $v["NickName"]; 
			$_SESSION["user"]["username"]= $v["UserName"]; 
			if($v["ID_ChucVu"]==''){
				$_SESSION["user"]["chucvu"]=0;
			}else{
				$_SESSION["user"]["chucvu"]= $v["ID_ChucVu"]; 
			}
			$_SESSION["user"]["IsDoctor"]= $v["IsDoctor"]; 
			$_SESSION["user"]["login"]=true; 
			echo "true";   
	 	}		
		
		
	}
	//print_r($_SESSION["phimtat"]);
	$_SESSION["ThongTinBenhNhan"]["ID"]="";
	$_SESSION["ThongTinBenhNhan"]["ten"]="";	
	$_SESSION["ThongTinBenhNhan"]["tuoi"]="";
	$_SESSION["ThongTinBenhNhan"]["dienthoai"]="";
	$_SESSION["ThongTinBenhNhan"]["diachi"]="";
	$_SESSION["ThongTinBenhNhan"]["chieucao"]="";
	$_SESSION["ThongTinBenhNhan"]["cannang"]="";	
	$_SESSION["ThongTinBenhNhan"]["danhgia1"]="";
	$_SESSION["ThongTinBenhNhan"]["danhgia2"]="";
	$_SESSION["ThongTinBenhNhan"]["danhgia3"]="";
	$_SESSION["ThongTinBenhNhan"]["ps"]="";
	$_SESSION["ThongTinBenhNhan"]["pd"]="";
	$_SESSION["ThongTinBenhNhan"]["hr"]="";
	$_SESSION["ThongTinBenhNhan"]["temp"]="";
	

?>