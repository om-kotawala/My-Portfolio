# Modern Portfolio Website

A responsive and attractive portfolio website built with HTML, CSS, and JavaScript. This portfolio template features a clean design, smooth animations, and is fully responsive across all devices.

## Features

- 🎨 Modern and clean design
- 📱 Fully responsive layout
- ✨ Smooth animations and transitions
- 🎯 Interactive elements
- 📝 Contact form
- 🖼️ Project showcase section
- 💼 Skills display
- 🔍 SEO friendly
- ⚡ Fast loading

## Getting Started

1. Clone or download this repository
2. Open `index.html` in your browser
3. Customize the content to make it your own

## Customization

### Personal Information
Edit the following sections in `index.html`:
- Update your name in the hero section
- Modify the about section with your information
- Add your own projects in the projects section
- Update your skills in the skills section
- Add your social media links in the footer

### Styling
The main styles are in `styles.css`. You can customize:
- Colors in the `:root` variables
- Fonts and typography
- Spacing and layout
- Animations and transitions

### JavaScript
The interactive features are in `script.js`. You can modify:
- Typing animation text in the `textArray`
- Animation timings
- Form handling
- Scroll animations

## Sections

1. **Hero Section**
   - Animated typing effect
   - Call-to-action buttons

2. **About Section**
   - Personal information
   - Professional summary

3. **Projects Section**
   - Project cards with images
   - Links to live demos and source code

4. **Skills Section**
   - Skill categories
   - Animated skill items

5. **Contact Section**
   - Contact form
   - Form validation

## Browser Support

- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)
- Opera (latest)

## Contributing

Feel free to submit issues and enhancement requests!

## License

This project is open source and available under the [MIT License](LICENSE).

## Credits

- Font Awesome for icons
- Google Fonts for typography
- Placeholder.com for placeholder images 


## Make A Database named "portfolio" in myPHPAdmin and below is the SQL code
CREATE DATABASE IF NOT EXISTS portfolio;
USE portfolio;

CREATE TABLE IF NOT EXISTS contacts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    subject VARCHAR(150) NOT NULL,
    message TEXT NOT NULL,
    submitted_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);