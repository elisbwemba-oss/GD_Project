<?php get_header(); ?>

<?php $tpl = get_template_directory_uri(); ?>

<div class="page-shell tech-page">

  <!-- ========== PAGE HERO ========== -->
  <section class="page-hero">
    <div class="page-hero-inner" data-reveal>
      <nav class="breadcrumb" aria-label="Breadcrumb">
        <a href="<?php echo esc_url(home_url('/')); ?>">Home</a>
        <span class="sep">/</span>
        <span class="current">Technologies</span>
      </nav>
      <span class="hero-eyebrow-tag">Our Technology</span>
      <h1>Monolithic 3D-printing for high-frequency components.</h1>
      <p class="lede">Where conventional HF-PCB technology hits its ceiling, our additive process keeps going — producing highly complex structures, including waveguides routed in any direction, all as one single piece.</p>
    </div>
  </section>

  <!-- ========== KEY SPECS ========== -->
  <div class="gd-spec-strip" data-reveal>
    <div class="gd-spec">
      <span class="gd-spec-val">300 GHz</span>
      <span class="gd-spec-lbl">tested max. frequency</span>
    </div>
    <div class="gd-spec">
      <span class="gd-spec-val">6 dB/m</span>
      <span class="gd-spec-lbl">attenuation @ 75 GHz (SLA)</span>
    </div>
    <div class="gd-spec">
      <span class="gd-spec-val">&lt; −25 dB</span>
      <span class="gd-spec-lbl">return loss S<sub>11</sub> (Ka-band)</span>
    </div>
    <div class="gd-spec">
      <span class="gd-spec-val">20–40×</span>
      <span class="gd-spec-lbl">lighter than split-block</span>
    </div>
  </div>

  <!-- ========== TECH COMPARE ========== -->
  <section class="page-section">
    <div class="container">
      <header class="gd-section-head" data-reveal>
        <span class="eyebrow">Two Approaches</span>
        <h2>Two complementary processes.</h2>
        <p class="sub">Polymer 3D-printing with metallization for maximum design freedom, and 3D-casting for cost-efficient high-volume series — both monolithic, both up to 300 GHz.</p>
      </header>

      <div class="tech-compare-grid">

        <!-- 3D PRINTING -->
        <article class="tech-col-card printing" data-reveal>
          <div class="tech-col-card-header">
            <div class="tech-col-card-icon">
              <svg viewBox="0 0 56 56" fill="none">
                <rect x="8" y="36" width="40" height="12" rx="3" stroke="currentColor" stroke-width="2"/>
                <rect x="16" y="28" width="24" height="8" rx="2" stroke="currentColor" stroke-width="2"/>
                <path d="M22 28 L22 12 M34 28 L34 12" stroke="currentColor" stroke-width="2"/>
                <path d="M22 12 L28 6 L34 12" stroke="currentColor" stroke-width="2" stroke-linejoin="round"/>
                <line x1="28" y1="6" x2="28" y2="18" stroke="currentColor" stroke-width="1.5" stroke-dasharray="2 2"/>
              </svg>
            </div>
            <div>
              <span class="tech-col-card-tag">Additive</span>
              <h3>3D Printing</h3>
            </div>
          </div>
          <p class="tech-col-card-desc">Metallized 3D-printed polymer (SLA) with high-conductivity surface coating. Enables internal geometries impossible to machine — and components 20 to 40 times lighter than equivalent split-block hardware.</p>

          <ul class="tech-col-specs">
            <li>
              <div class="tcs-icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 2 L4 14h7l-1 8 9-12h-7z"/></svg>
              </div>
              <div>
                <strong>Up to 300 GHz</strong>
                <p>Wall structures in the µm range — qualified for sub-THz applications</p>
              </div>
            </li>
            <li>
              <div class="tcs-icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M8 12 L12 8 L16 12 L12 16 Z"/></svg>
              </div>
              <div>
                <strong>20 – 40× lighter</strong>
                <p>Metallized polymer vs equivalent split-block aluminum waveguide</p>
              </div>
            </li>
            <li>
              <div class="tcs-icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 12 H21 M12 3 V21"/><circle cx="12" cy="12" r="9"/></svg>
              </div>
              <div>
                <strong>Monolithic geometry</strong>
                <p>Internal channels, transitions and cavities printed as one single piece</p>
              </div>
            </li>
            <li>
              <div class="tcs-icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M2 22 V12 L12 2 L22 12 V22 Z"/><path d="M9 22 V14 H15 V22"/></svg>
              </div>
              <div>
                <strong>6 dB/m @ 75 GHz</strong>
                <p>Measured attenuation (E-band, SLA) vs ~7 dB/m for reference waveguide</p>
              </div>
            </li>
          </ul>

          <div class="tech-col-card-apps">
            <span class="tag-pill">Sub-THz Components</span>
            <span class="tag-pill">Satellite</span>
            <span class="tag-pill">Radar Feeds</span>
            <span class="tag-pill">UAV</span>
          </div>
        </article>

        <!-- VS DIVIDER -->
        <div class="tech-col-vs-block" aria-hidden="true">
          <div class="tech-col-vs">vs</div>
        </div>

        <!-- 3D CASTING -->
        <article class="tech-col-card casting" data-reveal data-reveal-delay="120">
          <div class="tech-col-card-header">
            <div class="tech-col-card-icon">
              <svg viewBox="0 0 56 56" fill="none">
                <path d="M10 20 Q10 8 28 8 Q46 8 46 20 L42 48 H14 Z" stroke="currentColor" stroke-width="2" stroke-linejoin="round"/>
                <path d="M18 24 Q18 16 28 16 Q38 16 38 24" stroke="currentColor" stroke-width="1.5"/>
                <line x1="22" y1="32" x2="34" y2="32" stroke="currentColor" stroke-width="1.5"/>
                <line x1="20" y1="40" x2="36" y2="40" stroke="currentColor" stroke-width="1.5"/>
              </svg>
            </div>
            <div>
              <span class="tech-col-card-tag casting-tag">Forming</span>
              <h3>3D Casting</h3>
            </div>
          </div>
          <p class="tech-col-card-desc">3D-printed sacrificial molds combined with precision aluminum casting. Solid-metal monolithic parts with outstanding RF surface quality — qualified up to Ka-band and proven on the INCUS feed assembly.</p>

          <ul class="tech-col-specs">
            <li>
              <div class="tcs-icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 18 Q3 14 6 14 Q9 14 9 18"/><path d="M9 18 Q9 10 14 10 Q19 10 19 18"/><path d="M19 18 Q19 6 22 6"/></svg>
              </div>
              <div>
                <strong>Up to 100 GHz</strong>
                <p>Optimized surfaces for W-band and E-band; validated on Ka-band assemblies</p>
              </div>
            </li>
            <li>
              <div class="tcs-icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="12,2 15,9 22,9 17,14 19,21 12,17 5,21 7,14 2,9 9,9"/></svg>
              </div>
              <div>
                <strong>Ra &lt; 0.4 µm</strong>
                <p>As-cast surface roughness — no post-processing required</p>
              </div>
            </li>
            <li>
              <div class="tcs-icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="11" width="20" height="11" rx="1"/><path d="M2 11 L7 4 H17 L22 11"/><line x1="8" y1="16" x2="16" y2="16"/></svg>
              </div>
              <div>
                <strong>−0.17 dB / port</strong>
                <p>Insertion loss measured on the INCUS feed A1 @ 35.755 GHz (Ka-band)</p>
              </div>
            </li>
            <li>
              <div class="tcs-icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><circle cx="12" cy="12" r="4"/></svg>
              </div>
              <div>
                <strong>Prototype = series</strong>
                <p>Same mold, same alloy from unit 1 to unit 10,000 — no re-qualification</p>
              </div>
            </li>
          </ul>

          <div class="tech-col-card-apps">
            <span class="tag-pill">Automotive</span>
            <span class="tag-pill">5G Infrastructure</span>
            <span class="tag-pill">Industrial Sensors</span>
            <span class="tag-pill">Aerospace</span>
          </div>
        </article>

      </div>
    </div>
  </section>

  <!-- ========== COMPARISON TABLE (engineering trade-offs) ========== -->
  <section class="page-section">
    <div class="container">
      <header class="gd-section-head" data-reveal>
        <span class="eyebrow">Trade-offs at a glance</span>
        <h2>Choosing the right process for the right spec.</h2>
        <p class="sub">No single manufacturing route is optimal across all frequencies, surface finishes and volumes. The table below summarises where each process performs best — and where it stops being economical.</p>
      </header>

      <div class="tech-compare-table-wrap" data-reveal>
        <table class="tech-compare-table">
          <thead>
            <tr>
              <th>Parameter</th>
              <th>3D Printing<span class="tcc-sub">DMLS / SLM, polymer + metallization</span></th>
              <th>3D Casting<span class="tcc-sub">Printed mold + precision casting</span></th>
              <th>Conventional CNC<span class="tcc-sub">Split-block milling</span></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Max. frequency</td>
              <td><strong>Up to 300 GHz</strong> (sub-THz)</td>
              <td>Up to 100 GHz (W- / E-band)</td>
              <td>Typically &lt; 80 GHz before tolerance stack dominates</td>
            </tr>
            <tr>
              <td>Surface finish (Ra)</td>
              <td>5 – 15 µm as-printed; &lt; 1 µm after post-processing</td>
              <td><strong>Ra &lt; 0.4 µm straight from the mold</strong></td>
              <td>Ra 0.8 – 1.6 µm typical</td>
            </tr>
            <tr>
              <td>Manufacturing tolerance</td>
              <td>± 30 – 50 µm on critical features</td>
              <td>± 20 – 40 µm (cast-aluminum)</td>
              <td>± 10 – 20 µm — but split into multiple parts</td>
            </tr>
            <tr>
              <td>Geometric freedom</td>
              <td><strong>Monolithic, any-direction routing, internal lattices</strong></td>
              <td>Monolithic within the moldable envelope</td>
              <td>Limited by tool access — assemblies of 4 – 12 parts common</td>
            </tr>
            <tr>
              <td>Scalability</td>
              <td>Best for 1 – 50 units (prototype / low volume)</td>
              <td><strong>Cost-efficient from ~10 units, scales to 10,000+</strong></td>
              <td>Optimal at 1 – 5 units; non-recurring tooling is low</td>
            </tr>
            <tr>
              <td>Relative cost per unit</td>
              <td>High at unit 1, flat across the run</td>
              <td><strong>Falls sharply with volume</strong> — best $/unit above 100</td>
              <td>High due to assembly labour and alignment of split blocks</td>
            </tr>
            <tr>
              <td>Lead time (first article)</td>
              <td>2 – 4 weeks</td>
              <td>4 – 8 weeks (mold + casting cycle)</td>
              <td>3 – 6 weeks per sub-assembly</td>
            </tr>
            <tr>
              <td>Typical applications</td>
              <td>Sub-THz components, 6G research, satellite, UAV payloads</td>
              <td>Automotive radar, 5G infrastructure, industrial sensors, aerospace series</td>
              <td>Legacy waveguide hardware, sub-mmWave systems</td>
            </tr>
          </tbody>
        </table>
        <p class="tech-compare-foot">
          <strong>How to read this:</strong> the bold entries mark the regime where each process is the engineering optimum. Above 100 GHz, surface roughness drives skin-effect losses faster than dimensional tolerance — which is why our additive route extends to 300 GHz where conventional machining cannot follow.
        </p>
      </div>
    </div>
  </section>

  <!-- ========== PERFORMANCE BENEFITS ========== -->
  <section class="page-section alt">
    <div class="container">
      <header class="gd-section-head" data-reveal>
        <span class="eyebrow">Measured Performance</span>
        <h2>Six benefits both processes deliver.</h2>
        <p class="sub">Verified on shipped hardware — not datasheet projections. Numbers below come from in-house measurements and qualified flight assemblies.</p>
      </header>

      <div class="gd-card-grid">
        <article class="gd-card" data-reveal>
          <div class="gd-card-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2 L4 7 L12 12 L20 7 Z"/><path d="M4 17 L12 22 L20 17"/><path d="M4 12 L12 17 L20 12"/></svg>
          </div>
          <h3>Up to 300 GHz</h3>
          <p>Qualified operating range, sub-THz capable. Covers 5G, 6G, automotive radar and Ka-band space frequencies on the same process chain.</p>
        </article>

        <article class="gd-card" data-reveal data-reveal-delay="80">
          <div class="gd-card-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12 H19 M12 5 V19"/></svg>
          </div>
          <h3>20 – 40× lighter</h3>
          <p>Mass reduction vs equivalent split-block aluminum waveguide — measured on metallized polymer parts of identical RF performance.</p>
        </article>

        <article class="gd-card" data-reveal data-reveal-delay="160">
          <div class="gd-card-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M9 12 L11 14 L15 10"/></svg>
          </div>
          <h3>6 dB/m @ 75 GHz</h3>
          <p>Measured attenuation on E-band SLA waveguide — close to the ~7 dB/m reference figure and well below typical PCB transmission lines.</p>
        </article>

        <article class="gd-card" data-reveal data-reveal-delay="240">
          <div class="gd-card-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 6 L20 6 M4 12 L20 12 M4 18 L20 18"/><circle cx="8" cy="6" r="2"/><circle cx="14" cy="12" r="2"/><circle cx="10" cy="18" r="2"/></svg>
          </div>
          <h3>Monolithic geometry</h3>
          <p>Internal waveguides routed in any direction, all printed as one single piece. The buildable envelope is set by your CAD file, not our tooling.</p>
        </article>

        <article class="gd-card" data-reveal data-reveal-delay="320">
          <div class="gd-card-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 12 L9 17 L20 6"/><circle cx="12" cy="12" r="10"/></svg>
          </div>
          <h3>Prototype = series</h3>
          <p>Same process, same alloy, same surface treatment from unit 1 to 10,000+. No re-tooling, no re-qualification when entering series.</p>
        </article>

        <article class="gd-card" data-reveal data-reveal-delay="400">
          <div class="gd-card-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2 L4 6 V12 Q4 18 12 22 Q20 18 20 12 V6 Z"/><path d="M9 12 L11 14 L15 10"/></svg>
          </div>
          <h3>Environmental resistance</h3>
          <p>Qualified against space-typical thermal, vibration and humidity profiles — proven on flight hardware contributed to the INCUS Earth-science mission.</p>
        </article>
      </div>
    </div>
  </section>

  <!-- ========== CTA ========== -->
  <section class="gd-cta" data-reveal>
    <div class="gd-cta-inner">
      <span class="hero-eyebrow-tag">Find the Right Process</span>
      <h2>Not sure which process fits your project?</h2>
      <p>Our engineers will analyze your requirements and recommend the optimal manufacturing approach — usually within one business day.</p>
      <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn btn-primary btn-large">Talk to an Engineer</a>
    </div>
  </section>

  <!-- ========== PAGE NAV ========== -->
  <div class="page-nav">
    <a href="<?php echo esc_url(home_url('/about-us')); ?>" class="page-nav-btn">Continue to About Us</a>
  </div>

</div>

<?php get_footer(); ?>
