<!--author:khatm-->
<style type="text/css">
#id_thieu{
	height:160px;
}
    #rowed3 td,#rowed4 td,#rowed5 td{

        font-size:11px!important;	   
    }

    .ui-menu { 
        width: 150px;
        display:none;
        position:absolute;  	 
        box-shadow:0px 0px 3px #333;
        z-index:100000;  
    }

    .ghichu   { 
        border:1px;
        border-style: solid;
        display: inline-block;
    }
    .grid1
    {
        width:180px;
        display:inline-block;
    }
    #menu_toggle{
        font-size:12px;
        padding:5px 0px;
        background:url("js/grid/themes/south-street/images/ui-bg_highlight-hard_15_459e00_1x100.png") repeat-x scroll   #459E00;
        border:#CCC 1px dashed;	
    }

    .demgio{
        color:red;
        cursor:pointer;

    }
    .disable{
        color:red;
        background:#333;

    }
    #gbox_rowed3, #gbox_rowed4, #gbox_rowed5, #gbox_rowed6, #gbox_rowed7{
        margin-left:4px;
        margin-top:5px;
        box-shadow:0px 0px 10px #a0a0a0;
        border:1px solid #919191; 
    }
    #menu { 
        width: 150px!important; 
        display:none; 
        position:absolute;  	 
        box-shadow:0px 0px 3px #333;
        z-index:100000;	 
        background: #ffffff;
    }
    #menu2 { 
        width: 210px!important; 
        display:none; 
        position:absolute;  	 
        box-shadow:0px 0px 3px #333;
        z-index:100000;	 
        background: #ffffff;
    }
    #menu3 { 
        width: 210px!important; 
        display:none; 
        position:absolute;  	 
        box-shadow:0px 0px 3px #333;
        z-index:100000;	 
        background: #ffffff;
    }
    #calendar {
        width: 900px;
        margin: 0 auto;	 
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
        width:80px!important;
        text-decoration:underline;

        /*box-shadow:0px 0px 2px 1px #a0a0a0;*/
    }
    input[type=button].custom_button:focus{	 
        outline:  none;
    } 
    :focus {outline:none;}
    ::-moz-focus-inner {border:0;} 
    .ui-menu { 
    width: 200px;
    display:none;
    position:absolute;       
    box-shadow:0px 0px 3px #333;
    z-index:100000;  
    }
    .col1 {
        background-color: #F8E0EC; 
    }
    .col2 { 
        background-color: #CEF6EC; 
    }
    
</style>


<body> 

   
    <div id="panel_main" style="margin-top:10px;" >  
        <div id="top_main">  
     <div class="form_row">
             
                        <span>
                            <label for="from_day" style="width:17px"> Từ</label>
                            <input type="text"  style="width:109px" name="from_day" id='from_day'>
                            <label for="to_day" style="width:23px"> Đến </label>
                            <input type="text"   style="width:109px" name="to_day" id='to_day'>
<!--                            <input type="hidden" name="from_day_mask" id='from_day_mask'>
                            <input type="hidden" name="to_day_mask" id='to_day_mask'>-->
                            <button type="button" id="xem">Xem</button>
                        </span>
                    </div> 
        </div>
        <div > 
        	<div id="tabs">
               <ul style="margin-left:5px;">
                <li><a href="#tabs-1">DS bệnh nhân đang chờ</a></li>
                <li><a href="#tabs-2">DS lượt khám chưa thanh toán</a></li>  
                <li><a href="#tabs-3">Tổng hợp thu chi</a></li>  
                <li><a href="#tabs-4">Ds các phiếu hoàn trả chỉ định</a></li> 
                <li><a href="#tabs-5">Ds bệnh nhân còn nợ</a></li> 
                <li><a href="#tabs-6">Ds các bill hủy- chỉnh sửa</a></li> 
                <li><a href="#tabs-7">Ds các phiếu thu- chi</a></li> 
                <li><a href="#tabs-8">Ds các đơn thuốc trả lại</a></li> 
              </ul>
                  <div id="tabs-1"> 
                      <table id="rowed4" ></table> 
                      <div style="float:left">
                            <div class="hinhvuong sansanggoi"></div><label class="diengiai">Sẵn sàng gọi</label>
                            <div class="hinhvuong chuasansang"></div><label class="diengiai">Chưa sẵn sàng</label>
                            <div class="hinhvuong quathoigian_max"></div><label class="diengiai">Đã chờ quá 15 phút</label>
                            <div class="hinhvuong quathoigian_min"></div><label class="diengiai">Đã chờ quá 10 phút</label>
                      </div>              
                  </div>
              	  <div id="tabs-2">            
                   <table id="rowed3" ></table>
             	  </div>
                  <div id="tabs-3">
                    <table id="rowed5"></table>
                    <div id="prowed5">
                        <div id="soluot" style="margin-left:40px">Số lượt= <span id="luot"></span>
                        <input id="tiendichvu" class="disable" type="text" value="0" readonly disabled style="margin-left:550px;width:65px;background:#4CA109;border:1px solid #327E04; color: #FFFFFF;font-weight: bold;"   /> 
                        <input id="tiengiamgia" class="disable" type="text" value="0" readonly disabled style="width:65px;background:#4CA109;border:1px solid #327E04; color: #FFFFFF;font-weight: bold;" />
                        <input id="tienhuychidinh" class="disable" type="text" value="0" readonly disabled style="width:120px;background:#4CA109;border:1px solid #327E04; color: #FFFFFF;font-weight: bold;" />
                        <input id="tiennocu" class="disable" type="text" value="0" readonly disabled style="width:68px;background:#4CA109;border:1px solid #327E04; color: #FFFFFF;font-weight: bold;" />
                        <input id="tientongphaitra" class="disable" type="text" value="0" readonly disabled style="width:68px;background:#4CA109;border:1px solid #327E04; color: #FFFFFF;font-weight: bold;" />
                        <input id="tiendatra" class="disable" type="text" value="0" readonly disabled style="width:68px;background:#4CA109;border:1px solid #327E04; color: #FFFFFF;font-weight: bold;" />
                        <input id="tiennomoi" class="disable" type="text" value="0" readonly disabled style="width:68px;background:#4CA109;border:1px solid #327E04; color: #FFFFFF;font-weight: bold;" />
                        </div>
                    </div> 
                    <div style="float:left">
                            
                            <div class="hinhvuong quathoigian_max"></div><label class="diengiai">Còn lại >0</label>
                            <div class="hinhvuong quathoigian_min"></div><label class="diengiai">Còn lại <0</label>
                      </div> 
                  </div>
                  <div id="tabs-4">
                    <table id="rowed6"></table>
                    <div id="prowed6">
                        <div id="soluot" style="margin-left:40px">Số lượt= <span id="luot2"></span>
                        <input id="tongtienhuy2" class="disable" type="text" value="0" readonly disabled style="margin-left:550px;text-align:right;width:75px;background:#4CA109;border:1px solid #327E04; color: #FFFFFF;font-weight: bold;"   /> 
                        <input id="tiendatralai2" class="disable" type="text" value="0" readonly disabled style="margin-left:245px;text-align:right;width:75px;background:#4CA109;border:1px solid #327E04; color: #FFFFFF;font-weight: bold;" />
                        
                        </div>
                    </div> 
                    <table id="rowed7"></table>
                    <div id="prowed7">
                        <input id="phithuchien" class="disable" type="text" value="0" readonly disabled style="margin-left:409px;text-align:right;width:202px;background:#4CA109;border:1px solid #327E04; color: #FFFFFF;font-weight: bold;" />
                        <input id="sotienhuy" class="disable" type="text" value="0" readonly disabled style="width:200px;background:#4CA109;text-align:right;border:1px solid #327E04; color: #FFFFFF;font-weight: bold;" />
                    </div>
                  </div>
                  <div id="tabs-5"> 
                           <table id="rowed8"></table> 
                           <div id="prowed8">
                                <div id="soca" style="margin-left:40px">Số ca= <span id="ca"></span>
                                    <input id="nocuoi2" class="disable" type="text" value="0" readonly disabled style="margin-left:950px;text-align:right;width:172px;background:#4CA109;border:1px solid #327E04; color: #FFFFFF;font-weight: bold;"   /> 
                                </div>
                           </div>   
                           <table id="rowed9"></table> 
                           <div id="prowed9">
                                 <div id="sodong" style="margin-left:40px">Số dòng= <span id="dong"></span>
                                    <input id="tongphatsinh2" class="disable" type="text" value="0" readonly disabled style="margin-left:453px;text-align:right;width:106px;background:#4CA109;border:1px solid #327E04; color: #FFFFFF;font-weight: bold;"   /> 
                                    <input id="phuthu2" class="disable" type="text" value="0" readonly disabled style="text-align:right;width:102px;background:#4CA109;border:1px solid #327E04; color: #FFFFFF;font-weight: bold;"   /> 
                                    <input id="sotienthu2" class="disable" type="text" value="0" readonly disabled style="margin-left:110px;text-align:right;width:102px;background:#4CA109;border:1px solid #327E04; color: #FFFFFF;font-weight: bold;"   /> 
                                    <input id="tienmiengiam2" class="disable" type="text" value="0" readonly disabled style="text-align:right;width:102px;background:#4CA109;border:1px solid #327E04; color: #FFFFFF;font-weight: bold;"   /> 
                                </div>
                           </div>                   
                  </div>
                  <div id="tabs-6">
                     <table id="rowed10"></table>
                     <div id="prowed10">
                        <div class="hinhvuong sansanggoi"></div><label class="diengiai">Bill chính thức</label>
                            <div class="hinhvuong" style="background-color:#848484"></div><label class="diengiai">Bill hủy</label>
                            <div class="hinhvuong chuasansang"></div><label class="diengiai">Bill chỉnh sửa</label>
                     </div>
                     <table id="rowed11"></table>
                  </div>
                  <div id="tabs-7">
                    <div>
                        <label>Tổng thu:</label>
                        <input id="tongthu" disabled type="text"style="text-align:right"/>
                        <label>Tổng chi:</label>
                        <input id="tongchi" disabled style="text-align:right"type="text"/>
                        <label>Còn lại:</label>
                        <input id="conlai" disabled style="text-align:right"type="text"/>
                    </div>
                    <table id="rowed12"></table>
                    <div id="prowed12">
                                 <div id="sodong2" style="margin-left:40px">Số phiếu= <span id="dong2"></span>
                                    <input id="tongthu2" class="disable" type="text" value="0" readonly disabled style="margin-left:453px;text-align:right;width:106px;background:#4CA109;border:1px solid #327E04; color: #FFFFFF;font-weight: bold;"   /> 
                                    <input id="tongchi2" class="disable" type="text" value="0" readonly disabled style="text-align:right;width:102px;background:#4CA109;border:1px solid #327E04; color: #FFFFFF;font-weight: bold;"   /> 
                                 </div>
                    </div>        
                  </div>
                  <div id="tabs-8">
                    <table id="rowed13"></table>
                  </div>
			</div>
        </div>
    </div>
    
    <ul id="menu" > 
        <li id='vangmat'><a id="vangmat1" href="#"><span class="ui-icon ui-icon-trash"></span>Vắng mặt</a></li>
        <li id='huyxephang'><a id="huyxephang1" href="#"><span class="ui-icon ui-icon-trash"></span>Hủy xếp hàng</a></li>
        <li id='hentrakq'><a id="hentrakq1" href="#"><span class="ui-icon ui-icon-trash"></span>Giờ hẹn trả KQ</a></li>
        <li id='thongtinbn'><a id="thongtinbn1" href="#"><span class="ui-icon ui-icon-person"></span>Thông tin bệnh nhân</a></li>
        <li id='thongtinlk'><a id="thongtinlk1" href="#"><span class="ui-icon ui-icon-pencil"></span>Thông tin lượt khám</a></li>
        <li id='dungxephang'><a id="dungxephang1" href="#"><span class="ui-icon ui-icon-trash"></span>Dừng xếp hàng</a></li>
        <li id='lammoi'><a id="lammoi1" href="#"><span class="ui-icon ui-icon-trash"></span>Làm mới thông tin(F5)</a></li>
        <li id='laptamthu'><a id="laptamthu1" href="#"><span class="ui-icon ui-icon-trash"></span>Lập tạm thu</a></li>
    </ul>
