<?php
require_once '../db/connection.php';

   if (isset($_POST['login'])) {
        //extract values in form in array
     
        $email = $_POST['username'];
        $password= $_POST['pass'];
        
    
        // call function to insert and track if succes or not
    
        $isSuccess= $crud->loginUser($email,$password) ;
        if ($isSuccess) {
            session_start();
      
        header('Location: ../dashboard.php');
        // include './includes/Suc_message.php';
        } else {
            echo "<h1 style='margin:2rem auto; background-color: #FF6363 ;padding:.5rem; width:fit-content;border-radius:8px; text-align:center; font-size:18px;'>Operation Encountered An Error</h1>";
            
        }
    }

?>

<!DOCTYPE html>
<html>
<style>
input[type=text], select {
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

<h3>Login Page</h3>

<div>
  <form enctype="multipart/form-data"  action="<?php echo htmlentities($_SERVER['PHP_SELF']) ?>"  method="post">
     <label for="">Email</label>
    <input type="text" id="username" name="username" placeholder="Your email..">


    <label for="pass">Password</label>
    <input type="text" id="pass" name="pass" placeholder="Your Password..">

  
    <input type="submit" name="login" value="Login">
  </form>
  <a href="../index.php" class="btn">Home</a>
</div>

</body>
</html>


