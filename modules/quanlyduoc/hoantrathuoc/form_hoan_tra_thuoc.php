<html>
<style>
input[type="checkbox"]:focus {
-webkit-box-shadow: 0px 0px 1px 1px #0463B4!important;
  box-shadow:  0px 0px 2px 2px #208AC8 !important;
}

.top{
	height:100px;
	padding-bottom:3px;
	
}
.bottom{
	height:363px;
	
}
.t_left{
	float:left;
	height:100%;
	width:54%;
	border:#D4CCB0 solid 1px;
	border-radius: 3px ;
}
.t_right{
	float:left;
	height:100%;
	width:45%;
	border:#D4CCB0 solid 1px;
	border-radius: 3px ;
	margin-left:6px;
}
.t_title,.p_title{
	height:15px;
	width:99.2%;
	border-bottom:1px solid #D4CCB0;
	padding-left:5px;
}
.t_body,.p_body{
	height:84px;
	padding-left:2px;
}
#sophieu,#ngaylapphieu,#nguoilapphieu,#nguoinhapkho,#phieuxuat,#ngayxuat,#ngayketoa{
	width:85px;
}
.n_b_body{
	height:340px;
	width:100%;
}
.b_control{
	height:35px;
	width:99.7%;
	border:1px solid #D4CCB0;
	border-radius:4px;
	margin-top:2px;
}
#sodong,#thanhtienban,#thanhtienvon,#thanhtientralai{
	box-shadow:none!important;	
	padding: 0px!important;
}
#ngaylapphieu{
	text-align:center;
}
.tralai input.editable{
	text-align:right;
}
.editngay input{
	text-align:center;
}

	
</style>
<body>
<?php

$data= new SQLServer;
$store_name="{call GD2_GetThongTinDonThuocByID_PhieuXuat (?)}";
$params = array($_GET['idxuatkho']);
$get_lich=$data->query( $store_name, $params);
$excute= new SQLServerResult($get_lich);
$thongtinbn= $excute->get_as_array();

$store_name2="{call GD2_GetID_NhapKhoTiepTheo ()}";
$params2 = array();
$get_lich2=$data->query( $store_name2, $params2);
$excute2= new SQLServerResult($get_lich2);
$sophieukhotieptheo= $excute2->get_as_array();

if(strlen($sophieukhotieptheo[0]['SoPhieuKhoTiep'])==1)
	$chuoimoi='0000'.$sophieukhotieptheo[0]['SoPhieuKhoTiep'];
	else if(strlen($sophieukhotieptheo[0]['SoPhieuKhoTiep'])==2)
		$chuoimoi='000'.$sophieukhotieptheo[0]['SoPhieuKhoTiep'];
		else if(strlen($sophieukhotieptheo[0]['SoPhieuKhoTiep'])==3)
			$chuoimoi='00'.$sophieukhotieptheo[0]['SoPhieuKhoTiep'];
			else if(strlen($sophieukhotieptheo[0]['SoPhieuKhoTiep'])==4)
				$chuoimoi='0'.$sophieukhotieptheo[0]['SoPhieuKhoTiep'];
					else if(strlen($sophieukhotieptheo[0]['SoPhieuKhoTiep'])==5)
						$chuoimoi=$sophieukhotieptheo[0]['SoPhieuKhoTiep'];

				
?>
<input type="hidden" id="thanhtientralai1" value="">
<input type="hidden" id="thanhtienvon1" value="">
<input type="hidden" id="daluu" value="0">
<input type="hidden" id="id_xuatkhochitiet_daluu" value="">
<input type="hidden" id="daduyet" value="0">
<div id="dialog-loi" title="Thông báo" style="display:none;">
  <p><span class="ui-icon ui-icon-alert" style="float:left; margin:0 7px 20px 0;"></span>Yêu cầu phải có ít nhất một thuốc trả lại!</p>
</div>
<div id="dialog-confirm" title="Thông báo" style="display:none;">
  <p><span class="ui-icon ui-icon-alert" style="float:left; margin:0 7px 20px 0;"></span>Khi duyệt phiếu số lượng tồn của thuốc sẽ được cập nhật lại, bạn có chắc muốn duyệt phiếu không?</p>
