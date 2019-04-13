<!--<link rel="stylesheet" href="../../../css/form_css.css" type="text/css" media="screen"/>-->
<style type="text/css">
#rowed3 td, #rowed4 td {
	line-height: 25px!important;
	font-size: 11px!important;
	/*text-wrap:break-word!important;*/
	word-wrap:normal!important;
	 
}
.form_row label {
	text-align: right!important;
}
.ui-menu {
	width: 150px;
	display: none;
	position: absolute;
	box-shadow: 0px 0px 3px #333;
	z-index: 100000;
}
#ID_NCC1, #SoHopDong, #SoDonDatHang {
	width: 140px!important;
}
#ID_Kho1 {
	width: 70px!important;
}
#search_border{
 	border:1px dotted #327E04;
	padding:8px 0px;
	margin:6px 0px 0px 0px;	
}
</style>
<body>
<table id="rowed3" >
</table>
<div id="prowed3" ></div>
<div style="height:3px;"></div>
<table id="rowed4" >
</table>
<div id="prowed4" ></div>
<div id="grid_phong_ban " class="hidden_form" style="display:none;">
  <div  class="dialog_dm_thuoc">
    <table id="DM_thuoc">
    </table>
    <div id="prowed_DM_thuoc"></div>
  </div>
  <div  class="dialog_dm_Ncc">
    <table id="DM_Ncc">
    </table>
    <div id="prowed_DM_Ncc"></div>
  </div>
  <!-- <div class="form_row" id="logo" style="width:20%">            
            <span>Công ty Cổ phần y khoa BSGD</span> <br />
            <span>73 Nguyễn Hữu Thọ - Đà Nẵng</span>   <br />
            <span>0511 3 632111 - 0511 3 632333</span> <br />
            <div><strong>TRUNG TÂM BSGD ĐÀ NẴNG</strong></div> 
          
     </div>
     <div class="form_row" style="vertical-align:top;width:70%"  >     
       <div style="font-size:20px; margin-left;width:70%; text-align:center">PHIẾU xuất</div> 
        <label for="MaPhieu" style="width:80px; text-align:center">Số phiếu</label>
        <label for="NgayLapPhieu" style="width:105px; text-align:center">Ngày lập phiếu</label>
        <label for="NgayXuat" style="width:105px; text-align:center">Ngày xuất kho</label>
        <label for="ID_NguoiDuyet" style="width:105px; text-align:center">Người duyệt</label>
        
        <br>

        <input id="MaPhieu" name="MaPhieu" style="width:70px;" type="text">
        <input id="NgayLapPhieu" style="width:90px;" name="NgayLapPhieu" type="text">
        <input id="NgayXuat" style="width:90px;" name="NgayXuat" type="text">    
        <select id="ID_NguoiDuyet"></select>       
           
         
     </div>-->
  <div class="ui-dialog ui-widget ui-widget-content ui-corner-all ui-resizable thongtinchinh" style="width:99.5%;  box-shadow:none!important;  display: block; " >
    <div class="ui-dialog-titlebar ui-widget-header ui-corner-all ui-helper-clearfix"> <span id="ui-id-5" class="ui-dialog-title">Thông tin phiếu xuất</span> </div>
    <div class="ui-dialog-content ui-widget-content"style="display: block; width: auto; min-height: 0px; max-height: none; height: 100%">
      <div id="container">
        <div class="form_row" style="vertical-align:top;width:17%"  >
          <div>
            <label for="MaPhieu" style="width:90px;  "><?php get_text("sophieu")?></label>
            <input id="MaPhieu" name="MaPhieu" style="width:70px;" type="text">
          </div>
          <div>
            <label for="NgayLapPhieu" style="width:90px; "><?php get_text("ngaylapphieu")?></label>
            <input id="NgayLapPhieu" style="width:70px;"  alt="date" value="<?php echo date($_SESSION["config_system"]["ngaythang"]) ?>" name="NgayLapPhieu" type="text">
          </div>
          <div>
            <label for="NgayXuat" style="width:90px;">Ngày xuất kho</label>
            <input id="NgayXuat" style="width:70px;" alt="date" name="NgayXuat"  value="<?php echo date($_SESSION["config_system"]["ngaythang"]) ?>" type="text">
          </div>
          <div>
            <label for="ID_Kho" style="width:90px; "><?php get_text("taikho")?></label>
            <select id="ID_Kho" style="width:78px;" name="ID_Kho"></select>
          </div>
        </div>
        <div class="form_row" style="vertical-align:top;width:29%"  >
          <div>
            <label for="ID_NCC" style="width:90px;"><?php get_text("ncc")?></label>
            <input id="ID_NCC" lang="new_grid" name="ID_NCC" style="width:30px;" type="text">  
             <label id="ID_NCC1" class="hienthi" style="width:170px!important; margin-left:-2px; text-align:left!important;"> </label>          
          </div>
            <input id="ID_NguoiDuyet" style="width:120px;" name="ID_NguoiDuyet" type="hidden">          
            <input id="NgayDuyet" style="width:120px;" name="NgayDuyet" type="hidden">
            <input id="ID_LoaiNhapXuat"  name="ID_LoaiNhapXuat" value="<?php echo $_GET['id_loai']; ?>" type="hidden">
          <div>
            <label for="TenKhachHang" style="width:90px;">Khách hàng</label>
            <input  id="TenKhachHang" name="TenKhachHang" style="width:207px!important;" type="text">
            
          </div>
          <div>   
			  <?php  	if($_GET["id_loai"]==89){  ?>        
                <input id="IsPercent" name="IsPercent" type="checkbox" checked style="display:none">          
                <label for="TenKhachHang" style="width:90px;">Toa tạm</label><input id="IsXuatChoToaTam" name="IsXuatChoToaTam" type="checkbox" >
                <input id="DaThanhToan" name="DaThanhToan" type="checkbox" style="display:none">
              <?php	}	  ?>
          </div>
          <div>
            <label for="SoDonDatHang" style="width:90px;"><?php get_text("dondathang")?></label>
            <input id="SoDonDatHang" style="width:207px!important;" name="SoDonDatHang" type="text">
          </div>
        </div>
        <div class="form_row" style="vertical-align:top;width:17%"  >
          <div>
            <label for="ThanhTien" style="width:70px;"><?php get_text("thanhtien")?></label>
            <label id="ThanhTien1" class="hienthi"> </label>
            <input id="ThanhTien" style="width:90px;text-align:right" name="ThanhTien" type="hidden" disabled>
          </div>
          <div>
            <label for="PercentVAT" style="width:70px;  ">%VAT</label>          
            <input id="PercentVAT" name="PercentVAT" style="width:89px;text-align:right" type="text" value="0" >
          </div>
          <div>
            <label for="TienVAT" style="width:70px; "><?php get_text("tienvat")?></label>
            <label id="TienVAT1" class="hienthi"> </label>
            <input id="TienVAT" style="width:90px;text-align:right" name="TienVAT" type="hidden" disabled>
          </div>
          <div>
            <label for="GiaSauThue" style="width:70px;"><?php get_text("giasauthue")?></label>
            <label id="GiaSauThue1" class="hienthi"></label>
            <input id="GiaSauThue" name="GiaSauThue" style="width:90px;text-align:right" type="hidden" disabled >
          </div>
        </div>
        <div class="form_row" style="vertical-align:top;width:29%"  >
          <div>
            <label for="SoHoaDon" style="width:50px;"><?php get_text("sohd")?></label>
            <input id="SoHoaDon" name="SoHoaDon" style="width:80px" type="text"  >
            <label for="NgayHoaDon" style="width:50px;"><?php get_text("ngayhd")?></label>
            <input id="NgayHoaDon" alt="date" name="NgayHoaDon" value="<?php echo date($_SESSION["config_system"]["ngaythang"]) ?>"  style="width:80px" type="text"  ><br>
            <label for="GhiChu" style="width:50px; vertical-align:top; margin-top:30px;"><?php get_text1("ghichu")?></label>
            <textarea id="GhiChu" name="GhiChu" style="height:63px; width:226px;" lang="end" ></textarea>
          </div>
        </div>
          <div class="form_row" style="vertical-align:top;width:4%;line-height:15px!important;"  >
          <div>
             <a style="margin-left:0px;   margin-bottom:1px;width:30px; vertical-align:top" class="fm-button ui-state-default ui-corner-all fm-button-icon-left" id="save_data" href="#"><?PHP get_text("luu")?><span class="ui-icon ui-icon-disk"></span></a>       
             <a style="margin-left:0px;  margin-bottom:1px; width:30px" class="fm-button ui-state-default ui-corner-all fm-button-icon-left" id="sCal" href="#"><?PHP get_text("dong")?><span class="ui-icon ui-icon-cancel
 "></span></a>
          </div>
        </div>       
      </div>
    </div>
  </div>
  <div style="height:3px;"></div>
  <table id="rowed5" >
  </table>
  <div id="prowed5" ></div>
</div>

<div class="form_search" style="display:none;">
        <div class="form_row" style="vertical-align:top;width:100%"  >
          <div>
            <label for="tungay" style="width:90px;" ><?php get_text("tungay")?></label>
            <input id="tungay"   name="tungay" style="width:70px;" value="<?php echo date($_SESSION["config_system"]["ngaythang"]) ?>" type="text">
            <label for="denngay" style="width:273px;"><?php get_text("denngay")?></label>
            <input id="denngay"  name="denngay" style="width:70px;" value="<?php echo date($_SESSION["config_system"]["ngaythang"]) ?>" type="text">          	 
          </div>
          <div>
            <label for="tuso" style="width:90px;"><?php get_text("tuso")?></label>
            <input id="tuso" name="tuso" style="width:70px;" type="text">
            <label for="denso" style="width:273px;"><?php get_text("denso")?></label>
            <input id="denso" name="denso" style="width:70px;" type="text">
          </div>
          <div>
            <label for="maKH" style="width:90px;"><?php get_text("ma_kh")?></label>
            <input id="maKH" lang="maKH_check" name="maKH" style="width:70px;" type="text">
            <label class="hienthi" id="maKH1" style="width:350px;"></label>            
          </div>
          <div>
            <label for="maKHO" style="width:90px;"><?php get_text("makho")?></label>
            <input id="maKHO" name="maKHO" style="width:70px;" type="text">
            <label class="hienthi" id="maKHO1" style="width:350px;"></label>            
          </div>
            <div>
            <label for="maThuoc" style="width:90px;"><?php get_text("mathuoc")?></label>
            <input id="maThuoc" lang="maThuoc_check"  name="maThuoc" style="width:70px;" type="text">
            <label class="hienthi" id="maThuoc1" style="width:350px;"></label>  
            <input id="idThuoc" name="idThuoc" style="width:70px;" type="hidden">          
          </div>
          <div>
            <label for="ghichu" style="width:90px;"><?php get_text1("ghichu")?></label>
            <input id="ghichu"  name="ghichu" style="width:429px;" type="text">           
            <input id="ID_LoaiNhapXuat"  name="ID_LoaiNhapXuat" value="<?php echo $_GET["id_loai"]; ?>" type="hidden">                 
          </div>
        
         
 		</div>
