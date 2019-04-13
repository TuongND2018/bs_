<!--author:khatm-->









<?php
    if(isset($_GET["idbenhnhan"])){
        echo "<script type='text/javascript'>";
        echo "window.ngay=".$_GET["idbenhnhan"];
        echo "</script>";
        
    }
    if(isset($_GET["idkham"])){
        echo "<script type='text/javascript'>";
        echo "window.tabOpen=".$_GET["idkham"];
        echo "</script>";
    }
    else{
        echo "<script type='text/javascript'>";
        echo "window.tabOpen2=0";
        echo "</script>";
        }
?>
 









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
        /*  border:1px solid #000;*/
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
        background-color: #BEF781;

    }
    .CotSoTien
    {
       font-size: 14px;

    }
    .Datra
    {
      background-color: pink;
    }


.footrow td[aria-describedby="rowed12_TienThuVao"],.footrow td[aria-describedby="rowed12_TienChiRa"],
.footrow td[aria-describedby="rowed12_GhiChu"],.footrow td[aria-describedby="rowed12_MaPhieu"]
{
   background-color: #CEF6EC !important;
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
                <li><a href="#tabs-1" id="dsbenhnhancho">Nội trú chưa TT</a></li>
                <li><a href="#tabs-2" id="dschuathanhtoan">Ngoại trú chưa TT</a></li>
                <li><a href="#tabs-3" id="tonghopthuchi">TH thu chi</a></li>
                <li><a href="#tabs-4" id="dsphieuhoantrachidinh">Hoàn trả CĐ</a></li>
                <li><a href="#tabs-5" id="dsbenhnhanconno">Bệnh nhân nợ</a></li>
                <li><a href="#tabs-6" id="dsbillhuy">Bill chỉnh sửa</a></li>
                <li><a href="#tabs-7" id="dsphieuthuchi">Phiếu thu chi</a></li>
                <li><a href="#tabs-8" id="dsdonthuoctralai">Đơn thuốc trả lại</a></li>
                <li><a href="#tabs-9" id="dstamungnoitru">Đề nghị tạm ứng nội trú</a></li>
              </ul>
                  <div id="tabs-1">
                      <table id="rowed14" ></table>
                    <!--   <div style="float:left">
                            <div class="hinhvuong sansanggoi"></div><label class="diengiai">Sẵn sàng gọi</label>
                            <div class="hinhvuong chuasansang"></div><label class="diengiai">Chưa sẵn sàng</label>
                            <div class="hinhvuong quathoigian_max"></div><label class="diengiai">Đã chờ quá 15 phút</label>
                            <div class="hinhvuong quathoigian_min"></div><label class="diengiai">Đã chờ quá 10 phút</label>
                      </div> -->
                  </div>
                  <div id="tabs-2">
                   <table id="rowed3" ></table>
                  </div>
                  <div id="tabs-3">
                    <table id="rowed5"></table>
                    <!-- <div id="prowed5">
                        <div id="soluot" style="margin-left:40px">Số lượt= <span id="luot"></span>
                        <input id="tiendichvu" class="disable" type="text" value="0" readonly disabled style="margin-left:550px;width:65px;background:#4CA109;border:1px solid #327E04; color: #FFFFFF;font-weight: bold;"   />
                        <input id="tiengiamgia" class="disable" type="text" value="0" readonly disabled style="width:65px;background:#4CA109;border:1px solid #327E04; color: #FFFFFF;font-weight: bold;" />
                        <input id="tienhuychidinh" class="disable" type="text" value="0" readonly disabled style="width:120px;background:#4CA109;border:1px solid #327E04; color: #FFFFFF;font-weight: bold;" />
                        <input id="tiennocu" class="disable" type="text" value="0" readonly disabled style="width:68px;background:#4CA109;border:1px solid #327E04; color: #FFFFFF;font-weight: bold;" />
                        <input id="tientongphaitra" class="disable" type="text" value="0" readonly disabled style="width:68px;background:#4CA109;border:1px solid #327E04; color: #FFFFFF;font-weight: bold;" />
                        <input id="tiendatra" class="disable" type="text" value="0" readonly disabled style="width:68px;background:#4CA109;border:1px solid #327E04; color: #FFFFFF;font-weight: bold;" />
                        <input id="tiennomoi" class="disable" type="text" value="0" readonly disabled style="width:68px;background:#4CA109;border:1px solid #327E04; color: #FFFFFF;font-weight: bold;" />
                        </div>
                    </div> -->

                 <!--    <div style="float:left">

                            <div class="hinhvuong quathoigian_max"></div><label class="diengiai">Còn lại >0</label>
                            <div class="hinhvuong quathoigian_min"></div><label class="diengiai">Còn lại <0</label>
                      </div> -->

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
                          <!--  <div id="prowed8">
                                <div id="soca" style="margin-left:40px">Số ca= <span id="ca"></span>
                                    <input id="nocuoi2" class="disable" type="text" value="0" readonly disabled style="margin-left:950px;text-align:right;width:172px;background:#4CA109;border:1px solid #327E04; color: #FFFFFF;font-weight: bold;"   />
                                </div>
                           </div> -->
                           <table id="rowed9"></table>
                         <!--   <div id="prowed9">
                                 <div id="sodong" style="margin-left:40px">Số dòng= <span id="dong"></span>
                                    <input id="tongphatsinh2" class="disable" type="text" value="0" readonly disabled style="margin-left:453px;text-align:right;width:106px;background:#4CA109;border:1px solid #327E04; color: #FFFFFF;font-weight: bold;"   />
                                    <input id="phuthu2" class="disable" type="text" value="0" readonly disabled style="text-align:right;width:102px;background:#4CA109;border:1px solid #327E04; color: #FFFFFF;font-weight: bold;"   />
                                    <input id="sotienthu2" class="disable" type="text" value="0" readonly disabled style="margin-left:110px;text-align:right;width:102px;background:#4CA109;border:1px solid #327E04; color: #FFFFFF;font-weight: bold;"   />
                                    <input id="tienmiengiam2" class="disable" type="text" value="0" readonly disabled style="text-align:right;width:102px;background:#4CA109;border:1px solid #327E04; color: #FFFFFF;font-weight: bold;"   />
                                </div>
                           </div> -->
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
                   <!--  <div>
                        <label>Tổng thu:</label>
                        <input id="tongthu" disabled type="text"style="text-align:right"/>
                        <label>Tổng chi:</label>
                        <input id="tongchi" disabled style="text-align:right"type="text"/>
                        <label>Còn lại:</label>
                        <input id="conlai" disabled style="text-align:right"type="text"/>
                    </div> -->
                    <table id="rowed12"></table>
                   <!--  <div id="prowed12">
                                 <div id="sodong2" style="margin-left:40px">Số phiếu= <span id="dong2"></span>
                                    <input id="tongthu2" class="disable" type="text" value="0" readonly disabled style="margin-left:453px;text-align:right;width:106px;background:#4CA109;border:1px solid #327E04; color: #FFFFFF;font-weight: bold;"   />
                                    <input id="tongchi2" class="disable" type="text" value="0" readonly disabled style="text-align:right;width:102px;background:#4CA109;border:1px solid #327E04; color: #FFFFFF;font-weight: bold;"   />
                                 </div>
                    </div> -->
                  </div>
                  <div id="tabs-8">
                    <table id="rowed13"></table>
                  </div>
                   <div id="tabs-9">
                    <table id="rowed15"></table>
                  </div>


            </div>
        </div>
    </div>

    <ul id="menu" >

        <li><a id="vangmat" href="#"><span class="ui-icon ui-icon-closethick"></span><span class="menu_text">Vắng mặt</span></a></li>
        <li><a id="thongtinbenhnhan" href="#"><span class="ui-icon ui-icon-person"></span><span class="menu_text">Thông tin bệnh nhân</span></a></li>
        <li><a id="thongtinluotkham" href="#"><span class="ui-icon ui-icon-pencil"></span><span class="menu_text">Thông tin lượt khám</span></a></li>
        <li><a id="capnhatGioTraKQ" href="#"><span class="ui-icon ui-icon-clock"></span><span class="menu_text">Cập nhật giờ hẹn trả KQ</span></a></li>

    </ul>
</body>
</html>

<script type="text/javascript">
    jQuery(document).ready(function() {
		search_thungan("#rowed12,#rowed3");
		//window.search_dialog=0;
		$.dateEntry.setDefaults({spinnerImage: ''});
		jwerty.key('f5', false);

		$('body').bind('keydown', function(e) {
			if (jwerty.is("f5",e)) {
				$('#xem').click();
			}
		})
	    $("#from_day, #to_day").dateEntry({dateFormat:$.cookie("ngayDateEntry")});
		$('#rowed3').bind('keydown',function(e){
				if (e.keyCode == '32') {
					  var rowData = jQuery('#rowed3').getRowData($('#rowed3').jqGrid('getGridParam', 'selrow') );

					parent.postMessage('tamung;tam_ung;'+rowData['ID_BenhNhan']+';'+ rowData['ID_LuotKham']+';;add','*');
				}
				if(jwerty.is('enter',e)) {

					  var rowData = jQuery('#rowed3').getRowData($('#rowed3').jqGrid('getGridParam', 'selrow'));
               		  var ID_LuotKham = rowData['ID_LuotKham'];
                 	  var id_benhnhan = rowData['ID_BenhNhan'];
                	  var MaBenhNhan = rowData['MaBenhNhan'];
                 	  var TenBenhNhan = rowData['TenBenhNhan'];
            	      parent.postMessage('thutrano_add;chitietthungan;'+ID_LuotKham+';'+id_benhnhan+';add;'+MaBenhNhan+';'+TenBenhNhan, "*");

				}

			})

		$('#rowed14').bind('keydown',function(e){
				if (e.keyCode == '32') {
					  var rowData = jQuery('#rowed14').getRowData($('#rowed14').jqGrid('getGridParam', 'selrow') );

					parent.postMessage('tamung;tam_ung_notru;'+rowData['ID_BenhNhan']+';'+ rowData['ID_LuotKham']+';tamung;add','*');
				}
				if(jwerty.is('enter',e)) {

					  var rowData = jQuery('#rowed14').getRowData($('#rowed14').jqGrid('getGridParam', 'selrow'));
               		  var ID_LuotKham = rowData['ID_LuotKham'];
                 	  var id_benhnhan = rowData['ID_BenhNhan'];
                	  var MaBenhNhan = rowData['MaBenhNhan'];
                 	  var TenBenhNhan = rowData['TenBenhNhan'];
            	      parent.postMessage('thutrano_add;thanhtoannoitru;'+ID_LuotKham+';'+id_benhnhan+';add;'+MaBenhNhan+';'+TenBenhNhan, "*");

				}

		})

        window.loaikham=$.ajax({url: 'resource.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=2&tables=DM_LoaiKham&id=ID_LoaiKham&name=TenLoaiKham', async: false, success: function(data, result) {if (!result) alert('Không load được danh mục phòng ban');}}).responseText;
         window.nhanvien=$.ajax({url: 'resource.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=2&tables=DM_NhanVien&id=ID_NhanVien&name=NickName', async: false, success: function(data, result) {if (!result) alert('Không load được danh mục phòng ban');}}).responseText;
        temp = jQuery(window).height()+490 ;
        $("#panel_main").css("height", temp + "px");
        $("#panel_main").fadeIn(1000);
        window.default_id_tang=2;
        $("#from_day").val('<?php echo date($_SESSION["config_system"]["ngaythang"]) ?>');
         $("#to_day").val('<?php echo date($_SESSION["config_system"]["ngaythang"]) ?>');
         window._tungay='';
         window._denngay='';
         window.tenbenhnhan3="";
         window.contro="2";
         $("#dsbenhnhancho").click(function(){
            window.contro="1";
            $("#xem").click();
         })
         $("#dschuathanhtoan").click(function(){
            window.contro="2";
             $("#xem").click();
         })
         $("#tonghopthuchi").click(function(){
            window.contro="3";
             $("#xem").click();
         })
         $("#dsphieuhoantrachidinh").click(function(){
            window.contro="4";
             $("#xem").click();
         })
         $("#dsbenhnhanconno").click(function(){
            window.contro="5";
             $("#xem").click();
         })
         $("#dsbillhuy").click(function(){
            window.contro="6";
             $("#xem").click();
         })
         $("#dsphieuthuchi").click(function(){
            window.contro="7";
             $("#xem").click();
         })
         $("#dsdonthuoctralai").click(function(){
            window.contro="8";
            //alert();
             $("#xem").click();
         })
		 $("#dstamungnoitru").click(function(){
            window.contro="9";
            //alert();
             $("#xem").click();
         })
        $("#xem").button();
        $( "#tabs" ).tabs({

         <!--heightStyle:"fill", -->



         });
      /*  if window.tabOpen!=0{

        }*/

      
       // .tabs( "select" , index )
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
         create_grid11();
          create_grid14();
		  create_grid15();
     //$('#rowed3').jqGrid('setCaption', 'Danh sách chưa thanh toán '+  window.rowcount_luoichuathanhtoan);
        resize_control();


checkbox_search("gs_SanSangGoiVaoKham","#rowed3");
        $(window).resize(function() {
            temp = jQuery(window).height() - 50;
            $("#panel_main").css("height", temp + "px");
            resize_control();
        })



         $("#from_day").datepicker({
           dateFormat:  $.cookie("ngayJqueryUi")
        });
        $("#to_day").datepicker({

            dateFormat:  $.cookie("ngayJqueryUi")
        });


         if(window.tabOpen==4) 
         {
            $( "#tabs" ).tabs({ active: 4});
               $("#dsbenhnhanconno").click();
         }
         else
         {
              $( "#tabs" ).tabs({ active: 1 });
         }
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

                        , fxName: "drop"        // none, slide, drop, scale
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
        $("#rowed3").setGridHeight($(window).height()-$("#top_main").height()-$(".ui-tabs-nav").height()-130);
        $("#rowed4").setGridWidth($(window).width()-50);
        $("#rowed4").setGridHeight($(window).height()-$("#top_main").height()-$(".ui-tabs-nav").height()-110);
        $("#rowed5").setGridWidth($(window).width()-45);
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
        $("#rowed12").setGridHeight($(window).height()-$("#top_main").height()-$(".ui-tabs-nav").height()-130);
        $("#rowed13").setGridWidth($(window).width()-50);
        $("#rowed13").setGridHeight($(window).height()-$("#top_main").height()-$(".ui-tabs-nav").height()-130);
        $("#rowed14").setGridWidth($(window).width()-50);
        $("#rowed14").setGridHeight($(window).height()-$("#top_main").height()-$(".ui-tabs-nav").height()-130);
		 $("#rowed15").setGridWidth($(window).width()-50);
        $("#rowed15").setGridHeight($(window).height()-$("#top_main").height()-$(".ui-tabs-nav").height()-130);
    }


 function create_grid14() {

        window.kiemtrasearch = true;
        $("#rowed14").jqGrid({
            url: 'resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_ds_chuathanhtoanNoiTru',
            datatype: "json",
            colNames: ['LuotKham', '<?php get_text1("maBN") ?>', 'Họ lót','Tên BN',
        '<?php get_text1("tuoi") ?>', '<?php get_text1("gioitinh") ?>',
        'Đối tượng','Giờ vào viện',
         'ID_BenhNhan','Tổng cộng','Tạm ứng','Còn lại','Giờ ra viện'],
            colModel: [
                {name: 'ID_LuotKham', index: 'ID_LuotKham', width: "0%", editable: false, align: 'left', hidden: true},
                {name: 'MaBenhNhan',width: "5%",  classes: "CotSoTien", sortable: true,sorttype: 'number', index: 'MaBenhNhan', search: true, editable: false, align: 'left', hidden: false},
                {name: 'HoLotBenhNhan',width: "10%",  sortable: true, index: 'TenBenhNhan', search: true, editable: false, align: 'left', hidden: false},
                {name: 'TenBenhNhan', width: "4%",sortable: true, index: 'TenBenhNhan', search: true,  editable: false, align: 'left', hidden: false},
                {name: 'Tuoi',width: "3%", index: 'Tuoi', search: true,  editable: false, align: 'left', hidden: false},
                {name: 'GioiTinh', width: "2%", index: 'GioiTinh', search: true, editable: false, align: 'left', hidden: false},
				{name: 'LoaiDoiTuongKham',width: "4%", sortable: true, index: 'LoaiDoiTuongKham', search: true,  editable: false, align: 'left', hidden: false},
{name: 'NgayGioVaoVien',width: "6%",sortable: true,search: true, index: 'NgayGioVaoVien', align: 'left', hidden: false, },
                {name: 'ID_BenhNhan', index: 'ID_BenhNhan', width: "0%", hidden: true},
                {name: 'TongCong',width: "4%",formatter:'number',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: "", defaultValue: '0'},sortable: true,classes: "CotSoTien",sorttype: 'number', index: 'TongCong', align: 'right', hidden: false,search: true},
                {name: 'TamUng',width: "4%",formatter:'number',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: "", defaultValue: '0'},sortable: true,classes: "CotSoTien",sorttype: 'number', index: 'TamUng',align: 'right',  hidden: false,search: true},
                {name: 'ConLai',width: "4%",formatter:'number',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: "", defaultValue: '0'},sortable: true,classes: "CotSoTien",sorttype: 'number', index: 'ConLai', align: 'right', hidden: false,search: true},
                {name: 'NgayGioRaVien',width: "6%",sortable: true,search: true, index: 'NgayGioRaVien', align: 'left', hidden: false, },


            ],
            loadonce: true,
            scroll: false,
            modal: true,
            shrinkToFit: true,
            cmTemplate: {sortable: false},
            rowNum: 10000000,
            rowList: [],
            pager: '#prowed14',
            sortname: 'NgayGioVaoVien',
            height: 100,
            width: 100,
            viewrecords: true,
            ignoreCase: true,
            sortorder: "desc",
            footerrow:true,
            onSelectRow: function(id) {


            },
           ondblClickRow: function(rowId) {




                 var rowData = jQuery('#rowed14').getRowData($('#rowed14').jqGrid('getGridParam', 'selrow'));
               		  var ID_LuotKham = rowData['ID_LuotKham'];
                 	  var id_benhnhan = rowData['ID_BenhNhan'];
                	  var MaBenhNhan = rowData['MaBenhNhan'];
                 	  var TenBenhNhan = rowData['TenBenhNhan'];
				 if(rowData['LoaiDoiTuongKham']=='BHYT'){		
				 	 parent.postMessage('thutrano_add;noitru_bhyt;'+ID_LuotKham+';'+id_benhnhan+';add;'+MaBenhNhan+';'+TenBenhNhan, "*");	 
				 }
				 else{					 
					 parent.postMessage('thutrano_add;thanhtoannoitru;'+ID_LuotKham+';'+id_benhnhan+';add;'+MaBenhNhan+';'+TenBenhNhan, "*");
				 }
            	   
            // parent.postMessage('thutrano_add;chitietthungan;'+ID_LuotKham+';'+id_benhnhan+';add;'+MaBenhNhan+';'+TenBenhNhan, "*");*/

			 // parent.postMessage('tamung;tam_ung_notru;'+id_benhnhan+';'+ID_LuotKham+';tamung;add','*');
               //  dialog_main("Chi tiết viện phí " + ' BN '+TenBenhNhan+' - '+MaBenhNhan, 98, 100, 567433265743657, "resource.php?module=<?=$modules?>&view=<?=$view?>&action=ChiTietThuNgan_1&type=test&id_form=22&ID_LuotKham="+ID_LuotKham+"&idbenhnhan="+id_benhnhan+"&oper=add");

            },
            onselect: function(rowId, rowIndex, columnIndex) {
                // $(".ui-icon-pencil").trigger('click');
              //  alert(rowId("MaBenhNhan"));
               // alert(rowIndex);
               // alert(columnIndex);
            },
            onRightClickRow: function(rowid, iRow, iCol, e) {
            },
            loadComplete: function(data) {
                var ids = $('#rowed14').jqGrid('getDataIDs');

                for (i = 0; i < ids.length; i++) {
                    var rowData = jQuery('#rowed14').getRowData(ids[i]);
                    var  NgayGioRaVien=(rowData["NgayGioRaVien"]);
						
                        if(NgayGioRaVien!='')
                        {
                            $("#rowed14").setCell (ids[i],'NgayGioRaVien','',{ background:'orange'});

                        }




                    window.rowcount_luoichuathanhtoan = $("#rowed14").getGridParam("reccount");


                    var d=$("#rowed14").jqGrid('getGridParam', 'records');


                    $("#rowed14").jqGrid('setCaption', 'Danh sách chưa thanh toán: '+ d);


                    sumTongCong = $("#rowed14").jqGrid("getCol", "TongCong", false, "sum");
                    sumTamUng = $("#rowed14").jqGrid("getCol", "TamUng", false, "sum");
                    sumConLai = $("#rowed14").jqGrid("getCol", "ConLai", false, "sum");



                    $("#rowed14").jqGrid("footerData", "set", {
                      TongCong: sumTongCong,
                      TamUng: sumTamUng,
                      ConLai: sumConLai,
                      MaBenhNhan:d
                    });

                }
            },
            caption: "Ds chưa thanh toán"
        });
        $("#rowed14").jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});
        $("#rowed14").jqGrid('navGrid', "#prowed14", {add: false, edit: false, del: false, search: false, refresh: true, closeAfterEdit: true, clearAfterAdd: true, navkeys: [true, 38, 40], closeOnEscape: true});

    }






 function create_grid() {
        window.kiemtrasearch = true;
        $("#rowed3").jqGrid({
            url: 'resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_ds_chuathanhtoan',
            datatype: "json",
            colNames: ['LuotKham', '<?php get_text1("maBN") ?>', 'Họ lót','Tên BN',
        '<?php get_text1("tuoi") ?>', '<?php get_text1("gioitinh") ?>',
        'Phân loại khám','Đối tượng','Giờ đến','Bác sỹ','Kết thúc','Hẹn KQ', 'Ghi chú', 'Trạng thái',
         'Có mặt', 'Ghi chú', 'ID_BenhNhan','Hồ sơ','Tổng cộng','Tạm ứng','Còn lại'],
            colModel: [
                {name: 'ID_LuotKham', index: 'ID_LuotKham', width: "0%", editable: false, align: 'left', hidden: true},
                {name: 'MaBenhNhan',width: "5%",  classes: "CotSoTien", sortable: true,sorttype: 'number', index: 'MaBenhNhan', search: true, editable: false, align: 'left', hidden: false},
                {name: 'HoLotBenhNhan',width: "10%",  sortable: true, index: 'TenBenhNhan', search: true, editable: false, align: 'left', hidden: false},
                {name: 'TenBenhNhan', width: "4%",sortable: true, index: 'TenBenhNhan', search: true,  editable: false, align: 'left', hidden: false},
                {name: 'Tuoi',width: "3%", index: 'Tuoi', search: true,  editable: false, align: 'left', hidden: false},
                {name: 'GioiTinh', width: "2%", index: 'GioiTinh', search: true, editable: false, align: 'left', hidden: false},

                {name: 'TenPhanLoaiKham', width: "10%", index: 'TenPhanLoaiKham', search: true, editable: false, align: 'left', hidden: false},
                {name: 'LoaiDoiTuongKham', width: "5%",index: 'LoaiDoiTuongKham', search: true,  editable: false, align: 'left', hidden: false},
                {name: 'ThoiGianVaoKham',width: "4%",  sortable: true,index: 'ThoiGianVaoKham', search: false, editable: false, align: 'center', hidden: false, edittype: "text", editoptions: {
                        dataInit: function(element)
                        {
                            $(element).timeEntry({show24Hours: true, spinnerImage: ''});
                        }
                    }
                },




{name: 'BSLamSang',width: "5%", sortable: true, index: 'BSLamSang', search: true,  editable: false, align: 'left', hidden: false},
{name: 'ThoiGianKetThucKham',width: "4%",sortable: true,search: true, index: 'ThoiGianKetThucKham', align: 'left', hidden: false, },
{name: 'NgayGioHenTraKQ',width: "6%",sortable: true,search: true, index: 'NgayGioHenTraKQ', align: 'left', hidden: false, },

                {name: 'GhiChu', index: 'GhiChu', width: "6%", search: false, editable: false, align: 'left', hidden: false},

                {name: 'TrangThai', index: 'TrangThai', search: true, width: "8%", editable: false, align: 'left', hidden: false},
                {name: 'SanSangGoiVaoKham', width: "4%",index: 'SanSangGoiVaoKham', search: true, stype: 'select', searchoptions: {sopt: ['eq'], value: ":;1:Co;0:Ko"},  formatter: "checkbox", edittype: "checkbox", editoptions: {value: "1:0"}, editable: true, align: 'center', hidden: false, },

                {name: 'NotesStatus', index: 'NotesStatus', width: "0%", hidden: true},
                {name: 'ID_BenhNhan', index: 'ID_BenhNhan', width: "0%", hidden: true},
                {name: 'HoanTatHoSo',width: "3%",edittype: "checkbox", editoptions: {value: "1:0"}, index: 'HoanTatHoSo', sortable:true,search:true, hidden: false},
                {name: 'TongCong',width: "4%",formatter:'number',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: "", defaultValue: '0'},sortable: true,classes: "CotSoTien",sorttype: 'number', index: 'TongCong', align: 'right', hidden: false,search: true},
                {name: 'TamUng',width: "4%",formatter:'number',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: "", defaultValue: '0'},sortable: true,classes: "CotSoTien",sorttype: 'number', index: 'TamUng',align: 'right',  hidden: false,search: true},
                {name: 'ConLai',width: "4%",formatter:'number',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: "", defaultValue: '0'},sortable: true,classes: "CotSoTien",sorttype: 'number', index: 'ConLai', align: 'right', hidden: false,search: true},


            ],
            loadonce: true,
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
            footerrow:true,
            onSelectRow: function(id) {


            },
           ondblClickRow: function(rowId) {
         var rowData = jQuery(this).getRowData(rowId);



                 var ID_LuotKham = rowData['ID_LuotKham'];
                 var id_benhnhan = rowData['ID_BenhNhan'];
                 var MaBenhNhan = rowData['MaBenhNhan'];
                 var TenBenhNhan = rowData['TenBenhNhan'];
				 if(rowData['LoaiDoiTuongKham']=='BHYT'){		
				  parent.postMessage('thutrano_add;ngoaitru_bhyt;'+ID_LuotKham+';'+id_benhnhan+';add;'+MaBenhNhan+';'+TenBenhNhan, "*");		 
             		
				 }
				 else{					 
					parent.postMessage('thutrano_add;chitietthungan;'+ID_LuotKham+';'+id_benhnhan+';add;'+MaBenhNhan+';'+TenBenhNhan, "*");
				 }
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
                window.rowData_grdchuaThanhToan = rowData;

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
                var vangmat = window.rowData_grdchuaThanhToan["SanSangGoiVaoKham"];
                if (vangmat == 0)
                {
                    // alert(hoanTatHoSo);
                    $("#vangmat span.ui-icon").removeClass("ui-icon-closethick").addClass("ui-icon-check");
                    $("#vangmat span.menu_text").html('Có mặt');
                }
                else
                {

                    $("#vangmat span.ui-icon ").removeClass("ui-icon-check").addClass("ui-icon-closethick");
                    $("#vangmat span.menu_text").html('Vắng mặt');
                }

            },
            loadComplete: function(data) {
                var ids = $('#rowed3').jqGrid('getDataIDs');
				/*if(search_dialog==0){
					setTimeout(function(){$("#rowed3")[0].triggerToolbar();},100)
				}*/
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

                    var d=$("#rowed3").jqGrid('getGridParam', 'records');


                    $("#rowed3").jqGrid('setCaption', 'Danh sách chưa thanh toán: '+ d);


                    sumTongCong = $("#rowed3").jqGrid("getCol", "TongCong", false, "sum");
                    sumTamUng = $("#rowed3").jqGrid("getCol", "TamUng", false, "sum");
                    sumConLai = $("#rowed3").jqGrid("getCol", "ConLai", false, "sum");



                    $("#rowed3").jqGrid("footerData", "set", {
                      TongCong: sumTongCong,
                      TamUng: sumTamUng,
                      ConLai: sumConLai,
                      MaBenhNhan:d
                    });

                }
            },
            caption: "Ds chưa thanh toán"
        });
        $("#rowed3").jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});
        $("#rowed3").jqGrid('navGrid', "#prowed3", {add: false, edit: false, del: false, search: false, refresh: true, closeAfterEdit: true, clearAfterAdd: true, navkeys: [true, 38, 40], closeOnEscape: true});

    }




    $("#vangmat").click(function(e) {

        var sanSangGoiVaoKham = window.rowData_grdchuaThanhToan["SanSangGoiVaoKham"];
        var iD_LuotKham = window.rowData_grdchuaThanhToan["ID_LuotKham"];
        $.post('resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=controller_edit&oper=update_chuasansang&id_luotkham=' + iD_LuotKham + '&sanSangGoiVaoKham=' + sanSangGoiVaoKham).done(function(data)
        {
            if ($.trim(data) == '') {
                tooltip_message("<?php get_text1("sua_thanhcong") ?>");

            }
            else {
                tooltip_message("<?php get_text1("sua_khongthanhcong") ?>");
            }

        });
          $("#rowed3").jqGrid('setGridParam',{datatype:'json',url:'resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_ds_chuathanhtoan&tu_ngay='+ $( '#from_day' ).val()+'&den_ngay='+$( '#to_day' ).val(),datatype:'json'}).trigger('reloadGrid');

    })



 $( "#capnhatGioTraKQ" ).click(function() {
          // alert('');

          $.post('resource.php?module=web_services&function=get_link&action=index&folder=hen_tra_ket_qua:').done(function(data) {
       elem=1 + Math.floor(Math.random() * 1000000000);
        width=90;
        height=90;
         ID_LuotKham=rowData_grdchuaThanhToan["ID_LuotKham"];
         //alert(ID_LuotKham);
       var folder= data.split(';');
       var links="resource.php?module=canlamsang&view=hen_tra_ket_qua&id_form=754&id_loai=90&idluotkham="+ID_LuotKham;
      dialog_add_dm("",width,height,elem,links);
               })
    });

 $("#thongtinluotkham").click(function(e){
  //alert();
        tenBenhNhan=rowData_grdchuaThanhToan["TenBenhNhan"];
       ID_LuotKham=rowData_grdchuaThanhToan["ID_LuotKham"];
        parent.postMessage("editluotkham;"+ID_LuotKham+";"+tenBenhNhan, "*");

    });

