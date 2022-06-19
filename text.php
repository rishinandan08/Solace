<!DOCTYPE html>
<html>
<head>
<title>THE SOLACE TOWN-Textual Assesment</title>
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
  if( isset($_GET['submit']) )
  {
      //be sure to validate and clean your variables
      $val1 = htmlentities($_GET['input1']);
      $val2 = htmlentities($_GET['input2']);
      $val3 = htmlentities($_GET['input3']);
      $val4 = htmlentities($_GET['input4']);
      $val5 = htmlentities($_GET['input5']);

      $result = $val1." ".$val2." ".$val3." ".$val4." ".$val5;
      $fp = fopen('inputtext.txt', 'w');
      fwrite($fp, $result);
      fclose($fp);

      if( isset($result)){
        shell_exec('text.py');
        header("Location: page2.php");
        exit();
      }
  }

  if(isset($_GET['submit1']))
  {
    shell_exec('python emotions.py --mode display');
  }
  ?>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-padding w3-card" style="letter-spacing:4px;">
    <a href="/index.php" class=" w3-button w3-center" style="width:100%">The Solace Town</a>
  </div>
</div>

<div class="w3-container">
  <h1><br></h1>
  <div class="w3-center w3-padding">
  <form action="" method="get">
    <p>Click the <b>'Start'</b> button to Start your face analysics test :)</p>
    <input class="w3-black w3-button w3-large w3-round-large w3-hover-black" name="submit1" type="submit" value="Start" align="center"></input>
  </form>
  </div>
  <div class="w3-card-4">
    <div class="w3-container w3-black">
      <h2 class="w3-center">Textual Assesment</h2>
    </div>

    <form action="" method="get" class="w3-container w3-center">
      <h6><label>Do you like yourself and why?</label></h6>
      <input class="w3-input w3-border" type="text" id="input1" name="input1" required></input>

      <h6><label>How do you handle anxiety issues?</label></h6>
      <input class="w3-input w3-border" type="text" id="input2" name="input2" required></input>

      <h6><label>How do you show your concern for someone who is struggling?</label></h6>
      <input class="w3-input w3-border" type="text" id="input3" name="input3" required></input>

      <h6><label>How have you managed important things in your life?</label></h6>
      <input class="w3-input w3-border" type="text" id="input4" name="input4" required></input>

      <h6><label>How do you compare your past self with present self?</label></h6>
      <input class="w3-input w3-border" type="text" id="input5" name="input5" required></input>

      <div class="w3-center w3-padding">
        <input class="w3-black w3-button w3-large w3-round-large w3-hover-black" name="submit" type="submit" value="Next" align="center"></input>
      </div>

    </form>

  </div>
</div>
<?php
// shell_exec('emotions.py --mode display');
?>

<!-- Footer -->
<footer class="w3-center  w3-padding-32">
  <!-- <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-text-green">w3.css</a></p> -->
</footer>

</body>

</html>
