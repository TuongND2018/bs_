<!--<link rel="stylesheet" href="../../../css/form_css.css" type="text/css" media="screen"/>-->
<style type="text/css">

#doituong1,#trangthai1{
width:200px!important;

}
#mabaohiem{
		text-transform:uppercase
	}

.kocomat{
	background-color:#999!important;
}
#bsyeucau_dialog td  {
		word-wrap:normal!important;
		white-space:nowrap;
	}
.error_null{
	background:#FFFF00;
}
.img-link {
    text-decoration: none;
}
   input[type="checkbox"]:focus {
-webkit-box-shadow: 0px 0px 1px 1px #0463B4!important;
  box-shadow:  0px 0px 2px 2px #208AC8 !important;
}
.link-text {
    text-decoration: underline;
}

div.form_row input[type=text]{
	width:230px;
	text-align:left!important;
	border: 1px solid #327E04;
	/*padding: 0.2em;*/
}
div.label { 
  margin: 0; 
  padding: 0; 
  margin-left: 20px; 
  font-size: 100%; 
  font-weight: bold; 
} 



ul.checkbox li input { 
  margin-right: .25em; 
} 


ul.checkbox li { 
  border: 1px transparent solid; 
} 

.focus1:hover, 
.focus  { 
  background-color: lightyellow !important; 
  border: 1px gray solid!important; ; 

} 

</style>
<html>
<body> 

 

 <div id="main_top" class="ui-dialog ui-widget ui-widget-content ui-corner-all ui-resizable" style="width:99.5%;  box-shadow:none!important;  display: block;;z-index: 1 !important;" >
   	   <div class="ui-dialog-titlebar ui-widget-header ui-corner-all ui-helper-clearfix"> <span id="ui-id-5" class="ui-dialog-title">Thông tin bệnh nhân</span> </div>
  		<div class="ui-dialog-content ui-widget-content" style="display: block; width: auto; min-height: none; max-height: none; height: 100%; ">
     	<div class="patient_info">       
        </div>
  </div>
 </div>     
 
  
 <div id="main_top" class="ui-dialog ui-widget ui-widget-content ui-corner-all ui-resizable" style="width:99.5%;  box-shadow:none!important;  display: block;;z-index: 1 !important;margin-top:20px!important" >
   	   <div class="ui-dialog-titlebar ui-widget-header ui-corner-all ui-helper-clearfix"> <span id="ui-id-5" class="ui-dialog-title">Thông tin lượt khám</span> </div>
  		<div class="ui-dialog-content ui-widget-content" style="display: block; width: auto; min-height: none; max-height: none; height: 100%; ">
     	 <div id="container" >  
<div class="form_row" style="vertical-align:top"  >    
<div>
        <label for="phanloai"  style="width:150px;text-align:left">Phân loại khám </label>
         
         
         
        <input id="phanloai" kiemtra="trong"  type="text" name="phanloai" style="width:200px" tabindex="1">
       
        
        </div>
        <div><label for="goikham"  style="width:150px;text-align:left">Gói khám SK </label>
    
       
       
        <input id="goikham" name="goikham"   type="text" style="width:200px;" tabindex="2" >
        
        </div>
        
        <div><label for="doituong"  style="width:150px;text-align:left">Đối tượng khám </label>
    
         <!-- <select id="doituong"  name="doituong" style="width:200px;display:none" >
           <option value="Viện phí">Viện phí</option>
           <option value="BHYT">Bảo hiểm y tế</option>
         
          </select>-->
         <input id="doituong" name="doituong"   type="text" style="width:200px;" tabindex="3" >
       
        </div>
        <div><label for="bsyeucau"  style="width:150px;text-align:left">BS được BN yêu cầu </label>
         
           
       	 <input id="bsyeucau" name="bsyeucau"   type="text" style="width:200px;" tabindex="4"></div>
      
        <div><label for="nguoichidinh"  style="width:150px;text-align:left">Người chỉ định  </label>
      
       
         
        <input id="nguoichidinh" name="nguoichidinh"   type="text" style="width:200px;" tabindex="5">
     
        </div>
        <div><label for="nguoilapphieu"  style="width:150px;text-align:left">Người lập phiếu </label>
      
        
        <input id="nguoilapphieu" name="nguoilapphieu"   type="text" style="width:200px;" tabindex="6"></div>
    
        <div><label for="nguoigioithieu"  style="width:150px;text-align:left">Người giới thiệu </label>
          
        
        <input id="nguoigioithieu" name="nguoigioithieu"   type="text" style="width:200px;" tabindex="7"></div>
      
        <div><label for="trangthai"  style="width:150px;text-align:left">Trạng thái lúc nhập viện </label>
           <input id="trangthai" name="trangthai"   type="text" style="width:200px;" tabindex="8">
      <!--  <select id="trangthai"  name="trangthai" style="width:200px;display:none" >
         <option value="1">Đúng tuyến</option>
         <option value="2">Có giấy chuyển viện</option>
         <option value="3">Vượt tuyến</option>           
         <option value="4">Cấp cứu</option>
        
          </select>-->
        
        </div>
        <div>
        <label for="pbvatly"  style="width:150px;text-align:left">Phòng ban vật lý</label>
              
        <input id="pbvatly" name="pbvatly"   type="text" style="width:200px;" tabindex="9">
        </div>
        <div><label for="hinhthuc"  style="width:150px;text-align:left">Hình thức đến </label>
        
         
        <input id="hinhthuc" name="hinhthuc"   type="text" style="width:200px;" tabindex="10"></div>
    
        <div><label for="ngay"  style="width:150px;text-align:left">Ngày giờ đến  khám </label>
        <input id="ngay" name="ngay"   type="text" style="width:111px;" disabled><input id="gio" name="gio" disabled  type="text" style="width:72px;margin-left:10px"></div>
