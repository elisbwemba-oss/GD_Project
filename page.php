<?php get_header(); ?>

<div class="page-shell default-page">

  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <section class="page-hero">
      <div class="page-hero-inner" data-reveal>
        <nav class="breadcrumb" aria-label="Breadcrumb">
          <a href="<?php echo esc_url(home_url('/')); ?>">Home</a>
          <span class="sep">/</span>
          <span class="current"><?php the_title(); ?></span>
        </nav>
        <h1><?php the_title(); ?></h1>
        <?php if (has_excerpt()) : ?>
          <p class="lede"><?php echo esc_html(get_the_excerpt()); ?></p>
        <?php endif; ?>
      </div>
    </section>

    <section class="page-section">
      <div class="container">
        <article class="default-page-content" data-reveal>
          <?php the_content(); ?>
          <?php wp_link_pages(['before' => '<nav class="page-links">', 'after' => '</nav>']); ?>
        </article>
      </div>
    </section>

  <?php endwhile; endif; ?>

</div>

<?php get_footer(); ?>
