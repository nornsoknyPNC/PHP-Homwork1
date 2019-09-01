<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Login Error</title>
    <style>
    
    #fail{
        width: 50%;
        margin: 0 auto;
        margin-top: 90px;
}
    #button{
        width: 50%;
        margin: 0 auto;
}
    body{
        background-image: url("../img/background.jpg"); 
        background-size:cover;
  }
  p{
      text-align: center;
  }
    </style>
</head>
<body>
    <div class="alert alert-danger" role="alert" id="fail">
        <p><b>Field Cannot Empty!</b> You should fill in all the fields.</p>
       </div><br>
       <form action="../index.php" method="post">
            <button type="button" class="btn btn-primary btn-lg btn-block" id="button" onclick="history.go(-1);"> Go Back </button>
       </form>
   
</body>
</html>