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
        <div class="row text-white p-4">
            <p class="description text-white">Upcoming Match: <span class="color-secondary"> (Sri Lanka vs South
                    Africa)</span> </p>
            <p class="description text-white">Play 2 sample questions & win <span class="q_entry"><img
                        src="image/coins.svg" alt=""></span> 100 </p>
            <!-- <p class="description color-secondary">Q.1/2 - Will any team lose more than 3 wickets before scoring 100 runs? </p> -->
            <div class="gkhead12 color-secondary">Q.1/2 - Will any team lose more than 3 wickets before scoring 100
                runs?</div>
           <!--  <div class="col-12 m-0 6 q_list_item  bg-transparent border-white p-2 c-p">
                <div class="gkhead13">
                    Yes
                </div>
            </div>
            <div class="col-12 m-0 6 q_list_item  bg-transparent border-white p-2 c-p">
                <div class="gkhead13">
                    No
                </div>
            </div> -->


<div class="poll-area">
    <input type="checkbox" name="poll" id="opt-1">
    <input type="checkbox" name="poll" id="opt-2">
    <input type="checkbox" name="poll" id="opt-3">
    <input type="checkbox" name="poll" id="opt-4">

<label for="opt-1" class="opt-1">
      <div class="row">
        <div class="column">
          <span class="circle"></span>
          <span class="text">YES</span>
        </div>
        <span class="percent">100%</span>
      </div>
      <div class="progress example" style='--w:30;'></div>
      <!-- <meter min="0" low="10" optimum="50" high="90" max="100"></meter> -->
    </label>
    <label for="opt-2" class="opt-2">
      <div class="row">
        <div class="column">
          <span class="circle"></span>
          <span class="text">NO</span>
        </div>
        <span class="percent">20%</span>
      </div>
      <div class="progress" style='--w:20;'></div>
    </label>




    <!-- <label for="opt-3" class="opt-3">
      <div class="row">
        <div class="column">
          <span class="circle"></span>
          <span class="text">Python</span>
        </div>
        <span class="percent">40%</span>
      </div>
      <div class="progress" style='--w:40;'></div>
    </label>
    <label for="opt-4" class="opt-4">
      <div class="row">
        <div class="column">
          <span class="circle"></span>
          <span class="text">jQuery</span>
        </div>
        <span class="percent">10%</span>
      </div>
      <div class="progress" style='--w:10;'></div>
    </label> -->

</div>

            



            <div class="col-12 text-center mt-3">
                <p class="description color-secondary">#FunFact</p>
            </div>

            <div class="col-12 text-center">
                <p class="description text-white">South African team lost its 3rd wicket for 209 runs in the 1st ODI
                    game of this series.</p>
            </div>

            <div class="predguru-points mt-2">
                <h5 class="color-secondary abba">How to win coins? </h5>
                <ol class="list">
                    <li>Join your favourite contests.</li>
                    <li>Use your game knowledge to predict
                        outcome.</li>
                    <li>Win coins.</li>
                    <li>Use coins to enter the contests.</li>
                </ol>
            </div>

            <div class="col-12 text-center mt-3">
                <p class="description color-secondary">Connect With Us </p>
            </div>
            <div class="col-12 text-center text-white mt-2" style="font-size: 22px;">
               <i class="fab fa-facebook mx-2"></i> <i class="fab fa-instagram mx-2"></i>
             
            </div>


        </div>











    </div>

</body>

<!-- <script type="text/javascript">
$(".example").width("px");
</script>
 -->
<script>
    var toggleButton = document.querySelector('.toggle-menu');
    var navBar = document.querySelector('.nav-bar');
    toggleButton.addEventListener('click', function () {
        navBar.classList.toggle('toggle');
    });
</script>



<script type="text/javascript">
    const options = document.querySelectorAll("label");
for (let i = 0; i < options.length; i++) {
  options[i].addEventListener("click", () => {
    for (let j = 0; j < options.length; j++) {
      if (options[j].classList.contains("selected")) {
        options[j].classList.remove("selected");
      }
    }

    options[i].classList.add("selected");
    for (let k = 0; k < options.length; k++) {
      options[k].classList.add("selectall");
    }

    let forVal = options[i].getAttribute("for");
    let selectInput = document.querySelector("#" + forVal);
    let getAtt = selectInput.getAttribute("type");
    if (getAtt == "checkbox") {
      selectInput.setAttribute("type", "radio");
    } else if (selectInput.checked == true) {
      options[i].classList.remove("selected");
      selectInput.setAttribute("type", "checkbox");
    }

    let array = [];
    for (let l = 0; l < options.length; l++) {
      if (options[l].classList.contains("selected")) {
        array.push(l);
      }
    }
    if (array.length == 0) {
      for (let m = 0; m < options.length; m++) {
        options[m].removeAttribute("class");
      }
    }
  });
}

</script>

</html>




/*extra css*/


/*@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');*/
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
body{
  display: flex;
  align-items: center;
  justify-content: center;
  min-height: 100vh;
  background: #6665ee;
}
::selection{
  color: #fff;
  background: #6665ee;
}
.wrapper{
  background: #fff;
  border-radius: 15px;
  padding: 25px;
  max-width: 380px;
  width: 100%;
  box-shadow: 0px 5px 10px rgba(0,0,0,0.1);
}
.wrapper header{
  font-size: 22px;
  font-weight: 600;
}
.wrapper .poll-area{
  margin: 20px 0 15px 0;
}
.poll-area label{
  display: block;
  margin-bottom: 10px;
  border-radius: 5px;
  padding: 8px 15px;
  border: 2px solid #e6e6e6;
  transition: all 0.2s ease;
}
.poll-area label:hover{
  border-color: #ddd;
}
label.selected{
  border-color: #6665ee!important;
}
label .row{
  display: flex;
  pointer-events: none;
  justify-content: space-between;
}
label .row .column{
  display: flex;
  align-items: center;
}
label .row .circle{
  height: 19px;
  width: 19px;
  display: block;
  border: 2px solid #ccc;
  border-radius: 50%;
  margin-right: 10px;
  position: relative;
}
label.selected .row .circle{
  border-color: #6665ee;
}
label .row .circle::after{
  content: "";
  height: 11px;
  width: 11px;
  background: #6665ee;
  border-radius: inherit;
  position: absolute;
  left: 2px;
  top: 2px;
  display: none;
}
.poll-area label:hover .row .circle::after{
  display: block;
  background: #e6e6e6;
}
label.selected .row .circle::after{
  display: block;
  background: #6665ee!important;
}
label .row span{
  font-size: 16px;
  font-weight: 500;
}
label .row .percent{
  display: none;
}
label .progress{
  height: 7px;
  width: 100%;
  position: relative;
  background: #f0f0f0;
  margin: 8px 0 3px 0;
  border-radius: 30px;
  display: none;
  pointer-events: none;
}
label .progress:after{
  position: absolute;
  content: "";
  height: 100%;
  background: #ccc;
  width: calc(1% * var(--w));
  border-radius: inherit;
  transition: all 0.2s ease;
}
label.selected .progress::after{
  background: #6665ee;
}
label.selectall .progress,
label.selectall .row .percent{
  display: block;
}
input[type="radio"],
input[type="checkbox"]{
  display: none;
}