</div> 

<!--<input id="ID_NhapKho" type="text">
        <input id="MaPhieu" type="text">
        <input id="NgayLapPhieu" type="text">
        <input id="NgayXuat" type="text">
        <input id="ID_NguoiDuyet" type="text">
        <input id="NgayDuyet" type="text">
        <input id="ID_NCC" type="text">
        <input id="ID_Kho" type="text">
        <input id="ID_NhapXuat" type="text">
        <input id="PercentVAT" type="text">
        <input id="TienVAT" type="text">
        <input id="ThanhTien" type="text">
        <input id="SoHopDong" type="text">
        <input id="SoDonDatHang" type="text">
        <input id="GhiChu" type="text">-->

</div>
</body>
</html><script type="text/javascript">
jQuery(document).ready(function() {	
	$("#save_data").button();
	/*parseUri.options.strictMode = true
	var uri = window.document.URL.toString();
	var id_loai = parseUri(uri).queryKey["id_loai"];	*/ 
	var action;
	create_Dm_thuoc_grid();	 
	create_Dm_Ncc_grid("#DM_Ncc")
	$(".dialog_dm_thuoc").dialog({		
		autoOpen:false,
		height:($(window).height() / 100 * parseFloat(85)).toFixed(0),
		width:($(window).width() / 100 * parseFloat(60)).toFixed(0),
		modal:false,
		title:'<?php get_text("timkiem_thuoc_vtyt")?>',
		stack: false,
		//position:[ $(elem).offset().left, $(elem).offset().top + 35 - $(document).scrollTop() ]	,	
		open: function(event, ui){									
			$('.ui-draggable').css({"box-shadow": "0px 0px 10px rgb(136, 136, 136)"});										 
		},
		close: function(event, ui) {
		   $(".overlay_child").fadeOut(300);	
		},
	});	
	$(".dialog_dm_Ncc").dialog({		
		autoOpen:false,
		height:($(window).height() / 100 * parseFloat(85)).toFixed(0),
		width:($(window).width() / 100 * parseFloat(60)).toFixed(0),
		modal:false,
		title:'<?php get_text("tim_ncc")?>',
		stack: false,
		//position:[ $(elem).offset().left, $(elem).offset().top + 35 - $(document).scrollTop() ]	,	
		open: function(event, ui){									
			$('.ui-draggable').css({"box-shadow": "0px 0px 10px rgb(136, 136, 136)"});										 
		},
		close: function(event, ui) {
		   $(".overlay_child").fadeOut(300);	
		},
	});		
	window.ids=0;
	create_grid(); 
	create_sub_grid("#rowed4",''); 
	phanquyen();
})
function save_data(action){	
	var url_tam="";
	var localGridData = $("#rowed5").jqGrid('getGridParam','data');
	var localdataToSend = JSON.stringify(localGridData);
	phancach="";
	i=0;
	dataToSend ='{';
	$('#container').find(':input[type=text],select,textarea,input[type=hidden]').each(function(){	
		if(i>0){
		  phancach=",";	
		}
		if(this.id!="GiaSauThue"){		
			//if(this.alt=="date"){	
			 	/*if(this.value!=""){	
					ngay_tam=(this.value).split("-");
					dataToSend += phancach + '"'+this.name + '":"' + ngay_tam[2] + "-" + ngay_tam[1] + "-"+ngay_tam[0]+'"';
				}else{
					dataToSend += phancach + '"'+this.name + '":"' + this.value +'"';
				}*/
				//url_tam += "&" + this.name +"="+ ngay_tam[2]+"-"+ngay_tam[1]+"-"+ngay_tam[0]  ;
			
			//}else{
				//url_tam += "&" + this.name +"="+ this.value  ;
				dataToSend += phancach + '"'+ this.name + '":"' + this.value +'"' ;
			//}
		}
		i++;
	})
	
	dataToSend +=',"Id":'+localdataToSend+'}';
	 //alert (localdataToSend)
	dataToSend = jQuery.parseJSON(dataToSend);	 
	 //alertObject (dataToSend)  
	 kiemtratrong=true;
	 key1="";
	 kiemtratrong1=true;
	 for (var key in dataToSend) {		
	  
	 if(key!="Id"){		 
	
		 if(key=="NgayLapPhieu"||key=="NgayXuat"||key=="ID_NCC"||key=="SoHoaDon"||key=="NgayHoaDon"){
			  if(dataToSend[key]==""){
				  kiemtratrong=false;
				  key1=key;
				  break;
			  }			
		 }
	 else{
		for (var key in dataToSend["Id"]) {	 
		 if(key=="MaThuoc"||key=="SoLoNhaSanXuat"||key=="SoLuong"||key=="NgaySanXuat"||key=="NgayHetHan"){
			 kiemtratrong=false; 
			 key1=key;  	
			  break;
	 			}	   
	 		}
		 }
	 }	   
	 }
	
	  // dataToSend["NgayLapPhieu"]
	  // dataToSend["NgayXuat"]
	  // dataToSend["ID_NCC"]
	  // dataToSend["Id"]
	/*   for (var key in dataToSend["Id"]) {
   			var obj = dataToSend["Id"][key];
 			  for (var prop in obj) {     
     		 if(obj.hasOwnProperty(prop)){
        		alert(prop + " = " + obj[prop]);
    			  }
  			 }
			}*/
	   	
	/*   check_mathuoc=	 $.ajax({
                        type: "POST",
                        url: "resource.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=add",
                        dataType:"json",
                        data: dataToSend,
                        async:false ,
                        success: function(response, textStatus, jqXHR) {			   
                        },
                    }).responseText;*/
	if(kiemtratrong){
	 $.post('resource.php?module=<?=$modules?>&view=<?=$view?>&action=controller&hienmaloi=1&oper='+action,
	 	dataToSend
	 )
     .done(function( data ) {
		 if(data!="1"){
			tooltip_message("Lưu phiếu xuất thành công");
		 	window.check_sub_form_change=false;
			$(".modal4732478").dialog( "close" );
		 }else{
			tooltip_message("Lưu phiếu xuất không thành công, vui lòng thử lại"); 
		 }
    	//alert( "Data Loaded: " + data );
     });
	}else{
		//$.jgrid.info_dialog(,,"Đóng");	
		dialog_button1("Lỗi","Dữ liệu xuất vào không đúng", 200, 300,key1)
	}
}
function create_main(action,callback){
	$(".modal4732478").append($(".hidden_form").html());
	window.hidden_form=$(".hidden_form").html();	 
	$(".hidden_form").html(""); 
	callback(arguments[0]);
}

function create_search(callback){
	$(".modal4732479").append("<div id='search_border'>"+$(".form_search").html()+"</div>");
	window.search_form=$(".form_search").html();	 
	$(".form_search").html(""); 
	callback();
}
function init_search(){	
	  jwerty.key('tab', false);
	  jwerty.key('shift+tab', false);		  
	  $('#search_border input[type=text]').bind("keydown", function(e) {			 
            if (jwerty.is("enter",e)||jwerty.is("tab",e)) {   
			
                /* FOCUS ELEMENT */
                var inputs = $(this).parents("#search_border").eq(0).find(":input[type=text]");
                var idx = inputs.index(this);			 
                if (idx == inputs.length - 1) {					 
                    //inputs[0].focus();					 
                } else {				 
					if(inputs[idx].lang=="maKH_check"){
						MaNCC_check("maKH","maKH1")
					}
					else if(inputs[idx].lang=="maThuoc_check"){
						MaThuocC_check("maThuoc","idThuoc","maThuoc1","ghichu")}
					else{
						inputs[idx + 1].focus(); //  handles submit buttons
					} 										 
                }			 
                return false;
            }else if(jwerty.is("shift+tab",e)){
				var inputs = $(this).parents("#search_border").eq(0).find(":input[type=text]");
                var idx = inputs.index(this);
				 if (idx >0) {					 
                    inputs[idx -1].focus(); //  handles submit buttons				 
                } 
			}				
        });
		$("#tungay").datepicker({
            showWeek: true,
            defaultDate: "+1w",
            changeMonth: true,
            changeYear: true,
            numberOfMonths: 1,
            dateFormat: $.cookie("ngayJqueryUi"),             
            onClose: function(selectedDate) {
             /*  // $("#to_day").datepicker("option", "minDate", $("#from_day_mask").val());
                fromday = $.datepicker.formatDate($.cookie("ngayJqueryUi"), new Date(selectedDate));
                $("#tungay").val(fromday);*/
            },
            onSelect: function(dat, inst) {
               // $("#tungay_mask").val(dat);
            }
        });
        $("#denngay").datepicker({
            showWeek: true,
            defaultDate: "+1w",
            changeMonth: true,
            changeYear: true,
            numberOfMonths: 1,
            dateFormat: $.cookie("ngayJqueryUi"),            
            onClose: function(selectedDate) {
             /* //  $("#from_day").datepicker("option", "maxDate", $("#to_day_mask").val());
                today = $.datepicker.formatDate($.cookie("ngayJqueryUi"), new Date(selectedDate));
                $("#denngay").val(today);
              //  $("#from_day").val(fromday);*/
            },
            onSelect: function(dat, inst) {
              //  $("#denngay_mask").val(dat);
            }
        });
       
		
}

