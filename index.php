<?php

$page_title = 'Home';
$image = './images/hero2.jpg';
include './includes/header.php';

?>

<section class="hero-image1 hero">
    <div class="hero-text-container">
        <h1>This is the hero text</h1>
        <p>This is the hero subtext</p>
		<?php foreach ($navigation_items as $page_link => $navigation_item): if ($page_link === 'services.php'):?>
			<button class="hero-button"><a href="<?= $page_link ?>"><?= $navigation_item ?></a></button>
		<?php elseif ($page_link === 'contact.php'): ?>
			<button class="hero-button"><a href="<?= $page_link ?>"><?= $navigation_item ?></a></button>
		<?php endif; endforeach; ?>
    </div>
</section>

<?php 
include './includes/footer.php'
?>
