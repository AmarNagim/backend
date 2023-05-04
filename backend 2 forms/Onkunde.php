<?php



?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>

  <style>
    * {
      font-family: "Arial";
    }

    .w-100 {
      width: 70%;
      float: left;
      margin: 2px 13% 10px;
    }

    label:after {
      content: ' *';
      color: red;
      font-size: 150%;
    }

    .copyrightText:hover {
      background-color: #393b3b;
      cursor: auto;
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

    .button2 {
      background-color: #b03a3a;

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

    input {
      margin-left: 10px;
      width: 200px;
      float: right;
      padding: 5px 10px;
      margin-top: -5px;
      margin-bottom: 5px;
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
      text-align: center;
      margin: 30px 0 20px;
      display: inline-block;
      width: 100%;
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

    .err-msg {
      width: 100%;
      float: right;
      text-align: right;
    }

    .err-msg>span {
      width: 223px;
      float: right;
      text-align: left;
      font-size: 12px;
      color: red;
      font-weight: bold;
      margin-bottom: 5px;
    }
  </style>
</head>

<body>
  <h1 class="title">Mad Libs</h1>
  <div class="outside-box">
    <a href="erHeerstPaniek.php" class="button1">Er Heerst paniek...</a>
    <a href="Onkunde" class="button2">Onkunde</a>

  </div>
  <div class="inside-box">
    <h2 style="font-family: Arial;text-align: center;">Onkunde</h2>
    <form class="form" action="submitOnkunde.php">
      <div class="w-100">
        <label for="ability">Wat zou je graag willen kunnen?</label>
        <input type="text" id="ability" name="ability" value="<?php if (isset($_GET['err1']) && $_GET['err1'] != "yes") {
          echo $_GET['err1'];
        } ?>" />
        <?php if (isset($_GET['err1']) && $_GET['err1'] == "yes") { ?>
          <div class="err-msg"><span>Dit veld moet ingevuld zijn</span></div>
        <?php } ?>
      </div>

      <div class="w-100">
        <label for="person">Met welke persoon kun je goed opschieten?</label>
        <input type="text" id="person" name="person" value="<?php if (isset($_GET['err2']) && $_GET['err2'] != "yes") {
          echo $_GET['err2'];
        } ?>" />
        <?php if (isset($_GET['err2']) && $_GET['err2'] == "yes") { ?>
          <div class="err-msg"><span>Dit veld moet ingevuld zijn</span></div>
        <?php } ?>
      </div>

      <div class="w-100">
        <label for="number">Wat is je favoriete getal?</label>
        <input type="text" id="number" name="number" value="<?php if (isset($_GET['err3']) && $_GET['err3'] != "yes") {
          echo $_GET['err3'];
        } ?>" />
        <?php if (isset($_GET['err3']) && $_GET['err3'] == "yes") { ?>
          <div class="err-msg"><span>Dit veld moet ingevuld zijn</span></div>
        <?php } ?>
      </div>

      <div class="w-100">
        <label for="vacation">Wat heb je altijd bij je als je op vakantie gaat?</label>
        <input type="text" id="vacation" name="vacation" value="<?php if (isset($_GET['err4']) && $_GET['err4'] != "yes") {
          echo $_GET['err4'];
        } ?>" />
        <?php if (isset($_GET['err4']) && $_GET['err4'] == "yes") { ?>
          <div class="err-msg"><span>Dit veld moet ingevuld zijn</span></div>
        <?php } ?>
      </div>

      <div class="w-100">
        <label for="bestProperty">Wat is je beste persoonlijke eigenschap?</label>
        <input type="text" id="bestProperty" name="bestProperty" value="<?php if (isset($_GET['err5']) && $_GET['err5'] != "yes") {
          echo $_GET['err5'];
        } ?>" />
        <?php if (isset($_GET['err5']) && $_GET['err5'] == "yes") { ?>
          <div class="err-msg"><span>Dit veld moet ingevuld zijn</span></div>
        <?php } ?>
      </div>

      <div class="w-100">
        <label for="worstProperty">Wat is je slechtste persoonlijke eigenschap?</label>
        <input type="text" id="worstProperty" name="worstProperty" value="<?php if (isset($_GET['err6']) && $_GET['err6'] != "yes") {
          echo $_GET['err6'];
        } ?>" />
        <?php if (isset($_GET['err6']) && $_GET['err6'] == "yes") { ?>
          <div class="err-msg"><span>Dit veld moet ingevuld zijn</span></div>
        <?php } ?>
      </div>

      <div class="w-100">
        <label for="worst">Wat is het ergste dat je kan overkomenn?</label>
        <input type="text" id="worst" name="worst" value="<?php if (isset($_GET['err7']) && $_GET['err7'] != "yes") {
          echo $_GET['err7'];
        } ?>" />
        <?php if (isset($_GET['err7']) && $_GET['err7'] == "yes") { ?>
          <div class="err-msg"><span>Dit veld moet ingevuld zijn</span></div>
        <?php } ?>
      </div>

      <div class="submit-button">
        <button type="submit" class="submit">Versturen</button>
      </div>
    </form>

  </div>
  <div class="copyright">
    <a class="copyrightText">
      Deze website is gemaakt door Amar
    </a>
  </div>

</body>

</html>