function validateForm() {
    var x = document.forms["myForm"]["email"].value;
    if (x == "") {
        alert("Email must be filled out");
        return false;
    }
    if(!x.includes("@"))
     {
      alert("Error Email");	
      return false;
     }
    var y = document.forms["myForm"]["psw"].value;
    if (y == "") {
        alert("Password must be filled out");
        return false;

     }

    

      if(y.length<8 || y.length>32)
    {
	alert("Password contains 8-32 chars");
	return false;
    }
    

}