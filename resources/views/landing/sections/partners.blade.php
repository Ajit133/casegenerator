@php
    $partners = [
        '11-300x153-1.webp',
        '172-1723515_john-deere-logo-vector-john-deere-logo-svg-300x204-1.webp',
        '2-5-300x153-1.webp',
        '6-300x153-1.webp',
        '7-300x153-1.webp',
        'Kubota-Logo-300x169-1.webp',
        'WhatsApp-Image-2022-10-14-at-2.59.40-PM-300x181-1.webp',
        'ezgif-3-bc3a810894.webp'
    ];
@endphp

<section class="partners-section">
    <div class="container featured-header" style="margin-bottom: 40px;">
        
        <h2 class="section-title-center" style="font-size: 36px; margin-bottom: 10px;">Trusted by Industry Leaders</h2>
    </div>
    <div class="partners-container">
        <div class="partners-track">
            <!-- Original Set -->
            @foreach($partners as $partner)
                <div class="partner-logo">
                    <img src="{{ asset('images/Partners/' . $partner) }}" alt="Partner Logo">
                </div>
            @endforeach
            
            <!-- duplicate Set for smooth infinite scroll -->
            @foreach($partners as $partner)
                <div class="partner-logo">
                    <img src="{{ asset('images/Partners/' . $partner) }}" alt="Partner Logo">
                </div>
            @endforeach

             <!-- Triple Set to ensure coverage on wide screens -->
             @foreach($partners as $partner)
             <div class="partner-logo">
                 <img src="{{ asset('images/Partners/' . $partner) }}" alt="Partner Logo">
             </div>
         @endforeach
        </div>
    </div>
</section>
