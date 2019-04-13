<style type="text/css">
 
.form_row label {
	text-align: right!important;
}
#maKHO1,#tenThuoc{
	text-align:center !important;
	}
</style>
<body>
<div class="form_search" style="width:600px;height:200px;margin:0 auto;margin-top:200px">
        <div class="form_row" style="vertical-align:top;width:100%"  >
          <div>
            <label for="tungay" style="width:90px;" >Từ ngày</label>
            <input id="tungay" name="tungay" style="width:70px;" type="text">
            <label for="denngay" style="width:307px;">Đến ngày</label>
            <input id="denngay" name="denngay" style="width:70px;"  type="text">
          </div>
          <div>
            <label for="maKHO" style="width:90px;">Mã kho</label>
            <input id="maKHO" name="maKHO" style="width:70px;" type="text">
            <input id='maKHO_1' class='com_thuocnhomcls1'  style="display:none">
            <label style="width:30px"></label>
            <label class="hienthi" id="maKHO1" style="width:350px;"></label>            
          </div>
          <div>
            <label style="width:90px;">Mã thuốc</label>
            <input id="maThuoc_get" name="maThuoc_get" style="width:70px;" type="text">
            <input id='maThuoc_hide' class='maThuoc_hide'  style="display:none">
             <label style="width:30px"></label>
            <label class="hienthi" id="tenThuoc" style="width:350px;"></label>            
          </div>
           <div>
            <label for="" style="width:90px;"></label>
           <input type="radio" id="theolo" name="theolo" value="yes" checked> Theo lô
			<input type="radio" id="theolo" name="theolo" value="no" style="margin-left:40px"> Không theo lô
          </div>
           <div>
            <label for="maThuoc" style="width:90px;"></label>
           	<input type="checkbox" id="tatcacackho" name="tatcacackho" value="Yes"> Tất cả các kho
            <label style="width:212px;"></label>
            <a  id="xem" class="ui-button ui-widget ui-state-default ui-corner-all" >Xem</a>
            <a  id="in" class="ui-button ui-widget ui-state-default ui-corner-all" >In</a>
            <a  id="cancel" class="ui-button ui-widget ui-state-default ui-corner-all" >Bỏ qua</a>
          </div>
         
 		</div>
</div> 
 </body>
 <script type="text/javascript">
 		var ID_Thuoc=0;
 		jQuery(document).ready(function() {	
		
			get_date_time();
			phanquyen();
			$('#xem').button();
			$('#in').button();
			$('#cancel').button();
			$("#tungay").datepicker({
            showWeek: true,
            defaultDate: "+1w",
            changeMonth: true,
            changeYear: true,
            numberOfMonths: 1,
            dateFormat: $.cookie("ngayJqueryUi"),             
            onClose: function(selectedDate) {
             /*  // $("#to_day").datepicker("option", "minDate", $("#from_day_mask").val());
                fromday = $.datepicker.formatDate($.cookie("ngayJqueryUi"), new Date(selectedDate));
                $("#tungay").val(fromday);*/
            },
            onSelect: function(dat, inst) {
               // $("#tungay_mask").val(dat);
            }
        });
        $("#denngay").datepicker({
            showWeek: true,
            defaultDate: "+1w",
            changeMonth: true,
            changeYear: true,
            numberOfMonths: 1,
            dateFormat: $.cookie("ngayJqueryUi"),            
            onClose: function(selectedDate) {
             /* //  $("#from_day").datepicker("option", "maxDate", $("#to_day_mask").val());
                today = $.datepicker.formatDate($.cookie("ngayJqueryUi"), new Date(selectedDate));
                $("#denngay").val(today);
              //  $("#from_day").val(fromday);*/
            },
            onSelect: function(dat, inst) {
              //  $("#denngay_mask").val(dat);
            }
        });
		
		jwerty.key('tab', false);
	  jwerty.key('shift+tab', false);		  
	   $('.form_search input[type=text]').bind("keydown", function(e) {			 
            if (jwerty.is("enter",e)||jwerty.is("tab",e)) {   
			
                /* FOCUS ELEMENT */
                var inputs = $(this).parents(".form_search").eq(0).find(":input[type=text]");
                var idx = inputs.index(this);			 
                if (idx == inputs.length - 1) {					 
                    //inputs[0].focus();					 
                } else {				 
					inputs[idx + 1].focus(); //  handles submit buttons										 
                }			 
                return false;
            }else if(jwerty.is("shift+tab",e)){
				var inputs = $(this).parents(".form_search").eq(0).find(":input[type=text]");
                var idx = inputs.index(this);
				 if (idx >0) {					 
                    inputs[idx -1].focus(); //  handles submit buttons				 
                } 
			}
			 
				
        });
		
		create_combobox('#maKHO','#maKHO_1',".makho","#makho",create_Dm_kho,500,300,'Kho','data_DMkho',0);
		create_combobox('#maThuoc_get','#maThuoc_hide',".table_thuoc","#table_thuoc",create_Dm_thuoc,500,300,'Danh mục thuốc','data_DMthuoc',0);
		
		$("#cancel").click(function(){
			//alert();
			get_date_time();
			$('#maKHO,#maThuoc_get').val("");
			$("#maKHO1,#tenThuoc").text("");
			ID_Thuoc=0;
			})
		})
		$("#xem").click(function(){
			if($("#maKHO").val()=="")
				alert("Mã kho: Trường dữ liệu bắt buộc phải có");
			else{
				var tungay=$("#tungay").val();
				var denngay=$("#denngay").val();
				var tenkho=$("#maKHO1").text();
				var makho=$("#maKHO").val();
				$.cookie("in_status", "print_preview"); 
				dialog_report("Xem trước khi in",90,90,"u78787878975f","resource.php?module=report&view=<?=$modules?>&action=TongHopNhapXuatTonKhoHangHoa&header=left&type=report&id_form=&tungay="+tungay+"&denngay="+denngay+"&tenkho="+tenkho+"&makho="+makho+"&_mathuoc="+ID_Thuoc,'TongHopNhapXuatTonKhoHangHoa');
				
			}
	
		});
 	  
