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

<style>
 a.ui-button, a.fm-button {
    visibility: visible!important;
}
	#DM_template td  {	 
		word-wrap:normal!important;
		white-space:nowrap;
	}
	#DM_template_container{
		position:absolute;
		z-index:1000000;		 
		display:none;	
		box-shadow:0px 0px 6px #333;	 	
	}
	 button#last,button#first,button#prev,button#next{
		 font-size:7px!important;
		 margin-top:-6px;
		/* padding-left:20px;*/
		 
	 }
	 #open_template,#add_template{
		 font-size:11px!important;
		 margin-top:-3px;
		 margin-left:-6px;
		 
	 }
	 .ui-widget-overlay {
		  opacity:0.01;
		  filter: alpha(opacity=1); 
		  -ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=1)"; 
		  /*overlay trong suot*/  
		  }
	  #open_template{		
		 border-radius:0px!important;	
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
		width:55%;
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
	#mota{
		font-size:13px!important;		 	 
	}.highlight:hover{
		background:#FCFEBA;
	}
	#code{
		border:none;
		border-left:1px solid#CCC;
		border-top: 1px solid#CCC;
		}
	#code th, #code td{
		
		border:none;
		border-right:1px solid#CCC;
		border-bottom: 1px solid#CCC;
	}
	#file{
		display:none;
	}
	
</style>
<body>

</div>
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
    <input type="hidden" name="tenbv" id="tenbv" value="<?php echo $_SESSION["com"]["TenBenhVien"]?>">   
    <input type="hidden" name="diachi" id="diachi" value="<?php echo $_SESSION["com"]["DiaChi"]?>"> 
    <input type="hidden" name="dienthoai" id="dienthoai" value="<?php echo $_SESSION["com"]["SoDT"]?>">  
    <input type="hidden" name="tenbn" id="tenbn" >
    <input type="hidden" name="mabn" id="mabn" >    
    <input type="hidden" name="loai_ecg" id="loai_ecg" > 
    <input type="hidden" name="sotrang" id="sotrang" > 	
     
</form>

 <div class="top_form ui-widget-content" >
 	<div style="padding:2px 0px;" class="thongtin_tongthe">
 		<div class="patient_info"></div>        
    </div>
    <div class="thongtin_chidinh" style="width:687px!important">
 		<div class="form_row">
        	<label style="width:90px;text-align:right">Người chỉ định:</label><input lang='luu' id='bschidinh' name="nguoi_chidinh"style="width:100px" type="text" value="Bs Minh TQ" disabled>
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
			<label style="width:90px;text-align:right">Ngày chỉ định:</label><input name="ngaychidinh"lang='luu'style="width:100px" type="text" id='ngaychidinh' disabled>
			<label id="giothuchien"  name="giothuchien" type="text" lang='luu'class="thongtin_thai zodi" style="text-align:right; width: 90px;margin-left: 10px;"></label>
            <a href="#" id="dathuchien" class="	 ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="margin-left:0px;  margin-bottom:1px; ">Đã thực hiện<span class="ui-icon ui-icon-play"></span></a> 
     		<label id="giohoantat"  name="giohoantat" type="text" lang='luu' class="thongtin_thai zodi" style="width: 90px;margin-left: 10px; text-align:right"></label>
     		<a href="#" id="hoantat" class=" ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="margin-left:0px;  margin-bottom:1px; ">Hoàn tất<span class="ui-icon ui-icon-check"></span></a>   
        </div>        
    </div>
    <div class="thongtin_luotkham" id="left_col" style="width: 604px;">   
    	<div class="thongtin_luotkham_scroll " style="display:none"></div>
        	<span id="caption" style="font-size:17px;color:#09C;margin-left:5px;margin-top:5px; font-weight:bold">Đo điện tâm đồ</span>
            <br><br>
            <span class="navigator" >
                <button id="first">bắt đầu</button>
                <button id="prev">tới</button>
                <span class="navigator_title"></span>
                <button id="next">lui</button>
                <button id="last">kết thúc</button> 
            </span>
            <label id="ngay_kham"></label>        
            <select id="loaiecg" style="margin-left:10px;"><option selected value="1">Loại cũ</option><option value="2">Điện tim di động Microtel</option><option value="3">Điện tim nghỉ AR1200</option><option value="4">Touch ECG</option><option value="5">Điện tim gắng sức</option></select>
            <a href="#" id="chonfile" class=" ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="margin-left:0px; margin-top:-3px; float:right">Chọn file<span class="ui-icon ui-icon-plus"></span></a>
    </div>
    <div class="thongtin_luotkham" id="center_col" style="width: 300px;display:none">
    	<div class="thongtin_luotkham_scroll" style="color:blue;font-size:14px"></div>
            <span class="navigator" >
                <button id="first">bắt đầu</button>
                <button id="prev">tới</button>
                <span class="navigator_title"></span>
                <button id="next">lui</button>
                <button id="last">kết thúc</button> 
            </span>
            <label id="ngay_kham"></label>        
    	 
    </div>
    <div class="thongtin_luotkham" id="right_col">
    	 
    	<div style="margin-top:3px">
    	<label id="id_trangthai"class="thongtin_thai" lang="luu" type="text" name="id_trangthai" style="font-size:14px;margin-left:5px;font-weight:bold"></label> 
       
        <label style="margin-left:220px">ID </label>
        <input type="text" id="id_" style="text-align:center;width:125px;color:#F00;font-size:15px!important"></input>
    	 <a href="#" id="luu" class=" ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="margin-left:0px;width:64px;  margin-bottom:1px;float: right; ">Lưu<span class="ui-icon ui-icon-disk"></span></a> 
    	<a href="#" id="sua" class=" ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="margin-left:0px;width:64px;  margin-bottom:1px;float: right; ">Sửa<span class="ui-icon ui-icon-pencil"></span></a>
    	<a href="#" id="boqua" class=" ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="margin-left:0px;width:64px;  margin-bottom:1px;float: right;">Bỏ qua<span class="ui-icon ui-icon-close"></span></a>		 	
    	</div>
    	<div style="margin-top: 8px;">
    	<a href="#" id="dong" class=" ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="margin-left:0px;width:64px;  margin-bottom:1px;float: right; display:none">Đóng<span class="ui-icon ui-icon-trash"></span></a> 
    	<a href="#" id="xemin" class=" ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="margin-left:0px;  margin-bottom:1px;float: right; ">Xem in<span class="ui-icon ui-icon-print"></span></a>
        <span style="float:right; margin:5px 10px 0 0" id="In_CoChuKy">
        	In có chữ ký <input type="checkbox" checked name="In_ChuKy" value="1"/>
        </span>	 
        <a href="#" id="xemin_moi" class=" ui-widget ui-state-default ui-corner-all fm-button-icon-left" style=" display:none; margin-left:0px;  margin-bottom:1px;float: right; ">In<span class="ui-icon ui-icon-print"></span></a>
        
        <a href="#" id="taopdf" class=" ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="margin-left:0px;  margin-bottom:1px;float: right; ">Tạo pdf<span class="ui-icon ui-icon-document"></span></a>
        
        <a href="#" id="doipdf" class=" ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="margin-left:0px;  margin-bottom:1px;float: right; ">Pdf gốc<span class="ui-icon ui-icon-refresh"></span></a>
        
        <a href="#" id="phongto" class=" ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="margin-left:0px;  margin-bottom:1px;float: right; ">Phóng to<span class="ui-icon ui-icon-zoomin"></span></a>
        
    	</div>
    	<div style="margin-top: -9px;margin-left:5px">
	    	<a href="#" id="open_form_hentra">Giờ hẹn trả kết quả:</a>
	    	<label id="giohentra" style="color:blue;margin-left:5px"></label>
    	</div>
    	<div style="margin-top: 2px;margin-left:5px" id="edit_by">
	    	<label>Sửa bởi:</label>
	    	<label id="nguoisua" style="color:blue"></label>
	    	<label id="ngaygiosua" style="color:blue"></label>
            &nbsp;<select style=" display:none" id="printer_list"></select>
    	</div> 
    </div>
   
 </div> 
 <div class="ui-widget-content ui-layout-center " >
 		
 	<table id="code" width="100%" align="center" cellpadding="0" cellspacing="0">
    	<tr style="font-size:13px;background:#56A717; color:#FFF">
        	<th width="3%"></th>
            <th width="8%">Tên chỉ số</th>
            <th width="12%">Tên template</th>
            <th width="37%">Tiếng Anh</th>
            <th width="40%">Tiếng Việt</th>         
        </tr>
        <tr class="highlight" align="left" height="25px" style="font-size:13px;background:#FF9;color:#F00">
        	<td style="font-size:12px;color:#00F;text-align:center"><a  style="cursor:pointer" href="#" id="xoa_code0">Xóa</a></td>
            <td>code 0</td>
            <td style="background:#FF9">
            	 <span class="custom-combobox" >
                    <input id="code0" name="code0"  type="text" style="width:85px;color:#F00!important;font-size:18px!important;text-align:center!important;">
            	</span> 
            	<input id="code0_1"  name="code0_1" type="text" lang='luu' style="display:none" >
            </td>
                <td id="noidung_code0"></td>
            <td id="ketluan_code0"></td>
        </tr>
         <tr class="highlight" align="left"height="25px" style="font-size:13px">
        <td style="font-size:12px;color:#00F;text-align:center"><a  style="cursor:pointer" href="#" id="xoa_code1">Xóa</a></td>
            <td>code 1</td>
            <td style="background:#FF9">
            	 <span class="custom-combobox">
                    <input id="code1" name="code1"  type="text" style="width:85px;font-size:18px!important;text-align:center!important;">
            	</span> 
            	<input id="code1_1"  name="code1_1" type="text" lang='luu' style="display:none" >
            </td>
            <td id="noidung_code1"></td>
            <td id="ketluan_code1"></td>
        </tr>
         <tr class="highlight" align="left" height="25px" style="font-size:13px">
        	<td style="font-size:12px;color:#00F;text-align:center"><a  style="cursor:pointer" href="#" id="xoa_code2">Xóa</a></td>
            <td>code 2</td>
            <td style="background:#FF9">
            	 <span class="custom-combobox">
                    <input id="code2" name="code2"  type="text" style="width:85px;font-size:18px!important;text-align:center!important;">
            	</span> 
            	<input id="code2_1"  name="code2_1" type="text" lang='luu' style="display:none" >
            </td>
             <td id="noidung_code2"></td>
            <td id="ketluan_code2"></td>
        </tr>
         <tr  class="highlight" align="left" height="25px" style="font-size:13px">
        	<td style="font-size:12px;color:#00F;text-align:center"><a  style="cursor:pointer" href="#" id="xoa_code3">Xóa</a></td>
            <td>code 3</td>
            <td  style="background:#FF9">
             <span class="custom-combobox">
                    <input id="code3" name="code3"  type="text" style="width:85px;font-size:18px!important;text-align:center!important;">
            	</span> 
            	<input id="code3_1"  name="code3_1" type="text" lang='luu' style="display:none" >
            </td>
             <td id="noidung_code3"></td>
            <td id="ketluan_code3"></td>
        </tr>
         <tr class="highlight" align="left" height="25px" style="font-size:13px">
        	<td style="font-size:12px;color:#00F;text-align:center"><a  style="cursor:pointer" href="#" id="xoa_code4">Xóa</a></td>
            <td>code 4</td>
            <td  style="background:#FF9">
            <span class="custom-combobox">
                    <input id="code4" name="code4"  type="text" style="width:85px;font-size:18px!important;text-align:center!important;">
            	</span> 
            	<input id="code4_1"  name="code4_1" type="text" lang='luu' style="display:none" >
            </td>
             <td id="noidung_code4"></td>
            <td id="ketluan_code4"></td>
        </tr>
          <tr class="highlight" align="left" height="25px" style="font-size:13px">
        	<td style="font-size:12px;color:#00F;text-align:center"><a  style="cursor:pointer" href="#" id="xoa_code5">Xóa</a></td>
            <td>code 5</td>
            <td  style="background:#FF9">
            <span class="custom-combobox">
                    <input id="code5" name="code5"  type="text" style="width:85px;font-size:18px!important;text-align:center!important;">
            	</span> 
            	<input id="code5_1"  name="code5_1" type="text" lang='luu' style="display:none" >
            </td>
             <td id="noidung_code5"></td>
            <td id="ketluan_code5"></td>
        </tr>
    </table>
    </div>
 </div>
 
 <!--<div class="ui-form ui-widget-content" id="ketluan_container" style="vertical-align:top">-->
 	<!--<div style="font-size:13px;width:35%;display:inline-block;vertical-align:top">
    	<iframe id="images_viewer"  style="border:none;width:100%;height:350px; overflow:visible;" title="Bấm ESC để up hình, double click vào ảnh để xóa ảnh"></iframe>   
       
    </div>-->
    <div id="pdf_container" style="display:none; height:370px" >			
	           <fieldset style="width:96%;height:100%">
	                <legend>Kết quả ECG</legend>	                
					<iframe style="background-color:#FFF" id="mht" name="mht" src="" width="100%" height="99%" frameborder="0"></iframe>					
	           </fieldset>	       
	</div> 
    <div id="ketluan_container" style="vertical-align:top; display:inline-block;">        
        <label style="font-size:12px; display:block; margin:3px 0px;"><strong>Kết luận:</strong> (phải rút gọn còn 3 chẩn đoán, mỗi chẩn đoán không quá một dòng)</label>        
        <textarea id="ketluan_bottom" style="width:100%;height:115px;font-weight:bold;font-size:13px!important;border:none; display:block"></textarea>           
    </div>