</body>
</html> 

<script type="text/javascript">
    jQuery(document).ready(function() {
        window.loaikham=$.ajax({url: 'resource.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=2&tables=DM_LoaiKham&id=ID_LoaiKham&name=TenLoaiKham', async: false, success: function(data, result) {if (!result) alert('Không load được danh mục phòng ban');}}).responseText;
         window.nhanvien=$.ajax({url: 'resource.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=2&tables=DM_NhanVien&id=ID_NhanVien&name=NickName', async: false, success: function(data, result) {if (!result) alert('Không load được danh mục phòng ban');}}).responseText;
        temp = jQuery(window).height()+490 ;
        $("#panel_main").css("height", temp + "px");
        $("#panel_main").fadeIn(1000);
        window.default_id_tang=2;
        $("#from_day").val(gio("current"));
         $("#to_day").val(gio("current"));
         window._tungay='';
         window._denngay='';
         window.tenbenhnhan3="";
        $("#xem").button();
        $( "#tabs" ).tabs({
		
     	 <!--heightStyle:"fill", -->
        

  		 
		 });
      //  create_layout();
     	  create_grid();
          create_grid2();
          create_grid3();
          create_grid4();
          create_grid5();
          create_grid6();
         create_grid7();
         create_grid8();
         create_grid9();
         create_grid10();
     //$('#rowed3').jqGrid('setCaption', 'Danh sách chưa thanh toán '+  window.rowcount_luoichuathanhtoan);
        resize_control();


        $(window).resize(function() {
            temp = jQuery(window).height() - 50;
            $("#panel_main").css("height", temp + "px");
            resize_control();
        })
        
        
        
         $("#from_day").datepicker({
            dateFormat: "yy-mm-dd"
        });
        $("#to_day").datepicker({
            
            dateFormat: "yy-mm-dd"
        });
      // $('#rowed3').jqGrid('setCaption', 'Danh sách chưa thanh toán '+ $("#rowed3").jqGrid('getGridParam', 'records'));
    })
    
    function create_layout() {
        $('#panel_main').layout({
            resizerClass: 'ui-state-default'
                    , north: {
                resizable: true
                        , size: "5%"
                        , spacing_closed: 27
                        , togglerLength_closed: 85
                        , togglerAlign_closed: "center"
                        , togglerContent_closed: "<div id='menu_toggle'>X<BR>O<BR>N<BR>G</div>"
                        , togglerTip_closed: "Open & Pin Menu"
                        , sliderTip: "Slide Open Menu"
                        , slideTrigger_open: "mouseover"
                        , fxSettings_close: {easing: "easeOutQuint"}
                , onresize_end: function() {
                    resize_control();

                }
                , onopen_end: function() {


                }
                , onclose_end: function() {


                }

            }
            , center: {
                resizable: true
                        , size: "65%"

                        , fxName: "drop"		// none, slide, drop, scale
                        , fxSpeed_open: 450
                        , fxSpeed_close: 450
                        , fxSettings_open: {easing: "easeInQuint"}
                , fxSettings_close: {easing: "easeOutQuint"}

                , onresize_end: function() {
                    resize_control();
                }
                , onopen_end: function() {


                }
                , onclose_end: function() {



                }
            }
        });
    }

     
    function resize_control() {
      //  cao_left = $(".left_col").height() / 2 - 82;
      //  $("#rowed3,#rowed4 ").setGridWidth($(".left_col").width() - 11);
      //  $("#rowed3,#rowed4 ").setGridHeight(cao_left);

		$("#rowed3").setGridWidth($(window).width()-50);
		$("#rowed3").setGridHeight($(window).height()-$("#top_main").height()-$(".ui-tabs-nav").height()-110);
        $("#rowed4").setGridWidth($(window).width()-50);
        $("#rowed4").setGridHeight($(window).height()-$("#top_main").height()-$(".ui-tabs-nav").height()-110);
        $("#rowed5").setGridWidth($(window).width()-50);
        $("#rowed5").setGridHeight($(window).height()-$("#top_main").height()-$(".ui-tabs-nav").height()-130);
         $("#rowed6").setGridWidth($(window).width()-50);
        $("#rowed6").setGridHeight($(window).height()-$("#top_main").height()-$(".ui-tabs-nav").height()-230);
        $("#rowed7").setGridWidth($(window).width()-50);
        $("#rowed7").setGridHeight($(window).height()-$("#top_main").height()-$(".ui-tabs-nav").height()-450);
        $("#rowed8").setGridWidth($(window).width()-50);
        $("#rowed8").setGridHeight($(window).height()-$("#top_main").height()-$(".ui-tabs-nav").height()-300);
        $("#rowed9").setGridWidth($(window).width()-50);
        $("#rowed9").setGridHeight($(window).height()-$("#top_main").height()-$(".ui-tabs-nav").height()-400);
        $("#rowed10").setGridWidth($(window).width()-50);
        $("#rowed10").setGridHeight($(window).height()-$("#top_main").height()-$(".ui-tabs-nav").height()-230);
        $("#rowed11").setGridWidth($(window).width()-50);
        $("#rowed11").setGridHeight($(window).height()-$("#top_main").height()-$(".ui-tabs-nav").height()-400);
        $("#rowed12").setGridWidth($(window).width()-50);
        $("#rowed12").setGridHeight($(window).height()-$("#top_main").height()-$(".ui-tabs-nav").height()-110);
    }

 function create_grid() {
        window.kiemtrasearch = true;
        $("#rowed3").jqGrid({
            url: 'resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_ds_chuathanhtoan',
            datatype: "json",
            colNames: ['LuotKham', '<?php get_text1("maBN") ?>', '<?php get_text1("hoten") ?>',
        '<?php get_text1("tuoi") ?>', '<?php get_text1("gioitinh") ?>',
        'Phân loại khám','Đối tượng','Giờ đến', 'Ghi chú', 'Trạng thái', 'Sansang', 'NotesStatus', 'ID_BenhNhan','Điện thoại','Hồ sơ'],
            colModel: [
                {name: 'ID_LuotKham', index: 'ID_LuotKham', width: "0%", editable: false, align: 'left', hidden: true},
                {name: 'MaBenhNhan', index: 'MaBenhNhan', search: true, width: "1%", editable: false, align: 'left', hidden: false},
                {name: 'TenBenhNhan',  index: 'TenBenhNhan', search: true, width: "2%", editable: false, align: 'left', hidden: false},
                {name: 'Tuoi', index: 'Tuoi', search: false, width: "1%", editable: false, align: 'left', hidden: false},
                {name: 'GioiTinh', index: 'GioiTinh', search: false, width: "1%", editable: false, align: 'left', hidden: false},
                {name: 'TenPhanLoaiKham', index: 'TenPhanLoaiKham', search: false, width: "2%", editable: false, align: 'left', hidden: false},
                {name: 'LoaiDoiTuongKham', index: 'LoaiDoiTuongKham', search: false, width: "1%", editable: false, align: 'left', hidden: false},
                {name: 'ThoiGianVaoKham', index: 'ThoiGianVaoKham', search: false, width: "1%", editable: false, align: 'center', hidden: false, edittype: "text", editoptions: {
                        dataInit: function(element)
                        {
                            $(element).timeEntry({show24Hours: true, spinnerImage: ''});
                        }
                    }
                },
                
                
                {name: 'GhiChu', index: 'GhiChu', width: "1%", search: false, editable: false, align: 'left', hidden: false},
                
                {name: 'ID_TrangThai', index: 'ID_TrangThai', search: false, width: "0%", editable: false, align: 'left', hidden: true},
                {name: 'SanSangGoiVaoKham', index: 'SanSangGoiVaoKham', search: false, width: "0%", editable: false, align: 'left', hidden: true},
                {name: 'NotesStatus', index: 'NotesStatus', width: "0%", hidden: true},
                {name: 'ID_BenhNhan', index: 'ID_BenhNhan', width: "0%", hidden: true},
                   {name: 'Dienthoai', index: 'Dienthoai', width: "2%", hidden: false},
                     {name: 'HoanTatHoSo', index: 'HoanTatHoSo', width: "2%", hidden: false},
                
                
                
            ],
            loadonce: false,
            scroll: false,
            modal: true,
            shrinkToFit: true,
            cmTemplate: {sortable: false},
            rowNum: 10000000,
            rowList: [],
            pager: '#prowed3',
            sortname: 'ThoiGianVaoKham',
            height: 100,
            width: 100,
            viewrecords: true,
            ignoreCase: true,
            sortorder: "desc",
            onSelectRow: function(id) {

             /*   if (id !== lastsel) {
                    $("#rowed3").jqGrid('restoreRow', lastsel);
                    $("#rowed3").jqGrid('editRow', id, true);
                    lastsel = id;
                } else {
                    $("#rowed3").jqGrid('restoreRow', lastsel);
                    lastsel = "";

                }*/
            },
           ondblClickRow: function(rowId) {
         var rowData = jQuery(this).getRowData(rowId); 
            
             
               
                 var ID_LuotKham = rowData['ID_LuotKham'];
                 var id_benhnhan = rowData['ID_BenhNhan'];
                 var MaBenhNhan = rowData['MaBenhNhan'];
                 var TenBenhNhan = rowData['TenBenhNhan'];
             parent.postMessage('thutrano_add;chitietthungan;'+ID_LuotKham+';'+id_benhnhan+';add;'+MaBenhNhan+';'+TenBenhNhan, "*");
               //  dialog_main("Chi tiết viện phí " + ' BN '+TenBenhNhan+' - '+MaBenhNhan, 98, 100, 567433265743657, "resource.php?module=<?=$modules?>&view=<?=$view?>&action=ChiTietThuNgan_1&type=test&id_form=22&ID_LuotKham="+ID_LuotKham+"&idbenhnhan="+id_benhnhan+"&oper=add");
             
            },
            onselect: function(rowId, rowIndex, columnIndex) {
                // $(".ui-icon-pencil").trigger('click');
                alert(rowId("MaBenhNhan"));
                alert(rowIndex);
                alert(columnIndex);
            },
            onRightClickRow: function(rowid, iRow, iCol, e) {

                var grid = jQuery('#rowed3');
                var colModel = grid.getGridParam('colModel');

                var colName = colModel[iCol].name;
                var colIndex = colModel[iCol].index;
                var rowData = jQuery('#rowed3').getRowData(rowid);
                window.rowData_grdangcho = rowData;

                if ($.trim(rowData[colName]) != "") {
                    window.rowid_danhcho = rowid;
                    window.from = colModel[iCol].name;
                    if ($("#menu").width() + e.pageX > $(document).width()) {
                        $("#menu").css('left', e.pageX - $("#menu").width() + "px");
                    } else {
                        $("#menu").css('left', e.pageX + "px");
                    }
                    if ($("#menu").height() + 30 + e.pageY > $(document).height()) {
                        $("#menu").css('top', e.pageY - $("#menu").height() + "px");
                    } else {
                        $("#menu").css('top', e.pageY + "px");
                    }
                    $("#menu").show(300);

                }

                $(document).bind("contextmenu", function(e) {
                    return false;
                });
                //kiểm tra đang xếp hàng thì disable và ngược lại 2 menu s top và start
                if (powerXepHang_luoidangcho == 1)
                {
                    $("#playxephang").unbind("click");
                    $("#stopxephang").bind("click", function(e) {
                        timer_danhsach("stop");
                        timer_title_danhsach("stop");
                    })
                    $("#stopxephang").removeClass("ui-state-disabled");
                    $("#playxephang").addClass("ui-state-disabled");
                } else
                {
                    $("#stopxephang").unbind("click");
                    $("#playxephang").bind("click", function(e) {
                        // đoạn này dùng để reset các timer tránh tạo nhiều timer id gây lỗi
                        var id = window.setTimeout(function() {
                        }, 0);
                        while (id--) {
                            window.clearTimeout(id); // will do nothing if no timeout with id is present
                        }
                        //hết đoạn này dùng để reset các timer tránh tạo nhiều timer id gây lỗi
                        timer_danhsach("start");
                        timer_title_danhsach("start");


                    })
                    $("#stopxephang").addClass("ui-state-disabled");
                    $("#playxephang").removeClass("ui-state-disabled");
                }
                //kiểm tra sẫn sàng hay chưa để hiển thị menu
                var SanSangGoiVaoKham = window.rowData_grdangcho["SanSangGoiVaoKham"];
                if (SanSangGoiVaoKham == 1)
                {
                    //alert(SanSangGoiVaoKham);
                    $("#chuasansang span.ui-icon").removeClass("ui-icon-closethick").addClass("ui-icon-help");
                    $("#chuasansang span.menu_text").html('Chưa sẵn sàng');
                }
                else
                {
                    //  alert(SanSangGoiVaoKham);

                    $("#chuasansang span.ui-icon ").removeClass("ui-icon-help").addClass("ui-icon-closethick");
                    $("#chuasansang span.menu_text").html('Đã sẵn sàng');
                }
                //

            },
            loadComplete: function(data) {
                var ids = $('#rowed3').jqGrid('getDataIDs');
                for (i = 0; i < ids.length; i++) {
                    var rowData = jQuery('#rowed3').getRowData(ids[i]);
                    
                    window.rowcount_luoichuathanhtoan = $("#rowed3").getGridParam("reccount");

                    if (rowData["NotesStatus"] == 1) {
                        var _class = "do";

                    } else if (rowData["NotesStatus"] == 2) {
                        var _class = "cam";

                    } else if (rowData["NotesStatus"] == 0) {
                        var _class = "xanh";

                    }
                    ghichu = "<input class='custom_button " + _class + "' style='height:22px;width:50px;' type='button' value='G.chú' onclick=\"moghichu('" + rowData["ID_BenhNhan"] + "','" + rowData["TenBenhNhan"] + "');\" />";
                    $("#rowed3").jqGrid('setRowData', ids[i], {GhiChu: ghichu});
                }
            },
            caption: "Ds chưa thanh toán"
        });
        $("#rowed3").jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});
        $("#rowed3").jqGrid('navGrid', "#prowed3", {add: false, edit: false, del: false, search: false, refresh: true, closeAfterEdit: true, clearAfterAdd: true, navkeys: [true, 38, 40], closeOnEscape: true});

    }
 function moghichu(id_benhnhan, hoten) {
        elem = 1 + Math.floor(Math.random() * 1000000000);
        dialog_main("Ghi chú của bệnh nhân: " + hoten, 100, 70, elem, 'resource.php?module=hanhchinh&view=ghi_chu&id_form=230&idbenhnhan=' + id_benhnhan)
    }
     $( "#xem" ).click(function() {
       /*var fd= $( '#from_day' ).datepicker( "getDate" );
       var d= $( '#from_day' ).val();*/
      // var td= $( '#to_day' ).datepicker( "getDate" );
			//alert($( '#from_day' ).val());
                     //   alert($( '#to_day' ).val());
                        
              // $("#rowed3").jqGrid('setGridParam',{url:'resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_ds_chuathanhtoan&tu_ngay='+ $( '#from_day' ).val()+'&den_ngay='+$( '#to_day' ).val()}).trigger('reloadGrid');
              //$("#rowed5").jqGrid('setGridParam',{url:'resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_tonghopthuchi&tungay='+ $( '#from_day' ).val()+'&denngay='+$( '#to_day' ).val()+" 23:59",datatype:'json'}).trigger('reloadGrid');
               //$("#rowed6").jqGrid('setGridParam',{url:'resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_dscacphieuhoantrachidinh&tungay='+ $( '#from_day' ).val()+'&denngay='+$( '#to_day' ).val()+" 23:59",datatype:'json'}).trigger('reloadGrid');
               //$("#rowed8").jqGrid('setGridParam',{url:'resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_benhnhanconno&denngay='+$( '#to_day' ).val(),datatype:'json'}).trigger('reloadGrid');
              // $("#rowed10").jqGrid('setGridParam',{url:'resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_billhuychinhsua&tungay='+ $( '#from_day' ).val()+'&denngay='+$( '#to_day' ).val()+" 23:59",datatype:'json'}).trigger('reloadGrid');
              $("#rowed12").jqGrid('setGridParam',{url:'resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_cacphieuthuchi&tungay='+ $( '#from_day' ).val()+'&denngay='+$( '#to_day' ).val()+" 23:59",datatype:'json'}).trigger('reloadGrid');
					var d=$("#rowed3").jqGrid('getGridParam', 'records');
					$("#rowed3").jqGrid('setGridParam',{url:'resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_ds_chuathanhtoan&tungay='+ $( '#from_day' ).val()+'&denngay='+$( '#to_day' ).val()+" 23:59",datatype:'json'}).trigger('reloadGrid');
					
 			 $("#rowed3").jqGrid('setCaption', 'Danh sách chưa thanh toán '+ d);
	});
