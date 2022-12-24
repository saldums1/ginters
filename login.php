<?php 
  session_start();
  include("classes/connect.php");
  include("classes/login.php");


  $email = "";
  $password = "";

  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $login = new Login();
    $result = $login->evaluate($_POST);
    if($result != "") {
      echo "<div style='text-align:center;font-size: 12px;color:white;background-color:rgb(200,0,0);'>";
      echo "<br>The following errors occured:<br><br>";
      echo $result;
      echo "</div>";
    } else {
      header("Location: index.php");
      die;
    }
    $password = $_POST['password'];
    $email = $_POST['email'];
  }
  


?>
<!DOCTYPE html>
<html>
<head>
  <meta charset='utf-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <title>Mybook | Log In</title>
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
    <div id="signup_button">Signup</div> 
  </div>
  <div id="bar2">
    <form method="post">
      Log in to MyBook<br><br>
    
      <input value="<?php echo $email ?>" name="email" type="text" id="text" placeholder="Email address"><br><br>
      <input value="<?php echo $password ?>" name="password"  type="password" id="text" placeholder="Password"><br><br>
      <input type="submit" id="button" value="Log In"><br><br>
    </form>

  </div>
</body>
</html>
