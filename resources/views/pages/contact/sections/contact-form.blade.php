<section class="contact-form-section">
    <div class="contact-background">
        <div class="container">
            <div class="contact-content">
                <div class="contact-badge">
                    <span>Contact Us</span>
                </div>
                <h2 class="section-title-white">
                    Send us a Message We look forward to Assisting you
                </h2>
                <form class="contact-form" action="{{ route('contact.submit') }}" method="POST">
                    @csrf
                    <div class="form-row">
                        <input type="text" name="name" placeholder="Name" required>
                        <input type="email" name="email" placeholder="Email" required>
                    </div>
                    <div class="form-row">
                        <input type="tel" name="phone" placeholder="Phone">
                    </div>
                    <div class="form-row">
                        <textarea name="message" rows="4" placeholder="Message" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary-black">Send message</button>
                </form>
            </div>
        </div>
    </div>
</section>
