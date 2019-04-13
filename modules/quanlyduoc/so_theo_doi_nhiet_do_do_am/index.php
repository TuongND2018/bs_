<style>
 .diengiai_sinhton, .diengiai_thetrang{
		position:absolute;
		width:300px;	
	 }
	 .diengiai_sinhton ,.diengiai_thetrang {		 
		 font-size:10px;		 		
	 }
	 .diengiai_sinhton div,.diengiai_thetrang div{
		 display:inline-block;	 		 		
	 }
	 #idnhietdo,#idnhietdo2{
		 background-color:red;
		 border-radius: 7px;
		 width:7px;
		 height:7px;
		 margin-right:4px;
	 }
	 #iddoam,#iddoam2{
		 background-color:#ff8a00;
		 border-radius: 7px;
		 width:7px;
		 height:7px;
		 margin-right:4px;
		 margin-left:4px;		 
	 }
svg {
	height:100% !important;
}
/*svg {
		 border:1px solid #999;
		 box-shadow:0px 0px 3px 0px #a0a0a0;
	}*/
.ui-jqgrid-labels th.ui-th-column div{
        word-wrap: break-word; /* IE 5.5+ and CSS3 */
        white-space: pre-wrap; /* CSS3 */
        white-space: -moz-pre-wrap; /* Mozilla, since 1999 */
        white-space: -pre-wrap; /* Opera 4-6 */
        white-space: -o-pre-wrap; /* Opera 7 */
        overflow: hidden;
        height: auto !important;
        vertical-align: middle;
    }
#panel_main{
	display:block !important;
	background:#F5F3E5!important;
}#main_top{
	background:#F5F3E5;
	height:35px;
	width:1355px;
	float:left;
	border-radius:3px;
	border:#D8CEBE solid 1px;
	margin:5px;
}
#main_bottom{
	height:600px;
	width:1355px;
	float:left;
	margin-left:5px;
	border:#D8CEBE solid 1px;
	background:#F5F3E5;
	
}select{
	width:120px;
}#sub_main_top{
	margin-left:15px;
	margin-top:5px;
}#tabs .ui-tabs-nav li {
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
}#xemdanhsach{
	margin-left:5px;
	margin-top: -2px;
}#tabs .ui-tabs-nav li.ui-tabs-selected, #tabs .ui-tabs-nav li.ui-state-active {
z-index: 1;
}#tabs-1,#tabs-2{
	padding:0!important;
}.trai,.phai,.trai2,.phai2{
	float:left;
}
#tieude{

	height:22px;
	border-bottom:#D7D6CC 1px solid;
	padding-left:5px;
	padding-top:3px;
	font-weight:bold;
}#ghichubs{
	margin-left:2px;
}.ntext{
	width:100px;
	text-align:center;
}
#ngay{
	width:30px;
	text-align:center;
}.n_phai{
	width:800px;
	float:left;
	margin-top:5px;
}.n_trai{
	float:left;
}
.n_tren,.n_duoi{
	width:100%;
	height:49.50%;
	border: 1px solid #D8CEBE;
    border-radius: 3px;
	background:#FFF;
}.n_duoi{
	margin-top:5px;
}
.n_control{
	border: 1px solid #D8CEBE;
    border-radius: 3px;
	height:35px;
	 margin-top: 5px;
	 margin-left: 5px;
    margin-right: 5px;
	text-align:right;
	padding-top:5px;
	padding-right:5px;
}
#rowed3 input{
	text-align:center;
}
</style>
<script src="../giaidoan2/js/dojo/dojo/dojo.js" type="text/javascript"></script>
<body>
<div id="dialog-confirm" title="Thông báo" style="display:none">
  <p><span class="ui-icon ui-icon-alert" style="float:left; margin:0 7px 20px 0;"></span>Bạn có muốn xóa dữ liệu đang chọn không?</p>
</div>

<div id="dialog-print" title="Tùy chọn In" style="display:none;">
  <table cellpadding="0" cellspacing="0" border="0" style="font-weight:bold; font-size:12px;">
      <tr>
        <td rowspan="2"><textarea cols="2" rows="0" style="text-align: center; font-weight:bold;height: 25px;padding-top: 10px;" id="_mauin"></textarea></td>
        <td><input type="radio" name="chonin" id="intheongay" value="1"><label for="intheongay">1. In theo ngày </label></td>
      </tr>
      <tr>
        <td><input type="radio" name="chonin" id="intheothang" value="2"><label for="intheothang">2. In theo tháng </label></td>
      </tr>
  </table>
