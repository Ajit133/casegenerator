<section class="newsletter-section">
    <div class="container">
        <div class="newsletter-content">
            <div class="newsletter-left">
                <h3 class="newsletter-title">Newsletter</h3>
                <p class="newsletter-text">Offers, launches and news</p>
            </div>
            <div class="newsletter-right">
                <form class="newsletter-form" action="{{ route('newsletter.subscribe') }}" method="POST">
                    @csrf
                    <input type="email" name="email" placeholder="Enter your email" required>
                    <button type="submit" class="btn btn-primary">Subscribe</button>
                </form>
            </div>
        </div>
    </div>
</section>
