<!DOCTYPE html>
<html>
<head>
<title>THE SOLACE TOWN-Psychometric Test</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
body {font-family: "Times New Roman", Georgia, Serif;}
h1, h2, h3, h4, h5 {
  font-family: "Playfair Display";
  letter-spacing: 5px;
}
.radio{width:20px;height:20px;position:relative;top:6px}
</style>
</head>
<body>

  <?php
  if( isset($_GET['submit']) )
  {
    $val1 = $_GET['score1'];
    $val2 = $_GET['score2'];
    $val3 = $_GET['score3'];
    $val4 = $_GET['score4'];
    $val5 = $_GET['score5'];
    $val6 = $_GET['score6'];
    $val7 = $_GET['score7'];
    $val8 = $_GET['score8'];
    $val9 = $_GET['score9'];
    $val10 = $_GET['score10'];

      $result = $val1." ".$val2." ".$val3." ".$val4." ".$val5." ".$val6." ".$val7." ".$val8." ".$val9." ".$val10;
      $fp = fopen('inputpysco3.txt', 'w');
      fwrite($fp, $result);
      fclose($fp);

      if( isset($result)){
        header("Location: page4.php");
        exit();
      }
  }
  ?>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-padding w3-card" style="letter-spacing:4px;">
    <a href="/index.php" class=" w3-button w3-center" style="width:100%">The Solace Town</a>
  </div>
