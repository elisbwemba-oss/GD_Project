<?php get_header(); ?>

<div class="page-shell legal-page eic-page">

  <section class="page-hero">
    <div class="page-hero-inner" data-reveal>
      <nav class="breadcrumb" aria-label="Breadcrumb">
        <a href="<?php echo esc_url(home_url('/')); ?>">Home</a>
        <span class="sep">/</span>
        <span class="current">EIC Accelerator</span>
      </nav>
      <span class="hero-eyebrow-tag">European Union</span>
      <h1>EIC Accelerator</h1>
      <p class="lede">Funded by the European Union — supporting breakthrough innovation in mmWave manufacturing.</p>
    </div>
  </section>

  <section class="page-section">
    <div class="container">
      <div class="legal-content" data-reveal>

        <div class="eic-emblem-block">
          <div class="eic-emblem">
            <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
              <circle cx="100" cy="100" r="98" fill="#003399"/>
              <g fill="#FFCC00">
                <?php
                  // 12 EU stars in a circle
                  for ($i = 0; $i < 12; $i++) {
                    $angle = ($i / 12) * 2 * M_PI - M_PI / 2;
                    $cx = 100 + cos($angle) * 65;
                    $cy = 100 + sin($angle) * 65;
                    echo '<polygon points="';
                    for ($p = 0; $p < 10; $p++) {
                      $r = ($p % 2 === 0) ? 9 : 4;
                      $a = ($p / 10) * 2 * M_PI - M_PI / 2;
                      $x = $cx + cos($a) * $r;
                      $y = $cy + sin($a) * $r;
                      echo round($x, 2) . ',' . round($y, 2) . ' ';
                    }
                    echo '"/>';
                  }
                ?>
              </g>
            </svg>
          </div>
          <div class="eic-emblem-text">
            <h2>EIC Accelerator — European Innovation Council</h2>
            <p class="legal-disclaimer">Funded by the European Union. Views and opinions expressed are however those of the author(s) only and do not necessarily reflect those of the European Union or EISMEA. Neither the European Union nor the granting authority can be held responsible for them.</p>
          </div>
        </div>

        <hr class="legal-hr">

        <h2>About the EIC Accelerator</h2>
        <p>The EIC Accelerator is part of the European Innovation Council (EIC), the EU's flagship innovation programme under Horizon Europe. It supports individual small and medium-sized enterprises (SMEs), in particular start-ups and spin-offs, to develop and scale up breakthrough innovations with the potential to create new markets or disrupt existing ones.</p>

        <p>The programme provides a combination of grant funding and equity investment, giving innovative companies the resources to:</p>
        <ul class="legal-list">
          <li>Develop deep-tech and disruptive technologies</li>
          <li>Scale their innovations to market</li>
          <li>Grow internationally within and beyond the European Union</li>
        </ul>

        <h2>Golden Devices &amp; the EIC Accelerator</h2>
        <p>Golden Devices GmbH has been selected as an EIC Accelerator beneficiary, recognising our breakthrough manufacturing technologies for millimeter-wave and sub-THz antenna and waveguide components. This funding supports our mission to make high-performance RF technology accessible for the industries of tomorrow — from automotive radar to 5G infrastructure and aerospace.</p>

        <div class="legal-info-box">
          <strong>Funding Notice</strong>
          <p>This project has received funding from the European Union's Horizon Europe research and innovation programme under the EIC Accelerator. Views and opinions expressed are those of Golden Devices GmbH only and do not necessarily reflect those of the European Union or EISMEA. Neither the European Union nor the granting authority can be held responsible for them.</p>
        </div>

        <h2>More Information</h2>
        <p>For more information about the European Innovation Council and the EIC Accelerator programme, please visit the <a href="https://eic.ec.europa.eu/eic-funding-opportunities/eic-accelerator_en" target="_blank" rel="noopener">official EIC website</a>.</p>

      </div>
    </div>
  </section>

</div>

<?php get_footer(); ?>
