<?php
// ----- DATABASE CONNECTION ----- //
/** @var $db */
require_once "includes/config.ini.php";

// ----- GET SHOWKEY FROM URL ----- //
$key = $_GET['key'];

// ----- CHECK IF KEY IS RIGHT ----- //
$query = "SELECT * FROM plannedShows WHERE show_key ='$key'";
$select_data = mysqli_query($db, $query);

// ----- IF KEY IS RIGHT ----- //
if (mysqli_num_rows($select_data) == 1) {
    $row = mysqli_fetch_assoc($select_data);
    $titleShow = $row['show_name'];
}

// ----- CHECK IF FORM IS SUBMITTED ----- //
if (isset($_POST['submit'])) {

    $errors = [];

    // ----- GET QUESTION AND NAME AND CLEAN INPUT ----- //
    $question = htmlspecialchars(mysqli_real_escape_string($db, $_POST['inputQuestion']), ENT_QUOTES, 'UTF-8');
    $name = htmlspecialchars(mysqli_real_escape_string($db, $_POST['inputName']), ENT_QUOTES, 'UTF-8');

    if ($question == '') {
        $errors['question'] = "Please enter a question";
    } else if (strlen($question) > 255) {
        $errors['question'] = "Please use less then 255 characters";
    }

    if($name == '') {
        $errors['name'] = "Please enter your name";
    }

    // ----- IF THERE ARE NO ERRORS ----- //
    if (empty($errors)) {
        $sql = "INSERT INTO `askedQuestions`(`name`, `question`, `show_key`) 
            VALUES('$name', '$question', '$key')";

        if (mysqli_query($db, $sql)) {
            $success = "Your question successfully send!";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($db);
        }
    }
}
?>

<!DOCTYPE html>
<html lang="nl" dir="ltr">
  <head>
    <meta charset="utf-8">
      <link rel="stylesheet" href="css/style.css">
    <title><?php if(isset($titleShow)){echo $titleShow;}?> - Q&A</title>

  </head>
  <body>
    <h2><?php if(isset($titleShow)){echo $titleShow;}?> - Q&A</h2>
    <?php
        if(isset($success)) {
            echo $success;
        }
    ?>
    <!-- ----- QUESTION FORM ----- -->
    <form method="post" id="questionForm">
        <?php if(isset($errors['name'])){ ?>
            <p><?= $errors['name']?></p>
        <?php } ?>
        <input type="text" name="inputName" id="inputName" placeholder="Naam...">
        <?php if(isset($errors['question'])){ ?>
            <p><?= $errors['question']?></p>
        <?php } ?>
        <textarea id="inputQuestion" name="inputQuestion" rows="3" placeholder="Vraag..."><?php if(isset($question) && !isset($succes)){ echo $question; }?></textarea>
        <button type="submit" id="submit" name="submit" class="btn">Send</button>
    </form>
  </body>
</html>
