<?php 
    class User{
        public $_css = "./css/main.createAccount.css";
        static $_lang = ["fr","en","it"];
        public $_title = "Partiel Gmail single page";
    }
    $_new_user = new User;
?>

<!DOCTYPE html>
<html lang="<?php $_lang ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php $_title ?></title>
    <meta name="description" content="Cette étude de cas concerne la réalisation de la single page Gmail.">
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/site.webmanifest">
    <link rel="stylesheet" href= "./css/main.createAccount.css" >
</head>