<?php 

session_start();
$userI = 'root';
$pass = '';
$db = 'productionproj';

$con = mysqli_connect ('localhost', $userI, $pass, $db);


//selecting the database 
mysqli_select_db($con, $db);

if(isset($_POST['reg'])){

   

    $user = $_POST['user'];
    
    $full_name = $_POST['fullname'];

    $last_name = $_POST['lastname'];

    $passwd = $_POST['password'];  
    

    //query to find the specific area in the DB we are wanting to add usernames to

$p = " SELECT * FROM psignup WHERE user = '$user'";

//storing the query in the "$store" variable
$store = mysqli_query($con, $p);

    //  count the ammount of times the user is taken and if it is over 1 then output the echo
$count = mysqli_num_rows($store);

if($count == 1) [
    echo" Username Already Taken";


    if(empty($user)){

       array_push($errors,"username is required");    

    }
    if(empty($full_name)){

       array_push($errors,"Full Name is required");    

    }


    if(empty($last_name)){

       array_push($errors,"email is required");    

    }


    if(empty($passwd)){

       array_push($errors,"password is required");    

    }

    if(count($errors)==0){

        //$password = md5($password_1);

        
        $sql = "INSERT INTO psignup (user, Full_name, Last_name password) VALUES ('$user', '$full_name', '$last_name' '$password')";

        //echo $sql;

        mysqli_query($con,$sql);

        $_SESSION['user']=$user;

        $_SESSION['success']="You are now logged in";

        header('location: homepage.php');

    }

    

}



?>