<?php include('../sql-config/con-config.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" 
          href=
"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Login</title>
</head>
<body style="margin:0; padding:0; background:rgb(3, 27, 1); width:100%; height: 100%;">
    
<section class="sticky">
    <div class="bubbles">
        <div class="bubble"></div>
      <div class="bubble"></div>
      <div class="bubble"></div>
      <div class="bubble"></div>
      <div class="bubble"></div>
      <div class="bubble"></div>
      <div class="bubble"></div>
      <div class="bubble"></div>     
    </div>
  </section>
  <div class="box">
  <br><br>

<?php 
    if(isset($_SESSION['faculty_login']))
    {
        echo $_SESSION['faculty_login'];
        unset($_SESSION['faculty_login']);
    }
    
    ?>
<br><br>

<form action="" method="POST" >
        <h2>Login</h2>
    <div>
        <input type="text" name="username" placeholder="Enter Username" id="username">
    </div>
</br>
    <div>
    <input type="text" name="user_id" placeholder="Enter ID or email" id="userid">
    </div>
</br>
    <div>
        <input type="password" name="password" placeholder="Password" id="password">
    </div>
    <div class="b1">
    </br>
    <input type="submit" name="submit" value="Login" class="btn-primary">
        </div>
        <p class="message"><a href="#">Forgot password?</a></p>
    </form>
</div>
</body>
</html>
<?php 

    
    if(isset($_POST['submit']))
    {
        
        $username = $_POST['username'];
        $password =$_POST ['password'];

    
        $sql = "SELECT * FROM login_faculty WHERE Faculty_name='$username' AND Password='$password'";

         
         $res = mysqli_query($conn, $sql);

        
        $count = mysqli_num_rows($res);

        if($count==1)
        {
           
               $_SESSION['faculty_login'] = "<div class='success'>Login Successful.</div>";
            $_SESSION['user'] = $username;
           
           ob_start();
            header('location:facultyProfile.html');
            ob_flush();
        }
        else
        {
            
           
            $_SESSION['faculty_login'] = "<div class='error text-center'>Username or Password did not match.</div>";
           
            ob_start();
            header('location:faculty_login.php');
            ob_flush();
    exit;
           

            
        }

        
    }

    ?>