<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>

	<style>
		@font-face {
			font-family: "abadi";
			src: url("asset/fonts/AbadiMTCondensed/ABALC.ttf");
		}

		* {
			font-family: abadi;
			box-sizing: border-box;
		}

		.container {
			border: 1px solid black;
			/*background-color: */
			height: 20.98cm;
			width: 29.7cm;
			position: relative;

		}

		.title {
			font-family: abadi;
			font-size: 28px;
			padding-left: 12.5cm;
			margin: 0;
			margin-top: 1.4cm;
			font-weight: bold;
		}

		.bulan, .tahun {
			font-family: abadi;
			font-size: 22px;
			font-weight: bold;
			left: 3.8cm;
			top: 1.9cm;
			position: absolute;
		}


		.tahun {
			top: 3cm;
			top: 2.8cm;
		}

		.frame {
			left: 3.8cm;
			top: 3.5cm;
			width: 22.02cm;
			height: 15.12cm;
			border: 1px solid black;
			position: absolute;
		}

		.frame .head .tgl, .frame .head .free1, .frame .head .col2, .frame .head .col3, .frame .head .col4, .frame .head .col5, .frame .head .col6, .kode {
			position: absolute;
			border: .5px solid black;
			display: inline-block;
			width: 2cm;
			text-align: center;
			font-weight: bold;
			font-size: 16px;
			height: 1.1cm;
			line-height: 1.1cm;
			background-color: rgb(190,190,190);
		}

		.frame .head .tgl {
			top: 0;
			border-right: .5px solid black;
		}

		.frame .head .free1 {
			left: 2cm;
			width: 3.3cm;
			line-height: .8cm;
		}

		.frame .head .free1 p,
		.frame .head .col4 p,
		.frame .head .col5 p {
			margin: 0;
			line-height: 0;
			position: absolute;
			top: 0.28cm;
			left: 0cm;
			right: 0cm;
		}

		.frame .head .free1 span,
		.frame .head .col4 span,
		.frame .head .col5 span {
			margin: 0;
			line-height: 0;
			position: absolute;
			bottom: 0.2cm;
			left: 0cm;
			right: 0cm;
			display: block;
		}

		.frame .head .free1 span {
			display: block;
			margin-top: -15px;
		}

		.frame .head .col2 {
			width: 6.8cm;
			left: 5.3cm;
		}

		.head .col2 .row1,
		.head .col2 .row2 {
			position: absolute;
			left: 0;
			right: 0;
			height: .5cm;
			line-height: .5cm;
			top: 0;
			border-bottom: 1px solid black;
		}

		.head .col2 .row2 {
			top: .5cm;
			height: .6cm;
			border: none;
		}

		.head .col2 .row2 .backup {
			position: absolute;
			left: 0;
			width: 3.6cm;
			border-right: .5px solid black;
			top: 0;
			height: .6cm;
		}

		.head .col2 .row2 .content {
			position: absolute;
			right: 0;
			width: 3.6cm;
			top: 0;
			text-align: center;
		}



		.frame .head .col3 {
			left: 12.1cm;
			width: 2.1cm;
		}

		.frame .head .col4 {
			left: 14.2cm;
			width: 3.8cm;
		}

		.frame .head .col5 {
			left: 18cm;
		}

		.frame .head .col6 {
			left: 20cm;
		}

		

		.frame .body .row {
			position: absolute;
			border: 1px solid black;
			right: 0;
			left: 0;
			top: 1.1cm;
			height: 2cm; 
		}

		.frame .body .row2 {
			top: 3.1cm;
		}

		.frame .body .row3 {
			top: 5.1cm;
		}

		.frame .body .row4 {
			top: 7.1cm;
		}

		.frame .body .row5 {
			top: 9.1cm;
		}

		.frame .body .row6 {
			top: 11.1cm;
		}

		.frame .body .row7 {
			top: 13.1cm;
		}

		.frame .body .row .col1,
		.frame .body .row .col2,
		.frame .body .row .col3,
		.frame .body .row .col4,
		.frame .body .row .col5,
		.frame .body .row .col6,
		.frame .body .row .col7,
		.frame .body .row .col8
		 {
			/*background-color: red;*/
			border-right: 2px solid black;
			position: absolute;
			top: 0;
			height: 2cm;
			width: 2cm;
			line-height: 2cm;
			text-align: center;
		}

		.frame .body .row .col2 {
			left: 2cm;
			width: 3.3cm;
		}

		.frame .body .row .col3 {
			left: 5.2cm;
			width: 3.7cm;
		}

		.frame .body .row .col4 {
			left: 9cm;
			width: 3.1cm;
		}
		.frame .body .row .col5 {
			left: 12cm;
			width: 2.2cm;
		}

		.frame .body .row .col6 {
			left: 14cm;
			width: 4cm;
		}

		.frame .body .row .col7 {
			left: 17.7cm;
			width: 2.3cm;
		}

		.frame .body .row .col8 {
			left: 20cm;
			width: 2cm;
			border: none;
		}


		/**
		 * Content Style
		 */
		.frame .row1 .col1 {
			position: relative;
		}

		.frame .row1 .col1 span.no {
			text-align: center;
			margin-top: -8px;
			display: block;
		}

		.frame .row1 .col1 span.minggu {
			position: absolute;
			top: 10px;
			left: 20px;
		}

		.kode {
			top: 100%;
			height: .8cm;
			line-height: .8cm;
			font-size: 14px;
			right: -1px;
			width: 2.5cm;
			background-color: transparent;
		}







		@media print {
			body {
				padding: 0;
				margin: 0;
			}
			@page {
				size: landscape;
			}
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="title">DNPI SERVER MAINTENANCE</div>
		<div class="bulan">Bulan &nbsp; :  &nbsp; Febuari</div>
		<div class="tahun">Tahun &nbsp; :  &nbsp; 2020</div>
		<div class="frame">
			<div class="head">
				<div class="tgl">Tanggal</div>
				<div class="free1">
					<p>Cek Free Space</p> <br> <span>Main Server</span>
				</div>
				<div class="col2">
					<div class="row1">Data Base</div>
					<div class="row2">
						<div class="backup">Persiapan Backup</div>
						<div class="content">View Content</div>
					</div>
				</div>
				<div class="col3">
					Replicated
				</div>
				<div class="col4">
					<p>Test Connection to</p> <br> <span>Karawang</span>
				</div>
				<div class="col5">
					<p>Cek Free</p> <br> <span>Space Mail</span>
				</div>
				<div class="col6">
					PIC
				</div>

			</div>
			<div class="body">
				<div class="row1 row">
					<div class="col1">
						<span class="no">1</span>
						<span class="minggu">Minggu</span>
					</div>
					<div class="col2">
						
					</div>
					<div class="col3">
						
					</div>
					<div class="col4">
						
					</div>
					<div class="col5">
						
					</div>
					<div class="col6">
						
					</div>
					<div class="col7">
						
					</div>
					<div class="col8">
						
					</div>

				</div>
				<div class="row2 row">
					<div class="col1">
					</div>
					<div class="col2">
						
					</div>
					<div class="col3">
						
					</div>
					<div class="col4">
						
					</div>
					<div class="col5">
						
					</div>
					<div class="col6">
						
					</div>
					<div class="col7">
						
					</div>
					<div class="col8">
						
					</div>

				</div>
				<div class="row3 row">
					<div class="col1">
						
					</div>
					<div class="col2">
						
					</div>
					<div class="col3">
						
					</div>
					<div class="col4">
						
					</div>
					<div class="col5">
						
					</div>
					<div class="col6">
						
					</div>
					<div class="col7">
						
					</div>
					<div class="col8">
						
					</div>

				</div>
				<div class="row4 row">
					<div class="col1">
						
					</div>
					<div class="col2">
						
					</div>
					<div class="col3">
						
					</div>
					<div class="col4">
						
					</div>
					<div class="col5">
						
					</div>
					<div class="col6">
						
					</div>
					<div class="col7">
						
					</div>
					<div class="col8">
						
					</div>

				</div>
				<div class="row5 row">
					<div class="col1">
						
					</div>
					<div class="col2">
						
					</div>
					<div class="col3">
						
					</div>
					<div class="col4">
						
					</div>
					<div class="col5">
						
					</div>
					<div class="col6">
						
					</div>
					<div class="col7">
						
					</div>
					<div class="col8">
						
					</div>
				</div>
				<div class="row6 row">
					<div class="col1">
						
					</div>
					<div class="col2">
						
					</div>
					<div class="col3">
						
					</div>
					<div class="col4">
						
					</div>
					<div class="col5">
						
					</div>
					<div class="col6">
						
					</div>
					<div class="col7">
						
					</div>
					<div class="col8">
						
					</div>

				</div>
				<div class="row7 row">
					<div class="col1">
						
					</div>
					<div class="col2">
						
					</div>
					<div class="col3">
						
					</div>
					<div class="col4">
						
					</div>
					<div class="col5">
						
					</div>
					<div class="col6">
						
					</div>
					<div class="col7">
						
					</div>
					<div class="col8">
						
					</div>

				</div>	
			</div>
			<div class="kode">
				FM-EDP-001
			</div>
		</div>
	</div>
	<div class="container">
		<div class="title">DNPI SERVER MAINTENANCE</div>
		<div class="bulan">Bulan &nbsp; :  &nbsp; November</div>
		<div class="tahun">Tahun &nbsp; :  &nbsp; 2019</div>
		<div class="frame">
			<div class="head">
				<div class="tgl">Tanggal</div>
				<div class="free1">
					<p>Cek Free Space</p> <br> <span>Main Server</span>
				</div>
				<div class="col2">
					<div class="row1">Data Base</div>
					<div class="row2">
						<div class="backup">Persiapan Backup</div>
						<div class="content">View Content</div>
					</div>
				</div>
				<div class="col3">
					Replicated
				</div>
				<div class="col4">
					<p>Test Connection to</p> <br> <span>Karawang</span>
				</div>
				<div class="col5">
					<p>Cek Free</p> <br> <span>Space Mail</span>
				</div>
				<div class="col6">
					PIC
				</div>

			</div>
			<div class="body">
				<div class="row1 row">
					<div class="col1">
						
					</div>
					<div class="col2">
						
					</div>
					<div class="col3">
						
					</div>
					<div class="col4">
						
					</div>
					<div class="col5">
						
					</div>
					<div class="col6">
						
					</div>
					<div class="col7">
						
					</div>
					<div class="col8">
						
					</div>

				</div>
				<div class="row2 row">
					<div class="col1">
						
					</div>
					<div class="col2">
						
					</div>
					<div class="col3">
						
					</div>
					<div class="col4">
						
					</div>
					<div class="col5">
						
					</div>
					<div class="col6">
						
					</div>
					<div class="col7">
						
					</div>
					<div class="col8">
						
					</div>

				</div>
				<div class="row3 row">
					<div class="col1">
						
					</div>
					<div class="col2">
						
					</div>
					<div class="col3">
						
					</div>
					<div class="col4">
						
					</div>
					<div class="col5">
						
					</div>
					<div class="col6">
						
					</div>
					<div class="col7">
						
					</div>
					<div class="col8">
						
					</div>

				</div>
				<div class="row4 row">
					<div class="col1">
						
					</div>
					<div class="col2">
						
					</div>
					<div class="col3">
						
					</div>
					<div class="col4">
						
					</div>
					<div class="col5">
						
					</div>
					<div class="col6">
						
					</div>
					<div class="col7">
						
					</div>
					<div class="col8">
						
					</div>

				</div>
				<div class="row5 row">
					<div class="col1">
						
					</div>
					<div class="col2">
						
					</div>
					<div class="col3">
						
					</div>
					<div class="col4">
						
					</div>
					<div class="col5">
						
					</div>
					<div class="col6">
						
					</div>
					<div class="col7">
						
					</div>
					<div class="col8">
						
					</div>
				</div>
				<div class="row6 row">
					<div class="col1">
						
					</div>
					<div class="col2">
						
					</div>
					<div class="col3">
						
					</div>
					<div class="col4">
						
					</div>
					<div class="col5">
						
					</div>
					<div class="col6">
						
					</div>
					<div class="col7">
						
					</div>
					<div class="col8">
						
					</div>

				</div>
				<div class="row7 row">
					<div class="col1">
						
					</div>
					<div class="col2">
						
					</div>
					<div class="col3">
						
					</div>
					<div class="col4">
						
					</div>
					<div class="col5">
						
					</div>
					<div class="col6">
						
					</div>
					<div class="col7">
						
					</div>
					<div class="col8">
						
					</div>

				</div>	
			</div>
			<div class="kode">
				FM-EDP-001
			</div>
		</div>
	</div>
	<div class="container">
		<div class="title">DNPI SERVER MAINTENANCE</div>
		<div class="bulan">Bulan &nbsp; :  &nbsp; November</div>
		<div class="tahun">Tahun &nbsp; :  &nbsp; 2019</div>
		<div class="frame">
			<div class="head">
				<div class="tgl">Tanggal</div>
				<div class="free1">
					<p>Cek Free Space</p> <br> <span>Main Server</span>
				</div>
				<div class="col2">
					<div class="row1">Data Base</div>
					<div class="row2">
						<div class="backup">Persiapan Backup</div>
						<div class="content">View Content</div>
					</div>
				</div>
				<div class="col3">
					Replicated
				</div>
				<div class="col4">
					<p>Test Connection to</p> <br> <span>Karawang</span>
				</div>
				<div class="col5">
					<p>Cek Free</p> <br> <span>Space Mail</span>
				</div>
				<div class="col6">
					PIC
				</div>

			</div>
			<div class="body">
				<div class="row1 row">
					<div class="col1">
						
					</div>
					<div class="col2">
						
					</div>
					<div class="col3">
						
					</div>
					<div class="col4">
						
					</div>
					<div class="col5">
						
					</div>
					<div class="col6">
						
					</div>
					<div class="col7">
						
					</div>
					<div class="col8">
						
					</div>

				</div>
				<div class="row2 row">
					<div class="col1">
						
					</div>
					<div class="col2">
						
					</div>
					<div class="col3">
						
					</div>
					<div class="col4">
						
					</div>
					<div class="col5">
						
					</div>
					<div class="col6">
						
					</div>
					<div class="col7">
						
					</div>
					<div class="col8">
						
					</div>

				</div>
				<div class="row3 row">
					<div class="col1">
						
					</div>
					<div class="col2">
						
					</div>
					<div class="col3">
						
					</div>
					<div class="col4">
						
					</div>
					<div class="col5">
						
					</div>
					<div class="col6">
						
					</div>
					<div class="col7">
						
					</div>
					<div class="col8">
						
					</div>

				</div>
				<div class="row4 row">
					<div class="col1">
						
					</div>
					<div class="col2">
						
					</div>
					<div class="col3">
						
					</div>
					<div class="col4">
						
					</div>
					<div class="col5">
						
					</div>
					<div class="col6">
						
					</div>
					<div class="col7">
						
					</div>
					<div class="col8">
						
					</div>

				</div>
				<div class="row5 row">
					<div class="col1">
						
					</div>
					<div class="col2">
						
					</div>
					<div class="col3">
						
					</div>
					<div class="col4">
						
					</div>
					<div class="col5">
						
					</div>
					<div class="col6">
						
					</div>
					<div class="col7">
						
					</div>
					<div class="col8">
						
					</div>
				</div>
				<div class="row6 row">
					<div class="col1">
						
					</div>
					<div class="col2">
						
					</div>
					<div class="col3">
						
					</div>
					<div class="col4">
						
					</div>
					<div class="col5">
						
					</div>
					<div class="col6">
						
					</div>
					<div class="col7">
						
					</div>
					<div class="col8">
						
					</div>

				</div>
				<div class="row7 row">
					<div class="col1">
						
					</div>
					<div class="col2">
						
					</div>
					<div class="col3">
						
					</div>
					<div class="col4">
						
					</div>
					<div class="col5">
						
					</div>
					<div class="col6">
						
					</div>
					<div class="col7">
						
					</div>
					<div class="col8">
						
					</div>

				</div>	
			</div>
			<div class="kode">
				FM-EDP-001
			</div>
		</div>
	</div>
	<div class="container">
		<div class="title">DNPI SERVER MAINTENANCE</div>
		<div class="bulan">Bulan &nbsp; :  &nbsp; November</div>
		<div class="tahun">Tahun &nbsp; :  &nbsp; 2019</div>
		<div class="frame">
			<div class="head">
				<div class="tgl">Tanggal</div>
				<div class="free1">
					<p>Cek Free Space</p> <br> <span>Main Server</span>
				</div>
				<div class="col2">
					<div class="row1">Data Base</div>
					<div class="row2">
						<div class="backup">Persiapan Backup</div>
						<div class="content">View Content</div>
					</div>
				</div>
				<div class="col3">
					Replicated
				</div>
				<div class="col4">
					<p>Test Connection to</p> <br> <span>Karawang</span>
				</div>
				<div class="col5">
					<p>Cek Free</p> <br> <span>Space Mail</span>
				</div>
				<div class="col6">
					PIC
				</div>

			</div>
			<div class="body">
				<div class="row1 row">
					<div class="col1">
						
					</div>
					<div class="col2">
						
					</div>
					<div class="col3">
						
					</div>
					<div class="col4">
						
					</div>
					<div class="col5">
						
					</div>
					<div class="col6">
						
					</div>
					<div class="col7">
						
					</div>
					<div class="col8">
						
					</div>

				</div>
				<div class="row2 row">
					<div class="col1">
						
					</div>
					<div class="col2">
						
					</div>
					<div class="col3">
						
					</div>
					<div class="col4">
						
					</div>
					<div class="col5">
						
					</div>
					<div class="col6">
						
					</div>
					<div class="col7">
						
					</div>
					<div class="col8">
						
					</div>

				</div>
				<div class="row3 row">
					<div class="col1">
						
					</div>
					<div class="col2">
						
					</div>
					<div class="col3">
						
					</div>
					<div class="col4">
						
					</div>
					<div class="col5">
						
					</div>
					<div class="col6">
						
					</div>
					<div class="col7">
						
					</div>
					<div class="col8">
						
					</div>

				</div>
				<div class="row4 row">
					<div class="col1">
						
					</div>
					<div class="col2">
						
					</div>
					<div class="col3">
						
					</div>
					<div class="col4">
						
					</div>
					<div class="col5">
						
					</div>
					<div class="col6">
						
					</div>
					<div class="col7">
						
					</div>
					<div class="col8">
						
					</div>

				</div>
				<div class="row5 row">
					<div class="col1">
						
					</div>
					<div class="col2">
						
					</div>
					<div class="col3">
						
					</div>
					<div class="col4">
						
					</div>
					<div class="col5">
						
					</div>
					<div class="col6">
						
					</div>
					<div class="col7">
						
					</div>
					<div class="col8">
						
					</div>
				</div>
				<div class="row6 row">
					<div class="col1">
						
					</div>
					<div class="col2">
						
					</div>
					<div class="col3">
						
					</div>
					<div class="col4">
						
					</div>
					<div class="col5">
						
					</div>
					<div class="col6">
						
					</div>
					<div class="col7">
						
					</div>
					<div class="col8">
						
					</div>

				</div>
				<div class="row7 row">
					<div class="col1">
						
					</div>
					<div class="col2">
						
					</div>
					<div class="col3">
						
					</div>
					<div class="col4">
						
					</div>
					<div class="col5">
						
					</div>
					<div class="col6">
						
					</div>
					<div class="col7">
						
					</div>
					<div class="col8">
						
					</div>

				</div>	
			</div>
			<div class="kode">
				FM-EDP-001
			</div>
		</div>
	</div>
</body>
</html>