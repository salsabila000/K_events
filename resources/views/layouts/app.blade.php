<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/frontend/libraries/bootstrap-5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/frontend/styles/home.css">
    <title>K-EVENTS</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg" style="background-color: white;">
        <div class="container-fluid">

            <div class="logo d-flex align-items-center">
                    <div class="logo-img me-3">
                        <img src="/frontend/images/image 102.png" alt="">
                    </div>
                    <div class="title-navbar fw-bold" style="color: #F25D9C; font-size: 20px;">
                        K-EVENTS
                    </div>
            </div>
 
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('history-page') }}">History</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('faq-page') }}">FAQ</a>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <a class="btn btn-primer" type="submit" href="{{ route('login')}}">Login</a>
            </form>
          </div>
        </div>
    </nav>

  <div class="container mt-5 d-flex justify-content-evenly flex-wrap ">

  @yield('content')
        
  </div>

     
    
</body>
<script src="/frontend/libraries/bootstrap-5.3.3/dist/js/bootstrap.min.js"></script>
</html>