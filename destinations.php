<?php
include 'inc/header.php';
?>

<!-- PAGE HERO -->
<section class="page-hero">
  <div class="container">
    <div class="label"><?php echo $brand_name; ?></div>
    <h1>Explore Our Destinations</h1>
    <p>Discover breathtaking cruise destinations around the world. From tropical paradises to cultural hubs, your dream adventure awaits.</p>
  </div>
</section>

<!-- DESTINATIONS GRID -->
<section class="destinations-section">
  <div class="container">
    <div class="top">
      <div class="label"><?php echo $brand_name; ?></div>
      <h2>Popular Destinations</h2>
      <p>Explore our stunning gallery showcasing unforgettable cruise travel experiences.</p>
    </div>

    <div class="destinations-grid">
      <div class="destination-card">
        <div class="dest-image">
          <img src="assets/images/destinations/caribbean.jpg" alt="Caribbean" />
        </div>
        <div class="dest-info">
          <div class="region">Caribbean</div>
          <h3>Bahamas & Caribbean</h3>
          <p>Experience crystal-clear waters, white sandy beaches, and vibrant island culture.</p>
          <a href="#" class="btn-outline-small">Explore</a>
        </div>
      </div>

      <div class="destination-card">
        <div class="dest-image">
          <img src="assets/images/destinations/europe.jpg" alt="Mediterranean" />
        </div>
        <div class="dest-info">
          <div class="region">Europe</div>
          <h3>Mediterranean</h3>
          <p>Explore historic cities, stunning coastlines, and delicious cuisine across Europe.</p>
          <a href="#" class="btn-outline-small">Explore</a>
        </div>
      </div>

      <div class="destination-card">
        <div class="dest-image">
          <img src="assets/images/destinations/north-america.jpg" alt="Alaska" />
        </div>
        <div class="dest-info">
          <div class="region">North America</div>
          <h3>Alaska</h3>
          <p>Witness majestic glaciers, wildlife, and breathtaking natural beauty in the wild.</p>
          <a href="#" class="btn-outline-small">Explore</a>
        </div>
      </div>

      <div class="destination-card">
        <div class="dest-image">
          <img src="assets/images/destinations/asia.jpg" alt="Asia" />
        </div>
        <div class="dest-info">
          <div class="region">Asia</div>
          <h3>Southeast Asia</h3>
          <p>Discover exotic cultures, ancient temples, and stunning tropical landscapes.</p>
          <a href="#" class="btn-outline-small">Explore</a>
        </div>
      </div>

      <div class="destination-card">
        <div class="dest-image">
          <img src="assets/images/destinations/europe1.jpg" alt="Norway" />
        </div>
        <div class="dest-info">
          <div class="region">Europe</div>
          <h3>Norwegian Fjords</h3>
          <p>Sail through dramatic fjords, waterfalls, and charming Scandinavian villages.</p>
          <a href="#" class="btn-outline-small">Explore</a>
        </div>
      </div>

      <div class="destination-card">
        <div class="dest-image">
          <img src="assets/images/destinations/pacific.jpg" alt="Pacific" />
        </div>
        <div class="dest-info">
          <div class="region">Pacific</div>
          <h3>South Pacific</h3>
          <p>Relax on pristine beaches and explore vibrant coral reefs in paradise.</p>
          <a href="#" class="btn-outline-small">Explore</a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- FEATURED DESTINATION -->
<section class="featured-dest">
  <div class="container">
    <div class="featured-image">
      <img src="assets/images/destinations/destination.jpg" alt="Featured destination" />
    </div>
    <div class="featured-content">
      <div class="label">Featured</div>
      <h2>Mediterranean Odyssey</h2>
      <p>Embark on a journey through the heart of the Mediterranean. Visit iconic cities like Barcelona, Rome, and Athens, and experience the rich culture, history, and cuisine of Europe.</p>
      <a href="#" class="btn-outline-white">Learn More</a>
    </div>
  </div>
</section>

<?php include 'inc/footer.php'; ?>