function create_grid2() {
          $("#rowed4").jqGrid({
            url: 'resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_rowed4&id_tang=',
            datatype: "json",
            colNames: ['ID','LuotKham', 'Mã BN', 'Họ tên',
                'Tuổi', 'Giới',
                'Loại khám', 'Hẹn lúc', 'Giờ đến',
                'BS được y/cầu', 'BS trước', 'Ghi chú', 'Có mặt', 'DHST', 'BS khám'],
            colModel: [
            {name: 'ID_BenhNhan', index: 'ID_BenhNhan', width: "0%", editable: false, align: 'left', hidden: true},
                {name: 'ID_LuotKham', index: 'ID_LuotKham', width: "0%", editable: false, align: 'left', hidden: true},
                {name: 'MaBenhNhan', index: 'MaBenhNhan', search: true, width: "1%", editable: false, align: 'left', hidden: false},
                {name: 'TenBenhNhan',  index: 'TenBenhNhan', search: true, width: "3%", editable: false, align: 'left', hidden: false},
                {name: 'Tuoi', index: 'Tuoi', search: false, width: "1%", editable: false, align: 'left', hidden: false},
                {name: 'GioiTinh', index: 'GioiTinh', search: false, width: "1%", editable: false, align: 'left', hidden: false},
                {name: 'TenPhanLoaiKham', index: 'TenPhanLoaiKham', search: false, width: "2%", editable: false, align: 'left', hidden: false},
                
                {name: 'GioHenKham', index: 'GioHenKham', search: false, width: "1%", editable: false, align: 'left', hidden: false},
                {name: 'ThoiGianVaoKham', formatter: kiemtra_dk_tg, index: 'ThoiGianVaoKham', search: false, width: "1%", editable: false, align: 'center', hidden: false, edittype: "text", editoptions: {
                        dataInit: function(element)
                        {
                            $(element).timeEntry({show24Hours: true, spinnerImage: ''});
                        }
                    }
                },
                {name: 'TenBSYeuCau', index: 'TenBSYeuCau', search: false, width: "1%", editable: false, align: 'left', hidden: false},
                {name: 'BSTruoc', index: 'BSTruoc', search: false, width: "1%", editable: false, align: 'left', hidden: false},
                {name: 'GhiChu', index: 'GhiChu', width: "1%", search: false, editable: false, align: 'left', hidden: false},
                {name: 'SanSangGoiVaoKham', index: 'SanSangGoiVaoKham', search: false, width: "1%", editable: false, align: 'left', hidden: false,edittype:"checkbox",editoptions: {value:"1:0"},formatter:"checkbox",align:"center"},
                {name: 'LayDauHieuSinhTon', index: 'LayDauHieuSinhTon', search: false, width: "1%", editable: false, align: 'left', hidden: false,edittype:"checkbox",editoptions: {value:"1:0"},formatter:"checkbox",align:"center"},
                {name: 'ID_TrangThai', index: 'ID_TrangThai', search: false, width: "1%", editable: false, align: 'left', hidden: false},
                
                
            ],
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
        sortname: 'nickname',
        height:100,
        width: 100,
        viewrecords: true,  
        ignoreCase:true,
        shrinkToFit:true,
        stringResult:true,
        sortorder: "asc",
        
            onRightClickRow: function(rowid, iRow, iCol, e) {              
                    if ($("#menu").width() + e.pageX > $(document).width()) {
                        $("#menu").css('left', e.pageX - $("#menu").width() + "px");
                    } else {
                        $("#menu").css('left', e.pageX + "px");
                    }
                    if ($("#menu").height() + e.pageY + 30 > $(document).height()) {
                        $("#menu").css('top', e.pageY  - $("#menu").height() + "px");
                    } else {
                        $("#menu").css('top', e.pageY + "px");
                    }
                    $("#menu").show(300);

                    $(document).bind("contextmenu", function(e) {
                        return false;
                    });
                //$("#stopxephang").addClass("disable");
                
            },
            loadComplete: function(data,rowid) {    
               var ids = $('#rowed4').jqGrid('getDataIDs');
                for (i = 0; i < ids.length; i++) {
                    var rowData = jQuery('#rowed4').getRowData(ids[i]);
                    kiemtra_dk_tg_load_completed(rowData, ids[i], "ThoiGianVaoKham;ID_TrangThai;TenBenhNhan;SanSangGoiVaoKham;NotesStatus");
                    window.rowcount_luoidangcho = $("#rowed3").getGridParam("reccount");

                    if (rowData["NotesStatus"] == 1) {
                        var _class = "do";

                    } else if (rowData["NotesStatus"] == 2) {
                        var _class = "cam";

                    } else if (rowData["NotesStatus"] == 0) {
                        var _class = "xanh";

                    }
                    ghichu = "<input class='custom_button " + _class + "' style='height:22px;width:50px;color:blue' type='button' value='G.chú' onclick=\"moghichu('" + rowData["ID_BenhNhan"] + "','" + rowData["TenBenhNhan"] + "');\" />";
                    $("#rowed4").jqGrid('setRowData', ids[i], {GhiChu: ghichu});
                    }
                },    
            onSelectRow: function(id){      
                //alert(id);
                window.id_kham=id;
                },
             onRightClickRow: function(rowid, iRow, iCol, e) { 
                var rowData2 = jQuery('#rowed4').getRowData(rowid);
                window.rowData_grdangkham2 = rowData2;
               // alert(rowData_grdangkham2);
                    if ($("#menu").width() + e.pageX > $(document).width()) {
                        $("#menu").css('left', e.pageX - $("#menu").width() + "px");
                    } else {
                        $("#menu").css('left', e.pageX + "px");
                    }
                    if ($("#menu").height() + e.pageY + 30 > $(document).height()) {
                        $("#menu").css('top', e.pageY  - $("#menu").height() + "px");
                    } else {
                        $("#menu").css('top', e.pageY + "px");
                    }
                    $("#menu").show(300);

                    $(document).bind("contextmenu", function(e) {
                        return false;
                    });
                //$("#stopxephang").addClass("disable");
                
            },
            ondblClickRow: function(rowId, rowIndex, columnIndex) {
            },
            caption: "Danh sách kết quả xét nghiệm"
        });
    }
    $("#menu").menu();
     $(document).bind("mouseup", function(e) {
    $("#menu").hide();
});
    function kiemtra_dk_tg(cellvalue, options, rowObject) {

        var today = new Date();
        
        return cellvalue;
    }
     function kiemtra_dk_tg_load_completed(cellvalue, rowId, mangthamso) {
        mangthamso = mangthamso.split(";");
        var now1 = new Date().toTimeString();
        var dauvaotam = cellvalue[mangthamso[0]].split(":");
        var dauvao = Date.parse('<?php echo date("Y-m-d") ?>,' + cellvalue[mangthamso[0]]);
        var now = new Date();
        var diffMs = now - dauvao;
        var diffMins = Math.round(((diffMs % 86400000) % 3600000) / 60000);
        var diffHrs = Math.round((diffMs % 86400000) / 3600000); // hours 

        diffMins = diffMins + diffHrs * 60;
        //console.log(dauvao + "  " + diffHrs + "\n");
        //console.log(mangthamso[2]);

        if (diffMins >= 15) {
            $("#rowed4").setCell(rowId, mangthamso[0], '', {background: 'red'});
            //return  '<span style="background:red">' + cellvalue + '*' + diffMins + "</span>";            
            //return  '<span style="background:yellow">' + cellvalue+ "</span>";   
        } else {

            if (diffMins >= 10) {
                $("#rowed4").setCell(rowId, mangthamso[0], '', {background: 'yellow'});
                //    return '<span style="background:yellow">' + cellvalue + '**' + diffMins + "</span>";
            } else {
                // $("#rowed3").setCell(rowId , mangthamso[0], '', { background: '#FFF'});
            }
        }

        // alert (cellvalue[mangthamso[3]]);

        if (cellvalue[mangthamso[1]] == 'DangCho' && cellvalue[mangthamso[3]] == '1') {
            $("#rowed4").setCell(rowId, mangthamso[2], '', {background: '#7be75a'});
        } else {
            //$("#rowed3").setCell(rowId , 'TenBenhNhan', '', { background: '#fff'});
        }
    }
    $("#huyxephang").bind("click", function(e) {
        var mabenhnhan = window.rowData_grdangcho["MaBenhNhan"];
        var iD_LuotKham = window.rowData_grdangcho["ID_LuotKham"];
        // $.post('resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=controller&oper=update_huyxephang&mabenhnhan='+mabenhnhan+'&id_luotkham='+iD_LuotKham)
        $.post('resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=controller&oper=update_huyxephang&mabenhnhan=' + mabenhnhan + '&id_luotkham=' + iD_LuotKham).done(function(data)
        {
            if ($.trim(data) == '') {
                tooltip_message("<?php get_text1("sua_thanhcong") ?>");
                $("#rowed3").trigger("reloadGrid");
            }
            else {
                tooltip_message("<?php get_text1("sua_khongthanhcong") ?>");
            }
        });
    })
    $("#thongtinbn").click(function(e){
        idbenhnhan2=rowData_grdangkham2["ID_BenhNhan"];
        tenBenhNhan2=rowData_grdangkham2["TenBenhNhan"];
      //alert(idbenhnhan);
        parent.postMessage("editbenhnhan;"+idbenhnhan2+";"+tenBenhNhan2, "*");

    })
     $("#thongtinlk").click(function(e){
        tenBenhNhan=rowData_grdangkham2["TenBenhNhan"];
       ID_LuotKham=rowData_grdangkham2["ID_LuotKham"];
        parent.postMessage("editluotkham;"+ID_LuotKham+";"+tenBenhNhan, "*");
    })
     $("#lammoi").click(function(){
        //alert();
        $("#rowed4").jqGrid('setGridParam',{url:'resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_rowed4&id_tang=',datatype:'json'}).trigger('reloadGrid');
                    
    })
