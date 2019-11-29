<?php
    
   session_start();
   $username="";
   $email="";
   $errors=array();

   $db=mysqli_connect('localhost','root','', 'thg') or die("couldnot connect to database");

if(isset($_POST['reg_user']))
{  $username=mysqli_real_escape_string($db, $_POST['username']);
   $email=mysqli_real_escape_string($db, $_POST['email']);
   $password1=mysqli_real_escape_string($db, $_POST['password1']);
   $password2=mysqli_real_escape_string($db, $_POST['password2']);
  $dob=$_POST['dob'];
   $gender=$_POST['gender'];
   $height=$_POST['height'];
   $weight=$_POST['weight'];
   $add=$_POST['address'];
   if(empty($username)) {array_push($errors, "username is required");}
   if(empty($email)) {array_push($errors, "email is required");}
   if(empty($password1)) {array_push($errors, "password is required");}
   
   if($password1 != $password2) 
   {
     
    array_push($errors, "passwords do not match");
   }
    else
    {
    $user_check_query="select * from user where name='$username' or email='$email' LIMIT 1";

    $results=mysqli_query($db, $user_check_query);
    $user=mysqli_fetch_assoc($results);
    

if($user)
{
    if($user['name'] === $username)
     {array_push($errors, "username already exists");
    }
    if($user['email'] === $email)
     {array_push($errors, "email already exists");
    }
}

if(count($errors)==0)
  {
  //  $password=md5($password1);
  //  print $password;
    $query="insert into user (name, email, password, dob, gender, height, weight , address) values('$username', '$email','$password1', '$dob' , '$gender','$height','$weight','$add')";


    mysqli_query($db,$query);
    $_SESSION['username']=$username;
    $_SESSION['success']="you are now logged in";
    header('location: login.php');
    }

  }
}

if(isset($_POST['login']))
{
    $username=mysqli_real_escape_string($db, $_POST['username']);
    $password=mysqli_real_escape_string($db, $_POST['password']);
    
    if(empty($username)) {array_push($errors, "username is required");}
    if(empty($password)) {array_push($errors, "password is required");}
    
if(count($errors)==0)
  {
   // $pass=md5($password);
   // echo '$password';
    //echo ' $pass';
    $user_check="SELECT name, password from user where '$username'=name and password='$password';";
    $results=mysqli_query($db, $user_check);
    $w=1;
    while($row=mysqli_fetch_array($results,MYSQLI_ASSOC))
    {
        $w=0;
    }
   if($w)
   {
        array_push($errors,"wrong username or passworrd");
   }
   else
   {
       $_SESSION['username']=$username;
       $_SESSION['success']="logged in successfully";
       header('location: pro.html');

   }
  }
}

?>




