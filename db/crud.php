<?php
class crud
 {          

            // private database  object
        private  $db;
        // constructor to initialize private variable to the database connection\

        function __construct($conn){
            $this->db=$conn;
        }
      
      public function emailExists($email) {
   try{
     $sql = "SELECT * FROM user WHERE email = :email";
   $stmt= $this->db->prepare($sql);
    $stmt->bindparam(":email", $email);
    $stmt->execute();
  $result = $stmt->fetch(PDO::FETCH_ASSOC);

return $result !== false;
    
            }
			catch(PDOException  $e){
				echo $e->getMessage();
			} 
}



      //*function to insert a new record into the attendee database */
      public  function  insertAttendees($fname,$lname,$username,$email,$pass){

            try {
                // define sql statement to be excuted 
                $pass = md5($pass);
                $sql = "INSERT INTO `user` (`firstname`, `username`, `email`, `lastname`, `password`) VALUES  ( :fname, :username,:email, :lname, :pass)";
                // prepare the sql statement for exuction
                $stmt = $this->db->prepare($sql);
                // bind all placeholders to the actual values
                
                $stmt->bindparam(':fname',$fname);
                $stmt->bindparam(':lname',$lname);
                $stmt->bindparam(':username',$username);
                $stmt->bindparam(':email',$email);
                $stmt->bindparam(':pass',$pass);


                $stmt->execute();
                return true;

            }
			catch(PDOException  $e){
				echo $e->getMessage();
			} 
				
			
			
			
			
			
			
      }


      public function createPost($title,$desc,$uid){
              try {
                // define sql statement to be excuted 
                $sql = "INSERT INTO `user` (`firstname`, `username`, `email`, `lastname`, `password`) VALUES  ( :fname, :username,:email, :lname, :pass)";
                
$sql = "INSERT INTO `posts` (`user_id`, `title`, `content`) VALUES ( :uid, :title, :description)";
                // prepare the sql statement for exuction
                $stmt = $this->db->prepare($sql);
                
                $stmt->bindparam(':title',$title);
                $stmt->bindparam(':uid',$uid);
                $stmt->bindparam(':description',$desc);


                $stmt->execute();
                return true;

            }
			catch(PDOException  $e){
				echo $e->getMessage();
			}

      }
      public function updatePost($post_id, $title, $content) {
        try {
            $sql = "UPDATE posts SET title = :title, content = :content WHERE post_id = :post_id";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(":post_id", $post_id, PDO::PARAM_INT);
            $stmt->bindParam(":title", $title, PDO::PARAM_STR);
            $stmt->bindParam(":content", $content, PDO::PARAM_STR);
            $stmt->execute();
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
     public function getUserById($user_id) {
        try {
            $sql = "SELECT * FROM user WHERE User_id = :user_id";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(":user_id", $user_id, PDO::PARAM_INT);
            $stmt->execute();

            // Fetch the user as an associative array
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
            $username = $user['username'];

            return $username;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
     public function getAllPosts() {
        try {
            $sql = "SELECT * FROM posts";
            $stmt = $this->db->prepare($sql);
            $stmt->execute();

            // Fetch all rows as an associative array
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return $result;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
 public function getPostsByUserId($user_id) {
        try {
            $sql = "SELECT * FROM posts WHERE user_id = :user_id";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(":user_id", $user_id, PDO::PARAM_INT);
            $stmt->execute();

            // Fetch all rows as an associative array
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return $result;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
    public function getPostByPostId($post_id) {
        try {
            $sql = "SELECT * FROM posts WHERE post_id = :post_id";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(":post_id", $post_id, PDO::PARAM_INT);
            $stmt->execute();

            // Fetch all rows as an associative array
            $result = $stmt->fetch(PDO::FETCH_ASSOC);

            return $result;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
      // FUNCTION TO DELETE 

      public function delete($id){
        try{
          $sql ="DELETE FROM `posts` WHERE post_id = :id";
          $stmt=$this->db->prepare($sql);
          $stmt->bindparam(':id',$id);
          $stmt->execute();
          return true;
        }catch(PDOException $e){
         echo  $e->getMessage();
         return false;
            
        }
   

      }
      public function getID($id){
                try {
                    $sql = "SELECT * FROM `attendee` a inner join category s on a.Category = s.category_id WHERE Attendee_id = :id";
                    $stmt= $this->db->prepare($sql);

                    $stmt->bindparam(':id', $id);
                      


                    $stmt->execute();
                    $result = $stmt->fetch();
                    return $result;
                }catch(PDOException $e){
                  echo  $e->getMessage();
                  return false;
                    
                }
      }

       public function loginUser($email, $password) {
        $sql = "SELECT * FROM user WHERE email = :email";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":email", $email);
        $stmt->execute();

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user) {
            // Verify the password
            if (md5($password, $user['password'])) {
                // Password is correct
                session_start();
                  $_SESSION['username']= $user['username'];
                  $_SESSION['id']= $user['User_id'];
                return true;
            } else {
                // Password is incorrect
                return false;
            }
        } else {
            // User not found
            return false;
        }
    }


}

?>