function init_main(action){
	$("#save_data").click(function(){		
		save_data(action);
	})
	 var tam=0;  
	 $('.form_row').each(function() {		   
		tam+=$(this).width();
     });
	// $("#container").css("margin-left",($(window).width()-tam)/3+"px");
	 var currentTime = new Date();
	 tam = parseInt(currentTime.getFullYear()) + 1;        
     year_range = '2013:' + tam; 
	  $("#NgayLapPhieu,#NgayXuat,#NgayHoaDon").datepicker({
            showWeek: true,
            defaultDate: "+1w",
            changeMonth: true,
            changeYear: true,
            numberOfMonths: 4,
            dateFormat: $.cookie("ngayJqueryUi"),
            yearRange: year_range,
            onClose: function(selectedDate) {
               
            },
            onSelect: function(dat, inst) {
                 
            }
        });
		$(".modal4732478").click(function(){
			//alert("")
			 $(".ui-jqdialog_button").dialog( "close" );
			 $(".ui-jqdialog_button").remove();
			 $("body").remove(".ui-jqdialog_button");
		})
		
	// create_select('#ID_NCC',window.nhacungcap);
	 create_select('#ID_Kho',window.kho);
	 var colModel = $("#rowed3").getGridParam('colModel'); 
	 var rowData = jQuery('#rowed3').getRowData(window.ids);
	 if(action=="edit"){		 
		alertObject(rowData)	 
		for(var i=0;i<colModel.length;i++){
			$("#"+colModel[i].name).val(rowData[colModel[i].name]);
			if(colModel[i].edittype=="select"){				 
				if(colModel[i].accept!=false){				 	
				   //autocompleted_combobox("#"+colModel[i].name);
				}
			}		 
		}		  
		 var ttien=parseFloat($("#ThanhTien").val())+parseFloat($("#TienVAT").val());
		 $("#GiaSauThue1").html(ttien.formatMoney(0, '.', ','));		
		 $("#TienVAT1").html(parseFloat(($("#TienVAT").val())).formatMoney(0, '.', ',')); 		 
		 $("#ThanhTien1").html(parseFloat(($("#ThanhTien").val())).formatMoney(0, '.', ','));
		 
		 		   
		 create_sub_grid("#rowed5",'resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_phieu_xuat&oper=phieuxuat_sub&ids='+window.ids);	 	 
	 }else{
		 create_sub_grid("#rowed5",'resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_phieu_xuat&oper=phieuxuat_sub&ids=0');	 
		var colModel = $("#rowed3").getGridParam('colModel'); 
		var rowData = jQuery('#rowed3').getRowData(window.ids);
		//alertObject(colModel)	 
		for(var i=0;i<colModel.length;i++){			 
			if(colModel[i].edittype=="select"){				 
				if(colModel[i].accept!=false){				 	
				   //autocompleted_combobox("#"+colModel[i].name);
				}
			}
			
		 
		}
	 }
	 $("#ID_NCC1").html(split_Ncc(split_string_grid_select(window.nhacungcap,$("#ID_NCC").val())))
	 .attr("title",split_string_grid_select(window.nhacungcap,$("#ID_NCC").val()));
	 $("#MaPhieu").focus();	 
	   jwerty.key('tab', false);
	   jwerty.key('shift+tab', false);			  
	   $('#container input[type=text],#container textarea,#container select').bind("keydown", function(e) {		   		 
             if (jwerty.is("enter",e)||jwerty.is("tab",e)) {            
                /* FOCUS ELEMENT */
                var inputs = $(this).parents("#container").eq(0).find(":input[type=text], textarea,select");
                var idx = inputs.index(this);
				//alert(idx)
                if (idx == inputs.length - 1) {					 
					if(inputs[0].nodeName!="SELECT"){;
                    	inputs[0].select();
					}else{
						inputs[0].focus();
					}
                } else {		
					 $(".ui-datepicker").hide();  			 
                    
					if(inputs[idx].lang=="new_grid"){
						MaNCC_check("ID_NCC","ID_NCC1")
					}else{
						inputs[idx + 1].focus(); //  handles submit buttons
					}
					if(inputs[idx + 1].nodeName!="SELECT"){;
                   	 	inputs[idx + 1].select();
					}
                }
				if(inputs[idx].lang=="end"){					 
					if($("#rowed5").getDataIDs().length>0){	
						$("#rowed5").jqGrid("setSelection",$("#rowed5").getDataIDs()[0], true);						 
						$("#prowed5 .ui-icon-pencil").click();           
					}else{
						$("#prowed5 .ui-icon-plus").click();
						//action="edit";
					}
				}
                return false;
             }else if(jwerty.is("shift+tab",e)){
				var inputs = $(this).parents("#container").eq(0).find(":input[type=text], textarea,select");
                var idx = inputs.index(this);
				 if (idx >0) {					 
                    inputs[idx -1].focus(); //  handles submit buttons				 
                } 
			}
        });
		$(':input[type=text]').focusout(function(e) {		   	
		     if( $(this).attr("lang")=="new_grid"){
				 MaNCC_check("ID_NCC","ID_NCC1")
			 }
		})
	  
	 $.dateEntry.setDefaults({spinnerImage: ''});	
	 $("#NgayLapPhieu, #NgayXuat, #NgayHoaDon").dateEntry({dateFormat: $.cookie('ngayDateEntry')});
	 check_main_form_change_func();
	 /*nickname1 = window.nickname.split(";");		
        for (i = 0; i <= nickname1.length - 1; i++) {
		 
            temp = nickname1[i].split(":");
			//alert( temp[0])
            $('#ID_NguoiDuyet').append($('<option>', {
                value: temp[0],
                text: temp[1]
            }));
        }*/
		/*setInterval(function(){	
		$("#prowed5 .ui-pg-div").fadeOut(10);
		$("#prowed5 .ui-icon-plus").click();
		
		},200);*/
	
}
function create_select(elem,value){
	 tam = value.split(";");	
	 for (i = 0; i <= tam.length - 1; i++) {		 
            temp = tam[i].split(":");
			//alert( temp[0])
            $(elem).append($('<option>', {
                value: temp[0],
                text: temp[1]
            }));
     }
	
}
var lastsel;
function create_grid(){
 $("#rowed3").jqGrid({
		url:'resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_phieu_xuat&oper=phieuxuat',
		datatype: "json",	
		colNames:['Id','Mã','Người lập','Ngày lập','Ngày xuất','Người duyệt','Ngày duyệt','NCC','Kho','Loại xuất','%VAT','VAT','Thành tiền','Đơn thuốc','Thanh toán','Khách hàng','Toa tạm','IsPercent','Ghi chú'],
		colModel:[
			{name:'ID_XuatKho',index:'ID_XuatKho',search:false, width:"2%", editable:false,align:'right',hidden:true}, 
			{name:'MaPhieu',index:'MaPhieu', width:"5%", editable:true,align:'center',hidden:false,editrules: {required:true},edittype:"text"},
			{name:'ID_NhanVien',index:'ID_NhanVien', width:"5%", editable:true,align:'center',hidden:false,editrules: {required:true},edittype:"select",editoptions: {value: window.nickname}, formatter: "select"},
			{name:'NgayLapPhieu',index:'NgayLapPhieu',search:false, width:"5%", editable:true,align:'center',hidden:false,edittype:"text",editoptions: {	  
			  dataInit: function(element) {
				$(element).datepicker({dateFormat: 'dd-mm-yy'})
			  }
			}}, 
			{name:'NgayXuat',index:'NgayXuat',search:false, width:"5%", editable:true,align:'center',hidden:false,edittype:"text",editoptions: {	  
			  dataInit: function(element) {
				$(element).datepicker({dateFormat: 'dd-mm-yy'})
			  }
			}}, 	
			 
			{name: 'ID_NguoiDuyet',accept:false, index: 'ID_NguoiDuyet', width: "5%",editable:true, align: 'center', formatter: "select", edittype: "select", hidden: false, editoptions: {value: window.nickname			 
			   }, formoptions: {}},
			{name:'NgayDuyet',index:'NgayDuyet',search:false, width:"5%", editable:true,align:'center',hidden:false,edittype:"text",editoptions: {	  
			  dataInit: function(element) {
				$(element).datepicker({dateFormat: 'yy-mm-dd'})
			  }
			}}, 		 
			{name:'ID_NCC',index:'ID_NCC', width:"10%", editable:true,align:'center',edittype:"select",formatter: "select",hidden:false, editoptions: {value: window.nhacungcap			 
			   }}, 
			{name:'ID_Kho',index:'ID_Kho', width:"7%", editable:true,align:'center',edittype:"select",hidden:false,formatter: "select", editoptions: {value: window.kho			 
			   }}, 
			{name:'ID_LoaiNhapXuat',index:'ID_LoaiNhapXuat', width:"10%", editable:true,align:'center',edittype:"text",hidden:false,formatter: "select", editoptions: {value: window.loainhapxuat			 
			   }}, 
			{name:'PercentVAT',index:'PercentVAT', width:"3%", editable:true,align:'right',edittype:"text",hidden:false,formatter:'number',formatoptions:{decimalSeparator:" ", thousandsSeparator: "", decimalPlaces: 0,  defaultValue: '0'}},
			{name:'TienVAT',index:'TienVAT', width:"2%", editable:true,align:'right',edittype:"text",hidden:false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: "", defaultValue: '0'}},
			{name:'ThanhTien',index:'ThanhTien', width:"5%", editable:true,align:'right',edittype:"text",hidden:false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: "", defaultValue: '0'}},
			{name:'IDDonThuoc',index:'IDDonThuoc', width:"6%", editable:true,align:'center',edittype:"text",hidden:false},
			{name:'DaThanhToan',index:'DaThanhToan', width:"7%", editable:true,align:'center',edittype:"text",hidden:false},
			{name:'TenKhachHang',index:'TenKhachHang', width:"6%", editable:true,align:'center',edittype:"text",hidden:false},
			{name:'IsXuatChoToaTam',index:'IsXuatChoToaTam', width:"6%", editable:true,align:'center',edittype:"text",hidden:false},
			{name:'IsPercent',index:'IsPercent', width:"10%", editable:true,align:'left',edittype:"text",hidden:false}, 
			{name:'GhiChu',index:'GhiChu', width:"10%", editable:true,align:'left',edittype:"text",hidden:false}, 			 
						 	 	 
		],
		multiselect :false,
		loadonce: false,
		scroll: false,		 
		modal:true,	 	 
		rowNum: 1000000,		 
		rowList: [], // disable page size dropdown
                    pgbuttons: false, // disable page control like next, back button
            pgtext: null, // disable pager text like 'Page 0 of 10'
		pager: '#prowed3',
		sortname: 'ID_NhapKho',
		height:100,
		width: 100,
		viewrecords: true,	
		ignoreCase:true,
		shrinkToFit:true,
		
		
	//hoverrows:false,
	//jsonReader:{repeatitems:true,subgrid:{repeatitems:false}},	
		sortorder: "desc",
		serializeRowData: function (postdata) { 		 	
			//$("#rowed3").trigger("reloadGrid");		
			//return postdata;
		},
		onSelectRow: function(id) {
			window.ids=id;
			//alert('resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_phieu_xuat&oper=phieuxuat_sub&ids='+id)
			//jQuery("#rowed4").jqGrid().setGridParam({url:'modules/opening_stock/data1_sub.php?id='+lastsel}).trigger("reloadGrid");		
			jQuery("#rowed4").jqGrid().setGridParam({url:'resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_phieu_xuat&oper=phieuxuat_sub&ids='+id}).trigger("reloadGrid");
			/*ids=$('#rowed3').jqGrid('getDataIDs');
			
			
			for(i=0;i<ids.length;i++){		
				var rowData = jQuery('#rowed3').getRowData(ids[i]);				 
					if(rowData['PercentVAT']==10){
						//$('#rowed3').jqGrid('setCell',ids[i],"PercentVAT","",{background:'red'});
					}
					   
		 	}
			
			
			  if (id !== lastsel) {
				 $("#rowed3").jqGrid('restoreRow', lastsel);
				 $("#rowed3").jqGrid('editRow', id, true);
				 lastsel = id;				 
			  } else {
				 $("#rowed3").jqGrid('restoreRow', lastsel);
				 lastsel = "";
				// alert(id)
			  }*/
			 if( $("#rowed3").jqGrid('getCell', id, 'ID_NguoiDuyet')==0){
				$("#edit_rowed3").removeClass('ui-state-disabled');
				$("#confirm_rowed3").removeClass('ui-state-disabled');
			 }else{
				 $("#edit_rowed3").addClass('ui-state-disabled');
				 $("#confirm_rowed3").addClass('ui-state-disabled');
			 }
			 
			//  $("#rowed3").jqGrid('getCell', id, 'NgayDuyet');
			  
		},
		ondblClickRow: function (rowId, rowIndex, columnIndex) {
			$("#prowed3 .ui-icon-pencil").trigger('click'); 
 		},
		loadComplete: function(data) {	
		//$("#rowed3 #"+window.ids).focus();	
		//$("#rowed3").jqGrid("setSelection",window.ids, true);
		ids=$('#rowed3').jqGrid('getDataIDs');				
			for(i=0;i<ids.length;i++){		
				var rowData = jQuery('#rowed3').getRowData(ids[i]);					 			 
					if(rowData['ID_NguoiDuyet']!=""){
						 //$('#rowed3').jqGrid('setRowData', ids[i], false, {background:'#e0e0e0'});
						$('#rowed3').jqGrid('setCell',ids[i],"ID_NguoiDuyet","",{background:'red'});
						$('#rowed3').jqGrid('setCell',ids[i],"NgayDuyet","",{background:'red'});
					}					   
		 	}	
			//$("#rowed3").setColProp('ID_PhongBanCha', { editoptions: { value: ""} });				 
		},	  
		caption: "<?php get_text("phieunhap")?>"
	});	
	$("#rowed3").jqGrid('navGrid',"#prowed3",{add: false,del:true,edit:false,search:false},
	{},
	{},
	{reloadAfterSubmit: true, url: 'resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=controller&oper=del'}	
	);
	
	$("#rowed3").jqGrid('navButtonAdd', '#prowed3', {caption: "<?php get_text("them")?>", buttonicon: 'ui-icon-document',
            onClickButton: function() {
				  dialog_main_callback("<?php get_text("them")?>", 95, 95, "4732478", "",".hidden_form");
				  create_main("add",init_main);               
            },
            title: "<?php get_text("them")?>",
            position: "last"
    });
	$("#rowed3").jqGrid('navButtonAdd', '#prowed3', {caption: "<?php get_text("sua")?>", buttonicon: 'ui-icon-pencil',id : 'edit_rowed3',
            onClickButton: function() {
				if(window.ids>0){				 
				  dialog_main_callback("<?php get_text("sua")?>", 95, 95, "4732478", "",".hidden_form");
				  create_main("edit",init_main);       
				}else{
					tooltip_message("<?php get_text("chonphieu")?>")
				}
            },
            title: "<?php get_text("sua")?>",
            position: "last"
    });
	$("#rowed3").jqGrid('navButtonAdd', '#prowed3', {caption: "<?php get_text("duyet")?>", buttonicon: 'ui-icon-person', id : 'confirm_rowed3',
            onClickButton: function() {
				
				//dataToSend = jQuery.parseJSON(dataToSend);
				$.post('resource.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=confirm&id='+window.ids)
    			 .done(function( data ) {		
				 //alert(window.ids)
				 $("#rowed3").trigger("reloadGrid")
				 //$('#rowed3 #'+window.ids ).focus();
				 //$("#rowed3").jqGrid("setSelection",window.ids, true);	
    			 });
	 
            },
            title: "<?php get_text("duyet")?>",
            position: "last"
    });	
	$("#rowed3").jqGrid('navButtonAdd', '#prowed3', {caption: "<?php get_text("timkiem")?>", buttonicon: 'ui-icon-search', id : 'search_rowed3',
            onClickButton: function() {			 
				if ($(".modal4732479").dialog( "isOpen" )===true){					 					
					 $(".modal4732479").dialog( "close" );
					 $(".modal4732479").remove();
					// $("body").remove(".modal4732479");		 	  
					 dialog_search_callback("<?php get_text("timkiem")?>", "580px", "270px", "4732479", "",".form_search");
					 create_search(init_search);  
					 return false;					
				}else{
					 dialog_search_callback("<?php get_text("timkiem")?>", "580px", "270px", "4732479", "",".form_search");
				 	 create_search(init_search);  
					 return false;	
				}
		 
				
            },
            title: "<?php get_text("timkiem")?>",
            position: "last"
    });
	$("#rowed3").jqGrid('navButtonAdd', '#prowed3', {caption: "<?php get_text("in")?>", buttonicon: 'ui-icon-print',id:'printer',
            onClickButton: function() {				 
			$('#rowed4').setGridParam({loadonce: true});	
			$('#prowed4 .ui-icon-refresh ').click();			 
			//set_Timeout(printer,200);
			 
			
			set_Timeout(printer,200,"print");  				 
               // elem = 1 + Math.floor(Math.random() * 1000000000);
               // dialog_main("In lịch bộ phận", 90, 90, elem, "resource.php?module=report&view=lich_lam_viec&action=in_lich_lam_viec&idphong=" + $("#phongban option:selected").val() + '&loailich=' + $("#loailich option:selected").val() + '&from=' + elem1[0] + '&to=' + elem1[1] + "&mang_ngay=" + mang_ngay)
            },
            title: "<?php get_text("in")?>",
            position: "last"
    }); 
	$("#rowed3").jqGrid('navButtonAdd', '#prowed3', {caption: "<?php get_text("xem")?>", buttonicon: 'ui-icon-document',id:'printer_preview',
            onClickButton: function() {				 
			$('#rowed4').setGridParam({loadonce: true});	
			$('#prowed4 .ui-icon-refresh ').click();					 
			set_Timeout(printer,200,"view");			 
			/*$(".ui-icon-print").printPage({			
					url: window.url,
					attr: "href",
					message:"Máy in đang khởi tạo. Vui lòng đợi"
			});*/ 				 
               // elem = 1 + Math.floor(Math.random() * 1000000000);
               // dialog_main("In lịch bộ phận", 90, 90, elem, "resource.php?module=report&view=lich_lam_viec&action=in_lich_lam_viec&idphong=" + $("#phongban option:selected").val() + '&loailich=' + $("#loailich option:selected").val() + '&from=' + elem1[0] + '&to=' + elem1[1] + "&mang_ngay=" + mang_ngay)
            },
            title: "<?php get_text("xem")?>",
            position: "last"
    });	 
	get_printer("#prowed3 #printer,#prowed3 #printer_preview",set_printer,'<?php echo $_SERVER['REMOTE_ADDR'] ?>','<?php echo $_COOKIE['username_window'] ?>','Phieu_nhap_mua_hang');	
		
			  
	$("#rowed3").setGridWidth($(window).width()-10);
	$("#rowed3").setGridHeight($(window).height()/100*30);
	$("#rowed3").jqGrid('bindKeys', {"onEnter":function( rowid ) {
		} } );	
		$("#gbox_rowed3").attr("tabindex","1");
		//$("#gbox_rowed3").focus();	
		$("#gbox_rowed3").bind('keydown', function(e) {			
			if((jwerty.is("ctrl+m",e))){		 
				 $("#rowed3").jqGrid('restoreRow', lastsel);
				 $("#rowed3").jqGrid('editRow', rowid, true);
				 lastsel = rowid;
			}
		}) 	 
	 
}
 