</div>
</body>
</html>
<script type="text/javascript">

var _id_luotkham=[];
var _id_loaikham=[];
var _id_luotkham_non_unique=[];
var _id_kham=[];
var data_luotkham="";
var navigator_count=0,sub_navigator_count=0;
var _folder_name;
var ma_benhnhan=0;
var idluotkham;
var id_loaikham;
var grid_click_status=false;
var id_kham;
var _id_trangthai;
var _kham;
var code0,code1,code2,code3,code4,code5;
var id_;
var ketluan_bottom_temp;
var id_15,id_16,id_17,id_18,id_19,id_20;
var chuky = 1;
var nhanvien_control; //dùng để điều khiển nút "Hoàn tất": khi bấm hoàn tất mà Người thục hiện còn trống thì sẽ chèn cả người thực hiện trùng với bs chẩn đoán
var report_code=["ECG"];
var report_name=["Điện tâm đồ"];
$(document).ready(function() {
	$("#phongto").hide();
	$("#taopdf").hide();
	$("#doipdf").hide();
	$("#xemin").hide();	
	$("#phongto").button();
	$("#taopdf").button();
	$("#doipdf").button();
	$("#xemin_moi").button();
	$("#chonfile").button();
	$("#chonfile").click(function(e) {
        $("#file").click();
    });
	get_printer("#xemin_moi",set_print_select,$.cookie('remote_ip'),$.cookie('username_window'),"DienTimMoi");
	 _prints=$.cookie("printers").split("::");
	 for (i = 0; i <_prints.length-1; i++) {
		$("#printer_list").append($('<option>', {
			value: _prints[i],
			text: _prints[i]
		}));
	 }
	 
	$("#loaiecg").change(function(e) {
		if($("#loaiecg :selected").val()>1){
			$("#code").hide();
			$("#pdf_container").show();
			$("#ketluan_container").css("width","23%").css("margin-left","0px") ;
			$("#pdf_container").css("display","inline-block").css("width","75%");			 
			$("#ketluan_bottom").css("height","340px") ;			
			//$("#xemin_moi").show();
			$("#xemin").hide();
			$("#In_CoChuKy").hide();
			$("#doipdf").hide();
			$("#phongto").show();
			if($("#loaiecg :selected").val()==5){
				$("#taopdf").show();
			}else{
				$("#taopdf").hide();
			}
			$("#doipdf").show();			
			//$("#printer_list").show();			
		}
	 
		if($("#loaiecg :selected").val()==1){
			$("#In_CoChuKy").show();
			$("#code").show();
			$("#pdf_container").hide();
			$("#ketluan_container").css("width","99%").css("margin-left","5px") ;
			$("#xemin_moi").hide();
			$("#xemin").show();
			$("#ketluan_bottom").css("height","170px");
			$("#phongto").hide();
			$("#taopdf").hide();
			$("#doipdf").hide();
			//$("#printer_list").hide();		
		}       
    });
	$("#taopdf").click(function(e) {
		ecg_pdf_action();
	})
	openform_shortcutkey();
	$("#In_CoChuKy input:checkbox").click(function(){
		if($('#In_CoChuKy input:checkbox').prop('checked')==true)	
		{
			chuky=1;
		}else{chuky=0;}
		
		
	})
	
	$("#xemin").click(function(e){		
			//alert(id_kham);
			//print_action="xemin";		//dialog_report("In",90,90,"u78787878975f","resource.php?module=report&view=canlamsang&action=sieuam&header=left&id_benhnhan="+id_benhnhan+"&id_kham="+id_kham);
		$.cookie("in_status", "print_preview"); 
		dialog_report("Xem trước khi in",90,90,"u78787878975f","resource.php?module=report&view=<?=$modules?>&action=ECG&header=left&id_benhnhan="+id_benhnhan+"&id_kham="+_kham+"&type=report&id_form=10&tieude=&chucnang=&chucdanh=&chuky="+chuky,'ECG');
	});
	/*$("#xemin_moi").click(function(e){		
		 //get_printer("#xemin_moi",set_printer_iframe,$.cookie('remote_ip'),$.cookie('username_window'),"DienTimMoi");	 
	 	//_link="resource.php?module=report&view=<?=$_GET["module"]?>&action=ecg_new&file="+$("#default_name").val();
		//$.cookie("in_status", "print_preview"); 
		//dialog_report("Xem trước khi in",90,90,"u78787878975f","resource.php?module=report&view=<?=$modules?>&action=ecg_new&header=left&id_benhnhan="+id_benhnhan+"&id_kham="+_kham+"&type=report&id_form=10&file="+$("#default_name").val(),'DienTimMoi');
	});*/

	$('#xoa_code0').click(function(){
			//alert("here");
			setval('#code0','#code0_1','#code0_grid','');
			$('#noidung_code0,#ketluan_code0').text("");
		
		});
		
	$('#xoa_code1').click(function(){
			setval('#code1','#code1_1','#code1_grid','');
			$('#noidung_code1,#ketluan_code1').text("");
			
			congdon_ketluan();
		});
	$('#xoa_code2').click(function(){
			setval('#code2','#code2_1','#code2_grid','');
			$('#noidung_code2,#ketluan_code2').text("");
			
			congdon_ketluan();
		});
	$('#xoa_code3').click(function(){
			setval('#code3','#code3_1','#code3_grid','');
			$('#noidung_code3,#ketluan_code3').text("");
			
			congdon_ketluan();
		});
	$('#xoa_code4').click(function(){
			setval('#code4','#code4_1','#code4_grid','');
			$('#noidung_code4,#ketluan_code4').text("");
			
			congdon_ketluan();
		});
	$('#xoa_code5').click(function(){
			setval('#code5','#code5_1','#code5_grid','');
			$('#noidung_code5,#ketluan_code5').text("");
			
			congdon_ketluan();	
		});
		
	
	
	
	$( "#code0" ).keyup(function(e){
			if (e.keyCode === 13) {
				$( "#code1" ).focus();
				return false;
			}
	});
	
	$( "#code1" ).keyup(function(e){
			if (e.keyCode === 13) {
				$( "#code2" ).focus();
				return false;
			}
	});
	
	$( "#code2" ).keyup(function(e){
			if (e.keyCode === 13) {
				$( "#code3" ).focus();
				return false;
			}
	});
	
	$( "#code3" ).keyup(function(e){
			if (e.keyCode === 13) {
				$( "#code4" ).focus();
				return false;
			}
	});
	$( "#code4" ).keyup(function(e){
			if (e.keyCode === 13) {
				$( "#code5" ).focus();
				return false;
			}
	});
	$( "#code5" ).keyup(function(e){
			if (e.keyCode === 13) {
				$( "#luu" ).focus();
				return false;
			}
	});
	
	
	
	
	window.nhanvien_complete=0;
	window.nhanvien1_complete=0;
	window.nhanvien2_complete=0;
	create_combobox('#nhanvien', '#nhanvien1', ".nhan_vien", "#nhan_vien", create_nhanvien, 500, 400, 'Người thực hiện', 'data_nhanvien');
	create_combobox('#chuandoan', '#chuandoan1', ".nhan_vien1", "#nhan_vien1", create_bacsi, 500, 400, 'Người thực hiện', 'data_bacsi');
	create_combobox('#code0', '#code0_1', ".code0_grid", "#code0_grid", create_code0, 500, 400, 'Template', 'data_code0',0);
	create_combobox('#code1', '#code1_1', ".code1_grid", "#code1_grid", create_code1, 500, 400, 'Template', 'data_code1to5',0);
	create_combobox('#code2', '#code2_1', ".code2_grid", "#code2_grid", create_code2, 500, 400, 'Template', 'data_code1to5',0);
	create_combobox('#code3', '#code3_1', ".code3_grid", "#code3_grid", create_code3, 500, 400, 'Template', 'data_code1to5',0);
	create_combobox('#code4', '#code4_1', ".code4_grid", "#code4_grid", create_code4, 500, 400, 'Template', 'data_code1to5',0);
	create_combobox('#code5', '#code5_1', ".code5_grid", "#code5_grid", create_code5, 500, 400, 'Template', 'data_code1to5',0);
	//alert(encode64("89045"))
	$('#sua').button();
	$('#luu').button();
	$('#xemin').button();
	$('#dong').button();
	$('#dathuchien').button();
	$('#hoantat').button();
	$('#boqua').button();
	$('#boqua').hide();
	load_select();
	
	
	
	//alert(convert_comma_dot(2.22));
	//$('#rowed111').attr("align","center");
	
	$.get( "resource.php?module=web_services&function=create_panel1&id_benhnhan="+id_benhnhan+"&action=index", function( data ) {
	  $( ".patient_info" ).html( data );
	  $( ".patient_info" ).css("width", $( "#patient_info" ).width()+"css");	
	  ma_benhnhan=$('.profile_container:nth-child(4) .texts').text() ;    
	});
    
	$("#panel_main").css("height",$(window).height()-151+"px");			 
	$("#panel_main").fadeIn(1000); 
	resize_control();	
	
	
	if(id_kham2!="0"){
		$.getJSON( "resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_dientamdo2&idkham="+id_kham2+"&idbenhnhan="+id_benhnhan, 
			function( data ) {
				data_luotkham=data;

		 	//alertObject(data);
			var tam1_cls="";
			$.each( data, function( key, val ) {		 
				for(i=0;i<val.length;i++){
					//tam+=" ; "+val[i]["id"];
					var tam1_cls=val[i]["cell"];
					//tam_cls+= '<div id="cls_'+val[i]["id"]+'">'+tam1_cls[0]+"<br \>" +tam1_cls[5]+'</div>';
					_id_luotkham.push(tam1_cls[5]);				
					_id_loaikham.push(tam1_cls[3]);
					_id_luotkham_non_unique.push(tam1_cls[5]);
					_id_kham.push(val[i]["id"]);
					
					
				}
				//_id_luotkham=$.unique(_id_luotkham).reverse();
				_id_kham=_id_kham.reverse();
				_id_luotkham_non_unique=_id_luotkham_non_unique.reverse();
				_id_loaikham=_id_loaikham.reverse();
				_id_luotkham=$.unique(_id_luotkham);
				load_complete();
				//_id_loaikham=$.unique(_id_loaikham);
				//navigator_load("end","first");			
				 //alert(_id_kham);		
				//create_combobox('#template_title', '', ".DM_template", "#DM_template", create_DM_template_grid, 500, 400, 'Người thực hiện', 'data_DMtemplate&hienmaloi=123&loaikham='+id_loaikham);					 
			//$('.template_title_button').button( 'disable');
				//trangthai=tam1_cls[9];
				
				if(_id_trangthai=="Xong" ||_id_trangthai=="DaThucHien"){
					$('.template_title_button').button( 'disable');
				}
				 else if(_id_trangthai=="DangKham"||_id_trangthai=="DangCho"){
				 	$('.template_title_button').button( 'enable');
				 }
			});		
		});
		
}
//alert(_id_trangthai); 
else{
	
	$.getJSON( "resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_dientamdo&idbenhnhan="+id_benhnhan,
		function( data ) {
			data_luotkham=data;
	 	//alertObject(data);
		var tam1_cls="";
		$.each( data, function( key, val ) {		 
			for(i=0;i<val.length;i++){
				//tam+=" ; "+val[i]["id"];
				var tam1_cls=val[i]["cell"];
				//tam_cls+= '<div id="cls_'+val[i]["id"]+'">'+tam1_cls[0]+"<br \>" +tam1_cls[5]+'</div>';
				_id_luotkham.push(tam1_cls[5]);				
				_id_loaikham.push(tam1_cls[3]);
				_id_luotkham_non_unique.push(tam1_cls[5]);
				_id_kham.push(val[i]["id"]);
								
				
			}			
			//_id_luotkham=$.unique(_id_luotkham).reverse();
			_id_kham=_id_kham.reverse();
			_id_luotkham_non_unique=_id_luotkham_non_unique.reverse();
			_id_loaikham=_id_loaikham.reverse();
			_id_luotkham=$.unique(_id_luotkham);
			load_complete();
			//_id_loaikham=$.unique(_id_loaikham);
			//navigator_load("end","first");			
					
			//create_combobox('#template_title', '', ".DM_template", "#DM_template", create_DM_template_grid, 500, 400, 'Người thực hiện', 'data_DMtemplate&loaikham='+id_loaikham);					 
		//$('.template_title_button').button( 'disable');
		
		});		
	});

}

	function test(){
		
		if(id_kham2!='0'){
			//alert("2");
		_id_luotkham.splice(0, _id_luotkham.length-1)
		_id_loaikham.splice(0, _id_loaikham.length-1)
		_id_luotkham_non_unique.splice(0, _id_luotkham_non_unique.length-1)
		_id_kham.splice(0, _id_kham.length-1)
		
		
	$.getJSON( "resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_dientamdo2&idbenhnhan="+id_benhnhan+"&idkham="+id_kham, 
		function( data ) {
			data_luotkham=data;
	 	//alert(data);
		var tam1_cls="";
		$.each( data, function( key, val ) {		 
			for(i=0;i<val.length;i++){
				//tam+=" ; "+val[i]["id"];
				var tam1_cls=val[i]["cell"];
				//tam_cls+= '<div id="cls_'+val[i]["id"]+'">'+tam1_cls[0]+"<br \>" +tam1_cls[5]+'</div>';
				_id_luotkham.push(tam1_cls[5]);				
				_id_loaikham.push(tam1_cls[3]);
				_id_luotkham_non_unique.push(tam1_cls[5]);
				_id_kham.push(val[i]["id"]);				
				
			}
			//_id_luotkham=$.unique(_id_luotkham).reverse();
			_id_kham=_id_kham.reverse();
			_id_luotkham_non_unique=_id_luotkham_non_unique.reverse();
			_id_loaikham=_id_loaikham.reverse();
			_id_luotkham=$.unique(_id_luotkham);
			//_id_loaikham=$.unique(_id_loaikham);
			//navigator_load("end","first");			
					
			//create_combobox('#template_title', '', ".DM_template", "#DM_template", create_DM_template_grid, 500, 400, 'Người thực hiện', 'data_DMtemplate&loaikham='+id_loaikham);					 
		//$('.template_title_button').button( 'disable');
		
		});		
	});	
		}
		
		else{
		_id_luotkham.splice(0, _id_luotkham.length-1)
		_id_loaikham.splice(0, _id_loaikham.length-1)
		_id_luotkham_non_unique.splice(0, _id_luotkham_non_unique.length-1)
		_id_kham.splice(0, _id_kham.length-1)
		//delete tong_luotkham;
		//alert("1");
		
	$.getJSON( "resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_dientamdo&idbenhnhan="+id_benhnhan, 
		function( data ) {
			data_luotkham=data;
	 	//alertObject(data);
		var tam1_cls="";
		$.each( data, function( key, val ) {		 
			for(i=0;i<val.length;i++){
				//tam+=" ; "+val[i]["id"];
				var tam1_cls=val[i]["cell"];
				//tam_cls+= '<div id="cls_'+val[i]["id"]+'">'+tam1_cls[0]+"<br \>" +tam1_cls[5]+'</div>';
				_id_luotkham.push(tam1_cls[5]);				
				_id_loaikham.push(tam1_cls[3]);
				_id_luotkham_non_unique.push(tam1_cls[5]);
				_id_kham.push(val[i]["id"]);				
				
			}
			//_id_luotkham=$.unique(_id_luotkham).reverse();
			_id_kham=_id_kham.reverse();
			_id_luotkham_non_unique=_id_luotkham_non_unique.reverse();
			_id_loaikham=_id_loaikham.reverse();
			_id_luotkham=$.unique(_id_luotkham);
			//_id_loaikham=$.unique(_id_loaikham);
			//navigator_load("end","first");			
				
			//create_combobox('#template_title', '', ".DM_template", "#DM_template", create_DM_template_grid, 500, 400, 'Người thực hiện', 'data_DMtemplate&loaikham='+id_loaikham);					 
		//$('.template_title_button').button( 'disable');
		
		});		
	});	
			}
		}
	
	
	$(window).resize(function() {		 
		$("#panel_main").css("height",$(window).height()-151+"px");	
		resize_control();	 
	});

	//navigator_load(0);
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
		
                $("#cancel").click(function(){
			$("#dialog-form").dialog("close");
		});
		
		$("#open_form_hentra").click(function(e){
					   $.post('resource.php?module=web_services&function=get_link&action=index&folder=hen_tra_ket_qua:').done(function(data) {
					  elem=1 + Math.floor(Math.random() * 1000000000);
					   width=90;
						  height=90;
					  var folder= data.split(';');
					  var links='resource.php?module='+folder[0]+'&view='+folder[1]+'&id_form='+folder[2]+"&idluotkham="+idluotkham;				  				  
						dialog_add_dm("",width,height,elem,links,test);   
				  		})
					  
					 }) ;
		
		
		/*center*/
		         
  	}); 
        $("#yes2").click(function(){
				if(window.oper=='xoamt'){
					$("#mota").val("");
					$("#ketluan").val("");
					$("#loikhuyen").val("");
					$( "#dialog-form2" ).dialog( "close" );
				}
				if(window.oper=='xoakl'){
					$("#ketluan").val("");
					$( "#dialog-form2" ).dialog( "close" );
				}
				if(window.oper=='xoalk'){
					$("#loikhuyen").val("");
					$( "#dialog-form2" ).dialog( "close" );
				}
			});
			  $("#no2").click(function(){
			  	$( "#dialog-form2" ).dialog( "close" );
			  });
			  
			  $("#sua").click(function(){
			  	//$('#sua').button( {disabled:true});                               
								//lock_viewer(true,"visible");
							   	$('#xoa_code0,#xoa_code1,#xoa_code2,#xoa_code3,#xoa_code4,#xoa_code5').show();
								$('#code0,#code1,#code2,#code3,#code4,#code5').attr("disabled", false);
							 	$( "#ketluan_bottom,#id_" ).attr("disabled",false);
								$('.code0_button,.code1_button,.code2_button,.code3_button,.code4_button,.code5_button').button( {disabled:false});
							    $('#luu').button( {disabled:false});
                               
                              
                             
                                $("#sua").hide();
                         		$('#boqua').show();
                         		
                         		$('.chuandoan_button').button( {disabled:false});
                         		$('.nhanvien_button').button( {disabled:false});
                         		$( "#nhanvien" ).attr("disabled",false);
                         		  $( "#chuandoan" ).attr("disabled",false);
                         	
                         		  
                         		  window.test1="giosuacuoi";
			  });
				$("#boqua").click(function(){					 
					//lock_viewer(false,"hidden");
					$('#xoa_code0,#xoa_code1,#xoa_code2,#xoa_code3,#xoa_code4,#xoa_code5').hide();
						$('#code0,#code1,#code2,#code3,#code4,#code5').attr("disabled", "disabled");
						 $( "#ketluan_bottom,#id_" ).attr("disabled",true);
						$('.code0_button,.code1_button,.code2_button,.code3_button,.code4_button,.code5_button').button( {disabled:true});
					 setval('#code0','#code0_1','#code0_grid',code0);
					 if(code0=='') $('#noidung_code0,#ketluan_code0').text('');
					  setval('#code1','#code1_1','#code1_grid',code1);
					  if(code1=='') $('#noidung_code1,#ketluan_code1').text('');
					   setval('#code2','#code2_1','#code2_grid',code2);
					   if(code2=='') $('#noidung_code2,#ketluan_code2').text('');
					    setval('#code3','#code3_1','#code3_grid',code3);
						if(code3=='') $('#noidung_code3,#ketluan_code3').text('');
						 setval('#code4','#code4_1','#code4_grid',code4);
						 if(code4=='') $('#noidung_code4,#ketluan_code4').text('');
						  setval('#code5','#code5_1','#code5_grid',code5);
						  if(code5=='') $('#noidung_code5,#ketluan_code5').text('');
						  //alert(chuandoan4);
						  $('#id_').val(id_);
					$("#ketluan_bottom").val(ketluan_bottom_temp);
					
					$("#sua").show();
                    $('#boqua').hide();
                     $('#luu').button( {disabled:true});
                    	
                       $("#chuandoan1").val(chuandoan4);
					   
                         		//$('.chuandoan_button').button( {disabled:true});
                         		$('.nhanvien_button').button( {disabled:true});
                         		$( "#nhanvien" ).attr("disabled",true);
								$('.chuandoan_button').button( {disabled:true});
                         		$( "#chuandoan" ).attr("disabled",true);
                         		 // $( "#chuandoan" ).attr("disabled",true);
                         		  setval('#nhanvien','#nhanvien1','#nhan_vien',nhanvien4);
                         		  setval('#chuandoan','#chuandoan1','#nhan_vien1',chuandoan4);
					if($( "#id_trangthai" ).text()=='Đã thực hiện')
					{
						$('.chuandoan_button').button( {disabled:false});
                        $( "#chuandoan" ).attr("disabled",false);
						setval('#chuandoan','#chuandoan1','#nhan_vien1',<?php echo $_SESSION["user"]["id_user"] ?>);
					}
                   //test();      		  
                         		 
				});
			  $("#dathuchien").click(function(){
			  
                         		  phancach = "";
						        i = 0;
						        dataToSend = '{';
						        $('.thongtin_thai,.form_row').find(':input[type=text],select,textarea,input[type=hidden]').each(function() {

						            if ($(this).attr("lang") == "luu") {
						              
						                dataToSend += phancach + '"'+ this.name + '":' + JSON.stringify(this.value)   ;
						              
						            }
						            phancach = ",";

						        });
						        dataToSend += phancach + '"id_kham":"' + _kham + '"';
						        
						        dataToSend += phancach + '"id_trangthai":"' + _id_trangthai + '"';
						        
						         dataToSend += phancach + '"id_luotkham":"' +_id_luotkham2+ '"';
								 dataToSend += phancach + '"ExtField1":"' + $("#id_").val()+ '"';
								 dataToSend += phancach + '"ChiSo15":"' + $("#code0_1").val()+ '"';
								 dataToSend += phancach + '"ChiSo16":"' + $("#code1_1").val()+ '"';
								 dataToSend += phancach + '"ChiSo17":"' + $("#code2_1").val()+ '"';
								 dataToSend += phancach + '"ChiSo18":"' + $("#code3_1").val()+ '"';
								 dataToSend += phancach + '"ChiSo19":"' + $("#code4_1").val()+ '"';
								 dataToSend += phancach + '"ChiSo20":"' + $("#code5_1").val()+ '"';
								 dataToSend += phancach + '"mota_e_15":"' + $("#noidung_code0").text()+ '"';
								 dataToSend += phancach + '"mota_v_15":"' + $("#ketluan_code0").text()+ '"';
								 dataToSend += phancach + '"mota_e_16":"' + $("#noidung_code1").text()+ '"';
								 dataToSend += phancach + '"mota_v_16":"' + $("#ketluan_code1").text()+ '"';
								 dataToSend += phancach + '"mota_e_17":"' + $("#noidung_code2").text()+ '"';
								 dataToSend += phancach + '"mota_v_17":"' + $("#ketluan_code2").text()+ '"';
								 dataToSend += phancach + '"mota_e_18":"' + $("#noidung_code3").text()+ '"';
								 dataToSend += phancach + '"mota_v_18":"' + $("#ketluan_code3").text()+ '"';
								 dataToSend += phancach + '"mota_e_19":"' + $("#noidung_code4").text()+ '"';
								 dataToSend += phancach + '"mota_v_19":"' + $("#ketluan_code4").text()+ '"';
								 dataToSend += phancach + '"mota_e_20":"' + $("#noidung_code5").text()+ '"';
								 dataToSend += phancach + '"mota_v_20":"' + $("#ketluan_code5").text()+ '"';
								 var a=JSON.stringify($("#ketluan_bottom").val())
								 dataToSend += phancach + '"ketluan":' +  a ;
								  dataToSend += phancach + '"id_15":"' +id_15+ '"';
								   dataToSend += phancach + '"id_16":"' +id_16+ '"';
								   dataToSend += phancach + '"id_17":"' +id_17+ '"';
								    dataToSend += phancach + '"id_18":"' +id_18+ '"';
								  dataToSend += phancach + '"id_19":"' +id_19+ '"';
								   dataToSend += phancach + '"id_20":"' +id_20+ '"';
								   dataToSend += phancach + '"songayluukq":"' +$("#loaiecg :selected").val()+ '"';
						         dataToSend += '}';
								 //alert (dataToSend);
								// dataToSend = JSON.parse(dataToSend);
								
								 //dataToSend=JSON.stringify(dataToSend);
						         // alert(dataToSend);
							if(($("#loaiecg :selected").val()<2)&&($("#id_").val()=="")){ 							     							   
										alert("Trường ID không được để trống");	
							}else{
								
                        		_id_trangthai="DaThucHien";
                 				
								//dataToSend=JSON.stringify(dataToSend);
								
								dataToSend = jQuery.parseJSON(dataToSend);
						        //alertObject(dataToSend); 
						        $.post('resource.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=dathuchien&hienmaloi=23',dataToSend)
							    .done(function(data) {	
										if($.trim(data)==1){
											tooltip_message("ID này đã tồn tại!");
											$("#id_").val("");
											
											}else{
			                                             tooltip_message("Cập nhật thành công");
														 
														 $('#xoa_code0,#xoa_code1,#xoa_code2,#xoa_code3,#xoa_code4,#xoa_code5').hide();
														$('#code0,#code1,#code2,#code3,#code4,#code5').attr("disabled", "disabled");
														$( "#ketluan_bottom,#id_" ).attr("disabled",true);
														$('.code0_button,.code1_button,.code2_button,.code3_button,.code4_button,.code5_button').button( {disabled:true});
														$('.nhanvien_button').button( {disabled:true});
														$( "#nhanvien" ).attr("disabled",true);
														$('.chuandoan_button').button( {disabled:false});
														$( "#chuandoan" ).attr("disabled",false);			
														$("#sua").show().button( {disabled:false});
														$('#boqua').hide();
														$('#luu').button( {disabled:true});     
														$('#dathuchien').button( {disabled:true});
														$('#hoantat').button( {disabled:false});
														$("#id_trangthai").html("Đã thực hiện").css("background-color","#FF4848");
														$("#giothuchien").html(gio("current"));
														var giothuchien2= $( "#giothuchien" ).text();
														test(); 
														id_15=21312;
														id_16=21312;
														id_17=21312;
														id_18=21312;
														id_19=21312;
														id_20=21312;
														nhanvien_control=0;
														
														 	
											}
			                                            })
			                                            .fail(function() {
			                                            tooltip_message( "Có lỗi trong quá trình cập nhật" );
			                                            });
			             
						  
							}
			  });
			  $("#hoantat").click(function(){
                         		  phancach = "";
						        i = 0;
						        dataToSend = '{';
						        $('.thongtin_thai,.form_row').find(':input[type=text],select,textarea,input[type=hidden]').each(function() {

						            if ($(this).attr("lang") == "luu") {
						              
						                dataToSend += phancach + '"'+ this.name + '":' + JSON.stringify(this.value)   ;
						              
						            }
						            phancach = ",";

						        });
						        dataToSend += phancach + '"id_kham":"' + _kham + '"';
						        //alert(_id_trangthai);
						        dataToSend += phancach + '"ExtField1":"' + $("#id_").val()+ '"';
								 dataToSend += phancach + '"ChiSo15":"' + $("#code0_1").val()+ '"';
								 dataToSend += phancach + '"ChiSo16":"' + $("#code1_1").val()+ '"';
								 dataToSend += phancach + '"ChiSo17":"' + $("#code2_1").val()+ '"';
								 dataToSend += phancach + '"ChiSo18":"' + $("#code3_1").val()+ '"';
								 dataToSend += phancach + '"ChiSo19":"' + $("#code4_1").val()+ '"';
								 dataToSend += phancach + '"ChiSo20":"' + $("#code5_1").val()+ '"';
								 dataToSend += phancach + '"mota_e_15":"' + $("#noidung_code0").text()+ '"';
								 dataToSend += phancach + '"mota_v_15":"' + $("#ketluan_code0").text()+ '"';
								 dataToSend += phancach + '"mota_e_16":"' + $("#noidung_code1").text()+ '"';
								 dataToSend += phancach + '"mota_v_16":"' + $("#ketluan_code1").text()+ '"';
								 dataToSend += phancach + '"mota_e_17":"' + $("#noidung_code2").text()+ '"';
								 dataToSend += phancach + '"mota_v_17":"' + $("#ketluan_code2").text()+ '"';
								 dataToSend += phancach + '"mota_e_18":"' + $("#noidung_code3").text()+ '"';
								 dataToSend += phancach + '"mota_v_18":"' + $("#ketluan_code3").text()+ '"';
								 dataToSend += phancach + '"mota_e_19":"' + $("#noidung_code4").text()+ '"';
								 dataToSend += phancach + '"mota_v_19":"' + $("#ketluan_code4").text()+ '"';
								 dataToSend += phancach + '"mota_e_20":"' + $("#noidung_code5").text()+ '"';
								 dataToSend += phancach + '"mota_v_20":"' + $("#ketluan_code5").text()+ '"';
								 var a=JSON.stringify($("#ketluan_bottom").val())
								 dataToSend += phancach + '"ketluan":' +  a ;
								  dataToSend += phancach + '"id_15":"' +id_15+ '"';
								   dataToSend += phancach + '"id_16":"' +id_16+ '"';
								   dataToSend += phancach + '"id_17":"' +id_17+ '"';
								    dataToSend += phancach + '"id_18":"' +id_18+ '"';
								  dataToSend += phancach + '"id_19":"' +id_19+ '"';
								   dataToSend += phancach + '"id_20":"' +id_20+ '"';
								   dataToSend += phancach + '"control":"' +nhanvien_control+ '"';
								   dataToSend += phancach + '"songayluukq":"' +$("#loaiecg :selected").val()+ '"';
						        dataToSend += '}';
						        //alert(dataToSend);
						        dataToSend = jQuery.parseJSON(dataToSend);
						       //alertObject(dataToSend);
							if(($("#loaiecg :selected").val()<2)&&($("#id_").val()=="")){ 							     							   
										alert("Trường ID không được để trống");								 			 
							}else{
						       $.post('resource.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=hoantat&hienmaloi=3',dataToSend)
			                        .done(function( data ) {	
			                                             if($.trim(data)==1){
											tooltip_message("ID này đã tồn tại!");
											$("#id_").val("");
											
											}else{
			                                             tooltip_message("Cập nhật thành công");
														  _id_trangthai="Xong";
														if($("#loaiecg :selected").val()!="1"){
															 ecg_pdf_action();
													    }
														$('#xoa_code0,#xoa_code1,#xoa_code2,#xoa_code3,#xoa_code4,#xoa_code5').hide();
														$('#code0,#code1,#code2,#code3,#code4,#code5').attr("disabled", "disabled");
														$( "#ketluan_bottom,#id_" ).attr("disabled",true);
														$('.code0_button,.code1_button,.code2_button,.code3_button,.code4_button,.code5_button').button( {disabled:true});
														$('.nhanvien_button').button( {disabled:true});
														$( "#nhanvien" ).attr("disabled",true);
														$('.chuandoan_button').button( {disabled:true});
														$( "#chuandoan" ).attr("disabled",true);			
														$("#sua").show().button( {disabled:false});
														$('#boqua').hide();
														$('#luu').button( {disabled:true});     
														$('#dathuchien').button( {disabled:true});
														$('#hoantat').button( {disabled:true});
														$("#id_trangthai").html("Đã hoàn tất").css("background-color","transparent");
														$("#giohoantat").html(gio("current"));
														var giohoantat2= $( "#giohoantat" ).text();
														
														test();
														
														if(nhanvien_control==1){
																$("#giothuchien").html(gio("current"));
														var giothuchien2= $( "#giothuchien" ).text();}
											}
			                                            })
			                                            .fail(function() {
			                                            tooltip_message( "Có lỗi trong quá trình cập nhật" );
			                                            }); }
			         	                          
			  });
			
			  $('#luu').click(function (){
			  	  
			        phancach = "";
			        i = 0;
			        dataToSend = '{';
			        $('.thongtin_thai,.form_row').find(':input[type=text],select,textarea,input[type=hidden]').each(function() {

			            if ($(this).attr("lang") == "luu") {
			              
			                dataToSend += phancach + '"'+ this.name + '":' + JSON.stringify(this.value)   ;
			              
			            }
			            phancach = ",";

			        });
			        dataToSend += phancach + '"id_kham":"' + _kham + '"';
			        //alert(_id_trangthai);
			        dataToSend += phancach + '"id_trangthai":"' + _id_trangthai + '"';
			       	 dataToSend += phancach + '"ExtField1":"' + $("#id_").val()+ '"';
								 dataToSend += phancach + '"ChiSo15":"' + $("#code0_1").val()+ '"';
								 dataToSend += phancach + '"ChiSo16":"' + $("#code1_1").val()+ '"';
								 dataToSend += phancach + '"ChiSo17":"' + $("#code2_1").val()+ '"';
								 dataToSend += phancach + '"ChiSo18":"' + $("#code3_1").val()+ '"';
								 dataToSend += phancach + '"ChiSo19":"' + $("#code4_1").val()+ '"';
								 dataToSend += phancach + '"ChiSo20":"' + $("#code5_1").val()+ '"';
								 dataToSend += phancach + '"mota_e_15":"' + $("#noidung_code0").text()+ '"';
								 dataToSend += phancach + '"mota_v_15":"' + $("#ketluan_code0").text()+ '"';
								 dataToSend += phancach + '"mota_e_16":"' + $("#noidung_code1").text()+ '"';
								 dataToSend += phancach + '"mota_v_16":"' + $("#ketluan_code1").text()+ '"';
								 dataToSend += phancach + '"mota_e_17":"' + $("#noidung_code2").text()+ '"';
								 dataToSend += phancach + '"mota_v_17":"' + $("#ketluan_code2").text()+ '"';
								 dataToSend += phancach + '"mota_e_18":"' + $("#noidung_code3").text()+ '"';
								 dataToSend += phancach + '"mota_v_18":"' + $("#ketluan_code3").text()+ '"';
								 dataToSend += phancach + '"mota_e_19":"' + $("#noidung_code4").text()+ '"';
								 dataToSend += phancach + '"mota_v_19":"' + $("#ketluan_code4").text()+ '"';
								 dataToSend += phancach + '"mota_e_20":"' + $("#noidung_code5").text()+ '"';
								 dataToSend += phancach + '"mota_v_20":"' + $("#ketluan_code5").text()+ '"';
								 var a=JSON.stringify($("#ketluan_bottom").val())
								 dataToSend += phancach + '"ketluan":' +  a ;
								  dataToSend += phancach + '"id_15":"' +id_15+ '"';
								   dataToSend += phancach + '"id_16":"' +id_16+ '"';
								   dataToSend += phancach + '"id_17":"' +id_17+ '"';
								    dataToSend += phancach + '"id_18":"' +id_18+ '"';
								  dataToSend += phancach + '"id_19":"' +id_19+ '"';
								   dataToSend += phancach + '"id_20":"' +id_20+ '"';
			        dataToSend += phancach + '"nguoisua":"' +<?php echo($_SESSION["user"]["id_user"])?>+ '"';
					dataToSend += phancach + '"songayluukq":"' +$("#loaiecg :selected").val()+ '"';
			        dataToSend += '}';
			       
				  // alert(dataToSend);
			       dataToSend = jQuery.parseJSON(dataToSend);
			      // alertObject(dataToSend); 
				   //alert(window.oper);
				  if(($("#loaiecg :selected").val()<2)&&($("#id_").val()=="")){ 							     							   
										alert("Trường ID không được để trống");								   
				  }else{
			      if(window.oper=="dathuchien1"){					 
			       $.post('resource.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=luuthuchien&hienmaloi=3',dataToSend)
								 .done(function( data ) {	
			                                             if($.trim(data)==1){
											tooltip_message("ID này đã tồn tại!");
											$("#id_").val("");
											
											}else{
			                                            
														if($("#loaiecg :selected").val()!="1"){
															 ecg_pdf_action();
													    }
														tooltip_message("Cập nhật thành công");
														id_15=21312;
														id_16=21312;
														id_17=21312;
														id_18=21312;
														id_19=21312;
														id_20=21312;
														nhanvien_control=0;
														$('#xoa_code0,#xoa_code1,#xoa_code2,#xoa_code3,#xoa_code4,#xoa_code5').hide();
														$('#code0,#code1,#code2,#code3,#code4,#code5').attr("disabled", "disabled");
														$( "#ketluan_bottom,#id_" ).attr("disabled",true);
														$('.code0_button,.code1_button,.code2_button,.code3_button,.code4_button,.code5_button').button( {disabled:true});
														
														$('.chuandoan_button').button( {disabled:false});
														$( "#chuandoan" ).attr("disabled",false);			
														$("#sua").show();
														$('#boqua').hide();
														  
														 test(); 
														$('.nhanvien_button').button( {disabled:true});
														$( "#nhanvien" ).attr("disabled",true);
														$('#luu').button( {disabled:true});  
															
															
														} 
			                                            })
			                                            .fail(function() {
			                                            tooltip_message("Có lỗi trong qua trình lưu dữ liệu");
			                                            })
			         }
			         if(window.oper=="hoantat1"){
			         	$.post('resource.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=luuhoantat&hienmaloi=3',dataToSend)
								 .done(function( data ) {	
			                                            if($.trim(data)==1){
											tooltip_message("ID này đã tồn tại!");
											$("#id_").val("");
											
											}else{
			                                             tooltip_message("Cập nhật thành công");
														 if($("#loaiecg :selected").val()!="1"){
															 ecg_pdf_action();
													     }
														 	test(); 
															 id_15=21312;
															id_16=21312;
															id_17=21312;
															id_18=21312;
															id_19=21312;
															id_20=21312;
														nhanvien_control=0;	
														disable_input();
														}
			                                            })
			                                            .fail(function() {
			                                            tooltip_message("Có lỗi trong qua trình lưu dữ liệu");
			                                            })
			         }     
					  if(window.oper=="dangkham1"){
			       $.post('resource.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=luudangkham&hienmaloi=3',dataToSend)
								.done(function( data ) {	
			                                             if($.trim(data)==1){
											tooltip_message("ID này đã tồn tại!");
											$("#id_").val("");
											
											}else{
													   if($("#loaiecg :selected").val()!="1"){
															 ecg_pdf_action();
													    }
			                                             tooltip_message("Cập nhật thành công");
														 id_15=21312;
														id_16=21312;
														id_17=21312;
														id_18=21312;
														id_19=21312;
														id_20=21312;
														;
														 	test(); 	 }
			                                            })
			                                            .fail(function() {
			                                            tooltip_message("Có lỗi trong qua trình lưu dữ liệu");
			                                            })
			         }
							}
				  
			    });
			 	phanquyen();
				image_message();
				
	
	
});
 
