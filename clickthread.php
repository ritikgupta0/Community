<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Community - Discuss Forum</title>
</head>
<body>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

  </head>
  <body>
    <?php include "partials/_header.php";?>
    <?php include "partials/_dbconnection.php";?>
    <?php
    $id = $_GET['clickthreadid'];
    $sql ="SELECT * FROM `thread` WHERE thread_id =$id";
    $result =mysqli_query($conn,$sql);
    while ($row = mysqli_fetch_assoc($result)) {
      // echo $row['categories_id'];
      // echo $row['categories_name'];
      $title = $row['thread_title'];
      $desc = $row['thread_desc'];
    }
    ?>
    <?php
    $showAlert=false;
    $method = $_SERVER['REQUEST_METHOD'];
    if($method=='POST'){
      //comment post
    $comment = $_POST['comment'];
    $sql =" INSERT INTO `comments` ( `comment_content`, `thread_id`, `comment_by`, `comment_time`) VALUES ( '$comment', '$id', '0', current_timestamp())";
    $result =mysqli_query($conn,$sql);
    $showAlert=true;
    if ($showAlert) {
      echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>Successfully!</strong> submitted .
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    }

    ?>
    <!-- category container  -->
    
    <div class="container my-4">
        <div class="jumbotron">
            <h1 class="display-4">"<?php echo $title;?> Forum"</h1>
            <p class="lead"> <?php echo $desc;?></p>
            <hr class="my-4">
            <p>This is a peer to peer forum for share your answers,A question should consist of complete sentence(s) and end in a question mark. Questions should contain enough information for meaningful answers to be posted, and make clear how answers can meet their expectations.</p>
           <p><b>Posted by:Anonymus</b></p>
        </div>
    </div>
    <div class="container">
    <h1 class="py-2">Post a Comment</h1>


    <form action = "<?php echo $_SERVER['REQUEST_URI']?>" method = "post" >
        <div class="form-group">
          <small id="emailHelp" class="form-text text-muted">Type your comment </small>
          <textarea class="form-control" id="comment" name = "comment" row ="3"></textarea>
        </div>
        <div class="form-group">
          <label for="exampleFormControlTextarea1">Post comment</label>
        </div>
        <button type="submit" class="btn btn-success">Post comment</button>
</form>


    </div>
    <div class="container">
        <h2>Discuss Question</h2>
         <?php
        $id = $_GET['clickthreadid'];
        $sql ="SELECT * FROM `comments` WHERE thread_id =$id";
        
        $result =mysqli_query($conn,$sql);
        $noResult = false;
        while ($row = mysqli_fetch_assoc($result)) {
        // echo $row['categories_id'];
        // echo $row['categories_name'];
        $noResult = true;
        $id = $row['comment_id'];
        $content = $row['comment_content'];
        echo '<div class="media my-3">
            <img src="img/Person-icon.jpg" width = "54px" class="mr-3" alt="...">
            <div class="media-body">
                '.$content.'
            </div>
        </div>';
        }
        ?> 
    </div>
    <?php include "partials/_footer.php";?>
   


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
  </body>
</html>
</body>
</html>