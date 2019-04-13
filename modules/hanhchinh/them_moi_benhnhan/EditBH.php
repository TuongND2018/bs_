<?php
if(isset($_GET["ID_BenhNhan"])){
        echo "<script type='text/javascript'>";
        echo "window.ID_BenhNhan=".$_GET["ID_BenhNhan"];
        echo "</script>";

    }
?>








<style type="text/css">
.top_main {
	/*background-color: #F2FFD7 !important;*/
	border-color:#336;
}

button{
  margin-left: 49px !important;

}
#TaoMoi{
   margin-left: 49px !important;
}
 th.ui-th-column div{
        word-wrap: break-word;
        white-space: pre-wrap;
        white-space: -moz-pre-wrap;
        white-space: -pre-wrap;
        white-space: -o-pre-wrap;
        overflow: hidden;
        height: auto !important;
        vertical-align: middle;
    }
}
</style>

<body>



    <div class="top_main" id="top_main">

      <span>
        <!-- <label for="from_day" style="width:17px"> Từ</label>
        <input type="text"  style="width:109px" name="from_day" id='from_day'>
        <label for="to_day" style="width:23px"> Đến </label>
        <input type="text"   style="width:109px" name="to_day" id='to_day'> -->
        
<!-- <input type="radio" name="LoaiChiDinh" value="0" checked="checked" onclick="getDataByLoaiChiDinh()"><strong>CLS và LS</strong></input>
<input type="radio" name="LoaiChiDinh" value="1"onclick="getDataByLoaiChiDinh()"><strong>Điều dưỡng</strong></input>
<input type="radio" name="LoaiChiDinh" value="2"onclick="getDataByLoaiChiDinh()"><strong>PHCN và Đông y phối hợp (Vật lý trị liệu cũ)</strong></input> -->
          <input id='com_thuochmk' class='com_thuochmk'  style="width:200px"></span>
          <input id='com_thuochmk1' class='com_thuochmk1'  style="width:200px;display:none">
          <button type="button" id="xem">Lưu</button>
       </span>

      </div>




<div id="panel_main2" style="margin-top:2px;" >
         <div class="ui-layout-east" id="east">
          <table id="rowed2"></table>
              <div class="actionPhieuHuy">
              <fieldset id="PhieuHuy" style=" width: 96%">
                  <legend style="text-align: left ;color: red">Action</legend>
                     <button type="button" id="TaoMoi">Tạo mới</button>
                     <button type="button" id="Luu">Lưu</button>
                     <!-- <button type="button" id="Sua">Sửa</button> -->
                     <button type="button" id="Xoa">Xóa</button>
                     <button type="button" id="In">Xem In</button>
                     <button type="button" id="HoanTien">Hoàn tiền</button>
                     </fieldset>
              </div>
              <div class="phieuhuyChitiet">
                <label for="ngayHuy" style="width:17px"> Ngày hủy</label>
                <input type="text"  style="width:44px" name="ngayHuy" id='ngayHuy'>
               <!--  <label for="soPhieuHuy" style="width:17px"> Mã phiếu hủy</label>
                <input type="text"  style="width:85px" name="soPhieuHuy" id='soPhieuHuy'> -->
                <label for="lydoHuy" style="width:17px"> Lý do hủy</label>
                <input type="text"  style="width:271px" name="lydoHuy" id='lydoHuy'>
              </div>
               <table id="rowed3"></table>
         </div>
         <div class="ui-layout-center" id="center">
         <table id="rowed1"></table>

         </div>
       </div>
</body>
</html>
<script type="text/javascript">


