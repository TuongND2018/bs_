<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Report</title>
<style >
body{
    overflow:auto;
}
pre {
 white-space: pre-wrap;       /* css-3 */
 white-space: -moz-pre-wrap;  /* Mozilla, since 1999 */
 white-space: -pre-wrap;      /* Opera 4-6 */
 white-space: -o-pre-wrap;    /* Opera 7 */
 word-wrap: break-word;       /* Internet Explorer 5.5+ */
 font:13px Tahoma, Geneva, sans-serif;
}

</style>
</head>
 
<body style="margin-left:55px!important">
    <?php
        $data= new SQLServer;//tao lop ket noi SQL
        $params = array($_GET["idbenhnhan"]);//tao param cho store 
        $store_name="{call GD2_GetThongTinBenhNhan(?)}";//tao bien khai bao store
        $get_thongtinbenhnhan=$data->query( $store_name,$params);//Goi store
        $excute= new SQLServerResult($get_thongtinbenhnhan);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
        $thongtinbenhnhan= $excute->get_as_array();//Tra ve mang toan bo data lay duoc  
         
        
        $params1 = array($_GET["id_luotkham"]);//tao param cho store 
        $store_name1="{call GD2_MedicalReportSelectByID_LuotKham(?)}";//tao bien khai bao store
        $get_thongtinluotkham=$data->query( $store_name1,$params1);//Goi store
        $excute1= new SQLServerResult($get_thongtinluotkham);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
        $thongtinluotkham= $excute1->get_as_array();//Tra ve mang toan bo data lay duoc
       // print_r($thongtinluotkham);      
        if($thongtinluotkham!=null){
            $thongtinluotkham[0]["tennv"]=$thongtinluotkham[0]["tennv"];
        }
        else{
            $thongtinluotkham[0]["tennv"]="";
        }
		
		if($thongtinbenhnhan[0]["Gioi"]=='Nữ'){
            $thongtinbenhnhan[0]["Gioi"]='Female';
        }
        else{
            $thongtinbenhnhan[0]["Gioi"]='Male';
        }
    ?>

    <?php if($_GET["header"]=="left"){ ?>
        <div style="font-size:14px;font-family:Tahoma, Geneva, sans-serif;-webkit-transform: rotate(270deg);-moz-transform: rotate(270deg);-o-transform: rotate(270deg);writing-mode: rl-tb;position:absolute;top:550px;left:-340px">  <span style="letter-spacing: 0.5px;font-weight:bold">FAMILY</span> <img src="images/logo_print.png" />  <span style="letter-spacing: 0.5px;text-transform:uppercase"><?php echo $_SESSION["com"]["TenBenhVien"]?></span> - <?php echo $_SESSION["com"]["DiaChi"]?> * T: <?php echo $_SESSION["com"]["SoDT"]?></div>
    <?php } ?>
    <?php if($_GET["header"]=="top"){ ?>   
    <table cellpadding="0" cellspacing="0" border="0" style="width:100%;font-family:Tahoma, Geneva, sans-serif;">
         <tr style="font-size:14px;">
             <td style=" width:45%">
                <span style="letter-spacing: 0.5px;font-weight:bold">FAMILY</span> <img src="images/logo_print.png" /> 
                <br />
                <span style="letter-spacing: 0.5px;text-transform:uppercase"><?php echo $_SESSION["com"]["TenBenhVien"]?></span>
             </td>
             <td style=" width:55%; text-align:right">
                 FAMILY HOSPITAL<br />
                Address: 73 Nguyen Huu Tho St, Da Nang City, Viet Nam.

                <br />
                
                Tel: +84 0511 3632111
             </td>
         </tr>               
     </table>     
     <?php  } ?>
     <?php if($_GET["header"]=="left"){ ?>
        <div style=" margin-left:55px;margin-top:20px">
     <?php  } ?>
     <table cellpadding="0" cellspacing="0" border="0" style="width:100%;margin-top:20px;font-family:Tahoma, Geneva, sans-serif;color:#00b38b">
        <tr>
             <td style="text-align:center">
                
                <span style="font-weight:bold;font-size:20px;">MEDICAL REPORT</span>
                <br />
                <span style="font-weight:bold;font-size:20px;">*******</span>
                <div style="height:10px;">
                </div>
             </td>
         
         </tr>    
     </table>
     <table cellpadding="0" cellspacing="0" border="0" style="color:#036;font-size:13px;margin-bottom: 20px; width:100%;font-family:Tahoma, Geneva, sans-serif; border-top:1px solid #000; border-bottom:1px solid #000; padding:5px 0px">         
         <tr>
            <td> Name: <b><?=$thongtinbenhnhan[0]["HoLotBenhNhan"]." ".$thongtinbenhnhan[0]["TenBenhNhan"];?></b></td> 
            <td>Age: <?=$thongtinbenhnhan[0]["Tuoi"];?></td>
            <td>Sex: <?=$thongtinbenhnhan[0]["Gioi"];?></td>
            <td>ID: <?=$thongtinbenhnhan[0]["MaBenhNhan"];?></td>
         </tr>
        <tr>
            <td  style="width:65%">Address: <?=$thongtinbenhnhan[0]["DiaChi"];?></td> 
            <td colspan="3">Date:<?= $_GET["ngaygio"]?></td>            
         </tr>  
     </table>
      <td valign="top" style="width:65%;padding-top:10px">
                <b style="font-size:15px;color:#00b38b">DESCRIPTIONS</b>
                <br />
                <pre><i><?php if($_GET["kiemtranull"]=="1"){

                            }else{
                                echo $thongtinluotkham[0]["MoTaBenh"] ;
                            }
                
                ?></i></pre>
                
                <b style="font-size:15px;color:#00b38b">DIAGNOSIS</b><br />
                <pre><b><?php if($_GET["kiemtranull"]=="1"){

                            }else{
                                echo $thongtinluotkham[0]["KetLuan"] ;
                            }
                
                ?></b></pre>
               
                <b style="font-size:15px;color:#00b38b">MANAGEMENT</b><br />
                <pre><b><?php if($_GET["kiemtranull"]=="1"){

                            }else{
                                echo $thongtinluotkham[0]["HuongDanDieuTri"] ;
                            }
                
                ?></b></pre>
            </td> 
     <table cellpadding="0" cellspacing="0" border="0" style="margin-top:30px;margin-left:200px;color:#036;font-size:13px; width:100%;font-family:Tahoma, Geneva, sans-serif; border-top:0px solid #000;  padding:5px 0px">           
         <tr>
            
             <td style="width:35%;text-align:center" valign="top">
                 <i>
                    
                    DA NANG, <?php echo date("d")."/" . date("m")."/" .  date("Y"); ?>
                 </i>
                 
                    <h3 style="margin-top:0px">DOCTOR</h3>
                 <div style="height:80px">
                 <img id="bs_chandoan" width="100"/></div>
                 <b style="color:red"> <?=$thongtinluotkham[0]["tennv"];?></b>
            </td>             
         </tr>            
     </table>
    <?php if($_GET["header"]=="left"){ ?>
        </div>
    <?php   } ?>
    
   
</body>
</html>
 <script type="application/javascript">
        $(document).ready(function() {
		 if(1==<?= $_GET['chuky']?>){
         	load_sign('<?=$thongtinluotkham[0]["HinhChuKy"]?>',"bs_chandoan");
		 }
         print_preview();
            
        });
    </script>