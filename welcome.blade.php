
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Discover Bali hiking, culture, nature, and adventure tour packages.">
    <title>BaliTrails | Explore Bali</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Montserrat:wght@500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="{{ asset('css/tourism.css') }}" rel="stylesheet">

    <style>
        :root {
            --green: #23834a;
            --green-dark: #14532d;
            --green-deep: #103b24;
            --green-light: #dcfce7;
            --green-soft: #f3faf4;
            --text-dark: #173b2a;
        }

        html {
            scroll-behavior: smooth;
            scroll-padding-top: 90px;
        }

        body {
            background: var(--green-soft);
            color: var(--text-dark);
            font-family: 'DM Sans', sans-serif;
        }

        h1, h2, h3, h4, .navbar-brand {
            font-family: 'Montserrat', sans-serif;
        }

        /* NAVBAR */
        .site-nav {
            background: rgba(255,255,255,.97) !important;
            box-shadow: 0 4px 25px rgba(20,83,45,.09);
            backdrop-filter: blur(12px);
        }

        .navbar-brand {
            color: var(--green-dark);
            font-weight: 800;
        }

        .brand-blue {
            color: var(--green) !important;
        }

        .brand-icon {
            display: inline-flex;
            width: 40px;
            height: 40px;
            align-items: center;
            justify-content: center;
            margin-right: 7px;
            border-radius: 13px;
            background: linear-gradient(135deg, var(--green-dark), #4ade80);
            color: white;
        }

        .site-nav .nav-link {
            color: #315b3d;
            font-weight: 600;
            transition: .25s;
        }

        .site-nav .nav-link:hover {
            color: var(--green);
        }

        .navbar-toggler {
            border-color: #cde5d2;
        }

        /* BUTTONS */
        .btn-primary {
            background: linear-gradient(135deg, var(--green), #16a34a) !important;
            border-color: var(--green) !important;
            color: white !important;
            box-shadow: 0 6px 18px rgba(35,131,74,.18);
            transition: .25s;
        }

        .btn-primary:hover {
            background: var(--green-dark) !important;
            border-color: var(--green-dark) !important;
            transform: translateY(-2px);
        }

        .btn-outline-primary {
            border-color: var(--green) !important;
            color: var(--green) !important;
        }

        .btn-outline-primary:hover {
            background: var(--green) !important;
            color: white !important;
        }

        /* HERO */
        .hero {
            position: relative;
            background-color: #214e32;
            background-size: cover;
            background-position: center;
        }

        .hero-shade {
            background: linear-gradient(
                90deg,
                rgba(10,45,25,.86) 0%,
                rgba(15,70,36,.62) 52%,
                rgba(15,70,36,.18) 100%
            ) !important;
        }

        .hero h1 {
            color: white;
            font-weight: 900;
        }

        .hero h1 span {
            color: #86efac !important;
        }

        .hero-label {
            color: #bbf7d0 !important;
            font-weight: 700;
            letter-spacing: 2px;
        }

        .hero-content > p {
            color: #edf9ef;
        }

        .hero-benefits {
            color: #f0fdf4;
        }

        .hero-benefits i {
            color: #86efac !important;
        }

        /* QUICK INFO */
        .quick-info {
            background: white;
            border-bottom: 1px solid #e0eee3;
        }

        .info-item > i {
            color: var(--green) !important;
        }

        .info-item strong {
            color: var(--green-dark);
        }

        .info-item small {
            color: #718276;
        }

        /* SECTION HEADINGS */
        .packages-section,
        .about-section {
            background: var(--green-soft);
        }

        .section-label {
            color: var(--green) !important;
            font-weight: 800;
            letter-spacing: 1.8px;
        }

        .section-heading h2 {
            color: var(--green-dark);
            font-weight: 800;
        }

        .section-heading h2 span {
            color: var(--green) !important;
        }

        .section-heading p {
            color: #647568;
        }

        /* FILTERS */
        .filters .filter-btn {
            padding: 10px 20px;
            margin: 4px;
            border: 1px solid #d5e7d9;
            border-radius: 50px;
            background: white;
            color: #315b3d;
            font-weight: 600;
            transition: .25s;
        }

        .filters .filter-btn:hover,
        .filters .filter-btn.active {
            background: var(--green) !important;
            border-color: var(--green) !important;
            color: white !important;
        }

        /* TOUR CARDS */
        .tour-card {
            overflow: hidden;
            border: 1px solid #e0eee3;
            border-radius: 20px;
            background: white;
            box-shadow: 0 8px 25px rgba(20,83,45,.06);
            transition: transform .3s, box-shadow .3s;
        }

        .tour-card:hover {
            transform: translateY(-7px);
            box-shadow: 0 18px 38px rgba(20,83,45,.14);
        }

        .tour-image-wrap {
            position: relative;
            overflow: hidden;
        }

        .tour-image {
            display: block;
            width: 100%;
            height: 245px;
            object-fit: cover;
            transition: transform .5s;
        }

        .tour-card:hover .tour-image {
            transform: scale(1.05);
        }

        .tour-tag {
            background: var(--green-light) !important;
            color: var(--green-dark) !important;
            font-weight: 800;
        }

        .favorite-btn {
            color: var(--green);
            background: white;
            border: none;
            border-radius: 50%;
            transition: .25s;
        }

        .favorite-btn:hover {
            color: white;
            background: var(--green);
        }

        .tour-meta {
            color: #718276;
        }

        .tour-meta i,
        .tour-highlights i {
            color: var(--green) !important;
        }

        .tour-body h3 {
            color: var(--green-dark);
            font-weight: 800;
        }

        .tour-description {
            color: #647568;
        }

        .tour-price strong {
            color: var(--green) !important;
        }

        .details-button {
            font-weight: 700;
        }

        .price-note {
            color: #718276;
        }

        /* HIKING BANNER */
        .hiking-section {
            padding: 65px 0;
            background: #eaf6ec !important;
        }

        .hiking-box {
            padding: 55px 40px;
            border-radius: 26px;
            background: linear-gradient(120deg, #103b24, #23834a 65%, #16a34a) !important;
            color: white;
            box-shadow: 0 15px 35px rgba(20,83,45,.15);
        }

        .hiking-box h2 {
            color: white;
            font-weight: 900;
        }

        .hiking-box p {
            color: #e3f5e7;
        }

        .hiking-box .section-label {
            color: #bbf7d0 !important;
        }

        .hiking-box .btn-light {
            color: var(--green-dark);
            font-weight: 700;
        }

        /* BENEFITS */
        .benefit-card {
            height: 100%;
            padding: 30px;
            border: 1px solid #e0eee3;
            border-radius: 20px;
            background: white;
            box-shadow: 0 8px 24px rgba(20,83,45,.05);
            transition: .25s;
        }

        .benefit-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 14px 28px rgba(20,83,45,.11);
        }

        .benefit-card > i {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 55px;
            height: 55px;
            margin-bottom: 18px;
            border-radius: 15px;
            background: var(--green-light);
            color: var(--green) !important;
            font-size: 22px;
        }

        .benefit-card h3 {
            color: var(--green-dark);
            font-size: 19px;
            font-weight: 800;
        }

        .benefit-card p {
            margin-bottom: 0;
            color: #647568;
        }

        /* FOOTER */
        .site-footer {
            padding-top: 50px;
            background: var(--green-deep) !important;
            color: white;
        }

        .footer-brand,
        .footer-brand .brand-blue {
            color: white !important;
        }

        .site-footer h4 {
            color: white;
            font-weight: 800;
        }

        .site-footer p {
            color: #c5dfcc;
        }

        .footer-bottom {
            margin-top: 35px;
            padding-top: 20px;
            padding-bottom: 20px;
            border-top: 1px solid rgba(255,255,255,.16);
            color: #c5dfcc;
        }

        .footer-bottom i {
            color: #86efac;
        }

        /* RESPONSIVE */
        @media (max-width: 991px) {
            .site-nav .navbar-collapse {
                padding: 18px;
                border-radius: 0 0 16px 16px;
                background: white;
            }

            .hero-shade {
                background: rgba(10,45,25,.72) !important;
            }
        }

        @media (max-width: 576px) {
            .hiking-box {
                padding: 35px 22px;
            }

            .tour-image {
                height: 220px;
            }
        }
    </style>
</head>

<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg fixed-top site-nav">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">
            <span class="brand-icon">
                <i class="fa-solid fa-mountain-sun"></i>
            </span>
            Bali<span class="brand-blue">Trails</span>
        </a>

        <button class="navbar-toggler" type="button"
                data-bs-toggle="collapse" data-bs-target="#navbarMenu"
                aria-controls="navbarMenu" aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarMenu">
            <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-3">
                <li class="nav-item">
                    <a class="nav-link" href="#home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#packages">Packages</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">About</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-primary rounded-pill px-4" href="#packages">
                        Explore Trips <i class="fa-solid fa-arrow-right ms-1"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- HERO -->
<header class="hero" id="home">
    <div class="hero-shade"></div>

    <div class="container hero-content">
        <span class="hero-label">
            <i class="fa-solid fa-location-dot me-2"></i>
            DISCOVER THE ISLAND OF THE GODS
        </span>

        <h1>Find your own<br><span>Bali adventure.</span></h1>

        <p>
            From peaceful village hikes to hidden waterfalls and iconic temples,
            discover Bali through unforgettable local experiences.
        </p>

        <div class="d-flex flex-wrap gap-3">
            <a href="#packages" class="btn btn-primary btn-lg rounded-pill px-4">
                Explore Packages
                <i class="fa-solid fa-arrow-right ms-2"></i>
            </a>

            <a href="#about" class="btn btn-outline-light btn-lg rounded-pill px-4">
                Discover Bali
            </a>
        </div>

        <div class="hero-benefits">
            <span><i class="fa-solid fa-circle-check"></i> Local experiences</span>
            <span><i class="fa-solid fa-circle-check"></i> Private tours</span>
            <span><i class="fa-solid fa-circle-check"></i> Nature & culture</span>
        </div>
    </div>
</header>

<!-- QUICK INFO -->
<section class="quick-info">
    <div class="container info-grid">
        <div class="info-item">
            <i class="fa-solid fa-person-hiking"></i>
            <div><strong>Hiking</strong><small>Scenic local trails</small></div>
        </div>

        <div class="info-item">
            <i class="fa-solid fa-place-of-worship"></i>
            <div><strong>Culture</strong><small>Temples & traditions</small></div>
        </div>

        <div class="info-item">
            <i class="fa-solid fa-car-side"></i>
            <div><strong>Private Tours</strong><small>Comfortable journeys</small></div>
        </div>

        <div class="info-item">
            <i class="fa-solid fa-camera"></i>
            <div><strong>Photo Spots</strong><small>Beautiful memories</small></div>
        </div>
    </div>
</section>

<!-- TOUR PACKAGES -->
<section class="packages-section section-space" id="packages">
    <div class="container">
        <div class="section-heading text-center">
            <span class="section-label">CHOOSE YOUR EXPERIENCE</span>
            <h2>Explore our <span>tour packages</span></h2>
            <p>
                Discover the best of Bali with our carefully selected
                nature, culture, hiking, and adventure experiences.
            </p>
        </div>

        <div class="filters">
            <button class="filter-btn active" data-filter="all">All Packages</button>
            <button class="filter-btn" data-filter="Hiking">Hiking</button>
            <button class="filter-btn" data-filter="Culture">Culture</button>
            <button class="filter-btn" data-filter="Nature">Nature</button>
            <button class="filter-btn" data-filter="Adventure">Adventure</button>
            <button class="filter-btn" data-filter="Photo">Photo Spots</button>
        </div>

        <div class="row g-4" id="packageGrid">
            @foreach ($packages as $package)
                <div class="col-md-6 col-xl-4 package-item"
                     data-category="{{ $package['category'] }}">

                    <article class="tour-card h-100">
                        <div class="tour-image-wrap">
                            <img
                                src="{{ $package['image'] }}"
                                alt="{{ $package['name'] }}"
                                class="tour-image"
                                loading="lazy"
                                onerror="this.onerror=null;this.src='https://placehold.co/900x600/dcfce7/14532d?text=Bali+Tour';">

                            <span class="tour-tag">{{ $package['tag'] }}</span>

                            <button class="favorite-btn" type="button"
                                    aria-label="Save package">
                                <i class="fa-regular fa-heart"></i>
                            </button>
                        </div>

                        <div class="tour-body">
                            <div class="tour-meta">
                                <span>
                                    <i class="fa-regular fa-clock"></i>
                                    {{ $package['duration'] }}
                                </span>
                                <span>
                                    <i class="fa-solid fa-location-dot"></i> Bali
                                </span>
                            </div>

                            <h3>{{ $package['name'] }}</h3>
                            <p class="tour-description">{{ $package['description'] }}</p>

                            <div class="tour-highlights">
                                @foreach (array_slice($package['highlights'], 0, 3) as $highlight)
                                    <div>
                                        <i class="fa-solid fa-circle-check"></i>
                                        {{ $highlight }}
                                    </div>
                                @endforeach
                            </div>

                            <div class="tour-footer">
                                <div class="tour-price">
                                    <small>Starting price</small>
                                    <strong>Rp{{ number_format($package['price'], 0, ',', '.') }}</strong>
                                    <small>{{ $package['unit'] }}</small>
                                </div>

                                <a href="{{ route('packages.show', $package['slug']) }}"
                                   class="btn btn-outline-primary rounded-pill details-button">
                                    Details
                                    <i class="fa-solid fa-arrow-right ms-1"></i>
                                </a>
                            </div>
                        </div>
                    </article>
                </div>
            @endforeach
        </div>

        <p class="price-note">
            <i class="fa-solid fa-circle-info me-1"></i>
            Prices shown are sample starting prices. Confirm entrance tickets,
            availability, and final prices before booking.
        </p>
    </div>
</section>

<!-- HIKING PROMOTION -->
<section class="hiking-section">
    <div class="container">
        <div class="hiking-box">
            <span class="section-label">SLOW DOWN. WALK FURTHER.</span>
            <h2>Take the scenic route.</h2>
            <p>
                Walk through traditional villages, green rice fields,
                tropical forests, and discover the authentic side of Bali.
            </p>
            <a href="{{ route('packages.show', 'bali-hiking') }}"
               class="btn btn-light rounded-pill px-4">
                Explore Hiking
                <i class="fa-solid fa-arrow-right ms-2"></i>
            </a>
        </div>
    </div>
</section>

<!-- ABOUT / BENEFITS -->
<section class="section-space about-section" id="about">
    <div class="container">
        <div class="section-heading text-center">
            <span class="section-label">YOUR JOURNEY, OUR CARE</span>
            <h2>Explore Bali <span>your way.</span></h2>
            <p>Choose a trip that matches your interests and travel style.</p>
        </div>

        <div class="row g-4">
            <div class="col-md-4">
                <div class="benefit-card">
                    <i class="fa-solid fa-map-location-dot"></i>
                    <h3>Thoughtful Itineraries</h3>
                    <p>Discover beautiful places with a practical travel plan.</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="benefit-card">
                    <i class="fa-solid fa-user-group"></i>
                    <h3>Local Experiences</h3>
                    <p>Learn about Bali's nature, traditions, and communities.</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="benefit-card">
                    <i class="fa-solid fa-calendar-check"></i>
                    <h3>Easy Booking</h3>
                    <p>Ask about dates, package details, and availability.</p>
                </div>
            </div>
        </div>
    </div>
</section>

```html
<!-- FOOTER BOOKING WHATSAPP -->
<footer class="site-footer" id="contact">
    <div class="container footer-inner">
        <div>
            <a class="navbar-brand footer-brand" href="#home">
                Bali<span class="brand-blue">Trails</span>
            </a>
            <p>Local journeys. Lasting memories. Discover more of Bali.</p>
        </div>

        <div>
            <h4>Ready to explore Bali?</h4>
            <p>Contact us to ask about tour packages and booking.</p>

            <!-- Nomor booking -->
            <p class="mb-3">
                <i class="fa-brands fa-whatsapp me-2"></i>
                Booking: +62 813-5399-6452
            </p>

            <!-- Tombol booking WhatsApp -->
            <a class="btn btn-primary rounded-pill px-4"
               target="_blank"
               rel="noopener noreferrer"
               href="https://wa.me/6281353996452?text=Hello%20BaliTrails%2C%20I%20want%20to%20book%20a%20tour%20package.">
                <i class="fa-brands fa-whatsapp me-2"></i>
                Book via WhatsApp
            </a>
        </div>
    </div>

    <div class="container footer-bottom">
        <span>© {{ date('Y') }} BaliTrails</span>
        <span>Made for exploring Bali <i class="fa-solid fa-heart"></i></span>
    </div>
</footer>
```

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('js/tourism.js') }}"></script>

</body>
</html>
