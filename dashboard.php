 <?php
 session_start();
 require_once './db/connection.php';

include_once './partials/auth-check.php';


$user_id= $_SESSION['id'];

$posts = $crud->getPostsByUserId($user_id);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
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
            max-width: 1440px;
            margin: 20px auto;
            padding: 20px;
            display: grid;
            grid-template-columns: 1fr 3fr; 
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .post {
            margin-bottom: 20px;
            border-bottom: 1px solid #ddd;
            padding-bottom: 10px;
        }

        h2 {
            color: #333;
        }

        p {
            color: #555;
        }

        .actions {
            margin-top: 10px;
        }

        .delete, .update {
            padding: 5px 10px;
            margin-right: 10px;
            text-decoration: none;
            color: #fff;
            cursor: pointer;
            border-radius: 5px;
        }

        .delete {
            background-color: #e74c3c;
        }

        .update {
            background-color: #3498db;
        }
          .sidebar-link {
            text-decoration: none;
            color: #fff;
            display: block;
            margin-bottom: 10px;
            padding: 1em;
            border-radius: 5px;
        }
        .sidebar{
                      background-color: #333;
            color: #fff;
            padding: 20px;
            width: 200px;
            text-decoration: none;
        }
        ul{
            list-style: none;
        }
        .sidebar-link:hover {
            background-color: #555;
        }
    </style>
</head>
<body>
    <header>
        <h1>Dashboard</h1>
    </header>
    <div class="container">
        <div class="sidebar">
            <ul>
                <li><a class="sidebar-link " href="./createPost.php">Create Post</a></li>
            </ul>
        </div>
        <div class="content">
               <?php
foreach ($posts as $post) {
    
    ?>
      <div class="post">
            <h2><?php echo $post['title'] ?></h2>
            <p><?php echo substr($post['content'],20) ?>... <a href="post.php?id=<?php echo $post['post_id'] ?>" > more</a></p>
            <div class="actions">
                <a href="delete.php?id=<?php echo $post['post_id'] ?>" class="delete">Delete</a>
                <a href="update.php?post_id=<?php echo $post['post_id'] ?>" class="update">Update</a>
            </div>
        </div>

<?php } ?>
       
        </div>

        <!-- Add more posts as needed -->
    </div>
</body>
</html>