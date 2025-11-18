@include('home.header')

<br>
<br>

<style>
    /* GENERAL STYLES */
    .book-session-section {
        padding: 50px 20px; /* added horizontal padding for small screens */
        background-color: #0A0A0A;
        color: #fff;
        font-family: Arial, sans-serif;
    }

    .book-session-section .section-title h2 {
        font-size: 34px;
        letter-spacing: 1px;
        margin-bottom: 25px;
    }

    .book-session-section p {
        max-width: 850px;
        margin: 0 auto 40px auto;
        text-align: center;
        font-size: 17px;
        line-height: 1.8;
        color: #ccc;
    }

    /* GRID LAYOUT */
    .contact-content {
        display: flex;
        gap: 40px;
        flex-wrap: wrap;
        justify-content: center;
    }

    .contact-info, .form-container {
        flex: 1;
        min-width: 300px;
        background-color: #1A1A1A;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.3);
    }

    .contact-info h3,
    .form-container h3 {
        margin-bottom: 20px;
        font-size: 22px;
    }

    .contact-info p, 
    .form-container label, 
    .form-container input, 
    .form-container select, 
    .form-container textarea {
        font-size: 15px;
        color: #ccc;
    }

    /* FORM STYLES */
    .form-group {
        margin-bottom: 20px;
        display: flex;
        flex-direction: column;
    }

    .form-group label {
        margin-bottom: 8px;
    }

    .form-group input, 
    .form-group select, 
    .form-group textarea {
        padding: 12px;
        border: 1px solid #333;
        border-radius: 6px;
        background-color: #0A0A0A;
        color: #fff;
        font-size: 15px;
        transition: border 0.3s;
    }

    .form-group input:focus, 
    .form-group select:focus, 
    .form-group textarea:focus {
        border-color: #fff;
        outline: none;
    }

    .btn {
        padding: 12px 25px;
        background-color: #fff;
        color: #0A0A0A;
        border: none;
        border-radius: 6px;
        font-size: 16px;
        cursor: pointer;
        transition: background 0.3s, color 0.3s;
    }

    .btn:hover {
        background-color: #ccc;
        color: #000;
    }

    /* SOCIAL ICONS */
    .social-icons {
        display: flex;
        gap: 15px;
        margin-top: 10px;
    }

    .social-icons a {
        color: #fff;
        font-size: 18px;
        transition: color 0.3s;
    }

    .social-icons a:hover {
        color: #ccc;
    }

    /* RESPONSIVE MEDIA QUERIES */
    @media (max-width: 1024px) {
        .contact-content {
            gap: 30px;
        }
    }

    @media (max-width: 768px) {
        .book-session-section .section-title h2 {
            font-size: 28px;
        }

        .book-session-section p {
            font-size: 16px;
        }

        .contact-content {
            flex-direction: column;
            gap: 25px;
        }
    }

    @media (max-width: 480px) {
        .book-session-section {
            padding: 40px 15px;
        }

        .form-group input,
        .form-group select,
        .form-group textarea {
            font-size: 14px;
        }

        .btn {
            width: 100%;
            font-size: 15px;
        }

        .contact-info p {
            font-size: 14px;
        }

        .social-icons {
            justify-content: flex-start;
        }
    }
</style>

<section class="book-session-section">
    <div class="container">

        <!-- Title -->
        <div class="section-title">
            <h2>Book a Studio Session</h2>
        </div>

        <!-- Intro Text -->
        <p>
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
        <div class="contact-content">

            <!-- Studio Info -->
            <div class="contact-info">
                <h3>Studio Information</h3>
                <p><i class="fas fa-map-marker-alt"></i> No 1 Chiorlu Street off Apara Link Road, Port Harcourt.</p>
                <p>
                    <i class="fas fa-phone"></i>
                    08188612964, 07069955185 <br>
                    07079157782, 08125236711
                </p>
                <p><i class="fas fa-envelope"></i> info@brainznationz.com</p>
                <p><i class="fas fa-clock"></i> Studio Hours: Mon–Fri: 9AM–6PM | Sat: 10AM–4PM</p>

                <h3 style="margin: 30px 0 10px 0;">Follow Us</h3>
                <div class="social-icons">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                </div>
            </div>

            <!-- Booking Form -->
            <div class="form-container">
                <h3>Session Booking Form</h3>
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
