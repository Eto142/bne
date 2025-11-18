
    <!-- Footer -->
<!-- Footer -->
<footer class="bne-footer">
    <div class="bne-footer-container">

        <!-- Contact Info Top Row -->
        <div class="bne-contact-top">
            <div class="bne-contact-item">
                <i class="fas fa-map-marker-alt"></i>
                <span>No 1 Chiorlu Street, Off Apara Link Road, Port Harcourt</span>
            </div>
            <div class="bne-contact-item">
                <i class="fas fa-phone-alt"></i>
                <span>08188612964 | 07069955185 | 07079157782 | 08125236711</span>
            </div>
            <div class="bne-contact-item">
                <i class="fas fa-envelope"></i>
                <span>BNE_Official@aol.com | official.bne001@gmail.com</span>
            </div>
        </div>

        <!-- Footer Columns -->
        <div class="bne-footer-grid">

            <div class="bne-column about-column">
                <h3>Brainz Nationz</h3>
                <p>Premier record label and music production company dedicated to discovering and nurturing exceptional talent.</p>
                <div class="bne-social-icons">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                </div>
            </div>

            <div class="bne-column links-column">
                <h3>Quick Links</h3>
                <p><a href="#home">Home</a></p>
                <p><a href="#about">About</a></p>
                <p><a href="#services">Services</a></p>
                <p><a href="#artists">Artists</a></p>
                <p><a href="#contact">Contact</a></p>
            </div>

            <div class="bne-column services-column">
                <h3>Services</h3>
                <p><a href="#book-session">Book a Session</a></p>
                <p><a href="#speak-management">Artist Management</a></p>
                <p><a href="#academy">Music Academy</a></p>
                <p><a href="#instruments">Instrument Rentals</a></p>
            </div>

            <div class="bne-column newsletter-column">
                <h3>Newsletter</h3>
                <p>Subscribe to our newsletter for updates on new releases and events.</p>
                <form class="bne-newsletter-form">
                    <input type="email" placeholder="Your email address" required>
                    <button type="submit" class="bne-btn">Subscribe</button>
                </form>
            </div>

        </div>

        <div class="bne-copyright">
            <p>&copy; 2025 Brainz Nationz Entertainment. All Rights Reserved.</p>
        </div>
    </div>
</footer>

<style>
    /* FOOTER MAIN */
.bne-footer {
    background: #111;
    color: #fff;
    font-family: "Montserrat", sans-serif;
    padding: 40px 20px 20px;
    border-top: 1px solid rgba(255, 255, 255, 0.1);
}

/* CONTACT TOP ROW */
.bne-contact-top {
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
    gap: 20px;
    margin-bottom: 40px;
    text-align: left;
}

.bne-contact-item {
    display: flex;
    align-items: center;
    gap: 10px;
    font-size: 14px;
    color: #ccc;
}

.bne-contact-item i {
    color: gold;
    font-size: 18px;
}

/* FOOTER GRID */
.bne-footer-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 40px;
    margin-bottom: 40px;
}

/* COLUMN HEADINGS */
.bne-column h3 {
    font-size: 1.3rem;
    margin-bottom: 20px;
    color: gold;
    position: relative;
}

.bne-column h3::after {
    content: "";
    display: block;
    width: 50px;
    height: 2px;
    background: gold;
    margin-top: 5px;
}

/* TEXT & LINKS */
.bne-column p,
.bne-column a {
    font-size: 14px;
    color: #ccc;
    text-decoration: none;
    line-height: 1.6;
}

.bne-column a:hover {
    color: #fff;
}

/* SOCIAL ICONS */
.bne-social-icons {
    display: flex;
    gap: 15px;
    margin-top: 10px;
}

.bne-social-icons a {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 40px;
    height: 40px;
    background-color: #333;
    color: #fff;
    border-radius: 50%;
    transition: all 0.3s ease;
}

.bne-social-icons a:hover {
    background-color: gold;
    color: #111;
    transform: translateY(-5px);
}

/* NEWSLETTER */
.bne-newsletter-form input {
    width: 100%;
    padding: 10px;
    border-radius: 5px;
    border: none;
    margin-bottom: 10px;
}

.bne-newsletter-form .bne-btn {
    width: 100%;
    padding: 10px;
    background: gold;
    color: #111;
    border: none;
    font-weight: bold;
    border-radius: 5px;
    cursor: pointer;
    transition: 0.3s;
}

