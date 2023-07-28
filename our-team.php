<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <title>IEEE Website</title>
    <link rel="stylesheet" href="bye.css">
</head>
<style>
    body {
        font-family: "Open sans", sans-serif;
        color: #444444;
    }

    #ieam {
        margin-top: 3rem;
        ;
    }

    a {
        color: #e03a3c;
    }

    a:hover {
        color: #e03a3c;
        text-decoration: none;
    }

    .team .member {
        margin-bottom: 20px;
        /* overflow: hidden; */
        border-radius: 5px;
        background: #fff;
    }

    .team .member .member-img {
        position: relative;
        /* overflow: hidden; */
    }

    .team .member .social {
        position: absolute;
        left: 0;
        bottom: 30px;
        right: 0;
        opacity: 0;
        transition: ease-in-out 0.3s;
        text-align: center;
    }

    .team .member:hover .social {
        opacity: 1;
        bottom: 15px;
    }

    .team .member .social a {
        transition: color 0.3s;
        color: #111111;
        margin: 0 3px;
        padding-top: 7px;
        border-radius: 50px;
        width: 36px;
        height: 36px;
        background: #e03a3c;
        display: inline-block;
        transition: ease-in-out 0.3s;
        color: #fff;
    }

    .team .member .social a:hover {
        background: #111111;
    }

    .team .member .social i {
        font-size: 18px;
    }

    .team.member .member-info {
        padding: 25px 15px;
    }

    .team.member .member-img h4 {
        font-weight: 700;
        margin-bottom: 5px;
        font-size: 18px;
        color: #111111;
    }

    .imge {
        height: 200px;
        width: 500px;
    }

    .team .member .member-info span {
        display: block;
        font-size: 13px;
        font-weight: 700;
        color: #8d8c8c;
    }

    section {
        padding: 60px 0;
        /* overflow: hidden; */
        position: relative;
    }

    .section-title {
        text-align: center;
        padding-bottom: 30px;
        position: relative;
    }

    .section-title h2 {
        font-size: 32px;
        font-weight: bold;
        text-transform: uppercase;
        margin-bottom: 20px;
        padding-bottom: 20px;
        position: relative;
    }

    .section-title h2::after {
        content: "";
        position: absolute;
        display: block;
        width: 80px;
        height: 3px;
        background: #e03a3c;
        bottom: 0;
        left: calc(49% - 25px);
    }

    .section-title p {
        margin-bottom: 0;
    }

    .section-bg {
        padding: 120px 0;
        color: #fff;
    }

    .section-bg::before {
        content: "";
        background: #1b1b1b;
        position: absolute;
        bottom: 60px;
        top: 60px;
        left: 0;
        right: 0;
        transform: skewY(-3deg);
    }
</style>

<body>
    <?php require 'required/menu.php' ?>

    <section id="ieam" class="team section-bg">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>Our Team</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                    <div class="member card" data-aos="fade-up" data-aos-delay="100">
                        <div class="member-img">
                            <img src="https://i.guim.co.uk/img/media/fd9b9ed4d416bd1867fe356e49975b9527c26765/0_59_2588_1553/master/2588.jpg?width=1200&height=1200&quality=85&auto=format&fit=crop&s=9524bc6ee58b97a7230c38228afaecec" class="img-fluid imge" alt="GoogleCEO">
                            <div class="social">
                                <a href=""><i class='bx bxl-twitter'></i></a>
                                <a href=""><i class='bx bxl-facebook'></i></a>
                                <a href=""><i class='bx bxl-instagram'></i></a>
                                <a href=""><i class='bx bxl-linkedin'></i></a>
                            </div>
                        </div>
                        <div class="member-info card-body">
                            <h4 class="class-text">Sundar Pichai</h4>
                            <span class="class-text">Chief Executive Officer</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                    <div class="member card" data-aos="fade-up" data-aos-delay="200">
                        <div class="member-img">
                            <img src="https://i.guim.co.uk/img/media/fd9b9ed4d416bd1867fe356e49975b9527c26765/0_59_2588_1553/master/2588.jpg?width=1200&height=1200&quality=85&auto=format&fit=crop&s=9524bc6ee58b97a7230c38228afaecec" class="img-fluid imge" alt="GoogleCEO">
                            <div class="social">
                                <a href=""><i class='bx bxl-twitter'></i></a>
                                <a href=""><i class='bx bxl-facebook'></i></a>
                                <a href=""><i class='bx bxl-instagram'></i></a>
                                <a href=""><i class='bx bxl-linkedin'></i></a>
                            </div>
                        </div>
                        <div class="member-info card-body">
                            <h4 class="class-text">Satya Nadela</h4>
                            <span class="class-text">Chief Executive Officer</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                    <div class="member card" data-aos="fade-up" data-aos-delay="300">
                        <div class="member-img">
                            <img src="https://i.guim.co.uk/img/media/fd9b9ed4d416bd1867fe356e49975b9527c26765/0_59_2588_1553/master/2588.jpg?width=1200&height=1200&quality=85&auto=format&fit=crop&s=9524bc6ee58b97a7230c38228afaecec" class="img-fluid imge" alt="GoogleCEO">
                            <div class="social">
                                <a href=""><i class='bx bxl-twitter'></i></a>
                                <a href=""><i class='bx bxl-facebook'></i></a>
                                <a href=""><i class='bx bxl-instagram'></i></a>
                                <a href=""><i class='bx bxl-linkedin'></i></a>
                            </div>
                        </div>
                        <div class="member-info card-body">
                            <h4 class="class-text">Elon Musk</h4>
                            <span class="class-text">Chief Executive Officer</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                    <div class="member card" data-aos="fade-up" data-aos-delay="400">
                        <div class="member-img">
                            <img src="https://i.guim.co.uk/img/media/fd9b9ed4d416bd1867fe356e49975b9527c26765/0_59_2588_1553/master/2588.jpg?width=1200&height=1200&quality=85&auto=format&fit=crop&s=9524bc6ee58b97a7230c38228afaecec" class="img-fluid imge" alt="GoogleCEO">
                            <div class="social">
                                <a href=""><i class='bx bxl-twitter'></i></a>
                                <a href=""><i class='bx bxl-facebook'></i></a>
                                <a href=""><i class='bx bxl-instagram'></i></a>
                                <a href=""><i class='bx bxl-linkedin'></i></a>
                            </div>
                        </div>
                        <div class="member-info card-body">
                            <h4 class="class-text">Mark Zuckerberg</h4>
                            <span class="class-text">Chief Executive Officer</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</html>