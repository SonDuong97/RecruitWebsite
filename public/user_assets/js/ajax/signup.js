/*
* @Author: Trungnn
* @Date:   2018-10-09 10:02:22
* @Last Modified by:   Trungnn
* @Last Modified time: 2018-10-10 11:05:41
*/
$(document).ready(function(){
	$('#submit').click(function(event) {
		/* Act on the event */
		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});
		$.ajax({
			'url':'/sign',
			'type':'POST',
			'data':{
				'role':$('[name="role"]:radio:checked').val(),
				'fullName':$('#mem_name').val(),
				'email':$('#emailid').val(),
				'password':$('#password').val(),
				'cpassword': $('#cpassword').val()
			},
			success:function(data){
				if (data.error == true) {
					$('#alert_danger').show();
					if(data.message.fullName != undefined){
						$('#error').text(data.message.fullName[0]);
					}
					else if (data.message.email != undefined) {
						$('#error').text(data.message.email[0]);
					}
					else if (data.message.password != undefined) {
						$('#error').text(data.message.password[0]);
					}
					else if (data.message.cpassword != undefined) {
						$('#error').text(data.message.cpassword[0]);
					}
				} 
				else {
					$('#alert_success').show();
				}
			}
		});
	});
});