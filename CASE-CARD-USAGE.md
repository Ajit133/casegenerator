# Case Card Component - Usage Guide

## Overview
This is a reusable Blade component that replicates the Dagartech case card design with rounded corners, category tags, SVG decorations, and smooth hover animations.

## Component Location
`resources/views/components/case-card.blade.php`

## CSS Location
All styles are in `public/css/landing.css` (at the end of the file)

## Usage

### Basic Usage
```php
<x-case-card 
    url="{{ route('featured-projects') }}"
    image="{{ asset('images/project-image.jpg') }}"
    categoryIcon="{{ asset('images/icons/infrastructure.svg') }}"
    category="Infrastructures"
    title="Your Project Title Here"
/>
```

### Required Props
- **url**: The link destination when the card is clicked
- **image**: Path to the project image (500x500px recommended)
- **categoryIcon**: Path to the category icon (40x40px SVG recommended)
- **category**: Category name (e.g., "Infrastructures", "Hotels", "Commercial")
- **title**: Project title text

### Grid Layout
Wrap multiple cards in a container with the class `section-cases__list`:

```php
<div class="section-cases__list">
    <x-case-card ... />
    <x-case-card ... />
    <x-case-card ... />
</div>
```

## Features

### 1. **Responsive Design**
- Desktop: 3 cards per row
- Tablet (1024px): 2 cards per row
- Mobile (768px): 1 card per row

### 2. **Hover Effects**
- Card lifts up on hover
- Image zooms in slightly
- "See case" button fades in
- Arrow animates to the right
- Title changes color

### 3. **Visual Elements**
- Rounded corners (18px border-radius)
- Category tag with glassmorphism effect
- SVG corner decorations
- Smooth transitions

### 4. **Accessibility**
- Proper alt text for images
- Semantic HTML structure
- Keyboard accessible links

## Customization

### Change Card Height
In `landing.css`, modify:
```css
.card-case__img {
    height: 490px; /* Change this value */
}
```

### Change Grid Columns
In `landing.css`, modify:
```css
.section-cases__list .card-case {
    width: calc((100% - 60px) / 3); /* Change /3 to /4 for 4 columns */
}
```

### Change Hover Color
In `landing.css`, modify:
```css
.card-case:hover .card-case__title {
    color: var(--primary-color); /* Change to your preferred color */
}
```

## Example Implementation

See `resources/views/examples/case-cards-example.blade.php` for a complete working example.

## Category Icons

Create SVG icons for different categories:
- `images/icons/infrastructure.svg`
- `images/icons/hotel.svg`
- `images/icons/commercial.svg`
- `images/icons/residential.svg`
- `images/icons/industrial.svg`

## Notes

1. **Image Optimization**: Use optimized images (WebP format recommended) for better performance
2. **Lazy Loading**: The component includes `loading="lazy"` attribute for images
3. **Browser Support**: Uses modern CSS features (backdrop-filter, CSS Grid). IE11 not supported.
4. **Font**: Uses the Inter font family (already included in your project)

## Integration with Existing Pages

To add case cards to your existing pages:

1. Include the component in your blade file
2. Make sure `landing.css` is loaded
3. Use the `section-cases__list` container class
4. Pass the required props

Example:
```php
@extends('layouts.app')

@section('content')
    <section class="case-studies-section">
        <div class="container">
            <h2>Our Projects</h2>
            
            <div class="section-cases__list">
                @foreach($projects as $project)
                    <x-case-card 
                        url="{{ route('project.show', $project->id) }}"
                        image="{{ asset($project->image) }}"
                        categoryIcon="{{ asset($project->category_icon) }}"
                        category="{{ $project->category }}"
                        title="{{ $project->title }}"
                    />
                @endforeach
            </div>
        </div>
    </section>
@endsection
```

## Troubleshooting

### Cards not displaying in grid
- Ensure parent container has `section-cases__list` class
- Check that `landing.css` is properly loaded

### Hover effects not working
- Clear browser cache
- Verify CSS file is loaded after any other stylesheets

### Images not loading
- Check file paths are correct
- Verify images exist in the specified directory
- Run `php artisan storage:link` if using storage

## Browser Compatibility
- Chrome: ✅ Full support
- Firefox: ✅ Full support
- Safari: ✅ Full support
- Edge: ✅ Full support
- IE11: ❌ Not supported (uses modern CSS features)
