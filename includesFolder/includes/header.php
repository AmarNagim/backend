<!-- jouw HTML voor een Header komt hier... 
Gebruik hier tenminste een header afbeelding en een menu
Zorg dat je in het menu bij elk item een url parameter zet
om te bepalen welke inhoud er ingeladen moet worden in je html
-->

<!doctype html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Lab 2 - Includes en require</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    
        
    </div>
    <div class="header">
        <div class="headerPicture">
            <div class='navbar'>
                    <div class="navbarInside">
                        <a class="title">GAMES</a>
                        <nav>
                            <a class="games" href="index.php?content_id=r6">Rainbow Six Siege</a>
                            <a class="games" href="index.php?content_id=mc">Minecraft</a>
                            <a class="games" href="index.php?content_id=cod">Call Of Duty Warzone</a>
                            <a class="games" href="index.php?content_id=habbo">Habbo</a>


                        </nav>
                    </div>
            </div>
            <?php
    $content=$_GET['content_id'];

?>

        </div>
        

</body>
<style>
    .title {
        color: white;
        margin-left: 55px;
        margin-right: 35px;
        font-size: 220%;
        font-weight: 600;
    }

    .title:hover {
        cursor: pointer;
    }
    * {
        font-family: Arial, Helvetica, sans-serif;
        padding: 0;
        margin: 0;
    }

    img {
        width: 100%;
        height: 100vh;
        object-fit: cover;
    }

    .headerPicture {
        height: 800px;
        color: black;
        background-image: linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,.7)), url(../images/games.jpg);
    }

    body {
        background-color: white;
    }

    .games {
        text-decoration: none;
        padding: 7px 13px;
        color: white;
        font-size: 120%;

    }

    .games:hover{
        border-radius: 3px;
        /* background-color: #3DB1FF; */
        padding: 34.7px 13px;
        color: #3DB1FF;
    }

    .navbarInside {
        height: 75px;
        padding: 0.4px;
        margin-right: 55px;
        display: flex;
        align-items: center;
    }

    .navbar {
        padding-right: 50px;
        padding-top: 8px;
        padding-bottom: 8px;
        height: 75px;
    }
</style>

</html>

