<?php  
	include "functions.php";

	if (isset($_POST['submit'])) {
		$pesan_error = [];

		/**
		 * Data Pengguna
		 * @var string
		 */
			$name     = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
			$email    = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
			$username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
			$password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);
			$section  = filter_var($_POST['section'], FILTER_SANITIZE_STRING);
			$nik      = filter_var($_POST['nik'], FILTER_SANITIZE_STRING);
			$position = filter_var($_POST['position'], FILTER_SANITIZE_STRING);
			
			/**
			* Data Computer
			* @var string
			*/
			$pc_name   = filter_var($_POST['pc_name'], FILTER_SANITIZE_STRING);
			$processor = $_POST['processor'];
			$pc_brand  = filter_var($_POST['pc_brand'], FILTER_SANITIZE_STRING);
			$os        = filter_var($_POST['os'], FILTER_SANITIZE_STRING);
			$ip        = filter_var($_POST['ip'], FILTER_SANITIZE_STRING);
			$ram       = filter_var($_POST['ram'], FILTER_SANITIZE_STRING);
			$hdd       = filter_var($_POST['hdd'], FILTER_SANITIZE_STRING);
			
			/**
			* Data Monitor
			* @var [type]
			*/
			$monitor_brand = filter_var($_POST['monitor_brand'], FILTER_SANITIZE_STRING);
			$port_display  = filter_var($_POST['port_display'], FILTER_SANITIZE_STRING);

			/**
			 * Data Program yang di gunakan user
			 * @var [type]
			 */
			$ms_office    = filter_var($_POST['ms_office'], FILTER_SANITIZE_STRING);
			$antivirus    = filter_var($_POST['antivirus'], FILTER_SANITIZE_STRING);
			$wsus         = filter_var($_POST['wsus'], FILTER_SANITIZE_STRING);
			$click_one    = filter_var($_POST['click_one'], FILTER_SANITIZE_STRING);
			$ax_program   = filter_var($_POST['ax_program'], FILTER_SANITIZE_STRING);
			$web_schedule = filter_var($_POST['web_schedule'], FILTER_SANITIZE_STRING);

			/**
			 * Data Fixed Asset Computer
			 * @var [type]
			 */
			$computer_fixed_asset = filter_var($_POST['computer_fixed_asset'], FILTER_SANITIZE_STRING);
			$computer_date        = $_POST['computer_date'];
			$edp_computer_number  = filter_var($_POST['edp_computer_number'], FILTER_SANITIZE_STRING);

			/**
			 * Data Fixed Asset Monitor
			 * @var [type]
			 */
			$monitor_fixed_asset = filter_var($_POST['monitor_fixed_asset'], FILTER_SANITIZE_STRING);
			$monitor_date        = $_POST['monitor_date'];
			$edp_monitor_number  = filter_var($_POST['edp_monitor_number'], FILTER_SANITIZE_STRING);

			/**
			 * Cek User Pengguna apakah sudah ada..?
			 */
			if (!cekUser($nik)) {
				$pesan_error['user_already'] = "User Already Registered";
			}

			if (!cekPc($pc_name)) {
				$pesan_error['pc_name_already'] = "PC Name Already Registered";
			}

			if (empty($pesan_error)) {

				// input data computer ke database
				addComputerData($pc_name, $pc_brand, $processor, $os, $ram, $hdd, $ip, $ms_office, $antivirus, $wsus, $click_one, $ax_program, $web_schedule, $computer_fixed_asset, $computer_date, $edp_computer_number);
				addMonitorData($monitor_brand, $port_display, $monitor_fixed_asset, $monitor_date, $edp_monitor_number);
				addUserData($nik, 1, $name, $email, $username, $password, $section, $position);

				// echo "data sudah di input";
			}



	}
?>