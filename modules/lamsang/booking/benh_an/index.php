<!--Người viết: Trần Trương Chính-->
<?php
	if($_GET["id_benhnhan"]!=="undefined"){
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


	if($_GET["id_luotkham"]!=="undefined"){
		echo "<script type='text/javascript'>";
		echo "window.id_luotkham=".$_GET["id_luotkham"];
		echo "</script>";
	}
	else{
		echo "<script type='text/javascript'>";
		echo "window.id_luotkham=0";
		echo "</script>";
		}
?>	
 
<style>
	  th.ui-th-column div{
        word-wrap: break-word; /* IE 5.5+ and CSS3 */
        white-space: pre-wrap; /* CSS3 */
        white-space: -moz-pre-wrap; /* Mozilla, since 1999 */
        white-space: -pre-wrap; /* Opera 4-6 */
        white-space: -o-pre-wrap; /* Opera 7 */
        overflow: hidden;
        height: auto !important;
        vertical-align: middle;
    }
	 .fm-button{
		 box-shadow:0px 0px 5px #383838;
		 border:1px solid #919191;
	 }
	 .dialog_dm_thuoc,.dialog_dm_duongdung{
 					position:absolute;
					z-index:1000000;		 
					display:none;	
					box-shadow:0px 0px 6px #333	
					 }
	input[type=button].custom_button{
	/*	border:1px solid #000;*/
		border:none;
		background:none;
		/*border-radius:10px; -moz-border-radius:10px; -webkit-border-radius:10px;*/
		outline:  none;
		text-shadow:0 1px 0 rgba(255, 255, 255, 0.6);
		font-size:11px;
		height:17px!important;
		width:40px!important;
		text-decoration:underline;
	 
		/*box-shadow:0px 0px 2px 1px #a0a0a0;*/
	}
	input[type=button].custom_button:focus{	 
		outline:  none;
	} 
	:focus {outline:none;}
	::-moz-focus-inner {border:0;} 
	fieldset{
	   -webkit-border-radius: 5px;
	   -moz-border-radius: 5px;
	   border-radius: 5px;
	   width:21%;
	   box-shadow:0px 0px 3px 0px #a0a0a0;
	   border:1px solid #919191;
	   margin-top:2px;
	   margin-left:5px;
	   margin-right:0px;
	   display:inline-block;
	    margin-right: -4px;	 
	}
	fieldset input{
		background:none;
		text-align:center;
		box-shadow:0px 0px 3px 0px #a0a0a0;
	    border:1px solid #919191;	
		text-shadow:0 1px 0 rgba(255, 255, 255, 0.6)!important;
		display:table-cell;
		margin-left:3px;
		padding:0px;	
	}
	legend {
		background-color:#f5f3e5;
		text-shadow:0 1px 0 rgba(255, 255, 255, 0.6)!important;
		color:#000;		  
	}
	.ui-layout-west{
		
	}
	.ui-layout-center{
		
	}
	.ui-layout-east{
		
	}
	.top_form{
		width:100%;
		height:200px;
		margin-top:3px;
				
	}	 
	.diung,.tien_su_benh_nhan,.tien_su_gia_dinh{
		display:inline-block;	
		box-shadow:0px 0px 10px #a0a0a0;
		border:1px solid #919191;	
		vertical-align:top;
		height:148px;	
		width:100px;	 
	}
	.thongtin_tongthe{
		display:inline-block;
		box-shadow:0px 0px 10px #a0a0a0;
		border:1px solid #919191;
		vertical-align:top;
		width:845px;		
	}
	.thongtin_luotkham{
		display:inline-block;
		vertical-align:top;
		width:55%;
		overflow-y:scroll;
		margin-top:2px;
		height:38px;
				
	}
	
	
	.button_panel{
		display:inline-block;
		width:40%;
		padding-top:7px;
		 
	}
	.top_form textarea{		 
		height:151px;
		margin-left:2px;	
		margin-bottom:2px;		 
	}
	.top_form .title{
		padding-top:2px;
		padding-bottom:2px;
		text-align:center;
		font:12px/19px segoe ui, Tahoma, sans-serif!important;
		color:#000;		 
		font-weight:bold!important;		
	}
	.canlamsang{
		vertical-align:top;
		overflow-y:scroll;
		height:59px;
		border-top:1px solid #919191;		
		border-bottom:1px solid #919191;	
		 
	}
	.lamsang{
		vertical-align:top;
		overflow-y:scroll;
		height:27px;
		border-top:1px solid #919191;
		
		margin-top:3px;		 
	}
	.canlamsang div,.lamsang div,.canlamsang_luotkham div{
		display:inline-block;
		font-weight:bold;
		border:1px solid #919191;
		font-size:11px;
		margin-right:1px;
		margin-top:1px;
		
		width:134px;
		height:21px;
		text-align:center;
		vertical-align:top;
		padding-bottom:4px;	
		text-shadow:0 1px 0 rgba(255, 255, 255, 0.6);		 
		vertical-align:text-bottom;
		cursor:pointer;
	}
	.thongtin_dieutri div{
		display:inline-block;
		box-shadow:0px 0px 10px #a0a0a0;
		border:1px solid #919191;
		font-size:11px;
		margin-right:2px;
		margin-top:0px;
		padding:2px;
		width:114px;
		height:13px;
		text-align:center;
		vertical-align:top;
		margin-bottom:2px;	
		text-shadow:0 1px 0 rgba(255, 255, 255, 0.6);		 
		vertical-align:text-bottom;
		cursor:pointer;
	}
	.canlamsang_luotkham{		 
		display:inline-block;
		margin-top:1px;
		margin-left:2px;	 
	}
	.canlamsang_luotkham div{
		margin-top:	1px;		 	
		min-width:82px;
		max-width:140px;
		vertical-align: text-bottom;
		height:24px;			
	}
	.canlamsang_luotkham div span.topcls{
		display:block;	 	
	}	 
	.canlamsang div:hover,.lamsang div:hover,.canlamsang_luotkham div:hover{
		box-shadow:0px 0px 4px 2px #208ac8;
		border:1px solid #0463b4;	
	}
	.thongtin_dieutri{
		display:inline-block;
		vertical-align:top;
		width:99%;
		overflow-y:scroll;
		margin-top:2px;
		height:20px;
		margin-left:3px;		
	}
	textarea{
		padding-left:1px;
		padding-bottom:1px;
		border:1px solid #999;
	}
	  #menu { 
        width: 250px!important; 
        display:none; 
        position:absolute;  	 
        box-shadow:0px 0px 3px #333;
        z-index:100000;	 
        background: #ffffff;
    }
	#menu .disable{ 
      
        color: #CCCCCC;
    }
#gbox_rowed7{
	display:none;
}
</style>
<body>
<div id="dialog-thuochuacogiaban" title="Thông báo" style="display:none">
  <p><span class="ui-icon ui-icon-alert" style="float:left; margin:0 7px 20px 0;"></span>Thuốc <span id="_tenthuoc" style="font-weight:bold"></span> chưa có giá bán. Bạn có muốn kê không?</p>
	<input type="hidden" id="val_donvitinh" value="" >
    <input type="hidden" id="val_lathuoc" value="" >
    <input type="hidden" id="val_dongia" value="" >
    <input type="hidden" id="val_duongdung" value="" >
</div>

<ul id="menu" class="menu" style="display:none">
    
    <li class="chuyenthanhbschinh disable" ><a href="#">Chuyển quyền thành bác sỹ chính</a></li>
    <li class="chuyenbschinh"><a href="#">Chuyển bác sỹ chính</a></li>
    <li class="saothuoctoaphu"><a href="#">Sao thuốc từ toa phụ sang toa chính</a></li>
    <hr>
    <li class="saotoathuoc"><a href="#">Sao toa thuốc này</a></li>
    <hr>
    
    <li class="medical"><a href="#">Medical report</a></li>
  
</ul>


<div id="dialog_sothuoc" style="display:none">


</div>
 <div  class="dialog_dm_thuoc">
    <table id="DM_thuoc">
    </table>
    
 </div>
 
  <div  class="dialog_canhbaothuoc" style="display:none">
    
    
 </div>

 
  <div  class="dialog_dm_duongdung">
    <table id="dm_duongdung">
    </table>
    
 </div>
<div style="display:none">
    <table id="thuocmau" >
    </table>
    </div>
<div class="hoantat" style="display:none">
  <div class="form_row" style="vertical-align:top;font-size:16px" >
          <div>
          <label style="width:250px; ">0.Không đánh giá được</label>          
          </div><br>

          <div>
           <label style="width:250px; ">1.Tốt</label>      
          
          </div><br>
          <div>
           <label style="width:250px; ">2.Khá</label>   
         
          </div><br>
          <div>
          <label style="width:250px; ">3.Vừa</label> 
        
          </div><br>
          <div>
          <label style="width:250px; ">4.Kém</label>
          
          </div>
  </div>
   <div class="form_row" style="vertical-align:top;font-size:16px">
      <div>
      <label  style="width:150px; ">Người chấm</label>
      
      </div><br>
      <div>
      <label for="kinhte" style="width:150px; ">Điểm tín nhiệm:</label>
       <input id="kinhte" name="ten" style="width:130px;"type="text">
      </div><br>
      <div>
      <label for="thaido" style="width:150px; ">Điểm năng lực:</label>
       <input id="thaido" name="ten" style="width:130px;"type="text">
      </div><br>
      <div>
      <label for="hailong" style="width:150px; ">Điểm hài lòng:</label>
         <input id="hailong" name="ten" style="width:130px;"type="text">
      </div><br>
      <div>
      <label style="width:250px; ">Xin vui lòng nhập điểm số tù 0->4</label>
        
      </div>
  </div>
</div>


<div class="chandoanmau" style="display:none">
 	<div id="tabs">
  <ul>
    <li><a href="#tabs-1">Lịch sử chẩn đoán</a></li>
    <li><a href="#tabs-2">Danh mục chẩn đoán tạo sẵn</a></li>  
  </ul>
  <div id="tabs-1">   
 
  		 <label for="timlscd" style="width:150px; ">Nhập nội dung cần tìm kiếm:</label>
         <input id="timlscd" name="timlscd" style="width:130px;"type="text">
         
           <div>
           <table id="lichsuchandoan" >
           </table>
           </div>
   
  </div>
  <div id="tabs-2">  
  <div>  
  		<label for="timcdmau" style="width:150px; ">Nhập nội dung cần tìm kiếm:</label>
         <input id="timcdmau" name="timcdmau" style="width:130px;"type="text">
         <span id="check_box">
         <input type="radio" name="sex" checked value="1">Thông thường
		 <input type="radio" name="sex" value="0">Tất cả
         </span>
   </div>
   <table id="chandoanmau" >
   </table>
  </div>

</div>
</div>



 <div class="top_form ui-widget-content">
 	<div class="thongtin_tongthe">
 		<div class="patient_info"></div>  
        <div class="canlamsang"></div> 
        <div class="lamsang"></div>
    </div>
    <div class="tien_su_gia_dinh"  style="width: 135.333px;">
    	<div class="title ui-widget-header ">Tiền sử gia đình</div>
    	<textarea id="gia_dinh" style="height:115px;width:132px"></textarea>
    </div> 
    <div class="tien_su_benh_nhan"  style="width: 135.333px;">
    	<div class="title ui-widget-header">Tiền sử bệnh nhân</div>
   		<textarea id="benh_nhan" style="height:115px;width:132px"></textarea>
    </div> 
    <div class="diung">
    	<div class="title ui-widget-header"  style="width: 135.333px;">Dị ứng</div>
    	<textarea id="di_ung" style="height:115px;width:132px"></textarea>
    </div>
    <div class="thongtin_luotkham">
    	<div class="canlamsang_luotkham"></div> 
    </div>
    <div class="button_panel">  
     <a href="#" id="btn_batdau" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" style="margin-left:0px;  margin-bottom:1px; ">Bắt đầu</a>  
     <a href="#" id="btn_chidinhkham" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" style="margin-left:0px;  margin-bottom:1px; ">Chỉ định khám</a> 
     <a href="#" id="btn_dieutriphoihop" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" style="margin-left:0px;  margin-bottom:1px; ">Điệu trị phối hợp</a> 
     <a href="#" id="btn_hoantat" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" style="margin-left:0px;  margin-bottom:1px; ">Hoàn tất</a> 
     <a href="#" id="btn_luu" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" style="margin-left:0px;  margin-bottom:1px; ">Lưu</a>  
     <a href="#" id="btn_lammoi" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-icon-only" style="margin-left:0px;  margin-bottom:1px; "><span class="ui-icon ui-icon-refresh"></span></a>  		 
    </div>
 </div> 
 
 <div id="panel_main">    
 	      
    <div class="ui-widget-content ui-layout-west">
         <table id="rowed3" ></table>
         <div id="prowed3" ></div>             
    </div>         
    <div class="ui-widget-content  ui-layout-center" id="inner"> 
    
        <div class="ui-layout-north"> 
        	<table id="rowed4" ></table>
        	
        </div>
        <div class="ui-layout-center"> 
        	<table id="rowed5" ></table>
        	    
        </div>
         <div class="ui-layout-south"> 
        	<table id="khamicd10" ></table>
           
        </div>     	
    </div>
    <div class="ui-widget-content ui-layout-east"> 
     <div class="thongtin_dieutri">
    	<div class="dieutri_luotkham"></div> 
    </div>
  		<table id="rowed6" ></table>
        <div id="prowed6" ></div>
        <table id="rowed7"  style="display:none"></table>
        <div id="prowed7" style="display:none"></div>       
         <div class="toathuocmau"> 
         <div>
  		    <input class="custom_button xanh" type="button"  value="Chi tiết quota" style="height:22px;width:100px!important;">
            <input class="custom_button xanh" type="button" id="miengiam"  value="Miễn giảm" style="height:22px;width:80px!important;">
            <input class="custom_button xanh" type="button"  value="Ghi chú điều dưỡng" style="height:22px;width:150px!important;">
            </div>
            <div  style="padding-left:5px;">
            <label for="toanmau"  style="width:150px;text-align:left">Toa mẫu </label>
    
            <input id="toanmau1" type="text"  name="toanmau1" style="width:100px;display:none" >
           
            <input id="toanmau" name="toanmau"   type="text" style="width:200px;" >
          
            <label for="ylenh"  style="width:150px;text-align:left;margin-left:50px">Y lệnh </label>
    
           
           <input list="ylenh" name="ylenh">
