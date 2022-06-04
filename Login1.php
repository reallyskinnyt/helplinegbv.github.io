<?php
    //Login
    session_start();

    include("Connection.php");
    include("function.php");

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        //Something was posted
       $fname = $_POST['fname'];
       $surname = $_POST['surname'];
       $password = $_POST['password'];
       

       if(!empty($fname) && !empty($surname) && !empty($password) &&  !is_numeric($fname) && !is_numeric($surname) )
       {
           //Read from database
           $query = "Select * from users where Name = '$fname' limit 1";
           $result = mysqli_query($con, $query);

           if($result)
           {
            if($result && mysqli_num_rows($result) > 0)
            {
                $user_data = mysqli_fetch_assoc($result);
                
                if($user_data['Password'] == $password)
                {
                    $_SESSION['user_id'] = $user_data['user_id'];
                    header("Location: Report-Case.html");
                    die; 
                }
            }
           }


           echo "Wrong username or password!";
       }else
       {
           echo "Please enter some valid information";
       }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
   <!-- <link rel="stylesheet" href="regStyle.css"> -->
   <link rel="stylesheet" href="contact.css">

</head>
<body>
    <div class="head">
        <header>HELPLINE GBV</header>
        <span class="image">
            <img class="logo" src = "gbv.jpg" alt = "Gender">
        </span>
    </div>
    <br><br><br>

    <div class="loginD"><p>Please verify your details to continue.</P>
    <p>If you do not have Login details please click here to: <a style="color: Blue ;" href="Registrartion.html">Sign up</a></p></div>
    
    <div class="main">
    <div class="wrapper1">
        <div class="main1">
            <div class="form f1">
                <form class="signup" method="post">
                    <div class="S"><h3>Login</h3></div>
                    <p class="name1">NAME :</p>
                    <p><input type="text" name="fname" placeholder="Enter your Name" class="name-input" required> </p>
                    <p class="name1">SURNAME :</p>
                    <p><input type="text" name="surname" placeholder="Enter your Surname" class="name-input"> </p>
                    <p class="name1">PASSWORD :</p>
                    <p><input type="password" name="password" placeholder="Enter your password" class="pass" required> </p>
                    <p>
                        <input type="submit" name="sub" value="SUBMIT" class="subb">
                    </p>
                    <br><br><br>
                    <a style="color: blue;">Forgot Password?</a>
                </form>
            </div>
        </div>
    </div>
    <br><br>
</body>
</html>