function refresh_images(){
  $("#images_viewer").attr("src",$("#images_viewer").attr("src"));
}

function navigator_load(_value,_click){
	if((navigator_count+_value>_id_luotkham.length-1)||(navigator_count+_value<0)){
		return false;	
	}
	var tam_cls=""; 
	if(_value=="first"){
		navigator_count=0;	
	}else if(_value=="end"){		 
		navigator_count=_id_luotkham.length-1;
	}else{
		navigator_count+=parseInt(_value);
	}
	var _mota="";		
	$.each( data_luotkham, function( key, val ) {					 
		for(i=0;i<val.length;i++){
			//tam+=" ; "+val[i]["id"];				
			var tam1_cls=val[i]["cell"];
			//alert(tam1_cls[5])
			if(_id_luotkham[navigator_count]==tam1_cls[5]){
				//alert(_id_luotkham[navigator_count]) 
				tam_cls+= '<div id="'+val[i]["id"]+'" alt="'+ma_benhnhan+"_"+tam1_cls[5]+"_"+tam1_cls[3]+'">'+tam1_cls[0]+"<br \>" +tam1_cls[5]+'</div>';				
				$("#ngay_kham").html(tam1_cls[2]);				 
				// $("#id_trangthai").html(tam1_cls[9]);
				id_kham=val[i]["id"];
				//alert(val[i]["cell"][29])
				if((val[i]["cell"][29]==1)||(val[i]["cell"][29]==null)){
					$("#loaiecg").val(1);
					$("#loaiecg").change();
				}else{
					$("#loaiecg").val(val[i]["cell"][29]);
					$("#loaiecg").change()
				}				 
			}
		}
		$("#left_col div").html(tam_cls);
		 
	});
	loaikham_click();
	if(_click=="first"){
		$("#left_col div div:first-child").click();

	}
	$("#left_col .navigator_title").html("Lượt khám " + (navigator_count+1) +"/"+_id_luotkham.length);	
	 
	_ngaychidinh=$("#ngaychidinh").val().split(" ");
	$("#default_name").val(ma_benhnhan+"_"+id_kham+"_"+_ngaychidinh[1].replaceAll($.cookie("phancachngay"),'')+_ngaychidinh[0].replaceAll(":","")+".pdf");
	 if($("#loaiecg :selected").val()=="2"){
	 	load_pdf();
	 }
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
			thoigian=thoigian.addHours(0).toString("yyyy-MM-dd H:mm ");
			}
			return thoigian;
} 
function loaikham_click(){
	$.each( data_luotkham, function( key, val ) {
		$("#left_col div div").click(function(e) {
				$('#boqua').hide();
				$('#sua').show();
				for(i=0;i<val.length;i++){
						tam=val[i]["id"];	
						//alert(val[i]["cell"])	
						//id_kham=		val[i]["id"];
						//alert(id_kham);
					 var tam1_cls=val[i]["cell"]; 
					tam1=$(this).attr("id");
					if(tam==tam1){	
						//alert(ket_luan(-3.5));
						
						$("#ngaychidinh").val(val[i]["cell"][2]);
						$("#bschidinh").val(val[i]["cell"][4]);
						idluotkham=val[i]["cell"][5];
						mota5=val[i]["cell"][6];
						ketluan5=val[i]["cell"][7];
						loikhuyen5 = val[i]["cell"][8];
						dando5=val[i]["cell"][18];
						 
						
					   if(val[i]["cell"][10]==null) nhanvien_control=1; 
					  else nhanvien_control=0;
                        setval('#nhanvien','#nhanvien1','#nhan_vien',val[i]["cell"][10]);
                        setval('#chuandoan','#chuandoan1','#nhan_vien1',val[i]["cell"][15]);
						 setval('#code0','#code0_1','#code0_grid',val[i]["cell"][6]);
						
						 if(val[i]["cell"][6]==""){
								$("#noidung_code0").text(''); 
								$("#ketluan_code0").text('');
								
							 }
						 setval('#code1','#code1_1','#code1_grid',val[i]["cell"][7]);
						 if(val[i]["cell"][7]==""){
								$("#noidung_code1").text(''); 
								$("#ketluan_code1").text('');
								$("#code1_ketluan_bottom").val('');
							 }
						 setval('#code2','#code2_1','#code2_grid',val[i]["cell"][8]);
						 if(val[i]["cell"][8]==""){
								$("#noidung_code2").text(''); 
								$("#ketluan_code2").text('');
								$("#code2_ketluan_bottom").val('');
							 }
						 setval('#code3','#code3_1','#code3_grid',val[i]["cell"][18]);
						 if(val[i]["cell"][18]==""){
								$("#noidung_code3").text(''); 
								$("#ketluan_code3").text('');
								$("#code3_ketluan_bottom").val('');
							 }
						 setval('#code4','#code4_1','#code4_grid',val[i]["cell"][19]);
						 if(val[i]["cell"][19]==""){
								$("#noidung_code4").text(''); 
								$("#ketluan_code4").text('');
								$("#code4_ketluan_bottom").val('');
							 }
						 setval('#code5','#code5_1','#code5_grid',val[i]["cell"][20]);
						 if(val[i]["cell"][20]==""){
								$("#noidung_code5").text(''); 
								$("#ketluan_code5").text('');
								$("#code5_ketluan_bottom").val('');
							 }
						code0=val[i]["cell"][6];
						code1=val[i]["cell"][7];
						code2=val[i]["cell"][8];
						code3=val[i]["cell"][18];
						code4=val[i]["cell"][19];
						code5=val[i]["cell"][20];
                        nhanvien4=val[i]["cell"][10];
                        chuandoan4=val[i]["cell"][15];
						id_=val[i]["cell"][22];
                        
						id_loaikham=val[i]["cell"][3];
						$("#center_col div").html(val[i]["cell"][1]); 	
						$("#edit_by").show();
						 _id_trangthai=tam1_cls[9]; 
						 
                         _kham = tam;
                         _id_luotkham2=tam1_cls[5];
                         //alert(_id_luotkham2);
                        // $(".zodi").show();
                        $("#giothuchien").text(val[i]["cell"][16]);                      
                        $("#giohoantat").text(val[i]["cell"][17]);  
						 $("#id_").val(val[i]["cell"][22]);  
						$("#ketluan_bottom").val(val[i]["cell"][21]);
						//alert(val[i]["cell"][21]);
						
						ketluan_bottom_temp=val[i]["cell"][21];	
						if(val[i]["cell"][23]==null) val[i]["cell"][23]='';
						if(val[i]["cell"][24]==null) val[i]["cell"][24]='';
						if(val[i]["cell"][25]==null) val[i]["cell"][25]='';
						if(val[i]["cell"][26]==null) val[i]["cell"][26]='';
						if(val[i]["cell"][27]==null) val[i]["cell"][27]='';
						if(val[i]["cell"][28]==null) val[i]["cell"][28]='';
						id_15=val[i]["cell"][23];
						
						
						id_16=val[i]["cell"][24];
						id_17=val[i]["cell"][25];
						id_18=val[i]["cell"][26];
						id_19=val[i]["cell"][27];
						id_20=val[i]["cell"][28];
						
					
						
                    if(_id_trangthai=="DangCho"){
                    	$("#id_trangthai").html("Đang chờ").css("background-color","#3F3"); 
                    		 $('#sua').button( {disabled:true});
                    		 $('#luu').button( {disabled:false});
                                 $('#xoaketluan').button( {disabled:false});
                          $('#xoaloikhuyen').button( {disabled:false});
                           $('#ketluan').attr("disabled",false);
                            $('#mota').attr("disabled",false);
                             $('#loikhuyen').attr("disabled",false);
                              $('#xoamota').button( {disabled:false});
                               $('#open_template').button( {disabled:false});
                               $( "#template_title" ).attr("disabled",false);
                               $('#dathuchien').button( {disabled:false});
                               $('.template_title_button').button( {disabled:false});
                         		$('.chuandoan_button').button( {disabled:false});
                         		$('.nhanvien_button').button( {disabled:false});
                         		$( "#nhanvien" ).attr("disabled",false);
                         		  $( "#chuandoan" ).attr("disabled",false);
                         		  $('#add_template').button( {disabled:false});
                         		  $('#hoantat').button( {disabled:false});
                         		  setval('#nhanvien','#nhanvien1','#nhan_vien',<?=$_SESSION['user']['id_user']?>);
                         		  setval('#chuandoan','#chuandoan1','#nhan_vien1',<?=$_SESSION['user']['id_user']?>);
                         		  
                    }
                    else if(_id_trangthai=="DaThucHien"){
						$('#xoa_code0,#xoa_code1,#xoa_code2,#xoa_code3,#xoa_code4,#xoa_code5').hide();
						$('#code0,#code1,#code2,#code3,#code4,#code5').attr("disabled", "disabled");
						 $( "#ketluan_bottom,#id_" ).attr("disabled",true);
						$('.code0_button,.code1_button,.code2_button,.code3_button,.code4_button,.code5_button').button( {disabled:true});
                    	$("#id_trangthai").html("Đã thực hiện").css("background-color","#FF4848");
                    	 $('#sua').button( {disabled:false});
                    	  $('#luu').button( {disabled:true});
                             $('#dathuchien').button( {disabled:true});
                         		$('.chuandoan_button').button( {disabled:false});
                         		$('.nhanvien_button').button( {disabled:true});
                         		
                         		$( "#nhanvien" ).attr("disabled",true);
                         		$('#hoantat').button( {disabled:false});
                         		
                         		$( "#chuandoan" ).attr("disabled",false);
							
                         		 
                         		window.oper="dathuchien1";
						 setval('#chuandoan','#chuandoan1','#nhan_vien1',<?=$_SESSION['user']['id_user']?>);
                    }
                    else if(_id_trangthai=="DangKham"){
						$('#xoa_code0,#xoa_code1,#xoa_code2,#xoa_code3,#xoa_code4,#xoa_code5').show();
						$('#code0,#code1,#code2,#code3,#code4,#code5').attr("disabled", false);
						 $( "#ketluan_bottom,#id_" ).attr("disabled",false);
						$('.code0_button,.code1_button,.code2_button,.code3_button,.code4_button,.code5_button').button( {disabled:false});
                    	$("#id_trangthai").html("Đang khám").css("background-color","#FF6");
                    		 $('#sua').button( {disabled:true});
                    		 $('#luu').button( {disabled:false});
                            
                              $('#dathuchien').button( {disabled:false});                      
                         		$('.chuandoan_button').button( {disabled:false});
                         		$('.nhanvien_button').button( {disabled:false});
                         		$( "#nhanvien" ).attr("disabled",false);
                         		  $( "#chuandoan" ).attr("disabled",false); 
                         		  $('#hoantat').button( {disabled:false});
                         		  $( "#chuandoan" ).attr("disabled",false);
								
                         	
                         		  setval('#nhanvien','#nhanvien1','#nhan_vien',<?=$_SESSION['user']['id_user']?>);
                         		  setval('#chuandoan','#chuandoan1','#nhan_vien1',<?=$_SESSION['user']['id_user']?>);
								 window.oper="dangkham1";
                    }
                    else if(_id_trangthai=="Xong"){
						$('#xoa_code0,#xoa_code1,#xoa_code2,#xoa_code3,#xoa_code4,#xoa_code5').hide();
						$('#code0,#code1,#code2,#code3,#code4,#code5').attr("disabled", "disabled");
						 $( "#ketluan_bottom,#id_" ).attr("disabled",true);
						$('.code0_button,.code1_button,.code2_button,.code3_button,.code4_button,.code5_button').button( {disabled:true});
                    	$("#id_trangthai").html("Đã hoàn tất").css("background-color","Transparent");;
                    	 $('#sua').button( {disabled:false});
                    	  $('#luu').button( {disabled:true});
                          
                             $('#dathuchien').button( {disabled:true});
                              $('#hoantat').button( {disabled:true});
                            
                         		$('.chuandoan_button').button( {disabled:true});
                         		$('.nhanvien_button').button( {disabled:true});
                         		 $( "#nhanvien" ).attr("disabled",true);
                         		  $( "#chuandoan" ).attr("disabled",true);
                         		
                         		   
                         		 window.oper="hoantat1";
                    }
                
                    $("#giohentra").html(tam1_cls[11]);
                    		 			 
						if(val[i]["cell"][12]!=null)
						{
								$("#nguoisua").text(val[i]["cell"][12]);
								//var khongbiet=val[i]["cell"][12];
								//$("#ID_NguoiSua").text(khongbiet);
								$("#ngaygiosua").text(val[i]["cell"][13]);
						}
						else $("#edit_by").hide();					
					} 
				}
				////
				var tamthoilathe= stt.split(";");
				for (i = 0; i <tamthoilathe.length; i++) 
				{
					check=tamthoilathe[i].split(":");
					if($("#nguoisua").text()==check[0]) //alert(check[0]);
				 		$("#nguoisua").text(check[1]);
					
				}
				
				////////
								 
				
				window.search_string=$(this).attr("alt");
				load_image($(this).attr("alt"));	
							
		});
		 
	});
	
}
function resize_control(){
	//$(window).height()thongtin_chidinh thongtin_tongthe
	//alert($(".thongtin_tongthe").width())
	$(".thongtin_chidinh").css("width",$(window).width()-$(".thongtin_tongthe").width()-10+"px");
	$("#left_col").css("width",$(window).width()/2-13+"px");
	//$("#center_col").css("width",$(window).width()/3-205+"px");
	$("#right_col").css("width",$(window).width()/2+3+"px");
	$("#images_viewer").css("height",$(window).height()/2+"px");
}

