<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <title>About us</title>
    <link rel="stylesheet" href="include/style.css">
</head>

<body>
    <!-- <?php require 'required/menu.php' ?> -->
<style>
    *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Roboto',sans-serif;
}
body
{
    background-color: lightblue;
}
.heading{
    width: 90%;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    text-align: center;
    margin: 5px auto;
}
.heading h1{
    font: 50px;
    color: #000;
    margin-bottom: 45px;
    position: relative;
}
.heading h1::after{
    content: "";
    position: absolute;
    width: 100%;
    height: 4px;
    display: block;
    margin: 0 auto;
    background-color: #4caf50;
}
.heading p{
    font-size: 18px;
    color: black;
    margin-bottom: 5px;
    font-weight: 400;
}
.container{
    width: 90%;
    margin: 0 auto;
    padding: 5px 20px;
}
.about
{
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
}
.about-image{
    flex: 1;
    margin-right: 40px;
    overflow: hidden;
}
.about-image img{
    max-width: 100%;
    height: auto;
    display: block;
    transition: 0.5s ease;
}
.about-image:hover img{
    transform: scale(1.2);
}
.about-content{
    flex: 1;
}
.about-content h2{
    font-size: 23px;
    margin-bottom: 10px;
    color: #333;
}
.about-content p{
    font-size: 18px;
    /* line-height: 20px; */
    color: #666;
}
.about-content .read-more{
    display: inline-block;
    padding: 10px 20px;
    background-color: #4caf50;
    color: #fff;
    font-size: 19px;
    text-decoration:none;
    border-radius: 25px;
    margin-top: 15px;
    transition: 0.3s ease;
}
.about-content .read-more:hover{
    background-color: #3e8e41;
}
@media screen and (max-width: 786px){
    .heading{
        padding: 0px 20px;
    }
    .heading h1{
        font-size: 36px;
    }
    .heading p{
        font-size: 17px;
        margin-bottom: 0px;
    }
    .container{
        padding: 0px;
    }
    .about{
        padding: 20px;
        flex-direction: column;
    }
    .about-image{
        margin-right: 0px;
        margin-bottom: 20px;
    }
    .about-content p{
        padding: 0;
        font-size: 16px;
    }
    .about-content .read-more{
        font-size: 16px;
    }
}
</style>
    <body>
    <div class="heading" data-aos="flip-up">
        <h1>About us</h1>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
            when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
    </div>
    <div class="container">
        <section class="about">
            <div class="about-image" data-aos="fade-right">
                <img src="images/aboutus.jpg" alt="about-image">
            </div>
            <div class="about-content" data-aos="fade-left">
                <h2>Hello There! This is about us</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum is simply dummy
                    text of the printing and typesetting industry Lorem Ipsum is simply dummy text of the printing and
                    typesetting industry Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem
                    Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                <a href="" class="read-more" data-aos="flip-down">Read More</a>
            </div>
        </section>
    </div>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
    </body>

</html>