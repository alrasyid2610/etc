<?php  
	session_start();
	if (!isset($_SESSION['login'])) {
	  header('location: http://localhost/edp/login/');
	}

	include "functions.php";

	if (isset($_POST['add'])) {
		$nik      = $_SESSION['login']['nik'];
		$id_taks	= getIdTaks();
		$taks     = $_POST['tugas'];
		$client   = $_POST['client'];
		$datetime = $_POST['datetime'];
		$status   = 'pending';
		$created_at = date("Y-m-d H:i:s");

		$query = "INSERT INTO tbl_taks VALUES('$nik', '$id_taks','$taks', '$client', '$datetime', '$status', '$created_at')";

		$query = mysqli_query($con, $query);

		if (mysqli_error($con)) {
			die(mysqli_error($con));
		}	
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<?php  
		include "component/header.php";
	?>
	<title>Tambah Task</title>
</head>
<body class="body_taks">
	<div class="container tambah_taks">
		<div class="wraper-taks-form">
				<h3 class="text-center mt-4 mb-5">Add Outstanding	</h3>
				<form class="my-3" method="post">
				  <div class="form-group">
				    <label for="tugas" class="col-form-label col-2">Tugas</label>
				    <div class="col-12">
					    <input type="text" class="form-control" id="tugas" placeholder="Tugas Anda" name="tugas" required>
				    </div>
				  </div>
			    <div class="form-group">
			      <label for="client" class="col-form-label col-2">client</label>
			      <div class="col-12">
			  	    <input type="text" class="form-control" id="client" placeholder="Client" name="client" required>
			      </div>
			    </div>

				  <div class="form-group ">
				  	<label for="date" class="col-form-label col-2">Deadline</label>
				  	<div class="col-12">
					    <input id="date" class="col-10" name="datetime" required/>
				  	</div>
				  </div>

				  <div class="form-group mt-5">
				      <div class="col-sm-10">
				        <button type="submit" class="btn btn-primary" name="add">Add Taks</button>
				      </div>
				    </div>
				</form>
		</div>
	</div>

	<?php  
		include "component/script.php";
	?>

</body>
</html>