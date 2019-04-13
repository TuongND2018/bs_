
<?php
	if(isset($_GET["id_benhnhan"])){
		echo "<script type='text/javascript'>";
		echo "window.id_benhnhan=".$_GET["id_benhnhan"];
		echo "</script>";
		
	}else{
	if($_SESSION["ThongTinBenhNhan"]["ID"]==""){
		echo "<script type='text/javascript'>";
			echo "parent.postMessage('hosobenhnhantrong;' , '*')";
		
		echo "</script>";
		return;
	}else{
		echo "<script type='text/javascript'>";
		echo "window.id_benhnhan=".$_SESSION["ThongTinBenhNhan"]["ID"];
		echo "</script>";
	}
	}


	if(isset($_GET["id_kham"])){
		echo "<script type='text/javascript'>";
		echo "window.id_kham2=".$_GET["id_kham"];
		echo "</script>";
	}
	else{
		echo "<script type='text/javascript'>";
		echo "window.id_kham2=0";
		echo "</script>";
		}
?>
 
 

<style type="text/css">
	fieldset{
	   -webkit-border-radius: 5px;
	   -moz-border-radius: 5px;
	   border-radius: 5px;
	   width:89%;
	   box-shadow:0px 0px 3px 0px #a0a0a0;
	   border:1px solid #919191;
	   margin-top:2px;
	   margin-left:5px;
	   margin-right:0px;	   
	   margin-right: -4px;			 
	}
	fieldset div{
		display:table;		
	}
	fieldset label{
		display:inline-block;
		width:30px;
		
		text-align:center;		 
	}
	fieldset input{		 
		width:35px; 
	}
	fieldset div div{
		display:table-cell;		
	}
	fieldset input{
		background:none!important;
		text-align:center;
		box-shadow:0px 0px 3px 0px #a0a0a0!important;
	    border:1px solid #919191!important;	
		text-shadow:0 1px 0 rgba(255, 255, 255, 0.6)!important;		
		margin-left:3px;
		padding:0px;
		font-size:12px;
		padding-bottom:2px;		 	
	}
	legend {
		background-color:#f5f3e5;
		text-shadow:0 1px 0 rgba(255, 255, 255, 0.6)!important;
		color:#000;		  
	}
	div#tinhtoan{
		display:table;
		width:40%;
		vertical-align:top;
	}
	div#tinhtoan br{
		height:1px;
		line-height:1px;
		 
	}
	
	div#tinhtoan div{
		display:table-cell;
		width:22%;
		vertical-align:top;		
	}
	#file{ cursor: pointer;
		direction: ltr;
		/*font-size: 200px;*/
		margin: 0;
		opacity: 0;
		position: absolute;
		right: 0;
		top: 0;
		border:1px solid #000;
		visibility:hidden;
		/*width:1000px;
		height:1000px;*/
	} 
	
	 button#last,button#first,button#prev,button#next{
		 font-size:7px!important;
		 margin-top:-6px;
		/* padding-left:20px;*/
		 
	 }
	
	 .ui-widget-overlay {
		  opacity:0.01;
		  filter: alpha(opacity=1); 
		  -ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=1)"; 
		  /*overlay trong suot*/  
		  }
	  
	 .ui-corner-all{		 
		 border-radius:3px!important;		 
	 }
	 .fm-button{
		 box-shadow:0px 0px 5px #383838;
		 border:1px solid #919191;
	 }  	
	.top_form{
		width:100%;
		height:139px;
		margin-top:3px;				
	}	 	 
	.thongtin_tongthe,.thongtin_chidinh,.thongtin_luotkham{
		display:inline-block;
		box-shadow:0px 0px 10px #a0a0a0;
		border:1px solid #919191;
		vertical-align:top;
		width:49%;		
	}
	.thongtin_chidinh{	 	 
		padding-bottom:4px;
		padding-top:4px;		
	}
	.thongtin_luotkham{
		box-shadow:0px 0px 10px #a0a0a0;
		border:1px solid #919191;
		display:inline-block;
		vertical-align:top;
		width:49%;
		overflow-y:none;
		margin-top:2px;
		height:67px;		 		
	}
	.thongtin_luotkham_scroll{
		overflow-y:scroll;
		width:100%;
		height:45px;
	}	 
	.canlamsang{
		vertical-align:top;
		overflow-y:scroll;
		height:76px;
		border-top:1px solid #919191;
		padding-top:2px;
		padding-left:2px;
		border-bottom:1px solid #919191;		 
	}	 
	.thongtin_luotkham div div{
		display:inline-block;
		box-shadow:0px 0px 10px #a0a0a0;
		border:1px solid #919191;
		font-size:11px;
		margin-left:2px;
		margin-top:2px;		 
		padding:2px;
		width:114px;
		height:30px;
		text-align:center;
		vertical-align:top;
		margin-bottom:2px;	
		text-shadow:0 1px 0 rgba(255, 255, 255, 0.6);		 
		vertical-align:text-bottom;
		cursor:pointer;
	}

	.navigator{
		 display:inline-block;
		 border:1px solid #327E04;
		 padding-top:6px;
		 margin-top:-4px;
		 margin-left:2px;
		 padding-bottom:2px;
		 padding-left:2px;
		 padding-right:1px; 
	}
	.navigator_title{
		display:inline-block;
		width:100px;
		text-align:center;
	}
	.ui-layout-mask {
		background:#FFF !important;
		opacity:.20 !important;
		filter:	alpha(opacity=20) !important;
	}
	.ui-button-text-only .ui-button-text {
   		padding: 0.4em 0.4em 0.4em 0;
	}

</style> 

