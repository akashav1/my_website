<html>
<head>
     <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home Page</title>
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
    <link href='https://fonts.googleapis.com/css?family=Coming+Soon' rel='stylesheet' type='text/css'> 
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:600italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=PT+Sans:400italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Courgette' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Josefin+Sans:300' rel='stylesheet' type='text/css'>
   <script>
         $(document).ready(function() {
         $('select').material_select();
      });
      </script>
      
</head>
      <body>

      <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Library</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="homeadi.php">Issue & return</a></li>
      <li><a href="conadi.html">Register</a></li>
      <li><a href="adminl.html">Admin Login</a></li>  
    </ul>
  </div>
</nav>


      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
      <div class="container-fluid">
        <div class="row">
        <center>
          <div class="col-sm-3">
          <img src="../WT images/adity/1.jpg" width="300px" height="490px" />><br>Book 1<br>
          <input type="submit" class="btn" name="issue1" value="Issue"  />
          <input type="submit" class="btn" name="ret1" value="Return"  />
          </div>
          <div class="col-sm-3">
          <img src="../WT images/adity/2.jpg" width="300px" height="490px"/><br>Book 2<br>
          <input type="submit" class="btn" name="issue2" value="Issue"  />
          <input type="submit" class="btn" name="ret2" value="Return"  />
          </div>
          <div class="col-sm-3">
          
          <img src="../WT images/adity/3.jpg"/><br/>Book 3<br/>
          <input type="submit" class="btn" name="issue3" value="Issue"  />
          <input type="submit" class="btn" name="ret3" value="Return"  />
          </div>
          <div class="col-sm-3">
          <img src="../WT images/adity/4.jpg" width="300px" height="490px"/><br>Book 4<br>
          <input type="submit" class="btn" name="issue4" value="Issue"  />
          <input type="submit" class="btn" name="ret4" value="Return"  />
          </div>
          </center>
        </div>
        <div class="row">
          <div class="col-sm-12">
          <p><br><br></p>
          </div>
        </div>
        <div class="row">
        <center>
          <div class="col-sm-3">
          <img src="../WT images/adity/5.jpg" width="300px" height="490px"/><br>Book 5<br>
          <input type="submit" class="btn" name="issue5" value="Issue"  />
          <input type="submit" class="btn" name="ret5" value="Return"  />
          </div>
          <div class="col-sm-3">
          <img src="../WT images/adity/6.jpg" width="300px" height="490px"/><br>Book 6<br>
          <input type="submit" class="btn" name="issue6" value="Issue"  />
          <input type="submit" class="btn" name="ret6" value="Return"  />
          </div>
          <div class="col-sm-3">
          <img src="../WT images/adity/7.jpg" width="300px" height="490px"/><br>Book 7<br>
          <input type="submit" class="btn" name="issue7" value="Issue"  />
          <input type="submit" class="btn" name="ret7" value="Return"  />
          </div>
          <div class="col-sm-3">
          <img src="../WT images/adity/8.jpg" width="300px" height="490px"/><br>Book 8<br>
          <input type="submit" class="btn" name="issue8" value="Issue"  />
          <input type="submit" class="btn" name="ret8" value="Return"  />
          </div>
        </div>
        
      </div></center>
      </form>

         <?php

 $sql_connection = mysqli_connect("mysql.hostinger.in", "u956517326_akash", "nokia5001995");

    mysqli_select_db($sql_connection,"u956517326_portf");