</div>

    <div class="form_row" style="vertical-align:top;margin-left:40px!important"  >  
    	 <div ><input id="dhsinhton" name="dhsinhton"   type="checkbox" value="1" tabindex="11"><label for="dhsinhton"  style="width:150px;text-align:left;margin-top:-10px!important; display:inline-block!important;">Lấy dấu hiệu sinh tồn </label></div>
        <div ><input id="comat" name="comat" checked   type="checkbox" value="1"  tabindex="12"><label for="comat"  style="width:150px;text-align:left">Đã có mặt </label></div>
        <div ><input id="nhanthan" name="nhanthan"   type="checkbox" value="1"  tabindex="13"><label for="nhanthan"  style="width:150px;text-align:left">Xác định nhân thân </label></div>
        <div ><input id="lamsang" name="lamsang"  style="width:200px;display:none"  type="text"  ></div>
    </div>
   
        
            <div class="form_row" style="vertical-align:top"  id="container_bhyt"  style="display:none!important">
        
           	  <fieldset>
             
               <legend>Thẻ BHYT</legend>
                    <span id="container_bhyt1">
               <input  id="idbh" type="text" style="display:none" name="idbh"> 
                		 <div style="margin-top:2px;">
                            <label for="mabh" style="width:150px; ">Số thẻ bảo hiểm</label>
                            <input  id="mabaohiem" type="text" style="width:130px;" name="mabh" maxlength="15">  
                            <input disabled id="mabh1" type="text" style="width:20px;margin-left:30px" name="mabh1"> 
                            <input disabled id="mabh2" type="text" style="width:20px;" name="mabh2"> 
                            <input disabled id="mabh3" type="text" style="width:20px;" name="mabh3"> 
                            <input disabled id="mabh4" type="text" style="width:20px;" name="mabh4"> 
                            <input disabled id="mabh5" type="text" style="width:20px;" name="mabh5"> 
                            <input disabled id="mabh6" type="text" style="width:40px;" name="mabh6"> 
                        </div>
                        <div style="margin-top:2px;">
                        <label for="doituongbhyt" style="width:150px; ">Đối tượng BHYT</label>                      
                        <input id="doituongbhyt" type="text" style="width:40px;" name="doituongbhyt"> 
                        <input disabled id="doituongbhyt1" type="text" style="width:255px;margin-left:30px"> 
                      
                        </div>  
                        <div style="margin-top:2px;">
                       
                        <label for="noidkbd" style="width:150px; ">Nơi ĐK KCB ban đầu</label>
                        <input id="noidkbd" type="text" style="width:40px;" name="noidkbd"> 
                     
                     
                        <input disabled id="noidkbd1" type="text" style="width:255px;margin-left:30px"> 
                        </div>   <div style="margin-top:2px;">
                         <label for="diachibh" style="width:150px; ">Địa chỉ</label>
                        <input id="diachibh" type="text" style="width:335px;" name="diachibh"> 
                        </div> 
                        <div style="margin-top:2px;">
                        <label for="hsdtu" style="width:150px; ">HSD từ</label>
                        <input id="hsdtu" type="text" style="width:80px;" name="hsdtu"> 
                         <label for="hsdden" style="width:30px; ">đến</label>
                        <input id="hsdden" type="text" style="width:80px;" name="hsdden"> 
                        </div> 
                        <div style="margin-top:2px;">
                        <label for="ngaycap" style="width:150px; ">Ngày cấp</label>
                        <input id="ngaycap" type="text" style="width:80px;" name="ngaycap">                       
                        </div> 
                        </span>
                        <div>
                     <a style="margin-left:0px;   margin-bottom:1px;" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only fm-button-icon-left" id="new_bhyt" href="#">Thêm mới<span  class="ui-icon ui-icon-plusthick"></span></a>
                      <a style="margin-left:0px;   margin-bottom:1px;" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only fm-button-icon-left" id="edit_bhyt" href="#">Sửa<span  class="ui-icon ui-icon-pen"></span></a>
                        <a style="margin-left:0px;   margin-bottom:1px;" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only fm-button-icon-left" id="save_bhyt" href="#">Lưu<span  class="ui-icon ui-icon-disk"></span></a>
           
             
              
 		
            </div>
              </fieldset>
              
              
       	   </div>
    
    
    
    </div>
  </div>
   <div id="prowed3" >
        <a bindex="1" style="margin-left:0px;   margin-bottom:1px;" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only fm-button-icon-left" id="save" href="#" tabindex="14">Lưu[Ctrl+S]<span  class="ui-icon ui-icon-plusthick"></span></a>
      	<a bindex="2" tabindex="15"  style="margin-left:0px;   margin-bottom:1px;" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only " id="thuchien" href="#">Đã thực hiện</a>
        <a bindex="3" tabindex="16" style="margin-left:0px;   margin-bottom:1px;" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only fm-button-icon-left" id="chinhsua" href="#">Chỉnh sửa<span  class="ui-icon ui-icon-search"></span></a>
        <a bindex="4" style="margin-left:0px;   margin-bottom:1px;" class="ui-button ui-widget ui-state-default ui-corner-all fm-button-icon-left" id="inphieu" href="#">In phiếu<span  class="ui-icon ui-icon-search"></span></a>
        <a bindex="5" style="margin-left:0px;   margin-bottom:1px;" class="ui-button ui-widget ui-state-default ui-corner-all fm-button-icon-left" id="xemvain" href="#">Xem và in<span  class="ui-icon ui-icon-search"></span></a>
        <a bindex="6" style="margin-left:0px;   margin-bottom:1px;" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only " id="inphieudecal" href="#">In phiếu Decal</a>
        <a bindex="7" style="margin-left:0px;   margin-bottom:1px;" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" id="tamthu" href="#">Tạm thu</a>
        <a bindex="8" style="margin-left:0px;   margin-bottom:1px;" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only " id="dhsinhton1" href="#">Lấy dấu hiệu sinh tồn</span></a>
        <a bindex="9" style="margin-left:0px;   margin-bottom:1px;" class="ui-button ui-widget ui-state-default ui-corner-all fm-button-icon-left" id="chisinh" href="#">Chỉ định<span  class="ui-icon ui-icon-search"></span></a>
        <a bindex="10" style="margin-left:0px;   margin-bottom:1px;" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only " id="hentrakq" href="#">Hẹn trả KQ</a>
 		<a bindex="11" style="margin-left:0px;   margin-bottom:1px;" class="ui-button ui-widget ui-state-default ui-corner-all fm-button-icon-left" id="lichbacsy" href="#">Lịch bác sỹ<span  class="ui-icon ui-icon-search"></span></a>     
    	
     </div> 
 </div> 
 
 
     
    

</body>
</html> 

<script type="text/javascript">
window.dem=0;


