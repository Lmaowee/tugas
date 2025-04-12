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
    $con = mysqli_connect($servername, $username, $password, $dbname);

    $sql = "
      CREATE TABLE IF NOT EXISTS books(
      id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
      nama_buku  VARCHAR(25) NOT NULL, 
      nama_author VARCHAR(20),
      Harga_Buku FLOAT
      );
    ";

    if(mysqli_query($con, $sql)) {
      return $con;
    }

    else {
      echo "cannot create table";
    }

  }

  else {
    echo "error while creating database" . mysqli_error($con);
  }


}




