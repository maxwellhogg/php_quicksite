<?php

$page_title = 'Home';
$image = './images/hero2.jpg';

// -------- SELECT ELEMENTS FROM './includes' to place in the document

// ------NAVIGATION MENU ---------
include './includes/header.php';

// -----MAIN BODY-------
// hero elements
include './includes/hero-elements/hero-centered.php';

// about-us-elements
include './includes/about-us-elements/about-us-1.php';
// include './includes/about-us-elements/about-us-2.php';
// include './includes/about-us-elements/about-us-3.php';
include './includes/about-us-elements/about-us-2.php';

// ------OFFER CARDS-----
// include './includes/offers-cards-elements/offers-cards-1.php';
include './includes/offers-cards-elements/offers-cards-2.php';
// include './includes/offers-cards-elements/offers-cards-3.php';

// ------PORTFOLIO-----
include './includes/portfolio-elements/portfolio-section-1.php';
// include './includes/portfolio-elements/portfolio-section-2.php';
include './includes/portfolio-elements/portfolio-section-3.php';

// -----FOOTER--------
include './includes/footer.php'
?>
