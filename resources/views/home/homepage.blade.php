<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brainz Nationz Entertainment | Premier Record Label</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Space+Grotesk:wght@400;500;600;700&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="{{ 'assets/style.css' }}" >

</head>
<body>
    <!-- Header -->
    <header>
        <div class="container">
            <div class="header-content">
                <a href="#" class="logo">
                    <div class="logo-img">
                         <img src="logo.png" alt="Brainz Nationz Logo" style="width: 100%; height: 100%; object-fit: cover;">
                    </div>
                    <div class="logo-text">
                        <h1>Brainz Nationz</h1>
                        <p>ENTERTAINMENT</p>
                    </div>
                </a>
                <button class="mobile-menu-btn">
                    <i class="fas fa-bars"></i>
                </button>
                <nav>
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropbtn">Services ▾</a>
                            <div class="dropdown-content">
                                <a href="#book-session">Book a Session</a>
                                <a href="#speak-management">Speak with Management</a>
                                <a href="#registration">Registration</a>
                                <a href="#book-appointment">Book an Appointment</a>
                                <a href="#academy">Academy (Apply to Learn Music)</a>
                            </div>
                        </li>
                        <li><a href="#instruments">Rentals</a></li>
                        <li><a href="#gallery">Gallery</a></li>
                        <li><a href="{{ url('artists') }}">Artists</a></li>
                        <li><a href="{{ url('contact') }}">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

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
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-microphone-alt"></i>
                    </div>
                    <div class="service-content">
                        <h3>Music Production</h3>
                        <p>Professional recording, mixing, and mastering services in state-of-the-art studios.</p>
                        <a href="#book-session" class="btn btn-outline">Book a Session</a>
                    </div>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <div class="service-content">
                        <h3>Artist Management</h3>
                        <p>Comprehensive artist development and career management services.</p>
                        <a href="#speak-management" class="btn btn-outline">Speak with Management</a>
                    </div>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <div class="service-content">
                        <h3>Music Academy</h3>
                        <p>Learn from industry professionals with our comprehensive music education programs.</p>
                        <a href="#academy" class="btn btn-outline">Apply Now</a>
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
    <section class="contact" id="contact">
        <div class="container">
            <div class="section-title">
                <h2>Contact Us</h2>
            </div>
            <div class="contact-content">
                <div class="contact-info">
                    <h3>Get In Touch</h3>
                    <p><i class="fas fa-map-marker-alt"></i> Port Harcourt Rivers State</p>
                    <p><i class="fas fa-phone"></i> 12345678</p>
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
    </section>
@include('home.footer')