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
 <div  class="dialog_dm_thuoc">
    <table id="DM_thuoc">
    </table>
    
 </div>
<table id="rowed3" >
</table>
<div id="prowed3" ></div>
<div style="height:3px;"></div>
<table id="rowed4" >
</table>
<div id="prowed4" ></div>
<div id="dialog_chitiet"  style="display:none;">

      <div id="container">
        <div class="form_row" style="vertical-align:top;width:17%"  >
          <div>
            <label for="MaPhieu" style="width:90px;  "><?php get_text("sophieu")?></label>
            <input id="MaPhieu" name="MaPhieu" style="width:70px;" type="text">
          </div>
          <div>
            <label for="NgayLapPhieu" style="width:90px; "><?php get_text("ngaylapphieu")?></label>
            <input id="NgayLapPhieu" style="width:70px;"  alt="date" value="<?php echo date("d-m-Y") ?>" name="NgayLapPhieu" type="text">
          </div>
          <div>
            <label for="NgayNhapKho" style="width:90px;"><?php get_text("ngaynhapkho")?></label>
            <input id="NgayNhapKho" style="width:70px;" alt="date" name="NgayNhapKho"  value="<?php echo date("d-m-Y") ?>" type="text">
          </div>
          <div>
            <label for="ID_Kho" style="width:90px; "><?php get_text("taikho")?></label>
            <input id="ID_Kho" style="width:44px;" name="ID_Kho">
            <input id="ID_Kho1" style="width:78px;display:none" name="ID_Kho">
          </div>
        </div>
        <div class="form_row" style="vertical-align:top;width:29%"  >
          <div>
            <label for="ID_NCC" style="width:90px;"><?php get_text("ncc")?></label>
            <input id="ID_NCC" lang="new_grid" name="ID_NCC" style="width:120px;" type="text">  
             <input id="ID_NCC1" class="hienthi" style="display:none">          
          </div>
            <input id="ID_NguoiDuyet" style="width:120px;" name="ID_NguoiDuyet" type="hidden">          
            <input id="NgayDuyet" style="width:120px;" name="NgayDuyet" type="hidden">
            <input id="ID_NhapXuat"  name="ID_NhapXuat" value="<?php echo $_GET['id_loai']; ?>" type="hidden">
          <div>
            <label for="NguoiGiao" style="width:90px;"><?php get_text("nguoigiao")?></label>
            <label id="NguoiGiao" class="hienthi"  style="width:217px; text-align:left!important;"></label>
          </div>
          <div>
            <label for="ID_NhanVien" style="width:90px;">Nhân viên</label>
            <input id="ID_NhanVien" style="width:30px!important;" name="ID_NhanVien" type="text" lang="new_grid_nv">
            <label id="ID_NhanVien1" class="hienthi" style="width:178px!important; margin-left:-2px; text-align:left!important;"> </label>   
            
          </div>
        <!--  <div>
            <label for="SoDonDatHang" style="width:90px;"><?php get_text("dondathang")?></label>
            <input id="SoDonDatHang" style="width:70px!important;" name="SoDonDatHang" type="text">
            <label for="SoHopDong" style="width:60px;"><?php get_text("hopdong")?></label>
            <input id="SoHopDong" style="width:70px!important;" name="SoHopDong" type="text">
          </div>-->
        </div>
        <div class="form_row" style="vertical-align:top;width:17%"  >
          <div>
            <label for="ThanhTien" style="width:70px;"><?php get_text("thanhtien")?></label>
            <label id="ThanhTien1" class="hienthi"> </label>
            <input id="ThanhTien" style="width:90px;text-align:right" name="ThanhTien" type="hidden" disabled>
          </div>
          <div>
            <label for="PhanTramVat" style="width:70px;  ">%VAT</label>          
            <input id="PhanTramVat" name="PhanTramVat" style="width:89px;text-align:right" type="text" value="0" >
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
            <input id="NgayHoaDon" alt="date" name="NgayHoaDon" value="<?php echo date("d-m-Y") ?>"  style="width:80px" type="text"  ><br>
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
  <div style="height:3px;"></div>
  <table id="rowed6" >
  </table>
  <div id="prowed6" ></div>
</div>

