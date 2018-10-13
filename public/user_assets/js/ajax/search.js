/*
* @Author: Trungnn
* @Date:   2018-10-13 23:24:40
* @Last Modified by:   Trungnn
* @Last Modified time: 2018-10-13 23:24:52
*/
jQuery(document).ready(function($) {
	$('#address').keydown(function(event) {
		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});
		$.ajax({
			'url': '/findByAddress',
			'type': 'get',
			'data': {'address': $('#address').val()},
			success:function(response){
				var options = {
					data:response.address 
				};
				$("#address").easyAutocomplete(options);
			}
		})
	});
	
});