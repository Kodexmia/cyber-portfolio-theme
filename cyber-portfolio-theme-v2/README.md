# Cyber Security Portfolio Theme V2

A clean, professional WordPress theme for cyber security portfolios with **no plugins required**. Features simple content management via WordPress admin and customizable colors via the WordPress Customizer.

## ✨ Features

- ✅ **No Plugins Required** - Everything built into the theme
- ✅ **Color Customization** - Change accent and text colors with live preview
- ✅ **Simple Admin Interface** - Edit content via Portfolio → Content menu
- ✅ **6 Page Templates** - Home, About, Projects, Portfolio, Certs, Contact
- ✅ **Responsive Design** - Mobile-friendly layout
- ✅ **Clean Code** - Well-commented, easy to maintain
- ✅ **Education-Ready** - Perfect for student distribution

## 📋 Requirements

- WordPress 5.8 or higher
- PHP 7.4 or higher
- Modern web browser

## 🚀 Quick Start (5 Minutes)

### Step 1: Install Theme

1. Download `cyber-portfolio-theme-v2.zip`
2. Go to WordPress Admin → **Appearance → Themes**
3. Click **Add New** → **Upload Theme**
4. Choose the ZIP file and click **Install Now**
5. Click **Activate**

### Step 2: Create Pages

Create these 6 pages (Pages → Add New):

| Page Title | Template | Slug |
|------------|----------|------|
| Home | Front Page | home |
| About | About Page | about |
| Projects | Projects Page | projects |
| Portfolio | Portfolio Page | portfolio |
| Certifications | Certifications Page | certs |
| Contact | Contact Page | contact |

**For each page:**
1. Add title
2. Select template from dropdown (right sidebar)
3. Click **Publish**

### Step 3: Set Homepage

1. Go to **Settings → Reading**
2. Set "Your homepage displays" to **A static page**
3. Homepage: **Home**
4. Click **Save Changes**

### Step 4: Add Content

Go to **Portfolio → Content** in the admin menu:

- Edit hero section (title, subtitle, tag)
- Add your bio
- Update contact information
- Fill in all tabs

Click **Save All Changes**

### Step 5: Customize Colors

Go to **Appearance → Customize → Theme Colors**:

- **Accent Color** - Links, buttons, highlights (default: #3b82f6)
- **Text Color** - Main text color (default: #2c3e50)

Click **Publish** to save

**Done!** Your portfolio is live! 🎉

## 📝 Content Management

### Via Admin Dashboard (Portfolio → Content)

**Home Tab:**
- Hero title (e.g., "Hello, I am Sam Ward")
- Hero subtitle (your professional description)
- Hero tag (e.g., "AZ-900 • SC-900")
- Hero badge (e.g., "Open to remote roles")
- Stats (3 items: number + label)

**About Tab:**
- Page title
- Bio text (multi-paragraph supported)
- Location, availability, focus
- Homelab description
- Learning path description

**Contact Tab:**
- Email address
- Location
- LinkedIn URL
- GitHub URL

### Via Customizer (Appearance → Customize)

**Site Identity:**
- Site Title
- Tagline
- Logo (optional)

**Theme Colors:**
- Accent color (live preview)
- Text color (live preview)

## 🎨 Color Customization

The theme uses CSS variables for easy customization:

```css
:root {
  --accent: #3b82f6;        /* Change via Customizer */
  --text-main: #2c3e50;     /* Change via Customizer */
  --bg-main: #f8f9fa;       /* Light background */
  --card-bg: #ffffff;       /* Card background */
}
```

Changes in Customizer update these automatically with live preview!

## 📂 File Structure

```
cyber-portfolio-theme-v2/
├── style.css              # Main stylesheet with CSS variables
├── functions.php          # Theme functions, Customizer, Admin page
├── header.php             # Site header and navigation
├── footer.php             # Site footer
├── index.php              # Fallback template
├── front-page.php         # Homepage template
├── page-about.php         # About page template
├── page-projects.php      # Projects page template
├── page-portfolio.php     # Portfolio page template
├── page-certs.php         # Certifications page template
├── page-contact.php       # Contact page template
└── README.md              # This file
```

## 🔧 How It Works

### Content Storage

All content is stored in WordPress options table:
- Key: `cyber_portfolio_data`
- Accessed via: `cyber_get('field_name', 'default')`
- Saved via: Admin page form submission

### Color System

Colors are managed via WordPress Customizer:
- Settings saved as theme mods
- Injected as inline CSS
- Updates CSS variables in `:root`

### Navigation

Navigation is automatically generated based on page slugs:
- Home (/)
- About (/about)
- Projects (/projects)
- Portfolio (/portfolio)
- Certs (/certs)
- Contact (/contact)

Current page is highlighted automatically.

## 📦 For Educators

**Distribution Package Includes:**
- Theme ZIP file
- This README
- Quick start guide
- No external dependencies

**Student Benefits:**
- No coding required
- Can't break the layout
- Simple forms for content
- Professional results immediately

**Support Requirements:**
- Minimal - standard WordPress
- No plugin conflicts
- Easy to troubleshoot

## 🎯 Future Enhancements

**Coming Soon:**
- Repeatable project entries (add unlimited projects)
- Portfolio items management
- Certifications timeline builder
- Image upload for hero section
- Export/import content

**Currently:**
- Projects: Sample data (hardcoded)
- Portfolio: Placeholder
- Certs: Placeholder

These will be fully editable in the next update!

## 🐛 Troubleshooting

### Navigation not working
**Solution:** Check page slugs match: about, projects, portfolio, certs, contact

### Homepage shows wrong page
**Solution:** Settings → Reading → Set "Front page" to "Home"

### Colors not changing
**Solution:** Clear browser cache and refresh

### Content not saving
**Solution:** Check user has `edit_pages` capability

### Template not appearing
**Solution:** Refresh permalinks: Settings → Permalinks → Save Changes

## 📧 Support

For issues or questions:
1. Check this README
2. Review WordPress admin settings
3. Check browser console for errors
4. Verify all pages are created with correct templates

## 📄 License

GNU General Public License v2 or later
http://www.gnu.org/licenses/gpl-2.0.html

## 🙏 Credits

Built for cyber security education and student portfolios.
Based on clean HTML/CSS design with WordPress integration.

---

**Version:** 2.0.0  
**Last Updated:** 2025  
**Tested:** WordPress 6.4+, PHP 8.0+
