<?php
/**
 * Cyber Security Portfolio Theme Functions V2.3.1
 * ROBUST DATABASE SYSTEM - Separate saves per tab
 */

if (!defined('ABSPATH')) exit;

// Theme Setup
function cyber_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    register_nav_menus(array('primary' => 'Primary Menu'));
}
add_action('after_setup_theme', 'cyber_setup');

// Enqueue Styles and Scripts
function cyber_scripts() {
    wp_enqueue_style('cyber-fonts', 'https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap');
    wp_enqueue_style('cyber-style', get_stylesheet_uri(), array(), '2.3.3');
    
    // Enqueue jQuery (WordPress includes it)
    wp_enqueue_script('jquery');
    
    // Add mobile menu script
    $mobile_menu_script = "
    jQuery(document).ready(function(\$) {
        // Mobile menu toggle
        \$('.mobile-menu-toggle').on('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            \$(this).toggleClass('active');
            \$('.main-nav').toggleClass('active');
            \$('body').toggleClass('menu-open');
            
            // Update aria-expanded
            var expanded = \$(this).attr('aria-expanded') === 'true';
            \$(this).attr('aria-expanded', !expanded);
        });
        
        // Close menu when clicking nav links
        \$('.main-nav a').on('click', function() {
            \$('.mobile-menu-toggle').removeClass('active');
            \$('.main-nav').removeClass('active');
            \$('body').removeClass('menu-open');
            \$('.mobile-menu-toggle').attr('aria-expanded', 'false');
        });
        
        // Close menu when clicking outside
        \$(document).on('click', function(e) {
            if (!\$(e.target).closest('.nav-inner').length && \$('.main-nav').hasClass('active')) {
                \$('.mobile-menu-toggle').removeClass('active');
                \$('.main-nav').removeClass('active');
                \$('body').removeClass('menu-open');
                \$('.mobile-menu-toggle').attr('aria-expanded', 'false');
            }
        });
        
        // Prevent menu close when clicking inside nav
        \$('.nav-inner').on('click', function(e) {
            e.stopPropagation();
        });
    });
    ";
    
    wp_add_inline_script('jquery', $mobile_menu_script);
}
add_action('wp_enqueue_scripts', 'cyber_scripts');

// CUSTOMIZER - Colors
function cyber_customize_register($wp_customize) {
    $wp_customize->add_section('cyber_colors', array('title' => '🎨 Theme Colors', 'priority' => 30));
    
    $colors = array(
        'cyber_accent' => array('#3b82f6', 'Accent Color'),
        'cyber_text' => array('#2c3e50', 'Text Color'),
        'cyber_bg' => array('#f8f9fa', 'Background Color')
    );
    
    foreach ($colors as $id => $data) {
        $wp_customize->add_setting($id, array('default' => $data[0], 'sanitize_callback' => 'sanitize_hex_color'));
        $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, $id, array(
            'label' => $data[1],
            'section' => 'cyber_colors'
        )));
    }
}
add_action('customize_register', 'cyber_customize_register');

// Inject custom colors
function cyber_customizer_css() {
    ?>
    <style>
    :root {
        --accent: <?php echo get_theme_mod('cyber_accent', '#3b82f6'); ?>;
        --text-main: <?php echo get_theme_mod('cyber_text', '#2c3e50'); ?>;
        --bg-main: <?php echo get_theme_mod('cyber_bg', '#f8f9fa'); ?>;
    }
    </style>
    <?php
}
add_action('wp_head', 'cyber_customizer_css');

