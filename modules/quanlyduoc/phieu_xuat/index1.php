<!--<link rel="stylesheet" href="../../../css/form_css.css" type="text/css" media="screen"/>-->
<style type="text/css">
#rowed3 td{
	line-height:25px!important;
	font-size:11px!important;	   
}
 
</style>
<body> 
	<div id="grid_phong_ban">     
    <div class="ui-dialog ui-widget ui-widget-content ui-corner-all ui-front ui-draggable ui-resizable" style="width:99.5%;  box-shadow:none!important;  display: block; " >
        <div class="ui-dialog-titlebar ui-widget-header ui-corner-all ui-helper-clearfix">
             <span id="ui-id-5" class="ui-dialog-title">Thông số lịch</span>                
       </div>
      <div class="ui-jqdialog modal495535154 ui-dialog-content ui-widget-content"style="display: block; width: auto; min-height: 0px; max-height: none; height: 100%">   
          <div id="calendar_option">
                <div class="form_row">
                    <label><input type="radio"  id="year_radio" checked  value="years" name="calendar_group">Xem theo năm</label>
                    <span><select name="year" id="year"></select><input value="2013-01-01;2013-12-31" type="hidden" name="year_mask" id='year_mask'></span>
                </div><br>
                <div class="form_row">
                    <label><input type="radio" value="month" id="month_radio" name="calendar_group">Xem theo tháng</label>
                    <span><input type="text" name="month" id='month'><input type="hidden" name="month_mask" id='month_mask'></span>
                </div><br>
                <div class="form_row">
                    <label><input type="radio" value="week" id="week_radio" name="calendar_group">Xem theo tuần</label>
                    <span><input type="text" name="week" id='week'><input type="hidden" name="week_mask" id='week_mask'></span>
                </div><br>
                 <div class="form_row">
                     <label><input type="radio" id="date_range_radio" value="date_range" name="calendar_group">Xem theo ngày</label>
                     <span>
                         <input type="text" name="from_day" id='from_day'>
                         <input type="text" name="to_day" id='to_day'>
                         <input type="hidden" name="from_day_mask" id='from_day_mask'>
                         <input type="hidden" name="to_day_mask" id='to_day_mask'>
                     </span>
                 </div><br>
                 <div class="form_row">
                     <label>Phòng ban</label>
                     <span><select name="phongban" id="phongban" ></select><input type="text" style="display:none" name="text_phongban" id='text_phongban'></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a class="fm-button ui-state-default ui-corner-all fm-button-icon-left" id="sCal" href="#">Tìm kiếm<span class="ui-icon ui-icon-search"></span></a>
                 </div>
           </div>
          	 
        </div>
     
    </div>       	 
          <table id="rowed3" style="width:100%" ></table>
          <div id="prowed3"></div>   
    </div>    
</body>
</html> 

