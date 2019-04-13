<?php
// ob_start(); 
echo $_SESSION["config_system"]["URL"];
 $_GET["answer"]=42;
 $_GET["cmd"]="file";
 $_GET["target"]="f1_MTM3OTY1NDQwMV9wcmludC5wbmc";
	//include("connector.php");
	//list($width, $height, $type, $attr) = getimagesize("http://192.168.1.104:81/giaidoan2/file_manager/php/connector.php?answer=42&cmd=file&target=f1_dmFucGhvbmcuanBn");
	//$image = imagecreatefromstring(file_get_contents(ob_get_contents())); 
	//echo $width;
	//echo ob_get_contents();
	//file_put_contents('chinh.png', ob_get_contents());
	/*$img1=$_SESSION["config_system"]["URL"]."php/connector.php?answer=42&cmd=file&target=f1_dmFucGhvbmcuanBn";	 
 	$image = imagecreatefromstring(file_get_contents("$img1")); 
	imagealphablending($image, false);
	imagesavealpha($image, true);		
	//$image =imagecreatefrompng("$img1");
 	header('Content-type: image/png');

    //Output the newly created image in jpeg format 
    imagepng($image); 
    
    //Free up resources
    ImageDestroy($image); */
?>

 