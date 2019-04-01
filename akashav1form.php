

<!DOCTYPE html>
<html>
<head>
  <title>Akash Patel</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Akash Patel</title>
  <link rel="shortcut icon" href="./files/favicon.ico" type="image/x-icon">
  <link rel="icon" href="/favicon.ico" type="image/x-icon">
  <link href="./bootstrap-3.3.6-dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="./bootstrap-3.3.6-dist/css/style.css" rel="stylesheet">
  <script src="./bootstrap-3.3.6-dist/jquery.min.js"></script>
  <script src="./bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
  <script src="./plugins/js/materialize.min.js"></script>
  <link rel="stylesheet" href="./extra/materialize.css">
  <link rel="stylesheet" href="./plugins/style/style_form.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:600italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Alegreya+Sans:300italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Courgette' rel='stylesheet' type='text/css'>
  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-77353503-1', 'auto');
  ga('send', 'pageview');

</script>
</head>
<body>

  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" style="font-family: 'Courgette', cursive;"href="./index.html">Akash Patel</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li><a href="./index.html">Home</a></li>
          <!--<li><a href="./top1.html">Top</a></li>
          <li active><a href="./register.php">Register</a></li>-->
          <li class="active"><a href="./akashav1form.php">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <br><br><br><br>
  <div class="container">
    <div class="row">
      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <div class="row">
          <div class="input-field col s6">
            <input type="text" class="validate ft" name="fname" required>
            <label for="fname" class="ft" style="color: #2979ff">First Name</label>
          </div>
          <div class="input-field col s6">
            <input type="text" class="validate ft" name="lname">
            <label for="lname" class="ft" style="color: #2979ff">Last Name</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <input type="email" class="validate ft" name="email" required>
            <label for="email" class="ft" style="color: #2979ff">Email</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <i class="material-icons prefix">mode_edit</i>
            <textarea class="materialize-textarea bc ft" name="comment" required></textarea>
            <label for="comment" class="ft" style="color: #2979ff">Comment:</label>
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
      $comment = $_POST["comment"];
      $abc = "Reply-To: " . $email . "\r\n";
      $esd = "akashpatel886@gmail.com";

      $sql_connection = mysqli_connect("localhost", "akasykmo_cont", "Nokia@500");

      mysqli_select_db($sql_connection,"akasykmo_form");


      mysqli_query($sql_connection,"INSERT INTO contact_form (
        id, fname, lname, email, comment
      )
      VALUES (
        '','$fname', '$lname', '$email','$comment'
      )");

      echo "<script>alert('Thank you for your feedback " . $fname . " " . $lname . " I will get back to you soon');</script>";



      $to = $esd;
      $subject = "This is from comment";

      $message = $comment . "<br/>";

      $header =  "From: akashav1@akashav1.website \r\n";
      $header .= "MIME-Version: 1.0\r\n";
      $header .= "Content-type: text/html\r\n";
      $header .= "Reply-To: " . $email . "\r\n";

      mail ($to,$subject,$message,$header);


      ?>
      <?php
      $to = $email;
      $subject = "This is auto generated mail";

      $message = "Thankyou for contacting me " . $fname ." " .  $lname . "<br/>";
      $message .= "Your question " . $comment . " will be answered soon by me";

      $header =  "From: akashav1@akashav1.website \r\n";
      $header .= "MIME-Version: 1.0\r\n";
      $header .= "Content-type: text/html\r\n";

      mail ($to,$subject,$message,$header);
      mysqli_close($sql_connection);
    }
    ?>
  </div>
</body>
</html>
