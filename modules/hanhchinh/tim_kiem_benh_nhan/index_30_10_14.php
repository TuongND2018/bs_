<!--<link rel="stylesheet" href="../../../css/form_css.css" type="text/css" media="screen"/>-->
<style>
#save_data:hover,#save_data:focus, #clear_all:hover, #clear_all:focus, #bndk:hover, #bndk:focus{
    background: url("js/grid/themes/south-street/images/ui-bg_highlight-soft_25_67b021_1x100.png") repeat-x scroll 50% 50% #67B021;
    border: 1px solid #327E04;
    color: #FFFFFF;
    font-weight: bold;
}
.ui-widget-overlay {
		opacity:0.01;
		filter: alpha(opacity=1);
		-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=1)";
		/*overlay trong suot*/
	 }

	 input{
		 -webkit-user-select : text;
	 }
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
	.custom-combobox-input {
		width:103px !important;

	}
	#phongban1 {
		width:190px !important;

	}
	#ui-id-3.ui-menu {
  	width: 800px!important; display:none; position:absolute;
	box-shadow:0px 0px 3px #333;
   }
   .form_row div{
	   margin-top:1px;
   }
   input[type="checkbox"]:focus {
-webkit-box-shadow: 0px 0px 1px 1px #0463B4!important;
  box-shadow:  0px 0px 2px 2px #208AC8 !important;
}
#luotkhamnoitrutontai{
	height:40px !important;
}
</style>
<body>
	<div id="dialog-session" style="display:none">
		<div class="form_row">
        <label style="width:70px;">Phòng ban</label>
        <span><select name="phongban" id="phongban" ></select><input type="text" style="display:none" name="text_phongban" id='text_phongban'></span>
		<a style="margin-left:30px;" class="fm-button ui-state-default ui-corner-all fm-button-icon-left" id="capnhat" href="#">Cập nhật<span class="ui-icon ui-icon-person"></span></a>
	    </div>
	    <div class="form_row2">
	        <label style="width:70px;">Tầng:</label>
	        <span><input type="text" name="text_tang" id='text_tang' style="margin-left:41px; width:225px;" ></span>
	    </div>
	      <div class="form_row2">
	        <label style="width:70px;">Kho:</label>
	        <span><input type="text" name="text_kho" id='text_kho' style="margin-left:47px; width:225px;" ></span>
	    </div>
	     <div class="form_row3">
	        <label style="width:70px;">Kho BHYT:</label>
	        <span><input type="text" name="text_kho_bhyt" id='text_kho_bhyt' style="margin-left:15px; width:225px;" ></span>
	    </div>
	    
	</div>
<div id="luotkhamnoitrutontai" style="display:none;">
 Bệnh nhân đã có một lượt khám nội trú đang chờ,bạn không thể tạo lượt khám mới
</div>
<div id="quanhuyen_null" title="Thông báo"  style="display:none;">
 Thông tin xã phường của bệnh nhân bắt buộc để tạo bệnh án nội trú.
</div>
<div id="dialog-chidinhkham" title="Thông báo" style="display:none">
 Hiện tại tất cả các lượt khám của bệnh nhân <span style="font-weight:bold" id="tenbn"></span> đã thực hiện. Bạn có muốn tạo lượt khám cho bệnh nhân này không?
</div>
<div id="luotkhamtontai" style="display:none">
 Bệnh nhân đã có một lượt khám đang chờ,bạn không thể tạo lượt khám mới
