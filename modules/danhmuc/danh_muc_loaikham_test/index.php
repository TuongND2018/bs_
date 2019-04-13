<!--<link rel="stylesheet" href="../../../css/form_css.css" type="text/css" media="screen"/>-->
<style type="text/css">
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
    .custom-combobox{
        margin-top: 18px!important;
    }
#donthuoc{
	border:none;
}
</style>
<body> 
	<div id="grid_phong_ban">      	 
          <table id="rowed3" ></table>
            <div id="prowed3"></div>             
    </div>
     <div id="dialog-form" title="Thêm bản ghi" style="display:none">
     	<div id="container">
     		<div class="form_row" style="vertical-align:top"  >
             
		           <div style="padding-top:10px ">
		               <label for="TenLoaiKham" style="width:140px; color:red;text-align:right ">Tên Loại khám</label>
		               <input id="TenLoaiKham" name="TenLoaiKham"  type="text" style="width:170px;margin-left:5px">
		           </div>
		             
		           <div style="padding-top:5px "> <label for="ID_NhomCLS" style="width:140px;text-align:right ">Nhóm loại khám</label>
		           		<select id="ID_NhomCLS" name="ID_NhomCLS" type="text" style="width:178px;margin-left:5px; padding-top: 0px;"></select>
		           </div>
		           <div style="padding-top:5px "> <label for="MaVietTat" style="width:140px;text-align:right ">Mã viết tắt</label>
		              <input type=text id="MaVietTat" name="MaVietTat" style="width: 170px!important;margin-left:5px" >
		           </div>
		           <div style="padding-top:5px "> <label for="MaVietTat_BN"  style="width:140px;text-align:right ">Mã viết tắt BN</label>
		          		 <input id="MaVietTat_BN" value="" name="MaVietTat_BN"  type="text" style="width:170px;margin-left:5px">
		           </div>
		           <div style="padding-top:5px "> <label for="GiaBaoChoBN" style="width:140px;text-align:right ">Giá báo BN</label>
		                  <input id="GiaBaoChoBN" value="" name="GiaBaoChoBN"  type="text" style="width:170px;margin-left:5px">
		           </div>
		           <div style="padding-top:10px ">
		               <label for="GiaThueNgoaiThucHien" style="width:140px;text-align:right ">Giá thuê ngoài</label>
		               <input id="GiaThueNgoaiThucHien" name="GiaThueNgoaiThucHien"  type="text" style="width:170px;margin-left:5px">
		           </div>
		           <div style="padding-top:10px ">
		               <label for="ThoiGianTrungBinhThucHien" style="width:140px;text-align:right ">Số phút thực hiện</label>
		               <input id="ThoiGianTrungBinhThucHien" name="ThoiGianTrungBinhThucHien"  type="text" style="width:170px;margin-left:5px">
		           </div>
		           <div style="padding-top:10px ">
		               <label for="ThoiGianCoKetQua" style="width:140px;text-align:right ">Thời gian có kết quả</label>
		               <input id="ThoiGianCoKetQua" name="ThoiGianCoKetQua"  type="text" style="width:170px;margin-left:5px">
		           </div>
		           <div style="padding-top:10px ">
		               <label for="STT" style="width:140px;text-align:right ">STT</label>
		               <input id="STT" name="STT"  type="text" style="width:170px;margin-left:5px">
		           </div>
		           <div style="padding-top:10px ">
		               <label for="PathToTemplateFile" style="width:140px;text-align:right ">Đường dẫn tập tin mẫu</label>
		               <input id="PathToTemplateFile" name="PathToTemplateFile"  type="text" style="width:170px;margin-left:5px">
		           </div> 
		           <div style="padding-top:10px ">
		               <label for="MoTa" style="width:140px;text-align:right; vertical-align:top; margin-top:20px">Mô tả</label>
		               <textarea id="MoTa" style="height:65px; width:170px;margin-left:5px" name="MoTa"></textarea>
		           </div>
		           <div style="padding-top:57px ">
		               <label for="GhiChu" style="width:140px;text-align:right; vertical-align:top; margin-top:20px">Ghi chú</label>
		               <textarea id="GhiChu" style="height:65px; width:170px;margin-left:5px" name="GhiChu"></textarea>
		           </div>   
                                             
       		 </div>
       		 <div class="form_row" style="vertical-align:top"  >
             		<div style="padding-top:10px ">
		               <label for="TenLoaiKham_EN" style="width:140px;text-align:right ">Tên loại khám tiếng anh</label>
		               <input id="TenLoaiKham_EN" name="TenLoaiKham_EN"  type="text" style="width:170px;margin-left:5px">
		           </div> 
		           <div style="padding-top:10px ">
		               <label for="ReportName" style="width:140px;text-align:right; vertical-align:top; margin-top:20px">Report name</label>
		               <textarea id="ReportName"  style="height:42px; width:170px;margin-left:5px" name="ReportName"></textarea>
		           </div>
		             
		           <div style="padding-top:30px "> <label for="PhanTramDieuChinhGiaTaiNha" style="width:140px;text-align:right ">Điều chỉnh giá khám</label>
		           		<input id="PhanTramDieuChinhGiaTaiNha" name="PhanTramDieuChinhGiaTaiNha"  type="text" style="width:170px;margin-left:5px">
		           </div>
		           <div style="padding-top:5px "> <label for="PhuThuThucHienTaiNha" style="width:140px;text-align:right ">Phụ phí khám tại nhà</label>
		              <input type=text id="PhuThuThucHienTaiNha" name="PhuThuThucHienTaiNha" style="width: 170px!important;margin-left:5px" >
		           </div>
		           <div style="padding-top:5px "> <label for="SoPhimLonTieuHao"  style="width:140px;text-align:right ">Số phim lớn tiêu hao</label>
		          		 <input id="SoPhimLonTieuHao" value="" name="SoPhimLonTieuHao"  type="text" style="width:170px;margin-left:5px">
		           </div>
		           <div style="padding-top:5px "> <label for="SoPhimNhoTieuHao" style="width:140px;text-align:right ">Số phim nhỏ tiêu hao</label>
		                  <input id="SoPhimNhoTieuHao" name="SoPhimNhoTieuHao"  type="text" style="width:170px;margin-left:5px">
		           </div>
		           <div style="padding-top:10px ">
		               <label for="SoPhimNhuAnhTieuHao" style="width:140px;text-align:right ">Số phim nhũ ảnh tiêu hao</label>
		               <input id="SoPhimNhuAnhTieuHao" name="SoPhimNhuAnhTieuHao"  type="text" style="width:170px;margin-left:5px">
		           </div>
		           <div style="padding-top:10px ">
		               <label for="GiaBaoHiem" style="width:140px;text-align:right ">Giá bảo hiểm</label>
		               <input id="GiaBaoHiem" name="GiaBaoHiem"  type="text" style="width:170px;margin-left:5px">
		           </div>
                   
		           <div style="padding-top:10px ">
		               <label for="GiaPhuThuBenhVien" style="width:140px;text-align:right ">Giá phụ thu bệnh viện</label>
		               <input id="GiaPhuThuBenhVien" name="GiaPhuThuBenhVien"  type="text" style="width:170px;margin-left:5px">
		           </div>
                   <div style="padding-top:10px ">
		               <label for="TenBaoHiem" style="width:140px;text-align:right ">Tên bảo hiểm</label>
		               <input id="TenBaoHiem" name="TenBaoHiem"  type="text" style="width:170px;margin-left:5px">
		           </div>
                   <div style="padding-top:10px ">
		               <label for="MauBaoHiem" style="width:140px;text-align:right ">Màu bảo hiểm</label>
		               <input id="MauBaoHiem" name="MauBaoHiem"  type="text" maxlength="1" style="width:170px;margin-left:5px">
		           </div>
		           <div style="padding-top:10px ">
		               <label for="hochieu" style="width:140px;text-align:right ">Nhóm BHYT</label>
		               <select id="ID_Nhom_BHYT" name="ID_Nhom_BHYT" type="text" style="width:178px;margin-left:5px; padding-top: 0px;"></select>
		           </div>
		            <div style="padding-top:10px ">
		               <label for="LoiKhuyen" style="width:140px;text-align:right; vertical-align:top; margin-top:20px">Lời khuyên</label>
		               <textarea id="LoiKhuyen" style="height:52px; width:170px;margin-left:5px" name="LoiKhuyen"></textarea>
		           	 </div>                        
       		 </div>
        	 <div class="form_row" style="vertical-align:top"  >
        	 	 	<div style="padding-top:5px "> 
                         <label for="XetNghiem" style="width:190px;text-align:right ">Xét nghiệm</label> 
                         <input type=checkbox id="XetNghiem" value="1" name="XetNghiem">
                         <button id="xetnghiem-ts" name="xetnghiem-ts" lang="end"  style="height: 30px; margin-left: 30px;" disabled>Thông số</button>
                     </div>
                     <div style="padding-top:5px ">   
                           
                         <label for="CLS" style="width:190px;text-align:right ">Cận lâm sàng</label> 
                         <input type=checkbox id="CLS" value="1" name="CLS">
                         <label for="CoLuuKQInRieng" style="width:170px;text-align:right ">Có lưu kết quả in riêng</label> 
                         <input type=checkbox id="CoLuuKQInRieng" value="1" name="CoLuuKQInRieng">
                     </div>
                     <div style="padding-top:5px ">   
                         <label for="DieuTriTaiNha" style="width:190px;text-align:right ">Điều trị tại nhà</label> 
                         <input type=checkbox id="DieuTriTaiNha" value="1" name="DieuTriTaiNha">
                         <label for="CoMauNhapKQ" style="width:170px;text-align:right ">Có mẫu nhập kết quả</label> 
                         <input type=checkbox id="CoMauNhapKQ" value="1" name="CoMauNhapKQ">
                     </div>
                      <div style="padding-top:5px ">   
                         <label for="CoTheKeToa" style="width:190px;text-align:right ">Có thể kê toa</label> 
                         <input type=checkbox id="CoTheKeToa" value="1" name="CoTheKeToa">
                         <label for="ThuocNhomXepHangCLS" style="width:170px;text-align:right ">Thuộc nhóm xếp hàng CLS</label> 
                         <input type=checkbox id="ThuocNhomXepHangCLS" value="1" name="ThuocNhomXepHangCLS">
                     </div>
                     <div style="padding-top:5px ">   
                         <label for="GiaTaiNhaDieuChinhTheoNhom" style="width:190px;text-align:right ">Giá tại nhà điều chỉnh theo nhóm</label> 
                         <input type=checkbox id="GiaTaiNhaDieuChinhTheoNhom" value="1" name="GiaTaiNhaDieuChinhTheoNhom">
                         <label for="CoFormChucNangRieng" style="width:170px;text-align:right ">Có form chức năng riêng</label> 
                         <input type=checkbox id="CoFormChucNangRieng" value="1" name="CoFormChucNangRieng">
                     </div>
                     <div style="padding-top:5px ">   
                         <label for="TuyenHuyen" style="width:190px;text-align:right ">Tuyến huyện</label> 
                         <input type=checkbox id="TuyenHuyen" value="1" name="TuyenHuyen">
                         <label for="TuyenTinh" style="width:170px;text-align:right ">Tuyến tỉnh</label> 
                         <input type=checkbox id="TuyenTinh" value="1" name="TuyenTinh">
                     </div>
                     <div style="padding-top:5px ">   
                         <label for="TuyenTrungUong" style="width:190px;text-align:right ">Tuyến trung ương</label> 
                         <input type=checkbox id="TuyenTrungUong" value="1" name="TuyenTrungUong">
                         <label for="Active" style="width:170px;text-align:right ">Sử dụng</label> 
                         <input type=checkbox id="Active" value="1" name="Active">
                     </div>
                     
                     <div style="padding-top:55px ">   
                         <label for="loaikham-pb" style="width:190px;text-align:right ">Loại khám phòng ban</label> 
                         <button id="loaikham-pb" name="loaikham-pb" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" style="margin-left: 10px ! important; vertical-align: top; width: 41px; height: 41px; margin-right: 40px   "><span class="ui-icon ui-icon-circle-plus" ></span></button>
                     </div>
                     <div style="padding-top:55px ">   
                         <label for="loaikham-thuoc" style="width:190px;text-align:right ">Gói thuốc, VTTH đi theo</label> 
                         <button id="loaikham-thuoc" name="loaikham-thuoc" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" style="margin-left: 10px ! important;padding-left:12px;vertical-align: top; width: 41px; height: 41px;"><span class="ui-icon ui-icon-circle-plus" ></span></button>
                     </div>
        	 </div>
        	 
        </div>
    </div> 
    <div id="dialog-form2" title="Thêm bản ghi" style="display:none">
         <table id="rowed4">          
         </table>
         <div id="prowed4"></div>
    </div >  
    <div id="dialog-form3" title="Thêm bản ghi" style="display:none">
         <table id="rowed5">          
         </table>
         <div id="prowed5"></div>
    </div>
    <div id="dialog-form4" title="Đơn thuốc" style="display:none">
        <iframe id="donthuoc" name="donthuoc" width="1150px" height="520px" src=""></iframe>
    </div>  
