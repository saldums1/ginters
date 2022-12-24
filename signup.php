<?php 
  include("classes/connect.php");
  include("classes/signup.php");


  $first_name = "";
  $last_name = "";
  $gender = "";
  $email = "";

  if($_SERVER['REQUEST_METHOD'] == ('POST')){
    $signup = new Signup();
    $result = $signup->evaltuate($_POST);
    if($result != "") {
      echo "<div style='text-align:center;font-size: 12px;color:white;background-color:rgb(200,0,0);'>";
      echo "<br>The following errors occured:<br><br>";
      echo $result;
      echo "</div>";
    }
     else {
      header("Location: login.php");
      die;
    }
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
  }


?>
<!doctype html>
<html>
<head>
  <meta charset='utf-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <title>Mybook | Sign Up</title>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <style>
    #bar {
      height:100px;
      background-color:#3c5a99;
      color:#d9dfeb;
      padding: 4px;
      

    }
    #signup_button {
      background-color: #42b72a;
      width: 70px;
      text-align: center;
      padding: 4px;
      border-radius: 4px;
      float: right;

    }
    #bar2 {
      background-color: white;
      width: 800px; 
      margin: 0 auto; 
      margin-top: 50px;
      text-align: center;
      padding: 10px;
      padding-top: 70px;
      font-weight: bold;

    }
    #text {
      height: 40px;
      width: 300px;
      border-radius: 4px;
      border:solid 1px #aaa;
      padding: 4px;
      font-size: 14px;
    }
    #button {
      height: 40px;
      width: 310px;
      border-radius: 4px;
      border: none;
      background-color:#3c5a99;
      color: white;
      font-weight: bold;
    }
  </style>


</head>
<body style="font-family: tahoma;background-color: #e9ebee;">
  <div id="bar">
    <div style="font-size:40px;">MyBook</div>
    <div id="signup_button">Log In</div> 
  </div>
  <div id="bar2">
    Sign up to MyBook<br><br>
    <form method="post" action="">
      <input value="<?PHP echo $first_name ?>" name="first_name" type="text" id="text" placeholder="First Name" required><br><br>
      <input value="<?PHP echo $last_name ?>" name="last_name" type="text" id="text" placeholder="Last Name" required><br><br>
      <span style="font-weight:normal;" required>Gender:</span><br>

      <select id="text" style="width: 310px;" name="gender">
        <option><?PHP echo $gender ?></option>
        <option>Male</option>
        <option>Female</option>
        
      </select>
      <br><br>
      <input value="<?PHP echo $email ?>" name="email" type="text" id="text" placeholder="Email address" required><br><br>

      <input name="password1" type="password" id="text" placeholder="Password" required><br><br>
      <input name="password2" type="password" id="text" placeholder="Repeat password" required><br><br>

      <input type="submit" id="button" value="Sign Up"><br><br>
      

    </form>

  </div>
</body>
</html>
