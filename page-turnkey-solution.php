<?php get_header(); ?>

<?php $tpl = get_template_directory_uri(); ?>

<div class="page-shell turnkey-page">

  <!-- ========== PAGE HERO ========== -->
  <section class="page-hero">
    <div class="page-hero-inner" data-reveal>
      <nav class="breadcrumb" aria-label="Breadcrumb">
        <a href="<?php echo esc_url(home_url('/')); ?>">Home</a>
        <span class="sep">/</span>
        <span class="current">Turnkey Solution</span>
      </nav>
      <span class="hero-eyebrow-tag">End-to-End Service</span>
      <h1>From specification to series — one partner.</h1>
      <p class="lede">You bring us the spec for your antenna or RF component. We start from scratch — design, simulate, print, measure and validate in-house. When you're happy, we go straight into series.</p>
    </div>
  </section>

  <!-- ========== KEY VALUE STRIP ========== -->
  <div class="gd-spec-strip" data-reveal>
    <div class="gd-spec">
      <span class="gd-spec-val">1 Partner</span>
      <span class="gd-spec-lbl">Full Responsibility</span>
    </div>
    <div class="gd-spec">
      <span class="gd-spec-val">5 Phases</span>
      <span class="gd-spec-lbl">Structured Delivery</span>
    </div>
    <div class="gd-spec">
      <span class="gd-spec-val">In-House</span>
      <span class="gd-spec-lbl">Design + Production</span>
    </div>
    <div class="gd-spec">
      <span class="gd-spec-val">Monolithic</span>
      <span class="gd-spec-lbl">3D-Printed Components</span>
    </div>
  </div>

  <!-- ========== PROCESS DETAIL ========== -->
  <section class="page-section">
    <div class="container">
      <header class="gd-section-head" data-reveal>
        <span class="eyebrow">The Process</span>
        <h2>Five phases. One partner.</h2>
        <p class="sub">Every phase happens under one roof — so what works in simulation, works in series.</p>
      </header>

      <div class="process-grid">
        <?php
          $steps = [
            ['01','Specification','Archive/signal-2026-04-13-105004_005.jpeg','You bring us the spec for your antenna or RF component. We start from scratch — together we define geometry, system architecture and performance targets.'],
            ['02','Design in CAD','Archive/signal-2026-04-13-105004_007.jpeg','Our engineers model the full geometry in CAD — including waveguides routed in any direction, all as one monolithic piece.'],
            ['03','Simulation & Optimization','Archive/signal-2026-04-13-105004_008.jpeg','We simulate and optimize the design with state-of-the-art EM tools until it meets your spec — before a single part is printed.'],
            ['04','Prototyping & Measurement','Archive/signal-2026-04-13-105004_009.jpeg','Manufacturing happens in-house. We print, measure and iterate until the part performs. You only see the final, validated prototype.'],
            ['05','Validation & Series','prod.jpeg','Once you validate the prototype, we go directly into series production — same process, same quality, scaled up.'],
          ];
          foreach ($steps as $i => $s):
        ?>
        <div class="process-row" data-reveal data-reveal-delay="<?php echo $i * 80; ?>">
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

  <!-- ========== 3D-PRINTING vs INJECTION MOLDING ========== -->
  <section class="page-section">
    <div class="container">
      <header class="gd-section-head" data-reveal>
        <span class="eyebrow">Process Comparison</span>
        <h2>3D-printing vs. injection molding — hard numbers.</h2>
        <p class="sub">Why turnkey 3D-printing keeps your project moving while tooling-based alternatives still wait for the first mold. Figures below come from internal benchmarking against typical injection-molded waveguide programs.</p>
      </header>

      <div class="tech-compare-table-wrap" data-reveal>
        <table class="tech-compare-table tk-compare-table">
          <thead>
            <tr>
              <th>Parameter</th>
              <th>3D-printing<span class="tcc-sub">Golden Devices turnkey route</span></th>
              <th>Injection molding<span class="tcc-sub">Conventional tooling-based</span></th>
            </tr>
          </thead>
          <tbody>
            <tr class="tk-row-group"><td colspan="3">Time to market</td></tr>
            <tr>
              <td>Development cycle</td>
              <td><strong>2 – 6 weeks</strong></td>
              <td>8 – 20 weeks</td>
            </tr>
            <tr>
              <td>Prototype → series transition</td>
              <td><strong>0 weeks</strong> — same process</td>
              <td>&gt; 10 weeks (re-tooling + qualification)</td>
            </tr>
            <tr class="tk-row-group"><td colspan="3">Costs</td></tr>
            <tr>
              <td>Tooling cost</td>
              <td><strong>0 €</strong> — no mold required</td>
              <td>High non-recurring cost per geometry</td>
            </tr>
            <tr>
              <td>Cost of design changes</td>
              <td><strong>Cost-efficient</strong> — CAD update + reprint</td>
              <td>Tool rework or new tool needed</td>
            </tr>
            <tr class="tk-row-group"><td colspan="3">Engineering envelope</td></tr>
            <tr>
              <td>Geometric complexity</td>
              <td><strong>High</strong> — monolithic, internal channels, any-direction routing</td>
              <td>Limited by mold draft, parting lines and ejection</td>
            </tr>
          </tbody>
        </table>
        <p class="tech-compare-foot">
          <strong>How to read this:</strong> for waveguide and feed components the two cost drivers that move are tooling and re-qualification. Our process collapses both to zero — the prototype <em>is</em> the production part, printed on the same machine with the same parameters.
        </p>
      </div>
    </div>
  </section>

  <!-- ========== WHY TURNKEY ========== -->
  <section class="page-section alt">
    <div class="container">
      <header class="gd-section-head" data-reveal>
        <span class="eyebrow">Why Turnkey</span>
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

  <!-- ========== CTA ========== -->
  <section class="gd-cta" data-reveal>
    <div class="gd-cta-inner">
      <span class="hero-eyebrow-tag">Start Today</span>
      <h2>Have a project? Let's design it together.</h2>
      <p>Send us a brief — we will reply with a structured roadmap and a fixed quote, usually within one business day.</p>
      <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn btn-primary btn-large">Start Your Project</a>
    </div>
  </section>

  <!-- ========== PAGE NAV ========== -->
  <div class="page-nav">
    <a href="<?php echo esc_url(home_url('/products')); ?>" class="page-nav-btn">Continue to Products</a>
  </div>

</div>

<?php get_footer(); ?>
