<section class="certifications-section">
    <div class="container">
        <div class="section-header text-center">
            <h2 class="section-title">A Leading Company In The Field Of Power Generators Serving Since 2008</h2>
            <p class="section-subtitle">Authorised Perkins-UK/ Cummins-UK Reseller & Distributor</p>
        </div>
        
        
        <div class="certifications-grid">
            <div class="certification-card">
                <div class="cert-content">
                    <div class="cert-year">2020</div>
                    <h3 class="certification-name">Authorization Certificate</h3>
                    <p class="certification-description">We believe that partnerships are fundamental to our growth. We'll seek the highest quality global forwarding services.</p>
                </div>
                <div class="cert-image-container" onclick="openCertModal('{{ asset('images/Certificate/1-3-1-1.png') }}', 'Authorization Certificate')">
                    <img src="{{ asset('images/Certificate/1-3-1-1.png') }}" alt="Authorization Certificate" class="cert-img">
                    <div class="cert-overlay">
                        <i class="fas fa-search-plus"></i>
                        <span>Click to view</span>
                    </div>
                </div>
            </div>
            
            <div class="certification-card">
                <div class="cert-content">
                    <div class="cert-year">Verified</div>
                    <h3 class="certification-name">VAT Certification</h3>
                    <p class="certification-description">When we communicate, we are honest and direct. We won't make excuses, simply offer you a concrete solutions.</p>
                </div>
                <div class="cert-image-container" onclick="openCertModal('{{ asset('images/Certificate/2-2-1-1.png') }}', 'VAT Certification')">
                    <img src="{{ asset('images/Certificate/2-2-1-1.png') }}" alt="VAT Certification" class="cert-img">
                    <div class="cert-overlay">
                        <i class="fas fa-search-plus"></i>
                        <span>Click to view</span>
                    </div>
                </div>
            </div>
            
            <div class="certification-card">
                <div class="cert-content">
                    <div class="cert-year">2021</div>
                    <h3 class="certification-name">Chamber Of Commercial Certificate</h3>
                    <p class="certification-description">As a logistics solutions provider, we'll monitor your logistical objectives and make sure all your logistical activities.</p>
                </div>
                <div class="cert-image-container" onclick="openCertModal('{{ asset('images/Certificate/3-1-1.png') }}', 'Chamber Of Commercial Certificate')">
                    <img src="{{ asset('images/Certificate/3-1-1.png') }}" alt="Chamber Of Commercial Certificate" class="cert-img">
                    <div class="cert-overlay">
                        <i class="fas fa-search-plus"></i>
                        <span>Click to view</span>
                    </div>
                </div>
            </div>
            
            <div class="certification-card">
                <div class="cert-content">
                    <div class="cert-year">Authorized</div>
                    <h3 class="certification-name">Trading License</h3>
                    <p class="certification-description">We believe that partnerships are fundamental to our growth. We'll seek the highest quality global forwarding services.</p>
                </div>
                <div class="cert-image-container" onclick="openCertModal('{{ asset('images/Certificate/4-3-1-1.png') }}', 'Trading License')">
                    <img src="{{ asset('images/Certificate/4-3-1-1.png') }}" alt="Trading License" class="cert-img">
                    <div class="cert-overlay">
                        <i class="fas fa-search-plus"></i>
                        <span>Click to view</span>
                    </div>
                </div>
            </div>
            
            <div class="certification-card">
                <div class="cert-content">
                    <div class="cert-year">ISO Certified</div>
                    <h3 class="certification-name">ISO Certification</h3>
                    <p class="certification-description">When we communicate, we are honest and direct. We won't make excuses, simply offer you a concrete solutions.</p>
                </div>
                <div class="cert-image-container" onclick="openCertModal('{{ asset('images/Certificate/5-3-1-1-2.png') }}', 'ISO Certification')">
                    <img src="{{ asset('images/Certificate/5-3-1-1-2.png') }}" alt="ISO Certification" class="cert-img">
                    <div class="cert-overlay">
                        <i class="fas fa-search-plus"></i>
                        <span>Click to view</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Certificate Modal -->
