<section class="cta-section">
    <div class="cta-background">
        <div class="container">
            <div class="cta-content">
               
                <div class="quote-form-section">
                    <h3 class="form-title">Request A Quote</h3>
                    <p class="form-subtitle">Complete control over products allows us to ensure our customers receive the best quality prices and service. We take great pride in everything that we do</p>
                    
                    <form action="{{ route('contact') }}" method="POST" class="quote-form">
                        @csrf
                        <div class="form-row">
                            <div class="form-group">
                                <label for="name">Name *</label>
                                <input type="text" id="name" name="name" placeholder="Name" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email *</label>
                                <input type="email" id="email" name="email" placeholder="Email" required>
                            </div>
                        </div>
                        
                        <div class="form-row">
                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="tel" id="phone" name="phone" placeholder="Phone">
                            </div>
                            <div class="form-group">
                                <label for="industry">Select Your Industry</label>
                                <select id="industry" name="industry">
                                    <option value="">Select Your Industry</option>
                                    <option value="construction">Construction</option>
                                    <option value="manufacturing">Manufacturing</option>
                                    <option value="healthcare">Healthcare</option>
                                    <option value="hospitality">Hospitality</option>
                                    <option value="residential">Residential</option>
                                    <option value="commercial">Commercial</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="form-group full-width">
                            <label for="message">Comment or Message</label>
                            <textarea id="message" name="message" rows="4" placeholder="Additional Details!"></textarea>
                        </div>
                        
                        <button type="submit" class="btn btn-primary-white">Submit Quote Request</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
