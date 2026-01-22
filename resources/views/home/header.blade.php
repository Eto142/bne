<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brainz Nationz Entertainment | Premier Record Label</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
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
                         <li><a href="{{ url('news') }}">News</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>


    <div class="whatsapp-chat-widget">

    <div class="whatsapp-chat-header">
        <i class="fab fa-whatsapp"></i>
        <span>Chat with us</span>
        <button class="chat-close" onclick="toggleWhatsAppChat()">×</button>
    </div>

    <div class="whatsapp-chat-body">
        <p>👋 Hi there!</p>
        <p>Welcome to <strong>BNE Empire</strong>.</p>
        <p>How can we help you today?</p>
    </div>

    <a href="https://wa.me/2348188612964?text=Hello%20BNE%20Empire,%20I%20would%20like%20to%20make%20an%20enquiry."
       target="_blank"
       class="whatsapp-chat-btn">
        Start Chat
    </a>

</div>

<button class="whatsapp-float-btn" onclick="toggleWhatsAppChat()">
    <i class="fab fa-whatsapp"></i>
</button>


<style>
    .whatsapp-float-btn {
    position: fixed;
    bottom: 20px;
    right: 20px;
    background: #25D366;
    color: #fff;
    border: none;
    width: 60px;
    height: 60px;
    border-radius: 50%;
    font-size: 28px;
    cursor: pointer;
    box-shadow: 0 4px 15px rgba(0,0,0,0.3);
    z-index: 999;
}

.whatsapp-chat-widget {
    position: fixed;
    bottom: 90px;
    right: 20px;
    width: 300px;
    background: #fff;
    border-radius: 15px;
    box-shadow: 0 5px 25px rgba(0,0,0,0.2);
    overflow: hidden;
    font-family: Arial, sans-serif;
    display: none;
    z-index: 999;
    animation: slideUp 0.3s ease;
}

@keyframes slideUp {
    from { transform: translateY(30px); opacity: 0; }
    to { transform: translateY(0); opacity: 1; }
}

.whatsapp-chat-header {
    background: #25D366;
    color: #fff;
    padding: 12px;
    display: flex;
    align-items: center;
    gap: 10px;
}

.whatsapp-chat-header i {
    font-size: 22px;
}

.chat-close {
    margin-left: auto;
    background: none;
    border: none;
    color: #fff;
    font-size: 20px;
    cursor: pointer;
}

.whatsapp-chat-body {
    padding: 15px;
    font-size: 14px;
    color: #333;
}

.whatsapp-chat-btn {
    display: block;
    background: #25D366;
    color: #fff;
    text-align: center;
    padding: 12px;
    text-decoration: none;
    font-weight: bold;
}

.whatsapp-chat-btn:hover {
    background: #1ebe5d;
}

</style>


<script>
function toggleWhatsAppChat() {
    const box = document.querySelector('.whatsapp-chat-widget');
    box.style.display = (box.style.display === 'block') ? 'none' : 'block';
}
</script>

