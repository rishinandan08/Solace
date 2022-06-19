 <!doctype html>
<html>
<head>
<title> THE SOLACE TOWN</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href="https://fonts.googleapis.com/css?family=Muli&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<style>
body {font-family: "Times New Roman", Georgia, Serif;}
h1, h2, h3, h4, h5, h6 {
  font-family: "Playfair Display";
  letter-spacing: 5px;
}

.b-skills
{
	border-top: 1px solid #f9f9f9;
	padding-top: 46px;
	text-align: center;
}

.b-skills:last-child { margin-bottom: -30px; }

.b-skills h2 { margin-bottom: 50px; font-weight: 900; text-transform: uppercase;}

.skill-item
{
	position: relative;
	max-width: 250px;
	width: 100%;
	margin-bottom: 30px;
	color: #555;
}

.chart-container
{
	position: relative;
	width: 100%;
	height: 0;
	padding-top: 100%;
	margin-bottom: 27px;
}

.skill-item .chart,
.skill-item .chart canvas
{
	position: absolute;
	top: 0;
	left: 0;
	width: 100% !important;
	height: 100% !important;
}

.skill-item .chart:before
{
	content: "";
	width: 0;
	height: 100%;
}

.skill-item .chart:before,
.skill-item .percent
{
	display: inline-block;
	vertical-align: middle;
}

.skill-item .percent
{
	position: relative;
	line-height: 1;
	font-size: 40px;
	font-weight: 900;
	z-index: 2;
}

.skill-item  .percent:after
{
	content: attr(data-after);
	font-size: 20px;
}

p{
  font-weight: 900;
}

/* The flip box container - set the width and height to whatever you want. We have added the border property to demonstrate that the flip itself goes out of the box on hover (remove perspective if you don't want the 3D effect */
.flip-box {
  background-color: transparent;
  width: 100%;
  height: 400px;
  border: 1px solid #f1f1f1;
  perspective: 1000px; /* Remove this if you don't want the 3D effect */
}

/* This container is needed to position the front and back side */
.flip-box-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.8s;
  transform-style: preserve-3d;
}

/* Do an horizontal flip when you move the mouse over the flip box container */
.flip-box:hover .flip-box-inner {
  transform: rotateY(180deg);
}

/* Position the front and back side */
.flip-box-front, .flip-box-back {
  position: absolute;
  width: 100%;
  height: 100%;
  -webkit-backface-visibility: hidden; /* Safari */
  backface-visibility: hidden;
}

/* Style the front side (fallback if image is missing) */
.flip-box-front {
  color: black;
}

/* Style the back side */
.flip-box-back {
  background-color: #000000;
  color: white;
  transform: rotateY(180deg);
}

/* Float four columns side by side */
.column {
  float: left;
  width: 50%;
  padding: 0 10px;
}

/* Remove extra left and right margins, due to padding */
.row {margin: 0 -5px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}


</style>
</head>

<body>
<?php
$name = fopen('name.txt','r');
while ($line = fgets($name)) {
  $name1 = $line;
}
fclose($name);

$age = fopen('age.txt','r');
while ($line = fgets($age)) {
  $age1 = $line;
}
fclose($age);

$gender = fopen('gender.txt','r');
while ($line = fgets($gender)) {
  $gender1 = $line;
}
fclose($gender);

$education = fopen('education.txt','r');
while ($line = fgets($education)) {
  $education1 = $line;
}
fclose($education);

$personality = fopen('outputpyscoPersonality.txt','r');
while ($line = fgets($personality)) {
  $personality1 = $line;
}
fclose($personality);

$Anger = fopen('outputpyscoAnger.txt','r');
while ($line = fgets($Anger)) {
  $Anger1 = $line;
}
fclose($Anger);

$Family = fopen('outputpyscofamily.txt','r');
while ($line = fgets($Family)) {
  $Family1 = $line;
}
fclose($Family);

$Career = fopen('outputpyscocareer.txt','r');
while ($line = fgets($Career)) {
  $Career1 = $line;
}
fclose($Career);

$emotion = fopen('output1.txt','r');
while ($line = fgets($emotion)) {
  $emotion1 = $line;
}
fclose($emotion);

