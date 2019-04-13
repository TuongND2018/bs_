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
    text-align: left;
    vertical-align: middle;
    line-height: normal;
    margin: 0;
    padding-right: 10px!important;
    position: fixed;
    bottom: 0px;
    width: 90%;
    font-size: 13px;
    right: 5px;
}
.top{
	background:url("./modules/report/canlamsang/img/top.png")  ;
	background-repeat:repeat-x;
	background-position:top;
	
	 
}
.bottom{
	background:url("./modules/report/canlamsang/img/bottom.png")  ;
	background-repeat:repeat-x;
	background-position:bottom;
	 
}
.left{
	background:url("./modules/report/canlamsang/img/left.png")  ;
	background-repeat:repeat-y;
	background-position:left;	 
}
.right{
	background:url("./modules/report/canlamsang/img/right.png")  ;
	background-repeat:repeat-y;
	background-position:right;	 
}
.conner1{
	background:url("./modules/report/canlamsang/img/conner1.png")  ;
	background-repeat:no-repeat;
	background-position:top left;
	  
}
.conner2{
	background:url("./modules/report/canlamsang/img/conner2.png")  ;
	background-repeat:no-repeat;
	background-position:top right;	  
}
.conner3{
	background:url("./modules/report/canlamsang/img/conner3.png")  ;
	background-repeat:no-repeat;
	background-position:bottom left;	  
}

#conner4,#conner5,#conner6,#conner7,#conner8{
	background:url("./modules/report/canlamsang/img/conner4.png")  ;
	background-repeat:no-repeat;
	background-position:bottom right;	  
}
#clound,#clound2{
	background:url("./modules/report/canlamsang/img/stork.jpg")  ;
	background-repeat:repear-x;
	background-position:top;
	width:91%; 

}
img{
	margin-top:14px;
	padding-bottom:14px;
	margin-left:19px;	
	padding-right:19px;	 
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

        $params2 = array($_GET["id_kham"]);//tao param cho store 
        $store_name2="{call GD2_GetTuoiThai_SieuAm4D_ByID_Kham(?)}";//tao bien khai bao store
        $get_khamthai=$data->query( $store_name2,$params2);//Goi store
        $excute2= new SQLServerResult($get_khamthai);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
        $khamthai= $excute2->get_as_array();//Tra ve mang toan bo data lay duoc
       // print_r($khamthai); 
        $sotuanthai=floor($khamthai[0]["SoNgayThai"]/7);
        $songaythai=$khamthai[0]["SoNgayThai"]%7; 
         if($thongtinluotkham[0]["NgayGioChanDoan"]!=null){
        	 $gio=$thongtinluotkham[0]["NgayGioChanDoan"]->format("H:i "); 
       		 $ngay=$thongtinluotkham[0]["NgayGioChanDoan"]->format($_SESSION["config_system"]["ngaythang"]);
        }
    ?>
     <div class="footer" id="footer">

        <?php if($thongtinluotkham[0]["NgayGioChanDoan"]==""){
					echo("");
			}
			else{ 
				echo('<div style=" text-align: center">'.$thongtinbenhnhan[0]["HoLotBenhNhan"].' '.$thongtinbenhnhan[0]["TenBenhNhan"].' - '.$thongtinbenhnhan[0]["Tuoi"].' tuổi - Siêu âm lúc '.$gio.' ngày '.$ngay.' Thai '.$sotuanthai.' tuần '.$songaythai.' ngày</div>');
			}
			?>
        <div style="display:inline;"><b style="color:#04B45F">FAMILY </b><img height='40px' style="margin-top:0px!important;padding-bottom:0px!important;margin-left:0px!important;padding-right:0px;!important;color:#DBA901" src='images/logo_print.png' /> TRUNG TÂM BÁC SỸ GIA ĐÌNH ĐÀ NẴNG</div>
        <div style="display:inline;margin-left: 300px;color:#DBA901 "> Copyright 2011 - FAMILY HEALTHCARE JSC</div>
    </div>
    <div style="width:100%;" align="center">
			<div id="clound" style="padding-top: 77px"></div>
				<div style="width:448px;float:left; margin-top:20px" >
				<div class="top">
					<div class="bottom">
						<div class="left">
							<div class="right">
								<div class="conner1">
									<div class="conner2">
										<div class="conner3">
											<div id="conner4">
											</div>
										</div>
									</div> 
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
           <div style="width:620px;float:right;margin-top:20px" > 
            <div style="width:298px;float:left;margin-right:5px" >
				<div class="top">
					<div class="bottom">
						<div class="left">
							<div class="right">
								<div class="conner1">
									<div class="conner2">
										<div class="conner3">
											<div id="conner5">
											</div>
										</div>
									</div> 
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div style="width:298px;float:left" >
				<div class="top">
					<div class="bottom">
						<div class="left">
							<div class="right">
								<div class="conner1">
									<div class="conner2">
										<div class="conner3">
											<div id="conner6">
											</div>
										</div>
									</div> 
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div style="width:620px;float:right;;margin-top:5px" > 
            <div style="width:298px;float:left;margin-right:5px" >
				<div class="top">
					<div class="bottom">
						<div class="left">
							<div class="right">
								<div class="conner1">
									<div class="conner2">
										<div class="conner3">
											<div id="conner7">
											</div>
										</div>
									</div> 
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div style="width:298px;float:left;" >
				<div class="top">
					<div class="bottom">
						<div class="left">
							<div class="right">
								<div class="conner1">
									<div class="conner2">
										<div class="conner3">
											<div id="conner8">
											</div>
										</div>
									</div> 
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
</body>
</html>
  <script type="application/javascript">
        $(document).ready(function() {
          //  load_sign('<?=$thongtinluotkham[0]["chuky_bacsy"]?>',"bs_chandoan");            
             
            
            <?php 
                echo "var _links='".$_GET['links']."';";
            ?>
            //alert(_links); 
            _split_link= _links.split(":::");
                     
                $("#conner4").append(' <img id="myImg'+3+'" width="410px" height="550px"src="'+_split_link[3]+'"  /> ');
                 $("#conner5").append(' <img id="myImg'+4+'"  width="260px" height="258px" src="'+_split_link[4]+'"  /> ');
                 $("#conner6").append(' <img id="myImg'+5+'"  width="260px" height="258px" src="'+_split_link[5]+'"  /> ');
                 $("#conner7").append(' <img id="myImg'+6+'"  width="260px" height="258px" src="'+_split_link[6]+'"  /> ');
                 $("#conner8").append(' <img id="myImg'+7+'"  width="260px" height="258px" src="'+_split_link[7]+'"  /> ');
           
                print_preview();
            
        });
    </script>