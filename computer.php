<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<?php  
		include "component/header.php";
	?>
	<title>Tambah Task</title>
</head>
<body>

	<div class="container">
		<div class="row justify-content-center">
			<div class="col-8">
				<h2 class="text-center mt-5">Form Input Data PC DNPI</h2>
			</div>
			<div class="col-7 mb-4">
				<form method="POST" action="add_computer.php">
					<div class="section-user form-row mb-4">
						<div class="col-12">
							<h5 class="m-0 mb-2 font-italic font-weight-bold">User</h5>
						</div>
						<div class="col-12 mb-3">
						  <label for="name">Name</label>
						  <input type="text" class="form-control" id="name" placeholder="Name" name="name" required="">
						</div>

						<div class="col-4 mb-3">
						  <label for="email">Email</label>
						  <input type="email" class="form-control" id="email" placeholder="Email" name="email" required="">
						</div>

						<div class="col-4 mb-3">
						  <label for="user_logon">User Logon</label>
						  <label class="sr-only" for="username">Username</label>
			        <div class="input-group mb-2">
			          <div class="input-group-prepend">
			            <div class="input-group-text">dnpi1\</div>
			          </div>
			          <input type="text" class="form-control" id="username" placeholder="Username" name="username" required="">
			        </div>
						</div>

						<div class="col-4 mb-3">
						  <label for="password">Password</label>
						  <input type="password" class="form-control" id="password" placeholder="Password" name="password" required="">
						</div>

						<div class="col-4 mb-3">
						  <label for="section">Section</label>
						  <input type="text" class="form-control" id="section" placeholder="Section" name="section" required="">
						</div>

						<div class="col-4">
						  <label for="nik">NIK</label>
						  <input type="text" class="form-control" id="nik" placeholder="NIK" name="nik" required="">
						</div>

						<div class="col-4">
						  <label for="position">Position</label>
						  <input type="text" class="form-control" id="position" placeholder="Position" name="position" required="">
						</div>
					</div>

					<div class="section-pc form-row mb-4">
						<div class="col-12">
							<h5 class="m-0 mb-2 font-italic font-weight-bold">Computer</h5>
						</div>
						<div class="col-12 mb-3">
						  <label for="pc_name">Pc Name</label>
						  <input type="text" class="form-control" id="pc_name" placeholder="PC Name" name="pc_name" required="">
						</div>

						<div class="col-8 mb-3">
						  <label for="processor">Processor</label>
						  <input type="text" class="form-control" id="processor" placeholder="Processor" name="processor" required="">
						</div>

						<div class="col-4 mb-3">
						  <label for="pc_brand">Brand / Merk</label>
						  <input type="text" class="form-control" id="pc_brand" placeholder="Computer Brand" name="pc_brand" required="">
						</div>

						<div class="col-4">
						  <label for="os">Operation System</label>
						  <input type="text" class="form-control" id="os" placeholder="Operation System" name="os" required="">
						</div>

						<div class="col-4">
						  <label for="ip">IP Address</label>
						  <input type="text" class="form-control" id="ip" placeholder="IP Address" name="ip" required="">
						</div>

						<div class="col-2">
						  <label for="ram">Ram</label>
						  <input type="number" class="form-control" id="ram" placeholder="Ram" name="ram" required="">
						</div>

						<div class="col-2">
						  <label for="hdd">HDD</label>
						  <input type="number" class="form-control" id="hdd" placeholder="HDD" name="hdd" required="">
						</div>
					</div>

					<div class="section-monitor form-row mb-4">
						<div class="col-12">
							<h5 class="m-0 mb-2 font-italic font-weight-bold">Monitor</h5>
						</div>

						<div class="col-8 mb-3">
						  <label for="monitor_brand">Brand / Merk</label>
						  <input type="text" class="form-control" id="monitor_brand" placeholder="Monitor Brand" name="monitor_brand" required="">
						</div>

						<div class="col-4 mb-3">
						  <label for="port_display">Input Port Display</label>
							<select class="custom-select" id="port_display" name="port_display">
							  <option selected>-- Choose --</option>
							  <option value="VGA">VGA</option>
							  <option value="HDMI">HDMI</option>
							</select>
						</div>
					</div>

					<div class="section-program form-row mb-4">
						<div class="col-12">
							<h5 class="m-0 mb-2 font-italic font-weight-bold">Program / Software</h5>
						</div>
						<div class="col-8 mb-3">
						  <label for="office">MS. Office</label>
						  <input type="text" class="form-control" id="office" placeholder="Microsoft Office" name="ms_office" required="">
						</div>

						<div class="col-4 mb-3">
						  <label for="antivirus">Antivirus</label>
						  <input type="text" class="form-control" id="antivirus" placeholder="Antivirus" name="antivirus" required="">
						</div>

						<div class="col-4 mb-3">
						  <label for="WSUS">WSUS</label>
							<select class="custom-select" id="wsus" name="wsus">
							  <option selected>-- Choose --</option>
							  <option value="Yes">Yes</option>
							  <option value="No">No</option>
							</select>
						</div>

						<div class="col-4 mb-3">
						  <label for="click_one">Click One</label>
							<select class="custom-select" id="click_one" name="click_one">
							  <option selected>-- Choose --</option>
							  <option value="Yes">Yes</option>
							  <option value="No">No</option>
							</select>
						</div>

						<div class="col-4 mb-3">
						  <label for="ax">AX Program</label>
							<select class="custom-select" id="ax" name="ax_program">
							  <option selected>-- Choose --</option>
							  <option value="Yes">Yes</option>
							  <option value="No">No</option>
							</select>
						</div>

						<div class="col-4 mb-3">
						  <label for="web_schedule">Schedule Web Program</label>
							<select class="custom-select" id="web_schedule" name="web_schedule">
							  <option selected>-- Choose --</option>
							  <option value="Yes">Yes</option>
							  <option value="No">No</option>
							</select>
						</div>
					</div>

					<div class="section-fixed_asset form-row mb-4">
						<div class="col-12">
							<h5 class="m-0 mb-2 font-italic font-weight-bold">Fixed Asset PC</h5>
						</div>

						<div class="col-4 mb-3">
						  <label for="computer_fixed_asset">Comp. Fixed Asset Number</label>
						  <input type="text" class="form-control" id="computer_fixed_asset" placeholder="Fixed Asset Number" name="computer_fixed_asset" required="">
						</div>

						<div class="col-4 mb-3">
						  <label for="computer_date">Computer Date</label>
						  <input type="date" class="form-control" id="computer_date" placeholder="PC Date" name="computer_date" required="">
						</div>

						<div class="col-4 mb-3">
						  <label for="edp_com_num">EDP Computer Number</label>
						  <input type="text" class="form-control" id="edp_com_num" placeholder="EDP Computer Number" name="edp_computer_number" required="">
						</div>
					</div>

					<div class="section-fixed_asset_monitor form-row mb-4">
						<div class="col-12">
							<h5 class="m-0 mb-2 font-italic font-weight-bold">Fixed Asset Monitor</h5>
						</div>

						<div class="col-4 mb-3">
						  <label for="monitor_fixed_asset">Monitor Fixed Asset Number</label>
						  <input type="text" class="form-control" id="monitor_fixed_asset" placeholder="Fixed Asset Number" name="monitor_fixed_asset" required="">
						</div>

						<div class="col-4 mb-3">
						  <label for="monitor_date">Monitor Date</label>
						  <input type="date" class="form-control" id="monitor_date" placeholder="Monitor Date" name="monitor_date" required="">
						</div>

						<div class="col-4 mb-3">
						  <label for="edp_com_num">EDP Monitor Number</label>
						  <input type="text" class="form-control" id="edp_com_num" placeholder="EDP Monitor Number" name="edp_monitor_number" required="">
						</div>
					</div>



						<button type="submit" class="btn btn-primary" name="submit">Submit</button>
				</form>
			</div>

			
		</div>
	</div>


	<?php  
		include "component/script.php";
	?>

</body>
</html>