<?php 
  require_once ("./php/component.php");
  require_once ("./php/operasi.php");
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <title>Tugas</title>

  <script src="https://kit.fontawesome.com/79a7601972.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">  
 
  <!-- styles -->
   <link rel="stylesheet" href="styles.css">

</head>
<body>
  
  <main>
    <div class="container text-center">
      <h1 class="py-4 bg-dark text-light rounded"><i class="fas fa-swatchbook"></i> Store Buku</h1>
    
      <!-- user input -->
      <div class="d-flex justify-content-center">
        <form action="" method="post" class="w-50">
          <div class="py-2">
            <?php inputElement(icon: "<i class='fas fa-key'></i>", placeholder:"ID", name:"id", value: ""); ?>
          </div>
          <!--  -->
          <div class="pt-2">
            <?php inputElement(icon: "<i class='fas fa-book'></i>", placeholder:"Nama Buku", name:"nama_buku", value: ""); ?>
          </div>
          <!--  -->
          <div class="row">
            <div class="col">
              <?php inputElement(icon: "<i class='fas fa-person'></i>", placeholder:"Nama Author", name:"nama_author", value: ""); ?>
            </div>
            <div class="col">
              <?php inputElement(icon: "<i class='fas fa-dollar'></i>", placeholder:"Harga Buku", name:"Harga_Buku", value: ""); ?>
            </div>
          </div>
          <div class="d-flex justify-content-center">
              <?php buttonElement(btnid:"btn-create",styleclass:"btn btn-success",text:"<i class='fas fa-plus'></i>",name:"create",attr:"") ?>
              <?php buttonElement(btnid:"btn-read",styleclass:"btn btn-primary",text:"<i class='fas fa-sync'></i>",name:"read",attr:"") ?>
              <?php buttonElement(btnid:"btn-update",styleclass:"btn btn-light border",text:"<i class='fas fa-pen-alt'></i>",name:"update",attr:"") ?>
              <?php buttonElement(btnid:"btn-delete",styleclass:"btn btn-danger",text:"<i class='fas fa-trash-alt'></i>",name:"delete",attr:"") ?>

          </div>
        </form>
      </div>
        <!-- Bootsrtap table  -->
         <div class="d-flex table-data">
            <table class="table table-stripped table-dart">
              <thead class="thead-dark">
                <t>
                  <th>ID</th>
                  <th>Nama Buku</th>
                  <th>Nama Author</th>
                  <th>Harga Buku</th>
                  <th>Edit</th>
                </tr>
              </thead>
              <tbody id="tbody">
                <tr>
                  <td>1</td>
                  <td>Nama Buku</td>
                  <td>Tere</td>
                  <td>44.99</td>
                  <td><i class="fas fa-edit btnedit"></i></td>
                </tr>
              </tbody>
            </table>
         </div>
    </div>
  </main>


<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
