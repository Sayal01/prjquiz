<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form name="register" action="insert.php" method="post" onsubmit="return validateform()">



<div>
    <label for="email">Email:</label>
    <input type="text" name="email" id="email">
</div>
<div>
    <label for="userName">Username</slabel>
    <input type="text" name="userName" id="userName">
</div>
<div>
<label for="password">Password:</label>
<input type="text" name="password" id="pass">
</div>
<div>
    <label for="reRassword">Password:</label>
    <input type="text" name="rePassword" id="rePassword">
</div>

<input type="submit" name="submit"value="register">
<P>already have an account?? <A href='login.php'>sign in </A></P>
</form>
    
</body>
<script>

function validateform(){  
var Uname=document.register.userName.value;  
var password=document.register.password.value;  
var repassword=document.register.rePassword.value;   
if (Uname==null || Uname==""){  
  alert("UName can't be blank");  
  return false;  
}else if(password.length<6){  
  alert("Password must be at least 6 characters long.");  
  return false;  
  }
  else if(repassword !=password){
    alert("enter same password");
  }
}  
</script>
</html>