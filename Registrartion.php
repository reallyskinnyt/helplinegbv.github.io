<?php
    //Signup
    session_start();

    include("Connection.php");
    include("function.php");

    $success=0;
    $user=0;
    $invalid=0;

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        //Something was posted
       $fname = $_POST['fname'];
       $surname = $_POST['surname'];
       $email = $_POST['UID'];
       $number = $_POST['phone-number']; 
       $password = $_POST['password'];
       $password2 = $_POST['password2'];
       $gender = $_REQUEST['gender'];
       
       

       if(!empty($fname) && !empty($surname) && !empty($email) && !empty($number) && !empty($password) && !empty($password2) && !empty($gender) &&  !is_numeric($fname) && !is_numeric($surname) )
       {
        //Read from database
        $query = "Select * from users where Name = '$fname' limit 1";
        $result = mysqli_query($con, $query);

        if($result)
        {
            $num=mysqli_num_rows($result);
            if($num>0){
                $user=1;
            }else{

                if($password===$password2){
           //Save to database
           $user_id = random_num(20);
           $query = "INSERT INTO users (user_id,Name,Surname,Email,Cell_No,Password,Confirmed_Password,Gender) values ('$user_id','$fname','$surname','$email','$number','$password','$password2','$gender')";
                
          $result = mysqli_query($con, $query);
            
          if($result){
            $success=1;

           header("Location: Login.html");
           die;
          }
       }else
        {
           $invalid=1;
           echo "Please enter some valid information";
        }
       }
      }
     }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign-Up</title>
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

    <?php
    if($user){
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
              <strong>Ohh No Sorry</strong> User already exists.
              <button type="button" class="close" data-dismiss="alert" aria-label="class">
                  <span aria-hidden="true">&times;</span>
              </button>
            </div>';
    }
    ?>

    <?php
    if($invalid){
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
              <strong>Ohh No Sorry</strong> invalid credentials.
              <button type="button" class="close" data-dismiss="alert" aria-label="class">
                  <span aria-hidden="true">&times;</span>
              </button>
            </div>';
    }
    ?>

    <?php
    if($success){
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
              <strong>Success</strong> You are successfully signed up.
              <button type="button" class="close" data-dismiss="alert" aria-label="class">
                  <span aria-hidden="true">&times;</span>
              </button>
            </div>';
    }
    ?>
    
    <div class="main">
    <div class="wrapper1">
        <div class="main1">
            <div class="form f1">
                <form class="signup" method="post">
                    <div class="S"><h3>Sign-Up Form</h3></div>
                    <p class="name1">NAME :</p>
                    <p><input type="text" name="fname" placeholder="Enter your Name" class="name-input" required> </p>
                    <p class="name1">SURNAME :</p>
                    <p><input type="text" name="surname" placeholder="Enter your Surname" class="name-input"> </p>
                    <p class="name1">EMAIL :</p>
                    <p><input type="email" name="UID" placeholder="Enter your Email Address" class="name-input" required> </p>
                    <p class="name1">PHONE Number :</p>
                    <p><input type="text" name="phone-number" placeholder="Enter your Phone Number" class="name-input"> </p>
                    <p class="name1">PASSWORD :</p>
                    <p><input type="password" name="password" placeholder="Enter your password" class="pass" required> </p>
                    <p><input type="password" name="password2" placeholder="Confirm your password"   class="pass"> </p>
                    <p class="gender">
                        <span class="gen">GENDER :</span>
                        <input type="radio" value="Male" name="gender" class="gend">Male
                        <input type="radio" value="Female" name="gender" class="gend">Female
                    </p>
                    <p>
                        <input type="submit" name="sub" value="SUBMIT" class="subb">
                    </p>
                </form>
            </div>
        </div>
    </div>
    <br><br>
    
</body>
</html>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<?php
    include("article2.html");
?>