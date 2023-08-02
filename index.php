<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <title>IEEE Website</title>
    <link rel="stylesheet" href="include/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

</head>

<style>
    .swiper {
        width: 100%;
        height: 100%;
    }

    .swiper-slide {
        text-align: center;
        font-size: 18px;
        background: #fff;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .swiper-slide img {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .swiper {
        margin-left: auto;
        margin-right: auto;
    }
</style>

<body>
    <?php require 'required/menu.php' ?>
    <div class="bgAnimation" id="bgAnimation">
        <div class="backgroundAmim">

        </div>
    </div>


    <!-- -----Banner Start----- -->
    <section style="pointer-events: none;">
        <div class="container banner">

            <div class="container">

                <div class="textBox">
                    <h1 class="text-white">WELCOME TO<br><span>IEEE-MHSSCE</span> STUDENT BRANCH</h1>
                    <p class="text-white">Innovative minds. <br>Accelerating Tech with confidence</p>
                    <!-- <a href="#" class="btn"><span></span><span></span><span></span><span></span>Contact us</a> -->
                    <button class="homeBtn" href="#about-us" style="--i:#00bfff;">ABOUT US</button>
                </div>
            </div>
        </div>
    </section>
    <!-- -----Banner End----- -->

    <!-- Ashlesha Start -->
    <section id="about-us" style=" background: url('images/audience.jpg');background-repeat:no-repeat;background-size:cover;">

        <!-- <div class="main">
            <div class=" container-fluid con">
                <div class="card cd">
                    <div class="imgbox">
                        <img src="https://pbs.twimg.com/profile_images/474591466749034496/2-H1zqWf_400x400.jpeg" alt="..." height="260" width="260">
                    </div>
                    <div class="content">
                        <h2>IEEE</h2>
                        <P>IEEE is the world's largest technical professional organization
                            dedicate to advancing technology for the benefit of humanity.IEEE and its members
                            inspire a global community to innoate for a better tomorrow through highly cited
                            publication, conference, technology standards.....</P>
                    </div>
                </div>
                <div class="card cd">
                    <div class="imgbox">
                        <img src="https://pbs.twimg.com/profile_images/474591466749034496/2-H1zqWf_400x400.jpeg" alt="..." height="260" width="260">
                    </div>
                    <div class="content">
                        <h2>IEEE</h2>
                        <P>IEEE is the world's largest technical professional organization
                            dedicate to advancing technology for the benefit of humanity.IEEE and its members
                            inspire a global community to innoate for a better tomorrow through highly cited
                            publication, conference, technology standards.....</P>
                    </div>
                </div>
                <div class="card cd">
                    <div class="imgbox">
                        <img src="https://pbs.twimg.com/profile_images/474591466749034496/2-H1zqWf_400x400.jpeg" alt="..." height="260" width="260">
                    </div>
                    <div class="content">
                        <h2>IEEE</h2>
                        <P>IEEE is the world's largest technical professional organization
                            dedicate to advancing technology for the benefit of humanity.IEEE and its members
                            inspire a global community to innoate for a better tomorrow through highly cited
                            publication, conference, technology standards.....</P>
                    </div>
                </div>
            </div>
        </div> -->


        <div class="container py-5">
            <div class="row">
                <div class="col-4">
                    <div class="card" style="width: 18rem;">
                        <img src="images/saboo.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">M.H. Saboo Siddik College of Engineering</h5>
                            <p class="card-text">M. H. Saboo Siddik (commonly known as MHSS or Saboo Siddik or Saboo) is an engineering college located in Byculla at Saboo Siddik Polytechnic Road, Mumbai, India, affiliated with the University of Mumbai.[1] It is an 'A' Grade institution, and is accredited by AICTE.[2] The college 154 staff (57-teaching, 97-non-teaching) and a student body of about 1200.
                            </p>
                            <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card" style="width: 18rem;">
                        <img src="images/group.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Student Branch- MHSSCE</h5>
                            <p class="card-text">IEEE (Institute of Electrical and Electronic Engineers) student branch at M.H. Saboo Siddik is made up of student members of IEEE. We are dedicated to provide students great resources and services such as trainings, workshops, events, competitions and campaigns that would enrich their professional and technical abilities.
                            </p>
                            <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card" style="width: 18rem;">
                        <img src="images/why.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Why to Join Us</h5>
                            <p class="card-text">IEEE Student Competitions - from programming to humanitarian to robotics, IEEE membership allows you to compete against your peers and have fun simultaneously.
                                IEEE Scholarships, Awards, and Fellowships - enhance your career through a multitude of offerings.
                                IEEE Potentials Magazine - filled with technical articles and career information, this publication is created just for students.
                            </p>
                            <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Ashlesha End -->


    <!-- Our Team Start -->
    <div>
        <section id="ieam" class="team section-bg">

            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h1 class="" style="color: var(--blue);">Our Team</h1>
                    <p class="text-black">As a team, we stand shoulder to shoulder, facing every challenge with unwavering determination. Our collective strength lies not just in our individual skills, but in our ability to collaborate, communicate, and support one another. Each member brings a unique perspective, enriching our understanding and propelling us towards success. We celebrate victories together and learn from setbacks, constantly growing stronger as a cohesive unit. With shared goals and a shared vision, we march forward, inspiring each other to reach new heights and make a lasting impact</p>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                        <div class="member card" data-aos="fade-up" data-aos-delay="100">
                            <div class="member-img">
                                <img src="images/danish.jpg" class="img-fluid imge" alt="Chairman">
                                <div class="social">
                                    <a href=""><i class='bx bxl-twitter'></i></a>
                                    <a href=""><i class='bx bxl-facebook'></i></a>
                                    <a href=""><i class='bx bxl-instagram'></i></a>
                                    <a href=""><i class='bx bxl-linkedin'></i></a>
                                </div>
                            </div>
                            <div class="member-info card-body">
                                <h4 class="class-text">Danish Shaikh</h4>
                                <span class="class-text">Chairman</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                        <div class="member card" data-aos="fade-up" data-aos-delay="400">
                            <div class="member-img img-fluid">
                                <img src="images/past/24.png" class="img-fluid imge" alt="GoogleCEO">
                                <div class="social">
                                    <a href=""><i class='bx bxl-twitter'></i></a>
                                    <a href=""><i class='bx bxl-facebook'></i></a>
                                    <a href=""><i class='bx bxl-instagram'></i></a>
                                    <a href=""><i class='bx bxl-linkedin'></i></a>
                                </div>
                            </div>
                            <div class="member-info card-body">
                                <h4 class="class-text">Sajjad Shaikh</h4>
                                <span class="class-text">Vice Chariman</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                        <div class="member card" data-aos="fade-up" data-aos-delay="200">
                            <div class="member-img">
                                <img src="images/shams.jpg" class="img-fluid imge" alt="GoogleCEO">
                                <div class="social">
                                    <a href=""><i class='bx bxl-twitter'></i></a>
                                    <a href=""><i class='bx bxl-facebook'></i></a>
                                    <a href=""><i class='bx bxl-instagram'></i></a>
                                    <a href=""><i class='bx bxl-linkedin'></i></a>
                                </div>
                            </div>
                            <div class="member-info card-body">
                                <h4 class="class-text">Shams Dalwai</h4>
                                <span class="class-text">Secretary</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                        <div class="member card" data-aos="fade-up" data-aos-delay="300">
                            <div class="member-img">
                                <img src="images/rashid.png" class="img-fluid imge" alt="GoogleCEO">
                                <div class="social">
                                    <a href=""><i class='bx bxl-twitter'></i></a>
                                    <a href=""><i class='bx bxl-facebook'></i></a>
                                    <a href=""><i class='bx bxl-instagram'></i></a>
                                    <a href=""><i class='bx bxl-linkedin'></i></a>
                                </div>
                            </div>
                            <div class="member-info card-body">
                                <h4 class="class-text">Rashid Ghansar</h4>
                                <span class="class-text">Treasurer</span>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <!-- <h2>Our Team</h2> -->
                    <!-- <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p> -->
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                        <div class="member card" data-aos="fade-up" data-aos-delay="100">
                            <div class="member-img">
                                <img src="images/maaz.jpeg" class="img-fluid imge" alt="GoogleCEO">
                                <div class="social">
                                    <a href=""><i class='bx bxl-twitter'></i></a>
                                    <a href=""><i class='bx bxl-facebook'></i></a>
                                    <a href=""><i class='bx bxl-instagram'></i></a>
                                    <a href=""><i class='bx bxl-linkedin'></i></a>
                                </div>
                            </div>
                            <div class="member-info card-body">
                                <h4 class="class-text">Maaz Shaikh</h4>
                                <span class="class-text">Technical Head</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                        <div class="member card" data-aos="fade-up" data-aos-delay="200">
                            <div class="member-img">
                                <img src="images/adiba.jpg" class="img-fluid imge" alt="GoogleCEO">
                                <div class="social">
                                    <a href=""><i class='bx bxl-twitter'></i></a>
                                    <a href=""><i class='bx bxl-facebook'></i></a>
                                    <a href=""><i class='bx bxl-instagram'></i></a>
                                    <a href=""><i class='bx bxl-linkedin'></i></a>
                                </div>
                            </div>
                            <div class="member-info card-body">
                                <h4 class="class-text">Adiba Khan</h4>
                                <span class="class-text">Administration Head</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                        <div class="member card" data-aos="fade-up" data-aos-delay="300">
                            <div class="member-img">
                                <img src="images/muaaviya.jpg" class="img-fluid imge" alt="GoogleCEO">
                                <div class="social">
                                    <a href=""><i class='bx bxl-twitter'></i></a>
                                    <a href=""><i class='bx bxl-facebook'></i></a>
                                    <a href=""><i class='bx bxl-instagram'></i></a>
                                    <a href=""><i class='bx bxl-linkedin'></i></a>
                                </div>
                            </div>
                            <div class="member-info card-body">
                                <h4 class="class-text">Muaaviya Ansari</h4>
                                <span class="class-text">Creative Head</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                        <div class="member card" data-aos="fade-up" data-aos-delay="400">
                            <div class="member-img">
                                <img src="images/zainab.jpg" class="img-fluid imge" alt="GoogleCEO">
                                <div class="social">
                                    <a href=""><i class='bx bxl-twitter'></i></a>
                                    <a href=""><i class='bx bxl-facebook'></i></a>
                                    <a href=""><i class='bx bxl-instagram'></i></a>
                                    <a href=""><i class='bx bxl-linkedin'></i></a>
                                </div>
                            </div>
                            <div class="member-info card-body">
                                <h4 class="class-text">Zainab Sherazi</h4>
                                <span class="class-text">Event Organization Head</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <!-- <h2>Our Team</h2> -->
                    <!-- <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p> -->
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                        <div class="member card" data-aos="fade-up" data-aos-delay="100">
                            <div class="member-img">
                                <img src="images/shazil.jpg" class="img-fluid imge" alt="GoogleCEO">
                                <div class="social">
                                    <a href=""><i class='bx bxl-twitter'></i></a>
                                    <a href=""><i class='bx bxl-facebook'></i></a>
                                    <a href=""><i class='bx bxl-instagram'></i></a>
                                    <a href=""><i class='bx bxl-linkedin'></i></a>
                                </div>
                            </div>
                            <div class="member-info card-body">
                                <h4 class="class-text">Shazil Katchhi</h4>
                                <span class="class-text">Social Media Head</span>
                            </div>
                        </div>
                    </div>



                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                        <div class="member card" data-aos="fade-up" data-aos-delay="300">
                            <div class="member-img">
                                <img src="images/ali.jpg" class="img-fluid imge" alt="GoogleCEO">
                                <div class="social">
                                    <a href=""><i class='bx bxl-twitter'></i></a>
                                    <a href=""><i class='bx bxl-facebook'></i></a>
                                    <a href=""><i class='bx bxl-instagram'></i></a>
                                    <a href=""><i class='bx bxl-linkedin'></i></a>
                                </div>
                            </div>
                            <div class="member-info card-body">
                                <h4 class="class-text">Ali jafri</h4>
                                <span class="class-text">PR Head</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                        <div class="member card" data-aos="fade-up" data-aos-delay="400">
                            <div class="member-img">
                                <img src="images/rugved.jpg" class="img-fluid imge" alt="GoogleCEO">
                                <div class="social">
                                    <a href=""><i class='bx bxl-twitter'></i></a>
                                    <a href=""><i class='bx bxl-facebook'></i></a>
                                    <a href=""><i class='bx bxl-instagram'></i></a>
                                    <a href=""><i class='bx bxl-linkedin'></i></a>
                                </div>
                            </div>
                            <div class="member-info card-body">
                                <h4 class="class-text">Rugved Patil</h4>
                                <span class="class-text">Photography and Description Head</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                        <div class="member card" data-aos="fade-up" data-aos-delay="200">
                            <div class="member-img">
                                <img src="images/past/25.jpeg" class="img-fluid imge" alt="GoogleCEO">
                                <div class="social">
                                    <a href=""><i class='bx bxl-twitter'></i></a>
                                    <a href=""><i class='bx bxl-facebook'></i></a>
                                    <a href=""><i class='bx bxl-instagram'></i></a>
                                    <a href=""><i class='bx bxl-linkedin'></i></a>
                                </div>
                            </div>
                            <div class="member-info card-body">
                                <h4 class="class-text">Saif Madre</h4>
                                <span class="class-text">Chief Executive Officer</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Our Team End -->

    <!-- Past Evens Start -->
    <section class="past mb-3" id="past">
        <h1 class="text-center mb-3 fw-bold" style="color:var(--blue)">Past Events</h1>

        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="img-fluid" style="height:300px">

                        <img src="images/past/17.jpg" class="img-fluid rounded-top" alt="">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="img-fluid" style="height:300px">

                        <img src="images/past/18.jpg" class="img-fluid rounded-top" alt="">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="img-fluid" style="height:300px">

                        <img src="images/past/19.jpg" class="img-fluid rounded-top" alt="">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="img-fluid" style="height:300px">

                        <img src="images/past/20.jpg" class="img-fluid rounded-top" alt="">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="img-fluid" style="height:300px">

                        <img src="images/past/21.jpg" class="img-fluid rounded-top" alt="">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="img-fluid" style="height:300px">

                        <img src="images/past/22.jpg" class="img-fluid rounded-top" alt="">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="img-fluid" style="height:300px">

                        <img src="images/past/23.jpg" class="img-fluid rounded-top" alt="">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="img-fluid" style="height:300px">

                        <img src="images/past/1.jpeg" class="img-fluid rounded-top" alt="">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="img-fluid" style="height:300px">

                        <img src="images/past/2.jpeg" class="img-fluid rounded-top" alt="">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="img-fluid" style="height:300px">

                        <img src="images/past/3.jpeg" class="img-fluid rounded-top" alt="">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="img-fluid" style="height:300px">

                        <img src="images/past/4.jpeg" class="img-fluid rounded-top" alt="">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="img-fluid" style="height:300px">

                        <img src="images/past/5.jpeg" class="img-fluid rounded-top" alt="">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="img-fluid" style="height:300px">

                        <img src="images/past/6.jpeg" class="img-fluid rounded-top" alt="">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="img-fluid" style="height:300px">

                        <img src="images/past/7.jpeg" class="img-fluid rounded-top" alt="">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="img-fluid" style="height:300px">

                        <img src="images/past/8.jpeg" class="img-fluid rounded-top" alt="">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="img-fluid" style="height:300px">

                        <img src="images/past/9.jpeg" class="img-fluid rounded-top" alt="">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="img-fluid" style="height:300px">

                        <img src="images/past/10.jpeg" class="img-fluid rounded-top" alt="">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="img-fluid" style="height:300px">

                        <img src="images/past/11.jpeg" class="img-fluid rounded-top" alt="">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="img-fluid" style="height:300px">

                        <img src="images/past/12.jpeg" class="img-fluid rounded-top" alt="">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="img-fluid" style="height:300px">

                        <img src="images/past/13.jpeg" class="img-fluid rounded-top" alt="">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="img-fluid" style="height:300px">

                        <img src="images/past/14.jpeg" class="img-fluid rounded-top" alt="">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="img-fluid" style="height:300px">

                        <img src="images/past/15.jpeg" class="img-fluid rounded-top" alt="">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="img-fluid" style="height:300px">

                        <img src="images/past/16.jpeg" class="img-fluid rounded-top" alt="">
                    </div>
                </div>

            </div>
            <!-- <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div> -->
        </div>

    </section>

    <!-- Past Evens End -->

    <!-- Contact Us Start -->

    <div class="container-fluid contactContainer">
        <span class="big-circle"></span>
        <img src="images/shape.png" class="square" alt="" />
        <div class="form contactForm">
            <div class="contact-info">
                <h3 class="title">Let's get in touch</h3>
                <p class="text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe
                    dolorum adipisci recusandae praesentium dicta!
                </p>

                <div class="info">
                    <div class="information">
                        <img src="images/location.png" class="icon" alt="" />
                        <p>92 Cherry Drive Uniondale, NY 11553</p>
                    </div>
                    <div class="information">
                        <img src="images/email.png" class="icon" alt="" />
                        <p>lorem@ipsum.com</p>
                    </div>
                    <div class="information">
                        <img src="images/phone.png" class="icon" alt="" />
                        <p>123-456-789</p>
                    </div>
                </div>

                <div class="social-media">
                    <p>Connect with us :</p>
                    <div class="social-icons">
                        <a href="#">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="contact-form">
                <span class="circle one"></span>
                <span class="circle two"></span>

                <form action="index.html" autocomplete="off">
                    <h3 class="title">Contact us</h3>
                    <div class="input-container">
                        <input type="text" name="name" class="input" />
                        <label for="">Username</label>
                        <span>Username</span>
                    </div>
                    <div class="input-container">
                        <input type="email" name="email" class="input" />
                        <label for="">Email</label>
                        <span>Email</span>
                    </div>
                    <div class="input-container">
                        <input type="tel" name="phone" class="input" />
                        <label for="">Phone</label>
                        <span>Phone</span>
                    </div>
                    <div class="input-container textarea">
                        <textarea name="message" class="input"></textarea>
                        <label for="">Message</label>
                        <span>Message</span>
                    </div>
                    <input type="submit" value="Send" class="btn" />
                </form>
            </div>
        </div>
    </div>


    <!-- Contact Us End -->

    <?php require "required/footer.php" ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>



    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

    <script>

    </script>

    <script src="include/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>