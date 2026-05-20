<?php get_header(); ?>

<?php $tpl = get_template_directory_uri(); ?>

<div class="page-shell contact-page">

  <!-- ========== PAGE HERO ========== -->
  <section class="page-hero">
    <div class="page-hero-inner" data-reveal>
      <nav class="breadcrumb" aria-label="Breadcrumb">
        <a href="<?php echo esc_url(home_url('/')); ?>">Home</a>
        <span class="sep">/</span>
        <span class="current">Contact</span>
      </nav>
      <span class="hero-eyebrow-tag">Get In Touch</span>
      <h1>Let's Talk About Your Project</h1>
      <p class="lede">Tell us what you're building. Our engineering team replies within one business day — usually with concrete next steps.</p>
    </div>
  </section>

  <!-- ========== CONTACT MAIN ========== -->
  <section class="page-section">
    <div class="container">
      <div class="contact-layout">

        <!-- LEFT: FORM -->
        <div class="contact-form-card" data-reveal>
          <h2 class="contact-card-title">Send us a message</h2>
          <p class="contact-card-sub">Required fields are marked with <span class="text-gold">*</span></p>

          <?php
            $sent = false;
            $error = '';
            if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['contact_nonce'])) {
              if (!wp_verify_nonce(sanitize_text_field(wp_unslash($_POST['contact_nonce'])), 'contact_form')) {
                $error = 'Security check failed. Please try again.';
              } else {
                $name    = sanitize_text_field(wp_unslash($_POST['cf_name'] ?? ''));
                $email   = sanitize_email(wp_unslash($_POST['cf_email'] ?? ''));
                $company = sanitize_text_field(wp_unslash($_POST['cf_company'] ?? ''));
                $subject = sanitize_text_field(wp_unslash($_POST['cf_subject'] ?? ''));
                $message = sanitize_textarea_field(wp_unslash($_POST['cf_message'] ?? ''));

                if (!$name || !$email || !$message) {
                  $error = 'Please fill in all required fields.';
                } elseif (!is_email($email)) {
                  $error = 'Please enter a valid email address.';
                } else {
                  $to      = get_option('admin_email');
                  $subject_line = 'New Contact Form Message: ' . $subject;
                  $body    = "Name: $name\nEmail: $email\nCompany: $company\n\nMessage:\n$message";
                  $headers = [ 'Content-Type: text/plain; charset=UTF-8', "Reply-To: $name <$email>" ];
                  wp_mail($to, $subject_line, $body, $headers);
                  $sent = true;
                }
              }
            }
          ?>

          <?php if ($sent): ?>
            <div class="contact-success" role="status">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M9 12 L11 14 L15 10" stroke-linecap="round" stroke-linejoin="round"/></svg>
              <div>
                <strong>Thank you for your message!</strong>
                <p>We'll get back to you as soon as possible.</p>
              </div>
            </div>
          <?php else: ?>
            <?php if ($error): ?>
              <div class="contact-error" role="alert"><?php echo esc_html($error); ?></div>
            <?php endif; ?>

            <form class="contact-form" method="post" action="">
              <?php wp_nonce_field('contact_form', 'contact_nonce'); ?>

              <div class="cf-row cf-row-2">
                <div class="cf-field">
                  <label for="cf_name">Name <span class="text-gold">*</span></label>
                  <input type="text" id="cf_name" name="cf_name" placeholder="Your name" required
                    value="<?php echo esc_attr($_POST['cf_name'] ?? ''); ?>">
                </div>
                <div class="cf-field">
                  <label for="cf_email">Email <span class="text-gold">*</span></label>
                  <input type="email" id="cf_email" name="cf_email" placeholder="your@email.com" required
                    value="<?php echo esc_attr($_POST['cf_email'] ?? ''); ?>">
                </div>
              </div>

              <div class="cf-row cf-row-2">
                <div class="cf-field">
                  <label for="cf_company">Company</label>
                  <input type="text" id="cf_company" name="cf_company" placeholder="Your company"
                    value="<?php echo esc_attr($_POST['cf_company'] ?? ''); ?>">
                </div>
                <div class="cf-field">
                  <label for="cf_subject">Subject</label>
                  <input type="text" id="cf_subject" name="cf_subject" placeholder="Project inquiry, quote request…"
                    value="<?php echo esc_attr($_POST['cf_subject'] ?? ''); ?>">
                </div>
              </div>

              <div class="cf-row">
                <div class="cf-field">
                  <label for="cf_message">Message <span class="text-gold">*</span></label>
                  <textarea id="cf_message" name="cf_message" rows="6" placeholder="Tell us about your project, frequency range, quantities, and timeline…" required><?php echo esc_textarea($_POST['cf_message'] ?? ''); ?></textarea>
                </div>
              </div>

              <button type="submit" class="cf-submit btn btn-primary btn-large">Send Message</button>
              <p class="cf-privacy">By submitting, you agree to our <a href="<?php echo esc_url(home_url('/privacy-policy')); ?>">privacy policy</a>.</p>
            </form>
          <?php endif; ?>
        </div>

        <!-- RIGHT: INFO -->
        <aside class="contact-info-card" data-reveal data-reveal-delay="120">
          <h2 class="contact-card-title">Get in touch</h2>

          <ul class="contact-info-list">
            <li>
              <div class="ci-icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
              </div>
              <div>
                <strong>Address</strong>
                <p>Golden Devices GmbH<br>Am Weichselgarten 27<br>91058 Erlangen, Germany</p>
              </div>
            </li>

            <li>
              <div class="ci-icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="4" width="20" height="16" rx="2"/><polyline points="22,6 12,13 2,6"/></svg>
              </div>
              <div>
                <strong>Email</strong>
                <p><a href="mailto:info@golden-devices.com">info@golden-devices.com</a></p>
              </div>
            </li>

            <li>
              <div class="ci-icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
              </div>
              <div>
                <strong>Phone</strong>
                <p>+49 9131 8560</p>
              </div>
            </li>

            <li>
              <div class="ci-icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12,6 12,12 16,14"/></svg>
              </div>
              <div>
                <strong>Office Hours</strong>
                <p>Mon – Fri: 8:00 – 20:00<br>CET / CEST</p>
              </div>
            </li>
          </ul>

          <div class="contact-social">
            <strong>Follow us</strong>
            <div class="contact-social-links">
              <a href="https://www.linkedin.com/company/golden-devices-gmbh/" target="_blank" rel="noopener" aria-label="LinkedIn">
                <svg viewBox="0 0 24 24" fill="currentColor"><path d="M19 0h-14C2.2 0 0 2.2 0 5v14c0 2.8 2.2 5 5 5h14c2.8 0 5-2.2 5-5V5c0-2.8-2.2-5-5-5zM8 19H5V8h3v11zM6.5 6.7c-1 0-1.7-.8-1.7-1.7S5.5 3.3 6.5 3.3s1.7.8 1.7 1.7-.7 1.7-1.7 1.7zM20 19h-3v-5.6c0-1.4-.5-2.4-1.8-2.4-1 0-1.6.7-1.9 1.4-.1.2-.1.6-.1.9V19h-3V8h3v1.3c.4-.6 1.1-1.5 2.7-1.5 2 0 3.5 1.3 3.5 4.1V19z"/></svg>
              
            </div>
          </div>
        </aside>

      </div>
    </div>
  </section>

  <!-- ========== MAP ========== -->
  <section class="contact-map-section" data-reveal>
    <iframe
      title="Golden Devices Location – Erlangen"
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d41510.84!2d11.0077!3d49.5897!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x479f1e5c6f9b1a57%3A0x41a946b1cd1b0!2sErlangen!5e0!3m2!1sen!2sde!4v1710000000000"
      width="100%"
      height="450"
      loading="lazy"
      referrerpolicy="no-referrer-when-downgrade">
    </iframe>
  </section>

  <!-- ========== PAGE NAV ========== -->
  <div class="page-nav">
    <a href="<?php echo esc_url(home_url('/')); ?>" class="page-nav-btn">Back to Home</a>
  </div>

</div>

<?php get_footer(); ?>
