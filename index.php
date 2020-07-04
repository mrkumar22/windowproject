<?php
    session_start();
    //create key for hash function
    if(empty($_SESSION['token']))
    $_SESSION['token'] = bin2hex(random_bytes(32));
    //create CSRF Token
    $csrf = hash_hmac('sha256','some string: index.php',$_SESSION['token']);

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign In</title>
    <script
      src="https://kit.fontawesome.com/27fbeea9fb.js"
      crossorigin="anonymous"
    ></script>
    
    <!-- Sweet Alert CDN -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="assets/login/css/loginPage.css" type="text/css" />
  </head>
  <body>
    <div class="container" id="container">
      <div class="form-container sign-up-container">
        <form action="" name="one" method="POST">
          <h1>Register</h1>
          <span>Create Your Account</span>
          <input type="text" name="fname" placeholder="First Name" class="name" style="text-transform:capitalize;" required/>
          <input type="text" name="lname" placeholder="Last Name" style="text-transform:capitalize;"  required/>
          <input type="email" name="email" placeholder="Email *" required />
          <input type="text" name="company_name" placeholder="Company Name " style="text-transform:capitalize;" />
          <input type="password" name="pwd1" placeholder="Password *" id="pwd1" value="" required />
          <input type="password" name="pwd2" placeholder="Confirm Password *" id="pwd2" required/>
          <br>
          <button id="signupbtn" type="submit" name="signup">Sign Up</button>
        </form>
      </div>
      <div class="form-container sign-in-container">
        <form action="" method="POST">
          <h1>Sign in</h1>
          <span>Use PC Online</span>
          <input type="hidden" name = "csrf" value = "<?php echo $csrf; ?>"/>
          <input type="email" name = "email" placeholder="Email" required/>
          <input type="password" name = "pwd" placeholder="Password" required />
          <a href="#">Forgot your password?</a>
          <button id="signinbtn" type="submit" name="signedin">Sign In</button>
        </form>
      </div>
      <div class="overlay-container">
        <div class="overlay">
          <div class="overlay-panel overlay-left">
            <h1>Go back to login</h1>
            <p>
              To keep connected with us please login with your personal info
            </p>
            <button class="ghost" id="signIn" >Sign In</button>
          </div>
          <div class="overlay-panel overlay-right">
            <h1>Create new Account!</h1>
            <p>Enter your personal details and start journey with us</p>
            <button class="ghost" id="signUp" >Sign Up</button>
          </div>
        </div>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="assets//login/js/loginPage.js"></script>
  </body>
</html>
<?php
    //Connection
    include "includes/connection.php";
    //SignUp Clicked
    if(isset($_POST['signup']))
    {
        //Check Already User
        $user_email = $_POST['email'];
        $already_user = "SELECT * FROM `users` WHERE email = '$user_email'"; 
        $run = mysqli_query($conn,$already_user);
        if(mysqli_num_rows($run)>0)
        { ?>
        <script>
            swal('User Already Exist','Error Message','error')
        </script>
        <?php }
        else
        {
            $fname = ucwords($_POST['fname']);
            $lname = ucwords($_POST['lname']);
            $email = $_POST['email'];
            $role = "ceo";
            if($_POST['company_name'] == "")
            {
                $_POST['company_name'] == "";
            }
            else
            {
                $company = $_POST['company_name'];
            }
            
            $pwd1 = base64_encode($_POST['pwd1']);
            $pwd2 = base64_encode($_POST['pwd2']);
            $date = date("M d,Y");
            //Comparing Passwords
            if($pwd1 != $pwd2)
            {?>
                <script>
                    swal('Password Are Not Matched','Warning Message','warning')
                </script>
            <?php }
            else
            {
                $que = "INSERT INTO `users`(`username`, `email`, `password`, `role`, `image`, `created_at`) VALUES ('','$email','$pwd2','$role','','$date')";
                if(mysqli_query($conn,$que))
                {
                    $que_getid = "SELECT * FROM `users` ORDER BY id DESC LIMIT 0,1";
                    $run = mysqli_query($conn,$que_getid);
                    while($row = mysqli_fetch_array($run))
                    {
                        $curId = $row['id'];
                    }
                    $insert_que = "INSERT INTO `users_meta`(`f_name`, `l_name`, `company_name`, `users_id`) VALUES ('$fname','$lname','$company','$curId')";
                    if(mysqli_query($conn,$insert_que))
                    {
                        $path = "storage/".$curId;
                        if(mkdir($path,0700))
                        {
                          $filename = fopen($path."/"."intro.txt","w");
                          $txt = "My name is ".$fname;
                          fwrite($filename,$txt);
                        }
                    ?>
                        <script>
                            swal('Account Created Successfully...','Success Message','success')
                        </script>
                    <?php }  
                }
            }
        }
    }
    //SignUp Clicked
    else if(isset($_POST['signedin']))
    {
        if(hash_equals($csrf,$_POST['csrf']))
        {   
            //Input Data
            $email = mysqli_real_escape_string($conn,$_POST['email']);
            $pass = mysqli_real_escape_string($conn,base64_encode($_POST['pwd']));
            
            //Chechk Email Password
            $que = "SELECT * FROM `users` WHERE email = '$email' AND password = '$pass'";
            $run = mysqli_query($conn,$que);

            if(mysqli_num_rows($run)>0)
            {
                header("location:dashboard.php"); 
            }
            else
            { ?>
                <script>
                    swal("Email or Password is Invalid...","Error Message","error");
                </script>
            <?php }
        }
    }

?>