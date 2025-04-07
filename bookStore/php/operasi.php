<?php

require_once("database.php");
require_once("component.php");

$con = createDataBase();


// create

if (isset($_POST['create'])) {
  createData();
}

if (isset($_POST['update'])) {
  UpdateData();
}

if (isset($_POST['delete'])){
  deleteRecord();
}

function createData(){
  $namaBuku = textboxValue(value:"nama_buku");
  $authorBuku = textboxValue(value:"nama_author");
  $hargaBuku = textboxValue(value:"Harga_Buku");

  if($namaBuku && $authorBuku && $hargaBuku){
    $sql = "INSERT INTO books(nama_buku, nama_author, harga_buku)
            VALUES ('$namaBuku', 
                    '$authorBuku',
                    '$hargaBuku')";
            
  
    if(mysqli_query($GLOBALS['con'],$sql)){
      TextNode(classname:"success", msg:"data berhasil tersimpan");
      echo "";
    }else{
      echo "error";
    }

  }else{
    TextNode(classname:"error", msg:"isi data dalam textbox");
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
function TextNode($classname, $msg){
  $element = "<h6 class='$classname'>$msg</h6>";
  echo $element;
}

// get data from mysql database

function getData() {
  $sql = "SELECT * FROM books";

  $result = mysqli_query($GLOBALS['con'], $sql);

  if(mysqli_num_rows($result) > 0){
    return $result;
  }
}

// update data
function UpdateData() {
  $bookid = textboxValue(value:"id");
  $bookname = textboxValue(value:"nama_buku");
  $bookpublisher = textboxValue(value:"nama_author");
  $bookprice = textboxValue(value:"Harga_Buku");

  if ($bookname && $bookpublisher && $bookprice) {
    $sql = "
      UPDATE books SET nama_buku ='$bookname', nama_author = '$bookpublisher', Harga_Buku = '$bookprice' WHERE id= '$bookid'
    ";

    if(mysqli_query($GLOBALS['con'],$sql)) {
      TextNode(classname:"success", msg:"Data successfully updated");
    } else {
      TextNode(classname:"error", msg:"Enable to update data");
    }

  } else {
    TextNode(classname:"error", msg:"Select data usinng edit icon");
  }

}

function deleteRecord() {
  $bookid = (int)textboxValue(value:"id");

  $sql = "DELETE FROM books WHERE id=$bookid";

  if(mysqli_query($GLOBALS['con'], $sql)){
    TextNode(classname:"success", msg:"record deleted succesfully");
  }else{
    TextNode(classname:"error", msg:"enable to delete record");
  }
}