function printer(mode){	
 if($('#rowed3').jqGrid('getGridParam', 'selrow')>0){  
			var localGridData = $("#rowed4").jqGrid('getGridParam','data');
			var localdataToSend = JSON.stringify(localGridData);
			var rowData = jQuery('#rowed3').getRowData(window.ids);
			var col_name = $('#rowed3').jqGrid('getGridParam', 'colModel');	
			phancach="";
			i=0;
			dataToSend ='{';			 
			for(i=0;i<col_name.length;i++){	
				if(i>0){
				  phancach=",";	
				}		
				
				if(col_name[i]["name"]=="ID_Kho"){	
					kho1 = window.kho.split(";");
					for (ii = 0; ii <= kho1.length - 1; ii++) {						 
						temp = kho1[ii].split(":");											
						if(temp[0]==rowData[col_name[i]["name"]]){
							rowData[col_name[i]["name"]]=temp[1];						 
							break;
						}					 
					}					 
				}
				if(col_name[i]["name"]=="ID_NhapXuat"){	
					loainhapxuat1 = window.loainhapxuat.split(";");
					for (ii = 0; ii <= loainhapxuat1.length - 1; ii++) {						 
						temp = loainhapxuat1[ii].split(":");											
						if(temp[0]==rowData[col_name[i]["name"]]){
							rowData[col_name[i]["name"]]=temp[1];						 
							break;
						}					 
					}					 
				}
				dataToSend += phancach + '"'+col_name[i]["name"] + '":"' + rowData[col_name[i]["name"]] +'"';				 		
				//url	+= "&" + col_name[i]["name"] + "=" +	 rowData[col_name[i]["name"]];
					 
					   
		 	}
			//alert(dataToSend)
			dataToSend +=',"Id":'+localdataToSend+'}';
			//alert (dataToSend);
			dataToSend = jQuery.parseJSON(dataToSend);	 
				//alert(dataToSend)
			
			  
			$.post('resource.php?module=report&view=<?=$modules?>&action=phieu_nhap_mua_hang&id_form=31&type='+mode,dataToSend	 		 
	 		)
    		.done(function( data ) {				
			   if(mode=="view"){
			 	  create_print_popup(data,800,600,0,0);				 
			   }else{
				  create_print_dialog();
				  create_print_popup(data,1,1,0,0);				  
			   }
					 
     		});  
			
 }else{ 
	  tooltip_message("<?php get_text("chondong")?>");
 }
	
}
			var kiemtra = false; 
            window.nickname = $.ajax({url: 'resource.php?module=web_services&function=get_auto_edit_option_byid&action=index&term=&status=2&tables=DM_NhanVien&id=ID_NhanVien&name=NickName', async: false, success: function(data, result) {
                    if (!result)
                        alert('Không load được tên');
            }}).responseText;
			window.nhacungcap = $.ajax({url: 'resource.php?module=web_services&function=get_auto_edit_option_byid&action=index&term=&status=2&tables=DM_NhaCungCap&id=ID_NCC&name=TenNCC', async: false, success: function(data, result) {
                    if (!result)
                        alert('Không load được nhà cung cấp');
            }}).responseText;
			window.kho = $.ajax({url: 'resource.php?module=web_services&function=get_auto_edit_option_byid&action=index&term=&status=2&tables=DM_Kho&id=ID_Kho&name=TenKho', async: false, success: function(data, result) {
                    if (!result)
                        alert('Không load được kho');
            }}).responseText;
			window.loainhapxuat = $.ajax({url: 'resource.php?module=web_services&function=get_auto_edit_option_byid&action=index&term=&status=2&tables=GD2_DM_Nhapxuat&id=ID_NhapXuat&name=Ma_NhapXuat', async: false, success: function(data, result) {
                    if (!result)
                        alert('Không load được tên');
            }}).responseText;
