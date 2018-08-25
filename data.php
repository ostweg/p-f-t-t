<?php

session_start();
error_reporting(0);
if(!isset($_SESSION['test'])){
  header('Location: ./index.php?Log_in_to_preview_content');
  die();
}



if(isset($_POST['g'])){
$selectedG = $_POST['g'];
echo "G:Speichern erfolgreich "."<br/>";
}

if(isset($_POST['s'])){
  $stat = $_POST['s'];
foreach($stat as $s){
  $status = $s;
  echo "S:Speichern erfolgreich "."<br/>";
}
}else {
  echo "S:Speichern fehlerhaft"."<br/>";
}

function isEmpty($value){
  if(empty($value)){
    return false;
  }else {
    return true;
  }
}
/*if(isEmpty($_POST['g1']) || isEmpty($_POST['g2']) || isEmpty($_POST['g3'])){
  echo "H:Error";
}else {
  echo "H:Successful";
}*/
if(isset($_POST['group1'])&& isset($_POST['group2'])&& isset($_POST['group3'])){
  //echo "H:Speichern erfolgreich "."<br/>";
if(isEmpty($_POST['group1'])==false || isEmpty($_POST['group2'])==false|| isEmpty($_POST['group3'])==false){
    echo "H:Speichern fehlerhaft"."<br/>";

  }
  else {
    echo "H:Speichern erfolgreich"."<br/>";
    $g1 = $_POST['group1'];
    $g2 = $_POST['group2'];
    $g3 = $_POST['group3'];
  }
}

if(isset($_POST['option'])){
  $age = $_POST['option'];
  echo "A:Speichern erfolgreich "."<br/>";
}


function checkMinL($value,$minl){
  return strlen($value) >= $minl;
}
function checkMaxL($value,$minl){
  return strlen($value) <= $minl;
}
if(isset($_POST['descp'])){
  if(checkMinL($_POST['descp'],4) == true && checkMaxL($_POST['descp'],120) == true){
    $therapie = $_POST['descp'];
    echo "T:Speichern erfolgreich "."<br/>";

  }else {
    $therapie = "";
    echo "T:Speichern fehlerhaft"."<br/>";
  }
}
if(isset($_POST['submit'])){

  $array = [

      "Gender" => $selectedG,
      "Status" => $status,
      "Hobby1" => $g1,
      "Hobby2" => $g2,
      "Hobby3" => $g3,
      "Age" => $age,
      "Reason" => $therapie

  ];
  /*function strpos($valuepos){
    $lines_Array = file($filenamee);
    $search = $valuepos;

    foreach($lines_Array as $line){
      if(strpos($line, $search) !== false){
        list(,$new_str) = explode(":",$line);
      }
    }
    echo $new_str;
  }*/
  if($_SERVER["REQUEST_METHOD"] === "POST"){

    $folderpath = "D:\\xampp\\htdocs\\MProjektv3\\";
    $countfile = 0;
    if(glob($folderpath."*.json") != false){
      $countfile = count(glob($folderpath."*.json"));
    }
    echo "Files created:"."<br/>";
    for($i = 0; $i <= $countfile;$i++){
      $filenamee = 'M133_'.($i + 1).'.json';
    }
      $f = fopen($filenamee,"w+") or die();
      fwrite($f, json_encode($array));
      fclose($f);

   
  }echo $countfile;




}

if(isset($_GET['filename'])){
  $filename = $_GET['filename'];
  $direct = "./";
  if(glob($direct. $filename)!= false){
    $filec = count(glob($direct.$filename));
    $person =json_decode(file_get_contents($filename), true);
    $Gender = $person['Gender'];
    $statuss = $person['Status'];
    $hobby1 = $person['Hobby1'];
    $hobby2 = $person['Hobby2'];
    $hobby3 = $person['Hobby3'];
    $age1 = $person['Age'];
    $description = $person['Reason'];
  }







}

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <title></title>
  </head>
  <body>
    <h1>Datenerfassung</h1>
    <div id="wrapper">
      <form method="POST" action="data.php" onsubmit="return dataForm.validate()" novalidate>
        <div id="gender" onchange="return dataForm.validate1()">
          <div id="r1"><p>Male</p><br><input type="radio" name="g" id="g"  value="Male" <?php echo ($Gender=="Male")?'checked':'' ?>></div>
        <div id="r2"><p>Female</p><br><input type="radio"  name="g" id="g" value="Female" <?php echo ($Gender=="Female")?'checked':'' ?>></div>
        <div id="r_e"></div>
        </div><br><br><br><br><br>
        <div id="workstatus" onchange="return dataForm.validate2()">
          <div id="c1"><p>Student</p><br><input type="checkbox" name="s[]" id="gs" class="test" value="Student" <?php if($statuss =="Student") echo "checked='checked'";?>></div>
          <div id="c2"><p>Employee</p><br><input type="checkbox" name="s[]" id="gs" class="test" value="Employee" <?php if($statuss =="Employee") echo "checked='checked'";?>></div>
        </div><br><br><br><br><br>
          <div id="hobby">
          1.<input type="text" name="group1" id="g1" value="<?php echo $hobby1 ?>" placeholder="Hobby 1" ><br>
          <div id="h_e" name="errorf"></div>
          2.<input type="text" name="group2" id="g2" value="<?php echo $hobby2 ?>"placeholder="Hobby 2"><br>
          <div id="h_ee" name="errorf"></div>
          3.<input type="text" name="group3" id="g3" value="<?php echo $hobby3 ?>"placeholder="Hobby 3">
          <div id="h_eee" name="errorf"></div>
        </div><br>
        <div id="age">
          <label id="l">Select your Age<label><br><br>
          <select id="options" name="option" onchange="return dataForm.validate3()">
            <option  value="<18" <?php echo ($age1 =="<18")?"selected":"" ?>>< 18</option>
            <option value="<50" <?php echo ($age1 =="<50")?"selected":"" ?>>< 50</option>
            <option value="<100" <?php echo ($age1 =="<100")?"selected":"" ?>>< 100</option>
          </select>
        </div>
        <br>
        <div id="description">
          <label id="l"> Weshalb brauchen Sie diese Therapie</label><br>
          <input type="text" name="descp" id="why" value="<?php echo $description ?>"oninput="return dataForm.validate4()">
          <div id="d_e" name="errorf"></div>
        </div>
        <input type="reset" class="btns" value="Reset">
        <input type="submit" name ="submit" id="button" value="Submit" class="btns">
      </form>
    </div>
    <script src="script.js"></script>
  </body>
</html>
