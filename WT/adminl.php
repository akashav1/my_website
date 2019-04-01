<?php
$tname = $_POST["tname"];
$pass = $_POST["pass"];
if($tname == "1" && $pass == "123")
{
$url='./display.php';
   echo '<META HTTP-EQUIV=REFRESH CONTENT="1; '.$url.'">';
}
else
{
echo "enter the correct password";
}
?>