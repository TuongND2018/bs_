<?php

$data= new SQLServer;
$store_name="{call Gd2_demsophieu_getby_machucnang (?)}";
$params = array('FormatSoPhieuChiDuoc');
$get_lich=$data->query( $store_name, $params);
$excute= new SQLServerResult($get_lich);
$tam= $excute->get_as_array();

?>
<style type="text/css">
#rowed3 td{
word-wrap:normal!important;
  white-space:nowrap;
  }
#tabs .ui-tabs-nav li {
    font-size: 90%;
    margin-top: 0.1em;  
}#tabs .ui-tabs-nav li.ui-tabs-selected, #tabs .ui-tabs-nav li.ui-state-active {
  background: none repeat scroll 0 0 #F5F3E5;
    border-top:solid  #D8CEBE 1px;
    border-left:solid  #D8CEBE 1px;
    border-right:solid  #D8CEBE 1px;;
    box-shadow: none;
    font-size: 90%;
    margin-top: 0.1em;  
}#tabs-1,#tabs-2{
    background:#F5F3E5!important;
    border:solid  #CCC 1px!important;
    border-radius:3px;
    
}#tabs .ui-tabs-nav li.ui-tabs-selected, #tabs .ui-tabs-nav li.ui-state-active {
z-index: 1;
}#tabs-1,#tabs-2{
    padding:0!important;
}#tabs-1-left-bottom{
    border-radius: 6px!important;
    box-shadow: 0 0 10px #A0A0A0;
    margin-top:6px;
    margin-left:5px;
     border: 1px solid #919191;
}
    #rowed3 td,#rowed4 td,#rowed5 td{

        font-size:13px!important;	   
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
        font-size:13px;
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
	.form_row tr td input,.form_row tr td textarea{
		font-size:15px!important;
		text-align: left!important;
	
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
        width:40px!important;
        text-decoration:underline;

        /*box-shadow:0px 0px 2px 1px #a0a0a0;*/
    }
    input[type=button].custom_button:focus{	 
        outline:  none;
    } 
    :focus {outline:none;}
    ::-moz-focus-inner {border:0;} 
</style>


<body> 
	<div id="dialog-daduyet" title="Thông Báo" style="display:none">
  <p><span class="ui-icon ui-icon-alert" style="float:left; margin:0 7px 20px 0;"></span>Phiếu chi này đã duyệt, bạn có muốn bỏ duyệt không?</p>
</div>
	
	<div id="dialog-form" class="form_row" style="display:none" title="Thông Tin Phiếu Chi Dược">
	<table width="100%" border="0">
  <tr>
    <td align="right" valign="top">Mã phiếu:* </td>
    <td align="left" valign="top">&nbsp;<label class="sophieu" style="margin-left:4px!important"></label></td>
    <td>&nbsp;</td>
    <td align="center">&nbsp;</td>
  </tr>
  <tr>
    <td align="right" valign="top" id="nhacc_lb">Nhà cung cấp:* </td>
    <td align="left" valign="top">&nbsp;
		<input id="nhacc" name="nhacc" style=" width:172px; height:auto; font-size:13px"  placeholder="--Chọn mẫu--">
        <input id="nhacc1"  name="nhacc1"  lang='luu' type="text"  style="display:none" >
    	
    </td>
    <td align="right" valign="top" id="nguoint_lb">Người nhận tiền:* </td>
    <td  align="center" valign="top">&nbsp;
    	<input type="text" style=" width:200px; height:auto; font-size:30px" lang='luu' value=""  name="nguoint" id='nguoint'>
    </td>
  </tr>
  <tr>
    <td align="right" valign="top" id="sotien_lb">Số tiền:* </td>
    <td align="right!important" valign="top">&nbsp;
    	<input type="text" align="right!important" style=" width:200px; height:auto; font-size:30px;text-align: right!important;" lang='luu' value="1"  name="sotien" id='sotien'>
		
	</td>
    <td align="right" valign="top">Địa chỉ:</td>
   <td align="center" valign="top">&nbsp;
    	<input type="text" style=" width:200px; height:auto; font-size:30px" lang='luu' value=""  name="diachi" id='diachi'>
    </td>
  </tr>
  <tr>
    <td align="right" valign="top" id="nguoichi_lb">Người chi:* </td>
    <td align="left" valign="top">&nbsp;
		<input id="nguoichi" name="nguoichi"  style=" width:172px; height:auto; font-size:13px"  placeholder="--Chọn mẫu--">
        <input id="nguoichi1"  name="nguoichi1" lang='luu' type="text"  style="display:none" >
    </td>
    <td align="right" valign="top">Lý do chi:</td>
    <td rowspan="2" align="center" valign="top" height="100%">&nbsp;&nbsp;<textarea lang='luu' name="dando" cols="20" id="dando" style=" width:200px; height:100%; font-size:30px"></textarea></td>
  </tr>
  <tr>
    <td align="right" valign="top" id="ngaylap_lb">Ngày lập:* </td>
    <td align="center" valign="top">&nbsp;
    	<input id="ngaylap" name="ngaylap" lang='luu' type="text" style=" width:200px; height:auto; font-size:30px" >
		<input id="ngaylap1"  name="ngaylap1" type="text"  style="display:none" > 
    </td>
    <td valign="top">&nbsp;</td>
  </tr>
 
</table>
	
</div>

<div id="dialog-form2" class="form_row" style="display:none" title="Thông Tin Phiếu Chi Dược">
		<table width="100%" border="0">
  <tr>
    <td align="right" valign="top">Mã phiếu:* </td>
    <td align="left" valign="top">&nbsp;<label class="sophieud2" style="margin-left:4px!important"></label></td>
    <td>&nbsp;</td>
    <td align="center"><label class="thongbao2" style="margin-left:4px!important"></label></td>
  </tr>
  <tr>
	
    <td align="right" valign="top" id="nhaccd2_lb">Nhà cung cấp:* </td>
    <td align="left" valign="top">&nbsp;
		<input id="nhaccd2" name="nhaccd2" style=" width:172px; height:auto; font-size:13px"  placeholder="--Chọn mẫu--">
        <input id="nhaccd21"  name="nhaccd21"  lang='luu2' type="text"  style="display:none" >
    	
    </td>
    <td align="right" valign="top" id="nguointd2_lb">Người nhận tiền:* </td>
    <td  align="center" valign="top">&nbsp;
    	<input type="text" style=" width:200px; height:auto; font-size:30px" lang='luu2' value=""  name="nguointd2" id='nguointd2'>
    </td>
  </tr>
  <tr>
    <td align="right" valign="top"  id="sotiend2_lb">Trả Cho:* </td>
    <td align="right!important" valign="top">&nbsp;
    	
		<input id="sotiend2" name="sotiend2"  style=" width:172px; height:auto; font-size:13px"  placeholder="--Chọn mẫu--">
        <input id="sotiend21"  name="sotiend21" lang='luu2' type="text"  style="display:none" >
	</td>
    <td align="right" valign="top">Địa chỉ:</td>
   <td align="center" valign="top">&nbsp;
    	<input type="text" style=" width:200px; height:auto; font-size:30px" lang='luu2' value=""  name="diachid2" id='diachid2'>
    </td>
  </tr>
  <tr>
    <td align="right" valign="top" id="nguoichid2_lb">Người chi:* </td>
    <td align="left" valign="top">&nbsp;
		<input id="nguoichid2" name="nguoichid2"  style=" width:172px; height:auto; font-size:13px"  placeholder="--Chọn mẫu--">
        <input id="nguoichid21"  name="nguoichid21" lang='luu2' type="text"  style="display:none" >
    </td>
    <td align="right" valign="top">Lý do chi:</td>
    <td rowspan="4" align="center" valign="top" height="100%">&nbsp;&nbsp;<textarea lang='luu2' name="dandod2" cols="20" id="dandod2" style=" width:200px; height:100%; font-size:30px"></textarea></td>
  </tr>
  <tr>
    <td align="right" valign="top" id="tiend2_lb">Số tiền:*</td>
    
    <td align="right!important" valign="top">&nbsp;
    	<input type="text" align="right!important" style=" width:200px; height:auto; font-size:30px;text-align: right!important;" lang='luu2'  name="tiend2" id='tiend2'>

    </td>
    <td rowspan="2" valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td align="right" valign="top" id="ngaylapd2_lb">Ngày lập:* </td>
    <td align="center" valign="top">&nbsp;
    	<input id="ngaylapd2" name="ngaylapd2" lang='luu2' type="text" style=" width:200px; height:auto; font-size:30px" >
		<input id="ngaylapd21"  name="ngaylapd21" type="text"  style="display:none" > 
    </td>
  </tr>
 
