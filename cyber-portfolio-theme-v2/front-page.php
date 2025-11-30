<?php
/**
 * Template Name: Front Page
 * Homepage template
 */
get_header();
?>

<main>
  <!-- HERO SECTION -->
  <section id="hero" class="hero">
    <div class="hero-content">
      <?php if (cyber_portfolio_get('hero_tag')): ?>
      <div class="section-label"><?php echo esc_html(cyber_portfolio_get('hero_tag')); ?></div>
      <?php endif; ?>
      
      <h1 class="page-title" style="font-size: 3rem; line-height: 1.1;">
        <?php echo esc_html(cyber_portfolio_get('hero_title', 'Hello, I am Sam Ward')); ?>
      </h1>
      
      <p class="page-subtitle" style="margin: 1.5rem 0;">
        <?php echo esc_html(cyber_portfolio_get('hero_sub', 'Junior cyber security analyst focusing on Azure cloud security, identity, and incident response.')); ?>
      </p>
      
      <?php if (cyber_portfolio_get('hero_badge')): ?>
      <div style="display: inline-block; padding: 0.6rem 1.2rem; background: var(--accent-soft); border-radius: 999px; color: var(--accent); font-size: 0.9rem; font-weight: 500; margin-top: 1rem;">
        <?php echo esc_html(cyber_portfolio_get('hero_badge')); ?>
      </div>
      <?php endif; ?>
    </div>
    
    <div class="hero-image">
      <div style="width: 300px; height: 300px; border-radius: 50%; background: linear-gradient(135deg, var(--accent), #93c5fd); display: flex; align-items: center; justify-content: center; box-shadow: 0 20px 60px rgba(59, 130, 246, 0.3); margin: 0 auto;">
        <?php if (cyber_portfolio_get('hero_img')): ?>
          <img src="<?php echo esc_url(cyber_portfolio_get('hero_img')); ?>" alt="Profile" style="width: 280px; height: 280px; border-radius: 50%; object-fit: cover;">
        <?php else: ?>
          <div style="width: 280px; height: 280px; border-radius: 50%; background: rgba(255,255,255,0.2);"></div>
        <?php endif; ?>
      </div>
    </div>
  </section>
  
  <!-- ABOUT TEASER -->
  <section id="about-teaser" style="text-align: center; max-width: 800px; margin: 0 auto 5rem;">
    <div class="section-label">About</div>
    <h2 class="section-title">Cloud-first cyber student with real lab evidence</h2>
    <p class="section-lead" style="margin: 1.5rem auto;">
      <?php echo esc_html(cyber_portfolio_get('about_teaser', 'I am building a portfolio that mirrors real security work: small, focused projects that follow the Challenge → Solution → Outcome pattern.')); ?>
    </p>
    <a href="<?php echo esc_url(home_url('/about')); ?>" class="btn-small" style="display: inline-block; margin-top: 1rem;">Learn more about me</a>
  </section>
  
  <!-- QUICK STATS -->
  <section id="stats" class="stats-grid">
    <?php for ($i = 1; $i <= 3; $i++):
      if (cyber_portfolio_get('stat'.$i.'_num')):
    ?>
    <div style="background: var(--card-bg); border: 1px solid var(--border-subtle); border-radius: 16px; padding: 2rem; text-align: center; box-shadow: var(--card-shadow);">
      <div style="font-size: 2.5rem; font-weight: 700; color: var(--accent); margin-bottom: 0.5rem;"><?php echo esc_html(cyber_portfolio_get('stat'.$i.'_num')); ?></div>
      <div style="color: var(--text-muted); font-size: 0.9rem;"><?php echo esc_html(cyber_portfolio_get('stat'.$i.'_label')); ?></div>
    </div>
    <?php endif; endfor; ?>
  </section>
  
  <!-- PROJECTS TEASER -->
  <section id="projects-teaser" style="text-align: center; margin-bottom: 5rem;">
    <div class="section-label">Projects</div>
    <h2 class="section-title">Challenge → Solution → Outcome case studies</h2>
    <p class="section-lead" style="margin: 1.5rem auto;">
      Each project is written like a mini consulting engagement, showing why it mattered, what I did, and what changed.
    </p>
    <a href="<?php echo esc_url(home_url('/projects')); ?>" class="btn-small" style="display: inline-block; margin-top: 1rem;">View all projects</a>
  </section>
  
  <!-- CERTIFICATIONS TEASER -->
  <section id="certs-teaser" style="text-align: center; margin-bottom: 5rem;">
    <div class="section-label">Certifications</div>
    <h2 class="section-title">Structured learning, not random courses</h2>
    <p class="section-lead" style="margin: 1.5rem auto;">
      Following a clear path from fundamentals into cloud security and detection engineering.
    </p>
    <a href="<?php echo esc_url(home_url('/certs')); ?>" class="btn-small" style="display: inline-block; margin-top: 1rem;">View certifications</a>
  </section>
  
  <!-- CONTACT CTA -->
  <section id="contact-cta" style="background: var(--card-bg); border: 1px solid var(--border-subtle); border-radius: 20px; padding: 3rem; text-align: center; box-shadow: var(--card-shadow);">
    <div class="section-label">Get in Touch</div>
    <h2 class="section-title">Let's talk about labs, not just job titles</h2>
    <p class="section-lead" style="margin: 1.5rem auto;">
      I'm happy to walk through any of these projects live, or design a small proof-of-concept for your environment.
    </p>
    <a href="<?php echo esc_url(home_url('/contact')); ?>" style="display: inline-block; margin-top: 1.5rem; padding: 0.9rem 2rem; background: var(--accent); color: #fff; border-radius: 10px; font-weight: 600; box-shadow: 0 4px 12px rgba(59, 130, 246, 0.25);">Get in touch</a>
  </section>
</main>

<?php get_footer(); ?>
