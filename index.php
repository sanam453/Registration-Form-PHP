<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/script.js"></script>
    <title>Registration-Form</title>
</head>
<body>



<div id="error"></div>

<div class="main">
<h2 class="text-center pb-5">Registeration Form</h2>

<form action="register.php" id="form" method="POST">
<div class="form-group">
    <span class="fa fa-user form-control-icon"></span>
    <input type="text" name="username" id="username" placeholder="Username" class="form-control">
    <p id="usercheck" style="color: red;">**Username is missing</p> 

</div>    

  <div class="form-group">
    <span class="fa fa-unlock-alt form-control-icon"></span>
    <input type="password" name="password" id="password" placeholder="Password" class="form-control">
    <p id="passcheck" style="color: red;">**Please Fill the password</p> 
  </div>  

  <div class="form-group">
    <span class="fa fa-key form-control-icon"></span>
    <input type="password" name="passwordAgain" id="passwordAgain" placeholder="Re-type Password" class="form-control">
    <p id="conpasscheck" style="color: red;">**Password didn't match</p> 
  </div>  

  <div class="form-group">
    <span class="fa fa-user-circle form-control-icon"></span>
    <input type="text" name="firstName" id="firstName" placeholder="First Name" class="form-control" >
  </div>  

  <div class="form-group">
    <span class="fa fa-user form-control-icon"></span>
    <input type="text" name="lastName" id="lastName" placeholder="Last Name" class="form-control">
  </div>  


<div class="form-group">
    <span class="fa fa-envelope form-control-icon"></span>
    <input type="text" name="email" id="email" placeholder="Email" class="form-control">
    <small id="emailvalid" class="form-text text-muted invalid-feedback">Your email must be a valid email 
      </small> 
  </div>  

  <div class="text-center"><button id="submitbtn" type="submit" name="submit" class="btn mt-3">Sign In</button>
</div>
</form>




</body>
</html>
