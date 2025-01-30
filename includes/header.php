<?php
$siteowner_name = 'Template';
$footer_title_1 = 'ADDRESS';
$footer_title_2 = 'CONTACT';
$footer_title_3 = 'NAVIGATION';
$footer_title_4 = 'ADDITIONAL LINKS';
$year = date('Y'); // Leave this alone to always get the correct year
$link_home = 'index.php';
$link_about = 'about.php';
$link_services = 'services.php';
$link_news = 'news.php';
$link_contact = 'contact.php';
$email_address = 'myemail@example.com'; // This is needed for the contact form should you wish to use it.

// Enter your filenames and corresponding page titles. Don't forget to update your file structure accordingly
$navigation_items =
    [
        'index.php' => 'Home',
        'about.php' => 'About',
        'services.php' => 'Services',
        'news.php' => 'News',
        'contact.php' => 'Contact',
    ];

// This is for the address that you would like to appear on your site    
$address =
    [
        'Address Line 1',
        'Address Line 2',
        'Address Line 3',
        'P057 60DE',
    ];

// Enter your contact links
$contact_links = [
    'mailto:email@address.com' => 'email@address.com',
    'tel:01234 567 890' => '01234 567 890',
];

// If you have any additional links, enter them here and ensure your file structure is updated accordingly
$additional_links = [
    'terms-and-conditions.php' => 'Terms & Condition',
    'privacy-policy' => 'Privacy Policy',
    'ad-preferenes.php' => 'Ad Preferances',
    'cookies.php' => 'Cookies',
    'legal-information.php' => 'Legal Information',
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Your website description here.">
    <meta name="keywords" content="Keyword1, Keyword2, Keyword3">
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title><?= $siteowner_name ?> &bull; <?= $page_title ?></title>
</head>
<body>
    <nav class="navigation">
        <div class="logo">
            <a href="<?= $link_home ?>">LOGO</a>
        </div>
        <ul class="navigation-list">
            <?php foreach ($navigation_items as $navigation_link => $navigation_item): if ($navigation_item !== 'Contact'): ?>
                <li class="navigation-list-item"><a href="<?= $navigation_link ?>"><?= $navigation_item ?></a></li>
            <?php elseif ($navigation_item === 'Contact'): ?>
                <li class="navigation-list-item-contact"><a href="<?= $navigation_link ?>"><?= $navigation_item ?></a></li>
            <?php endif; endforeach; ?>
        </ul>
        <div class="hamburger">
            <div class="hamburger-lines" id="hamburger-line-1"></div>
            <div class="hamburger-lines" id="hamburger-line-2"></div>
            <div class="hamburger-lines" id="hamburger-line-3"></div>
        </div>
        <div class="slide-in-menu">
            <div class="logo">
                <a href="<?= $link_home ?>">LOGO</a>
            </div>
            <ul class="slide-in-menu-items">
                <?php foreach ($navigation_items as $navigation_link => $navigation_item): ?>
                <li class="slide-in-menu-item"><a href="<?= $navigation_link ?>"><?= $navigation_item ?></a></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </nav>
    <main>