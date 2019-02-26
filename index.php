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
    <header>
        <h1>Unit Conversion Utility</h1>
        <ol>
            <li>Choose the type of unit to convert: distance, temperature, or mass.</li>
            <li>Choose either Imperial to Metric (e.g. lbs. to kg.) or Metric to Imperial (e.g. Celsius to Fahrenheit).</li>
            <li>Finally, enter the numerical value to convert, and click 'Submit'</li>
        </ol>
    </header>
    <div id="main">
        <form>
            <fieldset>
                <legend>Converter</legend>
                <label for="unitType">Unit Type</label>
                <ul>
                    <li>
                        <input type="radio" name="unitType" value="distance" <?=(isset($unitType) && $unitType=="distance" ) ? "checked" : "" ?>>Distance (mi. <-> km.)

                    </li>
                    <li>
                        <input type="radio" name="unitType" value="temperature" <?=(isset($unitType) && $unitType=="temperature" ) ? "checked" : "" ?>>Temperature (&#176;F <-> &#176;C)

                            <span class="infoNote"> *Note: The mininum valid temperature (absolute zero) is -459.67&#176; F or -273.15&#176; C</span>
                    </li>
                    <li>
                        <input type="radio" name="unitType" value="mass" <?=(isset($unitType) && $unitType=="mass" ) ? "checked" : "" ?>>Mass (lbs. <-> kg.)
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
                <label for="valueToConvert">Enter value</label><span class="infoNote"> *Must be numeric</span>
                <ul>
                    <li><input type="text" name="valueToConvert" value="<?=(isset($valueToConvert)) ? $valueToConvert : 0 ?>"></li>
                </ul>
                <input type="submit" class="btn btn-primary" id="submitButton" value="Convert!">
            </fieldset>

            <div class="output">
                <?php if (isset($returnMessage)) : ?>
                <p>
                    <?= $returnMessage ?>
                </p>
                <?php endif ?>
            </div>

            <!--Error message display code (using Form.php) from class example 'Form validation'.
            I hope it's OK to use it here with attribution; since we are using
            Form.php in this project, I didn't see a need to 'reinvent the wheel', here-->
            <div id="errors">
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
            </div>
        </form>
    </div>
</body>
