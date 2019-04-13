<?php
switch ($_GET["oper"]) {
    case "add":
        add("Gd2_PhieuXuat_Add");
        break;
    case "edit":
        edit("Gd2_PhieuNhap_Upd");
        break;
    case "del":
        del("Gd2_PhieuNhap_DeleteByIdAndYear");
        break;
	case "confirm":
        confirm("GD2_Phieunhap_confirm");
    break;
}	 		 

function add($store_name){	
	$check1="";
	$check2="";
	$chuoi="(";
	$i=0;
	print_r($_POST);
	foreach($_POST as $key => $value) { 		  
		if($key!="Id"){
		  $bien[]= $value;			
		  $i++;			  
		  if(count($_POST)-1==$i){
		  	$chuoi.="?";
			$bien[]=array($_SESSION["user"]["year_work"]);
			$bien[]=array($_SESSION["user"]["id_user"]);
			$bien[]=array($_SESSION["user"]["id_user"]);
			$bien[]=array($check1, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT);
		  }elseif(count($_POST)-1>$i){
		  	$chuoi.="?,";  
		  }		 
		}		
	}	
	$chuoi.=",?,?,?,?)";
	//print_r($_POST);
	$data= new SQLServer;//tao lop ket noi SQL
	$store_name="{call $store_name $chuoi}";//tao bien khai bao store
	$params = $bien;//tao param cho store 
	$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store	*/
	$data= new SQLServer;//tao lop ket noi SQL
	$solo ="";
	$store_name_taolo="{call GD2_TaoLoHeThongPhieuNhapChitiet (?,?) }";//tao bien khai bao store
	$params_taolo = array(array($_SESSION["user"]["year_work"]),array($solo,SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_STRING (SQLSRV_ENC_CHAR),SQLSRV_SQLTYPE_VARCHAR(50)) );//tao param cho store 
	$get_solo=$data->query( $store_name_taolo, $params_taolo);
	echo $solo;
	
for ($ii=0;$ii<=count($_POST["Id"])-1;$ii++){
		unset($bien);
		$i=0;
		$chuoi="(";
		$store_name="GD2_PhieuXuat_CT_Add";
	foreach($_POST["Id"][$ii] as $key => $value) { 	 	      
		if(($key!="ID_XuatKho")&&($key!="TenBietDuoc")&&($key!="MaThuoc")&&($key!="TenDonViTinh")&&($key!="_id_")){			
		 // print_r($_value);
			  $bien[]= $value;			    	
			  $i++;			  
			  if(count($_POST["Id"][$ii])-5==$i){
				$chuoi.="?";
				$bien[]=$solo;
				$bien[]=array($check1);
				$bien[]=array($_SESSION["user"]["year_work"]);
				$bien[]=array($_SESSION["user"]["id_user"]);				
				$bien[]=array($check2, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT);				
			  }elseif(count($_POST["Id"][$ii])-5>$i){
				$chuoi.="?,";  
			  }		
		}
	}
	$chuoi.=",?,?,?,?,?)";
	$store_name1="{call $store_name $chuoi}";//tao bien khai bao store
	//print_r($_POST["Id"]);
	$params1 = $bien;//tao param cho store 
	$prm=$data->query( $store_name1, $params1);//Goi store
	//print_r($_POST["Id"]);
	}
		
	
}
function edit($store_name){
	//print_r($_POST);
	$check2="";
	$chuoi="(";
	$i=0;
	$_POST["NgayXuat"]=convert_date($_POST["NgayXuat"]);
	$_POST["NgayLapPhieu"]=convert_date($_POST["NgayLapPhieu"]);
	$_POST["NgayDuyet"]=convert_date($_POST["NgayDuyet"]);
	$_POST["NgayHoaDon"]=convert_date($_POST["NgayHoaDon"]);
	
	print_r($_POST);
	//echo $_POST["NgayDuyet"];
	//echo $_POST["Id"][0]["ID_XuatKho"];
	foreach($_POST as $key => $value) { 	
	      
		if($key!="Id"){
		  $bien[]= $value;				  
		  $i++;			
		  if(count($_POST)-1==$i){
		  	$chuoi.="?";	
			$bien[]=array($_SESSION["user"]["id_user"]);	
			$bien[]=array($_SESSION["user"]["year_work"]);
			$bien[]=array($_SESSION["user"]["id_user"]);	
			$bien[]=array($_POST["Id"][0]["ID_XuatKho"]);
		  }elseif(count($_POST)-1>$i){
		  	$chuoi.="?,";  
		  }		
		}		
	}
	 
	$chuoi.=",?,?,?,?)";
	;
	 
	$data= new SQLServer;//tao lop ket noi SQL
	$store_name="{call $store_name $chuoi}";//tao bien khai bao store
	$params = $bien;//tao param cho store 
	$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store	*/
	
	
	$store_name_del="{call Gd2_PhieuNhapChiTiet_DeleteByIdAndYear (?,?,?)}";
	$params_del=array($_POST["Id"][0]["ID_XuatKho"],$_SESSION["user"]["year_work"],$_SESSION["user"]["id_user"]);
	$prms1 =$data->query( $store_name_del, $params_del);
	
	for ($ii=0;$ii<=count($_POST["Id"])-1;$ii++){
		unset($bien);
		$i=0;
		$chuoi="(";
		$store_name="Gd2_PhieuNhapChiTiet_Add";
	foreach($_POST["Id"][$ii] as $key => $value) { 	 
	      
		if(($key!="ID_XuatKho")&&($key!="TenBietDuoc")&&($key!="MaThuoc")&&($key!="TenDonViTinh")&&($key!="_id_")&&($key!="SoLoHeThong")){
		 // print_r($_value);
		  $bien[]= $value;	
		    	
		  $i++;			  
		  if(count($_POST["Id"][$ii])-6==$i){
		  	$chuoi.="?";
			$bien[]=array($_POST["Id"][0]["SoLoHeThong"]);
			$bien[]=array($_POST["Id"][0]["ID_XuatKho"]);			 			
			$bien[]=array($_SESSION["user"]["year_work"]);
			$bien[]=array($_SESSION["user"]["id_user"]);
			$bien[]=array($check2, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT);			
		  }elseif(count($_POST["Id"][$ii])-6>$i){
		  	$chuoi.="?,";  
		  }		 
		}
	}
	$chuoi.=",?,?,?,?,?)";
	
	$store_name="{call $store_name $chuoi}";//tao bien khai bao store
	//print_r($bien);
	$params = $bien;//tao param cho store 
	$prm=$data->query( $store_name, $params);//Goi store
	
	}
//print_r($_POST["Id"]);
}
function del($store_name){
	$data= new SQLServer;//tao lop ket noi SQL
	$store_name="{call $store_name (?,?,?)}";//tao bien khai bao store
	$params = array( 
                 array($_POST["id"]),
				 array($_SESSION["user"]["year_work"]),
                 array($_SESSION["user"]["id_user"])
               );	
	$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store	
	$store_name1="{call Gd2_PhieuNhapChiTiet_DeleteByIdAndYear(?,?,?)}";//tao bien khai bao store	
	$get=$data->query( $store_name1, $params);	
}

function confirm($store_name){	
	$data= new SQLServer;//tao lop ket noi SQL
	$store_name="{call $store_name (?,?,?)}";//tao bien khai bao store
	$params = array( 
                 array($_GET["id"]),
				 array($_SESSION["user"]["id_user"]),
                 array($_SESSION["user"]["year_work"])
               );	
	$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store	

}
?>

