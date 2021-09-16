<?php

include 'config.php';
// $conn = OpenCon();
//echo "Connected Successfully";
// CloseCon($conn);

if(isset($_POST['submit']))
{    
    $email = $_POST['name'];
    $phno= $_POST['phno'];
    $psw= $_POST['psw'];

    $chk_user = "SELECT * FROM `tbl_register` WHERE `name` = '$email'";
    $chk_res = mysqli_query($con,$chk_user);
    $row_count = mysqli_num_rows($chk_res); 
    if($row_count > 0){

        echo "<script>alert('Entered email id already registered. Try with Another');</script>";

    }else{
        $sql = "insert into tbl_register(name,phno,psw) values('$email','$phno','$psw')";

        if (mysqli_query($con, $sql)) 
        {
            echo "<script> alert('register successfully'); </script>";
        } 
        else 
        {
            echo "<script> alert('Not registerd!'); </script>";
        }
    }    
     
    mysqli_close($con);
    echo "<script> location.href='login.php'; </script>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="icon" href="../Quizweb/image/favicon.png" type="image">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">

    <script src="js/bootstrap.min.js"></script>
    <script src="js/popper.min.js"></script>
</head>

<body>
    <div class="mobile_body mx-auto bg-primery">

        <nav class="navbar  main_container navbar-dark">
            <div class="container-fluid mt-2 d-block">
                <a class="navbar-brand fw-bold" href="index.html"><i style="font-size: 20px;"
                    class="fas fa-arrow-left"></i></a>
                </div>
            </nav>

            <div class="main_list container mt-5">

            <form method="post">
                <div class="row m-0 py-3">
                    <div class="col-3">
                        <div class="input-name">
                            Email
                        </div>
                        <div class="input-name mt-4">
                            Password
                        </div>
                        <div class="input-number mt-4">
                            + 91
                        </div>
                        
                    </div>

                    <div class="col-9">
                        <div class="fnametop">
                            <input type="email" placeholder="Enter your name here" maxlength="30" required=""
                            name="name" value="">
                        </div>
                        <div class="fnametop-1 mt-4">
                            <!-- <input type="text" placeholder="Enter your password here" maxlength="30" required=""
                            name="password" value=""> -->
                             <input type="password" name="psw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" placeholder="Enter your password here" required>

                        </div>
                        <div class="fnametop-1 mt-4">
                            <input type="text" placeholder="Enter your phone no here" maxlength="10" required=""
                            name="phno" value="">
                        </div>
                    </div>
                </div>
                 
                <div class="col-12 ">
                    <a href="login.php">
                        <input type="submit" name="submit" class="continue-btn w-100" value="Continue">
                    </a>
                </div>
            </form>
                

            
            <div class="textbtm">By continuing, you agree to our <br/>
                <a class="textbtm1" href="#">Privacy Policy</a> &amp;
                <a class="textbtm1" href="#">Terms of use</a>
            </div>

            <div class="sign-i text-opacity">
                <p>* We promise we will never spam you</p>
            </div>

            <ul class="sign-ul">
                <li><span>Over 20 million quiz enthusiasts have played
                with us</span></li>
                <li><span>We are India’s favorite Quiz destination</span></li>
                <li><span>Over 100 quizzes are waiting for you</span></li>

            </ul>


        </div>
    </div>

</body>
<script>
    var navItems = document.querySelectorAll(".bottom-nav-item");

    navItems.forEach(function (e, i) {
        e.addEventListener("click", function (e) {
            navItems.forEach(function (e2, i2) {
                e2.classList.remove("active");
            });
            this.classList.add("active");
        });
    });
</script>

</html>


    var myVar;

    function optionClick()
    {
    myVar = setTimeout(function(){ alert("Hello") }, 3000);    
    }
    // <script type="text/javascript">
//     $(document).ready(function () {
//       setTimeout(function () {
//         alert('Reloading Page');
//         location.reload(true);
//       }, 5000);
//     });
//   </script>
