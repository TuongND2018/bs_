<?php	
	
		function get_text($code){
			 
			if(isset($_GET["view"])){$view = $_GET["view"];}
			else{
				$view=NULL;
				};
				
			if(isset($_GET["module"])){$modules = $_GET["module"];};
		    $split_text = array("\r", "\n");
			$handle = @fopen("modules/".$modules."/".$view."/vi.txt", "r");		
			
			if ($handle) {
				while (!feof($handle)) {
					$temp=explode("=",fgets($handle, filesize("modules/".$modules."/".$view."/vi.txt")));
					
					if($temp[0]==$code){
						$noidung[$temp[0]]=str_replace($split_text,"",$temp[1]) ;	
						fclose($handle);
						break;
					}
								
				}	
				   
				//fclose($handle);
				//print_r($noidung);				 
			   // return $noidung[$code];
				
		}
		echo( $noidung[$code]);	
	}


	function get_text1($code){
			 
			if(isset($_GET["view"])){$view = $_GET["view"];};
			if(isset($_GET["module"])){$modules = $_GET["module"];};
		    $split_text = array("\r", "\n");
			$handle = @fopen("language/vi.txt", "r");		
			
			if ($handle) {
				while (!feof($handle)) {
					$temp=explode("=",fgets($handle, filesize("language/vi.txt")));
					
					if($temp[0]==$code){
						$noidung[$temp[0]]=str_replace($split_text,"",$temp[1]) ;	
						fclose($handle);
						break;
					}
								
				}	
				   
				//fclose($handle);
				//print_r($noidung);				 
			   // return $noidung[$code];
				
		}
		echo( $noidung[$code]);	
	}
?>