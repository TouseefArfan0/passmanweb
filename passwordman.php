<html lang="en">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="passwordman.css">
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

    <form class="submission-form">
        <label> 
            <h3>Password Manager</h3>
            
        <div class="form-group">
          <label for="site">Site:</label>
          <i class="fab fa-internet-explorer"></i> 
          <input id="siteform" type="text" placeholder="Website">
        </div>

        <div class="form-group">
          <label for="accountID">Account ID:</label>
          <i class="fas fa-user-circle"></i>
          <input id="accid" type="text" placeholder="Account ID">
        </div>
   
        <div class="form-group">
            <label for="Password">Password:</label>
            <i class="fas fa-key"></i>
            <input id="passform" type="text" placeholder="Password">
          </div>
      
          <input type="button" onclick="savedata()" class="btn-primary" id="submit" value="Submit" />

      </form>
      </div>

      <script type="text/javascript">

        var checkedValue = [];
                    var row;
                    var data;
        
                function savedata() {
                
                  let Website = document.getElementById("siteform").value;
                  console.log(Website);
                
                  let accountId = document.getElementById("accid").value;
                  console.log(accountId);
                
                  let password = document.getElementById("passform").value;
                  console.log(password);
              
                }
                
                console.log(data);     
                createtablerow();
                
              
                
                    function createtablerow() {
                
                        table = document.getElementsByClassName('form_result');    
                        var columnCount = table.rows[0].cells.length;
                
                         //Add the data rows.
                            row = table.insertRow(-1);
                
                            var cell1 = row.insertCell(-1);
                            var cell2 = row.insertCell(-1);
                            var cell3 = row.insertCell(-1);
                
                            cell1.innerHTML = Website;
                            cell2.innerHTML = accountId;
                            cell3.innerHTML = password;
                    
                             //here i am adding the row
                            table.appendChild(row);
                
                             
                            
                            
                        
                }
                </script>

      </div>

      <table class="form_result">
        <thead>
          <tr>
            <th scope="Social Site">Social Site</th>
            <th scope="Account">Account ID</th>
            <th scope="passwd">Password</th>
          </tr>

          <tr>
          <td></td>
          <td></td>
          <td></td>
          </tr>

        </thead>
        <tbody id='dynamicFill'>
       
           
        </tbody>
      </table>


</body>
</html>