<!--Người viết: Trần Trương Chính-->
<?php

//echo $_SESSION["user"]["id_phongban"];

if ($_SESSION["ThongTinBenhNhan"]["ID"] == "") {
    echo "<script type='text/javascript'>";
    echo "parent.postMessage('hosobenhnhantrong;' , '*')";

    echo "</script>";
    return;
};
?>


<style>
    #DM_template td  {	 
		word-wrap:normal!important;
		white-space:nowrap;
	}
	#DM_template_container{
		position:absolute;
		z-index:1000000;		 
		display:none;	
		box-shadow:0px 0px 6px #333;	 	
	}
    button#last,button#first,button#prev,button#next{
        font-size:7px!important;
        margin-top:-6px;
        /* padding-left:20px;*/

    }
    .ui-corner-all{		 
        border-radius:3px!important;		 
    }
    .fm-button{
        box-shadow:0px 0px 5px #383838;
        border:1px solid #919191;
    }  	
    .top_form{
        width:100%;
        height:139px;
        margin-top:3px;				
    }	 	 
    .thongtin_tongthe,.thongtin_chidinh,.thongtin_luotkham{
        display:inline-block;
        box-shadow:0px 0px 10px #a0a0a0;
        border:1px solid #919191;
        vertical-align:top;
        width:49%;		
    }
    .thongtin_chidinh{	 	 
        padding-bottom:4px;
        padding-top:4px;		
    }
/*    .thongtin_thai{
         padding-bottom:4px;
        padding-top:4px;
      
    }*/
    .thongtin_luotkham{
        box-shadow:0px 0px 10px #a0a0a0;
        border:1px solid #919191;
        display:inline-block;
        vertical-align:top;
        width:55%;
        overflow-y:none;
        margin-top:2px;
        height:67px;		 		
    }
    .thongtin_luotkham_scroll{
        overflow-y:scroll;
        width:100%;
        height:45px;
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
    .thongtin_luotkham div div{
        display:inline-block;
        box-shadow:0px 0px 10px #a0a0a0;
        border:1px solid #919191;
        font-size:11px;
        margin-left:2px;
        margin-top:2px;		 
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
    .navigator{
        display:inline-block;
        border:1px solid #327E04;
        padding-top:6px;
        margin-top:-4px;
        margin-left:2px;
        padding-bottom:2px;
        padding-left:2px;
        padding-right:1px; 
    }
    .navigator_title{
        display:inline-block;
        width:100px;
        text-align:center;
    }
    .ui-layout-mask {
        background:#FFF !important;
        opacity:.20 !important;
        filter:	alpha(opacity=20) !important;
    }	
     #open_template,#add_template{
		 font-size:11px!important;
		 margin-top:-3px;
		 margin-left:-6px;
		 
	 }
	  #open_template{		
		 border-radius:0px!important;	
	 }	 
