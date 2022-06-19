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

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-padding w3-card" style="letter-spacing:4px;">
    <a href="/index.php" class=" w3-button w3-center" style="width:100%">The Solace Town</a>
  </div>
</div>

<!-- <div class="w3-container">
  <h2>Slideshow Caption</h2>
  <p>Add a caption text for each image slide with the w3-display-* classes (topleft, topmiddle, topright, bottomleft, bottommiddle, bottomright or middle).</p>
</div> -->
<h1><br></h1>
<div class="w3-content w3-display-container">

<div class="w3-display-container mySlides">
  <img src="images/img1.jpg" style="width:100%">
  <div class="w3-display-middle w3-large w3-container w3-padding-16">
    <?php
    echo("From face analysics")."<br>";
    $output1 = fopen('output1.txt','r');
    while ($line = fgets($output1)) {
      // echo"<br>";
     echo($line)."<br>";
    }
    // $textoutput1 = file_get_contents("output1.txt");
    // echo($textoutput1);
    fclose($output1);
    ?>
  </div>
</div>

<div class="w3-display-container mySlides">
  <img src="images/img1.jpg" style="width:100%">
  <div class="w3-display-bottomright w3-large w3-container w3-padding-16 w3-black">
    Northern Lights
  </div>
</div>

<div class="w3-display-container mySlides">
  <img src="images/img1.jpg" style="width:100%">
  <div class="w3-display-topleft w3-large w3-container w3-padding-16 w3-black">
    Beautiful Mountains
  </div>
</div>

<div class="w3-display-container mySlides">
  <img src="images/img1.jpg" style="width:100%">
  <div class="w3-display-topright w3-large w3-container w3-padding-16 w3-black">
    The Rain Forest
  </div>
</div>

<div class="w3-display-container mySlides">
  <img src="images/img1.jpg" style="width:100%">
  <div class="w3-display-middle w3-large w3-container w3-padding-16 w3-black">
    Mountains!
  </div>
</div>

<button class="w3-button w3-display-left w3-black" onclick="plusDivs(-1)">&#10094;</button>
<button class="w3-button w3-display-right w3-black" onclick="plusDivs(1)">&#10095;</button>

</div>

<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  x[slideIndex-1].style.display = "block";
}
</script>

</body>
</html>


</body>
</html>


<?php
// $output1 = fopen('output1.txt','r');
// while ($line = fgets($output1)) {
//   echo"<br>";
//  echo($line)."<br>";
// }
// $textoutput1 = file_get_contents("output1.txt");
// echo($textoutput1);
// fclose($output1);
//
// $output2 = fopen('output2.txt','r');
// while ($line = fgets($output2)) {
//  echo($line)."<br>";
// }
// $textoutput2 = file_get_contents("output2.txt");
// echo($textoutput2);
// fclose($output2);

// $outputpysco = fopen('outputpysco.txt','r');
// while ($line = fgets($outputpysco)) {
//  echo($line)."<br>";
// }
// $textoutputpysco = file_get_contents("outputpysco.txt");
// echo($textoutputpysco);
// fclose($outputpysco);

// $psycotextoutput = fopen('psycotextoutput.txt','r');
// while ($line = fgets($psycotextoutput)) {
 // echo($line)."<br>";
// }
// $textpsycotextoutput = file_get_contents("psycotextoutput.txt");
// echo($textpsycotextoutput);
// echo($test);
// fclose($psycotextoutput);



?>
