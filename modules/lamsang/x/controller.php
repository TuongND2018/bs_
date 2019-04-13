<?php
switch ($_GET["oper"]) {
    case "dathuchien":
        dathuchien();
        break;
    case "luudangkham":
        luudangkham();
        break;
	case "luuthuchien":
        luuthuchien();
        break;
    case "hoantat":
        hoantat();
        break;
	case "luuhoantat":
        luuhoantat();
        case "luu":
           luu("GD2_FRAMINGHAM_Update");
        break;
}	 		 
function dathuchien($store_name){	
	$data= new SQLServer;//tao lop ket noi SQL
	$params=  array($_POST["id_kham"],$_POST["nguoithuchien"],$_SESSION["user"]["id_user"]);
	$store_name="{call GD2_Kham_dathuchien_khamthai (?,?,?)}";//tao bien khai bao store
	$data->query( $store_name, $params);

	
	//=====================
	if($_POST["idkhamthai"]==0 && $_POST["idkhamthai"]!=""){
	$check='';
	//$chuoi='(? ,?,?,?,?,?,?,?,?,?,? ,?,?,?,?,?,?,? ,?,?,?,?,? ,?,?,?,?,?,?,?,?,? ,?,?,?,?,?,?,?,?,?,?,?,? ,?,?,?,? ,?,?,?,? ,?,?,? ,?,?  )';
	$chuoi='(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)';
	$tam=explode("/", $_POST['NgayKinhCuoi']);
	$tam2=explode("/", $_POST['NgaySinhDuKien']);
	$ngaykinhcuoi=$tam[1]."/".$tam[0]."/20".$tam[2];
	$ngaysinhdukien= $tam2[1]."/".$tam2[0]."/20".$tam2[2];
     $params=  array(($_POST["id_kham"]),($_POST["timmach"]),($_POST["daiduong"]),($_POST["bassdown"]),($_POST["than"]),($_POST["roiloandongmau"]),($_POST['viemganb']),($_POST['rubella']),($_POST['tamthan']),($_POST['viemganc']),($_POST['cacbenhdamac_khac']),($_POST['tiemphong_rubella']),($_POST['tiemphong_thuydau']),($_POST['tiemphong_quaibi']),($_POST['tiemphong_uonvansosinh']),($_POST['tiemphong_cum']),($_POST['tiemphong_viemganb']),($_POST['tiemphong_somui']),($_POST['lalandautienkhamthai']),($_POST['KT_SoTuanThai']),($_POST['KT_SoNgayThai']),($ngaysinhdukien),($ngaykinhcuoi),($_POST['non']),($_POST['buonnon']),($_POST['metmoi']),($_POST['daubungduoi']),($_POST['ramauamdao']),($_POST['dauthuongvi']),($_POST['daudau']),($_POST['daumat']),($_POST['dauhieubatthuong']),($_POST['para1']."-".$_POST['para2']."-".$_POST['para3']."-".$_POST['para4']),($_POST['thaichetluu']),($_POST['sangiat']),($_POST['chaymautruocsanh']),($_POST['dekho']),($_POST['binhthuong']),($_POST['banghuyet']),($_POST['molaythai']),($_POST['deconduoi2500gr']),($_POST['conchetsaude']),($_POST['tiensusanphukhoa_ketluan']),($_POST['tiensubenhvaskchong_ketluan']),($_POST['ketluan_khamnoikhoa']),($_POST['ketluan_khamphukhoa']),($_POST['ketluan_khamvu']),($_POST['ketluan_khamkhac']),($_POST['ktt_binhthuong']),($_POST['ktt_phutoanthan']),($_POST['ktt_phu2chiduoi']),($_POST['ktt_daxanhdiemmacnhot']),($_POST['ketluan_khamsankhoa']),($_POST['ketluan_ketluan']),($_POST['ketluan_denghi']),$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));

	$store_name="{call GD2_Khamthai_Insert $chuoi}";//tao bien khai bao store
	$get=$data->query( $store_name, $params);

	//=====================
	}else if($_POST["idkhamthai"]!=""){
		//=====================

	$chuoi='(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)';
	$tam=explode("/", $_POST['NgayKinhCuoi']);
	$tam2=explode("/", $_POST['NgaySinhDuKien']);
	$ngaykinhcuoi=$tam[1]."/".$tam[0]."/20".$tam[2];
	$ngaysinhdukien= $tam2[1]."/".$tam2[0]."/20".$tam2[2];
	$params=  array(($_POST["idkhamthai"]),($_POST["timmach"]),($_POST["daiduong"]),($_POST["bassdown"]),($_POST["than"]),($_POST["roiloandongmau"]),($_POST['viemganb']),($_POST['rubella']),($_POST['tamthan']),($_POST['viemganc']),($_POST['cacbenhdamac_khac']),($_POST['tiemphong_rubella']),($_POST['tiemphong_thuydau']),($_POST['tiemphong_quaibi']),($_POST['tiemphong_uonvansosinh']),($_POST['tiemphong_cum']),($_POST['tiemphong_viemganb']),($_POST['tiemphong_somui']),($_POST['lalandautienkhamthai']),($_POST['KT_SoTuanThai']),($_POST['KT_SoNgayThai']),($ngaysinhdukien),($ngaykinhcuoi),($_POST['non']),($_POST['buonnon']),($_POST['metmoi']),($_POST['daubungduoi']),($_POST['ramauamdao']),($_POST['dauthuongvi']),($_POST['daudau']),($_POST['daumat']),($_POST['dauhieubatthuong']),($_POST['para1']."-".$_POST['para2']."-".$_POST['para3']."-".$_POST['para4']),($_POST['thaichetluu']),($_POST['sangiat']),($_POST['chaymautruocsanh']),($_POST['dekho']),($_POST['binhthuong']),($_POST['banghuyet']),($_POST['molaythai']),($_POST['deconduoi2500gr']),($_POST['conchetsaude']),($_POST['tiensusanphukhoa_ketluan']),($_POST['tiensubenhvaskchong_ketluan']),($_POST['ketluan_khamnoikhoa']),($_POST['ketluan_khamphukhoa']),($_POST['ketluan_khamvu']),($_POST['ketluan_khamkhac']),($_POST['ktt_binhthuong']),($_POST['ktt_phutoanthan']),($_POST['ktt_phu2chiduoi']),($_POST['ktt_daxanhdiemmacnhot']),($_POST['ketluan_khamsankhoa']),($_POST['ketluan_ketluan']),($_POST['ketluan_denghi']),$_SESSION["user"]["id_user"]);

		$store_name="{call GD2_Khamthai_Update $chuoi}";//tao bien khai bao store
		$get=$data->query( $store_name, $params);//Goi store	

		//=====================
	}//and else
}


