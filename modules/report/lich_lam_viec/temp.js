


function creat_grid(elem1){	 
	var elem;	  
	$('div').remove('#gbox_rowed3');									
	$('#grid_phong_ban').append($('<table id="rowed3"></table><div id="prowed3"></div>'));		
	var dateArray = getDates(new Date(elem1[0]), new Date(elem1[1]));
	//alert (dateArray)	 
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
		url:'resource.php?module=lich&view=lich_lam_viec&action=data_lich&q=2&idphong='+idphong+'&loailich='+loailich+'&from='+elem1[0]+'&to='+elem1[1]+"&mang_ngay="+mang_ngay,
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
		rowList: [],        // disable page size dropdown
		pgbuttons: false,     // disable page control like next, back button
		pgtext: null,         // disable pager text like 'Page 0 of 10'
		viewrecords: true ,		 
	    hoverrows:false,
	//jsonReader:{repeatitems:true,subgrid:{repeatitems:false}},	
		sortorder: "asc",
		serializeRowData: function (postdata) { 		 	
			//$("#rowed3").trigger("reloadGrid");		
			//return postdata;
		},	 
		onSelectRow: function(id){		 
		 
		},
		beforeSelectRow: function(rowid, e) {
			return false;
		},
		ondblClickRow: function (rowId, rowIndex, columnIndex,e) {
		 
 		},
		onRightClickRow: function(rowid, iRow, iCol, e){ 
			 
   		},
		loadComplete: function(data) {
			 			 
		},	  
		caption: "Lịch làm việc của " + $("#phongban1").val()
	});	
	 //$("#rowed3").triggerHandler("jqGridAfterGridComplete");
	// $("#rowed3").jqGrid('setFrozenColumns');
	 
	 $("#rowed3").jqGrid('setGroupHeaders', {
	  useColSpanStyle: false, 
	  groupHeaders:window.colspan,
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
					dulieu +="<span style= 'color:"+tam1[5]+"!important'>" +tam1[2]+ "</span>\n";
				}
				if(cache_lich==tam1[2]){
					dulieu +="<span style= 'color:"+tam1[5]+"!important'>" +tam1[3] + " -> " + tam1[4] + "</span>\n";
				}else{
					dulieu +="<span style= 'color:"+tam1[5]+"!important'>" +tam1[2]+ "</span>\n";
					dulieu +="<span style= 'color:"+tam1[5]+"!important'>" +tam1[3] + " -> " + tam1[4] + "</span>\n";
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