function get_date_time(){	
			
			var d = new Date();
			var curr_hour = d.getHours();
			var curr_minute = (d.getMinutes()<10?'0':'') + d.getMinutes(); //phút trả về 1 chữ số nếu bé hơn mười nên phải ghép 0 vào
			var curr_time = curr_hour + ":" + curr_minute+ " ";	
			var dd = (d.getDate()<10?'0':'')+ d.getDate();
			var mm = d.getMonth()+1;//January is 0!`
			var yy= d.getFullYear().toString().substr(2,2);
			$('#tungay').val(dd+'<?php echo $_SESSION["config_system"]["phancachngay"]?>'+mm+'<?php echo $_SESSION["config_system"]["phancachngay"]?>'+yy);
			$('#denngay').val(dd+'<?php echo $_SESSION["config_system"]["phancachngay"]?>'+mm+'<?php echo $_SESSION["config_system"]["phancachngay"]?>'+yy);
}
	
	function create_Dm_kho(elem, datalocal) {
        datalocal = jQuery.parseJSON(datalocal);
        $(elem).jqGrid({
            datastr: datalocal,
            datatype: "jsonstring",
            colNames: ['ID Kho', 'Tên kho','Vị trí','Ghi chú'],
            colModel: [
                {name: 'ID_Kho', index: 'ID_Kho', hidden:true},
                {name: 'TenKho', index: 'TenKho', hidden: false},
				{name: 'DiaChi', index: 'DiaChi', hidden: false},
				{name: 'GhiChu', index: 'GhiChu', hidden: false},
                
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
				 var rowData = $('#makho').getRowData(id);
				 $("#maKHO1").text(rowData["TenKho"]+" ("+rowData["DiaChi"]+")");
            },
			
            ondblClickRow: function(id, rowIndex, columnIndex) {
            },
            loadComplete: function(data) {

                grid_filter_enter(elem);
            



            },
        });
        $(elem).jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});
        $(elem).jqGrid('bindKeys', {});
    }
	
	function create_Dm_thuoc(elem, datalocal) {
        datalocal = jQuery.parseJSON(datalocal);
        $(elem).jqGrid({
            datastr: datalocal,
            datatype: "jsonstring",
            colNames: ['Mã thuốc','Mã thuốc', 'Tên đơn vị tính','Tên biệt dược','Tên nhóm thuốc'],
            colModel: [
                  {name: 'ID_Thuoc', index: 'ID_Thuoc', hidden:true},
				{name: 'MaThuoc', index: 'MaThuoc', hidden:true},
				
                {name: 'TenDonViTinh', index: 'TenDonViTinh', hidden: false},
				{name: 'TenBietDuoc', index: 'TenBietDuoc', hidden: false},
				{name: 'TenNhomThuoc', index: 'TenNhomThuoc', hidden: false},
                
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
				 var rowData = $('#table_thuoc').getRowData(id);
				 $("#tenThuoc").text(rowData["TenBietDuoc"]);
				ID_Thuoc=rowData["MaThuoc"];
				//alert(ID_Thuoc);
            },
			
            ondblClickRow: function(id, rowIndex, columnIndex) {
            },
            loadComplete: function(data) {

                grid_filter_enter(elem);
            



            },
        });
        $(elem).jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});
        $(elem).jqGrid('bindKeys', {});
    }
 </script>       
        
        