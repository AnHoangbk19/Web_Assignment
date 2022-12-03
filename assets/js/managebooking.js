function showAll(){
    if (window.XMLHttpRequest) {
		xmlhttp = new XMLHttpRequest();
	} else {
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	console.log(xmlhttp);
	xmlhttp.onreadystatechange = function () {
		if (this.readyState == 4 && this.status == 200) {

			var myArray = JSON.parse(this.responseText)
			myArray.forEach(element => {
				var data = document.getElementById("data");
				var row = data.insertRow(0).outerHTML = "<tr id='row" + element.id + "' style='text-align:center' > <td id='id_val" + element.id + "'>" + element.id + "</td><td id='name_val" + element.id + "'>" + element.name + "</td><td id='descript_val" + element.id + "'>" + element.description + "</td><td id='price_val" + element.id + "'>" + element.price + "</td><td id='image_val" + element.id + "'>" + element.image + "</td><td><input type='button' class='edit_button' id='edit_button" + element.id + "' value='Edit' onclick='edit_row(" + element.id + ");'/><input type='button' class='save_button' id='save_button" + element.id + "' value='Save' onclick='save_row(" + element.id + ");'/><input type='button' class='delete_button' id='delete_button" + element.id + "' value='Delete' onclick='delete_row(" + element.id + ");'/></td></tr>";
			});
		}
	};
	xmlhttp.open("GET", "show.php", true);
	xmlhttp.send();
}
