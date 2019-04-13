

<style>
    .ui-datepicker{ z-index: 9999 !important;}

	
</style>
<body> 
    <input type="file" id="upload_input" hidden value="Chọn file" accept="image/*">
    <form id="image_submit">
        <input type="hidden" name="action" value="single_image">
        <input type="hidden" name="default_name" id="default_name">  
        <input type="hidden" name="cmd" value="upload">
        <input type="hidden" name="target" value="f1_XA">    
        <input type="hidden" name="answer" value="42">  
        <input type="hidden" name="tenthumuc" value="<?=$_SESSION["config_system"]["Signs"]?>">  
        <input type='hidden'  id='anh'  name='image_data[]'>         		
	</form>
    <input type="file" id="upload_input2" style="visibility:hidden"  value="Chọn file" accept="image/*">
    <form id="image_submit2">
        <input type="hidden" name="action" value="single_image">
        <input type="hidden" name="default_name" id="default_name">  
        <input type="hidden" name="cmd" value="upload">
        <input type="hidden" name="target" value="f1_XA">    
        <input type="hidden" name="answer" value="42">  
        <input type="hidden" name="tenthumuc" value="<?=$_SESSION["config_system"]["Staff"]?>">  
        <input type='hidden'  id='anh'  name='image_data[]'>         		
	</form>
    <div id="grid_phong_ban" >      	 
          <table id="rowed3" ></table>
            <div id="prowed3"></div>   
    </div> 
    <div id="dialog-form" title="Thêm bản ghi" style="display:none">
     <div class="thongtinchinh" style="width:100%;margin-top:5px;display:inline-block!important;overflow-y:scroll!important">
      <div id="main_top" class="ui-dialog ui-widget ui-widget-content ui-corner-all ui-resizable" style="width:1190px;height: auto;  box-shadow:none!important;  display: block!important;z-index: 1 !important;" >
   	<div class="ui-dialog-titlebar ui-widget-header ui-corner-all ui-helper-clearfix"> <span id="ui-id-5" class="ui-dialog-title">Thông tin nhân viên</span> </div>
         <div class="ui-dialog-content ui-widget-content" id="datatosend" style="display: block; width: auto; min-height: none; max-height: none; height: 100%; ">
     	 <div id="container"style="border-width: 4px; " > 
         
         <div class="form_row" style="vertical-align:top;margin-top: 10px!important;"  >          
            <img id="hinhnhanvien_nv"class="non_image" style="border-style:solid;border-color:green;margin-left:30px" src=""/>         
            <!--<input id="hinhnhanvien" boder="2" name="hinhnhanvien" type="image" src="file_manager/php/connector.php?tenthumuc=<?=$_SESSION["config_system"]["Signs"]?>&answer=42" alt="Click để chọn hình" style="width:120px;height:150px"/>-->    
         </div>
         <div class="form_row" style="vertical-align:top"  >
             
           <div style="padding-top:10px ">
               <label for="manv" style="width:90px; color:red;text-align:right ">Mã nhân viên</label>
               <input id="manv" name="manv"  type="text" style="width:140px;margin-left:5px">
           </div>
             
           <div style="padding-top:5px "> <label for="ho" style="width:90px;text-align:right ">Họ</label>
           <input id="ho" type="text"  lang="ho" name="ho" style="width:140px;margin-left:5px">
           </div>
           <div style="padding-top:5px "> <label for="ngaysinh" style="width:90px;text-align:right ">Ngày Sinh</label>
              <input type=text id="ngaysinh" name="ngaysinh" style="width: 140px!important;margin-left:5px" >
           </div>
           <div style="padding-top:5px "> <label for="cmnd"  style="width:90px;text-align:right ">CMND</label>
          		 <input id="cmnd" value="" name="cmnd"  type="text" style="width:140px;margin-left:5px">
           </div>
           <div style="padding-top:5px "> <label for="hochieu" style="width:90px;text-align:right ">Hộ chiếu</label>
                  <input id="hochieu" value="" name="hochieu"  type="text" style="width:140px;margin-left:5px">
           </div>
                            
        </div>

        <div class="form_row" style="vertical-align:top"  >          
           <div style="padding-top:10px "> <label for="tenthuonggoi" style="width:90px;text-align:right ">Tên thường gọi</label>
                  <input id="tenthuonggoi" value="" name="tenthuonggoi"  type="text" style="width:140px;margin-left:5px">
           </div>
           <div style="padding-top:5px "> <label for="ten" style="width:90px;text-align:right">Tên</label>
               <input name="ten" type="text"   id="ten" style="width:140px;margin-left:5px!important"></div>	
           <div style="padding-top:5px "> 
                <label for="gioitinh" style="width:90px;text-align:right">Giới tính</label>  
                <div id="radio_hover" style="display:inline-block">
                <input id="nam"   style="vertical-align: middle;width:10px" lang="nam" type="radio" name="sex" value="1">Nam
                <input id="nu"   style="vertical-align: middle;width:10px" lang="nu" type="radio" name="sex" value="0">Nữ
                </div>
           </div> 
           <div><label for="dantoc" style="width:90px;text-align:right ">Dân tộc</label> <select id="dantoc" name="dantoc" type="text" style="width:140px;margin-left:5px;margin-top: 5px; padding-top: 0px;"></select></div>
           <div> <label for="quoctich" style="width:90px;text-align:right ">Quốc tịch</label><select id="quoctich" name="quoctich" type="text" style="width:140px;margin-left:8px;margin-top: 10px; padding-top: 0px;"></select></div>
                      
        </div>
       
        <div id="colum3" class="form_row" style="vertical-align:top;"  >
       		
        <div class="ui-dialog-titlebar ui-widget-header ui-corner-all ui-helper-clearfix" style="font-size:12px;height:20px;width:410px!important;margin-left: 50px!important;margin-top: 10px!important;">Thông tin liên lạc </div>
        <div class="ui-dialog-content ui-widget-content" style=" border:1px solid #D4CCB0;border-top:none ;display: block; width:410px!important;margin-left: 50px!important;height:110px;border-bottom-left-radius: 6px;border-bottom-right-radius: 6px;">
        <div>             
        <div > 
            <label for="diachi" style="width:40px;text-align:right ">Địa chỉ </label><input value=""   name="diachi" id="diachi" type="text" style="width:355px;margin-left:5px"></input></div>
        <div style="padding-top:5px "> <label for="mobile" style="width:40px;text-align:right ">Mobile</label><input value="" id="mobile" name="mobile" type="text" style="width:120px;margin-left:5px"></input>
                                       <label for="dienthoainha" style="width:100px;text-align:right ">Điện thoại nhà</label><input value="" id="dienthoainha" name="dienthoainha" type="text" style="width:120px;margin-left:5px"></input> 
        </div>
        <div style="padding-top:5px "> <label for="email" style="width:40px;text-align:right ">Email</label><input value="" id="email" name="email" type="text" style="width:355px;margin-left:5px"></input></div>
        <div style="padding-top:5px "> <label for="yahoo" style="width:40px;text-align:right ">YahooID</label><input value="" id="yahoo" name="yahoo" type="text" style="width:120px;margin-left:5px"></input>
                                       <label for="skype" style="width:100px;text-align:right ">SkypeID</label><input value="" id="skype" name="skype" type="text" style="width:120px;margin-left:5px"></input> 
        </div>
        </div>
           
        </div>
                   
          
        </div>
        
         
      </div>
             <div id="container2"style="border-width: 4px;height:220px;margin-top: 10px" >
                 <div class="form_row" style="vertical-align:top">
                     <div style="padding-top:5px ">
                         <label for="phongban" style="width:90px;text-align:right ">Phòng ban</label> 
                         <select id="phongban" name="phongban" type="text" style="width:176px;margin-left:5px;margin-top: 5px; padding-top: 0px;"></select>
                     </div>
                     <div style="padding-top:5px ">
                         <label for="chucdanh" style="width:90px;text-align:right ">Chức danh</label> 
                         <select id="chucdanh" name="chucdanh" type="text" style="width:176px;margin-left:5px;margin-top: 5px; padding-top: 0px;"></select>
                     </div>
                     <div style="padding-top:5px ">
                         <label for="trinhdo" style="width:90px;text-align:right ">Trình độ</label> 
                         <select id="trinhdo" name="trinhdo" type="text" style="width:176px;margin-left:5px;margin-top: 5px; padding-top: 0px;"></select>
                     </div>
                     <div style="padding-top:8px ">
                         <label for="sotaikhoan" style="width:90px;text-align:right ">Số tài khoản</label> 
                         <input id="sotaikhoan" value="" name="sotaikhoan"  type="text" style="width:170px;margin-left:5px">
                     </div>
                     <div style="padding-top:5px ">
                         <label for="masothue" style="width:90px;text-align:right ">Mã số thuế</label> 
                         <input id="masothue" value="" name="masothue"  type="text" style="width:170px;margin-left:5px">
                     </div>
                     <div style="padding-top:5px ">
                         <div>
                        <label style="width:90px;text-align:right; vertical-align:top; margin-top:20px" for="ghichu">Ghi chú</label>
                        <!--<input id="ghichu" value="" name="ghichu"  type="text" style="width:170px;height:52px;margin-left:5px">-->
                        <textarea id="ghichu" lang="end" style="height:52px; width:170px;margin-left:5px" name="ghichu"></textarea>
                        </div>
                     </div>
                 </div>
                 <div class="form_row" style="vertical-align:top">
                     <div style="padding-top:5px ">
                         <label for="chucvu" style="width:100px;text-align:right ">Chức vụ</label> 
                         <select id="chucvu" name="chucvu" type="text" style="width:176px;margin-left:5px;margin-top: 5px; padding-top: 0px;"></select>
                     </div>
                     <div style="padding-top:8px ">
                         <label for="ngayvaolam" style="width:100px;text-align:right ">Ngày vào làm</label> 
                         <input id="ngayvaolam" value="" name="ngayvaolam"  type="text" style="width:170px;margin-left:5px">
                     </div>
                     <div style="padding-top:5px ">
                         <label for="loaitinhluong" style="width:100px;text-align:right ">Loại tính lương</label> 
                         <select id="loaitinhluong" name="loaitinhluong" type="text" style="width:176px;margin-left:5px; padding-top: 0px;"></select>
                     </div>
                     <div style="padding-top:5px ">
                         <label for="tennganhang" style="width:100px;text-align:right ">Tên ngân hàng</label> 
                         <select id="tennganhang" name="tennganhang" type="text" style="width:176px;margin-left:5px; padding-top: 0px;"></select>
                     </div>
                     <div style="padding-top:5px ">
                         <label for="sobaohiem" style="width:100px;text-align:right ">Số bảo hiểm</label> 
                         <input id="sobaohiem" value="" lang="end"name="sobaohiem"  type="text" style="width:170px;margin-left:5px">
                     </div>
                     <div style="padding-top:5px ">
                         <label for="chamcong" style="width:100px;text-align:right ">Chấm công</label> 
                         <!--<a id="chamcong-ic" type="button"class="fm-button ui-state-default ui-corner-all ui-button ui-widget ui-button-text-only" style="margin-left: 10px ! important; vertical-align: top; width: 25px; height: 25px; margin-right: 40px; visibility: visible;" name="ID_HoatChat"  aria-disabled="false"><span class="ui-button-text" style="padding-left: 4px;">-->
                         <button id="chamcong-ic" name="chamcong-ic" style="margin-left: 10px ! important; vertical-align: top; width: 41px; height: 41px; margin-right: 40px   "><span class="ui-icon ui-icon-circle-plus" ></span></button>
