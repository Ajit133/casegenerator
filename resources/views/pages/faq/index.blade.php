<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ - CasaGenerators</title>
    <link rel="stylesheet" href="{{ asset('css/landing.css') }}">
    <link rel="stylesheet" href="{{ asset('css/pages.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
</head>
<body>
    @include('landing.sections.header')
    
    @include('pages.faq.sections.hero')
    
    @include('pages.faq.sections.faq-list')
    
    @include('pages.faq.sections.contact-support')
    
    @include('landing.sections.footer')
    
    <script src="{{ asset('js/landing.js') }}"></script>
    <script src="{{ asset('js/faq.js') }}"></script>
</body>
</html>
