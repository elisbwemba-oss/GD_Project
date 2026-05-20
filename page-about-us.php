<?php get_header(); ?>

<?php $tpl = get_template_directory_uri(); ?>

<div class="page-shell about-page">

  <!-- ========== PAGE HERO ========== -->
  <section class="page-hero">
    <div class="page-hero-inner" data-reveal>
      <nav class="breadcrumb" aria-label="Breadcrumb">
        <a href="<?php echo esc_url(home_url('/')); ?>">Home</a>
        <span class="sep">/</span>
        <span class="current">About Us</span>
      </nav>
      <span class="hero-eyebrow-tag">Who We Are</span>
      <h1>A FAU spin-off, four years into shipping mmWave parts.</h1>
      <p class="lede">A 25-engineer team in Erlangen, spun off from the LHFT (Lehrstuhl für Hochfrequenztechnik) at FAU. We turn high-frequency research into hardware that ships to industry — automotive, space, drones, communication and industrial sensing.</p>
    </div>
  </section>

  <!-- ========== KEY FACTS STRIP ========== -->
  <div class="gd-spec-strip" data-reveal>
    <div class="gd-spec">
      <span class="gd-spec-val">April 2022</span>
      <span class="gd-spec-lbl">founded, LHFT FAU spin-off</span>
    </div>
    <div class="gd-spec">
      <span class="gd-spec-val">25</span>
      <span class="gd-spec-lbl">engineers in Erlangen</span>
    </div>
    <div class="gd-spec">
      <span class="gd-spec-val">100%</span>
      <span class="gd-spec-lbl">in-house design + production</span>
    </div>
    <div class="gd-spec">
      <span class="gd-spec-val">IHK 2025</span>
      <span class="gd-spec-lbl">Gründerpreis Mittelfranken</span>
    </div>
  </div>

  <!-- ========== STORY ========== -->
  <section class="page-section">
    <div class="container">
      <div class="gd-split">
        <div data-reveal>
          <span class="hero-eyebrow-tag">Our Story</span>
          <h2>From a research idea to RF parts that ship.</h2>
          <p>Golden Devices was founded in <strong>April 2022</strong> as a spin-off from the <strong>Lehrstuhl für Hochfrequenztechnik (LHFT)</strong> at the Friedrich-Alexander University of Erlangen-Nürnberg. The team had run numerous high-frequency industry projects and could see PCB technology hitting its ceiling above ~80 GHz. So we asked a simple question: what if we tried 3D-printing instead?</p>
          <p>Four years later, a <strong>25-engineer team</strong> ships 3D-printed mmWave components to industry from one workshop in Erlangen. We work monolithically: complex internal structures, including waveguides that route in any direction, all come out of the printer as one piece. The limit of what can be built is your CAD file, not our process.</p>
          <p>Our parts go into <strong>automotive radar, space payloads, drones, 6G communication and industrial sensing</strong>. As an independent prototyping partner, our work has contributed to mission studies including the INCUS Earth science programme — and we picked up the IHK Mittelfranken Gründerpreis 2025 along the way.</p>
        </div>
        <div class="gd-split-visual" data-reveal data-reveal-delay="150">
          <img src="<?php echo esc_url($tpl . '/Archive/signal-2026-04-13-105004_007.jpeg'); ?>" alt="Golden Devices RF lab" loading="lazy">
        </div>
      </div>
    </div>
  </section>

  <!-- ========== FOUNDER VOICES ========== -->
  <section class="page-section">
    <div class="container">
      <header class="gd-section-head" data-reveal>
        <span class="eyebrow">In Their Own Words</span>
        <h2>Why we built it this way.</h2>
        <p class="sub">Three of the people behind Golden Devices, on the technical decisions that shape the company.</p>
      </header>

      <div class="gd-quote-grid">
        <figure class="gd-quote-card" data-reveal>
          <svg class="gd-quote-mark" viewBox="0 0 32 32" aria-hidden="true"><path d="M9 9h6v6H11c0 3 1 5 4 5v3c-5 0-9-3-9-9V9zm12 0h6v6h-4c0 3 1 5 4 5v3c-5 0-9-3-9-9V9z" fill="currentColor"/></svg>
          <blockquote>The idea for Golden Devices was born at FAU Erlangen-Nürnberg. From ongoing research projects we recognised that established HF-PCB technology was reaching its performance ceiling — so we tried 3D-printing instead.</blockquote>
          <figcaption>
            <strong>Mark Sippel</strong>
            <span>CEO &amp; Founder</span>
          </figcaption>
        </figure>

        <figure class="gd-quote-card" data-reveal data-reveal-delay="120">
          <svg class="gd-quote-mark" viewBox="0 0 32 32" aria-hidden="true"><path d="M9 9h6v6H11c0 3 1 5 4 5v3c-5 0-9-3-9-9V9zm12 0h6v6h-4c0 3 1 5 4 5v3c-5 0-9-3-9-9V9z" fill="currentColor"/></svg>
          <blockquote>Because we work monolithically, we produce highly complex structures — waveguides routed in every direction, all as one single piece. The limit of what's buildable comes down to the CAD designer, not the manufacturing process.</blockquote>
          <figcaption>
            <strong>Konstantin Lomakin</strong>
            <span>CTO &amp; Co-Founder</span>
          </figcaption>
        </figure>

        <figure class="gd-quote-card" data-reveal data-reveal-delay="240">
          <svg class="gd-quote-mark" viewBox="0 0 32 32" aria-hidden="true"><path d="M9 9h6v6H11c0 3 1 5 4 5v3c-5 0-9-3-9-9V9zm12 0h6v6h-4c0 3 1 5 4 5v3c-5 0-9-3-9-9V9z" fill="currentColor"/></svg>
          <blockquote>My goal is to drive unit costs down — to move from prototyping into mass production, so a component becomes affordable enough to manufacture in millions, even billions.</blockquote>
          <figcaption>
            <strong>Miguel Siebenhaar</strong>
            <span>Automation &amp; Digitalization</span>
          </figcaption>
        </figure>
      </div>
    </div>
  </section>

  <!-- ========== WHAT WE STAND FOR ========== -->
  <section class="page-section alt">
    <div class="container">
      <header class="gd-section-head" data-reveal>
        <span class="eyebrow">How we work</span>
        <h2>Three things we don't compromise on.</h2>
      </header>

      <div class="gd-card-grid">
        <article class="gd-card" data-reveal>
          <div class="gd-card-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 2 L4 14h7l-1 8 9-12h-7z"/></svg>
          </div>
          <h3>Performance</h3>
          <p>Every part ships with a measurement report. If a number is off, we redesign before it leaves the lab.</p>
        </article>

        <article class="gd-card" data-reveal data-reveal-delay="100">
          <div class="gd-card-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/><line x1="11" y1="8" x2="11" y2="14"/><line x1="8" y1="11" x2="14" y2="11"/></svg>
          </div>
          <h3>Precision</h3>
          <p>Tolerances down to a few micrometres. The process is the same on a prototype as on a 500-unit series.</p>
        </article>

        <article class="gd-card" data-reveal data-reveal-delay="200">
          <div class="gd-card-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
          </div>
          <h3>Partnership</h3>
          <p>You talk to the engineer who designs your part, not a sales rep relaying the spec. Most of our customers come back.</p>
        </article>
      </div>
    </div>
  </section>

  <!-- ========== TEAM ========== -->
  <section class="page-section">
    <div class="container">
      <header class="gd-section-head" data-reveal>
        <span class="eyebrow">Leadership</span>
        <h2>Meet the Team</h2>
        <p class="sub">Engineers, designers, machinists. Most of us studied at FAU. All of us work out of Erlangen.</p>
      </header>

      <div class="gd-card-grid">
        <?php
          $team = [
            ['Mark Sippel','CEO & Founder','Runs strategy, partnerships and customer conversations. The one most likely to be on a plane this week.'],
            ['Konstantin Lomakin','CTO & Co-Founder','Built the original 3D-printing process at FAU. Still designs the hardest parts himself.'],
            ['Miguel Siebenhaar','Automation & Digitalization','Specialist in process automation and optimization — bringing unit costs down from prototyping into mass production.'],
            ['James Feltens','Automation & Digitalization','Drives our digital manufacturing roadmap. Mapping production digitally to scale from millions to billions of components.'],
            ['Jürgen Nießler','Assembly & Engineering','Senior expert in assembly and mechanical construction. Decades of know-how in every component we ship.'],
            ['Anna Kamwine','Office Manager','Keeps the operation running. Coordinates everything behind the scenes so the engineering team can focus on the work.'],
            ['Alexander Lupas','Automation & Digitalization','Engineer in our automation team. Translates the manufacturing process into repeatable, scalable digital workflows.'],
          ];
          foreach ($team as $i => $t):
        ?>
        <article class="gd-card team-card-about" data-reveal data-reveal-delay="<?php echo $i * 80; ?>">
          <div class="gd-card-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><circle cx="12" cy="8" r="4"/><path d="M4 20c0-4 3.6-7 8-7s8 3 8 7"/></svg>
          </div>
          <h3><?php echo esc_html($t[0]); ?></h3>
          <p class="team-role-tag"><?php echo esc_html($t[1]); ?></p>
          <p><?php echo esc_html($t[2]); ?></p>
        </article>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- ========== CTA ========== -->
  <section class="gd-cta" data-reveal>
    <div class="gd-cta-inner">
      <span class="hero-eyebrow-tag">Get In Touch</span>
      <h2>Want to work with us?</h2>
      <p>Tell us what you need. An engineer reads every message and replies within one business day.</p>
      <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn btn-primary btn-large">Get in touch</a>
    </div>
  </section>

  <!-- ========== PAGE NAV ========== -->
  <div class="page-nav">
    <a href="<?php echo esc_url(home_url('/contact')); ?>" class="page-nav-btn">Continue to Contact</a>
  </div>

</div>

<?php get_footer(); ?>
