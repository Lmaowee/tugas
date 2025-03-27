<?php

require_once("database.php");
require_once("component.php");

$con = createDataBase();


// create

if (isset($_POST['create'])) {
  createData();
}

function createData(){
  $namaBuku = textboxValue(value:"nama_buku");
  $authorBuku = textboxValue(value:"nama_author");
  $hargaBuku = textboxValue(value:"Harga_Buku");

  if($namaBuku && $authorBuku && $hargaBuku){
    $sql = "INSERT INTO books(nama_buku, nama_author, Harga_Buku)
            VALUES ('$namaBuku', 
                    '$authorBuku',
                    '$hargaBuku')";
            
  
    if(mysqli_query($GLOBALS['con'],$sql)){
      echo "record successfully inserted";
    }else{
      echo "error";
    }

  }else{
    TextNode(classname:"success", message:"isi data dalam textbox");
  }
}

function textboxValue($value){
  $textbox = mysqli_real_escape_string($GLOBALS['con'], trim($_POST[$value]));
  if (empty($textbox)) {
    return false;
  }

  else {
    return $textbox;
  }
}

// messages
function TextNode($classname, $message){
  $element = "<h6 class='$classname'>$message</h6>";
  echo $element;
}
