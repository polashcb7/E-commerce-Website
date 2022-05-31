function validatebuyForm() {
    var a = document.forms["signForm"]["fullname"].value;
    var b = document.forms["signForm"]["email"].value;
    var c = document.forms["signForm"]["phone"].value;
    var d = document.forms["signForm"]["card_number"].value;
    if (a == "") {
        alert("Fullname must be filled out");
        return false;
    }
    if (b == "") {
        alert("Email must be filled out");
        return false;
    }
    if(!b.includes("@"))
     {
      alert("Error Email");	
      return false;
     }
    
    if (c == "") {
        alert("Phone Number  must be filled out");
        return false;

     }
      if (d == "") {
        alert("Please enter your card number ");
        return false;

     }

    

    
    

}