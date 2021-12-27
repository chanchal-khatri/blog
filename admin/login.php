<?php

  require_once('../includes/config.php');
  if($user->is_logged_in())
  {
      header('location:index.php');
  }

?>


<html>
   <head>
      <title>Admin Login</title>
      <link rel="stylesheet" href="assets/style.css">
   </head>

   <body>

<?php
      
if(isset($_POST['submit']))
{
    $username=trim($_POST['username']);
    $password=trim($_POST['password']);
    if($user->login($username,$password))
    {
        header('location: index.php');
        exit;
    }
    else
    {
        $message= '<P class="invalid">Invalid username or password</p>';
    }
}
if(isset($message))
{
    echo $message;
}
?>

<form action="" method="POST" class="form">
    <label >Username</label>
    <input type="text" name="username" value="" required />
    <br>
    <label for="">Password</label>
    <input type="password" name="password" required />
    <br>
    <label for=""></label>
    <input type="submit" name="submit" value="SignIn" />
</form> 
</body>


</html>




