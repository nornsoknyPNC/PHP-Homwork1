<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Login Form</title>

    <style>
    
        .container{
            margin-top: 100px;
        }

        body{
            background-image: url("img/background.jpg");
            background-size: cover;
            background-position: center;
        }
        h2{
            text-align: center;
        }
                        
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4">
               <div class="card">
                   <div class="card-header"><h2>Login Form</h2></div>
                   <div class="card-body">
                       <form action="page/proccess.php" method="POST">
                           <div class="form-group">
                               <label for="file">Username:</label>
                               <input type="text" class="form-control" name="Username"> 

                               <label for="file">Password:</label>
                               <input type="password" class="form-control" name="password">
                           </div>
                           <button type="submit" class="btn btn-primary" name="login" >Login</button>
                           <button type="submit" class="btn btn-danger  float-right" name="register">Register</button>
                       </form>
                   </div>
               </div>
            </div>
            <div class="col-4"></div>
        </div>
    </div>
    
</body>
</html>