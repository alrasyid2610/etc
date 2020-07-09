<?php  
  include "connection.php";
?>
<!doctype html>
<html lang="en">
  <head>
    <?php  
      include "component/header.php"
    ?>

    <style>
      body {
       /* width: 100vw;
        height: 100vh;*/
        padding: 0;
        margin: 0;
        background: url('asset/images/bg.jpg');
        background-size: cover;
      }
    </style>
    

    <title>EDP Information</title>
  </head>
  <body>
  
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <table class="table table-striped mt-2" style="box-shadow: 6px -12px 20px rgba(0,0,0,.3), -6px 15px 14px rgba(0,0,0,.3);">
          <thead class="thead-light">
            <tr>
              <th scope="col" style="width: 20px;">No</th>
              <th scope="col" style="width: 62%;">Outstanding</th>
              <th scope="col" style="">Date</th>
              <th scope="col">Status</th>
            </tr>
          </thead>
          <tbody class="text-white" style="font-size: 32px;">
            <tr>
              <th scope="row">1</th>
              <td>Install ulang 2 PC untuk EC</td>
              <td>26 June </td>
              <td>Progres</td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Install ulang PC_240</td>
              <td>26 June </td>
              <td>Done</td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>Dokumen Pa Simon</td>
              <td>26 June </td>
              <td>Progress</td>
            </tr>
          </tbody>
        </table>

        <br><br><br>
      </div>
    </div>
  </div>
  <!-- Include Script -->
  <?php  
    include "component/script.php";
  ?>
  <!-- Include Script -->
  </body>
</html>

