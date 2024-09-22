<?php
require_once('../api/dbinfo.php');
// $usrname = 'admin1';
$usrname = htmlspecialchars($_POST['usrname']); 
$usrname_pattern = '/^[a-zA-Z0-9]+$/';

    if(!empty("$usrname")){
        if(preg_match($usrname_pattern,$usrname))
        {
            $sqlusrChk = "SELECT *
              FROM user_info WHERE username = ('$usrname');";

            $result = mysqli_query($conn, $sqlusrChk);

            if(mysqli_num_rows($result) > 0){
                
                echo "Username is already taken!";
            }
            else
            {
                echo "success";
            }
        }
        else
        {
            $err_usrname = "Username is invalid.(allow only A-Z, a-z and 0-9)";
            echo $err_usrname;
        }
    }
    else
    {
        $err_usrname = "Required to fill your username!";
        echo $err_usrname;
    }

// $usrname = $_POST['usrname'];
    
// $sqlusrChk = "SELECT *
//               FROM user_info WHERE username = ('$usrname');";

//             $result = mysqli_query($conn, $sqlusrChk);
//             // print_r($result);


//             if(mysqli_num_rows($result) > 0){
                
//                 echo "Username is already taken!";
//             }
//             else
//             {
//                 echo "Username is valid.";
//             }