@include('home.header')

<br>
<br>

<!-- BOOK A SESSION PAGE -->
<section class="book-session-section" style="padding: 50px 0;">
    <div class="container">

        <!-- Title -->
        <div class="section-title" style="text-align: center; margin-bottom: 25px;">
            <h2 style="font-size: 34px; letter-spacing: 1px;">Book a Studio Session</h2>
        </div>

        <!-- Intro Text -->
        <p style="
            max-width: 850px;
            margin: 0 auto 40px auto;
            text-align: center;
            font-size: 17px;
            line-height: 1.8;
            color: #ccc;
        ">
            At <strong>Brainz Nationz Entertainment</strong>, our recording studio is built for creativity, quality,
            and professional sound production. Whether you're recording a new track, producing a full project,
            rehearsing, or working with our engineers, we ensure that every artist receives the best support and
            industry-level experience.
            <br><br>
            We provide high-end equipment, experienced producers, and a comfortable studio environment designed to
            bring out your best performance. 
            <br><br>
            <strong>Fill out the form below to book your session and our team will get back to you immediately.</strong>
        </p>

        <!-- GRID LAYOUT -->
        <div class="contact-content" style="margin-top: 20px; display: flex; gap: 40px; flex-wrap: wrap;">

            <!-- Studio Info -->
            <div class="contact-info" style="flex: 1; min-width: 280px;">
                <h3 style="margin-bottom: 20px; font-size: 22px;">Studio Information</h3>

                <p><i class="fas fa-map-marker-alt"></i> No 1 Chiorlu Street off Apara Link Road, Port Harcourt.</p>

                {{-- <p>
                    <i class="fas fa-phone"></i>
                    08188612964, 07069955185 <br>
                    07079157782, 08125236711
                </p> --}}

                <p><i class="fas fa-envelope"></i> info@brainznationz.com</p>
                <p><i class="fas fa-clock"></i> Studio Hours: Mon–Fri: 9AM–6PM | Sat: 10AM–4PM</p>

                <h3 style="margin: 30px 0 10px 0; font-size: 22px;">Follow Us</h3>
                <div class="social-icons" style="display: flex; gap: 10px;">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                </div>
            </div>

            <!-- Booking Form -->
            <div class="form-container" style="flex: 1; min-width: 280px;">
                <h3 style="margin-bottom: 20px; font-size: 22px;">Session Booking Form</h3>

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
                        <label for="service">Type of Session</label>
                        <select id="service" name="service">
                            <option value="">Select session type</option>
                            <option value="recording">Studio Recording</option>
                            <option value="mixing">Mixing & Mastering</option>
                            <option value="rehearsal">Rehearsal Session</option>
                            <option value="full_project">Full Project Production</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="message">Additional Details</label>
                        <textarea id="message" name="message" rows="5" required></textarea>
                    </div>

                    <button type="submit" class="btn">Submit Booking</button>
                </form>
            </div>

        </div>
    </div>
</section>

@include('home.footer')
