<?php
switch ($_GET["oper"]) {
    case "update_tth":
        update_tth();
        break;
	case "update_ttd_sl":
        update_ttd_sl();
        break;
	
}	 		 

function update_tth(){	
	$data= new SQLServer;
	$store_name="{call [GD2_DMNhaBepSSA_Update_TrangThai] (?,?,?)}";
        $bien=  array(($_GET["tthai"]),($_GET["id"]),$_SESSION["user"]["id_user"]);
	
		//print_r($bien);
		$params = $bien;
		//print_r ($bien);
		$get_danh_muc_phong_ban=$data->query( $store_name, $params);
	
	//$params = $bien;
	//$get_danh_muc_phong_ban=$data->query( $store_name, $params);
	//print_r($_POST)	 ;
}
function update_ttd_sl(){	
	$data= new SQLServer;
	$store_name="{call [GD2_DMNhaBepSSA_Update_TDon_SLuong] (?,?,?,?)}";
        $bien=  array(($_GET["id_td"]),($_GET["sluong"]),($_GET["id"]),$_SESSION["user"]["id_user"]);
	
		print_r($bien);
		$params = $bien;
		//print_r ($bien);
		$get_danh_muc_phong_ban=$data->query( $store_name, $params);
}

?>

