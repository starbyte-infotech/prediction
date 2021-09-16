

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


        <div class="main_list container">
            <div class="col-12 m-0 row q_list_item  bg-white p-3">

                <div class="row d-flex align-items-center">
                    <div class="col-5 text-center">
                        <div class="image-outer">
                            <img src="image/111.png" alt="">
                        </div>
                        <h6 class="abba">South Africa</h6>
                    </div>
                    <div class="col-2 text-center">
                        <b class="abba">VS</b>
                    </div>
                    <div class="col-5 text-center">
                        <div class="image-outer">
                            <img src="image/SriLanka.png" alt="">
                        </div>
                        <h6 class="abba">Sri Lanka</h6>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 mt-3 text-center">
                        <p class="description">Your predictions are done & your</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12  text-center">
                        <p class="description"> 100 <span class="q_entry"> <img src="image/coins.svg" alt=""></span> are
                            now ready.</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 mt-3 text-center">
                        <p class="description">Play more predictions to continue earning more coins</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 text-center mt-3 mb-1">
                        <div class="btn btn_primery">
                            <a class="w-100" href="index2.php"><i class="fas fa-play" ></i> continue</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="predguru-points mt-2">
                <h5 class="color-secondary abba">Submit predictions & win coins! </h5>
                <ol class="list text-white">
                    <li>Play prediction quizzes based on upcoming sports, social media activities & movies</li>
                    <li>Predict the outcome</li>
                    <li>Win coins on getting the predictions right</li>
                </ol>
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