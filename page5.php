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
.radio{width:18px;height:18px;position:relative;top:6px}
</style>
</head>
<body>

  <?php
  if( isset($_GET['submit']) )
  {
    $val1 = htmlentities($_GET['input1']);
    $val2 = $_GET['score2'];
    $val3 = $_GET['score3'];
    $val4 = $_GET['score4'];
    $val5 = $_GET['score5'];
    $val6 = $_GET['score6'];

      $result = "\n".$val2." ".$val3." ".$val4." ".$val5." ".$val6;
      $fp = fopen('inputpysco5.txt', 'w');
      fwrite($fp,$val1);
      fwrite($fp, $result);
      fclose($fp);

      if( isset($result)){
        shell_exec('python pysco.py');
        shell_exec('python psycotext.py');
        header("Location: result.php");
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
        <h6 class="w3-center">CAREER ASSESSMENT</h6>
      </div>

      <div class="w3-container w3-center">
        <h6>Having insight about our personality traits can also allow us to select roles suited to our personality styles to <b><i>greater occupational success and career advancement</b></i>. Depending on a person’s traits, some career roles will seem more attractive and desirable than others.</h6>
        <br><br>
        <h6>Before starting with the test we would request you to answer the below mentioned descriptive question honestly.</h6>
      </div>

      <form class="w3-container" action="" method="get">

        <div>
            <h6><label>What is the highest level of education you plan to attain</label></h6>
            <!-- <input class="w3-input w3-border" type="text" id="input1" name="input1" required> -->
            <textarea class="w3-input w3-border" id="input1" name="input1" required></textarea>
          <!-- </input> -->
        </div>

        <div>
            <h6><label>I would rather have general knowledge about many things than know a lot about one field</label></h6>
            <div>
              <input class="radio" type="radio" name="score2" value="YES">
              <label>YES</label><br>
              <input class="radio" type="radio" name="score2" value="NO">
              <label>NO</label><br>
            </div>
        </div>

        <div>
            <h6><label>For me learning and self improvement are a lifelong process</label></h6>
            <div>
              <input class="radio" type="radio" name="score3" value="YES">
              <label>YES</label><br>
              <input class="radio" type="radio" name="score3" value="NO">
              <label>NO</label><br>
            </div>
        </div>

        <div>
            <h6><label>I naturally take on leadership goals</label></h6>
            <div>
              <input class="radio" type="radio" name="score4" value="YES">
              <label>YES</label><br>
              <input class="radio" type="radio" name="score4" value="NO">
              <label>NO</label><br>
            </div>
        </div>

        <div>
            <h6><label>I possess an exceptional amount of patience</label></h6>
            <div>
              <input class="radio" type="radio" name="score5" value="YES">
              <label>YES</label><br>
              <input class="radio" type="radio" name="score5" value="NO">
              <label>NO</label><br>
            </div>
        </div>

        <div>
            <h6><label>If I have to choose, I will always pick the safe route over a more risky choice</label></h6>
            <div>
              <input class="radio" type="radio" name="score6" value="YES">
              <label>YES</label><br>
              <input class="radio" type="radio" name="score6" value="NO">
              <label>NO</label><br>
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
