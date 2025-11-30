<?php
/**
 * Template Name: Contact Page
 */
get_header();
?>

<main>
  <div class="page-header" style="text-align: center; margin-bottom: 3rem;">
    <div class="section-label">GET IN TOUCH</div>
    <h1 class="page-title">Let us talk about labs, not just job titles</h1>
    <p class="page-subtitle" style="max-width: 650px; margin: 1rem auto 0;">
      I am happy to walk through any of these projects live, or design a small proof-of-concept for your environment. Remote roles preferred.
    </p>
  </div>

  <div class="contact-container contact-grid" style="max-width: 1100px; margin: 0 auto; align-items: start;">
    
    <!-- LEFT COLUMN: Contact Info -->
    <div class="contact-left" style="display: flex; flex-direction: column; gap: 2rem;">
      <p style="font-size: 0.95rem; color: var(--text-muted); line-height: 1.7; margin: 0;">
        <?php echo esc_html(cyber_portfolio_get('contact_intro', 'The fastest way to reach me is via email or LinkedIn. I usually reply within one working day and am always happy to discuss security projects, lab setups, or potential opportunities.')); ?>
      </p>
      
      <!-- Contact Information Card -->
      <div style="background: var(--card-bg); border: 1px solid var(--border-subtle); border-radius: 16px; padding: 2rem; box-shadow: var(--card-shadow);">
        <h3 style="font-size: 1.15rem; margin-bottom: 1.5rem; color: var(--text-main);">Contact Information</h3>
        
        <div style="display: grid; gap: 1.5rem;">
          <!-- Email -->
          <?php if (cyber_portfolio_get('email')): ?>
          <div style="display: flex; align-items: start; gap: 1rem;">
            <div style="width: 42px; height: 42px; border-radius: 10px; background: #EEF2FF; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#3b82f6" stroke-width="2">
                <rect x="2" y="4" width="20" height="16" rx="2"/>
                <path d="M2 7l10 7 10-7"/>
              </svg>
            </div>
            <div>
              <div style="font-size: 0.75rem; font-weight: 600; color: var(--text-muted); text-transform: uppercase; letter-spacing: 0.05em; margin-bottom: 0.3rem;">EMAIL</div>
              <a href="mailto:<?php echo esc_attr(cyber_portfolio_get('email')); ?>" style="color: var(--accent); font-weight: 500; font-size: 0.95rem;">
                <?php echo esc_html(cyber_portfolio_get('email')); ?>
              </a>
            </div>
          </div>
          <?php endif; ?>
          
          <!-- LinkedIn -->
          <?php if (cyber_portfolio_get('linkedin')): ?>
          <div style="display: flex; align-items: start; gap: 1rem;">
            <div style="width: 42px; height: 42px; border-radius: 10px; background: #EEF2FF; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#3b82f6" stroke-width="2">
                <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"/>
                <rect x="2" y="9" width="4" height="12"/>
                <circle cx="4" cy="4" r="2"/>
              </svg>
            </div>
            <div>
              <div style="font-size: 0.75rem; font-weight: 600; color: var(--text-muted); text-transform: uppercase; letter-spacing: 0.05em; margin-bottom: 0.3rem;">LINKEDIN</div>
              <a href="<?php echo esc_url(cyber_portfolio_get('linkedin')); ?>" target="_blank" style="color: var(--accent); font-weight: 500; font-size: 0.95rem;">
                linkedin.com/in/sam-ward-cyber
              </a>
            </div>
          </div>
          <?php endif; ?>
          
          <!-- GitHub -->
          <?php if (cyber_portfolio_get('github')): ?>
          <div style="display: flex; align-items: start; gap: 1rem;">
            <div style="width: 42px; height: 42px; border-radius: 10px; background: #EEF2FF; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#3b82f6" stroke-width="2">
                <path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"/>
              </svg>
            </div>
            <div>
              <div style="font-size: 0.75rem; font-weight: 600; color: var(--text-muted); text-transform: uppercase; letter-spacing: 0.05em; margin-bottom: 0.3rem;">GITHUB</div>
              <a href="<?php echo esc_url(cyber_portfolio_get('github')); ?>" target="_blank" style="color: var(--accent); font-weight: 500; font-size: 0.95rem;">
                github.com/samward-cyber
              </a>
            </div>
          </div>
          <?php endif; ?>
          
          <!-- Location -->
          <div style="display: flex; align-items: start; gap: 1rem;">
            <div style="width: 42px; height: 42px; border-radius: 10px; background: #EEF2FF; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#3b82f6" stroke-width="2">
                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/>
                <circle cx="12" cy="10" r="3"/>
              </svg>
            </div>
            <div>
              <div style="font-size: 0.75rem; font-weight: 600; color: var(--text-muted); text-transform: uppercase; letter-spacing: 0.05em; margin-bottom: 0.3rem;">LOCATION</div>
              <span style="font-weight: 500; color: var(--text-main); font-size: 0.95rem;">
                <?php echo esc_html(cyber_portfolio_get('location', 'Manchester, UK')); ?>
              </span>
            </div>
          </div>
        </div>
        
        <!-- Availability Badge -->
        <div style="margin-top: 1.5rem; padding: 1rem; background: linear-gradient(135deg, #EEF2FF 0%, #E0E7FF 100%); border-radius: 12px; border: 2px solid var(--accent);">
          <div style="display: flex; align-items: center; gap: 0.75rem;">
            <div style="width: 10px; height: 10px; border-radius: 50%; background: var(--accent); animation: pulse 2s infinite;"></div>
            <span style="font-weight: 600; color: var(--accent); font-size: 0.9rem;">Open to remote opportunities</span>
          </div>
        </div>
      </div>
      
      <!-- What I am Looking For Card -->
      <div style="background: var(--card-bg); border: 1px solid var(--border-subtle); border-radius: 16px; padding: 2rem; box-shadow: var(--card-shadow);">
        <h3 style="font-size: 1.15rem; margin-bottom: 1rem; color: var(--text-main);">What I am Looking For</h3>
        <p style="font-size: 0.9rem; color: var(--text-muted); line-height: 1.7; margin: 0;">
          <?php echo esc_html(cyber_portfolio_get('contact_looking_for', 'Junior cyber security or SOC analyst roles where I can apply my Azure and SIEM skills. I am particularly interested in positions that value hands-on lab experience and clear documentation. Part-time or remote arrangements preferred, but flexible for the right opportunity.')); ?>
        </p>
      </div>
    </div>
    
    <!-- RIGHT COLUMN: Contact Form -->
    <div class="contact-right" style="display: flex; flex-direction: column; height: 100%;">
      <div style="background: var(--card-bg); border: 1px solid var(--border-subtle); border-radius: 16px; padding: 2.5rem; box-shadow: var(--card-shadow); display: flex; flex-direction: column; height: 100%;">
        <h3 style="font-size: 1.25rem; margin-bottom: 0.5rem; color: var(--text-main);">Send Me a Message</h3>
        <p style="font-size: 0.9rem; color: var(--text-muted); margin-bottom: 2rem;">
          Whether you want to discuss a project, schedule a call, or just say hello, I would love to hear from you.
        </p>
        
        <div style="flex: 1; display: flex; flex-direction: column;">
        <?php 
        $shortcode = cyber_portfolio_get('contact_form_shortcode');
        if ($shortcode):
          // Display the form shortcode (Contact Form 7 or WPForms)
          echo do_shortcode($shortcode);
        else:
          // Show instructions if no shortcode is set
        ?>
        <div style="padding: 2rem; background: #FFF9E6; border: 2px dashed #F59E0B; border-radius: 12px; text-align: center; flex: 1; display: flex; flex-direction: column; justify-content: center;">
          <div style="font-size: 2rem; margin-bottom: 1rem;">📝</div>
          <h4 style="font-size: 1.1rem; color: #92400E; margin-bottom: 0.75rem;">Contact Form Not Set Up Yet</h4>
          <p style="font-size: 0.9rem; color: #78350F; line-height: 1.6; margin-bottom: 1.5rem;">
            To add a working contact form:
          </p>
          <ol style="text-align: left; max-width: 400px; margin: 0 auto 1.5rem; color: #78350F; font-size: 0.85rem;">
            <li style="margin-bottom: 0.5rem;">Install <strong>Contact Form 7</strong> or <strong>WPForms</strong> plugin</li>
            <li style="margin-bottom: 0.5rem;">Create a new form in the plugin</li>
            <li style="margin-bottom: 0.5rem;">Copy the form shortcode</li>
            <li style="margin-bottom: 0.5rem;">Go to <strong>Portfolio Content → Contact</strong> tab</li>
            <li>Paste shortcode in "Form Shortcode" field</li>
          </ol>
          <a href="<?php echo admin_url('admin.php?page=cyber-portfolio-content&tab=contact'); ?>" style="display: inline-block; padding: 0.75rem 1.5rem; background: #F59E0B; color: white; border-radius: 8px; font-weight: 600; font-size: 0.9rem; text-decoration: none;">
            Go to Contact Settings →
          </a>
        </div>
        <?php endif; ?>
        </div>
      </div>
    </div>
    
  </div>
</main>

<style>
@keyframes pulse {
  0%, 100% { opacity: 1; }
  50% { opacity: 0.5; }
}

/* Contact Form Height Matching */
.contact-right .wpcf7-form {
  display: flex;
  flex-direction: column;
  height: 100%;
}

.contact-right .wpcf7-form .cf7-textarea {
  flex: 1;
  min-height: 200px;
}

/* Better form field spacing */
.contact-right .wpcf7-form label {
  margin-bottom: 1.5rem;
}

.contact-right .wpcf7-form label:last-of-type {
  flex: 1;
  display: flex;
  flex-direction: column;
}

@media (max-width: 768px) {
  .contact-container {
    grid-template-columns: 1fr !important;
    gap: 2rem !important;
  }
}
</style>

<?php get_footer(); ?>