if(isset($emotion1)){
  if ($emotion1 == "Surprised"){
    $emotion1result = "Meanwhile when we looked into your external appearance, your facial features expressed a feeling of surprise i.e., the shock or wonderment on answering questions that are self-doubting, uncertain, disbelief or speechlessness.";
  } else if ($emotion1 == "Sad"){
    $emotion1result = "Meanwhile when we looked into your external appearance, your facial features expressed a feeling of sadness because of being hurt and experiencing pain regularly, always worried about things or it being hard to accept your life and lack the courage to make it better.";
  } else if ($emotion1 == "Angry"){
    $emotion1result = "Meanwhile when we looked into your external appearance, your facial features expressed a feeling of anger due to anxiety, frustration or powerless, guilt, betrayal or any sort of unbearable moments that you’ve come across in life.";
  } else if ($emotion1 == "Disgusted"){
    $emotion1result = "Meanwhile when we looked into your external appearance, your facial features expressed a feeling of disgust where is makes you feel that you’re highly incapable, potential is low, being invalidated or treated unfairly or for a fact that people do not respect your feelings or possessions.";
  } else if ($emotion1 == "Fearful"){
    $emotion1result = "Meanwhile when we looked into your external appearance, your facial features expressed a feeling of fear due to embarrassment, threatened or attacked, fear of losing or being left alone or even the fact of not being confident enough in life.";
  } else if ($emotion1 == "Happy"){
    $emotion1result = "Meanwhile when we looked into your external appearance, your facial features expressed a feeling of happiness for being confident and truthful in life.";
  } else if ($emotion1 == "Neutral"){
    $emotion1result = "Meanwhile when we looked into your external appearance, your facial features expressed a neutral feeling i.e., feeling indifferent, nothing in particular, and a lack of preference one way or the other.";
  } else if ($emotion1 == ""){
    $emotion1result = "We didn't do the analysics of the face.To do again take test and Start the face analysics before taking text assesment.";
  }
}

// $textemotion = fopen('output2.txt','r');
// while ($line = fgets($textemotion)) {
//   echo($line);
// }
// // $textemotion1 = file_get_contents("$textemotion");
// fclose($textemotion);

?>
<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-padding w3-card" style="letter-spacing:4px;">
    <a href="/index.php" class="w3-bar-item w3-button">The Solace Town</a>
    <!-- Right-sided navbar links. Hide them on small screens -->
    <div class="w3-right w3-hide-small">
      <a href="#about" class="w3-bar-item w3-button">About</a>
      <a href="#part1" class="w3-bar-item w3-button">Face and Text result</a>
      <a href="#part2" class="w3-bar-item w3-button">Psychometric result</a>
      <!-- <a href="#contact" class="w3-bar-item w3-button">Contact</a> -->
    </div>
  </div>
</div>
<h1 id="about"><br></h1>
<div class="b-skills" >
  <div class="w3-container">
    <h1>YOUR SKIL SCORE REPORT</h1>
    <br>
  </div>
</div>

<!-- First Grid: Logo & About -->
<div class="w3-row">
  <div class="w3-half w3-black w3-container w3-center" style="height:550px">
    <div class="w3-padding-64">
      <h1>Your Details</h1>
    </div>
    <div class="w3-padding-64">
      <h4>Name: <i><?php echo($name1)?></h4></i><br>
      <h4>Age: <i><?php echo($age1)?></h4></i><br>
      <h4>Gender: <i><?php echo($gender1)?></h4></i><br>
      <h4>Education: <i><?php echo($education1)?></h4></i><br>
    </div>
  </div>
  <div class="w3-half w3-blue-grey w3-container w3-text-black" style="height:550px">
    <div class="w3-padding-64 w3-center">
      <h1><i>Info</i></h1>
      <!-- <img src="/w3images/avatar3.png" class="w3-margin w3-circle" alt="Person" style="width:50%"> -->
      <div class="w3-left-align w3-padding-large">
        <i><h5>This psychological assessment was taken by you with 100% consent whose main objective is to overcome most of your problems and retrieve self-satisfying solution by knowing and understanding your mental stability to bring out the best in you.</h5>
        <br><h4><b>Textual Analysis with Facial emotion detection<b></h4>
        <h5>The very first step </i><b>SOLACE TOWN </b><i>took you though was the textual Analysis with Facial emotion detection where you were asked you answer a couple of questions related to your life and your surroundings.</h5></i>
      </div>
    </div>
  </div>
