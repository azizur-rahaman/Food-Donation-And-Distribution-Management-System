<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ShareMeal - Together We Save Food & Feed Lives</title>
    <link rel="stylesheet" href="/assets/css/components/reset.css">
    <link rel="stylesheet" href="/assets/css/components/variables.css">
    <link rel="stylesheet" href="/assets/css/home.css">
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar">
        <div class="container">
            <div class="navbar__content">
                <div class="navbar__logo">
                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="20" cy="20" r="18" fill="#2D6A4F"/>
                        <path d="M20 10C20 10 15 12 15 18C15 18 13 20 13 23C13 26 15 28 18 28H22C25 28 27 26 27 23C27 20 25 18 25 18C25 12 20 10 20 10Z" fill="white"/>
                        <path d="M18 28C18 28 18 30 20 30C22 30 22 28 22 28" stroke="white" stroke-width="2" stroke-linecap="round"/>
                    </svg>
                    <span class="navbar__brand">ShareMeal</span>
                </div>
                <a href="/admin/dashboard" class="btn btn--primary">Get Started</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <div class="hero__content">
                <div class="hero__text">
                    <h1 class="hero__title">Together We Save Food & Feed Lives</h1>
                    <p class="hero__description">Connect donors, volunteers, and NGOs to reduce food waste and serve communities in need.</p>
                    <div class="hero__buttons">
                        <a href="/admin/dashboard" class="btn btn--white">Join as Donor</a>
                        <a href="/admin/dashboard" class="btn btn--outline-white">Register NGO</a>
                    </div>
                </div>
                <div class="hero__image">
                    <img src="https://images.unsplash.com/photo-1488521787991-ed7bbaae773c?w=800&h=600&fit=crop" alt="Happy children smiling">
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="stats">
        <div class="container">
            <div class="stats__grid">
                <div class="stats__item">
                    <div class="stats__value">12,547</div>
                    <div class="stats__label">Meals Served</div>
                </div>
                <div class="stats__item">
                    <div class="stats__value">432</div>
                    <div class="stats__label">Active Donors</div>
                </div>
                <div class="stats__item">
                    <div class="stats__value">87</div>
                    <div class="stats__label">Partner NGOs</div>
                </div>
                <div class="stats__item">
                    <div class="stats__value">8.5 tons</div>
                    <div class="stats__label">Food Saved</div>
                </div>
            </div>
        </div>
    </section>

    <!-- How It Works Section -->
    <section class="how-it-works">
        <div class="container">
            <h2 class="section-title">How FoodShare Works</h2>
            <p class="section-subtitle">Our platform makes it simple to donate surplus food and get it to those who need it most.</p>
            
            <div class="features__grid">
                <div class="feature-card">
                    <div class="feature-card__icon feature-card__icon--green">
                        <svg width="40" height="40" viewBox="0 0 24 24" fill="none">
                            <rect x="3" y="6" width="18" height="15" rx="2" stroke="currentColor" stroke-width="2"/>
                            <path d="M3 10h18" stroke="currentColor" stroke-width="2"/>
                            <path d="M8 6V4M16 6V4" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                        </svg>
                    </div>
                    <h3 class="feature-card__title">Donate Food</h3>
                    <p class="feature-card__description">List surplus food with expiry dates and schedule convenient pickup times.</p>
                </div>

                <div class="feature-card">
                    <div class="feature-card__icon feature-card__icon--green">
                        <svg width="40" height="40" viewBox="0 0 24 24" fill="none">
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" stroke="currentColor" stroke-width="2"/>
                            <circle cx="9" cy="7" r="4" stroke="currentColor" stroke-width="2"/>
                            <path d="M23 21v-2a4 4 0 0 0-3-3.87M16 3.13a4 4 0 0 1 0 7.75" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                        </svg>
                    </div>
                    <h3 class="feature-card__title">Volunteer Network</h3>
                    <p class="feature-card__description">Our volunteers coordinate pickups and deliveries to maximize food distribution.</p>
                </div>

                <div class="feature-card">
                    <div class="feature-card__icon feature-card__icon--green">
                        <svg width="40" height="40" viewBox="0 0 24 24" fill="none">
                            <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z" stroke="currentColor" stroke-width="2"/>
                        </svg>
                    </div>
                    <h3 class="feature-card__title">Serve Communities</h3>
                    <p class="feature-card__description">Partner NGOs receive food and serve those in need while tracking impact.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Impact Section -->
    <section class="impact">
        <div class="container">
            <div class="impact__content">
                <div class="impact__image">
                    <img src="https://images.unsplash.com/photo-1559027615-cd4628902d4a?w=800&h=800&fit=crop" alt="Volunteers working together">
                </div>
                <div class="impact__text">
                    <h2 class="impact__title">Making a Real Impact</h2>
                    
                    <div class="impact__features">
                        <div class="impact__feature">
                            <div class="impact__feature-icon">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                                    <polyline points="22 4 12 14.01 9 11.01" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="impact__feature-title">Reduce Food Waste</h3>
                                <p class="impact__feature-description">Track and reduce food waste with detailed analytics and expiry alerts.</p>
                            </div>
                        </div>

                        <div class="impact__feature">
                            <div class="impact__feature-icon">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" stroke="currentColor" stroke-width="2"/>
                                    <circle cx="12" cy="10" r="3" stroke="currentColor" stroke-width="2"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="impact__feature-title">Distribution Centers</h3>
                                <p class="impact__feature-description">Manage multiple distribution centers for efficient food logistics.</p>
                            </div>
                        </div>

                        <div class="impact__feature">
                            <div class="impact__feature-icon">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z" stroke="currentColor" stroke-width="2"/>
                                    <polyline points="14 2 14 8 20 8" stroke="currentColor" stroke-width="2"/>
                                    <line x1="16" y1="13" x2="8" y2="13" stroke="currentColor" stroke-width="2"/>
                                    <line x1="16" y1="17" x2="8" y2="17" stroke="currentColor" stroke-width="2"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="impact__feature-title">Transparent Reporting</h3>
                                <p class="impact__feature-description">Download PDF summaries and track every donation from source to service.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta">
        <div class="container">
            <div class="cta__content">
                <h2 class="cta__title">Ready to Make a Difference?</h2>
                <p class="cta__description">Join our community of donors, volunteers, and NGOs working together to end food waste and hunger.</p>
                <a href="/admin/dashboard" class="btn btn--white btn--lg">Get Started</a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer__content">
                <div class="footer__section">
                    <div class="footer__logo">
                        <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="20" cy="20" r="18" fill="#52B788"/>
                            <path d="M20 10C20 10 15 12 15 18C15 18 13 20 13 23C13 26 15 28 18 28H22C25 28 27 26 27 23C27 20 25 18 25 18C25 12 20 10 20 10Z" fill="white"/>
                            <path d="M18 28C18 28 18 30 20 30C22 30 22 28 22 28" stroke="white" stroke-width="2" stroke-linecap="round"/>
                        </svg>
                        <span class="footer__brand">ShareMeal</span>
                    </div>
                </div>

                <div class="footer__section">
                    <h4 class="footer__title">Platform</h4>
                    <ul class="footer__links">
                        <li><a href="/admin/dashboard">For Donors</a></li>
                        <li><a href="/admin/dashboard">For NGOs</a></li>
                        <li><a href="/admin/dashboard">For Volunteers</a></li>
                        <li><a href="/admin/centers">Distribution Centers</a></li>
                    </ul>
                </div>

                <div class="footer__section">
                    <h4 class="footer__title">Resources</h4>
                    <ul class="footer__links">
                        <li><a href="#">How It Works</a></li>
                        <li><a href="/admin/reports">Impact Reports</a></li>
                        <li><a href="#">FAQs</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>

                <div class="footer__section">
                    <h4 class="footer__title">Legal</h4>
                    <ul class="footer__links">
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms of Service</a></li>
                        <li><a href="#">Food Safety Guidelines</a></li>
                    </ul>
                </div>
            </div>

            <div class="footer__bottom">
                <p>&copy; 2026 FoodShare. All rights reserved.</p>
            </div>
        </div>
    </footer>
</body>
</html>
