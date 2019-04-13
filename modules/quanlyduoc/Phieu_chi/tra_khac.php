<div id="dialog-form" style="display:none">
	<table width="100%" border="1">
  <tr>
    <td>Mã phiếu:* </td>
    <td>&nbsp;<label class="sophieu" style="margin-left:4px!important"></label></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Nhà cung cấp:* </td>
    <td>&nbsp;
    	<input id="nhacc" name="nhacc"  type="text" style="" >
		<input id="nhacc1"  name="nhacc1" type="text" lang='luu' style="display:none" > 
    </td>
    <td>Người nhận tiền:*</td>
    <td>&nbsp;
    	<input type="text" style=" " value=""  name="nguoint" id='nguoint'>
    </td>
  </tr>
  <tr>
    <td>Số tiền:* </td>
    <td>&nbsp;
    	<input type="text" style=" " value=""  name="sotien" id='sotien'>
    </td>
    <td>Địa chỉ:</td>
   <td>&nbsp;
    	<input type="text" style=" " value=""  name="diachi" id='diachi'>
    </td>
  </tr>
  <tr>
    <td>Người chi:* </td>
    <td>&nbsp;
    	<input id="nguoichi" name="nguoichi"  type="text" style="" >
		<input id="nguoichi1"  name="nguoichi1" type="text" lang='luu' style="display:none" > 
    </td>
    <td>Lý do chi:</td>
    <td rowspan="2"><textarea name="dando" cols="20" id="dando" style="  height:100%"></textarea></td>
  </tr>
  <tr>
    <td>Ngày lập:* </td>
    <td>&nbsp;
    	<input id="ngaylap" name="ngaylap"  type="text" style="" value="<?php echo date($_SESSION["config_system"]["ngaythang"])?>">
		<input id="ngaylap1"  name="ngaylap1" type="text" lang='luu' style="display:none" > 
		
    </td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="3" align="right">
      <input type="submit" name="phieuxxuatthuoc" id="phieuxxuatthuoc" value="Lưu[Ctrl-S]">
      <input type="submit" name="phieuxxuatthuoc" id="phieuxxuatthuoc" value="Chỉnh sửa">
      <input type="submit" name="phieuxxuatthuoc" id="phieuxxuatthuoc" value="In hóa đơn">    </td>
  </tr>
</table>
</div>
<script type="text/javascript">
    jQuery(document).ready(function() {
        temp = jQuery(window).height()+490 ;
        $("#panel_main").css("height", temp + "px");
        $("#panel_main").fadeIn(1000);
        $('#hnay').button();
		$('#xem').button();
		$('#xemtc').button();})
	</script>
