<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href={{ asset('css/app.css')}}>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    
    <script src="https://kit.fontawesome.com/408ec40bbd.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <nav class="nav">
        <div class="menuBtn">
            <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions"><i class="fa-solid fa-bars"></i></button>
            {{-- <a href="#" class="item">Brgy. San Diego</a> --}}

        </div>

        <div class="navlist">
            <a href="#" class="item">Brgy. San Diego</a>
            {{-- <a href="#" class="item">Officials</a>
            <a href="#" class="item">Record List</a>
            <a href="#" class="item">Contacts</a> --}}
        </div>
    </nav>

    <div class="container mt-5">  
        <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
        <div class="offcanvas-header">
        <h2 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">Brgy. San Diego</h2>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div class="sidebar">
            {{-- <div class="logo-details">
                <div class="logo_name">Brgy. San Diego</div>
                <i class="fa-solid fa-bars" id="btn" ></i>
            </div> --}}
        
            <!-- nav-list -->
            <ul class="nav-list">
                <li>
                    <a href="officials">
                        <i class="fa-regular fa-user"></i>
                        <span class="links_name">Officials</span>
                    </a>
                    {{-- <span class="pop-out">Officials</span> --}}
                </li>
        
                <li>
                    <a href="residents">
                        <i class="fa-regular fa-clipboard"></i>
                        <span class="links_name">Residents Record</span>
                    </a>
                    {{-- <span class="pop-out">Residents Record</span> --}}
                </li>
        
                <li>
                    <a href="request">
                        <i class="fa-solid fa-inbox"></i>
                        <span class="links_name">Requests</span>
                    </a>
                    {{-- <span class="pop-out">Requests</span> --}}
                </li>
        
                <li>
                    <a href="map">
                        <i class="fa-regular fa-map"></i>
                        <span class="links_name">Map</span>
                    </a>
                    {{-- <span class="pop-out">Map</span> --}}
                </li>
        
                <li>
                    <a href="contacts">
                        <i class="fa-regular fa-address-book"></i>
                        <span class="links_name">Contacts</span>
                    </a>
                    {{-- <span class="pop-out">Contacts</span> --}}
                </li>
                
                <li>
                    <a href="messages">
                        <i class="fa-regular fa-comment"></i>
                        <span class="links_name">Messages</span>
                    </a>
                    {{-- <span class="pop-out">Messages</span> --}}
                </li>
        
                <li>
                    <a href="settings">
                        <i class="fa-solid fa-gear"></i>
                        <span class="links_name">Settings</span>
                    </a>
                    {{-- <span class="pop-out">Settings</span> --}}
                </li>
            </ul>
    
            <div class="profile">
                <div class="profile-details col-9">
                    <div class="user_position">
                        <div class="user">Admin1</div>
                        <div class="position">Administrator</div>
                    </div>
                </div>
                <a href="index.html"><i class="fa-solid fa-arrow-right-from-bracket col-3" id="log_out"></i></a>
                {{-- <span class="pop-out">Logout</span> --}}
            </div>
            </div>
        </div>
        </div>
    </div>
    

    <div class="container">
        @yield('content')
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/408ec40bbd.js" crossorigin="anonymous"></script>
</body>
</html>