function luoi_MaThuoc(){	
	 	 window.id_dong = $("#rowed5").jqGrid('getGridParam', 'selrow');
	 	 var MaThuoc = $("#"+id_dong+"_MaThuoc").val();
		 //alert (MaThuoc);
		 dataToSend ='{"MaThuoc":"'+MaThuoc+'"}';
		 dataToSend = jQuery.parseJSON(dataToSend);
		 check_mathuoc=	 $.ajax({
                        type: "POST",
                        url: "resource.php?module=<?=$modules?>&view=<?=$view?>&action=controller_mathuoc_check",
                        dataType:"json",
                        data: dataToSend,
                        async:false ,
                        success: function(response, textStatus, jqXHR) {			   
                        },
                    }).responseText;
			if (check_mathuoc ==1){
						
				if ($(".dialog_dm_thuoc").dialog( "isOpen" )===false){
					$("body").append("<div class='overlay_child' style='width:100%;height:100%;position: absolute; z-index:1000;background:#000;top:0; opacity:0.9;filter:alpha(opacity=90);'></div>  ");	
					$(".overlay_child").click(function(){
						$(".dialog_dm_thuoc").dialog( "close" );			 
						$(".overlay_child").fadeOut(300);		
					})
					$(".dialog_dm_thuoc").dialog( "open" )
				}
			}else{	
				
				tam = check_mathuoc.split(";");
				ID_Thuoc = tam[1];
				TenBietDuoc = tam[2];
				TenDonViTinh =  tam[3];
				check_product_available(MaThuoc,TenBietDuoc,ID_Thuoc,TenDonViTinh)			
				//alert (ID_Thuoc[1]);
				
			}
}
function create_sub_grid(elem,url){	 
var local
var count_row
if(elem=="#rowed5"){local=true}
else {local=false}
 $(elem).jqGrid({
		url:url,
		editurl:'clientArray',
		datatype: "json",	
		colNames:['id_main','id_thuoc','Mã thuốc','Tên biệt dược','<?php get_text("dvt")?>','<?php get_text("lo_noibo")?>','<?php get_text("soluong")?>','<?php get_text("dongia")?>','<?php get_text("thanhtien")?>','Đơn giá vốn','Tiền vốn','Chiết khấu'],
		colModel:[
		
			{name:'ID_XuatKho',index:'ID_XuatKho', width:"5%", editable:true,align:'left',hidden:true,edittype:"text",editoptions: {defaultValue: window.ids}},		
			{name:'ID_Thuoc',index:'ID_Thuoc', width:"8%", editable:false,align:'center',edittype:"text",hidden:true},
			{name:'MaThuoc',index:'MaThuoc', width:"8%", editable:true,align:'center',edittype:"text",editrules: {required: false},hidden:false,newgrid:true,func_grid:"luoi_MaThuoc"},
			{name:'TenBietDuoc',index:'TenBietDuoc', width:"25%", editable:false,align:'left',editrules: {required: true},edittype:"text",hidden:false},
			{name:'TenDonViTinh',index:'TenDonViTinh',search:false, width:"3%", editable:false,align:'center',hidden:false,edittype:"text"}, 			
			{name:'SoLoHeThong',index:'SoLo', width:"7%", editable:false,align:'center',edittype:"text",hidden:false,editrules: {required: false}},			 
			{name:'SoLuong',index:'SoLuong', width:"5%", editable:true,align:'right',edittype:"text",hidden:false,editrules: { number: true, required: false},formatter:'integer',formatoptions:{defaultValue: '0'}}, 
			{name:'DonGia',index:'DonGia', width:"5%", editable:true,align:'right',edittype:"text",editrules: { number: true, required: false},hidden:false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: "", defaultValue: '0'}},
			{name:'ThanhTien',index:'ThanhTien', width:"7%", editable:true,align:'right',edittype:"text",hidden:false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: "", defaultValue: '0'}},
			{name:'DonGiaVon',index:'DonGiaVon', width:"7%", editable:true,align:'right',edittype:"text",hidden:false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: "", defaultValue: '0'}},
			{name:'TienVon',index:'TienVon', width:"7%", editable:true,align:'right',edittype:"text",hidden:false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: "", defaultValue: '0'}},
			{name:'ChietKhau',index:'ChietKhau', width:"7%", editable:true,align:'right',edittype:"text",hidden:false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: "", defaultValue: '0'}},
			 			 
		],
		loadonce: local,
		scroll: false,		 
		modal:true,	 	 
		rowNum: 1000000,
		column:["TenBietDuoc"],
		func_column:["luoi_TenBietDuoc"],		 
		rowList: [], // disable page size dropdown
        pgbuttons: false, // disable page control like next, back button
        pgtext: null, // disable pager text like 'Page 0 of 10'
		pager: '#p'+elem.replace("#",""),
		sortname: 'ID_NhapKho',
		height:100,
		width: 100,
		viewrecords: true,	
		ignoreCase:true,
		shrinkToFit:true,
		
		
	//hoverrows:false,
	//jsonReader:{repeatitems:true,subgrid:{repeatitems:false}},	
		sortorder: "desc",
		serializeRowData: function (postdata) { 		 	
			//$(elem).trigger("reloadGrid");		
			//return postdata;
		},
		onSelectRow: function(id) {
				//var rowData = jQuery('#rowed5').getRowData(id);	
				//alert(rowData['NgaySanXuat'])			 
					 
			//if(elem=="#rowed5"){
				/*if( window.check_sub_form_change==true){
					dialog_button(callback_check_sub_form_change_func);
				}else{*/
				//	$("#prowed5 .ui-icon-pencil").click();
				//}
				
				/*//alert("")
			  if (id !== lastsel) {
				 $(elem).jqGrid('restoreRow', lastsel);
				 $(elem).jqGrid('editRow', id, true);
				 lastsel = id;		
				 	$("#rowed5_ilsave").removeClass('ui-state-disabled');
					$("#rowed5_ilcancel").removeClass('ui-state-disabled');
					$("#rowed5_iladd").addClass('ui-state-disabled');
					$("#rowed5_iledit").addClass('ui-state-disabled');		 
			  } else {
				 $(elem).jqGrid('restoreRow', lastsel);
				 lastsel = "";
				// alert(id)
			  }*/
			//}
			 
		},
		ondblClickRow: function (rowId, rowIndex, columnIndex) {
			if(elem=="#rowed4"){
				$("#prowed3 .ui-icon-pencil").trigger('click'); 
			}else if(elem=="#rowed5")	{			
				$("#prowed5 .ui-icon-pencil").click();
			}				
 		},
		loadComplete: function(data) {	
			//$('#rowed4').setGridParam({loadonce: true});
			if(elem=="#rowed4"){
				$('#rowed4').setGridParam({loadonce: false});	
			}
			count_row = $(elem).jqGrid('getGridParam','records') 
		},	  
		caption: "<?php get_text("chitietnhap") ?>"
	});	
	 
	
	
		 
				
		if(elem=="#rowed4"){
			$(elem).setGridWidth($(window).width()-10);
			$(elem).setGridHeight($(window).height()-$("#gbox_rowed3").height()-95); 
			$(elem).jqGrid('navGrid',"#prowed4",{add: false,del:false,edit:false,search:false});			
		}else{		
			$(elem).jqGrid('bindKeys', {"onEnter":function( rowid ) {				
					$("#prowed5 .ui-icon-pencil").click();				
			} } );	 				 
			 tam11=$("#PercentVAT").val();
			 tam12=$("#ThanhTien").val();	 
			$("#PercentVAT").bind("keyup",function(e) {				
				 if (((e.keyCode >= 48)&&(e.keyCode <= 57))||(e.keyCode==8)||(e.keyCode==46)||((e.keyCode >= 96)&&(e.keyCode <= 105))) {	// chấp nhận từ 0-9, backspace và delete		 
					tam11=$("#PercentVAT").val();
					tam12=$("#ThanhTien").val();
					sum_total_noVAT(false);						  
				 }else if(e.keyCode !=13) {//Trừ enter và các key code điều kiện trên thì undo
				 //alert("")
					$("#PercentVAT").val(tam11);
					$("#ThanhTien").val(tam12);
					$("#PercentVAT1").html(parseFloat(tam11).formatMoney(0, '.', ','));
					$("#ThanhTien1").html(parseFloat(tam12).formatMoney(0, '.', ','));						  
				 }
			})
			$(elem).setGridWidth($(".thongtinchinh").width()+5);
			$(elem).setGridHeight($(window).height()-$(".thongtinchinh").height()-160);
			$(elem).jqGrid('navGrid',"#prowed5",{add: false,del:false,edit:false,search:false}); 
			$(elem).jqGrid('inlineNav', '#prowed5', {add: true, addtext: '', edittext: '', edit: true, closeOnEscape: true,
            addParams: {
				keys:true,
                position: "last",
                mtype: 'post',
				formname:"Chinhsualich", 							
                addRowParams: {
					keys:true,
					formname:"Chinhsualich",
                    oneditfunc: function(rowId) {	
					$("#rowed5").jqGrid('unbindKeys');					
					if(count_row>0) {
				$("#rowed5").jqGrid("setCell", rowId, 'SoLoHeThong',$('#rowed5').getRowData($("#rowed5").getDataIDs()[0])['SoLoHeThong'] ); 
							}
					 	calculate(rowId);
						check_sub_form_change_func(rowId,elem);
						jwerty.key('tab', false);						
						$("#"+rowId+"_MaThuoc").focus();
						$("#" + rowId + "_NgaySanXuat, #" + rowId + "_NgayHetHan").dateEntry({dateFormat: 'dmy-'});									  
                    },
                    aftersavefunc: function(rowId, response,lastsel) {
                        //updateButtonState($(this));
					
                        if (response.responseText == 1) {
						//$.jgrid.info_dialog("Lỗi","Giờ Bắt Đầu/Kết Thúc Trùng Với Lịch Khác","Đóng");//tao dialog

                        } else {
							$("#rowed5").jqGrid('bindKeys', {"onEnter":function( rowid ) {				
								$("#prowed5 .ui-icon-pencil").click();				
							} } );
 							sum_total_noVAT(true); 
						    $('#rowed5').focus();	      
                        }                    
                    },
                    afterrestorefunc: function() {
						$("#rowed5").jqGrid('bindKeys', {"onEnter":function( rowid ) {				
							$("#prowed5 .ui-icon-pencil").click();				
						} } );
						 $('#rowed5').focus(); 
                        //updateButtonState($(this));
                    },
					 
                }

            },
            editParams: {
				keys:true,
				formname:"Chinhsualich",
                oneditfunc: function(rowId) {
					$("#rowed5").jqGrid('unbindKeys');	
					calculate(rowId);
					check_sub_form_change_func(rowId,elem);
					jwerty.key('tab', false);
					$("#"+rowId+"_MaThuoc").focus();
					$.dateEntry.setDefaults({spinnerImage: ''});	
					$("#" + rowId + "_NgaySanXuat, #" + rowId + "_NgayHetHan").dateEntry({dateFormat: 'dmy-'});										 
                },
                aftersavefunc: function(rowId, response) {		
                    if (response.responseText == 1) {			
					
                    } else {
						$("#rowed5").jqGrid('bindKeys', {"onEnter":function( rowid ) {				
							$("#prowed5 .ui-icon-pencil").click();				
						} } );
						sum_total_noVAT(true);
						$('#rowed5').focus();			       	               
                    }              
                },
                afterrestorefunc: function() {
					$("#rowed5").jqGrid('bindKeys', {"onEnter":function( rowid ) {				
						$("#prowed5 .ui-icon-pencil").click();				
					} } );
				  		$('#rowed5').focus();
                }}

        });
    }}
