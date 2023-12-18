<?php 
 require_once './db/connection.php';


// Fetch all posts
$posts = $crud->getAllPosts();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Blog</title>
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

        h1 {
            color: #333;
        }

        .post {
            margin-bottom: 20px;
            border-bottom: 1px solid #ddd;
            padding-bottom: 10px;
        }

        .post h2 {
            color: #333;
        }

        .post p {
            color: #555;
        }

        .post .author {
            color: #777;
            margin-top: 5px;
        }

        .read-more {
            display: block;
            margin-top: 10px;
            text-decoration: none;
            color: #3498db;
        }

        .read-more:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <header>
        <h1>Your Blog</h1>
    </header>
    <div class="container">
        <?php  foreach ($posts as $post) {  ?>
               <div class="post">
            <h2><?php  echo $post['title'] ?></h2>
            <p><?php  echo $post['content'] ?></p>
            <p class="author">Author: <?php  echo $crud->getUserById($post['user_id'] ) ?></p>
            <a href="post.php?id=<?php echo $post['post_id'] ?>"  class="read-more">Read More</a>
        </div>

            <?php } ?>
 

        <!-- Pagination -->
        <!-- <div style="text-align: center;">
            <span>1</span> | <a href="#page2">2</a> | <a href="#page3">3</a>
        </div> -->
    </div>
</body>
</html>
