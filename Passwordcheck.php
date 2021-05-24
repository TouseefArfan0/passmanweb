<!DOCTYPE html>
<html lang="en">

<head>
       <title> Bootstrap Example </title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="passcheck.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>



</head>

<body>
  <div id="logo"> 
    <img src="cyph.png"> 
  </div> 
  <div class='container'>
    <header>
      <nav>
        <ul>
      
           <li><a href="homepage.php">Home</a></li>
           <li><a href="passwordman.php">Password Manager</a></li>
           <li><a href="passgen.html">Generate Password</a></li>
           <li><a href="login.php">Login</a></li>
           
        </ul>
      </nav>
    </header>
  </div>

  <div class="passgentable">
   
    <form class="passtable">
        <label> 
            <h3>Password Strength Indicator</h3>

            <div class="passhead">
                <input onkeyup="trigger()" id="passhead" type="text" placeholder="">
                <button class="copy" id="copy"> Copy </button> 
              </div>

      <div class="indicators">

          <span class="weak"></span>
          <span class="medium"></span>
          <span class="strong"></span>
</div>
<div class="result"> Your password is weak</div>
     
</form>

  </div>

  
  <script type="text/javascript">

  //creating variables
   
   const indicators = document.querySelector(".indicators");
   const input = document.querySelector(".input");
   const weak = document.querySelector(".weak");
   const medium = document.querySelector(".medium");
   const strong = document.querySelector(".strong");
   const result = document.querySelector(".result");

   function trigger() {
      if(input.value != "")
{
  indicators.passcheck.display ="block";
  indicators.passcheck.display ="flex";
}
   } else {
   indicators.passcheck.display = "none";

   }
  }
</script>
   

</body>
</html>