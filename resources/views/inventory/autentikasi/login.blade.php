<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inspiration&family=Lobster&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons"
      rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="/style.css">
      <link rel="stylesheet" href="/fontawesome/css/all.css">
      <link rel="stylesheet" href="https://fonts.sandbox.google.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
</head>
<body style="background-color:#f3f6f9;">
    <div class="vh-100 d-flex justify-content-center align-items-center" >
        <form action="/auth" method="POST" class="cardr text-center col-12 col-lg-6 shadow-md p-4 border" style="background-color:white;">
            @csrf
            <img src="/img/Logo_RSIA_PuriBunda.png" alt="">
        
            <center>
                <div class="mb-3">
                    <input name= "username" type="username" class="form-control rounded-pill text-center w-75" placeholder="Username">
                </div>
            
                <div class="mb-3">
                    <input name="password" type="password" class="form-control rounded-pill text-center w-75" placeholder="Password">
                </div>
            </center>
            <button class="w-25 rounded-pill btn btn-primary">Login</button>
            <div class="row footer text-center bottom m-0">
            <div class="mt-3 row footer">
                  <p>&copy; 2022 All Rights Reserved by   </p>
                
              </div>
            </div>
        </form>
        
        </div>
</body>
</html>