<!DOCTYPE html>
<html>
<head>
<title>THE SOLACE TOWN-Psychometric Test</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
body {font-family: "Times New Roman", Georgia, Serif;}
h1, h2, h3, h4, h5, h6 {
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
      $result = $val1." ".$val2." ".$val3." ".$val4." ".$val5;
      $fp = fopen('inputpysco1.txt', 'w');
      fwrite($fp, $result);
      fclose($fp);

      if( isset($result)){
        header("Location: page2.php");
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
        <h6 class="w3-center">SELF EFFICACY</h6>
      </div>

      <form class="w3-container" action="" method="get">
        <div>
          <h6><label>I will be able to achieve most of the goals that I set for myself </label></h6>
          <div>
            <input class="radio" type="radio" name="score1" value="SD">
            <label>Strongly Disagree</label><br>
            <input class="radio" type="radio" name="score1" value="D">
            <label>Disagree</label><br>
            <input class="radio" type="radio" name="score1" value="N">
            <label>Neutral</label><br>
            <input class="radio" type="radio" name="score1" value="A">
            <label>Agree</label><br>
            <input class="radio" type="radio" name="score1" value="SA">
            <label>Strongly Agree</label><br>
          </div>
        </div>

        <div>
          <h6><label>I am confident that I can perform effectively on many different tasks </label></h6>
          <div>
            <input class="radio" type="radio" name="score2" value="SD">
            <label>Strongly Disagree</label><br>
            <input class="radio" type="radio" name="score2" value="D">
            <label>Disagree</label><br>
            <input class="radio" type="radio" name="score2" value="N">
            <label>Neutral</label><br>
            <input class="radio" type="radio" name="score2" value="A">
            <label>Agree</label><br>
            <input class="radio" type="radio" name="score2" value="SA">
            <label>Strongly Agree</label><br>
          </div>
        </div>

        <div>
          <h6><label>Compared to the other people I can do most of the tasks very well.</label></h6>
          <div>
            <input class="radio" type="radio" name="score3" value="SD">
            <label>Strongly Disagree</label><br>
            <input class="radio" type="radio" name="score3" value="D">
            <label>Disagree</label><br>
            <input class="radio" type="radio" name="score3" value="N">
            <label>Neutral</label><br>
            <input class="radio" type="radio" name="score3" value="A">
            <label>Agree</label><br>
            <input class="radio" type="radio" name="score3" value="SA">
            <label>Strongly Agree</label><br>
          </div>
        </div>

        <div>
          <h6><label>What drives your decision making? (open ended)</label></h6>
          <div>
            <input class="radio" type="radio" name="score4" value="SD">
            <label>Strongly Disagree</label><br>
            <input class="radio" type="radio" name="score4" value="D">
            <label>Disagree</label><br>
            <input class="radio" type="radio" name="score4" value="N">
            <label>Neutral</label><br>
            <input class="radio" type="radio" name="score4" value="A">
            <label>Agree</label><br>
            <input class="radio" type="radio" name="score4" value="SA">
            <label>Strongly Agree</label><br>
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
