<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/donation.css">
</head>
<body>
    <div class="main-wrapper">
        <div class="form-wrapper">
          <form method="POST" action="">
              <div class="input-flex">
                <div>
                    <label for="firstname" class="formbold-form-label"> First name </label>
                    <input
                    type="text"
                    name="firstname"
                    id="firstname"
                    placeholder="Name"
                    class="formbold-form-input"
                    required
                    
                    />
                </div>
                <div>
                    <label for="lastname" class="formbold-form-label"> Last name </label>
                    <input
                    type="text"
                    name="lastname"
                    id="lastname"
                    placeholder="lastname"
                    class="formbold-form-input"
                    required
                    />
                </div>
              </div>
      
              <div class="formbold-input-flex">
                <div>
                    <label for="email" class="formbold-form-label"> Mail </label>
                    <input
                    type="email"
                    name="email"
                    id="email"
                    placeholder="name@gmail.com"
                    class="formbold-form-input"
                    required
                    />
                </div>
                <div>
                    <label for="phone" class="formbold-form-label"> Phone </label>
                    <input
                    type="text"
                    name="phone"
                    id="phone"
                    placeholder="22-222-222"
                    class="formbold-form-input"
                    required
                    />
                </div>
              </div>
      
              <div class="formbold-input-radio-wrapper">
                  <label for="jobtitle" class="formbold-form-label"> Donation Amount</label>
      
                  <div class="formbold-radio-flex">
                    <div class="formbold-radio-group">
                      <label class="formbold-radio-label">
                        <input class="formbold-input-radio"  required type="radio" value="50" name="donation" id="jobtitle">
                       50DT
                        <span class="formbold-radio-checkmark"></span>
                      </label>
                    </div>
      
                    <div class="formbold-radio-group">
                      <label class="formbold-radio-label">
                        <input class="formbold-input-radio" required type="radio" value="100" name="donation" id="jobtitle">
                        100DT
                        <span class="formbold-radio-checkmark"></span>
                      </label>
                    </div>
      
                    <div class="formbold-radio-group">
                      <label class="formbold-radio-label">
                        <input class="formbold-input-radio"  required type="radio"  value="200" name="donation" id="jobtitle">
                        200DT
                        <span class="formbold-radio-checkmark"></span>
                      </label>
                    </div>
      
                    <div class="formbold-radio-group">
                      <label class="formbold-radio-label">
                        <input class="formbold-input-radio" required type="radio" value="500" name="donation" id="jobtitle">
                        500DT
                        <span class="formbold-radio-checkmark"></span>
                      </label>
                    </div>
                  </div>
              </div>
      
              <div>
                  <label for="message" class="formbold-form-label"> Message </label>
                  <textarea
                      rows="6"
                      name="message"
                      id="message"
                      placeholder="Type your message"
                      class="formbold-form-input"
                  ></textarea>
              </div>
      
              
                <div class="button">
                     <a class="formbold-btn" href="./index1.html">Go Back</a>
                     <button name="submit"  class="formbold-btn"type="submit">
                    Submit
                    </button>
                </div>
          </form>
        </div>
      </div>
      
</body>
</html>

 <?php
$connexion=mysqli_connect('localhost','root','','leoclub');
if(isset($_POST['submit'])){
$name= $_POST["firstname"];
$last = $_POST["lastname"];
$email = $_POST["email"];
$phone  =$_POST["phone"];
$donation  =$_POST["donation"];
$message=$_POST["message"];

				$requete = "INSERT INTO donate values ('$name','$last','$email','$phone','$donation','$message')";
				mysqli_query($connexion, $requete);
        echo  " <script> alert('Thank you !   It means a lot to us ');</script>";}   
// try{
  //  $db = new PDO('mysql:host=localhost;charset=utf8;dbname=leoclub', 'root','');
  //  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  // // if(isset($_POST['submit'])){ 
  // $name= $_POST["firstname"];
  // $last = $_POST["lastname"];
  // $email = $_POST["email"];
  // $phone  =$_POST["phone"];
  // $donation  =$_POST["donation"];
  // $message=$_POST["message"];
   
  // $requete = $db->prepare('INSERT INTO donate VALUES(:name ,:last, :email, :phone, :donation ,:message)');
  // $requete->bindvalue(':name',$name);
  // $requete->bindvalue(':last',$last);
  // $requete->bindvalue(':email',$email);
  // $requete->bindvalue(':phone',$phone); 
  // $requete->bindvalue(':donation',$donation);
  // $requete->bindvalue(':message',$message);
  
 
  
  //  $result  = $requete->execute(array('name'=> $_POST["firstname"]
  //   ,'last'=>$_POST["lastname"],
  //   'email'=>$_POST["email"], 
  //    'phone'=>$_POST["phone"] ,
  //     'donation'=>$_POST["donation"],
  //      'message'=>$_POST["message"]));

  //  $result = $requete->execute();
  // if (!$result){
  //   echo "erreur d'insertion";
  // }else{
  //   echo  " <script> alert('Thank you !   It means a lot to us ');</script>";
  // }
  // }

// }
// catch(Exception $e){
//   die ('Erreur : '. $e->getMessage());
// }
?>