$("#thongtinbenhnhan").click(function(e){
        idbenhnhan=rowData_grdchuaThanhToan["ID_BenhNhan"];
        tenBenhNhan=rowData_grdchuaThanhToan["TenBenhNhan"];

      //alert(idbenhnhan);
        parent.postMessage("editbenhnhan;"+idbenhnhan+";"+tenBenhNhan, "*");


    })










 function moghichu(id_benhnhan, hoten) {
        elem = 1 + Math.floor(Math.random() * 1000000000);
        dialog_main("Ghi chú của bệnh nhân: " + hoten, 100, 70, elem, 'resource.php?module=hanhchinh&view=ghi_chu&id_form=230&idbenhnhan=' + id_benhnhan)
    }
     $( "#xem" ).click(function() {
		 window.search_dialog=0;
       /*var fd= $( '#from_day' ).datepicker( "getDate" );
       var d= $( '#from_day' ).val();*/
      // var td= $( '#to_day' ).datepicker( "getDate" );
            //alert($( '#from_day' ).val());
                     //   alert($( '#to_day' ).val());
                     if(window.contro=="1"){
                      /*$("#rowed4").jqGrid('setGridParam',{url:'resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_rowed4&id_tang=',datatype:'json'}).trigger('reloadGrid');*/
                      $("#rowed14").jqGrid('setGridParam',{datatype:'json',url:'resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_ds_chuathanhtoanNoiTru&tu_ngay='+ $( '#from_day' ).val()+'&den_ngay='+$( '#to_day' ).val(),datatype:'json'}).trigger('reloadGrid');
                     }
                     else if(window.contro=="2"){
                        $("#rowed3").jqGrid('setGridParam',{datatype:'json',url:'resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_ds_chuathanhtoan&tu_ngay='+ $( '#from_day' ).val()+'&den_ngay='+$( '#to_day' ).val(),datatype:'json'}).trigger('reloadGrid');
                     }
                     else if(window.contro=="3"){
                        $("#rowed5").jqGrid('setGridParam',{url:'resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_tonghopthuchi&tungay='+ $( '#from_day' ).val()+'&denngay='+$( '#to_day' ).val()+" 23:59",datatype:'json'}).trigger('reloadGrid');
                     }
                     else if(window.contro=="4"){
                        $("#rowed6").jqGrid('setGridParam',{url:'resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_dscacphieuhoantrachidinh&tungay='+ $( '#from_day' ).val()+'&denngay='+$( '#to_day' ).val()+" 23:59",datatype:'json'}).trigger('reloadGrid');
                     }
                     else if(window.contro=="5"){
                        $("#rowed8").jqGrid('setGridParam',{url:'resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_benhnhanconno&tunngay='+$( '#from_day' ).val()+'&denngay='+$( '#to_day' ).val()+" 23:59",datatype:'json'}).trigger('reloadGrid');
                     }
                     else if(window.contro=="6"){
                        $("#rowed10").jqGrid('setGridParam',{datatype:'json',url:'resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_billhuychinhsua&tungay='+ $( '#from_day' ).val()+'&denngay='+$( '#to_day' ).val()+" 23:59",datatype:'json'}).trigger('reloadGrid');
                     }
                     else if(window.contro=="7"){
                        $("#rowed12").jqGrid('setGridParam',{url:'resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_cacphieuthuchi&tungay='+ $( '#from_day' ).val()+'&denngay='+$( '#to_day' ).val()+" 23:59",datatype:'json'}).trigger('reloadGrid');
                     }
                      else if(window.contro=="8"){
                        //alert('d')   ;
                                         $("#rowed13").jqGrid('setGridParam',{url:'resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_cacdonthuoctralai&tungay='+ $( '#from_day' ).val()+'&denngay='+$( '#to_day' ).val()+" 23:59",datatype:'json'}).trigger('reloadGrid');
                     } else if(window.contro=="9"){
                        //alert('d')   ;
                                         $("#rowed15").jqGrid('setGridParam',{url:'resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_denghitamung&tungay='+ $( '#from_day' ).val()+'&denngay='+$( '#to_day' ).val()+" 23:59",datatype:'json'}).trigger('reloadGrid');
                     }
                     else{

                     }
              
                    var d=$("#rowed3").jqGrid('getGridParam', 'records');
                    //$("#rowed3").jqGrid('setGridParam',{url:'resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_ds_chuathanhtoan&tungay='+ $( '#from_day' ).val()+'&denngay='+$( '#to_day' ).val()+" 23:59",datatype:'json'}).trigger('reloadGrid');

             $("#rowed3").jqGrid('setCaption', 'Danh sách chưa thanh toán: '+ d);
    });
