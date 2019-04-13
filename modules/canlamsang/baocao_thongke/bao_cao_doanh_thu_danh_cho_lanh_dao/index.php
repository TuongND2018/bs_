<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<script type="text/javascript" src="../giaidoan2/js/dojo/dojo/dojo.js" data-dojo-config="async: true, parseOnLoad: true"></script>
<style type="text/css">
.dojoxLegendNode {border: 1px solid #ccc; margin: 5px 10px 5px 10px; padding: 3px}
.dojoxLegendText {vertical-align: text-top; padding-right: 10px}
.ui-jqgrid tr.myfootrow td {
    font-weight: bold;
    overflow: hidden;
    white-space:nowrap;
    height: 21px;
    padding: 0 2px 0 2px;
    border-top-width: 1px;
    border-top-color: inherit;
    border-top-style: solid;
} /*footer row modding*/
body{
	/*overflow:auto!important;*/
	height:115%;
	width:1300px;		
}
#tabs .ui-tabs-panel {  
	height: 85%;
}
#tabs .ui-tabs-nav li {
    font-size: 90%;
	margin-top: 0.1em;	
}
.panel_form{
	margin-left:10px;
	
}
.colored{
	background-color:#D5EAFF;
	color:black;
	}
.colored2{
	background-color:#FFFFC4;
	color:black;
	}
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
</style>
<body>
	<fieldset class="ui-widget ui-widget-content ui-corner-all ui-resizable panel_form" style="width:97.5%;;margin-top:0px">
    	<div style="display:inline-block">
        	<label style="margin-left:30px;font-weight:bold">Thời gian: từ ngày </label> 
            <input type="text" id="tungay" value="<?php echo date("d/m/YY") ?>" style="text-align:center;width:60px"/>
            <label  style="font-weight:bold"> đến ngày </label> 
            <input type="text" id="denngay" value="<?php echo date("d/m/YY") ?>" style="text-align:center;width:60px"/>
        </div>
        <div style="margin-left:10px;display:inline-block" id="xemtheo_control">
        	<label style="font-weight:bold"> Xem theo </label> 
            <select id="xemtheo_option">
                  <option value="ngay" selected="selected" text="Ngày">Ngày</option>
                  <option value="thang" text="Tháng">Tháng</option>
                  <option value="quy" text="Tháng">Quý</option>
                  <option value="nam" text="Tháng">Năm</option>
            </select>
        </div>  
        <div style="display:inline-block">
        	<button style="margin-left:10px" id='xem'>Xem</button>
            <button style="margin-left:5px" id='xuat_excel'>Xuất Excel</button>
        </div> 
         <div style="display:inline-block;float:right">
        	<b>ĐVT: 1,000 đồng</b>
        </div>  
        
  	</fieldset> 
	<div id="tabs" style="margin-left:10px; height:95%; width:1290px;">
              <ul style="margin-left:5px; border-bottom:1px solid #CCC">
                
                <li><a href="#tabs-1" id="tab1_click">Doanh thu tổng hợp</a></li> 
                 <li><a href="#tabs-2" onclick="loadtab2()" id="tab2_click">Chi tiết theo ngày</a></li> 
                <li><a href="#tabs-3" onclick="loadtab3()" id="tab3_click">Biểu đồ doanh thu tổng hợp</a></li>    
              </ul>
             <!-- <div style="border-bottom:1px solid #000"></div>-->
              
               <div id="tabs-1" > 
                	 <div  class="rowed3">
                        <table id="rowed3">
                        </table>
					 </div>   
              </div>	 
               <div id="tabs-2"> 
                 <div  class="rowed4">
                        <table id="rowed4">
                        </table>
				 </div>  
              </div>
              <!--<div id="tabs-3_" >
              		<label style="font-size:25px">Biểu đồ doanh thu theo tháng</label><br />
                    <div id="chart_" style="width: 1000px; height: 400px; display:inline-block"></div>
                    <div id="legend" ></div>
              </div>-->
              
              <div id="tabs-3">
                    <table id="chart_">
                    	<tr>
                        	<td>
                            	<div data-dojo-type="dojox.charting.widget.Chart" id="chart1" style="width: 1100px; height: 460px;display:inline-block">
</div>						</td>
							<td valign="top">
                            	<div id="legend_"></div>
                            </td>
                        </tr>
                    </table>
			 </div>
              
            
	</div>       
