<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Report</title>
<style >
body{
    overflow: auto;
   
}
pre {
 white-space: pre-wrap;       /* css-3 */
 white-space: -moz-pre-wrap;  /* Mozilla, since 1999 */
 white-space: -pre-wrap;      /* Opera 4-6 */
 white-space: -o-pre-wrap;    /* Opera 7 */
 word-wrap: break-word;       /* Internet Explorer 5.5+ */
 font:13px Tahoma, Geneva, sans-serif;
}
.text_1{
    /*border-top-width: 0px!important;
    border-left-width: 0px!important;
    border-right-width: 0px!important;
    
    box-shadow: 0px 0px 0px 0px!important ;
   */
    /*border-style:dotted!important;*/
}

</style>
</head>
 
<body>
    <?php
        $data= new SQLServer;//tao lop ket noi SQL
        $params = array($_GET["id_benhnhan"]);//tao param cho store 
        $store_name="{call GD2_GetThongTinBenhNhan_phieuvaovien(?)}";//tao bien khai bao store
        
        $get_thongtinbenhnhan=$data->query( $store_name,$params);//Goi store
        $excute= new SQLServerResult($get_thongtinbenhnhan);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
        $thongtinbenhnhan= $excute->get_as_array();//Tra ve mang toan bo data lay duoc  
         if($thongtinbenhnhan[0]["NgayThangNamSinh"]!='')
            $thongtinbenhnhan[0]["NgayThangNamSinh"]=$thongtinbenhnhan[0]["NgayThangNamSinh"]->format("d-m-Y");
         else $thongtinbenhnhan[0]["NgayThangNamSinh"]='';
       // print_r( $thongtinbenhnhan[0]["NgayThangNamSinh"])
    ?>

    <?php if($_GET["header"]=="left"){ ?>
        <div style="font-size:14px;font-family:Tahoma, Geneva, sans-serif;-webkit-transform: rotate(270deg);-moz-transform: rotate(270deg);-o-transform: rotate(270deg);writing-mode: rl-tb;position:absolute;top:550px;left:-340px">  <span style="letter-spacing: 0.5px;font-weight:bold">FAMILY</span> <img src="images/logo_print.png" />  <span style="letter-spacing: 0.5px;text-transform:uppercase"><?php echo $_SESSION["com"]["TenBenhVien"]?></span> - <?php echo $_SESSION["com"]["DiaChi"]?> * T: <?php echo $_SESSION["com"]["SoDT"]?></div>
    <?php } ?>
    <?php if($_GET["header"]=="top"){ ?>   
    <table cellpadding="0" cellspacing="0" border="0" style="width:100%;font-family:Tahoma, Geneva, sans-serif;">
         <tr style="font-size:14px;">
             <td style=" width:60%">
                <span style="letter-spacing: 0.5px;font-weight:bold">FAMILY</span> <img src="images/logo_print.png" /> 
                <br />
                <span style="letter-spacing: 0.5px;text-transform:uppercase"><?php echo $_SESSION["com"]["TenBenhVien"]?></span>
             </td>
             <td style=" width:40%; text-align:right">
                Địa chỉ: <?php echo $_SESSION["com"]["DiaChi"]?>
                <br />
                
                <br />
                SĐT: <?php echo $_SESSION["com"]["SoDT"]?>
             </td>
         </tr>               
     </table>     
     <?php  } ?>
     <?php if($_GET["header"]=="left"){ ?>
        <div style=" margin-left:55px;margin-top:20px">
     <?php  } ?>
     <table cellpadding="0" cellspacing="0" border="0" style="width:100%;font-family:Tahoma, Geneva, sans-serif;color:#00b38b">
        <tr>
             <td style="text-align:center">
                <span style="letter-spacing: 0.5px;font-weight:bold;font-size:26px;">PHIẾU KHÁM BỆNH VÀO VIỆN</span>
                <br />
                <span style="font-weight:bold;font-size:20px;">Phòng khám:</span>
                
             </td>
         
         </tr>    
     </table>
    <table class="container"cellpadding="0" cellspacing="0" border="0" style="width:100%;font-family:Tahoma, Geneva, sans-serif;color:#036;;font-size:13px">        
         <tr>
            <td colspan="2"><b>I.HÀNH CHÍNH:<b></td>
            <td style="padding-left: 11px;">Tuổi</td>
         </tr>
         <tr>
            <td>1.Họ và tên(in hoa):<b style="margin-left: 10px;"><?=$thongtinbenhnhan[0]["HoLotBenhNhan"]." ".$thongtinbenhnhan[0]["TenBenhNhan"];?></b></td>
            <td>2.Sinh ngày:
                            <?php
                                $data=$thongtinbenhnhan[0]["NgayThangNamSinh"];
                                list($day, $month, $year) = explode("-", $data);
                                                     
                            ?>
                            <input style="width:18px;text-align:center;" type="text" id="ngay1" name="ngay1" value="<?php echo substr($day, 0,1)?>"   maxlength="1" > 
                            <input style="width:18px;text-align:center;" type="text" id="ngay2" name="ngay2" value="<?php echo substr($day, 1,1)?>" maxlength="1" > 
                            <input style="width:18px;text-align:center;" type="text" id="thang1" name="thang1" value="<?php echo substr($month, 0,1)?>" maxlength="1" > 
                            <input style="width:18px;text-align:center;" type="text" id="thang2" name="thang2" value="<?php echo substr($month, 1,1)?>" maxlength="1" > 
                            <input style="width:18px;text-align:center" type="text" id="nam1" name="nam1" value="<?php echo substr($year, 0,1)?>" maxlength="1" > 
                            <input style="width:18px;text-align:center;" type="text" id="nam2" name="nam2" value="<?php echo substr($year, 1,1)?>" maxlength="1" > 
                            <input style="width:18px;text-align:center;" type="text" id="nam3" name="nam3" value="<?php echo substr($year, 2,1)?>" maxlength="1" > 
                            <input style="width:18px;text-align:center;" type="text" id="nam4" name="nam4" value="<?php echo substr($year, 3,1)?>" maxlength="1" > 
            </td>
           
            <td>
                <input style="width:18px;text-align:center;" type="text" id="tuoi1" name="tuoi1" value="<?php echo substr($thongtinbenhnhan[0]["Tuoi"], 0,1)?>"  maxlength="1" > 
                <input style="width:18px;text-align:center;" type="text" id="tuoi2" name="tuoi2" value="<?php echo substr($thongtinbenhnhan[0]["Tuoi"], 1,1)?>"  maxlength="1" > 

            </td>
         </tr>
         <tr>
            <td>3.Giới tính:    <?php
                                    if($thongtinbenhnhan[0]["GioiTinh"]=="0"){
                                       /* $("#nam").prop('checked', true);*/
                                      $male_status = 'checked';
                                      $female_status = 'unchecked';
                                    }
                                    else{
                                        $male_status = 'unchecked';
                                        $female_status = 'checked';
                                    }

                                ?>
                                a. Nam <input id="nam" style="vertical-align: middle;width:10px" lang="nam" type="radio" name="sex" <?PHP print $male_status; ?> value="male" > 
                                b. Nữ  <input id="nu"  style="vertical-align: middle;width:10px" lang="nu" type="radio" name="sex" <?PHP print $female_status; ?> value="female">
                                
            </td>
            <td>4.Nghề nghiệp: <b><?= $thongtinbenhnhan[0]["TenNgheNghiep"]?></b></td>
            <td>
                <input style="width:18px;text-align:center;" type="text" id="nghe1" name="nghe1" maxlength="1" > 
                <input style="width:18px;text-align:center;" type="text" id="nghe2" name="nghe2" maxlength="1" > 
            </td>
         </tr>
         <tr>
            <td>5.Dân tộc:    <b><?= $thongtinbenhnhan[0]["TenDanToc"]?></b>
                              <input style="width:18px;text-align:center;float:right;margin-right:10px" type="text"  id="dantoc1" name="dantoc1" maxlength="1" > 
                              <input style="width:18px;text-align:center;float:right" type="text"  id="dantoc2" name="dantoc2" maxlength="1" > 
            </td>
            <td>6.Quốc tịch: <b><?= $thongtinbenhnhan[0]["TenQuocTich"]?></b></td>
            <td>
                <input style="width:18px;text-align:center;" type="text" id="quoctich1" name="quoctich1" maxlength="1" > 
                <input style="width:18px;text-align:center;" type="text" id="quoctich2" name="quoctich2" maxlength="1" >
            </td>
         </tr>
         <tr>
            <td>7.Địa chỉ: <b><?php echo $thongtinbenhnhan[0]["DiaChi"]?></b></td>
            <td>Xã,phường: <b><?= $thongtinbenhnhan[0]["TenXaPhuong"]?></b></td>
             <td>
                <input style="width:18px;text-align:center;" type="text" id="xa1" name="xa1" maxlength="1" > 
                <input style="width:18px;text-align:center;" type="text" id="xa2" name="xa2" maxlength="1" >
            </td>
         </tr>
         <tr>
            <td>
                Quận,Huyện:  <b><?= $thongtinbenhnhan[0]["TenQuanHuyen"]?></b>
                             <input style="width:18px;text-align:center;float:right;margin-right:10px" type="text" id="quan1" name="quan1" maxlength="1" > 
                             <input style="width:18px;text-align:center;float:right" type="text" id="quan2" name="quan2" maxlength="1" >
            </td>
            <td>Tỉnh,thành phố <b><?= $thongtinbenhnhan[0]["TenTinhThanhPho"]?></b></td>
            <td>
                <input style="width:18px;text-align:center;" type="text" id="tinh1" name="tinh1" maxlength="1" > 
                <input style="width:18px;text-align:center;" type="text" id="tinh2" name="tinh2" maxlength="1" >
            </td>
         </tr>
         <tr>
            <td>8.Nơi làm việc:<b><?= $thongtinbenhnhan[0]["TenCty"]?></b></td>
            <td>9.Đối tượng:<input style="width:60%;text-align:center;" type="text" id="doituong" name="doituong" ></td>
            <td></td>
         </tr>
         <tr>
            <td>10.Số thẻ BHYT: <input style="width:18px;text-align:center;" type="text" id="bhyt1" name="bhyt1" maxlength="1" > 
                                <input style="width:18px;text-align:center" type="text" id="bhyt2" name="bhyt2" maxlength="1" > 
                                <input style="width:18px;text-align:center;" type="text" id="bhyt3" name="bhyt3" maxlength="1" > 
                                <input style="width:18px;text-align:center;" type="text" id="bhyt4" name="bhyt4" maxlength="1" > 
                                <input style="width:60px;text-align:center;" type="text" id="bhyt5" name="bhyt5" maxlength="3" > 
            </td>
         </tr>
         </table>
          <table  class="container" cellpadding="0" cellspacing="0" border="0" style="width:100%;font-family:Tahoma, Geneva, sans-serif;color:#036;;font-size:13px">
            <tr>
                <td>BHYT có giá trị từ:</td>
                <td><input name="bhyttu"type="text" class="text_1"style="width:53%"></td>
                <td colspan="2">Đến:</td>
                <td><input name="bhytden"type="text" class="text_1" style="width:53%"></td>
            </tr>
             <tr>
                <td>Nơi khám chữa bệnh ban đầu:</td>
                <td><input type="text" name="noikhambandau" class="text_1" style="width:53%"></td>
                <td colspan="2">Mã KCBBĐ:</td>
                <td><input type="text" name="makcbbd" class="text_1"style="width:53%"></td>
             </tr>
       
         <tr>
            <td colspan="3"><b><i>11.Họ tên,địa chỉ người nhà khi cần báo tin:<i></b></td>
         </tr>
         <tr>
            <td colspan="5"><textarea name="nguoicanbaotin" style="width:97%;height:40px"></textarea></td>
         </tr>
         <tr>
            <td>12.Đến khám lúc </td>
            <td><input type="text" name="denkhamluc" class="text_1"style="width:53%"></td>
            <td >ngày </td>
            <td><input type="text" name="ngay" class="text_1"style="width:53%"></td>
         </tr>
         <tr>
            <td>13.Chuẩn đoán nới giới thiệu</td>
         </tr>
         <tr>
            <td colspan="5"><textarea name="noigioithieu" style="width:97%;height:20px"></textarea></td>
        </tr>
         <tr>
            <td colspan="3"><b>II.LÝ DO VÀO VIỆN:</b></td>
            
         </tr>
         <tr>
            <td colspan="5"><textarea  name="lydovaovien" style="width:97%;height:40px"></textarea></td>
        </tr>
        </tr>
        
        <tr>
            <td><b>III.HỎI BỆNH:</b></td>
        </tr>
        <tr>
            <td colspan="3">1.Quá trình bệnh lý:</td>
           
         </tr>
         <tr>
             <td colspan="5"><textarea name="quatrinhbenhly" style="width:97%;height:40px"></textarea></td>
         </tr>
        </tr>
        
        <tr>
            <td>2.Tiền sử bệnh:</td>
        </tr>
        <tr>    
            <td colspan="4">- Bản thân:</td>
        </tr>
        <tr>
            <td colspan="5"><textarea  name="banthan" style="width:97%;height:40px"></textarea></td>
        </tr>
        <tr>    
            <td colspan="4">- Gia đình:</td>
        </tr>
        <tr>
            <td colspan="5"><textarea name="giadinh" style="width:97%;height:40px"></textarea></td>
        </tr>
        <tr>
            <td><b>IV.KHÁM XÉT:</b></td>
        </tr>
        <tr>
            <td colspan="4">1.Toàn thân:</td>
            <TH ROWSPAN=4 ><textarea id="dauhieusinhton" name="dauhieusinhton" style="width:90%;height:125px;margin-left:-12%"></textarea></TH>
        </tr>
        <tr>
            <td colspan="4"><textarea name="toanthan" style="width:97%;height:40px"></textarea></td>
            
        </tr>
        <tr>
            <td colspan="4">2.Các bộ phận:</td>
        </tr>
        <tr>
            <td colspan="4"><textarea name="cacbophan" style="width:97%;height:40px"></textarea></td>
        </tr>
        <tr>
            <td colspan="3">3.Tóm tắt kết quả lâm sàng:</td>
        </tr>
        <tr>
            <td colspan="5"><textarea name="tomtat" style="width:97%;height:20px"></textarea></td>
        </tr>
        <tr>
            <td colspan="3">4.Chẩn đoán vào viện:</td>
        </tr>
        <tr>
            <td colspan="5"><textarea name="chuandoanvaovien" style="width:97%;height:20px"></textarea></td>
        </tr>
        <tr>
            <td colspan="3">5.Đã xử lý (thuốc,chăm sóc...):</td>
        </tr>
        <tr>
            <td colspan="5"><textarea name="daxuly" style="width:97%;height:20px"></textarea></td>
        </tr>
        <tr>
            <td colspan="3">6.Cho vào điều trị tại khoa:</td>
        </tr>
        <tr>
            <td colspan="5"><textarea name="chovaodieutri" style="width:97%;height:20px"></textarea></td>
        </tr>
        <tr>
            <td colspan="3">7.Chú ý:</td>
        </tr>
        <tr>
            <td colspan="5"><textarea name="chuy" style="width:97%;height:20px"></textarea></td>
        </tr>
     </table>
      <table cellpadding="0" cellspacing="0" border="0" style="color:#036;font-size:13px; width:100%;font-family:Tahoma, Geneva, sans-serif; border-top:0px solid #000;  padding:5px 0px">           
         <tr>
              <td><button type="button" id="luuphieu">Lưu phiếu khám</button></td>
             <td style="width:35%;text-align:right" valign="top">
                 <i>
                    
                   Đà Nẵng, Ngày <?php echo date("d")." tháng " . date("m")." năm " .  date("Y"); ?>
                 </i>
                 
                    <h3 style="margin-top:0px">BÁC SĨ KHÁM BỆNH</h3>
                
                 
            </td>             
         </tr>            
     </table>
</body>
 <script type="application/javascript">
        $(document).ready(function() {
            $("#luuphieu").button();
           
        });
        $("#luuphieu").click(function(){
             phancach="";
            dataToSend ='{';
            key1='';
            i=0;
           
            /*$('#container').find(':input[type=text],select,textarea,input[type=hidden],input[type=checkbox]:checked').each(function(){ 
                if(i>0){
                phancach=","; 
                        }
              dataToSend += phancach + '"'+ this.name + '":"' + this.value +'"' ;
              i++;
                })*/
             $('.container').find(':input[type=text],select,textarea,input[type=hidden],input[type=checkbox]:checked').each(function(){ 
                if(i>0){
                phancach=","; 
                        }
              dataToSend += phancach + '"'+ this.name + '":"' + this.value +'"' ;
              i++;
                })
            
             
            
             dataToSend +='}'; 
              //alert(dataToSend);
             dataToSend = jQuery.parseJSON(dataToSend);
             alertObject(dataToSend);
        })
    </script>
</html>
 