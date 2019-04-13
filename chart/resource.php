<?php
session_start();
if(isset($_GET["view"])){$view = $_GET["view"];};
if(isset($_GET["action"])){$action = $_GET["action"];};
if(isset($_GET["id_form"])){$id_form = $_GET["id_form"];};
if(isset($_GET["module"])){$modules = $_GET["module"];};
if(isset($_GET["module"])){$modules = $_GET["module"];}; 
if(isset($_GET["public"])){
	
 	if(isset($_GET["module"])&&($_GET["function"]="printer_check")){
			include("class/class.sqlserver.php");
			include("modules/".$modules."/$action.php");
			return;	 
	}
};
	if((!isset($_SESSION["user"]["login"]))&&($_GET["module"]!="login")){
		echo "Vui lòng đăng nhập"; 
		return;
	}
include("class/class.sqlserver.php");
include("class/basic_function.php");

if(isset($_GET["type"])){
	include("class/ExportToExcel.class.php");
	$types = $_GET["type"];
}else{
	$types ="";
};
if(!isset($view)){
	if(!isset($action)){
		include("header_modules.php");
		include("class/language.php");
		phanquyen($id_form);
		include("modules/".$modules."/index.php");		
	}else{		 
		include("modules/".$modules."/$action.php");		
	}
}else{	
	if(!isset($action)){
		include("header_modules.php");
		include("class/language.php");
                //kha add 19/11/13------------
                include("class/php_common/func.php");
                //----------------------------
		phanquyen($id_form);
		include("modules/".$modules."/".$view."/index.php");	 
	}else{	    
	  if(($types=="report")||($types=="test")){
		//if($types=="print"){			 
			include("header_modules.php");
			include("class/language.php");
			phanquyen($id_form);
		//}
		//echo "chinh";
	  }	
		include("modules/".$modules."/".$view."/$action.php");
	}	
}
function phanquyen($id_form){
	echo '<script type="text/javascript">';
	echo ' var permission=[];';
	echo ' var phimtat=[];';
	
	$data= new SQLServer;
	$store_name="{call Gd2_quyennhanvien_button_get(?,?)}";
	$params = array($_SESSION["user"]["id_user"],$id_form);
	$get_main_menu=$data->query( $store_name, $params);
	$excute= new SQLServerResult($get_main_menu);
	$tam= $excute->get_as_array();     
	//print_r($store_name);
	$i=0;
	
				foreach ($tam as $v) {		
					     
						/*if($v["Active"]==1){							
							$v["Active1"]=true;
							 
						}else{
							$v["Active1"]=false;
						}*/
						echo "permission['$v[TenControl]']=$v[Active];\n" ;      
						 //$permission->v[$i][TenControl]=$v["TenControl"];
						 //$permission->v[$i][Caption]=$v["Caption"];
						 $i++;
				}  
			//print_r($_SESSION["phimtat"]);
				if(isset($_SESSION["phimtat"])){
				echo 'function openform_shortcutkey(){';
				echo  '$("body").keydown(function(e){';
				for($i=0;$i<=count($_SESSION["phimtat"])-1;$i++){
				$pageopen=	explode(":", $_SESSION["phimtat"][$i][2]);
				
				if($i==0){
					if(strtolower($_SESSION["phimtat"][$i][0])=='f6'){
						echo 'if(jwerty.is("'.$_SESSION["phimtat"][$i][0].'",e)){
						if(typeof idluotkham === "undefined"){
  							idluotkham="undefined";
						 };
						 if(typeof id_benhnhan === "undefined"){
  							id_benhnhan="undefined";
						 };
						jwerty.key("'.$_SESSION["phimtat"][$i][0].'", false);
						parent.postMessage("benhan_luotkham;'.$pageopen[0].';"+idluotkham+";"+id_benhnhan , "*");											
						}';		
					}elseif(strtolower($_SESSION["phimtat"][$i][0])=='f7'){
							echo 'if(jwerty.is("'.$_SESSION["phimtat"][$i][0].'",e)){
						if(typeof idluotkham === "undefined"){
  							idluotkham="undefined";
						 };
						 if(typeof id_benhnhan === "undefined"){
  							id_benhnhan="undefined";
						 };
						jwerty.key("'.$_SESSION["phimtat"][$i][0].'", false);
						parent.postMessage("edit_luotkham;'.$pageopen[0].';"+idluotkham+";"+id_benhnhan , "*");											
						}';	
					}else{
						echo 'if(jwerty.is("'.$_SESSION["phimtat"][$i][0].'",e)){
						jwerty.key("'.$_SESSION["phimtat"][$i][0].'", false);
						parent.postMessage("opentab;'.$pageopen[0].';" , "*");						
						}';	
					}
				}else{
					if(strtolower($_SESSION["phimtat"][$i][0])=='f6'){
						echo 'if(jwerty.is("'.$_SESSION["phimtat"][$i][0].'",e)){
						if(typeof idluotkham === "undefined"){
  							idluotkham="undefined";
						 };
						 if(typeof id_benhnhan === "undefined"){
  							id_benhnhan="undefined";
						 };
						jwerty.key("'.$_SESSION["phimtat"][$i][0].'", false);
						parent.postMessage("benhan_luotkham;'.$pageopen[0].';"+idluotkham+";"+id_benhnhan, "*");	
																
						}';	
					}elseif(strtolower($_SESSION["phimtat"][$i][0])=='f7'){
							echo 'if(jwerty.is("'.$_SESSION["phimtat"][$i][0].'",e)){
						if(typeof idluotkham === "undefined"){
  							idluotkham="undefined";
						 };
						 if(typeof id_benhnhan === "undefined"){
  							id_benhnhan="undefined";
						 };
						jwerty.key("'.$_SESSION["phimtat"][$i][0].'", false);
						parent.postMessage("edit_luotkham;'.$pageopen[0].';"+idluotkham+";"+id_benhnhan , "*");	
																
						}';
					}else{
						echo 'if(jwerty.is("'.$_SESSION["phimtat"][$i][0].'",e)){
						jwerty.key("'.$_SESSION["phimtat"][$i][0].'", false);
						parent.postMessage("opentab;'.$pageopen[0].';" , "*");						
						}';	
					}
					
				}
				}
				echo  '})';
			echo '}';
				}
	echo '</script>';

	//print_r($_SESSION["phimtat"]);		
	
}
?>