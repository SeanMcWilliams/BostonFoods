function validate(){

	var firstname = document.getElementById("firstname").value;
	if (firstname.length < 1) {
		var errorrpt = document.getElementById("firstnameerr");
		errorrpt.innerHTML = "Please enter your first name";
		return false;
	}

	var lastname = document.getElementById("lastname").value;
	if (lastname.length < 1) {
		var errorrpt = document.getElementById("lastnameerr");
		errorrpt.innerHTML = "Please enter your last name";
		return false;
	}

	var email = document.getElementById("email").value;
	var emailFormat = /^\w+@\w+\.\w+/;
	if (email.length < 1 || !emailFormat.test(email)) {
		var errorrpt = document.getElementById("emailerr");
		errorrpt.innerHTML = "Please enter a valid email";
		return false;
	}

	var phone = document.getElementById("phone").value;
	var phoneFormat = /^(\d{3})\d{3}\d{4}/;
	if (phone.length < 1 || !phoneFormat.test(phone)) {
		var errorrpt = document.getElementById("phoneerr");
		errorrpt.innerHTML = "Please enter a valid phone number";
		return false;
	}


	var password1 = document.getElementById("password1").value;
	if (password1.length < 6) {
		var errorrpt = document.getElementById("p1err");
		errorrpt.innerHTML = "Your password is too short, must be at least 6 characters long";
		return false;
	}

	var password2 = document.getElementById("password2").value;
	if (password2 != password1) {
		var errorrpt = document.getElementById("p2err");
		errorrpt.innerHTML = "Your passwords don't match!";
		return false;
	}

}