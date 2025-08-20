<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

    <header class="header">
        <h1 class="header-logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Nail Salon</a></h1>
        <nav class="header-nav" id="js-nav">
            <ul>
                <li><a href="#concept">Concept</a></li>
                <li><a href="#menu">Menu</a></li>
                <li><a href="#gallery">Gallery</a></li>
                <li><a href="#access">Access</a></li>
            </ul>
        </nav>
        <div class="header-right">
            <a href="#contact" class="header-cta">ご予約</a>
            <button class="hamburger" id="js-hamburger">
                <span class="hamburger-bar"></span>
                <span class="hamburger-bar"></span>
                <span class="hamburger-bar"></span>
            </button>
        </div>
    </header>