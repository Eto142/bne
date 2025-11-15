@include('home.header')

<br>
<br>

     <!-- Artists Section -->
    <section class="artists" id="artists">
        <div class="container">
            <div class="section-title">
                <h2>Our Artists</h2>
            </div>
            <div class="artists-grid">
                <div class="artist-card">
                    <div class="artist-image">
                        <img src="{{ asset('assets/images/artist1.jpg') }}" alt="Artist 1">
                    </div>
                    <div class="artist-info">
                        <h3>Jay Brainz</h3>
                        <p>Afro Pop</p>
                    </div>
                </div>
                <div class="artist-card">
                    <div class="artist-image">
                        <img src="{{ asset('assets/images/artist2.jpg') }}" alt="Artist 2">
                    </div>
                    <div class="artist-info">
                        <h3>Jiggy Man</h3>
                        <p>Afro Pop</p>
                    </div>
                </div>
                
        </div>
    </section>




@include('home.footer')

