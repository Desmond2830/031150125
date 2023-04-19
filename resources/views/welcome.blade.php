<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barbery- The barber shop</title>

    <!-- favicon  -->
    <link rel="icon" type="image/x-icon" href="{{ asset('home') }}/img/Logo/Logo.png">


    <!-- font-awesome link  -->
    <script src="https://kit.fontawesome.com/3b7a96cd6e.js" crossorigin="anonymous"></script>

    <!-- custom css  -->
    <link rel="stylesheet" href="{{ asset('home') }}/style.css">

    <!-- bootstrap link  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

        <style>
            .instyle{
                color: white;
                text-decoration: none;
            }
        </style>
</head>

<body>

    <!-- header part  -->

    <header>

        <!-- navbar  -->
        <nav class="navbar navbar-expand-lg fixed-top bg-transparent">
            <div class="container-fluid">
                <a class="navbar-brand d-flex align-items-center" href="#">
                    <img src="{{ asset('home') }}/img/Logo/Logo.png" class="img-fluid logo" alt="img">
                    <p class="mb-0 ms-2">Barbery</p>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                    aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-icon"><i class="fa-solid fa-bars"></i></span>
                </button>
                <div class="collapse navbar-collapse p-2" id="navbarText">
                    <ul class="navbar-nav mx-auto  mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link text-white" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#about">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#gallery">Gallery</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#hair-style">Hair Styles</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#barbers">Barbers</a>
                        </li>

                    </ul>
                    <div class="nav-btn ">
                        @guest
                            @if (Route::has('login'))
                            <button class="rounded-pill"><a href="{{ route('login') }}" class="instyle" >Login</a></button>
                            @endif
                            @if (Route::has('register'))
                            <button class="rounded-pill"><a href="{{ route('register') }}" class="instyle" >Register</a></button>
                            @endif
                        @else
                        <button class="rounded-pill"><a href="{{ route('logout') }}"
                            onclick="event.preventDefault();document.getElementById('logout-form').submit();"
                            class="instyle" >Sign Out</a></button>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        @endguest
                        {{-- <button type="submit"  class="rounded-pill">Login</button> --}}
                    </div>
                </div>
            </div>
        </nav>


        <!-- slider  -->
        <div id="carouselCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselCaptions" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner ">
                <div class="carousel-item active">
                    <img src="{{ asset('home') }}/img/Slider/banner-1.jpg" class="d-block w-100" alt="...">
                    <div class="first-slider">
                        <p>A HAIR SALON FOR MEN</p>
                        <h5>BARBER</h5>
                        <h5> <span>SINCE</span> SHOP <span>2023</span> </h5>
                        <p>GALLERY. STORE & MORE</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('home') }}/img/Slider/banner-2.jpg" class="d-block w-100" alt="...">
                    <div class="second-slider ">
                        <h5>We Will Make You Stylish</h5>
                        <p>We provide some unique hair styles which will make you stylish</p>
                        <div class="btn">
                            <button class="rounded-pill" onclick="location.href='#hair-style'">See more</button>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('home') }}/img/Slider/banner-3.jpg" class="d-block w-100" alt="...">
                    <div class="third-slider">
                        <h5>Our Clients Trust Us</h5>
                        <p>We provide our best service to make happy our customers</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon " aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

    </header>

    <!-- main part  -->
    <main>

        <!-- about section  -->
        <section class="about mx-4" id="about">
            <div class="row row-cols-3 my-5 w-100">
                <div class="col-6 col-md-3">
                    <img class="img-fluid" src="{{ asset('home') }}/img/About/haircut.jpg" alt="">
                </div>
                <div class="col-6 col-md-3">
                    <img class="img-fluid" src="{{ asset('home') }}/img/About/shave.jpg" alt="">
                </div>
                <div class="col-12 col-md-6 p-4">
                    <h5>About Us</h5>
                    <span class="d-block my-4">
                        <i class="fa-solid fa-diamond"></i>
                        <i class="fa-solid fa-diamond"></i>
                        <i class="fa-solid fa-diamond"></i>
                        <i class="fa-solid fa-diamond"></i>
                    </span>
                    <p class="my-4">Our barbershop is the territory created purely for males who appreciate premium
                        quality, time and
                        flawless look.</p>

                    <p class="my-4">Our services spectrum encompasses many techniques and procedures – from
                        straight razor shaving
                        and hairstyling to beard care and eyebrow grooming. At our place, you have a chance to have your
                        precious hair taken care of, sipping premium whisky and listening to nice music.</p>
                </div>
            </div>
        </section>



        <!-- hair style section  -->
        <section class="hair-style  container w-100" id="hair-style">
            <h5 class="text-center">Hair Styles</h5>
            <span class="d-block mb-5 text-center">
                <i class="fa-solid fa-diamond"></i>
                <i class="fa-solid fa-diamond"></i>
                <i class="fa-solid fa-diamond"></i>
                <i class="fa-solid fa-diamond"></i>
            </span>

            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-0 w-100">
                <div class="col">
                    <img src="{{ asset('home') }}/img/HairStyle/fade.png" alt="img" class="img-fluid">
                    <div class="style-info">
                        <h4>Fade</h4>
                        <p> <span>Price: </span> $70</p>
                    </div>
                </div>
                <div class="col">
                    <img src="{{ asset('home') }}/img/HairStyle/taper-fade.png" alt="img" class="img-fluid">
                    <div class="style-info">
                        <h4>Taper fade</h4>
                        <p> <span>Price: </span> $130</p>
                    </div>
                </div>
                <div class="col">
                    <img src="{{ asset('home') }}/img/HairStyle/low-fade.png" alt="img" class="img-fluid">
                    <div class="style-info">
                        <h4>Low fade</h4>
                        <p> <span>Price: </span> $90</p>
                    </div>
                </div>
                <div class="col">
                    <img src="{{ asset('home') }}/img/HairStyle/high-fade.png" alt="img" class="img-fluid">
                    <div class="style-info">
                        <h4>High fade</h4>
                        <p> <span>Price: </span> $110</p>
                    </div>
                </div>
                <div class="col">
                    <img src="{{ asset('home') }}/img/HairStyle/bald-skin-fade.png" alt="img" class="img-fluid">
                    <div class="style-info">
                        <h4>Bald skin fade</h4>
                        <p> <span>Price: </span> $120</p>
                    </div>
                </div>
                <div class="col">
                    <img src="{{ asset('home') }}/img/HairStyle/slicked-back.png" alt="img" class="img-fluid">
                    <div class="style-info">
                        <h4>Slicked back</h4>
                        <p> <span>Price: </span> $80</p>
                    </div>
                </div>
            </div>
        </section>


        <!-- barbers -->
        <section class="barbers container w-100" id="barbers">
            <h5 class="text-center">Licensed Barbers</h5>
            <span class="d-block mb-5 text-center">
                <i class="fa-solid fa-diamond"></i>
                <i class="fa-solid fa-diamond"></i>
                <i class="fa-solid fa-diamond"></i>
                <i class="fa-solid fa-diamond"></i>
            </span>

            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-3 w-100 barbers-info">
                <div class="col">
                    <img src="{{ asset('home') }}/img/Barbers/barber1.jpg" alt="img" class="img-fluid">

                    <div class="intro">

                        <div class="d-flex barbers-social">
                            <div><i class="fa fa-facebook" aria-hidden="true"></i></div>
                            <div><i class="fa fa-twitter" aria-hidden="true"></i></div>
                            <div><i class="fa fa-google-plus" aria-hidden="true"></i></div>
                        </div>


                    </div>
                    <div class="barber-name">
                        <h3>Mr. JHON</h3>
                    </div>
                </div>
                <div class="col">
                    <img src="{{ asset('home') }}/img/Barbers/barber2.jpg" alt="img" class="img-fluid">
                    <div class="intro">

                        <div class="d-flex barbers-social">
                            <div><i class="fa fa-facebook" aria-hidden="true"></i></div>
                            <div><i class="fa fa-twitter" aria-hidden="true"></i></div>
                            <div><i class="fa fa-google-plus" aria-hidden="true"></i></div>
                        </div>


                    </div>
                    <div class="barber-name">
                        <h3>Mr. KANE</h3>
                    </div>
                </div>
                <div class="col">
                    <img src="{{ asset('home') }}/img/Barbers/barber3.jpg" alt="img" class="img-fluid">
                    <div class="intro">

                        <div class="d-flex barbers-social">
                            <div><i class="fa fa-facebook" aria-hidden="true"></i></div>
                            <div><i class="fa fa-twitter" aria-hidden="true"></i></div>
                            <div><i class="fa fa-google-plus" aria-hidden="true"></i></div>
                        </div>


                    </div>
                    <div class="barber-name">
                        <h3>Mr. KHAN</h3>
                    </div>
                </div>

            </div>
        </section>

        <!-- gallery section  -->
        <section class="gallery mx-4" id="gallery">
            <h5 class="text-center">Gallery</h5>
            <span class="d-block mb-5 text-center">
                <i class="fa-solid fa-diamond"></i>
                <i class="fa-solid fa-diamond"></i>
                <i class="fa-solid fa-diamond"></i>
                <i class="fa-solid fa-diamond"></i>
            </span>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 w-100 g-0">
                <div class="col"><img src="{{ asset('home') }}/img/Gallery/1.jpg" class="img-fluid" alt="img"></div>
                <div class="col"><img src="{{ asset('home') }}/img/Gallery/2.jpg" class="img-fluid" alt="img"></div>
                <div class="col"><img src="{{ asset('home') }}/img/Gallery/3.jpg" class="img-fluid" alt="img"></div>
                <div class="col"><img src="{{ asset('home') }}/img/Gallery/4.jpg" class="img-fluid" alt="img"></div>
                <div class="col"><img src="{{ asset('home') }}/img/Gallery/5.jpg" class="img-fluid" alt="img"></div>
                <div class="col"><img src="{{ asset('home') }}/img/Gallery/6.jpg" class="img-fluid" alt="img"></div>
            </div>
        </section>
    </main>

    <!-- footer part  -->

    <footer class="">
        <section class="footer-upper d-flex align-items-center">
            <div
                class="row row-cols-1 row-cols-md-2 row-cols-lg-3 w-100 align-items-center justify-content-center mx-4">
                <div class="col contact">
                    <img src="{{ asset('home') }}/img/Logo/Logo.png" class="img-fluid" alt="logo">
                    <p>698/1, barber street, dhaka, 1236</p>
                    <p> <span>Phone:</span> +8801325667987</p>
                    <p class="mb-5"> <span>Email:</span> barbershop@gmail.com</p>

                    <div class="social-media d-flex justify-content-between">
                        <div><i class="fa fa-facebook" aria-hidden="true"></i></div>
                        <div><i class="fa fa-twitter" aria-hidden="true"></i></div>
                        <div><i class="fa fa-google-plus" aria-hidden="true"></i></div>
                        <div><i class="fa fa-youtube" aria-hidden="true"></i></div>
                        <div><i class="fa fa-skype" aria-hidden="true"></i></div>
                        <div><i class="fa fa-linkedin" aria-hidden="true"></i></div>
                    </div>
                </div>
                <div class="col working-hours p-5">
                    <h5 class="mb-4">WORKING HOURS</h5>
                    <p class="mb-3 week-day">SATARDAY - THURSDAY</p>
                    <p>8.00 AM - 12.00 AM</p>

                    <p class="mb-3 week-day">FRIDAY</p>
                    <p>8.00 AM - 12.00 PM</p>
                </div>
                <div class="col subscribe">
                    <p>GET IN TOUCH</p>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Enter your email"
                            aria-label="Recipient's username" aria-describedby="button-addon2">
                        <button class="btn btn-outline-secondary" type="button" id="button-addon2">Subscribe</button>
                    </div>
                </div>
            </div>
        </section>

        <section class="footer-bottom d-flex justify-content-center align-items-center">
            <p>Copyright@2023. All Rights Reserved</p>
        </section>
    </footer>


    <!-- bootstrap js  -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V"
        crossorigin="anonymous"></script>

    <script>
        var nav = document.querySelector('nav');
        window.addEventListener('scroll', function () {
            if (window.pageYOffset > 200) {
                nav.classList.remove('bg-transparent');
                nav.classList.add('transparent-background');
            } else {
                nav.classList.remove('transparent-background');
                nav.classList.add('bg-transparent');
            }
        })
    </script>
</body>

</html>
