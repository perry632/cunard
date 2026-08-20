<?php
include 'inc/header.php';
?>

<!-- ===== HERO WITH BACKGROUND IMAGE ===== -->
<style>
  .hero-cruise {
    background: url('assets/images/cruise-ship-1.jpg') no-repeat center center / cover;
    color: white;
    padding: 80px 0 60px;
    text-align: center;
    position: relative;
    min-height: 500px;
    display: flex;
    align-items: center;
  }
  .hero-cruise::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(3, 58, 118, 0.5); /* Navy overlay for readability */
    z-index: 1;
  }
  .hero-cruise .container {
    position: relative;
    z-index: 2;
  }
  .hero-cruise h1 {
    font-size: clamp(2.5rem, 7vw, 4.2rem);
    font-weight: 700;
    line-height: 1.2;
    max-width: 800px;
    margin: 0 auto 10px;
  }
  .hero-cruise p {
    font-size: 1.2rem;
    opacity: 0.9;
    max-width: 600px;
    margin: 10px auto 28px;
  }
  .hero-cruise .btn {
    display: inline-block;
    padding: 14px 50px;
    border-radius: 60px;
    font-weight: 600;
    font-size: 1rem;
    text-decoration: none;
    background: transparent;
    color: white;
    border: 2px solid white;
    transition: 0.25s;
    cursor: pointer;
    margin-bottom: 40px;
  }
  .hero-cruise .btn:hover {
    background: #97022d;
    border-color: #97022d;
    color: white;
  }
  .cards-grid {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 30px;
    margin-top: 10px;
  }
  .card-item {
    flex: 1 1 220px;
    max-width: 280px;
    min-height: 200px;
    background: rgba(255, 255, 255, 0.1);
    backdrop-filter: blur(6px);
    -webkit-backdrop-filter: blur(6px);
    border-radius: 12px;
    padding: 24px 18px;
    text-align: center;
    border: 1px solid rgba(255, 255, 255, 0.2);
    transition: 0.3s ease;
    color: white;
    display: flex;
    flex-direction: column;
    justify-content: center;
  }
  .card-item:hover {
    background: rgba(255, 255, 255, 0.2);
    transform: translateY(-4px);
    border-color: #97022d;
  }
  .card-item h3 {
    font-weight: 700;
    font-size: 1.2rem;
    margin-bottom: 8px;
  }
  .card-item p {
    font-size: 0.9rem;
    opacity: 0.85;
    line-height: 1.5;
  }
  @media (max-width: 720px) {
    .hero-cruise {
      min-height: 400px;
      padding: 50px 0 30px;
    }
    .card-item {
      flex: 1 1 100%;
      max-width: 100%;
      min-height: 140px;
    }
  }
</style>

<!-- HERO WITH BACKGROUND IMAGE -->
<section class="hero-cruise">
  <div class="container">
    <h1>Explore<br />Unforgettable Cruise<br />Adventures Today</h1>
    <p>Your premier travel service provider for unforgettable cruise experiences awaits you.</p>
    <a href="#" class="btn">Discover</a>

    <div class="cards-grid">
      <div class="card-item">
        <h3>Cruise Packages</h3>
        <p>Explore our diverse range of cruise packages available.</p>
      </div>
      <div class="card-item">
        <h3>Travel Experts</h3>
        <p>Experience luxury and comfort on every journey.</p>
      </div>
      <div class="card-item">
        <h3>Book Now</h3>
        <p>Join us for an unforgettable travel experience.</p>
      </div>
    </div>
  </div>
</section>

<!-- ABOUT -->
<section class="about-section">
  <div class="container">
    <div class="about-content">
      <div class="label"><?php echo $brand_name; ?></div>
      <h2>About <?php echo $brand_name; ?></h2>
      <p>We provide exceptional cruise travel services, ensuring unforgettable experiences on the high seas for all our valued customers.</p>
      <a href="#" class="btn-outline-dark">Explore</a>
    </div>
    <div class="about-images">
      <div class="img-wrap">
        <img src="assets/images/cruise-ship-1.jpg" alt="Cruise ship" />
      </div>
      <div class="img-wrap">
        <img src="assets/images/cruise-ship-2.jpg" alt="Cruise ship docked" />
      </div>
    </div>
  </div>