jQuery(document).ready(function() {
 var MPhieu='';

window.ID_LuotKham =<?php echo  $_GET["ID_LuotKham"];?>;

 window.url_rowed1='';
create_combobox('#com_thuochmk','#com_thuochmk1',".data_thuochmk","#data_thuochmk",create_ds_theBHCC,500,240,'Danh mục ','data_theBHCC',window.default_id_pb_ChuyenMon);
    onload_form();
    create_grid();
    //create_grid2();
   // create_grid3();

    create_layout();
    resize_control();

$('#TaoMoi,#Luu,#Xoa,#In,#HoanTien').button();
//getDataByLoaiChiDinh();
setTimeout(function(){getDataByLoaiChiDinh()}, 1000);
//hết dom ready
})
function getDataByLoaiChiDinh()
{
   var LoaiChiDinh = $("input:radio[name ='LoaiChiDinh']:checked").val();


   //var postTo='resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_hoantrachidinh&tu_ngay='+ $( '#from_day' ).val()+'&den_ngay='+$( '#to_day' ).val()+'&LoaiChiDinh='+LoaiChiDinh+'&ID_BenhNhan='+window.ID_BenhNhan;
   var postTo2='resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_cacphieuhuy&ID_BenhNhan='+window.ID_BenhNhan;

   $("#rowed1").jqGrid('setGridParam',{datatype:'json',url:url_rowed1,datatype:'json',loadonce: true}).trigger('reloadGrid');
   $("#rowed2").jqGrid('setGridParam',{datatype:'json',url:postTo2,datatype:'json',loadonce: true}).trigger('reloadGrid');

}


