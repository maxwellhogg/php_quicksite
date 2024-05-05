<?php
$siteowner_name = 'Template';
$footer_title_1 = 'ADDRESS';
$footer_title_2 = 'CONTACT';
$footer_title_3 = 'NAVIGATION';
$year = date('Y');
$link_home = 'index.php';
$link_about = 'about.php';
$link_services = 'services.php';
$link_news = 'news.php';
$link_contact = 'contact.php';


$navigation_items =
    [
        'index.php' => 'Home',
        'about.php' => 'About',
        'services.php' => 'Services',
        'news.php' => 'News',
        'contact.php' => 'Contact',
    ];

$address =
    [
        'Address Line 1',
        'Address Line 2',
        'Address Line 3',
        'P057 60DE',
    ];

$contact_links = [
    'mailto:email@address.com' => 'email@address.com',
    'tel:01234 567 890' => '01234 567 890',
];

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
    <link rel="stylesheet" href="common.css">
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title><?= $siteowner_name ?> &bull; <?= $page_title ?></title>
</head>
<body>
    <navbar class="navigation">
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
            </navbar>
    <main>