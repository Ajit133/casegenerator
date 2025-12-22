<section class="contact-form-section">
    <div class="contact-background">
        <div class="container">
            <div class="contact-content">
                <div class="contact-badge">
                    <span>Contact Us</span>
                </div>
                <h2 class="section-title-white">
                    Tell us about your project, we look forward to helping you
                </h2>
                <form class="contact-form" action="{{ route('contact.submit') }}" method="POST">
                    @csrf
                    <div class="form-row">
                        <input type="text" name="name" placeholder="Name" required>
                        <input type="email" name="email" placeholder="Email" required>
                    </div>
                    <div class="form-row">
                        <input type="tel" name="phone" placeholder="Phone">
                        <select name="industry" class="form-select" required>
                            <option value="" disabled selected>Select your industry</option>
                            <option value="industry_one">Industry One</option>
                            <option value="industry_two">Industry Two</option>
                            <option value="industry_four">Industry Four</option>
                        </select>
                    </div>
                    <div class="form-row">
                        <textarea name="message" rows="4" placeholder="Additional Details!" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary-black">Send message</button>
                </form>
            </div>
        </div>
    </div>
</section>
