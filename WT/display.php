<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>admin</title>
    <link href="../bootstrap-3.3.6-dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../bootstrap-3.3.6-dist/css/style.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="//oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="//oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="../bootstrap-3.3.6-dist/jquery.min.js"></script>
    <script src="../bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
      <script type="text/javascript" src="../bootstrap-3.3.6-dist/jquery-2.1.1.min.js"></script>
      <script src="../materialize/js/materialize.min.js"></script>
    <script src="../bootstrap-3.3.6-dist/parallax.min.js"></script>
</head>
<body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Library</a>
    </div>
    <ul class="nav navbar-nav">
      <li"><a href="homeadi.php">Issue & return</a></li>
      <li><a href="conadi.html">Register</a></li>
      <li class="active><a href="adminl.html">Admin Login</a></li>  
    </ul>
  </div>
</nav>


<?php
$sql_connection = mysqli_connect("mysql.hostinger.in", "u956517326_akash", "nokia5001995");

    mysqli_select_db($sql_connection,"u956517326_portf");

$sql = "SELECT * FROM issue";
$result = mysqli_query($sql_connection, $sql);

while($row = mysqli_fetch_assoc($result)) 
	{
		?>
		<center>
		<table border="3" width="200px">
		<thead>
			<tr>
				<td>ID</td>
				<td>Quantity</td>
			</tr>
		</thead>
			<tr>
				<td><?php echo  $row["id"];?></td>
				<td><?php echo $row["qty"];?></td>
			</tr>
		</table>
		</center>
<?php		     
    }
?>

</body>
</html>


