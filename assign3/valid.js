
function myName()
{
  var form = document.forms["form2"];

  var name_passed=document.getElementById("name1").value;

  var a=document.getElementById("hide");
   var b=document.getElementById("show");

  var pattern= /^[a-zA-Z][a-zA-Z\s]*$/;
  s
  if(name_passed!=pattern)
  {
     b.style.display="none";
     a.style.display="block";
  }
  else
  {
     a.style.display="none";
     b.style.display="block";
  }
}
function myFunc()
{
   var form = document.forms["form2"];
   //console.log(document.getElementById("mobile1").value);
   var a=document.getElementById("hide");
   var b=document.getElementById("show");

   if(form["contact"].value.length==10)
   {
  
     a.style.display="none";
     b.style.display="block";

     
   }
   if(form["contact"].value.length!=10)
   {
     
     b.style.display="none";
     a.style.display="block";
   }
 
}

  function handleReset(arg)
  {
     // console.log(id);
     for (var i = 0; i < arg.length; i++) 
     {
        document.getElementById(arg[i]).value = null;
     }
    
     function handle(id)
      {
         // console.log(id);
     
        document.getElementById(id).value = "abc";
       }     
  
  
  }
function validateForm() 
{
  var form = document.forms["form2"];
  console.log(form["list"].value);
  
     if(form["Full_name"].value.length == 0)
     {
      alert("Name Cannot be blank");
       document.getElementById("name1").focus()
       document.getElementById("name1").style.border ="2 px solid red";
      return false;
     }
     ///else
    // {
     //  form["Full_name"].next("man.png").show();
    // }

    if(form["dob"].value.length == 0)
     {
      alert("Date of birth Cannot be blank");
      document.getElementById("DOB").focus()
      return false;
     }

     if(form["Address"].value.length == 0)
     {
      alert("Address Cannot be blank");
       document.getElementById("add").focus()
      return false;
     }

     if(form["list"].value == "abc")
     {
        alert("Please Select department");
       //  document.getElementById("DOB").focus()
        return false;
     }

     if(form["email"].value.length == 0)
     {
      alert("Email Cannot be blank");
       document.getElementById("email1").focus()
      return false;
     }

   if(form["contact"].value.length == 0)
   {
    alert("Contact Cannot be blank");
     document.getElementById("mobile1").focus()
    return false;
   }
   if(form["username"].value.length == 0)
   {
   	alert("Username Cannot be blank");
     document.getElementById("username1").focus()
   	return false;
   }

   // var temp= [0-9];
   // if(form["username"].value = temp)
   // {
   //  alert("Username does not contain numbers");
   //  return false;
   // }

  

   var phoneno = /^\d{10}$/;
   if((form["contact"].value.match(phoneno)))
   {
      //return true;
   }
   else
    {
      alert("Please Enter proper Contact...");
       document.getElementById("mobile1").focus()
      return false;
    }
    
   

   

   if(form["p1"].value.length < 8)
   {
   	alert("Password length must 8 characters");
     document.getElementById("pp1").focus()
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
       document.getElementById("pp1").focus()
      return false;
    }


   if(form["p2"].value.length == 0)
   {
   	alert("Please confirm password");
     document.getElementById("pp2").focus()
   	return false;
   }
 
   if(form["p1"].value != form["p2"].value)
   {
   	alert("Password does not match...");
     document.getElementById("pp1").focus()
      document.getElementById("pp2").focus()
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


