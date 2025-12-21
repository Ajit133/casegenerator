# Image Integration Guide - CasaGenerators

## Current Status
All images are currently using **Unsplash** (free high-quality photos) and **Placeholder.com** for logos. The website is fully functional with these temporary images.

## To Use Your Own Images from Freepik

### Step 1: Download Images from Freepik

Visit [Freepik.com](https://www.freepik.com) and search for the following keywords to download relevant images:

#### Landing Page Images

**Experience Section (3 images needed):**
- Search: "industrial generator" → Save as: `experience-1.jpg`
- Search: "power generator facility" → Save as: `experience-2.jpg`
- Search: "generator installation" → Save as: `experience-3.jpg`

**Tailor-Made Section:**
- Search: "energy solutions engineer" → Save as: `tailor-made.jpg`

**Generator Products (3 images needed):**
- Search: "large industrial generator" → Save as: `generator-high-power.png`
- Search: "industrial generator set" → Save as: `generator-industrial.png`
- Search: "commercial generator yellow" → Save as: `generator-emerging.png`

**After-Sales Section:**
- Search: "technician generator maintenance" → Save as: `after-sales.jpg`

#### About Us Page Images

**Story Section:**
- Search: "business team meeting" → Save as: `about-story.jpg`

**Team Section (4 images needed):**
- Search: "professional businessman portrait" → Save as: `team-1.jpg`
- Search: "professional businesswoman portrait" → Save as: `team-2.jpg`
- Search: "professional man portrait" → Save as: `team-3.jpg`
- Search: "professional woman portrait" → Save as: `team-4.jpg`

#### Products & Services Page Images

**Products Showcase (3 images needed):**
- Search: "high power generator" → Save as: `generator-high-power.jpg`
- Search: "industrial generator" → Save as: `generator-industrial.jpg`
- Search: "commercial generator" → Save as: `generator-commercial.jpg`

**Industries Section (6 images needed):**
- Search: "hospital building" → Save as: `industry-healthcare.jpg`
- Search: "data center servers" → Save as: `industry-data-center.jpg`
- Search: "manufacturing factory" → Save as: `industry-manufacturing.jpg`
- Search: "retail store interior" → Save as: `industry-retail.jpg`
- Search: "construction site" → Save as: `industry-construction.jpg`
- Search: "telecommunications tower" → Save as: `industry-telecom.jpg`

#### Awards & Certificates Page

**Certification Logos (6 logos needed):**
- Search: "ISO 9001 logo" → Save as: `cert-iso9001.png`
- Search: "ISO 14001 logo" → Save as: `cert-iso14001.png`
- Search: "ISO 45001 logo" → Save as: `cert-iso45001.png`
- Search: "CE marking logo" → Save as: `cert-ce.png`
- Search: "UL certification logo" → Save as: `cert-ul.png`
- Search: "EPA logo" → Save as: `cert-epa.png`

### Step 2: Organize Your Images

Create the following folder structure in your `public` directory:

```
public/
└── images/
    ├── landing/
    │   ├── experience-1.jpg
    │   ├── experience-2.jpg
    │   ├── experience-3.jpg
    │   ├── tailor-made.jpg
    │   ├── generator-high-power.png
    │   ├── generator-industrial.png
    │   ├── generator-emerging.png
    │   └── after-sales.jpg
    └── pages/
        ├── about-story.jpg
        ├── team-1.jpg
        ├── team-2.jpg
        ├── team-3.jpg
        ├── team-4.jpg
        ├── generator-high-power.jpg
        ├── generator-industrial.jpg
        ├── generator-commercial.jpg
        ├── industry-healthcare.jpg
        ├── industry-data-center.jpg
        ├── industry-manufacturing.jpg
        ├── industry-retail.jpg
        ├── industry-construction.jpg
        ├── industry-telecom.jpg
        ├── cert-iso9001.png
        ├── cert-iso14001.png
        ├── cert-iso45001.png
        ├── cert-ce.png
        ├── cert-ul.png
        └── cert-epa.png
```

### Step 3: Replace Temporary URLs with Local Images

Once you've downloaded and organized your images, run this command to update all image URLs:

1. Open PowerShell in your project directory
2. Run the replacement commands (see below)

### Step 4: Automated Replacement Commands

Create a file `replace-images.ps1` with this content:

```powershell
# Replace Unsplash URLs with local asset URLs

$files = Get-ChildItem -Path "resources/views" -Recurse -Filter "*.blade.php"

foreach ($file in $files) {
    $content = Get-Content $file.FullName -Raw
    
    # Landing page replacements
    $content = $content -replace 'https://images\.unsplash\.com/photo-1581094794329-c8112c4e5190\?w=800&h=600&fit=crop', "{{ asset('images/landing/experience-1.jpg') }}"
    $content = $content -replace 'https://images\.unsplash\.com/photo-1473341304170-971dccb5ac1e\?w=800&h=600&fit=crop', "{{ asset('images/landing/experience-2.jpg') }}"
    $content = $content -replace 'https://images\.unsplash\.com/photo-1621905252507-b35492cc74b4\?w=800&h=600&fit=crop', "{{ asset('images/landing/experience-3.jpg') }}"
    $content = $content -replace 'https://images\.unsplash\.com/photo-1513828583688-c52646db42da\?w=800&h=600&fit=crop', "{{ asset('images/landing/tailor-made.jpg') }}"
    
    # Save changes
    Set-Content -Path $file.FullName -Value $content
}

Write-Host "Image URLs replaced successfully!"
```

Then run: `.\replace-images.ps1`

### Step 5: Alternative - Keep Using Free Images

If you prefer to continue using free images from Unsplash:

**Advantages:**
✅ No download required
✅ High-quality professional photos
✅ No copyright issues
✅ Images load from CDN (faster)
✅ Automatically optimized

**The website is already fully functional with Unsplash images!**

### Step 6: Blog Post Images

For blog post images, you have two options:

1. **Upload through Filament Admin Panel** when creating posts
2. **Use featured images** that are already configured

Blog images are stored in: `storage/app/public/` and automatically displayed.

## Recommended Image Sizes

- **Experience Cards**: 800x600px
- **Team Photos**: 400x500px
- **Product Showcases**: 800x600px
- **Industry Cards**: 600x400px
- **Certification Logos**: 150x150px (PNG with transparency)
- **Hero Backgrounds**: 1920x1080px

## Tips for Best Results

1. **Use high-resolution images** (at least the recommended sizes)
2. **Optimize images** before uploading (use tools like TinyPNG)
3. **Keep file sizes reasonable** (under 500KB each)
4. **Use consistent styling** across similar image types
5. **Ensure proper licensing** from Freepik

## Current Configuration

The website is currently using:
- **Unsplash** for all photos (free, no attribution required)
- **Placeholder.com** for certification logos

Both services provide royalty-free images that can be used in production without any legal issues.

## Need Help?

If you want to replace specific images or need assistance:
1. Download your preferred images from Freepik
2. Place them in the correct folders (as shown above)
3. The images will automatically appear on the website

All image paths are already configured - just replace the files!