</body>
</html>
<script type="text/javascript">
var tab_selected=1;//dùng để điều khiển nút "Xem" khi chọn các tab khác nhau
var random_data;
$(document).ready(function() {
	//alert(tab_selected);
	 $("#xem").button();
	 $("#xuat_excel").button();
	openform_shortcutkey();
	create_grid();
	jQuery(window).resize(function() {		 
		$("#rowed3").setGridWidth($(window).width()-55);
		$("#rowed3").setGridHeight($(window).height()-260);
	});
	jQuery(window).resize(function() {		 
		$("#rowed4").setGridWidth($(window).width()-55);
		$("#rowed4").setGridHeight($(window).height()-275);
	});
	$.dateEntry.setDefaults({spinnerImage: ''});
	 $("#tungay,#denngay").dateEntry({dateFormat:$.cookie("ngayDateEntry")});
	 $("#tungay,#denngay").datepicker({
           showWeek: true,
							defaultDate: "+1w",
							changeMonth: true,
							changeYear: true,
							numberOfMonths: 1,
							dateFormat:  $.cookie("ngayJqueryUi"),
            onClose: function(selectedDate) {
               
            },
            onSelect: function(dat, inst) {
                 
            }
        });
	window.opentab2=0;
	window.opentab3=0;
	
	$( "#tabs" ).tabs({		
		/*heightStyle:"fill"  */		 
	});
		
	 $( "#tab1_click").click(function(){
		  $( "#xemtheo_control" ).show();
		  tab_selected=1;
		});
	 $( "#tab2_click" ).click(function(){
		  $( "#xemtheo_control" ).hide();
		  tab_selected=2;
		 });
	$( "#tab3_click").click(function(){
		  $( "#xemtheo_control" ).show();
		  tab_selected=3;
		});
	$("#xuat_excel").click(function(){
		//alert($("#xemtheo_option option:selected").text());
	})
	var click_t3=0;
	$( "#xem").click(function(){
		
		if(tab_selected==1){
			//alert($( "#xemtheo_option").val());
			jQuery("#rowed3").jqGrid('setGridParam',{url:'resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_doanhthutonghop',datatype:'json'}).trigger("reloadGrid");
			setTimeout(function(){
				$("#jqgh_rowed3_xemtheo").text($("#xemtheo_option option:selected").text());
				localData = $("#rowed3").jqGrid("getGridParam", "data");
				totalRows = localData.length;
				if (totalRows!=0){
					$("#rowed3").jqGrid('setCaption', 'Kết quả: '+ totalRows+ " bản ghi");
					}
			},200);
		}//sự kiện cho lưới ở tab 1
		else{
				if(tab_selected==2){
					jQuery("#rowed4").jqGrid('setGridParam',{url:'resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_doanhthutheongay',datatype:'json'}).trigger("reloadGrid");
				}//sự kiện cho lưới ở tab 2
				else{
					click_t3++;
					
					$("#chart_").remove();
					$("#tabs-3").append(
						'<table id="chart_">'+
                    	'<tr>'+
                        	'<td>'+
                            	'<div data-dojo-type="dojox.charting.widget.Chart" id="chart1" style="width: 1100px; height: 460px;display:inline-block">'+
								'</div>'+						
							'</td>'+
							'<td valign="top">'+
                            	'<div id="legend"></div>'+
                            '</td>'+
                       ' </tr>'+
                    '</table>'
					);
					$.getJSON( "resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_bieudo", function( data ) {
					var tencot=[]; var chiphi=[]; var loinhuan=[];
					$.each( data, function( key, val ) {
						for(i=0;i<val.length;i++){
							tencot[i]=val[i]['cell'][1];
							chiphi[i]=val[i]['cell'][2];
							loinhuan[i]=val[i]['cell'][3];
						}
					})
		
						setTimeout(function() {
      						create_chart(tencot,chiphi,loinhuan);// Do something after x seconds
						}, 200);
					});
				}//sự kiện tải biểu đồ ở tab 3
			}
	})
	
	 
})

function loadtab2(){
	if(window.opentab2==0){
      	create_grid2();
	   	window.opentab2=1;
	}
}
function loadtab3(){
	if(window.opentab3==0){
       //create_chart();
	   	window.opentab3=1;
	}
}

