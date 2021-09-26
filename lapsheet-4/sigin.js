
function Emptycheck() {
    let firstname = document.forms["myForm"]["firstname"].value;
    let lastname = document.forms["myForm"]["lastname"].value;
    let username= document.forms["myForm"]["userName"].value;
    let Email = document.forms["myForm"]["email"].value;
    let Password= document.forms["myForm"]["password"].value;
    let Reenterpassword = document.forms["myForm"]["password-repeat"].value;

    if (username == "" ) {
      alert("username is empty");
      return false;
    }
    if (lastname == "" ) {
      alert("lastname is empty");
      return false;
    }
    if (firstname == "" ) {
        alert("user firstname filled is empty");
        return false;
      }
    if (Email == "" ) {
        alert("email filled is empty");
        return false;
      }
      if (Password == "" ) {
        alert("password filled is empty");
        return false;
      }
      if (Reenterpassword=="" ) {
        alert("repeat password filled is empty");
        return false;
      }
 
        
    } 

function checklength(){
      let maxlen = document.forms["myForm"]["userName"].value.length ;
      let minlen = document.forms["myForm"]["userName"].value.length ;
      if(maxlen > 12 && minlen > 8){
        alert("valid");
        return false;
      }
      else{
        alert("not valid");
        return false;
      }

  }
      
  function somefunc(){
      if( Emptycheck() && checklength()){
         alert("complete succesfully!");
         return false;
     }

  }
   
  