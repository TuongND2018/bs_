    <?php
        $data= new SQLServer;//tao lop ket noi SQL
        $params = array($_GET["id_phieuchamsoc"]);//tao param cho store 
        $store_name="{call Gd2_PhieuChamSocChiTiet_SelectAll(?)}";//tao bien khai bao store
        $get_danh_muc_phong_ban=$data->query( $store_name,$params);//Goi store
        $excute= new SQLServerResult($get_danh_muc_phong_ban);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
        $tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 

       
        $params = array($_GET["id_luotkham"]);//tao param cho store 
        $store_name="{call GD2_Select_BenhanNoiTru2(?)}";   //214079 null  3907
        $get_danh_muc_phong_ban=$data->query( $store_name,$params);//Goi store
        $excute= new SQLServerResult($get_danh_muc_phong_ban);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
        $patient_info= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 
        //print_r($patient_info);
        $params3 = array($_GET["idbenhannoitru"]);//tao param cho store 
        $store_name3="{call GD2_GetTenKhoaByID_BenhAnNoiTru(?)}";   //214079 null  3907
        $get_danh_muc_phong_ban3=$data->query( $store_name3,$params3);//Goi store
        $excute3= new SQLServerResult($get_danh_muc_phong_ban3);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
        $khoa= $excute3->get_as_array();//Tra ve mang toan bo data lay duoc 
		$a=$_GET['thu'];
		?>
        <tr id="row_<?=$a?>" class="row">
        <td align="center"  class="td" ><?=$tam[$a]["NgayGioChamSoc"]->format("H:i ".$_SESSION["config_system"]["ngaythang"])?></td>
        <td class="td" style="padding-left:10px!important;vertical-align:top"><?=$tam[$a]["DienBien"]?></td>
        <td class="td" style="padding-left:10px!important;vertical-align:top"><?=$tam[$a]["ThucHienYlenh"]?></td>
        <td align="center" style="vertical-align:bottom" class="td"><?=$tam[$a]["NickName"]?></td>
        </tr>
