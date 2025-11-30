<?php
/**
 * Portfolio Tab - Admin Interface
 * Uses: cyber_data[key] naming for separate database saves
 */

if (!defined('ABSPATH')) exit;

$get = function($key, $default = '') use ($data) {
    return isset($data[$key]) && !empty($data[$key]) ? $data[$key] : $default;
};
?>

<h2>🎨 Portfolio Page Content</h2>

<h3>Page Header</h3>
<table class="form-table">
    <tr>
        <th><label>Label (small text above title)</label></th>
        <td><input type="text" name="cyber_data[portfolio_label]" value="<?php echo esc_attr($get('portfolio_label', 'PORTFOLIO')); ?>" class="regular-text"></td>
    </tr>
    <tr>
        <th><label>Page Title</label></th>
        <td><input type="text" name="cyber_data[portfolio_title]" value="<?php echo esc_attr($get('portfolio_title', 'My Work')); ?>" class="large-text"></td>
    </tr>
    <tr>
        <th><label>Subtitle</label></th>
        <td><input type="text" name="cyber_data[portfolio_sub]" value="<?php echo esc_attr($get('portfolio_sub', 'A collection of security tools, scripts, and documentation')); ?>" class="large-text"></td>
    </tr>
</table>

<hr>

<p><strong>💡 Icon Options:</strong> 🔒 🔐 🛡️ 🔑 📊 📈 🔍 💻 🌐 📝 🚀 ⚙️ 🎯 📁 🔧</p>

<?php for ($i = 1; $i <= 9; $i++): ?>
    <h3>Item <?php echo $i; ?></h3>
    <table class="form-table">
        <tr>
            <th><label>Icon (emoji)</label></th>
            <td><input type="text" name="cyber_data[port_<?php echo $i; ?>_icon]" value="<?php echo esc_attr($get('port_'.$i.'_icon', '🔒')); ?>" class="small-text" maxlength="4"></td>
        </tr>
        <tr>
            <th><label>Title</label></th>
            <td><input type="text" name="cyber_data[port_<?php echo $i; ?>_title]" value="<?php echo esc_attr($get('port_'.$i.'_title', 'Portfolio Item '.$i)); ?>" class="large-text"></td>
        </tr>
        <tr>
            <th><label>Description</label></th>
            <td><textarea name="cyber_data[port_<?php echo $i; ?>_desc]" rows="3" class="large-text"><?php echo esc_textarea($get('port_'.$i.'_desc', 'Brief description of this item...')); ?></textarea></td>
        </tr>
        <tr>
            <th><label>Tags (comma-separated)</label></th>
            <td><input type="text" name="cyber_data[port_<?php echo $i; ?>_tags]" value="<?php echo esc_attr($get('port_'.$i.'_tags', 'Python, Security, Automation')); ?>" class="large-text"></td>
        </tr>
        <tr>
            <th><label>Link URL</label></th>
            <td><input type="url" name="cyber_data[port_<?php echo $i; ?>_link]" value="<?php echo esc_url($get('port_'.$i.'_link')); ?>" class="large-text" placeholder="https://github.com/..."></td>
        </tr>
    </table>
    <hr>
<?php endfor; ?>
