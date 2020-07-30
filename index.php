<?php
require_once('connect.php');
session_start();
 ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Database project</title>
    <link rel="stylesheet" type="text/css" href="stylesBackup1.css">

  </head>
  <div class="header">
    <div class="logoWrapper">
      <img class="logo" src="BNN.png" border="0" />
      <div class="topNav">
        <a href="userSignIn.php">Log in</a>
        <a href="userRegister.php">Sign up</a>
        <a href="index.php">Home</a>
        <a href="welcome.php">Go back</a>
      </div>
    </div>
    <div class="motto">
      <h1>We provide professional laundry service</h1>
    </div>
  </div>
  <body>
    <div class="row">
    <div class="content">
<!-- if(isset($_SESSION['userStatus']) && (($_SESSION['userStatus']=="STAFF") || ($_SESSION['userStatus']=="ADMIN"))){ -->
    <?php
      if(isset($_SESSION['memberUserId']) ){
    ?>
        <div class="boxWrapper">

          <div class="box1">
            <div class="profileWrapper">
              <img class="profileImg" src="person.png" border="0" />
            </div>
            <div class="profileText">
              <?php
              echo "Hello"."&nbsp".$_SESSION['userFirstName']."&nbsp".$_SESSION['userLastName']."<br>"."<br>"."Status:".$_SESSION['memberType']."<br><br>"."Bonus points:".$_SESSION['bonusPoint'];
              ?>
              <br>
              <br>
              <a href="logout.php">Logout</a>
            </div>

          </div>
          <div class="box2">

              <div class="rightSecondRow">
                <a href="trackService.php">
                  <div class="regisItemWrapper">
                    <h1>Track Service Process</h1>
                  </div>
                </a>

              </div>
              <div class="rightSecondRow">
                <a href="benefit.php">
                  <div class="viewHistoryWrapper">
                    <h1>View benefit of bonus point</h1>
                  </div>
                </a>

              </div>

          </div>


      </div>
    <?php }
      else {
        ?>
        <div class="boxWrapper">

          <div class="box1">
            <div class="profileWrapper">
              <img class="profileImg" src="person.png" border="0" />
            </div>
            <div class="profileText">
              <?php
              echo "Hello"."&nbsp"."Guest"."<br>"."<br>"."Please Signup or login<br>"."to receive the bonus";
              ?>
              <br>
              <br>

            </div>

          </div>
          <div class="box2">

              <div class="rightSecondRow">
                <a href="trackService.php">
                  <div class="regisItemWrapper">
                    <h1>Track Service Process</h1>
                  </div>
                </a>

              </div>

          </div>


      </div>
  <?php  } ?>

    </div>
  </div>

  <footer>
    <div class="footerContent">
      <div class="logoWrapper">
        <img class="logo" src="BNN.png" border="0" />
      </div>
      <div class="leftFooter">
        <h1 id="followUs">Follow us . . </h1>
        <div class="iconWrapper">
          <a href="https://www.facebook.com/">
            <img class="socialIcon" src="facebook.png" border="0" />
          </a>
          <a href="https://www.instagram.com/">
            <img class="socialIcon" src="ig.png" border="0" />
          </a>
          <a href="https://twitter.com/">
            <img class="socialIcon" src="twitter.png" border="0" />
          </a>
        </div>
      </div>
      <div class="rightFooter">
        <div class="memberCredit">
          <h1>Created by</h1>
        </div>
        <div class="nameList">
          <ul id="name">
            <li>Chanthana Bunchongpru</li>
            <li>Chalita Martangka</li>
            <li>Arnold Kumpeera</li>
          </ul>

        </div>
      </div>
    </div>
  </footer>
  </body>

</html>
