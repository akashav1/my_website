<?php
    
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    $comm = $_POST["comment"];
    $option = $_POST["boxc"];
    $abc = "From:" . $email . "\r\n";

    $sql_connection = mysqli_connect("mysql.hostinger.in", "u956517326_akash", "nokia5001995");

    mysqli_select_db($sql_connection,"u956517326_portf");


    mysqli_query($sql_connection,"INSERT INTO contact1 (
               id, fname, lname, email, comm, opt
            )
            VALUES (
                '','$fname','$lname','$email','$comm','$option'
                           )");

     echo nl2br("\n\n\nThank you for your feedback ". $fname . " ". $lname . " We will get back to you soon");

    mysqli_close($sql_connection);

     $to = "akashpatel886@gmail.com , coc.tablet177@gmail.com , harshit3228@gmail.com";
         $subject = "This is from student portal contact ". $option ;
         
         $message = $comm;
         
         $header = $abc;
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail ($to,$subject,$message,$header);
         
        /*if( $retval == true ) {
            echo "Message sent successfully...";
         }else {
            echo "Message could not be sent...";
         }*/
?>

<?php
        $to = $email;
         $subject = "This is auto generated mail";
         
         $message = "We will address your problem soon";
         
         $header =  "From:noreply@akashav1.xyz \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail ($to,$subject,$message,$header);
  ?>


<html>
<head>
 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Akash Patel</title>
    <link href="../bootstrap-3.3.6-dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../bootstrap-3.3.6-dist/css/style.css" rel="stylesheet">
<script src="../bootstrap-3.3.6-dist/jquery.min.js"></script>
    <script src="../bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../bootstrap-3.3.6-dist/jquery-2.1.1.min.js"></script>
<link href='https://fonts.googleapis.com/css?family=Coming+Soon' rel='stylesheet' type='text/css'> 
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:600italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=PT+Sans:400italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Courgette' rel='stylesheet' type='text/css'>
    <style>
  .nav{font-family: 'Source Sans Pro', sans-serif;font-size: 15px}
  body{color: blue;}
  </style>
</head>
<body>

<body>
 <nav class="navbar">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
      <li class="active"><a href="./nhm.html">Home</a></li>
      <li><a href="./home1.html">Events</a></li>
      <li><a href="./calnew.html">Calender</a></li>
      <li><a href="./contact1.html">Contact us</a></li>
      </ul>
    </div>
  </div>
</nav>

<p><br></p>
<a href="./nhm.html">Click here </a>to go back or else you will be redirected to home automatically in few seconds
<script type="text/javascript">   
function Redirect() 
{  
window.location="./nhm.html"; 
} 
setTimeout('Redirect()', 10000);   
</script>
</body>
</html>