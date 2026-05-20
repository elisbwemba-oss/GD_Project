<?php
/**
 * Template Name: INCUS Mission Case Study
 *
 * Auto-applied when a WordPress page is created with slug "incus-mission",
 * or can be selected manually from the Page Attributes panel.
 */
?>
<?php get_header(); ?>

<?php $tpl = get_template_directory_uri(); ?>

<div class="page-shell nasa-page">

  <!-- ========== PAGE HERO ========== -->
  <section class="page-hero">
    <div class="page-hero-inner" data-reveal>
      <nav class="breadcrumb" aria-label="Breadcrumb">
        <a href="<?php echo esc_url(home_url('/')); ?>">Home</a>
        <span class="sep">/</span>
        <span class="current">INCUS Mission</span>
      </nav>
      <span class="hero-eyebrow-tag">Space Case Study</span>
      <h1>A Ka-band feed assembly for the INCUS mission.</h1>
      <p class="lede">INCUS is an Earth science mission studying convective storms from low Earth orbit. As an independent prototyping partner, we designed and validated a feed assembly concept for its 1.6&nbsp;m deployable mesh reflector — under space-typical load conditions. Tight RF tolerances, compact routing, low mass, all in a geometry conventional split-part approaches struggle with.</p>
    </div>
  </section>

  <!-- ========== TECHNICAL PROOF BOX ========== -->
  <div class="container" data-reveal>
    <aside class="tech-proof-box">
      <div class="tech-proof-col">
        <span class="tech-proof-label">The Challenge</span>
        <p>Holding tolerances at <strong>35 GHz</strong> while routing seven feeds tighter than standard WR28 flange spacing — under space-typical thermal and mechanical load conditions.</p>
      </div>
      <div class="tech-proof-arrow" aria-hidden="true">→</div>
      <div class="tech-proof-col">
        <span class="tech-proof-label">Our Solution</span>
        <p>Monolithic manufacturing in a single step. <strong>No mechanical interfaces, no fasteners, no alignment pins</strong> — the assembly is one piece of cast aluminum, qualified by direct RF measurement.</p>
      </div>
    </aside>
  </div>

  <!-- ========== KEY METRICS ========== -->
  <div class="gd-spec-strip" data-reveal>
    <div class="gd-spec">
      <span class="gd-spec-val">3 SmallSats</span>
      <span class="gd-spec-lbl">Formation Flight</span>
    </div>
    <div class="gd-spec">
      <span class="gd-spec-val">1.6 m</span>
      <span class="gd-spec-lbl">Deployable Reflector</span>
    </div>
    <div class="gd-spec">
      <span class="gd-spec-val">7 horns</span>
      <span class="gd-spec-lbl">Feed Cluster</span>
    </div>
    <div class="gd-spec">
      <span class="gd-spec-val">&lt; 0.25 dB</span>
      <span class="gd-spec-lbl">Insertion Loss</span>
    </div>
  </div>

  <!-- ========== SYSTEM CONTEXT (image + intro) ========== -->
  <section class="page-section">
    <div class="container">
      <div class="nasa-split">
        <article class="nasa-text" data-reveal>
          <span class="eyebrow">System Context</span>
          <h2>Where the feed assembly sits in INCUS.</h2>
          <p>The feed assembly is one RF subsystem inside the full observatory: it bridges the deployable mesh reflector and the Ka-band radar electronics. Its compact geometry and low loss feed directly into the science the mission can return.</p>
        </article>

        <figure class="nasa-figure" data-reveal data-reveal-delay="80">
          <img src="<?php echo esc_url($tpl . '/images/NASA/assembly.png'); ?>" alt="INCUS observatory configuration with reflector, feed assembly, radiometer, bus and solar panels" loading="eager">
          <figcaption>INCUS observatory configuration with reflector, feed assembly, radiometer, bus and solar panels.</figcaption>
        </figure>
      </div>
    </div>
  </section>

  <!-- ========== WHAT WE DELIVERED ========== -->
  <section class="page-section alt">
    <div class="container">
      <div class="nasa-split reverse">
        <figure class="nasa-figure" data-reveal>
          <img src="<?php echo esc_url($tpl . '/images/NASA/CAD_real.png'); ?>" alt="CAD rendering and fabricated INCUS feed assembly prototype side by side" loading="lazy">
          <figcaption>CAD model on the left, fabricated prototype on the right. The realised hardware matches the design intent closely.</figcaption>
        </figure>

        <article class="nasa-text" data-reveal data-reveal-delay="80">
          <span class="eyebrow">Our Role</span>
          <h2>What we built.</h2>
          <p>We developed and prototyped a feed assembly concept for the 1.6&nbsp;m deployable mesh reflector used on INCUS. The geometry needed to combine tight RF tolerances, compact routing, low mass and manufacturability, all things a split or multi-part build struggles with.</p>
          <ul class="nasa-bullets">
            <li>Hybrid additive manufacturing and casting for complex internal and external geometry.</li>
            <li>Doubly curved transition from circular horn to rectangular WR28 waveguide.</li>
            <li>Single-piece approach removing intermediate interfaces, fasteners and alignment pins.</li>
            <li>Prototype path supporting validation before final cast-aluminum hardware.</li>
          </ul>
        </article>
      </div>
    </div>
  </section>

  <!-- ========== MISSION CONCEPT ========== -->
  <section class="page-section">
    <div class="container">
      <div class="nasa-split">
        <figure class="nasa-figure" data-reveal>
          <img src="<?php echo esc_url($tpl . '/images/NASA/satelites.png'); ?>" alt="INCUS constellation with three satellites and radar swaths over Earth" loading="lazy">
          <figcaption>INCUS uses three SmallSats flying in formation to observe storm dynamics with time-separated radar measurements.</figcaption>
        </figure>

        <article class="nasa-text" data-reveal data-reveal-delay="80">
          <span class="eyebrow">Project Background</span>
          <h2>What the mission required.</h2>
          <p>INCUS is an Earth science mission designed to study convective updrafts in tropical storms and thunderstorms. Each observatory carries a deployable 1.6&nbsp;m mesh reflector, a Ka-band radar and a seven-horn feed system generating partially overlapping beams. Golden Devices contributed to the mission as an independent prototyping partner — we are not a NASA contractor.</p>
          <p>The feed cluster had to stay more compact than standard WR28 flange spacing would normally allow. That meant a custom waveguide network with carefully routed E-plane and H-plane bends, while still holding strong return loss, low coupling and reliable radiation behaviour.</p>
        </article>
      </div>
    </div>
  </section>

  <!-- ========== ENGINEERING CHALLENGE ========== -->
  <section class="page-section alt">
    <div class="container">
      <div class="nasa-split reverse">
        <figure class="nasa-figure" data-reveal>
          <img src="<?php echo esc_url($tpl . '/images/NASA/antenna_on_satelite.png'); ?>" alt="Final feed assembly integrated into the satellite antenna system" loading="lazy">
          <figcaption>The final design — a compact cluster of seven horns with custom waveguide routing, realized as a single-piece cast-aluminum structure.</figcaption>
        </figure>

        <article class="nasa-text" data-reveal data-reveal-delay="80">
          <span class="eyebrow">Engineering Challenge</span>
          <h2>High RF performance, extremely compact geometry.</h2>
          <ul class="nasa-bullets">
            <li>Horn spacing tighter than standard WR28 flange dimensions.</li>
            <li>Custom bends and transitions required, with excellent return loss preserved.</li>
            <li>Interfaces, mass and alignment risk all had to come down for space deployment.</li>
            <li>The geometry was too complex for a conventional single-piece machined solution.</li>
          </ul>
          <p>Our one-piece cast-aluminium concept cut mass and integration effort while keeping the transition and routing shapes the RF design needed.</p>
        </article>
      </div>
    </div>
  </section>

  <!-- ========== PROCESS TIMELINE ========== -->
  <section class="page-section">
    <div class="container">
      <header class="gd-section-head" data-reveal>
        <span class="eyebrow">How We Got There</span>
        <h2>Four phases, from RF concept to measured hardware.</h2>
        <p class="sub">Each phase had a deliverable and a way to fail. Here is what each one did.</p>
      </header>

      <div class="nasa-timeline">
        <article class="nasa-step" data-reveal>
          <span class="nasa-step-num">01</span>
          <h3>RF concept</h3>
          <p>Cluster architecture and custom waveguide routing defined around the reflector optics and beam overlap targets.</p>
        </article>
        <article class="nasa-step" data-reveal data-reveal-delay="80">
          <span class="nasa-step-num">02</span>
          <h3>Prototype path</h3>
          <p>Translated the compact horn and waveguide geometry into a manufacturable monolithic concept.</p>
        </article>
        <article class="nasa-step" data-reveal data-reveal-delay="160">
          <span class="nasa-step-num">03</span>
          <h3>Measurement</h3>
          <p>S-parameters, insertion loss and radiation patterns validated against simulation and system requirements.</p>
        </article>
        <article class="nasa-step" data-reveal data-reveal-delay="240">
          <span class="nasa-step-num">04</span>
          <h3>Refinement</h3>
          <p>Structural updates improved robustness, casting consistency and integration readiness for the final hardware.</p>
        </article>
      </div>
    </div>
  </section>

  <!-- ========== MEASUREMENTS ========== -->
  <section class="page-section alt">
    <div class="container">
      <header class="gd-section-head" data-reveal>
        <span class="eyebrow">Measurements</span>
        <h2>What the measured part actually delivered.</h2>
        <p class="sub">The architecture and manufacturing route held up across every parameter we cared about. Numbers below, source data on the right.</p>
      </header>

      <div class="nasa-results" data-reveal>
        <table class="nasa-results-table">
          <thead>
            <tr>
              <th>Parameter</th>
              <th>Result</th>
              <th>What it shows</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Reflection coefficient</td>
              <td>Better than 27 dB</td>
              <td>Very good impedance matching across the band of operation.</td>
            </tr>
            <tr>
              <td>Coupling coefficient</td>
              <td>Better than 38 dB</td>
              <td>Low interaction between adjacent ports in the cluster.</td>
            </tr>
            <tr>
              <td>Insertion loss</td>
              <td>Better than 0.25 dB</td>
              <td>Low total loss for horns and waveguides in the assembly.</td>
            </tr>
            <tr>
              <td>Measured directivity</td>
              <td>14.1 to 14.3 dBi</td>
              <td>Consistent horn performance after design refinement.</td>
            </tr>
            <tr>
              <td>Modified assembly mass</td>
              <td>126 g</td>
              <td>Lightweight hardware after structural optimization.</td>
            </tr>
          </tbody>
        </table>
      </div>

      <div class="nasa-measurement-grid">
        <figure class="nasa-figure" data-reveal>
          <img src="<?php echo esc_url($tpl . '/images/NASA/return_loss.png'); ?>" alt="Return loss plot across seven channels around 35.6 to 35.9 GHz" loading="lazy">
          <figcaption><strong>Return loss</strong> — the seven channels stay at strong negative values across the operating band, supporting the required matching behavior.</figcaption>
        </figure>

        <figure class="nasa-figure" data-reveal data-reveal-delay="80">
          <img src="<?php echo esc_url($tpl . '/images/NASA/beam_pattern.png'); ?>" alt="Beam pattern plot comparing measured and simulated directivity" loading="lazy">
          <figcaption><strong>Beam pattern</strong> — measured and simulated curves show very good agreement in the angular region relevant for the reflector illumination.</figcaption>
        </figure>
      </div>
    </div>
  </section>

  <!-- ========== CTA ========== -->
  <section class="gd-cta" data-reveal>
    <div class="gd-cta-inner">
      <span class="hero-eyebrow-tag">Space Engineering</span>
      <h2>Have a feed or waveguide problem like this one?</h2>
      <p>If your project pushes on RF performance and mass at the same time, send us the spec. An engineer will get back to you within one business day.</p>
      <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn btn-primary btn-large">Send us the spec</a>
    </div>
  </section>

  <!-- ========== PAGE NAV ========== -->
  <div class="page-nav">
    <a href="<?php echo esc_url(home_url('/applications')); ?>" class="page-nav-btn">Explore More Applications</a>
  </div>

