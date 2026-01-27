<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DHRUV VENTURES - Export | Import | Supplies</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="./assets/style.css">
</head>

<body>

    <!-- header -->
    <?php include('header.php') ?>

    <!-- Hero Section -->
    <section id="home" class="hero">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 hero-content">
                    <h1>Welcome to DHRUV VENTURES</h1>
                    <p>Your Trusted Partner in Export, Import & Premium Supplies</p>
                    <p>We provide best quality products - Rice, Fruits, Electronics & More</p>
                    <button class="btn-quote me-3 mb-3">Explore Products</button>
                    <button class="btn btn-outline-light btn-lg">Contact Us</button>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about-section">
        <div class="container">
            <div class="text-center" data-aos="fade-up">
                <h2 class="section-title">About Us</h2>
            </div>
            <div class="row mt-5">
                <div class="col-lg-8 mx-auto" data-aos="fade-up" data-aos-delay="100">
                    <div class="about-card">
                        <p class="lead">DHRUV VENTURES is a diversified company engaged in multiple businesses including
                            Construction, Tourism, Finance, and Export-Import operations. Established in 2009, we are
                            led by our CEO Ajay Atre, who brings over 30+ years of engineering and business expertise.
                        </p>
                        <p>We specialize in exporting and supplying premium quality products including Rice, Fresh
                            Fruits (Onion, Banana, Guava, Mango, Jackfruit), Ladies Handbags, Inverters, Industrial
                            Batteries, and Solar Panels to various countries including India, Dubai, Thailand, and Iran.
                        </p>
                        <p class="text-muted mb-0"><strong>Our Mission:</strong> To provide best quality products to our
                            clients with exceptional service and competitive pricing.</p>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-3" data-aos="zoom-in" data-aos-delay="100">
                    <div class="stat-box">
                        <div class="stat-number">2009</div>
                        <div>Established</div>
                    </div>
                </div>
                <div class="col-md-3" data-aos="zoom-in" data-aos-delay="200">
                    <div class="stat-box">
                        <div class="stat-number">30+</div>
                        <div>Years Experience</div>
                    </div>
                </div>
                <div class="col-md-3" data-aos="zoom-in" data-aos-delay="300">
                    <div class="stat-box">
                        <div class="stat-number">4+</div>
                        <div>Countries Served</div>
                    </div>
                </div>
                <div class="col-md-3" data-aos="zoom-in" data-aos-delay="400">
                    <div class="stat-box">
                        <div class="stat-number">100%</div>
                        <div>Quality Assured</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Products Section -->
    <section id="products" class="products-section">
        <div class="container">
            <div class="text-center" data-aos="fade-up">
                <h2 class="section-title">Our Products</h2>
                <p class="lead">Experience G-9 Excellence Across All Products</p>
            </div>

            <div class="row mt-5 justify-content-center align-items-center text-center">

                <!-- Banana -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up">
                    <div class="product-card">
                        <div class="product-image">
                            <img src="./assets/img/banana.jpeg" height="300px" width="100%" alt="Banana">
                        </div>
                        <div class="product-content">
                            <h3 class="product-title">Fresh Banana</h3>
                            <p>Export quality fresh bananas</p>
                            <div>
                                <a href="Banana.php"><button class="btn-enquiry me-2 mb-1">View Details</button></a>
                                <button class="btn-enquiry" data-bs-toggle="modal"
                                    data-bs-target="#enquiryModal">Enquiry</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Guava -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up">
                    <div class="product-card">
                        <div class="product-image">
                            <img src="./assets/img/Guava.jpg" height="300px" width="100%" alt="Guava">
                        </div>
                        <div class="product-content">
                            <h3 class="product-title">Fresh Guava</h3>
                            <p>Premium quality guava exports</p>
                            <a href="Guava.php"><button class="btn-enquiry me-2 mb-1">View Details</button></a>
                            <button class="btn-enquiry" data-bs-toggle="modal"
                                data-bs-target="#enquiryModal">Enquiry</button>
                        </div>
                    </div>
                </div>

                <!-- Mango -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up">
                    <div class="product-card">
                        <div class="product-image">
                            <img src="./assets/img/Mango.jpg" height="300px" width="100%" alt="Mango">
                        </div>
                        <div class="product-content">
                            <h3 class="product-title">Fresh Mango</h3>
                            <p>Delicious export-grade mangoes</p>
                            <a href="Mango.php"><button class="btn-enquiry me-2 mb-1">View Details</button></a>
                            <button class="btn-enquiry" data-bs-toggle="modal"
                                data-bs-target="#enquiryModal">Enquiry</button>
                        </div>
                    </div>
                </div>

                <!-- Jackfruit -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up">
                    <div class="product-card">
                        <div class="product-image">
                            <img src="./assets/img/Jackfruit.jpg" height="300px" width="100%" alt="Jackfruit">
                        </div>
                        <div class="product-content">
                            <h3 class="product-title">Jackfruit</h3>
                            <p>Fresh jackfruit for export</p>
                            <a href="Jackfruit.php"><button class="btn-enquiry me-2 mb-1">View Details</button></a>
                            <button class="btn-enquiry" data-bs-toggle="modal"
                                data-bs-target="#enquiryModal">Enquiry</button>
                        </div>
                    </div>
                </div>

                <!-- Onion -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up">
                    <div class="product-card">
                        <div class="product-image">
                            <img src="./assets/img/onion.jpeg" height="300px" width="100%" alt="Onion">
                        </div>
                        <div class="product-content">
                            <h3 class="product-title">Onion</h3>
                            <p>High-quality onions worldwide export</p>
                            <a href="Onion.php"><button class="btn-enquiry me-2 mb-1">View Details</button></a>
                            <button class="btn-enquiry" data-bs-toggle="modal"
                                data-bs-target="#enquiryModal">Enquiry</button>
                        </div>
                    </div>
                </div>

                <!-- Rice -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up">
                    <div class="product-card">
                        <div class="product-image">
                            <img src="./assets/img/Rice.avif" height="300px" width="100%" alt="Rice">
                        </div>
                        <div class="product-content">
                            <h3 class="product-title">Premium Rice</h3>
                            <p>High-quality rice varieties</p>
                            <a href="Rice.php"><button class="btn-enquiry me-2 mb-1">View Details</button></a>
                            <button class="btn-enquiry" data-bs-toggle="modal"
                                data-bs-target="#enquiryModal">Enquiry</button>
                        </div>
                    </div>
                </div>

                <!-- Industrial Battery -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up">
                    <div class="product-card">
                        <div class="product-image">
                            <img src="./assets/img/Industrial-Battery.jpg" height="300px" width="100%" alt="Battery">
                        </div>
                        <div class="product-content">
                            <h3 class="product-title">Industrial Battery</h3>
                            <p>High-capacity industrial batteries</p>
                            <a href="Industrial-Batteries.php"><button class="btn-enquiry me-2 mb-1">View
                                    Details</button></a>
                            <button class="btn-enquiry" data-bs-toggle="modal"
                                data-bs-target="#enquiryModal">Enquiry</button>
                        </div>
                    </div>
                </div>

                <!-- Inverter -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up">
                    <div class="product-card">
                        <div class="product-image">
                            <img src="./assets/img/Inverter.jpg" height="300px" width="100%" alt="Inverter">
                        </div>
                        <div class="product-content">
                            <h3 class="product-title">Inverter</h3>
                            <p>Reliable power backup solutions</p>
                            <a href="Inverter.php"><button class="btn-enquiry me-2 mb-1">View Details</button></a>
                            <button class="btn-enquiry" data-bs-toggle="modal"
                                data-bs-target="#enquiryModal">Enquiry</button>
                        </div>
                    </div>
                </div>

                <!-- Solar Panel -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up">
                    <div class="product-card">
                        <div class="product-image">
                            <img src="./assets/img/Solar-Panels.avif" height="300px" width="100%" alt="Solar Panel">
                        </div>
                        <div class="product-content">
                            <h3 class="product-title">Solar Panels</h3>
                            <p>Sustainable renewable energy solutions</p>
                            <a href="Solar-Panels.php"><button class="btn-enquiry me-2 mb-1">View Details</button></a>
                            <button class="btn-enquiry" data-bs-toggle="modal"
                                data-bs-target="#enquiryModal">Enquiry</button>
                        </div>
                    </div>
                </div>

                <!-- Ladies Handbag -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up">
                    <div class="product-card">
                        <div class="product-image">
                            <img src="./assets/img/Ladies-Handbag.jpg" height="300px" width="100%" alt="Handbag">
                        </div>
                        <div class="product-content">
                            <h3 class="product-title">Ladies Handbag</h3>
                            <p>Stylish premium handbags</p>
                            <a href="Ladies-Handbag.php"><button class="btn-enquiry me-2 mb-1">View
                                    Details</button></a>
                            <button class="btn-enquiry" data-bs-toggle="modal"
                                data-bs-target="#enquiryModal">Enquiry</button>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="services-section">
        <div class="container">
            <div class="text-center" data-aos="fade-up">
                <h2 class="section-title">Our Services</h2>
                <p class="lead">Comprehensive Business Solutions</p>
            </div>
            <div class="row mt-5">
                <div class="col-lg-3 col-md-6" data-aos="flip-left" data-aos-delay="100">
                    <div class="service-card">
                        <div class="service-icon"><i class="fas fa-shipping-fast"></i></div>
                        <h4>Export Services</h4>
                        <p>Global export solutions to Dubai, Thailand, Iran and more</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6" data-aos="flip-left" data-aos-delay="200">
                    <div class="service-card">
                        <div class="service-icon"><i class="fas fa-dolly"></i></div>
                        <h4>Import Solutions</h4>
                        <p>Quality product imports from international markets</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6" data-aos="flip-left" data-aos-delay="300">
                    <div class="service-card">
                        <div class="service-icon"><i class="fas fa-truck"></i></div>
                        <h4>Supply Chain</h4>
                        <p>Reliable supply of premium products</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6" data-aos="flip-left" data-aos-delay="400">
                    <div class="service-card">
                        <div class="service-icon"><i class="fas fa-handshake"></i></div>
                        <h4>Business Solutions</h4>
                        <p>Construction, Tourism, and Finance services</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery Section -->
    <section id="gallery" class="gallery-section">
        <div class="container">
            <div class="text-center" data-aos="fade-up">
                <h2 class="section-title">Gallery</h2>
                <p class="lead">Showcasing Our Products & Operations</p>
            </div>

            <div class="row mt-5 justify-content-center align-items-center text-center">

                <!-- Rice -->
                <div class="col-lg-4 col-md-6" data-aos="zoom-in">
                    <div class="gallery-item">
                        <img src="./assets/img/Rice.avif" height="auto" width="100%" alt="Rice">
                        <div class="gallery-overlay">
                            <h4>Premium Rice</h4>
                        </div>
                    </div>
                </div>

                <!-- Banana -->
                <div class="col-lg-4 col-md-6" data-aos="zoom-in">
                    <div class="gallery-item">
                        <img src="./assets/img/banana.jpeg" height="auto" width="100%" alt="Banana">
                        <div class="gallery-overlay">
                            <h4>Fresh Banana</h4>
                        </div>
                    </div>
                </div>

                <!-- Guava -->
                <div class="col-lg-4 col-md-6" data-aos="zoom-in">
                    <div class="gallery-item">
                        <img src="./assets/img/Guava.jpg" height="auto" width="100%" alt="Guava">
                        <div class="gallery-overlay">
                            <h4>Fresh Guava</h4>
                        </div>
                    </div>
                </div>

                <!-- Mango -->
                <div class="col-lg-4 col-md-6" data-aos="zoom-in">
                    <div class="gallery-item">
                        <img src="./assets/img/Mango.jpg" height="auto" width="100%" alt="Mango">
                        <div class="gallery-overlay">
                            <h4>Fresh Mango</h4>
                        </div>
                    </div>
                </div>

                <!-- Jackfruit -->
                <div class="col-lg-4 col-md-6" data-aos="zoom-in">
                    <div class="gallery-item">
                        <img src="./assets/img/Jackfruit.jpg" height="auto" width="100%" alt="Jackfruit">
                        <div class="gallery-overlay">
                            <h4>Jackfruit</h4>
                        </div>
                    </div>
                </div>

                <!-- Onion -->
                <div class="col-lg-4 col-md-6" data-aos="zoom-in">
                    <div class="gallery-item">
                        <img src="./assets/img/Onion.jpg" height="auto" width="100%" alt="Onion">
                        <div class="gallery-overlay">
                            <h4>Onion</h4>
                        </div>
                    </div>
                </div>

                <!-- Industrial Battery -->
                <div class="col-lg-4 col-md-6" data-aos="zoom-in">
                    <div class="gallery-item">
                        <img src="./assets/img/Industrial-Battery.jpg" height="auto" width="100%" alt="Battery">
                        <div class="gallery-overlay">
                            <h4>Industrial Battery</h4>
                        </div>
                    </div>
                </div>

                <!-- Inverter -->
                <div class="col-lg-4 col-md-6" data-aos="zoom-in">
                    <div class="gallery-item">
                        <img src="./assets/img/Inverter.jpg" height="auto" width="100%" alt="Inverter">
                        <div class="gallery-overlay">
                            <h4>Inverter</h4>
                        </div>
                    </div>
                </div>

                <!-- Solar Panel -->
                <div class="col-lg-4 col-md-6" data-aos="zoom-in">
                    <div class="gallery-item">
                        <img src="./assets/img/Solar-Panels.avif" height="auto" width="100%" alt="Solar Panel">
                        <div class="gallery-overlay">
                            <h4>Solar Panels</h4>
                        </div>
                    </div>
                </div>

                <!-- Ladies Handbag -->
                <div class="col-lg-4 col-md-6" data-aos="zoom-in">
                    <div class="gallery-item">
                        <img src="./assets/img/Ladies-Handbag.jpg" height="auto" width="100%" alt="Handbag">
                        <div class="gallery-overlay">
                            <h4>Ladies Handbag</h4>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact-section">
        <div class="container">
            <div class="text-center" data-aos="fade-up">
                <h2 class="section-title">Contact Us</h2>
                <p class="lead">Get In Touch With Us</p>
            </div>
            <div class="row mt-5">
                <div class="col-lg-6 mb-2" data-aos="fade-right" data-aos-delay="100">
                    <div class="contact-form">
                        <h3 class="mb-4">Send Us A Message</h3>
                        <form id="contactForm">
                            <div class="mb-3">
                                <label class="form-label">Your Name</label>
                                <input type="text" class="form-control" placeholder="Enter your name" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Email Address</label>
                                <input type="email" class="form-control" placeholder="Enter your email" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Phone Number</label>
                                <input type="tel" class="form-control" placeholder="Enter your phone" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Product Interest</label>
                                <select class="form-control">
                                    <option>Select Product</option>
                                    <option>Rice</option>
                                    <option>Fresh Fruits</option>
                                    <option>Ladies Handbags</option>
                                    <option>Industrial Batteries</option>
                                    <option>Inverters</option>
                                    <option>Solar Panels</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Message</label>
                                <textarea class="form-control" rows="4" placeholder="Your message here..."></textarea>
                            </div>
                            <button type="submit" class="btn-quote w-100 mb-3">
                                <i class="fas fa-paper-plane"></i> Send Message
                            </button>
                            <button type="button" class="btn-whatsapp w-100" onclick="openWhatsApp()">
                                <i class="fab fa-whatsapp"></i> Chat on WhatsApp
                            </button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left" data-aos-delay="200">
                    <div class="contact-info">
                        <h3 class="mb-4">Contact Information</h3>
                        <div class="contact-item">
                            <i class="fas fa-map-marker-alt"></i>
                            <div>
                                <h5>Address</h5>
                                <p>Shop no 3 Rachana Sukurt, Tilaknagar<br>Dombivli East, Maharastra - 421203, INDIA</p>
                            </div>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-phone"></i>
                            <div>
                                <h5>Phone</h5>
                                <p>+91-9892117648<br>+91-9930948180</p>
                            </div>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-envelope"></i>
                            <div>
                                <h5>Email</h5>
                                <p>info@dhruvventures.com</p>
                            </div>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-globe"></i>
                            <div>
                                <h5>Countries We Serve</h5>
                                <p>India | Dubai | Thailand | Iran</p>
                            </div>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-clock"></i>
                            <div>
                                <h5>Business Hours</h5>
                                <p>Monday - Saturday: 9:00 AM - 7:00 PM<br>Sunday: Closed</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section class="newsletter-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6" data-aos="fade-right">
                    <h2 class="mb-3">Subscribe to Our Newsletter</h2>
                    <p>Get latest updates on products, offers and business opportunities</p>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <form class="newsletter-form">
                        <input type="email" class="newsletter-input" placeholder="Enter your email address" required>
                        <button type="submit" class="btn-subscribe">
                            <i class="fas fa-paper-plane"></i> Subscribe
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- footer -->
    <?php include('footer.php') ?>