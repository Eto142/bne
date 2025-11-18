@include('home.header')

<br>
<br>

<!-- NEWS PAGE -->
<section class="news-section" style="padding: 60px 20px; background: #0A0A0A; color: #ccc;">
    <div class="container">

        <!-- Page Title -->
        <div class="section-title" style="text-align: center; margin-bottom: 40px;">
            <h2 style="font-size: 34px;">Latest News & Updates</h2>
        </div>

        <!-- Intro Text -->
        <p style="text-align: center; max-width: 800px; margin: 0 auto 50px; font-size: 17px; line-height: 1.8;">
            Stay up-to-date with the latest happenings at <strong>Brainz Nationz</strong>, including music releases, events, artist highlights, and industry news.
        </p>

        <!-- News Grid -->
        <div class="news-grid" style="display: flex; flex-wrap: wrap; gap: 30px; justify-content: center;">

            <!-- News Card Example -->
            <div class="news-card" style="flex: 1 1 300px; background: #1A1A1A; border-radius: 10px; overflow: hidden;">
                <div class="news-image">
                    <img src="https://images.unsplash.com/photo-1511671782779-c97d3d27a1d4?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="News Title" style="width: 100%; height: 200px; object-fit: cover;">
                </div>
                <div class="news-content" style="padding: 20px;">
                    <h3 style="margin-bottom: 10px; font-size: 20px;">New Music Release</h3>
                    <p style="margin-bottom: 15px;">Our artist John Doe drops his latest single “Rhythm of Life” — check out the behind-the-scenes production!</p>
                    <a href="#" class="btn" style="background: #FF4081; color: #fff; padding: 10px 20px; border-radius: 6px; display: inline-block;">Read More</a>
                </div>
            </div>

            <div class="news-card" style="flex: 1 1 300px; background: #1A1A1A; border-radius: 10px; overflow: hidden;">
                <div class="news-image">
                    <img src="https://images.unsplash.com/photo-1507874457470-272b3c8d8ee2?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="News Title" style="width: 100%; height: 200px; object-fit: cover;">
                </div>
                <div class="news-content" style="padding: 20px;">
                    <h3 style="margin-bottom: 10px; font-size: 20px;">Upcoming Live Event</h3>
                    <p style="margin-bottom: 15px;">Join us for the Brainz Nationz Live Music Showcase this December with performances from top artists.</p>
                    <a href="#" class="btn" style="background: #FF4081; color: #fff; padding: 10px 20px; border-radius: 6px; display: inline-block;">Read More</a>
                </div>
            </div>

            <div class="news-card" style="flex: 1 1 300px; background: #1A1A1A; border-radius: 10px; overflow: hidden;">
                <div class="news-image">
                    <img src="https://images.unsplash.com/photo-1507874457470-272b3c8d8ee2?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="News Title" style="width: 100%; height: 200px; object-fit: cover;">
                </div>
                <div class="news-content" style="padding: 20px;">
                    <h3 style="margin-bottom: 10px; font-size: 20px;">Music Academy Updates</h3>
                    <p style="margin-bottom: 15px;">Applications for our music academy are now open. Learn from the best in the industry and elevate your music career.</p>
                    <a href="{{ url('academy') }}" class="btn" style="background: #FF4081; color: #fff; padding: 10px 20px; border-radius: 6px; display: inline-block;">Apply Now</a>
                </div>
            </div>

            <!-- Add more news cards as needed -->

        </div>
    </div>
</section>

@include('home.footer')

<!-- Optional CSS -->
<style>
.news-grid .news-card:hover {
    transform: translateY(-5px);
    transition: 0.3s;
}

.btn:hover {
    background: #e73370 !important;
}

/* Responsive */
@media (max-width: 991px) {
    .news-grid {
        flex-direction: column;
        gap: 25px;
    }
}

@media (max-width: 480px) {
    .section-title h2 {
        font-size: 28px;
    }
}
</style>
