<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header id="site-header">
    <div class="header-inner">
        <a class="logo" href="<?php echo esc_url(home_url('/')); ?>" aria-label="<?php bloginfo('name'); ?> – Home">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/Archive/Golden-Devices-Logo-weiss300.png" alt="Golden Devices Logo" class="logo-img">
        </a>

        <button class="menu-toggle" id="mobile-menu" aria-label="Menü öffnen" aria-expanded="false" aria-controls="nav-menu">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </button>

        <nav class="nav-menu" id="nav-menu" role="navigation" aria-label="Hauptnavigation">
            <a href="<?php echo esc_url(home_url('/')); ?>"<?php echo is_front_page() ? ' class="active"' : ''; ?>>Home</a>
            <a href="<?php echo esc_url(home_url('/applications')); ?>"<?php echo is_page('applications') ? ' class="active"' : ''; ?>>Applications</a>
            <a href="<?php echo esc_url(home_url('/turnkey-solution')); ?>"<?php echo is_page('turnkey-solution') ? ' class="active"' : ''; ?>>Turnkey Solution</a>
            <a href="<?php echo esc_url(home_url('/products')); ?>"<?php echo is_page('products') ? ' class="active"' : ''; ?>>Products</a>
            <a href="<?php echo esc_url(home_url('/technologies')); ?>"<?php echo is_page('technologies') ? ' class="active"' : ''; ?>>Technologies</a>
            <a href="<?php echo esc_url(home_url('/about-us')); ?>"<?php echo is_page('about-us') ? ' class="active"' : ''; ?>>About Us</a>
            <a href="<?php echo esc_url(home_url('/contact')); ?>"<?php echo is_page('contact') ? ' class="active"' : ''; ?>>Contact</a>
        </nav>
    </div>
</header>

<script>
(function() {
    var toggle = document.getElementById('mobile-menu');
    var nav    = document.getElementById('nav-menu');
    var header = document.getElementById('site-header');
    var body   = document.body;

    function setMenu(open) {
        nav.classList.toggle('active', open);
        toggle.classList.toggle('is-active', open);
        toggle.setAttribute('aria-expanded', open ? 'true' : 'false');
        body.classList.toggle('menu-open', open);
    }

    toggle.addEventListener('click', function() {
        setMenu(!nav.classList.contains('active'));
    });

    // Auto-close on link tap
    nav.querySelectorAll('a').forEach(function(link) {
        link.addEventListener('click', function() { setMenu(false); });
    });

    // ESC key closes menu
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && nav.classList.contains('active')) setMenu(false);
    });

    // Close when resizing back to desktop
    var mq = window.matchMedia('(min-width: 961px)');
    mq.addEventListener('change', function(e) { if (e.matches) setMenu(false); });

    // Sticky header background on scroll
    window.addEventListener('scroll', function() {
        header.classList.toggle('scrolled', window.scrollY > 60);
    }, { passive: true });
})();
</script>
