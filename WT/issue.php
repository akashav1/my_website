<?php

 $sql_connection = mysqli_connect("mysql.hostinger.in", "u956517326_akash", "nokia5001995");

    mysqli_select_db($sql_connection,"u956517326_portf");

if (isset($_POST['issue1'])) {
        echo "you are in iss 1";    
        mysqli_query($sql_connection,"UPDATE issue set qty = qty - 1 where id = '1'");
    }
	elseif (isset($_POST['issue2'])) {
        echo "you are in iss 2";
         mysqli_query($sql_connection,"UPDATE issue set qty = qty - 1 where id = '2'");
    }
    elseif (isset($_POST['issue3'])) {
        echo "you are in iss 3";
         mysqli_query($sql_connection,"UPDATE issue set qty = qty - 1 where id = '3'");
    }
    elseif (isset($_POST['issue4'])) {
        echo "you are in iss 4";
         mysqli_query($sql_connection,"UPDATE issue set qty = qty - 1 where id = '4'");
    }
    elseif (isset($_POST['issue5'])) {
        echo "you are in iss 5";
         mysqli_query($sql_connection,"UPDATE issue set qty = qty - 1 where id = '5'");
    }
    elseif (isset($_POST['issue6'])) {
        echo "you are in iss 6";
         mysqli_query($sql_connection,"UPDATE issue set qty = qty - 1 where id = '6'");
    }
    elseif (isset($_POST['issue7'])) {
        echo "you are in iss 7";
         mysqli_query($sql_connection,"UPDATE issue set qty = qty - 1 where id = '7'");
    }
    elseif (isset($_POST['issue8'])) {
        echo "you are in iss 8";
         mysqli_query($sql_connection,"UPDATE issue set qty = qty - 1 where id = '8'");
    }
    elseif (isset($_POST['ret1'])) {
        echo "you in ret 1";
        mysqli_query($sql_connection,"UPDATE issue set qty = qty + 1 where id = '1'");
    }
    elseif (isset($_POST['ret2'])) {
        echo "you in ret 2";
        mysqli_query($sql_connection,"UPDATE issue set qty = qty + 1 where id = '2'");
    }
    elseif (isset($_POST['ret3'])) {
        echo "you in ret 3";
        mysqli_query($sql_connection,"UPDATE issue set qty = qty + 1 where id = '3'");
    }
    elseif (isset($_POST['ret4'])) {
        echo "you in ret 4";
        mysqli_query($sql_connection,"UPDATE issue set qty = qty + 1 where id = '4'");
    }
    elseif (isset($_POST['ret5'])) {
        echo "you in ret 5";
        mysqli_query($sql_connection,"UPDATE issue set qty = qty + 1 where id = '5'");
    }
    elseif (isset($_POST['ret6'])) {
        echo "you in ret 6";
        mysqli_query($sql_connection,"UPDATE issue set qty = qty + 1 where id = '6'");
    }
    elseif (isset($_POST['ret7'])) {
        echo "you in ret 7";
        mysqli_query($sql_connection,"UPDATE issue set qty = qty + 1 where id = '7'");
    }
    elseif (isset($_POST['ret8'])) {
        echo "you in ret 8";
        mysqli_query($sql_connection,"UPDATE issue set qty = qty + 1 where id = '8'");
    }
