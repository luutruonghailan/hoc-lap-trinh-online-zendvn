// Khai báo tên form
var formID		= '#contact-form';

// Khai báo vùng hiển thị dữ liệu
var formMessage = '#content-load';

// Khai báo cấu hình
var options 	= {
						target	: formMessage,
						dataType: 'json',
						success	: processData
					};

function processData(data){
	if(data.type == undefined){
		$(formMessage).html('Có lỗi xảy ra trong quá trình xử lý').addClass('error');
	}else{
		if(data.type == 'success'){
			$(formMessage).html('Thành công').removeClass().addClass('success');
			$(formID).resetForm();
		}else{
			console.log(data.message);
			var error = '';
			for(x in data.message){
				error += data.message[x] + '<br />';
				$('input[name="' + x + '"]').val('');
			}
			$(formMessage).html(error).removeClass().addClass('error');
		}
	}
}

$(document).ready(function(){
	$(formID).submit(function(){
		$(this).ajaxSubmit(options); 
		return false;
	});
});