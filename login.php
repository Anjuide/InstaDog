<?php 

require('config.php');


$appli       = new Connexion();

session_start();

// initializing variables


$email    = "";

$errors = array(); 

if (isset($_POST['reg_user'])) {

  // receive all input values from the form

   
  $email =  ($_POST['email']);

  $password_1 =  ($_POST['password_1']);

  $password_2 =  ($_POST['password_2']);


  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array


  if (empty($email)) { array_push($errors, "Email is required"); }

  if (empty($password_1)) { array_push($errors, "Password is required"); }

  if ($password_1 != $password_2) {array_push($errors, "The two passwords do not match");}

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email

  $user = $appli->checkUserIsExist($email);

  if ($user) { // if user exists
     
      array_push($errors, "email already exists");
      
      
      var_dump($user);


  }
  // Finally, register user if there are no errors in the form
  
  if (count($errors) == 0) {

  	$pwd = password_hash($password_1, PASSWORD_DEFAULT); //encrypt the password before saving in the database
    $appli->insertUser($email, $pwd);

    $id = $appli->getLastId();

    $appli->insertLastConnectionDateToUser($id);

    $_SESSION['username'] = $email;

    $_SESSION['userId'] = $id;

    $_SESSION['success'] = "You are now logged in";

    echo 'You are now logged in';

    echo "</br>" . "</br>";

    echo $id;
    
//echo "<script> window.location.href =\"inscription.php\"</script>";

  } else {

    echo 'there are  errors';

   // echo "<script> window.location.href =\"inscription.php\"</script>";

  }






}


/*


$user = $appli->checkUserIsExist("saad.barakat@gmail.com");


echo "</br>" . "</br>";



var_dump($user);



/*

$paswrd =  "sam1";

$good_hash_pass = password_hash($paswrd, PASSWORD_DEFAULT);

echo $good_hash_pass;


echo "</br>" . "</br>";


if (password_verify($paswrd, $good_hash_pass)) {

    echo "Password Is Valid"; }

    else {

    echo "PassWord Is Invalid";  
    }



*/


?>