function calculate(rowId){
	_DonGia=$("#"+rowId+"_DonGia").val();
	_ThanhTien=$("#"+rowId+"_ThanhTien").val();
	_SoLuong=$("#"+rowId+"_SoLuong").val();
	$("#"+rowId+"_DonGia").bind("keyup",function(e) {
		//alert(e.keyCode)		 
		 if (((e.keyCode >= 48)&&(e.keyCode <= 57))||(e.keyCode==8)||(e.keyCode==46)||((e.keyCode >= 96)&&(e.keyCode <= 105))) {	// chấp nhận từ 0-9, backspace và delete		 
			  $("#"+rowId+"_ThanhTien").val(($("#"+rowId+"_SoLuong").val()*$("#"+rowId+"_DonGia").val()).toFixed(0));
			  _DonGia=$("#"+rowId+"_DonGia").val();			   
		 }else if(e.keyCode !=13) {//Trừ enter và các key code điều kiện trên thì undo
			  $("#"+rowId+"_DonGia").val(_DonGia);			 
		 }
	})
	$("#"+rowId+"_ThanhTien").bind("keyup",function(e) {
		 if (((e.keyCode >= 48)&&(e.keyCode <= 57))||(e.keyCode==8)||(e.keyCode==46)||((e.keyCode >= 96)&&(e.keyCode <= 105))) {
			  $("#"+rowId+"_DonGia").val(($("#"+rowId+"_ThanhTien").val()/$("#"+rowId+"_SoLuong").val()).toFixed(0));			 
			  _ThanhTien=$("#"+rowId+"_ThanhTien").val();
		 }else if(e.keyCode !=13) {
			  $("#"+rowId+"_ThanhTien").val(_ThanhTien);			  
		 }
	})
	$("#"+rowId+"_SoLuong").bind("keyup",function(e) {
		 if (((e.keyCode >= 48)&&(e.keyCode <= 57))||(e.keyCode==8)||(e.keyCode==46)||((e.keyCode >= 96)&&(e.keyCode <= 105))) {
			  $("#"+rowId+"_DonGia").val(($("#"+rowId+"_ThanhTien").val()/$("#"+rowId+"_SoLuong").val()).toFixed(0));				 
			_SoLuong=$("#"+rowId+"_SoLuong").val();
		 }else if(e.keyCode !=13) {
			  $("#"+rowId+"_SoLuong").val(_SoLuong);			  
		 }
	})
}
function check_product_available(mathuoc,tenthuoc,id_thuoc,tendonvitinh){	
	kiemtra=false;	
	id_rowed5=$('#rowed5').jqGrid('getDataIDs');			
	for(i=0;i<id_rowed5.length;i++){		
		var rowData = jQuery('#rowed5').getRowData(id_rowed5[i]);	 			 
			if(rowData['MaThuoc']==mathuoc){
				 tooltip_message(tenthuoc+" đã có trên phiếu xuất này");
				 kiemtra=true;
				 $("#"+id_dong+"_TenBietDuoc").val("");
				 $("#"+id_dong+"_TenDonViTinh").val("");
				 break;
			}			   
	}	 
	if(kiemtra==false){
			
		//alert(ID_Thuoc[1])	
		$("#"+id_dong+"_MaThuoc").val(mathuoc);
		$("#rowed5").jqGrid("setCell", id_dong, 'ID_Thuoc', id_thuoc); 
		$("#rowed5").jqGrid("setCell", id_dong, 'TenDonViTinh', tendonvitinh); 
		$("#rowed5").jqGrid("setCell", id_dong, 'TenBietDuoc', tenthuoc); 
		//$("#"+id_dong+"_ID_Thuoc").val(ID_Thuoc[1]);
		//$("#"+id_dong+"_TenBietDuoc").val(TenBietDuoc);
		//$("#"+id_dong+"_ID_Thuoc").val(ID_Thuoc);
		//$("#"+id_dong+"_TenDonViTinh").val(TenDonViTinh);		
		if ($(".dialog_dm_thuoc").dialog( "isOpen" )===true){
			$(".dialog_dm_thuoc").dialog( "close" )
		}
	    $("#prowed5 .ui-icon-disk").click();
	    $("#prowed5 .ui-icon-pencil").click();	
	    $("#"+id_dong+"_SoLoNhaSanXuat").focus();		
			
	}	
}

function sum_total_noVAT(value){
	tongcong=0;		
	if(value==true){
		id_rowed5=$('#rowed5').jqGrid('getDataIDs');	
		for(i=0;i<id_rowed5.length;i++){		
			var rowData = $('#rowed5').getRowData(id_rowed5[i]);	 			 
				tongcong+=parseFloat(rowData['ThanhTien']);			   
		}
	}else{
		tongcong=$('#ThanhTien').val();
	}
	vat=tongcong/100*$('#PercentVAT').val();	 
	$('#TienVAT').val(vat);
	$('#GiaSauThue').val(parseFloat(tongcong)+parseFloat(vat));			 
	$('#ThanhTien').val(tongcong);	 
	$('#ThanhTien1').html(parseFloat(tongcong).formatMoney(0, '.', ','));	
	$('#TienVAT1').html(parseFloat(vat).formatMoney(0, '.', ','));	
	$('#GiaSauThue1').html((parseFloat(tongcong)+parseFloat(vat)).formatMoney(0, '.', ','));	 
	
}
function check_sub_form_change_func(rowId,rowed){ 
	  $(rowed).find("td input.editable").each(function(){	
		  $("#"+$(this).attr("id")).bind("keyup",function(e){			   
			  if (e.keyCode!=13){				 
				 window.check_sub_form_change=true; 				
			  };		 
		  }) 	 		  
	  })
	/*$("#"+rowId+"_MaThuoc","#"+rowId+"_TenBietDuoc","#"+rowId+"_TenDonViTinh","#"+rowId+"_SoLoNhaSanXuat","#"+rowId+"_SoLoHeThong","#"+rowId+"_SoLuong","#"+rowId+"_DonGia","#"+rowId+"_ThanhTien","#"+rowId+"_NgaySanXuat","#"+rowId+"_NgayHetHan").bind("keyup",function(e){
		
	})*/	 
}
function check_main_form_change_func(rowId,rowed){ 
	  $('#container').find(':input[type=text],select,textarea,input[type=hidden]').each(function(){	
		  $("#"+$(this).attr("id")).bind("keyup",function(e){			   
			  if (e.keyCode!=13){				 
				 window.check_sub_form_change=true; 				
			  };		 
		  }) 	 		  
	  })
	/*$("#"+rowId+"_MaThuoc","#"+rowId+"_TenBietDuoc","#"+rowId+"_TenDonViTinh","#"+rowId+"_SoLoNhaSanXuat","#"+rowId+"_SoLoHeThong","#"+rowId+"_SoLuong","#"+rowId+"_DonGia","#"+rowId+"_ThanhTien","#"+rowId+"_NgaySanXuat","#"+rowId+"_NgayHetHan").bind("keyup",function(e){
		
	})*/	 
}