</div>
<div class="w3-row">
  <div class="w3-container w3-col" style="width:20%"></div>
  <div class="w3-container w3-col" style="width:60%">
    <h1><br></h1>
    <div class="w3-card-4">
      <div class="w3-container w3-black">
        <h2 class="w3-center">PSYCHOMETRIC TEST</h2>
        <h6 class="w3-center">ANGER</h6>
      </div>
      <div class="w3-container w3-center">
        <h6><b><i>Anger</i></b> is an emotion characterized by antagonism toward someone or something you feel has deliberately done you wrong. Anger can be a good thing sometimes. It can give you a way to express negative feelings, for example, or motivate you to find solutions to problems. But excessive anger can cause problems. Let’s figure out your state on anger.</h6>
        <br><br>
        <h6>The following statements are those that people use to describe themselves, to indicate how they <b><i>generally feel or react</b></i></h6>
      </div>
      <form class="w3-container" action="" method="get">

        <div>
          <h6><label>I have a fiery temper</label></h6>
          <div>
            <input class="radio" type="radio" name="score1" value="AN">
            <label>Almost never</label><br>
            <input class="radio" type="radio" name="score1" value="S">
            <label>sometimes</label><br>
            <input class="radio" type="radio" name="score1" value="O">
            <label>often</label><br>
            <input class="radio" type="radio" name="score1" value="AA">
            <label>almost always </label><br>

          </div>
        </div>

        <div>
            <h6><label>It makes me furious when I am criticized in front of others.</label></h6>
            <div>
              <input class="radio" type="radio" name="score2" value="AN">
              <label>Almost never</label><br>
              <input class="radio" type="radio" name="score2" value="S">
              <label>sometimes</label><br>
              <input class="radio" type="radio" name="score2" value="O">
              <label>often</label><br>
              <input class="radio" type="radio" name="score2" value="AA">
              <label>almost always </label><br>

            </div>
        </div>

        <div>
            <h6><label>I feel infuriated when I do a good job and get a poor evaluation/feedback </label></h6>
            <div>
              <input class="radio" type="radio" name="score3" value="AN">
              <label>Almost never</label><br>
              <input class="radio" type="radio" name="score3" value="S">
              <label>sometimes</label><br>
              <input class="radio" type="radio" name="score3" value="O">
              <label>often</label><br>
              <input class="radio" type="radio" name="score3" value="AA">
              <label>almost always </label><br>

            </div>
        </div>

        <div>
            <h6><label>I get annoyed when I am not given the recognition for doing good work </label></h6>
            <div>
              <input class="radio" type="radio" name="score4" value="AN">
              <label>Almost never</label><br>
              <input class="radio" type="radio" name="score4" value="S">
              <label>sometimes</label><br>
              <input class="radio" type="radio" name="score4" value="O">
              <label>often</label><br>
              <input class="radio" type="radio" name="score4" value="AA">
              <label>almost always </label><br>

            </div>
        </div>

        <br><br>
        <div class=" w3-container w3-center">
          <h6>The following statements are based on how people <b><i>React or behave when they are furious/angry</b></i></h6>
        </div>

        <div>
            <h6><label>I control my urge to express my angry feelings</label></h6>
            <div>
              <input class="radio" type="radio" name="score5" value="AN">
              <label>Almost never</label><br>
              <input class="radio" type="radio" name="score5" value="S">
              <label>sometimes</label><br>
              <input class="radio" type="radio" name="score5" value="O">
              <label>often</label><br>
              <input class="radio" type="radio" name="score5" value="AA">
              <label>almost always </label><br>

            </div>
        </div>

        <div>
            <h6><label>I tend to harbor grudges that I don’t tell anyone about</label></h6>
            <div>
              <input class="radio" type="radio" name="score6" value="AN">
              <label>Almost never</label><br>
              <input class="radio" type="radio" name="score6" value="S">
              <label>sometimes</label><br>
              <input class="radio" type="radio" name="score6" value="O">
              <label>often</label><br>
              <input class="radio" type="radio" name="score6" value="AA">
              <label>almost always </label><br>

            </div>
        </div>

        <div>
            <h6><label>I try to be tolerant and understanding</label></h6>
            <div>
              <input class="radio" type="radio" name="score7" value="AN">
              <label>Almost never</label><br>
              <input class="radio" type="radio" name="score7" value="S">
              <label>sometimes</label><br>
              <input class="radio" type="radio" name="score7" value="O">
              <label>often</label><br>
              <input class="radio" type="radio" name="score7" value="AA">
              <label>almost always </label><br>

            </div>
        </div>

        <div>
            <h6><label>I withdraw from people</label></h6>
            <div>
              <input class="radio" type="radio" name="score8" value="AN">
              <label>Almost never</label><br>
              <input class="radio" type="radio" name="score8" value="S">
              <label>sometimes</label><br>
              <input class="radio" type="radio" name="score8" value="O">
              <label>often</label><br>
              <input class="radio" type="radio" name="score8" value="AA">
              <label>almost always </label><br>

            </div>
        </div>

        <div>
            <h6><label>I say nasty things</label></h6>
            <div>
              <input class="radio" type="radio" name="score9" value="AN">
              <label>Almost never</label><br>
              <input class="radio" type="radio" name="score9" value="S">
              <label>sometimes</label><br>
              <input class="radio" type="radio" name="score9" value="O">
              <label>often</label><br>
              <input class="radio" type="radio" name="score9" value="AA">
              <label>almost always </label><br>

            </div>
        </div>

        <div>
            <h6><label>I can stop myself from losing my temper</label></h6>
            <div>
              <input class="radio" type="radio" name="score10" value="AN">
              <label>Almost never</label><br>
              <input class="radio" type="radio" name="score10" value="S">
              <label>sometimes</label><br>
              <input class="radio" type="radio" name="score10" value="O">
              <label>often</label><br>
              <input class="radio" type="radio" name="score10" value="AA">
              <label>almost always </label><br>

            </div>
        </div>

        <div class="w3-center w3-padding">
          <input class="w3-button w3-black w3-large w3-round-large" name="submit" type="submit" value="Next" align="center">
        </div>
      </form>
    </div>
  </div>
  <div class="w3-container w3-col" style="width:20%"></div>
</div>


<!-- Footer -->
<footer class="w3-center  w3-padding-32">
  <!-- <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-text-green">w3.css</a></p> -->
</footer>

</body>
</html>
