<?php
	$data= new SQLServer;
	if($_GET['oper']=='add'){
	$store="{call GD2_GetThongTinBenhNhan (?)}";
	$param = array($_GET['idbenhnhan']);
	$get=$data->query( $store, $param);
	$excute = new SQLServerResult($get);
	$tam1 = $excute->get_as_array();
	$store_name="{call GD2_demsophieu_FormatThanhToanVienPhi ()}";
	$params = array();
	$get=$data->query( $store_name, $params);
	$excute = new SQLServerResult($get);
	$tam = $excute->get_as_array();
	$store_name1="{call GD2_nocu_get (?)}";
	$params1 = array($_GET['idbenhnhan']);
	$get1=$data->query( $store_name1, $params1);
	$excute1 = new SQLServerResult($get1);
	$tam2 = $excute1->get_as_array();
	$store_name1="{call GD2_miengiam_getby_luotkham (?)}";
	$params1 = array( $_GET["ID_LuotKham"] );
	$get1=$data->query( $store_name1, $params1);
	$excute1 = new SQLServerResult($get1);
	$tam3 = $excute1->get_as_array();

	$store_name1="{call GD2_tamung_trongluot (?)}";
	$params1 = array( $_GET["ID_LuotKham"] );
	$get1=$data->query( $store_name1, $params1);
	$excute1 = new SQLServerResult($get1);
	$tam4 = $excute1->get_as_array();

	$store_name1="{call GD2_getkskconhty (?)}";
	$params1 = array( $_GET["ID_LuotKham"] );
	$get1=$data->query( $store_name1, $params1);
	$excute1 = new SQLServerResult($get1);
	$tam5 = $excute1->get_as_array();



	}else{
		$store="{call Gd2_thu_trano_select_byidthutrano (?)}";
		$param = array($_GET["ID_ThuTraNo"]);
		$get=$data->query( $store, $param);
		$excute = new SQLServerResult($get);
		$tam = $excute->get_as_array();
		$store="{call GD2_miengiam_by_ID_ThuTraNo (?)}";
		$param = array($_GET["ID_ThuTraNo"]);
		$get=$data->query( $store, $param);
		$excute = new SQLServerResult($get);
		$tam3 = $excute->get_as_array();

	}
?>
<style>
 #gbox_rowed6, #gbox_rowed7, #gbox_rowed8 {
    border: 1px solid #919191;
    box-shadow: 0 0 10px #A0A0A0;
    margin-left: -15px;
    margin-top: -8px;
}

#panel_main{
	 margin-left: -20px; margin-top: -15px;
}
#gbox_rowed4,#gbox_rowed5{
margin-left: -1px;
}
fieldset {
  margin: 0;
  padding: 0;
}

fieldset {display: inline-block; vertical-align: top;}
fieldset {display: inline !ie7; /* IE6/7 need display inline after the inline-block rule */}

    #DM_template_container{
        position:absolute;
        z-index:1000000;
        display:none;
        box-shadow:0px 0px 6px #333;
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
    .thongtin_tongthe,.thongtin_luotkham_vienphi,.thongtin_lichsuvienphi,.kieuin{
        display:inline-block;
        box-shadow:0px 0px 10px #a0a0a0;
        border:1px solid #919191;
        vertical-align:top;
        width:49%;
    }
    .thongtin_luotkham_vienphi{
        padding-bottom:4px;
        padding-top:4px;
        width: 410px;
    }
    .thongtin_lichsuvienphi{
        box-shadow:0px 0px 10px #a0a0a0;
        border:1px solid #919191;
        display:inline-block;
        vertical-align:top;
        width:55%;
        overflow-y:none;
        margin-top:2px;
        height:67px;
    }
    .thongtin_lichsuvienphi_scroll{
        overflow-y:scroll;
        width:100%;
        height:45px;
    }
    .kieuin{
      padding-bottom:4px;
        padding-top:4px;
        width: 190px;
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
        filter:	alpha(opacity=20) !important;
    }
    #mota{
        font-size:13px!important;
    }

	#mid input
	{
		text-align:right;
		font-size:18px!important;
		font-weight:bold!important;
		margin-top:3px;
	}
	#thongtinnoptien input{
		margin-top:3px;
	}
	#thongtinnoptien #lydogiamgia{
		margin-top:0px;
	}

	#thongtinnoptien #lydogiamgia_combobox{
		margin-top:3px;
	}
	#thongtinnoptien #tiengiam,#thongtinnoptien #tiendathu,#thongtinnoptien #chiphigoc,#thongtinnoptien #phantram,#giamdtph,#giamchidinh,#giamthuoc,#giamtienthuoc,#toantam,#toadaxuat
	{
		text-align:right;
		font-size:18px!important;
		font-weight:bold!important;


	}
</style>

<body>

<div id="dialog_hoanung_print" style="display:none">

<table>
    <tr>
     	<td rowspan="4">
   		 <input  id="id_hoanung_print" value="1" style="outline: 0;border: none;background-color:#6CF;width: 80px;height: 100px;font-size:36px;text-align:center" maxlength="1">
   		</td>
    	<td><strong>
    	1.In 2 liên  </strong>
   		</td>
    </tr>
     <tr>
    	<td>
       <strong> 2.In liên 1  </strong>
   		</td>
    </tr>
     <tr>
    	<td>
       <strong> 3.In liên 2 </strong>
   		</td>
    </tr>
     <tr>
    	<td>
       <strong> 4.Không in và lưu</strong>
   		</td>
    </tr>

</table>
</div>

<div id="dialog_lydo_sua" style="display:none">

<textarea style="width:250px" id="lydo_sua"></textarea>
</div>
<div id="dialog_sotien" style="display:none"></div>
<div id="dialog_sothuoc" style="display:none"></div>

<div id="dialog_print" style="display:none">

<table>
    <tr>
     	<td rowspan="5">
    <input id="id_print" value="1" style="outline: 0;border: none;background-color:#6CF;width: 80px;height: 100px;font-size:36px;text-align:center" maxlength="1">
   		</td>
    	<td><strong>
    	1.In 2 liên  </strong>
   		</td>
    </tr>
     <tr>
    	<td>
       <strong> 2.In liên 1  </strong>
   		</td>
    </tr>
     <tr>
    	<td>
       <strong> 3.In liên 2 </strong>
   		</td>
    </tr>
     <tr>
    	<td>
       <strong> 4.Không in và lưu</strong>
   		</td>
    </tr>
     <tr>
    	<td>
      <strong>  5.In bill tiếng anh</strong>
   		</td>
    </tr>



</table>
</div>

<div id="dialog_hoanung" style="display:none">

</div>

<div id="dialog_sotien_thieu" style="display:none">
<strong>Diễn giải lý do nợ bill</strong><br>
<textarea style="width:250px" id="lydothieu"></textarea>
<table>
    <tr>
     	<td rowspan="8">
    <input id="id_thieu" style="outline: 0;border: none;width:90px;height:40px;text-align: center; height:160px; font-size:14px; border: 1px solid #327E04;font-size:50px;text-align:center" maxlength="1">
   		</td>
    	<td ><strong>1.</strong> <strong lydothieu="1">
    	Bệnh nhân bỏ về
   		</td>
    </tr>
     <tr>
    	<td>
       <strong>2.</strong><strong lydothieu="2">Bệnh nhân không đủ tiền  </strong>
   		</td>
    </tr>
     <tr>
    	<td>
       <strong>3.</strong><strong lydothieu="3">Bệnh nhân quen </strong>
   		</td>
    </tr>
     <tr>
    	<td>
       <strong>4.</strong><strong lydothieu="4" >>Bệnh nhân nợ vật lý trị liệu</strong>
   		</td>
    </tr>
     <tr>
    	<td>
      <strong>5.</strong><strong lydothieu="5">Khám sức khỏe</strong>
   		</td>
    </tr>
     <tr>
    	<td>
      <strong>6.</strong><strong lydothieu="6">Nhân viên công ty </strong>
   		</td>
    </tr>
     <tr>
    	<td>
      <strong>7.</strong> <strong lydothieu="7">Khám tại nhà</strong>
   		</td>
    </tr>
     <tr>
    	<td>
      <strong>8.</strong> <strong lydothieu="8">Lấy thuốc KGBS(ĐT)</strong>
   		</td>
    </tr>


