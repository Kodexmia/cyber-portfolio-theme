<?php
/**
 * Template Name: Projects Page
 */
get_header();
?>

<main>
  <div class="page-header" style="text-align: center; margin-bottom: 3rem;">
    <div class="section-label"><?php echo esc_html(cyber_portfolio_get('projects_label', 'Projects')); ?></div>
    <h1 class="page-title"><?php echo esc_html(cyber_portfolio_get('projects_title', 'Challenge → Solution → Outcome case studies')); ?></h1>
    <p class="page-subtitle">
      <?php echo esc_html(cyber_portfolio_get('projects_sub', 'Each project is written like a mini consulting engagement, showing why it mattered, what I did, and what changed.')); ?>
    </p>
  </div>

  <div class="cards-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 1.4rem;">
    <?php for ($i = 1; $i <= 6; $i++):
      if (cyber_portfolio_get('proj_'.$i.'_title')):
    ?>
    <article class="project-card" style="display: flex; flex-direction: column; gap: 0.8rem;">
      <?php if (cyber_portfolio_get('proj_'.$i.'_tag')): ?>
      <div style="font-size: 0.7rem; text-transform: uppercase; letter-spacing: 0.15em; color: var(--accent); font-weight: 700;">
        <?php echo esc_html(cyber_portfolio_get('proj_'.$i.'_tag')); ?>
      </div>
      <?php endif; ?>
      
      <h3 style="font-size: 1.15rem; color: var(--text-main); line-height: 1.4; margin-bottom: 0.2rem;">
        <?php echo esc_html(cyber_portfolio_get('proj_'.$i.'_title')); ?>
      </h3>
      
      <p style="color: var(--text-muted); line-height: 1.6; font-size: 0.87rem;">
        <?php echo nl2br(esc_html(cyber_portfolio_get('proj_'.$i.'_desc'))); ?>
      </p>
      
      <?php if (cyber_portfolio_get('proj_'.$i.'_m1') || cyber_portfolio_get('proj_'.$i.'_m2') || cyber_portfolio_get('proj_'.$i.'_m3')): ?>
      <div style="display: flex; flex-wrap: wrap; gap: 0.7rem; margin-top: 0.3rem;">
        <?php if (cyber_portfolio_get('proj_'.$i.'_m1')): ?>
        <span style="padding: 0.3rem 0.7rem; border-radius: 999px; background: #eff6ff; border: 1px solid #dbeafe; font-size: 0.74rem; color: #1e40af;">
          <?php echo esc_html(cyber_portfolio_get('proj_'.$i.'_m1')); ?>
        </span>
        <?php endif; ?>
        <?php if (cyber_portfolio_get('proj_'.$i.'_m2')): ?>
        <span style="padding: 0.3rem 0.7rem; border-radius: 999px; background: #eff6ff; border: 1px solid #dbeafe; font-size: 0.74rem; color: #1e40af;">
          <?php echo esc_html(cyber_portfolio_get('proj_'.$i.'_m2')); ?>
        </span>
        <?php endif; ?>
        <?php if (cyber_portfolio_get('proj_'.$i.'_m3')): ?>
        <span style="padding: 0.3rem 0.7rem; border-radius: 999px; background: #eff6ff; border: 1px solid #dbeafe; font-size: 0.74rem; color: #1e40af;">
          <?php echo esc_html(cyber_portfolio_get('proj_'.$i.'_m3')); ?>
        </span>
        <?php endif; ?>
      </div>
      <?php endif; ?>
      
      <?php if (cyber_portfolio_get('proj_'.$i.'_tools') || cyber_portfolio_get('proj_'.$i.'_dur') || cyber_portfolio_get('proj_'.$i.'_stat')): ?>
      <div style="margin-top: 0.8rem; padding-top: 0.8rem; border-top: 1px solid var(--border-subtle); display: flex; flex-direction: column; gap: 0.4rem; font-size: 0.82rem;">
        <?php if (cyber_portfolio_get('proj_'.$i.'_tools')): ?>
        <div style="display: flex; gap: 0.5rem;">
          <span style="font-weight: 600; color: var(--accent); min-width: 60px;">Tools:</span>
          <span style="color: var(--text-muted);"><?php echo esc_html(cyber_portfolio_get('proj_'.$i.'_tools')); ?></span>
        </div>
        <?php endif; ?>
        <?php if (cyber_portfolio_get('proj_'.$i.'_dur')): ?>
        <div style="display: flex; gap: 0.5rem;">
          <span style="font-weight: 600; color: var(--accent); min-width: 60px;">Duration:</span>
          <span style="color: var(--text-muted);"><?php echo esc_html(cyber_portfolio_get('proj_'.$i.'_dur')); ?></span>
        </div>
        <?php endif; ?>
        <?php if (cyber_portfolio_get('proj_'.$i.'_stat')): ?>
        <div style="display: flex; gap: 0.5rem;">
          <span style="font-weight: 600; color: var(--accent); min-width: 60px;">Status:</span>
          <span style="color: var(--text-muted);"><?php echo esc_html(cyber_portfolio_get('proj_'.$i.'_stat')); ?></span>
        </div>
        <?php endif; ?>
      </div>
      <?php endif; ?>
    </article>
    <?php endif; endfor; ?>
  </div>
  
  <?php if (!cyber_portfolio_get('proj_1_title')): ?>
  <p style="text-align: center; padding: 3rem; background: var(--card-bg); border: 1px solid var(--border-subtle); border-radius: 16px; color: var(--text-muted);">
    💡 No projects added yet. Go to <strong>Portfolio Content → Projects</strong> to add your case studies.
  </p>
  <?php endif; ?>
</main>

<?php get_footer(); ?>
