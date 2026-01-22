 
@include('home.header')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">


<!-- About Section -->
<section id="about">
    <div class="container">

        <h2 class="section-title">About Brainz Nationz</h2>

        <p>
            BNE-Empire is committed to delivering premium entertainment with fresh perspectives.
            We offer talent training, quality sound equipment hire, DJs, MCs, hype men, drummers,
            and complete entertainment solutions.
        </p>

        <p><strong>Visit our website to book, learn, or hire:</strong></p>
        <p>🌐 https://brainznationzentertainment.com/</p>

        <p><strong>Follow us on social media:</strong></p>
       <div class="social-icons">
    <a href="https://www.tiktok.com/@official.bne" target="_blank">
        <i class="fab fa-tiktok"></i>
    </a>

    <a href="https://www.youtube.com/@Official-BNE" target="_blank">
        <i class="fab fa-youtube"></i>
    </a>

    <a href="https://www.instagram.com/official.bne001" target="_blank">
        <i class="fab fa-instagram"></i>
    </a>
</div>


        <p><strong>BNE Empire is here for fulfilling dreams, building legends.</strong></p>

        <div class="about-content">
            <div class="about-text">
                <h2>Our Story</h2>

                <p>
                    Founded in 2015, Brainz Nationz Entertainment has quickly established itself as a
                    powerhouse in the music industry. Our mission is to cultivate raw talent and
                    transform it into global success stories.
                </p>

                <p>
                    With state-of-the-art recording facilities, an experienced management team, and
                    a passion for music that knows no bounds, we've helped launch the careers of
                    over 50 artists across multiple genres.
                </p>

                <p>
                    Our unique approach combines artistic development with strategic branding and
                    marketing, ensuring our artists not only create great music but also build
                    lasting careers.
                </p>

                <a href="{{ url('services') }}" class="btn">Our Services</a>
            </div>

            <div class="about-image">
                <img src="logo.png" alt="Brainz Nationz Logo">
            </div>
        </div>

    </div>
</section>

@include('home.footer')