function create_grid2() {
          $("#rowed4").jqGrid({
            url: '',
            datatype: "local",
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
            caption: "Danh sách bệnh nhân chờ"
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
    url:"",
    datatype: "local",
    colNames:['Mã BN','Họ(tên lót)','Tên','Tuổi','Điện thoại','Địa chỉ','Giảm giá','Hủy chỉ định / Thuốc trả lại','Nợ cũ','Tổng phải trả','Đã trả','Nợ mới'],
    colModel:[
        {name:'MaBenhNhan',index:'MaBenhNhan',search:true, width:"1%", editable:false,align:'left',hidden:false},
        {name:'HoLotBenhNhan',index:'HoLotBenhNhan',search:true, width:"2%", editable:false,align:'left',hidden:false},
        {name:'TenBenhNhan',index:'TenBenhNhan',search:true, width:"1%", editable:true,align:'left',hidden:false},
        {name:'NamSinh',index:'Tuoi', width:"1%",search:true, editable:true,align:'left',hidden:false},
        {name:'DienThoai',index:'DienThoai1',search:true, width:"1%", editable:true,align:'left',hidden:false},
        {name:'DiaChi',index:'DiaChi',search:true, width:"3%", editable:true,align:'left',hidden:false},

        {name:'GiamGia',index:'GiamGia',formatter:'number',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: "", defaultValue: '0'},search:true, width:"1%", editable:true,align:'right',hidden:false},
        {name:'TienHuyChiDinh',formatter:'number',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: "", defaultValue: '0'},index:'TienHuyChiDinh',search:true, width:"2%", editable:true,align:'right',hidden:false},
        {name:'NoCu',index:'NoCu',formatter:'number',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: "", defaultValue: '0'}, width:"1%",search:true, editable:true,align:'right',hidden:false},
        {name:'TongTienPhaiTra',classes: "col1",formatter:'number',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: "", defaultValue: '0'},index:'TongTienPhaiTra',search:true, width:"1%", editable:true,align:'right',hidden:false},
        {name:'SoTienThanhToan',classes: "col2",formatter:'number',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: "", defaultValue: '0'},index:'SoTienThanhToan',search:true, width:"1%", editable:true,align:'right',hidden:false},
        {name:'NoCuoi',formatter:'number',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: "", defaultValue: '0'},index:'NoCuoi',search:true, width:"1%", editable:true,align:'right',hidden:false},
    ],



        loadonce: true,
        scroll: false,
        modal:true,
        rowNum: 1000,
        rowList:[],
        //pager: '#prowed5',
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
        footerrow:true,


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

                var rowData = jQuery('#rowed5').getRowData(ids[i]);
                     var nomoi=rowData["NoCuoi"];

                     if(nomoi>0)
                     {

                      $("#rowed5").setCell(ids[i], 'NoCuoi', '', {background: 'red'});


                     }
                     if(nomoi<0)
                     {

                      $("#rowed5").setCell(ids[i], 'NoCuoi', '', {background: 'yellow'});


                     }
                  /* for(j=0;j<allRowsInGrid.length;j++){
                     tongphaitra = parseInt(allRowsInGrid[i].TongTienPhaiTra)+parseInt(allRowsInGrid[i].NoCu)-parseInt(allRowsInGrid[i].GiamGia)-parseInt(allRowsInGrid[i].TienHuyChiDinh);
                     $("#rowed5").jqGrid('setRowData', ids[i], {TongPhaiTra: tongphaitra});


                         }*/

               }
               $("#luot").html($('#rowed5').jqGrid('getGridParam','records'));


                 sumGiamGia = $("#rowed5").jqGrid("getCol", "GiamGia", false, "sum");
                 sumTienHuyChiDinh = $("#rowed5").jqGrid("getCol", "TienHuyChiDinh", false, "sum");
                 sumNoCu = $("#rowed5").jqGrid("getCol", "NoCu", false, "sum");
                 sumTongTienPhaiTra = $("#rowed5").jqGrid("getCol", "TongTienPhaiTra", false, "sum");
                 sumSoTienThanhToan = $("#rowed5").jqGrid("getCol", "SoTienThanhToan", false, "sum");
                 sumNoCuoi = $("#rowed5").jqGrid("getCol", "NoCuoi", false, "sum");

               countMP=  $("#rowed5").getGridParam("reccount");

              $("#rowed5").jqGrid("footerData", "set", {
                GiamGia: sumGiamGia,
                TienHuyChiDinh: sumTienHuyChiDinh,
                NoCu: sumNoCu,
                TongTienPhaiTra: sumTongTienPhaiTra,
                SoTienThanhToan: sumSoTienThanhToan,
                NoCuoi: sumNoCuoi,
                MaBenhNhan:"Số ca: "+countMP });








        },
        caption: "Tổng hợp thu chi"
    });
