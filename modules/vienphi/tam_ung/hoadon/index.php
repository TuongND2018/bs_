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
                             <span class="custom-combobox" >
              <input id='com_thuochmk' class='com_thuochmk'  ></span>
              <input id='com_thuochmk1' class='com_thuochmk1'  style="width:200px;display:none">
                        </span>
                    </div>
        </div>
        <div >
            <div id="tabs">
               <ul style="margin-left:5px;">
                <li><a href="#tabs-1" id="dsbenhnhancho">DS chưa lưu hóa đơn</a></li>
                <li><a href="#tabs-2" id="dschuathanhtoan">DS đã lưu hóa đơn</a></li>
                <li><a href="#tabs-3" id="tonghopthuchi">DS hóa đơn hủy</a></li>

              </ul>
                  <div id="tabs-1">


              <div id="panel_main2" style="margin-top:10px;" >
                     <div class="ui-layout-north n_tren">
                         <table id="rowed14" ></table>
                    </div>
                    <div class="ui-layout-center n_duoi">
                       <table id="rowed15" ></table>
                    </div>
                 </div>




                  </div>
                  <div id="tabs-2">
                   <table id="rowed3" ></table>
                  </div>
                  <div id="tabs-3">
                    <table id="rowed5"></table>

                  </div>

            </div>

    </div>
</div>

</body>
</html>

<script type="text/javascript">
    jQuery(document).ready(function() {





      window.ma=0;

  openform_shortcutkey(); //mở bằng phím tắt được thiết lập trong DBpduye
    $("#panel_main2").css("height",$(window).height()-100+"px");
    $("#panel_main2").fadeIn(1000);


		//search_thungan("#rowed12,#rowed3");
		//window.search_dialog=0;
		$.dateEntry.setDefaults({spinnerImage: ''});
		jwerty.key('f5', false);

		$('body').bind('keydown', function(e) {
			if (jwerty.is("f5",e)) {
				$('#xem').click();
			}
		})


create_combobox('#com_thuochmk','#com_thuochmk1',".data_thuochmk","#data_thuochmk",create_ds_pbChuyenMon,500,240,'Danh mục ','data_pbchuyenmon',window.default_id_pb_ChuyenMon);


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
        $("#xem").button();
        $( "#tabs" ).tabs({

         <!--heightStyle:"fill", -->



         });
        $( "#tabs" ).tabs({ active: 0 });
       // .tabs( "select" , index )
       create_layout();
          create_grid();

          create_grid3();

          create_grid14();
            create_grid15('[]');

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
      // $('#rowed3').jqGrid('setCaption', 'Danh sách chưa thanh toán '+ $("#rowed3").jqGrid('getGridParam', 'records'));
    })


function getMaxHD()
{

    $.ajax({
        type: 'POST',
        async : true,
        url: 'resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_MaxHD',

        success: function(output, status, xhr) {
            output=jQuery.parseJSON(output);
            window.ma=output.rows[0]['cell'][0];


        },


    });
}