<datalist id="ylenh">
  <option value="Nhập viện">
  <option value="Chuyển viện">
  <option value="Lấy thuốc đem về">

</datalist>
            </div>
             <div  style="padding-left:5px;">
            <label for="dando"  style="width:150px;text-align:left">Dặn dò </label>
            <input id="trathuoc" name="comat" checked   type="checkbox" value="1" >
            <label for="trathuoc"  style="width:150px;text-align:left">BN được trả thuốc </label>
            <input id="taikham" name="comat" checked   type="checkbox" value="1" >
            <label for="taikham"  style="width:150px;text-align:left">Tái khám</label>
            <input id="ngaytaikham" name="ngaytaikham"   type="text" style="width:100px;" >
            <label for="ndtaikham"  style="width:150px;text-align:right">Nội dung tái khám</label>
            </div>
            <div  style="padding-left:5px;">
            <textarea id="ghichu" rows="1" cols="35"> 
            </textarea>
            <textarea id="noidungtaikham" rows="1" cols="35">            
            </textarea>
            </div>
            <div style="padding-left:5px;">
            <a href="#" id="btn_dantoa" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" style="margin-left:0px;  margin-bottom:1px; ">Dán toa thuốc</a>  
            <a href="#" id="btn_saotoa" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" style="margin-left:0px;  margin-bottom:1px; ">Sao toa gần nhất</a>  
            <a href="#" id="btn_xemtoa" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" style="margin-left:0px;  margin-bottom:1px; ">Xem toa thuốc</a>  
            <a href="#" id="btn_intoa" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" style="margin-left:0px;  margin-bottom:1px; ">In toa thuốc</a>  
            <a href="#" id="btn_chinhsua" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" style="margin-left:0px;  margin-bottom:1px; ">Chỉnh sửa</a>  
            <a href="#" id="btn_phieu" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" style="margin-left:0px;   ">Phiếu vào viện</a>  
            </div>
    	</div>
    </div>   
  
          
</div>
</body>
</html>
<script type="text/javascript">
$(document).ready(function() {

	
	
	$('#btn_batdau,#btn_chidinhkham,#btn_dieutriphoihop,#btn_hoantat,#btn_luu,#btn_lammoi,#btn_dantoa,#btn_saotoa,#btn_xemtoa,#btn_intoa,#btn_chinhsua,#btn_phieu').button();
		$('#btn_batdau,#btn_chidinhkham,#btn_dieutriphoihop,#btn_hoantat,#btn_luu,#btn_dantoa,#btn_saotoa,#btn_xemtoa,#btn_intoa,#btn_chinhsua,#btn_phieu').button('disable');	
openform_shortcutkey();	

window.bd=0;
window.IsDoctor=<?=$_SESSION["user"]["IsDoctor"]?>;
window.user_login=<?=$_SESSION["user"]["id_user"]?>;
$("#kinhte").keyup(function(e) {
		if (e.keyCode === 13) {
			$("#thaido").focus();
		}
});
$("#thaido").keyup(function(e) {
		if (e.keyCode === 13) {
			$("#hailong").focus();
		}
});
$("#hailong").keyup(function(e) {
		if (e.keyCode === 13) {
			$(".n_btn1").focus();
		}
});




		$.post('resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_thongtinluotkham&id_benhnhan='+window.id_benhnhan).done(function(data){
					
					window.batdau_status=data;	
					if(data==2){
						$('#btn_batdau').button('enable');	
					}
					
					
		})
$("#btn_xemtoa").click(function(){
		$.cookie("in_status", "print_preview");
		  var tmp1 = $("#rowed3").jqGrid('getDataIDs');
		  var selr2 = jQuery('#rowed3').jqGrid('getGridParam','selrow'); 
          var rowData = $("#rowed3").getRowData(selr2);
		  if(tmp1.length){
		  dialog_report("Xem trước khi in",90,90,"u78787878975f","resource.php?module=report&view=<?=$modules?>&action=dstoathuoc_intoathuoc&header=top&id_luotkham="+rowData['ID_LuotKham']+"&type=report&id_form=10&tenin=TenGoc&check=",'ToaThuocHoaDon');
		  }else{
			  alert("Chưa có đơn thuốc"); 
	 }
})


		
 $(document).bind("mouseup", function(e) {
            $("#menu").hide();
        });
window.batdau_luotkham=0;

	$("#menu").menu();
	$("#btn_phieu").click(function(e){	
		elem=42432543543;

	  dialog_main("" , 80, 100, elem, "resource.php?module=lamsang&view=benh_an&action=phieuvaovien&header=top&type=report&id_form=10&id_benhnhan="+window.id_benhnhan)
		$(".frame_42432543543").css("width","1000px");
		
	});
	
	 $( "#dialog_sothuoc" ).dialog({
      resizable: false,
      height:'auto',
	  
	  autoOpen :false,
      modal: true,
      buttons: {
        "Yes": function() {		
		  var id_row = $('#rowed6').jqGrid('getGridParam', 'selrow') 
          $( this ).dialog( "close" );	
		  $('#'+id_row+'_CachDungLieuDung').focus();	  
        },
        "No": function() {
		  var id_row = $('#rowed6').jqGrid('getGridParam', 'selrow')
          $( this ).dialog( "close" );
		  $('#'+id_row+'_ID_Thuoc1').val('');
		  $('#'+id_row+'_ID_Thuoc1').focus();
        }
      },open: function () {
		  $(this).closest('.ui-dialog').find('.ui-dialog-buttonpane button:eq(0)').focus(); 
		  $(this).closest('.ui-dialog').find('.ui-dialog-buttonpane button:eq(0)').addClass('n_btn1');
		   $(this).closest('.ui-dialog').find('.ui-dialog-buttonpane button:eq(1)').addClass('n_btn2');
		 //var hasFocus = $('.n_btn1').is(':focus');
			  $('.ui-dialog').keyup(function(e) {
				  if (e.keyCode === 37){
					  $('.n_btn1').focus(); 
					  $('.n_btn2').focusout();
				  }
				  if (e.keyCode === 39){
					  $('.n_btn2').focus(); 
					  $('.n_btn1').focusout();
				  }
				})
		},close: function () {
			
		 $('.ui-dialog-titlebar-close').focus(); 
		 $('.ui-dialog-titlebar-close').click(); 
		}
    });
	
	 $( "#dialog-thuochuacogiaban" ).dialog({
      resizable: false,
      height:'auto',
	  
	  autoOpen :false,
      modal: true,
      buttons: {
        "Yes": function() {		
			$( this ).dialog( "close" );	
			 var duongdung_tam=$("#val_duongdung").val().split(',');
			$('#rowed6').jqGrid("setCell", $("#rowed6").jqGrid('getGridParam', 'selrow'), "id_dvt",$("#val_donvitinh").val() );
			$('#rowed6').jqGrid("setCell", $("#rowed6").jqGrid('getGridParam', 'selrow'), "lavattu",$("#val_lathuoc").val() );
			$('#rowed6').jqGrid("setCell", $("#rowed6").jqGrid('getGridParam', 'selrow'), "Gia",$("#val_dongia").val() );
			$('#dm_duongdung').jqGrid("setSelection",duongdung_tam[0], true);
			$('#rowed6 #'+id_rowed6_edit+'_ID_DuongDungThuoc').val(duongdung_tam[0]);	
			var columnNames = $('#dm_duongdung').jqGrid('getGridParam','colModel');
			ten = $('#dm_duongdung').jqGrid('getCell', duongdung_tam[0], columnNames[0].name);
			//alert(ten);
			$('#rowed6 #'+id_rowed6_edit+'_ID_DuongDungThuoc1').val(ten);
			$(".ui-dialog-titlebar-close").click();
        },
        "No": function() {
          $( this ).dialog( "close" );
		  $('#rowed6 #'+id_rowed6_edit+'_ID_Thuoc1').val('');
		  $('#rowed6 #'+id_rowed6_edit+'_ID_Thuoc1').focus();

        }
      },open: function () {
		  $(this).closest('.ui-dialog').find('.ui-dialog-buttonpane button:eq(0)').focus(); 
		  $(this).closest('.ui-dialog').find('.ui-dialog-buttonpane button:eq(0)').addClass('n_btn1');
		   $(this).closest('.ui-dialog').find('.ui-dialog-buttonpane button:eq(1)').addClass('n_btn2');
			  $('.ui-dialog').keyup(function(e) {
				  if (e.keyCode === 37){
					  $('.n_btn1').focus(); 
					  $('.n_btn2').focusout();
				  }
				  if (e.keyCode === 39){
					  $('.n_btn2').focus(); 
					  $('.n_btn1').focusout();
				  }
				})
		},close: function () {
			
		 $('.ui-dialog-titlebar-close').focus(); 
		 $('.ui-dialog-titlebar-close').click(); 
		}
    });
 $( "#dialog_canhbaothuoc" ).dialog({
      resizable: false,
      height:200,
	  minWidth:300,
	  autoOpen :false,
      modal: true,
      buttons: {
        "Yes": function() {
          $( this ).dialog( "close" );
		 
        },
        "No": function() {
			 
          $( this ).dialog( "close" );
		  
        }
      }
    });

$('#miengiam').click(function(){
	elem=42432543543;
	 rowData = $("#rowed3").getRowData( $("#rowed3").jqGrid('getGridParam', 'selrow'))
	  dialog_main("Miễn giảm: " , 95, 95, elem, 'resource.php?module=hanhchinh&view=mien_giam&id_form=230&id_donthuoc=' + rowData['ID_DonThuoc']+'&id_luotkham=' + rowData['ID_LuotKham'])
	
	})
window.ds_tang=$.cookie("dstang");
number_textbox('#kinhte');
number_textbox('#hailong');
number_textbox('#thaido');
$('#kinhte').keyup(function(e) {  
	$('#kinhte').val( minmax('#kinhte', 0, 4))
});
$('#hailong').keyup(function(e) {  
	$('#hailong').val( minmax('#hailong', 0, 4))
});
$('#thaido').keyup(function(e) {  
	$('#thaido').val( minmax('#thaido', 0, 4))
});
  create_lschuandoan();
$.post('resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_tiensu&idbenhnhan='+window.id_benhnhan).done(function(data) {
	if($.trim(data)!=''){
		data=data.split(';');		
		$('#gia_dinh').val(data[1]);
		$('#benh_nhan').val(data[0]);
		$('#di_ung').val(data[2]);
		window.id_tiensubenh=data[3];
	}else{
		window.id_tiensubenh=0;
	}
	  
	});
/*	$.post('resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_khamlamsang1&idbenhnhan='+window.id_benhnhan).done(function(data) {
	
	  
	});	*/
	
	
	$.post('resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_chuandoanmau').done(function(data) {	
		window.datacdmau=data;
	  create_chuandoanmau('#chandoanmau',data);	
	  grid_filter('#chandoanmau',2,1,$.parseJSON(datacdmau))
	});	
	$.post('resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_icd10').done(function(data) {	
		window.datacdmau=data;
	  create_icd10('#rowed_icd10',data);		 
	});	
	
	$('#check_box').click(function(){
		
		if($('input[name=sex]:checked', '#check_box').val()==0){
		$('#chandoanmau').jqGrid('setGridParam', { datatype: "jsonstring" ,datastr:$.parseJSON(datacdmau)}).trigger("reloadGrid");
		}else{
			grid_filter('#chandoanmau',2,1,$.parseJSON(datacdmau))
		}
		
		})
	
	 $(".hoantat").dialog({
		autoOpen:false,
        height: 320,
        width: 580,
        modal: true,
        title: 'Chấm điểm',
		draggable: true,
		resizable: false,
        stack: false,
		buttons: {
			"Lưu": function() {
				rowData = $("#rowed3").getRowData( $("#rowed3").jqGrid('getGridParam', 'selrow'));
				$.post('resource.php?module=<?=$modules?>&view=<?=$view?>&action=controller_chamdiem&thaido='+$('#thaido').val()+'&kinhte='+$('#kinhte').val()+'&hailong='+$('#hailong').val()+'&id_luotkham='+rowData['ID_LuotKham']+'&id_kham='+$("#rowed3").jqGrid('getGridParam', 'selrow')+'&id_donthuoc='+rowData['ID_DonThuoc']).done(function(){
				$( ".hoantat" ).dialog( "close" );
				$( "#btn_lammoi" ).trigger('click')
				})			  
			},
		},
		beforeClose: function( event, ui ) {
			 
		},open: function () {
		  $(this).closest('.ui-dialog').find('.ui-dialog-buttonpane button:eq(0)').addClass('n_btn1');
		},
        close: function(event, ui) {		 
			
        },

    });
	
	$(".chandoanmau").dialog({
		autoOpen:false,
        height: ($(window).height() / 100 * parseFloat(90)).toFixed(0),
        width: ($(window).width() / 100 * parseFloat(60)).toFixed(0),
        modal: true,
        title: 'Mẫu chẩn đoán',
		draggable: true,
		resizable: false,
        stack: false,
		buttons: {
			"Lưu": function() {			
				$( ".chandoanmau" ).dialog( "close" );
			}
		},
		open: function( event, ui ) {
			$("#lichsuchandoan").setGridWidth($('.ui-tabs').width()-50);
			$("#lichsuchandoan").setGridHeight($(".ui-tabs").height()-100);
			$("#chandoanmau").setGridWidth($('.ui-tabs').width()-50);
			$("#chandoanmau").setGridHeight($(".ui-tabs").height()-100);
		},
        close: function(event, ui) {		 
			
        },

    });
	
	$('#btn_hoantat').click(function(){
		$(".hoantat").dialog('open')
	})
	

	
	
	
	
				window.rowed3_select=0;
				window.rowed4_select=0;
	window.reload_status=0;
	create_combobox('#toanmau','#toanmau1','.toa_mau','#toa_mau',create_toamau,'','','','data_toathuocmau')
	create_thuocmau('#thuocmau')
	window.nickname=  $.ajax({                       
		url: "resource.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=2&tables=DM_NhanVien&id=NickName&name=ID_NhanVien",
		async:false                       
	}).responseText; 
	window.loaikham=  $.ajax({                       
		url: "resource.php?module=web_services&function=get_auto_edit_option_byid&action=index&term=ID_NhomCLS=20&status=2&tables=DM_LoaiKham&id=ID_LoaiKham&name=MaVietTat",
		async:false                       
	}).responseText;
		
	window.duongdung=  $.ajax({                       
		url: "resource.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=2&tables=DM_DuongDung&id=ID_DuongDung&name=TenDuongDung",
		async:false                       
	}).responseText;		 
	window.thuoc=  $.ajax({                       
		url: "resource.php?module=web_services&function=get_auto_edit_option_byid&action=index&term=&status=0&tables=DM_Thuoc&id=ID_Thuoc&name=TenBietDuoc",
		async:false                       
	}).responseText;	
	
	
	$("#panel_main").css("height",$(window).height()-200+"px");			 
	$("#panel_main").fadeIn(1000);
	ghichu_width=($(window).width()-850)/3-8;
	$(".tien_su_benh_nhan,.diung,.tien_su_gia_dinh").css("width",ghichu_width+"px"); 
	$(".top_form textarea").css("width",ghichu_width-10+"px");
	$.get( "resource.php?module=web_services&function=create_panel1&action=index&id_benhnhan="+window.id_benhnhan, function( data ) {
	  $( ".patient_info" ).html( data );
	  $( ".patient_info" ).css("width", $( "#patient_info" ).width()+"css");	
	   
	});
	
	
	$.post('resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_DMthuoc').done(function(data) {
	  create_Dm_thuoc_grid('#DM_thuoc',data)
	})
	$.post('resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_duondung').done(function(data) {	  create_dm_duongdung('#dm_duongdung',data)
	})
	create_layout();
	canlamsang();
	lamsang();
	saotaothuoc(); 
	btn_luu();
	create_lichsu_khamlamsang();
	create_lichsu_dienbienbenh();
	create_lichsu_chandoan();
	create_lichsu_donthuoc();
	//create_old_donthuoc(); // nam moi them dung de coppy thuoc
	//create_Dm_thuoc_grid();
	create_khamicd10();	
	resize_control();
	
	
	$('body').bind('keydown', function (e) {	
		var rowData = $("#rowed3").getRowData( $("#rowed3").jqGrid('getGridParam', 'selrow'));	
		jwerty.key("ctrl+shift+b", false);
		  if(jwerty.is("ctrl+shift+b",e)){
			  alert('ID_Kham='+ $("#rowed3").jqGrid('getGridParam', 'selrow')+'----------ID_Luotkham='+rowData['ID_LuotKham']+'----------ID_Benhnhan='+window.id_benhnhan);
		  }
		
		
		
		if((rowData['ID_trangthai']=='DangKham')){
				$('#rowed6_iladd').removeClass('ui-state-disabled')	 ;
				if (e.keyCode == '45') {
					//alert();
					savedRow = $('#rowed6').jqGrid("getGridParam", "savedRow");     
					if (savedRow && savedRow.length > 0) {			  
					
						
					}else{
					
						 $("#prowed6 .ui-icon-plus").click();
						  var ids = jQuery("#rowed6").jqGrid('getDataIDs');	
						  $('#'+ids[ids.length-1]+'_ID_Thuoc1').focus();// nam them khi nhấn phím Insert tạo dòng mới sẽ focus vào combo tên thuốc
					}
				}
		}
	});
		
	$("#rowed3,#rowed4,#rowed5").click(function(e) {
		grid_click_status=$(this).attr("id");
    }); 
	$(window).resize(function() {		 
		$("#panel_main").css("height",$(window).height()-240+"px");	
		resize_control();
		ghichu_width=($(window).width()-850)/3-8;
		$(".tien_su_benh_nhan,.diung,.tien_su_gia_dinh").css("width",ghichu_width+"px"); 
		$(".top_form textarea").css("width",ghichu_width-10+"px");		 
	})
	$('#DM_thuoc').click(function(){
		  $('#DM_thuoc').data('clicked', true);
		});
		
		
	batdau();
	lammoi();
	$( "#tabs" ).tabs();
	 	chidinhkham();
		dieutriphoihop();
		$('#prowed6').hide();
		//$('#rowed6_iladd,#rowed6_iledit').hide();
		$('#toanmau').val('Chọn toa mẫu')
 phanquyen();
})
 
