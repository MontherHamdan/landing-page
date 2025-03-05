<!doctype html>
<html lang="en" dir="ltr" data-bs-theme="light">

<head>

    <meta charset="utf-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <title>Quazm - Landing Page Templates</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="BullTheme">    
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.svg">

    <!-- Icons Css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/icons.min.css') }}">
    <!-- Bootstrap Css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}" id="bootstrap-style">
    <!-- App Css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/app.min.css') }}" id="app-style">
    <!-- Custom Css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/custom.min.css') }}">


</head>

<body>

    <!-- Header start -->
    <header class="page-header">
        <nav class="navbar fixed-top navbar-expand-lg py-3">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img class="img-fluid" src="{{ asset('assets/images/logo-light.svg') }}" width="120"  id="light-logo"  alt="light-logo">
                </a>
                <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation"> <i class="fa-solid fa-bars fs-5 text-white"></i> </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link active fw-semibold" aria-current="page" href="#section-home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-semibold" href="#section-services">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-semibold" href="#section-portfolio">Portfolio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-semibold" href="#section-team">Team</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-semibold" href="#section-pricing">Pricing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-semibold" href="#section-blog">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-semibold me-0" href="#section-contact">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- Header end -->

    <main class="page-main" data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="50">

        <!-- Hero start -->
        <section id="section-home"
            class="hero-sec position-relative z-1 section-py d-flex align-items-center justify-content-center bg-img"
            data-background="{{ asset('assets/images/home.jpg') }}">
            <div class="container">
                <div class="row h-100 justify-content-center text-center align-items-center">
                    <div class="col-lg-6 col-auto">
                        <h1 class="text-white">We help startups launch their products</h1>
                        <p class="text-white"> We specialize in guiding startups through the product launch process, offering expertise and support to turn innovative ideas into successful products.</p>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#videoModal">
                            <i class="fa-regular fa-circle-play display-5 text-primary"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Hero end -->

        <!-- Video Modal -->
        <div class="modal fade" id="videoModal" tabindex="-1"  aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-body p-0">
                        <div class="ratio ratio-16x9">
                            <iframe src="http://player.vimeo.com/video/99025203?autoplay=1" title="Video Modal" allowfullscreen></iframe>
                          </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Chooseus start -->
        <section class="section-py bg-light choose" id="chooseuo1">
            <div class="container">
                <div class="row gy-4 justify-content-center align-items-center">
                    <div class="col-lg-6 order-lg-1 order-2 pe-lg-4">
                        <h2>Why <span class="text-primary">Choose Us</span></h2>
                        {{-- <p>Choose Us for innovative solutions and unmatched dedication. Our team delivers exceptional quality and personalized service.</p> --}}
                        <div class="row g-4 mt-5">
                            <div class="col-sm-6">
                                <div class="choose-box h-100 rounded-2 p-4">
                                    <h5><i class="fa-regular fa-circle-check"></i> Expertise You Can Trust</h5>
                                    <small>With years of experience, we deliver top-notch services with precision and professionalism.</small>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="choose-box h-100 rounded-2 p-4">
                                    <h5><i class="fa-regular fa-circle-check"></i> Commitment to Safety</h5>
                                    <small>Safety is our priority, ensuring every project is executed with the highest standards.</small>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="choose-box h-100 rounded-2 p-4">
                                    <h5><i class="fa-regular fa-circle-check"></i> Customized Solution</h5>
                                    <small>We tailor our services to meet your unique needs, ensuring satisfaction every time.</small>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="choose-box h-100 rounded-2 p-4">
                                    <h5><i class="fa-regular fa-circle-check"></i> Reliability</h5>
                                    <small> Count on us to be punctual, efficient, and committed to exceeding expectations.</small>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="choose-box h-100 rounded-2 p-4">
                                    <h5><i class="fa-regular fa-circle-check"></i> Comprehensive Services</h5>
                                    <small> From traffic control to cleaning, we offer a one-stop solution for all your project needs..</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 text-lg-end order-lg-2 order-1 text-center">
                         <div class="row align-items-center g-4">
                            <div class="col-6">
                                <img class="rounded-2 img-fluid" src="{{ asset('assets/images/about/ab01.jpg') }}" alt="Chooseus img">
                            </div>
                            <div class="col-6">
                                <div class="row g-4">
                                    <div class="col-12">
                                        <img class="rounded-2 img-fluid" src="assets/images/about/ab02.jpg" alt="Chooseus img">
                                    </div>
                                    <div class="col-12">
                                        <img class="rounded-2 img-fluid" src="assets/images/about/ab03.jpg" alt="Chooseus img">
                                    </div>
                                </div>
                            </div>
                         </div>
                    </div> 
                </div>
            </div>
        </section>
        <!-- Chooseus end -->

        <!-- Servies start -->
        <section class="section-py blog pb-0" id="section-services">
            <div class="container">
                <div class="row text-center justify-content-center">
                    <div class="col-lg-6 col-auto">
                        <h2>Our <span class="text-primary">Services</span></h2>
                        <p>Transforming Challenges into Seamless Solutions</p>
                    </div>
                </div>
                <div class="row mt-5 gy-4 justify-content-center row-cols-lg-3 row-cols-md-2">
                    <div>
                        <div class="blog-card position-relative rounded-3">
                            <img src="{{ asset('assets/images/blog/blog-img1.jpg') }}" class="img-fluid rounded-top-2" alt="blog1">
                            <div class="p-4">
                                {{-- <div class="date position-absolute top-0 start-0 m-4 rounded-2 d-flex align-items-center justify-content-center bg-primary">
                                    <span class="text-white p-2 text-center">30 May</span>
                                </div> --}}
                                <div class="blog-footer">
                                    {{-- <div class="d-flex">
                                        <small class="me-2"><i class="fa-regular fa-user me-1"></i> By Admin</small>
                                        <small><i class="fa-regular fa-comments me-1"></i> Comments(05)</small>
                                    </div> --}}
                                    <h5 class="mt-3"><a href="#" class="text-decoration-none">Traffic Control</a></h5>
                                    <p>Ensure smooth and safe traffic flow with professional traffic management solutions, minimizing disruptions and maintaining safety on-site.</p>
                                    {{-- <a href="#" class="small text-decoration-none d-inline-block">Read More <i class="fa-solid fa-arrow-right small ms-2"></i></a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="blog-card position-relative rounded-3">
                            <img src="{{ asset('assets/images/blog/blog-img2.jpg') }}" class="img-fluid rounded-top-2" alt="blog2">
                            <div class="p-4">
                                <div class="blog-footer">
                                    <h5 class="mt-3"><a href="#" class="text-decoration-none">Demolition</a></h5>
                                    <p>Expert demolition services for residential, commercial, and industrial projects, providing efficient and precise removal while prioritizing safety and sustainability.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="blog-card position-relative rounded-3">
                            <img src="{{ asset('assets/images/blog/blog-img3.jpg') }}" class="img-fluid rounded-top-2" alt="blog3">
                            <div class="p-4">
                                <div class="blog-footer">
                                    <h5 class="mt-3"><a class="text-decoration-none">Concrete Polishing</a></h5>
                                    <p>Transform concrete surfaces into sleek, durable, and low-maintenance finishes with our advanced concrete polishing techniques, perfect for enhancing any space.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="blog-card position-relative rounded-3">
                            <img src="{{ asset('assets/images/blog/blog-img3.jpg') }}" class="img-fluid rounded-top-2" alt="blog4">
                            <div class="p-4">
                                <div class="blog-footer">
                                    <h5 class="mt-3"><a class="text-decoration-none">Cleaning</a></h5>
                                    <p>Comprehensive cleaning services tailored to meet your needs, delivering spotless results for residential, commercial, or construction sites.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- Servies end -->

        <!-- Portfolio start -->
        <section class="section-py portfolio" id="section-portfolio">
            <div class="container">
                <div class="row justify-content-center text-center mb-5">
                    <div class="col-lg-8">
                        <h2>Our <span class="text-primary">portfolio</span></h2>
                        <p>Branding and web design</p>
                    </div>
                </div>
                <div class="row g-4 justify-content-center mt-5">
                    <div class="col-lg-4 col-md-6">
                        <div class="portfolio-card rounded-2">
                            <div class="portfolio-inner overflow-hidden position-relative rounded-2">
                                <a href="#"><img src="{{ asset('assets/images/portfolio/portfolio1.webp') }}" class="img-fluid w-100 object-fit-cover rounded-2" alt="portfolio1-img"></a>  
                                <div class="portfolio-details position-absolute rounded-2 d-flex justify-content-center text-center align-items-center">
                                    <h5 class="text-primary">Visionary Portfolio</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="portfolio-card">
                            <div class="portfolio-inner overflow-hidden position-relative rounded-2">
                                <a href="#"><img src="{{ asset('assets/images/portfolio/portfolio2.webp') }}" class="img-fluid w-100 object-fit-cover rounded-2" alt="portfolio2-img"></a>
                                <div class="portfolio-details position-absolute rounded-2 d-flex justify-content-center text-center align-items-center">
                                    <h5 class="text-primary">Contemporary Design</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="portfolio-card">
                            <div class="portfolio-inner overflow-hidden position-relative rounded-2">
                                <a href="#"><img src="{{ asset('assets/images/portfolio/portfolio3.webp') }}" class="img-fluid w-100 object-fit-cover rounded-2" alt="portfolio3-img"></a> 
                                <div class="portfolio-details position-absolute rounded-2 d-flex justify-content-center text-center align-items-center">
                                    <h5 class="text-primary">Creative Showcase</h5>
                                </div>                    
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="portfolio-card">
                            <div class="portfolio-inner overflow-hidden position-relative rounded-2">
                                <a href="#"><img src="{{ asset('assets/images/portfolio/portfolio4.webp') }}" class="img-fluid w-100 object-fit-cover rounded-2" alt="portfolio4-img"></a>
                                <div class="portfolio-details position-absolute rounded-2 d-flex justify-content-center text-center align-items-center">
                                    <h5 class="text-primary">Creative Gallery</h5>
                                </div>        
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="portfolio-card">
                            <div class="portfolio-inner overflow-hidden position-relative rounded-2">
                                <a href="#"><img src="{{ asset('assets/images/portfolio/portfolio5.webp') }}" class="img-fluid w-100 object-fit-cover rounded-2" alt="portfolio5-img"></a>
                                <div class="portfolio-details position-absolute rounded-2 d-flex justify-content-center text-center align-items-center">
                                    <h5 class="text-primary">Dynamic Design</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Portfolio end -->

        <!-- Team start -->
        <section class="section-py team bg-light" id="section-team">
            <div class="container">
                <div class="row text-center justify-content-center">
                    <div class="col-lg-6 col-auto">
                        <h2>Our <span class="text-primary">Team</span></h2>
                        <p>Our power of choice is untrammelled and when nothing preven tsbeing able to do what we like best every pleasure.</p>
                    </div>
                </div>
                <div class="row g-4 mt-5">
                    <div class="col-lg-3 col-sm-6">
                        <div class="rounded-2 team-card overflow-hidden border position-relative">
                            <div class="team-img overflow-hidden">
                                <img src="{{ asset('assets/images/team/team_01.png') }}" class="img-fluid rounded-2 JoneCooper" alt="Jone Cooper img">
                            </div>
                            <div class="p-4">
                                <h5 class="mb-1">Jone Cooper</h5>
                                <span>Finance Advisor</span>
                            </div>
                            <div class="position-absolute team-icons d-flex flex-column justify-content-center align-items-center rounded-2 p-2 top-0 bg-primary">
                                <a href="#"><i class="fa-brands text-white fa-facebook-f"></i></a>
                                <a href="#"><i class="fa-brands text-white fa-twitter"></i></a>
                                <a href="#"><i class="fa-brands text-white fa-instagram"></i></a>
                                <a href="#"><i class="fa-brands text-white fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="rounded-2 team-card border position-relative overflow-hidden">
                            <div class="team-img overflow-hidden">
                                <img src="{{ asset('assets/images/team/team_img02.jpg') }}" class="img-fluid rounded-2" alt="Eleanor Pena img">
                            </div>
                            <div class="p-4">
                                <h5 class="mb-1">Eleanor Pena</h5>
                                <span>Digital Marketing</span>
                            </div>
                            <div class="position-absolute team-icons d-flex flex-column justify-content-center align-items-center rounded-2 p-2 top-0 bg-primary">
                                <a href="#"><i class="fa-brands text-white fa-facebook-f"></i></a>
                                <a href="#"><i class="fa-brands text-white fa-twitter"></i></a>
                                <a href="#"><i class="fa-brands text-white fa-instagram"></i></a>
                                <a href="#"><i class="fa-brands text-white fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="rounded-2 team-card border position-relative overflow-hidden">
                            <div class="team-img overflow-hidden">
                                <img src="{{ asset('assets/images/team/team_img03.jpg') }}" class="img-fluid rounded-2" alt="Floyd Miles img">
                            </div>
                            <div class="p-4">
                                <h5 class="mb-1">Floyd Miles</h5>
                                <span>UI/UX Design</span>
                            </div>
                            <div class="position-absolute team-icons d-flex flex-column justify-content-center align-items-center rounded-2 p-2 top-0 bg-primary">
                                <a href="#"><i class="fa-brands text-white fa-facebook-f"></i></a>
                                <a href="#"><i class="fa-brands text-white fa-twitter"></i></a>
                                <a href="#"><i class="fa-brands text-white fa-instagram"></i></a>
                                <a href="#"><i class="fa-brands text-white fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="rounded-2 team-card border position-relative overflow-hidden">
                            <div class="team-img overflow-hidden">
                                <img src="{{ asset('assets/images/team/team_img04.jpg') }}" class="img-fluid rounded-2" alt="Ralph Edwar img">
                            </div>
                            <div class="p-4">
                                <h5 class="mb-1">Ralph Edwar</h5>
                                <span>Graphic Design</span>
                            </div>
                            <div class="position-absolute team-icons d-flex flex-column justify-content-center align-items-center rounded-2 p-2 top-0 bg-primary">
                                <a href="#"><i class="fa-brands text-white fa-facebook-f"></i></a>
                                <a href="#"><i class="fa-brands text-white fa-twitter"></i></a>
                                <a href="#"><i class="fa-brands text-white fa-instagram"></i></a>
                                <a href="#"><i class="fa-brands text-white fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Team start -->

        <!-- Pricing start -->
        <section id="section-pricing" class="section-py pricing">
            <div class="container">
                <div class="row text-center justify-content-center">
                    <div class="col-lg-6 col-auto">
                        <h2>Our <span class="text-primary">Pricing</span></h2>
                        <p>Implementing the strategy with precision, leveraging our expertise in design, development, and marketing.</p>
                    </div>
                </div>
                <div class="row mt-5 g-4 justify-content-center">
                    <div class="col-lg-4 col-md-6">
                        <div class="border px-4 py-5 rounded-2">
                            <h2 class="display-5 fw-bold m-md-0 mb-4">$49<small class="fs-6 ">/month</small></h2>
                            <h3 class="mb-4">Starter Pack</h3>
                            <p>Ideal for individuals or small teams, the Basic Plan offers essential features and functionality at an affordable price Includes core</p>
                            <ul class="list-unstyled">
                                <li class=" mb-3"><i class="fa-regular fa-circle-check me-3 text-primary"></i> 10 GB Disk Space</li>
                                <li class=" mb-3"><i class="fa-regular fa-circle-check me-3 text-primary"></i> 15 Domain Names</li>
                                <li class=" mb-3"><i class="fa-regular fa-circle-xmark me-3 text-danger"></i> 4 Email Address</li>
                                <li class=""><i class="fa-regular fa-circle-xmark me-3 text-danger"></i> Enhanced Security</li>
                            </ul>
                            <a href="#" class="btn btn-primary mb-sm-0 mb-4 d-block d-sm-inline-block">Select Plan <i class="fa-solid fa-arrow-right-long ms-1"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="border px-4 py-5  rounded-2">
                            <h2 class="display-5 fw-bold  m-md-0 mb-4">$79<small class="fs-6 ">/month</small></h2>
                            <h3 class="mb-4">Premium Access</h3>
                            <p>Premium Access provides exclusive features and content for a more enhanced experience. Enjoy ad-free browsing, early access</p>
                            <ul class="list-unstyled">
                                <li class=" mb-3"><i class="fa-regular fa-circle-check me-3 text-primary"></i> 10 GB Disk Space</li>
                                <li class=" mb-3"><i class="fa-regular fa-circle-check me-3 text-primary"></i> 15 Domain Names</li>
                                <li class=" mb-3"><i class="fa-regular fa-circle-check me-3 text-primary"></i> 4 Email Address</li>
                                <li class=""><i class="fa-regular fa-circle-xmark me-3 text-danger"></i> Enhanced Security</li>
                            </ul>
                            <a href="#" class="btn btn-primary mb-sm-0 mb-4 d-block d-sm-inline-block">Select Plan <i class="fa-solid fa-arrow-right-long ms-1"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="border px-4 py-5  rounded-2">
                            <h2 class="display-5 fw-bold m-md-0 mb-4">$99<small class="fs-6 ">/month</small></h2>
                            <h3 class="mb-4">Elite Plan</h3>
                            <p>The Elite Plan offers the ultimate experience with a range of premium features designed for those who want more features Enjoy all the</p>
                            <ul class="list-unstyled">
                                <li class=" mb-3"><i class="fa-regular fa-circle-check me-3 text-primary"></i> 10 GB Disk Space</li>
                                <li class=" mb-3"><i class="fa-regular fa-circle-check me-3 text-primary"></i> 15 Domain Names</li>
                                <li class=" mb-3"><i class="fa-regular fa-circle-check me-3 text-primary"></i> 4 Email Address</li>
                                <li class=""><i class="fa-regular fa-circle-check me-3 text-primary"></i> Enhanced Security</li>
                            </ul>
                            <a href="#" class="btn btn-primary mb-sm-0 mb-4 d-block d-sm-inline-block">Select Plan <i class="fa-solid fa-arrow-right-long ms-1"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Pricing end -->

        <!-- Process start -->
        <section class="section-py process">
            <div class="container">
                <div class="row text-center justify-content-center">
                    <div class="col-lg-6 col-auto">
                        <h2>Our <span class="text-primary">Process</span></h2>
                        <p>Explore the structured approach we take to turn ideas into impactful results. Our process is designed
                            to ensure clarity, collaboration.</p>
                    </div>
                </div>
                <div class="row process-line position-relative mt-5  row-cols-xxl-4 row-cols-md-2">
                    <div class="pt-5">
                        <div class="process-box position-relative active rounded-2">
                            <div class="inner position-absolute h-100 top-0 start-0  d-flex flex-column justify-content-center">
                                <span>01</span>
                                <h5 class="mb-4"> Ideas </h5>
                                <small>We foster an environment where creativity thrives, Our team employs
                                    brainstorming.</small>
                            </div>
                            <div class="process-bg">
                                <img src="{{ asset('assets/images/process/process1.jpg') }}" class="img-fluid rounded-2 w-100" alt="Ideas">
                            </div>
                        </div>
                    </div>
                    <div class="pt-5">
                        <div class="process-box position-relative rounded-2">
                            <div
                                class="inner h-100 two position-absolute top-0 start-0  d-flex flex-column justify-content-center">
                                <span>02</span>
                                <h5 class="mb-4"> Planning </h5>
                                <small>Our planning process includes a thorough analysis of your current situation.</small>
                            </div>
                            <div class="process-bg ">
                                <img src="{{ asset('assets/images/process/process2.jpg') }}" class="img-fluid rounded-2 w-100" alt="Planning">
                            </div>
                        </div>
                    </div>
                    <div class="pt-5">
                        <div class="process-box position-relative">
                            <div
                                class="inner three h-100 two position-absolute top-0 start-0  d-flex flex-column justify-content-center">
                                <span>03</span>
                                <h5 class="mb-4"> Development </h5>
                                <small>We tailor our development efforts to address your unique requirements.</small>
                            </div>
                            <div class="process-bg">
                                <img src="{{ asset('assets/images/process/process3.jpg') }}" class="img-fluid rounded-2 w-100" alt="Development">
                            </div>
                        </div>
                    </div>
                    <div class="pt-5">
                        <div class="process-box position-relative">
                            <div
                                class="inner four h-100 two position-absolute top-0 start-0  d-flex flex-column justify-content-center">
                                <span>04</span>
                                <h5 class="mb-4"> Testing </h5>
                                <small>Learn essential strategies and tools to fortify your business against evolving cyber
                                    threats.</small>
                            </div>
                            <div class="process-bg">
                                <img src="{{ asset('assets/images/process/process4.jpg') }}" class="img-fluid rounded-2 w-100" alt="Testing">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Process end -->

        <!-- About start -->
        <section class="section-py about bg-light pb-0" id="about">
            <div class="container">
                <div class="row g-4 justify-content-center align-items-center">
                    <div class="col-lg-6">
                        <img src="{{ asset('assets/images/about02.jpg') }}" class="img-fluid rounded-2" alt="aboutimg">
                    </div>
                    <div class="col-lg-6 ps-lg-5">
                        <h2>Simply Know <span class="text-primary">About</span></h2>
                        <p class="mb-0">We successfully cope with tasks of varying complexityprovide longerty term guarantees and regularly master new Practice Area technol ogiesOur portfolio includes dozen</p>
                        <div class="d-flex flex-wrap gap-5 align-items-center mt-5">
                            <div class="d-flex align-items-center">
                                <i class="fa-solid fa-pen-nib text-primary fs-4"></i>
                                <div class="ms-4">
                                    <h5>Web Design</h5>
                                    <p class="m-0">A creative web designer</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center">
                                <i class="fa-solid fa-code text-primary fs-4"></i>
                                <div class="ms-4">
                                    <h5>Development</h5>
                                    <p class="m-0">A creative web Developer</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center w-100">
                                <div>
                                    <img src="{{ asset('assets/images/testimonial/testimonial1.jpg') }}" class="img-fluid rounded-circle w-25" alt="Martinaze">
                                    <span class="ms-2">Martinaze , CEO</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About end -->

        <!-- Misson start -->
        <section class="section-py misson bg-light">
            <div class="container">
                <div class="row text-center justify-content-center align-items-center">
                    <div class="mb-5 col-auto">
                        <h2>Our <span class="text-primary">Mission</span></h2>
                        <p>Our Commitment to Your Success</p>
                    </div>
                </div>
                <div class="row justify-content-center align-items-center mt-5">
                    <div class="col-lg-6 order-lg-1 order-2 mt-lg-0 mt-5 pe-lg-5">
                        <p>We’re full service which means we’ve got you covered on design and content right through to digital. You’ll form a lasting relationship with us, collaboration is central to everything we do. We’ll push you out of your comfort zone from time, but this is where you’ll shine. Bottom line is we want you to succeed at Faculty.</p>
                        <p>You’ll form a lasting relationship with us, collaboration is central to everything we do. We’ll push you out of your comfort zone from time-to-time, but this is where you’ll shine. Bottom line is we want you to succeed at Faculty. You’ll form a lasting relationship with us, collaboration is central to everything we do. We’ll push you out of your comfort zone from time-to-time, but this is where you’ll shine. Bottom line is we want you to succeed at Faculty.</p>
                    </div>
                    <div class="col-lg-6 order-lg-2 order-1">
                        <img class="img-fluid rounded-2" src="{{ asset('assets/images/misson01.jpg') }}" alt="Our Mission img">
                    </div>
                </div>
            </div>
        </section>
        <!-- Misson end -->

        <!-- Testimonial start -->
        <section class="section-py pb-0 testimonials">
            <div class="container">
                <div class="row text-center justify-content-center">
                    <div class="col-lg-6 col-auto">
                        <h2 class="text-primary">Testimonials</h2>
                        <p>What our customer’s say about our company</p>
                    </div>
                </div>
                <div class="row mt-5 g-4 justify-content-center">
                    <div class="col-lg-4">
                        <div class=" testimonials-card rounded-2 p-3">
                            <div class="dash rounded-2 p-3">
                                <img src="{{ asset('assets/images/darkicon1.svg') }}" class="mb-4" alt="darkicon1">
                                <blockquote>“Until recently, the prevailing view assumed lorem ipsum was born as a nonsense
                                    text. It's not Latin though it looks like it, and it actually says nothing.”</blockquote>
                                <div>
                                    <i class="fa-solid  fa-star text-warning"></i>
                                    <i class="fa-solid  fa-star text-warning"></i>
                                    <i class="fa-solid  fa-star text-warning"></i>
                                    <i class="fa-solid  fa-star text-warning"></i>
                                    <i class="fa-regular fa-star text-warning"></i>
                                </div>
                                <div class="d-flex align-items-center testimonials-name mt-4">
                                    <img src="{{ asset('assets/images/testimonial/testimonial1.jpg') }}" class="img-fluid rounded-circle" alt="Robert Frost img">
                                    <div class="ms-3">
                                        <h5 class="m-0 ">Robert Frost</h5>
                                        <span>Lead Designer</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class=" testimonials-card rounded-2 p-3">
                            <div class="dash rounded-2 p-3">
                                <img src="{{ asset('assets/images/darkicon2.svg') }}" class="mb-4" alt="darkicon2">
                                <blockquote>“Until recently, the prevailing view assumed lorem ipsum was born as a nonsense
                                    text. It's not Latin though it looks like it, and it actually says nothing.”</blockquote>
                                <div>
                                    <i class="fa-solid  fa-star text-warning"></i>
                                    <i class="fa-solid  fa-star text-warning"></i>
                                    <i class="fa-solid  fa-star text-warning"></i>
                                    <i class="fa-solid  fa-star text-warning"></i>
                                    <i class="fa-regular fa-star text-warning"></i>
                                </div>
                                <div class="d-flex align-items-center testimonials-name mt-4">
                                    <img src="{{ asset('assets/images/testimonial/testimonial2.jpg') }}" class="img-fluid rounded-circle" alt="Sarah jon img">
                                    <div class="ms-3">
                                        <h5 class="m-0 ">Sarah jon</h5>
                                        <span>Developer</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class=" testimonials-card rounded-2 p-3">
                            <div class="dash rounded-2 p-3">
                                <img src="{{ asset('assets/images/darkicon3.svg') }}" class="mb-4" alt="darkicon3">
                                <blockquote>“Until recently, the prevailing view assumed lorem ipsum was born as a nonsense
                                    text. It's not Latin though it looks like it, and it actually says nothing.”</blockquote>
                                <div>
                                    <i class="fa-solid  fa-star text-warning"></i>
                                    <i class="fa-solid  fa-star text-warning"></i>
                                    <i class="fa-solid  fa-star text-warning"></i>
                                    <i class="fa-solid  fa-star text-warning"></i>
                                    <i class="fa-regular fa-star text-warning"></i>
                                </div>
                                <div class="d-flex align-items-center testimonials-name mt-4 mb-1">
                                    <img src="{{ asset('assets/images/testimonial/testimonial3.jpg') }}" class="img-fluid rounded-circle" alt="Melina sen img">
                                    <div class="ms-3">
                                        <h5 class="m-0 ">Melina sen</h5>
                                        <span>Developer</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class=" testimonials-card rounded-2 p-3">
                            <div class="dash rounded-2 p-3">
                                <img src="{{ asset('assets/images/darkicon4.svg') }}" class="mb-4" alt="darkicon4">
                                <blockquote>“Until recently, the prevailing view assumed lorem ipsum was born as a nonsense
                                    text. It's not Latin though it looks like it, and it actually says nothing.”</blockquote>
                                <div>
                                    <i class="fa-solid  fa-star text-warning"></i>
                                    <i class="fa-solid  fa-star text-warning"></i>
                                    <i class="fa-solid  fa-star text-warning"></i>
                                    <i class="fa-solid  fa-star text-warning"></i>
                                    <i class="fa-regular fa-star text-warning"></i>
                                </div>
                                <div class="d-flex align-items-center testimonials-name mt-4">
                                    <img src="{{ asset('assets/images/testimonial/testimonial4.jpg') }}" class="img-fluid rounded-circle" alt="Cody Fisher img">
                                    <div class="ms-3">
                                        <h5 class="m-0 ">Cody Fisher</h5>
                                        <span>UI Designer</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class=" testimonials-card rounded-2 p-3">
                            <div class="dash rounded-2 p-3">
                                <img src="{{ asset('assets/images/darkicon5.svg') }}" class="mb-4" alt="darkicon5">
                                <blockquote>“Until recently, the prevailing view assumed lorem ipsum was born as a nonsense
                                    text. It's not Latin though it looks like it, and it actually says nothing.”</blockquote>
                                <div>
                                    <i class="fa-solid  fa-star text-warning"></i>
                                    <i class="fa-solid  fa-star text-warning"></i>
                                    <i class="fa-solid  fa-star text-warning"></i>
                                    <i class="fa-solid  fa-star text-warning"></i>
                                    <i class="fa-regular fa-star text-warning"></i>
                                </div>
                                <div class="d-flex align-items-center testimonials-name mt-4">
                                    <img src="{{ asset('assets/images/testimonial/testimonial1.jpg') }}" class="img-fluid rounded-circle" alt="Guy Hawkins img">
                                    <div class="ms-3">
                                        <h5 class="m-0 ">Guy Hawkins</h5>
                                        <span>Developer</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Testimonial end -->

        <!-- Features start -->
        <section class="section-py features">
            <div class="container">
                <div class="row text-center justify-content-center">
                    <div class="col-lg-6 col-auto">
                        <h2>Our <span class="text-primary">Features</span></h2>
                        <p>Discover the key elements that set our projects apart. From innovative design to seamless functionality, explore how our features deliver</p>
                    </div>
                </div>
                <div class="row g-4 justify-content-center mt-5">
                    <div class="col-xl-4 col-md-6">
                        <div class="features-box p-4">
                            <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                                stroke-linejoin="round" class="h-14 w-14 text-default-950" height="1em" width="1em"
                                xmlns="{{ asset('http://www.w3.org/2000/svg') }}">
                                <path d="M5.5 8.5 9 12l-3.5 3.5L2 12l3.5-3.5Z"></path>
                                <path d="m12 2 3.5 3.5L12 9 8.5 5.5 12 2Z"></path>
                                <path d="M18.5 8.5 22 12l-3.5 3.5L15 12l3.5-3.5Z"></path>
                                <path d="m12 15 3.5 3.5L12 22l-3.5-3.5L12 15Z"></path>
                            </svg>
                            <h4 class="mt-4">Developer</h4>
                            <p>A skilled developer with expertise in crafting innovative solutions and building robust applications. Proficient in a range of programming</p>
                            <a href="#" class="text-decoration-none">Read More <i class="fa-solid fa-arrow-right-long ms-2"></i></a>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="features-box p-4">
                            <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                                stroke-linejoin="round" class="h-14 w-14 text-default-950" height="1em" width="1em"
                                xmlns="{{ asset('http://www.w3.org/2000/svg') }}">
                                <rect width="20" height="14" x="2" y="3" rx="2"></rect>
                                <line x1="8" x2="16" y1="21" y2="21"></line>
                                <line x1="12" x2="12" y1="17" y2="21"></line>
                            </svg>
                            <h4 class="mt-4">Web Design</h4>
                            <p>A creative web designer specializing in creating visually stunning and user-friendly websites.
                                Expertise in design principles, responsive layouts</p>
                            <a href="#" class="text-decoration-none">Read More <i class="fa-solid fa-arrow-right-long ms-2"></i></a>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="features-box p-4">
                            <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                                stroke-linejoin="round" class="h-14 w-14 text-default-950" height="1em" width="1em"
                                xmlns="{{ asset('http://www.w3.org/2000/svg') }}">
                                <polygon points="12 2 2 7 12 12 22 7 12 2"></polygon>
                                <polyline points="2 17 12 22 22 17"></polyline>
                                <polyline points="2 12 12 17 22 12"></polyline>
                            </svg>
                            <h4 class="mt-4">Digital Product Design</h4>
                            <p>A strategic digital product designer with a focus on creating intuitive and impactful user
                                experiences. Skilled in UX/UI design</p>
                            <a href="#" class="text-decoration-none">Read More <i class="fa-solid fa-arrow-right-long ms-2"></i></a>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="features-box p-4">
                            <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                                stroke-linejoin="round" class="h-14 w-14 text-default-950" height="1em" width="1em"
                                xmlns="{{ asset('http://www.w3.org/2000/svg') }}">
                                <rect width="7" height="7" x="3" y="3" rx="1"></rect>
                                <rect width="7" height="7" x="14" y="3" rx="1"></rect>
                                <rect width="7" height="7" x="14" y="14" rx="1"></rect>
                                <rect width="7" height="7" x="3" y="14" rx="1"></rect>
                            </svg>
                            <h4 class="mt-4">Branding & Design</h4>
                            <p>An expert in branding and design, adept at crafting compelling visual identities and cohesive
                                brand experiences Specializes in logo creation</p>
                            <a href="#" class="text-decoration-none">Read More <i class="fa-solid fa-arrow-right-long ms-2"></i></a>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="features-box p-4">
                            <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                                stroke-linejoin="round" class="h-14 w-14 text-default-950" height="1em" width="1em"
                                xmlns="{{ asset('http://www.w3.org/2000/svg') }}">
                                <path d="M5 5.5A3.5 3.5 0 0 1 8.5 2H12v7H8.5A3.5 3.5 0 0 1 5 5.5z"></path>
                                <path d="M12 2h4.5a3.5 3.5 0 1 1 0 7H12V2z"></path>
                                <path d="M12 12.5a3.5 3.5 0 1 1 7 0 3.5 3.5 0 1 1-7 0z"></path>
                                <path d="M5 19.5A3.5 3.5 0 0 1 8.5 16H12v3.5a3.5 3.5 0 1 1-7 0z"></path>
                                <path d="M5 12.5A3.5 3.5 0 0 1 8.5 9H12v7H8.5A3.5 3.5 0 0 1 5 12.5z"></path>
                            </svg>
                            <h4 class="mt-4">Ui/Ux & Design</h4>
                            <p>A dynamic UI/UX designer focused on creating seamless and visually appealing user experiences.
                                Expertise in user interface design logo creation</p>
                            <a href="#" class="text-decoration-none">Read More <i class="fa-solid fa-arrow-right-long ms-2"></i></a>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="features-box p-4">
                            <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                                stroke-linejoin="round" class="h-14 w-14 text-default-950" height="1em" width="1em"
                                xmlns="{{ asset('http://www.w3.org/2000/svg') }}">
                                <path
                                    d="M18.37 2.63 14 7l-1.59-1.59a2 2 0 0 0-2.82 0L8 7l9 9 1.59-1.59a2 2 0 0 0 0-2.82L17 10l4.37-4.37a2.12 2.12 0 1 0-3-3Z">
                                </path>
                                <path d="M9 8c-2 3-4 3.5-7 4l8 10c2-1 6-5 6-7"></path>
                                <path d="M14.5 17.5 4.5 15"></path>
                            </svg>
                            <h4 class="mt-4">Graphic Design</h4>
                            <p>A versatile graphic designer specializing in creating visually compelling graphics and visual communications Proficient in various design</p>
                            <a href="#" class="text-decoration-none ">Read More <i class="fa-solid fa-arrow-right-long ms-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Features end -->

        <!-- Getin start -->
        <section class="section-py getin bg-light position-relative z-2 mb-5 overflow-hidden">
            <div class="container">
                <div class="row align-items-center text-center justify-content-center">
                    <div class="col-lg-6 col-auto">
                        <h2 class="display-5 fw-bold text-white">Call To Enroll (+91)958423452</h2>
                        <a href="#section-contact" class="btn btn-primary mt-4">Join With us <i class="fa-solid fa-arrow-right-long ms-1"></i></a>
                    </div>
                </div>
            </div>
            <div class="position-absolute w-100 h-100 bg-img top-0 start-0">
                <img src="{{ asset('assets/images/geton01.jpg') }}" class="img-fluid object-fit-cover w-100 h-100" alt="getin img">
            </div>
        </section>
        <!-- Getin end -->
        
        <!-- Blog start -->
        <section class="section-py blog pb-0" id="section-blog">
            <div class="container">
                <div class="row text-center justify-content-center">
                    <div class="col-lg-6 col-auto">
                        <h2>Our <span class="text-primary">Blog</span></h2>
                        <p>Transforming Challenges into Seamless Solutions</p>
                    </div>
                </div>
                <div class="row mt-5 gy-4 justify-content-center row-cols-lg-3 row-cols-md-2">
                    <div>
                        <div class="blog-card position-relative rounded-3">
                            <img src="{{ asset('assets/images/blog/blog-img1.jpg') }}" class="img-fluid rounded-top-2" alt="blog1">
                            <div class="p-4">
                                <div class="date position-absolute top-0 start-0 m-4 rounded-2 d-flex align-items-center justify-content-center bg-primary">
                                    <span class="text-white p-2 text-center">30 May</span>
                                </div>
                                <div class="blog-footer">
                                    <div class="d-flex">
                                        <small class="me-2"><i class="fa-regular fa-user me-1"></i> By Admin</small>
                                        <small><i class="fa-regular fa-comments me-1"></i> Comments(05)</small>
                                    </div>
                                    <h5 class="mt-3"><a href="#" class="text-decoration-none">Innovate and Elevate</a></h5>
                                    <p>Explore the latest trends and innovations transforming [industry], and discover how to stay ahead of the curve.</p>
                                    <a href="#" class="small text-decoration-none d-inline-block">Read More <i class="fa-solid fa-arrow-right small ms-2"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="blog-card position-relative rounded-3">
                            <img src="{{ asset('assets/images/blog/blog-img2.jpg') }}" class="img-fluid rounded-top-2" alt="blog2">
                            <div class="p-4">
                                <div
                                    class="date position-absolute top-0 start-0 m-4 rounded-2 d-flex  align-items-center justify-content-center bg-primary">
                                    <span class="text-white p-2 text-center">25 Sep</span>
                                </div>
                                <div class="blog-footer">
                                    <div class="d-flex">
                                        <small class="me-2"><i class="fa-regular fa-user me-1"></i> By Admin</small>
                                        <small><i class="fa-regular fa-comments me-1"></i> Comments(05)</small>
                                    </div>
                                    <h5 class="mt-3"><a href="#" class="text-decoration-none">Expert Insights</a></h5>
                                    <p>Gain valuable insights from industry experts on effective strategies that drive success and growth</p>
                                    <a href="#" class="small text-decoration-none d-inline-block">Read More <i class="fa-solid fa-arrow-right small ms-2"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="blog-card position-relative rounded-3">
                            <img src="{{ asset('assets/images/blog/blog-img3.jpg') }}" class="img-fluid rounded-top-2" alt="blog3">
                            <div class="p-4">
                                <div
                                    class="date position-absolute top-0 start-0 m-4 rounded-2 d-flex  align-items-center justify-content-center bg-primary">
                                    <span class="text-white p-2 text-center">10 Aug</span>
                                </div>
                                <div class="blog-footer">
                                    <div class="d-flex">
                                        <small class="me-2"><i class="fa-regular fa-user me-1"></i> By Admin</small>
                                        <small><i class="fa-regular fa-comments me-1"></i> Comments(05)</small>
                                    </div>
                                    <h5 class="mt-3"><a href="#" class="text-decoration-none">Case Studies Uncovered</a></h5>
                                    <p>Dive into our case studies to see how we tackled challenges and delivered impactful results for our clients in</p>
                                    <a href="#" class="small text-decoration-none d-inline-block">Read More <i class="fa-solid fa-arrow-right small ms-2"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Blog end -->

        <!-- Contact start -->
        <section class="section-py contact" id="section-contact">
            <div class="container">
                <div class="row g-4 justify-content-between align-items-center">
                    <div class="col-lg-5">
                        <img src="{{ asset('assets/images/contactbg.jpg') }}" class="img-fluid rounded-2" alt="contactbg">
                    </div>
                    <div class="col-lg-7 ps-lg-5">
                        <div>
                            <h2 class="text-primary mb-5">Talk to us</h2>
                            <form class="needs-validation" novalidate>
                                <div class="row lables">
                                    <div class="col-md-6 mt-4 form-floating">
                                        <input type="text" class="form-control" placeholder="Name *" required>
                                        <div class="valid-feedback text-primary">
                                            Looks good!
                                        </div>
                                        <div class="invalid-feedback">
                                            Please fill the valid Name
                                        </div>
                                        <label class="fs-6 fw-semibold">Name <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-md-6 mt-4 form-floating">
                                        <input type="email" class="form-control" placeholder="Email *" required>
                                        <div class="valid-feedback text-primary">
                                            Looks good!
                                        </div>
                                        <div class="invalid-feedback">
                                            Please fill the valid Email
                                        </div>
                                        <label class="fs-6 fw-semibold">Email <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-md-6 mt-4 form-floating">
                                        <input type="number" class="form-control" placeholder="Phone no *" required>
                                        <div class="valid-feedback text-primary">
                                            Looks good!
                                        </div>
                                        <div class="invalid-feedback">
                                            Please fill the valid Phone No
                                        </div>
                                        <label class="fs-6 fw-semibold">Phone no <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-md-6 mt-4 form-floating">
                                        <input type="text" class="form-control" placeholder="Subject *" required>
                                        <div class="valid-feedback text-primary">
                                            Looks good!
                                        </div>
                                        <div class="invalid-feedback">
                                            Please fill the valid Subject
                                        </div>
                                        <label class="fs-6 fw-semibold">Subject <span class="text-danger">*</span></label>
                                    </div>
                                </div>
                                <div class="form-floating">
                                    <textarea class="form-control texta mt-4" style="height: 110px;"
                                        placeholder="enter comment" required></textarea>
                                    <div class="valid-feedback text-primary">
                                        Looks good!
                                    </div>
                                    <div class="invalid-feedback">
                                        Please fill the valid Message
                                    </div>
                                    <label class="fs-6 fw-semibold textlebal">Message </label>
                                </div>
                                <button type="submit" class="btn btn-primary mt-4">Send Message</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact end -->
        
    </main>

    <!-- Footer start -->
    <footer class="page-footer section-py pb-0 bg-black">
        <div class="container">
            <div class="row g-4 pb-5 justify-content-center">
                <div class="col-lg-3 col-sm-6">
                    <img class="img-fluid shadow-sm" src="{{ asset('assets/images/logo-light.svg') }}" width="120" id="light-logo-footer" alt="light-logo">
                    <p class="mt-3">we are passionate about creating exceptional interior spaces that inspire, delight, and enhance the lives of our clients.
                    </p>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div>
                        <h5 class="mb-3">Company</h5>
                        <ul class="list-unstyled">
                            <li><a href="#" class="text-decoration-none  mb-3 d-block">About Us</a></li>
                            <li><a href="#" class="text-decoration-none  mb-3 d-block">Our team</a></li>
                            <li><a href="#" class="text-decoration-none  mb-3 d-block">Our Services</a></li>
                            <li><a href="#" class="text-decoration-none  mb-3 d-block">Work Project</a></li>
                            <li><a href="#" class="text-decoration-none  d-block">Help</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div>
                        <h5 class="mb-3">Useful Links</h5>
                        <ul class="list-unstyled">
                            <li><a href="#" class="text-decoration-none  mb-3 d-block">Why Choose</a></li>
                            <li><a href="#" class="text-decoration-none  mb-3 d-block">Read Blog</a></li>
                            <li><a href="#" class="text-decoration-none  mb-3 d-block">Work Process</a></li>
                            <li><a href="#" class="text-decoration-none  mb-3 d-block">FAQ’s</a></li>
                            <li><a href="#" class="text-decoration-none   d-block">Support</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div>
                        <h5 class="mb-3">Contact</h5>
                        <div class="d-flex mb-4 align-items-center">
                            <i class="fa-solid fa-phone  fs-5"></i>
                            <div class="ms-3">
                                <a href="tel:+23582532535" class="text-decoration-none d-block">+23 5825-32535</a>
                                <span>Call us for support</span>
                            </div>
                        </div>
                        <div class="d-flex mb-4 align-items-center">
                            <i class="fa-solid fa-envelope  fs-5"></i>
                            <div class="ms-3">
                                <a href="mailto:hello@domain.com" class="text-decoration-none  d-block">hello@domain.com</a>
                                <span>Email us for query</span>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <i class="fa-solid fa-location-dot  fs-5"></i>
                            <div class="ms-3">
                                <a href="#" class="text-decoration-none  d-block">1058 Helton Ave, Stky</a>
                                <span>Berlin, Germany</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="low-footer   py-4 text-center">
            <div class="container">
                <p><script>document.write(new Date().getFullYear())</script> © Quazm Design By BullTheme</p>
            </div>
        </div>
    </footer>
    <!-- Footer end -->

    <!-- JAVASCRIPT -->
    <script src="{{ asset('assets/libs/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap js -->
    <script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- App js -->
    <script src="{{ asset('assets/js/app.js') }}"></script>


    <button class="btn btn-primary z-3 d-flex align-items-center justify-content-center rounded-end-0 p-2 position-fixed top-50 end-0 translate-middle-y" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
        <svg class="spinner-border" style="--bs-spinner-border-width: 0; --bs-spinner-animation-speed: 2.5s;"  width="30px" height="30px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M2 11.9998C2 11.1353 2.1097 10.2964 2.31595 9.49631C3.40622 9.55283 4.48848 9.01015 5.0718 7.99982C5.65467 6.99025 5.58406 5.78271 4.99121 4.86701C6.18354 3.69529 7.66832 2.82022 9.32603 2.36133C9.8222 3.33385 10.8333 3.99982 12 3.99982C13.1667 3.99982 14.1778 3.33385 14.674 2.36133C16.3317 2.82022 17.8165 3.69529 19.0088 4.86701C18.4159 5.78271 18.3453 6.99025 18.9282 7.99982C19.5115 9.01015 20.5938 9.55283 21.6841 9.49631C21.8903 10.2964 22 11.1353 22 11.9998C22 12.8643 21.8903 13.7032 21.6841 14.5033C20.5938 14.4468 19.5115 14.9895 18.9282 15.9998C18.3453 17.0094 18.4159 18.2169 19.0088 19.1326C17.8165 20.3043 16.3317 21.1794 14.674 21.6383C14.1778 20.6658 13.1667 19.9998 12 19.9998C10.8333 19.9998 9.8222 20.6658 9.32603 21.6383C7.66832 21.1794 6.18354 20.3043 4.99121 19.1326C5.58406 18.2169 5.65467 17.0094 5.0718 15.9998C4.48848 14.9895 3.40622 14.4468 2.31595 14.5033C2.1097 13.7032 2 12.8643 2 11.9998ZM6.80385 14.9998C7.43395 16.0912 7.61458 17.3459 7.36818 18.5236C7.77597 18.8138 8.21005 19.0652 8.66489 19.2741C9.56176 18.4712 10.7392 17.9998 12 17.9998C13.2608 17.9998 14.4382 18.4712 15.3351 19.2741C15.7899 19.0652 16.224 18.8138 16.6318 18.5236C16.3854 17.3459 16.566 16.0912 17.1962 14.9998C17.8262 13.9085 18.8225 13.1248 19.9655 12.7493C19.9884 12.5015 20 12.2516 20 11.9998C20 11.7481 19.9884 11.4981 19.9655 11.2504C18.8225 10.8749 17.8262 10.0912 17.1962 8.99982C16.566 7.90845 16.3854 6.65378 16.6318 5.47605C16.224 5.18588 15.7899 4.93447 15.3351 4.72552C14.4382 5.52844 13.2608 5.99982 12 5.99982C10.7392 5.99982 9.56176 5.52844 8.66489 4.72552C8.21005 4.93447 7.77597 5.18588 7.36818 5.47605C7.61458 6.65378 7.43395 7.90845 6.80385 8.99982C6.17376 10.0912 5.17754 10.8749 4.03451 11.2504C4.01157 11.4981 4 11.7481 4 11.9998C4 12.2516 4.01157 12.5015 4.03451 12.7493C5.17754 13.1248 6.17376 13.9085 6.80385 14.9998ZM12 14.9998C10.3431 14.9998 9 13.6567 9 11.9998C9 10.343 10.3431 8.99982 12 8.99982C13.6569 8.99982 15 10.343 15 11.9998C15 13.6567 13.6569 14.9998 12 14.9998ZM12 12.9998C12.5523 12.9998 13 12.5521 13 11.9998C13 11.4475 12.5523 10.9998 12 10.9998C11.4477 10.9998 11 11.4475 11 11.9998C11 12.5521 11.4477 12.9998 12 12.9998Z"></path></svg>
    </button>

    <div class="offcanvas pct-offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel" style="--bs-offcanvas-width: 320px;">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title h6" id="offcanvasRightLabel">Settings</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <ul class="list-unstyled list-group list-group-flush">
                <li class="list-group-item pt-0">
                    <div class="pc-dark">
                        <h6 class="mb-1">Theme Mode</h6>
                        <p class="text-muted text-sm">Choose light or dark mode or Auto</p>
                        <div class="row theme-color theme-layout">
                            <div class="col-4">
                                <button class="preset-btn btn" data-bs-theme-value="light" data-bs-toggle="tooltip" aria-label="Light" data-bs-title="Light">
                                    <svg class="pc-icon text-warning" width="24" height="24">
                                        <path d="M12 19C15.866 19 19 15.866 19 12C19 8.13401 15.866 5 12 5C8.13401 5 5 8.13401 5 12C5 15.866 8.13401 19 12 19Z" fill="currentcolor"></path>
                                        <path d="M12 22.96C11.45 22.96 11 22.55 11 22V21.92C11 21.37 11.45 20.92 12 20.92C12.55 20.92 13 21.37 13 21.92C13 22.47 12.55 22.96 12 22.96ZM19.14 20.14C18.88 20.14 18.63 20.04 18.43 19.85L18.3 19.72C17.91 19.33 17.91 18.7 18.3 18.31C18.69 17.92 19.32 17.92 19.71 18.31L19.84 18.44C20.23 18.83 20.23 19.46 19.84 19.85C19.65 20.04 19.4 20.14 19.14 20.14ZM4.86 20.14C4.6 20.14 4.35 20.04 4.15 19.85C3.76 19.46 3.76 18.83 4.15 18.44L4.28 18.31C4.67 17.92 5.3 17.92 5.69 18.31C6.08 18.7 6.08 19.33 5.69 19.72L5.56 19.85C5.37 20.04 5.11 20.14 4.86 20.14ZM22 13H21.92C21.37 13 20.92 12.55 20.92 12C20.92 11.45 21.37 11 21.92 11C22.47 11 22.96 11.45 22.96 12C22.96 12.55 22.55 13 22 13ZM2.08 13H2C1.45 13 1 12.55 1 12C1 11.45 1.45 11 2 11C2.55 11 3.04 11.45 3.04 12C3.04 12.55 2.63 13 2.08 13ZM19.01 5.99C18.75 5.99 18.5 5.89 18.3 5.7C17.91 5.31 17.91 4.68 18.3 4.29L18.43 4.16C18.82 3.77 19.45 3.77 19.84 4.16C20.23 4.55 20.23 5.18 19.84 5.57L19.71 5.7C19.52 5.89 19.27 5.99 19.01 5.99ZM4.99 5.99C4.73 5.99 4.48 5.89 4.28 5.7L4.15 5.56C3.76 5.17 3.76 4.54 4.15 4.15C4.54 3.76 5.17 3.76 5.56 4.15L5.69 4.28C6.08 4.67 6.08 5.3 5.69 5.69C5.5 5.89 5.24 5.99 4.99 5.99ZM12 3.04C11.45 3.04 11 2.63 11 2.08V2C11 1.45 11.45 1 12 1C12.55 1 13 1.45 13 2C13 2.55 12.55 3.04 12 3.04Z" fill="currentcolor"></path>
                                    </svg>
                                </button>
                            </div>
                            <div class="col-4">
                                <button class="preset-btn btn" data-bs-theme-value="dark" aria-label="Dark" data-bs-toggle="tooltip" data-bs-title="Dark">
                                    <svg class="pc-icon" width="24" height="24">
                                        <path d="M21.5287 15.9294C21.3687 15.6594 20.9187 15.2394 19.7987 15.4394C19.1787 15.5494 18.5487 15.5994 17.9187 15.5694C15.5887 15.4694 13.4787 14.3994 12.0087 12.7494C10.7087 11.2994 9.90873 9.40938 9.89873 7.36938C9.89873 6.22938 10.1187 5.12938 10.5687 4.08938C11.0087 3.07938 10.6987 2.54938 10.4787 2.32938C10.2487 2.09938 9.70873 1.77938 8.64873 2.21938C4.55873 3.93938 2.02873 8.03938 2.32873 12.4294C2.62873 16.5594 5.52873 20.0894 9.36873 21.4194C10.2887 21.7394 11.2587 21.9294 12.2587 21.9694C12.4187 21.9794 12.5787 21.9894 12.7387 21.9894C16.0887 21.9894 19.2287 20.4094 21.2087 17.7194C21.8787 16.7894 21.6987 16.1994 21.5287 15.9294Z" fill="currentcolor"></path>
                                    </svg>
                                </button>
                            </div>
                            <div class="col-4">
                                <button class="preset-btn btn" data-bs-theme-value="auto" aria-label="Auto (System Theme)" data-bs-toggle="tooltip" data-bs-title="Automatically sets the theme based on user's operating system's color scheme.">
                                    <svg class="pc-icon auto-icon" viewBox="0 0 256 256" xmlns="http://www.w3.org/2000/svg"><rect fill="none" height="256" width="256"/>
                                        <path d="M200,48H56a8,8,0,0,0-8,8V200a8,8,0,0,0,8,8H200a8,8,0,0,0,8-8V56A8,8,0,0,0,200,48ZM156,156H100V100h56Z" opacity="0.2"/>
                                        <rect fill="none" height="56" stroke-linecap="round" stroke-linejoin="round" stroke-width="16" width="56" x="100" y="100"/>
                                        <rect fill="none" height="160" rx="8" stroke-linecap="round" stroke-linejoin="round" stroke-width="16" width="160" x="48" y="48"/>
                                        <line fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="16" x1="208" x2="232" y1="104" y2="104"/>
                                        <line fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="16" x1="208" x2="232" y1="152" y2="152"/>
                                        <line fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="16" x1="24" x2="48" y1="104" y2="104"/>
                                        <line fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="16" x1="24" x2="48" y1="152" y2="152"/>
                                        <line fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="16" x1="152" x2="152" y1="208" y2="232"/>
                                        <line fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="16" x1="104" x2="104" y1="208" y2="232"/>
                                        <line fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="16" x1="152" x2="152" y1="24" y2="48"/>
                                        <line fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="16" x1="104" x2="104" y1="24" y2="48"/></svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="pc-rtl">
                        <h6 class="mb-1">Theme Layout</h6>
                        <p class="text-muted text-sm">LTR/RTL</p>
                        <div class="row theme-color theme-direction">
                            <div class="col-6">
                                <button class="preset-btn h-auto btn active" data-value="false" onclick="layout_rtl_change('false');" data-bs-toggle="tooltip" aria-label="LTR" data-bs-title="LTR">
                                    <svg class="w-100" viewBox="0 0 72 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect width="20" height="46" rx="2" fill="#4680FF"/>
                                        <rect x="22" width="50" height="10" rx="2" fill="#4680FF" fill-opacity="0.4"/>
                                        <rect x="22" y="12" width="50" height="34" rx="2" fill="#4680FF" fill-opacity="0.15"/>
                                    </svg>
                                </button>
                            </div>
                            <div class="col-6">
                                <button class="preset-btn h-auto btn" data-value="true" onclick="layout_rtl_change('true');" data-bs-toggle="tooltip" aria-label="RTL" data-bs-title="RTL">
                                    <svg class="w-100" viewBox="0 0 72 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect width="50" height="10" rx="2" fill="#4680FF" fill-opacity="0.4"/>
                                        <rect y="12" width="50" height="34" rx="2" fill="#4680FF" fill-opacity="0.15"/>
                                        <rect x="52" width="20" height="46" rx="2" fill="#4680FF"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <h6 class="mb-1">Custom Theme</h6>
                    <p class="text-muted text-sm">Choose your primary theme color</p>
                    <div class="theme-color preset-color">
                        <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" class="active" data-value="default" aria-label="Default" data-bs-title="Default"><svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M7 12l5 5l10 -10" /><path d="M2 12l5 5m5 -5l5 -5" /></svg></a>
                        <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-value="pink" aria-label="Pink" data-bs-title="Pink"><svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M7 12l5 5l10 -10" /><path d="M2 12l5 5m5 -5l5 -5" /></svg></a>
                        <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-value="blue" aria-label="Blue" data-bs-title="Blue"><svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M7 12l5 5l10 -10" /><path d="M2 12l5 5m5 -5l5 -5" /></svg></a>
                        <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-value="yellow" aria-label="Yellow" data-bs-title="Yellow"><svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M7 12l5 5l10 -10" /><path d="M2 12l5 5m5 -5l5 -5" /></svg></a>
                        <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-value="purple" aria-label="Purple" data-bs-title="Purple"><svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M7 12l5 5l10 -10" /><path d="M2 12l5 5m5 -5l5 -5" /></svg></a>
                        <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-value="orange" aria-label="Orange" data-bs-title="Orange"><svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M7 12l5 5l10 -10" /><path d="M2 12l5 5m5 -5l5 -5" /></svg></a>
                        <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-value="brown" aria-label="Brown" data-bs-title="Brown"><svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M7 12l5 5l10 -10" /><path d="M2 12l5 5m5 -5l5 -5" /></svg></a>
                        <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-value="green" aria-label="Green" data-bs-title="Green"><svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M7 12l5 5l10 -10" /><path d="M2 12l5 5m5 -5l5 -5" /></svg></a>
                        <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-value="teal" aria-label="Teal" data-bs-title="Teal"><svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M7 12l5 5l10 -10" /><path d="M2 12l5 5m5 -5l5 -5" /></svg></a>
                        <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-value="cyan" aria-label="Cyan" data-bs-title="Cyan"><svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M7 12l5 5l10 -10" /><path d="M2 12l5 5m5 -5l5 -5" /></svg></a>
                    </div>
                </li>
                <li class="list-group-item">

                </li>
                <li class="list-group-item">
                    <h6 class="mb-1">Theme layout</h6>
                    <p class="text-muted text-sm">Choose your layout</p>
                    <div class="row justify-content-center g-4 row-cols-2 text-center">
                        <div>
                            <a class='d-block' href='index-1.html'>
                                <img class="img-fluid d-block mx-auto" src="{{ asset('assets/images/demo/demo/1.jpg') }}" alt="1.jpg">
                                <span class="d-block small fw-bold mt-1">FULL SCREEN</span>
                            </a>
                        </div>
                        <div>
                            <a class='d-block' href='index-2.html'>
                                <img class="img-fluid d-block mx-auto" src="{{ asset('assets/images/demo/demo/2.jpg') }}" alt="2.jpg">
                                <span class="d-block small fw-bold mt-1">HALF SCREEN</span>
                            </a>
                        </div>
                        <div>
                            <a class='d-block' href='index-3.html'>
                                <img class="img-fluid d-block mx-auto" src="{{ asset('assets/images/demo/demo/3.jpg') }}" alt="3.jpg">
                                <span class="d-block small fw-bold mt-1">REGISTRATION FORM</span>
                            </a>
                        </div>
                        <div>
                            <a class='d-block' href='index-4.html'>
                                <img class="img-fluid d-block mx-auto" src="{{ asset('assets/images/demo/demo/4.jpg') }}" alt="3.jpg">
                                <span class="d-block small fw-bold mt-1">PRODUCT IMAGE</span>
                            </a>
                        </div>
                        <div>
                            <a class='d-block' href='index-5.html'>
                                <img class="img-fluid d-block mx-auto" src="{{ asset('assets/images/demo/demo/5.jpg') }}" alt="3.jpg">
                                <span class="d-block small fw-bold mt-1">HOME SUBCRIBE</span>
                            </a>
                        </div>
                        <div>
                            <a class='d-block' href='index-6.html'>
                                <img class="img-fluid d-block mx-auto" src="{{ asset('assets/images/demo/demo/6.jpg') }}" alt="3.jpg">
                                <span class="d-block small fw-bold mt-1">HOME VIDEO</span>
                            </a>
                        </div>
                        <div>
                            <a class='d-block' href='index-7.html'>
                                <img class="img-fluid d-block mx-auto" src="{{ ('assets/images/demo/demo/7.jpg') }}" alt="3.jpg">
                                <span class="d-block small fw-bold mt-1">TEXT ROTATE</span>
                            </a>
                        </div>
                        <div>
                            <a class='d-block' href='index-8.html'>
                                <img class="img-fluid d-block mx-auto" src="{{ asset('assets/images/demo/demo/8.jpg') }}" alt="3.jpg">
                                <span class="d-block small fw-bold mt-1">PARTICALS BACKGROUND</span>
                            </a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="offcanvas-footer border-top p-3">
            <button class="btn btn-outline-danger d-block w-100" id="layoutreset">Reset Settings</button>
        </div>
    </div>

    <style>
        .pct-offcanvas .list-group-item {
            padding: 20px 0
        }
        .preset-btn {
            padding: 5px;
            width: 100%;
            line-height: 1;
            height: 60px;
        }
        .pc-icon:not([class*=hei-]) {
            height: 22px;
        }
        .pc-icon:not([class*=wid-]) {
            width: 22px;
        }
        [data-pc-direction=ltr] .text-warning {
            --bs-text-opacity: 1;
            color: rgba(var(--bs-warning-rgb), var(--bs-text-opacity)) !important;
        }
        .theme-color {
            display: flex;
            position: relative;
            padding: 0
        }

        .theme-color>a {
            position: relative;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            overflow: hidden;
            margin-right: 4px;
            width: 20px;
            height: 50px;
            flex: none
        }

        .theme-color>a:after {
            content: "";
            position: absolute;
            top: 5px;
            left: 5px;
            right: 5px;
            bottom: 5px;
            background: rgba(255,255,255,.3);
            z-index: 1;
            transform: scale(0)
        }

        .theme-color > a svg {
            color: #fff;
            transform: scale(0);
            transition: all .15s ease-in-out
        }

        .theme-color>a.active svg,
        .theme-color>a.active::after,
        .theme-color>a:hover::after {
            transform: scale(1)
        }

        .theme-color>a svg::before {
            position: relative;
            z-index: 5
        }

        .theme-color>a.active {
            flex: 1
        }

        .theme-color.preset-color>a[data-value=default] {
            background: #009fff;
        }

        .theme-color.preset-color>a[data-value=pink] {
            background: #FF69B4;
        }

        .theme-color.preset-color>a[data-value=blue] {
            background: #2575fc;
        }

        .theme-color.preset-color>a[data-value=yellow] {
            background: #fbbc05;
        }

        .theme-color.preset-color>a[data-value=purple] {
            background: #8060cf;
        }

        .theme-color.preset-color>a[data-value=orange] {
            background: #fd7d29;
        }

        .theme-color.preset-color>a[data-value=brown] {
            background: #d0925e;
        }

        .theme-color.preset-color>a[data-value=green] {
            background: #34a853;
        }

        .theme-color.preset-color>a[data-value=teal] {
            background: teal
        }

        .theme-color.preset-color>a[data-value=cyan] {
            background: #3ec9d6
        }

        .theme-color.preset-color>a[data-value=preset-11] {
            background: #212529
        }
        [data-bs-theme=light] .pct-offcanvas .auto-icon rect,
        [data-bs-theme=light] .pct-offcanvas .auto-icon line {
            stroke: #000;
        }
        [data-bs-theme=dark] .pct-offcanvas .auto-icon rect,
        [data-bs-theme=dark] .pct-offcanvas .auto-icon line {
            stroke: #fff;
        }
    </style>

    <script>
        const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
        const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
    </script>

    <script>
        <!--    -->
        // Function to change the theme color
        function preset_change(value) {
            document.getElementsByTagName('html')[0].setAttribute('data-theme-colors', value);
            // Save the selected theme color to localStorage
            localStorage.setItem('themeColor', value);

            // Update active class for the color buttons
            var control = document.querySelector('.pct-offcanvas');
            if (control) {
                document.querySelector('.preset-color > a.active').classList.remove('active');
                document.querySelector(".preset-color > a[data-value='" + value + "']").classList.add('active');
            }
        }

        // Apply the theme color from localStorage on page load
        document.addEventListener('DOMContentLoaded', function () {
            var if_exist = document.querySelectorAll('.preset-color');

            // If preset color buttons exist, add event listeners
            if (if_exist) {
                var preset_color = document.querySelectorAll('.preset-color > a');
                for (var h = 0; h < preset_color.length; h++) {
                    var c = preset_color[h];
                    c.addEventListener('click', function (event) {
                        var targetElement = event.target;
                        if (targetElement.tagName == 'SPAN') {
                            targetElement = targetElement.parentNode;
                        }
                        var temp = targetElement.getAttribute('data-value');
                        preset_change(temp);
                    });
                }
            }

            // If the body has a specific class, initialize SimpleBar
            if (!!document.querySelector('.pct-body')) {
                new SimpleBar(document.querySelector('.pct-body'));
            }

            // Check if there is a saved theme color in localStorage and apply it
            var savedThemeColor = localStorage.getItem('themeColor');
            if (savedThemeColor) {
                preset_change(savedThemeColor);
            }

            // Reset settings button click handler
            var layout_reset = document.querySelector('#layoutreset');
            if (layout_reset) {
                layout_reset.addEventListener('click', function (e) {
                    // Clear the saved theme color from localStorage
                    localStorage.removeItem('themeColor');

                    // Reset to default theme color (you can change 'default' to your actual default theme)
                    preset_change('default');
                });
            }
        });




        (() => {
            'use strict';

            // Function to get the stored theme from localStorage
            const getStoredTheme = () => localStorage.getItem('theme');

            // Function to set the theme in localStorage
            const setStoredTheme = theme => localStorage.setItem('theme', theme);

            // Function to set the theme on the document element
            const setTheme = theme => {
                if (theme === 'auto') {
                    // Set the theme to 'light' or 'dark' based on system preference
                    document.documentElement.setAttribute('data-bs-theme', window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light');
                } else {
                    // Set the theme to 'light' or 'dark' based on the user's selection
                    document.documentElement.setAttribute('data-bs-theme', theme);
                }
            };

            // Function to get the preferred theme (from storage or system preference)
            const getPreferredTheme = () => {
                const storedTheme = getStoredTheme();
                if (storedTheme) {
                    return storedTheme;
                }
                return window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light';
            };

            // Function to toggle the active state for the theme buttons
            const showActiveTheme = (theme, focus = false) => {
                const themeButtons = document.querySelectorAll('.preset-btn');

                // Remove the active class from all buttons
                themeButtons.forEach(btn => {
                    btn.classList.remove('active');
                    btn.setAttribute('aria-pressed', 'false');
                });

                // Find the button corresponding to the selected theme and add the active class
                const btnToActive = document.querySelector(`[data-bs-theme-value="${theme}"]`);
                btnToActive.classList.add('active');
                btnToActive.setAttribute('aria-pressed', 'true');

                // Optionally, set focus on the theme switcher after setting the active class
                if (focus) {
                    btnToActive.focus();
                }
            };

            // Event listener for system theme change
            window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', () => {
                const storedTheme = getStoredTheme();
                if (storedTheme !== 'light' && storedTheme !== 'dark') {
                    setTheme(getPreferredTheme());
                }
            });

            // Initialize theme on page load
            window.addEventListener('DOMContentLoaded', () => {
                // Set the initial theme based on stored or system preference
                const initialTheme = getPreferredTheme();
                setTheme(initialTheme);
                showActiveTheme(initialTheme);

                // Add event listeners to theme toggle buttons
                document.querySelectorAll('[data-bs-theme-value]').forEach(toggle => {
                    toggle.addEventListener('click', function () {
                        const theme = this.getAttribute('data-bs-theme-value');
                        setStoredTheme(theme);
                        setTheme(theme);
                        showActiveTheme(theme, true); // Add active class to clicked button and focus it
                    });
                });
            });
        })();




        // Function to handle the RTL and LTR switch

        function layout_rtl_change(value) {
            var control = document.querySelector('#layoutmodertl');

            // Save preference to localStorage
            localStorage.setItem('layoutDirection', value);

            if (value == 'true') {
                // RTL configuration
                document.documentElement.setAttribute('dir', 'rtl');
                document.documentElement.setAttribute('lang', 'ar');

                // Update the active state of the buttons
                var activeButton = document.querySelector('.theme-direction .btn.active');
                if (activeButton) {
                    activeButton.classList.remove('active');
                }
                document.querySelector(".theme-direction .btn[data-value='true']").classList.add('active');

                // Change the CSS links for RTL
                document.getElementById('bootstrap-style').setAttribute('href', 'assets/css/bootstrap-rtl.min.css');
                document.getElementById('app-style').setAttribute('href', 'assets/css/app-rtl.min.css');
            } else {
                // LTR configuration (default)
                document.documentElement.setAttribute('dir', 'ltr');
                document.documentElement.removeAttribute('lang');

                // Update the active state of the buttons
                var activeButton = document.querySelector('.theme-direction .btn.active');
                if (activeButton) {
                    activeButton.classList.remove('active');
                }
                document.querySelector(".theme-direction .btn[data-value='false']").classList.add('active');

                // Change the CSS links for LTR
                document.getElementById('bootstrap-style').setAttribute('href', 'assets/css/bootstrap.min.css');
                document.getElementById('app-style').setAttribute('href', 'assets/css/app.min.css');
            }
        }

        // Check localStorage on page load to apply the saved direction
        document.addEventListener('DOMContentLoaded', function () {
            var savedDirection = localStorage.getItem('layoutDirection');
            if (savedDirection) {
                layout_rtl_change(savedDirection);
            } else {
                // If no preference is saved, use the default direction (LTR)
                layout_rtl_change('false');
            }
        });

        // Reset layout to default (LTR) when the reset button is clicked
        var layout_reset = document.querySelector('#layoutreset');
        if (layout_reset) {
            layout_reset.addEventListener('click', function (e) {
                // Clear the saved layout preference in localStorage
                localStorage.removeItem('layoutDirection');

                // Reset to LTR direction
                layout_rtl_change('false');
            });
        }




        /* =============================== This code is for privacy purpose =============================== */
        // Right Click, F12, Copy(ctl + c) and Dev tool(ctl + U) is disable
        $("body").bind("cut copy paste", function(e) {
            e.preventDefault();
        });

        window.onload = function() {
            function e(e) {
                if (e.stopPropagation) {
                    e.stopPropagation();
                } else if (window.event) {
                    window.event.cancelBubble = true;
                }
                e.preventDefault();
                return false;
            }

            document.addEventListener("contextmenu", function(e) {
                e.preventDefault();
            }, false);

            document.addEventListener("keydown", function(t) {
                if (t.ctrlKey && t.shiftKey && t.keyCode == 73) e(t);  // Ctrl+Shift+I
                if (t.ctrlKey && t.shiftKey && t.keyCode == 74) e(t);  // Ctrl+Shift+J
                if (t.keyCode == 83 && (navigator.platform.match("Mac") ? t.metaKey : t.ctrlKey)) e(t);  // Ctrl+S or Command+S
                if (t.ctrlKey && t.keyCode == 85) e(t);  // Ctrl+U
                if (t.keyCode == 123) e(t);  // F12
            }, false);
        };


    </script>

</body>

</html>