</div>

<style>
  /* Technical Proof Box (Challenge → Solution) */
  .nasa-page .tech-proof-box {
    display: grid;
    grid-template-columns: 1fr auto 1fr;
    gap: 28px;
    align-items: stretch;
    margin: 32px 0 8px;
    padding: 26px 30px;
    background: linear-gradient(135deg, rgba(250, 184, 0, 0.06), rgba(13, 9, 0, 0.02));
    border: 1px solid var(--gold-border, var(--border-medium));
    border-radius: 16px;
  }
  .nasa-page .tech-proof-col p {
    color: var(--text-secondary);
    line-height: 1.6;
    margin: 0;
    font-size: 0.98rem;
  }
  .nasa-page .tech-proof-col p strong {
    color: var(--text-primary);
    font-weight: 700;
  }
  .nasa-page .tech-proof-label {
    display: inline-block;
    font-size: 0.72rem;
    font-weight: 800;
    letter-spacing: 0.18em;
    text-transform: uppercase;
    color: var(--primary-gold);
    margin-bottom: 8px;
  }
  .nasa-page .tech-proof-arrow {
    align-self: center;
    font-size: 1.8rem;
    color: var(--primary-gold);
    font-weight: 700;
  }
  @media (max-width: 720px) {
    .nasa-page .tech-proof-box { grid-template-columns: 1fr; gap: 16px; padding: 20px; }
    .nasa-page .tech-proof-arrow { transform: rotate(90deg); }
  }

  /* ============================================================================
     PAGE · NASA PROJECT — scoped extras (timeline, split, results table)
     Brand colors only: --primary-gold #fab800, --primary-black #0d0900, white
     ============================================================================ */

  .nasa-page .nasa-split {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 48px;
    align-items: center;
  }
  .nasa-page .nasa-split.reverse { direction: rtl; }
  .nasa-page .nasa-split.reverse > * { direction: ltr; }

  .nasa-page .nasa-text .eyebrow {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    font-size: 0.78rem;
    font-weight: 700;
    letter-spacing: 0.18em;
    text-transform: uppercase;
    color: var(--primary-black);
    margin-bottom: 18px;
  }
  .nasa-page .nasa-text .eyebrow::before {
    content: "";
    width: 8px;
    height: 8px;
    border-radius: 50%;
    background: var(--primary-gold);
    box-shadow: 0 0 0 5px rgba(250, 184, 0, 0.18);
  }
  .nasa-page .nasa-text h2 {
    font-size: clamp(1.6rem, 2.4vw, 2.4rem);
    line-height: 1.1;
    letter-spacing: -0.02em;
    color: var(--text-primary);
    margin-bottom: 18px;
  }
  .nasa-page .nasa-text p {
    color: var(--text-secondary);
    line-height: 1.65;
    margin-bottom: 14px;
  }

  .nasa-page .nasa-bullets {
    list-style: none;
    padding: 0;
    margin: 18px 0;
    display: grid;
    gap: 12px;
  }
  .nasa-page .nasa-bullets li {
    position: relative;
    padding-left: 24px;
    color: var(--text-secondary);
    line-height: 1.6;
  }
  .nasa-page .nasa-bullets li::before {
    content: "";
    position: absolute;
    left: 0;
    top: 9px;
    width: 8px;
    height: 8px;
    border-radius: 50%;
    background: var(--primary-gold);
  }

  .nasa-page .nasa-figure {
    margin: 0;
    border-radius: 18px;
    overflow: hidden;
    background: var(--bg-card);
    border: 1px solid var(--border-soft);
    box-shadow: 0 18px 50px rgba(13, 9, 0, 0.06);
  }
  .nasa-page .nasa-figure img {
    width: 100%;
    height: auto;
    display: block;
  }
  .nasa-page .nasa-figure figcaption {
    padding: 14px 20px 18px;
    font-size: 0.92rem;
    color: var(--text-tertiary);
    line-height: 1.55;
    border-top: 1px solid var(--border-soft);
    background: var(--bg-soft);
  }
  .nasa-page .nasa-figure figcaption strong {
    color: var(--text-primary);
    font-weight: 700;
  }

  /* Timeline */
  .nasa-page .nasa-timeline {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 22px;
    margin-top: 8px;
  }
  .nasa-page .nasa-step {
    position: relative;
    padding: 28px 24px 26px;
    background: var(--bg-card);
    border: 1px solid var(--border-soft);
    border-radius: 18px;
    overflow: hidden;
    transition: border-color 0.25s ease, transform 0.25s ease, box-shadow 0.25s ease;
  }
  .nasa-page .nasa-step::after {
    content: "";
    position: absolute;
    left: 0;
    bottom: 0;
    width: 100%;
    height: 2px;
    background: linear-gradient(90deg, var(--primary-gold), transparent);
  }
  .nasa-page .nasa-step:hover {
    border-color: var(--gold-border);
    transform: translateY(-3px);
    box-shadow: 0 18px 40px rgba(13, 9, 0, 0.08);
  }
  .nasa-page .nasa-step-num {
    display: inline-block;
    font-weight: 800;
    font-size: 0.82rem;
    letter-spacing: 0.18em;
    color: var(--primary-gold);
    margin-bottom: 14px;
  }
  .nasa-page .nasa-step h3 {
    font-size: 1.1rem;
    color: var(--text-primary);
    margin-bottom: 8px;
    letter-spacing: -0.01em;
  }
  .nasa-page .nasa-step p {
    color: var(--text-secondary);
    font-size: 0.96rem;
    line-height: 1.55;
    margin: 0;
  }

  /* Results table */
  .nasa-page .nasa-results {
    background: var(--bg-card);
    border: 1px solid var(--border-soft);
    border-radius: 18px;
    padding: 8px 28px;
    margin-bottom: 28px;
    overflow-x: auto;
  }
  .nasa-page .nasa-results-table {
    width: 100%;
    border-collapse: collapse;
  }
  .nasa-page .nasa-results-table th,
  .nasa-page .nasa-results-table td {
    text-align: left;
    padding: 16px 8px;
    border-bottom: 1px solid var(--border-soft);
    vertical-align: top;
  }
  .nasa-page .nasa-results-table tr:last-child td { border-bottom: 0; }
  .nasa-page .nasa-results-table th {
    color: var(--text-tertiary);
    font-size: 0.74rem;
    text-transform: uppercase;
    letter-spacing: 0.16em;
    font-weight: 700;
  }
  .nasa-page .nasa-results-table td {
    color: var(--text-secondary);
    font-size: 0.98rem;
  }
  .nasa-page .nasa-results-table td:nth-child(2) {
    color: var(--text-primary);
    font-weight: 700;
    white-space: nowrap;
  }

  .nasa-page .nasa-measurement-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 28px;
  }

  /* Responsive */
  @media (max-width: 960px) {
    .nasa-page .nasa-split,
    .nasa-page .nasa-measurement-grid {
      grid-template-columns: 1fr;
      gap: 32px;
    }
    .nasa-page .nasa-split.reverse { direction: ltr; }
    .nasa-page .nasa-timeline { grid-template-columns: repeat(2, 1fr); }
  }
  @media (max-width: 560px) {
    .nasa-page .nasa-timeline { grid-template-columns: 1fr; }
    .nasa-page .nasa-results { padding: 4px 16px; }
    .nasa-page .nasa-results-table th,
    .nasa-page .nasa-results-table td { padding: 14px 4px; font-size: 0.92rem; }
  }
</style>

<?php get_footer(); ?>
