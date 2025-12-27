    <header>
            <button class="menu-btn left-menu-btn" aria-label="Open main menu">
        <i class="fas fa-bars"></i>
    </button>
        <nav>
            <ul class="nav-left">
                <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                <li><a href="./AboutUs.html"><i class="fas fa-info-circle"></i> About</a></li>
                <li><a href="#"><i class="fas fa-cogs"></i> Services</a></li>
            </ul>
        </nav>
        <div class="logo">
            <img src="./Asset/images/logo.png" alt="Decor Concept Logo">
        </div>
        <nav>
            <ul class="nav-right">
                <li><a href="./contact.html"><i class="fas fa-envelope"></i> Contact</a></li>
                <li><a href="#"><i class="fas fa-blog"></i> Blog</a></li>
                <li><a href="#"><i class="fas fa-life-ring"></i> Support</a></li>
            </ul>
        </nav>
            <button class="menu-btn right-menu-btn" aria-label="Open support menu">
        <i class="fas fa-bars"></i>
    </button>
    </header>
    <style>    header {
        background: linear-gradient(90deg, var(--charcoal), var(--charcoal-light));
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: clamp(1px, 2vw, 5px) clamp(20px, 5vw, 80px);
        min-height: 90px;
        position: relative;
        z-index: 1000;
        box-shadow: var(--shadow-lg);
        overflow: visible;
        clip-path: polygon(
            0% 0%, 100% 0%, 100% 85%,
            72% 85%, 68% 100%, 32% 100%,
            28% 85%, 0% 85%
        );
    }

    header::before {
        content: '';
        position: absolute;
        inset: 0;
        background: linear-gradient(180deg, #e4dcc9, #000);
        z-index: -1;
        clip-path: inherit;
    }
        @media (max-width: 768px) {
        .menu-btn { display: block; }

    /* Mobile nav fixed positioning */
    .nav-left,
    .nav-right {
        position: fixed;
        top: 90px;
        width: 260px;
        height: 100vh; /* ensure full height */
        background: linear-gradient(180deg, #2d2d2d, #1c1c1c);
        padding: 20px 0;
        overflow-y: auto;
        z-index: 2000;
        transition: transform .4s ease;
        display: block;
    }

    .nav-left { left: 0; transform: translateX(-100%); }
    .nav-right { right: 0; transform: translateX(100%); }

    .nav-left.active { transform: translateX(0) !important; }
    .nav-right.active { transform: translateX(0) !important; }

    /* Ensure menu items are visible */
    .nav-left ul,
    .nav-right ul {
        flex-direction: column;
        padding: 0 20px;
    }

    .nav-left li,
    .nav-right li { margin: 10px 0; }

    .nav-left a,
    .nav-right a {
        width: 100%;
        padding: 14px 16px;
        background: rgba(255,255,255,.03);
        border-radius: 8px;
        display: block;
    }

        header {
            padding: 8px 20px;
            clip-path: polygon(0% 0%,100% 0%,100% 90%,60% 90%,50% 100%,40% 90%,0% 90%);
        }

        .content { flex-direction: column; align-items: center; }
        .card { width: 90%; max-width: 600px; }
        .footer-top { grid-template-columns: 1fr 1fr; }
        .footer-base { flex-direction: column; text-align: center; }
    }

    @media (max-width: 480px) {
        header { height: 80px; padding: 6px 15px; }
        .logo img { width: 70px; height: 70px; }
        .footer-top { grid-template-columns: 1fr; }
    }

    
</style>