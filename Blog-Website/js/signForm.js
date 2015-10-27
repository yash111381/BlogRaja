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
	var z = document.forms["form1"]["cnfpass"].value;
    if (z == null || z == "") {
        alert("Please Enter Password");
        return false;
    }
	var u = document.forms["form1"]["email"].value;
    if (u == null || u == "") {
        alert("Please Enter Email-ID");
        return false;
    }
}