function create_layout(){
	//alert("")
	$('#panel_main').layout({	
		resizerClass: 'ui-state-default'       
		,west: {
			resizable: true
		,	size:					"28%"
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
			resizable: true
		,	size:					"32%"
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
		,	size:					"51%"
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
	$('#inner').layout({
    	resizerClass: 'ui-state-default'
		 ,south: {
			resizable: true
		,	size:					"33%"
		,	resizerDblClickToggle: false 
		,	onresize_end:function () { 				 
				 resize_control();
			}
		,	onopen_end:function () { 
			 
			}
		,	onclose_end:function () { 				 
			 	 
			}
						
		}	
		 ,north: {
			resizable: true
		,	size:					"33%"
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
			resizable: true
		,	size:					"33%"
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
var rowed6_curentsel; 
function create_lichsu_donthuoc(){	
	 var searhicon = '<span class="ui-state-error ui-state-hover  " style="border:0"><span class="ui-icon  ui-icon-closethick" style="float: left; margin-right: .3em;"></span></span>';
	 mydata=[];	 
	 $("#rowed6").jqGrid({	
		data:mydata,	 
		datatype: "local",		 	
		colNames:['','','','Tên thuốc',"Giá bán", "Đ.dùng", "SL", "Tổng cộng", "C.dùng", "T.hiện"],
		colModel:[		
			{name:'id_dvt',index:'id_dvt',width:"10%",align:'center',hidden:true, editable: true },
			{name:'lavattu',index:'lavattu',width:"10%",align:'center',hidden:true, editable: true }  ,
			{name:'xoa',index:'xoa',width:"3%",align:'center',hidden:false, editable: false}  ,
			{name:'ID_Thuoc',index:'ID_Thuoc',width:"30%", align:'left',hidden:false, editable: true,edittype:"select",editoptions:{value:window.thuoc},formatter: "select",editrules:{custom: true, custom_func: function(value, colName) {
                          
                            return check_idthuoc(value,colName);

                        },formatter: function (cellValue, options, rowObject) {
                    
                            return searhicon
                        }}
		 }, 
			{name:'Gia',index:'Gia', width:"8%",align:'right',hidden:false,formatter:'number', formatoptions:{decimalPlaces: 0}, editable: false},
			{name:'ID_DuongDungThuoc',index:'ID_DuongDungThuoc', width:"20%",align:'left', editable: true,edittype:"select",editoptions:{value:window.duongdung},formatter: "select"},		 
			{name:'SoThuocThucXuat',index:'SoThuocThucXuat',width:"8%",formatter:currency_convert,align:'right',hidden:false, editable: true
			,/*editrules:{custom: true,required:true, custom_func: function(value, colName) {
                           var id_row = $('#rowed6').jqGrid('getGridParam', 'selrow')
                            return check_soluong(value,colName,id_row);

                        }}*/newgrid:true,func_grid:"check_soluong"},
			{name:'ThanhTien',index:'ThanhTien',width:"7%",align:'right',hidden:false,formatter:'number', formatoptions:{decimalPlaces: 1}, editable: false},
			{name:'CachDungLieuDung',index:'CachDungLieuDung',width:"8%",align:'right',hidden:false, editable: true},
			{name:'PhuongThucThucHien',index:'PhuongThucThucHien',width:"10%",align:'center',hidden:false, editable: true,edittype:"select",formatter:'select',editoptions:{value:"0:Hospital;1:Home;2:Seft",dataEvents: [{ type: 'change keyup', fn: function(e) {
				
				}}]}},	                        
		],
		inline_esc:false,
		column:["CachDungLieuDung"],
		func_column:["luoi_CachDungLieuDung"],	
		loadonce: true,
		local:true,
		scroll: false,		 
		modal:true,
        shrinkToFit: true,
		rowNum: 10000000,
		rowList:[],
		pager: '#prowed6',
		sortname: 'ID_LoaiKham',
		height:100,
		width:100,
		viewrecords: false,	
		ignoreCase:true,	
		sortorder: "asc",
	    grouping: true,
		afterInsertRow: function(rowid, aData){
    	},
		pgbuttons: false, // disable page control like next, back button
        pgtext: null, // disable pager text like 'Page 0 of 10'	 
		serializeRowData: function (postdata) { 	
		var rowData = $("#rowed6").getRowData( $("#rowed6").jqGrid('getGridParam', 'selrow'));
		postdata.id_donthuoc=$("#rowed3").getRowData( $("#rowed3").jqGrid('getGridParam', 'selrow'))['ID_DonThuoc'];
		postdata.id_dvt=rowData['id_dvt'];
		postdata.lavattu=rowData['lavattu'];
		postdata.Gia=rowData['Gia'];
		postdata.ID_DuongDungThuoc=rowData['ID_DuongDungThuoc'];
		postdata.ThanhTien =rowData['ThanhTien'];
		postdata.ds_tang =window.ds_tang;
		window.ds_tang
		//postdata.SoThuocThucXuat=rowData['SoThuocThucXuat'];
		//postdata.SoThuocThucXuat=rowData['SoThuocThucXuat'];
                return postdata;			
		},
		 onCellSelect: function (rowid,iCol,cellcontent,e) {
			 var rowData = $("#rowed3").getRowData( $("#rowed3").jqGrid('getGridParam', 'selrow'));	
			
        	if((iCol==2)&&(rowData['ID_trangthai']=='DangKham')){
              $('#rowed6').jqGrid('delRowData',rowid);
			  $.post('resource.php?module=<?=$modules?>&view=<?=$view?>&action=controller_donthuoc&id='+rowid+'&oper=del')
            }                      
        }, 
		onSelectRow: function(id){	
	 		$('#'+window.rowed6_select).removeClass("ui-state-highlight").attr({"aria-selected":"false", "tabindex" : "-1"});
			window.rowed6_select=id;
		},
		ondblClickRow: function (rowId, rowIndex, columnIndex) {
			var rowData = $("#rowed3").getRowData( $("#rowed3").jqGrid('getGridParam', 'selrow'));				
        	if((rowData['ID_trangthai']=='DangKham')){
				$("#prowed6 .ui-icon-pencil").click();	
			}
 		},
		loadComplete: function(data) {
		 	$('body').unbind('click')
		
		  var rowData = $("#rowed3").getRowData( $("#rowed3").jqGrid('getGridParam', 'selrow'));	
		  
			var ids = jQuery("#rowed6").jqGrid('getDataIDs');
		for(var i=0;i < ids.length;i++){	
			var cl = ids[i];
			be = '<span class="ui-state-error ui-state-hover  " style="border:0"><span class="ui-icon  ui-icon-closethick" style="float: left; margin-right: .3em;"></span></span>';
			jQuery("#rowed6").jqGrid('setRowData',ids[i],{xoa:be});
		}
		if((rowData['ID_trangthai']=='DangKham')){
				$("#prowed6 .ui-icon-plus").click();
			}
		},
		caption: "Đơn thuốc (Insert để thêm dòng)",
		editurl:'resource.php?module=<?=$modules?>&view=<?=$view?>&action=controller_donthuoc',
	});
	$("#rowed6").jqGrid('bindKeys', {"onEnter":function( rowid ) {						
					$("#prowed6 .ui-icon-pencil").click();				
			} } );
	$("#rowed6").jqGrid('navGrid',"#prowed6",{add: false, edit: false, del: true, search: false, refresh: true,closeAfterEdit: true,clearAfterAdd :true,navkeys : [ true, 38, 40 ]});
	$("#rowed6").jqGrid('inlineNav', '#prowed6', {add: true, addtext: '', edittext: '', edit: true,save:true,
            addParams: {
				keys:true,
                position: "last",
                addRowParams: {
					keys:true,                  
                    aftersavefunc: function(rowId, response,lastsel) {
						$('#'+rowId+'_ID_Thuoc1,#'+rowId+'_ID_DuongDungThuoc1,.dialog_dm_thuoc .ui-jqgrid-hbox').unbind("keyup");
						$('#'+rowId+'_ID_Thuoc1,#'+rowId+'_ID_DuongDungThuoc1,.dialog_dm_thuoc .ui-jqgrid-hbox').unbind("click");
						$('body').unbind("click");
					    $("#rowed6").jqGrid('bindKeys', {"onEnter":function( rowid ) {				
						   $("#prowed6 .ui-icon-pencil").click();				
						}});
						$('#rowed6').focus();	
						var current_rowed6=$('#rowed6').jqGrid('getCell',rowId, 'ID_Thuoc')
						$('#'+rowId).removeClass("ui-state-highlight").attr({"aria-selected":"false", "tabindex" : "-1"})
						$("#" + rowId).attr("id",current_rowed6);
						$('#'+current_rowed6).removeClass("ui-state-highlight");						
						be='<span class="ui-state-error ui-state-hover  " style="border:0"><span class="ui-icon  ui-icon-closethick" style="float: left; margin-right: .3em;"></span></span>';
						$("#rowed6").jqGrid('setRowData',current_rowed6,{xoa:be});
						setTimeout(function(){							
						   $("#prowed6 .ui-icon-plus").click();	
						   var ids = jQuery("#rowed6").jqGrid('getDataIDs');	
						   $('#'+ids[ids.length-1]+'_ID_Thuoc1').focus();	 //nam them khi enter tao dòng mới focus vào combo thuốc
						 //  console.log(ids[ids.length-1]);				
						},200);
						
						//$('#'+rowId+'_ID_Thuoc1').focus();
						//var slton=response.split(';');
						
                    },
					oneditfunc: function(rowId) {	
						window.id_rowed6_edit=rowId;					
						var with_idthuoc=parseFloat($('#jqgh_rowed6_ID_Thuoc').width())-32;
						var with_idduongdung=parseFloat($('#jqgh_rowed6_ID_DuongDungThuoc').width())-32;
						$('#rowed6 #'+rowId+'_ID_Thuoc').hide(); 
						$('#rowed6 #'+rowId+'_ID_Thuoc').before( '<input id="'+rowId+'_ID_Thuoc1" class="editable" type="text" name="Gia" style="width:'+with_idthuoc+'px" role="textbox">' );   
						create_combobox_inline('#'+rowId+'_ID_Thuoc1','#'+rowId+'_ID_Thuoc','.dialog_dm_thuoc','#DM_thuoc');
						$('#rowed6 #'+rowId+'_ID_DuongDungThuoc').hide(); 
						$('#rowed6 #'+rowId+'_ID_DuongDungThuoc').before( '<input id="'+rowId+'_ID_DuongDungThuoc1" class="editable" type="text" name="Gia" style="width:'+with_idduongdung+'px" role="textbox">' ); 
						create_combobox_inline('#'+rowId+'_ID_DuongDungThuoc1','#'+rowId+'_ID_DuongDungThuoc','.dialog_dm_duongdung','#dm_duongdung');
					 	$("#rowed6").jqGrid('unbindKeys');	
						//$('#'+rowId+'_ID_Thuoc1').val('Vui lòng chọn thuốc');
						number_textbox('#rowed6 #'+rowId+'_SoThuocThucXuat');
						
						//$('#'+rowId+'_ID_Thuoc1').focus();
						inline_enter(rowId)
						
						//alert();
					},	
                    afterrestorefunc: function(rowId) {	
						$('#'+rowId+'_ID_Thuoc1,#'+rowId+'_ID_DuongDungThuoc1,.dialog_dm_thuoc .ui-jqgrid-hbox').unbind("keyup");
						$('#'+rowId+'_ID_Thuoc1,#'+rowId+'_ID_DuongDungThuoc1,.dialog_dm_thuoc .ui-jqgrid-hbox').unbind("click");
						$('body').unbind("click");					
						$("#rowed6").jqGrid('bindKeys', {"onEnter":function( rowid ) {				
							$("#prowed6 .ui-icon-pencil").click();				
						}});
						$('#rowed6').focus();						
                    }				 
                }
            	},	
            editParams: {
				keys:true,				 
				 	aftersavefunc: function(rowId, response,lastsel) {
						$('#'+rowId+'_ID_Thuoc1,#'+rowId+'_ID_DuongDungThuoc1,.dialog_dm_thuoc .ui-jqgrid-hbox').unbind("keyup");
						$('#'+rowId+'_ID_Thuoc1,#'+rowId+'_ID_DuongDungThuoc1,.dialog_dm_thuoc .ui-jqgrid-hbox').unbind("click");
						$('body').unbind("click");
					 	$("#rowed6").jqGrid('bindKeys', {"onEnter":function( rowid ) {				
							$("#prowed6 .ui-icon-pencil").click();				
						} } );
						 $('#rowed6').focus();	
						 setTimeout(function(){
							 $("#prowed6 .ui-icon-plus").click();
						},200);	
						
                    },					 	
                	oneditfunc: function(rowId) {					
						window.id_rowed6_edit=rowId;
						$('#rowed6 #'+rowId+'_ID_Thuoc').hide(); 
						$('#rowed6 #'+rowId+'_ID_Thuoc').before( '<input id="'+rowId+'_ID_Thuoc1" class="editable" type="text" name="Gia" style="width: 82%;" role="textbox">' );   
						create_combobox_inline('#'+rowId+'_ID_Thuoc1','#'+rowId+'_ID_Thuoc','.dialog_dm_thuoc','#DM_thuoc',$('#rowed6 #'+rowId+'_ID_Thuoc').val());
						$('#rowed6 #'+rowId+'_ID_DuongDungThuoc').hide(); 
						$('#rowed6 #'+rowId+'_ID_DuongDungThuoc').before( '<input id="'+rowId+'_ID_DuongDungThuoc1" class="editable" type="text" name="Gia" style="width: 82%;" role="textbox">' ); 
						create_combobox_inline('#'+rowId+'_ID_DuongDungThuoc1','#'+rowId+'_ID_DuongDungThuoc','.dialog_dm_duongdung','#dm_duongdung',$('#rowed6 #'+rowId+'_ID_DuongDungThuoc').val());
					 	$("#rowed6").jqGrid('unbindKeys');						
						$('#'+rowId+'_ID_Thuoc1').focus();
						$('#'+rowId+'_ID_Thuoc1').select();
						inline_enter(rowId);
					
						number_textbox('#rowed6 #'+rowId+'_SoThuocThucXuat');
					},	
                    afterrestorefunc: function(rowId) {	
					$('#'+rowId+'_ID_Thuoc1,#'+rowId+'_ID_DuongDungThuoc1,.dialog_dm_thuoc .ui-jqgrid-hbox').unbind("keyup");
					$('#'+rowId+'_ID_Thuoc1,#'+rowId+'_ID_DuongDungThuoc1,.dialog_dm_thuoc .ui-jqgrid-hbox').unbind("click");
					$('body').unbind("click");					
						$("#rowed6").jqGrid('bindKeys', {"onEnter":function( rowid ) {				
							$("#prowed6 .ui-icon-pencil").click();				
						} } );						
						 $('#rowed6').focus();									   
					},	 
			}
       	 });           
} 

function check_product_available(mathuoc,tenthuoc,id_thuoc,tendonvitinh){	
	kiemtra=false;	
	id_rowed6=$('#rowed6').jqGrid('getDataIDs');		 
	for(i=0;i<id_rowed6.length;i++){		
		var rowData = $('#rowed6').getRowData(id_rowed6[i]);				 
			if(rowData['ID_Thuoc']==id_thuoc){
				 tooltip_message(tenthuoc+" đã có trên đơn thuốc này");
				 kiemtra=true;			 
			}			   
	}	 
	if(kiemtra==false){	 	 
		$("#"+rowed6_curentsel+"_ID_Thuoc").val(id_thuoc);
		$(".dialog_dm_thuoc").dialog( "close" );
	}	
}
var grid_click_status="";
function create_lichsu_khamlamsang(){	 
	 $("#rowed3").jqGrid({
		url:'resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_khamlamsang&kieudulieu=full&idbenhnhan='+window.id_benhnhan,
		datatype: "json",		 	
		colNames:['Loại khám',"Bác sỹ", "Giờ khám", "Ngày khám", "Ngày thuốc", "H.thuốc", "ID_DonThuoc","ID_LuotKham","ID_trangthai","","","","",""],
		colModel:[
			{name:'ID_LoaiKham',index:'ID_LoaiKham',width:"17%",align:'left',hidden:false,edittype:"select",editoptions:{value:window.loaikham},formatter: "select"	,editable:true},	
            {name:'BSChanDoan',index:'BSChanDoan',width:"18%",align:'left',formatter:render_name,editable:false},		   	 	 
			{name:'GioTao',index:'GioTao',width:"12%", align:'center',hidden:false,editable:false}, 
			{name:'NgayTao',index:'NgayTao', width:"20%",align:'center',hidden:false,editable:false},
			{name:'SoNgayThuoc',index:'SoNgayThuoc', width:"13%",align:'right',editable:true},		 
			{name:'NgayHetThuoc',index:'NgayHetThuoc',width:"20%",align:'center',hidden:false,editable:false},
			{name:'ID_DonThuoc',index:'ID_DonThuoc',width:"10%",align:'center',hidden:true,editable:false},
			{name:'ID_LuotKham',index:'ID_LuotKham',width:"8%",align:'center',hidden:true,editable:false},
			{name:'ID_trangthai',index:'ID_trangthai',width:"5%",align:'center',hidden:true,editable:false},
			{name:'ghichu',index:'ghichu',width:"5%",align:'center',hidden:true,editable:false},
			{name:'NoiDungTaiKham',index:'NoiDungTaiKham',width:"5%",align:'center',hidden:true,editable:false},
			{name:'NgayHenTaiKham',index:'NgayHenTaiKham',width:"5%",align:'center',hidden:true,editable:false},
			{name:'khamchinh',index:'khamchinh',width:"5%",align:'center',hidden:true,editable:false},		
			{name:'homnay',index:'homnay',width:"5%",align:'center',hidden:true,editable:false}						                            
		],
		loadonce: false,
		scroll: false,		 
		modal:true,
        shrinkToFit: true,
		rowNum: 10000000,
		rowList:[],	
		sortname: 'ID_LoaiKham',
		height:100,
		width:100,
		viewrecords: false,	
		ignoreCase:true,	
		sortorder: "asc",
	    grouping: true,
		pgbuttons: false, 
        pgtext: null, 
		
		cellEdit: true,
		cellsubmit: 'remote',
		cellurl : 'resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=controller_ngaythuoc',
		onCellSelect: function (rowid,iCol,cellcontent,e) {			
                  $("#rowed3").jqGrid("setSelection",rowid, true);		                  
        },
		serializeRowData: function (postdata) { 
				postdata.id_donthuoc=$("#rowed3").getRowData( rowed3_select)['ID_DonThuoc'];
                return postdata;			
		},		
		onSelectRow: function(id){	
			/*var savedRow = $('#rowed4').jqGrid("getGridParam", "savedRow");     
			if (savedRow && savedRow.length >= 0) {			  
				$('#rowed4').jqGrid("saveCell", savedRow[0].id, savedRow[0].ic);
			}	*/	
			
			var rowData = $("#rowed3").getRowData(id);				
				if((rowData['ID_trangthai']=='DangKham')){				
					 $("#rowed4").setColProp('MoTa', {editable: true});
				}else{
					$("#rowed4").setColProp('MoTa', {editable: false});
				}
			 kiemtra_kham(rowData);
			
			$("#ghichu").val(rowData["ghichu"]);
			if($.trim(rowData["NgayHenTaiKham"])!=''){
				$("#taikham").prop("checked" ,true);
			}else{
				$("#taikham").prop("checked" ,false);
			}
			$("#ngaytaikham").val(rowData["NgayHenTaiKham"]);
			$("#noidungtaikham").val(rowData["NoiDungTaiKham"]);
			window.id_ttluotkham=rowData['ID_LuotKham']
			$.getJSON( "resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_dieutriphoihop&ID_LuotKham="+rowData['ID_LuotKham'], 
			function( data ) {	 	
			var tam1_cls="",tam_cls="";
			$.each( data, function( key, val ) {				 
				for(i=0;i<val.length;i++){
					var tam1_cls=val[i]["cell"];
					tam_cls+= '<div id="'+tam1_cls[0]+'">' +tam1_cls[1]+ '</div>';
				}
		});
		
		$(".thongtin_dieutri").html(tam_cls);
	});
			jQuery("#rowed3").jqGrid('saveRow',window.rowed3_select);
				
			setTimeout(function(){
				if(grid_click_status=="rowed3"){	
					grid_scroll("#rowed4",id);
					grid_scroll("#rowed5",id);
				}
			},100);		 
			$(".canlamsang_luotkham").html("");			 
			$.getJSON( "resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_canlamsang_luotkham&idluotkham="+rowData["ID_LuotKham"], 
				function( data ) {
				var tam1_cls="",tam_cls="";
				$.each( data, function( key, val ) {		 
					for(i=0;i<val.length;i++){
						var tam1_cls=val[i]["cell"];  
						if((tam1_cls[2])=='3913')||(tam1_cls[2]=='4496')){
							tam1_cls[1]='kham_phu_khoa';
						}else if((tam1_cls[2]=='34')||(tam1_cls[2]=='4379')){
							tam1_cls[1]='kham_thai';	
						}
						$(".canlamsang_luotkham").html($(".canlamsang_luotkham").html()+ '<div id="cls_'+val[i]["id"]+'" class="'+tam1_cls[1]+'"><span class="topcls"></span><span class="bottomcls">'+tam1_cls[0]+'</span></div>');
						var topcls=$(".canlamsang_luotkham div").height() - $('#cls_'+val[i]["id"]+' span.bottomcls').height();
						 $('#cls_'+val[i]["id"]+' span.topcls').css("height",topcls/2+"px");
					}				 				
					$(".canlamsang_luotkham div").click(function(e) {
						parent.postMessage('canlamsang;'+$(this).attr("class")+';'+window.id_benhnhan+';'+$('.profile_outer:first').text()+';'+$(this).attr("id").split('_')[1], "*");
					});					 
				});
			});			
				if(window.rowed3_select!=id){
			$("#rowed6").jqGrid().setGridParam({
				url:"resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_donthuoc&iddonthuoc="+rowData["ID_DonThuoc"]
				,loadonce: false
				,datatype: "json"}).trigger("reloadGrid");
			$("#rowed6").jqGrid().setGridParam({loadonce: true});	
			//nam moi them
			/*$("#rowed7").jqGrid().setGridParam({
				url:"resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_donthuoc&iddonthuoc="+rowData["ID_DonThuoc"]
				,loadonce: false
				,datatype: "json"}).trigger("reloadGrid");
			$("#rowed7").jqGrid().setGridParam({loadonce: true});*/	
				}
			window.rowed3_select=id	;
		},
		onRightClickRow: function(rowid, iRow, iCol, e) {
                if ($("#menu").width() + e.pageX > $(document).width()) {
                    $("#menu").css('left', e.pageX - $("#menu").width() + "px");
                } else {
                    $("#menu").css('left', e.pageX + "px");
                }
                if ($("#menu").height() + e.pageY > $(document).height()) {
                    $("#menu").css('top', e.pageY - $("#menu").height() + "px");
                } else {
                    $("#menu").css('top', e.pageY + "px");
                }
				var rowData = $("#rowed3").getRowData(rowid);	
				if(rowData['khamchinh']==1){
										 
				}else if(rowData['khamchinh']==2){
										 
				}else if(rowData['khamchinh']==3){
										 
				}
				window.rowed3_right=rowid;               
                $("#menu").show(300);
                $(document).bind("contextmenu", function(e) {
                    return false;
       			});
            },
		
		ondblClickRow: function (rowId, rowIndex, columnIndex) {
			var rowData = $("#rowed3").getRowData(rowId);	
			if((rowData['ID_trangthai']=='DangKham')){					
				jQuery("#rowed3").jqGrid('editRow',rowId);		
			}				
 		},
		loadComplete: function(data) {
				if(reload_status==0){							
					var ids = $("#rowed3").getDataIDs();
					$("#rowed3").jqGrid("setSelection",ids[(ids.length-1)], true);	
					if(window.bd==1){											
						$("#rowed3 #"+ids[(ids.length-1)]).click();	
						$("#rowed3 #"+ids[(ids.length-1)]).focus();						
					}else{
						if(window.id_luotkham!=0){							
							for(i=0;i<ids.length;i++){
								rowData = $("#rowed3").getRowData(ids[i]);
								
								if(rowData['ID_LuotKham']==window.id_luotkham){
									
										$("#rowed3 #"+ids[i]).click();	
										$("#rowed3 #"+ids[i]).focus();
								}
							}		
						}
					}
					window.reload_status=1;
				}else{
					$("#rowed3").jqGrid("setSelection",id_rowed3_current, true);
					$("#rowed3 #"+id_rowed3_current).focus();			
				}
		var tmp1 = $("#rowed3").jqGrid('getDataIDs'); 
		for(var i=0;i < tmp1.length;i++){
			var rowData = $("#rowed3").getRowData(tmp1[i]);	
			if(rowData["homnay"]==1){
				$("#rowed3").jqGrid('setRowData', tmp1[i], false, { color: 'red',border:'1px solid #BBBBBB' });
			}
			if(rowData["khamchinh"]==3 || rowData["khamchinh"]==1){
				//jQuery("#rowed3").setCell (tmp1[i],'BSChanDoan','','',{ 'font-weight': 'bold'});
				jQuery("#rowed3").jqGrid('setCell', tmp1[i], 'BSChanDoan', '', {'font-weight': 'bold'});
			}
		}
		},	  
		caption: "Khám lâm sàng <span></span>"
	});		   
	      
} 
function create_lichsu_dienbienbenh(){	 
	 $("#rowed4").jqGrid({
		url:'resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_khamlamsang&kieudulieu=dienbienbenh&idbenhnhan='+window.id_benhnhan,
		datatype: "json",		 	
		colNames:['Diễn biến bệnh'],
		colModel:[
			{name:'MoTa',index:'MoTa',width:"100%",align:'left',hidden:false,editable:true,edittype:'textarea'},         		                            
		],
		loadonce: false,
		scroll: false,		 
		modal:true,
        shrinkToFit: true,
		rowNum: 10000000,
		rowList:[],
		pager: '#prowed4',
		sortname: 'MaBenhNhan',
		height:95,
		width:100,
		viewrecords: false,	
		ignoreCase:true,	
		sortorder: "asc",
	    grouping: true,
		forceFit : true,
		enter_cell:false,
		cellEdit: true,
		cellsubmit: 'remote',
		cellurl : 'resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=controller_mota',
		
		pgbuttons: false, 
        pgtext: null, 
		serializeRowData: function (postdata) {		
		return	postdata				
		},
		onSelectRow: function(id){	
			
		/*	
			savedRow = $('#rowed4').jqGrid("getGridParam", "savedRow");     
			if (savedRow && savedRow.length >= 0) {			  
				$('#rowed4').jqGrid("saveCell", savedRow[0].id, savedRow[0].ic);
				
			}*/var ids = jQuery("#rowed3").jqGrid('getDataIDs');
			
				var rowData = $("#rowed3").getRowData( $("#rowed3").jqGrid('getGridParam', 'selrow'));			  
				if((rowData['ID_trangthai']=='DangKham')){
					savedRow = $('#rowed4').jqGrid("getGridParam", "savedRow");   					
					
					$('#rowed4').jqGrid("editCell",(ids.indexOf(id)+1),0,true);
				}else{
					savedRow = $('#rowed4').jqGrid("getGridParam", "savedRow");					 
					if (savedRow && savedRow.length > 0) {			  
						$('#rowed4').jqGrid("saveCell", savedRow[0].id, savedRow[0].ic);						
					}					
				}
				
		
	
			setTimeout(function(){
				if(grid_click_status=="rowed4"){	
					grid_scroll("#rowed3",id);
					grid_scroll("#rowed5",id);
				}
			
		
			},200);			
		},
		onCellSelect: function (rowid,iCol,cellcontent,e) {
		$("#rowed4").jqGrid("setSelection",rowid, true);
				
        }, 
		ondblClickRow: function (rowId, rowIndex, columnIndex) {
			
 		},
		loadComplete: function(data) {
			
		  	  if(($("#rowed4").jqGrid('getGridParam', 'records')!=0)&&(reload_status==0)){
				  jQuery("#rowed4").closest(".ui-jqgrid-bdiv").scrollTop($("#rowed4").height());
				var ids = $("#rowed4").getDataIDs();
				$("#rowed4").jqGrid("setSelection",ids[(ids.length-1)], true);
				  
			  }
			  if(window.bd==1){
				 
					var ids = jQuery("#rowed3").jqGrid('getDataIDs');
				
					var rowData = $("#rowed3").getRowData( $("#rowed3").jqGrid('getGridParam', 'selrow'));	
					var idr4= $("#rowed4").jqGrid('getGridParam', 'selrow');		  
					if((rowData['ID_trangthai']=='DangKham')){
						savedRow = $('#rowed4').jqGrid("getGridParam", "savedRow");   					
						
						$('#rowed4').jqGrid("editCell",(ids.indexOf(idr4)+1),0,true);
						//$('#rowed4').jqGrid("editCell",(ids.indexOf(id)+1),0,true);
						//$('#'+ids.indexOf(id)+1).click();
					}
			}
		},
	});
	  
} 

function create_lichsu_chandoan(){	 
var searhicon = '<span class="ui-state-highlight ui-state-hover" style="border:0"><span class="ui-icon ui-icon-search" style="float: left; margin-right: .3em;"></span></span>';

	 $("#rowed5").jqGrid({
		url:'resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_khamlamsang&kieudulieu=chandoan&idbenhnhan='+window.id_benhnhan,
		datatype: "json",		 	
		colNames:['Chấn đoán',''],
		colModel:[			
			{name:'ChanDoan',index:'ChanDoan',width:"90%",align:'left',hidden:false,editable:true,edittype:'textarea'},  
			{name:'sear',index:'sear',width:"10%",align:'left',hidden:false,editable:false,formatter: function (cellValue, options, rowObject) {                    
                            return searhicon
				},
			},       		                            
		],
		loadonce: false,
		scroll: false,		 
		modal:true,
        shrinkToFit: true,
		rowNum: 10000000,
		rowList:[],
		pager: '#prowed5',
		sortname: 'MaBenhNhan',
		height:95,
		width:100,
		viewrecords: false,	
		ignoreCase:true,	
		sortorder: "asc",
		forceFit : true,
		cellEdit: true,
		cellsubmit: 'remote',
		cellurl : 'resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=controller_chuandoan',
		enter_cell:false,
	    grouping: true,
		pgbuttons: false,
        pgtext: null,
		serializeRowData: function (postdata) { 
		return	postdata			 
		},
		onCellSelect: function (rowid,iCol,cellcontent,e) {
			if($("#rowed3").jqGrid('getGridParam', 'selrow')==rowid){
                   if(iCol==1){
                      $('.chandoanmau').dialog('open')
				   }
			}           
			$("#rowed5").jqGrid("setSelection",rowid, true);  
			window.idrd5=rowid; 
			var ids = jQuery("#rowed3").jqGrid('getDataIDs');
			var idr5= $("#rowed5").jqGrid('getGridParam', 'selrow');
			$('#rowed5').jqGrid("editCell",(ids.indexOf(idr5)+1),0,true);
        },
		onSelectRow: function(id){	
		
			setTimeout(function(){
				if(grid_click_status=="rowed5"){	
					grid_scroll("#rowed3",id);
					grid_scroll("#rowed4",id);
				}
			},100);						
		},
		ondblClickRow: function (rowId, rowIndex, columnIndex) {
			/*var rowData = $("#rowed3").getRowData($("#rowed3").jqGrid('getGridParam', 'selrow'));	
			if((rowData['ID_trangthai']=='DangKham')){	
			jQuery("#rowed5").jqGrid('editRow',rowId);		
			}	
			window.rowed5_select=rowId;*/
 		},
		loadComplete: function(data) {
		  	  if(($("#rowed5").jqGrid('getGridParam', 'records')!=0)&&(reload_status==0)){
				jQuery("#rowed5").closest(".ui-jqgrid-bdiv").scrollTop($("#rowed5").height());
				var ids = $("#rowed5").getDataIDs();
				$("#rowed5").jqGrid("setSelection",ids[(ids.length-1)], true);
				  
			  }
		},
	});
	  
} 

function create_dm_duongdung(elem,datalocal){	
		datalocal=jQuery.parseJSON(datalocal);	 
		 $(elem).jqGrid({
		datastr:datalocal,	
		datatype: "jsonstring" ,
		colNames:['Tên', 'Ghi chú','Tên biệt dược', 'Tên nhóm thuốc',''],
		colModel:[			
			{name:'ten',index:'ten'}, 
			{name:'ghichu',index:'ghichu'},					 
			{name:'MaThuoc',index:'MaThuoc',hidden :true},	 	
			{name:'ID_DuongDung',index:'ID_DuongDung',hidden :true},	
			{name:'DonGia',index:'DonGia',hidden :true},	 	 
		],
		hidegrid: false,
		gridview: true,
		loadonce: true,
		scroll: false,		 
		modal:true,	 
		rowNum: 200,
		rowList:[],
		height:($(window).height() / 100 * parseFloat(40)).toFixed(0),
		width: (($(window).width() / 100 * parseFloat(58)).toFixed(0)),
		viewrecords: true,	
		ignoreCase:true,
		shrinkToFit:true,
		cmTemplate: {sortable:false},		
		sortorder: "desc",
		serializeRowData: function (postdata) { 
		},
		onSelectRow: function(id){	
			var rowData = $(elem).getRowData(id);			
			if(rowData['ten'].split(' ')[0]=='Tiêm'||rowData['ten'].split(' ')[0]=='Truyền'){
				$('#rowed6 #'+$("#rowed6").jqGrid('getGridParam', 'selrow')+'_PhuongThucThucHien').val(0);
			}else{
				$('#rowed6 #'+$("#rowed6").jqGrid('getGridParam', 'selrow')+'_PhuongThucThucHien').val(2);
			}
		},
		ondblClickRow: function (id, rowIndex, columnIndex) {
				
 		},
		loadComplete: function(data) {	
	
		},	  
		
	});	
	 $(elem).jqGrid('navGrid',"#prowed_DM_thuoc",{add: false, edit: false, del: false, search: false,closeAfterEdit: true,clearAfterAdd :true,closeOnEscape : true });				 
	 $(elem).jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false,defaultSearch:"bw"});
	 $(elem).jqGrid('bindKeys', {} );
		
} 




function create_toamau(elem,datalocal){	
		datalocal=jQuery.parseJSON(datalocal);	 
		 $(elem).jqGrid({
		datastr:datalocal,	
		datatype: "jsonstring" ,
		colNames:['Tên đơn thuốc', 'Tên người tạo','Tên nhóm bệnh'],
		colModel:[			
			{name:'TenBietDuoc',index:'TenBietDuoc'}, 
			{name:'TenNhomThuoc',index:'TenNhomThuoc'},					 
			{name:'MaThuoc',index:'MaThuoc'},	 	
			 	 
		],
		hidegrid: false,
		gridview: true,
		loadonce: true,
		scroll: false,		 
		modal:true,	 
		rowNum: 200,
		rowList:[],
		height:($(window).height() / 100 * parseFloat(40)).toFixed(0),
		width: (($(window).width() / 100 * parseFloat(58)).toFixed(0)),
		viewrecords: true,	
		ignoreCase:true,
		shrinkToFit:true,
		cmTemplate: {sortable:false},		
		sortorder: "desc",
		serializeRowData: function (postdata) { 	
		},
		onSelectRow: function(id){	
		if($(elem).data('clicked')){
			$('#thuocmau').setGridParam({datatype: 'json',url:'resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_thuocmau&id_donthuoc='+id}).trigger("reloadGrid");	
		}
		},
		ondblClickRow: function (id, rowIndex, columnIndex) {
 		},
		loadComplete: function(data) {		
		},	  
		
	});	
	 $(elem).jqGrid('navGrid',"#prowed_DM_thuoc",{add: false, edit: false, del: false, search: false,closeAfterEdit: true,clearAfterAdd :true,closeOnEscape : true });				 
	 $(elem).jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false,defaultSearch:"cn"});
	 $(elem).jqGrid('bindKeys', {} );
		
} 

function create_thuocmau(elem){	
		datalocal=[];
		 $(elem).jqGrid({
		data:datalocal,
		datatype: "local",	
		colNames:['Tên đơn thuốc', 'Tên người tạo',''],
		colModel:[			
			{name:'TenBietDuoc',index:'TenBietDuoc'}, 
			{name:'TenNhomThuoc',index:'TenNhomThuoc'},
			{name:'cachdung',index:'cachdung'},	 
		],
		hidegrid: false,
		gridview: true,
		loadonce: true,
		scroll: false,		 
		modal:true,	 
		rowNum: 200,
		rowList:[],

		height:($(window).height() / 100 * parseFloat(40)).toFixed(0),
		width: (($(window).width() / 100 * parseFloat(58)).toFixed(0)),
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
		
} 


function resize_control(){	 
	$("#rowed3").setGridWidth($(".ui-layout-west").width()-10);
	$("#rowed3").setGridHeight($(".ui-layout-west").height()-85);
	$("#rowed4").setGridWidth($(".ui-layout-center .ui-layout-north").width()-10);
	$("#rowed4").setGridHeight($(".ui-layout-center .ui-layout-north").height()-30); 
	$("#rowed5").setGridWidth($(".ui-layout-center .ui-layout-center").width()-10);
	$("#rowed5").setGridHeight($(".ui-layout-center .ui-layout-center").height()-30); 
	$("#khamicd10").setGridWidth($(".ui-layout-center .ui-layout-south").width()-10);
	$("#khamicd10").setGridHeight($(".ui-layout-center .ui-layout-south").height()-30); 
	$("#rowed6").setGridWidth($(".ui-layout-east").width()-10);
	$("#rowed6").setGridHeight($(".ui-layout-east").height()-225); 
	$("#rowed7").setGridWidth($(".ui-layout-east").width()-10);
	$("#rowed7").setGridHeight($(".ui-layout-east").height()-225); 
} 
function render_name(cellValue, opts, rowObject) {         
        var tam1;
        nickname1 = window.nickname.split(";");
        for (i = 0; i <= nickname1.length - 1; i++) {
            temp = nickname1[i].split(":");
            if (temp[1] == cellValue) {
                tam1 = temp[0];
                break;
            }
        }
        return tam1;
} 
function render_loaikham(cellValue, opts, rowObject) {         
        var tam1;
        nickname1 = window.loaikham.split(";");
        for (i = 0; i <= nickname1.length - 1; i++) {
            temp = nickname1[i].split(":");
            if (temp[1] == cellValue) {
                tam1 = temp[0];
                break;
            }
        }
        return tam1;
} 
 
function currency_convert (cellvalue, options, rowObject)
{
   return parseFloat(convert_comma_dot_cacl(cellvalue)).formatMoney(1, ',', '.');
} 


function batdau(){
	
	$("#btn_batdau").click(function(){
		$('#btn_batdau').button('disable');	
		window.bd=1;
		window.id_rowed3_current=$("#rowed3").jqGrid('getGridParam', 'selrow');
		if(batdau_status==2){
		$.post('resource.php?module=<?=$modules?>&view=<?=$view?>&hienmaloi=1&action=controler&id_benhnhan='+window.id_benhnhan).done(function(data){
			window.reload_status=0;
			window.id_rowed3_current=data;
			window.batdau_luotkham=1;			
			$('#btn_lammoi').trigger('click')
			window.batdau_status=1;	
			
			});
		}else{
		$.post('resource.php?module=<?=$modules?>&view=<?=$view?>&action=controler&id_kham='+id_rowed3_current).done(function(data){				$('#btn_lammoi').trigger('click')
			
			});
		}
		});
}


function canlamsang(){
	$.getJSON( "resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_canlamsang&idbenhnhan="+window.id_benhnhan, 
		function( data ) {
		var tam1_cls="",tam_cls="";
		$.each( data, function( key, val ) {		 
			for(i=0;i<val.length;i++){
				var tam1_cls=val[i]["cell"];
				tam_cls+= '<div id="'+val[i]["id"]+'">'+tam1_cls[0]+" ("+tam1_cls[1]+ ")<br \> " +tam1_cls[2]+'</div>';
			}
			$(".canlamsang").html(tam_cls);
			$(".canlamsang div").click(function(e) {
				parent.postMessage('canlamsang;'+$(this).attr("id")+';'+window.id_benhnhan+';'+$('.profile_outer:first').text()+';0', "*");
    		});
		
		});
	});
}


function  lamsang(){
	$.getJSON( "resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_lamsang&idbenhnhan="+window.id_benhnhan, 
		function( data ) {
		var tam1_cls="",tam_cls="";
		$.each( data, function( key, val ) {		 
			for(i=0;i<val.length;i++){
				//tam+=" ; "+val[i]["id"];
				var tam1_cls=val[i]["cell"];
				tam_cls+= '<div id="ls_'+val[i]["id"]+'">'+tam1_cls[0]+" ("+tam1_cls[1]+ ")<br \> " +tam1_cls[2]+'</div>';
			}
			$(".lamsang").html(tam_cls);
			$(".lamsang div").click(function(e) {
			parent.postMessage('canlamsang;'+$(this).attr("id")+';'+window.id_benhnhan+';'+$('.profile_outer:first').text()+';0', "*");
			});
			
		});
	});	
	
}

function lammoi(){
	$('#btn_lammoi').click(function(){		
		window.scrollPositiontop = jQuery("#rowed3").closest(".ui-jqgrid-bdiv").scrollTop();
		window.scrollPositionleft = jQuery("#rowed3").closest(".ui-jqgrid-bdiv").scrollLeft();		
		window.id_rowed3_current=$("#rowed3").jqGrid('getGridParam', 'selrow');
		$("#rowed3").trigger("reloadGrid");
		$("#rowed4").trigger("reloadGrid");
		$("#rowed5").trigger("reloadGrid");	
		canlamsang();
		lamsang();
	})
}




function create_combobox_inline(input,input1,dialog,grid,defaultvalue){				
					afterInit_combox_inline(input,dialog,grid,input1);
					init_combox_inline(input,input1,dialog,grid,defaultvalue);					
	}	

function init_combox_inline(input,input1,dialog,grid,defaultvalue){    
jwerty.key('tab', false);
var truoc='';
if (typeof defaultvalue != 'undefined'){
		$(grid).jqGrid("setSelection",defaultvalue, true);
		var idcur = $(grid).jqGrid('getGridParam', 'selrow');		
		var columnNames = $(grid).jqGrid('getGridParam','colModel');
		ten = $(grid).jqGrid('getCell', idcur, columnNames[0].name);	
		$(input).val(ten);	
		$(input1).val(idcur)		
}
$(input).bind("click",function(event) {	
    event.stopPropagation();
});
$(grid).bind("click",function(event) {	
    $(input).focus();
    $(input).select();
});




$('body').bind("click",function(event) {
	if($(dialog).is(":visible")===true){		
		create_combobox_close_inline(input,dialog,input1,grid)
	}
});


$(dialog+' .ui-jqgrid-hbox').click(function(event) {
	event.stopPropagation();
});


$(input+','+dialog+' .ui-jqgrid-hbox').bind("keyup", function(e) { 
	var key = e.which;
	if(jwerty.is("enter",e)||jwerty.is("tab",e)){		
		if($(dialog).is(":visible")===true){
			$(grid).data('clicked', true);
			var idcur = $(grid).jqGrid('getGridParam', 'selrow');
			$(grid).jqGrid("setSelection",idcur, true);
				
			create_combobox_close_inline(input,dialog,input1,grid);
		}
	}else if(jwerty.is("esc",e)){
			if($(dialog).is(":visible")===true){
			$(grid).data('clicked', true);
			create_combobox_close_inline(input,dialog,input1,grid);
		}
				}else if(jwerty.is("↓",e)){
					$(grid).data('clicked', false);
					var idcur = $(grid).jqGrid('getGridParam', 'selrow');
					if($(dialog).is(":visible")===false){
					 create_combobox_open(input,dialog)	
					}else{
						if(idcur==null){
						var ids = $(grid).getDataIDs();
						$(grid).jqGrid("setSelection",ids[0], true);
						}else{
					  var idcur = $(grid).jqGrid('getGridParam', 'selrow')	
					  if (idcur == null) return;
					  var ids = $(grid).getDataIDs();
					  var index = $(grid).getInd(idcur);
					  if (ids.length < 2) return;
					 index++;
					  if (index > ids.length)
						index = 1;
					  $(grid).jqGrid("setSelection",ids[index - 1], true);
						}
					}
					
				}
				else if(jwerty.is("↑",e)){
					$(grid).data('clicked', false);
						var idcur = $(grid).jqGrid('getGridParam', 'selrow')	
					if($(dialog).is(":visible")===false){
					 create_combobox_open(input,dialog)	}
					else{
						if(idcur==null){
						var ids = $(grid).getDataIDs();
						$(grid).jqGrid("setSelection",ids[0], true);
						}else{
						
					  var idcur = $(grid).jqGrid('getGridParam', 'selrow')	
					  if (idcur == null) return;
					  var ids = $(grid).getDataIDs();
					  var index = $(grid).getInd(idcur);
					  if (ids.length < 2) return;
					 index--;
					  if (index == 0){
						index = ids.length;
					  }
					  $(grid).jqGrid("setSelection",ids[index - 1], true);
						}
					}
				}
				else{
					$(grid).data('clicked', false);
					if(key!=13&&key!=9&&key!=16&&key!=37&&key!=38&&key!=39&&key!=40&&key!=27){				
							 create_combobox_open(input,dialog);
					grid = $(grid);
						var columnNames = $(grid).jqGrid('getGridParam','colModel');
						var searchFiler = $(input).val(), f;
						if (searchFiler.length === 0) {
							grid[0].p.search = false;
							$.extend(grid[0].p.postData,{filters:""});
						}
						f = {groupOp:"OR",rules:[]};
						f.rules.push({field:columnNames[0].name,op:"bw",data:searchFiler});               
						grid[0].p.search = true;
						$.extend(grid[0].p.postData,{filters:JSON.stringify(f)});         
						grid.trigger("reloadGrid",[{page:1,current:true}])					
						$(grid).jqGrid("setSelection",grid.getDataIDs()[0], true);				
					}
				}
		});	

}


function afterInit_combox_inline(input,dialog,grid,input1) { 
		 $(input).wrap( "<span class='custom-combobox'></span>" );
			var button = $("<a>").attr("tabIndex", -1).attr("title", "Show all items").tooltip().insertAfter($(input)).button({
			icons: {
				primary: "ui-icon-triangle-1-s"
			},
			text: false
		}).removeClass("ui-corner-all").addClass("custom-combobox-toggle ui-corner-right "+input.substr(1)+"_button").click(function(event) {
			$(input).focus();	
			$(input).select();	
			if($(dialog).is(":visible")===true){				
				create_combobox_close_inline(input,dialog,input1,grid)				
			}else{				
			    create_combobox_open(input,dialog);
				event.stopImmediatePropagation();				
				grid = $(grid);
				var columnNames = $(grid).jqGrid('getGridParam','colModel');
				grid[0].p.search = false;
				$.extend(grid[0].p.postData,{filters:""});							      
				grid.trigger("reloadGrid",[{page:1,current:true}]);						
			}
		});
	 }	 
	 
function create_combobox_close_inline(input,dialog,input1,grid){
				$(dialog).hide();
				count = jQuery(grid).jqGrid('getGridParam', 'records');				
				if((count<=0)||($.trim($(grid).jqGrid('getGridParam', 'selrow'))=='')||($(grid).data('clicked')===false)){
				
						$(input).val("");		
						$(input1).val(" ");				
				}				
				else{					
						var ids = $(grid).getDataIDs();
						var idcur = $(grid).jqGrid('getGridParam', 'selrow')	
						var columnNames = $(grid).jqGrid('getGridParam','colModel');
						ten = $(grid).jqGrid('getCell', idcur, columnNames[0].name);										
						$(input1).val(idcur);			
						$(input).val(ten);	
				}					
		}	 
	function saotaothuoc(){		
		$('#btn_dantoa').click(function(e){
			$("#rowed6").setColProp('ID_Thuoc', {editrules: null});
			window.rowed6_current=$("#rowed6").jqGrid('getGridParam', 'selrow');			
			id_thuocmau=$('#thuocmau').jqGrid('getDataIDs');			
			 for(i=0;i<=id_thuocmau.length-1;i++){	
		var rowData = jQuery('#thuocmau').jqGrid('getGridParam','data')[i];		
		 ids_rowed6=$('#rowed6').jqGrid('getDataIDs');			
		if($.inArray(rowData["_id_"], ids_rowed6) == -1){  	   	
		duong_dung=$('#DM_thuoc').jqGrid('getCell', rowData["TenBietDuoc"], 'ID_DuongDung');		
		duong_dung=duong_dung.split(',');
		songaythuoc=$('#rowed3').jqGrid('getCell', $("#rowed3").jqGrid('getGridParam', 'selrow'), 'SoNgayThuoc');
		SoThuocThucXuat=parseFloat(rowData["TenNhomThuoc"])* parseFloat(songaythuoc);	
		parameters ={									
									rowID:rowData["TenBietDuoc"],
									initdata : {id_dvt:$('#DM_thuoc').jqGrid('getCell', rowData["TenBietDuoc"], 'ID_dvt'),lavattu:$('#DM_thuoc').jqGrid('getCell', rowData["TenBietDuoc"], 'LaThuoc'),xoa:'X',ID_Thuoc:rowData["TenBietDuoc"],Gia:$('#DM_thuoc').jqGrid('getCell', rowData["TenBietDuoc"], 'DonGia'),ID_DuongDungThuoc:duong_dung[0],SoThuocThucXuat:rowData["TenNhomThuoc"],ThanhTien:SoThuocThucXuat,CachDungLieuDung:rowData["cachdung"],PhuongThucThucHien:''},
									position :"first",
									useDefValues : false,
									useFormatter : true,
									addRowParams : {extraparam:{}}
						}
					
			jQuery("#rowed6").jqGrid('addRow',parameters);			
				be = "<input style='height:22px;width:20px;' type='button' value='X' onclick=\"jQuery('#rowed6').jqGrid('delRowData',"+rowData["TenBietDuoc"]+");;\"  />";
			jQuery("#rowed6").jqGrid('setRowData',rowData["TenBietDuoc"],{xoa:be});			
				
			}
		}
		$("#rowed6").setColProp('GioKetThuc', {editrules:{required: true,custom: true, custom_func: function(value, colName) {
					return check_idthuoc(value,colName);
				}}
		});				
	})		
	}
	
	
function create_Dm_thuoc_grid(elem,datalocal){	
		datalocal=jQuery.parseJSON(datalocal);	 
		 $(elem).jqGrid({
		datastr:datalocal,	
		datatype: "jsonstring" ,
		colNames:['Tên thuốc', 'Hoạt chất','Tên biệt dược', 'Tên nhóm thuốc','','','','bhyt'],
		colModel:[			
			{name:'TenBietDuoc',index:'TenBietDuoc'}, 
			{name:'TenNhomThuoc',index:'TenNhomThuoc'},					 
			{name:'MaThuoc',index:'MaThuoc',hidden :true},	 	
			{name:'ID_DuongDung',index:'ID_DuongDung',hidden :true},	
			{name:'DonGia',index:'DonGia',hidden :true},	
			{name:'ID_dvt',index:'ID_dvt',hidden :true},	
			{name:'LaThuoc',index:'LaThuoc',hidden :true},	 	 
			{name:'bhyt',index:'bhyt',hidden :true},
		],
		hidegrid: false,
		gridview: true,
		loadonce: true,
		scroll: true,		 
		modal:true,	 
		rowNum: 200,
		rowList:[],
		pager: '#prowed_DM_thuoc',
		sortname: 'ID_Thuoc',
		height:($(window).height() / 100 * parseFloat(40)).toFixed(0),
		width: (($(window).width() / 100 * parseFloat(58)).toFixed(0)),
		viewrecords: true,	
		ignoreCase:true,
		shrinkToFit:true,
		cmTemplate: {sortable:false},		
		sortorder: "desc",
		serializeRowData: function (postdata) { 
		},
		onSelectRow: function(id){	
		$("#rowed6").jqGrid('getGridParam', 'selrow');
		var rowData = $(elem).getRowData(id);		  
		var duongdung_tam=rowData['ID_DuongDung'].split(',');
			if($(elem).data('clicked')){
				if(rowData['DonGia']<1){
					window.n_chuacogiaban=1;				
					$( "#val_donvitinh" ).val(rowData['ID_dvt']);
					$( "#val_lathuoc" ).val(rowData['LaThuoc']);
					$( "#val_dongia" ).val(rowData['DonGia']);
					$( "#val_duongdung" ).val(rowData['ID_DuongDung']);
					$("#_tenthuoc").html(rowData['TenBietDuoc']);
					}else{
						$('#rowed6').jqGrid("setCell", $("#rowed6").jqGrid('getGridParam', 'selrow'), "id_dvt",rowData['ID_dvt'] );
						$('#rowed6').jqGrid("setCell", $("#rowed6").jqGrid('getGridParam', 'selrow'), "lavattu",rowData['LaThuoc'] );
						$('#rowed6').jqGrid("setCell", $("#rowed6").jqGrid('getGridParam', 'selrow'), "Gia",rowData['DonGia'] );
						$('#dm_duongdung').jqGrid("setSelection",duongdung_tam[0], true);
						$('#rowed6 #'+id_rowed6_edit+'_ID_DuongDungThuoc').val(duongdung_tam[0]);	
						var columnNames = $('#dm_duongdung').jqGrid('getGridParam','colModel');
						ten = $('#dm_duongdung').jqGrid('getCell', duongdung_tam[0], columnNames[0].name);						
						$('#rowed6 #'+id_rowed6_edit+'_ID_DuongDungThuoc1').val(ten);
						window.n_chuacogiaban=0;
					}
			}
			
						
		},
		ondblClickRow: function (id, rowIndex, columnIndex) {
				
 		},
		loadComplete: function(data) {				
			ids_DM_thuoc=$('#DM_thuoc').jqGrid('getDataIDs');	
			for(i=0;i<=ids_DM_thuoc.length;i++){
				var rowData = $(elem).getRowData(i);	
				if(rowData['bhyt']==1){					
					$("#DM_thuoc #" + ids_DM_thuoc[i]).find("td").css("background-color", "#CCC!important");
				}
			}
		},	  		
	});	
	 $("#DM_thuoc").jqGrid('navGrid',"#prowed_DM_thuoc",{add: false, edit: false, del: false, search: false,closeAfterEdit: true,clearAfterAdd :true,closeOnEscape : true });				 
	 $("#DM_thuoc").jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false,defaultSearch:"bw"});
	 $("#DM_thuoc").jqGrid('bindKeys', {} );		
} 	

function inline_enter(rowid){	
	 $('#'+rowid+'_SoThuocThucXuat').blur(function (){				
			 aa=$('#rowed3').jqGrid('getCell', $("#rowed3").jqGrid('getGridParam', 'selrow'), 'SoNgayThuoc');				
			 tongcong_thuoc=parseFloat(aa)* parseFloat(convert_comma_dot_cacl($('#rowed6 #'+rowid+'_SoThuocThucXuat').val()));			 
			 $('#rowed6').jqGrid("setCell", rowid, "ThanhTien",tongcong_thuoc );
	  });
	$('#rowed6 #'+rowid+'_ID_Thuoc1,#rowed6 #'+rowid+'_ID_DuongDungThuoc1,#rowed6 #'+rowid+'_SoThuocThucXuat,#rowed6 #'+rowid+'_CachDungLieuDung').unbind('keydown')
	$('#rowed6 #'+rowid+'_ID_Thuoc1,#rowed6 #'+rowid+'_ID_DuongDungThuoc1,#rowed6 #'+rowid+'_SoThuocThucXuat,#rowed6 #'+rowid+'_CachDungLieuDung').bind('keydown',function(e){
		if ((jwerty.is('enter',e))||(jwerty.is('tab',e))){
			if($('#rowed6 #'+rowid+'_ID_Thuoc1').is(":focus")){
				if($('.dialog_dm_thuoc').is(":visible")===true){
				$('#DM_thuoc').data('clicked', true);
				var idcur = $('#DM_thuoc').jqGrid('getGridParam', 'selrow');
				$('#DM_thuoc').jqGrid("setSelection",idcur, true);				
				create_combobox_close_inline('#rowed6 #'+rowid+'_ID_Thuoc1','.dialog_dm_thuoc','#rowed6 #'+rowid+'_ID_Thuoc','#DM_thuoc');
				}				
				ids_rowed6=$('#rowed6').jqGrid('getDataIDs');	
				if($.trim($('#rowed6 #'+rowid+'_ID_Thuoc').val())==''){
					alert('Vui lòng chọn thuốc');
					$('#rowed6 #'+rowid+'_ID_Thuoc1').val('');
					$('#rowed6 #'+rowid+'_ID_Thuoc1').focus();
				}else{
					for(i=0;i<=ids_rowed6.length-1;i++){
						flag=0
						window.t_dake=0;
						if($('#rowed6 #'+rowid+'_ID_Thuoc').val() == $('#rowed6').jqGrid('getCell',ids_rowed6[i], 'ID_Thuoc')){						
							flag=1;
							window.t_dake=1;
							//console.log(window.t_dake);
							alert("Thuốc đã được kê");
							$('#rowed6 #'+rowid+'_ID_Thuoc1').val('');
							$('#rowed6 #'+rowid+'_ID_Thuoc1').focus();
							break;
						}
						
						if(flag==0){
							setTimeout(function(){
									$('#rowed6 #'+rowid+'_ID_DuongDungThuoc1').focus();
							},50);	
						}
					}
						//nam thêm bắt sự kiện thuốc chưa có giá bán
						if(window.n_chuacogiaban==1 && window.t_dake==0){
							setTimeout(function(){
								$( "#dialog-thuochuacogiaban" ).dialog('open');
								},100);	
								delete window.n_chuacogiaban;
						}
					
				}
					
			}			
			
			if($('#rowed6 #'+rowid+'_ID_DuongDungThuoc1').is(":focus")){
			if($('.dialog_dm_duongdung').is(":visible")===true){
			$('#dm_duongdung').data('clicked', true);
			var idcur = $(grid).jqGrid('getGridParam', 'selrow');
			$('#dm_duongdung').jqGrid("setSelection",idcur, true);				
			create_combobox_close_inline('#rowed6 #'+rowid+'_ID_DuongDungThuoc1','.dialog_dm_duongdung','#rowed6 #'+rowid+'_ID_DuongDungThuoc','#dm_duongdung');
			}
			setTimeout(function(){
								$('#rowed6 #'+rowid+'_SoThuocThucXuat').focus()
						},50);			
			}
			
					
		}		
	})
	setTimeout(function(){
		var id_r = $('#rowed6').jqGrid('getGridParam', 'selrow');
		//alert("#"+id_r+"_CachDungLieuDung");
		$("#"+id_r+"_CachDungLieuDung").focusout(function(){
			if($("#"+id_r+"_CachDungLieuDung").val()==''){
			$("#"+id_r+"_CachDungLieuDung").val(0);
			}
		});
	},100);	
}
function btn_luu(){
	$('#btn_luu').bind('click',function(e){
		rowData = $("#rowed3").getRowData( $("#rowed3").jqGrid('getGridParam', 'selrow'));
	//	alert(rowData['ID_DonThuoc']);
		datatosend='{"TienSuNguoiThan":'+JSON.stringify($('#gia_dinh').val());
		datatosend+=',"TienSu":'+JSON.stringify($('#benh_nhan').val());
		datatosend+=',"DiUng":'+JSON.stringify($('#di_ung').val());
		datatosend+=',"ghichu":'+JSON.stringify($('#ghichu').val());
		datatosend+=',"ID_BenhNhan":"'+window.id_benhnhan+'"';
		datatosend+=',"ID_TienSuBenh":"'+window.id_tiensubenh+'"';
		datatosend+=',"ID_Donthuoc":"'+rowData['ID_DonThuoc']+'"';
		datatosend+='}';
		datatosend=$.parseJSON(datatosend);
		$.post('resource.php?module=<?=$modules?>&view=<?=$view?>&action=controller_luu&hienmaloi=1',datatosend)	
	})
}
function chidinhkham(){
	$('#btn_chidinhkham').click(function(){
		parent.postMessage("chidinhkham;"+window.id_ttluotkham+";"+$('.profile_outer:first').text()+";"+window.id_benhnhan, "*");
	})	
}
function dieutriphoihop(){
	$('#btn_dieutriphoihop').click(function(){
		parent.postMessage("dieutriphoihop;"+window.id_ttluotkham+";"+$('.profile_outer:first').text()+";"+window.id_benhnhan, "*");
	})
}
function check_idthuoc(value,colname){	
 		ids_rowed6=$('#rowed6').jqGrid('getDataIDs');			
		if($.inArray(value, ids_rowed6) > -1){			 
			return [false,'Thuốc đã có','ID_Thuoc1']
		}else if($.trim(value)==''){
			return [false,'Chưa chọn thuốc','ID_Thuoc1']
		}else{
			
			
			return[true,'']
		}
	
}


function create_chuandoan(elem,datalocal){	
		datalocal=jQuery.parseJSON(datalocal);	 
		 $(elem).jqGrid({
		datastr:datalocal,	
		datatype: "jsonstring" ,
		colNames:['Tên thuốc', 'Hoạt chất','Tên biệt dược'],
		colModel:[			
			{name:'ID_LoaiKham',index:'ID_LoaiKham',width:"12%",align:'left',hidden:false,formatter:render_loaikham,editable:false},	
            {name:'BSChanDoan',index:'BSChanDoan',width:"18%",align:'left',formatter:render_name,editable:false},		   	 	 
			{name:'GioTao',index:'GioTao',width:"10%", align:'center',hidden:false,editable:false}, 
			{name:'NgayTao',index:'NgayTao', width:"10%",align:'center',hidden:false,editable:false},
			{name:'SoNgayThuoc',index:'SoNgayThuoc', width:"10%",align:'right',editable:true},		 
			{name:'NgayHetThuoc',index:'NgayHetThuoc',width:"10%",align:'center',hidden:false,editable:false},
			{name:'ID_DonThuoc',index:'ID_DonThuoc',width:"10%",align:'center',hidden:true,editable:false},
			{name:'ID_LuotKham',index:'ID_LuotKham',width:"10%",align:'center',hidden:true,editable:false},
			{name:'ID_trangthai',index:'ID_trangthai',width:"10%",align:'center',hidden:true,editable:false}	 	

		],
		hidegrid: false,
		gridview: true,
		loadonce: true,
		scroll: true,		 
		modal:true,	 
		rowNum: 10000,
		rowList:[],
		
		pager: '#prowed_DM_thuoc',
		sortname: 'ID_Thuoc',
		height:($(window).height() / 100 * parseFloat(40)).toFixed(0),
		width: (($(window).width() / 100 * parseFloat(58)).toFixed(0)),
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

		
} 	



function create_chuandoanmau(elem,datalocal){	
		datalocal=jQuery.parseJSON(datalocal);	 
		 $(elem).jqGrid({
		datastr:datalocal,	
		datatype: "jsonstring" ,
		colNames:['Tên chẩn đoán', 'Tên quốc tế',''],
		colModel:[			
			{name:'tenchandoan',index:'tenchandoan',width:"45%",align:'left',hidden:false},	
            {name:'tenquocte',index:'tenquocte',width:"45%",align:'left'},		
			{name:'ispopular',index:'ispopular',width:"18%",align:'left',hidden:true}, 		
			],
		hidegrid: false,
		gridview: true,
		loadonce: true,
		scroll: true,		 
		modal:true,	 
		rowNum: 200,
		rowList:[],
		pager: '#prowed_DM_thuoc',
		sortname: 'ID_Thuoc',
		
		height:$('#tabs-2').height() -50,
		width: $('#tabs-2').width() -50,
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
			var ids = jQuery("#rowed3").jqGrid('getDataIDs');
			var idr5= $("#rowed5").jqGrid('getGridParam', 'selrow');
			//$('#rowed5').jqGrid("editCell",(ids.indexOf(idr5)+1),0,true);
			var rowData = jQuery(elem).jqGrid ('getRowData', id);
			//var selRow = jQuery("#rowed5").jqGrid('getGridParam','selrow');
			//alert(ids.indexOf(idr5)+1);
			var rowData2 = jQuery("#rowed5").jqGrid ('getRowData', idr5);
			
			//console.log(rowData2['ChanDoan']);
			if(rowData2['ChanDoan']==''){
				$('#rowed5').jqGrid("setCell", $("#rowed5").jqGrid('getGridParam', 'selrow'), "ChanDoan",rowData['tenchandoan'] );
			}else{
				var rs= rowData2['ChanDoan']+'\n'+rowData['tenchandoan'];
				$('#rowed5').jqGrid("setCell", $("#rowed5").jqGrid('getGridParam', 'selrow'), "ChanDoan",rs );
				}
			$('#rowed5').jqGrid("editCell",(ids.indexOf(idr5)+1),0,true);
			var thought = jQuery("textarea#"+(ids.indexOf(idr5)+1)+"_ChanDoan").val();
          	jQuery("textarea#"+(ids.indexOf(idr5)+1)+"_ChanDoan").val(thought+' ');
		   	$('#rowed5').jqGrid("saveCell",(ids.indexOf(idr5)+1),0,true);
		//delete window.idrd5;
		$(".ui-dialog-titlebar-close").click();
 		},
		loadComplete: function(data) {	
		
		},	  
		
	});	

		
} 


function create_chuandoan(elem,datalocal){	
		datalocal=jQuery.parseJSON(datalocal);	 
		 $(elem).jqGrid({
		datastr:datalocal,	
		datatype: "jsonstring" ,
		colNames:['Tên chẩn đoán', 'tên quốc tế',''],
		colModel:[			
			{name:'tenchandoan',index:'tenchandoan',width:"45%",align:'left',hidden:false},	
            {name:'tenquocte',index:'tenquocte',width:"45%",align:'left'},		
			{name:'ispopular',index:'ispopular',width:"18%",align:'left',hidden:true}, 		
			],
		hidegrid: false,
		gridview: true,
		loadonce: true,
		scroll: true,		 
		modal:true,	 
		rowNum: 200,
		rowList:[],
		pager: '#prowed_DM_thuoc',
		sortname: 'ID_Thuoc',
		
		height:$('#tabs-2').height() -50,
		width: $('#tabs-2').width() -50,
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
} 

function create_lschuandoan(){	
		 
		 $('#lichsuchandoan').jqGrid({
		url:'resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_lichsuchandoan&idbenhnhan='+window.id_benhnhan,
		datatype: "json", 
		colNames:['chẩn đoán', 'Tên bác sỹ','Ngày giờ'],
		colModel:[			
			{name:'chandoan',index:'chandoan',width:"45%",align:'left',hidden:false},	
            {name:'bacsy',index:'bacsy',width:"30%",align:'left'},		
			{name:'ngaygio',index:'ngaygio',width:"15%",align:'left'}, 		
			],
		hidegrid: false,
		gridview: true,
		loadonce: true,
		scroll: true,		 
		modal:true,	 
		rowNum: 200,
		rowList:[],	
		height:$('#tabs-2').height() -50,
		width: $('#tabs-2').width() -50,
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
			//alert();
			var ids = jQuery("#rowed3").jqGrid('getDataIDs');
			var idr5= $("#rowed5").jqGrid('getGridParam', 'selrow');
			//$('#rowed5').jqGrid("editCell",(ids.indexOf(idr5)+1),0,true);
			var rowData = jQuery("#lichsuchandoan").jqGrid ('getRowData', id);
			//var selRow = jQuery("#rowed5").jqGrid('getGridParam','selrow');
			//alert(ids.indexOf(idr5)+1);
			var rowData2 = jQuery("#rowed5").jqGrid ('getRowData', idr5);
			
			//console.log(rowData2['ChanDoan']);
			if(rowData2['ChanDoan']==''){
				$('#rowed5').jqGrid("setCell", $("#rowed5").jqGrid('getGridParam', 'selrow'), "ChanDoan",rowData['chandoan'] );
			}else{
				var rs= rowData2['ChanDoan']+'\n'+rowData['chandoan'];
				$('#rowed5').jqGrid("setCell", $("#rowed5").jqGrid('getGridParam', 'selrow'), "ChanDoan",rs );
				}
			$('#rowed5').jqGrid("editCell",(ids.indexOf(idr5)+1),0,true);
			var thought = jQuery("textarea#"+(ids.indexOf(idr5)+1)+"_ChanDoan").val();
          	jQuery("textarea#"+(ids.indexOf(idr5)+1)+"_ChanDoan").val(thought+' ');
		   	$('#rowed5').jqGrid("saveCell",(ids.indexOf(idr5)+1),0,true);
			//delete window.idrd5;
			$(".ui-dialog-titlebar-close").click();
 		},
		loadComplete: function(data) {	
		
		},  
		
	});	
} 



function create_icd10(elem,datalocal){	
		datalocal=jQuery.parseJSON(datalocal);	 
		 $(elem).jqGrid({
		datastr:datalocal,	
		datatype: "jsonstring" ,
		colNames:['CICD10', 'VVIET','NHOM'],
		colModel:[			
			{name:'CICD10',index:'CICD10'}, 
			{name:'VVIET',index:'VVIET'},					 
			{name:'NHOM',index:'NHOM'}
		],
		hidegrid: false,
		gridview: true,
		loadonce: true,
		scroll: true,		 
		modal:true,	 
		rowNum: 200,
		rowList:[],
		height:($(window).height() / 100 * parseFloat(40)).toFixed(0),
		width: (($(window).width() / 100 * parseFloat(58)).toFixed(0)),
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
	 $(elem).jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false,defaultSearch:"bw"});
	 $(elem).jqGrid('bindKeys', {} );
		
} 	

function create_khamicd10(){	 
	 $("#khamicd10").jqGrid({
		url:'resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_khamicd10&idbenhnhan='+window.id_benhnhan,
		datatype: "json",		 	
		colNames:['Mã','ICD10'],
		colModel:[
			{name:'maicd10',index:'maicd10',width:"30%"}, 
			{name:'vviet',index:'vviet',width:"70%"},        		                            
		],
		loadonce: false,
		scroll: false,		 
		modal:true,
        shrinkToFit: true,
		rowNum: 1000000000,
		rowList:[],
		viewrecords: false,	
		ignoreCase:true,	
		sortorder: "asc",
	    grouping: true,
		editurl: 'resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=controller_mota',
		pgbuttons: false, // disable page control like next, back button
        pgtext: null, // disable pager text like 'Page 0 of 10'	 
		serializeRowData: function (postdata) {		
		return	postdata				
		},
		onSelectRow: function(id){	
			jQuery("#rowed4").jqGrid('saveRow',window.rowed4_select);
			setTimeout(function(){
				if(grid_click_status=="rowed4"){	
					grid_scroll("#rowed3",id);
					grid_scroll("#rowed5",id);
				}
			},100);			
		},
		ondblClickRow: function (rowId, rowIndex, columnIndex) {
			
 		},
		loadComplete: function(data) {
		  	
		},
	});
	  
} 

function check_soluong(){
	var id_row = $('#rowed6').jqGrid('getGridParam', 'selrow')
	
	 aa=$('#rowed3').jqGrid('getCell', $("#rowed3").jqGrid('getGridParam', 'selrow'), 'SoNgayThuoc');
				
			 tongcong_thuoc=parseFloat(aa)* parseFloat(convert_comma_dot_cacl($('#rowed6 #'+id_row+'_SoThuocThucXuat').val()));
			$('#'+id_row+'_ID_Thuoc').val();
			//alert(aa);
	if(parseFloat(convert_comma_dot_cacl($('#rowed6 #'+id_row+'_SoThuocThucXuat').val()))<=0){
		alert('Số thuốc phải lớn hơn 0');
		setTimeout(function(){$('#rowed6 #'+id_row+'_SoThuocThucXuat').focus();},50)
	}else{
	$.post('resource.php?module=<?=$modules?>&view=<?=$view?>&action=controller_donthuoc_soluong&ds_kho='+$.cookie("dskho")+'&soluong='+tongcong_thuoc+'&id_thuoc='+$('#'+id_row+'_ID_Thuoc').val()).done(function(data){
		data=data.split(';;');
		
		if(data[1]==0){
		
			$('#dialog_sothuoc').html(data[0]);
		
			$('#dialog_sothuoc #tenthuocton').html('<strong>'+$('#'+id_row+'_ID_Thuoc1').val()+'</strong>')
			
			$('#dialog_sothuoc').dialog('open');
			
		}else{
			$('#'+id_row+'_CachDungLieuDung').focus();
		}
		
		
		})
		
		
	}
	
	}



function right_menu(){
	
	$('#chuyenthanhbschinh').click(function(){
		$('#')
		})
	$('#chuyenbschinh').click(function(){
		
		})
	$('#saothuoctoaphu').click(function(){
		
		})
	$('#saotoathuoc').click(function(){
		
		})
	$('#medical').click(function(){
		
		})  
   
 
}
 
function chuyenthanhbschinh(){
	
	rowData = $("#rowed3").getRowData( rowed3_select)
	$('#chuyenthanhbschinh').click(function(){
		$.post('resource.php?module=<?=$modules?>&view=<?=$view?>&action=controller_chuyenbschinh&id_luotkham='+rowData['ID_LuotKham']+'&id_kham='+rowed3_select+'&id_donthuoc'+rowData['ID_DonThuoc'])
	})
}



function kiemtra_kham(rowData){
	//alert();
	if(IsDoctor==0){
		$('#btn_batdau,#btn_hoantat,#btn_dantoa,#btn_saotoa,#btn_chinhsua').button('disable');
		$('.chuyenthanhbschinh').unbind('click');
		$('.saothuoctoaphu').unbind('click');
		$('.chuyenbschinh').unbind('click');
	}else{
		
		if(batdau_status==1){
			var rowData = $("#rowed3").getRowData( $("#rowed3").jqGrid('getGridParam', 'selrow'));
			if(rowData['ID_trangthai']=='DangKham'){
				$('#btn_batdau').button('disable');
				$('#btn_hoantat,#btn_dantoa,#btn_saotoa,#btn_chinhsua,#btn_chidinhkham,#btn_dieutriphoihop,#btn_hoantat,#btn_luu').button('enable');
			}else if(rowData['ID_trangthai']=='DangCho'){
				$('#btn_batdau').button('enable');
				$('#btn_hoantat,#btn_dantoa,#btn_saotoa,#btn_chinhsua,#btn_chidinhkham,#btn_dieutriphoihop,#btn_hoantat,#btn_luu').button('disable');
			}else if(rowData['ID_trangthai']=='KetThucKham'){
				$('#btn_batdau,#btn_hoantat,#btn_dantoa,#btn_saotoa,#btn_chinhsua,#btn_chidinhkham,#btn_dieutriphoihop,#btn_hoantat,#btn_luu').button('disable');
			}
				
		}else{			
			$('#btn_batdau').button('enable');
			$('#btn_hoantat,#btn_dantoa,#btn_saotoa,#btn_chinhsua').button('disable');
		}
		
	
}
}
//---------
function create_old_donthuoc(){	
	 mydata=[];	 
	 $("#rowed7").jqGrid({	
		data:mydata,	 
		datatype: "local",		 	
		colNames:['','','','Tên thuốc',"Giá bán", "Đ.dùng", "SL", "Tổng cộng", "C.dùng", "T.hiện"],
		colModel:[		
			{name:'id_dvt',index:'id_dvt',width:"10%",align:'center',hidden:true, editable: true },
			{name:'lavattu',index:'lavattu',width:"10%",align:'center',hidden:true, editable: true }  ,
			{name:'xoa',index:'xoa',width:"3%",align:'center',hidden:false, editable: false}  ,
			{name:'ID_Thuoc',index:'ID_Thuoc',width:"30%", align:'left',hidden:false, editable: true,edittype:"select",editoptions:{value:window.thuoc},formatter: "select",editrules:{custom: true, custom_func: function(value, colName) {
                          
                            return check_idthuoc(value,colName);

                        },formatter: function (cellValue, options, rowObject) {
                    
                            return searhicon
                        }}
		 }, 
			{name:'Gia',index:'Gia', width:"8%",align:'right',hidden:false,formatter:'number', formatoptions:{decimalPlaces: 0}, editable: false},
			{name:'ID_DuongDungThuoc',index:'ID_DuongDungThuoc', width:"20%",align:'left', editable: true,edittype:"select",editoptions:{value:window.duongdung},formatter: "select"},		 
			{name:'SoThuocThucXuat',index:'SoThuocThucXuat',width:"8%",formatter:currency_convert,align:'right',hidden:false, editable: true
			,newgrid:true,func_grid:"check_soluong"},
			{name:'ThanhTien',index:'ThanhTien',width:"7%",align:'right',hidden:false,formatter:'number', formatoptions:{decimalPlaces: 1}, editable: false},
			{name:'CachDungLieuDung',index:'CachDungLieuDung',width:"8%",align:'right',hidden:false, editable: true},
			{name:'PhuongThucThucHien',index:'PhuongThucThucHien',width:"10%",align:'center',hidden:false, editable: true,edittype:"select",formatter:'select',editoptions:{value:"0:Hospital;1:Home;2:Seft",dataEvents: [{ type: 'change keyup', fn: function(e) {
				
				}}]}},	                        
		],
		inline_esc:false,
		column:["CachDungLieuDung"],
		func_column:["luoi_CachDungLieuDung"],	
		loadonce: true,
		local:true,
		scroll: false,		 
		modal:true,
        shrinkToFit: true,
		rowNum: 10000000,
		rowList:[],
		pager: '#prowed6',
		sortname: 'ID_LoaiKham',
		height:100,
		width:100,
		viewrecords: false,	
		ignoreCase:true,	
		sortorder: "asc",
		 onCellSelect: function (rowid,iCol,cellcontent,e) {
                    
        }, 
		onSelectRow: function(id){	

		},
		ondblClickRow: function (rowId, rowIndex, columnIndex) {

 		},
		loadComplete: function(data) {
		},
		caption: "Đơn thuốc ",
	});
	$("#rowed7").jqGrid('navGrid',"#prowed7",{add: false, edit: false, del: true, search: false, refresh: true,closeAfterEdit: true,clearAfterAdd :true,navkeys : [ true, 38, 40 ]});          
} 

</script>
 
 
