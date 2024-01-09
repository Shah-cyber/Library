<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rental Book System | @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+Knujsl7/vW2IxsFtSlOAPVjWqA81F5LlXa5l3nuP6wGgU5U" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


</head>

<body>
    
    <div class="main d-flex flex-column justify-content-between">
        <header>
                <nav class="navbar navbar-dark navbar-expand-lg bg-success">
                    <div class="container-fluid">          
                        <a class="navbar-brand" href="#">Rental Book System</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        
                    </div>
                   
                </nav>
            </header>
              <div class="body-content h-100">
                    <div class="row g-0 h-100">
                        <div class="sidebar col-lg-2 d-lg-block" id="navbarTogglerDemo03">
                            
                                @if (Auth::user())
                                    @if (Auth::user()->role_id == 1)               
                                    <a href="/dashboard" @if(request()->route()->uri == 'dashboard' ) class='active' @endif>Dashboard</a>

                                    <a href="/books"  @if(request()->route()->uri == 'books'  || request()->route()->uri == 'book-add' || request()->route()->uri == 'book-edit/{slug}' || request()->route()->uri == 'book-deleted' || request()->route()->uri == 'book-delete/{slug}') class='active' @endif>Books</a>

                                    <a href="/categories" @if(request()->route()->uri == 'categories' || request()->route()->uri == 'category-add' || request()->route()->uri == 'category-edit/{slug}' || request()->route()->uri == 'category-deleted' || request()->route()->uri == 'category-delete/{slug}') class='active' @endif>Categories</a>

                                    <a href="/users" @if(request()->route()->uri == 'users' || request()->route()->uri == 'registered-users' || request()->route()->uri == 'user-detail/{slug}' || request()->route()->uri == 'user-ban/{slug}' || request()->route()->uri == 'user-banned' ) class='active' @endif>Users</a>

                                    <a href="/rent-logs" @if(request()->route()->uri == 'rent-logs') class='active' @endif>Rent Log</a>

                                    <a href="/" @if(request()->route()->uri == '/') class='active' @endif>Book List</a>

                                    <a href="/book-rent" @if(request()->route()->uri == 'book-rent') class='active' @endif>Book Rent</a>

                                    <a href="/book-return" @if(request()->route()->uri == 'book-return') class='active' @endif>Book Return</a>

                                    <a href="/logout" >Log out</a>

                                    {{-- <button class="btn btn-dark mode-toggle" id="dark-mode-toggle">
                                        <i class="bi bi-moon"></i> <!-- This is the moon icon from Bootstrap Icons -->
                                    </button> --}}
                                    

                                    @else
                                    
                                    <a href="/profile" @if(request()->route()->uri == 'profile') class='active' @endif>Profile</a>
                                    <a href="/" @if(request()->route()->uri == '/') class='active' @endif>Book List</a>
                                    <a href="/logout">Log out</a>

                                    {{-- <button class="btn btn-dark mode-toggle sidebar col-lg-2 d-lg-block" id="dark-mode-toggle">
                                        <i class="bi bi-moon"></i> <!-- This is the moon icon from Bootstrap Icons -->
                                    </button> --}}
                                    
                                    
                                    @endif
                                @else
                                <a href="/login">Log In</a>
                                @endif
                        
                        </div>
                        <div class="content p-5 col-lg-10">
                            @yield('content')
                        </div>
                    </div>
                </div>

                



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
   
     
</body>

</html>