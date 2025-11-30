<?php
/**
 * Template Name: Portfolio Page
 */
get_header();
?>

<main>
  <div class="page-header" style="text-align: center; margin-bottom: 3rem;">
    <div class="section-label"><?php echo esc_html(cyber_portfolio_get('portfolio_label', 'Portfolio')); ?></div>
    <h1 class="page-title"><?php echo esc_html(cyber_portfolio_get('portfolio_title', 'Evidence you can click, read, and clone')); ?></h1>
    <p class="page-subtitle">
      <?php echo esc_html(cyber_portfolio_get('portfolio_sub', 'Full write-ups, screenshots, and repositories for selected work. Perfect for interview discussions and technical deep-dives.')); ?>
    </p>
  </div>

  <div class="cards-grid" style="display: grid; grid-template-columns: repeat(auto-fill, minmax(300px, 1fr)); gap: 1.3rem; margin-top: 2.5rem;">
    <?php for ($i = 1; $i <= 9; $i++):
      if (cyber_portfolio_get('port_'.$i.'_title')):
    ?>
    <article class="portfolio-card" style="background: var(--card-bg); border-radius: 14px; border: 1px solid var(--border-subtle); overflow: hidden; box-shadow: var(--card-shadow); transition: transform 0.2s;">
      <div style="height: 160px; background: linear-gradient(135deg, #93c5fd, #3b82f6); display: flex; align-items: center; justify-content: center; font-size: 3rem;">
        <?php echo cyber_portfolio_get('port_'.$i.'_icon', '📂'); ?>
      </div>
      <div style="padding: 1.1rem 1.2rem 1.2rem;">
        <h4 style="font-size: 1rem; margin-bottom: 0.4rem; color: var(--text-main); line-height: 1.4;">
          <?php echo esc_html(cyber_portfolio_get('port_'.$i.'_title')); ?>
        </h4>
        <p style="color: var(--text-muted); line-height: 1.5; margin-bottom: 0.8rem; font-size: 0.83rem;">
          <?php echo esc_html(cyber_portfolio_get('port_'.$i.'_desc')); ?>
        </p>
        
        <?php if (cyber_portfolio_get('port_'.$i.'_tags')): ?>
        <div style="display: flex; flex-wrap: wrap; gap: 0.45rem; margin-bottom: 0.8rem;">
          <?php 
          $tags = explode(',', cyber_portfolio_get('port_'.$i.'_tags'));
          foreach ($tags as $tag):
            if (trim($tag)):
          ?>
          <span style="padding: 0.22rem 0.6rem; border-radius: 999px; background: #f1f3f5; font-size: 0.72rem; color: var(--text-muted);">
            <?php echo esc_html(trim($tag)); ?>
          </span>
          <?php endif; endforeach; ?>
        </div>
        <?php endif; ?>
        
        <?php if (cyber_portfolio_get('port_'.$i.'_link')): ?>
        <a href="<?php echo esc_url(cyber_portfolio_get('port_'.$i.'_link')); ?>" target="_blank" style="display: inline-flex; align-items: center; gap: 0.4rem; color: var(--accent); font-size: 0.82rem; font-weight: 500;">
          View on GitHub →
        </a>
        <?php endif; ?>
      </div>
    </article>
    <?php endif; endfor; ?>
  </div>
  
  <?php if (!cyber_portfolio_get('port_1_title')): ?>
  <p style="text-align: center; padding: 3rem; background: var(--card-bg); border: 1px solid var(--border-subtle); border-radius: 16px; color: var(--text-muted);">
    📂 No portfolio items added yet. Go to <strong>Portfolio Content → Portfolio</strong> to add your projects.
  </p>
  <?php endif; ?>
</main>

<?php get_footer(); ?>
