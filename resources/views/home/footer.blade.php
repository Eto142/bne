
    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-column">
                    <h3>Brainz Nationz</h3>
                    <p>Premier record label and music production company dedicated to discovering and nurturing exceptional talent.</p>
                    <div class="social-icons">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                <div class="footer-column">
                    <h3>Quick Links</h3>
                    <p><a href="#home">Home</a></p>
                    <p><a href="#about">About</a></p>
                    <p><a href="#services">Services</a></p>
                    <p><a href="#artists">Artists</a></p>
                    <p><a href="#contact">Contact</a></p>
                </div>
                <div class="footer-column">
                    <h3>Services</h3>
                    <p><a href="#book-session">Book a Session</a></p>
                    <p><a href="#speak-management">Artist Management</a></p>
                    <p><a href="#academy">Music Academy</a></p>
                    <p><a href="#instruments">Instrument Rentals</a></p>
                </div>
                <div class="footer-column">
                    <h3>Newsletter</h3>
                    <p>Subscribe to our newsletter for updates on new releases and events.</p>
                    <form class="newsletter-form">
                        <input type="email" placeholder="Your email address" required>
                        <button type="submit" class="btn">Subscribe</button>
                    </form>
                </div>
            </div>
            <div class="copyright">
                <p>&copy; 2025 Brainz Nationz Entertainment. All Rights Reserved.</p>
            </div>
        </div>
    </footer>

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