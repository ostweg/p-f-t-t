
<?php
session_start();

//$name = $_POST['usn'];
//$password = $_POST["ps"];
if(isset($_SESSION['test']) || isset($_COOKIE['testing'])){
  if($_SESSION['test'] == true || $_COOKIE['testing'] == true){
    header("Location: ./data.php");
  }
}
if($_POST['usn'] !== "M133" || $_POST["ps"] !== "M133Sec"){

  }else {
    $_COOKIE['testing'] = true;
    $_SESSION['test'] = true;
    $_SESSION['name'] = $_POST['usn'];
    $_SESSION['password'] =$_POST['ps'] ;
    if($_POST['check'] == 'ch'){
      setcookie("testing","test",time()+(86400 * 24),"/"); // "/"=Cookie is available in enitre Web.
      // $cookien = $_POST['usn'];
    }
    header("Location: ./data.php?signin=success");
}



?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <noscript><h1 style="color:red;text-align:center">!Aktivieren Sie JavaScript!</h1></noscript>
    <h1>Login</h1>
    <div id="wrapper">
      <form id="frm1" method="POST" action="index.php" onsubmit="return loginForm.checkdata()"   name="form" novalidate>
      <div id="usern">
        <label id="l">Username</label>
        <input type="text" name="usn" id='tes' placeholder="Enter Username">
        <div id="testos"></div>
        </div>
        <div id="passwd">
        <label id="l">Password</label>
        <input type="password" name="ps" id='tes1' placeholder="Enter Password">
        <div id='testo'></div>
        </div>
        <input type="submit" name="reg" value="Submit" class="btns"><br>
        Anmeldedaten speichern <input type="checkbox" name="check" class="bec" value="ch"><br>
        <i><a link href="register.php">Registrieren</a></i>
      </form>
      <script src="script.js"></script>
    </div>
    <?php
      if(isset($_SESSION['test'])){
        echo "";
      }else {
        echo "Sie müssen angemeldet sein";
      }
    ?>
  </body>
</html>
