<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Please Register</title>
    <style>
    
    #warning{
        width: 50%;
        margin: 0 auto;
        margin-top: 90px;
}
    #submit{
        width: 50%;
        margin: 0 auto;
}
    body{
        background-image: url("../img/register.jpg"); 
        background-size:cover;
  }
    p{
      text-align: center;
  }
    </style>
</head>
<body>
  <form action="register.php" method="post"> 
  <div class="alert alert-warning" role="alert" id="warning">
        <p> <b>You don't have account yet!!! </b> Please register.</p>
     </div><br>

        <button type="submit" class="btn btn-primary btn-lg btn-block" id="submit" name="goRegister">Register</button>
  </form>
  
</body>
</html>