</div>

<input type="hidden" id="_xoa" name="_xoa" value="" >
    <div id="panel_main" >  
		<div id="main_top">
        	<div id="sub_main_top">
            <label for="from_day"> Từ ngày:</label>
            <input type="text" id="from_day" name="from_day"  class="ntext" value="<?php echo date($_SESSION["config_system"]["ngaythang"]) ?>"/>
            <label for="to_day"> Đến ngày:</label>
           <input type="text" id="to_day" name="to_day"  class="ntext"  value="<?php echo date($_SESSION["config_system"]["ngaythang"]) ?>"/>
			<input type="hidden" name="from_day_mask" id='from_day_mask'  value="<?php echo date("Y/m/d")?>">
			<input type="hidden" name="to_day_mask" id='to_day_mask' value="<?php echo date("Y/m/d")?>">

            <input type="button" id="xemdanhsach" value="Xem danh sách" />
            
            <label style="font-weight:bold; margin-left:20px;  margin-top:0px; color:#03F; font-size:14px;"> BIỂU ĐỒ NHIỆT ĐỘ - ĐỘ ẨM</label>
            
            </div><!--sub_main_top-->
        
        </div><!--main_top-->
        <div id="main_bottom">
        	<div class="n_trai">
            
                <table id="rowed3" ></table>
                <div id="prowed3"><input type="text" style="margin-left: 220px; margin-top: 4px; width: 70px;;background:#4CA109;border:1px solid #327E04; color: #FFFFFF;font-weight: bold; text-align:center; box-shadow:none!important;padding: 0px!important;" disabled="" readonly value="0" class="disable" id="nhietdo">
                <input type="text" style="margin-left: 7px; margin-top: 4px; width: 70px;;background:#4CA109;border:1px solid #327E04; color: #FFFFFF;font-weight: bold; text-align:center; box-shadow:none!important;padding: 0px!important;" disabled="" readonly value="0" class="disable" id="doam">
                </div>
                <div class="n_control">
                    <input type="button" id="them" value="Thêm" />
                    <input type="button" id="luu" value="Lưu" />
                    <input type="button" id="xoa" value="Xóa" />
                    <input type="button" id="insotheodoi" value="In sổ theo dõi" />
                </div>
            </div>
            
            <div class="n_phai">
                <div class="n_tren">
                
                </div>
                <div class="n_duoi">
                
                </div>
            </div> 
        </div><!--main_bottom-->
    </div>

    
