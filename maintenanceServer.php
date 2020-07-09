<!doctype html>
<html lang="en">
  <head>
    <?php  
      include "component/header.php";
    ?>

    <title>EDP Information</title>
  </head>
  <body>
  
  <!-- include header -->
  <?php include 'component/navbar.html'; ?>
  <!-- end header -->

  


  <!-- Section -->
<!--     <div class="container">
      <div class="row">
        <div class="col-12">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Maintenance Server</li>
            </ol>
          </nav>
        </div>
      </div>
    </div> -->
  <!-- End Section -->
  
<!--   <div class="banner">
    <img src="dnp1.jpg" alt="">
  </div> -->
  
    <section class="banner banner2">
      <div class="overlay"></div>
      <div class="container">
        <!-- Row -->
          <div class="row d-flex align-items-center justify-content-center">
          <!-- Column -->
            <div class="col-12">
              <div class="header wow bounceInUp" data-wow-duration="1s" data-wow-delay=".3">
                <h2><span>M</span>aintenance <span>I</span>nformation</h2>
                <div class="border"></div>
              </div>

            </div>
          <!-- End Column -->
          </div>
          <!-- End Row -->
      </div>
    </section>
    


  <!-- Section -->
  <div class="section" id="main">
    <!-- Container -->
    <div class="container">
      <div class="row">
        <div class="col-12">
        
          <div class="card">
            <h5 class="card-header">HDD Storage Space <button class="btn btn-sm btn-primary" id="btn_cek">CHECK SPACE</button></h5>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped table-sm table-hover table-bordered">
                  <thead class="bg-primary text-white">
                    <tr>
                      <th scope="col" rowspan="2">Tanggal</th>
                      <th scope="col" rowspan="2">Cek Free Space <br>Main Server</th>
                      <th scope="col" colspan="2">Data Base</th>
                      <th scope="col" rowspan="2">Replicated</th>
                      <th scope="col" rowspan="2">Test Connection to <br> Karawang</th>
                      <th scope="col" rowspan="2">Cek Free <br> Space Mail </th>
                      <th scope="col" rowspan="2">PIC</th>
                    </tr>
                    <tr>
                      <th>Persiapan Backup</th>
                      <th>View Content</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th>11 / 09 /2019</th>
                      <th>
                        C:\ 54 GB <br>
                        D:\ 54 GB <br>
                        E:\ 54 GB <br>
                      </th>
                      <th>OK</th>
                      <th>OK</th>
                      <th>OK</th>
                      <th>Ping 172.17.128.1 OK</th>
                      <th>
                        C:\ 54 GB <br>
                        D:\ 54 GB <br>
                        E:\ 54 GB <br>
                      </th>
                      <th>
                        OK
                      </th>
                    </tr>
                    <tr>
                      <th>11 / 09 /2019</th>
                      <th>
                        C:\ 54 GB <br>
                        D:\ 54 GB <br>
                        E:\ 54 GB <br>
                      </th>
                      <th>OK</th>
                      <th>OK</th>
                      <th>OK</th>
                      <th>Ping 172.17.128.1 OK</th>
                      <th>
                        C:\ 54 GB <br>
                        D:\ 54 GB <br>
                        E:\ 54 GB <br>
                      </th>
                      <th>
                        OK
                      </th>
                    </tr>
                    <tr>
                      <th>11 / 09 /2019</th>
                      <th>
                        C:\ 54 GB <br>
                        D:\ 54 GB <br>
                        E:\ 54 GB <br>
                      </th>
                      <th>OK</th>
                      <th>OK</th>
                      <th>OK</th>
                      <th>Ping 172.17.128.1 OK</th>
                      <th>
                        C:\ 54 GB <br>
                        D:\ 54 GB <br>
                        E:\ 54 GB <br>
                      </th>
                      <th>
                        OK
                      </th>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Container -->
  </div>
  <!-- End Section -->

  
    <?php  
      include "component/script.php";
    ?>
  </body>
</html>