function create_grid(){	
	 $("#rowed3").jqGrid({
		url:'',
		datatype: "json",	
		colNames:['ID',"Xem theo",'Phí thực hiện \n(1)',"Phí chỉ định\n(2)",'Phí hoàn tất\n(3)','Chi phí khác\n(4)','Giá vốn thuốc\n(5)','Phí thuê ngoài\n(6)','Tổng chi phí\n(7)','Quota\n(8)','Coupon\n(9)','Hủy chỉ định\n(10)','Thuốc trả lại\n(11)','Tổng giảm doanh thu\n(12)','Khám\n(13)','Điều trị\n(14)','Thuốc\n(15)','Tổng doanh thu\n(16)','Lợi nhuận ròng\n(17)','Nợ cũ\n(18)','Nợ lượt\n(19)','Nợ mới\n(20)','Thực thu\n(21)','Lợi nhuận không tính nợ\n(22)'],
		colModel:[
			{name:'id',index:'id',search:false, width:"1%", editable:false,align:'right',hidden:true}, 
			{name:'xemtheo',index:'xemtheo', width:"5%", editable:false,align:'center',hidden:false},
			{name:'phithuchien',index:'phithuchien', width:"5%", editable:false,align:'right',hidden:false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: ""}},
			{name:'phichidinh',index:'phichidinh', width:"5%", editable:false,align:'right',hidden:false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: ""}},
			{name:'phihoantat',index:'phihoantat', width:"5%", editable:false,align:'right',hidden:false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: ""}},
			{name:'chiphikhac',index:'chiphikhac', width:"5%", editable:false,align:'right',hidden:false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: ""}},
			{name:'giavonthuoc',index:'giavonthuoc', width:"5%", editable:false,align:'right',hidden:false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: ""}},
			{name:'phithuengoai',index:'phithuengoai', width:"5%", editable:false,align:'right',hidden:false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: ""}},
			{name:'tongchiphi',classes:'colored',index:'tongchiphi', width:"5%", editable:false,align:'right',hidden:false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: ""}},
			{name:'quota',index:'quota', width:"5%", editable:false,align:'right',hidden:false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: ""}},
			{name:'coupon',index:'coupon', width:"5%", editable:false,align:'right',hidden:false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: ""}},
			{name:'huychidinh',index:'huychidinh', width:"5%", editable:false,align:'right',hidden:false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: ""}},
			{name:'thuoctralai',index:'thuoctralai', width:"5%", editable:false,align:'right',hidden:false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: ""}},
			{name:'tonggiamdoanhthu',classes:'colored',index:'tonggiamdoanhthu', width:"5%", editable:false,align:'right',hidden:false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: ""}},
			{name:'kham',index:'kham', width:"5%", editable:false,align:'right',hidden:false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: ""}},
			{name:'dieutri',index:'dieutri', width:"5%", editable:false,align:'right',hidden:false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: ""}},
			{name:'thuoc',index:'thuoc', width:"5%", editable:false,align:'right',hidden:false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: ""}},
			{name:'tongdoanhthu',classes:'colored',index:'tongdoanhthu', width:"5%", editable:false,align:'right',hidden:false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: ""}},
			{name:'loinhuanrong',classes:'colored2',index:'loinhuanrong', width:"5%", editable:false,align:'right',hidden:false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: ""}},
			{name:'nocu',index:'nocu', width:"5%", editable:false,align:'right',hidden:false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: ""}},
			{name:'noluot',index:'noluot', width:"5%", editable:false,align:'right',hidden:false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: ""}},
			{name:'nomoi',index:'nomoi', width:"5%", editable:false,align:'right',hidden:false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: ""}},
			{name:'thucthu',classes:'colored',index:'thucthu', width:"5%", editable:false,align:'right',hidden:false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: ""}},
			{name:'loinhuankhongtinhno',classes:'colored2',index:'loinhuankhongtinhno', width:"5%", editable:false,align:'right',hidden:false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: ""}},
				 
		],
	//

		loadonce: true,
		scroll: false,	
		//rownum = false,
		//treeGrid = false,	 
		modal:true,	 	
		rowNum: 100,
		gridview: true,
		pginput:false,
		pgbuttons:false,
		rowList:[],
		viewrecords: true,	
		ignoreCase:true,
		shrinkToFit:true,
		grouping: false,
		stringResult:true,
		//sortorder: "asc",
		footerrow: true,
		
	//hoverrows:false,
	//jsonReader:{repeatitems:true,subgrid:{repeatitems:false}},	
		
		serializeRowData: function (postdata) { 		 	
			
		},
		onSelectRow: function(id){		  
		},
		ondblClickRow: function (rowId, rowIndex, columnIndex) {
		
 		},
		loadComplete: function(data) {
			
			 var $this = $(this),
			//sum = $this.jqGrid("getCol", "amount", false, "sum"),
			$footerRow = $(this.grid.sDiv).find("tr.footrow"),
			localData = $this.jqGrid("getGridParam", "data"),
			totalRows = localData.length,
			totalSum = 0,
			$newFooterRow,
			i;
			$newFooterRow = $(this.grid.sDiv).find("tr.myfootrow");
			if ($newFooterRow.length === 0) {
				// add second row of the footer if it's not exist
				$newFooterRow = $footerRow.clone();
				$newFooterRow.removeClass("footrow")
					.addClass("myfootrow ui-widget-content");
				$newFooterRow.children("td").each(function () {
					this.style.width = ""; // remove width from inline CSS
				});
				$newFooterRow.insertAfter($footerRow);
				$newFooterRow.find(">td[aria-describedby=" + this.id + "_xemtheo]")
        .text("TB");
				$newFooterRow.find(">td[aria-describedby=" + this.id + "_giavonthuoc]")
        .text(formatMoney(Math.floor($("#rowed3").jqGrid('getCol', 'giavonthuoc', false, 'sum')/totalRows)));
				$newFooterRow.find(">td[aria-describedby=" + this.id + "_phithuengoai]")
        .text(formatMoney(Math.floor($("#rowed3").jqGrid('getCol', 'phithuengoai', false, 'sum')/totalRows)));
				$newFooterRow.find(">td[aria-describedby=" + this.id + "_tongchiphi]")
        .text(formatMoney(Math.floor($("#rowed3").jqGrid('getCol', 'tongchiphi', false, 'sum')/totalRows)));
				$newFooterRow.find(">td[aria-describedby=" + this.id + "_quota]")
        .text(formatMoney(Math.floor($("#rowed3").jqGrid('getCol', 'quota', false, 'sum')/totalRows)));
				$newFooterRow.find(">td[aria-describedby=" + this.id + "_coupon]")
        .text(formatMoney(Math.floor($("#rowed3").jqGrid('getCol', 'coupon', false, 'sum')/totalRows)));
				/*$newFooterRow.find(">td[aria-describedby=" + this.id + "_giavonthuoc]")
        .text(formatMoney(Math.floor($("#rowed3").jqGrid('getCol', 'giavonthuoc', false, 'sum')/totalRows)));
				$newFooterRow.find(">td[aria-describedby=" + this.id + "_giavonthuoc]")
        .text(formatMoney(Math.floor($("#rowed3").jqGrid('getCol', 'giavonthuoc', false, 'sum')/totalRows)));
				$newFooterRow.find(">td[aria-describedby=" + this.id + "_giavonthuoc]")
        .text(formatMoney(Math.floor($("#rowed3").jqGrid('getCol', 'giavonthuoc', false, 'sum')/totalRows)));
				$newFooterRow.find(">td[aria-describedby=" + this.id + "_giavonthuoc]")
        .text(formatMoney(Math.floor($("#rowed3").jqGrid('getCol', 'giavonthuoc', false, 'sum')/totalRows)));
				$newFooterRow.find(">td[aria-describedby=" + this.id + "_giavonthuoc]")
        .text(formatMoney(Math.floor($("#rowed3").jqGrid('getCol', 'giavonthuoc', false, 'sum')/totalRows)));
				$newFooterRow.find(">td[aria-describedby=" + this.id + "_giavonthuoc]")
        .text(formatMoney(Math.floor($("#rowed3").jqGrid('getCol', 'giavonthuoc', false, 'sum')/totalRows)));
				$newFooterRow.find(">td[aria-describedby=" + this.id + "_giavonthuoc]")
        .text(formatMoney(Math.floor($("#rowed3").jqGrid('getCol', 'giavonthuoc', false, 'sum')/totalRows)));*/
			}
			
			$("#rowed3").jqGrid('footerData', 'set', {'xemtheo':'Cộng', 
													 'giavonthuoc': $("#rowed3").jqGrid('getCol', 'giavonthuoc', false, 'sum'),
													 'phithuengoai': $("#rowed3").jqGrid('getCol', 'phithuengoai', false, 'sum'),
													 'tongchiphi': $("#rowed3").jqGrid('getCol', 'tongchiphi', false, 'sum'),
													 'quota': $("#rowed3").jqGrid('getCol', 'quota', false, 'sum'),
													 'coupon': $("#rowed3").jqGrid('getCol', 'coupon', false, 'sum'),
													 'huychidinh': $("#rowed3").jqGrid('getCol', 'huychidinh', false, 'sum'),
													 'thuoctralai': $("#rowed3").jqGrid('getCol', 'thuoctralai', false, 'sum'),
													 'tonggiamdoanhthu': $("#rowed3").jqGrid('getCol', 'tonggiamdoanhthu', false, 'sum'),
													 'kham': $("#rowed3").jqGrid('getCol', 'kham', false, 'sum'),
													 'dieutri': $("#rowed3").jqGrid('getCol', 'dieutri', false, 'sum'),
													 'thuoc': $("#rowed3").jqGrid('getCol', 'thuoc', false, 'sum'),
													 'tongdoanhthu': $("#rowed3").jqGrid('getCol', 'tongdoanhthu', false, 'sum'),
													 'loinhuanrong': $("#rowed3").jqGrid('getCol', 'loinhuanrong', false, 'sum'),
													 'nocu': $("#rowed3").jqGrid('getCol', 'nocu', false, 'sum'),
													 'noluot': $("#rowed3").jqGrid('getCol', 'noluot', false, 'sum'),
													 'nomoi': $("#rowed3").jqGrid('getCol', 'nomoi', false, 'sum'),
													 'thucthu': $("#rowed3").jqGrid('getCol', 'thucthu', false, 'sum'),
													 'loinhuankhongtinhno': $("#rowed3").jqGrid('getCol', 'loinhuankhongtinhno', false, 'sum')});
		},	
		caption: "Kết quả"
		
	});	
		//$("#rowed3").jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false,defaultSearch:"cn"});//bộ search
	
	$("#rowed3").setGridWidth($(window).width()-55);
	$("#rowed3").setGridHeight($(window).height()-260);
	 jQuery("#rowed3").jqGrid('setGroupHeaders',
                    {useColSpanStyle: true, groupHeaders:
                                [
									{startColumnName: 'xemtheo', numberOfColumns: 1, titleText: '<b >Xem theo</b>'},
                                    {startColumnName: 'phithuchien', numberOfColumns: 6, titleText: '<b> Chi phí</b>'},
									{startColumnName: 'quota', numberOfColumns: 4, titleText: '<b>Giảm doanh thu</b>'},
									{startColumnName: 'kham', numberOfColumns: 3, titleText: '<b>Doanh thu</b>'},
									{startColumnName: 'nocu', numberOfColumns: 5, titleText: '<b>Quản trị</b>'},
								]
					}
	);
            //
	
	//$("#rowed3").jqGrid("footerData", "set", {invdate: "Total (page):", amount: sum});
	$("#rowed3").jqGrid('bindKeys', {"onEnter":function( rowid ) {
		} } );	
		$("#gbox_rowed3").attr("tabindex","1");
		//$("#gbox_rowed3").focus();	
		$("#gbox_rowed3").bind('keydown', function(e) {			
			if((jwerty.is("ctrl+m",e))){		 
				 $("#rowed3").jqGrid('restoreRow', lastsel);
				 $("#rowed3").jqGrid('editRow', rowid, true);
				 lastsel = rowid;
			}
		}) 	 
		
}

