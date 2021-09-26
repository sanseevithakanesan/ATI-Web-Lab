
function Emptychecker() {
    let username = document.forms["myform1"]["uname"].value;
    let Password = document.forms["myform1"]["psw"].value;
    if (username== " " || Password == "" ) {
      alert("empty field");
      return false;
    }
    else  {
             alert("complete successfully!");
           }
    } 
      
   