<body> 
	<div class="top_form ui-widget-content" >
 	<div style="padding:2px 0px;" class="thongtin_tongthe">
 		<div class="patient_info"></div>        
    </div>
    <div class="thongtin_chidinh" style="width:50%">
 		<div class="form_row" >
        	<label style="width:90px;text-align:right">Người chỉ định:</label><input lang='luu' id="nguoi_chidinh"name="nguoi_chidinh"style="width:100px" type="text"disabled>
            <label style="width:90px;margin-left:10px;text-align:right">Người thực hiện:</label>
            <span class="custom-combobox">
                    <input id="nhanvien" name="nhanvien"  type="text" style="width:70px;">
            </span> 
            <input id="nhanvien1"  name="nguoithuchien" type="text" lang='luu' style="display:none" >
            <label style="width:128px;text-align:right;margin-left:15px">Bs chẩn đoán:</label>
            <span class="custom-combobox">
                    <input id="chuandoan" name="chuandoan"  type="text" style="width:70px;">
            </span> 
            <input id="chuandoan1"  name="chuandoan1" type="text" lang='luu' style="display:none" >
            <div style="height:3px"></div>
			<label style="width:90px;text-align:right">Ngày chỉ định:</label><input id="ngaychidinh"name="ngaychidinh"lang='luu'style="width:100px" type="text"disabled >
			<input id="giothuchien"  name="giothuchien" type="text" lang='luu'class="thongtin_thai zodi"style="width: 83px;margin-left: 10px;" disabled="disabled">
            <a href="#" id="dathuchien" class="	 ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="margin-left:0px;  margin-bottom:1px; ">Đã thực hiện<span class="ui-icon ui-icon-play"></span></a> 
     		<input id="giohoantat"  name="giohoantat" type="text" lang='luu' class="thongtin_thai zodi"style="width: 83px;margin-left: 33px; " disabled="disabled">
     		<a href="#" id="hoantat" class=" ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="width:77px;margin-left:0px; margin-bottom:1px; ">Hoàn tất<span class="ui-icon ui-icon-check"></span></a>   
        </div>        
    </div>
    <div class="thongtin_luotkham" id="left_col" >   
    	
    	<span id="caption" style="font-size:17px;color:#09C;margin-left:5px;margin-top:5px; font-weight:bold">Siêu âm doppler xuyên sọ</span>
		<br>
		<div>			
					
					<a href="#" id="valuesubmit" hidden class=" ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="margin-left:0px;float:right ">Lưu<span class="ui-icon ui-icon-refresh"></span></a>
					<a href="#" id="layketluan" class=" ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="margin-left:0px;float:right ">Lấy k.luận<span class="ui-icon ui-icon-refresh"></span></a> 
                    <a href="#" id="chonfile" class=" ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="margin-left:0px; float:right">Chọn file<span class="ui-icon ui-icon-plus"></span></a>
                    <a href="#" id="opentcd" class=" ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="margin-left:0px; float:right">Mở TCD<span class="ui-icon ui-icon-plus"></span></a>
					 
					<form id="image_submit">
                    	<input id="file" type="file" name="valueimage[]" multiple>
						<input type="hidden" name="action" id="action" multiple >
						<input type="hidden" name="default_name" id="default_name">  
						<input type="hidden" name="cmd" value="upload">
						<input type="hidden" name="target" value="f1_XA">    
						<input type="hidden" name="answer" value="42">  
						<input type="hidden" name="tenthumuc" id="tenthumuc">
						<input type="hidden" name="total_images" id="total_images" value="1"> 
						<input type="hidden" name="mota1" id="mota1"> 
						<input type="hidden" name="ketluan1" id="ketluan1">
						<input type="hidden" name="profile" id="profile" value="tcd"> 
                        <input type="hidden" name="ngayhoantat" id="ngayhoantat">  
                        <input type="hidden" name="chukybacsy" id="chukybacsy">   
                        <input type="hidden" name="chukyktv" id="chukyktv">   
                        <input type="hidden" name="chucdanhktv" id="chucdanhktv">  
                        <input type="hidden" name="chucdanhbacsy" id="chucdanhbacsy">  
                        <input type="hidden" name="tenbacsy" id="tenbacsy">  
                        <input type="hidden" name="tenktv" id="tenktv">    
                        <input type="hidden" name="tenbn" id="tenbn" >
    					<input type="hidden" name="mabn" id="mabn" >  
                        <input type="hidden" name="gioitinh" id="gioitinh" >     		
					</form>
        </div>    
		<br>
            <span class="navigator" >
                <button id="first">bắt đầu</button>
                <button id="prev">tới</button>
                <span class="navigator_title"></span>
                <button id="next">lui</button>
                <button id="last">kết thúc</button> 
            </span>
            <label id="ngay_kham"></label>        
    </div>
    
    <div class="thongtin_luotkham" id="right_col" style="width:50%">
    	 
    	<div>
    	<label id="id_trangthai"class="thongtin_thai" lang="luu" type="text" name="id_trangthai" style="font-size:14px;margin-left:5px;font-weight:bold"></label> 
       
        
    	<a href="#" id="luu" class=" ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="margin-left:0px;width:64px;  margin-top:3px;float: right; ">Lưu<span class="ui-icon ui-icon-disk"></span></a> 
    	<a href="#" id="sua" class=" ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="margin-left:0px;width:64px;  margin-top:3px;float: right; ">Sửa<span class="ui-icon ui-icon-pencil"></span></a>
    	<a href="#" id="boqua" class=" ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="margin-left:0px;width:64px;  margin-top:3px;float: right;">Bỏ qua<span class="ui-icon ui-icon-close"></span></a>		 	
    	</div>
    	<div style="margin-top: 12px;">
    	<a href="#" id="dong" class=" ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="margin-left:0px;width:64px;  margin-top:3px;float: right; ">Đóng<span class="ui-icon ui-icon-trash"></span></a> 
    	<a href="#" id="xemin" class=" ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="margin-left:0px;width:64px;    margin-top:3px;float: right; ">In<span class="ui-icon ui-icon-print"></span></a>	 
       
    	</div>
    	<div style="margin-top: -9px;margin-left:5px">
	    	<a href="#" id="open_form_hentra" style="color:blue">Giờ hẹn trả kết quả:</a>
	    	<label id="giohentra" style="color:blue;margin-left:5px"></label>
    	</div>
    	<div style="margin-top: 5px;margin-left:5px;color:#F781D8;font-size:13px" id="edit_by">
	    	<label>Sửa bởi:</label>
	    	<label id="nguoisua" style="color:blue"></label>
	    	<label id="ngaygiosua" style="color:blue"></label>
            &nbsp;<select  id="printer_list"></select>
    	</div> 
    </div>
   
 </div> 
<!--<div id="tcd_body2" >
		<a href="#" id="chonfile" class=" ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="margin-left:0px; ">Chọn file<input autocomplete="off" type="file" id="upload_input" value="Chọn file" ><span class="ui-icon ui-icon-plus"></span></a>
		 
		<a href="#" id="valuesubmit" class=" ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="margin-left:0px; ">Lưu<span class="ui-icon ui-icon-refresh"></span></a>
		<a href="#" id="layketluan" class=" ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="margin-left:0px;width:100px; ">Lấy kết luận<span class="ui-icon ui-icon-refresh"></span></a> 
		<form id="image_submit">
			<input type="hidden" name="action" id="action" >
		  	<input type="hidden" name="default_name" id="default_name">  
		    <input type="hidden" name="cmd" value="upload">
		    <input type="hidden" name="target" value="f1_XA">    
		    <input type="hidden" name="answer" value="42">  
		    <input type="hidden" name="tenthumuc" value="KETQUA" id="tenthumuc">
		    <input type="hidden" name="total_images" id="total_images" value="1"> 
            <input type="hidden" name="mota1" id="mota1"> 
            <input type="hidden" name="ketluan1" id="ketluan1">
            <input type="hidden" name="profile" id="profile" value="tcd">                 		
		</form>
	
</div> -->
     <?php
	 echo realpath("1.Doc");
	   //echo $_SERVER['DOCUMENT_ROOT']."/modules"."/".$_GET["module"];
	    //echo str_ireplace("/","\\\\", $_SERVER['DOCUMENT_ROOT']);
	 
	 ?>  
