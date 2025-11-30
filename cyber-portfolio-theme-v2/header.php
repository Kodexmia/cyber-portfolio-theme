<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div class="page-wrap">
  <header>
    <div class="nav-inner">
      <a href="<?php echo home_url('/'); ?>" class="brand">
        <div class="brand-mark">
          <?php 
          $site_name = get_bloginfo('name');
          $initials = '';
          $words = explode(' ', $site_name);
          foreach ($words as $word) {
              $initials .= strtoupper(substr($word, 0, 1));
          }
          echo esc_html(substr($initials, 0, 2));
          ?>
        </div>
        <span><?php bloginfo('name'); ?></span>
      </a>
      
      <!-- Mobile Menu Toggle -->
      <button class="mobile-menu-toggle" aria-label="Toggle menu" aria-expanded="false">
        <span></span>
        <span></span>
        <span></span>
      </button>
      
      <!-- Navigation -->
      <nav class="main-nav">
        <?php cyber_nav_menu(); ?>
        <?php if (cyber_portfolio_get('cv_url')): ?>
        <div class="nav-cv-btn">
          <a href="<?php echo esc_url(cyber_portfolio_get('cv_url')); ?>" class="btn-small" target="_blank" download>Download CV</a>
        </div>
        <?php endif; ?>
      </nav>
    </div>
  </header>