</div>

<h2 id="part1"><br></h2>
<div class="b-skills" >
  <div class="w3-container">
    <h3>Face and Text Analysis</h3>
    <p>place cursor on pictures to see result</p>
    <br>
  </div>
</div>
<div class="row">
  <div class="flip-box column">
    <div class="flip-box-inner">
      <div class="flip-box-front">
        <img src="images/img2.jpeg" alt="result" style=";height:400px">
        <div class="w3-display-bottomleft w3-large w3-container w3-padding-16 w3-black">
          Text report
        </div>
      </div>
      <div class="flip-box-back">
        <div class="w3-center w3-container w3-padding-32">
          <p>Text Analysis</p>
          <h1><br></h1>
          <h4>
            <?php $textemotion = fopen('output2.txt','r');
            while ($line = fgets($textemotion)) {
              echo($line);
            }
            fclose($textemotion);
            ?>
          </h4>
        </div>
      </div>
    </div>
  </div>

  <div class="flip-box column">
    <div class="flip-box-inner">
      <div class="flip-box-front">
        <img src="images/Counselling.jpg" alt="result" style="height:400px">
        <div class="w3-display-bottomleft w3-large w3-container w3-padding-16 w3-black">
          Face Assignment Report
        </div>
      </div>
      <div class="flip-box-back">
        <br><br>
        <div class="w3-center w3-container w3-padding-32">
          <h4><?php echo($emotion1result) ?></h4>
          <h1><br></h1>
          <p><?php echo($emotion1) ?></p>
        </div>
      </div>
    </div>
  </div>
</div>

