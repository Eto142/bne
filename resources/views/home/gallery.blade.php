   @include('home.header')

<!-- Gallery Section -->
    <section class="gallery" id="gallery">
        <div class="container">
            <h2 class="section-title">Our Gallery</h2>
            <div class="gallery-grid">
                <div class="gallery-item">
                    <img src="{{ asset('assets/images/set1.jpg') }}" alt="Studio Session">
                    <div class="gallery-overlay">
                        <h3>Studio Sessions</h3>
                    </div>
                </div>
                <div class="gallery-item">
                    <img src="{{ asset('assets/images/set2.jpg') }}" alt="Live Performance">
                    <div class="gallery-overlay">
                        <h3>Live Performances</h3>
                    </div>
                </div>
                <div class="gallery-item">
                    <img src="{{ asset('assets/images/set3.jpg') }}" alt="Artist Development">
                    <div class="gallery-overlay">
                        <h3>Artist Development</h3>
                    </div>
                </div>
                <div class="gallery-item">
                    <img src="{{ asset('assets/images/set4.jpg') }}" alt="Music Production">
                    <div class="gallery-overlay">
                        <h3>Music Production</h3>
                    </div>
                </div>
                <div class="gallery-item">
                    <img src="{{ asset('assets/images/set5.jpg') }}" alt="Award Show">
                    <div class="gallery-overlay">
                        <h3>Awards & Recognition</h3>
                    </div>
                </div>
                <div class="gallery-item">
                    <img src="{{ asset('assets/images/set6.jpg') }}" alt="Team Photo">
                    <div class="gallery-overlay">
                        <h3>Our Team</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('home.footer')