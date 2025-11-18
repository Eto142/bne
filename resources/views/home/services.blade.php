     @include('home.header')

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


   @include('home.footer')