<!--                         <span class="ui-icon ui-icon-circle-plus" style="margin-left: -11px; margin-top: -5px;"></span>-->
<!--                         </span></a>-->
                     </div>
                 </div>
                 <div class="form_row" style="vertical-align:top">
                      <div style="padding-top:5px ">
                         <label for="username" style="width:100px;text-align:right ">Username</label> 
                         <input id="username" value="" name="username"  type="text" style="width:170px;margin-left:5px">
                     </div>
                     <div style="padding-top:5px ">
                         <label for="password" style="width:100px;text-align:right ">Password</label> 
                         <input id="password" value="" name="password"  type="text" style="width:170px;margin-left:5px">
                     </div>
                     <div style="padding-top:5px ">   
                         <label for="chamcongbangmay" style="width:140px;text-align:right ">Chấm công bằng máy</label> 
                         <input type=checkbox id="chamcongbangmay" value="1" name="chamcongbangmay">
                         <label for="nghiviec" style="width:100px;text-align:right ">Đã nghỉ việc</label> 
                         <input type=checkbox id="nghiviec" value="1" name="nghiviec">
                     </div>
                     <div style="padding-top:5px ">   
                         <label for="labacsi" style="width:140px;text-align:right ">Là bác sĩ</label> 
                         <input type=checkbox id="labacsi" value="1" name="labacsi">
                         <label for="congtacvien" style="width:100px;text-align:right ">Là cộng tác viên</label> 
                         <input type=checkbox id="congtacvien" value="1" name="congtacvien">
                     </div>
                     <div style="padding-top:5px ">   
                         <label for="allowlogin" style="width:140px;text-align:right ">Cho phép đăng nhập</label> 
                         <input type=checkbox id="allowlogin" value="1" name="allowlogin">
                         <label for="disable" style="width:100px;text-align:right ">Disable</label> 
                         <input type=checkbox id="disable" value="1" name="disable">
                     </div>
                     
                 </div>
                 <div class="form_row" style="vertical-align:top">
                      <div style="padding-top:5px ">
                         <div><label for="chuki" style="width:100px;text-align:right ">Chữ kí</label> </div>
                         <img id="chuky_nv" class="non_image" style="border-style:solid;border-color:green;margin-left:30px" src=""/>
                         
                     </div>
                 </div>
          </div>
    </div>
  </div>
 </div>      
 </div>
    <div id="dialog-form2" title="Thêm bản ghi" style="display:none">
         <table id="rowed4">          
         </table>
         <div id="prowed4"></div>
    </div >
    <div id="dialog-form3" title="Thêm hình nhân viên" >
        <div id="images_viewer">
 	<span class="zoom" id="ex1"><img /></span>
  </div>
  <br>
 <div id="content_1" class="content"><div class="images_container" id="images_thumnail"></div></div>
    </div>
</body>
</html> 

