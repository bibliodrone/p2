<?php
require 'Form.php';
$form = new DWA\Form($_GET);
$submitted = $form->isSubmitted();
if ($submitted) {
    $errors = $form->validate(
        [
            'unitType'=>'required',
            'valueToConvert'=>'required|numeric',
        ]
    );
}