</table>
	
</div>
   
    <div id="panel_main" style="margin-top:10px;" >  
        <div id="top_main">  
			<div class="form_row">
				<span>
					
					<label for="from_day" style="width:40px">Từ ngày</label>
					<input type="text"  value="<?php echo date($_SESSION["config_system"]["ngaythang"])?>" style="width:109px" name="from_day" id='from_day'>
					<label for="to_day" style="width:49px"> Đến ngày</label>
					<input type="text"  value="<?php echo date($_SESSION["config_system"]["ngaythang"])?>" style="width:109px" name="to_day" id='to_day'>
<!--                            <input type="hidden" name="from_day_mask" id='from_day_mask'>
					<input type="hidden" name="to_day_mask" id='to_day_mask'>-->
					<button type="button" id="xem">Xem</button>
					<button type="button" id="excel">Xuất Excel</button>
				</span>
           </div> 
        </div>
        <div > 
        <table id="rowed3" ></table>
         <table width="100%" border="0">
  <tr>
    <td>&nbsp;</td>
    <td align="right" width="80px"><a id="trakhac" type="button" value="">Trả khác</a></td>
    <td align="right" width="80px"><a id="tam_ung" type="button"value="">Tạm ứng</a></td>
    <td align="right" width="140px"><a id="tra_cho_phieu_nhap" type="button" value="">Trả cho phiếu nhập</a></td>
  </tr>
</table>


			</div>
        </div>
    </div>
    
</body>
</html> 