$("#rowed5").jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});
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
    url:"",
    datatype: "local",
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
    colNames:['Mã BN','Tên bệnh nhân','Địa chỉ','Điện thoại','Nợ cuối','','Công ty','Đợt khám','Mã phiếu','Đối tượng','ID_PhanLoaiKham','Phân L.Khám'],
    colModel:[
        {name:'MaBenhNhan',sortable: true,search:true,sorttype: 'number',index:'MaBenhNhan', width:"1%", editable:false,align:'left',hidden:false},
        {name:'TenBenhNhan',width:"2%",sortable: true,search:true,sorttype: 'text',index:'TenBenhNhan',editable:false,align:'left',hidden:false},
        {name:'DiaChi',index:'DiaChi', width:"2%", editable:true,align:'left',hidden:false},
        {name:'DienThoai',sortable: true,search:true,sorttype: 'text',index:'DienThoai', width:"1%", editable:true,align:'left',hidden:false},
        {name:'No',width:"1%",formatter:'number',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: "", defaultValue: '0'},sorttype: 'number',index:'No',sortable: true,search:true,sorttype: 'number',  editable:true,align:'right',hidden:false},
        {name:'ID_BenhNhan',index:'ID_BenhNhan', width:"2%", editable:true,align:'right',hidden:true},
        {name:'TenCty',index:'TenCty', search:true,width:"4%", editable:true,align:'left',hidden:false},
        {name:'TenDotKham',index:'TenDotKham',search:true, width:"3%", editable:true,align:'left',hidden:false},
        {name:'MaPhieu',index:'MaPhieu',search:true, width:"1%", editable:true,align:'left',hidden:false},
        {name:'DoiTuong',index:'DoiTuong',search:true, width:"1%", editable:true,align:'left',hidden:false},
        {name:'ID_PhanLoaiKham',index:'ID_PhanLoaiKham',search:true, width:"0%", editable:true,align:'left',hidden:true},
        {name:'TenPhanLoaiKham',sortable: true,search:true,sorttype: 'text',index:'TenPhanLoaiKham', width:"1%", editable:true,align:'left',hidden:false},
    ],
        loadonce: true,
        scroll: false,
        modal:true,
        rowNum: 1000,
        rowList:[],
       // pager: '#prowed8',
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
footerrow:true,

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


