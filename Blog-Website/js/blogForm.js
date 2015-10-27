function validateForm() {
    var x = document.forms["form1"]["title"].value;
    if (x == null || x == "") {
        alert("Please Enter Blog-Title");
        return false;
    }
	var y = document.forms["form1"]["desc"].value;
    if (y == null || y == "") {
        alert("Please Enter Blog-Description");
        return false;
    }
}