</table>
</div>

    <div id="DM_template_container">
        <table id="DM_template"></table>
    </div>


        <fieldset style="display:inline-block;height:188px;width:700px" id="thongtinnoptien" >
   		 <legend>Thông tin nộp tiền:</legend>
         		 <label style="font-weight:bold;font-size:12px;width:90px;display:inline-block" id="thongtinphieu"><?php if($_GET['oper']=='add'){echo 'TTVP_'.($tam[0][0]+1);}else{echo $tam[0]['MaPhieu']; }?></label>
   			     <label for="ngay">Ngày</label>  <input type='textbox' id="ngay">
                 <label style="width:70px;display:inline-block">Thu ngân</label>  <label><?php if($_GET['oper']=='add'){echo $_SESSION["user"]["nickname"];}else{echo $tam[0]['NickName']; }?></label>  <br>
                 <label style="width:90px;display:inline-block">Người nộp</label>  <input type='textbox' style="width:540px" id="nguoigd" value='<?php

				 if($_GET['oper']=='add'){
					 if($tam5[0]['ID_PhanLoaiKham']==25){
						echo $tam5[0]["TenCty"];
					 }else{
						 echo $tam1[0]["HoLotBenhNhan"].' '.$tam1[0]["TenBenhNhan"];}
					 }

				 else{echo $tam[0]['tenbn']; }





				 ?>'>     <br>
                 <label style="width:90px;display:inline-block">Địa chỉ</label>  <input type='textbox' style="width:540px" id="diachi" value='<?php

				 if($_GET['oper']=='add')
					 {
						 if($tam5[0]['ID_PhanLoaiKham']==25){
							echo $tam5[0]["DiaChi"];
						 }else{
							 echo $tam1[0]["DiaChi"];
						 }
					 }
				 else{echo $tam[0]['DiaChi']; }?>'>     <br>
                 <label style="width:90px;display:inline-block">Diễn giải</label>  <input type='textbox' style="width:540px" id="diengiai"  value='<?php if($_GET['oper']=='add'){
					 if($tam5[0]['ID_PhanLoaiKham']==25){
							echo 'Khám sức khỏe công ty';
						 }else{

						 }

					 }else{echo $tam[0]['GhiChu']; }?>'>     <br>
                 <label style="font-weight:bold;font-size:12px;width:90px;display:inline-block">Chi phí gốc</label>  <input type='textbox' value='0' disabled id="chiphigoc" style="width:100px;color:#CCC" >
                 <label style="font-weight:bold;font-size:12px;width:100px;display:inline-block">Lý do giảm giá</label>  <input id="lydogiamgia" type='textbox' style="width:220px" ><input id="lydogiamgia1" type='textbox' style="display:none" > <input style="margin-left:25px" type="checkbox" name="checkbox" id="nhanvien_giamthuoc" >Có tiền thuốc    <br>
                 <label style="font-weight:bold;font-size:12px;width:90px;display:inline-block">Tiền đã thu</label>  <input type='textbox' style="width:100px" value='<?php if($_GET['oper']=='add'){echo '0';}else{echo number_format($tam[0]['SoTien'], 0, '', '.'); }?>' id="tiendathu" disabled>
                 <label style="font-weight:bold;font-size:12px;width:100px;display:inline-block">% giảm</label>  <input type='textbox' id="phantram" style="width:30px" value='0'>
                 <label style="font-weight:bold;font-size:12px">Tiền giảm</label>  <input type='textbox' id="tiengiam" style="width:80px" value='<?php

					if($_GET['oper']=='add'){
							echo '0';
					}else{
						if($tam3[0]['SoTienGiam_nhanvien']>0){
							echo  number_format($tam3[0]['SoTienGiam_nhanvien'], 0, '', '.');
						}else{
							echo 0;
						}
					}


					?>'>

                      <label style="font-weight:bold;font-size:12px">Giảm tiền thuốc</label>  <input type='textbox' id="giamtienthuoc" style="width:80px" value='' disabled>
  	   </fieldset>
       <fieldset style="display:inline-block;margin-top:7px;height:180px;width:400px" id="mid">
                <div class="form_row">
                     <label style="font-weight:bold;font-size:12px;width:70px;display:inline-block">Tổng cộng</label>
                    <input lang='luu' name="tongcong" style="width:100px;height:25px" type="text" value="0" id="tongcong" disabled >
                    <label style="font-weight:bold;font-size:12px;width:100px;display:inline-block">Nợ đầu kỳ</label>
                    <input lang='luu' name="nodauky" style="width:100px;height:25px" type="text" value="<?php

					if($_GET['oper']=='add'){
						if(count($tam2)>0){
							echo  number_format(($tam2[0][0]+$tam4[0]['tamung']), 0, '', '.');

						}else{
							echo '0';
						}
					}else{

							echo  number_format($tam[0]['nocu']+$tam[0]['tamung'], 0, '', '.');

						}


					?>" id="nodauky" disabled >

                    <br>

                    <label style="font-weight:bold;font-size:12px;width:70px;display:inline-block">Phụ thu</label>
                    <input lang='luu' name="tongphuthu" style="width:100px;height:25px" type="text" value="0" id="tongphuthu" disabled>

                    <label style="font-weight:bold;font-size:12px;width:100px;display:inline-block">Tạm ứng</label>
                    <input lang='luu' name="tamung" style="width:100px;height:25px" type="text" value="<?php

					if($_GET['oper']=='add'){

								echo  number_format($tam4[0]['tamung'], 0, '', '.');

					}else{
							echo  number_format($tam[0]['tamung'], 0, '', '.');
					 }


					?>" id="tamung" disabled>
                    <br>

                    <label style="font-weight:bold;font-size:12px;width:70px;display:inline-block">Giảm giá</label>
                    <input lang='luu' name="giamgia" style="width:100px;height:25px;background-color:#9F9" type="text" value="0" id="giamgia" disabled>

                    <label style="font-weight:bold;font-size:12px;width:100px;display:inline-block">Nợ cuối kỳ</label>
                    <input lang='luu' name="nocuoiky" style="width:100px;height:25px" type="text" value="<?php if($_GET['oper']=='add'){echo '0';}else{echo  number_format($tam[0]['nocuoiky'], 0, '', '.'); }?>" id="nocuoiky" disabled>

                    <br>

                    <label style="font-weight:bold;font-size:12px;width:70px;display:inline-block">Tiền thuốc</label>
                    <input lang='luu' name="tienthuoc" style="width:100px;height:25px;background-color:#9CC " type="text" value="0" id="tienthuoc" disabled>
                    <label style="font-weight:bold;font-size:12px;width:100px;display:inline-block">Tiền thừa</label>
                    <input lang='luu' name="tienthua" style="width:100px;height:25px" type="text" value="0" id="tienthua" disabled>

                    <br>

                     <label style="font-weight:bold;font-size:12px;width:70px;display:inline-block">Phải trả</label>
                    <input lang='luu' name="phaitra" style="width:100px;height:25px;background-color:#6CF " type="text" value="0" id="phaitra" disabled>
                    <label style="font-weight:bold;font-size:12px;width:100px;display:inline-block">Bệnh nhân trả</label>
                    <input lang='luu' name="benhnhantra" style="width: 100px; height: 25px; background-color: #FFC" type="text" value="<?php if($_GET['oper']=='add'){echo '0';}else{echo number_format($tam[0]['SoTien'], 0, '', '.'); }?>" id="benhnhantra"  >

                    <br>

                </div>
        </fieldset>

        <fieldset style="display:inline-block;;height:188px" id="chonkieuin">
        <legend>Chọn kiểu in:</legend>
                <input type="radio" name="sex" value="1" checked>In phiếu thanh toán<br>
                <input type="radio" name="sex" value="2">In chi tiết xét nghiệm<br>
                <input type="radio" name="sex" value="3">In các cận lâm sàng<br>
                <input type="radio" name="sex" value="4">In toàn bộ các DV sử dụng<br>
                <input type="radio" name="sex" value="5">In bill tiếng Anh<br>

           </fieldset>

  <div >	 <button id="btn_refesh3" >thêm template</button>
  	   	 <button href="#" id="btn_trahet" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" style="margin-left:0px;  margin-bottom:1px; ">Trả hết[F12]</button>
          <button href="#" id="hentra" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" style="margin-left:0px;  margin-bottom:1px; ">Hẹn trả KQ</button>
         <button href="#" id="btn_luu" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" style="margin-left:0px;  margin-bottom:1px; ">Lưu[Ctrl-S]</button>
         <button href="#" id="btn_sua" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" style="margin-left:0px;  margin-bottom:1px; ">Sửa</button>
    	 <button href="#" id="btn_lien1" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" style="margin-left:0px;  margin-bottom:1px; ">Liên 1</button>
    	 <button href="#" id="btn_lien2" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" style="margin-left:0px;  margin-bottom:1px; ">Liên 2</button>
         <button href="#" id="btn_hdKhamCb" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" style="margin-left:0px;  margin-bottom:1px; ">Hóa đơn khám chữa bệnh</button>

<button href="#" id="btn_gtgt" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" style="margin-left:0px;  margin-bottom:1px; ">Hóa đơn Thuốc và VTTH</button>
  </div>

<div >
            <div id="tabs">
              <ul>
                <li id="tab1"><a href="#tabs-1">Chi tiết dịch vụ</a></li>
                <li id="tab2"><a href="#tabs-2">Danh sách tạm ứng trong lượt</a></li>
                <li id="tab3"><a href="#tabs-3">Chi tiết công nợ bệnh nhân</a></li>
                <li id="tab4"><a href="#tabs-4">DS các bill đã lập</a></li>
              </ul>
                  <div id="tabs-1">
                    <div id="panel_main">
                          <div class="left_col ui-widget-content ui-layout-center">
                            <table id="rowed3" style="width:100%" ></table>
                            <div style="margin-top:3px;" >
                            <span style="float:right;margin-right:50px!important;">
                                <label style="font-weight:bold;font-size:12px;width:100px;display:inline-block">Giảm điều trị phối hợp</label>
              <input lang='luu' name="benhnhantra" style="width:90px;margin-left:60px" type="text" id="giamdtph" value="<?=$tam3[0]['SoTienGiam_dtphoihop']?>" disabled >
              </span>
              <label style="font-weight:bold;font-size:12px;width:100px;display:inline-block">Giảm Chỉ Định</label>
              <input lang='luu' name="benhnhantra" style="width:90px" type="text" value="<?=$tam3[0]['SoTienGiam_chidinh']?>" id="giamchidinh" disabled >
              </span>
              </div>
                          </div >


                          <div class="right_col ui-widget-content ui-layout-east" id="subToathuoc" >
                             <div class="right_col tren ui-widget-content ui-layout-center">
                                <table id="rowed4" style="width:100%" ></table>
                                <span>
                                  <button href="#" id="khonglaythuoc" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" style="margin-left:0px;  margin-bottom:1px; ">Không lấy thuốc</button>

                                 <button id="btn_refesh4" >thêm template</button>

                                 <span id="toantam_label" style="margin-top:3px"><label><strong>Tổng Tiền thuốc </strong></label> <input type="text" id="toantam" style="width:100px"></span>
                                 <span id="toadaxuat_label" ><label><strong>Tiền thuốc toa tạm</strong></label> <input  type="text" id="toadaxuat" style="width:100px"></span>
                                 </span>
                                 </div>

                               <div class="right_col duoi ui-widget-content ui-layout-south">
                                <table id="rowed5" style="width:100%" ></table>
                                <span style="float:right;margin-right:10px!important;margin-top:3px">
                                <label style="font-weight:bold;font-size:12px;width:100px;display:inline-block">Giảm giá thuốc</label>
          <input lang='luu' name="benhnhantra" style="width:90px" type="text" value="<?=$tam3[0]['SoTienGiam_thuoc']?>"  id="giamthuoc" disabled >
         					 </span>
                             </div>


                          </div >

                   </div>

                  </div>

                  <div id="tabs-2">
               <table id="rowed6" style="width:100%" ></table>

                  </div>

                   <div id="tabs-3">
                	<table id="rowed7" style="width:100%" ></table>

                  </div>

                   <div id="tabs-4" >
                  	<table>
                         <tr>
                             <td><table id="rowed8" style="width:100%" ></table></td>
                             <td> <table id="rowed9" style="width:100%" ></table></td>
                         </tr>
                    </table>
                  </div>


            </div>

        </div>