function load_image(search_string){	   
	  _folder_name=$.ajax({url: 'resource.php?module=web_services&function=get_folder_name&action=index&id_form=111&id_loaikham='+id_loaikham, async: false, success: function(data, result) { 			           		 
      }}).responseText;	
	  _folder_name=$.trim(_folder_name)+"//"+ma_benhnhan;
	  //alert(_folder_name);
	  $("#images_viewer").attr("src","resource.php?module=images_control&view=non_dicom_viewer&id_form=61&tenthumuc="+_folder_name+"&search_string="+search_string);   
	
}
function load_select(){
window.stt = $.ajax({url: 'resource.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=2&tables=DM_NhanVien&id=ID_NhanVien&name=NickName', async: false, success: function(data, result) {if (!result) alert('Không load được danh mục phòng ban');}}).responseText;	

}
function reload(){
	$('#nhanvien').combobox('reload');
	$('#chuandoan').combobox('reload');
}

function getCount2(word, arr) {
    var i = arr.length, // var to loop over
        j = 0; // number of hits
    while (i) if (arr[--i] === word) ++j; // count occurance
    return j;
}  

$( "#dialog-form" ).dialog({
            autoOpen: false,
            height: ($(window).height()/100 * parseFloat(25)).toFixed(0),
            width: ($(window).width()/100 * parseFloat(40)).toFixed(0),
            modal: true,
             open: function(event,ui){
                $( "#dialog-form" ).dialog( "option", "height", ($(window).height()/100 * parseFloat(25)).toFixed(0) );
                $( "#dialog-form" ).dialog( "option", "width", ($(window).width()/100 * parseFloat(35)).toFixed(0) );
                //$( "#dialog-form" ).getWindow().setBackgroundDrawable(new ColorDrawable(Color.argb(50, 255, 255, 255))); 
               
            },
            buttons: {
           	}
            });
