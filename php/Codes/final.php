<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Log in</title>
  <style >
    .page{
      /*height: 100vh;*/
      width: 98vw;
      /*border: 2px solid white;*/
      margin-top: 10vh;
      margin-left: 25vw;
      /*background: radial-gradient(circle at 50%,rgb(255,255,255),rgb(50,50,50));*/
    }
    .input1{
      height: 5vh;
      width: 25vw;
      margin-left: 2vw;
      border-radius: 5px;
      
      
    }
    .input2{
      height: 5vh;
      width: 25vw;
      margin-left: 2vw;
      border-radius: 5px;
    }
    .input1:hover
    {
      
      box-shadow: 0 0 20px white;

    }
    .input2:hover
    {
      
      box-shadow: 0 0 20px white;
    }
    .text1{
      height: 10vh;
      width: 25vw;
      margin-left: 5vw;
      border-radius: 5px;
    }
    .text1:hover{
      
      box-shadow: 0 0 20px white;
    }
    .button1{
      height: 5vh;
      width: 9vw;
      border-radius: 10px;
      font-size: 18px;
      
      margin-left: 5vw;


        background-color: #f4511e;
        border: none;
        color: #FFFFFF;
        text-align: center;
      
        transition: all 0.5s;
        cursor: pointer;
       
    }
    .abcd
    {
      height: 30px;
      width: 25px;
      margin-right: 10px;
      display: none;
    }
    .form1{
       width: 49vw;
      margin-top: 10vh;
      margin-left: 1vw;
      background: radial-gradient(circle at 50%,rgb(0,100,155),rgb(0,0,0));
    }
    a{
      text-decoration: none;
    }
    .one{
      background: #4caf50;
      color: black;
      border-radius: 5px;
      height: 30px;
      width: 80px;
    }
    .selecting
    {
      margin-left: 5vw;
      /*width: 25px;
      height: 10px;
      font-size: 8px;*/
    }
    .selecting1
    {
      margin-left: 5vw;
      width: 15 vw;
      height: 5vh;
      font-size: 15px;
      border-radius: 5px;<span>
    }
    .text{
      margin-left: 3vw;
      color: #b0c95b;

    }
    .button1 span 
    {
      cursor: pointer;
      display: inline-block;
      position: relative;
      transition: 0.5s;
    }

    .button1 span:after 
    {
      content: '\00bb';
      position: absolute;
      opacity: 0;
      top: 0;
      right: -20px;
      transition: 0.5s;
    }

    .button1:hover span 
    {
      padding-right: 25px;
    }

    .button1:hover span:after 
    {
      opacity: 1;
      right: 0;
    }
    legend,fieldset{
      border-radius: 10px;

    }
    .error 
    {
      color: red;
      font-size: 20px;
      
    }
    
  </style>


</head>
<body style="transform: translate(-10px,-50px);background: #bf7a19"> 

<?php
// define variables and set to empty values
$nameErr = $emailErr = $websiteErr = "";
$name = $email = $website = "";

$temp = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
  if (empty($_POST["Full_name"])) 
  {
    //echo "<script>alert('Name is reqired')</script>";
    $nameErr= "Name required...";
  } else 
  {
    $name = test_input($_POST["Full_name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) 
    {
      //echo "<script>alert('Numbsers not allowed in name')</script>";
      $nameErr= "Numbers not allowed...";
    }
  }
  
  if (empty($_POST["email"])) 
  {
    //echo "<script>alert('Email is reqired')</script>";
    $emailErr = "Email required...";
  } else 
  {
    $email = $_POST['email'];
    if(preg_match('/^([A-Za-z0-9_\-\.])+@([A-Za-z0-9_\-])+\.([A-Za-z]{2})+\.([A-Za-z]{2})$/',$email) )
    {
      echo "Matches .com";
    }
    else if (preg_match('/^([A-Za-z0-9_\-\.])+@([A-Za-z0-9_\-])+\.([A-Za-z]{3})$/' , $email) )
    {
      echo "Matches .co.in";
    }
    else
    {
      //echo "<script>alert('Invalid Email');</script>";
      $emailErr= "Invalid email...";
      //echo "<script>window.location.href = 'menu.php'</script>";
    } 
  }

   if (empty($_POST["web"])) {
    $website = "";
  } else {
    $website = test_input($_POST["web"]);
    // check if URL address syntax is valid
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) 
    {
      //echo "<script>alert('Invalid Website');</script>";
      $websiteErr= "Invalid Website...";
    }    
  }
   if($temp==$nameErr && $tepm==$websiteErr && $temp==$emailErr)
   {
      echo "<script>alert('Sucessfully...');</script>";
   }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>



  <div class="page">
         <!-- <h1 align="middle" style="color: white">Member Registration</h1>
         <img style="margin-left:27vw;height: 130px;width: 130px" src="man.png"> -->

    <form name="form2" class="form1" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
       
      <FIELDSET>

        <legend style="font-size: 30px;color: #a67c23">Sign up</legend>
         <p><span class="error">* Required field</span></p>
       <FIELDSET> 
        <legend style="font-size: 20px;color: white;text-align: center;">Personal details</legend>

      <h4 class="text"> Name:</h4>
      <input class="input1" id="name1" type="text" name="Full_name" placeholder="Name" autocomplete="off" autofocus="" onkeyup="myName()">&nbsp&nbsp<span class="error">* <?php echo $nameErr;?></span>
      &nbsp
      

     
       
      
     
  </FIELDSET>
      

        <FIELDSET> 
        <legend style="font-size: 20px;color: white;text-align: center;">Contact details</legend>
      <h4 class="text">Email:</h4>
      <input class="input1" id="email1" type="email" name="email" placeholder="Email">&nbsp&nbsp<span class="error">* <?php echo $emailErr;?></span>
      &nbsp
      

     
      
      <h4 class="text"> Website</h4>
      <input class="input2" id="web1"  name="web" placeholder="Website">&nbsp&nbsp<span class="error"> <?php echo $websiteErr;?></span>      
      
        </FIELDSET></br>
        
      
     
      </br></br>
      <button type="submit" class="button1" ><span>Submit</button>
      <button class="button1" type="Reset"><span>Reset</span></button></br></br>
      </FIELDSET> 
    </form>
  </div>
 

<?php
echo "<h2>Your Input:</h2>";
echo $name;

echo "<br>";
echo $email;

echo "<br>";
echo $website;
?>

</body>
</html>
