<?php
require "validate.php";
require "logic.php";
?>
<!DOCTYPE html>
<html>

<head>
    <title>Unit conversion</title>
    <meta charset="utf-8">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="css/styles.css" rel="stylesheet">
</head>

<body>
    <form>
        <fieldset>
            <legend>Unit Conversion</legend>
            <label for="unitType">Unit Type</label>
            <ul>
                <li><label>
                        <input type="radio" name="unitType" value="distance" <?=(isset($unitType) && $unitType=="distance" ) ? "checked" : "" ?>>Distance
                    </label>
                </li>
                <li>
                    <label>
                        <input type="radio" name="unitType" value="temperature" <?=(isset($unitType) && $unitType=="temperature" ) ? "checked" : "" ?>>Temperature
                    </label>
                    <span class="infoNote"> *Note: The mininum valid temperature (absolute zero) is -459.67 F or -273.15 C</span>
                </li>
                <li>
                    <label>
                        <input type="radio" name="unitType" value="mass" <?=(isset($unitType) && $unitType=="mass" ) ? "checked" : "" ?>>Mass
                    </label>
                </li>
            </ul>

            <label for=conversion>Conversion</label>
                <ul>
                    <li>
                        <select name="system">
                            <option value="tometric" <?=(isset($system) && $system=="tometric" ) ? "selected" : "" ?>>Imperial ---> Metric</option>
                            <option value="toimperial" <?=(isset($system) && $system=="toimperial" ) ? "selected" : "" ?>>Metric ---> Imperial</option>
                        </select>
                    </li>
                </ul>
                <br>
                <label for="valueToConvert">Enter value (must be numeric)</label>
                <input type="text" name="valueToConvert" value="<?=(isset($valueToConvert)) ? $valueToConvert : 0 ?>">
                <br>
                <hr>
                <input type="submit" class="btn btn-primary" id="submitButton" value="Submit">
        </fieldset>
        <?php if (isset($returnMessage)) : ?>
        <div class="output">
            <p>
                <?= $returnMessage ?>
            </p>
        </div>
        <?php endif ?>

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
