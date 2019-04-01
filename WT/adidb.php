<?php
    
    $name = $_POST["name"];
    $bran = $_POST["bran"];
    $email = $_POST["email"];
    $mob = $_POST["mob"];

    $sql_connection = mysqli_connect("mysql.hostinger.in", "u956517326_akash", "nokia5001995");

    mysqli_select_db($sql_connection,"u956517326_portf");


    mysqli_query($sql_connection,"INSERT INTO cona (
               id, name, bran, email, mob
            )
            VALUES (
                '','$name','$bran','$email','$mob'
                           )");

     echo nl2br("\n\n\nThank you ". $name . " " . " you have successfully registered");

    mysqli_close($sql_connection);
?>


<html>
<head>
 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
    <link href="../bootstrap-3.3.6-dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../bootstrap-3.3.6-dist/css/style.css" rel="stylesheet">
<script src="../bootstrap-3.3.6-dist/jquery.min.js"></script>
    <script src="../bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../bootstrap-3.3.6-dist/jquery-2.1.1.min.js"></script>
<link href='https://fonts.googleapis.com/css?family=Coming+Soon' rel='stylesheet' type='text/css'> 
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:600italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=PT+Sans:400italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Courgette' rel='stylesheet' type='text/css'>
</head>
<body>

<body>


<p><br></p>
<a href="./homeadi.php">Click here </a>to go back or else you will be redirected to home automatically in few seconds
<script type="text/javascript">   
function Redirect() 
{  
window.location="./homeadi.php"; 
} 
setTimeout('Redirect()', 5000);   
</script>
</body>
</html>