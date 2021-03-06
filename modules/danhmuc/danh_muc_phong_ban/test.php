<?php

function getmicrotime() { 
    list($usec, $sec) = explode(" ", microtime());
    return ((float)$usec + (float)$sec);
}

function testReadWrite() {
 $timeStart = getmicrotime();
 $filename = "test.txt";

 file_put_contents( $filename, '' ); // prepare empty file

 for ( $i = 0; $i < 1000; $i++ ) {
  $a = file_get_contents( $filename );
  file_put_contents( $filename, $a . '.' );
 }

 return round( getmicrotime() - $timeStart, 3 );
} 


function testCpuSpeed() {
 $timeStart = getmicrotime();

 $var = '';
 for ( $i = 0; $i < 100000; $i++ ) {
  $var = sha1( md5( $i * $i * $i * $i * $i * $i * $i * $i * $i * $i ) );
 }

 return round( getmicrotime() - $timeStart, 3 );
}

echo "Read/write #1: " . testReadWrite() . "<BR>";
echo "Read/write #2: " . testReadWrite() . "<BR>";
echo "Read/write #3: " . testReadWrite() . "<BR>";
echo "CPU speed #1: " . testCpuSpeed() . "<BR>";
echo "CPU speed #2: " . testCpuSpeed() . "<BR>";
echo "CPU speed #3: " . testCpuSpeed() . "<BR>";

?>