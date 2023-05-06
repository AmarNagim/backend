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
            <h1 class="r6Title">RAINBOW SIX SIEGE</h1>
        </div>

        <div class="imageContainer">
            <img src="../images/r6.jpg" alt="">
        </div>
        <div class="paragraphContainerCenter">
            <div class="paragraphContainer">
                <div class="leftParagraph">
                    <h1>What is Rainbow Six Siege?</h1>
                    <p>
    At its heart, Rainbow Six Siege is a high-precision, tactical shooter that prioritises careful planning teamwork and finely tuned tactical play. <br><br>

    Since its release in 2015, the game has radically expanded, adding extra maps, new operators, weapons, and themed seasonal events. <br><br>
    The game has even undergone major technical overhauls, allowing for more diverse character designs. </p>
    
                </div>
                <div class="rightParagraph">
                    <h1>Won't I be out of my depth?</h1>
                    <p>
    Let’s be real, Siege has a high skill ceiling – top level play is tough – but for newcomers it’s no more demanding than any other game, so don’t sweat it. <br><br>

    If you’ve played an FPS in the past decade, you’ll already have the basics down. Beyond that, you’ll learn by doing. Experiment with Operators, weapon loadouts, gadgets, and game modes to get a feel for your own style of play. <br><br>

    Cut your teeth in the Newcomer playlist, go-up against others at your level, and see just how fast you outgrow it.
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