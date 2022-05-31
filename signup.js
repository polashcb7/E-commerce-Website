function validatesignForm() {
    var a = document.forms["signForm"]["fullname"].value;
    var b = document.forms["signForm"]["email"].value;
    var c = document.forms["signForm"]["psw"].value;
    var d = document.forms["signForm"]["pswrepeat"].value;
    if (a == "") {
        alert("Fullname must be filled out");
        return false;
    }
    if (b == "") {
        alert("Email must be filled out");
        return false;
    }
    if(!b.includes("@" && "."))
     {
      alert("Error Email");	
      return false;
     }
    
    if (c == "") {
        alert("Password must be filled out");
        return false;

     }
       if(c.length<8 || c.length>32)
    {
  alert("Password contains 8-32 chars");
  return false;
    }
     if (d == "") {
        alert("Repeat Password must be filled out");
        return false;

     }
     if (c != d) {
        alert("Password Doesn't Match");
        return false;

     }

    

    
    

}