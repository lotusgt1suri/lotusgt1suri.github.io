$(document).ready(function(){
	$('#clone_button').click(function() {
		$('#clone_wrapper div:first')
		.clone()
		.append("<h4 id='tutorList'>Hello</h4><br/><button class='btn btn-primary'>View Profile</button>")
		.appendTo($('#clone_wrapper'));
	});
});