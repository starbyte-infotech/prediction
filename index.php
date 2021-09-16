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

<div class="poll">
  <div class="question"></div>
  <div class="answers "></div>
</div>


<!-- <script type="text/javascript">
    function replace( hide, show ) {
  document.getElementById(hide).style.display="none";
  document.getElementById(show).style.display="block";
}
</script>
 -->


<!-- <div id = "div1" style="display:block" onclick = "replace('div1','div2')">hi</div>
<div id = "div2" style="display:none" onclick = "replace('div2','div3')">hy</div>
<div id = "div3" style="display:none" onclick = "replace('div3','div4')">hello</div>
...
 -->

            <!-- <p class="description color-secondary">Q.1/2 - Will any team lose more than 3 wickets before scoring 100 runs? </p> -->



<!--        <div class="gkhead12 color-secondary">Q.1/2 - Will any team lose more than 3 wickets before scoring 100
                runs?</div>
            <div class="col-12 m-0 6 q_list_item  bg-transparent border-white p-2 c-p">
                <div class="gkhead13">
                    Yes
                </div>
            </div>
            <div class="col-12 m-0 6 q_list_item  bg-transparent border-white p-2 c-p">
                <div class="gkhead13">
                    No
                </div>
            </div> -->

            <div class="col-12 text-center mt-3" style="margin-top: 35vh !important;">
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

<script>
    var toggleButton = document.querySelector('.toggle-menu');
    var navBar = document.querySelector('.nav-bar');
    toggleButton.addEventListener('click', function () {
        navBar.classList.toggle('toggle');
    });
</script>


<script type="text/javascript">
    let poll = {
  question:"Q.1/2 - Will any team lose more than 3 wickets before scoring 100 runs?",
  answers:[
     "YES", "NO"
  ],
  pollCount:22,
  answersWeight:[10 , 10],
  selectedAnswer:-2 
};

let pollDOM = {
  question:document.querySelector(".poll .question"),
  answers:document.querySelector(".poll .answers")
};

pollDOM.question.innerText = poll.question;
pollDOM.answers.innerHTML = poll.answers.map(function(answer,i){
  return (
    `
      <div class="answer" onclick="markAnswer('${i}')">
        ${answer}
        <span class="percentage-bar"></span>
        <span class="percentage-value"></span>
      </div>
    `
  );
}).join("");

function markAnswer(i){
  poll.selectedAnswer = +i;
  try {
    document.querySelector(".poll .answers .answer.selected").classList.remove("selected");
  } catch(msg){}
  document.querySelectorAll(".poll .answers .answer")[+i].classList.add("selected");
  showResults();
}

function showResults(){

  let answers = document.querySelectorAll(".poll .answers .answer");

  for(let i=0;i<answers.length;i++){
    let percentage = 0;
    if(i == poll.selectedAnswer){
      percentage = Math.round(
        (poll.answersWeight[i]+1) * 100 / (poll.pollCount+1)
      );      
    } else {
      percentage = Math.round(
        (poll.answersWeight[i]) * 100 / (poll.pollCount+1)
      );      
    }
    
    answers[i].querySelector(".percentage-bar").style.width = percentage + "%";
    answers[i].querySelector(".percentage-value").innerText = percentage + "%";


  }

  setInterval(function(){
   // alert("second");
    secondQue();
  },2000);

}
// -----------------------------------------------------
function secondQue(){
  let poll = {
    question:"Q.1/2 - Guess the movie?",
    answers:[
       "YES", "NO"
    ],
    pollCount:22,
    answersWeight:[7 , 15],
    selectedAnswer:-2 
  };

  let pollDOM2 = {
    question:document.querySelector(".poll .question"),
    answers:document.querySelector(".poll .answers")
  };

  pollDOM2.question.innerText = poll.question;
  pollDOM2.answers.innerHTML = poll.answers.map(function(answer,i){
    return (
      `
        <div class="answer" onclick="markAnswer2('${i}')">
          ${answer}
          <span class="percentage-bar"></span>
          <span class="percentage-value"></span>
        </div>
      `
    );
  }).join("");
}

function markAnswer2(i){
  poll.selectedAnswer = +i;
  try {
    document.querySelector(".poll .answers .answer.selected").classList.remove("selected");
  } catch(msg){}
  document.querySelectorAll(".poll .answers .answer")[+i].classList.add("selected");
  showResults2();
}

function showResults2(){

  let answers = document.querySelectorAll(".poll .answers .answer");

  for(let i=0;i<answers.length;i++){
    let percentage2 = 0;
    if(i == poll.selectedAnswer){
      percentage2 = Math.round(
        (poll.answersWeight[i]+1) * 100 / (poll.pollCount+1)
      );      
    } else {
      percentage2 = Math.round(
        (poll.answersWeight[i]) * 100 / (poll.pollCount+1)
      );      
    }
    
    answers[i].querySelector(".percentage-bar").style.width = percentage2 + "%";
    answers[i].querySelector(".percentage-value").innerText = percentage2 + "%";
    setInterval(function(){
      window.location = "./continue.php";      
    },1000);
    
  }

}
</script>

</html>