</div>
<div class="ui-widget-content" style="height:99%">
<div style="margin-top:4px;">
   <div class="ui-dialog ui-widget ui-widget-content ui-corner-all ui-resizable thongtinchinh panel_form" style="margin-left:4px" >
    <div class="ui-dialog-titlebar ui-widget-header ui-corner-all ui-helper-clearfix"> <span id="ui-id-5" class="ui-dialog-title">Thông tin tìm kiếm</span> </div>
    <div class="ui-dialog-content ui-widget-content"style="display: block; width: auto; min-height: 120px; max-height: none; height: 100%">
      <div id="container">
        <div class="form_row" style="vertical-align:top"  >
             <div class="profile_container">
                 <span class="label_input" href="#" style="width:80px;">
                    <i class="fa icon"></i> <label for="holot">Họ lót</label>
                </span>
               <span class="input_container"><input id="holot" class="focus_1" name="holot" style="width:150px;" type="text"></span>
              </div>
              <div class="profile_container">
                 <span class="label_input" href="#" style="width:40px;">
                    <i class="fa icon"></i>   <label for="ten">Tên</label>
                </span>
                <span class="input_container"> <input id="ten" class="focus_2" name="ten" style="width:130px;" lang="search" type="text"></span>
              </div>
              <div class="profile_container">
                 <span class="label_input" href="#" style="width:80px;">
                    <i class="fa icon"></i>   <label for="diung">Dị ứng</label>
                </span>
                <span class="input_container"> <input id="diung" class="focus_9" type="text" style="width:130px;" name="diung"></span>
              </div>
               <div class="profile_container">
                 <span class="label_input" href="#" style="width:55px;">
                    <i class="fa icon"></i> <label for="quanhe" >Quan hệ</label>
                </span>
                <span class="input_container"> <input id="quanhe" class="focus_12" type="text" style="width:130px;" name="quanhe"></span>
              </div>
              <br>
              <div class="profile_container">
                 <span class="label_input" href="#" style="width:80px;">
                    <i class="fa icon"></i> <label for="mabn" >Mã BN</label>
                </span>
                <span class="input_container">  <input id="mabn" style="width:100px;"  class="focus_3"   name="mabn" type="text"></span>
              </div>
              <div class="profile_container">
                 <span class="label_input" href="#" style="width:90px;">
                    <i class="fa icon"></i><label for="dienthoai">Điện Thoại</label>
                </span>
                <span class="input_container"> <input id="dienthoai" class="focus_4" name="dienthoai" style="width:130px;" type="text"></span>
              </div>
               <div class="profile_container">
                 <span class="label_input" href="#" style="width:80px;">
                    <i class="fa icon"></i> <label for="chuandoan" >Chẩn đoán</label>
                </span>
                <span class="input_container">  <input id="chuandoan" class="focus_10" type="text" style="width:103px;" name="chuandoan">
            		<input id="chuandoan1" type="text" style="width:130px;display:none" name="chuandoan1"> </span>
              </div>
              <div class="profile_container" style="margin-left:27px;">
                 <span class="label_input" href="#" style="width:55px;">
                    <i class="fa icon"></i> <label for="congty" >Công ty</label>
                </span>
                <span class="input_container">
                  <span class="custom-combobox" >
                  <input id="congty" class="focus_13" type="text" style="width:103px;" name="congty" lang="end">
           			 <input id="congty1" type="hidden" style="width:130px;" name="congty1">   </span> </span>
              </div>
              <br>
              <div class="profile_container">
                 <span class="label_input" href="#" style="width:80px;">
                    <i class="fa icon"></i>  <label for="diachi">Địa chỉ</label>
                </span>
                <span class="input_container"><input id="diachi" class="focus_5" style="width:344px;" name="diachi" type="text"></span>
              </div>
              <div class="profile_container">
                 <span class="label_input" href="#" style="width:80px;">
                    <i class="fa icon"></i> <label for="loaikham" >Loại khám</label>
                </span>
                <span class="input_container">  <input id="loaikham" class="focus_11" type="text" style="width:103px;" name="loaikham">
            		<input id="loaikham1" type="text" style="width:130px;display:none" name="loaikham1"> </span>
              </div>
              <br>
              <div class="profile_container">
                 <span class="label_input" href="#" style="width:80px;">
                    <i class="fa icon"></i><label for="namsinh">Năm sinh/tuổi</label>
                </span>
                <span class="input_container">
                	 <input id="namsinh" class="focus_6" style="width:217px;"  name="namsinh" type="text">
                     <input id="nam" class="focus_7" style="margin-left:40px " type="checkbox" name="nam" value="0">Nam &nbsp;&nbsp;&nbsp;&nbsp;
					 <input id="nu" class="focus_8" type="checkbox" name="nu" value="1">Nữ </span>
              </div>
              <div class="profile_container">
                 <span class="label_input" href="#" style="width:80px;">
                    <i class="fa icon"></i>  <label for="nghenghiep" >Nghề nghiệp</label>
                </span>
                <span class="input_container">
                	<select id="nghenghiep" class="focus_12" type="text" style="width:130px;" name="nghenghiep">    </select>
                </span>
              </div>

        </div>
       <div class="form_row" style="vertical-align:top;width:4%;line-height:15px!important;right:0px!important;"   >
          <div>
             <a style="margin-left:0px;   margin-bottom:1px;width:90px;height:15px; vertical-align:top" class="fm-button ui-state-default ui-corner-all fm-button-icon-left" id="save_data" href="#">Tìm kiếm [Enter]<span  class="ui-icon ui-icon-search"></span></a>
             <a style="margin-left:0px;  margin-bottom:1px; width:90px" class="fm-button ui-state-default ui-corner-all fm-button-icon-left" id="clear_all" href="#">Nhập lại [F5]<span class="ui-icon ui-icon-cancel
 "></span></a>
 <a style="margin-left:0px;  margin-bottom:1px; width:108px" class="fm-button ui-state-default ui-corner-all " id="bndk" href="#">Bệnh nhân đang khám</a>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>
 <div style="margin-top:4px;" >
   <table id="rowed3" ></table>
   <div  id="prowed3" ></div>
 </div>
</div>
<?php
  /*<!--      $data= new SQLServer;//tao lop ket noi SQL
        $params = array($_SERVER['REMOTE_ADDR']);//tao param cho store 
        $store_name="{call GD2_CauHinhHeThong_SelectBy_IP(?)}";//tao bien khai bao store
        $get_thongtinbenhnhan=$data->query( $store_name,$params);//Goi store
        $excute= new SQLServerResult($get_thongtinbenhnhan);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
        $thongtinbenhnhan= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 
        if($thongtinbenhnhan!=null){
                $_SESSION['dstang'] = $thongtinbenhnhan[0]["ID_Tang"];
                $_SESSION['phongban_vl'] = $thongtinbenhnhan[0]["ID_PhongBanVatLy"];
                $_SESSION['kho'] = $thongtinbenhnhan[0]["ID_Kho"];
                $_SESSION['khobhyt'] = $thongtinbenhnhan[0]["ID_KhoBHYT"];
                
          }
          else{
          		$_SESSION['dstang'] = "";
                $_SESSION['phongban_vl'] = "";
                $_SESSION['kho'] = "";
                $_SESSION['khobhyt'] = "";
          }
            echo "<script type='text/javascript'>";
	        echo "window.dstang='".$_SESSION['dstang']."';";
			echo "window.kho='".$_SESSION['kho']."';";
			echo "window.khobhyt='".$_SESSION['khobhyt']."';";
	        echo "</script>";
			-->*/
          //print_r( $thongtinbenhnhan);
 ?>
</body>
</html>