<script type="text/javascript">
    jQuery(document).ready(function() {
	window.ktcsua=0;
	button_dialog();
	window.scrollPositiontop=0;
	create_combobox('#sotiend2', '#sotiend21', ".data_combo_sotien", "#data_combo_sotien1", create_sotien, 200, 300, 'Số tiền','',0);
	   $( "#dialog-daduyet" ).dialog({
	   autoOpen:false,
					  resizable: false,
					  height:140,
					  width:400,
					  modal: true,
					
					  buttons: {
						"OK": function() {
							
							window.scrollPositiontop  = jQuery("#rowed3").closest(".ui-jqgrid-bdiv").scrollTop();
							$.post('resource.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=daduyet&hienmaloi=3&id='+id_tam+'&ktduyet='+daduyet);
							$( this ).dialog( "close" );
							
							$("#rowed3").jqGrid('setGridParam',{datatype: 'json'}).trigger('reloadGrid');
						},
						Cancel: function() {
						window.scrollPositiontop  = jQuery("#rowed3").closest(".ui-jqgrid-bdiv").scrollTop();
						  $( this ).dialog( "close" );
						  $("#rowed3").jqGrid('setGridParam',{datatype: 'json'}).trigger('reloadGrid');
						}
					  }
					});
	window.ktra=0;
	window.dduyet=0;
	window.ktsoclick=0;
	window.maphieunhapkho='';
	window.kiemtra=0;
	window.kttrong2=0;
	window.ktpost=0;
	$.cookie("in_status", "print_preview"); 
	/* $("#xemin").click(function(e){	
		dialog_report("Xem trước khi in",90,90,"u78787878975f","resource.php?module=report&view=<?=$modules?>&action=phieu_chi&header=top&id_kham="+id_kham+"&type=report&id_form=10",'KhamPhuKhoa');
		$(".frame_u78787878975f").css("width","793px");
	}); */
	/*$( "#sotien" ).keyup(function(e){		
	 var tam=$( "#sotien" ).val().split(',').join('');
		tam=parseInt(tam).formatMoney(0, ',', '0')
			$("#sotien").val(tam)
	}); */
	$( "#sotien" ).keyup(function(e){  
				 var tam=$( "#sotien" ).val().split('.').join('');
				  tam=parseInt(tam).formatMoney(0, ',', '.')
				   $("#sotien").val(tam)
			});
	checkbox_search('gs_DaDuyet','#rowed3')
        temp = jQuery(window).height()+490 ;
        $("#panel_main").css("height", temp + "px");
        $("#panel_main").fadeIn(1000);
		
        $('#trakhac').button();
		$('#tam_ung').button();
		$('#tra_cho_phieu_nhap').button();
		window.kttrong=0;
		xem_click();
		window.ktmaphieu="";
         window._tungay='';
         window._denngay='';
      
       
     	create_grid();
        resize_control();
		create_combobox('#nhacc', '#nhacc1', ".data_combo_nhacc", "#data_combo_nhacc", create_nhacungcap, 500, 400, 'Nhà cung cấp', 'data_nhacungcap',0);
		create_combobox('#nguoichi', '#nguoichi1', ".data_combo_nguoichi", "#data_combo_nguoichi", create_nguoichi, 200, 300, 'Nhà cung cấp', 'data_nguoichi',0);
		create_combobox('#nhaccd2', '#nhaccd21', ".data_combo_nhaccd2", "#data_combo_nhaccd2", create_nhacungcap, 500, 400, 'Nhà cung cấp', 'data_nhacungcap',0);
		create_combobox('#nguoichid2', '#nguoichid21', ".data_combo_nguoichid2", "#data_combo_nguoichid2", create_nguoichi, 200, 300, 'Nhà cung cấp', 'data_nguoichi',0);
		//----begin focus-----------
		jwerty.key('tab', false);
		jwerty.key('shift+tab', false);			  
		jwerty.key('shift+enter', false);
		
		 $( "#nhacc" ).keyup(function(e){
		//alert(e.keyCode);
			if (jwerty.is("tab",e)||(jwerty.is("enter",e))) {			
				$( "#sotien" ).focus();
				$( "#sotien" ).select();			
			}
		});
		$( "#sotien" ).keydown(function(e){
				$("#sotien").data('focus', true);
				if (jwerty.is("tab",e)||(jwerty.is("enter",e))) {
					//$("#sanphukhoa").data('focus', true);
					
					$( "#nguoichi" ).focus();
					$( "#nguoichi" ).select();
					return false;
				} else if(jwerty.is("shift+tab",e)){
					$("#nhacc").focus();
					$("#nhacc").select();
				}				
		});
		$( "#nguoichi" ).keyup(function(e){
			
		 		if (jwerty.is("tab",e)||(jwerty.is("enter",e))) {
					if($("#sotien").data('focus')){
						$("#sotien").data('focus', false);
					}
					else{
					$( "#ngaylap" ).focus();
					$( "#ngaylap" ).select();
					return false;
				}
				} else if(jwerty.is("shift+tab",e)){
					if($("#ngaylap").data('focus')){
						$("#ngaylap").data('focus', false);
					}else{
					$( "#sotien" ).focus();
					$( "#sotien" ).select();
					}
				}			
		});
		$( "#ngaylap" ).keydown(function(e){
				$("#ngaylap").data('focus', true);
				if (jwerty.is("tab",e)||(jwerty.is("enter",e))) {
					//$("#sanphukhoa").data('focus', true);
					$( "#nguoint" ).focus();
					$( "#nguoint" ).select();
					$( "#ngaylap" ).datepicker( "hide" );
					return false;
				} else if(jwerty.is("shift+tab",e)){
					$("#nguoichi").focus();
					$("#nguoichi").select();
				}				
		});
		$( "#nguoint" ).keydown(function(e){
				$("#nguoint").data('focus', true);
				if (jwerty.is("tab",e)||(jwerty.is("enter",e))) {
					//$("#sanphukhoa").data('focus', true);
					$( "#diachi" ).focus();
					$( "#diachi" ).select();
					return false;
				} else if(jwerty.is("shift+tab",e)){
					$("#ngaylap").focus();
					$("#ngaylap").select();
				}				
		});
		$( "#diachi" ).keydown(function(e){
				$("#diachi").data('focus', true);
				if (jwerty.is("tab",e)||(jwerty.is("enter",e))) {
					//$("#sanphukhoa").data('focus', true);
					$( "#dando" ).focus();
					$( "#dando" ).select();
					return false;
				} else if(jwerty.is("shift+tab",e)){
					$("#nguoichi").focus();
					$("#nguoichi").select();
				}				
		});
		$( "#dando" ).keydown(function(e){
			if (jwerty.is("tab",e)||(jwerty.is("enter",e))) {					
					$('#dialog-form').closest('.ui-dialog').find('.ui-dialog-buttonpane button:eq(0)').focus();				
					return false;
				}
				$("#dando").data('focus', true);
				if(jwerty.is("shift+tab",e)){
					$("#nguoichi").focus();
					$("#nguoichi").select();
				}
				if (e.shiftKey && e.keyCode == 13) {
					$(this).val($(this).val() + "\n");
					return;

				  }
		});
		//--------end focus-----------
		//----begin focus dialog 2-----------
		
		
		 $( "#nhaccd2" ).keyup(function(e){
		//alert(e.keyCode);
			if (jwerty.is("tab",e)||(jwerty.is("enter",e))) {			
				$( "#sotiend2" ).focus();
				$( "#sotiend2" ).select();			
			}
		});
		$( "#sotiend2" ).keyup(function(e){
				$("#sotiend2").data('focus', true);
				if (jwerty.is("tab",e)||(jwerty.is("enter",e))) {
					$( "#nguoichid2" ).focus();
					$( "#nguoichid2" ).select();
					return false;
				} else if(jwerty.is("shift+tab",e)){
					$("#nhaccd2").focus();
					$("#nhaccd2").select();
				}				
		});
		$( "#nguoichid2" ).keyup (function(e){
			
		 		if (jwerty.is("tab",e)||(jwerty.is("enter",e))) {
					if($("#sotien").data('focus')){
						
						$("#sotien").data('focus', false);
				}else{
					$( "#tiend2" ).focus();
					$( "#tiend2" ).select();
					return false;
				}
				} else if(jwerty.is("shift+tab",e)){
					if($("#sotiend2").data('focus')){
						$("#sotiend2").data('focus', false);
					}else{
					$( "#sotiend2" ).focus();
					$( "#sotiend2" ).select();
					}
				}			
		});
		$( "#tiend2" ).keydown(function(e){
				$("#tiend2").data('focus', true);
				if (jwerty.is("tab",e)||(jwerty.is("enter",e))) {
					//$("#sanphukhoa").data('focus', true);
					$( "#ngaylapd2" ).focus();
					$( "#ngaylapd2" ).select();
					
					return false;
				} else if(jwerty.is("shift+tab",e)){
					$("#nguoichid2").focus();
					$("#nguoichid2").select();
				}				
		});
		$( "#ngaylapd2" ).keydown(function(e){
				$("#ngaylapd2").data('focus', true);
				if (jwerty.is("tab",e)||(jwerty.is("enter",e))) {
					//$("#sanphukhoa").data('focus', true);
					$( "#nguointd2" ).focus();
					$( "#nguointd2" ).select();
					$( "#ngaylapd2" ).datepicker( "hide" );
					return false;
				} else if(jwerty.is("shift+tab",e)){
					$("#tiend2").focus();
					$("#tiend2").select();
				}				
		});
		$( "#nguointd2" ).keydown(function(e){
				$("#nguointd2").data('focus', true);
				if (jwerty.is("tab",e)||(jwerty.is("enter",e))) {
					//$("#sanphukhoa").data('focus', true);
					$( "#diachid2" ).focus();
					$( "#diachid2" ).select();
					return false;
				} else if(jwerty.is("shift+tab",e)){
					$("#ngaylapd2").focus();
					$("#ngaylapd2").select();
				}				
		});
		$( "#diachid2" ).keydown(function(e){
				$("#diachid2").data('focus', true);
				if (jwerty.is("tab",e)||(jwerty.is("enter",e))) {
					//$("#sanphukhoa").data('focus', true);
					$( "#dandod2" ).focus();
					$( "#dandod2" ).select();
					return false;
				} else if(jwerty.is("shift+tab",e)){
					$("#ngaylapd2").focus();
					$("#ngaylapd2").select();
				}				
		});
		$( "#dandod2" ).keydown(function(e){
			if (jwerty.is("tab",e)||(jwerty.is("enter",e))) {					
					$('#dialog-form2').closest('.ui-dialog').find('.ui-dialog-buttonpane button:eq(0)').focus();				
					return false;
				}
				$("#dandod2").data('focus', true);
				if(jwerty.is("shift+tab",e)){
					$("#diachid2").focus();
					$("#diachid2").select();
				}	
					if (e.shiftKey && e.keyCode == 13) {
					$(this).val($(this).val() + "\n");
					return;

				  }
		});
		//--------end focus-----------
	
	 function kiemtranull() {
	  
		 var check_null = new Array();
				window.kiemtratk=true;
				id_focus='';
				maloi='';
                check_null["nhacc"]=$.trim($("#nhacc").val());
                check_null["sotien"]=$.trim($("#sotien").val());
                check_null["nguoichi"]=$.trim($("#nguoichi").val());
                check_null["ngaylap"]=$.trim($("#ngaylap").val());
                check_null["nguoint"]=$.trim($("#nguoint").val());
				//alert(check_null.length);
                 for(var key in check_null){
								 
                    if(check_null[key]==""){
                      $("#"+key).css("background-color","#F4FA58");
                      window.kiemtratk=false;
					  
					  if(id_focus==''){
						id_focus=key;
						maloi=' không được trống'
					  }
					
                    }
					
                    else{$("#"+key).css("background-color","white");
                    }
					
					if(key=='sotien'){
						if(($.trim($("#sotien").val()))<=0&&(kiemtratk==true)){	
							 window.kiemtratk=false;						
							 $("#sotien").css("background-color","#F4FA58");
							   if(id_focus==''){
							 id_focus='sotien'
							 maloi= ' không được nhỏ hơn 0'
							 }
						}					
					}	
					if((key=='nguoint')&&(kiemtratk==true)){
					
						
						luu_tamung_trkhac();
						
					}else if((key=='nguoint')&&(kiemtratk==false)){
					  html_tam=$('#'+id_focus+'_lb').html()
					  html_tam=html_tam.slice(0,html_tam.length-3);
					  
					    tooltip_message(html_tam+''+maloi);
						
						$('#'+id_focus).focus();
						$('#'+id_focus).select();
					}
					
					
				};
	 }
	 function kiemtranull2() {
		//-------begin focus null--------------
		/* 	window.ktnull=0;
			id_focus='';
			if($("#nhaccd2").val()==""){
					$("#nhaccd2").css("background-color","#F4FA58");
					window.kttrong=1;
					id_focus='#nhaccd2';
			}else{
				$("#nhaccd2").css("background-color","white");
				
			}
			if($("#sotiend2").val()==""){
					$("#sotiend2").css("background-color","#F4FA58");
					window.kttrong=1;
					if(id_focus==''){
						id_focus='#sotiend2';
					}
			}else{
				$("#sotiend2").css("background-color","white");
				
			}
			if($("#nguoichid2").val()==""){
					$("#nguoichid2").css("background-color","#F4FA58");
					window.kttrong=1;
					if(id_focus==''){
						id_focus='#nguoichid2';
					}
			}else{
				$("#nguoichid2").css("background-color","white");
				
			}
			if($("#ngaylapd2").val()==""){
					$("#ngaylapd2").css("background-color","#F4FA58");
					window.kttrong=1;
					if(id_focus==''){
						id_focus='#ngaylapd2';
					}
			}else{
				$("#ngaylapd2").css("background-color","white");
				
			}
			if($("#nguointd2").val()==""){
					$("#nguointd2").css("background-color","#F4FA58");
					window.kttrong=1;
					if(id_focus==''){
						id_focus='#nguointd2';
					}
			}else{
				$("#nguointd2").css("background-color","white");
				
			}
			$(id_focus).focus();
			$(id_focus).select(); */
			
			    var check_null = new Array();
				window.kiemtrapn=true;
				id_focus='';
				maloi='';
                check_null["nhaccd2"]=$.trim($("#nhaccd2").val());
                check_null["sotiend2"]=$.trim($("#sotiend2").val());
                check_null["nguoichid2"]=$.trim($("#nguoichid2").val());
                check_null["tiend2"]=$.trim($("#tiend2").val());
                check_null["ngaylapd2"]=$.trim($("#ngaylapd2").val());
				check_null["nguointd2"]=$.trim($("#nguointd2").val());
				
				//alert(check_null.length);
                 for(var key in check_null){
								 
                    if(check_null[key]==""){
                      $("#"+key).css("background-color","#F4FA58");
                      window.kiemtrapn=false;
					  
					  if(id_focus==''){
						id_focus=key;
						maloi=' không được trống'
					  }
					
                    }
					
                    else{$("#"+key).css("background-color","white");
                    }
					
					if(key=='sotiend2'){
						if(($.trim($("#sotiend2").val()))<=0&&(kiemtrapn==true)){	
							 window.kiemtrapn=false;						
							 $("#sotiend2").css("background-color","#F4FA58");
							   if(id_focus==''){
							 id_focus='sotiend2'
							 maloi= ' không được nhỏ hơn 0'
							 }
						}					
					}	
					if((key=='nguointd2')&&(kiemtrapn==true)){
					
						
						luu_tcpnhap();
						
					}else if((key=='nguointd2')&&(kiemtrapn==false)){
					  html_tam=$('#'+id_focus+'_lb').html()
					  html_tam=html_tam.slice(0,html_tam.length-3);
					  
					    tooltip_message(html_tam+''+maloi);
						
						$('#'+id_focus).focus();
						$('#'+id_focus).select();
					}
					
				};
		//=====end focus null------------------	
	 }
		$( "#dialog-form" ).dialog({
      autoOpen: false,
      height: 'auto',
      width: 'auto',
      modal: false,	
	   open: function() {
			if(kiemtra==0){
				button_dialog("chuachinhsua");
				dialogungkhac("an");
			}
			else if(kiemtra==1){
				button_dialog("moi_inserttk");
				dialogungkhac("hien");
			}
						//button_dialog("chuachinhsua");
						//dialogungkhac("an");
      },
	
       close: function() {
		
        $('input').css("background-color","white");
      },	
      buttons: {
			"Lưu[Ctrl_S]": function() {
			kiemtranull();
			
		},
		"Chỉnh sửa": function() {
					button_dialog("daclick_chinhsua");
					dialogungkhac("hien");
					window.kiemtra=0;
		},
		"In hóa đơn": function() {
			$.cookie("in_status", "print_preview");
			dialog_report("Xem trước khi in",90,90,"u78787878975f","resource.php?module=report&view=<?=$modules?>&action=phieu_chi&type=report&header=left&id_form=10&id_thutrano="+idthutrano,'InPhieuChi');
			$( this ).dialog( "close" );
        }
      },
    });
function luu_tcpnhap(){
if(kiemtra==0){
	
	if(window.ktmaphieu!=""){

				phancach = "";
				i = 0;
				dataToSend = '{';
				$('.form_row').find(':input[type=text],textarea,input[type=hidden]').each(function() {
			
					if ($(this).attr("lang") == "luu2") {
					  //alert(this.id);
					  if(this.id=='sotien'){
					  
					  dataToSend += phancach + '"'+ this.name + '":' + JSON.stringify(this.value.split(',').join(''))   ;
					  }else{
				
						dataToSend += phancach + '"'+ this.name + '":' + JSON.stringify(this.value)   ;
						}
					  phancach = ",";
					}
					

				});
				dataToSend += phancach + '"id_thutrano":"' + idthutrano + '"';
				
				dataToSend += '}';
				//alert(dataToSend);
				dataToSend = jQuery.parseJSON(dataToSend);
			   //alertObject(dataToSend); 
			  // alert(ktmaphieu);
				 $.post('resource.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=updatecpn&maphieunhapkho='+ktmaphieu+'&hienmaloi=3',dataToSend)
				
				.done(function( gridData ) {
											ktpost=1;
											window.idthutrano=$.trim(gridData);
										 //button_dialog("choin_chosua");
										})
										.fail(function() {
										alert( "error" );
										});
										tooltip_message("Đã thực hiện");
										
										$("#rowed3").jqGrid('setGridParam',{datatype: 'json'}).trigger('reloadGrid');
										$("#rowed3").jqGrid('setGridParam',{datatype: 'json'}).trigger('reloadGrid');
										//alertObject($("#rowed3").jqGrid('getGridParam'));
										create_combobox('#sotiend2', '#sotiend21', ".data_combo_sotien", "#data_combo_sotien1", create_sotien, 200, 300, 'Số tiền', 'data_sotientra&ID_NCC='+idncc,0);
				//$( "#dialog-form2" ).dialog( "close" );
				button_dialog("bamluu");
				dialog_phieunhap("an"); 
				
		}

}else{
	if(window.ktmaphieu!=""){
				phancach = "";
				i = 0;
				dataToSend = '{';
				$('.form_row').find(':input[type=text],textarea,input[type=hidden]').each(function() {
			
					if ($(this).attr("lang") == "luu2") {
					  //alert(this.id);
					  if(this.id=='sotien'){
					  
					  dataToSend += phancach + '"'+ this.name + '":' + JSON.stringify(this.value.split(',').join(''))   ;
					  }else{
				
						dataToSend += phancach + '"'+ this.name + '":' + JSON.stringify(this.value)   ;
						}
					  phancach = ",";
					}
					

				});
				//dataToSend += phancach + '"id_thutrano":"' + idthutrano + '"';
				
				dataToSend += '}';
				//alert(dataToSend);
				dataToSend = jQuery.parseJSON(dataToSend);
			   //alertObject(dataToSend); 
			  // alert(ktmaphieu);
				$.post('resource.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=insertcpn&maphieunhapkho='+ktmaphieu+'&hienmaloi=3',dataToSend)
				
				.done(function( gridData ) {
											ktpost=1;
											window.idthutrano=$.trim(gridData);
										// button_dialog("choin_chosua");
										})
										.fail(function() {
										alert( "error" );
										});
										tooltip_message("Đã thực hiện");
										
										$("#rowed3").jqGrid('setGridParam',{datatype: 'json'}).trigger('reloadGrid');
										$("#rowed3").jqGrid('setGridParam',{datatype: 'json'}).trigger('reloadGrid');
										//alertObject($("#rowed3").jqGrid('getGridParam'));
										create_combobox('#sotiend2', '#sotiend21', ".data_combo_sotien", "#data_combo_sotien1", create_sotien, 200, 300, 'Số tiền', 'data_sotientra&ID_NCC='+idncc,0);
				//$( "#dialog-form2" ).dialog( "close" );
				button_dialog("bamluu");
				dialog_phieunhap("an");
	}
}
			 
		//=================
}
function luu_tamung_trkhac(){
		
		if(kiemtra==0){			
		// =============
           
			phancach = "";
				i = 0;
				dataToSend = '{';
				$('.form_row').find(':input[type=text],textarea,input[type=hidden]').each(function() {
			
					if ($(this).attr("lang") == "luu") {
					  //alert(this.id);
					  if(this.id=='sotien'){
					  
					  dataToSend += phancach + '"'+ this.name + '":' + JSON.stringify(this.value.split(',').join(''))   ;
					  }else{
				
						dataToSend += phancach + '"'+ this.name + '":' + JSON.stringify(this.value)   ;
						}
					  phancach = ",";
					}
					

				});
				dataToSend += phancach + '"id_thutrano":"' + idthutrano + '"';
				
				dataToSend += '}';
				//alert(dataToSend);
				dataToSend = jQuery.parseJSON(dataToSend);
			   //alertObject(dataToSend); 
		$.post('resource.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=update&hienmaloi=3',dataToSend)
				 .done(function( gridData ) {	
				
										  //button_dialog("choin_chosua"); 
										})
										.fail(function() {
										alert( "error" );
										});
										tooltip_message("Đã lưu");
										
										$("#rowed3").jqGrid('setGridParam',{datatype: 'json'}).trigger('reloadGrid');
										//alertObject($("#rowed3").jqGrid('getGridParam'));
				//$( "#dialog-form" ).dialog( "close" );
				
			//button_dialog("bamluu");
			//dialogungkhac("an");
			button_dialog("bamluu");
			dialogungkhac("an");
		//=================
		
          }else{
			
			phancach = "";
				i = 0;
				dataToSend = '{';
				$('.form_row').find(':input[type=text],textarea,input[type=hidden]').each(function() {
			
					if ($(this).attr("lang") == "luu") {
					  //alert(this.id);
					  if(this.id=='sotien'){
					  
					  dataToSend += phancach + '"'+ this.name + '":' + JSON.stringify(this.value.split(',').join(''))   ;
					  }else{
				
						dataToSend += phancach + '"'+ this.name + '":' + JSON.stringify(this.value)   ;
						}
					  phancach = ",";
					}
					

				});
				//dataToSend += phancach + '"id_thutrano":"' + idthutrano + '"';
				
				dataToSend += '}';
				//alert(dataToSend);
				dataToSend = jQuery.parseJSON(dataToSend);
			   //alertObject(dataToSend); 
				$.post('resource.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=insert&maphieunhapkho='+maphieunhapkho+'&hienmaloi=3',dataToSend)
				 .done(function( gridData ) {	
										ktpost=1;
										window.idthutrano=$.trim(gridData);
										// button_dialog("choin_chosua");
										$("#rowed3").jqGrid('setGridParam',{datatype: 'json'}).trigger('reloadGrid');
										
										})
										.fail(function() {
										alert( "error" );
										});
										tooltip_message("Đã lưu");
										
										
										//alertObject($("#rowed3").jqGrid('getGridParam'));
			
			//$( "#dialog-form" ).dialog( "close" );
			//button_dialog("bamluu");
			//dialogungkhac("an");	
				button_dialog("bamluu");
			dialogungkhac("an");
		//=================
		
		  }
}	
	$( "#dialog-form2" ).dialog({
      autoOpen: false,
      height: 'auto',
      width: 'auto',
      modal: false,	
	  open: function() {
			if(kiemtra==0){
				button_dialog("chuachinhsua");
				dialog_phieunhap("an");
			}
			else if(kiemtra==1){
				button_dialog("moi_inserttk");
				dialog_phieunhap("hien");
			}
						//button_dialog("chuachinhsua");
						//dialogungkhac("an");
      },
	
       close: function() {
		
        $('input').css("background-color","white");
      },
      buttons: {
	
        "Lưu[Ctrl_S]": function() {
		//alert($kiemtra);
			kiemtranull2();
	} ,
	"Chỉnh sửa": function() {
					button_dialog("daclick_chinhsua");
					dialog_phieunhap("hien");
					window.kiemtra=0;
		},
        
		  "In hóa đơn": function() {
			$.cookie("in_status", "print_preview");
			dialog_report("Xem trước khi in",90,90,"u78787878975f","resource.php?module=report&view=<?=$modules?>&action=phieu_chi&type=report&header=left&id_form=10&id_thutrano="+idthutrano,'InPhieuChi');
			$( this ).dialog( "close" );
        }
      },
    });
		
		 $('#trakhac').click(function(){
			
			ktra=0;
			maphieunhapkho='TraKhac';
			button_dialog("moi");
			 $.post('resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_demsophieu').done(function( gridData ) {
				 $(".sophieu").html('PC_'+(parseInt(gridData)+1));
				 }) 
			
				kiemtra=1;
				//alert($kiemtra);
				$(".sophieu").html('<?='PC_'.($tam[0][0]+1)?>');
				
				$("#sotien").val("");
				//$("#ngaylap").val();
				$("#ngaylap").datepicker({
					showWeek: true,
					defaultDate: "+1w",
					changeMonth: true,
					changeYear: true,
					numberOfMonths: 1,
					 showButtonPanel: true,
					dateFormat: $.cookie("ngayJqueryUi"),  
					maxDate: new Date(<?php echo date("Y")?>, <?php echo date("m")?>-1, <?php echo date("d")?>),
					onClose: function(selectedDate) {
						 $("#to_day").datepicker("option", "minDate", selectedDate);               
					},
					onSelect: function(dat, inst) {
					}
				});
				$.dateEntry.setDefaults({spinnerImage: ''});	
				$("#ngaylap").dateEntry({dateFormat: $.cookie("ngayDateEntry")});
				$("#ngaylap").val("<?php echo date($_SESSION["config_system"]["ngaythang"])?>");
				$("#nguoint").val("");
				$("#dando").val("");
				$("#diachi").val("");
				$("#nhacc").val("");
				$("#nguoichi").val("");
				$( "#dialog-form" ).dialog('open');
				
			}) 
	$('#tam_ung').click(function(){
			
			ktra=0;
			maphieunhapkho='TamUng';
			button_dialog("moi");
			 $.post('resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_demsophieu').done(function( gridData ) {
				 $(".sophieu").html('PC_'+(parseInt(gridData)+1));
				 }) 
			$( "#dialog-form" ).dialog('open')
				kiemtra=1;
				//alert($kiemtra);
				$(".sophieu").html('<?='PC_'.($tam[0][0]+1)?>');
				//var sotien=rowData['SoTien'];
				
				//sotien=parseFloat(sotien).formatMoney(0, '.', ',')
				$("#sotien").val("");
				//$("#ngaylap").val();
				$("#ngaylap").datepicker({
					showWeek: true,
					defaultDate: "+1w",
					changeMonth: true,
					changeYear: true,
					numberOfMonths: 1,
					 showButtonPanel: true,
					dateFormat: $.cookie("ngayJqueryUi"),  
					maxDate: new Date(<?php echo date("Y")?>, <?php echo date("m")?>-1, <?php echo date("d")?>),
					onClose: function(selectedDate) {
						 $("#to_day").datepicker("option", "minDate", selectedDate);               
					},
					onSelect: function(dat, inst) {
					}
				});
				$.dateEntry.setDefaults({spinnerImage: ''});	
				$("#ngaylap").dateEntry({dateFormat: $.cookie("ngayDateEntry")});
				$("#ngaylap").val("<?php echo date($_SESSION["config_system"]["ngaythang"])?>");
				$("#nguoint").val("");
				$("#dando").val("");
				$("#diachi").val("");
				$("#nhacc").val("");
				$("#nguoichi").val("");
				//window.idthutrano=rowId;
				//setval('#nhacc','#nhacc1','#data_combo_nhacc',rowData['Id_NCC']);
				//alert();
				//setval('#nguoichi','#nguoichi1','#data_combo_nguoichi',rowData['Id_NguoiChi']);
			})	
	$('#tra_cho_phieu_nhap').click(function(){
		
		ktmaphieu='';
		button_dialog("moi");
			ktra=1;
				 $.post('resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_demsophieu').done(function( gridData ) {
				 $(".sophieud2").html('PC_'+(parseInt(gridData)+1));
				 }) 
			
			
		
				kiemtra=1;
				//alert($kiemtra);
				$("#tiend2").val("");
				$(".sophieud2").html('<?='PC_'.($tam[0][0]+1)?>');
				$( "#tiend2" ).keyup(function(e){  
					 var tam=$( "#tiend2" ).val().split('.').join('');
					  tam=parseInt(tam).formatMoney(0, ',', '.')
					   $("#tiend2").val(tam)
					 });
				//$("#ngaylap").val();
				$("#ngaylapd2").datepicker({
					showWeek: true,
					defaultDate: "+1w",
					changeMonth: true,
					changeYear: true,
					numberOfMonths: 1,
					 showButtonPanel: true,
					dateFormat: $.cookie("ngayJqueryUi"),  
					maxDate: new Date(<?php echo date("Y")?>, <?php echo date("m")?>-1, <?php echo date("d")?>),
					onClose: function(selectedDate) {
						 $("#to_day").datepicker("option", "minDate", selectedDate);               
					},
					onSelect: function(dat, inst) {
					}
				});
				$.dateEntry.setDefaults({spinnerImage: ''});	
				$("#ngaylapd2").dateEntry({dateFormat: $.cookie("ngayDateEntry")});
				$("#ngaylapd2").val("<?php echo date($_SESSION["config_system"]["ngaythang"])?>");
				$("#nguointd2").val("");
				$("#dandod2").val("");
				$("#diachid2").val("");
				$("#sotiend2").val("");
				$("#nhaccd2").val("");
				$("#nguoichid2").val("");
				//window.idthutrano=rowId;
				//setval('#nhacc','#nhacc1','#data_combo_nhacc',rowData['Id_NCC']);
				//alert();
				//setval('#nguoichi','#nguoichi1','#data_combo_nguoichi',rowData['Id_NguoiChi']);
				$( "#dialog-form2" ).dialog('open');
			})
	$("#xemchitiet").change(function(event) {
   
    });
	
	$("#xemchitiet2").change(function(event) {
		//alert();
      if($("#xemchitiet2").is(':checked')==true){
      
        $("#rowed3").jqGrid('setGridParam',{groupingView: { groupCollapse : false} }).trigger('reloadGrid');

      }else{
      
        $("#rowed3").jqGrid('setGridParam',{groupingView: { groupCollapse : true} }).trigger('reloadGrid');
      }
    });
        $(window).resize(function() {
            temp = jQuery(window).height() - 50;
            $("#panel_main").css("height", temp + "px");
            resize_control();
        })
$("#from_day").datepicker({
            showWeek: true,
            defaultDate: "+1w",
            changeMonth: true,
            changeYear: true,
            numberOfMonths: 1,
             showButtonPanel: true,
            dateFormat: $.cookie("ngayJqueryUi"),  
			maxDate: new Date(<?php echo date("Y")?>, <?php echo date("m")?>-1, <?php echo date("d")?>),
            onClose: function(selectedDate) {
            	 $("#to_day").datepicker("option", "minDate", selectedDate);               
            },
            onSelect: function(dat, inst) {
            }
        });
        $("#to_day").datepicker({
            showWeek: true,
            defaultDate: "+1w",
            changeMonth: true,
            changeYear: true,
            numberOfMonths: 1,
            showButtonPanel: true,
            gotoCurrent:true,
            dateFormat: $.cookie("ngayJqueryUi"),   
            minDate: new Date(<?php echo date("Y")?>, <?php echo date("m")?>-1, <?php echo date("d")?>),       
            onClose: function(selectedDate) {
                $("#from_day").datepicker("option", "maxDate", selectedDate);
            },
            onSelect: function(dat, inst) {
            }
        });
         $.dateEntry.setDefaults({spinnerImage: ''});	
		 $("#from_day, #to_day").dateEntry({dateFormat: $.cookie("ngayDateEntry")});
		
		phanquyen();	
		$('#xem').button();
		$('#excel').button();
		$('#excel').click(function(){
			window.open('resource.php?module=report&view=<?=$modules?>&action=xuat_excel_phieuchi&type=excel&tu_ngay='+ $( '#from_day' ).val()+'&den_ngay='+$( '#to_day' ).val());		
		});
    })
