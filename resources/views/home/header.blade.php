<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brainz Nationz Entertainment | Premier Record Label</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ 'assets/style.css' }}" >
</head>
<body>
    <!-- Header -->
    <header>
        <div class="container">
            <div class="header-content">
                <a href="/" class="logo">
                    <!-- Replace with your actual logo -->
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
                        <li><a href="{{ url('about') }}">About</a></li>
                       <li class="dropdown">
    <a href="#" class="dropbtn">Services ▾</a>
    <div class="dropdown-content">
        <a href="{{ url('book-session') }}">Book a Session</a>
        <a href="{{ url('speak-management') }}">Speak with Management</a>
        <a href="{{ url('registration') }}">Registration</a>
        <a href="{{ url('book-appointment') }}">Book an Appointment</a>
        <a href=" {{ url('academy') }}">Academy (Apply to Learn Music)</a>
    </div>
</li>
                        <li><a href="{{ url('rentals') }}">Rentals</a></li>
                        <li><a href="{{ url('gallery') }}">Gallery</a></li>
                        <li><a href="{{ url('artists') }}">Artists</a></li>
                        <li><a href="{{ url('contact') }}">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
