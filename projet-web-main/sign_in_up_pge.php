<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/fontawesome.min.css" integrity="sha512-xX2rYBFJSj86W54Fyv1de80DWBq7zYLn2z0I9bIhQG+rxIF6XVJUpdGnsNHWRa6AvP89vtFupEPDP8eZAtu9qA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/sign-in.css" />
    <title>Login/Signup page</title>
  </head>
  <body>
    <h2>Sign in/ Sign up</h2>
    <div class="container" id="container">
      <div class="form-container sign-up-container">
        <form action="" method="POST">
          <h1>Create Account</h1>
          <div class="social-container">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"> <i class="fab fa-google-plus-g"></i> </a>
            <a href="#"><i class="fab fa-linkedin-in"></i></a>
          </div>
          <span>or use your email for registration</span>
          <input type="text" placeholder="Name" name="name" required></input>
          <input type="email" placeholder="Email" name="email" required></input>
          <input type="password" placeholder="Password" name="password" required></input>
          <button name="submit">Sign Up</button>
        </form>
      </div>
      <div class="form-container sign-in-container">
        <form action="" method ="POST">
          <h1>Sign in</h1>
          <div class="social-container">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"> <i class="fab fa-google-plus-g"></i> </a>
            <a href="#"><i class="fab fa-linkedin-in"></i></a>
          </div>
          <span>or use your account</span>
          <input type="email" placeholder="Email"  name="email1"required/>
          <input type="password" placeholder="Password" name="password1" required/>
          <a href="#">Forgot your password?</a>
          <button name="send">Sign In</button>
        </form>
      </div>
      <div class="overlay-container">
        <div class="overlay">
          <div class="overlay-panel overlay-left">
            <h1>Welcome Back!</h1>
            <p>
              To keep connected with us please login with your personal info
            </p>
            <button class="ghost" id="signIn" >Sign In</button>
          </div>
          <div class="overlay-panel overlay-right">
            <h1>Hello,Friend!</h1>
            <p>Enter your personal details and start journey with us</p>
            <button class="ghost" id="signUp" >Sign Up</button>
          </div>
        </div>
      </div>
    
    </div>
    </div>
   

    <script src="./js/sing_script.js"></script>
  </body>
</html>
<?php
session_start();
$conn=mysqli_connect('localhost','root','','leoclub'); 
if ($conn){
 
  if (isset($_POST["submit"])){
    $name =$_POST["name"];
    $email =$_POST["email"];
    $password =$_POST["password"];
   
    $duplicate =mysqli_query($conn,"SELECT * FROM sign WHERE  name = '$name' OR email ='$email' ");
    if(mysqli_num_rows($duplicate) > 0 ){
      echo "<script>
      alert(' Username or Email Already Exists');</script>";
    }
     else {
      $req1 = "INSERT INTO sign  values ('$name','$email','$password')";

      $query = mysqli_query($conn,$req1);
      if ($query){
      echo "<script>alert('Registration Successful');</script>";}}}}
  //login
  if (isset($_POST["send"])){
   
    $email1 =$_POST["email1"];
    $password1 =$_POST["password1"];
    $req = "SELECT * FROM sign WHERE email = '$email1' AND password = '$password1' ";
    $result = mysqli_query($conn ,$req );
   

    if(mysqli_num_rows($result) >0){
    
      header('location:index1.html');
      echo "<script>alert('jwk bh ');</script>";
    }
     else {
     
      echo "<script>alert('Wrong Password');</script>";
     ;
    }

  }


?> 
