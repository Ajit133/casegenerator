# Landing Page File Structure

This landing page has been organized using a modular system for easy maintenance and scalability.

## File Structure

```
app/
└── Http/
    └── Controllers/
        └── LandingPageController.php          # Main controller for landing page

resources/
└── views/
    └── landing/
        ├── index.blade.php                    # Main landing page layout
        └── sections/                          # Individual page sections
            ├── header.blade.php               # Navigation header
            ├── hero.blade.php                 # Hero section with main title
            ├── experience.blade.php           # Experience showcase section
            ├── tailor-made.blade.php          # Tailor-made solutions section
            ├── generator-products.blade.php   # Generator products showcase
            ├── planet.blade.php               # Environmental commitment section
            ├── blog-cases.blade.php           # Blog/case studies section (shows existing posts)
            ├── after-sales.blade.php          # After-sales service section
            ├── contact-form.blade.php         # Contact form section
            ├── newsletter.blade.php           # Newsletter subscription
            └── footer.blade.php               # Footer with links and contact

public/
├── css/
│   └── landing.css                            # All landing page styles
└── js/
    └── landing.js                             # Landing page interactions

routes/
└── web.php                                    # Routes configuration
```

## Features

### Modular Design
- Each section is a separate blade file for easy maintenance
- Sections can be reordered by changing the order in index.blade.php
- Easy to add or remove sections

### Blog Integration
- The blog section automatically pulls the latest 3 posts from your database
- Falls back to placeholder content if no posts exist
- Uses the existing Post model

### Responsive Design
- Mobile-first approach
- Breakpoints at 768px and 1024px
- Fully responsive grid layouts

### Interactive Elements
- Smooth scrolling navigation
- Hover effects on cards
- Form validation
- Scroll animations

## Usage

1. Access the landing page at: `http://your-domain.com/`
2. The old welcome page is still accessible at: `http://your-domain.com/welcome`

## Customization

### To modify a section:
- Edit the corresponding file in `resources/views/landing/sections/`

### To add images:
- Place images in `public/images/landing/`
- Update image paths in the blade files

### To modify styles:
- Edit `public/css/landing.css`

### To add functionality:
- Edit `public/js/landing.js`

## Routes

- `/` - Landing page (home)
- `/post/{slug}` - Individual blog post
- `/contact` (POST) - Contact form submission
- `/newsletter` (POST) - Newsletter subscription
