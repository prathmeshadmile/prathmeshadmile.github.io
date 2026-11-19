<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prathamesh Admile | Portfolio</title>
    <meta name="theme-color" content="#2563eb">

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome 6 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Google Fonts: Montserrat (Headers) & Work Sans (Body/Buttons) -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@800;900&family=Work+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
    
    <!-- Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    <style>
        :root {
            /* Your Requested Fonts */
            --body-font: "Work Sans", sans-serif;
            --bs-btn-font-family: "Work Sans", sans-serif;
            
            --bg-color: #ffffff;
            --text-color: #1a1a1a;
            --accent-color: #f97316;
            --nav-blur: rgba(255, 255, 255, 0.8);
            --card-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }

        [data-theme="dark"] {
            --bg-color: #111827;
            --text-color: #f8fafc;
            --accent-color: #f97316;
            --nav-blur: rgba(15, 23, 42, 0.8);
            --card-shadow: 0 10px 30px rgba(0,0,0,0.5);
        }

        body {
            background-color: var(--bg-color);
            color: var(--text-color);
            font-family: var(--body-font); /* Applied Work Sans */
            transition: background 0.4s ease, color 0.4s ease;
        }

        /* Applying Work Sans to all Bootstrap Buttons globally */
        .btn {
            font-family: var(--bs-btn-font-family) !important;
            font-weight: 600;
            letter-spacing: 0.5px;
        }

       
       
    </style>
</head>
<body>


<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700;800;900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

<style>
     .navbar {
        height: 80px;
        background: var(--nav-bg);
        backdrop-filter: blur(12px);
        -webkit-backdrop-filter: blur(12px);
        font-family: 'Montserrat', sans-serif;
        border-bottom: 1px solid rgba(128, 128, 128, 0.1);
        transition: all 0.3s ease;
    }

    /* Full Name Branding */
    .navbar-brand {
        display: flex;
        flex-direction: column;
        line-height: 0.9;
        text-decoration: none;
        padding: 0;
        margin: 0;
    }

    .brand-first {
        font-weight: 900;
        font-size: 1.6rem;
        color: var(--text-color);
        letter-spacing: -1px;
    }

    .brand-last {
        font-weight: 900;
        font-size: 1.6rem;
        color: var(--text-color);
        letter-spacing: -1px;
    }

    /* Resume Button with Glow */
    .btn-resume {
        background: var(--accent-color);
        color: #ffffff !important;
        padding: 10px 22px;
        border-radius: 50px;
        font-weight: 800;
        font-size: 0.85rem;
        text-transform: lowercase;
        text-decoration: none;
        box-shadow: 0 0 15px rgba(91, 192, 222, 0.4);
        border: none;
        transition: all 0.3s ease;
        margin-right: 15px;
    }

    .btn-resume:hover {
        transform: translateY(-2px);
        box-shadow: 0 0 25px rgba(91, 192, 222, 0.6);
    }

    /* Theme Switch Styling */
    .theme-switch {
        cursor: pointer;
        font-size: 1.2rem;
        color: var(--text-color);
        transition: transform 0.3s ease;
    }

    .theme-switch:hover {
        transform: rotate(15deg);
    }

    @media (max-width: 768px) {
        .brand-first, .brand-last { font-size: 1.3rem; }
        .btn-resume { padding: 8px 16px; font-size: 0.75rem; }
    }
</style>

<nav class="navbar sticky-top animate__animated animate__fadeInDown">
    <div class="container d-flex justify-content-between align-items-center">
        
        <a class="navbar-brand" href="#">
            <span class="brand-first">Prathamesh</span>
            <span class="brand-last">Admile</span>
        </a>

        <div class="d-flex align-items-center">
            <a href="your-resume-link.pdf" class="btn-resume">get resume</a>

            <div class="theme-switch" id="themeToggle">
                <i class="fas fa-moon" id="themeIcon"></i>
            </div>
        </div>
        
    </div>
</nav>