</style>
<body>  
    <div class="top_form ui-widget-content">
        <div style="padding:2px 0px;" class="thongtin_tongthe">
            <div class="patient_info"></div>        
        </div>
        <div class="thongtin_chidinh">
            <div class="form_row">
                <label style="width:90px;text-align:right">Chỉ định:</label><input style="width:100px" type="text" value="Bs Minh TQ" id="nguoi_chidinh">
                <label style="width:90px;text-align:right">Thực hiện:</label>
                 <span class="custom-combobox"><input style="width:90px !important"name="nhanvien"  class="custom-combobox-input ui-widget ui-widget-content ui-state-default ui-corner-left ui-autocomplete-input" id="nhanvien" >
                 <input type="text" style="display:none" name="text_nhanvien" id="text_nhanvien"></span>
                <label style="width:90px;text-align:right">Bs chẩn đoán:</label><select  style="width:100px"><option>-Chọn bác sỹ</option></select>
                <div style="height:3px"></div>
                <label style="width:90px;text-align:right">Chỉ định lúc:</label><input style="width:100px" type="text" value="22:26 24/05/13" id="ngaychidinh">
                <label style="width:90px;text-align:right">Thực hiên lúc:</label><input style="width:100px" type="text" value="22:26 24/05/13" id="ngaythuchien">
                <label style="width:90px;text-align:right">Chẩn đoán lúc:</label><input style="width:100px" type="text" value="22:26 24/05/13" id="ngaychandoan">
                <a href="#" id="dathuchien" class="fm-button ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="margin-left:0px;  margin-bottom:1px; ">Bắt đầu<span class="ui-icon ui-icon-play"></span></a> 
                <a href="#" id="hoantat" class="fm-button ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="margin-left:0px;  margin-bottom:1px; ">Hoàn tất<span class="ui-icon ui-icon-check"></span></a>   
            </div>        
        </div>
        <div class="thongtin_luotkham" id="left_col">   
            <div class="thongtin_luotkham_scroll"></div>
            <span class="navigator" >
                <button id="first">bắt đầu</button>
                <button id="prev">tới</button>
                <span class="navigator_title"></span>
                <button id="next">lui</button>
                <button id="last">kết thúc</button> 
            </span>
            <label id="ngay_kham"></label>        
        </div>
        <div class="thongtin_luotkham" id="center_col">
            <label id="id_trangthai"></label>  
        </div>
        <div class="thongtin_luotkham" id="right_col">

        </div>


        <!--<div class="canlamsang"></div>--> 


    </div> 

    <div id="panel_main">    

        <div class="ui-widget-content ui-layout-west">
            <iframe id="images_viewer"  style="border:none;width:100%;height:100%; overflow:visible;" title="Bấm ESC để up hình, double click vào ảnh để xóa ảnh"></iframe>   
        </div>         
        <div class="ui-widget-content  ui-layout-center" > 
            
            
            Chọn mẫu
    	<input type="text" id="template_title"  style="width:75%">
        <button id="open_template">mở template</button> 
        <button id="add_template">thêm template</button>       
            
            <textarea id="mota" style="width:98%; height:98%" ></textarea>

        </div>
        <div class="ui-widget-content ui-layout-east" id="inner"> 
            <div class="ui-layout-north"> 
             <div class="thongtin_thai">
            <div class="form_row">
                <label style="width:40px;text-align:left">Tuần</label><input style="width:10px" type="text" value="7" id="tuanthai">
                <label style="width:40px;text-align:left">Ngày</label><input style="width:10px" type="text" value="2" id="ngaythai">
               <label style="width:90px;text-align:left">Trọng lượng</label><input style="width:20px" type="text" value="1000" id="trongluongthai">
                <div style="height:2px"></div>
                 <label style="width:50px;text-align:left">Số thai</label><input style="width:20px" type="text" value="1" id="soluongthai">
                 <label style="width:60px;text-align:left">PARA</label><input style="width:40px" type="text" value="1-0-0-0" id="para">
                <label style="width:60px;text-align:left">Phí TH</label><input style="width:30px" type="text" value="250" id="phithuchien">
               
            </div>        
        </div>

            </div>

            <div class="ui-layout-center"> 
                
                <textarea id="ketluan" style="width:98%; height:98%" ></textarea>

            </div>
            <div class="ui-layout-south"> 
                <textarea id="loikhuyen" style="width:98%; height:98%" ></textarea>
            </div>

        </div>   

    </div>