function create_grid2(){	
	 $("#rowed4").jqGrid({
		url:'',
		datatype: "json",	
		colNames:['ID',"Mã BN",'Họ lót','Tên','Ngày tính bill',"Phí thực hiện\n(1)",'Phí hoàn tất\n(2)','Phí chỉ định\n(3)','Chi phí khác\n(4)','Giá vốn thuốc\n(5)','Phí thuê ngoài\n(6)','Tổng chi phí\n(7)','Quota\n(8)','Coupon\n(9)','Hủy chỉ định\n(10)','Thuốc trả lại\n(11)','Tổng giảm doanh thu\n(12)','Khám\n(13)','Điều trị\n(14)','Thuốc\n(15)','Tổng doanh thu\n(16)','Lợi nhuận ròng\n(17)','Nợ cũ\n(18)','Nợ lượt\n(19)','Nợ mới\n(20)','Thực thu\n(21)','Lợi nhuận không tính nợ\n(22)'],
		colModel:[
			{name:'id',index:'id', width:"0%", editable:false,align:'right',hidden:true}, 
			{name:'mabn',index:'mabn', width:"4%", editable:false,align:'center',hidden:false},
			{name:'holot',index:'holot', width:"6%", editable:false,align:'left',hidden:false},
			{name:'ten',index:'ten', width:"5%", editable:false,align:'left',hidden:false},
			{name:'ngaytinhbill',index:'ngaytinhbill', width:"6%", editable:false,align:'center',hidden:false},
			{name:'phithuchien',index:'phithuchien', width:"5%", editable:false,align:'right',hidden:false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: ""}},
			{name:'phihoantat',index:'phihoantat', width:"5%", editable:false,align:'right',hidden:false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: ""}},
			{name:'phichidinh',index:'phichidinh', width:"5%", editable:false,align:'right',hidden:false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: ""}},
			{name:'chiphikhac',index:'chiphikhac', width:"5%", editable:false,align:'right',hidden:false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: ""}},
			{name:'giavonthuoc',index:'giavonthuoc', width:"5%", editable:false,align:'right',hidden:false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: ""}},
			{name:'phithuengoai',index:'phithuengoai', width:"5%", editable:false,align:'right',hidden:false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: ""}},
			{name:'tongchiphi',index:'tongchiphi', width:"5%", editable:false,align:'right',hidden:false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: ""}},
			{name:'quota',index:'quota', width:"5%", editable:false,align:'right',hidden:false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: ""}},
			{name:'coupon',index:'coupon', width:"5%", editable:false,align:'right',hidden:false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: ""}},
			{name:'huychidinh',index:'huychidinh', width:"5%", editable:false,align:'right',hidden:false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: ""}},
			{name:'thuoctralai',index:'thuoctralai', width:"5%", editable:false,align:'right',hidden:false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: ""}},
			{name:'tonggiamdoanhthu',index:'tonggiamdoanhthu', width:"5%", editable:false,align:'right',hidden:false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: ""}},
			{name:'kham',index:'kham', width:"5%", editable:false,align:'right',hidden:false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: ""}},
			{name:'dieutri',index:'dieutri', width:"5%", editable:false,align:'right',hidden:false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: ""}},
			{name:'thuoc',index:'thuoc', width:"5%", editable:false,align:'right',hidden:false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: ""}},
			{name:'tongdoanhthu',index:'tongdoanhthu', width:"5%", editable:false,align:'right',hidden:false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: ""}},
			{name:'loinhuanrong',index:'loinhuanrong', width:"5%", editable:false,align:'right',hidden:false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: ""}},
			{name:'nocu',index:'nocu', width:"5%", editable:false,align:'right',hidden:false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: ""}},
			{name:'noluot',index:'noluot', width:"5%", editable:false,align:'right',hidden:false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: ""}},
			{name:'nomoi',index:'nomoi', width:"5%", editable:false,align:'right',hidden:false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: ""}},
			{name:'thucthu',index:'thucthu', width:"5%", editable:false,align:'right',hidden:false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: ""}},
			{name:'loinhuankhongtinhno',index:'loinhuankhongtinhno', width:"5%", editable:false,align:'right',hidden:false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: ""}},
				 
		],
	//

		loadonce: true,
		scroll: false,	
		//rownum = false,
		//treeGrid = false,	 
		modal:true,	 	
		rowNum: 100,
		gridview: true,
		pginput:false,
		pgbuttons:false,
		rowList:[],
		viewrecords: true,	
		ignoreCase:true,
		shrinkToFit:true,
		grouping: false,
		stringResult:true,
		//sortorder: "asc",
		footerrow: true,
		
	//hoverrows:false,
	//jsonReader:{repeatitems:true,subgrid:{repeatitems:false}},	
		
		serializeRowData: function (postdata) { 		 	
			//$("#rowed4").trigger("reloadGrid");		
			//return postdata;
		},
		onSelectRow: function(id){		  
		  //$("#rowed4").jqGrid().setGridParam({url:'data2_tam.php?id='+lastsel}).trigger("reloadGrid");	   
		},
		ondblClickRow: function (rowId, rowIndex, columnIndex) {
			//$(".ui-icon-pencil").trigger('click'); 
 		},
		loadComplete: function(data) {	
			grid_filter_enter("#rowed4"); //enter: chuyen con tro sang o tiếp theo
			localData = $("#rowed3").jqGrid("getGridParam", "data");
			totalRows = localData.length;	
			$("#rowed4").jqGrid('footerData', 'set', {'holot': totalRows+" dòng",
													 'giavonthuoc': $("#rowed4").jqGrid('getCol', 'giavonthuoc', false, 'sum'),
													 'phithuengoai': $("#rowed4").jqGrid('getCol', 'phithuengoai', false, 'sum'),
													 'tongchiphi': $("#rowed4").jqGrid('getCol', 'tongchiphi', false, 'sum'),
													 'quota': $("#rowed4").jqGrid('getCol', 'quota', false, 'sum'),
													 'coupon': $("#rowed4").jqGrid('getCol', 'coupon', false, 'sum'),
													 'huychidinh': $("#rowed4").jqGrid('getCol', 'huychidinh', false, 'sum'),
													 'thuoctralai': $("#rowed4").jqGrid('getCol', 'thuoctralai', false, 'sum'),
													 'tonggiamdoanhthu': $("#rowed4").jqGrid('getCol', 'tonggiamdoanhthu', false, 'sum'),
													 'kham': $("#rowed4").jqGrid('getCol', 'kham', false, 'sum'),
													 'dieutri': $("#rowed4").jqGrid('getCol', 'dieutri', false, 'sum'),
													 'thuoc': $("#rowed4").jqGrid('getCol', 'thuoc', false, 'sum'),
													 'tongdoanhthu': $("#rowed4").jqGrid('getCol', 'tongdoanhthu', false, 'sum'),
													 'loinhuanrong': $("#rowed4").jqGrid('getCol', 'loinhuanrong', false, 'sum'),
													 'nocu': $("#rowed4").jqGrid('getCol', 'nocu', false, 'sum'),
													 'noluot': $("#rowed4").jqGrid('getCol', 'noluot', false, 'sum'),
													 'nomoi': $("#rowed4").jqGrid('getCol', 'nomoi', false, 'sum'),
													 'thucthu': $("#rowed4").jqGrid('getCol', 'thucthu', false, 'sum'),
													 'loinhuankhongtinhno': $("#rowed4").jqGrid('getCol', 'loinhuankhongtinhno', false, 'sum')});	 
		},	
		 
		caption: "Kết quả"
	});	
		//$("#rowed4").jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false,defaultSearch:"cn"});//bộ search

	$("#rowed4").setGridWidth($(window).width()-55);
	$("#rowed4").setGridHeight($(window).height()-275);
	 jQuery("#rowed4").jqGrid('setGroupHeaders',
                    {useColSpanStyle: true, groupHeaders:
                                [
									{startColumnName: 'mabn', numberOfColumns: 4, titleText: '<b >Bệnh nhân</b>'},
                                    {startColumnName: 'phithuchien', numberOfColumns: 6, titleText: '<b> Chi phí</b>'},
									{startColumnName: 'quota', numberOfColumns: 4, titleText: '<b>Giảm doanh thu</b>'},
									{startColumnName: 'kham', numberOfColumns: 3, titleText: '<b>Doanh thu</b>'},
									{startColumnName: 'nocu', numberOfColumns: 5, titleText: '<b>Quản trị</b>'},
								]
					}
	);
            //
	$("#rowed4").jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false,defaultSearch:"cn"});//bộ search
	$("#rowed4").jqGrid('bindKeys', {"onEnter":function( rowid ) {
		} } );	
		$("#gbox_rowed4").attr("tabindex","1");
		//$("#gbox_rowed4").focus();	
		$("#gbox_rowed4").bind('keydown', function(e) {			
			if((jwerty.is("ctrl+m",e))){		 
				 $("#rowed4").jqGrid('restoreRow', lastsel);
				 $("#rowed4").jqGrid('editRow', rowid, true);
				 lastsel = rowid;
			}
		}) 	 
		
}
function create_chart(tencot,chiphi,loinhuan){
	require(["dojox/charting/Chart", "dojox/charting/plot2d/Lines", "dojox/charting/axis2d/Default", "dojox/charting/plot2d/StackedColumns", "dojox/charting/action2d/Tooltip", "dojo/ready", "dojox/charting/widget/SelectableLegend", "dojox/charting/widget/Legend"], function(Chart, Lines, Default, StackedColumns, Tooltip, ready, SelectableLegend, Legend) {
    ready(function() {
        var chart1 = new Chart("chart1",{
      	title: "Biểu đồ doanh thu",
      	titlePos: "top",
      	titleGap: 5 ,
      	titleFont: "normal normal normal 15pt Arial",
      	titleFontColor: "#53A513"
    });
        chart1.addPlot("stackedColumnsPlot", {
            type: StackedColumns,
			gap:10
        });
		axisX_=[];
		for(i=0;i<tencot.length;i++){
			axisX_[i]={value:[i+1],text:tencot[i]}
			}
		//alertObject(axisX_);
        chart1.addAxis("x", {
    		labels: axisX_
			 
    });
        chart1.addAxis("y", {
            vertical: true,
			includeZero: true
        });
        chart1.addSeries("Chi phí", chiphi, {
            plot: "stackedColumnsPlot",
            stroke: {
                color: "blue",width:0
            },
            fill: "lightblue"
        });
        chart1.addSeries("Lợi nhuận", loinhuan, {
            plot: "stackedColumnsPlot",
            stroke: {
                color: "green",width:0
            },
            fill: "lightgreen"
        });

		new Tooltip(chart1, "stackedColumnsPlot", {
            text: function(chartItem) {
                console.debug(chartItem);
                return "Value: " + chartItem.run.data[chartItem.index] + "; Stacked Value: " + chartItem.y;
            }
        });
		//var tip = new dojox.charting.action2d.Tooltip(chart1,"stackedColumnsPlot");
        chart1.render();
		
       		new Legend({
            	chart: chart1,
            	horizontal: true,
				width:150
       		}, "legend_");
		
		//var legend = new Legend({ chart: chart1 }, "legend");
    });
});
}

