<!DOCTYPE html>
<html>
<head>
<title>THE SOLACE TOWN-Psychometric Test</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
body {font-family: "Times New Roman", Georgia, Serif;}
h1, h2, h4, h5 {
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
    $inp1 = htmlentities($_GET['input1']);
    $inp2 = htmlentities($_GET['input2']);
    $val1 = $_GET['score1'];
    $val2 = $_GET['score2'];
    // $val3 = $_GET['score3'];
    $val4 = $_GET['score4'];
    $val5 = $_GET['score5'];
    $val6 = $_GET['score6'];
    $val7 = $_GET['score7'];
    $val8 = $_GET['score8'];
    $val9 = $_GET['score9'];
    // $val10 = $_GET['score10'];
    $val11 = $_GET['score11'];
    $val12 = $_GET['score12'];
    $val13 = $_GET['score13'];
    $val14 = $_GET['score14'];
    $val15 = $_GET['score15'];

      $result1 = $inp1." ".$inp2;
      $result = "\n".$val1." ".$val2." ".$val4." ".$val5." ".$val6." ".$val7." ".$val8." ".$val9." ".$val11." ".$val12." ".$val13." ".$val14." ".$val15;
      $fp = fopen('inputpysco2.txt', 'w');
      fwrite($fp, $result1);
      fwrite($fp, $result);
      fclose($fp);

      if( isset($result)){
        header("Location: page3.php");
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
        <h5 class="w3-center">PERSONALITY </h5>
      </div>

      <div class="w3-container w3-center">
        <h6><b><i>Personality</i></b> is the unique, relatively enduring internal and external aspects of a person’s character that influence behavior in different situations.We assume that personality is relatively stable and predictable.</h6>
        <h6>Before starting with the test we would request you to answer the below mentioned descriptive questions honestly.</h6>
      </div>

      <form class="w3-container" action="" method="get">

        <div>
          <h6><label> Which type of social situation is most comfortable to you? </label></h6>
          <textarea class="w3-input w3-border" id="input1" name="input1" required></textarea>
        </div>

        <div>
          <h6><label> How do you perceive the world around you? </label></h6>
          <textarea class="w3-input w3-border" id="input2" name="input2" required></textarea>
        </div>

        <h6 class="w3-center">The questions asked further are based on <b><i>Extroversion</b></i> and <b><i>Neuroticism</b></i>.</h6>
        <h3 class="w3-center"><b>I see myself as someone who</b></h3>

        <div>
          <h6><label> Is curious about many different things </label></h6>
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
          <h6><label>Generates a lot of enthusiasm </label></h6>
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
          <h6><label>Is sometimes shy and inhibited </label></h6>
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

        <div>
            <h6><label>Remains calm in tense situation</label></h6>
            <div>
              <input class="radio" type="radio" name="score5" value="SD">
              <label>Strongly Disagree</label><br>
              <input class="radio" type="radio" name="score5" value="D">
              <label>Disagree</label><br>
              <input class="radio" type="radio" name="score5" value="N">
              <label>Neutral</label><br>
              <input class="radio" type="radio" name="score5" value="A">
              <label>Agree</label><br>
              <input class="radio" type="radio" name="score5" value="SA">
              <label>Strongly Agree</label><br>
            </div>
        </div>

        <div>
            <h6><label> Likes to cooperate with others  </label></h6>
            <div>
              <input class="radio" type="radio" name="score6" value="SD">
              <label>Strongly Disagree</label><br>
              <input class="radio" type="radio" name="score6" value="D">
              <label>Disagree</label><br>
              <input class="radio" type="radio" name="score6" value="N">
              <label>Neutral</label><br>
              <input class="radio" type="radio" name="score6" value="A">
              <label>Agree</label><br>
              <input class="radio" type="radio" name="score6" value="SA">
              <label>Strongly Agree</label><br>
            </div>
        </div>

        <div>
            <h6><label>Is easily distracted  </label></h6>
            <div>
              <input class="radio" type="radio" name="score7" value="SD">
              <label>Strongly Disagree</label><br>
              <input class="radio" type="radio" name="score7" value="D">
              <label>Disagree</label><br>
              <input class="radio" type="radio" name="score7" value="N">
              <label>Neutral</label><br>
              <input class="radio" type="radio" name="score7" value="A">
              <label>Agree</label><br>
              <input class="radio" type="radio" name="score7" value="SA">
              <label>Strongly Agree</label><br>
            </div>
        </div>

        <div>
            <h6><label> I like to have a lot of people around me </label></h6>
            <div>
              <input class="radio" type="radio" name="score8" value="SD">
              <label>Strongly Disagree</label><br>
              <input class="radio" type="radio" name="score8" value="D">
              <label>Disagree</label><br>
              <input class="radio" type="radio" name="score8" value="N">
              <label>Neutral</label><br>
              <input class="radio" type="radio" name="score8" value="A">
              <label>Agree</label><br>
              <input class="radio" type="radio" name="score8" value="SA">
              <label>Strongly Agree</label><br>
            </div>
        </div>

        <div>
            <h6><label>I don’t consider myself especially light hearted </label></h6>
            <div>
              <input class="radio" type="radio" name="score9" value="SD">
              <label>Strongly Disagree</label><br>
              <input class="radio" type="radio" name="score9" value="D">
              <label>Disagree</label><br>
              <input class="radio" type="radio" name="score9" value="N">
              <label>Neutral</label><br>
              <input class="radio" type="radio" name="score9" value="A">
              <label>Agree</label><br>
              <input class="radio" type="radio" name="score9" value="SA">
              <label>Strongly Agree</label><br>
            </div>
        </div>

        <div>
            <h6><label> I often feel as if I am bursting  with energy </label></h6>
            <div>
              <input class="radio" type="radio" name="score11" value="SD">
              <label>Strongly Disagree</label><br>
              <input class="radio" type="radio" name="score11" value="D">
              <label>Disagree</label><br>
              <input class="radio" type="radio" name="score11" value="N">
              <label>Neutral</label><br>
              <input class="radio" type="radio" name="score11" value="A">
              <label>Agree</label><br>
              <input class="radio" type="radio" name="score11" value="SA">
              <label>Strongly Agree</label><br>
            </div>
        </div>

        <div>
            <h6><label> My life is fast paced </label></h6>
            <div>
              <input class="radio" type="radio" name="score12" value="SD">
              <label>Strongly Disagree</label><br>
              <input class="radio" type="radio" name="score12" value="D">
              <label>Disagree</label><br>
              <input class="radio" type="radio" name="score12" value="N">
              <label>Neutral</label><br>
              <input class="radio" type="radio" name="score12" value="A">
              <label>Agree</label><br>
              <input class="radio" type="radio" name="score12" value="SA">
              <label>Strongly Agree</label><br>
            </div>
        </div>

        <div>
            <h6><label> I am a productive person who always gets the job done</label></h6>
            <div>
              <input class="radio" type="radio" name="score13" value="SD">
              <label>Strongly Disagree</label><br>
              <input class="radio" type="radio" name="score13" value="D">
              <label>Disagree</label><br>
              <input class="radio" type="radio" name="score13" value="N">
              <label>Neutral</label><br>
              <input class="radio" type="radio" name="score13" value="A">
              <label>Agree</label><br>
              <input class="radio" type="radio" name="score13" value="SA">
              <label>Strongly Agree</label><br>
            </div>
        </div>

        <div>
            <h6><label> Tends to be quite  </label></h6>
            <div>
              <input class="radio" type="radio" name="score14" value="SD">
              <label>Strongly Disagree</label><br>
              <input class="radio" type="radio" name="score14" value="D">
              <label>Disagree</label><br>
              <input class="radio" type="radio" name="score14" value="N">
              <label>Neutral</label><br>
              <input class="radio" type="radio" name="score14" value="A">
              <label>Agree</label><br>
              <input class="radio" type="radio" name="score14" value="SA">
              <label>Strongly Agree</label><br>
            </div>
        </div>

        <div>
            <h6><label>Is ingenious and a deep thinker  </label></h6>
            <div>
              <input class="radio" type="radio" name="score15" value="SD">
              <label>Strongly Disagree</label><br>
              <input class="radio" type="radio" name="score15" value="D">
              <label>Disagree</label><br>
              <input class="radio" type="radio" name="score15" value="N">
              <label>Neutral</label><br>
              <input class="radio" type="radio" name="score15" value="A">
              <label>Agree</label><br>
              <input class="radio" type="radio" name="score15" value="SA">
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

<?php
    // $faceemo = "C:\xampp\htdocs\solace\faceemo.txt";
    // $output1 = "\output1.txt";
    // $inputtext = "\inputtext.txt";
    // $output2 = "\output2.txt";
    //
    // $inputpysco1 = "inputpysco1.txt";
    // $outputpysco = "outputpysco.txt";
    //
    // if(file_exists($faceemo)){
    //   echo file_get_contents($faceemo);
    // }
    // if(file_exists($output1)){
    //   echo file_get_contents($output1);
    // }
    //
    // if(file_exists($inputtext)){
    //   echo file_get_contents($inputtext);
    // }
    // if(file_exists($output2)){
    //   echo file_get_contents($output2);
    // }
    //
    // if(file_exists($inputpysco1)){
    //   echo file_get_contents($inputpysco1);
    // }
    // if(file_exists($outputpysco)){
    //   echo file_get_contents($outputpysco);
    // }
?>