<style>
    *{
        margin:0;
        padding:0;
        box-sizing:border-box;
    }

    .hero-section {
        position: relative;
        min-height: 100vh;
        width: 100%;
        display: flex;
        flex-direction: column;
        overflow: hidden;
        background-color: var(--bg-color);
    }

    /* Text Area */
    .hero-text-area {
        flex: 0 0 25%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center;
        padding: 30px 5% 10px;
        z-index: 10;
        background: inherit;
    }

    /* Image Area */
    .hero-image-area {
        flex: 1;
        width: 100%;
        position: relative;
        padding: 0 10% 20px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .hero-profile-img {
        width: 100%;
        max-width: 1400px;
        height: 100%;
        max-height: 75vh;

        /* FULL IMAGE VISIBLE */
        object-fit: contain;
        object-position: center;

       

        transition: all 0.4s ease;
    }

    .hero-profile-img:hover {
        transform: scale(1.01);
    }

    /* Typography */
    .hero-title {
        font-family: 'Montserrat', sans-serif;
        font-weight: 900;
        font-size: 4rem;
        line-height: 1.1;
        color: var(--text-color);
        margin-bottom: 10px;
    }

    .hero-subtitle {
        font-family: 'Inter', sans-serif;
        font-size: clamp(1rem, 2vw, 1.4rem);
        font-weight: 400;
        color: var(--text-muted, #64748b);
        letter-spacing: 1px;
    }

    /* Theme Variables */
    .dark-mode .hero-section {
        background: #0f172a;
        --text-main: #f8fafc;
        --text-muted: #94a3b8;
    }

    .light-mode .hero-section {
        background: #ffffff;
        --text-main: #0f172a;
        --text-muted: #64748b;
    }
    /* =========================
        TABLET
    ========================== */
    @media(max-width:992px){

        .hero-section{
           min-height:auto;
        }

        .hero-text-area{
            padding-top:60px;
        }

        .hero-image-area{
            padding:0 5% 20px;
        }

    
    }

    /* =========================
        MOBILE VIEW
    ========================== */
    @media(max-width:768px){

        .hero-section{

            /* REMOVE EXTRA SPACE */
            min-height:auto;

            justify-content:flex-start;
            padding-bottom:15px;
        }

        .hero-text-area{

            /* LESS SPACE */
            padding:40px 15px 5px;
        }

        .hero-title{
            font-size:2.4rem;
            margin-bottom:5px;
        }

        .hero-subtitle{
            font-size:0.95rem;
        }

        .hero-image-area{

            /* VERY LESS GAP */
            padding:10px 10px 0;

            align-items:center;
        }

        .hero-profile-img{

            width:100%;
            height:auto;

            /* FIX CUT ISSUE */
            object-fit:contain;

           
            /* REMOVE HUGE IMAGE HEIGHT */
            max-height:65vh;
        }
    }

    /* =========================
        SMALL MOBILE
    ========================== */
   @media(max-width:480px){

    .hero-text-area{
        padding-top:30px;
    }

    .hero-title{
        font-size: 2.5rem;
    }

    .hero-subtitle{
        font-size:0.9rem;
    }

    .hero-image-area{
        padding: 30px 8px 0;
        overflow:hidden; /* hide cut part */
    }

    .hero-profile-img{

        width:80%;
        aspect-ratio:1.1/1;   /* square image */
        object-fit:cover;   /* cut left & right */
        object-position:center;
        display:block;
    }
}
    }
</style>

<section class="hero-section" id="home">

    <!-- TEXT -->
    <div class="hero-text-area animate__animated animate__fadeInDown">

        <h1 class="hero-title">
             Who the hell is
        </h1>

        <div class="hero-subtitle">
            <span id="typed-text"></span>
        </div>

    </div>

    <!-- IMAGE -->
    <div class="hero-image-area animate__animated animate__fadeInUp">

        <img
            src="prathamesh.jpeg"
            alt="Prathamesh Admile"
            class="hero-profile-img"
        >

    </div>

</section>

<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@900&display=swap" rel="stylesheet">

<style>
    .scroll-text-section {
        padding: 15px 0;
        --bg-color: #ffffff;
        overflow: hidden;
        transition: background 0.4s ease;
       
    }

    

    .scroll-wrapper {
        display: flex;
        white-space: nowrap;
        will-change: transform;
    }

    .scroll-item {
        font-family: 'Montserrat', sans-serif;
        font-weight: 900;
        /* Reduced Font Size */
        font-size: clamp(3.2rem, 8vw, 6rem); 
        --text-color: #1a1a1a;
        padding: 0 5px;
        letter-spacing: -0.9px;
        transition: color 0.4s ease;
        display: flex;
        align-items: center;
    }




</style>

<section class="scroll-text-section">
    <div class="scroll-wrapper" id="scrollRow">
        <span class="scroll-item">Prathamesh Admile?</span>
        <span class="scroll-item">Prathamesh Admile?</span>
        <span class="scroll-item">Prathamesh Admile?</span>
        <span class="scroll-item">Prathamesh Admile?</span>
    </div>
</section>

<script>
    const scrollRow = document.getElementById('scrollRow');
    
    window.addEventListener('scroll', () => {
        const scrolled = window.pageYOffset;
        // speed 0.5 moves it smoothly as you scroll
        const movement = scrolled * 0.6;
        
        // Translates the text horizontally based on vertical scroll
        scrollRow.style.transform = `translateX(-${movement}px)`;
    });
</script>


<style>
    .about-section {
        padding: 80px 0;
        background-color: var(--bg-color);
        transition: background 0.4s ease;
    }

    .about-container {
        max-width: 900px;
        margin: 0 auto;
        padding: 0 10px;
    }

    .about-text {
        font-family: var(--body-font);
        font-size: clamp(1.7rem, 3.2vw, 1.6rem);
        line-height: 1.8;
        font-weight: 900;
        color: var(--text-color);
        text-align: center;
    }

    /* Colorful Text Highlights */
    .highlight-blue {
        color: #2563eb;
        font-weight: 700;
        position: relative;
        display: inline-block;
    }

    .highlight-gradient {
        background: linear-gradient(120deg, #38bdf8 0%, #2563eb 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        font-weight: 800;
    }

    .highlight-box {
        background: rgba(37, 99, 235, 0.1);
        padding: 2px 8px;
        border-radius: 4px;
        color: var(--accent-color);
        font-weight: 600;
    }

    /* Link Styling */
    .about-links {
        margin-top: 40px;
        display: flex;
        justify-content: center;
        gap: 25px;
        flex-wrap: wrap;
    }

    .custom-link {
        font-family: var(--body-font);
        font-weight: 700;
        text-decoration: none;
        color: var(--text-color);
        font-size: 1.1rem;
        position: relative;
        transition: color 0.3s ease;
    }

    .custom-link::after {
        content: '';
        position: absolute;
        width: 100%;
        height: 2px;
        bottom: -5px;
        left: 0;
        background-color: var(--accent-color);
        transform: scaleX(0);
        transition: transform 0.3s ease;
    }

    .custom-link:hover {
        color: var(--accent-color);
    }

    .custom-link:hover::after {
        transform: scaleX(1);
    }

    .custom-link i {
        margin-right: 8px;
        font-size: 0.9rem;
    }

    /* Section Heading */
    .section-label {
        font-family: 'Montserrat', sans-serif;
        font-weight: 900;
        text-transform: uppercase;
        letter-spacing: 2px;
        color: var(--accent-color);
        margin-bottom: 20px;
        display: block;
        font-size: 0.9rem;
    }

 
</style>

<section class="about-section" id="about">
    <div class="about-container">
        
        
        <div class="about-text animate__animated animate__fadeInUp" style="animation-delay: 0.2s;">
           Hii!</br>I am Prathamesh, a <span class="highlight-gradient">Professional Developer</span> and the founder of <span class="highlight-blue"><a href="?">ODDIHOST</a></span>. 
            My expertise lies in building robust <span class="highlight-box">Full-Stack Applications</span> using PHP, MySQL, and Tailwind CSS.
            
            <br><br>
            
            Beyond web development, I am deeply passionate about <span class="highlight-blue">Embedded Systems</span> and <span class="highlight-box">IoT Solutions</span>, 
            working with microcontrollers like ESP32 and Arduino to create real-world impact. I believe in writing 
            <span class="highlight-gradient">clean, efficient code</span> that solves complex problems.
        </div>

        <div class="about-links animate__animated animate__fadeInUp" style="animation-delay: 0.4s;">
            <a href="https://github.com/yourusername" class="custom-link" target="_blank">
                <i class="fab fa-github"></i>GitHub
            </a>
            <a href="https://linkedin.com/in/yourusername" class="custom-link" target="_blank">
                <i class="fab fa-linkedin"></i>LinkedIn
            </a>
            <a href="mailto:your@email.com" class="custom-link">
                <i class="fas fa-envelope"></i>Email Me
            </a>
            <a href="#" class="custom-link">
                <i class="fas fa-file-download"></i>Download CV
            </a>
        </div>
    </div>
</section>

<!-- Put these in your <head> section -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/devicon.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<style>
    .skills-section {
        padding: 100px 0;
        background-color: #f4f4f5; 
        transition: background 0.4s ease;
    }

    [data-theme="dark"] .skills-section {
        background-color: #09090b; 
    }

    .skills-container {
        max-width: 900px;
        margin: 0 auto;
        padding: 0 20px;
    }

    /* Centered Category Header - Matches About Label */
    .skills-label {
        font-family: 'Montserrat', sans-serif;
        font-weight: 900;
        text-transform: uppercase;
        letter-spacing: 2px;
        color: var(--accent-color);
        margin-bottom: 60px;
        display: block;
        font-size: 0.9rem;
        text-align: center;
    }

    /* Updated to match About Section text style exactly */
    .skill-category-title {
        font-family: var(--body-font); /* Same as about text */
        font-size: clamp(1rem, 2vw, 1.3rem); /* Sized slightly smaller than about main text */
        font-weight: 700;
        color: var(--text-color);
        margin-bottom: 25px;
        display: flex;
        align-items: center;
        gap: 15px;
    }

    .skill-category-title::after {
        content: "";
        height: 1px;
        flex-grow: 1;
        background: rgba(128, 128, 128, 0.2);
    }

    .skills-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(85px, 1fr));
        gap: 12px;
        margin-bottom: 50px;
    }

    .skill-box {
        background: var(--bg-color); 
        border: 1px solid rgba(128, 128, 128, 0.1);
        border-radius: 10px;
        padding: 15px 5px;
        text-align: center;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    .skill-box:hover {
        transform: translateY(-5px);
        border-color: var(--accent-color);
        box-shadow: 0 10px 20px rgba(0,0,0,0.05);
    }

    .skill-box i {
        font-size: 1.8rem; /* Increased slightly for visibility */
        margin-bottom: 8px;
    }

    .skill-name {
        font-family: var(--body-font);
        font-size: 0.6rem;
        font-weight: 700;
        color: var(--text-color);
        letter-spacing: 0.3px;
        text-transform: uppercase;
    }

    /* Fixed Icon Colors */
    .icon-iot { color: #00a8cc; }
    .icon-esp { color: #e7352c; }
    .icon-bolt { color: #fbc02d; }
    .icon-ux { color: #ff61a6; }
    .icon-pcb { color: #2e7d32; }
</style>

<section class="skills-section" id="stack">
    <div class="skills-container">
        
        <span class="skills-label animate__animated animate__fadeInUp" style="font-size: 2rem;">Technical Stack</span>

        <!-- Development -->
        <h3 class="skill-category-title animate__animated animate__fadeIn">Development</h3>
        <div class="skills-grid">
            <div class="skill-box animate__animated animate__fadeInUp"><i class="devicon-html5-plain colored"></i><span class="skill-name">HTML5</span></div>
            <div class="skill-box animate__animated animate__fadeInUp"><i class="devicon-css3-plain colored"></i><span class="skill-name">CSS3</span></div>
            <div class="skill-box animate__animated animate__fadeInUp"><i class="devicon-javascript-plain colored"></i><span class="skill-name">JS</span></div>
            <div class="skill-box animate__animated animate__fadeInUp"><i class="devicon-php-plain colored"></i><span class="skill-name">PHP</span></div>
            <div class="skill-box animate__animated animate__fadeInUp"><i class="devicon-mysql-plain colored"></i><span class="skill-name">MySQL</span></div>
            <div class="skill-box animate__animated animate__fadeInUp"><i class="devicon-nodejs-plain colored"></i><span class="skill-name">Node.js</span></div>
            <div class="skill-box animate__animated animate__fadeInUp"><i class="devicon-tailwindcss-original colored"></i><span class="skill-name">Tailwind</span></div>
            <div class="skill-box animate__animated animate__fadeInUp"><i class="devicon-bootstrap-plain colored"></i><span class="skill-name">Bootstrap</span></div>
        </div>

        <!-- Design -->
        <h3 class="skill-category-title animate__animated animate__fadeIn">Design</h3>
        <div class="skills-grid">
            <div class="skill-box animate__animated animate__fadeInUp"><i class="devicon-figma-plain colored"></i><span class="skill-name">Figma</span></div>
            <div class="skill-box animate__animated animate__fadeInUp"><i class="devicon-canva-original colored"></i><span class="skill-name">Canva</span></div>
            <div class="skill-box animate__animated animate__fadeInUp"><i class="fas fa-palette icon-ux"></i><span class="skill-name">UI/UX</span></div>
        </div>

        <!-- Engineering -->
        <h3 class="skill-category-title animate__animated animate__fadeIn">Engineering</h3>
        <div class="skills-grid">
            <div class="skill-box animate__animated animate__fadeInUp"><i class="devicon-arduino-plain colored"></i><span class="skill-name">Arduino</span></div>
            <div class="skill-box animate__animated animate__fadeInUp"><i class="devicon-c-plain colored"></i><span class="skill-name">Embedded C</span></div>
            <div class="skill-box animate__animated animate__fadeInUp"><i class="fas fa-microchip icon-esp"></i><span class="skill-name">ESP32</span></div>
            <div class="skill-box animate__animated animate__fadeInUp"><i class="fas fa-wifi icon-iot"></i><span class="skill-name">IoT</span></div>
            <div class="skill-box animate__animated animate__fadeInUp"><i class="fas fa-bolt icon-bolt"></i><span class="skill-name">Electrical</span></div>
            <div class="skill-box animate__animated animate__fadeInUp"><i class="fas fa-project-diagram icon-pcb"></i><span class="skill-name">PCB Design</span></div>
        </div>
    </div>
</section>

<style>
    /* ... (outer wrapper and canvas styles remain the same) ... */

    .projects-canvas {
        max-width: 1100px;
        margin: 0 auto;
        background-color: #ffffff;
        border-radius: 24px;
        padding: 50px 30px;
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.05);
    }

    /* 1. Reduced column width for "Too Much" smaller images */
    .masonry-grid {
        display: grid;
        /* Narrower minmax (150px) creates more columns and smaller images */
        grid-template-columns: repeat(auto-fill, minmax(150px, 1fr));
        grid-auto-rows: 10px; 
        gap: 25px;
        align-items: start; /* Vital: prevents images from stretching to fill height */
    }

    .masonry-item {
        border-radius: 8px;
        overflow: hidden;
        background: transparent; /* Transparent so original image shape stands out */
        transition: all 0.3s ease;
        display: flex;
        justify-content: center;
    }

    .masonry-item:hover {
        transform: translateY(-5px);
    }

    /* 2. Fix: Display original size without stretching */
    .masonry-item img {
        width: auto;      /* Keep original width */
        height: auto;     /* Keep original height */
        max-width: 100%;  /* Ensures it doesn't overflow the small column */
        display: block;
        border-radius: 6px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1); /* Subtle depth for the small cards */
    }

    /* 3. Adjusting spans to fit the smaller images naturally */
    .h-short { grid-row-end: span 12; }
    .h-medium { grid-row-end: span 18; }
    .h-tall { grid-row-end: span 25; }

    /* Button Styling */
    .btn-linkedin {
        background-color: #0077b5;
        color: white;
        padding: 12px 28px;
        border-radius: 50px;
        text-decoration: none;
        font-weight: 700;
        font-size: 0.8rem;
        text-transform: uppercase;
        transition: 0.3s;
    }
</style>


<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@800&display=swap" rel="stylesheet">

<style>

    /* 1. Main Section Wrapper */

    .portfolio-section {

       

        background-color: #f4f4f5; 

        transition: background 0.4s ease;

    }



    [data-theme="dark"] .portfolio-section {

        background-color: #09090b; 

    }



    /* 2. The White Canvas Container */

    .portfolio-canvas {

        width: 100%;

        max-width: 1200px;

        margin: 0 auto;

        background: #ffffff;

        border-radius: 24px;

        padding: 60px 40px;

        box-shadow: 0 20px 40px rgba(0,0,0,0.05);

        transition: background 0.4s ease;

    }



    [data-theme="dark"] .portfolio-canvas {

        background-color: #18181b;

        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.4);

    }



    /* 3. Section Header */

    .portfolio-header {

        text-align: center;

        margin-bottom: 60px;

    }



    .portfolio-label {

        font-family: 'Montserrat', sans-serif;

        font-weight: 900;

        text-transform: uppercase;

        letter-spacing: 2px;

        color: var(--accent-color); 

        font-size: 0.9rem;

        display: inline-block;

    }



    /* 4. Responsive Image Grid */

    .portfolio-grid {

        display: grid;

        grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));

        gap: 25px;

        align-items: start;

    }



    /* 5. Project Card / Image Container */

    .project-item {

        transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);

        border-radius: 12px;

        overflow: hidden;

    }



    .project-item:hover {

        transform: translateY(-8px);

        box-shadow: 0 20px 30px rgba(0, 0, 0, 0.15);

    }



    .project-item img {

        width: 100%;

        height: auto;

        display: block;

        border-radius: 8px;

    }



    @media (max-width: 768px) {

        .portfolio-canvas { padding: 40px 20px; border-radius: 0; }

        .portfolio-grid { grid-template-columns: 1fr 1fr; gap: 15px; }

    }

