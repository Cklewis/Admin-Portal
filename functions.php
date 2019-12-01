<? php

function redirect($location){


    header("Location:" . $location);
    die();

}

function confirmQuery($result) {
    
    global $connection;

    if(!$result ) {
          
          die("QUERY FAILED ." . mysqli_error($connection));
   
          
      }
    

}

function register_user($firstname,$lastname,$username, $email, $password, $adminrole){

    global $connection;
    $firstname = mysqli_real_escape_string($connection, $firstname);
    $lastname  = mysqli_real_escape_string($connection, $lastname);
    $email    = mysqli_real_escape_string($connection, $email);
    $username = mysqli_real_escape_string($connection, $username);
    $password = mysqli_real_escape_string($connection, $password);

    $password = password_hash( $password, PASSWORD_BCRYPT, array('cost' => 12));

    $adminrole   = mysqli_real_escape_string($connection, $adminrole);
            
            
    $query = "INSERT INTO users (username, user_password, user_firstname, user_lastname, user_email, user_admintype) ";
    $query .= "VALUES('{$username}','{$password}', '{$firstname}','{$lastname}', '{$email}', '{$adminrole}' )";
    $register_user_query = mysqli_query($connection, $query);

    confirmQuery($register_user_query);



}

 function login_user($username, $password)
 {

     global $connection;

     $username = trim($username);
     $password = trim($password);

     $username = mysqli_real_escape_string($connection, $username);
     $password = mysqli_real_escape_string($connection, $password);


     $query = "SELECT * FROM users WHERE username = '{$username}' ";
     $select_user_query = mysqli_query($connection, $query);
     if (!$select_user_query) {

         die("QUERY FAILED" . mysqli_error($connection));

     }


     while ($row = mysqli_fetch_array($select_user_query)) {

         $db_user_id = $row['user_id'];
         $db_username = $row['username'];
         $db_user_password = $row['user_password'];
         $db_user_firstname = $row['user_firstname'];
         $db_user_lastname = $row['user_lastname'];
         $db_user_admintype = $row['user_admintype'];


         if (password_verify($password,$db_user_password)) {

             $_SESSION['username'] = $db_username;
             $_SESSION['firstname'] = $db_user_firstname;
             $_SESSION['lastname'] = $db_user_lastname;
             $_SESSION['user_admintype'] = $db_user_admintype;



             redirect("/admin-portal/index.php");


         } else {


             return false;



         }



     }

     return true;

 }


?>