.bne-newsletter-form .bne-btn:hover {
    background: #d6b400;
}

/* COPYRIGHT */
.bne-copyright {
    text-align: center;
    padding-top: 20px;
    border-top: 1px solid rgba(255, 255, 255, 0.1);
    color: #aaa;
    font-size: 0.9rem;
}

/* RESPONSIVE */
@media (max-width: 768px) {
    .bne-contact-top {
        flex-direction: column;
        text-align: center;
        gap: 15px;
    }
    
    .bne-footer-grid {
        grid-template-columns: 1fr;
        text-align: center;
    }

    .bne-contact-item {
        justify-content: center;
    }
}

</style>


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


    <script>
        // Slideshow functionality
        let currentSlide = 0;
        const slides = document.querySelectorAll('.hero-slide');
        const dots = document.querySelectorAll('.dot');
        const totalSlides = slides.length;
        let slideInterval;

        // Function to show a specific slide
        function showSlide(index) {
            // Remove active class from all slides and dots
            slides.forEach(slide => slide.classList.remove('active'));
            dots.forEach(dot => dot.classList.remove('active'));
            
            // Add active class to current slide and dot
            slides[index].classList.add('active');
            dots[index].classList.add('active');
            
            currentSlide = index;
        }

        // Function to go to next slide
        function nextSlide() {
            let nextIndex = (currentSlide + 1) % totalSlides;
            showSlide(nextIndex);
        }

        // Function to go to previous slide
        function prevSlide() {
            let prevIndex = (currentSlide - 1 + totalSlides) % totalSlides;
            showSlide(prevIndex);
        }

        // Start automatic slideshow
        function startSlideShow() {
            slideInterval = setInterval(nextSlide, 5000); // Change slide every 5 seconds
        }

        // Stop automatic slideshow
        function stopSlideShow() {
            clearInterval(slideInterval);
        }

        // Initialize slideshow when page loads
        document.addEventListener('DOMContentLoaded', function() {
            startSlideShow();
            
            // Add event listeners to navigation buttons
            document.querySelector('.next-slide').addEventListener('click', function() {
                nextSlide();
                stopSlideShow();
                startSlideShow(); // Restart the interval
            });
            
            document.querySelector('.prev-slide').addEventListener('click', function() {
                prevSlide();
                stopSlideShow();
                startSlideShow(); // Restart the interval
            });
            
            // Add event listeners to dots
            dots.forEach((dot, index) => {
                dot.addEventListener('click', function() {
                    showSlide(index);
                    stopSlideShow();
                    startSlideShow(); // Restart the interval
                });
            });
            
            // Pause slideshow when hovering over slideshow
            document.querySelector('.hero-slideshow').addEventListener('mouseenter', stopSlideShow);
            document.querySelector('.hero-slideshow').addEventListener('mouseleave', startSlideShow);
        });

        // Mobile menu toggle
        document.querySelector('.mobile-menu-btn').addEventListener('click', function() {
            document.querySelector('nav').classList.toggle('active');
        });

        // Create floating music notes
        function createMusicNotes() {
            const musicNotes = document.getElementById('musicNotes');
            const notes = ['♪', '♫', '♬', '🎵', '🎶'];
            
            for (let i = 0; i < 15; i++) {
                const note = document.createElement('div');
                note.className = 'note';
                note.textContent = notes[Math.floor(Math.random() * notes.length)];
                note.style.left = Math.random() * 100 + 'vw';
                note.style.animationDelay = Math.random() * 5 + 's';
                note.style.fontSize = (Math.random() * 20 + 16) + 'px';
                musicNotes.appendChild(note);
            }
        }

        // Initialize when page loads
        window.addEventListener('load', function() {
            createMusicNotes();
        });

        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                
                const targetId = this.getAttribute('href');
                if (targetId === '#') return;
                
                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 70, // Account for fixed header
                        behavior: 'smooth'
                    });
                    
                    // Close mobile menu if open
                    document.querySelector('nav').classList.remove('active');
                }
            });
        });

        // Form submission
        document.getElementById('contactForm').addEventListener('submit', function(e) {
            e.preventDefault();
            alert('Thank you for your message! We will get back to you soon.');
            this.reset();
        });
    </script>
</body>
</html>