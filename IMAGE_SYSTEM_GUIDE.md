# Image System Setup and Usage Guide

## Overview

Your Filament blog now has a comprehensive image system that supports:

1. **Featured Images** - Main image for each post
2. **Gallery Images** - Multiple images displayed in a gallery section
3. **Content Images** - Images embedded directly within the rich text content
4. **Image Modal** - Click any image to view it in a fullscreen modal

## How to Use

### Creating a Post with Images

1. **Featured Image**: Upload a main image that represents your post
2. **Post Content**: Use the rich editor toolbar to add images directly within your content:
   - Click the "Attach Files" button in the rich editor
   - Upload images that will be embedded in your content
   - These images will automatically be tracked and properly displayed

3. **Gallery Images**: Upload multiple images that will be displayed in a separate gallery section
4. **Content Images**: Additional images for tracking (optional - mainly used for advanced scenarios)

### Image Display Features

- All images are automatically optimized for web display
- Images in content are clickable and open in a modal
- Responsive design ensures images look great on all devices
- Images have hover effects and smooth transitions
- Alt text support for accessibility

## Technical Details

### File Storage
- Images are stored in `storage/app/public/posts/`
- Featured images: `posts/featured/`
- Gallery images: `posts/gallery/`
- Content images: `posts/content/`

### Image Processing
- Automatic URL conversion for proper display
- Support for image editor with aspect ratio options
- File size limit: 5MB per image
- Supported formats: JPG, PNG, GIF, WebP

### Admin Features
- Image preview in the admin table
- Badge indicators showing image counts
- Drag & drop reordering for gallery images
- Built-in image editor with aspect ratio controls

## Maintenance Commands

### Clean up orphaned images
```bash
# Preview what would be deleted
php artisan images:cleanup --dry-run

# Actually clean up unused images
php artisan images:cleanup
```

### Get image statistics
The cleanup command also shows comprehensive statistics about your image usage.

## Troubleshooting

### Images not displaying?
1. Ensure the storage link exists: `php artisan storage:link`
2. Check file permissions on the storage directory
3. Verify your APP_URL is set correctly in .env

### Images not uploading?
1. Check PHP upload limits (upload_max_filesize, post_max_size)
2. Verify disk space availability
3. Check Laravel logs for any errors

### Performance optimization
- Consider implementing image compression
- Use WebP format for better performance
- Implement lazy loading for galleries

## Security Features
- File type validation
- Size restrictions
- Automatic path sanitization
- Storage isolation from web-accessible areas

## Accessibility
- Alt text support for all images
- Keyboard navigation for modals
- Screen reader friendly markup
- High contrast mode support

---

This system provides a robust, user-friendly image management experience for your Filament blog posts!