<style type="text/css">
.custom-combobox-toggle{
	display:none;	
}

</style>
<div id="login_main">
    <div id="left_load"></div>
    <div id="login_bg"></div>
    <div id="top_load"></div>
    <div id="bottom_load"></div>
    <div id="login">
    	<div id="form_title">      
         	<div>Đăng nhập</div>
            <span>Hệ thống phần mềm quản lý bệnh viện</span>
        </div>
        <div id="form_login">
    		<div><label for="usermane">Tên đăng nhập:</label>
            <select name="usermane" id="usermane" ></select>            
            <!--<input autocomplete="on" type="text" id="usermane" name="usermane" />--></div>
            <div><label for="password">Mật khẩu:</label><input  type="password" id="password" name="password" /></div>            
            <div id="lost_pass">Quên mật khẩu</div>
            <div id="submit_login" >Đăng nhập</div>
            <div class='loading'></div>
    	</div>
    </div>
</div>
</body>
<script type="text/javascript">
var status=0;
var _check=false;
$(document).ready(function(){	
	//alert($.cookie("tendangnhap"))
	if($.cookie("tendangnhap")!=null){		
	//alert($.cookie("tendangnhap"))
	//$.cookie("tendangnhap","")
		tendangnhap = $.cookie("tendangnhap").split("||");
		for (i = 0; i <= tendangnhap.length - 1; i++) {			 
			$('#usermane').append($('<option>', {
				value: tendangnhap[i],
				text: tendangnhap[i]
			}));
		}
	}
	autocompleted_combobox_add('#usermane');	
	var str=window.location;	 
	if(String(str).match("login=false")!=null){
		window.history.pushState("string", "Title", "http://<?=$_SERVER['HTTP_HOST'];?>/bstruong/");
	}
	jQuery(window).resize(function() {		 
		load_login();	 	
	}); 
	load_login();
	tt=setTimeout(function(){
		$("#usermane1").select();	 
	},3000);
	
  	$(function() {
		$( "#login" ).draggable();
  	});	 
	$("#submit_login").click(function(){
		if(status==0){
			status=1;
			$( ".loading" ).append("<div id='loading'></div>");
			username=$("#usermane1").val();
			password=$("#password").val();
			
			if($.cookie("tendangnhap")!=null){			 
				check_tendangnhap = $.cookie("tendangnhap").split("||");
				for (i = 0; i <= check_tendangnhap.length - 1; i++) {	
					if(check_tendangnhap[i].replace("||")==$("#usermane1").val()){
						_check=true;
					}					 
				}
				if(_check==false){			 
					$.cookie("tendangnhap",$.cookie("tendangnhap")+$("#usermane1").val()+"||");
					check=false;
				}
			}else{
				$.cookie("tendangnhap",$("#usermane1").val()+"||");
			}
			jQuery.post('resource.php?module=login&action=login_controler&username='+username+'&password='+password+'&c_tendangnhap='+$.cookie("tendangnhap"), function(data){			 
				$(".loading").empty();
				if(data!="true"){			
					tooltip_message(data)
				}else{
					window.location.href = "http://<?=$_SERVER['HTTP_HOST'];?>/bstruong/";
				}
				status=0;
			})
		}
	});
	jwerty.key('shift+tab', false);
	jwerty.key('tab"', false);
	$('#submit_login').bind('keydown', function (e) {		
		if (jwerty.is('enter',e)) {			  
		  $("#submit_login").trigger("click");			 
		}
	});
	$('#password').bind('keydown', function (e) {		
		if (jwerty.is('enter',e)) {			  
		  $("#submit_login").trigger("click");			 
		}
	});
	
	$("#submit_login").focus(function(){		 
		  $("#submit_login").toggleClass("submit_login_hover");
	})
	$("#submit_login").focusout(function(){		 
		  $("#submit_login").removeClass("submit_login_hover");
	})
	$('#login input,div#submit_login').bind("keydown", function(e) {			 
		if (jwerty.is("enter",e)||jwerty.is("tab",e)) {  			
			/* FOCUS ELEMENT */			
			var inputs = $(this).parents("#form_login").eq(0).find("input,div#submit_login");
			var idx = inputs.index(this);			 
			if (idx == inputs.length - 1) {					 
				//$("#submit_login").focus();				 		 
			} else {			 
				inputs[idx + 1].focus(); 				 										 
			}			 
			return false;
		}else if(jwerty.is("shift+tab",e)){
			var inputs = $(this).parents("#form_login").eq(0).find("input,div#submit_login");
			var idx = inputs.index(this);
			//alert(idx)
			if (idx >0) {					 
				inputs[idx -1].focus();		 
			}
		}			
	});	 
})
function autocompleted_combobox_add(elem) {
    (function($) {
        $.widget("custom.combobox", {
            _create: function() {
                this.wrapper = $("<span>")
                        .addClass("custom-combobox")
                        .insertAfter(this.element);
                this.element.hide();
                this._createAutocomplete();
                this._createShowAllButton();
            },
            _createAutocomplete: function() {
                var selected = this.element.children(":selected"),
                        value = selected.val() ? selected.text() : "";
                this.input = $("<input>")
                        .appendTo(this.wrapper)
                        .val(value)
                        .attr("type","text")
                        .attr("id", elem.replace(/[&\/\\#,+()$~%.'":*?<>{}]/g, "") + "1")
                        .attr("name", elem.replace(/[&\/\\#,+()$~%.'":*?<>{}]/g, "") + "1")
                        .attr("title", "")
                        .addClass("custom-combobox-input ui-widget ui-widget-content ui-state-default ui-corner-left")
                        .autocomplete({
                    delay: 0,
                    minLength: 0,
                    source: $.proxy(this, "_source")
                })
                        .tooltip({
                    tooltipClass: "ui-state-highlight"
                });
                this._on(this.input, {
                    autocompleteselect: function(event, ui) {
                        ui.item.option.selected = true;
                        this._trigger("select", event, {
                            item: ui.item.option
                        });
                    },
                   // autocompletechange: "_removeIfInvalid"
                });
            },
            _createShowAllButton: function() {
                var input = this.input;

                $("<a>")
                        .attr("tabIndex", -1)
                        .attr("title", "Show All Items")
                        .tooltip()
                        .appendTo(this.wrapper)
                        .button({
                    icons: {
                        primary: "ui-icon-triangle-1-s"
                    },
                    text: false
                })
                        .removeClass("ui-corner-all")
                        .addClass("custom-combobox-toggle ui-corner-right")
                        .mousedown(function() {
                    wasOpen = input.autocomplete("widget").is(":visible");
                })
                        .click(function() {
                    input.focus();
                    // Close if already visible
                    if (wasOpen) {
                        return;
                    }
                    // Pass empty string as value to search for, displaying all results
                    input.autocomplete("search", "");
                });
            },
            _source: function(request, response) {
                var matcher = new RegExp($.ui.autocomplete.escapeRegex(request.term), "i");
                response(this.element.children("option").map(function() {
                    var text = $(this).text();
                    if (this.value && (!request.term || matcher.test(text)))
                        return {
                            label: text,
                            value: text,
                            option: this
                        };
                }));
            },
            _removeIfInvalid: function(event, ui) {
                // Selected an item, nothing to do
                if (ui.item) {
                    return;
                }
                // Search for a match (case-insensitive)
                var value = this.input.val(),
                        valueLowerCase = value.toLowerCase(),
                        valid = false;
                this.element.children("option").each(function() {
                    if ($(this).text().toLowerCase() === valueLowerCase) {
                        this.selected = valid = true;
                        return false;
                    }
                });
                // Found a match, nothing to do
                if (valid) {
                    return;
                }
                // Remove invalid value
                this.input
                        .val("")
                        .attr("title", value + " didn't match any item")
                        .tooltip("open");
                this.element.val("");
                this._delay(function() {
                    this.input.tooltip("close").attr("title", "");
                }, 2500);
                this.input.data("ui-autocomplete").term = "";
            },
            _destroy: function() {
                this.wrapper.remove();
                this.element.show();
            }
        });
    })(jQuery);

    jQuery(elem).combobox();
    $.extend($.ui.autocomplete.prototype, {
        _renderItem: function(ul, item) {
            var term = this.element.val(),
                    html = item.label.replace(new RegExp("(?![^&;]+;)(?!<[^<>]*)(" + $.ui.autocomplete.escapeRegex(term) + ")(?![^<>]*>)(?![^&;]+;)", "gi"), "<strong style='color:#F60'>$1</strong>");
            return $("<li></li>")
                    .data("item.autocomplete", item)
                    .append($("<a></a>").html(html))
                    .appendTo(ul);
        }
    });
}
function load_login(){
	tops_login=	$(window).height()/2 - $("#login").height()/2;
	left_login=	$(window).width()/2 - $("#login").width()/2;
	$("#login").css("margin-top",tops_login+"px");
	$("#login").css("margin-left",left_login+"px");		
	tops_bottom=	$(window).height() - $("#bottom_load").height();	 
	$("#bottom_load").css("margin-top",tops_bottom+"px");	
	tops_left_col=	$("#top_load").height();	 
	$("#left_load").css("margin-top",tops_left_col+"px");	
	 $('#overlay').animate({
		opacity: 0.5,		 
	  }, 2000,"easeInBack",function() {
		$("#login").fadeIn(1500,"easeInBack",function(){	
			$("#login").css("box-shadow","0px 0px 100px #FFFFFF");
			$("#usermane").focus();		 			
		});
		$("#top_load").fadeIn(1000,"easeInCubic",function(){
				$("#left_load").fadeIn(1000,"easeInCubic",function(){
					$("#bottom_load").fadeIn(1000,"easeInCubic");
				});
		});
	 });	 	
}


</script>