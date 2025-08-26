
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sam Adedams - Web Developer & Graphics Designer</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Times New Roman', Times, serif;
            line-height: 1.6;
            color: #333;
            background: linear-gradient(135deg, #0c1445, #1e3c72, #2a5298, #1e3c72, #0c1445);
            background-size: 400% 400%;
            animation: gradientShift 15s ease infinite;
            overflow-x: hidden;
        }

        @keyframes gradientShift {
            0%, 100% { background-position: 0% 50%; }
            25% { background-position: 100% 50%; }
            50% { background-position: 50% 100%; }
            75% { background-position: 50% 0%; }
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes slideInLeft {
            from {
                opacity: 0;
                transform: translateX(-50px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes glowPulse {
            0%, 100% {
                box-shadow: 0 0 30px rgba(255, 215, 0, 0.6),
                           0 0 60px rgba(255, 215, 0, 0.4),
                           0 0 90px rgba(255, 215, 0, 0.2),
                           inset 0 0 30px rgba(255, 215, 0, 0.1);
            }
            50% {
                box-shadow: 0 0 50px rgba(255, 215, 0, 0.8),
                           0 0 100px rgba(255, 215, 0, 0.6),
                           0 0 150px rgba(255, 215, 0, 0.4),
                           inset 0 0 50px rgba(255, 215, 0, 0.2);
            }
        }

        @keyframes floatUpDown {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }

        @keyframes rotateGlow {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        @keyframes sparkle {
            0%, 100% { opacity: 0; transform: scale(0); }
            50% { opacity: 1; transform: scale(1); }
        }

        /* Header */
        header {
            background: rgba(12, 20, 69, 0.95);
            color: white;
            padding: 1rem 0;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            backdrop-filter: blur(20px);
            border-bottom: 3px solid transparent;
            border-image: linear-gradient(90deg, #FFD700, #FFA500, #FFD700) 1;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3);
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            display: flex;
            align-items: center;
            font-size: 2rem;
            font-weight: bold;
            background: linear-gradient(45deg, #FFD700, #FFA500, #FFD700);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            text-shadow: 0 0 30px rgba(255, 215, 0, 0.5);
            position: relative;
        }

        .logo::before {
            content: '';
            position: absolute;
            top: -5px;
            left: -5px;
            right: -5px;
            bottom: -5px;
            background: linear-gradient(45deg, #FFD700, #FFA500);
            border-radius: 10px;
            opacity: 0.1;
            z-index: -1;
            filter: blur(10px);
        }

        .logo-icon {
            width: 60px;
            height: 60px;
            margin-right: 20px;
            background: linear-gradient(45deg, #FFD700, #FFA500);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            animation: glowPulse 4s infinite, rotateGlow 20s linear infinite;
            border: 3px solid rgba(255, 215, 0, 0.3);
        }

        .logo-icon::before {
            content: '';
            position: absolute;
            top: -10px;
            left: -10px;
            right: -10px;
            bottom: -10px;
            border-radius: 50%;
            background: conic-gradient(from 0deg, transparent, #FFD700, transparent);
            animation: rotateGlow 3s linear infinite;
            z-index: -1;
        }

        .logo-icon svg {
            width: 35px;
            height: 35px;
            filter: drop-shadow(0 0 10px rgba(30, 60, 114, 0.8));
        }

        .nav-links {
            display: flex;
            list-style: none;
            gap: 2rem;
        }

        .nav-links a {
            color: white;
            text-decoration: none;
            font-size: 1.2rem;
            font-weight: 600;
            transition: all 0.4s ease;
            position: relative;
            padding: 10px 20px;
            border-radius: 25px;
            background: linear-gradient(45deg, transparent, transparent);
        }

        .nav-links a::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            border-radius: 25px;
            padding: 2px;
            background: linear-gradient(45deg, #FFD700, #FFA500, #FFD700);
            mask: linear-gradient(#fff 0 0) content-box, linear-gradient(#fff 0 0);
            mask-composite: exclude;
            opacity: 0;
            transition: opacity 0.4s;
        }

        .nav-links a:hover::before {
            opacity: 1;
        }

        .nav-links a:hover {
            color: #FFD700;
            background: rgba(255, 215, 0, 0.1);
            text-shadow: 0 0 15px rgba(255, 215, 0, 0.8);
            transform: translateY(-2px);
        }

        /* Section 1: Hero/About */
        .hero {
            background: linear-gradient(135deg, #0c1445, #1e3c72, #2a5298);
            color: white;
            padding: 140px 0 100px;
            text-align: center;
            position: relative;
            overflow: hidden;
            min-height: 100vh;
            display: flex;
            align-items: center;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: 
                radial-gradient(circle at 20% 20%, rgba(255, 215, 0, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 80% 80%, rgba(255, 165, 0, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 40% 60%, rgba(255, 215, 0, 0.05) 0%, transparent 50%);
            animation: floatUpDown 8s ease-in-out infinite;
        }

        .hero::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-image: 
                radial-gradient(2px 2px at 20px 30px, rgba(255, 215, 0, 0.3), transparent),
                radial-gradient(2px 2px at 40px 70px, rgba(255, 165, 0, 0.2), transparent),
                radial-gradient(1px 1px at 90px 40px, rgba(255, 215, 0, 0.4), transparent),
                radial-gradient(1px 1px at 130px 80px, rgba(255, 165, 0, 0.3), transparent);
            background-size: 150px 100px;
            animation: sparkle 4s linear infinite;
        }

        .hero-content {
            position: relative;
            z-index: 2;
            animation: fadeInUp 1.5s ease-out;
        }

        .hero-logo {
            width: 300px;
            height: 300px;
            margin: 0 auto 40px;
            background: linear-gradient(45deg, #FFD700, #FFA500, #FFD700);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            animation: glowPulse 5s infinite, floatUpDown 6s ease-in-out infinite;
            border: 5px solid rgba(255, 215, 0, 0.3);
            box-shadow: 
                0 0 60px rgba(255, 215, 0, 0.4),
                0 0 120px rgba(255, 215, 0, 0.2),
                inset 0 0 60px rgba(255, 255, 255, 0.1);
        }

        .hero-logo::before {
            content: '';
            position: absolute;
            top: -20px;
            left: -20px;
            right: -20px;
            bottom: -20px;
            border-radius: 50%;
            background: conic-gradient(from 0deg, #FFD700, #FFA500, #FFD700, #FFA500, #FFD700);
            animation: rotateGlow 8s linear infinite;
            z-index: -1;
            filter: blur(20px);
            opacity: 0.6;
        }

        .hero-logo::after {
            content: '';
            position: absolute;
            top: -10px;
            left: -10px;
            right: -10px;
            bottom: -10px;
            border-radius: 50%;
            border: 2px dashed rgba(255, 215, 0, 0.5);
            animation: rotateGlow 15s linear infinite reverse;
        }

        .hero-logo svg {
            width: 180px;
            height: 180px;
            filter: drop-shadow(0 0 20px rgba(30, 60, 114, 0.8));
            animation: floatUpDown 4s ease-in-out infinite reverse;
        }

        .hero h1 {
            font-size: 5rem;
            margin-bottom: 30px;
            background: linear-gradient(45deg, #FFD700, #FFA500, #FFD700);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            text-shadow: 0 0 40px rgba(255, 215, 0, 0.5);
            position: relative;
            animation: fadeInUp 1.5s ease-out 0.5s both;
        }

        .hero h1::before {
            content: attr(data-text);
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            background: linear-gradient(45deg, #FFD700, #FFA500);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            z-index: -1;
            filter: blur(10px);
            opacity: 0.7;
        }

        .hero .subtitle {
            font-size: 1.8rem;
            opacity: 0.9;
            max-width: 900px;
            margin: 0 auto 40px;
            line-height: 2;
            text-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
            animation: fadeInUp 1.5s ease-out 1s both;
        }

        .hero .work-experience {
            background: rgba(255, 215, 0, 0.15);
            padding: 30px 50px;
            border-radius: 40px;
            border: 3px solid transparent;
            background-image: linear-gradient(rgba(255, 215, 0, 0.15), rgba(255, 215, 0, 0.15)), 
                              linear-gradient(45deg, #FFD700, #FFA500);
            background-origin: border-box;
            background-clip: content-box, border-box;
            display: inline-block;
            margin-top: 30px;
            backdrop-filter: blur(20px);
            position: relative;
            overflow: hidden;
            animation: fadeInUp 1.5s ease-out 1.5s both;
        }

        .work-experience::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.1), transparent);
            transition: left 0.6s;
        }

        .work-experience:hover::before {
            left: 100%;
        }

        .work-experience h3 {
            color: #FFD700;
            font-size: 1.6rem;
            margin-bottom: 15px;
            text-shadow: 0 0 20px rgba(255, 215, 0, 0.8);
        }

        .work-experience p {
            font-size: 1.3rem;
            line-height: 1.8;
        }

        /* Section 2: Services */
        .services {
            padding: 100px 0;
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
        }

        .section-title {
            text-align: center;
            font-size: 3.5rem;
            color: #1e3c72;
            margin-bottom: 20px;
            position: relative;
            animation: slideInLeft 1s ease-out;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 4px;
            background: linear-gradient(45deg, #FFD700, #FFA500);
            border-radius: 2px;
        }

        .section-subtitle {
            text-align: center;
            font-size: 1.3rem;
            color: #666;
            margin-bottom: 60px;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }

        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 3rem;
            margin-top: 50px;
        }

        .service-card {
            background: white;
            padding: 50px 30px;
            border-radius: 20px;
            text-align: center;
            box-shadow: 0 15px 35px rgba(30, 60, 114, 0.1);
            transition: all 0.4s ease;
            border: 2px solid transparent;
            position: relative;
            overflow: hidden;
        }

        .service-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 215, 0, 0.1), transparent);
            transition: left 0.6s;
        }

        .service-card:hover::before {
            left: 100%;
        }

        .service-card:hover {
            transform: translateY(-15px);
            box-shadow: 0 25px 50px rgba(30, 60, 114, 0.2);
            border-color: #FFD700;
        }

        .service-icon {
            width: 100px;
            height: 100px;
            margin: 0 auto 30px;
            background: linear-gradient(45deg, #1e3c72, #2a5298);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2.5rem;
            color: #FFD700;
            box-shadow: 0 10px 30px rgba(30, 60, 114, 0.3);
        }

        .service-card h3 {
            color: #1e3c72;
            font-size: 1.8rem;
            margin-bottom: 20px;
            font-weight: bold;
        }

        .service-card p {
            color: #666;
            line-height: 1.8;
            font-size: 1.1rem;
        }

        /* Section 3: Portfolio */
        .portfolio {
            padding: 100px 0;
            background: linear-gradient(135deg, #1e3c72, #2a5298);
            color: white;
        }

        .portfolio-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
            gap: 3rem;
            margin-top: 50px;
        }

        .portfolio-card {
            background: rgba(255, 255, 255, 0.1);
            padding: 40px 30px;
            border-radius: 20px;
            backdrop-filter: blur(10px);
            border: 2px solid rgba(255, 215, 0, 0.3);
            transition: all 0.4s ease;
            position: relative;
            overflow: hidden;
        }

        .portfolio-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, #FFD700, #FFA500);
        }

        .portfolio-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(255, 215, 0, 0.2);
            border-color: #FFD700;
        }

        .portfolio-card h3 {
            font-size: 1.8rem;
            margin-bottom: 15px;
            color: #FFD700;
            font-weight: bold;
        }

        .portfolio-card .category {
            background: rgba(255, 215, 0, 0.2);
            padding: 8px 20px;
            border-radius: 25px;
            font-size: 0.9rem;
            display: inline-block;
            margin-bottom: 20px;
            border: 1px solid #FFD700;
        }

        .portfolio-card p {
            margin-bottom: 20px;
            line-height: 1.8;
            font-size: 1.1rem;
        }

        /* Section 4: Contact */
        .contact {
            padding: 100px 0;
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
        }

        .contact-content {
            text-align: center;
            max-width: 800px;
            margin: 0 auto;
        }

        .contact-form {
            background: white;
            padding: 50px;
            border-radius: 20px;
            box-shadow: 0 20px 60px rgba(30, 60, 114, 0.1);
            border: 2px solid #FFD700;
            margin-top: 40px;
        }

        .form-group {
            margin-bottom: 30px;
            text-align: left;
        }

        .form-group label {
            display: block;
            margin-bottom: 10px;
            color: #1e3c72;
            font-weight: bold;
            font-size: 1.1rem;
        }

        .form-group input,
        .form-group textarea,
        .form-group select {
            width: 100%;
            padding: 15px;
            border: 2px solid #e0e0e0;
            border-radius: 10px;
            font-size: 1.1rem;
            font-family: 'Times New Roman', Times, serif;
            transition: all 0.3s;
        }

        .form-group input:focus,
        .form-group textarea:focus,
        .form-group select:focus {
            outline: none;
            border-color: #FFD700;
            box-shadow: 0 0 10px rgba(255, 215, 0, 0.3);
        }

        .form-group textarea {
            height: 150px;
            resize: vertical;
        }

        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }

        .contact-methods {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 2rem;
            margin: 50px 0;
        }

        .contact-method {
            text-align: center;
            padding: 30px 20px;
            background: white;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(30, 60, 114, 0.1);
            border: 2px solid transparent;
            transition: all 0.3s;
        }

        .contact-method:hover {
            border-color: #FFD700;
            transform: translateY(-5px);
        }

        .contact-method-icon {
            width: 80px;
            height: 80px;
            margin: 0 auto 20px;
            background: linear-gradient(45deg, #1e3c72, #2a5298);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
        }

        .contact-method-icon svg {
            width: 40px;
            height: 40px;
            fill: #FFD700;
        }

        .contact-method h3 {
            color: #1e3c72;
            margin-bottom: 10px;
            font-size: 1.3rem;
        }

        .contact-method p {
            color: #666;
            font-size: 1.1rem;
        }

        .contact-method a {
            color: #1e3c72;
            text-decoration: none;
            font-weight: bold;
        }

        .contact-method a:hover {
            color: #FFD700;
        }

        /* Section 5: Footer */
        footer {
            background: linear-gradient(135deg, #0d1421, #1e3c72);
            color: white;
            padding: 60px 0 30px;
            text-align: center;
        }

        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 3rem;
            margin-bottom: 40px;
        }

        .footer-section h3 {
            color: #FFD700;
            margin-bottom: 20px;
            font-size: 1.5rem;
        }

        .footer-section p,
        .footer-section a {
            color: rgba(255, 255, 255, 0.8);
            text-decoration: none;
            line-height: 1.8;
            font-size: 1.1rem;
        }

        .footer-section a:hover {
            color: #FFD700;
        }

        .social-links {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin: 30px 0;
        }

        .social-link {
            width: 60px;
            height: 60px;
            background: linear-gradient(45deg, #FFD700, #FFA500);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #1e3c72;
            text-decoration: none;
            font-size: 1.5rem;
            transition: all 0.3s;
            box-shadow: 0 10px 30px rgba(255, 215, 0, 0.3);
        }

        .social-link svg {
            width: 24px;
            height: 24px;
            fill: #1e3c72;
        }

        .social-link:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(255, 215, 0, 0.4);
        }

        /* Buttons */
        .btn {
            background: linear-gradient(45deg, #FFD700, #FFA500);
            color: #1e3c72;
            padding: 15px 40px;
            border: none;
            border-radius: 30px;
            font-size: 1.2rem;
            font-weight: bold;
            text-decoration: none;
            display: inline-block;
            transition: all 0.3s;
            cursor: pointer;
            font-family: 'Times New Roman', Times, serif;
            box-shadow: 0 10px 30px rgba(255, 215, 0, 0.3);
        }

        .btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 35px rgba(255, 215, 0, 0.4);
        }

        .btn-outline {
            background: transparent;
            color: #FFD700;
            border: 2px solid #FFD700;
        }

        .btn-outline:hover {
            background: #FFD700;
            color: #1e3c72;
        }

        /* Success Message */
        .success-message {
            background: linear-gradient(45deg, #4CAF50, #45a049);
            color: white;
            padding: 15px 30px;
            border-radius: 10px;
            margin: 20px 0;
            display: none;
            animation: fadeInUp 0.5s ease;
        }

        /* Mobile Responsiveness */
        @media (max-width: 768px) {
            .hero h1 {
                font-size: 2.5rem;
            }

            .hero-logo {
                width: 180px;
                height: 180px;
            }

            .hero-logo svg {
                width: 100px;
                height: 100px;
            }

            .nav-links {
                display: none;
            }

            .section-title {
                font-size: 2.5rem;
            }

            .services-grid,
            .portfolio-grid {
                grid-template-columns: 1fr;
            }

            .form-row {
                grid-template-columns: 1fr;
            }

            .contact-form {
                padding: 30px 20px;
            }

            .hero .subtitle {
                font-size: 1.2rem;
            }
        }

        /* Loading Animation */
        .loading {
            display: inline-block;
            width: 20px;
            height: 20px;
            border: 2px solid #1e3c72;
            border-radius: 50%;
            border-top-color: transparent;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            to {
                transform: rotate(360deg);
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <nav class="container">
            <div class="logo">
                <div class="logo-icon">
                    <svg viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M30 20 L70 20 L80 30 L80 50 L70 60 L50 50 L70 40 L70 30 L40 30 L30 40 L30 20 Z" fill="#1e3c72"/>
                        <path d="M20 40 L60 40 L70 50 L70 70 L60 80 L20 80 L20 60 L40 60 L40 70 L50 70 L50 60 L30 60 L20 50 L20 40 Z" fill="#1e3c72"/>
                    </svg>
                </div>
                SAM DIGITAL HUB
            </div>
            <ul class="nav-links">
                <li><a href="#about">About</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#portfolio">Portfolio</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="#footer">More</a></li>
            </ul>
        </nav>
    </header>

    <!-- Section 1: Hero/About -->
    <section class="hero" id="about">
        <div class="container">
            <div class="hero-content">
                <div class="hero-logo">
                    <svg viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M30 20 L70 20 L80 30 L80 50 L70 60 L50 50 L70 40 L70 30 L40 30 L30 40 L30 20 Z" fill="#1e3c72"/>
                        <path d="M20 40 L60 40 L70 50 L70 70 L60 80 L20 80 L20 60 L40 60 L40 70 L50 70 L50 60 L30 60 L20 50 L20 40 Z" fill="#1e3c72"/>
                    </svg>
                </div>
                <h1>Sam Adedams</h1>
                <p class="subtitle">Expert Web Developer, Creative Graphics Designer & Strategic Brand Marketer specializing in modern web solutions, compelling visual designs, and effective brand strategies that drive business growth.</p>
                
                <div class="work-experience">
                    <h3>Professional Experience</h3>
                    <p><strong>D Global Growthfield Tech Hub</strong><br>2021 - 2025<br>Web Developer | Graphics Designer | Brand Marketer</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 2: Services -->
    <section class="services" id="services">
        <div class="container">
            <h2 class="section-title">My Services</h2>
            <p class="section-subtitle">Comprehensive digital solutions tailored to elevate your business presence and drive meaningful results</p>
            
            <div class="services-grid">
                <div class="service-card">
                    <div class="service-icon">
                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M14 2H6C4.9 2 4 2.9 4 4V20C4 21.1 4.9 22 6 22H18C19.1 22 20 21.1 20 20V8L14 2Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <polyline points="14,2 14,8 20,8" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <line x1="16" y1="13" x2="8" y2="13" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <line x1="16" y1="17" x2="8" y2="17" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <polyline points="10,9 9,9 8,9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <h3>Web Development</h3>
                    <p>Creating responsive, modern websites using the latest technologies. From simple landing pages to complex web applications, I deliver solutions that are fast, secure, and user-friendly.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="3" y="3" width="18" height="18" rx="2" ry="2" stroke="currentColor" stroke-width="2"/>
                            <circle cx="9" cy="9" r="2" stroke="currentColor" stroke-width="2"/>
                            <path d="m21 15-3.086-3.086a2 2 0 0 0-2.828 0L6 21" stroke="currentColor" stroke-width="2"/>
                        </svg>
                    </div>
                    <h3>Graphics Design</h3>
                    <p>Crafting visually stunning designs that communicate your brand message effectively. Logos, brochures, social media graphics, and complete brand identity packages.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3 3v18h18" stroke="currentColor" stroke-width="2"/>
                            <path d="M18.7 8a4 4 0 1 0-7.4 0" stroke="currentColor" stroke-width="2"/>
                            <path d="M9 16a2 2 0 1 1-4 0c0-8 4-8 4 0" stroke="currentColor" stroke-width="2"/>
                            <path d="M14 12a2 2 0 0 1 4 0c0 8-4 8-4 0" stroke="currentColor" stroke-width="2"/>
                        </svg>
                    </div>
                    <h3>Brand Marketing</h3>
                    <p>Developing comprehensive marketing strategies that build brand awareness and drive customer engagement. Digital marketing, content strategy, and brand positioning.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 3: Portfolio -->
    <section class="portfolio" id="portfolio">
        <div class="container">
            <h2 class="section-title" style="color: #FFD700;">Featured Projects</h2>
            <p class="section-subtitle" style="color: rgba(255,255,255,0.8);">A showcase of successful projects that demonstrate expertise and creativity</p>
            
            <div class="portfolio-grid">
                <div class="portfolio-card">
                    <h3>E-Commerce Platform</h3>
                    <div class="category">Web Development</div>
                    <p>Developed a full-featured online store with secure payment integration, inventory management, and responsive design. Increased client sales by 150% within 6 months.</p>
                </div>
                <div class="portfolio-card">
                    <h3>Corporate Brand Identity</h3>
                    <div class="category">Graphics Design</div>
                    <p>Complete brand redesign including logo, business cards, letterheads, and marketing materials. Created a cohesive visual identity that improved brand recognition by 200%.</p>
                </div>
                <div class="portfolio-card">
                    <h3>Digital Marketing Campaign</h3>
                    <div class="category">Brand Marketing</div>
                    <p>Launched multi-channel marketing campaign that generated 300% increase in leads and 85% improvement in conversion rates through strategic content and targeted advertising.</p>
                </div>
                <div class="portfolio-card">
                    <h3>Mobile App Interface</h3>
                    <div class="category">UI/UX Design</div>
                    <p>Designed intuitive mobile application interface with focus on user experience. Achieved 4.8-star app store rating and 40% increase in user retention.</p>
                </div>
                <div class="portfolio-card">
                    <h3>Restaurant Website & Branding</h3>
                    <div class="category">Full Package</div>
                    <p>Complete digital transformation including website development, logo design, menu design, and social media marketing. Boosted online orders by 250%.</p>
                </div>
                <div class="portfolio-card">
                    <h3>Tech Startup Branding</h3>
                    <div class="category">Brand Strategy</div>
                    <p>Developed comprehensive brand strategy and visual identity for emerging tech company. Successfully positioned brand in competitive market, securing $2M funding.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 4: Contact -->
    <section class="contact" id="contact">
        <div class="container">
            <div class="contact-content">
                <h2 class="section-title">Let's Work Together</h2>
                <p class="section-subtitle">Ready to bring your vision to life? Get in touch for professional services that deliver exceptional results.</p>
                
                <div class="contact-methods">
                    <div class="contact-method">
                        <div class="contact-method-icon">
                            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
                                <polyline points="22,6 12,13 2,6"/>
                            </svg>
                        </div>
                        <h3>Email</h3>
                        <p><a href="mailto:samadedamola4@gmail.com">samadedamola4@gmail.com</a></p>
                    </div>
                    <div class="contact-method">
                        <div class="contact-method-icon">
                            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
                            </svg>
                        </div>
                        <h3>Phone/WhatsApp</h3>
                        <p><a href="tel:+2349032830132">+234 903 283 0132</a></p>
                    </div>
                    <div class="contact-method">
                        <div class="contact-method-icon">
                            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.890-5.335 11.893-11.893A11.821 11.821 0 0020.064 3.488z"/>
                            </svg>
                        </div>
                        <h3>WhatsApp Direct</h3>
                        <p><a href="https://wa.me/2349032830132?text=Hi%20Sam,%20I%20would%20like%20to%20discuss%20a%20project%20with%20you." target="_blank">Message Me Now</a></p>
                    </div>
                </div>

                <form class="contact-form" id="contactForm">
                    <div class="success-message" id="successMessage">
                        Thank you! Your message has been sent successfully. I'll get back to you within 24 hours.
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label for="firstName">First Name *</label>
                            <input type="text" id="firstName" name="firstName" required>
                        </div>
                        <div class="form-group">
                            <label for="lastName">Last Name *</label>
                            <input type="text" id="lastName" name="lastName" required>
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label for="email">Email Address *</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone Number</label>
                            <input type="tel" id="phone" name="phone">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="service">Service Needed *</label>
                        <select id="service" name="service" required>
                            <option value="">Select a service</option>
                            <option value="web-development">Web Development</option>
                            <option value="graphics-design">Graphics Design</option>
                            <option value="brand-marketing">Brand Marketing</option>
                            <option value="full-package">Complete Package</option>
                            <option value="consultation">Consultation</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="budget">Project Budget</label>
                        <select id="budget" name="budget">
                            <option value="">Select budget range</option>
                            <option value="under-1000">Under $1,000</option>
                            <option value="1000-5000">$1,000 - $5,000</option>
                            <option value="5000-10000">$5,000 - $10,000</option>
                            <option value="10000-plus">$10,000+</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="message">Project Details *</label>
                        <textarea id="message" name="message" placeholder="Please describe your project, timeline, and any specific requirements..." required></textarea>
                    </div>
                    
                    <button type="submit" class="btn">
                        <span class="btn-text">Send Message</span>
                        <span class="loading" id="loading" style="display: none;"></span>
                    </button>
                    
                    <div style="margin-top: 30px; text-align: center;">
                        <p style="color: #666; margin-bottom: 20px; font-size: 1.1rem;">Or contact me directly:</p>
                        <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
                            <a href="mailto:samadedamola4@gmail.com?subject=Project%20Inquiry&body=Hi%20Sam,%20I%20would%20like%20to%20discuss%20a%20project%20with%20you." class="btn btn-outline">
                                📧 Email Now
                            </a>
                            <a href="https://wa.me/2349032830132?text=Hi%20Sam,%20I%20would%20like%20to%20discuss%20a%20project%20with%20you.%20My%20name%20is%20_____%20and%20I%20need%20help%20with%20_____." target="_blank" class="btn">
                                💬 WhatsApp Chat
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- Section 5: Footer -->
    <footer id="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3>Sam Digital Hub</h3>
                    <p>Professional web development, graphics design, and brand marketing services that deliver exceptional results for businesses of all sizes.</p>
                </div>
                <div class="footer-section">
                    <h3>Quick Contact</h3>
                    <p>📧 <a href="mailto:samadedamola4@gmail.com">samadedamola4@gmail.com</a></p>
                    <p>📱 <a href="tel:+2349032830132">+234 903 283 0132</a></p>
                    <p>💬 <a href="https://wa.me/2349032830132?text=Hi%20Sam!" target="_blank">WhatsApp Direct</a></p>
                </div>
                <div class="footer-section">
                    <h3>Services</h3>
                    <p><a href="#services">Web Development</a></p>
                    <p><a href="#services">Graphics Design</a></p>
                    <p><a href="#services">Brand Marketing</a></p>
                    <p><a href="#contact">Free Consultation</a></p>
                </div>
            </div>
            
            <div class="social-links">
                <a href="mailto:samadedamola4@gmail.com" class="social-link">
                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
                        <polyline points="22,6 12,13 2,6"/>
                    </svg>
                </a>
                <a href="https://wa.me/2349032830132?text=Hi%20Sam!" target="_blank" class="social-link">
                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.890-5.335 11.893-11.893A11.821 11.821 0 0020.064 3.488z"/>
                    </svg>
                </a>
                <a href="tel:+2349032830132" class="social-link">
                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
                    </svg>
                </a>
            </div>
            
            <p style="margin-top: 30px; color: rgba(255,255,255,0.6); font-size: 1rem;">
                © 2025 Sam Adedams Tech Hub. All rights reserved. | Professional Web Developer & Brand Designer
            </p>
        </div>
    </footer>

    <script>
        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Header scroll effect
        window.addEventListener('scroll', function() {
            const header = document.querySelector('header');
            if (window.scrollY > 100) {
                header.style.background = 'rgba(13, 71, 161, 0.98)';
                header.style.boxShadow = '0 5px 20px rgba(0,0,0,0.3)';
            } else {
                header.style.background = 'rgba(13, 71, 161, 0.95)';
                header.style.boxShadow = '0 2px 10px rgba(0,0,0,0.1)';
            }
        });

        // Form submission with enhanced functionality
        document.getElementById('contactForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const loading = document.getElementById('loading');
            const btnText = document.querySelector('.btn-text');
            const successMessage = document.getElementById('successMessage');
            
            // Show loading state
            loading.style.display = 'inline-block';
            btnText.textContent = 'Sending...';
            
            // Get form data
            const formData = new FormData(this);
            const firstName = formData.get('firstName');
            const lastName = formData.get('lastName');
            const email = formData.get('email');
            const phone = formData.get('phone');
            const service = formData.get('service');
            const budget = formData.get('budget');
            const message = formData.get('message');
            
            // Create WhatsApp message
            const whatsappMessage = `Hi Sam! 🌟

*New Project Inquiry*

👤 *Name:* ${firstName} ${lastName}
📧 *Email:* ${email}
📱 *Phone:* ${phone || 'Not provided'}
💼 *Service:* ${service}
💰 *Budget:* ${budget || 'Not specified'}

📝 *Project Details:*
${message}

Looking forward to working with you!`;
            
            const whatsappUrl = `https://wa.me/2349032830132?text=${encodeURIComponent(whatsappMessage)}`;
            
            // Create email content
            const emailSubject = `Project Inquiry from ${firstName} ${lastName}`;
            const emailBody = `Hi Sam,

Name: ${firstName} ${lastName}
Email: ${email}
Phone: ${phone || 'Not provided'}
Service Needed: ${service}
Budget: ${budget || 'Not specified'}

Project Details:
${message}

Best regards,
${firstName} ${lastName}`;
            
            const emailUrl = `mailto:samadedamola4@gmail.com?subject=${encodeURIComponent(emailSubject)}&body=${encodeURIComponent(emailBody)}`;
            
            // Simulate form processing
            setTimeout(() => {
                // Hide loading state
                loading.style.display = 'none';
                btnText.textContent = 'Send Message';
                
                // Show success message
                successMessage.style.display = 'block';
                
                // Create action buttons
                const actionDiv = document.createElement('div');
                actionDiv.style.marginTop = '20px';
                actionDiv.innerHTML = `
                    <p style="margin-bottom: 15px; color: #1e3c72; font-weight: bold;">Choose your preferred contact method:</p>
                    <div style="display: flex; gap: 15px; justify-content: center; flex-wrap: wrap;">
                        <a href="${whatsappUrl}" target="_blank" class="btn" style="margin: 0;">
                            💬 Continue on WhatsApp
                        </a>
                        <a href="${emailUrl}" class="btn btn-outline" style="margin: 0;">
                            📧 Send via Email
                        </a>
                    </div>
                `;
                
                successMessage.appendChild(actionDiv);
                
                // Reset form
                this.reset();
                
                // Scroll to success message
                successMessage.scrollIntoView({ behavior: 'smooth' });
                
                // Auto-hide success message after 30 seconds
                setTimeout(() => {
                    successMessage.style.display = 'none';
                }, 30000);
                
            }, 2000);
        });

        // Add animation on scroll
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        // Observe service cards and portfolio cards
        document.querySelectorAll('.service-card, .portfolio-card').forEach(card => {
            card.style.opacity = '0';
            card.style.transform = 'translateY(30px)';
            card.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
            observer.observe(card);
        });

        // Enhanced WhatsApp and Email quick actions
        function openWhatsApp() {
            const message = "Hi Sam! 👋 I'm interested in your services and would like to discuss a project. Can we chat?";
            window.open(`https://wa.me/2349032830132?text=${encodeURIComponent(message)}`, '_blank');
        }

        function openEmail() {
            window.open('mailto:samadedamola4@gmail.com?subject=Project%20Inquiry&body=Hi%20Sam,%0A%0AI%27m%20interested%20in%20your%20services%20and%20would%20like%20to%20discuss%20a%20project.%0A%0ABest%20regards,', '_blank');
        }

        // Add floating contact buttons (optional enhancement)
        // Removed floating buttons as requested
    </script>
</body>
</html>
