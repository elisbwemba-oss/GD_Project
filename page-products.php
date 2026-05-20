<?php get_header(); ?>

<?php $tpl = get_template_directory_uri(); ?>

<div class="page-shell products-page">

  <!-- ========== PAGE HERO ========== -->
  <?php
    $hero_slides = [
      $tpl . '/images/NASA/CAD_real.png',
      $tpl . '/images/NASA/assembly.png',
      $tpl . '/images/NASA/antenna_on_satelite.png',
      $tpl . '/images/NASA/beam_pattern.png',
    ];
  ?>
  <section class="page-hero page-hero--slider" id="productsHero">
    <div class="hero-slider" id="heroSlider" aria-roledescription="carousel" aria-label="Component imagery">
      <?php foreach ($hero_slides as $i => $img): ?>
        <div class="hero-slide<?php echo $i === 0 ? ' is-active' : ''; ?>" style="background-image:url('<?php echo esc_url($img); ?>');" aria-hidden="<?php echo $i === 0 ? 'false' : 'true'; ?>"></div>
      <?php endforeach; ?>
      <div class="hero-slider-overlay" aria-hidden="true"></div>
    </div>

    <div class="page-hero-inner" data-reveal>
      <nav class="breadcrumb" aria-label="Breadcrumb">
        <a href="<?php echo esc_url(home_url('/')); ?>">Home</a>
        <span class="sep">/</span>
        <span class="current">Products</span>
      </nav>
      <span class="hero-eyebrow-tag">Catalog</span>
      <h1>Precision-Engineered Components</h1>
      <p class="lede">Antenna and waveguide components — ready to order or fully customizable to your specification. From WR-340 down to WR-3 and beyond.</p>
    </div>

    <div class="hero-slider-dots" id="heroDots" role="tablist" aria-label="Slide navigation">
      <?php foreach ($hero_slides as $i => $img): ?>
        <button type="button" class="hero-dot<?php echo $i === 0 ? ' is-active' : ''; ?>" data-index="<?php echo $i; ?>" role="tab" aria-selected="<?php echo $i === 0 ? 'true' : 'false'; ?>" aria-label="Slide <?php echo $i + 1; ?>"></button>
      <?php endforeach; ?>
    </div>
  </section>

  <!-- ========== PRODUCT CATALOG ========== -->
  <section class="page-section">
    <div class="container">

      <!-- Filter tabs -->
      <div class="prod-filter" id="prodFilter" role="tablist" aria-label="Product categories">
        <button class="prod-tab active" data-cat="all" role="tab" aria-selected="true">All Products</button>
        <button class="prod-tab" data-cat="waveguide" role="tab">Waveguide</button>
        <button class="prod-tab" data-cat="antenna" role="tab">Antennas</button>
        <button class="prod-tab" data-cat="assembly" role="tab">Assemblies</button>
      </div>

      <div class="prod-grid" id="prodGrid">

        <?php
          $products = [
            ['waveguide','Standard Waveguide Section','WR-10 to WR-340 — precision-machined aluminum or brass with standard UBR / UG flanges.'],
            ['waveguide','E-Plane / H-Plane Bend','90° and custom angle bends with minimal reflection, available in all standard waveguide sizes.'],
            ['waveguide','Magic Tee / Hybrid Tee','High isolation magic tees for power splitting and combining in test and radar systems.'],
            ['waveguide','Waveguide-to-Coax Transition','Low-loss transitions from waveguide to SMA / N / 2.92 mm connectors across standard frequency bands.'],
            ['antenna','Pyramidal Horn Antenna','Standard gain horns from 8 dBi to 25 dBi covering WR-28 through WR-229 frequency ranges.'],
            ['antenna','Corrugated Feed Horn','Low cross-polarization corrugated horns for satellite and reflector antenna feed applications.'],
            ['antenna','Waveguide Slot Array','High-efficiency slotted waveguide arrays for radar and SAR applications — custom beam shaping available.'],
            ['assembly','Waveguide Sub-Assembly','Multi-component waveguide assemblies including switches, attenuators, and phase shifters — fully tested.'],
            ['assembly','Antenna Feed System','Complete feed chain from horn to orthomode transducer (OMT) and polarizer — ready for system integration.'],
          ];
          $cat_labels = [
            'waveguide' => 'Waveguide',
            'antenna'   => 'Antenna',
            'assembly'  => 'Assembly',
          ];
          foreach ($products as $i => $p):
            $cat = $p[0];
        ?>
        <article class="prod-card" data-cat="<?php echo esc_attr($cat); ?>" data-reveal data-reveal-delay="<?php echo ($i % 3) * 80; ?>">
          <span class="prod-cat-badge prod-cat-<?php echo esc_attr($cat); ?>"><?php echo esc_html($cat_labels[$cat]); ?></span>
          <div class="prod-card-icon">
            <?php if ($cat === 'waveguide'): ?>
              <svg viewBox="0 0 48 48" fill="none" stroke="currentColor" stroke-width="2"><rect x="6" y="18" width="36" height="12" rx="2"/><line x1="6" y1="14" x2="6" y2="34"/><line x1="42" y1="14" x2="42" y2="34"/></svg>
            <?php elseif ($cat === 'antenna'): ?>
              <svg viewBox="0 0 48 48" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 36 L24 8 L34 36 Z" stroke-linejoin="round"/><line x1="18" y1="26" x2="30" y2="26"/><line x1="24" y1="36" x2="24" y2="42"/></svg>
            <?php else: ?>
              <svg viewBox="0 0 48 48" fill="none" stroke="currentColor" stroke-width="2"><circle cx="24" cy="24" r="6"/><path d="M24 6 V14 M24 34 V42 M6 24 H14 M34 24 H42 M11 11 L17 17 M31 31 L37 37 M11 37 L17 31 M31 17 L37 11"/></svg>
            <?php endif; ?>
          </div>
          <h3 class="prod-card-title"><?php echo esc_html($p[1]); ?></h3>
          <p class="prod-card-desc"><?php echo esc_html($p[2]); ?></p>
          <a href="<?php echo esc_url(home_url('/contact')); ?>" class="prod-link">Request Quote <span aria-hidden="true">→</span></a>
        </article>
        <?php endforeach; ?>

      </div>

      <p class="prod-empty" id="prodEmpty" hidden>No products in this category.</p>
    </div>
  </section>

  <!-- ========== CUSTOM CTA ========== -->
  <section class="gd-cta" data-reveal>
    <div class="gd-cta-inner">
      <span class="hero-eyebrow-tag">Custom Solutions</span>
      <h2>Need a Custom Solution?</h2>
      <p>Most of our products are available in custom sizes, materials, and frequency ranges. Our engineering team works directly with you to meet your exact specifications.</p>
      <a href="<?php echo esc_url(home_url('/turnkey-solution')); ?>" class="btn btn-primary btn-large">Explore Turnkey Solution</a>
    </div>
  </section>

  <!-- ========== PAGE NAV ========== -->
  <div class="page-nav">
    <a href="<?php echo esc_url(home_url('/technologies')); ?>" class="page-nav-btn">Continue to Technologies</a>
  </div>