</body>
</html> 

<script type="text/javascript">
jQuery(document).ready(function() {
	var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
	var eventer = window[eventMethod];
	var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
	eventer(messageEvent,function(e) { 
		tam=e.data.split('|||');
		if(tam[0]=='dongdialog'){
			$( "#dialog-form4" ).dialog('close');
		}
		if(tam[1]=='luu'){
			if(tam[3]!=0){
				jQuery("#rowed3").jqGrid('setCell', window.id_edit, 'TenLoaiKham', '', {'background': '#00B3A0'});	
			}
		}
		if(tam[1]=='huy'){
			jQuery("#rowed3").jqGrid('setCell', window.id_edit, 'TenLoaiKham', '', {'background': '#FBFAF5'});	
		}
		if(tam[1]=='changetitle'){
			$('#dialog-form4').dialog('option', 'title',window.tenloaikham2+''+tam[2]);
		}
	});
    init_data();
	load_select();
	create_grid1();
    create_grid2();
	var lastsel; 		
	create_grid();	
	shortcut_key();		
jQuery(window).resize(function() {		 
	$("#rowed3").setGridWidth($(window).width()-10);
	$("#rowed3").setGridHeight($(window).height()-$("#form_danh_muc_phong_ban").height()-180);
	}); 
        number_textbox_demical("#GiaBaoChoBN");
        number_textbox_demical("#GiaThueNgoaiThucHien");
        number_textbox_demical("#PhanTramDieuChinhGiaTaiNha");   
        number_textbox_demical("#PhuThuThucHienTaiNha");
        number_textbox_demical("#ThoiGianTrungBinhThucHien");
        number_textbox_demical("#SoPhimLonTieuHao");
        number_textbox_demical("#SoPhimNhoTieuHao");
        number_textbox_demical("#SoPhimNhuAnhTieuHao");
        number_textbox_demical("#ThoiGianCoKetQua");
        number_textbox_demical("#STT");
        number_textbox_demical("#GiaBaoHiem"); 
        number_textbox_demical("#GiaPhuThuBenhVien"); 

	 $( "#dialog-form" ).dialog({
            autoOpen: false,
            height: ($(window).height()/100 * parseFloat(99)).toFixed(0),
            width: ($(window).width()/100 * parseFloat(90)).toFixed(0),
            modal: true,
             open: function(event,ui){
                $( "#dialog-form" ).dialog( "option", "height", ($(window).height()/100 * parseFloat(99)).toFixed(0) );
                $( "#dialog-form" ).dialog( "option", "width", ($(window).width()/100 * parseFloat(90)).toFixed(0) );
                $("#XetNghiem").click(function () { 
                    var xn= $("#XetNghiem:checked").val();
                    
                    
                    if(xn==1)
                        {
                            $("#xetnghiem-ts").button('enable');
                        }
                    else
                        {
                            $("#xetnghiem-ts").button('disable');
                        }
                });
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
                        }
                    }
            });
              

	    $( "#loaikham-pb" )
            .button()
            .click(function() {
            $( "#dialog-form2" ).dialog( "open" );
            //$(".ui-jqgrid-bdiv").empty();
            
             });
        $( "#dialog-form2" ).dialog({
            autoOpen: false,
            height: ($(window).height()/100 * parseFloat(62)).toFixed(0),
            width: ($(window).width()/100 * parseFloat(50)).toFixed(0),
            modal: true,
             open: function(event,ui){
                $( "#dialog-form2" ).dialog( "option", "height", ($(window).height()/100 * parseFloat(63)).toFixed(0) );
                $( "#dialog-form2" ).dialog( "option", "width", ($(window).width()/100 * parseFloat(50)).toFixed(0) );
                 
                
            },
            buttons: {
           
            Cancel: function() {
            $( this ).dialog( "close" );
                        }
                    }
            }); 

        $( "#xetnghiem-ts" )
            .button()
            .click(function() {
            $( "#dialog-form3" ).dialog( "open" );
           
             });
        $( "#dialog-form3" ).dialog({
            autoOpen: false,
            height: ($(window).height()/100 * parseFloat(80)).toFixed(0),
            width: ($(window).width()/100 * parseFloat(80)).toFixed(0),
            modal: true,
             open: function(event,ui){
                $( "#dialog-form3" ).dialog( "option", "height", ($(window).height()/100 * parseFloat(80)).toFixed(0) );
                $( "#dialog-form3" ).dialog( "option", "width", ($(window).width()/100 * parseFloat(90)).toFixed(0) );
                 
                
            },
            buttons: {
           
            Cancel: function() {
            $( this ).dialog( "close" );
                        }
                    }
            }); 
		$( "#loaikham-thuoc" ).click(function(e) {
			$("#donthuoc").attr('src','resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=index_thuoc&type=test&id_form=<?=$_GET["id_form"]?>&id_loaikham='+window.id_edit);
            $( "#dialog-form4" ).dialog('open');
        });
		
		$( "#dialog-form4" ).dialog({
            autoOpen: false,
			title: window.tenloaikham,
            height: ($(window).height()/100 * parseFloat(100)).toFixed(0),
            width: ($(window).width()/100 * parseFloat(90)).toFixed(0),
            modal: true,
             open: function(event,ui){
				 $('#dialog-form4').dialog('option', 'title',window.tenloaikham);
              //  $( "#dialog-form4" ).dialog( "option", "height", ($(window).height()/100 * parseFloat(80)).toFixed(0) );
                //$( "#dialog-form4" ).dialog( "option", "width", ($(window).width()/100 * parseFloat(90)).toFixed(0) );

            },
            }); 
       // phanquyen();
})
 

 
function create_grid(){	
	 $("#rowed3").jqGrid({
		url:'resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_loaikham&q=2',
		datatype: "json",	
		colNames:['Id','Tên loại khám','Mã viết tắt','Mã viết tắt bệnh nhân','Thuộc nhóm','Mô tả','Giá báo BN','Giá thuê ngoài','Số phút thực hiện','Thời gian có kết quả','Ghi chú','Lời khuyên','Sử dụng','STT','CLS','Xét Nghiệm','Có lưu kết quả in riêng','Điều trị tại nhà','Có mẫu nhập kết quả','Đường dẫn của tập tin mẫu','Tên loại khám bằng tiếng anh','Report name',''],
		colModel:[
						{name:'ID_LoaiKham',index:'ID_LoaiKham',search:false, width:"100%", editable:false,align:'right',hidden:true},
                        {name:'TenLoaiKham',index:'TenLoaiKham', width:"100%", editable:true,align:'center',hidden:false,editrules: {required:true},edittype:"text",formoptions:{ rowpos:1, colpos:1}}, 
                        {name:'MaVietTat',index:'MaVietTat', width:"60%", editable:true,align:'center',hidden:false,edittype:"text",formoptions:{ rowpos:2, colpos:1}},
						{name:'MaVietTat_BN',index:'MaVietTat_BN', width:"100%", editable:true,align:'left',hidden:false,edittype:"text",formoptions:{ rowpos:3, colpos:1}}, 
						{name:'ID_NhomCLS',index:'ID_NhomCLS', width:"100%", editable:true,align:'center',hidden:false,formatter:"select",editrules: {required:true},edittype:"select",editoptions: { value: nation},formoptions:{ rowpos:1, colpos:2}}, 
                        {name:'MoTa',index:'MoTa', width:"300%", editable:true,align:'left',hidden:false,edittype:"textarea",formoptions:{ rowpos:15, colpos:2}},	
                        {name:'GiaBaoChoBN',editrules: {required:true},index:'GiaBaoChoBN', width:"70%", editable:true,align:'right',hidden:false,edittype:"text",formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: "", defaultValue: '0'},formoptions:{ rowpos:4, colpos:1}},
						{name:'GiaThueNgoaiThucHien',editrules: {required:true},index:'GiaThueNgoaiThucHien', width:"80%",  editable:true,align:'right',formatter:'currency',hidden:false,edittype:"text",formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: "", defaultValue: '0'},formoptions:{ rowpos:5, colpos:1}},
						{name:'ThoiGianTrungBinhThucHien',editrules: {required:true},index:'ThoiGianTrungBinhThucHien', width:"100%",formatter:'currency', editable:true,align:'center',hidden:false,edittype:"text", formatter:"text",formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 1, prefix: "", defaultValue: '0'},formoptions:{ rowpos:6, colpos:1}},	
						{name:'ThoiGianCoKetQua',editrules: {required:true},index:'ThoiGianCoKetQua',width:"100%",formatter:'currency', editable:true,align:'left',hidden:false,edittype:"text",formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 1, prefix: "", defaultValue: '0'},formoptions:{ rowpos:7, colpos:1}},
                        {name:'GhiChu',index:'GhiChu', width:"100%", editable:true,align:'center',hidden:false,edittype:"textarea",formoptions:{ rowpos:16, colpos:1}},
                        {name:'LoiKhuyen',index:'LoiKhuyen',width:"100%", editable:true,align:'left',hidden:false,edittype:"textarea",formoptions:{ rowpos:16, colpos:2}},
                        {name:'Active',index:'Active', width:"50%",stype: 'select',searchoptions: { sopt: ['eq', 'ne'],value:':;1:Có;0:Không'}, editable:true,align:'center',hidden:false,edittype:"checkbox",formatter:"checkbox",formoptions:{ rowpos:2, colpos:2},editoptions: {value:"1:0"}},
                        {name:'STT',index:'STT', width:"50%",  editable:true,align:'left',hidden:false,edittype:"text",formoptions:{ rowpos:8, colpos:1}},
                        {name:'CLS',index:'CLS', width:"50%", editable:true,align:'center',stype: 'select',searchoptions: { sopt: ['eq', 'ne'],value:':;1:Có;0:Không'},hidden:false,edittype:"checkbox",formatter:"checkbox",formoptions:{ rowpos:3, colpos:2},editoptions: {value:"1:0"},align:'center'},
                        {name:'XetNghiem',index:'XetNghiem', width:"100%",stype: 'select',searchoptions: { sopt: ['eq', 'ne'],value:':;1:Có;0:Không'}, editable:true,align:'center',hidden:false,edittype:"checkbox",formatter:"checkbox",formoptions:{ rowpos:4, colpos:2},editoptions: {value:"1:0"}},
                        {name:'CoLuuKQInRieng',index:'CoLuuKQInRieng', width:"100%",stype: 'select',searchoptions: { sopt: ['eq', 'ne'],value:':;1:Có;0:Không'}, editable:true,align:'center',hidden:false,edittype:"checkbox",formatter:"checkbox",formoptions:{ rowpos:5, colpos:2},editoptions: {value:"1:0"}},
                        {name:'DieuTriTaiNha',index:'DieuTriTaiNha', width:"100%",stype: 'select',searchoptions: { sopt: ['eq', 'ne'],value:':;1:Có;0:Không'}, editable:true,align:'center',hidden:false,edittype:"checkbox",formatter:"checkbox",formoptions:{ rowpos:6, colpos:2},editoptions: {value:"1:0"}},
                        {name:'CoMauNhapKQ',index:'CoMauNhapKQ', width:"100%",stype: 'select',searchoptions: { sopt: ['eq', 'ne'],value:':;1:Có;0:Không'}, editable:true,align:'center',hidden:false,edittype:"checkbox",formatter:"checkbox",formoptions:{ rowpos:7, colpos:2},editoptions: {value:"1:0"}},
                        {name:'PathToTemplateFile',index:'PathToTemplateFile', width:"100%", editable:true,align:'left',hidden:false,edittype:"text",formoptions:{ rowpos:9 ,colpos:1}},
                        {name:'TenLoaiKham_EN',index:'TenLoaiKham_EN', width:"100%", editable:true,align:'left',hidden:false,edittype:"text",formoptions:{ rowpos:9 ,colpos:1}},
                        {name:'ReportName',index:'ReportName', width:"100%", editable:true,align:'left',hidden:false,edittype:"text",formoptions:{ rowpos:10, colpos:1}},
                      
						{name:'ID_auto',index:'ID_auto',editrules: {required:false}, width:"60%", editable:true,align:'right',hidden:true,edittype:"text",formoptions:{ rowpos:14, colpos:2}},
        
        ],
	//

		loadonce: true,
		scroll: 1,	
		//rownum = false,
		//treeGrid = false,	 
		modal:true,	 	
		pager: '#prowed3',	
		rowNum: -1,
		gridview: true,
		pginput:false,
		pgbuttons:false,
		rowList:[],
		sortname: 'ID_LoaiKham',
		height:100,
		width: 100,
		viewrecords: true,	
		ignoreCase:true,
		shrinkToFit:false,
		stringResult:true,
		sortorder: "asc",
               grouping:true,
               groupingView : {
                      groupField : ['ID_NhomCLS'],
                       groupColumnShow : [false],
                      groupCollapse : true,
                       
               },
		
	//hoverrows:false,
	//jsonReader:{repeatitems:true,subgrid:{repeatitems:false}},	
		
		serializeRowData: function (postdata) { 		 	
			//$("#rowed3").trigger("reloadGrid");		
			//return postdata;
		},
		onSelectRow: function(id){		  
		  //$("#rowed4").jqGrid().setGridParam({url:'data2_tam.php?id='+lastsel}).trigger("reloadGrid");	   
		},
		ondblClickRow: function (rowId, rowIndex, columnIndex) {
			$(".ui-icon-pencil").trigger('click'); 
 		},
		loadComplete: function(data) {	
          //   if(typeof(window.nhanvien)!="undefined"){           
           //     tam=$('tr.rowed3ghead_0:has(td:contains("'+window.nhanvien+'"))').attr("id");            
           //     jQuery('#rowed3').jqGrid('groupingToggle',tam);
           //     jQuery('#rowed3').jqGrid("setSelection",window.id_return, true);    
            //    jQuery('#rowed3 #'+window.id_return).focus();
                
          //  }   
		  var tmp1 = $("#rowed3").jqGrid('getDataIDs'); 
			for(var i=0;i < tmp1.length;i++){
				var rowData = $("#rowed3").getRowData(tmp1[i]);	
				if(rowData["ID_auto"]!=""){
					//$("#rowed3").jqGrid('setRowData', tmp1[i], false, { color: 'red',border:'1px solid #BBBBBB' });
					jQuery("#rowed3").jqGrid('setCell', tmp1[i], 'TenLoaiKham', '', {'background': '#00B3A0'});
				}
			}         			 
		},	  
		caption: "Danh mục loại khám"
	});	
	$("#rowed3").jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false,defaultSearch:"cn"});
	$("#rowed3").jqGrid('navGrid',"#prowed3",{add: permission["add"], edit: permission["edit"], del: permission["delete"], search: false,closeAfterEdit: true,clearAfterAdd :true,closeOnEscape : true,
		addfunc: function(){
            $('#dialog-form').dialog('open');
            window.oper='add';
            $("input:text").val("");
            $("textarea").val("");
            $("#CLS").prop('checked', false);
            $("#XetNghiem").prop('checked', false);
             $("#xetnghiem-ts").button('disable');
            $("#CoLuuKQInRieng").prop('checked', false);
            $("#DieuTriTaiNha").prop('checked', false);
            $("#CoMauNhapKQ").prop('checked', false);
            $("#CoTheKeToa").prop('checked', false);
            $("#ThuocNhomXepHangCLS").prop('checked', false);
            $("#GiaTaiNhaDieuChinhTheoNhom").prop('checked', false);
            $("#CoFormChucNangRieng").prop('checked', false);
            $("#TuyenHuyen").prop('checked', false);
            $("#TuyenTinh").prop('checked', false);
            $("#TuyenTrungUong").prop('checked', false);
            $("#Active").prop('checked', true);

             },
        editfunc: function(id){
            $('#dialog-form').dialog('open');
            $("input:text").css("background-color","white");
            window.oper='edit';
            window.id_edit=id;
            //alert(id);
             $('#rowed4').jqGrid('setGridParam', {url: 'resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_loaikhampb&id='+id,datatype:'json'}).trigger('reloadGrid');
              $('#rowed5').jqGrid('setGridParam', {url: 'resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_xetnghiemts&id='+id,datatype:'json'}).trigger('reloadGrid');
            var TenLoaiKham = $("#rowed3").jqGrid('getCell', id, 'TenLoaiKham');
			var TenDonThuoc = $("#rowed3").jqGrid('getCell', id, 'TenDonThuoc');
			window.tenloaikham=TenLoaiKham+' - Gói thuốc, VTTH: '+TenDonThuoc;
			window.tenloaikham2=TenLoaiKham+' - Gói thuốc, VTTH: ';
			
            var MaVietTat = $("#rowed3").jqGrid('getCell', id, 'MaVietTat');
            var MaVietTat_BN = $("#rowed3").jqGrid('getCell', id, 'MaVietTat_BN');
            var ID_NhomCLS = $("#rowed3").jqGrid('getCell', id, 'ID_NhomCLS');
            var MoTa = $("#rowed3").jqGrid('getCell', id, 'MoTa');
            var GiaBaoChoBN = $("#rowed3").jqGrid('getCell', id, 'GiaBaoChoBN');
            var GiaThueNgoaiThucHien = $("#rowed3").jqGrid('getCell', id, 'GiaThueNgoaiThucHien');
            var ThoiGianTrungBinhThucHien = $("#rowed3").jqGrid('getCell', id, 'ThoiGianTrungBinhThucHien');
            var ThoiGianCoKetQua = $("#rowed3").jqGrid('getCell', id, 'ThoiGianCoKetQua');
            var GhiChu = $("#rowed3").jqGrid('getCell', id, 'GhiChu');
            var LoiKhuyen = $("#rowed3").jqGrid('getCell', id, 'LoiKhuyen');
            var Active = $("#rowed3").jqGrid('getCell', id, 'Active');
            var STT = $("#rowed3").jqGrid('getCell', id, 'STT');
            var CLS = $("#rowed3").jqGrid('getCell', id, 'CLS');
            var XetNghiem = $("#rowed3").jqGrid('getCell', id, 'XetNghiem');
            var CoLuuKQInRieng = $("#rowed3").jqGrid('getCell', id, 'CoLuuKQInRieng');
            var DieuTriTaiNha = $("#rowed3").jqGrid('getCell', id, 'DieuTriTaiNha');
            var CoMauNhapKQ = $("#rowed3").jqGrid('getCell', id, 'CoMauNhapKQ');
            var PathToTemplateFile = $("#rowed3").jqGrid('getCell', id, 'PathToTemplateFile');
            var TenLoaiKham_EN = $("#rowed3").jqGrid('getCell', id, 'TenLoaiKham_EN');
            var ReportName = $("#rowed3").jqGrid('getCell', id, 'ReportName');
            var CoTheKeToa = $("#rowed3").jqGrid('getCell', id, 'CoTheKeToa');
            var ThuocNhomXepHangCLS = $("#rowed3").jqGrid('getCell', id, 'ThuocNhomXepHangCLS');
            var PhanTramDieuChinhGiaTaiNha = $("#rowed3").jqGrid('getCell', id, 'PhanTramDieuChinhGiaTaiNha');
            var PhuThuThucHienTaiNha = $("#rowed3").jqGrid('getCell', id, 'PhuThuThucHienTaiNha');
            var GiaTaiNhaDieuChinhTheoNhom = $("#rowed3").jqGrid('getCell', id, 'GiaTaiNhaDieuChinhTheoNhom');
            var CoFormChucNangRieng = $("#rowed3").jqGrid('getCell', id, 'CoFormChucNangRieng');
            var SoPhimLonTieuHao = $("#rowed3").jqGrid('getCell', id, 'SoPhimLonTieuHao');
            var SoPhimNhoTieuHao = $("#rowed3").jqGrid('getCell', id, 'SoPhimNhoTieuHao');
            var SoPhimNhuAnhTieuHao = $("#rowed3").jqGrid('getCell', id, 'SoPhimNhuAnhTieuHao');
            var TuyenHuyen = $("#rowed3").jqGrid('getCell', id, 'TuyenHuyen');
            var TuyenTinh = $("#rowed3").jqGrid('getCell', id, 'TuyenTinh');
            var TuyenTrungUong = $("#rowed3").jqGrid('getCell', id, 'TuyenTrungUong');
            var GiaBaoHiem = $("#rowed3").jqGrid('getCell', id, 'GiaBaoHiem');
            var GiaPhuThuBenhVien = $("#rowed3").jqGrid('getCell', id, 'GiaPhuThuBenhVien');
            var ID_Nhom_BHYT = $("#rowed3").jqGrid('getCell', id, 'ID_Nhom_BHYT');
			var TenBaoHiem = $("#rowed3").jqGrid('getCell', id, 'TenBaoHiem');
			var MauBaoHiem = $("#rowed3").jqGrid('getCell', id, 'MauBaoHiem');
			
            $("#TenLoaiKham").val(TenLoaiKham);
            $("#MaVietTat").val(MaVietTat);
            $("#MaVietTat_BN").val(MaVietTat_BN);
            $("#ID_NhomCLS").val(ID_NhomCLS);
            $("#MoTa").val(MoTa);
            $("#GiaBaoChoBN").val(GiaBaoChoBN);
            $("#GiaThueNgoaiThucHien").val(GiaThueNgoaiThucHien);
            $("#ThoiGianTrungBinhThucHien").val(ThoiGianTrungBinhThucHien);
            $("#ThoiGianCoKetQua").val(ThoiGianCoKetQua);
            $("#GhiChu").val(GhiChu);
            $("#LoiKhuyen").val(LoiKhuyen);
            $("#STT").val(STT);
            $("#PathToTemplateFile").val(PathToTemplateFile);
            $("#TenLoaiKham_EN").val(TenLoaiKham_EN);
            $("#ReportName").val(ReportName);
            $("#PhanTramDieuChinhGiaTaiNha").val(PhanTramDieuChinhGiaTaiNha);
            $("#PhuThuThucHienTaiNha").val(PhuThuThucHienTaiNha);
            $("#SoPhimLonTieuHao").val(SoPhimLonTieuHao);
            $("#SoPhimNhoTieuHao").val(SoPhimNhoTieuHao);
            $("#SoPhimNhuAnhTieuHao").val(SoPhimNhuAnhTieuHao);
            $("#GiaBaoHiem").val(GiaBaoHiem);
            $("#GiaPhuThuBenhVien").val(GiaPhuThuBenhVien);
            $("#ID_Nhom_BHYT").val(ID_Nhom_BHYT);
			$("#TenBaoHiem").val(TenBaoHiem);
			$("#MauBaoHiem").val(MauBaoHiem);
           
           if(CLS=="1"){
                $("#CLS").prop('checked',true);
            }else{
                 $("#CLS").prop('checked',false);
            }
            if(XetNghiem=="1"){
                $("#XetNghiem").prop('checked',true);
                 $("#xetnghiem-ts").button('enable');
            }else{
                 $("#XetNghiem").prop('checked',false);
                  $("#xetnghiem-ts").button('disable');
            }
            if(CoLuuKQInRieng=="1"){
                $("#CoLuuKQInRieng").prop('checked',true);
            }else{
                 $("#CoLuuKQInRieng").prop('checked',false);
            }
            if(DieuTriTaiNha=="1"){
                $("#DieuTriTaiNha").prop('checked',true);
            }else{
                 $("#DieuTriTaiNha").prop('checked',false);
            }
            if(CoMauNhapKQ=="1"){
                $("#CoMauNhapKQ").prop('checked',true);
            }else{
                 $("#CoMauNhapKQ").prop('checked',false);
            }
            if(CoTheKeToa=="1"){
                $("#CoTheKeToa").prop('checked',true);
            }else{
                 $("#CoTheKeToa").prop('checked',false);
            }
            if(ThuocNhomXepHangCLS=="1"){
                $("#ThuocNhomXepHangCLS").prop('checked',true);
            }else{
                 $("#ThuocNhomXepHangCLS").prop('checked',false);
            }
            if(GiaTaiNhaDieuChinhTheoNhom=="1"){
                $("#GiaTaiNhaDieuChinhTheoNhom").prop('checked',true);
            }else{
                 $("#GiaTaiNhaDieuChinhTheoNhom").prop('checked',false);
            }
            if(CoFormChucNangRieng=="1"){
                $("#CoFormChucNangRieng").prop('checked',true);
            }else{
                 $("#CoFormChucNangRieng").prop('checked',false);
            }
            if(TuyenHuyen=="1"){
                $("#TuyenHuyen").prop('checked',true);
            }else{
                 $("#TuyenHuyen").prop('checked',false);
            }
            if(TuyenTinh=="1"){
                $("#TuyenTinh").prop('checked',true);
            }else{
                 $("#TuyenTinh").prop('checked',false);
            }
            if(TuyenTrungUong=="1"){
                $("#TuyenTrungUong").prop('checked',true);
            }else{
                 $("#TuyenTrungUong").prop('checked',false);
            }
            if(Active=="1"){
                $("#Active").prop('checked',true);
            }else{
                 $("#Active").prop('checked',false);
            }
        }
        }, //options
        {}, // edit options
		{}, // add options							  
		{reloadAfterSubmit:false,url:'resource.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=del',	navkeys : [ true, 38, 40 ],closeOnEscape : true,	
                            beforeShowForm : function(formid) {canhgiua_del(formid);},
                            afterSubmit : function(response, postdata) { 				
							if(response.responseText==1){
								var success=false;
								var new_id="<?php get_text1("xoa_khongthanhcong") ?>";													
								}
                                                        else{
								tooltip_message("<?php get_text1("xoa_thanhcong") ?>");
								var success=true;	
								var new_id="<?php get_text1("xoa_thanhcong") ?>";
															
							};						
							return [success,new_id] ;
				}		
		}, // del options
		{reloadAfterSubmit:true,height:250,width:600,sopt: ["cn"],url:'resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_thuoc&q=2',closeOnEscape : true,
				/*beforeShowSearch:function(formid){				
				}*/ // search options		
		} // search options						 
							  
	);	 					  
	$("#rowed3").setGridWidth($(window).width()-10);
	$("#rowed3").setGridHeight($(window).height()-$("#form_danh_muc_phong_ban").height()-180);
        
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
   	colNames:[ 'Tên phòng ban','Ghi chú','Sử dụng'],
   	colModel:[
                {name:'ID_PhongBan',index:'ID_PhongBan', width:5, editable:true,align:'center',formatter:"select",edittype:"select",hidden:false,editoptions:{value:loaikhampb}}, 
   				{name:'GhiChu',index:'GhiChu',editable:true, width:5, align:"center",edittype:"text",hidden:false},
                {name:'IsUsing',index:'IsUsing', width:5,align:'center',editable:true,editoptions: {value:"1:0"},formatter:"checkbox",edittype:"checkbox",hidden:false},
                
                
   	],
        loadonce: true,
        scroll: 1,	
   		rowNum:1000,
        height:200,
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
	caption:"Thêm loại khám phòng ban"
        });
    jQuery("#rowed4").jqGrid('navGrid','#prowed4',{add: false,del:true,edit:false,search:false}, {}, {},myDelOptions);
    $("#rowed4").jqGrid('inlineNav', '#prowed4',  {add: true, addtext: '', edittext: '', edit: true, closeOnEscape: true,
        
          
       	 });
        $("#rowed4").setGridWidth($(window).width() - 450);
        $("#rowed4").setGridHeight($(window).height()  - 400);
        
		$("#rowed4").jqGrid('bindKeys', {"onEnter":function( rowid ) {				
					$("#rowed4_iledit .ui-icon-pencil").click();				
			} } );
}
function create_grid2(){
var mydata=[];
 myDelOptions = {
        // because I use "local" data I don't want to send the changes
        // to the server so I use "processing:true" setting and delete
        // the row manually in onclickSubmit
        onclickSubmit: function(options, rowid) {
            var grid_id = $.jgrid.jqID(jQuery("#rowed5")[0].id),
                grid_p = jQuery("#rowed5")[0].p,
                newPage = grid_p.page;

            // reset the value of processing option which could be modified
            options.processing = true;

            // delete the row
            jQuery("#rowed5").delRowData(rowid);
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
                jQuery("#rowed5").trigger("reloadGrid", [{page:newPage}]);
            }

            return true;
        },
        processing:true
    };

