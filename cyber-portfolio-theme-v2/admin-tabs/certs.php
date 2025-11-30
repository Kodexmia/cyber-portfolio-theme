<?php
/**
 * Certifications Tab - Admin Interface
 * Uses: cyber_data[key] naming for separate database saves
 */

if (!defined('ABSPATH')) exit;

$get = function($key, $default = '') use ($data) {
    return isset($data[$key]) && !empty($data[$key]) ? $data[$key] : $default;
};
?>

<h2>🎓 Certifications Page Content</h2>

<h3>Page Header</h3>
<table class="form-table">
    <tr>
        <th><label>Label (small text above title)</label></th>
        <td><input type="text" name="cyber_data[certs_label]" value="<?php echo esc_attr($get('certs_label', 'CREDENTIALS')); ?>" class="regular-text"></td>
    </tr>
    <tr>
        <th><label>Page Title</label></th>
        <td><input type="text" name="cyber_data[certs_title]" value="<?php echo esc_attr($get('certs_title', 'Certifications & Credentials')); ?>" class="large-text"></td>
    </tr>
    <tr>
        <th><label>Subtitle</label></th>
        <td><input type="text" name="cyber_data[certs_sub]" value="<?php echo esc_attr($get('certs_sub', 'Professional certifications and continuous learning')); ?>" class="large-text"></td>
    </tr>
</table>

<hr>

<?php for ($i = 1; $i <= 6; $i++): ?>
    <h3>🏆 Certification <?php echo $i; ?></h3>
    <table class="form-table">
        <tr>
            <th><label>Title</label></th>
            <td><input type="text" name="cyber_data[cert_<?php echo $i; ?>_title]" value="<?php echo esc_attr($get('cert_'.$i.'_title', 'Certification Title '.$i)); ?>" class="large-text"></td>
        </tr>
        <tr>
            <th><label>Status Badge</label></th>
            <td>
                <select name="cyber_data[cert_<?php echo $i; ?>_status]">
                    <option value="Completed" <?php selected($get('cert_'.$i.'_status', 'Completed'), 'Completed'); ?>>✓ Completed</option>
                    <option value="In Progress" <?php selected($get('cert_'.$i.'_status'), 'In Progress'); ?>>⏳ In Progress</option>
                    <option value="Planned" <?php selected($get('cert_'.$i.'_status'), 'Planned'); ?>>📋 Planned</option>
                </select>
            </td>
        </tr>
        <tr>
            <th><label>Meta Info (Issuer • Date)</label></th>
            <td><input type="text" name="cyber_data[cert_<?php echo $i; ?>_meta]" value="<?php echo esc_attr($get('cert_'.$i.'_meta', 'CompTIA • 2024')); ?>" class="large-text" placeholder="CompTIA • January 2024"></td>
        </tr>
        <tr>
            <th><label>Description</label></th>
            <td><textarea name="cyber_data[cert_<?php echo $i; ?>_desc]" rows="3" class="large-text"><?php echo esc_textarea($get('cert_'.$i.'_desc', 'Brief description of this certification...')); ?></textarea></td>
        </tr>
        <tr>
            <th><label>Skills Gained (comma-separated)</label></th>
            <td><input type="text" name="cyber_data[cert_<?php echo $i; ?>_skills]" value="<?php echo esc_attr($get('cert_'.$i.'_skills', 'Network Security, Threat Analysis, Incident Response')); ?>" class="large-text"></td>
        </tr>
    </table>
    <hr>
<?php endfor; ?>

<h3>Learning Path Section</h3>
<table class="form-table">
    <tr>
        <th><label>Section Title</label></th>
        <td><input type="text" name="cyber_data[learning_title]" value="<?php echo esc_attr($get('learning_title', 'My Learning Path')); ?>" class="large-text"></td>
    </tr>
    <tr>
        <th><label>Introduction Text</label></th>
        <td><textarea name="cyber_data[learning_intro]" rows="3" class="large-text"><?php echo esc_textarea($get('learning_intro', 'My journey toward becoming a cybersecurity professional...')); ?></textarea></td>
    </tr>
</table>

<hr>

<?php for ($i = 1; $i <= 4; $i++): ?>
    <h4>Learning Step <?php echo $i; ?></h4>
    <table class="form-table">
        <tr>
            <th><label>Step Title</label></th>
            <td><input type="text" name="cyber_data[learn_<?php echo $i; ?>_title]" value="<?php echo esc_attr($get('learn_'.$i.'_title', 'Step '.$i.' Title')); ?>" class="large-text"></td>
        </tr>
        <tr>
            <th><label>Description</label></th>
            <td><textarea name="cyber_data[learn_<?php echo $i; ?>_desc]" rows="2" class="large-text"><?php echo esc_textarea($get('learn_'.$i.'_desc', 'What this step involves...')); ?></textarea></td>
        </tr>
    </table>
<?php endfor; ?>