<script type="text/javascript">
jQuery(document).ready(function() {	
	var currentTime = new Date();	
	tam=parseInt(currentTime.getFullYear())+1;	 
	for(i=2013;i<=tam;i++){
		$('#year').append($('<option>', {
   			value: i,
			text: i
		})); 
	}	
	$('#year').click(function(){
		$("#"+this.id+"_radio").prop("checked", true);		 	 	  	 
	})
	$('#year').change(function(){
		year=$("option:selected", this).text();
		$("#year_mask").val(year+"-01-01;"+year+"-12-31");	 	  	 
	})
	$('#month').click(function(){		 
		 $("#"+this.id+"_radio").prop("checked", true);		 	 
	})	
	$('#week').click(function(){
		 $("#"+this.id+"_radio").prop("checked", true);
	})
	$('#to_day,#from_day').click(function(){
		$("#date_range_radio").prop("checked", true);
	})
	year_range='2013:'+tam; 	 
	$( "#month" ).datepicker({
	  changeMonth: true,
	  changeYear: true,
	  //dateFormat: "mm",
	  numberOfMonths: 4,
	  yearRange: year_range,
	  onSelect: function(dat,inst){
		//var week=$.datepicker.iso8601Week(new Date(dat));
		//$('#month').val($.datepicker.formatDate('yy',new Date(dat))+(week<10?'0':'/')+week);
		var month=$.datepicker.formatDate('mm',new Date(dat));
		var year=$.datepicker.formatDate('yy',new Date(dat));		
		var firstDay = new Date(year, month-1,1);
		var lastDay = new Date(year, month, 0);	
		firstDay1 =$.datepicker.formatDate("mm/dd/yy",firstDay);
		lastDay1 =$.datepicker.formatDate("mm/dd/yy",lastDay);	 
		$('#month').val('từ: ' + firstDay1 + ' đến: '+ lastDay1);	 
		firstDay2 =$.datepicker.formatDate("yy-mm-dd",firstDay);
		lastDay2 =$.datepicker.formatDate("yy-mm-dd",lastDay);
		$('#month_mask').val(firstDay2 + ';'+ lastDay2);
		 
	  }
	});
	
	$( "#week" ).datepicker({
      showWeek: true,
      firstDay: 1,
	  changeMonth: true,
	  changeYear: true,
	  numberOfMonths: 4,	   
	  yearRange: year_range, 
	  onSelect: function(dat,inst){
		 var week=$.datepicker.iso8601Week(new Date(dat));		 
		$('#week').val("tuần: " +(week<10?'0':'')+week + " của năm: " + $.datepicker.formatDate('yy',new Date(dat)));		 
		var date=new Date(dat);
		var date1=new Date(dat)
		var day = date.getDay() || 7;
		var day1 = date1.getDay() || 7;		 
		date.setHours(-24 * (day - 1));
		firstDay2 =$.datepicker.formatDate("yy-mm-dd",date);		 
		date1.setHours(-24 * (day1 -7));
		lastDay2 =$.datepicker.formatDate("yy-mm-dd",date1);	 
		$('#week_mask').val(firstDay2+";"+lastDay2);  
		//alert($.datepicker.formatDate('',new Date(dat))+(week<10?'0':'')+week);week_mask
      }
    });
	var fromday,today;		
    $( "#from_day" ).datepicker({
      defaultDate: "+1w",
      changeMonth: true,
	  changeYear: true,
      numberOfMonths: 4,
	  dateFormat: "yy-mm-dd",
	  yearRange: year_range, 
      onClose: function( selectedDate ) {		 
        $( "#to_day" ).datepicker( "option", "minDate", $( "#from_day_mask" ).val() );		
		fromday=$.datepicker.formatDate('dd/mm/yy',new Date(selectedDate));	
	    $( "#from_day" ).val(fromday);			
      },
	  onSelect: function(dat,inst){		
		$( "#from_day_mask" ).val(dat);  
	  }
    });
    $( "#to_day" ).datepicker({
      defaultDate: "+1w",
      changeMonth: true,
	  changeYear: true,
      numberOfMonths: 4,
	  dateFormat: "yy-mm-dd",
	  yearRange: year_range, 
      onClose: function( selectedDate ) {		  
        $( "#from_day" ).datepicker( "option", "maxDate",  $( "#to_day_mask" ).val() );
		 today=$.datepicker.formatDate('dd/mm/yy',new Date(selectedDate));
	     $( "#to_day" ).val(today);	
		 $( "#from_day" ).val(fromday);					
      },
	  onSelect: function(dat,inst){		    
		$( "#to_day_mask" ).val(dat);   
	  }
    });	
   window.phongban = $.ajax({url: 'resource.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=2&tables=DM_PhongBan&id=ID_PhongBan&name=TenPhongBan', async: false, success: function(data, result) {if (!result) alert('Không load được danh mục phòng ban');}}).responseText;
	phongban1 = phongban.split(";");
	for(i=0;i<=phongban1.length-1;i++){
		temp=phongban1[i].split(":");
		$('#phongban').append($('<option>', {
   			value: temp[0],
			text: temp[1]
		})); 
	}
	autocompleted_combobox('#phongban');	 	
	//autocompleted("#text_phongban","resource.php?module=web_services&function=get_auto_complete&action=index",2)
	$("#sCal").click(function(){
		creat_grid();
		   $("#rowed3").setGridWidth($(window).width()-15);
		   $("#rowed3").setGridHeight($(window).height()-$("#form_danh_muc_phong_ban").height()-290);
		jQuery(window).resize(function() {		 
		   $("#rowed3").setGridWidth($(window).width()-15);
		   $("#rowed3").setGridHeight($(window).height()-$("#form_danh_muc_phong_ban").height()-290);
		}); 		
	})
	
})
function creat_sub_grid(){
	$("#rowed4").jqGrid({
		url:'modules/tables/data1.php',
		datatype: "json",	
		colNames:['Id',''],
		colModel:[    
			{name:'id',index:'id', width:30, editable:false,align:'right',hidden:true}, 
			{name:'idCashier',index:'idCashier', width:80, editable:true,align:'left',edittype:"select",editoptions:{value:""}}, 
			{name:'Name',index:'Name', width:170, editable:true}, 
			{name:'Chairs',index:'Chairs', width:50, editable:true,align:'right'},
			{name:'Status',index:'Status', width:100, editable:true,align:'center',edittype:"select",editoptions:{value:""}},
		],
		rowNum:20,
		rowList:[20,30,40],
		pager: '#prowed4',
		sortname: 'Id',
		height:460,	
		viewrecords: true,	 
		sortorder: "asc",
		serializeRowData: function (postdata) {    	
			jQuery("#rowed4").trigger("reloadGrid");
			//parent.postMessage("table","<?php echo SITE;?>");
		return postdata;
		},
		onSelectRow: function(id){
			if(id && id!==lastsel){
				jQuery('#rowed4').jqGrid('restoreRow',lastsel);
				jQuery('#rowed4').jqGrid('editRow',id,true);
				lastsel=id;
			}
		},
		loadComplete: function() {
						
		},
		ondblClickRow: function (rowId, rowIndex, columnIndex) {
		  var grid = jQuery('#rowed4');
		  grid.editRow(rowId, true, function() {
			var colModel = grid.getGridParam('colModel');
			var colName = colModel[columnIndex].name;
			var input = jQuery('#' + rowId + '_' + colName);
			input.get(0).focus();
		  });	 
		},	
	 
		editurl: "modules/tables/someurl.php",
		caption: ""
	});
	
	$("#rowed4").jqGrid('navGrid',"#prowed4",{add: true, edit: false, del: true, search: false}, //options						 
							  {height:100,width:600,reloadAfterSubmit:true,url:'modules/tables/someurl.php'}, // edit options
							  {width:250,reloadAfterSubmit:true,url:'modules/tables/someurl.php'}, // add options
							  {reloadAfterSubmit:true,url:'modules/tables/someurl.php'}, // del options
							  {height:250,width:600} // search options						 
	);
}
function creat_grid(){	 
	var elem;
	var elem1=[];
	$("#calendar_option").find('input[type=radio]').each(function(idx, val,f){   
        if($(this).is(':checked')) {
		   if($(this).attr("id")=="date_range_radio"){			   
			   elem1[0]=$("#from_day_mask").val();
			   elem1[1]=$("#to_day_mask").val();
		   }else{
			   elem=($(this).attr("id")).split("_"); 
			   elem=$("#"+elem[0]+"_mask");			  
			   elem1=(elem.val()).split(";");			  
		   }
		}	   	   
  	});	 
	$('div').remove('#gbox_rowed3');									
	$('#grid_phong_ban').append($('<table id="rowed3"></table><div id="prowed3"></div>'));		
	var dateArray = getDates(new Date(elem1[0]), new Date(elem1[1]));	 
	colnames=[];
	colnames=["Tên"];
	colvalues=[];
	var mang_ngay="";
	col_span_week(elem1[0],elem1[1]);
	colvalues=[{name: 'name', index: 'name', width: 70, frozen:true,formatter: render_name }]; 
	for (i = 1; i < dateArray.length+1; i ++ ) {
		mang_ngay+=$.datepicker.formatDate("yy-mm-dd",new Date(dateArray[i-1]))+";";		 
		colnames[i]=$.datepicker.formatDate("D dd-mm-yy",new Date(dateArray[i-1]));
		colvalues[i]={name:$.datepicker.formatDate("yy-mm-dd",new Date(dateArray[i-1])),formatter: render_col,index:$.datepicker.formatDate("yy-mm-dd",new Date(dateArray[i-1])),search:false, width:120, editable:false,align:"center",hidden:false,edittype:"textarea"};	 
		/*if (i != dateArray.length - 1) {
			colnames+= ",";
			colvalues+= ",";
		}*/			
	}	
	$("#rowed3").jqGrid({
		url:'resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_lich&q=2&idphong='+$("#phongban option:selected").val()+'&from='+elem1[0]+'&to='+elem1[1]+"&mang_ngay="+mang_ngay,
		datatype: "json",	
		colNames:colnames,
		colModel:colvalues,
		loadonce: false,
		shrinkToFit: false,
		scroll: false,		 
		modal:true,	 	 
		rowNum: 30,
		rowList:[30,50,70],
		pager: '#prowed3',
		sortname: 'TenPhongBan',
		height:100,
		width:100,
		rownumbers:true,
		viewrecords: true,	
		ignoreCase:true,
		resizeStop: fixPositionsOfFrozenDivs,
	    hoverrows:false,
	//jsonReader:{repeatitems:true,subgrid:{repeatitems:false}},	
		sortorder: "asc",
		serializeRowData: function (postdata) { 		 	
			//$("#rowed3").trigger("reloadGrid");		
			//return postdata;
		},	 
		onSelectRow: function(id){		  
		  //$("#rowed4").jqGrid().setGridParam({url:'data2_tam.php?id='+lastsel}).trigger("reloadGrid");	   
		},
		beforeSelectRow: function(rowid, e) {
			return false;
		},
		ondblClickRow: function (rowId, rowIndex, columnIndex,e) {
			//alert(jQuery('#rowed3').jqGrid ('getRowData', rowId,column_name));
			  var grid = jQuery('#rowed3');			   
				var colModel = grid.getGridParam('colModel');
				var colName = colModel[columnIndex].name;	
				alert(colName)
				//alert(rowId)
				//grid.jqGrid('setCell',rowId,colName,"",'ui-state-highlight');	
			
			 
 		},
		loadComplete: function(data) {
			fixPositionsOfFrozenDivs.call(this);   	
			//$("#rowed3").setColProp('ID_PhongBanCha', { editoptions: { value: ""} });				 
		},	  
		caption: "Lịch làm việc của " + $("#phongban1").val()
	});	
	 //$("#rowed3").triggerHandler("jqGridAfterGridComplete");
	 $("#rowed3").jqGrid('setFrozenColumns');
	 $("#rowed3").bind("jqGridResizeStop", function () {
		 fixPositionsOfFrozenDivs.call(this);		 
     });
	 $("#rowed3").jqGrid('setGroupHeaders', {
	  useColSpanStyle: false, 
	  groupHeaders:window.colspan,
	});
	 
	 $("#rowed3").jqGrid({pgbuttons:false, recordtext: ''});
	 var cache_id='',cache_col='';
	 grid = $("#rowed3");
	  var cm = $("#rowed3").jqGrid('getGridParam', 'colModel');
        $("#rowed3").mouseover(function(e) {			
            var $td = $(e.target).closest('td'), $tr = $td.closest('tr.jqgrow'), rowId = $tr.attr('id'), ci;
            if (rowId) {
                ci = $.jgrid.getCellIndex($td[0]); // works mostly as $td[0].cellIndex
				if((cache_id!='')&&(cache_col!='')){					
					//$("#rowed3").jqGrid('setCell',cache_id,cache_col,"",'ui-state-default');
					//$("#"+cache_id+" td").css("color","red");							
					var iCol = getColumnIndexByName(grid,cache_col),
					tr = grid[0].rows.namedItem(cache_id), // grid is defined as grid=$("#grid_id")
					td = tr.cells[iCol];
					$(td).removeClass("ui-state-hover");				
				}                                   
				$("#rowed3").jqGrid('setCell',rowId,cm[ci].name,"",'ui-state-hover');	
				cache_id=rowId;
				cache_col=cm[ci].name;
				  // console.log('You rolled over the row with id="' + rowId + '" in the column ' + cm[ci].name);                
            }
        });
		var getColumnIndexByName = function(grid,columnName) {
		var cm = grid.jqGrid('getGridParam','colModel');
		for (var i=0,l=cm.length; i<l; i++) {
			if (cm[i].name===columnName) {
				return i; // return the index
			}
		}
		return -1;
	}
}
var fixPositionsOfFrozenDivs = function () {
        var $rows;
        if (typeof this.grid.fbDiv !== "undefined") {
            $rows = $('>div>table.ui-jqgrid-btable>tbody>tr', this.grid.bDiv);
            $('>table.ui-jqgrid-btable>tbody>tr', this.grid.fbDiv).each(function (i) {
                var rowHight = $($rows[i]).height(), rowHightFrozen = $(this).height();
                if ($(this).hasClass("jqgrow")) {
                    $(this).height(rowHight);
                    rowHightFrozen = $(this).height();
                    if (rowHight !== rowHightFrozen) {
                        $(this).height(rowHight + (rowHight - rowHightFrozen));
                    }
                }
            });
            $(this.grid.fbDiv).height(this.grid.bDiv.clientHeight);
            $(this.grid.fbDiv).css($(this.grid.bDiv).position());
        }
        if (typeof this.grid.fhDiv !== "undefined") {
            $rows = $('>div>table.ui-jqgrid-htable>thead>tr', this.grid.hDiv);
            $('>table.ui-jqgrid-htable>thead>tr', this.grid.fhDiv).each(function (i) {
                var rowHight = $($rows[i]).height(), rowHightFrozen = $(this).height();
                $(this).height(rowHight);
                rowHightFrozen = $(this).height();
                if (rowHight !== rowHightFrozen) {
                    $(this).height(rowHight + (rowHight - rowHightFrozen));
                }
            });
            $(this.grid.fhDiv).height(this.grid.hDiv.clientHeight);
            $(this.grid.fhDiv).css($(this.grid.hDiv).position());
        }
    };
