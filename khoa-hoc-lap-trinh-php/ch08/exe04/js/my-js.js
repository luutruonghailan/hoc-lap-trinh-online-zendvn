
$(document).ready(function(){
	$('#cancel-button').click(function(){
		window.location = 'index.php';
	});
	
	$('#multy-delete').click(function(){
		$('#main-form').submit();
	});
	
	$('#check-all').change(function(){
		var checkStatus = this.checked;
		$('#main-form').find(':checkbox').each(function(){
			this.checked = checkStatus;
		});
	});
	
	$('.success, .notice, .error').click(function() {
		 $(this).toggle("slow");
	});
	
	$( "#birthday" ).datepicker({
    	dateFormat: "dd/mm/yy",
    	defaultDate: "+3d",
    	changeYear: true,
    	changeMonth: true,
    	yearRange: "2000:2015"
    });
});
