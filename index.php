<?php
require "logic.php";
?>
<!DOCTYPE html>
<html>

<head>
    <title>Converter</title>
    <meta charset="utf-8">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
</head>

<body>
    <form method="GET" action="logic.php">
        <p>
            <label for="unitType">Type of Unit</label>
            <span class="info">Choose unit type for conversion</span>
            <input type="radio" name="unitType" value="length">Length<br>
            <input type="radio" name="unitType" value="temperature">Temperature<br>

            <label for="conversionInput">Enter value for conversion</label>
            <span class="info">Numerical values only</span>
            <input type="number" name="conversionInput" id="conversionInput">

            <!--<label for="email">Email (required|email)</label>
            <span class="info">Required; must be a valid email address format</span>
            <input type="text" name="email" id="email" value="<?= $form->get(" email", "test@gmail.com" ) ?>">

            <label for="username">Username (required|alphaNumeric)</label>
            <span class="info">Must contain letters or digits; no symbols</span>
            <input type="text" name="username" id="username" value="<?= $form->get(" username", "dwa15" ) ?>">-->

            <input type="submit" class="btn btn-primary" value="Run tests...">
        </p>

        <?php if (isset($errors) && $errors) : ?>
        <div class="alert alert-danger">
            <ul>
                <?php foreach ($errors as $error) : ?>
                <li>
                    <?= $error ?>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
        <?php elseif ($submitted): ?>
        <div class="alert alert-info">
            No errors
        </div>
        <?php endif ?>
    </form>

</body>