function create_ds_pbChuyenMon(elem,datalocal){
     datalocal=jQuery.parseJSON(datalocal);
       $(elem).jqGrid({
      datastr:datalocal,
      datatype: "jsonstring" ,
    colNames:['Loại HĐ','Diễn giải'],
    colModel:[
      {name:'TenLoaiHD',index:'TenLoaiHD',hidden :false,width: "25%",},
      {name:'DienGiai',index:'DienGiai',hidden :false,width: "75%",},


    ],
    hidegrid: false,
    gridview: true,
    loadonce: true,
    scroll: false,
    modal:true,
    rowNum: 200000,
    rowList:[],
    sortname: 'tenhangmuc',
    height:200,
    width: 500,
    viewrecords: true,
    ignoreCase:true,
    shrinkToFit:true,
    cmTemplate: {sortable:false},
    sortorder: "desc",
    serializeRowData: function (postdata) {
    },
    onSelectRow: function(id){



        if($(elem).data('clicked')){
        var selr = jQuery(elem).jqGrid('getGridParam','selrow');

      }

    },
    ondblClickRow: function (id, rowIndex, columnIndex) {

    },
    loadComplete: function(data) {
    grid_filter_enter(elem) ;
    count = jQuery(elem).jqGrid('getGridParam', 'records');
      if(count>0){
        ids = ($(elem).getDataIDs()[0]);
        $(elem).jqGrid("setSelection",ids, true);
      }
    },

  });

   $(elem).jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false,defaultSearch:"cn"});
   $(elem).jqGrid('bindKeys', {} );

}

    function resize_control() {

        $("#rowed3").setGridWidth($(window).width()-50);
        $("#rowed3").setGridHeight($(window).height()-$("#top_main").height()-$(".ui-tabs-nav").height()-130);

        $("#rowed5").setGridWidth($(window).width()-45);
        $("#rowed5").setGridHeight($(window).height()-$("#top_main").height()-$(".ui-tabs-nav").height()-130);

        $("#rowed14").setGridWidth($(window).width()-50);
      //  $("#rowed14").setGridHeight($(window).height()-$("#top_main").height()-$(".ui-tabs-nav").height()-130);

        $("#rowed15").setGridWidth($(window).width()-50);
      //  $("#rowed15").setGridHeight($(window).height()-$("#top_main").height()-$(".ui-tabs-nav").height()-150);



      //  $("#rowed14").setGridHeight($('.n_duoi').height()-90);
        $("#rowed14").setGridHeight($('.n_tren').height()-90);
        $("#rowed15").setGridHeight($('.n_duoi').height()-95);


    }


 function create_grid14() {


        $("#rowed14").jqGrid({
            url: 'resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_ds_chualapHoaDon',
            datatype: "json",
            colNames: ['LuotKham', 'Mã BN', 'Họ lót','Tên BN','Địa chỉ','Đối tượng','Giờ đến','Phải trả','Tổng dịch vụ','Miễn giảm'],
            colModel: [
            {name: 'ID_LuotKham', index: 'ID_LuotKham', width: "0%", editable: false, align: 'left', hidden: true},
            {name: 'MaBenhNhan',width: "2%",  classes: "CotSoTien", sortable: true,sorttype: 'number', index: 'MaBenhNhan', search: true, editable: false, align: 'left', hidden: false},
            {name: 'HoLotBenhNhan',width: "5%",  sortable: true, index: 'TenBenhNhan', search: true, editable: false, align: 'left', hidden: false},
            {name: 'TenBenhNhan', width: "4%",sortable: true, index: 'TenBenhNhan', search: true,  editable: false, align: 'left', hidden: false},
            {name: 'DiaChi', width: "10%",sortable: true, index: 'DiaChi', search: true,  editable: false, align: 'left', hidden: false},
            {name: 'LoaiDoiTuongKham',width: "2%", sortable: true, index: 'LoaiDoiTuongKham', search: true,  editable: false, align: 'left', hidden: false},
            {name: 'ThoiGianVaoKham',width: "6%",sortable: true,search: true, index: 'ThoiGianVaoKham', align: 'left', hidden: false, },
            {name: 'TongPhaiTra', width: "4%",formatter:'number',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: "", defaultValue: '0'},sortable: true, index: 'TongPhaiTra', search: true,  editable: false, align: 'left', hidden: false},
            {name: 'TongTienDichVu', width: "4%",formatter:'number',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: "", defaultValue: '0'},sortable: true, index: 'TongTienDichVu', search: true,  editable: false, align: 'left', hidden: false},
            {name: 'TongMienGiam',formatter:'number',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: "", defaultValue: '0'}, width: "4%",sortable: true, index: 'TongMienGiam', search: true,  editable: false, align: 'left', hidden: false},
            ],
             multiselect: true,
            loadonce: true,
            scroll: false,
            modal: true,
            shrinkToFit: true,
            cmTemplate: {sortable: false},
            rowNum: 10000000,
            rowList: [],
            pager: '#prowed14',
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

//alert($("#com_thuochmk1").val());
var ID_LuotKham=rowData['ID_LuotKham'];
var ID_BenhNhan=rowData['ID_BenhNhan'];
var Ho_BenhNhan=rowData['HoLotBenhNhan'];
var Ten_BenhNhan=rowData['TenBenhNhan'];
// kiểm tra là loại lấy hóa đơn =1 thì mới hiển thị chi tiết HD theo 1 lượt khám
if($("#com_thuochmk1").val()==1){
dialog_main("Hóa đơn chi tiết "+ Ho_BenhNhan+' '+Ten_BenhNhan + '    *Hóa đơn này chưa lưu*', 100, 100, 56743265743657, "resource.php?module=<?=$modules?>&view=<?=$view?>&action=HDChiTiet&type=test&id_form=111&id_luotkham="+ID_LuotKham);  
}





            },
            onselect: function(rowId, rowIndex, columnIndex) {

            },
            onRightClickRow: function(rowid, iRow, iCol, e) {



            },
            loadComplete: function(data) {
                var ids = $('#rowed14').jqGrid('getDataIDs');


               
                //alert(window.ma);


                for (i = 0; i < ids.length; i++) {
                    var rowData = jQuery('#rowed14').getRowData(ids[i]);

                    window.rowcount_luoichuathanhtoan = $("#rowed14").getGridParam("reccount");





                    var d=$("#rowed14").jqGrid('getGridParam', 'records');


                    $("#rowed14").jqGrid('setCaption', 'Danh sách chưa thanh toán: '+ d);


                    sumTongCong = $("#rowed14").jqGrid("getCol", "TongPhaiTra", false, "sum");
                    sumTongDichVu = $("#rowed14").jqGrid("getCol", "TongTienDichVu", false, "sum");
                    sumTongMienGiam = $("#rowed14").jqGrid("getCol", "TongMienGiam", false, "sum");





                    $("#rowed14").jqGrid("footerData", "set", {
                      TongPhaiTra: sumTongCong,
                      TongTienDichVu: sumTongDichVu,
                      TongMienGiam: sumTongMienGiam,
                      MaBenhNhan:d
                    });
                }
            },
            caption: "Ds chưa lập hóa đơn"
        });
        $("#rowed14").jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});
        $("#rowed14").jqGrid('navGrid', "#prowed14", {add: false, edit: false, del: false, search: false, refresh: true, closeAfterEdit: true, clearAfterAdd: true, navkeys: [true, 38, 40], closeOnEscape: true});



