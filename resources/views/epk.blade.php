<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Electronic Press Kit</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            body {
                background-color: darkred
            }
                
            

            .main-container {
                position: relative;
                left: 450px;          
                height: 600px;
                width: 500px;
                background-color: black;
            }

            .header-container {
                height: 60px;
                
            
            }
            .header-container h1{
                position: relative;
                font-size: 30px;
                color: cyan;
                text-align: center;
                font-family: "Comic Sans MS", cursive, sans-serif;
            }
            .header-container h2{
                position: relative;
                bottom: 20px;
                font-size: 15px;
                color: darkcyan;
                text-align: center;
                font-family: "Comic Sans MS", cursive, sans-serif;
            }
            
            .logo-container{
                position: relative;
                height: 200px;
                width: 500px;
                background-color: white;
            }

            .logo-container h1{
                position: absolute;
                left: 30px;
                font-size: 70px;
                color: purple;
                text-align: center;
                font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            }

            .logo-container h2{
                position: absolute;
                left: 35px;
                top: 130px;
                font-size: 15px;
                color: darkmagenta;
                text-align: center;
                font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            }

            .logo-container img {
                position: absolute;
                top: 55px;
                left: 330px;
            }

            .left-container {
                position: absolute; 
                height: 340px;
                width: 250px;
                background-color: darkslategray;
            }

            .left-container p {
                color: white;   
                font-size: large;
                font-family: "Courier New", Courier, monospace;
            }

            .right-up-container {
                position: absolute;
                left: 250px;
                height: 170px;
                width: 250px;
                background-image: url('img/achtergrondbos.jpg');
            }

            .right-up-container p {
                margin-left: 10px;
                color: white;
                font-size: large;
                font-family: "Courier New", Courier, monospace;
            }

            .right-down-container {
                position: absolute;
                top: 430px;
                left: 250px;
                height: 170px;
                width: 250px;
            }

            .right-down-container p {
                margin-left: 10px;
                margin-bottom: 10px;
                color: white;
                font-size: large;
                font-family: "Courier New", Courier, monospace;
            }
        </style>
    </head>
    <body>
            <div class="main-container">
                <div class="header-container">
                    <h1>ELECTRONIC PRESS KIT</h1>
                    <h2>Bas Boissevain</h2>
                </div>
                <div class="logo-container">
                     <h1>BOLOGA</h1>
                     <h2>The feeling of power</h2>
                 <img src="img/logo.jpg" alt="Logo" width="100" height="100">
                </div>
                    <div class="left-container">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                            Vestibulum rutrum, dui a dapibus rutrum,
                            lacus justo consectetur lectus, eu venenatis urna felis ut tellus. 
                            Nam non ligula feugiat, convallis nulla a, 
                            blandit purus. Ut suscipit risus eget pulvinar dignissim.
                        </p>
                    </div>
                    <div class="right-up-container">
                        <p>Aliquam enim odio, porta ac magna sit amet, cursus cursus mi.
                             Nullam id massa ac nunc bibendum sodales non ut tellus. 
                             Sed feugiat aliquet.
                        </p>
                    </div>
                    <div class="right-down-container">
                        <p>Mauris volutpat, massa vel suscipit sollicitudin, neque nisl dignissim quam, 
                            quis tincidunt ex turpis id diam. Nulla faucibus viverra.
                        </p>
                    </div>
            </div>
        </html>
