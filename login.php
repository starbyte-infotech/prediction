<?php

include 'config.php';
// $conn = OpenCon();
//echo "Connected Successfully";
// CloseCon($conn);

if(isset($_POST['submit'])){

    $email = $_POST['name'];
    $psw = $_POST['psw'];

    $selUser="SELECT * FROM `tbl_register` WHERE `name` = '$email' AND `psw` = '$psw'";
    $UserRes = mysqli_query($con,$selUser);
    $row = mysqli_fetch_assoc($UserRes);
    $total_row = mysqli_num_rows($UserRes);

    if($total_row > 0){
     
        $_SESSION['email'] = $user_email; //simple login
        echo '<script>alert("You are Successfully Login");</script>';
        header('Location: question.php');               

    }else{
        echo '<script>alert("You are not Registered with Us. or Entered Wrong Password");</script>';
    }

}
?>

<!-- <?php 
// error_reporting(0);      
//     $name = $_POST['name'];  
//     $psw = $_POST['psw'];  
      
        //to prevent from mysqli injection  
        // $name = stripcslashes($name);  
        // $psw = stripcslashes($psw);  
      
        // $sql = "select * from tbl_register where name = '$name' and psw = '$psw'";  
        // $result = mysqli_query($con, $sql);  
        // $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        // $count = mysqli_num_rows($result);  

    // if (mysqli_query($con, $sql)) 
    //  {
    //     echo "<script> alert('register successfully'); </script>";
    //  } 
    //  else 
    //  {
    //     echo "<script> alert('Not registerd!'); </script>";
    //  }
    //  
          
        // if($count == 1){  
        //     echo "<h1><center> Login successful </center></h1>";  
        // }  
        // else{  
        //     echo "<h1> Login failed. Invalid username or password.</h1>";  
        // }  
       
     //echo "<script> location.href='index.php'; </script>";   
 ?>   -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
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

            <form method="POST">
                <div class="row m-0 py-3">
                    <div class="col-3">
                        <div class="input-name">Email</div>
                        <div class="input-name mt-4">Password</div>
                    </div>

                    <div class="col-9">
                        <div class="fnametop">
                            <input type="email" placeholder="Enter your email here" required=""
                            name="name" value="" id="user">
                        </div>
                        <div class="fnametop-1 mt-4">
                            <!-- <input type="text" placeholder="Enter your password here" maxlength="30" required=""
                            name="password" value=""> -->
                             <input type="password" name="psw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" placeholder="Enter your phone no here" required id="pw">
                        </div>
                        
                    </div>
                </div>
                 
                <div class="col-12 ">
                    <a href="login.php">
                        <input type="submit" name="submit" id="submit" class="continue-btn w-100" value="Continue">
                    </a>
                </div>
            </form>

            </div>

            <div class="col-12 mt-5 text-center pb-5">
                <a href="register.php">Haven't Register Yet?</a>
            </div>
            <div class="textbtm">By continuing, you agree to our <a class="textbtm1" href="#">Privacy Policy</a> &amp;
                <a class="textbtm1" href="#">Terms of use</a>
            </div>

            <div class="sign-i text-opacity">
                <p>* We promise we will never spam you</p>
            </div>

            <ul class="sign-ul">
                <li><span>Over 20 million quiz enthusiasts have played with us</span></li>
                <li><span>We are India’s favorite Quiz destination</span></li>
                <li><span>Over 100 quizzes are waiting for you</span></li>
            </ul>



        </div>
    </div>

</body>
<!-- 
<script type="text/javascript">
  function showmsg()
  {

    var user = 'txtusername';
    var pw = 'txtpassword';

    var userName = document.getElementById('username').value;
    var passWord = document.getElementById('password').value;

  if((username == userName) && (pw == passWord)) {
    swal("Good job!", "Login Success!", "success");
  }
  else{
    swal("Oops...", "Invalid credentials!", "error");
  }
}
</script>

  <script src="jquery-3.1.1.js"></script>
  <script src="js/bootstrap.min.js"></script>
 -->


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