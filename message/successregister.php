<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title> Register Success</title>
    <style>
    
    #success{
        width: 80%;
        margin: 0 auto;
        margin-top: 90px;
    }
    #submit{
        width: 80%;
        margin: 0 auto;
    }
    body{
        background-image: url("../img/register.jpg"); 
        background-size:cover;
        }
    p{
      text-align: center;
    }
  .container{
      background:#fff;
    }
    </style>
</head>
<body>

    <div class="alert alert-success" role="alert" id="success">
        <p> <b>Register Success!!! </b> Congratulation you can use the application.</p>
     </div><br>

     <form action="../index.php" method="post">
        <button type="submit" class="btn btn-primary btn-lg btn-block" id="submit" onclick="history.go(-1);">Log Out</button>
     </form>
    
     <br><b><br><br>

         <?php  session_start(); ?>
         
     <div class="container">
     <ul class="list-group">
        
            <li class="list-group-item"><strong>Username:</strong>
            <?php 
            if(!empty($_SESSION['name'])) {
                echo  $_SESSION['name']; 
            }
            ?>
            </li>

            <li class="list-group-item"><strong>Password:</strong> 
            <?php 
            if(!empty($_SESSION['pass'])) {
                echo  $_SESSION['pass']; 
            }
            ?>
            </li>

            <li class="list-group-item"><strong>Email:</strong>
            <?php 
            if(!empty($_SESSION['email'])) {
                echo  $_SESSION['email']; 
            }
            ?>
             </li>

            <li class="list-group-item"><strong>Message:</strong>
            <?php 
            if(!empty($_SESSION['message'])) {
                echo  $_SESSION['message']; 
            }
            ?>
             </li>

        </ul>
     
     </div>
</body>
</html>