<?php
		$data= new SQLServer;
	
		$params1=array('MaBenhVien');
		$get1=$data->query( "{call sp_SysVars_Select(?)}", $params1);
		$excute= new SQLServerResult($get1);
		$tam1= $excute->get_as_array();
		echo 'window.mabv="'.$tam1[0]['DefaultValue'].'";';
		echo 'window.oper="'.$_GET["oper"].'";';
		if($_GET["oper"]=='add'){	
		
			$params1=array($_GET["id_benhnhan"]);
			$get1=$data->query( "{call GD2_lichhenkham_byidbenhnhan(?)}", $params1);
			$excute= new SQLServerResult($get1);
			$tam2= $excute->get_as_array();
			if(count($tam2)>0){
				$idhenkham=$tam2[0]["ID_HenKham"];
					echo 'var BSYeuCau="'.$tam2[0]["ID_BSYeuCau"].'";';	
			}else{
				$idhenkham=0;
					echo 'var BSYeuCau="0";';	
			}
			echo 'window.id_benhnhan="'.$_GET["id_benhnhan"].'";';
			echo 'window.idluotkham="0";';	
			
			echo 'window.LoaiDoiTuongKham="0";';	
			echo 'var ID_GoiKhamChoCongTy="0";';	
			echo 'var ID_PhanLoaiKham="0";';	
			echo 'var CoXacDinhNhanThan="0";';
			echo 'var ID_NguoiThucHien="'.$_SESSION["user"]["id_user"].'";';	
			echo 'var ThoiGianVaoKham="0";';	
			echo '$("#ngay").val("'. date("H").':'.date("i").' '.date("d").'/'.date("m").'/'.date("y").'");';
			echo 'var BSLamSang="0";';	
			echo 'var SanSangGoiVaoKham="1";';	
			echo 'var ID_NoiGioiThieu="0";';	
			echo 'var ID_HinhThucDen="0";';
			echo 'var LayDauHieuSinhTon="0";';
			echo 'var CoKhamLamSang="0";';
			echo 'var ID_PhongKhamVatLy="0";';
			echo 'window.ID_TrangThai="0";';
			echo 'window.id_bhyt="0";';
			echo 'window.TrangThaiKham="0";';
		}else{
			echo 'window.id_ttluotkham="'.$_GET["id_ttluotkham"].'";';		
			$idhenkham=0;
			$params=array($_GET["id_ttluotkham"]);
			$get=$data->query( "{call Gd2_ThongTinLuotKham_SelectAllByID_LuotKham(?)}", $params);
			$excute= new SQLServerResult($get);
			$tam= $excute->get_as_array();
			//print_r($tam);ngay
			echo 'window.idluotkham="'.$tam[0]['ID_LuotKham'].'";';	
			echo 'window.id_benhnhan="'.$tam[0]['ID_BenhNhan'].'";';		
			echo 'window.LoaiDoiTuongKham="'.$tam[0]['LoaiDoiTuongKham'].'";';	
			echo 'var ID_GoiKhamChoCongTy="'.$tam[0]['ID_GoiKhamChoCongTy'].'";';	
			echo 'var ID_PhanLoaiKham="'.$tam[0]['ID_PhanLoaiKham'].'";';	
			echo 'var CoXacDinhNhanThan="'.$tam[0]['CoXacDinhNhanThan'].'";';
			echo 'var ID_NguoiThucHien="'.$tam[0]['ID_NguoiThucHien'].'";';	
			echo 'var ThoiGianVaoKham="'.$tam[0]['ThoiGianVaoKham']->format('d/m/y H:i').'";';	
			echo '$("#ngay").val("'.$tam[0]['ThoiGianVaoKham']->format('d/m/y H:i').'");';
			echo 'var BSYeuCau="'.$tam[0]['BSYeuCau'].'";';	
			echo 'var BSLamSang="'.$tam[0]['BSLamSang'].'";';	
			echo 'var SanSangGoiVaoKham="'.$tam[0]['SanSangGoiVaoKham'].'";';	
			echo 'var ID_NoiGioiThieu="'.$tam[0]['ID_NoiGioiThieu'].'";';	
			echo 'var ID_HinhThucDen="'.$tam[0]['ID_HinhThucDen'].'";';
			echo 'var LayDauHieuSinhTon="'.$tam[0]['LayDauHieuSinhTon'].'";';
			echo 'var CoKhamLamSang="'.$tam[0]['CoKhamLamSang'].'";';
			echo 'var ID_PhongKhamVatLy="'.$tam[0]['ID_PhongKhamVatLy'].'";';
			echo 'window.ID_TrangThai="'.$tam[0]['ID_TrangThai'].'";';
			echo 'window.id_bhyt="'.$tam[0]['ID_The'].'";';
			echo 'window.TrangThaiKham="'.$tam[0]['TrangThaiKham'].'";';

		}
		?>
	
		
 jQuery(document).ready(function() {
	   
	   $("#hsdtu").datepicker({
	showWeek: true,
	defaultDate: "+1w",
	changeMonth: true,
	changeYear: true,
	numberOfMonths: 1,
	showButtonPanel: true,
	dateFormat: $.cookie("ngayJqueryUi"),
	
	onClose: function(selectedDate) {
		$("#hsdden").datepicker("option", "minDate", selectedDate);
	},
	onSelect: function(dat, inst) {
	}
});
$("#hsdden").datepicker({
	showWeek: true,
	defaultDate: "+1w",
	changeMonth: true,
	changeYear: true,
	numberOfMonths: 1,
	showButtonPanel: true,
	gotoCurrent:true,
	dateFormat: $.cookie("ngayJqueryUi"),	
	onClose: function(selectedDate) {
		$("#hsdtu").datepicker("option", "maxDate", selectedDate);
	},
	onSelect: function(dat, inst) {
	}
});

$("#ngaycap").datepicker({
	showWeek: true,
	defaultDate: "+1w",
	changeMonth: true,
	changeYear: true,
	numberOfMonths: 1,
	showButtonPanel: true,
	gotoCurrent:true,
	dateFormat: $.cookie("ngayJqueryUi"),	
	onClose: function(selectedDate) {
		$("#hsdtu").datepicker("option", "maxDate", selectedDate);
	},
	onSelect: function(dat, inst) {
	}
});


	$.dateEntry.setDefaults({spinnerImage: ''});
	$("#hsdtu, #hsdden").dateEntry({dateFormat: $.cookie("ngayDateEntry")});
	   
	   
	   $('#new_bhyt,save_bhyt,edit_bhyt').button();
	   
	openform_shortcutkey();		
	$('#thuchien,#save,#chinhsua,#inphieu,#xemvain,#inphieudecal,#tamthu,#dhsinhton1,#chisinh,#hentrakq,#lichbacsy,.button_goikham,#save_bhyt,#edit_bhyt,#new_bhyt').button();
	luu();
	them_bhyt();
	if(oper=='add'){		
		trangthai('add')
	}else if(oper=='edit'){
		trangthai('notedit')
	}

	 create_combobox_tam('#mabaohiem',create_bhyt,'bw','','data_bhyt&id_benhnhan=<?php 
	 if($_GET["oper"]=='add'){		 
		 echo $_GET["id_benhnhan"];
	 }else{
		 echo $tam[0]['ID_BenhNhan'];
	 }
	 
	 
	 ?>',id_bhyt);

	
	
	create_combobox_new('#doituongbhyt',create_doituongbhyt,'bw','','data_doituongbhyt',0);
    create_combobox_new('#noidkbd',create_noidkbd,'bw','','data_bhyt_nkdbd',0);
	 
		
		
	 create_combobox_new('#phanloai',create_grid,'bw','','data_phanloaikham',ID_PhanLoaiKham);
	 
	 create_combobox_new('#goikham',create_goikham,'bw','','data_goikhamsk',ID_GoiKhamChoCongTy);
	 create_combobox_new('#doituong',create_doituong,'bw','','',LoaiDoiTuongKham);
	 create_combobox_new('#bsyeucau',create_bs,'bw','','data_dsbacsyyeucau',BSYeuCau);
	 create_combobox_new('#nguoichidinh',create_nhanvien,'bw','','data_nhanvien',BSLamSang);
	 create_combobox_new('#nguoilapphieu',create_nguoilapphieu,'bw','','data_nhanvien',ID_NguoiThucHien);	
	 create_combobox_new('#nguoigioithieu',create_noigioithieu,'bw','','data_nguoiguoithieu',ID_NoiGioiThieu);
	 create_combobox_new('#trangthai',create_trangthainv,'bw','','',TrangThaiKham);
	 create_combobox_new('#pbvatly',create_grid,'bw','[]','',ID_PhongKhamVatLy);
	 create_combobox_new('#hinhthuc',create_hinhthucden,'bw','','data_hinhthucden',ID_HinhThucDen);
	 create_combobox_disable('#goikham');
	 jwerty.key('tab', false);
	 jwerty.key('shift+tab', false);			  
	 jwerty.key('shift+enter', false);
		 $('input[type=text],input[type=text_checkbox],input[type=checkbox], input[type=button],a').bind("keyup", function(e) {	
			if ($("input[type=text],input[type=checkbox], input[type=button],a").is(":focus")){					
				   if (jwerty.is("enter",e)||jwerty.is("tab",e)) { 
					 var tabindex = $(e.target).attr('tabindex');
					 window.tabindex_null=tabindex;
					 move_tabindex('next',tabindex,e)
				   }else if(jwerty.is("shift+tab",e)){
					 var tabindex = $(e.target).attr('tabindex');
					 window.tabindex_null=tabindex;
					 move_tabindex('pre',tabindex,e)
					 return false;
				  }else if(jwerty.is("←",e)){					
					var bindex = $(e.target).attr('bindex');					 
					move_bindex('pre',bindex,e)					
					return false;
				  }else if(jwerty.is("→",e)){
					var bindex = $(e.target).attr('bindex');					
					move_bindex('next',bindex,e)
					return false;
				 }
			 }
		})

	
	 
	 $.get( "resource.php?module=web_services&function=create_panel_luotkham&action=index&id_benhnhan="+window.id_benhnhan, function( data ) {
	  $( ".patient_info" ).html( data );
	  $( ".patient_info" ).css("width", $( "#patient_info" ).width()+"css");		  
	});
	$('#inphieu').click(function(){		
			 $.cookie("in_status", "print_direct"); 
			 dialog_report("Xem trước khi in",90,90,"u78787878975f","resource.php?module=report&view=<?=$modules?>&xemtruocin=0&action=taoluotkham&header=top&id_luotkham="+window.id_ttluotkham+"&type=report&id_form=10",'InPhieuKhamBenh');
			 $(".modalu78787878975f").dialog("close");
	})
	$('#xemvain').click(function(){
			$.cookie("in_status", "print_preview");
			dialog_report("Xem trước khi in",90,90,"u78787878975f","resource.php?module=report&view=<?=$modules?>&xemtruocin=1&action=taoluotkham&header=top&id_luotkham="+window.id_ttluotkham+"&type=report&id_form=10",'InPhieuKhamBenh');
			
	})
	jwerty.key('f10', false);
	$('body').keyup(function(e) {
		if (e.keyCode === 121) {
			$("#tamthu").click();
		}
	})
	$("#tamthu").click(function(){
		parent.postMessage('tamung;tam_ung;'+window.id_benhnhan+';'+window.id_ttluotkham+';;add','*');
	});
	$('#dhsinhton1').click(function(){	
		parent.postMessage("dsdauhieusinhton;", "*");	
	})	
	$('#chisinh').click(function(e) {
			parent.postMessage("chidinhkham;"+window.id_ttluotkham+";"+$('.profile_outer:first').text()+";"+window.id_benhnhan, "*");
   	});	
	$("#hentrakq").click(function(e){
		$.post('resource.php?module=web_services&function=get_link&action=index&folder=hen_tra_ket_qua:').done(function(data) {
			elem=1 + Math.floor(Math.random() * 1000000000);
			width=100;
			height=100;
			var folder= data.split(';');
			var links='resource.php?module=canlamsang&view=hen_tra_ket_qua&id_form='+folder[2]+"&idluotkham="+window.idluotkham+'&id_benhnhan='+window.id_benhnhan;				  			dialog_add_dm("Hẹn trả kết quả",width,height,elem,links);   
		})					  
	}) ;
	if(CoXacDinhNhanThan==0){
		$('#nhanthan').prop('checked',false)
	}else{
		$('#nhanthan').prop('checked',true)
	}
	if(SanSangGoiVaoKham==0){
		 $('#comat').prop('checked',false)
	}else{
		$('#comat').prop('checked',true)
	}
		 
		 if(LayDauHieuSinhTon==0){
			
			$('#dhsinhton').prop('checked',false) 
		 }else{
			$('#dhsinhton').prop('checked',true)
		 }
		 
			$('#lamsang').val(CoKhamLamSang) ;
		 
		
	  phanquyen();
 })



function create_grid(elem,datalocal){	
	datalocal=jQuery.parseJSON(datalocal);	 
		 $(elem).jqGrid({
		datastr:datalocal,
		datatype: "jsonstring" ,	
		colNames:['Phân loại khám', 'Mô tả', '', '','',''],
		colModel:[			
			{name:'label',index:'label',hidden :false},
			{name:'TenQuanHuyen',index:'TenQuanHuyen',hidden :false},
			{name:'CoLaySinhHieu',index:'CoLaySinhHieu',hidden :true},
			{name:'CoXacDinhNhanThan',index:'CoXacDinhNhanThan',hidden :true},
			{name:'lamsang',index:'lamsang',hidden :true},
			{name:'ID_LoaiKhamLSMacDinh',index:'ID_LoaiKhamLSMacDinh',hidden :true},
			
		],
		hidegrid: false,
		gridview: true,
		loadonce: true,
		scroll: false,		 
		modal:true,	 
		rowNum: 200000,
		rowList:[],		
		sortname: 'ID_Thuoc',
		height:200,
		width: 470,
		viewrecords: true,	
		ignoreCase:true,
		shrinkToFit:true,
		cmTemplate: {sortable:false},
		sortorder: "desc",
		serializeRowData: function (postdata) { 	
		},
		onSelectRow: function(id){		
			
		if((oper=='edit' & dem>3)||(oper=='add')){
				var ids = $(elem).getDataIDs();
									var idcur = $(elem).jqGrid('getGridParam', 'selrow')	
									var columnNames = $(elem).jqGrid('getGridParam','colModel');
						 			ten = $(elem).jqGrid('getCell', idcur, columnNames[2].name);
									ten1 = $(elem).jqGrid('getCell', idcur, columnNames[3].name);	
									ten2 = $(elem).jqGrid('getCell', idcur, columnNames[4].name);	
									$('#lamsang').val(ten2);
									if(ten==0){
										$('#dhsinhton').prop('checked', false);
									}else{
										$('#dhsinhton').prop('checked', true);
										
									}
									if(ten1==0){
										$('#nhanthan').prop('checked', false);
									}else{
										$('#nhanthan').prop('checked', true);
									}
									if(id==25){
										 create_combobox_enable('#goikham');
									}else{
										 create_combobox_disable('#goikham');	
									}
			id_loaikham=$(elem).jqGrid('getCell', id,'ID_LoaiKhamLSMacDinh');
			//$('#pb_vatly1').setGridParam({datatype:'json',url:'resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_pbvatly&ds_tang='+ds_tang+'&ID_PhanLoaiKham='+id_loaikham}).trigger("reloadGrid");
			}
		},
		ondblClickRow: function (id, rowIndex, columnIndex) {
					
 		},
		loadComplete: function(data) {	
		grid_filter_enter(elem) ;
		dem++;
		},	  
		
	});	
			 
	 $(elem).jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false,defaultSearch:"cn"});
	 $(elem).jqGrid('bindKeys', {} );
		
}  
function create_Congty(elem,datalocal){	
		datalocal=jQuery.parseJSON(datalocal);	 
		 $(elem).jqGrid({
		datastr:datalocal,
		datatype: "jsonstring" ,	
		colNames:['Nickname', 'Họ và tên'],
		colModel:[			
			{name:'nickname',index:'nickname',hidden :false},
			{name:'hovaten',index:'hovaten',hidden :false},
			
		],
		hidegrid: false,
		gridview: true,
		loadonce: true,
		scroll: false,		 
		modal:true,	 
		rowNum: 200000,
		rowList:[],		
		height:200,
		width: 470,
		viewrecords: true,	
		ignoreCase:true,
		shrinkToFit:true,
		cmTemplate: {sortable:false},
		sortorder: "desc",
		serializeRowData: function (postdata) { 	
		},
		onSelectRow: function(id){		
		 							
		},
		loadComplete: function(data) {	
		grid_filter_enter(elem) ;
		
		},	  
		
	});	
			 
	 $(elem).jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false,defaultSearch:"cn"});
	 $(elem).jqGrid('bindKeys', {} );
		
}  
function create_bs(elem,datalocal){	
		datalocal=jQuery.parseJSON(datalocal);	 
		 $(elem).jqGrid({
		datastr:datalocal,
		datatype: "jsonstring" ,
		colNames:['Nickname', 'Họ và tên','Đang chờ',' Đang Khám','Xong','Lịch làm việc','Lịch hẹn khám',''],
		colModel:[			
			{name:'nickname',index:'nickname',hidden :false,width:'10%'},
			{name:'hovaten',index:'hovaten',hidden :false,width:'24%'},
			{name:'DangCho',index:'DangCho',hidden :false,width:'8%'},
			{name:'DangKham',index:'DangKham',hidden :false,width:'8%'},
			{name:'Xong',index:'Xong',hidden :false,width:'5%'},
			{name:'lichlamviciec',index:'lichlamviciec',hidden :false,width:'25%'},
			{name:'lichhenkham',index:'lichhenkham',hidden :false,width:'20%'},
			{name:'comat',index:'comat',hidden :true,width:'20%'},
			
		],
		hidegrid: false,
		gridview: true,
		loadonce: true,
		scroll: false,		 
		modal:true,	 
		rowNum: 200000,
		rowList:[],		
		sortname: 'ID_Thuoc',
		height:200,
		width: 800,
		viewrecords: true,	
		ignoreCase:true,
		shrinkToFit:true,
		cmTemplate: {sortable:false},
		sortorder: "desc",
		serializeRowData: function (postdata) { 	
		},
		onSelectRow: function(id){		
		//$(dialog).dialog( "close" );  							
		},
		ondblClickRow: function (id, rowIndex, columnIndex) {
					
 		},
		loadComplete: function(data) {	
		grid_filter_enter(elem) ;
				var ids = $(elem).getDataIDs();
				for(var i=0;i<ids.length;i++){		
				 var rowData = $(elem).getRowData(ids[i]);				
					if(rowData['comat']==0){
						//$(elem +' #'+ids[i]).css("color", "#333");
						$(elem +' #'+ids[i]).css("background", "#999");						
					}
				}
		},	  
		
	});	
			 
	 $(elem).jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false,defaultSearch:"cn"});
	 $(elem).jqGrid('bindKeys', {} );
		
}  
	
		function create_nhanvien(elem,datalocal){	
		datalocal=jQuery.parseJSON(datalocal);	 
		 $(elem).jqGrid({
		datastr:datalocal,
		datatype: "jsonstring" ,
		colNames:['Nickname', 'Họ và tên'],
		colModel:[			
			{name:'nickname',index:'nickname',hidden :false},
			{name:'hovaten',index:'hovaten',hidden :false},
		],
		hidegrid: false,
		gridview: true,
		loadonce: true,
		scroll: false,		 
		modal:true,	 
		rowNum: 200000,
		rowList:[],		
		height:200,
		width: 470,
		viewrecords: true,	
		ignoreCase:true,
		shrinkToFit:true,
		cmTemplate: {sortable:false},
		sortorder: "desc",
		serializeRowData: function (postdata) { 	
		},
		onSelectRow: function(id){		
		 							
		},
		loadComplete: function(data) {	
		grid_filter_enter(elem) ;
	
		},	  
		
	});	
			 
	 $(elem).jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false,defaultSearch:"cn"});
	 $(elem).jqGrid('bindKeys', {} );
		
}  
		function create_hinhthucden(elem,datalocal){	
		datalocal=jQuery.parseJSON(datalocal);	 
		 $(elem).jqGrid({
		datastr:datalocal,
		datatype: "jsonstring",
		colNames:['Hình thức đến'],
		colModel:[			
			{name:'nickname',index:'nickname',hidden :false},
			
			
		],
		hidegrid: false,
		gridview: true,
		loadonce: true,
		scroll: false,		 
		modal:true,	 
		rowNum: 200000,
		rowList:[],		
		height:100,
		width: 470,
		viewrecords: true,	
		ignoreCase:true,
		shrinkToFit:true,
		cmTemplate: {sortable:false},
		sortorder: "desc",
		serializeRowData: function (postdata) { 	
		},
		onSelectRow: function(id){		
		 							
		},
		loadComplete: function(data) {	
		grid_filter_enter(elem) ;
	
		},	  
		
	});	
			 
	 $(elem).jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false,defaultSearch:"cn"});
	 $(elem).jqGrid('bindKeys', {} );
		
}  
	function create_nguoilapphieu(elem,datalocal){	
	 $(elem).
		datalocal=jQuery.parseJSON(datalocal);	 
		 $(elem).jqGrid({
		datastr:datalocal,
		datatype: "jsonstring" ,	
		colNames:['Nickname', 'Họ và tên'],
		colModel:[			
			{name:'nickname',index:'nickname',hidden :false},
			{name:'hovaten',index:'hovaten',hidden :false},
			
		],
		hidegrid: false,
		gridview: true,
		loadonce: true,
		scroll: false,		 
		modal:true,	 
		rowNum: 200000,
		rowList:[],		
		sortname: 'ID_Thuoc',
		height:160,
		width: 470,
		viewrecords: true,	
		ignoreCase:true,
		shrinkToFit:true,
		cmTemplate: {sortable:false},
		sortorder: "desc",
		serializeRowData: function (postdata) { 	
		},
		onSelectRow: function(id){		
		//$(dialog).dialog( "close" );  							
		},
		ondblClickRow: function (id, rowIndex, columnIndex) {
					
 		},
		loadComplete: function(data) {	
		grid_filter_enter(elem) ;
	
		},	  
		
	});	
			 
	 $(elem).jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false,defaultSearch:"cn"});
	 $(elem).jqGrid('bindKeys', {} );
		
}  


	function create_noigioithieu(elem,datalocal){	
		datalocal=jQuery.parseJSON(datalocal);	 
		 $(elem).jqGrid({
		datastr:datalocal,	
		datatype: "jsonstring" ,
		colNames:['Người giới thiệu', 'Nơi giới thiệu','Địa chỉ','Điện thoại'],
		colModel:[			
			{name:'nickname',index:'nickname',hidden :false},
			{name:'hovaten',index:'hovaten',hidden :false},
			{name:'1',index:'1',hidden :false},
			{name:'2',index:'3',hidden :false},
			
		],
		hidegrid: false,
		gridview: true,
		loadonce: true,
		scroll: false,		 
		modal:true,	 
		rowNum: 200000,
		rowList:[],		
		sortname: 'ID_Thuoc',
		height:120,
		width: 470,
		viewrecords: true,	
		ignoreCase:true,
		shrinkToFit:true,
		cmTemplate: {sortable:false},
		sortorder: "desc",
		serializeRowData: function (postdata) { 	
		},
		onSelectRow: function(id){							
		},
		ondblClickRow: function (id, rowIndex, columnIndex) {					
 		},
		loadComplete: function(data) {		
		},	  		
	});			 	
	 $(elem).jqGrid('bindKeys', {} );		
}  


	function create_goikham(elem,datalocal){	
		datalocal=jQuery.parseJSON(datalocal);	 
		 $(elem).jqGrid({
		datastr:datalocal,	
		datatype: "jsonstring" ,
		colNames:['Tên đợt khám', 'Tên công ty'],
		colModel:[			
			{name:'nickname',index:'nickname',hidden :false},
			{name:'hovaten',index:'hovaten',hidden :false},
			
			
		],
		hidegrid: false,
		gridview: true,
		loadonce: true,
		scroll: false,		 
		modal:true,	 
		rowNum: 200000,
		rowList:[],		
		sortname: 'ID_Thuoc',
		height:120,
		width: 470,
		viewrecords: true,	
		ignoreCase:true,
		shrinkToFit:true,
		cmTemplate: {sortable:false},
		sortorder: "desc",
		serializeRowData: function (postdata) { 	
		},
		onSelectRow: function(id){							
		},
		ondblClickRow: function (id, rowIndex, columnIndex) {					
 		},
		loadComplete: function(data) {		
		},	  		
	});			 	
	 $(elem).jqGrid('bindKeys', {} );		
}  

	function create_doituong(elem,datalocal){	
		datalocal=jQuery.parseJSON('{"rows":[{"id":"Viện phí","cell":["Viện phí"]},{"id":"BHYT","cell":["Bảo hiểm y tế"]}]} ');	 
		 $(elem).jqGrid({
		datastr:datalocal,	
		datatype: "jsonstring" ,
		colNames:['Đối tượng khám'],
		colModel:[			
			{name:'doituong',index:'nickname',hidden :false},		
		],
		hidegrid: false,
		gridview: true,
		loadonce: true,
		scroll: false,		 
		modal:true,	 
		rowNum: 200000,
		rowList:[],		
		sortname: 'ID_Thuoc',
		height:120,
		width: 470,
		viewrecords: true,	
		ignoreCase:true,
		shrinkToFit:true,
		cmTemplate: {sortable:false},
		sortorder: "desc",
		serializeRowData: function (postdata) { 	
		},
		onSelectRow: function(id){					
			if($('#doituong_grid').jqGrid('getCell', id, 'doituong')=='Viện phí'){
				create_combobox_disable('#mabaohiem');
				create_combobox_disable('#doituongbhyt');
				create_combobox_disable('#noidkbd');
				$("#diachibh").prop('disabled', true);
				$("#hsdtu").prop('disabled', true);
				$("#hsdden").prop('disabled', true);
				$("#ngaycap").prop('disabled', true);
				$('#new_bhyt,#edit_bhyt,#save_bhyt').button('disable');
			}else{
				
				if(id_bhyt==0){
					create_combobox_enable('#mabaohiem');
					create_combobox_enable('#doituongbhyt');
					create_combobox_enable('#noidkbd');
					$("#diachibh").prop('disabled', false);
					$("#hsdtu").prop('disabled', false);
					$("#hsdden").prop('disabled', false);
					$("#ngaycap").prop('disabled', false);
					$('#new_bhyt,#edit_bhyt').button('disable');
					$('#save_bhyt').button('enable');
					window.bhyt_ac='add';
				
				}else{
					create_combobox_enable('#mabaohiem');
					create_combobox_enable('#doituongbhyt');
					create_combobox_enable('#noidkbd');
					$("#diachibh").prop('disabled', false);
					$("#hsdtu").prop('disabled', false);
					$("#hsdden").prop('disabled', false);
					$("#ngaycap").prop('disabled', false);
					$('#new_bhyt,#edit_bhyt').button('enable');
					$('#save_bhyt').button('disable');
				}
			}
		},
		ondblClickRow: function (id, rowIndex, columnIndex) {					
 		},
		loadComplete: function(data) {		
		},	  		
	});			 	
	 $(elem).jqGrid('bindKeys', {} );		
}  




	function create_noigioithieu(elem,datalocal){	
		datalocal=jQuery.parseJSON(datalocal);	 
		 $(elem).jqGrid({
		datastr:datalocal,	
		datatype: "jsonstring" ,
		colNames:['Người giới thiệu', 'Nơi giới thiệu','Địa chỉ','Điện thoại'],
		colModel:[			
			{name:'nickname',index:'nickname',hidden :false},
			{name:'hovaten',index:'hovaten',hidden :false},
			{name:'1',index:'1',hidden :false},
			{name:'2',index:'3',hidden :false},
			
		],
		hidegrid: false,
		gridview: true,
		loadonce: true,
		scroll: false,		 
		modal:true,	 
		rowNum: 200000,
		rowList:[],		
		sortname: 'ID_Thuoc',
		height:120,
		width: 470,
		viewrecords: true,	
		ignoreCase:true,
		shrinkToFit:true,
		cmTemplate: {sortable:false},
		sortorder: "desc",
		serializeRowData: function (postdata) { 	
		},
		onSelectRow: function(id){							
		},
		ondblClickRow: function (id, rowIndex, columnIndex) {					
 		},
		loadComplete: function(data) {		
		},	  		
	});			 	
	 $(elem).jqGrid('bindKeys', {} );		
}  


	function create_trangthainv(elem,datalocal){	
		datalocal=jQuery.parseJSON('{"rows":[{"id":"1","cell":["Đúng tuyến"]},{"id":"2","cell":["Có giấy chuyển viện"]},{"id":"3","cell":["Trái tuyến"]},{"id":"4","cell":["Cấp cứu"]}]} ');	 
		 $(elem).jqGrid({
		datastr:datalocal,	
		datatype: "jsonstring" ,
		colNames:['Đối tượng khám'],
		colModel:[			
			{name:'doituong',index:'nickname',hidden :false},		
		],
		hidegrid: false,
		gridview: true,
		loadonce: true,
		scroll: false,		 
		modal:true,	 
		rowNum: 200000,
		rowList:[],		
		sortname: 'ID_Thuoc',
		height:120,
		width: 470,
		viewrecords: true,	
		ignoreCase:true,
		shrinkToFit:true,
		cmTemplate: {sortable:false},
		sortorder: "desc",
		serializeRowData: function (postdata) { 	
		},
		onSelectRow: function(id){							
		},
		ondblClickRow: function (id, rowIndex, columnIndex) {					
 		},
		loadComplete: function(data) {		
		},	  		
	});			 	
	 $(elem).jqGrid('bindKeys', {} );		
}  



