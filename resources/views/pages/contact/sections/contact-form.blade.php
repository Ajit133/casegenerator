<section class="contact-form-page-section">
    <div class="container">
        <div class="contact-form-wrapper">
            <div class="contact-form-intro">
                <h2 class="section-title">Send Us a Message</h2>
                <p class="section-text">Have a question or need assistance? Fill out the form below and we'll get back to you as soon as possible.</p>
            </div>
            
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            
            <form class="contact-page-form" action="{{ route('contact.submit') }}" method="POST">
                @csrf
                <div class="form-grid">
                    <div class="form-group">
                        <label for="name">Full Name *</label>
                        <input type="text" id="name" name="name" required value="{{ old('name') }}">
                        @error('name')
                            <span class="error-message">{{ $message }}</span>
                        @enderror
                    </div>
                    
                    <div class="form-group">
                        <label for="email">Email Address *</label>
                        <input type="email" id="email" name="email" required value="{{ old('email') }}">
                        @error('email')
                            <span class="error-message">{{ $message }}</span>
                        @enderror
                    </div>
                    
                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="tel" id="phone" name="phone" value="{{ old('phone') }}">
                        @error('phone')
                            <span class="error-message">{{ $message }}</span>
                        @enderror
                    </div>
                    
                    
                    
                    <div class="form-group full-width">
                        <label for="subject">Subject</label>
                        <input type="text" id="subject" name="subject" value="{{ old('subject') }}">
                        @error('subject')
                            <span class="error-message">{{ $message }}</span>
                        @enderror
                    </div>
                    
                </div>
                
                <button type="submit" class="btn btn-primary btn-large">Send Message</button>
            </form>
        </div>
    </div>
</section>