$( "#xem" ).click(function() {
getDataByLoaiChiDinh();

});
$( "#In" ).click(function() {
    /*  $.cookie("in_status", "print_preview");
           dialog_report("Xem trước khi in",90,90,"u787387878975f","resource.php?module=report&view=vienphi&action=phieuhuychitiet&header=top&lien=3&type=report&kieuin=1&id_ttno=1",'phieuhuychitiet');
          $('#dialog_print').dialog('close');
*/

var selr = jQuery('#rowed2').jqGrid('getGridParam','selrow');
var ID_HuyChiDinhP = jQuery('#rowed2').jqGrid('getCell', selr, 'ID_HuyChiDinh');
var MaPhieuP = jQuery('#rowed2').jqGrid('getCell', selr, 'MaPhieu');
$.cookie("in_status", "print_preview");
           dialog_report("Xem trước khi in",90,90,"u78787878975f","resource.php?module=report&view=vienphi&action=phieuhuychitiet&header=top&lien=3&type=report&id_form=11&kieuin=1&ID_BenhNhan="+window.ID_BenhNhan+'&ID_HuyChiDinh='+ID_HuyChiDinhP+'&MaPhieu='+MaPhieuP,'phieuhuychitiet');
          $('#dialog_print').dialog('close');

});
$( "#Luu" ).click(function() {
//thaotac('update');
ids = $('#rowed3').jqGrid('getDataIDs');
          for(var i=0;i<=ids.length-1;i++){
            jQuery("#rowed3").jqGrid('saveRow',ids[i]);
          }
          if(ids.length>0)
          {thaotac('luu');}
        else
          {tooltip_message('Chưa có chỉ định hủy chi tiết,click đup vào lưới Các hạng mục chỉ định để add hạng mục')};


});
$( "#Xoa" ).click(function() {
thaotac('xoa');
});
$("#TaoMoi").click(function() {
  $('#rowed3').jqGrid('setGridParam', { datatype: 'jsonstring', datastr:{}  }).trigger('reloadGrid');
   $("#rowed2").addRowData(0,{id:"0"}, "last"); // Insert blank record
   ids = $('#rowed2').jqGrid('getDataIDs');
   $('#rowed2').jqGrid('setSelection', ids[ids.length-1], true);
});
function thaotac(option)
{
 var LoaiChiDinh = $("input:radio[name ='LoaiChiDinh']:checked").val();

 var dataToSend = '{';
 var phancach = ",";
 var gridData3 = jQuery("#rowed3").getRowData();
 var postData3 = JSON.stringify(gridData3);
 postData3 += phancach + '"lydoHuy":' + JSON.stringify($.trim($("#lydoHuy").val()));
 postData3 += phancach + '"ID_BenhNhan":' + JSON.stringify($.trim(window.ID_BenhNhan));
 postData3 += phancach + '"LoaiChiDinh":' + JSON.stringify($.trim(LoaiChiDinh));
 postData3='{"id":'+postData3+'}';
 postData3=$.parseJSON(postData3);
 alertObject(postData3);

 $.post('resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=controllerHoanTraCD&hienmaloi=3&thaotac='+option,postData3).done(function(data){


if (isNaN(data) ==false&& $.trim(data)>0) {

                                  tooltip_message("Thêm thành công");
                                    getDataByLoaiChiDinh();//lay lai du lieu
                                  }
                                  else if($.trim(data)=="")
                                    {
                                      tooltip_message("Lưu thành công");
                                        getDataByLoaiChiDinh();//lay lai du lieu
                                    }

   if(option=='xoa')     {
    $('#rowed3').jqGrid('setGridParam', { datatype: 'jsonstring', datastr:{}  }).trigger('reloadGrid');}                           Ơ




      });
}
function onload_form()
{
window.url_rowed1 = 'resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_vienphichitiet_theoluotkham&ID_LuotKham='+window.ID_LuotKham;
 $("#from_day").datepicker({
   dateFormat:  $.cookie("ngayJqueryUi")
 });
 $("#to_day").datepicker({

  dateFormat:  $.cookie("ngayJqueryUi")
});
 $("#ngayHuy").datepicker({
   dateFormat:  $.cookie("ngayJqueryUi")
 });
 $("#from_day, #to_day","ngayHuy").dateEntry({dateFormat:$.cookie("ngayDateEntry")});
 $("#from_day").val('<?php echo date($_SESSION["config_system"]["ngaythang"]) ?>');
 $("#to_day").val('<?php echo date($_SESSION["config_system"]["ngaythang"]) ?>');
 $("#ngayHuy").val('<?php echo date($_SESSION["config_system"]["ngaythang"]) ?>');

}
function create_grid() {

        $("#rowed1").jqGrid({
            url: url_rowed1,

            datatype: "json",
            colNames: ['ID_LoaiKham','ID_Kham','Ngày chỉ định','Tên loại khám',
            'Số lần/giờ','Số ngày','Phí thực hiện' ,'Tên nhóm','Phí gốc','','ID','Viện phí',
            '','BHCC trả','BHCC'],
            colModel: [
                {name: 'ID_LoaiKham', index: 'ID_LoaiKham', width: "0%", editable: false, align: 'left', hidden: true},
                {name: 'ID_Kham', index: 'ID_Kham', search: true, width: "1%", editable: false, align: 'left', hidden: true},
                {name: 'NgayGioTao', index: 'NgayGioTao', search: false, width: "10%", editable: false, align: 'center', hidden: false},
                {name: 'TenLoaiKham', index: 'TenLoaiKham', search: true, width: "30%", editable: false, align: 'left', hidden: false},
                {name: 'sogio', index:  'sogio', search: false, width: "5%", editable: false, align: 'right', hidden: false},
                {name: 'songay', index: 'songay', search: false, width: "5%", editable: false, align: 'right', hidden: false},
                {name: 'PhiThucHien',formatter:"integer",sorttype:"number", summaryType: 'sum',index: 'PhiThucHien', search: false, width: "10%", editable: true, align: 'right', hidden: false},
                {name: 'TenNhom', index: 'TenNhom', search: false, width: "20%", editable: false, align: 'left', hidden: false},
                {name: 'GiaThueNgoaiThucHien',index: 'GiaThueNgoaiThucHien',summaryType: 'sum',formatter:"integer",sorttype:"number",  search: false, width: "0%", editable: false, align: 'right', hidden: true}   ,
            {name: 'ExtField1',index: 'ExtField1',hidden: true},
              {name: 'id',index: 'id',hidden: true,width: "0%",},
        {name: 'Isthanhtoanvp',index: 'Isthanhtoanvp',hidden: true},
        {name: 'nhomcha',index: 'nhomcha',hidden: true},
          {name: 'BHYTCC',index: 'BHYTCC',hidden: false,width: "5%",editable: true,summaryType: 'sum',formatter:"integer",sorttype:"number",align: 'right'},

           {name: 'IsBHCC', index: 'IsBHCC',  width: "2%", formatter: "checkbox", edittype: "checkbox", editoptions: { value:"1:0",dataEvents:  [{ type: 'click', fn: function(e) {

        if($("#"+$(e.target).attr('id')).is(':checked')){
            var tthai=1;
          }
        else{
            var tthai=0;
          }
        var row = $(e.target).closest('tr.jqgrow');
                var tam = row.attr('id');
                //alert(tam);
               var IDKham= $('#rowed1').getCell(tam, 'id');
               var ExtField= $('#rowed1').getCell(tam, 'ExtField1');
               var ID_LoaiKham= $('#rowed1').getCell(tam, 'ID_LoaiKham');
 // tam = row.attr('id');
         if(IDKham==''){

           tooltip_message("Chức năng này chỉ thực hiện trên các chỉ định đã được lưu");
         }

         else{

           $.post('resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=check_thanhtoan&idluotkham='+window.ID_LuotKham).done(function(data){
            if(data=='false'){
              
              $.post('resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=controller_fix_bhyt_BHCC&hienmaloi=a&id_kham='+IDKham+'&ac2='+tthai+'&ExtField='+ExtField+'&loaiBH=BHCC'+'&ID_LoaiKhamP='+ID_LoaiKham+'&ID_LuotKhamP='+window.ID_LuotKham).done(function(data) {
                var n_rs=data.split(';;');
                $("#rowed1").jqGrid('setCell',tam,'PhiThucHien',  n_rs[1]);
                $("#rowed1").jqGrid('setCell',tam,'BHYTCC', n_rs[2]);

                if(n_rs[3]==0){
                  $("#"+tam+"_IsBHCC").prop('checked',false);
                }
                if(n_rs[4]!=''){
                    $("#rowed1").jqGrid('setCell',tam,'TenLoaiKham', n_rs[4]);
                }
                sumAgain();
              });
            }else{
              tooltip_message("Lượt khám này đã thanh toán");
              $("#thongbao").html("Thông báo: Lượt khám này đã thanh toán");
            }
          });
         }

                 } }]},
                  editable: true, align: 'center', hidden: false, },

            ],
            loadonce: true,
            scroll: false,
            modal: true,
            shrinkToFit: true,
            cmTemplate: {sortable: false},
            rowNum: 10000000,
            rowList: [],
            pager: '#prowed1',
            sortname: 'id',
            height: 100,
            width: 100,
            viewrecords: true,
            ignoreCase: true,
            sortorder: "desc",
            footerrow: true,
            userDataOnFooter: true,
            grouping:true,
            groupingView : {
            groupField : ['Isthanhtoanvp','TenNhom'],
            groupDataSorted : true ,
            groupCollapse : false,
            groupColumnShow :true,
            groupSummary:false,
            groupText : ['<b>{0} : {PhiThucHien}</b>','<b>{0} : {PhiThucHien}</b>']
             },


            onSelectRow: function(id) {

                var selectedValue = $('#rowed1').getCell(id, 'PhiThucHien');
               // alert(selectedValue);

                 //   $('#rowed1').jqGrid('setColProp', 'PhiThucHien', { editable: true });
                    jQuery('#rowed1').editRow(id, true);

            },
           ondblClickRow: function(rowId) {
            },
            onselect: function(rowId, rowIndex, columnIndex) {
            },
            onRightClickRow: function(rowid, iRow, iCol, e) {
                var grid = jQuery('#rowed3');
                var colModel = grid.getGridParam('colModel');
                var colName = colModel[iCol].name;
                var colIndex = colModel[iCol].index;
                var rowData = jQuery('#rowed1').getRowData(rowid);

            },
            loadComplete: function(data) {


        var grid = $("#rowed1");
        sum = grid.jqGrid('getCol', 'PhiThucHien', false, 'sum');
        sumBHYTCC=grid.jqGrid('getCol', 'BHYTCC', false, 'sum');
        grid.jqGrid('footerData','set', {ID: 'PhiThucHien:', PhiThucHien: sum});
        grid.jqGrid('footerData','set', {ID: 'BHYTCC:', BHYTCC: sumBHYTCC});
        $( "[id^=rowed1ghead_0_]" ).each(function(){
          vienphitam=$('#'+this.id +' td  b').html().split(':');
          if($.trim(vienphitam[0])==0){
            $('#'+this.id +' td  b').html('Dịch vụ:'+vienphitam[1]);
          }else{
            $('#'+this.id +' td  b').html('Viện phí:'+vienphitam[1]);
          }
        })

            },
            caption: "Chi tiết hạng mục sử dụng"
        });
 $("#rowed1").jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});
    }
    function sumAgain()
    {
        var grid = $("#rowed1");
        sum = grid.jqGrid('getCol', 'PhiThucHien', false, 'sum');
        sumBHYTCC=grid.jqGrid('getCol', 'BHYTCC', false, 'sum');
        grid.jqGrid('footerData','set', {ID: 'PhiThucHien:', PhiThucHien: sum});
        grid.jqGrid('footerData','set', {ID: 'BHYTCC:', BHYTCC: sumBHYTCC});
    }