</div>
<div class="top">
	<div class="t_left">
    	<div class="t_title">
       <strong> Thông tin chung</strong>
        </div>
        <div class="t_body">
          <table width="100%" border="0" cellpadding="0" cellspacing="0" >
            <tr>
              <td style="padding-top:1px;"><label for="sophieu">Số phiếu*:</label></td>
              <td style="padding-top:1px;">
              <input style="text-align:center" type="text" name="sophieu" id="sophieu" value='<?='PN_'.$chuoimoi; ?>' readonly/>
              
              <label for="ngaylapphieu">Ngày lập phiếu:</label>
              <input type="text" name="ngaylapphieu" id="ngaylapphieu" /></td>
              <td style="padding-top:1px;"><label for="nguoilapphieu">Người lập phiếu*:</label></td>
              <td style="padding-top:1px; width:130px;">
              <span class="custom-combobox">
                    <input id="nguoilapphieu" name="nguoilapphieu"  type="text" width="60">
            </span> 
            <input id="nguoilapphieu1"  name="nguoilapphieu1" type="text" lang='luu' style="display:none" ></td>
            </tr>
            <tr>
              <td width="115"><label for="lydohoantrathuoc">Lý do hoàn trả thuốc:</label></td>
              <td rowspan="2">
                <textarea name="lydohoantrathuoc" id="lydohoantrathuoc" cols="47" rows="1"></textarea>
              </td>
              <td ><label for="nguoinhapkho">Người nhập kho*:</label></td>
              <td>
               <span class="custom-combobox">
                    <input id="nguoinhapkho" name="nguoinhapkho"  type="text" width="60" >
            </span> 
            <input id="nguoinhapkho1"  name="nguoinhapkho1" type="text" lang='luu' style="display:none" ></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
          </table>
        
        </div>
    </div>
    <div class="t_right">
    	<div class="p_title">
        <strong>Thông tin bệnh nhân</strong>
        </div>
        <div class="p_body">
          <table width="100%" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td height="23" colspan="2"><span class="ht" style="text-transform:uppercase; font-weight:bold;"><?=$thongtinbn[0]['MaBenhNhan'] ?> - <?=$thongtinbn[0]['HoTenBN'] ?> </span></td>
              <td colspan="2"><?=$thongtinbn[0]['Gioi'] ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong><?=$thongtinbn[0]['DiaChi'] ?></strong></td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td width="60"><label for="phieuxuat">Phiếu xuất:</label></td>
              <td width="140"><input style="text-align:center" type="text" name="phieuxuat" id="phieuxuat" value="BL_<?=$thongtinbn[0]['MaPhieu'] ?>" readonly /></td>
              <td width="75">Bác sỹ kê toa:</td>
              <td>&nbsp;BS. <?=$thongtinbn[0]['NickName'] ?></td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td><label for="ngayxuat">Ngày xuất:</label></td>
              <td>
              <input  style="text-align:center; margin-top:1px" type="text" name="ngayxuat" id="ngayxuat"  value="<?=$thongtinbn[0]['NgayXuat']->format($_SESSION["config_system"]["ngaythang"]) ?>" readonly /></td>
              <td><label for="ngayketoa">Ngày kê toa:</label></td>
              <td>
              <input style="text-align:center" type="text" name="ngayketoa" id="ngayketoa"  value="<?php
			  if($thongtinbn[0]['NgayKeDon']){
				 echo  $thongtinbn[0]['NgayKeDon']->format($_SESSION["config_system"]["ngaythang"]);
				  } ?>" readonly /></td>
              <td>&nbsp;</td>
            </tr>
          </table>
        
        </div>
    </div>
</div>
<div class="bottom">
	<div class="n_b_body">
    <table id="rowed33" ></table>
        <div id="prowed3">
        	<div class="sodong">
                <input type="text" style="margin-left: 32px; margin-top: 4px; width: 190px;background:#4CA109;border:1px solid #327E04; color: #FFFFFF;font-weight: bold; text-align:right;" disabled="" readonly value="Số dòng = 0" class="disable" id="sodong">
                <input type="text" style="margin-left: 298px; margin-top: 4px; width: 80px;background:#4CA109;border:1px solid #327E04; color: #FFFFFF;font-weight: bold; text-align:right;" disabled="" readonly value="0" class="disable" id="thanhtienban">
                <input type="text" style="margin-left: 217px; margin-top: 4px; width: 80px;background:#4CA109;border:1px solid #327E04; color: #FFFFFF;font-weight: bold; text-align:right;" disabled="" readonly value="0" class="disable" id="thanhtienvon">
                <input type="text" style="margin-left: 133px; margin-top: 4px; width: 80px;background:#4CA109;border:1px solid #327E04; color: #FFFFFF;font-weight: bold; text-align:right;" disabled="" readonly value="0" class="disable" id="thanhtientralai">
       	 </div>
        </div> 
    </div>
    <div class="b_control" style="text-align:right">
    <input style="margin-top: 7px;" type="checkbox" id="tratoanbo" name="tratoanbo" /> <label for="tratoanbo"> Trả lại toàn bộ đơn thuốc</label>
    <button style="margin-left:10px;" id="luu">Lưu</button>
    <button id="duyet">Duyệt</button>
    <button id="sua" style="display:none">Sửa</button>
    </div>
