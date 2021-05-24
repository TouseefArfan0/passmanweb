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
        
      <li><a href="homepage.html">Home</a></li>
      <li><a href="passwordman.php">Password Manager</a></li>
      <li><a href="passgen.html">Password Generator</a></li>
      <li><a href="login.php">Login</a></li>
  
    </ul>
  </nav>
</header>
  </div>

  

<div class="form-area">

<div id="form-box">

    <form class="submission-form">
        <label> 
            <h3>Sign In</h3>
            
        <div class="form-group">
          <label for="Username">Username:</label>
          <i class="fas fa-user"></i>
          <input id="User" type="text" placeholder="Username">
        </div>
   
        <div class="form-group">
            <label for="Password">Password:</label>
            <i class="fas fa-key"></i>
            <input id="passform" type="password" placeholder="Password">

           
           
          </div>
      
          <input type="button"  class="btn-primary" id="Login" value="Login" />

          <h4> Or </h4>

          <a href="signup.php">

          <input type="button"  class="btn-primary" id="Login" value="Signup" />
          </a>

      </form>
      </div>

      <script type="text/javascript">
          
     
/*  this is so i can reference to specific area in the code which is the password area in this case */
    
    const input = document.querySelector('.form-group input');
    
    
        
        var passwd = true

 /* so the icon is clickable */
            visibilityToggle.addEventListener('click', function()

            /* IF when icon is clicked it will not toggle / ELSE clicked again is a password and will toggle  */
    {
        if (passwd) {
    input.setAttribute('type', 'text');
        }
        else{
            input.setAttribute('type', 'password');
    
        }
        /* it will change the password from true to false so it is able to change */
        passwd = !passwd;
    });
    
    
        
                
                                              
                
                </script>

      </div>

  
</body>
</html>