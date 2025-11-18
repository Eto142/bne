@include('home.header')

<!-- CONTACT SECTION -->
<section class="contact-section" id="contact">
    <div class="container">

        <!-- Section Title -->
        <div class="section-title">
            <h2>Contact Us</h2>
        </div>

        <!-- Grid Layout -->
        <div class="contact-grid">

            <!-- Contact Info -->
            <div class="contact-details">
                <h3>Get In Touch</h3>
                <p><i class="fas fa-map-marker-alt"></i> No 1 Chiorlu Street off Apara Link Road, PH.</p>
                <p><i class="fas fa-phone"></i> 08188612964, 07069955185<br>07079157782, 08125236711</p>
                <p><i class="fas fa-envelope"></i> info@brainznationz.com</p>
                <p><i class="fas fa-clock"></i> Mon-Fri: 9AM-6PM | Sat: 10AM-4PM</p>
                <div class="social-icons">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="contact-form">
                <form id="contactForm">
                    <div class="form-group">
                        <label for="name">Full Name</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="service">Service Interested In</label>
                        <select id="service" name="service">
                            <option value="">Select a service</option>
                            <option value="production">Music Production</option>
                            <option value="management">Artist Management</option>
                            <option value="academy">Music Academy</option>
                            <option value="rentals">Instrument Rentals</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea id="message" name="message" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="btn">Send Message</button>
                </form>
            </div>

        </div>
    </div>
</section>

@include('home.footer')

<style>
    /* CONTACT SECTION */
.contact-section {
    padding: 50px 20px;
    background-color: #0A0A0A;
    color: #fff;
    font-family: Arial, sans-serif;
}

.contact-section .section-title {
    text-align: center;
    margin-bottom: 30px;
}

.contact-section .section-title h2 {
    font-size: 32px;
    letter-spacing: 1px;
}

/* GRID LAYOUT */
.contact-grid {
    display: flex;
    gap: 40px;
    flex-wrap: wrap;
    justify-content: center;
}

/* CONTACT DETAILS */
.contact-details, .contact-form {
    flex: 1;
    min-width: 300px;
    background-color: #1A1A1A;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.3);
}

.contact-details h3 {
    margin-bottom: 20px;
}

.contact-details p {
    font-size: 15px;
    margin-bottom: 10px;
}

.social-icons {
    display: flex;
    gap: 15px;
    margin-top: 15px;
}

.social-icons a {
    color: #fff;
    font-size: 18px;
    transition: color 0.3s;
}

.social-icons a:hover {
    color: #ccc;
}

/* CONTACT FORM */
.contact-form h3 {
    margin-bottom: 20px;
}

.contact-form .form-group {
    margin-bottom: 20px;
    display: flex;
    flex-direction: column;
}

.contact-form .form-group label {
    margin-bottom: 8px;
    font-size: 15px;
}

.contact-form input,
.contact-form select,
.contact-form textarea {
    padding: 12px;
    border-radius: 6px;
    border: 1px solid #333;
    background-color: #0A0A0A;
    color: #fff;
    font-size: 15px;
    transition: border 0.3s;
    width: 100%;
}

.contact-form input:focus,
.contact-form select:focus,
.contact-form textarea:focus {
    border-color: #fff;
    outline: none;
}

.contact-form .btn {
    padding: 12px 25px;
    background-color: #fff;
    color: #0A0A0A;
    border: none;
    border-radius: 6px;
    font-size: 16px;
    cursor: pointer;
    width: 100%;
    transition: background 0.3s, color 0.3s;
}

.contact-form .btn:hover {
    background-color: #ccc;
    color: #000;
}

/* RESPONSIVE MEDIA QUERIES */
@media (max-width: 1024px) {
    .contact-grid {
        gap: 30px;
    }
}

@media (max-width: 768px) {
    .contact-grid {
        flex-direction: column;
        gap: 25px;
    }

    .contact-section .section-title h2 {
        font-size: 28px;
    }

    .contact-details p,
    .contact-form label {
        font-size: 15px;
    }
}

@media (max-width: 480px) {
    .contact-section {
        padding: 40px 15px;
    }

    .contact-form .btn {
        font-size: 14px;
        padding: 12px;
    }

    .social-icons {
        justify-content: flex-start;
    }
}

</style>