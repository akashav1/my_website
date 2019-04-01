<!DOCTYPE html>
<html>
<head>
    <title>Thank you</title>
</head>
<body>


<?php
$dir = $_POST["boxc"];
$target_dir = "uploads/$dir/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$documentFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Allow certain file formats
if($documentFileType != "pdf" && $documentFileType != "doc" && $documentFileType != "docx") {
    echo "Sorry, only documents are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>
<br>
<a href="./download.html">Click here</a> to go back or else you will be redirected in few seconds
<script type="text/javascript">   
function Redirect() 
{  
window.location="./download.html"; 
} 
setTimeout('Redirect()', 10000);   
</script>

</body>
</html>