<script type="text/javascript">
jQuery(document).ready(function() {
	$( "#dialog-session" ).dialog({
            autoOpen: false,
            height: ($(window).height()/100 * parseFloat(30)).toFixed(0),
            width: ($(window).width()/100 * parseFloat(35)).toFixed(0),
            modal: true,
           
            });
	//check_session();
	openform_shortcutkey();
	$('input').click(function(e){
		//$(e.target).select();
		})
	jwerty.key('f10', false);
	jwerty.key('f7', false);
	$('#chuandoan').bind('keydown', function (e) {
			if (jwerty.is('enter',e)) {
				 $("#loaikham").focus();
			}
		});
	$('#loaikham').bind('keydown', function (e) {
			if (jwerty.is('enter',e)) {
				 $("#nghenghiep1").focus();
			}
		});
	 $(document).keyup(function(e) {
		if (e.keyCode === 121) {
			$("#tamung_rowed3").click();
		}
	 });
	 $(document).keyup(function(e) {
		if (e.keyCode === 118) {
			$("#chidinhkham_rowed3").click();
		}
	 });

	 $("#luotkhamnoitrutontai").dialog({
		autoOpen:false,
        height:100,
        width: 400,
        modal: true,
        title: 'Thông báo',
		draggable: true,
		resizable: false,
        stack: false,
		buttons: {
			"Ok": function() {
			  $( this ).dialog( "close" );
			},
		},
		beforeClose: function( event, ui ) {

		},
        close: function(event, ui) {
			var selr = jQuery('#rowed3').jqGrid('getGridParam','selrow');
			var rowData = jQuery('#rowed3').getRowData(selr);
			//parent.postMessage("editluotkham;"+luotkham+";"+tenbn, "*");
			parent.postMessage('open_idbenhnhan;tao_benh_an_noi_tru;'+window.n_luotkham+';'+selr+';;;'+rowData['HoLotBenhNhan']+' '+rowData['TenBenhNhan']+'&oper=edit&id_ttluotkham='+window.n_luotkham+'&fromsearch=true&doituong=','*');
        },

    });
	$("#quanhuyen_null").dialog({
		autoOpen:false,
        height:150,
        width: 250,
        modal: true,
        title: 'Thông báo',
		draggable: true,
		resizable: false,
        stack: false,
		buttons: {
			"Ok": function() {
			  $( this ).dialog( "close" );
			},
		},
		beforeClose: function( event, ui ) {

		},
        close: function(event, ui) {
			var selr = jQuery('#rowed3').jqGrid('getGridParam','selrow');
			var rowData = jQuery('#rowed3').getRowData(selr);
		//	var rowData =  $('#rowed3').getRowData(id);
			 parent.postMessage("editbenhnhan;"+selr+";"+rowData["HoLotBenhNhan"]+" "+rowData["TenBenhNhan"], "*");
        },

    });

	 $( "#dialog-chidinhkham" ).dialog({
      resizable: false,
	  autoOpen:false,
	  width:380,
      height:160,
      modal: true,
      buttons: {
        "OK": function() {
          $( this ).dialog( "close" );
		  var id_row = $('#rowed3').jqGrid('getGridParam', 'selrow');
		  var rowData =  $('#rowed3').getRowData(id_row);
		  parent.postMessage("taoluotkham;"+id_row+";"+rowData["HoLotBenhNhan"]+" "+rowData["TenBenhNhan"], "*");
        },
        'NO': function() {
          $( this ).dialog( "close" );
		  parent.postMessage('open_idbenhnhan;chidinhkham;'+window._n_idluotkham+';;;;','*');
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
		}
        
    });
	
	  $("#luotkhamtontai").dialog({
		autoOpen:false,
        height: ($(window).height() / 100 * parseFloat(30)).toFixed(0),
        width: ($(window).width() / 100 * parseFloat(50)).toFixed(0),
        modal: true,
        title: 'Thông báo',
		draggable: true,
		resizable: false,
        stack: false,
		buttons: {
			"Ok": function() {

			  $( this ).dialog( "close" );


			},
		},
		beforeClose: function( event, ui ) {

		},
        close: function(event, ui) {
			parent.postMessage("editluotkham;"+luotkham+";"+tenbn, "*");
        },

    });

create_combobox('#chuandoan', '#chuandoan1', ".chuan_doan", "#chuan_doan", create_chandoan, 500, 400, 'Người thực hiện', 'data_chandoan',0);
create_combobox('#loaikham', '#loaikham1', ".loai_kham", "#loai_kham", create_loaikham, 500, 400, 'Người thực hiện', 'data_loaikham',0);



/*	window.congty=	 $.ajax({
		url: "resource.php?module=web_services&function=get_auto_complete2&action=index&store=GD2_congty_autocomplex",
		dataType:"json",
		async:false
	}).responseText;*/
	//window.congty=jQuery.parseJSON(window.congty);
	window.nghenghiep = $.ajax({url: 'resource.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=0&tables=DM_NgheNghiep&id=ID_NgheNghiep&name=TenNgheNghiep', async: false, success: function(data, result) {
		if (!result)
			alert('Không load được tên');
		}}).responseText;
	create_combobox_new('#congty',create_congty,'bw','','data_congty',0);
	init_data();
	shortcut_key();
	create_grid();
	window.kiemtra_popup=false;
	jQuery(window).resize(function() {
	 	resize_control();
	});

 		setTimeout(function(){$("#holot").focus()},500); ;
		phanquyen();
	})
function create_grid(){
	$("#rowed3").jqGrid({
   	url:'resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_benh_nhan&p=0',
	datatype: "json",
   	colNames:['Id','Mã BN','Họ lót','Tên','Ngày Sinh','Năm sinh','Giới tính','Điện thoại 1','Điện thoại 2','Địa chỉ','Nghề nghiệp','Người liên hệ','Quan hệ với BN','ĐT người LH','Ghi chú','Quan hệ với BV'],
   	colModel:[
		{name:'ID_benhnhan',index:'ID_benhnhan', width:"100%", editable:false,align:'left',hidden:true},
		{name:'MaBenhNhan',index:'MaBenhNhan', width:"80%", editable:true,align:'left',hidden:false},
		{name:'HoLotBenhNhan',index:'HoLotBenhNhan', width:"150%", editable:true,align:'left',hidden:false},
		{name:'TenBenhNhan',index:'TenBenhNhan', width:"50%", editable:true,align:'left',hidden:false},
		{name:'NgayThangNamSinh',index:'NgayThangNamSinh', width:"100%", editable:true,align:'left',hidden:false},
		{name:'NamSinh',index:'NamSinh', width:"50%", editable:true,align:'left',hidden:false},
		{name:'GioiTinh',index:'GioiTinh', width:"50%", editable:true,align:'left',hidden:false,formatter: "select",editoptions:{value:"0:Nam;1:Nữ"}},
		{name:'DienThoai1',index:'DienThoai1', width:"100%", editable:true,align:'left',hidden:false},
		{name:'DienThoai2',index:'DienThoai2', width:"100%", editable:true,align:'left',hidden:false},
		{name:'DiaChi',index:'DiaChi', width:"200%", editable:true,align:'left',hidden:false},
		{name:'ID_NgheNghiep',index:'ID_NgheNghiep', width:"50%", editable:true,align:'left',hidden:false,formatter: "select",editoptions:{value:nghenghiep}},
		{name:'TenNguoiLienHe',index:'TenNguoiLienHe', width:"100%", editable:true,align:'left',hidden:false},
		{name:'QuanHeVoiBN',index:'QuanHeVoiBN', width:"50%", editable:true,align:'left',hidden:false},
		{name:'DienThoaiNguoiLienHe',index:'DienThoaiNguoiLienHe', width:"100%", editable:true,align:'left',hidden:false},
		{name:'GhiChu',index:'GhiChu', width:"50%", editable:true,align:'left',hidden:false},
		{name:'QuanHeVoiBenhVien',index:'QuanHeVoiBenhVien', width:"200%", editable:true,align:'left',hidden:false}
   	],
		loadonce: false,
		scroll: 1,
		hidegrid: false,
		rowNum: 100,
		pginput:false,
		rowList:[],
		pager: '#prowed3',
		sortname: 'ID_benhnhan',
		viewrecords: true,
		shrinkToFit:true,
		sortorder: "desc",
		caption:"Danh mục bệnh nhân",
		serializeRowData: function (postdata) {
		},
		onSelectRow: function(id){
		window.id_benhnhan=id;
		 $.post("resource.php?module=web_services&function=create_bn&action=index&id_benhnhan="+id);
				$("#benhan_rowed3").removeClass('ui-state-disabled');
				$("#tamung_rowed3").removeClass('ui-state-disabled');
				$("#datlich_rowed3").removeClass('ui-state-disabled');
				$("#bookmark_rowed3").removeClass('ui-state-disabled');
				$("#edit_rowed3").removeClass('ui-state-disabled');
				$("#chidinhkham_rowed3").removeClass('ui-state-disabled');
				$("#taobenhannoitru_rowed3").removeClass('ui-state-disabled');
		},
		ondblClickRow: function (id, rowIndex, columnIndex) {
			var rowData =  $('#rowed3').getRowData(id);
				  parent.postMessage("editbenhnhan;"+id+";"+rowData["HoLotBenhNhan"]+" "+rowData["TenBenhNhan"], "*");
 		},
		loadComplete: function(data) {
		var myUrl = jQuery("#rowed3").jqGrid('getGridParam', 'url');
		window.count = jQuery("#rowed3").jqGrid('getGridParam', 'records');
		var id_rowed3 = $("#rowed3").getDataIDs();
		$("#datlich_rowed3").addClass('ui-state-disabled');
				$("#bookmark_rowed3").addClass('ui-state-disabled');
				$("#edit_rowed3").addClass('ui-state-disabled');
				$("#benhan_rowed3").addClass('ui-state-disabled');
				$("#tamung_rowed3").addClass('ui-state-disabled');
				$("#chidinhkham_rowed3").addClass('ui-state-disabled');
				$("#taobenhannoitru_rowed3").addClass('ui-state-disabled');
			if(count<=0){
				if(getURLParameter ('p',myUrl)==1){
					if(window.kiemtra_popup==false){
						dialog_datlich_callback("Thông báo:", "300px", "150px", "4732479", "",".thongbao");
					}
				}

			}else{
				if($.trim($('#rowed3').jqGrid('getGridParam', 'selrow'))==''){
				$("#rowed3").jqGrid("setSelection",id_rowed3[0], true);
				}
			}
		}
	});
	$("#rowed3").jqGrid('navGrid',"#prowed3",{add: permission["add"], edit: permission["edit"],addtext:'Thêm BN[F3]',edittext:"Sửa [F4]", del: false,refresh:false, search:false,closeAfterEdit: true,clearAfterAdd :true,closeOnEscape : true,
		 addfunc: function(){
			// alert()
				 parent.postMessage("addbenhnhan;"+$('#holot').val()+";"+$('#ten').val()+";"+$('#dienthoai').val()+";"+$('#diachi').val()+";"+$('#namsinh').val()+";"+$('#nghenghiep').val()+";"+$('#quanhe').val()+";"+$('#congty_hidden').val()+";", "*");
			},
			 editfunc: function(id){

				  var rowData =  $('#rowed3').getRowData(id);
				  parent.postMessage("editbenhnhan;"+id+";"+rowData["HoLotBenhNhan"]+" "+rowData["TenBenhNhan"], "*");
			}


	}, //options
		{}, // edit options
		{}, // add options
		{}, // del options
		{} // search options
	);
	resize_control();
	$("#rowed3").jqGrid('bindKeys', {"onEnter":function( rowid ) {} } );
	$("#rowed3").jqGrid('navButtonAdd', '#prowed3', {caption: "Tạo lượt khám[F12]", buttonicon: 'ui-icon-document-b',id : 'datlich_rowed3',
            onClickButton: function() {
				var id_row = $('#rowed3').jqGrid('getGridParam', 'selrow');
				  var rowData =  $('#rowed3').getRowData(id_row);
				$.post('resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_thongtinluotkham_check&id_benhnhan='+id_row).done(function(data){
				    data = $.trim(data);
					data = data.split(';');
					if(data[1]=='KetThucKham'){

				  parent.postMessage("taoluotkham;"+id_row+";"+rowData["HoLotBenhNhan"]+" "+rowData["TenBenhNhan"], "*");
					}else{
						
						if(data[2]=='46'){
							
						}else{
						window.luotkham=data[0];
						window.tenbn=rowData["HoLotBenhNhan"]+" "+rowData["TenBenhNhan"];
						$('#luotkhamtontai').dialog('open');
						}
					}
				})



            },
            title: "Tạo lượt khám[F12]",
            position: "last"
    });
	$("#rowed3").jqGrid('navButtonAdd', '#prowed3', {caption: "Đặt lịch hẹn[F9]", buttonicon: 'ui-icon-bookmark',id : 'bookmark_rowed3',
            onClickButton: function() {
				  var id_row = $('#rowed3').jqGrid('getGridParam', 'selrow')
				  var rowData =  $('#rowed3').getRowData(id_row);
				  parent.postMessage("datlichhen;"+id_row+";"+rowData["HoLotBenhNhan"]+" "+rowData["TenBenhNhan"], "*");
            },
            title: "Đặt lịch hẹn[F9]",
            position: "last"
    });
	$("#rowed3").jqGrid('navButtonAdd', '#prowed3', {caption: "Lịch làm việc", buttonicon: '',
            onClickButton: function(){
				   parent.postMessage("motab_chung;lich_lam_viec", "*");
            },
            title: "Lịch làm việc",
            position: "last"
    });
	$("#rowed3").jqGrid('navButtonAdd', '#prowed3', {caption: "DS Xếp hàng LS", buttonicon: '',
            onClickButton: function() {
				   parent.postMessage("motab_chung;DS_XepHang_LamSang", "*");
            },
            title: "DS Xếp hàng LS",
            position: "last"
    });
	$("#rowed3").jqGrid('navButtonAdd', '#prowed3', {caption: "Danh sách hẹn trả KQ", buttonicon: '',
            onClickButton: function() {

            },
            title: "Danh sách hẹn trả KQ",
            position: "last"
    });
	$("#rowed3").jqGrid('navButtonAdd', '#prowed3', {caption: "Bệnh án[F6]", buttonicon: 'ui-icon-note',id : 'benhan_rowed3',
            onClickButton: function() {
				  var id_row = $('#rowed3').jqGrid('getGridParam', 'selrow')
				  var rowData =  $('#rowed3').getRowData(id_row);
				  parent.postMessage('benhan_luotkham;benh_an;undefined;'+id_row+';'+rowData["HoLotBenhNhan"]+' '+rowData["TenBenhNhan"], "*");
            },
            title: "Bệnh án[F6]",
            position: "last"
    });
	$("#rowed3").jqGrid('navButtonAdd', '#prowed3', {caption: "Tạm ứng[F10]", buttonicon: '',id : 'tamung_rowed3',
            onClickButton: function() {
				  var id_row = $('#rowed3').jqGrid('getGridParam', 'selrow');
				  parent.postMessage('open_idbenhnhan;tam_ung;;'+id_row+';;;','*');
				//  var rowData =  $('#rowed3').getRowData(id_row);
				//  parent.postMessage('benhan;'+id_row+';'+rowData["HoLotBenhNhan"]+' '+rowData["TenBenhNhan"], "*");
            },
            title: "Tạm ứng[F10]",
            position: "last"
    });
	$("#rowed3").jqGrid('navButtonAdd', '#prowed3', {caption: "Chỉ định khám[F7]", buttonicon: '',id : 'chidinhkham_rowed3',
            onClickButton: function() {
				  var id_row = $('#rowed3').jqGrid('getGridParam', 'selrow');
				  //alert(id_row);
				  $.post('resource.php?module=<?=$modules?>&view=<?=$view?>&action=get_idluotkhamcuoi&id_benhnhan='+id_row).done(function(data){
				    data = $.trim(data);
					var rs=data.split('|||');
					window._n_idluotkham=rs[1];
					if(rs[0]==1){
						//alert(data);
						parent.postMessage('open_idbenhnhan;chidinhkham;'+window._n_idluotkham+';;;;','*');
					}else if(rs[0]==0){
						var rowData =  $('#rowed3').getRowData(id_row);
						$('#tenbn').html(rowData['HoLotBenhNhan']+' '+rowData['TenBenhNhan']);
						$('#dialog-chidinhkham').dialog('open');
					}else if(rs[0]==2){
						tooltip_message("Bệnh nhân chưa có lượt khám");
					}
				  });
				 // parent.postMessage('open_idbenhnhan;tam_ung;;'+id_row+';;;','*');
				//  var rowData =  $('#rowed3').getRowData(id_row);
				//  parent.postMessage('benhan;'+id_row+';'+rowData["HoLotBenhNhan"]+' '+rowData["TenBenhNhan"], "*");
            },
            title: "Chỉ định khám[F7]",
            position: "last"
    });
		$("#rowed3").jqGrid('navButtonAdd', '#prowed3', {caption: "Tạo B.án nội trú", buttonicon: '',id : 'taobenhannoitru_rowed3',
            onClickButton: function() {
				 var id_row = $('#rowed3').jqGrid('getGridParam', 'selrow');
				 var rowData = jQuery('#rowed3').getRowData(id_row);
				$.post('resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_thongtinluotkham_check_noitru&id_benhnhan='+id_row).done(function(data){
				    data = $.trim(data);
					data = data.split(';');
					if(data[1]=='KetThucKham'){
						$.post('resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_getthongtinnoitrubyidbenhnhan&id_benhnhan='+id_row).done(function(data){
							data = $.trim(data);
							data = data.split('|||');
							var phieuvaovien=data[0];

							if(phieuvaovien=='null'){
								if(data[1]=='null' || data[1]==0){
									$("#quanhuyen_null").dialog('open');
								}else{
								 parent.postMessage('open_idbenhnhan;tao_benh_an_noi_tru;;'+id_row+';;;'+rowData['HoLotBenhNhan']+' '+rowData['TenBenhNhan']+'&oper=add&fromsearch=true&doituong=','*');
								}
							}else{
								phieuvaovien=phieuvaovien.split(';');
								parent.postMessage('open_idbenhnhan;tao_benh_an_noi_tru;'+phieuvaovien[0]+';'+id_row+';;'+phieuvaovien[1]+';'+phieuvaovien[2]+'&doituong='+phieuvaovien[3]+'&diachibaotin='+phieuvaovien[4]+'&oper=add','*');
							}


						});


					}else{
						window.n_luotkham=data[0];
						window.n_tenbn=rowData["HoLotBenhNhan"]+" "+rowData["TenBenhNhan"];
						$('#luotkhamnoitrutontai').dialog('open');

					}
				})
            },
            title: "Tạo B.án nội trú",
            position: "last"
    });
}
function load_phong_ban(status){
	window.phongban = $.ajax({url: 'resource.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=0&tables=DM_NhomThuoc&id=ID_NhomThuoc&name=TenNhomThuoc', async: false, success: function(data, result) {if (!result) alert('Không load được danh mục phòng ban');}}).responseText;

	if(status==true){
		$("#rowed3").setColProp('TenPhongBan', { editoptions: { value: phongban} });

	}
}
function shortcut_key(){
	jwerty.key('f5', false);jwerty.key('f4', false);jwerty.key('f3', false);jwerty.key('f8', false);jwerty.key('f9', false);jwerty.key('f10', false);jwerty.key('f12', false);
		$('body').bind('keydown', function (e) {
			if (jwerty.is('f5',e)) {
				 $(".ui-icon-cancel").trigger("click");
			}
		});
		$('body').bind('keydown', function (e) {
			if (jwerty.is('f4',e)) {
				 $(".ui-icon-pencil").trigger("click");
			}
		});
		$('body').bind('keydown', function (e) {
			if (jwerty.is('f3',e)) {
				 $(".ui-icon-plus").trigger("click");
			}
		});
		$('body').bind('keydown', function (e) {
			if (jwerty.is('f8',e)) {
				 $(".ui-icon-trash").trigger("click");
			}
		});
		$('body').bind('keydown', function (e) {
			if (jwerty.is('f9',e)) {
				 $(".ui-icon-bookmark").trigger("click");
			}
		});
		$('body').bind('keydown', function (e) {
			if (jwerty.is('f11',e)) {
				 $(".ui-icon-refresh").trigger("click");
			}
		});
		$('body').bind('keydown', function (e) {
			if (jwerty.is('f12',e)) {
				 $(".ui-icon-document-b").trigger("click");
			}
		});

}
function init_data(){
	$("#save_data").click(function(){
		search_bn();
	})
	$("#clear_all").click(function(){
		clear_all();
	})
	//create_select("#nghenghiep",window.nghenghiep);
	//create_select("#loaikham",window.loaikham);
	//create_select("#quanhe",window.quanhe);
	//autocompleted_combobox("#quanhe");
	autocompleted_combobox("#nghenghiep");
	//autocompleted_combobox("#loaikham");
	//autocomplex_mutil("#congty",congty,"#congty1");
 $("#holot").focus();
	   jwerty.key('tab', false);
	   jwerty.key('shift+tab', false);
	   jwerty.key('shift+enter', false);
	   $('#container input[type=text],#container textarea,#container input[type=checkbox],#container span input,#container a#save_data,#container a#clear_all,#container a#bndk').bind("keydown", function(e) {
		if ($("#container a#save_data,#container a#clear_all,#container a#bndk").is(":focus")){
				 if (jwerty.is("↓",e)||jwerty.is("tab",e)) {
					 var inputs = $(this).parents("#container").eq(0).find("a#save_data,a#clear_all,a#bndk");
					 var idx = inputs.index(this);
						  if (idx == inputs.length - 1) {
							$("#holot").focus();
						} else {inputs[idx + 1].focus();}
				 }else if(jwerty.is("shift+tab",e)||jwerty.is("↑",e)){
						var inputs = $(this).parents("#container").eq(0).find("a#save_data,a#clear_all,a#bndk");
						var idx = inputs.index(this);
					 if (idx >=0) {
						if(idx==0){;
						 $("#congty").focus();
						 $("#congty").select();
						}else{inputs[idx -1].focus();
						  inputs[idx - 1].focus();
						}
					}
			    }else if(jwerty.is("shift+enter",e)){
					search_bn();
				}
			}
		else if ($("#container input[type=text],#container textarea,#container input[type=checkbox],#container span input").is(":focus")){
             if (jwerty.is("enter",e)||jwerty.is("tab",e)) {
               	focus_tam=$(e.target).attr('class').split('_');
				auto_search();
				$('.focus_'+(parseInt(focus_tam[1])+1)).focus();
				$('.focus_'+(parseInt(focus_tam[1])+1)).select();

             }else if(jwerty.is("shift+enter",e)){
					search_bn();
			 }
			 else if(jwerty.is("shift+tab",e)){

			 }else if (jwerty.is("↓",e)){
				if(window.count>0){

					var idcur = $('#rowed3').jqGrid('getGridParam', 'selrow');

						if(idcur==null){
						var ids = $('#rowed3').getDataIDs();
						$('#rowed3').jqGrid("setSelection",ids[0], true);
						}else{
					  var idcur = $('#rowed3').jqGrid('getGridParam', 'selrow')
					  if (idcur == null) return;
					  var ids = $('#rowed3').getDataIDs();
					  var index = $('#rowed3').getInd(idcur);
					  if (ids.length < 2) return;
					 index++;
					  if (index > ids.length)
						index = 1;
					  $('#rowed3').jqGrid("setSelection",ids[index - 1], true);
						}
				}

			}else if (jwerty.is("↑",e)){

						var idcur = $('#rowed3').jqGrid('getGridParam', 'selrow')


						if(idcur==null){
						var ids = $('#rowed3').getDataIDs();
						$('#rowed3').jqGrid("setSelection",ids[0], true);
						}else{

					  var idcur = $('#rowed3').jqGrid('getGridParam', 'selrow')
					  if (idcur == null) return;
					  var ids = $('#rowed3').getDataIDs();
					  var index = $('#rowed3').getInd(idcur);
					  if (ids.length < 2) return;
					 index--;
					  if (index == 0){
						index = ids.length;
					  }
					  $('#rowed3').jqGrid("setSelection",ids[index - 1], true);
						}
					}

		}
        });


}


function auto_search(){
	if($.trim($('#ten').val())!=''||$.trim($('#mabn').val())!=''){
		search_bn()
	}

}


function search_bn(){
	i=0;
	phancach="";
	dataToSend ='{';
	$('#rowed3').setGridParam({postData: null});
	$('#container').find(':input[type=text],select,textarea,input[type=hidden],input[type=checkbox]:checked').each(function(){
			if(i>0){
			  phancach=",";
			}
			dataToSend += phancach + '"'+ this.name + '":"' + this.value +'"' ;
			i++;
		})
		dataToSend +='}';
		//alert (dataToSend)
		dataToSend = jQuery.parseJSON(dataToSend);
		 //alertObject (dataToSend)
		$('#rowed3').setGridParam({postData: dataToSend,url:'resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_benh_nhan&p=1'}).trigger('reloadGrid');

}

 function autocomplex_mutil(input,data,id) {
			 var isOpen = false;
			_init(input,data,id);
			afterInit(input,isOpen);


	};
 function afterInit(input,isOpen) {

			var button = $("<a>").attr("tabIndex", -1).attr("title", "Show all items").tooltip().insertAfter($(input)).button({
			icons: {
				primary: "ui-icon-triangle-1-s"
			},
			text: false
		}).removeClass("ui-corner-all").addClass("custom-combobox-toggle ui-corner-right").click(function(event) {
			$(input).focus();
			wasOpen = $(input).autocomplete("widget").is(":visible");

			if (isOpen) {
				$(input).autocomplete("close");
				isOpen = false;
			} else {
				isOpen = true;
				$(input).autocomplete("search", "");
				event.stopImmediatePropagation();
			}
		});
	 }
 function _init(input,data,id) {
		$(input).autocomplete({
			position: {
				my : "right top",
				at: "right bottom"
			},
			source: data,
			minLength: 0,
			select: function (event, ui) {
						$(id).val(ui.item.id);
       			 },
			open: function(event, ui) {
			}  ,
			autoFocus :true,
			}).data("uiAutocomplete")._renderItem = function (ul, item) {
			if($(input).val()==""){newid=item.label}
			else{
					var newid = String(item.label).replace(
					new RegExp(this.term, "gi"),
					"<strong style='color:#F60'>$&</strong>");}
					return $("<li ></li>")
				.data("item.autocomplete", item)
				.append("<a style='width:320px;display: inline-block!important;vertical-align:top'>" + newid + "</a> <a style='width:120px;display: inline-block!important;vertical-align:top'>"+ item.row2 +"</a> <a style='width:300px;display: inline-block!important;vertical-align:top'>"+ item.row3 +"</a> ")
				.appendTo(ul);
				};
			 }	;

	function clear_all() {
			$('#container').find(':input[type=text],select,textarea,input[type=hidden],input[type=checkbox]:checked,span input').each(function()
			{
				if((this.name=="nam")||(this.name=="nu")){
				$(this).prop('checked', false);
				}else{
				$(this).val("");
				}
			})
			$("#holot").focus();


	};
	function getURLParameter(name,myUrl) {
   			 return decodeURIComponent((new RegExp('[?|&]' + name + '=' + '([^&;]+?)(&|#|;|$)').exec(myUrl)||[,""])[1].replace(/\+/g, '%20'))||null;
	}
	function callback(){

	}
	function dialog_datlich_callback(title, width, height, elem, links,form) {
	$("body").append("<div class='ui-jqdialog modal" + elem + "'>Không tìm thấy bệnh nhân.Bạn có muốn thêm mới </div>");
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
		draggable: true,
		resizable: false,
        stack: false,
		buttons: {
			"Yes": function() {
				parent.postMessage("addbenhnhan;"+$('#holot').val()+";"+$('#ten').val()+";"+$('#dienthoai').val()+";"+$('#diachi').val()+";"+$('#namsinh').val()+";"+$('#nghenghiep').val()+";"+$('#quanhe').val()+";"+$('#congty_hidden').val()+";", "*");
			 // dialog_add_dm("Thêm mới bệnh nhân",100,90,elem,'resource.php?module=hanhchinh&view=them_moi_benhnhan&id_form=53&id_loai=undefined&holotbn='+$('#holot').val()+'&tenbn='+$('#ten').val()+'&oper=add2',callback);
			  $( this ).dialog( "close" );
			},
			"No": function() {
			  $( this ).dialog( "close" );
			}
		},
		beforeClose: function( event, ui ) {

		},
        close: function(event, ui) {


			$(this).dialog( "close" );
            $(this).remove();
			window.kiemtra_popup=false;
        },
        hide: {
            effect: "fadeOut",
            duration: 500,
        },
        open: function(event, ui) {
			window.kiemtra_popup=true;
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

        },


    });

}



