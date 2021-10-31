 <?php
$showError = "false";
if($_SERVER["REQUEST_METHOD"] == "POST"){

    include '_dbconnection.php';
    $user_email = $_POST['signupemail'];
    $pass = $_POST['signupPassword'];
    $cpass = $_POST['signupcPassword'];

    //exist user conf

    $existsql ="SELECT * FROM `users` WHERE user_email = '$user_email'";
    $result = mysqli_query($conn, $existsql);
    $numRows = mysqli_num_rows($result);
    if($numRows>0){
        $showError= "Email already exist";
    }
    else{
        if ($pass == $cpass) {
          $hash = password_hash($pass , PASSWORD_DEFAULT);
          $sql = "INSERT INTO `users` ( `user_email`, `user_pass`, `time`) VALUES ( '$user_email', '$hash', current_timestamp())";
          $result = mysqli_query($conn,$sql);
          echo $result;
          if ($result) {
              $showAlert = true;
              header("Location: /Forum/index.php?signupsuccess=true");
              exit();
          }
        }
        else{
            $showError= "Password doesn't match";
        }
    }
    header("Location: /Forum/index.php?signupsuccess=false&error=$showError");
}

?> 