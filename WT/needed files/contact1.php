

<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact us</title>
    <script src="../../plugins/js/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="../../plugins/js/jquery/jquery-2.1.1.min.js"></script>
    <script src="../../plugins/js/materialize.min.js"></script>
    <link href="../../plugins/style/bootstrap/bootstrap.min.css" rel="stylesheet">
    <script src="../../plugins/js/bootstrap/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../../plugins/style/materialize.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="//oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="//oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <script type="text/javascript" src="../../plugins/js/parallax.min.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Coming+Soon' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:600italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=PT+Sans:400italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Courgette' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Josefin+Sans:300' rel='stylesheet' type='text/css'>
  <style>
  p.chec{font-family: 'Alegreya Sans', sans-serif;font-size: 20px}
  p{font-family: 'Raleway', sans-serif;}
  p.but{font-family: 'Open Sans Condensed', sans-serif;font-weight: bold;font-size: 20px;}

  .gr:hover{background-color: #81c784;}
  .rd:hover{background-color: #e57373;}

  .ft{font-family: 'Raleway', sans-serif;}
  body{background-image: url("./images/Aventura02.jpg");color: white}
  </style>
   <script>
         $(document).ready(function() {
         $('select').material_select();
      });
      </script>
       <style>
      .nav{font-family: 'Courgette', cursive;font-size: 15px}
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
      <li><a href="./download.php">Downloads & Uploads</a></li>
      <li><a href="./calnew.html">Calender</a></li>
      <li class="active"><a href="./contact1.php">Contact us</a></li>
      <li><a href="./teacher.html">Teacher login</a></li>
    </ul>
  </div>
</nav>


<br><br><br><br>
    <div class="container">
    <div class="row">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
      <div class="row">
        <div class="input-field col s6">
          <input type="text" class="validate ft" name="fname" required>
          <label for="fname" class="ft">First Name</label>
        </div>
        <div class="input-field col s6">
          <input type="text" class="validate" name="lname">
          <label for="lname">Last Name</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input type="email" class="validate" name="email" required>
          <label for="email">Email</label>
        </div>
        </div>
        <div class="row">
        <div class="input-field col s12">
          <i class="material-icons prefix">mode_edit</i>
          <textarea class="materialize-textarea bc" name="comment" required></textarea>
          <label for="comment">Comment:</label>
        </div>
      </div>
      <div class="row">
      <div class="input-field col s12">
    <select name="boxc">
      <optgroup label="Upcoming events">
        <option value="1" style="font-family: 'Raleway', sans-serif;">National Workshop on Digital Marketting</option>
        <option value="2" style="font-family: 'Raleway', sans-serif;">3rd National Seminar on Innovations in Robotics</option>
        <option value="3" style="font-family: 'Raleway', sans-serif;">Mock Jee</option>
        <option value="4" style="font-family: 'Raleway', sans-serif;">3rd National Seminar on Nano Technology</option>
        </optgroup>
      <optgroup label="Past events">
      <option value="5" style="font-family: 'Raleway', sans-serif;">NPDE TCA – 2016</option>
        <option value="6" style="font-family: 'Raleway', sans-serif;">2nd National Workshop on BIGDATA Analytics</option>
        <option value="7" style="font-family: 'Raleway', sans-serif;">Illuminati- 2016</option>
        <option value="8" style="font-family: 'Raleway', sans-serif;">Pre Illuminati – 2016</option>
      </optgroup>
    </select>
    <label>Events</label>
  </div>
  </div>

      <input type="submit" class="btn btn-default gr ft" style="font-family: 'Open Sans Condensed', sans-serif;font-size: 20px" id="submit" name="submit" value="Contact Me!" />
                    <input type="reset" class="btn btn-default rd ft" style="font-family: 'Open Sans Condensed', sans-serif;font-size: 20px" id="reset" value="Start Over!" />

      </div>
    </form>

<?php

if (isset($_POST['submit'])) {

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
    echo "<script>alert('Thank you for your feedback ". $fname . " ". $lname . " We will get back to you soon');</script>";

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

         $message = "We will address your problem soon " . $fname ." " .  $lname . "<br/>";
         $message .= "Your question " . $comm . " will be answered soon by us";

         $header =  "From:noreply@akashav1.xyz \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";

         $retval = mail ($to,$subject,$message,$header);
       }
  ?>
  </div>
</body>
</html>