</div>
</body>
</html>
<script type="text/javascript">
    jQuery(document).ready(function() {
	window.khoatralai=true;
	window.idnhapkho='';
		create_grid();
		jwerty.key('tab', false);
		jwerty.key('shift+tab', false);			  
		jwerty.key('shift+enter', false);
		$("#luu,#duyet,#sua").button();
		$("#rowed33").setGridWidth($(".n_b_body").width()-2);
		$("#rowed33").setGridHeight($(".n_b_body").height()-90);
		
		$('#sua').button( {disabled:true});
		
		create_combobox('#nguoilapphieu', '#nguoilapphieu1', ".nhan_vien", "#nhan_vien", create_nhanvien, 400, 300, 'Người lập phiếu', 'data_nhanvien',<?=$_SESSION['user']['id_user']?>);
		create_combobox('#nguoinhapkho', '#nguoinhapkho1', ".nhan_vien1", "#nhan_vien1", create_bacsi, 400, 300, 'Người nhập kho', 'data_bacsi',<?=$_SESSION['user']['id_user']?>);
		create_combobox_disable("#nguoilapphieu");
		create_combobox_disable("#nguoinhapkho");
			
		$("#ngaylapphieu").datepicker({ dateFormat: $.cookie("ngayJqueryUi")}).datepicker("setDate", new Date());
		$("#rowed33").jqGrid('setGridParam',{url:'resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_chitietthuocdaxuat_phieuhoantra&idxuatkho='+<?=$_GET['idxuatkho'];?>,datatype:'json'}).trigger('reloadGrid');
		$( "#dialog-loi" ).dialog({
		  resizable: false,
		  autoOpen: false,
		 // height:140,
		  modal: true,
		  buttons: {
			"OK": function() {
			  $( this ).dialog( "close" );
			}
		  }
		});
		
		$( "#dialog-confirm" ).dialog({
		  resizable: false,
		  autoOpen: false,
		  width:330,
		 // height:140,
		  modal: true,
		  buttons: {
			"OK": function() {
			  $( this ).dialog( "close" );
			}
		  }
		});
		
		$('#tratoanbo').click(function(){
			var tmp1 = $("#rowed33").jqGrid('getDataIDs'); 
			if($('#tratoanbo').is( ":checked" )){
				var d=0;
				var ttvon=0;
				var tttralai=0;
				for(var i=0;i<tmp1.length;i++){
					d=i+1;
					
					var rowData = jQuery('#rowed33').getRowData(tmp1[i]);
				
					$('#'+tmp1[i]+'_SoLuongTraLai').val(rowData['SoLuongThucXuat']);
					jQuery('#rowed33').jqGrid("setCell", tmp1[i], "ThanhTienVon", parseInt($('#'+tmp1[i]+'_SoLuongTraLai').val())*parseInt(rowData['DonGiaVon']), "");
					if(window.khoatralai==true){
						jQuery('#rowed33').jqGrid("setCell", tmp1[i], "ThanhTienTraLai", parseInt($('#'+tmp1[i]+'_SoLuongTraLai').val())*parseInt(rowData['DonGiaTraLai']), "");
						var rowData2 = jQuery('#rowed33').getRowData(tmp1[i]);
						var n_thanhtientralai=rowData2['ThanhTienTraLai'];
					}else{
						$('#'+tmp1[i]+'_ThanhTienTraLai').val( parseInt($('#'+tmp1[i]+'_SoLuongTraLai').val())*parseInt($('#'+tmp1[i]+'_DonGiaTraLai').val()));
						var n_thanhtientralai=$('#'+tmp1[i]+'_ThanhTienTraLai').val();
						}
					
					//alert(n_thanhtientralai);
					ttvon=ttvon+parseInt(rowData2['ThanhTienVon']);
					tttralai=tttralai+parseInt(n_thanhtientralai);
				}
				
				$("#thanhtienvon").val(formatMoney(ttvon));
				$("#thanhtienvon1").val(ttvon);
				$("#thanhtientralai").val(formatMoney(tttralai));
				$("#thanhtientralai1").val(tttralai);
				//alert(tttralai);
			}else{
				for(var i=0;i<tmp1.length;i++){
					d=i+1;
					var rowData = jQuery('#rowed33').getRowData(tmp1[i]);
					$('#'+tmp1[i]+'_SoLuongTraLai').val(0);
					jQuery('#rowed33').jqGrid("setCell", tmp1[i], "ThanhTienVon",0, "");
					if(window.khoatralai==true){
						jQuery('#rowed33').jqGrid("setCell", tmp1[i], "ThanhTienTraLai",0, "");
					}else{
						$('#'+tmp1[i]+'_ThanhTienTraLai').val(0);
					}
					var rowData2 = jQuery('#rowed33').getRowData(tmp1[i]);
					//var rowData2 = jQuery('#rowed33').getRowData(tmp1[i]);
				}	
				$("#thanhtienvon").val(0);
				$("#thanhtientralai").val(0);
			}
			
		});
	$("#luu").click(function(){
		ids = $('#rowed33').jqGrid('getDataIDs');
		var ktra=0;
		for(i=0;i<ids.length;i++){
			if($("#"+ids[i]+"_SoLuongTraLai").val()>0)
				ktra=1;
		}
		if(ktra==1){
			for(i=0;i<ids.length;i++){
				jQuery("#rowed33").jqGrid('saveRow',ids[i]);
			}
			var gridData = jQuery("#rowed33").getRowData();
			var postData = JSON.stringify(gridData);
			postData='{"id":'+postData+'}';
			if(postData=="")
				postData="undefined";
			postData=$.parseJSON(postData);
			$.post('resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=controller&nguoilapphieu='+$("#nguoilapphieu1").val()+'&nguoinhapkho='+$("#nguoinhapkho1").val()+'&lydo='+$("#lydohoantrathuoc").val()+'&thanhtientralai='+$("#thanhtientralai1").val()+'&thanhtienvon='+$("#thanhtienvon1").val()+'&ghichu='+$("#lydohoantrathuoc").val()+'&iddonthuoc='+<?=$thongtinbn[0]['ID_DonThuoc']?>+'&ngaylapphieu='+$("#ngaylapphieu").val()+'&daluu='+$("#daluu").val()+'&idnhapkho='+window.idnhapkho+'&hanhdong=luu&hienmaloi=a',postData).done(function(data){
			window.idnhapkho=data;
			//alert(window.idnhapkho);
			for(i=0;i<ids.length;i++){
				jQuery("#rowed33").jqGrid('editRow',ids[i]);
				if($("#"+ids[i]+"_SoLuongTraLai").val()>0){
					$("#rowed33").jqGrid('setCell',ids[i],'Luu',1);
				}
			}
			//$("#rowed33").jqGrid('setGridParam',{url:'resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_chitietthuocdaxuat_phieuhoantra&idxuatkho='+<?=$_GET['idxuatkho'];?>+'&idnhapkho='+window.idnhapkho,datatype:'json'}).trigger('reloadGrid');
			tooltip_message("Đã lưu");
			$('#luu').button( {disabled:true});
			$("#daluu").val(1);
			})//$.post
		
		}else{
			$( "#dialog-loi" ).dialog('open');
			}
		
		});// end luu
		
	$("#duyet").click(function(){
		$("#tratoanbo").prop('disable',true);
		ids = $('#rowed33').jqGrid('getDataIDs');
		var ktra2=0;
		for(i=0;i<ids.length;i++){
			if($("#"+ids[i]+"_SoLuongTraLai").val()>0)
				ktra2=1;
		}
		if(ktra2==1){
			//$( "#dialog-confirm" ).dialog('open');
			for(i=0;i<ids.length;i++){
				jQuery("#rowed33").jqGrid('saveRow',ids[i]);
				
			}
			
			var gridData = jQuery("#rowed33").getRowData();
			var postData = JSON.stringify(gridData);
			postData='{"id":'+postData+'}';
			if(postData=="")
				postData="undefined";
			postData=$.parseJSON(postData);
			$.post('resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=controller&nguoilapphieu='+$("#nguoilapphieu1").val()+'&nguoinhapkho='+$("#nguoinhapkho1").val()+'&lydo='+$("#lydohoantrathuoc").val()+'&thanhtientralai='+$("#thanhtientralai1").val()+'&thanhtienvon='+$("#thanhtienvon1").val()+'&ghichu='+$("#lydohoantrathuoc").val()+'&iddonthuoc='+<?=$thongtinbn[0]['ID_DonThuoc']?>+'&ngaylapphieu='+$("#ngaylapphieu").val()+'&daluu='+$("#daluu").val()+'&idnhapkho='+window.idnhapkho+'&hanhdong=duyet&hienmaloi=a',postData).done(function(data){
			for(i=0;i<ids.length;i++){
				jQuery("#rowed33").jqGrid('editRow',ids[i]);
				if($("#"+ids[i]+"_SoLuongTraLai").val()>0){
					$("#rowed33").jqGrid('setCell',ids[i],'Luu',1);
				}
			}
			//$("#rowed33").jqGrid('setGridParam',{url:'resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_chitietthuocdaxuat_phieuhoantra&idxuatkho='+<?=$_GET['idxuatkho'];?>,datatype:'json'}).trigger('reloadGrid');
			tooltip_message("Đã lưu");
			$("#daduyet").val(1);
			$('#luu').button( {disabled:true});
			$('#duyet').button( {disabled:true});
			$('#sua').button( {disabled:false});

			})//$.post
			
		}else{
			$( "#dialog-loi" ).dialog('open');
			}
		
		});
		$("#sua").click(function(){
			ids = $('#rowed33').jqGrid('getDataIDs');
			for(var i=0;i<ids.length;i++){
			jQuery("#rowed33").jqGrid('editRow',ids[i]);
			}
			$('#duyet').button( {disabled:false});
			$('#sua').button( {disabled:true});
		});
		
	});// end ready
	
