@include('home.header')

<br>
<br>
<!-- SPEAK WITH MANAGEMENT PAGE -->
<section class="management-section" style="padding: 50px 0;">
    <div class="container">

        <!-- Title -->
        <div class="section-title" style="text-align: center; margin-bottom: 25px;">
            <h2 style="font-size: 34px; letter-spacing: 1px;">Speak With Management</h2>
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
            Whether you’re an artist looking for professional guidance, partnership opportunities,
            brand collaborations, project discussions, or confidential consultations, the 
            <strong>Brainz Nationz Entertainment Management Team</strong> is here to support you.
            <br><br>
            Our management handles artist development, label relations, business strategy, bookings,
            project oversight, and partnership evaluations.  
            <br><br>
            <strong>Fill out the form below and a management representative will respond promptly.</strong>
        </p>

        <!-- GRID LAYOUT -->
        <div class="contact-content" style="margin-top: 20px; display: flex; gap: 40px; flex-wrap: wrap;">

            <!-- Management Info -->
            <div class="contact-info" style="flex: 1; min-width: 280px;">
                <h3 style="margin-bottom: 20px; font-size: 22px;">Management Contact</h3>

                <p><i class="fas fa-map-marker-alt"></i> No 1 Chiorlu Street off Apara Link Road, Port Harcourt.</p>

                <p>
                    <i class="fas fa-phone"></i>
                   <span>08188612964 | 07069955185 | 07079157782 | 08125236711</span>
                </p>

                <p><i class="fas fa-envelope"></i> management@brainznationz.com</p>
                <p><i class="fas fa-clock"></i> Available: Mon–Fri: 10AM–6PM</p>

                <h3 style="margin: 30px 0 10px 0; font-size: 22px;">Follow Us</h3>
                <div class="social-icons" style="display: flex; gap: 10px;">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                </div>
            </div>

            <!-- Management Form -->
            <div class="form-container" style="flex: 1; min-width: 280px;">
                <h3 style="margin-bottom: 20px; font-size: 22px;">Management Request Form</h3>
                                       @if(session('success'))
  @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show shadow-sm d-flex align-items-center" role="alert">
        <i class="bi bi-check-circle-fill me-2"></i>
        <span>{{ session('success') }}</span>
        <button type="button" class="btn-close ms-auto" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

               <form id="managementForm" method="POST" action="{{ route('management.store') }}">
    @csrf


                    <div class="form-group">
                        <label for="name">Full Name</label>
                        <input type="text" id="name" name="name" required>
                    </div>

                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" id="email" name="email" required>
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
                            <option value="other">Other (Explain Below)</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="message">Explain Your Request</label>
                        <textarea id="message" name="message" rows="5" required></textarea>
                    </div>

                    <button type="submit" class="btn">Submit Request</button>
                </form>
            </div>

        </div>
    </div>
</section>

@include('home.footer')
