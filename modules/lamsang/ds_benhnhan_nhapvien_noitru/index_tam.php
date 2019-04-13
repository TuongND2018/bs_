<!--author:khatm--
Form: xếp hàng lâm sàng-->
<style type="text/css">
    #rowed3 td,#rowed4 td,#rowed5 td{

        font-size:11px!important;
    }
`
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
        font-size:12px;
        padding:5px 0px;
        background:url("js/grid/themes/south-street/images/ui-bg_highlight-hard_15_459e00_1x100.png") repeat-x scroll   #459E00;
        border:#CCC 1px dashed;
    }

    .demgio{
        /*color:red;*/
        cursor:pointer;
		display:inline-block;
		/*width:250px;*/
    }
	.demgio_container{
		display:inline-block;
		margin-top:5px;
	}

    .disable{
        color:red;
        background:#333;

    }
    #gbox_rowed3, #gbox_rowed4, #gbox_rowed5, #gbox_rowed6, #gbox_rowed7{
        margin-left:0px;
        margin-top:0px;
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
    <div id="panel_main" >
        <div class="left_col ui-widget-content ui-layout-center">
            <div id='demo' style="margin-left:0px;margin-top:0px;;margin-botton:0px;display:inline-block; padding-top:0px;">
           
       		</div>

      <div id="luoitrai" style="">
         <div class="ui-layout-north n_tren">
            <table id="rowed3" style="margin-top:-5px !important"></table>
        </div>
        <div class="ui-layout-center n_duoi">
            <table id="rowed4" ></table>
        </div>
     </div>
        </div>

        <div class="ui-layout-east ui-widget-content right_col">
         <table id="rowed5" ></table>
   	 </div>
</body>
</html>

<script type="text/javascript">
var loadlandau=0;
    jQuery(document).ready(function() {


    $("#panel_main").css("height",$(window).height()+"px");
    $("#panel_main").fadeIn(1000);
    $(".left_col").css('height',$("#panel_main").height());
    $('#luoitrai').css('height',$(".left_col").height());
    openform_shortcutkey(); //mở bằng phím tắt được thiết lập trong DB
            create_layout();
            create_layout2();

            resize_control();
		
           phanquyen();

$(window).resize(function() {
    $("#panel_main").css("height",$(window).height()+"px");
    $("#panel_main").fadeIn(1000);
    $(".left_col").css('height',$("#panel_main").height());
    $('#luoitrai').css('height',$(".left_col").height());


})
})//end ready


function create_layout() {
	$('#panel_main').layout({
		resizerClass: 'ui-state-default'
				, east: {
			resizable: true
					, size: "40%"
					, spacing_closed: 27
					, togglerLength_closed: 85
					, togglerAlign_closed: "center"
					, togglerContent_closed: "<div id='menu_toggle'>X<BR>O<BR>N<BR>G</div>"
					, togglerTip_closed: "Open & Pin Menu"
					, sliderTip: "Slide Open Menu"
					, slideTrigger_open: "mouseover"
					, fxSettings_close: {easing: "easeOutQuint"}
					, initClosed:    false
			, onresize_end: function() {
				resize_control();

			}
			, onopen_end: function() {

				resize_control();
				//alert('c');
			}
			, onclose_end: function() {


			}

		}
		, center: {
			resizable: true
					, size: "60%"

					, fxName: "drop"		// none, slide, drop, scale
					, fxSpeed_open: 450
					, fxSpeed_close: 450
					, fxSettings_open: {easing: "easeInQuint"}
			, fxSettings_close: {easing: "easeOutQuint"}

			, onresize_end: function() {
				resize_control();
			}
			, onopen_end: function() {

			  //  resize_control();

			}
			, onclose_end: function() {



			}
		}
	});
}
   
function create_layout2(){
    $('#luoitrai').layout({
            resizerClass: 'ui-state-default'
                    , north: {
                resizable: true
                        , size: "45%"
                        , resizerDblClickToggle: false
                        , onresize_end: function() {
                   resize_control();
                }
                , onopen_end: function() {
                        resize_control();
                }
                , onclose_end: function() {
                    resize_control();
                }

            }
            , center: {
                resizable: true
                        , size: "55%"
                        , resizerDblClickToggle: false
                        , onresize_end: function() {
                    resize_control();
                }
                , onopen_end: function() {
                    resize_control();
                }
                , onclose_end: function() {
                    resize_control();
                }
            }

        });
    }
function resize_control() {

}
</script>



