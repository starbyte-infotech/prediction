<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="icon" href="../Quizweb/image/favicon.png" type="image">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/style.css">


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

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

        <div class="main_list container">

            <div class="row d-flex align-items-center">
                <div class="col-5 text-center">
                    <div class="image-outer">
                        <img src="image/111.png" alt="">
                    </div>
                    <h6 class="abba text-white">South Africa</h6>
                </div>
                <div class="col-2 text-center">
                    <b class="abba text-white">VS</b>
                </div>
                <div class="col-5 text-center">
                    <div class="image-outer">
                        <img src="image/SriLanka.png" alt="">
                    </div>
                    <h6 class="abba text-white">Sri Lanka</h6>
                </div>
            </div>

            <div class="col-12 m-0 row q_list_item  bg-white py-3">
                <div class="row">
                    <div class="col-4 text-left">
                        <p class="description"> Q. <small id="qcount">1</small>/<small id="questionSize">10</small></p>
                    </div>
                    <div class="col-8 text-end">
                        <p class="description"> This question is for: <small>2</small> points</p>
                    </div>
                    <div class="col-12 my-2">
                        <div class="gkhead12 text-black">Which team will win the toss in this match?</div>
                    </div>
                    <div class="col-12 m-0 6 q_list_item  bg-transparent border-purple p-2 c-p" style="margin-left: 7.5px !important;">
                        <div class="gkhead13 color-purple">
                            South Africa
                        </div>                    
                     </div>
                     <div class="col-12 m-0 6 q_list_item bg-transparent border-purple p-2 c-p" style="margin-left: 7.5px !important;">
                        <div class="gkhead13 color-purple">
                            Sri Lanka
                        </div>                    
                     </div>
                </div>
            </div>

            <div class="col-12 text-center mt-5">
                <div class="jabba"> <span class="text-white"> <i class="fas fa-circle q_lable   "></i>
                    289050</span> <span class="q_lable text-white ml-2">Users playing</span> </div>
            </div>

           
        </div>
    </div>

</body>
<script>
    var toggleButton = document.querySelector('.toggle-menu');
    var navBar = document.querySelector('.nav-bar');
    toggleButton.addEventListener('click', function () {
        navBar.classList.toggle('toggle');
    });
</script>

</html>