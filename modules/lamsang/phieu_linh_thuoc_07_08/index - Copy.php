<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

</head>
<body>
    <div id="main_content">
    	<div class="ui-layout-north n_tren"> 
            <table id="rowed3" ></table>
        </div>
        <div class="ui-layout-center n_duoi"> 
            <table id="rowed4" ></table>
        </div>
    </div>
</body>
<script type="text/javascript">
$(document).ready(function(e) {
	$("#main_content").css("height",$(window).height()+"px");			 
	$("#main_content").fadeIn(1000); 
    create_layout();
	resize_control();
});
$(window).resize(function() {
	$("#main_content").css("height",$(window).height()+"px");			 
	$("#main_content").fadeIn(1000);
	resize_control();
})
function create_layout(){
	$('#main_content').layout({
            resizerClass: 'ui-state-default'
                    , north: {
                resizable: true
                        , size: "50%"
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
                        , size: "50%"
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
function resize_control(){
	//$("#main_content").css('width',$(window).width()-22);
	//$("#rowed3").setGridWidth($("#n_tong").width());
	//$("#rowed3").setGridHeight($(window).height()-$("#form_danh_muc_phong_ban").height()-$("#panel_main1").height()-170);
}
</script>
</html>

