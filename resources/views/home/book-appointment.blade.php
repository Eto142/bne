@include('home.header')

<br>
<br>
<!-- BOOK AN APPOINTMENT PAGE -->
<section class="appointment-section">
    <div class="container">

        <!-- Page Title -->
        <div class="section-title">
            <h2>Book an Appointment</h2>
        </div>

        <!-- Intro Text -->
        <p class="intro-text">
            Whether you’re an artist looking for professional guidance, partnership opportunities,
            brand collaborations, project discussions, or confidential consultations, the 
            <strong>Brainz Nationz Entertainment Management Team</strong> is here to support you.
            <br><br>
            Fill out the form below and a management representative will respond promptly.
        </p>

        <!-- Grid Layout -->
        <div class="appointment-grid">

            <!-- Management Contact Info -->
            <div class="contact-info">
                <h3>Contact Management</h3>

                <p><i class="fas fa-map-marker-alt"></i> No 1 Chiorlu Street off Apara Link Road, Port Harcourt.</p>
                <p><i class="fas fa-phone"></i> 08188612964 | 07069955185 | 07079157782 | 08125236711</p>
                <p><i class="fas fa-envelope"></i> management@brainznationz.com</p>
                <p><i class="fas fa-clock"></i> Mon–Fri: 10AM–6PM</p>

                <h3>Follow Us</h3>
                <div class="social-icons">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                </div>
            </div>

            <!-- Appointment Form -->
            <div class="form-container">
                <h3>Appointment Form</h3>

                <form id="appointmentForm">

                    <div class="form-group">
                        <label for="name">Full Name</label>
                        <input type="text" id="name" name="name" placeholder="Enter your full name" required>
                    </div>

                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" id="email" name="email" placeholder="Enter your email" required>
                    </div>

                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="tel" id="phone" name="phone" placeholder="Enter your phone number" required>
                    </div>

                    <div class="form-group">
                        <label for="topic">Reason for Request</label>
                        <select id="topic" name="topic" required>
                            <option value="">Select an option</option>
                            <option value="artist_support">Artist Support / Development</option>
                            <option value="label_discussion">Label / Record Deal Discussion</option>
                            <option value="brand_partnership">Brand / Business Partnership</option>
                            <option value="project_review">Project Review / Consultation</option>
                            <option value="booking">Show / Event Booking</option>
                            <option value="other">Other</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="message">Additional Details</label>
                        <textarea id="message" name="message" rows="5" placeholder="Provide more details about your request..." required></textarea>
                    </div>

                    <button type="submit" class="btn">Book Appointment</button>
                </form>
            </div>

        </div>
    </div>
</section>

@include('home.footer')

<!-- STYLES -->
<style>
.appointment-section {
    padding: 60px 20px;
    background: #0A0A0A;
    color: #ccc;
    font-family: 'Poppins', sans-serif;
}

.section-title {
    text-align: center;
    margin-bottom: 20px;
}

.section-title h2 {
    font-size: 34px;
    color: #fff;
}

.intro-text {
    text-align: center;
    font-size: 17px;
    max-width: 800px;
    margin: 0 auto 50px auto;
    line-height: 1.8;
}

.appointment-grid {
    display: flex;
    gap: 40px;
    flex-wrap: wrap;
    justify-content: center;
}

.contact-info, .form-container {
    flex: 1;
    min-width: 300px;
    background: #1A1A1A;
    padding: 30px;
    border-radius: 10px;
}

.contact-info h3, .form-container h3 {
    margin-bottom: 20px;
    font-size: 22px;
    color: #fff;
}

.contact-info p {
    margin: 10px 0;
}

.social-icons {
    display: flex;
    gap: 10px;
    margin-top: 10px;
}

.social-icons a {
    color: #fff;
    font-size: 18px;
    transition: 0.3s;
}

.social-icons a:hover {
    color: #FF4081;
}

.form-container .form-group {
    margin-bottom: 20px;
}

.form-container label {
    display: block;
    margin-bottom: 8px;
}

.form-container input,
.form-container select,
.form-container textarea {
    width: 100%;
    padding: 10px 12px;
    border-radius: 6px;
    border: 1px solid #333;
    background: #0A0A0A;
    color: #fff;
    font-size: 15px;
}

.form-container input:focus,
.form-container select:focus,
.form-container textarea:focus {
    outline: none;
    border-color: #FF4081;
}

.btn {
    display: inline-block;
    padding: 12px 25px;
    background: #FF4081;
    color: #fff;
    border: none;
    border-radius: 6px;
    cursor: pointer;
    font-size: 16px;
    transition: 0.3s;
    width: 100%;
}

.btn:hover {
    background: #e73370;
}

/* Responsive */
@media (max-width: 991px) {
    .appointment-grid {
        flex-direction: column;
        gap: 30px;
    }
}

@media (max-width: 480px) {
    .section-title h2 {
        font-size: 28px;
    }
    .intro-text {
        font-size: 15px;
    }
}
</style>
