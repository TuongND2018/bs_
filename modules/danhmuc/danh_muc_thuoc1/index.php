





<head>
    <link href="js/select_input/select2.css" rel="stylesheet"/>
    <script src="js/select_input/select2.js"></script>
    
    <script src="js/SlickGrid-master/lib/jquery.event.drag-2.2.js"></script>
    <script src="js/SlickGrid-master/plugins/slick.cellrangedecorator.js"></script>
	<script src="js/SlickGrid-master/plugins/slick.cellrangeselector.js"></script>
    <script src="js/SlickGrid-master/plugins/slick.cellselectionmodel.js"></script>
    <script src="js/SlickGrid-master/slick.core.js"></script>
    <script src="js/SlickGrid-master/slick.formatters.js"></script>
    <script src="js/SlickGrid-master/slick.editors.js"></script>
    <script src="js/SlickGrid-master/plugins/slick.rowselectionmodel.js"></script>
    <script src="js/SlickGrid-master/slick.grid.js"></script>
    <script src="js/SlickGrid-master/slick.dataview.js"></script>
    <script src="js/SlickGrid-master/controls/slick.pager.js"></script>
    <script src="js/SlickGrid-master/controls/slick.columnpicker.js"></script>
    <script src="js/SlickGrid-master/slick.groupitemmetadataprovider.js"></script>
    <script src="js/SlickGrid-master/plugins/slick.autotooltips.js"></script>
    <link rel="stylesheet" href="js/SlickGrid-master/slick.grid.css" type="text/css"/>
      
    <style type="text/css">
	.toggle {
      height: 9px;
      width: 9px;
      display: inline-block;
    }
	
 .toggle.expand {
      background: url(images/expand.gif) no-repeat center center;
    }

    .toggle.collapse {
      background: url(images/collapse.gif) no-repeat center center;
    }
	
.slick-cell.selected {
  background: none repeat scroll 0 0 #76C4EB;
}

/*.ui-widget-header .ui-state-focus {
	border: 1px solid #006cab;
	background: #67b021 url(images/ui-bg_highlight-soft_25_67b021_1x100.png) 50% 50% repeat-x;
	font-weight: bold;
	color: #ffffff;
	background:#008ddf;
}*/

.slick-row:hover {
   background:#008ddf;
 }

 .slick-headerrow-column {
      background: #87ceeb;
      text-overflow: clip;
      -moz-box-sizing: border-box;
      box-sizing: border-box;
    }

    .slick-headerrow-column input {
      margin: 0;   
      width: 100%;
      height: 100%;
      -moz-box-sizing: border-box;
      box-sizing: border-box;
    }
    #dialog-form{     
    }
    .error{
        border:1px solid  orangered;
    }
    #rowed4{
       height:500px;
       text-align:left;
    }
    #rowed4 .textarea{
        text-align:right;
    }
    #text{
        width: 290px!important;
    }
    div.form_row{
        vertical-align:top;margin-left:40px!important;outline:#327E04;padding: 0.3em;    
    }
    .form_row textarea{
        font-size: 12px;
    }
    div.form_row input[type="text"] {
    border: 1px solid #327E04;
    padding: 0.3em;
    text-align: center;
    width: 230px;
    font: 12px Tahoma,Geneva,sans-serif !important;
    }
    .ui-button-text{
        padding-left: 3px!important;
        padding-top: 3px!important
    }
/*    .custom-combobox-input ui-widget ui-widget-content ui-state-default ui-corner-left ui-autocomplete-input{
        width: 290px!important;
    }*/
    .select2-container-multi .select2-choices{
    min-height: 55px;
    max-height: 55px;
    overflow-y: auto; 
    }
    .input_s{
        background-color:#F4FA58!important;
    }
   
</style>
</head>

<body style="font:12px Tahoma,Geneva,sans-serif !important"> 
   
<label for="nhomthuoc" style="margin-left:5px;">Nhóm thuốc:</label>
  <input id='nhomthuoc' style="width:320px; height:20px" >
        
          <div style="width:1300px;" id="slickgrid">
            <div id="myGrid" style="width:100%;height:650px;margin-bottom:4px"></div>
            
          </div>
</body>

