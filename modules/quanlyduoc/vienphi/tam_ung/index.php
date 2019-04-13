<!--Người viết: Trần Trương Văn-->
 <?php
	if(isset($_GET["idbenhnhan"])){
		echo "<script type='text/javascript'>";
		echo "window.id_benhnhan=".$_GET["idbenhnhan"];
		echo "</script>";
		$id_benhnhan=$_GET["idbenhnhan"];
	}else{
	if($_SESSION["ThongTinBenhNhan"]["ID"]==""){
		echo "<script type='text/javascript'>";
			echo "parent.postMessage('hosobenhnhantrong;' , '*')";
		
		echo "</script>";
		return;
	}else{
		echo "<script type='text/javascript'>";
		echo "window.id_benhnhan=".$_SESSION["ThongTinBenhNhan"]["ID"];
		echo "</script>";
		$id_benhnhan=$_SESSION["ThongTinBenhNhan"]["ID"];
	}
	}


?>
 
<style>
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
	 .fm-button{
		 box-shadow:0px 0px 5px #383838;
		 border:1px solid #919191;
	 }
	 .dialog_dm_thuoc,.dialog_dm_duongdung{
 					position:absolute;
					z-index:1000000;		 
					display:none;	
					box-shadow:0px 0px 6px #333	
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
	
	legend {
		background-color:#f5f3e5;
		text-shadow:0 1px 0 rgba(255, 255, 255, 0.6)!important;
		color:#000;		  
	}
	.ui-layout-west{
		
	}
	.ui-layout-center{
		
	}
	.ui-layout-east{
		
	}
	.top_form{
		width:100%;
		height:230px;
		margin-top:3px;
				
	}	 
	.diung,.tien_su_benh_nhan,.tien_su_gia_dinh{
		display:inline-block;	
		box-shadow:0px 0px 10px #a0a0a0;
		border:1px solid #919191;	
		vertical-align:top;
		height:185px;		 
	}
	.thongtin_tongthe{
		display:inline-block;
		box-shadow:0px 0px 10px #a0a0a0;
		border:1px solid #919191;
		vertical-align:top;
		width:55%;		
	}
	.thongtin_luotkham{
		display:inline-block;
		vertical-align:top;
		width:55%;
		overflow-y:scroll;
		margin-top:2px;
		height:38px;
		margin-left:3px;		
	}
	
	
	.button_panel{
		display:inline-block;
		width:40%;
		 
	}
	.top_form textarea{		 
		height:151px;
		margin-left:2px;	
		margin-bottom:2px;		 
	}
	.top_form .title{
		padding-top:2px;
		padding-bottom:2px;
		text-align:center;
		font:12px/19px segoe ui, Tahoma, sans-serif!important;
		color:#000;		 
		font-weight:bold!important;		
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
	.lamsang{
		vertical-align:top;
		overflow-y:scroll;
		height:38px;
		border-top:1px solid #919191;
		padding-top:2px;
		padding-left:2px;
		margin-top:3px;		 
	}
	.canlamsang div,.lamsang div,.canlamsang_luotkham div{
		display:inline-block;
		box-shadow:0px 0px 10px #a0a0a0;
		border:1px solid #919191;
		font-size:11px;
		margin-right:2px;
		margin-top:0px;
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
	.thongtin_dieutri div{
		display:inline-block;
		box-shadow:0px 0px 10px #a0a0a0;
		border:1px solid #919191;
		font-size:11px;
		margin-right:2px;
		margin-top:0px;
		padding:2px;
		width:114px;
		height:13px;
		text-align:center;
		vertical-align:top;
		margin-bottom:2px;	
		text-shadow:0 1px 0 rgba(255, 255, 255, 0.6);		 
		vertical-align:text-bottom;
		cursor:pointer;
	}
	.canlamsang_luotkham{		 
		display:inline-block;
		margin-top:1px;
		margin-left:2px;	 
	}
	.canlamsang_luotkham div{
		margin-top:	1px;		 	
		min-width:82px;
		max-width:140px;
		vertical-align: text-bottom;
		height:28px;			
	}
	.canlamsang_luotkham div span.topcls{
		display:block;	 	
	}	 
	.canlamsang div:hover,.lamsang div:hover,.canlamsang_luotkham div:hover{
		box-shadow:0px 0px 4px 2px #208ac8;
		border:1px solid #0463b4;	
	}
	.thongtin_dieutri{
		display:inline-block;
		vertical-align:top;
		width:99%;
		overflow-y:scroll;
		margin-top:2px;
		height:20px;
		margin-left:3px;		
	}
	textarea{
		padding-left:1px;
		padding-bottom:1px;
		border:1px solid #999;
	}
	fieldset label{
	 display:inline-block;
	}
</style>
<body>
<div id="dialog_sotien" style="display:none"></div>
<div id="dialog_print" style="display:none">

<table>
    <tr>
     	<td rowspan="5">
   		 <input id="id_print" style="outline: 0;border: none;background-color:#6CF">
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


	 <div class="top_form ui-widget-content" >
        <div style="padding:2px 0px;" class="thongtin_tongthe">
            <div class="patient_info"></div>      
             
   		 </div>
         <div>
          <fieldset>
                <legend>Thông tin nộp tiền:</legend>
                <table style="width:1200px" >
            
                	<tr>
                  	  <td>
                        <label for="ngaylap" style="width:100px; ">Ngày lập phiếu:</label>
                        </td>
                        <td>
                        <input id="ngaylap" name="ngaylap" style="width:130px;"type="text"> 
                      </td>
                      <td>
                         <label for="sophieu" style="width:60px; ">Số phiếu:</label>
                          </td>
                        <td>
                        <input  id="sophieu" name="sophieu" style="width:130px;"type="text"> 
                       </td>
                        <td>
                         <label for="thungan" >Thu ngân:</label>
                          </td>
                        <td>
                        <input id="thungan" name="thungan" style="width:98%;"type="text">  
                        </td>
                         <td>
                          <label for="nocuoi" >Nợ cuối:</label>
                           </td>
                        <td>
                        <input id="nocuoi" name="nocuoi" style="width:100%;text-align:right;font-weight:bold;font-size:18px"type="text" disabled>  
                        </td>
                    </tr>
                <tr>
                  	  <td>
                    <label for="nguoigd" style="width:100px; ">Người giao dịch:</label>
                     </td>
                        <td>
                    <input id="nguoigd" name="nguoigd" style="width:130px;"type="text"> 
                     </td>
                     <td>
                     <label for="diachi" style="width:60px; ">Địa chỉ:</label>
                      </td>
                        <td colspan="5" align="right">
                    <input  id="diachi" name="diachi" style="width:100%;"type="text" > 
                     </td>
                    </tr>
            
                 <tr>
                  	  <td>
                    <label for="diengiai" style="width:100px; ">Diễn giải:</label>
                     </td>
                        <td  colspan="7">
                    <input id="diengiai" name="ngaylap" style="width:100%;"type="text"> 
                   </td>
                    </tr>
                   <tr>
                  	  <td colspan="4" align="right">
                    <label for="aaa">TỔNG TIỀN ĐÃ TẠM THU :</label>
                     </td>
                        <td>
                    <input id="aaa" name="ngaylap" style="width:100%;"type="text" disabled> 
                      </td>
                    <td colspan="2"  align="right">
                   <label for="tienthu" style="width:60px; ">TIỀN THU:</label>
                    </td>
                        <td >
                    <input id="tienthu" name="tienthu" style="width:100%;text-align:right"type="text"> 
                    </td>
                    </tr>
                </table>
              </fieldset>  
              
        </div>
        <div>
          <a href="#" id="btn_luu" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" style="margin-left:0px;  margin-bottom:1px; ">Lưu[Ctrl-S]</a>  
          <a href="#" id="btn_lien1" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" style="margin-left:0px;  margin-bottom:1px; ">In liên 1</a> 
          <a href="#" id="btn_lien2" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" style="margin-left:0px;  margin-bottom:1px; ">In liên 2</a> 
          <a href="#" id="btn_sua" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" style="margin-left:0px;  margin-bottom:1px; ">Sửa</a> 
          <a href="#" id="btn_huy" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" style="margin-left:0px;  margin-bottom:1px; ">Hủy phiếu</a>  
    
        </div>
    </div>
</body>
</html>
<script type="text/javascript">
$(document).ready(function() {	
var ID_ThuTraNo='';
<?php 
	$data= new SQLServer;
	$store_name="{call GD2_Sophieutamung_max ()}";
	$params = array();
	$get=$data->query( $store_name, $params);
	$excute = new SQLServerResult($get);
	$tam = $excute->get_as_array();
	$store_name1="{call GD2_nocu_get (?)}";
	$params1 = array($id_benhnhan);
	$get1=$data->query( $store_name1, $params1);
	$excute1 = new SQLServerResult($get1);
	$tam1 = $excute1->get_as_array();
	
	
?>
$('#ngaylap').bind('keydown', function (e) {		
	if (jwerty.is('enter',e)) {
		 $("#sophieu").focus();	
	}
});
$('#sophieu').bind('keydown', function (e) {		
	if (jwerty.is('enter',e)) {
		 $("#thungan").focus();	
	}
});
$('#thungan').bind('keydown', function (e) {		
	if (jwerty.is('enter',e)) {
		 $("#nguoigd").focus();	
	}
});
$('#nguoigd').bind('keydown', function (e) {		
	if (jwerty.is('enter',e)) {
		 $("#diachi").focus();	
	}
});
$('#diachi').bind('keydown', function (e) {		
	if (jwerty.is('enter',e)) {
		 $("#diengiai").focus();	
	}
});
$('#diengiai').bind('keydown', function (e) {		
	if (jwerty.is('enter',e)) {
		 $("#tienthu").focus();	
	}
});
$('#tienthu').bind('keydown', function (e) {		
	if (jwerty.is('enter',e)) {
		 $("#btn_luu").focus();	
	}
});

number_textbox('#tienthu');

$('#id_print').keydown(function(e){
			if (jwerty.is("enter",e)) {	
			if($('#id_print').val()==4){
				$('#dialog_print').dialog('close');
			}else{
			 $.cookie("in_status", "print_direct"); 
			 dialog_report("Xem trước khi in",90,90,"u78787878975f","resource.php?module=report&view=<?=$modules?>&action=tam_ung&header=top&lien="+$('#id_print').val()+"&type=report&id_form=10&idthutrano="+window.ID_ThuTraNo,'PhieuThu');
			 $('#dialog_print').dialog('close');
			}
				
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
		 		 luu(); 	 
				$( "#dialog_print" ).dialog('open');				
					
			
        },
        "No": function() {
          $( this ).dialog( "close" );
        }
      }
    });
	 $( "#dialog_print" ).dialog({
      resizable: false,
      height:'auto',
      modal: true,
	  autoOpen :false,      
    });
	
$('#nocuoi').val((<?php if(count($tam1)>0) echo $tam1[0][0];else echo 0;?>).formatMoney(0, '.', ','));
setTimeout(function(){$("#tienthu").focus()},600); ;
	
	
	$( "#tienthu" ).keyup(function(e){		
	var tam=$( "#tienthu" ).val().split(',').join('');
		tam=parseInt(tam).formatMoney(0, '.', ',')
			$("#tienthu").val(tam)
	});
	
	$( "#tienthu" ).keydown(function(e){		
			if (jwerty.is("enter",e)||jwerty.is("tab",e)) {				
				setTimeout(function(){$('#btn_luu').click();},100);
			}
	});
   $.get( "resource.php?module=web_services&function=create_panel1&id_benhnhan="+id_benhnhan+"&action=index", function( data ) {
	  $( ".patient_info" ).html( data );
	  $( ".patient_info" ).css("width", $( "#patient_info" ).width()+"css");	
	  ma_benhnhan=$('.profile_container:nth-child(4)').text() ;    
   });
   $('#sophieu').val('PTU_<?=$tam[0]['LastRecordNumber']+1?>');
   $('#nguoigd').val('<?=$_SESSION["ThongTinBenhNhan"]["ten"]?>');
   $('#diachi').val('<?=$_SESSION["ThongTinBenhNhan"]["diachi"]?>');   
   $('#diengiai').val('Tạm ứng');
   
   
   $('#ngaylap').datetimeEntry({datetimeFormat: 'H:M D/O/y',spinnerImage: ''});
   $('#ngaylap').val('<?=date("h")?>:<?=date("i")?> <?= date("d")?>/<?= date("m")?>/<?= date("y")?>');
   $('#btn_luu,#btn_lien1,#btn_lien2,#btn_sua,#btn_huy').button();   
   $('#btn_luu').click(function(){	   
	     $('#dialog_sotien').html('Số tiền thu là '+$('#tienthu').val()+'.Bạn có muốn tiếp tục')	;
		 $( "#dialog_sotien" ).dialog('open');
   })
   phanquyen();
  
})

 function luu(){
	    var datatosend = '{"idbenhnhan":"'+id_benhnhan+'","NgayGio":'+JSON.stringify($('#ngaylap').val())+',"nguoigd":"'+$('#nguoigd').val()+'","diachi":"'+$('#diachi').val()+'","diengiai":"'+$('#diengiai').val()+'","tienthu":"'+$('#tienthu').val().split(',').join('')+'","nocu":"'+$('#nocuoi').val()+'"}';
		datatosend =$.parseJSON(datatosend) ;		
	    $.post('resource.php?module=<?=$modules?>&view=<?=$view?>&action=controller',datatosend).done(function(data){
		   window.ID_ThuTraNo=data;
		  // alert(ID_ThuTraNo);
	   })
	   
   }
</script>
 
 
