function validateForm(){
	//Check that each mandatory box is not empty

	//validate the mandatory name
	var x = document.forms["myForm"]["name"].value
	if (x == null || x == "")
	{
		alert("Name must be filled out.");
		document.forms["myForm"]["name"].focus();
		return false;
	}

	//validate the email and format consists of x@y.z,
	//where x, y, and z are one or more alphanumeric characters
	var e = document.forms["myForm"]["email"].value
	if (e == null || e == "")
	{
		alert("Email address must be filled out..");
		document.forms["myForm"]["email"].focus();
		return false;
	}
	var regEmail = /^([a-zA-Z0-9])+\@([a-zA-Z0-9]){1,30}\.([a-zA-Z0-9]){1,3}$/i;
	if(!regEmail.test(e))
	{
		alert("Please enter the valid email.\n (e.g.) a@b.cc");
		document.forms["myForm"]["email"].focus();
		return false;
	}

    //validate only address 1, address2 is optional
	var x = document.forms["myForm"]["address1"].value
	if (x == null || x == "")
	{
		alert("Address must be filled out.");
		document.forms["myForm"]["address1"].focus();
		return false;
	}
    
    //validate city
	var x = document.forms["myForm"]["city"].value
	if (x == null || x == "")
	{
		alert("City must be filled out.");
		document.forms["myForm"]["city"].focus();
		return false;
	}
    
    //validate province
	var x = document.forms["myForm"]["province"].value
	if (x == null || x == "")
	{
		alert("Province must be filled out.");
		document.forms["myForm"]["province"].focus();
		return false;
	}
    
    //validate postal code
	var pc = document.forms["myForm"]["postalcode"].value
	if (pc == null || pc == "")
	{
		alert("Postal code must be filled out.");
		document.forms["myForm"]["postalcode"].focus();
		return false;
	}
    
    var regPc = /[a-zA-Z][0-9][a-zA-Z](-| |)[0-9][a-zA-Z][0-9]/;
	if(!regPc.test(pc))
	{
		alert("Please input valid postal code (e.g. 1A2 B3C)");
		document.forms["myForm"]["postalcode"].focus();
		return false;
	}      
    
	//validate telephone  and format ddd-ddd-dddd, where d is any digit.
	var tp = document.forms["myForm"]["phonenumber"].value
	if (tp == null || tp == "")
	{
		alert("Phone number must be filled out.");
		document.forms["myForm"]["phonenumber"].focus();
		return false;
	} 
    
	var regPhone = /^[0-9]{3}-[0-9]{3}-[0-9]{4}/;
	if(!regPhone.test(tp))
	{
		alert("Please enter the valid phone number.\n (e.g.) xxx-xxx-xxxx");
		document.forms["myForm"]["phonenumber"].focus();
		return false;
	}
    
	return true;
}

window.onload = function(){
    document.getElementById('submit').onclick = function(){
        validateForm();
    }
}