<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Fashion Fit - Trendy, comfortable, and affordable fashion delivered across the USA. Shop the latest styles in men's wear, women's wear, and accessories.">
  <meta name="keywords" content="fashion, clothing, online shopping, men's wear, women's wear, accessories, USA fashion">
  <title>Fashion Fit - Find Your Perfect Style</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <!-- Header & Navigation -->
  <header class="header">
    <div class="container">
      <nav class="navbar">
        <a href="index.html" class="logo">Fashion Fit</a>
        
        <ul class="nav-links">
          <li><a href="index.html">Home</a></li>
          <li><a href="shop.html">Shop</a></li>
          <li><a href="about.html">About</a></li>
          <li><a href="contact.html">Contact</a></li>
        </ul>
        
        <div class="nav-actions">
          <a href="cart.html" class="cart-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M9 2L9 6M15 2L15 6M3.5 9.09h17M3 13.55V9.09C3 6.5 3 5.21 3.77 4.36 4.54 3.5 5.72 3.5 8.09 3.5h7.82c2.37 0 3.55 0 4.32.86.77.85.77 2.14.77 4.73v4.46c0 3.54 0 5.31-1.09 6.42C18.82 21.06 17.1 21.06 13.64 21.06h-3.28c-3.46 0-5.18 0-6.27-1.09C3 18.88 3 17.1 3 13.55Z"/>
            </svg>
            <span class="cart-count">0</span>
          </a>
          <button class="mobile-menu-btn">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <line x1="3" y1="12" x2="21" y2="12"></line>
              <line x1="3" y1="6" x2="21" y2="6"></line>
              <line x1="3" y1="18" x2="21" y2="18"></line>
            </svg>
          </button>
        </div>
      </nav>
    </div>
  </header>

  <!-- Hero Section -->
  <section class="hero">
    <img src="https://images.unsplash.com/photo-1740664651822-3a02ec12c121?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxsdXh1cnklMjBmYXNoaW9uJTIwaGVybyUyMGJhbm5lcnxlbnwxfHx8fDE3NzA2NjEwMTh8MA&ixlib=rb-4.1.0&q=80&w=1080" alt="Fashion Hero" class="hero-image">
    <div class="hero-overlay"></div>
    <div class="hero-content">
      <div class="hero-text">
        <h1>Find Your Perfect Style with Fashion Fit</h1>
        <p>Trendy, comfortable, and affordable fashion delivered across the USA.</p>
        <div class="hero-buttons">
          <a href="shop.html" class="btn btn-primary">Shop Now</a>
          <a href="shop.html?category=new-arrivals" class="btn btn-secondary">Explore Collection</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Featured Products -->
  <section class="section section-gray">
    <div class="container">
      <div class="section-header">
        <h2>Featured Products</h2>
        <p>Discover our handpicked selection of trending items</p>
      </div>
      <div class="product-grid" id="featured-products"></div>
    </div>
  </section>

  <!-- Categories Section -->
  <section class="section">
    <div class="container">
      <div class="section-header">
        <h2>Shop by Category</h2>
        <p>Find exactly what you're looking for</p>
      </div>
      <div class="category-grid">
        <a href="shop.html?category=mens" class="category-card">
          <img src="https://images.unsplash.com/photo-1635913906376-53130718255a?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxtZW5zJTIwZmFzaGlvbiUyMHN0eWxlJTIwbW9kZWx8ZW58MXx8fHwxNzcwNjYxMDE2fDA&ixlib=rb-4.1.0&q=80&w=1080" alt="Men's Wear">
          <div class="category-overlay"></div>
          <div class="category-name">Men's Wear</div>
        </a>
        <a href="shop.html?category=womens" class="category-card">
          <img src="https://images.unsplash.com/photo-1763824969015-e5d1d6755782?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHx3b21lbnMlMjBmYXNoaW9uJTIwYm91dGlxdWUlMjBzaG9wcGluZ3xlbnwxfHx8fDE3NzA2NjEwMTd8MA&ixlib=rb-4.1.0&q=80&w=1080" alt="Women's Wear">
          <div class="category-overlay"></div>
          <div class="category-name">Women's Wear</div>
        </a>
        <a href="shop.html?category=accessories" class="category-card">
          <img src="https://images.unsplash.com/photo-1762513461072-5008c7f6511d?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxmYXNoaW9uJTIwYWNjZXNzb3JpZXMlMjBqZXdlbHJ5JTIwd2F0Y2h8ZW58MXx8fHwxNzcwNjYxMDE3fDA&ixlib=rb-4.1.0&q=80&w=1080" alt="Accessories">
          <div class="category-overlay"></div>
          <div class="category-name">Accessories</div>
        </a>
        <a href="shop.html?category=new-arrivals" class="category-card">
          <img src="https://images.unsplash.com/photo-1643594304277-c5783a056913?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxuZXclMjBmYXNoaW9uJTIwYXJyaXZhbHMlMjBjbG90aGluZ3xlbnwxfHx8fDE3NzA2Mjk2NTh8MA&ixlib=rb-4.1.0&q=80&w=1080" alt="New Arrivals">
          <div class="category-overlay"></div>
          <div class="category-name">New Arrivals</div>
        </a>
      </div>
    </div>
  </section>

  <!-- Why Shop With Us -->
  <section class="section section-gray">
    <div class="container">
      <div class="section-header">
        <h2>Why Shop With Fashion Fit</h2>
        <p>We're committed to delivering the best shopping experience</p>
      </div>
      <div class="features-grid">
        <div class="feature-card">
          <svg class="feature-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
          </svg>
          <h3>Trendy Styles</h3>
          <p>Latest fashion trends curated for you</p>
        </div>
        <div class="feature-card">
          <svg class="feature-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>
          </svg>
          <h3>Premium Quality</h3>
          <p>High-quality materials and craftsmanship</p>
        </div>
        <div class="feature-card">
          <svg class="feature-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
          </svg>
          <h3>Cash on Delivery</h3>
          <p>Pay when you receive your order</p>
        </div>
        <div class="feature-card">
          <svg class="feature-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h1m8-1a1 1 0 01-1 1H9m4-1V8a1 1 0 011-1h2.586a1 1 0 01.707.293l3.414 3.414a1 1 0 01.293.707V16a1 1 0 01-1 1h-1m-6-1a1 1 0 001 1h1M5 17a2 2 0 104 0m-4 0a2 2 0 114 0m6 0a2 2 0 104 0m-4 0a2 2 0 114 0"></path>
          </svg>
          <h3>Fast Shipping</h3>
          <p>Quick delivery across the USA</p>
        </div>
        <div class="feature-card">
          <svg class="feature-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path>
          </svg>
          <h3>Easy Returns</h3>
          <p>Hassle-free return policy</p>
        </div>
        <div class="feature-card">
          <svg class="feature-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
          </svg>
          <h3>Secure Shopping</h3>
          <p>Your data is safe with us</p>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA Section -->
  <section class="section section-black">
    <div class="container">
      <div class="text-center">
        <h2 style="font-size: 2.5rem; font-weight: bold; margin-bottom: 1.5rem;">Ready to Elevate Your Style?</h2>
        <p style="font-size: 1.25rem; color: var(--color-gray-300); margin-bottom: 2rem;">Join thousands of satisfied customers shopping with Fashion Fit</p>
        <a href="shop.html" class="btn btn-primary">Start Shopping</a>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="footer">
    <div class="container">
      <div class="footer-content">
        <div class="footer-section">
          <h3>Fashion Fit</h3>
          <p style="color: var(--color-gray-300); margin-top: 1rem;">Your destination for trendy, comfortable, and affordable fashion across the USA.</p>
        </div>
        <div class="footer-section">
          <h3>Quick Links</h3>
          <ul class="footer-links">
            <li><a href="index.html">Home</a></li>
            <li><a href="shop.html">Shop</a></li>
            <li><a href="about.html">About Us</a></li>
            <li><a href="contact.html">Contact</a></li>
          </ul>
        </div>
        <div class="footer-section">
          <h3>Categories</h3>
          <ul class="footer-links">
            <li><a href="shop.html?category=mens">Men's Wear</a></li>
            <li><a href="shop.html?category=womens">Women's Wear</a></li>
            <li><a href="shop.html?category=accessories">Accessories</a></li>
          </ul>
        </div>
        <div class="footer-section">
          <h3>Legal</h3>
          <ul class="footer-links">
            <li><a href="terms.html">Terms & Conditions</a></li>
            <li><a href="privacy.html">Privacy Policy</a></li>
          </ul>
        </div>
      </div>
      <div class="footer-bottom">
        <p>&copy; 2026 Fashion Fit. All rights reserved.</p>
      </div>
    </div>
  </footer>

  <script src="app.js"></script>
  <script>
    // Load featured products
    document.addEventListener('DOMContentLoaded', function() {
      const featuredContainer = document.getElementById('featured-products');
      const featuredProducts = products.filter(p => p.featured);
      featuredContainer.innerHTML = featuredProducts.map(product => renderProductCard(product)).join('');
    });
  </script>
</body>
</html>