jQuery("#rowed5").jqGrid({

    data:mydata,
    datatype: "local",
    colNames:[ 'ID','Tên thông số xét nghiệm','Mô tả','Đơn giá','Ghi chú','Cận nam 1','Cận nam 2','Cận nam 3','Cận nam 4','Cận nữ 1','Cận nữ 2','Cận nữ 3','Cận nữ 4','Red','Blue','Yellow','Hệ số chuyển đổi','Giá trị bình thường 1','Giá trị bình thường 2','Có lưu kết quả in riêng','Có template','STT','Đơn vị tính'],
    colModel:[
                {name:'ID_XetNghiem',index:'ID_XetNghiem',search:false, width:"100%", editable:false,align:'right',hidden:true},
                {name:'TenXetNghiem',index:'TenXetNghiem',editable:true,editrules: {required:true}, width:50, align:"center",edittype:"text",hidden:false},
                {name:'MoTa',index:'MoTa',editable:true, width:35, align:"center",edittype:"text",hidden:false},
                {name:'DonGia',index:'DonGia',editable:true,width:15,align:'right',edittype:"text",editrules: { number: true, required: false},hidden:false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: "", defaultValue: '0'}},
                {name:'GhiChu',index:'GhiChu',editable:true, width:35, align:"center",edittype:"text",hidden:false},
                {name:'CanNam1',index:'CanNam1',editable:true, width:15, align:'right',edittype:"text",editrules: { number: true, required: false},hidden:false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 3, prefix: "", defaultValue: '0'}},
                {name:'CanNam2',index:'CanNam2',editable:true, width:15, align:'right',edittype:"text",editrules: { number: true, required: false},hidden:false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 3, prefix: "", defaultValue: '0'}},
                {name:'CanNam3',index:'CanNam3',editable:true, width:15, align:'right',edittype:"text",editrules: { number: true, required: false},hidden:false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 3, prefix: "", defaultValue: '0'}},
                {name:'CanNam4',index:'CanNam4',editable:true, width:15, align:'right',edittype:"text",editrules: { number: true, required: false},hidden:false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 3, prefix: "", defaultValue: '0'}},
                {name:'CanNu1',index:'CanNu1',editable:true, width:15, align:'right',edittype:"text",editrules: { number: true, required: false},hidden:false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 3, prefix: "", defaultValue: '0'}},
                {name:'CanNu2',index:'CanNu2',editable:true, width:15, align:'right',edittype:"text",editrules: { number: true, required: false},hidden:false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 3, prefix: "", defaultValue: '0'}},
                {name:'CanNu3',index:'CanNu3',editable:true,width:15, align:'right',edittype:"text",editrules: { number: true, required: false},hidden:false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 3, prefix: "", defaultValue: '0'}},
                {name:'CanNu4',index:'CanNu4',editable:true, width:15, align:'right',edittype:"text",editrules: { number: true, required: false},hidden:false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 3, prefix: "", defaultValue: '0'}},
                {name:'Red',index:'Red',editable:true,width:15, align:"center",edittype:"text",hidden:false},
                {name:'Blue',index:'Blue',editable:true, width:15, align:"center",edittype:"text",hidden:false},
                {name:'Yellow',index:'Yellow',editable:true, width:15, align:"center",edittype:"text",hidden:false},
                {name:'HeSoChuyenDoi',index:'HeSoChuyenDoi',editable:true, width:15, align:"center",edittype:"text",hidden:false},
                {name:'GiaTriBinhThuong1',index:'GiaTriBinhThuong1',editable:true, width:50, align:"center",edittype:"text",hidden:false},
                {name:'GiaTriBinhThuong2',index:'GiaTriBinhThuong2',editable:true, width:50, align:"center",edittype:"text",hidden:false},
                {name:'CoKQInRieng',index:'IsUsCoKQInRienging', width:15,align:'center',editable:true,editoptions: {value:"1:0"},formatter:"checkbox",edittype:"checkbox",hidden:false},
                {name:'CoTemplate',index:'CoTemplate', width:15,align:'center',editable:true,editoptions: {value:"1:0"},formatter:"checkbox",edittype:"checkbox",hidden:false},
                {name:'STT',index:'STT',editable:true,editrules: { number: true, required: true}, width:15, align:"center",edittype:"text",hidden:false},
                {name:'ID_DonViTinh',index:'ID_DonViTinh', width:15, editable:true,align:'center',formatter:"select",edittype:"select",hidden:false,editoptions:{value:donvitinh}}, 
                
                
    ],
        loadonce: true,
        scroll: true,  
        rowNum:1000,
        height:200,
    rowList:[],
    pager: '#prowed5',
    sortname: 'ID_NhanVien',
        viewrecords: true,
        sortorder: "asc",