</body>
</html> 
<script type="text/javascript">
    jQuery(document).ready(function() {
		load_nguoithuchien();
		create_grid();
		resize_control();
		
	$("#panel_main").css("height",$(window).height()+"px");			 
	$("#panel_main").fadeIn(1000);
	$("#xemdanhsach,#them,#xoa,#luu,#insotheodoi").button();
		/*$('#tungay').datepicker( {
	dateFormat: $.cookie("ngayJqueryUi")}).datepicker("setDate", new Date());
	$('#denngay').datepicker( {
	dateFormat: $.cookie("ngayJqueryUi")}).datepicker("setDate", new Date());*/
	var d = new Date();
	var curr_date = d.getDate();
    var curr_month = d.getMonth() + 1; //Months are zero based
    var curr_year = d.getFullYear();
    var curr =(curr_date + "-" + curr_month + "-" + curr_year);
 	
		var fromday=$.datepicker.formatDate($.cookie("ngayJqueryUi"), new Date(<?php echo date("Y")?>, <?php echo date("m")?>-1, <?php echo date("d")?>));
		var today=$.datepicker.formatDate($.cookie("ngayJqueryUi"), new Date(<?php echo date("Y")?>, <?php echo date("m")?>-1, <?php echo date("d")?>));
		//alert(fromday);
		$("#from_day").datepicker({
            showWeek: true,
            defaultDate: "+1w",
            changeMonth: true,
            changeYear: true,
            numberOfMonths: 1,
             showButtonPanel: true,
            dateFormat: $.cookie("ngayJqueryUi"),  
			//maxDate: new Date(<?php echo date("Y")?>, <?php echo date("m")?>-1, <?php echo date("d")?>),
            onClose: function(selectedDate) {
            	
              //  $("#to_day").datepicker("option", "minDate", selectedDate);
               
              //  fromday = $.datepicker.formatDate($.cookie("ngayJqueryUi"), new Date(selectedDate));
               // $("#from_day").val(fromday);
              //  $("#to_day").val(today);
               // $( "#from_day" ).datepicker( "setDate", today );
            },
            onSelect: function(dat, inst) {

              //  $("#from_day_mask").val(dat);
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
           // minDate: new Date(<?php echo date("Y")?>, <?php echo date("m")?>-1, <?php echo date("d")?>),  
		  	//maxDate: new Date(<?php echo date("Y")?>, <?php echo date("m")?>-1, <?php echo date("d")?>),     
            onClose: function(selectedDate) {
               // $("#from_day").datepicker("option", "maxDate", selectedDate);
              //  today = $.datepicker.formatDate($.cookie("ngayJqueryUi"), new Date(selectedDate));
              //  $("#to_day").val(today);
              //  $("#from_day").val(fromday);
               // $( "#to_day" ).datepicker( "setDate", today );
            },
            onSelect: function(dat, inst) {
              //  $("#to_day_mask").val(dat);
            }
        });

	 $.dateEntry.setDefaults({spinnerImage: ''});		 
	 //$("#tungay, #denngay").dateEntry({dateFormat: 'dmy-'});
	 $("#from_day, #to_day").dateEntry({dateFormat: $.cookie("ngayDateEntry")});
// end ngay	 
	
	$("#them").click(function(){
		var tmp1 = $("#rowed3").jqGrid('getDataIDs');
		var nhietdo=$('#'+tmp1[tmp1.length-1]+'_NhietDo').val();
		var doam=$('#'+tmp1[tmp1.length-1]+'_DoAm').val();
		//console.log(tmp1[tmp1.length-1]+'   '+doam);
		 //var rowData = jQuery('#list').jqGrid ('getRowData', rowId);
		if(nhietdo!='' && doam!=''){
			parameters ={
				initdata : {NguoiDo:<?=$_SESSION["user"]["id_user"]?>},
				position :"last",
				useDefValues : false,
				useFormatter : false,
				addRowParams : {extraparam:{}}
				
			}
			$("#rowed3").jqGrid('addRow',parameters);
			var tmp2 = $("#rowed3").jqGrid('getDataIDs');
			$("#rowed3").jqGrid('setCell',tmp2[tmp2.length-1],'Luu', '1');
		//	for(var i=0;i<tmp2.length;i++){
				$('#'+tmp2[tmp2.length-1]+'_NgayGioDo').datetimeEntry({datetimeFormat: 'H:M D/O/y',spinnerImage: ''});
				var currentdate = new Date();
				$('#'+tmp2[tmp2.length-1]+'_NgayGioDo').val(currentdate.getHours()+':'+currentdate.getMinutes()+' '+<?= date("d")?>+'/'+<?= date("m")?>+'/'+<?= date("y")?>);
		//	}
		}//end if
		
	});
	
	$("#xemdanhsach").click(function() {
		$("#rowed3").jqGrid('setGridParam',{url:'resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_ketquado&tu_ngay='+ $( '#from_day' ).val()+'&den_ngay='+$( '#to_day' ).val(),datatype:'json'}).trigger('reloadGrid');
	});
	
	 $( "#dialog-confirm" ).dialog({
      resizable: false,
	  autoOpen: false,
      modal: true,
      buttons: {
        "Yes": function() {
			var daxoa='';
          $( this ).dialog( "close" );
		  selectedRowId = $('#rowed3').jqGrid ('getGridParam', 'selrow');
		  $('#rowed3').jqGrid('delRowData',selectedRowId);
		  daxoa=$("#_xoa").val();
		  if(isNaN(selectedRowId)==false){
			  if(daxoa==''){
				  $("#_xoa").val(selectedRowId);
			  }else{
				  $("#_xoa").val(daxoa+"_"+selectedRowId);
			  }
		  }
			  
        },
        'No': function() {
          $( this ).dialog( "close" );
        }
      }
    });
	
	$("#xoa").click(function() {
		 $( "#dialog-confirm" ).dialog('open');
	});
	
	$('#luu').click(function(){
		var ids = $("#rowed3").jqGrid('getDataIDs');
		for(i=0;i<ids.length;i++){
				jQuery("#rowed3").jqGrid('saveRow',ids[i]);
			}
		var gridData = jQuery("#rowed3").getRowData();
		var postData = JSON.stringify(gridData);
		postData='{"id":'+postData+'}';
		if(postData=="")
			postData="undefined";
		postData=$.parseJSON(postData);
		$.post('resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=controller&xoa='+ $("#_xoa").val()+'&hienmaloi=a',postData).done(function(data){
		$("#rowed3").jqGrid('setGridParam',{url:'resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_ketquado&tu_ngay='+ $( '#from_day' ).val()+'&den_ngay='+$( '#to_day' ).val(),datatype:'json'}).trigger('reloadGrid');
		})//$.post
		
	});
	
	$("#intheongay").click(function(){
		$("#_mauin").val(1);
		$(".btnSave").focus();
	});
	$("#intheothang").click(function(){
		$("#_mauin").val(2);
		$(".btnSave").focus();
	});
	$("#_mauin").keyup(function(){
		var _vl=$("#_mauin").val();	
		if(_vl==1){
			$("#intheongay").click();
			$("#intheongay").focus();
			}else if(_vl==2){
				$("#intheothang").click();
				$("#intheothang").focus();
				}
	});
	
	$( "#dialog-print" ).dialog({
	  autoOpen: false,
      modal: true,
      buttons: {
        Ok: function(){
          $( this ).dialog( "close" );
		  var _vl=$("#_mauin").val();	
		  if(_vl==1){
			  dialog_report("Xem trước khi in",90,90,"u78787878975f","resource.php?module=report&view=<?=$modules?>&action=sotheodoinhietdo_doam&mauin=1&tu_ngay="+ $( "#from_day" ).val()+"&den_ngay="+$("#to_day").val()+"&type=report&id_form=10",'InSoTheoDoiNhietDo');	
			
        }else if(_vl==2){
				dialog_report("Xem trước khi in",90,90,"u78787878975f","resource.php?module=report&view=<?=$modules?>&action=sotheodoinhietdo_doam&mauin=2&tu_ngay="+ $( "#from_day" ).val()+"&den_ngay="+$("#to_day").val()+"&type=report&id_form=10",'InSoTheoDoiNhietDo');
			}
      }
	  }
    })
	.dialog("widget")
	.find(".ui-dialog-buttonset button")
	.eq(0).addClass("btnSave").end()
	$("#insotheodoi").click(function(){
	$( "#dialog-print" ).dialog("open");	
	});
	
	


	});// end ready
	$(window).resize(function() {		 
	$("#panel_main").css("height",$(window).height()+"px");			 
	$("#panel_main").fadeIn(1000); 
	resize_control();
});
	
	function create_grid() {
      mydata=[];
        $("#rowed3").jqGrid({
            data: mydata,
            datatype: "local",
            colNames: ['Ngày giờ đo','Người đo', 'Nhiệt độ', 'Độ ẩm', 'Ghi chú','Lưu','Sửa','ID_TheoDoiNhietDo','TBNhietDo','TBDoAm'],
            colModel: [
               // {name: 'NgayGioDo', index: 'NgayGioDo', search: false, width: "20%", editable: true, align: 'left', hidden: false,classes:'abc'},
				{name: 'NgayGioDo', index: 'NgayGioDo', search: false, width: "20%", editable: true, align: 'center', hidden: false,classes:'giodo',editoptions: { dataEvents: [{ type: 'change', fn: function(e) {
					var row = $(e.target).closest('tr.jqgrow');
					var rowId = row.attr('id');
					$("#rowed3").jqGrid('setCell',rowId,'Sua', '2');
				}
				}]}},
				
				{name: 'NguoiDo', index: 'NguoiDo', search: true, width: "35%",  align: 'left', hidden: false,formatter:"select",edittype:"select",editoptions: { value: nguoithuchien}, edittype: "text"},
				{name: 'NhietDo', index: 'NhietDo', search: false, width: "10%", editable: true, align: 'center', hidden: false,editoptions: { dataEvents: [{ type: 'change', fn: function(e) {
					var row = $(e.target).closest('tr.jqgrow');
					var rowId = row.attr('id');
					$("#rowed3").jqGrid('setCell',rowId,'Sua', '2');
				}
				}]}},
				{name: 'DoAm', index: 'DoAm', search: false, width: "10%", editable: true, align: 'center', hidden: false,editoptions: { dataEvents: [{ type: 'change', fn: function(e) {
					var row = $(e.target).closest('tr.jqgrow');
					var rowId = row.attr('id');
					$("#rowed3").jqGrid('setCell',rowId,'Sua', '2');
				}
				}]}},
				{name: 'GhiChu', index: 'GhiChu', search: false, width: "20%", editable: true, align: 'center', hidden: false,editoptions: { dataEvents: [{ type: 'change', fn: function(e) {
					var row = $(e.target).closest('tr.jqgrow');
					var rowId = row.attr('id');
					$("#rowed3").jqGrid('setCell',rowId,'Sua', '2');
				}
				}]}},
				{name: 'Luu', index: 'Luu', search: false, width: "20%", editable: false, align: 'center', hidden: true},
				{name: 'Sua', index: 'Sua', search: false, width: "20%", editable: false, align: 'center', hidden: true},
				{name: 'ID_TheoDoiNhietDo', index: 'ID_TheoDoiNhietDo', search: false, width: "20%", editable: false, align: 'center', hidden: true},
				{name: 'TBNhietDo', index: 'TBNhietDo', search: false, width: "10%", editable: false, align: 'center', hidden: true},
				{name: 'TBDoAm', index: 'TBDoAm', search: false, width: "10%", editable: false, align: 'center', hidden: true},
            ],
           loadonce: true,
            scroll: 1,
            modal: true,
            rowNum: 3000,
            rowList: [30, 50, 70],
            pager: '#prowed3',
            //sortname: 'NgayGioKetThuc',
            height: 100,
            width: 100,
            viewrecords: true,
            ignoreCase: true,
            shrinkToFit: true,
			
			afterShowForm : function (formid) {
				xuongdong(formid);
				lendong(formid);
			},
            onSelectRow: function(id) {
				
            },
            ondblClickRow: function(rowId, rowIndex, columnIndex) {
            
            },
            onselect: function(rowId, rowIndex, columnIndex) {
				 
              
            },
        
            loadComplete: function(data) {
				var	nd=0;
				var	da=0;
				var tmp1 = $("#rowed3").jqGrid('getDataIDs'); 
				$("#rowed3").jqGrid("setSelection",tmp1[0], true);
				for(var i=0;i<tmp1.length;i++){
					jQuery('#rowed3').editRow(tmp1[i], true);
					$('#'+tmp1[i]+'_NgayGioDo').datetimeEntry({datetimeFormat: 'H:M D/O/y',spinnerImage: ''});
					nd=nd+parseInt($('#'+tmp1[i]+'_NhietDo').val());
					da=da+parseInt($('#'+tmp1[i]+'_DoAm').val());
					
				}
				tbnd=nd/tmp1.length;
				tbda=da/tmp1.length;
				//alert(tmp1.length);
				if(tmp1.length>0){
					$("#nhietdo").val(	Math.round(tbnd));
					$("#doam").val(	Math.round(tbda));
				}else{
					$("#nhietdo").val(0);
					$("#doam").val(0);
					}
				draw_chart_chitiet();
				draw_chart_theothang();
			 
			},
            //caption: "&nbsp;"
        });
		//$("#rowed3").jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false,defaultSearch:"cn"});
		$("#rowed3").jqGrid('bindKeys', {});
    }
	
function resize_control(){
	$("#main_bottom").css("width",$("#panel_main").width()-10+"px"); 
	$("#main_bottom").css("height",$(window).height()-50+"px");
	$(".n_trai").css("width",$("#main_bottom").width()-$(".n_phai").width()-5+"px");
	$(".n_trai").css("height",$("#main_bottom").height()+"px");
	$(".n_phai").css("height",$("#main_bottom").height()-10+"px");
	$("#rowed3 ").setGridWidth($('.n_trai').width()-10);
	$("#rowed3 ").setGridHeight($('.n_trai').height()-105);
	$(".dauhieusinhton").css("height",$(".n_tren").height()-10+"px");
	$("svg").css("height",$(".dauhieusinhton").height()-10+"px");
	draw_chart_chitiet();
	draw_chart_theothang();
}

function load_nguoithuchien(){
	window.nguoithuchien = $.ajax({url: "resource.php?module=web_services&function=get_auto_edit_hovaten&action=index", async: false, success: function(data, result) {if (!result) alert('Không load được danh mục nhân viên');}}).responseText;	
}
function draw_chart_chitiet(){
	t=setTimeout(function(){
	$(".n_tren").empty();
	//$(".left_col").removeClass("dauhieusinhton");	
	$(".n_tren").append('<div class="diengiai_sinhton"><div id="idnhietdo"></div>Nhiệt độ<div id="iddoam"></div>Độ ẩm  </div><div style="height:5px"></div><div class="dauhieusinhton" id="dauhieusinhton" style="width:90%; margin-left:5px;"></div>');	
    // alert($("#inner-top").height());
	//$(".diengiai").css("height",
	$(".dauhieusinhton").css("height",($(".n_tren").height()-20)+"px");
	$(".dauhieusinhton").css("width",($(".n_tren").width()-16)+"px");	
	$(".diengiai_sinhton").css("top","4px");
	$(".diengiai_sinhton").css("position","relative");
	$(".diengiai_sinhton").css("left",$(".dauhieusinhton").width()-100+"px");
		//alert($(".dauhieusinhton").height());	
		chart_chitiet();		 
		clearTimeout(t);		 
	},100);		
}
function draw_chart_theothang(){	 
	d=setTimeout(function(){
	$(".n_duoi").empty();
	$(".n_duoi").append('<div class="diengiai_thetrang"><div id="idnhietdo2"></div>Nhiệt độ<div id="iddoam2"></div>Độ ẩm</div><div style="height:5px"></div><div class="thetrang" id="thetrang" style="width:90%;margin-left:5px;"></div>');	 
	$(".thetrang").css("height",($(".n_duoi").height()-20)+"px");
	$(".thetrang").css("width",($(".n_duoi").width()-16)+"px");	 
	$(".diengiai_thetrang").css("top","7px");
	$(".diengiai_thetrang").css("position","relative");
	$(".diengiai_thetrang").css("left",$(".dauhieusinhton").width()-102+"px");			
		chart_theothang();	
		clearTimeout(d);		 
	},100);			
}

 	dojo.require("dijit.form.HorizontalSlider");	 
	dojo.require("dijit.form.HorizontalRule");
	dojo.require("dijit.form.HorizontalRuleLabels");
	dojo.require("dojox.charting.Chart2D");
	dojo.require("dojox.charting.plot2d.Lines");//charting/plot2d/Lines
	dojo.require("dojox.charting.plot2d.Markers");						
	dojo.require("dojox.charting.themes.Midwest");
	dojo.require("dojox.lang.functional.object");
 
function chart_chitiet  (){
    // When the DOM is ready and resources are loaded...
 
    // Define the data
	
 	var chartData =[];
	var chartData1 =[];
	var labelx=[];
	var nhietdo=0;
	var doam=0;
	var tmp1 = $("#rowed3").jqGrid('getDataIDs');	 
	for(var i=0;i < tmp1.length;i++){ 
		nhietdo=$("#"+tmp1[i]+"_NhietDo").val();
		doam=$("#"+tmp1[i]+"_DoAm").val();
		if( nhietdo==""){
			nhietdo=0;
		}
		if(doam==""){
			doam=0;
		}
		chartData.push(parseInt(nhietdo));
		chartData1.push(parseInt(doam));
		labelx.push({value:(i+1), text:$("#"+tmp1[i]+"_NgayGioDo").val()});		
	}
	// Create the chart within it's "holding" node
	var theme = dojox.charting.themes.Midwest;
	var chart = new dojox.charting.Chart2D("dauhieusinhton");
    //theme.setMarkers({ "CIRCLE":  "m-5,-5 l0,10 10,0 0,-10 z",  });
 	/*theme.setMarkers({ 
                SQUARE:   "m-5,-5 l0,10 10,0 0,-10 z", 
 
       
	}); */
    // Set the theme
    chart.setTheme(theme);
	
    // Add the only/default plot
    chart.addPlot("default", {
        type: "Lines",
        markers: true,
		fill: "red",
		stroke: {color:"red"},
		animate: {duration: 300}
    });
  	chart.addPlot("DoAm", {
        type: "Lines",
        markers: true,
		fill: "#ff8a00",
		stroke: {color:"#ff8a00"},
		animate: {duration: 300}
    });
    // Add axes
	
  	var maxY =[chartData.max(),chartData1.max()];  	
    chart.addAxis("y", { min: 0, max: maxY.max(), vertical: true, });   
	chart.addAxis("x", {            
            includeZero: false, 
            labels: labelx,
            rotation:90
        }
            );
	
	
 
    // Add the series of data
    chart.addSeries("Nhiệt độ",chartData);
 	chart.addSeries("Độ ẩm", chartData1, {plot: "DoAm"});
    // Render the chart!
    chart.render();
	remove_text  ();
  
};

function chart_theothang(){
    // When the DOM is ready and resources are loaded...
 
    // Define the data
	
 	var chartData =[];
	var chartData1 =[];
	var labelx=[];
	var nhietdo2=0;
	var doam2=0;
	var thangnam="";
	var ngaygio="";
	var ngaythang="";
	var tmp1 = $("#rowed3").jqGrid('getDataIDs');
	var tn= [];
	var n_do=[];
	var d_am=[];
	var d=0;
	for(var j=0;j < tmp1.length;j++){
		
		ngaygio=$("#"+tmp1[j]+"_NgayGioDo").val().split(' ');
		ngaythang=ngaygio[1].split('/');
		thangnam=ngaythang[1]+'/'+ngaythang[2];
		var rowData = jQuery('#rowed3').getRowData(tmp1[j]);
		if(tn.length==0){
			tn.push(thangnam);
			n_do.push(rowData['TBNhietDo']);
			d_am.push(rowData['TBDoAm']);
		}else{
			for(var l=0;l < tn.length;l++){
				if(tn[l]==thangnam){
					d=1;
				}
			}
			if(d==0){
				tn.push(thangnam);
				n_do.push(rowData['TBNhietDo']);
				d_am.push(rowData['TBDoAm']);
			}
		}
		
		d=0;
	}
	for(var k=0;k < tn.length;k++){
		chartData.push(parseInt(n_do[k]));
		chartData1.push(parseInt(d_am[k]));
		labelx.push({value:(k+1), text:tn[k]});
	}
	
    // Create the chart within it's "holding" node
	var theme = dojox.charting.themes.Midwest;
	var chart = new dojox.charting.Chart2D("thetrang");
    //theme.setMarkers({ "CIRCLE":  "m-5,-5 l0,10 10,0 0,-10 z",  });
 	/*theme.setMarkers({ 
                SQUARE:   "m-5,-5 l0,10 10,0 0,-10 z", 
 
       
	}); */
    // Set the theme
    chart.setTheme(theme);
	
    // Add the only/default plot
    chart.addPlot("default", {
        type: "Lines",
        markers: true,
		fill: "red",
		stroke: {color:"red"},
		animate: {duration: 300}
    });
  	chart.addPlot("CanNang", {
        type: "Lines",
        markers: true,
		fill: "#ff8a00",
		stroke: {color:"#ff8a00"},
		animate: {duration: 300}
    });
    // Add axes
	var maxY =[chartData.max(),chartData1.max()];  	
    chart.addAxis("y", { min: 0, max: maxY.max(), vertical: true, });
	chart.addAxis("x", {            
            includeZero: false, 
            labels: labelx,
            rotation:90
    });
	
 
 
    // Add the series of data
    chart.addSeries("chieucao",chartData);
 	chart.addSeries("cannang", chartData1, {plot: "CanNang"});
    // Render the chart!
    chart.render();
	remove_text  ();
  
};

function remove_text  (){
	$( "text:contains('1.')" ).remove();
	$( "text:contains('2.')" ).remove();
	$( "text:contains('3.')" ).remove();
	$( "text:contains('4.')" ).remove();
	$( "text:contains('5.')" ).remove();
	$( "text:contains('6.')" ).remove();
	$( "text:contains('7.')" ).remove();
	}
</script>