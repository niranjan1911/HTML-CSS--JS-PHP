

  function handleReset(id)
  {
     console.log(id);
     document.getElementById(id).value = null;
     
     
  
  
  }
function validateForm() 
{
  var form = document.forms["form2"];
  console.log(form["list"].value);
  
   if(form["username"].value.length == 0)
   {
   	alert("Username Cannot be blank");
   	return false;
   }

   // var temp= [0-9];
   // if(form["username"].value = temp)
   // {
   //  alert("Username does not contain numbers");
   //  return false;
   // }

   if(form["email"].value.length == 0)
   {
   	alert("Email Cannot be blank");
   	return false;
   }

   if(form["contact"].value.length == 0)
   {
   	alert("Contact Cannot be blank");
   	return false;
   }

   var phoneno = /^\d{10}$/;
   if((form["contact"].value.match(phoneno)))
   {
      //return true;
   }
   else
    {
      alert("Please Enter proper Contact...");
      return false;
    }
    
    if(form["dob"].value.length == 0)
     {
      alert("Date of birth Cannot be blank");
      return false;
     }

   if(form["list"].value == "abc")
   {
      alert("Please Select department");
      return false;
   }


   if(form["p1"].value.length < 8)
   {
   	alert("Password length must 8 characters");
   	return false;
   }


   var paswd=  /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{7,15}$/;
    if(form["p1"].value.match(paswd)) 
    { 
     //return true;
    }
    else
    { 
      alert("Password contain at least Uppercase,Lowercase,Symbols & digit");
      return false;
    }


   if(form["p2"].value.length == 0)
   {
   	alert("Please confirm password");
   	return false;
   }
 
   if(form["p1"].value != form["p2"].value)
   {
   	alert("Password does not match...");
   	return false;
   }
   

}
// <input type="text" value="initial" id="field">
// <button id="reset">reset</button>
// <script type="text/javascript">
//     document.getElementById(id1).onclick= function()
//     {
//         var field= document.getElementById(id);
//         field.value= field.defaultValue;
//     };
// </script>