</style>



<section class="portfolio-section" id="projects">

    <div class="portfolio-canvas">

        

        <div class="portfolio-header">

            <span class="portfolio-label"  style="font-size: 2rem;" data-aos="fade-up">Creative Works</span>

        </div>



        <div class="portfolio-grid">

            <div class="project-item" data-aos="fade-up" data-aos-delay="100">

                <img src="my-animation.gif" alt="Lightup">

            </div>



            <div class="project-item" data-aos="fade-up" data-aos-delay="200">

                <img src="https://images.unsplash.com/photo-1581291518857-4e27b48ff24e?w=500" alt="Ceramic">

            </div>



            <div class="project-item" data-aos="fade-up" data-aos-delay="300">

                <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=500" alt="Air Max">

            </div>



            <div class="project-item" data-aos="fade-up" data-aos-delay="400">

                <img src="https://images.unsplash.com/photo-1558346490-a72e53ae2d4f?w=400" alt="Space Code">

            </div>



            <div class="project-item" data-aos="fade-up" data-aos-delay="100">

                <img src="https://images.unsplash.com/photo-1522542550221-31fd19575a2d?w=500" alt="Premium Card">

            </div>



            <div class="project-item" data-aos="fade-up" data-aos-delay="200">

                <img src="https://images.unsplash.com/photo-1561144443-f546f0011504?w=500" alt="Exposition">

            </div>



            <div class="project-item" data-aos="fade-up" data-aos-delay="300">

                <img src="https://images.unsplash.com/photo-1518770660439-4636190af475?w=500" alt="Fluid">

            </div>



            <div class="project-item" data-aos="fade-up" data-aos-delay="400">

                <img src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?w=500" alt="Brother Bond">

            </div>

        </div>

    </div>