function create_grid3(){
  $("#rowed3").jqGrid({
    url: '',
    datatype: "json",
    colNames: ['ID_HuyChiDinhCT','Xóa', 'Tên DV'
    , 'Đã thu','Hoàn trả','Ghi chú','S.ngày trả','S.lần trả','Giá','ID_DieuTriPhoiHop','ID_PhysioTherapy','ID_LoaiKham','ID_HuyChiDinh','ID_Kham','rowId'],
    colModel: [
    {name: 'ID_HuyChiDinhCT', index: 'ID_HuyChiDinhCT', width: "0%", editable: false, align: 'left', hidden: true},
    {name: 'Xoa', index: 'Xoa', width: "3%", editable: false, align: 'left', hidden: false},
    {name: 'TenLoaiKham',index: 'TenLoaiKham',width: "20%",  classes: "CotSoTien", sortable: true,sorttype: 'number',  search: true, editable: false, align: 'left', hidden: false},
    {name: 'PhiThucHien',index: 'PhiThucHien',  width: "6%",formatter:'number',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: "", defaultValue: '0'},sortable: true, search: true,  editable: false, align: 'left', hidden: false},
    {name: 'SoTienThucTra',index: 'SoTienThucTra',  width: "6%",formatter:'number',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: "", defaultValue: '0'},sortable: true, search: true,  editable: true, align: 'left', hidden: false},
    {name: 'GhiChu', width: "5%", index: 'GhiChu', editable: true, align: 'left', hidden: false},
    {name: 'SoNgayTraLai',index: 'SoNgayTraLai', width: "4%",formatter:'number',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: "", defaultValue: '0'},sortable: true,  search: true,  editable: true, align: 'left', hidden: false},
    {name: 'SoLanTraLai', index: 'SoLanTraLai', width: "4%",formatter:'number',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: "", defaultValue: '0'},sortable: true, search: true,  editable: true, align: 'left', hidden: false},
    {name: 'DonGia',index: 'DonGia',  width: "6%",formatter:'number',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: "", defaultValue: '0'},sortable: true, search: true,  editable: false, align: 'left', hidden: false},
    {name: 'ID_DieuTriPhoiHop',index: 'ID_DieuTriPhoiHop',width: "0%",sortable: true,search: true,  align: 'left', hidden: true, },
    {name: 'ID_PhysioTherapy',index: 'ID_PhysioTherapy',width: "0%",sortable: true,search: true,  align: 'left', hidden: true, },
    {name: 'ID_LoaiKham',index: 'ID_LoaiKham',width: "0%",sortable: true,search: true,  align: 'left', hidden: true, },
    {name: 'ID_HuyChiDinh',index: 'ID_HuyChiDinh',width: "0%",sortable: true,search: true,  align: 'left', hidden: true, },
    {name: 'ID_Kham',index: 'ID_Kham',width: "0%",sortable: true,search: true,  align: 'left', hidden: true, },
    {name: 'rowId',index: 'rowId',width: "0%",sortable: true,search: true,  align: 'left', hidden: true, },

    ],
    loadonce: true,
    scroll: false,
    modal:true,
    shrinkToFit:true,
    rowNum: 10000000,
    rowList:[],
    pginput:false,
    pgbuttons:false,
    pager: '#prowed3',
    sortname: 'ID_Kham',
    height:100,
    width:100,
    viewrecords: false,
    ignoreCase:true,
    footerrow:true,

    loadComplete: function(data) {

    sumSoTienThucTra = $("#rowed3").jqGrid("getCol", "SoTienThucTra", false, "sum");
    sumPhiThucHien = $("#rowed3").jqGrid("getCol", "PhiThucHien", false, "sum");


    $("#rowed3").jqGrid("footerData", "set", {
                SoTienThucTra: sumSoTienThucTra,
                PhiThucHien: sumPhiThucHien,
                });

      // kiem  tra đã hoàn tiền thì không cho sửa
        var selr = jQuery('#rowed2').jqGrid('getGridParam','selrow');
        var DaHoanTien = jQuery('#rowed2').jqGrid('getCell', selr, 'DaHoanTien');
        var MaPhieu = jQuery('#rowed2').jqGrid('getCell', selr, 'MaPhieu');

        MPhieu=MaPhieu;


        if (DaHoanTien==0){
         var ids = $("#rowed3").getDataIDs();
         for (var i=0;i<=ids.length-1;i++){
           $("#rowed3").jqGrid('editRow', ids[i]);
         }
        }
        else
        {
          var ids = $("#rowed3").getDataIDs();
          for (var i=0;i<=ids.length-1;i++){
           $("#rowed3").jqGrid('saveRow', ids[i]);
         }
        }

  },
  onCellSelect: function (rowid,iCol,cellcontent,e) {

    if(iCol==1)
    {
      jQuery("#rowed3").jqGrid('delRowData', rowid);
      $('#rowed3').setGridParam({loadonce: true}).trigger('reloadGrid');
    }

 },

  caption: " <div ><span >( Chi tiết của phiếu " + MPhieu + " )</span></div>",
});
};
function create_grid2(){
MPhieu='';
  $("#rowed2").jqGrid({
    url: '',
    datatype: "json",
    colNames: ['ID_HuyChiDinh','Mã phiếu'
    , 'Ngày hủy','N.Hủy','Duyệt','Lý do','Hoàn tiền','Loại HCĐ',''],
    colModel: [
    {name: 'ID_HuyChiDinh', index: 'ID_HuyChiDinh', width: "0%", editable: false, align: 'left', hidden: true},
    {name: 'MaPhieu',index: 'MaPhieu',width: "4%",  classes: "CotSoTien", sortable: true,sorttype: 'number',  search: true, editable: false, align: 'left', hidden: false},
    {name: 'NgayGioHuy',width: "5%",index: 'NgayGioHuy',formatter: "date",sorttype:"date" ,formatoptions: {srcformat: 'y/m/d', newformat: 'd/m/Y'}, sortable: true,  search: true, editable: false, align: 'left', hidden: false},
    {name: 'TenNguoiLapPhieu', width: "5%",sortable: true, index: 'TenNguoiLapPhieu', search: true,  editable: false, align: 'left', hidden: false},
    {name: 'Ten_NguoiQuyetDinh', width: "5%",sortable: true, index: 'Ten_NguoiQuyetDinh', search: true,  editable: false, align: 'left', hidden: false},
    {name: 'LyDoHuy',index: 'LyDoHuy',width: "10%",  classes: "CotSoTien", sortable: true,sorttype: 'number',  search: true, editable: false, align: 'left', hidden: false},
    {name: 'DaHoanTien',index: 'DaHoanTien',formatter: "checkbox", edittype: "checkbox",editoptions: {value: "1:0"}, width: "2%",sortable: true,  search: true,  editable: false, align: 'left', hidden: false},
    {name: 'TenLoaiHoanTra', width: "5%",sortable: true, index: 'TenLoaiHoanTra', search: true,  editable: false, align: 'left', hidden: false},
{name: 'LoaiHoanTra', width: "0%",sortable: true, index: 'LoaiHoanTra', search: true,  editable: false, align: 'left', hidden: true},


    ],
    loadonce: true,
    scroll: false,
    shrinkToFit:true,
    modal:true,
    rowNum: 1000,
    rowList:[],
    pginput:false,
    pgbuttons:false,
    pager: '#prowed1',
    sortname: 'NgayGioTao',
    height:100,
    width:100,
    viewrecords: false,
    ignoreCase:true,

    loadComplete: function(data) {
  ids = $('#rowed2').jqGrid('getDataIDs');
  $('#rowed2').jqGrid('setSelection', ids[0], true);
  },
  onSelectRow: function(id){
    var rowData = $("#rowed2").getRowData(id);
    MPhieu=rowData["MaPhieu"];
    var ID_HuyChiDinhP=rowData["ID_HuyChiDinh"];
    var postTo3='resource.php?module=hanhchinh&view=them_moi_benhnhan&action=data_phieuhuyChitiet&ID_HuyChiDinh='+ID_HuyChiDinhP;

    $("#rowed3").jqGrid('setGridParam',{datatype:'json',url:postTo3,datatype:'json'}).trigger('reloadGrid');
    $("#rowed3").jqGrid('setCaption', 'Chi tiết mã phiếu '+MPhieu);


//Kiểm tra khóa các nút
var isHoanTien=rowData["DaHoanTien"];
if(isHoanTien==1)
{
// $("#HoanTien,#Sua,#Xoa,#Luu").prop("disabled",true);
 $("#HoanTien,#Xoa,#Luu").button('disable');



}else
{
 // $("#HoanTien,#Sua,#Xoa,#Luu").prop("disabled",false);
  $("#HoanTien,#Xoa,#Luu").button('enable');

}

        },

  caption: "Các phiếu hủy đã tạo",
});
};


