<!DOCTYPE html>
<html lang="en">
<head>
  <!-- <link rel="stylesheet" href="style.css"> -->

<link rel="stylesheet" href="sign-up-style.css">
<link rel = "stylesheet" type = "text/css"  >
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="http://fonts.google.com/css?family=Open+Sans">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css2?family=Syne+Tactile&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Akronim&display=swap" rel="stylesheet">
<style>
  *,
  body,
  html {
    margin: 0;
    padding: 0;
    font: 1.03em "Open Sans", sans-serif;
  }

  body {
    background-color: rgb(238, 238, 238);
    font-size: x-small;
 
  }

  

  



</style>

  <title>User Registration</title>
</head>
<body>

  <div>
    <hr>
    <nav class="menu" >
      <div id="logo"><a href="Home.html"> <img src="img/log.png" width="150" height="90%"></a></div>
      <ul id="rmenu ">
        <li> <a class="menu-item" href="Home.html">Home</a></li>
        <li> <a href="about_us.html"><input class="about_st" type="button" value="ABOUT US"> </li></a>
        <li> <a class="menu-item" href="type_of_book.html">Type of books</a>
          <div class="sub-content">
            <div class="sub-drob">
              <ul type="none">
                <a href="for_children.html">
                  <li> for children </li>
                </a>

                <a href="for_adult.html">
                  <li>for adults</li>
                </a>

              </ul>
            </div>
          </div>
        </li>
        <li> <a class="menu-item" href="contact_us.html">contact us </a></li>
        <li> <a class="menu-item" href="register_code.html">Sign-up</a></li>
        <input class="search" type="text" placeholder="Search.." >

      </ul>
    </nav>
  </div>
  

    <div class="signup-form">
        <form class="" action="reg_phpCode.php"  method="POST">
          <h1>Sign Up</h1> 
          <input type="text" placeholder="useranme" class="txtb" name="username" value="">
          <input type="email" placeholder="Email" class="txtb" name="email" value="">
          <input type="password" placeholder="Password" class="txtb" name="password" value="">
          <input type="submit" value="Create Account" class="signup-btn">
          <!-- <a href ="Sin.php ">Already Have one ?</a> -->
        </form>
        
        <br>
  
        <center style="font-family: 'Playfair Display', serif; opacity: 0.5; color: white; font-size : small">Copyright © 2020 BookPlanet. All Rights
          Reserved</center>
      </div>
     
</body>
</html> 