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

* Mint-green accent colour palette
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
| Certifications | Certifications Page |
| Contact        | Contact Page        |

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

