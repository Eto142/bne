@include('home.header')
      <!-- Contact Section -->
      <br>
      <br>
    <section id="contact">
        <div class="container">
            <h2 class="section-title">Get In Touch</h2>
            <div class="contact-content">
                <div class="contact-info">
                    <h3>Contact Information</h3>
                    <p><i class="fas fa-map-marker-alt"></i> Port Harcourt Rivers State</p>
                    <p><i class="fas fa-phone"></i> 12345678</p>
                    <p><i class="fas fa-envelope"></i> info@brainznationz.com</p>
                    <p><i class="fas fa-clock"></i> Mon-Fri: 9AM-6PM | Sat: 10AM-4PM</p>
                    
                    <h3 style="margin-top: 30px;">Follow Us</h3>
                    <div class="social-icons">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                        <a href="#"><i class="fab fa-spotify"></i></a>
                    </div>
                </div>
                <div class="form-container">
                    <form id="contact-form">
                        <div class="form-group">
                            <label for="contact-name">Full Name</label>
                            <input type="text" id="contact-name" required>
                        </div>
                        <div class="form-group">
                            <label for="contact-email">Email</label>
                            <input type="email" id="contact-email" required>
                        </div>
                        <div class="form-group">
                            <label for="contact-subject">Subject</label>
                            <select id="contact-subject" required>
                                <option value="">Select a subject</option>
                                <option value="session">Book a Session</option>
                                <option value="management">Artist Management</option>
                                <option value="academy">Music Academy</option>
                                <option value="rentals">Instrument Rentals</option>
                                <option value="partnership">Business Partnership</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="contact-message">Your Message</label>
                            <textarea id="contact-message" rows="5" placeholder="Tell us how we can help you"></textarea>
                        </div>
                        <button type="submit" class="btn">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

   @include('home.footer')