<h1><br></h1>

		<section id="s-team" class="section">

			<br><br>
      <br id="part2">
			<div class="b-skills">
				<div class="container">
					<h2>YOUR PSYCHOMETRIC RESULT</h2>

					<div class="row">
						<div class="col-xs-12 col-sm-6 col-md-3">
							<div class="skill-item center-block">
								<div class="chart-container">
									<div class="chart " data-percent=<?php echo($personality1)?> data-bar-color="#23afe3">
										<span class="percent" data-after="%">0</span>
									</div>
								</div>
								<p>Personality</p>
							</div>
						</div>

						<div class="col-xs-12 col-sm-6 col-md-3">
							<div class="skill-item center-block">
								<div class="chart-container">
									<div class="chart " data-percent=<?php echo($Anger1)?> data-bar-color="#ff4241">
										<span class="percent" data-after="%">0</span>
									</div>
								</div>
								<p>Anger</p>
							</div>
						</div>

						<div class="col-xs-12 col-sm-6 col-md-3">
							<div class="skill-item center-block">
								<div class="chart-container">
									<div class="chart " data-percent=<?php echo($Family1)?> data-bar-color="#a7d212">
										<span class="percent" data-after="%">0</span>
									</div>
								</div>
								<p>Family Relationship</p>
							</div>
						</div>

						<div class="col-xs-12 col-sm-6 col-md-3">
							<div class="skill-item center-block">
								<div class="chart-container">
									<div class="chart " data-percent=<?php echo($Career1)?> data-bar-color="#edc214">
										<span class="percent" data-after="%">0</span>
									</div>
								</div>
								<p>Career Assessment</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

    <div class="w3-container w3-padding-64">
    <div class="row">
      <div class="flip-box column">
        <div class="flip-box-inner">
          <div class="flip-box-front" style="color:#23afe3">
            <!-- <img src="images/cursor.jpg" alt="result" style="width:100px;height:100px"> -->
            <div class="w3-middle w3-large w3-container w3-padding-16">
              <h3><i>Personality</i></h3>
            </div>
            <h5>
              <?php $textemotion = fopen('Personality.txt','r');
              while ($line = fgets($textemotion)) {
                echo($line);
              }
              fclose($textemotion);
              ?>
            </h5>
          </div>
          <div class="flip-box-back">
            <div class="w3-center w3-container w3-padding-32">
              <h3><i>Personality Solution</i></h3><br>
              <!-- <h1><br></h1> -->
              <h5>
                <?php $textemotionsol = fopen('Personalitysol.txt','r');
                while ($line = fgets($textemotionsol)) {
                  echo($line);
                }
                fclose($textemotionsol);
                ?>
              </h5>
            </div>
          </div>
        </div>
      </div>

      <div class="flip-box column">
        <div class="flip-box-inner">
          <div class="flip-box-front" style="color:#ff4241">
            <!-- <img src="images/img2.jpeg" alt="result" style=";height:400px"> -->
            <div class="w3-center w3-large w3-container w3-padding-16">
              <h3><i>Anger</i></h3>
            </div>
            <h5>
              <?php $textemotion = fopen('Anger.txt','r');
              while ($line = fgets($textemotion)) {
                echo($line);
              }
              fclose($textemotion);
              ?>
            </h5>
          </div>
          <div class="flip-box-back">
            <div class="w3-center w3-container w3-padding-32">
              <h3><i>Anger Solution</i></h3><br>
              <!-- <h1><br></h1> -->
              <h5>
                <?php $textemotionsol = fopen('Angersol.txt','r');
                while ($line = fgets($textemotionsol)) {
                  echo($line);
                }
                fclose($textemotionsol);
                ?>
              </h5>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row w3-padding-32">
      <div class="flip-box column">
        <div class="flip-box-inner">
          <div class="flip-box-front" style="color:#a7d212">
            <!-- <img src="images/img2.jpeg" alt="result" style=";height:400px"> -->
            <div class="w3-center w3-large w3-container w3-padding-16">
              <h3><i>Family Relationship</i></h3>
            </div>
            <h5>
              <?php $textemotion = fopen('Family.txt','r');
              while ($line = fgets($textemotion)) {
                echo($line);
              }
              fclose($textemotion);
              ?>
            </h5>
          </div>
          <div class="flip-box-back">
            <div class="w3-center w3-container w3-padding-32">
              <h3><i>Family Relationship Solution</i></h3><br>
              <!-- <h1><br></h1> -->
              <h5>
                <?php $textemotionsol = fopen('Familysol.txt','r');
                while ($line = fgets($textemotionsol)) {
                  echo($line);
                }
                fclose($textemotionsol);
                ?>
              </h5>
            </div>
          </div>
        </div>
      </div>

      <div class="flip-box column">
        <div class="flip-box-inner">
          <div class="flip-box-front" style="color:#edc214">
            <!-- <img src="images/img2.jpeg" alt="result" style=";height:400px"> -->
            <div class="w3-center w3-large w3-container w3-padding-16">
              <h3><i>Career Assessment</i></h3>
            </div>
            <h5>
              <?php $textemotion = fopen('Career.txt','r');
              while ($line = fgets($textemotion)) {
                echo($line);
              }
              fclose($textemotion);
              ?>
            </h5>
          </div>
          <div class="flip-box-back">
            <div class="w3-center w3-container w3-padding-32">
              <i><h3>Career Assessment Solution</i></h3><br>
              <!-- <h1><br></h1> -->
              <h5>
                <?php $textemotionsol = fopen('Careersol.txt','r');
                while ($line = fgets($textemotionsol)) {
                  echo($line);
                }
                fclose($textemotionsol);
                ?>
              </h5>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div>

  </div>
 <script src="plugins/jquery-2.2.4.min.js"></script>
 <script src="plugins/jquery.appear.min.js"></script>
 <script src="plugins/jquery.easypiechart.min.js"></script>

 <script>
    'use strict';

// for live chart
var $window = $(window);
function run()
{
	var fName = arguments[0],
		aArgs = Array.prototype.slice.call(arguments, 1);
	try {
		fName.apply(window, aArgs);
	} catch(err) {
	}
};
/* chart
================================================== */
function _chart ()
{
	$('.b-skills').appear(function() {
		setTimeout(function() {
			$('.chart').easyPieChart({
				easing: 'easeOutElastic',
				delay: 3000,
				barColor: '#369670',
				trackColor: '#fff',
				scaleColor: false,
				lineWidth: 21,
				trackWidth: 21,
				size: 250,
				lineCap: 'round',
				onStep: function(from, to, percent) {
					this.el.children[0].innerHTML = Math.round(percent);
				}
			});
		}, 150);
	});
};
$(document).ready(function() {
	run(_chart);
});
</script>

</body>
</html>