var ids = $('#rowed14').jqGrid('getDataIDs');

    
                   





               $("#ca").html($('#rowed8').jqGrid('getGridParam','records'));
               var ids = $('#rowed8').jqGrid('getDataIDs');
              var nocuoi =0;
                for (i = 0; i < ids.length; i++) {

                    var rowData = jQuery('#rowed8').getRowData(ids[i]);
                      var ID_PLoaiKham  =rowData["ID_PhanLoaiKham"];
                        if(ID_PLoaiKham==46)
                        {
                            $("#rowed8").setCell (ids[i],'MaBenhNhan','',{ background:'orange'});

                        }


                    nocuoi =parseFloat(nocuoi) + parseFloat(rowData["No"]);


                }
                $("#nocuoi2").val(formatMoney(nocuoi));


                 sumNo = $("#rowed8").jqGrid("getCol", "No", false, "sum");
                  //sumChi = $("#rowed12").jqGrid("getCol", "TienChiRa", false, "sum");
               countMP=  $("#rowed8").getGridParam("reccount");

$("#rowed8").jqGrid("footerData", "set", {No: sumNo,MaBenhNhan:"Cas "+countMP });

        },
        caption: ""
    });
$("#rowed8").jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});

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
       // pager: '#prowed9',
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
$("#rowed9").jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});

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
        footerrow: true,


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
                           // $("#"+ids[i]).css("background-color","yellow");
            }
        },
        caption: ""
    });
