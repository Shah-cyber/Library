<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rental Book Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<style>
    .main{
        
        height: 100vh;
        box-sizing: border-box;
       

       
    }

    .login {
        width: 500px;
        border: solid 5px;
        border-radius: 10px;
        padding: 40px;
        
    }

    .login-box{
        width: 500px;
        border: solid 5px;
        border-radius: 10px;
        padding: 40px;
        background-color: rgb(255, 193, 193);
        box-shadow: 0px 0px 10px 10px rgba(0,0,0,0.5);
    }

    form div{
        margin: 15px 0px;
    }

    img {
    width: 100%;
    height: 100%;
    position: absolute;
    z-index: -1;
    opacity: 10;
}

h1 {
    font-size: 30px;
    font-weight: bold;
    color: rgb(110, 112, 112);
    text-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
    text-decoration-line: inherit;
}

</style>
<body>
    <img src="images/library.jpg">
    <div class="main d-flex flex-column justify-content-center align-items-center">
        @if(session('status'))
            <div class="alert alert-danger">
                {{session('message')}}
            </div>
        @endif
        <div class="login-box">
            <form action="" method="post">
                @csrf
                <div>
                    <h1 class="text-center">Welcome to Rental Book System </h1>                 
                    <h2 class="text-center">Login</h2>
                </div>
                <div>
                    <label for="username" class="form-label">Username</label>
                    <input type="text" name="username" id="username" class="form-control" required>
                </div>
                <div>
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control" required>
                </div>
                <div>
                    <button type="submit" class="btn btn-primary form-control">Login</button>
                </div>
                <div class="text-center ">
                  Don't have account ?  <a href="register" >Sign Up</a>
                </div>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>