</body>
</html>
<script type="text/javascript">

var report_code=["InPhieuChi","PhieuThanhToan"];
var report_name=["Phiếu Chi","Phiu Thanh Toán"];
window.tienthuoc_toatam=0;
window.dem=0;
window.dskho=1;
//dskho;
window.kotinhlai=0;
window.url_rowed3='';
window.url_rowed4='';
window.url_rowed5='';
window.lydothieu='';
<?php
if(isset($_GET["ID_ThuTraNo"])){
	echo 'var ID_ThuTraNo='.$_GET["ID_ThuTraNo"].';';
}else{
	echo 'var ID_ThuTraNo=0;';
}
if(isset($_GET["ID_LuotKham"])){
	echo 'var ID_LuotKham='.$_GET["ID_LuotKham"].';';
}else{
	echo 'var ID_LuotKham=0;';
}





?>

$('#btn_sua').click(function(){
 $( "#dialog_lydo_sua" ).dialog('open');

})


$('input').click(function(){
    $(this).select();
})
$('#btn_trahet,#btn_sua,#btn_huy,#btn_lien1,#btn_lien2,#btn_trahet,#btn_luu,#btn_gtgt,#hentra,#btn_hdKhamCb').button();
<?php if($_GET['oper']=='add'){
echo "create_combobox('#lydogiamgia','#lydogiamgia1','.lydo_giamgia','#lydo_giamgia',create_lydogiamgia,'','','','data_lydogiamgia',0);";
}else{
	echo "create_combobox('#lydogiamgia','#lydogiamgia1','.lydo_giamgia','#lydo_giamgia',create_lydogiamgia,'','','','data_lydogiamgia',".$tam3[0]['id_loaigiamgia'].");";
}

?>

window.oper='<?=$_GET['oper']?>';

var tongcong=0;
var giamgia=0;
var phaitra=0;
var tienthuoc=0;
var giamhientai=0;



var idbenhnhan=<?php if($_GET['oper']=='add'){
						echo   $_GET['idbenhnhan'];
						}else{echo $tam[0]['ID_BenhNhan']; }?>;

var id_luotkham=<?php if($_GET['oper']=='add'){
					echo  $_GET["ID_LuotKham"].'';
					}else{echo "'".$tam[0]['ID_LuotKham']."'"; }?>;

var giam_dtph=<?=$tam3[0]['SoTienGiam_dtphoihop']?>;
var giam_chidinh=<?=$tam3[0]['SoTienGiam_chidinh']?>;
var giam_thuoc=<?=$tam3[0]['SoTienGiam_thuoc']?>;

var id_giam_dtph='<?=$tam3[0]['ID_dtphoihop']?>';
var id_giam_chidinh='<?=$tam3[0]['ID_chidinh']?>';
var id_giam_thuoc='<?=$tam3[0]['ID_thuoc']?>';
var id_giam_nv='<?=$tam3[0]['ID_nv']?>';
var nhanvien_giamthuoc;


var nodauky=<?php if($_GET['oper']=='add'){if(count($tam2)>0){
					echo  $tam2[0][0];}else{
						echo '0';
					}}else{echo $tam[0]['nocu']; }?>;