<div  id="tcd_body"style="width:99,8%;border:2px solid;height:100%" >
	<div class="ui-widget-content ui-layout-west" >	
	      
	    <div id="tinhtoan"  style="width:99%" >
	       <div >
	           <fieldset>
	                <legend>LMCA</legend>
	                <div>
	                    <div style="width:20%"><label>Mean</label><input autocomplete="off" type="text"   id="lm1" disabled></div>
	                    <div style="width:20%"><label>Peak</label><input autocomplete="off" type="text"   id="lm2" disabled></div> 
	                </div>
	                <br>
	                <div>
	                    <div style="width:20%"><label>PI</label><input autocomplete="off" type="text"   id="lpi1" disabled></div>
	                    <div style="width:20%"><label>Dias</label><input autocomplete="off" type="text"   id="lm3" disabled></div> 
	                </div>
	                 <br>
	                <div>
	                    <div style="width:20%"><label>RI</label><input autocomplete="off" type="text"   id="lr1" disabled></div>
	                    <div style="width:20%"><label>SD</label><input autocomplete="off" type="text"   id="ls1" disabled></div> 
	                </div>
	           </fieldset>
	       </div> 
	     
	       <div>
	          <fieldset>
	                <legend>LACA</legend>
	                <div>
	                    <div style="width:20%"><label>Mean</label><input autocomplete="off" type="text"   id="la1" disabled></div>
	                    <div style="width:20%"><label>Peak</label><input autocomplete="off" type="text"   id="la2" disabled></div> 
	                </div>
	                <br>
	                <div>
	                    <div style="width:20%"><label>PI</label><input autocomplete="off" type="text"   id="lpi2" disabled></div>
	                    <div style="width:20%"><label>Dias</label><input autocomplete="off" type="text"   id="la3" disabled></div> 
	                </div>
	                 <br>
	                <div>
	                    <div style="width:20%"><label>RI</label><input autocomplete="off" type="text"   id="lr2" disabled></div>
	                    <div style="width:20%"><label>SD</label><input autocomplete="off" type="text"   id="ls2" disabled></div> 
	                </div>
	           </fieldset>
	       </div> 
	       <div>
	            <fieldset>
	                <legend>LPCA</legend>
	                <div>
	                    <div style="width:20%"><label>Mean</label><input autocomplete="off" type="text"   id="lp1" disabled></div>
	                    <div style="width:20%"><label>Peak</label><input autocomplete="off" type="text"   id="lp2" disabled></div> 
	                </div>
	                <br>
	                <div>
	                    <div style="width:20%"><label>PI</label><input autocomplete="off" type="text"   id="lpi3" disabled></div>
	                    <div style="width:20%"><label>Dias</label><input autocomplete="off" type="text"   id="lp3" disabled></div> 
	                </div>
	                 <br>
	                <div>
	                    <div style="width:20%"><label>RI</label><input autocomplete="off" type="text"   id="lr3" disabled></div>
	                    <div style="width:20%"><label>SD</label><input autocomplete="off" type="text"   id="ls3" disabled></div> 
	                </div>
	           </fieldset>
	       </div>                  
	     </div>    
	     <div id="tinhtoan"  style="width:99%; margin-top:5px;" >
	       <div>
	           <fieldset>
	                <legend>RMCA</legend>
	                <div>
	                    <div style="width:20%"><label>Mean</label><input autocomplete="off" type="text"   id="rm1" disabled></div>
	                    <div style="width:20%"><label>Peak</label><input autocomplete="off" type="text"   id="rm2" disabled></div> 
	                </div>
	                <br>
	                <div>
	                    <div style="width:20%"><label>PI</label><input autocomplete="off" type="text"   id="rpi1" disabled></div>
	                    <div style="width:20%"><label>Dias</label><input autocomplete="off" type="text"   id="rm3" disabled></div> 
	                </div>
	                 <br>
	                <div>
	                    <div style="width:20%"><label>RI</label><input autocomplete="off" type="text"   id="rr1" disabled></div>
	                    <div style="width:20%"><label>SD</label><input autocomplete="off" type="text"   id="rs1" disabled></div> 
	                </div>
	           </fieldset>
	       </div>      
	       <div>
	          <fieldset>
	                <legend>RACA</legend>
	                <div>
	                    <div style="width:20%"><label>Mean</label><input autocomplete="off" type="text"   id="ra1" disabled></div>
	                    <div style="width:20%"><label>Peak</label><input autocomplete="off" type="text"   id="ra2" disabled></div> 
	                </div>
	                <br>
	                <div>
	                    <div style="width:20%"><label>PI</label><input autocomplete="off" type="text"   id="rpi2" disabled></div>
	                    <div style="width:20%"><label>Dias</label><input autocomplete="off" type="text"   id="ra3" disabled></div> 
	                </div>
	                 <br>
	                <div>
	                    <div style="width:20%"><label>RI</label><input autocomplete="off" type="text"   id="rr2" disabled></div>
	                    <div style="width:20%"><label>SD</label><input autocomplete="off" type="text"   id="rs2" disabled></div> 
	                </div>
	           </fieldset>
	       </div> 
	       <div>
	            <fieldset>
	                <legend>RPCA</legend>
	                <div>
	                    <div style="width:20%"><label>Mean</label><input autocomplete="off" type="text"   id="rp1" disabled></div>
	                    <div style="width:20%"><label>Peak</label><input autocomplete="off" type="text"   id="rp2" disabled></div> 
	                </div>
	                <br>
	                <div>
	                    <div style="width:20%"><label>PI</label><input autocomplete="off" type="text"   id="rpi3" disabled></div>
	                    <div style="width:20%"><label>Dias</label><input autocomplete="off" type="text"   id="rp3" disabled></div> 
	                </div>
	                 <br>
	                <div>
	                    <div style="width:20%"><label>RI</label><input autocomplete="off" type="text"   id="rr3" disabled></div>
	                    <div style="width:20%"><label>SD</label><input autocomplete="off" type="text"   id="rs3" disabled></div> 
	                </div>

	           </fieldset>
	       </div>                  
	     </div>
	 
	    
	    	<div class=" thongtin_thai" > 
	    		
	    		<label style="text-align:left;font-size:12px;color:red">Chọn mẫu:</label>
	    		<span class="custom-combobox">
                    <input id="chonmau" name="chonmau"  type="text" style="width:200px;margin-top:2px">
            	</span> 
            	<input id="chonmau1"  name="chonmau1" type="text" lang='luu' style="display:none" >
            	<a href="#" id="xoa" class=" ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="margin-left:0px;margin-top:2px;width:64px;float: right ">Xóa<span class="ui-icon ui-icon-trash"></span></a> 
            	
            	<br>
            	<label style="text-align:left;font-size:12px;color:red">Mô tả:</label>
    	 		
                <textarea lang='luu'id="mota" name="mota"style="font-size:13px;width:28px" >
</textarea>

            </div>
            <div class=" thongtin_thai">
            	<label style="text-align:left;font-size:12px;color:red">Kết luận:</label>
            	<input id="cach_dieu_tri1"  name="cach_dieu_tri1" type="text" lang='luu' style="display:none" >
                <textarea id="ketluan"name="ketluan" lang='luu'style="font-size:13px;width:28px" ></textarea>
            </div>
	      
		</div>   
		<div class="ui-widget-content ui-layout-center " >			
	           <fieldset style="width:97%;height:100%">
	                <legend>Kết quả TCD</legend>	                
					<iframe style="background-color:#FFF" id="mht" name="mht" src="" width="100%" height="99%" frameborder="0"></iframe>					
	           </fieldset>
	       
		</div>      
</div>  

</body>
</html>  
<script type="application/javascript">
var _id_luotkham=[];
var _id_loaikham=[];
var _id_luotkham_non_unique=[];
var _id_kham=[];
var data_luotkham="";
var navigator_count=0;
var _folder_name;
var ma_benhnhan=0;
var id_loaikham;
var grid_click_status=false;
var id_kham;
var _id_trangthai;
var _kham;
var trangthai;
var id_benhnhan;
<?php
	echo "var pname='".create_name($_SESSION["ThongTinBenhNhan"]["ten"])."';\n";
	echo "var page='".$_SESSION["ThongTinBenhNhan"]["tuoi"]."';\n";
	echo "var psex='".$_SESSION["ThongTinBenhNhan"]["gioitinh"]."';\n";
	echo "var pinhospitalid='".stringUnUtf8($_SESSION["com"]["TenBenhVien"])."';\n";
	echo "var paddress='".stringUnUtf8($_SESSION["ThongTinBenhNhan"]["diachi"])."';\n";
