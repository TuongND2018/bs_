
<?php
	if(isset($_GET["idbenhnhan"])){
		echo "<script type='text/javascript'>";
		echo "window.idbenhnhan=".$_GET["idbenhnhan"];
		echo "</script>";
		
	}else{
	if($_SESSION["ThongTinBenhNhan"]["ID"]==""){
		echo "<script type='text/javascript'>";
			echo "parent.postMessage('hosobenhnhantrong;' , '*')";
		
		echo "</script>";
		return;
	}else{
		echo "<script type='text/javascript'>";
		echo "window.idbenhnhan=".$_SESSION["ThongTinBenhNhan"]["ID"];
		echo "</script>";
	}
	}


	
?>
 
 
<style>
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
		padding-top:2px;		
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
	
</style>
<body>
 <div class="top_form ui-widget-content" >
 	<div style="padding:2px 0px;" class="thongtin_tongthe">
 		<div class="patient_info"></div>        
    </div>
    <div class="thongtin_chidinh" >
 		<div class="form_row">
        	<label style="width:90px;text-align:right">Người chỉ định:</label><input lang='luu' name="nguoi_chidinh"style="width:100px" type="text" id="nguoi_chidinh"disabled>
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
			<input id="ngaychidinh" name="ngaychidinh"lang='luu'style="width:100px;margin-left:90px" type="text" id="ngaychidinh" disabled>
			<label id="giothuchien"  name="giothuchien" type="text" lang='luu'class="thongtin_thai zodi"style="width: 90px;margin-left: 10px;"></label>
            <a href="#" id="dathuchien" class="	 ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="margin-left:0px;  margin-bottom:1px; ">Đã thực hiện<span class="ui-icon ui-icon-play"></span></a> 
     		<label id="giohoantat"  name="giohoantat" type="text" lang='luu' class="thongtin_thai zodi"style="width: 90px;margin-left: 10px;"></label>
     		<a href="#" id="hoantat" class=" ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="margin-left:0px;width:80px;  margin-bottom:1px; ">Hoàn tất<span class="ui-icon ui-icon-check"></span></a>   
        </div>        
    </div>
    <div class="thongtin_luotkham" id="left_col" style="width: 604px;">   
    	<div class="thongtin_luotkham_scroll" style="display:none"></div>
    	<span id="caption" style="font-size:17px;color:#09C;margin-left:5px;margin-top:5px; font-weight:bold">Số ca:</span>
    	<br><br>
            <span class="navigator" >
                <button id="first">bắt đầu</button>
                <button id="prev">tới</button>
                <span class="navigator_title"></span>
                <button id="next">lui</button>
                <button id="last">kết thúc</button> 
            </span>
                 
    </div>
   
    <div class="thongtin_luotkham" id="right_col">  	 
    	<div style="margin-top: 4px;">
    	<label id="id_trangthai"class="thongtin_thai" lang="luu" type="text" name="id_trangthai"style="color:red;font-size:14px" hidden></label> 
    	<a href="#" id="luu" class=" ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="margin-left:0px;width:90px;  margin-bottom:1px;float: right; ">Lưu<span class="ui-icon ui-icon-disk"></span></a> 
    	<a href="#" id="sua" class=" ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="margin-left:0px;width:92px;  margin-bottom:1px;float: right; ">Sửa<span class="ui-icon ui-icon-pencil"></span></a>
    	<a href="#" id="boqua" class=" ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="margin-left:0px;width:92px;  margin-bottom:1px;float: right;">Bỏ qua<span class="ui-icon ui-icon-close"></span></a>	
    	<a href="#" id="chen" class=" ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="margin-left:0px;width:90px;  margin-bottom:1px;float: right;">Chèn<span class="ui-icon ui-icon-pencil"></span></a>	 
    	<a href="#" id="laylaidulieu" class=" ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="margin-left:0px;width:100px;  margin-bottom:1px;float: right;">Lấy lại dữ liệu<span class="ui-icon ui-icon-close"></span></a>	  	
    	</div>
    	<div style="margin-top: 1px;float: right;">
    	
    	<a href="#" id="intiengviet" class=" ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="margin-left:0px; width:90px; margin-bottom:1px;float: right; ">In tiếng việt<span class="ui-icon ui-icon-print"></span></a> 	
    	<a href="#" id="intienganh" class=" ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="margin-left:0px; width:90px; margin-bottom:1px;float: right; ">In tiếng anh<span class="ui-icon ui-icon-print"></span></a> 
    	<span id="In_CoChuKy" style="float:right;margin:5px 0px 0 0;text-align:center;width:118px">
                    	<input type="checkbox"  checked />
            			<label>In có chữ ký</label>
        </span>
        <a href="#" id="xoa" class=" ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="margin-left:0px; width:100px; margin-bottom:1px;float: right; ">Xóa<span class="ui-icon ui-icon-close"></span></a> 
    	
    	<label id=""style="margin-right: 20px;color:green;font-size:14px">Đã hoàn tất hồ sơ</label>
    	<input type="checkbox" style="float: left;">
    	</div>
    	
    </div>
   
 </div> 
 
 <div id="panel_main">    

                
        <div class="ui-widget-content  thongtin_thai ui-layout-center " id="inner" >
            <div class="ui-layout-north thongtin_thai">
            	<label style="text-align:left;font-size:15px;color:red">Mô tả:</label>
                <textarea lang='luu'id="mota" name="mota"style="font-size:14px!important" ></textarea>
            	
            </div>
            <div class="ui-layout-center thongtin_thai"> 
            	<label style="text-align:left;font-size:15px;color:red">Kết luận:</label>
    	 		
                <textarea lang='luu'id="ketluan" name="ketluan"style="font-size:14px!important" ></textarea>

            </div>
            <div class="ui-layout-south thongtin_thai">
            	<label style="text-align:left;font-size:15px;color:red">Cách điều trị:</label>
            	<span class="custom-combobox">
                    <input id="cach_dieu_tri" name="cach_dieu_tri"  type="text" style="width:200px;">
            </span> 
            <input id="cach_dieu_tri1"  name="cach_dieu_tri1" type="text" lang='luu' style="display:none" >
                <textarea id="cachdieutri"name="cachdieutri" lang='luu'style="font-size:14px!important" ></textarea>
            </div>
        </div>
        <div class="ui-widget-content ui-layout-east" > 
            <label style="text-align:left;font-size:15px;color:red">Tổng hợp:</label>
            <textarea id="tonghop"name="tonghop" lang='luu'style="font-size:15px!important" readonly ></textarea>

        </div>          
	</div>
	
</body>
</html>
<script type="text/javascript">
var _id_luotkham=[];
var _id_loaikham=[];
var _id_luotkham_non_unique=[];

