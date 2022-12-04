function get_edit(username){
	// console.log("IdBooking_Val" + id);
	var password = document.getElementById("password_Val" + username).innerHTML;
	var fullname = document.getElementById("fullname_Val" + username).innerHTML;
    var phone = document.getElementById("phone_Val" + username).innerHTML;
    var exp_year = document.getElementById("exp_year_Val" + username).innerHTML;

    document.getElementById("password_Val" + username).innerHTML = '<input type="text" class="form-control" name = "password" id="password_val'+username+'" value = '+ password +' required>';
    document.getElementById("fullname_Val" + username).innerHTML = '<input type="text" class="form-control" name = "fullname" id="fullname_val'+username+'" value = '+ fullname +' required>';
	document.getElementById("phone_Val" + username).innerHTML = '<input type="text" class="form-control" name = "phone" id="phone_val'+username+'" value = '+ phone +' required>';
	document.getElementById("exp_year_Val" + username).innerHTML = '<input type="text" class="form-control" name = "exp_year" id="exp_year_val'+username+'" value = '+ exp_year +' required>';


	document.getElementById("edit_button" + username).style.display = "none";
	document.getElementById("save_button" + username).style.display = "inline-block";
	document.getElementById("delete_button" + username).style.display = "inline-block";
}

function get_save(username){
	var password = document.getElementById("password_val" + username).value;
	var fullname = document.getElementById("fullname_val" + username).value;
    var phone = document.getElementById("phone_val" + username).value;
    var exp_year = document.getElementById("exp_year_val" + username).value;

	$.ajax
		({
			type: 'post',
			url: 'http://localhost/Web_Assignment/Admin/editAdmin',
			data: {
				edit_row: 'edit_row',
				username_val: username,
				password_val: password,
				fullname_val: fullname,
				phone_val: phone,
				exp_year_val: exp_year,
			},
			
			success: function (response) {
				
				document.getElementById("password_Val" + username).innerHTML = password;
				document.getElementById("fullname_Val" + username).innerHTML = fullname;
				document.getElementById("phone_Val" + username).innerHTML = phone;
				document.getElementById("exp_year_Val" + username).innerHTML = exp_year;

				document.getElementById("edit_button" + username).style.display = "inline-block";
				document.getElementById("save_button" + username).style.display = "inline-block";
				document.getElementById("delete_button" + username).style.display = "inline-block";
			}
		});

	

}
function get_delete(username){
	$.ajax
	({
		type: 'post',
		url: 'http://localhost/Web_Assignment/Admin/deleteAdmin',
		data: {
			delete_row: 'delete_row',
			username: username
		},
		success: function (response) {
			// if (response == "success") {
			var row = document.getElementById("row" + username);
			row.parentNode.removeChild(row);
			// }
		}
	});
}