// MIGRATION: Convert old single option to new separate options
function cyber_migrate_to_separate_options() {
    // Check if migration already done
    if (get_option('cyber_migration_done')) {
        return;
    }
    
    // Get old data
    $old_data = get_option('cyber_content', array());
    
    if (empty($old_data)) {
        // No old data to migrate
        update_option('cyber_migration_done', true);
        return;
    }
    
    // Define which keys belong to which tab
    $tab_mappings = array(
        'home' => array('hero_tag', 'hero_title', 'hero_sub', 'hero_badge', 'hero_img', 'cv_url', 'about_teaser'),
        'about' => array('about_title', 'about_sub', 'about_bio'),
        'projects' => array('projects_label', 'projects_title', 'projects_sub'),
        'portfolio' => array('portfolio_label', 'portfolio_title', 'portfolio_sub'),
        'certs' => array('certs_label', 'certs_title', 'certs_sub', 'learning_title', 'learning_intro'),
        'contact' => array('contact_intro', 'email', 'linkedin', 'github', 'location', 'contact_form_shortcode', 'contact_looking_for')
    );
    
    // Add dynamic keys
    for ($i = 1; $i <= 3; $i++) {
        $tab_mappings['home'][] = 'stat'.$i.'_num';
        $tab_mappings['home'][] = 'stat'.$i.'_label';
    }
    
    for ($i = 1; $i <= 4; $i++) {
        $tab_mappings['about'][] = 'fact_'.$i;
        $tab_mappings['about'][] = 'highlight_'.$i.'_title';
        $tab_mappings['about'][] = 'highlight_'.$i.'_desc';
        $tab_mappings['about'][] = 'skill_cat_'.$i;
        $tab_mappings['about'][] = 'skill_tags_'.$i;
    }
    
    for ($i = 1; $i <= 6; $i++) {
        foreach (array('title', 'cat', 'desc', 'challenge', 'solution', 'outcome', 'tools', 'duration', 'status') as $field) {
            $tab_mappings['projects'][] = 'proj_'.$i.'_'.$field;
        }
    }
    
    for ($i = 1; $i <= 9; $i++) {
        foreach (array('icon', 'title', 'desc', 'tags', 'link') as $field) {
            $tab_mappings['portfolio'][] = 'port_'.$i.'_'.$field;
        }
    }
    
    for ($i = 1; $i <= 6; $i++) {
        foreach (array('title', 'status', 'meta', 'desc', 'skills') as $field) {
            $tab_mappings['certs'][] = 'cert_'.$i.'_'.$field;
        }
    }
    
    for ($i = 1; $i <= 4; $i++) {
        $tab_mappings['certs'][] = 'learn_'.$i.'_title';
        $tab_mappings['certs'][] = 'learn_'.$i.'_desc';
    }
    
    // Migrate data to new options
    foreach ($tab_mappings as $tab => $keys) {
        $tab_data = array();
        foreach ($keys as $key) {
            if (isset($old_data[$key])) {
                $tab_data[$key] = $old_data[$key];
            }
        }
        if (!empty($tab_data)) {
            update_option('cyber_content_'.$tab, $tab_data);
        }
    }
    
    // Mark migration as done
    update_option('cyber_migration_done', true);
    
    // Keep old option as backup (don't delete it)
    update_option('cyber_content_backup', $old_data);
}
add_action('admin_init', 'cyber_migrate_to_separate_options');

// Helper function - now checks tab-specific options
function cyber_portfolio_get($key, $default = '') {
    // Determine which tab this key belongs to
    $tab = cyber_get_tab_for_key($key);
    
    if ($tab) {
        $data = get_option('cyber_content_'.$tab, array());
        return isset($data[$key]) && !empty($data[$key]) ? $data[$key] : $default;
    }
    
    // Fallback to old single option for backward compatibility
    $old_data = get_option('cyber_content', array());
    return isset($old_data[$key]) && !empty($old_data[$key]) ? $old_data[$key] : $default;
}

// Determine which tab a key belongs to
function cyber_get_tab_for_key($key) {
    $tab_patterns = array(
        'home' => array('hero_', 'stat', 'about_teaser', 'cv_url'),
        'about' => array('about_', 'fact_', 'highlight_', 'skill_'),
        'projects' => array('proj_', 'projects_'),
        'portfolio' => array('port_', 'portfolio_'),
        'certs' => array('cert_', 'learn_', 'certs_', 'learning_'),
        'contact' => array('contact_', 'email', 'linkedin', 'github', 'location')
    );
    
    foreach ($tab_patterns as $tab => $patterns) {
        foreach ($patterns as $pattern) {
            if (strpos($key, $pattern) === 0 || $key === $pattern) {
                return $tab;
            }
        }
    }
    
    return null;
}

// Navigation
function cyber_nav_menu() {
    $pages = array('home' => 'Home', 'about' => 'About', 'projects' => 'Projects', 'portfolio' => 'Portfolio', 'certs' => 'Certifications', 'contact' => 'Contact');
    echo '<ul>';
    foreach ($pages as $slug => $title) {
        $current = (trim($_SERVER['REQUEST_URI'], '/') == $slug || ($slug == 'home' && trim($_SERVER['REQUEST_URI'], '/') == '')) ? ' class="current"' : '';
        $url = ($slug == 'home') ? home_url('/') : home_url('/' . $slug);
        echo '<li><a href="' . esc_url($url) . '"' . $current . '>' . esc_html($title) . '</a></li>';
    }
    // Add blog link if posts page is set
    $blog_page_id = get_option('page_for_posts');
    if ($blog_page_id) {
        $blog_url = get_permalink($blog_page_id);
        $is_blog = is_home() || is_archive() || is_single();
        $current = $is_blog ? ' class="current"' : '';
        echo '<li><a href="' . esc_url($blog_url) . '"' . $current . '>Blog</a></li>';
    }
    echo '</ul>';
}

// ADMIN MENU
function cyber_add_admin_menu() {
    add_menu_page('Portfolio Content', 'Portfolio Content', 'manage_options', 'cyber-portfolio-content', 'cyber_content_page', 'dashicons-id-alt', 2);
}
add_action('admin_menu', 'cyber_add_admin_menu');