<script type="text/javascript">
jQuery(document).ready(function() {       
window.id_nhomthuoc=0;
	create_combobox_new('#nhomthuoc',create_nhomthuoc,'bw','','data_nhomthuoc',0);
  window.dataView;
  window.grid;
  window.data = [];
  window.search_string=0;
  var options = {
    enableCellNavigation: true,
    showHeaderRow: true,
    headerRowHeight: 30,
    explicitInitialization: true,
	forceFitColumns: true,
	
  };
  var columns = [  		
 		    
				{name:'Tên thuốc',id:'TenBietDuoc',field: "TenBietDuoc",width: 250, formatter: TaskNameFormatter},		
			{name:'Tên hoạt chất',id:'HoatChatChinh',field: "HoatChatChinh",width: 500},
			{name:'Đơn vị tính',id:'TenDonViTinh',field: "TenDonViTinh",width: 100}, 
            {name:'Quy cách',id:'QuyCach',field: "QuyCach",width: 100}, 
			{name:'Hãng sản xuất',id:'HangSanXuat',field: "HangSanXuat",width: 100}, 
			{name:'Nước sản xuất',id:'NuocSanXuat',field: "NuocSanXuat",width: 100}, 
  
  ];



 window.columnFilters = {};

 function filter(item) {
     
    



     
      /*  var patRegex_no = /^[$]?[-+]?[0-9.,]*[$%]?$/; 
		
		if(id_nhomthuoc!=0){
					if(item['ID_NhomThuoc']!=id_nhomthuoc){
							return false; 
					}
			}
		
		
        for (var columnId in columnFilters) {
            if (columnId !== undefined && columnFilters[columnId] !== "") {
                var c = grid.getColumns()[grid.getColumnIndex(columnId)];
                var filterVal = columnFilters[columnId].toLowerCase();
                var filterChar1 = filterVal.substring(0, 1); 

                if(item[c.field] == null)
                    return false;
                if( filterChar1 == '<' || filterChar1 == '>' || filterChar1 == '!' || filterChar1 == '=') {                  
                    var idxFilterSpace = filterVal.indexOf(" ");
                    if( idxFilterSpace > 0 ) {                        
                        var condition = filterVal.substring(0, idxFilterSpace);
                        filterNoCondVal = columnFilters[columnId].substring(idxFilterSpace+1);
                        if( patRegex_no.test(item[c.field]) ) {                             
                            if( testCondition(condition, parseFloat(item[c.field]), parseFloat(filterNoCondVal)) == false ) 
                                return false;                      
                        }else {                             
                            if ( testCondition(condition, item[c.field].toLowerCase(), filterNoCondVal.toLowerCase()) == false )
                                return false;
                        }
                    } 
                }else{
					if(columnId=='HoatChatChinh' ){
						 if (item[c.field].toLowerCase().indexOf(columnFilters[columnId].toLowerCase()) == -1)
                       		 return false;	
					}else{
						if (item[c.field].toLowerCase().substring(0, columnFilters[columnId].length) != columnFilters[columnId].toLowerCase()) {
						 return false;
						}     
					}
					 
               
                }
            }
        }
        return true;*/

       var patRegex_no = /^[$]?[-+]?[0-9.,]*[$%]?$/; 
	   
	  
	   
	   
	   if(window.search_string==1){
		   item._collapsed=false;
	   }
		  if (item.parent != 0) {
			var parent = data[dataView.getIdxById(item.parent)];
			
			while (parent) {
			  if (parent._collapsed) {
				return false;
			  }
			  parent = data[dataView.getIdxById(parent.parent)];
			}
			
		  }
  
  
		  if(item.isleaf==1){
			  if(window.id_nhomthuoc==0){
				  
			  }else{
				  if(item.Family==id_nhomthuoc){
					  
				  }else{
					return false;  
				  }
			  }
  
  
        for (var columnId in columnFilters) {
            if (columnId !== undefined && columnFilters[columnId] !== "") {
                var c = grid.getColumns()[grid.getColumnIndex(columnId)];
                var filterVal = columnFilters[columnId].toLowerCase();
                var filterChar1 = filterVal.substring(0, 1); 

                if(item[c.field] == null)
                    return false;
               
					if(columnId=='HoatChatChinh' ){
						 if (item[c.field].toLowerCase().indexOf(columnFilters[columnId].toLowerCase()) == -1)
                       		 return false;	
					}else{
						if (item[c.field].toLowerCase().substring(0, columnFilters[columnId].length) != columnFilters[columnId].toLowerCase()) {
						 return false;
						}     
					}
					 
               
                }
            
        }
  }
  
    return true;
	
  }

   
  $(function () {
	 // var groupItemMetadataProvider = new Slick.Data.GroupItemMetadataProvider();
	  dataView = new Slick.Data.DataView({inlineFilters: true});	
      grid = new Slick.Grid("#myGrid", dataView, columns, options);		
	  dataView.onRowCountChanged.subscribe(function (e, args) {
		grid.updateRowCount();			
		grid.render();
  	  });  
	    plugin = new Slick.AutoTooltips();
		grid.registerPlugin(plugin);		
	    grid.setSelectionModel(new Slick.CellSelectionModel());	
	    grid.setSelectionModel(new Slick.RowSelectionModel());
	    dataView.onRowsChanged.subscribe(function (e, args) {
		grid.invalidateRows(args.rows);
		grid.render();
	  });

  grid.onClick.subscribe(function (e, args) {
	 
	
	 
    if ( $(e.target).hasClass("toggle")) {
      var item = dataView.getItem(args.row);
      if (item) {
        if (!item._collapsed) {
          item._collapsed = true;
        } else {
          item._collapsed = false;
        }

        dataView.updateItem(item.id, item);
      }
      e.stopImmediatePropagation();
    }
  });
  $(grid.getHeaderRow()).delegate(":input", "change keyup", function (e) {
      var columnId = $(this).data("columnId");
      if (columnId != null) {
		  window.search_string=1;
        columnFilters[columnId] = $.trim($(this).val());
		 dataView.refresh();	
      }
	

	
	
    });		
	
	   
	  grid.onHeaderRowCellRendered.subscribe(function(e, args) {
        $(args.node).empty();
        $("<input type='text'>")
           .data("columnId", args.column.id)
           .val(columnFilters[args.column.id])
           .appendTo(args.node);
      });	  
	grid.init();
    dataView.beginUpdate();
	$.post('resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_thuoc&q=2').done(function(a){
		data=$.parseJSON(a)
		 data.getItemMetadata = function (row) {
		
		};
	
		dataView.setItems(data);
		dataView.setFilter_new(filter);		
 		dataView.endUpdate();		
	})
  })
  
  
 resize_control();
		
  

 

       })

	
 	function resize_control(){
        var h=$(window).height();
         var w=$(window).width();
      $('#myGrid').css({'height':(h-35)+'px'});
      $('#myGrid').css({'width':(w-10)+'px'});
      //grid.resizeCanvas();
     }

 function TaskNameFormatter (row, cell, value, columnDef, dataContext) {
  value = value.replace(/&/g,"&amp;").replace(/</g,"&lt;").replace(/>/g,"&gt;");
  var spacer = "<span style='display:inline-block;height:1px;width:" + (15 * dataContext["indent"]) + "px'></span>";
  var idx = dataView.getIdxById(dataContext.id);
 // console.log(data[0]);
  if (data[idx + 1] && data[idx + 1].indent > data[idx].indent) {
    if (dataContext._collapsed) {
      return spacer + " <span class='toggle expand'></span>&nbsp;<strong>" + value +"</strong>";
    } else {
      return spacer + " <span class='toggle collapse'></span>&nbsp;<strong>" + value +"</strong>";
    }
  } else {
    return spacer + " <span class='toggle'></span>&nbsp;" + value;
  }
};