function trangthai(trangthai){
	if(trangthai=='add'){	
		 create_combobox_enable('#phanloai');	
		 create_combobox_disable('#goikham');
		 create_combobox_enable('#doituong');
		 create_combobox_enable('#bsyeucau');
		 create_combobox_enable('#nguoichidinh');
		 create_combobox_enable('#nguoilapphieu');
		 create_combobox_enable('#nguoigioithieu');
		 create_combobox_enable('#trangthai');
		 create_combobox_enable('#hinhthuc');
		 create_combobox_enable('#pbvatly');
		 	
		$('#save,#chinhsua,#inphieu,#xemvain,#inphieudecal,#tamthu,#dhsinhton1,#chisinh,#hentrakq,#lichbacsy').button('disable');
		$('#thuchien').button('enable');
		setTimeout(function(){
			$('#phanloai').focus();
			},300)
		
	}else if(trangthai=='notedit'){
		$('#chinhsua,#inphieu,#xemvain,#inphieudecal,#tamthu,#dhsinhton1,#chisinh,#hentrakq,#lichbacsy').button('enable');
		$('#thuchien,#save').button('disable');
		 create_combobox_disable('#phanloai');	
		 create_combobox_disable('#goikham');
		 create_combobox_disable('#doituong');
		 create_combobox_disable('#bsyeucau');
		 create_combobox_disable('#nguoichidinh');
		 create_combobox_disable('#nguoilapphieu');
		 create_combobox_disable('#nguoigioithieu');
		 create_combobox_disable('#trangthai');
		 create_combobox_disable('#hinhthuc');
		 create_combobox_disable('#pbvatly');
		 $('#chinhsua').focus();
	}else if(trangthai=='edit'){
		$('#save,#inphieu,#xemvain,#inphieudecal,#tamthu,#dhsinhton1,#chisinh,#hentrakq,#lichbacsy').button('enable');
		$('#thuchien,#chinhsua').button('disable');
		 create_combobox_enable('#phanloai');	
		 create_combobox_enable('#goikham');
		 create_combobox_enable('#doituong');
		 create_combobox_enable('#bsyeucau');
		 create_combobox_enable('#nguoichidinh');
		 create_combobox_enable('#nguoilapphieu');
		 create_combobox_enable('#nguoigioithieu');
		 create_combobox_enable('#trangthai');
		 create_combobox_enable('#hinhthuc');
		 create_combobox_enable('#pbvatly');
		 $('#phanloai').focus();
	}
	
	else if(trangthai=='hoantat'){
		$('#save,#chinhsua,#inphieu,#thuchien,#inphieudecal,#tamthu,#dhsinhton1,#chisinh,#hentrakq').button('disable');
		$('#xemvain,#lichbacsy').button('enable');
		 create_combobox_disable('#phanloai');	
		 create_combobox_disable('#goikham');
		 create_combobox_disable('#doituong');
		 create_combobox_disable('#bsyeucau');
		 create_combobox_disable('#nguoichidinh');
		 create_combobox_disable('#nguoilapphieu');
		 create_combobox_disable('#nguoigioithieu');
		 create_combobox_disable('#trangthai');
		 create_combobox_disable('#hinhthuc');
		 create_combobox_disable('#pbvatly');
		 $('#chinhsua').focus();
	}
}


