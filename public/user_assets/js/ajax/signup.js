/*
* @Author: Trungnn
* @Date:   2018-10-09 10:02:22
* @Last Modified by:   Trungnn
* @Last Modified time: 2018-10-09 14:33:11
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
			'type':'POST',
			'url':'/sign',
			'data':{
				'role':$('[name="role"]:radio:checked').val(),
				'fullName':$('#mem_name').val(),
				'email':$('#emailid').val(),
				'password':$('#password').val(),
				'cpassword':$('#cpassword').val()
			},
			success:function(data){
				if(data.error == false){
					$("#alert_success").show();
				}
				else{
					$('#alert_danger').show();

					if (data.message.email != undefined) {
						$('#error').show().text(data.message.email[0]);
					}
					else if (data.message.password != undefined) {
						$('#error').show().text(data.message.password[0]);
					}
					else if (data.message.fullName != undefined) {
						$('#error').show().text(data.message.errorlogin[0]);
					}

				}
			}
		});
	});
});