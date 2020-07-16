<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<?php  
		include "component/header.php";
	?>
	<title>Tambah Task</title>

	<style>
		.div-box {
			padding: 20px 80px;
			border: 1px solid #ccc;
			border-radius: 4px;
		}
	</style>
</head>
<body>

	<div class="container">
		<div class="row justify-content-center">
			<div class="col-8">
				<h2 class="text-center mt-5">Form Input Data PC DNPI</h2>
			</div>
			<div class="col-7 mb-4">
				<form>
					<div class="section-user form-row mb-4">
						<div class="col-12">
							<h5 class="m-0 mb-2 font-italic font-weight-bold">User</h5>
						</div>
						<div class="col-12 mb-3">
						  <label for="name">Name</label>
						  <input type="text" class="form-control" id="name" placeholder="Name">
						</div>

						<div class="col-8 mb-3">
						  <label for="email">Email</label>
						  <input type="email" class="form-control" id="email" placeholder="Email">
						</div>

						<div class="col-4 mb-3">
						  <label for="user_logon">User Logon</label>
						  <!-- <input type="text" class="form-control" id="user_logon" placeholder="User Logon"> -->

						  <label class="sr-only" for="inlineFormInputGroup">Username</label>
			        <div class="input-group mb-2">
			          <div class="input-group-prepend">
			            <div class="input-group-text">dnpi1\</div>
			          </div>
			          <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Username">
			        </div>
						</div>



						<div class="col-4 mb-3">
						  <label for="section">Section</label>
						  <input type="text" class="form-control" id="section" placeholder="section">
						</div>

						<div class="col-4">
						  <label for="nik">NIK</label>
						  <input type="text" class="form-control" id="nik" placeholder="NIK">
						</div>

						<div class="col-4">
						  <label for="position">Position</label>
						  <input type="text" class="form-control" id="position" placeholder="Position">
						</div>
					</div>

					<div class="section-pc form-row mb-4">
						<div class="col-12">
							<h5 class="m-0 mb-2 font-italic font-weight-bold">Computer</h5>
						</div>
						<div class="col-12 mb-3">
						  <label for="pcname">Pc Name</label>
						  <input type="text" class="form-control" id="pcname" placeholder="PC Name">
						</div>

						<div class="col-8 mb-3">
						  <label for="processor">Processor</label>
						  <input type="text" class="form-control" id="processor" placeholder="Processor">
						</div>

						<div class="col-4 mb-3">
						  <label for="brand">Brand / Merk</label>
						  <input type="text" class="form-control" id="brand" placeholder="Brand">
						</div>

						<div class="col-4">
						  <label for="os">Operation System</label>
						  <input type="text" class="form-control" id="os" placeholder="Operation System">
						</div>

						<div class="col-4">
						  <label for="ip">IP Address</label>
						  <input type="text" class="form-control" id="ip" placeholder="IP Address">
						</div>

						<div class="col-2">
						  <label for="ram">Ram</label>
						  <input type="number" class="form-control" id="ram" placeholder="Ram">
						</div>

						<div class="col-2">
						  <label for="hdd">HDD</label>
						  <input type="number" class="form-control" id="hdd" placeholder="HDD">
						</div>
					</div>

					<div class="section-program form-row mb-4">
						<div class="col-12">
							<h5 class="m-0 mb-2 font-italic font-weight-bold">Program / Software</h5>
						</div>
						<div class="col-8 mb-3">
						  <label for="office">MS. Office</label>
						  <input type="text" class="form-control" id="office" placeholder="Microsoft Office">
						</div>

						<div class="col-4 mb-3">
						  <label for="antivirus">Antivirus</label>
						  <input type="text" class="form-control" id="antivirus" placeholder="Antivirus">
						</div>

						<div class="col-4">
						  <label for="WSUS">WSUS</label>
							<select class="custom-select">
							  <option selected>-- Choose --</option>
							  <option value="Yes">Yes</option>
							  <option value="No">No</option>
							</select>
						</div>

						<div class="col-4">
						  <label for="click_one">Click One</label>
							<select class="custom-select">
							  <option selected>-- Choose --</option>
							  <option value="Yes">Yes</option>
							  <option value="No">No</option>
							</select>
						</div>

						<div class="col-4">
						  <label for="ax">AX Program</label>
							<select class="custom-select">
							  <option selected>-- Choose --</option>
							  <option value="Yes">Yes</option>
							  <option value="No">No</option>
							</select>
						</div>

						
					</div>

						<button type="button" class="btn btn-primary">Submit</button>
				</form>
			</div>

			
		</div>
	</div>


	<?php  
		include "component/script.php";
	?>

</body>
</html>