window.load_complete3=0;
window.load_complete5=0;
window.load_complete4=0;
    $(document).ready(function() {
		hentraketqua();
		$("#panel_main").css("height", $(window).height() - 200 + "px");
		$("#panel_main").css("width", $(window).width()  + "px");
        $("#panel_main").fadeIn(1000);
        create_layout();

		$( "#khonglaythuoc" ).button();
   		$( "#tabs" ).tabs({

         heightStyle:"fill"

         });
		load_form();
		loadtab();
		$('#lydo_sua').bind('keydown',function(e){
			if (jwerty.is("tab",e)||(jwerty.is("enter",e))) {
				$('#dialog_lydo_sua').closest('.ui-dialog').find('.ui-dialog-buttonpane button:eq(0)').focus();
				return false
			}
		})

		$('#id_hoanung_print').keydown(function(e){
			if (jwerty.is("enter",e)) {
				if($('#id_hoanung_print').val()==4){
					$('#dialog_hoanung_print').dialog('close');
				}else if($('#id_hoanung_print').val()==1||$('#id_hoanung_print').val()==2||$('#id_hoanung_print').val()==3){
				 $.cookie("in_status", "print_direct");
				 dialog_report("Xem trước khi in",90,90,"u78787878975f","resource.php?module=report&view=<?=$modules?>&action=hoan_ung&tenreport=hoantien&header=top&lien="+$('#id_hoanung_print').val()+"&type=report&id_form=10&idthutrano="+window.ID_hoanung,'InPhieuChi');
				 $('#dialog_hoanung_print').dialog('close');
				}
			}
		})



		$('#nhanvien_giamthuoc').click(function(){
			$('#phantram').val(0);
			$('#tiengiam').val(0);
			$('#giamtienthuoc').val(0);
		})

		$('#btn_lien1').click(function(){
			$.cookie("in_status", "print_preview");
			 dialog_report("Xem trước khi in",90,90,"u78787878975f","resource.php?module=report&view=<?=$modules?>&action=thungan&header=top&lien=2&type=report&id_form=10&kieuin="+$('input[name=sex]:radio:checked').val()+"&idthutrano="+ID_ThuTraNo,'PhieuThanhToan');
			 $('#dialog_print').dialog('close');
		})
		$('#btn_lien2').click(function(){
			$.cookie("in_status", "print_preview");
			 dialog_report("Xem trước khi in",90,90,"u78787878975f","resource.php?module=report&view=<?=$modules?>&action=thungan&header=top&lien=3&type=report&id_form=11&kieuin="+$('input[name=sex]:radio:checked').val()+"&idthutrano="+ID_ThuTraNo,'PhieuThanhToan');
			 $('#dialog_print').dialog('close');
		})
        //btn_gtgt
        $('#btn_hdKhamCb').click(function(){
        
           dialog_main("Hóa đơn khám chữa bệnh chi tiết "+ID_ThuTraNo+  '   ', 90, 90, "56743265743657", "resource.php?module=vienphi>&view=hoadon&action=HDChiTiet&type=test&id_form=11&ID_ThuTNo="+ID_ThuTraNo+"&phanloaiHD=1");  
        })
          $('#btn_gtgt').click(function(){
        
           dialog_main("Hóa đơn thuốc chi tiết "+ID_ThuTraNo+  '   ', 90, 90, "56743265743657", "resource.php?module=vienphi>&view=hoadon&action=HDChiTiet&type=test&id_form=11&ID_ThuTNo="+ID_ThuTraNo+"&phanloaiHD=2");  
        })

		$('#id_print').keydown(function(e){
				if (jwerty.is("enter",e)) {
					if($('#id_print').val()==4){
						$('#dialog_print').dialog('close');
					}else if($('#id_print').val()==1||$('#id_print').val()==2||$('#id_print').val()==3){
					 $.cookie("in_status", "print_direct");
					 dialog_report("Xem trước khi in",90,100,"u78787878975f","resource.php?module=report&view=<?=$modules?>&action=thungan&header=top&kieuin="+$('input[name=sex]:radio:checked').val()+"&lien="+$('#id_print').val()+"&type=report&id_form=10&idthutrano="+ID_ThuTraNo,'PhieuThanhToan');
					 $('#dialog_print').dialog('close');
					}
				}
		})


		setTimeout(function(){$("#benhnhantra").focus()},500); ;
		number_textbox('#benhnhantra');
		number_textbox('#phantram');
		number_textbox('#tiengiam');
		tinhtienthuoc();

		khonglaythuoc();
		$( "#btn_refesh3" ).button({
		  text: false,
		  icons: {
			primary: "ui-icon-refresh"
		  }
		}).click(function(){
			if(window.oper=='edit'){
				$('#rowed3').jqGrid('setGridParam', { datatype: "json",url:url_rowed3 }).trigger("reloadGrid");
				$('#rowed4').jqGrid('setGridParam', { datatype: "json",url:url_rowed4 }).trigger("reloadGrid");
				$('#rowed5').jqGrid('setGridParam', { datatype: "json",url:url_rowed5 }).trigger("reloadGrid");
				tinhlai();
			}else{
				$('#rowed3').jqGrid('setGridParam', { datatype: "json",url:url_rowed3 }).trigger("reloadGrid");
				$('#rowed4').jqGrid('setGridParam', { datatype: "json",url:url_rowed4 }).trigger("reloadGrid");
				$('#rowed5').jqGrid('setGridParam', { datatype: "json",url:url_rowed5 }).trigger("reloadGrid");
				tinhlai();
			}
			})
		$( "#btn_refesh4" ).button({
		  text: false,
		  icons: {
			primary: "ui-icon-refresh"
		  }
		}).click(function(){
			if(window.oper=='edit'){
				$('#rowed4').jqGrid('setGridParam', { datatype: "json" }).trigger("reloadGrid");
				$('#rowed5').jqGrid('setGridParam', { datatype: "json" }).trigger("reloadGrid");
				tinhlai();
			}else{
				$('#rowed4').jqGrid('setGridParam', { datatype: "json" }).trigger("reloadGrid");
				$('#rowed5').jqGrid('setGridParam', { datatype: "json" }).trigger("reloadGrid");
				tinhlai();
			}
			})


		 $( "#dialog_sotien" ).dialog({
      resizable: false,
      height:'auto',
      modal: true,
	  autoOpen :false,
      buttons: {
        "Yes": function() {

          $( this ).dialog( "close" );
		 	 if($('#benhnhantra').val().split('.').join('')<phaitra){
		  		  $( "#dialog_sotien_thieu" ).dialog('open');
			}else{
				if(dem==0){
					luu();
				}
			}
        },
        "No": function() {
          $( this ).dialog( "close" );
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


	 $( "#dialog_print" ).dialog({
      resizable: false,
      height:'auto',
      modal: true,
	  autoOpen :false,
        close: function( event, ui ) {
		 parent.postMessage('dong_popup', "*");

		},
		open: function( event, ui ) {
			 $( "#id_print" ).focus()
			 $( "#id_print" ).select()
	  },
    });
	$( "#dialog_hoanung_print" ).dialog({
      resizable: false,
      height:'auto',
      modal: true,
	  autoOpen :false,
       close: function( event, ui ) {
		 $( "#dialog_print" ).dialog('open')

	},
	open: function( event, ui ) {
			 $( "#id_hoanung_print" ).select()
	  },
    });

	 $( "#dialog_lydo_sua" ).dialog({
		 title:'Nhập lý do sửa',
      resizable: false,
      height:'auto',
      modal: true,
	  autoOpen :false,
 	  close: function( event, ui ) {

},
	   buttons: {
        "Yes": function() {

          if($.trim($('#lydo_sua').val().replace("\n", ""))!=''){
		 	sua();
			 $( this ).dialog( "close" );
		 }else{
			alert('Nhập lý do sửa');

			return false;
		 }
        },
        "No": function() {
          $( this ).dialog( "close" );
        }
      }
    });



	$( "#lydothieu" ).keydown(function(e){
			if (jwerty.is("enter",e)||jwerty.is("tab",e)) {
				$( "#id_thieu" ).focus();
				$( "#id_thieu" ).select();
				return false;
			}
	});
	$( "#benhnhantra" ).keydown(function(e){
			if (jwerty.is("enter",e)||jwerty.is("tab",e)) {
				if(window.kotinhlai==1){
					setTimeout(function(){$('#btn_luu').click();},100)
				}else{


					if(phaitra<0){
						$( "#benhnhantra" ).val(0)
						setTimeout(function(){$('#btn_luu').click();},100)
					}else{
						if(phaitra!=parseInt($( "#benhnhantra" ).val().split('.').join(''))){
							$("#btn_trahet").trigger("click");
						}else if(phaitra-parseInt($( "#benhnhantra" ).val().split('.').join(''))==0){
							setTimeout(function(){$('#btn_luu').click();},100)
						}
					}
				}
			}else{
				if (e.shiftKey || (e.keyCode > 48 || e.keyCode < 57) && (e.keyCode > 96 || e.keyCode < 105 )) {
					window.kotinhlai=1
				   }

			}
	});
	$( "#benhnhantra" ).blur(function(){
		window.kotinhlai=0;
	})
	$('#tiengiam').keydown(function(e){
		if (jwerty.is("enter",e)||jwerty.is("tab",e)) {
			$('#lydogiamgia').focus();
		}
	})

	$('#lydogiamgia').keydown(function(e){
		if (jwerty.is("enter",e)||jwerty.is("tab",e)) {
			$('#benhnhantra').focus();
		}
	})

	$( "#benhnhantra" ).keyup(function(e){
	var tam=$( "#benhnhantra" ).val().split('.').join('');
		tam=parseInt(tam).formatMoney(0, ',', '.')
			$("#benhnhantra").val(tam)
	});



	$( "#id_thieu" ).keydown(function(e){
			if (jwerty.is("enter",e)) {
				if($( "#id_thieu" ).val()<=8 && $( "#id_thieu" ).val()>0){
					$('#dialog_sotien_thieu').dialog('close')
				}
				return false;
			}
	});



	 $( "#dialog_sotien_thieu" ).dialog({
      resizable: false,
      height:'auto',
	  width:'auto',
	  autoOpen :false,
      modal: true,
	  close: function( event, ui ) {
		window.lydothieu= $('[lydothieu=' +  $('#id_thieu').val() + ']').html()+' ('+$('#lydothieu').val().replace(/\n/g, "")+')'
		 if(dem==0){
					luu();
				}
	  },

    });






   	$('#giamgia').val(parseInt($('#giamdtph').val())+parseInt($('#giamthuoc').val())+parseInt($('#giamchidinh').val()))




        //Tạo lưới
		$('#ngay').datetimeEntry({datetimeFormat: 'H:M D/O/y',spinnerImage: ''});
		$('#ngay').val('<?=date("H")?>:<?=date("i")?> <?= date("d")?>/<?= date("m")?>/<?= date("y")?>');
  create_grid();
  create_grid_toathuoc();
  create_grid_toathuoc_chitiet();

  load_complete();
  		resize_control();
        $(window).resize(function() {
            temp = jQuery(window).height() - 200;
            $("#panel_main").css("height", temp + "px");
            resize_control();
        })

        //Lấy thông tin viện phí
//laythongtinvienphi();
$('#btn_trahet').click(function(){
	if(phaitra<=0){
		 $('#benhnhantra').val(0)
	}else{
		 $('#benhnhantra').val(phaitra.formatMoney(0, ',', '.'))
		 $('#benhnhantra').focus();
		 $('#benhnhantra').select();
	}
})

	$('body').bind('keydown', function (e) {
			if (jwerty.is('f12',e)) {
				 $("#btn_trahet").trigger("click");
			}
	});
	$('body').bind('keydown', function (e) {
			if (jwerty.is('ctrl+s',e)) {
				 $("#btn_luu").trigger("click");
			}
	});

	$('#phantram').bind('keyup', function (e) {
		if (jwerty.is('enter',e)) {
			$('#benhnhantra').focus();
			$('#benhnhantra').select();
		}
	});

	/*$('#tiengiam').bind('keyup', function (e) {
			$('#phantram').val(0);
			sum =  $("#rowed3").jqGrid("getCol", "PhiThucHien", false, "sum");
			giamhientai=parseInt($('#tiengiam').val());
			tinhlai();
	});*/





    $('#btn_luu').click(function(){
		if(($('#phantram').val()>0||$('#tiengiam').val()>0)&&$('#lydogiamgia1').val()==''){
			alert('Vui lòng chọn lý do giảm');
			$('#lydogiamgia').val();
		}else{
			 $('#dialog_sotien').html('Số tiền thu là '+$('#benhnhantra').val()+'.Bạn có muốn tiếp tục')	;
		    $( "#dialog_sotien" ).dialog('open');
		}
		})


    });


    function resize_control() {
        $("#rowed3").setGridHeight($("#panel_main .left_col").height() - 160);
        $("#rowed3 ").setGridWidth($(".left_col").width() -5);
        $("#rowed4").setGridHeight($("#panel_main .right_col.tren").height() - 90);
        $("#rowed4 ").setGridWidth($(".right_col").width() - 3);
		$("#rowed5").setGridHeight($("#panel_main .right_col.duoi").height() - 160);
        $("#rowed5").setGridWidth($(".right_col").width() - 3);


    }
   function resize_subToathuoc() {
      $("#rowed4").setGridHeight($("#panel_main .right_col.tren").height() - 90);
      $("#rowed5").setGridHeight($("#panel_main .right_col.duoi").height() - 160);

   }
    function create_layout() {
         $('#panel_main').layout({
            resizerClass: 'ui-state-default'
                    , center: {
                           resizable: true
                        , size: "55%"
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
					resize_control();

                }
                , onclose_end: function() {

                 resize_control();
                }

            }
            , east: {
                resizable: true
                        , size: "45%"

                        , fxName: "drop"        // none, slide, drop, scale
                        , fxSpeed_open: 450
                        , fxSpeed_close: 450
                        , fxSettings_open: {easing: "easeInQuint"}
                , fxSettings_close: {easing: "easeOutQuint"}

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

   $("#subToathuoc").layout({
    resizerClass: 'ui-state-default'
                    , center: {
                           resizable: true
                        , size: "30%"
                        , spacing_closed: 27
                        , togglerLength_closed: 85
                        , togglerAlign_closed: "center"

                        , slideTrigger_open: "mouseover"
                        , fxSettings_close: {easing: "easeOutQuint"}
                , onresize_end: function() {
                   // alert();
                   resize_subToathuoc();


                }
                , onopen_end: function() {
					resize_subToathuoc();

                }
                , onclose_end: function() {

                	resize_subToathuoc();
                }

            }
            , south: {
                resizable: true
                        , size: "70%"

                        , fxName: "drop"        // none, slide, drop, scale
                        , fxSpeed_open: 450
                        , fxSpeed_close: 450
                        , fxSettings_open: {easing: "easeInQuint"}
                , fxSettings_close: {easing: "easeOutQuint"}

                , onresize_end: function() {
                    resize_subToathuoc();
                }
                , onopen_end: function() {

      				  resize_subToathuoc();
                }
                , onclose_end: function() {
					resize_subToathuoc();

                }
            }
   });

    }

	 function create_layout2() {
         $('#panel_sub').layout({
            resizerClass: 'ui-state-default'
                    , center: {
                           resizable: true
                        , size: "55%"
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
					resize_control();

                }
                , onclose_end: function() {

                 resize_control();
                }

            }
            , east: {
                resizable: true
                        , size: "45%"

                        , fxName: "drop"        // none, slide, drop, scale
                        , fxSpeed_open: 450
                        , fxSpeed_close: 450
                        , fxSettings_open: {easing: "easeInQuint"}
                , fxSettings_close: {easing: "easeOutQuint"}

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
     function create_grid() {
        var searhicon = '<span class="ui-state-error ui-state-hover  " style="border:0"><span class="ui-icon  ui-icon-closethick" style="float: left; margin-right: .3em;"></span></span>';
        $("#rowed3").jqGrid({
            url: url_rowed3,
            datatype: "json",
            colNames: ['','ID_LoaiKham','ID_Kham','ID_LuotKham','MaBenhNhan','TenBenhNhan','Ngày chỉ định','Tên loại khám','Trạng thái','Phí thực hiện' ,'Tên nhóm','Phí gốc','','','',''],
            colModel: [
			{name:'xoa',index:'xoa',width:"2%",align:'center',hidden:false, editable: false,formatter: function (cellValue, options, rowObject) {

                            return searhicon
                        }}
		   ,
                {name: 'ID_LoaiKham', index: 'ID_LoaiKham', width: "0%", editable: false, align: 'left', hidden: true},
                {name: 'ID_Kham', index: 'ID_Kham', search: true, width: "1%", editable: false, align: 'left', hidden: true},
                {name: 'ID_LuotKham',  index: 'ID_LuotKham', search: false, width: "2%", editable: false, align: 'left', hidden: true},
                {name: 'MaBenhNhan', index: 'MaBenhNhan', search: false, width: "1%", editable: false, align: 'left', hidden: true},
                {name: 'TenBenhNhan', index: 'TenBenhNhan', search: false, width: "1%", editable: false, align: 'left', hidden: true},
                {name: 'NgayGioTao', index: 'NgayGioTao', search: false, width: "10%", editable: false, align: 'center', hidden: false},
                {name: 'TenLoaiKham', index: 'TenLoaiKham', search: false, width: "20%", editable: false, align: 'left', hidden: false},
                {name: 'TenTrangThaiCLSCuaBenhNhan', index: 'TenTrangThaiCLSCuaBenhNhan', search: false, width: "10%", editable: false, align: 'left', hidden: false},
                {name: 'PhiThucHien',formatter:"integer",sorttype:"number", summaryType: 'sum',index: 'PhiThucHien', search: false, width: "10%", editable: false, align: 'right', hidden: false},
                {name: 'TenNhom', index: 'TenNhom', search: false, width: "20%", editable: false, align: 'left', hidden: false},
                {name: 'GiaThueNgoaiThucHien',index: 'GiaThueNgoaiThucHien',summaryType: 'sum',formatter:"integer",sorttype:"number",  search: false, width: "10%", editable: false, align: 'right', hidden: false},
				 {name: 'Giamgia',index: 'Giamgia',summaryType: 'sum',formatter:"integer",sorttype:"number",  search: false, width: "10%", editable: false, align: 'right', hidden: true},
				  {name: 'tongphuthu',index: 'tongphuthu',summaryType: 'sum',formatter:"integer",sorttype:"number",  search: false, width: "10%", editable: false, align: 'right', hidden: true},
        		{name: 'ExtField1',index: 'ExtField1',hidden: true},
          		{name: 'id_kham_dtph',index: 'id_kham',hidden: true},


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
            footerrow: true,
            userDataOnFooter: true,
            grouping:true,
            groupingView : {
            groupField : ['TenNhom'],
            groupDataSorted : true ,
            groupCollapse : false,
            groupColumnShow :true,
            groupSummary:false,
            groupText : ['<b>{0} : {PhiThucHien}</b>']
             },

			onCellSelect: function (rowid,iCol,cellcontent,e) {
			if((iCol==0)&&(window.oper=='add')){
              $('#rowed3').jqGrid('delRowData',rowid);
			  $('#rowed3').trigger("reloadGrid");
			  tinhlai();
            }
        },
            onSelectRow: function(id) {
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
                var rowData = jQuery('#rowed3').getRowData(rowid);

            },
            loadComplete: function(data) {
				window.load_complete3=1;
                var grid = $("#rowed3"),
				sum = grid.jqGrid('getCol', 'PhiThucHien', false, 'sum');
				sumGiaThueNgoaiThucHien=grid.jqGrid('getCol', 'GiaThueNgoaiThucHien', false, 'sum');
				grid.jqGrid('footerData','set', {ID: 'PhiThucHien:', PhiThucHien: sum});
				grid.jqGrid('footerData','set', {ID: 'GiaThueNgoaiThucHien:', GiaThueNgoaiThucHien: sumGiaThueNgoaiThucHien});
            },
            caption: "Ds chưa thanh toán"
        });
    }








function create_grid_toathuoc() {

        $("#rowed4").jqGrid({
            url: url_rowed4,
            datatype: "json",
            colNames: ['','ID_DonThuoc','ID_LuotKham','Bác sỹ kê','Ngày kê toa','Tổng tiền','Tiền giảm'],
            colModel: [
				{name:'laythuoc',index:'laythuoc', width:'2%', align:"right",edittype:'checkbox',formatter: "checkbox",editable:true,formatoptions: {disabled : false},editoptions: { value:"1:0",dataEvents:  [{ type: 'click', fn: function(e) {
					 tinhlai();

                 } }]}},
                {name: 'ID_DonThuoc', index: 'ID_DonThuoc', width: "40%", editable: false, align: 'left', hidden: true},
                {name: 'ID_LuotKham', index: 'ID_LuotKham', search: true, width: "10%", editable: false, align: 'left', hidden: true},
                {name: 'TenBSKeToa',  index: 'TenBSKeToa', search: false, width: "20%", editable: false, align: 'left', hidden: false},
                {name: 'NgayBatDauDungThuoc', index: 'NgayBatDauDungThuoc', search: false, width: "20%", editable: false, align: 'left', hidden: false},
                {name: 'ThanhTien',formatter:"integer", index: 'ThanhTien', search: false, width: "10%", editable: false, align: 'right', hidden: false},
                {name: 'SoTienGiam',formatter:"integer", index: 'SoTienGiam', search: false, width: "10%", editable: false, align: 'right', hidden: false},




            ],
            loadonce: false,
            scroll: false,
            modal: true,
            shrinkToFit: true,
            cmTemplate: {sortable: false},
            rowNum: 10000000,
            rowList: [],
            pager: '#prowed4',
            height: 100,
            width: 100,
            viewrecords: true,
            ignoreCase: true,
            sortorder: "desc",

            onSelectRow: function(id) {
            },
           ondblClickRow: function(rowId) {
            },
            onselect: function(rowId, rowIndex, columnIndex) {
            },
            onRightClickRow: function(rowid, iRow, iCol, e) {
            },
            loadComplete: function(data) {
				window.load_complete4=1;
				var $this = $(this), ids = $this.jqGrid('getDataIDs'), i, l = ids.length;

			    for (i = 0; i < l; i++) {
			        $this.jqGrid('editRow', ids[i], true);
			    }
				 var tmp1 = $("#rowed4").jqGrid('getDataIDs');
              if(tmp1.length>0){
					window.id_donthuoc=tmp1[0];
				}else{
					window.id_donthuoc=0;
				}

            },
            caption: "Toa thuốc"
        });
    }

function create_grid_toathuoc_chitiet() {

        $("#rowed5").jqGrid({
            datatype:'json',
            url: url_rowed5,
            colNames: ['ID_DonThuocCT','Tên thuốc','ĐVT','Đơn giá','SL kê','SL Bn lấy','Thành tiền','Giá vốn','','',''],
            colModel: [

                {name: 'ID_DonThuocCT', index: 'ID_DonThuocCT', width: "0%", editable: false, align: 'left', hidden: true},
                {name: 'TenThuoc', index: 'TenThuoc', search: true, width: "45%", editable: false, align: 'left', hidden: false},
                {name: 'TenDonViTinh',  index: 'TenDonViTinh', search: false, width: "5%", editable: false, align: 'left', hidden: false},
                {name: 'Gia',formatter:"integer", index: 'Gia', search: false, width: "8%", editable: false, align: 'right', hidden: false},
                {name: 'SoThuocDeNghiTheoDon',formatter:"integer", index: 'SoThuocDeNghiTheoDon', search: false, width: "5%", editable: false, align: 'right', hidden: false},
                {name: 'SoThuocThucXuat',formatter:"integer", index: 'SoThuocThucXuat', search: false, width: "5%", editable: false, align: 'right', hidden: false},
                {name: 'ThanhTien',formatter:"integer", index: 'SoThuocThucXuat', search: false, width: "10%", editable: false, align: 'right', hidden: false},
				{name: 'giavon',formatter:"currency",formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: "", defaultValue: '0'}, index: 'SoThuocThucXuat', search: false, width: "10%", editable: false, align: 'right', hidden: false},
                {name: 'ID_Thuoc', index: 'ID_Thuoc', search: false, width: "10%", editable: false, align: 'right', hidden: true},

      			{name: 'SoLuong', index: 'SoLuong', search: false, width: "10%", editable: false, align: 'right', hidden: true},
				{name: 'SoLuongtoatam', index: 'SoLuong', search: false, width: "10%", editable: false, align: 'right', hidden: true},

            ],
            loadonce: false,
            scroll: false,
            modal: true,
			footerrow: true,

            shrinkToFit: true,
            cmTemplate: {sortable: false},
            rowNum: 10000000,
            rowList: [],
            pager: '#prowed4',
            height: 100,
            width: 100,
            viewrecords: true,
            ignoreCase: true,
            sortorder: "desc",
            onSelectRow: function(id) {
            },
			onCellSelect: function (rowid,iCol,cellcontent,e) {

        },
           ondblClickRow: function(rowId) {
       		  var rowData = jQuery(this).getRowData(rowId);
            },
            onselect: function(rowId, rowIndex, columnIndex) {

            },
            onRightClickRow: function(rowid, iRow, iCol, e) {



            },
            loadComplete: function(data) {
              sum_ThanhTien =  $("#rowed5").jqGrid("getCol", "ThanhTien", false, "sum");
			  sum_giavon =  $("#rowed5").jqGrid("getCol", "giavon", false, "sum");
			  $("#rowed5").jqGrid("footerData", "set", {giavon:sum_giavon, ThanhTien: sum_ThanhTien});

			  window.load_complete5=1;


            },
            caption: "Toa thuốc chi tiết"
        });
    }

function create_lydogiamgia(elem,datalocal){
		datalocal=jQuery.parseJSON(datalocal);
		 $(elem).jqGrid({
		datastr:datalocal,
		datatype: "jsonstring" ,
		colNames:['Lý do giảm','Ghi chú'],
		colModel:[
			{name:'lydogiam',index:'lydogiam'},
			{name:'ghichu',index:'ghichu'}
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
function luu(){
	if(($('#lydogiamgia1').val()=='')&&($('#tiengiam').val()>0)){
		alert('xin chọn loại giảm giá');
		return;
	}
	dem=dem+1;
	if(tongcong>=0){
		miengiam_nv='';
		ids = $("#rowed4").jqGrid('getDataIDs')
		sum = tienthuoc;
	    sumvat = $("#rowed5").jqGrid("getCol", "tongtienvat", false, "sum");
			if($('#tiengiam').val()>0){
				miengiam_nv=',"id_miengiam":"'+$('#lydogiamgia1').val()+'","tien_miengiam":"'+$('#tiengiam').val()+'"';
				miengiam_nv=miengiam_nv+',"miengiamthuoc":"'+$('#giamtienthuoc').val()+'","check_miengiamthuoc":"'+$("#nhanvien_giamthuoc").is(':checked')+'","bsgiamthuoc":"'+giam_thuoc+'"';
			}
		window.datatosend = '{"id_giam_nv":"'+id_giam_nv+'","ID_LuotKham":"'+ID_LuotKham+'","id_giam_thuoc":"'+id_giam_thuoc+'","id_giam_chidinh":"'+id_giam_chidinh+'","id_giam_dtph":"'+id_giam_dtph+'","idbenhnhan":"'+idbenhnhan+'","NgayGio":'+JSON.stringify($('#ngay').val())+',"nguoigd":"'+$('#nguoigd').val()+'","diachi":"'+$('#diachi').val()+'","diengiai":"'+$('#diengiai').val()+'","tienthu":"'+$('#benhnhantra').val().split('.').join('')+'","tongcong":"'+tongcong+'","id_luotkham":"'+id_luotkham+'","tienthu_hoantra":"'+(parseInt ($('#benhnhantra').val().split('.').join(''))-parseInt (phaitra))+'","giamgia":"'+giamgia+'","dskho":"'+dskho+'","sum":"'+sum+'","sumvat":"'+sumvat+'","lydothieu":'+JSON.stringify($.trim(window.lydothieu))+',"iddonthuoc":"'+window.id_donthuoc+'"'+miengiam_nv;
				window.datatosend+=',"laythuoc":'+JSON.stringify($("#"+ids[0]+"_laythuoc").is(':checked'))+'';
				window.datatosend+=',"kham":'+JSON.stringify($('#rowed3').jqGrid('getGridParam','data'))+'';
			/*if($("#rowed5").jqGrid('getGridParam', 'records')>0&&$("#"+ids[0]+"_laythuoc").is(':checked')){
		   		 window.datatosend+=',"thuoc":'+JSON.stringify($('#rowed5').jqGrid('getGridParam','data'));
			}*/
			window.datatosend+='}'
			window.datatosend=jQuery.parseJSON(datatosend);

		/*	if($("#rowed5").getGridParam("reccount")>0&&$("#"+ids[0]+"_laythuoc").is(':checked')){
			$.post('resource.php?module=<?=$modules?>&view=<?=$view?>&action=controller_tonkho&hienmaloi=1',datatosend).done(function(data){
			data=data.split(';;')
				if(data[1]==0){	*/
					if($('#benhnhantra').val().split('.').join('')>phaitra){
						$( "#dialog_hoanung" ).html('Bệnh nhân còn dư '+(parseInt ($('#benhnhantra').val().split('.').join(''))-parseInt (phaitra)).formatMoney(0, ',', '.')+' đồng có lập phiếu hoàn tiền cho bệnh nhân không');
						$( "#dialog_hoanung" ).dialog('open');
					}else{
						$.post('resource.php?module=<?=$modules?>&view=<?=$view?>&action=controller_chitiet&hienmaloi=1&kho='+dskho,datatosend).done(function(data1){
						data1=data1.split(';');
							if(data1[0]==1){
							}else{
								$('#nocuoiky').val((phaitra-$('#benhnhantra').val().split('.').join('')).formatMoney(0, ',', '.'))
								window.oper='edit';
								ID_ThuTraNo=$.trim(data1[0]);
								load_form();
								$( "#dialog_print" ).dialog('open');
							}
						})
					}
				/*}else{
					$('#dialog_sothuoc').html(data[0]).dialog('open');
				}	*/
			/*})
			}else{
				if($('#benhnhantra').val().split('.').join('')>phaitra){
					$( "#dialog_hoanung" ).html('Bệnh nhân còn dư '+(parseInt ($('#benhnhantra').val().split('.').join(''))-parseInt (phaitra)).formatMoney(0, ',', '.')+ ' đồng có lập phiếu hoàn tiền cho bệnh nhân không');
					$( "#dialog_hoanung" ).dialog('open');
				}else{
					$.post('resource.php?module=<?=$modules?>&view=<?=$view?>&action=controller_chitiet&hienmaloi=1&kho='+dskho,datatosend).done(function(data1){
						data1=data1.split(';');
						if(data1[0]==1){
						}else{
							$('#nocuoiky').val((phaitra-$('#benhnhantra').val().split('.').join('')).formatMoney(0, ',', '.'))
							window.oper='edit';2
							ID_ThuTraNo=$.trim(data1[0]);
							load_form();
							$( "#dialog_print" ).dialog('open');
						}
					})
				}
			}*/
	   }
	}



	 $( "#dialog_hoanung" ).dialog({
		 title:'Thông báo',
      resizable: false,
      height:'auto',
      modal: true,
	  autoOpen :false,
 	  close: function( event, ui ) {
	  },
	   buttons: {
        "Yes": function() {
			$( this ).dialog( "close" );
			/*var datatosend1 = '{"idbenhnhan":"'+idbenhnhan+'","ID_LuotKham":"'+ID_LuotKham+'","ID_ThuTraNo":"'+ID_ThuTraNo+'","NgayGio":'+JSON.stringify($('#ngay').val())+',"nguoigd":"'+$('#nguoigd').val()+'","diachi":"'+$('#diachi').val()+'","diengiai":"'+$('#diengiai').val()+'","tienthu":"'+(parseInt ($('#benhnhantra').val().split('.').join(''))-parseInt (phaitra))+'","nocu":"'+$('#nocuoi').val()+'"}';
		datatosend1 =$.parseJSON(datatosend1) ;
			$.post('resource.php?module=<?=$modules?>&view=<?=$view?>&action=controller_hoanung',datatosend1).done(function(data){
	 	    })*/
			$.post('resource.php?module=<?=$modules?>&view=<?=$view?>&action=controller_chitiet&hoanung=1&hienmaloi=1&kho='+dskho,datatosend).done(function(data1){
				data1=data1.split(';');
					if(data1[0]==1){
					}else{
								window.ID_hoanung=$.trim(data1[1]);
								$('#dialog_hoanung_print').dialog('open');
								$('#nocuoiky').val((phaitra-$('#benhnhantra').val().split('.').join('')).formatMoney(0, ',', '.'))
								window.oper='edit';
								ID_ThuTraNo=$.trim(data1[0]);
								load_form();
					}
			})
        },
        "No": function() {
          $( this ).dialog( "close" );
		  $.post('resource.php?module=<?=$modules?>&view=<?=$view?>&action=controller_chitiet&hienmaloi=1&kho='+dskho,datatosend).done(function(data1){
				data1=data1.split(';');
					if(data1[0]==1){
					}else{
						$( "#dialog_print" ).dialog('open');
						$('#nocuoiky').val((phaitra-$('#benhnhantra').val().split('.').join('')).formatMoney(0, ',', '.'))
						window.oper='edit';
						ID_ThuTraNo=$.trim(data1[0]);
						load_form();
					}
			})
        }
      }
    });





function load_complete(){
	if((load_complete3==1)&&(load_complete4==1)&&(load_complete5==1)){
		setTimeout(load_complete,50);
		return;
	}

	setTimeout(tinhlai,1000);
}

function tinhlai(){

	sum_phigockham=$("#rowed3").jqGrid("getCol", "GiaThueNgoaiThucHien", false, "sum");
	sum_phigocthuoc=$("#rowed5").jqGrid("getCol", "giavon", false, "sum");


	sum  =  $("#rowed3").jqGrid("getCol", "PhiThucHien", false, "sum");
	sum1 =  $("#rowed5").jqGrid("getCol", "ThanhTien", false, "sum");
	ids  =  $("#rowed4").jqGrid('getDataIDs');


	 giamgia=giam_dtph+giam_chidinh+giam_thuoc+parseInt($('#tiengiam').val().split('.').join(''));
	if($('#'+ids[0]+'_laythuoc	').is(':checked')){
		tienthuoc=sum1;
		$('#giamthuoc').val(giam_thuoc.formatMoney(0, ',', '.'))
	}else{

		tienthuoc=tienthuoc_toatam;
		giamgia=giam_dtph+giam_chidinh+parseInt($('#tiengiam').val().split('.').join(''));
		$('#giamthuoc').val(0)
	}
		tongcong=parseFloat(sum)+tienthuoc;
		chiphigoc=sum_phigockham+sum_phigocthuoc;
		phaitra=tongcong-giamgia+nodauky;
		$('#chiphigoc').val(chiphigoc.formatMoney(0, ',', '.'));
		$('#phaitra').val(phaitra.formatMoney(0, ',', '.'));
		$('#giamgia').val(giamgia.formatMoney(0, ',', '.'));
		$('#tienthuoc').val(tienthuoc.formatMoney(0, ',', '.'));
		$('#tongcong').val(tongcong.formatMoney(0, ',', '.'));
		if(window.oper=='edit'){
			$('#nocuoiky').val((phaitra-$('#benhnhantra').val().split('.').join('')).formatMoney(0, ',', '.'))
		}
	}



	function load_form(){
		if(oper=='add'){
			$('#btn_trahet,#btn_luu,#khonglaythuoc').button('enable');
			$('#btn_sua,#btn_huy,#btn_gtgt,#btn_lien1,#btn_lien2,#btn_hdKhamCb').button('disable');
			$('#ngay,#nguoigd,#diachi,#diengiai,#benhnhantra,#phantram,#tiengiam,#lydogiamgia').attr("disabled", false);
			$('#nocuoiky').val(0);
			$('#benhnhantra').val(0);

			$('.lydogiamgia_button').button('enable')
			window.url_rowed3 = 'resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_ds_vienphichitiet_theoluotkham&ID_LuotKham='+ID_LuotKham;
			window.url_rowed4 = 'resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_donthuoc_luotkham&ID_LuotKham='+ID_LuotKham;
			window.url_rowed5 = 'resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_toathuoc&ID_LuotKham='+ID_LuotKham;
			$.post('resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_tienthuoctoantam&ID_LuotKham='+ID_LuotKham).done(function(data){

				if(parseInt(data)>0){
					$('#toantam_label').show()
				}else{
					$('#toantam_label').hide()
				}
				$('#toantam').val(parseInt(data).formatMoney(0, ',', '.'))

			})
			$.post('resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_tienthuoctoantamdaxuat&ID_LuotKham='+id_luotkham).done(function(data){

				if(parseInt(data)>0){
					$('#toadaxuat_label').show()
				}else{
					$('#toadaxuat_label').hide()
				}
				$('#toadaxuat').val(parseInt(data).formatMoney(0, ',', '.'))

				window.tienthuoc_toatam=parseInt(data);
			})
		}else{
			$.post('resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_tienthuoctoantamdaxuat&ID_LuotKham='+id_luotkham).done(function(data){

				if(parseInt(data)>0){
					$('#toadaxuat_label').show()
				}else{
					$('#toadaxuat_label').hide()
				}

				window.tienthuoc_toatam=parseInt(data);
				$('#toadaxuat').val(parseInt(data).formatMoney(0, ',', '.'))
			})
			$('#toantam_label').hide()
			$('#btn_trahet,#btn_luu,#khonglaythuoc').button('disable');
			$('#btn_sua,#btn_huy,#btn_gtgt,#btn_lien1,#btn_lien2,#btn_hdKhamCb').button('enable');
			$('#ngay,#nguoigd,#diachi,#diengiai,#benhnhantra,#phantram,#tiengiam,#lydogiamgia').attr("disabled", true);
			$('.lydogiamgia_button').button('disable')
			window.url_rowed3 = 'resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_ds_vienphichitiet_theoluotkham&ID_ThuTraNo='+ID_ThuTraNo;
			window.url_rowed4 = 'resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_donthuoc_luotkham&ID_ThuTraNo='+ID_ThuTraNo;
			window.url_rowed5 = 'resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_toathuoc&ID_ThuTraNo='+ID_ThuTraNo;
		}

	}


	function sua(){
		dem=0;
			var datatosend = '{"id_giam_nv":"'+id_giam_nv+'","id_giam_thuoc":"'+id_giam_thuoc+'","id_giam_chidinh":"'+id_giam_chidinh+'","id_giam_dtph":"'+id_giam_dtph+'","idbenhnhan":"'+idbenhnhan+'","id_luotkham":"'+id_luotkham+'","id_thutrano":"'+ID_ThuTraNo+'","NgayGio":'+JSON.stringify($('#ngay').val())+',"iddonthuoc":"'+window.id_donthuoc+'","lydo_sua":'+JSON.stringify($('#lydo_sua').val());
			datatosend+=',"dskho": '+JSON.stringify(dskho);
			//datatosend+=',"sum": '+JSON.stringify(sum);
			datatosend+=',"kham": '+JSON.stringify($('#rowed3').jqGrid('getGridParam','data'));
			/*if($("#rowed5").jqGrid('getGridParam', 'records')>0){
		    datatosend+=',"thuoc":'+JSON.stringify($('#rowed5').jqGrid('getGridParam','data'));
			}	*/
			datatosend+='}';
			datatosend=jQuery.parseJSON(datatosend);
			$.post('resource.php?module=<?=$modules?>&view=<?=$view?>&action=controller_chitiet_sua&hienmaloi=1',datatosend).done(function(data){
				if($.trim(data)==2){
					alert('Bill đã có lượt thanh toán sau không ');
				}else{
				window.oper='add';
				load_form()
				}
			})
	}


	function khonglaythuoc(){
		ids = $("#rowed4").jqGrid('getDataIDs')
		$('#khonglaythuoc').click(function(){
			if($("#"+ids[0]+"_laythuoc").is(':checked')){
				$("#"+ids[0]+"_laythuoc").prop('checked',false);
				tinhlai();
			}else{
				$("#"+ids[0]+"_laythuoc").prop('checked',true);
				tinhlai();
			}
		})
	}


function tinhtienthuoc(){
	$('#phantram').keyup(function(){
		$('#tiengiam').val(0);
			sum_PhiThucHien =  $("#rowed3").jqGrid("getCol", "PhiThucHien", false, "sum");
			sum_GiaThueNgoaiThucHien =  $("#rowed3").jqGrid("getCol", "GiaThueNgoaiThucHien", false, "sum");
			sum_ThanhTien =  $("#rowed5").jqGrid("getCol", "ThanhTien", false, "sum");
			sum_giavon =  $("#rowed5").jqGrid("getCol", "giavon", false, "sum");
			sum_loinhuan_kham=sum_PhiThucHien;
			//-sum_GiaThueNgoaiThucHien;
			sum_loinhuan_thuoc=sum_ThanhTien-sum_giavon;

			if($('#nhanvien_giamthuoc').is(':checked')){
				$('#giamtienthuoc').val($('#phantram').val()*sum_loinhuan_thuoc/100)
				giamhientai=parseInt($('#phantram').val()*(sum_loinhuan_kham+sum_loinhuan_thuoc)/100);
				sum_giamgia=sum_loinhuan_kham+sum_loinhuan_thuoc;
			}else{
				giamhientai=parseInt($('#phantram').val()*(sum_loinhuan_kham)/100);
				sum_giamgia=sum_loinhuan_kham;
			}

				    if(giamhientai>sum_giamgia){
						$('#tiengiam').val(0);
					}else{
						$('#tiengiam').val(giamhientai);
					}
			tinhlai();
		})



	$('#tiengiam').keyup(function(){
		$('#phantram').val(0);
			sum_PhiThucHien =  $("#rowed3").jqGrid("getCol", "PhiThucHien", false, "sum");
			sum_GiaThueNgoaiThucHien =  $("#rowed3").jqGrid("getCol", "GiaThueNgoaiThucHien", false, "sum");
			sum_ThanhTien =  $("#rowed5").jqGrid("getCol", "ThanhTien", false, "sum");
			sum_giavon =  $("#rowed5").jqGrid("getCol", "giavon", false, "sum");
			sum_loinhuan_kham=sum_PhiThucHien-sum_GiaThueNgoaiThucHien;
			sum_loinhuan_thuoc=sum_ThanhTien-sum_giavon;
			giamhientai=parseInt($('#tiengiam').val());
			if($('#nhanvien_giamthuoc').is(':checked')){
				sum_giamgia=sum_loinhuan_kham+sum_loinhuan_thuoc;
				$('#giamtienthuoc').val($('#tiengiam').val()/(sum_loinhuan_kham+sum_loinhuan_thuoc)*sum_loinhuan_thuoc);
			}else{
				sum_giamgia=sum_loinhuan_kham;
			}


			tinhlai();
		})
}








function create_congno() {
        $("#rowed7").jqGrid({
            url: 'resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_chitietcongno&id_benhnhan='+idbenhnhan,
            datatype: "json",
            colNames: ['Ngày lập phiếu','Số phiếu','Diễn giải','Nợ đầu ký','Tổng phát sinh','Số tiền thu','Tiền hủy chỉ định','Tiền miễn giảm','Nợ cuối'],
            colModel: [
                {name: 'NgayGio', index: 'NgayGio', width: "10%", editable: false, align: 'left'},
                {name: 'MaPhieu', index: 'MaPhieu', search: true, width: "10%", editable: false, align: 'left'},
                {name: 'GhiChu',  index: 'GhiChu', search: false, width: "10%", editable: false, align: 'left'},
                {name: 'NoCu', index: 'NoCu', search: false, width: "10%", editable: false, align: 'right',formatter:'currency',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: "", defaultValue: '0'}},
                {name: 'TongTienPhaiTra', index: 'TongTienPhaiTra', search: false, width: "10%", editable: false, align: 'right',formatter:'currency',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: "", defaultValue: '0'}},
                {name: 'SoTienThanhToan', index: 'SoTienThanhToan', search: false, width: "10%", editable: false, align: 'right',formatter:'currency',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: "", defaultValue: '0'}},
                {name: 'TienHuyChiDinh', index: 'TienHuyChiDinh', search: false, width: "20%", editable: false, align: 'right',formatter:'currency',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: "", defaultValue: '0'}},
                {name: 'GiamGia', index: 'GiamGia', search: false, width: "10%", editable: false, align: 'right',formatter:'currency',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: "", defaultValue: '0'}},
                {name: 'Nomoi',formatter:"integer",sorttype:"number", summaryType: 'sum',index: 'PhiThucHien', search: false, width: "10%", editable: false, align: 'right',formatter:'currency',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: "", defaultValue: '0'}},
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
            footerrow: true,
            userDataOnFooter: true,
			onCellSelect: function (rowid,iCol,cellcontent,e) {
        	},
            onSelectRow: function(id) { },
            ondblClickRow: function(rowId) {},
            onselect: function(rowId, rowIndex, columnIndex) {},
            onRightClickRow: function(rowid, iRow, iCol, e) {

            },
            loadComplete: function(data) {
              	sumTongTienPhaiTra = $("#rowed7").jqGrid('getCol', 'TongTienPhaiTra', false, 'sum');
				sumSoTienThanhToan=$("#rowed7").jqGrid('getCol', 'SoTienThanhToan', false, 'sum');
				sumTienHuyChiDinh=$("#rowed7").jqGrid('getCol', 'TienHuyChiDinh', false, 'sum');
				sumGiamGia=$("#rowed7").jqGrid('getCol', 'GiamGia', false, 'sum');

				$("#rowed7").jqGrid('footerData','set', {TongTienPhaiTra: sumTongTienPhaiTra, SoTienThanhToan: sumSoTienThanhToan, TienHuyChiDinh: sumTienHuyChiDinh, GiamGia: sumGiamGia});
            },

        });
    }

function create_tamung() {
        $("#rowed6").jqGrid({
            url: 'resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_tamung&id_luotkham='+id_luotkham,
            datatype: "json",
            colNames: ['Số phiếu','Ngày nộp','Người nộp tiền','Tạm ứng','Hoàn ứng','Thu ngân'],
            colModel: [
                {name: 'MaPhieu', index: 'MaPhieu', width: "10%", editable: false, align: 'left'},
                {name: 'NgayGio', index: 'NgayGio', search: true, width: "10%", editable: false, align: 'left'},
                {name: 'GhiChu',  index: 'GhiChu', search: false, width: "10%", editable: false, align: 'left'},
                {name: 'Tamung', index: 'Tamung', search: false, width: "10%", editable: false, align: 'right',formatter:'currency',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: "", defaultValue: '0'}},
                {name: 'Hoanung', index: 'Hoanung', search: false, width: "10%", editable: false, align: 'right',formatter:'currency',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: "", defaultValue: '0'}},
				 {name: 'TongTienPhaiTra', index: 'TongTienPhaiTra', search: false, width: "10%", editable: false, align: 'left'},

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
            footerrow: true,
            userDataOnFooter: true,
			onCellSelect: function (rowid,iCol,cellcontent,e) {
        	},
            onSelectRow: function(id) { },
            ondblClickRow: function(rowId) {},
            onselect: function(rowId, rowIndex, columnIndex) {},
            onRightClickRow: function(rowid, iRow, iCol, e) {

            },
            loadComplete: function(data) {
              	sumTamung = $("#rowed6").jqGrid('getCol', 'Tamung', false, 'sum');
				sumHoanung=$("#rowed6").jqGrid('getCol', 'Hoanung', false, 'sum');


				$("#rowed7").jqGrid('footerData','set', {Tamung: sumTamung, Hoanung: sumHoanung});
            },

        });
    }

function create_billdalap() {
        $("#rowed8").jqGrid({
            url: 'resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_thanhtoanvienphi&hienmaloi=1&id_benhnhan='+idbenhnhan,
            datatype: "json",
            colNames: ['Số phiếu','Ngày lập','Nợ cũ','Tổng phát sinh','Số tiền thu','Tiền hủy chỉ định','Tiền miễn giảm','Nợ cuối'],
            colModel: [
                {name: 'MaPhieu', index: 'MaPhieu', width: "10%", editable: false, align: 'left'},
                {name: 'NgayGio', index: 'NgayGio', search: true, width: "10%", editable: false, align: 'left'},
                {name: 'NoCu', index: 'NoCu', search: false, width: "10%", editable: false, align: 'right',formatter:'currency',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: "", defaultValue: '0'}},
                {name: 'TongTienPhaiTra', index: 'TongTienPhaiTra', search: false, width: "10%", editable: false, align: 'right',formatter:'currency',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: "", defaultValue: '0'}},
                {name: 'SoTienThanhToan', index: 'SoTienThanhToan', search: false, width: "10%", editable: false, align: 'right',formatter:'currency',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: "", defaultValue: '0'}},
                {name: 'TienHuyChiDinh', index: 'TienHuyChiDinh', search: false, width: "20%", editable: false, align: 'right',formatter:'currency',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: "", defaultValue: '0'}},
                {name: 'GiamGia', index: 'GiamGia', search: false, width: "10%", editable: false, align: 'right',formatter:'currency',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: "", defaultValue: '0'}},
                {name: 'Nomoi',formatter:"integer",sorttype:"number", summaryType: 'sum',index: 'PhiThucHien', search: false, width: "10%", editable: false, align: 'right',formatter:'currency',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: "", defaultValue: '0'}},
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
            footerrow: true,
            userDataOnFooter: true,
			onCellSelect: function (rowid,iCol,cellcontent,e) {
        	},
            onSelectRow: function(id) {
				url_tam='resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_ds_vienphichitiet_theothutrano&ID_ThuTraNo='+id;
				$('#rowed9').jqGrid('setGridParam', { datatype: "json",url:url_tam }).trigger("reloadGrid");
			},
            ondblClickRow: function(rowId) {},
            onselect: function(rowId, rowIndex, columnIndex) {
			},
            onRightClickRow: function(rowid, iRow, iCol, e) {

            },
            loadComplete: function(data) {
              	sumTongTienPhaiTra = $("#rowed8").jqGrid('getCol', 'TongTienPhaiTra', false, 'sum');
				sumSoTienThanhToan=$("#rowed8").jqGrid('getCol', 'SoTienThanhToan', false, 'sum');
				sumTienHuyChiDinh=$("#rowed8").jqGrid('getCol', 'TienHuyChiDinh', false, 'sum');
				sumGiamGia=$("#rowed8").jqGrid('getCol', 'GiamGia', false, 'sum');

				$("#rowed8").jqGrid('footerData','set', {TongTienPhaiTra: sumTongTienPhaiTra, SoTienThanhToan: sumSoTienThanhToan, TienHuyChiDinh: sumTienHuyChiDinh, GiamGia: sumGiamGia});
            },

        });
    }


	function loadtab(){
		$('#tab3').click(function(){
			if(!$('#gbox_rowed7').length){
				create_congno();
				$("#rowed7").setGridHeight($("#tabs-3").height() - 170);
        		$("#rowed7").setGridWidth($("#tabs-3").width() +20);
			}
		})
		$('#tab2').click(function(){
			if(!$('#gbox_rowed6').length){
				create_tamung();
				$("#rowed6").setGridHeight($("#tabs-2").height() - 170);
       		    $("#rowed6").setGridWidth($("#tabs-2").width() +20);
			}
		})
		$('#tab4').click(function(){
			if(!$('#gbox_rowed8').length){
				//create_layout2();
				create_billdalap();
				create_chitiet();
				$("#rowed8").setGridHeight($("#tabs-4").height() - 170);
				$("#rowed8").setGridWidth($("#tabs-4").width() -600);
				$("#rowed9").setGridHeight($("#tabs-4").height() - 170);
				$("#rowed9").setGridWidth($("#tabs-4").width() -900);
			}
		})

	}
 function create_chitiet() {

        $("#rowed9").jqGrid({
            data:[],
            datatype: "local",
            colNames: ['Tên loại khám','Phí thực hiện' ,'Tên nhóm'],
            colModel: [
				{name: 'TenLoaiKham', index: 'TenLoaiKham', search: false, width: "20%", editable: false, align: 'left', hidden: false},
                {name: 'PhiThucHien',formatter:"integer",sorttype:"number", summaryType: 'sum',index: 'PhiThucHien', search: false, width: "10%", editable: false, align: 'right', hidden: false},
                {name: 'TenNhom', index: 'TenNhom', search: false, width: "20%", editable: false, align: 'left', hidden: false}
            ],
            loadonce: true,
            scroll: false,
            modal: true,
            shrinkToFit: true,
            cmTemplate: {sortable: false},
            rowNum: 10000000,
            rowList: [],


            height: 100,
            width: 100,
            viewrecords: true,
            ignoreCase: true,
            sortorder: "desc",
            footerrow: true,
            userDataOnFooter: true,
            grouping:true,
            groupingView : {
            groupField : ['TenNhom'],
            groupDataSorted : true ,
            groupCollapse : false,
            groupColumnShow :true,
            groupSummary:false,
            groupText : ['<b>{0} : {PhiThucHien}</b>']
             },

			onCellSelect: function (rowid,iCol,cellcontent,e) {

      		  },
            onSelectRow: function(id) {
            },
           ondblClickRow: function(rowId) {
            },
            onselect: function(rowId, rowIndex, columnIndex) {
            },
            onRightClickRow: function(rowid, iRow, iCol, e) {

            },
            loadComplete: function(data) {

            }

        });
    }



	function hentraketqua(){
		$('#hentra').click(function(){
			$.post('resource.php?module=web_services&function=get_link&action=index&folder=hen_tra_ket_qua:').done(function(data) {
			window.elem=1 + Math.floor(Math.random() * 1000000000);
			var folder= data.split(';');
			var duong_dan='resource.php?module='+folder[0]+'&view='+folder[1]+'&id_form='+folder[2]+'&idluotkham='+id_luotkham;
			dialog_main('Hẹn trả kết quả',100,100,elem,duong_dan);
			})
		})
	}
</script>