$("#rowed10").jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});
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







/*$row["DaCoHDKCBNgoaiTru"],
        $row["DaCoHDThuocNgoaiTru"],
        $row["DaCoHDThuocNoiTru"],
        $row["DaCoHDKCBNoiTru"],
*/


    $("#rowed12").jqGrid({
    url:'',
    datatype: "local",
    colNames:['Số phiếu','Ngày nộp','Mã BN','Họ lót','Tên BN','Diễn giải','Bởi','Thu','Chi','SHĐ KCB','SHĐ Thuốc','SHĐ Thuốc Nội','SHĐ KCB nội','','','',''],
    colModel:[
        {name:'MaPhieu',index:'MaPhieu', width:"2%", editable:false,align:'left',hidden:false},
        {name:'NgayGio',index:'NgayGio', width:"2%", editable:false,align:'left',hidden:false},
        {name:'MaBenhNhan',sortable: true,search:true,sorttype: 'number',index:'MaBenhNhan', width:"1%", editable:true,align:'left',hidden:false},
        {name:'HoLotBenhNhan',index:'HoLotBenhNhan', width:"2%", editable:true,align:'left',hidden:false},
        {name:'TenBenhNhan',sortable: true,search:true,sorttype: 'text',index:'TenBenhNhan', width:"1%", editable:true,align:'left',hidden:false},
        {name:'GhiChu',index:'GhiChu', width:"4%", editable:true,align:'left',hidden:false},
        {name:'TenNhanVien',sortable: true,search:true,sorttype: 'text',index:'TenNhanVien', width:"1%", editable:true,align:'left',hidden:false},
        {name:'TienThuVao',summaryType: 'sum',formatter:'currency',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: "", defaultValue: '0'},sortable: true,search:true,sorttype: 'number',index:'TienThuVao', width:"2%", editable:true,align:'right',hidden:false},
        {name:'TienChiRa',summaryType: 'sum',formatter:'currency',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: "", defaultValue: '0'},sortable: true,search:true,sorttype: 'number',index:'TienChiRa', width:"2%", editable:true,align:'right',hidden:false},
        {name:'DaCoHDKCBNgoaiTru',index:'DaCoHDKCBNgoaiTru', width:"2%", editable:false,align:'center',hidden:false},
        {name:'DaCoHDThuocNgoaiTru',index:'DaCoHDThuocNgoaiTru', width:"2%", editable:false,align:'center',hidden:false},
        {name:'DaCoHDThuocNoiTru',index:'DaCoHDThuocNoiTru', width:"2%", editable:false,align:'center',hidden:false},
        {name:'DaCoHDKCBNoiTru',index:'DaCoHDKCBNoiTru', width:"2%", editable:false,align:'center',hidden:false},
        {name:'ID_BenhNhan',index:'ID_BenhNhan',hidden:true},
        {name:'LoaiThanhToan',index:'LoaiThanhToan',hidden:true},
		{name:'ID_PhanLoaiKham',index:'ID_PhanLoaiKham',hidden:true},
		{name:'LoaiDoiTuongKham',index:'LoaiDoiTuongKham',hidden:true},
    ],
        loadonce: true,
        scroll: false,
        modal:true,
        rowNum: 1000,
        rowList:[],
        sortname: 'TenNhanVien',
        sortorder: "asc",
        height:100,
        width: 100,
        viewrecords: true,
        ignoreCase:true,
        shrinkToFit:true,
        viewrecords: false,
        ignoreCase:true,
        pginput:false,
        pgbuttons:false,
        footerrow: true,



    grouping: true,
    rownumbers: true,
    autowidth:true,
    groupingView: {groupField: ['TenNhanVien'],
    groupOrder: ['desc'],
    groupSummary: [false],
    showSummaryOnHide: [false],
    groupColumnShow: [true],
    groupText: [' <b >{0}</b>  <b style="color: orangered;font-size:14px;"> Thu {TienThuVao}</b>  đồng -----<b style="color: blue;font-size:14px;"> Chi {TienChiRa}</b>  đồng.'],
    groupCollapse: false,
    showSummaryOnHide: false,



 },
















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
				 var ID_PhanLoaiKham = rowData[''];

                 if(rowData['LoaiThanhToan']=='TamUng'){
                      parent.postMessage('tamung;tam_ung;'+id_benhnhan+';0;'+rowId+';edit;'+MaBenhNhan+';'+TenBenhNhan, "*");
                 }else if(rowData['LoaiThanhToan']=='HoanUng'){
                      parent.postMessage('hoanung;hoan_ung;'+id_benhnhan+';0;'+rowId+';edit;'+MaBenhNhan+';'+TenBenhNhan, "*");
                 }else if(rowData['LoaiThanhToan']=='ThanhToanLuotKham' && rowData['ID_PhanLoaiKham']!=46){
					 if(rowData['LoaiDoiTuongKham']=='BHYT'){						
						  parent.postMessage('thutrano_edit;ngoaitru_bhyt;'+rowId+';'+id_benhnhan+';edit;'+MaBenhNhan+';'+TenBenhNhan, "*");
					 }else{
						   parent.postMessage('thutrano_edit;chitietthungan;'+rowId+';'+id_benhnhan+';edit;'+MaBenhNhan+';'+TenBenhNhan, "*");
					 }
                   
                 }
				 else if(rowData['LoaiThanhToan']=='ThanhToanLuotKham' && rowData['ID_PhanLoaiKham']==46){
					  if(rowData['LoaiDoiTuongKham']=='BHYT'){						
						  parent.postMessage('thutrano_edit;noitru_bhyt;'+rowId+';'+id_benhnhan+';edit;'+MaBenhNhan+';'+TenBenhNhan, "*");
					 }else{
						 parent.postMessage('thutrano_edit;thanhtoannoitru;'+rowId+';'+id_benhnhan+';edit;'+MaBenhNhan+';'+TenBenhNhan, "*");
					 }
                  
                 }


        },
        loadComplete: function(data,rowid) {
			/*if(search_dialog==0){
				setTimeout(function(){$("#rowed12")[0].triggerToolbar();},100)
			}*/
              var ids = $('#rowed12').jqGrid('getDataIDs');
              var tongthu =0;
              var tongchi =0;
                for (i = 0; i < ids.length; i++) {
                    var rowData = jQuery('#rowed12').getRowData(ids[i]);

                    tongthu =parseFloat(tongthu) + parseFloat(rowData["TienThuVao"]);
                    tongchi =parseFloat(tongchi) + parseFloat(rowData["TienChiRa"]);
                    //ID_PhanLoaiKham
                    var  ID_PLoaiKham=(rowData["ID_PhanLoaiKham"]);

                        if(ID_PLoaiKham!=46)
                        {
							if(rowData['LoaiDoiTuongKham']=='BHYT'){
								$("#rowed12").setCell (ids[i],'MaPhieu','',{ background:'yellow'});
							}
                        }else
                        {
							if(rowData['LoaiDoiTuongKham']=='BHYT'){
								$("#rowed12").setCell (ids[i],'MaPhieu','',{ background:'yellow'});
							}else{
                          		 $("#rowed12").setCell (ids[i],'MaPhieu','',{ background:'orange'});
							}
                        }
                }
              /*  $("#dong2").html($('#rowed12').jqGrid('getGridParam','records'));
                 $("#tongthu").val(formatMoney(tongthu));
                 $("#tongchi").val(formatMoney(tongchi));
                 $("#tongthu2").val(formatMoney(tongthu));
                 $("#tongchi2").val(formatMoney(tongchi));
                 $("#conlai").val(formatMoney(tongthu-tongchi));*/

                 sumThu = $("#rowed12").jqGrid("getCol", "TienThuVao", false, "sum");
                  sumChi = $("#rowed12").jqGrid("getCol", "TienChiRa", false, "sum");
               countMP=  $("#rowed12").getGridParam("reccount");

$("#rowed12").jqGrid("footerData", "set", {GhiChu: "Còn lại: "+ (sumThu-sumChi).formatMoney(0, ',', '.'), TienThuVao: sumThu,TienChiRa: sumChi,MaPhieu:"Số phiếu: "+countMP });




        },
        caption: ""
    });
