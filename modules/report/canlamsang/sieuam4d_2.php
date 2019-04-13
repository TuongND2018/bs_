<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Report</title>
<style >
body{
    overflow:auto;
    margin:0;
}
pre {
 white-space: pre-wrap;       /* css-3 */
 white-space: -moz-pre-wrap;  /* Mozilla, since 1999 */
 white-space: -pre-wrap;      /* Opera 4-6 */
 white-space: -o-pre-wrap;    /* Opera 7 */
 word-wrap: break-word;       /* Internet Explorer 5.5+ */
 font:13px Tahoma, Geneva, sans-serif;
}
#footer
{
    clear: both;
    color: Black;
    text-align: right;
    vertical-align: middle;
    line-height: normal;
    margin: 0;
    padding-right: 10px!important;
    position: fixed;
    bottom: 0px;
    width: 90%;
    font-size: 13px;
    border-top:1px solid #000;
    right: 5px;
}
</style>
</head>
 
<body>
    <?php
        $data= new SQLServer;//tao lop ket noi SQL
        $params = array($_GET["id_benhnhan"]);//tao param cho store 
        $store_name="{call GD2_GetThongTinBenhNhan(?)}";//tao bien khai bao store
        $get_thongtinbenhnhan=$data->query( $store_name,$params);//Goi store
        $excute= new SQLServerResult($get_thongtinbenhnhan);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
        $thongtinbenhnhan= $excute->get_as_array();//Tra ve mang toan bo data lay duoc  
         
        
        $params1 = array($_GET["id_kham"]);//tao param cho store 
        $store_name1="{call GD2_GetKhamById_Kham(?)}";//tao bien khai bao store
        $get_thongtinluotkham=$data->query( $store_name1,$params1);//Goi store
        $excute1= new SQLServerResult($get_thongtinluotkham);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
        $thongtinluotkham= $excute1->get_as_array();//Tra ve mang toan bo data lay duoc
        //print_r($thongtinluotkham);   
         if($thongtinluotkham[0]["GhiChu"]==""){
            $denghi="";
        }
        else{
            $denghi="ĐỀ NGHỊ";
        }     
    ?>
    <div class="footer" id="footer"><i>Siêu âm không tầm soát được tất cả các dị tật của thai nhi. <br>
                        Phòng siêu âm sản phụ khoa FAMILY - Bác sỹ gia đình Đà Nẵng. <br>
                        Máy siêu âm VOLUSON E6 - USA - Thiết bị hiện đại nhất tại miền Trung Việt Nam  <br>
