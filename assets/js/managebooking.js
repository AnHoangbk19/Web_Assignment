function get_edit(id){
	// console.log("IdBooking_Val" + id);
	var IdBooking = document.getElementById("IdBooking_Val" + id).innerHTML;
	var Email = document.getElementById("Email_Val" + id).innerHTML;
	var Name = document.getElementById("Name_Val" + id).innerHTML;
    var Checkin = document.getElementById("Check-in_Val" + id).innerHTML;
    var Checkout = document.getElementById("Check-out_Val" + id).innerHTML;
	var Adult = document.getElementById("Adult_Val" + id).innerHTML;
	var Child = document.getElementById("Child_Val" + id).innerHTML;
	var Room = document.getElementById("Room_Val" + id).innerHTML;
	var Request = document.getElementById("Request_Val" + id).innerHTML;

	document.getElementById("Email_Val" + id).innerHTML = '<input type="email" class="form-control" name= "email" id="email_val'+IdBooking+'" value = '+ Email +' required>';
    document.getElementById("Name_Val" + id).innerHTML = '<input type="text" class="form-control" name = "name" id="name_val'+IdBooking+'" value = '+ Name +' required>';
    document.getElementById("Check-in_Val" + id).innerHTML = '<input type="text" class="form-control datetimepicker-input" name = "checkin" id="checkin_val'+IdBooking+'" value= '+ Checkin +' data-target="#date3" data-toggle="datetimepicker" required />';
	document.getElementById("Check-out_Val" + id).innerHTML ='<input type="text" class="form-control datetimepicker-input" name = "checkout" id="checkout_val'+IdBooking+'" value= '+ Checkout +'  data-target="#date4" data-toggle="datetimepicker" required />';
	document.getElementById("Adult_Val" + id).innerHTML = '<input type="number" class="form-control" name = "adult" id="adult_val'+IdBooking+'" value= '+ Adult +'  required>';
	document.getElementById("Child_Val" + id).innerHTML = '<input type="number" class="form-control" name = "child" id="child_val'+IdBooking+'" value= '+ Child +'  required>';
	document.getElementById("Room_Val" + id).innerHTML = '<input type="text" class="form-control" name = "room" id="room_val'+IdBooking+'" value= '+ Room +'  required>';
	document.getElementById("Request_Val" + id).innerHTML = '<input type="text" class="form-control" name = "request" id="message_val'+IdBooking+'" value= '+ Request +' >';



	document.getElementById("edit_button" + id).style.display = "none";
	document.getElementById("save_button" + id).style.display = "inline-block";
	document.getElementById("delete_button" + id).style.display = "inline-block";
}

function get_save(id){
	var Email = document.getElementById("email_val" + id).value;
	var Name = document.getElementById("name_val" + id).value;
    var Checkin = document.getElementById("checkin_val" + id).value;
    var Checkout = document.getElementById("checkout_val" + id).value;
	var Adult = document.getElementById("adult_val" + id).value;
	var Child = document.getElementById("child_val" + id).value;
	var Room = document.getElementById("room_val" + id).value;
	var Request = document.getElementById("message_val" + id).value;

	$.ajax
		({
			type: 'post',
			url: 'http://localhost/Web_Assignment/Booking/editBooking',
			data: {
				edit_row: 'edit_row',
				id_val: id,
				email_val: Email,
				name_val: Name,
				checkin_val: Checkin,
				checkout_val: Checkout,
				adult_val: Adult,
				child_val: Child,
				room_val: Room,
				request_val: Request
			},
			
			success: function (response) {
				
				document.getElementById("Email_Val" + id).innerHTML = Email;
				document.getElementById("Name_Val" + id).innerHTML = Name;
				document.getElementById("Check-in_Val" + id).innerHTML = Checkin;
				document.getElementById("Check-out_Val" + id).innerHTML = Checkout;
				document.getElementById("Adult_Val" + id).innerHTML = Adult;
				document.getElementById("Child_Val" + id).innerHTML = Child;
				document.getElementById("Room_Val" + id).innerHTML = Room;
				document.getElementById("Request_Val" + id).innerHTML = Request;
				document.getElementById("edit_button" + id).style.display = "inline-block";
				document.getElementById("save_button" + id).style.display = "inline-block";
				document.getElementById("delete_button" + id).style.display = "inline-block";

			}
		});

	

}
function get_delete(id){
	$.ajax
	({
		type: 'post',
		url: 'http://localhost/Web_Assignment/Booking/deleteBooking',
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