</section>

<!-- SERVICES -->
<section class="services-section">
  <div class="container">
    <div class="top">
      <div class="label"><?php echo $brand_name; ?></div>
      <h2>Cruise Travel Services</h2>
      <p>Explore our exceptional cruise travel services tailored for unforgettable adventures on the sea.</p>
    </div>
    <div class="services-grid">
      <div class="service-item">
        <div class="service-image">
          <img src="assets/images/package.jpg" alt="Packages" />
        </div>
        <h4>Personalized Cruise Packages</h4>
        <p>Tailored packages to suit your travel preferences and ensure a memorable cruise experience.</p>
      </div>
      <div class="service-item">
        <div class="service-image">
          <img src="assets/images/packages-1.jpg" alt="Expert Guidance" />
        </div>
        <h4>Expert Travel Guidance</h4>
        <p>Our experienced team provides expert advice to help you plan the perfect cruise getaway.</p>
      </div>
      <div class="service-item">
        <div class="service-image">
          <img src="assets/images/packages-2.jpg" alt="Booking" />
        </div>
        <h4>Seamless Booking</h4>
        <p>Seamless booking for your dream cruise vacation. Comprehensive Booking Solutions.</p>
      </div>
    </div>
  </div>
</section>

<!-- ADVENTURES -->
<section class="adventures-section">
  <div class="container">
    <div class="top">
      <div class="label"><?php echo $brand_name; ?></div>
      <h2>Cruise Adventures</h2>
      <p>Explore our stunning gallery showcasing unforgettable cruise travel experiences.</p>
    </div>
    <div class="adventures-grid">
      <div class="adventure-item">
        <div class="adventure-image">
          <img src="assets/images/ocean-explorer.jpg" alt="Ocean Explorer" />
        </div>
        <div class="adventure-info"><h4>Ocean Explorer</h4></div>
      </div>
      <div class="adventure-item">
        <div class="adventure-image">
          <img src="assets/images/island-escape.jpg" alt="Island Escape" />
        </div>
        <div class="adventure-info"><h4>Island Escape</h4></div>
      </div>
      <div class="adventure-item">
        <div class="adventure-image">
          <img src="assets/images/sunset-voyage.jpg" alt="Sunset Voyage" />
        </div>
        <div class="adventure-info"><h4>Sunset Voyage</h4></div>
      </div>
      <div class="adventure-item">
        <div class="adventure-image">
          <img src="assets/images/coastal-discovery.jpg" alt="Coastal Discovery" />
        </div>
        <div class="adventure-info"><h4>Coastal Discovery</h4></div>
      </div>
    </div>
  </div>
</section>

<!-- TESTIMONIALS -->
<section class="review-section">
  <div class="container">
    <div class="review-wrapper">
      <div class="review-track" id="reviewTrack">
        <div class="review-slide">
          <div class="review-image">
            <img src="assets/images/men.jpg" alt="John Doe" />
          </div>
          <div class="stars">★★★★★</div>
          <blockquote><?php echo $brand_name; ?> made my travel experience unforgettable with their exceptional service and amazing cruise options.</blockquote>
          <div class="author">John Doe</div>
        </div>
        <div class="review-slide">
          <div class="review-image">
            <img src="assets/images/girl.jpg" alt="Sarah Johnson" />
          </div>
          <div class="stars">★★★★★</div>
          <blockquote>The best cruise experience I've ever had! The staff was incredible and the destinations were breathtaking.</blockquote>
          <div class="author">Sarah Johnson</div>
        </div>
        <div class="review-slide">
          <div class="review-image">
            <img src="assets/images/girl1.jpg" alt="Michael Chen" />
          </div>
          <div class="stars">★★★★★</div>
          <blockquote>From the moment we boarded until we disembarked, everything was perfect. Highly recommend!</blockquote>
          <div class="author">Michael Chen</div>
        </div>
      </div>
    </div>
    <div class="dots" id="dotsContainer">
      <button class="dot active" data-index="0"></button>
      <button class="dot" data-index="1"></button>
      <button class="dot" data-index="2"></button>
    </div>
  </div>
</section>

<?php include 'inc/footer.php'; ?>