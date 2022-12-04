function get_deny(id){
	$.ajax
	({
		type: 'post',
		url: 'http://localhost/Web_Assignment/Contact/denyComment',
		data: {
			delete_row: 'delete_row',
			id: id,
		},
		success: function (response) {
			// if (response == "success") {
			var row = document.getElementById("row" + id);
			row.parentNode.removeChild(row);
			// }
		}
	});
}