function dialog_search_callback(title, width, height, elem, links,form) {     
	if(links!=""){
		$("body").append("<div class='ui-jqdialog modal" + elem + "'><div class='loading'><div id='loading'></div></div><iframe id='frame1' class='frame_" + elem + "' src=''></iframe></div>");
	}else{
		$("body").append("<div class='ui-jqdialog modal" + elem + "'> </div>");
	}
	 
	if (String(width).match(/px/g)==null){
		 width = ($(window).width() / 100 * parseFloat(width)).toFixed(0);		
	}else{		
		width=String(width).replace("px","")
	};
	if (String(height).match(/px/g)==null){
		 height = ($(window).height() / 100 * parseFloat(height)).toFixed(0);
	}else{		
		 height=String(height).replace("px","")
	};   
    $(".modal" + elem).dialog({
        height: height,
        width: width,
        modal: false,
        title: title,
		draggable: true,
		resizable: false,
        stack: false,
		buttons: {
            'Tìm kiếm': function() {	
				$('#rowed3').setGridParam({postData: null}); //reset post data	
				var url_tam="";				
				phancach="";
				i=0;
				dataToSend ='{';
				$('.modal4732479').find(':input[type=text],select,textarea,input[type=hidden]').each(function(){	
					if(i>0){
					  phancach=",";	
					}
				 	if(this.value!=""){	
						//if(this.alt=="date"){	
							//if(this.value!=""){	
								//ngay_tam=(this.value).split("-");
								//dataToSend += phancach + '"'+this.name + '":"' + ngay_tam[2] + "-" + ngay_tam[1] + "-"+ngay_tam[0]+'"';
							//}else{
							//	dataToSend += phancach + '"'+this.name + '":"' + this.value +'"';
							//}
							//url_tam += "&" + this.name +"="+ ngay_tam[2]+"-"+ngay_tam[1]+"-"+ngay_tam[0]  ;						
						//}else{
							//url_tam += "&" + this.name +"="+ this.value  ;
							dataToSend += phancach + '"'+ this.name + '":"' + this.value +'"' ;
						//}
					}
					i++;
				});
				dataToSend +='}';
				//alert(dataToSend)				
				dataToSend = jQuery.parseJSON(dataToSend);
				//alertObject		( dataToSend)	
				$('#rowed3').setGridParam({postData: dataToSend,url:'resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_phieu_xuat&oper=phieuxuat'}).trigger('reloadGrid');
				/* $.post('',
					dataToSend
				 )
				 .done(function( gridData ) {
					// alert(gridData)
					gridData = jQuery.parseJSON(gridData);
					$('#rowed3').jqGrid('setGridParam', {data: gridData,datatype: 'local'}).trigger('reloadGrid');
					//alert ($('#rowed3').jqGrid('getGridParam', 'data'));
				 });	*/				
				$(form).html(window.search_form);	
                $(this).dialog('close'); 				 
			    $(this).remove();				       
            },	            
        },
		beforeClose: function( event, ui ) {
			 
		},
        close: function(event, ui) {		 
			$(form).html(window.search_form);			
            //$("body").remove(".modal" + elem);
			$("#ui-datepicker-div").hide();
			$(this).dialog( "close" );
            $(this).remove();			
        },
        hide: {
            effect: "fadeOut",
            duration: 1000,
        },
        open: function(event, ui) {			 
			//callIframe(links, hide_loader, elem);			 
            //$('.ui-draggable').css({"box-shadow": "0px 0px 30px #333"});
        },
		

    });
    //$(".modal"+elem).css("box-shadow","0px 0px 30px #000");		
}
 
function dialog_main_callback(title, width, height, elem, links,form) {     
	if(links!=""){
		$("body").append("<div class='ui-jqdialog modal" + elem + "'><div class='loading'><div id='loading'></div></div><iframe id='frame1' class='frame_" + elem + "' src=''></iframe></div>");
	}else{
		$("body").append("<div class='ui-jqdialog modal" + elem + "'> </div>");
	}
	 
	if (String(width).match(/px/g)==null){
		 width = ($(window).width() / 100 * parseFloat(width)).toFixed(0);		
	}else{		
		width=String(width).replace("px","")
	};
	if (String(height).match(/px/g)==null){
		 height = ($(window).height() / 100 * parseFloat(height)).toFixed(0);
	}else{		
		 height=String(height).replace("px","")
	};
   
   
    $(".modal" + elem).dialog({
        height: height,
        width: width,
        modal: true,
        title: title,
		draggable: false,
		resizable: false,
        stack: false,
		beforeClose: function( event, ui ) {
			if(window.check_sub_form_change==true){							
				if ($(".ui-jqdialog_button").dialog( "isOpen" )===true){					 					
					 $(".ui-jqdialog_button").dialog( "close" );
					 $(".ui-jqdialog_button").remove();
					 //$("body").remove(".ui-jqdialog_button");		 	  
					 dialog_button("<?php get_text("canhbao")?>","<?php get_text("chitiet_canhbao")?>",30,23);
					 return false;					
				}else{
					 dialog_button("<?php get_text("canhbao")?>","<?php get_text("chitiet_canhbao")?>",30,23);
					 return false;	
				}
			}
		},
        close: function(event, ui) {		 
			$(form).html(window.hidden_form);			
            //$("body").remove(".modal" + elem);
			$(this).dialog( "close" );
            $(this).remove();			
        },
        hide: {
            effect: "fadeOut",
            duration: 1000,
        },
        open: function(event, ui) {			 
			//callIframe(links, hide_loader, elem);			 
            //$('.ui-draggable').css({"box-shadow": "0px 0px 30px #333"});
        },
		

    });
    //$(".modal"+elem).css("box-shadow","0px 0px 30px #000");		
}

function dialog_button1(title,message, width, height,id) {
    $("body").append("<div class='ui-jqdialog_button'><span>"+message+"</span></div>");
	if (String(width).match(/px/g)==null){
		 width = ($(window).width() / 100 * parseFloat(width)).toFixed(0);		
	}else{		
		width=String(width).replace("px","")
	};
	if (String(height).match(/px/g)==null){
		 height = ($(window).height() / 100 * parseFloat(height)).toFixed(0);
	}else{		
		 height=String(height).replace("px","")
	};
    $(".ui-jqdialog_button").dialog({
		width : width,
        height: height,
        modal: false,
        title: title,
        buttons: {
            'Thoát': function() {			
                $(this).dialog('close'); 				 
			    $(this).remove();
				$(".modal4732478").dialog( "close" );
				//$(".hidden_form").html(window.hidden_form);	
				$(".modal4732478").remove();           
            },			         
        },
		close: function(event, ui) {
			$(this).dialog('close');            
			$(this).remove();	
			$("#"+id).focus();		
       	}
    });
}

