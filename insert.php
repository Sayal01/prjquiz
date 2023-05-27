<?php
include "db_connection.php";
if(isset($_POST['submit']))
{	
    $email = $_POST['email'];
    $password = $_POST['password'];
    $userName = $_POST['userName'];
    $str="SELECT email from user WHERE email='$email'";
    $result=mysqli_query($con,$str);
    
    if((mysqli_num_rows($result))>0)	
    {
        echo "<center><h3><script>alert('Sorry.. This email is already registered !!');</script></h3></center>";
        header("refresh:0;url=registerPage.php");
    }
    else
    {
        $str="insert into user set email='$email',password='$password',userName='$userName'";
        if((mysqli_query($con,$str)))	
        echo "<center><h3><script>alert('Congrats.. You have successfully registered !!');</script></h3></center>";
        header('Location: index.php');
    }
}

?>