/*function create_chart(){
	require(["dojo/ready", "dijit/registry", 
         "dijit/form/Button", "dijit/form/CheckBox", "dijit/form/ComboBox",
         "dojox/charting/Chart", "dojox/charting/axis2d/Default",
         "dojox/charting/plot2d/Columns", "dojox/charting/plot2d/ClusteredColumns",
         "dojox/charting/plot2d/StackedColumns", "dojox/charting/plot2d/Bars",
         "dojox/charting/plot2d/ClusteredBars", "dojox/charting/plot2d/StackedBars",
         "dojox/charting/plot2d/Areas", "dojox/charting/plot2d/StackedAreas",
         "dojox/charting/plot2d/Pie", "dojox/charting/plot2d/Grid",
         "dojox/charting/themes/Minty", "dojox/charting/widget/Legend",
         "dojox/lang/functional/sequence", "dojo/parser","dojox/charting/action2d/Tooltip"],
         function(ready, registry, Button, CheckBox, ComboBox,
        		 Chart, Default, Columns, ClusteredColumns, StackedColumns,
        		 Bars, ClusteredBars, StackedBars, Areas, StackedAreas,
        		 Pie, Grid, Minty, Legend, sequence){
			var chart, legend, size = 10, magnitude = 30;
			var data_l=[1,1,1,1.2];
			var data_2=[2,2,2,2];
			//alert();
			var makeObjects = function(){
				chart = new Chart("chart_");
				chart.setTheme(Minty);
				chart.addAxis("x", {natural: true, includeZero: false, fixUpper: "minor"});
				chart.addAxis("y", {vertical: true, natural: true, includeZero: true, fixUpper: "minor"});
				chart.addPlot("default", {type:'StackedColumns', gap: 10});
				chart.addSeries("Chi phí",data_l, {stroke: {color: "white", width: 0}});	
				chart.addSeries("Lợi nhuận",data_2, {stroke: {color: "white", width: 0}});	
				chart.render();
				legend = new Legend({chart: chart}, "legend");
				new Tooltip(chart, "stackedColumns", {
					text: function(chartItem) {
					console.debug(chartItem);
					return "Value: " + chartItem.run.data[chartItem.index] + "; Stacked Value: " + chartItem.y;
            		}
        		});
			};
			ready(makeObjects);
		 })
}*/
function formatMoney(num) {
    var p = num.toFixed(2).split(".");
    return p[0].split("").reverse().reduce(function(acc, num, i, orig) {
        return  num + (i && !(i % 3) ? "," : "") + acc;
    }, "");
}
</script>