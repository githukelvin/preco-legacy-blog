<?php 
 session_start();
 require_once './db/connection.php';

include_once './partials/auth-check.php';
$post_id = $_GET['id'];

$deleted= $crud->delete($post_id);

if($deleted){
    header('Location: ./dashboard.php');
}
else{
    echo "<h1 style='margin:2rem auto; background-color: #FF6363 ;padding:.5rem; width:fit-content;border-radius:8px; text-align:center; font-size:18px;'>Deleting Post Failed</h1>";
}

?>