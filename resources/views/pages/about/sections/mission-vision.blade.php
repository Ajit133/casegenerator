<section class="ceo-message-section">
    <div class="container">
        <div class="ceo-message-container">
            <div class="ceo-header">
                <div class="ceo-avatar">
                    <div class="ceo-icon">👨‍💼</div>
                </div>
                <div class="ceo-info">
                    <h2 class="ceo-title">CEO Message</h2>
                    <p class="ceo-position">Chief Executive Officer</p>
                    <div class="ceo-decoration">
                        <span class="decoration-line"></span>
                        <span class="decoration-dot"></span>
                        <span class="decoration-line"></span>
                    </div>
                </div>
            </div>

            <div class="ceo-content">
                <div class="content-quote">
                    <span class="quote-mark opening">"</span>
                    <p class="ceo-text">
                        Casablanca Electrical Generators & Equipment Trading is a leading company in the field of power generators, based in the United Arab Emirates since the early 2000s. Our diesel generators come with a large variety of sizes ranging from 9KVA to 2500KVA and feature big power with low emission and world-class fuel efficiency for prime, continuous, and standby applications.
                    </p>
                    <span class="quote-mark closing">"</span>
                </div>

                <div class="content-details">
                    <p class="detail-text">
                        Casablanca Electrical Generators is an Authorized Perkins-UK dealer and Distributor of all types and sizes within the UAE and globally.
                    </p>

                    <p class="detail-text">
                        Casablanca Electrical Generator's hallmark is exceptional preliminary and after-sale services. Our staff of highly trained, licensed professional engineers are working 24/7 on call. We are also well known for Annual Maintenance Contracts (AMC). Our clients range from government organizations to low and high-profile contracting companies.
                    </p>
                </div>

                <div class="ceo-signature">
                    <div class="signature-line"></div>
                    <p class="signature-name">CEO, Casablanca Electrical Generators</p>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
.ceo-message-section {
    padding: 80px 0;
    background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
    position: relative;
    overflow: hidden;
}

.ceo-message-section::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grain" width="100" height="100" patternUnits="userSpaceOnUse"><circle cx="25" cy="25" r="1" fill="%23ffffff" opacity="0.1"/><circle cx="75" cy="75" r="1" fill="%23ffffff" opacity="0.1"/><circle cx="50" cy="10" r="0.5" fill="%23ffffff" opacity="0.1"/><circle cx="10" cy="50" r="0.5" fill="%23ffffff" opacity="0.1"/><circle cx="90" cy="30" r="0.5" fill="%23ffffff" opacity="0.1"/></pattern></defs><rect width="100" height="100" fill="url(%23grain)"/></svg>');
    pointer-events: none;
}

.ceo-message-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
    position: relative;
    z-index: 2;
}

.ceo-header {
    display: flex;
    align-items: center;
    margin-bottom: 40px;
    background: white;
    padding: 40px;
    border-radius: 20px;
    border-left: 5px solid #C33162;
}

.ceo-avatar {
    margin-right: 30px;
    flex-shrink: 0;
}

.ceo-icon {
    width: 100px;
    height: 100px;
    background: linear-gradient(135deg, #C33162, #a0264c);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 40px;
    color: white;
    border: 4px solid white;
}

.ceo-info {
    flex: 1;
}

.ceo-title {
    font-size: 2.5rem;
    font-weight: 700;
    color: #2c3e50;
    margin: 0 0 10px 0;
    letter-spacing: -0.5px;
}

.ceo-position {
    font-size: 1.1rem;
    color: #6c757d;
    margin: 0 0 20px 0;
    font-weight: 500;
    text-transform: uppercase;
    letter-spacing: 1px;
}

.ceo-decoration {
    display: flex;
    align-items: center;
    gap: 10px;
}

.decoration-line {
    width: 30px;
    height: 2px;
    background: linear-gradient(90deg, #C33162, #a0264c);
    border-radius: 1px;
}

.decoration-dot {
    width: 8px;
    height: 8px;
    background: #C33162;
    border-radius: 50%;
}

.ceo-content {
    background: white;
    padding: 50px;
    border-radius: 20px;
    position: relative;
}

.content-quote {
    position: relative;
    margin-bottom: 30px;
}

.quote-mark {
    font-size: 4rem;
    color: #C33162;
    font-family: 'Georgia', serif;
    position: absolute;
    line-height: 1;
}

.quote-mark.opening {
    top: -20px;
    left: -30px;
}

.quote-mark.closing {
    bottom: -40px;
    right: -30px;
}

.ceo-text {
    font-size: 1.25rem;
    line-height: 1.8;
    color: #495057;
    margin: 0;
    font-style: italic;
    text-align: justify;
    padding: 0 40px;
}

.content-details {
    margin-bottom: 40px;
}

.detail-text {
    font-size: 1.1rem;
    line-height: 1.7;
    color: #6c757d;
    margin: 0 0 20px 0;
    text-align: justify;
}

.detail-text:last-child {
    margin-bottom: 0;
}

.ceo-signature {
    text-align: right;
    padding-top: 30px;
    border-top: 2px solid #e9ecef;
}

.signature-line {
    width: 200px;
    height: 2px;
    background: linear-gradient(90deg, transparent, #C33162, transparent);
    margin: 0 0 15px auto;
    border-radius: 1px;
}

.signature-name {
    font-size: 1.2rem;
    font-weight: 600;
    color: #2c3e50;
    margin: 0;
    letter-spacing: 0.5px;
}

@media (max-width: 768px) {
    .ceo-header {
        flex-direction: column;
        text-align: center;
        padding: 30px 20px;
    }

    .ceo-avatar {
        margin-right: 0;
        margin-bottom: 20px;
    }

    .ceo-title {
        font-size: 2rem;
    }

    .ceo-content {
        padding: 30px 20px;
    }

    .ceo-text {
        font-size: 1.1rem;
        padding: 0 20px;
    }

    .quote-mark {
        font-size: 3rem;
    }

    .quote-mark.opening {
        left: -20px;
    }

    .quote-mark.closing {
        right: -20px;
    }

    .detail-text {
        font-size: 1rem;
    }

    .signature-line {
        width: 150px;
    }
}

@media (max-width: 480px) {
    .ceo-message-section {
        padding: 40px 0;
    }

    .ceo-header {
        padding: 20px;
    }

    .ceo-icon {
        width: 80px;
        height: 80px;
        font-size: 30px;
    }

    .ceo-title {
        font-size: 1.8rem;
    }

    .ceo-content {
        padding: 20px;
    }

    .quote-mark {
        font-size: 2.5rem;
    }

    .ceo-text {
        font-size: 1rem;
        padding: 0 15px;
    }
}
</style>
