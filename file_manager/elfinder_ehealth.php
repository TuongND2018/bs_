<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Hệ thống quản lý file phần mềm Ehealth</title>
	<!-- 
	<script type="text/javascript" src="https://getfirebug.com/firebug-lite.js"></script>
	-->

	<!-- <script src="jquery/jquery-1.8.1.min.js" type="text/javascript" charset="utf-8"></script> -->
	<script src="jquery/jquery-1.9.1.min.js" type="text/javascript" charset="utf-8"></script>
	
	<!-- <script src="jquery/jquery-ui-1.8.21.custom.min.js"></script> -->
	<!-- <script src="jquery/jquery-ui-1.8.23.custom.min.js" type="text/javascript" charset="utf-8"></script> -->
	<!-- <link rel="stylesheet" href="jquery/ui-themes/smoothness/jquery-ui-1.8.23.custom.css" type="text/css" media="screen" title="no title" charset="utf-8"> -->
	
	<script src="jquery/jquery-ui-1.10.1.custom.min.js" type="text/javascript" charset="utf-8"></script>
	<link rel="stylesheet" href="jquery/ui-themes/smoothness/jquery-ui-1.10.1.custom.css" type="text/css" media="screen" title="no title" charset="utf-8">
	
	
	<!-- <link rel="stylesheet" href="jquery/ui-themes/smoothness/jquery-ui-1.8.21.custom.css" type="text/css"> -->

	
	<link rel="stylesheet" href="css/common.css"      type="text/css">
	<link rel="stylesheet" href="css/dialog.css"      type="text/css">
	<link rel="stylesheet" href="css/toolbar.css"     type="text/css">
	<link rel="stylesheet" href="css/navbar.css"      type="text/css">
	<link rel="stylesheet" href="css/statusbar.css"   type="text/css">
	<link rel="stylesheet" href="css/contextmenu.css" type="text/css">
	<link rel="stylesheet" href="css/cwd.css"         type="text/css">
	<link rel="stylesheet" href="css/quicklook.css"   type="text/css">
	<link rel="stylesheet" href="css/commands.css"    type="text/css">

	<link rel="stylesheet" href="css/fonts.css"       type="text/css">
	<link rel="stylesheet" href="css/theme.css"       type="text/css">

	<!-- elfinder core -->
	<script src="js/elFinder.js"></script>
	<script src="js/elFinder.version.js"></script>
	<script src="js/jquery.elfinder.js"></script>
	<script src="js/elFinder.resources.js"></script>
	<script src="js/elFinder.options.js"></script>
	<script src="js/elFinder.history.js"></script>
	<script src="js/elFinder.command.js"></script>

	<!-- elfinder ui -->
	<script src="js/ui/overlay.js"></script>
	<script src="js/ui/workzone.js"></script>
	<script src="js/ui/navbar.js"></script>
	<script src="js/ui/dialog.js"></script>
	<script src="js/ui/tree.js"></script>
	<script src="js/ui/cwd.js"></script>
	<script src="js/ui/toolbar.js"></script>
	<script src="js/ui/button.js"></script>
	<script src="js/ui/uploadButton.js"></script>
	<script src="js/ui/viewbutton.js"></script>
	<script src="js/ui/searchbutton.js"></script>
	<script src="js/ui/sortbutton.js"></script>
	<script src="js/ui/panel.js"></script>
	<script src="js/ui/contextmenu.js"></script>
	<script src="js/ui/path.js"></script>
	<script src="js/ui/stat.js"></script>
	<script src="js/ui/places.js"></script>

	<!-- elfinder commands -->
	<script src="js/commands/back.js"></script>
	<script src="js/commands/forward.js"></script>
	<script src="js/commands/reload.js"></script>
	<script src="js/commands/up.js"></script>
	<script src="js/commands/home.js"></script>
	<script src="js/commands/copy.js"></script>
	<script src="js/commands/cut.js"></script>
	<script src="js/commands/paste.js"></script>
	<script src="js/commands/open.js"></script>
	<script src="js/commands/rm.js"></script>
	<script src="js/commands/info.js"></script>
	<script src="js/commands/duplicate.js"></script>
	<script src="js/commands/rename.js"></script>
	<script src="js/commands/help.js"></script>
	<script src="js/commands/getfile.js"></script>
	<script src="js/commands/mkdir.js"></script>
	<script src="js/commands/mkfile.js"></script>
	<script src="js/commands/upload.js"></script>
	<script src="js/commands/download.js"></script>
	<script src="js/commands/edit.js"></script>
	<script src="js/commands/quicklook.js"></script>
	<script src="js/commands/quicklook.plugins.js"></script>
	<script src="js/commands/extract.js"></script>
	<script src="js/commands/archive.js"></script>
	<script src="js/commands/search.js"></script>
	<script src="js/commands/view.js"></script>
	<script src="js/commands/resize.js"></script>
	<script src="js/commands/sort.js"></script>	
	<script src="js/commands/netmount.js"></script>	

	<!-- elfinder languages -->
	<script src="js/i18n/elfinder.ar.js"></script>
	<script src="js/i18n/elfinder.bg.js"></script>
	<script src="js/i18n/elfinder.ca.js"></script>
	<script src="js/i18n/elfinder.cs.js"></script>
	<script src="js/i18n/elfinder.de.js"></script>
	<script src="js/i18n/elfinder.el.js"></script>
	<script src="js/i18n/elfinder.en.js"></script>
	<script src="js/i18n/elfinder.es.js"></script>
	<script src="js/i18n/elfinder.fa.js"></script>
	<script src="js/i18n/elfinder.fr.js"></script>
	<script src="js/i18n/elfinder.hu.js"></script>
	<script src="js/i18n/elfinder.it.js"></script>
	<script src="js/i18n/elfinder.jp.js"></script>
	<script src="js/i18n/elfinder.ko.js"></script>
	<script src="js/i18n/elfinder.nl.js"></script>
	<script src="js/i18n/elfinder.no.js"></script>
	<script src="js/i18n/elfinder.pl.js"></script>
	<script src="js/i18n/elfinder.pt_BR.js"></script>
	<script src="js/i18n/elfinder.ru.js"></script>
	<script src="js/i18n/elfinder.sl.js"></script>
	<script src="js/i18n/elfinder.sv.js"></script>
	<script src="js/i18n/elfinder.tr.js"></script>
	<script src="js/i18n/elfinder.zh_CN.js"></script>
	<script src="js/i18n/elfinder.zh_TW.js"></script>
	<script src="js/i18n/elfinder.vi.js"></script>

	<!-- elfinder dialog -->
	<script src="js/jquery.dialogelfinder.js"></script>

	<!-- elfinder 1.x connector API support -->
	<script src="js/proxy/elFinderSupportVer1.js"></script>

	<!-- elfinder custom extenstions -->
	<script src="extensions/jplayer/elfinder.quicklook.jplayer.js"></script>

	<style type="text/css">
		body { font-family:arial, verdana, sans-serif;}
		.button {
			width: 100px;
			position:relative;
			display: -moz-inline-stack;
			display: inline-block;
			vertical-align: top;
			zoom: 1;
			*display: inline;
			margin:0 3px 3px 0;
			padding:1px 0;
			text-align:center;
			border:1px solid #ccc;
			background-color:#eee;
			margin:1em .5em;
			padding:.3em .7em;
			border-radius:5px; 
			-moz-border-radius:5px; 
			-webkit-border-radius:5px;
			cursor:pointer;
		}
