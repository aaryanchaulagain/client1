<nav class="navbar">
    <div class="logo">
        <a href="/">
            <img src="{{ asset('image/oz.png') }}" alt="Oz Logo">
            OZ_Connect
        </a>
    </div>

    <div class="hamburger" id="hamburger">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
    </div>

    <ul class="nav-links" id="nav-links">
        <li><a href="/">Home</a></li>
        <li><a href="/aboutus">About Us</a></li>
        <li><a href="/service">Services</a></li>
        <li><a href="/contactus">Contact Us</a></li>
        <li><a href="/blog">Blog</a></li>

        <li class="dropdown">
            <a href="#">Test Preparation ▾</a>
            <ul class="dropdown-menu">
                <li><a href="/ielts">IELTS</a></li>
                <li><a href="/pte">PTE</a></li>
            </ul>
        </li>

        <li><a href="#">Testimonial</a></li>

        <li class="dropdown">
            <a href="#">Study Abroad ▾</a>
            <ul class="dropdown-menu">
                <li><a href="/australia">Study in Australia</a></li>
            </ul>
        </li>

        <li>
            <a href="#" class="login-btn">Login</a>
        </li>
    </ul>
</nav>

<script>
const hamburger = document.getElementById('hamburger');
const navLinks = document.getElementById('nav-links');
const dropdownLinks = document.querySelectorAll('.dropdown > a');

hamburger.addEventListener('click', () => {
    hamburger.classList.toggle('active');
    navLinks.classList.toggle('active');
});

dropdownLinks.forEach(link => {
    link.addEventListener('click', (e) => {
        if (window.innerWidth <= 768) {
            e.preventDefault();
            link.parentElement.classList.toggle('active');
        }
    });
});
</script>
