
function checkLogin() {
	var u = document.getElementById("inputUsername").value;
	var p = document.getElementById("inputPassword").value;

	document.getElementById("info").innerHTML = u + p;
}