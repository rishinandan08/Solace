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
      $fp = fopen('inputpysco4.txt', 'w');
      fwrite($fp,$val1);
      fwrite($fp, $result);
      fclose($fp);

      if( isset($result)){
        header("Location: page5.php");
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
        <h6 class="w3-center">FAMILY RELATIONSHIP</h6>
      </div>
      <div class="w3-container w3-center">
        <h6><b><i>Family</b></i> environment also plays a vital role in all types of domains like child development, value development. The influences of family environment on personality traits when examined shows that the effects of family and culture can substantially influence one's personality, behaviours, beliefs and values, which correlates positively to the life experiences.</h6>
        <br><br>
        <h6>Before starting with the test we would request you to answer the below mentioned descriptive question honestly.</h6>
      </div>
      <form class="w3-container" action="" method="get">
        <h4></h4>
        <div>
            <h6><label>Can you describe your relationship with your family</label></h6>
            <input class="w3-input w3-border" type="text" id="input1" name="input1" required></input>
        </div>

        <div>
            <h6><label> Independent decision making is strongly encouraged in our family.</label></h6>
            <div>
              <input class="radio" type="radio" name="score2" value="YES">
              <label>YES</label><br>
              <input class="radio" type="radio" name="score2" value="NO">
              <label>NO</label><br>
            </div>
        </div>

        <div>
            <h6><label>Members of my family are very critical of each other</label></h6>
            <div>
              <input class="radio" type="radio" name="score3" value="YES">
              <label>YES</label><br>
              <input class="radio" type="radio" name="score3" value="NO">
              <label>NO</label><br>
            </div>
        </div>

        <div>
            <h6><label>The decision to take on a particular job opportunity is taken by the family members in consultation with other family members</label></h6>
            <div>
              <input class="radio" type="radio" name="score4" value="YES">
              <label>YES</label><br>
              <input class="radio" type="radio" name="score4" value="NO">
              <label>NO</label><br>
            </div>
        </div>

        <div>
            <h6><label>There is no sense of closeness in my family</label></h6>
            <div>
              <input class="radio" type="radio" name="score5" value="YES">
              <label>YES</label><br>
              <input class="radio" type="radio" name="score5" value="NO">
              <label>NO</label><br>
            </div>
        </div>

        <div>
            <h6><label>We talk about our personal problems to each other.</label></h6>
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