//  multiselect: true,
        ignoreCase:true,
//  shrinkToFit:true,
        pgbuttons: false, // disable page control like next, back button
        pgtext: null,
    caption:"Thêm loại khám xét nghiệm"
        });
    jQuery("#rowed5").jqGrid('navGrid','#prowed5',{add: false,del:true,edit:false,search:false}, {}, {},myDelOptions);
    $("#rowed5").jqGrid('inlineNav', '#prowed5',  {add: true, addtext: '', edittext: '', edit: true, closeOnEscape: true,
        
          
         });
        $("#rowed5").setGridWidth($(window).width()+1000);
        $("#rowed5").setGridHeight($(window).height()  - 400);
        
        $("#rowed5").jqGrid('bindKeys', {"onEnter":function( rowid ) {              
                    $("#rowed5_iledit .ui-icon-pencil").click();                
            } } );
}
function load_select1(){
	window.xaphuong = $.ajax({url: 'resource.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=2&tables=GD2_DMNHOM_BHT&id=ID_NHOM_BHYT&name=Ten_Nhom_BHYT', async: false, success: function(data, result) {if (!result) alert('Không load được danh mục nhóm bhyt');}}).responseText;	
	$("#rowed3").setColProp('ID_NHOM_BHYT', { editoptions: { value: xaphuong} });
	$('#ID_NHOM_BHYT').empty();
	create_select("#ID_NHOM_BHYT",xaphuong);
}
function load_select(){
	
        window.nation = $.ajax({url: 'resource.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=2&tables=NhomCLS&id=ID_NhomCLS&name=TenNhom', async: false, success: function(data, result) {if (!result) alert('Không load được danh mục nhóm cận lâm sàn');}}).responseText;
        window.nation2 = $.ajax({url: 'resource.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=0&tables=GD2_DMNHOM_BHYT&id=ID_NHOM_BHYT&name=Ten_Nhom_BHYT', async: false, success: function(data, result) {if (!result) alert('Không load được danh mục nhóm bhyt');}}).responseText;
        window.loaikhampb=$.ajax({url: 'resource.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=2&tables=DM_PhongBan&id=ID_PhongBan&name=TenPhongBan', async: false, success: function(data, result) {if (!result) alert('Không load được danh mục nhóm bhyt');}}).responseText;
        window.donvitinh=$.ajax({url: 'resource.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=2&tables=DM_DonViTinh&id=ID_DonViTinh&name=TenDonViTinh', async: false, success: function(data, result) {if (!result) alert('Không load được danh mục nhóm bhyt');}}).responseText;
        create_select("#ID_NhomCLS",nation);
        create_select("#ID_Nhom_BHYT",nation2);
        create_select("#ID_PhongBan",loaikhampb);
        create_select("#ID_DonViTinh",donvitinh);
        
}
function check_n(){
            window.kiemtra=true;
            phancach="";
            dataToSend ='{';
            key='';
            i=0;
            $('#rowed3').setGridParam({postData: null});
            $('#container').find(':input[type=text],select,textarea,input[type=hidden],input[type=checkbox]:checked,input[type=radio]:checked').each(function(){ 
                if(i>0){
                phancach=","; 
                        }
              dataToSend += phancach + '"'+ this.name + '":"' + this.value +'"' ;
              i++;
                });
               
              var myData = $('#rowed4').jqGrid('getRowData');
                myData= JSON.stringify(myData);        
                dataToSend +=',"pb":'+myData; 
               
                var myData2 = $('#rowed5').jqGrid('getRowData');
                myData2= JSON.stringify(myData2);        
                dataToSend +=',"ts":'+myData2+'}'; 
               dataToSend = jQuery.parseJSON(dataToSend);
                //alertObject(dataToSend);
        
          var check_null = new Array();
                check_null["TenLoaiKham"]=$.trim(dataToSend["TenLoaiKham"]);
                check_null["GiaBaoChoBN"]=$.trim(dataToSend["GiaBaoChoBN"]);
                check_null["GiaThueNgoaiThucHien"]=$.trim(dataToSend["GiaThueNgoaiThucHien"]);
                check_null["ThoiGianTrungBinhThucHien"]=$.trim(dataToSend["ThoiGianTrungBinhThucHien"]);
                check_null["ThoiGianCoKetQua"]=$.trim(dataToSend["ThoiGianCoKetQua"]);
                check_null["PhuThuThucHienTaiNha"]=$.trim(dataToSend["PhuThuThucHienTaiNha"]);
                check_null["GiaBaoHiem"]=$.trim(dataToSend["GiaBaoHiem"]);
                //check_null["GiaPhuThuBenhVien"]=$.trim(dataToSend["GiaPhuThuBenhVien"]);
				check_null["TenBaoHiem"]=$.trim(dataToSend["TenBaoHiem"]);
				check_null["MauBaoHiem"]=$.trim(dataToSend["MauBaoHiem"]);
                 for(var key in check_null){
                    if(check_null[key]==""){
                      $("#"+key).css("background-color","#F4FA58");
                      window.kiemtra=false;
                    }
                    else{$("#"+key).css("background-color","white");                  
                 }
             }
};
function save_button(){
   alertObject(dataToSend);
    if(kiemtra){
		
                  $.post('resource.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=add&hienmaloi=a',dataToSend)
                  .done(function( response) {
                                  temp = response.split(";");
                                  //alert(temp);
                    if(temp[0]==1){
                        var success=false;
                        var new_id="<?php get_text1("luu_khongthanhcong") ?>";
                                               
                    }else{  
                                             $('#rowed3').jqGrid('setGridParam', {datatype:'json'}).trigger('reloadGrid');
                                                
                                                window.id_return=$.trim(temp[1]);
                                                window.nhanvien = $('#ID_LoaiKham :selected').index();                                                
                                                tooltip_message("<?php get_text1("luu_thanhcong") ?>");     
                                                 $("#dialog-form").dialog("close");
                                                // alert(window.id_return);
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
                                          $('#rowed3').jqGrid('setGridParam', {datatype:'json'}).trigger('reloadGrid');                                             
                                              window.id_return= window.id_edit;
                                                window.nhanvien = $('#ID_LoaiKham :selected').index();                                                
                                                 tooltip_message("<?php get_text1("sua_thanhcong") ?>");
                                                 
                                                 $("#dialog-form").dialog("close");
                                                
                    };
                                     
                        });
                }
}
 function init_data(){
    $("#TenLoaiKham").focus();  
       jwerty.key('tab', false);
       jwerty.key('shift+tab', false);
           
       $('#container input[type=text],#container textarea,#container select,#container button,#container input[type=checkbox],#container input[type=radio]').bind("keydown", function(e) {                 
             if (jwerty.is("enter",e)||jwerty.is("tab",e)) {            
                /* FOCUS ELEMENT */
                var inputs = $(this).parents("#container").eq(0).find(":input[type=text],button,textarea,select,:input[type=checkbox],:input[type=radio]");
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
</script>