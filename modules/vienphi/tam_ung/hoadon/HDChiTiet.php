



<?php
    if(isset($_GET["ID_ThuTNo"])){
        echo "<script type='text/javascript'>";
        echo "window.ID_ThuTNo=".$_GET["ID_ThuTNo"];
        echo "</script>";

    }
   else
   {
      echo "<script type='text/javascript'>";
        echo "window.ID_ThuTNo=0";
        echo "</script>";

   }

    ?>











<style>

    #DM_template td  {
        word-wrap:normal!important;
        white-space:nowrap;
    }
    #DM_template_container{
        position:absolute;
        z-index:1000000;
        display:none;

    }
     button#last,button#first,button#prev,button#next{
         font-size:7px!important;
         margin-top:-6px;
        /* padding-left:20px;*/

     }
     #open_template,#add_template{
         font-size:11px!important;
         margin-top:-3px;
         margin-left:-6px;

     }
     .ui-widget-overlay {
          opacity:0.01;
          filter: alpha(opacity=1);
          -ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=1)";
          /*overlay trong suot*/
          }
      #open_template{
         border-radius:0px!important;
     }
     .ui-corner-all{
         border-radius:3px!important;
     }
     .fm-button{
         box-shadow:0px 0px 5px #383838;
         border:1px solid #919191;
     }
    .top_form{
        width:100%;
        height:139px;
        margin-top:3px;
    }
    .thongtin_tongthe,.thongtin_chidinh,.thongtin_luotkham{
        display:inline-block;
        box-shadow:0px 0px 10px #a0a0a0;
        border:1px solid #919191;
        vertical-align:top;
        width:49%;
    }
    .thongtin_chidinh{
        padding-bottom:4px;
        padding-top:4px;
    }
    .thongtin_luotkham{
        box-shadow:0px 0px 10px #a0a0a0;
        border:1px solid #919191;
        display:inline-block;
        vertical-align:top;
        width:55%;
        overflow-y:none;
        margin-top:2px;
        height:67px;
    }
    .thongtin_luotkham_scroll{
        overflow-y:scroll;
        width:100%;
        height:45px;
    }
    .canlamsang{
        vertical-align:top;
        overflow-y:scroll;
        height:76px;
        border-top:1px solid #919191;
        padding-top:2px;
        padding-left:2px;
        border-bottom:1px solid #919191;
    }
    .thongtin_luotkham div div{
        display:inline-block;
        box-shadow:0px 0px 10px #a0a0a0;
        border:1px solid #919191;
        font-size:11px;
        margin-left:2px;
        margin-top:2px;
        padding:2px;
        width:114px;
        height:30px;
        text-align:center;
        vertical-align:top;
        margin-bottom:2px;
        text-shadow:0 1px 0 rgba(255, 255, 255, 0.6);
        vertical-align:text-bottom;
        cursor:pointer;
    }

    .navigator{
         display:inline-block;
         border:1px solid #327E04;
         padding-top:6px;
         margin-top:-4px;
         margin-left:2px;
         padding-bottom:2px;
         padding-left:2px;
         padding-right:1px;
    }
    .navigator_title{
        display:inline-block;
        width:100px;
        text-align:center;
    }
    .ui-layout-mask {
        background:#FFF !important;
        opacity:.20 !important;
        filter: alpha(opacity=20) !important;
    }
    #mota{
        font-size:13px!important;
    }
    .sieuam1{
        background-color: #459E00;
    }
    .visibility {
    visibility: hidden;
    }
	.tt_phai
	{


        font-size:11px;
        margin-left:2px;

        width:450px;
      display:inline-block;



	}
    .tt_trai
    {
	 box-shadow:0px 0px 10px #a0a0a0;
        border:1px solid #919191;
        font-size:11px;
        margin-left:2px;
        margin-top:2px;
        padding:2px;
        width:450px;
      display:inline-block;
    }
	label
	{
		display:inline-block;
		width:75px;
	}


</style>



