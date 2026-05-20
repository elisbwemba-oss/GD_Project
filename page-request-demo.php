<?php
/**
 * Template Name: Request Demo
 *
 * Auto-applied when a WordPress page is created with slug "request-demo",
 * or can be selected manually from the Page Attributes panel.
 */
?>
<?php get_header(); ?>

<?php $tpl = get_template_directory_uri(); ?>

<link rel="stylesheet" href="<?php echo esc_url($tpl . '/assets/demo/demo.css'); ?>">

<div class="page-shell demo-page">

  <!-- ========== 1. HERO — 3D viewer + intro ========== -->
  <section class="page-hero demo-hero">
    <div class="page-hero-inner" data-reveal>
      <nav class="breadcrumb" aria-label="Breadcrumb">
        <a href="<?php echo esc_url(home_url('/')); ?>">Home</a>
        <span class="sep">/</span>
        <span class="current">Request Demo</span>
      </nav>
      <span class="hero-eyebrow-tag">Live Configurator</span>
      <h1>Design your mmWave component, live.</h1>
      <p class="lede">Rotate the 3D model, tune the frequency, build your project brief — and request a demo in under 60 seconds. Engineered for engineers.</p>
    </div>

    <div class="demo-hero-stage" data-reveal data-reveal-delay="120">
      <div class="demo-3d-wrap">
        <div id="demo-3d-canvas" class="demo-3d-canvas" aria-label="Interactive 3D antenna viewer"></div>

        <div class="demo-3d-overlay-tl">
          <span class="demo-3d-badge">
            <span class="demo-3d-badge-dot"></span>
            E-field active · 35.75 GHz
          </span>
        </div>

        <div class="demo-3d-controls" role="toolbar" aria-label="3D controls">
          <button type="button" class="demo-3d-btn" data-action="reset" title="Reset view">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 12a9 9 0 1 0 3-6.7"/><polyline points="3 4 3 9 8 9"/></svg>
            <span>Reset</span>
          </button>
          <button type="button" class="demo-3d-btn" data-action="explode" title="Explode view" aria-pressed="false">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="9 4 4 4 4 9"/><polyline points="15 4 20 4 20 9"/><polyline points="9 20 4 20 4 15"/><polyline points="15 20 20 20 20 15"/></svg>
            <span>Explode</span>
          </button>
          <button type="button" class="demo-3d-btn" data-action="field" title="Toggle E-field" aria-pressed="true">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M2 12c4-6 8 6 12 0s8-6 8-6"/><path d="M2 18c4-6 8 6 12 0s8-6 8-6"/></svg>
            <span>E-field</span>
          </button>
          <button type="button" class="demo-3d-btn" data-action="ar" title="View in AR">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 7l9-4 9 4-9 4-9-4z"/><path d="M3 17l9 4 9-4"/><path d="M3 12l9 4 9-4"/></svg>
            <span>AR</span>
          </button>
        </div>

        <div class="demo-3d-hint" aria-hidden="true">drag to rotate · scroll to zoom</div>
      </div>

      <ul class="demo-hero-points">
        <li><strong>Monolithic geometry</strong><span>Seven-horn cluster with internal waveguide routing — printed as one piece.</span></li>
        <li><strong>WR28 transitions</strong><span>Doubly curved horn-to-rectangular transitions — Ka-band ready.</span></li>
        <li><strong>Animated E-field</strong><span>Watch energy propagate through the assembly in real time.</span></li>
      </ul>
    </div>
  </section>

  <!-- ========== 2. SPECTRUM EXPLORER ========== -->
  <section class="page-section demo-spectrum-section">
    <div class="container">
      <header class="gd-section-head" data-reveal>
        <span class="eyebrow">Spectrum Explorer</span>
        <h2>Where does your project live on the RF spectrum?</h2>
        <p class="sub">Drag the slider through 1 GHz → 300 GHz to see how each band maps to applications, components and Golden Devices' manufacturing capabilities.</p>
      </header>

      <div class="demo-spectrum" data-reveal>
        <div class="demo-spectrum-track-wrap">
          <div class="demo-spectrum-track" aria-hidden="true">
            <span class="band-marker" data-freq="3" style="left:1%">3 GHz</span>
            <span class="band-marker" data-freq="30" style="left:24%">30 GHz</span>
            <span class="band-marker" data-freq="100" style="left:60%">100 GHz</span>
            <span class="band-marker" data-freq="300" style="left:99%">300 GHz</span>
          </div>
          <input type="range" id="demo-spectrum" class="demo-spectrum-range"
                 min="1" max="300" value="77" step="0.5" aria-label="Frequency in GHz">
          <div class="demo-spectrum-bubble" id="demo-spectrum-bubble">77.0 GHz</div>
        </div>

        <div class="demo-spectrum-readout">
          <div class="dsr-block">
            <span class="dsr-label">Band</span>
            <span class="dsr-value" id="dsr-band">EHF · K-band</span>
          </div>
          <div class="dsr-block">
            <span class="dsr-label">Typical application</span>
            <span class="dsr-value" id="dsr-app">Automotive radar (ADAS)</span>
          </div>
          <div class="dsr-block">
            <span class="dsr-label">Wavelength</span>
            <span class="dsr-value" id="dsr-wl">3.89 mm</span>
          </div>
          <div class="dsr-block">
            <span class="dsr-label">Process</span>
            <span class="dsr-value" id="dsr-process">3D Casting (aluminum)</span>
          </div>
        </div>

        <aside class="dsr-engineering-note" aria-live="polite">
          <span class="dsr-en-label">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="9"/><path d="M12 8v5l3 2"/></svg>
            Engineering note
          </span>
          <p class="dsr-en-text" id="dsr-note">Skin depth ≈ 0.38 µm. Hammerstad–Jensen predicts >30% loss penalty for Ra > 1 µm — casting beats milling here on surface finish.</p>
        </aside>
      </div>
    </div>
  </section>

  <!-- ========== 3. CONFIGURATOR (3 steps + spec card) ========== -->
  <section class="page-section alt demo-configurator-section">
    <div class="container">
      <header class="gd-section-head" data-reveal>
        <span class="eyebrow">Project Configurator</span>
        <h2>Three steps to your project brief.</h2>
        <p class="sub">Tell us your application, target frequency and how to reach you. We'll match the right engineer and reply within 24h.</p>
      </header>

      <div class="demo-configurator" data-reveal>

        <!-- Steps + form -->
        <form class="demo-config-form" id="demo-form" autocomplete="off" novalidate>
          <div class="demo-stepper" role="tablist" aria-label="Configurator steps">
            <button type="button" class="demo-step-pill is-active" data-step="1">
              <span class="dsp-num">1</span><span class="dsp-label">Application</span>
            </button>
            <span class="demo-step-line" aria-hidden="true"><i></i></span>
            <button type="button" class="demo-step-pill" data-step="2">
              <span class="dsp-num">2</span><span class="dsp-label">Frequency</span>
            </button>
            <span class="demo-step-line" aria-hidden="true"><i></i></span>
            <button type="button" class="demo-step-pill" data-step="3">
              <span class="dsp-num">3</span><span class="dsp-label">Contact</span>
            </button>
          </div>

          <!-- STEP 1 — Application -->
          <fieldset class="demo-step is-active" data-step="1">
            <legend>What is the application?</legend>
            <div class="demo-app-grid">
              <label class="demo-app-card">
                <input type="radio" name="application" value="Drones &amp; UAV" data-freq="60" data-process="3D Printing">
                <span class="dac-icon">
                  <svg viewBox="0 0 40 40" fill="none" stroke="currentColor" stroke-width="2"><circle cx="20" cy="20" r="4"/><line x1="20" y1="16" x2="20" y2="8"/><line x1="20" y1="24" x2="20" y2="32"/><line x1="16" y1="20" x2="8" y2="20"/><line x1="24" y1="20" x2="32" y2="20"/><ellipse cx="8" cy="20" rx="5" ry="2.5" stroke-width="1.5"/><ellipse cx="32" cy="20" rx="5" ry="2.5" stroke-width="1.5"/><ellipse cx="20" cy="8" rx="5" ry="2.5" stroke-width="1.5"/><ellipse cx="20" cy="32" rx="5" ry="2.5" stroke-width="1.5"/></svg>
                </span>
                <span class="dac-title">Drones &amp; UAV</span>
                <span class="dac-meta">Lightweight · 60 GHz</span>
              </label>

              <label class="demo-app-card">
                <input type="radio" name="application" value="Space &amp; Aerospace" data-freq="35.75" data-process="3D Casting">
                <span class="dac-icon">
                  <svg viewBox="0 0 40 40" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 4 L36 26 H24 L20 36 L16 26 H4 Z" stroke-linejoin="round"/><path d="M12 22 H28" stroke-width="1.5"/></svg>
                </span>
                <span class="dac-title">Space &amp; Aerospace</span>
                <span class="dac-meta">Ka-band · 35.75 GHz</span>
              </label>

              <label class="demo-app-card">
                <input type="radio" name="application" value="Automotive Radar" data-freq="77" data-process="3D Casting">
                <span class="dac-icon">
                  <svg viewBox="0 0 40 40" fill="none" stroke="currentColor" stroke-width="2"><rect x="4" y="14" width="32" height="16" rx="4"/><circle cx="11" cy="30" r="4"/><circle cx="29" cy="30" r="4"/><path d="M8 14 L12 8 H28 L32 14"/></svg>
                </span>
                <span class="dac-title">Automotive Radar</span>
                <span class="dac-meta">ADAS · 77 GHz</span>
              </label>

              <label class="demo-app-card">
                <input type="radio" name="application" value="6G Communications" data-freq="140" data-process="3D Printing">
                <span class="dac-icon">
                  <svg viewBox="0 0 40 40" fill="none" stroke="currentColor" stroke-width="2"><path d="M8 32 Q8 8 20 8 Q32 8 32 32" stroke-linecap="round"/><path d="M13 32 Q13 15 20 15 Q27 15 27 32" stroke-linecap="round"/><circle cx="20" cy="34" r="2" fill="currentColor"/></svg>
                </span>
                <span class="dac-title">6G Communications</span>
                <span class="dac-meta">Sub-THz · 140 GHz</span>
              </label>

              <label class="demo-app-card">
                <input type="radio" name="application" value="Security &amp; Defence" data-freq="94" data-process="3D Casting">
                <span class="dac-icon">
                  <svg viewBox="0 0 40 40" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 4 L34 10 V20 Q34 30 20 36 Q6 30 6 20 V10 Z" stroke-linejoin="round"/><path d="M14 20 L18 24 L26 16" stroke-linecap="round" stroke-linejoin="round"/></svg>
                </span>
                <span class="dac-title">Security &amp; Defence</span>
                <span class="dac-meta">W-band · 94 GHz</span>
              </label>

              <label class="demo-app-card">
                <input type="radio" name="application" value="Other / Research" data-freq="100" data-process="3D Printing">
                <span class="dac-icon">
                  <svg viewBox="0 0 40 40" fill="none" stroke="currentColor" stroke-width="2"><circle cx="20" cy="20" r="14"/><path d="M20 12v8l5 3"/></svg>
                </span>
                <span class="dac-title">Other / Research</span>
                <span class="dac-meta">Custom · TBD</span>
              </label>
            </div>
          </fieldset>

          <!-- STEP 2 — Frequency -->
          <fieldset class="demo-step" data-step="2">
            <legend>Target specifications</legend>

            <label class="demo-field">
              <span class="demo-field-label">Center frequency</span>
              <div class="demo-field-range">
                <input type="range" name="frequency" id="demo-freq" min="1" max="300" value="77" step="0.5">
                <output id="demo-freq-out">77.0 GHz</output>
              </div>
            </label>

            <div class="demo-field-row">
              <label class="demo-field">
                <span class="demo-field-label">Max. insertion loss</span>
                <select name="loss" id="demo-loss">
                  <option value="< 0.1 dB">&lt; 0.1 dB (excellent)</option>
                  <option value="< 0.25 dB" selected>&lt; 0.25 dB (space-grade)</option>
                  <option value="< 0.5 dB">&lt; 0.5 dB (standard)</option>
                  <option value="To be defined">To be defined</option>
                </select>
              </label>

              <label class="demo-field">
                <span class="demo-field-label">Target mass</span>
                <select name="mass" id="demo-mass">
                  <option value="Ultra-light (< 100 g)">Ultra-light (&lt; 100 g)</option>
                  <option value="Light (100 — 300 g)" selected>Light (100 — 300 g)</option>
                  <option value="Standard (> 300 g)">Standard (&gt; 300 g)</option>
                  <option value="No constraint">No constraint</option>
                </select>
              </label>
            </div>

            <div class="demo-field-row">
              <label class="demo-field">
                <span class="demo-field-label">Quantity</span>
                <select name="quantity" id="demo-quantity">
                  <option value="1 — 5 (prototype)" selected>1 — 5 (prototype)</option>
                  <option value="5 — 50 (low volume)">5 — 50 (low volume)</option>
                  <option value="50 — 500 (medium)">50 — 500 (medium)</option>
                  <option value="> 500 (series)">&gt; 500 (series)</option>
                </select>
              </label>

              <label class="demo-field">
                <span class="demo-field-label">Deadline</span>
                <select name="deadline" id="demo-deadline">
                  <option value="ASAP (< 4 weeks)">ASAP (&lt; 4 weeks)</option>
                  <option value="6 — 8 weeks" selected>6 — 8 weeks</option>
                  <option value="3 — 6 months">3 — 6 months</option>
                  <option value="Exploratory">Exploratory</option>
                </select>
              </label>
            </div>
          </fieldset>

          <!-- STEP 3 — Contact -->
          <fieldset class="demo-step" data-step="3">
            <legend>How can we reach you?</legend>

            <div class="demo-field-row">
              <label class="demo-field">
                <span class="demo-field-label">Full name *</span>
                <input type="text" name="name" id="demo-name" required>
              </label>
              <label class="demo-field">
                <span class="demo-field-label">Company *</span>
                <input type="text" name="company" id="demo-company" required>
              </label>
            </div>

            <div class="demo-field-row">
              <label class="demo-field">
                <span class="demo-field-label">Email *</span>
                <input type="email" name="email" id="demo-email" required>
              </label>
              <label class="demo-field">
                <span class="demo-field-label">Role</span>
                <input type="text" name="role" id="demo-role" placeholder="e.g. RF Engineer">
              </label>
            </div>

            <label class="demo-field">
              <span class="demo-field-label">Anything else we should know?</span>
              <textarea name="notes" id="demo-notes" rows="3" placeholder="Specific constraints, target performance, mission context…"></textarea>
            </label>

            <label class="demo-consent">
              <input type="checkbox" name="consent" id="demo-consent" required>
              <span>I agree that Golden Devices may contact me about my request. See our <a href="<?php echo esc_url(home_url('/privacy-policy')); ?>">privacy policy</a>.</span>
            </label>
          </fieldset>

          <div class="demo-nav">
            <button type="button" class="btn btn-secondary" id="demo-prev" disabled>
              <span aria-hidden="true">←</span> Previous
            </button>
            <button type="button" class="btn btn-primary" id="demo-next">
              Next <span aria-hidden="true">→</span>
            </button>
            <button type="submit" class="btn btn-primary demo-submit" id="demo-submit" hidden>
              <span>Transmit project brief</span>
              <span aria-hidden="true">⌁</span>
            </button>
          </div>
        </form>

        <!-- Spec Card -->
        <aside class="demo-spec-card" aria-live="polite">
          <div class="dsc-head">
            <span class="dsc-eyebrow">Your Project Brief</span>
            <span class="dsc-id" id="dsc-id">GD-DEMO-XXXX</span>
          </div>
          <ul class="dsc-list">
            <li>
              <span class="dsc-key">Application</span>
              <span class="dsc-val" id="dsc-app" data-empty="—">—</span>
            </li>
            <li>
              <span class="dsc-key">Frequency</span>
              <span class="dsc-val" id="dsc-freq" data-empty="—">77.0 GHz</span>
            </li>
            <li>
              <span class="dsc-key">Insertion loss</span>
              <span class="dsc-val" id="dsc-loss" data-empty="—">&lt; 0.25 dB</span>
            </li>
            <li>
              <span class="dsc-key">Mass</span>
              <span class="dsc-val" id="dsc-mass" data-empty="—">Light (100 — 300 g)</span>
            </li>
            <li>
              <span class="dsc-key">Quantity</span>
              <span class="dsc-val" id="dsc-qty" data-empty="—">1 — 5 (prototype)</span>
            </li>
            <li>
              <span class="dsc-key">Lead time</span>
              <span class="dsc-val" id="dsc-lead" data-empty="—">~6 weeks</span>
            </li>
            <li>
              <span class="dsc-key">Recommended process</span>
              <span class="dsc-val dsc-val-accent" id="dsc-process" data-empty="—">3D Casting</span>
            </li>
            <li>
              <span class="dsc-key">Contact</span>
              <span class="dsc-val" id="dsc-contact" data-empty="—">—</span>
            </li>
          </ul>

          <div class="dsc-progress">
            <div class="dsc-progress-bar" id="dsc-progress-bar"></div>
            <span class="dsc-progress-label" id="dsc-progress-label">0% complete</span>
          </div>
        </aside>
      </div>
    </div>
  </section>

  <!-- ========== 4. INTERACTIVE MEASUREMENTS ========== -->
  <section class="page-section demo-proof-section">
    <div class="container">
      <header class="gd-section-head" data-reveal>
        <span class="eyebrow">Performance Proof</span>
        <h2>Real measurements. From the INCUS feed assembly prototype.</h2>
        <p class="sub">Hover the curves to read exact values. Toggle channels to compare. The data below is from the Ka-band feed assembly we developed as an independent prototyping contribution to the INCUS Earth science mission.</p>
      </header>

      <div class="demo-proof-grid">
        <article class="demo-proof-card" data-reveal>
          <div class="demo-proof-head">
            <h3>Return loss · 7 channels</h3>
            <div class="demo-proof-toggles" id="rl-toggles" aria-label="Toggle channels"></div>
          </div>
          <div class="demo-proof-plot" id="plot-return-loss" aria-label="Interactive return loss plot"></div>
          <p class="demo-proof-note">Better than <strong>−27 dB</strong> across the operating band — strong impedance matching on every horn.</p>
        </article>

        <article class="demo-proof-card" data-reveal data-reveal-delay="80">
          <div class="demo-proof-head">
            <h3>Beam pattern · measured vs simulated</h3>
          </div>
          <div class="demo-proof-plot" id="plot-beam" aria-label="Interactive beam pattern plot"></div>
          <p class="demo-proof-note">Measured directivity <strong>14.1 – 14.3 dBi</strong> — matches simulation across the reflector illumination angles.</p>
        </article>
      </div>
    </div>
  </section>

  <!-- ========== 5. CONFIRMATION OVERLAY (hidden) ========== -->
  <div class="demo-confirmation" id="demo-confirmation" aria-hidden="true">
    <div class="demo-confirmation-inner">
      <canvas class="demo-confirmation-wave" id="demo-confirmation-wave" aria-hidden="true"></canvas>
      <div class="demo-confirmation-content">
        <div class="demo-confirmation-icon">
          <svg viewBox="0 0 64 64" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
            <path d="M14 32 L28 46 L50 20"/>
          </svg>
        </div>
        <h2>Signal received.</h2>
        <p>Your project brief <strong id="demo-confirmation-id">GD-DEMO-XXXX</strong> is on its way to our engineering team. Expect a reply within 24 hours.</p>
        <div class="demo-confirmation-actions">
          <button type="button" class="btn btn-primary" id="demo-copy-brief">Copy brief to clipboard</button>
          <a href="<?php echo esc_url(home_url('/')); ?>" class="btn btn-secondary">Back to homepage</a>
        </div>
      </div>
    </div>
  </div>

  <!-- ========== PAGE NAV ========== -->
  <div class="page-nav">
    <a href="<?php echo esc_url(home_url('/applications')); ?>" class="page-nav-btn">Explore Applications</a>
  </div>

</div>

<!-- Three.js via CDN (importmap) + D3.js (CDN) -->
<script type="importmap">
{
  "imports": {
    "three": "https://cdn.jsdelivr.net/npm/three@0.161.0/build/three.module.js",
    "three/addons/": "https://cdn.jsdelivr.net/npm/three@0.161.0/examples/jsm/"
  }
}
</script>
<script src="https://cdn.jsdelivr.net/npm/d3@7.8.5/dist/d3.min.js" defer></script>
<script type="module" src="<?php echo esc_url($tpl . '/assets/demo/demo.js'); ?>"></script>

<?php get_footer(); ?>
