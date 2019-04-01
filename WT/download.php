<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
    <link rel="stylesheet" href="../extra/materialize.css">
      <script type="text/javascript" src="../bootstrap-3.3.6-dist/jquery-2.1.1.min.js"></script>
      <script src="../materialize/js/materialize.min.js"></script>
    <script src="../bootstrap-3.3.6-dist/parallax.min.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Coming+Soon' rel='stylesheet' type='text/css'> 
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:600italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=PT+Sans:400italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Courgette' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Josefin+Sans:300' rel='stylesheet' type='text/css'>
	<title>Download</title>
	 <script>
         $(document).ready(function() {
         $('select').material_select();
      });
      </script>
      <style>
      .nav{font-family: 'Courgette', cursive;font-size: 15px}
      body{background-color: #dcedc8}
      </style>
      <meta name="theme-color" content="#7cb342">
</head>
<body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
    </div>
    <ul class="nav navbar-nav">
      <li><a href="./nhm.html">Home</a></li>
      <li><a href="./home1.html">Events</a></li>
      <li class="active"><a href="./download.php">Downloads & Uploads</a></li>
      <li><a href="./calnew.html">Calender</a></li>
      <li><a href="./contact1.php">Contact us</a></li>
      <li><a href="./teacher.html">Teacher login</a></li>
    </ul>
  </div>
</nav>


<div class="container">
<center>
	<table>
		<tr>
			<td>1</td>
			<td>WT</td>
			<td><a href="down1.php">Click here</a> to download the file</td>
		</tr>
		<tr>
			<td>2</td>
			<td>AJAVA</td>
			<td><a href="down2.php">Click here</a> to download the file</td>
		</tr>
		<tr>
			<td>3</td>
			<td>.Net</td>
			<td><a href="down3.php">Click here</a> to download the file</td>
		</tr>
		<tr>
			<td>4</td>
			<td>TOC</td>
			<td><a href="down3.php">Click here</a> to download the file</td>
		</tr>
		<tr>
			<td>5</td>
			<td>SE</td>
			<td><a href="down5.php">Click here</a> to download the file</td>
		</tr>
	</table>
	</center>
	</div>

<p><br><br><br></p>
	<div class="container">
	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">
	<div class="row">
      <div class="input-field col s12 ft" style="color: #2979ff;text-decoration: bold">
    <select name="boxc">
        <option value="1">Teacher 1</option>
        <option value="2">Teacher 2</option>
        <option value="3">Teacher 3</option>
        <option value="4">Teacher 4</option>
        <option value="5">Teacher 5</option>
    </select>
    <label class="ft" style="color: #2979ff">Teacher name</label>
  </div>
  </div>  
  <input type="file" style="visibility:hidden;" name="fileToUpload" id="fileToUpload"/>
		<label>Choose A File</label>
		<div class="row">
		<div class="input-append">
		
		<div class="input-field col s6">
			<!-- This input is here purely for cosmetic reasons. The actual file is uploaded from the hidden input box !-->
			<input type="text" id="subfile">
			</div>
			<a class="btn" onclick="$('#fileToUpload').click();">Browse</a>
		
		</div></div>
	<input type="submit" class="btn" value="Upload File" name="submit">

	<script>
 	$(document).ready(function(){
 		$('#fileToUpload').change(function(){
			$('#subfile').val($(this).val());
		});
		$('#showHidden').click(function(){
			$('#fileToUpload').css('visibilty','visible');
		});
 	});
 	</script>
 	<?php
 	if (isset($_POST['submit'])){
 	$dir = $_POST["boxc"];
$target_dir = "uploads/$dir/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$documentFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
// Check if file already exists
if (file_exists($target_file)) {
 echo "<script>alert('Sorry, file already exists.');</script>";
    $uploadOk = 0;
}
// Allow certain file formats
if($documentFileType != "pdf" && $documentFileType != "doc" && $documentFileType != "docx") {
 echo "<script>alert('Sorry, only documents are allowed.');</script>";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
 echo "<script>alert('Sorry, your file was not uploaded.');</script>";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    	echo "<script>alert('the file ". basename( $_FILES["fileToUpload"]["name"]) . " has been uploaded to teacher " . $dir . "');</script>";
    } else {
     echo "<script>alert('Sorry, there was an error uploading your file.');</script>";
    }
}
}
?>
	</form>
</body>
</html>