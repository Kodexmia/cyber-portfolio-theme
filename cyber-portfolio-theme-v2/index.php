<?php
/**
 * Main template file (fallback)
 * Displays blog posts when set as Posts page
 */
get_header();
?>

<main>
  <?php if (have_posts()): ?>
    
    <!-- Blog Archive View -->
    <div class="page-header" style="text-align: center; margin-bottom: 3rem;">
      <div class="section-label">BLOG</div>
      <h1 class="page-title">Lab notes and learning updates</h1>
      <p class="page-subtitle">
        Quick write-ups, troubleshooting notes, and documentation from my homelab projects.
      </p>
    </div>

    <div class="blog-posts" style="max-width: 800px; margin: 0 auto;">
      <?php while (have_posts()): the_post(); ?>
        <article style="background: var(--card-bg); border: 1px solid var(--border-subtle); border-radius: 16px; padding: 2rem; margin-bottom: 1.5rem; box-shadow: var(--card-shadow);">
          <div style="display: flex; gap: 1rem; font-size: 0.8rem; color: var(--text-muted); margin-bottom: 0.8rem;">
            <span><?php echo get_the_date(); ?></span>
            <span>•</span>
            <span><?php the_category(', '); ?></span>
          </div>
          
          <h2 style="font-size: 1.4rem; margin-bottom: 0.8rem; line-height: 1.4;">
            <a href="<?php the_permalink(); ?>" style="color: var(--text-main); text-decoration: none;">
              <?php the_title(); ?>
            </a>
          </h2>
          
          <div style="color: var(--text-muted); line-height: 1.7; margin-bottom: 1rem;">
            <?php the_excerpt(); ?>
          </div>
          
          <a href="<?php the_permalink(); ?>" style="color: var(--accent); font-weight: 500; font-size: 0.9rem;">
            Read more →
          </a>
        </article>
      <?php endwhile; ?>
      
      <!-- Pagination -->
      <?php
      the_posts_pagination(array(
          'prev_text' => '← Previous',
          'next_text' => 'Next →',
      ));
      ?>
    </div>
    
  <?php else: ?>
    
    <!-- No Posts View -->
    <div class="page-header" style="text-align: center; margin-bottom: 3rem;">
      <div class="section-label">BLOG</div>
      <h1 class="page-title">Lab notes and learning updates</h1>
      <p class="page-subtitle">
        Quick write-ups, troubleshooting notes, and documentation from my homelab projects.
      </p>
    </div>
    
    <div style="max-width: 800px; margin: 0 auto;">
      <div style="background: var(--card-bg); border: 1px solid var(--border-subtle); border-radius: 16px; padding: 3rem; text-align: center; box-shadow: var(--card-shadow);">
        <p style="color: var(--text-muted); font-size: 0.95rem;">
          📝 No blog posts yet. Create your first post in <strong>Posts → Add New</strong> to get started!
        </p>
      </div>
    </div>
    
  <?php endif; ?>
</main>

<?php get_footer(); ?>