function create_chandoan(elem, datalocal) {
        datalocal = jQuery.parseJSON(datalocal);
        $(elem).jqGrid({
            datastr: datalocal,
            datatype: "jsonstring",
            colNames: ['Chẩn đoán'],
            colModel: [
                {name: 'nickname', index: 'nickname', hidden: false},

            ],
            hidegrid: false,
            gridview: true,
            loadonce: true,
            scroll: true,
            modal: true,
            rowNum: 50,
            rowList: [],
            height: 300,
            width: 370,
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
				            },
        });
        $(elem).jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});
        $(elem).jqGrid('bindKeys', {});
    }
function create_loaikham(elem, datalocal) {
        datalocal = jQuery.parseJSON(datalocal);
        $(elem).jqGrid({
            datastr: datalocal,
            datatype: "jsonstring",
            colNames: ['Tên loại khám','Tên nhóm'],
            colModel: [
                {name: 'abc', index: 'abc', hidden: false},
                {name: 'abc1', index: 'abc1', hidden: false},
            ],
            hidegrid: false,
            gridview: true,
            loadonce: true,
            scroll: false,
            modal: true,
            rowNum: 100000,
            rowList: [],
            height: 300,
            width: 370,
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
				            },
        });
        $(elem).jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});
        $(elem).jqGrid('bindKeys', {});
    }

	function create_congty(elem, datalocal) {
        datalocal = jQuery.parseJSON(datalocal);
        $(elem).jqGrid({
            datastr: datalocal,
            datatype: "jsonstring",
            colNames: ['Tên loại khám','Tên nhóm'],
            colModel: [
                {name: 'abc', index: 'abc', hidden: false},
                {name: 'abc1', index: 'abc1', hidden: false},
            ],
            hidegrid: false,
            gridview: true,
            loadonce: true,
            scroll: false,
            modal: true,
            rowNum: 100000,
            rowList: [],
            height: 300,
            width: 370,
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
				            },
        });
        $(elem).jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});
        $(elem).jqGrid('bindKeys', {});
    }
	function resize_control(){
		$("#rowed3").setGridWidth($(window).width()-12);
		$("#rowed3").setGridHeight($(window).height()-290);
		$(".panel_form").css("width",$(window).width()-17+"px");
	}
	function check_session(){

		if(window.dstang=="" && window.kho=="" && window.khobhyt==""){

			//  $('#dialog-session').dialog('open');
			  t=setTimeout(function(){
		$('#phongban').val(<?php //$_SESSION["phongban_vl"]?>);
		$('#phongban1').val($('#phongban :selected').text()); 
		$('#text_tang').val(<?php //$_SESSION["dstang"]?>);
		$('#text_kho').val(<?php //$_SESSION["kho"]?>);	
		$('#text_kho_bhyt').val(<?php //$_SESSION["khobhyt"]?>);			
			},300);	 
		phanquyen();
			window.phongban = $.ajax({url: 'resource.php?module=web_services&function=get_auto_edit_option_byid&action=index&term=IsPhongChuyenMon=0&status=2&tables=DM_PhongBan&id=ID_PhongBan&name=TenPhongBan', async: false, success: function(data, result) {
					if (!result)
						alert('Không load được danh mục phòng ban');
				}}).responseText;
			phongban1 = phongban.split(";");
			for (i = 0; i <= phongban1.length - 1; i++) {
				temp = phongban1[i].split(":");
				$('#phongban').append($('<option>', {
					value: temp[0],
					text: temp[1]
				}));
			}
			autocompleted_combobox('#phongban');
		   $("#capnhat").click ( function () {		
		 		 phancach = ",";	 
			  	dataToSend ='{';
				dataToSend +='"ip":"<?=$_SERVER['REMOTE_ADDR']?>"';
		        dataToSend += phancach + '"PCName":"' +$.cookie("domain")+ '"';
		         dataToSend += phancach + '"ID_Kho":"' +$('#text_kho').val()+ '"';
		         dataToSend += phancach + '"ID_KhoBHYT":"' +$('#text_kho_bhyt').val()+ '"';
		         dataToSend += phancach + '"ID_Tang":"' +$('#text_tang').val()+ '"';
		         dataToSend += phancach + '"ID_PhongBanVatLy":"' +$('#phongban').val()+ '"';
					dataToSend +='}';
					
					dataToSend = jQuery.parseJSON(dataToSend);
					$.post('resource.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=capnhat&hienmaloi=3',dataToSend)
								 .done(function( gridData ) {	
								 							tooltip_message("Đã lưu");
  			                                         
			                                            })
			                                            .fail(function() {
			                                            alert( "error" );
			                                            })
					
		   } );   
	}
}

</script>