<script type="text/javascript">
jQuery(document).ready(function() {
	window.hinh_nhanvien='';
	window.chuky_nhanvien='';
	$("#upload_input").change(function(e) {
			//alert($(this).val());
		   imagesSelected(this.files,submit_file); 
		 
			
	});
	$("#upload_input2").change(function(e) {
			//alert($(this).val());
		   imagesSelected2(this.files,submit_file); 
		 
			
	});	 
     
        number_textbox("#manv");
        number_textbox("#cmnd");
        number_textbox("#sotaikhoan");
        number_textbox("#masothue");
        number_textbox("#mobile");
        number_textbox("#dienthoainha");
        //number_textbox("#hochieu");
	create_grid1();
        init_data();
	load_all();
	create_grid();			 
	shortcut_key();		
        
	$( "#dialog-form" ).dialog({
            
            autoOpen: false,
            zIndex: 1,
            height: ($(window).height()/100 * parseFloat(90)).toFixed(0),
            width: ($(window).width()/100 * parseFloat(95)).toFixed(0),
            modal: true,
            stack: false,
            open: function(event,ui){
                $( "#dialog-form" ).dialog( "option", "height", ($(window).height()/100 * parseFloat(100)).toFixed(0) );
                $( "#dialog-form" ).dialog( "option", "width", ($(window).width()/100 * parseFloat(95)).toFixed(0) );
                
            },
            buttons: {
             Save: function() {
                 
                check_n();
                if(window.oper=='add'){
                
                 save_button();
                	
                }
                else{
                edit_button();
                
                }
            
            },

             Cancel: function() {

              $( this ).dialog( "close" );
              $("#chuky_nv").attr("src","")
               }
               }
            });
         $("#checkp").click(function() {
   
            var x = $("#checkp").is(":checked");
            if (x == true) {
                $("#gview_rowed3 .ui-icon-circlesmall-minus").trigger("click");
            } else {
                $("#gview_rowed3 .ui-icon-circlesmall-plus").trigger("click");
            }

        })   
       phanquyen();
       add_icon_button_dialog("Save","disk");
       
       $( "#chamcong-ic" )
            .button()
            .click(function() {
            $( "#dialog-form2" ).dialog( "open" );
            //$(".ui-jqgrid-bdiv").empty();
            
             });
        $( "#dialog-form2" ).dialog({
            autoOpen: false,
            height: ($(window).height()/100 * parseFloat(70)).toFixed(0),
            width: ($(window).width()/100 * parseFloat(65)).toFixed(0),
            modal: true,
             open: function(event,ui){
                $( "#dialog-form2" ).dialog( "option", "height", ($(window).height()/100 * parseFloat(70)).toFixed(0) );
                $( "#dialog-form2" ).dialog( "option", "width", ($(window).width()/100 * parseFloat(53)).toFixed(0) );
                 
                
            },
            buttons: {
           
            Cancel: function() {
                $("#rowed4_ilcancel").click();
            $( this ).dialog( "close" );
                        }
                    }
            });
            add_icon_button_dialog("Cancel","trash");
            $( "#dialog-form3" ).dialog({
            autoOpen: false,
            height: ($(window).height()/100 * parseFloat(70)).toFixed(0),
            width: ($(window).width()/100 * parseFloat(65)).toFixed(0),
            modal: true,
             open: function(event,ui){
                $( "#dialog-form3" ).dialog( "option", "height", ($(window).height()/100 * parseFloat(100)).toFixed(0) );
                $( "#dialog-form3" ).dialog( "option", "width", ($(window).width()/100 * parseFloat(100)).toFixed(0) );
                 
                
            },
            buttons: {
           
            Cancel: function() {
            $( this ).dialog( "close" );
                        }
                    }
            });
        $( "#ngaysinh" ).datepicker({dateFormat: 'yy-mm-dd'});  
	$( "#ngayvaolam" ).datepicker({dateFormat: 'yy-mm-dd'});
        jQuery(window).resize(function() {		 
	 $("#rowed3").setGridWidth($(window).width()-20);
	 $("#rowed3").setGridHeight($(window).height()-$("#form_danh_muc_phong_ban").height()-150);
	});	
       

})
function create_grid(){	
	 $("#rowed3").jqGrid({
		url:'resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_nhanvien',
		datatype: "json",	
		colNames:['ID','Mã nhân viên','Cảnh báo','Phòng ban','Họ','Tên','Hình nhân viên','Giới tính','Dân tộc','Quốc tịch','CMND','Hộ chiếu','Chức vụ','Chức danh','Địa chỉ','Số điện thoại','Số điện thoại nhà','Email','Nick yahoo','Nick Skype',
                'Ngày sinh','Ngày vào làm','Trình độ','Loại tính lương','Chấm công bằng máy','Tài khoản ngân hàng','Tên ngân hàng','Mã số thuế cá nhân','Số bảo hiểm','Ghi chú','Đã nghỉ việc','Hình chữ kí','Là bác sĩ','Là cộng tác viên bên ngoài','Cho phép đăng nhập','Nick name','Username','Password','Disable'],
		colModel:[
			{name:'ID_NhanVien',index:'ID_NhanVien',search:false, width:"30", editable:false,align:'left',hidden:true}, 
			{name:'MaNV',index:'MaNV', width:"100", editable:false,align:'left',hidden:false,editrules: {required:true},edittype:"text",formoptions:{},sorttype:'text'},
      //khatm.add thêm cột cảnh báo
      {name:'Canhbao',index:'Canhbao', width:"100", editable:false,align:'left',hidden:false,editrules: {required:true},edittype:"text",formoptions:{}},
                        {name:'ID_PhongBan',index:'ID_PhongBan', width:"100%", editable:true,align:'center',hidden:false,formatter:"select",editrules: {required:true},edittype:"select",editoptions: { value: phongban}},
                        {name:'HoLotNhanVien',index:'HoLotNhanVien', width:"100", editable:true,align:'left',hidden:false,editrules: {required:true},edittype:"text",formoptions:{},sorttype:'text'},
                        {name:'TenNhanVien',index:'TenNhanVien', width:"100", editable:true,align:'left',hidden:false,editrules: {required:true},edittype:"text",formoptions:{}},
                        {name:'HinhNhanVien',index:'HinhNhanVien', width:"100", editable:false,align:'left',hidden:false,editrules: {required:true},edittype:"text",formoptions:{}},
                        {name:'GioiTinh',index:'GioiTinh',search:false, width:"100", editable:false,align:'center',edittype:"checkbox",editoptions: {value:"1:0"},formatter:"checkbox",formatoptions:{"disabled":true},hidden:false,},
                        {name:'ID_DanToc',index:'ID_DanToc', width:"100%", editable:false,align:'center',hidden:false,formatter:"select",editrules: {required:true},edittype:"select",editoptions: { value: dantoc}},
                        {name:'ID_QuocTich',index:'ID_QuocTich', width:"100%", editable:false,align:'center',hidden:false,formatter:"select",editrules: {required:true},edittype:"select",editoptions: { value: quoctich}},
                        {name:'CMND',index:'CMND', width:"100", editable:false,align:'left',hidden:false,editrules: {required:true},edittype:"text",formoptions:{}},
                        {name:'HoChieu',index:'HoChieu', width:"100", editable:false,align:'left',hidden:false,editrules: {required:true},edittype:"text",formoptions:{}},
                        {name:'ID_ChucVu',index:'ID_ChucVu', width:"100%", editable:false,align:'center',hidden:false,formatter:"select",editrules: {required:true},edittype:"select",editoptions: { value: chucvu}},
                        {name:'ID_ChucDanh',index:'ID_ChucDanh', width:"100%", editable:false,align:'center',hidden:false,formatter:"select",editrules: {required:true},edittype:"select",editoptions: { value: chucdanh}},
                        {name:'DiaChi',index:'DiaChi', width:"100", editable:false,align:'left',hidden:false,editrules: {required:true},edittype:"text",formoptions:{}},
                        {name:'Mobile',index:'Mobile', width:"100", editable:false,align:'left',hidden:false,editrules: {required:true},edittype:"text",formoptions:{}},
                        {name:'HomePhone',index:'HomePhone', width:"100", editable:false,align:'left',hidden:false,editrules: {required:true},edittype:"text",formoptions:{}},
                        {name:'Email',index:'Email', width:"100", editable:false,align:'left',hidden:false,editrules: {required:true},edittype:"text",formoptions:{}},
			{name:'YahooID',index:'YahooID', width:"100", editable:false,align:'left',hidden:false,editrules: {required:true},edittype:"text",formoptions:{}},
                        {name:'SkypeID',index:'SkypeID', width:"100", editable:false,align:'left',hidden:false,editrules: {required:true},edittype:"text",formoptions:{}},
                        {name:'NgaySinh',index:'NgaySinh',search:true, width:"100%", editable:false,align:'center',hidden:false},
                        {name:'NgayVaoLam',index:'NgayVaoLam', width:"100%", editable:false,align:'center'},
                        {name:'ID_TrinhDo',index:'ID_TrinhDo', width:"100%", editable:false,align:'center',hidden:false,formatter:"select",editrules: {required:true},edittype:"select",editoptions: { value: trinhdo}},
                        {name:'ID_LoaiTinhLuong',index:'ID_LoaiTinhLuong', width:"100%", editable:false,align:'center',hidden:false,formatter:"select",editrules: {required:true},edittype:"select",editoptions: { value: loaitinhluong}},
                        {name:'ChamCongBangMay',index:'ChamCongBangMay',search:false, width:"120", editable:false,align:'center',edittype:"checkbox",editoptions: {value:"1:0"},formatter:"checkbox",formatoptions:{"disabled":true},hidden:false,},
                        {name:'TaiKhoanNH',index:'TaiKhoanNH', width:"120", editable:false,align:'left',hidden:false,editrules: {required:true},edittype:"text",formoptions:{}},
                        {name:'ID_NganHang',index:'ID_NganHang', width:"100%", editable:false,align:'center',hidden:false,formatter:"select",editrules: {required:true},edittype:"select",editoptions: { value: nganhang}},
                        {name:'MaSoThueCaNhan',index:'MaSoThueCaNhan', width:"120", editable:false,align:'left',hidden:false,editrules: {required:true},edittype:"text",formoptions:{}},
                        {name:'SoBaoHiem',index:'SoBaoHiem', width:"100", editable:false,align:'left',hidden:false,editrules: {required:true},edittype:"text",formoptions:{}},
                        {name:'GhiChu',index:'GhiChu', width:"100", editable:false,align:'left',hidden:false,editrules: {required:true},edittype:"text",formoptions:{}},
                        {name:'DaNghiViec',index:'DaNghiViec',search:false, width:"100", editable:false,align:'center',edittype:"checkbox",editoptions: {value:"1:0"},formatter:"checkbox",formatoptions:{"disabled":true},hidden:false,},	
                        {name:'HinhChuKy',index:'HinhChuKy', width:"100", editable:false,align:'left',hidden:false,editrules: {required:true},edittype:"text",formoptions:{}},
                        {name:'IsDoctor',index:'IsDoctor',search:false, width:"100", editable:false,align:'center',edittype:"checkbox",editoptions: {value:"1:0"},formatter:"checkbox",formatoptions:{"disabled":true},hidden:false,},	
                        {name:'IsCTVBenNgoai',index:'IsCTVBenNgoai',search:false, width:"120", editable:false,align:'center',edittype:"checkbox",editoptions: {value:"1:0"},formatter:"checkbox",formatoptions:{"disabled":true},hidden:false,},	
                        {name:'AllowLogin',index:'AllowLogin',search:false, width:"120", editable:false,align:'center',edittype:"checkbox",editoptions: {value:"1:0"},formatter:"checkbox",formatoptions:{"disabled":true},hidden:false,},	
                        {name:'NickName',index:'NickName', width:"100", editable:false,align:'left',hidden:false,editrules: {required:true},edittype:"text",formoptions:{}},
                        {name:'UserName',index:'UserName', width:"100", editable:false,align:'left',hidden:true,editrules: {required:true},edittype:"text",formoptions:{}},
                        {name:'PassWord',index:'PassWord', width:"100", editable:false,align:'left',hidden:true,editrules: {required:true},edittype:"text",formoptions:{}},
			{name:'Disable',index:'Disable',search:false, width:"100", editable:false,align:'center',edittype:"checkbox",editoptions: {value:"1:0"},formatter:"checkbox",formatoptions:{"disabled":true},hidden:false,},
      
				   	 	 
		],
		loadonce: true,
		scroll:1,		 
		modal:true,	 	 
		rowNum: 1000,
		rowList:[],
   	    height:320,
		pager: '#prowed3',
		sortname: 'ID_NhanVien',
		viewrecords: true,	
		ignoreCase:true,
		shrinkToFit:false,
		
        grouping:true,
        groupingView : {
                        groupField : ['ID_PhongBan'],
                        groupColumnShow : [false],
                        groupCollapse : true,
                       
                },     
		serializeRowData: function (postdata) { 		 	
			
		},
		onSelectRow: function(id){		  
                    
		},
		ondblClickRow: function (rowId, rowIndex, columnIndex) {
			$(".ui-icon-pencil").trigger('click'); 
 		},
		loadComplete: function(data) {	
			//$("#rowed3").jqGrid('setGridParam',{loadonce: true}).trigger("reloadGrid");
			if(typeof(window.phongban1)!="undefined"){	
			//alert(phongban1);
				tam='rowed3ghead_0_'+window.phongban1;
				jQuery('#rowed3').jqGrid('groupingToggle',tam);	
				jQuery('#rowed3').jqGrid("setSelection",window.id_return, true);	
				jQuery('#rowed3'+window.id_return).focus();
				jQuery('#rowed3'+window.id_return).click();
				
				 
			}				 
		},
	  
		caption: "Danh mục Nhân viên ------ <label for='checkbox'style='width:110px' >Thu gọn</label><input type='checkbox' id='checkp' checked>"
	});
      $("#rowed3").jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});   
	   $("#rowed3").jqGrid('navGrid',"#prowed3",{add: permission["add"],addtext: 'Thêm mới (F6)',edittext: 'Sửa (F7)',
    deltext: 'Xóa (F8)',refreshtext: 'Tải lại (F10)', edit: permission["edit"], del: permission["delete"], search: false,closeAfterEdit: true,clearAfterAdd :true,navkeys : [ true, 38, 40 ],closeOnEscape : true,
        addfunc: function(){
            $('#dialog-form').dialog('open');
            //$("#rowed4").empty();
            window.oper='add';
            $("input:text").css("background-color","white");
            $("input:text").val("");
            $("textarea").val("");
            $("#dantoc").val(1);
			$("#hinhnhanvien_nv").attr("src","");
			$("#chuky_nv").attr("src","");
            $("#quoctich").val(138);
            $("#phongban").val(0);
            $("#chucdanh").val(0);
            $("#chucvu").val(0);
            $("#loaitinhluong").val(0);
            $("#trinhdo").val(0);
            $("#nam").prop('checked', true);
            $("#tennganhang").val(0);
            $("#chamcongbangmay").prop('checked', false);
            $("#nghiviec").prop('checked', false);
            $("#labacsi").prop('checked', false);
            $("#congtacvien").prop('checked', false);
            $("#allowlogin").prop('checked', false);
            $("#disable").prop('checked', false);
			 $("#chuky_nv").css("width","125px");
				 $("#chuky_nv").css("height","145px");
				 $("#hinhnhanvien_nv").css("width","125px");
				 $("#hinhnhanvien_nv").css("height","145px");
				  
//            var selectedMinValue = Number(Math.max($('#MaNV').val()));
//            alert(selectedMinValue);
           
        },
        editfunc: function(id){
            $('#dialog-form').dialog('open');
            if(<?=$_SESSION['user']['id_user']?>=="178"){
              
              $("#manv").attr("disabled", false);
            }
            else{
               $("#manv").attr("disabled", "disabled");
            }
           
            window.oper='edit';
            reload_mabn=$("#manv").val();
            window.id_edit=id;
            $('#rowed4').jqGrid('setGridParam', {url: 'resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_chamcong&id='+id,datatype:'json'}) .trigger('reloadGrid');
            $("input:text").css("background-color","white");
            var manv = $("#rowed3").jqGrid('getCell', id, 'MaNV');
            var honv = $("#rowed3").jqGrid('getCell', id, 'HoLotNhanVien');
            var tennv = $("#rowed3").jqGrid('getCell', id, 'TenNhanVien');
            var hinhnv = $("#rowed3").jqGrid('getCell', id, 'HinhNhanVien');
			window.hinh_nhanvien=$("#rowed3").jqGrid('getCell', id, 'HinhNhanVien');
            window.search_string2=$("#rowed3").jqGrid('getCell', id, 'HinhNhanVien');
            window.idnv=$("#rowed3").jqGrid('getCell', id, 'ID_NhanVien');
            var gioitinh = $("#rowed3").jqGrid('getCell', id, 'GioiTinh');
            var dantoc = $("#rowed3").jqGrid('getCell', id, 'ID_DanToc');
            var quoctich = $("#rowed3").jqGrid('getCell', id, 'ID_QuocTich');
            var cmnd = $("#rowed3").jqGrid('getCell', id, 'CMND');
            var hochieu = $("#rowed3").jqGrid('getCell', id, 'HoChieu');
            var chucvu = $("#rowed3").jqGrid('getCell', id, 'ID_ChucVu');
            var chucdanh = $("#rowed3").jqGrid('getCell', id, 'ID_ChucDanh');
            var diachi = $("#rowed3").jqGrid('getCell', id, 'DiaChi');
            var mobile = $("#rowed3").jqGrid('getCell', id, 'Mobile');
            var homephone = $("#rowed3").jqGrid('getCell', id, 'HomePhone');
            var email = $("#rowed3").jqGrid('getCell', id, 'Email');
            var nickyahoo = $("#rowed3").jqGrid('getCell', id, 'YahooID');
            var nickskype = $("#rowed3").jqGrid('getCell', id, 'SkypeID');
            var ngaysinh = $("#rowed3").jqGrid('getCell', id, 'NgaySinh');
            var ngayvaolam = $("#rowed3").jqGrid('getCell', id, 'NgayVaoLam');
            var trinhdo = $("#rowed3").jqGrid('getCell', id, 'ID_TrinhDo');
            var loaitinhluong = $("#rowed3").jqGrid('getCell', id, 'ID_LoaiTinhLuong');
            var phongban = $("#rowed3").jqGrid('getCell', id, 'ID_PhongBan');
            var chamcongbangmay = $("#rowed3").jqGrid('getCell', id, 'ChamCongBangMay');
            var sotaikhoan = $("#rowed3").jqGrid('getCell', id, 'TaiKhoanNH');
            var nganhang = $("#rowed3").jqGrid('getCell', id, 'ID_NganHang');
            var masothue = $("#rowed3").jqGrid('getCell', id, 'MaSoThueCaNhan');
            var sobaohiem = $("#rowed3").jqGrid('getCell', id, 'SoBaoHiem');
            var ghichu = $("#rowed3").jqGrid('getCell', id, 'GhiChu');
            var nghiviec = $("#rowed3").jqGrid('getCell', id, 'DaNghiViec');
            var chuki = $("#rowed3").jqGrid('getCell', id, 'HinhChuKy');
			window.chuky_nhanvien= $("#rowed3").jqGrid('getCell', id, 'HinhChuKy');
            window.search_string= $("#rowed3").jqGrid('getCell', id, 'HinhChuKy');
            var labs = $("#rowed3").jqGrid('getCell', id, 'IsDoctor');
            var lactv = $("#rowed3").jqGrid('getCell', id, 'IsCTVBenNgoai');
            var allowlogin = $("#rowed3").jqGrid('getCell', id, 'AllowLogin');
            var nickname = $("#rowed3").jqGrid('getCell', id, 'NickName');
            var username = $("#rowed3").jqGrid('getCell', id, 'UserName');
            var password = $("#rowed3").jqGrid('getCell', id, 'PassWord');
            var disable = $("#rowed3").jqGrid('getCell', id, 'Disable');
			$("#chuky_nv").attr("src","<?=$_SESSION["config_system"]["URL"]?>file_manager/php/connector.php?answer=42&tenthumuc=<?=$_SESSION["config_system"]["Signs"]?>&cmd=file&target=f1_" + encode64(chuki));
			
			$("#hinhnhanvien_nv").attr("src","<?=$_SESSION["config_system"]["URL"]?>file_manager/php/connector.php?answer=42&tenthumuc=<?=$_SESSION["config_system"]["Staff"]?>&cmd=file&target=f1_" + encode64(hinhnv));
			
			var _dimension;
			 _dimension=$.ajax({url: 'resource.php?module=web_services&function=get_file_size&action=index&id_form=111&tenthumuc=<?=$_SESSION["config_system"]["Signs"]?>'+'&hash_name=f1_' + encode64(chuki), async: false, success: function(data, result) { 			           		 
             }}).responseText;			 
			   _dimension=_dimension.split(";");
				 scale=_dimension[1]/_dimension[0];								 
			 if(!isNaN(scale)){				  		
				 $("#chuky_nv").css("width","230px");
				 $("#chuky_nv").css("height",scale*230+"px");
				 $("#hinhnhanvien_nv").css("width","130px");
				 $("#hinhnhanvien_nv").css("height",scale*230+"px");
				 
			 }else{  
			  
				 $("#chuky_nv").css("width","125px");
				 $("#chuky_nv").css("height","145px");
				 $("#hinhnhanvien_nv").css("width","125px");
				 $("#hinhnhanvien_nv").css("height","145px");
				  
			 }
			 	 
			 
			 
       		 	
            $("#manv").val(manv);
            $("#ho").val(honv);
            $("#ten").val(tennv);
            $("#hinhnhanvien").val(hinhnv);
            $("#dantoc").val(dantoc);
            $("#quoctich").val(quoctich);
            $("#cmnd").val(cmnd);
            $("#hochieu").val(hochieu);
            $("#chucvu").val(chucvu);
            $("#chucdanh").val(chucdanh);
            $("#diachi").val(diachi);
            $("#mobile").val(mobile);
            $("#dienthoainha").val(homephone);
            $("#email").val(email);
            $("#yahoo").val(nickyahoo);
            $("#skype").val(nickskype);
            $("#ngaysinh").val(ngaysinh);
            $("#ngayvaolam").val(ngayvaolam);
            $("#trinhdo").val(trinhdo);
            $("#loaitinhluong").val(loaitinhluong);
            $("#phongban").val(phongban);
            $("#sotaikhoan").val(sotaikhoan);
            $("#tennganhang").val(nganhang);
            $("#masothue").val(masothue);
            $("#sobaohiem").val(sobaohiem);
            $("#ghichu").val(ghichu);
            $("#chuki").val(chuki);
            $("#tenthuonggoi").val(nickname);
            $("#username").val(username);
            $("#password").val(password);
            if(gioitinh=="1"){
                $("#nam").prop('checked',true);
                 $("#nu").prop('checked',false);
            }else{
                 $("#nam").prop('checked',false);
                  $("#nu").prop('checked',true);
            }
           if(nghiviec=="1"){
                $("#nghiviec").prop('checked',true);
            }else{
                 $("#nghiviec").prop('checked',false);
            }
            if(labs=="1"){
                $("#labacsi").prop('checked',true);
            }else{
                 $("#labacsi").prop('checked',false);
            }
            if(chamcongbangmay=="1"){
                $("#chamcongbangmay").prop('checked',true);
            }else{
                 $("#chamcongbangmay").prop('checked',false);
            }
            if(lactv=="1"){
                $("#congtacvien").prop('checked',true);
            }else{
                 $("#congtacvien").prop('checked',false);
            }
            if(allowlogin=="1"){
                $("#allowlogin").prop('checked',true);
            }else{
                 $("#allowlogin").prop('checked',false);
            }
            if(disable=="1"){
                $("#disable").prop('checked',true);
            }else{
                 $("#disable").prop('checked',false);
            }
           // $("#ngaysinh").dateEntry({dateFormat: $.cookie("ngayDateEntry")});
        }
        
}, //options						 
		{},{}	,						  
		{reloadAfterSubmit:false,url:'resource.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=del',	navkeys : [ true, 38, 40 ],closeOnEscape : true,	
				 beforeShowForm : function(formid) {canhgiua_del(formid);},
                                afterSubmit : function(response, postdata) { 				
							if(response.responseText==0){
								var success=false;
								var new_id="Xóa liệu không thành công";													
							}else{
								tooltip_message("Xóa dữ liệu thành công");
								var success=true;	
								var new_id="Xóa dữ liệu thành công";
																
							};						
							return [success,new_id] ;
				}		
		} // del options
							 
							  
	);	 					  
	$("#rowed3").setGridWidth($(window).width()-20);
	 $("#rowed3").setGridHeight($(window).height()-$("#form_danh_muc_phong_ban").height()-150);
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

