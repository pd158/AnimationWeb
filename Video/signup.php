<html>

<head>
  <!--- Navbar -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Nuno - Responsive Bootstrap Theme</title>
  <link rel="stylesheet" href="bootstrap-4.1.3-dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="css/fixed.css">
</head>
<body>

  <!--- Video background -->

  <nav class= "navbar navbar-dark fixed-top">
  	<a class= "navbar-brand mx-auto" href"#"> <img src="nuno.png" alt=""> </a>
  </nav>

  <div class="video-background">
  	<div class="video-wrap">
  		<div class="video">
  			<video id= bgvid autoplay loop muted playsinline>
  				<source src="stars.mp4" type="Video/mp4">
  				</video>
  			</div>
  		</div>
  </div>

  <div class="caption text-center">
  		<h1>Planetory</h1>
  		<h3>Fill out sign up form below</h3>

  </div>


  <!--- Registeration form -->

  <form action="action_page.php" style="border:1px solid #ccc">
    <div class="container">
      <div class="col-lg-12">



      </div>
      <h1>Sign Up</h1>
      <p>Please fill in this form to create an account.</p>
      <hr>

      <div class="">
        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Enter Email" name="email" required>
      </div>

      <div class="">
        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Enter Email" name="email" required>
      </div>




      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>

      <label for="psw-repeat"><b>Repeat Password</b></label>
      <input type="password" placeholder="Repeat Password" name="psw-repeat" required>

      <label>
        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
      </label>

      <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

      <div class="clearfix">
        <button type="button" class="cancelbtn">Cancel</button>
        <button type="submit" class="signupbtn">Sign Up</button>
      </div>
    </div>
    <div>
  </form>





</body>

</html>
