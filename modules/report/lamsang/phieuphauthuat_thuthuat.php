

<style>
body{
    overflow:auto!important;   
    font-size: 16px!important;      
}
input[type="text"],textarea{
    font-size: 13px!important;
}
.dotted{
    
    background:url(images/dotted.png) repeat;
    border:none;
    line-height:18px;
    background-attachment:local!important;
    box-shadow:none!important;
     border-width: 0px;
     border-top-width: 0px!important;
    border-left-width: 0px!important;
    border-right-width: 0px!important;
    
    box-shadow: none!important ;
   
    border-style:none!important;
}
</style>


<body id="wrapper" style="margin-left:50px">
    <?php
         $data= new SQLServer;//tao lop ket noi SQL
         $params = array($_GET["idluotkham"]);//tao param cho store 
        $store_name="{call GD2_Select_BenhanNoiTru2(?)}";   //214079 null  3907
        $get_danh_muc_phong_ban=$data->query( $store_name,$params);//Goi store
        $excute= new SQLServerResult($get_danh_muc_phong_ban);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
        $patient_info= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 
        //print_r($_GET["idluotkham"]);
        $params2 = array($_GET["phieuso"]);//tao param cho store 
        $store_name2="{call GD2_PhieuPhauThuat_ThuThuat_SelectAll(?)}";   //214079 null  3907
        $get_danh_muc_phong_ban2=$data->query( $store_name2,$params2);//Goi store
        $excute2= new SQLServerResult($get_danh_muc_phong_ban2);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
        $phieuphauthuat= $excute2->get_as_array();//Tra ve mang toan bo data lay duoc 
       // print_r($phieuphauthuat[0]["NgayCatChi"]->format($_SESSION["config_system"]["ngaythang"]));
        //print_r($phieuphauthuat[0]["NgayCatChi"]->format($_SESSION["config_system"]["ngaythang"]));

        $params3 = array($_GET["idbenhannoitru"]);//tao param cho store 
        $store_name3="{call GD2_GetTenKhoaByID_BenhAnNoiTru(?)}";   //214079 null  3907
        $get_danh_muc_phong_ban3=$data->query( $store_name3,$params3);//Goi store
        $excute3= new SQLServerResult($get_danh_muc_phong_ban3);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
        $khoa= $excute3->get_as_array();//Tra ve mang toan bo data lay duoc 

        $params4 = array($_GET["mabn"]);//tao param cho store 
        $store_name4="{call GD2_DM_BenhNhan_Select_NhomMau(?)}";   //214079 null  3907
        $get_danh_muc_phong_ban4=$data->query( $store_name4,$params4);//Goi store
        $excute4= new SQLServerResult($get_danh_muc_phong_ban4);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
        $nhommau_yeutorh= $excute4->get_as_array();//Tra ve mang toan bo data lay duoc 
       //print_r($_GET["mabn"]);

        if($phieuphauthuat[0]["NgayRut"]==""){
            $phieuphauthuat[0]["NgayRut"]="";
        }
        else{
            $phieuphauthuat[0]["NgayRut"]=$phieuphauthuat[0]["NgayRut"]->format($_SESSION["config_system"]["ngaythang"]);
        }
        if($phieuphauthuat[0]["NgayCatChi"]==""){
            $phieuphauthuat[0]["NgayCatChi"]="";
        }
        else{
            $phieuphauthuat[0]["NgayCatChi"]=$phieuphauthuat[0]["NgayCatChi"]->format($_SESSION["config_system"]["ngaythang"]);
        }
    ?>
