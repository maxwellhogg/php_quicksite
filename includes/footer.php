</main>
    <footer>
        <div class="footer-container">
            <div class="footer-contact footer-section">
                <h4 class="footer-title"><?= $footer_title_1 ?></h4>
            <!-- </br> -->
                <ul class="footer-contact-list">
                    <?php foreach ($address as $address_line): ?>
                        <li class="footer-contact-list-address"><?= $address_line ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="footer-section">
                <h4 class="footer-title"><?= $footer_title_2 ?></h4>
                    <!-- </br> -->
                <ul class="footer-contact-list">
                    <?php foreach ($contact_links as $page_link => $contact_item): ?>
                        <li class="footer-contact-list-link"><a href="<?= $page_link ?>"><?= $contact_item ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="footer-section">
                <h4 class="footer-title"><?= $footer_title_3 ?></h4>
                    <!-- </br> -->
                <ul class="footer-contact-list">
                    <?php foreach ($navigation_items as $navigation_link => $navigation_item): ?>
                        <li class="footer-list-nav-item"><a href="<?= $navigation_link ?>"><?= $navigation_item ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <!-- --- FIX: Change to additional_links ---- -->
            <div class="footer-section">
                <h4 class="footer-title"><?= $footer_title_4 ?></h4>
                    <!-- </br> -->
                <ul class="footer-contact-list">
                    <?php foreach ($additional_links as $additional_link => $additional_item): ?>
                        <li class="footer-contact-list-link"><a href="<?= $additional_link ?>"><?= $additional_item ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
        <div class="footer-copyright">
            <p>&copy;<?= $siteowner_name . ' ' . $year ?> - All rights reserved.</p>
        </div>
    </footer>
    <script src="script.js"></script>
</body>
</html>