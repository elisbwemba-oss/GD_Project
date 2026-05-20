<?php get_header(); ?>

<div class="page-shell error-404-page">

  <section class="page-hero error-hero">
    <div class="page-hero-inner" data-reveal>
      <span class="hero-eyebrow-tag">Error</span>
      <div class="error-code">404</div>
      <h1>Page Not Found</h1>
      <p class="lede">The page you are looking for does not exist or has been moved. Don't worry — let's get you back on track.</p>
      <div class="error-actions">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="btn btn-primary btn-large">Back to Home</a>
        <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn btn-secondary btn-large">Contact Support</a>
      </div>
    </div>
  </section>

  <section class="page-section">
    <div class="container">
      <header class="gd-section-head" data-reveal>
        <span class="eyebrow">Popular Pages</span>
        <h2>Maybe you're looking for one of these?</h2>
      </header>

      <div class="gd-card-grid">
        <a href="<?php echo esc_url(home_url('/products')); ?>" class="gd-card error-link-card" data-reveal>
          <div class="gd-card-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="18" height="18" rx="2"/><line x1="3" y1="12" x2="21" y2="12"/><line x1="12" y1="3" x2="12" y2="21"/></svg>
          </div>
          <h3>Products</h3>
          <p>Browse our catalog of waveguides, antennas and assemblies.</p>
        </a>

        <a href="<?php echo esc_url(home_url('/technologies')); ?>" class="gd-card error-link-card" data-reveal data-reveal-delay="80">
          <div class="gd-card-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 2 L4 14h7l-1 8 9-12h-7z"/></svg>
          </div>
          <h3>Technologies</h3>
          <p>3D printing &amp; 3D casting — our manufacturing approaches.</p>
        </a>

        <a href="<?php echo esc_url(home_url('/turnkey-solution')); ?>" class="gd-card error-link-card" data-reveal data-reveal-delay="160">
          <div class="gd-card-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M9 12 L11 14 L15 10"/></svg>
          </div>
          <h3>Turnkey Solution</h3>
          <p>End-to-end engineering, manufacturing &amp; delivery.</p>
        </a>

        <a href="<?php echo esc_url(home_url('/contact')); ?>" class="gd-card error-link-card" data-reveal data-reveal-delay="240">
          <div class="gd-card-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="4" width="20" height="16" rx="2"/><polyline points="22,6 12,13 2,6"/></svg>
          </div>
          <h3>Contact</h3>
          <p>Send us a message — we usually reply within one business day.</p>
        </a>
      </div>
    </div>
  </section>

</div>

<?php get_footer(); ?>
