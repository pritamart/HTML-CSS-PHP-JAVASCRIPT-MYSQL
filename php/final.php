
<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
* {
    margin: 0;
    padding: 0;
}

body {
    background: #245;
    color: rgb(255, 255, 255);
}

form{
    margin-left: 20%;
    background: white;
    color : black;
    margin-left: 20%;
    margin-right: 20%;
    padding: 20px;
    padding-left: 30px;
    border-radius: 10px;
}
h2{
    margin-left: 45%;
    margin-bottom: 20px;
}
</style>
</head>
<body>  

<?php
// define variables and set to empty values
$nameErr  = $genderErr = $nameErr1 = "";
$name = $name1 = $gender = $comment = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }

//   if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     if (empty($_POST["name1"])) {
//       $nameErr = "Gender Name is required";
//     } else {
//       $name = test_input($_POST["name1"]);
//       // check if name only contains letters and whitespace
//       if (!preg_match("/^[a-zA-Z-' ]*$/",$name1)) {
//         $nameErr1 = "Only letters and white space allowed";
//       }
//     }




  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>STUDENT DETAILS</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
    <p><span class="error">* required field</span></p>
  Name: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>

  Guardians Name: <input type="text" name="name1" value="<?php echo $name1;?>">
  <span class="error">* <?php echo $name1Err;?></span>
  <br><br>

  Gender:
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other  
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  Address: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
  <br><br>
  Contact Number: 
  <input type="number" name="Contact"> 
  <br><br>Course<br>
  <input type="checkbox" id="course1" name="course1" value="Bike">
<label for="course1"> HTML</label><br>
<input type="checkbox" id="course2" name="course2" value="Car">
<label for="course2">C++</label><br>
<input type="checkbox" id="course3" name="course3" value="Boat">
<label for="course3">Php</label><br> 


  <input type="submit" name="submit" value="Submit">  
</form>
<center>
<?php
echo "<h1>Your Input:</h1>";
echo "Your name :- ";
echo $name;
echo "<br>";
echo "Address :- ";
echo $comment;
echo "<br>";
echo "Gender :- ";
echo $gender;
?>
</center>
</body>
</html>