$("#rowed12").jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});
}
function create_grid11(){
    $("#rowed13").jqGrid({
    url:'',
    datatype: "local",
    colNames:['Mã phiếu','Ngày lập phiếu','Người lập phiếu',
    'Mã BN','Tên BN','Ghi chú','Tiền thuốc trả lại',
    'Đã giải quyết','Mã phiếu thanh toán','Số tiền Phiếu thanh toán','Nợ cuối','','','',''],
    colModel:[
        {name:'MaPhieu',index:'MaPhieu', width:"3%", editable:false,align:'center',hidden:false},
        {name:'NgayLapPhieu',index:'NgayLapPhieu', width:"2%", editable:false,align:'left',hidden:false},
        {name:'NguoiLapPhieu',index:'NguoiLapPhieu', width:"2%", editable:false,align:'left',hidden:false},
        {name:'MaBenhNhan',index:'MaBenhNhan', width:"2%", editable:true,align:'left',hidden:false},
        {name:'TenBenhNhan',index:'TenBenhNhan', width:"2%", editable:true,align:'left',hidden:false},
        {name:'GhiChu',index:'GhiChu', width:"2%", editable:true,align:'left',hidden:false},
        {name:'TienThuocTraLai',index:'TenNhanVien', width:"2%", editable:true,align:'left',hidden:false},
        {name:'DaHoanTien',index:'TienThuVao', width:"2%", editable:true,align:'right',hidden:false},
        {name:'MaPhieuThanhToan',index:'TienChiRa', width:"2%", editable:true,align:'right',hidden:false},
        {name:'SoTienPhieuThanhToan',index:'SoTienPhieuThanhToan', width:"2%", editable:true,align:'right',hidden:false},
        {name:'NoCuoi',index:'NoCuoi', width:"2%", editable:true,align:'right',hidden:false},
        {name:'ID_NhapKho',index:'ID_NhapKho', width:"0%", editable:true,align:'right',hidden:true},
		{name:'tienvon',index:'tienvon', width:"0%", editable:true,align:'right',hidden:true},
		{name:'ID_BenhNhan',index:'ID_BenhNhan', width:"0%", editable:true,align:'right',hidden:true},
		{name:'ID_ThuTraNo',index:'ID_ThuTraNo', width:"0%", editable:true,align:'right',hidden:true},
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
 				 rowData = $("#rowed13").getRowData(rowId);
                 var ID_BenhNhan = $.trim(rowData['ID_BenhNhan']);
				 var DaHoanTien = $.trim(rowData['DaHoanTien']);
                 var ID_NhapKho = $.trim(rowData['ID_NhapKho']);
                 var tienvon = $.trim(rowData['tienvon']);
				 var MaPhieu = $.trim(rowData['MaPhieu']);
				 var NgayLapPhieu = $.trim(rowData['NgayLapPhieu']);
				 var TienThuocTraLai = $.trim(rowData['TienThuocTraLai']);
				 var ID_ThuTraNo=$.trim(rowData['ID_ThuTraNo']);
				 if(DaHoanTien==0){
                	 parent.postMessage('trathuoc;trathuoc;'+ID_BenhNhan+';'+ID_NhapKho+';'+tienvon+';'+MaPhieu+';'+NgayLapPhieu+';'+TienThuocTraLai+';add', "*");
				 }else{
					 parent.postMessage('trathuoc;trathuoc;'+ID_ThuTraNo+';'+ID_NhapKho+';'+tienvon+';'+MaPhieu+';'+NgayLapPhieu+';'+TienThuocTraLai+';edit', "*");
				 }
        },
        loadComplete: function(data,rowid) {


        },
        caption: ""
    });
}


