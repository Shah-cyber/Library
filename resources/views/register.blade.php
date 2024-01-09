<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rental Book Registeration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<style>
            .main{
                
                height: 100vh;
                box-sizing: border-box;
            

            
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

            .register {
        width: 500px;
        border: solid 5px;
        border-radius: 10px;
        padding: 40px;
        
    }

    .register-box{
        width: 500px;
        height: auto;
        border: solid 5px;
        border-radius: 10px;
        padding: 20px;
        background-color: rgb(255, 193, 193);
        box-shadow: 0px 0px 10px 10px rgba(0,0,0,0.5);
        
    }

    form div{
        margin: 15px ;
    }

    h1 {
    font-size: 30px;
    font-weight: bold;
    color: rgb(110, 112, 112);
    text-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
    text-decoration-line: inherit;

}

h2 {
    font-size: 20px;
    font-weight: bold;
    color: rgb(12, 15, 15);
    text-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
    text-decoration-line: inherit;
}

 


</style>
<body>
    
    <div class="main d-flex flex-column justify-content-center align-items-center">
        @if($errors->any())
            <div class="alert alert-danger ">
               <ul>
                     @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                     @endforeach
               </ul>
           </div>
        @endif

        {{-- @if(session('status') && session('message'))
        <div id="popup" style="display:none;">
            <div id="popup-content">
                <span id="popup-message">{{ session('message') }}</span>
                <button id="close-popup">Close</button>
            </div>
        </div>
    @endif --}}
    
        <img src="images/library1.jpg">
     <div class="main d-flex flex-column justify-content-center align-items-center">
        <div class="register-box">
            <form action="" method="post">
                @csrf
                <div>
                    <h1 class="text-center">Welcome to Rental Book System </h1>                 
                    <h2 class="text-center">Sign Up</h2>
                </div>
                <div>
                    <label for="username" class="form-label">Username</label>
                    <input type="text" name="username" id="name" class="form-control"required  >
                </div>
                <div>
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" id="name" class="form-control"  required>
                </div>
                <div>
                    <label for="phone" class="form-label">Phone</label>
                    <input type="text" name="phone" id="phone" class="form-control" >
                </div>
                <div>
                    <label for="address" class="form-label">Address</label>
                    <textarea name="address" id="address" class="form-control" rows="4" required >
                    </textarea>
                </div>
                <div>
                    <button type="submit" class="btn btn-primary form-control">Sign Up</button>
                </div>
                <div class="text-center ">
                    Have an account ? <a  href="login">Log in</a>
                </div>
            </form>
            

        </div>

     </div>
     <div>
        @if(session('status') && session('message'))
        <div id="popup" style="display:none;">
            <div id="popup-content">
                <span id="popup-message">{{ session('message') }}</span>
                <button id="close-popup">Close</button>
            </div>
        </div>
    @endif
     </div>
    
</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function(){
        $("#popup").show();

        $("#close-popup").click(function(){
            $("#popup").hide();
        });
    });
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>