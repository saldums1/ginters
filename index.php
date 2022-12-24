<?php
  session_start();
  //print_r($_SESSION);
  include("classes/connect.php");
  include("classes/login.php");


?>



<!DOCTYPE html>
<html>
<head>
  <meta charset='utf-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <title>Profile | MyBook</title>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <style>
    #blue_bar {
      height: 50px;
      background-color: #405d9b;
      color: #d9dfeb;
    }
    #search_box {
      width: 400px;
      height: 20px;
      border-raidus: 5px;
      border: none;
      padding: 4px;
      font-size: 14px;
      background-image: url(images/search.png);
      background-repeat: no-repeat;
      background-position: right;
    }
    #profile_pic{
      width: 150px;
      margin-top: -200px;
      border-radius: 50%;
      border: solid 2px white;
    }
    #menu_buttons {
      width: 100px;
      display: inline-block;
      margin: 2px;
    }
    #friends_img {
      width: 75px;
      float: left;
      margin: 8px;
    }
    #friends_bar {
      background-color: white;
      min-height: 400px;
      margin-top: 20px;
      color: #aaa;
      padding: 8px;
    }
    #friends {
      clear: both;
      font-size: 12px;
      font-weight: bold;
      color: #405d9b;

    }
    textarea {
      width: 100%;
      border: none;
      font-family: tahoma;
      font-size: 14px;
      height: 60px;

    }
    #post_button {
      float: right;
      background-color: #405d9b;
      border: none;
      color: white;
      padding: 4px;
      font-size: 14px;
      border-radius: 2px;
      width: 50px;
    }
    #post_bar {
      margin-top: 20px;
      background-color: white;
      padding: 10px;

    }
    #post {
      padding: 4px;
      font-size: 13px;
      display: flex;
      margin-bottom: 20px;
    }

  </style>
</head>
<body style="font-family: tahoma;background-color: #d0d8e4;">
<br>
<!--Top bar-->
  <div id="blue_bar">
    <div style="width:800px;margin:auto;font-size:30px;">
      MyBook &nbsp &nbsp <input type="text" id="search_box" placeholder="Search for people">
      <img src="images/selfie.jpg" style="width: 50px;float:right;">    
    </div>
  </div>

<!--Cover area-->
  <div style="width: 800px; margin:auto;min-height:400px;">

    <div style="background-color: white;text-align:center;color:#405d9b;">

      <img src="images/mountain.jpg" style="width:100%;">
      <img id="profile_pic" src="images/selfie.jpg">
      <br>
      <div style="font-size:20px;">Mary Banda</div>
      <br>
      <div id="menu_buttons">Timeline</div>
      <div id="menu_buttons">About</div>
      <div id="menu_buttons">Friends</div>
      <div id="menu_buttons">Photos</div>
      <div id="menu_buttons">Settings</div>    
    </div>

  <!--Below cover area-->
    <div style="display: flex;">

  <!--Friends area-->
      <div style=min-height:400px;flex:1;">
      <div id="friends_bar">
        Friends<br>
        <div id="friends">
          <img id="friends_img" src="images/user1.jpg">
          <br>
          1. User
        </div>
        <div id="friends">
          <img id="friends_img" src="images/user2.jpg">
          <br>
          2. User
        </div>
        <div id="friends">
          <img id="friends_img" src="images/user3.jpg">
          <br>
          3. User
        </div>
        <div id="friends">
          <img id="friends_img" src="images/user4.jpg">
          <br>
          4. User
        </div>
    </div>
    </div>

  <!--Posts area-->
      <div style="min-height:400px;flex:2.5; padding: 20px; padding-right: 0px;">

      <div style="border: solid thin #aaa; padding: 10px; background-color: white;">
      <textarea placeholder="What's on your mind?"></textarea>
      <input type="submit" id="post_button" value="Post">
      <br>
      </div>
  <!--Posts-->
      <div id="post_bar">
  <!--Post 1-->
        <div id="post">
          <div>
            <img src="images/user1.jpg" style="width:75px; margin-right: 4px;">

          </div>
          <div>
            <div style="font-weight: bold;color:#405d9b">1. User</div>
          Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero's De Finibus Bonorum et Malorum for use in a type specimen book.
          <br><br>
          <a href="">Like</a> . <a href="">Comment</a> . <span style="color: #999;">December 17 2022</span>
          </div>

        </div>
        <!--Post 2-->
        <div id="post">
          <div>
            <img src="images/user4.jpg" style="width:75px; margin-right: 4px;">

          </div>
          <div>
            <div style="font-weight: bold;color:#405d9b">4. User</div>
          Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero's De Finibus Bonorum et Malorum for use in a type specimen book.
          <br><br>
          <a href="">Like</a> . <a href="">Comment</a> . <span style="color: #999;">December 17 2022</span>
          </div>

        </div>

      </div>
    
    
    </div>
    </div>
  </div>

</body>
</html>
