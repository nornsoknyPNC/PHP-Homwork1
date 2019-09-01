<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Register Form</title>

    <style>
        .container{
            margin-top: 100px;
        }
        h2{
            text-align: center;
        }
        body{
            background-image: url("../img/register.jpg");
            background-size: cover;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4">
               <div class="card">
                   <div class="card-header"><h2>Register Form</h2></div>
                   <div class="card-body">
                       <form action="../page/proccess.php" method="POST">
                           <div class="form-group">

                               <label for="file">Username:</label>
                               <input type="text" class="form-control" name="Username"> 

                               <label for="file">Password:</label>
                               <input type="password" class="form-control" name="password">

                               
                               <label for="file">Email:</label>
                               <input type="email" class="form-control" name="email">

                           </div>
                           <div class="form-group">
                            <label for="file">Message:</label>
                            <textarea name="sms" class="form-control" cols="30" rows="3"></textarea>
                           </div>
                           
                           <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                            <button type="submit" class="btn btn-danger  float-right" name="back" >Back to Login</button>
                       </form>
                   </div>
               </div>
            </div>
            <div class="col-4"></div>
        </div>
    </div>
</body>
</html>