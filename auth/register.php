<?php
$title = 'index';
require_once '../db/connection.php';

 if(isset($_POST['register'])){
 
    $fname= $_POST['firstname'];
    $lname= $_POST['lastname'];
    $username= $_POST['username'];
    $email= $_POST['email'];
    $pass= $_POST['pass'];
    $cpass= $_POST['cpass'];


if ($pass != $cpass) {
    echo "<h1 style='margin:2rem auto; background-color: #FF6363 ;padding:.5rem; width:fit-content;border-radius:8px; text-align:center; font-size:18px;'>Password Don't match</h1>";
} 
   else{
    // Example of usage

        if ($crud->emailExists($email)) {
                    echo "<h1 style='margin:2rem auto; background-color: #FF6363 ;padding:.5rem; width:fit-content;border-radius:8px; text-align:center; font-size:18px;'>Email already exist</h1>";

        } else {
            $isSuccess = $crud->insertAttendees ($fname,$lname,$username,$email,$pass) ;
            if($isSuccess){

            header('Location: ./login.php');
        }

 
   }
 
   }
    
      
}
   


 ?>

<!DOCTYPE html>
<html>
<style>
input[type=text],input[type=password],input[type=email], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
 .btn {
            display: inline-block;
            padding: 10px 20px;
            text-decoration: none;
            color: #fff;
            background-color: #3498db;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .btn:hover {
            background-color: #2980b9;
        }
</style>
<body>

<h3>Register Page</h3>

<div>
  <form enctype="multipart/form-data"  action="<?php echo htmlentities($_SERVER['PHP_SELF']) ?>"  method="post">
     <label for="">username</label>
    <input type="text" id="username" name="username" placeholder="Your username..">


    <label for="fname">First Name</label>
    <input required type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input required type="text" id="lname" name="lastname" placeholder="Your last name..">

        <label for="email">email</label>
    <input required type="email" id="email" name="email" placeholder="Your email..">


    <label for="pass">Password</label>
    <input required type="password" id="pass" name="pass" placeholder="Your Password..">

    <label for="cpass">Confirm Password</label>
    <input required type="password" id="cpass" name="cpass" placeholder="Your confirm Password..">
  
    <input type="submit" name="register" value="submit">
  </form>
</div>
  <a href="../index.php" class="btn">Home</a>

</body>
</html>