<body>
<div id="panel_main">
     <div class="ui-layout-north n_tren" id="chitietHD">

   	   <div class="tt_phai">
    	  <label for="soHD">Số HD</label>
    	  <input type="text" name="soHD" id="soHD" />

          <label for="kihieuHD">Kí hiệu</label>
          <input type="text" name="kihieuHD" id="kihieuHD" />

          <br> <label for="ngayKham">
         Ngày khám</label>
          <input type="text" name="ngayKham" id="ngayKham" />

          <label for="ngayHD">Ngày HĐ</label>
          <input type="text" name="ngayHD" id="ngayHD" />
          <label for="tenKH">Tên KH</label>
          <input type="text" name="tenKH" id="tenKH"  style="width:363px!important" />
           <label for="tendonvi">Tên đơn vị</label>
          <input type="text" name="tendonvi" id="tendonvi"  style="width:363px!important" />
           <label for="diachiKH">Địa chỉ KH</label>
          <input type="text" name="diachiKH" id="diachiKH"  style="width:363px!important" />


          <label for="soTk">Số TK</label>
          <input type="text" name="soTk" id="soTk" />

          <label for="maST">Mã số thuế</label>
          <input type="text" name="maST" id="maST" />


         <label for="hinhthuctt">Hình thức TT</label>
          <select name="hinhthuctt" id="hinhthuctt">
            <option value="1">Tiền mặt</option>
            <option value="2">Chuyển khoản</option>
            <option value="3">Tiền mặt/ chuyển khoản</option>
          </select>
             <input  type="text" name="id_soHD" id="id_soHD" disabled>



   	   </div>


        <div class="tt_phai">
        <label for="noidung">Nội dung</label>
        <textarea id ="noidung" name="noidung"  style="width:137px!important" ></textarea>
         <label for="ghichu">Ghi chú</label>
        <textarea id ="ghichu" name="ghichu"  style="width:137px!important" ></textarea>
          <label for="phaitra">Phải trả</label>
          <input type="text" name="phaitra" id="phaitra" />
            <label for="miengiam">Miễn giảm</label>
          <input type="text" name="miengiam" id="miengiam" />
           <label for="nguoiLap">Người lập</label>
          <input type="text" name="nguoiLap" style="width:363px!important" id="nguoiLap"/>
          <!--   <input name="luu" type="button" value="Lưu" id="save">
            <input name="sua" type="button" value="Sửa" id="sua">
            <input name="XemIn" type="button" value="Xem in" id="XemIn"> -->
            <div class="nut" >
 <button href="#" id="luu" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" style="margin-left:0px;  margin-bottom:1px; ">Lưu</button>
         <button href="#" id="sua" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" style="margin-left:0px;  margin-bottom:1px; ">Sửa</button>
         <button href="#" id="XemIn" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" style="margin-left:0px;  margin-bottom:1px; ">Xem in</button>
</div>






        </div>



    </div>


     <div id="dsBill" class="ui-layout-center n_duoi">
          <div id="tabs">
               <ul style="margin-left:5px;">
                <li><a href="#tabs-1" id="NhomDV">Chi tiết dịch vụ</a></li>
                <li><a href="#tabs-2" id="dsBill">DS các bill đã lập</a></li>

              </ul>
                  <div id="tabs-1">
                  	<table id="rowed30"></table>

                  </div>
                  <div id="tabs-2">   </div>
          </div>

    </div>

