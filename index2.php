<!-- <?php require 'required/menu.php' ?> -->

<section>
    <style>
        .main {
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .con {
            position: relative;
            width: 1100px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            padding: 30px;
        }

        .con .cd {
            position: relative;
            width: 300px;
            height: 215px;
            box-shadow: 0 10px 202px rgba(0, 0, 0, 0.5);
            background: linear-gradient(45deg, #b95ce4, #4f29cd);
            margin: 30px 10px;
            padding: 20px 15px;
            display: flex;
            flex-direction: column;
            transition: 0.3s ease-in-out;
        }

        .con .cd:hover {
            height: 450px;
        }

        .con .cd .imgbox {
            position: relative;
            width: 260px;
            height: 260px;
            top: -60px;
            left: 20px;
            z-index: 1;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.2);

        }

        .con .cd .imgbox img {
            max-width: 100%;
            border-radius: 4px;
        }

        .con .cd .content {
            position: relative;
            margin-top: -140px;
            padding: 10px 15px;
            text-align: center;
            color: #111;
            visibility: hidden;
            opacity: 0;
            transition: 0.3s ease-in-out;
        }

        .con .cd:hover .content {
            visibility: visible;
            opacity: 1;
            margin-top: -40px;
            transition-delay: 0.3s;
        }
    </style>
    <div class="main">
        <div class=" container-fluid con">
            <div class="card cd">
                <div class="imgbox">
                    <img src="img/banner.png" alt="..." height="260" width="260">
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
                    <img src="img/banner.png" alt="..." height="260" width="260">
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
                    <img src="img/banner.png" alt="..." height="260" width="260">
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
    </div>
</section>