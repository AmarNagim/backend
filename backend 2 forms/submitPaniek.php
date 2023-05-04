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
    $input8 = check_input($_GET["worst2"]);


    if (empty($input1)) {
        $validate = "yes";
        $input1 = "yes";
    }
    if (empty($input2)) {
        $validate = "yes";
        $input2 = "yes";
    }
    if (empty($input3)) {
        $validate = "yes";
        $input3 = "yes";
    }
    if (empty($input4)) {
        $validate = "yes";
        $input4 = "yes";
    }
    if (empty($input5)) {
        $validate = "yes";
        $input5 = "yes";
    }
    if (empty($input6)) {
        $validate = "yes";
        $input6 = "yes";
    }
    if (empty($input7)) {
        $validate = "yes";
        $input7 = "yes";
    }

    if (empty($input8)) {
        $validate = "yes";
        $input8 = "yes";
    }

    if ($validate == "yes") {
        header('Location: erHeerstPaniek.php?err1=' . $input1 . '&err2=' . $input2 . '&err3=' . $input3 . '&err4=' . $input4 . '&err5=' . $input5 . '&err6=' . $input6 . '&err7=' . $input7);
        exit();
    }

}

function check_input($data)
{
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
            Er heerst paniek in het koninkrijk
            <?php echo $input3; ?>. Koning
            <?php echo $input6; ?> is ten einde raad en als koning
            <?php echo $input6; ?> ten einde
            raad is, dan roept hij zijn ten-einde-raadsheer
            <?php echo $input2; ?>.<br><br>
            "
            <?php echo $input2; ?>! Het is een ramp! Het is een schande!"<br><br>
            "Sire, Majesteit, Uwe Luidruchtigheid, wat is er aan de hand?"<br><br>
            "Mijn
            Mijn
            <?php echo $input1; ?> is verdwenen! Zo maar, zonder waarschuwing. En ik had net
            <?php echo $input5; ?> voor hem
            gekocht!"<br><br>
            "Majesteit, uw
            <?php echo $input1; ?> komt vast vanzelf weer terug?"<br><br>
            "Ja, da's leuk en aardig, maar hoe moet ik in de tussentijd
            <?php echo $input8; ?> leren?"<br><br>
            "Maar Sire, daar kunt u toch uw
            <?php echo $input7; ?> voor gebruiken."<br><br>
            "Spinoza, je hebt helemaal gelijk! Wat zou ik doen als ik jou niet had."<br><br>
            "
            <?php echo $input4; ?>, Sire."<br><br>
        </p>

    </div>
    <div class="copyright">
        <a class="copyrightText">
            Deze website is gemaakt door Amar
        </a>
    </div>
</body>
<style>
    p {
        font-family: "Arial";

    }

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