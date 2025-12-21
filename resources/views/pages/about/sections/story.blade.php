<section class="story-section">
    <div class="container">
        <div class="section-content-grid">
            <div class="content-left">
                <div class="image-slider">
                    <div class="slider-container">
                        <div class="slider-wrapper" id="storySlider">
                            <div class="slide active">
                                <img src="{{ asset('images/About_Us/22-1.jpg') }}" alt="Industrial Generators">
                            </div>
                            <div class="slide">
                                <img src="{{ asset('images/About_Us/19-1.jpg') }}" alt="Power Generators">
                            </div>
                            <div class="slide">
                                <img src="{{ asset('images/About_Us/5-2-1.png') }}" alt="Generator Equipment">
                            </div>
                            <div class="slide">
                                <img src="{{ asset('images/About_Us/casa_generator-1.jpeg') }}" alt="Casablanca Generators">
                            </div>
                            <div class="slide">
                                <img src="{{ asset('images/About_Us/Diesel-Generator-1.jpg') }}" alt="Diesel Generators">
                            </div>
                        </div>
                        <!-- Slider Navigation -->
                        <button class="slider-btn prev-btn" id="prevBtn">‹</button>
                        <button class="slider-btn next-btn" id="nextBtn">›</button>
                    </div>
                    <!-- Slider Indicators -->
                    <div class="slider-indicators">
                        <span class="indicator active" data-slide="0"></span>
                        <span class="indicator" data-slide="1"></span>
                        <span class="indicator" data-slide="2"></span>
                        <span class="indicator" data-slide="3"></span>
                        <span class="indicator" data-slide="4"></span>
                    </div>
                </div>
            </div>
            <div class="content-right">
                <h2 class="section-title">Who We Are?</h2>
                <p class="section-text">
                    Casablanca Electrical Generators & Equipment Trading is a leading company in the field of power generators, based in the United Arab Emirates. We are an authorised Perkins-UK/ Cummins-UK reseller and distributor of all sizes of diesel power generators inside and outside of the UAE. Casablanca generators set includes standard diesel generators, ATS panels, automatic starting diesel generators, fully automatic generators, tower lights, silent with soundproof diesel generators, and weatherproof diesel generators.World’s Leading Generators & Equipment Trading!
                </p>
            </div>
        </div>
    </div>
</section>

<style>
.image-slider {
    position: relative;
    width: 100%;
    max-width: 600px;
    margin: 0 auto;
}

.slider-container {
    position: relative;
    width: 100%;
    height: 400px;
    overflow: hidden;
    border-radius: 12px;
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
}

.slider-wrapper {
    display: flex;
    width: 500%;
    height: 100%;
    transition: transform 0.6s cubic-bezier(0.25, 0.46, 0.45, 0.94);
}

.slide {
    width: 20%;
    height: 100%;
    flex-shrink: 0;
}

.slide img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
}

.slider-btn {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background: rgba(255, 255, 255, 0.9);
    border: none;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    font-size: 24px;
    font-weight: bold;
    color: #333;
    cursor: pointer;
    z-index: 10;
    transition: all 0.3s ease;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
}

.slider-btn:hover {
    background: rgba(255, 255, 255, 1);
    transform: translateY(-50%) scale(1.1);
    box-shadow: 0 6px 20px rgba(0, 0, 0, 0.2);
}

.prev-btn {
    left: 20px;
}

.next-btn {
    right: 20px;
}

.slider-indicators {
    display: flex;
    justify-content: center;
    gap: 8px;
    margin-top: 20px;
}

.indicator {
    width: 12px;
    height: 12px;
    border-radius: 50%;
    background: rgba(0, 0, 0, 0.3);
    cursor: pointer;
    transition: all 0.3s ease;
}

.indicator.active {
    background: #007bff;
    transform: scale(1.2);
}

.indicator:hover {
    background: rgba(0, 123, 255, 0.7);
    transform: scale(1.1);
}

@media (max-width: 768px) {
    .slider-container {
        height: 300px;
    }
    
    .slider-btn {
        width: 40px;
        height: 40px;
        font-size: 18px;
    }
    
    .prev-btn {
        left: 10px;
    }
    
    .next-btn {
        right: 10px;
    }
}

@media (max-width: 480px) {
    .slider-container {
        height: 250px;
    }
    
    .slider-btn {
        width: 35px;
        height: 35px;
        font-size: 16px;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const slider = document.getElementById('storySlider');
    const slides = slider.querySelectorAll('.slide');
    const indicators = document.querySelectorAll('.indicator');
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');
    
    let currentSlide = 0;
    const totalSlides = slides.length;
    
    // Auto-slide functionality
    let autoSlideInterval = setInterval(nextSlide, 5000);
    
    function updateSlider() {
        const translateX = -currentSlide * (100 / totalSlides);
        slider.style.transform = `translateX(${translateX}%)`;
        
        // Update indicators
        indicators.forEach((indicator, index) => {
            indicator.classList.toggle('active', index === currentSlide);
        });
    }
    
    function nextSlide() {
        currentSlide = (currentSlide + 1) % totalSlides;
        updateSlider();
    }
    
    function prevSlide() {
        currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
        updateSlider();
    }
    
    function goToSlide(slideIndex) {
        currentSlide = slideIndex;
        updateSlider();
    }
    
    // Event listeners
    nextBtn.addEventListener('click', () => {
        nextSlide();
        resetAutoSlide();
    });
    
    prevBtn.addEventListener('click', () => {
        prevSlide();
        resetAutoSlide();
    });
    
    indicators.forEach((indicator, index) => {
        indicator.addEventListener('click', () => {
            goToSlide(index);
            resetAutoSlide();
        });
    });
    
    // Reset auto-slide timer
    function resetAutoSlide() {
        clearInterval(autoSlideInterval);
        autoSlideInterval = setInterval(nextSlide, 5000);
    }
    
    // Pause auto-slide on hover
    const sliderContainer = document.querySelector('.slider-container');
    sliderContainer.addEventListener('mouseenter', () => {
        clearInterval(autoSlideInterval);
    });
    
    sliderContainer.addEventListener('mouseleave', () => {
        autoSlideInterval = setInterval(nextSlide, 5000);
    });
    
    // Touch/swipe support for mobile
    let startX = 0;
    let endX = 0;
    
    sliderContainer.addEventListener('touchstart', (e) => {
        startX = e.touches[0].clientX;
    });
    
    sliderContainer.addEventListener('touchend', (e) => {
        endX = e.changedTouches[0].clientX;
        handleSwipe();
    });
    
    function handleSwipe() {
        const swipeThreshold = 50;
        const diff = startX - endX;
        
        if (Math.abs(diff) > swipeThreshold) {
            if (diff > 0) {
                nextSlide();
            } else {
                prevSlide();
            }
            resetAutoSlide();
        }
    }
});
</script>
