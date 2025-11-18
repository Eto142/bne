@include('home.header')

<br>
<br>

<!-- REGISTRATION PAGE -->
<section class="registration-section">
    <div class="container">

        <!-- Page Title -->
        <div class="section-title">
            <h2>Registration</h2>
        </div>

        <!-- Intro Text -->
        <p class="intro-text">
            Join <strong>Brainz Nationz</strong> today! Fill out the form below to register and become part of our community.
        </p>

        <!-- Registration Form -->
        <div class="form-container">
            <form id="registrationForm">

                <div class="form-group">
                    <label for="name">Full Name</label>
                    <input type="text" id="name" name="name" placeholder="Enter your full name" required>
                </div>

                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" name="email" placeholder="Enter your email" required>
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Enter a password" required>
                </div>

                <div class="form-group">
                    <label for="confirm_password">Confirm Password</label>
                    <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirm your password" required>
                </div>

                <button type="submit" class="btn">Register</button>
            </form>
        </div>

    </div>
</section>

@include('home.footer')

<!-- STYLES -->
<style>
.registration-section {
    padding: 60px 20px;
    background: #0A0A0A;
    color: #ccc;
    font-family: 'Poppins', sans-serif;
}

.section-title {
    text-align: center;
    margin-bottom: 20px;
}

.section-title h2 {
    font-size: 34px;
    color: #fff;
}

.intro-text {
    text-align: center;
    font-size: 17px;
    margin-bottom: 40px;
}

.form-container {
    max-width: 500px;
    margin: 0 auto;
    background: #1A1A1A;
    padding: 30px;
    border-radius: 10px;
}

.form-group {
    margin-bottom: 20px;
}

.form-group label {
    display: block;
    margin-bottom: 8px;
}

.form-group input {
    width: 100%;
    padding: 10px 12px;
    border-radius: 6px;
    border: 1px solid #333;
    background: #0A0A0A;
    color: #fff;
    font-size: 15px;
}

.form-group input:focus {
    outline: none;
    border-color: #FF4081;
}

.btn {
    display: inline-block;
    padding: 12px 25px;
    background: #FF4081;
    color: #fff;
    border: none;
    border-radius: 6px;
    cursor: pointer;
    font-size: 16px;
    transition: 0.3s;
    width: 100%;
}

.btn:hover {
    background: #e73370;
}

/* Responsive */
@media (max-width: 480px) {
    .section-title h2 {
        font-size: 28px;
    }
    .intro-text {
        font-size: 15px;
    }
}
</style>


