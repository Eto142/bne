   
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
  