function luudangkham(){
	$data= new SQLServer;//tao lop ket noi SQL
	//=====================
	if($_POST["idkhamthai"]==0 && $_POST["idkhamthai"]!=""){
	$check='';
	//$chuoi='(? ,?,?,?,?,?,?,?,?,?,? ,?,?,?,?,?,?,? ,?,?,?,?,? ,?,?,?,?,?,?,?,?,? ,?,?,?,?,?,?,?,?,?,?,?,? ,?,?,?,? ,?,?,?,? ,?,?,? ,?,?  )';
	$chuoi='(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)';
	$tam=explode("/", $_POST['NgayKinhCuoi']);
	$tam2=explode("/", $_POST['NgaySinhDuKien']);
	$ngaykinhcuoi=$tam[1]."/".$tam[0]."/20".$tam[2];
	$ngaysinhdukien= $tam2[1]."/".$tam2[0]."/20".$tam2[2];
     $params=  array(($_POST["id_kham"]),($_POST["timmach"]),($_POST["daiduong"]),($_POST["bassdown"]),($_POST["than"]),($_POST["roiloandongmau"]),($_POST['viemganb']),($_POST['rubella']),($_POST['tamthan']),($_POST['viemganc']),($_POST['cacbenhdamac_khac']),($_POST['tiemphong_rubella']),($_POST['tiemphong_thuydau']),($_POST['tiemphong_quaibi']),($_POST['tiemphong_uonvansosinh']),($_POST['tiemphong_cum']),($_POST['tiemphong_viemganb']),($_POST['tiemphong_somui']),($_POST['lalandautienkhamthai']),($_POST['KT_SoTuanThai']),($_POST['KT_SoNgayThai']),($ngaysinhdukien),($ngaykinhcuoi),($_POST['non']),($_POST['buonnon']),($_POST['metmoi']),($_POST['daubungduoi']),($_POST['ramauamdao']),($_POST['dauthuongvi']),($_POST['daudau']),($_POST['daumat']),($_POST['dauhieubatthuong']),($_POST['para1']."-".$_POST['para2']."-".$_POST['para3']."-".$_POST['para4']),($_POST['thaichetluu']),($_POST['sangiat']),($_POST['chaymautruocsanh']),($_POST['dekho']),($_POST['binhthuong']),($_POST['banghuyet']),($_POST['molaythai']),($_POST['deconduoi2500gr']),($_POST['conchetsaude']),($_POST['tiensusanphukhoa_ketluan']),($_POST['tiensubenhvaskchong_ketluan']),($_POST['ketluan_khamnoikhoa']),($_POST['ketluan_khamphukhoa']),($_POST['ketluan_khamvu']),($_POST['ketluan_khamkhac']),($_POST['ktt_binhthuong']),($_POST['ktt_phutoanthan']),($_POST['ktt_phu2chiduoi']),($_POST['ktt_daxanhdiemmacnhot']),($_POST['ketluan_khamsankhoa']),($_POST['ketluan_ketluan']),($_POST['ketluan_denghi']),$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));

	$store_name="{call GD2_Khamthai_Insert $chuoi}";//tao bien khai bao store
	$get=$data->query( $store_name, $params);
	echo $_POST["idkhamthai"];
	//print_r($params);
	//=====================
	}else if($_POST["idkhamthai"]!=""){
		//=====================
	//$chuoi='(? ,?,?,?,?,?,?,?,?,?,? ,?,?,?,?,?,?,? ,?,?,?,?,? ,?,?,?,?,?,?,?,?,? ,?,?,?,?,?,?,?,?,?,?,?,? ,?,?,?,? ,?,?,?,? ,?,?,? ,?)';
	$chuoi='(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)';
	$tam=explode("/", $_POST['NgayKinhCuoi']);
	$tam2=explode("/", $_POST['NgaySinhDuKien']);
	$ngaykinhcuoi=$tam[1]."/".$tam[0]."/20".$tam[2];
	$ngaysinhdukien= $tam2[1]."/".$tam2[0]."/20".$tam2[2];
	$params=  array(($_POST["idkhamthai"]),($_POST["timmach"]),($_POST["daiduong"]),($_POST["bassdown"]),($_POST["than"]),($_POST["roiloandongmau"]),($_POST['viemganb']),($_POST['rubella']),($_POST['tamthan']),($_POST['viemganc']),($_POST['cacbenhdamac_khac']),($_POST['tiemphong_rubella']),($_POST['tiemphong_thuydau']),($_POST['tiemphong_quaibi']),($_POST['tiemphong_uonvansosinh']),($_POST['tiemphong_cum']),($_POST['tiemphong_viemganb']),($_POST['tiemphong_somui']),($_POST['lalandautienkhamthai']),($_POST['KT_SoTuanThai']),($_POST['KT_SoNgayThai']),($ngaysinhdukien),($ngaykinhcuoi),($_POST['non']),($_POST['buonnon']),($_POST['metmoi']),($_POST['daubungduoi']),($_POST['ramauamdao']),($_POST['dauthuongvi']),($_POST['daudau']),($_POST['daumat']),($_POST['dauhieubatthuong']),($_POST['para1']."-".$_POST['para2']."-".$_POST['para3']."-".$_POST['para4']),($_POST['thaichetluu']),($_POST['sangiat']),($_POST['chaymautruocsanh']),($_POST['dekho']),($_POST['binhthuong']),($_POST['banghuyet']),($_POST['molaythai']),($_POST['deconduoi2500gr']),($_POST['conchetsaude']),($_POST['tiensusanphukhoa_ketluan']),($_POST['tiensubenhvaskchong_ketluan']),($_POST['ketluan_khamnoikhoa']),($_POST['ketluan_khamphukhoa']),($_POST['ketluan_khamvu']),($_POST['ketluan_khamkhac']),($_POST['ktt_binhthuong']),($_POST['ktt_phutoanthan']),($_POST['ktt_phu2chiduoi']),($_POST['ktt_daxanhdiemmacnhot']),($_POST['ketluan_khamsankhoa']),($_POST['ketluan_ketluan']),($_POST['ketluan_denghi']),$_SESSION["user"]["id_user"]);
				
		$store_name="{call GD2_Khamthai_Update $chuoi}";//tao bien khai bao store
		$get=$data->query( $store_name, $params);//Goi store	
		echo $_POST["idkhamthai"]."----update----<br>";
	//print_r($params);
		//=====================
	}//and else
 
}