function xem_click(){
		$( "#xem" ).click(function() {
			var fd= $( '#from_day' ).datepicker( "getDate" );
			   var d= $( '#from_day' ).val();
			   var tfd= $( '#to_day' ).datepicker( "getDate" );
			   var td= $( '#to_day' ).val();
				$("#rowed3").jqGrid('setGridParam',{url:'resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_phieuchi&tu_ngay='+ $( '#from_day' ).val()+'&den_ngay='+$( '#to_day' ).val(),datatype:"json"}).trigger('reloadGrid');
				//var d=$("#rowed3").jqGrid('getGridParam', 'records');
				$("#rowed3").jqGrid('setCaption', 'Tất cả danh sách toa thuốc từ ngày '+ d+ ' đến ngày '+ td +'<div id="xct" style="float:left; margin-top: -20px; margin-left: 70%;"><input type="checkbox" id="xemchitiet" onclick="xemchitiet()" checked  /> Xem chi tiết</div>');
		
		});
	}	

    function resize_control() {
      //  cao_left = $(".left_col").height() / 2 - 82;
      //  $("#rowed3,#rowed4 ").setGridWidth($(".left_col").width() - 11);
      //  $("#rowed3,#rowed4 ").setGridHeight(cao_left);

		$("#rowed3").setGridWidth($(window).width()-10);
		$("#rowed3").setGridHeight($(window).height()-$("#top_main").height()-$(".ui-tabs-nav").height()-130);
//        $("#rowed5").setGridWidth($(".right_col").width() - 11);
//        $("#rowed5").setGridHeight($(".right_col").height() - 60);
    }

 function create_grid() {
        window.kiemtrasearch = true;
        $("#rowed3").jqGrid({
            url: 'resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_phieuchi&tu_ngay='+ $( '#from_day' ).val()+'&den_ngay='+$( '#to_day' ).val(),
            datatype: "json",
            colNames: ['Id_thutrano','','Mã phiếu','Nhà cung cấp','Ngày lập','Phiếu N.kho','Số tiền','Người chi','Người nhận tiền','Lý do chi','Duyệt','Người duyệt','Địa chỉ','ID Người Chi','ID Nhà CC',''],
            colModel: [
				{name: 'Idthutrano', index: 'Idthutrano', search: true, width: "0%", editable: false, align: 'center', hidden: true},
                {name: 'MaPhieu', index: 'MaPhieu', search: true, width: "5%", editable: false, align: 'left', hidden: false,sorttype:'integer'},
                {name: 'NhaCungCap',  index: 'NhaCungCap', search: true, width: "28%", editable: false, align: 'left', hidden: false},
				{name: 'NhaCungCapt',  index: 'NhaCungCapt', search: true, width: "15%", editable: false, align: 'left', hidden: false},
                {name: 'NgayLap', index: 'NgayLap', search: false, width: "6%", editable: false, align: 'right', hidden: false,
				formatoptions: {newformat: "h:i d/m/y", srcformat: 'h:i d/m/y',},formatter: 'date' ,datefmt: "h:i d/m/y",},
				{name: 'PhieuNhapKho',  index: 'PhieuNhapKho', search: true, width: "5%", editable: false, align: 'left', hidden: false},
                {name: 'SoTien', index: 'SoTien', width: "7%", search: true, editable: false, align: 'right', hidden: false, formatoptions: {decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: "", suffix:"", defaultValue: '0'}
				,sorttype:'currency',formatter:'currency'
				},
                {name: 'NguoiChi', index: 'NguoiChi', search: true, width: "10%", editable: false, align: 'left', hidden: false},
                {name: 'NguoiNhanTien', index: 'NguoiNhanTien', search: true, width: "10%", editable: false, align: 'left', hidden: false},
                {name: 'LyDoChi',  index: 'LyDoChi', search: true, width: "15%", editable: false, align: 'left', hidden: false}, 
                {name:'DaDuyet',index:'DaDuyet',search:true, width:"4%",stype: 'select',searchoptions: { sopt: ['eq', 'ne'],value:':;1:Có;0:Không'}, editable:true,align:'center',hidden:false,edittype:"checkbox",formatter:"checkbox",formoptions:{ rowpos:7, colpos:1},editoptions: {value:"1:0"},formatoptions:{disabled: false}},	
				{name: 'NguoiDuyet', index: 'NguoiDuyet', search: true, width: "10%", editable: false, align: 'left', hidden: false},
				{name: 'DiaChi', index: 'DiaChi', search: true, width: "0%", editable: false, align: 'left', hidden: true},
				{name: 'Id_NguoiChi', index: 'Id_NguoiChi', search: true, width: "0%", editable: false, align: 'center', hidden: true},
				{name: 'Id_NCC', index: 'Id_NCC', search: true, width: "0%", editable: false, align: 'center', hidden: true},
				{name: 'ID_NhapKho', index: 'ID_NhapKho', search: true, width: "0%", editable: false, align: 'center', hidden: true},
            ],
            loadonce: true,
            scroll: false,
            modal: true,
            shrinkToFit: true,
            scrollrows : true,
            rowNum: 10000000,
            rowList: [],
            pager: '#prowed3',
            height: 100,
            width: 100,
            viewrecords: true,
            ignoreCase: true,
            sortorder: "desc",
			grouping:true, 
            groupingView : { 
             groupField : ['NhaCungCap'],
             groupDataSorted : true ,
             groupCollapse : false,
             groupColumnShow :false,
			//groupOrder: ['DESC'],
			groupText : ['<b>{0}</b>']
       }, 
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
			
				kiemtra=0;
				var rowData = jQuery('#rowed3').getRowData(rowId);
				dduyet=rowData['DaDuyet'];
				window.idthutrano=rowId;
				window.idnhapkho=rowData['ID_NhapKho'];
				if(idnhapkho==0){ //neu la tra khac hoac tam ung
					
					if(dduyet==0){ //phieu chua duyet
						
						dialogungkhac("hien");
						button_dialog("choin_chosua");
						$(".sophieu").html('<?='PC_'.($tam[0][0]+1)?>');
						var rowData = jQuery('#rowed3').getRowData(rowId);
						
						var sotien=rowData['SoTien'];
						$( "#dialog-form" ).dialog('open');	
						sotien=parseFloat(sotien).formatMoney(0, ',', '.')
						$("#sotien").val(sotien);
						$("#ngaylap").val(rowData['NgayLap']);
						$("#nguoint").val(rowData['NguoiNhanTien']);
						$("#dando").val(rowData['LyDoChi']);
						$("#diachi").val(rowData['DiaChi']);
						
						setval('#nhacc','#nhacc1','#data_combo_nhacc',rowData['Id_NCC']);
						setval('#nguoichi','#nguoichi1','#data_combo_nguoichi',rowData['Id_NguoiChi']);
						
					}else{
						tooltip_message("Phiếu chi này đã duyệt, không thể chỉnh sửa");
						$( "#dialog-form" ).dialog('open');
						dialogungkhac("an");
						button_dialog("choin");
					}
				}else{  //truong hop phieu tra cho phieu nhap
					if(dduyet==0){ //phieu chua duyet
						window.idthutrano=rowId;
						
						dialog_phieunhap("hien");
						button_dialog("choin_chosua");
						$(".sophieu").html('<?='PC_'.($tam[0][0]+1)?>');
						var rowData = jQuery('#rowed3').getRowData(rowId);		
						var sotien=rowData['SoTien'];
						$( "#dialog-form2" ).dialog('open');	
						sotien=parseFloat(sotien).formatMoney(0, ',', '.')
						$("#tiend2").val(sotien);
						$("#ngaylapd2").val(rowData['NgayLap']);
						$("#nguointd2").val(rowData['NguoiNhanTien']);
						$("#dandod2").val(rowData['LyDoChi']);
						$("#diachid2").val(rowData['DiaChi']);
						
						
						setval('#nhaccd2','#nhaccd21','#data_combo_nhacc',rowData['Id_NCC']);
						setval('#nguoichid2','#nguoichid21','#data_combo_nguoichi',rowData['Id_NguoiChi']);
						create_combobox('#sotiend2', '#sotiend21', ".data_combo_sotien", "#data_combo_sotien1", create_sotien, 200, 300, 'Số tiền', 'data_sotientra&ID_NCC='+idncc,0);
					}else{
						tooltip_message("Phiếu chi này đã duyệt, không thể chỉnh sửa");
						$( "#dialog-form2" ).dialog('open');
						dialog_phieunhap("an");
						button_dialog("choin");
					}
				}
				
				
				
            },
            onselect: function(rowId, rowIndex, columnIndex) {
				
            },
            onRightClickRow: function(rowid, iRow, iCol, e) {

            

            },
            loadComplete: function(data) {
				if(ktpost==1){
				
				$('#rowed3').jqGrid("setSelection",$.trim(parseInt(window.idthutrano)),false);
				$('#rowed3 #'+$.trim(parseInt(window.idthutrano))).click();
				$('#rowed3 #'+$.trim(parseInt(window.idthutrano))).focus();
				ktpost=0;
			}
			// $("#rowed3").jqGrid('setGridParam',{loadonce: true}).trigger('reloadGrid');
				 //duyet phieu chi
				 jQuery("#rowed3").closest(".ui-jqgrid-bdiv").scrollTop(scrollPositiontop);
			 	$('body').unbind('click')
				ids=$('#rowed3').jqGrid('getDataIDs'); 
				
				 for(var i=0;i<=ids.length-1;i++){
				 if (permission['duyet']==1){
				  $('#rowed3 #'+ids[i]+' input').bind('click',function(e){
				 
				   window.id_tam=$(e.target).closest('tr.jqgrow').attr('id');
				   if($(e.target).is(':checked')){
				     window.daduyet=1;
					 $( "#dialog-daduyet" ).html('Phiếu chi này chưa duyệt, bạn có muốn duyệt phiếu chi này không?');
					 $( "#dialog-daduyet" ).dialog('open');
					
				   }
				   else{
					$( "#dialog-daduyet" ).html('Phiếu chi này đã duyệt, bạn có muốn bỏ duyệt phiếu chi này không?');
					   $( "#dialog-daduyet" ).dialog('open');
						window.daduyet=0;
				   }
				  
				   	return false
				
				   
				   
				   })
				     }else{};
				 }	 
             
            },caption: "Danh sách các phiếu chi <div id='xct' style='float:left; margin-top: -20px; margin-left: 70%;'><input type='checkbox' onclick='xemchitiet()' id='xemchitiet' checked  /> Xem chi tiết</div>"
           
        });
        $("#rowed3").jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});
        $("#rowed3").jqGrid('navGrid', "#prowed3", {add: false, edit: false, del: false, search: false, refresh: true, closeAfterEdit: true, clearAfterAdd: true, navkeys: [true, 38, 40], closeOnEscape: true});

    }
	function create_nguoichi(elem, datalocal) {
        datalocal = jQuery.parseJSON(datalocal);
        $(elem).jqGrid({
            datastr: datalocal,
            datatype: "jsonstring",
            colNames: ['Họ Tên', 'Nickname'],
            colModel: [
				{name: 'Hoten_nc', index: 'Hoten_nc', hidden: false, width: "70%"},
                {name: 'Ten_nc', index: 'Ten_nc', hidden: false, width: "30%"},
                
            ],
            hidegrid: false,
            gridview: true,
            loadonce: true,
            scroll: false,
            modal: true,
            rowNum: 200000,
            rowList: [],
            height: 135,
            width: 300,
            viewrecords: true,
            ignoreCase: true,
            shrinkToFit: true,
            cmTemplate: {sortable: false},
            sortorder: "desc",
            serializeRowData: function(postdata) {
            },
            onSelectRow: function(id) {
            	// var rowdata = $(this).getRowData(id);
				// $('#are_chuandoan').val('');
				// $("#are_chuandoan").val(rowdata["NoiDung"]);
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

function create_nhacungcap(elem, datalocal) {
        datalocal = jQuery.parseJSON(datalocal);
        $(elem).jqGrid({
            datastr: datalocal,
            datatype: "jsonstring",
            colNames: ['Tên nhà cung cấp', 'Địa chỉ','Điện thoại'],
            colModel: [
				
                {name: 'TenNcc', index: 'TenNcc', hidden: false, width: "50%"},
                {name: 'DiaChiNcc', index: 'DiaChiNcc', hidden: false, width: "30%", align: 'left'},
                {name: 'DienThoaiNcc', index: 'DienThoaiNcc', hidden: false, width: "20%", align: 'right'},
            ],
            hidegrid: false,
            gridview: true,
            loadonce: true,
            scroll: false,
            modal: true,
            rowNum: 200000,
            rowList: [],
            height: 135,
            width: 470,
            viewrecords: true,
            ignoreCase: true,
            shrinkToFit: true,
            cmTemplate: {sortable: false},
            sortorder: "desc",
            serializeRowData: function(postdata) {
            },
            onSelectRow: function(id) {
				window.idncc=id;
				if(ktra==1){
            	rowdata = $(this).getRowData(id);
				
				create_combobox('#sotiend2', '#sotiend21', ".data_combo_sotien", "#data_combo_sotien1", create_sotien, 200, 300, 'Số tiền', 'data_sotientra&ID_NCC='+id,0);
				}
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

function create_sotien(elem, datalocal) {
        datalocal = jQuery.parseJSON(datalocal);
        $(elem).jqGrid({
            datastr: datalocal,
            datatype: "jsonstring",
            colNames: ['Mã phiếu', 'Ngày duyệt','Ghi chú', 'Tiền T.Toán','Tiền Đã T.Toán', 'Tiền C.Lại',''],
            colModel: [
                {name: 'MaPhieu_t', index: 'MaPhieu_t', hidden: false, width: "10%", align: 'right'},
				{name: 'ngayduyet_t', index: 'ngayduyet_t', hidden: false, width: "20%", align: 'right'},
				{name: 'ghichu_t', index: 'ghichu_t', hidden: false, width: "25%", align: 'right'},
				{name: 'tien_ttoan', index: 'tien_ttoan', hidden: false, width: "15%", align: 'right', formatoptions: {decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: "", suffix:"", defaultValue: '0'}
				,sorttype:'currency',formatter:'currency'
				},
				{name: 'tien_dttoan', index: 'tien_dttoan', hidden: false, width: "15%", align: 'right', formatoptions: {decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: "", suffix:"", defaultValue: '0'}
				,sorttype:'currency',formatter:'currency'
				},
				{name: 'tien_clai', index: 'tien_clai', hidden: false, width: "15%", align: 'right', formatoptions: {decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: "", suffix:"", defaultValue: '0'}
				,sorttype:'currency',formatter:'currency'
				},
                {name: 'id_nhapkho', index: 'SoTien', hidden: true	},
            ],
            hidegrid: false,
            gridview: true,
            loadonce: true,
            scroll: false,
            modal: true,
            rowNum: 200000,
            rowList: [],
            height: 200,
            width: 700,
            viewrecords: true,
            ignoreCase: true,
            shrinkToFit: true,
            cmTemplate: {sortable: false},
            sortorder: "desc",
            serializeRowData: function(postdata) {
            },
            onSelectRow: function(id) {
            	 var rowdata = $(this).getRowData(id);
				 
				 window.ktmaphieu=rowdata["MaPhieu_t"];
				//alert(rowdata["MaPhieu_t"]);				
				var sotien2=rowdata["tien_clai"];
				//alert(sotien2);
					sotien2=parseFloat(sotien2).formatMoney(0, ',', '.')
					$("#tiend2").val(sotien2);
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
function xemchitiet(){
	//alert
  if($("#xemchitiet").is(':checked')==true){
    
        $("#rowed3").jqGrid('setGridParam',{groupingView: { groupCollapse : false} }).trigger('reloadGrid');

      }else{
       
        $("#rowed3").jqGrid('setGridParam',{groupingView: { groupCollapse : true} }).trigger('reloadGrid');
      }
}
function button_dialog(tthai){
	if(tthai=="moi"){
		
		$(".ui-dialog-buttonpane button:contains('Lưu[Ctrl_S]')").button("enable");
		$(".ui-dialog-buttonpane button:contains('Chỉnh sửa')").button("disable");
		$(".ui-dialog-buttonpane button:contains('In hóa đơn')").button("disable");
			
	}else if(tthai=="choin"){
		$(".ui-dialog-buttonpane button:contains('In hóa đơn')").button("enable");
		$(".ui-dialog-buttonpane button:contains('Lưu[Ctrl_S]')").button("disable");
		
	}else if(tthai=="choin_chosua"){
		$(".ui-dialog-buttonpane button:contains('Lưu[Ctrl_S]')").button("enable");
		$(".ui-dialog-buttonpane button:contains('In hóa đơn')").button("enable");
	}
	else if(tthai=="chuachinhsua"){
		$(".ui-dialog-buttonpane button:contains('Lưu[Ctrl_S]')").button("disable");
		$(".ui-dialog-buttonpane button:contains('In hóa đơn')").button("enable");
		$(".ui-dialog-buttonpane button:contains('Chỉnh sửa')").button("enable");		
	}
	else if(tthai=="daclick_chinhsua"){
		$(".ui-dialog-buttonpane button:contains('Lưu[Ctrl_S]')").button("enable");
		$(".ui-dialog-buttonpane button:contains('In hóa đơn')").button("enable");
		$(".ui-dialog-buttonpane button:contains('Chỉnh sửa')").button("disable");
		
	}
	else if(tthai=="bamluu"){
		$(".ui-dialog-buttonpane button:contains('Lưu[Ctrl_S]')").button("disable");
		$(".ui-dialog-buttonpane button:contains('In hóa đơn')").button("enable");
		$(".ui-dialog-buttonpane button:contains('Chỉnh sửa')").button("enable");
	
	}
	else if(tthai=="moi_inserttk"){
		$(".ui-dialog-buttonpane button:contains('Lưu[Ctrl_S]')").button("enable");
		$(".ui-dialog-buttonpane button:contains('In hóa đơn')").button("disable");
		$(".ui-dialog-buttonpane button:contains('Chỉnh sửa')").button("disable");
	
	}
}

function dialogungkhac(tthai){
	if(tthai=="an"){
		$('.nhacc_button').button( {disabled:true});
		$('#nhacc').attr("disabled",true);
		$('.nguoichi_button').button( {disabled:true});
		$('#nguoichi').attr("disabled",true);
		$('#sotien').attr("disabled",true);
		$('#ngaylap').attr("disabled",true);
		$('#nguoint').attr("disabled",true);
		$('#diachi').attr("disabled",true);
		$('#dando').attr("disabled",true);
		$( "#sotien" ).attr("disabled",true);
			
	}else if(tthai=="hien"){
		$('.nhacc_button').button( {disabled:false});
		$('#nhacc').attr("disabled",false);
		$('.nguoichi_button').button( {disabled:false});
		$('#nguoichi').attr("disabled",false);
		$('#sotien').attr("disabled",false);
		$('#ngaylap').attr("disabled",false);
		$('#nguoint').attr("disabled",false);
		$('#diachi').attr("disabled",false);
		$('#dando').attr("disabled",false);
		$( "#sotien" ).attr("disabled",false);		
	}
}
function dialog_phieunhap(tthai){
	if(tthai=="an"){
		$('.nhaccd2_button').button( {disabled:true});
		$('#nhaccd2').attr("disabled",true);
		$('.sotiend2_button').button( {disabled:true});
		$('#sotiend2').attr("disabled",true);
		$('.nguoichid2_button').button( {disabled:true});
		$('#nguoichid2').attr("disabled",true);
		$('#tiend2').attr("disabled",true);
		$('#ngaylapd2').attr("disabled",true);
		$('#nguointd2').attr("disabled",true);
		$('#diachid2').attr("disabled",true);
		$('#dandod2').attr("disabled",true);
			
	}else if(tthai=="hien"){
		$('.nhaccd2_button').button( {disabled:false});
		$('#nhaccd2').attr("disabled",false);
		$('.sotiend2_button').button( {disabled:false});
		$('#sotiend2').attr("disabled",false);
		$('.nguoichid2_button').button( {disabled:false});
		$('#nguoichid2').attr("disabled",false);
		$('#tiend2').attr("disabled",false);
		$('#ngaylapd2').attr("disabled",false);
		$('#nguointd2').attr("disabled",false);
		$('#diachid2').attr("disabled",false);
		$('#dandod2').attr("disabled",false);		
	}
}
</script>

