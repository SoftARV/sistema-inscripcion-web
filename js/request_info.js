$(document).ready(function() {

	$('select-curso').click(function() {
		$.ajax({
			type: 'post',
			url: '../modules/get_info.php',

		})
	})



});