if (isset($_POST['issue1'])) {
        $res1 = mysqli_query($sql_connection,"SELECT qty FROM issue WHERE id = '1'");
        while($row = mysqli_fetch_array($res1))
        {
            if($row['qty'] == 0)
            {
        echo "<script>alert('book 1 cannot be issued');</script>";}
        else{
        mysqli_query($sql_connection,"UPDATE issue set qty = qty - 1 where id = '1'");
        echo "<script>alert('book 1 is issued');</script>";
    }}}
  elseif (isset($_POST['issue2'])) {
       $res1 = mysqli_query($sql_connection,"SELECT qty FROM issue WHERE id = '2'");
        while($row = mysqli_fetch_array($res1))
        {
            if($row['qty'] == 0)
            {
        echo "<script>alert('book 2 cannot be issued');</script>";}
        else{
        mysqli_query($sql_connection,"UPDATE issue set qty = qty - 1 where id = '2'");
        echo "<script>alert('book 2 is issued');</script>";
    }}}
    elseif (isset($_POST['issue3'])) {
        $res1 = mysqli_query($sql_connection,"SELECT qty FROM issue WHERE id = '3'");
        while($row = mysqli_fetch_array($res1))
        {
            if($row['qty'] == 0)
            {
        echo "<script>alert('book 3 cannot be issued');</script>";}
        else{
        mysqli_query($sql_connection,"UPDATE issue set qty = qty - 1 where id = '3'");
        echo "<script>alert('book 3 is issued');</script>";
    }}}
    elseif (isset($_POST['issue4'])) {
       $res1 = mysqli_query($sql_connection,"SELECT qty FROM issue WHERE id = '4'");
        while($row = mysqli_fetch_array($res1))
        {
            if($row['qty'] == 0)
            {
        echo "<script>alert('book 4 cannot be issued');</script>";}
        else{
        mysqli_query($sql_connection,"UPDATE issue set qty = qty - 1 where id = '4'");
        echo "<script>alert('book 4 is issued');</script>";
    }}}
    elseif (isset($_POST['issue5'])) {
        $res1 = mysqli_query($sql_connection,"SELECT qty FROM issue WHERE id = '5'");
        while($row = mysqli_fetch_array($res1))
        {
            if($row['qty'] == 0)
            {
        echo "<script>alert('book 5 cannot be issued');</script>";}
        else{
        mysqli_query($sql_connection,"UPDATE issue set qty = qty - 1 where id = '5'");
        echo "<script>alert('book is issued');</script>";
    }}}
    elseif (isset($_POST['issue6'])) {
       $res1 = mysqli_query($sql_connection,"SELECT qty FROM issue WHERE id = '6'");
        while($row = mysqli_fetch_array($res1))
        {
            if($row['qty'] == 0)
            {
        echo "<script>alert('book 6 cannot be issued');</script>";}
        else{
        mysqli_query($sql_connection,"UPDATE issue set qty = qty - 1 where id = '6'");
        echo "<script>alert('book 6 is issued');</script>";
    }}}
    elseif (isset($_POST['issue7'])) {
        $res1 = mysqli_query($sql_connection,"SELECT qty FROM issue WHERE id = '7'");
        while($row = mysqli_fetch_array($res1))
        {
            if($row['qty'] == 0)
            {
        echo "<script>alert('book 7 cannot be issued');</script>";}
        else{
        mysqli_query($sql_connection,"UPDATE issue set qty = qty - 1 where id = '7'");
        echo "<script>alert('book 7 is issued');</script>";
    }}}
    elseif (isset($_POST['issue8'])) {
        $res1 = mysqli_query($sql_connection,"SELECT qty FROM issue WHERE id = '8'");
        while($row = mysqli_fetch_array($res1))
        {
            if($row['qty'] == 0)
            {
        echo "<script>alert('book 8 cannot be issued');</script>";}
        else{
        mysqli_query($sql_connection,"UPDATE issue set qty = qty - 1 where id = '8'");
        echo "<script>alert('book is issued');</script>";
    }}}
    elseif (isset($_POST['ret1'])) {
        $res1 = mysqli_query($sql_connection,"SELECT qty FROM issue WHERE id = '1'");
        while($row = mysqli_fetch_array($res1))
        {
            if($row['qty'] == 5)
            {
        echo "<script>alert('book 1 does not belong here');</script>";}
        else{
        mysqli_query($sql_connection,"UPDATE issue set qty = qty + 1 where id = '1'");
        echo "<script>alert('book 1 is returned');</script>";
    }}}
    elseif (isset($_POST['ret2'])) {
        $res1 = mysqli_query($sql_connection,"SELECT qty FROM issue WHERE id = '2'");
        while($row = mysqli_fetch_array($res1))
        {
            if($row['qty'] == 5)
            {
        echo "<script>alert('book 2 does not belong here');</script>";}
        else{
        mysqli_query($sql_connection,"UPDATE issue set qty = qty + 1 where id = '2'");
        echo "<script>alert('book 2 is returned');</script>";
    }}}
    elseif (isset($_POST['ret3'])) {
        $res1 = mysqli_query($sql_connection,"SELECT qty FROM issue WHERE id = '3'");
        while($row = mysqli_fetch_array($res1))
        {
            if($row['qty'] == 5)
            {
        echo "<script>alert('book 3 does not belong here');</script>";}
        else{
        mysqli_query($sql_connection,"UPDATE issue set qty = qty + 1 where id = '3'");
        echo "<script>alert('book 3 is returned');</script>";
    }}}
    elseif (isset($_POST['ret4'])) {
        $res1 = mysqli_query($sql_connection,"SELECT qty FROM issue WHERE id = ''");
        while($row = mysqli_fetch_array($res1))
        {
            if($row['qty'] == 5)
            {
        echo "<script>alert('book 4 does not belong here');</script>";}
        else{
        mysqli_query($sql_connection,"UPDATE issue set qty = qty + 1 where id = '4'");
        echo "<script>alert('book 4 is returned');</script>";
    }}}
    elseif (isset($_POST['ret5'])) {
        $res1 = mysqli_query($sql_connection,"SELECT qty FROM issue WHERE id = '5'");
        while($row = mysqli_fetch_array($res1))
        {
            if($row['qty'] == 5)
            {
        echo "<script>alert('book 5 does not belong here');</script>";}
        else{
        mysqli_query($sql_connection,"UPDATE issue set qty = qty + 1 where id = '5'");
        echo "<script>alert('book 5 is returned');</script>";
    }}}
    elseif (isset($_POST['ret6'])) {
        $res1 = mysqli_query($sql_connection,"SELECT qty FROM issue WHERE id = '6'");
        while($row = mysqli_fetch_array($res1))
        {
            if($row['qty'] == 5)
            {
        echo "<script>alert('book 6 does not belong here');</script>";}
        else{
        mysqli_query($sql_connection,"UPDATE issue set qty = qty + 1 where id = '6'");
        echo "<script>alert('book 6 is returned');</script>";
    }}}
    elseif (isset($_POST['ret7'])) {
        $res1 = mysqli_query($sql_connection,"SELECT qty FROM issue WHERE id = '7'");
        while($row = mysqli_fetch_array($res1))
        {
            if($row['qty'] == 5)
            {
        echo "<script>alert('book 7 does not belong here');</script>";}
        else{
        mysqli_query($sql_connection,"UPDATE issue set qty = qty + 1 where id = '7'");
        echo "<script>alert('book 7 is returned');</script>";
    }}}
    elseif (isset($_POST['ret8'])) {
       $res1 = mysqli_query($sql_connection,"SELECT qty FROM issue WHERE id = '8'");
        while($row = mysqli_fetch_array($res1))
        {
            if($row['qty'] == 5)
            {
        echo "<script>alert('book 8 does not belong here');</script>";}
        else{
        mysqli_query($sql_connection,"UPDATE issue set qty = qty + 1 where id = '8'");
        echo "<script>alert('book 8 is returned');</script>";
    }}}
?>
      </body>
</html>
