<?php
/**
 * Home Tab - Admin Interface
 * Uses: cyber_data[key] naming for separate database saves
 */

if (!defined('ABSPATH')) exit;

$get = function($key, $default = '') use ($data) {
    return isset($data[$key]) && !empty($data[$key]) ? $data[$key] : $default;
};
?>

<h2>🏠 Homepage Content</h2>

<h3>Hero Section</h3>
<table class="form-table">
    <tr>
        <th><label>Small Tag (above title)</label></th>
        <td><input type="text" name="cyber_data[hero_tag]" value="<?php echo esc_attr($get('hero_tag', 'Welcome to my portfolio')); ?>" class="regular-text"></td>
    </tr>
    <tr>
        <th><label>Main Title</label></th>
        <td><input type="text" name="cyber_data[hero_title]" value="<?php echo esc_attr($get('hero_title', 'CYBER SECURITY ANALYST')); ?>" class="large-text"></td>
    </tr>
    <tr>
        <th><label>Subtitle</label></th>
        <td><input type="text" name="cyber_data[hero_sub]" value="<?php echo esc_attr($get('hero_sub', 'Protecting digital assets through proactive security measures')); ?>" class="large-text"></td>
    </tr>
    <tr>
        <th><label>Status Badge</label></th>
        <td><input type="text" name="cyber_data[hero_badge]" value="<?php echo esc_attr($get('hero_badge', '✓ Available for hire')); ?>" class="regular-text"></td>
    </tr>
    <tr>
        <th><label>Hero Image URL</label></th>
        <td><input type="url" name="cyber_data[hero_img]" value="<?php echo esc_url($get('hero_img')); ?>" class="large-text" placeholder="https://example.com/image.jpg"></td>
    </tr>
    <tr>
        <th><label>CV/Resume URL</label></th>
        <td><input type="url" name="cyber_data[cv_url]" value="<?php echo esc_url($get('cv_url')); ?>" class="large-text" placeholder="https://example.com/your-cv.pdf"></td>
    </tr>
</table>

<h3>Stats Section (3 stats)</h3>
<table class="form-table">
    <?php for ($i = 1; $i <= 3; $i++): ?>
    <tr>
        <th><label>Stat <?php echo $i; ?> Number</label></th>
        <td>
            <input type="text" name="cyber_data[stat<?php echo $i; ?>_num]" value="<?php echo esc_attr($get('stat'.$i.'_num', '50+')); ?>" class="small-text">
            <input type="text" name="cyber_data[stat<?php echo $i; ?>_label]" value="<?php echo esc_attr($get('stat'.$i.'_label', 'Projects')); ?>" class="regular-text" placeholder="Label">
        </td>
    </tr>
    <?php endfor; ?>
</table>

<h3>About Teaser (homepage only)</h3>
<table class="form-table">
    <tr>
        <th><label>Short Bio Teaser</label></th>
        <td><textarea name="cyber_data[about_teaser]" rows="4" class="large-text"><?php echo esc_textarea($get('about_teaser', 'I\'m a cybersecurity professional specializing in threat detection and security operations.')); ?></textarea></td>
    </tr>
</table>
