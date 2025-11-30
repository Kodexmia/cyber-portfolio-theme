<?php
/**
 * Single post template
 */
get_header();
?>

<main>
  <?php while (have_posts()): the_post(); ?>
  
  <article style="max-width: 800px; margin: 0 auto;">
    <!-- Post Header -->
    <header style="margin-bottom: 2.5rem; text-align: center;">
      <div style="display: flex; justify-content: center; gap: 1rem; font-size: 0.85rem; color: var(--text-muted); margin-bottom: 1rem;">
        <span><?php echo get_the_date(); ?></span>
        <span>•</span>
        <span><?php the_category(', '); ?></span>
      </div>
      
      <h1 style="font-size: 2rem; line-height: 1.3; margin-bottom: 1rem; color: var(--text-main);">
        <?php the_title(); ?>
      </h1>
      
      <div style="font-size: 0.9rem; color: var(--text-muted);">
        By <?php the_author(); ?>
      </div>
    </header>
    
    <!-- Featured Image -->
    <?php if (has_post_thumbnail()): ?>
    <div style="margin-bottom: 2.5rem; border-radius: 16px; overflow: hidden;">
      <?php the_post_thumbnail('large', array('style' => 'width: 100%; height: auto;')); ?>
    </div>
    <?php endif; ?>
    
    <!-- Post Content -->
    <div style="background: var(--card-bg); border: 1px solid var(--border-subtle); border-radius: 16px; padding: 2.5rem; box-shadow: var(--card-shadow); line-height: 1.8; color: var(--text-main);">
      <?php the_content(); ?>
    </div>
    
    <!-- Post Footer -->
    <footer style="margin-top: 2rem; padding-top: 2rem; border-top: 1px solid var(--border-subtle); display: flex; justify-content: space-between; align-items: center;">
      <div>
        <?php the_tags('<div style="display: flex; gap: 0.5rem; flex-wrap: wrap;">', '', '</div>'); ?>
      </div>
      <a href="<?php echo get_permalink(get_page_by_path('blog')); ?>" style="color: var(--accent); font-weight: 500; font-size: 0.9rem;">
        ← Back to Blog
      </a>
    </footer>
    
    <!-- Post Navigation -->
    <div style="margin-top: 3rem; display: grid; grid-template-columns: 1fr 1fr; gap: 1.5rem;">
      <?php
      $prev_post = get_previous_post();
      $next_post = get_next_post();
      ?>
      
      <?php if ($prev_post): ?>
      <a href="<?php echo get_permalink($prev_post); ?>" style="background: var(--card-bg); border: 1px solid var(--border-subtle); border-radius: 12px; padding: 1.5rem; text-decoration: none; transition: all 0.2s;">
        <div style="font-size: 0.75rem; color: var(--text-muted); text-transform: uppercase; margin-bottom: 0.5rem;">← Previous</div>
        <div style="font-weight: 600; color: var(--text-main);"><?php echo get_the_title($prev_post); ?></div>
      </a>
      <?php else: ?>
      <div></div>
      <?php endif; ?>
      
      <?php if ($next_post): ?>
      <a href="<?php echo get_permalink($next_post); ?>" style="background: var(--card-bg); border: 1px solid var(--border-subtle); border-radius: 12px; padding: 1.5rem; text-decoration: none; text-align: right; transition: all 0.2s;">
        <div style="font-size: 0.75rem; color: var(--text-muted); text-transform: uppercase; margin-bottom: 0.5rem;">Next →</div>
        <div style="font-weight: 600; color: var(--text-main);"><?php echo get_the_title($next_post); ?></div>
      </a>
      <?php endif; ?>
    </div>
  </article>
  
  <?php endwhile; ?>
</main>

<style>
/* Style post content */
.single article p {
  margin-bottom: 1.5rem;
}

.single article h2,
.single article h3,
.single article h4 {
  margin-top: 2rem;
  margin-bottom: 1rem;
  color: var(--text-main);
}

.single article img {
  border-radius: 8px;
  max-width: 100%;
  height: auto;
}

.single article code {
  background: var(--bg-main);
  padding: 0.2rem 0.4rem;
  border-radius: 4px;
  font-size: 0.9em;
}

.single article pre {
  background: var(--bg-main);
  padding: 1rem;
  border-radius: 8px;
  overflow-x: auto;
  margin-bottom: 1.5rem;
}
</style>

<?php get_footer(); ?>
