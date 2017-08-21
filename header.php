<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
<!--  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">-->
  <title>Document</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
 <header>
    <nav>
      <div class="main-wrapper">
           <ul>
              <li><a href='index.php'>Home</a></li>
           </ul>
           <div class="nav-login">
             <?php
                if(isset($_SESSION['u_id'])){
                  echo '<form action="includs/logout.php" method="post">
                     <button type="submit" name="submit">Logout</button>

                  </form>';
                }else{
                  echo '  <form method="post" action="includs/login.php">
                       <input type="text" name="uid" placeholder="UserName/E-mail">
                       <input type="password" name="pwd" placeholder="Password">
                       <button type="submit" name="submit">Login</button>
                    </form>
                    <a href="signup.php">Sing Up</a>';
                }
             ?>


           </div>
      </div>
    </nav>
 </header>
