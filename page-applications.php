<?php get_header(); ?>

<?php $tpl = get_template_directory_uri(); ?>

<div class="page-shell apps-page">

  <!-- ========== PAGE HERO ========== -->
  <section class="page-hero">
    <div class="page-hero-inner" data-reveal>
      <nav class="breadcrumb" aria-label="Breadcrumb">
        <a href="<?php echo esc_url(home_url('/')); ?>">Home</a>
        <span class="sep">/</span>
        <span class="current">Applications</span>
      </nav>
      <span class="hero-eyebrow-tag">Industries We Serve</span>
      <h1>Same process. Five very different industries.</h1>
      <p class="lede">Our 3D-printed RF components ship into drones, space hardware, automotive radar, 6G research and security systems. The common thread: each one needs geometries that traditional manufacturing can't produce in a single piece.</p>
    </div>
  </section>

  <!-- ========== APPLICATIONS GRID ========== -->
  <section class="page-section">
    <div class="container">
      <header class="gd-section-head" data-reveal>
        <span class="eyebrow">Fields of Application</span>
        <h2>Where our parts go.</h2>
        <p class="sub">Each of these industries needs RF hardware that conventional manufacturing can't produce in one piece. That's the gap we sit in.</p>
      </header>

      <div class="gd-card-grid">

        <!-- DRONES -->
        <article class="gd-card" data-reveal>
          <div class="gd-card-icon">
            <svg viewBox="0 0 40 40" fill="none" stroke="currentColor" stroke-width="2">
              <circle cx="20" cy="20" r="4"/>
              <line x1="20" y1="16" x2="20" y2="8"/>
              <line x1="20" y1="24" x2="20" y2="32"/>
              <line x1="16" y1="20" x2="8" y2="20"/>
              <line x1="24" y1="20" x2="32" y2="20"/>
              <ellipse cx="8" cy="20" rx="5" ry="2.5" stroke-width="1.5"/>
              <ellipse cx="32" cy="20" rx="5" ry="2.5" stroke-width="1.5"/>
              <ellipse cx="20" cy="8" rx="5" ry="2.5" stroke-width="1.5"/>
              <ellipse cx="20" cy="32" rx="5" ry="2.5" stroke-width="1.5"/>
            </svg>
          </div>
          <h3>Drones &amp; UAV</h3>
          <p>Lightweight monolithic waveguide and antenna parts. Every gram you save here buys flight time, payload, or range.</p>
          <div class="gd-card-tags">
            <span class="tag-pill">Lightweight</span>
            <span class="tag-pill">Compact</span>
            <span class="tag-pill">UAV</span>
          </div>
        </article>

        <!-- SPACE -->
        <article class="gd-card" data-reveal data-reveal-delay="80">
          <div class="gd-card-icon">
            <svg viewBox="0 0 40 40" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M20 4 L36 26 H24 L20 36 L16 26 H4 Z" stroke-linejoin="round"/>
              <path d="M12 22 H28" stroke-width="1.5"/>
            </svg>
          </div>
          <h3>Space &amp; Aerospace</h3>
          <p>RF hardware for space-grade applications, including a Ka-band feed assembly prototype developed for the INCUS Earth science mission. Reliability and mass are the constraints we design around.</p>
          <div class="gd-card-tags">
            <span class="tag-pill">INCUS</span>
            <span class="tag-pill">Ka-band</span>
            <span class="tag-pill">Satellite</span>
          </div>
        </article>

        <!-- AUTOMOTIVE -->
        <article class="gd-card" data-reveal data-reveal-delay="160">
          <div class="gd-card-icon">
            <svg viewBox="0 0 40 40" fill="none" stroke="currentColor" stroke-width="2">
              <rect x="4" y="14" width="32" height="16" rx="4"/>
              <circle cx="11" cy="30" r="4"/><circle cx="29" cy="30" r="4"/>
              <path d="M8 14 L12 8 H28 L32 14"/>
              <path d="M16 20 Q20 17 24 20" stroke-linecap="round"/>
            </svg>
          </div>
          <h3>Automotive</h3>
          <p>Radar feed systems and waveguide parts for ADAS and autonomous driving. 77 GHz and beyond, with geometries that PCB-based radar can't reach.</p>
          <div class="gd-card-tags">
            <span class="tag-pill">77 GHz</span>
            <span class="tag-pill">ADAS</span>
            <span class="tag-pill">Radar</span>
          </div>
        </article>

        <!-- 6G -->
        <article class="gd-card" data-reveal data-reveal-delay="240">
          <div class="gd-card-icon">
            <svg viewBox="0 0 40 40" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M8 32 Q8 8 20 8 Q32 8 32 32" stroke-linecap="round"/>
              <path d="M13 32 Q13 15 20 15 Q27 15 27 32" stroke-linecap="round"/>
              <path d="M18 32 Q18 22 20 22 Q22 22 22 32" stroke-linecap="round"/>
              <circle cx="20" cy="34" r="2" fill="currentColor"/>
            </svg>
          </div>
          <h3>6G Communications</h3>
          <p>The next wireless generation runs well above 100 GHz. That's the band where PCB stops working and our process starts to matter.</p>
          <div class="gd-card-tags">
            <span class="tag-pill">6G</span>
            <span class="tag-pill">Sub-THz</span>
            <span class="tag-pill">mmWave</span>
          </div>
        </article>

        <!-- SECURITY -->
        <article class="gd-card" data-reveal data-reveal-delay="320">
          <div class="gd-card-icon">
            <svg viewBox="0 0 40 40" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M20 4 L34 10 V20 Q34 30 20 36 Q6 30 6 20 V10 Z" stroke-linejoin="round"/>
              <path d="M14 20 L18 24 L26 16" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </div>
          <h3>Security &amp; Defence</h3>
          <p>RF components for security and defence systems where size, weight and reliability are non-negotiable.</p>
          <div class="gd-card-tags">
            <span class="tag-pill">Defence</span>
            <span class="tag-pill">Sensing</span>
            <span class="tag-pill">Reliability</span>
          </div>
        </article>

      </div>
    </div>
  </section>

  <!-- ========== ONE PARTNER CTA ========== -->
  <section class="gd-cta" data-reveal>
    <div class="gd-cta-inner">
      <span class="hero-eyebrow-tag">One Partner</span>
      <h2>From your spec to a qualified part.</h2>
      <p>Our turnkey approach takes the project from first specification through to finished, measured hardware. One team owns every step, including the ones that go wrong.</p>
      <a href="<?php echo esc_url(home_url('/turnkey-solution')); ?>" class="btn btn-primary btn-large">See how it works</a>
    </div>
  </section>

  <!-- ========== PAGE NAV ========== -->
  <div class="page-nav">
    <a href="<?php echo esc_url(home_url('/turnkey-solution')); ?>" class="page-nav-btn">Continue to Turnkey Solution</a>
  </div>

</div>

<?php get_footer(); ?>
