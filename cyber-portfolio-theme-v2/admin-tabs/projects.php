<?php
/**
 * Projects Tab - Admin Interface
 * Uses: cyber_data[key] naming for separate database saves
 */

if (!defined('ABSPATH')) exit;

$get = function($key, $default = '') use ($data) {
    return isset($data[$key]) && !empty($data[$key]) ? $data[$key] : $default;
};
?>

<h2>💼 Projects Page Content</h2>

<h3>Page Header</h3>
<table class="form-table">
    <tr>
        <th><label>Label (small text above title)</label></th>
        <td><input type="text" name="cyber_data[projects_label]" value="<?php echo esc_attr($get('projects_label', 'MY WORK')); ?>" class="regular-text"></td>
    </tr>
    <tr>
        <th><label>Page Title</label></th>
        <td><input type="text" name="cyber_data[projects_title]" value="<?php echo esc_attr($get('projects_title', 'Featured Projects')); ?>" class="large-text"></td>
    </tr>
    <tr>
        <th><label>Subtitle</label></th>
        <td><input type="text" name="cyber_data[projects_sub]" value="<?php echo esc_attr($get('projects_sub', 'Hands-on security projects and research')); ?>" class="large-text"></td>
    </tr>
</table>

<hr>

<?php for ($i = 1; $i <= 6; $i++): ?>
    <h3>📁 Project <?php echo $i; ?></h3>
    <table class="form-table">
        <tr>
            <th><label>Title</label></th>
            <td><input type="text" name="cyber_data[proj_<?php echo $i; ?>_title]" value="<?php echo esc_attr($get('proj_'.$i.'_title', 'Project Title '.$i)); ?>" class="large-text"></td>
        </tr>
        <tr>
            <th><label>Category</label></th>
            <td><input type="text" name="cyber_data[proj_<?php echo $i; ?>_cat]" value="<?php echo esc_attr($get('proj_'.$i.'_cat', 'Security Operations')); ?>" class="regular-text"></td>
        </tr>
        <tr>
            <th><label>Description</label></th>
            <td><textarea name="cyber_data[proj_<?php echo $i; ?>_desc]" rows="3" class="large-text"><?php echo esc_textarea($get('proj_'.$i.'_desc', 'Brief project description...')); ?></textarea></td>
        </tr>
        <tr>
            <th><label>Challenge</label></th>
            <td><textarea name="cyber_data[proj_<?php echo $i; ?>_challenge]" rows="3" class="large-text"><?php echo esc_textarea($get('proj_'.$i.'_challenge', 'What was the problem?')); ?></textarea></td>
        </tr>
        <tr>
            <th><label>Solution</label></th>
            <td><textarea name="cyber_data[proj_<?php echo $i; ?>_solution]" rows="3" class="large-text"><?php echo esc_textarea($get('proj_'.$i.'_solution', 'How did you solve it?')); ?></textarea></td>
        </tr>
        <tr>
            <th><label>Outcome</label></th>
            <td><textarea name="cyber_data[proj_<?php echo $i; ?>_outcome]" rows="3" class="large-text"><?php echo esc_textarea($get('proj_'.$i.'_outcome', 'What were the results?')); ?></textarea></td>
        </tr>
        <tr>
            <th><label>Tools Used (comma-separated)</label></th>
            <td><input type="text" name="cyber_data[proj_<?php echo $i; ?>_tools]" value="<?php echo esc_attr($get('proj_'.$i.'_tools', 'Wireshark, Python, Splunk')); ?>" class="large-text"></td>
        </tr>
        <tr>
            <th><label>Duration</label></th>
            <td><input type="text" name="cyber_data[proj_<?php echo $i; ?>_duration]" value="<?php echo esc_attr($get('proj_'.$i.'_duration', '2 weeks')); ?>" class="regular-text"></td>
        </tr>
        <tr>
            <th><label>Status</label></th>
            <td>
                <select name="cyber_data[proj_<?php echo $i; ?>_status]">
                    <option value="completed" <?php selected($get('proj_'.$i.'_status', 'completed'), 'completed'); ?>>✓ Completed</option>
                    <option value="in-progress" <?php selected($get('proj_'.$i.'_status'), 'in-progress'); ?>>⏳ In Progress</option>
                    <option value="planned" <?php selected($get('proj_'.$i.'_status'), 'planned'); ?>>📋 Planned</option>
                </select>
            </td>
        </tr>
    </table>
    <hr>
<?php endfor; ?>