<table cellpadding="0" cellspacing="0" border="0" style="width:100%;font-family:Tahoma, Geneva, sans-serif;">
         <tr style="font-size:14px;">
             <td style=" width:60%">
                <span style="letter-spacing: 0.5px;font-weight:bold">FAMILY</span> <img src="images/logo_print.png" /> 
                <br />
                <span style="letter-spacing: 0.5px;text-transform:uppercase"><b><?php echo $_SESSION["com"]["TenBenhVien"]?></b></span>
                
             </td>
             <td style=" width:40%; text-align:right">
              
                
                Số vào viện:<?=$patient_info[0]['SoVaoVien']?>
             </td>
         </tr>               
     </table> 
     
     <table cellpadding="0" cellspacing="0" border="0" style="width:100%;font-family:Tahoma, Geneva, sans-serif;color:Black">
        <br>
        <tr>
             <td style="text-align:center">
                <span style="letter-spacing: 0.5px;font-weight:bold;font-size:23px;">PHIẾU PHẪU THUẬT/THỦ THUẬT</span>
               
                
             </td>
         
         </tr>    
     </table>
     <table width="99%" style="margin-top:5px;" align="center">
    <tr>
        <td width="55%">
            <b>- Họ tên người bệnh: </b> <span  class="dotted"style="text-transform:uppercase"><b><?=$patient_info[0]["tenbenhnhan"] ?></b></span>
        </td>
        <td width="25%">
             <b>Tuổi:  </b><span  class="dotted"><?=$patient_info[0]["Tuoi"] ?></span>
        </td>
        <td width="20%">
             <b>Giới tính: </b> <span  class="dotted"><?=$patient_info[0]["Gioi"] ?></span>
        </td>
    </tr>
     
     <tr>
        <td  >
            <b>- Địa chỉ: </b> <span  class="dotted"><?=$patient_info[0]["DiaChi"] ?></span>
        </td>
        <td><b>Nhóm máu:</b><?=$nhommau_yeutorh[0]["NhomMau"]?></td>
        <td><b>Yếu tố Rh:</b><?=$nhommau_yeutorh[0]["YeuToRh"]?></td>
    </tr>
    <tr>
        <td>
             <b>- Khoa: </b><span type="text" class="dotted" tabindex="8" id="khoa" style="width:290px" float="left"><?=$khoa[0]['TenPhongBan']?></span>
        </td>
        <td >
             <b>Buồng: </b> <span type="text" class="dotted" tabindex="8" id="buong"  style="width:110px" float="left"><?=$patient_info[0]["TenBuong"] ?></span>
        </td>
        <td >
             <b>Giường: </b> <span type="text" class="dotted" tabindex="8" id="giuong"  style="width:60px" float="left"><?=$patient_info[0]["TenGiuong"] ?></span>
        </td>
    </tr>
    <tr>
        <td colspan="3"> 
            <b>- Vào viện lúc: </b>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           <input  maxlength="2" type="text"  class="dotted"name="gio"id="gio" value="<?=$patient_info[0]["NgayGioVaoVien"]->format("H"); ?>" style="width:20px;text-align:center; border-width: 0px">
            giờ
            <input  type="text"maxlength="2" name="phut" id="phut" class="dotted" value="<?=$patient_info[0]["NgayGioVaoVien"]->format("i"); ?>" style="width:20px;text-align:center; border-width: 0px">
            phút,  ngày  <input  type="text"maxlength="2" name="ngay" id="ngay" class="dotted"  value="<?=$patient_info[0]["NgayGioVaoVien"]->format("d"); ?>" style="width:20px;text-align:center; border-width: 0px">
            tháng  <input  type="text"maxlength="2" name="thang" id="thang" class="dotted"  value="<?=$patient_info[0]["NgayGioVaoVien"]->format("m"); ?>" style="width:20px;text-align:center; border-width: 0px">
            năm  <input  type="text"maxlength="2" name="nam" id="nam" class="dotted"  value="<?=$patient_info[0]["NgayGioVaoVien"]->format("Y"); ?>" style="width:40px;text-align:center; border-width: 0px">
        </td>
    </tr>
    <tr>
        <td colspan="3">
           <b>- Phẫu thuật/thủ thuật lúc:</b>
           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input maxlength="2" type="text"  class="dotted"name="gio"  tabindex="1" id="gio" value="<?=$phieuphauthuat[0]["NgayGioPT"]->format("H"); ?>" style="width:20px;text-align:center; border-width: 0px">
            giờ
            <input type="text"maxlength="2" name="phut" id="phut" class="dotted" tabindex="2" value="<?=$phieuphauthuat[0]["NgayGioPT"]->format("i"); ?>" style="width:20px;text-align:center; border-width: 0px">
            phút,  ngày  <input type="text"maxlength="2" name="ngay" id="ngay" class="dotted" tabindex="3" value="<?=$phieuphauthuat[0]["NgayGioPT"]->format("d"); ?>" style="width:20px;text-align:center; border-width: 0px">
            tháng  <input type="text"maxlength="2" name="thang" id="thang" class="dotted" tabindex="4" value="<?=$phieuphauthuat[0]["NgayGioPT"]->format("m"); ?>" style="width:20px;text-align:center; border-width: 0px">
            năm  <input type="text"maxlength="2" name="nam" id="nam" class="dotted" tabindex="5" value="<?=$phieuphauthuat[0]["NgayGioPT"]->format("Y"); ?>" style="width:40px;text-align:center; border-width: 0px">
        </td>
         
    </tr>
    <tr>
        <td>
            <b>- Chẩn đoán:</b>
        </td>
    </tr>
    <tr>
        <td colspan="3">
            <b>- Trước phẫu thuật/thủ thuật:</b>&nbsp;&nbsp;<input type="text" class="dotted" tabindex="8" id="CD_TruocPhauThuat" value="<?=$phieuphauthuat[0]["CD_TruocPhaiThuat"] ?>" style="width:460px" float="left"></div>
        </td>
    </tr>
    <tr>
        <td colspan="3">
            <b>- Sau phẫu thuật/thủ thuật:</b>&nbsp;&nbsp;
                                         <input   class="dotted" lang='luu' tabindex="9" name="CD_SauPhauThuat" value="<?=$phieuphauthuat[0]["CD_SauPhauThuat"] ?>"type="text" id="CD_SauPhauThuat" style="width:469px;" />
        </td>
    </tr>
    <tr>
        <td colspan="3">
           <b>- Phương pháp phẫu thuật/thủ thuật:</b>&nbsp;&nbsp;<input type="text"  class="dotted" value="<?=$phieuphauthuat[0]["PhuongPhapPT"] ?>" tabindex="10" id="phuongphappt" style="width:407px">
        </td>
    </tr>
    <tr>
        <td colspan="3">
           <b>- Loại phẫu thuật/thủ thuật:</b>&nbsp;&nbsp;<input type="text"  value="<?=$phieuphauthuat[0]["LoaiPT"] ?>" class="dotted"tabindex="11" id="loaipt" style="width:470px">
        </td>
    </tr>
    <tr>
        <td colspan="3">
            <b>- Phương pháp vô cảm:</b>&nbsp;&nbsp;<input kiemtra='trong' lang='luu'  value="<?=$phieuphauthuat[0]["Ten_PhuongPhapVoCam"] ?>" class="dotted" tabindex="12" name="ID_PhuongPhapVoCam" type="text_checkbox" id="ID_PhuongPhapVoCam" style="width:500px"/>
        </td>
    </tr>
    <tr>
        <td colspan="3">
            <b>- Bác sỹ phẫu thuật/thủ thuật:</b> &nbsp;&nbsp;<input   kiemtra='trong'  value="<?=$phieuphauthuat[0]["tennv"] ?>" class="dotted" lang='luu' tabindex="13" name="ID_BacSyPT" type="text_checkbox" id="ID_BacSyPT" style="width:454px"/>
        </td>
    </tr>
    <tr>
        <td colspan="3">
            <b>- Bác sỹ gây mê hồi sức:  </b> &nbsp;&nbsp; <input   kiemtra='trong' value="<?=$phieuphauthuat[0]["tennv2"] ?>" class="dotted" lang='luu' tabindex="14" name="ID_BacSyGayMe" type="text_checkbox" id="ID_BacSyGayMe" style="width:490px"/>
        </td>

    </tr>
    <br>
    </table>
   
    <table cellpadding="0" cellspacing="0" border="1" width="99%">
        <tr>
            <td style="width:50%">
                <b>LƯỢT ĐỒ PHẪU THUẬT/THỦ THUẬT</b>
            </td>
            <td style="width:50%">
                <b>TRÌNH TỰ PHẪU THUẬT/THỦ THUẬT</b>
            </td>
        </tr>
        <tr >
            <td>
              <img id="hinhphauthuat"class="non_image" style="border-style:solid;border-color:green" src=""/>  
            </td>
            <td ><textarea tabindex="15" id="trinhtupt" style="height:220px;width:99%"><?=$phieuphauthuat[0]["TrinhTuPT"] ?></textarea></td>
        </tr>
        <tr>
            <td>
                 <b>- Dẫn lưu: </b>
            </td>
            <td><input type="text" value="<?=$phieuphauthuat[0]["DanLuu"] ?>" id="danluu"tabindex="15"style="width:99%"></td>
        </tr>
        <tr>
            <td>
                 <b>- Bấc: </b>
            </td>
            <td><input type="text"value="<?=$phieuphauthuat[0]["Bac"] ?>" id="bac"tabindex="16" style="width:99%"></td>
        </tr>
        <tr>
            <td>
                 <b>- Ngày rút: </b>
            </td>
            <td  align="center"> <input value="<?=$phieuphauthuat[0]["NgayRut"] ?>" type="text" id="ngayrut"tabindex="17" style="width:99%;text-align:center"></td>
        </tr>
        <tr>
            <td>
                 <b>- Ngày cắt chỉ: </b>
            </td>
           <td align="center"><input value="<?= $phieuphauthuat[0]["NgayCatChi"] ?>" type="text" id="ngaycatchi"tabindex="18"style="width:99%;text-align:center"></td>
        </tr>
        <tr>
            <td>
                 <b>- Khác: </b>
            </td>
            <td><input type="text"value="<?=$phieuphauthuat[0]["Khac"] ?>" id="khac"tabindex="19" style="width:99%"></td>
        </tr>
    </table>
    <div align="center" style="margin-left:400px">
       
       <i><b>
                    
                   Đà Nẵng, Ngày <?php echo date("d")." tháng " . date("m")." năm " .  date("Y"); ?></b>
                 </i>
                 
                    <h5 style="margin-top:5px;margin-bottom: 0px;">PHẪU THUẬT/THỦ THUẬT VIÊN</h5>
                   
                    <img id="bs_chandoan" width="159"/>
                 <br />                 
                 <b style="color:red"><?=$phieuphauthuat[0]["tennv"] ?></b>
    </div>
   