?>
	var ppostcode=2;
	var command;
	$(document).ready(function() {
		  _prints=$.cookie("printers").split("::");
			 for (i = 0; i <_prints.length-1; i++) {
				$("#printer_list").append($('<option>', {
					value: _prints[i],
					text: _prints[i]
				}));
		  }
	 //alert($.cookie('username_window'))	 
		get_printer("#xemin",set_print_select,$.cookie('remote_ip'),$.cookie('username_window'),"TCD");
		 
		/*$("#xemin").click(function(e) {
           dialog_report("Xemin", 10, 10, "463GHJt34534534", $("#mht").attr("src"),"TCD",10)
			//get_printer("#xemin",set_printer,$.cookie('remote_ip'),$.cookie('username_window'),"TCD");
			//alert("Đã focus")
			//$(this).print();
			//window.frames['mht'].print();
			//window.frames[0].print();

        });*/
		
		if(psex=="Nam"){
			psex=0
		}else{
			psex=1
		}
		var pbed=2,ppostcode="084",phone=" ",pexamcount=1,pnote=" ";	
		//alert(command)
			/*rs("pId") = new_value(1)
            rs("pname") = new_value(2)
            rs("page") = new_value(3)
            rs("psex") = new_value(4)
            rs("pinhospitalID") = new_value(5)
            rs("pbed") = new_value(6)
            rs("ppostcode") = new_value(7)
            rs("paddress") = new_value(8)
            rs("phone") = new_value(9)
            rs("pexamcount") = 1
            rs("pnote") = ""	*/
			//alert(command)
	 $("#opentcd").click(function(e) {
	 	$("#chonfile").button({disabled:false});
        send_message("open_file",command) ;
		//alert(command)
    });
	$.get( "resource.php?module=web_services&function=create_panel1&id_benhnhan="+id_benhnhan+"&action=index", function( data ) {
	  $( ".patient_info" ).html( data );
	  $( ".patient_info" ).css("width", $( "#patient_info" ).width()+"css");	
	  ma_benhnhan=$('.profile_container:nth-child(4) .texts').text();	
	  command= "tcd_old|"+ $.cookie('GD2_TCD_DATA_ACCESS')+ "|"+$("#panel_mabn").text()+"|"+pname+"|"+page+"|"+psex+"|"+pinhospitalid+"|"+pbed+"|"+ppostcode+"|"+paddress+"|"+phone+"|"+pexamcount+"|"+pnote+"|"+ $.cookie('GD2_EXE_TCD')+"|";		 
	});
	create_combobox('#nhanvien', '#nhanvien1', ".nhan_vien", "#nhan_vien", create_nhanvien, 500, 300, 'danhmuc', 'data_nhanvien',<?=$_SESSION["user"]["id_user"]?>);
    create_combobox('#chuandoan', '#chuandoan1', ".nhan_vien1", "#nhan_vien1", create_bacsi, 500, 400, 'Người thực hiện', 'data_bacsi',<?=$_SESSION["user"]["id_user"]?>);
	create_combobox('#chonmau', '#chonmau1', ".nhan_vien2", "#nhan_vien2", create_template, 500, 400, 'Chọn mẫu', 'data_template');
	window.stt = $.ajax({url: 'resource.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=2&tables=DM_NhanVien&id=ID_NhanVien&name=NickName', async: false, success: function(data, result) {if (!result) alert('Không load được danh mục phòng ban');}}).responseText;	
	$('#sua').button();
	$('#luu').button();
	$('#xemin').button();
	$('#dong').button();
	$('#dathuchien').button();
	$('#hoantat').button();
	$('#boqua').button();
	$('#xoa').button();
	$('#layketluan').button();
	$('#boqua').hide();	
	$('#opentcd').button();		
	$('#chonfile').button();
	//$('#valuesubmit').button( {disabled:true});
	//$('#layketluan').button( {disabled:true});
	$('.chonmau_button').css("margin-top","2px");
	create_layout();
	resize_control();
	 $.getJSON("resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_tcd&idbenhnhan=" +id_benhnhan,
                function(data) {
                    data_luotkham = data;
                    //alertObject(data_luotkham);
                    var tam1_cls = "";
                    $.each(data, function(key, val) {
                        for (i = 0; i < val.length; i++) {
                            
                            var tam1_cls = val[i]["cell"];
                            
                            _id_luotkham.push(tam1_cls[5]);
                        }
                        
                        _id_luotkham = $.unique(_id_luotkham);
                       navigator_load("end","first");
                       //alert(_id_luotkham);
                      
                    });
                });
				
		$("#file").change(function(e) {
			imagesSelected(this.files);					
		});
		$('#valuesubmit').click(function(event) {	
			
			$("#action").val("edit_tcd");
			$("#mota1").val($("#mota").val().replace(/\n/g, '<br>'));
			$("#ketluan1").val($("#ketluan").val().replace(/\n/g, '<br>'));	
			$('.anh').val("");
			ngaytam=$('#ngaychidinh').val().split(" ")
			$('#ngayhoantat').val(ngaytam[1]);		
			$('#chukybacsy').val($('#chuandoan1').val());	
			$('#chukyktv').val($('#nhanvien1').val());		
			$('#chucdanhktv').val(window.viettat);	
			$('#chucdanhbacsy').val(window.viettat2);	
			$('#tenbacsy').val(window.tenbacsy);	
			$('#tenktv').val(window.tenktv);						
			$('#tenthumuc').val("TCD//KETQUA//"+ma_benhnhan);
			$("#tenbn").val($("#panel_tenbn").text());
			$("#mabn").val($("#panel_mabn").text());	
			$("#gioitinh").val($("#panel_gioi").text());
			//alert($("#gioitinh").val())				 	
			//$('#valuesubmit').button( {disabled:true});
			var _tam=$('#tenthumuc').val().split("//");		
			$.getJSON( 'file_manager/php/connector.php?profile=tcd&answer=42&cmd=open&target=f1_XA&init=1&tree=1&_=1386694616800&tenthumuc='+$('#tenthumuc').val(), 
				function( data ){
						if (data["error"]=="errConf,errNoVolumes"){					 				 		 
							 $.get( 'file_manager/php/connector.php?profile=tcd&answer=42&tenthumuc='+_tam[0]+"//"+_tam[1]+'&cmd=mkdir&name='+_tam[2]+'&target=f1_XA&_=1387301727041', 
								function( data ){	
								edit_tcd()						 			 
							 });
						}else{
							 edit_tcd();
						}
			});	
			
			
			//edit_tcd = $.ajax({url: 'file_manager/php/connector.php?answer=42&cmd=open&target=f1_XA&init=1&tree=1&_=1386694616800&action=edit_tcd&tenthumuc='+$("#tenthumuc").val()+'&filename='+$("#default_name").val()+"&mota="+_mota+"&ketluan="+_ketluan, async: false, success: function(data, result) {if (!result) alert(result);}}).responseText;
		});	
		 $('#xoa').click(function() {	
			$("#mota").val("");
			$("#ketluan").val("");
		})
		$("#layketluan").click(function(){
	 var res = $("#lm1").val().replace(",",".");
	 var res2 = $("#rm1").val().replace(",",".");
	 var res3 = $("#la1").val().replace(",",".");
	 var res4 = $("#ra1").val().replace(",",".");
	 var res5 = $("#lp1").val().replace(",",".");
	 var res6 = $("#rp1").val().replace(",",".");
	 $.getJSON("resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_bienluan&LMCA=" +parseFloat(res)+"&RMCA="+parseFloat(res2)+"&LACA="+parseFloat(res3)+"&RACA="+parseFloat(res4)+"&LPCA="+parseFloat(res5)+"&RPCA="+parseFloat(res6),
                function(data) {
				$.each(data, function(key, val) {             
                var tam1_cls = val[0]["cell"];
					$("#mota").val(tam1_cls[0]);
					$("#ketluan").val(tam1_cls[1]);
					setTimeout(function(){
						$("#luu").click();
					},300);	
					})
				
				  });
	 	//$('#valuesubmit').button( {disabled:false});
})

$("#dong").click(function(){
	nhanvien=$("#nhanvien1").val();
	 $.getJSON("resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_chuky&id_nhanvien="+nhanvien,
                function(data) {
                	$.each(data, function(key, val) { 
                		var tam1_cls = val[0]["cell"];
                		alert(tam1_cls[2]);
                	 });       
				  });
})
$('#sua').click(function() {
//alert(convert_date($("#giothuchien").val()));	
//alert(convert_to_datejs("current"));	
    	$('#sua').hide();
		$('#boqua').show();
		$('#luu').button( {disabled:false});
		$("#tcd_body *").attr("disabled", false);
		$("#tinhtoan *").attr("disabled", true);
		$('#chonfile').button( {disabled:false});
		//$('#valuesubmit').button( {disabled:false});
		$('#layketluan').button( {disabled:false});
		/*$('#dathuchien').button( {disabled:true});
		$('#hoantat').button( {disabled:true});*/
		$('#xoa').button( {disabled:false});
		create_combobox_enable("#chonmau");
		if($("#id_trangthai").val()=="DangKham" ||$("#id_trangthai").val()=="DangCho" ){
			$('#dathuchien').button( {disabled:false});
			$('#hoantat').button( {disabled:false})
		}
		else if($("#id_trangthai").val()=="DaThucHien"){
			$('#dathuchien').button( {disabled:true});
			$('#hoantat').button( {disabled:false})
		}
		else if($("#id_trangthai").val()=="Xong"){
			$('#dathuchien').button( {disabled:true});
			$('#hoantat').button( {disabled:true})
		}

    })
	 $('#boqua').click(function() {	
    	$('#boqua').hide();
		$('#sua').show();
		$('#luu').button( {disabled:true});
		$("#tcd_body *").attr("disabled", "disabled");
		$('#chonfile').button( {disabled:true});
		//$('#valuesubmit').button( {disabled:true});
		$('#layketluan').button( {disabled:true});
		/*$('#dathuchien').button( {disabled:true});
		$('#hoantat').button( {disabled:true});*/
		$('#xoa').button( {disabled:true});
		create_combobox_disable("#chonmau");
		if($("#id_trangthai").val()=="DangKham" ||$("#id_trangthai").val()=="DangCho" ){
			$('#dathuchien').button( {disabled:false});
			$('#hoantat').button( {disabled:false})
		}
		else if($("#id_trangthai").val()=="DaThucHien"){
			$('#dathuchien').button( {disabled:true});
			$('#hoantat').button( {disabled:false})
		}
		else if($("#id_trangthai").val()=="Xong"){
			$('#dathuchien').button( {disabled:true});
			$('#hoantat').button( {disabled:true})
		}
    })
	$("#luu").click(function(){
		$('#valuesubmit').click();
	if(_id_trangthai=="DaThucHien"){
		window.nguoisua=$("#nhanvien1").val();
	}
	else if(_id_trangthai=="Xong"){
		window.nguoisua=$("#chuandoan1").val();
	}

			phancach = "";
		dataToSend = '{';
                                $('.thongtin_thai,.form_row').find(':input[type=text],select,textarea,input[type=hidden]').each(function() {

                                    if ($(this).attr("lang") == "luu") {
                                      
                                        dataToSend += phancach + '"'+ this.name + '":' + JSON.stringify(this.value)   ;
                                      
                                    }
                                    phancach = ",";

                                });
		dataToSend += phancach + '"id_trangthai":"' +_id_trangthai+ '"';
		dataToSend += phancach + '"id_kham":"' +id_kham+ '"';
		dataToSend += phancach + '"nguoisua":"' +window.nguoisua+ '"';
		dataToSend += phancach + '"ngaygiosua":"' +new Date().toString("H:mm dd"+$.cookie('phancachngay')+"MM"+$.cookie('phancachngay')+"yy")+ '"';
		dataToSend += '}';
		 dataToSend = jQuery.parseJSON(dataToSend);
        alertObject(dataToSend); 
		$('#boqua').hide();
		$('#sua').show();
		$('#luu').button( {disabled:true});
		$("#tcd_body *").attr("disabled", "disabled");
		$('#chonfile').button( {disabled:true});
		//$('#valuesubmit').button( {disabled:true});
		$('#layketluan').button( {disabled:true});
		$('#dathuchien').button( {disabled:true});
		$('#hoantat').button( {disabled:true});
		$('#xoa').button( {disabled:true});
		$('#sua').button( {disabled:false});
		create_combobox_disable("#chonmau");
		 if(_id_trangthai=="DaThucHien"){
                   $.post('resource.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=luuthuchien&hienmaloi=3',dataToSend)
                                 .done(function( gridData ) {   
                                                         tooltip_message("Đã lưu"); 
														 test();
                                                        })
                                                        .fail(function() {
                                                        alert( "error" );
                                                        })
                     }
                     if(_id_trangthai=="Xong"){
                        $.post('resource.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=luuhoantat&hienmaloi=3',dataToSend)
                                 .done(function( gridData ) {   
                                                         tooltip_message("Đã lưu"); 
														 test(); 
                                                        })
                                                        .fail(function() {
                                                        alert( "error" );
                                                        })
                                                        //alert();
                     }     
                       if(_id_trangthai=="DangKham" || _id_trangthai=="DangCho"){
                   $.post('resource.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=luudangkham&hienmaloi=3',dataToSend)
                                 .done(function( gridData ) {   
                                                         tooltip_message("Đã lưu");
														 test();
														
														$('#luu').button( {disabled:false});
														$("#tcd_body *").attr("disabled", false);
														$("#tinhtoan *").attr("disabled", true);
														$('#chonfile').button( {disabled:false});
														//$('#valuesubmit').button( {disabled:true});
														$('#layketluan').button( {disabled:false});
														$('#dathuchien').button( {disabled:false});
														$('#hoantat').button( {disabled:false});
														$('#xoa').button( {disabled:false});
														$('#sua').button( {disabled:true});
                                                        })
                                                        .fail(function() {
                                                        alert( "error" );
                                                        })
                     }
	})
	 $("#dathuchien").click(function(){
	 $("#id_trangthai").html("DaThucHien");
	 var d = new Date();
     var curr_hour = d.getHours();
      var curr_minute = (d.getMinutes()<10?'0':'') + d.getMinutes(); //phút trả về 1 chữ số nếu bé hơn mười nên phải ghép 0 vào
      gio1 = curr_hour + ":" + curr_minute+ " ";
      ngay = $.datepicker.formatDate("dd/mm/y", d);
	   $("#giothuchien").val(gio1+""+ngay);
	 	phancach = "";
		dataToSend = '{';
                                $('.thongtin_thai,.form_row').find(':input[type=text],select,textarea,input[type=hidden]').each(function() {

                                    if ($(this).attr("lang") == "luu") {
                                      
                                        dataToSend += phancach + '"'+ this.name + '":' + JSON.stringify(this.value)   ;
                                      
                                    }
                                    phancach = ",";

                                });
		dataToSend += phancach + '"id_trangthai":"' +"DaThucHien"+ '"';
		dataToSend += phancach + '"id_kham":"' +id_kham+ '"';
		dataToSend += phancach + '"nguoisua":"' +window.nguoisua+ '"';
		dataToSend += phancach + '"ngaygiosua":"' +new Date().toString("H:mm dd"+$.cookie('phancachngay')+"MM"+$.cookie('phancachngay')+"yy")+ '"';
		dataToSend += phancach + '"ngaygiothuchien":"' +new Date().toString("H:mm dd"+$.cookie('phancachngay')+"MM"+$.cookie('phancachngay')+"yy")+ '"';
		dataToSend += '}';
		 dataToSend = jQuery.parseJSON(dataToSend);
                               alertObject(dataToSend); 
                                $.post('resource.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=dathuchien&hienmaloi=3',dataToSend)
                                 .done(function( gridData ) {   
                                                         //alert(gridData);  
                                                        })
                                                        .fail(function() {
                                                        alert( "error" );
                                                        });
                                                        tooltip_message("Đã thực hiện");
														$('#boqua').hide();
														$('#sua').show();
														$('#luu').button( {disabled:true});
														$("#tcd_body *").attr("disabled", "disabled");
														$('#chonfile').button( {disabled:true});
														//$('#valuesubmit').button( {disabled:true});
														$('#layketluan').button( {disabled:true});
														$('#dathuchien').button( {disabled:true});
														$('#hoantat').button( {disabled:false});
														$('#sua').button( {disabled:false});
														$('#xoa').button( {disabled:true});
														create_combobox_disable("#chonmau");
														test();
	 })
	  $("#hoantat").click(function(){
	  	var d = new Date();
     var curr_hour = d.getHours();
      var curr_minute = (d.getMinutes()<10?'0':'') + d.getMinutes(); //phút trả về 1 chữ số nếu bé hơn mười nên phải ghép 0 vào
      gio1 = curr_hour + ":" + curr_minute+ " ";
      ngay = $.datepicker.formatDate("dd/mm/y", d);
	   $("#id_trangthai").html("Xong");
	   $("#giothuchien").val(gio1+""+ngay);
	  $("#giohoantat").val(gio1+""+ngay);
	  	phancach = "";
		dataToSend = '{';
                                $('.thongtin_thai,.form_row').find(':input[type=text],select,textarea,input[type=hidden]').each(function() {

                                    if ($(this).attr("lang") == "luu") {
                                      
                                        dataToSend += phancach + '"'+ this.name + '":' + JSON.stringify(this.value)   ;
                                      
                                    }
                                    phancach = ",";

                                });
		dataToSend += phancach + '"id_trangthai":"' +"Xong"+ '"';
		dataToSend += phancach + '"id_kham":"' +id_kham+ '"';
		dataToSend += phancach + '"nguoisua":"' +window.nguoisua+ '"';
		dataToSend += phancach + '"ngaygiosua":"' +new Date().toString("H:mm dd"+$.cookie('phancachngay')+"MM"+$.cookie('phancachngay')+"yy")+ '"';
		dataToSend += phancach + '"ngaygiothuchien":"' +new Date().toString("H:mm dd"+$.cookie('phancachngay')+"MM"+$.cookie('phancachngay')+"yy")+ '"';
		dataToSend += phancach + '"ngaygiohoantat":"' +new Date().toString("H:mm dd"+$.cookie('phancachngay')+"MM"+$.cookie('phancachngay')+"yy")+ '"';
		dataToSend += '}';
		 dataToSend = jQuery.parseJSON(dataToSend);
                               alertObject(dataToSend); 
							    $.post('resource.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=hoantat&hienmaloi=3',dataToSend)
                                 .done(function( gridData ) {   
                                                         //alert(gridData);  
                                                        })
                                                        .fail(function() {
                                                        alert( "error" );
                                                        });
                                                        tooltip_message("Đã hoàn tất");
														$('#boqua').hide();
														$('#sua').show();
														$('#luu').button( {disabled:true});
														$("#tcd_body *").attr("disabled", "disabled");
														$('#chonfile').button( {disabled:true});
														//$('#valuesubmit').button( {disabled:true});
														$('#layketluan').button( {disabled:true});
														$('#dathuchien').button( {disabled:true});
														$('#hoantat').button( {disabled:true});
														$('#sua').button( {disabled:false});
														$('#xoa').button( {disabled:true});
														create_combobox_disable("#chonmau");
														test();
	  })

		phanquyen();
		$('#chonfile').click(function(e) {					 
			$('#file').click();			
		})
		
});	
function open_tcd(){	 
		   $("#action").val("tcd");
		   $("#mota1").val("");
		   $("#ketluan1").val("");	
		  // $('#valuesubmit').button( {disabled:true});
		    $('#layketluan').button( {disabled:false});
		   tooltip_message("Đang xử lý dữ liệu!");
		   t=setTimeout(function(){    
				 var formData = new FormData($('form')[0]); // okay I just saw the form, assuming there is only one form on the page			
				_status=$.ajax({
					url: 'file_manager/php/connector.php?answer=42&cmd=open&target=f1_XA&init=1&tree=1&_=1386694616800',  //Server script to process data
					type: 'POST',
					 //This is just looks like bloat
					 
					// Form data
					// enctype: 'multipart/form-data',  <-- don't do this       
					data: formData,
					//Options to tell jQuery not to process data or worry about content-type.
					//cache: false, post requests aren't cached
					contentType: false,
					processData: false,
					async: false, success: function(data, result) { 			           		 
					 }}).responseText;					   
				 calculate(_status); 
				 $('#layketluan').click();
			},2000);	
}
function edit_tcd(){	
 	tooltip_message("Đang xử lý dữ liệu!"); 
	e=setTimeout(function(){    
				 var formData = new FormData($('form')[0]); // okay I just saw the form, assuming there is only one form on the page			
				_tcd=$.ajax({
					url: 'file_manager/php/connector.php?answer=42&cmd=open&target=f1_XA&init=1&tree=1&_=1386694616800',  //Server script to process data
					type: 'POST',
					 //This is just looks like bloat
					 
					// Form data
					// enctype: 'multipart/form-data',  <-- don't do this       
					data: formData,
					//Options to tell jQuery not to process data or worry about content-type.
					//cache: false, post requests aren't cached
					contentType: false,
					processData: false,
					async: false, success: function(data, result) { 	
							load_mht();		           		 
					 }}).responseText;	
				   
				 
	},500);		
}
function test(){
				 _id_luotkham.splice(0, _id_luotkham.length-1)
					$.getJSON("resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_tcd&idbenhnhan=" +id_benhnhan,
                function(data) {
                    data_luotkham = data;
                    //alertObject(data_luotkham);
                    var tam1_cls = "";
                    $.each(data, function(key, val) {
                        for (i = 0; i < val.length; i++) {
                            
                            var tam1_cls = val[i]["cell"];
                            
                            _id_luotkham.push(tam1_cls[5]);
                        }
                        
                        _id_luotkham = $.unique(_id_luotkham);
                       //navigator_load("end","first");
                       //alert(_id_luotkham);
                      
                    });
                });
				}