</section>

<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@800&display=swap" rel="stylesheet">

<style>
    /* Main Wrapper */
    .portfolio-wrapper {
       
        padding: 20px 0 100px 0;
      background-color: #f4f4f5; 
        transition: background 0.4s ease;
    }

    [data-theme="dark"] .portfolio-wrapper {
        background-color: #09090b;
    }

    /* Container */
    .artwork-container {
        max-width: 1200px;
        margin: 20px auto 0;
        padding: 0 40px;
    }

    .table-headline {
        color: #111;
        font-family: 'Montserrat', sans-serif;
        font-size: 2.5rem;
        margin-bottom: 40px;
    }

    [data-theme="dark"] .table-headline { color: #ffffff; }
    .table-headline span { color: var(--accent-color); }

    /* Table & Rows */
    .artwork-table {
        width: 100%;
        border-top: 1px solid rgba(0, 0, 0, 0.1);
    }

    [data-theme="dark"] .artwork-table { border-top-color: rgba(255,255,255,0.1); }

    .artwork-row {
        display: grid;
        grid-template-columns: 80px 1fr 250px;
        padding: 25px 20px;
        border-bottom: 1px solid rgba(0, 0, 0, 0.1);
        text-decoration: none;
        color: #333;
        position: relative;
        z-index: 1;
        transition: color 0.4s ease;
        align-items: center;
        overflow: hidden;
        white-space: normal; /* Allows wrapping */
        word-wrap: break-word;
    }

    [data-theme="dark"] .artwork-row { 
        color: #ffffff; 
        border-bottom-color: rgba(255,255,255,0.1); 
    }

    /* Middle-to-Outside Hover Effect */
    .artwork-row::before {
        content: "";
        position: absolute;
        top: 0;
        left: 50%;
        width: 0;
        height: 100%;
        transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
        z-index: -1;
        transform: translateX(-50%);
    }

    .artwork-row:hover::before {
        width: 100%;
        background-color: #000000;
    }

    .artwork-row:hover { color: #ffffff !important; }

    [data-theme="dark"] .artwork-row:hover::before {
        background-color: #ffffff;
    }

    [data-theme="dark"] .artwork-row:hover { color: #000000 !important; }

    /* Column Content Styling */
    .year { 
        font-weight: 800; 
        opacity: 0.5; 
        font-size: 0.9rem; 
    }
    
    .project-title { 
        font-weight: 700; 
        font-size: 1.1rem; 
        padding: 0 20px;
        white-space: normal; /* Fixed: Overridden white-space: nowrap */
        overflow: visible; 
    }

    .project-category { 
        text-align: right; 
        font-weight: 700; 
        font-size: 0.9rem;
        white-space: normal; /* Fixed: Overridden white-space: nowrap */
        overflow: visible;
    }

    /* --- Responsive Queries --- */
    @media (max-width: 768px) {
        .artwork-container { padding: 0 15px; }
        
        .table-headline {
            font-size: 1.5rem;
            margin-bottom: 25px;
        }

        .artwork-row { 
            grid-template-columns: 50px 1fr 100px;
            padding: 18px 10px;
        }

        .project-title {
            padding: 0 10px;
            font-size: 0.95rem;
        }

        .year, .project-category {
            font-size: 0.75rem;
        }
    }

    @media (max-width: 400px) {
        .artwork-row {
            grid-template-columns: 40px 1fr 80px;
        }
        .project-category {
            opacity: 0.7;
        }
    }
    
    .see-more-container {
        display: flex;
        justify-content: flex-end; /* Aligns everything to the right side */
        padding: 40px;
        background-color: transparent;
        font-family: 'Montserrat', sans-serif;
    }

    .see-more-link {
        display: flex;
        align-items: center;
        gap: 15px;
        text-decoration: none;
        color: #111; /* Default for light theme */
        transition: opacity 0.3s ease;
    }

    [data-theme="dark"] .see-more-link {
        color: #ffffff;
    }

    .see-more-text {
        font-weight: 800;
        font-size: 1.1rem;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    /* SVG Swirl Arrow Container */
    .swirl-icon {
        width: 60px;
        height: 60px;
        border: 1px solid rgba(128, 128, 128, 0.3);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
    }

    /* Custom SVG Arrow styling to match your image */
    .swirl-icon svg {
        width: 30px;
        height: 30px;
        fill: none;
        stroke: currentColor;
        stroke-width: 2.5;
        stroke-linecap: round;
        stroke-linejoin: round;
        transition: transform 0.6s ease;
    }

    /* HOVER EFFECTS */
    .see-more-link:hover .swirl-icon {
        background-color: #111;
        color: #fff;
        border-color: #111;
        transform: scale(1.1);
    }

    [data-theme="dark"] .see-more-link:hover .swirl-icon {
        background-color: #ffffff;
        color: #000;
        border-color: #ffffff;
    }

    /* The rotation effect on the arrow itself */
    .see-more-link:hover svg {
        transform: rotate(360deg);
    }
    
</style>

<section class="portfolio-wrapper">
    <div class="artwork-container">
        <h2 class="table-headline" data-aos="fade-right">watch my <span>more</span> artwork.</h2>
        <div class="artwork-table">
            
            <a href="#" class="artwork-row" data-aos="fade-up">
                <div class="year">2022</div>
                <div class="project-title">Obys Agency Creative Design</div>
                <div class="project-category">Design Studio</div>
            </a>

            <a href="#" class="artwork-row" data-aos="fade-up" data-aos-delay="100">
                <div class="year">2021</div>
                <div class="project-title">Infos | Connects the brands across the globe</div>
                <div class="project-category">Studio Website</div>
            </a>

            <a href="#" class="artwork-row" data-aos="fade-up" data-aos-delay="200">
                <div class="year">2023</div>
                <div class="project-title">Brandium Studio Pro</div>
                <div class="project-category">Design Agency</div>
            </a>

            <a href="#" class="artwork-row" data-aos="fade-up" data-aos-delay="300">
                <div class="year">2022</div>
                <div class="project-title">Supari Refreshments</div>
                <div class="project-category">Jeera Alternative</div>
            </a>
            
        </div>
        <div class="see-more-container">
    <a href="#work" class="see-more-link">
        <span class="see-more-text">See more work</span>
        
        <div class="swirl-icon">
            <svg viewBox="0 0 24 24">
                <path d="M4 6c0 0 12-5 12 5s-10 7-10 2 12-2 14 5" />
                <path d="M17 18l3 3 3-3" />
            </svg>
        </div>
    </a>
</div>
    </div>
</section>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init({ duration: 1000, once: true });
</script>



<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700;900&display=swap" rel="stylesheet">

<style>
    .contact-section {
        background-color: #1c1c1c;
        height: auto; 
        padding: 80px 20px; /* Balanced padding for desktop */
        font-family: 'Montserrat', sans-serif;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: flex-start; /* Aligns to top so it doesn't get cut off */
        overflow: hidden;
    }

    .contact-content {
        max-width: 1200px;
        width: 100%;
        margin: 0 auto;
    }

    .contact-heading {
        font-size: clamp(2rem, 7vw, 5.5rem); 
        font-weight: 700;
        line-height: 1.2;
        color: #ffffff;
        margin: 0;
        word-wrap: break-word;
        overflow-wrap: break-word;
    }

    .contact-link {
        display: inline-block;
        text-decoration: none;
        transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        cursor: pointer;
    }

    .link-mail { color: #f25f5c; }
    .link-instagram { color: #ffb400; }
    .link-linkedin { color: #5bc0de; }

    /* Tilt + Glow Effects */
    .contact-link:hover {
        transform: scale(1.05) rotate(-2deg);
        filter: drop-shadow(0 0 15px currentColor);
    }

    .link-linkedin:hover {
        transform: scale(1.05) rotate(2deg);
    }

    /* Footer Credits - Removed AOS for guaranteed mobile visibility */
    .footer-credits {
        margin-top: 50px;
        color: #ffffff;
        font-size: 1.1rem;
        font-weight: 700;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
        width: 100%;
        opacity: 1 !important; /* Forces visibility */
        visibility: visible !important;
    }

    .heart {
        color: #ff4d4d;
        display: inline-block;
        animation: pulse 1.5s infinite;
    }

    @keyframes pulse {
        0% { transform: scale(1); }
        50% { transform: scale(1.3); }
        100% { transform: scale(1); }
    }

    @media (max-width: 768px) {
        .contact-section {
            padding: 40px 15px; /* Tighter padding for mobile height */
            text-align: center;
        }
        
        .contact-heading {
            line-height: 1.4;
            font-size: clamp(1.8rem, 8vw, 2.5rem); /* Slightly smaller on very small screens */
        }

        .footer-credits {
            margin-top: 30px;
            font-size: 0.85rem; /* Ensures text doesn't wrap awkwardly */
            flex-wrap: wrap; /* Allows name to drop to next line if needed */
        }
    }
</style>

<section class="contact-section">
    <div class="contact-content">
        <h1 class="contact-heading" data-aos="fade-up">
            you can get in touch with me via 
            <a href="mailto:yourname@gmail.com" class="contact-link link-mail">mail</a> or 
            <a href="https://instagram.com/yourprofile" class="contact-link link-instagram">instagram</a> or 
            <a href="https://linkedin.com/in/yourprofile" class="contact-link link-linkedin">linkedin.</a>
        </h1>

        <div class="footer-credits">
            developed with <span class="heart">❤</span> by Prathamesh Admile
        </div>
    </div>
</section>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init({ 
        duration: 1000, 
        once: true,
        offset: 50 // Trigger animation earlier so it shows up on short screens
    });
</script>




<!-- Scripts -->
<script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
    // Typed.js
    new Typed('#typed-text', {
        strings: ['Software Developer', 'Full Stack Developer', 'Startup Founder', 'IoT Specialist'],
        typeSpeed: 50,
        backSpeed: 30,
        loop: true
    });

    // Theme Toggle Logic
    const themeToggle = document.getElementById('themeToggle');
    const themeIcon = document.getElementById('themeIcon');
    const html = document.documentElement;

    const updateUI = (theme) => {
        html.setAttribute('data-theme', theme);
        themeIcon.className = theme === 'dark' ? 'fas fa-sun' : 'fas fa-moon';
    };

    themeToggle.addEventListener('click', () => {
        const newTheme = html.getAttribute('data-theme') === 'light' ? 'dark' : 'light';
        localStorage.setItem('portfolio-theme', newTheme);
        updateUI(newTheme);
    });

    // Load preference
    updateUI(localStorage.getItem('portfolio-theme') || 'light');
    
    
    
    
    
    
    
    
    
    
    <!-- SECURITY BLOCK SCRIPT -->

/*
// Disable Right Click
document.addEventListener("contextmenu", e => e.preventDefault());

// Disable Drag
document.addEventListener("dragstart", e => e.preventDefault());

// Disable Text Selection
document.addEventListener("selectstart", e => e.preventDefault());

// Disable Copy
document.addEventListener("copy", e => e.preventDefault());

// Disable Cut
document.addEventListener("cut", e => e.preventDefault());

// Disable Paste
document.addEventListener("paste", e => e.preventDefault());

// Disable Keyboard Shortcuts
document.addEventListener("keydown", function(e) {

    // F12
    if (e.key === "F12") {
        e.preventDefault();
        return false;
    }

    // Ctrl+Shift+I
    if (e.ctrlKey && e.shiftKey && e.key === "I") {
        e.preventDefault();
        return false;
    }

    // Ctrl+Shift+J
    if (e.ctrlKey && e.shiftKey && e.key === "J") {
        e.preventDefault();
        return false;
    }

    // Ctrl+Shift+C
    if (e.ctrlKey && e.shiftKey && e.key === "C") {
        e.preventDefault();
        return false;
    }

    // Ctrl+U
    if (e.ctrlKey && e.key === "u") {
        e.preventDefault();
        return false;
    }

    // Ctrl+S
    if (e.ctrlKey && e.key === "s") {
        e.preventDefault();
        return false;
    }

    // Ctrl+A
    if (e.ctrlKey && e.key === "a") {
        e.preventDefault();
        return false;
    }

    // Ctrl+C
    if (e.ctrlKey && e.key === "c") {
        e.preventDefault();
        return false;
    }

});

// DevTools Detection
setInterval(function () {
    debugger;
}, 100);

*/


</script>

</body>
</html>