function luu(){
	$('#thuchien').click(function(){
		if($("#phanloai_hidden").val()==''){
			$("#phanloai").focus();
		}else{
			window.datatosend = '{';
			window.datatosend+='"phanloai":'+JSON.stringify($("#phanloai_hidden").val())+'';		
			window.datatosend+=',"goikham":'+JSON.stringify($('#goikham_hidden').val())+'';
			window.datatosend+=',"doituong":'+JSON.stringify($('#doituong_hidden').val())+'';
			window.datatosend+=',"bsyeucau":'+JSON.stringify($('#bsyeucau_hidden').val())+'';
			window.datatosend+=',"nguoichidinh":'+JSON.stringify($('#nguoichidinh_hidden').val())+'';
			window.datatosend+=',"nguoilapphieu":'+JSON.stringify($('#nguoilapphieu_hidden').val())+'';
			window.datatosend+=',"nguoigioithieu":'+JSON.stringify($('#nguoigioithieu_hidden').val())+'';
			window.datatosend+=',"trangthai":'+JSON.stringify($('#trangthai_hidden').val())+'';
			window.datatosend+=',"pbvatly":'+JSON.stringify($('#pbvatly_hidden').val())+'';
			window.datatosend+=',"hinhthuc":'+JSON.stringify($('#hinhthuc_hidden').val())+'';
			window.datatosend+=',"dhsinhton":'+JSON.stringify($('#dhsinhton').is(':checked'))+'';
			window.datatosend+=',"comat":'+JSON.stringify($('#comat').is(':checked'))+'';
			window.datatosend+=',"nhanthan":'+JSON.stringify($('#nhanthan').is(':checked'))+'';
			window.datatosend+=',"lamsang":'+JSON.stringify($('#lamsang').val())+'';
			window.datatosend+=',"id_thebhyt":'+JSON.stringify(window.id_bhyt)+'';
			window.datatosend+='}';
			datatosend= jQuery.parseJSON(datatosend);
			if(window.id_bhyt==0 && $('#doituong_hidden').val()=='BHYT'){
				alert('lượt khám bhyt bắt buộc nhập thẻ bhyt')
			}else{	
				$.post("resource.php?module=<?=$modules?>&view=<?=$view?>&action=controller&hienmaloi=2&idhenkham=<?=$idhenkham?>&id_benhnhan="+window.id_benhnhan+"&oper=add",datatosend).done(function(data) {
				var id_thongtinluotkham =data.split(';');
				if(id_thongtinluotkham[0]==''){
					tooltip_message("Lưu thành công");
					parent.postMessage("taoluotkham_thanhcong;"+id_thongtinluotkham[1]+";"+window.id_benhnhan, "*");				
					window.id_ttluotkham=id_thongtinluotkham[1];
					window.oper='edit';				
					$('#inphieu').focus();
				}	
				})
				trangthai('notedit');
			}
		
		}
		
		})
		$('#chinhsua').click(function(){
			
		trangthai('edit');
		$('#phanloai').focus();
		$('#phanloai').select();
		})
		$('#save').click(function(){
			window.datatosend = '{';
			window.datatosend+='"phanloai":'+JSON.stringify($("#phanloai_hidden").val())+'';		
			window.datatosend+=',"goikham":'+JSON.stringify($('#goikham_hidden').val())+'';
			window.datatosend+=',"doituong":'+JSON.stringify($('#doituong_hidden').val())+'';
			window.datatosend+=',"bsyeucau":'+JSON.stringify($('#bsyeucau_hidden').val())+'';
			window.datatosend+=',"nguoichidinh":'+JSON.stringify($('#nguoichidinh_hidden').val())+'';
			window.datatosend+=',"nguoilapphieu":'+JSON.stringify($('#nguoilapphieu_hidden').val())+'';
			window.datatosend+=',"nguoigioithieu":'+JSON.stringify($('#nguoigioithieu_hidden').val())+'';
			window.datatosend+=',"trangthai":'+JSON.stringify($('#trangthai_hidden').val())+'';
			window.datatosend+=',"pbvatly":'+JSON.stringify($('#pbvatly_hidden').val())+'';
			window.datatosend+=',"hinhthuc":'+JSON.stringify($('#hinhthuc_hidden').val())+'';
			window.datatosend+=',"dhsinhton":'+JSON.stringify($('#dhsinhton').is(':checked'))+'';
			window.datatosend+=',"comat":'+JSON.stringify($('#comat').is(':checked'))+'';
			window.datatosend+=',"nhanthan":'+JSON.stringify($('#nhanthan').is(':checked'))+'';
			window.datatosend+=',"lamsang":'+JSON.stringify($('#lamsang').val())+'';
			window.datatosend+=',"id_thebhyt":'+JSON.stringify(window.id_bhyt)+'';
			window.datatosend+='}';
			datatosend= jQuery.parseJSON(datatosend);
			trangthai('notedit');
		$.post("resource.php?module=<?=$modules?>&view=<?=$view?>&action=controller&id_ttluotkham="+window.id_ttluotkham+"&oper=edit",datatosend).done(function(data) {
			
			if($.trim(data)==''){
				tooltip_message("Sữa thành công");			
				$('#inphieu').focus();				
			}
		});	
		
		})

}


