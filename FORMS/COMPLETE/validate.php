<?php 

$UserName = $_POST['name'];
$UserPhone = $_POST['phone'];
$UserEmail = $_POST['email'];
$UserGender = $_POST['gender'];
$UserComments = $_POST['comment'];
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Validation</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <h2>Data Recibet</h2>
        <h4>
            <?php
                if (strlen($UserName) < 5 | strlen($UserName) > 50){
                    echo ("The Name ".$UserName." exceeds allowed limits.");
                } else {
                    echo ("Name '".$UserName."' registred.");
                }
            ?>
        </h4>
        <h4>
            <?php
                if (strlen($UserPhone) < 10 | strlen($UserPhone) > 10) {
                    echo ("Phone number invalid.");
                } else {
                    echo ("Phone number '".$UserPhone."' registred.");
                }
            ?>
        </h4>
        <h4>
            <?php
                if (filter_var($UserEmail, FILTER_VALIDATE_EMAIL)) {
                    echo ("Email '".$UserEmail."' registred.");
                } else {
                    echo ("Email ".$UserEmail." is invalid.");
                }
            ?>
        </h4>
        <h4>
            <?php
                if (empty($UserGender)) {
                    echo ("Your Gender is Unknown.");
                } else {
                    echo ("Your gender was registred.");
                }
            ?>
        </h4>
        <h4>
            <?php
                if (empty($UserComments)) {
                    echo ("No comments received.");
                } else {
                    echo ("Your comments: ".$UserComments);
                }
            ?>
        </h4>
    </body>
</html>