$( "#dialog-form2" ).dialog({
            autoOpen: false,
            height: ($(window).height()/100 * parseFloat(20)).toFixed(0),
            width: ($(window).width()/100 * parseFloat(20)).toFixed(0),
            modal: true,
             open: function(event,ui){
                $( "#dialog-form2" ).dialog( "option", "height", ($(window).height()/100 * parseFloat(22)).toFixed(0) );
                $( "#dialog-form2" ).dialog( "option", "width", ($(window).width()/100 * parseFloat(20)).toFixed(0) );
                 
                
            },
            buttons: {
           	}
            });
function create_nhanvien(elem, datalocal) {
        datalocal = jQuery.parseJSON(datalocal);
        $(elem).jqGrid({
            datastr: datalocal,
            datatype: "jsonstring",
            colNames: ['Tên', 'Họ và tên', 'Bộ phận'],
            colModel: [
                {name: 'nickname', index: 'nickname', hidden: false},
                {name: 'hovaten', index: 'hovaten', hidden: false},
                {name: 'Bophan', index: 'Bophan', hidden: false},
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
    function create_bacsi(elem, datalocal) {
        datalocal = jQuery.parseJSON(datalocal);
        $(elem).jqGrid({
            datastr: datalocal,
            datatype: "jsonstring",
            colNames: ['Tên', 'Họ và tên'],
            colModel: [
                {name: 'nickname', index: 'nickname', hidden: false},
                {name: 'hovaten', index: 'hovaten', hidden: false},
                
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
	
	function create_code0(elem, datalocal) {
        datalocal = jQuery.parseJSON(datalocal);
        $(elem).jqGrid({
            datastr: datalocal,
            datatype: "jsonstring",
            colNames: ['Tên Template', 'Tiếng Anh','Tiếng Việt'],
            colModel: [
                {name: 'TenTemplate', index: 'TenTemplate', hidden: false},
                {name: 'NoiDung', index: 'NoiDung', hidden: false},
				 {name: 'KetLuan', index: 'KetLuan', hidden: false},
                
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
				 var rowData = $('#code0_grid').getRowData(id);
				 $("#noidung_code0").text(rowData["NoiDung"]);
				 $("#ketluan_code0").text(rowData["KetLuan"]);
				  
            },
            ondblClickRow: function(id, rowIndex, columnIndex) {
            },
            loadComplete: function(data) {

                grid_filter_enter(elem);
            
				//window.nhanvien2_complete=1;


            },
        });
        $(elem).jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});
        $(elem).jqGrid('bindKeys', {});
    }
	
	 function create_code1(elem, datalocal) {
        datalocal = jQuery.parseJSON(datalocal);
        $(elem).jqGrid({
            datastr: datalocal,
            datatype: "jsonstring",
            colNames: ['Tên Template', 'Tiếng Anh','Tiếng Việt'],
            colModel: [
                {name: 'TenTemplate', index: 'TenTemplate', hidden: false},
                {name: 'NoiDung', index: 'NoiDung', hidden: false},
				 {name: 'KetLuan', index: 'KetLuan', hidden: false},
                
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
				 var rowData = $('#code1_grid').getRowData(id);
				 $("#noidung_code1").text(rowData["NoiDung"]);
				 $("#ketluan_code1").text(rowData["KetLuan"]);
				 $("#code1_ketluan_bottom").val(rowData["KetLuan"]);
				 congdon_ketluan();
				  
            },
            ondblClickRow: function(id, rowIndex, columnIndex) {
            },
            loadComplete: function(data) {

                grid_filter_enter(elem);
            
				//window.nhanvien2_complete=1;


            },
        });
        $(elem).jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});
        $(elem).jqGrid('bindKeys', {});
    }
	
	 function create_code2(elem, datalocal) {
        datalocal = jQuery.parseJSON(datalocal);
        $(elem).jqGrid({
            datastr: datalocal,
            datatype: "jsonstring",
            colNames: ['Tên Template', 'Tiếng Anh','Tiếng Việt'],
            colModel: [
                {name: 'TenTemplate', index: 'TenTemplate', hidden: false},
                {name: 'NoiDung', index: 'NoiDung', hidden: false},
				 {name: 'KetLuan', index: 'KetLuan', hidden: false},
                
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
				 var rowData = $('#code2_grid').getRowData(id);
				 $("#noidung_code2").text(rowData["NoiDung"]);
				  $("#ketluan_code2").text(rowData["KetLuan"]);
				  $("#code2_ketluan_bottom").val(rowData["KetLuan"]);
				  congdon_ketluan();
				  
            },
            ondblClickRow: function(id, rowIndex, columnIndex) {
            },
            loadComplete: function(data) {

                grid_filter_enter(elem);
            
				//window.nhanvien2_complete=1;


            },
        });
        $(elem).jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});
        $(elem).jqGrid('bindKeys', {});
    }
	
	function create_code3(elem, datalocal) {
        datalocal = jQuery.parseJSON(datalocal);
        $(elem).jqGrid({
            datastr: datalocal,
            datatype: "jsonstring",
            colNames: ['Tên Template', 'Tiếng Anh','Tiếng Việt'],
            colModel: [
                {name: 'TenTemplate', index: 'TenTemplate', hidden: false},
                {name: 'NoiDung', index: 'NoiDung', hidden: false},
				 {name: 'KetLuan', index: 'KetLuan', hidden: false},
                
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
				 var rowData = $('#code3_grid').getRowData(id);
				 $("#noidung_code3").text(rowData["NoiDung"]);
				  $("#ketluan_code3").text(rowData["KetLuan"]);
				  $("#code3_ketluan_bottom").val(rowData["KetLuan"]);
				  congdon_ketluan();
				  
            },
            ondblClickRow: function(id, rowIndex, columnIndex) {
            },
            loadComplete: function(data) {

                grid_filter_enter(elem);
            
				//window.nhanvien2_complete=1;


            },
        });
        $(elem).jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});
        $(elem).jqGrid('bindKeys', {});
    }
	
	function create_code4(elem, datalocal) {
        datalocal = jQuery.parseJSON(datalocal);
        $(elem).jqGrid({
            datastr: datalocal,
            datatype: "jsonstring",
            colNames: ['Tên Template', 'Tiếng Anh','Tiếng Việt'],
            colModel: [
                {name: 'TenTemplate', index: 'TenTemplate', hidden: false},
                {name: 'NoiDung', index: 'NoiDung', hidden: false},
				 {name: 'KetLuan', index: 'KetLuan', hidden: false},
                
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
				 var rowData = $('#code4_grid').getRowData(id);
				 $("#noidung_code4").text(rowData["NoiDung"]);
				  $("#ketluan_code4").text(rowData["KetLuan"]);
				  $("#code4_ketluan_bottom").val(rowData["KetLuan"]);
				  congdon_ketluan();
				  
            },
            ondblClickRow: function(id, rowIndex, columnIndex) {
            },
            loadComplete: function(data) {

                grid_filter_enter(elem);
            
				//window.nhanvien2_complete=1;


            },
        });
        $(elem).jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});
        $(elem).jqGrid('bindKeys', {});
    }
	
	function create_code5(elem, datalocal) {
        datalocal = jQuery.parseJSON(datalocal);
        $(elem).jqGrid({
            datastr: datalocal,
            datatype: "jsonstring",
            colNames: ['Tên Template', 'Tiếng Anh','Tiếng Việt'],
            colModel: [
                {name: 'TenTemplate', index: 'TenTemplate', hidden: false},
                {name: 'NoiDung', index: 'NoiDung', hidden: false},
				 {name: 'KetLuan', index: 'KetLuan', hidden: false},
                
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
				 var rowData = $('#code5_grid').getRowData(id);
				 $("#noidung_code5").text(rowData["NoiDung"]);
				  $("#ketluan_code5").text(rowData["KetLuan"]);
				  $("#code5_ketluan_bottom").val(rowData["KetLuan"]);
				  congdon_ketluan();
            },
            ondblClickRow: function(id, rowIndex, columnIndex) {
            },
            loadComplete: function(data) {

                grid_filter_enter(elem);
            
				//window.nhanvien2_complete=1;


            },
        });
        $(elem).jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});
        $(elem).jqGrid('bindKeys', {});
    }
	


