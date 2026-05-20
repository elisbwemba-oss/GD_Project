<?php get_header(); ?>

<?php
$tpl = get_template_directory_uri();
?>

<div class="progress-bar" id="progressBar"></div>

<?php if (is_front_page() || is_home()) : ?>

<main id="home-main" class="home-main">

  <!-- ========== HERO — CINEMATIC ========== -->
  <section class="hero hero-cinematic" id="hero" aria-label="Intro">
    <video class="hero-video" id="heroVideo" autoplay muted playsinline preload="auto" poster="<?php echo esc_url($tpl . '/Archive/signal-2026-04-13-105004_009.jpeg'); ?>">
      <source src="<?php echo esc_url($tpl . '/Archive/splashscreen_micha.mp4'); ?>" type="video/mp4">
    </video>
    <div class="hero-overlay" aria-hidden="true"></div>
    <div class="hero-grid-bg" aria-hidden="true"></div>
    <div class="hero-glow hero-glow-tl" aria-hidden="true"></div>
    <div class="hero-glow hero-glow-br" aria-hidden="true"></div>

    <div class="hero-content">

      
      

      <!-- Animated headline (word-by-word reveal) -->
      <h1 class="hero-headline">
        <span class="hero-word">Shaping</span>
        <span class="hero-word">mmWaves</span>
        <span class="hero-word">through</span>
        <span class="hero-word hero-word-gold">3D&#8209;Printing</span>
      </h1>

      <!-- Live status tag (small, after subtitle) -->
      <span class="hero-status-tag">
        <span class="hero-status-dot" aria-hidden="true"></span>
        Radar Systems · prefer  · GD-Antennas
      </span>

      <!-- Primary CTA -->
      <div class="hero-actions">
        <a href="<?php echo esc_url(home_url('/applications')); ?>" class="btn btn-primary btn-large btn-shimmer">
          <span>See where our parts ship</span>
          <span class="btn-arrow" aria-hidden="true">→</span>
        </a>
      </div>

    </div>

    <!-- Marquee strip with key specs -->
    <div class="hero-marquee" aria-hidden="true">
      <div class="hero-marquee-track">
        <?php
          $marquee_items = [
            'Monolithic 3D-Printing',
            'FAU Spin-off',
            'IHK Gründerpreis 2025',
            'Tested to 300 GHz',
            'In-House RF Lab',
            'Made in Germany',
          ];
          for ($loop = 0; $loop < 2; $loop++) {
            foreach ($marquee_items as $item) {
              echo '<span class="hero-marquee-item">' . esc_html($item) . '</span>';
              echo '<span class="hero-marquee-sep" aria-hidden="true">●</span>';
            }
          }
        ?>
      </div>
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

  <!-- ========== STATS ========== -->
  <section class="section stats-section" id="stats" aria-label="Why Golden Devices">
    <div class="container">
      <header class="section-head" data-reveal>
        <h2 class="section-title">Founded at FAU Erlangen-Nürnberg.</h2>
      </header>

      <div class="stats-grid">
        <div class="stat-item" data-reveal data-reveal-delay="0">
          <h3 class="stat-number" data-target="300" data-suffix=" GHz">0</h3>
          <p class="stat-label">tested up to</p>
        </div>
        <div class="stat-item" data-reveal data-reveal-delay="100">
          <h3 class="stat-number" data-target="4" data-suffix="+">0</h3>
          <p class="stat-label">years building</p>
        </div>
        <div class="stat-item" data-reveal data-reveal-delay="200">
          <h3 class="stat-number" data-target="189" data-suffix="+">0</h3>
          <p class="stat-label">RF parts delivered</p>
        </div>
        <div class="stat-item" data-reveal data-reveal-delay="300">
          <h3 class="stat-number">IHK</h3>
          <p class="stat-label">Gründerpreis 2025</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ========== PROBLEM / SOLUTION ========== -->
  <section class="section problem-solution" id="problem" aria-label="Challenge & Solution">
    <div class="container split-container">
      <div class="split-content" data-reveal>
        <span class="section-eyebrow">The Challenge</span>
        <h2 class="section-title">PCB technology hits a wall around 80 GHz.</h2>
        <p class="lead-text">
          Above that, surfaces get rough, dielectric losses pile up, and tolerance stacks blow the link budget. We saw the wall coming and built our process around it.
        </p>
        <p class="lead-text">
          <strong>What we do instead:</strong> print the whole RF part as one piece of metal. Waveguides route through it like wires through a board, with no joints to leak signal and no fasteners to align.
        </p>
        <ul class="check-list">
          <li>Complex internal geometries in one piece</li>
          <li>Waveguides routed in any direction, monolithically</li>
          <li>The limit is your CAD file, not our process</li>
          <li>Same workflow from prototype to series</li>
        </ul>
        <a href="<?php echo esc_url(home_url('/technologies')); ?>" class="btn btn-primary">How the process works</a>
      </div>
      <div class="split-media" data-reveal data-reveal-delay="150">
        <img src="<?php echo esc_url($tpl . '/Archive/signal-2026-04-13-105004_009.jpeg'); ?>" alt="3D-Printing Manufacturing">
        <span class="split-media-glow" aria-hidden="true"></span>
      </div>
    </div>
  </section>

  <!-- ========== TURNKEY HERO + TIMELINE ========== -->
  <section class="ts-hero" aria-label="Turnkey Solution">
    <div class="container">
      <div class="ts-hero-content" data-reveal>
        <span class="section-eyebrow">Turnkey Solution</span>
        <h2 class="section-title">We handle the whole stack.</h2>
        <p class="ts-hero-sub">Spec, design, prototype, measurement, series. One contract, one team to call.</p>
      </div>

      <ol class="ts-hero-timeline" data-reveal data-reveal-delay="200">
        <li>
          <a class="ts-ht-step" href="#phase-design" data-phase-link>
            <div class="ts-ht-icon">
              <svg viewBox="0 0 36 36" fill="none"><path d="M10 26 L18 10 L26 18 L20 26Z" stroke="currentColor" stroke-width="2" stroke-linejoin="round"/><circle cx="26" cy="10" r="3" stroke="currentColor" stroke-width="2"/><line x1="14" y1="18" x2="8" y2="28" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg>
            </div>
            <span>Design</span>
          </a>
        </li>
        <li class="ts-ht-arrow" aria-hidden="true">→</li>
        <li>
          <a class="ts-ht-step" href="#phase-prototype" data-phase-link>
            <div class="ts-ht-icon">
              <svg viewBox="0 0 36 36" fill="none"><rect x="8" y="14" width="20" height="14" rx="2" stroke="currentColor" stroke-width="2"/><path d="M12 14 V10 Q12 6 18 6 Q24 6 24 10 V14" stroke="currentColor" stroke-width="2"/><circle cx="18" cy="21" r="3" stroke="currentColor" stroke-width="2"/></svg>
            </div>
            <span>Prototype</span>
          </a>
        </li>
        <li class="ts-ht-arrow" aria-hidden="true">→</li>
        <li>
          <a class="ts-ht-step" href="#phase-production" data-phase-link>
            <div class="ts-ht-icon">
              <svg viewBox="0 0 36 36" fill="none"><rect x="4" y="18" width="28" height="14" rx="2" stroke="currentColor" stroke-width="2"/><path d="M4 18 L10 10 H26 L32 18" stroke="currentColor" stroke-width="2" stroke-linejoin="round"/><line x1="12" y1="22" x2="24" y2="22" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/><line x1="12" y1="26" x2="20" y2="26" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg>
            </div>
            <span>Production</span>
          </a>
        </li>
        <li class="ts-ht-arrow" aria-hidden="true">→</li>
        <li>
          <a class="ts-ht-step" href="#phase-delivery" data-phase-link>
            <div class="ts-ht-icon">
              <svg viewBox="0 0 36 36" fill="none"><circle cx="18" cy="18" r="12" stroke="currentColor" stroke-width="2"/><path d="M11 18 L16 23 L25 13" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </div>
            <span>Delivery</span>
          </a>
        </li>
      </ol>
    </div>
  </section>

  <!-- ========== HOW IT WORKS ========== -->
  <section class="ts-steps-section" id="how-it-works" aria-label="How it works">
    <div class="container">
      <header class="section-head" data-reveal>
        <span class="section-eyebrow">Process</span>
        <h2 class="section-title">How It Works</h2>
      </header>

      <div class="process-grid">
        <?php
          $steps = [
            ['01','Specification','Archive/Antenna_be.jpg','You bring us the spec for your antenna or RF component. We start from scratch — together we define the geometry, the system architecture, and the performance targets.'],
            ['02','Design in CAD','Archive/signal-2026-04-13-105004_007.jpeg','Our engineers model the full geometry in CAD — including waveguides routed in any direction, all as one monolithic piece.'],
            ['03','Simulation & Optimization','Archive/signal-2026-04-13-105004_008.jpeg','We simulate and optimize the design with state-of-the-art EM tools until it meets your spec — before a single part is printed.'],
            ['04','Prototyping & Measurement','Archive/signal-2026-04-13-105004_009.jpeg','Manufacturing happens in-house. We print, measure and iterate until the part performs. You only see the final, validated prototype.'],
            ['05','Validation & Series','prod.jpeg','Once you validate the prototype, we go directly into series production — same process, same quality, scaled up.'],
          ];
          $phase_ids = [
            1 => 'phase-design',      // 02 Design in CAD
            3 => 'phase-prototype',   // 04 Prototyping & Measurement
            4 => 'phase-production',  // 05 Validation & Series
            4=> 'phase-delivery',    // 05 Delivery
          ];
          foreach ($steps as $i => $s):
            $row_id = isset($phase_ids[$i]) ? $phase_ids[$i] : '';
        ?>
        <div class="process-row<?php echo $row_id ? ' is-phase-target' : ''; ?>"<?php echo $row_id ? ' id="' . esc_attr($row_id) . '"' : ''; ?> data-reveal data-reveal-delay="<?php echo $i * 80; ?>">
          <div class="process-cell process-cell-head">
            <div class="process-num"><?php echo esc_html($s[0]); ?></div>
            <h3 class="process-title"><?php echo esc_html($s[1]); ?></h3>
          </div>
          <div class="process-cell process-cell-img">
            <img src="<?php echo esc_url($tpl . '/' . $s[2]); ?>" alt="<?php echo esc_attr($s[1]); ?>" loading="lazy">
          </div>
          <div class="process-cell process-cell-text">
            <p><?php echo esc_html($s[3]); ?></p>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

    <!-- ========== WHY TURNKEY ========== -->
  <section class="page-section alt">
    <div class="container">
      <header class="gd-section-head" data-reveal>
        <span class="eyebrow">Why Turnkey?</span>
        <h2>One workshop. One process. One responsibility.</h2>
        <p class="sub">Everything happens in our Erlangen workshop — design, printing, measurement, validation. No interfaces, no hand-offs, no excuses.</p>
      </header>

      <div class="gd-card-grid">
        <article class="gd-card" data-reveal>
          <div class="gd-card-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M9 12 L11 14 L15 10"/></svg>
          </div>
          <h3>Monolithic by Design</h3>
          <p>Highly complex structures — including waveguides routed in any direction — produced as one single piece. The limit is your CAD design, not the manufacturing.</p>
        </article>

        <article class="gd-card" data-reveal data-reveal-delay="80">
          <div class="gd-card-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2 V22 M2 12 H22"/><circle cx="12" cy="12" r="9"/></svg>
          </div>
          <h3>Measured In-House</h3>
          <p>We measure every prototype on our own bench before it ever leaves the building. You only see what already works.</p>
        </article>

        <article class="gd-card" data-reveal data-reveal-delay="160">
          <div class="gd-card-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 10 L12 4 L21 10 V20 H3 Z" stroke-linejoin="round"/><path d="M9 20 V14 H15 V20"/></svg>
          </div>
          <h3>Same Process to Series</h3>
          <p>What worked in the prototype runs identically in series. No re-tooling, no re-qualification — just scaled-up production of the validated part.</p>
        </article>

        <article class="gd-card" data-reveal data-reveal-delay="240">
          <div class="gd-card-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="8" r="4"/><path d="M4 20c0-4 3.6-7 8-7s8 3 8 7"/></svg>
          </div>
          <h3>Direct Engineer Access</h3>
          <p>Talk to the engineers building your part, not to account managers. Decisions in days, not weeks.</p>
        </article>
      </div>
    </div>
  </section>

  <!-- ========== FEATURED CASE STUDY (one big hero) ========== -->
  <section class="section case-section is-phase-target" id="projects" aria-label="Featured Case Study">
    <span id="phase-delivery" class="phase-anchor" aria-hidden="true"></span>
    <div class="container">
      <header class="section-head" data-reveal>
        <span class="section-eyebrow">Case Study</span>
        <h2 class="section-title">A feed assembly for INCUS.</h2>
        <p class="section-sub">A Ka-band feed assembly prototype, developed for the INCUS Earth science mission. Seven horns, tighter than standard WR28 spacing, in one monolithic piece.</p>
      </header>

      <article class="case-hero" data-reveal>
        <div class="case-hero-media">
          <img src="<?php echo esc_url($tpl . '/Archive/signal-2026-04-13-105004_008.jpeg'); ?>" alt="Ka-band feed assembly prototype for the INCUS mission" loading="lazy">
          <span class="case-tag">Space · Aerospace</span>
        </div>
        <div class="case-hero-body">
          <span class="case-customer">INCUS Mission · Ka-band Feed</span>
          <h3 class="case-title">Seven horns. One piece of cast aluminum.</h3>
          <p class="case-text">INCUS is an Earth science mission studying convective storms. Each observatory carries a 1.6 m deployable mesh reflector, a Ka-band radar, and a seven-horn feed system that generates partially overlapping beams. As an independent prototyping partner, we built this concept around that brief — validated under space-typical load conditions, with the horn cluster tighter than standard WR28 spacing would normally allow.</p>

          <div class="case-metrics">
            <div class="case-metric">
              <div class="case-metric-val">35.75 GHz</div>
              <div class="case-metric-lbl">Ka-band operating point</div>
            </div>
            <div class="case-metric">
              <div class="case-metric-val">Monolithic</div>
              <div class="case-metric-lbl">Cast aluminum, one piece</div>
            </div>
            <div class="case-metric">
              <div class="case-metric-val">126 g</div>
              <div class="case-metric-lbl">Final assembly mass</div>
            </div>
          </div>

          <div class="case-links">
            <a href="<?php echo esc_url(home_url('/incus-mission')); ?>" class="case-link case-link-primary">Read the case study <span aria-hidden="true">→</span></a>
          </div>
        </div>
      </article>
    </div>
  </section>

  <!-- ========== FROM OUR LAB (visual gallery) ========== -->
  <?php
    $lab_categories = [
      'rf-lab' => [
        'label' => 'RF Lab',
        'title' => 'Calibrated test bench',
        'cover' => 'Archive/signal-2026-04-13-105004_005.jpeg',
        'cover_alt' => 'Precision RF measurement setup',
        'media' => [
          ['type' => 'image', 'src' => 'Archive/signal-2026-04-13-105004_005.jpeg', 'alt' => 'VNA test bench',      'caption' => 'Network analyzer setup — calibrated S-parameter measurement up to 67 GHz.'],
          ['type' => 'image', 'src' => 'images/NASA/return_loss.png',                'alt' => 'Return loss plot',    'caption' => 'Return loss S<sub>11</sub> — typical &lt; −25 dB across the operational passband.'],
          ['type' => 'image', 'src' => 'images/NASA/beam_pattern.png',                'alt' => 'Beam pattern',        'caption' => 'Far-field radiation pattern after near-field to far-field transform.'],
          ['type' => 'image', 'src' => 'Archive/signal-2026-04-13-105004_008.jpeg', 'alt' => 'EM simulation',       'caption' => 'Full-wave EM simulation — pre-build optimization loop.'],
          ['type' => 'video', 'src' => 'Archive/splashscreen_micha.mp4',             'poster' => 'Archive/signal-2026-04-13-105004_005.jpeg', 'caption' => 'Lab walk-through — Erlangen RF measurement floor.'],
        ],
      ],
      'manufacturing' => [
        'label' => 'Manufacturing',
        'title' => 'Additive prototyping',
        'cover' => 'Archive/signal-2026-04-13-105004_007.jpeg',
        'cover_alt' => '3D-printed waveguide component',
        'media' => [
          ['type' => 'image', 'src' => 'Archive/signal-2026-04-13-105004_007.jpeg', 'alt' => 'Monolithic waveguide', 'caption' => 'Monolithic waveguide — printed in one piece, no flange joints.'],
          ['type' => 'image', 'src' => 'images/NASA/CAD_real.png',                   'alt' => 'CAD vs as-built',     'caption' => 'CAD model vs as-built part — dimensional deviation &lt; 50 µm.'],
          ['type' => 'image', 'src' => 'images/NASA/assembly.png',                   'alt' => 'Sub-component assembly','caption' => 'Hand assembly of additively manufactured sub-components.'],
          ['type' => 'video', 'src' => 'Archive/feednetwork_final_spinning0001-0078.mp4', 'poster' => 'images/NASA/CAD_real.png', 'caption' => 'Feed network — rotating CAD view of the as-printed geometry.'],
        ],
      ],
      'production' => [
        'label' => 'Production',
        'title' => 'Series assembly',
        'cover' => 'Archive/signal-2026-04-13-105004_009.jpeg',
        'cover_alt' => 'Antenna feed system in production',
        'media' => [
          ['type' => 'image', 'src' => 'Archive/signal-2026-04-13-105004_009.jpeg', 'alt' => 'Feed system build',   'caption' => 'Antenna feed system — series build with full batch traceability.'],
          ['type' => 'image', 'src' => 'prod.jpeg',                                  'alt' => 'Validated unit',      'caption' => 'Validated production unit — ready for system integration.'],
          ['type' => 'image', 'src' => 'images/NASA/assembly.png',                   'alt' => 'Final assembly',      'caption' => 'Final assembly stage prior to electrical characterization.'],
          ['type' => 'video', 'src' => 'Archive/splashscreen_alex.mp4',              'poster' => 'Archive/signal-2026-04-13-105004_009.jpeg', 'caption' => 'Production floor — series assembly in progress.'],
        ],
      ],
      'quality' => [
        'label' => 'Quality',
        'title' => 'Final inspection',
        'cover' => 'prod.jpeg',
        'cover_alt' => 'Quality inspection station',
        'media' => [
          ['type' => 'image', 'src' => 'prod.jpeg',                                  'alt' => 'Inspection station',  'caption' => 'Final inspection — visual and dimensional check against drawing tolerance.'],
          ['type' => 'image', 'src' => 'images/NASA/return_loss.png',                'alt' => 'Acceptance test',     'caption' => 'RF acceptance test — pass/fail against datasheet specification.'],
          ['type' => 'image', 'src' => 'Archive/signal-2026-04-13-105004_005.jpeg', 'alt' => 'Documented measurement','caption' => 'Documented measurement chain — every unit shipped with its full report.'],
        ],
      ],
    ];

    $tile_class_map = ['rf-lab' => 'lab-tile-1', 'manufacturing' => 'lab-tile-2', 'production' => 'lab-tile-3', 'quality' => 'lab-tile-4'];

    // Build absolute URLs for JS payload
    $lab_payload = [];
    foreach ($lab_categories as $key => $cat) {
      $items = [];
      foreach ($cat['media'] as $m) {
        $item = ['type' => $m['type'], 'src' => $tpl . '/' . $m['src'], 'caption' => $m['caption']];
        if ($m['type'] === 'image') $item['alt'] = $m['alt'];
        if ($m['type'] === 'video') $item['poster'] = $tpl . '/' . $m['poster'];
        $items[] = $item;
      }
      $lab_payload[$key] = ['label' => $cat['label'], 'title' => $cat['title'], 'media' => $items];
    }
  ?>
  <section class="section lab-section" aria-label="From our lab">
    <div class="container">
      <header class="section-head" data-reveal>
        <span class="section-eyebrow">Behind the Scenes</span>
        <h2 class="section-title">From Our Lab</h2>
        <p class="section-sub">Photos from our Erlangen workshop. This is where the parts you've been reading about actually get printed, measured and shipped.</p>
      </header>

      <div class="lab-gallery" data-reveal>
        <?php foreach ($lab_categories as $key => $cat): ?>
          <button type="button"
                  class="lab-tile <?php echo esc_attr($tile_class_map[$key]); ?>"
                  data-lab-cat="<?php echo esc_attr($key); ?>"
                  aria-label="Open <?php echo esc_attr($cat['label']); ?> gallery — <?php echo esc_attr(count($cat['media'])); ?> items">
            <img src="<?php echo esc_url($tpl . '/' . $cat['cover']); ?>" alt="<?php echo esc_attr($cat['cover_alt']); ?>" loading="lazy">
            <span class="lab-tile-caption">
              <span class="lab-tag"><?php echo esc_html($cat['label']); ?></span>
              <span class="lab-tile-title"><?php echo esc_html($cat['title']); ?></span>
              <span class="lab-tile-cta">
                <span class="lab-tile-count"><?php echo count($cat['media']); ?> items</span>
              </span>
            </span>
          </button>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- Lab lightbox (single shared instance) -->
  <div class="lab-lightbox" id="labLightbox" role="dialog" aria-modal="true" aria-labelledby="labLightboxTitle" hidden>
    <div class="lab-lightbox-backdrop" data-lab-close></div>
    <div class="lab-lightbox-inner">
      <header class="lab-lightbox-head">
        <div class="lab-lightbox-meta">
          <span class="lab-tag" id="labLightboxTag">RF Lab</span>
          <h3 class="lab-lightbox-title" id="labLightboxTitle">Calibrated test bench</h3>
        </div>
        <button type="button" class="lab-lightbox-close" data-lab-close aria-label="Close gallery">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="6" y1="6" x2="18" y2="18"/><line x1="18" y1="6" x2="6" y2="18"/></svg>
        </button>
      </header>

      <div class="lab-lightbox-stage">
        <button type="button" class="lab-lightbox-nav lab-lightbox-prev" aria-label="Previous">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="15 6 9 12 15 18"/></svg>
        </button>
        <div class="lab-lightbox-media" id="labLightboxMedia"></div>
        <button type="button" class="lab-lightbox-nav lab-lightbox-next" aria-label="Next">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="9 6 15 12 9 18"/></svg>
        </button>
      </div>

      <figcaption class="lab-lightbox-caption" id="labLightboxCaption"></figcaption>

      <div class="lab-lightbox-thumbs" id="labLightboxThumbs" role="tablist" aria-label="Gallery items"></div>
    </div>
  </div>

  <script id="labGalleryData" type="application/json"><?php echo wp_json_encode($lab_payload); ?></script>

  <!-- ========== TEAM CAROUSEL ========== -->
  <section id="team" class="section team-section" aria-label="Our Team">
    <div class="container">
      <header class="section-head" data-reveal>
        <span class="section-eyebrow">Our Team</span>
        <h2 class="section-title">The people behind the technology</h2>
        <p class="section-sub">RF engineers, automation specialists, machinists. Most of us studied or worked in Erlangen, and that's where we build from.</p>
      </header>

      <?php
        $team = [
          [
            'photo' => 'assets/images/team/mark.jpg',
            'name'  => 'Mark Sippel',
            'role'  => 'CEO & Founder',
            'bio'   => 'Visionary leader of Golden Devices. Drives strategy, partnerships and the company\'s growth as an international hidden champion in mmWave manufacturing.',
            'email' => 'mark@golden-devices.com',
            'phone' => '+49 9131 8560',
            'expertise' => 'Leads overall company strategy, investor relations and key customer partnerships. Sets the vision for Golden Devices as a global leader in monolithic mmWave manufacturing.',
          ],
          [
            'photo' => 'assets/images/team/konstantin.jpg',
            'name'  => 'Konstantin Lomakin',
            'role'  => 'CTO & Co-Founder',
            'bio'   => 'Technical mind behind our 3D-printing technology. Leads R&D and shapes the architecture of our monolithic manufacturing platform.',
            'email' => 'konstantin@golden-devices.com',
            'phone' => '+49 9131 8560',
            'expertise' => 'Heads R&D and the monolithic 3D-printing platform. Owns the architecture, IP roadmap and technical direction of every product line we ship.',
          ],
          [
            'photo' => 'assets/images/team/andreas.jpg',
            'name'  => 'Andreas Hoffman',
            'role'  => 'Head of RF Engineering',
            'bio'   => 'mmWave specialist behind our antenna and waveguide designs. Turns electromagnetic theory into manufacturable high-frequency components.',
            'email' => 'andreas@golden-devices.com',
            'phone' => '+49 9131 8560',
            'expertise' => 'Designs and simulates mmWave antennas, waveguides and feed networks up to 110 GHz. Bridges RF simulation and our additive manufacturing process to guarantee performance at scale.',
          ],
          [
            'photo' => 'Archive/jacob.jpg',
            'name'  => 'Jacob Griese',
            'role'  => 'Materials & Process Engineering',
            'bio'   => 'Materials scientist focused on the dielectric and metallic systems that make our printed RF parts perform.',
            'email' => 'jacob@golden-devices.com',
            'phone' => '+49 9131 8560',
            'expertise' => 'Develops the dielectric resins, plating chemistries and post-processing recipes used in our printers. Owns material qualification and reliability testing for every new component family.',
          ],
        ];
      ?>

      <div class="team-carousel" data-reveal>
        <button class="team-carousel-btn team-carousel-prev" aria-label="Previous team member">‹</button>

        <div class="team-carousel-viewport">
          <ul class="team-carousel-track" id="teamTrack">
            <?php foreach ($team as $i => $m): ?>
            <li class="team-card-c" data-index="<?php echo $i; ?>">
              <button type="button" class="team-card-trigger" aria-expanded="false" aria-label="Show contact details for <?php echo esc_attr($m['name']); ?>">
                <div class="team-card-photo">
                  <img src="<?php echo esc_url($tpl . '/' . $m['photo']); ?>" alt="<?php echo esc_attr($m['name']); ?>" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';" loading="lazy">
                  <div class="team-card-placeholder">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="#fab800" stroke-width="1.5"><circle cx="12" cy="8" r="4"/><path d="M4 20c0-4 3.6-7 8-7s8 3 8 7"/></svg>
                  </div>
                </div>
                <div class="team-card-body">
                  <h3 class="team-card-name"><?php echo esc_html($m['name']); ?></h3>
                  <p class="team-card-role"><?php echo esc_html($m['role']); ?></p>
                  <p class="team-card-bio"><?php echo esc_html($m['bio']); ?></p>
                  <span class="team-card-hint" aria-hidden="true">Click for contact</span>
                </div>

                <div class="team-card-overlay" aria-hidden="true">
                  <div class="team-card-overlay-inner">
                    <h3 class="team-card-overlay-name"><?php echo esc_html($m['name']); ?></h3>
                    <p class="team-card-overlay-role"><?php echo esc_html($m['role']); ?></p>
                    <p class="team-card-overlay-expertise"><?php echo esc_html($m['expertise']); ?></p>
                    <ul class="team-card-contact">
                      <li>
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 6h16v12H4z"/><path d="M4 7l8 6 8-6"/></svg>
                        <a href="mailto:<?php echo esc_attr($m['email']); ?>" onclick="event.stopPropagation();"><?php echo esc_html($m['email']); ?></a>
                      </li>
                      <li>
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 4h3l2 5-2.5 1.5a11 11 0 0 0 6 6L15 14l5 2v3a2 2 0 0 1-2 2A16 16 0 0 1 3 6a2 2 0 0 1 2-2z"/></svg>
                        <a href="tel:<?php echo esc_attr(preg_replace('/\s+/', '', $m['phone'])); ?>" onclick="event.stopPropagation();"><?php echo esc_html($m['phone']); ?></a>
                      </li>
                    </ul>
                    <span class="team-card-close-hint" aria-hidden="true">Click to close</span>
                  </div>
                </div>
              </button>
            </li>
            <?php endforeach; ?>
          </ul>
        </div>

        <button class="team-carousel-btn team-carousel-next" aria-label="Next team member">›</button>
      </div>

      <div class="team-carousel-dots" id="teamDots" role="tablist">
        <?php foreach ($team as $i => $m): ?>
        <button class="team-c-dot<?php echo $i === 0 ? ' active' : ''; ?>" data-index="<?php echo $i; ?>" role="tab" aria-label="Member <?php echo $i + 1; ?>"></button>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- ========== LATEST NEWS & NEXT STOP ========== -->
  <section id="news" class="section news-section" aria-label="Latest articles and next event">
    <div class="container">
      <header class="section-head news-section-head" data-reveal>
        <div>
          <span class="section-eyebrow">News &amp; Where to Find Us</span>
          <h2 class="section-title">Latest articles, next event</h2>
          <p class="section-sub">A few things we've written, and where you can come say hi in person.</p>
        </div>
        <a href="<?php echo esc_url(home_url('/blog')); ?>" class="news-all-link">View all articles <span aria-hidden="true">→</span></a>
      </header>

      <div class="news-grid">

        <!-- ARTICLES (left column) -->
        <div class="news-articles">
          <?php
            $wp_articles = get_posts([
              'numberposts' => 3,
              'post_status' => 'publish',
            ]);

            $accent_cycle = ['gold', 'dark', 'soft'];

            if (!empty($wp_articles)) {
              $articles = [];
              foreach ($wp_articles as $idx => $p) {
                $cats = get_the_category($p->ID);
                $articles[] = [
                  'category' => !empty($cats) ? $cats[0]->name : 'Article',
                  'date'     => get_the_date('M j, Y', $p),
                  'title'    => get_the_title($p),
                  'excerpt'  => wp_trim_words(strip_tags($p->post_excerpt ?: $p->post_content), 22, '…'),
                  'link'     => get_permalink($p),
                  'thumb'    => get_the_post_thumbnail_url($p, 'medium'),
                  'accent'   => $accent_cycle[$idx % 3],
                ];
              }
            } else {
              // Fallback content — replace by your real posts once published.
              $articles = [
                [
                  'category' => 'Publication',
                  'date'     => 'Mar 27, 2026',
                  'title'    => '60 GHz CP array antenna in metallized SLA — +0.5 dB vs DMLS (EuCAP 2026)',
                  'excerpt'  => 'UPM Madrid benchmarked an 8×8 circularly polarized V-band array antenna built with our metallized SLA process. Result: +0.5 dB gain and tighter axial ratio vs the DMLS reference.',
                  'link'     => '/wp-content/themes/golden_devices/Archive/p4097-sanchez-castillo.pdf',
                  'thumb'    => '',
                  'accent'   => 'gold',
                ],
                [
                  'category' => 'Lab Tour',
                  'date'     => 'April 18, 2026',
                  'title'    => 'Inside Our Lab: 300 GHz Sub-THz Prototyping Bench',
                  'excerpt'  => 'A behind-the-scenes look at the test equipment, anechoic chamber and characterisation flow we use to qualify next-generation sub-terahertz components.',
                  'link'     => '/blog',
                  'thumb'    => '',
                  'accent'   => 'dark',
                ],
                [
                  'category' => 'Insight',
                  'date'     => 'April 5, 2026',
                  'title'    => 'Why Turnkey RF Beats In-House Production',
                  'excerpt'  => 'Lessons from 50+ industrial RF projects: how a turnkey manufacturing partner shortens time-to-market and de-risks the supply chain.',
                  'link'     => '/blog',
                  'thumb'    => '',
                  'accent'   => 'soft',
                ],
              ];
            }

            foreach ($articles as $i => $a):
              $url = (strpos($a['link'], 'http') === 0) ? $a['link'] : home_url($a['link']);
          ?>
          <article class="news-article-card" data-reveal data-reveal-delay="<?php echo $i * 90; ?>">
            <a class="news-article-link" href="<?php echo esc_url($url); ?>">
              <div class="news-article-thumb news-article-thumb--<?php echo esc_attr($a['accent']); ?>"
                <?php if (!empty($a['thumb'])): ?>style="background-image:url('<?php echo esc_url($a['thumb']); ?>');"<?php endif; ?>>
                <?php if (empty($a['thumb'])): ?>
                <svg class="news-article-thumb-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6">
                  <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
                  <polyline points="14 2 14 8 20 8"/>
                  <line x1="8" y1="13" x2="16" y2="13"/>
                  <line x1="8" y1="17" x2="14" y2="17"/>
                </svg>
                <?php endif; ?>
              </div>
              <div class="news-article-body">
                <div class="news-article-meta">
                  <span class="news-article-cat"><?php echo esc_html($a['category']); ?></span>
                  <span class="news-article-dot" aria-hidden="true">•</span>
                  <span class="news-article-date"><?php echo esc_html($a['date']); ?></span>
                </div>
                <h3 class="news-article-title"><?php echo esc_html($a['title']); ?></h3>
                <p class="news-article-excerpt"><?php echo esc_html($a['excerpt']); ?></p>
                <span class="news-article-cta">Read article <span aria-hidden="true">→</span></span>
              </div>
            </a>
          </article>
          <?php endforeach; ?>
        </div>

        <!-- NEXT EVENT (right column) -->
        <aside class="news-event-feature" data-reveal data-reveal-delay="120">
          <span class="news-event-eyebrow">Next Stop</span>

          <div class="news-event-date">
            <span class="news-event-month">OCT</span>
            <span class="news-event-day">06</span>
            <span class="news-event-year">2026</span>
          </div>

          <h3 class="news-event-name">EuMW 2026 — European Microwave Week</h3>

          <ul class="news-event-meta">
            <li>
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
              England — venue TBA
            </li>
            <li>
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
              October 6–8, 2026
            </li>
          </ul>

          <p class="news-event-desc">Europe's leading conference and exhibition on microwave, radar and high-frequency technology. We'll showcase live mmWave demos, 3D-printed waveguide samples and our latest sub-THz prototypes.</p>

          <a href="https://www.eumw.eu/" target="_blank" rel="noopener noreferrer" class="news-event-cta">View event details <span aria-hidden="true">→</span></a>
        </aside>

      </div>
    </div>
  </section>

  <!-- ========== FINAL CTA ========== -->
  <section id="contact" class="section cta-section" aria-label="Get in touch">
    <div class="container cta-inner" data-reveal>
      <h2 class="cta-title">Got a part that PCB can't make?</h2>
      <p class="cta-sub">Get in touch with our team for a personalized consultation or demo</p>
      <div class="cta-buttons">
        <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn btn-primary btn-large">Start your project</a>
        <a href="<?php echo esc_url(home_url('/request-demo')); ?>" class="btn btn-secondary btn-large">Request a demo</a>
      </div>
    </div>
  </section>

