<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Career Website</title>
    
    <link rel="stylesheet" type="text/css" href="/css/style1.css" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    
</head>
<body>
    <header class="header" id="header" >
        <nav class="nav container">
            <a href="#" class="nav__logo">Career Website</a>

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item">
                        <a href="/career" class="nav__link">Home</a>
                    </li>

                    <li class="nav__item">
                        <a href="/sheet_download" class="nav__link">Position Information Sheet</a>
                    </li>

                    <li class="nav__item">
                        <a href="/report_download" class="nav__link">Recruitment market Visualisation report</a>
                    </li>

                    <li class="nav__item">
                        <a href="/notes" class="nav__link">Job Search Notes</a>
                    </li>

                    <li class="nav__item dropdown">
                        <a href="#" class="nav__link" id="interviews-link">Interviews Sharing</a>
                        <div class="dropdown-content" id="interviews-dropdown">
                            <a href="/ideas/create">Create</a>
                            <a href="/ideas/show">Edit</a>
                            <a href="/ideas">Index</a>
                            <!-- Add more options as needed -->
                        </div>
                    </li>

                </ul>

                <!-- CLOSE BUTTON -->
                <div class="nav__close" id="nav-close">
                    <i class='bx bx-x'></i>
                </div>
            </div>

            <div class="nav__actions">
                <!-- Search button -->
                <i class='bx bx-search nav__search' id="search-btn"></i>

                <!-- Login button -->
                <!-- <i class='bx bx-user nav__login' id="login-btn"></i> -->

                <!-- Toggle button -->
                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-menu' ></i>
                </div>

                @auth <!-- if the user has logged in -->
                <!-- Welcome message and username -->
                <span class="nav__welcome">Welcome, {{ Auth::user()->name }}</span>
                <!-- Logout button -->
                <a href="/logout" class="nav__logout">Logout</a>
                @else <!-- if the user has not logged in -->
                <!-- Login button -->
                <a href="/login" class='bx bx-user nav__login' id="login-btn">Login</a>
                @endauth
            </div>
        </nav>

    </header>

    <div class="search" id="search">
        <form action="/ideas/search" method="GET" class="search__form">
            <i class='bx bx-search-alt search__icon' ></i>
            <select name="criteria" class="search__select">
                <option value="destination">Destination</option>
                <option value="tags">Tags</option>
            </select>
            <input type="search"  name="q" placeholder="Search something here" class="search__input">
        </form>

        <i class='bx bx-x search__close' id="search-close" ></i>
    </div>

    <main class="main">
        
        <div class="container">
            @yield('content')
        </div>
        
        <!-- <img src="/images/slide_picture4.jpg" alt="image" class="main__bg"> -->
        
    </main>

    <script src="/js/main.js"></script>
    <script>const loginRoute = "/login";</script>

</body>
</html>