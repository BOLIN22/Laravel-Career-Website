<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Career Website</title>

    <link rel="stylesheet" type="text/css" href="css/style2.css" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>
    <header class="header" id="header">
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
                            <a href=/ideas/show>Edit</a>
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

                <!-- Toggle button -->
                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-menu'></i>
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
        <form action="#" method="GET" class="search__form">
            <i class='bx bx-search-alt search__icon'></i>
            <input type="search" name="q" placeholder="Search something here" class="search__input">
        </form>

        <i class='bx bx-x search__close' id="search-close"></i>
    </div>

    <main class="main">

        <div class="Corousel">
            <div class="slider">
                <div class="slides">
                    <div class="slide" id="slide1"> <!-- Slide 1 -->
                        <img src="images/slide_picture1.jpg" alt="Image 1">
                    </div>
                    <div class="slide" id="slide2"> <!-- Slide 2 -->
                        <img src="images/slide_picture2.jpg" alt="Image 2">
                    </div>
                    <div class="slide" id="slide3"> <!-- Slide 3 -->
                        <img src="images/slide_picture3.jpg" alt="Image 3">
                    </div>
                    <div class="slide" id="slide4"> <!-- Slide 4 -->
                        <img src="images/slide_picture4.jpg" alt="Image 4">
                    </div>
                    <!-- Add more slides as needed -->
                </div>
            </div>

            <!-- Slider controls -->
            <div class="slider-controls">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
                <span class="dot" onclick="currentSlide(4)"></span>
            </div>


        </div>

        <div class="container">
            <div class="content-flex">

                <div class="fl tab">
                    <ol>
                        <li class="cur">
                            <p><span>Last Year IN School</span></p>
                        </li>
                        <li class="cur">
                            <p><span>Within One Year Of Graduation</span></p>
                        </li>
                    </ol>
                </div>

                <div class="content-div">
                    <div class="content qulification">
                        <p><strong>What do you need to have</strong></p>
                        <ul>
                            <li><em>Internship Experience:</em>2-3Experiences, High company visibility and demonstrated
                                ability to work</li>
                            <li><em>Job Search Information:</em>Keep an eye on job openings to avoid missing out on job
                                opportunities due to poor information</li>
                            <li><em>Precise positioning:</em>Understanding professional pathways and choosing the right
                                company and position</li>
                            <li><em>Competitive analysis:</em>Understand the domestic job-seeking environment and
                                reasonably assess the competitiveness of job-seeking. </li>
                        </ul>
                    </div>
                    <div class="content">
                        <p><strong>What can you apply for</strong> </p>
                        <ul class="just-one">
                            <li><em>Job fair for returnees</em> </li>
                            <li><em>Definition:</em>Participate in job fairs overseas for Chinese students, with the
                                entire recruitment process taking place overseas, and receive an offer from China after
                                a successful job search</li>
                            <li><em>Opening hours:</em>August </li>
                            <li><em>Representative Project:</em>PwC - CSI; McKinsey - Overseas School Recruitment;
                                Jingdong - International Executive Trainee; Tencent - Overseas School Recruitment</li>
                        </ul>
                    </div>
                </div>

            </div>

        </div>

    </main>

    <script src="{{ asset('js/career.js') }}"></script>
</body>

</html>