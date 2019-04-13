
<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<title>Chrome Webkit Speech Demo</title>
<link href="../styles/demos.css" rel="stylesheet" type="text/css">
<style type="text/css">
input{
	width:600px;	
	font-size:18px;
}
input:focus{
	background-color:#AEFBAC;
}
#noSpeech, #speechEnabled, #msg{
	display:none;	
}
#msg{
	border:1px solid #030;	
	width:300px;
	text-align:center;
	padding:5px;
}
</style>
<script type="text/javascript" src="js/jquery-1.9.0.js"></script>
</script>
</head>
<body lang="vi">
<div id="container">
<div id="mainContent">
<div id="speechEnabled">
  <h1>Speak to the Machine</h1>
  <form>
  	<p>
    	<input type="text" id="speakToMe" onwebkitspeechchange="checkName();" x-webkit-speech speech />
    </p>
  </form>
</div>
<div id="noSpeech">
<h1>Sorry</h1>
<p>Talk all you like but I ain't listening.  You need Google Chrome</p>
</div>
<div id="msg">
<p></p>
</div>
</div>
<script>

    if (document.createElement("input").webkitSpeech === undefined) {
		$('#speechEnabled').hide();
		$('#noSpeech').show(); 
    } else{
		$('#speechEnabled').show();
		$('#noSpeech').hide(); 
	}

	function checkName(){
		switch($('#speakToMe').val()){
		
		case "you smell" : 
			$('#msg p').text("get lost Magnus");
			$('#msg').removeAttr('style');
			$('#msg').css({'background-color':'#D98162', 'color': '#ffffff'});
			$('#msg').fadeIn(1000).delay(1000).fadeOut(500);
			break;
			
		case "hello" : 
			$('#msg p').text("hello Martin");
			$('#msg').removeAttr('style');
			$('#msg').css({'background-color':'#D98162', 'color': '#ffffff'});
			$('#msg').fadeIn(1000).delay(1000).fadeOut(500);
			break;
			
		case "hello computer" : 
			$('#msg p').text("hi magnus");
			$('#msg').removeAttr('style');
			$('#msg').css({'background-color':'#D98162', 'color': '#ffffff'});
			$('#msg').fadeIn(1000).delay(1000).fadeOut(500);
			break;
			
		case "let me in" : 
			$('#msg p').text('No');
			$('#msg').removeAttr('style');
			$('#msg').css({'background-color':'#D98162', 'color': '#ffffff'});
			$('#msg').fadeIn(1000).delay(1000).fadeOut(500);
			break;

		case "let me in now" : 
			$('#msg p').text("Don't be rude");
			$('#msg').removeAttr('style');
			$('#msg').css({'background-color':'#A65858'});
			$('#msg').fadeIn(1000).delay(1000).fadeOut(500);
			break;	

		case "let me in please" : 
			$('#msg p').text('Welcome');
			$('#msg').removeAttr('style');
			$('#msg').css({'background-color':'#888C65', 'color': '#174040'});
			$('#msg').fadeIn(1000).delay(1000).fadeOut(500);
			break;

		default :
			$('#msg p').text('Sorry, try again');
			$('#msg').removeAttr('style');
			$('#msg').css({'background-color':'#D9CA9C'});
			$('#msg').fadeIn(1000).delay(1000).fadeOut(500);
			break;
			}
	}
</script>	
</body>
</html>