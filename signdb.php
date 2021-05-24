<?php 

session_start();
$user = "root";
$pass = "";
$db = "productionproj";

$con = mysqli_connect ('localhost', $user, $pass, $db) ;


//selecting the database 
mysqli_select_db($con, $db);

//connecting the variables

$users = $_POST['user'];
$passwd = $_POST['password'];

//query to find the specific area in the DB we are wanting to add usernames to

$p = " SELECT * FROM psignup WHERE user = '$users'";

//storing the query in the "$store" variable
$store = mysqli_query($con, $p);

//  count the ammount of times the user is taken and if it is over 1 then output the echo
$count = mysqli_num_rows($store);

if($count == 1) [
    echo" Username Already Taken";
] //if user is not already taken then insert the data into the database 
else{
    $sign= " INSERT INTO psignup(user , password) values ('$users' , '$passwd')";
    mysqli_query($$con, $sign);
    echo" Registration Successful";
}
?>