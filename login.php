<?php include('server.php') ?>
<html>
  <head>
    <meta chrset="utf-8">
<title>Login</title>
<style>
  @import "https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css";
body{
  margin: 0;
  padding:0;
  font-family: sans-serif;
  background: url(yoga5.jpg) no-repeat;
  background-size: cover;
  height: 100%;
  background-position-x: center;
}
.login-box{
  width:280px;
  position:absolute;
  top:25%;
  left:50%;
  transform: translate(-50%, -50%);
  color: #28095a;
}
.login-box h1{
  float: left;
  font-size:40px;
  border-bottom: 5px solid #2d1147;
  margin-bottom: 50px;
  padding: 8px 0;
}

 .textbox{
  width:100%;
  overflow: hidden;s
  font-size: 20px;
  padding: 8px 0; margin: 8px 0;
  border-bottom:  1.4px solid #2d1147;

}
.textbox i{
  width:26px;
  float: left;
  text-align: center;

}
.textbox input{
  border: none;
  outline: none;
  background: none;
  color: #2d1147;
  font-size: 18px;
  width: 80px;
  float: left;
  margin: 0 10px;
  
}
.btn{
  width:100%;
  background: none;
  border: 2px solid #2d1147;
  color: #1d0b3a;
  padding: 6px;
  font-size: 18px;
  cursor: pointer;
  margin: 12px 0;
  

}


</style>
<script>
   /* function validate()
    {
        var nme=document.getElementById("username");
        if(nme.value.trim()=="")
                {
                    alert("name can't be empty");
                    return false;
                }
        var ps=document.getElementById("password");
        if(ps.value.trim()=="")
                {
                    alert("Password can't be empty");
                    return false;
                }
        else if(ps.value.trim().length<6)
                {
                    alert("enter valid password");
                    return false;
                }
                return true;
    }
    */
</script> 

    </head>

    <body>
      <div class="login-box">
        <h1>Login</h1>
        <form   action="login.php" method="POST" >

        <div class="textbox">
            <i class="fa fa-user" aria-hidden="true"></i>
            <input type="text" placeholder="username" name="username" id="username" value="" required>
        </div>
        <div class="textbox">
            <i class="fa fa-lock" aria-hidden="true"></i>
            <input type="password" placeholder="Password" name="password" id = "password" value="" required>
            </div>
            <input class="btn" type="submit" name="login" value="Sign in">
            <p>Not a user? <a href="signup.php"><b>signup</b></a></p>
            </form>

        </div>
    </body>

</html>