<?php
//include("../../class/class.sqlserver.php");
if(isset($_GET["function"])){$function = $_GET["function"];};
if(isset($_GET["store"])){$store = $_GET["store"];};
if(isset($_GET["term"])){$term = $_GET["term"];};
if(isset($_POST["search"])){$search = $_POST["search"];};
//echo $term;
if(isset($_GET["status"])){$status = $_GET["status"];};
if(isset($_GET["folder"])){$folder = $_GET["folder"];};
if(isset($_GET["tables"])){$tables = $_GET["tables"];};
if(isset($_GET["id"])){$id = $_GET["id"];};
if(isset($_GET["name"])){$name = $_GET["name"];};
if(isset($_GET["id_benhnhan"])){$id_benhnhan =$_GET["id_benhnhan"];}
switch ($function) {	


case "create_panel_luotkham":
        create_panel_luotkham($id_benhnhan);
        break;
	case "create_bn":
        create_bn($id_benhnhan);
        break;
	case "get_auto_edit_hovaten":
        get_auto_edit_hovaten();
        break;
 	case "get_auto_complete3":
        get_auto_complete3($store);
        break;
    case "get_auto_complete":
        get_auto_complete();
        break;
	case "get_auto_complete2":
        get_auto_complete2($store);
        break;
    case "get_auto_complete4":
        get_auto_complete4();
        break;
    case "get_auto_edit_option":
        get_auto_edit_option($tables,$id,$name,$term,"GD2_GET_AUTOCOMPLETETEXTBOX",$status);
        break;
	 case "get_auto_edit_option_byid":
        get_auto_edit_option_byid($tables,$id,$name,$term,"GD2_GET_AUTOCOMPLETETEXTBOXbyid",$status);
     	break;	
	 case "get_print":
        get_print($search);
     	break;	
		 case "create_panel_small":
        create_panel_small($id_benhnhan);
     	break;	
		
	 case "get_hovatenchucdanh":
        get_hovatenchucdanh($id,"GD2_HovaTen_ChucDanh_GET",$status);
    	 break;	
     case "del":
        del("GD2_Del_DM_PhongBan");
        break;
	 case "create_panel":
		create_panel();
	 	break;
	 case "get_doctor_list":
		get_doctor_list($_GET["date"],$_GET["column"]);
	 	break;
	 case "get_one_row":
		get_one_row($store,$id);
	 	break;
	 case "get_custom_store":
        get_custom_store($tables,$id,$name,$term,$store,$status);
	 	break;
	 case "emty_data":
        emty_data();
		break;	
	 case "create_panel1":
        create_panel1($id_benhnhan);
		break;	
	 case "get_link":
        get_link($folder);
		break;
	 case "get_file_size":
		get_file_size($_REQUEST["hash_name"]);
		break;	
	 case "get_folder_name":
		get_folder_name($_GET["id_loaikham"]);
		break;	
	case "framingham":
		framingham($_GET["id_kham"]);
		break;	
	case "framingham2":
		framingham2($_GET["id_kham"]);
		break;
	case "printer_check":
		printer_check($_GET["printers"],$_GET["host"]);
		break;
	case "update_printer":
		update_printer();
		break;
	case "access_tcd":
		access_tcd();
		break;					
}
function access_tcd(){	  
	
}
function update_printer(){
	$data= new SQLServer;
	$check1='';
	$params=array($_SERVER['REMOTE_ADDR'],$_GET["report"],$_GET["printer"],array( $check1, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
	//var_dump($params);
	$add=$data->query( "{call GD2_Update_Printer(?,?,?,?)}", $params);//Goi store	
	echo $check1;
}
function printer_check($printers,$host){
	$data= new SQLServer;
	$params = array();
	$del=$data->query("DELETE  FROM GD2_PC_Printer_Linux WHERE IP like '".$_SERVER['REMOTE_ADDR']."'", $params);//Goi store	 
	$printer=explode("\n",$printers);	 
	for($i=0;$i<count($printer);$i++){
		$tam=explode(" ",$printer[$i]);
		//echo $tam[0]."\n"; 
		$params=array($_SERVER['REMOTE_ADDR'],$host,$tam[0]);
		$add=$data->query( "{call GD2_PC_Printer_Linux_Add(?,?,?)}", $params);//Goi store
	} 
}
function emty_data(){
	echo "{}";
}
function framingham($id_kham){
	$SQLServer= new SQLServer;
	$store_name="{call GD2_FRAMINGHAM_SelectByID_Kham (?)}";//tao bien khai bao store
	$params =array($id_kham);  
	$get_Framingham=$SQLServer->query( $store_name, $params);//Goi store
	$excute= new SQLServerResult($get_Framingham);
	//print_r($excute);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL;
	/* @var $array_Framingham_Data type */
	//lấy về mảng điều kiện đầu vào
	$array_Framingham_Data= $excute->get_as_array();


	print_r($array_Framingham_Data);
	$array_Framingham_Data_PlusBMI=Framingham_Data_GetPaRaIn_PlusBMI($array_Framingham_Data);
echo('<br>'.'*****************'.'<br>');
print_r($array_Framingham_Data_PlusBMI);
	$keys=array_keys($array_Framingham_Data_PlusBMI[0]);

	$values=array_values($array_Framingham_Data_PlusBMI[0]);
	for ($i=80;$i<count($values);$i++){
		if($i>0){
			echo $values[$i].";".$keys[$i].":";
		}
	}
	 
}





 function Framingham_Data($para_array_Framingham_Data)
{
    $cong=0;
   foreach($para_array_Framingham_Data as $values2)
    {
    
       
      //*********Over****************Congestive Heart Failure(4Y)*********************
      
      
      
   
     return $para_array_Framingham_Data;
    }
}


function framingham2($id_kham){
	//echo 'sđáá';
	$SQLServer= new SQLServer;
	$store_name="{call GD2_FramingHam_IDKham (?)}";//tao bien khai bao store
	$params =array($id_kham);  
	$get_Framingham=$SQLServer->query( $store_name, $params);//Goi store
	$excute= new SQLServerResult($get_Framingham);
	//print_r($excute);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL;
	/* @var $array_Framingham_Data type */
	//lấy về mảng điều kiện đầu vào
	$array_Framingham_Data= $excute->get_as_array();
	//$array_Framingham_Data_PlusBMI=Framingham_Data_GetPaRaIn_PlusBMI($array_Framingham_Data);

//print_r($get_Framingham);







	$keys=array_keys($array_Framingham_Data[0]);
//print_r($keys);
	$values=array_values($array_Framingham_Data[0]);
	for ($i=0;$i<count($values);$i++){
		if($i>0){
			echo $values[$i].";".$keys[$i].":";
		}
	}
	 
}

function get_doctor_list($dates,$column){			 
		$data= new SQLServer;//tao lop ket noi SQL		 
		$store_name="{call GD2_GetBacSy_LichHen(?)}";//tao bien khai bao store
		//$tam=explode("-",$dates);
		//$params = array($tam[2]."-".$tam[1]."-".$tam[0]);//tao param cho store 
		$params=array(convert_date($dates));		
		$get_danh_muc_nhan_vien=$data->query( $store_name, $params);//Goi store
		$excute= new SQLServerResult($get_danh_muc_nhan_vien);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
		$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 
		$giatri="";
		//print_r ($tam );
		//echo $column;
		foreach ($tam as $row) {//duyet toan bo mang tra ve	
			if($row["ID_NhanVien"]!=0){
				echo $row[$column].";";					 
			}
		}
	 
}	 		
function create_panel(){
//	
	$phancach1=" - ";$phancach2=" / ";
?>
    <div id="patient_info" title="<?=$_SESSION["ThongTinBenhNhan"]["diachi"]?>-<?=$_SESSION["ThongTinBenhNhan"]["dienthoai"]?>">
    
    <div class="profile_container"><div class="profile_outer"><div class="profile_inner profile_inner_name" style="width:200px"><?=$_SESSION["ThongTinBenhNhan"]["ten"]?></div></div></div>
    <div class="profile_container"><div class="profile_outer"><div class="profile_inner profile_inner_sex" style="width:65px"><?=$_SESSION["ThongTinBenhNhan"]["gioitinh"]?></div></div></div>
    <div class="profile_container"><div class="profile_outer"><div class="profile_inner profile_inner_age" style="width:55px"><?=$_SESSION["ThongTinBenhNhan"]["tuoi"]?></div></div></div>
    <div class="profile_container"><div class="profile_outer"><div class="profile_inner profile_inner_id" style="width:80px"><?=$_SESSION["ThongTinBenhNhan"]["ID"]?></div></div></div>
    <div class="profile_container"><div class="profile_outer"><div class="profile_inner profile_inner_rate" style="width:112px"><?=$_SESSION["ThongTinBenhNhan"]["danhgia1"].$phancach2?><?=$_SESSION["ThongTinBenhNhan"]["danhgia2"].$phancach2?><?=$_SESSION["ThongTinBenhNhan"]["danhgia3"]?></div></div></div>
    <br>
	<div class="profile_container"><div class="profile_outer"><div class="profile_inner profile_inner_height" style="width:75px"><?=$_SESSION["ThongTinBenhNhan"]["chieucao"]?></div></div></div>
    <div class="profile_container"><div class="profile_outer"><div class="profile_inner profile_inner_weight" style="width:85px"><?=$_SESSION["ThongTinBenhNhan"]["cannang"]?></div></div></div>
    <div class="profile_container"><div class="profile_outer"><div class="profile_inner profile_inner_ps" style="width:72px"><?=$_SESSION["ThongTinBenhNhan"]["ps"]?></div></div></div>
    <div class="profile_container"><div class="profile_outer"><div class="profile_inner profile_inner_pd" style="width:72px"><?=$_SESSION["ThongTinBenhNhan"]["pd"]?></div></div></div>
    <div class="profile_container"><div class="profile_outer"><div class="profile_inner profile_inner_hr" style="width:72px"><?=$_SESSION["ThongTinBenhNhan"]["hr"]?></div></div></div>
    <div class="profile_container"><div class="profile_outer"><div class="profile_inner profile_inner_temp" style="width:74px"><?=$_SESSION["ThongTinBenhNhan"]["temp"]?>&deg;</div></div></div>    
    
    </div>	 
<?php	
}
function get_auto_complete(){ 
	 $params = array();//tao param cho store	
	 $tam=connect_data("GD2_DM_nhanvien_get_hotenphongban","()",$params);	
		$i=0;
	foreach ($tam as $row) {//duyet toan bo mang tra ve
	$responce[$i] = array('id' => $row["id"], 'label' => $row["label"], 'hoten' => $row["2"], 'TenPhongBan' => $row["3"]);		
		$i++; 
	}   
	echo json_encode($responce);	
}
function get_auto_complete2($store){ 
	 $params = array();//tao param cho store	
	 $tam=connect_data($store,"()",$params);	
		$i=1;
		$responce[0]=array('id' => "", 'label' => "", 'row2' => "", 'row3' => "");
	foreach ($tam as $row) {//duyet toan bo mang tra ve
	$responce[$i] = array('id' => $row["id"], 'label' => $row["label"], 'row2' => $row["2"], 'row3' => $row["3"]);		
		$i++; 
	}   
	echo json_encode($responce);	
}
function get_auto_complete3($store){ 
	 $params = array();//tao param cho store	
	 $tam=connect_data($store,"()",$params);	
		$i=0;
		
	foreach ($tam as $row) {//duyet toan bo mang tra ve
	$responce[$i] = array('id' => $row["id"], 'label' => $row["label"], 'row2' => $row["2"]);		
		$i++; 
	}   
	echo json_encode($responce);	
}
function get_auto_complete4(){ 
	 $params = array( $_SESSION["user"]["id_phongban"]);//tao param cho store	
	 $tam=connect_data("[GD2_DM_nhanvien_get_nicknamandtenphongbban] ","(?)",$params);	
		$i=0;
	foreach ($tam as $row) {//duyet toan bo mang tra ve
	$responce[$i] = array('id' => $row["id"], 'label' => $row["label"], 'hoten' => $row["2"]);		
		$i++; 
	}   
	echo json_encode($responce);	
}


function get_auto_edit_option($tables,$id,$name,$term,$store_name,$status){
	$params = array($tables,$id,$name,$term);//tao param cho store
	 $tam=connect_data($store_name,"(?,?,?,?)",$params);	 
	$i=0;
	if($status==0){	
		echo " :;";
	}elseif($status==1){
		echo " :Tất cả;";
	}
	
	foreach ($tam as $v) {//duyet toan bo mang tra ve
	
		if(trim($v[1])!=""){
			if($i!=count($tam)-1){				
				$phancach=";";
			}else{
				$phancach="";
			}
			echo $v[0].":".$v[1].$phancach;	
			
		}
		$i++;
	}     
	 
}
function get_auto_edit_option_byid($tables,$id,$name,$term,$store_name,$status){
	//$term= "(TenMay = 'Dell' ) and TenReport = 'Lich_lam_viec' and  UserWindowName = 'kha' ";
	//print_r($term);
	//$name ="TenMayIn,TenReport";
	$params = array($tables,$id,$name,$term);//tao param cho store
	 $tam=connect_data($store_name,"(?,?,?,?)",$params);	 
	 
	$i=0;
	if($status==0){	
		echo " : ;";
	}elseif($status==1){
		echo "all:Tất cả;";
	}
	foreach ($tam as $v) {//duyet toan bo mang tra ve
		if(trim($v[1])!=""){
			if($i!=count($tam)-1){				
				$phancach=";";
			}else{
				$phancach="";
			}
			echo $v[0].":".$v[1].$phancach;	
			
		}
			$i++;
	}     
	 
}
function get_auto_edit_hovaten(){
	//$term= "(TenMay = 'Dell' ) and TenReport = 'Lich_lam_viec' and  UserWindowName = 'kha' ";
	//print_r($term);
	//$name ="TenMayIn,TenReport";
	$params = array();//tao param cho store
	 $tam=connect_data("GD2_hovatennv_get","()",$params);	 	 
	 $i=0;
	foreach ($tam as $v) {//duyet toan bo mang tra ve
		if(trim($v[1])!=""){
			if($i!=count($tam)-1){				
				$phancach=";";
			}else{
				$phancach="";
			}
			echo $v[0].":".$v[1].$phancach;	
			$i++;	
		}
	}     
	 
}
function get_print($search){
	//$term= "(TenMay = 'Dell' ) and TenReport = 'Lich_lam_viec' and  UserWindowName = 'kha' ";
	//print_r($term);
	//$name ="TenMayIn,TenReport";
	//$search = $_POST["search"];
	$params = array("GD2_PrinterConfig","ID_auto","TenMayIn,KieuIn,SoluongBanIn,margin",$search);//tao param cho store
	//print_r($params);
	$tam=connect_data("GD2_GET_AUTOCOMPLETETEXTBOXbyid","(?,?,?,?)",$params);	 
		if (count($tam)>0){
			echo $tam[0][1].";".$tam[0][2].";".$tam[0][3].";".$tam[0][4];	
		}else{
			echo 1;
		}
}
function get_hovatenchucdanh($id,$store_name){	

	$params = array($id);//tao param cho store
	$tam=connect_data($store_name,"(?)",$params);	
	//print_r($params)  ;
	foreach ($tam as $v) {//duyet toan bo mang tra ve
		echo $v[0];
	}     
	 
}


function connect_data($store,$available,$params){	
	$data= new SQLServer;//tao lop ket noi SQL
	//echo "{call $store $available}";
	//print_r($params);
	$store_name="{call $store $available}";//tao bien khai bao store	 	 
	$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store
	$excute= new SQLServerResult($get_danh_muc_phong_ban);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
	$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 
	return $tam;
}
function create_bn($id_benhnhan) {
setcookie("id_benhnhan",$id_benhnhan);
$params = array($id_benhnhan);//tao param cho store
$tam=connect_data("GD2_GetThongTinBenhNhan","(?)",$params);	 	
	$_SESSION["ThongTinBenhNhan"]["id_benhnhan"]=$tam[0]["ID_BenhNhan"];
	$_SESSION["ThongTinBenhNhan"]["gioitinh"]=$tam[0]["Gioi"];
	$ten =$tam[0]["HoLotBenhNhan"]." ".$tam[0]["TenBenhNhan"];	
	$_SESSION["ThongTinBenhNhan"]["mabenhnhan"]=$tam[0]["MaBenhNhan"];
	$_SESSION["ThongTinBenhNhan"]["namsinh"]=$tam[0]["NamSinh"];
	$_SESSION["ThongTinBenhNhan"]["sothangtuoi"]=$tam[0]["SoThangTuoi"];
	$_SESSION["ThongTinBenhNhan"]["ngaythangnamsinh"]=$tam[0]["NgayThangNamSinh"];
	$_SESSION["ThongTinBenhNhan"]["dienthoai2"]=$tam[0]["DienThoai2"];  
	$_SESSION["ThongTinBenhNhan"]["id_congty"]=$tam[0]["ID_CongTy"];   
	$_SESSION["ThongTinBenhNhan"]["id_quyanhuyen"]=$tam[0]["ID_QuanHuyen"];  
	$_SESSION["ThongTinBenhNhan"]["id_quoctich"]=$tam[0]["ID_QuocTich"];  
	$_SESSION["ThongTinBenhNhan"]["id_dantoc"]=$tam[0]["ID_DanToc"];  
	$_SESSION["ThongTinBenhNhan"]["id_nghenghiep"]=$tam[0]["ID_NgheNghiep"];  
	$_SESSION["ThongTinBenhNhan"]["tennguoilienhe"]=$tam[0]["TenNguoiLienHe"];  
	$_SESSION["ThongTinBenhNhan"]["quanhevoibn"]=$tam[0]["QuanHeVoiBN"];  
	$_SESSION["ThongTinBenhNhan"]["dtnguoilinehe"]=$tam[0]["DienThoaiNguoiLienHe"]; 
	$_SESSION["ThongTinBenhNhan"]["id_xaphuong"]=$tam[0]["ID_XaPhuong"]; 
	$_SESSION["ThongTinBenhNhan"]["quanhevoibv"]=$tam[0]["QuanHeVoiBenhVien"]; 
	$_SESSION["ThongTinBenhNhan"]["sex"]=$tam[0]["GioiTinh"];
    $_SESSION["ThongTinBenhNhan"]["HoLotBenhNhan"]=$tam[0]["HoLotBenhNhan"];
	$_SESSION["ThongTinBenhNhan"]["TenBenhNhan"]=$tam[0]["TenBenhNhan"];
	$_SESSION["ThongTinBenhNhan"]["namsinh"]=$tam[0]["NamSinh"];	
	$_SESSION["ThongTinBenhNhan"]["ID"]=$tam[0]["ID_BenhNhan"];
	$_SESSION["ThongTinBenhNhan"]["ten"]=$ten;	
	$_SESSION["ThongTinBenhNhan"]["tuoi"]=Date("Y")-$tam[0]["NamSinh"];
	$_SESSION["ThongTinBenhNhan"]["dienthoai"]=$tam[0]["DienThoai1"];
	$_SESSION["ThongTinBenhNhan"]["diachi"]=$tam[0]["DiaChi"];
	$_SESSION["ThongTinBenhNhan"]["chieucao"]=$tam[0]['ChieuCao'];
	$_SESSION["ThongTinBenhNhan"]["cannang"]=$tam[0]['CanNang'];	
	$_SESSION["ThongTinBenhNhan"]["danhgia1"]=$tam[0]['TD'];
	$_SESSION["ThongTinBenhNhan"]["danhgia2"]=$tam[0]['KT'];
	$_SESSION["ThongTinBenhNhan"]["danhgia3"]=$tam[0]['HL'];
	$_SESSION["ThongTinBenhNhan"]["ps"]=$tam[0]['Ps'];
	$_SESSION["ThongTinBenhNhan"]["pd"]=$tam[0]['Pd'];
	$_SESSION["ThongTinBenhNhan"]["hr"]=$tam[0]['Mach'];
	$_SESSION["ThongTinBenhNhan"]["temp"]=$tam[0]['ThanNhiet'];	  
}


function get_one_row($store,$id) {

$params = array($id);//tao param cho store
$tam=connect_data($store,"(?)",$params);	 	
 echo $tam[0][0].'/'.$tam[0][1].'/'.$tam[0][2];
}


function get_custom_store($tables,$id,$name,$term,$store_name,$status){
	$params = array($term);//tao param cho store
	 $tam=connect_data($store_name,"(?)",$params);	 
	 if (count ($tam)!=0){
		echo $tam[0]['ID_LuotKham'].";".$tam[0]['ID_TrangThai'];
	 }
	 
}

function get_link($folder){
	$params = array($folder);//tao param cho store
	 $tam=connect_data('GD2_link_getby_foldername',"(?)",$params);	 
	 if (count ($tam)!=0){
		$link= explode( ':', $tam[0][2] );		 
		echo $tam[0]['module'].";".$link[0].";".$tam[0]['ID_Control'].";".$tam[0]['Caption'];
	 }
	 
}


function create_panel1($id_benhnhan){
	$params = array($id_benhnhan);//tao param cho store
	$tam=connect_data('GD2_GetThongTinBenhNhan',"(?)",$params);	 
	if(count($tam)==0){
		$HoLotBenhNhan='' ;
		$Gioi='';
		$Tuoi='';
		$MaBenhNhan='';
		$rate='';
		$ChieuCao='';
		$CanNang='';
		$Ps='';
		$Pd='';
		$Mach='';
		$ThanNhiet='';
		$DiaChi='';

	}else{
		$HoLotBenhNhan=$tam[0]['HoLotBenhNhan'].' '.$tam[0]['TenBenhNhan'] ;
		$Gioi=$tam[0]['Gioi'];
		$Tuoi=$tam[0]['Tuoi'];
		$MaBenhNhan=$tam[0]['MaBenhNhan'];
		$rate=$tam[0]['TD'].'/'.$tam[0]['KT'].'/'.$tam[0]['HL'];
		$ChieuCao=$tam[0]['ChieuCao'];
		$CanNang=$tam[0]['CanNang'];
		$Ps=$tam[0]['Ps'];
		$Pd=$tam[0]['Pd'];
		$Mach=$tam[0]['Mach'];
		$ThanNhiet=$tam[0]['ThanNhiet'];
		$DiaChi=$tam[0]['DiaChi'];
	}
$phancach1=" - ";$phancach2=" / ";
?>
     <div id="patient_info" title="<?=$DiaChi?>">
     
          <div class="profile_container">
             <span class="addon" href="#">
                <i class="fa fa-user icon"></i>
            </span>
            <span id="panel_tenbn" class="texts" style="width:200px"><?=$HoLotBenhNhan?></span>
        </div>
        <div class="profile_container">
             <span class="addon" href="#" style="padding-left:4px; padding-right:4px;">
                <i class="fa fa-female icon"></i>
                <i class="fa fa-male icon"></i>
            </span>
            <span id="panel_gioi" class="texts"><?=$Gioi?></span>
        </div>
        
        <div class="profile_container">
             <span class="addon" href="#" style="">
              <i class="icon fa"><span>age</span></i>           
            </span>
            <span id="panel_tuoi" class="texts"><?=$Tuoi?></span>
        </div>
        <div class="profile_container">
             <span class="addon" href="#" style="">
              <i class="icon fa"><span>id</span></i>           
            </span>
            <span id="panel_mabn" class="texts"><?=$MaBenhNhan?></span>
        </div>
        <div class="profile_container">
             <span class="addon" href="#" style="">
              <i class="icon fa"><span>rate</span></i>           
            </span>
            <span id="panel_rate" class="texts"><?=$rate?></span>
        </div>
     
     <script>
	function mobenhnhan(){
		
		 parent.postMessage("editbenhnhan;<?=$id_benhnhan?>;<?=$HoLotBenhNhan?>", "*");
	}
	function moghichu(){
	elem = 1 + Math.floor(Math.random() * 1000000000);
	dialog_main("Ghi chú của bệnh nhân: <?=$HoLotBenhNhan?>", 95, 70, elem, 'resource.php?module=hanhchinh&view=ghi_chu&id_form=230&idbenhnhan=<?=$id_benhnhan?>');
}
	</script>

    <br />
     <div class="profile_container" >
         <span class="addon" href="#" style="">
          <i class="icon fa"><span>H</span></i>           
        </span>
        <span id="panel_chieucao" class="texts" style="width:60px;"><?=$ChieuCao?></span>
    </div>
    <div class="profile_container">
         <span class="addon" href="#" style="">
          <i class="icon fa"><span>W</span></i>           
        </span>
        <span id="panel_canang" class="texts" style="width:60px;"><?=$CanNang?></span>
    </div>
    <div class="profile_container">
         <span class="addon" href="#" style="">
          <i class="icon fa"><span>Ps</span></i>           
        </span>
        <span id="panel_ps" class="texts" style="width:60px;"><?=$Ps?></span>
    </div>
     <div class="profile_container">
         <span class="addon" href="#" style="">
          <i class="icon fa"><span>Pd</span></i>           
        </span>
        <span id="panel_pd" class="texts" style="width:60px;"><?=$Pd?></span>
    </div>
    <div class="profile_container">
         <span class="addon" href="#" style="">
          <i class="icon fa"><span>Hr</span></i>           
        </span>
        <span id="panel_mach" class="texts" style="width:60px;"><?=$Mach?></span>
    </div>
     <div class="profile_container">
         <span class="addon" href="#" style="">
          <i class="icon fa"><span>T</span></i>           
        </span>
        <span id="panel_thannhiet" class="texts" style="width:60px;"><?=$ThanNhiet?>&deg;</span>
    </div>
   
   
    
   
     
 <!--   <div class="profile_container"><div class="profile_outer"><div class="profile_inner profile_inner_name" style="width:200px"><?=$HoLotBenhNhan?></div></div></div>
    <div class="profile_container"><div class="profile_outer"><div class="profile_inner profile_inner_sex" style="width:65px"><?=$Gioi?></div></div></div>
    <div class="profile_container"><div class="profile_outer"><div class="profile_inner profile_inner_age" style="width:55px"><?=$Tuoi?></div></div></div>
    <div class="profile_container"><div class="profile_outer"><div class="profile_inner profile_inner_id" style="width:80px"><?=$MaBenhNhan?></div></div></div>
    <div class="profile_container"><div class="profile_outer"><div class="profile_inner profile_inner_rate" style="width:95px"><?=$rate?></div></div></div>

    <br>
	<div class="profile_container"><div class="profile_outer"><div class="profile_inner profile_inner_height" style="width:75px"><?=$ChieuCao?></div></div></div>
    <div class="profile_container"><div class="profile_outer"><div class="profile_inner profile_inner_weight" style="width:85px"><?=$CanNang?></div></div></div>
    <div class="profile_container"><div class="profile_outer"><div class="profile_inner profile_inner_ps" style="width:72px"><?=$Ps?></div></div></div>
    <div class="profile_container"><div class="profile_outer"><div class="profile_inner profile_inner_pd" style="width:72px"><?=$Pd?></div></div></div>
    <div class="profile_container"><div class="profile_outer"><div class="profile_inner profile_inner_hr" style="width:72px"><?=$Mach?></div></div></div>
    <div class="profile_container"><div class="profile_outer"><div class="profile_inner profile_inner_temp" style="width:74px"><?=$ThanNhiet?>&deg;</div></div></div>    
    
    -->
    </div>	 
	

<?php	
}
 
 
 
 
 function create_panel_small($id_benhnhan){
	$params = array($id_benhnhan);//tao param cho store
	$tam=connect_data('GD2_GetThongTinBenhNhan',"(?)",$params);	 
	if(count($tam)==0){
		$HoLotBenhNhan='' ;
		$Gioi='';
		$Tuoi='';
		$MaBenhNhan='';
		$rate='';
		$ChieuCao='';
		$CanNang='';
		$Ps='';
		$Pd='';
		$Mach='';
		$ThanNhiet='';
		$DiaChi='';

	}else{
		$HoLotBenhNhan=$tam[0]['HoLotBenhNhan'].' '.$tam[0]['TenBenhNhan'] ;
		$Gioi=$tam[0]['Gioi'];
		$Tuoi=$tam[0]['Tuoi'];
		$MaBenhNhan=$tam[0]['MaBenhNhan'];
		$rate=$tam[0]['TD'].'/'.$tam[0]['KT'].'/'.$tam[0]['HL'];
		$ChieuCao=$tam[0]['ChieuCao'];
		$CanNang=$tam[0]['CanNang'];
		$Ps=$tam[0]['Ps'];
		$Pd=$tam[0]['Pd'];
		$Mach=$tam[0]['Mach'];
		$ThanNhiet=$tam[0]['ThanNhiet'];
		$DiaChi=$tam[0]['DiaChi'];
	}
$phancach1=" - ";$phancach2=" / ";
?>
  <div id="patient_info" style="width:760px" title="<?=$DiaChi?>">
     
          <div class="profile_container">
             <span class="addon" href="#">
                <i class="fa fa-user icon"></i>
            </span>
            <span id="panel_tenbn" class="texts" style="width:200px"><?=$HoLotBenhNhan?></span>
        </div>
        <div class="profile_container">
             <span class="addon" href="#" style="padding-left:4px; padding-right:4px;">
                <i class="fa fa-female icon"></i>
                <i class="fa fa-male icon"></i>
            </span>
            <span id="panel_gioi" class="texts"><?=$Gioi?></span>
        </div>
        
        <div class="profile_container">
             <span class="addon" href="#" style="">
              <i class="icon fa"><span>age</span></i>           
            </span>
            <span id="panel_tuoi" class="texts"><?=$Tuoi?></span>
        </div>
        <div class="profile_container">
             <span class="addon" href="#" style="">
              <i class="icon fa"><span>id</span></i>           
            </span>
            <span id="panel_mabn" class="texts"><?=$MaBenhNhan?></span>
        </div>
        <div class="profile_container">
             <span class="addon" href="#" style="">
              <i class="icon fa"><span>rate</span></i>           
            </span>
            <span id="panel_rate" class="texts"><?=$rate?></span>
        </div>
    <!--<div class="profile_container"><div class="profile_outer"><div class="profile_inner profile_inner_name" style="width:200px"><?=$HoLotBenhNhan?></div></div></div>
    <div class="profile_container"><div class="profile_outer"><div class="profile_inner profile_inner_sex" style="width:65px"><?=$Gioi?></div></div></div>
    <div class="profile_container"><div class="profile_outer"><div class="profile_inner profile_inner_age" style="width:55px"><?=$Tuoi?></div></div></div>
    <div class="profile_container"><div class="profile_outer"><div class="profile_inner profile_inner_id" style="width:80px"><?=$MaBenhNhan?></div></div></div>
    <div class="profile_container"><div class="profile_outer"><div class="profile_inner profile_inner_rate" style="width:95px"><?=$rate?></div></div></div>-->
   <input class="<?php   
    $check1='';
  	 $params = array($id_benhnhan,array($check1, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));//tao param cho store
	 $tam1=connect_data('GD2_getnotes_bn',"(?,?)",$params);	 
			 if($check1==1){
						echo "custom_button do";
					}else if($check1==2){
						echo "custom_button cam";
					}else  if($check1==0){
						echo "custom_button xanh";
					}
   
   ?>" type="button" onclick="moghichu()" value="G.chú" style="height:22px;width:50px;">
    <input class="custom_button xanh" type="button" onclick="mobenhnhan()" value="Thông tin BN" style="height:22px;width:80px!important;">
     <script>
	function mobenhnhan(){
		
		 parent.postMessage("editbenhnhan;<?=$id_benhnhan?>;<?=$HoLotBenhNhan?>", "*");
	}
	function moghichu(){
	elem = 1 + Math.floor(Math.random() * 1000000000);
	dialog_main("Ghi chú của bệnh nhân: <?=$HoLotBenhNhan?>", 95, 70, elem, 'resource.php?module=hanhchinh&view=ghi_chu&id_form=230&idbenhnhan=<?=$id_benhnhan?>');
}
	</script>
<?php	
}


function get_file_size($hash_name){
	list($width, $height, $type, $attr) = getimagesize($_SESSION["config_system"]["URL"]."file_manager/php/connector.php?tenthumuc=".$_GET["tenthumuc"]."&answer=42&cmd=file&target=".$hash_name);
	//list($width, $height, $type, $attr) = getimagesize("http://".$_SERVER['HTTP_HOST']."/giaidoan2/file_manager/php/connector.php?tenthumuc=".$_GET["tenthumuc"]."&answer=42&cmd=file&target=".$hash_name);
	
	echo  $width .";". $height; //.";". $type .";". $attr;
	 //echo $_SESSION["config_system"]["URL"]."file_manager/php/connector.php?answer=42&cmd=file&target=".$hash_name; 
}
function get_folder_name($id_loaikham){
	$data= new SQLServer;//tao lop ket noi SQL
	$store_name="{call GD2_GetNameFolderHinhNhomCLS(?)}";//tao bien khai bao store
	$params = array($id_loaikham);//tao param cho store
	$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store
	$excute= new SQLServerResult($get_danh_muc_phong_ban);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
	$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 	
	foreach ($tam as $row) {//duyet toan bo mang tra ve
		$HinhFolderName=$row["HinhFolderName"];
	}  
	echo $HinhFolderName;
}


function create_panel_luotkham($id_benhnhan){
	$params = array($id_benhnhan);//tao param cho store
	$tam=connect_data('GD2_GetThongTinBenhNhan',"(?)",$params);	 
	if(count($tam)==0){
		$HoLotBenhNhan='' ;
		$Gioi='';
		$Tuoi='';
		$MaBenhNhan='';
		$rate='';
		$ChieuCao='';
		$CanNang='';
		$Ps='';
		$Pd='';
		$Mach='';
		$ThanNhiet='';
		$DiaChi='';

	}else{
		$HoLotBenhNhan=$tam[0]['HoLotBenhNhan'].' '.$tam[0]['TenBenhNhan'] ;
		$Gioi=$tam[0]['Gioi'];
		$Tuoi=$tam[0]['Tuoi'];
		$MaBenhNhan=$tam[0]['MaBenhNhan'];
		$rate=$tam[0]['TD'].'/'.$tam[0]['KT'].'/'.$tam[0]['HL'];
		$ChieuCao=$tam[0]['ChieuCao'];
		$CanNang=$tam[0]['CanNang'];
		$Ps=$tam[0]['Ps'];
		$Pd=$tam[0]['Pd'];
		$Mach=$tam[0]['Mach'];
		$ThanNhiet=$tam[0]['ThanNhiet'];
		$DiaChi=$tam[0]['DiaChi'];
	}
$phancach1=" - ";$phancach2=" / ";
?>
     <div id="patient_info" title="<?=$DiaChi?>">
     
          <div class="profile_container">
             <span class="addon" href="#">
                <i class="fa fa-user icon"></i>
            </span>
            <span id="panel_tenbn" class="texts" style="width:200px"><?=$HoLotBenhNhan?></span>
        </div>
        <div class="profile_container">
             <span class="addon" href="#" style="padding-left:4px; padding-right:4px;">
                <i class="fa fa-female icon"></i>
                <i class="fa fa-male icon"></i>
            </span>
            <span id="panel_gioi" class="texts"><?=$Gioi?></span>
        </div>
        
        <div class="profile_container">
             <span class="addon" href="#" style="">
              <i class="icon fa"><span>age</span></i>           
            </span>
            <span id="panel_tuoi" class="texts"><?=$Tuoi?></span>
        </div>
        <div class="profile_container">
             <span class="addon" href="#" style="">
              <i class="icon fa"><span>id</span></i>           
            </span>
            <span id="panel_mabn" class="texts"><?=$MaBenhNhan?></span>
        </div>
        <div class="profile_container">
             <span class="addon" href="#" style="">
              <i class="icon fa"><span>rate</span></i>           
            </span>
            <span id="panel_rate" class="texts"><?=$rate?></span>
        </div>
        <input class="<?php   
    $check1='';
  	 $params = array($id_benhnhan,array($check1, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));//tao param cho store
	 $tam1=connect_data('GD2_getnotes_bn',"(?,?)",$params);	 
			 if($check1==1){
						echo "custom_button do";
					}else if($check1==2){
						echo "custom_button cam";
					}else  if($check1==0){
						echo "custom_button xanh";
					}
   
   ?>" type="button" onclick="moghichu()" value="G.chú" style="height:22px;width:50px;">
    <input class="custom_button xanh" type="button" onclick="mobenhnhan()" value="Thông tin BN" style="height:22px;width:80px!important;">
     <script>
	function mobenhnhan(){
		
		 parent.postMessage("editbenhnhan;<?=$id_benhnhan?>;<?=$HoLotBenhNhan?>", "*");
	}
	function moghichu(){
	elem = 1 + Math.floor(Math.random() * 1000000000);
	dialog_main("Ghi chú của bệnh nhân: <?=$HoLotBenhNhan?>", 95, 70, elem, 'resource.php?module=hanhchinh&view=ghi_chu&id_form=230&idbenhnhan=<?=$id_benhnhan?>');
}
	</script>

    <br />
     <div class="profile_container" >
         <span class="addon" href="#" style="">
          <i class="icon fa"><span>H</span></i>           
        </span>
        <span id="panel_chieucao" class="texts" style="width:60px;"><?=$ChieuCao?></span>
    </div>
    <div class="profile_container">
         <span class="addon" href="#" style="">
          <i class="icon fa"><span>W</span></i>           
        </span>
        <span id="panel_canang" class="texts" style="width:60px;"><?=$CanNang?></span>
    </div>
    <div class="profile_container">
         <span class="addon" href="#" style="">
          <i class="icon fa"><span>Ps</span></i>           
        </span>
        <span id="panel_ps" class="texts" style="width:60px;"><?=$Ps?></span>
    </div>
     <div class="profile_container">
         <span class="addon" href="#" style="">
          <i class="icon fa"><span>Pd</span></i>           
        </span>
        <span id="panel_pd" class="texts" style="width:60px;"><?=$Pd?></span>
    </div>
    <div class="profile_container">
         <span class="addon" href="#" style="">
          <i class="icon fa"><span>Hr</span></i>           
        </span>
        <span id="panel_mach" class="texts" style="width:60px;"><?=$Mach?></span>
    </div>
     <div class="profile_container">
         <span class="addon" href="#" style="">
          <i class="icon fa"><span>T</span></i>           
        </span>
        <span id="panel_thannhiet" class="texts" style="width:60px;"><?=$ThanNhiet?>&deg;</span>
    </div>
   
   
    
   
     
 <!--   <div class="profile_container"><div class="profile_outer"><div class="profile_inner profile_inner_name" style="width:200px"><?=$HoLotBenhNhan?></div></div></div>
    <div class="profile_container"><div class="profile_outer"><div class="profile_inner profile_inner_sex" style="width:65px"><?=$Gioi?></div></div></div>
    <div class="profile_container"><div class="profile_outer"><div class="profile_inner profile_inner_age" style="width:55px"><?=$Tuoi?></div></div></div>
    <div class="profile_container"><div class="profile_outer"><div class="profile_inner profile_inner_id" style="width:80px"><?=$MaBenhNhan?></div></div></div>
    <div class="profile_container"><div class="profile_outer"><div class="profile_inner profile_inner_rate" style="width:95px"><?=$rate?></div></div></div>

    <br>
	<div class="profile_container"><div class="profile_outer"><div class="profile_inner profile_inner_height" style="width:75px"><?=$ChieuCao?></div></div></div>
    <div class="profile_container"><div class="profile_outer"><div class="profile_inner profile_inner_weight" style="width:85px"><?=$CanNang?></div></div></div>
    <div class="profile_container"><div class="profile_outer"><div class="profile_inner profile_inner_ps" style="width:72px"><?=$Ps?></div></div></div>
    <div class="profile_container"><div class="profile_outer"><div class="profile_inner profile_inner_pd" style="width:72px"><?=$Pd?></div></div></div>
    <div class="profile_container"><div class="profile_outer"><div class="profile_inner profile_inner_hr" style="width:72px"><?=$Mach?></div></div></div>
    <div class="profile_container"><div class="profile_outer"><div class="profile_inner profile_inner_temp" style="width:74px"><?=$ThanNhiet?>&deg;</div></div></div>    
    
    -->
    </div>	 
	

<?php	
}
?>