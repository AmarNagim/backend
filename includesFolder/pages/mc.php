<?php
?>
<!-- jouw HTML met de inhoud over onderwerp 1 komt hier... -->

<!doctype html>

<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Lab 2 - Includes en require</title>
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
<div>



        <div class="titleContainer">
            <h1 class="r6Title">Minecraft</h1>
        </div>

        <div class="imageContainer">
            <img src="../images/mc.jpg" alt="">
        </div>
        <div class="paragraphContainerCenter">
            <div class="paragraphContainer">
                <div class="leftParagraph">
                    <h1>What is Minecraft?</h1>
                    <p>
                    Minecraft is a 3-D computer game where players can build anything. <br> <br>The game which has been described as like an ‘online Lego’ involves building blocks and creating structures across different environments and terrains. Set in a virtual world the game involves resource gathering, crafting items, building, and combat.<br> <br>

It’s one of the most popular games in the world right now and can be an excellent way for kids to learn about creativity and working together.<br> <br>

Minecraft can be played on computers, phones, tablets and consoles. The game can cost around €20.00 depending on what device you are using it on.</p>
    
                </div>
                <div class="rightParagraph">
                    <h1>Is there an Age Restriction?</h1>
                    <p>
                    Minecraft has been rated as suitable for 7+ up to 13+ depending on which version of the game you are playing. <br> <br> Children aren’t asked for proof of age when they sign up. <br> <br>If a user is under 13 and they sign-up with their correct age, certain game features cannot be accessed for example changing settings, making purchases, playing Minecraft Realms or chatting in scrolls.
    </p>
                
                </div> 

            </div>
        </div>
    </div>
</div>
</body>
    <style>
        .paragraphContainerCenter {
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .r6Title {
            margin-top: -100px;
            margin-bottom: -100px;
            font-weight: lighter;
        }
        .leftParagraph {
            margin-left: 50px;
            height: 200px;
            /* background-color: blue; */
            width: 45%;
            float: left;
        }
        
        .rightParagraph {
            margin-right: 50px;

            height: 200px;
            /* background-color: green; */
            width: 45%;
            float: right;
        }

        * {
            margin: 0;
            padding: 0;
            font-family: Arial, Helvetica, sans-serif;
        }

        .paragraphContainer {
            /* display: inline-block; */
            height: 350px;
            margin-top: 100px;
            /* background-color: red; */
            max-width: 1500px;
            min-width: 1500px;
        }

        img {
            height: 500px; 
            margin: 100vh;
        }
        .imageContainer {
            /* background-color: red; */
            height: 500px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .titleContainer {
            margin: 65px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        h1 {
            font-weight: bold;
            margin-bottom: 25px;
        }
        p {
            text-align: left;
            font-weight: 200;
        }
    </style>

</html>