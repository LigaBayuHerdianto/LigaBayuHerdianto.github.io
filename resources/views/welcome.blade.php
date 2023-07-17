<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Web-MyProfile</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('MyResume/assets') }}/img/favicon.png" rel="icon">
    <link href="{{ asset('MyResume/assets') }}/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('MyResume/assets') }}/vendor/aos/aos.css" rel="stylesheet">
    <link href="{{ asset('MyResume/assets') }}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('MyResume/assets') }}/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ asset('MyResume/assets') }}/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="{{ asset('MyResume/assets') }}/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="{{ asset('MyResume/assets') }}/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('MyResume/assets') }}/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: MyResume
  * Updated: May 30 2023 with Bootstrap v5.3.0
  * Template URL: https://bootstrapmade.com/free-html-bootstrap-template-my-resume/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Mobile nav toggle button ======= -->
    <!-- <button type="button" class="mobile-nav-toggle d-xl-none"><i class="bi bi-list mobile-nav-toggle"></i></button> -->
    <i class="bi bi-list mobile-nav-toggle d-lg-none"></i>
    <!-- ======= Header ======= -->
    <header id="header" class="d-flex flex-column justify-content-center">

        <nav id="navbar" class="navbar nav-menu">
            <ul>
                <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a>
                </li>
                <li><a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>About</span></a></li>
                <li><a href="#resume" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Resume</span></a>
                </li>
                <li><a href="#portfolio" class="nav-link scrollto"><i class="bx bx-book-content"></i>
                        <span>Portfolio</span></a></li>
                <li><a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contact</span></a>
                </li>
            </ul>
        </nav><!-- .nav-menu -->

    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex flex-column justify-content-center">
        <div class="container" data-aos="zoom-in" data-aos-delay="100">
            <h1>Liga Bayu Herdianto</h1>
            <p>I'm <span class="typed" data-typed-items="Digital Marketer, Freelancer, Content Creator YouTube"></span>
            </p>
            <div class="social-links">
                <a href="https://www.youtube.com/@ligabayuherdianto4062" class="youtube"><i
                        class="bx bxl-youtube"></i></a>
                <a href="https://github.com/LigaBayuHerdianto" class="github"><i class="bx bxl-github"></i></a>
                <a href="https://instagram.com/ligabayu_25?igshid=NGExMmI2YTkyZg==" class="instagram"><i
                        class="bx bxl-instagram"></i></a>
                <a href="http://www.linkedin.com/in/LigaBayuHerdianto" class="linkedin"><i
                        class="bx bxl-linkedin"></i></a>
            </div>
        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>About</h2>
                </div>

                <div class="row">
                    <div class="col-lg-4">
                        <img src="{{ asset('MyResume/assets') }}/img/liga.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-8 pt-4 pt-lg-0 content">
                        <h3>Digital Marketer</h3>
                        <p class="fst-italic justify">
                            My name is Liga Bayu Herdianto. I was born in Mojokerto on October 25, 2000. I completed my
                            high school education at SMAN 1 Gondang, majoring in Natural Sciences. Afterwards, I pursued
                            my studies at Jember State Polytechnic, majoring in Information Technology with a focus on
                            Computer Science.</p>

                        <p class="fst-italic justify">
                            In addition to my academic background, I have a keen interest in the field of digital
                            marketing and business. I have actively sought out opportunities to expand my knowledge and
                            skills in these areas. I have attended various workshops and seminars related to digital
                            marketing strategies, search engine optimization (SEO), social media marketing, and online
                            advertising.</p>

                        <p class="fst-italic justify">
                            I am passionate about leveraging technology and data-driven insights to drive business
                            growth and enhance customer engagement. I believe that a strong combination of technical
                            expertise and marketing skills is crucial in today's digital landscape. I am eager to
                            continue learning and exploring new trends and strategies in the dynamic field of digital
                            marketing and business.</p><br>
                        <div class="row">
                            <div class="col-lg-6">
                                <ul>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>25 October
                                            2000</span></li>
                                    {{-- <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong>
                                        <span>http://cekanemia.kencang.id/</span>
                                    </li> --}}
                                    <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>Jember,
                                            East Java</span></li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>22</span></li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul>

                                    <li><i class="bi bi-chevron-right"></i> <strong>Email-hub:</strong>
                                        <span>masligabayu@gmail.com</span>
                                    </li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong>
                                        <span>Available</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End About Section -->

        <!-- ======= Resume Section ======= -->
        <section id="resume" class="resume">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Resume</h2>
                    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit
                        sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias
                        ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <h3 class="resume-title">Sumary</h3>
                        <div class="resume-item pb-0">
                            <h4>Brandon Johnson</h4>
                            <p><em>Innovative and deadline-driven Graphic Designer with 3+ years of experience designing
                                    and developing user-centered digital/print marketing material from initial concept
                                    to final, polished deliverable.</em></p>
                            <ul>
                                <li>Portland par 127,Orlando, FL</li>
                                <li>(123) 456-7891</li>
                                <li>alice.barkley@example.com</li>
                            </ul>
                        </div>

                        <h3 class="resume-title">Education</h3>
                        <div class="resume-item">
                            <h4>Elementary School</h4>
                            <h5>2007 - 2013</h5>
                            <p><em>SDN Dinoyo 1, Jatirejo</em></p>
                            <p>I am a graduate of State Elementary School 1 Dinoyo.</p>
                        </div>
                        <div class="resume-item">
                            <h4>Junior High School </h4>
                            <h5>2013 - 2016</h5>
                            <p><em>SMPN 1 Dlanggu, Dlanggu</em></p>
                            <p>I am a graduate of SMPN 1 Dlanggu Junior High School.</p>
                        </div>
                        <div class="resume-item">
                            <h4>Senior High School</h4>
                            <h5>2016 - 2019</h5>
                            <p><em>SMAN 1 Gondang, Gondang</em></p>
                            <p>I am a graduate of SMAN 1 Gondang High School, majoring in Mathematics and Natural
                                Sciences.</p>
                        </div>
                        <div class="resume-item">
                            <h4>college </h4>
                            <h5>2019 - Now</h5>
                            <p><em>State Polytechnic Of Jember</em></p>
                            <p>I am a student of Jember State Polytechnic, majoring in Information Technology with a
                                focus on Computer Engineering.</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h3 class="resume-title">Work Experience</h3>
                        <style>
                            .resume-item ul {
                                text-align: justify;
                            }

                            .resume-item li {
                                display: inline-block;
                                text-align: justify;
                                width: 100%;
                            }
                        </style>

                        <div class="resume-item">
                            <h4>Information Technology Student Association.</h4>
                            <h5>2019 - 2020</h5>
                            <p><em>Independent Business Coordinator</em></p>
                            <ul>
                                <li>Responsible for planning and organizing profitable activities as part of
                                    entrepreneurial development, aiming to have a positive impact on the Information
                                    Technology Department, specifically, and Jember State Polytechnic in general.</li>
                            </ul>
                        </div>
                        <div class="resume-item">
                            <h4>Information Technology Student Association.</h4>
                            <h5>2020 - 2021</h5>
                            <p><em>Head of the Entrepreneurship Department</em></p>
                            <ul>
                                <li>Responsible for conducting independent entrepreneurial activities and developing the
                                    technopreneurial abilities of students in the Information Technology Department.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Resume Section -->

        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Portfolio</h2>
                    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit
                        sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias
                        ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                </div>

                <div class="row">
                    <div class="col-lg-12 d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
                        <ul id="portfolio-flters">
                            {{-- <li data-filter="*" class="filter-active">All</li> --}}
                            {{-- <li data-filter=".filter-app">App</li> --}}
                            <li data-filter=".filter-card">Services</li>
                            <li data-filter=".filter-web">Website</li>
                        </ul>
                    </div>
                </div>

                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">



                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('MyResume/assets') }}/img/portfolio/sistempakar.png" class="img-fluid"
                                alt="">
                            <div class="portfolio-info">
                                <h4>SKRIPSI TUGAS AKHIR</h4>
                                <p>Website Sistem Deteksi Dini Jenis Penyakit Anemia Pada Ibu Hamil Menggunakan Metode
                                    Certainty Factor</p>
                                <div class="portfolio-links">
                                    <a href="{{ asset('MyResume/assets') }}/img/portfolio/sistempakar.png"
                                        data-gallery="portfolioGallery" class="portfolio-lightbox"
                                        title="Web 3"></a>
                                    <a href="http://cekanemia.kencang.id/" class="portfolio-details-lightbox"
                                        data-glightbox="type: external" title="Portfolio Details"><i
                                            class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('MyResume/assets') }}/img/portfolio/otakkanan.png" class="img-fluid"
                                alt="">
                            <div class="portfolio-info">
                                <h4>MAGANG KULIAH</h4>
                                <p>SISTEM E-LEARNING PT. OTAK KANAN SURABAYA </p>
                                <div class="portfolio-links">
                                    <a href="{{ asset('MyResume/assets') }}/img/portfolio/otakkanan.png"
                                        data-gallery="portfolioGallery" class="portfolio-lightbox"
                                        title="Web 3"></a>
                                    <a href="https://lms.sigarda.com/" class="portfolio-details-lightbox"
                                        data-glightbox="type: external" title="Portfolio Details"><i
                                            class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('MyResume/assets') }}/img/portfolio/services1.png" class="img-fluid"
                                alt="">
                            <div class="portfolio-info">
                                <h4>SERVICES</h4>
                                <p>PC 1</p>
                                <div class="portfolio-links">
                                    <a href="{{ asset('MyResume/assets') }}/img/portfolio/services1.png"
                                        data-gallery="portfolioGallery" class="portfolio-lightbox"
                                        title="Bongkar Laptop Lenovo
                                        Ideaped 320 - Pergantian HDD Error"><i
                                            class="bx bx-search"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('MyResume/assets') }}/img/portfolio/services2.png" class="img-fluid"
                                alt="">
                            <div class="portfolio-info">
                                <h4>SERVICES</h4>
                                <p>PC 2</p>
                                <div class="portfolio-links">
                                    <a href="{{ asset('MyResume/assets') }}/img/portfolio/services2.png"
                                        data-gallery="portfolioGallery" class="portfolio-lightbox"
                                        title="Laptop Lenovo X220 downgrade dari Windows 11 ke Windows 10 "><i
                                            class="bx bx-search"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('MyResume/assets') }}/img/portfolio/services3.png" class="img-fluid"
                                alt="">
                            <div class="portfolio-info">
                                <h4>SERVICES</h4>
                                <p>PC 3</p>
                                <div class="portfolio-links">
                                    <a href="{{ asset('MyResume/assets') }}/img/portfolio/services3.png"
                                        data-gallery="portfolioGallery" class="portfolio-lightbox"
                                        title="Repair PC Jadul dengan mengupdate Drivers yang sudah ada dengan menggunakan HP sebagai Modem Internet "><i
                                            class="bx bx-search"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('MyResume/assets') }}/img/portfolio/services4.png" class="img-fluid"
                                alt="">
                            <div class="portfolio-info">
                                <h4>SERVICES</h4>
                                <p>PC 4</p>
                                <div class="portfolio-links">
                                    <a href="{{ asset('MyResume/assets') }}/img/portfolio/services4.png"
                                        data-gallery="portfolioGallery" class="portfolio-lightbox"
                                        title="Laptop HP Error Driver dan Downgrade ke Windows 10 Driver Done "><i
                                            class="bx bx-search"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('MyResume/assets') }}/img/portfolio/services5.png" class="img-fluid"
                                alt="">
                            <div class="portfolio-info">
                                <h4>SERVICES</h4>
                                <p>PC 5</p>
                                <div class="portfolio-links">
                                    <a href="{{ asset('MyResume/assets') }}/img/portfolio/services5.png"
                                        data-gallery="portfolioGallery" class="portfolio-lightbox"
                                        title="Laptop Acer 4736 Done Replace Keyboard Error & Optimation OS Windows 7"><i
                                            class="bx bx-search"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('MyResume/assets') }}/img/portfolio/services6.png" class="img-fluid"
                                alt="">
                            <div class="portfolio-info">
                                <h4>SERVICES</h4>
                                <p>PC 6</p>
                                <div class="portfolio-links">
                                    <a href="{{ asset('MyResume/assets') }}/img/portfolio/services6.png"
                                        data-gallery="portfolioGallery" class="portfolio-lightbox"
                                        title="Laptop HP Install Ulang Operation System Windows 10 Build Type 21H1"><i
                                            class="bx bx-search"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('MyResume/assets') }}/img/portfolio/services7.png" class="img-fluid"
                                alt="">
                            <div class="portfolio-info">
                                <h4>SERVICES</h4>
                                <p>PC 7</p>
                                <div class="portfolio-links">
                                    <a href="{{ asset('MyResume/assets') }}/img/portfolio/services7.png"
                                        data-gallery="portfolioGallery" class="portfolio-lightbox"
                                        title="Laptop Lenovo L430 Services FAN CPU & Slot SSD Repair"><i
                                            class="bx bx-search"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('MyResume/assets') }}/img/portfolio/services8.png" class="img-fluid"
                                alt="">
                            <div class="portfolio-info">
                                <h4>SERVICES</h4>
                                <p>PC 8</p>
                                <div class="portfolio-links">
                                    <a href="{{ asset('MyResume/assets') }}/img/portfolio/services8.png"
                                        data-gallery="portfolioGallery" class="portfolio-lightbox"
                                        title="Laptop Asus A407UF Error MBR Windows 10 & Upgrade OS Windows 11 Done"><i
                                            class="bx bx-search"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('MyResume/assets') }}/img/portfolio/services9.png" class="img-fluid"
                                alt="">
                            <div class="portfolio-info">
                                <h4>SERVICES</h4>
                                <p>PC 9</p>
                                <div class="portfolio-links">
                                    <a href="{{ asset('MyResume/assets') }}/img/portfolio/services9.png"
                                        data-gallery="portfolioGallery" class="portfolio-lightbox"
                                        title="Laptop Lenovo Ideaped Clonning OS From HDD to SSD Windows 10 "><i
                                            class="bx bx-search"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Portfolio Section -->



        <!-- ======= Testimonials Section ======= -->
        {{-- <section id="testimonials" class="testimonials section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Testimonials</h2>
                </div>

                <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="{{ asset('MyResume/assets') }}/img/testimonials/testimonials-1.jpg"
                                    class="testimonial-img" alt="">
                                <h3>Saul Goodman</h3>
                                <h4>Ceo &amp; Founder</h4>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit
                                    rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam,
                                    risus at semper.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="{{ asset('MyResume/assets') }}/img/testimonials/testimonials-2.jpg"
                                    class="testimonial-img" alt="">
                                <h3>Sara Wilsson</h3>
                                <h4>Designer</h4>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid
                                    cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet
                                    legam anim culpa.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="{{ asset('MyResume/assets') }}/img/testimonials/testimonials-3.jpg"
                                    class="testimonial-img" alt="">
                                <h3>Jena Karlis</h3>
                                <h4>Store Owner</h4>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem
                                    veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint
                                    minim.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="{{ asset('MyResume/assets') }}/img/testimonials/testimonials-4.jpg"
                                    class="testimonial-img" alt="">
                                <h3>Matt Brandon</h3>
                                <h4>Freelancer</h4>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim
                                    fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem
                                    dolore labore illum veniam.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="{{ asset('MyResume/assets') }}/img/testimonials/testimonials-5.jpg"
                                    class="testimonial-img" alt="">
                                <h3>John Larson</h3>
                                <h4>Entrepreneur</h4>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster
                                    veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam
                                    culpa fore nisi cillum quid.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section><!-- End Testimonials Section --> --}}

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Contact</h2>
                </div>

                <div class="row mt-1">

                    <div class="col-lg-4">
                        <div class="info">
                            <div class="address">
                                <i class="bi bi-geo-alt"></i>
                                <h4>Location:</h4>
                                <p>Jember, East Java, Indonesia</p>
                            </div>

                            <div class="email">
                                <i class="bi bi-envelope"></i>
                                <h4>Email:</h4>
                                <p>masligabayu@gmail.com</p>
                            </div><br>

                            <div class="instagram">
                                <i class="bi bi-instagram"></i>
                                <h4>Instagram DM:</h4>
                                <p>@ligabayu_25</p>
                            </div>

                        </div>

                    </div>

                    <div class="col-lg-8 mt-5 mt-lg-0">

                        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name" class="form-control" id="name"
                                        placeholder="Your Name" required readonly>
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Your Email" required readonly>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="subject" id="subject"
                                    placeholder="Subject" required readonly>
                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form-control" name="message" rows="5" placeholder="Message" required readonly></textarea>
                            </div>
                            <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div>
                            {{-- <div class="text-center"><button type="submit">Send Message</button></div> --}}
                        </form>

                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container">
            <h3>Liga Bayu Herdianto</h3>
            <p>Belajar Semua Yang Kita Butuh !</p>
            <div class="social-links">
                <a href="https://www.youtube.com/@ligabayuherdianto4062" class="youtube"><i
                        class="bx bxl-youtube"></i></a>
                <a href="https://github.com/LigaBayuHerdianto" class="github"><i class="bx bxl-github"></i></a>
                <a href="https://instagram.com/ligabayu_25?igshid=NGExMmI2YTkyZg==" class="instagram"><i
                        class="bx bxl-instagram"></i></a>
                <a href="http://www.linkedin.com/in/LigaBayuHerdianto" class="linkedin"><i
                        class="bx bxl-linkedin"></i></a>
            </div>
            <div class="copyright">
                &copy; Copyright <strong><span>MyResume</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: [license-url] -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/free-html-bootstrap-template-my-resume/ -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('MyResume/assets') }}/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="{{ asset('MyResume/assets') }}/vendor/aos/aos.js"></script>
    <script src="{{ asset('MyResume/assets') }}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('MyResume/assets') }}/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="{{ asset('MyResume/assets') }}/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="{{ asset('MyResume/assets') }}/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="{{ asset('MyResume/assets') }}/vendor/typed.js/typed.umd.js"></script>
    <script src="{{ asset('MyResume/assets') }}/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="{{ asset('MyResume/assets') }}/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('MyResume/assets') }}/js/main.js"></script>

</body>

</html>
