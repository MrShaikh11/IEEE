<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="event.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

    <title>Events Page</title>

    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

        /* Cetacean blue. 02143b
Dark grey.   808080
Cream eee1c6
Beige.  Ebd292
Bright pink.  Ff007e */

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
        }

        header {
            height: 10vh;
            color: white;
            font-size: 2rem;
            padding: 5px 10px;
            background-color: black;
            text-align: center;
        }

        .hero {
            max-width: 100vw;
            height: 100vh;
            background: url('images/hackathon.jpg') no-repeat center / cover;
            margin: 30px;
        }

        main {
            background-color: #02143b;
            color: white;
            margin: 50px;
            margin-top: -120px;
            border-top-right-radius: 50px;
            border-top-left-radius: 50px;
            padding: 40px;
            /* max-width: 88rem; */
        }

        main h2 {
            color: #808080;
            font-size: 2rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        main .text {
            display: flex;

            justify-content: space-between;
            color: yellow;
            opacity: 0.7;
            max-width: 60vw;
            margin: 5px 0px;
            font-size: 1em;
            font-weight: 400;
            letter-spacing: 1px;
            text-transform: uppercase;
        }

        main p {
            margin: 1rem 0;
        }

        br {
            display: none;
        }

        main .content-img-container {
            width: 100%;
            height: 35rem;
            background: url('images/hackathon2.jpg') no-repeat center center/cover;
            margin: 10px 0;
        }

        .content-img-container:hover {
            border-radius: 20px;
            cursor: pointer;
        }

        .events {
            width: 100%;
            background-color: #02143b;
            color: white;
            margin: 1rem 0;
            padding: 5rem 0;
        }

        .events .event-heading {
            text-transform: uppercase;
            text-align: center;
            width: 100%;
            position: relative;
        }

        .event-heading h5 {
            font-size: 10rem;
            font-weight: 600;
            letter-spacing: 3px;
            color: #808080;
            position: relative;
            opacity: 0.2;
            margin: -10px 0px;
        }

        .event-heading h6 {
            font-size: 4rem;
            font-weight: bold;
            color: #808080;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .line {
            border-bottom: 3px solid #ff007e;
            width: 12%;
            transform: rotate(140deg);
            transform-origin: right;
            position: relative;
            top: 3rem;
            left: 57rem;
        }

        .line2 {
            border-bottom: 3px solid #ff007e;
            width: 10%;
            transform: rotate(140deg);
            transform-origin: right;
            position: relative;
            top: 3rem;
            left: 60rem;
        }

        .cards {
            display: flex;
            justify-content: center;
            margin: 4rem 2rem;
            gap: 2rem;
        }

        .cards .cards-container {
            cursor: pointer;
            transition: all 0.4s ease;
        }

        .cards .cards-container .img-holder {
            max-width: 100%;
            height: 24rem;
            background: url('images/cards.jpg') no-repeat center center/cover;
            position: relative;
        }

        .cards .cards-container:hover {
            transform: translateY(-1rem);
        }

        .cards .cards-container .card-text {
            background-color: white;
            color: #02143b;
            padding: 2rem;
            box-sizing: 0 0 0.3rem #808080;
        }

        .cards .cards-container .card-text h5 {
            font-size: 1.5rem;
            text-transform: uppercase;
            margin-bottom: 1rem;
        }

        .cards .cards-container /.card-text p {
            font-size: 1.2rem;
        }

        footer {
            height: 25vh;
            color: white;
            font-size: 2.5rem;
            padding: 15px 20px;
            background-color: black;
        }

        @media screen and (min-width: 480px) and (max-width: 800px) {
            main .text {
                display: block;
                max-width: 90vw;
                font-size: 1.1rem;
                padding: 10px;
            }

            main .content-img-container {
                max-width: 100vw;
                height: 50vh;
                margin: 30px 0;
            }

            .line .line2 {
                display: none;
            }

            .content {
                font-size: 1rem;
            }


            .cards {
                display: block;
            }

            .cards-container {
                margin: 30px 0px;
            }

            .one .two .three {
                height: 40vh;
            }

            footer {
                height: 10vh;
                text-align: center;
            }


        }

        @media screen and (max-width: 480px) {

            .hero {
                max-width: 100vw;
                height: 50vh;
                background: url('images/hackathon.jpg') no-repeat center / cover;
                margin: 30px;
                border: 10px solid #02143b;
                border-radius: 40px;
            }

            main {
                width: 100vw;
                margin: -100px 0;
            }

            main h2 {
                font-size: 1.3rem;
            }

            main .text {
                display: block;
                max-width: 90vw;
                font-size: 0.9rem;
                padding: 10px;
            }

            .content {
                font-size: 0.9rem;
            }

            main .content-img-container {
                max-width: 100vw;
                height: 30vh;
                margin: 30px 0;
            }

            .line .line2 {
                display: none;
            }

            .cards {
                display: block;
            }

            .cards-container {
                margin: 30px 0px;
            }

            .one .two .three {
                height: 40vh;
            }

            footer {
                height: 10vh;
                text-align: center;
            }
        }
    </style>
</head>

<body>
    <header>
        <div class="navbar">Navbar</div>
    </header>

    <div class="container">
        <div class="hero"></div>
    </div>

    <main>
        <h2>Hackathonify: 2023</h2>

        <div class="info">
            <div class="text">
                <p>
                    <i class="fa-solid fa-calendar" style="color: #808080; margin: 0px 10px"></i>July 24, 2023
                </p>
                <p>
                    <i class="fa-regular fa-clock" style="color: #808080; margin: 0px 5px"></i> 10.40 am
                </p>
                <p>
                    <i class="fa-solid fa-location-dot" style="color: #808080; margin: 0px 5px"></i>
                    M.H. Saboo Siddik College of Engineering
                </p>
            </div>
        </div>

        <div class="content">
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis
                velit consectetur reiciendis nemo earum veniam molestiae reprehenderit
                distinctio dolore. Rem asperiores vitae accusamus voluptas culpa
                aliquam possimus qui, earum ducimus ut perferendis veniam quae
                obcaecati praesentium sapiente neque a. Iusto, tenetur? Provident
                cupiditate quos quam nisi, fugit dolor dolorum suscipit unde totam
                praesentium! Cum consectetur vero itaque illum aut atque illo, sit
                autem quisquam tempora temporibus sed blanditiis illo est possimus,
                mollitia voluptatem maxime ex nam, soluta suscipit eos similique
                fugiat dolor explicabo. Illum, inventore consequuntur. Culpa
                aspernatur quas repellat iusto maxime veniam explicabo vitae fuga
                exercitationem dolore. Id accusamus pariatur, modi fugiat corrupti
                adipisci itaque! Labore.
            </p>
            <br />
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis
                velit consectetur reiciendis nemo earum veniam molestiae reprehenderit
                distinctio dolore. Rem asperiores vitae accusamus voluptas culpa
                aliquam possimus qui, earum ducimus ut perferendis veniam quae
                obcaecati praesentium sapiente neque a. Iusto, tenetur? Provident
                cupiditate quos quam nisi, fugit dolor dolorum suscipit unde totam
                praesentium! Cum consectetur vero itaque illum aut atque illo, sit
                autem quisquam tempora temporibus sed ab doloribus quae dolor
                veritatis saepe neque suscipit recusandae fugiat maxime veniam
            </p>
            <br />
            <div class="content-img-container"></div>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis
                velit consectetur reiciendis nemo earum veniam molestiae reprehenderit
                distinctio dolore. Rem asperiores vitae accusamus voluptas culpa
                aliquam possimus qui, earum ducimus ut perferendis veniam quae
                obcaecati praesentium sapiente neque a. Iusto, tenetur? Provident
                cupiditate quos quam nisi, fugit dolor dolorum suscipit unde totam
                praesentium! Cum consectetur vero itaque illum aut atque illo, sit
                autem quisquam tempora temporibus sed ab doloribus quae dolor
                veritatis saepe neque
            </p>
            <br />
        </div>
        <div class="line"></div>
        <div class="line2"></div>
    </main>

    <div class="events">
        <div class="event-heading">
            <h5>IEEE</h5>
            <h6>Past Events</h6>
        </div>

        <div class="cards container">
            <div class="cards-container one">
                <div class="img-holder"></div>
                <div class="card-text">
                    <h5>Coding Competition</h5>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus,
                        amet reprehenderit! Quod nemo at est maiores consequuntur
                        exercitationem possimus pariatur adipisci delectus cum optio quasi
                        alias qui quidem, ipsam placeat dignissimos iste corporis vel
                        dicta, quo voluptatibus. Fuga, adipisci incidunt consequuntur odio
                        dolore, nam nisi culpa sapiente libero voluptas corrupti.
                    </p>
                </div>
            </div>

            <div class="cards-container two">
                <div class="img-holder"></div>
                <div class="card-text">
                    <h5>Coding Competition</h5>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus,
                        amet reprehenderit! Quod nemo at est maiores consequuntur
                        exercitationem possimus pariatur adipisci delectus cum optio quasi
                        alias qui quidem, ipsam placeat dignissimos iste corporis vel
                        dicta, quo voluptatibus. Fuga, adipisci incidunt consequuntur odio
                        dolore, nam nisi culpa sapiente libero voluptas corrupti.
                    </p>
                </div>
            </div>

            <div class="cards-container three">
                <div class="img-holder"></div>
                <div class="card-text">
                    <h5>Coding Competition</h5>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus,
                        amet reprehenderit! Quod nemo at est maiores consequuntur
                        exercitationem possimus pariatur adipisci delectus cum optio quasi
                        alias qui quidem, ipsam placeat dignissimos iste corporis vel
                        dicta, quo voluptatibus. Fuga, adipisci incidunt consequuntur odio
                        dolore, nam nisi culpa sapiente libero voluptas corrupti.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <footer>Footer</footer>
</body>

</html>