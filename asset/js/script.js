

$(document).ready(function() {

	let btnCek = $("#btn_cek");

	btnCek.click(function() {
		console.log("mulai");
		setInterval(function() {
			console.log("mulai");
			getFreHdd();
		}, 1000 * 5);
	})

	function getFreHdd() {
		$.ajax({
			url : "getFreeHdd.php",
			dataType : "JSON",
			success : function(msg) {
				console.log(msg);
			},
			error : function(msg) {
				console.log(msg);
			}
		})
	}

	$('#date').datetimepicker({ 
		footer: true, 
		modal: true,
		format: 'yyyy-mm-dd HH:MM'
	});

	// Ajax for get taks
	if ( $("#tbody").length != 0 ) {
		setInterval(function() {
			$("#tbody").load("get_data_taks.php");
		}, 3000);
	}
});

