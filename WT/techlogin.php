<!DOCTYPE html>
<html>
<head>
	<title>welcome</title>
</head>
<body>

<?php
$tname = $_POST["tname"];
$pass = $_POST["pass"];
if($tname == "1" && $pass == "123")
{
$url='./uploads/1/';
   echo '<META HTTP-EQUIV=REFRESH CONTENT="1; '.$url.'">';
}
elseif($tname == "2" && $pass == "234")
{
$url='./uploads/2/';
   echo '<META HTTP-EQUIV=REFRESH CONTENT="1; '.$url.'">';
}
elseif($tname == "3" && $pass == "345")
{
$url='./uploads/3/';
   echo '<META HTTP-EQUIV=REFRESH CONTENT="1; '.$url.'">';
}
elseif($tname == "4" && $pass == "456")
{
$url='./uploads/4/';
   echo '<META HTTP-EQUIV=REFRESH CONTENT="1; '.$url.'">';
}
elseif($tname == "5" && $pass == "567")
{
$url='./uploads/5/';
   echo '<META HTTP-EQUIV=REFRESH CONTENT="1; '.$url.'">';
}
else
{
	echo "Please enter the correct password";
?>
<a href="./teacher.html">Click here</a> to login again or else you will be redirected to homepage in few seconds
<script type="text/javascript">   
function Redirect() 
{  
window.location="./nhm.html"; 
} 
setTimeout('Redirect()', 15000);   
</script>
<?php
}
?>
</body>
</html>