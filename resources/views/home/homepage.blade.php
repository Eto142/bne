@include('home.header')

    <!-- Hero Slideshow Section -->
    <section class="hero-slideshow" id="home">
        <div class="music-notes" id="musicNotes"></div>
        
        <!-- Slide 1 -->
        <div class="hero-slide slide-1 active">
            <div class="container">
                <div class="hero-content">
                    <h2>Fueling Dreams & Building Legends</h2>
                    <p>Where Creativity Meets Power.</p>
                    <div class="hero-buttons">
                        <a href="#contact" class="btn">Get Started</a>
                        <a href="#about" class="btn btn-outline">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Slide 2 -->
        <div class="hero-slide slide-2">
            <div class="container">
                <div class="hero-content">
                    <h2>Premier Music Production</h2>
                    <p>State-of-the-art studios for exceptional sound.</p>
                    <div class="hero-buttons">
                        <a href="#services" class="btn">Book a Session</a>
                        <a href="#gallery" class="btn btn-outline">View Our Work</a>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Slide 3 -->
        <div class="hero-slide slide-3">
            <div class="container">
                <div class="hero-content">
                    <h2>Artist Development & Management</h2>
                    <p>Nurturing talent to reach their full potential.</p>
                    <div class="hero-buttons">
                        <a href="#artists" class="btn">Meet Our Artists</a>
                        <a href="#contact" class="btn btn-outline">Join Our Roster</a>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Slide Controls -->
        <div class="slide-nav">
            <div class="slide-nav-btn prev-slide">
                <i class="fas fa-chevron-left"></i>
            </div>
            <div class="slide-nav-btn next-slide">
                <i class="fas fa-chevron-right"></i>
            </div>
        </div>
        
        <div class="slide-controls">
            <div class="slide-dots">
                <div class="dot active" data-slide="0"></div>
                <div class="dot" data-slide="1"></div>
                <div class="dot" data-slide="2"></div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="about" id="about">
        <div class="container">
            <div class="section-title">
                <h2>About Brainz Nationz</h2>
            </div>
            <div class="about-content">
                <div class="about-text">
                    <h2>Our Story</h2>
                    <p>Brainz Nationz Entertainment is a premier record label and music production company dedicated to discovering and nurturing exceptional talent. With a focus on innovation and creativity, we provide a platform for artists to thrive in the competitive music industry.</p>
                    <p>Our team of experienced professionals works closely with each artist to develop their unique sound and brand, ensuring they reach their full potential and make a lasting impact in the music world.</p>
                    <a href="#contact" class="btn">Get in Touch</a>
                </div>
                <div class="about-image">
                    <img src="https://images.unsplash.com/photo-1511379938547-c1f69419868d?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80" alt="Recording Studio">
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
      <section class="services" id="services">
    <div class="container">

        <div class="section-title">
            <h2>Our Services</h2>
        </div>

        <div class="services-grid">

            <!-- Multimedia Experience -->
            <div class="service-card">
                <div class="service-icon"><i class="fas fa-film"></i></div>
                <div class="service-content">
                    <h3>Multimedia Experience</h3>
                    <p>Complete multimedia solutions for events, productions, and digital content creation.</p>
                </div>
            </div>

            <!-- Audio Visual Production -->
            <div class="service-card">
                <div class="service-icon"><i class="fas fa-video"></i></div>
                <div class="service-content">
                    <h3>Audio Visual Production</h3>
                    <p>High-quality AV production for concerts, events, films, and live shows.</p>
                </div>
            </div>

            <!-- Media Services -->
            <div class="service-card">
                <div class="service-icon"><i class="fas fa-broadcast-tower"></i></div>
                <div class="service-content">
                    <h3>Media Services</h3>
                    <p>Media coverage, content creation, and broadcast-level media solutions.</p>
                </div>
            </div>

            <!-- Sound Engineering -->
            <div class="service-card">
                <div class="service-icon"><i class="fas fa-headphones"></i></div>
                <div class="service-content">
                    <h3>Sound Engineering</h3>
                    <p>Professional sound setup, live audio, studio sound, and engineering services.</p>
                </div>
            </div>

            <!-- Equipment Procurement -->
            <div class="service-card">
                <div class="service-icon"><i class="fas fa-box-open"></i></div>
                <div class="service-content">
                    <h3>Equipment Procurement</h3>
                    <p>Supply of quality audio, visual, studio, and stage equipment.</p>
                </div>
            </div>

            <!-- Screens & Display -->
            <div class="service-card">
                <div class="service-icon"><i class="fas fa-desktop"></i></div>
                <div class="service-content">
                    <h3>Screens & Display</h3>
                    <p>LED screens, projector displays, and digital visual installations.</p>
                </div>
            </div>

            <!-- Stage & Platform -->
            <div class="service-card">
                <div class="service-icon"><i class="fas fa-layer-group"></i></div>
                <div class="service-content">
                    <h3>Stage & Platform Setup</h3>
                    <p>Custom stage building, platforms, and event structures for all occasions.</p>
                </div>
            </div>

            <!-- Stage Lighting -->
            <div class="service-card">
                <div class="service-icon"><i class="fas fa-lightbulb"></i></div>
                <div class="service-content">
                    <h3>Stage Lighting</h3>
                    <p>Professional lighting design and installation for events and productions.</p>
                </div>
            </div>

            <!-- Mixing and Mastering -->
            <div class="service-card">
                <div class="service-icon"><i class="fas fa-wave-square"></i></div>
                <div class="service-content">
                    <h3>Mixing & Mastering</h3>
                    <p>Studio-grade audio mixing and mastering for artists and content creators.</p>
                </div>
            </div>

            <!-- Audio Consultancy -->
            <div class="service-card">
                <div class="service-icon"><i class="fas fa-user-cog"></i></div>
                <div class="service-content">
                    <h3>Audio Consultancy</h3>
                    <p>Expert audio setup, studio design, and sound quality optimization.</p>
                </div>
            </div>

            <!-- Cinematography -->
            <div class="service-card">
                <div class="service-icon"><i class="fas fa-video"></i></div>
                <div class="service-content">
                    <h3>Cinematography</h3>
                    <p>Professional film shooting, camera work, and visual storytelling.</p>
                </div>
            </div>

            <!-- Podcast Production -->
            <div class="service-card">
                <div class="service-icon"><i class="fas fa-podcast"></i></div>
                <div class="service-content">
                    <h3>Podcast Production</h3>
                    <p>Podcast setup, audio recording, editing, and publishing services.</p>
                </div>
            </div>

            <!-- Digital & Live Studio -->
            <div class="service-card">
                <div class="service-icon"><i class="fas fa-broadcast-tower"></i></div>
                <div class="service-content">
                    <h3>Digital & Live Studio</h3>
                    <p>Full digital and live studio solutions for creators and professionals.</p>
                </div>
            </div>

            <!-- Recording Sessions -->
            <div class="service-card">
                <div class="service-icon"><i class="fas fa-microphone-alt"></i></div>
                <div class="service-content">
                    <h3>Recording Sessions</h3>
                    <p>High-quality studio recording for artists, bands, and voice-over projects.</p>
                </div>
            </div>

            <!-- Music Production -->
            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-microphone-alt"></i>
                </div>
                <div class="service-content">
                    <h3>Music Production</h3>
                    <p>Professional recording, mixing, and mastering services in state-of-the-art studios.</p>
                    <a href="{{ url('book-session') }}" class="btn btn-outline">Book a Session</a>
                </div>
            </div>

            <!-- Artist Management -->
            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-users"></i>
                </div>
                <div class="service-content">
                    <h3>Artist Management</h3>
                    <p>Comprehensive artist development and career management services.</p>
                    <a href="{{ url('speak-management') }}" class="btn btn-outline">Speak with Management</a>
                </div>
            </div>

            <!-- Music Academy -->
            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-graduation-cap"></i>
                </div>
                <div class="service-content">
                    <h3>Music Academy</h3>
                    <p>Learn from industry professionals with our comprehensive music education programs.</p>
                    <a href="{{ url('academy') }}" class="btn btn-outline">Apply Now</a>
                </div>
            </div>

        </div>
    </div>