<div class="form_search" style="display:none;">
        <div class="form_row" style="vertical-align:top;width:100%"  >
          <div>
            <label for="tungay" style="width:90px;" ><?php get_text("tungay")?></label>
            <input id="tungay"  alt="date" name="tungay" style="width:70px;" value="<?php echo date("d-m-Y") ?>" type="text">
            <label for="denngay" style="width:273px;"><?php get_text("denngay")?></label>
            <input id="denngay"  alt="date" name="denngay" style="width:70px;" value="<?php echo date("d-m-Y") ?>" type="text">
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
            <input id="ID_NhapXuat"  name="ID_NhapXuat" value="<?php echo $_GET["id_loai"]; ?>" type="hidden">                    
          </div>
        
         
 		</div>
</div> 


</div>
</body>
</html><script type="text/javascript">
jQuery(document).ready(function() {	

window.thuoc=  $.ajax({                       
		url: "resource.php?module=web_services&function=get_auto_edit_option_byid&action=index&term=&status=0&tables=DM_Thuoc&id=ID_Thuoc&name=TenGoc",
		async:false                       
	}).responseText;
$.post('resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_DMthuoc').done(function(data) {
		data=data.split('|||');
		create_combobox('#ID_NCC','#ID_NCC1','.NCC','#NCC',create_ncc,'','','','data_DMncc')
		create_combobox('#ID_Kho','#ID_Kho1','.IDKho','#IDKho',create_kho,'','','','data_kho')
		window.grid_datathuoc= jQuery.parseJSON(data[0]);
		window.id_datathuoc= jQuery.parseJSON(data[1]);
	    create_Dm_thuoc_grid('#DM_thuoc',data[0])
	})

	dialog_chitiet();
	create_phieunhapchitiet();
	$('#DM_thuoc').click(function(){
		  $('#DM_thuoc').data('clicked', true);
	});
	var action;

	create_sub_grid();
	$(".dialog_dm_thuoc").dialog({		
		autoOpen:false,
		height:($(window).height() / 100 * parseFloat(85)).toFixed(0),
		width:($(window).width() / 100 * parseFloat(60)).toFixed(0),
		modal:false,
		title:'<?php get_text("timkiem_thuoc_vtyt")?>',
		stack: false,	
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
		open: function(event, ui){									
			$('.ui-draggable').css({"box-shadow": "0px 0px 10px rgb(136, 136, 136)"});										 
		},
		close: function(event, ui) {
		   $(".overlay_child").fadeOut(300);	
		},
	});		
	window.ids=0;
	create_grid(); 
	//create_sub_grid("#rowed4",''); 
	
	
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
			if(this.alt=="date"){	
			 	if(this.value!=""){	
					ngay_tam=(this.value).split("-");
					dataToSend += phancach + '"'+this.name + '":"' + ngay_tam[2] + "-" + ngay_tam[1] + "-"+ngay_tam[0]+'"';
				}else{
					dataToSend += phancach + '"'+this.name + '":"' + this.value +'"';
				}
				//url_tam += "&" + this.name +"="+ ngay_tam[2]+"-"+ngay_tam[1]+"-"+ngay_tam[0]  ;
			
			}else{
				//url_tam += "&" + this.name +"="+ this.value  ;
				dataToSend += phancach + '"'+ this.name + '":"' + this.value +'"' ;
			}
		}
		i++;
	})	
	dataToSend +=',"Id":'+localdataToSend+'}';	
	dataToSend = jQuery.parseJSON(dataToSend);	 
	 
	 kiemtratrong=true;
	 key1="";
	 kiemtratrong1=true;
	 for (var key in dataToSend) {		
	  
	 if(key!="Id"){		 
	
		 if(key=="NgayLapPhieu"||key=="NgayNhapKho"||key=="ID_NCC"){
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
	
	  
	if(kiemtratrong){
	 $.post('resource.php?module=<?=$modules?>&view=<?=$view?>&action=controller&hienmaloi=1&oper='+action,
	 	dataToSend
	 )
     .done(function( data ) {
		 if(data!="1"){
			tooltip_message("Lưu phiếu nhập thành công");
		 	window.check_sub_form_change=false;
			$(".modal4732478").dialog( "close" );
		 }else{
			tooltip_message("Lưu phiếu nhập không thành công, vui lòng thử lại"); 
		 }
    	
     });
	}else{	
		dialog_button1("Lỗi","Dữ liệu nhập vào không đúng", 200, 300,key1)
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
		
}

function init_main(action){
	$("#save_data").click(function(){		
		save_data(action);
	})
	 var tam=0;  
	 $('.form_row').each(function() {		   
		tam+=$(this).width();
     });
	 var currentTime = new Date();
	 tam = parseInt(currentTime.getFullYear()) + 1;        
     year_range = '2013:' + tam; 
	  $("#NgayLapPhieu,#NgayNhapKho,#NgayHoaDon").datepicker({
            showWeek: true,
            defaultDate: "+1w",
            changeMonth: true,
            changeYear: true,
            numberOfMonths: 4,
            dateFormat: "dd-mm-yy",
            yearRange: year_range,
            onClose: function(selectedDate) {
               
            },
            onSelect: function(dat, inst) {
                 
            }
        });
		
	 if(action=="edit"){		 

	 }else{
		
	 }
	
	/* $("#ID_NCC1").html(split_Ncc(split_string_grid_select(window.nhacungcap,$("#ID_NCC").val())))
	 .attr("title",split_string_grid_select(window.nhacungcap,$("#ID_NCC").val()));
	 */
	 $("#MaPhieu").focus();	 
	   jwerty.key('tab', false);
	   jwerty.key('shift+tab', false);			  
	   $('#container input[type=text],#container textarea,#container select').bind("keydown", function(e) {		   		 
             if (jwerty.is("enter",e)||jwerty.is("tab",e)) {  
                var inputs = $(this).parents("#container").eq(0).find(":input[type=text], textarea,select");
                var idx = inputs.index(this);
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
						inputs[idx + 1].focus(); 
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
		$(':input[type=text]').focusout(function(e) {		   	
		     if( $(this).attr("new_grid_nv")=="new_grid"){
				 MaNV_check("ID_NhanVien","ID_NhanVien1");
			 }
		})
		
	  
	 $.dateEntry.setDefaults({spinnerImage: ''});	
	 $("#NgayLapPhieu, #NgayNhapKho, #NgayHoaDon").dateEntry({dateFormat: 'dmy-'});
	 check_main_form_change_func();
	
	
}

var lastsel;
function create_grid(){
 $("#rowed3").jqGrid({
		url:'resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_phieu_nhap&oper=phieunhap',
		datatype: "json",	
		colNames:['Id','<?php get_text("ma")?>','<?php get_text("nglapphieu")?>','<?php get_text("ngaylap")?>','<?php get_text("ngaynhap")?>','<?php get_text("ngduyet")?>','<?php get_text("ngayduyet")?>Ngày duyệt','<?php get_text("ncc")?>','<?php get_text("kho")?>','<?php get_text("loainhap")?>','%VAT','<?php get_text("tienvat")?>','<?php get_text("thanhtien")?>','<?php get_text("dondathang")?>','<?php get_text("hopdong")?>','<?php get_text("sohd")?>','<?php get_text("ngayhd")?>','<?php get_text1("ghichu")?>'],
		colModel:[
			{name:'ID_NhapKho',index:'ID_NhapKho',search:false, width:"2%", editable:false,align:'right',hidden:true}, 
			{name:'MaPhieu',index:'MaPhieu', width:"5%", editable:true,align:'center',hidden:false,editrules: {required:true},edittype:"text"},
			{name:'ID_NhanVien',index:'ID_NhanVien', width:"5%", editable:true,align:'center',hidden:false,editrules: {required:true},edittype:"select",editoptions: {value: window.nickname}, formatter: "select"},
			{name:'NgayLapPhieu',index:'NgayLapPhieu',search:false, width:"5%", editable:true,align:'center',hidden:false,edittype:"text",editoptions: {	  
			  dataInit: function(element) {
				$(element).datepicker({dateFormat: 'dd-mm-yy'})
			  }
			}}, 
			{name:'NgayNhapKho',index:'NgayNhapKho',search:false, width:"5%", editable:true,align:'center',hidden:false,edittype:"text",editoptions: {	  
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
			{name:'ID_NhapXuat',index:'ID_NhapXuat', width:"10%", editable:true,align:'center',edittype:"text",hidden:false,formatter: "select", editoptions: {value: window.loainhapxuat			 
			   }}, 
			{name:'PhanTramVat',index:'PhanTramVat', width:"3%", editable:true,align:'right',edittype:"text",hidden:false,formatter:'number',formatoptions:{decimalSeparator:" ", thousandsSeparator: "", decimalPlaces: 0,  defaultValue: '0'}},
			{name:'TienVAT',index:'TienVAT', width:"2%", editable:true,align:'right',edittype:"text",hidden:false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: "", defaultValue: '0'}},
			{name:'ThanhTien',index:'ThanhTien', width:"5%", editable:true,align:'right',edittype:"text",hidden:false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: "", defaultValue: '0'}},
			{name:'SoHopDong',index:'SoHopDong', width:"6%", editable:true,align:'center',edittype:"text",hidden:false},
			{name:'SoDonDatHang',index:'SoDonDatHang', width:"7%", editable:true,align:'center',edittype:"text",hidden:false},
			{name:'SoHoaDon',index:'SoHoaDon', width:"6%", editable:true,align:'center',edittype:"text",hidden:false},
			{name:'NgayHoaDon',index:'NgayHoaDon', width:"6%", editable:true,align:'center',edittype:"text",hidden:false},
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
		sortorder: "desc",
		serializeRowData: function (postdata) { 		 	
			
		},
		onSelectRow: function(id) {
			window.ids=id;		
			jQuery("#rowed4").jqGrid('setGridParam', {url:'resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_phieu_nhap&oper=phieunhap_sub&ids='+id,datatype:'json'}).trigger("reloadGrid");
			
			 if( $("#rowed3").jqGrid('getCell', id, 'ID_NguoiDuyet')==0){
				$("#edit_rowed3").removeClass('ui-state-disabled');
				$("#confirm_rowed3").removeClass('ui-state-disabled');
			 }else{
				 $("#edit_rowed3").addClass('ui-state-disabled');
				 $("#confirm_rowed3").addClass('ui-state-disabled');
			 }			  
		},
		ondblClickRow: function (rowId, rowIndex, columnIndex) {
			$("#prowed3 .ui-icon-pencil").trigger('click'); 
 		},
		loadComplete: function(data) {
		ids=$('#rowed3').jqGrid('getDataIDs');				
			for(i=0;i<ids.length;i++){		
				var rowData = jQuery('#rowed3').getRowData(ids[i]);					 			 
					if(rowData['ID_NguoiDuyet']!=""){
						 //$('#rowed3').jqGrid('setRowData', ids[i], false, {background:'#e0e0e0'});
						$('#rowed3').jqGrid('setCell',ids[i],"ID_NguoiDuyet","",{background:'red'});
						$('#rowed3').jqGrid('setCell',ids[i],"NgayDuyet","",{background:'red'});
					}					   
		 	}		 
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
				/*  dialog_main_callback("<?php get_text("them")?>", 95, 95, "4732478", "",".hidden_form");
				  create_main("add",init_main);  */  
				  $( "#dialog_chitiet" ).dialog('open')           
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
	get_printer("#prowed3 #printer,#prowed3 #printer_preview",set_printer,'<?php echo $_SERVER['REMOTE_ADDR'] ?>','<?php if(isset($_COOKIE['username_window']))  echo $_COOKIE['username_window'] ?>','Phieu_nhap_mua_hang');	
		
			  
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
alert(mode)
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
				
					 
					   
		 	}
			
			dataToSend +=',"Id":'+localdataToSend+'}';
			
			dataToSend = jQuery.parseJSON(dataToSend);	 
			
			
			  
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

function calculate(rowId){
	_DonGia=$("#"+rowId+"_DonGia").val();
	_ThanhTien=$("#"+rowId+"_ThanhTien").val();
	_SoLuong=$("#"+rowId+"_SoLuong").val();
	$("#"+rowId+"_DonGia").bind("keyup",function(e) {
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
				 tooltip_message(tenthuoc+" đã có trên phiếu nhập này");
				 kiemtra=true;
				 $("#"+id_dong+"_TenBietDuoc").val("");
				 $("#"+id_dong+"_TenDonViTinh").val("");
				 break;
			}			   
	}	 
	if(kiemtra==false){
		$("#"+id_dong+"_MaThuoc").val(mathuoc);
		$("#rowed5").jqGrid("setCell", id_dong, 'ID_Thuoc', id_thuoc); 
		$("#rowed5").jqGrid("setCell", id_dong, 'TenDonViTinh', tendonvitinh); 
		$("#rowed5").jqGrid("setCell", id_dong, 'TenBietDuoc', tenthuoc); 				
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
	vat=tongcong/100*$('#PhanTramVat').val();	 
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
	 
}
function check_main_form_change_func(rowId,rowed){ 
	  $('#container').find(':input[type=text],select,textarea,input[type=hidden]').each(function(){	
		  $("#"+$(this).attr("id")).bind("keyup",function(e){			   
			  if (e.keyCode!=13){				 
				 window.check_sub_form_change=true; 				
			  };		 
		  }) 	 		  
	  })
	
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
						if(this.alt=="date"){
							ngay_tam=(this.value).split("-");
							dataToSend += phancach + '"'+this.name + '":"' + ngay_tam[2] + "-" + ngay_tam[1] + "-"+ngay_tam[0]+'"';
						}else{
							dataToSend += phancach + '"'+ this.name + '":"' + this.value +'"' ;
						}
					}
					i++;
				})
				dataToSend +='}';		
				dataToSend = jQuery.parseJSON(dataToSend);
				$('#rowed3').setGridParam({postData: dataToSend,url:'resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_phieu_nhap&oper=phieunhap'}).trigger('reloadGrid');
				$(form).html(window.search_form);	
                $(this).dialog('close'); 				 
			    $(this).remove();				       
            },	            
        },
		beforeClose: function( event, ui ) {
			 
		},
        close: function(event, ui) {		 
			$(form).html(window.search_form);
			$(this).dialog( "close" );
            $(this).remove();			
        },
        hide: {
            effect: "fadeOut",
            duration: 1000,
        },
        open: function(event, ui) {	
        },
		

    });	
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
			$(this).dialog( "close" );
            $(this).remove();			
        },
        hide: {
            effect: "fadeOut",
            duration: 1000,
        },
        open: function(event, ui) {			 
		
        },
		

    });
   		
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

 
 
 function create_Dm_thuoc_grid(elem,datalocal){	
		datalocal=jQuery.parseJSON(datalocal);	 
		 $(elem).jqGrid({
		datastr:datalocal,	
		datatype: "jsonstring" ,
		colNames:['Tên thuốc','Nhóm thuốc','', '','',''],
		colModel:[			
			{name:'TenBietDuoc',index:'TenBietDuoc'},	
			{name:'nhomthuoc',index:'nhomthuoc'},		 
			{name:'MaThuoc',index:'MaThuoc',hidden :true},		
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
				$('#rowed6').jqGrid("setCell", $("#rowed6").jqGrid('getGridParam', 'selrow'), "id_dvt",rowData['ID_dvt'] );
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


function create_phieunhapchitiet(){	
	 var searhicon = '<span class="ui-state-error ui-state-hover  " style="border:0"><span class="ui-icon  ui-icon-closethick" style="float: left; margin-right: .3em;"></span></span>';
	 mydata=[];	 
	 $("#rowed6").jqGrid({	
		data:mydata,	 
		datatype: "local",		 	
		colNames:['','','','','Tên thuốc',"Giá bán", "Đ.dùng", "SL", "Tổng cộng", "C.dùng", "T.hiện"],
		colModel:[		
			{name:'iddonthuocct',index:'iddonthuocct',width:"8%",align:'right',hidden:true, editable: false}  ,
			{name:'id_dvt',index:'id_dvt',width:"10%",align:'center',hidden:true, editable: false },
			{name:'lavattu',index:'lavattu',width:"10%",align:'center',hidden:true, editable: false }  ,
			{name:'xoa',index:'xoa',width:"3%",align:'center',hidden:false, editable: false}  ,
			{name:'ID_Thuoc',index:'ID_Thuoc',width:"30%", align:'left',hidden:false, editable: true,edittype:"select",editoptions:{value:window.thuoc},formatter: "select",editrules:{custom: true, custom_func: function(value, colName) {
                          
                            return check_idthuoc(value,colName);

                        },formatter: function (cellValue, options, rowObject) {
                    
                            return searhicon
                        }}
		 }, 
			{name:'Gia',index:'Gia', width:"8%",align:'right',hidden:false,formatter:'number', formatoptions:{decimalPlaces: 0}, editable: false},
			{name:'ID_DuongDungThuoc',index:'ID_DuongDungThuoc', width:"10%",align:'left', editable: true,edittype:"select",editoptions:{value:window.duongdung},formatter: "select"},		 
			{name:'SoThuocThucXuat',index:'SoThuocThucXuat',width:"8%",align:'right',hidden:false, editable: true
			,/*editrules:{custom: true,required:true, custom_func: function(value, colName) {
                           var id_row = $('#rowed6').jqGrid('getGridParam', 'selrow')
                            return check_soluong(value,colName,id_row);

                        }}*/newgrid:true,func_grid:"check_soluong"},
			{name:'ThanhTien',index:'ThanhTien',width:"7%",align:'right',hidden:false,formatter:'number', formatoptions:{decimalPlaces: 1}, editable: false},
			{name:'CachDungLieuDung',index:'CachDungLieuDung',width:"8%",align:'right',hidden:false, editable: true},
			{name:'PhuongThucThucHien',index:'PhuongThucThucHien',width:"10%",align:'center',hidden:false, editable: true,edittype:"select",formatter:'select',editoptions:{value:"0:Hospital;1:Home;2:Seft",dataEvents: [{ type: 'change keyup', fn: function(e) {
				
				}}]}
				
				},
			                      
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
		afterInsertRow: function(rowid, aData){	},
		pgbuttons: false, 
        pgtext: null, 
		serializeRowData: function (postdata) { 	
		/*	var rowData = $("#rowed6").getRowData( $("#rowed6").jqGrid('getGridParam', 'selrow'));
			postdata.id_donthuoc=$("#rowed3").getRowData( $("#rowed3").jqGrid('getGridParam', 'selrow'))['ID_DonThuoc'];
			postdata.id_dvt=rowData['id_dvt'];
			postdata.lavattu=rowData['lavattu'];
			postdata.Gia=rowData['Gia'];
			postdata.ID_DuongDungThuoc=rowData['ID_DuongDungThuoc'];
			postdata.iddonthuocct=rowData['iddonthuocct'];
			postdata.ThanhTien =rowData['ThanhTien'];
			postdata.ds_tang =window.ds_tang;
			postdata.ID_LuotKham=$("#rowed3").getRowData( rowed3_select)['ID_LuotKham'];			
			postdata.id_donthuoc=$("#rowed3").getRowData( rowed3_select)['ID_DonThuoc'];
			postdata.id_benhnhan=window.id_benhnhan;
			postdata.id_kham=rowed3_select;
            return postdata;	*/		
		},
		 onCellSelect: function (rowid,iCol,cellcontent,e) {
			 var rowData = $("#rowed3").getRowData( $("#rowed3").jqGrid('getGridParam', 'selrow'));				
        	if((iCol==3)&&(rowData['ID_trangthai']=='DangKham')){
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
				$("#rowed6").jqGrid('setRowData',ids[i],{xoa:be});
			}		
				$("#prowed6 .ui-icon-plus").click();			
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
						   $('#'+ids[ids.length-1]+'_ID_Thuoc1').focus();		
						},200);
						
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
						number_textbox('#rowed6 #'+rowId+'_SoThuocThucXuat');
						inline_enter(rowId)
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
function check_idthuoc(value,colname){	


 		ids_rowed6=$('#rowed6').jqGrid('getDataIDs');		
		ids_rowed6=removeA(ids_rowed6, $('#rowed6').jqGrid('getGridParam','selrow'));
		
		if($.inArray(value, ids_rowed6) > -1){			 
			return [false,'Thuốc đã có','ID_Thuoc1']
		}else if($.trim(value)==''){
			return [false,'Chưa chọn thuốc','ID_Thuoc1']
		}else{
			
			
			return[true,'']
		}
	
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
		
		
		
function create_sub_grid(){	 
 $("#rowed4").jqGrid({
		data:[],		
		datatype: "local",	
		colNames:['id_main','id_thuoc','<?php get_text("mathuoc")?>','<?php get_text("tenbietduoc")?>','<?php get_text("dvt")?>','<?php get_text("lo_noibo")?>','<?php get_text("lo_nsx")?>','<?php get_text("soluong")?>','<?php get_text("dongia")?>','<?php get_text("thanhtien")?>','<?php get_text("ngaySX")?>','<?php get_text("ngayHH")?>'],
		colModel:[		
			{name:'ID_NhapKho',index:'ID_NhapKho', width:"5%", editable:true,align:'left',hidden:true,edittype:"text",editoptions: {defaultValue: window.ids}},		
			{name:'ID_Thuoc',index:'ID_Thuoc', width:"8%", editable:false,align:'center',edittype:"text",hidden:true},
			{name:'MaThuoc',index:'MaThuoc', width:"8%", editable:true,align:'center',edittype:"text",editrules: {required: false},hidden:false,newgrid:true,func_grid:"luoi_MaThuoc"},
			{name:'TenBietDuoc',index:'TenBietDuoc', width:"25%", editable:false,align:'left',editrules: {required: true},edittype:"text",hidden:false},
			{name:'TenDonViTinh',index:'TenDonViTinh',search:false, width:"3%", editable:false,align:'center',hidden:false,edittype:"text"}, 			{name:'SoLoHeThong',index:'SoLoHeThong', width:"7%", editable:false,align:'center',edittype:"text",hidden:false,editrules: {required: false}},
			{name:'SoLoNhaSanXuat',index:'SoLoNhaSanXuat', width:"10%", editable:true,align:'center',edittype:"text",hidden:false,editrules: {required: false}}, 
			 
			{name:'SoLuong',index:'SoLuong', width:"5%", editable:true,align:'right',edittype:"text",hidden:false,editrules: { number: true, required: false},formatter:'integer',formatoptions:{defaultValue: '0'}}, 
			{name:'DonGia',index:'DonGia', width:"5%", editable:true,align:'right',edittype:"text",editrules: { number: true, required: false},hidden:false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: "", defaultValue: '0'}},
			{name:'ThanhTien',index:'ThanhTien', width:"7%", editable:true,align:'right',edittype:"text",hidden:false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: "", defaultValue: '0'}},
			{name:'NgaySanXuat',index:'NgaySanXuat',search:false,editrules: {required: false},width:"10%", editable:true,align:'center',hidden:false,edittype:"text",formatter:"date",formatoptions:{srcformat:"Y-m-d",newformat:"d-m-Y"},editoptions: {	  
			  dataInit: function(element) {
				$(element).datepicker({dateFormat: 'dd-mm-yy'})
			  }}}, 
			{name:'NgayHetHan',index:'NgayHetHan',search:false, width:"10%", editable:true,align:'center',hidden:false,edittype:"text",formatter:"date",formatoptions:{srcformat:"Y-m-d",newformat:"d-m-Y"},editoptions: {	  
			  dataInit: function(element) {
				$(element).datepicker({dateFormat: 'dd-mm-yy'})
			  }}}, 				 
		],
		loadonce: false,
		scroll: false,		 
		modal:true,	 	 
		rowNum: 1000000,		
		rowList: [], // disable page size dropdown
        pgbuttons: false, // disable page control like next, back button
        pgtext: null, // disable pager text like 'Page 0 of 10'		
		sortname: 'ID_NhapKho',
		height:100,
		width: 100,
		viewrecords: true,	
		ignoreCase:true,
		shrinkToFit:true,
		sortorder: "desc",
		serializeRowData: function (postdata) { 		
		},
		onSelectRow: function(id) {		 
		},
		ondblClickRow: function (rowId, rowIndex, columnIndex) {
			
				$("#prowed3 .ui-icon-pencil").trigger('click'); 
					
 		},
		loadComplete: function(data) {
		
			
			
		},	  
		caption: "<?php get_text("chitietnhap") ?>"
	});	
	 
	$("#rowed4").setGridWidth($(window).width()-10);
	$("#rowed4").setGridHeight($(window).height()/100*45);
				
} 


function dialog_chitiet(){
	
	
	 $( "#dialog_chitiet" ).dialog({
      resizable: false,
      height:'auto',
	  width:'auto',
      modal: true,
	  autoOpen :false,     
 	  close: function( event, ui ) {
	
	 },     
 	  open: function( event, ui ) {
		  
		$("#rowed6").setGridWidth( $( "#dialog_chitiet" ).width()-10);
		//
	 }
    });
	
}


function create_ncc(elem,datalocal){	
		datalocal=jQuery.parseJSON(datalocal);	 
		 $(elem).jqGrid({
		datastr:datalocal,	
		datatype: "jsonstring" ,
		colNames:['Tên NCC', 'Người liên hệ'],
		colModel:[			
			{name:'TenNCC',index:'TenNCC'}, 
			{name:'NguoiLienHe',index:'NguoiLienHe'}
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

function create_kho(elem,datalocal){	
		datalocal=jQuery.parseJSON(datalocal);	 
		 $(elem).jqGrid({
		datastr:datalocal,	
		datatype: "jsonstring" ,
		colNames:['Tên Kho'],
		colModel:[			
			{name:'tenkho',index:'tenkho'}
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

function removeA(arr) {
    var what, a = arguments, L = a.length, ax;
    while (L > 1 && arr.length) {
        what = a[--L];
        while ((ax= arr.indexOf(what)) !== -1) {
            arr.splice(ax, 1);
        }
    }
    return arr;
}

</script>