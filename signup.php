
<!DOCTYPE html>
<html lang="en">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
</head>
<body>
  <div id="logo"> 
    <img src="cyph.png"> 
  </div> 
<div class='container'>
<header>

<div class='jumbotron text-center'></div>

<nav>
    <ul>
        
      <li><a href="homepage.php">Home</a></li>
      <li><a href="passwordman.php">Password Manager</a></li>
      <li><a href="passgen.html">Password Generator</a></li>
      <li><a href="login.php">Login</a></li>
  
    </ul>
  </nav>
</header>
  </div>

  

<div class="form-area">

<div id="form-box">

    <form action="serv.php" method="post" class="submission-form">
        <label> 
            <h3>Sign Up</h3>

            <div class="form-group">
                <label for="firstname">First Name:</label>
                <i class="fas fa-id-card"></i>
                <input id="firstname" name="firstname"type="text" placeholder="First Name">
              </div>

              <div class="form-group">
                <label for="lastname">Last Name:</label>
                <i class="fas fa-id-card"></i>
                <input id="lastname" name="lastname" type="text" placeholder="Last Name">
              </div>
            
            
        <div class="form-group">
          <label for="Username">Username:</label>
          <i class="fas fa-user"></i>
          <input id="User" name="user" type="text" placeholder="Username">
        </div>
   
        <div class="form-group">
            <label for="Password">Password:</label>
            <i class="fas fa-key"></i>
            <input id="passform" name="password" type="password" placeholder="Password">

           
           
          </div>
            
          <input type="button"  class="btn-primary" name="reg" id="Login" value="Signup" />

      </form>
      </div>

    

      </div>

</body>
</html>