$('.footrow td[aria-describedby="rowed14_HoLotBenhNhan"]').append('<input type="button" value="Chọn" onclick=addItem()> ');
$('.footrow td[aria-describedby="rowed14_HoLotBenhNhan"]').append('<input type="button" value="Bỏ" onclick=subItem()> ');
$('.footrow td[aria-describedby="rowed14_HoLotBenhNhan"]').append('<input type="button" value="Lưu" onclick=save()> ');



    }


function  addItem()
{
 //alert('2');
row= jQuery("#rowed14").jqGrid('getGridParam','selarrrow');
    for(i=0;i<row.length;i++){
    var rowData = jQuery('#rowed14').jqGrid ('getRowData', row[i]);
    parameters =
                {

                  initdata : rowData,
                  position :"last",
                  useDefValues : false,
                  useFormatter : false,
                  addRowParams : {extraparam:{}}
                }
        jQuery("#rowed15").jqGrid('addRow',parameters);
      jQuery("#rowed14").jqGrid('delRowData', row[i]);
      i--;

    }
    $('#rowed14').setGridParam({loadonce: true}).trigger('reloadGrid');
    $('#rowed15').setGridParam({loadonce: true}).trigger('reloadGrid');

}
function  subItem()
{
 //alert('2');
row= jQuery("#rowed15").jqGrid('getGridParam','selarrrow');
    for(i=0;i<row.length;i++){
    var rowData = jQuery('#rowed15').jqGrid ('getRowData', row[i]);
    parameters =
                {

                  initdata : rowData,
                  position :"last",
                  useDefValues : false,
                  useFormatter : false,
                  addRowParams : {extraparam:{}}
                }
        jQuery("#rowed14").jqGrid('addRow',parameters);
      jQuery("#rowed15").jqGrid('delRowData', row[i]);
      i--;

    }
     $('#rowed14').setGridParam({loadonce: true}).trigger('reloadGrid');
        $('#rowed15').setGridParam({loadonce: true}).trigger('reloadGrid');

}


