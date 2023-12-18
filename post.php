<?php
 session_start();
 require_once './db/connection.php';

include_once './partials/auth-check.php';


$post_id= $_GET['id'];
$post = $crud->getPostByPostId($post_id);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Single Post</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2, p {
            color: #333;
        }
    </style>
</head>
<body>
    <header>
        <h1>Single Post</h1>
    </header>
    <div class="container">
       
        <article>
            <h2><?php echo $post['title']; ?></h2>
            <p><?php echo $post['content']; ?></p>
        </article>
    </div>
</body>
</html>
