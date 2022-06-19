<!DOCTYPE html>
<html>
<head>
<title>THE SOLACE TOWN</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
body {font-family: "Times New Roman", Georgia, Serif;}
h1, h2, h3, h4, h5, h6 {
  font-family: "Playfair Display";
  letter-spacing: 5px;
}
</style>
</head>
<body>

<?php
if(isset($_GET['submit1'])){
  $val1 = htmlentities($_GET['input1']);
  $val2 = htmlentities($_GET['input2']);
  $val3 = htmlentities($_GET['input3']);
  $val4 = htmlentities($_GET['input4']);

  $f1 = fopen('name.txt','w');
  fwrite($f1,$val1);
  fclose($f1);
  $f2 = fopen('age.txt','w');
  fwrite($f2,$val2);
  fclose($f2);
  $f3 = fopen('gender.txt','w');
  fwrite($f3,$val3);
  fclose($f3);
  $f4 = fopen('education.txt','w');
  fwrite($f4,$val4);
  fclose($f4);

  header("Location:\index.php\#about");
  // shell_exec('python emotions.py --mode display');
}
if(isset($_GET['submit'])){
    header("Location: text.php");
    exit();
}
?>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-padding w3-card" style="letter-spacing:4px;">
    <a href="\index.php\#home " class="w3-bar-item w3-button">The Solace Town</a>
    <!-- Right-sided navbar links. Hide them on small screens -->
    <div class="w3-right w3-hide-small">
      <a href="#about" class="w3-bar-item w3-button">About</a>
      <a href="#module" class="w3-bar-item w3-button">Modules</a>
      <!-- <a href="#contact" class="w3-bar-item w3-button">Contact</a> -->
    </div>
  </div>
</div>

<!-- Header -->
<header class="w3-container w3-content w3-wide" style="max-width:1600px;min-width:500px" id="home">
  <div class="w3-container w3-col" style="width:10%"></div>
  <div class="w3-padding-large w3-left">
    <pre>
      <h1><br></h1>
    <h1 class="w3-jumbo">The Solace Town</h1>
    <p class="w3-left">                  - The Counselling System</p>
    <img class="w3-image w3-left" src="images/img1.jpeg" alt="Solace Town" width="600" height="550">
    <pre>
      <h1><br><br></h1>
  </div>


  <div class="w3-right w3-row">
    <div class="w3-container w3-col" style="width:450px">
      <h1><br><br></h1>
    <div class="w3-card-4">
      <div class="w3-container w3-black">
        <!-- <h2 class="w3-center">PSYCHOMETRIC TEST</h2> -->
        <h5 class="w3-center"><i>ENTER YOUR DETAILS</i></h5>


      <div class="w3-container w3-center">
        <!-- <h6><b><i>Personality</i></b> is the unique, relatively enduring internal and external aspects of a person’s character that influence behavior in different situations.We assume that personality is relatively stable and predictable.</h6>
        <h6>Before starting with the test we would request you to answer the below mentioned descriptive questions honestly.</h6> -->
      </div>

      <form class="w3-container" action="" method="get">

        <div class="w3-padding">
          <h6><label>Name</label></h6>
          <input class="w3-input w3-border" id="input1" name="input1" required></input>
        </div>

        <div class="w3-padding">
          <h6><label>Age</label></h6>
          <input class="w3-input w3-border" id="input2" name="input2" required></input>
        </div>

        <div class="w3-padding">
          <h6><label>Gender</label></h6>
          <input class="w3-input w3-border" id="input3" name="input3" required></input>
        </div>

        <div class="w3-padding">
          <h6><label>Education/Qualification</label></h6>
          <input class="w3-input w3-border" id="input4" name="input4" required></input>
          <br>
        </div>

      </div>
      <div class="w3-center w3-padding">
        <input class="w3-button  w3-large w3-round-large" name="submit1" type="submit" value="Submit" align="center">
      </div>
      </form>

    </div>
  </div>
  <div class="w3-container w3-col" style="width:30%"></div>
  </div>
</header>


<!-- Page content -->
<div class="w3-content" style="max-width:1100px">

  <!-- About Section -->
  <div class="w3-row w3-padding-64" id="about">
    <div class="w3-col m6 w3-padding-large w3-hide-small">
     <img src="images/solace.jpg" class="w3-round w3-image w3-opacity-min" alt="Solace" width="600" height="750">
    </div>

    <div class="w3-col m6 w3-padding-large">
      <h1 class="w3-center">About</h1><br>
      <!-- <h5 class="w3-center"></h5> -->
      <p class="w3-large">Web peer counseling is a new method of helping people work through life issues much easily without a second thought.
        Hence we came up with this project that provides comfort or consolation in a time of distress or sadness to every citizen out there fighting for at most peace.
        The MOTIVE'S are:-<br>
❖ A desire to gain greater self-awareness<br>
❖ A desire to talk about difficult topics to people other<br>
than friends or family.<br>
❖ Overcome the feeling of loneliness<br>
❖ Cease negative thinking</p>
      <p class="w3-large w3-text-grey w3-hide-medium">The COVID-19 pandemic, has drifted people into facing mental illness like stress, depression, anxiety, chronic health
issues etc. . that led to inappropriate sense of action. To overcome all these problems and retrieve the best solution, this online psychotherapy system is being developed to
understand their mental health and improve themselves with at most assistance using technological trends which is completely generic.</p>
    </div>
  </div>

  <hr>

  <!-- Modules Section -->
  <div class="w3-row w3-padding-64" id="module">
    <div class="w3-col l6 w3-padding-large m6">
      <h1 class="w3-center">Our Modules</h1><br>
      <h4>Face Emotion Recognition</h4>
      <!-- <p class="w3-text-grey"></p><br> -->
      <h4>Textual Assesment</h4>
      <!-- <p class="w3-text-grey"></p><br> -->
      <h4>Psychometric Evaluation</h4>
      <!-- <p class="w3-text-grey"></p><br> -->
      <h4>Skill Score Report</h4>
      <!-- <p class="w3-text-grey"></p><br> -->
      <!-- <div style="text-align:center">
        <br><br>
        <a href="text.php" class="w3-button w3-black w3-large w3-round-large w3-center">Take up</a>
      </div> -->
      <form action="" method="get">
      <div class="w3-center w3-padding">
        <input class="w3-button w3-black w3-large w3-round-large" name="submit" type="submit" value="Take up" align="center">
      </div>
    </form>
    </div>

    <div class="w3-col l4 w3-padding-large m5">
      <img src="images/test.png" class="w3-round w3-image " alt="Menu" style="width:100%">
    </div>
  </div>

</div>

<!-- Footer -->
<footer class="w3-center  w3-padding-32">
  <!-- <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-text-green">w3.css</a></p> -->
</footer>

</body>
</html>
