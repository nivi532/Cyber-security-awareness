<!DOCTYPE html>
<html>
  <?php
    $email=$_SESSION['email'];
    echo $email;
  ?>
<head>
<link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet" />
<link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet" />
<link href="../logo.png" rel="shortcut icon" type="image/jpg">
<link href="pwd.css" rel="stylesheet" />
<script src="pwd.js" defer></script>
<title>Password Generator</title>
</head>
<body>
<div class="v5_116">
 
<div class="container">

  <h3 class="password-display" id="passwordDisplay" name="password">Password</h3>
  <br>
  <br>
  <form class="form" id="passwordGeneratorForm" action="savepwd.php" method="post">
      <label for="characterAmountNumber">Number of Characters</label>
      <div class="character-amount-container">
          <input type="range" name="" value="10" id="characterAmountRange" min="8" max="50">
          <input class="number-input" type="number" name="" value="10" id="characterAmountNumber" min="8" max="50">
      </div>
      <label for="includeUppercase">Include Uppercase</label>
      <input type="checkbox" name="" id="includeUppercase">
      <label for="includeNumbers">Include Numbers</label>
      <input type="checkbox" name="" id="includeNumbers">
      <label for="includeSymbols">Include Symbols</label>
      <input type="checkbox" name="" id="includeSymbols">
      <button type="submit" id="generatePassword">Generate Password</button>
</form>
<br>
        
</div>
</div>
<div class="hamburger-menu">
            <input id="menu__toggle" type="checkbox" />
            <label class="menu__btn" for="menu__toggle">
              <span></span>
            </label>
        
            <ul class="menu__box">
                <li class="menu_head">Creating Awareness</li>
                <li><a class="menu__item" href="#">Home</a></li>
                <li><a class="menu__item" href="../about/index.html">About</a></li>
                <li class="menu_head">Features</li>
                <li><a class="menu__item" href="../pwd/pwd.html">Password Generator</a></li>
                <li><a class="menu__item" href="../websitecheck/index.html">Website Validator</a></li>
                <li><a class="menu__item" href="../forum/forum.html">Support Forum</a></li>
            </ul>
          </div>
<?php
    $link = new mysqli('localhost','root','','cyber_security');
    if($link->connect_error)
    {
        die("Error");
    }
    if(!isset($_SESSION['email']))
    {
        header("location:../login/index.html");
    }
?>
</body>
</html>
