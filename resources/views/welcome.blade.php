<div class="py-12">
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>WasteManager - Home</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="{{ asset('assets/favicon.ico') }}" />
        <!-- Bootstrap Icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <!-- SimpleLightbox plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('import/assets/css/styles.css') }}" rel="stylesheet" />
        <style>
            .login-register-links a {
                color: #fff;
                transition: color 0.3s;
            }

            .login-register-links a:hover {
                color: #b5b5b5;
            }
        </style>
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#page-top">WasteManager</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10 login-register-links">
                        @auth
                            <a href="{{ url('/dashboard') }}" class="font-semibold text-white hover:text-gray-300">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="font-semibold text-white hover:text-gray-300">Log in</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="ml-4 font-semibold text-white hover:text-gray-300">Register</a>
                            @endif
                        @endauth
                    </div>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header style="background-color:#497e92" class="masthead">
            <div class="container px-4 px-lg-5 h-100">
                <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-8 align-self-end">
                        <h1 class="text-white font-weight-bold">Welcome to WasteManager</h1>
                        <hr class="divider" />
                    </div>
                    <div class="col-lg-8 align-self-baseline">
                        <p class="text-white-75 mb-5">Manage your waste collection and scheduling with ease. WasteManager simplifies the process and helps you keep your environment clean.</p>
                        <a class="btn btn-primary btn-xl" href="#about">Learn More</a>
                    </div>
                </div>
            </div>
        </header>
        <!-- About-->
        <section class="page-section bg-primary" id="about">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="text-white mt-0">We've got what you need!</h2>
                        <hr class="divider divider-light" />
                        <p class="text-white-75 mb-4">WasteManager has everything you need to efficiently manage waste collection and scheduling. Our platform simplifies the process and helps you keep your environment clean.</p>
                        <a class="btn btn-light btn-xl" href="#services">Get Started!</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container px-4 px-lg-5">
                <h2 class="text-center mt-0">Our Services</h2>
                <hr class="divider" />
                <div class="row gx-4 gx-lg-5">
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2"><i class="bi-gem fs-1 text-primary"></i></div>
                            <h3 class="h4 mb-2">Waste Collection</h3>
                            <p class="text-muted mb-0">Efficient waste collection services to keep your surroundings clean and hygienic.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2"><i class="bi-laptop fs-1 text-primary"></i></div>
                            <h3 class="h4 mb-2">Scheduling</h3>
                            <p class="text-muted mb-0">Convenient waste collection scheduling to fit your needs and preferences.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2"><i class="bi-globe fs-1 text-primary"></i></div>
                            <h3 class="h4 mb-2">Environmentally Friendly</h3>
                            <p class="text-muted mb-0">We prioritize eco-friendly waste management practices for a sustainable future.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2"><i class="bi-heart fs-1 text-primary"></i></div>
                            <h3 class="h4 mb-2">Customer Satisfaction</h3>
                            <p class="text-muted mb-0">We strive to provide excellent service and ensure customer satisfaction.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Portfolio-->
        <div id="portfolio">
            <div class="container-fluid p-0">
                <div class="row g-0">
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="{{ ('import/assets/img/portfolio/fullsize/1.jpg') }}" title="Project Name">
                            <img class="img-fluid" src="{{ ('import/assets/img/portfolio/thumbnails/1.jpg') }}" alt="..." />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Category</div>
                                <div class="project-name">Project Name</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="{{ ('import/assets/img/portfolio/fullsize/11.png') }}" title="Project Name">
                            <img class="img-fluid" src="{{ ('import/assets/img/portfolio/thumbnails/11.png') }}" alt="..." />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Category</div>
                                <div class="project-name">Project Name</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="{{ ('import/assets/img/portfolio/fullsize/10.png') }}" title="Project Name">
                            <img class="img-fluid" src="{{ ('import/assets/img/portfolio/thumbnails/10.png') }}" alt="..." />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Category</div>
                                <div class="project-name">Project Name</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="{{ ('import/assets/img/portfolio/fullsize/9.png') }}" title="Project Name">
                            <img class="img-fluid" src="{{ ('import/assets/img/portfolio/thumbnails/9.png') }}" alt="..." />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Category</div>
                                <div class="project-name">Project Name</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="{{ ('import/assets/img/portfolio/fullsize/8.png') }}" title="Project Name">
                            <img class="img-fluid" src="{{ ('import/assets/img/portfolio/thumbnails/8.png') }}" alt="..." />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Category</div>
                                <div class="project-name">Project Name</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="{{ ('import/assets/img/portfolio/fullsize/7.png') }}" title="Project Name">
                            <img class="img-fluid" src="{{ ('import/assets/img/portfolio/thumbnails/7.png') }}" alt="..." />
                            <div class="portfolio-box-caption p-3">
                                <div class="project-category text-white-50">Category</div>
                                <div class="project-name">Project Name</div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Call to action-->
        <section class="page-section bg-dark text-white">
            <div class="container px-4 px-lg-5 text-center">
                <h2 class="mb-4">Start Managing Waste with WasteManager!</h2>
                <a class="btn btn-light btn-xl" href="https://startbootstrap.com/theme/creative/">Get Started</a>
            </div>
        </section>
        <!-- Contact-->
        <!-- Footer -->
        <footer class="bg-gray-800 text-black py-4">
            <div class="container mx-auto text-center">
                <p>&copy; 2023 WasteManager. All rights reserved.</p>
            </div>
        </footer>
    </body>
    </html>
</div>