</body> 
    <script  type="application/javascript">
        jQuery(document).ready(function() {
            load_sign('<?=$phieuphauthuat[0]["HinhChuKy"]?>',"bs_chandoan");
            window.nhanvien = $.ajax({url: 'resource.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=2&tables=DM_NhanVien&id=ID_NhanVien&name=NickName', async: false, success: function(data, result) {if (!result) alert('Không load được danh mục phòng ban');}}).responseText;   
           
            var tennhanvien= nhanvien.split(";");
                        
                        for (i = 0; i <tennhanvien.length; i++) 
                        {
                            check=tennhanvien[i].split(":");
                            if($("#ID_BacSyPT").val()==check[0]){ //alert(check[0]);
                                $("#ID_BacSyPT").val(check[1]);}
                             if($("#ID_BacSyGayMe").val()==check[0]){ //alert(check[0]);
                                $("#ID_BacSyGayMe").val(check[1]);}
                            
                        }
                       
               $("#hinhphauthuat").attr("src","modules/lamsang/benh_an_rang_ham_mat/HinhPhauThuat/<?= $phieuphauthuat[0]["Image_Name"]?>");
               $("#hinhphauthuat").removeClass("non_image");
               $("#hinhphauthuat").css("width","350px");
               $("#hinhphauthuat").css("height","200px");
               $("#hinhphauthuat").css("margin-left","10px");
               $("#hinhphauthuat").css("margin-right","10px");
                $("#hinhphauthuat").css("margin-top","10px");
               $("#hinhphauthuat").css("margin-bottom","10px");
               
            print_preview();
             
        })   
    </script>