var data_luotkham="";
var navigator_count=0,sub_navigator_count=0;
var _folder_name;
var ma_benhnhan=0;
var id_loaikham;
var grid_click_status=false;

var _id_trangthai;
var _kham;
var trangthai;
var idbenhnhan;
var nhanvien_control;
var tenloaikham;

$(document).ready(function() {
	$("#intiengviet").click(function(e){
		if($('#In_CoChuKy input:checkbox').is( ":checked" )){var chuky=1;}else{var chuky=0;}	
		kiemtranull="0";
		mota=$("#mota").val();
		ketluan=$("#ketluan").val();
		cachdieutri=$("#cachdieutri").val();
		if(mota=="" && ketluan=="" && cachdieutri==""){
			kiemtranull="1";
		}
		$.cookie("in_status", "print_preview"); 
		dialog_report("Xem trước khi in",90,90,"u78787878975f","resource.php?module=report&view=<?=$modules?>&action=medicalreport&header=top&idbenhnhan="+idbenhnhan+"&id_luotkham="+id_luotkham2+"&ngaygio="+$("#ngaychidinh").val()+"&kiemtranull="+kiemtranull+"&type=report&id_form=10&chuky="+chuky,'MedicalReportVN');
		$(".frame_u78787878975f").css("width","793px");
		
	});
	$("#intienganh").click(function(e){	
		if($('#In_CoChuKy input:checkbox').is( ":checked" )){var chuky=1;}else{var chuky=0;}
		kiemtranull="0";
		mota=$("#mota").val();
		ketluan=$("#ketluan").val();
		cachdieutri=$("#cachdieutri").val();
		if(mota=="" && ketluan=="" && cachdieutri==""){
			kiemtranull="1";
		}
		$.cookie("in_status", "print_preview"); 
		dialog_report("Xem trước khi in",90,90,"u78787878975f","resource.php?module=report&view=<?=$modules?>&action=medicalreport2&header=top&idbenhnhan="+idbenhnhan+"&id_luotkham="+id_luotkham2+"&ngaygio="+$("#ngaychidinh").val()+"&kiemtranull="+kiemtranull+"&type=report&id_form=10&chuky="+chuky,'MedicalReportVN');
		$(".frame_u78787878975f").css("width","793px");
		
	});
	window.nhanvien_complete=0;
	window.nhanvien1_complete=0;
	window.nhanvien2_complete=0;	
		create_combobox('#nhanvien', '#nhanvien1', ".nhan_vien", "#nhan_vien", create_nhanvien, 500, 400, 'Người thực hiện', 'data_nhanvien');
	create_combobox('#chuandoan', '#chuandoan1', ".nhan_vien1", "#nhan_vien1", create_bacsi, 500, 400, 'Người thực hiện', 'data_bacsi');
	create_combobox('#cach_dieu_tri', '#cach_dieu_tri1', ".nhan_vien2", "#nhan_vien2", create_cachdieutri, 500, 400, 'Người thực hiện', 'data_cachdieutri');
	$('#sua').button();
	$('#luu').button();
	$('#intiengviet').button();
	$('#intienganh').button();
	$('#xoa').button();
	$('#chen').button();
	$('#laylaidulieu').button();
	$('#dong').button();
	$('#dathuchien').button();
	$('#hoantat').button();
	$('#boqua').button();
	$('#boqua').hide();
	
	load_select();
	create_grid();	
	$.get( "resource.php?module=web_services&function=create_panel1&id_benhnhan="+idbenhnhan+"&action=index", function( data ) {
	  $( ".patient_info" ).html( data );
	  $( ".patient_info" ).css("width", $( "#patient_info" ).width()+"css");	
	  ma_benhnhan=$('.profile_container:nth-child(4) .texts').text() ;  

	});
        
	$("#panel_main").css("height",$(window).height()-151+"px");			 
	$("#panel_main").fadeIn(1000); 
	create_layout();	
	resize_control();
	$.getJSON( "resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_loaisieuam&idbenhnhan="+idbenhnhan, 
		function( data ) {
			data_luotkham=data;

	 	//alertObject(data);
		var tam1_cls="";
		$.each( data, function( key, val ) {		 
			for(i=0;i<val.length;i++){
				//tam+=" ; "+val[i]["id"];
				var tam1_cls=val[i]["cell"];
				//tam_cls+= '<div id="cls_'+val[i]["id"]+'">'+tam1_cls[0]+"<br \>" +tam1_cls[5]+'</div>';
				_id_luotkham.push(tam1_cls[0]);				
				_id_loaikham.push(tam1_cls[3]);
				_id_luotkham_non_unique.push(tam1_cls[5]);
				
				
			}
			//_id_luotkham=$.unique(_id_luotkham).reverse();
			
			_id_luotkham_non_unique=_id_luotkham_non_unique.reverse();
			_id_loaikham=_id_loaikham.reverse();
			//_id_luotkham=$.unique(_id_luotkham);
			load_complete();
			//_id_loaikham=$.unique(_id_loaikham);
			//navigator_load("end","first");			
			// alert(_id_luotkham);		
			//create_combobox('#template_title', '', ".DM_template", "#DM_template", create_DM_template_grid, 500,400, 'Người thực hiện', 'data_DMtemplate&hienmaloi=123&loaikham='+id_loaikham);					 
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

	function test(){
		_id_luotkham.splice(0, _id_luotkham.length-1)
		_id_loaikham.splice(0, _id_loaikham.length-1)
		_id_luotkham_non_unique.splice(0, _id_luotkham_non_unique.length-1)
		
		delete tong_luotkham;
		
	$.getJSON( "resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_loaisieuam&idbenhnhan="+idbenhnhan, 
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
						
				
			}
			//_id_luotkham=$.unique(_id_luotkham).reverse();
			
			_id_luotkham_non_unique=_id_luotkham_non_unique.reverse();
			_id_loaikham=_id_loaikham.reverse();
			_id_luotkham=$.unique(_id_luotkham);
			//_id_loaikham=$.unique(_id_loaikham);
			//navigator_load("end","first");			
				
			//create_combobox('#template_title', '', ".DM_template", "#DM_template", create_DM_template_grid, 500, 400, 'Người thực hiện', 'data_DMtemplate&loaikham='+id_loaikham);					 
		//$('.template_title_button').button( 'disable');
		
		});		
	});	}
	
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
		
		
		/*center*/
		$( "#center_col #first" ).button({
		  text: false,
		  icons: {
			primary: "ui-icon-seek-first"
		  }
		})
		.click(function() {
			sub_navigator_load("first","click");
		});
		$( "#center_col #last" ).button({
		  text: false,
		  icons: {
			primary: "ui-icon-seek-end"
		  }
		})
		.click(function() {
			sub_navigator_load("end","click"); 
		}); 
		$( "#center_col #next" ).button({
		  text: false,
		  icons: {
			primary: "ui-icon-seek-next"
		  }
		})
		.click(function() {
			sub_navigator_load(1,"click");  
		});  
		$( "#center_col #prev" ).button({
		  text: false,
		  icons: {
			primary: "ui-icon-seek-prev"
		  }
		})
		.click(function() {
			sub_navigator_load(-1,"click");  
		});		         
  	}); 
        

			  $("#sua").click(function(){
			  	//$('#sua').button( {disabled:true});
			  	//alert(mota5);
                                $('#luu').button( {disabled:false});
                                $('#ketluan').attr("disabled",false);
                                $('#mota').attr("disabled",false);
                                $('#cachdieutri').attr("disabled",false);
                                $('.cach_dieu_tri_button').button( {disabled:false});
                    	  		$('#cach_dieu_tri').attr("disabled", false);
                                $('#ID_NuocSanXuat').attr("disabled",false);
                                $('#open_template').button( {disabled:false});
                                $( "#template_title" ).attr("disabled",false);
                                $("#sua").hide();
                         		$('#boqua').show();
                         		$('.template_title_button').button( {disabled:false});
                         		$('.chuandoan_button').button( {disabled:false});
                         		$('.nhanvien_button').button( {disabled:false});
                         		$( "#nhanvien" ).attr("disabled",false);
                         		  $( "#chuandoan" ).attr("disabled",false);
                         		
                         		  
                         		  window.test="giosuacuoi";
			  });
				$("#boqua").click(function(){
					$("#sua").show();
                    $('#boqua').hide();
                    $('.cach_dieu_tri_button').button( {disabled:true});
                    $('#cach_dieu_tri').attr("disabled", "disabled");

                     $('#luu').button( {disabled:true});
                     $('#ketluan').attr("disabled",true);
                      $('#mota').attr("disabled",true);
                       $('#cachdieutri').attr("disabled",true);
                       $('#xoaketluan').button( {disabled:true});
                       $('#xoaloikhuyen').button( {disabled:true});
                       $('#xoamota').button( {disabled:true});
                       $('#open_template').button( {disabled:true});
                       $( "#template_title" ).attr("disabled",true);
                      $("#mota").val(mota5);
                       $("#ketluan").val(ketluan5);
                       $("#cachdieutri").val(cachdieutri5);
                       //$("#nhanvien1").val(nhanvien4);
                     //  $("#chuandoan1").val(chuandoan4);
                       $('.template_title_button').button( {disabled:true});
                         		//$('.chuandoan_button').button( {disabled:true});
                         		$('.nhanvien_button').button( {disabled:true});
                         		$( "#nhanvien" ).attr("disabled",true);
                         		 // $( "#chuandoan" ).attr("disabled",true);
                         		  $('#add_template').button( {disabled:true});
                         		  //setval('#nhanvien','#nhanvien1','#nhan_vien',nhanvien4);
                         		  //setval('#chuandoan','#chuandoan1','#nhan_vien1',chuandoan4);
                         		  
                         		  //reload();
				});
			  $("#dathuchien").click(function(){
			  	window.test2="dathuchien1";
			  	$("#id_trangthai").html("Đã thực hiện");
                 $('#dathuchien').button( {disabled:true});
                  $('#sua').button( {disabled:false});
                    	  $('#luu').button( {disabled:true});
                          $('#ID_NuocSanXuat').attr("disabled",true);
                           $('#ketluan').attr("disabled", "disabled");
                            $('#mota').attr("disabled", "disabled");
                             $('#cachdieutri').attr("disabled", "disabled");
                             $('#open_template').button( {disabled:true});
                             $( "#template_title" ).attr("disabled",true);
                 			_id_trangthai="DaThucHien";
                 			$('.template_title_button').button( {disabled:true});
                         		$('.chuandoan_button').button( {disabled:false});
                         		$('.nhanvien_button').button( {disabled:true});
                         		$( "#nhanvien" ).attr("disabled",true);
                         		$('#add_template').button( {disabled:true});
                         		$('#boqua').hide();
                         		$('#sua').show();
                         		
                         		  	var a = $("#para1").val();
									var b = $("#para2").val();
									var c = $("#para3").val();
									var d = $("#para4").val();
									var e=a+"-"+b+"-"+c+"-"+d;
									$("#giothuchien").html(gio("current"));
									var giothuchien2= $( "#giothuchien" ).text();
                         		  phancach = "";
						        i = 0;
						        dataToSend = '{';
						        $('.thongtin_thai,.form_row').find(':input[type=text],select,textarea,input[type=hidden]').each(function() {

						            if ($(this).attr("lang") == "luu") {
						              
						                dataToSend += phancach + '"'+ this.name + '":' + JSON.stringify(this.value)   ;
						              
						            }
						            phancach = ",";

						        });
						         dataToSend += phancach + '"id_luotkham":"' + id_luotkham2 + '"';
						         dataToSend += phancach + '"id_trangthai":"' + "DaThucHien" + '"';
						         dataToSend += phancach + '"ngaythuchien":"' + gio("current") + '"';
						        dataToSend += '}';
						        //alert(dataToSend);
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
			            //test();                                  
			  });
			  $("#hoantat").click(function(){
			  	window.test2="hoantat1";
			  	$("#id_trangthai").html("Đã hoàn tất");
                 $('#dathuchien').button( {disabled:true});
                 $('#hoantat').button( {disabled:true});
                 $('#cachdieutri').attr("disabled", "disabled");;
                  $('#sua').button( {disabled:false});
                    	  $('#luu').button( {disabled:true});
                           $('#ID_NuocSanXuat').attr("disabled",true);
                           $('#ketluan').attr("disabled", "disabled");
                            $('#mota').attr("disabled", "disabled");
                             $('#loikhuyen').attr("disabled", "disabled");
                             $('#open_template').button( {disabled:true});
                             $( "#template_title" ).attr("disabled",true);
                			 _id_trangthai="Xong";
                			 $('.template_title_button').button( {disabled:true});
                         		$('.chuandoan_button').button( {disabled:true});
                         		$('.nhanvien_button').button( {disabled:true});
                         		$( "#nhanvien" ).attr("disabled",true);
                         		  $( "#chuandoan" ).attr("disabled",true);
                         		  $('#add_template').button( {disabled:true});
                         		  $('#boqua').hide();
                         		  $('#sua').show();
                         		   
                         		  var a = $("#para1").val();
									var b = $("#para2").val();
									var c = $("#para3").val();
									var d = $("#para4").val();
									var e=a+"-"+b+"-"+c+"-"+d;
									$("#giothuchien").html(gio("current"));
									var giothuchien2= $( "#giothuchien" ).text();
									$("#giohoantat").html(gio("current"));
									var giohoantat2= $( "#giohoantat" ).text();
                         		  phancach = "";
						        i = 0;
						        dataToSend = '{';
						        $('.thongtin_thai,.form_row').find(':input[type=text],select,textarea,input[type=hidden]').each(function() {

						            if ($(this).attr("lang") == "luu") {
						              
						                dataToSend += phancach + '"'+ this.name + '":' + JSON.stringify(this.value)   ;
						              
						            }
						            phancach = ",";

						        });
						         dataToSend += phancach + '"id_luotkham":"' + id_luotkham2 + '"';
						         dataToSend += phancach + '"id_trangthai":"' + "Xong" + '"';
						         dataToSend += phancach + '"ngaythuchien":"' + gio("current") + '"';
						        dataToSend += '}';
						        //alert(dataToSend);
						        dataToSend = jQuery.parseJSON(dataToSend);
						       alertObject(dataToSend); 
						        /*if(nhanvien_control==1){
							    
								   $.post('resource.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=hoantat&hienmaloi=3',dataToSend)
			                        .done(function( gridData ) {	
			                                             tooltip_message("Đã hoàn tất");	 
			                                            })
			                                            .fail(function() {
			                                            tooltip_message( "Có lỗi trong quá trình cập nhật" );
			                                            });
								 
							  }
							  else{*/
						       $.post('resource.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=hoantat&hienmaloi=3',dataToSend)
			                        .done(function( gridData ) {	
			                                             tooltip_message("Đã hoàn tất");	 
			                                            })
			                                            .fail(function() {
			                                            tooltip_message( "Có lỗi trong quá trình cập nhật" );
			                                            });
							  /*}*/
			         		//test();                                        
			  });
			
			  $('#luu').click(function (){
			  		if(_id_trangthai=="DangKham"|| _id_trangthai=="DangCho"){
			  		tooltip_message("Đã lưu");
			  	}
			  	else{
			  		$('#luu').button( {disabled:true});
			  		$('#boqua').hide();
					$('#sua').show();
					$('#sua').button( {disabled:false});
					$('.template_title_button').button( {disabled:true});
                         		$('.chuandoan_button').button( {disabled:true});
                         		$('.nhanvien_button').button( {disabled:true});
                         		$( "#nhanvien" ).attr("disabled",true);
                         		  $( "#chuandoan" ).attr("disabled",true);
                         		  $('#add_template').button( {disabled:true});
                         		 // setval('#nhanvien','#nhanvien1','#nhan_vien',nhanvien4);
                         		  //setval('#chuandoan','#chuandoan1','#nhan_vien1',chuandoan4);
                         		  
                         		  $('#ketluan').attr("disabled",true);
			                      $('#mota').attr("disabled",true);
			                       $('#cachdieutri').attr("disabled",true);
			                       
			                       $('#open_template').button( {disabled:true});
			                       $( "#template_title" ).attr("disabled",true);
			                       if(window.test=="giosuacuoi"){
			                       	if(window.test3=="dathuchien"){
					                      	$("#edit_by").show();
					                      	var nguoisua2=$("#nhanvien1").val();
					                      	//alert(nguoisua2);
					                      	$("#nguoisua").html(nguoisua2);
											$("#ngaygiosua").html(gio("current"));
										}
									if(window.test3=="hoantat"){
					                      	$("#edit_by").show();
					                      	var nguoisua2=$("#chuandoan1").val();
					                      	//alert(nguoisua2);
					                      	$("#nguoisua").html(nguoisua2);
											$("#ngaygiosua").html(gio("current"));
										}
									
			                      }}
			                      
			        phancach = "";
			        i = 0;
			        dataToSend = '{';
			        $('.thongtin_thai,.form_row').find(':input[type=text],select,textarea,input[type=hidden]').each(function() {

			            if ($(this).attr("lang") == "luu") {
			              
			                dataToSend += phancach + '"'+ this.name + '":' + JSON.stringify(this.value)   ;
			              
			            }
			            phancach = ",";

			        });
			        dataToSend += phancach + '"id_luotkham":"' + id_luotkham2 + '"';
			        dataToSend += phancach + '"id_trangthai":"' + _id_trangthai + '"';
			        dataToSend += '}';
			        //alert(dataToSend);
			        dataToSend = jQuery.parseJSON(dataToSend);
			       alertObject(dataToSend); 
			        
			       if(window.test2=="dathuchien1"){
			       $.post('resource.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=luuthuchien&hienmaloi=3',dataToSend)
								 .done(function( gridData ) {	
			                                             tooltip_message("Đã lưu");
			                                             // test();	 
			                                            })
			                                            .fail(function() {
			                                            alert( "error" );
			                                            })
			         }else
			         if(window.test2=="hoantat1"){
			         	$.post('resource.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=luuhoantat&hienmaloi=3',dataToSend)
								 .done(function( gridData ) {	
			                                             tooltip_message("Đã lưu");
			                                            //  test(); 
			                                            })
			                                            .fail(function() {
			                                            alert( "error" );
			                                            })
			         }   
			         else  
			          {
			       $.post('resource.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=luudangkham&hienmaloi=3',dataToSend)
								 .done(function( gridData ) {	
			                                             tooltip_message("Đã lưu"); 
			                                            // test();    
			                                            })
			                                            .fail(function() {
			                                            alert( "error" );
			                                            })
			         }
			                                           
			        
			                                    
			    });
			 	phanquyen();
				var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
				var eventer = window[eventMethod];
				var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
				eventer(messageEvent,function(e) {	
					 edit_images(e.data);
					//parent.postMessage(e.data , '*')
				},false);

				
				$("#DM_template").click(function(e) {
					grid_click_status=true;
			    });  
	
	
});


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
			if(_id_luotkham[navigator_count]==tam1_cls[0]){
				//alert(_id_luotkham[navigator_count]) 
				tam_cls+= '<div id="'+val[i]["id"]+'" alt="'+ma_benhnhan+"_"+val[i]["id"]+"_"+tam1_cls[3]+'">'+tam1_cls[0]+"<br \>" +tam1_cls[5]+'</div>';				
				//$("#ngay_kham").html(tam1_cls[2]);				 
				// $("#id_trangthai").html(tam1_cls[9]);
			}
		}
		$("#left_col div").html(tam_cls);	
	});
	loaikham_click();
	if(_click=="first"){
		$("#left_col div div:first-child").click();

	}
	//alert(_id_luotkham);
	$("#left_col .navigator_title").html("Lần " + (navigator_count+1) +"/"+_id_luotkham.length);	

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
					 var tam1_cls=val[i]["cell"]; 
					tam1=$(this).attr("id");
					//alert(tam1);
					if(tam==tam1){
							parent.postMessage('changetitle;<?=$view?>-'+idbenhnhan+';Medical report - ;'+$('#panel_tenbn').text() , '*');
						$("#edit_by").show();
						 window._id_trangthai=tam1_cls[4];
						window.id_luotkham2=tam1_cls[0];
						//alert(id_luotkham2);
						$.getJSON( "resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_tonghop&id_luotkham="+id_luotkham2, 
								function( data ) {
									data_luotkham4=data;

									var tam1_cls="";
									var test4="";
									var test5="";
									var test6="";

									$.each( data, function( key, val ) {		 
											for(i=0;i<val.length;i++){
												
												var tam1_cls=val[i]["cell"];
												$("#mota").val(tam1_cls[10]);
												$("#ketluan").val(tam1_cls[11]);
												$("#cachdieutri").val(tam1_cls[12]);
												window._id_trangthai=tam1_cls[13];
												//alert(_id_trangthai);
												if(tam1_cls[2]=="0"){
													test5+=tam1_cls[0]+":"+tam1_cls[1]+" "+tam1_cls[14]+"\n";
													//alert(tam1_cls[10]);
													test5 = test5.replace(/Khám lâm sàng:/gi, " ");
													
												}
												
											  else if(tam1_cls[6]=="3746" || tam1_cls[6]=="3752"|| tam1_cls[6]=="3751"|| tam1_cls[6]=="3747"|| tam1_cls[6]=="3748"|| tam1_cls[6]=="3749"|| tam1_cls[6]=="3750"|| tam1_cls[6]=="3753"
													|| tam1_cls[6]=="3754"|| tam1_cls[6]=="3755"|| tam1_cls[6]=="3756"|| tam1_cls[6]=="3757"|| tam1_cls[6]=="3758"|| tam1_cls[6]=="3759"|| tam1_cls[6]=="3760"|| tam1_cls[6]=="3761"|| tam1_cls[6]=="3762"
													|| tam1_cls[6]=="3763"|| tam1_cls[6]=="3764"|| tam1_cls[6]=="3765"|| tam1_cls[6]=="3766"|| tam1_cls[6]=="3767"|| tam1_cls[6]=="3768"|| tam1_cls[6]=="3769"|| tam1_cls[6]=="3770"|| tam1_cls[6]=="3771"
													|| tam1_cls[6]=="3772"|| tam1_cls[6]=="3773"|| tam1_cls[6]=="3774"|| tam1_cls[6]=="3775"|| tam1_cls[6]=="3776"|| tam1_cls[6]=="3777"|| tam1_cls[6]=="3778"|| tam1_cls[6]=="3779"|| tam1_cls[6]=="3780"
													|| tam1_cls[6]=="3781"|| tam1_cls[6]=="3782"|| tam1_cls[6]=="3783"|| tam1_cls[6]=="3784"|| tam1_cls[6]=="3785"|| tam1_cls[6]=="3786"|| tam1_cls[6]=="3787"|| tam1_cls[6]=="3788"|| tam1_cls[6]=="3789"
													|| tam1_cls[6]=="3790"|| tam1_cls[6]=="3791"|| tam1_cls[6]=="3792"|| tam1_cls[6]=="3793"|| tam1_cls[6]=="3794"|| tam1_cls[6]=="3795"|| tam1_cls[6]=="3796"|| tam1_cls[6]=="3797"|| tam1_cls[6]=="3798"
													|| tam1_cls[6]=="3799"|| tam1_cls[6]=="3800"|| tam1_cls[6]=="3801"|| tam1_cls[6]=="3802"|| tam1_cls[6]=="3803"|| tam1_cls[6]=="3804"|| tam1_cls[6]=="3805"|| tam1_cls[6]=="3806"|| tam1_cls[6]=="3807"
													|| tam1_cls[6]=="3808"|| tam1_cls[6]=="3809"|| tam1_cls[6]=="3810"|| tam1_cls[6]=="3811"|| tam1_cls[6]=="3812"|| tam1_cls[6]=="3813"|| tam1_cls[6]=="3814"|| tam1_cls[6]=="3815"|| tam1_cls[6]=="3816"
													|| tam1_cls[6]=="3817"|| tam1_cls[6]=="3818"|| tam1_cls[6]=="3819"|| tam1_cls[6]=="3820"|| tam1_cls[6]=="3821"|| tam1_cls[6]=="3822"|| tam1_cls[6]=="3823"|| tam1_cls[6]=="3824"|| tam1_cls[6]=="3825"
													|| tam1_cls[6]=="3826"|| tam1_cls[6]=="3827"|| tam1_cls[6]=="3828"|| tam1_cls[6]=="3829"|| tam1_cls[6]=="3830"|| tam1_cls[6]=="3831"|| tam1_cls[6]=="3832"|| tam1_cls[6]=="3833"|| tam1_cls[6]=="3834"
													|| tam1_cls[6]=="3835"|| tam1_cls[6]=="3836"|| tam1_cls[6]=="3837"|| tam1_cls[6]=="3838"|| tam1_cls[6]=="3839"|| tam1_cls[6]=="3840"|| tam1_cls[6]=="3841"|| tam1_cls[6]=="3842"|| tam1_cls[6]=="3843"
													|| tam1_cls[6]=="3844"|| tam1_cls[6]=="3845"|| tam1_cls[6]=="3846"|| tam1_cls[6]=="3847"|| tam1_cls[6]=="3848"|| tam1_cls[6]=="3849"|| tam1_cls[6]=="3850"|| tam1_cls[6]=="3851"|| tam1_cls[6]=="3852"
													|| tam1_cls[6]=="3853"|| tam1_cls[6]=="3854"|| tam1_cls[6]=="3855"|| tam1_cls[6]=="3856"|| tam1_cls[6]=="3857"|| tam1_cls[6]=="3858"|| tam1_cls[6]=="3859"|| tam1_cls[6]=="3860"|| tam1_cls[6]=="3861"
													|| tam1_cls[6]=="3862"|| tam1_cls[6]=="3863"|| tam1_cls[6]=="3864"|| tam1_cls[6]=="3865"|| tam1_cls[6]=="3866"|| tam1_cls[6]=="3867"|| tam1_cls[6]=="3868"|| tam1_cls[6]=="3869"|| tam1_cls[6]=="3870"
													|| tam1_cls[6]=="3871"|| tam1_cls[6]=="3872"|| tam1_cls[6]=="3873"|| tam1_cls[6]=="3874"|| tam1_cls[6]=="3875"|| tam1_cls[6]=="3876"|| tam1_cls[6]=="3877"|| tam1_cls[6]=="3878"|| tam1_cls[6]=="3879"
													|| tam1_cls[6]=="3880"|| tam1_cls[6]=="3881"|| tam1_cls[6]=="3882"|| tam1_cls[6]=="3883"|| tam1_cls[6]=="3884"|| tam1_cls[6]=="3885"|| tam1_cls[6]=="3886"|| tam1_cls[6]=="3887"|| tam1_cls[6]=="3888"
													|| tam1_cls[6]=="3889"|| tam1_cls[6]=="3890"|| tam1_cls[6]=="3891"|| tam1_cls[6]=="3892"|| tam1_cls[6]=="3893"|| tam1_cls[6]=="3894"|| tam1_cls[6]=="3895"|| tam1_cls[6]=="3896"|| tam1_cls[6]=="3897"
													|| tam1_cls[6]=="3898"|| tam1_cls[6]=="3899"|| tam1_cls[6]=="3900"|| tam1_cls[6]=="3901"|| tam1_cls[6]=="3902"|| tam1_cls[6]=="3903"|| tam1_cls[6]=="3904"|| tam1_cls[6]=="3905"|| tam1_cls[6]=="4473"
													|| tam1_cls[6]=="4544"|| tam1_cls[6]=="4588"|| tam1_cls[6]=="4589"|| tam1_cls[6]=="4600"|| tam1_cls[6]=="4601"|| tam1_cls[6]=="4602"|| tam1_cls[6]=="4608"
													){
														if(tam1_cls[7]=="Red" || tam1_cls[7]=="Orange"){
															test6+="    - "+tam1_cls[4]+" : "+tam1_cls[3]+" "+tam1_cls[5]+"\n";
														}
													
												}
												else{
													test4+=" + "+tam1_cls[0]+" : "+tam1_cls[1]+tam1_cls[3]+"\n";
												}
													
												
											}
											
											//alert($("#tonghop").val());
											if(tam1_cls[16]==null && tam1_cls[15]==null){
												setval('#nhanvien','#nhanvien1','#nhan_vien',<?=$_SESSION['user']['id_user']?>);
												setval('#chuandoan','#chuandoan1','#nhan_vien1',<?=$_SESSION['user']['id_user']?>);
											}
											else{
												setval('#nhanvien','#nhanvien1','#nhan_vien',tam1_cls[15]);
											setval('#chuandoan','#chuandoan1','#nhan_vien1',tam1_cls[16]);
											}
										});
											$.getJSON( "resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_dauhieusinhton&id_luotkham="+id_luotkham2, 
											function( data) {
													$.each( data, function( key, val ) {
														var tam1_cls=val[0]["cell"];
														window.sinhton="1/ Huyết áp: "+tam1_cls[0]+" mmHg    Mạch: "+tam1_cls[1]+" L/p    Chiều cao: "+tam1_cls[2]+" cm    Cân nặng: "+tam1_cls[3]+" kg     BMI: "+tam1_cls[4]+ " \n2/ Lý do khám:";
														
														if(tam1_cls[4]!=null){
															//echo round($BMI,1);			
															if(tam1_cls[4]<18.5 ){
																window.sinhton+= " (Gầy)";                 
															}else if((tam1_cls[4]>=18.5)&&(tam1_cls[4]<23)){
																window.sinhton+= " (Bình thường)";                
															}else if((tam1_cls[4]>=23)&&(tam1_cls[4]<25)){
																window.sinhton+= " (Thừa cân)";                 
															}else if((tam1_cls[4]>=25)&&(tam1_cls[4]<30)){
																window.sinhton+= " (Béo phì độ I)";                 
															}else if((tam1_cls[4]>=30)&&(tam1_cls[4]<35)){
																window.sinhton+= " (Béo phì độ II)";               
															}else if(tam1_cls[4]>=35){
																window.sinhton+= " (Béo phì độ III)";                
															}
														}
														
														//alert(sinhton);
													//$("#tonghop").val(sinhton);
													    //sinhton=sinhton.replace("1/ Lý do khám bệnh: ","");
														sinhton=sinhton.replace("1/ Huyết áp: / mmHg    Mạch: null L/p    Chiều cao: null m    Cân nặng: null kg     BMI: null","");
														sinhton=sinhton.replace("Chiều cao: null m    Cân nặng: null kg     BMI: null ","");
														if(tam1_cls[4]==null){
															sinhton=sinhton.replace("Chiều cao: "+tam1_cls[2]+" m    Cân nặng: "+tam1_cls[3]+" kg     BMI: null","");
														}
														$("#tonghop").val(sinhton+"\n3/ Triệu chứng lâm sàng: \n"+test5+"\n4/ Khám nghiệm cận lâm sàng:\n"+test4+" + Xét Nghiệm:\n"+test6);
														var res = $("#tonghop").val().replace(/null/gi, " ");
														$("#tonghop").val(res);
													});
												})
														
											$("#tonghop").val("3/ Triệu chứng lâm sàng:\n"+test5+"4/ Khám nghiệm cận lâm sàng:\n"+test4+" + Xét Nghiệm:\n"+test6);
											var res = $("#tonghop").val().replace(/null/gi, " ");
														$("#tonghop").val(res);
											//alert($("#tonghop").val());
									//$("#tonghop").val(data_luotkham4);


							})
							$.getJSON( "resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_medical&id_luotkham="+id_luotkham2, 
								function( data ) {
									data_luotkham4=data;

									var test5="";
									//alert($.isEmptyObject(data));
									if($.isEmptyObject(data)==true){
										/*$("#mota").val("");
										$("#ketluan").val("");
										$("#cachdieutri").val("");	*/
										setval('#nhanvien','#nhanvien1','#nhan_vien',<?=$_SESSION['user']['id_user']?>);
												setval('#chuandoan','#chuandoan1','#nhan_vien1',<?=$_SESSION['user']['id_user']?>);
										//alert();
									}
									else{
									$.each( data, function( key, val ) {	

											for(i=0;i<val.length;i++){

												var tam1_cls=val[i]["cell"];
												$("#mota").val(tam1_cls[0]);
												$("#ketluan").val(tam1_cls[1]);
												$("#cachdieutri").val(tam1_cls[2]);	
												$("#id_trangthai").html(tam1_cls[3]);
												//alert($("#mota").val());
												window.mota5=tam1_cls[0];
												window.ketluan5=tam1_cls[1];
												window.cachdieutri5=tam1_cls[2];
												if(tam1_cls[3]=="Xong"){
													$('#ketluan').attr("disabled", "disabled");
						                            $('#mota').attr("disabled", "disabled");
						                             $('#cachdieutri').attr("disabled", "disabled");
						                              $('#dathuchien').button( {disabled:true});
						                               $('#hoantat').button( {disabled:true});
						                               $('#sua').button( {disabled:false});

                    	  								$('#luu').button( {disabled:true});
                    	  								$('.cach_dieu_tri_button').button( {disabled:true});
                    	  								$('#cach_dieu_tri').attr("disabled", "disabled");
                    	  								setval('#nhanvien','#nhanvien1','#nhan_vien',tam1_cls[4]);
														setval('#chuandoan','#chuandoan1','#nhan_vien1',tam1_cls[5]);
													window.test2=="dathuchien1";

												}else if(tam1_cls[3]=="DaThucHien"){
													$('#ketluan').attr("disabled", "disabled");
						                            $('#mota').attr("disabled", "disabled");
						                             $('#cachdieutri').attr("disabled", "disabled");
						                              $('#dathuchien').button( {disabled:true});
						                               $('#hoantat').button( {disabled:false});
						                               $('#sua').button( {disabled:false});
                    	  								$('#luu').button( {disabled:true});
                    	  								$('.cach_dieu_tri_button').button( {disabled:true});
                    	  								$('.chuandoan_button').button( {disabled:false});
                    	  								$('#cach_dieu_tri').attr("disabled", "disabled");
                    	  								 $('.nhanvien_button').button( {disabled:true});
                    	  									$('#nhanvien').attr("disabled", "disabled");
                    	  									window.test2=="dathuchien1";
                    	  									setval('#nhanvien','#nhanvien1','#nhan_vien',tam1_cls[4]);
														setval('#chuandoan','#chuandoan1','#nhan_vien1',<?=$_SESSION['user']['id_user']?>);


												}else{
													$('#ketluan').attr("disabled", false);
						                            $('#mota').attr("disabled", false);
						                             $('#cachdieutri').attr("disabled",false);
						                              $('#dathuchien').button( {disabled:false});
						                               $('#hoantat').button( {disabled:false});
						                               $('#sua').button( {disabled:true});
                    	  								$('#luu').button( {disabled:false});
                    	  								$('.cach_dieu_tri_button').button( {disabled:false});
                    	  								$('#cachdieutri').attr("disabled", false);
                    	  								setval('#nhanvien','#nhanvien1','#nhan_vien',<?=$_SESSION['user']['id_user']?>);
														setval('#chuandoan','#chuandoan1','#nhan_vien1',<?=$_SESSION['user']['id_user']?>);
														window.test2=="dangkham1";

												}

											}
											
										});	
		}
							})
						//$("#tonghop").html(data_luotkham4);
						
						 $("#ngaychidinh").val(tam1_cls[2]);
						 $("#nguoi_chidinh").val(tam1_cls[3]);
						 $("#tonghop").val();
                         //alert(_id_luotkham2);
                        // $(".zodi").show();
                    if(_id_trangthai=="Xong"){
                    	//$("#id_trangthai").html("Đã thực hiện");
                    	 $('#sua').button( {disabled:false});
                    	  $('#luu').button( {disabled:true});
                           $('#ketluan').attr("disabled", "disabled");
                            $('#mota').attr("disabled", "disabled");
                             $('#loikhuyen').attr("disabled", "disabled");
                             $('#open_template').button( {disabled:true});
                             $( "#template_title" ).attr("disabled",true);
                             $('#dathuchien').button( {disabled:true});
                         		$('.chuandoan_button').button( {disabled:false});
                         		$('.nhanvien_button').button( {disabled:true});
                         		$('.template_title_button').button( {disabled:true});
                         		$( "#nhanvien" ).attr("disabled",true);
                         		$('#hoantat').button( {disabled:true});
                         		$('#add_template').button( {disabled:true});
                         		$( "#chuandoan" ).attr("disabled",false);
                         		 $('.chuandoan_button').button( {disabled:true});
                    	  		$('#chuandoan').attr("disabled", "disabled");

                         		window.test2="hoantat1";
                         		window.test3="dathuchien";
                         		 //setval('#chuandoan','#chuandoan1','#nhan_vien1',<?=$_SESSION['user']['id_user']?>);

                    }
                    else  if(_id_trangthai=="DaThucHien"){
                    	//$("#id_trangthai").html("Đã thực hiện");
                    	 $('#sua').button( {disabled:false});
                    	  $('#luu').button( {disabled:true});
                           $('#ketluan').attr("disabled", "disabled");
                            $('#mota').attr("disabled", "disabled");
                             $('#loikhuyen').attr("disabled", "disabled");
                             $('#open_template').button( {disabled:true});
                             $( "#template_title" ).attr("disabled",true);
                             $('#dathuchien').button( {disabled:true});
                         		$('.chuandoan_button').button( {disabled:false});
                         		$('.nhanvien_button').button( {disabled:true});
                         		$('.template_title_button').button( {disabled:true});
                         		$( "#nhanvien" ).attr("disabled",true);
                         		$('#hoantat').button( {disabled:false});
                         		$('#add_template').button( {disabled:true});
                         		$( "#chuandoan" ).attr("disabled",false);
                         		 $('.chuandoan_button').button( {disabled:true});
                    	  		$('#chuandoan').attr("disabled", false);

                         		window.test2="dathuchien1";
                         		window.test3="dathuchien";
                         		 //setval('#chuandoan','#chuandoan1','#nhan_vien1',<?=$_SESSION['user']['id_user']?>);

                    }
                    else {
                    	//$("#id_trangthai").html("Đang khám");
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
                         		  $( "#chuandoan" ).attr("disabled",false);
                         		  $( "#para1" ).attr("disabled",false);
                         		  $( "#para2" ).attr("disabled",false);
                         		  $( "#para3" ).attr("disabled",false);
                         		  $( "#para4" ).attr("disabled",false);

                         		  //setval('#nhanvien','#nhanvien1','#nhan_vien',<?=$_SESSION['user']['id_user']?>);
                         		 // setval('#chuandoan','#chuandoan1','#nhan_vien1',<?=$_SESSION['user']['id_user']?>);
                         		  window.test2="dangkham1";
                         		  $('.cach_dieu_tri_button').button( {disabled:false});
                    	  		$('#cachdieutri').attr("disabled", false);
                    	  		$('#cach_dieu_tri').attr("disabled", false);
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
					if($("#nguoisua").text()==check[0]){ //alert(check[0]);
				 		$("#nguoisua").text(check[1]);}
					if($("#nguoi_chidinh").val()==check[0]){ //alert(check[0]);
				 		$("#nguoi_chidinh").val(check[1]);}
				}
				
				////////
			/*	var ii=0;				 
				for(i=0;i<_id_kham.length;i++){
					if(_id_loaikham[i]==id_loaikham){						 				 
						//console.log(_id_kham[i]+"  "+ii);						 			 
						if((_id_kham[i]==$(this).attr("id"))&&(_id_loaikham[i])==id_loaikham){
							id_kham=_id_kham[i]
							sub_navigator_count=0;						
							sub_navigator_load(ii);							
							break;
						}
						ii++;						 
					}
				}*/
				//load_image($(this).attr("alt"));	

		});
	});
}
function resize_control(){
	//$(window).height()thongtin_chidinh thongtin_tongthe
	//alert($(".thongtin_tongthe").width())
	
	$("#left_col").css("width",$(window).width()/3+135+"px");
	$("#center_col").css("width",$(window).width()/3-205+"px");
	$("#right_col").css("width",$(window).width()/3+56+"px");
	$("#mota").css("width",$(".ui-layout-center").width()-8+"px");
	$("#mota").css("height",$(".ui-layout-north").height()-28+"px");
	$("#ketluan").css("width",$(".ui-layout-center").width()-8+"px");
	$("#ketluan").css("height",$(".ui-layout-east").height()-$(".ui-layout-south").height()-$(".ui-layout-north").height()-40+"px");
	$("#cachdieutri").css("width",$(".ui-layout-center").width()-8+"px");
	$("#cachdieutri").css("height",$(".ui-layout-south").height()-33+"px");
	$(".thongtin_luotkham").css("width",$(window).width()/2-5+"px");
	$(".thongtin_chidinh").css("width",$(window).width()/2-5+"px");
	$(".thongtin_tongthe").css("width",$(window).width()/2-5+"px");
	$("#tonghop").css("width",$(".ui-layout-east").width()-8+"px");
	$("#tonghop").css("height",$(".ui-layout-east").height()-30+"px");
}
function create_layout(){
	//alert("")
	$('#panel_main').layout({	
		resizerClass: 'ui-state-default'       
		
	    ,	center: {
			resizable: true
		,	size:					"50%"
		,	resizerDblClickToggle: false		 
				
		 
		,	onresize_end:function () { 				 
				  resize_control();
			}
		,	onopen_end:function () {				 
				 	
			}
		,	onclose_end:function () { 				 
	  			 	 
			}		
		}  
		,	east: {
			resizable: true
		,	size:					"50%"
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

$('#inner').layout({
            resizerClass: 'ui-state-default'
                    , north: {
				               maskContents:		true
						,	resizable: true
						,	size:					"45%"
						,	resizerDblClickToggle: false 
						,	onresize_end:function () { 				 
								 resize_control();
							}
						,	onopen_end:function () { 
								 
							}
						,	onclose_end:function () { 				 
							 	 
							}

            }
            , center: {
		                resizable: true
				,	size:					"25%"
				,	resizerDblClickToggle: false		 
						
				 
				,	onresize_end:function () { 				 
						  resize_control();
					}
				,	onopen_end:function () {				 
						 	
					}
				,	onclose_end:function () { 				 
			  			 	 
					}	
            }
            , south: {
                resizable: true
					,	size:					"30%"
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
    function create_cachdieutri(elem, datalocal) {
        datalocal = jQuery.parseJSON(datalocal);
        $(elem).jqGrid({
            datastr: datalocal,
            datatype: "jsonstring",
            colNames: ['Cách điều trị'],
            colModel: [
                {name: 'TenTemplate', index: 'TenTemplate', hidden: false},
               
                
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
				if(jQuery('#nhan_vien2').data('clicked')) {

						var ketluan2=$.trim($("#ketluan").val());
						var cachdieutri2=$("#cachdieutri").val();
			             var rowData = $('#nhan_vien2').getRowData(id);
						  if(cachdieutri2!=""){
						  	cachdieutri3=$.trim(rowData["TenTemplate"]);
						  	cachdieutri2=cachdieutri2+"\n"+cachdieutri3;
						  	$("#cachdieutri").val(cachdieutri2);
						  	if(ketluan2==""){
						  		$("#ketluan").val("- Không có phát hiện bất thường");
						  	}
						  }
			              else{
			                    $("#cachdieutri").val(rowData["TenTemplate"]);
			                    	if(ketluan2==""){
						  		$("#ketluan").val("- Không có phát hiện bất thường");
						  	}
			              }
						  
							
			} else {
			    //run function2
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
function load_complete(){
	if((nhanvien1_complete==0)&&(nhanvien2_complete==0)&&(ma_benhnhan==0)){
		setTimeout(load_complete,50);
		return;
	}

	navigator_load("end","first");
	
}
function create_grid(){	
	 $("#rowed3").jqGrid({
		url:"resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_tonghop&id_luotkham=0",
		datatype: "jsonstring",	
		colNames: ["id_kham","idbenhnhan","id_xetnghiem",'Loại xét nghiệm', 'Chỉ số', 'Giá trị bình thường','Kết quả',''],
            colModel: [
            	{name:"ID_Kham",index:"ID_Kham",hidden:true,width:50},
            	{name:"idbenhnhan",index:"idbenhnhan",hidden:true,width:50},
            	{name:"ID_XetNghiem",index:"ID_XetNghiem",hidden:true,width:50},
                {name: 'TenLoaiKham', index: 'TenLoaiKham', hidden: false,width:50},
                {name: 'TenXetNghiem', index: 'TenXetNghiem',hidden: false,width:150},
                {name: 'GiaTriBinhThuong1', index: 'GiaTriBinhThuong1', hidden: false,width:100},
                {name: 'ketqua', index: 'ketqua', hidden: false,editable: true,width:50},
                {name: 'ID_NguoiNhap', index: 'ID_NguoiNhap', hidden: true,width:50},
            ],
	//

		loadonce: true,
		scroll: 1,	
		//rownum = false,
		//treeGrid = false,	 
		modal:true,	 	
		pager: '#prowed4',	
		rowNum: 100,
		gridview: true,
		pginput:false,
		pgbuttons:false,
		rowList:[],
		sortname: 'TenXetNghiem',
		height:220,
		width: 600,
		viewrecords: true,	
		ignoreCase:true,
		shrinkToFit:true,
		stringResult:true,
		sortorder: "asc",
		
	//hoverrows:false,
	//jsonReader:{repeatitems:true,subgrid:{repeatitems:false}},	
		
		serializeRowData: function (postdata) { 		 	
			//$("#rowed3").trigger("reloadGrid");		
			//return postdata;
		},
		onSelectRow: function(id){		  
		  
		},
		ondblClickRow: function (rowId, rowIndex, columnIndex,id) {
			$(".ui-icon-pencil").trigger('click');

 		},
		loadComplete: function(data,rowid) {	 
		},	  
		caption: ""
	});
		
}; 
$("#chen").click(function(){
	$("#mota").val($("#tonghop").val());
	if($("#ketluan").val()==""){
		$("#ketluan").val("- Không có phát hiện bất thường");
	}
});
$("#laylaidulieu").click(function(){
	
});
$("#xoa").click(function(){
	$("#mota").val("");
	$("#ketluan").val("");
	$("#cachdieutri").val("");
});
</script>
 
 
