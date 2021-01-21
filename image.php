<?php
// $file = file_get_contents('./enc.key', true);
// echo $file;

// open the file in a binary mode
$name = './apps.jpg';
$fp = fopen($name, 'rb');

// send the right headers
header("Content-Type: image/png");
header("Content-Length: " . filesize($name));

// dump the picture and stop the script
fpassthru($fp);
exit;

?>