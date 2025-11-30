<?php
/**
 * Contact Tab - Admin Interface
 * Uses: cyber_data[key] naming for separate database saves
 */

if (!defined('ABSPATH')) exit;

$get = function($key, $default = '') use ($data) {
    return isset($data[$key]) && !empty($data[$key]) ? $data[$key] : $default;
};
?>

<h2>📧 Contact Page Content</h2>

<h3>Introduction</h3>
<table class="form-table">
    <tr>
        <th><label>Intro Text</label></th>
        <td><textarea name="cyber_data[contact_intro]" rows="3" class="large-text"><?php echo esc_textarea($get('contact_intro', 'I\'m always open to discussing cybersecurity opportunities...')); ?></textarea></td>
    </tr>
</table>

<h3>Contact Information</h3>
<table class="form-table">
    <tr>
        <th><label>📧 Email</label></th>
        <td><input type="email" name="cyber_data[email]" value="<?php echo esc_attr($get('email', 'your.email@example.com')); ?>" class="large-text"></td>
    </tr>
    <tr>
        <th><label>💼 LinkedIn URL</label></th>
        <td><input type="url" name="cyber_data[linkedin]" value="<?php echo esc_url($get('linkedin')); ?>" class="large-text" placeholder="https://linkedin.com/in/yourprofile"></td>
    </tr>
    <tr>
        <th><label>💻 GitHub URL</label></th>
        <td><input type="url" name="cyber_data[github]" value="<?php echo esc_url($get('github')); ?>" class="large-text" placeholder="https://github.com/yourusername"></td>
    </tr>
    <tr>
        <th><label>📍 Location</label></th>
        <td><input type="text" name="cyber_data[location]" value="<?php echo esc_attr($get('location', 'City, Country')); ?>" class="regular-text"></td>
    </tr>
</table>

<h3>Contact Form</h3>
<table class="form-table">
    <tr>
        <th><label>Form Shortcode</label></th>
        <td>
            <input type="text" name="cyber_data[contact_form_shortcode]" value="<?php echo esc_attr($get('contact_form_shortcode')); ?>" class="large-text" placeholder="[contact-form-7 id='123']">
            <p class="description">
                Install <strong>Contact Form 7</strong> or <strong>WPForms</strong>, create a form, and paste the shortcode here.<br>
                Example: <code>[contact-form-7 id="123"]</code> or <code>[wpforms id="123"]</code>
            </p>
        </td>
    </tr>
</table>

<h3>"What I'm Looking For" Section</h3>
<table class="form-table">
    <tr>
        <th><label>Text Content</label></th>
        <td><textarea name="cyber_data[contact_looking_for]" rows="4" class="large-text"><?php echo esc_textarea($get('contact_looking_for', 'I\'m currently seeking opportunities in...')); ?></textarea></td>
    </tr>
</table>