Phụ trách: BS Nguyễn Văn Thụy. Tu nghiệp tại Pháp và Mỹ. Giáo sư thỉnh giảng đại học UTMB, Galveston, Texas<br></i></div>
    <?php if($_GET["header"]=="left"){ ?>
        <div style="font-size:14px;font-family:Tahoma, Geneva, sans-serif;-webkit-transform: rotate(270deg);-moz-transform: rotate(270deg);-o-transform: rotate(270deg);writing-mode: rl-tb;position:absolute;top:582px;left:-384px">  <span style="letter-spacing: 0.5px;font-weight:bold;color:#00b3a0">FAMILY</span> <img src="images/logo_mau.png" />  <span style="letter-spacing: 0.5px;text-transform:uppercase"><?php echo $_SESSION["com"]["TenBenhVien"]?></span> - <?php echo $_SESSION["com"]["DiaChi"]?> * T: <?php echo $_SESSION["com"]["SoDT"]?></div>
    <?php } ?>
    <?php if($_GET["header"]=="top"){ ?>   
    <table cellpadding="0" cellspacing="0" border="0" style="width:100%;font-family:Tahoma, Geneva, sans-serif;">
         <tr style="font-size:14px;">
             <td style=" width:60%">
                <span style="letter-spacing: 0.5px;font-weight:bold;color:#00b3a0">FAMILY</span> <img src="images/logo_mau.png" /> 
                <br />
                <span style="letter-spacing: 0.5px;text-transform:uppercase"><?php echo $_SESSION["com"]["TenBenhVien"]?></span>
             </td>
             <td style=" width:40%; text-align:right">
                Địa chỉ: <?php echo $_SESSION["com"]["DiaChi"]?>
                <br />
                Đà Nẵng
                <br />
                SĐT: <?php echo $_SESSION["com"]["SoDT"]?>
             </td>
         </tr>               
     </table>     
     <?php  } ?>
     <?php if($_GET["header"]=="left"){ ?>
        <div style=" margin-left:65px;margin-top:20px">
     <?php  } ?>
     <table cellpadding="0" cellspacing="0" border="0" style="width:100%;font-family:Tahoma, Geneva, sans-serif;color:#0E71B2">
        <tr>
             <td style="text-align:center">
                <span style="letter-spacing: 0.5px;font-weight:bold;font-size:26px;"><?php echo $_GET["tieude"]?></span>
                <br />
                <span style="font-weight:bold;font-size:20px;">(<?php echo $_GET["chucnang"]?>)</span>
                <br />
                <span style="font-weight:bold;font-size:20px;">*******</span>
                <div style="height:10px;">
                </div>
             </td>
         
         </tr>    
     </table>
     <table cellpadding="0" cellspacing="0" border="0" style="color:#036;line-height:2;font-size:13px; width:100%;font-family:Tahoma, Geneva, sans-serif; border-top:1px solid #000; border-bottom:1px solid #000; padding:5px 0px">         
         <tr>
            <td> Họ tên: <b><?=$thongtinbenhnhan[0]["HoLotBenhNhan"]." ".$thongtinbenhnhan[0]["TenBenhNhan"];?></b></td> 
            <td>Tuổi: <?=$thongtinbenhnhan[0]["Tuoi"];?></td>
            <td>G.tính: <?=$thongtinbenhnhan[0]["Gioi"];?></td>
            <td>ID: <?=$thongtinbenhnhan[0]["MaBenhNhan"];?></td>
         </tr>
         <tr>
            <td >Địa chỉ: <?=$thongtinbenhnhan[0]["DiaChi"];?></td> 
            <td colspan="3">Ngày khám:  <?php
            if($thongtinluotkham[0]["NgayGioChanDoan"]!=""){
                echo $thongtinluotkham[0]["NgayGioChanDoan"]->format("H:i ".$_SESSION["config_system"]["ngaythang"]);
            }
            ?></td>            
         </tr>  
              
     </table>
     <table cellpadding="0" cellspacing="0" border="0" style="font-size:13px; width:100%;font-family:Tahoma,arial, Geneva, sans-serif;padding:5px 7px">         
        <tr>
             <td colspan="2" style="width:100%;padding-top:10px">
                <div id="images_container" style="width:49%;float:left"></div>
                <div id="images_container2"style="width:49%;float:left"></div>
            </td>
        </tr>
         <tr>

            <td colspan="2" valign="top" style="width:100%">
                <b style="font-size:15px;color:#0E71B2;">MÔ TẢ</b>
               
                <pre><i style="line-height:1.3"><?=$thongtinluotkham[0]["MoTa"] ?></i></pre>
            </td>
        </tr>
        <tr><td valign="top" style="width:50%">
                <b style="font-size:15px;color:#0E71B2">KẾT LUẬN</b>
                <pre><b><?=$thongtinluotkham[0]["KetLuan"] ?></b></pre>
                
                <b style="font-size:15px;color:#0E71B2"><?=$denghi?></b>
                <pre><?=$thongtinluotkham[0]["GhiChu"] ?></pre>
            </td> 
                    
         </tr>   
          <tr>
             <td style="width:50%; text-align:center;float:right" valign="top">
                 <!-- <div id="images_container"></div> -->
                 <!-- <br><br> -->
                 <i>
                    In từ dữ liệu gốc<br />
                    Ngày <?php echo date("d")." tháng " . date("m")." năm " .  date("Y"); ?>
                 </i>
                 <br />
                 <b>
                    <?php echo $_GET["chucdanh"]?>
                 </b>
                 <br />
                 <img id="bs_chandoan" width="159"/>
                 <br />                 
                 <b style="color:red"><?=$thongtinluotkham[0]["BsChanDoan"] ?></b>
            </td> 
         </tr>          
     </table>
    <?php if($_GET["header"]=="left"){ ?>
        </div>
    <?php   } ?>
    
    <script type="application/javascript">
        $(document).ready(function() {
            load_sign('<?=$thongtinluotkham[0]["chuky_bacsy"]?>',"bs_chandoan");            
             
            
            <?php 
                echo "var _links='".$_GET['links']."';";
            ?>
            
            _split_link= _links.split(":::");
                     
                $("#images_container").append(' <img id="myImg'+0+'" width="300px" height="180px" src="'+_split_link[0]+'"  /><div style="height:7px"></div> ');
                $("#images_container2").append(' <img id="myImg'+1+'" width="300px" height="180px" src="'+_split_link[1]+'"  /><div style="height:7px"></div> ');
            
            //setInterval(function(){   send_message("print_preview","");   },2000);
            
            
                /*  var i=i+2;
            //alert(i)
            var ii=0;
            $("img").one('load', function() {
             
            }).each(function() {
                ii++;
              if(this.complete){ 
                if(ii==i){
                    //alert(ii)
                    t=setTimeout(function(){
                        //send_message("print_preview","");                 
                    },500); 
                }
             
              };
            });*/
            
                 
              print_preview();
            
                /*  d=setTimeout(function(){ 
                            //window.close();
                    },1100);*/
            /*t=setTimeout(function(){
                send_message("print_preview","");
                //window.print();
                d=setTimeout(function(){ 
                    window.close();
                },500);
            },500);*/
        });
    </script>
</body>
</html>
 