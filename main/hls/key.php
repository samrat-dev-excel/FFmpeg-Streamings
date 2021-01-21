<?php
// if(!defined('auth')) {
//    exit('stop');
// }
// open the file in a binary mode
$name = './enc.key';
$fp = fopen($name, 'rb');

// send the right headers
header("Content-Type: application/json");
header("Content-Length: " . filesize($name));

// dump the picture and stop the script
fpassthru($fp);
exit;

?>