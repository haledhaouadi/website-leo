<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/form.css">
</head>
<body>
    <div class="container">
        <div class="content">
           <img src="https://zupimages.net/up/23/21/7ics.jpg " alt="header-image" class="cld-responsive"  >
                <h1 class="form-title">camping de santé</h1>
                <form method="POST" action="">
                   <input type="text" name ="name" placeholder="NAME" required>
                <div class="beside">
                    <input type="tel" name ="number" placeholder="PHONE NUMBER" required>
                    <select name ="option" required>
                        <option>GENDER</option>
                        <option>MALE</option>
                        <option>FEMALE</option>
                        <option>NON-BINARY</option>
                    </select>
                </div>
                    <input type="email" name ="email" required placeholder="EMAIL ADDRESS">
                    <br>
                    <div class="button">
                    <a type="button" name ="submit"  href="index1.html">Back</a>
                    <button type="submit" name ="submit">Submit</button>
                    </div>
                </form>
            </div>
     </div>
    
</body>
</html>
<?php
$connexion=mysqli_connect('localhost','root','','leoclub');
if($connexion){
if(isset($_POST['submit'])){
$name= $_POST["name"];
$phone  =$_POST["number"];
$option  =$_POST["option"];
$email = $_POST["email"];


				$requete = "INSERT INTO camping values ('$name','$phone','$option','$email')";
                $resultat  = mysqli_query($connexion, $requete);
                if($resultat){echo  " <script> alert('successfully register ');</script>";  } } } 
?>