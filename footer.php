<footer class="site-footer">

  <div class="upper-footer">
    <div class="footer-container">
      <div class="footer-row">

        <!-- Logo & description -->
        <div class="footer-col footer-about">
          <div class="footer-logo">
            <a href="<?php echo esc_url(home_url('/')); ?>">
              <img src="<?php echo esc_url(get_template_directory_uri() . '/gold.png'); ?>" alt="<?php echo esc_attr(get_bloginfo('name')); ?> Logo">
            </a>
          </div>
          <p>Precision-engineered mmWave antenna and waveguide components — manufactured in Erlangen, Germany.</p>
          <div class="footer-social">
            <a href="https://www.linkedin.com/company/golden-devices-gmbh/" target="_blank" rel="noopener" aria-label="LinkedIn">
              <svg viewBox="0 0 24 24" fill="currentColor"><path d="M19 0h-14C2.2 0 0 2.2 0 5v14c0 2.8 2.2 5 5 5h14c2.8 0 5-2.2 5-5V5c0-2.8-2.2-5-5-5zM8 19H5V8h3v11zM6.5 6.7c-1 0-1.7-.8-1.7-1.7S5.5 3.3 6.5 3.3s1.7.8 1.7 1.7-.7 1.7-1.7 1.7zM20 19h-3v-5.6c0-1.4-.5-2.4-1.8-2.4-1 0-1.6.7-1.9 1.4-.1.2-.1.6-.1.9V19h-3V8h3v1.3c.4-.6 1.1-1.5 2.7-1.5 2 0 3.5 1.3 3.5 4.1V19z"/></svg>
            </a>
          </div>
        </div>

        <!-- Navigation -->
        <div class="footer-col">
          <h3>Navigation</h3>
          <ul>
            <li><a href="<?php echo esc_url(home_url('/about-us')); ?>">About Us</a></li>
            <li><a href="<?php echo esc_url(home_url('/technologies')); ?>">Technologies</a></li>
            <li><a href="<?php echo esc_url(home_url('/products')); ?>">Products</a></li>
            <li><a href="<?php echo esc_url(home_url('/applications')); ?>">Applications</a></li>
            <li><a href="<?php echo esc_url(home_url('/turnkey-solution')); ?>">Turnkey Solution</a></li>
            <li><a href="<?php echo esc_url(home_url('/contact')); ?>">Contact</a></li>
          </ul>
        </div>

        <!-- Services -->
        <div class="footer-col">
          <h3>Our Services</h3>
          <ul>
            <li><a href="<?php echo esc_url(home_url('/products')); ?>">Waveguide Components</a></li>
            <li><a href="<?php echo esc_url(home_url('/products')); ?>">Horn Antennas</a></li>
            <li><a href="<?php echo esc_url(home_url('/turnkey-solution')); ?>">Turnkey Solutions</a></li>
            <li><a href="<?php echo esc_url(home_url('/contact')); ?>">Custom Engineering</a></li>
          </ul>
        </div>

        <!-- Contact info -->
        <div class="footer-col">
          <h3>Contact Info</h3>
          <ul class="footer-contact">
            <li>
              <span class="footer-icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
              </span>
              Am Weichselgarten 27<br>91058 Erlangen, Germany
            </li>
            <li>
              <span class="footer-icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
              </span>
              <a href="tel:+4991318560">+49 9131 8560</a>
            </li>
            <li>
              <span class="footer-icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="4" width="20" height="16" rx="2"/><polyline points="22,6 12,13 2,6"/></svg>
              </span>
              <a href="mailto:info@golden-devices.com">info@golden-devices.com</a>
            </li>
          </ul>
        </div>

      </div>
    </div>
  </div>

  <div class="lower-footer">
    <div class="footer-container">
      <div class="footer-bottom-row">
        <p>&copy; <?php echo date('Y'); ?> Golden Devices GmbH. All rights reserved.</p>
        <ul>
          <li><a href="<?php echo esc_url(home_url('/eic-accelerator')); ?>">EIC Accelerator</a></li>
          <li><a href="<?php echo esc_url(home_url('/legal-notice')); ?>">Legal Notice</a></li>
          <li><a href="<?php echo esc_url(home_url('/privacy-policy')); ?>">Privacy Policy</a></li>
          <li><a href="<?php echo esc_url(home_url('/agb')); ?>">Terms &amp; Conditions</a></li>
        </ul>
      </div>
    </div>
  </div>

  <button id="backToTop" title="Back to top" aria-label="Back to top">
    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="18 15 12 9 6 15"/></svg>
  </button>
</footer>

<script>
(function() {
  // Theme-wide reveal-on-scroll for all pages (sub-pages)
  var revealEls = document.querySelectorAll('[data-reveal]');
  if ('IntersectionObserver' in window && revealEls.length) {
    var io = new IntersectionObserver(function(entries) {
      entries.forEach(function(entry) {
        if (entry.isIntersecting) {
          var delay = entry.target.getAttribute('data-reveal-delay') || 0;
          entry.target.style.transitionDelay = delay + 'ms';
          entry.target.classList.add('is-visible');
          io.unobserve(entry.target);
        }
      });
    }, { threshold: 0.12 });
    revealEls.forEach(function(el) { io.observe(el); });
  } else {
    revealEls.forEach(function(el) { el.classList.add('is-visible'); });
  }

  // Back-to-top
  var btt = document.getElementById('backToTop');
  if (btt) {
    window.addEventListener('scroll', function() {
      btt.classList.toggle('visible', window.scrollY > 400);
    }, { passive: true });
    btt.addEventListener('click', function() {
      window.scrollTo({ top: 0, behavior: 'smooth' });
    });
  }
})();
</script>

<?php wp_footer(); ?>

</body>
</html>
