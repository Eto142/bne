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