function load_complete(){
	if((nhanvien1_complete==0)||(nhanvien2_complete==0)||(ma_benhnhan==0)){
		setTimeout(load_complete,50);
		return;
	}

	navigator_load("end","first");
	
}

function congdon_ketluan(){
	str='';
	if($('#ketluan_code1').text()!='')
		str=str+$('#ketluan_code1').text()+'\n';
	if($('#ketluan_code2').text()!='')
		str=str+$('#ketluan_code2').text()+'\n';
	if($('#ketluan_code3').text()!='')
		str=str+$('#ketluan_code3').text()+'\n';
	if($('#ketluan_code4').text()!='')
		str=str+$('#ketluan_code4').text()+'\n';
	if($('#ketluan_code5').text()!='')
		str=str+$('#ketluan_code5').text();

	$('#ketluan_bottom').val(str);
	}

function disable_input(){
		$('#xoa_code0,#xoa_code1,#xoa_code2,#xoa_code3,#xoa_code4,#xoa_code5').hide();
		$('#code0,#code1,#code2,#code3,#code4,#code5').attr("disabled", "disabled");
		$( "#ketluan_bottom,#id_" ).attr("disabled",true);
		$('.code0_button,.code1_button,.code2_button,.code3_button,.code4_button,.code5_button').button( {disabled:true});
		$('.nhanvien_button').button( {disabled:true});
		$( "#nhanvien" ).attr("disabled",true);
		$('.chuandoan_button').button( {disabled:true});
		$( "#chuandoan" ).attr("disabled",true);			
		$("#sua").show();
		$('#boqua').hide();
		$('#luu').button( {disabled:true});          		 
	}
	$("#file").change(function(e) {	 
			imagesSelected(this.files);					
	});
	function imagesSelected(myFiles) {
		  var i,f;
		 // alert(myFiles.length) 
		 for(i = 0; i < myFiles.length;i++){
			check_file_type('application/pdf|',myFiles[i]["type"]); 		  
		 } 
		 console.log(window.file_type)
		 if(window.file_type==false){
			   submit_ecg("pdf_ecg");	
		 }else{
			 tooltip_message("Không đúng định dạng file.");
		 } 		 
	}
	function ecg_pdf_action(){
		if($("#loaiecg :selected").val()==5){							 
			dialog_main("Vui lòng chọn trang để tạo pdf", "250px", "110px", "675435389878a7677", ""); 
			$(".modal675435389878a7677").append('<div align="center"><input type="text" style="width:99%" id="taotrang" value="1.2.3.4.5.6.7.8.9.10"><br><a href="#" id="thucthien_taotrang" class=" ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="margin-left:0px;  margin-top:5px; ">Thực hiện<span class="ui-icon ui-icon-refresh"></span></a></div>');
			$("#thucthien_taotrang").button();
			number_textbox("#taotrang");
			$("#thucthien_taotrang").click(function(e) {
				$("#sotrang").val($("#taotrang").val());
				$(".modal675435389878a7677").dialog( "close" );		
				submit_ecg("edit_pdf_ecg");						                 
            });
		}else{
			  submit_ecg("edit_pdf_ecg");
		}
	}
	function submit_ecg(action){				
			$("#action").val(action);			
			ngaytam=$('#ngaychidinh').val().split(" ")
			$('#ngayhoantat').val(ngaytam[1]);
			//alert($("#default_name").val());
			$('#chukybacsy').val($('#chuandoan1').val());	
			$('#chukyktv').val($('#nhanvien1').val());				
			$("#ketluan1").val($("#ketluan_bottom").val().replace(/\n/g, '<br>'));	
			$("#tenbn").val($("#panel_tenbn").text());
			$("#mabn").val($("#panel_mabn").text());	
			$("#loai_ecg").val($("#loaiecg :selected").val());
			/*$("#mota1").val($("#mota").val().replace(/\n/g, '<br>'));
			$("#ketluan1").val($("#ketluan").val().replace(/\n/g, '<br>'));	
			$('.anh').val("");
			ngaytam=$('#ngaychidinh').val().split(" ")
			$('#ngayhoantat').val(ngaytam[1]);		
			$('#chukybacsy').val($('#chuandoan1').val());	
			$('#chukyktv').val($('#nhanvien1').val());		
			$('#chucdanhktv').val(window.viettat);	
			$('#chucdanhbacsy').val(window.viettat2);	
			$('#tenbacsy').val(window.tenbacsy);	
			$('#tenktv').val(window.tenktv);	*/					
			$('#tenthumuc').val("ECG//KETQUA//"+ma_benhnhan);				 	
			//$('#valuesubmit').button( {disabled:true});
			var _tam=$('#tenthumuc').val().split("//");		
			$.getJSON( 'file_manager/php/connector.php?profile=tcd&answer=42&cmd=open&target=f1_XA&init=1&tree=1&_=1386694616800&tenthumuc='+$('#tenthumuc').val(), 
				function( data ){
						if (data["error"]=="errConf,errNoVolumes"){					 				 		 
							 $.get( 'file_manager/php/connector.php?profile=tcd&answer=42&tenthumuc='+_tam[0]+"//"+_tam[1]+'&cmd=mkdir&name='+_tam[2]+'&target=f1_XA&_=1387301727041', 
								function( data ){	
								 edit_ecg()						 			 
							 });
						}else{
							  edit_ecg();
						}
			});	
			
			
			//edit_tcd = $.ajax({url: 'file_manager/php/connector.php?answer=42&cmd=open&target=f1_XA&init=1&tree=1&_=1386694616800&action=edit_tcd&tenthumuc='+$("#tenthumuc").val()+'&filename='+$("#default_name").val()+"&mota="+_mota+"&ketluan="+_ketluan, async: false, success: function(data, result) {if (!result) alert(result);}}).responseText;
		};	
		function edit_ecg(){	
			tooltip_message("Đang xử lý dữ liệu!"); 
			e=setTimeout(function(){    
						 var formData = new FormData($('form')[0]); // okay I just saw the form, assuming there is only one form on the page			
						_tcd=$.ajax({
							url: 'file_manager/php/connector.php?answer=42&cmd=open&target=f1_XA&init=1&tree=1&_=1386694616800&hienmaloi=3',  //Server script to process data
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
									load_pdf();		           		 
							 }}).responseText;	
						   
						 
			},2000);		
		}	