function create_grid(){
		if(window.khoatralai==true){
				mydata=[];
				$("#rowed33").jqGrid({
					data: mydata,
					datatype: "local",
					colNames: ['Thuốc / vật tư','Số lô','SL thực xuất','Đơn giá bán','Thành tiền bán','Số lượng trả lại','Đơn giá vốn','Thành tiền vốn','Đơn giá trả lại','Thành tiền trả lại','Ngày sản xuất','Ngày hết hạn','ID đơn thuốc','Lưu','SoLoHeThong','SoLoNhaSanXuat','ID_DonThuocCT'],
					colModel: [
						{name: 'ThuocVatTu', index: 'ThuocVatTu', search: false, width: "20%", editable: false, align: 'left', hidden: false},
						{name: 'SoLo', index: 'SoLo', search: false, width: "8%", editable: false, align: 'left', hidden: false},
						{name: 'SoLuongThucXuat', index: 'SoLuongThucXuat', search: false, width: "10%", editable: false, align: 'right', hidden: false},
						{name: 'DonGiaBan', index: 'DonGiaBan', search: false, width: "10%", editable: false, align: 'right', hidden: false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: "", defaultValue: '0'}},
						{name: 'ThanhTienBan', index: 'ThanhTienBan', search: false, width: "10%", editable: false, align: 'right', hidden: false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: "", defaultValue: '0'}},
						{name: 'SoLuongTraLai', index: 'SoLuongTraLai', search: false, width: "10%", editable: true, align: 'center', hidden: false,classes:'tralai',editoptions: { dataEvents: [{ type: 'change', fn: function(e) {
							var row = $(e.target).closest('tr.jqgrow');
							var rowId = row.attr('id');
							//alert('#'+rowId+'_SoLuongTraLai');
							var soluong=$('#'+rowId+'_SoLuongTraLai').val();
							if(soluong=='')
								$('#'+rowId+'_SoLuongTraLai').val(0);
							var rowData = jQuery('#rowed33').getRowData(rowId);
							if(parseInt(soluong)>parseInt(rowData['SoLuongThucXuat']))
								$('#'+rowId+'_SoLuongTraLai').val(rowData['SoLuongThucXuat']);
							var dongiatralai=rowData['DonGiaTraLai'];
							var soluong2=$('#'+rowId+'_SoLuongTraLai').val();
							
							jQuery('#rowed33').jqGrid("setCell", rowId, "ThanhTienTraLai", parseInt(soluong2)*parseInt(dongiatralai), "");
							//$('#'+rowId+'_ThanhTienTraLai').val(parseInt(soluong2)*parseInt(dongiatralai));
							jQuery('#rowed33').jqGrid("setCell", rowId, "ThanhTienVon", parseInt(soluong2)*parseInt(rowData['DonGiaVon']), "");
							
							var ttvon=0;
							var tttralai=0;
							var tmp1 = $("#rowed33").jqGrid('getDataIDs'); 
							for(var i=0;i<tmp1.length;i++){
								var rowData = jQuery('#rowed33').getRowData(tmp1[i]);
								//var n_thanhtientralai=$('#'+tmp1[i]+'_ThanhTienTraLai').val();
								var n_thanhtientralai=rowData['ThanhTienTraLai'];
								ttvon=ttvon+parseInt(rowData['ThanhTienVon']);
								tttralai=tttralai+parseInt(n_thanhtientralai);
							}
							$("#thanhtienvon").val(formatMoney(ttvon));
							$("#thanhtienvon1").val(ttvon);
							$("#thanhtientralai").val(formatMoney(tttralai));
							$("#thanhtientralai1").val(tttralai);
						}
						}]}
		
							},
						{name: 'DonGiaVon', index: 'DonGiaVon', search: false, width: "10%", editable: false, align: 'right', hidden: false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: "", defaultValue: '0'}},
						{name: 'ThanhTienVon', index: 'ThanhTienVon', search: false, width: "10%", editable: false, align: 'right', hidden: false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: "", defaultValue: '0'}},
						{name: 'DonGiaTraLai', index: 'DonGiaTraLai', search: false, width: "10%", editable: false, align: 'center', hidden: false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: "", defaultValue: '0'},classes:'tralai',editoptions: { dataEvents: [{ type: 'change', fn: function(e) {
							var row = $(e.target).closest('tr.jqgrow');
							var rowId = row.attr('id');
							
							var rowData = jQuery('#rowed33').getRowData(rowId);
							var dongiatralai= rowData['DonGiaTraLai'];
							if(dongiatralai=='')
								//$('#'+rowId+'_DonGiaTraLai').val(rowData['DonGiaBan']);
								jQuery('#rowed33').jqGrid("setCell", rowId, "DonGiaTraLai", parseInt(soluong)*parseInt(dongiatralai), "");
							var soluong=$('#'+rowId+'_SoLuongTraLai').val();
							jQuery('#rowed33').jqGrid("setCell", rowId, "ThanhTienTraLai", parseInt(soluong)*parseInt(dongiatralai), "");
							//$('#'+rowId+'_ThanhTienTraLai').val( parseInt(soluong)*parseInt(dongiatralai));
							var ttvon=0;
							var tttralai=0;
							var tmp1 = $("#rowed33").jqGrid('getDataIDs'); 
							for(var i=0;i<tmp1.length;i++){
								var rowData22 = jQuery('#rowed33').getRowData(tmp1[i]);
								//var n_thanhtientralai=$('#'+tmp1[i]+'_ThanhTienTraLai').val();
								var n_thanhtientralai=rowData22['ThanhTienTraLai'];
								tttralai=tttralai+parseInt(n_thanhtientralai);
							}
							$("#thanhtientralai").val(formatMoney(tttralai));
							$("#thanhtientralai1").val(tttralai);
						}
						}]}},
						
						{name: 'ThanhTienTraLai', index: 'ThanhTienTraLai', search: false, width: "12%", editable: false, align: 'right', hidden: false,classes:'tralai',editoptions: { dataEvents: [{ type: 'change', fn: function(e) {
							var row = $(e.target).closest('tr.jqgrow');
							var rowId = row.attr('id');
							var ttvon=0;
							var tttralai=0;
							if($('#'+rowId+'_ThanhTienTraLai').val()==''){
								$('#'+rowId+'_ThanhTienTraLai').val(0);
								}
							var tmp1 = $("#rowed33").jqGrid('getDataIDs'); 
							for(var i=0;i<tmp1.length;i++){
								//var n_thanhtientralai=$('#'+tmp1[i]+'_ThanhTienTraLai').val();
								var rowData22 = jQuery('#rowed33').getRowData(tmp1[i]);
								var n_thanhtientralai=rowData22['ThanhTienTraLai'];
								tttralai=tttralai+parseInt(n_thanhtientralai);
							}
							$("#thanhtientralai").val(formatMoney(tttralai));
							$("#thanhtientralai1").val(tttralai);
						}
						}]},formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: "", defaultValue: '0'}},
						{name:'NgaySanXuat', index:'NgaySanXuat', search: false, width: "10%",align: 'center',editable: true, hidden: true, edittype: 'text',editoptions: {
							size: 10, maxlengh: 10,
							dataInit: function(element) {
							$(element).datepicker({dateFormat:  $.cookie("ngayJqueryUi")})
							  }
							},classes:'editngay'
						  },
						  {name:'NgayHetHan', index:'NgayHetHan', search: false, width: "10%",align: 'center',editable: true, edittype: 'text',editoptions: {
							size: 10, maxlengh: 10,
							dataInit: function(element) {
							$(element).datepicker({dateFormat:  $.cookie("ngayJqueryUi")})
							  }
							},classes:'editngay'
						  },
						   {name: 'ID_DonThuoc', index: 'ID_DonThuoc', search: false, width: "10%", editable: false, align: 'left', hidden: true},
						   {name: 'Luu', index: 'Luu', search: false, width: "10%", editable: false, align: 'left', hidden: true},
						   {name: 'SoLoHeThong', index: 'SoLoHeThong', search: false, width: "10%", editable: false, align: 'left', hidden: true},
						   {name: 'SoLoNhaSanXuat', index: 'SoLoNhaSanXuat', search: false, width: "10%", editable: false, align: 'left', hidden: true},
						    {name: 'ID_DonThuocCT', index: 'ID_DonThuocCT', search: false, width: "10%", editable: false, align: 'left', hidden: true},
						
					],
					loadonce: true,
					scroll: false,
					modal: true,
					rownumbers: true,
					shrinkToFit: true,
					grid_save_option: "",
					cmTemplate: {sortable: false},
					rowNum: 10000000,
					pginput:false,
					pgbuttons:false,
					rowList: [],
					pager: '#prowed3',
					sortname: 'ThoiGianVaoKham',
					height: 100,
					width: 100,
					viewrecords: true,
					ignoreCase: true,
					sortorder: "desc",
					afterShowForm : function (formid) {
						xuongdong(formid);
						lendong(formid);
					},
				   ondblClickRow: function(rowId) {
					//  jQuery('#rowed33').jqGrid('saveRow',rowId, false);
				
					},
				   onSelectRow: function(id) {
						//alert(id);
					var rowData = jQuery('#rowed33').getRowData(id);
		
					},
					loadComplete: function(data) {
						//grid_filter_enter("#rowed33");
						var tmp1 = $("#rowed33").jqGrid('getDataIDs'); 
						$("#rowed33").jqGrid("setSelection",tmp1[0], true);
						$('#sodongbn').val(tmp1.length);
						var ttban=0;
						var ttvon=0;
						var tttralai=0;
						for(var i=0;i<tmp1.length;i++){
							if($("#daduyet").val()==1){
								jQuery('#rowed33').saveRow(tmp1[i], true);
								}else{
									jQuery('#rowed33').editRow(tmp1[i], true); 
								}
							var rowData = jQuery('#rowed33').getRowData(tmp1[i]);
							
							var n_thanhtientralai=rowData['ThanhTienTraLai'];
						//	alert(n_thanhtientralai);
							ttban=ttban+parseInt(rowData['ThanhTienBan']);
							ttvon=ttvon+parseInt(rowData['ThanhTienVon']);
							tttralai=tttralai+parseInt(n_thanhtientralai);
							
							}
						$("#thanhtienban").val(formatMoney(ttban));
						$("#sodong").val('Số dòng ='+tmp1.length);
						$("#thanhtienvon").val(formatMoney(ttvon));
						$("#thanhtienvon1").val(ttvon);
						$("#thanhtientralai").val(formatMoney(tttralai));
						$("#thanhtientralai1").val(tttralai);
						
						n_enter(0);
					},
					caption: " Thông tin chi tiết"
					
				});
		$("#rowed33").jqGrid('navGrid', "#prowed3", {add: false, edit: false, keys : false, del: false, search: false, refresh: false,prmView: false, closeAfterEdit: true, clearAfterAdd: true, navkeys: [true, 38, 40], closeOnEscape: true});
		setTimeout(function(){
			//n_enter(0);
		},1000)
			
			}else{
				
					mydata=[];
					$("#rowed33").jqGrid({
						data: mydata,
						datatype: "local",
						colNames: ['Thuốc / vật tư','Số lô','SL thực xuất','Đơn giá bán','Thành tiền bán','Số lượng trả lại','Đơn giá vốn','Thành tiền vốn','Đơn giá trả lại','Thành tiền trả lại','Ngày sản xuất','Ngày hết hạn','ID đơn thuốc','Lưu','SoLoHeThong','SoLoNhaSanXuat','ID_DonThuocCT'],
						colModel: [
							{name: 'ThuocVatTu', index: 'ThuocVatTu', search: false, width: "20%", editable: false, align: 'left', hidden: false},
							{name: 'SoLo', index: 'SoLo', search: false, width: "8%", editable: false, align: 'left', hidden: false},
							{name: 'SoLuongThucXuat', index: 'SoLuongThucXuat', search: false, width: "10%", editable: false, align: 'right', hidden: false},
							{name: 'DonGiaBan', index: 'DonGiaBan', search: false, width: "10%", editable: false, align: 'right', hidden: false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: "", defaultValue: '0'}},
							{name: 'ThanhTienBan', index: 'ThanhTienBan', search: false, width: "10%", editable: false, align: 'right', hidden: false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: "", defaultValue: '0'}},
							{name: 'SoLuongTraLai', index: 'SoLuongTraLai', search: false, width: "10%", editable: true, align: 'center', hidden: false,classes:'tralai',editoptions: { dataEvents: [{ type: 'change', fn: function(e) {
								var row = $(e.target).closest('tr.jqgrow');
								var rowId = row.attr('id');
								//alert('#'+rowId+'_SoLuongTraLai');
								var soluong=$('#'+rowId+'_SoLuongTraLai').val();
								if(soluong=='')
									$('#'+rowId+'_SoLuongTraLai').val(0);
								var rowData = jQuery('#rowed33').getRowData(rowId);
								if(parseInt(soluong)>parseInt(rowData['SoLuongThucXuat']))
									$('#'+rowId+'_SoLuongTraLai').val(rowData['SoLuongThucXuat']);
								var dongiatralai=$('#'+rowId+'_DonGiaTraLai').val();
								var soluong2=$('#'+rowId+'_SoLuongTraLai').val();
								
								//jQuery('#rowed33').jqGrid("setCell", rowId, "ThanhTienTraLai", parseInt(soluong2)*parseInt(dongiatralai), "");
								$('#'+rowId+'_ThanhTienTraLai').val(parseInt(soluong2)*parseInt(dongiatralai));
								jQuery('#rowed33').jqGrid("setCell", rowId, "ThanhTienVon", parseInt(soluong2)*parseInt(rowData['DonGiaVon']), "");
								
								var ttvon=0;
								var tttralai=0;
								var tmp1 = $("#rowed33").jqGrid('getDataIDs'); 
								for(var i=0;i<tmp1.length;i++){
									var rowData = jQuery('#rowed33').getRowData(tmp1[i]);
									var n_thanhtientralai=$('#'+tmp1[i]+'_ThanhTienTraLai').val();
									ttvon=ttvon+parseInt(rowData['ThanhTienVon']);
									tttralai=tttralai+parseInt(n_thanhtientralai);
								}
								$("#thanhtienvon").val(formatMoney(ttvon));
								$("#thanhtienvon1").val(ttvon);
								$("#thanhtientralai").val(formatMoney(tttralai));
								$("#thanhtientralai1").val(tttralai);
							}
							}]}
			
								},
							{name: 'DonGiaVon', index: 'DonGiaVon', search: false, width: "10%", editable: false, align: 'right', hidden: false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: "", defaultValue: '0'}},
							{name: 'ThanhTienVon', index: 'ThanhTienVon', search: false, width: "10%", editable: false, align: 'right', hidden: false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: "", defaultValue: '0'}},
							{name: 'DonGiaTraLai', index: 'DonGiaTraLai', search: false, width: "10%", editable: true, align: 'center', hidden: false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: "", defaultValue: '0'},classes:'tralai',editoptions: { dataEvents: [{ type: 'change', fn: function(e) {
								var row = $(e.target).closest('tr.jqgrow');
								var rowId = row.attr('id');
								var dongiatralai=$('#'+rowId+'_DonGiaTraLai').val();
								var rowData = jQuery('#rowed33').getRowData(rowId);
								if(dongiatralai=='')
									$('#'+rowId+'_DonGiaTraLai').val(rowData['DonGiaBan']);
								var soluong=$('#'+rowId+'_SoLuongTraLai').val();
								//jQuery('#rowed33').jqGrid("setCell", rowId, "ThanhTienTraLai", parseInt(soluong)*parseInt(dongiatralai), "");
								$('#'+rowId+'_ThanhTienTraLai').val( parseInt(soluong)*parseInt(dongiatralai));
								var ttvon=0;
								var tttralai=0;
								var tmp1 = $("#rowed33").jqGrid('getDataIDs'); 
								for(var i=0;i<tmp1.length;i++){
									var n_thanhtientralai=$('#'+tmp1[i]+'_ThanhTienTraLai').val();
									tttralai=tttralai+parseInt(n_thanhtientralai);
								}
								$("#thanhtientralai").val(formatMoney(tttralai));
								$("#thanhtientralai1").val(tttralai);
							}
							}]}},
							
							{name: 'ThanhTienTraLai', index: 'ThanhTienTraLai', search: false, width: "12%", editable: true, align: 'right', hidden: false,classes:'tralai',editoptions: { dataEvents: [{ type: 'change', fn: function(e) {
								var row = $(e.target).closest('tr.jqgrow');
								var rowId = row.attr('id');
								var ttvon=0;
								var tttralai=0;
								if($('#'+rowId+'_ThanhTienTraLai').val()==''){
									$('#'+rowId+'_ThanhTienTraLai').val(0);
									}
								var tmp1 = $("#rowed33").jqGrid('getDataIDs'); 
								for(var i=0;i<tmp1.length;i++){
									var n_thanhtientralai=$('#'+tmp1[i]+'_ThanhTienTraLai').val();
									tttralai=tttralai+parseInt(n_thanhtientralai);
								}
								$("#thanhtientralai").val(formatMoney(tttralai));
								$("#thanhtientralai1").val(tttralai);
							}
							}]},formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: "", defaultValue: '0'}},
							{name:'NgaySanXuat', index:'NgaySanXuat', search: false, width: "10%",align: 'center',editable: true, hidden: true, edittype: 'text',editoptions: {
								size: 10, maxlengh: 10,
								dataInit: function(element) {
								$(element).datepicker({dateFormat:  $.cookie("ngayJqueryUi")})
								  }
								},classes:'editngay'
							  },
							  {name:'NgayHetHan', index:'NgayHetHan', search: false, width: "10%",align: 'center',editable: true, edittype: 'text',editoptions: {
								size: 10, maxlengh: 10,
								dataInit: function(element) {
								$(element).datepicker({dateFormat:  $.cookie("ngayJqueryUi")})
								  }
								},classes:'editngay'
							  },
							   {name: 'ID_DonThuoc', index: 'ID_DonThuoc', search: false, width: "10%", editable: false, align: 'left', hidden: true},
							   {name: 'Luu', index: 'Luu', search: false, width: "10%", editable: false, align: 'left', hidden: true},
							   {name: 'SoLoHeThong', index: 'SoLoHeThong', search: false, width: "10%", editable: false, align: 'left', hidden: true},
							   {name: 'SoLoNhaSanXuat', index: 'SoLoNhaSanXuat', search: false, width: "10%", editable: false, align: 'left', hidden: true},
							   {name: 'ID_DonThuocCT', index: 'ID_DonThuocCT', search: false, width: "10%", editable: false, align: 'left', hidden: true},
							
						],
						loadonce: true,
						scroll: false,
						modal: true,
						rownumbers: true,
						shrinkToFit: true,
						grid_save_option: "",
						cmTemplate: {sortable: false},
						rowNum: 10000000,
						pginput:false,
						pgbuttons:false,
						rowList: [],
						pager: '#prowed3',
						sortname: 'ThoiGianVaoKham',
						height: 100,
						width: 100,
						viewrecords: true,
						ignoreCase: true,
						sortorder: "desc",
						afterShowForm : function (formid) {
							xuongdong(formid);
							lendong(formid);
						},
					   ondblClickRow: function(rowId) {
						//  jQuery('#rowed33').jqGrid('saveRow',rowId, false);
					
						},
					   onSelectRow: function(id) {
							//alert(id);
						var rowData = jQuery('#rowed33').getRowData(id);
			
						},
						loadComplete: function(data) {
							//grid_filter_enter("#rowed33");
							var tmp1 = $("#rowed33").jqGrid('getDataIDs'); 
							$("#rowed33").jqGrid("setSelection",tmp1[0], true);
							$('#sodongbn').val(tmp1.length);
							var ttban=0;
							var ttvon=0;
							var tttralai=0;
							for(var i=0;i<tmp1.length;i++){
								if($("#daduyet").val()==1){
									jQuery('#rowed33').saveRow(tmp1[i], true);
									}else{
										jQuery('#rowed33').editRow(tmp1[i], true); 
									}
								var rowData = jQuery('#rowed33').getRowData(tmp1[i]);
								
								var n_thanhtientralai=$('#'+tmp1[i]+'_ThanhTienTraLai').val();
							//	alert(n_thanhtientralai);
								ttban=ttban+parseInt(rowData['ThanhTienBan']);
								ttvon=ttvon+parseInt(rowData['ThanhTienVon']);
								tttralai=tttralai+parseInt(n_thanhtientralai);
								
								}
							$("#thanhtienban").val(formatMoney(ttban));
							$("#sodong").val('Số dòng ='+tmp1.length);
							$("#thanhtienvon").val(formatMoney(ttvon));
							$("#thanhtienvon1").val(ttvon);
							$("#thanhtientralai").val(formatMoney(tttralai));
							$("#thanhtientralai1").val(tttralai);
							
							n_enter(0);
							
						},
						caption: " Thông tin chi tiết"
						
					});
			$("#rowed33").jqGrid('navGrid', "#prowed3", {add: false, edit: false, keys : false, del: false, search: false, refresh: false,prmView: false, closeAfterEdit: true, clearAfterAdd: true, navkeys: [true, 38, 40], closeOnEscape: true});
			setTimeout(function(){
				//$("#tratoanbo").click();
				//alert();
			},1000)
				}

    }