// Handle form submission
function cyber_handle_content_save() {
    // Check if this is our form submission
    if (!isset($_POST['cyber_save_content']) || !isset($_POST['cyber_tab'])) {
        return;
    }
    
    // Verify nonce
    if (!isset($_POST['cyber_nonce']) || !wp_verify_nonce($_POST['cyber_nonce'], 'cyber_save_content')) {
        wp_die('Security check failed');
    }
    
    // Check user permissions
    if (!current_user_can('manage_options')) {
        wp_die('Unauthorized');
    }
    
    $tab = sanitize_key($_POST['cyber_tab']);
    $option_name = 'cyber_content_'.$tab;
    
    // Get submitted data
    $data = isset($_POST['cyber_data']) ? $_POST['cyber_data'] : array();
    
    // Sanitize all data
    $sanitized_data = array();
    foreach ($data as $key => $value) {
        $key = sanitize_key($key);
        if (is_array($value)) {
            $sanitized_data[$key] = array_map('sanitize_textarea_field', $value);
        } else {
            $sanitized_data[$key] = sanitize_textarea_field($value);
        }
    }
    
    // Save to database
    update_option($option_name, $sanitized_data);
    
    // Redirect with success message
    wp_redirect(add_query_arg(array(
        'page' => 'cyber-portfolio-content',
        'tab' => $tab,
        'saved' => 'true',
        'time' => current_time('timestamp')
    ), admin_url('admin.php')));
    exit;
}
add_action('admin_init', 'cyber_handle_content_save');

// ADMIN PAGE
function cyber_content_page() {
    $tab = isset($_GET['tab']) ? sanitize_key($_GET['tab']) : 'home';
    $option_name = 'cyber_content_'.$tab;
    $data = get_option($option_name, array());
    
    ?>
    <div class="wrap">
        <h1>📝 Portfolio Content Editor</h1>
        
        <?php
        // Show success message
        if (isset($_GET['saved']) && $_GET['saved'] == 'true') {
            $save_time = isset($_GET['time']) ? date('g:i A', intval($_GET['time'])) : date('g:i A');
            echo '<div class="notice notice-success is-dismissible">
                <p><strong>✅ ' . ucfirst($tab) . ' tab saved successfully!</strong> Last saved at ' . $save_time . '</p>
            </div>';
        }
        ?>
        
        <div class="notice notice-info">
            <p><strong>✨ NEW: Robust Database System!</strong> Each tab now saves independently. No more data loss between tabs!</p>
        </div>
        
        <p style="background:#e0f2fe; padding:10px; border-radius:5px; border:1px solid #bae6fd;">
            <strong>💡 Tip:</strong> Each tab saves separately - you can safely edit and save any tab without affecting others. <strong>Colors:</strong> <a href="<?php echo admin_url('customize.php'); ?>">Appearance → Customize → Theme Colors</a>
        </p>
        
        <h2 class="nav-tab-wrapper">
            <?php 
            $tabs = array('home' => 'Home', 'about' => 'About', 'projects' => 'Projects', 'portfolio' => 'Portfolio', 'certs' => 'Certs', 'contact' => 'Contact');
            foreach ($tabs as $slug => $label) {
                $active = ($tab == $slug) ? 'nav-tab-active' : '';
                echo '<a href="?page=cyber-portfolio-content&tab=' . $slug . '" class="nav-tab ' . $active . '">' . $label . '</a>';
            }
            ?>
        </h2>
        
        <form method="post" action="">
            <?php wp_nonce_field('cyber_save_content', 'cyber_nonce'); ?>
            <input type="hidden" name="cyber_save_content" value="1">
            <input type="hidden" name="cyber_tab" value="<?php echo esc_attr($tab); ?>">
            
            <div style="background:#fff; padding:20px; margin-top:20px; max-width:1200px;">
                
                <?php
                // Include the appropriate tab content
                switch ($tab) {
                    case 'home':
                        include(get_template_directory() . '/admin-tabs/home.php');
                        break;
                    case 'about':
                        include(get_template_directory() . '/admin-tabs/about.php');
                        break;
                    case 'projects':
                        include(get_template_directory() . '/admin-tabs/projects.php');
                        break;
                    case 'portfolio':
                        include(get_template_directory() . '/admin-tabs/portfolio.php');
                        break;
                    case 'certs':
                        include(get_template_directory() . '/admin-tabs/certs.php');
                        break;
                    case 'contact':
                        include(get_template_directory() . '/admin-tabs/contact.php');
                        break;
                }
                ?>
                
            </div>
            
            <?php submit_button('💾 Save ' . ucfirst($tab) . ' Tab', 'primary large'); ?>
        </form>
    </div>
    
    <script>
    // Warn when leaving page with unsaved changes
    let formChanged = false;
    const inputs = document.querySelectorAll('input, textarea, select');
    inputs.forEach(input => {
        input.addEventListener('change', () => {
            formChanged = true;
        });
    });
    
    window.addEventListener('beforeunload', function(e) {
        if (formChanged) {
            e.preventDefault();
            e.returnValue = 'You have unsaved changes. Are you sure you want to leave?';
            return e.returnValue;
        }
    });
    
    // Reset flag when form is submitted
    const form = document.querySelector('form');
    if (form) {
        form.addEventListener('submit', () => {
            formChanged = false;
        });
    }
    </script>
    <?php
}
?>