function luu($store_name){
	$chuoi="(";
	$i=0;
	$check1="";

        
   
        unset($_POST["High"]);
        unset($_POST["Weight"]);
        unset($_POST["oper"]);
 
/*	foreach($_POST as $key => $value) { 	
	      echo $key.": ".urldecode($value).";"."<br>";
		if($key!="oper"){
		  $bien[]=urldecode($value) ;				  
		  $i++;			
		  if(count($_POST)==$i){
			$bien[]=array($check1, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT);
		  	$chuoi.="?";			
		  }elseif(count($_POST)>$i){
		  	$chuoi.="?,";  
		  }		
		}		
	}

    			
	$chuoi.=",?)";*/
        $chuoi2='(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)';

     $bien2=  array(
($_POST["Smoker"]),
($_POST["CVD"]),
($_POST["DIABET"]),
($_POST["Treated"]),
($_POST["Murmur"]),
($_POST["LVH"]),
($_POST["CigsOnDate"]),
($_POST["Valve"]),
($_POST["AF"]),	
($_POST["IC"]),	
($_POST["CHD"]),
($_POST["HF"]),
($_POST["SBP"]),
($_POST["HRate"]),
($_POST["DBP"]),
($_POST["PR"]),
($_POST["HDLMol"]),
($_POST["CHOMol"]),
($_POST["TG"]),
($_POST["LDLMol"]),
($_POST["Glucoserum"]),
($_POST["id_kham"]),
 $_SESSION["user"]["id_user"]
     	);


/*     Smoker: 1;
CVD: 0;
DIABET: 0;
Treated: 0;
Murmur: 0;
LVH: 0;
CigsOnDate: 10;
Valve: 0;
AF: 0;
IC: 0;
CHD: 0;
HF: 0;
SBP: 110.00;
HRate: 95;
DBP: 70;
PR: 156;
HDLMol: 1.22;
CHOMol: 5.30;
TG: 1.60;
LDLMol: 3.77;
Glucoserum: ;
id_kham: 934604;
*/
    //   print_r($bien2);
	$data= new SQLServer;//tao lop ket noi SQL
	$store_name="{call $store_name $chuoi2}";//tao bien khai bao store
	$params = $bien2;//tao param cho store 
print_r($bien2);
	$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store	
	//echo $get_danh_muc_phong_ban;
}

