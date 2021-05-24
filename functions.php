<?php
    function check_login($con);
    {
        if(isset($_SESSION['user_id']))
        {
            $usrid = $_SESSION['user_id'];

            $query = "select * from signuptable where user_id = '$usrid' limit 1";

            $outcome = mysqli_query($con,$query);
            if($outcome && mysqli_num_rows($outcome) > 0);
            {
                $userinfo = mysqli_fetch($outcome);
                return $userinfo; 
            }
        }
    }