</div>
</body>
</html>
<script type="text/javascript">

    jQuery(document).ready(function() {

      $("#panel_main").css("height",$(window).height()-100+"px");
      $("#panel_main").fadeIn(1000);
      window.url_rowed30 = 'resource.php?module=vienphi>&view=hoadon&action=data_HoaDonChiTiet&ID_ThuTraNo='+ window.ID_ThuTNo;

      $( "#tabs" ).tabs({
      });
      $( "#tabs" ).tabs({ active: 0 });
      create_grid();
      create_layout();
      resize_control();
     

      LayDuLieuLoadForm(1);
     
      //khai báo các biến
     var _ID_HoaDonThueDiary;
      //khai báo các biến















});
    $('#luu').click(function(){

      var e = document.getElementById("hinhthuctt");
var hinhthuctt = e.options[e.selectedIndex].text;

      var dataToSend = '{';
         phancach = ",";
dataToSend +=  '"soHD":' + JSON.stringify($.trim($("#soHD").val()));
dataToSend += phancach + '"kihieuHD":' + JSON.stringify($.trim($("#kihieuHD").val()));
dataToSend += phancach + '"ngayKham":' + JSON.stringify($.trim($("#ngayKham").val()));
dataToSend += phancach + '"tenKH":' +JSON.stringify($.trim($("#tenKH").val()));
dataToSend += phancach + '"tendonvi":' +JSON.stringify($.trim($("#tendonvi").val()));
dataToSend += phancach + '"diachiKH":' + JSON.stringify($.trim($("#diachiKH").val()));
dataToSend += phancach + '"soTk":' + JSON.stringify($.trim($("#soTk").val()));
dataToSend += phancach + '"maST":' + JSON.stringify($.trim($("#maST").val()));
dataToSend += phancach + '"noidung":' + JSON.stringify($.trim($("#noidung").val()));
dataToSend += phancach + '"ghichu":' + JSON.stringify($.trim($("#ghichu").val()));
dataToSend += phancach + '"hinhthuctt":' + JSON.stringify($.trim($("#hinhthuctt").val()));
dataToSend += phancach + '"nguoiLap":' + JSON.stringify($.trim($("#nguoiLap_hidden").val()));
dataToSend += phancach + '"id_soHD":' + JSON.stringify(_ID_HoaDonThueDiary);



//dataToSend += phancach + '"soHD":' +JSON.stringify($.trim($("#soHD").val())) ;

//dataToSend += phancach + '"kihieuHD":' +JSON.stringify($.trim($("#kihieuHD").val())) ;



      dataToSend += '}';

      dataToSend=jQuery.parseJSON(dataToSend);
      alertObject(dataToSend);




/*$.post('resource.php?module=vienphi&view=hoadon&action=controller_luuHoaDon&hienmaloi=3&id_t='+1,datatosend).done(function(data1){
            data1=data1.split(';');
              if(data1[0]==1){
              }else{

              }
            })

*/

 $.post('resource.php?module=vienphi&view=hoadon&action=controller_luuHoaDon&hienmaloi=3&ID_TTNo='+ID_ThuTNo+'&maLoaiHD=1',dataToSend)
                                 .done(function( gridData ) {
                                                                  })
                                                        .fail(function() {
                                                        alert( "error" );
                                                        });
                                                        tooltip_message("Đã lưu hóa đơn");




        })
    $('#XemIn').click(function(){
          $.cookie("in_status", "print_preview");
           dialog_report("Xem trước khi in",90,90,"u78787878975f","resource.php?module=report&view=vienphi&action=hoadonThuoc&header=top&lien=3&type=report&id_form=11&kieuin="+$('input[name=sex]:radio:checked').val()+"&idthutrano="+ID_ThuTNo,'PhieuThanhToan');
          $('#dialog_print').dialog('close');

        })