function create_grid15(datalocal){

    datalocal=jQuery.parseJSON(datalocal);
     $("#rowed15").jqGrid({
    datastr:datalocal,
    datatype: "jsonstring" ,
   colNames: ['LuotKham', 'Mã BN', 'Họ lót','Tên BN','Địa chỉ','Đối tượng','Giờ đến','Phải trả','Tổng dịch vụ','Miễn giảm','SOHD'],
            colModel: [
            {name: 'ID_LuotKham', index: 'ID_LuotKham', width: "0%", editable: false, align: 'left', hidden: true},
            {name: 'MaBenhNhan',width: "2%",  classes: "CotSoTien", sortable: true,sorttype: 'number', index: 'MaBenhNhan', search: true, editable: false, align: 'left', hidden: false},
            {name: 'HoLotBenhNhan',width: "5%",  sortable: true, index: 'TenBenhNhan', search: true, editable: false, align: 'left', hidden: false},
            {name: 'TenBenhNhan', width: "4%",sortable: true, index: 'TenBenhNhan', search: true,  editable: false, align: 'left', hidden: false},
            {name: 'DiaChi', width: "10%",sortable: true, index: 'DiaChi', search: true,  editable: false, align: 'left', hidden: false},
            {name: 'LoaiDoiTuongKham',width: "2%", sortable: true, index: 'LoaiDoiTuongKham', search: true,  editable: false, align: 'left', hidden: false},
            {name: 'ThoiGianVaoKham',width: "6%",sortable: true,search: true, index: 'ThoiGianVaoKham', align: 'left', hidden: false, },
            {name: 'TongPhaiTra', width: "4%",formatter:'number',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: "", defaultValue: '0'},sortable: true, index: 'TongPhaiTra', search: true,  editable: false, align: 'left', hidden: false},
            {name: 'TongTienDichVu', width: "4%",formatter:'number',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: "", defaultValue: '0'},sortable: true, index: 'TongTienDichVu', search: true,  editable: false, align: 'left', hidden: false},
            {name: 'TongMienGiam',formatter:'number',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: "", defaultValue: '0'}, width: "4%",sortable: true, index: 'TongMienGiam', search: true,  editable: false, align: 'left', hidden: false},
            {name: 'SoHD',formatter:'number',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: "", defaultValue: '0'}, width: "4%",sortable: true, index: 'SoHD', search: true,  editable: false, align: 'left', hidden: false},
            ],
     multiselect: true,
     loadonce: true,
     scroll: false,
     modal:true,
     rowNum: 1000,
     rowList:[],
     pginput:false,
     pgbuttons:false,
     pager: '#prowed15',
     sortname: 'ID_NhanVien',
     height:100,
     width:100,
     viewrecords: false,
     ignoreCase:true,
  footerrow:true,

               loadComplete: function(data) {



               getMaxHD();


                var ids = $('#rowed15').jqGrid('getDataIDs');
    

                for (i = 0; i < ids.length; i++) {
                    var rowData = jQuery('#rowed15').getRowData(ids[i]);


                    window.rowcount_luoichuathanhtoan = $("#rowed15").getGridParam("reccount");


                    $("#rowed15").jqGrid('setCell',ids[i],'SoHD', i+window.ma+1);



                    var d=$("#rowed15").jqGrid('getGridParam', 'records');


                    $("#rowed15").jqGrid('setCaption', 'Danh sách : '+ d);


                    sumTongCong = $("#rowed15").jqGrid("getCol", "TongPhaiTra", false, "sum");
                    sumTongDichVu = $("#rowed15").jqGrid("getCol", "TongTienDichVu", false, "sum");
                    sumTongMienGiam = $("#rowed15").jqGrid("getCol", "TongMienGiam", false, "sum");





                    $("#rowed15").jqGrid("footerData", "set", {
                      TongPhaiTra: sumTongCong,
                      TongTienDichVu: sumTongDichVu,
                      TongMienGiam: sumTongMienGiam,
                      MaBenhNhan:d
                    });
                }
            },

        caption: "Danh sách các lượt đã chọn để lập hóa đơn",


  });

$("#rowed15").jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});
        $("#rowed15").jqGrid('navGrid', "#prowed15", {add: false, edit: false, del: false, search: false, refresh: true, closeAfterEdit: true, clearAfterAdd: true, navkeys: [true, 38, 40], closeOnEscape: true});

};



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
            caption: "Ds đã lưu hóa đơn"
        });
        $("#rowed3").jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});
        $("#rowed3").jqGrid('navGrid', "#prowed3", {add: false, edit: false, del: false, search: false, refresh: true, closeAfterEdit: true, clearAfterAdd: true, navkeys: [true, 38, 40], closeOnEscape: true});

    }



 function moghichu(id_benhnhan, hoten) {
        elem = 1 + Math.floor(Math.random() * 1000000000);
        dialog_main("Ghi chú của bệnh nhân: " + hoten, 100, 70, elem, 'resource.php?module=hanhchinh&view=ghi_chu&id_form=230&idbenhnhan=' + id_benhnhan)
    }
     $( "#xem" ).click(function() {
		 window.search_dialog=0;

                     if(window.contro=="1"){

                      $("#rowed14").jqGrid('setGridParam',{datatype:'json',url:'resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_ds_chualapHoaDon&tu_ngay='+ $( '#from_day' ).val()+'&den_ngay='+$( '#to_day' ).val(),datatype:'json'}).trigger('reloadGrid');
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
                     }
                     else{

                     }

                    var d=$("#rowed3").jqGrid('getGridParam', 'records');


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

function create_layout(){
    $('#panel_main2').layout({
            resizerClass: 'ui-state-default'
                    , north: {
                resizable: true
                        , size: "60%"
                        , resizerDblClickToggle: false
                        , onresize_end: function() {
                   resize_control();
                }
                , onopen_end: function() {
                        resize_control();
                }
                , onclose_end: function() {
                    resize_control();
                }

            }
            , center: {
                resizable: true
                        , size: "40%"
                        , resizerDblClickToggle: false
                        , onresize_end: function() {
                    resize_control();
                }
                , onopen_end: function() {
                    resize_control();
                }
                , onclose_end: function() {
                    resize_control();
                }
            }

        });
    }
</script>