function luuthuchien(){
	$data= new SQLServer;//tao lop ket noi SQL
	$params=  array($_POST["id_kham"],$_POST["nguoithuchien"],$_SESSION["user"]["id_user"]);
	//$data= new SQLServer;//tao lop ket noi SQL
	$store_name="{call GD2_KT_Luu_Update (?,?,?)}";//tao bien khai bao store
	$data->query( $store_name, $params);

	
	//=====================
	if($_POST["idkhamthai"]==0 && $_POST["idkhamthai"]!=""){
	$check='';
	//$chuoi='(? ,?,?,?,?,?,?,?,?,?,? ,?,?,?,?,?,?,? ,?,?,?,?,? ,?,?,?,?,?,?,?,?,? ,?,?,?,?,?,?,?,?,?,?,?,? ,?,?,?,? ,?,?,?,? ,?,?,? ,?,?  )';
	$chuoi='(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)';
	$tam=explode("/", $_POST['NgayKinhCuoi']);
	$tam2=explode("/", $_POST['NgaySinhDuKien']);
	$ngaykinhcuoi=$tam[1]."/".$tam[0]."/20".$tam[2];
	$ngaysinhdukien= $tam2[1]."/".$tam2[0]."/20".$tam2[2];
     $params=  array(($_POST["id_kham"]),($_POST["timmach"]),($_POST["daiduong"]),($_POST["bassdown"]),($_POST["than"]),($_POST["roiloandongmau"]),($_POST['viemganb']),($_POST['rubella']),($_POST['tamthan']),($_POST['viemganc']),($_POST['cacbenhdamac_khac']),($_POST['tiemphong_rubella']),($_POST['tiemphong_thuydau']),($_POST['tiemphong_quaibi']),($_POST['tiemphong_uonvansosinh']),($_POST['tiemphong_cum']),($_POST['tiemphong_viemganb']),($_POST['tiemphong_somui']),($_POST['lalandautienkhamthai']),($_POST['KT_SoTuanThai']),($_POST['KT_SoNgayThai']),($ngaysinhdukien),($ngaykinhcuoi),($_POST['non']),($_POST['buonnon']),($_POST['metmoi']),($_POST['daubungduoi']),($_POST['ramauamdao']),($_POST['dauthuongvi']),($_POST['daudau']),($_POST['daumat']),($_POST['dauhieubatthuong']),($_POST['para1']."-".$_POST['para2']."-".$_POST['para3']."-".$_POST['para4']),($_POST['thaichetluu']),($_POST['sangiat']),($_POST['chaymautruocsanh']),($_POST['dekho']),($_POST['binhthuong']),($_POST['banghuyet']),($_POST['molaythai']),($_POST['deconduoi2500gr']),($_POST['conchetsaude']),($_POST['tiensusanphukhoa_ketluan']),($_POST['tiensubenhvaskchong_ketluan']),($_POST['ketluan_khamnoikhoa']),($_POST['ketluan_khamphukhoa']),($_POST['ketluan_khamvu']),($_POST['ketluan_khamkhac']),($_POST['ktt_binhthuong']),($_POST['ktt_phutoanthan']),($_POST['ktt_phu2chiduoi']),($_POST['ktt_daxanhdiemmacnhot']),($_POST['ketluan_khamsankhoa']),($_POST['ketluan_ketluan']),($_POST['ketluan_denghi']),$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			
			
            
	//$data= new SQLServer;//tao lop ket noi SQL
	$store_name="{call GD2_Khamthai_Insert $chuoi}";//tao bien khai bao store
	$get=$data->query( $store_name, $params);
	echo $_POST["idkhamthai"];
	//print_r($params);
	//=====================
	}else if($_POST["idkhamthai"]!=""){
		//=====================
	//$chuoi='(? ,?,?,?,?,?,?,?,?,?,? ,?,?,?,?,?,?,? ,?,?,?,?,? ,?,?,?,?,?,?,?,?,? ,?,?,?,?,?,?,?,?,?,?,?,? ,?,?,?,? ,?,?,?,? ,?,?,? ,?)';
	$chuoi='(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)';
	$tam=explode("/", $_POST['NgayKinhCuoi']);
	$tam2=explode("/", $_POST['NgaySinhDuKien']);
	$ngaykinhcuoi=$tam[1]."/".$tam[0]."/20".$tam[2];
	$ngaysinhdukien= $tam2[1]."/".$tam2[0]."/20".$tam2[2];
	$params=  array(($_POST["idkhamthai"]),($_POST["timmach"]),($_POST["daiduong"]),($_POST["bassdown"]),($_POST["than"]),($_POST["roiloandongmau"]),($_POST['viemganb']),($_POST['rubella']),($_POST['tamthan']),($_POST['viemganc']),($_POST['cacbenhdamac_khac']),($_POST['tiemphong_rubella']),($_POST['tiemphong_thuydau']),($_POST['tiemphong_quaibi']),($_POST['tiemphong_uonvansosinh']),($_POST['tiemphong_cum']),($_POST['tiemphong_viemganb']),($_POST['tiemphong_somui']),($_POST['lalandautienkhamthai']),($_POST['KT_SoTuanThai']),($_POST['KT_SoNgayThai']),($ngaysinhdukien),($ngaykinhcuoi),($_POST['non']),($_POST['buonnon']),($_POST['metmoi']),($_POST['daubungduoi']),($_POST['ramauamdao']),($_POST['dauthuongvi']),($_POST['daudau']),($_POST['daumat']),($_POST['dauhieubatthuong']),($_POST['para1']."-".$_POST['para2']."-".$_POST['para3']."-".$_POST['para4']),($_POST['thaichetluu']),($_POST['sangiat']),($_POST['chaymautruocsanh']),($_POST['dekho']),($_POST['binhthuong']),($_POST['banghuyet']),($_POST['molaythai']),($_POST['deconduoi2500gr']),($_POST['conchetsaude']),($_POST['tiensusanphukhoa_ketluan']),($_POST['tiensubenhvaskchong_ketluan']),($_POST['ketluan_khamnoikhoa']),($_POST['ketluan_khamphukhoa']),($_POST['ketluan_khamvu']),($_POST['ketluan_khamkhac']),($_POST['ktt_binhthuong']),($_POST['ktt_phutoanthan']),($_POST['ktt_phu2chiduoi']),($_POST['ktt_daxanhdiemmacnhot']),($_POST['ketluan_khamsankhoa']),($_POST['ketluan_ketluan']),($_POST['ketluan_denghi']),$_SESSION["user"]["id_user"]);
				
				
				
		//$data= new SQLServer;//tao lop ket noi SQL
		$store_name="{call GD2_Khamthai_Update $chuoi}";//tao bien khai bao store
		$get=$data->query( $store_name, $params);//Goi store	
		echo $_POST["idkhamthai"]."----update----<br>";
	//print_r($params);
		//=====================
	}//and else
 
}
function hoantat(){
	$data= new SQLServer;//tao lop ket noi SQL
	
	$params=  array($_POST["id_kham"],$_POST["chuandoan1"],$_SESSION["user"]["id_user"]);
	$store_name="{call GD2_KT_HoanTat_Update (?,?,?)}";//tao bien khai bao store
	$data->query( $store_name, $params);

	
	//=====================
	if($_POST["idkhamthai"]==0 && $_POST["idkhamthai"]!=""){
	$check='';
	//$chuoi='(? ,?,?,?,?,?,?,?,?,?,? ,?,?,?,?,?,?,? ,?,?,?,?,? ,?,?,?,?,?,?,?,?,? ,?,?,?,?,?,?,?,?,?,?,?,? ,?,?,?,? ,?,?,?,? ,?,?,? ,?,?  )';
	$chuoi='(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)';
	$tam=explode("/", $_POST['NgayKinhCuoi']);
	$tam2=explode("/", $_POST['NgaySinhDuKien']);
	$ngaykinhcuoi=$tam[1]."/".$tam[0]."/20".$tam[2];
	$ngaysinhdukien= $tam2[1]."/".$tam2[0]."/20".$tam2[2];
     $params=  array(($_POST["id_kham"]),($_POST["timmach"]),($_POST["daiduong"]),($_POST["bassdown"]),($_POST["than"]),($_POST["roiloandongmau"]),($_POST['viemganb']),($_POST['rubella']),($_POST['tamthan']),($_POST['viemganc']),($_POST['cacbenhdamac_khac']),($_POST['tiemphong_rubella']),($_POST['tiemphong_thuydau']),($_POST['tiemphong_quaibi']),($_POST['tiemphong_uonvansosinh']),($_POST['tiemphong_cum']),($_POST['tiemphong_viemganb']),($_POST['tiemphong_somui']),($_POST['lalandautienkhamthai']),($_POST['KT_SoTuanThai']),($_POST['KT_SoNgayThai']),($ngaysinhdukien),($ngaykinhcuoi),($_POST['non']),($_POST['buonnon']),($_POST['metmoi']),($_POST['daubungduoi']),($_POST['ramauamdao']),($_POST['dauthuongvi']),($_POST['daudau']),($_POST['daumat']),($_POST['dauhieubatthuong']),($_POST['para1']."-".$_POST['para2']."-".$_POST['para3']."-".$_POST['para4']),($_POST['thaichetluu']),($_POST['sangiat']),($_POST['chaymautruocsanh']),($_POST['dekho']),($_POST['binhthuong']),($_POST['banghuyet']),($_POST['molaythai']),($_POST['deconduoi2500gr']),($_POST['conchetsaude']),($_POST['tiensusanphukhoa_ketluan']),($_POST['tiensubenhvaskchong_ketluan']),($_POST['ketluan_khamnoikhoa']),($_POST['ketluan_khamphukhoa']),($_POST['ketluan_khamvu']),($_POST['ketluan_khamkhac']),($_POST['ktt_binhthuong']),($_POST['ktt_phutoanthan']),($_POST['ktt_phu2chiduoi']),($_POST['ktt_daxanhdiemmacnhot']),($_POST['ketluan_khamsankhoa']),($_POST['ketluan_ketluan']),($_POST['ketluan_denghi']),$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			
			
            
	//$data= new SQLServer;//tao lop ket noi SQL
	$store_name="{call GD2_Khamthai_Insert $chuoi}";//tao bien khai bao store
	$get=$data->query( $store_name, $params);
	echo $_POST["idkhamthai"];
	//print_r($params);
	//=====================
	}else if($_POST["idkhamthai"]!=""){
		//=====================
	//$chuoi='(? ,?,?,?,?,?,?,?,?,?,? ,?,?,?,?,?,?,? ,?,?,?,?,? ,?,?,?,?,?,?,?,?,? ,?,?,?,?,?,?,?,?,?,?,?,? ,?,?,?,? ,?,?,?,? ,?,?,? ,?)';
	$chuoi='(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)';
	$tam=explode("/", $_POST['NgayKinhCuoi']);
	$tam2=explode("/", $_POST['NgaySinhDuKien']);
	$ngaykinhcuoi=$tam[1]."/".$tam[0]."/20".$tam[2];
	$ngaysinhdukien= $tam2[1]."/".$tam2[0]."/20".$tam2[2];
	$params=  array(($_POST["idkhamthai"]),($_POST["timmach"]),($_POST["daiduong"]),($_POST["bassdown"]),($_POST["than"]),($_POST["roiloandongmau"]),($_POST['viemganb']),($_POST['rubella']),($_POST['tamthan']),($_POST['viemganc']),($_POST['cacbenhdamac_khac']),($_POST['tiemphong_rubella']),($_POST['tiemphong_thuydau']),($_POST['tiemphong_quaibi']),($_POST['tiemphong_uonvansosinh']),($_POST['tiemphong_cum']),($_POST['tiemphong_viemganb']),($_POST['tiemphong_somui']),($_POST['lalandautienkhamthai']),($_POST['KT_SoTuanThai']),($_POST['KT_SoNgayThai']),($ngaysinhdukien),($ngaykinhcuoi),($_POST['non']),($_POST['buonnon']),($_POST['metmoi']),($_POST['daubungduoi']),($_POST['ramauamdao']),($_POST['dauthuongvi']),($_POST['daudau']),($_POST['daumat']),($_POST['dauhieubatthuong']),($_POST['para1']."-".$_POST['para2']."-".$_POST['para3']."-".$_POST['para4']),($_POST['thaichetluu']),($_POST['sangiat']),($_POST['chaymautruocsanh']),($_POST['dekho']),($_POST['binhthuong']),($_POST['banghuyet']),($_POST['molaythai']),($_POST['deconduoi2500gr']),($_POST['conchetsaude']),($_POST['tiensusanphukhoa_ketluan']),($_POST['tiensubenhvaskchong_ketluan']),($_POST['ketluan_khamnoikhoa']),($_POST['ketluan_khamphukhoa']),($_POST['ketluan_khamvu']),($_POST['ketluan_khamkhac']),($_POST['ktt_binhthuong']),($_POST['ktt_phutoanthan']),($_POST['ktt_phu2chiduoi']),($_POST['ktt_daxanhdiemmacnhot']),($_POST['ketluan_khamsankhoa']),($_POST['ketluan_ketluan']),($_POST['ketluan_denghi']),$_SESSION["user"]["id_user"]);
				
				
				
		//$data= new SQLServer;//tao lop ket noi SQL
		$store_name="{call GD2_Khamthai_Update $chuoi}";//tao bien khai bao store
		$get=$data->query( $store_name, $params);//Goi store	
		//echo $_POST["idkhamthai"]."----update----<br>";
	//print_r($params);
		//=====================
	}//and else
}
function luuhoantat(){
	$data= new SQLServer;//tao lop ket noi SQL
	$params=  array($_POST["id_kham"],$_POST["nguoithuchien"],$_POST["chuandoan1"],$_SESSION["user"]["id_user"]);
	$store_name="{call GD2_KSKCTY_HoanTat_Update (?,?,?,?)}";//tao bien khai bao store
	$data->query( $store_name, $params);

	
	//=====================
	if($_POST["idkhamthai"]==0 && $_POST["idkhamthai"]!=""){
	$check='';
	//$chuoi='(? ,?,?,?,?,?,?,?,?,?,? ,?,?,?,?,?,?,? ,?,?,?,?,? ,?,?,?,?,?,?,?,?,? ,?,?,?,?,?,?,?,?,?,?,?,? ,?,?,?,? ,?,?,?,? ,?,?,? ,?,?  )';
	$chuoi='(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)';
	$tam=explode("/", $_POST['NgayKinhCuoi']);
	$tam2=explode("/", $_POST['NgaySinhDuKien']);
	$ngaykinhcuoi=$tam[1]."/".$tam[0]."/20".$tam[2];
	$ngaysinhdukien= $tam2[1]."/".$tam2[0]."/20".$tam2[2];
     $params=  array(($_POST["id_kham"]),($_POST["timmach"]),($_POST["daiduong"]),($_POST["bassdown"]),($_POST["than"]),($_POST["roiloandongmau"]),($_POST['viemganb']),($_POST['rubella']),($_POST['tamthan']),($_POST['viemganc']),($_POST['cacbenhdamac_khac']),($_POST['tiemphong_rubella']),($_POST['tiemphong_thuydau']),($_POST['tiemphong_quaibi']),($_POST['tiemphong_uonvansosinh']),($_POST['tiemphong_cum']),($_POST['tiemphong_viemganb']),($_POST['tiemphong_somui']),($_POST['lalandautienkhamthai']),($_POST['KT_SoTuanThai']),($_POST['KT_SoNgayThai']),($ngaysinhdukien),($ngaykinhcuoi),($_POST['non']),($_POST['buonnon']),($_POST['metmoi']),($_POST['daubungduoi']),($_POST['ramauamdao']),($_POST['dauthuongvi']),($_POST['daudau']),($_POST['daumat']),($_POST['dauhieubatthuong']),($_POST['para1']."-".$_POST['para2']."-".$_POST['para3']."-".$_POST['para4']),($_POST['thaichetluu']),($_POST['sangiat']),($_POST['chaymautruocsanh']),($_POST['dekho']),($_POST['binhthuong']),($_POST['banghuyet']),($_POST['molaythai']),($_POST['deconduoi2500gr']),($_POST['conchetsaude']),($_POST['tiensusanphukhoa_ketluan']),($_POST['tiensubenhvaskchong_ketluan']),($_POST['ketluan_khamnoikhoa']),($_POST['ketluan_khamphukhoa']),($_POST['ketluan_khamvu']),($_POST['ketluan_khamkhac']),($_POST['ktt_binhthuong']),($_POST['ktt_phutoanthan']),($_POST['ktt_phu2chiduoi']),($_POST['ktt_daxanhdiemmacnhot']),($_POST['ketluan_khamsankhoa']),($_POST['ketluan_ketluan']),($_POST['ketluan_denghi']),$_SESSION["user"]["id_user"],array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			
			
            
	//$data= new SQLServer;//tao lop ket noi SQL
	$store_name="{call GD2_Khamthai_Insert $chuoi}";//tao bien khai bao store
	$get=$data->query( $store_name, $params);
	echo $_POST["idkhamthai"];
	//print_r($params);
	//=====================
	}else if($_POST["idkhamthai"]!=""){
		//=====================
	//$chuoi='(? ,?,?,?,?,?,?,?,?,?,? ,?,?,?,?,?,?,? ,?,?,?,?,? ,?,?,?,?,?,?,?,?,? ,?,?,?,?,?,?,?,?,?,?,?,? ,?,?,?,? ,?,?,?,? ,?,?,? ,?)';
	$chuoi='(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)';
	$tam=explode("/", $_POST['NgayKinhCuoi']);
	$tam2=explode("/", $_POST['NgaySinhDuKien']);
	$ngaykinhcuoi=$tam[1]."/".$tam[0]."/20".$tam[2];
	$ngaysinhdukien= $tam2[1]."/".$tam2[0]."/20".$tam2[2];
	$params=  array(($_POST["idkhamthai"]),($_POST["timmach"]),($_POST["daiduong"]),($_POST["bassdown"]),($_POST["than"]),($_POST["roiloandongmau"]),($_POST['viemganb']),($_POST['rubella']),($_POST['tamthan']),($_POST['viemganc']),($_POST['cacbenhdamac_khac']),($_POST['tiemphong_rubella']),($_POST['tiemphong_thuydau']),($_POST['tiemphong_quaibi']),($_POST['tiemphong_uonvansosinh']),($_POST['tiemphong_cum']),($_POST['tiemphong_viemganb']),($_POST['tiemphong_somui']),($_POST['lalandautienkhamthai']),($_POST['KT_SoTuanThai']),($_POST['KT_SoNgayThai']),($ngaysinhdukien),($ngaykinhcuoi),($_POST['non']),($_POST['buonnon']),($_POST['metmoi']),($_POST['daubungduoi']),($_POST['ramauamdao']),($_POST['dauthuongvi']),($_POST['daudau']),($_POST['daumat']),($_POST['dauhieubatthuong']),($_POST['para1']."-".$_POST['para2']."-".$_POST['para3']."-".$_POST['para4']),($_POST['thaichetluu']),($_POST['sangiat']),($_POST['chaymautruocsanh']),($_POST['dekho']),($_POST['binhthuong']),($_POST['banghuyet']),($_POST['molaythai']),($_POST['deconduoi2500gr']),($_POST['conchetsaude']),($_POST['tiensusanphukhoa_ketluan']),($_POST['tiensubenhvaskchong_ketluan']),($_POST['ketluan_khamnoikhoa']),($_POST['ketluan_khamphukhoa']),($_POST['ketluan_khamvu']),($_POST['ketluan_khamkhac']),($_POST['ktt_binhthuong']),($_POST['ktt_phutoanthan']),($_POST['ktt_phu2chiduoi']),($_POST['ktt_daxanhdiemmacnhot']),($_POST['ketluan_khamsankhoa']),($_POST['ketluan_ketluan']),($_POST['ketluan_denghi']),$_SESSION["user"]["id_user"]);
				
				
				
		//$data= new SQLServer;//tao lop ket noi SQL
		$store_name="{call GD2_Khamthai_Update $chuoi}";//tao bien khai bao store
		$get=$data->query( $store_name, $params);//Goi store	
		echo $_POST["idkhamthai"]."----update----<br>";
	//print_r($params);
		//=====================
	}//and else
}

?>

