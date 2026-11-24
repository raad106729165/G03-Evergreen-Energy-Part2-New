<?php
// header.inc - shared site header for every page.
// Before including this file, set $current_page on the page to one of:
// 'index', 'jobs', 'apply' or 'about', so the right link is highlighted.
if (!isset($current_page)) {
    $current_page = '';
}

// Page file => link text
$nav_items = [
    'index' => 'Home',
    'jobs'  => 'Job Description',
    'apply' => 'Apply',
    'about' => 'About Us',
];
?>
<header id="site-header">
    <nav class="nav-container" aria-label="Main navigation">
        <!-- Brand: logo and company name, linking to the home page -->
        <a href="index.php" class="nav-brand">
            <span class="nav-logo">
                <img src="images/logo.png" alt="" width="400" height="400">
            </span>
            <span class="brand-text">
                <span class="brand-name">Evergreen Energy</span>
                <span class="brand-tagline">Sustainable Energy Solutions</span>
            </span>
        </a>
        <ul class="nav-links">
            <?php foreach ($nav_items as $page => $label): ?>
                <?php if ($page === $current_page): ?>
                    <li><a href="<?php echo $page; ?>.php" class="active" aria-current="page"><?php echo $label; ?></a></li>
                <?php else: ?>
                    <li><a href="<?php echo $page; ?>.php"><?php echo $label; ?></a></li>
                <?php endif; ?>
            <?php endforeach; ?>
        </ul>
    </nav>
</header>
