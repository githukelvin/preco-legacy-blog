 <?php
 session_start();
 require_once './db/connection.php';

include_once './partials/auth-check.php';


if(isset($_POST['create'])){
    $title= $_POST['postTitle'];
    $content= $_POST['postContent'];
    $author= $_SESSION['id'];
    $isSuccess= $crud->createPost($title,$content,$author);
    if($isSuccess){
        header('Location: ./dashboard.php');
    }
    else{
        echo "<h1 style='margin:2rem auto; background-color: #FF6363 ;padding:.5rem; width:fit-content;border-radius:8px; text-align:center; font-size:18px;'>Creating Post Failed</h1>";
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Blog</title>
    <style>
        /* (Previous styling remains unchanged) */

        form {
            margin-top: 20px;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input, textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            box-sizing: border-box;
        }

        button {
            background-color: #3498db;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>
    <header>
        <h1>Create Post</h1>
    </header>
    <div class="container">
    
        <!-- Form for creating a new post -->
  <form enctype="multipart/form-data"  action="<?php echo htmlentities($_SERVER['PHP_SELF']) ?>"  method="post">
            <label for="post-title">Post Title:</label>
            <input type="text" id="post-title" name="postTitle" required>

            <label for="post-content">Post Content:</label>
            <textarea id="post-content" name="postContent" rows="4" required></textarea>

            <button type="submit" name="create">Create Post</button>
            
        </form>
    </div>
</body>
</html>