</section>


    @include('home.instrument')
  

    <!-- Gallery Section -->
    <section class="gallery" id="gallery">
        <div class="container">
            <div class="section-title">
                <h2>Gallery</h2>
            </div>
            <div class="gallery-grid">
                <div class="gallery-item">
                    <img src="{{ asset('assets/images/set1.jpg') }}" alt="Studio Session">
                    <div class="gallery-overlay">
                        <h3>Studio Session</h3>
                    </div>
                </div>
                <div class="gallery-item">
                    <img src="{{ asset('assets/images/set2.jpg') }}" alt="Live Performance">
                    <div class="gallery-overlay">
                        <h3>Live Performance</h3>
                    </div>
                </div>
                <div class="gallery-item">
                    <img src="{{ asset('assets/images/set3.jpg') }}" alt="Music Production">
                    <div class="gallery-overlay">
                        <h3>Music Production</h3>
                    </div>
                </div>

                  <div class="gallery-item">
                    <img src="{{ asset('assets/images/set4.jpg') }}" alt="Music Production">
                    <div class="gallery-overlay">
                        <h3>Music Production</h3>
                    </div>
                </div>

                  <div class="gallery-item">
                    <img src="{{ asset('assets/images/set5.jpg') }}" alt="Music Production">
                    <div class="gallery-overlay">
                        <h3>Music Production</h3>
                    </div>
                </div>

                  <div class="gallery-item">
                    <img src="{{ asset('assets/images/set6.jpg') }}" alt="Music Production">
                    <div class="gallery-overlay">
                        <h3>Music Production</h3>
                    </div>
                </div>
                
            </div>
        </div>
    </section>

  

    <!-- Contact Section -->
{{--   
     <section class="contact" id="contact">
        <div class="container">
            <div class="section-title">
                <h2>Contact Us</h2>
            </div>
            <div class="contact-content">
                <div class="contact-info">
                    <h3>Get In Touch</h3>
                    <p><i class="fas fa-map-marker-alt"></i> No 1 Chiorlu Street off Apara
Link Road, PH.</p>
                    <p><i class="fas fa-phone"></i> 08188612964 or 07069955185
07079157782 or 08125236711</p>
                    <p><i class="fas fa-envelope"></i> info@brainznationz.com</p>
                    <p><i class="fas fa-clock"></i> Mon-Fri: 9AM-6PM, Sat: 10AM-4PM</p>
                    <div class="social-icons">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                <div class="form-container">
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
    </section> --}}



@include('home.footer')