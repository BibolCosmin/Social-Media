<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$allowedFields = array(
    'username',
    'email',
    'password',
    'password',
    'gender',
    'phone',
);
$requiredFields = array(
    'username',
    'email',
    'password',
    'password',
    'gender',
);

// Loop through the $_POST array, which comes from the form...
$errors = array();
foreach ($_POST AS $key => $value) {
    // first need to make sure this is an allowed field
    if (in_array($key, $allowedFields)) {
        $$key = $value;

        // is this a required field?
        if(in_array($key, $requiredFields)) {
            $errors[] = "The field $key is required.";
        }
    }
}
// were there any errors?
if (count($errors) > 0) {
    $errorString = '<p>There was an error processing the form.</p>';
    $errorString .= '<ul>';
    foreach ($errors as $error) {
        $errorString .= "<li>$error</li>";
    }
    $errorString .= '</ul>';

    // display the previous form
    include 'index.php';
} else {
    // At this point you can send out an email or do whatever you want
    // with the data...
    // each allowed form field name is now a php variable that you can access
    // display the thank you page
    header("Location: thanks.html");
}