</body>
</html>
<script type="text/javascript">
    var _id_luotkham = [];
    var data_luotkham = "";
    var navigator_count = 0;
    var _folder_name;
    var ma_benhnhan = "89045";
    var id_loaikham;
    $(document).ready(function() {
        //alert(encode64("89045"))
        $.get("resource.php?module=web_services&function=create_panel&action=index", function(data) {
            $(".patient_info").html(data);
            $(".patient_info").css("width", $("#patient_info").width() + "css");
        });
       
        
        $("#panel_main").css("height", $(window).height() - 151 + "px");
        $("#panel_main").fadeIn(1000);
        create_layout();
        resize_control();
        
        
        
        
        window.abc=	 $.ajax({                       
                        url: "resource.php?module=web_services&function=get_auto_complete4&action=index",
                        dataType:"json",                       
                        async:false                       
                    }).responseText;
					//alert(window.abc)
		window.abc =	jQuery.parseJSON( window.abc);
        
        
        
      autocomplex_mutil ('#nhanvien',window.abc,'#text_nhanvien');
        
        
        $.getJSON("resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_loaisieuam&idbenhnhan=" +<?= $_SESSION["ThongTinBenhNhan"]["ID"] ?>,
                function(data) {
                    data_luotkham = data;
                    //alertObject(data);
                    var tam1_cls = "";
                    $.each(data, function(key, val) {
                        for (i = 0; i < val.length; i++) {
                            //tam+=" ; "+val[i]["id"];
                            var tam1_cls = val[i]["cell"];
                            //tam_cls+= '<div id="cls_'+val[i]["id"]+'">'+tam1_cls[0]+"<br \>" +tam1_cls[5]+'</div>';
                            _id_luotkham.push(tam1_cls[5]);
                        }
                        //_id_luotkham=$.unique(_id_luotkham).reverse();
                        _id_luotkham = $.unique(_id_luotkham);
                        navigator_load("end");
                        create_DM_template_grid(id_loaikham); 		
                    });
                });


        $(window).resize(function() {
            $("#panel_main").css("height", $(window).height() - 151 + "px");
            resize_control();
        });
        //navigator_load(0);
        $(function() {
            $("#first").button({
                text: false,
                icons: {
                    primary: "ui-icon-seek-first"
                }
            })
                    .click(function() {
                navigator_load("first");
            });
            $("#last").button({
                text: false,
                icons: {
                    primary: "ui-icon-seek-end"
                }
            })
                    .click(function() {
                navigator_load("end");
            });
            $("#next").button({
                text: false,
                icons: {
                    primary: "ui-icon-seek-next"
                }
            })
                    .click(function() {
                navigator_load(1);
            });
            $("#prev").button({
                text: false,
                icons: {
                    primary: "ui-icon-seek-prev"
                }
            })
                    .click(function() {
                navigator_load(-1);
            });
        });
        phanquyen();
        var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
        var eventer = window[eventMethod];
        var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
        eventer(messageEvent, function(e) {
            parent.postMessage(e.data, '*')
        }, false);
    });
    function navigator_load(_value) {
        if ((navigator_count + _value > _id_luotkham.length - 1) || (navigator_count + _value < 0)) {
            return false;
        }
        var tam_cls = "";
        if (_value == "first") {
            navigator_count = 0;
        } else if (_value == "end") {
            navigator_count = _id_luotkham.length - 1;
        } else {
            navigator_count += parseInt(_value);
        }
        var _mota = "";
        $.each(data_luotkham, function(key, val) {
            for (i = 0; i < val.length; i++) {
                //tam+=" ; "+val[i]["id"];				
                var tam1_cls = val[i]["cell"];
                //alert(tam1_cls[5])
                if (_id_luotkham[navigator_count] == tam1_cls[5]) {
                    //alert(_id_luotkham[navigator_count]) 
                    tam_cls += '<div alt="' + val[i]["id"] + '" id="' + ma_benhnhan + "_" + tam1_cls[5] + "_" + tam1_cls[3] + '">' + tam1_cls[0] + "<br \>" + tam1_cls[5] + '</div>';
                    id_loaikham = tam1_cls[3];
                    $("#ngay_kham").html(tam1_cls[2]);
                    $("#id_trangthai").html(tam1_cls[9]);
                }
            }
            $("#left_col div").html(tam_cls);
            loaikham_click();
        });
        $(".navigator_title").html("Lượt khám " + (navigator_count + 1) + "/" + _id_luotkham.length);
        $("#left_col div div:first-child").click();

    }
    function loaikham_click() {
        $.each(data_luotkham, function(key, val) {
            $("#left_col div div").click(function(e) {
                for (i = 0; i < val.length; i++) {
                    tam = val[i]["id"];
                    //alert(val[i]["cell"])			
                    var tam1_cls = val[i]["cell"];
                    tam1 = $(this).attr("alt");
                    if (tam == tam1) {
                        $("#mota").val(val[i]["cell"][6]);
                        $("#ketluan").val(val[i]["cell"][7]);
                        $("#loikhuyen").val(val[i]["cell"][8]);
                        $("#nguoi_chidinh").val(val[i]["cell"][4]);
                        $("#ngaychidinh").val(val[i]["cell"][2]);
                        $("#ngaythuchien").val(val[i]["cell"][12]);
                        $("#ngaychandoan").val(val[i]["cell"][14]);

                    }
                }
                load_image($(this).attr("id"));
            });
        });
    }
    function resize_control() {
        //$(window).height()thongtin_chidinh thongtin_tongthe
        //alert($(".thongtin_tongthe").width())
        $(".thongtin_chidinh").css("width", $(window).width() - $(".thongtin_tongthe").width() - 12 + "px");
        $("#left_col").css("width", $(window).width() / 3 - 5 + "px");
        $("#center_col").css("width", $(window).width() / 3 - 5 + "px");
        $("#right_col").css("width", $(window).width() / 3 - 7 + "px");
    }
    function create_layout() {
        //alert("")
        $('#panel_main').layout({
            resizerClass: 'ui-state-default'
                    , west: {
                maskContents: true
                        , resizable: true
                        , size: "35%"
                        , resizerDblClickToggle: false
                        , onresize_end: function() {
                    resize_control();
                }
                , onopen_end: function() {

                }
                , onclose_end: function() {

                }

            }
            , center: {
                resizable: true
                        , size: "35%"
                        , resizerDblClickToggle: false


                        , onresize_end: function() {
                    resize_control();
                }
                , onopen_end: function() {

                }
                , onclose_end: function() {

                }
            }
            , east: {
                resizable: true
                        , size: "30%"
                        , resizerDblClickToggle: false


                        , onresize_end: function() {
                    resize_control();
                }
                , onopen_end: function() {

                }
                , onclose_end: function() {

                }
            }

        });



        $('#inner').layout({
            resizerClass: 'ui-state-default'
                    , north: {
                resizable: true
                        , size: "30%"
                        , resizerDblClickToggle: false
                        , onresize_end: function() {
                    resize_control();
                }
                , onopen_end: function() {

                }
                , onclose_end: function() {

                }

            }
            , center: {
                resizable: true
                        , size: "40%"
                        , resizerDblClickToggle: false


                        , onresize_end: function() {
                    resize_control();
                }
                , onopen_end: function() {

                }
                , onclose_end: function() {

                }
            }
            , south: {
                resizable: true
                        , size: "30%"
                        , resizerDblClickToggle: false
                        , onresize_end: function() {
                    resize_control();
                }
                , onopen_end: function() {

                }
                , onclose_end: function() {

                }

            }
        });

    }
    function load_image(search_string) {
        _folder_name = $.ajax({url: 'resource.php?module=web_services&function=get_folder_name&action=index&id_form=111&id_loaikham=' + id_loaikham, async: false, success: function(data, result) {
            }}).responseText;
        _folder_name = $.trim(_folder_name) + "//" + ma_benhnhan;
        $("#images_viewer").attr("src", "resource.php?module=images_control&view=non_dicom_viewer&id_form=49&tenthumuc=" + _folder_name + "&search_string=" + search_string);
    }





 function autocomplex_mutil(input,data,id) {
			 var isOpen = false;
			_init(input,data,id);
			afterInit(input,isOpen);
	};
 function afterInit(input,isOpen) {	 
		
			var button = $("<a>").attr("tabIndex", -1).attr("title", "Show all items").tooltip().insertAfter($(input)).button({
			icons: {
				primary: "ui-icon-triangle-1-s"
			},
			text: false
		}).removeClass("ui-corner-all").addClass("custom-combobox-toggle ui-corner-right").click(function(event) {
			$(input).focus();		
			wasOpen = $(input).autocomplete("widget").is(":visible");
			
			if (isOpen) {			
				$(input).autocomplete("close");
				isOpen = false;
			} else {
				isOpen = true;
				$(input).autocomplete("search", "");
				event.stopImmediatePropagation();
			}
		});
	 }
 function _init(input,data,id) {     			
		$(input).autocomplete({
			source: data,
			minLength: 0,	
			select: function (event, ui) {
			$(id).val(ui.item.id);	
										
       			 },
			open: function(event, ui) {						           				
			}  ,
			autoFocus: true,
			}).data("uiAutocomplete")._renderItem = function (ul, item) {
			if($(input).val()==""){newid=item.label}
			else{
					var newid = String(item.label).replace(
					new RegExp(this.term, "gi"),
					"<strong style='color:#F60'>$&</strong>");}
					return $("<li ></li>")
				.data("item.autocomplete", item)
				.append("<a style='width:30px;display: inline-block!important'>" + newid + "</a> <a style='width:120px;display: inline-block!important'>"+ item.hoten +"</a> ")					
				.appendTo(ul);		
				};
			 }	
