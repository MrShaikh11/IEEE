<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Footer</title>
    <!-- <link rel="stylesheet" href="style.css" /> -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
      integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <style>
        * {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}
body {
  display: flex;
  justify-content: flex-end;
  align-items: center;
  flex-direction: column;
  /* min-height: 100vh; */
}
footer {
  position: relative;
}
.container {
    
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  min-height:0 ;
}
.row {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 3rem;
  width: 100vw;
  background-color: black;
}

.col {
  min-width: 250px;
  color: #f2f2f2f2;
  font-family: poppins;
  padding: 0 1rem;
  font-size: 1.2rem;
}
.col .logo {
  width: 200px;
}
.col h3 {
  color: #ff014fff;
  margin-bottom: 20px;
  position: relative;
  cursor: pointer;
}
.col h3::after {
  content: "";
  height: 3px;
  width: 0px;
  background-color: #ff014fff;
  position: absolute;
  bottom: 0;
  left: 0;
  transition: 0.3s ease;
}
.col h3:hover::after {
  width: 30px;
}
.col .social a i {
  color: #ff014fff;
  margin-top: 2rem;
  margin-right: 10px;
  transition: 0.3s ease;
}
.col .social a i:hover {
  transform: scale(1.1);
  filter: contrast(200%);
}
.col .links a {
  display: block;
  text-decoration: none;
  color: #f2f2f2;
  margin-bottom: 5px;
  position: relative;
  transition: 0.3s ease;
}
.col .links a::before {
  content: "";
  height: 16px;
  width: 3px;
  position: absolute;
  top: 5px;
  left: -10px;
  background-color: #ff014fff;
  transition: 0.5s ease;
  opacity: 0;
}
.col .links a:hover::before {
  opacity: 1;
}
.col .links a:hover {
  transform: translateX(-8px);
  color: #ff014fff;
}
.col .contact-details {
  display: inline-flex;
  justify-content: space-between;
}
.col .contact-details i {
  margin-right: 15px;
}
.row .form {
  display: flex;
  justify-content: center;
  align-items: center;
}
.footer-bottom {
  border-top: 1px solid #ff014fff;
  padding: 10px;
  text-align: center;
  background-color: black;
  color: antiquewhite;
  width: 100vw;
}

@media (max-width: 900px) {
  .row {
    flex-direction: column;
  }
  .col {
    width: 100%;
    text-align: left;
    margin-bottom: 25px;
  }
}
@media (max-width: 768px) {
  .row {
    flex-direction: column;
  }
  .col {
    width: 100%;
    text-align: left;
    margin-bottom: 20px;
  }
}

    </style>
  </head>
  <body>
    <footer>
      <div class="container">
        <div class="row">
          <div class="col" id="company">
            <img src="logo.png" alt="IEEE logo" class="logo" width="200px" />
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit.
              Aspernatur quisquam error libero sed animi vel natus, quae aliquam
              voluptatum repellendus ut dicta architecto labore accusamus modi
              omnis ad possimus neque, porro magnam, id reprehenderit! Illum ex
              repudiandae magnam rem ratione quidem libero dolores quod, laborum
              facere recusandae modi voluptates. Placeat?
            </p>
            <div class="social">
              <a href="#"><i class="fa-brands fa-facebook fa-xl"></i></a>
              <a href="#"><i class="fa-brands fa-instagram fa-xl"></i></a>
              <a href="#"><i class="fa-brands fa-youtube fa-xl"></i></a>
              <a href="#"><i class="fa-brands fa-twitter fa-xl"></i></a>
              <a href="#"><i class="fa-brands fa-linkedin fa-xl"></i></a>
            </div>
          </div>

          <div class="col" id="useful-links">
            <h3>Links</h3>
            <div class="links">
              <a href="#">About</a>
              <a href="#">Services</a>
              <a href="#">Eventsaps</a>
              <a href="#">Help</a>
            </div>
          </div>
            <div class="col">

                <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3773.1685852956994!2d72.82874567405828!3d18.968160655351323!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7ce40ffcfcacd%3A0x5d71ff22760f8e77!2sM.H.%20Saboo%20Siddik%20College%20of%20Engineering!5e0!3m2!1sen!2sin!4v1690386776409!5m2!1sen!2sin"
                width="400"
                height="300"
                style="border: 0"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"
                ></iframe>
            </div>
        </div>
      </div>
      <div class="footer-bottom">
        <div class="copyright">
          &copy; Copyright <strong>IEEE-MHSSCE Student Branch</strong>
        </div>
        <div class="credits">
          Designed by <a data-toggle="modal" data-target="#pop-up">WebTeam</a>
        </div>
      </div>
    </footer>
  </body>
</html>
