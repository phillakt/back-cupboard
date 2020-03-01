<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <title>ДядяШкаф</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">

    <style>
        html.fontawesome-i2svg-active.fontawesome-i2svg-complete {
            margin-top: 0 !important;
        }
        .main-slider .owl-next {
            outline: none;
            background: url(<?= get_template_directory_uri() ?>/img/main-slider/ico_arrow_next.svg) !important;
        }

        .main-slider .owl-prev {
            outline: none;
            background: url(<?= get_template_directory_uri() ?>/img/main-slider/ico_arrow_prev.svg) !important;
        }


        .products .products-line {
            background: url(<?= get_template_directory_uri() ?>/img/products/line.svg) no-repeat;
            height: 1px;
            background-size: contain; }
        .products .products-line .button {
            margin-top: -20px; }
    </style>

    <?php wp_head() ?>
</head>

<body>

<main id="app" class="app">