function create_layout(){
    $('#panel_main').layout({
            resizerClass: 'ui-state-default'
                    , north: {
                resizable: true
                        , size: "50%"
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
                        , size: "50%"
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

function resize_control() {

 $("#NhomDV").setGridHeight($('.n_tren').height());
  $("#rowed30").setGridWidth($(window).width()-55);
  $("#rowed30").setGridHeight($(window).height()-$("#top_main").height()-$(".ui-tabs-nav").height()-420);
}
 $('#XemIn').click(function(){
      $.cookie("in_status", "print_preview");
           dialog_report("Xem trước khi in",90,90,"u78787878975f","resource.php?module=report&view=<?=$modules?>&action=hoadonThuoc&header=top&lien=3&type=report&id_form=11&kieuin=1",'PhieuThanhToan');
          $('#dialog_print').dialog('close');

        })
 function LayDuLieuLoadForm(ID_ThuTraNoP)
 {

  $.post('resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_ThongTinHoaDon&ID_ThuTraNo='+window.ID_ThuTNo).done(function(data){

   data=jQuery.parseJSON(data);
   alertObject(data);
   var tenKH=data.rows[0]['cell'][2];
   var diachiKH=data.rows[0]['cell'][3];
   var soHD=data.rows[0]['cell'][4];
   var kihieuHD=data.rows[0]['cell'][5];
   var ngayKham1=data.rows[0]['cell'][6]['date'];
   $("#soHD").val(soHD );
   $("#kihieuHD").val(kihieuHD );
   $("#ngayKham").val(ngayKham1 );
   $("#tenKH").val(tenKH );
   $("#diachiKH").val(diachiKH );
   _ID_HoaDonThueDiary=data.rows[0]['cell'][7];
     $("#id_soHD").val(_ID_HoaDonThueDiary );
       $("#ngayHD").val(data.rows[0]['cell'][8]['date']);
        $("#noidung").val(data.rows[0]['cell'][9]);
         $("#ghichu").val(data.rows[0]['cell'][10]);
          $("#maST").val(data.rows[0]['cell'][11]);
           $("#soTk").val(data.rows[0]['cell'][12]);
           $("#hinhthuctt").val(data.rows[0]['cell'][13]);
           // $("#nguoiLap").val(data.rows[0]['cell'][14]);
         //  console.log(data.rows[0]['cell'][14]);
           if(data.rows[0]['cell'][14]==0)
           {
create_combobox_new('#nguoiLap',create_bs_chidinh,'bw','','data_bacsi_todieutri',<?=$_SESSION["user"]["id_user"]?>);

           }
           else
           {
            create_combobox_new('#nguoiLap',create_bs_chidinh,'bw','','data_bacsi_todieutri',data.rows[0]['cell'][14]);
           }
 


})

 }




function create_bs_chidinh(elem, datalocal) {
 datalocal = jQuery.parseJSON(datalocal);
 $(elem).jqGrid({
  datastr: datalocal,
  datatype: "jsonstring",
  colNames: ['NickName','Họ tên','Phòng ban'],
  colModel: [
   {name: 'NickName', index: 'NickName', hidden: false,width:40},
   {name: 'HoTen', index: 'HoTen', hidden: false,width:100},
   {name: 'PhongBan', index: 'PhongBan', hidden: false,width:100},
   ],
  hidegrid: false,
  gridview: true,
  loadonce: true,
  scroll: 1,
  modal: true,
  rowNum: 100,
  rowList: [],
  height: 200,
  width: 500,
  viewrecords: true,
  ignoreCase: true,
  shrinkToFit: true,
  cmTemplate: {sortable: false},
  sortorder: "desc",
  serializeRowData: function(postdata) {
  },
  onSelectRow: function(id) {

    var rowData_dvcs = $(this).getRowData(id);
    setval_new('#combo_chamsoc',rowData_dvcs['ID_DM_LoaiChamSoc']);

  },
  ondblClickRow: function(id, rowIndex, columnIndex) {
  },
  loadComplete: function(data) {
  },
 });
 $(elem).jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});
 $(elem).jqGrid('bindKeys', {});
}


  function create_grid() {
   // a
        $("#rowed30").jqGrid({
            url: window.url_rowed30,
            datatype: "json",
            colNames: ['Tên nhóm','Thành tiền'],
            colModel: [

                {name: 'Ten_Nhom_BHYT', index: 'Ten_Nhom_BHYT', search: true, width: "30%", editable: false, align: 'left', hidden: false},
                {name: 'ThanhTien',formatter:"integer",sorttype:"number", summaryType: 'sum',index: 'ThanhTien', search: false, width: "10%", editable: false, align: 'right', hidden: false},


            ],
            loadonce: true,
            scroll: false,
            modal: true,
            shrinkToFit: true,
            cmTemplate: {sortable: false},
            rowNum: 10000000,
            rowList: [],
            pager: '#prowed30',
            sortname: 'Ten_Nhom_BHYT',
            height: 100,
            width: 100,
            viewrecords: true,
            ignoreCase: true,
            sortorder: "desc",
            footerrow: true,
            userDataOnFooter: true,
            groupSummary:true,
             /* grouping:true,
            groupingView : {
            groupField : ['ThanhTien'],
            groupDataSorted : true ,
            groupCollapse : false,
            groupColumnShow :true,
            groupSummary:false,
            groupText : ['<b>{0} : {ThanhTien}</b>']
             },*/




      onCellSelect: function (rowid,iCol,cellcontent,e) {
     /* if((iCol==0)&&(window.oper=='add')){
              $('#rowed30').jqGrid('delRowData',rowid);
        $('#rowed30').trigger("reloadGrid");
        //tinhlai();
            }*/
        },
            onSelectRow: function(id) {
            },
           ondblClickRow: function(rowId) {
            },
            onselect: function(rowId, rowIndex, columnIndex) {
            },
            onRightClickRow: function(rowid, iRow, iCol, e) {
              /*  var grid = jQuery('#rowed30');
                var colModel = grid.getGridParam('colModel');
                var colName = colModel[iCol].name;
                var colIndex = colModel[iCol].index;
                var rowData = jQuery('#rowed30').getRowData(rowid);*/

            },
            loadComplete: function(data) {
       // window.load_complete3=1;
                var grid = $("#rowed30"),
        sum = grid.jqGrid('getCol', 'ThanhTien', false, 'sum');

        grid.jqGrid('footerData','set', {ID: 'ThanhTien:', ThanhTien: sum});
       // grid.jqGrid('footerData','set', {ID: 'GiaThueNgoaiThucHien:', GiaThueNgoaiThucHien: sumGiaThueNgoaiThucHien});
            },
            caption: "Nhóm dịch vụ khám chữa bệnh"
        });
    }

</script>