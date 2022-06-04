<?php

 //if user is logged in Articles/Report page/Donation page
  session_start();

    include("Connection.php");
    include("function.php");

    $user_data = check_login($con);

    // $fname = $_POST['fname'];
    // $report = $_POST['reporter'];
    // $address = $_POST['address'];
    // $case = $_POST['type']; 
    // $comment = $_POST['comment'];
    // $contact = $_POST['contact'];

    // if(isset($_POST['repo'])){
    //    // if(!empty($fname) && !empty($reporter) && !empty($address) && !empty($case) && !empty($comment) && !empty($contact) )
    //         // {
    //         //Read from database
    //         $query = "SELECT * from reported_cases where Address = '$address' limit 1";
    //         $result = mysqli_query($con, $query);

    //         if($result){
    //                     if($result && mysqli_num_rows($result) > 0)
    //                       {    
    //                            echo "Case already exist";
    //                         }else{

    //                             $INSERT="INSERT INTO reported_cases (Name,Reporting_as,Address,Case,Comment,Method_of_contact) values ('$fname','$report','$address','$case','$comment','$contact')";
    //                             //$result = mysqli_query($con, $INSERT);

    //                             echo "case submitted.";
    //                         }
    //                     }
    //         }

   // }
 
//    if($_SERVER['REQUEST_METHOD'] == "POST")
//     {
//         //Something was posted
//        $fname = $_POST['fname'];
//        $report = $_POST['reporter'];
//        $address = $_POST['address'];
//        $case = $_POST['type']; 
//        $comment = $_POST['comment'];
//        $contact = $_POST['contact'];
       
//         if(!empty($fname) && !empty($reporter) && !empty($address) && !empty($case) && !empty($comment) && !empty($contact) )
//         {
//          //Read from database
//          $query = "select * from reported_cases where Address = '$address' limit 1";
//          $result = mysqli_query($con, $query);

//          if($result)
//          {
//             $num=mysqli_num_rows($result);
//             if($num>0){
//                 echo "Case already exists";
//             }else{
//                 $INSERT="INSERT INTO reported_cases (Name,Reporting_as,Address,Case,Comment,Method_of_contact) values ('$fname','$report','$address','$case','$comment','$contact')";
//                 $result = mysqli_query($con, $INSERT);
//                 echo "Case Reported"
//             }
//         }
//     }
// }
if (isset($_POST['repo'])){
    if(!empty($_POST['fname']) && !empty($_POST['reporter']) && !empty($_POST['address']) && !empty($_POST['type']) && !empty($_POST['comment']) &&
    !empty($_POST['contact'])){
    $fname = $_POST['fname'];
    $report = $_POST['reporter'];
    $address = $_POST['address'];
    $case = $_POST['type'];
    $comment = $_POST['comment'];
    $contact = $_POST['contact'];

    $query = "Insert Into reported_cases (Name,Reporting_as,Address,Case,Comment,Method_of_contact) Values('$fname','$report','$address','$case','$comment','$contact')";

    $run = mysqli_query($con,$query) or die(mysqli_error());
    if($run){
        echo"Case Reported!"; 
    }else{
        echo"Case Report Unsuccessful";
    }
    }
    else{
        echo 'all fields required';
    }
    

}

    //         if($result && mysqli_num_rows($result) > 0)
    //           {    
    //                echo "Case already exist";
    //           }else{
    //             $INSERT = "INSERT INTO reported_cases (Name,Reporting_as,Address,Case,Comment,Method_of_contact) values ('$fname','$report','$address','$case','$comment','$contact')";
              
    //             $result = mysqli_query($con, $INSERT);
    //             echo "Case reported successfully";
    //         }
                //$INSERT = "INSERT INTO reported_cases (Name,Reporting_as,Address,Case,Comment,Method_of_contact) values ([$fname],[$report],[$address],[$case],[$comment],[$contact])";
                //$result = mysqli_query($con, $query);

                //Prepare statement
                // $stmt = $con->prepare($SELECT);
                // $stmt->bind_param("s", $address);
                // $stmt->execute();
                // $stmt->bind_result($address);
                // $stmt->store_result();
                // $rnum = $stmt->num_rows;

                // if($rnum == 0){
                //     $stmt->close();

                //     $stmt = $con->prepare($INSERT);
                //     $stmt->bind_param("sssssi", $fname,$report,$address,$case,$comment,$contact);
                //     $stmt->execute(); 
                //     echo "Case reported successfully";
                // }else{
                //     echo "This case already exists";
                // }
                // $stmt->close();
                // $con->close();

                // if($result){
                //     echo"successfully inserted";
                //    }else{
                //     echo mysql_error();
                //     exit;
                //     }
        // }else{
        //     echo "All fields are required";
        // }

        //Read from database
        // $query = "Select * from reported_cases where Name = '$address' limit 1";
        // $result = mysqli_query($con, $query);

        // if($result)
        // {
        //  if($result && mysqli_num_rows($result) > 0)
        //  {
        //      $user_data = mysqli_fetch_assoc($result);
             
             //if($user_data['Password'] == $password)
             //{
               //  $_SESSION['user_id'] = $user_data['user_id'];
                 //header("Location: Report-Case.html");
                // die; 
