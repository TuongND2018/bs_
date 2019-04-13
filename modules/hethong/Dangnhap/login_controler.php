<?php 
	$username=$_GET["username"];
	$password=$_GET["password"]; 
	$data= new SQLServer;//tao lop ket noi SQL
	$store_name="{call GD2_DMNHANVIEN_VALIDATE(?,?)}";//tao bien khai bao store
	$params =array($username,$password);//tao param cho store 	
	$get_login=$data->select_store( $store_name, $params);//Goi store
	$excute= new SQLServerResult($get_login);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
	$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc
	if(count($tam)==0){
		echo "Thông tin đăng nhập không đúng, vui lòng thử lại!";
	}else{	 			  
	 	foreach ($tam as $v) {//duyet toan bo mang tra ve
	  		$_SESSION["fullname"]= $v["HoLotNhanVien"]." ".$v["TenNhanVien"]; 
			$_SESSION["id_user"]= $v["ID_NhanVien"]; 
			$_SESSION["id_phongban"]= $v["ID_PhongBan"];
			$_SESSION["year_work"]= date("Y");//năm làm việc
			$_SESSION["nickname"]= $v["NickName"]; 
			$_SESSION["login"]=true; 
			echo "true";   
	 	}		
	}
?>