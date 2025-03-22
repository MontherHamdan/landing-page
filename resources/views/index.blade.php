<!doctype html>
<html lang="en" dir="ltr" data-bs-theme="light">

<head>

    <meta charset="utf-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <title>Site Masters Construction</title>
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
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <link rel="preload" href="{{ asset('assets/images/home3.webp') }}" as="image">


</head>

<body>

    <!-- Header start -->
    <header class="page-header">
        <nav class="navbar fixed-top navbar-expand-lg py-3">
            <div class="container">
                <a class="navbar-brand" href="#">
                    SMC
                </a>
                <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation"> 
                    <i class="fa-solid fa-bars fs-5 text-white"></i> 
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link active fw-semibold" aria-current="page" href="#section-home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-semibold" href="#section-services">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-semibold" href="#section-gallary">Gallery</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-semibold" href="#about-section">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-semibold me-0" href="#section-contact">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-semibold me-0" href="#get-quote">Free Estimate</a>
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
            data-background="{{ asset('assets/images/home3.webp') }}">
            <div class="container">
                <div class="row h-100 justify-content-center text-center align-items-center">
                    <div class="col-lg-6 col-auto">
                        <h1 class="text-white">Welcome to Site Masters Construction</h1>
                        <p class="text-white"> Where Safety Meets Excellence, and Quality Builds Trust</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Hero end -->

        <section class="py-5 bg-dark text-white" id="chooseuo1">
            <div class="container">
                <div class="row text-center justify-content-center">
                    <div class="col-lg-6 col-auto">
                        <h2>Why <span class="text-primary">Us</span></h2>
                        <p>Your Trusted Service Partner</p>
                    </div>
                </div>
                <div class="row g-4 mt-5">
                    <!-- Card 1 -->
                    <div class="col-md-4 d-flex">
                        <div class="text-center rounded-2 p-5 choose-box  flex-fill">
                            <i class="bx bx-dollar-circle display-3 mb-3"></i>
                            <h5 class="mb-0">BUDGET FRIENDLY</h5>
                        </div>
                    </div>
                    
                    <!-- Card 2 -->
                    <div class="col-md-4 d-flex">
                        <div class="text-center rounded-2 p-5 choose-box  flex-fill">
                            <i class="bx bxs-badge-check display-3 mb-3"></i>
                            <h5 class="mb-0">CERTIFIED LICENSED PROFESSIONAL</h5>
                        </div>
                    </div>
                    
                    <!-- Card 3 -->
                    <div class="col-md-4 d-flex">
                        <div class="text-center rounded-2 p-5 choose-box  flex-fill">
                            <i class="bx bxs-conversation display-3 mb-3"></i>
                            <h5 class="mb-0">FREE CONSULTATIONS AVAILABLE</h5>
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
                    <div class="col d-flex">
                        <div class="blog-card position-relative rounded-3 h-100">
                            <div class="card-img-container" style="height: 280px; overflow: hidden;">
                                <img src="{{ asset('assets/images/services/renovation.jpeg') }}" class="img-fluid rounded-top-2 w-100 h-100" alt="blog1" style="object-fit: cover;">
                            </div>
                            <div class="p-4">
                                <div class="blog-footer">
                                    <h5 class="mt-3">
                                        <a href="#" class="text-decoration-none">Renovations</a>
                                    </h5>
                                    <p>Upgrade and enhance your space with our expert renovation services. From home improvements to full-scale remodels, we bring your vision to life with precision and quality craftsmanship.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col d-flex">
                        <div class="blog-card position-relative rounded-3 h-100">
                            <div class="card-img-container" style="height: 280px; overflow: hidden;">
                                <img src="{{ asset('assets/images/services/paving.jpeg') }}" class="img-fluid rounded-top-2 w-100 h-100" alt="blog1" style="object-fit: cover;">
                            </div>                            <div class="p-4">
                                <div class="blog-footer">
                                    <h5 class="mt-3">
                                        <a class="text-decoration-none">Paving</a>
                                    </h5>
                                    <p>Durable and aesthetically pleasing paving solutions for driveways, walkways, and patios. We use high-quality materials to ensure long-lasting and smooth surfaces.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col d-flex">
                        <div class="blog-card position-relative rounded-3 h-100">
                            <div class="card-img-container" style="height: 280px; overflow: hidden;">
                                <img src="{{ asset('assets/images/services/land.jpeg') }}" class="img-fluid rounded-top-2 w-100 h-100" alt="blog1" style="object-fit: cover;">
                            </div>                            <div class="p-4">
                                <div class="blog-footer">
                                    <h5 class="mt-3">
                                        <a class="text-decoration-none">Landscaping</a>
                                    </h5>
                                    <p>Transform your outdoor areas with our professional landscaping services. We design and maintain gardens, lawns, and green spaces to create beautiful and functional environments.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col d-flex">
                        <div class="blog-card position-relative rounded-3 h-100">
                            <div class="card-img-container" style="height: 280px; overflow: hidden;">
                                <img src="{{ asset('assets/images/services/snow.jpeg') }}" class="img-fluid rounded-top-2 w-100 h-100" alt="blog1" style="object-fit: cover;">
                            </div>                            <div class="p-4">
                                <div class="blog-footer">
                                    <h5 class="mt-3">
                                        <a class="text-decoration-none">Snow Removal</a>
                                    </h5>
                                    <p>Keep your property safe and accessible during winter with our reliable snow removal services. We clear driveways, sidewalks, and parking lots efficiently to prevent hazards.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col d-flex">
                        <div class="blog-card position-relative rounded-3 h-100">
                            <div class="card-img-container" style="height: 280px; overflow: hidden;">
                                <img src="{{ asset('assets/images/services/pool.jpeg') }}" class="img-fluid rounded-top-2 w-100 h-100" alt="blog1" style="object-fit: cover;">
                            </div>                            <div class="p-4">
                                <div class="blog-footer">
                                    <h5 class="mt-3">
                                        <a class="text-decoration-none">Pool & Garage Maintenance</a>
                                    </h5>
                                    <p>Ensure your pool and garage remain in top condition with our maintenance services. We handle cleaning, repairs, and upkeep to keep these areas functional and well-maintained.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col d-flex">
                        <div class="blog-card position-relative rounded-3 h-100">
                            <div class="card-img-container" style="height: 280px; overflow: hidden;">
                                <img src="{{ asset('assets/images/services/cleaning.jpeg') }}" class="img-fluid rounded-top-2 w-100 h-100" alt="blog1" style="object-fit: cover;">
                            </div>                            <div class="p-4">
                                <div class="blog-footer">
                                    <h5 class="mt-3">
                                        <a class="text-decoration-none">Cleaning Services</a>
                                    </h5>
                                    <p>From residential to commercial cleaning, we provide thorough and efficient services to maintain a spotless and hygienic environment. Our team uses advanced equipment for the best results.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Servies end -->

        <!-- Process start -->
        <section class="section-py process" id="process-section">
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
                        <div class="process-box position-relative active rounded-2">
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
                        <div class="process-box position-relative active">
                            <div
                                class="inner three h-100 two position-absolute top-0 start-0  d-flex flex-column justify-content-center">
                                <span>03</span>
                                <h5 class="mb-4"> Executing </h5>
                                <small>We implement our strategies with precision and efficiency, bringing your vision to life seamlessly.</small>
                            </div>
                            <div class="process-bg">
                                <img src="{{ asset('assets/images/process/process3.jpg') }}" class="img-fluid rounded-2 w-100" alt="Development">
                            </div>
                        </div>
                    </div>
                    <div class="pt-5">
                        <div class="process-box position-relative active">
                            <div
                                class="inner four h-100 two position-absolute top-0 start-0  d-flex flex-column justify-content-center">
                                <span>04</span>
                                <h5 class="mb-4"> closing </h5>
                                <small>We finalize every project with meticulous attention to detail, ensuring a smooth transition and complete satisfaction.</small>
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

        <section class="gallery py-5 bg-light mt-5" id="section-gallary">
            <div class="container mb-5 mt-2">
              <div class="row text-center justify-content-center mb-5">
                <div class="col-lg-6 col-auto">
                  <h2>Our <span class="text-primary">Gallery</span></h2>
                  <p>Site Masters Construction Gallery</p>
                </div>
              </div>
              <div id="galleryCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <!-- Carousel Indicators -->
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#galleryCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#galleryCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#galleryCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                  <button type="button" data-bs-target="#galleryCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
                </div>
                <div class="carousel-inner">
                  <!-- Slide 1 -->
                  <div class="carousel-item active">
                    <div class="row g-3">
                      <div class="col-md-4">
                        <img src="{{ asset('assets/images/gallery/1.jpeg') }}" class="d-block w-100 rounded shadow-sm hover-scale" style="height: 350px; object-fit: cover; transition: transform 0.3s;" alt="Photo 1">
                      </div>
                      <div class="col-md-4">
                        <img src="{{ asset('assets/images/gallery/2.jpeg') }}" class="d-block w-100 rounded shadow-sm hover-scale" style="height: 350px; object-fit: cover; transition: transform 0.3s;" alt="Photo 2">
                      </div>
                      <div class="col-md-4">
                        <img src="{{ asset('assets/images/gallery/3.jpeg') }}" class="d-block w-100 rounded shadow-sm hover-scale" style="height: 350px; object-fit: cover; transition: transform 0.3s;" alt="Photo 3">
                      </div>
                    </div>
                  </div>
                  <!-- Slide 2 -->
                  <div class="carousel-item">
                    <div class="row g-3">
                      <div class="col-md-4">
                        <img src="{{ asset('assets/images/gallery/4.jpeg') }}" class="d-block w-100 rounded shadow-sm hover-scale" style="height: 350px; object-fit: cover; transition: transform 0.3s;" alt="Photo 4">
                      </div>
                      <div class="col-md-4">
                        <img src="{{ asset('assets/images/gallery/5.jpeg') }}" class="d-block w-100 rounded shadow-sm hover-scale" style="height: 350px; object-fit: cover; transition: transform 0.3s;" alt="Photo 5">
                      </div>
                      <div class="col-md-4">
                        <img src="{{ asset('assets/images/gallery/6.jpeg') }}" class="d-block w-100 rounded shadow-sm hover-scale" style="height: 350px; object-fit: cover; transition: transform 0.3s;" alt="Photo 6">
                      </div>
                    </div>
                  </div>
                  <!-- Slide 3 -->
                  <div class="carousel-item">
                    <div class="row g-3">
                      <div class="col-md-4">
                        <img src="{{ asset('assets/images/gallery/7.jpeg') }}" class="d-block w-100 rounded shadow-sm hover-scale" style="height: 350px; object-fit: cover; transition: transform 0.3s;" alt="Photo 7">
                      </div>
                      <div class="col-md-4">
                        <img src="{{ asset('assets/images/gallery/8.jpeg') }}" class="d-block w-100 rounded shadow-sm hover-scale" style="height: 350px; object-fit: cover; transition: transform 0.3s;" alt="Photo 8">
                      </div>
                      <div class="col-md-4">
                        <img src="{{ asset('assets/images/gallery/9.jpeg') }}" class="d-block w-100 rounded shadow-sm hover-scale" style="height: 350px; object-fit: cover; transition: transform 0.3s;" alt="Photo 9">
                      </div>
                    </div>
                  </div>
                  <!-- Slide 4 -->
                  <div class="carousel-item">
                    <div class="row g-3">
                      <div class="col-md-4">
                        <img src="{{ asset('assets/images/gallery/10.jpeg') }}" class="d-block w-100 rounded shadow-sm hover-scale" style="height: 350px; object-fit: cover; transition: transform 0.3s;" alt="Photo 10">
                      </div>
                      <div class="col-md-4">
                        <img src="{{ asset('assets/images/gallery/11.jpeg') }}" class="d-block w-100 rounded shadow-sm hover-scale" style="height: 350px; object-fit: cover; transition: transform 0.3s;" alt="Photo 11">
                      </div>
                      <div class="col-md-4">
                        <img src="{{ asset('assets/images/gallery/12.jpeg') }}" class="d-block w-100 rounded shadow-sm hover-scale" style="height: 350px; object-fit: cover; transition: transform 0.3s;" alt="Photo 12">
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Carousel Controls -->
                <button class="carousel-control-prev" type="button" data-bs-target="#galleryCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon bg-primary  rounded-circle" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#galleryCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon bg-primary  rounded-circle" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                  </button>
              </div>
            </div>
        </section>
          

        <!-- About start -->
        <section class="section-py about bg-light pb-0" id="about-section">
            <div class="container">
                <div class="row g-4 justify-content-center align-items-center">
                    <div class="col-lg-6 mb-3">
                        <img src="{{ asset('assets/images/about/aboutUs.png') }}" class="img-fluid rounded-2" alt="aboutimg">
                    </div>
                    <div class="col-lg-6 ps-lg-5 mt-0 mb-5">
                        <h2 class="mt-1">About <span class="text-primary">Site Masters Construction</span></h2>
                        <p class="mb-0 mt-2">At Site Masters Construction, we provide comprehensive contracting services, seamlessly combining expertise, quality, and customer satisfaction to deliver outstanding results. Specializing in renovations, paving, landscaping, snow removal, pool and garage maintenance, cleaning services, and automation, we are committed to excellence in every project we undertake.

                            From concept to completion, we handle every aspect of your project with personalized attention, transparent communication, and expert craftsmanship. Whether it's revamping interiors with flooring, drywall, and tiling, enhancing outdoor spaces with landscaping and paving, or ensuring year-round maintenance through snow removal and cleaning services, we bring precision and dedication to every task.
                            
                            We take pride in being a one-stop solution, offering design-build services, project management, and construction expertise. Whether you're looking to renovate your home, improve property functionality, or integrate smart automation solutions, our team is here to bring your vision to life—on time, within budget, and exceeding expectations.
                            
                            At Site Masters Construction, we build more than just spaces—we build lasting relationships based on trust, reliability, and a commitment to quality. Our clients rely on us for exceptional craftsmanship, timely project completion, and industry-leading standards, ensuring that every project is a success from start to finish.
                            
                            Let us transform your property with expertise and care—because at Site Masters Construction, your vision is our mission.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- About end -->

        <!-- Testimonial start -->
        <section class="section-py pb-0 testimonials" id="testimonials-section">
            <div class="container">
              <div class="row text-center justify-content-center">
                <div class="col-lg-6 col-auto">
                  <h2 class="text-primary">Testimonials</h2>
                  <p>What our customers say about our company</p>
                </div>
              </div>
              <div class="row mt-5 g-4 justify-content-center">
                <!-- Testimonial 1 -->
                <div class="col-lg-4 d-flex">
                  <div class="testimonials-card rounded-2 p-3 flex-fill">
                    <div class="dash rounded-2 p-3 h-100 d-flex flex-column">
                      <blockquote class="mb-4 flex-grow-1">
                        “Site Masters Construction recently completed a major renovation project for us, and we couldn’t be happier with the results! From start to finish, their team was professional, communicative, and incredibly skilled. They stayed on schedule and within budget, and the quality of their work is outstanding. If you’re looking for a construction company that delivers excellence, Site Masters is the way to go!”
                      </blockquote>
                      <div class="d-flex align-items-center testimonials-name mt-4">
                        <img src="{{ asset('assets/images/testimonial/testimonial2.jpg') }}" class="img-fluid rounded-circle" alt="Laura M.">
                        <div class="ms-3">
                          <h5 class="m-0">Laura M.</h5>
                          <span>Homeowner</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Testimonial 2 -->
                <div class="col-lg-4 d-flex">
                  <div class="testimonials-card rounded-2 p-3 flex-fill">
                    <div class="dash rounded-2 p-3 h-100 d-flex flex-column">
                      <blockquote class="mb-4 flex-grow-1">
                        “Winter can be a nightmare, but Site Masters Construction made it so much easier for us. Their snow removal service is top-notch—they’re always on time, even during the worst storms, and they do an amazing job clearing our parking lot and sidewalks. Their team is friendly, and their equipment is state-of-the-art. Highly recommend them for anyone needing reliable snow removal!”
                      </blockquote>
                      <div class="d-flex align-items-center testimonials-name mt-4">
                        <img src="{{ asset('assets/images/testimonial/testimonial1.jpg') }}" class="img-fluid rounded-circle" alt="Chris P.">
                        <div class="ms-3">
                          <h5 class="m-0">Chris P.</h5>
                          <span>Business Owner</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Testimonial 3 -->
                <div class="col-lg-4 d-flex">
                  <div class="testimonials-card rounded-2 p-3 flex-fill">
                    <div class="dash rounded-2 p-3 h-100 d-flex flex-column">
                      <blockquote class="mb-4 flex-grow-1">
                        “We hired Site Masters Construction to remodel our kitchen and bathrooms, and they exceeded all our expectations. Their attention to detail is incredible, and they worked closely with us to bring our vision to life. The project was completed on time, and the craftsmanship is flawless. We’re already planning our next project with them. Thank you, Site Masters!”
                      </blockquote>
                      <div class="d-flex align-items-center testimonials-name mt-4">
                        <img src="{{ asset('assets/images/testimonial/testimonial3.jpeg') }}" style="width: 60px; height: 60px; object-fit: cover;" class="img-fluid rounded-circle" alt="Rachel & Tom S.">
                        <div class="ms-3">
                          <h5 class="m-0">Rachel & Tom S.</h5>
                          <span>Homeowners</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Testimonial 4 -->
                <div class="col-lg-4 d-flex">
                  <div class="testimonials-card rounded-2 p-3 flex-fill">
                    <div class="dash rounded-2 p-3 h-100 d-flex flex-column">
                      <blockquote class="mb-4 flex-grow-1">
                        “Site Masters Construction built our new office space from the ground up, and they did an incredible job. Their team was professional, efficient, and easy to work with. They handled every detail, from permits to finishing touches, and the final result is stunning. We’ve received so many compliments on the design and build quality. I highly recommend Site Masters for any commercial construction project!”
                      </blockquote>
                      <div class="d-flex align-items-center testimonials-name mt-4">
                        <img src="{{ asset('assets/images/testimonial/testimonial4.jpg') }}" class="img-fluid rounded-circle" alt="Mark T.">
                        <div class="ms-3">
                          <h5 class="m-0">Mark T.</h5>
                          <span>Business Owner</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Testimonial 5 -->
                <div class="col-lg-4 d-flex">
                  <div class="testimonials-card rounded-2 p-3 flex-fill">
                    <div class="dash rounded-2 p-3 h-100 d-flex flex-column">
                      <blockquote class="mb-4 flex-grow-1">
                        “After a tree fell on our roof during a storm, we called Site Masters Construction for emergency repairs. They responded immediately, assessed the damage, and had everything fixed within a day. Their team was courteous, knowledgeable, and incredibly efficient. We’re so grateful for their quick response and high-quality work. Site Masters truly saved the day!”
                      </blockquote>
                      <div class="d-flex align-items-center testimonials-name mt-4">
                        <img src="{{ asset('assets/images/testimonial/testimonial5.jpg') }}" class="img-fluid rounded-circle" alt="Karen L.">
                        <div class="ms-3">
                          <h5 class="m-0">Monther H.</h5>
                          <span>Homeowner</span>
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
        {{-- <section class="section-py features" id="section-contact">
            <div class="container mb-0">
                <div class="row text-center justify-content-center">
                    <div class="col-lg-6 col-auto">
                        <h2>Contact <span class="text-primary"> Us</span></h2>
                        <p>Feel Free To Call Us Or Get A Quote</p>
                    </div>
                </div>
            </div>
        </section> --}}
        <!-- Features end -->
        <br >
        <br >
        <!-- Getin start -->
        <section class="section-py getin bg-light position-relative z-2 mt-5 mb-5 overflow-hidden"id="section-contact" >
            <div class="container">
                <div class="row align-items-center text-center justify-content-center">
                    <div class="col-lg-6 col-auto">
                        <h2 class="display-5 fw-bold text-white">Call Us <br> <span><a  href="tel:+1 (416) 896-4064">+1 (416) 896-4064</a></span></h2>
                        <a href="#get-quote" class="btn btn-primary mt-4 ">Contact us for a free estimate <i class="fa-solid fa-arrow-right-long ms-1"></i></a>
                    </div>
                </div>
            </div>
            <div class="position-absolute w-100 h-100 bg-img top-0 start-0">
                <img src="{{ asset('assets/images/geton01.jpg') }}" class="img-fluid object-fit-cover w-100 h-100" alt="getin img">
            </div>
        </section>
        <!-- Getin end -->
        
        <!-- Contact start -->
        <section class="section-py contact" id="get-quote">
            <div class="container">
                <div class="row g-4 justify-content-between align-items-center">
                    <div class="col-lg-5">
                        <img src="{{ asset('assets/images/contactbg.jpg') }}" class="img-fluid rounded-2" alt="contactbg">
                    </div>
                    <div class="col-lg-7 ps-lg-5">
                        <div>
                            <h2 class="text-primary mb-5">Get A Free Estimate</h2>
                            <form class="needs-validation" action="{{ route('send.quote') }}" method="post" novalidate>
                                @csrf
                                <div class="row lables">
                                  <!-- Name Field -->
                                  <div class="col-md-6 mt-4 form-floating">
                                    <input type="text" name="name" class="form-control" placeholder="Name *" required>
                                    <div class="valid-feedback text-primary">Looks good!</div>
                                    <div class="invalid-feedback">Please fill the valid Name</div>
                                    <label class="fs-6 fw-semibold">Name <span class="text-danger">*</span></label>
                                  </div>
                                  <!-- Email Field -->
                                  <div class="col-md-6 mt-4 form-floating">
                                    <input type="email" name="email" class="form-control" placeholder="Email *" required>
                                    <div class="valid-feedback text-primary">Looks good!</div>
                                    <div class="invalid-feedback">Please fill the valid Email</div>
                                    <label class="fs-6 fw-semibold">Email <span class="text-danger">*</span></label>
                                  </div>
                                  <!-- Phone Field -->
                                  <div class="col-md-6 mt-4 form-floating">
                                    <input type="number" name="phone" class="form-control" placeholder="Phone no *" >
                                    <div class="valid-feedback text-primary">Looks good!</div>
                                    <div class="invalid-feedback">Please fill the valid Phone No</div>
                                    <label class="fs-6 fw-semibold">Phone no </label>
                                  </div>
                                  <!-- Subject Field -->
                                  <div class="col-md-6 mt-4 form-floating">
                                    <input type="text" name="subject" class="form-control" placeholder="Subject *" required>
                                    <div class="valid-feedback text-primary">Looks good!</div>
                                    <div class="invalid-feedback">Please fill the valid Subject</div>
                                    <label class="fs-6 fw-semibold">Subject <span class="text-danger">*</span></label>
                                  </div>
                                </div>
                                <!-- Message Field -->
                                <div class="form-floating">
                                  <textarea name="message" class="form-control texta mt-4" style="height: 110px;" placeholder="Enter comment" required></textarea>
                                  <div class="valid-feedback text-primary">Looks good!</div>
                                  <div class="invalid-feedback">Please fill the valid Message</div>
                                  <label class="fs-6 fw-semibold textlebal">Message</label>
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
                    <h2 class="text-white">SMC</h2>
                    <p class="mt-3">Site Masters Construction delivers top-notch condo services with a focus on quality and customer satisfaction.</p>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div>
                        <h5 class="mb-3">Company</h5>
                        <ul class="list-unstyled">
                            
                            <li><a href="#section-home" class="text-decoration-none  mb-3 d-block">Home</a></li>
                            <li><a href="#section-services" class="text-decoration-none  mb-3 d-block">Services</a></li>
                            <li><a href="#section-gallary" class="text-decoration-none  mb-3 d-block">Gallery</a></li>
                            <li><a href="#about-section" class="text-decoration-none  mb-3 d-block">About Us</a></li>
                            <li><a href="#section-contact" class="text-decoration-none  mb-3 d-block">Contact</a></li>
                            <li><a href="#get-quote" class="text-decoration-none  mb-3 d-block">Free estimate</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div>
                        <h5 class="mb-3">Useful Links</h5>
                        <ul class="list-unstyled">
                            <li><a href="#chooseuo1" class="text-decoration-none  mb-3 d-block">Why Us</a></li>
                            <li><a href="#process-section" class="text-decoration-none  mb-3 d-block">Our Process</a></li>
                            <li><a href="#testimonials-section" class="text-decoration-none  mb-3 d-block">Testimonials</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div>
                        <h5 class="mb-3">Contact</h5>
                        <div class="d-flex mb-4 align-items-center">
                            <i class="fa-solid fa-phone  fs-5"></i>
                            <div class="ms-3">
                                <a href="tel:+1 (416) 896-4064" class="text-decoration-none d-block">+1 (416) 896-4064</a>
                                <span>Call us for support</span>
                            </div>
                        </div>
                        <div class="d-flex mb-4 align-items-center">
                            <i class="fa-solid fa-envelope  fs-5"></i>
                            <div class="ms-3">
                                <a href="mailto:info@sitemastersco.com" class="text-decoration-none  d-block">info@sitemastersco.com</a>
                                <span>Email us for query</span>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <i class="fa-solid fa-location-dot fs-5"></i>
                            <div class="ms-3">
                                <a href="#" class="text-decoration-none d-block">1175 Brock Rd, Uxbridge, ON L9P 1R4</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="low-footer   py-4 text-center">
            <div class="container">
                <p><script>document.write(new Date().getFullYear())</script> © SiteMasterCo By <a href="https://www.linkedin.com/in/monther-hamdan-a49074288">Monther</a></p>
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
            </ul>
        </div>
    </div>

    <style>
        .navbar-brand {
            font-family: 'YourDesiredFont', sans-serif;
            font-size: 1.5rem; /* adjust size as needed */
            font-weight: bold;
            color: #fff; /* adjust color as needed */
        }

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
        .hover-scale:hover {
            transform: scale(1.05);
        }
        .carousel-control-prev-icon,
.carousel-control-next-icon {
  background-color: rgba(0, 0, 0, 0.5); /* semi-transparent background */
  padding: 10px; /* increases clickable area */
  border-radius: 50%; /* makes it round */
  filter: invert(100%); /* makes the arrow icon white for contrast */
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
                // Return 'dark' instead of the system preference
                return 'dark';
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