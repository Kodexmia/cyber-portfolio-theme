<?php
/**
 * About Tab - Admin Interface
 * Uses: cyber_data[key] naming for separate database saves
 */

if (!defined('ABSPATH')) exit;

$get = function($key, $default = '') use ($data) {
    return isset($data[$key]) && !empty($data[$key]) ? $data[$key] : $default;
};
?>

<h2>👤 About Page Content</h2>

<h3>Page Header</h3>
<table class="form-table">
    <tr>
        <th><label>Page Title</label></th>
        <td><input type="text" name="cyber_data[about_title]" value="<?php echo esc_attr($get('about_title', 'About Me')); ?>" class="large-text"></td>
    </tr>
    <tr>
        <th><label>Subtitle</label></th>
        <td><input type="text" name="cyber_data[about_sub]" value="<?php echo esc_attr($get('about_sub', 'My journey in cybersecurity')); ?>" class="large-text"></td>
    </tr>
</table>

<h3>Biography</h3>
<table class="form-table">
    <tr>
        <th><label>Full Bio</label></th>
        <td><textarea name="cyber_data[about_bio]" rows="10" class="large-text"><?php echo esc_textarea($get('about_bio', 'Write your full biography here...')); ?></textarea></td>
    </tr>
</table>

<h3>Quick Facts (4 items)</h3>
<table class="form-table">
    <?php for ($i = 1; $i <= 4; $i++): ?>
    <tr>
        <th><label>Fact <?php echo $i; ?></label></th>
        <td><input type="text" name="cyber_data[fact_<?php echo $i; ?>]" value="<?php echo esc_attr($get('fact_'.$i, 'Interesting fact '.$i)); ?>" class="large-text"></td>
    </tr>
    <?php endfor; ?>
</table>

<h3>Highlights (4 items)</h3>
<?php for ($i = 1; $i <= 4; $i++): ?>
    <h4>Highlight <?php echo $i; ?></h4>
    <table class="form-table">
        <tr>
            <th><label>Title</label></th>
            <td><input type="text" name="cyber_data[highlight_<?php echo $i; ?>_title]" value="<?php echo esc_attr($get('highlight_'.$i.'_title', 'Highlight '.$i)); ?>" class="large-text"></td>
        </tr>
        <tr>
            <th><label>Description</label></th>
            <td><textarea name="cyber_data[highlight_<?php echo $i; ?>_desc]" rows="3" class="large-text"><?php echo esc_textarea($get('highlight_'.$i.'_desc', 'Description for highlight '.$i)); ?></textarea></td>
        </tr>
    </table>
<?php endfor; ?>

<h3>Skills (4 categories)</h3>
<?php for ($i = 1; $i <= 4; $i++): ?>
    <h4>Skill Category <?php echo $i; ?></h4>
    <table class="form-table">
        <tr>
            <th><label>Category Name</label></th>
            <td><input type="text" name="cyber_data[skill_cat_<?php echo $i; ?>]" value="<?php echo esc_attr($get('skill_cat_'.$i, 'Category '.$i)); ?>" class="regular-text"></td>
        </tr>
        <tr>
            <th><label>Skills (comma-separated)</label></th>
            <td><input type="text" name="cyber_data[skill_tags_<?php echo $i; ?>]" value="<?php echo esc_attr($get('skill_tags_'.$i, 'Skill 1, Skill 2, Skill 3')); ?>" class="large-text" placeholder="Python, Linux, Wireshark"></td>
        </tr>
    </table>
<?php endfor; ?>
