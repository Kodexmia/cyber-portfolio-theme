<?php
/**
 * Template Name: About Page
 */
get_header();
?>

<main>
  <div class="page-header" style="text-align: center; margin-bottom: 3rem;">
    <div class="section-label">About Me</div>
    <h1 class="page-title"><?php echo esc_html(cyber_portfolio_get('about_title', 'Cloud-first cyber student with real lab evidence')); ?></h1>
    <p class="page-subtitle">
      <?php echo esc_html(cyber_portfolio_get('about_sub', 'I am building a portfolio that mirrors real security work.')); ?>
    </p>
  </div>

  <div class="about-grid" style="display: grid; grid-template-columns: 2fr 1fr; gap: 2rem; margin-bottom: 4rem;">
    <div class="about-text">
      <?php 
      $bio = cyber_portfolio_get('about_bio', 'My background is in support and operations, which means I understand the pressure of keeping systems running while fixing security issues.');
      $paragraphs = explode("\n\n", $bio);
      foreach ($paragraphs as $p) {
          if (trim($p)) {
              echo '<p style="font-size: 0.95rem; color: var(--text-muted); margin-bottom: 1.2rem; line-height: 1.7;">' . nl2br(esc_html(trim($p))) . '</p>';
          }
      }
      ?>
      
      <div class="fact-list" style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 1rem; margin-top: 2rem;">
        <?php if (cyber_portfolio_get('fact_1')): ?>
        <div>
          <div style="color: var(--accent); font-size: 0.75rem; text-transform: uppercase; letter-spacing: 0.1em; font-weight: 600; margin-bottom: 0.3rem;">Location</div>
          <div style="font-weight: 500; color: var(--text-main);"><?php echo esc_html(cyber_portfolio_get('fact_1', 'Manchester, UK')); ?></div>
        </div>
        <?php endif; ?>
        <?php if (cyber_portfolio_get('fact_2')): ?>
        <div>
          <div style="color: var(--accent); font-size: 0.75rem; text-transform: uppercase; letter-spacing: 0.1em; font-weight: 600; margin-bottom: 0.3rem;">Availability</div>
          <div style="font-weight: 500; color: var(--text-main);"><?php echo esc_html(cyber_portfolio_get('fact_2', 'Part-time, remote')); ?></div>
        </div>
        <?php endif; ?>
        <?php if (cyber_portfolio_get('fact_3')): ?>
        <div>
          <div style="color: var(--accent); font-size: 0.75rem; text-transform: uppercase; letter-spacing: 0.1em; font-weight: 600; margin-bottom: 0.3rem;">Focus</div>
          <div style="font-weight: 500; color: var(--text-main);"><?php echo esc_html(cyber_portfolio_get('fact_3', 'Cloud & identity security')); ?></div>
        </div>
        <?php endif; ?>
        <?php if (cyber_portfolio_get('fact_4')): ?>
        <div>
          <div style="color: var(--accent); font-size: 0.75rem; text-transform: uppercase; letter-spacing: 0.1em; font-weight: 600; margin-bottom: 0.3rem;">Looking for</div>
          <div style="font-weight: 500; color: var(--text-main);"><?php echo esc_html(cyber_portfolio_get('fact_4', 'Junior cyber / SOC roles')); ?></div>
        </div>
        <?php endif; ?>
      </div>
    </div>
    
    <div class="about-highlights" style="display: grid; gap: 1rem;">
      <?php 
      $default_highlights = array(
          array('title' => 'Homelab Infrastructure', 'desc' => 'Small Proxmox lab with pfSense, Windows domain, and Azure Arc-connected VMs.'),
          array('title' => 'Learning Path', 'desc' => 'AZ-900 and SC-900 complete, working through SC-200 labs.'),
          array('title' => 'Documentation Approach', 'desc' => 'Every project includes challenge, solution, and measurable outcomes.')
      );
      
      for ($i = 1; $i <= 3; $i++):
        $title = cyber_portfolio_get('highlight_'.$i.'_title', $default_highlights[$i-1]['title']);
        $desc = cyber_portfolio_get('highlight_'.$i.'_desc', $default_highlights[$i-1]['desc']);
        if ($title || $desc): // Show if either title or desc exists
      ?>
      <div style="background: var(--card-bg); border: 1px solid var(--border-subtle); border-radius: 16px; padding: 1.2rem; box-shadow: var(--card-shadow);">
        <h4 style="font-size: 0.95rem; margin-bottom: 0.5rem; color: var(--text-main);"><?php echo esc_html($title); ?></h4>
        <p style="font-size: 0.85rem; color: var(--text-muted); line-height: 1.6;">
          <?php echo esc_html($desc); ?>
        </p>
      </div>
      <?php endif; endfor; ?>
    </div>
  </div>
  
  <!-- Skills Section -->
  <div class="skills-section">
    <div class="section-label">Technical Skills</div>
    <h2 class="section-title">Tools and Technologies</h2>
    
    <div class="skills-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 1.5rem; margin-top: 2rem;">
      <?php for ($i = 1; $i <= 4; $i++):
        if (cyber_portfolio_get('skill_cat_'.$i)):
      ?>
      <div style="background: var(--card-bg); border: 1px solid var(--border-subtle); border-radius: 16px; padding: 1.5rem; box-shadow: var(--card-shadow);">
        <h3 style="font-size: 1.1rem; margin-bottom: 1rem; color: var(--text-main);"><?php echo esc_html(cyber_portfolio_get('skill_cat_'.$i)); ?></h3>
        <div style="display: flex; flex-wrap: wrap; gap: 0.5rem;">
          <?php 
          $skills = explode(',', cyber_portfolio_get('skill_tags_'.$i));
          foreach ($skills as $skill):
            if (trim($skill)):
          ?>
          <span style="padding: 0.4rem 0.8rem; border-radius: 8px; background: #eff6ff; border: 1px solid #dbeafe; font-size: 0.85rem; color: #1e40af;">
            <?php echo esc_html(trim($skill)); ?>
          </span>
          <?php endif; endforeach; ?>
        </div>
      </div>
      <?php endif; endfor; ?>
    </div>
  </div>
</main>

<?php get_footer(); ?>