function dialog_button(title,message, width, height) {
    $("body").append("<div class='ui-jqdialog_button'><span>"+message+"</span></div>");
	if (String(width).match(/px/g)==null){
		 width = ($(window).width() / 100 * parseFloat(width)).toFixed(0);		
	}else{		
		width=String(width).replace("px","")
	};
	if (String(height).match(/px/g)==null){
		 height = ($(window).height() / 100 * parseFloat(height)).toFixed(0);
	}else{		
		 height=String(height).replace("px","")
	};
    $(".ui-jqdialog_button").dialog({
		width : width,
        height: height,
        modal: false,
        title: title,
        buttons: {
            'Thoát': function() {
				window.check_sub_form_change=false;
                $(this).dialog('close'); 				 
			    $(this).remove();
				$(".modal4732478").dialog( "close" );
				//$(".hidden_form").html(window.hidden_form);	
				$(".modal4732478").remove();           
            },			
            'Lưu': function() {		
				$("#save_data").click(); 
				$(this).dialog('close'); 				 
			    $(this).remove();			
            }
        },
		close: function(event, ui) {
			$(this).dialog('close');            
			$(this).remove();			
       	}
    });
}
function create_Dm_thuoc_grid(){	
		 $("#DM_thuoc").jqGrid({
		url:'resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_DMthuoc',
		datatype: "json",	
		colNames:['<?php get_text("mathuoc")?>', '<?php get_text("dvt")?>','<?php get_text("tenbietduoc")?>', '<?php get_text("tennhomthuoc")?>'],
		colModel:[			
			{name:'MaThuoc',index:'MaThuoc',hidden :true},
			{name:'TenDonViTinh',index:'TenDonViTinh',hidden :true},
			{name:'TenBietDuoc',index:'TenBietDuoc'}, 			
			{name:'TenNhomThuoc',index:'TenNhomThuoc'}, 
				 	 	 
		],
		hidegrid: false,
		gridview: true,
		loadonce: true,
		scroll: false,		 
		modal:true,	 
		rowNum: 16,
		rowList:[],
		pager: '#prowed_DM_thuoc',
		sortname: 'ID_Thuoc',
		height:($(window).height() / 100 * parseFloat(57)).toFixed(0),
		width: (($(window).width() / 100 * parseFloat(58)).toFixed(0)),
		viewrecords: true,	
		ignoreCase:true,
		shrinkToFit:true,
		cmTemplate: {sortable:false},
		
	//hoverrows:false,
	//jsonReader:{repeatitems:true,subgrid:{repeatitems:false}},	
		sortorder: "desc",
		serializeRowData: function (postdata) { 		 	
			//$("#rowed3").trigger("reloadGrid");		
			//return postdata;
		},
		onSelectRow: function(id){		  
								
							
		},
		ondblClickRow: function (id, rowIndex, columnIndex) {
						var MaThuoc = $("#DM_thuoc").jqGrid('getCell', id, 'MaThuoc');
						var ID_Thuoc = id
						var TenBietDuoc = $("#DM_thuoc").jqGrid('getCell', id, 'TenBietDuoc');
						var TenDonViTinh = $("#DM_thuoc").jqGrid('getCell', id, 'TenDonViTinh');
						//alert(ID_Thuoc);
						check_product_available(MaThuoc,TenBietDuoc,ID_Thuoc,TenDonViTinh)		
						$("#"+id_dong+"_MaThuoc").val(MaThuoc);	
			
 		},
		loadComplete: function(data) {	
		var col_name = $('#DM_thuoc').jqGrid('getGridParam', 'colModel')		
			$('.ui-search-toolbar').bind('keydown', function(e) {
       				 if (jwerty.is('enter', e)) {						 	
					 var tam=e.target.id.replace("gs_","");								
						var ii=0;																					 
						for(var i=0;i<=col_name.length-1;i++){								 	
							 if(col_name[i]["name"]==tam){							
							 ii=i+1;
							// alert(ii)
							 }
						}if(ii<=col_name.length-1){
							var colName = col_name[ii]["name"];								
							var input = $('#gs_' + colName);
							input.get(0).focus();		
						}
						else if(ii>col_name.length-1){
							$('#'+$("#DM_thuoc").getDataIDs()[0]).focus();
							$("#DM_thuoc").jqGrid("setSelection",$("#DM_thuoc").getDataIDs()[0], true);	
							
						}
												 
        			}
   			});	 
			$('#DM_thuoc').bind('keydown', function(e) {				
				if (jwerty.is('enter', e)) {					
						var sel_id = $("#DM_thuoc").jqGrid('getGridParam', 'selrow');						
						var MaThuoc = $("#DM_thuoc").jqGrid('getCell', sel_id, 'MaThuoc');
						var ID_Thuoc = sel_id
						var TenBietDuoc = $("#DM_thuoc").jqGrid('getCell', sel_id, 'TenBietDuoc');
						var TenDonViTinh = $("#DM_thuoc").jqGrid('getCell', sel_id, 'TenDonViTinh');
						//alert(ID_Thuoc);
						check_product_available(MaThuoc,TenBietDuoc,ID_Thuoc,TenDonViTinh)		
						$("#"+id_dong+"_MaThuoc").val(MaThuoc);						
				}
			});	
		},	  
		caption: "<?php get_text("dm_thuoc_vtyt")?>"
	});	
	 $("#DM_thuoc").jqGrid('navGrid',"#prowed_DM_thuoc",{add: false, edit: false, del: false, search: false,closeAfterEdit: true,clearAfterAdd :true,closeOnEscape : true });				 
	 $("#DM_thuoc").jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false,defaultSearch:"cn"});
	 $("#DM_thuoc").jqGrid('bindKeys', {} );
		
}  
function create_Dm_Ncc_grid(elem){	
		 $(elem).jqGrid({
		url:'resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_DMncc',
		datatype: "json",	
		colNames:['<?php get_text("ma_ncc")?>', '<?php get_text("ncc")?>','<?php get_text("ng_lienhe")?>'],
		colModel:[			
			{name:'ID_NCC',index:'ID_NCC',width:"30%",hidden:true},
			{name:'TenNCC',index:'TenNCC'},
			{name:'NguoiLienHe',index:'NguoiLienHe'}			 	 	 
		],
		hidegrid: false,
		gridview: true,
		loadonce: true,
		scroll: false,		 
		modal:true,	 
		rowNum: 16,
		rowList:[],
		pager: '#prowed_'+elem.replace("#",""),
		sortname: 'ID_Thuoc',
		height:($(window).height() / 100 * parseFloat(57)).toFixed(0),
		width: (($(window).width() / 100 * parseFloat(58)).toFixed(0)),
		viewrecords: true,	
		ignoreCase:true,
		shrinkToFit:true,
		cmTemplate: {sortable:false},
		
	//hoverrows:false,
	//jsonReader:{repeatitems:true,subgrid:{repeatitems:false}},	
		sortorder: "desc",
		serializeRowData: function (postdata) { 		 	
			//$("#rowed3").trigger("reloadGrid");		
			//return postdata;
		},
		onSelectRow: function(id){		  
								
							
		},
		ondblClickRow: function (id, rowIndex, columnIndex) {
						var MaNcc = id;						
						var Ten_Ncc = $(elem).jqGrid('getCell', id, 'TenNCC');
						var nguoilienhe = $(elem).jqGrid('getCell', id, 'NguoiLienHe');
						//Ten_Ncc1= Ten_Ncc.split(" ")
						//check_product_available(MaThuoc,TenBietDuoc,ID_Thuoc,TenDonViTinh)
						Ten_Ncc2=split_Ncc(Ten_Ncc)	
						//alert(Ten_Ncc1);
						$("#ID_NCC").val(MaNcc);						
						$("#ID_NCC1").text(Ten_Ncc2);
						$("#ID_NCC1").attr('title', Ten_Ncc);
						$("#TenKhachHang").val(nguoilienhe)
						$(".dialog_dm_Ncc").dialog( "close" )
 		},
		loadComplete: function(data) {	
		var col_name = $(elem).jqGrid('getGridParam', 'colModel')		
			$('.ui-search-toolbar').bind('keydown', function(e) {
       				 if (jwerty.is('enter', e)) {						 	
					 var tam=e.target.id.replace("gs_","");								
						var ii=0;																					 
						for(var i=0;i<=col_name.length-1;i++){								 	
							 if(col_name[i]["name"]==tam){							
							 ii=i+1;
							// alert(ii)
							 }
						}if(ii<=col_name.length-1){
							var colName = col_name[ii]["name"];								
							var input = $('#gs_' + colName);
							input.get(0).focus();		
						}
						else if(ii>col_name.length-1){
							$('#'+$(elem).getDataIDs()[0]).focus();
							$(elem).jqGrid("setSelection",$(elem).getDataIDs()[0], true);	
							
						}
												 
        			}
   			});	 
			$(elem).bind('keydown', function(e) {				
				if (jwerty.is('enter', e)) {
					
						var sel_id = $(elem).jqGrid('getGridParam', 'selrow');						
						var Ten_Ncc = $(elem).jqGrid('getCell', sel_id, 'TenNCC');
						var nguoilienhe = $(elem).jqGrid('getCell', sel_id, 'NguoiLienHe');
						//Ten_Ncc1= Ten_Ncc.split(" ")
						//check_product_available(MaThuoc,TenBietDuoc,ID_Thuoc,TenDonViTinh)
						Ten_Ncc2=split_Ncc(Ten_Ncc)	
						//alert(Ten_Ncc1);
						$("#ID_NCC").val(sel_id);						
						$("#ID_NCC1").text(Ten_Ncc2);
						$("#ID_NCC1").attr('title', Ten_Ncc);
						$("#TenKhachHang").val(nguoilienhe)
						$(".dialog_dm_Ncc").dialog( "close" )			
				}
			});	
		},	  
		caption: "<?php get_text("dm_ncc")?>"
	});	
	 $(elem).jqGrid('navGrid',"#prowed_"+elem,{add: false, edit: false, del: false, search: false,closeAfterEdit: true,clearAfterAdd :true,closeOnEscape : true });				 
	 $(elem).jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false,defaultSearch:"cn"});
	 $(elem).jqGrid('bindKeys', {} );
		
}  
function MaNCC_check(makh,tenkh,focus_next){
	
	 $.post('resource.php?module=<?=$modules?>&view=<?=$view?>&action=controller_ma_ncc_check&MaNcc='+$("#"+makh).val()
	 )
     .done(function( data ) {   
	 if (data == 1){
		 if ($(".dialog_dm_Ncc").dialog( "isOpen" )===false){
					$("body").append("<div class='overlay_child' style='width:100%;height:100%;position: absolute; z-index:1000;background:#000;top:0; opacity:0.9;filter:alpha(opacity=90);'></div>  ");	
					
					$(".dialog_dm_Ncc").dialog( "open" )
				}
		 }
	 else{
	 	tam= data.split(";")
		TenNCC = tam[1];
		//TenNCC1= TenNCC.split(" ")
		NguoiLienHe = tam[2];
		TenNCC2=split_Ncc(TenNCC);
		$("#"+tenkh).text(TenNCC2);
		$("#NguoiGiao").text(NguoiLienHe);
	    $("#"+tenkh).attr('title', TenNCC);
		$("#NguoiGiao").attr('title', NguoiLienHe);
		$("#maKHO").focus();
		}
     });
	
	
}
function split_Ncc(Ten_Ncc,length=25){
	//alert(length);	 
		/*length_str =0;
		TenNCC2="";
		for(i=(Ten_Ncc.length)-1;i>=0;i--){
			length_str += Ten_Ncc[i].length+1;
			if (length_str<=length){			
			TenNCC2= Ten_Ncc[i]+" "+TenNCC2
			}			
		}		*/
		if(typeof(Ten_Ncc)!="undefined"){	 	 
			if(Ten_Ncc.length>length){			 
				Ten_Ncc=Ten_Ncc.substring(0,length);
			}
		}
		return Ten_Ncc;
}
function MaThuocC_check (maThuoc,idThuoc,tenthuoc,focus_next){	
	 	 MaThuoc=$("#"+maThuoc).val()
		 dataToSend ='{"MaThuoc":"'+MaThuoc+'"}';
		 dataToSend = jQuery.parseJSON(dataToSend);
		 check_mathuoc=	 $.ajax({
                        type: "POST",
                        url: "resource.php?module=<?=$modules?>&view=<?=$view?>&action=controller_mathuoc_check",
                        dataType:"json",
                        data: dataToSend,
                        async:false ,
                        success: function(response, textStatus, jqXHR) {			   
                        },
                    }).responseText;
			if (check_mathuoc ==1){
						
				if ($(".dialog_dm_thuoc").dialog( "isOpen" )===false){
					$("body").append("<div class='overlay_child' style='width:100%;height:100%;position: absolute; z-index:1000;background:#000;top:0; opacity:0.9;filter:alpha(opacity=90);'></div>  ");	
					$(".overlay_child").click(function(){
						$(".dialog_dm_thuoc").dialog( "close" );			 
						$(".overlay_child").fadeOut(300);		
					})
					$(".dialog_dm_thuoc").dialog( "open" )
				}
			}else{					
				tam = check_mathuoc.split(";");
				ID_Thuoc = tam[1];
				TenBietDuoc = tam[2];
				TenDonViTinh =  tam[3];
						$("#"+tenthuoc).text(TenBietDuoc)
						$("#"+idThuoc).val(ID_Thuoc)
				//alert (ID_Thuoc[1]);
				$("#"+focus_next).focus();
			}
}
	
 
</script>