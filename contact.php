<?php
include 'inc/header.php';
?>

<!-- PAGE HERO -->
<section class="page-hero">
  <div class="container">
    <div class="label"><?php echo $brand_name; ?></div>
    <h1>Get in Touch</h1>
    <p>Have questions about your next cruise adventure? We're here to help. Reach out to our team and let us make your dream voyage a reality.</p>
  </div>
</section>

<!-- CONTACT SECTION -->
<section class="contact-section">
  <div class="container">
    <div class="top">
      <div class="label"><?php echo $brand_name; ?></div>
      <h2>Contact Us</h2>
      <p>Get in touch with our dedicated team for bookings, inquiries, and any questions about your next adventure.</p>
    </div>

    <div class="contact-wrapper">
      <div class="contact-form">
        <form>
          <label for="name">Full Name</label>
          <input type="text" id="name" placeholder="Your full name" />

          <label for="email">Email Address</label>
          <input type="email" id="email" placeholder="your@email.com" />

          <label for="phone">Phone Number</label>
          <input type="tel" id="phone" placeholder="+1 (555) 000-0000" />

          <label for="message">Message</label>
          <textarea id="message" placeholder="Tell us about your dream cruise..."></textarea>

          <button type="submit" class="btn-submit-form">Send Message</button>
        </form>
      </div>

      <div class="contact-info">
        <div class="info-item">
          <div class="icon">📍</div>
          <h4>Address</h4>
          <p><?php echo $address; ?></p>
        </div>
        <div class="info-item">
          <div class="icon">📞</div>
          <h4>Phone</h4>
          <p><a href="tel:<?php echo str_replace([' ', '(', ')', '-'], '', $phone); ?>"><?php echo $phone; ?></a></p>
        </div>
        <div class="info-item">
          <div class="icon">✉️</div>
          <h4>Email</h4>
          <p><a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></p>
        </div>
        <div class="info-item">
          <div class="icon">🕐</div>
          <h4>Working Hours</h4>
          <p>Mon – Fri: 9:00 AM – 8:00 PM<br />Sat – Sun: 10:00 AM – 6:00 PM</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- GOOGLE MAP -->
<section class="map-section">
  <div class="container">
    <div class="map-container">
      <iframe 
        src="<?php echo $google_map_link; ?>" 
        width="100%" 
        height="350" 
        style="border:0;" 
        allowfullscreen="" 
        loading="lazy">
      </iframe>
    </div>
  </div>
</section>

<?php include 'inc/footer.php'; ?>