function render_col(cellValue, opts, rowObject) {
    	tam=cellValue.split("::");
		tam1=tam[0].split(";");
		var dulieu='',cache_lich='';
		if(typeof tam1[2] == "undefined"){
			return "Lịch trống";	
		}else{			
			for(i=0;i<=tam.length-1;i++){
				tam1=tam[i].split(";");
				if(cache_lich==''){
					cache_lich=tam1[2];
					dulieu +=tam1[2]+ "\n";
				}
				if(cache_lich==tam1[2]){
					dulieu +=tam1[3] + " -> " + tam1[4] + "\n";
				}else{
					dulieu +=tam1[2]+ "\n";
					dulieu +=tam1[3] + " -> " + tam1[4] + "\n";
				}
				cache_lich=tam1[2];
				
			}
			return dulieu;
		}   
}
var kiemtra=false; 
function render_name(cellValue, opts, rowObject) {
	//cellValue
	if(kiemtra==false){
		window.nickname = $.ajax({url: 'resource.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=2&tables=DM_NhanVien&id=NickName&name=ID_NhanVien', async: false, success: function(data, result) {if (!result) alert('Không load được tên');}}).responseText;
		kiemtra=true;
	}
	var tam1;
	nickname1 = window.nickname.split(";");
	for(i=0;i<=nickname1.length-1;i++){
		temp=nickname1[i].split(":");
		if(temp[1]==cellValue){
			tam1=temp[0];
			break;
		}			 
	}	
	return tam1;	
}

