function validateForm() {
    var x = document.forms["form1"]["username"].value;
    if (x == null || x == "") {
        alert("Please Enter Username");
        return false;
    }
	var y = document.forms["form1"]["password"].value;
    if (y == null || y == "") {
        alert("Please Enter Password");
        return false;
    }
}