<div id="certModal" class="cert-modal">
    <span class="cert-modal-close" onclick="closeCertModal()">&times;</span>
    <div class="cert-modal-content">
        <img id="certModalImage" src="" alt="">
        <div class="cert-modal-caption" id="certModalCaption"></div>
    </div>
</div>

<style>
/* Certificate Container Hover Effect */
.cert-image-container {
    position: relative;
    cursor: pointer;
    overflow: hidden;
    transition: transform 0.3s ease;
}

.cert-image-container:hover {
    transform: scale(1.05);
}

.cert-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.7);
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    opacity: 0;
    transition: opacity 0.3s ease;
    color: white;
}

.cert-image-container:hover .cert-overlay {
    opacity: 1;
}

.cert-overlay i {
    font-size: 2.5rem;
    margin-bottom: 10px;
}

.cert-overlay span {
    font-size: 1rem;
    font-weight: 500;
    text-transform: uppercase;
    letter-spacing: 1px;
}

/* Modal Styles */
.cert-modal {
    display: none;
    position: fixed;
    z-index: 9999;
    padding: 50px 20px;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0, 0, 0, 0.95);
    animation: fadeIn 0.3s ease;
}

@keyframes fadeIn {
    from { opacity: 0; }
    to { opacity: 1; }
}

.cert-modal-content {
    margin: auto;
    display: block;
    max-width: 60%;
    max-height: 90vh;
    position: relative;
    animation: zoomIn 0.3s ease;
}

@keyframes zoomIn {
    from { transform: scale(0.8); }
    to { transform: scale(1); }
}

#certModalImage {
    width: 100%;
    height: auto;
    border-radius: 8px;
    box-shadow: 0 10px 50px rgba(0, 0, 0, 0.5);
}

.cert-modal-caption {
    text-align: center;
    color: #ffffff;
    padding: 20px;
    font-size: 1.2rem;
    font-weight: 600;
    margin-top: 15px;
}

.cert-modal-close {
    position: absolute;
    top: 20px;
    right: 40px;
    color: #ffffff;
    font-size: 50px;
    font-weight: bold;
    transition: 0.3s;
    cursor: pointer;
    z-index: 10000;
    text-shadow: 0 2px 10px rgba(0, 0, 0, 0.5);
}

.cert-modal-close:hover,
.cert-modal-close:focus {
    color: #f44336;
    transform: scale(1.2);
}

/* Responsive Adjustments */
@media (max-width: 768px) {
    .cert-modal-content {
        max-width: 95%;
    }
    
    .cert-modal-close {
        top: 10px;
        right: 20px;
        font-size: 40px;
    }
    
    .cert-overlay i {
        font-size: 2rem;
    }
    
    .cert-modal-caption {
        font-size: 1rem;
    }
}
</style>

<script>
function openCertModal(imageSrc, altText) {
    const modal = document.getElementById('certModal');
    const modalImg = document.getElementById('certModalImage');
    const caption = document.getElementById('certModalCaption');
    
    modal.style.display = 'block';
    modalImg.src = imageSrc;
    caption.textContent = altText;
    
    // Prevent body scroll when modal is open
    document.body.style.overflow = 'hidden';
}

function closeCertModal() {
    const modal = document.getElementById('certModal');
    modal.style.display = 'none';
    
    // Restore body scroll
    document.body.style.overflow = 'auto';
}

// Close modal when clicking outside the image
document.addEventListener('DOMContentLoaded', function() {
    const modal = document.getElementById('certModal');
    
    modal.addEventListener('click', function(event) {
        if (event.target === modal) {
            closeCertModal();
        }
    });
    
    // Close modal with Escape key
    document.addEventListener('keydown', function(event) {
        if (event.key === 'Escape') {
            closeCertModal();
        }
    });
});
</script>
