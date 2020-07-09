<?php  
  session_start();
  if (!isset($_SESSION['login'])) {
    header('location: http://localhost/edp/login/');
  }

  // var_dump($_SESSION['login']);
  // die();
  include "functions.php";
?>
<!doctype html>
<html lang="en">
  <head>
    <?php  
      include "component/header.php"
    ?>

    <style>
      body {
        color: white;
        background: url('asset/images/bg-login.jpg');
        background-position: center;
        background-size: cover;
      }

      body {
        --table-width: 100%; /* Or any value, this will change dinamically */
      }
      tbody {
        display:block;
        max-height:500px;
        overflow-y:auto;
      }
      thead, tbody tr {
        display:table;
        /*width: var(--table-width);*/
        table-layout:fixed;
      }

      .table-dark {
        background-color: #000000e3;
      }
    </style>
    

    <title>EDP Information</title>
  </head>
  <body>

  <a href="logout.php">LOGOUT</a>
  <a href="tambah_taks.php">Tambah Taks</a>
  
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="table-responsive">
          <table class="table table-striped table-dark mt-2" style="box-shadow: 6px -12px 20px rgba(0,0,0,.3), -6px 15px 14px rgba(0,0,0,.3); height: 300px;">
            <thead class="thead-light w-100">
              <tr>
                <th scope="col" style="width: 4%;">No</th>
                <th scope="col" style="width: 66%;">Outstanding</th>
                <th scope="col" style="width: 15%">Date</th>
                <th scope="col" style="width: 15%">Status</th>
              </tr>
            </thead>
            <tbody class="text-white w-100" id="tbody" style="font-size: 24px;">
              
              <?php
                $data = get_data_taks();
                $no = 1;

                while($datas = mysqli_fetch_assoc($data)):
              ?>
                  <tr class="w-100">
                    <th scope="row" style="width: 4%;"><?= $no; ?></th>
                    <td style="width: 60%;"><?= $datas['taks']; ?></td>
                    <td style="width: 20%;"><?= $datas['deadline']; ?> </td>
                    <td style="width: 15%;">Progres</td>
                  </tr>
              <?php
                $no++;
                endwhile;
              ?>

            </tbody>
          </table>
        </div>
       

        <br><br><br>
<!-- 
        <table class="table table-striped table-dark">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">First</th>
              <th scope="col">Last</th>
              <th scope="col">Handle</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Mark</td>
              <td>Otto</td>
              <td>@mdo</td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Jacob</td>
              <td>Thornton</td>
              <td>@fat</td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>Larry</td>
              <td>the Bird</td>
              <td>@twitter</td>
            </tr>
          </tbody>
        </table> -->
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