function create_DM_template_grid(loaikham){	
		 $("#DM_template").jqGrid({
		url:'resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_DMtemplate&loaikham='+loaikham,
		datatype: "json",	
		colNames:['Tên Mẫu', 'Nội dung', 'Kết luận', 'Lời khuyên'],
		colModel:[			
			{name:'TenTemplate',index:'TenTemplate'},
			{name:'NoiDung',index:'NoiDung'},			 
			{name:'KetLuan',index:'KetLuan'}, 			
			{name:'LoiKhuyen',index:'LoiKhuyen'}, 
				 	 	 
		],
		hidegrid: false,
		gridview: true,
		loadonce: true,
		scroll: false,		 
		modal:true,	 
		rowNum: -1,
		rowList:[],
		pager: '#prowed_DM_template',
		sortname: 'ID_Thuoc',
		height:($(window).height() / 100 * parseFloat(50)).toFixed(0),
		width: (($(window).width() / 100 * parseFloat(50)).toFixed(0)),
		viewrecords: true,	
		ignoreCase:true,
		shrinkToFit:true,
		cmTemplate: {sortable:false},
		
	//hoverrows:false,
	//jsonReader:{repeatitems:true,subgrid:{repeatitems:false}},	
		sortorder: "desc",
		serializeRowData: function (postdata) { 		 	
			//$("#rowed3").trigger("reloadGrid");		
			//return postdata;
		},
		onSelectRow: function(id){		  
			 var rowData = $('#DM_template').getRowData(id);
			 $("#mota").val(rowData["NoiDung"]);	 
			// $("#DM_template_container").fadeOut(200);							
		},
		ondblClickRow: function (id, rowIndex, columnIndex){		
 		},
		loadComplete: function(data) {			 
			$("#DM_template_container").css("top",$("#template_title").offset().top+25+"px");
			$("#DM_template_container").css("left",$("#template_title").offset().left+"px");	
			$("#DM_template_container").click(function(e) {
				 e.stopPropagation();                
            });   			 
		},	  
		//caption: "Danh mục thuốc"
	});	
	 
	 $("#DM_template").jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false,defaultSearch:"cn"});
	 $("#DM_template").jqGrid('bindKeys', {} );
		
}  
</script>