function move_bindex(tam,bindex,e){				  
		if(tam=='next'){
			bindex++;
		}else{
			bindex--;
		}	   
		if($('[bindex=' +bindex + ']').prop('disabled')){				 	
		    move_bindex(tam,bindex,e);
		}else{				
			$('[bindex=' +  bindex + ']').focus();
			return false;
		}
  }
  
  
  
  
  
  
  
  
function create_doituongbhyt(elem,datalocal){	
	datalocal=jQuery.parseJSON(datalocal);	 
		$(elem).jqGrid({
		datastr:datalocal,
		datatype: "jsonstring" ,	
		colNames:['Mã đối tượng', 'Tên đối tượng'],
		colModel:[			
			{name:'ma_dt',index:'ma_dt',hidden :false},
			{name:'ten_dt',index:'ten_dt',hidden :false},
		
			
		],
		hidegrid: false,
		gridview: true,
		loadonce: true,
		scroll: false,		 
		modal:true,	 
		rowNum: 200000,
		rowList:[],		
		sortname: 'ID_Thuoc',
		height:200,
		width: 470,
		viewrecords: true,	
		ignoreCase:true,
		shrinkToFit:true,
		cmTemplate: {sortable:false},
		sortorder: "desc",
		serializeRowData: function (postdata) { 	
		},
		onSelectRow: function(id){	
			/* var rowData = $(elem).getRowData(id);			
			$('#doituongbhyt').val(id);
			$('#doituongbhyt1').val(rowData['ten_dt']);*/
		},
		ondblClickRow: function (id, rowIndex, columnIndex) {
					
 		},
		loadComplete: function(data) {		
		},	  
		
	});	
			 
	 $(elem).jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false,defaultSearch:"cn"});
	 $(elem).jqGrid('bindKeys', {} );
		
}    
 
 
 function create_noidkbd(elem,datalocal){	
	datalocal=jQuery.parseJSON(datalocal);	 
		$(elem).jqGrid({
		datastr:datalocal,
		datatype: "jsonstring" ,	
		colNames:['Mã KCB ban đầu', 'Tên KCB ban đầu'],
		colModel:[			
			{name:'Ma_KCB_BanDau',index:'Ma_KCB_BanDau',hidden :false,width:'30%'},
			{name:'Ten_KCB_BanDau',index:'Ten_KCB_BanDau',hidden :false,width:'70%'},
		
			
		],
		hidegrid: false,
		gridview: true,
		loadonce: true,
		scroll: 1,		 
		modal:true,	 
		rowNum: 100,
		rowList:[],		
		sortname: 'ID_Thuoc',
		height:200,
		width: 470,
		viewrecords: true,	
		ignoreCase:true,
		shrinkToFit:true,
		cmTemplate: {sortable:false},
		sortorder: "desc",
		serializeRowData: function (postdata) { 	
		},
		onSelectRow: function(id){	
			var rowData = $(elem).getRowData(id);			
		
			
			if(rowData['Ma_KCB_BanDau']!='48-195'){
				
			}
		},
		ondblClickRow: function (id, rowIndex, columnIndex) {
					
 		},
		loadComplete: function(data) {		
		},	  
		
	});	
			 
	 $(elem).jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false,defaultSearch:"cn"});
	 $(elem).jqGrid('bindKeys', {} );
		
}
  
  
  