$(function() {
		$( "#left_col #first" ).button({
		  text: false,
		  icons: {
			primary: "ui-icon-seek-first"
		  }
		})
		.click(function() {
			navigator_load("first","first");
			
		});
		$( "#left_col #last" ).button({
		  text: false,
		  icons: {
			primary: "ui-icon-seek-end"
		  }
		})
		.click(function() {
			navigator_load("end","first");
			
		}); 
		$( "#left_col #next" ).button({
		  text: false,
		  icons: {
			primary: "ui-icon-seek-next"
		  }
		})
		.click(function() {
			navigator_load(1,"first");			 
		});  
		$( "#left_col #prev" ).button({
		  text: false,
		  icons: {
			primary: "ui-icon-seek-prev"
		  }
		})
		.click(function() {
			navigator_load(-1,"first");
			
		});
	
  	}); 
	function calculate(_value){
		if(_value=="wrong format"){
			return tooltip_message("Bạn đã chọn file có định dạng không đúng");			
		}
		_value=_value.split(";");
		//str.trim()
		/*for(i=1;i<=_value.length;i++){
			_value[i]=_value[i].trim();
		}*/
		//alertObject(_value)
		 
		$("#lpi1").val(convert_comma_dot(((_value[1].trim() - _value[6].trim() ) / _value[0].trim()).toFixed(2) )); 
		$("#lr1").val(convert_comma_dot(((_value[1].trim() - _value[6].trim() ) / _value[1].trim()).toFixed(2) )); 
		$("#ls1").val(convert_comma_dot((  _value[1].trim() / _value[6].trim()).toFixed(2) )); 
		
		$("#lpi2").val(convert_comma_dot(((_value[3].trim() - _value[7].trim() ) / _value[2].trim()).toFixed(2) )); 
		$("#lr2").val(convert_comma_dot(((_value[3].trim() - _value[7].trim() ) / _value[3].trim()).toFixed(2) )); 
		$("#ls2").val(convert_comma_dot((  _value[3].trim() / _value[7].trim()).toFixed(2) )); 
		
		$("#lpi3").val(convert_comma_dot(((_value[5].trim() - _value[8].trim() ) / _value[4].trim()).toFixed(2) )); 
		$("#lr3").val(convert_comma_dot(((_value[5].trim() - _value[8].trim() ) / _value[5].trim()).toFixed(2) )); 
		$("#ls3").val(convert_comma_dot((  _value[5].trim() / _value[8].trim()).toFixed(2) )); 
		
		$("#rpi1").val(convert_comma_dot(((_value[10].trim() - _value[15].trim() ) / _value[9].trim()).toFixed(2) )); 
		$("#rr1").val(convert_comma_dot(((_value[10].trim() - _value[15].trim() ) / _value[10].trim()).toFixed(2) )); 
		$("#rs1").val(convert_comma_dot((  _value[10].trim() / _value[15].trim()).toFixed(2) )); 
		
		$("#rpi2").val(convert_comma_dot(((_value[12].trim() - _value[16].trim() ) / _value[11].trim()).toFixed(2) )); 
		$("#rr2").val(convert_comma_dot(((_value[12].trim() - _value[16].trim() ) / _value[12].trim()).toFixed(2) )); 
		$("#rs2").val(convert_comma_dot((  _value[12].trim() / _value[16].trim()).toFixed(2) )); 
		
		$("#rpi3").val(convert_comma_dot(((_value[14].trim() - _value[17].trim() ) / _value[13].trim()).toFixed(2) )); 
		$("#rr3").val(convert_comma_dot(((_value[14].trim() - _value[17].trim() ) / _value[14].trim()).toFixed(2) )); 
		$("#rs3").val(convert_comma_dot((  _value[14].trim() / _value[17].trim()).toFixed(2) )); 
		
		/*PI=([LM2]-[LM3])/[LM1]
		  RI=([LM2]-[LM1])/[LM2]
		  S/D=[LM2]/[LM3]
		*/
		
		
		$("#lm1").val(convert_comma_dot(_value[0].trim()));
		$("#lm2").val(convert_comma_dot(_value[1].trim()));
		
		$("#la1").val(convert_comma_dot(_value[2].trim()));
		$("#la2").val(convert_comma_dot(_value[3].trim()));
		
		$("#lp1").val(convert_comma_dot(_value[4].trim()));
		$("#lp2").val(convert_comma_dot(_value[5].trim()));
		
		$("#lm3").val(convert_comma_dot(_value[6].trim()));
		$("#la3").val(convert_comma_dot(_value[7].trim()));
		$("#lp3").val(convert_comma_dot(_value[8].trim()));	
			
		$("#rm1").val(convert_comma_dot(_value[9].trim()));
		$("#rm2").val(convert_comma_dot(_value[10].trim()));
		
		$("#ra1").val(convert_comma_dot(_value[11].trim()));
		$("#ra2").val(convert_comma_dot(_value[12].trim()));
		
		$("#rp1").val(convert_comma_dot(_value[13].trim()));
		$("#rp2").val(convert_comma_dot(_value[14].trim()));
		
		$("#rm3").val(convert_comma_dot(_value[15].trim()));
		$("#ra3").val(convert_comma_dot(_value[16].trim()));
		$("#rp3").val(convert_comma_dot(_value[17].trim()));
		$('#layketluan').button( {disabled:false});
		$('#prev,#first,#next,#last').button({disabled:false});
	}
