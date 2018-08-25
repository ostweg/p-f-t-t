<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
  </head>
  <body>
    <noscript><h1 style="color:red;text-align:center">!Aktivieren Sie JavaScript!</h1></noscript>
    <h1>Registration</h1>
    <div id="wrapper">
      <form id="frm2"  name="form" onsubmit="return registerForm.vali6()"novalidate>
        <div id="username">
          <label id="l">Benutzername</label>
          <input type="text"  oninput="return registerForm.vali1()"my-min-length="4" name="un" class="text" id="test" placeholder="Enter Username">
          <div id="bn_e" name="errorf"></div>
          <small my-min-length="">Muss mindestens 4 Zeichen lang sein</small>
        </div>
        <div id="password">
          <label id="l">Password</label>
          <input type="password" oninput="return registerForm.vali2()" name="pw" id="test1" placeholder="Enter Password">
          <div id="p_e" name="errorf"></div>
        </div>
        <div id="passwordw">
          <label id="l">Password wiederholen</label>
          <input type="password" oninput="return registerForm.vali2()" name="pww" id="test2" placeholder="Enter Password again">
          <div id="pw_e" name="errorf"></div>
        </div>
        <div id="strasse">
          <label id="l">Strasse</label>
          <input type="text" name="strasse" id="test3" placeholder="Enter Street">
          <div id="s_e" name="errorf"></div>
        </div>
        <div id="ort">
          <label id="l">Ort</label>
          <input type="text" oninput="return registerForm.vali4()" name="ort" id="test4" placeholder="Enter Ort">
          <div id="o_e" name="errorf"></div>
        </div>
        <div id ="plz">
          <label id="l">PLZ</label>
          <input type="text" oninput="return registerForm.vali4()" name="plz" id="test5" placeholder="Enter Plz">
          <div id="plz_e" name="errorf"></div>
        </div>
        <div id="email">
          <label id="l">Email</label>
          <input type="text" oninput="return registerForm.vali5()" name="email" id="test6" placeholder="Enter Email">
          <div id="em_e" name="errorf"></div>
        </div>
        <input type="submit" name="reg"  value="Submit" id="btnss" class="btns"><br/>
        <div id="optional_e"></div>
        <i><a link href="index.php">Anmelden</a></i>
    </form>

  </div>
    <script src="script.js"></script>
  </body>
</html>