function create_nhanvien(elem, datalocal) {
        datalocal = jQuery.parseJSON(datalocal);
        $(elem).jqGrid({
            datastr: datalocal,
            datatype: "jsonstring",
            colNames: ['Tên', 'Họ và tên', 'Bộ phận'],
            colModel: [
                {name: 'nickname', index: 'nickname', hidden: false},
                {name: 'hovaten', index: 'hovaten', hidden: false},
                {name: 'Bophan', index: 'Bophan', hidden: true},
            ],
            hidegrid: false,
            gridview: true,
            loadonce: true,
            scroll: false,
            modal: true,
            rowNum: 200000,
            rowList: [],
            height: 300,
            width: 470,
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
            
				window.nhanvien1_complete=1;


            },
        });
        $(elem).jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});
        $(elem).jqGrid('bindKeys', {});
    }
    function create_bacsi(elem, datalocal) {
        datalocal = jQuery.parseJSON(datalocal);
        $(elem).jqGrid({
            datastr: datalocal,
            datatype: "jsonstring",
            colNames: ['Tên', 'Họ và tên'],
            colModel: [
                {name: 'nickname', index: 'nickname', hidden: false},
                {name: 'hovaten', index: 'hovaten', hidden: false},
                
            ],
            hidegrid: false,
            gridview: true,
            loadonce: true,
            scroll: false,
            modal: true,
            rowNum: 200000,
            rowList: [],
            height: 300,
            width: 470,
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
            window.nhanvien2_complete=1;



            },
        });
        $(elem).jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});
        $(elem).jqGrid('bindKeys', {});
    }