function resize_control() {

  $("#rowed1").setGridWidth($("#center").width()-5);
  $("#rowed1").setGridHeight($("#center").height()-120);
  $("#rowed2").setGridWidth($("#panel_main2").width()-$("#center").width()-10);
  $("#rowed2").setGridHeight($("#east").height()-350);
  $("#rowed3").setGridWidth($("#panel_main2").width()-$("#center").width()-20);
  $("#rowed3").setGridHeight($("#east").height()-318);
}


function create_layout(){
  $("#panel_main2").css("height",$(window).height()-30+"px");
  $("#panel_main2").css("width",$(window).width()+"px");
  $("#panel_main2").fadeIn(1000);
  $('#panel_main2').layout({
    resizerClass: 'ui-state-default'
    , east: {
      resizable: true
      , size: "0%"
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
    , size: "95%"
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





function create_ds_theBHCC(elem,datalocal){
 datalocal=jQuery.parseJSON(datalocal);
 $(elem).jqGrid({
  datastr:datalocal,
  datatype: "jsonstring" ,
  colNames:['Số thẻ','Tên thẻ','Công ty','Hạn sử dụng'],
  colModel:[
    {name:'SoThe',index:'SoThe',hidden :false,width: "30%",},
      {name:'TenLoaiThe',index:'TenLoaiThe',hidden :false,width: "30%",},

  {name:'TenCongTy',index:'TenCongTy',hidden :false,width: "30%",},
   {name:'HSD',index:'HSD',hidden :false,width: "30%",},
 
 

  ],
  hidegrid: false,
  gridview: true,
  loadonce: true,
  scroll: false,
  modal:true,
  rowNum: 200000,
  rowList:[],
  sortname: 'tenhangmuc',
  height:265,
  width: 700,
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
    // alert($.trim(selr));
    $('#ui-id-136').val('sđasđâsdfád');


      /* var tmp = $("#rowed15").jqGrid('getDataIDs');
       if(tmp.length>0)
       {

          $('<div></div>').appendTo('body')
            .html('<div><h2>Bạn chọn loại hóa đơn khác sẽ  bỏ hết các ca đã chọn</h2></div>')
            .dialog({
              modal: true,
              title: 'Bỏ chọn',
              zIndex: 10000,
              autoOpen: true,
              width: 'auto',
              resizable: false,
              buttons: {
                Yes: function () {
                 // subItem();
$('#rowed15').jqGrid('setGridParam', { datatype: 'jsonstring', datastr:{}  }).trigger('reloadGrid');

                var selr = jQuery(elem).jqGrid('getGridParam','selrow');
                window.loaiHD=$.trim(selr);

                 tooltip_message("Thao tác tiếp tục");
                  $(this).dialog("close");

                },
                No: function () {
                 tooltip_message("Chưa thao tác gì");
                 $(this).dialog("close");
               }
             },
             close: function (event, ui) {
              $(this).remove();
            }
          });

       }
      else{

                var selr = jQuery(elem).jqGrid('getGridParam','selrow');
                window.loaiHD=$.trim(selr);
                loadDatatheoComboLoaiHoadon( window.loaiHD);

      }
*/


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
</script>