function create_grid15(){
    $("#rowed15").jqGrid({
    url:'',
    datatype: "local",
    colNames:['Mã BN','Họ(tên lót)','Tên','Tuổi','Năm sinh','BS chỉ định','Diễn giải','Tổng phải trả','Đã giải quyết','',''],
    colModel:[
        {name:'mabn',index:'mabn', width:"3%", editable:false,align:'center',hidden:false},
        {name:'holot',index:'holot', width:"2%", editable:false,align:'left',hidden:false},
        {name:'ten',index:'ten', width:"2%", editable:false,align:'left',hidden:false},
        {name:'tuoi',index:'tuoi', width:"2%", editable:true,align:'left',hidden:false},
        {name:'namsinh',index:'namsinh', width:"2%", editable:true,align:'left',hidden:false},
        {name:'bschidinh',index:'bschidinh', width:"2%", editable:true,align:'left',hidden:false},
        {name:'diengiai',index:'diengiai', width:"2%", editable:true,align:'left',hidden:false},
        {name:'tongtien',index:'tongtien', width:"2%", editable:true,align:'right',hidden:false},
        {name:'giaiquyet',index:'giaiquyet', width:"2%", editable:true,align:'right',hidden:false},
		{name:'luotkham',index:'luotkham', width:"2%", editable:true,align:'right',hidden:true},
		{name:'id_benhnhan',index:'id_benhnhan', width:"2%", editable:true,align:'right',hidden:true},
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
 				 rowData = $("#rowed15").getRowData(rowId);
                 var ID_BenhNhan = $.trim(rowData['id_benhnhan']);
				 var giaiquyet = $.trim(rowData['giaiquyet']);

				 var tongtien = $.trim(rowData['tongtien']);
				 var luotkham=$.trim(rowData['luotkham']);
				 if(giaiquyet==0){
                	 parent.postMessage('tamung;tam_ung_notru;'+ID_BenhNhan+';'+luotkham+';'+tongtien+';add','*');
				 }else{
					// parent.postMessage('tam_ung_notru;tam_ung_notru;'+ID_BenhNhan+';0;'+rowId+';edit;'+MaBenhNhan+';'+TenBenhNhan, "*");
				 }
        },
        loadComplete: function(data,rowid) {


        },
        caption: ""
    });
}
</script>