</main>

<script>
(function() {
  // ===== Lab gallery lightbox =====
  var dataNode = document.getElementById('labGalleryData');
  var lightbox = document.getElementById('labLightbox');
  if (dataNode && lightbox) {
    var data = {};
    try { data = JSON.parse(dataNode.textContent || '{}'); } catch (e) { data = {}; }

    var stage    = document.getElementById('labLightboxMedia');
    var capEl    = document.getElementById('labLightboxCaption');
    var tagEl    = document.getElementById('labLightboxTag');
    var titleEl  = document.getElementById('labLightboxTitle');
    var thumbsEl = document.getElementById('labLightboxThumbs');
    var prevBtn  = lightbox.querySelector('.lab-lightbox-prev');
    var nextBtn  = lightbox.querySelector('.lab-lightbox-next');
    var lastFocus = null;
    var currentKey = null;
    var currentIdx = 0;

    function render() {
      var cat = data[currentKey];
      if (!cat) return;
      var item = cat.media[currentIdx];
      stage.innerHTML = '';
      var el;
      if (item.type === 'video') {
        el = document.createElement('video');
        el.src = item.src;
        if (item.poster) el.poster = item.poster;
        el.controls = true;
        el.playsInline = true;
        el.preload = 'metadata';
      } else {
        el = document.createElement('img');
        el.src = item.src;
        el.alt = item.alt || '';
      }
      stage.appendChild(el);
      capEl.innerHTML = item.caption || '';
      Array.prototype.forEach.call(thumbsEl.children, function(t, i) {
        var active = (i === currentIdx);
        t.classList.toggle('is-active', active);
        t.setAttribute('aria-selected', active ? 'true' : 'false');
      });
    }

    function buildThumbs() {
      var cat = data[currentKey];
      thumbsEl.innerHTML = '';
      cat.media.forEach(function(item, i) {
        var btn = document.createElement('button');
        btn.type = 'button';
        btn.className = 'lab-thumb' + (item.type === 'video' ? ' is-video' : '');
        btn.setAttribute('role', 'tab');
        btn.setAttribute('aria-label', 'Item ' + (i + 1));
        var img = document.createElement('img');
        img.src = (item.type === 'video' && item.poster) ? item.poster : item.src;
        img.alt = '';
        img.loading = 'lazy';
        btn.appendChild(img);
        if (item.type === 'video') {
          var play = document.createElement('span');
          play.className = 'lab-thumb-play';
          play.setAttribute('aria-hidden', 'true');
          play.textContent = '▶';
          btn.appendChild(play);
        }
        btn.addEventListener('click', function() { currentIdx = i; render(); });
        thumbsEl.appendChild(btn);
      });
    }

    function open(key, triggerEl) {
      if (!data[key]) return;
      currentKey = key;
      currentIdx = 0;
      lastFocus = triggerEl || document.activeElement;
      tagEl.textContent = data[key].label;
      titleEl.textContent = data[key].title;
      buildThumbs();
      render();
      lightbox.hidden = false;
      document.body.classList.add('lab-lightbox-open');
      requestAnimationFrame(function() { lightbox.classList.add('is-open'); });
      lightbox.querySelector('.lab-lightbox-close').focus();
    }

    function close() {
      lightbox.classList.remove('is-open');
      document.body.classList.remove('lab-lightbox-open');
      // pause any playing video before hiding
      var v = stage.querySelector('video');
      if (v) { try { v.pause(); } catch (e) {} }
      setTimeout(function() {
        lightbox.hidden = true;
        stage.innerHTML = '';
        if (lastFocus && lastFocus.focus) lastFocus.focus();
      }, 220);
    }

    function step(delta) {
      var cat = data[currentKey];
      if (!cat) return;
      currentIdx = (currentIdx + delta + cat.media.length) % cat.media.length;
      render();
    }

    // Tile triggers
    document.querySelectorAll('.lab-tile[data-lab-cat]').forEach(function(tile) {
      tile.addEventListener('click', function() { open(tile.dataset.labCat, tile); });
    });

    // Lightbox controls
    Array.prototype.forEach.call(lightbox.querySelectorAll('[data-lab-close]'), function(el) {
      el.addEventListener('click', close);
    });
    prevBtn.addEventListener('click', function() { step(-1); });
    nextBtn.addEventListener('click', function() { step(1); });

    document.addEventListener('keydown', function(e) {
      if (lightbox.hidden) return;
      if (e.key === 'Escape') close();
      else if (e.key === 'ArrowLeft') step(-1);
      else if (e.key === 'ArrowRight') step(1);
    });
  }

  // ===== Hero video plays only 2 seconds, then freezes =====
  var heroVideo = document.getElementById('heroVideo');
  if (heroVideo) {
    var stopVideo = function() {
      try { heroVideo.pause(); } catch (e) {}
    };
    // pause exactly 2 seconds after page load
    if (document.readyState === 'complete') {
      setTimeout(stopVideo, 2000);
    } else {
      window.addEventListener('load', function() {
        setTimeout(stopVideo, 2000);
      });
    }
  }

  // ===== Progress bar =====
  var bar = document.getElementById('progressBar');
  if (bar) {
    window.addEventListener('scroll', function() {
      var h = document.documentElement;
      var scrolled = (h.scrollTop) / (h.scrollHeight - h.clientHeight) * 100;
      bar.style.width = scrolled + '%';
    }, { passive: true });
  }

  // ===== Reveal on scroll =====
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
    }, { threshold: 0.15 });
    revealEls.forEach(function(el) { io.observe(el); });
  } else {
    revealEls.forEach(function(el) { el.classList.add('is-visible'); });
  }

  // ===== Animated stat counters =====
  var statNums = document.querySelectorAll('.stat-number[data-target]');
  if ('IntersectionObserver' in window && statNums.length) {
    var statIO = new IntersectionObserver(function(entries) {
      entries.forEach(function(entry) {
        if (!entry.isIntersecting) return;
        var el = entry.target;
        var target = parseInt(el.getAttribute('data-target'), 10) || 0;
        var suffix = el.getAttribute('data-suffix') || '+';
        var dur = 1500;
        var start = performance.now();
        function step(t) {
          var p = Math.min((t - start) / dur, 1);
          var val = Math.round(target * (0.5 - 0.5 * Math.cos(Math.PI * p)));
          el.textContent = val + suffix;
          if (p < 1) requestAnimationFrame(step);
        }
        requestAnimationFrame(step);
        statIO.unobserve(el);
      });
    }, { threshold: 0.4 });
    statNums.forEach(function(el) { statIO.observe(el); });
  }

  // ===== Team carousel =====
  var track = document.getElementById('teamTrack');
  var teamPrev = document.querySelector('.team-carousel-prev');
  var teamNext = document.querySelector('.team-carousel-next');
  var teamDots = document.querySelectorAll('.team-c-dot');
  if (track && teamPrev && teamNext && teamDots.length) {
    var cards   = track.querySelectorAll('.team-card-c');
    var teamIdx = 0;

    function visibleCount() {
      if (window.innerWidth <= 700)  return 1;
      if (window.innerWidth <= 1100) return 2;
      return 3;
    }

    function maxIndex() {
      return Math.max(0, cards.length - visibleCount());
    }

    function update() {
      teamIdx = Math.min(teamIdx, maxIndex());
      var card = cards[0];
      if (!card) return;
      var step = card.getBoundingClientRect().width + 24; // gap
      track.style.transform = 'translateX(-' + (teamIdx * step) + 'px)';
      teamDots.forEach(function(dot, i) {
        dot.classList.toggle('active', i === teamIdx);
      });
      teamPrev.disabled = teamIdx === 0;
      teamNext.disabled = teamIdx >= maxIndex();
    }

    teamPrev.addEventListener('click', function() {
      if (teamIdx > 0) { teamIdx--; update(); }
    });
    teamNext.addEventListener('click', function() {
      if (teamIdx < maxIndex()) { teamIdx++; update(); }
    });
    teamDots.forEach(function(dot) {
      dot.addEventListener('click', function() {
        teamIdx = Math.min(parseInt(this.dataset.index, 10), maxIndex());
        update();
      });
    });
    window.addEventListener('resize', update);
    update();

    // Click-to-reveal contact overlay on each team card
    cards.forEach(function(card) {
      var trigger = card.querySelector('.team-card-trigger');
      if (!trigger) return;
      trigger.addEventListener('click', function(e) {
        if (e.target.closest('a')) return; // let email/phone links work
        var isOpen = card.classList.toggle('is-revealed');
        trigger.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
        var overlay = card.querySelector('.team-card-overlay');
        if (overlay) overlay.setAttribute('aria-hidden', isOpen ? 'false' : 'true');
        if (isOpen) {
          cards.forEach(function(other) {
            if (other !== card) {
              other.classList.remove('is-revealed');
              var t = other.querySelector('.team-card-trigger');
              if (t) t.setAttribute('aria-expanded', 'false');
              var o = other.querySelector('.team-card-overlay');
              if (o) o.setAttribute('aria-hidden', 'true');
            }
          });
        }
      });
    });

    document.addEventListener('keydown', function(e) {
      if (e.key === 'Escape') {
        cards.forEach(function(c) {
          c.classList.remove('is-revealed');
          var t = c.querySelector('.team-card-trigger');
          if (t) t.setAttribute('aria-expanded', 'false');
          var o = c.querySelector('.team-card-overlay');
          if (o) o.setAttribute('aria-hidden', 'true');
        });
      }
    });
  }
})();
</script>

<?php endif; ?>

<?php get_footer(); ?>
