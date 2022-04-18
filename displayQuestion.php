<?php
// ----- DATABASE CONNECTION ----- //
/** @var $db */
require_once "includes/config.ini.php";

// ----- GET SHOWKEY FROM URL ----- //
$key = $_GET['key'];

// ----- CHECK IF KEY IS RIGHT ----- //
$query = "SELECT * FROM askedquestions WHERE show_key ='$key'";
$result = mysqli_query($db, $query);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <main>
        <div class="main-container">
            <h1>Overzicht van de ingestuurde vragen </h1>
            <div class="question-container">
                <div class="question-card">
                    <?php
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = $result->fetch_assoc()) { ?>
                            <div class='questions fade'>
                                <p><?= $row['question']?> - <?= $row['name']?></p>
                            </div>
                      <?php  }
                    }
                    ?>
                    <a class="prev" id="prev" onclick="nextQuestion(-1)">&#10094;</a>
                    <a class="next" id="next" onclick="nextQuestion(1)">&#10095;</a>
            </div>
            </div>
        </div>
    </main>

    <script src="js/main.js"></script>
</body>
</html>