function currencyFmatter (row, cell, value, columnDef, dataContext)
{
    var ketqua='';
    phancach='';
	
    cellvalue=$.trim(value);
    var lastChar = cellvalue.substr(cellvalue.length - 1); 
    if(lastChar==','){
        cellvalue = cellvalue.substring(0, cellvalue.length - 1)
    }
 cellvalue=cellvalue.split(',');
 for(i=0;i<=cellvalue.length-1;i++){
             ketqua=ketqua+''+phancach+''+id_duongdung[cellvalue[i]];
             phancach=',';
 }
 if( ketqua == 'undefined'){
	 ketqua='';
 }
   return ketqua;
}
function create_nhomthuoc(elem, datalocal) {
        datalocal = jQuery.parseJSON(datalocal);
        $(elem).jqGrid({
           datastr: datalocal,
            datatype: "jsonstring",
            colNames: ['Tên nhóm thuốc'],
            colModel: [
				//{name: 'idnv', index: 'idnv', hidden: true,width:1},
                {name: 'manv', index: 'manv', hidden: false,width:"10%"},
             
                
            ],
            hidegrid: false,
            gridview: true,
            loadonce: true,
            scroll: 1,
            modal: true,
            rowNum: 100,
            rowList: [],
            height: 200,
            width: 500,
            viewrecords: true,
            ignoreCase: true,
            shrinkToFit: true,
            cmTemplate: {sortable: false},
            sortorder: "desc",
            serializeRowData: function(postdata) {
            },
            onSelectRow: function(id) {
				window.id_nhomthuoc=id;		
				dataView.refresh();
				
				
 			
            },
            ondblClickRow: function(id, rowIndex, columnIndex) {
            },
            loadComplete: function(data) {
            },
        });
        $(elem).jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "bw"});
        $(elem).jqGrid('bindKeys', {});
    } 
</script>