function formatMoney(num) {
    var p = num.toFixed(2).split(".");
    return p[0].split("").reverse().reduce(function(acc, num, i, orig) {
        return  num + (i && !(i % 3) ? "," : "") + acc;
    }, "");
}
function n_enter(tam){
	var tmp1 = $("#rowed33").jqGrid('getDataIDs');
	var chuoi='';
	if(window.khoatralai==true){
		for(var i=0;i<tmp1.length;i++){
			if(i<tmp1.length-1){	
				chuoi=chuoi+"#"+tmp1[i]+"_SoLuongTraLai,";
			}else{
				chuoi=chuoi+"#"+tmp1[i]+"_SoLuongTraLai,";
				chuoi=chuoi+"#tratoanbo,";
				chuoi=chuoi+"#luu,";
				chuoi=chuoi+"#duyet";
			}
		}	
	}else{
			for(var i=0;i<tmp1.length;i++){
				if(i<tmp1.length-1){	
					chuoi=chuoi+"#"+tmp1[i]+"_SoLuongTraLai,";
					chuoi=chuoi+"#"+tmp1[i]+"_DonGiaTraLai,";
					chuoi=chuoi+"#"+tmp1[i]+"_ThanhTienTraLai,";
				}else{
					chuoi=chuoi+"#"+tmp1[i]+"_SoLuongTraLai,";
					chuoi=chuoi+"#"+tmp1[i]+"_DonGiaTraLai,";
					chuoi=chuoi+"#"+tmp1[i]+"_ThanhTienTraLai,";
					chuoi=chuoi+"#tratoanbo,";
					chuoi=chuoi+"#luu,";
					chuoi=chuoi+"#duyet";
				}
			}	

		}
	window.n_chuoi=chuoi;
	//(chuoi);
	var chuoinew=chuoi.split(",");
	var d=0;
	for(var i=0;i<chuoinew.length;i++){
		d=i+1;
		$(chuoinew[i]).attr('tabindex',d);
	}
	$(chuoinew[0]).focus();
		 $(chuoi).bind("keydown", function(e) {	
			if ($(chuoi).is(":focus")){	
				   if (jwerty.is("enter",e)||jwerty.is("tab",e)) { 
						var tabindex = $(e.target).attr('tabindex');
						isdisable('next',tabindex,e)
						return false;
					
				 }else if(jwerty.is("shift+tab",e)){
					 var tabindex = $(e.target).attr('tabindex');
					 isdisable('pre',tabindex,e)
					 return false;
				 }
			 }
		})
	 
}
function isdisable(tam,tabindex,e){
		  if(tam=='next'){
			  tabindex++;
		  }else{
			  tabindex--;
		  }
			$('[tabindex=' +  tabindex + ']').focus();
			return false;
  }
</script>