function imagesSelected(myFiles) {
	  var i,f;
	 // alert(myFiles.length) 
	 for(i = 0; i < myFiles.length;i++){
		check_file_type('application/msword|',myFiles[i]["type"]); 		  
	 } 
	 console.log(window.file_type)
	 if(window.file_type==false){
		 open_tcd();	
	 }else{
		 tooltip_message("Không đúng định dạng file.");
	 } 
			
		
		 
	 
}
		function resize_control(){
			//$(window).height()thongtin_chidinh thongtin_tongthe
			//alert($(".thongtin_tongthe").width())
			
			//alert($("#ketluan").height())
			$("#mota").css("width",$(".ui-layout-west").width()-8+"px");
			$("#mota").css("height",$("#tcd_body").height()/6-33+"px");
			$("#ketluan").css("width",$(".ui-layout-west").width()-8+"px");
			$("#ketluan").css("height",$("#tcd_body").height()/6-38+"px");
			$("#tcd_body").css("height",$(window).height()-148+"px");
			$(".ui-layout-center").css("height",$("#tcd_body").height()-4+"px");
			$(".ui-state-default-west").css("height",$("#tcd_body").height()-2+"px");
			//alert($("#tcd_body").height());
		}
		function create_layout(){
	//alert("")
	$('#tcd_body').layout({	
		resizerClass: 'ui-state-default' 		    
		,west: {
			maskContents:		false
		,	resizable: false
		,	size:					"42%"
		,	resizerDblClickToggle: false 
		,	onresize_end:function () { 				 
				 resize_control();
			}
		,	onopen_end:function () { 
				 
			}
		,	onclose_end:function () { 				 
			 	 
			}
						
		}			
	    ,	center: {
			resizable: false
		,	maskContents:		true
		,	size:					"58%"
		,	resizerDblClickToggle: false		 
				
		 
		,	onresize_end:function () { 				 
				  resize_control();
			}
		,	onopen_end:function () {				 
				 	
			}
		,	onclose_end:function () { 				 
	  			 	 
			}		
		}  
		
		 
	});		 
}
function load_mht(){
	 $('#prev,#first,#next,#last').button( {disabled:true});	
	 _tam=$("#default_name").val().replace("doc","mht");
	 _tam1='file_manager/php/tmp_images/<?=$_SESSION["user"]["id_user"]?>.mht';
	 _link="resource.php?module=report&view=<?=$_GET["module"]?>&action=tcd&file=<?=$_SESSION["user"]["id_user"]?>.mht";
	 $.get( 'file_manager/php/connector.php?action=mht&profile=tcd&tenthumuc=TCD//KETQUA//'+ma_benhnhan+'&answer=42&cmd=file&target=f1_'+encode64(_tam)+"&user=<?=$_SESSION["user"]["id_user"]?>", 
	 function( data ){	

	 	 $('.ui-layout-west #tinhtoan').find('input[type=text]').each(function() {
			$(this).val("");					 
	     })
		$("#mht").attr("src",_link);
		if(data!="File not found"){
			//$("body").append("<div class='ui-widget-overlay'></div>");
			 $.get( 'file_manager/php/connector.php?action=tcd_read&profile=tcd&tenthumuc=TCD//KETQUA//'+ma_benhnhan+'&answer=42&cmd=file&target=f1_'+encode64($("#default_name").val())+"&user=<?=$_SESSION["user"]["id_user"]?>", 
			 function( data ){	
					calculate(data);
					 $('#layketluan').button( {disabled:true});				
					//$(".ui-widget-overlay").remove(); 			 			 
			 });			
		}else{
				$('#prev,#first,#next,#last').button({disabled:false});			
		}
		
	 }); 
}
function create_bacsi(elem, datalocal) {
        datalocal = jQuery.parseJSON(datalocal);
        $(elem).jqGrid({
            datastr: datalocal,
            datatype: "jsonstring",
            colNames: ['Tên', 'Họ và tên',''],
            colModel: [
                {name: 'nickname', index: 'nickname', hidden: false},
                {name: 'hovaten', index: 'hovaten', hidden: false},
                {name: 'viettat2', index: 'viettat2', hidden: true},
            ],
            hidegrid: false,
            gridview: true,
            loadonce: true,
            scroll: false,
            modal: true,
            rowNum: 200000,
            rowList: [],
            height: 300,
            width: 470,
            viewrecords: true,
            ignoreCase: true,
            shrinkToFit: true,
            cmTemplate: {sortable: false},
            sortorder: "desc",
            serializeRowData: function(postdata) {
            },
            onSelectRow: function(id) {
            	var rowData = $('#nhan_vien1').getRowData(id);
              //alert(rowData);
              window.viettat2=rowData["viettat2"];
			  window.tenbacsy=rowData["hovaten"];
              //alert(viettat2);
            },
            ondblClickRow: function(id, rowIndex, columnIndex) {
            },
            loadComplete: function(data) {

                grid_filter_enter(elem);
            
        window.nhanvien2_complete=1;

            },
        });
        $(elem).jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});
        $(elem).jqGrid('bindKeys', {});
    }
	function create_template(elem, datalocal) {
        datalocal = jQuery.parseJSON(datalocal);
        $(elem).jqGrid({
            datastr: datalocal,
            datatype: "jsonstring",
            colNames: ['Tên mẫu', 'Nội dung','Kết luận','Lời khuyên'],
            colModel: [
                {name: 'TenTemplate', index: 'TenTemplate',width:"130", hidden: false},
                {name: 'NoiDung', index: 'NoiDung',width:"400", hidden: false},
                {name: 'KetLuan', index: 'KetLuan',width:"400", hidden: false},
				{name: 'LoiKhuyen', index: 'LoiKhuyen',width:"100", hidden: false},
            ],
            hidegrid: false,
            gridview: true,
            loadonce: true,
            scroll: false,
            modal: true,
            rowNum: 200000,
            rowList: [],
            height: 100,
            width: 670,
            viewrecords: true,
            ignoreCase: true,
            shrinkToFit: true,
            cmTemplate: {sortable: false},
            sortorder: "desc",
            serializeRowData: function(postdata) {
            },
            onSelectRow: function(id) {
				var rowData = $('#nhan_vien2').getRowData(id);
				if(jQuery('#nhan_vien2').data('clicked')) {
					 $("#mota").val(rowData["NoiDung"]);
					  $("#ketluan").val(rowData["KetLuan"]);
				}
           
            },
            ondblClickRow: function(id, rowIndex, columnIndex) {
            },
            loadComplete: function(data) {

                grid_filter_enter(elem);


            },
        });
        $(elem).jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});
        $(elem).jqGrid('bindKeys', {});
    }
     function create_nhanvien(elem, datalocal) {
        datalocal = jQuery.parseJSON(datalocal);
        $(elem).jqGrid({
            datastr: datalocal,
            datatype: "jsonstring",
            colNames: ['Tên', 'Họ và tên', 'Bộ phận',''],
            colModel: [
                {name: 'nickname', index: 'nickname', hidden: false},
                {name: 'hovaten', index: 'hovaten', hidden: false},
                {name: 'Bophan', index: 'Bophan', hidden: false},
                 {name: 'viettat', index: 'viettat', hidden: true},
            ],
            hidegrid: false,
            gridview: true,
            loadonce: true,
            scroll: false,
            modal: true,
            rowNum: 200000,
            rowList: [],
            height: 300,
            width: 470,
            viewrecords: true,
            ignoreCase: true,
            shrinkToFit: true,
            cmTemplate: {sortable: false},
            sortorder: "desc",
            serializeRowData: function(postdata) {
            },
            onSelectRow: function(id) {
            	var rowData = $('#nhan_vien').getRowData(id);
              //alert(rowData);
              window.viettat=rowData["viettat"];
			  window.tenktv=rowData["hovaten"];
            },
            ondblClickRow: function(id, rowIndex, columnIndex) {
            },
            loadComplete: function(data) {

                grid_filter_enter(elem);
              window.nhanvien1_complete=1;




            },
        });
        $(elem).jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});
        $(elem).jqGrid('bindKeys', {});
    }
    function navigator_load(_value) {
        if ((navigator_count + _value > _id_luotkham.length - 1) || (navigator_count + _value < 0)) {
            return false;
        }
        var tam_cls = "";
        if (_value == "first") {
            navigator_count = 0;
        } else if (_value == "end") {
            navigator_count = _id_luotkham.length - 1;
        } else {
            navigator_count += parseInt(_value);
        }
        var _mota = "";
        $.each(data_luotkham, function(key, val) {
            for (i = 0; i < val.length; i++) {
                //tam+=" ; "+val[i]["id"];              
                var tam1_cls = val[i]["cell"];
                //alert(tam1_cls[5])
                if (_id_luotkham[navigator_count] == tam1_cls[5]) {
                    //alert(_id_luotkham[navigator_count]) 
                   tam_cls+= '<div id="'+val[i]["id"]+'" alt="'+ma_benhnhan+"_"+val[i]["id"]+"_"+tam1_cls[3]+'">'+tam1_cls[0]+"<br \>" +tam1_cls[5]+'</div>';   
                    $("#ngay_kham").html(tam1_cls[2]);
					
                    $("#id_trangthai").html(tam1_cls[9]);
                    _id_trangthai=tam1_cls[9];
                   $("#ngaychidinh").val(val[i]["cell"][2]);
						$("#nguoi_chidinh").val(val[i]["cell"][19]);
						id_luotkham=val[i]["cell"][5];
						$("#giothuchien").val(val[i]["cell"][16]);
						$("#giohoantat").val(val[i]["cell"][17]);
						id_kham=val[i]["cell"][18];
						$("#mota").val(val[i]["cell"][6]);
						$("#ketluan").val(val[i]["cell"][7]);
						setval('#nhanvien','#nhanvien1','#nhan_vien',val[i]["cell"][10]);
                        setval('#chuandoan','#chuandoan1','#nhan_vien1',val[i]["cell"][15]);
                        var rowData = $('#nhan_vien').getRowData(val[i]["cell"][10]);
			              //alert(rowData);
			              window.viettat=rowData["viettat"];
						  window.tenktv=rowData["hovaten"];
                        var rowData2 = $('#nhan_vien1').getRowData(val[i]["cell"][15]);
			              window.viettat2=rowData2["viettat2"];
						  window.tenbacsy=rowData2["hovaten"];
						  //alert(viettat2);
						$("#nguoisua").html(val[i]["cell"][12]);
						$("#ngaygiosua").html(val[i]["cell"][13]);
						var tamthoilathe= stt.split(";");
						for (i = 0; i <tamthoilathe.length; i++) 
						{
							check=tamthoilathe[i].split(":");
							if($("#nguoisua").text()==check[0]){ //alert(check[0]);
								$("#nguoisua").text(check[1]);}
							
						}
						if(_id_trangthai=="DangCho" || _id_trangthai=="DangKham"){
							$('#sua').button( {disabled:true});
							$('#luu').button( {disabled:false});
							$("#tcd_body *").attr("disabled", false);
							$("#tinhtoan *").attr("disabled", true);
							$('#chonfile').button( {disabled:true});
							//$('#valuesubmit').button( {disabled:true});
							//$('#layketluan').button( {disabled:true});
							$('#dathuchien').button( {disabled:false});
							$('#hoantat').button( {disabled:false});
							$('#xoa').button( {disabled:false});
							create_combobox_enable("#chonmau");
							setval('#nhanvien','#nhanvien1','#nhan_vien',<?=$_SESSION["user"]["id_user"]?>);
                        	setval('#chuandoan','#chuandoan1','#nhan_vien1',<?=$_SESSION["user"]["id_user"]?>);
						}
						else if(_id_trangthai=="DaThucHien"){
							$('#sua').button( {disabled:false});
							$('#luu').button( {disabled:true});
							$('#xoa').button( {disabled:true});
							$('#chonfile').button( {disabled:true});
							//$('#valuesubmit').button( {disabled:true});
							//$('#layketluan').button( {disabled:true});
							$('#dathuchien').button( {disabled:true});
							$("#tcd_body *").attr("disabled", "disabled");
							$('#hoantat').button( {disabled:false});
							 create_combobox_disable("#chonmau");
							setval('#chuandoan','#chuandoan1','#nhan_vien1',<?=$_SESSION["user"]["id_user"]?>);
							
						}
						else if(_id_trangthai=="Xong"){
							$('#sua').button( {disabled:false});
							$('#luu').button( {disabled:true});
							$('#xoa').button( {disabled:true});
							$('#chonfile').button( {disabled:true});
							//$('#valuesubmit').button( {disabled:true});
							//$('#layketluan').button( {disabled:true});
							$('#dathuchien').button( {disabled:true});
							$('#hoantat').button( {disabled:true});
							$("#tcd_body *").attr("disabled", "disabled");
							create_combobox_disable("#chonmau");
							//$("#valuesubmit").css("height","27px");
							
						}
                }
                $('#layketluan').button( {disabled:true});
				_ngaychidinh=$("#ngaychidinh").val().split(" ");			   
			    $("#default_name").val(ma_benhnhan+"_"+id_kham+"_"+_ngaychidinh[1].replaceAll($.cookie("phancachngay"),'')+_ngaychidinh[0].replaceAll(":","")+".doc");
			
            }
           	load_mht();
           
        });
        $(".navigator_title").html("Lượt khám " + (navigator_count + 1) + "/" + _id_luotkham.length);
        $("#left_col div div:first-child").click();

    }
   
    
	function gio(inputA){
      var d = new Date();
      var curr_hour = d.getHours();
      var curr_minute = (d.getMinutes()<10?'0':'') + d.getMinutes(); //phút trả về 1 chữ số nếu bé hơn mười nên phải ghép 0 vào
      var curr_time = curr_hour + ":" + curr_minute+ " ";
      var dd = d.getDate();
      var mm = d.getMonth()+1;//January is 0!`
      var yyyy = d.getFullYear();
      if(inputA!="current"){
      if(String(inputA).match(' ')!=null){
      var bientam=inputA.split(" ");
      if(bientam[0].length>bientam[1].length){
      var ngaytam=bientam[0].split($.cookie("phancachngay"));
      var giotam=bientam[1].split(":");
      ngaytam[2]=$.cookie('namjs')+ngaytam[2];
      }else if(bientam[1].length>bientam[0].length){
      var ngaytam=bientam[1].split($.cookie("phancachngay"));
      var giotam=bientam[0].split(":");
      ngaytam[2]=$.cookie('namjs')+ngaytam[2];
      }
      }else if(String(inputA).match(':')!=null){
      var ngaytam=[];
      ngaytam[0]=dd,ngaytam[1]=mm,ngaytam[2]=yyyy;
      var giotam=inputA.split(":");
      }else{
      var ngaytam=inputA.split($.cookie("phancachngay"));
      ngaytam[2]=$.cookie('namjs')+ngaytam[2];
      var giotam=[];
      giotam[0]=0;giotam[1]=0;
      }
      var thoigian=Date.today().set({
      millisecond: 0,
      second: 0,
      minute: parseInt(giotam[1]),
      hour: parseInt(giotam[0]),
      day: parseInt(ngaytam[0]),
      month: parseInt(ngaytam[1])-1,
      year: parseInt(ngaytam[2])
      });
      }else{
      var thoigian=Date.today().set({
      millisecond: 0,
      second: 0,
      minute: parseInt(curr_minute),
      hour: parseInt(curr_hour),
      day: parseInt(dd),
      month: parseInt(mm)-1,
      year: parseInt(yyyy)
      });
      thoigian=thoigian.addHours(0).toString("H:mm:ss yyyy-MM-dd");
      }
      return thoigian;
} 

</script>
