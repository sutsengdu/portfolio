<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sut Seng Du | Technology Entrepreneur</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        :root {
            --primary: #00bcd4;
            --secondary: #2196f3;
            --accent: #ff9800;
            --light: #e0e7ef;
            --dark: #0a0f1a;
        }

        body {
            background: linear-gradient(120deg, #0a0f1a 0%, #181f2a 100%);
            color: var(--light);
            overflow-x: hidden;
            line-height: 1.6;
            position: relative;
        }

        /* SVG Blob Background */
        .svg-bg {
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            z-index: 0;
            pointer-events: none;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Header & Navigation */
        header {
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
            background: linear-gradient(90deg, rgba(10,15,26,0.98) 0%, rgba(24,31,42,0.98) 100%);
            backdrop-filter: blur(10px);
            padding: 15px 0;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.3);
            border-bottom: 3px solid #2196f3;
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: clamp(1.2rem, 2vw, 2rem);
            font-weight: 700;
            color: #fff;
            display: flex;
            align-items: center;
        }

        .logo span {
            color: var(--secondary);
        }

        .nav-links {
            display: flex;
            gap: 30px;
        }

        .nav-links a {
            color: #fff;
            text-decoration: none;
            font-weight: 600;
            font-size: clamp(1rem, 1.5vw, 1.1rem);
            transition: all 0.3s ease;
            position: relative;
        }

        .nav-links a:hover {
            color: var(--secondary);
        }

        .nav-links a::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 3px;
            background: var(--secondary);
            transition: width 0.3s ease;
        }

        .nav-links a:hover::after {
            width: 100%;
        }

        /* Hero Section */
        .hero {
            min-height: 100vh;
            display: flex;
            align-items: center;
            position: relative;
            overflow: hidden;
            padding-top: 80px;
        }

        .hero-content {
            position: relative;
            z-index: 2;
            max-width: 650px;
        }

        .hero h1 {
            font-size: clamp(2.2rem, 7vw, 4.5rem);
            margin-bottom: 20px;
            line-height: 1.1;
            color: #fff;
            text-shadow: 0 2px 12px rgba(33, 150, 243, 0.18), 0 1px 0 #0002;
        }

        .hero h2 {
            font-size: clamp(1.2rem, 3vw, 2.2rem);
            margin-bottom: 30px;
            color: #fff;
            text-shadow: 0 2px 12px rgba(33, 150, 243, 0.18), 0 1px 0 #0002;
        }

        .hero p {
            font-size: clamp(1rem, 2.5vw, 1.3rem);
            margin-bottom: 40px;
            max-width: 600px;
        }

        .hero-btn {
            display: inline-block;
            background: var(--primary);
            color: #18181b;
            padding: 15px 35px;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 700;
            font-size: clamp(1rem, 2vw, 1.1rem);
            transition: all 0.3s ease;
            box-shadow: 0 5px 15px #00bcd455;
        }

        .hero-btn:hover {
            background: #2196f3;
            color: #fff;
            transform: translateY(-5px);
            box-shadow: 0 8px 20px #2196f388;
        }

        /* 3D Canvas */
        #canvas3d {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 1;
            border-radius: 0;
            box-shadow: 0 0 32px 0 #00bcd4cc, 0 0 8px 0 #2196f3cc;
            border-left: none;
            background: rgba(10,15,26,0.85);
            overflow: hidden;
        }
        #canvas3d::after {
            content: '';
            position: absolute;
            top: 0; left: 0; width: 100%; height: 100%;
            background: linear-gradient(120deg, rgba(0,188,212,0.08) 0%, rgba(33,150,243,0.10) 100%);
            pointer-events: none;
        }

        /* Hero Logos Row */
        .hero-logos {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 32px;
            margin-top: 40px;
            margin-bottom: 40px;
            flex-wrap: wrap;
        }
        .hero-logos img {
            width: 70px;
            height: 70px;
            object-fit: contain;
            border-radius: 16px;
            background: #fff2;
            padding: 8px;
            transition: transform 0.2s;
            text-decoration: none !important;
            border-bottom: none !important;
        }
        .hero-logos img:hover {
            transform: scale(1.08) rotate(-2deg);
            box-shadow: 0 4px 16px 0 #0002;
        }
        .hero-logos a {
            text-decoration: none !important;
            border-bottom: none !important;
        }

        /* Sections */
        section {
            padding: 100px 0;
        }

        .section-title {
            text-align: center;
            margin-bottom: 70px;
            position: relative;
        }

        .section-title h2 {
            font-size: clamp(1.5rem, 5vw, 2.8rem);
            display: inline-block;
            color: #00bcd4;
            text-shadow: 0 2px 12px #2196f355, 0 1px 0 #0002;
            position: relative;
        }

        .section-title h2::after {
            content: '';
            position: absolute;
            bottom: -15px;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 4px;
            background: var(--secondary);
            border-radius: 2px;
        }

        /* Projects Grid */
        .projects-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }

        .project-card {
            background: rgba(24, 31, 42, 0.92);
            border-radius: 20px;
            padding: 40px 30px;
            text-align: center;
            transition: all 0.4s ease;
            position: relative;
            overflow: hidden;
            backdrop-filter: blur(10px);
            transform-style: preserve-3d;
            transform: perspective(1000px);
            box-shadow: 0 10px 30px #00bcd455;
            border: 1.5px solid #00bcd4;
        }

        .project-card:hover {
            background: rgba(33, 150, 243, 0.10);
            box-shadow: 0 15px 35px #2196f388, 0 0 0 2px #00bcd4;
        }

        .project-icon {
            font-size: 3.5rem;
            margin-bottom: 25px;
            color: var(--secondary);
        }

        .project-card h3 {
            font-size: clamp(1.1rem, 3vw, 1.8rem);
            margin-bottom: 20px;
            color: var(--light);
        }

        .project-card p {
            font-size: clamp(0.95rem, 2vw, 1.1rem);
            margin-bottom: 25px;
            color: #bdc3c7;
        }

        .role-tag {
            display: inline-block;
            background: var(--secondary);
            color: #fff;
            font-size: 0.95rem;
            font-weight: 600;
            border-radius: 20px;
            padding: 6px 18px;
            margin: 12px 0 8px 0;
            box-shadow: 0 2px 8px #2196f355;
            letter-spacing: 0.5px;
            border: none;
        }

        /* Footer */
        footer {
            background: linear-gradient(90deg, #0a0f1a 0%, #181f2a 100%);
            padding: 40px 0 20px 0;
            text-align: center;
            color: #fff;
            border-top: 3px solid #2196f3;
        }

        .social-links {
            display: flex;
            justify-content: center;
            gap: 25px;
            margin-bottom: 30px;
        }

        .social-links a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: rgba(255,255,255,0.08);
            color: #fff;
            font-size: 1.5rem;
            transition: all 0.3s ease;
            border: 1.5px solid rgba(255,255,255,0.18);
            text-decoration: none !important;
            border-bottom: none !important;
        }

        .social-links a:hover {
            background: #2196f3;
            color: #fff;
            transform: translateY(-5px) scale(1.08);
        }

        .copyright {
            font-size: clamp(0.9rem, 1.5vw, 1.1rem);
            color: #00bcd4;
            opacity: 0.85;
        }

        /* Animations */
        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-20px); }
        }

        .floating {
            animation: float 6s ease-in-out infinite;
        }

        /* Responsive Design */
        @media (max-width: 992px) {
            .hero h1 {
                font-size: 3.5rem;
            }
            #canvas3d {
                width: 100%;
                opacity: 0.5;
                border-radius: 0;
                min-height: 220px;
                border-left: none;
                border-top: none;
                box-shadow: 0 0 32px 0 #00bcd4cc, 0 0 8px 0 #2196f3cc;
            }
            .hero-content {
                max-width: 100%;
                text-align: center;
                padding: 0 20px;
            }
            .hero p {
                margin: 0 auto 40px;
            }
        }

        @media (max-width: 768px) {
            .nav-toggle {
                display: flex;
            }
            .nav-links {
                display: flex;
                flex-direction: column;
                position: absolute;
                top: 60px;
                right: 20px;
                background: rgba(33,150,243,0.98);
                border-radius: 16px;
                box-shadow: 0 8px 32px 0 #0003;
                padding: 24px 32px;
                gap: 24px;
                z-index: 1050;
                opacity: 0;
                pointer-events: none;
                transform: translateY(-20px);
                transition: opacity 0.3s, transform 0.3s;
            }
            .nav-links.open {
                opacity: 1;
                pointer-events: auto;
                transform: translateY(0);
            }
            .hero h1 {
                font-size: 2.8rem;
            }
            .hero h2 {
                font-size: 1.8rem;
            }
        }

        @media (max-width: 600px) {
            .projects-grid {
                grid-template-columns: 1fr;
                gap: 16px;
            }
            .project-card {
                padding: 20px 10px;
            }
            .hero-logos {
                gap: 16px;
            }
            section {
                padding: 50px 0;
            }
            #canvas3d {
                min-height: 160px;
                border-radius: 0;
                border-top: none;
                box-shadow: 0 0 24px 0 #00bcd4cc, 0 0 6px 0 #2196f3cc;
            }
        }

        .about-content p {
            font-size: clamp(1rem, 2.5vw, 1.3rem);
            margin-bottom: 30px;
        }

        .contact-info p {
            font-size: clamp(1rem, 2.2vw, 1.2rem);
            margin-bottom: 10px;
        }

        #contact > div > div > p {
            font-size: clamp(1.1rem, 2.5vw, 1.4rem);
            margin-bottom: 40px;
        }

        /* Hamburger Menu */
        .nav-toggle {
            display: none;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            width: 40px;
            height: 40px;
            cursor: pointer;
            z-index: 1100;
        }
        .nav-toggle span {
            display: block;
            width: 28px;
            height: 4px;
            margin: 4px 0;
            background: #fff;
            border-radius: 2px;
            transition: 0.3s;
        }
        /* Toggle open/close animation */
        .nav-toggle.open span:nth-child(1) {
            transform: translateY(8px) rotate(45deg);
        }
        .nav-toggle.open span:nth-child(2) {
            opacity: 0;
        }
        .nav-toggle.open span:nth-child(3) {
            transform: translateY(-8px) rotate(-45deg);
        }

        .project-btn, .btn-project {
            display: inline-block;
            margin-top: 18px;
            background: var(--primary);
            color: #18181b;
            font-weight: 600;
            border: none;
            border-radius: 20px;
            padding: 8px 24px;
            font-size: 1rem;
            transition: all 0.3s;
            text-decoration: none;
            box-shadow: 0 2px 8px #00bcd455;
        }
        .project-btn:hover, .btn-project:hover {
            background: var(--secondary);
            color: #fff;
            transform: translateY(-2px) scale(1.04);
        }
    </style>