//              //}
//          }
    
//     }
//     }
// //}
//mysqli_close($con);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report Case</title>
    <link rel = "stylesheet" href = "contact.css">
</head>

<br>
<hr>
<body>
    <div class="head">
        <header>HELPLINE GBV</header>
        <span class="image">
            <img class="logo" src = "gbv.jpg" alt = "Gender">
        </span>
    </div>

    <div class="main">
    
        <div class="box">
            <div class="field">
                <nav>
                    <ul>
                        <a href = "Contact.html"><li>Home</li></a>
                        <a href = "Gender Base Violence.html"><li>About Us</li></a>
                        <a href = ""><li>Articles</li></a>
                        <a href = "Report-Case.html"><li>Report Case</li></a>
                        <a href = "Donation.html"><li>Donations</li></a>
                        <a href ="Login.html"><li>Log In</li></a>
                        <a href ="logout.html"><li>Log Out</li></a>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

    <br><br><br><br><br><br><br>

    Welcome <?php echo $user_data['Name']; ?> would you ike to report a case?

    <br><br><br>

<div class="RC">
    <form method="post">
        <h1>REPORT CASE</h1> 
        <h3>Plesase Fill In The Below Form Accordingly</h3>
        <br>
        <div>
        <input type="text" id="fname" name="fname" placeholder="Enter Your Name"><br><br>
        <select name="reporter" id="reporter">
            <option value="null" selected disabled>Reporting As: </option>
            <option value="victim">the victim</option>
            <option value="the perpetrator">the perpetrator</option>
            <option value="witness">an eye witness</option>
            <option value="N/A">Other</option>
        </select><br><br>
        <input type="address" id="address" name="address" placeholder="Enter Your Address"><br><br>
        <select name="type" id="type">
            <option value="null" selected disabled>Incident Type: </option>
            <option value="Rape">Rape </option>
            <option value="Physical Abuse">Physical Abuse </option>
            <option value="Emotional Abuse">Emotional Abuse </option>
            <option value="Other">Other </option>
        </select><br><br>
        <textarea type="text" id="comment" name="comment" placeholder="Comment" rows="7"></textarea><br><br>
        <select name="contact" id="contact">
            <option value="null" selected disabled>Method of Contact:</option>
            <option value="Cellphone"> Cellphone</option>
            <option value="Email"> Email</option>
        </select>
        </div>
        <br>
        <button class="RB" name="repo" type="submit" onclick="sumbit()" style="width: 70%;">Report </button>
    </form>
</div>
    <div class="anime" style="position: absolute; top: 260px; left: 48%; width: 150px; height: 150px;">
        <img src="WITHUS.gif" alt="WITHUS-GIF">
    </div>
    <script src="Report-Casejs.js"></script>
</body>
<br><br><br>
<footer>
    <h5>TO GET IN TOUCH WITH US: </h5>
    <a href="" target="blank">
        <img src="IGlogo.png" alt="InstagramLogo" width="50px" height="50px">
    </a>
    <a href="" target="blank">
        <img src="facebookLogo.jpg" alt="FacebookLogo" width="50px" height="50px">
    </a>
    <a href="https://chat.whatsapp.com/JLrrca81TpfDuylXdmHoM2" target="blank">
        <img src="whatsappLogo.png" alt="WhatsappLogo" width="50px" height="50px">
    </a>
    <a href="mailto: www.eliteservices@outlook.com">
        <img src="emailLogo.png" alt="Email-Logo" width="50px" height="50px">
    </a>
    <img src="SALogo.png" alt="SA-Logo" width="50px" height="50px">

    <p style="font-family: [Segoe UI], Tahoma, Geneva, Verdana, sans-serif; font-size: 15px;">
        This website was created and design by students studing BIT at the University of Johannesburg.
        If anyone is caught duplicating the above work, or if you have reason to believe that the above work was copied from existing websites,
         please contact the university and notify them.
         Copyrights Reserved. Created on the 2022-04-22
    </p>
    <div><img src="ujlogo.png" alt="UJ-Logo" height="50px"></div>
</footer>
</html>