<!DOCTYPE html>

<html class = "html" lang="en-us">

<head>
    <title>Colegio De Sueños</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name = "keywords" content = "">
    <meta name="author" content="https://github.com/fley27">    
    <link rel="shortcut icon" href="images/logo.png"> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <?php
        wp_head();
    ?>
</head>

<body class = "main">
    <?php 
        get_template_part('includes/section', "primary-menu");
    ?>  
    <?php
        get_template_part('includes/section', "secondary-menu");
    ?>
    <?php
        get_template_part('includes/layouts/section', "home");
    ?>