/*
		#dialog {
			position:absolute;
			left:50%;
			top:1000px;
		}
*/
	</style>

	<script>
		$().ready(function() {
			$('#finder').elfinder({
				// requestType : 'post',

				// url : 'php/connector.php',
				url : 'php/connector.php',
				// transport : new elFinderSupportVer1(),
				// getFileCallback : function(files, fm) {
				// 	console.log(files);
				// },
				handlers : {
                    select : function(event, elfinderInstance) {
                        var selected = event.data.selected;
						
						if (selected.length) {
							// console.log(elfinderInstance.file(selected[0]))
						}
						
                    }
                },
				// handlers : {
				// 	select : function(e) {
				// 		console.log(e.data)
				// 	}
				// },
				// onlyMimes : ['image', 'text/plain']
				// sync : 20000,
				lang : 'vi',
				customData : {answer : 42,tenthumuc:'<?php echo $_GET["tenthumuc"]?>',profile:'<?php echo $_GET["profile"]?>'},
				// requestType : 'POST',
				// rememberLastDir : false,
				// ui : ['tree', 'toolbar'],
				// ui : ['toolbar', 'path', 'stat'],
				// commands : [],
				// commandsOptions : {
				// 	edit : {
				// 		mimes : ['text/plain', 'text/html', 'text/javascript'],
				// 		editors : [
				// 			{
				// 				mimes : ['text/html'],
				// 				load : function(textarea) {
				// 					tinyMCE.execCommand("mceAddControl", true, textarea.id);
				// 				},
				// 				close : function(textarea, instance) {
				// 					tinyMCE.execCommand('mceRemoveControl', false, textarea.id);
				// 				},
				// 				save : function(textarea, editor) {
				// 					textarea.value = tinyMCE.get(textarea.id).selection.getContent({format : 'html'});
				// 					tinyMCE.execCommand('mceRemoveControl', false, textarea.id);
				// 				}
				// 
				// 			}
				// 		]
				// 	}
				// }
				// uiOptions : {
				// 	toolbar : [['help']]
				// }
			})

			// $('#finder2').elfinder({
			// 	url : 'connectors/php/connector.php',
			// 	width:650,
			// 	lang : 'ru'
			// })

			// console.log(f1)
			// 
			// setTimeout(function() {
			// 	console.log($('#finder').elfinder('instance'))
			// }, 2000)

			// new elFinder($('<div/>'))

			// var f2 = $('#asd').elfinder({
			// 	url : 'connectors/php/connector.php',
			// 	lang : 'ru'
			// }).elfinder('instance')
			
			$('#back').click(function(e) {
				f1.exec('back')
			})
			$('#fwd').click(function(e) {
				f1.exec('forward')
			})

			$('#dialog').click(function() {
				var fm = $('<div/>').dialogelfinder({
					url : 'php/connector.php',
					lang : 'vi',
					customData : {answer : 42,tenthumuc:'<?php echo $_GET["tenthumuc"]?>'},
					width : 840,
					destroyOnClose : true,
					getFileCallback : function(files, fm) {
						console.log(files);
					},
					commandsOptions : {
						getfile : {
							oncomplete : 'close',
							folders : true
						}
					}
				}).dialogelfinder('instance');
			});

		});
	</script>
</head>
<body>
	<!--<div id="back" class="button">back</div>
	<div id="fwd" class="button">forward</div>
	<div id="dialog" class="button">dialog</div>-->
	<!-- <div id="close"  class="button">close</div>
	<div id="dock" class="button">dock</div>
	<div id="undock" class="button">undock</div>-->
	<!-- <div style="width:670px; float:left"> -->
		<div id="finder">finder <span>here</span></div>
	<!-- </div> -->
	<!-- <div style="width:670px; float:left">
		<div id="finder2">finder</div> 
	</div> -->
	<!--<br clear="all"/>
	<input type="text" value="123" />
	<input type="text" value="456" />
-->
	<!-- <div><input type="text" id="i1"></div> -->
	<!-- <div><input type="text" id="i2"></div> -->

</body>
</html>