function check_n(){
            window.kiemtra=true;
            phancach="";
            dataToSend ='{';
            key1='';
            i=0;
          //  $('#rowed3').setGridParam({postData: null});
            $('#datatosend').find(':input[type=text],select,textarea,input[type=hidden],input[type=checkbox]:checked,input[type=radio]:checked').each(function(){ 
                if(i>0){
                phancach=","; 
                        }
              dataToSend += phancach + '"'+ this.name + '":"' + this.value +'"' ;
              i++;
                });
                var myData = $('#rowed4').jqGrid('getRowData');
				
             myData= JSON.stringify(myData);
          // alert(chuky_nhanvien);
		  dataToSend += "," + '"hinhnhanvien":"' + hinh_nhanvien + '"';
         dataToSend += "," + '"chukynv":"' + chuky_nhanvien + '"';
             dataToSend +=',"cc":'+myData+'}'; 
            dataToSend = jQuery.parseJSON(dataToSend);
           alertObject(dataToSend);
           
             var check_null = new Array();
                check_null["manv"]=$.trim(dataToSend["manv"]);
                check_null["ho"]=$.trim(dataToSend["ho"]);
                check_null["ten"]=$.trim(dataToSend["ten"]);
                check_null["ngaysinh"]=$.trim(dataToSend["ngaysinh"]);
                check_null["ngayvaolam"]=$.trim(dataToSend["ngayvaolam"]);
                check_null["tenthuonggoi"]=$.trim(dataToSend["tenthuonggoi"]);
                 for(var key in check_null){
                     
                    if(check_null[key]==""){
                      $("#"+key).css("background-color","#F4FA58");
                      window.kiemtra=false;
                    }
                    else{$("#"+key).css("background-color","white");
                    }
                     
                 }alertObject(dataToSend);
};
function save_button(){
   
    if(kiemtra){
                  $.post('resource.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=add',dataToSend)
                  .done(function( response) {
                                  temp = response.split(";");
                                  //alert(temp);
					if(temp[0]==1){
						var success=false;
						var new_id="<?php get_text1("luu_khongthanhcong") ?>";
                                               
					}else{	
					window.id_return=$.trim(temp[1]);
                                                window.phongban1 = $("#phongban")[0].selectedIndex ;    
                                             $('#rowed3').jqGrid('setGridParam', {datatype:'json'}).trigger('reloadGrid');
                                                
                                                                                            
						tooltip_message("<?php get_text1("luu_thanhcong") ?>");		
                                                 $("#dialog-form").dialog("close");
                                                 //alert(window.id_return);
					};
                        });
                }
             // alert(kiemtra);  
}
function edit_button(){
    if(kiemtra){
                  $.post('resource.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=edit&id='+window.id_edit,dataToSend)
                  .done(function( response) {
                                  temp = response.split(";");	
					if(temp[0]==1){
						var success=false;
						var new_id="<?php get_text1("sua_khongthanhcong") ?>";
                                               
					}else{	
											window.id_return= window.id_edit;
                                            window.phongban1 = $("#phongban")[0].selectedIndex;   
											//alert(phongban1);
                                          $('#rowed3').jqGrid('setGridParam', {datatype:'json'}).trigger('reloadGrid');                                             
                                                                                           
                                                 tooltip_message("<?php get_text1("sua_thanhcong") ?>");
                                                 
                                                 $("#dialog-form").dialog("close");
                                                
					};
                                     
                        });
                }
}
function create_grid1(){
var mydata=[];
 myDelOptions = {
        // because I use "local" data I don't want to send the changes
        // to the server so I use "processing:true" setting and delete
        // the row manually in onclickSubmit
        onclickSubmit: function(options, rowid) {
            var grid_id = $.jgrid.jqID(jQuery("#rowed4")[0].id),
                grid_p = jQuery("#rowed4")[0].p,
                newPage = grid_p.page;

            // reset the value of processing option which could be modified
            options.processing = true;

            // delete the row
            jQuery("#rowed4").delRowData(rowid);
            $.jgrid.hideModal("#delmod"+grid_id,
                              {gb:"#gbox_"+grid_id,
                              jqm:options.jqModal,onClose:options.onClose});

            if (grid_p.lastpage > 1) {// on the multipage grid reload the grid
                if (grid_p.reccount === 0 && newPage === grid_p.lastpage) {
                    // if after deliting there are no rows on the current page
                    // which is the last page of the grid
                    newPage--; // go to the previous page
                }
                // reload grid to make the row from the next page visable.
                jQuery("#rowed4").trigger("reloadGrid", [{page:newPage}]);
            }

            return true;
        },
        processing:true
    };

jQuery("#rowed4").jqGrid({

   	data:mydata,
	datatype: "local",
   	colNames:[ 'MaNv','Mã chấm công','Tên ngón','ID'],
   	colModel:[
                {name:'MaNv',index:'MaNv',search:false, editable:false,align:'left',hidden:true},
   		   {name:'MaCc',index:'MaCc',editable:true,editrules: {required:true}, width:10, align:"center",edittype:"text",hidden:false},
                {name:'TenNgon',index:'TenNgon', width:10,align:'center',editable:true,formatter:"select",edittype:"select",hidden:false},
                {name:'ID_NhanVien',index:'ID_NhanVien',search:false, editable:false,align:'left',hidden:true}, 
                
   	],
        loadonce: true,
        scroll: 1,	
   	rowNum:1000,
        height:200,
        width:650,
   	rowList:[],
   	pager: '#prowed4',
   	sortname: 'ID_NhanVien',
        viewrecords: true,
        sortorder: "asc",
//	multiselect: true,
        ignoreCase:true,
//	shrinkToFit:true,
        pgbuttons: false, // disable page control like next, back button
        pgtext: null,
	caption:"Thêm chấm công"
        });
    jQuery("#rowed4").jqGrid('navGrid','#prowed4',{add: false,del:true,edit:false,search:false}, {}, {},myDelOptions);
    $("#rowed4").jqGrid('inlineNav', '#prowed4',  {add: true, addtext: '', edittext: '', edit: true, closeOnEscape: true,
        
          
       	 });
        /*$("#rowed4").setGridWidth($(window).width() - 450);
        $("#rowed4").setGridHeight($(window).height()  - 400);*/
        
		$("#rowed4").jqGrid('bindKeys', {"onEnter":function( rowid ) {				
					$("#rowed4_iledit .ui-icon-pencil").click();				
			} } );
}
function shortcut_key(){
	jwerty.key('f6', false);jwerty.key('f7', false);jwerty.key('f8', false);jwerty.key('f9', false);jwerty.key('f10', false);
		$('body').bind('keydown', function (e) {		
			if (jwerty.is('f6',e)) {
				 $(".ui-icon-plus").trigger("click");				 
			}
		});
		$('body').bind('keydown', function (e) {		
			if (jwerty.is('f7',e)) {
				 $(".ui-icon-pencil").trigger("click");				 
			}
		});
		$('body').bind('keydown', function (e) {		
			if (jwerty.is('f8',e)) {
				 $(".ui-icon-trash").trigger("click");				 
			}
		});
		$('body').bind('keydown', function (e) {		 
			if (jwerty.is('f9',e)) {
				 $(".ui-icon-search").trigger("click");				 
			}
		});
		$('body').bind('keydown', function (e) {		 
			if (jwerty.is('f10',e)) {
				 $(".ui-icon-refresh").trigger("click");				 
			}
		});
}