function create_bhyt(elem,datalocal){	
	datalocal=jQuery.parseJSON(datalocal);	 
		$(elem).jqGrid({
		datastr:datalocal,
		datatype: "jsonstring" ,	
		colNames:['Số thẻ', 'Địa chỉ', 'Ma_KCB_BanDau', 'HanSD_TuNgay','HanSD_DenNgay','NgayCap'],
		colModel:[			
			{name:'SoThe',index:'SoThe',hidden :false},
			{name:'DiaChiTheBHYT',index:'DiaChiTheBHYT',hidden :false},
			{name:'Ma_KCB_BanDau',index:'Ma_KCB_BanDau',hidden :false},
			{name:'HanSD_TuNgay',index:'HanSD_TuNgay',hidden :false},
			{name:'HanSD_DenNgay',index:'HanSD_DenNgay',hidden :false},
			{name:'NgayCap',index:'NgayCap',hidden :false},
			
		],
		hidegrid: false,
		gridview: true,
		loadonce: true,
		scroll: false,		 
		modal:true,	 
		rowNum: 200000,
		rowList:[],		
		sortname: 'ID_Thuoc',
		height:200,
		width: 470,
		viewrecords: true,	
		ignoreCase:true,
		shrinkToFit:true,
		cmTemplate: {sortable:false},
		sortorder: "desc",
		serializeRowData: function (postdata) { 	
		},
		onSelectRow: function(id){	
			 var rowData = $(elem).getRowData(id);				
			 window.id_bhyt=id;
			 window.bhyt_ac='edit';
			 $('#diachibh').val(rowData['DiaChiTheBHYT']);
			 $('#hsdtu').val(rowData['HanSD_TuNgay']);
			 $('#hsdden').val(rowData['HanSD_DenNgay']);
			 $('#ngaycap').val(rowData['NgayCap']);
			 
			 
			 
			 $('#mabh1').val(rowData['SoThe'].substring(0, 2));
			 $('#mabh2').val(rowData['SoThe'].substring(2, 3));
			 $('#mabh3').val(rowData['SoThe'].substring(3, 5));
			 $('#mabh4').val(rowData['SoThe'].substring(5, 7));
			 $('#mabh5').val(rowData['SoThe'].substring(7, 10));
			 $('#mabh6').val(rowData['SoThe'].substring(10, 15));
			 
			 var doituongbhyt_Index = $('#doituongbhyt_grid').jqGrid('getGridParam','_index');
			 var doituongbhyt_String = $('#doituongbhyt_grid').jqGrid('getGridParam','data')[doituongbhyt_Index[(rowData['SoThe'].substring(0, 3))]];
			 
			// $('#doituongbhyt_grid').jqGrid("setSelection",rowData['SoThe'].substring(0, 3), true);	
			 
			 $('#doituongbhyt').val(doituongbhyt_String['ma_dt']);
			 $('#doituongbhyt1').val(doituongbhyt_String['ten_dt']);
			 
			 	
			 var idToDataIndex = $('#noidkbd_grid').jqGrid('getGridParam','_index');
			 var noidkbd_String = $('#noidkbd_grid').jqGrid('getGridParam','data')[idToDataIndex[rowData['Ma_KCB_BanDau']]];			 
			 $('#noidkbd').val(noidkbd_String['Ma_KCB_BanDau']);
			 $('#noidkbd1').val(noidkbd_String['Ten_KCB_BanDau']);
			
			
		},
		ondblClickRow: function (id, rowIndex, columnIndex) {
					
 		},
		loadComplete: function(data) {		
				if(window.oper=='add'){
				
			}else{
			   var rowData = $(elem).getRowData(id_bhyt);				
			  // $('#mabaohiem').val(rowData['SoThe'])
			   $('#diachibh').val(rowData['DiaChiTheBHYT']);
			 $('#hsdtu').val(rowData['HanSD_TuNgay']);
			 $('#hsdden').val(rowData['HanSD_DenNgay']);
			 $('#ngaycap').val(rowData['NgayCap']);
			
			 //var idToDataIndex = $('#noidkbd_grid').jqGrid('getGridParam','_index');
			// var noidkbd_String = $('#noidkbd_grid').jqGrid('getGridParam','data')[idToDataIndex[rowData['Ma_KCB_BanDau']]];			 
			 //$('#noidkbd').val(noidkbd_String['Ma_KCB_BanDau']);
			 //$('#noidkbd1').val(noidkbd_String['Ten_KCB_BanDau']);
			}
		},	  
		
	});	
			 
	 $(elem).jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false,defaultSearch:"cn"});
	 $(elem).jqGrid('bindKeys', {} );
		
}  

