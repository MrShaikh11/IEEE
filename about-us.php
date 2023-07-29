<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>IEEE Website</title>
    <link rel="stylesheet" href="include/style.css">
</head>

<body>
    <?php require 'required/menu.php' ?>

    <body>
        <div class="nav">
            <ul>
                <div class="img">
                    <img id="logo" src="images/Ieee_blue.jpg" alt="img" />
                </div>
                <li><a href="#home">Home</a></li>
                <li><a href="#news">News</a></li>
                <li class="dropdown">
                    <a href="javascript:void(0)" class="dropbtn">Dropdown</a>
                    <div class="dropdown-content">
                        <a href="#">Link 1</a>
                        <a href="#">Link 2</a>
                        <a href="#">Link 3</a>
                    </div>
                </li>
            </ul>

            <h3>Dropdown Menu inside a Navigation Bar</h3>
            <p>Hover over the "Dropdown" link to see the dropdown menu.</p>
        </div>
    </body>

</html>