<?php 
    include "connection.php";

    date_default_timezone_set("Asia/Jakarta");

    function convertToReadableSize($size){
      $base = log($size) / log(1024);
      $suffix = array("", "KB", "MB", "GB", "TB");
      $f_base = floor($base);
      // return round(pow(1024, $base - floor($base)), 1) . $suffix[$f_base];
      return round(pow(1024, $base - floor($base)), 1);
    }

    function getHddFree($pcname) {
        $WbemLocator = new COM ("WbemScripting.SWbemLocator");
        $WbemServices = $WbemLocator->ConnectServer($pcname, 'root\\cimv2', 'administrator', 'edpdnp');
        $WbemServices->Security_->ImpersonationLevel = 3;
        
        $disks =  $WbemServices->ExecQuery("Select * from Win32_LogicalDisk");

        $dataHdd = [];
        $index = 0;
        /* Function to Convert bytes to GB */
       

        foreach ($disks as $d)
        {  
            $size = convertToReadableSize($d->FreeSpace, 2);
            $dataHdd[$index]['name'] = $d->name;
            $dataHdd[$index]['space_free'] = $size;
            $index++;
        }

        // data
        return $data = $dataHdd;
    }

    function getSpace($server1, $server2) {
        $data1 = array_slice(getHddFree($server1), 0, 3) ;
        $data2 = array_slice(getHddFree($server2), 1, 3) ;

        return json_encode([$data1, $data2]);

        // return array_slice($data1, 0, 3);
    }


    // get taks
    function getIdTaks() {
        global $nik, $con;
        $result = mysqli_query($con, "SELECT COUNT(id_taks) as count FROM tbl_taks");
        $currentTaskid = mysqli_fetch_array($result)['count'];

        return $id = date("dmY") . "N" . $nik . "TK" . ($currentTaskid + 1);
    }

    function get_data_taks() {
        global $nik, $con;
        return $query = mysqli_query($con, "SELECT * FROM tbl_taks");
    }

    var_dump(get_data_taks());
