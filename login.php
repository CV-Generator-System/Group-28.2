<?php

include 'inc/config.php';
session_start();

if(isset($_POST['submit'])){

   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = mysqli_real_escape_string($conn, md5($_POST['password']));

   $select = mysqli_query($conn, "SELECT * FROM `user_form` WHERE email = '$email' AND password = '$pass'") or die('query failed');

   if(mysqli_num_rows($select) > 0){
      $row = mysqli_fetch_assoc($select);
      $_SESSION['user_id'] = $row['id'];
      header('location:login-home.php');
   }else{
      $message[] = 'Incorrect Email and Password!';
   }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Login</title>
   <link rel="stylesheet" href="assets/css/style.css">
   <link rel="stylesheet" href="assets/css/main.css">

</head>
<body>

<?php include('inc/header.php'); ?>

<div class="container">
   <div class="form-container">

      <form action="" method="post" enctype="multipart/form-data">
         <h3>Login Now</h3>
         <?php
         if(isset($message)){
            foreach($message as $message){
               echo '<div class="message">'.$message.'</div>';
            }
         }
         ?>
         <input type="email" name="email" placeholder="Enter Email" class="box" required>
         <input type="password" name="password" placeholder="Enter Password" class="box" required>
         <input type="submit" name="submit" value="Login Now" class="update-btn">
         <p>Don't have an account? <a href="register.php">Regiser Now</a></p>
      </form>

   </div>
</div>

<?php include('inc/footer.php'); ?>

   <!--Start of Tawk.to Script-->
   <script type="text/javascript">
            var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
            (function(){
            var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
            s1.async=true;
            s1.src='https://embed.tawk.to/6547c2a4a84dd54dc488c076/1heg50ld4';
            s1.charset='UTF-8';
            s1.setAttribute('crossorigin','*');
            s0.parentNode.insertBefore(s1,s0);
            })();
      </script>
   <!--End of Tawk.to Script-->

</body>
</html>
