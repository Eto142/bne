@include('home.header')

<br>
<br>
<!-- MUSIC ACADEMY APPLICATION PAGE -->
<section class="academy-apply-section">
    <div class="container">

        <!-- Page Title -->
        <div class="section-title">
            <h2>Apply to Learn Music</h2>
        </div>

        <!-- Intro Text -->
        <p class="intro-text">
            Welcome to <strong>Brainz Nationz Music Academy</strong>!  
            Fill out the form below to apply for our music programs. Our team will review your application 
            and get back to you promptly.
        </p>

        <!-- Grid Layout -->
        <div class="academy-grid">

            <!-- Optional Contact Info -->
            <div class="contact-info">
                <h3>Contact Academy</h3>

                <p><i class="fas fa-map-marker-alt"></i> No 1 Chiorlu Street off Apara Link Road, Port Harcourt.</p>
                <p><i class="fas fa-phone"></i> 08188612964 | 07069955185 | 07079157782 | 08125236711</p>
                <p><i class="fas fa-envelope"></i> academy@brainznationz.com</p>
                <p><i class="fas fa-clock"></i> Mon–Fri: 10AM–6PM</p>

                <h3>Follow Us</h3>
                <div class="social-icons">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                </div>
            </div>

            <!-- Academy Application Form -->
            <div class="form-container">
                <h3>Application Form</h3>

                <form id="academyForm">

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
                        <label for="age">Age</label>
                        <input type="number" id="age" name="age" placeholder="Enter your age" required>
                    </div>

                    <div class="form-group">
                        <label for="instrument">Instrument / Area of Interest</label>
                        <select id="instrument" name="instrument" required>
                            <option value="">Select an option</option>
                            <option value="vocals">Vocals</option>
                            <option value="guitar">Guitar</option>
                            <option value="piano">Piano / Keyboard</option>
                            <option value="drums">Drums / Percussion</option>
                            <option value="bass">Bass</option>
                            <option value="music_production">Music Production</option>
                            <option value="other">Other</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="experience">Previous Experience (if any)</label>
                        <textarea id="experience" name="experience" rows="4" placeholder="Describe any musical experience you have"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="message">Why do you want to join the academy?</label>
                        <textarea id="message" name="message" rows="4" placeholder="Tell us about your goals and passion for music" required></textarea>
                    </div>

                    <button type="submit" class="btn">Submit Application</button>
                </form>
            </div>

        </div>
    </div>
</section>

@include('home.footer')

<!-- STYLES -->
<style>
.academy-apply-section {
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

.academy-grid {
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
    .academy-grid {
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
