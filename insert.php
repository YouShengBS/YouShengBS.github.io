<?php
    define('DB_HOST', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASS', 'usbw');
    define('DB_NAME', 'contact');
    $con = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    if (!$con)
      {
        die('Could not connect: ' . mysql_error());
      }
    $sqlname="INSERT INTO name VALUE('$_POST[name]')";
    $sqlsex="INSERT INTO sex VALUE('$_POST[sex]')";
    $sqlemail="INSERT INTO email VALUE('$_POST[email]')";
    $sqlphone="INSERT INTO phone VALUE('$_POST[phone]')";
    $sqlsubject="INSERT INTO subject VALUE('$_POST[subject]')";

    mysqli_query($con,$sqlname);
    mysqli_query($con,$sqlsex);
    mysqli_query($con,$sqlemail);
    mysqli_query($con,$sqlphone);
    mysqli_query($con,$sqlsubject);
    echo "成功提交";
    mysqli_close($con)
?>