Date.prototype.addDays = function(days) {
    var dat = new Date(this.valueOf())
    dat.setDate(dat.getDate() + days);
    return dat;
}

function getDates(startDate, stopDate) {
    var dateArray = new Array();
    var currentDate = startDate;
    while (currentDate <= stopDate) {
        dateArray.push( new Date (currentDate) )
        currentDate = currentDate.addDays(1);
    }	 
    return dateArray;
}


//alert(new Date('2013-08-10').addDays(2))


function col_span_week(date1,date2){
	//alert(DateDiff(new Date('2013-07-21'),new Date('2013-07-15')));	 
	day_range=DateDiff(new Date(date2),new Date(date1));
	var i=0,cahe_week,cache_day,dem=0,dem1=0;window.colspan=[];
	for(i=0;i<=day_range;i++){
		dat=(new Date(date1)).addDays(i);
		tam=$.datepicker.iso8601Week(new Date(dat));
		if(i==0){
			cahe_week=tam;
			cache_day=$.datepicker.formatDate("yy-mm-dd",new Date(dat));
		}
		if(cahe_week==tam){
			dem++;
			if(i==day_range){
				window.colspan[dem1]={startColumnName:cache_day, numberOfColumns: dem, titleText: 'Tuần ' +cahe_week};
			}
		}else{			
			//console.log("{startColumnName: 'rowed3_'"+cache_day+", numberOfColumns: "+dem+", titleText: 'Tuần ' "+cahe_week+"}");
			window.colspan[dem1]={startColumnName:cache_day, numberOfColumns: dem, titleText: 'Tuần ' +cahe_week}
			cache_day=$.datepicker.formatDate("yy-mm-dd",new Date(dat));
			dem=1;dem1++;
		}		
		//console.log($.datepicker.formatDate("yy-mm-dd",new Date(dat)) +"  "+tam);		
		cahe_week=tam;		
	}	
}