function create_grid3(){    
    $("#rowed5").jqGrid({
    url:"resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_tonghopthuchi&tungay="+$( '#from_day' ).val()+"&denngay="+$( '#to_day' ).val()+" 23:59",
    datatype: "json",   
    colNames:['Mã BN','Họ(tên lót)','Tên','Tuổi','Điện thoại','Địa chỉ','Dịch vụ + Thuốc','Giảm giá','Hủy chỉ định / Thuốc trả lại','Nợ cũ','Tổng phải trả','Đã trả','Nợ mới'],
    colModel:[
        {name:'MaBenhNhan',index:'MaBenhNhan', width:"1%", editable:false,align:'left',hidden:false},    
        {name:'HoLotBenhNhan',index:'HoLotBenhNhan', width:"2%", editable:false,align:'left',hidden:false}, 
        {name:'TenBenhNhan',index:'TenBenhNhan', width:"1%", editable:true,align:'left',hidden:false},
        {name:'Tuoi',index:'Tuoi', width:"1%", editable:true,align:'left',hidden:false},
        {name:'DienThoai1',index:'DienThoai1', width:"1%", editable:true,align:'left',hidden:false},
        {name:'DiaChi',index:'DiaChi', width:"3%", editable:true,align:'left',hidden:false},
        {name:'TongTienPhaiTra',index:'TongTienPhaiTra', width:"1%", editable:true,align:'right',hidden:false},
        {name:'GiamGia',index:'GiamGia', width:"1%", editable:true,align:'right',hidden:false},
        {name:'TienHuyChiDinh',index:'TienHuyChiDinh', width:"2%", editable:true,align:'right',hidden:false},
        {name:'NoCu',index:'NoCu', width:"1%", editable:true,align:'right',hidden:false},
        {name:'TongPhaiTra',index:'TongPhaiTra',classes: "col1", width:"1%", editable:true,align:'right',hidden:false}, 
        {name:'SoTienThanhToan',index:'SoTienThanhToan',classes: "col2", width:"1%", editable:true,align:'right',hidden:false}, 
        {name:'NoCuoi',index:'NoCuoi', width:"1%", editable:true,align:'right',hidden:false}, 
    ],  
        loadonce: true,
        scroll: false,       
        modal:true,      
        rowNum: 1000,
        rowList:[],
        pager: '#prowed5',
        sortname: 'MaBenhNhan',
        height:100,
        width: 100,
        viewrecords: true,  
        ignoreCase:true,
        shrinkToFit:true,
        viewrecords: false, 
        ignoreCase:true,
        pginput:false,
        pgbuttons:false,
        
        
    //hoverrows:false,
    //jsonReader:{repeatitems:true,subgrid:{repeatitems:false}},    
        sortorder: "desc",
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
        loadComplete: function(data,rowid) {  
               var ids = $('#rowed5').jqGrid('getDataIDs');
               var allRowsInGrid = $('#rowed5').jqGrid('getRowData');
                for (i = 0; i < ids.length; i++) {
                   for(j=0;j<allRowsInGrid.length;j++){
                     tongphaitra = parseInt(allRowsInGrid[i].TongTienPhaiTra)+parseInt(allRowsInGrid[i].NoCu)-parseInt(allRowsInGrid[i].GiamGia)-parseInt(allRowsInGrid[i].TienHuyChiDinh);
                     $("#rowed5").jqGrid('setRowData', ids[i], {TongPhaiTra: tongphaitra});
                     /*if(allRowsInGrid[j].NoCuoi<0){
                        $("#rowed5").jqGrid('setCell',ids[i],"NoCuoi","",{'background-color':'yellow'});
                     }else if(allRowsInGrid[j].NoCuoi>0){
                       // $("#rowed5").jqGrid('setCell',ids[i],"NoCuoi","",{'background-color':'red'});
                     }
*/                    }   
                     
               }
               $("#luot").html($('#rowed5').jqGrid('getGridParam','records'));
               tinhtien();
        },    
        caption: "Tổng hợp thu chi"
    }); 
}
function tinhtien(){
                            var tmp5 = $("#rowed5").jqGrid('getDataIDs'); 
                            var tien_dv =0;
                            var tien_gg =0;
                            var tien_huy =0;
                            var tien_nocu =0;
                            var tien_tong =0;
                            var tien_datra =0;
                            var tien_nomoi =0;
                            for(var i=0;i < tmp5.length;i++){ 
                                    var rowData = $("#rowed5").getRowData(tmp5[i]);
                                    tien_dv =parseFloat(tien_dv) + parseFloat(rowData["TongTienPhaiTra"]);
                                    tien_gg =parseFloat(tien_gg) + parseFloat(rowData["GiamGia"]);
                                    tien_huy =parseFloat(tien_huy) + parseFloat(rowData["TienHuyChiDinh"]);
                                    tien_nocu =parseFloat(tien_nocu) + parseFloat(rowData["NoCu"]);
                                    tien_tong =parseFloat(tien_tong) + parseFloat(rowData["TongPhaiTra"]);
                                    tien_datra =parseFloat(tien_datra) + parseFloat(rowData["SoTienThanhToan"]);
                                    tien_nomoi =parseFloat(tien_nomoi) + parseFloat(rowData["NoCuoi"]);
                                   // alert(tien_tong);
                                }
                          
                            $("#tiendichvu").val(formatMoney(tien_dv));
                            $("#tiengiamgia").val(formatMoney(tien_gg));
                            $("#tienhuychidinh").val(formatMoney(tien_huy));
                            $("#tiennocu").val(formatMoney(tien_nocu));
                            $("#tientongphaitra").val(formatMoney(tien_tong));
							//alert(formatMoney(tien_tong));
                            $("#tiendatra").val(formatMoney(tien_datra));
                            $("#tiennomoi").val(formatMoney(tien_nomoi));
}
function formatMoney(num) {
    var p = num.toFixed(2).split(".");
    return p[0].split("").reverse().reduce(function(acc, num, i, orig) {
        return  num + (i && !(i % 3) ? "," : "") + acc;
    }, "");
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
      thoigian=thoigian.addHours(0).toString("yyyy-MM-dd");
      }
      return thoigian;
} 
function create_grid4(){    
    $("#rowed6").jqGrid({
    url:"resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_dscacphieuhoantrachidinh&tungay="+$( '#from_day' ).val()+"&denngay="+$( '#to_day' ).val()+" 23:59",
    datatype: "json",   
    colNames:['Số phiếu hủy','Ngày lập phiếu','Người lập phiếu','Mã Bệnh nhân','Họ lót','Tên bệnh nhân','Tổng tiền hủy','Đã hoàn tiền','Số phiếu hoàn tiền','Tiền đã trả lại','Nợ cuối','In phiếu hủy'],
    colModel:[
        {name:'MaPhieu',index:'MaPhieu', width:"1%", editable:false,align:'left',hidden:false},    
        {name:'NgayGioHuy',index:'NgayGioHuy', width:"1%", editable:false,align:'left',hidden:false}, 
        {name:'TenNguoiLapPhieu',index:'TenNguoiLapPhieu', width:"2%", editable:true,align:'left',hidden:false},
        {name:'MaBenhNhan',index:'MaBenhNhan', width:"1%", editable:true,align:'left',hidden:false},
        {name:'HoLotBenhNhan',index:'HoLotBenhNhan', width:"2%", editable:true,align:'left',hidden:false},
        {name:'TenBenhNhan',index:'TenBenhNhan', width:"1%", editable:true,align:'left',hidden:false},
        {name:'TongTienHuy',index:'TongTienHuy', width:"1%", editable:true,align:'right',hidden:false},
        {name:'DaHoanTien',index:'DaHoanTien', width:"1%", editable:true,align:'center',hidden:false,edittype:"checkbox",editoptions: {value:"1:0"},formatter:"checkbox",},
        {name:'MaPhieuHoanUng',index:'MaPhieuHoanUng', width:"2%", editable:true,align:'left',hidden:false},
        {name:'TienHoanUng',index:'TienHoanUng',classes: "col1", width:"1%", editable:true,align:'right',hidden:false}, 
        {name:'NoCuoi',index:'NoCuoi',classes: "col2", width:"1%", editable:true,align:'right',hidden:false}, 
        {name:'InPhieuHuy',index:'InPhieuHuy', width:"1%", editable:true,align:'right',hidden:false}, 
    ],  
        loadonce: true,
        scroll: false,       
        modal:true,      
        rowNum: 1000,
        rowList:[],
        pager: '#prowed6',
        sortname: 'ID_HuyChiDinh',
        height:100,
        width: 100,
        viewrecords: true,  
        ignoreCase:true,
        shrinkToFit:true,
        viewrecords: false, 
        ignoreCase:true,
        pginput:false,
        pgbuttons:false,
        
        
    //hoverrows:false,
    //jsonReader:{repeatitems:true,subgrid:{repeatitems:false}},    
        sortorder: "desc",
        serializeRowData: function (postdata) {             
            //$("#rowed3").trigger("reloadGrid");       
            //return postdata;
        },
        onSelectRow: function(id){     
               var rowData = $("#rowed6").getRowData(id);   
               window.tenbenhnhan3=rowData["TenBenhNhan"];
                window.id_huychidinh=id;

                $("#rowed7").jqGrid('setGridParam',{url:"resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_chitietphieutralaichidinh&id_huychidinh="+id_huychidinh,datatype:'json'}).trigger('reloadGrid');
                $("#rowed7").jqGrid('setCaption', 'Chi tiết phiếu trả lại chỉ định - '+tenbenhnhan3);
        },
        ondblClickRow: function (rowId, rowIndex, columnIndex) {
           
        },
        loadComplete: function(data,rowid) {  
              var ids = $('#rowed6').jqGrid('getDataIDs');
              var phi_th =0;
              var sotien_huy =0;
                for (i = 0; i < ids.length; i++) {
                    var rowData = jQuery('#rowed6').getRowData(ids[i]);
                    var _class = "xanh";
                    inphieuhuy = "<input class='custom_button " + _class + "' style='height:22px;width:50px;' type='button' value='In phiếu hủy' onclick=\"moghichu('" + rowData["ID_BenhNhan"] + "','" + rowData["TenBenhNhan"] + "');\" />";
                    $("#rowed6").jqGrid('setRowData', ids[i], {InPhieuHuy: inphieuhuy});
                    phi_th =parseFloat(phi_th) + parseFloat(rowData["TongTienHuy"]);
                    sotien_huy =parseFloat(sotien_huy) + parseFloat(rowData["TienHoanUng"]);
                }
                $("#luot2").html($('#rowed6').jqGrid('getGridParam','records'));
                 $("#tongtienhuy2").val(formatMoney(phi_th));
                 $("#tiendatralai2").val(formatMoney(sotien_huy));
        },    
        caption: ""
    }); 
}
function create_grid5(){    
    $("#rowed7").jqGrid({
    url:"",
    datatype: "local",   
    colNames:['Tên loại khám','Phí thực hiện','Số tiền hủy','Ghi chú'],
    colModel:[
        {name:'ID_LoaiKham',index:'ID_LoaiKham', width:"2%", editable:false,align:'left',hidden:false,formatter:"select",editrules: {required:true},edittype:"select",editoptions: { value: loaikham}},    
        {name:'PhiThucHien',index:'PhiThucHien', width:"1%", editable:false,align:'right',hidden:false}, 
        {name:'SoTienThucTra',index:'SoTienThucTra', width:"1%", editable:true,align:'right',hidden:false},
        {name:'GhiChu',index:'GhiChu', width:"2%", editable:true,align:'left',hidden:false},
        
    ],  
        loadonce: true,
        scroll: false,       
        modal:true,      
        rowNum: 1000,
        rowList:[],
        pager: '#prowed7',
        sortname: 'ID_HuyChiDinh',
        height:100,
        width: 100,
        viewrecords: true,  
        ignoreCase:true,
        shrinkToFit:true,
        viewrecords: false, 
        ignoreCase:true,
        pginput:false,
        pgbuttons:false,
        
        
    //hoverrows:false,
    //jsonReader:{repeatitems:true,subgrid:{repeatitems:false}},    
        sortorder: "desc",
        serializeRowData: function (postdata) {             
            //$("#rowed3").trigger("reloadGrid");       
            //return postdata;
        },
        onSelectRow: function(id){        
          //$("#rowed4").jqGrid().setGridParam({url:'data2_tam.php?id='+lastsel}).trigger("reloadGrid");       
        },
        ondblClickRow: function (rowId, rowIndex, columnIndex) {
           
        },
        loadComplete: function(data,rowid) {  
                            var tmp5 = $("#rowed7").jqGrid('getDataIDs'); 
                            var phi_th =0;
                            var sotien_huy =0;
                           
                            for(var i=0;i < tmp5.length;i++){ 
                                    var rowData = $("#rowed7").getRowData(tmp5[i]);
                                    phi_th =parseFloat(phi_th) + parseFloat(rowData["PhiThucHien"]);
                                    sotien_huy =parseFloat(sotien_huy) + parseFloat(rowData["SoTienThucTra"]);
                                    //alert(phi_th);
                                }
                          
                            $("#phithuchien").val(formatMoney(phi_th));
                            $("#sotienhuy").val(formatMoney(sotien_huy));
                           
        },    
        caption: "Chi tiết phiếu trả lại chỉ định - "
    }); 
}
function create_grid6(){    
    $("#rowed8").jqGrid({
    url:'',
    datatype: "local",   
    colNames:['Mã BN','Tên bệnh nhân','Địa chỉ','Điện thoại','Nợ cuối',''],
    colModel:[
        {name:'MaBenhNhan',index:'MaBenhNhan', width:"1%", editable:false,align:'left',hidden:false},    
        {name:'TenBenhNhan',index:'TenBenhNhan', width:"1%", editable:false,align:'left',hidden:false}, 
        {name:'DiaChi',index:'DiaChi', width:"2%", editable:true,align:'left',hidden:false},
        {name:'DienThoai1',index:'DienThoai1', width:"1%", editable:true,align:'left',hidden:false},
        {name:'NoCuoiKy',index:'NoCuoiKy', width:"2%", editable:true,align:'right',hidden:false},
        {name:'ID_BenhNhan',index:'ID_BenhNhan', width:"2%", editable:true,align:'right',hidden:true},
    ],  
        loadonce: true,
        scroll: false,       
        modal:true,      
        rowNum: 1000,
        rowList:[],
        pager: '#prowed8',
        sortname: 'NoCuoiKy',
        height:100,
        width: 100,
        viewrecords: true,  
        ignoreCase:true,
        shrinkToFit:true,
        viewrecords: false, 
        ignoreCase:true,
        pginput:false,
        pgbuttons:false,
        
        
    //hoverrows:false,
    //jsonReader:{repeatitems:true,subgrid:{repeatitems:false}},    
        sortorder: "desc",
        serializeRowData: function (postdata) {             
            //$("#rowed3").trigger("reloadGrid");       
            //return postdata;
        },
        onSelectRow: function(id){     
                var rowData = $("#rowed8").getRowData(id);   
                var id_benhnhan2=rowData["ID_BenhNhan"];   
          $("#rowed9").jqGrid('setGridParam',{url:'resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_benhnhanconnochitiet&id_benhnhan='+id_benhnhan2,datatype:'json'}).trigger('reloadGrid');     
        },
        ondblClickRow: function (rowId, rowIndex, columnIndex) {
           
        },
        loadComplete: function(data,rowid) {  
               $("#ca").html($('#rowed8').jqGrid('getGridParam','records')); 
               var ids = $('#rowed8').jqGrid('getDataIDs');
              var nocuoi =0;
                for (i = 0; i < ids.length; i++) {
                    var rowData = jQuery('#rowed8').getRowData(ids[i]);
                    nocuoi =parseFloat(nocuoi) + parseFloat(rowData["NoCuoiKy"]);
                }
                $("#nocuoi2").val(formatMoney(nocuoi));            
                           
        },    
        caption: ""
    }); 
}
function create_grid7(){    
    $("#rowed9").jqGrid({
    url:'',
    datatype: "local",   
    colNames:['Ngày lập phiếu','Số phiếu','Diễn giải','Nợ đầu kỳ','Tổng phát sinh','Phụ thu','Hủy CĐ/Thuốc','Số tiền thu','Tiền miễn giảm','Nợ cuối'],
    colModel:[
        {name:'NgayGio',index:'NgayGio', width:"3%", editable:false,align:'left',hidden:false},    
        {name:'MaPhieu',index:'MaPhieu', width:"2%", editable:false,align:'left',hidden:false}, 
        {name:'GhiChu',index:'GhiChu', width:"3%", editable:true,align:'left',hidden:false},
        {name:'NoCu',index:'NoCu', width:"2%", editable:true,align:'left',hidden:false},
        {name:'TongTienPhaiTra',index:'TongTienPhaiTra', width:"2%", editable:true,align:'right',hidden:false},
        {name:'TongPhuThu',index:'TongPhuThu', width:"2%", editable:true,align:'right',hidden:false},
        {name:'TienHuyChiDinh',index:'TienHuyChiDinh', width:"2%", editable:true,align:'right',hidden:false},
        {name:'SoTienThanhToan',index:'SoTienThanhToan', width:"2%", editable:true,align:'right',hidden:false},
        {name:'GiamGia',index:'GiamGia', width:"2%", editable:true,align:'right',hidden:false},
        {name:'NoCuoi',index:'NoCuoi', width:"2%", editable:true,align:'right',hidden:false},
    ],  
        loadonce: true,
        scroll: false,       
        modal:true,      
        rowNum: 1000,
        rowList:[],
        pager: '#prowed9',
        sortname: 'NoCuoiKy',
        height:100,
        width: 100,
        viewrecords: true,  
        ignoreCase:true,
        shrinkToFit:true,
        viewrecords: false, 
        ignoreCase:true,
        pginput:false,
        pgbuttons:false,
        
        
    //hoverrows:false,
    //jsonReader:{repeatitems:true,subgrid:{repeatitems:false}},    
        sortorder: "desc",
        serializeRowData: function (postdata) {             
            //$("#rowed3").trigger("reloadGrid");       
            //return postdata;
        },
        onSelectRow: function(id){        
          //$("#rowed4").jqGrid().setGridParam({url:'data2_tam.php?id='+lastsel}).trigger("reloadGrid");       
        },
        ondblClickRow: function (rowId, rowIndex, columnIndex) {
           
        },
        loadComplete: function(data,rowid) {  
              $("#dong").html($('#rowed9').jqGrid('getGridParam','records'));               
               var ids = $('#rowed9').jqGrid('getDataIDs');
               var tongphatsinh2 =0;
               var phuthu2 =0;
               var sotienthu2 =0;
               var tienmiengiam2 =0;
                for (i = 0; i < ids.length; i++) {
                    var rowData = jQuery('#rowed9').getRowData(ids[i]);
                    tongphatsinh2 =parseFloat(tongphatsinh2) + parseFloat(rowData["TongTienPhaiTra"]);
                     phuthu2 =parseFloat(phuthu2) + parseFloat(rowData["TongPhuThu"]);
                      sotienthu2 =parseFloat(sotienthu2) + parseFloat(rowData["SoTienThanhToan"]);
                       tienmiengiam2 =parseFloat(tienmiengiam2) + parseFloat(rowData["GiamGia"]);
                }
                $("#tongphatsinh2").val(formatMoney(tongphatsinh2));   
                $("#phuthu2").val(formatMoney(phuthu2)); 
                $("#sotienthu2").val(formatMoney(sotienthu2)); 
                $("#tienmiengiam2").val(formatMoney(tienmiengiam2));             
        },    
        caption: "DS bệnh nhân còn nợ chi tiết"
    }); 
}
function create_grid8(){    
    $("#rowed10").jqGrid({
    url:'',
    datatype: "local",   
    colNames:['Số phiếu','Ngày lập','Người lập','Tổng tiền','Tiền thu','Mã BN','Họ lót','Tên BN','Người sửa','Ngày sửa','Diễn giải','Lý do sửa/hủy','id_lk'],
    colModel:[
        {name:'MaPhieu',index:'MaPhieu', width:"3%", editable:false,align:'left',hidden:false},    
        {name:'NgayGio',index:'NgayGio', width:"2%", editable:false,align:'left',hidden:false}, 
        {name:'ID_NhanVien',index:'ID_NhanVien', width:"3%", editable:true,align:'left',hidden:false,formatter:"select",edittype:"select",editoptions:{value:nhanvien}},
        {name:'TongTienPhaiTra',index:'TongTienPhaiTra', width:"2%", editable:true,align:'right',hidden:false},
        {name:'SoTien',index:'SoTien', width:"2%", editable:true,align:'right',hidden:false},
        {name:'MaBenhNhan',index:'MaBenhNhan', width:"2%", editable:true,align:'left',hidden:false},
        {name:'HoLotBenhNhan',index:'HoLotBenhNhan', width:"2%", editable:true,align:'left',hidden:false},
        {name:'TenBenhNhan',index:'TenBenhNhan', width:"2%", editable:true,align:'left',hidden:false},
        {name:'TenNVSuaPhieu',index:'TenNVSuaPhieu', width:"2%", editable:true,align:'left',hidden:false},
        {name:'NgayGioSua',index:'NgayGioSua', width:"2%", editable:true,align:'left',hidden:false},
        {name:'GhiChu',index:'GhiChu', width:"2%", editable:true,align:'left',hidden:false},
        {name:'LyDoHuyOrSuaBill',index:'LyDoHuyOrSuaBill', width:"2%", editable:true,align:'left',hidden:false},
        {name:'ID_LuotKham',index:'ID_LuotKham', width:"2%", editable:true,align:'left',hidden:true},
    ],  
        loadonce: true,
        scroll: false,       
        modal:true,      
        rowNum: 1000,
        rowList:[],
        pager: '#prowed10',
        sortname: 'MaPhieu',
        height:100,
        width: 100,
        viewrecords: true,  
        ignoreCase:true,
        shrinkToFit:true,
        viewrecords: false, 
        ignoreCase:true,
        pginput:false,
        pgbuttons:false,
        
        
    //hoverrows:false,
    //jsonReader:{repeatitems:true,subgrid:{repeatitems:false}},    
        
        serializeRowData: function (postdata) {             
            //$("#rowed3").trigger("reloadGrid");       
            //return postdata;
        },
        onSelectRow: function(id){        
          rowData = jQuery(this).getRowData(id);
          window.id_luotkham2=rowData['ID_LuotKham'];   
          $("#rowed11").jqGrid('setGridParam',{url:'resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_billhuychinhsuachitiet&id_luotkham='+id_luotkham2,datatype:'json'}).trigger('reloadGrid');    
        },
        ondblClickRow: function (rowId, rowIndex, columnIndex) {
           
        },
        loadComplete: function(data,rowid) {  
                    
                    var ids = $("#rowed10").getDataIDs();
                    for (i=0;i<=ids.length-1;i++){
                            $("#"+ids[i]).css("background-color","yellow");
            }
        },    
        caption: ""
    }); 
}
function create_grid9(){    
    $("#rowed11").jqGrid({
    url:'',
    datatype: "local",   
    colNames:['Nhóm','Tên loại khám','Phí thực hiện'],
    colModel:[
        {name:'TenNhom',index:'TenNhom', width:"3%", editable:false,align:'left',hidden:false},    
        {name:'TenLoaiKham',index:'TenLoaiKham', width:"2%", editable:false,align:'left',hidden:false}, 
        {name:'PhiThucHien',index:'PhiThucHien', width:"2%", editable:true,align:'right',hidden:false,sorttype:'number', summaryType:'sum'},
    ],  
        loadonce: true,
        scroll: false,       
        modal:true,      
        rowNum: 1000,
        rowList:[],
        pager: '#prowed11',
        sortname: 'TenNhom',
        height:100,
        width: 100,
        viewrecords: true,  
        ignoreCase:true,
        shrinkToFit:true,
        viewrecords: false, 
        ignoreCase:true,
        pginput:false,
        pgbuttons:false,
       grouping: true,
            groupingView: {groupField: ['TenNhom'],
                groupOrder: ['asc'],
                 //groupSummary : [true,true],
                showSummaryOnHide: false,
                groupColumnShow: [false, false],
                groupText: ['<b style="color:blue"> Nhóm: {0}</b> : {PhiThucHien}'],
                groupCollapse: false,
            },
        
        serializeRowData: function (postdata) {             
            //$("#rowed3").trigger("reloadGrid");       
            //return postdata;
        },
        onSelectRow: function(id){        
          //$("#rowed4").jqGrid().setGridParam({url:'data2_tam.php?id='+lastsel}).trigger("reloadGrid");       
        },
        ondblClickRow: function (rowId, rowIndex, columnIndex) {
           
        },
        loadComplete: function(data,rowid) {  
                       
        },    
        caption: ""
    }); 
}
function create_grid10(){    
    $("#rowed12").jqGrid({
    url:'',
    datatype: "local",   
    colNames:['Số phiếu','Ngày nộp','Mã bệnh nhân','Họ lót','Tên bệnh nhân','Diễn giải','Thu ngân','Thu','Chi','',''],
    colModel:[
        {name:'MaPhieu',index:'MaPhieu', width:"3%", editable:false,align:'center',hidden:false},    
        {name:'NgayGio',index:'NgayGio', width:"2%", editable:false,align:'left',hidden:false}, 
        {name:'MaBenhNhan',index:'MaBenhNhan', width:"2%", editable:true,align:'left',hidden:false},
        {name:'HoLotBenhNhan',index:'HoLotBenhNhan', width:"2%", editable:true,align:'left',hidden:false},
        {name:'TenBenhNhan',index:'TenBenhNhan', width:"2%", editable:true,align:'left',hidden:false},
        {name:'GhiChu',index:'GhiChu', width:"2%", editable:true,align:'left',hidden:false},
        {name:'TenNhanVien',index:'TenNhanVien', width:"2%", editable:true,align:'left',hidden:false},
        {name:'TienThuVao',index:'TienThuVao', width:"2%", editable:true,align:'right',hidden:false},
        {name:'TienChiRa',index:'TienChiRa', width:"2%", editable:true,align:'right',hidden:false},
		{name:'ID_BenhNhan',index:'ID_BenhNhan',hidden:true},
		{name:'LoaiThanhToan',index:'LoaiThanhToan',hidden:true},
    ],  
        loadonce: true,
        scroll: false,       
        modal:true,      
        rowNum: 1000,
        rowList:[],
        pager: '#prowed12',
        sortname: 'MaPhieu',
        height:100,
        width: 100,
        viewrecords: true,  
        ignoreCase:true,
        shrinkToFit:true,
        viewrecords: false, 
        ignoreCase:true,
        pginput:false,
        pgbuttons:false,
       
        
        serializeRowData: function (postdata) {             
            //$("#rowed3").trigger("reloadGrid");       
            //return postdata;
        },
        onSelectRow: function(id){        
          //$("#rowed4").jqGrid().setGridParam({url:'data2_tam.php?id='+lastsel}).trigger("reloadGrid");       
        },
        ondblClickRow: function (rowId, rowIndex, columnIndex) {
			
          		 rowData = jQuery(this).getRowData(rowId); 
                 var id_benhnhan = rowData['ID_BenhNhan'];
                 var MaBenhNhan = rowData['MaBenhNhan'];
                 var TenBenhNhan = rowData['HoLotBenhNhan']+' '+rowData['TenBenhNhan'];
				 if(rowData['LoaiThanhToan']=='TamUng'){
					  parent.postMessage('tamung;tam_ung;'+rowId+';'+id_benhnhan+';edit;'+MaBenhNhan+';'+TenBenhNhan, "*");
				 }else if(rowData['LoaiThanhToan']=='HoanUng'){
					  parent.postMessage('hoangung;hoang_ung;'+rowId+';'+id_benhnhan+';edit;'+MaBenhNhan+';'+TenBenhNhan, "*");
				 }else if(rowData['LoaiThanhToan']=='ThanhToanLuotKham'){
					 parent.postMessage('thutrano_edit;chitietthungan;'+rowId+';'+id_benhnhan+';edit;'+MaBenhNhan+';'+TenBenhNhan, "*");
				 }
             
        },
        loadComplete: function(data,rowid) {  
                       
              var ids = $('#rowed12').jqGrid('getDataIDs');
              var tongthu =0;
              var tongchi =0;
                for (i = 0; i < ids.length; i++) {
                    var rowData = jQuery('#rowed12').getRowData(ids[i]);
                   
                    tongthu =parseFloat(tongthu) + parseFloat(rowData["TienThuVao"]);
                    tongchi =parseFloat(tongchi) + parseFloat(rowData["TienChiRa"]);
                }
                $("#dong2").html($('#rowed12').jqGrid('getGridParam','records'));
                 $("#tongthu").val(formatMoney(tongthu));
                 $("#tongchi").val(formatMoney(tongchi));
                 $("#tongthu2").val(formatMoney(tongthu));
                 $("#tongchi2").val(formatMoney(tongchi));
                 $("#conlai").val(formatMoney(tongthu-tongchi));
        },    
        caption: ""
    }); 
}
function create_grid11(){    
    $("#rowed13").jqGrid({
    url:'',
    datatype: "local",   
    colNames:['Phiếu trả thuốc','Ngày lập phiếu','Người lập phiếu','Mã bệnh nhân','Họ lót','Tên bệnh nhân','Ghi chú','Tiền thuốc trả lại','Đã hoàn tiền','Số phiếu hoàn tiền','Tiền đã trả lại','Nợ cuối'],
    colModel:[
        {name:'MaPhieu',index:'MaPhieu', width:"3%", editable:false,align:'center',hidden:false},    
        {name:'NgayLapPhieu',index:'NgayLapPhieu', width:"2%", editable:false,align:'left',hidden:false}, 
        {name:'NguoiLapPhieu',index:'NguoiLapPhieu', width:"2%", editable:false,align:'left',hidden:false}, 
        {name:'MaBenhNhan',index:'MaBenhNhan', width:"2%", editable:true,align:'left',hidden:false},
        {name:'HoLotBenhNhan',index:'HoLotBenhNhan', width:"2%", editable:true,align:'left',hidden:false},
        {name:'TenBenhNhan',index:'TenBenhNhan', width:"2%", editable:true,align:'left',hidden:false},
        {name:'GhiChu',index:'GhiChu', width:"2%", editable:true,align:'left',hidden:false},
        {name:'TenNhanVien',index:'TenNhanVien', width:"2%", editable:true,align:'left',hidden:false},
        {name:'TienThuVao',index:'TienThuVao', width:"2%", editable:true,align:'right',hidden:false},
        {name:'TienChiRa',index:'TienChiRa', width:"2%", editable:true,align:'right',hidden:false},
    ],  
        loadonce: true,
        scroll: false,       
        modal:true,      
        rowNum: 1000,
        rowList:[],
        pager: '#prowed13',
        sortname: 'MaPhieu',
        height:100,
        width: 100,
        viewrecords: true,  
        ignoreCase:true,
        shrinkToFit:true,
        viewrecords: false, 
        ignoreCase:true,
        pginput:false,
        pgbuttons:false,
       
        
        serializeRowData: function (postdata) {             
            //$("#rowed3").trigger("reloadGrid");       
            //return postdata;
        },
        onSelectRow: function(id){        
          //$("#rowed4").jqGrid().setGridParam({url:'data2_tam.php?id='+lastsel}).trigger("reloadGrid");       
        },
        ondblClickRow: function (rowId, rowIndex, columnIndex) {
           
        },
        loadComplete: function(data,rowid) {  
                       
              
        },    
        caption: ""
    }); 
}
</script>