</div>

<script>
(function() {
  // Hero image slider
  var slider = document.getElementById('heroSlider');
  var dotsWrap = document.getElementById('heroDots');
  if (slider && dotsWrap) {
    var slides = slider.querySelectorAll('.hero-slide');
    var dots = dotsWrap.querySelectorAll('.hero-dot');
    var current = 0;
    var timer = null;
    var INTERVAL = 5000;

    function goTo(idx) {
      idx = (idx + slides.length) % slides.length;
      slides[current].classList.remove('is-active');
      slides[current].setAttribute('aria-hidden', 'true');
      dots[current].classList.remove('is-active');
      dots[current].setAttribute('aria-selected', 'false');
      current = idx;
      slides[current].classList.add('is-active');
      slides[current].setAttribute('aria-hidden', 'false');
      dots[current].classList.add('is-active');
      dots[current].setAttribute('aria-selected', 'true');
    }

    function start() {
      stop();
      timer = setInterval(function() { goTo(current + 1); }, INTERVAL);
    }
    function stop() {
      if (timer) { clearInterval(timer); timer = null; }
    }

    dots.forEach(function(dot) {
      dot.addEventListener('click', function() {
        goTo(parseInt(this.dataset.index, 10));
        start();
      });
    });

    var hero = document.getElementById('productsHero');
    if (hero) {
      hero.addEventListener('mouseenter', stop);
      hero.addEventListener('mouseleave', start);
    }

    start();
  }

  var tabs = document.querySelectorAll('#prodFilter .prod-tab');
  var cards = document.querySelectorAll('#prodGrid .prod-card');
  var empty = document.getElementById('prodEmpty');
  if (!tabs.length || !cards.length) return;

  tabs.forEach(function(tab) {
    tab.addEventListener('click', function() {
      var cat = this.dataset.cat;
      tabs.forEach(function(t) {
        t.classList.toggle('active', t === this);
        t.setAttribute('aria-selected', t === this ? 'true' : 'false');
      }.bind(this));
      var visible = 0;
      cards.forEach(function(c) {
        var match = (cat === 'all' || c.dataset.cat === cat);
        c.style.display = match ? '' : 'none';
        if (match) visible++;
      });
      if (empty) empty.hidden = visible > 0;
    });
  });
})();
</script>

<?php get_footer(); ?>