function DateDiff(date1, date2) {
    var datediff = date1.getTime() - date2.getTime(); //store the getTime diff - or +
    return (datediff / (24*60*60*1000)); //Convert values to -/+ days and return value      
}

;(function () {
    var proto = Date.prototype;
    function adder(value, getter, setter, toAdd) {
        var d = new Date(value),
          cv = getter.call(d);
        setter.call(d, cv + toAdd);
        return +d;
    }
 
    proto.addDays = function (days) {
        return new Date(adder(this,
            proto.getDate,
            proto.setDate,
            days));
    };
    
    proto.addHours = function (hours) {
        return new Date(adder(this,
            proto.getHours,
            proto.setHours,
            hours));
    };
 
    proto.addMinutes = function (minutes) {
        return new Date(adder(this,
            proto.getMinutes,
            proto.setMinutes,
            minutes));
    };
    
    proto.addSeconds = function (seconds) {
        return new Date(adder(this,
            proto.getSeconds,
            proto.setSeconds,
            seconds));
    };
    
     proto.addMilliseconds = function (ms) {
        return new Date(adder(this,
            proto.getMilliseconds,
            proto.setMilliseconds,
            ms));
    };
    
    proto.addYears = function (years) {
        return new Date(adder(this,
            proto.getFullYear,
            proto.setFullYear,
            years));
    };
    
    proto.addMonths  = function (months) {
        return new Date(adder(this,
            proto.getMonth,
            proto.setMonth,
            months));
    };
})();

/*function reset_radio(elem,callback){
  $("#calendar_option").find('input[type=radio]').each(function(idx, val,f){	   
      //this.checked = false;
	  $(this).removeAttr("checked");	   
  }).end().click(check_radio(elem));
}
function check_radio(elem){	
	$(elem).prop("checked", true) 
	//$(elem).attr("checked",true)
}*/

</script>