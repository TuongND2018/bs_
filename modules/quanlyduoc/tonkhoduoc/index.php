<style>

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
#soluongton{
	width:30px;
	text-align:center;
}
input.ui-button{
	padding:0.3em 1em;
}
#xemdanhsach{
	margin-left:35px;
	margin-top: -1px;
}
</style>
<body> 

    <div id="panel_main" >  
		<div id="main_top">
        	<div id="sub_main_top">
			<!-- <label for="soluongton" style="font-weight:bold;">Số lượng tồn kho ít hơn: </label>
            <input type="text" name="soluongton" id="soluongton" value="50" /> -->
            <label style="margin-left:10px; font-weight:bold">Kho:</label> <input id="kho" type="text" style="margin-left:0px;">
            <input type="button" id="xemdanhsach" value="Xem danh sách" />
            <!-- <input type="checkbox" id="dieukien" name="dieukien" style="margin-left:15px;"  /><label for="dieukien">Tồn thuốc < tồn kho tối thiểu</label> -->
            </div><!--sub_main_top-->
        
        </div><!--main_top-->
        <div id="main_bottom">
        	<table id="rowed3" ></table>
            <div id="prowed3"><input type="text" style="margin-left: 7px; margin-top: 4px; width: 295px;;background:#4CA109;border:1px solid #327E04; color: #FFFFFF;font-weight: bold; text-align:left; box-shadow:none!important;padding: 0px!important;" disabled="" readonly value="Số dòng =" class="disable" id="sodong"></div> 
        </div><!--main_bottom-->
    </div>

    
</body>
</html> 
<script type="text/javascript">
    jQuery(document).ready(function() {
		create_combobox_new('#kho',create_kho,'bw','','data_kho');
		create_grid();
		resize_control();
		$("#panel_main").css("height",$(window).height()+"px");			 
		$("#panel_main").fadeIn(1000);
		$("#xemdanhsach").button();
		$("#rowed3").jqGrid('setGridParam',{url:'resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_dsthuoc_tonkho&ac=1&soluongton='+$('#soluongton').val(),datatype:'json'}).trigger('reloadGrid');
		
		$("#xemdanhsach").click(function(){
		if($('#dieukien').is( ":checked" )){
			$("#rowed3").jqGrid('setGridParam',{url:'resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_dsthuoc_tonkho&ac=2&soluongton='+$('#soluongton').val()+'&idkho='+$("#kho_hidden").val(),datatype:'json'}).trigger('reloadGrid');
			}else{
			$("#rowed3").jqGrid('setGridParam',{url:'resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_dsthuoc_tonkho&ac=1&soluongton='+$('#soluongton').val()+'&idkho='+$("#kho_hidden").val(),datatype:'json'}).trigger('reloadGrid');
			}
		});
		$("#dieukien").click(function(){
		if($('#dieukien').is( ":checked" )){
			$("#rowed3").jqGrid('setGridParam',{url:'resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_dsthuoc_tonkho&ac=2&soluongton='+$('#soluongton').val()+'&idkho='+$("#kho_hidden").val(),datatype:'json'}).trigger('reloadGrid');
			}else{
			$("#rowed3").jqGrid('setGridParam',{url:'resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_dsthuoc_tonkho&ac=1&soluongton='+$('#soluongton').val()+'&idkho='+$("#kho_hidden").val(),datatype:'json'}).trigger('reloadGrid');
			}
		});
		
	});// end ready
	$(window).resize(function() {		 
		$("#panel_main").css("height",$(window).height()+"px");			 
		$("#panel_main").fadeIn(1000); 
		resize_control();	 
	});
	
	/*$responce->rows[$i]['cell']=array($row["tengoc"],$row["SL_TonT12_2014"],$row["SL_N"],$row["SL_X"],$row["TonHienTai"]);*/
	
function create_grid() {
      mydata=[];
        $("#rowed3").jqGrid({
            data: mydata,
            datatype: "local",
            colNames: ['id_thuoc','Tên thuốc','SL Tồn đầu 12_2104', 'SL nhập', 'SL xuất', 'SL tồn hiện tại'],
            colModel: [
            {name: 'id_thuoc', index: 'id_thuoc', search: true, width: "5%", editable: false, align: 'left', hidden: false,classes:'abc'},
                {name: 'tengoc', index: 'tengoc', search: true, width: "25%", editable: false, align: 'left', hidden: false,classes:'abc'},
				{name: 'SL_TonT12_2014', index: 'SL_TonT12_2014', search: true, width: "15%", editable: false, align: 'right', hidden: false},
				{name: 'SL_N', index: 'SL_N', search: true, width: "15%", editable: false, align: 'right', hidden: false},
				{name: 'SL_X', index: 'SL_X', search: true, width: "15%", editable: false, align: 'center', hidden: false},
				{name: 'TonHienTai', index: 'TonHienTai', search: true, width: "15%", editable: false, align: 'center', hidden: false},
            ],
            loadonce: true,
            scroll: false,
            modal: true,
            shrinkToFit: true,
            cmTemplate: {sortable: false},
            rowNum: 10000000,
            rowList: [],
            pager: '#prowed3',
            sortname: 'tengoc',
            height: 100,
            width: 100,
            viewrecords: true,
            ignoreCase: true,
            sortorder: "desc",
            footerrow:true,
			
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
			$("#sodong").val("Số dòng ="+$("#rowed3").getGridParam("reccount"))
			 
			},
            //caption: "&nbsp;"
        });
		$("#rowed3").jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false,defaultSearch:"cn"});
		$("#rowed3").jqGrid('bindKeys', {});
    }
	
function resize_control(){
	$("#main_bottom").css("width",$("#panel_main").width()-10+"px");
	$("#main_bottom").css("height",$(window).height()-50+"px");
	$("#rowed3 ").setGridWidth($('#main_bottom').width()-10);
	$("#rowed3 ").setGridHeight($('#main_bottom').height()-80);
}
	function create_kho(elem,datalocal){
 datalocal=jQuery.parseJSON(datalocal);
   $(elem).jqGrid({
  datastr:datalocal,
  datatype: "jsonstring" ,
		colNames:['Kho'],
		colModel:[
			{name:'kho',index:'kho',hidden :false},
		],
		hidegrid: false,
		gridview: true,
		loadonce: true,
		scroll: false,
		modal:true,
		rowNum: 200000,
		rowList:[],
		sortname: 'Id_Tang',
		height:200,
		width: 300,
		viewrecords: true,
		ignoreCase:true,
		shrinkToFit:true,
		cmTemplate: {sortable:false},
		sortorder: "desc",
		serializeRowData: function (postdata) {
		},
		onSelectRow: function(id){
			window.idkho=id;
		var selr = jQuery(elem).jqGrid('getGridParam','selrow');

		},
		ondblClickRow: function (id, rowIndex, columnIndex) {

 		},
		loadComplete: function(data) {
		grid_filter_enter(elem) ;

		},

	});

	 $(elem).jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false,defaultSearch:"cn"});
	 $(elem).jqGrid('bindKeys', {} );
}
</script>