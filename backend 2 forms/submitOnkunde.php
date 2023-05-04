<?php

$validate = "no";
$input1 = "no";
$input2 = "no";
$input3 = "no";
$input4 = "no";
$input5 = "no";
$input6 = "no";
$input7 = "no";

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $input1 = check_input($_GET["ability"]);
    $input2 = check_input($_GET["person"]);
    $input3 = check_input($_GET["number"]);
    $input4 = check_input($_GET["vacation"]);
    $input5 = check_input($_GET["bestProperty"]);
    $input6 = check_input($_GET["worstProperty"]);
    $input7 = check_input($_GET["worst"]);

    if(empty($input1)){
        $validate = "yes";
        $input1 = "yes";
    }
    if(empty($input2)){
        $validate = "yes";
        $input2 = "yes";
    }
    if(empty($input3)){
        $validate = "yes";
        $input3 = "yes";
    }
    if(empty($input4)){
        $validate = "yes";
        $input4 = "yes";
    }
    if(empty($input5)){
        $validate = "yes";
        $input5 = "yes";
    }
    if(empty($input6)){
        $validate = "yes";
        $input6 = "yes";
    }
    if(empty($input7)){
        $validate = "yes";
        $input7 = "yes";
    }

    if($validate == "yes"){
        header('Location: Onkunde.php?err1='.$input1.'&err2='.$input2.'&err3='.$input3.'&err4='.$input4.'&err5='.$input5.'&err6='.$input6.'&err7='.$input7);
        exit();
    }

    // if needed you can store information in DB here
}

// to pretent from sql injection (for your knowledge)
function check_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
</head>

<body>
    <h1 class="title">Mad Libs</h1>
    <div class="outside-box">
        <a href="erHeerstPaniek.php" class="button1">Er Heerst paniek...</a>
        <a href="Onkunde.php" class="button2">Onkunde</a>

    </div>
    <div class="inside-box">
        <h2 style="font-family: Arial">Er heerst paniek...</h2>
        <p>
            Er zijn veel mensen die niet kunnen<br><br>
            <?php echo $input1; ?>. Neem nou<br>
            <?php echo $input2; ?>. Zelfs met de hulp van een<br>
            <?php echo $input4; ?> of zelfs<br>
            <?php echo $input3; ?> kan<br>
            <?php echo $input2; ?> niet<br>
            <?php echo $input1; ?>. Dat heeft niet te maken met een gebrek aan<br>
            <?php echo $input5; ?>, maar met een te veel aan<br>
            <?php echo $input6; ?>. Te veel<br>
            <?php echo $input6; ?> leidt tot<br>
            <?php echo $input7; ?> en dat is niet goed als je wilt<br>
            <?php echo $input1; ?>. Helaas voor<br>
            <?php echo $input2; ?>.
        </p>

    </div>
    <div class="copyright">
        <a class="copyrightText">
            Deze website is gemaakt door Amar
        </a>
    </div>
</body>
<style>
    .copyrightText {
        color: white;
        font-family: "Arial";

    }

    .copyright {
        background-color: #393b3b;
        margin: auto;
        width: 50%;
        padding: 10px;
        height: 19px;
        text-align: center;
    }

    button {
        border: none;
        outline: none;
    }

    .outside-box {
        display: flex;
        background-color: #9b1000;
        margin: auto;
        width: 50%;
        padding: 10px;
        height: 35px;
    }

    a {
        text-decoration: none;
        margin-right: none;
        margin-top: auto;
        margin-bottom: auto;
        color: white;
        font-family: "Arial";
        padding: 10px;
    }

    a:hover {
        cursor: pointer;
        margin-right: none;
        margin-top: auto;
        margin-bottom: auto;
        color: white;
        font-family: "Arial";
        background-color: #b03a3a;
        border: none;
    }

    h3 {
        margin-right: none;
        margin-top: auto;
        margin-bottom: auto;
        color: white;
        font-family: "Arial";
        padding: 6px 5px 10px;


    }

    h3:hover {
        cursor: pointer;
        margin-right: none;
        margin-top: auto;
        margin-bottom: auto;
        color: white;
        font-family: "Arial";
        background-color: #9C3030;
        border: none;
        padding: 6px 5px 10px;



    }

    .form {
        display: grid;
        grid-template-columns: auto 1fr;
        grid-row-gap: 10px;
        font-family: Arial;
        text-align: left;
    }

    input {
        margin-left: 10px;
        width: 200px;
    }

    body {
        background-color: gray;
    }

    h1 {
        margin: auto;
        width: 50%;
        padding: 10px;
        font-family: "Lucida Console";
        font-size: 100px;
        color: white;
    }

    .inside-box {
        background-color: white;
        margin: auto;
        width: 50%;
        padding: 10px;
    }

    .submit-button {
        text-align: right;
    }

    .submit {
        font-size: 20px;
        padding: 10px;
        transition: background-color 0.3s ease-out;

    }

    .submit:hover {
        cursor: pointer;
        background-color: #BDBDBD;
        transition: background-color 0.3s ease-in;

    }
</style>

</html>