function load_all(){
    window.phongban = $.ajax({url: 'resource.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=2&tables=DM_PhongBan&id=ID_PhongBan&name=TenPhongBan', async: false, success: function(data, result) {if (!result) alert('Không load được danh mục phòng ban');}}).responseText;
    window.dantoc = $.ajax({url: 'resource.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=2&tables=DM_DanToc&id=ID_DanToc&name=TenDanToc', async: false, success: function(data, result) {if (!result) alert('Không load được danh mục phòng ban');}}).responseText;
    window.quoctich = $.ajax({url: 'resource.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=2&tables=DM_QuocTich&id=ID_QuocTich&name=TenQuocTich', async: false, success: function(data, result) {if (!result) alert('Không load được danh mục phòng ban');}}).responseText;
    window.chucvu = $.ajax({url: 'resource.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=2&tables=DM_ChucVu&id=ID_ChucVu&name=TenChucVu', async: false, success: function(data, result) {if (!result) alert('Không load được danh mục phòng ban');}}).responseText;
    window.chucdanh = $.ajax({url: 'resource.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=2&tables=DM_ChucDanh&id=ID_ChucDanh&name=TenChucDanh', async: false, success: function(data, result) {if (!result) alert('Không load được danh mục phòng ban');}}).responseText;
    window.trinhdo = $.ajax({url: 'resource.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=2&tables=DM_TrinhDo&id=ID_TrinhDo&name=TenTrinhDo', async: false, success: function(data, result) {if (!result) alert('Không load được danh mục phòng ban');}}).responseText;
    window.loaitinhluong = $.ajax({url: 'resource.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=2&tables=DM_LoaiTinhLuong&id=ID_LoaiTinhLuong&name=TenLoaiTinhLuong', async: false, success: function(data, result) {if (!result) alert('Không load được danh mục phòng ban');}}).responseText;
    window.nganhang = $.ajax({url: 'resource.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=2&tables=DM_NganHang&id=ID_NganHang&name=TenNganHang', async: false, success: function(data, result) {if (!result) alert('Không load được danh mục phòng ban');}}).responseText;
    //window.tenngon = $.ajax({url: 'resource.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=0&tables=DM_NhanVien&id=ID_NhanVien&name=TenNhanVien', async: false, success: function(data, result) {if (!result) alert('Không load được danh mục phòng ban');}}).responseText;
    create_select("#phongban",phongban);
    create_select("#dantoc",dantoc);
    create_select("#quoctich",quoctich);
    create_select("#chucvu",chucvu);
    create_select("#chucdanh",chucdanh);
    create_select("#trinhdo",trinhdo);
    create_select("#loaitinhluong",loaitinhluong);
    create_select("#tennganhang",nganhang);
     //alert($('#tenngon2 :selected').text());
    // window.test=$("TP");
    var ngontay = { 'CP': 'CP', 'TP': 'TP', 'GP': 'GP', 'AP': 'AP', 'UP': 'UP','CT':'CT','TT':'TT','GT':'GT','AT':'AT','UT':'UT' };
    
    $("#rowed4").setColProp('TenNgon', { editoptions: {value: ngontay }});
    
}
function init_data(){
    $("#manv").focus();	 
	   jwerty.key('tab', false);
	   jwerty.key('shift+tab', false);
           
	   $('#datatosend input[type=text],#datatosend textarea,#datatosend select,#datatosend button,#datatosend input[type=checkbox],#datatosend input[type=radio]').bind("keydown", function(e) {		   		 
             if (jwerty.is("enter",e)||jwerty.is("tab",e)) {            
                /* FOCUS ELEMENT */
                var inputs = $(this).parents("#datatosend").eq(0).find(":input[type=text],button,textarea,select,:input[type=checkbox],:input[type=radio]");
                var idx = inputs.index(this);
                if (idx == inputs.length - 1) {	
                    
					if(inputs[0].nodeName!="SELECT"){;
                                        inputs[0].select();
                        
					}else{
						inputs[0].focus();
					}
                } 
                else {		
					 //$(".ui-datepicker").hide();  			 
                    
					inputs[idx+1].focus();
					
					if(inputs[idx+1].nodeName!="SELECT"){
                                            inputs[idx+1].select();
                                          
					}
                                        
                                           
                }
				if(inputs[idx].lang=="end"){					 
					if($("#rowed4").getDataIDs().length>0){	
						$("#rowed4").jqGrid("setSelection",$("#rowed4").getDataIDs()[0], true);						 
						$("#prowed4 .ui-icon-pencil").click();           
					}else{
						$("#prowed4 .ui-icon-plus").click();
                                               //$("#rowed4_MaCc").select();
						//action="edit";
					}
				}
                return false;
             }
             else if(jwerty.is("shift+tab",e)){
				var inputs = $(this).parents("#datatosend").eq(0).find(":input[type=text],:input[type=checkbox],textarea,select,checkbox");
                var idx = inputs.index(this);
				 if (idx >0) {					 
                    inputs[idx -1].focus(); //  handles submit buttons				 
                } 
	}
        });
}

