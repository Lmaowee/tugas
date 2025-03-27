<?php 

function createDataBase () {
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "storebuku";

  // create connection
  $con = mysqli_connect($servername, $username, $password);

  // check connection
  if (!$con) {
    die ("connection failed :" .mysqli_connect_error());
  } 

  // create database
  $sql = "CREATE DATABASE IF NOT EXISTS $dbname";

  if (mysqli_query($con, $sql)) {
    echo "database created..";
  }

  else {
    echo "error while creating database" . mysqli_error($con);
  }


}