</head>
<body>
    <!-- SVG Blob Background -->
    <svg class="svg-bg" viewBox="0 0 900 600" fill="none" xmlns="http://www.w3.org/2000/svg">
      <g filter="url(#filter0_f_1_2)">
        <ellipse cx="700" cy="100" rx="220" ry="120" fill="#00bcd4" fill-opacity="0.10"/>
        <ellipse cx="200" cy="500" rx="180" ry="90" fill="#2196f3" fill-opacity="0.10"/>
      </g>
      <defs>
        <filter id="filter0_f_1_2" x="0" y="0" width="900" height="600" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
          <feFlood flood-opacity="0" result="BackgroundImageFix"/>
          <feBlend in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
          <feGaussianBlur stdDeviation="60" result="effect1_foregroundBlur_1_2"/>
        </filter>
      </defs>
    </svg>

    <!-- Header -->
    <header>
        <div class="container">
            <nav>
                <div class="logo">SutSeng<span>Du</span></div>
                <div class="nav-toggle" id="navToggle" aria-label="Open navigation" tabindex="0">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <div class="nav-links">
                    <a href="#home">Home</a>
                    <a href="#projects">Projects</a>
                    <a href="#about">About</a>
                    <a href="#contact">Contact</a>
                </div>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section id="home" class="hero">
        <div class="container">
            <div class="hero-content">
                <h1>Sut Seng Du</h1>
                <h2>Technology Entrepreneur & Visionary</h2>
                <p>Driving innovation in technology solutions across Myitkyina with expertise in computer systems, renewable energy, and digital education.</p>
                <a href="#projects" class="hero-btn">Explore My Ventures</a>
            </div>
            
        </div>
        <div id="canvas3d">
            <canvas id="matrixRain" style="width:100%;height:100%;display:block;"></canvas>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects">
        <div class="container">
            <div class="section-title">
                <h2>My Ventures & Projects</h2>
            </div>
            <div class="projects-grid">
                <!-- NanoTechMKN -->
                <div class="project-card floating" style="animation-delay: 0s;">
                    <div class="project-icon">
                        <i class="fas fa-laptop"></i>
                    </div>
                    <h3>Nano Tech Myitkyina</h3>
                    <span class="role-tag">Founder</span>
                    <p>Computer sales and providing cutting edge computer hardware solutions and expert technical support to businesses and individuals across Myitkyina.</p>
                    <a href="#" class="project-btn">Nano Tech Myitkyina</a>
                </div>

                <!-- RightClick Esports -->
                <div class="project-card floating" style="animation-delay: 0.5s;">
                    <div class="project-icon">
                        <i class="fas fa-gamepad"></i>
                    </div>
                    <h3>RightClick Esports Center</h3>
                    <span class="role-tag">Owner</span>
                    <p>Myitkyina's premier gaming center featuring state-of-the-art equipment, competitive tournaments, and a thriving gaming community.</p>
                    <a href="#" class="project-btn">RightClick Esports</a>
                </div>

                <!-- SCoderLab -->
                <div class="project-card floating" style="animation-delay: 1s;">
                    <div class="project-icon">
                        <i class="fas fa-code"></i>
                    </div>
                    <h3>SCoderLab Software Training</h3>
                    <span class="role-tag">Founder</span>
                    <p>Empowering the next generation of developers through comprehensive training programs in programming, web development, and IT skills.</p>
                    <a href="#" class="project-btn">SCoderLab Training</a>
                </div>

                <!-- MyitkyinaSolarSolutions -->
                <div class="project-card floating" style="animation-delay: 1.5s;">
                    <div class="project-icon">
                        <i class="fas fa-solar-panel"></i>
                    </div>
                    <h3>Myitkyina Solar Solutions</h3>
                    <span class="role-tag">CTO</span>
                    <p>Delivering sustainable energy solutions through advanced solar technology installations and maintenance services.</p>
                    <a href="solar_shop.php" class="project-btn">Myitkyina Solar Solution</a>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" style="background: rgba(0,0,0,0.2);">
        <div class="container">
            <div class="section-title">
                <h2>About Me</h2>
            </div>
            <div class="about-content" style="max-width: 800px; margin: 0 auto; text-align: center;">
                <p>
                    With over a decade of experience in the technology sector, I've dedicated my career to advancing digital solutions and sustainable energy in Myitkyina.
                </p>
                <p>
                    My journey began with computer hardware, expanded into gaming and esports, evolved to technology education, and now includes renewable energy solutions - each venture building on the last to create a comprehensive technology ecosystem.
                </p>
                <p>
                    My mission is to bridge the technology gap in Myitkyina by providing accessible, high-quality solutions that empower businesses and individuals to thrive in the digital age.
                </p>
            </div>
            <div class="hero-logos" style="display: flex; justify-content: center; align-items: center; gap: 32px; margin-top: 40px; margin-bottom: 40px; flex-wrap: wrap;">
                <img src="nanotechmkn.png" alt="NanoTechMKN Logo" style="width: 80px; height: 80px; object-fit: contain; border-radius: 16px; background: #fff2; padding: 8px;" />
                <img src="rightclick.png" alt="RightClick Esports Logo" style="width: 80px; height: 80px; object-fit: contain; border-radius: 16px; background: #fff2; padding: 8px;" />
                <img src="SCoderLab.png" alt="SCoderLab Logo" style="width: 80px; height: 80px; object-fit: contain; border-radius: 16px; background: #fff2; padding: 8px;" />
                <img src="myitkyinasolarsolutions.png" alt="Myitkyina Solar Solutions Logo" style="width: 80px; height: 80px; object-fit: contain; border-radius: 16px; background: #fff2; padding: 8px;" />
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <div class="section-title">
                <h2>Get In Touch</h2>
            </div>
            <div style="text-align: center; max-width: 600px; margin: 0 auto;">
                <p>
                    Interested in collaborating or learning more about my ventures? Reach out to me through any of the channels below.
                </p>
                <div class="contact-info" style="margin-bottom: 40px;">
                    <p><i class="fas fa-envelope" style="margin-right: 10px;"></i> sutsengdu773@gmail.com</p>
                    <p><i class="fas fa-phone" style="margin-right: 10px;"></i> +95 9444 324 032</p>
                </div>
                <a href="mailto:sutsengdu773@gmail.com" class="hero-btn" style="display: inline-block;">
                    <i class="fas fa-paper-plane" style="margin-right: 10px;"></i> Send Message
                </a>
            </div>
        </div>
    
    </section>
    
    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="social-links">
                <a href="https://www.linkedin.com/in/sutsengdu/"><i class="fab fa-linkedin-in"></i></a>
                <a href="https://x.com/sutsengdu773"><i class="fab fa-twitter"></i></a>
                <a href="https://www.facebook.com/sutsengdumaran"><i class="fab fa-facebook-f"></i></a>
                <a href="https://www.instagram.com/sutsengdu/"><i class="fab fa-instagram"></i></a>
            </div>
            <p class="copyright">© 2023 Sut Seng Du. All rights reserved.</p>
        </div>
    </footer>

    <script>
        // Matrix-style Digital Rain Animation
        function startMatrixRain() {
            const canvas = document.getElementById('matrixRain');
            if (!canvas) return;
            const ctx = canvas.getContext('2d');
            function resizeCanvas() {
                canvas.width = canvas.offsetWidth;
                canvas.height = canvas.offsetHeight;
            }
            resizeCanvas();
            window.addEventListener('resize', resizeCanvas);

            // Characters to use (Katakana, numbers, and some Latin)
            const chars = 'アァカサタナハマヤャラワガザダバパイィキシチニヒミリヰギジヂビピウゥクスツヌフムユュルグズヅブプエェケセテネヘメレヱゲゼデベペオォコソトノホモヨョロヲゴゾドボポヴッンABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
            const fontSize = 20;
            const columns = Math.floor(canvas.width / fontSize);
            const drops = Array(columns).fill(1);

            function draw() {
                ctx.fillStyle = 'rgba(10,15,26,0.18)';
                ctx.fillRect(0, 0, canvas.width, canvas.height);
                ctx.font = fontSize + 'px monospace';
                ctx.textAlign = 'center';
                for (let i = 0; i < drops.length; i++) {
                    const text = chars[Math.floor(Math.random() * chars.length)];
                    ctx.shadowColor = '#00bcd4';
                    ctx.shadowBlur = 12;
                    ctx.fillStyle = i % 2 === 0 ? '#00bcd4' : '#2196f3';
                    ctx.fillText(text, i * fontSize + fontSize/2, drops[i] * fontSize);
                    ctx.shadowBlur = 0;
                    if (Math.random() > 0.975) {
                        drops[i] = 0;
                    }
                    drops[i]++;
                    if (drops[i] * fontSize > canvas.height) {
                        drops[i] = 0;
                    }
                }
            }
            setInterval(draw, 50);
        }
        document.addEventListener('DOMContentLoaded', startMatrixRain);

        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });

        // Hamburger menu toggle
        const navToggle = document.getElementById('navToggle');
        const navLinks = document.querySelector('.nav-links');
        if (navToggle && navLinks) {
            navToggle.addEventListener('click', function() {
                navToggle.classList.toggle('open');
                navLinks.classList.toggle('open');
            });
            navToggle.addEventListener('keypress', function(e) {
                if (e.key === 'Enter' || e.key === ' ') {
                    navToggle.classList.toggle('open');
                    navLinks.classList.toggle('open');
                }
            });
            // Close menu when a link is clicked (mobile)
            navLinks.querySelectorAll('a').forEach(link => {
                link.addEventListener('click', () => {
                    navToggle.classList.remove('open');
                    navLinks.classList.remove('open');
                });
            });
        }
    </script>
</body>
</html>