function them_bhyt(){
	$('#new_bhyt').click(function(){
		$('#edit_bhyt,#new_bhyt').button('disable');
		$('#save_bhyt').button('enable');
		window.bhyt_ac='add';
		window.id_bhyt=0;		
		$('#container_bhyt1 input' ).val('')
		$('#mabaohiem').focus();
	})
	$('#edit_bhyt').click(function(){
		$('#edit_bhyt,#new_bhyt').button('disable');
		$('#save_bhyt').button('enable');
		window.bhyt_ac='edit';
	})
	$('#mabaohiem').keyup(function(e){
		if (jwerty.is('enter',e)||jwerty.is('tab',e)){
			if($('#mabaohiem').val().length<15){
				tooltip_message("Thẻ bảo hiểm không hợp lệ");
			}else{
				 var madoituong = $('#mabaohiem').val().substring(0, 3)		
				 ids =  $('#doituongbhyt_grid').jqGrid('getDataIDs');
				 flag=0
				 for (var i=0;i<ids.length;i++){				
					 if(madoituong.toUpperCase()==$('#doituongbhyt_grid').jqGrid('getCell', ids[i], 'ma_dt')){
						  $('#doituongbhyt').val($('#doituongbhyt_grid').jqGrid('getCell', ids[i], 'ma_dt'));
						  $('#doituongbhyt1').val($('#doituongbhyt_grid').jqGrid('getCell', ids[i], 'ten_dt'));
						  flag=1;
						  break;
					 }
				 }
				 if(flag==0){
					 tooltip_message("Thẻ bảo hiểm không hợp lệ");
				 }else{
					 $('#doituongbhyt').focus();
				 }			
			}
		}
	})
	
	$('#doituongbhyt').keyup(function(e){
		if (jwerty.is('enter',e)||jwerty.is('tab',e)){
			$('#noidkbd').focus()
		}
	})
	$('#noidkbd').keyup(function(e){
		if (jwerty.is('enter',e)||jwerty.is('tab',e)){
			$('#diachibh').focus()
		}
	})
	$('#diachibh').keyup(function(e){
		if (jwerty.is('enter',e)||jwerty.is('tab',e)){
			$('#hsdtu').focus()
		}
	})
	$('#hsdtu').keyup(function(e){
		if (jwerty.is('enter',e)||jwerty.is('tab',e)){
			$('#hsdden').focus()
		}
	})
	$('#hsdden').keydown(function(e){
		if (jwerty.is('enter',e)||jwerty.is('tab',e)){
			$('#ngaycap').focus()
		}
	})
	$('#ngaycap').keydown(function(e){
		if (jwerty.is('enter',e)||jwerty.is('tab',e)){
			$('#save_bhyt').focus()
		}
	})
	
	$('#save_bhyt').click(function(e){
		$('#save_bhyt').button('disable');
			window.databhyt = '{';
			window.databhyt+='"mabh":'+JSON.stringify($("#mabaohiem").val().toUpperCase());		
			window.databhyt+=',"noidkbd":'+JSON.stringify($('#noidkbd').val());
			window.databhyt+=',"diachibh":'+JSON.stringify($('#diachibh').val())+'';
			window.databhyt+=',"hsdtu":'+JSON.stringify($('#hsdtu').val())+'';
			window.databhyt+=',"hsdden":'+JSON.stringify($('#hsdden').val())+'';
			window.databhyt+=',"ngaycap":'+JSON.stringify($('#ngaycap').val())+'';		
			window.databhyt+=',"idbh":'+JSON.stringify(window.id_bhyt)+'';
		
			window.databhyt+='}';
			databhyt= jQuery.parseJSON(databhyt);
			$.post("resource.php?module=<?=$modules?>&view=<?=$view?>&action=controller_bhyt&hienmaloi=2&id_benhnhan="+window.id_benhnhan+"&oper="+bhyt_ac,databhyt).done(function(data) {
			 create_combobox_tam('#mabaohiem',create_bhyt,'bw','','data_bhyt&id_benhnhan=<?php 
			 if($_GET["oper"]=='add'){		 
				 echo $_GET["id_benhnhan"];
			 }else{
				 echo $tam[0]['ID_BenhNhan'];
			 }
			 ?>',0);
			 $('#new_bhyt,#edit_bhyt').button('enable');
				
				if(window.bhyt_ac=='add'){			
					window.id_bhyt=$.trim(data).split(';')[1];
				}
				//alert(id_bhyt);
				window.bhyt_ac='edit';
			})
			
	})
	
}
  
</script>