<?php
/**
 * Template Name: Certifications Page
 */
get_header();
?>

<main>
  <div class="page-header" style="text-align: center; margin-bottom: 3rem;">
    <div class="section-label"><?php echo esc_html(cyber_portfolio_get('certs_label', 'Certifications')); ?></div>
    <h1 class="page-title"><?php echo esc_html(cyber_portfolio_get('certs_title', 'Structured learning, not random courses')); ?></h1>
    <p class="page-subtitle">
      <?php echo esc_html(cyber_portfolio_get('certs_sub', 'Following a clear path from fundamentals into cloud security and detection engineering. Each certification builds on the previous one with hands-on lab work.')); ?>
    </p>
  </div>

  <div class="timeline" style="border-left: 2px solid var(--border-subtle); padding-left: 2rem; display: grid; gap: 2rem; max-width: 800px;">
    <?php for ($i = 1; $i <= 6; $i++):
      if (cyber_portfolio_get('cert_'.$i.'_title')):
        $status = cyber_portfolio_get('cert_'.$i.'_status');
        $status_class = '';
        $status_bg = '#f0f0f0';
        $status_color = '#666';
        $status_label = 'Pending';
        
        if ($status == 'complete') {
          $status_bg = '#dcfce7';
          $status_color = '#166534';
          $status_label = '✅ Completed';
        } elseif ($status == 'progress') {
          $status_bg = '#fef9c3';
          $status_color = '#854d0e';
          $status_label = '⏳ In Progress';
        } elseif ($status == 'planned') {
          $status_bg = '#e0f2fe';
          $status_color = '#0c4a6e';
          $status_label = '📅 Planned';
        }
    ?>
    <div style="position: relative; background: var(--card-bg); border: 1px solid var(--border-subtle); border-radius: 16px; padding: 1.5rem 1.8rem; box-shadow: var(--card-shadow);">
      <div style="width: 16px; height: 16px; border-radius: 50%; background: var(--card-bg); border: 4px solid var(--accent); position: absolute; left: -2.5rem; top: 1.8rem; box-shadow: 0 0 0 4px var(--card-bg);"></div>
      
      <span style="display: inline-block; padding: 0.25rem 0.7rem; border-radius: 999px; font-size: 0.72rem; font-weight: 600; text-transform: uppercase; letter-spacing: 0.05em; margin-bottom: 0.8rem; background: <?php echo $status_bg; ?>; color: <?php echo $status_color; ?>; border: 1px solid <?php echo $status_color; ?>22;">
        <?php echo $status_label; ?>
      </span>
      
      <h3 style="font-size: 1.2rem; font-weight: 600; color: var(--text-main); margin-bottom: 0.5rem;">
        <?php echo esc_html(cyber_portfolio_get('cert_'.$i.'_title')); ?>
      </h3>
      
      <?php if (cyber_portfolio_get('cert_'.$i.'_meta')): ?>
      <div style="font-size: 0.85rem; color: var(--text-muted); margin-bottom: 1rem;">
        <?php echo esc_html(cyber_portfolio_get('cert_'.$i.'_meta')); ?>
      </div>
      <?php endif; ?>
      
      <?php if (cyber_portfolio_get('cert_'.$i.'_desc')): ?>
      <p style="font-size: 0.9rem; color: var(--text-muted); line-height: 1.6; margin-bottom: 1rem;">
        <?php echo esc_html(cyber_portfolio_get('cert_'.$i.'_desc')); ?>
      </p>
      <?php endif; ?>
      
      <?php if (cyber_portfolio_get('cert_'.$i.'_skills')): ?>
      <div style="display: flex; flex-wrap: wrap; gap: 0.5rem;">
        <?php 
        $skills = explode(',', cyber_portfolio_get('cert_'.$i.'_skills'));
        foreach ($skills as $skill):
          if (trim($skill)):
        ?>
        <span style="padding: 0.3rem 0.7rem; border-radius: 8px; background: rgba(59,130,246,0.12); color: var(--accent); font-size: 0.8rem; font-weight: 500;">
          <?php echo esc_html(trim($skill)); ?>
        </span>
        <?php endif; endforeach; ?>
      </div>
      <?php endif; ?>
    </div>
    <?php endif; endfor; ?>
  </div>
  
  <?php if (cyber_portfolio_get('path_1_title') || cyber_portfolio_get('learning_intro')): ?>
  <div style="margin-top: 3rem; padding: 2rem; background: var(--card-bg); border: 1px solid var(--border-subtle); border-radius: 16px; box-shadow: var(--card-shadow);">
    <h3 style="font-size: 1.3rem; margin-bottom: 1rem; color: var(--text-main);">
      <?php echo esc_html(cyber_portfolio_get('learning_title', 'My Learning Strategy')); ?>
    </h3>
    <?php if (cyber_portfolio_get('learning_intro')): ?>
    <p style="color: var(--text-muted); line-height: 1.6; margin-bottom: 1rem;">
      <?php echo esc_html(cyber_portfolio_get('learning_intro')); ?>
    </p>
    <?php endif; ?>
    <div style="display: grid; gap: 0.8rem; margin-top: 1.5rem;">
      <?php for ($i = 1; $i <= 4; $i++):
        if (cyber_portfolio_get('path_'.$i.'_title')):
      ?>
      <div style="display: flex; gap: 1rem; padding: 1rem; background: var(--bg-main); border-radius: 12px;">
        <div style="width: 32px; height: 32px; border-radius: 50%; background: var(--accent); color: #fff; display: flex; align-items: center; justify-content: center; font-weight: 700; font-size: 0.9rem; flex-shrink: 0;">
          <?php echo $i; ?>
        </div>
        <div>
          <h4 style="font-size: 0.95rem; margin-bottom: 0.3rem; color: var(--text-main);">
            <?php echo esc_html(cyber_portfolio_get('path_'.$i.'_title')); ?>
          </h4>
          <p style="font-size: 0.85rem; color: var(--text-muted); margin: 0;">
            <?php echo esc_html(cyber_portfolio_get('path_'.$i.'_desc')); ?>
          </p>
        </div>
      </div>
      <?php endif; endfor; ?>
    </div>
  </div>
  <?php endif; ?>
  
  <?php if (!cyber_portfolio_get('cert_1_title')): ?>
  <p style="text-align: center; padding: 3rem; background: var(--card-bg); border: 1px solid var(--border-subtle); border-radius: 16px; color: var(--text-muted);">
    🎓 No certifications added yet. Go to <strong>Portfolio Content → Certs</strong> to add your certifications.
  </p>
  <?php endif; ?>
</main>

<?php get_footer(); ?>