$("#chuky_nv").click(function() {
	//$("#upload_input").click();
		 /* elem=1 + Math.floor(Math.random() * 1000000000); 
  		  dialog_add_dm("Thêm mới chữ kí",90,90,elem,'file_manager/elfinder_ehealth.php?tenthumuc=<?=$_SESSION["config_system"]["Signs"]?>');
                  var dimension;
		dimension=$.ajax({url: 'resource.php?module=web_services&function=get_file_size&action=index&id_form=111&tenthumuc=<?=$_SESSION["config_system"]["Signs"]?>&hash_name='+$(this).attr("alt"), async: false, success: function(data, result) {}}).responseText;
               // alert(dimension);        */
               $.getJSON( "resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_max_idnv", 
             function( data ) {
                $.each( data, function( key, val ) { 
                    if(window.oper=="add"){
                        window.search_string=val[0]["id"];
                    }
                    else{
                        window.search_string=window.idnv;
                    }
                    
                 dialog_add_dm('Chỉnh sửa hình ảnh',95,95,6754353898787675,'resource.php?module=images_control&view=images_edit&id_form=49&tenthumuc=Signs&search_string='+search_string,refresh_images2);
                })       

            })
               
             
               
});
$("#hinhnhanvien_nv").click(function() {
	//$("#upload_input2").click();
     $.getJSON( "resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_max_idnv", 
             function( data ) {
                $.each( data, function( key, val ) { 
                    if(window.oper=="add"){
                        window.search_string2=val[0]["id"];
                    }
                    else{
                        window.search_string2=window.idnv;
                    }
                    
                  dialog_add_dm('Chỉnh sửa hình ảnh',95,95,6754353898787675,'resource.php?module=images_control&view=images_edit&id_form=49&tenthumuc=Staff&search_string='+search_string2,refresh_images);
                })       

            })
   
	
});
function add_icon_button_dialog(_text,_icon){
        var btndialog = $('.ui-dialog-buttonpane').find('button:contains("'+_text+'")');
        btndialog.prepend('<span style="float:left; margin-top: 3px;" class="ui-icon ui-icon-'+_icon+'"></span>');
        btndialog.width(btndialog.width() + 75);
}
function imagesSelected(myFiles,callback) {
		 
		  var i,f;
		 // alert(myFiles.length) 
		 
		  for ( i = 0, f; f = myFiles[i]; i++) {
			var imageReader = new FileReader();
			imageReader.onload = (function(aFile) {
			  return function(e) {		 
			   //var span = document.createElement('span');
			   image_data=e.target.result;			  
			  // $("#image_submit").append("<input type='hidden'  id='anh'  name='image_data[]'>");
			   $('#anh').attr("value",""); 
			   $('#anh').attr("value",image_data);     
			   $("#default_name").val(aFile.name); 
			   $("#chuky_nv").attr("src",image_data);	
			   window.chuky_nhanvien=aFile.name;  
			   check_file_type('application/octet-stream;image/jpg;image/jpeg',aFile.type);				   		   	    
			  };
			})(f);
			imageReader.readAsDataURL(f);
			//console.log((i)+"=="+myFiles.length)	 
			/*if((i+1)==myFiles.length){
				
			}*/
		  }			 
		 callback();
}
function imagesSelected2(myFiles,callback) {
		 
		  var i,f;
		 // alert(myFiles.length) 
		 
		  for ( i = 0, f; f = myFiles[i]; i++) {
			var imageReader = new FileReader();
			imageReader.onload = (function(aFile) {
			  return function(e) {		 
			   //var span = document.createElement('span');
			   image_data=e.target.result;			  
			  // $("#image_submit").append("<input type='hidden'  id='anh'  name='image_data[]'>");
			   $('#anh').attr("value",""); 
			   $('#anh').attr("value",image_data);     
			   $("#default_name").val(aFile.name); 
			   $("#hinhnhanvien_nv").attr("src",image_data);	
			   window.hinh_nhanvien=aFile.name;  
			  // check_file_type('application/octet-stream;image/jpg;image/jpeg',aFile.type);				   		   	    
			  };
			})(f);
			imageReader.readAsDataURL(f);
			//console.log((i)+"=="+myFiles.length)	 
			/*if((i+1)==myFiles.length){
				
			}*/
		  }			 
		 callback();
}
function submit_file(){
	  t=setTimeout(function(){     
		   		if(window.file_type==false){			 
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
		  		}
		    },2000);
}
function refresh_images(){
        
        $.getJSON( 'file_manager/php/connector.php?answer=42&tenthumuc=Staff&cmd=search&q='+search_string2+'&_=1387364774212', 
        function( data ) {  
        if(data["files"].length==0){         
            $("#total_images").val(data["files"].length); 
            //alert("1");
        }else{       
            //total_image=data["files"][data["files"].length-1]["name"].split("_");
            //total_image1=total_image[3].split(".");
            //$("#total_images").val(total_image1[0]);
            //alert(data["files"][data["files"].length-1]["name"]);
            total_image=data["files"][data["files"].length-1]["name"];
            $("#hinhnhanvien_nv").attr("src","<?=$_SESSION["config_system"]["URL"]?>file_manager/php/connector.php?answer=42&tenthumuc=Staff&cmd=file&target=f1_" + encode64(total_image));
            window.hinh_nhanvien=total_image;
        }        
    });  
    }
    function refresh_images2(){

        $.getJSON( 'file_manager/php/connector.php?answer=42&tenthumuc=Signs&cmd=search&q='+search_string+'&_=1387364774212', 
        function( data ) {  
        if(data["files"].length==0){         
            $("#total_images").val(data["files"].length); 
            //alert("1");
        }else{       
            //total_image=data["files"][data["files"].length-1]["name"].split("_");
            //total_image1=total_image[3].split(".");
            //$("#total_images").val(total_image1[0]);
            //alert(data["files"][data["files"].length-1]["name"]);
            total_image=data["files"][data["files"].length-1]["name"];
            $("#chuky_nv").attr("src","<?=$_SESSION["config_system"]["URL"]?>file_manager/php/connector.php?answer=42&tenthumuc=Signs&cmd=file&target=f1_" + encode64(total_image));
            window.chuky_nhanvien=total_image;
        }        
    });  
    }
</script>