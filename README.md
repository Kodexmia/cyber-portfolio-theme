# Cyber Portfolio Theme v2

A clean, modern WordPress theme crafted for cyber security portfolios.
This theme converts a multi-page HTML portfolio into a structured, editable WordPress theme while keeping the layout consistent and professional.

Ideal for cyber security students, SOC analysts, and professionals who want a polished portfolio without heavy plugins or page builders.

---

## Features

### Pre-built Page Templates

The theme includes ready-to-use templates for:

* **Home**
* **About**
* **Projects**
* **Portfolio**
* **Certifications**
* **Contact**

Each template mirrors the original HTML design and includes fixed navigation, spacing, and styling.

### Modern Design

* blue-green accent colour palette
* Clean typography (Poppins)
* Fixed header navigation
* Responsive layout across all devices
* Smooth card-based UI

### Simple Customisation

* Edit content via WordPress pages
* Update colours in the Customiser
* Swap images and text without breaking layout
* Suitable for beginners

### Contact Form 7 Support

Paste the form code into your CF7 form:

```
<label> Your Name *
    [text* your-name class:cf7-input placeholder "Jane Smith"] </label>

<label> Your Email *
    [email* your-email class:cf7-input placeholder "jane@example.com"] </label>

<label> Subject
    [text your-subject class:cf7-input placeholder "Junior SOC Role Discussion"] </label>

<label> Message *
    [textarea* your-message class:cf7-textarea placeholder "Tell me briefly what you would like to discuss..."] </label>

[submit class:cf7-submit "Send Message"]

<p class="cf7-note">* Required fields. Your information will be kept confidential.</p>

### Contact Form 7 Support Contact Form 7 Styling 
.wpcf7-form {
  max-width: 100%;
  display: flex;
  flex-direction: column;
  height: 100%;
}

.wpcf7-form label {
  display: flex;
  flex-direction: column;
  font-size: 0.9rem;
  font-weight: 500;
  color: #374151;
  margin-bottom: 1.25rem;
}

/* Make message field grow to fill space */
.wpcf7-form label:has(.cf7-textarea) {
  flex: 1;
  display: flex;
  flex-direction: column;
  margin-bottom: 1rem;
}

.wpcf7-form .cf7-input,
.wpcf7-form .cf7-textarea {
  width: 100%;
  padding: 0.875rem 1rem;
  border: 1.5px solid #E5E7EB;
  border-radius: 10px;
  font-size: 0.95rem;
  color: #1F2937;
  background: #FFFFFF;
  transition: all 0.2s ease;
  font-family: inherit;
  margin-top: 0.5rem;
}

.wpcf7-form .cf7-input:focus,
.wpcf7-form .cf7-textarea:focus {
  outline: none;
  border-color: #3B82F6;
  box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
}

/* Message textarea grows to fill available space */
.wpcf7-form .cf7-textarea {
  flex: 1;
  min-height: 200px;
  resize: vertical;
}

.wpcf7-form .cf7-submit {
  width: 100%;
  padding: 1rem 2rem;
  background: #3B82F6;
  color: #FFFFFF;
  border: none;
  border-radius: 10px;
  font-size: 1rem;
  font-weight: 600;
  cursor: pointer;
  transition: all 0.2s ease;
  margin-top: 0.5rem;
}

.wpcf7-form .cf7-submit:hover {
  background: #2563EB;
  transform: translateY(-1px);
  box-shadow: 0 4px 12px rgba(59, 130, 246, 0.3);
}

.wpcf7-form .cf7-submit:active {
  transform: translateY(0);
}

.wpcf7-form .cf7-note {
  font-size: 0.85rem;
  color: #6B7280;
  margin-top: 1rem;
  text-align: center;
}

/* Remove default CF7 styles */
.wpcf7-form p {
  margin: 0;
}

.wpcf7-form br {
  display: none;
}

/* Validation messages */
.wpcf7-not-valid-tip {
  font-size: 0.8rem;
  color: #EF4444;
  margin-top: 0.25rem;
}

.wpcf7-response-output {
  border-radius: 10px;
  padding: 1rem;
  margin-top: 1.5rem;
  font-size: 0.9rem;
}

.wpcf7-mail-sent-ok {
  border: 2px solid #10B981;
  background: #ECFDF5;
  color: #065F46;
}

.wpcf7-validation-errors {
  border: 2px solid #F59E0B;
  background: #FFFBEB;
  color: #92400E;
}

/* Mobile responsiveness */
@media (max-width: 768px) {
  .wpcf7-form .cf7-textarea {
    min-height: 150px;
  }
}

```

Insert the generated shortcode into the **Contact** page.


---




## Installation

### 1. Upload the Theme

1. Go to **Appearance → Themes**
2. Select **Add New → Upload Theme**
3. Upload `cyber-portfolio-theme-v2.zip`
4. Activate the theme

---

### 2. Create Required Pages

Navigate to **Pages → Add New** and create:

| Page           | Template            |
| -------------- | ------------------- |
| Home           | Front Page          |
| About          | About Page          |
| Projects       | Projects Page       |
| Portfolio      | Portfolio Page      |
| Certifications*| Certifications Page |
| Contact        | Contact Page        |

*Label the URL slugs for Certifications as Certs

Each template is mapped inside the theme so the styling is automatic.

---

### 3. Set Homepage

1. Go to **Settings → Reading**
2. Choose **A static page**
3. Select **Home** as your homepage
4. Save

---

## Folder Structure

```
cyber-portfolio-theme-v2/
│
├── style.css
├── functions.php
├── index.php
├── templates/
│   ├── front-page.php
│   ├── about-page.php
│   ├── projects-page.php
│   ├── portfolio-page.php
│   ├── certifications-page.php
│   └── contact-page.php
├── assets/
│   ├── css/
│   └── images/
├── README.md
└── QUICK-INSTALL.md
```

---

## Who This Theme Is For

* Cyber security learners
* SOC analysts (junior to mid-level)
* Cloud students (Azure, AWS)
* Career switchers needing a professional online presence
* Anyone wanting a simple, fast portfolio without page builders

---

## Why This Theme Exists

Many portfolio themes rely on complex builders or heavy plugins.
This theme stays lightweight, fast, and clean, while offering just enough control to personalise your content without risking layout issues.

---

## Planned Improvements

* Optional dark mode
* Better custom fields for profile data
* CV download button support
* JSON import/export for portfolio items

---

## Licence

This theme is provided for personal and portfolio use.
You may adapt it for your own projects.