function load_pdf(){
	 //alert(encode64("89045_1254492_1706140825.pdf"))
		//$("#mht").attr("src","http://192.168.1.200:81/giaidoan2/file_manager/php/tmp_images/89045_1254492_1706140825.pdf");
		//$("#mht").attr("src","http://192.168.1.200:81/giaidoan2/ file_manager/php/connector.php?profile=tcd&tenthumuc=TCD//KETQUA//"+ma_benhnhan+"&answer=42&cmd=file&target=f1_"+encode64($("#default_name").val()));
		//$("#mht").attr("src","http://192.168.1.200:81/giaidoan2/file_manager/php/connector.php?profile=tcd&tenthumuc=ECG//KETQUA//89045"+"&answer=42&cmd=file&target=f1_ODkwNDVfMTI1NDQ5Ml8xNzA2MTQwODI1LnBkZg");
				
		
	 _tam=$("#default_name").val();		 
	 _link="resource.php?module=report&view=<?=$_GET["module"]?>&action=ecg_new&file="+_tam;
	// alert(_link)
	 $.get( 'file_manager/php/connector.php?action=ecg_pdf&profile=tcd&tenthumuc=ECG//KETQUA//'+ma_benhnhan+'&answer=42&cmd=file&target=f1_'+encode64(_tam)+'&target1=f1_'+encode64("raw"+_tam)+"&default_name="+_tam, 
	 function( data ){	 	 
		$("#mht").attr("src",_link);		 
	 }); 	 	
	 $("#phongto").unbind("click");
	 $("#phongto").bind("click",function(e){	
		 window.open(_link);
	 });
				
				
																																										  
}

</script>
 
 
