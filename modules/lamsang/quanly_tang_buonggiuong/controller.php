<?php
switch ($_GET["oper"]) {
    case "add":
        add("GD2_DMTang_add");
        break;
    case "edit":
        edit("GD2_DMTang_upd");
        break;
    case "del":
        del("GD2_DMTang_del");
        break;
    case "add_buonggiuong":
        add_buonggiuong("GD2_DMBuong_GiuongBenh_add");
        break;
    case "edit_buonggiuong":
        edit_buonggiuong("GD2_DMBuong_GiuongBenh_upd");
        break;
    case "del_buonggiuong":
        del_buonggiuong("GD2_DMBuong_GiuongBenh_del");
        break;
}	 		 

function add($store_name){	
	$check1="";
	$chuoi="(";
	$i=0;
	//print_r($_POST);
	foreach($_POST as $key => $value) { 	        
		if(($key!="oper")&&($key!="id")){
		  $bien[]= $value;			
		  $i++;			  
		  if(count($_POST)-2==$i){
		  	$chuoi.="?";
			$bien[]=array($_SESSION["user"]["id_user"]);
			$bien[]=array($check1, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT);
		  }elseif(count($_POST)-2>$i){
		  	$chuoi.="?,";  
		  }		 
		}		
	}	
	$chuoi.=",?,?)";		 
	$data= new SQLServer;//tao lop ket noi SQL
	$store_name="{call $store_name $chuoi}";//tao bien khai bao store
	$params = $bien;//tao param cho store 
	$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store	
	if($check1>0){ 
		echo "id;".$check1;
	}else{
		echo ";";
	}
}
function edit($store_name){
	$chuoi="(";
	$i=0;
	foreach($_POST as $key => $value) { 	
	      
		if($key!="oper"){
		  $bien[]= $value;				  
		  $i++;			
		  if(count($_POST)-1==$i){
		  	$chuoi.="?";			
			$bien[]=array($_SESSION["user"]["id_user"]);
		  }elseif(count($_POST)-1>$i){
		  	$chuoi.="?,";  
		  }		
		}		
	}
	 
	$chuoi.=",?)";
	
		//print_r($bien)	 ;
	$data= new SQLServer;//tao lop ket noi SQL
	$store_name="{call $store_name $chuoi}";//tao bien khai bao store
	$params = $bien;//tao param cho store 
	$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store	
	print_r($_POST);
}
function del($store_name){
	print_r($_POST);
	$check1="";
	$data= new SQLServer;//tao lop ket noi SQL
	$store_name="{call $store_name (?,?,?)}";//tao bien khai bao store
	$params = array( 
                 array($_POST["id"], SQLSRV_PARAM_IN),
				 array($_SESSION["user"]["id_user"],SQLSRV_PARAM_IN),
                 array($check1, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT)
               );	
	$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store	
	echo $check1 ;
}
function add_buonggiuong($store_name){	
	$check1="";
	$chuoi="(";
	$i=0;
	//print_r($_POST);
	foreach($_POST as $key => $value) { 	        
		if(($key!="oper")&&($key!="id")){
		  $bien[]= $value;			
		  $i++;			  
		  if(count($_POST)-2==$i){
		  	$chuoi.="?";
			$bien[]=array($_SESSION["user"]["id_user"]);
			$bien[]=array($check1, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT);
		  }elseif(count($_POST)-2>$i){
		  	$chuoi.="?,";  
		  }		 
		}		
	}	
	$chuoi.=",?,?)";		 
	$data= new SQLServer;//tao lop ket noi SQL
	$store_name="{call $store_name $chuoi}";//tao bien khai bao store
	$params = $bien;//tao param cho store 
	$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store	
	if($check1>0){ 
		echo "id;".$check1;
	}else{
		echo ";";
	}
	//print_r($_POST);
}
function edit_buonggiuong($store_name){
	$chuoi="(";
	$i=0;
	foreach($_POST as $key => $value) { 	
	      
		if($key!="oper"){
		  $bien[]= $value;				  
		  $i++;			
		  if(count($_POST)-1==$i){
		  	$chuoi.="?";			
			$bien[]=array($_SESSION["user"]["id_user"]);
		  }elseif(count($_POST)-1>$i){
		  	$chuoi.="?,";  
		  }		
		}		
	}
	 
	$chuoi.=",?)";
	
		//print_r($bien)	 ;
	$data= new SQLServer;//tao lop ket noi SQL
	$store_name="{call $store_name $chuoi}";//tao bien khai bao store
	$params = $bien;//tao param cho store 
	$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store	
	print_r($_POST);
}
function del_buonggiuong($store_name){
	print_r($_POST);
	$check1="";
	$data= new SQLServer;//tao lop ket noi SQL
	$store_name="{call $store_name (?,?,?)}";//tao bien khai bao store
	$params = array( 
                 array($_POST["id"], SQLSRV_PARAM_IN),
				 array($_SESSION["user"]["id_user"],SQLSRV_PARAM_IN),
                 array($check1, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT)
               );	
	$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store	
	echo $check1 ;
}	
?>

